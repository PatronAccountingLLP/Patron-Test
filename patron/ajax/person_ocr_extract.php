<?php
/**
 * PATRON - AJAX Person Document OCR Handler
 * 
 * LOCATION: /patron/ajax/person_ocr_extract.php
 */

// Clean output buffers
while (ob_get_level()) ob_end_clean();
header('Content-Type: application/json');

try {
    require_once '../includes/db.php';
    startSession();
    
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('Please login first.');
    }
    
    $action = $_POST['action'] ?? 'extract';
    
    if (!isset($_FILES['document']) || $_FILES['document']['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('No file uploaded or upload error.');
    }
    
    $file = $_FILES['document'];
    $tmpPath = $file['tmp_name'];
    $fileName = $file['name'];
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
    // Validate file type
    $allowedExt = ['pdf', 'jpg', 'jpeg', 'png'];
    if (!in_array($ext, $allowedExt)) {
        throw new Exception('Only PDF, JPG, PNG files are allowed.');
    }
    
    // Handle extraction
    if ($action === 'extract') {
        require_once '../includes/person_ocr_extractor.php';
        
        $extractor = new PersonOCRExtractor();
        $text = $extractor->extractText($tmpPath);
        
        if (empty($text)) {
            // For images without OCR API, return partial success
            echo json_encode([
                'success' => true,
                'ocr_available' => false,
                'message' => 'Image OCR not available. Please enter details manually or configure OCR API.',
                'data' => [
                    'document_type' => 'UNKNOWN',
                    'person_data' => [],
                    'raw_text' => ''
                ]
            ]);
            exit;
        }
        
        // Extract data
        $result = $extractor->extractPersonData($text);
        $mappedFields = $extractor->mapToPersonFields($result);
        
        echo json_encode([
            'success' => true,
            'ocr_available' => true,
            'data' => $result,
            'mapped_fields' => $mappedFields
        ]);
        exit;
    }
    
    // Handle upload + extract + save
    if ($action === 'upload_and_extract') {
        $personId = (int)($_POST['person_id'] ?? 0);
        $docTypeId = (int)($_POST['document_type_id'] ?? 0);
        $docTypeCode = trim($_POST['document_type_code'] ?? '');
        $updatePerson = isset($_POST['update_person']) && $_POST['update_person'] === '1';
        
        if (!$personId) {
            throw new Exception('Person ID is required.');
        }
        
        // Get or create document type
        if (!$docTypeId && $docTypeCode) {
            $docType = dbFetchOne("SELECT id FROM document_types WHERE code = ? AND deleted_at IS NULL LIMIT 1", [$docTypeCode]);
            if ($docType) {
                $docTypeId = $docType['id'];
            } else {
                $docName = str_replace('_', ' ', ucwords(strtolower($docTypeCode)));
                dbExecute("INSERT INTO document_types (name, code, category, level, is_active, created_at) VALUES (?, ?, 'KYC', 'PERSON', 1, NOW())", [$docName, $docTypeCode]);
                $docTypeId = dbLastInsertId();
            }
        }
        
        // Create upload directory
        $uploadDir = 'uploads/persons/' . $personId . '/';
        $fullUploadDir = dirname(__DIR__) . '/' . $uploadDir;
        if (!is_dir($fullUploadDir)) {
            mkdir($fullUploadDir, 0755, true);
        }
        
        // Generate unique filename
        $newFileName = $docTypeCode . '_' . date('Ymd_His') . '.' . $ext;
        $filePath = $uploadDir . $newFileName;
        $fullPath = dirname(__DIR__) . '/' . $filePath;
        
        // Move file
        if (!move_uploaded_file($tmpPath, $fullPath)) {
            throw new Exception('Failed to save uploaded file.');
        }
        
        // Extract data
        require_once '../includes/person_ocr_extractor.php';
        $extractor = new PersonOCRExtractor();
        $text = $extractor->extractText($fullPath);
        
        $extractedData = [];
        $mappedFields = [];
        $ocrAvailable = false;
        
        if (!empty($text)) {
            $ocrAvailable = true;
            $extractedData = $extractor->extractPersonData($text, $docTypeCode);
            $mappedFields = $extractor->mapToPersonFields($extractedData);
            
            // Auto-detect document type if not provided
            if (empty($docTypeCode) && !empty($extractedData['document_type']) && $extractedData['document_type'] !== 'UNKNOWN') {
                $docTypeCode = $extractedData['document_type'];
                $docType = dbFetchOne("SELECT id FROM document_types WHERE code = ? AND deleted_at IS NULL LIMIT 1", [$docTypeCode]);
                if ($docType) {
                    $docTypeId = $docType['id'];
                }
            }
        }
        
        // Get client_id from linked clients
        $linkedClient = dbFetchOne("SELECT client_id FROM client_persons WHERE person_id = ? LIMIT 1", [$personId]);
        $clientId = $linkedClient['client_id'] ?? null;
        
        // Save document record
        dbExecute(
            "INSERT INTO client_documents (client_id, person_id, document_type_id, file_path, file_name, uploaded_by, created_at) 
             VALUES (?, ?, ?, ?, ?, ?, NOW())",
            [$clientId, $personId, $docTypeId, $filePath, $fileName, $_SESSION['user_id'] ?? null]
        );
        $docId = dbLastInsertId();
        
        // Update person fields if requested
        $updatedFields = [];
        if ($updatePerson && !empty($mappedFields)) {
            $person = dbFetchOne("SELECT * FROM persons_new WHERE id = ?", [$personId]);
            
            $updates = [];
            $params = [];
            
            foreach ($mappedFields as $field => $value) {
                // Only update if current value is empty
                if (empty($person[$field]) && !empty($value)) {
                    $updates[] = "$field = ?";
                    $params[] = $value;
                    $updatedFields[$field] = $value;
                }
            }
            
            if (!empty($updates)) {
                $params[] = $personId;
                dbExecute("UPDATE persons_new SET " . implode(', ', $updates) . ", updated_at = NOW() WHERE id = ?", $params);
            }
        }
        
        echo json_encode([
            'success' => true,
            'ocr_available' => $ocrAvailable,
            'document_id' => $docId,
            'file_path' => $filePath,
            'data' => $extractedData,
            'mapped_fields' => $mappedFields,
            'updated_fields' => $updatedFields,
            'message' => $ocrAvailable 
                ? 'Document uploaded and data extracted.' 
                : 'Document uploaded. OCR not available for images.'
        ]);
        exit;
    }
    
    throw new Exception('Invalid action.');
    
} catch (Throwable $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
