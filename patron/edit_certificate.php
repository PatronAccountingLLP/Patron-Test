<?php
/**
 * PATRON - Edit Certificate
 * Edit certificate details and replace file
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$certId = (int)($_GET['id'] ?? 0);

if (!$certId) {
    setFlash('error', 'Invalid certificate.');
    header('Location: clients.php');
    exit;
}

// Get certificate info
$cert = dbFetchOne("
    SELECT cc.*, ct.name as cert_type_name, ct.id as cert_type_id, c.name as client_name, c.id as client_id
    FROM client_certificates cc
    JOIN certificate_types ct ON cc.certificate_type_id = ct.id
    JOIN clients c ON cc.client_id = c.id
    WHERE cc.id = ? AND cc.deleted_at IS NULL
", [$certId]);

if (!$cert) {
    setFlash('error', 'Certificate not found.');
    header('Location: clients.php');
    exit;
}

// Check access
if (!canAccessClient($cert['client_id'])) {
    setFlash('error', 'You do not have access to this certificate.');
    header('Location: clients.php');
    exit;
}

$pageTitle = 'Edit Certificate - ' . $cert['cert_type_name'];
$clientId = $cert['client_id'];

// Get certificate types for dropdown
$certTypes = dbFetchAll("SELECT * FROM certificate_types WHERE is_active = 1 AND deleted_at IS NULL ORDER BY category, name") ?: [];

// Handle POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'update') {
        $certTypeId = (int)($_POST['certificate_type_id'] ?? $cert['cert_type_id']);
        $certNumber = sanitize($_POST['certificate_number'] ?? '');
        $issueDate = sanitize($_POST['issue_date'] ?? '') ?: null;
        $expiryDate = sanitize($_POST['expiry_date'] ?? '') ?: null;
        $notes = sanitize($_POST['notes'] ?? '');
        
        $filePath = $cert['file_path']; // Keep existing file by default
        
        // Handle file upload if new file provided
        $file = $_FILES['certificate_file'] ?? null;
        if ($file && $file['error'] === UPLOAD_ERR_OK && $file['size'] > 0) {
            $allowedTypes = ['pdf', 'jpg', 'jpeg', 'png', 'gif', 'doc', 'docx'];
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            
            if (!in_array($ext, $allowedTypes)) {
                setFlash('error', 'Invalid file type. Allowed: PDF, JPG, PNG, GIF, DOC, DOCX');
                header("Location: edit_certificate.php?id=$certId");
                exit;
            }
            
            if ($file['size'] > 10 * 1024 * 1024) { // 10MB limit
                setFlash('error', 'File too large. Maximum 10MB allowed.');
                header("Location: edit_certificate.php?id=$certId");
                exit;
            }
            
            $uploadDir = 'uploads/certificates/' . date('Y/m/');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            
            $newFileName = 'cert_' . $clientId . '_' . $certId . '_' . time() . '.' . $ext;
            $newFilePath = $uploadDir . $newFileName;
            
            if (move_uploaded_file($file['tmp_name'], $newFilePath)) {
                // Delete old file if exists and different
                if (!empty($cert['file_path']) && file_exists($cert['file_path']) && $cert['file_path'] !== $newFilePath) {
                    @unlink($cert['file_path']);
                }
                $filePath = $newFilePath;
            }
        }
        
        // Update certificate
        dbExecute("
            UPDATE client_certificates 
            SET certificate_type_id = ?, 
                certificate_number = ?, 
                issue_date = ?, 
                expiry_date = ?, 
                notes = ?,
                file_path = ?,
                updated_at = NOW()
            WHERE id = ?
        ", [$certTypeId, $certNumber ?: null, $issueDate, $expiryDate, $notes ?: null, $filePath, $certId]);
        
        setFlash('success', 'Certificate updated successfully.');
        header("Location: view_client.php?id=$clientId&tab=certificates");
        exit;
    }
    
    if ($action === 'delete') {
        // Soft delete
        dbExecute("UPDATE client_certificates SET deleted_at = NOW() WHERE id = ?", [$certId]);
        setFlash('success', 'Certificate deleted.');
        header("Location: view_client.php?id=$clientId&tab=certificates");
        exit;
    }
    
    if ($action === 'remove_file') {
        // Remove file only
        if (!empty($cert['file_path']) && file_exists($cert['file_path'])) {
            @unlink($cert['file_path']);
        }
        dbExecute("UPDATE client_certificates SET file_path = NULL, updated_at = NOW() WHERE id = ?", [$certId]);
        setFlash('success', 'Certificate file removed.');
        header("Location: edit_certificate.php?id=$certId");
        exit;
    }
}

require_once 'includes/header.php';
?>

<div class="max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold"><i class="fas fa-edit text-amber-500 mr-2"></i>Edit Certificate</h1>
            <p class="text-gray-500 text-sm">
                <a href="view_client.php?id=<?= $clientId ?>" class="text-indigo-600 hover:underline"><?= htmlspecialchars($cert['client_name']) ?></a>
                &rarr; <?= htmlspecialchars($cert['cert_type_name']) ?>
            </p>
        </div>
        <a href="view_client.php?id=<?= $clientId ?>&tab=certificates" class="btn btn-secondary">
            <i class="fas fa-arrow-left mr-2"></i>Back
        </a>
    </div>
    
    <form method="POST" enctype="multipart/form-data" class="card p-6 space-y-6">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
        <input type="hidden" name="action" value="update">
        
        <!-- Certificate Type -->
        <div>
            <label class="form-label">Certificate Type <span class="text-red-500">*</span></label>
            <select name="certificate_type_id" class="form-input" required>
                <?php 
                $lastCategory = '';
                foreach ($certTypes as $ct): 
                    if ($ct['category'] !== $lastCategory):
                        if ($lastCategory !== '') echo '</optgroup>';
                        $lastCategory = $ct['category'];
                        echo '<optgroup label="' . htmlspecialchars($ct['category'] ?? 'Other') . '">';
                    endif;
                ?>
                <option value="<?= $ct['id'] ?>" <?= $ct['id'] == $cert['certificate_type_id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($ct['name']) ?>
                </option>
                <?php endforeach; ?>
                <?php if ($lastCategory !== '') echo '</optgroup>'; ?>
            </select>
        </div>
        
        <!-- Certificate Number -->
        <div>
            <label class="form-label">Certificate/Registration Number</label>
            <input type="text" name="certificate_number" class="form-input font-mono" 
                   value="<?= htmlspecialchars($cert['certificate_number'] ?? '') ?>" 
                   placeholder="e.g., GSTIN, CIN, PAN...">
        </div>
        
        <!-- Dates -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="form-label">Issue Date</label>
                <input type="date" name="issue_date" class="form-input" 
                       value="<?= $cert['issue_date'] ?? '' ?>">
            </div>
            <div>
                <label class="form-label">Expiry Date</label>
                <input type="date" name="expiry_date" class="form-input" 
                       value="<?= $cert['expiry_date'] ?? '' ?>">
                <p class="text-xs text-gray-500 mt-1">Leave empty for lifetime certificates</p>
            </div>
        </div>
        
        <!-- Current File -->
        <?php if (!empty($cert['file_path']) && file_exists($cert['file_path'])): 
            $fileExt = strtolower(pathinfo($cert['file_path'], PATHINFO_EXTENSION));
            $fileSize = filesize($cert['file_path']);
        ?>
        <div>
            <label class="form-label">Current File</label>
            <div class="flex items-center gap-4 p-4 bg-green-50 rounded-lg border border-green-200">
                <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <?php if (in_array($fileExt, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                    <i class="fas fa-image text-green-600 text-xl"></i>
                    <?php elseif ($fileExt === 'pdf'): ?>
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                    <?php else: ?>
                    <i class="fas fa-file text-gray-500 text-xl"></i>
                    <?php endif; ?>
                </div>
                <div class="flex-1">
                    <p class="font-medium text-green-800"><?= strtoupper($fileExt) ?> File</p>
                    <p class="text-sm text-green-600"><?= number_format($fileSize / 1024, 1) ?> KB</p>
                </div>
                <div class="flex gap-2">
                    <a href="certificate_file.php?id=<?= $certId ?>&action=view" target="_blank" 
                       class="btn btn-secondary text-sm"><i class="fas fa-eye mr-1"></i>View</a>
                    <a href="certificate_file.php?id=<?= $certId ?>&action=download" 
                       class="btn btn-secondary text-sm"><i class="fas fa-download mr-1"></i>Download</a>
                    <button type="submit" name="action" value="remove_file" 
                            class="btn bg-red-100 text-red-600 hover:bg-red-200 text-sm"
                            onclick="return confirm('Remove this file? This cannot be undone.')">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div>
            <label class="form-label">Current File</label>
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 text-center text-gray-500">
                <i class="fas fa-file-circle-xmark text-2xl mb-2"></i>
                <p class="text-sm">No file uploaded</p>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Upload New File -->
        <div>
            <label class="form-label"><?= !empty($cert['file_path']) ? 'Replace File (Optional)' : 'Upload File' ?></label>
            <input type="file" name="certificate_file" class="form-input" accept=".pdf,.jpg,.jpeg,.png,.gif,.doc,.docx">
            <p class="text-xs text-gray-500 mt-1">Allowed: PDF, JPG, PNG, GIF, DOC, DOCX. Max 10MB.</p>
        </div>
        
        <!-- Notes -->
        <div>
            <label class="form-label">Notes</label>
            <textarea name="notes" class="form-input" rows="3" placeholder="Any additional notes..."><?= htmlspecialchars($cert['notes'] ?? '') ?></textarea>
        </div>
        
        <!-- Actions -->
        <div class="flex items-center justify-between pt-4 border-t">
            <button type="submit" name="action" value="delete" 
                    class="btn bg-red-100 text-red-600 hover:bg-red-200"
                    onclick="return confirm('Delete this certificate? This cannot be undone.')">
                <i class="fas fa-trash mr-2"></i>Delete Certificate
            </button>
            <div class="flex gap-3">
                <a href="view_client.php?id=<?= $clientId ?>&tab=certificates" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>Save Changes
                </button>
            </div>
        </div>
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>
