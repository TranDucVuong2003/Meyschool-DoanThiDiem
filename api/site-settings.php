<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

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

require_once __DIR__ . '/../config/db.php';

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST' && isset($_GET['_method'])) {
    $method = strtoupper($_GET['_method']);
}

function ensureSiteSettingsTable(PDO $pdo): void
{
    $pdo->exec(
        "CREATE TABLE IF NOT EXISTS site_settings (
            id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
            address VARCHAR(255) NOT NULL,
            hotline VARCHAR(50) NOT NULL,
            email VARCHAR(120) NOT NULL,
            website VARCHAR(255) NOT NULL,
            tiktok VARCHAR(255) NOT NULL,
            fanpage VARCHAR(255) NOT NULL,
            work_time_weekdays VARCHAR(120) NOT NULL,
            work_time_saturday VARCHAR(120) NOT NULL,
            contact_hotlines TEXT NULL,
            contact_emails TEXT NULL,
            contact_addresses TEXT NULL,
            map_iframe TEXT NULL,
            map_link VARCHAR(500) NULL,
            updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );
}

function getDefaultSettings(): array
{
    return [
        'address' => 'KĐT Meyhomes Capital Phú Quốc - P. An Thới - TP. Phú Quốc',
        'hotline' => '0846.179.888',
        'email' => 'meyschool@dtd.edu.vn',
        'website' => 'meyschooldtd.edu.vn',
        'tiktok' => 'https://bit.ly/4sWLsmk',
        'fanpage' => 'https://www.facebook.com/meyschooldtd.phuquoc',
        'work_time_weekdays' => '7:30 - 17:00 (Thứ 2 - Thứ 6)',
        'work_time_saturday' => '7:30 - 11:30 (Thứ 7)',
        'contact_hotlines' => '',
        'contact_emails' => '',
        'contact_addresses' => '',
        'map_iframe' => '',
        'map_link' => '',
    ];
}

function getCurrentSettings(PDO $pdo): array
{
    ensureSiteSettingsTable($pdo);

    $row = $pdo->query('SELECT * FROM site_settings ORDER BY id ASC LIMIT 1')->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        return $row;
    }

    $defaults = getDefaultSettings();
    $insert = $pdo->prepare(
        'INSERT INTO site_settings (address, hotline, email, website, tiktok, fanpage, work_time_weekdays, work_time_saturday, contact_hotlines, contact_emails, contact_addresses, map_iframe, map_link)
         VALUES (:address, :hotline, :email, :website, :tiktok, :fanpage, :work_time_weekdays, :work_time_saturday, :contact_hotlines, :contact_emails, :contact_addresses, :map_iframe, :map_link)'
    );
    $insert->execute([
        ':address' => $defaults['address'],
        ':hotline' => $defaults['hotline'],
        ':email' => $defaults['email'],
        ':website' => $defaults['website'],
        ':tiktok' => $defaults['tiktok'],
        ':fanpage' => $defaults['fanpage'],
        ':work_time_weekdays' => $defaults['work_time_weekdays'],
        ':work_time_saturday' => $defaults['work_time_saturday'],
        ':contact_hotlines' => $defaults['contact_hotlines'],
        ':contact_emails' => $defaults['contact_emails'],
        ':contact_addresses' => $defaults['contact_addresses'],
        ':map_iframe' => $defaults['map_iframe'],
        ':map_link' => $defaults['map_link'],
    ]);

    return $pdo->query('SELECT * FROM site_settings ORDER BY id ASC LIMIT 1')->fetch(PDO::FETCH_ASSOC);
}

try {
    if ($method === 'GET') {
        $data = getCurrentSettings($pdo);
        echo json_encode(['success' => true, 'data' => $data]);
        exit;
    }

    if (empty($_SESSION['admin_id'])) {
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => 'Chưa đăng nhập']);
        exit;
    }

    if ($method === 'PUT') {
        $input = json_decode(file_get_contents('php://input'), true);
        if (!is_array($input)) {
            $input = [];
        }

        $address = trim((string) ($input['address'] ?? ''));
        $hotline = trim((string) ($input['hotline'] ?? ''));
        $email = trim((string) ($input['email'] ?? ''));
        $website = trim((string) ($input['website'] ?? ''));
        $tiktok = trim((string) ($input['tiktok'] ?? ''));
        $fanpage = trim((string) ($input['fanpage'] ?? ''));
        $workWeekdays = trim((string) ($input['work_time_weekdays'] ?? ''));
        $workSaturday = trim((string) ($input['work_time_saturday'] ?? ''));
        $contactHotlines = trim((string) ($input['contact_hotlines'] ?? ''));
        $contactEmails = trim((string) ($input['contact_emails'] ?? ''));
        $contactAddresses = trim((string) ($input['contact_addresses'] ?? ''));
        $mapIframe = trim((string) ($input['map_iframe'] ?? ''));
        $mapLink = trim((string) ($input['map_link'] ?? ''));

        if (
            $address === '' || $hotline === '' || $email === '' || $website === '' ||
            $tiktok === '' || $fanpage === '' || $workWeekdays === '' || $workSaturday === ''
        ) {
            echo json_encode(['success' => false, 'message' => 'Vui lòng nhập đầy đủ thông tin']);
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => 'Email không đúng định dạng']);
            exit;
        }

        if (!filter_var($tiktok, FILTER_VALIDATE_URL)) {
            echo json_encode(['success' => false, 'message' => 'Link Tiktok không hợp lệ']);
            exit;
        }

        if (!filter_var($fanpage, FILTER_VALIDATE_URL)) {
            echo json_encode(['success' => false, 'message' => 'Link Fanpage không hợp lệ']);
            exit;
        }

        $current = getCurrentSettings($pdo);
        $id = (int) $current['id'];

        $stmt = $pdo->prepare(
            'UPDATE site_settings
             SET address = :address,
                 hotline = :hotline,
                 email = :email,
                 website = :website,
                 tiktok = :tiktok,
                 fanpage = :fanpage,
                 work_time_weekdays = :work_time_weekdays,
                 work_time_saturday = :work_time_saturday,
                 contact_hotlines = :contact_hotlines,
                 contact_emails = :contact_emails,
                 contact_addresses = :contact_addresses,
                 map_iframe = :map_iframe,
                 map_link = :map_link,
                 updated_at = NOW()
             WHERE id = :id'
        );

        $stmt->execute([
            ':address' => $address,
            ':hotline' => $hotline,
            ':email' => $email,
            ':website' => $website,
            ':tiktok' => $tiktok,
            ':fanpage' => $fanpage,
            ':work_time_weekdays' => $workWeekdays,
            ':work_time_saturday' => $workSaturday,
            ':contact_hotlines' => $contactHotlines,
            ':contact_emails' => $contactEmails,
            ':contact_addresses' => $contactAddresses,
            ':map_iframe' => $mapIframe,
            ':map_link' => $mapLink,
            ':id' => $id,
        ]);

        echo json_encode(['success' => true, 'message' => 'Đã cập nhật thông tin liên hệ']);
        exit;
    }

    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Lỗi hệ thống']);
}
