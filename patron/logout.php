<?php
/**
 * PATRON ADMIN DASHBOARD
 * Logout Handler
 */

require_once 'includes/db.php';
startSession();

// Log the logout activity if user was logged in
if (isLoggedIn()) {
    logActivity('LOGOUT', 'users', $_SESSION['user_id']);
}

// Destroy session
$_SESSION = [];
session_destroy();

// Clear session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to login page
header('Location: index.php');
exit;
