<?php
/**
 * Debug Test Page - DELETE THIS FILE AFTER TESTING
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Database Debug Test</h1>";

// Test 1: Include db.php
echo "<h2>1. Loading db.php...</h2>";
try {
    require_once 'includes/db.php';
    echo "<p style='color:green'>✓ db.php loaded successfully</p>";
} catch (Exception $e) {
    echo "<p style='color:red'>✗ Error: " . $e->getMessage() . "</p>";
    exit;
}

// Test 2: Database connection
echo "<h2>2. Testing database connection...</h2>";
try {
    $db = getDB();
    echo "<p style='color:green'>✓ Database connected</p>";
} catch (Exception $e) {
    echo "<p style='color:red'>✗ Connection Error: " . $e->getMessage() . "</p>";
    exit;
}

// Test 3: Raw PDO query
echo "<h2>3. Direct PDO query for services...</h2>";
try {
    $stmt = $db->query("SELECT COUNT(*) as cnt FROM services");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<p style='color:green'>✓ Services count: " . $result['cnt'] . "</p>";
} catch (Exception $e) {
    echo "<p style='color:red'>✗ Query Error: " . $e->getMessage() . "</p>";
}

// Test 4: Query with conditions
echo "<h2>4. Query with is_active and deleted_at...</h2>";
try {
    $stmt = $db->query("SELECT COUNT(*) as cnt FROM services WHERE is_active = 1 AND deleted_at IS NULL");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<p style='color:green'>✓ Active services count: " . $result['cnt'] . "</p>";
} catch (Exception $e) {
    echo "<p style='color:red'>✗ Query Error: " . $e->getMessage() . "</p>";
}

// Test 5: Using dbFetchAll
echo "<h2>5. Using dbFetchAll function...</h2>";
try {
    $services = dbFetchAll("SELECT id, code, name, category FROM services WHERE is_active = 1 AND deleted_at IS NULL ORDER BY category, name");
    echo "<p style='color:green'>✓ dbFetchAll returned " . count($services) . " services</p>";
    
    if (count($services) > 0) {
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>Code</th><th>Name</th><th>Category</th></tr>";
        foreach ($services as $s) {
            echo "<tr><td>{$s['id']}</td><td>{$s['code']}</td><td>{$s['name']}</td><td>{$s['category']}</td></tr>";
        }
        echo "</table>";
    }
} catch (Exception $e) {
    echo "<p style='color:red'>✗ dbFetchAll Error: " . $e->getMessage() . "</p>";
}

// Test 6: Check clients
echo "<h2>6. Checking clients...</h2>";
try {
    $clients = dbFetchAll("SELECT id, name, status FROM clients WHERE deleted_at IS NULL");
    echo "<p style='color:green'>✓ Found " . count($clients) . " clients</p>";
    foreach ($clients as $c) {
        echo "<p>ID: {$c['id']}, Name: {$c['name']}, Status: {$c['status']}</p>";
    }
} catch (Exception $e) {
    echo "<p style='color:red'>✗ Error: " . $e->getMessage() . "</p>";
}

// Test 7: Check document_types  
echo "<h2>7. Checking document types...</h2>";
try {
    $docTypes = dbFetchAll("SELECT id, code, name FROM document_types WHERE deleted_at IS NULL LIMIT 5");
    echo "<p style='color:green'>✓ Found " . count($docTypes) . " document types (showing first 5)</p>";
} catch (Exception $e) {
    echo "<p style='color:red'>✗ Error: " . $e->getMessage() . "</p>";
}

echo "<hr><p><strong>If all tests pass and services show in the table above, then the issue is in the page rendering.</strong></p>";
echo "<p><a href='add_request.php'>Go to Add Request Page</a></p>";
?>
