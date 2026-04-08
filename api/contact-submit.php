<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$full_name = trim($_POST['full_name'] ?? ($_POST['name'] ?? ''));
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? ($_POST['ct-mess'] ?? ''));
$audience_raw = trim($_POST['audience_type'] ?? ($_POST['ct-position'] ?? 'other'));
$submission_type = trim($_POST['submission_type'] ?? 'contact');

// Extra fields for consultation
$school_year = trim($_POST['school_year'] ?? '');
$grade = trim($_POST['grade'] ?? '');
$school_name = trim($_POST['school_name'] ?? '');
$consultation_need = trim($_POST['consultation_need'] ?? '');

$audience_map = [
    'parent' => 'parent',
    'parents' => 'parent',
    'student' => 'student',
    'students' => 'student',
    'partner' => 'partner',
    'vendor' => 'partner',
    'other' => 'other',
];
$audience_type = $audience_map[$audience_raw] ?? 'other';

$errors = [];
if ($full_name === '') {
    $errors['full_name'] = 'Vui lòng nhập họ tên';
}
if ($phone === '') {
    $errors['phone'] = 'Vui lòng nhập số điện thoại';
} elseif (!preg_match('/^[0-9+\s().-]{8,20}$/', $phone)) {
    $errors['phone'] = 'Số điện thoại không hợp lệ';
}
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email không hợp lệ';
}

// Validation for contact vs consultation
if ($submission_type === 'contact') {
    if ($message === '') {
        $errors['message'] = 'Vui lòng nhập nội dung lời nhắn';
    }
} elseif ($submission_type === 'consultation') {
    if ($grade === '') {
        $errors['grade'] = 'Vui lòng chọn lớp học';
    }
    if ($consultation_need === '') {
        $errors['consultation_need'] = 'Vui lòng nhập nội dung cần tư vấn';
    }
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => 'Dữ liệu không hợp lệ',
        'errors' => $errors,
    ]);
    exit;
}

$stmt = $pdo->prepare(
    "INSERT INTO contact_submissions (full_name, phone, email, audience_type, submission_type, message, status, school_year, grade, school_name, consultation_need) 
     VALUES (?, ?, ?, ?, ?, ?, 'new', ?, ?, ?, ?)"
);
$stmt->execute([
    $full_name,
    $phone,
    $email !== '' ? $email : null,
    $audience_type,
    $submission_type,
    $message,
    $school_year !== '' ? $school_year : null,
    $grade !== '' ? $grade : null,
    $school_name !== '' ? $school_name : null,
    $consultation_need !== '' ? $consultation_need : null,
]);

echo json_encode([
    'success' => true,
    'message' => 'Gửi ' . ($submission_type === 'consultation' ? 'yêu cầu tư vấn' : 'liên hệ') . ' thành công',
    'id' => (int) $pdo->lastInsertId(),
]);
