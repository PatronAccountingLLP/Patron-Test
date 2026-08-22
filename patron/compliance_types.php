<?php
/**
 * PATRON - Compliance Types Master (Enhanced)
 * Admin page to manage recurring compliance definitions
 * Features:
 * - Flexible due date settings for yearly compliances
 * - Entity type selection (working!)
 * - Start work days before due date
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Compliance Types';

// Check if enhanced columns exist
$hasEnhancedColumns = false;
try {
    $cols = dbFetchAll("SHOW COLUMNS FROM compliance_types LIKE 'due_month_absolute'");
    $hasEnhancedColumns = !empty($cols);
} catch (Exception $e) {}

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'add' || $action === 'edit') {
        $id = (int)($_POST['compliance_id'] ?? 0);
        $name = sanitize($_POST['name'] ?? '');
        // Use hidden field as fallback for code (since main field is readOnly during edit)
        $code = strtoupper(sanitize($_POST['code'] ?? ''));
        if (empty($code)) {
            $code = strtoupper(sanitize($_POST['code_hidden'] ?? ''));
        }
        $category = sanitize($_POST['category'] ?? 'OTHER');
        $frequency = sanitize($_POST['frequency'] ?? 'MONTHLY');
        $description = sanitize($_POST['description'] ?? '');
        
        // Entity types - handle as array properly
        $applicableEntities = $_POST['applicable_entities'] ?? [];
        if (!is_array($applicableEntities)) {
            $applicableEntities = [];
        }
        $applicableEntitiesJson = !empty($applicableEntities) ? json_encode(array_values($applicableEntities)) : '[]';
        
        $requiresGstin = isset($_POST['requires_gstin']) ? 1 : 0;
        $requiresTan = isset($_POST['requires_tan']) ? 1 : 0;
        $requiresPan = isset($_POST['requires_pan']) ? 1 : 0;
        
        // Due date settings
        $dueDay = (int)($_POST['due_day'] ?? 20);
        $dueMonthOffset = (int)($_POST['due_month_offset'] ?? 1); // For monthly/quarterly
        $dueMonthAbsolute = null;
        $dueInFollowingFy = 0;
        
        // For yearly, use absolute month settings
        if ($frequency === 'YEARLY' && $hasEnhancedColumns) {
            $dueMonthAbsolute = (int)($_POST['due_month_absolute'] ?? 0) ?: null;
            $dueInFollowingFy = isset($_POST['due_in_following_fy']) ? 1 : 0;
        }
        
        $startDaysBefore = (int)($_POST['start_days_before'] ?? 7);
        
        $lateFeePerDay = (float)($_POST['late_fee_per_day'] ?? 0);
        $maxLateFee = (float)($_POST['max_late_fee'] ?? 0);
        
        $hasPayment = isset($_POST['has_payment']) ? 1 : 0;
        $hasFiling = isset($_POST['has_filing']) ? 1 : 0;
        $requiresClientData = isset($_POST['requires_client_data']) ? 1 : 0;
        
        $icon = sanitize($_POST['icon'] ?? 'fa-file-alt');
        $color = sanitize($_POST['color'] ?? 'blue');
        $isActive = isset($_POST['is_active']) ? 1 : 0;
        
        if ($name && $code) {
            if ($action === 'add') {
                $exists = dbFetchOne("SELECT id FROM compliance_types WHERE code = ? AND deleted_at IS NULL", [$code]);
                if ($exists) {
                    setFlash('error', 'Code already exists.');
                } else {
                    $maxOrder = dbFetchOne("SELECT MAX(sort_order) as m FROM compliance_types");
                    $sortOrder = ($maxOrder['m'] ?? 0) + 1;
                    
                    // Build dynamic insert based on available columns
                    $columns = "name, code, category, frequency, description, applicable_entities, requires_gstin, requires_tan, requires_pan, due_day, due_month_offset, late_fee_per_day, max_late_fee, has_payment, has_filing, requires_client_data, icon, color, sort_order, is_active";
                    $placeholders = "?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?";
                    $values = [$name, $code, $category, $frequency, $description ?: null, $applicableEntitiesJson, $requiresGstin, $requiresTan, $requiresPan, $dueDay, $dueMonthOffset, $lateFeePerDay, $maxLateFee, $hasPayment, $hasFiling, $requiresClientData, $icon, $color, $sortOrder, $isActive];
                    
                    if ($hasEnhancedColumns) {
                        $columns .= ", start_days_before, due_month_absolute, due_in_following_fy";
                        $placeholders .= ", ?, ?, ?";
                        $values[] = $startDaysBefore;
                        $values[] = $dueMonthAbsolute;
                        $values[] = $dueInFollowingFy;
                    }
                    
                    dbExecute("INSERT INTO compliance_types ($columns) VALUES ($placeholders)", $values);
                    setFlash('success', 'Compliance type added successfully.');
                }
            } else {
                // Update
                $setClause = "name = ?, category = ?, frequency = ?, description = ?, applicable_entities = ?, requires_gstin = ?, requires_tan = ?, requires_pan = ?, due_day = ?, due_month_offset = ?, late_fee_per_day = ?, max_late_fee = ?, has_payment = ?, has_filing = ?, requires_client_data = ?, icon = ?, color = ?, is_active = ?";
                $values = [$name, $category, $frequency, $description ?: null, $applicableEntitiesJson, $requiresGstin, $requiresTan, $requiresPan, $dueDay, $dueMonthOffset, $lateFeePerDay, $maxLateFee, $hasPayment, $hasFiling, $requiresClientData, $icon, $color, $isActive];
                
                if ($hasEnhancedColumns) {
                    $setClause .= ", start_days_before = ?, due_month_absolute = ?, due_in_following_fy = ?";
                    $values[] = $startDaysBefore;
                    $values[] = $dueMonthAbsolute;
                    $values[] = $dueInFollowingFy;
                }
                
                $values[] = $id;
                dbExecute("UPDATE compliance_types SET $setClause WHERE id = ?", $values);
                setFlash('success', 'Compliance type updated.');
            }
        } else {
            setFlash('error', 'Name and code are required.');
        }
    }
    
    if ($action === 'delete') {
        $id = (int)($_POST['compliance_id'] ?? 0);
        if ($id) {
            // Check usage
            $usage = dbFetchOne("SELECT COUNT(*) as cnt FROM compliance_tracker WHERE compliance_type_id = ?", [$id]);
            if (($usage['cnt'] ?? 0) > 0) {
                setFlash('error', 'Cannot delete - compliance has tracked entries. Deactivate instead.');
            } else {
                dbExecute("UPDATE compliance_types SET deleted_at = NOW() WHERE id = ?", [$id]);
                setFlash('success', 'Compliance type deleted.');
            }
        }
    }
    
    if ($action === 'toggle') {
        $id = (int)($_POST['compliance_id'] ?? 0);
        if ($id) {
            dbExecute("UPDATE compliance_types SET is_active = NOT is_active WHERE id = ?", [$id]);
            setFlash('success', 'Status updated.');
        }
    }
    
    header('Location: compliance_types.php');
    exit;
}

// Get filter
$filterCategory = sanitize($_GET['category'] ?? '');

// Get all compliance types
$where = "deleted_at IS NULL";
$params = [];
if ($filterCategory) {
    $where .= " AND category = ?";
    $params[] = $filterCategory;
}

$complianceTypes = dbFetchAll("
    SELECT ct.*,
           (SELECT COUNT(*) FROM client_compliances WHERE compliance_type_id = ct.id) as clients_count,
           (SELECT COUNT(*) FROM compliance_tracker WHERE compliance_type_id = ct.id) as entries_count
    FROM compliance_types ct
    WHERE $where
    ORDER BY ct.sort_order, ct.name
", $params) ?: [];

// Stats
$stats = dbFetchOne("SELECT 
    COUNT(*) as total,
    SUM(is_active = 1) as active,
    SUM(category = 'GST') as gst,
    SUM(category = 'TDS') as tds,
    SUM(category = 'INCOME_TAX') as it,
    SUM(category = 'ROC') as roc,
    SUM(category = 'PF_ESI') as pf_esi
FROM compliance_types WHERE deleted_at IS NULL");

$categories = [
    'GST' => ['label' => 'GST', 'color' => 'blue', 'icon' => 'fa-file-invoice'],
    'TDS' => ['label' => 'TDS', 'color' => 'green', 'icon' => 'fa-hand-holding-usd'],
    'INCOME_TAX' => ['label' => 'Income Tax', 'color' => 'amber', 'icon' => 'fa-landmark'],
    'ROC' => ['label' => 'ROC/MCA', 'color' => 'purple', 'icon' => 'fa-building'],
    'PF_ESI' => ['label' => 'PF & ESI', 'color' => 'teal', 'icon' => 'fa-shield-alt'],
    'OTHER' => ['label' => 'Other', 'color' => 'gray', 'icon' => 'fa-file-alt']
];

$frequencies = [
    'MONTHLY' => 'Monthly',
    'QUARTERLY' => 'Quarterly', 
    'HALF_YEARLY' => 'Half Yearly',
    'YEARLY' => 'Yearly',
    'EVENT_BASED' => 'Event Based'
];

$entityTypes = [
    'PVT_LTD' => 'Private Limited',
    'PUBLIC_LTD' => 'Public Limited',
    'OPC' => 'One Person Company',
    'LLP' => 'LLP',
    'PARTNERSHIP' => 'Partnership',
    'PROPRIETORSHIP' => 'Proprietorship',
    'HUF' => 'HUF',
    'TRUST' => 'Trust',
    'SOCIETY' => 'Society',
    'SECTION_8' => 'Section 8 Company'
];

$colors = ['blue', 'green', 'amber', 'purple', 'teal', 'indigo', 'red', 'orange', 'cyan', 'pink'];

$icons = [
    'fa-file-alt' => 'File', 'fa-file-invoice' => 'Invoice', 'fa-file-invoice-dollar' => 'Invoice $',
    'fa-file-contract' => 'Contract', 'fa-file-signature' => 'Signature', 'fa-file-export' => 'Export',
    'fa-hand-holding-usd' => 'Payment', 'fa-money-check' => 'Money Check', 'fa-percentage' => 'Percentage',
    'fa-landmark' => 'Landmark', 'fa-building' => 'Building', 'fa-university' => 'University',
    'fa-shield-alt' => 'Shield', 'fa-hospital' => 'Hospital', 'fa-briefcase' => 'Briefcase',
    'fa-balance-scale' => 'Balance', 'fa-search-dollar' => 'Search $', 'fa-user-tie' => 'Director',
    'fa-id-card' => 'ID Card', 'fa-users' => 'Users', 'fa-globe' => 'Globe', 'fa-truck' => 'Truck'
];

$months = [
    1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
    5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
    9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
];

require_once 'includes/header.php';
?>

<style>
.compliance-card { transition: all 0.2s; border-left: 4px solid transparent; }
.compliance-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.compliance-card.inactive { opacity: 0.5; }
.freq-badge { font-size: 10px; padding: 2px 8px; border-radius: 10px; }
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; }
.modal.show { display: flex; }
.modal-box { background: white; border-radius: 1rem; max-width: 750px; width: 95%; max-height: 90vh; overflow-y: auto; }
.entity-chip { 
    display: inline-flex; 
    align-items: center; 
    gap: 4px; 
    padding: 4px 10px; 
    border-radius: 6px; 
    font-size: 12px; 
    margin: 3px; 
    cursor: pointer; 
    border: 2px solid #e5e7eb; 
    background: #f9fafb;
    transition: all 0.15s;
    user-select: none;
}
.entity-chip:hover { border-color: #93c5fd; background: #eff6ff; }
.entity-chip.selected { 
    background: #dbeafe; 
    border-color: #3b82f6; 
    color: #1d4ed8; 
    font-weight: 500;
}
.entity-chip input { display: none; }
.yearly-options { display: none; }
.yearly-options.show { display: block; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-tasks text-blue-600 mr-2"></i>Compliance Types</h1>
        <p class="text-gray-500 text-sm">Define recurring compliance requirements</p>
    </div>
    <button onclick="openAddModal()" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>Add Compliance Type
    </button>
</div>

<!-- Stats -->
<div class="grid grid-cols-2 md:grid-cols-7 gap-3 mb-6">
    <a href="?" class="card p-3 text-center hover:bg-gray-50 <?= !$filterCategory ? 'ring-2 ring-blue-400' : '' ?>">
        <p class="text-xl font-bold text-gray-700"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">All</p>
    </a>
    <?php foreach (['GST' => 'gst', 'TDS' => 'tds', 'INCOME_TAX' => 'it', 'ROC' => 'roc', 'PF_ESI' => 'pf_esi'] as $cat => $key): ?>
    <a href="?category=<?= $cat ?>" class="card p-3 text-center hover:bg-<?= $categories[$cat]['color'] ?>-50 <?= $filterCategory === $cat ? 'ring-2 ring-'.$categories[$cat]['color'].'-400' : '' ?>">
        <p class="text-xl font-bold text-<?= $categories[$cat]['color'] ?>-600"><?= $stats[$key] ?? 0 ?></p>
        <p class="text-xs text-gray-500"><?= $categories[$cat]['label'] ?></p>
    </a>
    <?php endforeach; ?>
    <div class="card p-3 text-center bg-green-50">
        <p class="text-xl font-bold text-green-600"><?= $stats['active'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Active</p>
    </div>
</div>

<!-- Compliance List -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h2 class="font-semibold"><i class="fas fa-list mr-2"></i>Compliance Types</h2>
        <?php if ($filterCategory): ?>
        <a href="?" class="text-sm text-red-500 hover:underline"><i class="fas fa-times mr-1"></i>Clear Filter</a>
        <?php endif; ?>
    </div>
    
    <?php if (empty($complianceTypes)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-tasks text-4xl text-gray-300 mb-2"></i>
        <p>No compliance types found.</p>
    </div>
    <?php else: ?>
    <div class="divide-y">
        <?php foreach ($complianceTypes as $ct): 
            $catInfo = $categories[$ct['category']] ?? $categories['OTHER'];
            $color = $ct['color'] ?? $catInfo['color'];
            $entities = json_decode($ct['applicable_entities'] ?? '[]', true) ?: [];
            $startDays = $ct['start_days_before'] ?? 7;
        ?>
        <div class="compliance-card p-4 flex items-center gap-4 <?= $ct['is_active'] ? '' : 'inactive' ?>" style="border-left-color: var(--tw-<?= $color ?>-500, #3b82f6);">
            <div class="w-12 h-12 bg-<?= $color ?>-100 text-<?= $color ?>-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <i class="fas <?= $ct['icon'] ?? 'fa-file-alt' ?> text-xl"></i>
            </div>
            
            <div class="flex-1 min-w-0">
                <div class="flex items-center gap-2 flex-wrap">
                    <h3 class="font-semibold text-gray-900"><?= htmlspecialchars($ct['name']) ?></h3>
                    <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-mono"><?= $ct['code'] ?></span>
                    <span class="freq-badge bg-<?= $color ?>-100 text-<?= $color ?>-700"><?= $frequencies[$ct['frequency']] ?? $ct['frequency'] ?></span>
                    <?php if (!$ct['is_active']): ?>
                    <span class="px-2 py-0.5 bg-red-100 text-red-600 rounded text-xs">Inactive</span>
                    <?php endif; ?>
                </div>
                
                <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($ct['description'] ?? '') ?></p>
                
                <div class="flex items-center gap-4 mt-2 text-xs text-gray-500">
                    <?php if ($ct['frequency'] === 'YEARLY' && !empty($ct['due_month_absolute'])): ?>
                    <span><i class="fas fa-calendar mr-1"></i>Due: <?= $ct['due_day'] ?> <?= $months[$ct['due_month_absolute']] ?? '' ?> <?= $ct['due_in_following_fy'] ? '(Following FY)' : '' ?></span>
                    <?php else: ?>
                    <span><i class="fas fa-calendar mr-1"></i>Due: Day <?= $ct['due_day'] ?> (+<?= $ct['due_month_offset'] ?> month)</span>
                    <?php endif; ?>
                    <span><i class="fas fa-play-circle mr-1"></i>Start: <?= $startDays ?> days before</span>
                    <?php if ($ct['requires_gstin']): ?><span class="text-blue-600"><i class="fas fa-check-circle mr-1"></i>GSTIN</span><?php endif; ?>
                    <?php if ($ct['requires_tan']): ?><span class="text-green-600"><i class="fas fa-check-circle mr-1"></i>TAN</span><?php endif; ?>
                    <?php if ($ct['has_payment']): ?><span class="text-amber-600"><i class="fas fa-rupee-sign mr-1"></i>Payment</span><?php endif; ?>
                </div>
                
                <?php if (!empty($entities)): ?>
                <div class="flex flex-wrap gap-1 mt-2">
                    <?php foreach ($entities as $e): ?>
                    <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-[10px]"><?= $entityTypes[$e] ?? $e ?></span>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="mt-2 text-xs text-amber-600"><i class="fas fa-exclamation-triangle mr-1"></i>No entity types selected (applies to all)</div>
                <?php endif; ?>
            </div>
            
            <div class="text-center px-4 flex-shrink-0">
                <p class="text-lg font-bold text-gray-700"><?= $ct['clients_count'] ?? 0 ?></p>
                <p class="text-xs text-gray-400">Clients</p>
            </div>
            
            <div class="flex items-center gap-1 flex-shrink-0">
                <button onclick='openEditModal(<?= json_encode($ct) ?>)' class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="Edit">
                    <i class="fas fa-edit"></i>
                </button>
                <form method="POST" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="toggle">
                    <input type="hidden" name="compliance_id" value="<?= $ct['id'] ?>">
                    <button type="submit" class="p-2 <?= $ct['is_active'] ? 'text-green-600 hover:bg-green-50' : 'text-gray-400 hover:bg-gray-100' ?> rounded-lg" title="<?= $ct['is_active'] ? 'Deactivate' : 'Activate' ?>">
                        <i class="fas <?= $ct['is_active'] ? 'fa-toggle-on' : 'fa-toggle-off' ?>"></i>
                    </button>
                </form>
                <?php if (($ct['entries_count'] ?? 0) == 0): ?>
                <form method="POST" class="inline" onsubmit="return confirm('Delete this compliance type?')">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="compliance_id" value="<?= $ct['id'] ?>">
                    <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" title="Delete">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<!-- Add/Edit Modal -->
<div id="complianceModal" class="modal" onclick="if(event.target===this)closeModal()">
    <div class="modal-box">
        <div class="p-4 border-b bg-blue-50" id="modalHeader">
            <h3 class="text-lg font-bold"><i class="fas fa-tasks text-blue-600 mr-2"></i><span id="modalTitle">Add Compliance Type</span></h3>
        </div>
        <form method="POST" class="p-6 space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" id="form_action" value="add">
            <input type="hidden" name="compliance_id" id="form_id" value="">
            
            <!-- Basic Info -->
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" id="form_name" class="form-input" required placeholder="e.g., GSTR-3B">
                </div>
                <div>
                    <label class="form-label">Code *</label>
                    <input type="text" name="code" id="form_code" class="form-input" required placeholder="e.g., GSTR3B" style="text-transform: uppercase;">
                    <!-- Hidden field to ensure code is submitted even when display field is readonly -->
                    <input type="hidden" name="code_hidden" id="form_code_hidden" value="">
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Category</label>
                    <select name="category" id="form_category" class="form-input">
                        <?php foreach ($categories as $key => $cat): ?>
                        <option value="<?= $key ?>"><?= $cat['label'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Frequency</label>
                    <select name="frequency" id="form_frequency" class="form-input" onchange="toggleYearlyOptions()">
                        <?php foreach ($frequencies as $key => $label): ?>
                        <option value="<?= $key ?>"><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <div>
                <label class="form-label">Description</label>
                <textarea name="description" id="form_description" class="form-input" rows="2" placeholder="Brief description..."></textarea>
            </div>
            
            <!-- Applicable Entities -->
            <div>
                <label class="form-label">Applicable Entity Types</label>
                <div class="flex items-center gap-2 mb-2">
                    <button type="button" onclick="selectAllEntities(true)" class="text-xs text-blue-600 hover:underline">Select All</button>
                    <span class="text-gray-300">|</span>
                    <button type="button" onclick="selectAllEntities(false)" class="text-xs text-blue-600 hover:underline">Deselect All</button>
                </div>
                <div class="flex flex-wrap" id="entity_chips">
                    <?php foreach ($entityTypes as $key => $label): ?>
                    <label class="entity-chip" onclick="toggleEntityChip(this)">
                        <input type="checkbox" name="applicable_entities[]" value="<?= $key ?>">
                        <i class="fas fa-check text-xs hidden"></i>
                        <span><?= $label ?></span>
                    </label>
                    <?php endforeach; ?>
                </div>
                <p class="text-xs text-gray-400 mt-1">If none selected, compliance applies to all entity types</p>
            </div>
            
            <!-- Requirements -->
            <div>
                <label class="form-label">Requirements</label>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="requires_gstin" id="form_requires_gstin" class="rounded">
                        <span>Requires GSTIN</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="requires_tan" id="form_requires_tan" class="rounded">
                        <span>Requires TAN</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="requires_pan" id="form_requires_pan" class="rounded" checked>
                        <span>Requires PAN</span>
                    </label>
                </div>
            </div>
            
            <!-- Due Date Settings - Monthly/Quarterly -->
            <div id="dueDateRegular">
                <label class="form-label">Due Date (for Monthly/Quarterly)</label>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-xs text-gray-500">Day of Month</label>
                        <input type="number" name="due_day" id="form_due_day" class="form-input" min="1" max="31" value="20">
                    </div>
                    <div>
                        <label class="text-xs text-gray-500">Month Offset</label>
                        <select name="due_month_offset" id="form_due_month_offset" class="form-input">
                            <option value="0">Same month</option>
                            <option value="1" selected>Next month</option>
                            <option value="2">2 months later</option>
                            <option value="3">3 months later</option>
                        </select>
                    </div>
                </div>
                <p class="text-xs text-gray-400 mt-1">Example: GSTR-3B is due on 20th of next month</p>
            </div>
            
            <!-- Due Date Settings - Yearly -->
            <div id="dueDateYearly" class="yearly-options bg-amber-50 p-4 rounded-lg border border-amber-200">
                <label class="form-label text-amber-800"><i class="fas fa-calendar-alt mr-1"></i>Yearly Due Date Settings</label>
                <div class="grid grid-cols-3 gap-4 mt-2">
                    <div>
                        <label class="text-xs text-gray-500">Day</label>
                        <input type="number" name="due_day_yearly" id="form_due_day_yearly" class="form-input" min="1" max="31" value="30">
                    </div>
                    <div>
                        <label class="text-xs text-gray-500">Month</label>
                        <select name="due_month_absolute" id="form_due_month_absolute" class="form-input">
                            <option value="">-- Select --</option>
                            <?php foreach ($months as $num => $name): ?>
                            <option value="<?= $num ?>"><?= $name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="text-xs text-gray-500">FY</label>
                        <select name="due_in_following_fy" id="form_due_in_following_fy" class="form-input">
                            <option value="0">Same FY</option>
                            <option value="1" selected>Following FY</option>
                        </select>
                    </div>
                </div>
                <p class="text-xs text-amber-700 mt-2"><i class="fas fa-info-circle mr-1"></i>Example: Director KYC is due 30th September of Following FY (for FY 2024-25, due date is 30 Sep 2025)</p>
            </div>
            
            <!-- Start Days Before -->
            <div>
                <label class="form-label">Start Work (Days Before Due Date)</label>
                <div class="flex items-center gap-3">
                    <input type="number" name="start_days_before" id="form_start_days_before" class="form-input w-24" min="1" value="7">
                    <span class="text-sm text-gray-500">days before due date</span>
                </div>
                <p class="text-xs text-gray-400 mt-1">When should the team start working on this compliance?</p>
            </div>
            
            <!-- Penalty -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Late Fee per Day (₹)</label>
                    <input type="number" name="late_fee_per_day" id="form_late_fee_per_day" class="form-input" step="0.01" value="0">
                </div>
                <div>
                    <label class="form-label">Max Late Fee (₹)</label>
                    <input type="number" name="max_late_fee" id="form_max_late_fee" class="form-input" step="0.01" value="0">
                </div>
            </div>
            
            <!-- Options -->
            <div>
                <label class="form-label">Options</label>
                <div class="flex flex-wrap gap-4 mt-1">
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="has_filing" id="form_has_filing" class="rounded" checked>
                        <span>Has Filing/Return</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="has_payment" id="form_has_payment" class="rounded">
                        <span>Has Payment</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="requires_client_data" id="form_requires_client_data" class="rounded" checked>
                        <span>Requires Client Data</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="is_active" id="form_is_active" class="rounded" checked>
                        <span>Active</span>
                    </label>
                </div>
            </div>
            
            <!-- Display -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Icon</label>
                    <select name="icon" id="form_icon" class="form-input">
                        <?php foreach ($icons as $key => $label): ?>
                        <option value="<?= $key ?>"><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Color</label>
                    <select name="color" id="form_color" class="form-input">
                        <?php foreach ($colors as $c): ?>
                        <option value="<?= $c ?>"><?= ucfirst($c) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <div class="flex gap-3 pt-4 border-t">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Save</button>
                <button type="button" onclick="closeModal()" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function toggleYearlyOptions() {
    const freq = document.getElementById('form_frequency').value;
    const yearlyDiv = document.getElementById('dueDateYearly');
    const regularDiv = document.getElementById('dueDateRegular');
    
    if (freq === 'YEARLY') {
        yearlyDiv.classList.add('show');
        regularDiv.style.display = 'none';
    } else {
        yearlyDiv.classList.remove('show');
        regularDiv.style.display = 'block';
    }
}

function openAddModal() {
    document.getElementById('modalTitle').textContent = 'Add Compliance Type';
    document.getElementById('form_action').value = 'add';
    document.getElementById('form_id').value = '';
    document.getElementById('form_name').value = '';
    document.getElementById('form_code').value = '';
    document.getElementById('form_code').readOnly = false;
    document.getElementById('form_code').classList.remove('bg-gray-100');
    document.getElementById('form_code_hidden').value = '';
    document.getElementById('form_category').value = 'OTHER';
    document.getElementById('form_frequency').value = 'MONTHLY';
    document.getElementById('form_description').value = '';
    document.getElementById('form_due_day').value = '20';
    document.getElementById('form_due_month_offset').value = '1';
    document.getElementById('form_late_fee_per_day').value = '0';
    document.getElementById('form_max_late_fee').value = '0';
    document.getElementById('form_requires_gstin').checked = false;
    document.getElementById('form_requires_tan').checked = false;
    document.getElementById('form_requires_pan').checked = true;
    document.getElementById('form_has_filing').checked = true;
    document.getElementById('form_has_payment').checked = false;
    document.getElementById('form_requires_client_data').checked = true;
    document.getElementById('form_is_active').checked = true;
    document.getElementById('form_icon').value = 'fa-file-alt';
    document.getElementById('form_color').value = 'blue';
    document.getElementById('form_start_days_before').value = 7;
    
    // Yearly settings
    if (document.getElementById('form_due_day_yearly')) {
        document.getElementById('form_due_day_yearly').value = 30;
    }
    if (document.getElementById('form_due_month_absolute')) {
        document.getElementById('form_due_month_absolute').value = '';
    }
    if (document.getElementById('form_due_in_following_fy')) {
        document.getElementById('form_due_in_following_fy').value = '1';
    }
    
    // Reset entity chips
    selectAllEntities(false);
    
    toggleYearlyOptions();
    document.getElementById('complianceModal').classList.add('show');
}

function openEditModal(ct) {
    document.getElementById('modalTitle').textContent = 'Edit: ' + ct.name;
    document.getElementById('form_action').value = 'edit';
    document.getElementById('form_id').value = ct.id;
    document.getElementById('form_name').value = ct.name;
    document.getElementById('form_code').value = ct.code;
    document.getElementById('form_code').readOnly = true; // Use readOnly instead of disabled
    document.getElementById('form_code').classList.add('bg-gray-100');
    document.getElementById('form_code_hidden').value = ct.code; // Set hidden field
    document.getElementById('form_category').value = ct.category;
    document.getElementById('form_frequency').value = ct.frequency;
    document.getElementById('form_description').value = ct.description || '';
    document.getElementById('form_due_day').value = ct.due_day;
    document.getElementById('form_due_month_offset').value = ct.due_month_offset;
    document.getElementById('form_start_days_before').value = ct.start_days_before || 7;
    document.getElementById('form_late_fee_per_day').value = ct.late_fee_per_day || 0;
    document.getElementById('form_max_late_fee').value = ct.max_late_fee || 0;
    document.getElementById('form_requires_gstin').checked = ct.requires_gstin == 1;
    document.getElementById('form_requires_tan').checked = ct.requires_tan == 1;
    document.getElementById('form_requires_pan').checked = ct.requires_pan == 1;
    document.getElementById('form_has_filing').checked = ct.has_filing == 1;
    document.getElementById('form_has_payment').checked = ct.has_payment == 1;
    document.getElementById('form_requires_client_data').checked = ct.requires_client_data == 1;
    document.getElementById('form_is_active').checked = ct.is_active == 1;
    document.getElementById('form_icon').value = ct.icon || 'fa-file-alt';
    document.getElementById('form_color').value = ct.color || 'blue';
    
    // Yearly settings
    if (document.getElementById('form_due_day_yearly')) {
        document.getElementById('form_due_day_yearly').value = ct.due_day || 30;
    }
    if (document.getElementById('form_due_month_absolute')) {
        document.getElementById('form_due_month_absolute').value = ct.due_month_absolute || '';
    }
    if (document.getElementById('form_due_in_following_fy')) {
        document.getElementById('form_due_in_following_fy').value = ct.due_in_following_fy || 0;
    }
    
    // Set entity chips
    let entities = [];
    try {
        entities = JSON.parse(ct.applicable_entities || '[]');
    } catch(e) {
        entities = [];
    }
    
    document.querySelectorAll('#entity_chips .entity-chip').forEach(chip => {
        const input = chip.querySelector('input');
        const checkIcon = chip.querySelector('.fa-check');
        const selected = entities.includes(input.value);
        chip.classList.toggle('selected', selected);
        input.checked = selected;
        if (checkIcon) checkIcon.classList.toggle('hidden', !selected);
    });
    
    toggleYearlyOptions();
    document.getElementById('complianceModal').classList.add('show');
}

function closeModal() {
    document.getElementById('complianceModal').classList.remove('show');
    document.getElementById('form_code').readOnly = false;
    document.getElementById('form_code').classList.remove('bg-gray-100');
    document.getElementById('form_code_hidden').value = '';
}

function toggleEntityChip(chip) {
    const input = chip.querySelector('input');
    const checkIcon = chip.querySelector('.fa-check');
    
    input.checked = !input.checked;
    chip.classList.toggle('selected', input.checked);
    if (checkIcon) checkIcon.classList.toggle('hidden', !input.checked);
}

function selectAllEntities(select) {
    document.querySelectorAll('#entity_chips .entity-chip').forEach(chip => {
        const input = chip.querySelector('input');
        const checkIcon = chip.querySelector('.fa-check');
        
        input.checked = select;
        chip.classList.toggle('selected', select);
        if (checkIcon) checkIcon.classList.toggle('hidden', !select);
    });
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
</script>

<?php require_once 'includes/footer.php'; ?>
