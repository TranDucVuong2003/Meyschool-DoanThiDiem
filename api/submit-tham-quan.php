<?php

/**
 * API: Xử lý đăng ký tham quan
 * URL: /api/submit-tham-quan.php
 * Method: POST
 */

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// Chỉ chấp nhận POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

require_once __DIR__ . '/../config/db.php';

// =====================
// 1. LẤY VÀ SANITIZE INPUT
// =====================
function sanitize(string $value): string
{
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

$parent_name    = sanitize($_POST['parent_name']    ?? '');
$phone          = sanitize($_POST['phone']          ?? '');
$email          = sanitize($_POST['email']          ?? '');
$student_name   = sanitize($_POST['student_name']   ?? '');
$birth_year     = sanitize($_POST['birth_year']     ?? '');
$grade_level    = sanitize($_POST['grade_level']    ?? '');
$preferred_time = sanitize($_POST['preferred_time'] ?? '');
$message        = sanitize($_POST['message']        ?? '');

// =====================
// 2. VALIDATE
// =====================
$errors = [];

if (empty($parent_name)) {
    $errors[] = 'Vui lòng nhập họ tên phụ huynh.';
}

if (empty($phone)) {
    $errors[] = 'Vui lòng nhập số điện thoại.';
} elseif (!preg_match('/^(0[3|5|7|8|9])[0-9]{8}$/', $phone)) {
    $errors[] = 'Số điện thoại không đúng định dạng.';
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email không đúng định dạng.';
}

if (empty($student_name)) {
    $errors[] = 'Vui lòng nhập họ tên học sinh.';
}

$valid_years = range(2010, 2019);
if (empty($birth_year) || !in_array((int)$birth_year, $valid_years)) {
    $errors[] = 'Vui lòng chọn năm sinh hợp lệ.';
}

$valid_grades = ['tieu-hoc', 'thcs', 'thpt'];
if (empty($grade_level) || !in_array($grade_level, $valid_grades)) {
    $errors[] = 'Vui lòng chọn cấp học.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// =====================
// 3. LƯU VÀO DATABASE
// =====================
try {
    $sql = "INSERT INTO register_for_tour 
            (parent_name, phone, email, student_name, birth_year, grade_level, preferred_time, message)
            VALUES 
            (:parent_name, :phone, :email, :student_name, :birth_year, :grade_level, :preferred_time, :message)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':parent_name'    => $parent_name,
        ':phone'          => $phone,
        ':email'          => $email,
        ':student_name'   => $student_name,
        ':birth_year'     => (int)$birth_year,
        ':grade_level'    => $grade_level,
        ':preferred_time' => $preferred_time,
        ':message'        => $message,
    ]);

    echo json_encode(['success' => true, 'message' => 'Đăng ký thành công! Chúng tôi sẽ liên hệ trong vòng 24h.']);
} catch (PDOException $e) {
    error_log('Submit tham quan error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Có lỗi xảy ra. Vui lòng thử lại sau.']);
}
