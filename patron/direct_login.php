<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'includes/db.php';
startSession();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $user = dbFetchOne("SELECT * FROM users WHERE email = ? AND deleted_at IS NULL", [$email]);
    
    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['display_name'];
        $_SESSION['login_time'] = time();
        $_SESSION['_created'] = time();
        $_SESSION['_last_activity'] = time();
        
        echo "<p style='color:green'>✅ Login successful! Redirecting...</p>";
        echo "<script>setTimeout(function(){ window.location.href = 'dashboard.php'; }, 1000);</script>";
        exit;
    } else {
        echo "<p style='color:red'>❌ Login failed</p>";
    }
}
?>
<form method="POST">
    <p>Email: <input name="email" value="admin@patron.com"></p>
    <p>Password: <input name="password" type="password" value="password"></p>
    <button type="submit">Login</button>
</form>
