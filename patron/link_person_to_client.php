<?php
/**
 * PATRON - Link Person to Client
 * Link an existing person to a client with role selection
 * Fixes Issue #5: Director/Shareholder selection
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$pageTitle = 'Link Person to Client';

// Get client if pre-selected
$clientId = (int)($_GET['client_id'] ?? 0);
$personId = (int)($_GET['person_id'] ?? 0);

// Get all clients
$clients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

// Get all persons
$persons = dbFetchAll("SELECT id, full_name, pan_number, mobile FROM persons_new WHERE deleted_at IS NULL ORDER BY full_name") ?: [];

// Role options (same as add_person.php)
$roleOptions = [
    'DIRECTOR' => 'Director',
    'SHAREHOLDER' => 'Shareholder', 
    'PARTNER' => 'Partner',
    'DESIGNATED_PARTNER' => 'Designated Partner',
    'PROPRIETOR' => 'Proprietor',
    'MEMBER' => 'Member',
    'TRUSTEE' => 'Trustee',
    'KARTA' => 'Karta',
    'NOMINEE' => 'Nominee',
    'PROMOTER' => 'Promoter',
    'AUTHORIZED_SIGNATORY' => 'Authorized Signatory',
    'BENEFICIAL_OWNER' => 'Beneficial Owner',
    'KEY_MANAGERIAL_PERSONNEL' => 'Key Managerial Personnel'
];

// Get existing links for this client (if selected)
$existingLinks = [];
if ($clientId) {
    $existingLinks = dbFetchAll("
        SELECT cp.*, p.full_name, p.pan_number 
        FROM client_persons cp 
        JOIN persons_new p ON cp.person_id = p.id 
        WHERE cp.client_id = ? 
        ORDER BY cp.role_type, p.full_name
    ", [$clientId]) ?: [];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? 'link';
    
    if ($action === 'link') {
        $linkClientId = (int)($_POST['client_id'] ?? 0);
        $linkPersonId = (int)($_POST['person_id'] ?? 0);
        $linkRole = sanitize($_POST['role_type'] ?? 'DIRECTOR');
        $sharePercent = floatval($_POST['share_percent'] ?? 0);
        $dinDpin = sanitize($_POST['din_dpin'] ?? '');
        $appointmentDate = sanitize($_POST['appointment_date'] ?? '');
        $cessationDate = sanitize($_POST['cessation_date'] ?? '');
        
        $errors = [];
        
        if (!$linkClientId) $errors[] = 'Please select a client';
        if (!$linkPersonId) $errors[] = 'Please select a person';
        
        // Check if link already exists
        $existing = dbFetchOne("SELECT id FROM client_persons WHERE client_id = ? AND person_id = ? AND role_type = ?", 
            [$linkClientId, $linkPersonId, $linkRole]);
        if ($existing) {
            $errors[] = 'This person is already linked to this client with the same role';
        }
        
        if (empty($errors)) {
            dbExecute("
                INSERT INTO client_persons (client_id, person_id, role_type, share_percent, din_dpin, appointment_date, cessation_date, is_active, created_at) 
                VALUES (?, ?, ?, ?, ?, ?, ?, 1, NOW())
            ", [$linkClientId, $linkPersonId, $linkRole, $sharePercent ?: null, $dinDpin ?: null, 
                $appointmentDate ?: null, $cessationDate ?: null]);
            
            setFlash('success', 'Person linked to client successfully.');
            header('Location: link_person_to_client.php?client_id=' . $linkClientId);
            exit;
        } else {
            setFlash('error', implode('<br>', $errors));
        }
    }
    
    if ($action === 'unlink') {
        $linkId = (int)($_POST['link_id'] ?? 0);
        if ($linkId) {
            dbExecute("DELETE FROM client_persons WHERE id = ?", [$linkId]);
            setFlash('success', 'Link removed.');
            header('Location: link_person_to_client.php?client_id=' . $clientId);
            exit;
        }
    }
    
    if ($action === 'update_role') {
        $linkId = (int)($_POST['link_id'] ?? 0);
        $newRole = sanitize($_POST['role_type'] ?? '');
        $sharePercent = floatval($_POST['share_percent'] ?? 0);
        $dinDpin = sanitize($_POST['din_dpin'] ?? '');
        
        if ($linkId && $newRole) {
            dbExecute("UPDATE client_persons SET role_type = ?, share_percent = ?, din_dpin = ? WHERE id = ?", 
                [$newRole, $sharePercent ?: null, $dinDpin ?: null, $linkId]);
            setFlash('success', 'Role updated.');
            header('Location: link_person_to_client.php?client_id=' . $clientId);
            exit;
        }
    }
}

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold"><i class="fas fa-link text-blue-500 mr-2"></i>Link Person to Client</h2>
        <p class="text-gray-500 text-sm">Add Directors, Shareholders, Partners and other key persons to clients</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Link Form -->
    <div class="card">
        <div class="p-4 border-b bg-blue-50">
            <h3 class="font-semibold text-blue-800"><i class="fas fa-plus-circle mr-2"></i>Add New Link</h3>
        </div>
        <form method="POST" class="p-6 space-y-4">
            <input type="hidden" name="action" value="link">
            
            <div>
                <label class="form-label">Select Client <span class="text-red-500">*</span></label>
                <select name="client_id" id="clientSelect" class="form-input" required onchange="updateClientSelection()">
                    <option value="">-- Select Client --</option>
                    <?php foreach ($clients as $c): ?>
                    <option value="<?= $c['id'] ?>" data-entity="<?= htmlspecialchars($c['entity_type']) ?>" <?= $clientId == $c['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($c['name']) ?> (<?= $c['entity_type'] ?>)
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div>
                <label class="form-label">Select Person <span class="text-red-500">*</span></label>
                <select name="person_id" class="form-input" required>
                    <option value="">-- Select Person --</option>
                    <?php foreach ($persons as $p): ?>
                    <option value="<?= $p['id'] ?>" <?= $personId == $p['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($p['full_name']) ?> 
                        <?= $p['pan_number'] ? '(' . $p['pan_number'] . ')' : '' ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <p class="text-xs text-gray-500 mt-1">
                    <a href="add_person.php<?= $clientId ? '?client_id='.$clientId : '' ?>" class="text-blue-600 hover:underline">
                        <i class="fas fa-plus mr-1"></i>Create new person
                    </a>
                </p>
            </div>
            
            <div>
                <label class="form-label">Role / Designation <span class="text-red-500">*</span></label>
                <select name="role_type" id="roleSelect" class="form-input" required>
                    <?php foreach ($roleOptions as $code => $label): ?>
                    <option value="<?= $code ?>"><?= $label ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Share % (if applicable)</label>
                    <input type="number" name="share_percent" class="form-input" min="0" max="100" step="0.01" placeholder="e.g., 25.50">
                </div>
                <div>
                    <label class="form-label">DIN / DPIN</label>
                    <input type="text" name="din_dpin" class="form-input font-mono" placeholder="8 digits">
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Appointment Date</label>
                    <input type="date" name="appointment_date" class="form-input">
                </div>
                <div>
                    <label class="form-label">Cessation Date</label>
                    <input type="date" name="cessation_date" class="form-input">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary w-full">
                <i class="fas fa-link mr-2"></i>Link Person to Client
            </button>
        </form>
    </div>
    
    <!-- Existing Links -->
    <div class="card">
        <div class="p-4 border-b bg-green-50">
            <h3 class="font-semibold text-green-800">
                <i class="fas fa-users mr-2"></i>
                Existing Links
                <?php if ($clientId): ?>
                <span class="text-sm font-normal text-gray-600">(<?= count($existingLinks) ?> persons)</span>
                <?php endif; ?>
            </h3>
        </div>
        
        <?php if (!$clientId): ?>
        <div class="p-6 text-center text-gray-400">
            <i class="fas fa-hand-point-left text-4xl mb-2"></i>
            <p>Select a client to see linked persons</p>
        </div>
        <?php elseif (empty($existingLinks)): ?>
        <div class="p-6 text-center text-gray-400">
            <i class="fas fa-user-plus text-4xl mb-2"></i>
            <p>No persons linked to this client yet</p>
        </div>
        <?php else: ?>
        <div class="divide-y max-h-[500px] overflow-y-auto">
            <?php foreach ($existingLinks as $link): ?>
            <div class="p-4 hover:bg-gray-50">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="font-semibold text-gray-800"><?= htmlspecialchars($link['full_name']) ?></p>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="px-2 py-0.5 bg-blue-100 text-blue-700 rounded text-xs font-medium">
                                <?= $roleOptions[$link['role_type']] ?? $link['role_type'] ?>
                            </span>
                            <?php if ($link['share_percent']): ?>
                            <span class="text-xs text-gray-500"><?= $link['share_percent'] ?>%</span>
                            <?php endif; ?>
                            <?php if ($link['din_dpin']): ?>
                            <span class="text-xs text-gray-500 font-mono">DIN: <?= $link['din_dpin'] ?></span>
                            <?php endif; ?>
                        </div>
                        <?php if ($link['pan_number']): ?>
                        <p class="text-xs text-gray-400 mt-1">PAN: <?= $link['pan_number'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="flex gap-1">
                        <button type="button" onclick="editLink(<?= $link['id'] ?>, '<?= $link['role_type'] ?>', '<?= $link['share_percent'] ?>', '<?= $link['din_dpin'] ?>')" 
                                class="p-2 text-blue-600 hover:bg-blue-50 rounded" title="Edit Role">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form method="POST" class="inline" onsubmit="return confirm('Remove this link?')">
                            <input type="hidden" name="action" value="unlink">
                            <input type="hidden" name="link_id" value="<?= $link['id'] ?>">
                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded" title="Remove Link">
                                <i class="fas fa-unlink"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Edit Role Modal -->
<div id="editModal" class="modal">
    <div class="modal-content" style="max-width:400px;">
        <div class="p-4 border-b bg-blue-50">
            <h3 class="font-bold text-blue-800"><i class="fas fa-edit mr-2"></i>Edit Role</h3>
        </div>
        <form method="POST" class="p-4 space-y-4">
            <input type="hidden" name="action" value="update_role">
            <input type="hidden" name="link_id" id="editLinkId">
            
            <div>
                <label class="form-label">Role</label>
                <select name="role_type" id="editRoleType" class="form-input">
                    <?php foreach ($roleOptions as $code => $label): ?>
                    <option value="<?= $code ?>"><?= $label ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Share %</label>
                    <input type="number" name="share_percent" id="editSharePercent" class="form-input" min="0" max="100" step="0.01">
                </div>
                <div>
                    <label class="form-label">DIN / DPIN</label>
                    <input type="text" name="din_dpin" id="editDinDpin" class="form-input font-mono">
                </div>
            </div>
            
            <div class="flex gap-2">
                <button type="submit" class="btn btn-primary flex-1">Save</button>
                <button type="button" onclick="closeEditModal()" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

<style>
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; padding: 1rem; }
.modal.show { display: flex; }
.modal-content { background: white; border-radius: 1rem; }
</style>

<script>
function updateClientSelection() {
    const select = document.getElementById('clientSelect');
    const clientId = select.value;
    if (clientId) {
        window.location.href = 'link_person_to_client.php?client_id=' + clientId;
    }
    
    // Also update default role based on entity type
    const entityType = select.options[select.selectedIndex]?.dataset?.entity || '';
    const roleSelect = document.getElementById('roleSelect');
    
    if (entityType.includes('LLP')) {
        roleSelect.value = 'DESIGNATED_PARTNER';
    } else if (entityType.includes('Proprietor')) {
        roleSelect.value = 'PROPRIETOR';
    } else if (entityType.includes('Partner')) {
        roleSelect.value = 'PARTNER';
    } else {
        roleSelect.value = 'DIRECTOR';
    }
}

function editLink(linkId, roleType, sharePercent, dinDpin) {
    document.getElementById('editLinkId').value = linkId;
    document.getElementById('editRoleType').value = roleType;
    document.getElementById('editSharePercent').value = sharePercent || '';
    document.getElementById('editDinDpin').value = dinDpin || '';
    document.getElementById('editModal').classList.add('show');
}

function closeEditModal() {
    document.getElementById('editModal').classList.remove('show');
}
</script>

<?php require_once 'includes/footer.php'; ?>
