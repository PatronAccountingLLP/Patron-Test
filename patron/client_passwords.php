<?php
/**
 * PATRON - Client Passwords
 * View and manage passwords for a specific client
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

// Get client details
$client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
if (!$client) {
    setFlash('error', 'Client not found.');
    header('Location: clients.php');
    exit;
}

$pageTitle = 'Passwords - ' . $client['name'];

// Simple encryption/decryption (for basic protection - consider using proper encryption in production)
function encryptPassword($password) {
    $key = 'PATRON_PWD_KEY_2024'; // In production, store in config
    return base64_encode(openssl_encrypt($password, 'AES-256-CBC', $key, 0, substr(md5($key), 0, 16)));
}

function decryptPassword($encrypted) {
    $key = 'PATRON_PWD_KEY_2024';
    return openssl_decrypt(base64_decode($encrypted), 'AES-256-CBC', $key, 0, substr(md5($key), 0, 16));
}

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'save') {
        $portalId = (int)($_POST['portal_id'] ?? 0);
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $notes = sanitize($_POST['notes'] ?? '');
        
        if ($portalId) {
            $existing = dbFetchOne("SELECT id FROM client_passwords WHERE client_id = ? AND portal_id = ? AND deleted_at IS NULL", [$clientId, $portalId]);
            
            $encryptedPwd = $password ? encryptPassword($password) : null;
            
            if ($existing) {
                // Update existing
                if ($password) {
                    dbExecute("UPDATE client_passwords SET username = ?, password_encrypted = ?, notes = ?, last_updated_by = ?, updated_at = NOW() WHERE id = ?",
                        [$username ?: null, $encryptedPwd, $notes ?: null, $_SESSION['user_id'], $existing['id']]);
                } else {
                    // Don't update password if empty (keep existing)
                    dbExecute("UPDATE client_passwords SET username = ?, notes = ?, last_updated_by = ?, updated_at = NOW() WHERE id = ?",
                        [$username ?: null, $notes ?: null, $_SESSION['user_id'], $existing['id']]);
                }
                setFlash('success', 'Password updated.');
            } else {
                // Insert new
                dbExecute("INSERT INTO client_passwords (client_id, portal_id, username, password_encrypted, notes, last_updated_by) VALUES (?, ?, ?, ?, ?, ?)",
                    [$clientId, $portalId, $username ?: null, $encryptedPwd, $notes ?: null, $_SESSION['user_id']]);
                setFlash('success', 'Password saved.');
            }
        }
    }
    
    if ($action === 'delete') {
        $passwordId = (int)($_POST['password_id'] ?? 0);
        if ($passwordId) {
            dbExecute("UPDATE client_passwords SET deleted_at = NOW() WHERE id = ? AND client_id = ?", [$passwordId, $clientId]);
            setFlash('success', 'Password removed.');
        }
    }
    
    header("Location: client_passwords.php?client_id=$clientId");
    exit;
}

// Get all portals
$portals = dbFetchAll("SELECT * FROM password_portals WHERE is_active = 1 AND deleted_at IS NULL ORDER BY sort_order, name") ?: [];

// Get saved passwords for this client
$savedPasswords = dbFetchAll("
    SELECT cp.*, pp.name as portal_name, pp.code as portal_code, pp.url as portal_url, pp.icon, pp.color,
           u.display_name as updated_by_name
    FROM client_passwords cp
    JOIN password_portals pp ON cp.portal_id = pp.id
    LEFT JOIN users u ON cp.last_updated_by = u.id
    WHERE cp.client_id = ? AND cp.deleted_at IS NULL
    ORDER BY pp.sort_order, pp.name
", [$clientId]) ?: [];

// Create lookup for easy access
$passwordsByPortal = [];
foreach ($savedPasswords as $sp) {
    $passwordsByPortal[$sp['portal_id']] = $sp;
}

require_once 'includes/header.php';
?>

<style>
.portal-row { transition: all 0.2s; }
.portal-row:hover { background: #f8fafc; }
.portal-row.has-password { border-left: 3px solid #10b981; }
.portal-row.no-password { border-left: 3px solid #e5e7eb; opacity: 0.7; }
.copy-btn { transition: all 0.2s; }
.copy-btn:hover { transform: scale(1.1); }
.copy-btn.copied { color: #10b981 !important; }
.password-field { font-family: monospace; letter-spacing: 2px; }
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; }
.modal.show { display: flex; }
.modal-box { background: white; border-radius: 1rem; max-width: 500px; width: 95%; max-height: 90vh; overflow-y: auto; }
.toggle-password { cursor: pointer; }
</style>

<!-- Breadcrumb -->
<div class="flex items-center gap-2 text-sm text-gray-500 mb-4">
    <a href="clients.php" class="hover:text-blue-600">Clients</a>
    <i class="fas fa-chevron-right text-xs"></i>
    <a href="view_client.php?id=<?= $clientId ?>" class="hover:text-blue-600"><?= htmlspecialchars($client['name']) ?></a>
    <i class="fas fa-chevron-right text-xs"></i>
    <span class="text-gray-700">Passwords</span>
</div>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold flex items-center gap-3">
            <i class="fas fa-key text-amber-500"></i>
            Password Manager
        </h1>
        <p class="text-gray-500 text-sm"><?= htmlspecialchars($client['name']) ?> - Portal Login Credentials</p>
    </div>
    <div class="flex gap-2">
        <button onclick="openAddModal()" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>Add Password
        </button>
        <a href="view_client.php?id=<?= $clientId ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left mr-2"></i>Back
        </a>
    </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-3 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-blue-600"><?= count($portals) ?></p>
        <p class="text-xs text-gray-500">Available Portals</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-green-600"><?= count($savedPasswords) ?></p>
        <p class="text-xs text-gray-500">Passwords Saved</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-amber-600"><?= count($portals) - count($savedPasswords) ?></p>
        <p class="text-xs text-gray-500">Not Configured</p>
    </div>
</div>

<!-- Passwords Table -->
<div class="card overflow-hidden">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h2 class="font-semibold"><i class="fas fa-lock mr-2"></i>Saved Credentials</h2>
        <span class="text-xs text-gray-400">Click icons to copy • Passwords are encrypted</span>
    </div>
    
    <?php if (empty($savedPasswords)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-key text-4xl text-gray-300 mb-2"></i>
        <p>No passwords saved yet for this client.</p>
        <button onclick="openAddModal()" class="btn btn-primary mt-4">Add First Password</button>
    </div>
    <?php else: ?>
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Portal</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Username</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Password</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Notes</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <?php foreach ($savedPasswords as $sp): 
                $color = $sp['color'] ?? 'blue';
                $decryptedPwd = $sp['password_encrypted'] ? decryptPassword($sp['password_encrypted']) : '';
            ?>
            <tr class="portal-row has-password hover:bg-gray-50">
                <td class="px-4 py-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-<?= $color ?>-100 text-<?= $color ?>-600 rounded-lg flex items-center justify-center">
                            <i class="fas <?= $sp['icon'] ?? 'fa-globe' ?>"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900"><?= htmlspecialchars($sp['portal_name']) ?></p>
                            <?php if ($sp['portal_url']): ?>
                            <a href="<?= htmlspecialchars($sp['portal_url']) ?>" target="_blank" class="text-xs text-blue-500 hover:underline">
                                Open Portal <i class="fas fa-external-link-alt ml-1"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-3">
                    <?php if ($sp['username']): ?>
                    <div class="flex items-center gap-2">
                        <span class="font-mono text-sm bg-gray-100 px-2 py-1 rounded" id="user_<?= $sp['id'] ?>"><?= htmlspecialchars($sp['username']) ?></span>
                        <button onclick="copyText('user_<?= $sp['id'] ?>', this)" class="copy-btn p-1 text-gray-400 hover:text-blue-600" title="Copy Username">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                    <?php else: ?>
                    <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3">
                    <?php if ($decryptedPwd): ?>
                    <div class="flex items-center gap-2">
                        <span class="password-field text-sm bg-gray-100 px-2 py-1 rounded" id="pwd_<?= $sp['id'] ?>" data-password="<?= htmlspecialchars($decryptedPwd) ?>">••••••••</span>
                        <button onclick="togglePassword('pwd_<?= $sp['id'] ?>', this)" class="toggle-password p-1 text-gray-400 hover:text-purple-600" title="Show/Hide">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button onclick="copyPassword('pwd_<?= $sp['id'] ?>', this)" class="copy-btn p-1 text-gray-400 hover:text-blue-600" title="Copy Password">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                    <?php else: ?>
                    <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-sm text-gray-600">
                    <?= $sp['notes'] ? htmlspecialchars(substr($sp['notes'], 0, 50)) . (strlen($sp['notes']) > 50 ? '...' : '') : '-' ?>
                </td>
                <td class="px-4 py-3 text-center">
                    <div class="flex items-center justify-center gap-1">
                        <button onclick='openEditModal(<?= json_encode(array_merge($sp, ["decrypted_password" => ""])) ?>, "<?= htmlspecialchars($decryptedPwd) ?>")' 
                                class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form method="POST" class="inline" onsubmit="return confirm('Remove this password?')">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="password_id" value="<?= $sp['id'] ?>">
                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</div>

<!-- Unconfigured Portals -->
<?php 
$unconfiguredPortals = array_filter($portals, fn($p) => !isset($passwordsByPortal[$p['id']]));
if (!empty($unconfiguredPortals)):
?>
<div class="card mt-6">
    <div class="p-4 border-b bg-amber-50">
        <h2 class="font-semibold text-amber-800"><i class="fas fa-exclamation-triangle mr-2"></i>Portals Without Credentials</h2>
    </div>
    <div class="p-4 grid grid-cols-2 md:grid-cols-4 gap-3">
        <?php foreach ($unconfiguredPortals as $p): ?>
        <button onclick="openAddModalWithPortal(<?= $p['id'] ?>)" 
                class="flex items-center gap-2 p-3 border border-dashed border-gray-300 rounded-lg hover:border-blue-400 hover:bg-blue-50 transition-colors text-left">
            <i class="fas <?= $p['icon'] ?? 'fa-globe' ?> text-gray-400"></i>
            <span class="text-sm text-gray-600"><?= htmlspecialchars($p['name']) ?></span>
            <i class="fas fa-plus text-xs text-gray-300 ml-auto"></i>
        </button>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<!-- Add/Edit Modal -->
<div id="passwordModal" class="modal" onclick="if(event.target===this)closeModal()">
    <div class="modal-box">
        <div class="p-4 border-b bg-blue-50" id="modalHeader">
            <h3 class="text-lg font-bold"><i class="fas fa-key text-blue-600 mr-2"></i><span id="modalTitle">Add Password</span></h3>
        </div>
        <form method="POST" class="p-6 space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="save">
            
            <div>
                <label class="form-label">Portal *</label>
                <select name="portal_id" id="modal_portal_id" class="form-input" required>
                    <option value="">Select Portal...</option>
                    <?php foreach ($portals as $p): ?>
                    <option value="<?= $p['id'] ?>" <?= isset($passwordsByPortal[$p['id']]) ? 'data-has-password="1"' : '' ?>>
                        <?= htmlspecialchars($p['name']) ?>
                        <?= isset($passwordsByPortal[$p['id']]) ? ' (Edit existing)' : '' ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div>
                <label class="form-label">Username / Login ID</label>
                <input type="text" name="username" id="modal_username" class="form-input" placeholder="Enter username...">
            </div>
            
            <div>
                <label class="form-label">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="modal_password" class="form-input pr-10" placeholder="Enter password...">
                    <button type="button" onclick="toggleModalPassword()" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                        <i class="fas fa-eye" id="modalPwdToggleIcon"></i>
                    </button>
                </div>
                <p class="text-xs text-gray-400 mt-1" id="passwordHint">Leave empty to keep existing password</p>
            </div>
            
            <div>
                <label class="form-label">Notes</label>
                <textarea name="notes" id="modal_notes" class="form-input" rows="2" placeholder="Optional notes..."></textarea>
            </div>
            
            <div class="flex gap-3 pt-4 border-t">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Save</button>
                <button type="button" onclick="closeModal()" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openAddModal() {
    document.getElementById('modalTitle').textContent = 'Add Password';
    document.getElementById('modal_portal_id').value = '';
    document.getElementById('modal_portal_id').disabled = false;
    document.getElementById('modal_username').value = '';
    document.getElementById('modal_password').value = '';
    document.getElementById('modal_notes').value = '';
    document.getElementById('passwordHint').classList.add('hidden');
    document.getElementById('passwordModal').classList.add('show');
}

function openAddModalWithPortal(portalId) {
    openAddModal();
    document.getElementById('modal_portal_id').value = portalId;
}

function openEditModal(data, decryptedPwd) {
    document.getElementById('modalTitle').textContent = 'Edit Password - ' + data.portal_name;
    document.getElementById('modal_portal_id').value = data.portal_id;
    document.getElementById('modal_portal_id').disabled = true;
    document.getElementById('modal_username').value = data.username || '';
    document.getElementById('modal_password').value = '';
    document.getElementById('modal_password').placeholder = 'Leave empty to keep current password';
    document.getElementById('modal_notes').value = data.notes || '';
    document.getElementById('passwordHint').classList.remove('hidden');
    document.getElementById('passwordModal').classList.add('show');
}

function closeModal() {
    document.getElementById('passwordModal').classList.remove('show');
    document.getElementById('modal_portal_id').disabled = false;
}

function toggleModalPassword() {
    const input = document.getElementById('modal_password');
    const icon = document.getElementById('modalPwdToggleIcon');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

function copyText(elementId, btn) {
    const text = document.getElementById(elementId).textContent;
    navigator.clipboard.writeText(text).then(() => {
        btn.classList.add('copied');
        btn.innerHTML = '<i class="fas fa-check"></i>';
        setTimeout(() => {
            btn.classList.remove('copied');
            btn.innerHTML = '<i class="fas fa-copy"></i>';
        }, 1500);
    });
}

function copyPassword(elementId, btn) {
    const pwd = document.getElementById(elementId).dataset.password;
    navigator.clipboard.writeText(pwd).then(() => {
        btn.classList.add('copied');
        btn.innerHTML = '<i class="fas fa-check"></i>';
        setTimeout(() => {
            btn.classList.remove('copied');
            btn.innerHTML = '<i class="fas fa-copy"></i>';
        }, 1500);
    });
}

function togglePassword(elementId, btn) {
    const el = document.getElementById(elementId);
    const icon = btn.querySelector('i');
    if (el.textContent === '••••••••') {
        el.textContent = el.dataset.password;
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        el.textContent = '••••••••';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
</script>

<?php require_once 'includes/footer.php'; ?>
