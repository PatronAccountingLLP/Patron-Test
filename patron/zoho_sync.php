<?php
/**
 * PATRON - Zoho Books Sync Dashboard
 * Manual sync controls and status overview
 * 
 * LOCATION: /patron/zoho_sync.php (root folder, NOT includes)
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/zoho_api.php';
require_once 'includes/zoho_sync.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied');
    header('Location: dashboard.php');
    exit;
}

$pageTitle = 'Zoho Sync Dashboard';
$zoho = new ZohoBooks();
$syncService = new ZohoSyncService();

// Handle sync actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    $fullSync = isset($_POST['full_sync']);
    $userName = getCurrentUser()['display_name'] ?? 'Admin';
    
    set_time_limit(300); // Allow 5 minutes for sync
    
    $result = null;
    
    switch ($action) {
        case 'sync_contacts':
            $result = $syncService->syncContacts($userName, $fullSync);
            $msg = "Contacts: {$result['stats']['created']} created, {$result['stats']['updated']} updated";
            break;
            
        case 'sync_estimates':
            $result = $syncService->syncEstimates($userName, $fullSync);
            $msg = "Estimates: {$result['stats']['created']} created, {$result['stats']['updated']} updated";
            break;
            
        case 'sync_invoices':
            $result = $syncService->syncInvoices($userName, $fullSync);
            $skipped = $result['stats']['skipped'] ?? 0;
            $msg = "Invoices: {$result['stats']['created']} created, {$result['stats']['updated']} updated" . ($skipped > 0 ? ", {$skipped} void skipped" : "");
            break;
            
        case 'sync_payments':
            $result = $syncService->syncPayments($userName, $fullSync);
            $msg = "Payments: {$result['stats']['created']} created, {$result['stats']['updated']} updated";
            break;
            
        case 'sync_all':
            $result = $syncService->syncAll($userName, $fullSync);
            $msg = "Full sync completed";
            break;
            
        case 'push_all_clients':
            $clients = dbFetchAll("SELECT id FROM clients WHERE zoho_contact_id IS NULL AND deleted_at IS NULL AND UPPER(status) = 'ACTIVE'");
            $clientIds = array_column($clients, 'id');
            $result = $syncService->pushClientsToZoho($clientIds, $userName);
            $msg = "Pushed {$result['stats']['created']} clients to Zoho";
            break;
            
        case 'cleanup_void':
            $result = $syncService->cleanupVoidInvoices();
            $msg = "Cleanup completed: " . ($result['message'] ?? 'Done');
            break;
            
        case 'fix_blank_names':
            $result = $syncService->fixBlankClientNames();
            $msg = "Fixed {$result['fixed']} blank client names, skipped {$result['skipped']}";
            break;
            
        case 'refresh_active_status':
            $result = $syncService->refreshClientActiveStatus();
            $msg = "Status refresh: {$result['marked_active']} active, {$result['marked_inactive']} inactive, {$result['unchanged']} unchanged";
            break;
    }
    
    if ($result) {
        if ($result['success']) {
            setFlash('success', $msg);
        } else {
            setFlash('error', 'Sync failed: ' . ($result['error'] ?? 'Unknown error'));
        }
    }
    
    header('Location: zoho_sync.php');
    exit;
}

// Check connection
if (!$zoho->isConnected()) {
    setFlash('error', 'Zoho Books is not connected. Please configure it first.');
    header('Location: zoho_settings.php');
    exit;
}

// Get stats
$stats = $syncService->getSyncStats();

// Get totals from database
$totals = dbFetchOne("
    SELECT 
        (SELECT COUNT(*) FROM clients WHERE deleted_at IS NULL) as total_clients,
        (SELECT COUNT(*) FROM clients WHERE zoho_contact_id IS NOT NULL AND deleted_at IS NULL) as synced_clients,
        (SELECT COUNT(*) FROM quotations) as quotations,
        (SELECT COUNT(*) FROM invoices WHERE status != 'void') as invoices,
        (SELECT COUNT(*) FROM payments) as payments,
        (SELECT COUNT(*) FROM invoices WHERE status = 'paid') as paid_invoices,
        (SELECT COUNT(*) FROM invoices WHERE status IN ('sent', 'overdue', 'partially_paid')) as unpaid_invoices,
        (SELECT COALESCE(SUM(total), 0) FROM invoices WHERE status != 'void') as total_invoiced,
        (SELECT COALESCE(SUM(balance_due), 0) FROM invoices WHERE status NOT IN ('paid', 'void')) as total_outstanding
") ?: [];

// Get sync logs
$syncLogs = dbFetchAll("SELECT * FROM zoho_sync_log ORDER BY started_at DESC LIMIT 50") ?: [];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-sync text-blue-600 mr-2"></i>Zoho Sync Dashboard</h1>
        <p class="text-gray-500 text-sm">Manage data synchronization with Zoho Books</p>
    </div>
    <a href="zoho_settings.php" class="btn btn-secondary"><i class="fas fa-cog mr-2"></i>Settings</a>
</div>

<!-- Quick Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-blue-600"><?= $totals['synced_clients'] ?? 0 ?>/<?= $totals['total_clients'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Clients Synced</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-purple-600"><?= $totals['quotations'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Quotations</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-indigo-600"><?= $totals['invoices'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Invoices</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-green-600"><?= $totals['paid_invoices'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Paid</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-amber-600"><?= $totals['unpaid_invoices'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Unpaid</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-teal-600"><?= $totals['payments'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Payments</p>
    </div>
</div>

<!-- Sync Controls -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <!-- Pull from Zoho -->
    <div class="card">
        <div class="p-4 border-b bg-blue-50">
            <h3 class="font-semibold text-blue-800"><i class="fas fa-cloud-download-alt mr-2"></i>Pull from Zoho</h3>
        </div>
        <div class="p-4 space-y-3">
            <form method="POST" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="sync_contacts">
                <div>
                    <p class="font-medium">Contacts → Clients</p>
                    <p class="text-xs text-gray-500">Last: <?= $stats['last_sync_contacts'] ? date('d M H:i', strtotime($stats['last_sync_contacts'])) : 'Never' ?></p>
                </div>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-sync mr-1"></i>Sync</button>
            </form>
            
            <form method="POST" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="sync_estimates">
                <div>
                    <p class="font-medium">Estimates → Quotations</p>
                    <p class="text-xs text-gray-500">Last: <?= $stats['last_sync_estimates'] ? date('d M H:i', strtotime($stats['last_sync_estimates'])) : 'Never' ?></p>
                </div>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-sync mr-1"></i>Sync</button>
            </form>
            
            <form method="POST" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="sync_invoices">
                <div>
                    <p class="font-medium">Invoices <span class="text-xs text-gray-400">(excludes void)</span></p>
                    <p class="text-xs text-gray-500">Last: <?= $stats['last_sync_invoices'] ? date('d M H:i', strtotime($stats['last_sync_invoices'])) : 'Never' ?></p>
                </div>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-sync mr-1"></i>Sync</button>
            </form>
            
            <form method="POST" class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="sync_payments">
                <div>
                    <p class="font-medium">Payments</p>
                    <p class="text-xs text-gray-500">Last: <?= $stats['last_sync_payments'] ? date('d M H:i', strtotime($stats['last_sync_payments'])) : 'Never' ?></p>
                </div>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-sync mr-1"></i>Sync</button>
            </form>
            
            <hr class="my-3">
            
            <form method="POST" class="text-center">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="sync_all">
                <label class="flex items-center justify-center gap-2 mb-3 text-sm">
                    <input type="checkbox" name="full_sync" class="rounded">
                    <span>Full sync (ignore last sync time)</span>
                </label>
                <button type="submit" class="btn btn-primary w-full">
                    <i class="fas fa-sync-alt mr-2"></i>Sync All from Zoho
                </button>
            </form>
        </div>
    </div>
    
    <!-- Push to Zoho -->
    <div class="card">
        <div class="p-4 border-b bg-green-50">
            <h3 class="font-semibold text-green-800"><i class="fas fa-cloud-upload-alt mr-2"></i>Push to Zoho</h3>
        </div>
        <div class="p-4">
            <?php 
            $unsyncedClients = dbFetchOne("SELECT COUNT(*) as cnt FROM clients WHERE zoho_contact_id IS NULL AND deleted_at IS NULL AND UPPER(status) = 'ACTIVE'")['cnt'] ?? 0;
            ?>
            
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-green-600 text-2xl"></i>
                </div>
                <p class="text-2xl font-bold text-gray-800 mb-1"><?= $unsyncedClients ?></p>
                <p class="text-gray-500 mb-4">Active clients not yet in Zoho</p>
                
                <?php if ($unsyncedClients > 0): ?>
                <form method="POST">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="push_all_clients">
                    <button type="submit" class="btn btn-success" onclick="return confirm('Push <?= $unsyncedClients ?> clients to Zoho Books?')">
                        <i class="fas fa-cloud-upload-alt mr-2"></i>Push All to Zoho
                    </button>
                </form>
                <?php else: ?>
                <p class="text-green-600"><i class="fas fa-check-circle mr-1"></i>All clients synced!</p>
                <?php endif; ?>
            </div>
            
            <div class="mt-4 p-3 bg-gray-50 rounded-lg text-sm text-gray-600">
                <p class="font-medium mb-1">Two-Way Sync:</p>
                <ul class="list-disc list-inside text-xs space-y-1">
                    <li>New contacts in Zoho → Auto-create clients in Patron</li>
                    <li>New clients in Patron → Push to Zoho with button</li>
                    <li>Status changes sync both ways</li>
                    <li>VOID invoices are excluded from sync</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Maintenance Tools -->
<div class="card mb-6">
    <div class="p-4 border-b bg-amber-50">
        <h3 class="font-semibold text-amber-800"><i class="fas fa-tools mr-2"></i>Maintenance Tools</h3>
    </div>
    <div class="p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Fix Blank Names -->
            <div class="p-4 bg-gray-50 rounded-lg">
                <?php 
                $blankNameCount = dbFetchOne("
                    SELECT COUNT(*) as cnt FROM clients 
                    WHERE zoho_contact_id IS NOT NULL 
                    AND (name IS NULL OR TRIM(name) = '' OR name = zoho_contact_id)
                    AND deleted_at IS NULL
                ")['cnt'] ?? 0;
                ?>
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user-edit text-red-600"></i>
                    </div>
                    <div class="flex-grow">
                        <p class="font-medium">Fix Blank Client Names</p>
                        <p class="text-sm text-gray-500 mb-2">
                            <?= $blankNameCount ?> clients have blank or invalid names
                        </p>
                        <?php if ($blankNameCount > 0): ?>
                        <form method="POST">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="fix_blank_names">
                            <button type="submit" class="btn btn-sm bg-red-500 text-white hover:bg-red-600">
                                <i class="fas fa-wrench mr-1"></i>Fix Names from Zoho
                            </button>
                        </form>
                        <?php else: ?>
                        <span class="text-green-600 text-sm"><i class="fas fa-check-circle mr-1"></i>All names OK</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Refresh Active Status -->
            <div class="p-4 bg-gray-50 rounded-lg">
                <?php 
                $cutoffDate = date('Y-m-d', strtotime('-15 months'));
                $activeWithNoActivity = dbFetchOne("
                    SELECT COUNT(*) as cnt FROM clients c
                    WHERE c.deleted_at IS NULL 
                    AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
                    AND NOT EXISTS (
                        SELECT 1 FROM invoices i WHERE i.client_id = c.id AND i.invoice_date >= '$cutoffDate' AND (i.status IS NULL OR LOWER(i.status) != 'void')
                    )
                    AND NOT EXISTS (
                        SELECT 1 FROM quotations q WHERE q.client_id = c.id AND q.estimate_date >= '$cutoffDate'
                    )
                    AND NOT EXISTS (
                        SELECT 1 FROM payments p WHERE p.client_id = c.id AND p.payment_date >= '$cutoffDate'
                    )
                ")['cnt'] ?? 0;
                ?>
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user-clock text-amber-600"></i>
                    </div>
                    <div class="flex-grow">
                        <p class="font-medium">Refresh Active/Inactive Status</p>
                        <p class="text-sm text-gray-500 mb-2">
                            <?= $activeWithNoActivity ?> "active" clients have no activity in 15 months
                        </p>
                        <form method="POST">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="refresh_active_status">
                            <button type="submit" class="btn btn-sm bg-amber-500 text-white hover:bg-amber-600" onclick="return confirm('This will mark clients as INACTIVE if they have no invoices, estimates, or payments in the last 15 months. Continue?')">
                                <i class="fas fa-sync mr-1"></i>Apply 15-Month Rule
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <p class="text-xs text-gray-400 mt-4 text-center">
            <i class="fas fa-info-circle mr-1"></i>
            15-month rule: Clients with no invoice, estimate, or payment in the last 15 months are marked INACTIVE
        </p>
    </div>
</div>

<!-- Financial Summary -->
<div class="card mb-6">
    <div class="p-4 border-b bg-gray-50">
        <h3 class="font-semibold"><i class="fas fa-rupee-sign mr-2"></i>Financial Summary (from Zoho)</h3>
    </div>
    <div class="p-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="text-center p-4 bg-blue-50 rounded-lg">
                <p class="text-sm text-gray-500">Total Invoiced</p>
                <p class="text-2xl font-bold text-blue-600">₹<?= number_format($totals['total_invoiced'] ?? 0) ?></p>
            </div>
            <div class="text-center p-4 bg-green-50 rounded-lg">
                <p class="text-sm text-gray-500">Collected</p>
                <p class="text-2xl font-bold text-green-600">₹<?= number_format(($totals['total_invoiced'] ?? 0) - ($totals['total_outstanding'] ?? 0)) ?></p>
            </div>
            <div class="text-center p-4 bg-amber-50 rounded-lg">
                <p class="text-sm text-gray-500">Outstanding</p>
                <p class="text-2xl font-bold text-amber-600">₹<?= number_format($totals['total_outstanding'] ?? 0) ?></p>
            </div>
            <div class="text-center p-4 bg-gray-50 rounded-lg">
                <p class="text-sm text-gray-500">Collection Rate</p>
                <?php $rate = ($totals['total_invoiced'] ?? 0) > 0 ? round((($totals['total_invoiced'] - $totals['total_outstanding']) / $totals['total_invoiced']) * 100, 1) : 0; ?>
                <p class="text-2xl font-bold text-gray-700"><?= $rate ?>%</p>
            </div>
        </div>
    </div>
</div>

<!-- Sync Logs -->
<div class="card">
    <div class="p-4 border-b bg-gray-50">
        <h3 class="font-semibold"><i class="fas fa-history mr-2"></i>Sync History</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left">Type</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-center">Fetched</th>
                    <th class="px-4 py-3 text-center">Created</th>
                    <th class="px-4 py-3 text-center">Updated</th>
                    <th class="px-4 py-3 text-center">Failed</th>
                    <th class="px-4 py-3 text-left">Triggered By</th>
                    <th class="px-4 py-3 text-left">Time</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (empty($syncLogs)): ?>
                <tr><td colspan="8" class="px-4 py-8 text-center text-gray-500">No sync history yet</td></tr>
                <?php else: ?>
                <?php foreach ($syncLogs as $log): 
                    $colors = ['SUCCESS' => 'green', 'FAILED' => 'red', 'PARTIAL' => 'amber', 'STARTED' => 'blue'];
                    $color = $colors[$log['status']] ?? 'gray';
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium"><?= $log['sync_type'] ?></td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 bg-<?= $color ?>-100 text-<?= $color ?>-700 rounded text-xs font-medium"><?= $log['status'] ?></span>
                    </td>
                    <td class="px-4 py-3 text-center"><?= $log['records_fetched'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600"><?= $log['records_created'] ?></td>
                    <td class="px-4 py-3 text-center text-blue-600"><?= $log['records_updated'] ?></td>
                    <td class="px-4 py-3 text-center <?= $log['records_failed'] > 0 ? 'text-red-600 font-bold' : '' ?>"><?= $log['records_failed'] ?></td>
                    <td class="px-4 py-3 text-gray-500"><?= $log['triggered_by'] ?></td>
                    <td class="px-4 py-3 text-gray-500"><?= date('d M H:i', strtotime($log['started_at'])) ?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
