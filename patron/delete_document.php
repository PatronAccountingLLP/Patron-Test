<?php
/**
 * PATRON - Delete Document Handler
 * Soft delete a client document
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

// Verify CSRF
if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    setFlash('error', 'Invalid security token. Please try again.');
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'dashboard.php'));
    exit;
}

$docId = (int)($_POST['document_id'] ?? 0);
$clientId = (int)($_POST['client_id'] ?? 0);

if (!$docId) {
    setFlash('error', 'Invalid document ID');
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'dashboard.php'));
    exit;
}

// Get document
$doc = dbFetchOne("SELECT * FROM client_documents WHERE id = ? AND deleted_at IS NULL", [$docId]);

if (!$doc) {
    setFlash('error', 'Document not found');
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'dashboard.php'));
    exit;
}

// Check access
if (!canAccessClient($doc['client_id'])) {
    setFlash('error', 'Access denied');
    header('Location: dashboard.php');
    exit;
}

// Soft delete
dbExecute("UPDATE client_documents SET deleted_at = NOW() WHERE id = ?", [$docId]);

// Log activity
try {
    dbExecute("INSERT INTO activity_logs (user_id, action, entity_type, entity_id, details, created_at) VALUES (?, 'DELETE', 'document', ?, ?, NOW())",
        [$_SESSION['user_id'], $docId, json_encode(['client_id' => $doc['client_id'], 'document_type_id' => $doc['document_type_id']])]);
} catch (Exception $e) {}

setFlash('success', 'Document deleted successfully.');

// Redirect back
$redirectUrl = $clientId ? "view_client.php?id=$clientId&tab=documents" : ($_SERVER['HTTP_REFERER'] ?? 'documents.php');
header('Location: ' . $redirectUrl);
exit;
