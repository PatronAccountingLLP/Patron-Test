/**
 * PORTAL.PHP CERTIFICATE UPDATES
 * 
 * Two changes needed:
 * 1. Update certificates fetch (around line 667-673)
 * 2. Update certificates display section (around line 2118-2159)
 */

// =============================================================================
// CHANGE 1: Update certificates fetch (replace lines 667-673)
// =============================================================================

// Certificates - UPDATED to include ID and more fields
$certificates = [];
try {
    $certs = dbFetchAll("
        SELECT cc.id, cc.certificate_number, cc.file_path, cc.original_filename, 
               cc.issue_date, cc.expiry_date, cc.status, cc.created_at,
               ct.name as type_name, ct.category
        FROM client_certificates cc 
        LEFT JOIN certificate_types ct ON cc.certificate_type_id = ct.id 
        WHERE cc.client_id = ? AND cc.deleted_at IS NULL 
        ORDER BY ct.category, cc.created_at DESC
    ", [$clientId]) ?: [];
    foreach ($certs as $c) {
        $hasFile = !empty($c['file_path']) && file_exists($c['file_path']);
        $certificates[] = [
            'id' => $c['id'],
            'name' => $c['type_name'] ?? 'Certificate', 
            'category' => $c['category'] ?? 'Other',
            'number' => $c['certificate_number'] ?? null, 
            'file_path' => $c['file_path'] ?? '', 
            'has_file' => $hasFile,
            'file_ext' => $hasFile ? strtolower(pathinfo($c['file_path'], PATHINFO_EXTENSION)) : '',
            'original_filename' => $c['original_filename'] ?? '', 
            'issue_date' => $c['issue_date'] ?? null,
            'expiry_date' => $c['expiry_date'] ?? null, 
            'status' => $c['status'] ?? 'ACTIVE', 
            'created_at' => $c['created_at'] ?? null
        ];
    }
} catch (Exception $e) {}


// =============================================================================
// CHANGE 2: Update certificates display section (replace lines 2118-2159)
// =============================================================================

    <div id="content-certificates" class="glass p-6 rounded-tl-none <?= $activeTab !== 'certificates' ? 'hidden' : '' ?>">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold"><i class="fas fa-certificate text-green-500 mr-2"></i>Certificates & Licenses</h2>
            <div class="flex gap-2">
                <?php if (!empty($certificates)): ?>
                <a href="../patron/download_certificates.php?client_id=<?= $clientId ?>" 
                   class="px-3 py-1.5 bg-gray-100 text-gray-600 hover:bg-gray-200 rounded-lg text-sm">
                    <i class="fas fa-download mr-1"></i>Download All
                </a>
                <?php endif; ?>
                <button onclick="openCert()" class="px-3 py-1.5 bg-blue-600 text-white hover:bg-blue-700 rounded-lg text-sm">
                    <i class="fas fa-plus mr-1"></i>Upload
                </button>
            </div>
        </div>
        
        <?php if (empty($certificates)): ?>
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-certificate text-5xl text-gray-300 mb-4"></i>
            <p class="mb-2">No certificates uploaded yet</p>
            <p class="text-sm text-gray-400 mb-4">Upload your GST Certificate, Incorporation Certificate, PAN, and other important documents</p>
            <button onclick="openCert()" class="btn"><i class="fas fa-plus mr-2"></i>Upload Certificate</button>
        </div>
        <?php else: ?>
        
        <!-- Summary Stats -->
        <div class="grid grid-cols-3 gap-3 mb-4">
            <?php 
            $totalCerts = count($certificates);
            $withFiles = count(array_filter($certificates, fn($c) => $c['has_file']));
            $expiringSoon = count(array_filter($certificates, function($c) {
                return !empty($c['expiry_date']) && strtotime($c['expiry_date']) > time() && strtotime($c['expiry_date']) < strtotime('+30 days');
            }));
            $expired = count(array_filter($certificates, fn($c) => !empty($c['expiry_date']) && strtotime($c['expiry_date']) < time()));
            ?>
            <div class="bg-blue-50 rounded-lg p-3 text-center">
                <p class="text-xl font-bold text-blue-600"><?= $totalCerts ?></p>
                <p class="text-xs text-blue-500">Total</p>
            </div>
            <div class="bg-green-50 rounded-lg p-3 text-center">
                <p class="text-xl font-bold text-green-600"><?= $withFiles ?></p>
                <p class="text-xs text-green-500">With Files</p>
            </div>
            <?php if ($expired > 0 || $expiringSoon > 0): ?>
            <div class="bg-<?= $expired > 0 ? 'red' : 'amber' ?>-50 rounded-lg p-3 text-center">
                <p class="text-xl font-bold text-<?= $expired > 0 ? 'red' : 'amber' ?>-600"><?= $expired > 0 ? $expired : $expiringSoon ?></p>
                <p class="text-xs text-<?= $expired > 0 ? 'red' : 'amber' ?>-500"><?= $expired > 0 ? 'Expired' : 'Expiring Soon' ?></p>
            </div>
            <?php else: ?>
            <div class="bg-gray-50 rounded-lg p-3 text-center">
                <p class="text-xl font-bold text-gray-600">✓</p>
                <p class="text-xs text-gray-500">All Valid</p>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Certificates List -->
        <div class="space-y-3">
            <?php foreach ($certificates as $c): 
                $isExpired = !empty($c['expiry_date']) && strtotime($c['expiry_date']) < time();
                $isExpiringSoon = !empty($c['expiry_date']) && !$isExpired && strtotime($c['expiry_date']) < strtotime('+30 days');
            ?>
            <div class="card p-4 <?= $isExpired ? 'border-l-4 border-red-500 bg-red-50' : ($isExpiringSoon ? 'border-l-4 border-amber-500 bg-amber-50' : '') ?>">
                <div class="flex items-start justify-between gap-4">
                    <!-- Certificate Info -->
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2">
                            <?php if ($c['has_file']): ?>
                                <?php if (in_array($c['file_ext'], ['jpg', 'jpeg', 'png', 'gif'])): ?>
                                <span class="w-8 h-8 bg-purple-100 rounded flex items-center justify-center">
                                    <i class="fas fa-image text-purple-500"></i>
                                </span>
                                <?php elseif ($c['file_ext'] === 'pdf'): ?>
                                <span class="w-8 h-8 bg-red-100 rounded flex items-center justify-center">
                                    <i class="fas fa-file-pdf text-red-500"></i>
                                </span>
                                <?php else: ?>
                                <span class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center">
                                    <i class="fas fa-file text-gray-500"></i>
                                </span>
                                <?php endif; ?>
                            <?php else: ?>
                            <span class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center">
                                <i class="fas fa-file-circle-xmark text-gray-400"></i>
                            </span>
                            <?php endif; ?>
                            <div>
                                <p class="font-medium text-gray-900"><?= htmlspecialchars($c['name']) ?></p>
                                <?php if ($c['number']): ?>
                                <p class="text-xs text-gray-500 font-mono"><?= htmlspecialchars($c['number']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Dates -->
                        <div class="flex flex-wrap gap-3 mt-2 text-xs">
                            <?php if (!empty($c['issue_date'])): ?>
                            <span class="text-gray-500">
                                <i class="fas fa-calendar-plus mr-1"></i>Issued: <?= date('d M Y', strtotime($c['issue_date'])) ?>
                            </span>
                            <?php endif; ?>
                            <?php if (!empty($c['expiry_date'])): ?>
                            <span class="<?= $isExpired ? 'text-red-600 font-medium' : ($isExpiringSoon ? 'text-amber-600 font-medium' : 'text-gray-500') ?>">
                                <i class="fas fa-calendar-xmark mr-1"></i>
                                <?php if ($isExpired): ?>
                                    Expired: <?= date('d M Y', strtotime($c['expiry_date'])) ?>
                                <?php elseif ($isExpiringSoon): ?>
                                    Expires: <?= date('d M Y', strtotime($c['expiry_date'])) ?> <span class="text-amber-700">(Soon!)</span>
                                <?php else: ?>
                                    Expires: <?= date('d M Y', strtotime($c['expiry_date'])) ?>
                                <?php endif; ?>
                            </span>
                            <?php else: ?>
                            <span class="text-green-600">
                                <i class="fas fa-infinity mr-1"></i>Lifetime / No Expiry
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class="flex items-center gap-1 flex-shrink-0">
                        <?php if ($c['has_file']): ?>
                        <a href="portal_certificate_file.php?token=<?= urlencode($token) ?>&id=<?= $c['id'] ?>&action=view" 
                           target="_blank" 
                           class="p-2 text-indigo-600 hover:bg-indigo-50 rounded-lg" 
                           title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="portal_certificate_file.php?token=<?= urlencode($token) ?>&id=<?= $c['id'] ?>&action=download" 
                           class="p-2 text-green-600 hover:bg-green-50 rounded-lg" 
                           title="Download">
                            <i class="fas fa-download"></i>
                        </a>
                        <?php else: ?>
                        <span class="text-xs text-gray-400 px-2">No file</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
