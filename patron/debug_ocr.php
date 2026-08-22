<?php
/**
 * Debug OCR Extraction - Test what data is being extracted
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'includes/db.php';
require_once 'includes/pdfparser/vendor/autoload.php';
require_once 'includes/ocr_extractor.php';

echo "<h2>OCR Extraction Debug</h2>";

if (isset($_FILES['test_file']) && $_FILES['test_file']['error'] === UPLOAD_ERR_OK) {
    $tmpFile = $_FILES['test_file']['tmp_name'];
    $fileName = $_FILES['test_file']['name'];
    
    echo "<h3>File: " . htmlspecialchars($fileName) . "</h3>";
    
    // Extract text
    $extractor = new CertificateOCRExtractor();
    $text = $extractor->extractTextFromPDF($tmpFile);
    
    echo "<h4>1. Extracted Text (first 2000 chars):</h4>";
    echo "<pre style='background:#f5f5f5;padding:10px;max-height:300px;overflow:auto;font-size:11px;'>";
    echo htmlspecialchars(substr($text, 0, 2000));
    echo "</pre>";
    
    if (!empty($text)) {
        // Run extraction
        $result = $extractor->extract($text);
        
        echo "<h4>2. Document Type Detected:</h4>";
        echo "<p><strong>" . ($result['document_type'] ?? 'UNKNOWN') . "</strong></p>";
        
        echo "<h4>3. Client Data:</h4>";
        echo "<pre style='background:#ecfdf5;padding:10px;'>";
        print_r($result['client_data'] ?? []);
        echo "</pre>";
        
        echo "<h4>4. Certificate Data:</h4>";
        echo "<pre style='background:#eff6ff;padding:10px;'>";
        print_r($result['certificate_data'] ?? []);
        echo "</pre>";
        
        echo "<h4>5. Person Data (Directors/Partners):</h4>";
        if (!empty($result['person_data'])) {
            echo "<div style='background:#fef3c7;padding:10px;'>";
            echo "<p><strong>Found " . count($result['person_data']) . " person(s):</strong></p>";
            foreach ($result['person_data'] as $i => $person) {
                echo "<div style='background:white;padding:8px;margin:5px 0;border-radius:4px;'>";
                echo "<strong>" . ($i+1) . ". " . htmlspecialchars($person['full_name'] ?? 'N/A') . "</strong><br>";
                echo "DIN: " . htmlspecialchars($person['din'] ?? 'N/A') . "<br>";
                echo "Role: " . htmlspecialchars($person['role_type'] ?? 'N/A') . "<br>";
                if (!empty($person['appointment_date'])) {
                    echo "Appointed: " . htmlspecialchars($person['appointment_date']) . "<br>";
                }
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p style='color:red;'><strong>❌ No persons found in extraction!</strong></p>";
        }
        
        echo "<h4>6. Full JSON Result:</h4>";
        echo "<pre style='background:#f5f5f5;padding:10px;max-height:300px;overflow:auto;font-size:11px;'>";
        echo json_encode($result, JSON_PRETTY_PRINT);
        echo "</pre>";
        
    } else {
        echo "<p style='color:red;'>❌ Could not extract text from PDF</p>";
    }
    
} else {
    echo "<form method='POST' enctype='multipart/form-data'>";
    echo "<p>Upload a certificate PDF to see what data is extracted:</p>";
    echo "<input type='file' name='test_file' accept='.pdf' required><br><br>";
    echo "<button type='submit' style='padding:10px 20px;background:#7c3aed;color:white;border:none;border-radius:5px;'>Test Extraction</button>";
    echo "</form>";
}
?>
