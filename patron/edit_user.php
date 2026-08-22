<?php
/**
 * PATRON ADMIN DASHBOARD
 * Edit Team Member Page
 */

$pageTitle = 'Edit Team Member';
require_once 'includes/header.php';
requireAdmin();

// Get user ID
$userId = (int)($_GET['id'] ?? 0);
if (!$userId) {
    setFlash('error', 'Invalid user ID.');
    header('Location: team.php');
    exit;
}

// Prevent editing yourself through this page
if ($userId == $_SESSION['user_id']) {
    setFlash('info', 'Use Profile page to edit your own account.');
    header('Location: profile.php');
    exit;
}

// Get user
$user = dbFetchOne("SELECT * FROM users WHERE id = ? AND deleted_at IS NULL AND user_type = 'INTERNAL'", [$userId]);
if (!$user) {
    setFlash('error', 'User not found.');
    header('Location: team.php');
    exit;
}

// Get user's current roles
$userRoles = dbFetchAll("
    SELECT r.id 
    FROM user_roles ur 
    JOIN roles r ON ur.role_id = r.id 
    WHERE ur.user_id = ? AND ur.revoked_at IS NULL
", [$userId]);
$currentRoleIds = array_column($userRoles, 'id');

// Get all roles
$roles = dbFetchAll("SELECT * FROM roles WHERE deleted_at IS NULL ORDER BY name");

$errors = [];
$formData = [
    'display_name' => $user['display_name'],
    'email' => $user['email'],
    'mobile' => $user['mobile'],
    'status' => $user['status'],
    'roles' => $currentRoleIds
];

// Handle actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    if ($action === 'suspend' && $user['status'] === 'ACTIVE') {
        dbExecute("UPDATE users SET status = 'SUSPENDED', updated_by = ? WHERE id = ?", [$_SESSION['user_id'], $userId]);
        logActivity('UPDATE', 'users', $userId, ['status' => 'ACTIVE'], ['status' => 'SUSPENDED']);
        setFlash('success', 'User suspended.');
        header('Location: team.php');
        exit;
    }
    
    if ($action === 'activate' && $user['status'] === 'SUSPENDED') {
        dbExecute("UPDATE users SET status = 'ACTIVE', updated_by = ? WHERE id = ?", [$_SESSION['user_id'], $userId]);
        logActivity('UPDATE', 'users', $userId, ['status' => 'SUSPENDED'], ['status' => 'ACTIVE']);
        setFlash('success', 'User activated.');
        header('Location: team.php');
        exit;
    }
    
    if ($action === 'delete') {
        dbExecute("UPDATE users SET deleted_at = NOW(), deleted_by = ? WHERE id = ?", [$_SESSION['user_id'], $userId]);
        logActivity('DELETE', 'users', $userId);
        setFlash('success', 'User deleted.');
        header('Location: team.php');
        exit;
    }
    
    if ($action === 'reset_password') {
        $newPassword = 'password123';
        dbExecute("UPDATE users SET password_hash = ?, failed_login_attempts = 0, locked_until = NULL, updated_by = ? WHERE id = ?", 
            [password_hash($newPassword, PASSWORD_DEFAULT), $_SESSION['user_id'], $userId]);
        logActivity('UPDATE', 'users', $userId, null, ['action' => 'password_reset']);
        setFlash('success', 'Password reset to: password123');
        header('Location: edit_user.php?id=' . $userId);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $oldData = $user;
        
        $formData['display_name'] = sanitize($_POST['display_name'] ?? '');
        $formData['email'] = sanitize($_POST['email'] ?? '');
        $formData['mobile'] = sanitize($_POST['mobile'] ?? '');
        $formData['status'] = sanitize($_POST['status'] ?? 'ACTIVE');
        $formData['roles'] = $_POST['roles'] ?? [];
        
        // Validation
        if (empty($formData['display_name'])) $errors[] = 'Name is required.';
        if (empty($formData['mobile'])) $errors[] = 'Mobile number is required.';
        if (empty($formData['roles'])) $errors[] = 'Please assign at least one role.';
        
        // Check for duplicate mobile
        if ($formData['mobile'] !== $user['mobile']) {
            $existing = dbFetchOne("SELECT id FROM users WHERE mobile = ? AND id != ? AND deleted_at IS NULL", [$formData['mobile'], $userId]);
            if ($existing) $errors[] = 'A user with this mobile number already exists.';
        }
        
        // Check for duplicate email
        if ($formData['email'] && $formData['email'] !== $user['email']) {
            $existing = dbFetchOne("SELECT id FROM users WHERE email = ? AND id != ? AND deleted_at IS NULL", [$formData['email'], $userId]);
            if ($existing) $errors[] = 'A user with this email already exists.';
        }
        
        if (empty($errors)) {
            try {
                $db = getDB();
                $db->beginTransaction();
                
                // Update user
                dbExecute("
                    UPDATE users SET 
                        display_name = ?, email = ?, mobile = ?, status = ?, updated_by = ?
                    WHERE id = ?
                ", [
                    $formData['display_name'],
                    $formData['email'] ?: null,
                    $formData['mobile'],
                    $formData['status'],
                    $_SESSION['user_id'],
                    $userId
                ]);
                
                // Update roles - revoke old ones
                dbExecute("UPDATE user_roles SET revoked_at = NOW(), revoked_by = ? WHERE user_id = ? AND revoked_at IS NULL", 
                    [$_SESSION['user_id'], $userId]);
                
                // Assign new roles
                foreach ($formData['roles'] as $roleId) {
                    dbExecute("INSERT INTO user_roles (user_id, role_id, assigned_by) VALUES (?, ?, ?)", 
                        [$userId, $roleId, $_SESSION['user_id']]);
                }
                
                $db->commit();
                logActivity('UPDATE', 'users', $userId, $oldData, $formData);
                
                setFlash('success', 'User updated successfully.');
                header('Location: team.php');
                exit;
                
            } catch (Exception $e) {
                $db->rollBack();
                $errors[] = 'Failed to update user. Please try again.';
            }
        }
    }
}
?>

<div class="mb-6">
    <a href="team.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Team
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Form -->
    <div class="lg:col-span-2">
        <div class="card">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-lg font-semibold">Edit Team Member</h2>
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
            
            <form method="POST" class="p-6 space-y-6">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                
                <!-- Name -->
                <div>
                    <label class="form-label">Full Name *</label>
                    <input type="text" name="display_name" value="<?= htmlspecialchars($formData['display_name']) ?>" class="form-input" required>
                </div>
                
                <!-- Contact -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="form-label">Mobile Number *</label>
                        <input type="tel" name="mobile" value="<?= htmlspecialchars($formData['mobile']) ?>" class="form-input" required>
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="<?= htmlspecialchars($formData['email']) ?>" class="form-input">
                    </div>
                </div>
                
                <!-- Status -->
                <div>
                    <label class="form-label">Status</label>
                    <select name="status" class="form-input">
                        <option value="ACTIVE" <?= $formData['status'] === 'ACTIVE' ? 'selected' : '' ?>>Active</option>
                        <option value="SUSPENDED" <?= $formData['status'] === 'SUSPENDED' ? 'selected' : '' ?>>Suspended</option>
                    </select>
                </div>
                
                <!-- Roles -->
                <div>
                    <label class="form-label">Roles *</label>
                    <div class="space-y-2 mt-2">
                        <?php foreach ($roles as $role): ?>
                        <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" name="roles[]" value="<?= $role['id'] ?>" 
                                   <?= in_array($role['id'], $formData['roles']) ? 'checked' : '' ?>
                                   class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <div>
                                <p class="font-medium text-gray-900"><?= htmlspecialchars($role['name']) ?></p>
                                <p class="text-xs text-gray-500"><?= htmlspecialchars($role['description']) ?></p>
                            </div>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="flex gap-4 pt-6 border-t border-gray-200">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i> Save Changes
                    </button>
                    <a href="team.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Sidebar Actions -->
    <div class="space-y-6">
        <!-- User Info -->
        <div class="card p-6">
            <div class="text-center mb-4">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-3">
                    <span class="text-white text-2xl font-bold"><?= strtoupper(substr($user['display_name'], 0, 1)) ?></span>
                </div>
                <h3 class="font-semibold"><?= htmlspecialchars($user['display_name']) ?></h3>
                <p class="text-sm text-gray-500"><?= htmlspecialchars($user['email'] ?? $user['mobile']) ?></p>
                <div class="mt-2">
                    <?= getStatusBadge($user['status']) ?>
                </div>
            </div>
            <div class="text-sm text-gray-500 space-y-1 pt-4 border-t border-gray-200">
                <p>Created: <?= formatDate($user['created_at']) ?></p>
                <?php if ($user['last_login_at']): ?>
                <p>Last login: <?= formatDate($user['last_login_at'], 'd M Y H:i') ?></p>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h3 class="font-semibold">Quick Actions</h3>
            </div>
            <div class="p-4 space-y-3">
                <a href="?id=<?= $userId ?>&action=reset_password" 
                   class="block w-full btn btn-secondary text-center"
                   onclick="return confirm('Reset password to default (password123)?')">
                    <i class="fas fa-key mr-2"></i> Reset Password
                </a>
                
                <?php if ($user['status'] === 'ACTIVE'): ?>
                <a href="?id=<?= $userId ?>&action=suspend" 
                   class="block w-full btn btn-secondary text-center text-orange-600"
                   onclick="return confirm('Suspend this user?')">
                    <i class="fas fa-ban mr-2"></i> Suspend User
                </a>
                <?php else: ?>
                <a href="?id=<?= $userId ?>&action=activate" 
                   class="block w-full btn btn-secondary text-center text-green-600">
                    <i class="fas fa-check mr-2"></i> Activate User
                </a>
                <?php endif; ?>
                
                <a href="?id=<?= $userId ?>&action=delete" 
                   class="block w-full btn btn-secondary text-center text-red-600"
                   onclick="return confirm('Are you sure you want to delete this user? This cannot be undone.')">
                    <i class="fas fa-trash mr-2"></i> Delete User
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
