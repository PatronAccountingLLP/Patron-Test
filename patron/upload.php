<?php
/**
 * PATRON ADMIN DASHBOARD
 * File Upload Handler
 */

require_once 'includes/db.php';
startSession();
requireLogin();

header('Content-Type: application/json');

// Check if this is a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// Verify CSRF token
if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    http_response_code(403);
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
    exit;
}

// Check if file was uploaded
if (!isset($_FILES['file']) || $_FILES['file']['error'] === UPLOAD_ERR_NO_FILE) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'No file uploaded']);
    exit;
}

$file = $_FILES['file'];

// Check for upload errors
if ($file['error'] !== UPLOAD_ERR_OK) {
    $errorMessages = [
        UPLOAD_ERR_INI_SIZE => 'File exceeds server limit',
        UPLOAD_ERR_FORM_SIZE => 'File exceeds form limit',
        UPLOAD_ERR_PARTIAL => 'File was only partially uploaded',
        UPLOAD_ERR_NO_TMP_DIR => 'Missing temporary folder',
        UPLOAD_ERR_CANT_WRITE => 'Failed to write file',
        UPLOAD_ERR_EXTENSION => 'File upload stopped by extension',
    ];
    $error = $errorMessages[$file['error']] ?? 'Unknown upload error';
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => $error]);
    exit;
}

// Check file size
if ($file['size'] > MAX_FILE_SIZE) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'File size exceeds limit of ' . (MAX_FILE_SIZE / 1024 / 1024) . 'MB']);
    exit;
}

// Get file extension
$filename = basename($file['name']);
$extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

// Check allowed extensions
if (!in_array($extension, ALLOWED_EXTENSIONS)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'File type not allowed. Allowed: ' . implode(', ', ALLOWED_EXTENSIONS)]);
    exit;
}

// Get upload type and related IDs
$uploadType = sanitize($_POST['type'] ?? 'document');
$clientId = (int)($_POST['client_id'] ?? 0);
$personId = (int)($_POST['person_id'] ?? 0) ?: null;
$documentTypeId = (int)($_POST['document_type_id'] ?? 0);
$serviceRequestId = (int)($_POST['service_request_id'] ?? 0) ?: null;
$certificateId = (int)($_POST['certificate_id'] ?? 0) ?: null;

// Validate required fields based on upload type
if ($uploadType === 'document') {
    if (!$clientId) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Client ID is required']);
        exit;
    }
    if (!$documentTypeId) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Document type is required']);
        exit;
    }
}

// Create upload directory structure
$uploadDir = UPLOAD_DIR;
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Create subdirectory based on type and client
$subDir = $uploadType . 's/';
if ($clientId) {
    $subDir .= 'client_' . $clientId . '/';
}
$subDir .= date('Y/m/');

$fullDir = $uploadDir . $subDir;
if (!is_dir($fullDir)) {
    mkdir($fullDir, 0755, true);
}

// Generate unique filename
$newFilename = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $filename);
$filePath = $subDir . $newFilename;
$fullPath = $uploadDir . $filePath;

// Move uploaded file
if (!move_uploaded_file($file['tmp_name'], $fullPath)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Failed to save file']);
    exit;
}

// Get MIME type
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $finfo->file($fullPath);

// Save to database based on upload type
$documentId = null;

try {
    if ($uploadType === 'document') {
        // Insert into client_documents
        dbExecute("
            INSERT INTO client_documents 
            (client_id, person_id, document_type_id, file_name, file_path, file_size, mime_type, status, created_by)
            VALUES (?, ?, ?, ?, ?, ?, ?, 'UPLOADED', ?)
        ", [
            $clientId,
            $personId,
            $documentTypeId,
            $filename,
            $filePath,
            $file['size'],
            $mimeType,
            $_SESSION['user_id']
        ]);
        
        $documentId = dbLastInsertId();
        
        // If service request ID provided, link to request documents
        if ($serviceRequestId) {
            // Check if request document entry exists
            $reqDoc = dbFetchOne("
                SELECT id FROM request_documents 
                WHERE service_request_id = ? AND document_type_id = ?
            ", [$serviceRequestId, $documentTypeId]);
            
            if ($reqDoc) {
                dbExecute("
                    UPDATE request_documents 
                    SET client_document_id = ?, status = 'UPLOADED'
                    WHERE id = ?
                ", [$documentId, $reqDoc['id']]);
            } else {
                dbExecute("
                    INSERT INTO request_documents (service_request_id, document_type_id, client_document_id, status)
                    VALUES (?, ?, ?, 'UPLOADED')
                ", [$serviceRequestId, $documentTypeId, $documentId]);
            }
        }
        
        logActivity('UPLOAD', 'client_documents', $documentId, null, [
            'file_name' => $filename,
            'client_id' => $clientId,
            'document_type_id' => $documentTypeId
        ]);
        
    } elseif ($uploadType === 'certificate') {
        // Update certificate with file info
        if ($certificateId) {
            dbExecute("
                UPDATE certificates 
                SET file_name = ?, file_path = ?, updated_by = ?
                WHERE id = ?
            ", [$filename, $filePath, $_SESSION['user_id'], $certificateId]);
            
            $documentId = $certificateId;
            logActivity('UPDATE', 'certificates', $certificateId, null, ['file_name' => $filename]);
        }
    }
    
    echo json_encode([
        'success' => true,
        'message' => 'File uploaded successfully',
        'data' => [
            'id' => $documentId,
            'file_name' => $filename,
            'file_path' => $filePath,
            'file_size' => $file['size'],
            'mime_type' => $mimeType
        ]
    ]);
    
} catch (Exception $e) {
    // Delete the uploaded file if database insert fails
    if (file_exists($fullPath)) {
        unlink($fullPath);
    }
    
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Failed to save file record']);
}
