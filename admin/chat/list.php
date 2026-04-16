<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';
$adminId = admin_chat_require_auth();

if (strtoupper($_SERVER['REQUEST_METHOD'] ?? '') !== 'GET') {
    admin_chat_json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$keyword = admin_chat_clean_text((string) ($_GET['keyword'] ?? ''));
$status = admin_chat_clean_text((string) ($_GET['status'] ?? ''));

$params = [];
$where = [];

if ($keyword !== '') {
    $where[] = '(c.guest_name LIKE ? OR c.guest_phone LIKE ?)';
    $params[] = '%' . $keyword . '%';
    $params[] = '%' . $keyword . '%';
}

if ($status !== '' && in_array($status, ['open', 'closed', 'archived'], true)) {
    $where[] = 'c.status = ?';
    $params[] = $status;
}

$whereSql = $where ? ('WHERE ' . implode(' AND ', $where)) : '';

$sql = "
SELECT
    c.id,
    c.guest_name,
    c.guest_phone,
    c.status,
    c.assigned_admin_id,
    c.last_message_at,
    c.created_at,
    c.updated_at,
    (
        SELECT COUNT(*)
        FROM chat_messages m2
        WHERE m2.conversation_id = c.id
          AND m2.sender_type = 'guest'
          AND m2.is_read = 0
    ) AS unread_count,
    (
        SELECT m3.message
        FROM chat_messages m3
        WHERE m3.conversation_id = c.id
        ORDER BY m3.id DESC
        LIMIT 1
    ) AS last_message
FROM chat_conversations c
{$whereSql}
ORDER BY c.last_message_at DESC, c.id DESC
LIMIT 200
";

try {
    chat_close_expired_open_conversations($pdo);

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $rows = $stmt->fetchAll();

    admin_chat_json([
        'success' => true,
        'conversations' => $rows,
        'admin_id' => $adminId,
    ]);
} catch (Throwable $e) {
    error_log('Admin chat list error: ' . $e->getMessage());
    admin_chat_json(['success' => false, 'message' => 'Không thể tải danh sách hội thoại.'], 500);
}
