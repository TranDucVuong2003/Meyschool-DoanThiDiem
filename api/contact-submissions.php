<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập']);
    exit;
}

require_once __DIR__ . '/../dashboard/access.php';
if (!dashboard_can_access('contact')) {
    http_response_code(403);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Bạn không có quyền truy cập module này.']);
    exit;
}

require_once __DIR__ . '/../config/db.php';
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
        $stmt = $pdo->prepare('SELECT * FROM contact_submissions WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch();

        if (!$row) {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Không tìm thấy liên hệ']);
            exit;
        }

        echo json_encode(['success' => true, 'data' => $row]);
        exit;
    }

    $search = trim($_GET['search'] ?? '');
    $status = trim($_GET['status'] ?? '');
    $page = max(1, (int) ($_GET['page'] ?? 1));
    $limit = 10;
    $offset = ($page - 1) * $limit;

    $where = [];
    $params = [];

    if ($search !== '') {
        $where[] = '(full_name LIKE ? OR phone LIKE ? OR email LIKE ? OR message LIKE ?)';
        $searchTerm = '%' . $search . '%';
        $params[] = $searchTerm;
        $params[] = $searchTerm;
        $params[] = $searchTerm;
        $params[] = $searchTerm;
    }

    if ($status !== '') {
        $where[] = 'status = ?';
        $params[] = $status;
    }

    $whereSql = $where ? 'WHERE ' . implode(' AND ', $where) : '';

    $countStmt = $pdo->prepare("SELECT COUNT(*) FROM contact_submissions $whereSql");
    $countStmt->execute($params);
    $total = (int) $countStmt->fetchColumn();

    $dataStmt = $pdo->prepare(
        "SELECT id, full_name, phone, email, audience_type, submission_type, message, status, is_read, 
                school_year, grade, school_name, consultation_need, created_at, updated_at
         FROM contact_submissions
         $whereSql
         ORDER BY created_at DESC
         LIMIT $limit OFFSET $offset"
    );
    $dataStmt->execute($params);
    $rows = $dataStmt->fetchAll();

    $unreadStmt = $pdo->query('SELECT COUNT(*) FROM contact_submissions WHERE is_read = 0');
    $unreadCount = (int) $unreadStmt->fetchColumn();

    echo json_encode([
        'success' => true,
        'data' => $rows,
        'total' => $total,
        'unreadCount' => $unreadCount,
        'page' => $page,
        'totalPages' => (int) ceil($total / $limit),
    ]);
    exit;
}

if ($method === 'POST' && ($_GET['_method'] ?? '') === 'PUT') {
    $id = (int) ($_POST['id'] ?? 0);
    $status = trim($_POST['status'] ?? '');
    $allowed = ['new', 'in_progress', 'resolved', 'closed'];

    if ($id <= 0 || !in_array($status, $allowed, true)) {
        echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ']);
        exit;
    }

    $stmt = $pdo->prepare('UPDATE contact_submissions SET status = ?, updated_at = NOW() WHERE id = ?');
    $stmt->execute([$status, $id]);

    echo json_encode(['success' => true, 'message' => 'Cập nhật trạng thái thành công']);
    exit;
}

if ($method === 'POST' && ($_GET['_method'] ?? '') === 'DELETE') {
    $id = (int) ($_POST['id'] ?? 0);
    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID không hợp lệ']);
        exit;
    }

    $stmt = $pdo->prepare('DELETE FROM contact_submissions WHERE id = ?');
    $stmt->execute([$id]);

    echo json_encode(['success' => true, 'message' => 'Đã xóa liên hệ']);
    exit;
}

if ($method === 'POST' && ($_GET['_method'] ?? '') === 'PATCH') {
    $id = (int) ($_POST['id'] ?? 0);
    $isRead = isset($_POST['is_read']) ? 1 : 0;

    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID không hợp lệ']);
        exit;
    }

    $stmt = $pdo->prepare('UPDATE contact_submissions SET is_read = ? WHERE id = ?');
    $stmt->execute([$isRead, $id]);

    $unreadStmt = $pdo->query('SELECT COUNT(*) FROM contact_submissions WHERE is_read = 0');
    $unreadCount = (int) $unreadStmt->fetchColumn();

    echo json_encode(['success' => true, 'message' => 'Đã cập nhật', 'unreadCount' => $unreadCount]);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Method not allowed']);
