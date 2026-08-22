<?php
/**
 * Generate Portal Tokens for all clients
 * Run this once to regenerate portal access links
 */

require_once 'includes/db.php';
startSession();
requireLogin();

echo "<h2>Generate Portal Tokens</h2>";

// Get all clients without portal tokens
$clients = dbFetchAll("SELECT id, name, portal_token FROM clients WHERE deleted_at IS NULL");

$updated = 0;
$already = 0;

foreach ($clients as $client) {
    if (empty($client['portal_token'])) {
        // Generate a secure random token
        $token = bin2hex(random_bytes(32)); // 64 character hex string
        
        dbExecute("UPDATE clients SET portal_token = ?, portal_token_created = NOW() WHERE id = ?", [
            $token, 
            $client['id']
        ]);
        
        echo "<p>✅ Generated token for: <strong>" . htmlspecialchars($client['name']) . "</strong></p>";
        $updated++;
    } else {
        $already++;
    }
}

echo "<hr>";
echo "<p><strong>Summary:</strong></p>";
echo "<p>✅ Tokens generated: $updated</p>";
echo "<p>ℹ️ Already had tokens: $already</p>";
echo "<p>📊 Total clients: " . count($clients) . "</p>";

echo "<hr>";
echo "<h3>Portal Links</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr style='background:#f0f0f0;'><th>Client</th><th>Portal Link</th></tr>";

$clients = dbFetchAll("SELECT id, name, portal_token FROM clients WHERE deleted_at IS NULL AND portal_token IS NOT NULL");
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}/patron";

foreach ($clients as $client) {
    $link = $baseUrl . "/client_portal.php?token=" . $client['portal_token'];
    echo "<tr>";
    echo "<td>" . htmlspecialchars($client['name']) . "</td>";
    echo "<td><a href='$link' target='_blank'>$link</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<br><p><a href='clients.php'>← Back to Clients</a></p>";
