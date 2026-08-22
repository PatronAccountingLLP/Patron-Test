<?php
/**
 * PATRON - Bulk Password Report
 * Generate and export portal passwords for all clients
 * Fixes Team Feedback Issue #9
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

$pageTitle = 'Bulk Password Report';

// Handle password generation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    // Generate password for single client
    if ($action === 'generate_single') {
        $clientId = (int)($_POST['client_id'] ?? 0);
        if ($clientId) {
            $password = generateRandomPassword();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Check if portal_password column exists
            try {
                dbExecute("UPDATE clients SET portal_password = ?, portal_password_plain = ?, portal_password_updated_at = NOW() WHERE id = ?", 
                    [$hashedPassword, $password, $clientId]);
                setFlash('success', 'Password generated successfully.');
            } catch (Exception $e) {
                // Column might not exist, try adding it
                try {
                    dbExecute("ALTER TABLE clients ADD COLUMN portal_password VARCHAR(255) DEFAULT NULL");
                    dbExecute("ALTER TABLE clients ADD COLUMN portal_password_plain VARCHAR(100) DEFAULT NULL");
                    dbExecute("ALTER TABLE clients ADD COLUMN portal_password_updated_at DATETIME DEFAULT NULL");
                    dbExecute("UPDATE clients SET portal_password = ?, portal_password_plain = ?, portal_password_updated_at = NOW() WHERE id = ?", 
                        [$hashedPassword, $password, $clientId]);
                    setFlash('success', 'Password generated successfully.');
                } catch (Exception $e2) {
                    setFlash('error', 'Error generating password: ' . $e2->getMessage());
                }
            }
        }
        header('Location: bulk_password_report.php');
        exit;
    }
    
    // Generate passwords for all clients without password
    if ($action === 'generate_all') {
        $clients = dbFetchAll("SELECT id FROM clients WHERE deleted_at IS NULL AND (portal_password_plain IS NULL OR portal_password_plain = '')") ?: [];
        $count = 0;
        
        foreach ($clients as $c) {
            $password = generateRandomPassword();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            try {
                dbExecute("UPDATE clients SET portal_password = ?, portal_password_plain = ?, portal_password_updated_at = NOW() WHERE id = ?", 
                    [$hashedPassword, $password, $c['id']]);
                $count++;
            } catch (Exception $e) {
                // Skip errors
            }
        }
        
        setFlash('success', "Generated passwords for $count clients.");
        header('Location: bulk_password_report.php');
        exit;
    }
    
    // Export to Excel
    if ($action === 'export') {
        exportPasswordsToCSV();
        exit;
    }
}

function generateRandomPassword($length = 8) {
    $chars = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
    }
    return $password;
}

function exportPasswordsToCSV() {
    $clients = dbFetchAll("
        SELECT c.id, c.name, c.email, c.mobile, c.entity_type,
               c.portal_password_plain, c.portal_password_updated_at
        FROM clients c
        WHERE c.deleted_at IS NULL AND c.portal_password_plain IS NOT NULL AND c.portal_password_plain != ''
        ORDER BY c.name
    ") ?: [];
    
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=client_passwords_' . date('Y-m-d') . '.csv');
    
    $output = fopen('php://output', 'w');
    
    // BOM for Excel
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
    
    // Header
    fputcsv($output, ['Sr.', 'Client Name', 'Entity Type', 'Email', 'Mobile', 'Portal Password', 'Generated On']);
    
    $sr = 1;
    foreach ($clients as $c) {
        fputcsv($output, [
            $sr++,
            $c['name'],
            $c['entity_type'] ?? '',
            $c['email'] ?? '',
            $c['mobile'] ?? '',
            $c['portal_password_plain'],
            $c['portal_password_updated_at'] ? date('d-m-Y', strtotime($c['portal_password_updated_at'])) : ''
        ]);
    }
    
    fclose($output);
}

// Check/create columns
try {
    $columns = dbFetchAll("SHOW COLUMNS FROM clients LIKE 'portal_password_plain'");
    if (empty($columns)) {
        dbExecute("ALTER TABLE clients ADD COLUMN portal_password VARCHAR(255) DEFAULT NULL");
        dbExecute("ALTER TABLE clients ADD COLUMN portal_password_plain VARCHAR(100) DEFAULT NULL");
        dbExecute("ALTER TABLE clients ADD COLUMN portal_password_updated_at DATETIME DEFAULT NULL");
    }
} catch (Exception $e) {
    // Ignore
}

// Filters
$filterStatus = sanitize($_GET['status'] ?? '');
$search = sanitize($_GET['q'] ?? '');

$where = "c.deleted_at IS NULL";
if ($filterStatus === 'with_password') {
    $where .= " AND c.portal_password_plain IS NOT NULL AND c.portal_password_plain != ''";
} elseif ($filterStatus === 'without_password') {
    $where .= " AND (c.portal_password_plain IS NULL OR c.portal_password_plain = '')";
}
if ($search) {
    $searchEsc = addslashes($search);
    $where .= " AND (c.name LIKE '%$searchEsc%')";
}

// Get clients
$clients = dbFetchAll("
    SELECT c.id, c.name, c.email, c.mobile, c.entity_type,
           c.portal_password_plain, c.portal_password_updated_at
    FROM clients c
    WHERE $where
    ORDER BY c.name
    LIMIT 500
") ?: [];

// Stats
$totalClients = dbFetchOne("SELECT COUNT(*) as cnt FROM clients WHERE deleted_at IS NULL")['cnt'] ?? 0;
$withPassword = dbFetchOne("SELECT COUNT(*) as cnt FROM clients WHERE deleted_at IS NULL AND portal_password_plain IS NOT NULL AND portal_password_plain != ''")['cnt'] ?? 0;
$withoutPassword = $totalClients - $withPassword;

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold"><i class="fas fa-key text-amber-500 mr-2"></i>Bulk Password Report</h2>
        <p class="text-gray-500 text-sm">Generate and manage client portal passwords</p>
    </div>
    <div class="flex gap-2">
        <form method="POST" class="inline" onsubmit="return confirm('Generate passwords for all clients without one?')">
            <input type="hidden" name="action" value="generate_all">
            <button type="submit" class="btn bg-green-600 text-white hover:bg-green-700">
                <i class="fas fa-magic mr-2"></i>Generate All Missing
            </button>
        </form>
        <form method="POST" class="inline">
            <input type="hidden" name="action" value="export">
            <button type="submit" class="btn bg-blue-600 text-white hover:bg-blue-700">
                <i class="fas fa-download mr-2"></i>Export CSV
            </button>
        </form>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <a href="bulk_password_report.php" class="card p-4 hover:shadow-lg <?= !$filterStatus ? 'ring-2 ring-blue-500' : '' ?>">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Clients</p>
                <p class="text-2xl font-bold"><?= number_format($totalClients) ?></p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                <i class="fas fa-building text-blue-600 text-xl"></i>
            </div>
        </div>
    </a>
    <a href="?status=with_password" class="card p-4 hover:shadow-lg <?= $filterStatus === 'with_password' ? 'ring-2 ring-green-500' : '' ?>">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">With Password</p>
                <p class="text-2xl font-bold text-green-600"><?= number_format($withPassword) ?></p>
            </div>
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                <i class="fas fa-check-circle text-green-600 text-xl"></i>
            </div>
        </div>
    </a>
    <a href="?status=without_password" class="card p-4 hover:shadow-lg <?= $filterStatus === 'without_password' ? 'ring-2 ring-amber-500' : '' ?>">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Without Password</p>
                <p class="text-2xl font-bold text-amber-600"><?= number_format($withoutPassword) ?></p>
            </div>
            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                <i class="fas fa-exclamation-circle text-amber-600 text-xl"></i>
            </div>
        </div>
    </a>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[200px]">
            <label class="form-label">Search</label>
            <input type="text" name="q" value="<?= htmlspecialchars($search) ?>" class="form-input" placeholder="Client name or PAN...">
        </div>
        <div>
            <label class="form-label">Status</label>
            <select name="status" class="form-input">
                <option value="">All Clients</option>
                <option value="with_password" <?= $filterStatus === 'with_password' ? 'selected' : '' ?>>With Password</option>
                <option value="without_password" <?= $filterStatus === 'without_password' ? 'selected' : '' ?>>Without Password</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search mr-2"></i>Filter</button>
        <a href="bulk_password_report.php" class="btn btn-secondary">Clear</a>
    </form>
</div>

<!-- Clients Table -->
<div class="card">
    <div class="p-4 border-b bg-gray-50">
        <span class="text-sm text-gray-500"><?= count($clients) ?> clients</span>
    </div>
    
    <?php if (empty($clients)): ?>
    <div class="p-12 text-center text-gray-400">
        <i class="fas fa-search text-5xl mb-4"></i>
        <p class="text-lg">No clients found</p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-left text-sm text-gray-600">
                <tr>
                    <th class="p-3">Client Name</th>
                    <th class="p-3">Entity Type</th>
                    <th class="p-3">Contact</th>
                    <th class="p-3">Portal Password</th>
                    <th class="p-3">Generated On</th>
                    <th class="p-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($clients as $c): ?>
                <tr class="hover:bg-gray-50">
                    <td class="p-3">
                        <a href="client_view.php?id=<?= $c['id'] ?>" class="font-medium text-blue-600 hover:underline">
                            <?= htmlspecialchars($c['name']) ?>
                        </a>
                    </td>
                    <td class="p-3 text-sm text-gray-600"><?= htmlspecialchars($c['entity_type'] ?? '-') ?></td>
                    <td class="p-3 text-sm text-gray-600">
                        <?= htmlspecialchars($c['email'] ?? $c['mobile'] ?? '-') ?>
                    </td>
                    <td class="p-3">
                        <?php if ($c['portal_password_plain']): ?>
                        <div class="flex items-center gap-2">
                            <code class="px-2 py-1 bg-green-100 text-green-800 rounded text-sm font-mono" id="pwd-<?= $c['id'] ?>">
                                <?= htmlspecialchars($c['portal_password_plain']) ?>
                            </code>
                            <button type="button" onclick="copyPassword(<?= $c['id'] ?>)" class="text-gray-400 hover:text-gray-600" title="Copy">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                        <?php else: ?>
                        <span class="text-gray-400 text-sm">Not generated</span>
                        <?php endif; ?>
                    </td>
                    <td class="p-3 text-sm text-gray-500">
                        <?= $c['portal_password_updated_at'] ? date('d M Y', strtotime($c['portal_password_updated_at'])) : '-' ?>
                    </td>
                    <td class="p-3 text-center">
                        <form method="POST" class="inline">
                            <input type="hidden" name="action" value="generate_single">
                            <input type="hidden" name="client_id" value="<?= $c['id'] ?>">
                            <button type="submit" class="px-3 py-1 bg-amber-100 text-amber-700 hover:bg-amber-200 rounded text-sm"
                                    onclick="return confirm('<?= $c['portal_password_plain'] ? 'This will replace the existing password. Continue?' : 'Generate password for this client?' ?>')">
                                <i class="fas fa-sync-alt mr-1"></i><?= $c['portal_password_plain'] ? 'Regenerate' : 'Generate' ?>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<script>
function copyPassword(clientId) {
    const pwd = document.getElementById('pwd-' + clientId).textContent;
    navigator.clipboard.writeText(pwd).then(() => {
        alert('Password copied to clipboard!');
    });
}
</script>

<?php require_once 'includes/footer.php'; ?>
