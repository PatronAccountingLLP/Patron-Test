<?php
/**
 * PDF Parser Manual Installer - Complete Version
 * Downloads and extracts the complete PdfParser library
 * 
 * LOCATION: /patron/install_pdfparser.php
 * DELETE AFTER INSTALLATION
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(300);

$installDir = __DIR__ . '/includes/pdfparser';

echo "<!DOCTYPE html><html><head><title>PDF Parser Installer</title>";
echo "<style>body{font-family:Arial,sans-serif;max-width:800px;margin:40px auto;padding:20px;} 
.success{color:#059669;} .error{color:#dc2626;} .info{color:#2563eb;}
pre{background:#f5f5f5;padding:15px;border-radius:8px;overflow-x:auto;}
.btn{display:inline-block;padding:12px 24px;background:#7c3aed;color:white;text-decoration:none;border-radius:8px;margin:10px 5px 10px 0;}
.btn:hover{background:#6d28d9;}</style></head><body>";
echo "<h1>📦 PDF Parser Installer</h1>";

// Step 1: Check current status
echo "<h2>Current Status</h2>";

$autoloadPath = $installDir . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
    if (class_exists('Smalot\PdfParser\Parser')) {
        echo "<p class='success'>✅ PDF Parser is already installed and working!</p>";
        echo "<a href='add_certificate.php' class='btn'>← Go to Add Certificate</a>";
        echo "</body></html>";
        exit;
    } else {
        echo "<p class='error'>⚠️ Autoload exists but Parser class not found - incomplete installation</p>";
    }
} else {
    echo "<p class='info'>ℹ️ PDF Parser not installed yet</p>";
}

// Step 2: Install
if (isset($_POST['install'])) {
    echo "<h2>Installing...</h2>";
    
    // Clean up old installation
    if (is_dir($installDir)) {
        echo "<p>Removing old installation...</p>";
        deleteDirectory($installDir);
    }
    
    // Create directory
    if (!mkdir($installDir, 0755, true)) {
        echo "<p class='error'>❌ Failed to create directory: $installDir</p>";
        exit;
    }
    echo "<p class='success'>✅ Created directory</p>";
    
    // Download from GitHub release
    $zipUrl = 'https://github.com/smalot/pdfparser/archive/refs/tags/v2.10.0.zip';
    $zipFile = $installDir . '/pdfparser.zip';
    
    echo "<p>Downloading PDF Parser v2.10.0...</p>";
    
    $context = stream_context_create([
        'http' => [
            'timeout' => 120,
            'user_agent' => 'Mozilla/5.0 (compatible; PHP/' . phpversion() . ')'
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]
    ]);
    
    $zipContent = @file_get_contents($zipUrl, false, $context);
    
    if ($zipContent === false) {
        echo "<p class='error'>❌ Failed to download from GitHub</p>";
        echo "<p>Trying alternative method...</p>";
        
        // Try with cURL if available
        if (function_exists('curl_init')) {
            $ch = curl_init($zipUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 120);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
            $zipContent = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            if ($httpCode !== 200 || empty($zipContent)) {
                echo "<p class='error'>❌ cURL download also failed (HTTP $httpCode)</p>";
                showManualInstructions();
                exit;
            }
        } else {
            showManualInstructions();
            exit;
        }
    }
    
    file_put_contents($zipFile, $zipContent);
    echo "<p class='success'>✅ Downloaded (" . round(strlen($zipContent)/1024) . " KB)</p>";
    
    // Extract ZIP
    echo "<p>Extracting...</p>";
    $zip = new ZipArchive();
    if ($zip->open($zipFile) === true) {
        $zip->extractTo($installDir);
        $zip->close();
        unlink($zipFile);
        echo "<p class='success'>✅ Extracted</p>";
    } else {
        echo "<p class='error'>❌ Failed to extract ZIP</p>";
        exit;
    }
    
    // Move files from extracted folder
    $extractedDir = $installDir . '/pdfparser-2.10.0';
    if (is_dir($extractedDir)) {
        // Move src folder
        rename($extractedDir . '/src', $installDir . '/src');
        
        // Create vendor/autoload structure
        mkdir($installDir . '/vendor/smalot/pdfparser/src', 0755, true);
        
        // Copy src to vendor location too
        copyDirectory($installDir . '/src', $installDir . '/vendor/smalot/pdfparser/src');
        
        // Create autoload.php
        $autoloadContent = '<?php
// PDF Parser Autoloader
spl_autoload_register(function ($class) {
    $prefix = "Smalot\\\\PdfParser\\\\";
    $baseDir = __DIR__ . "/smalot/pdfparser/src/";
    
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace("\\\\", "/", $relativeClass) . ".php";
    
    if (file_exists($file)) {
        require $file;
    }
});
';
        file_put_contents($installDir . '/vendor/autoload.php', $autoloadContent);
        
        // Clean up
        deleteDirectory($extractedDir);
        
        echo "<p class='success'>✅ Files organized</p>";
    }
    
    // Verify installation
    echo "<h2>Verifying Installation...</h2>";
    
    // Clear any cached autoloaders
    if (function_exists('opcache_reset')) {
        @opcache_reset();
    }
    
    require_once $installDir . '/vendor/autoload.php';
    
    if (class_exists('Smalot\PdfParser\Parser')) {
        echo "<p class='success'>✅ <strong>Installation successful!</strong></p>";
        echo "<p>PDF Parser is ready to use.</p>";
        echo "<a href='add_certificate.php' class='btn'>← Go to Add Certificate</a>";
        echo "<a href='test_pdf_extract.php' class='btn'>🧪 Test Extraction</a>";
    } else {
        echo "<p class='error'>❌ Parser class still not found</p>";
        echo "<p>Checking file structure...</p>";
        
        $checkFiles = [
            $installDir . '/vendor/autoload.php',
            $installDir . '/vendor/smalot/pdfparser/src/Smalot/PdfParser/Parser.php',
            $installDir . '/src/Smalot/PdfParser/Parser.php',
        ];
        
        foreach ($checkFiles as $f) {
            echo "<p>" . (file_exists($f) ? "✅" : "❌") . " $f</p>";
        }
    }
    
} else {
    // Show install button
    echo "<h2>Install PDF Parser</h2>";
    echo "<p>This will download and install the Smalot PDF Parser library (v2.10.0) required for certificate OCR extraction.</p>";
    echo "<form method='POST'>";
    echo "<button type='submit' name='install' class='btn'>📥 Install PDF Parser</button>";
    echo "</form>";
}

echo "</body></html>";

// Helper functions
function deleteDirectory($dir) {
    if (!is_dir($dir)) return;
    $files = array_diff(scandir($dir), ['.', '..']);
    foreach ($files as $file) {
        $path = "$dir/$file";
        is_dir($path) ? deleteDirectory($path) : unlink($path);
    }
    rmdir($dir);
}

function copyDirectory($src, $dst) {
    if (!is_dir($dst)) mkdir($dst, 0755, true);
    $files = array_diff(scandir($src), ['.', '..']);
    foreach ($files as $file) {
        $srcPath = "$src/$file";
        $dstPath = "$dst/$file";
        if (is_dir($srcPath)) {
            copyDirectory($srcPath, $dstPath);
        } else {
            copy($srcPath, $dstPath);
        }
    }
}

function showManualInstructions() {
    echo "<h2>Manual Installation Required</h2>";
    echo "<p>Automatic download failed. Please install manually:</p>";
    echo "<ol>";
    echo "<li>Download from: <a href='https://github.com/smalot/pdfparser/archive/refs/tags/v2.10.0.zip' target='_blank'>GitHub - pdfparser v2.10.0</a></li>";
    echo "<li>Extract the ZIP file</li>";
    echo "<li>Upload the <code>src</code> folder to <code>/patron/includes/pdfparser/src/</code></li>";
    echo "<li>Refresh this page to continue setup</li>";
    echo "</ol>";
}
?>
