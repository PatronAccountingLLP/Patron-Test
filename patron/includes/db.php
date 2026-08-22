<?php
/**
 * PATRON ADMIN DASHBOARD
 * Database Connection File
 * 
 * SECURITY UPDATES:
 * - Credentials loaded from .env file
 * - display_errors disabled in production
 * - Session security (httponly, secure, samesite)
 * - Error logging to file
 */

// ============================================================
// ENVIRONMENT CONFIGURATION
// ============================================================

/**
 * Load environment variables from .env file
 * Place .env file ONE LEVEL UP from public_html for security
 */
function loadEnv() {
    // Try multiple locations for .env file
    $envPaths = [
        __DIR__ . '/../../.env',                    // Outside public_html (recommended)
        __DIR__ . '/../.env',                       // One level up from includes
        __DIR__ . '/.env',                          // Same directory (not recommended)
    ];
    
    foreach ($envPaths as $envPath) {
        if (file_exists($envPath)) {
            $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                // Skip comments
                if (strpos(trim($line), '#') === 0) continue;
                
                // Parse KEY=VALUE
                if (strpos($line, '=') !== false) {
                    list($key, $value) = explode('=', $line, 2);
                    $key = trim($key);
                    $value = trim($value);
                    
                    // Remove quotes if present
                    $value = trim($value, '"\'');
                    
                    // Set as environment variable
                    putenv("$key=$value");
                    $_ENV[$key] = $value;
                }
            }
            return true;
        }
    }
    return false;
}

// Load environment
loadEnv();

/**
 * Get environment variable with fallback
 */
function env($key, $default = null) {
    $value = getenv($key);
    if ($value === false) {
        $value = $_ENV[$key] ?? $default;
    }
    return $value;
}

// ============================================================
// DATABASE CONFIGURATION
// ============================================================

// Load from .env or use defaults (for backward compatibility)
define('DB_HOST', env('DB_HOST', '127.0.0.1'));
define('DB_NAME', env('DB_NAME', 'patron_dashboard'));
define('DB_USER', env('DB_USER', 'root'));
define('DB_PASS', env('DB_PASS', 'g7H@kL9#xP2!mT8$'));  // Will be overridden by .env

// ============================================================
// APPLICATION CONFIGURATION
// ============================================================

define('APP_NAME', 'Patron Admin');
define('APP_URL', env('APP_URL', 'https://patronaccounting.com/patron'));
define('APP_VERSION', '1.0.0');
define('APP_ENV', env('APP_ENV', 'production'));
define('APP_DEBUG', env('APP_DEBUG', 'false') === 'true');

// ============================================================
// SESSION CONFIGURATION
// ============================================================

define('SESSION_LIFETIME', (int)env('SESSION_LIFETIME', 7200)); // 2 hours
define('SESSION_SECURE', env('SESSION_SECURE', 'true') === 'true');
define('SESSION_HTTPONLY', env('SESSION_HTTPONLY', 'true') === 'true');

// ============================================================
// UPLOAD CONFIGURATION
// ============================================================

define('UPLOAD_DIR', __DIR__ . '/../uploads/');
define('MAX_FILE_SIZE', 10 * 1024 * 1024); // 10MB
define('ALLOWED_EXTENSIONS', ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'xls', 'xlsx']);

// ============================================================
// TIMEZONE & ERROR HANDLING
// ============================================================

date_default_timezone_set('Asia/Kolkata');

// SECURITY: Disable display_errors in production
if (APP_ENV === 'production' || !APP_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/../logs/php_errors.log');
} else {
    // Development mode - show errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// ============================================================
// DATABASE CONNECTION CLASS
// ============================================================

class Database {
    private static $instance = null;
    private $conn;

    private function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
            $this->conn->exec("SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");
        } catch (PDOException $e) {
            // Log error but don't expose details
            error_log("Database Connection Failed: " . $e->getMessage());
            
            if (APP_DEBUG) {
                die("Database Connection Failed: " . $e->getMessage());
            } else {
                die("Database connection error. Please contact administrator.");
            }
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

    private function __clone() {}

    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }
}

// ============================================================
// DATABASE HELPER FUNCTIONS
// ============================================================

function getDB() {
    return Database::getInstance()->getConnection();
}

function dbFetchAll($sql, $params = []) {
    $db = getDB();
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function dbFetchOne($sql, $params = []) {
    $db = getDB();
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetch();
}

function dbExecute($sql, $params = []) {
    $db = getDB();
    $stmt = $db->prepare($sql);
    return $stmt->execute($params);
}

function dbLastInsertId() {
    return getDB()->lastInsertId();
}

// ============================================================
// SESSION MANAGEMENT (SECURED)
// ============================================================

function startSession() {
    if (session_status() === PHP_SESSION_NONE) {
        // SECURITY: Set secure session parameters BEFORE starting session
        ini_set('session.cookie_httponly', SESSION_HTTPONLY ? 1 : 0);
        ini_set('session.cookie_samesite', 'Strict');
        ini_set('session.use_strict_mode', 1);
        ini_set('session.cookie_lifetime', SESSION_LIFETIME);
        ini_set('session.gc_maxlifetime', SESSION_LIFETIME);
        
        // Only set secure cookie if using HTTPS
        if (SESSION_SECURE && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            ini_set('session.cookie_secure', 1);
        }
        
        session_start();
    }
}

/**
 * Regenerate session ID - call after login to prevent session fixation
 */
function regenerateSession() {
    startSession();
    session_regenerate_id(true);
}

function isLoggedIn() {
    startSession();
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

function getCurrentUser() {
    if (!isLoggedIn()) {
        return null;
    }
    return dbFetchOne("SELECT * FROM users WHERE id = ? AND deleted_at IS NULL", [$_SESSION['user_id']]);
}

function getUserRoles($userId) {
    return dbFetchAll("
        SELECT r.code, r.name 
        FROM user_roles ur 
        JOIN roles r ON ur.role_id = r.id 
        WHERE ur.user_id = ? AND ur.revoked_at IS NULL AND r.deleted_at IS NULL
    ", [$userId]);
}

function hasRole($roleCode) {
    if (!isLoggedIn()) return false;
    $roles = getUserRoles($_SESSION['user_id']);
    foreach ($roles as $role) {
        if ($role['code'] === $roleCode) return true;
    }
    return false;
}

function isAdmin() {
    return hasRole('ADMIN');
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: index.php');
        exit;
    }
}

function requireAdmin() {
    requireLogin();
    if (!isAdmin()) {
        header('Location: dashboard.php?error=access_denied');
        exit;
    }
}

// ============================================================
// INPUT SANITIZATION
// ============================================================

function sanitize($input) {
    if (is_array($input)) {
        return array_map('sanitize', $input);
    }
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// ============================================================
// CSRF PROTECTION
// ============================================================

function generateCsrfToken() {
    startSession();
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCsrfToken($token) {
    startSession();
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// ============================================================
// FLASH MESSAGES
// ============================================================

function setFlash($type, $message) {
    startSession();
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

function getFlash() {
    startSession();
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

// ============================================================
// FORMATTING HELPERS
// ============================================================

function formatDate($date, $format = 'd M Y') {
    if (empty($date)) return '-';
    return date($format, strtotime($date));
}

function formatCurrency($amount) {
    return '₹' . number_format($amount, 2);
}

// ============================================================
// ACTIVITY LOGGING
// ============================================================

function logActivity($action, $resourceType, $resourceId = null, $oldValues = null, $newValues = null) {
    if (!isLoggedIn()) return;
    
    dbExecute("
        INSERT INTO activity_logs (user_id, action, resource_type, resource_id, old_values, new_values, ip_address, user_agent) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ", [
        $_SESSION['user_id'],
        $action,
        $resourceType,
        $resourceId,
        $oldValues ? json_encode($oldValues) : null,
        $newValues ? json_encode($newValues) : null,
        $_SERVER['REMOTE_ADDR'] ?? null,
        $_SERVER['HTTP_USER_AGENT'] ?? null
    ]);
}

// ============================================================
// STATUS BADGES
// ============================================================

function getStatusBadge($status) {
    $badges = [
        'NEW' => 'bg-blue-100 text-blue-800',
        'PENDING' => 'bg-yellow-100 text-yellow-800',
        'IN_PROGRESS' => 'bg-purple-100 text-purple-800',
        'REVIEW' => 'bg-orange-100 text-orange-800',
        'REVISION' => 'bg-red-100 text-red-800',
        'COLLECTING' => 'bg-indigo-100 text-indigo-800',
        'PROCESSING' => 'bg-cyan-100 text-cyan-800',
        'GOVT_PENDING' => 'bg-amber-100 text-amber-800',
        'COMPLETED' => 'bg-green-100 text-green-800',
        'CANCELLED' => 'bg-gray-100 text-gray-800',
        'ACTIVE' => 'bg-green-100 text-green-800',
        'INACTIVE' => 'bg-gray-100 text-gray-800',
        'SUSPENDED' => 'bg-red-100 text-red-800',
        'VERIFIED' => 'bg-green-100 text-green-800',
        'REJECTED' => 'bg-red-100 text-red-800',
        'UPLOADED' => 'bg-blue-100 text-blue-800',
        'EXPIRING' => 'bg-orange-100 text-orange-800',
        'EXPIRED' => 'bg-red-100 text-red-800',
    ];
    
    $class = $badges[$status] ?? 'bg-gray-100 text-gray-800';
    $label = str_replace('_', ' ', $status);
    
    return "<span class=\"px-2 py-1 text-xs font-medium rounded-full {$class}\">{$label}</span>";
}

function getPriorityBadge($priority) {
    $badges = [
        'LOW' => 'bg-gray-100 text-gray-800',
        'MEDIUM' => 'bg-blue-100 text-blue-800',
        'HIGH' => 'bg-orange-100 text-orange-800',
        'URGENT' => 'bg-red-100 text-red-800',
    ];
    
    $class = $badges[$priority] ?? 'bg-gray-100 text-gray-800';
    
    return "<span class=\"px-2 py-1 text-xs font-medium rounded-full {$class}\">{$priority}</span>";
}
?>
