<?php

declare(strict_types=1);

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/lifecycle.php';

const CHAT_VISITOR_COOKIE = 'chat_visitor_token';

function chat_json_response(array $payload, int $status = 200): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    header('X-Content-Type-Options: nosniff');
    echo json_encode($payload, JSON_UNESCAPED_UNICODE);
    exit;
}

function chat_request_method(string $method): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD'] ?? '') === strtoupper($method);
}

function chat_clean_text(string $value): string
{
    return trim(preg_replace('/\s+/u', ' ', $value));
}

function chat_get_visitor_token(): ?string
{
    $sessionToken = $_SESSION['chat_visitor_token'] ?? '';
    $sessionToken = is_string($sessionToken) ? trim($sessionToken) : '';

    if ($sessionToken !== '' && preg_match('/^[a-f0-9]{32,64}$/', $sessionToken)) {
        return $sessionToken;
    }

    $token = $_COOKIE[CHAT_VISITOR_COOKIE] ?? '';
    $token = is_string($token) ? trim($token) : '';

    if ($token === '' || !preg_match('/^[a-f0-9]{32,64}$/', $token)) {
        return null;
    }

    $_SESSION['chat_visitor_token'] = $token;

    return $token;
}

function chat_generate_visitor_token(): string
{
    return bin2hex(random_bytes(24));
}

function chat_set_visitor_token_cookie(string $token): void
{
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

    setcookie(CHAT_VISITOR_COOKIE, $token, [
        'expires' => time() + 60 * 60 * 24 * 30,
        'path' => '/',
        'secure' => $isHttps,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    $_SESSION['chat_visitor_token'] = $token;
}

function chat_validate_phone(string $phone): bool
{
    return (bool) preg_match('/^[0-9+\s().-]{8,20}$/', $phone);
}

function chat_find_conversation_by_token(PDO $pdo, string $token): ?array
{
    return chat_find_latest_conversation_by_token($pdo, $token, false);
}

function chat_insert_message(PDO $pdo, int $conversationId, string $senderType, ?int $senderId, string $message, int $isRead): int
{
    $stmt = $pdo->prepare(
        'INSERT INTO chat_messages (conversation_id, sender_type, sender_id, message, is_read, created_at)
         VALUES (?, ?, ?, ?, ?, NOW())'
    );
    $stmt->execute([$conversationId, $senderType, $senderId, $message, $isRead]);

    $pdo->prepare('UPDATE chat_conversations SET last_message_at = NOW(), updated_at = NOW() WHERE id = ?')
        ->execute([$conversationId]);

    return (int) $pdo->lastInsertId();
}

function chat_fetch_messages(PDO $pdo, int $conversationId, int $afterId = 0, int $limit = 200): array
{
    $limit = max(1, min($limit, 500));

    $stmt = $pdo->prepare(
        "SELECT id, conversation_id, sender_type, sender_id, message, is_read, created_at
         FROM chat_messages
         WHERE conversation_id = ? AND id > ?
         ORDER BY id ASC
         LIMIT {$limit}"
    );
    $stmt->execute([$conversationId, $afterId]);

    return $stmt->fetchAll();
}
