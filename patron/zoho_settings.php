<?php
/**
 * PATRON - Zoho Books Integration Settings
 * Admin page to configure Zoho API connection
 * 
 * LOCATION: /patron/zoho_settings.php
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/zoho_api.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied');
    header('Location: dashboard.php'); exit;
}

$pageTitle = 'Zoho Books Integration';
$zoho = new ZohoBooks();

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'save_settings') {
        $zoho->saveSetting('client_id', trim($_POST['client_id'] ?? ''));
        $zoho->saveSetting('client_secret', trim($_POST['client_secret'] ?? ''));
        $zoho->saveSetting('organization_id', trim($_POST['organization_id'] ?? ''));
        $zoho->saveSetting('datacenter', $_POST['datacenter'] ?? 'in');
        $zoho->saveSetting('auto_sync_enabled', isset($_POST['auto_sync_enabled']) ? '1' : '0');
        
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $redirectUri = $protocol . '://' . $host . dirname($_SERVER['REQUEST_URI']) . '/zoho_callback.php';
        $zoho->saveSetting('redirect_uri', $redirectUri);
        
        setFlash('success', 'Settings saved. Now click "Connect to Zoho" to authorize.');
        header('Location: zoho_settings.php'); exit;
    }
    
    if ($action === 'disconnect') {
        $zoho->disconnect();
        setFlash('success', 'Disconnected from Zoho Books.');
        header('Location: zoho_settings.php'); exit;
    }
    
    if ($action === 'test_connection') {
        $result = $zoho->testConnection();
        if ($result['success']) {
            setFlash('success', 'Connection successful! API is working.');
        } else {
            setFlash('error', 'Connection failed: ' . ($result['error'] ?? 'Unknown error'));
        }
        header('Location: zoho_settings.php'); exit;
    }
    
    if ($action === 'refresh_token') {
        $result = $zoho->refreshAccessToken();
        if ($result) {
            setFlash('success', 'Access token refreshed successfully.');
        } else {
            setFlash('error', 'Failed to refresh token: ' . ($zoho->getLastError() ?? 'Unknown error'));
        }
        header('Location: zoho_settings.php'); exit;
    }
    
    if ($action === 'clear_sync_times') {
        // Clear last sync timestamps to force full re-sync
        dbExecute("DELETE FROM zoho_settings WHERE setting_key LIKE 'last_sync_%'");
        setFlash('success', 'Last sync times cleared. Next sync will be a full sync.');
        header('Location: zoho_settings.php'); exit;
    }
}

// Load current settings
$settings = [];
$dbSettings = dbFetchAll("SELECT setting_key, setting_value FROM zoho_settings") ?: [];
foreach ($dbSettings as $s) {
    $settings[$s['setting_key']] = $s['setting_value'];
}

$isConnected = $zoho->isConnected();
$isConfigured = $zoho->isConfigured();

// Get sync logs
$syncLogs = dbFetchAll("SELECT * FROM zoho_sync_log ORDER BY started_at DESC LIMIT 15") ?: [];

// Token status
$tokenExpiry = $settings['token_expires_at'] ?? null;
$tokenExpired = $tokenExpiry && strtotime($tokenExpiry) < time();

require_once 'includes/header.php';
?>

<style>
.status-badge { display: inline-flex; align-items: center; gap: 6px; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500; }
.status-connected { background: #D1FAE5; color: #065F46; }
.status-disconnected { background: #FEE2E2; color: #991B1B; }
.status-partial { background: #FEF3C7; color: #92400E; }
.credential-field { font-family: monospace; font-size: 12px; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-plug text-blue-600 mr-2"></i>Zoho Books Integration</h1>
        <p class="text-gray-500 text-sm">Connect to sync invoices, quotations and payments</p>
    </div>
    <?php if ($isConnected): ?>
    <a href="zoho_sync.php" class="btn btn-primary"><i class="fas fa-sync mr-2"></i>Sync Dashboard</a>
    <?php endif; ?>
</div>

<!-- Connection Status -->
<div class="card mb-6">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h3 class="font-semibold">Connection Status</h3>
        <?php if ($isConnected): ?>
        <span class="status-badge status-connected"><i class="fas fa-check-circle"></i> Connected</span>
        <?php elseif ($isConfigured): ?>
        <span class="status-badge status-partial"><i class="fas fa-exclamation-circle"></i> Not Authorized</span>
        <?php else: ?>
        <span class="status-badge status-disconnected"><i class="fas fa-times-circle"></i> Not Configured</span>
        <?php endif; ?>
    </div>
    <div class="p-4">
        <?php if ($isConnected): ?>
        <div class="flex items-center justify-between">
            <div>
                <p class="text-green-700"><i class="fas fa-check mr-1"></i>Connected to Zoho Books</p>
                <p class="text-sm text-gray-500">Org ID: <?= htmlspecialchars($settings['organization_id'] ?? '') ?></p>
                <?php if ($tokenExpiry): ?>
                <p class="text-xs <?= $tokenExpired ? 'text-red-500' : 'text-gray-400' ?> mt-1">
                    Token <?= $tokenExpired ? 'expired' : 'expires' ?>: <?= date('d M Y H:i', strtotime($tokenExpiry)) ?>
                </p>
                <?php endif; ?>
            </div>
            <div class="flex gap-2 flex-wrap">
                <form method="POST" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="test_connection">
                    <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-vial mr-1"></i>Test</button>
                </form>
                <form method="POST" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="refresh_token">
                    <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-redo mr-1"></i>Refresh Token</button>
                </form>
                <form method="POST" class="inline" onsubmit="return confirm('Clear sync times? This will force a full re-sync.')">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="clear_sync_times">
                    <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-clock mr-1"></i>Reset Sync</button>
                </form>
                <form method="POST" class="inline" onsubmit="return confirm('Disconnect from Zoho?')">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="disconnect">
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-unlink mr-1"></i>Disconnect</button>
                </form>
            </div>
        </div>
        <?php elseif ($isConfigured): ?>
        <div class="flex items-center justify-between">
            <p class="text-amber-700"><i class="fas fa-exclamation-triangle mr-1"></i>Credentials saved. Click to authorize.</p>
            <a href="<?= htmlspecialchars($zoho->getAuthorizationUrl()) ?>" class="btn btn-primary">
                <i class="fas fa-sign-in-alt mr-2"></i>Connect to Zoho
            </a>
        </div>
        <?php else: ?>
        <p class="text-gray-600">Enter your Zoho API credentials below to get started.</p>
        <?php endif; ?>
    </div>
</div>

<!-- API Credentials -->
<div class="card mb-6">
    <div class="p-4 border-b bg-blue-50">
        <h3 class="font-semibold text-blue-800"><i class="fas fa-key mr-2"></i>API Credentials</h3>
    </div>
    <form method="POST" class="p-6">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
        <input type="hidden" name="action" value="save_settings">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="form-label">Client ID <span class="text-red-500">*</span></label>
                <input type="text" name="client_id" class="form-input credential-field" 
                       value="<?= htmlspecialchars($settings['client_id'] ?? '') ?>" placeholder="1000.XXXXXXXXX">
                <p class="text-xs text-gray-500 mt-1">From Zoho API Console</p>
            </div>
            
            <div>
                <label class="form-label">Client Secret <span class="text-red-500">*</span></label>
                <input type="password" name="client_secret" class="form-input credential-field" 
                       value="<?= htmlspecialchars($settings['client_secret'] ?? '') ?>" placeholder="Enter client secret">
                <p class="text-xs text-gray-500 mt-1">Keep this secret</p>
            </div>
            
            <div>
                <label class="form-label">Organization ID <span class="text-red-500">*</span></label>
                <input type="text" name="organization_id" class="form-input credential-field" 
                       value="<?= htmlspecialchars($settings['organization_id'] ?? '') ?>" placeholder="60005XXXXXXXX">
                <p class="text-xs text-gray-500 mt-1">From Zoho Books → Settings → Organization</p>
            </div>
            
            <div>
                <label class="form-label">Datacenter</label>
                <select name="datacenter" class="form-input">
                    <option value="in" <?= ($settings['datacenter'] ?? 'in') === 'in' ? 'selected' : '' ?>>India (.in)</option>
                    <option value="com" <?= ($settings['datacenter'] ?? '') === 'com' ? 'selected' : '' ?>>US (.com)</option>
                    <option value="eu" <?= ($settings['datacenter'] ?? '') === 'eu' ? 'selected' : '' ?>>Europe (.eu)</option>
                    <option value="au" <?= ($settings['datacenter'] ?? '') === 'au' ? 'selected' : '' ?>>Australia (.au)</option>
                </select>
            </div>
        </div>
        
        <!-- Auto-sync toggle -->
        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" name="auto_sync_enabled" class="rounded text-blue-600" 
                       <?= ($settings['auto_sync_enabled'] ?? '1') === '1' ? 'checked' : '' ?>>
                <div>
                    <span class="font-medium">Enable Auto-Sync (every 15 minutes)</span>
                    <p class="text-xs text-gray-500">Requires cron job setup on server</p>
                </div>
            </label>
        </div>
        
        <?php if (!empty($settings['redirect_uri'])): ?>
        <div class="mt-4 p-3 bg-gray-50 rounded-lg">
            <label class="text-xs text-gray-500">Redirect URI (add to Zoho API Console)</label>
            <div class="flex items-center gap-2 mt-1">
                <code class="flex-1 p-2 bg-white border rounded text-xs break-all"><?= htmlspecialchars($settings['redirect_uri']) ?></code>
                <button type="button" onclick="navigator.clipboard.writeText('<?= htmlspecialchars($settings['redirect_uri']) ?>'); this.innerHTML='<i class=\'fas fa-check\'></i>'; setTimeout(() => this.innerHTML='<i class=\'fas fa-copy\'></i>', 2000)" class="btn btn-secondary btn-sm">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="mt-6 flex gap-3">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Save Settings</button>
            <?php if ($isConfigured && !$isConnected): ?>
            <a href="<?= htmlspecialchars($zoho->getAuthorizationUrl()) ?>" class="btn btn-success">
                <i class="fas fa-sign-in-alt mr-2"></i>Connect to Zoho
            </a>
            <?php endif; ?>
        </div>
    </form>
</div>

<!-- Setup Guide -->
<div class="card mb-6">
    <div class="p-4 border-b bg-gray-50">
        <h3 class="font-semibold"><i class="fas fa-book text-gray-500 mr-2"></i>Setup Guide</h3>
    </div>
    <div class="p-4">
        <ol class="list-decimal list-inside space-y-3 text-sm text-gray-600">
            <li>
                <span class="font-medium">Create Zoho API Client:</span>
                <ul class="ml-6 mt-1 list-disc text-xs space-y-1">
                    <li>Go to <a href="https://api-console.zoho.in/" target="_blank" class="text-blue-600 hover:underline">Zoho API Console</a></li>
                    <li>Click "Add Client" → Select "Server-based Applications"</li>
                    <li>Enter a name (e.g., "Patron Integration")</li>
                    <li>Add the Redirect URI shown above</li>
                </ul>
            </li>
            <li>
                <span class="font-medium">Copy Credentials:</span>
                <ul class="ml-6 mt-1 list-disc text-xs space-y-1">
                    <li>Copy Client ID and Client Secret from Zoho</li>
                </ul>
            </li>
            <li>
                <span class="font-medium">Get Organization ID:</span>
                <ul class="ml-6 mt-1 list-disc text-xs space-y-1">
                    <li>Open Zoho Books → Settings → Organization Profile</li>
                    <li>The Organization ID is displayed on that page</li>
                </ul>
            </li>
            <li>
                <span class="font-medium">Connect:</span>
                <ul class="ml-6 mt-1 list-disc text-xs space-y-1">
                    <li>Save credentials and click "Connect to Zoho"</li>
                    <li>Authorize the app in Zoho's OAuth screen</li>
                </ul>
            </li>
            <li>
                <span class="font-medium">Setup Auto-Sync (optional):</span>
                <ul class="ml-6 mt-1 list-disc text-xs space-y-1">
                    <li>Add cron job for automatic sync every 15 minutes</li>
                    <li>See Sync Dashboard for cron command</li>
                </ul>
            </li>
        </ol>
    </div>
</div>

<!-- Troubleshooting -->
<div class="card mb-6">
    <div class="p-4 border-b bg-amber-50">
        <h3 class="font-semibold text-amber-800"><i class="fas fa-wrench mr-2"></i>Troubleshooting</h3>
    </div>
    <div class="p-4 text-sm">
        <div class="space-y-3">
            <div>
                <p class="font-medium text-gray-700">Sync not working?</p>
                <ul class="ml-4 list-disc text-xs text-gray-600 mt-1">
                    <li>Check if connection test passes</li>
                    <li>Try refreshing the token</li>
                    <li>Verify Organization ID matches your Zoho Books account</li>
                </ul>
            </div>
            <div>
                <p class="font-medium text-gray-700">Auto-sync not running?</p>
                <ul class="ml-4 list-disc text-xs text-gray-600 mt-1">
                    <li>Ensure cron job is properly configured</li>
                    <li>Check server logs for errors</li>
                    <li>Verify PHP path in cron command</li>
                </ul>
            </div>
            <div>
                <p class="font-medium text-gray-700">"Invalid value passed for last_modified_time" error?</p>
                <ul class="ml-4 list-disc text-xs text-gray-600 mt-1">
                    <li>Click "Reset Sync" button above to clear cached timestamps</li>
                    <li>Then run a full sync (check "Full sync" option)</li>
                </ul>
            </div>
            <div>
                <p class="font-medium text-gray-700">"Invalid Grant" error?</p>
                <ul class="ml-4 list-disc text-xs text-gray-600 mt-1">
                    <li>Disconnect and reconnect to get fresh tokens</li>
                    <li>Ensure redirect URI matches exactly in Zoho Console</li>
                </ul>
            </div>
        </div>
        <div class="mt-4">
            <a href="zoho_debug.php" class="text-blue-600 hover:underline text-sm"><i class="fas fa-bug mr-1"></i>Run Debug Test</a>
        </div>
    </div>
</div>

<!-- Recent Sync Logs -->
<?php if (!empty($syncLogs)): ?>
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-semibold"><i class="fas fa-history mr-2"></i>Recent Sync Activity</h3>
        <a href="zoho_sync.php" class="text-sm text-blue-600">View All →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left">Type</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-center">Created</th>
                    <th class="px-4 py-2 text-center">Updated</th>
                    <th class="px-4 py-2 text-left">Triggered By</th>
                    <th class="px-4 py-2 text-left">Time</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($syncLogs as $log): 
                    $colors = ['SUCCESS' => 'green', 'FAILED' => 'red', 'PARTIAL' => 'amber', 'STARTED' => 'blue'];
                    $color = $colors[$log['status']] ?? 'gray';
                ?>
                <tr>
                    <td class="px-4 py-2"><?= htmlspecialchars($log['sync_type']) ?></td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 bg-<?= $color ?>-100 text-<?= $color ?>-700 rounded text-xs"><?= $log['status'] ?></span>
                    </td>
                    <td class="px-4 py-2 text-center text-green-600"><?= $log['records_created'] ?? 0 ?></td>
                    <td class="px-4 py-2 text-center text-blue-600"><?= $log['records_updated'] ?? 0 ?></td>
                    <td class="px-4 py-2 text-gray-500"><?= htmlspecialchars($log['triggered_by'] ?? '') ?></td>
                    <td class="px-4 py-2 text-gray-500"><?= $log['started_at'] ? date('d M H:i', strtotime($log['started_at'])) : '-' ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
