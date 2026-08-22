<?php
/**
 * PATRON - New Service Request (Entity-Aware)
 * Shows only services applicable to the client's entity type
 * UPDATED: Support for multiple assignees
 */

require_once 'includes/db.php';
require_once 'includes/entity_type_config.php';
startSession();
requireLogin();

$pageTitle = 'New Service Request';

$errors = [];
$formData = [
    'client_id' => (int)($_GET['client_id'] ?? 0),
    'service_id' => (int)($_GET['service_id'] ?? 0),
    'person_id' => (int)($_GET['person_id'] ?? 0),
    'quoted_price' => '',
    'govt_fee' => '',
    'expected_completion' => '',
    'assigned_to' => [],  // CHANGED: Now an array for multiple assignees
    'priority' => 'NORMAL',
    'notes' => ''
];

// Get client if pre-selected
$client = null;
$entityType = null;
$entityConfig = null;
if ($formData['client_id']) {
    $client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$formData['client_id']]);
    if ($client) {
        $entityType = $client['entity_type'] ?? 'PVT_LTD';
        $entityConfig = getEntityTypeConfig($entityType);
    }
}

// Service applicability by entity type
$serviceApplicability = [
    // Service Code => [applicable entity types] (null = all)
    
    // Incorporation Services
    'PVT_LTD_INCORPORATION' => ['PVT_LTD'],
    'LLP_INCORPORATION' => ['LLP'],
    'OPC_INCORPORATION' => ['OPC'],
    'PARTNERSHIP_REGISTRATION' => ['PARTNERSHIP'],
    'SECTION_8_INCORPORATION' => ['SECTION_8'],
    
    // Company-specific filings
    'ANNUAL_FILING_ROC' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD', 'SECTION_8'],
    'FORM_MGT7' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD'],
    'FORM_AOC4' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD'],
    'DIR3_KYC' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD', 'SECTION_8'],
    'BOARD_RESOLUTION' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD'],
    'SHARE_TRANSFER' => ['PVT_LTD', 'PUBLIC_LTD'],
    'INCREASE_CAPITAL' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD'],
    
    // LLP-specific
    'LLP_ANNUAL_FILING' => ['LLP'],
    'FORM_8' => ['LLP'],
    'FORM_11' => ['LLP'],
    'DPIN_APPLICATION' => ['LLP'],
    'LLP_PARTNER_CHANGE' => ['LLP'],
    
    // Director/Partner changes
    'DIRECTOR_APPOINTMENT' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD'],
    'DIRECTOR_RESIGNATION' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD'],
    'DIN_APPLICATION' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD', 'SECTION_8'],
    'PARTNER_ADDITION' => ['PARTNERSHIP', 'LLP'],
    'PARTNER_RETIREMENT' => ['PARTNERSHIP', 'LLP'],
    
    // Universal services
    'GST_REGISTRATION' => null, // All
    'GST_RETURN_MONTHLY' => null,
    'GST_RETURN_QUARTERLY' => null,
    'GST_ANNUAL_RETURN' => null,
    'GST_CANCELLATION' => null,
    'PAN_APPLICATION' => null,
    'TAN_APPLICATION' => ['PVT_LTD', 'OPC', 'LLP', 'PUBLIC_LTD'],
    'UDYAM_REGISTRATION' => ['PROPRIETORSHIP', 'PARTNERSHIP', 'LLP', 'PVT_LTD', 'OPC'],
    'SHOP_ACT' => ['PROPRIETORSHIP', 'PARTNERSHIP', 'LLP', 'PVT_LTD', 'OPC'],
    'FSSAI_REGISTRATION' => null,
    'IEC_REGISTRATION' => null,
    'TRADEMARK_REGISTRATION' => null,
    'DSC_APPLICATION' => ['PVT_LTD', 'OPC', 'LLP', 'PUBLIC_LTD'],
    
    // ITR Services
    'ITR_INDIVIDUAL' => ['PROPRIETORSHIP', 'INDIVIDUAL'],
    'ITR_COMPANY' => ['PVT_LTD', 'OPC', 'PUBLIC_LTD'],
    'ITR_LLP' => ['LLP'],
    'ITR_PARTNERSHIP' => ['PARTNERSHIP'],
    'ITR_HUF' => ['HUF'],
    
    // Address/Name changes (applicable to entities that can change)
    'ADDRESS_CHANGE' => ['PVT_LTD', 'OPC', 'LLP', 'PUBLIC_LTD'],
    'NAME_CHANGE' => ['PVT_LTD', 'OPC', 'LLP', 'PUBLIC_LTD'],
];

// Get clients for dropdown
$clients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE deleted_at IS NULL AND status = 'active' ORDER BY name");

// Get all services
$allServices = dbFetchAll("SELECT id, code, name, category, base_price, govt_fee, estimated_days FROM services WHERE is_active = 1 AND deleted_at IS NULL ORDER BY category, name") ?: [];

// Filter services by entity type
$services = [];
if ($entityType) {
    foreach ($allServices as $svc) {
        $code = $svc['code'] ?? '';
        $applicable = $serviceApplicability[$code] ?? null;
        
        // If null (universal) or entity type matches
        if ($applicable === null || in_array($entityType, $applicable)) {
            $services[] = $svc;
        }
    }
} else {
    $services = $allServices;
}

// Group services by category
$servicesByCategory = [];
foreach ($services as $svc) {
    $category = $svc['category'] ?? 'OTHER';
    $servicesByCategory[$category][] = $svc;
}

// Get persons for this client (for person-level services)
$persons = [];
if ($client) {
    try {
        $persons = dbFetchAll("
            SELECT cp.id, cp.role_type, p.full_name, p.pan_number
            FROM client_persons cp
            JOIN persons_new p ON cp.person_id = p.id
            WHERE cp.client_id = ? AND cp.is_active = 1
            ORDER BY cp.display_order
        ", [$formData['client_id']]);
    } catch (Exception $e) {
        // Fallback to old structure
        try {
            $persons = dbFetchAll("SELECT id, name as full_name, pan_number, relationship_type as role_type FROM persons WHERE client_id = ? AND deleted_at IS NULL", [$formData['client_id']]);
        } catch (Exception $e2) {}
    }
}

// Get team members for assignment
$teamMembers = [];
try {
    $teamMembers = dbFetchAll("
        SELECT id, display_name
        FROM users 
        WHERE display_name IS NOT NULL AND display_name != ''
        ORDER BY display_name
    ") ?: [];
} catch (Exception $e) {}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $formData['client_id'] = (int)($_POST['client_id'] ?? 0);
        $formData['service_id'] = (int)($_POST['service_id'] ?? 0);
        $formData['person_id'] = (int)($_POST['person_id'] ?? 0) ?: null;
        $formData['quoted_price'] = floatval($_POST['quoted_price'] ?? 0);
        $formData['govt_fee'] = floatval($_POST['govt_fee'] ?? 0);
        $formData['expected_completion'] = sanitize($_POST['expected_completion'] ?? '');
        
        // UPDATED: Handle multiple assignees
        $assignedToArray = $_POST['assigned_to'] ?? [];
        if (!is_array($assignedToArray)) {
            $assignedToArray = $assignedToArray ? [$assignedToArray] : [];
        }
        $formData['assigned_to'] = array_filter(array_map('intval', $assignedToArray));
        
        $formData['priority'] = sanitize($_POST['priority'] ?? 'NORMAL');
        $formData['notes'] = sanitize($_POST['notes'] ?? '');
        
        if (!$formData['client_id']) $errors[] = 'Please select a client.';
        if (!$formData['service_id']) $errors[] = 'Please select a service.';
        
        if (empty($errors)) {
            try {
                // Generate request number
                $year = date('Y');
                $lastRequest = dbFetchOne("SELECT request_number FROM service_requests WHERE request_number LIKE ? ORDER BY id DESC LIMIT 1", ["REQ-$year-%"]);
                $newNum = $lastRequest ? ((int)substr($lastRequest['request_number'], -4) + 1) : 1;
                $requestNumber = sprintf("REQ-%s-%04d", $year, $newNum);
                
                // UPDATED: Status logic for multiple assignees
                $hasAssignees = !empty($formData['assigned_to']);
                $initialStatus = $hasAssignees ? 'ASSIGNED' : 'NEW';
                $formToken = bin2hex(random_bytes(16));
                
                // Primary assignee (first one) for backward compatibility
                $primaryAssignee = $hasAssignees ? $formData['assigned_to'][0] : null;
                
                dbExecute("
                    INSERT INTO service_requests 
                    (request_number, client_id, person_id, service_id, status, priority,
                     quoted_price, govt_fee, expected_completion_date, assigned_to, notes, form_token, created_by)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                ", [
                    $requestNumber, $formData['client_id'], $formData['person_id'], $formData['service_id'],
                    $initialStatus, $formData['priority'], $formData['quoted_price'] ?: null,
                    $formData['govt_fee'] ?: null, $formData['expected_completion'] ?: null,
                    $primaryAssignee, $formData['notes'] ?: null, $formToken, $_SESSION['user_id'] ?? null
                ]);
                
                $requestId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                
                // ADDED: Insert into junction table for multiple assignees
                if ($hasAssignees && $requestId) {
                    $isFirst = true;
                    foreach ($formData['assigned_to'] as $userId) {
                        dbExecute("
                            INSERT INTO service_request_assignees 
                            (service_request_id, user_id, is_primary, assigned_by)
                            VALUES (?, ?, ?, ?)
                        ", [$requestId, $userId, $isFirst ? 1 : 0, $_SESSION['user_id'] ?? null]);
                        $isFirst = false;
                    }
                }
                
                setFlash('success', "Service request {$requestNumber} created successfully.");
                header('Location: view_request.php?id=' . $requestId);
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to create request: ' . $e->getMessage();
            }
        }
    }
}

// Entity display settings
$entityColors = [
    'PROPRIETORSHIP' => 'amber', 'PARTNERSHIP' => 'purple', 'LLP' => 'indigo',
    'PVT_LTD' => 'blue', 'OPC' => 'teal', 'HUF' => 'orange'
];
$entityIcons = [
    'PROPRIETORSHIP' => 'fa-user-tie', 'PARTNERSHIP' => 'fa-users', 'LLP' => 'fa-handshake',
    'PVT_LTD' => 'fa-building', 'OPC' => 'fa-user-shield', 'HUF' => 'fa-home'
];
$currentColor = $entityColors[$entityType] ?? 'gray';
$currentIcon = $entityIcons[$entityType] ?? 'fa-building';

require_once 'includes/header.php';
?>

<div class="mb-6">
    <?php if ($client): ?>
    <a href="view_client.php?id=<?= $formData['client_id'] ?>&tab=services" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to <?= htmlspecialchars($client['name']) ?>
    </a>
    <?php else: ?>
    <a href="requests.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Requests
    </a>
    <?php endif; ?>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2">
        <div class="card">
            <div class="p-6 border-b <?= $client ? 'bg-gradient-to-r from-' . $currentColor . '-50 to-white' : 'bg-gray-50' ?>">
                <div class="flex items-center gap-4">
                    <?php if ($client): ?>
                    <div class="w-12 h-12 bg-<?= $currentColor ?>-500 rounded-xl flex items-center justify-center">
                        <i class="fas <?= $currentIcon ?> text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">New Service Request</h2>
                        <p class="text-sm text-gray-500">for <?= htmlspecialchars($client['name']) ?></p>
                    </div>
                    <?php else: ?>
                    <div class="w-12 h-12 bg-gray-400 rounded-xl flex items-center justify-center">
                        <i class="fas fa-clipboard-list text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">New Service Request</h2>
                        <p class="text-sm text-gray-500">Select a client to begin</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <form method="POST" class="p-6 space-y-6">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                
                <?php if (!empty($errors)): ?>
                <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg">
                    <?php foreach ($errors as $e): ?>
                        <p><i class="fas fa-exclamation-circle mr-1"></i><?= htmlspecialchars($e) ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                
                <!-- Client Selection -->
                <div>
                    <label class="form-label">Client <span class="text-red-500">*</span></label>
                    <?php if ($client): ?>
                    <input type="hidden" name="client_id" value="<?= $formData['client_id'] ?>">
                    <div class="p-4 bg-<?= $currentColor ?>-50 rounded-xl border border-<?= $currentColor ?>-200">
                        <div class="flex items-center gap-3">
                            <i class="fas <?= $currentIcon ?> text-<?= $currentColor ?>-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-<?= $currentColor ?>-900"><?= htmlspecialchars($client['name']) ?></p>
                                <p class="text-xs text-<?= $currentColor ?>-600"><?= $entityConfig['label'] ?? $entityType ?></p>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <select name="client_id" class="form-input" required onchange="if(this.value) window.location='?client_id='+this.value">
                        <option value="">-- Select Client --</option>
                        <?php foreach ($clients as $c): ?>
                        <option value="<?= $c['id'] ?>" <?= $formData['client_id'] == $c['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($c['name']) ?> (<?= $c['entity_type'] ?>)
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <?php endif; ?>
                </div>
                
                <!-- Service Selection -->
                <div>
                    <label class="form-label">Service <span class="text-red-500">*</span></label>
                    <select name="service_id" id="serviceSelect" class="form-input" required onchange="updateServiceInfo()" <?= !$client ? 'disabled' : '' ?>>
                        <option value="">-- Select Service --</option>
                        <?php foreach ($servicesByCategory as $cat => $catServices): ?>
                        <optgroup label="<?= htmlspecialchars($cat) ?>">
                            <?php foreach ($catServices as $svc): ?>
                            <option value="<?= $svc['id'] ?>" 
                                    data-price="<?= $svc['base_price'] ?>" 
                                    data-govt="<?= $svc['govt_fee'] ?>"
                                    data-days="<?= $svc['estimated_days'] ?>"
                                    <?= $formData['service_id'] == $svc['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($svc['name']) ?>
                            </option>
                            <?php endforeach; ?>
                        </optgroup>
                        <?php endforeach; ?>
                    </select>
                    <?php if (!$client): ?>
                    <p class="text-xs text-gray-500 mt-1">Select a client first to see applicable services</p>
                    <?php endif; ?>
                </div>
                
                <!-- Person Selection (if applicable) -->
                <?php if (!empty($persons)): ?>
                <div>
                    <label class="form-label">Person (for person-specific services)</label>
                    <select name="person_id" class="form-input">
                        <option value="">-- Not person-specific --</option>
                        <?php foreach ($persons as $p): ?>
                        <option value="<?= $p['id'] ?>" <?= $formData['person_id'] == $p['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($p['full_name']) ?> 
                            (<?= $p['role_type'] ?>)
                            <?= $p['pan_number'] ? ' - ' . $p['pan_number'] : '' ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php endif; ?>
                
                <!-- Pricing -->
                <div class="p-4 bg-green-50 rounded-xl">
                    <h4 class="font-medium text-gray-700 mb-4"><i class="fas fa-rupee-sign mr-2"></i>Pricing</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="form-label">Professional Fee (₹)</label>
                            <input type="number" name="quoted_price" id="quotedPrice" class="form-input"
                                   value="<?= htmlspecialchars($formData['quoted_price']) ?>" placeholder="0">
                        </div>
                        <div>
                            <label class="form-label">Govt Fee (₹)</label>
                            <input type="number" name="govt_fee" id="govtFee" class="form-input"
                                   value="<?= htmlspecialchars($formData['govt_fee']) ?>" placeholder="0">
                        </div>
                        <div>
                            <label class="form-label">Total</label>
                            <input type="text" id="totalFee" class="form-input bg-gray-100" readonly value="₹0">
                        </div>
                    </div>
                </div>
                
                <!-- Assignment & Priority -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="form-label">
                            Assign To 
                            <span class="text-xs text-gray-400 font-normal">(multiple allowed)</span>
                        </label>
                        <!-- UPDATED: Multiple select for assignees -->
                        <select name="assigned_to[]" id="assignedToSelect" class="form-input" multiple size="4">
                            <?php foreach ($teamMembers as $tm): ?>
                            <option value="<?= $tm['id'] ?>" <?= in_array($tm['id'], (array)$formData['assigned_to']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($tm['display_name']) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <p class="text-xs text-gray-500 mt-1">
                            <i class="fas fa-info-circle"></i> Hold Ctrl/Cmd to select multiple
                        </p>
                    </div>
                    <div>
                        <label class="form-label">Priority</label>
                        <select name="priority" class="form-input">
                            <option value="LOW" <?= $formData['priority'] === 'LOW' ? 'selected' : '' ?>>Low</option>
                            <option value="NORMAL" <?= $formData['priority'] === 'NORMAL' ? 'selected' : '' ?>>Normal</option>
                            <option value="HIGH" <?= $formData['priority'] === 'HIGH' ? 'selected' : '' ?>>High</option>
                            <option value="URGENT" <?= $formData['priority'] === 'URGENT' ? 'selected' : '' ?>>Urgent</option>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Expected Completion</label>
                        <input type="date" name="expected_completion" id="expectedDate" class="form-input"
                               value="<?= htmlspecialchars($formData['expected_completion']) ?>">
                    </div>
                </div>
                
                <!-- Notes -->
                <div>
                    <label class="form-label">Notes / Instructions</label>
                    <textarea name="notes" class="form-input" rows="3" placeholder="Any special instructions..."><?= htmlspecialchars($formData['notes']) ?></textarea>
                </div>
                
                <!-- Submit -->
                <div class="flex items-center gap-4 pt-4 border-t">
                    <button type="submit" class="btn btn-primary" <?= !$client ? 'disabled' : '' ?>>
                        <i class="fas fa-plus mr-2"></i> Create Request
                    </button>
                    <a href="<?= $client ? 'view_client.php?id=' . $formData['client_id'] : 'requests.php' ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <?php if ($client && $entityConfig): ?>
        <!-- Entity Info -->
        <div class="card p-4 bg-<?= $currentColor ?>-50">
            <h4 class="font-semibold text-<?= $currentColor ?>-800 mb-3">
                <i class="fas <?= $currentIcon ?> mr-2"></i><?= $entityConfig['short_label'] ?? $entityType ?>
            </h4>
            <p class="text-sm text-<?= $currentColor ?>-700 font-medium">
                <?= htmlspecialchars($client['name']) ?>
            </p>
            <?php if (!empty($client['gstin'])): ?>
            <p class="text-xs text-<?= $currentColor ?>-600 font-mono mt-1">GST: <?= $client['gstin'] ?></p>
            <?php endif; ?>
        </div>
        
        <!-- Common Services for Entity -->
        <div class="card p-4">
            <h4 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-star mr-2"></i>Popular Services
            </h4>
            <ul class="text-sm space-y-2">
                <?php
                $popularServices = [
                    'PVT_LTD' => ['Annual Filing (ROC)', 'DIR-3 KYC', 'GST Returns', 'ITR Filing'],
                    'LLP' => ['LLP Annual Filing', 'Form 8 & 11', 'GST Returns', 'ITR Filing'],
                    'PARTNERSHIP' => ['GST Registration', 'GST Returns', 'ITR Filing'],
                    'PROPRIETORSHIP' => ['GST Registration', 'Udyam', 'ITR Filing'],
                    'OPC' => ['Annual Filing', 'DIR-3 KYC', 'GST Returns'],
                ];
                $list = $popularServices[$entityType] ?? ['GST Registration', 'ITR Filing'];
                foreach ($list as $svc): ?>
                <li class="flex items-center gap-2 text-gray-600">
                    <i class="fas fa-check-circle text-<?= $currentColor ?>-400"></i>
                    <?= $svc ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        
        <!-- Service Info Card -->
        <div class="card p-4 hidden" id="serviceInfoCard">
            <h4 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-info-circle mr-2"></i>Service Details
            </h4>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between">
                    <span class="text-gray-500">Base Price:</span>
                    <span class="font-medium" id="infoBasePrice">-</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Govt Fee:</span>
                    <span class="font-medium" id="infoGovtFee">-</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Est. Days:</span>
                    <span class="font-medium" id="infoEstDays">-</span>
                </div>
            </div>
        </div>
        
        <!-- Tips -->
        <div class="card p-4 bg-amber-50">
            <h4 class="font-semibold text-amber-800 mb-2"><i class="fas fa-lightbulb mr-2"></i>Tips</h4>
            <ul class="text-sm text-amber-700 space-y-1">
                <li>• Select client first to see applicable services</li>
                <li>• Prices auto-fill from service configuration</li>
                <li>• You can assign multiple team members</li>
                <li>• First selected assignee is the primary</li>
            </ul>
        </div>
    </div>
</div>

<script>
function updateServiceInfo() {
    const select = document.getElementById('serviceSelect');
    const option = select.options[select.selectedIndex];
    const infoCard = document.getElementById('serviceInfoCard');
    
    if (option.value) {
        const price = option.dataset.price || 0;
        const govt = option.dataset.govt || 0;
        const days = option.dataset.days || 0;
        
        document.getElementById('quotedPrice').value = price;
        document.getElementById('govtFee').value = govt;
        document.getElementById('infoBasePrice').textContent = '₹' + Number(price).toLocaleString();
        document.getElementById('infoGovtFee').textContent = '₹' + Number(govt).toLocaleString();
        document.getElementById('infoEstDays').textContent = days + ' days';
        
        // Set expected date
        if (days > 0) {
            const date = new Date();
            date.setDate(date.getDate() + parseInt(days));
            document.getElementById('expectedDate').value = date.toISOString().split('T')[0];
        }
        
        infoCard.classList.remove('hidden');
        updateTotal();
    } else {
        infoCard.classList.add('hidden');
    }
}

function updateTotal() {
    const price = parseFloat(document.getElementById('quotedPrice').value) || 0;
    const govt = parseFloat(document.getElementById('govtFee').value) || 0;
    document.getElementById('totalFee').value = '₹' + (price + govt).toLocaleString();
}

document.getElementById('quotedPrice').addEventListener('input', updateTotal);
document.getElementById('govtFee').addEventListener('input', updateTotal);

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    updateServiceInfo();
});
</script>

<?php require_once 'includes/footer.php'; ?>
