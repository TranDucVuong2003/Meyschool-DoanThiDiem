<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../config/db.php';

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if ($method === 'POST' && isset($_GET['_method'])) {
    $method = strtoupper((string) $_GET['_method']);
}

const HOME_POPUP_DEFAULT_IMAGE = 'assets/img/banner/popup-tuyensinh.jpg';
const HOME_POPUP_DEFAULT_LINK = 'dang-ky-tu-van.php';
const HOME_POPUP_DEFAULT_DELAY = 10;
const HOME_POPUP_DEFAULT_REPEAT = 180;

function ensureHomePopupTable(PDO $pdo): void
{
    $pdo->exec(
        "CREATE TABLE IF NOT EXISTS home_popup_settings (
            id TINYINT UNSIGNED NOT NULL,
            is_enabled TINYINT(1) NOT NULL DEFAULT 0,
            image_path VARCHAR(255) NOT NULL DEFAULT '',
            is_custom_image TINYINT(1) NOT NULL DEFAULT 0,
            cta_url VARCHAR(255) NOT NULL DEFAULT '',
            show_delay_seconds INT UNSIGNED NOT NULL DEFAULT 10,
            repeat_interval_seconds INT UNSIGNED NOT NULL DEFAULT 180,
            updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );

    $insert = $pdo->prepare(
        'INSERT IGNORE INTO home_popup_settings
         (id, is_enabled, image_path, is_custom_image, cta_url, show_delay_seconds, repeat_interval_seconds)
         VALUES (1, 0, "", 0, :cta_url, :delay_seconds, :repeat_seconds)'
    );

    $insert->execute([
        ':cta_url' => HOME_POPUP_DEFAULT_LINK,
        ':delay_seconds' => HOME_POPUP_DEFAULT_DELAY,
        ':repeat_seconds' => HOME_POPUP_DEFAULT_REPEAT,
    ]);
}

function normalizePublicPath(string $path): string
{
    return ltrim(str_replace('\\', '/', $path), '/');
}

function cleanUrl(string $url): string
{
    $value = trim($url);
    if ($value === '') {
        return HOME_POPUP_DEFAULT_LINK;
    }

    return ltrim($value, '/');
}

function clampInt(int $value, int $min, int $max): int
{
    if ($value < $min) {
        return $min;
    }
    if ($value > $max) {
        return $max;
    }

    return $value;
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

function fetchHomePopupSettings(PDO $pdo): array
{
    ensureHomePopupTable($pdo);

    $stmt = $pdo->query('SELECT * FROM home_popup_settings WHERE id = 1 LIMIT 1');
    $row = $stmt->fetch(PDO::FETCH_ASSOC) ?: [];

    $isCustom = !empty($row['is_custom_image']) && trim((string) ($row['image_path'] ?? '')) !== '';
    $customPath = normalizePublicPath((string) ($row['image_path'] ?? ''));

    return [
        'is_enabled' => !empty($row['is_enabled']),
        'image_url' => $isCustom ? $customPath : HOME_POPUP_DEFAULT_IMAGE,
        'default_image_url' => HOME_POPUP_DEFAULT_IMAGE,
        'is_custom_image' => $isCustom,
        'cta_url' => (string) ($row['cta_url'] ?: HOME_POPUP_DEFAULT_LINK),
        'show_delay_seconds' => (int) ($row['show_delay_seconds'] ?: HOME_POPUP_DEFAULT_DELAY),
        'repeat_interval_seconds' => (int) ($row['repeat_interval_seconds'] ?: HOME_POPUP_DEFAULT_REPEAT),
    ];
}

function uploadPopupImage(array $file): string
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

    $uploadDir = __DIR__ . '/../storage/home-popup';
    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0775, true) && !is_dir($uploadDir)) {
        return '';
    }

    $filename = 'home-popup-' . uniqid('', true) . '.' . $ext;
    $target = $uploadDir . '/' . $filename;
    if (!move_uploaded_file($tmp, $target)) {
        return '';
    }

    return 'storage/home-popup/' . $filename;
}

try {
    if ($method === 'GET') {
        $data = fetchHomePopupSettings($pdo);
        echo json_encode(['success' => true, 'data' => $data]);
        exit;
    }

    if ($method === 'POST') {
        requireConfigAccess();
        ensureHomePopupTable($pdo);

        $oldStmt = $pdo->query('SELECT image_path, is_custom_image FROM home_popup_settings WHERE id = 1 LIMIT 1');
        $old = $oldStmt->fetch(PDO::FETCH_ASSOC) ?: ['image_path' => '', 'is_custom_image' => 0];

        $newImagePath = (string) ($old['image_path'] ?? '');
        $isCustomImage = !empty($old['is_custom_image']);

        if (!empty($_FILES['image'])) {
            $uploadedPath = uploadPopupImage($_FILES['image']);
            if ($uploadedPath === '') {
                http_response_code(422);
                echo json_encode(['success' => false, 'message' => 'Ảnh popup không hợp lệ. Chỉ nhận JPG, JPEG, PNG, GIF, WEBP (tối đa 8MB)']);
                exit;
            }
            $newImagePath = $uploadedPath;
            $isCustomImage = true;
        }

        $isEnabled = isset($_POST['is_enabled']) ? (int) $_POST['is_enabled'] : 0;
        $ctaUrl = cleanUrl((string) ($_POST['cta_url'] ?? HOME_POPUP_DEFAULT_LINK));
        $showDelay = clampInt((int) ($_POST['show_delay_seconds'] ?? HOME_POPUP_DEFAULT_DELAY), 1, 600);
        $repeatInterval = clampInt((int) ($_POST['repeat_interval_seconds'] ?? HOME_POPUP_DEFAULT_REPEAT), 30, 7200);

        $update = $pdo->prepare(
            'UPDATE home_popup_settings
             SET is_enabled = :is_enabled,
                 image_path = :image_path,
                 is_custom_image = :is_custom_image,
                 cta_url = :cta_url,
                 show_delay_seconds = :show_delay_seconds,
                 repeat_interval_seconds = :repeat_interval_seconds,
                 updated_at = NOW()
             WHERE id = 1'
        );

        $update->execute([
            ':is_enabled' => $isEnabled ? 1 : 0,
            ':image_path' => $newImagePath,
            ':is_custom_image' => $isCustomImage ? 1 : 0,
            ':cta_url' => $ctaUrl,
            ':show_delay_seconds' => $showDelay,
            ':repeat_interval_seconds' => $repeatInterval,
        ]);

        if (
            !empty($_FILES['image']) &&
            !empty($old['is_custom_image']) &&
            !empty($old['image_path'])
            && $old['image_path'] !== $newImagePath
        ) {
            $oldFile = __DIR__ . '/../' . normalizePublicPath((string) $old['image_path']);
            if (is_file($oldFile)) {
                @unlink($oldFile);
            }
        }

        echo json_encode(['success' => true, 'message' => 'Đã cập nhật popup trang chủ']);
        exit;
    }

    if ($method === 'DELETE') {
        requireConfigAccess();
        ensureHomePopupTable($pdo);

        $oldStmt = $pdo->query('SELECT image_path, is_custom_image FROM home_popup_settings WHERE id = 1 LIMIT 1');
        $old = $oldStmt->fetch(PDO::FETCH_ASSOC) ?: ['image_path' => '', 'is_custom_image' => 0];

        $reset = $pdo->prepare(
            'UPDATE home_popup_settings
             SET image_path = "",
                 is_custom_image = 0,
                 updated_at = NOW()
             WHERE id = 1'
        );
        $reset->execute();

        if (!empty($old['is_custom_image']) && !empty($old['image_path'])) {
            $oldFile = __DIR__ . '/../' . normalizePublicPath((string) $old['image_path']);
            if (is_file($oldFile)) {
                @unlink($oldFile);
            }
        }

        echo json_encode(['success' => true, 'message' => 'Đã đưa ảnh popup về mặc định']);
        exit;
    }

    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Lỗi hệ thống']);
}
