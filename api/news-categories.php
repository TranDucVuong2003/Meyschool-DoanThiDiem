<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../config/db.php';

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST' && isset($_GET['_method'])) {
    $method = strtoupper($_GET['_method']);
}

// GET cho phép public, các method khác yêu cầu đăng nhập
if ($method !== 'GET' && empty($_SESSION['admin_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập']);
    exit;
}

// ── Helper: tạo slug ──
function createCatSlug($str)
{
    $map = [
        'à' => 'a',
        'á' => 'a',
        'ả' => 'a',
        'ã' => 'a',
        'ạ' => 'a',
        'ă' => 'a',
        'ằ' => 'a',
        'ắ' => 'a',
        'ẳ' => 'a',
        'ẵ' => 'a',
        'ặ' => 'a',
        'â' => 'a',
        'ầ' => 'a',
        'ấ' => 'a',
        'ẩ' => 'a',
        'ẫ' => 'a',
        'ậ' => 'a',
        'đ' => 'd',
        'è' => 'e',
        'é' => 'e',
        'ẻ' => 'e',
        'ẽ' => 'e',
        'ẹ' => 'e',
        'ê' => 'e',
        'ề' => 'e',
        'ế' => 'e',
        'ể' => 'e',
        'ễ' => 'e',
        'ệ' => 'e',
        'ì' => 'i',
        'í' => 'i',
        'ỉ' => 'i',
        'ĩ' => 'i',
        'ị' => 'i',
        'ò' => 'o',
        'ó' => 'o',
        'ỏ' => 'o',
        'õ' => 'o',
        'ọ' => 'o',
        'ô' => 'o',
        'ồ' => 'o',
        'ố' => 'o',
        'ổ' => 'o',
        'ỗ' => 'o',
        'ộ' => 'o',
        'ơ' => 'o',
        'ờ' => 'o',
        'ớ' => 'o',
        'ở' => 'o',
        'ỡ' => 'o',
        'ợ' => 'o',
        'ù' => 'u',
        'ú' => 'u',
        'ủ' => 'u',
        'ũ' => 'u',
        'ụ' => 'u',
        'ư' => 'u',
        'ừ' => 'u',
        'ứ' => 'u',
        'ử' => 'u',
        'ữ' => 'u',
        'ự' => 'u',
        'ỳ' => 'y',
        'ý' => 'y',
        'ỷ' => 'y',
        'ỹ' => 'y',
        'ỵ' => 'y'
    ];
    $str = mb_strtolower($str, 'UTF-8');
    $str = strtr($str, $map);
    $str = preg_replace('/[^a-z0-9\s-]/', '', $str);
    $str = preg_replace('/[\s-]+/', '-', $str);
    return trim($str, '-');
}

try {
    switch ($method) {
        // ── GET: Danh sách ──
        case 'GET':
            $sql = "SELECT * FROM news_categories";
            $params = [];

            if (!empty($_GET['search'])) {
                $sql .= " WHERE name LIKE :search";
                $params[':search'] = '%' . $_GET['search'] . '%';
            }

            $sql .= " ORDER BY id DESC";

            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo json_encode(['success' => true, 'data' => $data]);
            break;

        // ── POST: Thêm mới ──
        case 'POST':
            $input = json_decode(file_get_contents('php://input'), true);
            $name = trim($input['name'] ?? '');
            $slug = trim($input['slug'] ?? '');
            $status = $input['status'] ?? 'active';

            if (!$name) {
                echo json_encode(['success' => false, 'message' => 'Tên danh mục không được để trống']);
                break;
            }

            if (!$slug) {
                $slug = createCatSlug($name);
            }

            if (!in_array($status, ['active', 'inactive'])) {
                $status = 'active';
            }

            // Check slug unique
            $check = $pdo->prepare("SELECT id FROM news_categories WHERE slug = :slug");
            $check->execute([':slug' => $slug]);
            if ($check->fetch()) {
                $slug .= '-' . time();
            }

            $stmt = $pdo->prepare("INSERT INTO news_categories (name, slug, status) VALUES (:name, :slug, :status)");
            $stmt->execute([':name' => $name, ':slug' => $slug, ':status' => $status]);

            echo json_encode(['success' => true, 'message' => 'Đã thêm danh mục thành công', 'id' => $pdo->lastInsertId()]);
            break;

        // ── PUT: Cập nhật ──
        case 'PUT':
            $input = json_decode(file_get_contents('php://input'), true);
            $id = (int) ($input['id'] ?? 0);
            $name = trim($input['name'] ?? '');
            $slug = trim($input['slug'] ?? '');
            $status = $input['status'] ?? 'active';

            if (!$id || !$name) {
                echo json_encode(['success' => false, 'message' => 'Thiếu thông tin']);
                break;
            }

            if (!$slug) {
                $slug = createCatSlug($name);
            }

            if (!in_array($status, ['active', 'inactive'])) {
                $status = 'active';
            }

            // Check slug unique (exclude self)
            $check = $pdo->prepare("SELECT id FROM news_categories WHERE slug = :slug AND id != :id");
            $check->execute([':slug' => $slug, ':id' => $id]);
            if ($check->fetch()) {
                $slug .= '-' . time();
            }

            $stmt = $pdo->prepare("UPDATE news_categories SET name = :name, slug = :slug, status = :status WHERE id = :id");
            $stmt->execute([':name' => $name, ':slug' => $slug, ':status' => $status, ':id' => $id]);

            echo json_encode(['success' => true, 'message' => 'Đã cập nhật danh mục']);
            break;

        // ── DELETE ──
        case 'DELETE':
            $input = json_decode(file_get_contents('php://input'), true);
            $id = (int) ($input['id'] ?? 0);

            if (!$id) {
                echo json_encode(['success' => false, 'message' => 'Thiếu ID']);
                break;
            }

            $stmt = $pdo->prepare("DELETE FROM news_categories WHERE id = :id");
            $stmt->execute([':id' => $id]);

            echo json_encode(['success' => true, 'message' => 'Đã xóa danh mục']);
            break;

        default:
            http_response_code(405);
            echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    }
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Lỗi hệ thống']);
}
