<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';
admin_chat_require_auth();

if (strtoupper($_SERVER['REQUEST_METHOD'] ?? '') !== 'GET') {
    admin_chat_json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

try {
    $stmt = $pdo->query(
        'SELECT COUNT(*) AS unread_count
                 FROM chat_messages m
                 INNER JOIN chat_conversations c ON c.id = m.conversation_id
                 WHERE m.sender_type = "guest"
                     AND m.is_read = 0
                     AND c.status <> "archived"'
    );
    $count = (int) ($stmt->fetch()['unread_count'] ?? 0);

    admin_chat_json([
        'success' => true,
        'count' => $count,
    ]);
} catch (Throwable $e) {
    error_log('Admin chat unread_count error: ' . $e->getMessage());
    admin_chat_json(['success' => false, 'message' => 'Không thể lấy số lượng chưa đọc.'], 500);
}
