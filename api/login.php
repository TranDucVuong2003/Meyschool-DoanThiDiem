<?php

/**
 * API: Xử lý đăng nhập admin
 * URL: /api/login.php
 * Method: POST
 */

session_start();

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

require_once __DIR__ . '/../config/db.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Vui lòng nhập tên đăng nhập và mật khẩu.']);
    exit;
}

// Giới hạn độ dài để tránh tấn công
if (strlen($username) > 100 || strlen($password) > 200) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Thông tin không hợp lệ.']);
    exit;
}

try {
    $stmt = $pdo->prepare('SELECT id, username, name, role_id, password FROM users WHERE username = ? LIMIT 1');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['password'])) {
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => 'Tên đăng nhập hoặc mật khẩu không đúng.']);
        exit;
    }

    // Cập nhật last_login_at nếu có cột
    // $pdo->prepare('UPDATE users SET updated_at = NOW() WHERE id = ?')->execute([$user['id']]);

    // Đăng nhập thành công — tạo session
    session_regenerate_id(true);
    $_SESSION['admin_id']       = $user['id'];
    $_SESSION['admin_username'] = $user['username'];
    $_SESSION['admin_name']     = $user['name'] ?: $user['username'];
    $_SESSION['admin_role_id']  = (int) ($user['role_id'] ?? 0);

    echo json_encode(['success' => true, 'message' => 'Đăng nhập thành công!', 'redirect' => 'dashboard.php']);
} catch (PDOException $e) {
    error_log('Login error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Có lỗi xảy ra. Vui lòng thử lại.']);
}
