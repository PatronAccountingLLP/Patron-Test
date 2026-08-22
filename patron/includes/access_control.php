<?php
/**
 * PATRON - Role-Based Access Control Helper
 * Add this to includes/db.php or create as separate file and include it
 */

/**
 * Check if current user can see all clients
 * All internal users can see all clients (typical for CA firms)
 * Service requests are still filtered by assignment
 */
function canSeeAllClients() {
    if (!isset($_SESSION['user_id'])) return false;
    
    // All logged-in internal users can see all clients
    try {
        $user = dbFetchOne("SELECT user_type FROM users WHERE id = ?", [$_SESSION['user_id']]);
        return $user && $user['user_type'] === 'INTERNAL';
    } catch (Exception $e) {
        return false;
    }
}

/**
 * Check if current user is admin or manager (for full system access)
 */
function canSeeAllData() {
    if (!isset($_SESSION['user_id'])) return false;
    
    // Check if user has any admin-level role
    try {
        $roles = dbFetchAll("
            SELECT r.code 
            FROM user_roles ur 
            JOIN roles r ON ur.role_id = r.id 
            WHERE ur.user_id = ? AND ur.revoked_at IS NULL
        ", [$_SESSION['user_id']]);
        
        $adminRoles = ['ADMIN', 'SUPERVISOR', 'MANAGER', 'PARTNER'];
        foreach ($roles as $role) {
            if (in_array($role['code'], $adminRoles)) {
                return true;
            }
        }
        return false;
    } catch (Exception $e) {
        return false;
    }
}

/**
 * Get client IDs that the current user has access to
 * (clients where user has assigned service requests)
 */
function getUserClientIds() {
    if (!isset($_SESSION['user_id'])) return [];
    
    // If admin, return empty (meaning no filter needed)
    if (canSeeAllData()) return [];
    
    try {
        $clients = dbFetchAll("
            SELECT DISTINCT client_id 
            FROM service_requests 
            WHERE (assigned_to = ? OR created_by = ?)
            AND deleted_at IS NULL
        ", [$_SESSION['user_id'], $_SESSION['user_id']]);
        
        return array_column($clients, 'client_id');
    } catch (Exception $e) {
        return [];
    }
}

/**
 * Get WHERE clause for client filtering
 * All internal users can see all clients
 */
function getClientAccessFilter($tableAlias = 'c') {
    // All internal users see all clients
    if (canSeeAllClients()) {
        return ''; // No filter
    }
    
    // External/client users - should not see client list
    return " AND {$tableAlias}.id = 0 ";
}

/**
 * Get WHERE clause for service request filtering
 * SECURITY: Returns parameterized placeholder - caller must add $userId to params
 */
function getRequestAccessFilter($tableAlias = 'sr', &$params = null, $userId = null) {
    if (canSeeAllData()) {
        return '';
    }
    
    $uid = $userId ?? ($_SESSION['user_id'] ?? 0);
    
    // If params array provided, use parameterized query
    if (is_array($params)) {
        $params[] = $uid;
        $params[] = $uid;
        return " AND ({$tableAlias}.assigned_to = ? OR {$tableAlias}.created_by = ?) ";
    }
    
    // Fallback: Cast to int for safety (legacy support)
    $uid = (int)$uid;
    return " AND ({$tableAlias}.assigned_to = {$uid} OR {$tableAlias}.created_by = {$uid}) ";
}

/**
 * Get WHERE clause for task filtering
 * SECURITY: Returns parameterized placeholder - caller must add $userId to params
 */
function getTaskAccessFilter($tableAlias = 't', &$params = null, $userId = null) {
    if (canSeeAllData()) {
        return '';
    }
    
    $uid = $userId ?? ($_SESSION['user_id'] ?? 0);
    
    // If params array provided, use parameterized query
    if (is_array($params)) {
        $params[] = $uid;
        $params[] = $uid;
        return " AND ({$tableAlias}.assigned_to = ? OR {$tableAlias}.created_by = ?) ";
    }
    
    // Fallback: Cast to int for safety (legacy support)
    $uid = (int)$uid;
    return " AND ({$tableAlias}.assigned_to = {$uid} OR {$tableAlias}.created_by = {$uid}) ";
}

/**
 * Check if user can access specific client
 * All internal users can access all clients (typical for CA firms)
 */
function canAccessClient($clientId) {
    // All internal users can see all clients
    if (canSeeAllClients()) return true;
    
    // Fallback for admin check
    if (canSeeAllData()) return true;
    
    // For non-internal users, check if they have assigned work
    $clientIds = getUserClientIds();
    return in_array($clientId, $clientIds);
}

/**
 * Check if user can access specific service request
 */
function canAccessRequest($requestId) {
    if (canSeeAllData()) return true;
    
    try {
        $request = dbFetchOne("
            SELECT id FROM service_requests 
            WHERE id = ? AND (assigned_to = ? OR created_by = ?)
        ", [$requestId, $_SESSION['user_id'], $_SESSION['user_id']]);
        
        return !empty($request);
    } catch (Exception $e) {
        return false;
    }
}

/**
 * Get supervisor's team member IDs (for supervisor view)
 */
function getTeamMemberIds() {
    if (!isset($_SESSION['user_id'])) return [];
    
    try {
        // Get users where current user is supervisor
        $members = dbFetchAll("
            SELECT id FROM users 
            WHERE supervisor_id = ? AND deleted_at IS NULL
        ", [$_SESSION['user_id']]);
        
        $ids = array_column($members, 'id');
        $ids[] = $_SESSION['user_id']; // Include self
        
        return $ids;
    } catch (Exception $e) {
        return [$_SESSION['user_id']];
    }
}

/**
 * Check if current user is a supervisor (has team members)
 */
function isSupervisor() {
    if (!isset($_SESSION['user_id'])) return false;
    
    try {
        $count = dbFetchOne("
            SELECT COUNT(*) as cnt FROM users 
            WHERE supervisor_id = ? AND deleted_at IS NULL
        ", [$_SESSION['user_id']]);
        
        return ($count['cnt'] ?? 0) > 0;
    } catch (Exception $e) {
        return false;
    }
}

/**
 * Get access level description for UI
 */
function getAccessLevelLabel() {
    if (isAdmin()) return 'Administrator';
    if (isSupervisor()) return 'Supervisor';
    if (canSeeAllData()) return 'Manager';
    return 'Team Member';
}
