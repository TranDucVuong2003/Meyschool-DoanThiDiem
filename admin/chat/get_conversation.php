<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';
admin_chat_require_auth();

if (strtoupper($_SERVER['REQUEST_METHOD'] ?? '') !== 'GET') {
    admin_chat_json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$conversationId = (int) ($_GET['conversation_id'] ?? 0);
$afterId = max(0, (int) ($_GET['after_id'] ?? 0));

if ($conversationId <= 0) {
    admin_chat_json(['success' => false, 'message' => 'Conversation không hợp lệ.'], 422);
}

try {
    $stmt = $pdo->prepare('SELECT * FROM chat_conversations WHERE id = ? LIMIT 1');
    $stmt->execute([$conversationId]);
    $conversation = $stmt->fetch();

    if (!$conversation) {
        admin_chat_json(['success' => false, 'message' => 'Không tìm thấy hội thoại.'], 404);
    }

    $conversation = chat_auto_close_single_conversation($pdo, $conversation);

    $stmt = $pdo->prepare(
        'SELECT id, conversation_id, sender_type, sender_id, message, is_read, created_at
         FROM chat_messages
         WHERE conversation_id = ? AND id > ?
         ORDER BY id ASC
         LIMIT 500'
    );
    $stmt->execute([$conversationId, $afterId]);
    $messages = $stmt->fetchAll();

    $pdo->prepare(
        'UPDATE chat_messages
         SET is_read = 1
         WHERE conversation_id = ? AND sender_type = "guest" AND is_read = 0'
    )->execute([$conversationId]);

    admin_chat_json([
        'success' => true,
        'conversation' => [
            'id' => (int) $conversation['id'],
            'guest_name' => $conversation['guest_name'],
            'guest_phone' => $conversation['guest_phone'],
            'status' => $conversation['status'],
            'assigned_admin_id' => $conversation['assigned_admin_id'],
            'last_message_at' => $conversation['last_message_at'],
            'created_at' => $conversation['created_at'],
        ],
        'messages' => $messages,
    ]);
} catch (Throwable $e) {
    error_log('Admin get conversation error: ' . $e->getMessage());
    admin_chat_json(['success' => false, 'message' => 'Không thể tải hội thoại.'], 500);
}
