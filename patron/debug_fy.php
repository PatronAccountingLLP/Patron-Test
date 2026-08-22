<?php
/**
 * Debug: Why ABHIJOY HALDAR billing tab not showing data
 */
require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/invoice_helpers.php';
startSession();
requireLogin();

if (!isAdmin()) die('Admin only');

$clientId = 1631; // ABHIJOY HALDAR

echo "<h2>Debug: ABHIJOY HALDAR Billing Tab</h2>";

// Check current FY function
$currentFY = getCurrentFY();
echo "<p><strong>Current FY (from function):</strong> $currentFY</p>";

// Check what FYs exist for this client
$fyRows = dbFetchAll("
    SELECT DISTINCT YEAR(invoice_date) as year, MONTH(invoice_date) as month, invoice_date
    FROM invoices 
    WHERE client_id = ? AND invoice_date IS NOT NULL AND (status IS NULL OR LOWER(status) != 'void')
    ORDER BY invoice_date DESC
", [$clientId]) ?: [];

echo "<h3>Invoice dates for this client:</h3>";
echo "<pre>" . print_r($fyRows, true) . "</pre>";

// Build FY list the same way as client_billing_tab.php
$clientFYs = [];
foreach ($fyRows as $row) {
    $dateStr = $row['year'] . '-' . str_pad($row['month'], 2, '0', STR_PAD_LEFT) . '-01';
    $fy = getFinancialYear($dateStr);
    echo "<p>Date: {$row['invoice_date']} → getFinancialYear('$dateStr') = <strong>$fy</strong></p>";
    if ($fy && !in_array($fy, $clientFYs)) {
        $clientFYs[] = $fy;
    }
}

echo "<h3>Client FYs list:</h3>";
echo "<pre>" . print_r($clientFYs, true) . "</pre>";

// Check FY date range
if (!empty($clientFYs)) {
    $testFY = $clientFYs[0];
    $fyRange = getFYDateRange($testFY);
    echo "<h3>FY Range for '$testFY':</h3>";
    echo "<pre>" . print_r($fyRange, true) . "</pre>";
    
    // Check if invoice falls within range
    $invoices = dbFetchAll("
        SELECT id, zoho_invoice_number, invoice_date, status, total
        FROM invoices 
        WHERE client_id = ? 
        AND invoice_date >= ? AND invoice_date <= ?
        AND (status IS NULL OR LOWER(status) != 'void')
        ORDER BY invoice_date DESC
    ", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];
    
    echo "<h3>Invoices in FY $testFY ({$fyRange['start']} to {$fyRange['end']}):</h3>";
    echo "<pre>" . print_r($invoices, true) . "</pre>";
}

// Also check the query I added
echo "<h3>Testing my new FY detection query:</h3>";
$fyWithData = dbFetchOne("
    SELECT 
        MAX(invoice_date) as max_date,
        MONTH(MAX(invoice_date)) as max_month,
        YEAR(MAX(invoice_date)) as max_year,
        CASE 
            WHEN MONTH(MAX(invoice_date)) >= 4 THEN CONCAT(YEAR(MAX(invoice_date)), '-', YEAR(MAX(invoice_date)) + 1)
            ELSE CONCAT(YEAR(MAX(invoice_date)) - 1, '-', YEAR(MAX(invoice_date)))
        END as fy
    FROM invoices 
    WHERE client_id = ? AND invoice_date IS NOT NULL AND (status IS NULL OR LOWER(status) != 'void')
", [$clientId]);
echo "<pre>" . print_r($fyWithData, true) . "</pre>";

// Check what format FY should be
echo "<h3>FY Format Check:</h3>";
echo "<p>My query returns: <strong>" . ($fyWithData['fy'] ?? 'NULL') . "</strong></p>";
echo "<p>Current FY format: <strong>$currentFY</strong></p>";
echo "<p>clientFYs[0] format: <strong>" . ($clientFYs[0] ?? 'NULL') . "</strong></p>";

// Check if formats match
if (!empty($clientFYs) && !empty($fyWithData['fy'])) {
    if (in_array($fyWithData['fy'], $clientFYs)) {
        echo "<p style='color:green'>✓ My FY matches clientFYs format</p>";
    } else {
        echo "<p style='color:red'>✗ FORMAT MISMATCH! My FY '{$fyWithData['fy']}' not in clientFYs</p>";
    }
}
?>
