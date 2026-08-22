<?php
/**
 * PATRON ADMIN DASHBOARD
 * User Profile Page (Enhanced with Photo Upload)
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

$pageTitle = 'My Profile';

$user = null;
if (function_exists('getCurrentUser')) {
    $user = getCurrentUser();
}
if (!$user) {
    setFlash('error', 'Session expired. Please login again.');
    header('Location: login.php');
    exit;
}

$userRoles = [];
try {
    if (function_exists('getUserRoles')) {
        $userRoles = getUserRoles($user['id']) ?: [];
    }
} catch (Exception $e) {
    // Roles might not be set for this user
}

$errors = [];
$success = '';

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        // Update Profile Info
        if ($_POST['action'] === 'update_profile') {
            $displayName = sanitize($_POST['display_name'] ?? '');
            $email = sanitize($_POST['email'] ?? '');
            
            if (empty($displayName)) {
                $errors[] = 'Name is required.';
            }
            
            if ($email && $email !== ($user['email'] ?? '')) {
                $existing = dbFetchOne("SELECT id FROM users WHERE email = ? AND id != ? AND deleted_at IS NULL", [$email, $user['id']]);
                if ($existing) $errors[] = 'This email is already in use.';
            }
            
            if (empty($errors)) {
                dbExecute("UPDATE users SET display_name = ?, email = ?, updated_by = ? WHERE id = ?", 
                    [$displayName, $email ?: null, $user['id'], $user['id']]);
                $_SESSION['user_name'] = $displayName;
                $success = 'Profile updated successfully.';
                $user = getCurrentUser();
            }
        }
        
        // Upload Profile Photo
        if ($_POST['action'] === 'upload_photo') {
            if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
                $file = $_FILES['profile_photo'];
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                $maxSize = 2 * 1024 * 1024; // 2MB
                
                if (!in_array($file['type'], $allowedTypes)) {
                    $errors[] = 'Invalid file type. Please upload JPG, PNG, GIF, or WebP.';
                } elseif ($file['size'] > $maxSize) {
                    $errors[] = 'File too large. Maximum size is 2MB.';
                } else {
                    $uploadDir = 'uploads/profile_photos/';
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755, true);
                    }
                    
                    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                    $filename = 'user_' . $user['id'] . '_' . time() . '.' . $ext;
                    $targetPath = $uploadDir . $filename;
                    
                    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                        // Delete old photo
                        if (!empty($user['profile_photo']) && file_exists($user['profile_photo'])) {
                            @unlink($user['profile_photo']);
                        }
                        
                        dbExecute("UPDATE users SET profile_photo = ? WHERE id = ?", [$targetPath, $user['id']]);
                        $success = 'Profile photo updated successfully.';
                        $user = getCurrentUser();
                    } else {
                        $errors[] = 'Failed to upload photo. Please try again.';
                    }
                }
            } else {
                $errors[] = 'Please select a photo to upload.';
            }
        }
        
        // Remove Profile Photo
        if ($_POST['action'] === 'remove_photo') {
            if (!empty($user['profile_photo']) && file_exists($user['profile_photo'])) {
                @unlink($user['profile_photo']);
            }
            dbExecute("UPDATE users SET profile_photo = NULL WHERE id = ?", [$user['id']]);
            $success = 'Profile photo removed.';
            $user = getCurrentUser();
        }
        
        // Change Password
        if ($_POST['action'] === 'change_password') {
            $currentPassword = $_POST['current_password'] ?? '';
            $newPassword = $_POST['new_password'] ?? '';
            $confirmPassword = $_POST['confirm_password'] ?? '';
            
            if (!password_verify($currentPassword, $user['password_hash'] ?? '')) {
                $errors[] = 'Current password is incorrect.';
            }
            if (strlen($newPassword) < 6) {
                $errors[] = 'New password must be at least 6 characters.';
            }
            if ($newPassword !== $confirmPassword) {
                $errors[] = 'Passwords do not match.';
            }
            
            if (empty($errors)) {
                dbExecute("UPDATE users SET password_hash = ?, updated_by = ? WHERE id = ?", 
                    [password_hash($newPassword, PASSWORD_DEFAULT), $user['id'], $user['id']]);
                $success = 'Password changed successfully.';
                if (function_exists('logActivity')) {
                    logActivity('UPDATE', 'users', $user['id'], null, ['action' => 'password_change']);
                }
            }
        }
    }
}

// Get recent activity
$recentActivity = [];
try {
    $recentActivity = dbFetchAll("
        SELECT * FROM activity_logs 
        WHERE user_id = ? 
        ORDER BY created_at DESC 
        LIMIT 10
    ", [$user['id']]) ?: [];
} catch (Exception $e) {
    // Activity logs table might not exist
}

require_once 'includes/header.php';
?>

<style>
.photo-upload-container { position: relative; display: inline-block; }
.photo-upload-overlay { 
    position: absolute; inset: 0; background: rgba(0,0,0,0.5); border-radius: 9999px;
    display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.2s;
    cursor: pointer;
}
.photo-upload-container:hover .photo-upload-overlay { opacity: 1; }
</style>

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
    <!-- Profile Overview -->
    <div class="lg:col-span-1">
        <div class="card p-6 text-center">
            <!-- Profile Photo with Upload -->
            <div class="photo-upload-container mx-auto mb-4">
                <?php if (!empty($user['profile_photo']) && file_exists($user['profile_photo'])): ?>
                <img src="<?= htmlspecialchars($user['profile_photo']) ?>?t=<?= time() ?>" 
                     class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg">
                <?php else: ?>
                <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center shadow-lg">
                    <span class="text-white text-4xl font-bold"><?= strtoupper(substr($user['display_name'] ?? 'U', 0, 1)) ?></span>
                </div>
                <?php endif; ?>
                <label class="photo-upload-overlay" onclick="document.getElementById('photoModal').classList.add('show')">
                    <i class="fas fa-camera text-white text-2xl"></i>
                </label>
            </div>
            
            <h2 class="text-xl font-bold text-gray-900"><?= htmlspecialchars($user['display_name'] ?? 'User') ?></h2>
            <p class="text-gray-500"><?= htmlspecialchars($user['email'] ?? $user['mobile'] ?? '') ?></p>
            
            <div class="mt-4 flex flex-wrap justify-center gap-2">
                <?php foreach ($userRoles as $role): ?>
                <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">
                    <?= htmlspecialchars($role['name'] ?? $role) ?>
                </span>
                <?php endforeach; ?>
            </div>
            
            <div class="mt-6 pt-6 border-t border-gray-200 text-sm text-gray-500">
                <p>Member since <?= !empty($user['created_at']) ? date('M Y', strtotime($user['created_at'])) : '-' ?></p>
                <?php if (!empty($user['last_login_at'])): ?>
                <p>Last login: <?= date('d M Y H:i', strtotime($user['last_login_at'])) ?></p>
                <?php endif; ?>
            </div>
            
            <!-- Quick Actions -->
            <div class="mt-6 pt-4 border-t flex justify-center gap-3">
                <button onclick="document.getElementById('photoModal').classList.add('show')" 
                        class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm hover:bg-blue-200">
                    <i class="fas fa-camera mr-1"></i> Change Photo
                </button>
            </div>
        </div>
        
        <!-- Leave Link (for users to apply leave) -->
        <div class="card p-4 mt-6">
            <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-calendar-alt mr-2 text-green-500"></i>Leave</h4>
            <a href="apply_leave.php" class="block p-3 bg-green-50 rounded-lg text-green-700 hover:bg-green-100 text-center">
                <i class="fas fa-plus-circle mr-2"></i>Apply for Leave
            </a>
        </div>
    </div>
    
    <!-- Profile Forms -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Update Profile -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h3 class="font-semibold"><i class="fas fa-user mr-2 text-blue-500"></i>Profile Information</h3>
            </div>
            <form method="POST" class="p-6 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="update_profile">
                
                <div>
                    <label class="form-label">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" name="display_name" value="<?= htmlspecialchars($user['display_name'] ?? '') ?>" class="form-input" required>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" class="form-input">
                    </div>
                    <div>
                        <label class="form-label">Mobile</label>
                        <input type="text" value="<?= htmlspecialchars($user['mobile'] ?? '') ?>" class="form-input bg-gray-100" disabled>
                        <p class="text-xs text-gray-500 mt-1">Contact admin to change mobile</p>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i> Update Profile
                </button>
            </form>
        </div>
        
        <!-- Change Password -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h3 class="font-semibold"><i class="fas fa-key mr-2 text-amber-500"></i>Change Password</h3>
            </div>
            <form method="POST" class="p-6 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="change_password">
                
                <div>
                    <label class="form-label">Current Password <span class="text-red-500">*</span></label>
                    <input type="password" name="current_password" class="form-input" required>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">New Password <span class="text-red-500">*</span></label>
                        <input type="password" name="new_password" class="form-input" required minlength="6">
                    </div>
                    <div>
                        <label class="form-label">Confirm New Password <span class="text-red-500">*</span></label>
                        <input type="password" name="confirm_password" class="form-input" required>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-key mr-2"></i> Change Password
                </button>
            </form>
        </div>
        
        <!-- Recent Activity -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h3 class="font-semibold"><i class="fas fa-history mr-2 text-purple-500"></i>Recent Activity</h3>
            </div>
            <?php if (empty($recentActivity)): ?>
            <div class="p-6 text-center text-gray-500">
                No recent activity.
            </div>
            <?php else: ?>
            <div class="divide-y divide-gray-100 max-h-64 overflow-y-auto">
                <?php foreach ($recentActivity as $activity): ?>
                <div class="p-4 flex items-center gap-4">
                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-<?= ($activity['action'] ?? '') === 'LOGIN' ? 'sign-in-alt' : (($activity['action'] ?? '') === 'CREATE' ? 'plus' : 'edit') ?> text-gray-500"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">
                            <?= htmlspecialchars($activity['action'] ?? '') ?> - <?= htmlspecialchars($activity['resource_type'] ?? '') ?>
                            <?php if (!empty($activity['resource_id'])): ?>#<?= $activity['resource_id'] ?><?php endif; ?>
                        </p>
                        <p class="text-xs text-gray-500"><?= !empty($activity['created_at']) ? date('d M Y H:i', strtotime($activity['created_at'])) : '' ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Photo Upload Modal -->
<div id="photoModal" class="modal">
    <div class="modal-content" style="max-width: 400px;">
        <div class="p-4 border-b flex justify-between items-center">
            <h3 class="font-bold"><i class="fas fa-camera mr-2 text-blue-500"></i>Update Profile Photo</h3>
            <button onclick="document.getElementById('photoModal').classList.remove('show')" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-6">
            <!-- Preview -->
            <div class="text-center mb-6">
                <?php if (!empty($user['profile_photo']) && file_exists($user['profile_photo'])): ?>
                <img src="<?= htmlspecialchars($user['profile_photo']) ?>?t=<?= time() ?>" 
                     id="photoPreview" class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-gray-200">
                <?php else: ?>
                <div id="photoPreview" class="w-32 h-32 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto">
                    <span class="text-white text-5xl font-bold"><?= strtoupper(substr($user['display_name'] ?? 'U', 0, 1)) ?></span>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Upload Form -->
            <form method="POST" enctype="multipart/form-data" class="space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="upload_photo">
                
                <div>
                    <label class="block w-full p-4 border-2 border-dashed border-gray-300 rounded-lg text-center cursor-pointer hover:border-blue-400 hover:bg-blue-50 transition">
                        <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                        <p class="text-sm text-gray-600">Click to select photo</p>
                        <p class="text-xs text-gray-400">JPG, PNG, GIF, WebP (max 2MB)</p>
                        <input type="file" name="profile_photo" accept="image/*" class="hidden" onchange="previewPhoto(this)">
                    </label>
                </div>
                
                <div class="flex gap-2">
                    <button type="submit" class="btn btn-primary flex-1">
                        <i class="fas fa-upload mr-2"></i>Upload
                    </button>
                    <?php if (!empty($user['profile_photo'])): ?>
                    <button type="submit" name="action" value="remove_photo" class="btn btn-secondary"
                            onclick="return confirm('Remove your profile photo?')">
                        <i class="fas fa-trash"></i>
                    </button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; padding: 1rem; }
.modal.show { display: flex; }
.modal-content { background: white; border-radius: 1rem; max-height: 90vh; overflow-y: auto; }
</style>

<script>
function previewPhoto(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('photoPreview');
            if (preview.tagName === 'IMG') {
                preview.src = e.target.result;
            } else {
                // Replace div with img
                const img = document.createElement('img');
                img.id = 'photoPreview';
                img.src = e.target.result;
                img.className = 'w-32 h-32 rounded-full object-cover mx-auto border-4 border-gray-200';
                preview.parentNode.replaceChild(img, preview);
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>
