<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config/db.php';

// Public API — chỉ GET, chỉ sự kiện đã xuất bản
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Chi tiết theo slug
if (!empty($_GET['slug'])) {
    $stmt = $pdo->prepare("SELECT e.*, c.name AS category_name FROM events e LEFT JOIN event_categories c ON e.category_id = c.id WHERE e.slug = ? AND e.status = 'xuat-ban' LIMIT 1");
    $stmt->execute([$_GET['slug']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        echo json_encode(['success' => true, 'data' => $row]);
    } else {
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Không tìm thấy sự kiện']);
    }
    exit;
}

// Danh sách
$page   = max(1, (int) ($_GET['page'] ?? 1));
$limit  = 9;
$offset = ($page - 1) * $limit;

$where  = ["e.status = 'xuat-ban'"];
$params = [];

if (!empty($_GET['category_id'])) {
    $where[]  = "e.category_id = ?";
    $params[] = (int) $_GET['category_id'];
}

if (!empty($_GET['search'])) {
    $where[]  = "e.title LIKE ?";
    $params[] = '%' . $_GET['search'] . '%';
}

$whereSQL = 'WHERE ' . implode(' AND ', $where);

// Tổng
$countStmt = $pdo->prepare("SELECT COUNT(*) FROM events e $whereSQL");
$countStmt->execute($params);
$total = (int) $countStmt->fetchColumn();

// Dữ liệu
$dataStmt = $pdo->prepare("
    SELECT e.id, e.title, e.slug, e.excerpt, e.thumbnail,
           e.category_id, e.event_date, e.event_time, e.event_end_date,
           e.event_location, e.is_featured, e.created_at,
           c.name AS category_name
    FROM events e
    LEFT JOIN event_categories c ON e.category_id = c.id
    $whereSQL
    ORDER BY e.is_featured DESC, e.event_date DESC, e.created_at DESC
    LIMIT $limit OFFSET $offset
");
$dataStmt->execute($params);
$rows = $dataStmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    'success'    => true,
    'data'       => $rows,
    'total'      => $total,
    'page'       => $page,
    'totalPages' => (int) ceil($total / $limit)
]);
