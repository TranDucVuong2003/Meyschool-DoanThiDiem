<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../config/db.php';

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if ($method === 'POST' && isset($_GET['_method'])) {
    $method = strtoupper((string) $_GET['_method']);
}

const HOME_BANNER_DEFAULTS = [
    1 => 'assets/img/banner/banner1.jpeg',
    2 => 'assets/img/banner/banner2.jpeg',
    3 => 'assets/img/banner/banner3.jpeg',
];

function ensureHomeBannersTable(PDO $pdo): void
{
    $pdo->exec(
        "CREATE TABLE IF NOT EXISTS home_banners (
            slot TINYINT UNSIGNED NOT NULL,
            image_path VARCHAR(255) NOT NULL DEFAULT '',
            is_custom TINYINT(1) NOT NULL DEFAULT 0,
            updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (slot)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $insert = $pdo->prepare('INSERT IGNORE INTO home_banners (slot, image_path, is_custom) VALUES (:slot, "", 0)');
    foreach ([1, 2, 3] as $slot) {
        $insert->execute([':slot' => $slot]);
    }
}

function normalizePublicPath(string $path): string
{
    return ltrim(str_replace('\\', '/', $path), '/');
}

function fetchHomeBanners(PDO $pdo): array
{
    ensureHomeBannersTable($pdo);

    $rows = $pdo->query('SELECT slot, image_path, is_custom FROM home_banners ORDER BY slot ASC')->fetchAll(PDO::FETCH_ASSOC);
    $mapped = [];
    foreach ($rows as $row) {
        $slot = (int) $row['slot'];
        $mapped[$slot] = $row;
    }

    $result = [];
    foreach (HOME_BANNER_DEFAULTS as $slot => $defaultPath) {
        $row = $mapped[$slot] ?? ['image_path' => '', 'is_custom' => 0];
        $isCustom = !empty($row['is_custom']) && trim((string) $row['image_path']) !== '';
        $customPath = normalizePublicPath((string) ($row['image_path'] ?? ''));
        $imagePath = $isCustom ? $customPath : $defaultPath;

        $result[] = [
            'slot' => $slot,
            'image_url' => $imagePath,
            'default_url' => $defaultPath,
            'is_custom' => $isCustom,
        ];
    }

    return $result;
}

function requireConfigAccess(): void
{
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
}

function validateSlot($value): int
{
    $slot = (int) $value;
    if ($slot < 1 || $slot > 3) {
        http_response_code(422);
        echo json_encode(['success' => false, 'message' => 'Vị trí banner không hợp lệ']);
        exit;
    }
    return $slot;
}

function uploadHomeBannerImage(array $file): string
{
    $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $allowedMime = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $maxSize = 8 * 1024 * 1024;

    if (($file['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
        return '';
    }

    if (($file['size'] ?? 0) <= 0 || ($file['size'] ?? 0) > $maxSize) {
        return '';
    }

    $tmp = (string) ($file['tmp_name'] ?? '');
    if ($tmp === '' || !is_uploaded_file($tmp)) {
        return '';
    }

    $originalName = (string) ($file['name'] ?? '');
    $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
    if (!in_array($ext, $allowedExt, true)) {
        return '';
    }

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = $finfo ? (string) finfo_file($finfo, $tmp) : '';
    if ($finfo) {
        finfo_close($finfo);
    }

    if (!in_array($mime, $allowedMime, true)) {
        return '';
    }

    $uploadDir = __DIR__ . '/../storage/home-banners';
    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0775, true) && !is_dir($uploadDir)) {
        return '';
    }

    $filename = 'home-banner-' . uniqid('', true) . '.' . $ext;
    $target = $uploadDir . '/' . $filename;
    if (!move_uploaded_file($tmp, $target)) {
        return '';
    }

    return 'storage/home-banners/' . $filename;
}

try {
    if ($method === 'GET') {
        $data = fetchHomeBanners($pdo);
        echo json_encode(['success' => true, 'data' => $data]);
        exit;
    }

    if ($method === 'POST') {
        requireConfigAccess();
        $slot = validateSlot($_POST['slot'] ?? null);

        if (empty($_FILES['banner'])) {
            http_response_code(422);
            echo json_encode(['success' => false, 'message' => 'Vui lòng chọn ảnh banner']);
            exit;
        }

        $newPath = uploadHomeBannerImage($_FILES['banner']);
        if ($newPath === '') {
            http_response_code(422);
            echo json_encode(['success' => false, 'message' => 'Ảnh không hợp lệ. Chỉ nhận JPG, JPEG, PNG, GIF, WEBP (tối đa 8MB)']);
            exit;
        }

        ensureHomeBannersTable($pdo);

        $oldStmt = $pdo->prepare('SELECT image_path, is_custom FROM home_banners WHERE slot = :slot');
        $oldStmt->execute([':slot' => $slot]);
        $old = $oldStmt->fetch(PDO::FETCH_ASSOC) ?: ['image_path' => '', 'is_custom' => 0];

        $update = $pdo->prepare('UPDATE home_banners SET image_path = :image_path, is_custom = 1, updated_at = NOW() WHERE slot = :slot');
        $update->execute([
            ':image_path' => $newPath,
            ':slot' => $slot,
        ]);

        if (!empty($old['is_custom']) && !empty($old['image_path'])) {
            $oldFile = __DIR__ . '/../' . normalizePublicPath((string) $old['image_path']);
            if (is_file($oldFile)) {
                @unlink($oldFile);
            }
        }

        echo json_encode(['success' => true, 'message' => 'Đã cập nhật banner cho trang chủ (index.php)']);
        exit;
    }

    if ($method === 'DELETE') {
        requireConfigAccess();

        $input = json_decode(file_get_contents('php://input'), true);
        $slot = validateSlot($input['slot'] ?? null);

        ensureHomeBannersTable($pdo);

        $oldStmt = $pdo->prepare('SELECT image_path, is_custom FROM home_banners WHERE slot = :slot');
        $oldStmt->execute([':slot' => $slot]);
        $old = $oldStmt->fetch(PDO::FETCH_ASSOC) ?: ['image_path' => '', 'is_custom' => 0];

        $reset = $pdo->prepare('UPDATE home_banners SET image_path = "", is_custom = 0, updated_at = NOW() WHERE slot = :slot');
        $reset->execute([':slot' => $slot]);

        if (!empty($old['is_custom']) && !empty($old['image_path'])) {
            $oldFile = __DIR__ . '/../' . normalizePublicPath((string) $old['image_path']);
            if (is_file($oldFile)) {
                @unlink($oldFile);
            }
        }

        echo json_encode(['success' => true, 'message' => 'Đã đưa banner về ảnh mặc định của index.php']);
        exit;
    }

    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Lỗi hệ thống']);
}
