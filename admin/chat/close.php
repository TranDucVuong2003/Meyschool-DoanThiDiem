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

    if (($conversation['status'] ?? '') !== 'open') {
        admin_chat_json([
            'success' => true,
            'message' => 'Hội thoại đã ở trạng thái kết thúc.',
            'conversation' => [
                'id' => (int) $conversation['id'],
                'status' => (string) $conversation['status'],
                'closed_at' => $conversation['closed_at'] ?? null,
            ],
        ]);
    }

    $stmt = $pdo->prepare(
        'UPDATE chat_conversations
         SET status = "closed",
             closed_at = NOW(),
             updated_at = NOW(),
             assigned_admin_id = COALESCE(assigned_admin_id, ?)
         WHERE id = ? AND status = "open"'
    );
    $stmt->execute([$adminId, $conversationId]);

    $updated = chat_get_conversation_by_id($pdo, $conversationId);

    admin_chat_json([
        'success' => true,
        'message' => 'Đã kết thúc hội thoại.',
        'conversation' => [
            'id' => (int) ($updated['id'] ?? $conversationId),
            'status' => (string) ($updated['status'] ?? 'closed'),
            'closed_at' => $updated['closed_at'] ?? null,
        ],
    ]);
} catch (Throwable $e) {
    error_log('Admin close conversation error: ' . $e->getMessage());
    admin_chat_json(['success' => false, 'message' => 'Không thể kết thúc hội thoại.'], 500);
}
