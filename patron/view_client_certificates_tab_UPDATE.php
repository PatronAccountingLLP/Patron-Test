/**
 * CERTIFICATES TAB UPDATE FOR view_client.php
 * 
 * Replace lines 840-875 in view_client.php with the code below.
 * This adds View, Download, and Edit buttons to each certificate.
 */

<?php elseif ($activeTab === 'certificates'): ?>
<!-- Certificates Tab -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-semibold"><i class="fas fa-certificate text-amber-500 mr-2"></i>Certificates & Registrations</h3>
        <div class="flex gap-2">
            <?php if (!empty($certificates)): ?>
            <a href="download_certificates.php?client_id=<?= $clientId ?>" class="btn btn-secondary text-sm" title="Download All as ZIP">
                <i class="fas fa-download mr-1"></i>Download All
            </a>
            <?php endif; ?>
            <a href="add_certificate.php?client_id=<?= $clientId ?>" class="btn btn-primary text-sm"><i class="fas fa-plus mr-1"></i> Add</a>
        </div>
    </div>
    
    <?php if (empty($certificates)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-award text-5xl text-gray-300 mb-3"></i>
        <p>No certificates added yet</p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Certificate</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Number</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Issue Date</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Expiry</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">File</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($certificates as $cert): 
                    $isExpired = !empty($cert['expiry_date']) && strtotime($cert['expiry_date']) < time();
                    $isExpiringSoon = !empty($cert['expiry_date']) && !$isExpired && strtotime($cert['expiry_date']) < strtotime('+30 days');
                    $hasFile = !empty($cert['file_path']) && file_exists($cert['file_path']);
                    $fileExt = $hasFile ? strtolower(pathinfo($cert['file_path'], PATHINFO_EXTENSION)) : '';
                ?>
                <tr class="hover:bg-gray-50 <?= $isExpired ? 'bg-red-50' : ($isExpiringSoon ? 'bg-amber-50' : '') ?>">
                    <td class="px-4 py-3">
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($cert['cert_type_name']) ?></p>
                        <?php if (!empty($cert['issuing_authority'])): ?>
                        <p class="text-xs text-gray-500"><?= htmlspecialchars($cert['issuing_authority']) ?></p>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <span class="font-mono text-sm"><?= htmlspecialchars($cert['certificate_number'] ?? '-') ?></span>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                        <?= !empty($cert['issue_date']) ? date('d M Y', strtotime($cert['issue_date'])) : '-' ?>
                    </td>
                    <td class="px-4 py-3">
                        <?php if (!empty($cert['expiry_date'])): ?>
                        <span class="text-sm <?= $isExpired ? 'text-red-600 font-medium' : ($isExpiringSoon ? 'text-amber-600 font-medium' : 'text-gray-600') ?>">
                            <?php if ($isExpired): ?>
                            <i class="fas fa-exclamation-circle mr-1"></i>Expired
                            <?php elseif ($isExpiringSoon): ?>
                            <i class="fas fa-clock mr-1"></i>Expiring Soon
                            <?php endif; ?>
                            <?= date('d M Y', strtotime($cert['expiry_date'])) ?>
                        </span>
                        <?php else: ?>
                        <span class="text-sm text-green-600"><i class="fas fa-infinity mr-1"></i>Lifetime</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($hasFile): ?>
                        <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-700">
                            <?php if (in_array($fileExt, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                            <i class="fas fa-image mr-1"></i>
                            <?php elseif ($fileExt === 'pdf'): ?>
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?php else: ?>
                            <i class="fas fa-file mr-1"></i>
                            <?php endif; ?>
                            <?= strtoupper($fileExt) ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-400 text-xs"><i class="fas fa-file-circle-xmark mr-1"></i>No file</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-center gap-1">
                            <?php if ($hasFile): ?>
                            <a href="certificate_file.php?id=<?= $cert['id'] ?>&action=view" target="_blank" 
                               class="p-2 text-indigo-600 hover:bg-indigo-50 rounded" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="certificate_file.php?id=<?= $cert['id'] ?>&action=download" 
                               class="p-2 text-green-600 hover:bg-green-50 rounded" title="Download">
                                <i class="fas fa-download"></i>
                            </a>
                            <?php endif; ?>
                            <a href="edit_certificate.php?id=<?= $cert['id'] ?>" 
                               class="p-2 text-amber-600 hover:bg-amber-50 rounded" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
