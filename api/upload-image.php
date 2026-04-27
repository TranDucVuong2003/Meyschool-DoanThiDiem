<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

if (empty($_SESSION['admin_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập']);
    exit;
}

require_once __DIR__ . '/../dashboard/access.php';
if (!dashboard_can_access('config')) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Bạn không có quyền truy cập module này.']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_FILES['image'])) {
    echo json_encode(['success' => false, 'message' => 'Không có file được gửi']);
    exit;
}

$uploadDir = __DIR__ . '/../assets/img/tin-tuc/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$file = $_FILES['image'];
$fileName = $file['name'];
$fileTmp = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];

// Check for errors
if ($fileError !== UPLOAD_ERR_OK) {
    echo json_encode(['success' => false, 'message' => 'Lỗi upload file']);
    exit;
}

// Check file size (max 5MB)
if ($fileSize > 5 * 1024 * 1024) {
    echo json_encode(['success' => false, 'message' => 'File quá lớn (tối đa 5MB)']);
    exit;
}

// Check file type
$allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
$fileType = mime_content_type($fileTmp);
if (!in_array($fileType, $allowedTypes)) {
    echo json_encode(['success' => false, 'message' => 'Chỉ chấp nhận file ảnh (JPG, PNG, GIF, WebP)']);
    exit;
}

// Generate unique filename
$fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
$baseName = pathinfo($fileName, PATHINFO_FILENAME);
$baseName = preg_replace('/[^a-zA-Z0-9_-]/', '', $baseName);
$newFileName = $baseName . '_' . time() . '.' . $fileExt;
$uploadPath = $uploadDir . $newFileName;

// Move uploaded file
if (move_uploaded_file($fileTmp, $uploadPath)) {
    $relativePath = 'assets/img/tin-tuc/' . $newFileName;
    echo json_encode(['success' => true, 'message' => 'Upload thành công', 'path' => $relativePath]);
} else {
    echo json_encode(['success' => false, 'message' => 'Không thể lưu file']);
}
