<?php
/**
 * PATRON - Billing Items Management
 * Admin/Manager page to manage line items for billing
 * With Zoho Books integration for syncing items (including tax data)
 */

// Handle AJAX requests FIRST before any other output
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajax'])) {
    // Start output buffering immediately
    ob_start();
    
    require_once 'includes/db.php';
    require_once 'includes/access_control.php';
    startSession();
    
    // Check if logged in
    if (!isLoggedIn()) {
        ob_end_clean();
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'error' => 'Not logged in']);
        exit;
    }
    
    // Check Zoho connection
    $zohoConnected = false;
    try {
        $zohoSetting = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
        $zohoConnected = ($zohoSetting['setting_value'] ?? '0') === '1';
    } catch (Exception $e) {}
    
    // Clear buffer and set JSON header
    ob_end_clean();
    header('Content-Type: application/json');
    
    // Error handler
    set_error_handler(function($errno, $errstr, $errfile, $errline) {
        echo json_encode(['success' => false, 'error' => "PHP Error: $errstr"]);
        exit;
    });
    
    try {
        if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
            echo json_encode(['success' => false, 'error' => 'Invalid token']);
            exit;
        }
        
        $action = $_POST['action'] ?? '';
        
        // Fetch Zoho Items with tax details
        if ($action === 'fetch_zoho_items') {
            if (!$zohoConnected) {
                echo json_encode(['success' => false, 'error' => 'Zoho is not connected. Go to Settings > Zoho Integration to connect.']);
                exit;
            }
            
            require_once 'includes/zoho_api.php';
            $zoho = new ZohoBooks();
            
            // First, fetch all taxes to get tax_id -> percentage mapping
            $taxMap = [];
            $taxResult = $zoho->getTaxes();
            if ($taxResult && isset($taxResult['taxes'])) {
                foreach ($taxResult['taxes'] as $tax) {
                    $taxMap[$tax['tax_id']] = [
                        'name' => $tax['tax_name'] ?? '',
                        'percentage' => (float)($tax['tax_percentage'] ?? 0)
                    ];
                }
            }
            
            $allItems = [];
            $page = 1;
            $hasMore = true;
            
            while ($hasMore && $page <= 20) {
                $result = $zoho->getItems($page);
                
                if ($result && isset($result['items'])) {
                    $allItems = array_merge($allItems, $result['items']);
                    $hasMore = isset($result['page_context']['has_more_page']) && $result['page_context']['has_more_page'];
                    $page++;
                } else {
                    $hasMore = false;
                    if (!$result) {
                        echo json_encode(['success' => false, 'error' => $zoho->getLastError() ?? 'Failed to fetch items']);
                        exit;
                    }
                }
            }
            
            // Get existing mapped items
            $existingMaps = dbFetchAll("SELECT zoho_item_id FROM billing_items WHERE zoho_item_id IS NOT NULL AND zoho_item_id != ''");
            $mappedIds = array_column($existingMaps, 'zoho_item_id');
            
            // Mark which items are already mapped and add tax info from tax map
            foreach ($allItems as &$item) {
                $item['is_mapped'] = in_array($item['item_id'], $mappedIds);
                
                // Get tax info from tax map if item has tax_id
                if (!empty($item['tax_id']) && isset($taxMap[$item['tax_id']])) {
                    $item['tax_name'] = $taxMap[$item['tax_id']]['name'];
                    $item['tax_percentage'] = $taxMap[$item['tax_id']]['percentage'];
                    $item['is_taxable'] = true;
                } else {
                    $item['is_taxable'] = false;
                    $item['tax_name'] = '';
                    $item['tax_percentage'] = 0;
                }
            }
            
            echo json_encode(['success' => true, 'items' => $allItems, 'total' => count($allItems), 'taxes_loaded' => count($taxMap)]);
            exit;
        }
        
        // Bulk import Zoho items with tax details
        if ($action === 'bulk_import') {
            $items = json_decode($_POST['items'] ?? '[]', true);
            $categoryId = (int)($_POST['category_id'] ?? 0);
            
            if (empty($items)) {
                echo json_encode(['success' => false, 'error' => 'No items selected']);
                exit;
            }
            
            // Check if new tax columns exist
            $hasNewColumns = false;
            try {
                $testCol = dbFetchOne("SELECT zoho_tax_id FROM billing_items LIMIT 1");
                $hasNewColumns = true;
            } catch (Exception $e) {
                $hasNewColumns = false;
            }
            
            $imported = 0;
            $updated = 0;
            
            foreach ($items as $item) {
                $existing = dbFetchOne("SELECT id FROM billing_items WHERE zoho_item_id = ?", [$item['item_id']]);
                
                // Tax info comes from fetch_zoho_items which already mapped from taxes API
                $isTaxable = ($item['is_taxable'] ?? false) ? 1 : 0;
                $taxId = $item['tax_id'] ?? null;
                $taxName = $item['tax_name'] ?? '';
                $taxPercent = (float)($item['tax_percentage'] ?? 0);
                $rate = (float)($item['rate'] ?? 0);
                $hsnSac = $item['hsn_or_sac'] ?? '';
                $sku = $item['sku'] ?? '';
                
                if ($existing) {
                    if ($hasNewColumns) {
                        dbExecute("UPDATE billing_items SET 
                            name = ?, description = ?, default_rate = ?, hsn_sac_code = ?, 
                            is_taxable = ?, zoho_item_name = ?, zoho_tax_id = ?, zoho_tax_name = ?, 
                            zoho_tax_percentage = ?, zoho_sku = ?, updated_at = NOW()
                            WHERE id = ?",
                            [
                                $item['name'], 
                                $item['description'] ?? '', 
                                $rate, 
                                $hsnSac,
                                $isTaxable, 
                                $item['name'],
                                $taxId,
                                $taxName,
                                $taxPercent,
                                $sku,
                                $existing['id']
                            ]);
                    } else {
                        dbExecute("UPDATE billing_items SET 
                            name = ?, description = ?, default_rate = ?, hsn_sac_code = ?, 
                            is_taxable = ?, zoho_item_name = ?, updated_at = NOW()
                            WHERE id = ?",
                            [
                                $item['name'], 
                                $item['description'] ?? '', 
                                $rate, 
                                $hsnSac,
                                $isTaxable, 
                                $item['name'],
                                $existing['id']
                            ]);
                    }
                    $updated++;
                } else {
                    if ($hasNewColumns) {
                        dbExecute("INSERT INTO billing_items 
                            (name, description, category_id, default_rate, hsn_sac_code, is_taxable, 
                             zoho_item_id, zoho_item_name, zoho_tax_id, zoho_tax_name, zoho_tax_percentage, zoho_sku) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                            [
                                $item['name'], 
                                $item['description'] ?? '', 
                                $categoryId ?: null, 
                                $rate, 
                                $hsnSac, 
                                $isTaxable, 
                                $item['item_id'], 
                                $item['name'],
                                $taxId,
                                $taxName,
                                $taxPercent,
                                $sku
                            ]);
                    } else {
                        dbExecute("INSERT INTO billing_items 
                            (name, description, category_id, default_rate, hsn_sac_code, is_taxable, 
                             zoho_item_id, zoho_item_name) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
                            [
                                $item['name'], 
                                $item['description'] ?? '', 
                                $categoryId ?: null, 
                                $rate, 
                                $hsnSac, 
                                $isTaxable, 
                                $item['item_id'], 
                                $item['name']
                            ]);
                    }
                    $imported++;
                }
            }
            
            $message = '';
            if ($imported > 0) $message .= "Imported $imported new items. ";
            if ($updated > 0) $message .= "Updated $updated existing items.";
            if (!$hasNewColumns) $message .= " (Run SQL to add tax columns for full sync)";
            
            echo json_encode(['success' => true, 'imported' => $imported, 'updated' => $updated, 'message' => trim($message)]);
            exit;
        }
        
        // Link item
        if ($action === 'link_item') {
            $patronItemId = (int)($_POST['patron_item_id'] ?? 0);
            $zohoItemId = sanitize($_POST['zoho_item_id'] ?? '');
            $zohoItemName = sanitize($_POST['zoho_item_name'] ?? '');
            
            if (!$patronItemId || empty($zohoItemId)) {
                echo json_encode(['success' => false, 'error' => 'Invalid item IDs']);
                exit;
            }
            
            dbExecute("UPDATE billing_items SET zoho_item_id = ?, zoho_item_name = ? WHERE id = ?",
                [$zohoItemId, $zohoItemName, $patronItemId]);
            
            echo json_encode(['success' => true, 'message' => 'Items linked successfully']);
            exit;
        }
        
        // Unlink item
        if ($action === 'unlink_item') {
            $patronItemId = (int)($_POST['patron_item_id'] ?? 0);
            
            if (!$patronItemId) {
                echo json_encode(['success' => false, 'error' => 'Invalid item ID']);
                exit;
            }
            
            dbExecute("UPDATE billing_items SET zoho_item_id = NULL, zoho_item_name = NULL WHERE id = ?", [$patronItemId]);
            
            echo json_encode(['success' => true, 'message' => 'Item unlinked']);
            exit;
        }
        
        echo json_encode(['success' => false, 'error' => 'Unknown action']);
        exit;
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => 'Error: ' . $e->getMessage()]);
        exit;
    } catch (Error $e) {
        echo json_encode(['success' => false, 'error' => 'Fatal: ' . $e->getMessage()]);
        exit;
    }
}

// Regular page load starts here
require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Billing Items';
$currentUser = getCurrentUser();
$isAdmin = isAdmin();
$userRoles = getUserRoles($currentUser['id']);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);

// Only admins and managers can access
if (!$isAdmin && !$isManager) {
    setFlash('error', 'You do not have permission to access this page.');
    header('Location: dashboard.php'); exit;
}

// Check Zoho connection
$zohoConnected = false;
try {
    $zohoSetting = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
    $zohoConnected = ($zohoSetting['setting_value'] ?? '0') === '1';
} catch (Exception $e) {}

$error = '';
$success = '';

// Debug test for Zoho API
if (isset($_GET['test_zoho'])) {
    header('Content-Type: application/json');
    try {
        require_once 'includes/zoho_api.php';
        $zoho = new ZohoBooks();
        echo json_encode([
            'connected' => $zoho->isConnected(),
            'test' => 'Zoho API loaded successfully'
        ]);
    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    } catch (Error $e) {
        echo json_encode(['error' => 'Fatal: ' . $e->getMessage()]);
    }
    exit;
}


// Handle regular form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['ajax'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = 'Invalid security token. Please try again.';
    } else {
        $action = $_POST['action'] ?? '';
        
        if ($action === 'add') {
            $name = trim(sanitize($_POST['name'] ?? ''));
            $description = trim(sanitize($_POST['description'] ?? ''));
            $categoryId = (int)($_POST['category_id'] ?? 0);
            $defaultRate = (float)($_POST['default_rate'] ?? 0);
            $unit = trim(sanitize($_POST['unit'] ?? 'nos'));
            $hsnSac = trim(sanitize($_POST['hsn_sac_code'] ?? ''));
            $isTaxable = isset($_POST['is_taxable']) ? 1 : 0;
            $zohoItemId = trim(sanitize($_POST['zoho_item_id'] ?? ''));
            $zohoItemName = trim(sanitize($_POST['zoho_item_name'] ?? ''));
            
            if (empty($name)) {
                $error = 'Item name is required.';
            } else {
                dbExecute("INSERT INTO billing_items (name, description, category_id, default_rate, unit, hsn_sac_code, is_taxable, zoho_item_id, zoho_item_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    [$name, $description, $categoryId ?: null, $defaultRate, $unit, $hsnSac, $isTaxable, $zohoItemId ?: null, $zohoItemName ?: null]);
                $success = "Item '$name' created successfully.";
            }
        }
        
        if ($action === 'edit') {
            $id = (int)$_POST['id'];
            $name = trim(sanitize($_POST['name'] ?? ''));
            $description = trim(sanitize($_POST['description'] ?? ''));
            $categoryId = (int)($_POST['category_id'] ?? 0);
            $defaultRate = (float)($_POST['default_rate'] ?? 0);
            $unit = trim(sanitize($_POST['unit'] ?? 'nos'));
            $hsnSac = trim(sanitize($_POST['hsn_sac_code'] ?? ''));
            $taxPercent = (float)($_POST['tax_percentage'] ?? 0);
            $isTaxable = $taxPercent > 0 ? 1 : 0;
            $isActive = isset($_POST['is_active']) ? 1 : 0;
            $zohoItemId = trim(sanitize($_POST['zoho_item_id'] ?? ''));
            $zohoTaxName = trim(sanitize($_POST['zoho_tax_name'] ?? ''));
            
            // Generate tax name based on percentage
            $taxName = '';
            if ($taxPercent > 0) {
                $taxName = 'GST' . (int)$taxPercent;
            }
            
            if (empty($name)) {
                $error = 'Item name is required.';
            } else {
                // Check if new columns exist
                $hasNewColumns = false;
                try {
                    $testCol = dbFetchOne("SELECT zoho_tax_id FROM billing_items LIMIT 1");
                    $hasNewColumns = true;
                } catch (Exception $e) {}
                
                if ($hasNewColumns) {
                    dbExecute("UPDATE billing_items SET 
                        name = ?, description = ?, category_id = ?, default_rate = ?, unit = ?, 
                        hsn_sac_code = ?, is_taxable = ?, is_active = ?, zoho_item_id = ?, 
                        zoho_tax_name = ?, zoho_tax_percentage = ?
                        WHERE id = ?",
                        [$name, $description, $categoryId ?: null, $defaultRate, $unit, $hsnSac, 
                         $isTaxable, $isActive, $zohoItemId ?: null, $taxName ?: $zohoTaxName ?: null, 
                         $taxPercent, $id]);
                } else {
                    dbExecute("UPDATE billing_items SET 
                        name = ?, description = ?, category_id = ?, default_rate = ?, unit = ?, 
                        hsn_sac_code = ?, is_taxable = ?, is_active = ?, zoho_item_id = ?
                        WHERE id = ?",
                        [$name, $description, $categoryId ?: null, $defaultRate, $unit, $hsnSac, 
                         $isTaxable, $isActive, $zohoItemId ?: null, $id]);
                }
                $success = "Item updated successfully.";
            }
        }
        
        if ($action === 'delete') {
            $id = (int)$_POST['id'];
            $usage = dbFetchOne("SELECT COUNT(*) as cnt FROM billing_request_items WHERE billing_item_id = ?", [$id]);
            
            if (($usage['cnt'] ?? 0) > 0) {
                $error = 'Cannot delete item that is in use. Deactivate it instead.';
            } else {
                dbExecute("DELETE FROM billing_items WHERE id = ?", [$id]);
                $success = "Item deleted successfully.";
            }
        }
    }
}

// Get filters
$filterCategory = (int)($_GET['category'] ?? 0);
$filterTaxable = $_GET['taxable'] ?? '';
$filterActive = $_GET['active'] ?? '1';
$filterZoho = $_GET['zoho'] ?? '';

// Build query
$where = ["1=1"];
$params = [];

if ($filterCategory) {
    $where[] = "bi.category_id = ?";
    $params[] = $filterCategory;
}
if ($filterTaxable !== '') {
    $where[] = "bi.is_taxable = ?";
    $params[] = (int)$filterTaxable;
}
if ($filterActive !== '') {
    $where[] = "bi.is_active = ?";
    $params[] = (int)$filterActive;
}
if ($filterZoho === 'linked') {
    $where[] = "bi.zoho_item_id IS NOT NULL AND bi.zoho_item_id != ''";
} elseif ($filterZoho === 'unlinked') {
    $where[] = "(bi.zoho_item_id IS NULL OR bi.zoho_item_id = '')";
}

$whereClause = implode(' AND ', $where);

$items = dbFetchAll("SELECT bi.*, bc.code as category_code, bc.name as category_name,
    (SELECT COUNT(*) FROM billing_request_items WHERE billing_item_id = bi.id) as usage_count
    FROM billing_items bi
    LEFT JOIN billing_categories bc ON bi.category_id = bc.id
    WHERE $whereClause
    ORDER BY bc.sort_order, bi.name", $params);

$categories = dbFetchAll("SELECT id, code, name FROM billing_categories WHERE is_active = 1 ORDER BY sort_order, code");

$totalItems = dbFetchOne("SELECT COUNT(*) as cnt FROM billing_items")['cnt'] ?? 0;
$linkedItems = dbFetchOne("SELECT COUNT(*) as cnt FROM billing_items WHERE zoho_item_id IS NOT NULL AND zoho_item_id != ''")['cnt'] ?? 0;
$unlinkedItems = $totalItems - $linkedItems;

require_once 'includes/header.php';
?>

<div class="space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">Billing Items</h2>
            <p class="text-sm text-gray-500 mt-1">Manage line items for invoices and estimates</p>
        </div>
        <div class="flex gap-3">
            <?php if ($zohoConnected): ?>
            <button onclick="openZohoSyncModal()" class="btn btn-secondary text-sm">
                <i class="fas fa-sync mr-2"></i>Sync from Zoho
            </button>
            <?php else: ?>
            <a href="zoho_settings.php" class="btn btn-secondary text-sm opacity-70" title="Connect Zoho Books first">
                <i class="fas fa-unlink mr-2"></i>Zoho Not Connected
            </a>
            <?php endif; ?>
            <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="btn btn-primary text-sm">
                <i class="fas fa-plus mr-2"></i>Add Item
            </button>
        </div>
    </div>

    <?php if ($error): ?>
    <div class="p-4 bg-red-100 text-red-700 rounded-lg"><i class="fas fa-exclamation-circle mr-2"></i><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
    <div class="p-4 bg-green-100 text-green-700 rounded-lg"><i class="fas fa-check-circle mr-2"></i><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <div class="grid grid-cols-3 gap-4">
        <div class="card p-4"><div class="text-2xl font-bold text-gray-800"><?= $totalItems ?></div><div class="text-sm text-gray-500">Total Items</div></div>
        <div class="card p-4"><div class="text-2xl font-bold text-green-600"><?= $linkedItems ?></div><div class="text-sm text-gray-500">Linked to Zoho</div></div>
        <div class="card p-4"><div class="text-2xl font-bold text-amber-600"><?= $unlinkedItems ?></div><div class="text-sm text-gray-500">Not Linked</div></div>
    </div>

    <div class="card p-4 bg-gray-50">
        <form method="GET" class="flex flex-wrap gap-4 items-end">
            <div class="w-48">
                <label class="form-label text-xs">Category</label>
                <select name="category" class="form-input text-sm py-1.5">
                    <option value="">All Categories</option>
                    <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat['id'] ?>" <?= $filterCategory == $cat['id'] ? 'selected' : '' ?>><?= htmlspecialchars($cat['code']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="w-32">
                <label class="form-label text-xs">Taxable</label>
                <select name="taxable" class="form-input text-sm py-1.5">
                    <option value="">All</option>
                    <option value="1" <?= $filterTaxable === '1' ? 'selected' : '' ?>>Taxable</option>
                    <option value="0" <?= $filterTaxable === '0' ? 'selected' : '' ?>>Exempt</option>
                </select>
            </div>
            <div class="w-32">
                <label class="form-label text-xs">Status</label>
                <select name="active" class="form-input text-sm py-1.5">
                    <option value="">All</option>
                    <option value="1" <?= $filterActive === '1' ? 'selected' : '' ?>>Active</option>
                    <option value="0" <?= $filterActive === '0' ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>
            <div class="w-32">
                <label class="form-label text-xs">Zoho Link</label>
                <select name="zoho" class="form-input text-sm py-1.5">
                    <option value="">All</option>
                    <option value="linked" <?= $filterZoho === 'linked' ? 'selected' : '' ?>>Linked</option>
                    <option value="unlinked" <?= $filterZoho === 'unlinked' ? 'selected' : '' ?>>Not Linked</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-filter mr-1"></i>Filter</button>
            <a href="billing_items.php" class="btn btn-secondary btn-sm">Clear</a>
        </form>
    </div>

    <div class="card overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Item Name</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Rate</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Tax</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">HSN/SAC</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Zoho</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php if (empty($items)): ?>
                <tr><td colspan="8" class="px-4 py-12 text-center text-gray-500"><i class="fas fa-box-open text-4xl text-gray-300 mb-3"></i><p>No items found</p></td></tr>
                <?php else: ?>
                <?php foreach ($items as $item): ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <div class="font-medium text-gray-900"><?= htmlspecialchars($item['name']) ?></div>
                        <?php if ($item['description']): ?><div class="text-xs text-gray-500"><?= htmlspecialchars(substr($item['description'], 0, 50)) ?></div><?php endif; ?>
                    </td>
                    <td class="px-4 py-3"><?php if ($item['category_code']): ?><span class="px-2 py-1 text-xs font-medium rounded bg-gray-100 text-gray-700"><?= htmlspecialchars($item['category_code']) ?></span><?php else: ?>-<?php endif; ?></td>
                    <td class="px-4 py-3 text-right font-mono text-sm">₹<?= number_format($item['default_rate'], 2) ?></td>
                    <td class="px-4 py-3 text-center">
                        <?php 
                        // Show actual tax percentage from Zoho or default
                        $taxPct = $item['zoho_tax_percentage'] ?? ($item['is_taxable'] ? 18 : 0);
                        $taxName = $item['zoho_tax_name'] ?? ($item['is_taxable'] ? 'GST 18%' : 'Exempt');
                        if ($item['is_taxable'] || $taxPct > 0): 
                        ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700" title="<?= htmlspecialchars($taxName) ?>">
                            <?= $taxPct ?>% GST
                        </span>
                        <?php else: ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-600">Exempt</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 font-mono text-sm text-gray-600"><?= htmlspecialchars($item['hsn_sac_code']) ?: '-' ?></td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($item['zoho_item_id']): ?>
                        <div class="flex items-center justify-center gap-1">
                            <span class="text-green-600 cursor-pointer" title="Linked: <?= htmlspecialchars($item['zoho_item_name']) ?>&#10;Click to unlink" onclick="unlinkItem(<?= $item['id'] ?>, '<?= htmlspecialchars(addslashes($item['name'])) ?>')"><i class="fas fa-link"></i></span>
                            <button onclick="syncSingleItem(<?= $item['id'] ?>, '<?= htmlspecialchars($item['zoho_item_id']) ?>')" class="text-blue-500 hover:text-blue-700 p-1" title="Refresh from Zoho"><i class="fas fa-sync text-xs"></i></button>
                        </div>
                        <?php else: ?>
                        <span class="text-gray-300 cursor-pointer" title="Click to link to Zoho" onclick="openLinkModal(<?= $item['id'] ?>, '<?= htmlspecialchars(addslashes($item['name'])) ?>')"><i class="fas fa-unlink"></i></span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center"><?= $item['is_active'] ? '<span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">Active</span>' : '<span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-500">Inactive</span>' ?></td>
                    <td class="px-4 py-3 text-right">
                        <button onclick="editItem(<?= htmlspecialchars(json_encode($item)) ?>)" class="text-blue-600 hover:text-blue-800 p-1"><i class="fas fa-edit"></i></button>
                        <?php if (($item['usage_count'] ?? 0) == 0): ?>
                        <button onclick="deleteItem(<?= $item['id'] ?>, '<?= htmlspecialchars(addslashes($item['name'])) ?>')" class="text-red-600 hover:text-red-800 p-1 ml-1"><i class="fas fa-trash"></i></button>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <?php if (count($items) > 0): ?><div class="px-4 py-3 bg-gray-50 border-t border-gray-200 text-sm text-gray-500">Showing <?= count($items) ?> item(s)</div><?php endif; ?>
    </div>
</div>

<!-- Add Modal -->
<div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-lg mx-4">
        <div class="px-6 py-4 border-b border-gray-200"><h3 class="text-lg font-semibold">Add Billing Item</h3></div>
        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="add">
            <div class="p-6 space-y-4 max-h-96 overflow-y-auto">
                <div><label class="form-label">Item Name *</label><input type="text" name="name" class="form-input" required></div>
                <div><label class="form-label">Description</label><input type="text" name="description" class="form-input"></div>
                <div class="grid grid-cols-2 gap-4">
                    <div><label class="form-label">Category</label><select name="category_id" class="form-input"><option value="">-- None --</option><?php foreach ($categories as $cat): ?><option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['code']) ?></option><?php endforeach; ?></select></div>
                    <div><label class="form-label">Default Rate</label><input type="number" name="default_rate" class="form-input" value="0" min="0" step="0.01"></div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div><label class="form-label">Unit</label><select name="unit" class="form-input"><option value="nos">Numbers</option><option value="hrs">Hours</option><option value="months">Months</option></select></div>
                    <div><label class="form-label">HSN/SAC Code</label><input type="text" name="hsn_sac_code" class="form-input" placeholder="e.g., 998231"></div>
                </div>
                <div><label class="flex items-center gap-2"><input type="checkbox" name="is_taxable" class="rounded" checked><span class="text-sm">Taxable (18% GST)</span></label></div>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-lg mx-4">
        <div class="px-6 py-4 border-b border-gray-200"><h3 class="text-lg font-semibold">Edit Item</h3></div>
        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" id="editId">
            <div class="p-6 space-y-4 max-h-[70vh] overflow-y-auto">
                <div><label class="form-label">Item Name *</label><input type="text" name="name" id="editName" class="form-input" required></div>
                <div><label class="form-label">Description</label><input type="text" name="description" id="editDescription" class="form-input"></div>
                <div class="grid grid-cols-2 gap-4">
                    <div><label class="form-label">Category</label><select name="category_id" id="editCategory" class="form-input"><option value="">-- None --</option><?php foreach ($categories as $cat): ?><option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['code']) ?></option><?php endforeach; ?></select></div>
                    <div><label class="form-label">Default Rate</label><input type="number" name="default_rate" id="editRate" class="form-input" min="0" step="0.01"></div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div><label class="form-label">Unit</label><select name="unit" id="editUnit" class="form-input"><option value="nos">Numbers</option><option value="hrs">Hours</option><option value="months">Months</option></select></div>
                    <div><label class="form-label">HSN/SAC Code</label><input type="text" name="hsn_sac_code" id="editHsn" class="form-input"></div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Tax Rate</label>
                        <select name="tax_percentage" id="editTaxPercent" class="form-input" onchange="document.getElementById('editTaxable').checked = this.value > 0">
                            <option value="0">Exempt (0%)</option>
                            <option value="5">GST 5%</option>
                            <option value="12">GST 12%</option>
                            <option value="18">GST 18%</option>
                            <option value="28">GST 28%</option>
                        </select>
                    </div>
                    <div class="flex items-end pb-2">
                        <label class="flex items-center gap-2"><input type="checkbox" name="is_active" id="editActive" class="rounded"><span class="text-sm">Active</span></label>
                    </div>
                </div>
                <input type="hidden" name="is_taxable" id="editTaxable" value="0">
                <div class="border-t pt-4">
                    <p class="text-xs text-gray-500 mb-2">Zoho Mapping</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div><label class="form-label text-xs">Zoho Item ID</label><input type="text" name="zoho_item_id" id="editZohoId" class="form-input text-sm" readonly></div>
                        <div><label class="form-label text-xs">Zoho Tax Name</label><input type="text" name="zoho_tax_name" id="editZohoTaxName" class="form-input text-sm" readonly></div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('editModal').classList.add('hidden')" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<form id="deleteForm" method="POST" class="hidden"><input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" id="deleteId"></form>

<!-- Zoho Sync Modal -->
<div id="zohoSyncModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl mx-4 max-h-[90vh] flex flex-col">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <div>
                <h3 class="text-lg font-semibold">Sync Items from Zoho Books</h3>
                <p class="text-sm text-gray-500">Import new items or update existing ones with latest Zoho data</p>
            </div>
            <button onclick="closeZohoSyncModal()" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
            <div class="flex gap-4 items-center">
                <input type="text" id="zohoSearchInput" class="form-input text-sm py-1.5 w-64" placeholder="Search items..." oninput="renderZohoItems()">
                <select id="zohoFilterStatus" class="form-input text-sm py-1.5" onchange="renderZohoItems()">
                    <option value="all">All Items</option>
                    <option value="unmapped">Not Imported</option>
                    <option value="mapped">Already Imported</option>
                </select>
            </div>
            <div class="flex gap-3 items-center">
                <span id="zohoItemCount" class="text-sm text-gray-500"></span>
                <button onclick="fetchZohoItems()" class="btn btn-secondary btn-sm"><i class="fas fa-refresh mr-1"></i>Refresh</button>
            </div>
        </div>
        <div class="flex-1 overflow-auto" id="zohoItemsContainer">
            <div class="p-8 text-center text-gray-500" id="zohoLoading"><i class="fas fa-spinner fa-spin text-2xl mb-2"></i><p>Loading items from Zoho...</p></div>
            <table class="w-full hidden" id="zohoItemsTable">
                <thead class="bg-gray-50 sticky top-0">
                    <tr>
                        <th class="px-4 py-2 text-left w-10"><input type="checkbox" id="zohoSelectAll" onchange="toggleSelectAll(this)"></th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Item Name</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">SAC</th>
                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase">Rate</th>
                        <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Tax</th>
                        <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody id="zohoItemsBody" class="divide-y divide-gray-200"></tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex justify-between items-center bg-gray-50">
            <div class="flex gap-4 items-center">
                <span id="selectedCount" class="text-sm text-gray-600">0 items selected</span>
                <select id="importCategory" class="form-input text-sm py-1.5">
                    <option value="">No Category</option>
                    <?php foreach ($categories as $cat): ?><option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['code']) ?> - <?= htmlspecialchars($cat['name']) ?></option><?php endforeach; ?>
                </select>
            </div>
            <div class="flex gap-3">
                <button onclick="closeZohoSyncModal()" class="btn btn-secondary">Cancel</button>
                <button onclick="importSelectedItems()" class="btn btn-primary" id="importBtn" disabled><i class="fas fa-download mr-2"></i>Import/Update Selected</button>
            </div>
        </div>
    </div>
</div>

<!-- Link Modal -->
<div id="linkModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="px-6 py-4 border-b border-gray-200"><h3 class="text-lg font-semibold">Link to Zoho Item</h3><p class="text-sm text-gray-500" id="linkItemName"></p></div>
        <div class="p-6">
            <input type="hidden" id="linkPatronId">
            <div><label class="form-label">Search Zoho Items</label><input type="text" id="linkSearchInput" class="form-input" placeholder="Type to search..." oninput="searchZohoForLink(this.value)"></div>
            <div id="linkSearchResults" class="max-h-64 overflow-y-auto border rounded-lg mt-4 hidden"></div>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3"><button onclick="closeLinkModal()" class="btn btn-secondary">Cancel</button></div>
    </div>
</div>

<script>
const csrfToken = '<?= generateCsrfToken() ?>';
let zohoItems = [];
let selectedItems = new Set();

function editItem(item) {
    document.getElementById('editId').value = item.id;
    document.getElementById('editName').value = item.name;
    document.getElementById('editDescription').value = item.description || '';
    document.getElementById('editCategory').value = item.category_id || '';
    document.getElementById('editRate').value = item.default_rate;
    document.getElementById('editUnit').value = item.unit || 'nos';
    document.getElementById('editHsn').value = item.hsn_sac_code || '';
    document.getElementById('editActive').checked = item.is_active == 1;
    document.getElementById('editZohoId').value = item.zoho_item_id || '';
    document.getElementById('editZohoTaxName').value = item.zoho_tax_name || '';
    
    // Set tax percentage dropdown
    const taxPct = item.zoho_tax_percentage || (item.is_taxable == 1 ? 18 : 0);
    document.getElementById('editTaxPercent').value = taxPct;
    document.getElementById('editTaxable').value = taxPct > 0 ? 1 : 0;
    
    document.getElementById('editModal').classList.remove('hidden');
}

function deleteItem(id, name) {
    if (confirm('Delete "' + name + '"?')) {
        document.getElementById('deleteId').value = id;
        document.getElementById('deleteForm').submit();
    }
}

function openZohoSyncModal() {
    document.getElementById('zohoSyncModal').classList.remove('hidden');
    selectedItems.clear();
    updateSelectedCount();
    if (zohoItems.length === 0) fetchZohoItems();
    else renderZohoItems();
}

function closeZohoSyncModal() { document.getElementById('zohoSyncModal').classList.add('hidden'); }

async function fetchZohoItems() {
    document.getElementById('zohoLoading').classList.remove('hidden');
    document.getElementById('zohoItemsTable').classList.add('hidden');
    document.getElementById('zohoLoading').innerHTML = '<i class="fas fa-spinner fa-spin text-2xl mb-2"></i><p>Loading items from Zoho...</p>';
    try {
        const formData = new FormData();
        formData.append('ajax', '1');
        formData.append('action', 'fetch_zoho_items');
        formData.append('csrf_token', csrfToken);
        const response = await fetch('billing_items.php', { method: 'POST', body: formData });
        const data = await response.json();
        if (data.success) {
            zohoItems = data.items;
            renderZohoItems();
            document.getElementById('zohoLoading').classList.add('hidden');
            document.getElementById('zohoItemsTable').classList.remove('hidden');
        } else {
            document.getElementById('zohoLoading').innerHTML = '<i class="fas fa-exclamation-circle text-red-500 text-2xl mb-2"></i><p class="text-red-600">' + (data.error || 'Failed') + '</p>';
        }
    } catch (e) {
        document.getElementById('zohoLoading').innerHTML = '<i class="fas fa-exclamation-circle text-red-500 text-2xl mb-2"></i><p class="text-red-600">Error: ' + e.message + '</p>';
    }
}

function renderZohoItems() {
    const tbody = document.getElementById('zohoItemsBody');
    const search = (document.getElementById('zohoSearchInput').value || '').toLowerCase();
    const filter = document.getElementById('zohoFilterStatus').value;
    let filtered = zohoItems.filter(item => {
        const matchSearch = item.name.toLowerCase().includes(search) || (item.sku || '').toLowerCase().includes(search) || (item.hsn_or_sac || '').includes(search);
        const matchFilter = filter === 'all' || (filter === 'mapped' && item.is_mapped) || (filter === 'unmapped' && !item.is_mapped);
        return matchSearch && matchFilter;
    });
    document.getElementById('zohoItemCount').textContent = filtered.length + ' of ' + zohoItems.length + ' items';
    
    // Show actual tax info from Zoho
    tbody.innerHTML = filtered.map(item => {
        // Debug: show tax_id if present
        let taxDisplay;
        if (item.tax_id && item.tax_percentage > 0) {
            taxDisplay = `<span class="text-green-600 text-xs">${item.tax_name || 'GST'} (${item.tax_percentage}%)</span>`;
        } else if (item.tax_id) {
            taxDisplay = `<span class="text-orange-500 text-xs" title="tax_id: ${item.tax_id}">Has Tax ID</span>`;
        } else {
            taxDisplay = '<span class="text-gray-400 text-xs">Exempt</span>';
        }
        
        const statusBadge = item.is_mapped 
            ? '<span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-700">Update</span>' 
            : '<span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">New</span>';
        
        return `
        <tr class="hover:bg-gray-50 ${item.is_mapped ? 'bg-blue-50' : ''}">
            <td class="px-4 py-2"><input type="checkbox" value="${item.item_id}" ${selectedItems.has(item.item_id) ? 'checked' : ''} onchange="toggleItem('${item.item_id}')"></td>
            <td class="px-4 py-2"><div class="font-medium">${escapeHtml(item.name)}</div>${item.description ? '<div class="text-xs text-gray-500">' + escapeHtml(item.description.substring(0, 60)) + '</div>' : ''}</td>
            <td class="px-4 py-2 text-sm text-gray-600 font-mono">${item.hsn_or_sac || '-'}</td>
            <td class="px-4 py-2 text-right font-mono text-sm">₹${parseFloat(item.rate || 0).toFixed(2)}</td>
            <td class="px-4 py-2 text-center">${taxDisplay}</td>
            <td class="px-4 py-2 text-center">${statusBadge}</td>
        </tr>
    `}).join('');
}

function toggleItem(itemId) {
    if (selectedItems.has(itemId)) selectedItems.delete(itemId);
    else selectedItems.add(itemId);
    updateSelectedCount();
    renderZohoItems();
}

function toggleSelectAll(checkbox) {
    const search = (document.getElementById('zohoSearchInput').value || '').toLowerCase();
    const filter = document.getElementById('zohoFilterStatus').value;
    zohoItems.forEach(item => {
        const matchSearch = item.name.toLowerCase().includes(search);
        const matchFilter = filter === 'all' || (filter === 'mapped' && item.is_mapped) || (filter === 'unmapped' && !item.is_mapped);
        if (matchSearch && matchFilter) {
            if (checkbox.checked) selectedItems.add(item.item_id);
            else selectedItems.delete(item.item_id);
        }
    });
    renderZohoItems();
    updateSelectedCount();
}

function updateSelectedCount() {
    document.getElementById('selectedCount').textContent = selectedItems.size + ' items selected';
    document.getElementById('importBtn').disabled = selectedItems.size === 0;
}

async function importSelectedItems() {
    if (selectedItems.size === 0) return;
    const categoryId = document.getElementById('importCategory').value;
    const itemsToImport = zohoItems.filter(item => selectedItems.has(item.item_id));
    document.getElementById('importBtn').disabled = true;
    document.getElementById('importBtn').innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Importing...';
    try {
        const formData = new FormData();
        formData.append('ajax', '1');
        formData.append('action', 'bulk_import');
        formData.append('csrf_token', csrfToken);
        formData.append('items', JSON.stringify(itemsToImport));
        formData.append('category_id', categoryId);
        const response = await fetch('billing_items.php', { method: 'POST', body: formData });
        const data = await response.json();
        if (data.success) {
            alert(data.message || ('Imported ' + data.imported + ' items. Updated ' + data.updated + ' items.'));
            location.reload();
        } else {
            alert('Error: ' + (data.error || 'Failed'));
            document.getElementById('importBtn').disabled = false;
            document.getElementById('importBtn').innerHTML = '<i class="fas fa-download mr-2"></i>Import/Update Selected';
        }
    } catch (e) {
        alert('Error: ' + e.message);
        document.getElementById('importBtn').disabled = false;
        document.getElementById('importBtn').innerHTML = '<i class="fas fa-download mr-2"></i>Import/Update Selected';
    }
}

// Sync single item from Zoho
async function syncSingleItem(patronId, zohoItemId) {
    if (!confirm('Refresh this item from Zoho Books?')) return;
    
    try {
        const formData = new FormData();
        formData.append('ajax', '1');
        formData.append('action', 'sync_single');
        formData.append('csrf_token', csrfToken);
        formData.append('patron_item_id', patronId);
        formData.append('zoho_item_id', zohoItemId);
        const response = await fetch('billing_items.php', { method: 'POST', body: formData });
        const data = await response.json();
        if (data.success) {
            alert('Item synced successfully!');
            location.reload();
        } else {
            alert('Error: ' + (data.error || 'Failed to sync'));
        }
    } catch (e) {
        alert('Error: ' + e.message);
    }
}

function openLinkModal(patronId, itemName) {
    document.getElementById('linkPatronId').value = patronId;
    document.getElementById('linkItemName').textContent = 'Link "' + itemName + '" to a Zoho item';
    document.getElementById('linkSearchInput').value = '';
    document.getElementById('linkSearchResults').classList.add('hidden');
    document.getElementById('linkModal').classList.remove('hidden');
    if (zohoItems.length === 0) fetchZohoItemsForLink();
}

function closeLinkModal() { document.getElementById('linkModal').classList.add('hidden'); }

async function fetchZohoItemsForLink() {
    try {
        const formData = new FormData();
        formData.append('ajax', '1');
        formData.append('action', 'fetch_zoho_items');
        formData.append('csrf_token', csrfToken);
        const response = await fetch('billing_items.php', { method: 'POST', body: formData });
        const data = await response.json();
        if (data.success) zohoItems = data.items;
    } catch (e) { console.error(e); }
}

let searchTimeout;
function searchZohoForLink(query) {
    clearTimeout(searchTimeout);
    if (query.length < 2) { document.getElementById('linkSearchResults').classList.add('hidden'); return; }
    searchTimeout = setTimeout(() => {
        const results = zohoItems.filter(item => item.name.toLowerCase().includes(query.toLowerCase()) || (item.sku || '').toLowerCase().includes(query.toLowerCase())).slice(0, 10);
        const container = document.getElementById('linkSearchResults');
        container.innerHTML = results.length === 0 ? '<div class="p-3 text-gray-500 text-sm">No matching items</div>' : results.map(item => {
            const taxInfo = item.tax_id ? `${item.tax_name || 'GST'} (${item.tax_percentage || 18}%)` : 'Exempt';
            return `<div class="p-3 hover:bg-gray-50 cursor-pointer border-b last:border-b-0" onclick="linkToZohoItem('${item.item_id}', '${escapeHtml(item.name).replace(/'/g, "\\'")}')">
                <div class="font-medium">${escapeHtml(item.name)}</div>
                <div class="text-xs text-gray-500">₹${parseFloat(item.rate || 0).toFixed(2)} | ${taxInfo} | SAC: ${item.hsn_or_sac || '-'}</div>
            </div>`;
        }).join('');
        container.classList.remove('hidden');
    }, 300);
}

async function linkToZohoItem(zohoItemId, zohoItemName) {
    const patronId = document.getElementById('linkPatronId').value;
    try {
        const formData = new FormData();
        formData.append('ajax', '1');
        formData.append('action', 'link_item');
        formData.append('csrf_token', csrfToken);
        formData.append('patron_item_id', patronId);
        formData.append('zoho_item_id', zohoItemId);
        formData.append('zoho_item_name', zohoItemName);
        const response = await fetch('billing_items.php', { method: 'POST', body: formData });
        const data = await response.json();
        if (data.success) location.reload();
        else alert('Error: ' + (data.error || 'Failed'));
    } catch (e) { alert('Error: ' + e.message); }
}

async function unlinkItem(patronId, itemName) {
    if (!confirm('Unlink "' + itemName + '" from Zoho?')) return;
    try {
        const formData = new FormData();
        formData.append('ajax', '1');
        formData.append('action', 'unlink_item');
        formData.append('csrf_token', csrfToken);
        formData.append('patron_item_id', patronId);
        const response = await fetch('billing_items.php', { method: 'POST', body: formData });
        const data = await response.json();
        if (data.success) location.reload();
        else alert('Error: ' + (data.error || 'Failed'));
    } catch (e) { alert('Error: ' + e.message); }
}

function escapeHtml(text) { const div = document.createElement('div'); div.textContent = text || ''; return div.innerHTML; }
</script>

<?php require_once 'includes/footer.php'; ?>
