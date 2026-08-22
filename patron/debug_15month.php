<?php
/**
 * Debug script - check 15-month rule for a specific client
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if (!isAdmin()) {
    die('Admin only');
}

$cutoffDate = date('Y-m-d', strtotime('-15 months'));

echo "<h2>15-Month Rule Debug</h2>";
echo "<p>Cutoff Date: <strong>$cutoffDate</strong></p>";

// Find ABHIJOY HALDA
$client = dbFetchOne("SELECT * FROM clients WHERE name LIKE '%ABHIJOY%' OR name LIKE '%HALDA%' LIMIT 1");

if (!$client) {
    die("Client not found!");
}

echo "<h3>Client: {$client['name']}</h3>";
echo "<p>ID: {$client['id']} | Status: <strong>{$client['status']}</strong></p>";

$clientId = $client['id'];

// Check invoices
echo "<h3>Invoices (last 15 months from $cutoffDate):</h3>";
$invoices = dbFetchAll("
    SELECT id, zoho_invoice_number, invoice_date, status, total 
    FROM invoices 
    WHERE client_id = ? AND invoice_date >= ?
    ORDER BY invoice_date DESC
", [$clientId, $cutoffDate]);
echo "<pre>" . ($invoices ? print_r($invoices, true) : 'NONE') . "</pre>";

// Check ALL invoices
echo "<h3>ALL Invoices (any date):</h3>";
$allInvoices = dbFetchAll("
    SELECT id, zoho_invoice_number, invoice_date, status, total 
    FROM invoices 
    WHERE client_id = ?
    ORDER BY invoice_date DESC
    LIMIT 5
", [$clientId]);
echo "<pre>" . ($allInvoices ? print_r($allInvoices, true) : 'NONE') . "</pre>";

// Check quotations
echo "<h3>Quotations (last 15 months):</h3>";
$quotations = dbFetchAll("
    SELECT id, zoho_estimate_number, estimate_date, status, total 
    FROM quotations 
    WHERE client_id = ? AND estimate_date >= ?
    ORDER BY estimate_date DESC
", [$clientId, $cutoffDate]);
echo "<pre>" . ($quotations ? print_r($quotations, true) : 'NONE') . "</pre>";

// Check payments
echo "<h3>Payments (last 15 months):</h3>";
$payments = dbFetchAll("
    SELECT id, zoho_payment_number, payment_date, amount 
    FROM payments 
    WHERE client_id = ? AND payment_date >= ?
    ORDER BY payment_date DESC
", [$clientId, $cutoffDate]);
echo "<pre>" . ($payments ? print_r($payments, true) : 'NONE') . "</pre>";

// Conclusion
$hasActivity = !empty($invoices) || !empty($quotations) || !empty($payments);
echo "<h3>Result: " . ($hasActivity ? "<span style='color:green'>HAS ACTIVITY - Should be ACTIVE</span>" : "<span style='color:red'>NO ACTIVITY - Should be INACTIVE</span>") . "</h3>";

// Count all that should be inactive
echo "<hr><h3>All Active Clients That Should Be INACTIVE:</h3>";

$shouldBeInactive = dbFetchAll("
    SELECT c.id, c.name, c.status
    FROM clients c
    WHERE c.deleted_at IS NULL
    AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
    AND NOT EXISTS (
        SELECT 1 FROM invoices i 
        WHERE i.client_id = c.id 
        AND i.invoice_date >= ?
        AND (i.status IS NULL OR LOWER(i.status) != 'void')
    )
    AND NOT EXISTS (
        SELECT 1 FROM quotations q 
        WHERE q.client_id = c.id 
        AND q.estimate_date >= ?
    )
    AND NOT EXISTS (
        SELECT 1 FROM payments p 
        WHERE p.client_id = c.id 
        AND p.payment_date >= ?
    )
    ORDER BY c.name
", [$cutoffDate, $cutoffDate, $cutoffDate]);

echo "<p><strong>" . count($shouldBeInactive) . "</strong> clients should be marked INACTIVE</p>";

if (isset($_POST['fix'])) {
    $updated = dbExecute("
        UPDATE clients c
        SET c.status = 'INACTIVE', c.updated_at = NOW()
        WHERE c.deleted_at IS NULL
        AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
        AND NOT EXISTS (
            SELECT 1 FROM invoices i 
            WHERE i.client_id = c.id 
            AND i.invoice_date >= ?
            AND (i.status IS NULL OR LOWER(i.status) != 'void')
        )
        AND NOT EXISTS (
            SELECT 1 FROM quotations q 
            WHERE q.client_id = c.id 
            AND q.estimate_date >= ?
        )
        AND NOT EXISTS (
            SELECT 1 FROM payments p 
            WHERE p.client_id = c.id 
            AND p.payment_date >= ?
        )
    ", [$cutoffDate, $cutoffDate, $cutoffDate]);
    echo "<p style='color:green; font-size:20px;'>✓ FIXED! Refresh to verify.</p>";
}

echo "<form method='POST'><button type='submit' name='fix' value='1' style='padding:15px 30px; background:#dc2626; color:white; border:none; cursor:pointer; font-size:16px;'>Mark All " . count($shouldBeInactive) . " Clients as INACTIVE</button></form>";

echo "<h4>List:</h4><ul>";
foreach (array_slice($shouldBeInactive, 0, 30) as $c) {
    echo "<li>{$c['name']} (ID: {$c['id']})</li>";
}
if (count($shouldBeInactive) > 30) echo "<li>...and " . (count($shouldBeInactive) - 30) . " more</li>";
echo "</ul>";
?>
