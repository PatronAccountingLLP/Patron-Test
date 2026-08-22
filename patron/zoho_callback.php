<?php
/**
 * PATRON - Zoho OAuth Callback Handler
 * Handles the OAuth redirect from Zoho after authorization
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/zoho_api.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied');
    header('Location: dashboard.php'); exit;
}

// Check for authorization code
$code = $_GET['code'] ?? '';
$error = $_GET['error'] ?? '';

if ($error) {
    setFlash('error', 'Authorization denied: ' . htmlspecialchars($error));
    header('Location: zoho_settings.php'); exit;
}

if (empty($code)) {
    setFlash('error', 'No authorization code received');
    header('Location: zoho_settings.php'); exit;
}

// Exchange code for tokens
$zoho = new ZohoBooks();
$result = $zoho->exchangeCodeForTokens($code);

if ($result['success']) {
    setFlash('success', 'Successfully connected to Zoho Books! You can now sync data.');
} else {
    setFlash('error', 'Failed to connect: ' . ($result['error'] ?? 'Unknown error'));
}

header('Location: zoho_settings.php'); exit;
