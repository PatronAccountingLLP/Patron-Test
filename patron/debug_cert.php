<?php
/**
 * Debug Test - Check form submission
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Debug Test</h2>";

// Step 1: Check db.php
echo "<h3>1. Loading db.php</h3>";
try {
    require_once 'includes/db.php';
    echo "✅ db.php loaded<br>";
} catch (Throwable $e) {
    echo "❌ Error: " . $e->getMessage() . "<br>";
    exit;
}

// Step 2: Check session functions
echo "<h3>2. Session Functions</h3>";
if (function_exists('startSession')) {
    echo "✅ startSession exists<br>";
    startSession();
    echo "✅ Session started<br>";
} else {
    echo "❌ startSession not found<br>";
}

if (function_exists('requireLogin')) {
    echo "✅ requireLogin exists<br>";
} else {
    echo "❌ requireLogin not found<br>";
}

// Step 3: Check sanitize
echo "<h3>3. Sanitize Function</h3>";
if (function_exists('sanitize')) {
    echo "✅ sanitize exists<br>";
} else {
    echo "⚠️ sanitize NOT found - using trim() instead<br>";
}

// Step 4: Check database
echo "<h3>4. Database Test</h3>";
try {
    $clients = dbFetchAll("SELECT id, name FROM clients LIMIT 3");
    echo "✅ Database connected - found " . count($clients) . " clients<br>";
} catch (Throwable $e) {
    echo "❌ Database error: " . $e->getMessage() . "<br>";
}

// Step 5: Check certificate_types table
echo "<h3>5. Certificate Types Table</h3>";
try {
    $types = dbFetchAll("SELECT * FROM certificate_types LIMIT 3");
    echo "✅ certificate_types table - found " . count($types) . " types<br>";
} catch (Throwable $e) {
    echo "❌ Error: " . $e->getMessage() . "<br>";
}

// Step 6: Check client_certificates table structure
echo "<h3>6. Client Certificates Table</h3>";
try {
    $cols = dbFetchAll("SHOW COLUMNS FROM client_certificates");
    echo "✅ Table exists with " . count($cols) . " columns:<br>";
    echo "<ul>";
    foreach ($cols as $col) {
        echo "<li>" . $col['Field'] . " (" . $col['Type'] . ")</li>";
    }
    echo "</ul>";
} catch (Throwable $e) {
    echo "❌ Error: " . $e->getMessage() . "<br>";
}

// Step 7: Test INSERT
echo "<h3>7. Test INSERT Query</h3>";
echo "<p>The INSERT query uses these columns:</p>";
echo "<pre>client_id, certificate_type_id, certificate_number, issue_date, expiry_date, file_path, status, created_by, created_at</pre>";

echo "<h3>8. Session User</h3>";
echo "user_id in session: " . ($_SESSION['user_id'] ?? 'NOT SET') . "<br>";

echo "<hr><p><strong>If all above show ✅, the issue is elsewhere.</strong></p>";
echo "<p><a href='add_certificate.php'>← Back to Add Certificate</a></p>";
?>
