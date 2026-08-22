<?php
/**
 * PATRON ADMIN DASHBOARD
 * Manage Roles Page
 */

$pageTitle = 'Manage Roles';
require_once 'includes/header.php';
requireAdmin();

$errors = [];
$success = '';

// Get all roles with user counts
$roles = dbFetchAll("
    SELECT r.*, 
           COUNT(DISTINCT ur.user_id) as user_count
    FROM roles r
    LEFT JOIN user_roles ur ON r.id = ur.role_id AND ur.revoked_at IS NULL
    WHERE r.deleted_at IS NULL
    GROUP BY r.id
    ORDER BY r.name
");

// Handle role creation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        if ($_POST['action'] === 'create') {
            $code = strtoupper(sanitize($_POST['code'] ?? ''));
            $name = sanitize($_POST['name'] ?? '');
            $description = sanitize($_POST['description'] ?? '');
            
            if (empty($code)) $errors[] = 'Role code is required.';
            if (empty($name)) $errors[] = 'Role name is required.';
            
            if ($code && !preg_match('/^[A-Z_]+$/', $code)) {
                $errors[] = 'Code must contain only uppercase letters and underscores.';
            }
            
            if ($code) {
                $existing = dbFetchOne("SELECT id FROM roles WHERE code = ? AND deleted_at IS NULL", [$code]);
                if ($existing) $errors[] = 'A role with this code already exists.';
            }
            
            if (empty($errors)) {
                dbExecute("INSERT INTO roles (code, name, description) VALUES (?, ?, ?)", 
                    [$code, $name, $description ?: null]);
                $roleId = dbLastInsertId();
                logActivity('CREATE', 'roles', $roleId);
                $success = 'Role created successfully.';
                
                // Refresh roles list
                $roles = dbFetchAll("
                    SELECT r.*, COUNT(DISTINCT ur.user_id) as user_count
                    FROM roles r
                    LEFT JOIN user_roles ur ON r.id = ur.role_id AND ur.revoked_at IS NULL
                    WHERE r.deleted_at IS NULL
                    GROUP BY r.id
                    ORDER BY r.name
                ");
            }
        }
        
        if ($_POST['action'] === 'update') {
            $roleId = (int)($_POST['role_id'] ?? 0);
            $name = sanitize($_POST['name'] ?? '');
            $description = sanitize($_POST['description'] ?? '');
            
            if ($roleId && $name) {
                dbExecute("UPDATE roles SET name = ?, description = ? WHERE id = ?", 
                    [$name, $description ?: null, $roleId]);
                logActivity('UPDATE', 'roles', $roleId);
                $success = 'Role updated successfully.';
                
                // Refresh roles list
                $roles = dbFetchAll("
                    SELECT r.*, COUNT(DISTINCT ur.user_id) as user_count
                    FROM roles r
                    LEFT JOIN user_roles ur ON r.id = ur.role_id AND ur.revoked_at IS NULL
                    WHERE r.deleted_at IS NULL
                    GROUP BY r.id
                    ORDER BY r.name
                ");
            }
        }
    }
}

// Handle delete action
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $roleId = (int)$_GET['id'];
    $role = dbFetchOne("SELECT * FROM roles WHERE id = ? AND deleted_at IS NULL", [$roleId]);
    
    if ($role) {
        // Check if it's a system role
        if (in_array($role['code'], ['ADMIN', 'REVIEWER', 'EXECUTOR'])) {
            setFlash('error', 'Cannot delete system roles.');
        } else {
            // Check if role is in use
            $inUse = dbFetchOne("SELECT COUNT(*) as count FROM user_roles WHERE role_id = ? AND revoked_at IS NULL", [$roleId]);
            if ($inUse['count'] > 0) {
                setFlash('error', 'Cannot delete role that is assigned to users.');
            } else {
                dbExecute("UPDATE roles SET deleted_at = NOW() WHERE id = ?", [$roleId]);
                logActivity('DELETE', 'roles', $roleId);
                setFlash('success', 'Role deleted.');
            }
        }
    }
    header('Location: manage_roles.php');
    exit;
}
?>

<div class="mb-6">
    <a href="team.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Team
    </a>
</div>

<?php if ($success): ?>
<div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg">
    <i class="fas fa-check-circle mr-2"></i> <?= htmlspecialchars($success) ?>
</div>
<?php endif; ?>

<?php if (!empty($errors)): ?>
<div class="mb-6 p-4 bg-red-100 text-red-800 rounded-lg">
    <ul class="space-y-1">
        <?php foreach ($errors as $error): ?>
        <li><i class="fas fa-exclamation-circle mr-1"></i> <?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Roles List -->
    <div class="lg:col-span-2">
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold">System Roles</h2>
            </div>
            <div class="divide-y divide-gray-100">
                <?php foreach ($roles as $role): ?>
                <div class="p-4" x-data="{ editing: false }">
                    <div x-show="!editing" class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-user-tag text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900"><?= htmlspecialchars($role['name']) ?></h3>
                                <p class="text-sm text-gray-500">
                                    <span class="font-mono text-xs bg-gray-100 px-2 py-0.5 rounded"><?= htmlspecialchars($role['code']) ?></span>
                                    <?php if ($role['description']): ?>
                                    • <?= htmlspecialchars($role['description']) ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-users mr-1"></i> <?= $role['user_count'] ?> users
                            </span>
                            <div class="flex gap-2">
                                <button @click="editing = true" class="text-blue-600 hover:text-blue-700 text-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <?php if (!in_array($role['code'], ['ADMIN', 'REVIEWER', 'EXECUTOR']) && $role['user_count'] == 0): ?>
                                <a href="?action=delete&id=<?= $role['id'] ?>" 
                                   class="text-red-600 hover:text-red-700 text-sm"
                                   onclick="return confirm('Delete this role?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Form -->
                    <form x-show="editing" method="POST" class="space-y-4">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="role_id" value="<?= $role['id'] ?>">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="form-label">Code</label>
                                <input type="text" value="<?= htmlspecialchars($role['code']) ?>" class="form-input bg-gray-100" disabled>
                            </div>
                            <div>
                                <label class="form-label">Name *</label>
                                <input type="text" name="name" value="<?= htmlspecialchars($role['name']) ?>" class="form-input" required>
                            </div>
                        </div>
                        <div>
                            <label class="form-label">Description</label>
                            <input type="text" name="description" value="<?= htmlspecialchars($role['description']) ?>" class="form-input">
                        </div>
                        <div class="flex gap-2">
                            <button type="submit" class="btn btn-primary text-sm">Save</button>
                            <button type="button" @click="editing = false" class="btn btn-secondary text-sm">Cancel</button>
                        </div>
                    </form>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <!-- Create New Role -->
    <div>
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h3 class="font-semibold">Create New Role</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="create">
                
                <div>
                    <label class="form-label">Code *</label>
                    <input type="text" name="code" class="form-input uppercase" required
                           placeholder="e.g., MANAGER" pattern="[A-Z_]+">
                    <p class="text-xs text-gray-500 mt-1">Uppercase letters and underscores only</p>
                </div>
                
                <div>
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" class="form-input" required
                           placeholder="e.g., Manager">
                </div>
                
                <div>
                    <label class="form-label">Description</label>
                    <input type="text" name="description" class="form-input"
                           placeholder="Brief description of role">
                </div>
                
                <button type="submit" class="btn btn-primary w-full">
                    <i class="fas fa-plus mr-2"></i> Create Role
                </button>
            </form>
        </div>
        
        <!-- Role Info -->
        <div class="card mt-6 p-4">
            <h4 class="font-semibold mb-3">System Roles</h4>
            <div class="space-y-3 text-sm">
                <div class="flex items-start gap-2">
                    <span class="font-mono text-xs bg-red-100 text-red-800 px-2 py-0.5 rounded">ADMIN</span>
                    <p class="text-gray-600">Full system access, manage users & settings</p>
                </div>
                <div class="flex items-start gap-2">
                    <span class="font-mono text-xs bg-orange-100 text-orange-800 px-2 py-0.5 rounded">REVIEWER</span>
                    <p class="text-gray-600">Review tasks, verify documents, approve work</p>
                </div>
                <div class="flex items-start gap-2">
                    <span class="font-mono text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded">EXECUTOR</span>
                    <p class="text-gray-600">Execute assigned tasks, upload documents</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
