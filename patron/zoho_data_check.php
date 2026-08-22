<?php
/**
 * Zoho Data Check - Debug what was synced
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

echo "<h2>Zoho Data Check</h2>";
echo "<pre>";

// Check invoices
echo "=== INVOICES ===\n";
$invoices = dbFetchAll("SELECT COUNT(*) as count FROM invoices");
echo "Total invoices: " . ($invoices[0]['count'] ?? 0) . "\n";

$recentInvoices = dbFetchAll("SELECT id, zoho_invoice_id, zoho_invoice_number, client_id, zoho_customer_id, zoho_customer_name, total, status FROM invoices ORDER BY id DESC LIMIT 10");
echo "\nRecent 10 invoices:\n";
foreach ($recentInvoices as $inv) {
    echo "ID: {$inv['id']} | Zoho#: {$inv['zoho_invoice_number']} | Client_ID: {$inv['client_id']} | Zoho_Customer: {$inv['zoho_customer_name']} | Total: {$inv['total']} | Status: {$inv['status']}\n";
}

// Check estimates/quotations
echo "\n=== QUOTATIONS ===\n";
$quotations = dbFetchAll("SELECT COUNT(*) as count FROM quotations");
echo "Total quotations: " . ($quotations[0]['count'] ?? 0) . "\n";

$recentQuotations = dbFetchAll("SELECT id, zoho_estimate_id, zoho_estimate_number, client_id, zoho_customer_name, total, status FROM quotations ORDER BY id DESC LIMIT 10");
echo "\nRecent 10 quotations:\n";
foreach ($recentQuotations as $q) {
    echo "ID: {$q['id']} | Zoho#: {$q['zoho_estimate_number']} | Client_ID: {$q['client_id']} | Customer: {$q['zoho_customer_name']} | Total: {$q['total']} | Status: {$q['status']}\n";
}

// Check payments
echo "\n=== PAYMENTS ===\n";
$payments = dbFetchAll("SELECT COUNT(*) as count FROM payments");
echo "Total payments: " . ($payments[0]['count'] ?? 0) . "\n";

$recentPayments = dbFetchAll("SELECT id, zoho_payment_id, zoho_payment_number, client_id, zoho_customer_name, amount, payment_date FROM payments ORDER BY id DESC LIMIT 10");
echo "\nRecent 10 payments:\n";
foreach ($recentPayments as $p) {
    echo "ID: {$p['id']} | Zoho#: {$p['zoho_payment_number']} | Client_ID: {$p['client_id']} | Customer: {$p['zoho_customer_name']} | Amount: {$p['amount']} | Date: {$p['payment_date']}\n";
}

// Check clients with zoho_contact_id
echo "\n=== CLIENTS WITH ZOHO LINK ===\n";
$linkedClients = dbFetchAll("SELECT COUNT(*) as count FROM clients WHERE zoho_contact_id IS NOT NULL");
echo "Clients with Zoho link: " . ($linkedClients[0]['count'] ?? 0) . "\n";

$clients = dbFetchAll("SELECT id, name, zoho_contact_id FROM clients WHERE zoho_contact_id IS NOT NULL ORDER BY id DESC LIMIT 10");
echo "\nRecent 10 linked clients:\n";
foreach ($clients as $c) {
    echo "ID: {$c['id']} | Name: {$c['name']} | Zoho_ID: {$c['zoho_contact_id']}\n";
}

// Check client-invoice matching
echo "\n=== INVOICE-CLIENT MATCHING ===\n";
$unmatchedInvoices = dbFetchAll("SELECT COUNT(*) as count FROM invoices WHERE client_id IS NULL OR client_id = 0");
echo "Invoices without client_id: " . ($unmatchedInvoices[0]['count'] ?? 0) . "\n";

$matchedInvoices = dbFetchAll("SELECT COUNT(*) as count FROM invoices WHERE client_id IS NOT NULL AND client_id > 0");
echo "Invoices with client_id: " . ($matchedInvoices[0]['count'] ?? 0) . "\n";

// Check sync log
echo "\n=== SYNC LOG ===\n";
$syncLogs = dbFetchAll("SELECT * FROM zoho_sync_log ORDER BY id DESC LIMIT 5");
foreach ($syncLogs as $log) {
    echo "ID: {$log['id']} | Type: {$log['sync_type']} | Records: {$log['records_synced']} | Status: {$log['status']} | Time: {$log['synced_at']}\n";
    if ($log['error_message']) {
        echo "  Error: {$log['error_message']}\n";
    }
}

echo "\n</pre>";
echo "<p><a href='zoho_settings.php'>Back to Zoho Settings</a> | <a href='zoho_sync.php'>Go to Sync</a> | <a href='billing.php'>Go to Billing</a></p>";
?>
