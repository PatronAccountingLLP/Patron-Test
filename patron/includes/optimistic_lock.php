<?php
/**
 * PATRON - Optimistic Locking Helper
 * Prevents lost updates when multiple users edit the same record
 * 
 * LOCATION: /patron/includes/optimistic_lock.php
 * 
 * USAGE:
 * 1. Include this file in db.php or include separately
 * 2. Add hidden version field to forms
 * 3. Use dbUpdateWithLock() instead of dbExecute() for updates
 */

/**
 * Execute UPDATE with optimistic locking
 * 
 * @param string $table Table name
 * @param array $data Key-value pairs to update
 * @param int $id Record ID
 * @param int $expectedVersion Version from form (what user loaded)
 * @return array ['success' => bool, 'error' => string|null, 'new_version' => int|null]
 * 
 * @example
 * $result = dbUpdateWithLock('clients', ['name' => 'New Name'], $clientId, $_POST['version']);
 * if (!$result['success']) {
 *     $errors[] = $result['error'];
 * }
 */
function dbUpdateWithLock(string $table, array $data, int $id, int $expectedVersion): array {
    $db = getDB();
    
    // Build SET clause
    $setParts = [];
    $params = [];
    
    foreach ($data as $key => $value) {
        // Skip version column if accidentally included
        if ($key === 'version') continue;
        
        $setParts[] = "`$key` = ?";
        $params[] = $value;
    }
    
    // Add version increment
    $setParts[] = "version = version + 1";
    
    // Add updated_at if table has it
    $setParts[] = "updated_at = NOW()";
    
    // Add WHERE params
    $params[] = $id;
    $params[] = $expectedVersion;
    
    $sql = "UPDATE `$table` SET " . implode(', ', $setParts) . " WHERE id = ? AND version = ?";
    
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        
        $affectedRows = $stmt->rowCount();
        
        if ($affectedRows === 0) {
            // Either record doesn't exist or version mismatch
            $current = dbFetchOne("SELECT id, version FROM `$table` WHERE id = ?", [$id]);
            
            if (!$current) {
                return [
                    'success' => false,
                    'error' => 'Record not found. It may have been deleted.',
                    'new_version' => null
                ];
            }
            
            return [
                'success' => false,
                'error' => 'This record was modified by another user. Please refresh the page and try again.',
                'new_version' => $current['version']
            ];
        }
        
        // Get new version
        $newVersion = $expectedVersion + 1;
        
        return [
            'success' => true,
            'error' => null,
            'new_version' => $newVersion
        ];
        
    } catch (PDOException $e) {
        error_log("Optimistic lock update failed: " . $e->getMessage());
        return [
            'success' => false,
            'error' => 'Database error occurred. Please try again.',
            'new_version' => null
        ];
    }
}

/**
 * Generate hidden version field for forms
 * 
 * @param int $version Current version from database
 * @return string HTML hidden input
 */
function versionField(int $version): string {
    return '<input type="hidden" name="version" value="' . (int)$version . '">';
}

/**
 * Get version from POST or default
 * 
 * @param int $default Default version if not in POST
 * @return int Version number
 */
function getPostVersion(int $default = 1): int {
    return (int)($_POST['version'] ?? $default);
}

/**
 * Check if optimistic lock error occurred
 * 
 * @param array $result Result from dbUpdateWithLock
 * @return bool True if lock conflict
 */
function isLockConflict(array $result): bool {
    return !$result['success'] && strpos($result['error'] ?? '', 'modified by another user') !== false;
}
