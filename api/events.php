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

// ── Helper: slug ──
function createEventSlug($str)
{
    $map = [
        'à'=>'a','á'=>'a','ả'=>'a','ã'=>'a','ạ'=>'a',
        'ă'=>'a','ằ'=>'a','ắ'=>'a','ẳ'=>'a','ẵ'=>'a','ặ'=>'a',
        'â'=>'a','ầ'=>'a','ấ'=>'a','ẩ'=>'a','ẫ'=>'a','ậ'=>'a',
        'đ'=>'d',
        'è'=>'e','é'=>'e','ẻ'=>'e','ẽ'=>'e','ẹ'=>'e',
        'ê'=>'e','ề'=>'e','ế'=>'e','ể'=>'e','ễ'=>'e','ệ'=>'e',
        'ì'=>'i','í'=>'i','ỉ'=>'i','ĩ'=>'i','ị'=>'i',
        'ò'=>'o','ó'=>'o','ỏ'=>'o','õ'=>'o','ọ'=>'o',
        'ô'=>'o','ồ'=>'o','ố'=>'o','ổ'=>'o','ỗ'=>'o','ộ'=>'o',
        'ơ'=>'o','ờ'=>'o','ớ'=>'o','ở'=>'o','ỡ'=>'o','ợ'=>'o',
        'ù'=>'u','ú'=>'u','ủ'=>'u','ũ'=>'u','ụ'=>'u',
        'ư'=>'u','ừ'=>'u','ứ'=>'u','ử'=>'u','ữ'=>'u','ự'=>'u',
        'ỳ'=>'y','ý'=>'y','ỷ'=>'y','ỹ'=>'y','ỵ'=>'y',
    ];
    $str = mb_strtolower($str, 'UTF-8');
    $str = strtr($str, $map);
    $str = preg_replace('/[^a-z0-9\s-]/', '', $str);
    $str = preg_replace('/[\s-]+/', '-', $str);
    return trim($str, '-');
}

// ── Helper: upload thumbnail ──
function uploadEventThumbnail($file)
{
    $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $maxSize = 5 * 1024 * 1024;

    if (!in_array($file['type'], $allowed)) return false;
    if ($file['size'] > $maxSize) return false;

    $ext    = pathinfo($file['name'], PATHINFO_EXTENSION);
    $name   = 'events/' . uniqid('ev_', true) . '.' . strtolower($ext);
    $target = __DIR__ . '/../storage/' . $name;

    if (!is_dir(dirname($target))) {
        mkdir(dirname($target), 0775, true);
    }

    if (!move_uploaded_file($file['tmp_name'], $target)) return false;
    return 'storage/' . $name;
}

// ── GET: Lấy danh sách hoặc chi tiết ──
if ($method === 'GET') {
    if (!empty($_GET['id'])) {
        $id   = (int) $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
        $stmt->execute([$id]);
        $row  = $stmt->fetch();
        if ($row) {
            echo json_encode(['success' => true, 'data' => $row]);
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Không tìm thấy sự kiện']);
        }
        exit;
    }

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

    $whereSQL  = $where ? 'WHERE ' . implode(' AND ', $where) : '';

    $countStmt = $pdo->prepare("SELECT COUNT(*) FROM events $whereSQL");
    $countStmt->execute($params);
    $total = (int) $countStmt->fetchColumn();

    $dataStmt  = $pdo->prepare("SELECT id, title, slug, thumbnail, event_date, event_location, status, is_featured, created_at, updated_at FROM events $whereSQL ORDER BY event_date DESC, created_at DESC LIMIT $limit OFFSET $offset");
    $dataStmt->execute($params);
    $rows = $dataStmt->fetchAll();

    echo json_encode([
        'success'    => true,
        'data'       => $rows,
        'total'      => $total,
        'page'       => $page,
        'totalPages' => ceil($total / $limit),
    ]);
    exit;
}

// ── POST: Tạo mới ──
if ($method === 'POST' && empty($_GET['_method'])) {
    $title          = trim($_POST['title']         ?? '');
    $slug           = trim($_POST['slug']          ?? '');
    $excerpt        = trim($_POST['excerpt']       ?? '');
    $content        = $_POST['content']            ?? '';
    $event_date     = $_POST['event_date']         ?? null;
    $event_time     = $_POST['event_time']         ?? null;
    $event_end_date = $_POST['event_end_date']     ?? null;
    $event_location = trim($_POST['event_location'] ?? '');
    $status         = $_POST['status']             ?? 'nhap';
    $is_featured    = (int) ($_POST['is_featured'] ?? 0);

    if ($title === '') {
        echo json_encode(['success' => false, 'message' => 'Tiêu đề không được để trống']);
        exit;
    }

    if ($slug === '') $slug = createEventSlug($title);

    $check = $pdo->prepare("SELECT id FROM events WHERE slug = ?");
    $check->execute([$slug]);
    if ($check->fetch()) $slug .= '-' . time();

    $thumbnailPath = '';
    if (!empty($_FILES['thumbnail']['name'])) {
        $thumbnailPath = uploadEventThumbnail($_FILES['thumbnail']);
        if ($thumbnailPath === false) {
            echo json_encode(['success' => false, 'message' => 'Lỗi upload ảnh. Chỉ chấp nhận JPG, PNG, GIF, WebP (tối đa 5MB)']);
            exit;
        }
    }

    $stmt = $pdo->prepare("INSERT INTO events (title, slug, excerpt, content, thumbnail, event_date, event_time, event_end_date, event_location, status, is_featured) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $title, $slug, $excerpt, $content, $thumbnailPath,
        $event_date ?: null, $event_time ?: null, $event_end_date ?: null,
        $event_location, $status, $is_featured
    ]);

    echo json_encode(['success' => true, 'message' => 'Tạo sự kiện thành công', 'id' => $pdo->lastInsertId()]);
    exit;
}

// ── POST with _method=PUT: Cập nhật ──
if ($method === 'POST' && ($_GET['_method'] ?? '') === 'PUT') {
    $id             = (int) ($_POST['id']          ?? 0);
    $title          = trim($_POST['title']         ?? '');
    $slug           = trim($_POST['slug']          ?? '');
    $excerpt        = trim($_POST['excerpt']       ?? '');
    $content        = $_POST['content']            ?? '';
    $event_date     = $_POST['event_date']         ?? null;
    $event_time     = $_POST['event_time']         ?? null;
    $event_end_date = $_POST['event_end_date']     ?? null;
    $event_location = trim($_POST['event_location'] ?? '');
    $status         = $_POST['status']             ?? 'nhap';
    $is_featured    = (int) ($_POST['is_featured'] ?? 0);

    if ($id <= 0 || $title === '') {
        echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ']);
        exit;
    }

    $existing = $pdo->prepare("SELECT * FROM events WHERE id = ?");
    $existing->execute([$id]);
    $old = $existing->fetch();
    if (!$old) {
        echo json_encode(['success' => false, 'message' => 'Sự kiện không tồn tại']);
        exit;
    }

    if ($slug === '') $slug = createEventSlug($title);

    $check = $pdo->prepare("SELECT id FROM events WHERE slug = ? AND id != ?");
    $check->execute([$slug, $id]);
    if ($check->fetch()) $slug .= '-' . time();

    $thumbnailPath = $old['thumbnail'];
    if (!empty($_FILES['thumbnail']['name'])) {
        $newThumb = uploadEventThumbnail($_FILES['thumbnail']);
        if ($newThumb === false) {
            echo json_encode(['success' => false, 'message' => 'Lỗi upload ảnh']);
            exit;
        }
        if ($old['thumbnail'] && file_exists(__DIR__ . '/../' . $old['thumbnail'])) {
            unlink(__DIR__ . '/../' . $old['thumbnail']);
        }
        $thumbnailPath = $newThumb;
    }

    $stmt = $pdo->prepare("UPDATE events SET title=?, slug=?, excerpt=?, content=?, thumbnail=?, event_date=?, event_time=?, event_end_date=?, event_location=?, status=?, is_featured=? WHERE id=?");
    $stmt->execute([
        $title, $slug, $excerpt, $content, $thumbnailPath,
        $event_date ?: null, $event_time ?: null, $event_end_date ?: null,
        $event_location, $status, $is_featured, $id
    ]);

    echo json_encode(['success' => true, 'message' => 'Cập nhật thành công']);
    exit;
}

// ── POST with _method=DELETE: Xóa ──
if ($method === 'POST' && ($_GET['_method'] ?? '') === 'DELETE') {
    $id = (int) ($_POST['id'] ?? 0);
    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'Thiếu ID']);
        exit;
    }

    $existing = $pdo->prepare("SELECT thumbnail FROM events WHERE id = ?");
    $existing->execute([$id]);
    $row = $existing->fetch();
    if ($row && $row['thumbnail'] && file_exists(__DIR__ . '/../' . $row['thumbnail'])) {
        unlink(__DIR__ . '/../' . $row['thumbnail']);
    }

    $pdo->prepare("DELETE FROM events WHERE id = ?")->execute([$id]);
    echo json_encode(['success' => true, 'message' => 'Đã xóa sự kiện']);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Method not allowed']);
