<?php

/**
 * Database connection using PDO
 * Usage: require_once __DIR__ . '/../config/db.php';
 * Then use $pdo to query.
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'meyschool_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    http_response_code(500);
    // Không lộ chi tiết lỗi ra ngoài
    error_log('DB Connection failed: ' . $e->getMessage());
    die(json_encode(['success' => false, 'message' => 'Lỗi kết nối hệ thống.']));
}