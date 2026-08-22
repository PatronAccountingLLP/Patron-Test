<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
$_SESSION['user_id'] = 1;
$_SESSION['_created'] = time();
$_SESSION['_last_activity'] = time();

echo "Session set. Now including dashboard...\n";

require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/dashboard.php';
