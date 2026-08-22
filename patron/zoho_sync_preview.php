<?php
/**
 * PATRON - Zoho Sync Preview (Dry Run)
 * Shows what changes would be made without actually syncing
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/zoho_sync.php';

startSession();
requireLogin();
requireAdmin();

$pageTitle = 'Zoho Sync Preview';

$sync = new ZohoSyncService();
$previewResult = null;
$tokenStatus = null;

// Check if Zoho is connected
if (!$sync->canSync()) {
    $error = "Zoho is not connected. Please configure and connect Zoho first.";
} else {
    $tokenStatus = $sync->getTokenStatus();
    
    // Run preview if requested
    if (isset($_POST['run_preview'])) {
        $fullSync = isset($_POST['full_sync']);
        $previewResult = $sync->dryRunSync('PREVIEW', $fullSync);
    }
}

require_once 'includes/header.php';
?>

<div class="max-w-6xl mx-auto">
    <div class="card mb-6">
        <div class="p-6 border-b bg-gradient-to-r from-indigo-50 to-purple-50">
            <h2 class="text-xl font-bold text-gray-800">
                <i class="fas fa-eye mr-2 text-indigo-600"></i>Zoho Sync Preview (Dry Run)
            </h2>
            <p class="text-gray-600 mt-1">Preview what changes would be made without actually syncing</p>
        </div>
        
        <div class="p-6">
            <?php if (isset($error)): ?>
            <div class="p-4 bg-red-50 text-red-700 rounded-lg mb-4">
                <i class="fas fa-exclamation-circle mr-2"></i><?= htmlspecialchars($error) ?>
            </div>
            <?php else: ?>
            
            <!-- Token Status -->
            <?php if ($tokenStatus): ?>
            <div class="mb-6 p-4 rounded-lg <?= $tokenStatus['status'] === 'healthy' ? 'bg-green-50' : ($tokenStatus['status'] === 'expiring_soon' ? 'bg-amber-50' : 'bg-red-50') ?>">
                <div class="flex items-center justify-between">
                    <div>
                        <span class="font-medium">Token Status:</span>
                        <?php if ($tokenStatus['status'] === 'healthy'): ?>
                        <span class="text-green-700"><i class="fas fa-check-circle mr-1"></i>Healthy</span>
                        <?php elseif ($tokenStatus['status'] === 'expiring_soon'): ?>
                        <span class="text-amber-700"><i class="fas fa-exclamation-triangle mr-1"></i>Expiring Soon</span>
                        <?php else: ?>
                        <span class="text-red-700"><i class="fas fa-times-circle mr-1"></i>Expired</span>
                        <?php endif; ?>
                    </div>
                    <div class="text-sm text-gray-600">
                        Expires in: <strong><?= $tokenStatus['expires_in_minutes'] ?> minutes</strong>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Run Preview Form -->
            <form method="POST" class="mb-6">
                <div class="flex items-center gap-4">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="full_sync" class="rounded">
                        <span>Full Sync (ignore last sync time)</span>
                    </label>
                    <button type="submit" name="run_preview" class="btn btn-primary">
                        <i class="fas fa-play mr-2"></i>Run Preview
                    </button>
                    <a href="zoho_sync.php" class="btn btn-secondary">
                        <i class="fas fa-sync mr-2"></i>Go to Actual Sync
                    </a>
                </div>
            </form>
            
            <?php endif; ?>
            
            <?php if ($previewResult): ?>
            <!-- Preview Results -->
            <div class="border-t pt-6">
                <h3 class="text-lg font-bold mb-4">
                    <i class="fas fa-list-alt mr-2 text-indigo-600"></i>Preview Results
                </h3>
                
                <?php if ($previewResult['success']): ?>
                
                <!-- Summary Cards -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <?php 
                    $summary = $previewResult['summary'] ?? [];
                    $types = ['client' => 'Clients', 'invoice' => 'Invoices', 'estimate' => 'Estimates', 'payment' => 'Payments'];
                    $colors = ['client' => 'blue', 'invoice' => 'green', 'estimate' => 'purple', 'payment' => 'teal'];
                    foreach ($types as $key => $label):
                        $create = $summary[$key]['create'] ?? 0;
                        $update = $summary[$key]['update'] ?? 0;
                        $total = $create + $update;
                        $color = $colors[$key];
                    ?>
                    <div class="p-4 rounded-lg bg-<?= $color ?>-50 border border-<?= $color ?>-200">
                        <p class="text-2xl font-bold text-<?= $color ?>-700"><?= $total ?></p>
                        <p class="text-sm text-<?= $color ?>-600"><?= $label ?></p>
                        <p class="text-xs text-gray-500 mt-1">
                            <?= $create ?> new, <?= $update ?> update
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Total Changes -->
                <div class="p-4 bg-gray-100 rounded-lg mb-6">
                    <span class="font-medium">Total Changes:</span>
                    <span class="text-xl font-bold ml-2"><?= $summary['total_changes'] ?? 0 ?></span>
                    <span class="text-gray-500 ml-2">records would be affected</span>
                </div>
                
                <!-- Detailed Changes -->
                <?php if (!empty($previewResult['changes'])): ?>
                <div class="border rounded-lg overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b">
                        <h4 class="font-medium">Detailed Changes (first 50)</h4>
                    </div>
                    <div class="max-h-96 overflow-y-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50 sticky top-0">
                                <tr>
                                    <th class="px-4 py-2 text-left">Type</th>
                                    <th class="px-4 py-2 text-left">Action</th>
                                    <th class="px-4 py-2 text-left">Details</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">
                                <?php foreach (array_slice($previewResult['changes'], 0, 50) as $change): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 rounded text-xs font-medium 
                                            <?= $change['type'] === 'client' ? 'bg-blue-100 text-blue-700' : '' ?>
                                            <?= $change['type'] === 'invoice' ? 'bg-green-100 text-green-700' : '' ?>
                                            <?= $change['type'] === 'estimate' ? 'bg-purple-100 text-purple-700' : '' ?>
                                            <?= $change['type'] === 'payment' ? 'bg-teal-100 text-teal-700' : '' ?>">
                                            <?= ucfirst($change['type']) ?>
                                        </span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 rounded text-xs font-medium 
                                            <?= $change['action'] === 'create' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' ?>">
                                            <?= ucfirst($change['action']) ?>
                                        </span>
                                    </td>
                                    <td class="px-4 py-2 text-gray-600">
                                        <?php 
                                        $data = $change['data'];
                                        $name = $data['name'] ?? $data['invoice_number'] ?? $data['estimate_number'] ?? $data['payment_number'] ?? '-';
                                        $id = $data['id'] ?? $data['zoho_contact_id'] ?? $data['zoho_invoice_id'] ?? '-';
                                        echo htmlspecialchars($name) . " <span class='text-gray-400 text-xs'>($id)</span>";
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php if (count($previewResult['changes']) > 50): ?>
                    <div class="bg-gray-50 px-4 py-2 text-sm text-gray-500 border-t">
                        ... and <?= count($previewResult['changes']) - 50 ?> more changes
                    </div>
                    <?php endif; ?>
                </div>
                <?php else: ?>
                <div class="p-8 text-center text-gray-500">
                    <i class="fas fa-check-circle text-4xl text-green-400 mb-3"></i>
                    <p>No changes detected. Database is up to date with Zoho.</p>
                </div>
                <?php endif; ?>
                
                <?php else: ?>
                <div class="p-4 bg-red-50 text-red-700 rounded-lg">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    Preview failed: <?= htmlspecialchars($previewResult['error'] ?? 'Unknown error') ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
