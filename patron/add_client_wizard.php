<?php
/**
 * PATRON - Add Client (Entity) - Wizard Based
 * Supports: Pvt Ltd, LLP, Partnership, OPC, Proprietorship
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$pageTitle = 'Add New Client';
$step = (int)($_GET['step'] ?? 1);
$clientId = (int)($_GET['client_id'] ?? 0);

// Entity types with config
$entityTypes = [
    'PVT_LTD' => ['label' => 'Private Limited Company', 'min_persons' => 2, 'person_role' => 'DIRECTOR'],
    'OPC' => ['label' => 'One Person Company (OPC)', 'min_persons' => 1, 'person_role' => 'DIRECTOR'],
    'LLP' => ['label' => 'Limited Liability Partnership', 'min_persons' => 2, 'person_role' => 'DESIGNATED_PARTNER'],
    'PARTNERSHIP' => ['label' => 'Partnership Firm', 'min_persons' => 2, 'person_role' => 'PARTNER'],
    'PROPRIETORSHIP' => ['label' => 'Proprietorship', 'min_persons' => 1, 'person_role' => 'PROPRIETOR']
];

// Get entity config from DB
$entityConfigs = [];
try {
    $configs = dbFetchAll("SELECT * FROM entity_type_config");
    foreach ($configs as $cfg) {
        $entityConfigs[$cfg['entity_type']] = $cfg;
    }
} catch (Exception $e) {}

$errors = [];
$client = null;

// Load existing client if editing
if ($clientId) {
    $client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
    if (!$client) {
        setFlash('error', 'Client not found.');
        header('Location: clients.php');
        exit;
    }
}

// Indian states
$indianStates = [
    'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat',
    'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh',
    'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab',
    'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh',
    'Uttarakhand', 'West Bengal', 'Delhi', 'Jammu and Kashmir', 'Ladakh',
    'Andaman and Nicobar Islands', 'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu',
    'Lakshadweep', 'Puducherry'
];

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request. Please try again.';
    } else {
        $action = $_POST['action'] ?? '';
        
        // STEP 1: Save Company Details
        if ($action === 'save_company') {
            $data = [
                'entity_type' => sanitize($_POST['entity_type'] ?? ''),
                'name' => sanitize($_POST['name'] ?? ''),
                'proposed_name_1' => sanitize($_POST['proposed_name_1'] ?? ''),
                'proposed_name_2' => sanitize($_POST['proposed_name_2'] ?? ''),
                'business_objects' => sanitize($_POST['business_objects'] ?? ''),
                'authorized_capital' => (float)($_POST['authorized_capital'] ?? 0),
                'paid_up_capital' => (float)($_POST['paid_up_capital'] ?? 0),
                'total_contribution' => (float)($_POST['total_contribution'] ?? 0),
                'email' => sanitize($_POST['email'] ?? ''),
                'mobile' => sanitize($_POST['mobile'] ?? ''),
                'pan' => strtoupper(sanitize($_POST['pan'] ?? '')),
                'gstin' => strtoupper(sanitize($_POST['gstin'] ?? '')),
                'cin' => strtoupper(sanitize($_POST['cin'] ?? '')),
                'llpin' => strtoupper(sanitize($_POST['llpin'] ?? '')),
                'incorporation_date' => sanitize($_POST['incorporation_date'] ?? ''),
                'incorporation_status' => 'DRAFT'
            ];
            
            // Validation
            if (empty($data['entity_type'])) $errors[] = 'Entity type is required.';
            if (empty($data['name']) && empty($data['proposed_name_1'])) $errors[] = 'Company name or proposed name is required.';
            
            if (empty($errors)) {
                // Use proposed name if no official name
                if (empty($data['name']) && !empty($data['proposed_name_1'])) {
                    $data['name'] = $data['proposed_name_1'];
                }
                
                try {
                    if ($clientId) {
                        // Update existing
                        dbExecute("
                            UPDATE clients SET 
                                entity_type = ?, name = ?, proposed_name_1 = ?, proposed_name_2 = ?,
                                business_objects = ?, authorized_capital = ?, paid_up_capital = ?,
                                total_contribution = ?, email = ?, mobile = ?, pan = ?, gstin = ?,
                                cin = ?, llpin = ?, incorporation_date = ?, updated_at = NOW()
                            WHERE id = ?
                        ", [
                            $data['entity_type'], $data['name'], $data['proposed_name_1'], $data['proposed_name_2'],
                            $data['business_objects'], $data['authorized_capital'] ?: null, $data['paid_up_capital'] ?: null,
                            $data['total_contribution'] ?: null, $data['email'], $data['mobile'], $data['pan'] ?: null,
                            $data['gstin'] ?: null, $data['cin'] ?: null, $data['llpin'] ?: null,
                            $data['incorporation_date'] ?: null, $clientId
                        ]);
                    } else {
                        // Generate portal token
                        $portalToken = bin2hex(random_bytes(32));
                        
                        // Insert new
                        dbExecute("
                            INSERT INTO clients (
                                entity_type, name, proposed_name_1, proposed_name_2, business_objects,
                                authorized_capital, paid_up_capital, total_contribution, email, mobile,
                                pan, gstin, cin, llpin, incorporation_date, incorporation_status,
                                portal_token, status, created_at
                            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'DRAFT', ?, 'active', NOW())
                        ", [
                            $data['entity_type'], $data['name'], $data['proposed_name_1'], $data['proposed_name_2'],
                            $data['business_objects'], $data['authorized_capital'] ?: null, $data['paid_up_capital'] ?: null,
                            $data['total_contribution'] ?: null, $data['email'], $data['mobile'], $data['pan'] ?: null,
                            $data['gstin'] ?: null, $data['cin'] ?: null, $data['llpin'] ?: null,
                            $data['incorporation_date'] ?: null, $portalToken
                        ]);
                        
                        $clientId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                    }
                    
                    header('Location: add_client_wizard.php?step=2&client_id=' . $clientId);
                    exit;
                } catch (Exception $e) {
                    $errors[] = 'Database error: ' . $e->getMessage();
                }
            }
        }
        
        // STEP 2: Save Registered Office
        if ($action === 'save_office') {
            $data = [
                'address_line1' => sanitize($_POST['address_line1'] ?? ''),
                'address_line2' => sanitize($_POST['address_line2'] ?? ''),
                'city' => sanitize($_POST['city'] ?? ''),
                'state' => sanitize($_POST['state'] ?? ''),
                'pincode' => sanitize($_POST['pincode'] ?? ''),
                'ownership_type' => sanitize($_POST['ownership_type'] ?? 'RENTED'),
                'owner_name' => sanitize($_POST['owner_name'] ?? ''),
                'owner_pan' => strtoupper(sanitize($_POST['owner_pan'] ?? ''))
            ];
            
            if (empty($data['address_line1'])) $errors[] = 'Address is required.';
            if (empty($data['city'])) $errors[] = 'City is required.';
            if (empty($data['state'])) $errors[] = 'State is required.';
            if (empty($data['pincode'])) $errors[] = 'Pincode is required.';
            
            if (empty($errors)) {
                try {
                    // Check if office exists
                    $existingOffice = dbFetchOne("SELECT id FROM registered_offices WHERE client_id = ?", [$clientId]);
                    
                    if ($existingOffice) {
                        dbExecute("
                            UPDATE registered_offices SET
                                address_line1 = ?, address_line2 = ?, city = ?, state = ?,
                                pincode = ?, ownership_type = ?, owner_name = ?, owner_pan = ?,
                                updated_at = NOW()
                            WHERE client_id = ?
                        ", [
                            $data['address_line1'], $data['address_line2'], $data['city'], $data['state'],
                            $data['pincode'], $data['ownership_type'], $data['owner_name'], $data['owner_pan'],
                            $clientId
                        ]);
                    } else {
                        dbExecute("
                            INSERT INTO registered_offices (
                                client_id, address_line1, address_line2, city, state, pincode,
                                ownership_type, owner_name, owner_pan, created_at
                            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
                        ", [
                            $clientId, $data['address_line1'], $data['address_line2'], $data['city'],
                            $data['state'], $data['pincode'], $data['ownership_type'],
                            $data['owner_name'], $data['owner_pan']
                        ]);
                    }
                    
                    header('Location: add_client_wizard.php?step=3&client_id=' . $clientId);
                    exit;
                } catch (Exception $e) {
                    $errors[] = 'Database error: ' . $e->getMessage();
                }
            }
        }
        
        // STEP 3: Add Person (Director/Partner)
        if ($action === 'add_person') {
            $personId = (int)($_POST['person_id'] ?? 0);
            $roleType = sanitize($_POST['role_type'] ?? '');
            $sharePercentage = (float)($_POST['share_percentage'] ?? 0);
            $noOfShares = (int)($_POST['no_of_shares'] ?? 0);
            $capitalContribution = (float)($_POST['capital_contribution'] ?? 0);
            $profitSharingRatio = (float)($_POST['profit_sharing_ratio'] ?? 0);
            
            if (!$personId) $errors[] = 'Please select a person.';
            if (!$roleType) $errors[] = 'Role type is required.';
            
            if (empty($errors)) {
                try {
                    // Check if already linked
                    $existing = dbFetchOne(
                        "SELECT id FROM client_persons WHERE client_id = ? AND person_id = ?",
                        [$clientId, $personId]
                    );
                    
                    if ($existing) {
                        $errors[] = 'This person is already linked to this entity.';
                    } else {
                        // Get display order
                        $maxOrder = dbFetchOne("SELECT MAX(display_order) as max_order FROM client_persons WHERE client_id = ?", [$clientId]);
                        $displayOrder = ($maxOrder['max_order'] ?? 0) + 1;
                        
                        dbExecute("
                            INSERT INTO client_persons (
                                client_id, person_id, role_type, no_of_shares, share_percentage,
                                capital_contribution, profit_sharing_ratio, display_order, created_at
                            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())
                        ", [
                            $clientId, $personId, $roleType, $noOfShares ?: null, $sharePercentage ?: null,
                            $capitalContribution ?: null, $profitSharingRatio ?: null, $displayOrder
                        ]);
                        
                        setFlash('success', 'Person added successfully.');
                        header('Location: add_client_wizard.php?step=3&client_id=' . $clientId);
                        exit;
                    }
                } catch (Exception $e) {
                    $errors[] = 'Database error: ' . $e->getMessage();
                }
            }
        }
        
        // Remove person
        if ($action === 'remove_person') {
            $linkId = (int)($_POST['link_id'] ?? 0);
            dbExecute("DELETE FROM client_persons WHERE id = ? AND client_id = ?", [$linkId, $clientId]);
            setFlash('success', 'Person removed.');
            header('Location: add_client_wizard.php?step=3&client_id=' . $clientId);
            exit;
        }
        
        // STEP 4: Complete
        if ($action === 'complete') {
            dbExecute("UPDATE clients SET incorporation_status = 'DOCUMENTS_PENDING' WHERE id = ?", [$clientId]);
            setFlash('success', 'Client created successfully! Now collect documents.');
            header('Location: view_client.php?id=' . $clientId);
            exit;
        }
    }
}

// Load client data for steps 2+
if ($clientId && $step > 1) {
    $client = dbFetchOne("SELECT * FROM clients WHERE id = ?", [$clientId]);
    if (!$client) {
        header('Location: add_client_wizard.php');
        exit;
    }
}

// Load office for step 2
$office = null;
if ($clientId && $step >= 2) {
    $office = dbFetchOne("SELECT * FROM registered_offices WHERE client_id = ?", [$clientId]);
}

// Load linked persons for step 3
$linkedPersons = [];
if ($clientId && $step >= 3) {
    $linkedPersons = dbFetchAll("
        SELECT cp.*, p.full_name, p.pan_number, p.din, p.dpin, p.mobile, p.email,
               (SELECT COUNT(*) FROM person_documents WHERE person_id = p.id AND status = 'VERIFIED') as verified_docs
        FROM client_persons cp
        JOIN persons_new p ON cp.person_id = p.id
        WHERE cp.client_id = ?
        ORDER BY cp.display_order
    ", [$clientId]);
}

// Get all persons for dropdown
$allPersons = dbFetchAll("SELECT id, full_name, pan_number, din, dpin, mobile FROM persons_new WHERE deleted_at IS NULL ORDER BY full_name");

require_once 'includes/header.php';
?>

<div class="mb-6">
    <a href="clients.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Clients
    </a>
</div>

<div class="max-w-4xl mx-auto">
    <!-- Progress Steps -->
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <?php 
            $steps = [
                1 => ['label' => 'Entity Details', 'icon' => 'fa-building'],
                2 => ['label' => 'Registered Office', 'icon' => 'fa-map-marker-alt'],
                3 => ['label' => 'Directors/Partners', 'icon' => 'fa-users'],
                4 => ['label' => 'Review', 'icon' => 'fa-check-circle']
            ];
            foreach ($steps as $num => $s):
                $isActive = $step === $num;
                $isCompleted = $step > $num;
            ?>
            <div class="flex-1 <?= $num < 4 ? 'pr-4' : '' ?>">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm
                        <?= $isActive ? 'bg-blue-600 text-white' : ($isCompleted ? 'bg-green-500 text-white' : 'bg-gray-200 text-gray-500') ?>">
                        <?php if ($isCompleted): ?>
                        <i class="fas fa-check"></i>
                        <?php else: ?>
                        <?= $num ?>
                        <?php endif; ?>
                    </div>
                    <?php if ($num < 4): ?>
                    <div class="flex-1 h-1 mx-2 <?= $isCompleted ? 'bg-green-500' : 'bg-gray-200' ?>"></div>
                    <?php endif; ?>
                </div>
                <p class="text-xs mt-2 <?= $isActive ? 'text-blue-600 font-medium' : 'text-gray-500' ?>"><?= $s['label'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <?php if ($errors): ?>
    <div class="card p-4 mb-6 bg-red-50 border border-red-200">
        <ul class="text-red-700 text-sm list-disc list-inside">
            <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
    
    <!-- STEP 1: Entity Details -->
    <?php if ($step === 1): ?>
    <div class="card">
        <div class="p-6 border-b border-gray-200">
            <h1 class="text-xl font-bold text-gray-900">
                <i class="fas fa-building text-blue-500 mr-2"></i>
                Step 1: Entity Details
            </h1>
            <p class="text-sm text-gray-500 mt-1">Basic information about the company/firm</p>
        </div>
        
        <form method="POST" class="p-6">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="save_company">
            
            <!-- Entity Type -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Entity Type *</label>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    <?php foreach ($entityTypes as $type => $config): ?>
                    <label class="relative">
                        <input type="radio" name="entity_type" value="<?= $type ?>" 
                               class="peer sr-only" <?= ($client['entity_type'] ?? '') === $type ? 'checked' : '' ?>
                               onchange="toggleEntityFields()">
                        <div class="p-4 border-2 rounded-xl cursor-pointer transition-all
                                    peer-checked:border-blue-500 peer-checked:bg-blue-50
                                    hover:border-gray-300">
                            <p class="font-medium text-gray-900"><?= $config['label'] ?></p>
                            <p class="text-xs text-gray-500 mt-1">Min <?= $config['min_persons'] ?> <?= str_replace('_', ' ', $config['person_role']) ?>(s)</p>
                        </div>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Proposed Names -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Proposed Name (Option 1) *</label>
                    <input type="text" name="proposed_name_1" value="<?= htmlspecialchars($client['proposed_name_1'] ?? '') ?>" 
                           class="form-input w-full" placeholder="ABC Technologies Private Limited">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Proposed Name (Option 2)</label>
                    <input type="text" name="proposed_name_2" value="<?= htmlspecialchars($client['proposed_name_2'] ?? '') ?>" 
                           class="form-input w-full" placeholder="ABC Tech Solutions Private Limited">
                </div>
            </div>
            
            <!-- Official Name (if incorporated) -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Official Name <span class="text-gray-400">(if already incorporated)</span>
                </label>
                <input type="text" name="name" value="<?= htmlspecialchars($client['name'] ?? '') ?>" 
                       class="form-input w-full">
            </div>
            
            <!-- Business Objects -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">Main Business Objects / Activities</label>
                <textarea name="business_objects" class="form-input w-full" rows="3" 
                          placeholder="IT Services, Software Development, Consulting..."><?= htmlspecialchars($client['business_objects'] ?? '') ?></textarea>
            </div>
            
            <!-- Capital (for Pvt Ltd / OPC) -->
            <div id="capital-section" class="mb-6 p-4 bg-blue-50 rounded-xl hidden">
                <h3 class="font-medium text-gray-900 mb-4">Share Capital</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Authorized Capital (₹)</label>
                        <input type="number" name="authorized_capital" value="<?= $client['authorized_capital'] ?? 1000000 ?>" 
                               class="form-input w-full" min="0" step="1">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Paid-up Capital (₹)</label>
                        <input type="number" name="paid_up_capital" value="<?= $client['paid_up_capital'] ?? 100000 ?>" 
                               class="form-input w-full" min="0" step="1">
                    </div>
                </div>
            </div>
            
            <!-- Contribution (for LLP / Partnership) -->
            <div id="contribution-section" class="mb-6 p-4 bg-purple-50 rounded-xl hidden">
                <h3 class="font-medium text-gray-900 mb-4">Capital Contribution</h3>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Total Contribution (₹)</label>
                    <input type="number" name="total_contribution" value="<?= $client['total_contribution'] ?? 100000 ?>" 
                           class="form-input w-full md:w-1/2" min="0" step="1">
                </div>
            </div>
            
            <!-- Contact -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($client['email'] ?? '') ?>" 
                           class="form-input w-full">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Mobile</label>
                    <input type="tel" name="mobile" value="<?= htmlspecialchars($client['mobile'] ?? '') ?>" 
                           class="form-input w-full" maxlength="10">
                </div>
            </div>
            
            <!-- Registration IDs (if already incorporated) -->
            <div class="mb-6 p-4 bg-gray-50 rounded-xl">
                <h3 class="font-medium text-gray-900 mb-4">Registration Details <span class="text-gray-400 text-sm">(if already incorporated)</span></h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">PAN</label>
                        <input type="text" name="pan" value="<?= htmlspecialchars($client['pan'] ?? '') ?>" 
                               class="form-input w-full uppercase" maxlength="10">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">GSTIN</label>
                        <input type="text" name="gstin" value="<?= htmlspecialchars($client['gstin'] ?? '') ?>" 
                               class="form-input w-full uppercase" maxlength="15">
                    </div>
                    <div id="cin-field">
                        <label class="block text-sm font-medium text-gray-700 mb-1">CIN</label>
                        <input type="text" name="cin" value="<?= htmlspecialchars($client['cin'] ?? '') ?>" 
                               class="form-input w-full uppercase" maxlength="21">
                    </div>
                    <div id="llpin-field" class="hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-1">LLPIN</label>
                        <input type="text" name="llpin" value="<?= htmlspecialchars($client['llpin'] ?? '') ?>" 
                               class="form-input w-full uppercase" maxlength="15">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Incorporation Date</label>
                        <input type="date" name="incorporation_date" value="<?= htmlspecialchars($client['incorporation_date'] ?? '') ?>" 
                               class="form-input w-full">
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end pt-4 border-t border-gray-200">
                <button type="submit" class="btn btn-primary">
                    Next: Registered Office <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </form>
    </div>
    
    <script>
    function toggleEntityFields() {
        const entityType = document.querySelector('input[name="entity_type"]:checked')?.value;
        const capitalSection = document.getElementById('capital-section');
        const contributionSection = document.getElementById('contribution-section');
        const cinField = document.getElementById('cin-field');
        const llpinField = document.getElementById('llpin-field');
        
        // Capital vs Contribution
        if (['PVT_LTD', 'OPC'].includes(entityType)) {
            capitalSection.classList.remove('hidden');
            contributionSection.classList.add('hidden');
        } else if (['LLP', 'PARTNERSHIP'].includes(entityType)) {
            capitalSection.classList.add('hidden');
            contributionSection.classList.remove('hidden');
        } else {
            capitalSection.classList.add('hidden');
            contributionSection.classList.add('hidden');
        }
        
        // CIN vs LLPIN
        if (entityType === 'LLP') {
            cinField.classList.add('hidden');
            llpinField.classList.remove('hidden');
        } else {
            cinField.classList.remove('hidden');
            llpinField.classList.add('hidden');
        }
    }
    
    // Initialize on load
    document.addEventListener('DOMContentLoaded', toggleEntityFields);
    </script>
    <?php endif; ?>
    
    <!-- STEP 2: Registered Office -->
    <?php if ($step === 2 && $client): ?>
    <div class="card">
        <div class="p-6 border-b border-gray-200">
            <h1 class="text-xl font-bold text-gray-900">
                <i class="fas fa-map-marker-alt text-purple-500 mr-2"></i>
                Step 2: Registered Office
            </h1>
            <p class="text-sm text-gray-500 mt-1">Address for <?= htmlspecialchars($client['name']) ?></p>
        </div>
        
        <form method="POST" class="p-6">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="save_office">
            
            <!-- Address -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 1 *</label>
                <input type="text" name="address_line1" value="<?= htmlspecialchars($office['address_line1'] ?? '') ?>" 
                       class="form-input w-full" placeholder="Building Name, Flat/Office No." required>
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 2</label>
                <input type="text" name="address_line2" value="<?= htmlspecialchars($office['address_line2'] ?? '') ?>" 
                       class="form-input w-full" placeholder="Street, Area, Landmark">
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">City *</label>
                    <input type="text" name="city" value="<?= htmlspecialchars($office['city'] ?? '') ?>" 
                           class="form-input w-full" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">State *</label>
                    <select name="state" class="form-input w-full" required>
                        <option value="">Select State...</option>
                        <?php foreach ($indianStates as $state): ?>
                        <option value="<?= $state ?>" <?= ($office['state'] ?? '') === $state ? 'selected' : '' ?>><?= $state ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pincode *</label>
                    <input type="text" name="pincode" value="<?= htmlspecialchars($office['pincode'] ?? '') ?>" 
                           class="form-input w-full" maxlength="6" required>
                </div>
            </div>
            
            <!-- Ownership -->
            <div class="mb-6 p-4 bg-gray-50 rounded-xl">
                <h3 class="font-medium text-gray-900 mb-4">Property Ownership</h3>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Ownership Type *</label>
                    <div class="flex gap-4">
                        <?php foreach (['OWNED' => 'Owned', 'RENTED' => 'Rented', 'LEASED' => 'Leased'] as $type => $label): ?>
                        <label class="flex items-center">
                            <input type="radio" name="ownership_type" value="<?= $type ?>" 
                                   class="mr-2" <?= ($office['ownership_type'] ?? 'RENTED') === $type ? 'checked' : '' ?>>
                            <?= $label ?>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Owner Name</label>
                        <input type="text" name="owner_name" value="<?= htmlspecialchars($office['owner_name'] ?? '') ?>" 
                               class="form-input w-full" placeholder="Property owner's name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Owner PAN</label>
                        <input type="text" name="owner_pan" value="<?= htmlspecialchars($office['owner_pan'] ?? '') ?>" 
                               class="form-input w-full uppercase" maxlength="10">
                    </div>
                </div>
            </div>
            
            <div class="p-4 bg-amber-50 border border-amber-200 rounded-xl mb-6">
                <p class="text-sm text-amber-800">
                    <i class="fas fa-info-circle mr-2"></i>
                    <strong>Required Documents:</strong> NOC from Owner, Utility Bill (< 2 months), 
                    <?= ($office['ownership_type'] ?? 'RENTED') === 'OWNED' ? 'Property Deed/Tax Receipt' : 'Rent Agreement' ?>
                </p>
            </div>
            
            <div class="flex justify-between pt-4 border-t border-gray-200">
                <a href="add_client_wizard.php?step=1&client_id=<?= $clientId ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left mr-2"></i> Back
                </a>
                <button type="submit" class="btn btn-primary">
                    Next: Add Directors/Partners <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </form>
    </div>
    <?php endif; ?>
    
    <!-- STEP 3: Directors/Partners -->
    <?php if ($step === 3 && $client): 
        $entityConfig = $entityConfigs[$client['entity_type']] ?? null;
        $minPersons = $entityConfig['min_directors_partners'] ?? 2;
        $roleType = $entityConfig['primary_role_type'] ?? 'DIRECTOR';
        $roleLabel = str_replace('_', ' ', $roleType);
        $isPvtLtd = in_array($client['entity_type'], ['PVT_LTD', 'OPC']);
        $isLLP = $client['entity_type'] === 'LLP';
        $isPartnership = $client['entity_type'] === 'PARTNERSHIP';
    ?>
    <div class="card">
        <div class="p-6 border-b border-gray-200">
            <h1 class="text-xl font-bold text-gray-900">
                <i class="fas fa-users text-green-500 mr-2"></i>
                Step 3: <?= $roleLabel ?>s
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Add <?= strtolower($roleLabel) ?>s for <?= htmlspecialchars($client['name']) ?>
                <span class="text-blue-600">(Minimum <?= $minPersons ?> required)</span>
            </p>
        </div>
        
        <div class="p-6">
            <!-- Linked Persons -->
            <?php if (!empty($linkedPersons)): ?>
            <div class="mb-6">
                <h3 class="font-medium text-gray-900 mb-4">Added <?= $roleLabel ?>s (<?= count($linkedPersons) ?>)</h3>
                <div class="space-y-3">
                    <?php 
                    $totalShares = array_sum(array_column($linkedPersons, 'share_percentage'));
                    $totalContribution = array_sum(array_column($linkedPersons, 'capital_contribution'));
                    foreach ($linkedPersons as $idx => $lp): 
                    ?>
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold">
                                <?= strtoupper(substr($lp['full_name'], 0, 2)) ?>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900"><?= htmlspecialchars($lp['full_name']) ?></p>
                                <p class="text-sm text-gray-500">
                                    <?= htmlspecialchars($lp['pan_number']) ?>
                                    <?php if ($lp['din']): ?> • DIN: <?= $lp['din'] ?><?php endif; ?>
                                    <?php if ($lp['dpin']): ?> • DPIN: <?= $lp['dpin'] ?><?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <?php if ($isPvtLtd && $lp['share_percentage']): ?>
                            <div class="text-right">
                                <p class="font-bold text-blue-600"><?= $lp['share_percentage'] ?>%</p>
                                <p class="text-xs text-gray-500"><?= number_format($lp['no_of_shares']) ?> shares</p>
                            </div>
                            <?php endif; ?>
                            <?php if (($isLLP || $isPartnership) && $lp['capital_contribution']): ?>
                            <div class="text-right">
                                <p class="font-bold text-purple-600">₹<?= number_format($lp['capital_contribution']) ?></p>
                                <p class="text-xs text-gray-500"><?= $lp['profit_sharing_ratio'] ?>% profit</p>
                            </div>
                            <?php endif; ?>
                            <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">
                                <?= str_replace('_', ' ', $lp['role_type']) ?>
                            </span>
                            <form method="POST" class="inline" onsubmit="return confirm('Remove this person?')">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="action" value="remove_person">
                                <input type="hidden" name="link_id" value="<?= $lp['id'] ?>">
                                <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <?php if ($isPvtLtd): ?>
                <div class="mt-4 p-3 <?= $totalShares == 100 ? 'bg-green-50 border-green-200' : 'bg-amber-50 border-amber-200' ?> border rounded-lg">
                    <p class="text-sm <?= $totalShares == 100 ? 'text-green-700' : 'text-amber-700' ?>">
                        <i class="fas <?= $totalShares == 100 ? 'fa-check-circle' : 'fa-exclamation-circle' ?> mr-2"></i>
                        Total Shareholding: <strong><?= $totalShares ?>%</strong>
                        <?= $totalShares != 100 ? '(Should be 100%)' : '✓' ?>
                    </p>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <!-- Add Person Form -->
            <div class="p-4 border-2 border-dashed border-gray-200 rounded-xl">
                <h3 class="font-medium text-gray-900 mb-4">
                    <i class="fas fa-user-plus text-blue-500 mr-2"></i>
                    Add <?= $roleLabel ?>
                </h3>
                
                <form method="POST">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="add_person">
                    <input type="hidden" name="role_type" value="<?= $roleType ?>">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Select Person *</label>
                            <select name="person_id" class="form-input w-full" required>
                                <option value="">Choose existing or add new...</option>
                                <?php foreach ($allPersons as $p): 
                                    // Skip already linked
                                    if (in_array($p['id'], array_column($linkedPersons, 'person_id'))) continue;
                                ?>
                                <option value="<?= $p['id'] ?>">
                                    <?= htmlspecialchars($p['full_name']) ?> 
                                    (<?= $p['pan_number'] ?>)
                                    <?php if ($p['din']): ?>- DIN: <?= $p['din'] ?><?php endif; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <p class="text-xs text-gray-500 mt-1">
                                <a href="add_person.php" target="_blank" class="text-blue-600 hover:underline">
                                    <i class="fas fa-plus mr-1"></i>Add new person first
                                </a>
                            </p>
                        </div>
                        
                        <?php if ($isPvtLtd): ?>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">No. of Shares</label>
                                <input type="number" name="no_of_shares" class="form-input w-full" min="1" value="1000">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Share %</label>
                                <input type="number" name="share_percentage" class="form-input w-full" min="0" max="100" step="0.01" value="50">
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($isLLP || $isPartnership): ?>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Contribution (₹)</label>
                                <input type="number" name="capital_contribution" class="form-input w-full" min="0" value="50000">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Profit Share %</label>
                                <input type="number" name="profit_sharing_ratio" class="form-input w-full" min="0" max="100" step="0.01" value="50">
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                    <button type="submit" class="btn btn-secondary">
                        <i class="fas fa-plus mr-2"></i> Add <?= $roleLabel ?>
                    </button>
                </form>
            </div>
            
            <!-- Validation -->
            <?php if (count($linkedPersons) < $minPersons): ?>
            <div class="mt-6 p-4 bg-amber-50 border border-amber-200 rounded-xl">
                <p class="text-amber-800">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    Please add at least <strong><?= $minPersons ?> <?= strtolower($roleLabel) ?>(s)</strong> to proceed.
                    Currently: <?= count($linkedPersons) ?>
                </p>
            </div>
            <?php endif; ?>
            
            <div class="flex justify-between pt-6 mt-6 border-t border-gray-200">
                <a href="add_client_wizard.php?step=2&client_id=<?= $clientId ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left mr-2"></i> Back
                </a>
                <?php if (count($linkedPersons) >= $minPersons): ?>
                <a href="add_client_wizard.php?step=4&client_id=<?= $clientId ?>" class="btn btn-primary">
                    Next: Review <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <?php else: ?>
                <button disabled class="btn btn-primary opacity-50 cursor-not-allowed">
                    Next: Review <i class="fas fa-arrow-right ml-2"></i>
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- STEP 4: Review -->
    <?php if ($step === 4 && $client): ?>
    <div class="card">
        <div class="p-6 border-b border-gray-200">
            <h1 class="text-xl font-bold text-gray-900">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                Step 4: Review & Complete
            </h1>
            <p class="text-sm text-gray-500 mt-1">Review all details before completing</p>
        </div>
        
        <div class="p-6">
            <!-- Entity Summary -->
            <div class="mb-6 p-4 bg-blue-50 rounded-xl">
                <h3 class="font-bold text-gray-900 text-lg mb-2"><?= htmlspecialchars($client['name']) ?></h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                    <div>
                        <p class="text-gray-500">Entity Type</p>
                        <p class="font-medium"><?= $entityTypes[$client['entity_type']]['label'] ?? $client['entity_type'] ?></p>
                    </div>
                    <?php if ($client['authorized_capital']): ?>
                    <div>
                        <p class="text-gray-500">Authorized Capital</p>
                        <p class="font-medium">₹<?= number_format($client['authorized_capital']) ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['total_contribution']): ?>
                    <div>
                        <p class="text-gray-500">Total Contribution</p>
                        <p class="font-medium">₹<?= number_format($client['total_contribution']) ?></p>
                    </div>
                    <?php endif; ?>
                    <div>
                        <p class="text-gray-500"><?= $entityTypes[$client['entity_type']]['person_role'] ?? 'Directors' ?>s</p>
                        <p class="font-medium"><?= count($linkedPersons) ?></p>
                    </div>
                </div>
            </div>
            
            <!-- Office Summary -->
            <?php if ($office): ?>
            <div class="mb-6 p-4 bg-gray-50 rounded-xl">
                <h3 class="font-medium text-gray-900 mb-2"><i class="fas fa-map-marker-alt text-purple-500 mr-2"></i>Registered Office</h3>
                <p class="text-gray-700">
                    <?= htmlspecialchars($office['address_line1']) ?><br>
                    <?php if ($office['address_line2']): ?><?= htmlspecialchars($office['address_line2']) ?><br><?php endif; ?>
                    <?= htmlspecialchars($office['city']) ?>, <?= htmlspecialchars($office['state']) ?> - <?= htmlspecialchars($office['pincode']) ?>
                </p>
                <p class="text-sm text-gray-500 mt-1">
                    <?= $office['ownership_type'] ?> property
                    <?php if ($office['owner_name']): ?> • Owner: <?= htmlspecialchars($office['owner_name']) ?><?php endif; ?>
                </p>
            </div>
            <?php endif; ?>
            
            <!-- Persons Summary -->
            <div class="mb-6">
                <h3 class="font-medium text-gray-900 mb-3">
                    <i class="fas fa-users text-green-500 mr-2"></i>
                    <?= $entityTypes[$client['entity_type']]['person_role'] ?? 'Directors' ?>s & Shareholding
                </h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">#</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Name</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">PAN</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">DIN/DPIN</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Role</th>
                                <th class="px-4 py-2 text-right text-xs font-medium text-gray-500">Shareholding/Contribution</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($linkedPersons as $idx => $lp): ?>
                            <tr>
                                <td class="px-4 py-3 text-sm"><?= $idx + 1 ?></td>
                                <td class="px-4 py-3">
                                    <p class="font-medium text-gray-900"><?= htmlspecialchars($lp['full_name']) ?></p>
                                </td>
                                <td class="px-4 py-3 text-sm font-mono"><?= htmlspecialchars($lp['pan_number']) ?></td>
                                <td class="px-4 py-3 text-sm"><?= $lp['din'] ?: $lp['dpin'] ?: '-' ?></td>
                                <td class="px-4 py-3 text-sm"><?= str_replace('_', ' ', $lp['role_type']) ?></td>
                                <td class="px-4 py-3 text-sm text-right">
                                    <?php if ($lp['share_percentage']): ?>
                                    <?= $lp['share_percentage'] ?>% (<?= number_format($lp['no_of_shares']) ?> shares)
                                    <?php elseif ($lp['capital_contribution']): ?>
                                    ₹<?= number_format($lp['capital_contribution']) ?> (<?= $lp['profit_sharing_ratio'] ?>% profit)
                                    <?php else: ?>
                                    -
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Next Steps -->
            <div class="p-4 bg-green-50 border border-green-200 rounded-xl">
                <h3 class="font-medium text-green-800 mb-2"><i class="fas fa-info-circle mr-2"></i>Next Steps After Completion</h3>
                <ul class="text-sm text-green-700 list-disc list-inside space-y-1">
                    <li>Upload KYC documents for each director/partner</li>
                    <li>Upload registered office documents (NOC, Rent Agreement, Utility Bill)</li>
                    <li>Create incorporation service request</li>
                </ul>
            </div>
            
            <form method="POST" class="flex justify-between pt-6 mt-6 border-t border-gray-200">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="complete">
                
                <a href="add_client_wizard.php?step=3&client_id=<?= $clientId ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left mr-2"></i> Back
                </a>
                <button type="submit" class="btn btn-primary bg-green-600 hover:bg-green-700">
                    <i class="fas fa-check mr-2"></i> Complete & Create Client
                </button>
            </form>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
