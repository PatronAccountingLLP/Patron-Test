<?php
/**
 * PATRON - Document File Handler
 * View or download document files with access control
 * Usage: document_file.php?id=123&action=view|download
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$docId = (int)($_GET['id'] ?? 0);
$action = $_GET['action'] ?? 'view'; // view or download

if (!$docId) {
    http_response_code(400);
    die('Invalid document ID');
}

// Get document with client info
$doc = dbFetchOne("
    SELECT cd.*, dt.name as doc_type_name, c.name as client_name
    FROM client_documents cd
    JOIN document_types dt ON cd.document_type_id = dt.id
    JOIN clients c ON cd.client_id = c.id
    WHERE cd.id = ? AND cd.deleted_at IS NULL
", [$docId]);

if (!$doc) {
    http_response_code(404);
    die('Document not found');
}

// Check access - user must have access to this client
if (!canAccessClient($doc['client_id'])) {
    http_response_code(403);
    die('Access denied');
}

// Get file path
$filePath = $doc['file_path'] ?? '';

if (empty($filePath)) {
    http_response_code(404);
    die('No file attached to this document');
}

// Resolve absolute path
$absolutePath = null;
$basePath = __DIR__;

// Try different path resolutions
$pathsToTry = [
    $basePath . '/' . $filePath,
    $basePath . '/' . ltrim($filePath, '/'),
    $filePath,
];

foreach ($pathsToTry as $tryPath) {
    if (file_exists($tryPath) && is_file($tryPath)) {
        $absolutePath = realpath($tryPath);
        break;
    }
}

if (!$absolutePath || !file_exists($absolutePath)) {
    http_response_code(404);
    die('Document file not found on server');
}

// Get file info
$fileExt = strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION));
$docTypeName = $doc['doc_type_name'] ?? 'Document';
$originalName = $doc['original_filename'] ?? $doc['file_name'] ?? ('document.' . $fileExt);
$fileName = preg_replace('/[^a-zA-Z0-9_.-]/', '_', $docTypeName) . '_' . $docId . '.' . $fileExt;
$fileSize = filesize($absolutePath);

// Determine content type
$contentTypes = [
    'pdf' => 'application/pdf',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'png' => 'image/png',
    'gif' => 'image/gif',
    'doc' => 'application/msword',
    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'xls' => 'application/vnd.ms-excel',
    'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'txt' => 'text/plain',
];
$contentType = $contentTypes[$fileExt] ?? 'application/octet-stream';

// Clear any previous output
if (ob_get_level()) {
    ob_end_clean();
}

// Send headers
header('Content-Type: ' . $contentType);
header('Content-Length: ' . $fileSize);
header('Accept-Ranges: bytes');

if ($action === 'download') {
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
} else {
    // View inline (for PDF and images)
    if (in_array($fileExt, ['pdf', 'jpg', 'jpeg', 'png', 'gif'])) {
        header('Content-Disposition: inline; filename="' . $fileName . '"');
    } else {
        // Force download for non-viewable files
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
    }
}

header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
header('Expires: 0');

// Output file
readfile($absolutePath);
exit;
