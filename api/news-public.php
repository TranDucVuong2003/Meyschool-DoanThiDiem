<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config/db.php';

// Public API — chỉ GET, chỉ bài đã xuất bản
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Chi tiết theo slug
if (!empty($_GET['slug'])) {
    $stmt = $pdo->prepare("SELECT n.*, c.name AS category_name FROM news n LEFT JOIN news_categories c ON n.category_id = c.id WHERE n.slug = ? AND n.status = 'xuat-ban' LIMIT 1");
    $stmt->execute([$_GET['slug']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        echo json_encode(['success' => true, 'data' => $row]);
    } else {
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Không tìm thấy bài viết']);
    }
    exit;
}

// Danh sách
$page   = max(1, (int) ($_GET['page'] ?? 1));
$limit  = 9;
$offset = ($page - 1) * $limit;

$where  = ["n.status = 'xuat-ban'"];
$params = [];

if (!empty($_GET['category_id'])) {
    $where[]  = "n.category_id = ?";
    $params[] = (int) $_GET['category_id'];
}

if (!empty($_GET['search'])) {
    $where[]  = "n.title LIKE ?";
    $params[] = '%' . $_GET['search'] . '%';
}

$whereSQL = 'WHERE ' . implode(' AND ', $where);

// Tổng
$countStmt = $pdo->prepare("SELECT COUNT(*) FROM news n $whereSQL");
$countStmt->execute($params);
$total = (int) $countStmt->fetchColumn();

// Dữ liệu
$dataStmt = $pdo->prepare("SELECT n.id, n.title, n.slug, n.excerpt, n.thumbnail, n.category_id, n.is_featured, n.created_at, c.name AS category_name FROM news n LEFT JOIN news_categories c ON n.category_id = c.id $whereSQL ORDER BY n.is_featured DESC, n.created_at DESC LIMIT $limit OFFSET $offset");
$dataStmt->execute($params);
$rows = $dataStmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    'success'    => true,
    'data'       => $rows,
    'total'      => $total,
    'page'       => $page,
    'totalPages' => (int) ceil($total / $limit)
]);
