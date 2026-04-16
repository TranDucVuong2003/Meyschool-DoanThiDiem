<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập']);
    exit;
}

require_once __DIR__ . '/../dashboard/access.php';
if (!dashboard_can_access('tour')) {
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
        $stmt = $pdo->prepare('SELECT * FROM register_for_tour WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch();

        if (!$row) {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Không tìm thấy đăng ký']);
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
        $where[] = '(parent_name LIKE ? OR phone LIKE ? OR email LIKE ? OR student_name LIKE ? OR preferred_time LIKE ? OR message LIKE ?)';
        $searchTerm = '%' . $search . '%';
        $params[] = $searchTerm;
        $params[] = $searchTerm;
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

    $countStmt = $pdo->prepare("SELECT COUNT(*) FROM register_for_tour $whereSql");
    $countStmt->execute($params);
    $total = (int) $countStmt->fetchColumn();

    $unreadWhere = $whereSql ? ($whereSql . ' AND is_read = 0') : 'WHERE is_read = 0';
    $unreadStmt = $pdo->prepare("SELECT COUNT(*) FROM register_for_tour $unreadWhere");
    $unreadStmt->execute($params);
    $unreadCount = (int) $unreadStmt->fetchColumn();

    $dataStmt = $pdo->prepare(
        "SELECT id, parent_name, phone, email, student_name, birth_year, grade_level, preferred_time, message, status, admin_note, is_read, created_at, updated_at
         FROM register_for_tour
         $whereSql
         ORDER BY created_at DESC
         LIMIT $limit OFFSET $offset"
    );
    $dataStmt->execute($params);
    $rows = $dataStmt->fetchAll();

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
    $adminNote = trim($_POST['admin_note'] ?? '');
    $allowed = ['moi', 'da_lien_he', 'da_xep_lich', 'da_tham_quan', 'huy'];

    if ($id <= 0 || !in_array($status, $allowed, true)) {
        echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ']);
        exit;
    }

    $stmt = $pdo->prepare('UPDATE register_for_tour SET status = ?, admin_note = ?, updated_at = NOW() WHERE id = ?');
    $stmt->execute([$status, $adminNote, $id]);

    echo json_encode(['success' => true, 'message' => 'Cập nhật trạng thái thành công']);
    exit;
}

if ($method === 'POST' && ($_GET['_method'] ?? '') === 'DELETE') {
    $id = (int) ($_POST['id'] ?? 0);
    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID không hợp lệ']);
        exit;
    }

    $stmt = $pdo->prepare('DELETE FROM register_for_tour WHERE id = ?');
    $stmt->execute([$id]);

    echo json_encode(['success' => true, 'message' => 'Đã xóa đăng ký']);
    exit;
}

if ($method === 'POST' && ($_GET['_method'] ?? '') === 'PATCH') {
    $id = (int) ($_POST['id'] ?? 0);
    $isRead = isset($_POST['is_read']) ? 1 : 0;

    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID không hợp lệ']);
        exit;
    }

    $stmt = $pdo->prepare('UPDATE register_for_tour SET is_read = ?, updated_at = NOW() WHERE id = ?');
    $stmt->execute([$isRead, $id]);

    $unreadStmt = $pdo->query('SELECT COUNT(*) FROM register_for_tour WHERE is_read = 0');
    $unreadCount = (int) $unreadStmt->fetchColumn();

    echo json_encode(['success' => true, 'message' => 'Đã cập nhật trạng thái đọc', 'unreadCount' => $unreadCount]);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Method not allowed']);
