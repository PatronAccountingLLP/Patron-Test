<?php
/**
 * PATRON - Password Portals Master
 * Admin page to manage list of login portals
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Password Portals';

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'add') {
        $name = sanitize($_POST['name'] ?? '');
        $code = strtoupper(sanitize($_POST['code'] ?? ''));
        $url = sanitize($_POST['url'] ?? '');
        $icon = sanitize($_POST['icon'] ?? 'fa-globe');
        $color = sanitize($_POST['color'] ?? 'blue');
        $description = sanitize($_POST['description'] ?? '');
        
        if ($name && $code) {
            $exists = dbFetchOne("SELECT id FROM password_portals WHERE code = ? AND deleted_at IS NULL", [$code]);
            if ($exists) {
                setFlash('error', 'Portal code already exists.');
            } else {
                $maxOrder = dbFetchOne("SELECT MAX(sort_order) as max_order FROM password_portals");
                $sortOrder = ($maxOrder['max_order'] ?? 0) + 1;
                
                dbExecute("INSERT INTO password_portals (name, code, url, icon, color, description, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?)",
                    [$name, $code, $url ?: null, $icon, $color, $description ?: null, $sortOrder]);
                setFlash('success', 'Portal added successfully.');
            }
        } else {
            setFlash('error', 'Name and code are required.');
        }
    }
    
    if ($action === 'edit') {
        $id = (int)($_POST['portal_id'] ?? 0);
        $name = sanitize($_POST['name'] ?? '');
        $url = sanitize($_POST['url'] ?? '');
        $icon = sanitize($_POST['icon'] ?? 'fa-globe');
        $color = sanitize($_POST['color'] ?? 'blue');
        $description = sanitize($_POST['description'] ?? '');
        $isActive = isset($_POST['is_active']) ? 1 : 0;
        
        if ($id && $name) {
            dbExecute("UPDATE password_portals SET name = ?, url = ?, icon = ?, color = ?, description = ?, is_active = ? WHERE id = ?",
                [$name, $url ?: null, $icon, $color, $description ?: null, $isActive, $id]);
            setFlash('success', 'Portal updated successfully.');
        }
    }
    
    if ($action === 'delete') {
        $id = (int)($_POST['portal_id'] ?? 0);
        if ($id) {
            // Check if any passwords exist for this portal
            $pwCount = dbFetchOne("SELECT COUNT(*) as cnt FROM client_passwords WHERE portal_id = ? AND deleted_at IS NULL", [$id]);
            if (($pwCount['cnt'] ?? 0) > 0) {
                setFlash('error', 'Cannot delete portal with existing passwords. Deactivate it instead.');
            } else {
                dbExecute("UPDATE password_portals SET deleted_at = NOW() WHERE id = ?", [$id]);
                setFlash('success', 'Portal deleted.');
            }
        }
    }
    
    if ($action === 'reorder') {
        $orders = $_POST['orders'] ?? [];
        foreach ($orders as $id => $order) {
            dbExecute("UPDATE password_portals SET sort_order = ? WHERE id = ?", [(int)$order, (int)$id]);
        }
        setFlash('success', 'Order updated.');
    }
    
    header('Location: password_portals.php');
    exit;
}

// Get all portals
$portals = dbFetchAll("
    SELECT pp.*, 
           (SELECT COUNT(*) FROM client_passwords cp WHERE cp.portal_id = pp.id AND cp.deleted_at IS NULL) as usage_count
    FROM password_portals pp 
    WHERE pp.deleted_at IS NULL 
    ORDER BY pp.sort_order, pp.name
") ?: [];

// Available icons
$icons = [
    'fa-globe' => 'Globe',
    'fa-shield-alt' => 'Shield',
    'fa-hospital' => 'Hospital',
    'fa-file-invoice' => 'Invoice',
    'fa-landmark' => 'Landmark',
    'fa-briefcase' => 'Briefcase',
    'fa-search-dollar' => 'Search Dollar',
    'fa-building' => 'Building',
    'fa-percentage' => 'Percentage',
    'fa-truck' => 'Truck',
    'fa-university' => 'University',
    'fa-bank' => 'Bank',
    'fa-credit-card' => 'Credit Card',
    'fa-key' => 'Key',
    'fa-lock' => 'Lock',
    'fa-user-shield' => 'User Shield'
];

$colors = ['blue', 'green', 'purple', 'indigo', 'amber', 'teal', 'red', 'orange', 'cyan', 'pink', 'gray'];

require_once 'includes/header.php';
?>

<style>
.portal-card { transition: all 0.2s; border-left: 4px solid transparent; }
.portal-card:hover { transform: translateX(4px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.portal-card.inactive { opacity: 0.6; }
.color-dot { width: 20px; height: 20px; border-radius: 50%; display: inline-block; cursor: pointer; border: 2px solid transparent; }
.color-dot:hover, .color-dot.selected { border-color: #1f2937; transform: scale(1.2); }
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; }
.modal.show { display: flex; }
.modal-box { background: white; border-radius: 1rem; max-width: 500px; width: 95%; max-height: 90vh; overflow-y: auto; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Password Portals</h1>
        <p class="text-gray-500 text-sm">Manage login portals for password storage</p>
    </div>
    <button onclick="openAddModal()" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>Add Portal
    </button>
</div>

<!-- Stats -->
<div class="grid grid-cols-3 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-blue-600"><?= count($portals) ?></p>
        <p class="text-xs text-gray-500">Total Portals</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-green-600"><?= count(array_filter($portals, fn($p) => $p['is_active'])) ?></p>
        <p class="text-xs text-gray-500">Active</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-purple-600"><?= array_sum(array_column($portals, 'usage_count')) ?></p>
        <p class="text-xs text-gray-500">Total Passwords Stored</p>
    </div>
</div>

<!-- Portals List -->
<div class="card">
    <div class="p-4 border-b bg-gray-50">
        <h2 class="font-semibold"><i class="fas fa-list mr-2"></i>Portal List</h2>
    </div>
    
    <?php if (empty($portals)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-globe text-4xl text-gray-300 mb-2"></i>
        <p>No portals configured yet.</p>
        <button onclick="openAddModal()" class="btn btn-primary mt-4">Add First Portal</button>
    </div>
    <?php else: ?>
    <div class="divide-y">
        <?php foreach ($portals as $p): 
            $color = $p['color'] ?? 'blue';
        ?>
        <div class="portal-card p-4 flex items-center gap-4 <?= $p['is_active'] ? '' : 'inactive' ?>" style="border-left-color: var(--tw-color-<?= $color ?>-500, #3b82f6);">
            <div class="w-12 h-12 bg-<?= $color ?>-100 text-<?= $color ?>-600 rounded-xl flex items-center justify-center">
                <i class="fas <?= $p['icon'] ?? 'fa-globe' ?> text-xl"></i>
            </div>
            <div class="flex-1">
                <div class="flex items-center gap-2">
                    <h3 class="font-semibold text-gray-900"><?= htmlspecialchars($p['name']) ?></h3>
                    <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-mono"><?= $p['code'] ?></span>
                    <?php if (!$p['is_active']): ?>
                    <span class="px-2 py-0.5 bg-red-100 text-red-600 rounded text-xs">Inactive</span>
                    <?php endif; ?>
                </div>
                <?php if ($p['url']): ?>
                <a href="<?= htmlspecialchars($p['url']) ?>" target="_blank" class="text-xs text-blue-500 hover:underline">
                    <?= htmlspecialchars($p['url']) ?> <i class="fas fa-external-link-alt ml-1"></i>
                </a>
                <?php endif; ?>
                <?php if ($p['description']): ?>
                <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($p['description']) ?></p>
                <?php endif; ?>
            </div>
            <div class="text-center px-4">
                <p class="text-lg font-bold text-gray-700"><?= $p['usage_count'] ?></p>
                <p class="text-xs text-gray-400">Passwords</p>
            </div>
            <div class="flex items-center gap-2">
                <button onclick='openEditModal(<?= json_encode($p) ?>)' class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="Edit">
                    <i class="fas fa-edit"></i>
                </button>
                <?php if ($p['usage_count'] == 0): ?>
                <form method="POST" class="inline" onsubmit="return confirm('Delete this portal?')">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="portal_id" value="<?= $p['id'] ?>">
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

<!-- Add Modal -->
<div id="addModal" class="modal" onclick="if(event.target===this)closeAddModal()">
    <div class="modal-box">
        <div class="p-4 border-b bg-blue-50">
            <h3 class="text-lg font-bold"><i class="fas fa-plus text-blue-600 mr-2"></i>Add Portal</h3>
        </div>
        <form method="POST" class="p-6 space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="add">
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Portal Name *</label>
                    <input type="text" name="name" class="form-input" required placeholder="e.g., GST Portal">
                </div>
                <div>
                    <label class="form-label">Code *</label>
                    <input type="text" name="code" class="form-input" required placeholder="e.g., GST" style="text-transform: uppercase;">
                </div>
            </div>
            
            <div>
                <label class="form-label">Portal URL</label>
                <input type="url" name="url" class="form-input" placeholder="https://...">
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Icon</label>
                    <select name="icon" class="form-input">
                        <?php foreach ($icons as $iconClass => $iconName): ?>
                        <option value="<?= $iconClass ?>"><?= $iconName ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Color</label>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <?php foreach ($colors as $c): ?>
                        <label class="color-dot bg-<?= $c ?>-500" title="<?= ucfirst($c) ?>">
                            <input type="radio" name="color" value="<?= $c ?>" class="hidden" <?= $c === 'blue' ? 'checked' : '' ?>>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div>
                <label class="form-label">Description</label>
                <textarea name="description" class="form-input" rows="2" placeholder="Optional notes..."></textarea>
            </div>
            
            <div class="flex gap-3 pt-4 border-t">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Add Portal</button>
                <button type="button" onclick="closeAddModal()" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="modal" onclick="if(event.target===this)closeEditModal()">
    <div class="modal-box">
        <div class="p-4 border-b bg-amber-50">
            <h3 class="text-lg font-bold"><i class="fas fa-edit text-amber-600 mr-2"></i>Edit Portal</h3>
        </div>
        <form method="POST" class="p-6 space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="portal_id" id="edit_portal_id">
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Portal Name *</label>
                    <input type="text" name="name" id="edit_name" class="form-input" required>
                </div>
                <div>
                    <label class="form-label">Code</label>
                    <input type="text" id="edit_code" class="form-input bg-gray-100" disabled>
                </div>
            </div>
            
            <div>
                <label class="form-label">Portal URL</label>
                <input type="url" name="url" id="edit_url" class="form-input" placeholder="https://...">
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Icon</label>
                    <select name="icon" id="edit_icon" class="form-input">
                        <?php foreach ($icons as $iconClass => $iconName): ?>
                        <option value="<?= $iconClass ?>"><?= $iconName ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Color</label>
                    <div id="edit_colors" class="flex flex-wrap gap-2 mt-2">
                        <?php foreach ($colors as $c): ?>
                        <label class="color-dot bg-<?= $c ?>-500" title="<?= ucfirst($c) ?>">
                            <input type="radio" name="color" value="<?= $c ?>" class="hidden">
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div>
                <label class="form-label">Description</label>
                <textarea name="description" id="edit_description" class="form-input" rows="2"></textarea>
            </div>
            
            <div class="flex items-center gap-2">
                <input type="checkbox" name="is_active" id="edit_is_active" value="1" class="rounded">
                <label for="edit_is_active" class="text-sm">Active</label>
            </div>
            
            <div class="flex gap-3 pt-4 border-t">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Update Portal</button>
                <button type="button" onclick="closeEditModal()" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openAddModal() { document.getElementById('addModal').classList.add('show'); }
function closeAddModal() { document.getElementById('addModal').classList.remove('show'); }
function closeEditModal() { document.getElementById('editModal').classList.remove('show'); }

function openEditModal(portal) {
    document.getElementById('edit_portal_id').value = portal.id;
    document.getElementById('edit_name').value = portal.name;
    document.getElementById('edit_code').value = portal.code;
    document.getElementById('edit_url').value = portal.url || '';
    document.getElementById('edit_icon').value = portal.icon || 'fa-globe';
    document.getElementById('edit_description').value = portal.description || '';
    document.getElementById('edit_is_active').checked = portal.is_active == 1;
    
    // Set color
    document.querySelectorAll('#edit_colors input[name="color"]').forEach(r => {
        r.checked = r.value === portal.color;
        r.parentElement.classList.toggle('selected', r.checked);
    });
    
    document.getElementById('editModal').classList.add('show');
}

// Color selection UI
document.querySelectorAll('.color-dot').forEach(dot => {
    dot.addEventListener('click', function() {
        const container = this.closest('.flex');
        container.querySelectorAll('.color-dot').forEach(d => d.classList.remove('selected'));
        this.classList.add('selected');
        this.querySelector('input').checked = true;
    });
});

document.addEventListener('keydown', e => { if (e.key === 'Escape') { closeAddModal(); closeEditModal(); } });
</script>

<?php require_once 'includes/footer.php'; ?>
