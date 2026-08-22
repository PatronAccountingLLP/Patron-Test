<?php
/**
 * PATRON - PDF Parser Setup Script
 * Downloads and installs Smalot PdfParser library
 * 
 * USAGE:
 * 1. Upload this file to /patron/setup_pdfparser.php
 * 2. Open in browser: https://yoursite.com/patron/setup_pdfparser.php
 * 3. Click "Install PDF Parser"
 * 4. Delete this file after installation
 * 
 * LOCATION: /patron/setup_pdfparser.php (DELETE AFTER USE)
 */

// Security check - must be logged in as admin
require_once 'includes/db.php';
startSession();

if (!isset($_SESSION['user_id'])) {
    die('Please login first.');
}

$user = dbFetchOne("SELECT role FROM users WHERE id = ?", [$_SESSION['user_id']]);
if (!$user || $user['role'] !== 'ADMIN') {
    die('Admin access required.');
}

$message = '';
$success = false;
$targetDir = __DIR__ . '/includes/pdfparser';
$isInstalled = file_exists($targetDir . '/vendor/autoload.php');

// Handle manual upload installation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdfparser_zip'])) {
    if ($_FILES['pdfparser_zip']['error'] === UPLOAD_ERR_OK) {
        try {
            $zipFile = $_FILES['pdfparser_zip']['tmp_name'];
            
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }
            
            $zip = new ZipArchive();
            if ($zip->open($zipFile) !== true) {
                throw new Exception("Could not open ZIP file.");
            }
            
            $zip->extractTo($targetDir);
            $zip->close();
            
            // Find and move the extracted folder
            $folders = glob($targetDir . '/pdfparser-*', GLOB_ONLYDIR);
            if (!empty($folders)) {
                $extractedFolder = $folders[0];
                
                // Create vendor directory
                $vendorDir = $targetDir . '/vendor';
                if (!is_dir($vendorDir)) mkdir($vendorDir, 0755, true);
                
                // Move src folder
                if (is_dir($extractedFolder . '/src')) {
                    rename($extractedFolder . '/src', $targetDir . '/src');
                }
                
                // Create autoloader
                $autoloader = '<?php
spl_autoload_register(function ($class) {
    $prefix = \'Smalot\\\\PdfParser\\\\\';
    $baseDir = __DIR__ . \'/../src/\';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace(\'\\\\\', \'/\', $relativeClass) . \'.php\';
    if (file_exists($file)) require $file;
});';
                file_put_contents($vendorDir . '/autoload.php', $autoloader);
                
                // Clean up extracted folder
                array_map('unlink', glob($extractedFolder . '/*.*'));
                array_map(function($d) { 
                    if (is_dir($d)) {
                        array_map('unlink', glob($d . '/*'));
                        @rmdir($d);
                    }
                }, glob($extractedFolder . '/*', GLOB_ONLYDIR));
                @rmdir($extractedFolder);
                
                $success = true;
                $message = "✅ PDF Parser installed successfully!";
                $isInstalled = true;
            } else {
                throw new Exception("Could not find pdfparser folder in ZIP.");
            }
        } catch (Exception $e) {
            $message = "❌ Error: " . $e->getMessage();
        }
    } else {
        $message = "❌ Upload failed. Error code: " . $_FILES['pdfparser_zip']['error'];
    }
}

// Handle auto download installation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['install'])) {
    try {
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }
        
        // Test if directory is writable
        if (!is_writable($targetDir)) {
            throw new Exception("Directory not writable: $targetDir");
        }
        
        $zipUrl = 'https://github.com/smalot/pdfparser/archive/refs/tags/v2.10.0.zip';
        $zipFile = $targetDir . '/pdfparser.zip';
        
        // Try cURL first
        $downloaded = false;
        if (function_exists('curl_init')) {
            $ch = curl_init($zipUrl);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_TIMEOUT => 120,
                CURLOPT_USERAGENT => 'Mozilla/5.0 PATRON Setup',
            ]);
            $zipContent = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curlError = curl_error($ch);
            curl_close($ch);
            
            if ($httpCode === 200 && !empty($zipContent)) {
                file_put_contents($zipFile, $zipContent);
                $downloaded = true;
            }
        }
        
        // Try file_get_contents as fallback
        if (!$downloaded) {
            $context = stream_context_create([
                'http' => ['timeout' => 120, 'user_agent' => 'Mozilla/5.0'],
                'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
            ]);
            $zipContent = @file_get_contents($zipUrl, false, $context);
            if ($zipContent !== false) {
                file_put_contents($zipFile, $zipContent);
                $downloaded = true;
            }
        }
        
        if (!$downloaded || !file_exists($zipFile) || filesize($zipFile) < 10000) {
            throw new Exception("Download failed. Please use manual upload option below.");
        }
        
        // Extract ZIP
        $zip = new ZipArchive();
        if ($zip->open($zipFile) !== true) {
            throw new Exception("Could not open downloaded ZIP file.");
        }
        $zip->extractTo($targetDir);
        $zip->close();
        @unlink($zipFile);
        
        // Setup autoloader
        $extractedFolder = $targetDir . '/pdfparser-2.10.0';
        if (is_dir($extractedFolder)) {
            $vendorDir = $targetDir . '/vendor';
            if (!is_dir($vendorDir)) mkdir($vendorDir, 0755, true);
            
            rename($extractedFolder . '/src', $targetDir . '/src');
            
            $autoloader = '<?php
spl_autoload_register(function ($class) {
    $prefix = \'Smalot\\\\PdfParser\\\\\';
    $baseDir = __DIR__ . \'/../src/\';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace(\'\\\\\', \'/\', $relativeClass) . \'.php\';
    if (file_exists($file)) require $file;
});';
            file_put_contents($vendorDir . '/autoload.php', $autoloader);
            
            // Clean up
            array_map('unlink', glob($extractedFolder . '/*.*'));
            @rmdir($extractedFolder);
        }
        
        $success = true;
        $message = "✅ PDF Parser installed successfully!";
        $isInstalled = true;
        
    } catch (Exception $e) {
        $message = "❌ " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PDF Parser Setup - PATRON</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; max-width: 700px; margin: 50px auto; padding: 20px; background: #f5f5f5; }
        .card { background: #fff; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 30px; margin-bottom: 20px; }
        h1 { color: #1f2937; margin-bottom: 10px; }
        .subtitle { color: #6b7280; margin-bottom: 20px; }
        .status { padding: 15px; border-radius: 8px; margin-bottom: 20px; }
        .status.installed { background: #d1fae5; color: #065f46; }
        .status.not-installed { background: #fef3c7; color: #92400e; }
        .status.error { background: #fee2e2; color: #991b1b; }
        .status.success { background: #d1fae5; color: #065f46; }
        .btn { display: inline-block; padding: 12px 24px; background: #7c3aed; color: #fff; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; }
        .btn:hover { background: #6d28d9; }
        .btn-secondary { background: #6b7280; }
        .btn-secondary:hover { background: #4b5563; }
        .divider { border-top: 1px solid #e5e7eb; margin: 25px 0; padding-top: 20px; }
        code { background: #f3f4f6; padding: 2px 8px; border-radius: 4px; font-size: 13px; }
        .file-input { margin: 15px 0; }
        a { color: #7c3aed; }
    </style>
</head>
<body>
    <div class="card">
        <h1>📄 PDF Parser Setup</h1>
        <p class="subtitle">Required for OCR certificate extraction</p>
        
        <?php if ($message): ?>
        <div class="status <?= $success ? 'success' : 'error' ?>">
            <?= $message ?>
        </div>
        <?php endif; ?>
        
        <?php if ($isInstalled): ?>
        <div class="status installed">
            ✅ <strong>PDF Parser is installed!</strong><br>
            OCR extraction is ready to use.
        </div>
        <p>You can now <strong>delete this setup file</strong> for security.</p>
        <p style="margin-top: 20px;"><a href="certificates.php">← Back to Certificates</a></p>
        
        <?php else: ?>
        
        <div class="status not-installed">
            ⚠️ <strong>PDF Parser not installed</strong><br>
            Certificate OCR extraction won't work until this is installed.
        </div>
        
        <!-- Option 1: Auto Download -->
        <h3>Option 1: Automatic Installation</h3>
        <form method="POST">
            <button type="submit" name="install" class="btn">
                📥 Download & Install Automatically
            </button>
        </form>
        <p style="font-size: 13px; color: #6b7280; margin-top: 10px;">
            Downloads from GitHub. May fail if your server blocks outgoing connections.
        </p>
        
        <div class="divider">
            <h3>Option 2: Manual Upload</h3>
            <p>If automatic download fails:</p>
            <ol style="font-size: 14px; color: #374151;">
                <li>Download: <a href="https://github.com/smalot/pdfparser/archive/refs/tags/v2.10.0.zip" target="_blank">pdfparser-2.10.0.zip</a></li>
                <li>Upload the ZIP file below:</li>
            </ol>
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="pdfparser_zip" accept=".zip" class="file-input" required>
                <br>
                <button type="submit" class="btn btn-secondary">
                    📤 Upload & Install
                </button>
            </form>
        </div>
        
        <?php endif; ?>
    </div>
    
    <div class="card" style="font-size: 13px; color: #6b7280;">
        <strong>Troubleshooting:</strong>
        <ul>
            <li>Make sure <code>/patron/includes/</code> is writable (chmod 755)</li>
            <li>PHP ZipArchive extension must be enabled</li>
            <li>After install, test by uploading a certificate PDF</li>
        </ul>
    </div>
</body>
</html>
