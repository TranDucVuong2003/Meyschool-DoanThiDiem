<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập']);
    exit;
}

require_once __DIR__ . '/../config/db.php';
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];

// ── GET: Lấy danh sách hoặc chi tiết ──
if ($method === 'GET') {
    // Chi tiết 1 bài
    if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        if ($row) {
            echo json_encode(['success' => true, 'data' => $row]);
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Không tìm thấy bài viết']);
        }
        exit;
    }

    // Danh sách
    $search = trim($_GET['search'] ?? '');
    $status = trim($_GET['status'] ?? '');
    $page   = max(1, (int) ($_GET['page'] ?? 1));
    $limit  = 10;
    $offset = ($page - 1) * $limit;

    $where  = [];
    $params = [];

    if ($search !== '') {
        $where[]  = "title LIKE ?";
        $params[] = "%$search%";
    }
    if ($status !== '') {
        $where[]  = "status = ?";
        $params[] = $status;
    }

    $whereSQL = $where ? 'WHERE ' . implode(' AND ', $where) : '';

    // Tổng
    $countStmt = $pdo->prepare("SELECT COUNT(*) FROM news $whereSQL");
    $countStmt->execute($params);
    $total = (int) $countStmt->fetchColumn();

    // Dữ liệu
    $dataStmt = $pdo->prepare("SELECT id, title, slug, thumbnail, status, is_featured, created_at, updated_at FROM news $whereSQL ORDER BY created_at DESC LIMIT $limit OFFSET $offset");
    $dataStmt->execute($params);
    $rows = $dataStmt->fetchAll();

    echo json_encode([
        'success'    => true,
        'data'       => $rows,
        'total'      => $total,
        'page'       => $page,
        'totalPages' => ceil($total / $limit)
    ]);
    exit;
}

// ── POST: Tạo mới ──
if ($method === 'POST' && empty($_GET['_method'])) {
    $title      = trim($_POST['title'] ?? '');
    $slug       = trim($_POST['slug'] ?? '');
    $excerpt    = trim($_POST['excerpt'] ?? '');
    $content    = $_POST['content'] ?? '';
    $status     = $_POST['status'] ?? 'nhap';
    $is_featured = (int) ($_POST['is_featured'] ?? 0);
    $category_id = ($_POST['category_id'] ?? '') !== '' ? (int) $_POST['category_id'] : null;

    if ($title === '') {
        echo json_encode(['success' => false, 'message' => 'Tiêu đề không được để trống']);
        exit;
    }

    // Tự tạo slug nếu rỗng
    if ($slug === '') {
        $slug = createSlug($title);
    }

    // Kiểm tra slug trùng
    $check = $pdo->prepare("SELECT id FROM news WHERE slug = ?");
    $check->execute([$slug]);
    if ($check->fetch()) {
        $slug .= '-' . time();
    }

    // Upload thumbnail
    $thumbnailPath = '';
    if (!empty($_FILES['thumbnail']['name'])) {
        $thumbnailPath = uploadThumbnail($_FILES['thumbnail']);
        if ($thumbnailPath === false) {
            echo json_encode(['success' => false, 'message' => 'Lỗi upload ảnh. Chỉ chấp nhận JPG, PNG, GIF, WebP (tối đa 5MB)']);
            exit;
        }
    }

    $stmt = $pdo->prepare("INSERT INTO news (title, slug, excerpt, content, thumbnail, category_id, status, is_featured) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$title, $slug, $excerpt, $content, $thumbnailPath, $category_id, $status, $is_featured]);

    echo json_encode(['success' => true, 'message' => 'Tạo bài viết thành công', 'id' => $pdo->lastInsertId()]);
    exit;
}

// ── POST with _method=PUT: Cập nhật ──
if ($method === 'POST' && ($_GET['_method'] ?? '') === 'PUT') {
    $id         = (int) ($_POST['id'] ?? 0);
    $title      = trim($_POST['title'] ?? '');
    $slug       = trim($_POST['slug'] ?? '');
    $excerpt    = trim($_POST['excerpt'] ?? '');
    $content    = $_POST['content'] ?? '';
    $status     = $_POST['status'] ?? 'nhap';
    $is_featured = (int) ($_POST['is_featured'] ?? 0);
    $category_id = ($_POST['category_id'] ?? '') !== '' ? (int) $_POST['category_id'] : null;

    if ($id <= 0 || $title === '') {
        echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ']);
        exit;
    }

    // Kiểm tra tồn tại
    $existing = $pdo->prepare("SELECT * FROM news WHERE id = ?");
    $existing->execute([$id]);
    $old = $existing->fetch();
    if (!$old) {
        echo json_encode(['success' => false, 'message' => 'Bài viết không tồn tại']);
        exit;
    }

    if ($slug === '') {
        $slug = createSlug($title);
    }

    // Slug trùng (trừ chính nó)
    $check = $pdo->prepare("SELECT id FROM news WHERE slug = ? AND id != ?");
    $check->execute([$slug, $id]);
    if ($check->fetch()) {
        $slug .= '-' . time();
    }

    // Upload thumbnail mới
    $thumbnailPath = $old['thumbnail'];
    if (!empty($_FILES['thumbnail']['name'])) {
        $newThumb = uploadThumbnail($_FILES['thumbnail']);
        if ($newThumb === false) {
            echo json_encode(['success' => false, 'message' => 'Lỗi upload ảnh']);
            exit;
        }
        // Xóa ảnh cũ
        if ($old['thumbnail'] && file_exists(__DIR__ . '/../' . $old['thumbnail'])) {
            unlink(__DIR__ . '/../' . $old['thumbnail']);
        }
        $thumbnailPath = $newThumb;
    }

    $stmt = $pdo->prepare("UPDATE news SET title=?, slug=?, excerpt=?, content=?, thumbnail=?, category_id=?, status=?, is_featured=? WHERE id=?");
    $stmt->execute([$title, $slug, $excerpt, $content, $thumbnailPath, $category_id, $status, $is_featured, $id]);

    echo json_encode(['success' => true, 'message' => 'Cập nhật thành công']);
    exit;
}

// ── DELETE ──
if ($method === 'DELETE' || ($method === 'POST' && ($_GET['_method'] ?? '') === 'DELETE')) {
    $input = $method === 'DELETE' ? json_decode(file_get_contents('php://input'), true) : $_POST;
    $id = (int) ($input['id'] ?? 0);

    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'ID không hợp lệ']);
        exit;
    }

    // Xóa thumbnail
    $old = $pdo->prepare("SELECT thumbnail FROM news WHERE id = ?");
    $old->execute([$id]);
    $row = $old->fetch();
    if ($row && $row['thumbnail'] && file_exists(__DIR__ . '/../' . $row['thumbnail'])) {
        unlink(__DIR__ . '/../' . $row['thumbnail']);
    }

    $stmt = $pdo->prepare("DELETE FROM news WHERE id = ?");
    $stmt->execute([$id]);

    echo json_encode(['success' => true, 'message' => 'Đã xóa bài viết']);
    exit;
}

// ── Helpers ──
function createSlug($str)
{
    $str = mb_strtolower($str, 'UTF-8');
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
        'ỵ' => 'y',
    ];
    $str = strtr($str, $map);
    $str = preg_replace('/[^a-z0-9\s-]/', '', $str);
    $str = preg_replace('/[\s-]+/', '-', $str);
    return trim($str, '-');
}

function uploadThumbnail($file)
{
    $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $maxSize = 5 * 1024 * 1024; // 5MB

    if ($file['error'] !== UPLOAD_ERR_OK) return false;
    if (!in_array($file['type'], $allowed)) return false;
    if ($file['size'] > $maxSize) return false;

    // Kiểm tra thực sự là ảnh
    $imgInfo = getimagesize($file['tmp_name']);
    if ($imgInfo === false) return false;

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $ext = strtolower($ext);
    if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) return false;

    $uploadDir = __DIR__ . '/../storage/news/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $filename = 'news-' . time() . '-' . bin2hex(random_bytes(4)) . '.' . $ext;
    $dest = $uploadDir . $filename;

    if (!move_uploaded_file($file['tmp_name'], $dest)) return false;

    return 'storage/news/' . $filename;
}
