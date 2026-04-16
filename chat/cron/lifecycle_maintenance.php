<?php

declare(strict_types=1);

require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../lifecycle.php';

if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    echo "Forbidden\n";
    exit;
}

$closeHours = (int) ($_SERVER['CHAT_CLOSE_HOURS'] ?? CHAT_INACTIVE_CLOSE_HOURS);
$archiveDays = (int) ($_SERVER['CHAT_ARCHIVE_DAYS'] ?? CHAT_ARCHIVE_AFTER_DAYS);
$purgeDays = (int) ($_SERVER['CHAT_PURGE_DAYS'] ?? CHAT_PURGE_AFTER_DAYS);
$purgeEnabled = (int) ($_SERVER['CHAT_PURGE_ENABLED'] ?? 0) === 1;

try {
    $closedCount = chat_close_expired_open_conversations($pdo, $closeHours);
    $archivedCount = chat_archive_closed_conversations($pdo, $archiveDays);
    $purgedCount = 0;

    if ($purgeEnabled) {
        $purgedCount = chat_delete_archived_conversations($pdo, $purgeDays);
    }

    echo json_encode([
        'success' => true,
        'close_hours' => $closeHours,
        'archive_days' => $archiveDays,
        'purge_days' => $purgeDays,
        'purge_enabled' => $purgeEnabled,
        'closed_count' => $closedCount,
        'archived_count' => $archivedCount,
        'purged_count' => $purgedCount,
        'ran_at' => date('Y-m-d H:i:s'),
    ], JSON_UNESCAPED_UNICODE) . PHP_EOL;
    exit(0);
} catch (Throwable $e) {
    error_log('Chat lifecycle maintenance error: ' . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage(),
        'ran_at' => date('Y-m-d H:i:s'),
    ], JSON_UNESCAPED_UNICODE) . PHP_EOL;
    exit(1);
}
