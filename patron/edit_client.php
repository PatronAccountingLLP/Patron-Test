<?php
/**
 * PATRON - Edit Client (Entity-Aware)
 * Dynamic form that adapts based on entity type
 */

require_once 'includes/db.php';
require_once 'includes/entity_type_config.php';
startSession();
requireLogin();

$clientId = (int)($_GET['id'] ?? 0);
if (!$clientId) {
    setFlash('error', 'Client ID is required.');
    header('Location: clients.php');
    exit;
}

$client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
if (!$client) {
    setFlash('error', 'Client not found.');
    header('Location: clients.php');
    exit;
}

$pageTitle = 'Edit: ' . $client['name'];
$errors = [];

// Get entity config
$entityType = $client['entity_type'] ?? 'PVT_LTD';
$entityConfig = getEntityTypeConfig($entityType);
$allEntityConfigs = getAllEntityTypeConfigs();

// Entity types with visual config
$entityTypes = [
    'PROPRIETORSHIP' => ['label' => 'Proprietorship', 'icon' => 'fa-user-tie', 'color' => 'amber'],
    'PARTNERSHIP' => ['label' => 'Partnership Firm', 'icon' => 'fa-users', 'color' => 'purple'],
    'LLP' => ['label' => 'LLP', 'icon' => 'fa-handshake', 'color' => 'indigo'],
    'PVT_LTD' => ['label' => 'Private Limited', 'icon' => 'fa-building', 'color' => 'blue'],
    'OPC' => ['label' => 'One Person Company', 'icon' => 'fa-user-shield', 'color' => 'teal'],
    'HUF' => ['label' => 'HUF', 'icon' => 'fa-home', 'color' => 'orange'],
];

$currentColor = $entityTypes[$entityType]['color'] ?? 'blue';
$currentIcon = $entityTypes[$entityType]['icon'] ?? 'fa-building';

// Entity-specific settings
$isCompany = in_array($entityType, ['PVT_LTD', 'OPC']);
$isLLP = ($entityType === 'LLP');
$isPartnership = ($entityType === 'PARTNERSHIP');
$isProprietorship = ($entityType === 'PROPRIETORSHIP');
$showCapital = in_array($entityType, ['PVT_LTD', 'OPC', 'LLP', 'PARTNERSHIP']);

// Labels based on entity type
$labels = [
    'entity_term' => $isProprietorship ? 'Business' : ($isPartnership ? 'Firm' : ($isLLP ? 'LLP' : 'Company')),
    'pan_label' => $isProprietorship ? 'Personal PAN (Business PAN)' : ($isLLP ? 'LLP PAN' : ($isPartnership ? 'Firm PAN' : 'Company PAN')),
    'date_label' => $isProprietorship ? 'Business Start Date' : ($isPartnership ? 'Registration Date' : 'Incorporation Date'),
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        // SECURITY: Handle delete via POST (not GET)
        if (isset($_POST['action']) && $_POST['action'] === 'delete') {
            dbExecute("UPDATE clients SET deleted_at = NOW() WHERE id = ?", [$clientId]);
            logActivity('DELETE', 'CLIENT', $clientId, ['name' => $client['name']], null);
            setFlash('success', 'Client deleted successfully.');
            header('Location: clients.php');
            exit;
        }
        
        // Collect form data
        $client['name'] = sanitize($_POST['name'] ?? '');
        $client['entity_type'] = sanitize($_POST['entity_type'] ?? '');
        $client['pan'] = strtoupper(sanitize($_POST['pan'] ?? ''));
        $client['gstin'] = strtoupper(sanitize($_POST['gstin'] ?? ''));
        $client['cin'] = strtoupper(sanitize($_POST['cin'] ?? ''));
        $client['llpin'] = strtoupper(sanitize($_POST['llpin'] ?? ''));
        $client['firm_registration_no'] = sanitize($_POST['firm_registration_no'] ?? '');
        $client['tan'] = strtoupper(sanitize($_POST['tan'] ?? ''));
        $client['authorized_capital'] = sanitize($_POST['authorized_capital'] ?? '');
        $client['paid_up_capital'] = sanitize($_POST['paid_up_capital'] ?? '');
        $client['total_contribution'] = sanitize($_POST['total_contribution'] ?? '');
        $client['incorporation_date'] = sanitize($_POST['incorporation_date'] ?? '');
        $client['email'] = sanitize($_POST['email'] ?? '');
        $client['mobile'] = sanitize($_POST['mobile'] ?? '');
        $client['address'] = sanitize($_POST['address'] ?? '');
        $client['status'] = sanitize($_POST['status'] ?? 'active');
        $client['incorporation_status'] = sanitize($_POST['incorporation_status'] ?? 'DRAFT');
        
        // Validation
        if (empty($client['name'])) $errors[] = 'Client name is required.';
        if (empty($client['entity_type'])) $errors[] = 'Entity type is required.';
        
        if ($client['pan'] && !preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]$/', $client['pan'])) {
            $errors[] = 'Invalid PAN format.';
        }
        
        if ($client['gstin'] && !preg_match('/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z][0-9A-Z]{3}$/', $client['gstin'])) {
            $errors[] = 'Invalid GSTIN format.';
        }
        
        // Check duplicates (excluding current)
        if ($client['pan']) {
            $existing = dbFetchOne("SELECT id FROM clients WHERE pan = ? AND id != ? AND deleted_at IS NULL", [$client['pan'], $clientId]);
            if ($existing) $errors[] = 'A client with this PAN already exists.';
        }
        
        if ($client['gstin']) {
            $existing = dbFetchOne("SELECT id FROM clients WHERE gstin = ? AND id != ? AND deleted_at IS NULL", [$client['gstin'], $clientId]);
            if ($existing) $errors[] = 'A client with this GSTIN already exists.';
        }
        
        if (empty($errors)) {
            try {
                dbExecute("
                    UPDATE clients SET 
                        name = ?, entity_type = ?, pan = ?, gstin = ?, cin = ?, llpin = ?,
                        firm_registration_no = ?, tan = ?, authorized_capital = ?, paid_up_capital = ?,
                        total_contribution = ?, incorporation_date = ?, email = ?, mobile = ?, 
                        address = ?, status = ?, incorporation_status = ?, updated_at = NOW()
                    WHERE id = ?
                ", [
                    $client['name'], $client['entity_type'],
                    $client['pan'] ?: null, $client['gstin'] ?: null,
                    $client['cin'] ?: null, $client['llpin'] ?: null,
                    $client['firm_registration_no'] ?: null, $client['tan'] ?: null,
                    $client['authorized_capital'] ?: null, $client['paid_up_capital'] ?: null,
                    $client['total_contribution'] ?: null, $client['incorporation_date'] ?: null,
                    $client['email'] ?: null, $client['mobile'] ?: null,
                    $client['address'] ?: null, $client['status'], $client['incorporation_status'],
                    $clientId
                ]);
                
                setFlash('success', 'Client updated successfully.');
                header('Location: view_client.php?id=' . $clientId);
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to update client: ' . $e->getMessage();
            }
        }
    }
}

require_once 'includes/header.php';
?>

<div class="mb-6 flex items-center justify-between">
    <a href="view_client.php?id=<?= $clientId ?>" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to <?= htmlspecialchars($client['name']) ?>
    </a>
</div>

<form method="POST">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Header -->
            <div class="card">
                <div class="p-6 border-b bg-gradient-to-r from-<?= $currentColor ?>-50 to-white">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-<?= $currentColor ?>-500 rounded-2xl flex items-center justify-center">
                            <i class="fas <?= $currentIcon ?> text-white text-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold">Edit <?= $labels['entity_term'] ?></h2>
                            <p class="text-sm text-gray-500"><?= htmlspecialchars($client['name']) ?></p>
                        </div>
                    </div>
                </div>
                
                <?php if (!empty($errors)): ?>
                <div class="p-4 bg-red-50 border-b border-red-200">
                    <ul class="text-sm text-red-700 space-y-1">
                        <?php foreach ($errors as $error): ?>
                        <li><i class="fas fa-exclamation-circle mr-1"></i> <?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                
                <div class="p-6 space-y-6">
                    
                    <!-- Basic Info -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <label class="form-label"><?= $labels['entity_term'] ?> Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" class="form-input" required
                                   value="<?= htmlspecialchars($client['name']) ?>">
                        </div>
                        
                        <div>
                            <label class="form-label">Entity Type <span class="text-red-500">*</span></label>
                            <select name="entity_type" class="form-input" required>
                                <?php foreach ($entityTypes as $key => $type): ?>
                                <option value="<?= $key ?>" <?= $entityType === $key ? 'selected' : '' ?>>
                                    <?= $type['label'] ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <p class="text-xs text-amber-600 mt-1"><i class="fas fa-info-circle mr-1"></i>Changing entity type may affect required fields</p>
                        </div>
                        
                        <div>
                            <label class="form-label">Status</label>
                            <select name="status" class="form-input">
                                <option value="active" <?= ($client['status'] ?? '') === 'active' ? 'selected' : '' ?>>Active</option>
                                <option value="inactive" <?= ($client['status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Registration Numbers -->
                    <div class="p-4 bg-gray-50 rounded-xl">
                        <h4 class="font-medium text-gray-700 mb-4"><i class="fas fa-id-card mr-2"></i>Registration Numbers</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            
                            <?php if ($isCompany): ?>
                            <div>
                                <label class="form-label">CIN (Company Identification Number)</label>
                                <input type="text" name="cin" class="form-input font-mono uppercase text-sm"
                                       value="<?= htmlspecialchars($client['cin'] ?? '') ?>"
                                       placeholder="U74999MH2020PTC123456" maxlength="21">
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($isLLP): ?>
                            <div>
                                <label class="form-label">LLPIN</label>
                                <input type="text" name="llpin" class="form-input font-mono uppercase"
                                       value="<?= htmlspecialchars($client['llpin'] ?? '') ?>"
                                       placeholder="AAA-1234" maxlength="8">
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($isPartnership): ?>
                            <div>
                                <label class="form-label">Firm Registration Number</label>
                                <input type="text" name="firm_registration_no" class="form-input"
                                       value="<?= htmlspecialchars($client['firm_registration_no'] ?? '') ?>">
                            </div>
                            <?php endif; ?>
                            
                            <div>
                                <label class="form-label"><?= $labels['pan_label'] ?></label>
                                <input type="text" name="pan" class="form-input font-mono uppercase"
                                       value="<?= htmlspecialchars($client['pan'] ?? '') ?>"
                                       placeholder="ABCDE1234F" maxlength="10">
                            </div>
                            
                            <div>
                                <label class="form-label">GSTIN</label>
                                <input type="text" name="gstin" class="form-input font-mono uppercase text-sm"
                                       value="<?= htmlspecialchars($client['gstin'] ?? '') ?>"
                                       placeholder="27ABCDE1234F1Z5" maxlength="15">
                            </div>
                            
                            <?php if ($isCompany): ?>
                            <div>
                                <label class="form-label">TAN</label>
                                <input type="text" name="tan" class="form-input font-mono uppercase"
                                       value="<?= htmlspecialchars($client['tan'] ?? '') ?>"
                                       placeholder="MUMA12345A" maxlength="10">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <?php if ($showCapital): ?>
                    <!-- Capital Section -->
                    <div class="p-4 bg-green-50 rounded-xl">
                        <h4 class="font-medium text-gray-700 mb-4">
                            <i class="fas fa-rupee-sign mr-2"></i>
                            <?= $isCompany ? 'Share Capital' : 'Capital / Contribution' ?>
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php if ($isCompany): ?>
                            <div>
                                <label class="form-label">Authorized Capital (₹)</label>
                                <input type="number" name="authorized_capital" class="form-input"
                                       value="<?= htmlspecialchars($client['authorized_capital'] ?? '') ?>">
                            </div>
                            <div>
                                <label class="form-label">Paid-up Capital (₹)</label>
                                <input type="number" name="paid_up_capital" class="form-input"
                                       value="<?= htmlspecialchars($client['paid_up_capital'] ?? '') ?>">
                            </div>
                            <?php else: ?>
                            <div>
                                <label class="form-label">Total Contribution (₹)</label>
                                <input type="number" name="total_contribution" class="form-input"
                                       value="<?= htmlspecialchars($client['total_contribution'] ?? '') ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Date & Status -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label"><?= $labels['date_label'] ?></label>
                            <input type="date" name="incorporation_date" class="form-input"
                                   value="<?= htmlspecialchars($client['incorporation_date'] ?? '') ?>">
                        </div>
                        <div>
                            <label class="form-label">Incorporation Status</label>
                            <select name="incorporation_status" class="form-input">
                                <option value="DRAFT" <?= ($client['incorporation_status'] ?? '') === 'DRAFT' ? 'selected' : '' ?>>Draft</option>
                                <option value="DOCUMENTS_PENDING" <?= ($client['incorporation_status'] ?? '') === 'DOCUMENTS_PENDING' ? 'selected' : '' ?>>Documents Pending</option>
                                <option value="UNDER_PROCESS" <?= ($client['incorporation_status'] ?? '') === 'UNDER_PROCESS' ? 'selected' : '' ?>>Under Process</option>
                                <option value="INCORPORATED" <?= ($client['incorporation_status'] ?? '') === 'INCORPORATED' ? 'selected' : '' ?>>Incorporated / Active</option>
                                <option value="REJECTED" <?= ($client['incorporation_status'] ?? '') === 'REJECTED' ? 'selected' : '' ?>>Rejected</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="p-4 bg-blue-50 rounded-xl">
                        <h4 class="font-medium text-gray-700 mb-4"><i class="fas fa-phone mr-2"></i>Contact Information</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-input"
                                       value="<?= htmlspecialchars($client['email'] ?? '') ?>">
                            </div>
                            <div>
                                <label class="form-label">Mobile</label>
                                <input type="tel" name="mobile" class="form-input"
                                       value="<?= htmlspecialchars($client['mobile'] ?? '') ?>">
                            </div>
                            <div class="md:col-span-2">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-input" rows="2"><?= htmlspecialchars($client['address'] ?? '') ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit -->
                    <div class="flex items-center gap-4 pt-4 border-t">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i> Save Changes
                        </button>
                        <a href="view_client.php?id=<?= $clientId ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Entity Info -->
            <div class="card p-4 bg-<?= $currentColor ?>-50 border-<?= $currentColor ?>-200">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-<?= $currentColor ?>-500 rounded-lg flex items-center justify-center">
                        <i class="fas <?= $currentIcon ?> text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-<?= $currentColor ?>-800"><?= $entityTypes[$entityType]['label'] ?? $entityType ?></h4>
                        <p class="text-xs text-<?= $currentColor ?>-600">Current entity type</p>
                    </div>
                </div>
                
                <?php if ($entityConfig): ?>
                <div class="space-y-2 text-sm text-<?= $currentColor ?>-700">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-users w-5"></i>
                        <?php 
                        $min = $entityConfig['min_persons'] ?? 1;
                        $max = $entityConfig['max_persons'] ?? null;
                        echo $min === $max ? "Exactly $min person(s)" : ($max ? "$min-$max persons" : "Min $min persons");
                        ?>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas <?= ($entityConfig['requires_din'] ?? false) ? 'fa-check text-green-600' : 'fa-times text-red-400' ?> w-5"></i>
                        DIN <?= ($entityConfig['requires_din'] ?? false) ? 'Required' : 'Not Required' ?>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas <?= ($entityConfig['requires_dsc'] ?? false) ? 'fa-check text-green-600' : 'fa-times text-red-400' ?> w-5"></i>
                        DSC <?= ($entityConfig['requires_dsc'] ?? false) ? 'Required' : 'Not Required' ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Quick Links -->
            <div class="card p-4">
                <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-link mr-2"></i>Quick Links</h4>
                <div class="space-y-2">
                    <a href="view_client.php?id=<?= $clientId ?>" class="block text-sm text-blue-600 hover:underline">
                        <i class="fas fa-eye mr-2"></i>View Dashboard
                    </a>
                    <a href="view_client.php?id=<?= $clientId ?>&tab=people" class="block text-sm text-blue-600 hover:underline">
                        <i class="fas fa-users mr-2"></i>Manage <?= $isProprietorship ? 'Proprietor' : 'Directors/Partners' ?>
                    </a>
                    <a href="view_client.php?id=<?= $clientId ?>&tab=documents" class="block text-sm text-blue-600 hover:underline">
                        <i class="fas fa-file-alt mr-2"></i>View Documents
                    </a>
                    <a href="add_request.php?client_id=<?= $clientId ?>" class="block text-sm text-blue-600 hover:underline">
                        <i class="fas fa-plus mr-2"></i>New Service Request
                    </a>
                </div>
            </div>
            
            <!-- Danger Zone -->
            <div class="card p-4 border-red-200 bg-red-50">
                <h4 class="font-semibold text-red-800 mb-3"><i class="fas fa-exclamation-triangle mr-2"></i>Danger Zone</h4>
                <p class="text-sm text-red-700 mb-3">Deleting a client will archive all related data.</p>
                <button type="button" onclick="confirmDelete()" class="btn bg-red-600 text-white hover:bg-red-700 text-sm w-full">
                    <i class="fas fa-trash mr-2"></i>Delete Client
                </button>
            </div>
        </div>
    </div>
</form>

<script>
function confirmDelete() {
    if (confirm('Are you sure you want to delete this client? This action can be undone by admin.')) {
        // SECURITY: Use POST form instead of GET
        const form = document.createElement('form');
        form.method = 'POST';
        form.innerHTML = `
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="delete">
        `;
        document.body.appendChild(form);
        form.submit();
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>
