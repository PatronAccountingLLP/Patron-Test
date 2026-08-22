<?php
/**
 * PATRON - AJAX OCR Extraction & File Upload Handler
 * 
 * LOCATION: /patron/ajax/ocr_extract.php
 */

// Clean any output buffers
while (ob_get_level()) ob_end_clean();

header('Content-Type: application/json');

try {
    require_once '../includes/db.php';
    startSession();
    
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('Please login first.');
    }
    
    $action = $_POST['action'] ?? 'ocr_extract';
    
    if (!isset($_FILES['certificate_file']) || $_FILES['certificate_file']['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('No file uploaded or upload error.');
    }
    
    $file = $_FILES['certificate_file'];
    $tmpPath = $file['tmp_name'];
    
    // Handle file upload action
    if ($action === 'upload_file') {
        $clientId = (int)($_POST['client_id'] ?? 0);
        
        // Create upload directory
        $uploadDir = 'uploads/certificates/' . date('Y/m');
        $fullUploadDir = dirname(__DIR__) . '/' . $uploadDir;
        
        if (!is_dir($fullUploadDir)) {
            mkdir($fullUploadDir, 0755, true);
        }
        
        // Generate unique filename
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $fileName = 'CERT_' . $clientId . '_' . time() . '_' . uniqid() . '.' . $ext;
        $filePath = $uploadDir . '/' . $fileName;
        $fullPath = dirname(__DIR__) . '/' . $filePath;
        
        if (move_uploaded_file($tmpPath, $fullPath)) {
            echo json_encode([
                'success' => true,
                'file_path' => $filePath
            ]);
        } else {
            throw new Exception('Failed to save uploaded file.');
        }
        exit;
    }
    
    // Handle OCR extraction action
    require_once '../includes/ocr_extractor.php';
    
    $extractor = new CertificateOCRExtractor();
    
    // Extract text from PDF
    $text = $extractor->extractTextFromPDF($tmpPath);
    
    if (empty($text)) {
        // Check if it's a PDF or image
        $mimeType = mime_content_type($tmpPath);
        
        if (strpos($mimeType, 'image') !== false) {
            throw new Exception('Image files cannot be auto-extracted. Please fill in the details manually.');
        } else {
            throw new Exception('This PDF appears to be scanned/image-based. Text extraction is not possible. Please fill in the details manually.');
        }
    }
    
    // Extract data using OCR
    $result = $extractor->extract($text);
    
    echo json_encode([
        'success' => true,
        'data' => $result
    ]);
    
} catch (Throwable $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
