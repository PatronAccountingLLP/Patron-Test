<?php
/**
 * Debug: Check invoice/payment linkage for a client
 */
require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if (!isAdmin()) die('Admin only');

echo "<h2>Invoice/Payment Linkage Debug</h2>";

// Find ABHIJOY HALDAR
$client = dbFetchOne("SELECT id, name, zoho_contact_id FROM clients WHERE name LIKE '%ABHIJOY%' LIMIT 1");

if (!$client) {
    die("Client not found");
}

echo "<h3>Client: {$client['name']}</h3>";
echo "<p>Client ID: <strong>{$client['id']}</strong></p>";
echo "<p>Zoho Contact ID: <strong>{$client['zoho_contact_id']}</strong></p>";

$clientId = $client['id'];
$zohoContactId = $client['zoho_contact_id'];

// Check invoices by client_id
echo "<hr><h3>Invoices by client_id = {$clientId}:</h3>";
$invoicesByClientId = dbFetchAll("SELECT id, zoho_invoice_id, zoho_invoice_number, invoice_date, status, total, client_id, zoho_customer_id FROM invoices WHERE client_id = ? ORDER BY invoice_date DESC LIMIT 10", [$clientId]);
echo "<pre>" . ($invoicesByClientId ? print_r($invoicesByClientId, true) : 'NONE') . "</pre>";

// Check invoices by zoho_customer_id
echo "<h3>Invoices by zoho_customer_id = {$zohoContactId}:</h3>";
$invoicesByZohoId = dbFetchAll("SELECT id, zoho_invoice_id, zoho_invoice_number, invoice_date, status, total, client_id, zoho_customer_id FROM invoices WHERE zoho_customer_id = ? ORDER BY invoice_date DESC LIMIT 10", [$zohoContactId]);
echo "<pre>" . ($invoicesByZohoId ? print_r($invoicesByZohoId, true) : 'NONE') . "</pre>";

// Check payments by client_id
echo "<hr><h3>Payments by client_id = {$clientId}:</h3>";
$paymentsByClientId = dbFetchAll("SELECT id, zoho_payment_id, zoho_payment_number, payment_date, amount, client_id, zoho_customer_id FROM payments WHERE client_id = ? ORDER BY payment_date DESC LIMIT 10", [$clientId]);
echo "<pre>" . ($paymentsByClientId ? print_r($paymentsByClientId, true) : 'NONE') . "</pre>";

// Check payments by zoho_customer_id
echo "<h3>Payments by zoho_customer_id = {$zohoContactId}:</h3>";
$paymentsByZohoId = dbFetchAll("SELECT id, zoho_payment_id, zoho_payment_number, payment_date, amount, client_id, zoho_customer_id FROM payments WHERE zoho_customer_id = ? ORDER BY payment_date DESC LIMIT 10", [$zohoContactId]);
echo "<pre>" . ($paymentsByZohoId ? print_r($paymentsByZohoId, true) : 'NONE') . "</pre>";

// Check quotations/estimates
echo "<hr><h3>Estimates by client_id = {$clientId}:</h3>";
$estimatesByClientId = dbFetchAll("SELECT id, zoho_estimate_id, zoho_estimate_number, estimate_date, status, total, client_id, zoho_customer_id FROM quotations WHERE client_id = ? ORDER BY estimate_date DESC LIMIT 10", [$clientId]);
echo "<pre>" . ($estimatesByClientId ? print_r($estimatesByClientId, true) : 'NONE') . "</pre>";

echo "<h3>Estimates by zoho_customer_id = {$zohoContactId}:</h3>";
$estimatesByZohoId = dbFetchAll("SELECT id, zoho_estimate_id, zoho_estimate_number, estimate_date, status, total, client_id, zoho_customer_id FROM quotations WHERE zoho_customer_id = ? ORDER BY estimate_date DESC LIMIT 10", [$zohoContactId]);
echo "<pre>" . ($estimatesByZohoId ? print_r($estimatesByZohoId, true) : 'NONE') . "</pre>";

// Summary
echo "<hr><h2>DIAGNOSIS:</h2>";

$hasInvoicesByClientId = !empty($invoicesByClientId);
$hasInvoicesByZohoId = !empty($invoicesByZohoId);
$hasPaymentsByClientId = !empty($paymentsByClientId);
$hasPaymentsByZohoId = !empty($paymentsByZohoId);

if (!$hasInvoicesByClientId && $hasInvoicesByZohoId) {
    echo "<p style='color:red; font-size:18px;'><strong>PROBLEM:</strong> Invoices exist by zoho_customer_id but client_id is NOT linked!</p>";
    echo "<p>Fix: Update invoices to set client_id where zoho_customer_id matches.</p>";
    
    // Count how many need fixing
    $countToFix = dbFetchOne("SELECT COUNT(*) as cnt FROM invoices WHERE zoho_customer_id = ? AND (client_id IS NULL OR client_id = 0)", [$zohoContactId]);
    echo "<p>Invoices to fix: <strong>{$countToFix['cnt']}</strong></p>";
}

if (!$hasPaymentsByClientId && $hasPaymentsByZohoId) {
    echo "<p style='color:red; font-size:18px;'><strong>PROBLEM:</strong> Payments exist by zoho_customer_id but client_id is NOT linked!</p>";
    
    $countToFix = dbFetchOne("SELECT COUNT(*) as cnt FROM payments WHERE zoho_customer_id = ? AND (client_id IS NULL OR client_id = 0)", [$zohoContactId]);
    echo "<p>Payments to fix: <strong>{$countToFix['cnt']}</strong></p>";
}

// FIX BUTTON
if (isset($_POST['fix_linkage'])) {
    // Fix invoices
    $fixedInvoices = dbExecute("
        UPDATE invoices i
        JOIN clients c ON i.zoho_customer_id = c.zoho_contact_id
        SET i.client_id = c.id
        WHERE i.client_id IS NULL OR i.client_id = 0
    ");
    
    // Fix payments
    $fixedPayments = dbExecute("
        UPDATE payments p
        JOIN clients c ON p.zoho_customer_id = c.zoho_contact_id
        SET p.client_id = c.id
        WHERE p.client_id IS NULL OR p.client_id = 0
    ");
    
    // Fix quotations
    $fixedQuotations = dbExecute("
        UPDATE quotations q
        JOIN clients c ON q.zoho_customer_id = c.zoho_contact_id
        SET q.client_id = c.id
        WHERE q.client_id IS NULL OR q.client_id = 0
    ");
    
    echo "<p style='color:green; font-size:20px;'>✓ FIXED! Refresh to verify.</p>";
}

echo "<hr><form method='POST'>";
echo "<button type='submit' name='fix_linkage' value='1' style='padding:15px 30px; background:#dc2626; color:white; border:none; cursor:pointer; font-size:16px;'>Fix ALL Client Linkages (Invoices, Payments, Estimates)</button>";
echo "</form>";

// Show global stats
echo "<hr><h3>Global Linkage Stats:</h3>";
$globalStats = dbFetchOne("
    SELECT 
        (SELECT COUNT(*) FROM invoices WHERE client_id IS NULL OR client_id = 0) as unlinked_invoices,
        (SELECT COUNT(*) FROM payments WHERE client_id IS NULL OR client_id = 0) as unlinked_payments,
        (SELECT COUNT(*) FROM quotations WHERE client_id IS NULL OR client_id = 0) as unlinked_quotations
");
echo "<ul>";
echo "<li>Unlinked Invoices: <strong>{$globalStats['unlinked_invoices']}</strong></li>";
echo "<li>Unlinked Payments: <strong>{$globalStats['unlinked_payments']}</strong></li>";
echo "<li>Unlinked Quotations: <strong>{$globalStats['unlinked_quotations']}</strong></li>";
echo "</ul>";
?>
