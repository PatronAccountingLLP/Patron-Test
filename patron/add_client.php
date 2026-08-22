<?php
/**
 * PATRON - Add New Client (Entity-Aware)
 * Dynamic form that adapts based on entity type selection
 */

require_once 'includes/db.php';
require_once 'includes/entity_type_config.php';
startSession();
requireLogin();

$pageTitle = 'Add New Client';

$errors = [];
$formData = [
    'name' => '',
    'entity_type' => '',
    'pan' => '',
    'gstin' => '',
    'cin' => '',
    'llpin' => '',
    'firm_registration_no' => '',
    'tan' => '',
    'authorized_capital' => '',
    'paid_up_capital' => '',
    'total_contribution' => '',
    'incorporation_date' => '',
    'email' => '',
    'mobile' => '',
    'address' => '',
    'status' => 'active'
];

// Get all entity type configs
$allEntityConfigs = getAllEntityTypeConfigs();

// Entity types with descriptions
$entityTypes = [
    'PROPRIETORSHIP' => ['label' => 'Proprietorship', 'desc' => 'Individual business, simplest form', 'icon' => 'fa-user-tie', 'color' => 'amber'],
    'PARTNERSHIP' => ['label' => 'Partnership Firm', 'desc' => '2+ partners sharing profits', 'icon' => 'fa-users', 'color' => 'purple'],
    'LLP' => ['label' => 'LLP', 'desc' => 'Limited liability for partners', 'icon' => 'fa-handshake', 'color' => 'indigo'],
    'PVT_LTD' => ['label' => 'Private Limited', 'desc' => 'Most common company structure', 'icon' => 'fa-building', 'color' => 'blue'],
    'OPC' => ['label' => 'One Person Company', 'desc' => 'Single person company', 'icon' => 'fa-user-shield', 'color' => 'teal'],
    'HUF' => ['label' => 'HUF', 'desc' => 'Hindu Undivided Family', 'icon' => 'fa-home', 'color' => 'orange'],
];

// Get document types
$documentTypes = [];
try {
    $documentTypes = dbFetchAll("SELECT * FROM document_types WHERE is_active = 1 ORDER BY level, name");
} catch (Exception $e) {}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request. Please try again.';
    } else {
        // Collect form data
        $formData['name'] = sanitize($_POST['name'] ?? '');
        $formData['entity_type'] = sanitize($_POST['entity_type'] ?? '');
        $formData['pan'] = strtoupper(sanitize($_POST['pan'] ?? ''));
        $formData['gstin'] = strtoupper(sanitize($_POST['gstin'] ?? ''));
        $formData['cin'] = strtoupper(sanitize($_POST['cin'] ?? ''));
        $formData['llpin'] = strtoupper(sanitize($_POST['llpin'] ?? ''));
        $formData['firm_registration_no'] = sanitize($_POST['firm_registration_no'] ?? '');
        $formData['tan'] = strtoupper(sanitize($_POST['tan'] ?? ''));
        $formData['authorized_capital'] = sanitize($_POST['authorized_capital'] ?? '');
        $formData['paid_up_capital'] = sanitize($_POST['paid_up_capital'] ?? '');
        $formData['total_contribution'] = sanitize($_POST['total_contribution'] ?? '');
        $formData['incorporation_date'] = sanitize($_POST['incorporation_date'] ?? '');
        $formData['email'] = sanitize($_POST['email'] ?? '');
        $formData['mobile'] = sanitize($_POST['mobile'] ?? '');
        $formData['address'] = sanitize($_POST['address'] ?? '');
        
        // Validation
        if (empty($formData['name'])) $errors[] = 'Business/Client name is required.';
        if (empty($formData['entity_type'])) $errors[] = 'Entity type is required.';
        
        // Entity-specific validation
        $entityConfig = getEntityTypeConfig($formData['entity_type']);
        
        // PAN validation
        if ($formData['pan'] && !preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]$/', $formData['pan'])) {
            $errors[] = 'Invalid PAN format. Expected: ABCDE1234F';
        }
        
        // GSTIN validation
        if ($formData['gstin'] && !preg_match('/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z][0-9A-Z]{3}$/', $formData['gstin'])) {
            $errors[] = 'Invalid GSTIN format.';
        }
        
        // CIN validation for companies
        if (in_array($formData['entity_type'], ['PVT_LTD', 'OPC']) && $formData['cin']) {
            if (!preg_match('/^[UL][0-9]{5}[A-Z]{2}[0-9]{4}[A-Z]{3}[0-9]{6}$/', $formData['cin'])) {
                $errors[] = 'Invalid CIN format.';
            }
        }
        
        // LLPIN validation for LLP
        if ($formData['entity_type'] === 'LLP' && $formData['llpin']) {
            if (!preg_match('/^[A-Z]{3}-[0-9]{4}$/', $formData['llpin'])) {
                $errors[] = 'Invalid LLPIN format. Expected: AAA-1234';
            }
        }
        
        if (empty($errors)) {
            try {
                $portalToken = bin2hex(random_bytes(32));
                
                dbExecute("
                    INSERT INTO clients (
                        entity_type, name, pan, gstin, cin, llpin, firm_registration_no, tan,
                        authorized_capital, paid_up_capital, total_contribution,
                        incorporation_date, email, mobile, address, incorporation_status,
                        portal_token, status, created_at
                    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'DRAFT', ?, 'active', NOW())
                ", [
                    $formData['entity_type'], $formData['name'],
                    $formData['pan'] ?: null, $formData['gstin'] ?: null,
                    $formData['cin'] ?: null, $formData['llpin'] ?: null,
                    $formData['firm_registration_no'] ?: null, $formData['tan'] ?: null,
                    $formData['authorized_capital'] ?: null, $formData['paid_up_capital'] ?: null,
                    $formData['total_contribution'] ?: null, $formData['incorporation_date'] ?: null,
                    $formData['email'] ?: null, $formData['mobile'] ?: null, $formData['address'] ?: null,
                    $portalToken
                ]);
                
                $clientId = dbLastInsertId();
                
                setFlash('success', 'Client created successfully! Add ' . ($entityConfig['person_is_entity'] ? 'proprietor' : 'directors/partners') . ' next.');
                header('Location: view_client.php?id=' . $clientId . '&tab=' . ($entityConfig['person_is_entity'] ? 'overview' : 'people'));
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to create client: ' . $e->getMessage();
            }
        }
    }
}

require_once 'includes/header.php';
?>

<style>
.entity-card { transition: all 0.2s; cursor: pointer; }
.entity-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.entity-card.selected { ring: 2px; }
.field-section { transition: all 0.3s; }
.field-section.hidden { display: none; }
</style>

<div class="mb-6">
    <a href="clients.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Clients
    </a>
</div>

<form method="POST" id="clientForm">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    <input type="hidden" name="entity_type" id="entity_type" value="<?= htmlspecialchars($formData['entity_type']) ?>">
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Step 1: Select Entity Type -->
            <div class="card">
                <div class="p-4 border-b bg-gray-50">
                    <h3 class="font-semibold"><i class="fas fa-building mr-2 text-blue-500"></i>Step 1: Select Entity Type</h3>
                </div>
                <div class="p-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3" id="entityTypeGrid">
                        <?php foreach ($entityTypes as $key => $type): ?>
                        <div class="entity-card p-4 border-2 rounded-xl text-center <?= $formData['entity_type'] === $key ? 'border-' . $type['color'] . '-500 bg-' . $type['color'] . '-50' : 'border-gray-200 hover:border-gray-300' ?>"
                             data-entity="<?= $key ?>"
                             onclick="selectEntityType('<?= $key ?>')">
                            <div class="w-12 h-12 mx-auto mb-2 rounded-full bg-<?= $type['color'] ?>-100 flex items-center justify-center">
                                <i class="fas <?= $type['icon'] ?> text-<?= $type['color'] ?>-600 text-xl"></i>
                            </div>
                            <p class="font-semibold text-sm"><?= $type['label'] ?></p>
                            <p class="text-xs text-gray-500 mt-1"><?= $type['desc'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <?php if (!empty($errors)): ?>
            <div class="card p-4 bg-red-50 border border-red-200">
                <ul class="text-sm text-red-700 space-y-1">
                    <?php foreach ($errors as $error): ?>
                    <li><i class="fas fa-exclamation-circle mr-1"></i> <?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            
            <!-- Step 2: Business Details (shown after entity selection) -->
            <div class="card field-section <?= empty($formData['entity_type']) ? 'hidden' : '' ?>" id="detailsSection">
                <div class="p-4 border-b bg-gray-50">
                    <h3 class="font-semibold"><i class="fas fa-info-circle mr-2 text-green-500"></i>Step 2: <span id="entityTermLabel">Business</span> Details</h3>
                </div>
                <div class="p-6 space-y-6">
                    
                    <!-- Name -->
                    <div>
                        <label class="form-label"><span id="nameLabel">Business</span> Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" class="form-input" required
                               value="<?= htmlspecialchars($formData['name']) ?>"
                               placeholder="Enter name">
                    </div>
                    
                    <!-- Registration Numbers -->
                    <div class="p-4 bg-gray-50 rounded-xl">
                        <h4 class="font-medium text-gray-700 mb-4"><i class="fas fa-id-card mr-2"></i>Registration Numbers</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            
                            <!-- CIN (for PVT_LTD, OPC) -->
                            <div class="field-section" id="cinField">
                                <label class="form-label">CIN (Company Identification Number)</label>
                                <input type="text" name="cin" class="form-input font-mono uppercase text-sm"
                                       value="<?= htmlspecialchars($formData['cin']) ?>"
                                       placeholder="U74999MH2020PTC123456" maxlength="21">
                                <p class="text-xs text-gray-400 mt-1">21 characters for Companies</p>
                            </div>
                            
                            <!-- LLPIN (for LLP) -->
                            <div class="field-section hidden" id="llpinField">
                                <label class="form-label">LLPIN (LLP Identification Number)</label>
                                <input type="text" name="llpin" class="form-input font-mono uppercase"
                                       value="<?= htmlspecialchars($formData['llpin']) ?>"
                                       placeholder="AAA-1234" maxlength="8">
                                <p class="text-xs text-gray-400 mt-1">Format: AAA-1234</p>
                            </div>
                            
                            <!-- Firm Registration (for Partnership) -->
                            <div class="field-section hidden" id="firmRegField">
                                <label class="form-label">Firm Registration Number</label>
                                <input type="text" name="firm_registration_no" class="form-input"
                                       value="<?= htmlspecialchars($formData['firm_registration_no']) ?>"
                                       placeholder="e.g., MH/2020/12345">
                            </div>
                            
                            <!-- PAN -->
                            <div>
                                <label class="form-label"><span id="panLabel">Business</span> PAN</label>
                                <input type="text" name="pan" id="pan" class="form-input font-mono uppercase"
                                       value="<?= htmlspecialchars($formData['pan']) ?>"
                                       placeholder="ABCDE1234F" maxlength="10">
                                <p class="text-xs text-gray-400 mt-1" id="panHint">10 characters</p>
                            </div>
                            
                            <!-- GSTIN -->
                            <div>
                                <label class="form-label">GSTIN</label>
                                <input type="text" name="gstin" id="gstin" class="form-input font-mono uppercase text-sm"
                                       value="<?= htmlspecialchars($formData['gstin']) ?>"
                                       placeholder="27ABCDE1234F1Z5" maxlength="15"
                                       onkeyup="extractPAN()">
                                <p class="text-xs text-gray-400 mt-1">PAN auto-extracts from GSTIN</p>
                            </div>
                            
                            <!-- TAN (for companies) -->
                            <div class="field-section" id="tanField">
                                <label class="form-label">TAN (Tax Deduction Account Number)</label>
                                <input type="text" name="tan" class="form-input font-mono uppercase"
                                       value="<?= htmlspecialchars($formData['tan']) ?>"
                                       placeholder="MUMA12345A" maxlength="10">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Capital Section (for Companies/LLP) -->
                    <div class="p-4 bg-green-50 rounded-xl field-section" id="capitalSection">
                        <h4 class="font-medium text-gray-700 mb-4"><i class="fas fa-rupee-sign mr-2"></i><span id="capitalLabel">Share Capital</span></h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- For Companies -->
                            <div class="field-section" id="authCapitalField">
                                <label class="form-label">Authorized Capital (₹)</label>
                                <input type="number" name="authorized_capital" class="form-input"
                                       value="<?= htmlspecialchars($formData['authorized_capital']) ?>"
                                       placeholder="1000000">
                            </div>
                            <div class="field-section" id="paidCapitalField">
                                <label class="form-label">Paid-up Capital (₹)</label>
                                <input type="number" name="paid_up_capital" class="form-input"
                                       value="<?= htmlspecialchars($formData['paid_up_capital']) ?>"
                                       placeholder="100000">
                            </div>
                            <!-- For LLP/Partnership -->
                            <div class="field-section hidden" id="contributionField">
                                <label class="form-label">Total Contribution (₹)</label>
                                <input type="number" name="total_contribution" class="form-input"
                                       value="<?= htmlspecialchars($formData['total_contribution']) ?>"
                                       placeholder="500000">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Date -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label" id="dateLabel">Incorporation Date</label>
                            <input type="date" name="incorporation_date" class="form-input"
                                   value="<?= htmlspecialchars($formData['incorporation_date']) ?>">
                        </div>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="p-4 bg-blue-50 rounded-xl">
                        <h4 class="font-medium text-gray-700 mb-4"><i class="fas fa-phone mr-2"></i>Contact Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-input"
                                       value="<?= htmlspecialchars($formData['email']) ?>"
                                       placeholder="business@example.com">
                            </div>
                            <div>
                                <label class="form-label">Mobile</label>
                                <input type="tel" name="mobile" class="form-input"
                                       value="<?= htmlspecialchars($formData['mobile']) ?>"
                                       placeholder="+91 98765 43210">
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-input" rows="2"
                                          placeholder="Business address"><?= htmlspecialchars($formData['address']) ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit -->
                    <div class="flex items-center gap-4 pt-4 border-t">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i> Create Client
                        </button>
                        <a href="clients.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Entity Info Card -->
            <div class="card p-4 hidden" id="entityInfoCard">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center" id="entityIconBox">
                        <i class="fas fa-building text-white text-xl" id="entityIcon"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold" id="entityName">Entity Type</h4>
                        <p class="text-sm text-gray-500" id="entityDesc">Select an entity type</p>
                    </div>
                </div>
                
                <div class="space-y-3 text-sm">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-users text-gray-400 w-5"></i>
                        <span id="personsInfo">-</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-id-badge text-gray-400 w-5"></i>
                        <span id="dinInfo">-</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-key text-gray-400 w-5"></i>
                        <span id="dscInfo">-</span>
                    </div>
                </div>
            </div>
            
            <!-- Quick Tips -->
            <div class="card p-4 bg-amber-50 border-amber-200">
                <h4 class="font-semibold text-amber-800 mb-3"><i class="fas fa-lightbulb mr-2"></i>Quick Tips</h4>
                <ul class="text-sm text-amber-700 space-y-2">
                    <li>• Select entity type first to see relevant fields</li>
                    <li>• GSTIN auto-extracts PAN number</li>
                    <li>• You can add documents after creation</li>
                    <li id="tipProprietor" class="hidden">• For Proprietorship, your personal PAN is the business PAN</li>
                </ul>
            </div>
        </div>
    </div>
</form>

<script>
// Entity configurations (from PHP)
const entityConfigs = <?= json_encode($allEntityConfigs) ?>;
const entityTypes = <?= json_encode($entityTypes) ?>;

function selectEntityType(type) {
    // Update hidden field
    document.getElementById('entity_type').value = type;
    
    // Update visual selection
    document.querySelectorAll('.entity-card').forEach(card => {
        card.classList.remove('border-amber-500', 'border-purple-500', 'border-indigo-500', 'border-blue-500', 'border-teal-500', 'border-orange-500', 'bg-amber-50', 'bg-purple-50', 'bg-indigo-50', 'bg-blue-50', 'bg-teal-50', 'bg-orange-50');
        card.classList.add('border-gray-200');
    });
    
    const selectedCard = document.querySelector(`[data-entity="${type}"]`);
    const color = entityTypes[type]?.color || 'blue';
    selectedCard.classList.remove('border-gray-200');
    selectedCard.classList.add(`border-${color}-500`, `bg-${color}-50`);
    
    // Show details section
    document.getElementById('detailsSection').classList.remove('hidden');
    
    // Update form based on entity type
    updateFormForEntity(type);
}

function updateFormForEntity(type) {
    const config = entityConfigs[type];
    if (!config) return;
    
    // Update labels
    const term = config.labels?.entity || 'Business';
    document.getElementById('entityTermLabel').textContent = term;
    document.getElementById('nameLabel').textContent = term;
    document.getElementById('panLabel').textContent = type === 'PROPRIETORSHIP' ? 'Personal' : term;
    
    // Show/hide fields based on entity type
    const cinField = document.getElementById('cinField');
    const llpinField = document.getElementById('llpinField');
    const firmRegField = document.getElementById('firmRegField');
    const tanField = document.getElementById('tanField');
    const capitalSection = document.getElementById('capitalSection');
    const authCapitalField = document.getElementById('authCapitalField');
    const paidCapitalField = document.getElementById('paidCapitalField');
    const contributionField = document.getElementById('contributionField');
    
    // Reset all
    cinField.classList.add('hidden');
    llpinField.classList.add('hidden');
    firmRegField.classList.add('hidden');
    tanField.classList.add('hidden');
    capitalSection.classList.add('hidden');
    authCapitalField.classList.add('hidden');
    paidCapitalField.classList.add('hidden');
    contributionField.classList.add('hidden');
    
    // Show based on type
    if (type === 'PVT_LTD' || type === 'OPC') {
        cinField.classList.remove('hidden');
        tanField.classList.remove('hidden');
        capitalSection.classList.remove('hidden');
        authCapitalField.classList.remove('hidden');
        paidCapitalField.classList.remove('hidden');
        document.getElementById('capitalLabel').textContent = 'Share Capital';
        document.getElementById('dateLabel').textContent = 'Date of Incorporation';
    } else if (type === 'LLP') {
        llpinField.classList.remove('hidden');
        capitalSection.classList.remove('hidden');
        contributionField.classList.remove('hidden');
        document.getElementById('capitalLabel').textContent = 'Total Contribution';
        document.getElementById('dateLabel').textContent = 'Date of Incorporation';
    } else if (type === 'PARTNERSHIP') {
        firmRegField.classList.remove('hidden');
        capitalSection.classList.remove('hidden');
        contributionField.classList.remove('hidden');
        document.getElementById('capitalLabel').textContent = 'Total Capital';
        document.getElementById('dateLabel').textContent = 'Date of Registration';
    } else if (type === 'PROPRIETORSHIP') {
        document.getElementById('dateLabel').textContent = 'Business Start Date';
        document.getElementById('panHint').textContent = 'Personal PAN (same as business)';
    } else if (type === 'HUF') {
        document.getElementById('dateLabel').textContent = 'HUF Formation Date';
    }
    
    // Update sidebar info card
    const infoCard = document.getElementById('entityInfoCard');
    infoCard.classList.remove('hidden');
    
    const color = entityTypes[type]?.color || 'blue';
    document.getElementById('entityIconBox').className = `w-12 h-12 rounded-xl flex items-center justify-center bg-${color}-500`;
    document.getElementById('entityIcon').className = `fas ${entityTypes[type]?.icon || 'fa-building'} text-white text-xl`;
    document.getElementById('entityName').textContent = entityTypes[type]?.label || type;
    document.getElementById('entityDesc').textContent = entityTypes[type]?.desc || '';
    
    // Update requirements
    const minP = config.min_persons || 1;
    const maxP = config.max_persons;
    let personsText = minP === maxP ? `Exactly ${minP} person(s)` : (maxP ? `${minP}-${maxP} persons` : `Min ${minP} persons`);
    document.getElementById('personsInfo').textContent = personsText;
    
    document.getElementById('dinInfo').textContent = config.requires_din ? 'DIN Required' : (config.requires_dpin ? 'DPIN Required' : 'No DIN/DPIN needed');
    document.getElementById('dscInfo').textContent = config.requires_dsc ? 'DSC Required' : 'DSC Not Required';
    
    // Show proprietor tip
    document.getElementById('tipProprietor').classList.toggle('hidden', type !== 'PROPRIETORSHIP');
}

// Extract PAN from GSTIN
function extractPAN() {
    const gstin = document.getElementById('gstin').value.toUpperCase();
    if (gstin.length >= 12) {
        const pan = gstin.substring(2, 12);
        document.getElementById('pan').value = pan;
    }
}

// Initialize if entity type is already selected
document.addEventListener('DOMContentLoaded', function() {
    const selectedType = document.getElementById('entity_type').value;
    if (selectedType) {
        selectEntityType(selectedType);
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>
