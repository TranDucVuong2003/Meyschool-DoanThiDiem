<?php

declare(strict_types=1);

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../chat/lifecycle.php';
require_once __DIR__ . '/../../dashboard/access.php';

function admin_chat_json(array $payload, int $status = 200): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    header('X-Content-Type-Options: nosniff');
    echo json_encode($payload, JSON_UNESCAPED_UNICODE);
    exit;
}

function admin_chat_require_auth(): int
{
    $adminId = (int) ($_SESSION['admin_id'] ?? 0);
    if ($adminId <= 0) {
        admin_chat_json(['success' => false, 'message' => 'Unauthorized.'], 401);
    }

    if (!dashboard_can_access('chat')) {
        admin_chat_json(['success' => false, 'message' => 'Forbidden.'], 403);
    }

    return $adminId;
}

function admin_chat_clean_text(string $value): string
{
    return trim(preg_replace('/\s+/u', ' ', $value));
}
