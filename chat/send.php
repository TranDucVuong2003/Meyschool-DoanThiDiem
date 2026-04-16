<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';

if (!chat_request_method('POST')) {
    chat_json_response(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$conversationId = (int) ($_POST['conversation_id'] ?? 0);
$message = trim((string) ($_POST['message'] ?? ''));
$token = chat_get_visitor_token();

if ($token === null) {
    chat_json_response(['success' => false, 'message' => 'Phiên chat không hợp lệ.'], 401);
}

if ($conversationId <= 0) {
    chat_json_response(['success' => false, 'message' => 'Conversation không hợp lệ.'], 422);
}

if ($message === '' || mb_strlen($message) > 2000) {
    chat_json_response(['success' => false, 'message' => 'Nội dung tin nhắn không hợp lệ.'], 422);
}

try {
    $conversation = chat_get_guest_conversation_by_id($pdo, $conversationId, $token);
    if (!$conversation) {
        chat_json_response(['success' => false, 'message' => 'Không tìm thấy cuộc trò chuyện.'], 404);
    }

    $guestName = (string) ($conversation['guest_name'] ?? '');
    $guestPhone = (string) ($conversation['guest_phone'] ?? '');

    if ($guestName === '' || $guestPhone === '') {
        chat_json_response(['success' => false, 'message' => 'Thiếu thông tin khách, vui lòng bắt đầu lại chat.'], 409);
    }

    $activeConversation = chat_get_or_create_active_conversation($pdo, $token, $guestName, $guestPhone);
    $activeConversationId = (int) $activeConversation['id'];

    $messageId = chat_insert_message($pdo, $activeConversationId, 'guest', null, $message, 0);

    $messages = chat_fetch_messages($pdo, $activeConversationId, $messageId - 1, 1);

    chat_json_response([
        'success' => true,
        'conversation_id' => $activeConversationId,
        'status' => $activeConversation['status'] ?? 'open',
        'message' => $messages[0] ?? null,
    ]);
} catch (Throwable $e) {
    error_log('Chat send error: ' . $e->getMessage());
    chat_json_response(['success' => false, 'message' => 'Không thể gửi tin nhắn.'], 500);
}
