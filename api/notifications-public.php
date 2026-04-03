<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Chi tiết theo slug
if (!empty($_GET['slug'])) {
    $stmt = $pdo->prepare("SELECT * FROM notifications WHERE slug = ? AND status = 'xuat-ban' LIMIT 1");
    $stmt->execute([$_GET['slug']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        echo json_encode(['success' => true, 'data' => $row]);
    } else {
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Không tìm thấy thông báo']);
    }
    exit;
}

// Danh sách
$page   = max(1, (int) ($_GET['page'] ?? 1));
$limit  = 9;
$offset = ($page - 1) * $limit;

$where  = ["status = 'xuat-ban'"];
$params = [];

if (!empty($_GET['search'])) {
    $where[]  = "title LIKE ?";
    $params[] = '%' . $_GET['search'] . '%';
}

$whereSQL = 'WHERE ' . implode(' AND ', $where);

$countStmt = $pdo->prepare("SELECT COUNT(*) FROM notifications $whereSQL");
$countStmt->execute($params);
$total = (int) $countStmt->fetchColumn();

$dataStmt = $pdo->prepare("SELECT id, title, slug, excerpt, thumbnail, is_featured, created_at FROM notifications $whereSQL ORDER BY is_featured DESC, created_at DESC LIMIT $limit OFFSET $offset");
$dataStmt->execute($params);
$rows = $dataStmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    'success'    => true,
    'data'       => $rows,
    'total'      => $total,
    'page'       => $page,
    'totalPages' => (int) ceil($total / $limit)
]);
