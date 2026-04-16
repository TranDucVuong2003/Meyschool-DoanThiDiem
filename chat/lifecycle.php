<?php

declare(strict_types=1);

const CHAT_INACTIVE_CLOSE_HOURS = 24;
const CHAT_ARCHIVE_AFTER_DAYS = 90;
const CHAT_PURGE_AFTER_DAYS = 180;

function chat_interval_hours(int $hours): int
{
    return max(1, $hours);
}

function chat_interval_days(int $days): int
{
    return max(1, $days);
}

function chat_is_inactive(?string $lastMessageAt, int $inactiveHours = CHAT_INACTIVE_CLOSE_HOURS): bool
{
    $lastTs = strtotime((string) $lastMessageAt);
    if ($lastTs === false) {
        return true;
    }

    $inactiveHours = chat_interval_hours($inactiveHours);
    return $lastTs < (time() - ($inactiveHours * 3600));
}

function chat_find_latest_conversation_by_token(PDO $pdo, string $visitorToken, bool $forUpdate = false): ?array
{
    $sql = 'SELECT *
            FROM chat_conversations
            WHERE visitor_token = :visitor_token OR session_token = :session_token
            ORDER BY id DESC
            LIMIT 1';

    if ($forUpdate) {
        $sql .= ' FOR UPDATE';
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':visitor_token' => $visitorToken,
        ':session_token' => $visitorToken,
    ]);
    $row = $stmt->fetch();

    return $row ?: null;
}

function chat_get_conversation_by_id(PDO $pdo, int $conversationId): ?array
{
    $stmt = $pdo->prepare('SELECT * FROM chat_conversations WHERE id = ? LIMIT 1');
    $stmt->execute([$conversationId]);
    $row = $stmt->fetch();

    return $row ?: null;
}

function chat_get_guest_conversation_by_id(PDO $pdo, int $conversationId, string $visitorToken): ?array
{
    $stmt = $pdo->prepare(
        'SELECT *
         FROM chat_conversations
         WHERE id = ?
           AND (visitor_token = ? OR session_token = ?)
         LIMIT 1'
    );
    $stmt->execute([$conversationId, $visitorToken, $visitorToken]);
    $row = $stmt->fetch();

    return $row ?: null;
}

function chat_close_conversation(PDO $pdo, int $conversationId): void
{
    $stmt = $pdo->prepare(
        'UPDATE chat_conversations
         SET status = "closed",
             closed_at = COALESCE(closed_at, NOW()),
             updated_at = NOW()
         WHERE id = ? AND status = "open"'
    );
    $stmt->execute([$conversationId]);
}

function chat_auto_close_single_conversation(PDO $pdo, array $conversation, int $inactiveHours = CHAT_INACTIVE_CLOSE_HOURS): array
{
    if (($conversation['status'] ?? '') !== 'open') {
        return $conversation;
    }

    if (!chat_is_inactive((string) ($conversation['last_message_at'] ?? ''), $inactiveHours)) {
        return $conversation;
    }

    chat_close_conversation($pdo, (int) $conversation['id']);
    $conversation['status'] = 'closed';
    $conversation['closed_at'] = date('Y-m-d H:i:s');

    return $conversation;
}

function chat_is_conversation_reusable(array $conversation, int $inactiveHours = CHAT_INACTIVE_CLOSE_HOURS): bool
{
    if (($conversation['status'] ?? '') !== 'open') {
        return false;
    }

    return !chat_is_inactive((string) ($conversation['last_message_at'] ?? ''), $inactiveHours);
}

function chat_with_visitor_lock(PDO $pdo, string $visitorToken, callable $callback)
{
    $lockName = 'chat_lifecycle_' . sha1($visitorToken);

    $stmt = $pdo->prepare('SELECT GET_LOCK(?, 5) AS lock_ok');
    $stmt->execute([$lockName]);
    $lockOk = (int) ($stmt->fetch()['lock_ok'] ?? 0);

    if ($lockOk !== 1) {
        throw new RuntimeException('Không thể khóa phiên chat, vui lòng thử lại.');
    }

    try {
        return $callback();
    } finally {
        $release = $pdo->prepare('SELECT RELEASE_LOCK(?)');
        $release->execute([$lockName]);
    }
}

function chat_create_conversation(PDO $pdo, string $visitorToken, string $guestName, string $guestPhone): array
{
    $stmt = $pdo->prepare(
        'INSERT INTO chat_conversations
        (guest_name, guest_phone, visitor_token, session_token, status, assigned_admin_id, last_message_at, created_at, updated_at, closed_at, archived_at)
        VALUES (?, ?, ?, ?, "open", NULL, NOW(), NOW(), NOW(), NULL, NULL)'
    );
    $stmt->execute([$guestName, $guestPhone, $visitorToken, $visitorToken]);

    $conversationId = (int) $pdo->lastInsertId();
    $conversation = chat_get_conversation_by_id($pdo, $conversationId);

    if (!$conversation) {
        throw new RuntimeException('Không thể tạo conversation mới.');
    }

    return $conversation;
}

function chat_get_or_create_active_conversation(
    PDO $pdo,
    string $visitorToken,
    string $guestName,
    string $guestPhone,
    int $inactiveHours = CHAT_INACTIVE_CLOSE_HOURS
): array {
    return chat_with_visitor_lock($pdo, $visitorToken, function () use ($pdo, $visitorToken, $guestName, $guestPhone, $inactiveHours) {
        $pdo->beginTransaction();

        try {
            $latest = chat_find_latest_conversation_by_token($pdo, $visitorToken, true);

            if ($latest) {
                $stmt = $pdo->prepare(
                    'UPDATE chat_conversations
                     SET guest_name = ?,
                         guest_phone = ?,
                         visitor_token = ?,
                         session_token = ?,
                         updated_at = NOW()
                     WHERE id = ?'
                );
                $stmt->execute([$guestName, $guestPhone, $visitorToken, $visitorToken, (int) $latest['id']]);

                $latest = chat_get_conversation_by_id($pdo, (int) $latest['id']) ?: $latest;
                $latest = chat_auto_close_single_conversation($pdo, $latest, $inactiveHours);
            }

            if ($latest && chat_is_conversation_reusable($latest, $inactiveHours)) {
                $pdo->commit();
                return $latest;
            }

            $newConversation = chat_create_conversation($pdo, $visitorToken, $guestName, $guestPhone);
            $pdo->commit();

            return $newConversation;
        } catch (Throwable $e) {
            if ($pdo->inTransaction()) {
                $pdo->rollBack();
            }
            throw $e;
        }
    });
}

function chat_resolve_reusable_conversation(PDO $pdo, string $visitorToken, int $inactiveHours = CHAT_INACTIVE_CLOSE_HOURS): ?array
{
    $conversation = chat_find_latest_conversation_by_token($pdo, $visitorToken, false);
    if (!$conversation) {
        return null;
    }

    $conversation = chat_auto_close_single_conversation($pdo, $conversation, $inactiveHours);
    if (!chat_is_conversation_reusable($conversation, $inactiveHours)) {
        return null;
    }

    return $conversation;
}

function chat_close_expired_open_conversations(PDO $pdo, int $inactiveHours = CHAT_INACTIVE_CLOSE_HOURS): int
{
    $inactiveHours = chat_interval_hours($inactiveHours);

    $sql = "UPDATE chat_conversations
            SET status = 'closed',
                closed_at = COALESCE(closed_at, NOW()),
                updated_at = NOW()
            WHERE status = 'open'
              AND last_message_at < DATE_SUB(NOW(), INTERVAL {$inactiveHours} HOUR)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return (int) $stmt->rowCount();
}

function chat_archive_closed_conversations(PDO $pdo, int $archiveAfterDays = CHAT_ARCHIVE_AFTER_DAYS): int
{
    $archiveAfterDays = chat_interval_days($archiveAfterDays);

    $sql = "UPDATE chat_conversations
            SET status = 'archived',
                archived_at = NOW(),
                updated_at = NOW()
            WHERE status = 'closed'
              AND closed_at IS NOT NULL
              AND closed_at < DATE_SUB(NOW(), INTERVAL {$archiveAfterDays} DAY)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return (int) $stmt->rowCount();
}

function chat_delete_archived_conversations(PDO $pdo, int $purgeAfterDays = CHAT_PURGE_AFTER_DAYS): int
{
    $purgeAfterDays = chat_interval_days($purgeAfterDays);

    $sql = "DELETE FROM chat_conversations
            WHERE status = 'archived'
              AND archived_at IS NOT NULL
              AND archived_at < DATE_SUB(NOW(), INTERVAL {$purgeAfterDays} DAY)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return (int) $stmt->rowCount();
}
