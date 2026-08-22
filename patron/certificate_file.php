<?php
/**
 * PATRON - Certificate File Handler
 * View or download individual certificate files
 * Usage: certificate_file.php?id=123&action=view|download
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$certId = (int)($_GET['id'] ?? 0);
$action = $_GET['action'] ?? 'view'; // view or download

if (!$certId) {
    setFlash('error', 'Invalid certificate.');
    header('Location: clients.php');
    exit;
}

// Get certificate info
$cert = dbFetchOne("
    SELECT cc.*, ct.name as cert_type_name, c.name as client_name, c.id as client_id
    FROM client_certificates cc
    JOIN certificate_types ct ON cc.certificate_type_id = ct.id
    JOIN clients c ON cc.client_id = c.id
    WHERE cc.id = ? AND cc.deleted_at IS NULL
", [$certId]);

if (!$cert) {
    setFlash('error', 'Certificate not found.');
    header('Location: clients.php');
    exit;
}

// Check access
if (!canAccessClient($cert['client_id'])) {
    setFlash('error', 'You do not have access to this certificate.');
    header('Location: clients.php');
    exit;
}

// Get file path from database
$dbFilePath = $cert['file_path'] ?? '';

if (empty($dbFilePath)) {
    setFlash('error', 'No file attached to this certificate.');
    header('Location: view_client.php?id=' . $cert['client_id'] . '&tab=certificates');
    exit;
}

// Try to find the actual file - handle various path formats
$absolutePath = null;
$basePath = __DIR__;

// Build list of possible paths to try
$pathsToTry = [
    $basePath . '/' . $dbFilePath,
    $basePath . '/' . ltrim($dbFilePath, './'),
    $basePath . '/' . str_replace('../', '', $dbFilePath),
    $dbFilePath,
];

// If path starts with ../ (uploaded from portal), resolve from /public folder
if (strpos($dbFilePath, '../') === 0) {
    $pathsToTry[] = $basePath . '/public/' . $dbFilePath;
    $pathsToTry[] = dirname($basePath) . '/' . substr($dbFilePath, 3);
}

foreach ($pathsToTry as $tryPath) {
    if (file_exists($tryPath) && is_file($tryPath)) {
        $absolutePath = realpath($tryPath);
        break;
    }
}

if (!$absolutePath || !file_exists($absolutePath)) {
    setFlash('error', 'Certificate file not found on server.');
    header('Location: view_client.php?id=' . $cert['client_id'] . '&tab=certificates');
    exit;
}

// Get file info
$fileExt = strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION));
$fileName = $cert['cert_type_name'] . '_' . ($cert['certificate_number'] ?? $certId) . '.' . $fileExt;
$fileName = preg_replace('/[^a-zA-Z0-9_.-]/', '_', $fileName);
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

// Log the access
try {
    dbExecute("
        INSERT INTO activity_logs (user_id, action, entity_type, entity_id, details, created_at)
        VALUES (?, ?, 'CERTIFICATE', ?, ?, NOW())
    ", [
        $_SESSION['user_id'] ?? null,
        $action === 'download' ? 'DOWNLOAD' : 'VIEW',
        $certId,
        json_encode(['client' => $cert['client_name'], 'cert_type' => $cert['cert_type_name']])
    ]);
} catch (Exception $e) {
    // Activity log table might not exist, ignore
}

// Clear any output buffers
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
