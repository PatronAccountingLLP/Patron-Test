<?php
/**
 * AJAX endpoint for searching clients
 * Used by Select2 in billing_request.php
 * 
 * Parameters:
 *   - q: search term
 *   - for_billing: if 1, only returns clients user has access to and includes zoho_contact_id
 *   - limit: max results (default 20)
 */

require_once '../includes/db.php';
require_once '../includes/access_control.php';
requireLogin();

header('Content-Type: application/json');

$userId = $_SESSION['user_id'];
$userRole = $_SESSION['role'];
$isAdmin = ($userRole === 'Admin');

$search = $_GET['q'] ?? '';
$forBilling = isset($_GET['for_billing']) && $_GET['for_billing'] == '1';
$limit = min(50, max(10, intval($_GET['limit'] ?? 20)));

// Build query
$sql = "SELECT DISTINCT c.id, c.name, c.pan_number, c.zoho_contact_id,
               ct.manager_id";

if ($forBilling) {
    // Join to get manager info for billing validation
    $sql .= ", m.name as manager_name";
}

$sql .= " FROM clients c";

// For billing, check user has access via client_team (unless Admin)
if ($forBilling && !$isAdmin) {
    $sql .= " JOIN client_team ct ON c.id = ct.client_id AND ct.user_id = ?";
} else {
    $sql .= " LEFT JOIN client_team ct ON c.id = ct.client_id AND ct.role = 'manager'";
}

if ($forBilling) {
    $sql .= " LEFT JOIN users m ON ct.manager_id = m.id";
}

$sql .= " WHERE c.is_active = 1";

// Search filter
if (!empty($search)) {
    $sql .= " AND (c.name LIKE ? OR c.pan_number LIKE ?)";
}

$sql .= " ORDER BY c.name ASC LIMIT ?";

// Prepare parameters
$params = [];
$types = "";

if ($forBilling && !$isAdmin) {
    $params[] = $userId;
    $types .= "i";
}

if (!empty($search)) {
    $searchTerm = "%{$search}%";
    $params[] = $searchTerm;
    $params[] = $searchTerm;
    $types .= "ss";
}

$params[] = $limit;
$types .= "i";

// Execute
$stmt = $conn->prepare($sql);
if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();

$clients = [];
while ($row = $result->fetch_assoc()) {
    $item = [
        'id' => $row['id'],
        'text' => $row['name'],
        'name' => $row['name'],
        'pan_number' => $row['pan_number'] ?? '',
        'zoho_contact_id' => $row['zoho_contact_id'] ?? null,
        'manager_id' => $row['manager_id'] ?? null
    ];
    
    if ($forBilling) {
        $item['manager_name'] = $row['manager_name'] ?? null;
        $item['can_bill'] = !empty($row['zoho_contact_id']) && !empty($row['manager_id']);
        
        // Add warning messages for UI
        $warnings = [];
        if (empty($row['zoho_contact_id'])) {
            $warnings[] = 'Not synced to Zoho Books';
        }
        if (empty($row['manager_id'])) {
            $warnings[] = 'No manager assigned';
        }
        $item['warnings'] = $warnings;
    }
    
    $clients[] = $item;
}

// Return in Select2 format
echo json_encode([
    'results' => $clients,
    'pagination' => [
        'more' => count($clients) >= $limit
    ]
]);
