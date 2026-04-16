<?php

declare(strict_types=1);

require_once __DIR__ . '/common.php';

if (!chat_request_method('POST')) {
    chat_json_response(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$guestName = chat_clean_text((string) ($_POST['guest_name'] ?? ''));
$guestPhone = chat_clean_text((string) ($_POST['guest_phone'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($guestName === '' || mb_strlen($guestName) > 100) {
    chat_json_response(['success' => false, 'message' => 'Họ tên không hợp lệ.'], 422);
}

if ($guestPhone === '' || !chat_validate_phone($guestPhone)) {
    chat_json_response(['success' => false, 'message' => 'Số điện thoại không hợp lệ.'], 422);
}

if ($message === '' || mb_strlen($message) > 2000) {
    chat_json_response(['success' => false, 'message' => 'Nội dung tin nhắn không hợp lệ.'], 422);
}

$token = chat_get_visitor_token();
if ($token === null) {
    $token = chat_generate_visitor_token();
    chat_set_visitor_token_cookie($token);
}

try {
    $conversation = chat_get_or_create_active_conversation($pdo, $token, $guestName, $guestPhone);
    $conversationId = (int) $conversation['id'];

    $messageId = chat_insert_message($pdo, $conversationId, 'guest', null, $message, 0);

    $messages = chat_fetch_messages($pdo, $conversationId, 0, 200);

    chat_json_response([
        'success' => true,
        'conversation' => [
            'id' => $conversationId,
            'guest_name' => $guestName,
            'guest_phone' => $guestPhone,
            'visitor_token' => $token,
            'status' => $conversation['status'] ?? 'open',
            'last_message_id' => $messageId,
        ],
        'messages' => $messages,
    ]);
} catch (Throwable $e) {
    error_log('Chat start error: ' . $e->getMessage());
    chat_json_response(['success' => false, 'message' => 'Không thể bắt đầu cuộc trò chuyện.'], 500);
}
