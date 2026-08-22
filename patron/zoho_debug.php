<?php
/**
 * PATRON - Zoho API Debug Test
 * Comprehensive diagnostic tool for Zoho integration
 * 
 * LOCATION: /patron/zoho_debug.php
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

$pageTitle = 'Zoho Debug';
require_once 'includes/header.php';

$zoho = new ZohoBooks();
?>

<div class="mb-6">
    <h1 class="text-2xl font-bold"><i class="fas fa-bug text-red-600 mr-2"></i>Zoho API Debug</h1>
    <p class="text-gray-500 text-sm">Diagnostic tool to troubleshoot Zoho integration issues</p>
</div>

<div class="card">
    <div class="p-4 border-b bg-gray-50">
        <h3 class="font-semibold">Diagnostic Results</h3>
    </div>
    <div class="p-4">
        <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-xs font-mono whitespace-pre-wrap"><?php

// Step 1: Check database settings
echo "=== STEP 1: DATABASE SETTINGS ===\n";
try {
    $settings = dbFetchAll("SELECT setting_key, setting_value FROM zoho_settings");
    $config = [];
    foreach ($settings as $s) {
        $config[$s['setting_key']] = $s['setting_value'];
    }
    
    echo "✓ Database connection OK\n";
    echo "  Settings found: " . count($settings) . "\n\n";
    
    // Display settings (masked)
    echo "Client ID: " . (empty($config['client_id']) ? '❌ NOT SET' : substr($config['client_id'], 0, 15) . '...') . "\n";
    echo "Client Secret: " . (empty($config['client_secret']) ? '❌ NOT SET' : '✓ SET (' . strlen($config['client_secret']) . ' chars)') . "\n";
    echo "Organization ID: " . ($config['organization_id'] ?? '❌ NOT SET') . "\n";
    echo "Datacenter: " . ($config['datacenter'] ?? 'in (default)') . "\n";
    echo "Redirect URI: " . ($config['redirect_uri'] ?? '❌ NOT SET') . "\n";
    echo "Is Connected: " . (($config['is_connected'] ?? '0') === '1' ? '✓ YES' : '❌ NO') . "\n";
    echo "Access Token: " . (empty($config['access_token']) ? '❌ EMPTY' : '✓ SET (' . strlen($config['access_token']) . ' chars)') . "\n";
    echo "Refresh Token: " . (empty($config['refresh_token']) ? '❌ EMPTY' : '✓ SET') . "\n";
    
    if (!empty($config['token_expires_at'])) {
        $expiry = strtotime($config['token_expires_at']);
        $now = time();
        if ($expiry < $now) {
            echo "Token Expires: ❌ EXPIRED (" . $config['token_expires_at'] . ")\n";
        } else {
            $remaining = round(($expiry - $now) / 60);
            echo "Token Expires: " . $config['token_expires_at'] . " ($remaining min remaining)\n";
        }
    }
    
    echo "Auto-Sync: " . (($config['auto_sync_enabled'] ?? '1') === '1' ? '✓ Enabled' : '❌ Disabled') . "\n";
    
} catch (Exception $e) {
    echo "❌ Database Error: " . $e->getMessage() . "\n";
}

// Step 2: Check ZohoBooks class
echo "\n=== STEP 2: ZOHOBOOKS CLASS ===\n";
echo "Is Configured: " . ($zoho->isConfigured() ? '✓ YES' : '❌ NO') . "\n";
echo "Is Connected: " . ($zoho->isConnected() ? '✓ YES' : '❌ NO') . "\n";

if (!$zoho->isConfigured()) {
    echo "\n❌ ISSUE: Missing required configuration.\n";
    echo "  Please ensure client_id, client_secret, and organization_id are set.\n";
}

if (!$zoho->isConnected()) {
    echo "\n⚠ WARNING: Not connected to Zoho.\n";
    echo "  Please go to Settings and click 'Connect to Zoho'.\n";
}

// Step 3: Test API if connected
if ($zoho->isConnected()) {
    echo "\n=== STEP 3: API CONNECTION TEST ===\n";
    
    // Test organization endpoint
    echo "Testing /organizations endpoint... ";
    $orgResponse = $zoho->getOrganization();
    
    if ($orgResponse && isset($orgResponse['organizations'])) {
        echo "✓ SUCCESS\n";
        echo "\nYour Organizations:\n";
        foreach ($orgResponse['organizations'] as $org) {
            $isCurrent = ($org['organization_id'] == ($config['organization_id'] ?? ''));
            $marker = $isCurrent ? '→' : ' ';
            echo "$marker ID: {$org['organization_id']}\n";
            echo "   Name: {$org['name']}\n";
            echo "   Default: " . ($org['is_default_org'] ? 'Yes' : 'No') . "\n";
            echo "   Active: " . ($org['is_org_active'] ? 'Yes' : 'No') . "\n\n";
        }
        
        // Check if configured org exists
        $foundOrg = false;
        foreach ($orgResponse['organizations'] as $org) {
            if ($org['organization_id'] == ($config['organization_id'] ?? '')) {
                $foundOrg = true;
            }
        }
        if (!$foundOrg) {
            echo "❌ WARNING: Configured Organization ID NOT FOUND in your Zoho account!\n";
            echo "  You may need to update the organization_id in settings.\n";
        } else {
            echo "✓ Organization ID verified\n";
        }
    } else {
        echo "❌ FAILED\n";
        echo "  Error: " . ($zoho->getLastError() ?? 'Unknown error') . "\n";
    }
    
    // Test contacts endpoint
    echo "\nTesting /contacts endpoint... ";
    $contactsResponse = $zoho->getContacts(1);
    
    if ($contactsResponse && isset($contactsResponse['contacts'])) {
        $count = count($contactsResponse['contacts']);
        $total = $contactsResponse['page_context']['total'] ?? $count;
        echo "✓ SUCCESS\n";
        echo "  Contacts retrieved: $count (Total: $total)\n";
    } else {
        echo "❌ FAILED\n";
        echo "  Error: " . ($zoho->getLastError() ?? 'Unknown error') . "\n";
    }
    
    // Test invoices endpoint
    echo "\nTesting /invoices endpoint... ";
    $invoicesResponse = $zoho->getInvoices(1);
    
    if ($invoicesResponse && isset($invoicesResponse['invoices'])) {
        $count = count($invoicesResponse['invoices']);
        $total = $invoicesResponse['page_context']['total'] ?? $count;
        echo "✓ SUCCESS\n";
        echo "  Invoices retrieved: $count (Total: $total)\n";
    } else {
        echo "❌ FAILED\n";
        echo "  Error: " . ($zoho->getLastError() ?? 'Unknown error') . "\n";
    }
    
    // Test estimates endpoint
    echo "\nTesting /estimates endpoint... ";
    $estimatesResponse = $zoho->getEstimates(1);
    
    if ($estimatesResponse && isset($estimatesResponse['estimates'])) {
        $count = count($estimatesResponse['estimates']);
        $total = $estimatesResponse['page_context']['total'] ?? $count;
        echo "✓ SUCCESS\n";
        echo "  Estimates retrieved: $count (Total: $total)\n";
    } else {
        echo "❌ FAILED\n";
        echo "  Error: " . ($zoho->getLastError() ?? 'Unknown error') . "\n";
    }
    
    // Test payments endpoint
    echo "\nTesting /customerpayments endpoint... ";
    $paymentsResponse = $zoho->getPayments(1);
    
    if ($paymentsResponse && isset($paymentsResponse['customerpayments'])) {
        $count = count($paymentsResponse['customerpayments']);
        $total = $paymentsResponse['page_context']['total'] ?? $count;
        echo "✓ SUCCESS\n";
        echo "  Payments retrieved: $count (Total: $total)\n";
    } else {
        echo "❌ FAILED\n";
        echo "  Error: " . ($zoho->getLastError() ?? 'Unknown error') . "\n";
    }
}

// Step 4: Check sync tables
echo "\n=== STEP 4: DATABASE TABLES ===\n";

$tables = [
    'zoho_settings' => 'Zoho Settings',
    'zoho_sync_log' => 'Sync Log',
    'clients' => 'Clients',
    'invoices' => 'Invoices',
    'quotations' => 'Quotations',
    'payments' => 'Payments',
    'invoice_items' => 'Invoice Items'
];

foreach ($tables as $table => $name) {
    try {
        $count = dbFetchOne("SELECT COUNT(*) as cnt FROM $table")['cnt'] ?? 0;
        echo "✓ $name ($table): $count records\n";
    } catch (Exception $e) {
        echo "❌ $name ($table): TABLE MISSING OR ERROR\n";
    }
}

// Step 5: Check sync log
echo "\n=== STEP 5: RECENT SYNC ACTIVITY ===\n";
try {
    $logs = dbFetchAll("SELECT * FROM zoho_sync_log ORDER BY started_at DESC LIMIT 5");
    if (empty($logs)) {
        echo "No sync activity yet.\n";
    } else {
        foreach ($logs as $log) {
            $status = $log['status'];
            $icon = $status === 'SUCCESS' ? '✓' : ($status === 'FAILED' ? '❌' : '⚠');
            echo "$icon {$log['sync_type']} - {$log['status']} - {$log['triggered_by']} - {$log['started_at']}\n";
            if ($log['error_message']) {
                echo "  Error: {$log['error_message']}\n";
            }
        }
    }
} catch (Exception $e) {
    echo "Error checking sync log: " . $e->getMessage() . "\n";
}

// Step 6: Check linked records
echo "\n=== STEP 6: ZOHO-LINKED RECORDS ===\n";
try {
    $linkedClients = dbFetchOne("SELECT COUNT(*) as cnt FROM clients WHERE zoho_contact_id IS NOT NULL")['cnt'] ?? 0;
    $totalClients = dbFetchOne("SELECT COUNT(*) as cnt FROM clients WHERE deleted_at IS NULL")['cnt'] ?? 0;
    echo "Clients with Zoho link: $linkedClients / $totalClients\n";
    
    $linkedInvoices = dbFetchOne("SELECT COUNT(*) as cnt FROM invoices WHERE zoho_invoice_id IS NOT NULL")['cnt'] ?? 0;
    $totalInvoices = dbFetchOne("SELECT COUNT(*) as cnt FROM invoices")['cnt'] ?? 0;
    echo "Invoices with Zoho link: $linkedInvoices / $totalInvoices\n";
    
    $linkedQuotations = dbFetchOne("SELECT COUNT(*) as cnt FROM quotations WHERE zoho_estimate_id IS NOT NULL")['cnt'] ?? 0;
    $totalQuotations = dbFetchOne("SELECT COUNT(*) as cnt FROM quotations")['cnt'] ?? 0;
    echo "Quotations with Zoho link: $linkedQuotations / $totalQuotations\n";
    
    $linkedPayments = dbFetchOne("SELECT COUNT(*) as cnt FROM payments WHERE zoho_payment_id IS NOT NULL")['cnt'] ?? 0;
    $totalPayments = dbFetchOne("SELECT COUNT(*) as cnt FROM payments")['cnt'] ?? 0;
    echo "Payments with Zoho link: $linkedPayments / $totalPayments\n";
} catch (Exception $e) {
    echo "Error checking linked records: " . $e->getMessage() . "\n";
}

// Step 7: PHP Info
echo "\n=== STEP 7: ENVIRONMENT ===\n";
echo "PHP Version: " . phpversion() . "\n";
echo "cURL Enabled: " . (function_exists('curl_init') ? '✓ YES' : '❌ NO') . "\n";
echo "JSON Enabled: " . (function_exists('json_decode') ? '✓ YES' : '❌ NO') . "\n";
echo "Server Time: " . date('Y-m-d H:i:s') . " (" . date_default_timezone_get() . ")\n";

echo "\n=== DEBUG COMPLETE ===\n";
?></pre>
    </div>
</div>

<div class="mt-4 flex gap-3">
    <a href="zoho_settings.php" class="btn btn-secondary"><i class="fas fa-cog mr-2"></i>Settings</a>
    <a href="zoho_sync.php" class="btn btn-primary"><i class="fas fa-sync mr-2"></i>Sync Dashboard</a>
    <a href="zoho_data_check.php" class="btn btn-secondary"><i class="fas fa-database mr-2"></i>Data Check</a>
</div>

<?php require_once 'includes/footer.php'; ?>
