<?php
/**
 * PATRON ADMIN DASHBOARD
 * Dismiss Cross-Sell Recommendation
 */

require_once 'includes/db.php';
require_once 'includes/cross_sell.php';
startSession();
requireLogin();

$clientId = (int)($_GET['client_id'] ?? 0);
$serviceCode = sanitize($_GET['code'] ?? '');
$dismissalType = sanitize($_GET['type'] ?? '');
$returnTo = sanitize($_GET['return'] ?? 'view_client');

if (!$clientId || !$serviceCode || !in_array($dismissalType, ['ALREADY_HAVE', 'NOT_REQUIRED'])) {
    setFlash('error', 'Invalid request.');
    header('Location: clients.php');
    exit;
}

// Verify client exists
$client = dbFetchOne("SELECT id, name FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
if (!$client) {
    setFlash('error', 'Client not found.');
    header('Location: clients.php');
    exit;
}

// Dismiss the recommendation
if (dismissCrossSell($clientId, $serviceCode, $dismissalType, $_SESSION['user_id'])) {
    $typeLabel = $dismissalType === 'ALREADY_HAVE' ? 'marked as already have' : 'marked as not required';
    setFlash('success', "Recommendation $typeLabel.");
} else {
    setFlash('error', 'Failed to dismiss recommendation.');
}

// Redirect back
if ($returnTo === 'view_client') {
    header('Location: view_client.php?id=' . $clientId);
} else {
    header('Location: clients.php');
}
exit;
