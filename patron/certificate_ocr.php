<?php
/**
 * PATRON - Certificate Upload & OCR Processing
 * Upload certificates, extract data via OCR, and auto-fill client fields
 * 
 * LOCATION: /patron/certificate_ocr.php
 */

require_once 'includes/db.php';
require_once 'includes/ocr_service.php';
startSession();
requireLogin();

$pageTitle = 'Certificate OCR';
$errors = [];
$success = null;
$extractedData = null;
$clientId = (int)($_GET['client_id'] ?? $_POST['client_id'] ?? 0);

// Get client if ID provided
$client = null;
if ($clientId) {
    $client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
}

// Certificate types
$certificateTypes = [
    'COI' => 'Certificate of Incorporation',
    'GST' => 'GST Registration Certificate',
    'MCA_MASTER' => 'MCA Master Data',
    'PTEC' => 'PTEC (Professional Tax Enrollment)',
    'PTRC' => 'PTRC (Professional Tax Registration)',
    'PAN_CARD' => 'PAN Card',
    'TAN_ALLOTMENT' => 'TAN Allotment Letter',
    'UDYAM' => 'Udyam Registration',
    'FSSAI' => 'FSSAI License',
    'IEC' => 'Import Export Code',
    'SHOP_ACT' => 'Shop & Establishment License',
    'MSME' => 'MSME Certificate',
    'OTHER' => 'Other',
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $action = $_POST['action'] ?? '';
        
        // ============ UPLOAD & EXTRACT ============
        if ($action === 'upload' && isset($_FILES['certificate'])) {
            $file = $_FILES['certificate'];
            $certType = sanitize($_POST['certificate_type'] ?? '');
            
            if ($file['error'] !== UPLOAD_ERR_OK) {
                $errors[] = 'File upload failed.';
            } elseif ($file['size'] > 10 * 1024 * 1024) {
                $errors[] = 'File too large (max 10MB).';
            } elseif (!in_array(strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)), ['pdf', 'jpg', 'jpeg', 'png'])) {
                $errors[] = 'Only PDF, JPG, PNG files are allowed.';
            } else {
                // Save file
                $uploadDir = __DIR__ . '/uploads/certificates/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                
                $filename = date('Ymd_His') . '_' . uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file['name']);
                $filepath = $uploadDir . $filename;
                
                if (move_uploaded_file($file['tmp_name'], $filepath)) {
                    // Extract text from PDF
                    $ocr = new CertificateOCR();
                    
                    // If no type specified, try to detect
                    if (empty($certType) || $certType === 'AUTO') {
                        $text = $ocr->extractTextFromPDF($filepath);
                        $certType = $ocr->detectCertificateType($text) ?? 'OTHER';
                    }
                    
                    // Extract data
                    $result = $ocr->extract($filepath, $certType);
                    
                    if ($result['success']) {
                        $extractedData = $result;
                        $extractedData['file_path'] = 'uploads/certificates/' . $filename;
                        $extractedData['original_filename'] = $file['name'];
                        
                        // Store in session for apply step
                        $_SESSION['ocr_result'] = $extractedData;
                        
                        // Also extract directors if MCA Master
                        if ($certType === 'MCA_MASTER') {
                            $text = $ocr->extractTextFromPDF($filepath);
                            $extractedData['directors'] = $ocr->extractDirectors($text);
                        }
                        
                        $success = "Successfully extracted data from {$certificateTypes[$certType]}!";
                    } else {
                        $errors[] = $result['error'] ?? 'OCR extraction failed.';
                    }
                } else {
                    $errors[] = 'Failed to save uploaded file.';
                }
            }
        }
        
        // ============ APPLY TO CLIENT ============
        if ($action === 'apply' && $clientId) {
            $fieldsToApply = $_POST['apply_fields'] ?? [];
            $extractedData = $_SESSION['ocr_result'] ?? null;
            
            if (empty($fieldsToApply)) {
                $errors[] = 'No fields selected to apply.';
            } elseif (!$extractedData) {
                $errors[] = 'OCR data expired. Please upload the certificate again.';
            } else {
                try {
                    $updates = [];
                    $params = [];
                    
                    foreach ($fieldsToApply as $field) {
                        $value = $_POST['field_' . $field] ?? null;
                        if ($value !== null && $value !== '') {
                            $updates[] = "$field = ?";
                            $params[] = $value;
                        }
                    }
                    
                    if (!empty($updates)) {
                        $params[] = $clientId;
                        dbExecute("UPDATE clients SET " . implode(', ', $updates) . ", updated_at = NOW() WHERE id = ?", $params);
                        
                        logActivity('OCR_APPLY', 'CLIENT', $clientId, null, [
                            'certificate_type' => $extractedData['certificate_type'],
                            'fields_applied' => $fieldsToApply
                        ]);
                        
                        // Save OCR record (if table exists)
                        try {
                            dbExecute("INSERT INTO client_certificates_ocr 
                                (client_id, certificate_type, file_path, original_filename, extracted_data, mapped_fields, 
                                 ocr_status, ocr_confidence, applied_to_client, applied_at, applied_by, uploaded_by)
                                VALUES (?, ?, ?, ?, ?, ?, 'COMPLETED', ?, 1, NOW(), ?, ?)",
                                [
                                    $clientId,
                                    $extractedData['certificate_type'],
                                    $extractedData['file_path'],
                                    $extractedData['original_filename'],
                                    json_encode($extractedData['data']),
                                    json_encode($extractedData['mapped_fields']),
                                    $extractedData['overall_confidence'],
                                    $_SESSION['user_id'],
                                    $_SESSION['user_id']
                                ]
                            );
                        } catch (Exception $e) {
                            // Table might not exist yet
                        }
                        
                        unset($_SESSION['ocr_result']);
                        setFlash('success', 'Certificate data applied to client successfully!');
                        header("Location: view_client.php?id=$clientId");
                        exit;
                    }
                } catch (Exception $e) {
                    $errors[] = 'Failed to update client: ' . $e->getMessage();
                }
            }
        }
    }
}

// Restore from session if available
if (empty($extractedData) && isset($_SESSION['ocr_result'])) {
    $extractedData = $_SESSION['ocr_result'];
}

require_once 'includes/header.php';
?>

<div class="max-w-4xl mx-auto">
    
    <?php if (!empty($errors)): ?>
    <div class="mb-6 p-4 bg-red-50 text-red-700 rounded-lg">
        <?php foreach ($errors as $error): ?>
        <p><i class="fas fa-exclamation-circle mr-2"></i><?= htmlspecialchars($error) ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <?php if ($success): ?>
    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-lg">
        <i class="fas fa-check-circle mr-2"></i><?= htmlspecialchars($success) ?>
    </div>
    <?php endif; ?>
    
    <!-- Upload Form -->
    <div class="card mb-6">
        <div class="p-6 border-b bg-gradient-to-r from-blue-50 to-indigo-50">
            <h2 class="text-xl font-bold text-gray-800">
                <i class="fas fa-file-alt mr-2 text-blue-600"></i>Certificate OCR
            </h2>
            <p class="text-gray-600 mt-1">Upload certificates to automatically extract and fill client data</p>
        </div>
        
        <form method="POST" enctype="multipart/form-data" class="p-6">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="upload">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="form-label">Client (Optional)</label>
                    <select name="client_id" class="form-input">
                        <option value="">-- Select Client to Auto-Fill --</option>
                        <?php 
                        $clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name");
                        foreach ($clients as $c): 
                        ?>
                        <option value="<?= $c['id'] ?>" <?= $c['id'] == $clientId ? 'selected' : '' ?>>
                            <?= htmlspecialchars($c['name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label">Certificate Type</label>
                    <select name="certificate_type" class="form-input">
                        <option value="AUTO">Auto-Detect</option>
                        <?php foreach ($certificateTypes as $code => $label): ?>
                        <option value="<?= $code ?>"><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="md:col-span-2">
                    <label class="form-label">Upload Certificate (PDF, JPG, PNG)</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-blue-400 transition-colors">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400"></i>
                            <div class="flex text-sm text-gray-600">
                                <label class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500">
                                    <span id="file-label">Upload a file</span>
                                    <input type="file" name="certificate" class="sr-only" accept=".pdf,.jpg,.jpeg,.png" required>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PDF, JPG, PNG up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-magic mr-2"></i>Extract Data
                </button>
            </div>
        </form>
    </div>
    
    <?php if ($extractedData && isset($extractedData['success']) && $extractedData['success']): ?>
    <div class="card">
        <div class="p-6 border-b bg-gradient-to-r from-green-50 to-emerald-50">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold text-gray-800">
                        <i class="fas fa-check-circle mr-2 text-green-600"></i>Extracted Data
                    </h3>
                    <p class="text-sm text-gray-600">
                        Certificate: <?= $certificateTypes[$extractedData['certificate_type']] ?? $extractedData['certificate_type'] ?>
                        | Confidence: <span class="font-medium"><?= round($extractedData['overall_confidence'] * 100) ?>%</span>
                    </p>
                </div>
                <?php if ($extractedData['overall_confidence'] >= 0.8): ?>
                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">High Confidence</span>
                <?php elseif ($extractedData['overall_confidence'] >= 0.6): ?>
                <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium">Medium Confidence</span>
                <?php else: ?>
                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium">Low Confidence</span>
                <?php endif; ?>
            </div>
        </div>
        
        <form method="POST" class="p-6">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="apply">
            <input type="hidden" name="client_id" value="<?= $clientId ?>">
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left"><input type="checkbox" id="selectAll" class="rounded" checked></th>
                            <th class="px-4 py-3 text-left">Field</th>
                            <th class="px-4 py-3 text-left">Extracted Value</th>
                            <th class="px-4 py-3 text-left">Current Value</th>
                            <th class="px-4 py-3 text-left">Confidence</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php 
                        $fieldLabels = [
                            'name' => 'Company Name', 'cin' => 'CIN', 'pan' => 'PAN', 'tan' => 'TAN',
                            'gstin' => 'GSTIN', 'incorporation_date' => 'Incorporation Date', 'address' => 'Address',
                            'state' => 'State', 'city' => 'City', 'district' => 'District', 'pincode' => 'Pincode',
                            'trade_name' => 'Trade Name', 'gst_registration_date' => 'GST Registration Date',
                            'roc' => 'ROC', 'registration_number' => 'Registration Number',
                            'authorized_capital' => 'Authorized Capital', 'paid_up_capital' => 'Paid Up Capital',
                            'ptec_number' => 'PTEC Number', 'ptec_date' => 'PTEC Date',
                            'ptrc_number' => 'PTRC Number', 'ptrc_date' => 'PTRC Date',
                        ];
                        
                        foreach ($extractedData['data'] as $field => $value):
                            if ($value === null || $value === '') continue;
                            $confidence = $extractedData['confidence'][$field] ?? 0;
                            $currentValue = $client[$field] ?? '';
                            $confClass = $confidence >= 0.8 ? 'text-green-600' : ($confidence >= 0.6 ? 'text-amber-600' : 'text-red-600');
                        ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" name="apply_fields[]" value="<?= $field ?>" 
                                       class="field-checkbox rounded" <?= empty($currentValue) || $confidence >= 0.8 ? 'checked' : '' ?>>
                            </td>
                            <td class="px-4 py-3 font-medium"><?= $fieldLabels[$field] ?? ucfirst(str_replace('_', ' ', $field)) ?></td>
                            <td class="px-4 py-3">
                                <input type="text" name="field_<?= $field ?>" value="<?= htmlspecialchars($value) ?>"
                                       class="form-input text-sm py-1">
                            </td>
                            <td class="px-4 py-3 text-gray-500"><?= htmlspecialchars($currentValue) ?: '-' ?></td>
                            <td class="px-4 py-3"><span class="<?= $confClass ?> font-medium"><?= round($confidence * 100) ?>%</span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <?php if (!empty($extractedData['directors'])): ?>
            <div class="mt-6 p-4 bg-indigo-50 rounded-lg">
                <h4 class="font-medium text-indigo-800 mb-3"><i class="fas fa-users mr-2"></i>Directors Found</h4>
                <div class="space-y-2">
                    <?php foreach ($extractedData['directors'] as $dir): ?>
                    <div class="flex items-center justify-between bg-white p-3 rounded">
                        <div>
                            <span class="font-medium"><?= htmlspecialchars($dir['name']) ?></span>
                            <span class="text-gray-500 text-sm ml-2">DIN: <?= $dir['din'] ?></span>
                        </div>
                        <div class="text-sm text-gray-600"><?= $dir['designation'] ?> | <?= $dir['appointment_date'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="mt-6 flex gap-4">
                <?php if ($clientId): ?>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>Apply Selected Fields to Client
                </button>
                <?php else: ?>
                <div class="p-4 bg-amber-50 text-amber-700 rounded-lg flex-1">
                    <i class="fas fa-info-circle mr-2"></i>Select a client above to apply extracted data.
                </div>
                <?php endif; ?>
                <a href="certificate_ocr.php<?= $clientId ? "?client_id=$clientId" : '' ?>" class="btn btn-secondary">
                    <i class="fas fa-redo mr-2"></i>Upload Another
                </a>
            </div>
        </form>
    </div>
    <?php endif; ?>
</div>

<script>
document.getElementById('selectAll')?.addEventListener('change', function() {
    document.querySelectorAll('.field-checkbox').forEach(cb => cb.checked = this.checked);
});
document.querySelector('input[type="file"]')?.addEventListener('change', function() {
    if (this.files[0]) document.getElementById('file-label').textContent = this.files[0].name;
});
</script>

<?php require_once 'includes/footer.php'; ?>
