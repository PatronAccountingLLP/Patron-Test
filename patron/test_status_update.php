<?php
/**
 * Test script for status update debugging
 */
require_once 'includes/db.php';
startSession();

echo "<h2>Status Update Test</h2>";

// Test 1: Check current statuses
echo "<h3>1. Current Status Distribution</h3>";
$statuses = dbFetchAll("SELECT status, COUNT(*) as cnt FROM service_requests WHERE deleted_at IS NULL GROUP BY status ORDER BY cnt DESC");
echo "<pre>";
print_r($statuses);
echo "</pre>";

// Test 2: Try a manual status update
if (isset($_GET['test_update'])) {
    $testId = (int)$_GET['test_id'];
    $testStatus = $_GET['test_status'];
    
    echo "<h3>2. Testing Update</h3>";
    echo "Updating request ID: $testId to status: $testStatus<br>";
    
    try {
        $result = dbExecute("UPDATE service_requests SET status = ? WHERE id = ?", [$testStatus, $testId]);
        echo "Result: Success<br>";
        
        // Verify
        $check = dbFetchOne("SELECT id, request_number, status FROM service_requests WHERE id = ?", [$testId]);
        echo "After update: ";
        print_r($check);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Test 3: Show sample request IDs for testing
echo "<h3>3. Sample Requests for Testing</h3>";
$samples = dbFetchAll("SELECT id, request_number, status FROM service_requests WHERE deleted_at IS NULL LIMIT 5");
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Request #</th><th>Current Status</th><th>Test Links</th></tr>";
foreach ($samples as $s) {
    echo "<tr>";
    echo "<td>{$s['id']}</td>";
    echo "<td>{$s['request_number']}</td>";
    echo "<td>{$s['status']}</td>";
    echo "<td>";
    echo "<a href='?test_update=1&test_id={$s['id']}&test_status=WAITING_DOCS'>→WAITING_DOCS</a> | ";
    echo "<a href='?test_update=1&test_id={$s['id']}&test_status=HOLD'>→HOLD</a> | ";
    echo "<a href='?test_update=1&test_id={$s['id']}&test_status=NEW'>→NEW</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>4. POST Test</h3>";
echo "<form method='POST' action='test_status_update.php'>";
echo "Request ID: <input type='text' name='request_id' value='1'><br>";
echo "New Status: <select name='new_status'>";
echo "<option value='NEW'>NEW</option>";
echo "<option value='WAITING_DOCS'>WAITING_DOCS</option>";
echo "<option value='UNDER_REVIEW'>UNDER_REVIEW</option>";
echo "<option value='APPLIED'>APPLIED</option>";
echo "<option value='DONE'>DONE</option>";
echo "<option value='HOLD'>HOLD</option>";
echo "</select><br>";
echo "<input type='hidden' name='update_status' value='1'>";
echo "<button type='submit'>Test POST Update</button>";
echo "</form>";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    echo "<h4>POST Result:</h4>";
    $reqId = (int)$_POST['request_id'];
    $newStatus = $_POST['new_status'];
    
    echo "Request ID: $reqId, New Status: $newStatus<br>";
    
    try {
        dbExecute("UPDATE service_requests SET status = ? WHERE id = ?", [$newStatus, $reqId]);
        echo "Update successful!<br>";
        
        $check = dbFetchOne("SELECT id, request_number, status FROM service_requests WHERE id = ?", [$reqId]);
        echo "Verified: ";
        print_r($check);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
