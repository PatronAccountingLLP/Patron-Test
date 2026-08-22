<?php
/**
 * AJAX: Update Service Request Status
 * Used by Kanban drag & drop
 */

require_once '../includes/db.php';
startSession();

header('Content-Type: application/json');

// Check login
if (!isLoggedIn()) {
    echo json_encode(['success' => false, 'error' => 'Not authenticated']);
    exit;
}

$requestId = (int)($_POST['request_id'] ?? 0);
$newStatus = sanitize($_POST['status'] ?? '');

if (!$requestId || !$newStatus) {
    echo json_encode(['success' => false, 'error' => 'Missing parameters']);
    exit;
}

// Valid statuses
$validStatuses = ['NEW', 'ASSIGNED', 'DOCUMENTS_PENDING', 'INFO_PENDING', 'IN_PROGRESS', 'PROCESSING', 'UNDER_REVIEW', 'QUERY_RAISED', 'COMPLETED', 'CANCELLED'];
if (!in_array($newStatus, $validStatuses)) {
    echo json_encode(['success' => false, 'error' => 'Invalid status']);
    exit;
}

try {
    // Get current status
    $current = dbFetchOne("SELECT status FROM service_requests WHERE id = ? AND deleted_at IS NULL", [$requestId]);
    if (!$current) {
        echo json_encode(['success' => false, 'error' => 'Request not found']);
        exit;
    }
    
    $oldStatus = $current['status'];
    
    // Update status
    dbExecute("UPDATE service_requests SET status = ?, updated_at = NOW() WHERE id = ?", [$newStatus, $requestId]);
    
    // Log activity if function exists
    try {
        if (function_exists('logActivity')) {
            logActivity('service_request', $requestId, 'status_changed', "Status changed from $oldStatus to $newStatus (Kanban)");
        }
    } catch (Exception $e) {}
    
    echo json_encode(['success' => true, 'old_status' => $oldStatus, 'new_status' => $newStatus]);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => 'Database error']);
}
