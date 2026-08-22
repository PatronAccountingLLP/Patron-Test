<?php
/**
 * PATRON - File Viewer
 * Forces PDF and images to display inline instead of downloading
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$file = $_GET['file'] ?? '';

if (empty($file)) {
    die('No file specified');
}

// Security: Ensure file is within allowed directories
$allowedDirs = ['uploads/', 'includes/uploads/'];
$isAllowed = false;
foreach ($allowedDirs as $dir) {
    if (strpos($file, $dir) === 0) {
        $isAllowed = true;
        break;
    }
}

if (!$isAllowed) {
    die('Access denied');
}

// Check file exists
if (!file_exists($file)) {
    die('File not found');
}

// Get mime type
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$mimeTypes = [
    'pdf' => 'application/pdf',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'png' => 'image/png',
    'gif' => 'image/gif',
    'doc' => 'application/msword',
    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
];

$mimeType = $mimeTypes[$ext] ?? 'application/octet-stream';

// Output headers to force inline display
header('Content-Type: ' . $mimeType);
header('Content-Disposition: inline; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

// Output file
readfile($file);
exit;
