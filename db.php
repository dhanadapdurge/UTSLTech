<?php
// PostgreSQL Database Connection
$host = 'localhost';
$port = '5432';
$dbname = 'utsl_edtech';
$user = 'postgres';
$password = 'student';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    // For debugging, display the error
    die("Database connection failed: " . $e->getMessage());
}
?>