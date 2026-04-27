<?php
header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../config/db.php';

try {
    $stmt = $pdo->query('SELECT * FROM recruitment_cards WHERE is_active = 1 ORDER BY sort_order ASC, id ASC');
    $cards = $stmt->fetchAll();
    echo json_encode(['success' => true, 'data' => $cards]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'data' => []]);
}
