<?php
require_once 'includes/db.php';
require_once 'includes/zoho_sync.php';

$sync = new ZohoSyncService();
$reflection = new ReflectionClass($sync);

// Check if the new method exists (it's private so use reflection)
$hasMethod = false;
foreach ($reflection->getMethods() as $method) {
    if ($method->name === 'apply15MonthRuleToAllClients') {
        $hasMethod = true;
        break;
    }
}

if ($hasMethod) {
    echo "<h2 style='color:green'>✓ NEW zoho_sync.php is installed!</h2>";
    echo "<p>The 15-month rule will run automatically on contact sync.</p>";
} else {
    echo "<h2 style='color:red'>✗ OLD zoho_sync.php still installed!</h2>";
    echo "<p><strong>Please upload the new zoho_sync.php to /patron/includes/zoho_sync.php</strong></p>";
}

echo "<h3>All Methods:</h3><ul>";
foreach ($reflection->getMethods() as $method) {
    if ($method->class === 'ZohoSyncService') {
        $color = strpos($method->name, '15Month') !== false ? 'green; font-weight:bold' : 'gray';
        echo "<li style='color:$color'>{$method->name}()</li>";
    }
}
echo "</ul>";
?>
