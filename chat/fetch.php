<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';

if (!chat_request_method('GET')) {
    chat_json_response(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$token = chat_get_visitor_token();
if ($token === null) {
    chat_json_response([
        'success' => true,
        'has_conversation' => false,
        'conversation' => null,
        'messages' => [],
    ]);
}

$conversationId = (int) ($_GET['conversation_id'] ?? 0);
$afterId = max(0, (int) ($_GET['after_id'] ?? 0));

try {
    if ($conversationId > 0) {
        $conversation = chat_get_guest_conversation_by_id($pdo, $conversationId, $token);
        if (!$conversation) {
            chat_json_response(['success' => false, 'message' => 'Không tìm thấy cuộc trò chuyện.'], 404);
        }

        $conversation = chat_auto_close_single_conversation($pdo, $conversation);
        if (!chat_is_conversation_reusable($conversation)) {
            chat_json_response([
                'success' => true,
                'has_conversation' => false,
                'conversation' => null,
                'messages' => [],
            ]);
        }
    } else {
        $conversation = chat_resolve_reusable_conversation($pdo, $token);
        if (!$conversation) {
            chat_json_response([
                'success' => true,
                'has_conversation' => false,
                'conversation' => null,
                'messages' => [],
            ]);
        }
        $conversationId = (int) $conversation['id'];
    }

    $messages = chat_fetch_messages($pdo, $conversationId, $afterId, 200);

    // Khi guest mở khung chat, tin admin xem như đã đọc.
    $pdo->prepare(
        'UPDATE chat_messages
         SET is_read = 1
         WHERE conversation_id = ? AND sender_type = "admin" AND is_read = 0'
    )->execute([$conversationId]);

    chat_json_response([
        'success' => true,
        'has_conversation' => true,
        'conversation' => [
            'id' => (int) $conversation['id'],
            'guest_name' => $conversation['guest_name'],
            'guest_phone' => $conversation['guest_phone'],
            'status' => $conversation['status'],
            'last_message_at' => $conversation['last_message_at'],
        ],
        'messages' => $messages,
    ]);
} catch (Throwable $e) {
    error_log('Chat fetch error: ' . $e->getMessage());
    chat_json_response(['success' => false, 'message' => 'Không thể tải tin nhắn.'], 500);
}
