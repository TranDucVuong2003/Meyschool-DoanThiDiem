<?php
require_once __DIR__ . '/config/db.php';

try {
    
    // Create recruitment_cards table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS recruitment_cards (
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
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ");
    
    echo "Table recruitment_cards created successfully.\n";
    
    // Check if data exists
    $count = $pdo->query('SELECT COUNT(*) FROM recruitment_cards')->fetchColumn();
    
    if ($count == 0) {
        // Insert default data
        $stmt = $pdo->prepare("
            INSERT INTO recruitment_cards (title, description, image, button_link, button_text, sort_order) 
            VALUES (:title, :description, :image, :button_link, :button_text, :sort_order)
        ");
        
        $defaultCards = [
            [
                'title' => 'Học bổng tuyển sinh',
                'description' => 'Nhiều suất học bổng giá trị cho học sinh xuất sắc và có hoàn cảnh khó khăn',
                'image' => 'assets/img/tin-tuc/hoc-bong.jpg',
                'button_link' => 'dang-ky-tham-quan.php',
                'button_text' => 'Chi tiết',
                'sort_order' => 1
            ],
            [
                'title' => 'Tham quan trường',
                'description' => 'Đăng ký tham quan khuôn viên và cơ sở vật chất hiện đại của trường',
                'image' => 'assets/img/tin-tuc/tham-quan.jpg',
                'button_link' => 'dang-ky-tham-quan.php',
                'button_text' => 'Chi tiết',
                'sort_order' => 2
            ],
            [
                'title' => 'Tư vấn tuyển sinh',
                'description' => 'Hotline 24/7 hỗ trợ giải đáp mọi thắc mắc về tuyển sinh',
                'image' => 'assets/img/tin-tuc/tu-van.jpg',
                'button_link' => 'lien-he.php',
                'button_text' => 'Chi tiết',
                'sort_order' => 3
            ],
            [
                'title' => 'Lịch tuyển sinh',
                'description' => 'Cập nhật lịch đăng ký, khảo sát đầu vào và nhập học',
                'image' => 'assets/img/tin-tuc/lich-ts.jpg',
                'button_link' => 'tuyen-sinh.php',
                'button_text' => 'Chi tiết',
                'sort_order' => 4
            ]
        ];
        
        foreach ($defaultCards as $card) {
            $stmt->execute($card);
        }
        
        echo "Default recruitment cards inserted successfully.\n";
    } else {
        echo "Recruitment cards already exist. No data inserted.\n";
    }
    
    echo "\nSetup completed successfully!\n";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
