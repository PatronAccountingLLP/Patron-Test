<?php
/**
 * Fix status ENUM - Add new workflow values
 */
require_once 'includes/db.php';
startSession();

echo "<h2>Fix Status ENUM</h2>";
echo "<pre>";

// Current ENUM: NEW, COLLECTING, REVIEW, PROCESSING, GOVT_PENDING, COMPLETED, CANCELLED
// New workflow:  NEW, WAITING_DOCS, UNDER_REVIEW, APPLIED, DONE, HOLD

// We'll keep old values for compatibility and add new ones
$newEnum = "enum('NEW','COLLECTING','REVIEW','PROCESSING','GOVT_PENDING','COMPLETED','CANCELLED','WAITING_DOCS','UNDER_REVIEW','APPLIED','DONE','HOLD')";

echo "=== Current Status Values ===\n";
$current = dbFetchAll("SELECT status, COUNT(*) as cnt FROM service_requests GROUP BY status");
print_r($current);

echo "\n=== Altering ENUM ===\n";
echo "Adding: WAITING_DOCS, UNDER_REVIEW, APPLIED, DONE, HOLD\n\n";

try {
    $db = getDB();
    $sql = "ALTER TABLE service_requests MODIFY COLUMN status $newEnum DEFAULT 'NEW'";
    echo "SQL: $sql\n\n";
    
    $result = $db->exec($sql);
    echo "Result: Success!\n";
    
    // Verify
    echo "\n=== Verify New Column Definition ===\n";
    $columns = dbFetchAll("SHOW COLUMNS FROM service_requests WHERE Field = 'status'");
    print_r($columns);
    
    // Test update
    echo "\n=== Test Update to WAITING_DOCS ===\n";
    $testId = 1;
    $before = dbFetchOne("SELECT id, status FROM service_requests WHERE id = $testId");
    echo "BEFORE: status = '" . $before['status'] . "'\n";
    
    dbExecute("UPDATE service_requests SET status = 'WAITING_DOCS' WHERE id = ?", [$testId]);
    
    $after = dbFetchOne("SELECT id, status FROM service_requests WHERE id = $testId");
    echo "AFTER: status = '" . $after['status'] . "'\n";
    
    if ($after['status'] === 'WAITING_DOCS') {
        echo "\n✅ SUCCESS! Status updates are now working!\n";
    } else {
        echo "\n❌ Still not working. Status: " . $after['status'] . "\n";
    }
    
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "\n</pre>";
echo "<p><a href='requests.php'>← Back to Work Board</a></p>";
