<?php
/**
 * PATRON CLIENT PORTAL
 * Public Document Upload Form - No Login Required
 * Accessed via unique token link
 */

require_once '../includes/db.php';

// Get token from URL
$token = sanitize($_GET['token'] ?? '');

if (!$token) {
    die(showError('Invalid Link', 'This link is invalid or expired. Please contact Patron Accounting for a new link.'));
}

// Get service request by token
$request = dbFetchOne("
    SELECT sr.*, s.name as service_name, s.code as service_code,
           c.name as client_name, c.email as client_email, c.mobile as client_mobile,
           u.display_name as assigned_to_name, u.email as assigned_email, u.mobile as assigned_mobile
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE sr.form_token = ? AND sr.deleted_at IS NULL
", [$token]);

if (!$request) {
    die(showError('Link Not Found', 'This link is invalid or has expired. Please contact Patron Accounting for assistance.'));
}

// Check if request is still accepting documents
if (in_array($request['status'], ['COMPLETED', 'CANCELLED', 'REJECTED'])) {
    die(showError('Request Closed', 'This service request has been ' . strtolower($request['status']) . '. No more documents can be uploaded.'));
}

// Get required documents for this request
$documents = dbFetchAll("
    SELECT rd.*, dt.name as doc_name, dt.code as doc_code, dt.description as doc_description,
           cd.file_path, cd.original_filename, cd.uploaded_at
    FROM request_documents rd
    JOIN document_types dt ON rd.document_type_id = dt.id
    LEFT JOIN client_documents cd ON rd.client_document_id = cd.id
    WHERE rd.service_request_id = ?
    ORDER BY rd.is_required DESC, dt.name ASC
", [$request['id']]);

// Calculate stats
$totalDocs = count($documents);
$uploadedDocs = count(array_filter($documents, fn($d) => $d['status'] === 'UPLOADED' || $d['status'] === 'VERIFIED'));
$pendingDocs = $totalDocs - $uploadedDocs;

// Handle file upload
$uploadMessage = '';
$uploadError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['document'])) {
    $docId = (int)($_POST['document_id'] ?? 0);
    $requestDocId = (int)($_POST['request_document_id'] ?? 0);
    
    if (!$docId || !$requestDocId) {
        $uploadError = 'Invalid document selection.';
    } else {
        $file = $_FILES['document'];
        
        // Validate file
        $allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'];
        $maxSize = 10 * 1024 * 1024; // 10MB
        
        if ($file['error'] !== UPLOAD_ERR_OK) {
            $uploadError = 'Upload failed. Please try again.';
        } elseif (!in_array($file['type'], $allowedTypes)) {
            $uploadError = 'Invalid file type. Only PDF, JPG, PNG allowed.';
        } elseif ($file['size'] > $maxSize) {
            $uploadError = 'File too large. Maximum size is 10MB.';
        } else {
            // Create upload directory
            $uploadDir = '../uploads/documents/' . date('Y/m');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            
            // Generate unique filename
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $filename = 'DOC_' . $request['id'] . '_' . $docId . '_' . time() . '.' . $ext;
            $filePath = $uploadDir . '/' . $filename;
            
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                // Insert into client_documents
                dbExecute("
                    INSERT INTO client_documents 
                    (client_id, document_type_id, file_path, original_filename, file_size, mime_type, status, uploaded_at)
                    VALUES (?, ?, ?, ?, ?, ?, 'UPLOADED', NOW())
                ", [
                    $request['client_id'],
                    $docId,
                    $filePath,
                    $file['name'],
                    $file['size'],
                    $file['type']
                ]);
                
                $clientDocId = dbLastInsertId();
                
                // Update request_documents
                dbExecute("
                    UPDATE request_documents 
                    SET client_document_id = ?, status = 'UPLOADED'
                    WHERE id = ?
                ", [$clientDocId, $requestDocId]);
                
                // Update request status if it was pending documents
                if ($request['status'] === 'PENDING_DOCUMENTS' || $request['status'] === 'NEW') {
                    // Check if all required docs are now uploaded
                    $stillPending = dbFetchOne("
                        SELECT COUNT(*) as count FROM request_documents 
                        WHERE service_request_id = ? AND is_required = 1 AND status = 'PENDING'
                    ", [$request['id']]);
                    
                    if ($stillPending['count'] == 0) {
                        dbExecute("UPDATE service_requests SET status = 'IN_PROGRESS' WHERE id = ?", [$request['id']]);
                    }
                }
                
                $uploadMessage = 'Document uploaded successfully!';
                
                // Refresh documents list
                $documents = dbFetchAll("
                    SELECT rd.*, dt.name as doc_name, dt.code as doc_code, dt.description as doc_description,
                           cd.file_path, cd.original_filename, cd.uploaded_at
                    FROM request_documents rd
                    JOIN document_types dt ON rd.document_type_id = dt.id
                    LEFT JOIN client_documents cd ON rd.client_document_id = cd.id
                    WHERE rd.service_request_id = ?
                    ORDER BY rd.is_required DESC, dt.name ASC
                ", [$request['id']]);
                
                $uploadedDocs = count(array_filter($documents, fn($d) => $d['status'] === 'UPLOADED' || $d['status'] === 'VERIFIED'));
                $pendingDocs = $totalDocs - $uploadedDocs;
            } else {
                $uploadError = 'Failed to save file. Please try again.';
            }
        }
    }
}

// Helper function for error page
function showError($title, $message) {
    return '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . $title . ' - Patron Accounting</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-lg p-8 max-w-md text-center">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <h1 class="text-xl font-bold text-gray-900 mb-2">' . $title . '</h1>
            <p class="text-gray-600 mb-6">' . $message . '</p>
            <p class="text-sm text-gray-500">Need help? Contact us at<br><a href="mailto:sales@patronaccounting.com" class="text-blue-600">sales@patronaccounting.com</a></p>
        </div>
    </body>
    </html>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Documents - <?= htmlspecialchars($request['service_name']) ?> - Patron Accounting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .upload-zone {
            border: 2px dashed #cbd5e1;
            transition: all 0.3s ease;
        }
        .upload-zone:hover, .upload-zone.dragover {
            border-color: #3b82f6;
            background-color: #eff6ff;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-4xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">P</span>
                </div>
                <div>
                    <h1 class="font-bold text-gray-900">Patron Accounting LLP</h1>
                    <p class="text-xs text-gray-500">Document Upload Portal</p>
                </div>
            </div>
            <div class="text-right text-sm">
                <p class="text-gray-500">Request #</p>
                <p class="font-mono font-medium"><?= $request['request_number'] ?></p>
            </div>
        </div>
    </header>
    
    <main class="max-w-4xl mx-auto px-4 py-8">
        <!-- Welcome Card -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <p class="text-gray-500 text-sm">Hello,</p>
                    <h2 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($request['client_name']) ?></h2>
                    <p class="text-gray-600 mt-1">
                        Please upload the required documents for your 
                        <span class="font-semibold text-blue-600"><?= htmlspecialchars($request['service_name']) ?></span>
                    </p>
                </div>
                <div class="flex items-center gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600"><?= $uploadedDocs ?></div>
                        <div class="text-xs text-gray-500">Uploaded</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold <?= $pendingDocs > 0 ? 'text-orange-500' : 'text-gray-400' ?>"><?= $pendingDocs ?></div>
                        <div class="text-xs text-gray-500">Pending</div>
                    </div>
                </div>
            </div>
            
            <!-- Progress Bar -->
            <div class="mt-6">
                <div class="flex justify-between text-sm mb-2">
                    <span class="text-gray-600">Progress</span>
                    <span class="font-medium"><?= $totalDocs > 0 ? round(($uploadedDocs / $totalDocs) * 100) : 0 ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="bg-gradient-to-r from-blue-500 to-green-500 h-3 rounded-full transition-all duration-500" 
                         style="width: <?= $totalDocs > 0 ? ($uploadedDocs / $totalDocs) * 100 : 0 ?>%"></div>
                </div>
            </div>
        </div>
        
        <!-- Messages -->
        <?php if ($uploadMessage): ?>
        <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6 flex items-center gap-3">
            <i class="fas fa-check-circle text-green-500 text-xl"></i>
            <p class="text-green-700"><?= htmlspecialchars($uploadMessage) ?></p>
        </div>
        <?php endif; ?>
        
        <?php if ($uploadError): ?>
        <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6 flex items-center gap-3">
            <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
            <p class="text-red-700"><?= htmlspecialchars($uploadError) ?></p>
        </div>
        <?php endif; ?>
        
        <!-- Documents List -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-4 bg-gray-50 border-b border-gray-200">
                <h3 class="font-semibold text-gray-900">
                    <i class="fas fa-folder-open mr-2 text-blue-500"></i>
                    Required Documents
                </h3>
            </div>
            
            <div class="divide-y divide-gray-100">
                <?php foreach ($documents as $doc): 
                    $isUploaded = in_array($doc['status'], ['UPLOADED', 'VERIFIED']);
                    $isVerified = $doc['status'] === 'VERIFIED';
                    $isRejected = $doc['status'] === 'REJECTED';
                ?>
                <div class="p-4 <?= $isUploaded ? 'bg-green-50' : ($isRejected ? 'bg-red-50' : '') ?>">
                    <div class="flex flex-col md:flex-row md:items-center gap-4">
                        <!-- Document Info -->
                        <div class="flex-1">
                            <div class="flex items-center gap-2">
                                <?php if ($isVerified): ?>
                                <span class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-green-600"></i>
                                </span>
                                <?php elseif ($isUploaded): ?>
                                <span class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-file text-blue-600"></i>
                                </span>
                                <?php elseif ($isRejected): ?>
                                <span class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-times text-red-600"></i>
                                </span>
                                <?php else: ?>
                                <span class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-file-upload text-gray-400"></i>
                                </span>
                                <?php endif; ?>
                                
                                <div>
                                    <h4 class="font-medium text-gray-900">
                                        <?= htmlspecialchars($doc['doc_name']) ?>
                                        <?php if ($doc['is_required']): ?>
                                        <span class="text-red-500">*</span>
                                        <?php endif; ?>
                                    </h4>
                                    <?php if ($doc['doc_description']): ?>
                                    <p class="text-xs text-gray-500"><?= htmlspecialchars($doc['doc_description']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <?php if ($isUploaded && $doc['original_filename']): ?>
                            <p class="text-xs text-gray-500 mt-2 ml-10">
                                <i class="fas fa-paperclip mr-1"></i>
                                <?= htmlspecialchars($doc['original_filename']) ?>
                                <span class="text-gray-400">• <?= date('d M Y', strtotime($doc['uploaded_at'])) ?></span>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ($isRejected): ?>
                            <p class="text-xs text-red-600 mt-2 ml-10">
                                <i class="fas fa-exclamation-triangle mr-1"></i>
                                Document was rejected. Please upload again.
                            </p>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Status / Upload Button -->
                        <div class="ml-10 md:ml-0">
                            <?php if ($isVerified): ?>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
                                <i class="fas fa-check-circle"></i> Verified
                            </span>
                            <?php elseif ($isUploaded): ?>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">
                                <i class="fas fa-clock"></i> Under Review
                            </span>
                            <?php else: ?>
                            <button onclick="openUploadModal(<?= $doc['document_type_id'] ?>, <?= $doc['id'] ?>, '<?= htmlspecialchars($doc['doc_name'], ENT_QUOTES) ?>')" 
                                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition text-sm">
                                <i class="fas fa-upload"></i> Upload
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Help Section -->
        <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
            <h3 class="font-semibold text-gray-900 mb-4">
                <i class="fas fa-question-circle mr-2 text-blue-500"></i>
                Need Help?
            </h3>
            <div class="grid md:grid-cols-2 gap-4 text-sm">
                <div>
                    <p class="text-gray-600 mb-2"><strong>Accepted formats:</strong></p>
                    <p class="text-gray-500">PDF, JPG, PNG (Max 10MB per file)</p>
                </div>
                <div>
                    <?php if ($request['assigned_to_name']): ?>
                    <p class="text-gray-600 mb-2"><strong>Your Assigned Resource:</strong></p>
                    <div class="bg-green-50 rounded-lg p-3">
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($request['assigned_to_name']) ?></p>
                        <?php if ($request['assigned_mobile']): ?>
                        <p class="text-gray-600">
                            <a href="tel:<?= htmlspecialchars($request['assigned_mobile']) ?>" class="text-green-600 hover:text-green-700">
                                <i class="fas fa-phone mr-1"></i> <?= htmlspecialchars($request['assigned_mobile']) ?>
                            </a>
                        </p>
                        <?php endif; ?>
                        <?php if ($request['assigned_email']): ?>
                        <p class="text-gray-600">
                            <a href="mailto:<?= htmlspecialchars($request['assigned_email']) ?>" class="text-green-600 hover:text-green-700">
                                <i class="fas fa-envelope mr-1"></i> <?= htmlspecialchars($request['assigned_email']) ?>
                            </a>
                        </p>
                        <?php endif; ?>
                    </div>
                    <?php else: ?>
                    <p class="text-gray-600 mb-2"><strong>Contact us:</strong></p>
                    <p class="text-gray-500">
                        <i class="fas fa-envelope mr-1"></i> sales@patronaccounting.com
                    </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <!-- All Done Message -->
        <?php if ($pendingDocs === 0 && $totalDocs > 0): ?>
        <div class="mt-6 bg-gradient-to-r from-green-500 to-emerald-600 rounded-xl shadow-lg p-6 text-white text-center">
            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check-circle text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">All Documents Uploaded!</h3>
            <p class="text-green-100">Thank you! Our team will review your documents and proceed with your request.</p>
        </div>
        <?php endif; ?>
    </main>
    
    <!-- Footer -->
    <footer class="mt-8 py-6 text-center text-sm text-gray-500">
        <p>© <?= date('Y') ?> Patron Accounting LLP. All rights reserved.</p>
    </footer>
    
    <!-- Upload Modal -->
    <div id="uploadModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 p-4">
        <div class="bg-white rounded-xl shadow-2xl max-w-md w-full">
            <div class="p-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="font-semibold text-gray-900">Upload Document</h3>
                <button onclick="closeUploadModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form method="POST" enctype="multipart/form-data" class="p-6">
                <input type="hidden" name="document_id" id="modal_document_id">
                <input type="hidden" name="request_document_id" id="modal_request_document_id">
                
                <p class="text-gray-600 mb-4">
                    Uploading: <strong id="modal_document_name"></strong>
                </p>
                
                <div class="upload-zone rounded-lg p-8 text-center cursor-pointer" 
                     onclick="document.getElementById('fileInput').click()"
                     ondragover="this.classList.add('dragover'); event.preventDefault()"
                     ondragleave="this.classList.remove('dragover')"
                     ondrop="handleDrop(event)">
                    <input type="file" name="document" id="fileInput" class="hidden" 
                           accept=".pdf,.jpg,.jpeg,.png" onchange="showFileName(this)">
                    <div id="uploadPlaceholder">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                        <p class="text-gray-600">Click to browse or drag & drop</p>
                        <p class="text-xs text-gray-400 mt-1">PDF, JPG, PNG (Max 10MB)</p>
                    </div>
                    <div id="selectedFile" class="hidden">
                        <i class="fas fa-file text-4xl text-blue-500 mb-3"></i>
                        <p class="text-gray-900 font-medium" id="selectedFileName"></p>
                        <p class="text-xs text-gray-500">Click to change</p>
                    </div>
                </div>
                
                <div class="mt-6 flex gap-3">
                    <button type="button" onclick="closeUploadModal()" 
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" id="uploadBtn"
                            class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                        <i class="fas fa-upload mr-2"></i> Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        function openUploadModal(docId, requestDocId, docName) {
            document.getElementById('modal_document_id').value = docId;
            document.getElementById('modal_request_document_id').value = requestDocId;
            document.getElementById('modal_document_name').textContent = docName;
            document.getElementById('uploadModal').classList.remove('hidden');
            document.getElementById('uploadModal').classList.add('flex');
            resetUploadForm();
        }
        
        function closeUploadModal() {
            document.getElementById('uploadModal').classList.add('hidden');
            document.getElementById('uploadModal').classList.remove('flex');
            resetUploadForm();
        }
        
        function resetUploadForm() {
            document.getElementById('fileInput').value = '';
            document.getElementById('uploadPlaceholder').classList.remove('hidden');
            document.getElementById('selectedFile').classList.add('hidden');
            document.getElementById('uploadBtn').disabled = true;
        }
        
        function showFileName(input) {
            if (input.files && input.files[0]) {
                document.getElementById('selectedFileName').textContent = input.files[0].name;
                document.getElementById('uploadPlaceholder').classList.add('hidden');
                document.getElementById('selectedFile').classList.remove('hidden');
                document.getElementById('uploadBtn').disabled = false;
            }
        }
        
        function handleDrop(event) {
            event.preventDefault();
            event.target.classList.remove('dragover');
            const files = event.dataTransfer.files;
            if (files.length > 0) {
                document.getElementById('fileInput').files = files;
                showFileName(document.getElementById('fileInput'));
            }
        }
        
        // Close modal on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeUploadModal();
        });
        
        // Close modal on backdrop click
        document.getElementById('uploadModal').addEventListener('click', function(e) {
            if (e.target === this) closeUploadModal();
        });
    </script>
</body>
</html>
