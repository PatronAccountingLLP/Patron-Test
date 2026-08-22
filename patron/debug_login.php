<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>Testing Database Connection...</h2>";

// Load env
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            putenv(trim($key) . '=' . trim($value));
        }
    }
    echo "<p>.env loaded</p>";
}

$host = getenv('DB_HOST') ?: 'localhost';
$name = getenv('DB_NAME') ?: 'patron';
$user = getenv('DB_USER') ?: 'patron_user';
$pass = getenv('DB_PASS') ?: '';

echo "<p>Host: $host, DB: $name, User: $user</p>";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
    echo "<p style='color:green'>✅ Database Connected!</p>";
    
    // Test users table
    $stmt = $pdo->query("SELECT id, email FROM users LIMIT 3");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<p>Users found: " . count($users) . "</p>";
    foreach ($users as $u) {
        echo "<p>- " . $u['email'] . "</p>";
    }
} catch (Exception $e) {
    echo "<p style='color:red'>❌ Error: " . $e->getMessage() . "</p>";
}
