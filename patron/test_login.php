<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Load db
require_once __DIR__ . '/includes/db.php';

echo "<h2>Login Test</h2>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    echo "<p>Trying login with: $email</p>";
    
    try {
        $user = dbFetchOne("SELECT * FROM users WHERE email = ? AND deleted_at IS NULL", [$email]);
        
        if ($user) {
            echo "<p>User found: " . $user['email'] . "</p>";
            echo "<p>Password hash exists: " . (empty($user["password_hash"]) ? 'NO' : 'YES') . "</p>";
            
            if (password_verify($password, $user["password_hash"])) {
                echo "<p style='color:green'>✅ Password correct!</p>";
                $_SESSION['user_id'] = $user['id'];
                echo "<p>Session user_id set: " . $_SESSION['user_id'] . "</p>";
            } else {
                echo "<p style='color:red'>❌ Wrong password</p>";
            }
        } else {
            echo "<p style='color:red'>❌ User not found</p>";
        }
    } catch (Exception $e) {
        echo "<p style='color:red'>Error: " . $e->getMessage() . "</p>";
    }
}
?>
<form method="POST">
    <p>Email: <input name="email" value="admin@patron.com"></p>
    <p>Password: <input name="password" type="password"></p>
    <button type="submit">Test Login</button>
</form>
