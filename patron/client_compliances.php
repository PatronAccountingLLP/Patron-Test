<?php
/**
 * PATRON - Client Compliance Setup
 * Enable/disable compliances for a specific client
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$clientId = (int)($_GET['client_id'] ?? 0);
if (!$clientId) {
    setFlash('error', 'Client ID required.');
    header('Location: clients.php');
    exit;
}

$client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
if (!$client) {
    setFlash('error', 'Client not found.');
    header('Location: clients.php');
    exit;
}

$pageTitle = 'Compliance Setup - ' . $client['name'];

// Handle POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'save_compliances') {
        $enabledCompliances = $_POST['compliances'] ?? [];
        $assignedTo = $_POST['assigned_to'] ?? [];
        
        // Get all active compliance types
        $allTypes = dbFetchAll("SELECT id FROM compliance_types WHERE is_active = 1 AND deleted_at IS NULL");
        
        foreach ($allTypes as $type) {
            $typeId = $type['id'];
            $isEnabled = in_array($typeId, $enabledCompliances);
            $assignee = (int)($assignedTo[$typeId] ?? 0) ?: null;
            
            $existing = dbFetchOne("SELECT id, is_active FROM client_compliances WHERE client_id = ? AND compliance_type_id = ?", [$clientId, $typeId]);
            
            if ($existing) {
                // Update existing
                dbExecute("UPDATE client_compliances SET is_active = ?, default_assigned_to = ? WHERE id = ?", 
                    [$isEnabled ? 1 : 0, $assignee, $existing['id']]);
            } elseif ($isEnabled) {
                // Insert new
                dbExecute("INSERT INTO client_compliances (client_id, compliance_type_id, is_active, default_assigned_to) VALUES (?, ?, 1, ?)",
                    [$clientId, $typeId, $assignee]);
            }
        }
        
        setFlash('success', 'Compliance settings saved successfully.');
    }
    
    if ($action === 'auto_detect') {
        // Auto-detect applicable compliances based on client data
        $enabled = 0;
        
        $allTypes = dbFetchAll("SELECT * FROM compliance_types WHERE is_active = 1 AND deleted_at IS NULL");
        
        foreach ($allTypes as $type) {
            $shouldEnable = true;
            
            // Check GSTIN requirement
            if ($type['requires_gstin'] && empty($client['gstin'])) {
                $shouldEnable = false;
            }
            
            // Check TAN requirement
            if ($type['requires_tan'] && empty($client['tan'])) {
                $shouldEnable = false;
            }
            
            // Check entity type
            $applicableEntities = json_decode($type['applicable_entities'] ?? '[]', true) ?: [];
            if (!empty($applicableEntities) && !in_array($client['entity_type'], $applicableEntities)) {
                $shouldEnable = false;
            }
            
            if ($shouldEnable) {
                $existing = dbFetchOne("SELECT id FROM client_compliances WHERE client_id = ? AND compliance_type_id = ?", [$clientId, $type['id']]);
                if (!$existing) {
                    dbExecute("INSERT INTO client_compliances (client_id, compliance_type_id, is_active) VALUES (?, ?, 1)", [$clientId, $type['id']]);
                    $enabled++;
                } else {
                    dbExecute("UPDATE client_compliances SET is_active = 1 WHERE id = ?", [$existing['id']]);
                    $enabled++;
                }
            }
        }
        
        setFlash('success', "Auto-detected and enabled $enabled compliance(s) based on client data.");
    }
    
    header("Location: client_compliances.php?client_id=$clientId");
    exit;
}

// Get all compliance types grouped by category
$complianceTypes = dbFetchAll("
    SELECT ct.*, 
           cc.id as mapping_id, cc.is_active as is_enabled, cc.default_assigned_to,
           u.display_name as assigned_name
    FROM compliance_types ct
    LEFT JOIN client_compliances cc ON ct.id = cc.compliance_type_id AND cc.client_id = ?
    LEFT JOIN users u ON cc.default_assigned_to = u.id
    WHERE ct.is_active = 1 AND ct.deleted_at IS NULL
    ORDER BY ct.category, ct.sort_order, ct.name
", [$clientId]) ?: [];

// Group by category
$byCategory = [];
foreach ($complianceTypes as $ct) {
    $byCategory[$ct['category']][] = $ct;
}

// Get team members for assignment
$teamMembers = dbFetchAll("SELECT id, display_name FROM users ORDER BY display_name") ?: [];

// Stats
$enabledCount = count(array_filter($complianceTypes, fn($ct) => $ct['is_enabled']));
$totalCount = count($complianceTypes);

$categories = [
    'GST' => ['label' => 'GST Returns', 'color' => 'blue', 'icon' => 'fa-file-invoice'],
    'TDS' => ['label' => 'TDS Returns', 'color' => 'green', 'icon' => 'fa-hand-holding-usd'],
    'INCOME_TAX' => ['label' => 'Income Tax', 'color' => 'amber', 'icon' => 'fa-landmark'],
    'ROC' => ['label' => 'ROC/MCA Filings', 'color' => 'purple', 'icon' => 'fa-building'],
    'PF_ESI' => ['label' => 'PF & ESI', 'color' => 'teal', 'icon' => 'fa-shield-alt'],
    'OTHER' => ['label' => 'Other Compliances', 'color' => 'gray', 'icon' => 'fa-file-alt']
];

$frequencies = ['MONTHLY' => 'Monthly', 'QUARTERLY' => 'Quarterly', 'HALF_YEARLY' => 'Half Yearly', 'YEARLY' => 'Yearly', 'EVENT_BASED' => 'Event'];

require_once 'includes/header.php';
?>

<style>
.compliance-item { transition: all 0.2s; padding: 12px; border-radius: 8px; border: 1px solid #e5e7eb; }
.compliance-item:hover { border-color: #3b82f6; }
.compliance-item.disabled { opacity: 0.5; background: #f9fafb; }
.compliance-item.enabled { border-color: #10b981; background: #f0fdf4; }
.category-section { margin-bottom: 24px; }
.toggle-switch { position: relative; width: 44px; height: 24px; }
.toggle-switch input { opacity: 0; width: 0; height: 0; }
.toggle-slider { position: absolute; cursor: pointer; inset: 0; background: #cbd5e1; border-radius: 24px; transition: 0.3s; }
.toggle-slider:before { content: ""; position: absolute; height: 18px; width: 18px; left: 3px; bottom: 3px; background: white; border-radius: 50%; transition: 0.3s; }
.toggle-switch input:checked + .toggle-slider { background: #10b981; }
.toggle-switch input:checked + .toggle-slider:before { transform: translateX(20px); }
.requirement-badge { font-size: 9px; padding: 2px 6px; border-radius: 4px; }
</style>

<!-- Breadcrumb -->
<div class="flex items-center gap-2 text-sm text-gray-500 mb-4">
    <a href="clients.php" class="hover:text-blue-600">Clients</a>
    <i class="fas fa-chevron-right text-xs"></i>
    <a href="view_client.php?id=<?= $clientId ?>" class="hover:text-blue-600"><?= htmlspecialchars($client['name']) ?></a>
    <i class="fas fa-chevron-right text-xs"></i>
    <span class="text-gray-700">Compliance Setup</span>
</div>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-clipboard-check text-green-600 mr-2"></i>Compliance Setup</h1>
        <p class="text-gray-500 text-sm"><?= htmlspecialchars($client['name']) ?> - Select applicable recurring compliances</p>
    </div>
    <div class="flex gap-2">
        <form method="POST" class="inline">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="auto_detect">
            <button type="submit" class="btn btn-secondary" title="Auto-detect based on GSTIN, TAN, Entity Type">
                <i class="fas fa-magic mr-2"></i>Auto Detect
            </button>
        </form>
        <a href="compliance_tracker.php?client_id=<?= $clientId ?>" class="btn btn-primary">
            <i class="fas fa-tasks mr-2"></i>View Tracker
        </a>
    </div>
</div>

<!-- Client Info Bar -->
<div class="card p-4 mb-6 bg-gradient-to-r from-gray-50 to-white">
    <div class="flex flex-wrap gap-6 text-sm">
        <div>
            <span class="text-gray-500">Entity Type:</span>
            <span class="font-medium ml-1"><?= $client['entity_type'] ?></span>
        </div>
        <div>
            <span class="text-gray-500">PAN:</span>
            <span class="font-mono ml-1"><?= $client['pan'] ?: '-' ?></span>
        </div>
        <div>
            <span class="text-gray-500">GSTIN:</span>
            <span class="font-mono ml-1 <?= $client['gstin'] ? 'text-blue-600' : 'text-gray-400' ?>"><?= $client['gstin'] ?: 'Not Registered' ?></span>
        </div>
        <div>
            <span class="text-gray-500">TAN:</span>
            <span class="font-mono ml-1 <?= $client['tan'] ? 'text-green-600' : 'text-gray-400' ?>"><?= $client['tan'] ?: 'Not Available' ?></span>
        </div>
        <div class="ml-auto">
            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">
                <?= $enabledCount ?> / <?= $totalCount ?> Enabled
            </span>
        </div>
    </div>
</div>

<form method="POST">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    <input type="hidden" name="action" value="save_compliances">
    
    <?php foreach ($categories as $catKey => $catInfo): ?>
    <?php if (isset($byCategory[$catKey])): ?>
    <div class="category-section">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 bg-<?= $catInfo['color'] ?>-100 text-<?= $catInfo['color'] ?>-600 rounded-lg flex items-center justify-center">
                <i class="fas <?= $catInfo['icon'] ?>"></i>
            </div>
            <div>
                <h2 class="font-semibold text-gray-900"><?= $catInfo['label'] ?></h2>
                <p class="text-xs text-gray-500"><?= count($byCategory[$catKey]) ?> compliance type(s)</p>
            </div>
            <button type="button" onclick="toggleCategory('<?= $catKey ?>', true)" class="ml-auto text-xs text-blue-600 hover:underline">Enable All</button>
            <button type="button" onclick="toggleCategory('<?= $catKey ?>', false)" class="text-xs text-gray-500 hover:underline">Disable All</button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <?php foreach ($byCategory[$catKey] as $ct): 
                $isEnabled = $ct['is_enabled'];
                $meetsRequirements = true;
                $missingReqs = [];
                
                if ($ct['requires_gstin'] && empty($client['gstin'])) {
                    $meetsRequirements = false;
                    $missingReqs[] = 'GSTIN';
                }
                if ($ct['requires_tan'] && empty($client['tan'])) {
                    $meetsRequirements = false;
                    $missingReqs[] = 'TAN';
                }
            ?>
            <div class="compliance-item <?= $isEnabled ? 'enabled' : '' ?> <?= !$meetsRequirements ? 'disabled' : '' ?>" data-category="<?= $catKey ?>">
                <div class="flex items-start gap-3">
                    <label class="toggle-switch mt-1">
                        <input type="checkbox" name="compliances[]" value="<?= $ct['id'] ?>" 
                               <?= $isEnabled ? 'checked' : '' ?> 
                               <?= !$meetsRequirements ? 'disabled' : '' ?>
                               onchange="updateItemStyle(this)">
                        <span class="toggle-slider"></span>
                    </label>
                    
                    <div class="flex-1">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="font-medium text-gray-900"><?= htmlspecialchars($ct['name']) ?></span>
                            <span class="px-2 py-0.5 bg-gray-100 text-gray-500 rounded text-[10px] font-mono"><?= $ct['code'] ?></span>
                            <span class="px-2 py-0.5 bg-<?= $catInfo['color'] ?>-100 text-<?= $catInfo['color'] ?>-700 rounded text-[10px]">
                                <?= $frequencies[$ct['frequency']] ?? $ct['frequency'] ?>
                            </span>
                        </div>
                        
                        <?php if (!empty($missingReqs)): ?>
                        <p class="text-xs text-red-500 mt-1">
                            <i class="fas fa-exclamation-triangle mr-1"></i>
                            Missing: <?= implode(', ', $missingReqs) ?>
                        </p>
                        <?php endif; ?>
                        
                        <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($ct['description'] ?? '') ?></p>
                        
                        <div class="flex items-center gap-2 mt-2">
                            <span class="text-xs text-gray-400">Assign to:</span>
                            <select name="assigned_to[<?= $ct['id'] ?>]" class="text-xs border rounded px-2 py-1">
                                <option value="">Auto / Unassigned</option>
                                <?php foreach ($teamMembers as $tm): ?>
                                <option value="<?= $tm['id'] ?>" <?= $ct['default_assigned_to'] == $tm['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($tm['display_name']) ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="text-right flex-shrink-0">
                        <p class="text-xs text-gray-400">Due: Day <?= $ct['due_day'] ?></p>
                        <?php if ($ct['has_payment']): ?>
                        <span class="requirement-badge bg-amber-100 text-amber-700 mt-1 inline-block">
                            <i class="fas fa-rupee-sign"></i> Payment
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
    
    <!-- Save Button -->
    <div class="sticky bottom-0 bg-white border-t p-4 -mx-6 mt-6 flex justify-between items-center">
        <p class="text-sm text-gray-500">
            <i class="fas fa-info-circle mr-1"></i>
            Enable compliances that apply to this client. Entries will be generated in the tracker.
        </p>
        <div class="flex gap-3">
            <a href="view_client.php?id=<?= $clientId ?>" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-2"></i>Save Settings
            </button>
        </div>
    </div>
</form>

<script>
function updateItemStyle(checkbox) {
    const item = checkbox.closest('.compliance-item');
    item.classList.toggle('enabled', checkbox.checked);
}

function toggleCategory(category, enable) {
    document.querySelectorAll(`.compliance-item[data-category="${category}"] input[type="checkbox"]:not(:disabled)`).forEach(cb => {
        cb.checked = enable;
        updateItemStyle(cb);
    });
}
</script>

<?php require_once 'includes/footer.php'; ?>
