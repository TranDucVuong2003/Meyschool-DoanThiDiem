<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';
$adminId = admin_chat_require_auth();

if (strtoupper($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    admin_chat_json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$conversationId = (int) ($_POST['conversation_id'] ?? 0);
$message = trim((string) ($_POST['message'] ?? ''));

if ($conversationId <= 0) {
    admin_chat_json(['success' => false, 'message' => 'Conversation không hợp lệ.'], 422);
}

if ($message === '' || mb_strlen($message) > 2000) {
    admin_chat_json(['success' => false, 'message' => 'Nội dung tin nhắn không hợp lệ.'], 422);
}

try {
    $stmt = $pdo->prepare('SELECT id, status, last_message_at FROM chat_conversations WHERE id = ? LIMIT 1');
    $stmt->execute([$conversationId]);
    $conversation = $stmt->fetch();

    if (!$conversation) {
        admin_chat_json(['success' => false, 'message' => 'Không tìm thấy hội thoại.'], 404);
    }

    $conversation = chat_auto_close_single_conversation($pdo, $conversation);
    if (($conversation['status'] ?? '') !== 'open') {
        admin_chat_json(['success' => false, 'message' => 'Hội thoại đã kết thúc, không thể gửi thêm tin nhắn.'], 409);
    }

    $stmt = $pdo->prepare(
        'INSERT INTO chat_messages (conversation_id, sender_type, sender_id, message, is_read, created_at)
         VALUES (?, "admin", ?, ?, 0, NOW())'
    );
    $stmt->execute([$conversationId, $adminId, $message]);

    $messageId = (int) $pdo->lastInsertId();

    $pdo->prepare(
        'UPDATE chat_conversations
         SET assigned_admin_id = COALESCE(assigned_admin_id, ?),
             last_message_at = NOW(),
             updated_at = NOW()
         WHERE id = ?'
    )->execute([$adminId, $conversationId]);

    $stmt = $pdo->prepare(
        'SELECT id, conversation_id, sender_type, sender_id, message, is_read, created_at
         FROM chat_messages WHERE id = ? LIMIT 1'
    );
    $stmt->execute([$messageId]);

    admin_chat_json([
        'success' => true,
        'message' => $stmt->fetch(),
    ]);
} catch (Throwable $e) {
    error_log('Admin chat send error: ' . $e->getMessage());
    admin_chat_json(['success' => false, 'message' => 'Không thể gửi phản hồi.'], 500);
}
