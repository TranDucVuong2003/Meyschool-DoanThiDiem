<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập', 'count' => 0]);
    exit;
}

require_once __DIR__ . '/../dashboard/access.php';
if (!dashboard_can_access('contact')) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Bạn không có quyền truy cập module này.', 'count' => 0]);
    exit;
}

require_once __DIR__ . '/../config/db.php';
header('Content-Type: application/json; charset=utf-8');

$stmt = $pdo->query('SELECT COUNT(*) FROM contact_submissions WHERE is_read = 0');
$unreadCount = (int) $stmt->fetchColumn();

echo json_encode(['success' => true, 'count' => $unreadCount]);
