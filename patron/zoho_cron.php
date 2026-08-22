<?php
/**
 * PATRON - Zoho Cron Job
 * Calls existing ZohoSyncService methods
 * 
 * Cron: /usr/bin/php /home/u498074874/public_html/patron/zoho_cron.php
 */

if (php_sapi_name() !== 'cli') {
    die('CLI only');
}

chdir(__DIR__);

function log_msg($msg) {
    echo "[" . date('Y-m-d H:i:s') . "] $msg\n";
}

log_msg("=== Zoho Cron Started ===");

try {
    require_once __DIR__ . '/includes/db.php';
    require_once __DIR__ . '/includes/zoho_sync.php';
    
    $sync = new ZohoSyncService();
    
    if (!$sync->canSync()) {
        log_msg("ERROR: Zoho not connected");
        exit(1);
    }
    
    // Sync all - 15-month rule and name logic are built into processContact()
    $result = $sync->syncAll('CRON');
    
    log_msg("Contacts: " . json_encode($result['results']['contacts']['stats'] ?? []));
    log_msg("Estimates: " . json_encode($result['results']['estimates']['stats'] ?? []));
    log_msg("Invoices: " . json_encode($result['results']['invoices']['stats'] ?? []));
    log_msg("Payments: " . json_encode($result['results']['payments']['stats'] ?? []));
    
    log_msg("=== Zoho Cron Completed ===");
    exit($result['success'] ? 0 : 1);
    
} catch (Exception $e) {
    log_msg("FATAL: " . $e->getMessage());
    exit(1);
}
