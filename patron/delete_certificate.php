<?php
/**
 * PATRON - Delete Certificate
 * Handles certificate deletion (soft delete)
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: clients.php');
    exit;
}

if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    setFlash('error', 'Invalid request.');
    header('Location: clients.php');
    exit;
}

$certId = (int)($_POST['certificate_id'] ?? 0);
$clientId = (int)($_POST['client_id'] ?? 0);

if (!$certId || !$clientId) {
    setFlash('error', 'Invalid certificate.');
    header('Location: clients.php');
    exit;
}

// Check access
if (!canAccessClient($clientId)) {
    setFlash('error', 'You do not have access to this client.');
    header('Location: clients.php');
    exit;
}

// Verify certificate belongs to this client
$cert = dbFetchOne("SELECT id, file_path FROM client_certificates WHERE id = ? AND client_id = ? AND deleted_at IS NULL", [$certId, $clientId]);

if (!$cert) {
    setFlash('error', 'Certificate not found.');
    header("Location: view_client.php?id=$clientId&tab=certificates");
    exit;
}

// Soft delete
dbExecute("UPDATE client_certificates SET deleted_at = NOW() WHERE id = ?", [$certId]);

// Optionally delete the file (uncomment if you want to remove physical file)
// if (!empty($cert['file_path']) && file_exists($cert['file_path'])) {
//     @unlink($cert['file_path']);
// }

setFlash('success', 'Certificate deleted successfully.');
header("Location: view_client.php?id=$clientId&tab=certificates");
exit;
