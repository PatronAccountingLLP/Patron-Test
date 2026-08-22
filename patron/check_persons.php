<?php
require_once 'includes/db.php';
echo "<h3>persons_new table structure:</h3>";
$cols = dbFetchAll("SHOW COLUMNS FROM persons_new");
echo "<pre>";
foreach ($cols as $col) {
    echo $col['Field'] . " - " . $col['Type'] . "\n";
}
echo "</pre>";
?>
