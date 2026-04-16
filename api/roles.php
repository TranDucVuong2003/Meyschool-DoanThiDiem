<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    http_response_code(401);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập']);
    exit;
}

require_once __DIR__ . '/../dashboard/access.php';
if (!dashboard_can_access('users')) {
    http_response_code(403);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Bạn không có quyền truy cập module này.']);
    exit;
}

require_once __DIR__ . '/../config/db.php';
header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'GET') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

try {
    $stmt = $pdo->query('SELECT id, name, created_at, updated_at FROM roles ORDER BY id ASC');
    echo json_encode([
        'success' => true,
        'data' => $stmt->fetchAll(),
    ]);
} catch (Throwable $e) {
    error_log('Roles API error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Không thể tải danh sách vai trò.']);
}
