<?php
/**
 * PATRON ADMIN DASHBOARD
 * Login Page (index.php)
 * 
 * SECURITY UPDATES:
 * - Session regeneration on login (prevents session fixation)
 * - CSRF token on login form
 */

require_once 'includes/db.php';
startSession();

// Redirect if already logged in
if (isLoggedIn()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
$success = '';

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // SECURITY: Verify CSRF token
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = 'Invalid request. Please try again.';
    } else {
        $email = sanitize($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        
        if (empty($email) || empty($password)) {
            $error = 'Please enter both email and password.';
        } else {
            // Find user by email or mobile
            $user = dbFetchOne("
                SELECT * FROM users 
                WHERE (email = ? OR mobile = ?) 
                AND user_type = 'INTERNAL' 
                AND deleted_at IS NULL
            ", [$email, $email]);
            
            if ($user) {
                // Check if account is locked
                if ($user['locked_until'] && strtotime($user['locked_until']) > time()) {
                    $error = 'Account is locked. Please try again later.';
                } elseif ($user['status'] !== 'ACTIVE') {
                    $error = 'Your account is not active. Please contact administrator.';
                } elseif (password_verify($password, $user['password_hash'])) {
                    // SECURITY: Regenerate session ID to prevent session fixation
                    regenerateSession();
                    
                    // Successful login
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['display_name'];
                    $_SESSION['login_time'] = time();
                    
                    // Reset failed attempts
                    dbExecute("UPDATE users SET failed_login_attempts = 0, locked_until = NULL, last_login_at = NOW() WHERE id = ?", [$user['id']]);
                    
                    // Log activity
                    logActivity('LOGIN', 'users', $user['id']);
                    
                    // Redirect to dashboard
                    header('Location: dashboard.php');
                    exit;
                } else {
                    // Failed login - increment attempts
                    $attempts = $user['failed_login_attempts'] + 1;
                    $lockUntil = null;
                    
                    if ($attempts >= 5) {
                        $lockUntil = date('Y-m-d H:i:s', strtotime('+30 minutes'));
                        $error = 'Too many failed attempts. Account locked for 30 minutes.';
                    } else {
                        $error = 'Invalid email or password. ' . (5 - $attempts) . ' attempts remaining.';
                    }
                    
                    dbExecute("UPDATE users SET failed_login_attempts = ?, locked_until = ? WHERE id = ?", [$attempts, $lockUntil, $user['id']]);
                }
            } else {
                $error = 'Invalid email or password.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?= APP_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-md">
        <!-- Logo/Brand -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-4">
                <span class="text-white text-3xl font-bold">P</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-800"><?= APP_NAME ?></h1>
            <p class="text-gray-600 mt-2">Business Management System</p>
        </div>
        
        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Welcome back!</h2>
            
            <?php if ($error): ?>
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-700 flex items-center gap-2">
                <i class="fas fa-exclamation-circle"></i>
                <span><?= htmlspecialchars($error) ?></span>
            </div>
            <?php endif; ?>
            
            <?php if ($success): ?>
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 flex items-center gap-2">
                <i class="fas fa-check-circle"></i>
                <span><?= htmlspecialchars($success) ?></span>
            </div>
            <?php endif; ?>
            
            <form method="POST" action="" class="space-y-5">
                <!-- SECURITY: CSRF Token -->
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                
                <!-- Email/Mobile -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email or Mobile
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" 
                               id="email" 
                               name="email" 
                               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                               class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="admin@patron.com"
                               required>
                    </div>
                </div>
                
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <div class="relative" x-data="{ show: false }">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input :type="show ? 'text' : 'password'" 
                               id="password" 
                               name="password"
                               class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="••••••••"
                               required>
                        <button type="button" 
                                @click="show = !show"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600">
                            <i :class="show ? 'fa-eye-slash' : 'fa-eye'" class="fas"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <span class="text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="forgot_password.php" class="text-sm text-blue-600 hover:text-blue-700">
                        Forgot password?
                    </a>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Sign In
                </button>
            </form>
            
            <!-- Demo Credentials -->
            <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                <p class="text-sm text-gray-600 font-medium mb-2">Demo Credentials:</p>
                <div class="text-sm text-gray-500 space-y-1">
                    <p><strong>Admin:</strong> admin@patron.com / password</p>
                    <p><strong>Reviewer:</strong> reviewer@patron.com / password</p>
                    <p><strong>Executor:</strong> executor1@patron.com / password</p>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <p class="text-center text-gray-500 text-sm mt-6">
            &copy; <?= date('Y') ?> <?= APP_NAME ?>. All rights reserved.
        </p>
    </div>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
