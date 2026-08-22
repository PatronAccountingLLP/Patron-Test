<?php
/**
 * DEBUG - Test Clients Query
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

echo "<h2>Debug Client Query</h2>";

// Check session
echo "<p><strong>User ID:</strong> " . ($_SESSION['user_id'] ?? 'NOT SET') . "</p>";

// Check user type
$user = dbFetchOne("SELECT * FROM users WHERE id = ?", [$_SESSION['user_id']]);
echo "<p><strong>User Type:</strong> " . ($user['user_type'] ?? 'NOT FOUND') . "</p>";
echo "<p><strong>Display Name:</strong> " . ($user['display_name'] ?? 'NOT FOUND') . "</p>";

// Check access functions
echo "<p><strong>canSeeAllClients():</strong> " . (canSeeAllClients() ? 'TRUE' : 'FALSE') . "</p>";
echo "<p><strong>canSeeAllData():</strong> " . (canSeeAllData() ? 'TRUE' : 'FALSE') . "</p>";

// Get access filter
$accessFilter = getClientAccessFilter('c');
echo "<p><strong>Access Filter:</strong> " . ($accessFilter ?: '(empty - no filter)') . "</p>";

// Simple query first
echo "<h3>Simple Query Test:</h3>";
try {
    $simpleClients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE deleted_at IS NULL LIMIT 5");
    echo "<p>Found " . count($simpleClients) . " clients</p>";
    echo "<pre>";
    print_r($simpleClients);
    echo "</pre>";
} catch (Exception $e) {
    echo "<p style='color:red'>ERROR: " . $e->getMessage() . "</p>";
}

// Check if persons VIEW exists
echo "<h3>Check persons table/view:</h3>";
try {
    $check = dbFetchAll("SHOW TABLES LIKE 'persons'");
    echo "<p>persons table exists: " . (count($check) > 0 ? 'YES' : 'NO') . "</p>";
    
    if (count($check) > 0) {
        $viewCheck = dbFetchAll("SHOW CREATE VIEW persons");
        echo "<pre>";
        print_r($viewCheck);
        echo "</pre>";
    }
} catch (Exception $e) {
    echo "<p>persons is not a view or error: " . $e->getMessage() . "</p>";
}

// Check client_persons table
echo "<h3>Check client_persons table:</h3>";
try {
    $cpCheck = dbFetchAll("SELECT COUNT(*) as cnt FROM client_persons");
    echo "<p>client_persons count: " . $cpCheck[0]['cnt'] . "</p>";
} catch (Exception $e) {
    echo "<p style='color:red'>ERROR: " . $e->getMessage() . "</p>";
}

// Full query test
echo "<h3>Full Query Test:</h3>";
$whereClause = "c.deleted_at IS NULL" . $accessFilter;
$query = "
    SELECT c.*,
           (SELECT COUNT(*) FROM service_requests WHERE client_id = c.id AND deleted_at IS NULL) as total_requests,
           (SELECT COUNT(*) FROM service_requests WHERE client_id = c.id AND status NOT IN ('COMPLETED', 'CANCELLED', 'REJECTED') AND deleted_at IS NULL) as active_requests,
           (SELECT COUNT(*) FROM client_persons WHERE client_id = c.id AND is_active = 1) as persons_count,
           (SELECT COUNT(*) FROM client_certificates WHERE client_id = c.id AND deleted_at IS NULL) as certificates_count
    FROM clients c
    WHERE $whereClause
    ORDER BY c.created_at DESC
    LIMIT 5
";

echo "<p><strong>Query:</strong></p><pre>" . htmlspecialchars($query) . "</pre>";

try {
    $clients = dbFetchAll($query);
    echo "<p style='color:green'>Query SUCCESS - Found " . count($clients) . " clients</p>";
    
    if (count($clients) > 0) {
        echo "<p><strong>First client data:</strong></p>";
        echo "<pre>";
        print_r($clients[0]);
        echo "</pre>";
        
        echo "<p><strong>Test Link:</strong> <a href='view_client.php?id=" . $clients[0]['id'] . "'>View Client ID " . $clients[0]['id'] . "</a></p>";
    }
} catch (Exception $e) {
    echo "<p style='color:red'>Query FAILED: " . $e->getMessage() . "</p>";
}

echo "<hr><p><a href='clients.php'>Back to Clients</a></p>";
?>
