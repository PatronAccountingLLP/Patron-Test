<?php
/**
 * PATRON - Import Clients from Zoho Books
 * Smart import with 15-month invoice activity rule
 * 
 * Logic:
 * - Import all contacts from Zoho Books
 * - If client has invoice in last 15 months → ACTIVE
 * - If client has no invoice in last 15 months → INACTIVE
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/zoho_api.php';
startSession();
requireLogin();

$pageTitle = 'Import Clients from Zoho';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$isAdmin = isAdmin();

// Only Admin can access
if (!$isAdmin) {
    setFlash('error', 'Access denied. Admin only.');
    header('Location: dashboard.php');
    exit;
}

// Check Zoho connection
$zohoConnected = false;
try {
    $zohoSetting = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
    $zohoConnected = ($zohoSetting['setting_value'] ?? '0') === '1';
} catch (Exception $e) {}

if (!$zohoConnected) {
    setFlash('error', 'Zoho Books is not connected.');
    header('Location: zoho_settings.php');
    exit;
}

$zoho = new ZohoBooks();
$previewData = [];
$importResult = null;
$cutoffDate = date('Y-m-d', strtotime('-15 months'));

// Handle Import Action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        setFlash('error', 'Invalid request.');
        header('Location: zoho_import_clients.php');
        exit;
    }
    
    $action = $_POST['action'];
    
    // PREVIEW: Fetch contacts and show what will happen
    if ($action === 'preview') {
        $previewData = fetchZohoContactsForImport($zoho, $cutoffDate);
    }
    
    // EXECUTE IMPORT
    if ($action === 'import') {
        $importResult = executeZohoImport($zoho, $cutoffDate);
    }
    
    // MARK INACTIVE ONLY (for existing clients)
    if ($action === 'mark_inactive') {
        $importResult = markInactiveClients($cutoffDate);
    }
}

/**
 * Fetch contacts from Zoho for preview
 */
function fetchZohoContactsForImport($zoho, $cutoffDate) {
    $result = [
        'contacts' => [],
        'total' => 0,
        'new' => 0,
        'existing' => 0,
        'will_be_active' => 0,
        'will_be_inactive' => 0,
        'errors' => []
    ];
    
    try {
        $page = 1;
        $hasMore = true;
        $allContacts = [];
        
        // Fetch all contacts from Zoho
        while ($hasMore && $page <= 20) { // Max 20 pages
            $response = $zoho->getContacts($page);
            
            if (!$response || !isset($response['contacts'])) {
                throw new Exception('Failed to fetch contacts: ' . ($zoho->getLastError() ?? 'Unknown error'));
            }
            
            $allContacts = array_merge($allContacts, $response['contacts']);
            
            $pageContext = $response['page_context'] ?? [];
            $hasMore = $pageContext['has_more_page'] ?? false;
            $page++;
        }
        
        $result['total'] = count($allContacts);
        
        // Check each contact
        foreach ($allContacts as $contact) {
            $zohoContactId = $contact['contact_id'] ?? '';
            $contactName = $contact['contact_name'] ?? '';
            
            if (!$zohoContactId || empty($contactName)) continue;
            
            // Check if already exists in our system
            $existing = dbFetchOne("SELECT id, name, status FROM clients WHERE zoho_contact_id = ?", [$zohoContactId]);
            
            // Check for recent invoices in our local database
            $hasRecentInvoice = false;
            if ($existing) {
                $invoice = dbFetchOne("
                    SELECT id FROM invoices 
                    WHERE client_id = ? AND invoice_date >= ? AND (status IS NULL OR LOWER(status) != 'void')
                    LIMIT 1
                ", [$existing['id'], $cutoffDate]);
                $hasRecentInvoice = !empty($invoice);
            } else {
                // For new contacts, check Zoho invoices via API
                // For preview, we'll assume based on contact status
                $hasRecentInvoice = ($contact['status'] ?? '') === 'active' && 
                                    (($contact['outstanding_receivable_amount'] ?? 0) > 0 || 
                                     ($contact['unused_credits_receivable_amount'] ?? 0) > 0);
            }
            
            $contactInfo = [
                'zoho_contact_id' => $zohoContactId,
                'name' => $contactName,
                'email' => $contact['email'] ?? '',
                'phone' => $contact['phone'] ?? '',
                'is_existing' => !empty($existing),
                'current_status' => $existing['status'] ?? null,
                'has_recent_invoice' => $hasRecentInvoice,
                'will_be_status' => $hasRecentInvoice ? 'ACTIVE' : 'INACTIVE'
            ];
            
            $result['contacts'][] = $contactInfo;
            
            if ($existing) {
                $result['existing']++;
            } else {
                $result['new']++;
            }
            
            if ($hasRecentInvoice) {
                $result['will_be_active']++;
            } else {
                $result['will_be_inactive']++;
            }
        }
        
    } catch (Exception $e) {
        $result['errors'][] = $e->getMessage();
    }
    
    return $result;
}

/**
 * Execute the actual import
 */
function executeZohoImport($zoho, $cutoffDate) {
    $result = [
        'success' => true,
        'created' => 0,
        'updated' => 0,
        'marked_active' => 0,
        'marked_inactive' => 0,
        'skipped' => 0,
        'errors' => []
    ];
    
    try {
        $page = 1;
        $hasMore = true;
        
        while ($hasMore && $page <= 20) {
            $response = $zoho->getContacts($page);
            
            if (!$response || !isset($response['contacts'])) {
                throw new Exception('Failed to fetch contacts');
            }
            
            foreach ($response['contacts'] as $contact) {
                $zohoContactId = $contact['contact_id'] ?? '';
                $contactName = $contact['contact_name'] ?? '';
                
                if (!$zohoContactId || empty($contactName)) {
                    $result['skipped']++;
                    continue;
                }
                
                // Check if exists
                $existing = dbFetchOne("SELECT id, status FROM clients WHERE zoho_contact_id = ?", [$zohoContactId]);
                
                // Determine status based on invoice activity
                $hasRecentInvoice = false;
                if ($existing) {
                    $invoice = dbFetchOne("
                        SELECT id FROM invoices 
                        WHERE client_id = ? AND invoice_date >= ? AND (status IS NULL OR LOWER(status) != 'void')
                        LIMIT 1
                    ", [$existing['id'], $cutoffDate]);
                    $hasRecentInvoice = !empty($invoice);
                } else {
                    // For new contacts, check Zoho activity
                    $hasRecentInvoice = ($contact['status'] ?? '') === 'active' && 
                                        (($contact['outstanding_receivable_amount'] ?? 0) > 0 || 
                                         ($contact['unused_credits_receivable_amount'] ?? 0) > 0);
                }
                
                $newStatus = $hasRecentInvoice ? 'ACTIVE' : 'INACTIVE';
                
                if ($existing) {
                    // Update existing client
                    $oldStatus = strtoupper($existing['status'] ?? 'ACTIVE');
                    
                    dbExecute("
                        UPDATE clients SET 
                            zoho_customer_name = ?,
                            status = ?,
                            zoho_synced_at = NOW(),
                            updated_at = NOW()
                        WHERE id = ?
                    ", [$contactName, $newStatus, $existing['id']]);
                    
                    $result['updated']++;
                    
                    if ($newStatus === 'ACTIVE' && $oldStatus !== 'ACTIVE') {
                        $result['marked_active']++;
                    } elseif ($newStatus === 'INACTIVE' && $oldStatus !== 'INACTIVE') {
                        $result['marked_inactive']++;
                    }
                } else {
                    // Create new client
                    $pan = '';
                    $gstin = '';
                    
                    // Try to extract from custom fields
                    if (!empty($contact['custom_fields'])) {
                        foreach ($contact['custom_fields'] as $cf) {
                            if (stripos($cf['label'] ?? '', 'pan') !== false) {
                                $pan = strtoupper($cf['value'] ?? '');
                            }
                            if (stripos($cf['label'] ?? '', 'gst') !== false) {
                                $gstin = strtoupper($cf['value'] ?? '');
                            }
                        }
                    }
                    
                    // Also check standard fields
                    if (empty($gstin) && !empty($contact['gst_no'])) {
                        $gstin = strtoupper($contact['gst_no']);
                    }
                    if (empty($pan) && !empty($contact['pan_no'])) {
                        $pan = strtoupper($contact['pan_no']);
                    }
                    
                    // Determine entity type from name or default
                    $entityType = 'PVT_LTD';
                    $nameLower = strtolower($contactName);
                    if (strpos($nameLower, 'llp') !== false) {
                        $entityType = 'LLP';
                    } elseif (strpos($nameLower, 'partnership') !== false || strpos($nameLower, 'partners') !== false) {
                        $entityType = 'PARTNERSHIP';
                    } elseif (strpos($nameLower, 'proprietor') !== false || strpos($nameLower, 'prop') !== false) {
                        $entityType = 'PROPRIETORSHIP';
                    } elseif (strpos($nameLower, 'opc') !== false || strpos($nameLower, 'one person') !== false) {
                        $entityType = 'OPC';
                    } elseif (strpos($nameLower, 'huf') !== false) {
                        $entityType = 'HUF';
                    }
                    
                    dbExecute("
                        INSERT INTO clients (
                            name, entity_type, pan, gstin, email, mobile,
                            zoho_contact_id, zoho_customer_name, zoho_synced_at,
                            status, created_at, updated_at
                        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NOW(), NOW())
                    ", [
                        $contactName,
                        $entityType,
                        $pan ?: null,
                        $gstin ?: null,
                        $contact['email'] ?? null,
                        $contact['mobile'] ?? $contact['phone'] ?? null,
                        $zohoContactId,
                        $contactName,
                        $newStatus
                    ]);
                    
                    $result['created']++;
                    
                    if ($newStatus === 'ACTIVE') {
                        $result['marked_active']++;
                    } else {
                        $result['marked_inactive']++;
                    }
                }
            }
            
            $pageContext = $response['page_context'] ?? [];
            $hasMore = $pageContext['has_more_page'] ?? false;
            $page++;
        }
        
    } catch (Exception $e) {
        $result['success'] = false;
        $result['errors'][] = $e->getMessage();
    }
    
    return $result;
}

/**
 * Mark existing clients as inactive based on invoice history
 */
function markInactiveClients($cutoffDate) {
    $result = [
        'success' => true,
        'marked_inactive' => 0,
        'already_inactive' => 0,
        'kept_active' => 0,
        'errors' => []
    ];
    
    try {
        // Get all active clients
        $activeClients = dbFetchAll("
            SELECT id, name, status 
            FROM clients 
            WHERE deleted_at IS NULL AND UPPER(COALESCE(status, 'ACTIVE')) = 'ACTIVE'
        ") ?: [];
        
        foreach ($activeClients as $client) {
            // Check for recent invoices
            $hasRecentInvoice = dbFetchOne("
                SELECT id FROM invoices 
                WHERE client_id = ? AND invoice_date >= ? AND (status IS NULL OR LOWER(status) != 'void')
                LIMIT 1
            ", [$client['id'], $cutoffDate]);
            
            if (!$hasRecentInvoice) {
                // Mark as inactive
                dbExecute("UPDATE clients SET status = 'INACTIVE', updated_at = NOW() WHERE id = ?", [$client['id']]);
                $result['marked_inactive']++;
            } else {
                $result['kept_active']++;
            }
        }
        
        // Count already inactive
        $result['already_inactive'] = (int)dbFetchOne("
            SELECT COUNT(*) as cnt FROM clients 
            WHERE deleted_at IS NULL AND UPPER(status) = 'INACTIVE'
        ")['cnt'];
        
    } catch (Exception $e) {
        $result['success'] = false;
        $result['errors'][] = $e->getMessage();
    }
    
    return $result;
}

require_once 'includes/header.php';
?>

<div class="max-w-5xl mx-auto">
    <div class="mb-6">
        <a href="clients.php" class="text-blue-600 hover:underline text-sm">
            <i class="fas fa-arrow-left mr-1"></i>Back to Clients
        </a>
    </div>
    
    <div class="card p-6 mb-6">
        <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center">
                <i class="fas fa-cloud-download-alt text-2xl text-blue-600"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Import Clients from Zoho Books</h1>
                <p class="text-gray-500">Smart import with automatic active/inactive status based on invoice history</p>
            </div>
        </div>
        
        <!-- Info Box -->
        <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-6">
            <h3 class="font-semibold text-blue-800 mb-2"><i class="fas fa-info-circle mr-2"></i>How it works</h3>
            <ul class="text-sm text-blue-700 space-y-1">
                <li>• Fetches all contacts from your Zoho Books account</li>
                <li>• Creates new clients or updates existing ones</li>
                <li>• <strong>ACTIVE:</strong> Clients with at least one invoice in the last 15 months</li>
                <li>• <strong>INACTIVE:</strong> Clients with no invoices in the last 15 months</li>
                <li class="text-xs text-blue-500 mt-2">Cutoff date: <?= date('d M Y', strtotime($cutoffDate)) ?></li>
            </ul>
        </div>
        
        <!-- Action Buttons -->
        <div class="flex flex-wrap gap-3">
            <form method="POST" class="inline">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="preview">
                <button type="submit" class="btn btn-secondary">
                    <i class="fas fa-search mr-2"></i>Preview Import
                </button>
            </form>
            
            <form method="POST" class="inline" onsubmit="return confirm('This will import/update all contacts from Zoho Books. Continue?')">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="import">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-cloud-download-alt mr-2"></i>Import from Zoho
                </button>
            </form>
            
            <form method="POST" class="inline" onsubmit="return confirm('This will mark existing clients as INACTIVE if they have no invoices in the last 15 months. Continue?')">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="mark_inactive">
                <button type="submit" class="btn bg-amber-500 text-white hover:bg-amber-600">
                    <i class="fas fa-user-slash mr-2"></i>Mark Inactive Only
                </button>
            </form>
        </div>
    </div>
    
    <!-- Import Result -->
    <?php if ($importResult): ?>
    <div class="card p-6 mb-6 <?= $importResult['success'] ? 'bg-green-50 border-green-200' : 'bg-red-50 border-red-200' ?>">
        <h3 class="font-semibold mb-4 <?= $importResult['success'] ? 'text-green-800' : 'text-red-800' ?>">
            <i class="fas <?= $importResult['success'] ? 'fa-check-circle' : 'fa-exclamation-circle' ?> mr-2"></i>
            Import <?= $importResult['success'] ? 'Completed' : 'Failed' ?>
        </h3>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
            <?php if (isset($importResult['created'])): ?>
            <div class="bg-white rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-blue-600"><?= $importResult['created'] ?></p>
                <p class="text-xs text-gray-500">Created</p>
            </div>
            <?php endif; ?>
            
            <?php if (isset($importResult['updated'])): ?>
            <div class="bg-white rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-indigo-600"><?= $importResult['updated'] ?></p>
                <p class="text-xs text-gray-500">Updated</p>
            </div>
            <?php endif; ?>
            
            <?php if (isset($importResult['marked_active'])): ?>
            <div class="bg-white rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-green-600"><?= $importResult['marked_active'] ?></p>
                <p class="text-xs text-gray-500">Marked Active</p>
            </div>
            <?php endif; ?>
            
            <?php if (isset($importResult['marked_inactive'])): ?>
            <div class="bg-white rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-amber-600"><?= $importResult['marked_inactive'] ?></p>
                <p class="text-xs text-gray-500">Marked Inactive</p>
            </div>
            <?php endif; ?>
            
            <?php if (isset($importResult['kept_active'])): ?>
            <div class="bg-white rounded-lg p-3 text-center">
                <p class="text-2xl font-bold text-green-600"><?= $importResult['kept_active'] ?></p>
                <p class="text-xs text-gray-500">Kept Active</p>
            </div>
            <?php endif; ?>
        </div>
        
        <?php if (!empty($importResult['errors'])): ?>
        <div class="bg-red-100 rounded-lg p-3 text-red-700 text-sm">
            <strong>Errors:</strong><br>
            <?= implode('<br>', array_map('htmlspecialchars', $importResult['errors'])) ?>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <!-- Preview Data -->
    <?php if (!empty($previewData['contacts'])): ?>
    <div class="card mb-6">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-semibold">Preview: <?= $previewData['total'] ?> Contacts Found</h3>
            <div class="flex gap-4 mt-2 text-sm">
                <span class="text-blue-600"><i class="fas fa-plus-circle mr-1"></i><?= $previewData['new'] ?> new</span>
                <span class="text-gray-600"><i class="fas fa-sync mr-1"></i><?= $previewData['existing'] ?> existing</span>
                <span class="text-green-600"><i class="fas fa-check-circle mr-1"></i><?= $previewData['will_be_active'] ?> will be active</span>
                <span class="text-amber-600"><i class="fas fa-times-circle mr-1"></i><?= $previewData['will_be_inactive'] ?> will be inactive</span>
            </div>
        </div>
        
        <div class="overflow-x-auto max-h-96 overflow-y-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100 sticky top-0">
                    <tr>
                        <th class="px-4 py-2 text-left">Contact Name</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-center">Status</th>
                        <th class="px-4 py-2 text-center">Recent Invoice</th>
                        <th class="px-4 py-2 text-center">Will Be</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($previewData['contacts'] as $c): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 font-medium"><?= htmlspecialchars($c['name']) ?></td>
                        <td class="px-4 py-2 text-gray-500"><?= htmlspecialchars($c['email'] ?: '-') ?></td>
                        <td class="px-4 py-2 text-center">
                            <?php if ($c['is_existing']): ?>
                            <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs">Existing</span>
                            <?php else: ?>
                            <span class="px-2 py-0.5 bg-blue-100 text-blue-600 rounded text-xs">New</span>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2 text-center">
                            <?php if ($c['has_recent_invoice']): ?>
                            <i class="fas fa-check-circle text-green-500"></i>
                            <?php else: ?>
                            <i class="fas fa-times-circle text-red-400"></i>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2 text-center">
                            <span class="px-2 py-0.5 rounded text-xs <?= $c['will_be_status'] === 'ACTIVE' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' ?>">
                                <?= $c['will_be_status'] ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php if (!empty($previewData['errors'])): ?>
        <div class="p-4 bg-red-50 border-t border-red-200">
            <p class="text-red-700 text-sm"><strong>Errors:</strong> <?= implode(', ', $previewData['errors']) ?></p>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <!-- Current Stats -->
    <div class="card p-6">
        <h3 class="font-semibold mb-4"><i class="fas fa-chart-pie text-gray-500 mr-2"></i>Current Client Status</h3>
        <?php
        $currentStats = dbFetchOne("
            SELECT 
                COUNT(*) as total,
                SUM(UPPER(COALESCE(status, 'ACTIVE')) = 'ACTIVE') as active,
                SUM(UPPER(status) = 'INACTIVE') as inactive,
                SUM(zoho_contact_id IS NOT NULL) as synced
            FROM clients WHERE deleted_at IS NULL
        ");
        ?>
        <div class="grid grid-cols-4 gap-4">
            <div class="text-center p-3 bg-gray-50 rounded-lg">
                <p class="text-2xl font-bold text-gray-700"><?= number_format($currentStats['total'] ?? 0) ?></p>
                <p class="text-xs text-gray-500">Total Clients</p>
            </div>
            <div class="text-center p-3 bg-green-50 rounded-lg">
                <p class="text-2xl font-bold text-green-600"><?= number_format($currentStats['active'] ?? 0) ?></p>
                <p class="text-xs text-gray-500">Active</p>
            </div>
            <div class="text-center p-3 bg-amber-50 rounded-lg">
                <p class="text-2xl font-bold text-amber-600"><?= number_format($currentStats['inactive'] ?? 0) ?></p>
                <p class="text-xs text-gray-500">Inactive</p>
            </div>
            <div class="text-center p-3 bg-blue-50 rounded-lg">
                <p class="text-2xl font-bold text-blue-600"><?= number_format($currentStats['synced'] ?? 0) ?></p>
                <p class="text-xs text-gray-500">Zoho Synced</p>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
