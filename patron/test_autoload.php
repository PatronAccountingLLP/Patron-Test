<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Autoload Test</h2>";

$path = __DIR__ . '/includes/pdfparser/vendor/autoload.php';
echo "Path: $path<br>";
echo "Exists: " . (file_exists($path) ? 'YES' : 'NO') . "<br><br>";

if (file_exists($path)) {
    echo "Requiring autoload...<br>";
    require_once $path;
    echo "Done.<br><br>";
    
    echo "Checking Parser class...<br>";
    if (class_exists('Smalot\PdfParser\Parser')) {
        echo "✅ SUCCESS - Parser class found!<br>";
    } else {
        echo "❌ Parser class NOT found<br>";
        
        // Debug: check actual file
        $parserFile = __DIR__ . '/includes/pdfparser/vendor/smalot/pdfparser/src/Smalot/PdfParser/Parser.php';
        echo "<br>Parser.php exists: " . (file_exists($parserFile) ? 'YES' : 'NO') . "<br>";
        
        if (file_exists($parserFile)) {
            echo "Trying direct require...<br>";
            require_once $parserFile;
            echo "Class exists now: " . (class_exists('Smalot\PdfParser\Parser') ? 'YES' : 'NO') . "<br>";
        }
    }
}
?>
