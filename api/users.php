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

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$currentAdminId = (int) ($_SESSION['admin_id'] ?? 0);

function json_error(string $message, int $status = 422): void
{
    http_response_code($status);
    echo json_encode(['success' => false, 'message' => $message]);
    exit;
}

function normalize_username(string $username): string
{
    return trim(preg_replace('/\s+/u', ' ', $username));
}

function normalize_name(string $name): string
{
    return trim(preg_replace('/\s+/u', ' ', $name));
}

function role_exists(PDO $pdo, int $roleId): bool
{
    $stmt = $pdo->prepare('SELECT id FROM roles WHERE id = ? LIMIT 1');
    $stmt->execute([$roleId]);
    return (bool) $stmt->fetch();
}

if ($method === 'GET') {
    if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
        if ($id <= 0) {
            json_error('ID không hợp lệ.');
        }

        $stmt = $pdo->prepare(
            'SELECT u.id, u.username, u.name, u.role_id, r.name AS role_name, u.created_at, u.updated_at
             FROM users u
             LEFT JOIN roles r ON r.id = u.role_id
             WHERE u.id = ?
             LIMIT 1'
        );
        $stmt->execute([$id]);
        $row = $stmt->fetch();

        if (!$row) {
            json_error('Không tìm thấy người dùng.', 404);
        }

        echo json_encode(['success' => true, 'data' => $row]);
        exit;
    }

    $search = trim((string) ($_GET['search'] ?? ''));
    $page = max(1, (int) ($_GET['page'] ?? 1));
    $limit = 10;
    $offset = ($page - 1) * $limit;

    $where = '';
    $params = [];
    if ($search !== '') {
        $where = ' WHERE u.username LIKE ? OR u.name LIKE ?';
        $params[] = '%' . $search . '%';
        $params[] = '%' . $search . '%';
    }

    $countStmt = $pdo->prepare('SELECT COUNT(*) FROM users u' . $where);
    $countStmt->execute($params);
    $total = (int) $countStmt->fetchColumn();

    $dataSql = 'SELECT u.id, u.username, u.name, u.role_id, r.name AS role_name, u.created_at, u.updated_at
                FROM users u
                LEFT JOIN roles r ON r.id = u.role_id' . $where . ' ORDER BY u.id DESC LIMIT ' . $limit . ' OFFSET ' . $offset;
    $dataStmt = $pdo->prepare($dataSql);
    $dataStmt->execute($params);
    $rows = $dataStmt->fetchAll();

    echo json_encode([
        'success' => true,
        'data' => $rows,
        'total' => $total,
        'page' => $page,
        'totalPages' => max(1, (int) ceil($total / $limit)),
    ]);
    exit;
}

if ($method === 'POST' && empty($_GET['_method'])) {
    $username = normalize_username((string) ($_POST['username'] ?? ''));
    $name = normalize_name((string) ($_POST['name'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');
    $roleId = (int) ($_POST['role_id'] ?? 0);

    if ($username === '' || mb_strlen($username) > 100) {
        json_error('Tên đăng nhập không hợp lệ.');
    }

    if ($name === '' || mb_strlen($name) > 120) {
        json_error('Tên hiển thị không hợp lệ.');
    }

    if (!preg_match('/^[A-Za-z0-9._-]{3,100}$/', $username)) {
        json_error('Tên đăng nhập chỉ gồm chữ, số, dấu chấm, gạch dưới, gạch ngang (3-100 ký tự).');
    }

    if ($roleId <= 0 || !role_exists($pdo, $roleId)) {
        json_error('Vai trò không hợp lệ.');
    }

    if (strlen($password) < 6 || strlen($password) > 200) {
        json_error('Mật khẩu phải từ 6 đến 200 ký tự.');
    }

    $check = $pdo->prepare('SELECT id FROM users WHERE username = ? LIMIT 1');
    $check->execute([$username]);
    if ($check->fetch()) {
        json_error('Tên đăng nhập đã tồn tại.');
    }

    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('INSERT INTO users (username, name, password, role_id) VALUES (?, ?, ?, ?)');
    $stmt->execute([$username, $name, $hashed, $roleId]);

    echo json_encode([
        'success' => true,
        'message' => 'Tạo người dùng thành công.',
        'id' => (int) $pdo->lastInsertId(),
    ]);
    exit;
}

if ($method === 'POST' && ($_GET['_method'] ?? '') === 'PUT') {
    $id = (int) ($_POST['id'] ?? 0);
    $username = normalize_username((string) ($_POST['username'] ?? ''));
    $name = normalize_name((string) ($_POST['name'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');
    $roleId = (int) ($_POST['role_id'] ?? 0);

    if ($id <= 0) {
        json_error('ID không hợp lệ.');
    }

    if ($username === '' || mb_strlen($username) > 100) {
        json_error('Tên đăng nhập không hợp lệ.');
    }

    if ($name === '' || mb_strlen($name) > 120) {
        json_error('Tên hiển thị không hợp lệ.');
    }

    if (!preg_match('/^[A-Za-z0-9._-]{3,100}$/', $username)) {
        json_error('Tên đăng nhập chỉ gồm chữ, số, dấu chấm, gạch dưới, gạch ngang (3-100 ký tự).');
    }

    if ($roleId <= 0 || !role_exists($pdo, $roleId)) {
        json_error('Vai trò không hợp lệ.');
    }

    $existsStmt = $pdo->prepare('SELECT id FROM users WHERE id = ? LIMIT 1');
    $existsStmt->execute([$id]);
    if (!$existsStmt->fetch()) {
        json_error('Không tìm thấy người dùng.', 404);
    }

    $dupStmt = $pdo->prepare('SELECT id FROM users WHERE username = ? AND id != ? LIMIT 1');
    $dupStmt->execute([$username, $id]);
    if ($dupStmt->fetch()) {
        json_error('Tên đăng nhập đã tồn tại.');
    }

    if ($password !== '') {
        if (strlen($password) < 6 || strlen($password) > 200) {
            json_error('Mật khẩu mới phải từ 6 đến 200 ký tự.');
        }
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('UPDATE users SET username = ?, name = ?, role_id = ?, password = ? WHERE id = ?');
        $stmt->execute([$username, $name, $roleId, $hashed, $id]);
    } else {
        $stmt = $pdo->prepare('UPDATE users SET username = ?, name = ?, role_id = ? WHERE id = ?');
        $stmt->execute([$username, $name, $roleId, $id]);
    }

    if ($currentAdminId === $id) {
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_name'] = $name;
        $_SESSION['admin_role_id'] = $roleId;
    }

    echo json_encode(['success' => true, 'message' => 'Cập nhật người dùng thành công.']);
    exit;
}

if ($method === 'DELETE' || ($method === 'POST' && ($_GET['_method'] ?? '') === 'DELETE')) {
    $input = $method === 'DELETE' ? json_decode(file_get_contents('php://input'), true) : $_POST;
    $id = (int) ($input['id'] ?? 0);

    if ($id <= 0) {
        json_error('ID không hợp lệ.');
    }

    if ($id === $currentAdminId) {
        json_error('Không thể xóa chính tài khoản đang đăng nhập.', 409);
    }

    $countUsers = (int) $pdo->query('SELECT COUNT(*) FROM users')->fetchColumn();
    if ($countUsers <= 1) {
        json_error('Không thể xóa người dùng cuối cùng.', 409);
    }

    $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
    $stmt->execute([$id]);

    if ($stmt->rowCount() === 0) {
        json_error('Không tìm thấy người dùng.', 404);
    }

    echo json_encode(['success' => true, 'message' => 'Đã xóa người dùng.']);
    exit;
}

json_error('Method not allowed.', 405);
