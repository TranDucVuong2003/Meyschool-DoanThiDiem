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

function ensureRecruitmentCardsTable(PDO $pdo): void
{
    $pdo->exec(
        "CREATE TABLE IF NOT EXISTS recruitment_cards (
            id INT UNSIGNED NOT NULL AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            image VARCHAR(500) NOT NULL DEFAULT '',
            button_link VARCHAR(500) NOT NULL DEFAULT '',
            button_text VARCHAR(100) NOT NULL DEFAULT 'Chi tiết',
            sort_order INT UNSIGNED NOT NULL DEFAULT 0,
            is_active TINYINT(1) NOT NULL DEFAULT 1,
            created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    );
}

// GET - List all recruitment cards
if ($method === 'GET') {
    ensureRecruitmentCardsTable($pdo);
    
    $stmt = $pdo->query('SELECT * FROM recruitment_cards ORDER BY sort_order ASC, id ASC');
    $cards = $stmt->fetchAll();
    echo json_encode(['success' => true, 'data' => $cards]);
    exit;
}

// POST - Create new card
if ($method === 'POST') {
    ensureRecruitmentCardsTable($pdo);
    
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (empty($input['title'])) {
        echo json_encode(['success' => false, 'message' => 'Tiêu đề không được để trống']);
        exit;
    }
    
    $stmt = $pdo->prepare(
        'INSERT INTO recruitment_cards (title, description, image, button_link, button_text, sort_order, is_active)
         VALUES (:title, :description, :image, :button_link, :button_text, :sort_order, :is_active)'
    );
    
    $stmt->execute([
        ':title' => $input['title'] ?? '',
        ':description' => $input['description'] ?? '',
        ':image' => $input['image'] ?? '',
        ':button_link' => $input['button_link'] ?? '',
        ':button_text' => $input['button_text'] ?? 'Chi tiết',
        ':sort_order' => $input['sort_order'] ?? 0,
        ':is_active' => $input['is_active'] ?? 1
    ]);
    
    echo json_encode(['success' => true, 'message' => 'Đã thêm thẻ tuyển sinh mới', 'id' => $pdo->lastInsertId()]);
    exit;
}

// PUT - Update card
if ($method === 'PUT') {
    ensureRecruitmentCardsTable($pdo);
    
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (empty($input['id'])) {
        echo json_encode(['success' => false, 'message' => 'ID không được để trống']);
        exit;
    }
    
    if (empty($input['title'])) {
        echo json_encode(['success' => false, 'message' => 'Tiêu đề không được để trống']);
        exit;
    }
    
    $stmt = $pdo->prepare(
        'UPDATE recruitment_cards 
         SET title = :title, description = :description, image = :image, 
             button_link = :button_link, button_text = :button_text, 
             sort_order = :sort_order, is_active = :is_active
         WHERE id = :id'
    );
    
    $stmt->execute([
        ':id' => $input['id'],
        ':title' => $input['title'] ?? '',
        ':description' => $input['description'] ?? '',
        ':image' => $input['image'] ?? '',
        ':button_link' => $input['button_link'] ?? '',
        ':button_text' => $input['button_text'] ?? 'Chi tiết',
        ':sort_order' => $input['sort_order'] ?? 0,
        ':is_active' => $input['is_active'] ?? 1
    ]);
    
    echo json_encode(['success' => true, 'message' => 'Đã cập nhật thẻ tuyển sinh']);
    exit;
}

// DELETE - Remove card
if ($method === 'DELETE') {
    ensureRecruitmentCardsTable($pdo);
    
    $id = $_GET['id'] ?? null;
    
    if (empty($id)) {
        echo json_encode(['success' => false, 'message' => 'ID không được để trống']);
        exit;
    }
    
    $stmt = $pdo->prepare('DELETE FROM recruitment_cards WHERE id = :id');
    $stmt->execute([':id' => $id]);
    
    echo json_encode(['success' => true, 'message' => 'Đã xóa thẻ tuyển sinh']);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Phương thức không hợp lệ']);
