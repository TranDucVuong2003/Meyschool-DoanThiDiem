<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';
$adminId = admin_chat_require_auth();

if (strtoupper($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    admin_chat_json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$conversationId = (int) ($_POST['conversation_id'] ?? 0);
if ($conversationId <= 0) {
    admin_chat_json(['success' => false, 'message' => 'Conversation không hợp lệ.'], 422);
}

try {
    $conversation = chat_get_conversation_by_id($pdo, $conversationId);
    if (!$conversation) {
        admin_chat_json(['success' => false, 'message' => 'Không tìm thấy hội thoại.'], 404);
    }

    $pdo->beginTransaction();

    // Delete all messages in the conversation
    $stmt = $pdo->prepare('DELETE FROM chat_messages WHERE conversation_id = ?');
    $stmt->execute([$conversationId]);

    // Delete the conversation
    $stmt = $pdo->prepare('DELETE FROM chat_conversations WHERE id = ?');
    $stmt->execute([$conversationId]);

    $pdo->commit();

    admin_chat_json([
        'success' => true,
        'message' => 'Đã xóa hội thoại thành công.',
    ]);
} catch (Throwable $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    error_log('Admin delete conversation error: ' . $e->getMessage());
    admin_chat_json(['success' => false, 'message' => 'Không thể xóa hội thoại.'], 500);
}
