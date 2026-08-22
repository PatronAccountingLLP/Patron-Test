<?php
/**
 * PDF Extraction Test - Diagnose why extraction fails
 * LOCATION: /patron/test_pdf_extract.php
 * DELETE AFTER TESTING
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>PDF Parser Diagnostic Test</h2>";

// Check 1: PDF Parser library exists
$pdfParserPath = __DIR__ . '/includes/pdfparser/vendor/autoload.php';
echo "<h3>1. PDF Parser Library</h3>";
echo "Path: <code>$pdfParserPath</code><br>";

if (file_exists($pdfParserPath)) {
    echo "✅ File exists<br>";
    require_once $pdfParserPath;
    
    if (class_exists('Smalot\PdfParser\Parser')) {
        echo "✅ Parser class loaded<br>";
    } else {
        echo "❌ Parser class NOT found<br>";
    }
} else {
    echo "❌ File NOT found<br>";
    
    // Check alternative paths
    $altPaths = [
        __DIR__ . '/includes/pdfparser/vendor/autoload.php',
        __DIR__ . '/vendor/autoload.php',
        __DIR__ . '/pdfparser/vendor/autoload.php',
    ];
    
    echo "<br>Checking alternative paths:<br>";
    foreach ($altPaths as $p) {
        echo "- $p: " . (file_exists($p) ? "✅ EXISTS" : "❌ not found") . "<br>";
    }
}

// Check 2: Test with a sample PDF
echo "<h3>2. Test PDF Extraction</h3>";

if (isset($_FILES['test_pdf']) && $_FILES['test_pdf']['error'] === UPLOAD_ERR_OK) {
    $tmpFile = $_FILES['test_pdf']['tmp_name'];
    $fileName = $_FILES['test_pdf']['name'];
    
    echo "Uploaded: <strong>$fileName</strong><br>";
    echo "Temp path: $tmpFile<br>";
    echo "Size: " . filesize($tmpFile) . " bytes<br><br>";
    
    if (class_exists('Smalot\PdfParser\Parser')) {
        try {
            $parser = new \Smalot\PdfParser\Parser();
            echo "✅ Parser instantiated<br>";
            
            $pdf = $parser->parseFile($tmpFile);
            echo "✅ PDF parsed<br>";
            
            $text = $pdf->getText();
            $textLength = strlen($text);
            echo "✅ Text extracted: <strong>$textLength characters</strong><br><br>";
            
            if ($textLength > 0) {
                echo "<h4>Extracted Text Preview (first 2000 chars):</h4>";
                echo "<pre style='background:#f5f5f5;padding:15px;border:1px solid #ddd;max-height:400px;overflow:auto;white-space:pre-wrap;'>";
                echo htmlspecialchars(substr($text, 0, 2000));
                if ($textLength > 2000) echo "\n\n... [truncated, total: $textLength chars]";
                echo "</pre>";
            } else {
                echo "⚠️ Text is empty - PDF might be image-based or encrypted<br>";
            }
            
        } catch (Exception $e) {
            echo "❌ Error: " . $e->getMessage() . "<br>";
            echo "<pre>" . $e->getTraceAsString() . "</pre>";
        }
    } else {
        echo "❌ Cannot test - Parser class not available<br>";
    }
} else {
    echo "<form method='POST' enctype='multipart/form-data'>";
    echo "<input type='file' name='test_pdf' accept='.pdf' required><br><br>";
    echo "<button type='submit' style='padding:10px 20px;background:#7c3aed;color:white;border:none;border-radius:5px;cursor:pointer;'>Test PDF Extraction</button>";
    echo "</form>";
}

// Check 3: Directory permissions
echo "<h3>3. Directory Info</h3>";
echo "Current dir: " . __DIR__ . "<br>";
echo "Includes dir exists: " . (is_dir(__DIR__ . '/includes') ? "✅ Yes" : "❌ No") . "<br>";
echo "Includes/pdfparser exists: " . (is_dir(__DIR__ . '/includes/pdfparser') ? "✅ Yes" : "❌ No") . "<br>";

if (is_dir(__DIR__ . '/includes/pdfparser')) {
    echo "<br>Contents of includes/pdfparser:<br>";
    $files = scandir(__DIR__ . '/includes/pdfparser');
    foreach ($files as $f) {
        if ($f !== '.' && $f !== '..') {
            echo "- $f<br>";
        }
    }
}

// Check 4: PHP Info
echo "<h3>4. PHP Info</h3>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Memory Limit: " . ini_get('memory_limit') . "<br>";
echo "Max Upload: " . ini_get('upload_max_filesize') . "<br>";
?>
