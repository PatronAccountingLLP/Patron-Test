<?php
/**
 * PATRON ADMIN DASHBOARD
 * Add Team Member Page
 */

$pageTitle = 'Add Team Member';
require_once 'includes/header.php';
requireAdmin();

$errors = [];
$formData = [
    'display_name' => '',
    'email' => '',
    'mobile' => '',
    'password' => '',
    'roles' => []
];

// Get roles
$roles = dbFetchAll("SELECT * FROM roles WHERE deleted_at IS NULL ORDER BY name");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $formData['display_name'] = sanitize($_POST['display_name'] ?? '');
        $formData['email'] = sanitize($_POST['email'] ?? '');
        $formData['mobile'] = sanitize($_POST['mobile'] ?? '');
        $formData['password'] = $_POST['password'] ?? '';
        $formData['roles'] = $_POST['roles'] ?? [];
        
        // Validation
        if (empty($formData['display_name'])) $errors[] = 'Name is required.';
        if (empty($formData['mobile'])) $errors[] = 'Mobile number is required.';
        if (empty($formData['password'])) $errors[] = 'Password is required.';
        if (strlen($formData['password']) < 6) $errors[] = 'Password must be at least 6 characters.';
        if (empty($formData['roles'])) $errors[] = 'Please assign at least one role.';
        
        // Check for duplicate mobile
        if ($formData['mobile']) {
            $existing = dbFetchOne("SELECT id FROM users WHERE mobile = ? AND deleted_at IS NULL", [$formData['mobile']]);
            if ($existing) $errors[] = 'A user with this mobile number already exists.';
        }
        
        // Check for duplicate email
        if ($formData['email']) {
            $existing = dbFetchOne("SELECT id FROM users WHERE email = ? AND deleted_at IS NULL", [$formData['email']]);
            if ($existing) $errors[] = 'A user with this email already exists.';
        }
        
        if (empty($errors)) {
            try {
                $db = getDB();
                $db->beginTransaction();
                
                // Create user
                dbExecute("
                    INSERT INTO users (mobile, mobile_verified, email, password_hash, user_type, display_name, status, created_by)
                    VALUES (?, 1, ?, ?, 'INTERNAL', ?, 'ACTIVE', ?)
                ", [
                    $formData['mobile'],
                    $formData['email'] ?: null,
                    password_hash($formData['password'], PASSWORD_DEFAULT),
                    $formData['display_name'],
                    $_SESSION['user_id']
                ]);
                
                $userId = dbLastInsertId();
                
                // Assign roles
                foreach ($formData['roles'] as $roleId) {
                    dbExecute("
                        INSERT INTO user_roles (user_id, role_id, assigned_by)
                        VALUES (?, ?, ?)
                    ", [$userId, $roleId, $_SESSION['user_id']]);
                }
                
                $db->commit();
                logActivity('CREATE', 'users', $userId, null, ['display_name' => $formData['display_name'], 'roles' => $formData['roles']]);
                
                setFlash('success', 'Team member added successfully.');
                header('Location: team.php');
                exit;
                
            } catch (Exception $e) {
                $db->rollBack();
                $errors[] = 'Failed to create user. Please try again.';
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

<div class="card max-w-xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-lg font-semibold">Add Team Member</h2>
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
                <input type="tel" name="mobile" value="<?= htmlspecialchars($formData['mobile']) ?>" class="form-input" required
                       placeholder="+919876543210">
            </div>
            <div>
                <label class="form-label">Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($formData['email']) ?>" class="form-input"
                       placeholder="user@example.com">
            </div>
        </div>
        
        <!-- Password -->
        <div>
            <label class="form-label">Password *</label>
            <input type="password" name="password" class="form-input" required minlength="6"
                   placeholder="Minimum 6 characters">
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
                <i class="fas fa-user-plus mr-2"></i> Add Team Member
            </button>
            <a href="team.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>
