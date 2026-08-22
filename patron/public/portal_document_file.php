<?php
/**
 * PATRON - Portal Document File Handler
 * View or download document files from client portal (token-based auth)
 * Location: /public_html/patron/public/portal_document_file.php
 * Usage: portal_document_file.php?token=xxx&id=123&action=view|download
 */

require_once '../includes/db.php';

$token = sanitize($_GET['token'] ?? '');
$docId = (int)($_GET['id'] ?? 0);
$action = $_GET['action'] ?? 'view'; // view or download

// Validate token
if (!$token) {
    http_response_code(403);
    die('Invalid access');
}

// Get client from token
$client = dbFetchOne("SELECT id, name FROM clients WHERE portal_token = ?", [$token]);
if (!$client) {
    // Also check service request tokens
    $request = dbFetchOne("SELECT client_id FROM service_requests WHERE form_token = ? AND deleted_at IS NULL", [$token]);
    if ($request) {
        $client = dbFetchOne("SELECT id, name FROM clients WHERE id = ?", [$request['client_id']]);
    }
}

if (!$client) {
    http_response_code(403);
    die('Invalid or expired link');
}

$clientId = $client['id'];

// Validate document ID
if (!$docId) {
    http_response_code(400);
    die('Invalid document');
}

// Get document - must belong to this client
$doc = dbFetchOne("
    SELECT cd.*, dt.name as doc_type_name
    FROM client_documents cd
    LEFT JOIN document_types dt ON cd.document_type_id = dt.id
    WHERE cd.id = ? AND cd.client_id = ? AND cd.deleted_at IS NULL
", [$docId, $clientId]);

if (!$doc) {
    http_response_code(404);
    die('Document not found');
}

// Get file path from database
$dbFilePath = $doc['file_path'] ?? '';

if (empty($dbFilePath)) {
    http_response_code(404);
    die('No file attached to this document');
}

// Try to find the actual file - handle various path formats
$absolutePath = null;
$patronDir = dirname(__DIR__); // /public_html/patron
$publicDir = __DIR__; // /public_html/patron/public

// Build list of possible paths to try
$pathsToTry = [];

// If path starts with ../ - it's relative from patron folder
if (strpos($dbFilePath, '../') === 0) {
    $pathsToTry[] = $patronDir . '/' . $dbFilePath;
    $pathsToTry[] = $patronDir . '/' . substr($dbFilePath, 3); // Remove ../
}

// If path starts with uploads/ - it's relative to patron folder
if (strpos($dbFilePath, 'uploads/') === 0) {
    $pathsToTry[] = $patronDir . '/' . $dbFilePath;
}

// If path starts with /uploads/ or is absolute
if (strpos($dbFilePath, '/') === 0) {
    $pathsToTry[] = $dbFilePath;
    $pathsToTry[] = $_SERVER['DOCUMENT_ROOT'] . $dbFilePath;
}

// Also try from public folder
$pathsToTry[] = $publicDir . '/' . $dbFilePath;
$pathsToTry[] = $publicDir . '/../' . $dbFilePath;

// Try each path
foreach ($pathsToTry as $tryPath) {
    $realPath = realpath($tryPath);
    if ($realPath && file_exists($realPath) && is_file($realPath)) {
        $absolutePath = $realPath;
        break;
    }
}

if (!$absolutePath) {
    http_response_code(404);
    die('Document file not found on server. Path: ' . htmlspecialchars($dbFilePath));
}

// Get file info
$fileExt = strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION));
$docName = $doc['doc_type_name'] ?? 'Document';
$fileName = preg_replace('/[^a-zA-Z0-9_.-]/', '_', $docName . '_' . $docId) . '.' . $fileExt;
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
