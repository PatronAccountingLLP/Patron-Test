<?php
/**
 * PATRON - Zoho PDF Handler (Authenticated)
 * Session-based PDF access for logged-in users
 * 
 * Usage:
 *   zoho_pdf.php?type=invoice&id=123&action=view
 *   zoho_pdf.php?type=invoice&id=123&action=download
 */

require_once 'includes/db.php';
require_once 'includes/zoho_api.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$type = sanitize($_GET['type'] ?? '');
$id = (int)($_GET['id'] ?? 0);
$action = sanitize($_GET['action'] ?? 'view'); // view or download

// Validate inputs
if (!$id || !in_array($type, ['invoice', 'estimate', 'payment'])) {
    http_response_code(400);
    die('Invalid request');
}

// Get current user info for access control
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$userRoles = getUserRoles($userId);
$roleCodes = array_column($userRoles, 'code');
$isAdmin = in_array('ADMIN', $roleCodes);
$isManager = in_array('MANAGER', $roleCodes);

// Get the record
$zohoId = null;
$filename = '';
$clientId = null;

switch ($type) {
    case 'invoice':
        $record = dbFetchOne("SELECT zoho_invoice_id, zoho_invoice_number, client_id FROM invoices WHERE id = ?", [$id]);
        if ($record) {
            $zohoId = $record['zoho_invoice_id'];
            $filename = 'Invoice_' . ($record['zoho_invoice_number'] ?: $id) . '.pdf';
            $clientId = $record['client_id'];
        }
        break;
        
    case 'estimate':
        $record = dbFetchOne("SELECT zoho_estimate_id, zoho_estimate_number, client_id FROM quotations WHERE id = ?", [$id]);
        if ($record) {
            $zohoId = $record['zoho_estimate_id'];
            $filename = 'Estimate_' . ($record['zoho_estimate_number'] ?: $id) . '.pdf';
            $clientId = $record['client_id'];
        }
        break;
        
    case 'payment':
        $record = dbFetchOne("SELECT zoho_payment_id, zoho_payment_number, client_id FROM payments WHERE id = ?", [$id]);
        if ($record) {
            $zohoId = $record['zoho_payment_id'];
            $filename = 'Payment_' . ($record['zoho_payment_number'] ?: $id) . '.pdf';
            $clientId = $record['client_id'];
        }
        break;
}

if (!$zohoId) {
    http_response_code(404);
    die('Document not found or not synced with Zoho');
}

// Access control - verify user can access this client's documents
if ($clientId && !$isAdmin && !$isManager) {
    // Check if user is assigned to this client
    $hasAccess = false;
    
    $clientTeam = dbFetchOne("
        SELECT id FROM client_team 
        WHERE client_id = ? 
        AND (executor_1_id = ? OR executor_2_id = ? OR reviewer_id = ? OR manager_id = ?)
    ", [$clientId, $userId, $userId, $userId, $userId]);
    
    if ($clientTeam) {
        $hasAccess = true;
    }
    
    if (!$hasAccess) {
        http_response_code(403);
        die('You do not have access to this document');
    }
}

// Check Zoho connection
$zoho = new ZohoBooks();
if (!$zoho->isConnected()) {
    http_response_code(503);
    die('Billing system temporarily unavailable. Please check Zoho integration settings.');
}

// Fetch PDF from Zoho
$pdfData = null;
switch ($type) {
    case 'invoice':
        $pdfData = $zoho->getInvoicePdf($zohoId);
        break;
    case 'estimate':
        $pdfData = $zoho->getEstimatePdf($zohoId);
        break;
    case 'payment':
        $pdfData = $zoho->getPaymentPdf($zohoId);
        break;
}

if (!$pdfData) {
    $error = $zoho->getLastError();
    http_response_code(500);
    die('Failed to fetch document from Zoho' . ($error ? ': ' . htmlspecialchars($error) : ''));
}

// Serve the PDF
header('Content-Type: application/pdf');
header('Content-Length: ' . strlen($pdfData));

if ($action === 'download') {
    header('Content-Disposition: attachment; filename="' . $filename . '"');
} else {
    header('Content-Disposition: inline; filename="' . $filename . '"');
}

// Prevent caching
header('Cache-Control: private, no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

echo $pdfData;
exit;
