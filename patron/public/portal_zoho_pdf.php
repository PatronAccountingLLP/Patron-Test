<?php
/**
 * PATRON - Portal Zoho PDF Handler
 * Token-based PDF access for client portal (no login required)
 * 
 * Usage:
 *   portal_zoho_pdf.php?token=xxx&type=invoice&id=123&action=view
 *   portal_zoho_pdf.php?token=xxx&type=invoice&id=123&action=download
 */

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/zoho_api.php';

$token = sanitize($_GET['token'] ?? '');
$type = sanitize($_GET['type'] ?? '');
$id = (int)($_GET['id'] ?? 0);
$action = sanitize($_GET['action'] ?? 'view'); // view or download

// Validate inputs
if (!$token || !$id || !in_array($type, ['invoice', 'estimate', 'payment'])) {
    http_response_code(400);
    die('Invalid request');
}

// Verify token and get client
$client = dbFetchOne("SELECT id, name FROM clients WHERE portal_token = ? AND deleted_at IS NULL", [$token]);

if (!$client) {
    // Also check if token is a service request form token
    $request = dbFetchOne("SELECT client_id FROM service_requests WHERE form_token = ? AND deleted_at IS NULL", [$token]);
    if ($request) {
        $client = dbFetchOne("SELECT id, name FROM clients WHERE id = ? AND deleted_at IS NULL", [$request['client_id']]);
    }
}

if (!$client) {
    http_response_code(403);
    die('Invalid or expired token');
}

$clientId = $client['id'];

// Get the record and verify it belongs to this client
$zohoId = null;
$filename = '';

switch ($type) {
    case 'invoice':
        $record = dbFetchOne("SELECT zoho_invoice_id, zoho_invoice_number FROM invoices WHERE id = ? AND client_id = ?", [$id, $clientId]);
        if ($record) {
            $zohoId = $record['zoho_invoice_id'];
            $filename = 'Invoice_' . ($record['zoho_invoice_number'] ?: $id) . '.pdf';
        }
        break;
        
    case 'estimate':
        $record = dbFetchOne("SELECT zoho_estimate_id, zoho_estimate_number FROM quotations WHERE id = ? AND client_id = ?", [$id, $clientId]);
        if ($record) {
            $zohoId = $record['zoho_estimate_id'];
            $filename = 'Estimate_' . ($record['zoho_estimate_number'] ?: $id) . '.pdf';
        }
        break;
        
    case 'payment':
        $record = dbFetchOne("SELECT zoho_payment_id, zoho_payment_number FROM payments WHERE id = ? AND client_id = ?", [$id, $clientId]);
        if ($record) {
            $zohoId = $record['zoho_payment_id'];
            $filename = 'Payment_' . ($record['zoho_payment_number'] ?: $id) . '.pdf';
        }
        break;
}

if (!$zohoId) {
    http_response_code(404);
    die('Document not found or not synced with Zoho');
}

// Check Zoho connection
$zoho = new ZohoBooks();
if (!$zoho->isConnected()) {
    http_response_code(503);
    die('Billing system temporarily unavailable');
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
    http_response_code(500);
    die('Failed to fetch document');
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
