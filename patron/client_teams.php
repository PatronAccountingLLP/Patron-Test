<?php
/**
 * PATRON - Client Team Assignments
 * Manage which team members are assigned to which clients
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Client Assignments';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$isAdmin = isAdmin();

// Check if user can manage
$userRoles = getUserRoles($userId);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);
$canManage = $isAdmin || $isManager;

if (!$canManage) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    $clientId = (int)($_POST['client_id'] ?? 0);
    
    if ($action === 'save_team' && $clientId) {
        $executor1 = (int)($_POST['executor_1_id'] ?? 0) ?: null;
        $executor2 = (int)($_POST['executor_2_id'] ?? 0) ?: null;
        $reviewer = (int)($_POST['reviewer_id'] ?? 0) ?: null;
        $manager = (int)($_POST['manager_id'] ?? 0) ?: null;
        
        // Check if team assignment exists
        $existing = dbFetchOne("SELECT id FROM client_team WHERE client_id = ?", [$clientId]);
        
        if ($existing) {
            dbExecute("
                UPDATE client_team 
                SET executor_1_id = ?, executor_2_id = ?, reviewer_id = ?, manager_id = ?, updated_at = NOW()
                WHERE client_id = ?
            ", [$executor1, $executor2, $reviewer, $manager, $clientId]);
        } else {
            dbExecute("
                INSERT INTO client_team (client_id, executor_1_id, executor_2_id, reviewer_id, manager_id, created_at, updated_at)
                VALUES (?, ?, ?, ?, ?, NOW(), NOW())
            ", [$clientId, $executor1, $executor2, $reviewer, $manager]);
        }
        
        setFlash('success', 'Team assignment updated successfully.');
        header('Location: client_teams.php');
        exit;
    }
}

// Filters
$search = sanitize($_GET['search'] ?? '');
$unassigned = isset($_GET['unassigned']);
$teamMember = (int)($_GET['team_member'] ?? 0);

// Build WHERE clause - ONLY SHOW ACTIVE CLIENTS
$where = ["c.deleted_at IS NULL", "UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'"];
$params = [];

if ($search) {
    $where[] = "c.name LIKE ?";
    $params[] = "%$search%";
}

if ($unassigned) {
    $where[] = "(ct.id IS NULL OR (ct.executor_1_id IS NULL AND ct.executor_2_id IS NULL AND ct.reviewer_id IS NULL AND ct.manager_id IS NULL))";
}

if ($teamMember) {
    $where[] = "(ct.executor_1_id = ? OR ct.executor_2_id = ? OR ct.reviewer_id = ? OR ct.manager_id = ?)";
    $params[] = $teamMember;
    $params[] = $teamMember;
    $params[] = $teamMember;
    $params[] = $teamMember;
}

$whereClause = implode(' AND ', $where);

// Get clients with team assignments
$clients = dbFetchAll("
    SELECT c.id, c.name, c.entity_type, c.status,
           ct.executor_1_id, ct.executor_2_id, ct.reviewer_id, ct.manager_id,
           e1.display_name as executor_1_name,
           e2.display_name as executor_2_name,
           r.display_name as reviewer_name,
           m.display_name as manager_name,
           (SELECT COUNT(*) FROM service_requests WHERE client_id = c.id AND deleted_at IS NULL AND status NOT IN ('DONE', 'COMPLETED', 'CANCELLED')) as active_requests
    FROM clients c
    LEFT JOIN client_team ct ON c.id = ct.client_id
    LEFT JOIN users e1 ON ct.executor_1_id = e1.id
    LEFT JOIN users e2 ON ct.executor_2_id = e2.id
    LEFT JOIN users r ON ct.reviewer_id = r.id
    LEFT JOIN users m ON ct.manager_id = m.id
    WHERE $whereClause
    ORDER BY c.name
    LIMIT 200
", $params) ?: [];

// Get stats - ONLY ACTIVE CLIENTS
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(CASE WHEN ct.id IS NOT NULL AND (ct.executor_1_id IS NOT NULL OR ct.executor_2_id IS NOT NULL) THEN 1 ELSE 0 END) as assigned,
        SUM(CASE WHEN ct.id IS NULL OR (ct.executor_1_id IS NULL AND ct.executor_2_id IS NULL AND ct.reviewer_id IS NULL AND ct.manager_id IS NULL) THEN 1 ELSE 0 END) as unassigned
    FROM clients c
    LEFT JOIN client_team ct ON c.id = ct.client_id
    WHERE c.deleted_at IS NULL AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
") ?: [];

// Get team members for dropdowns
$teamMembers = dbFetchAll("
    SELECT u.id, u.display_name, 
           GROUP_CONCAT(r.name SEPARATOR ', ') as roles
    FROM users u
    LEFT JOIN user_roles ur ON u.id = ur.user_id
    LEFT JOIN roles r ON ur.role_id = r.id
    GROUP BY u.id
    ORDER BY u.display_name
") ?: [];

// Entity type labels
$entityLabels = [
    'PVT_LTD' => 'Pvt Ltd', 'PUBLIC_LTD' => 'Public Ltd', 'OPC' => 'OPC', 'LLP' => 'LLP',
    'PARTNERSHIP' => 'Partnership', 'PROPRIETORSHIP' => 'Proprietor', 'HUF' => 'HUF', 'TRUST' => 'Trust'
];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-user-tie text-blue-600 mr-2"></i>Client Assignments</h1>
        <p class="text-gray-500 text-sm">Assign team members to clients • <span class="text-green-600">Showing active clients only</span></p>
    </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-3 gap-4 mb-6">
    <a href="client_teams.php" class="card p-4 text-center hover:bg-gray-50 <?= !$unassigned && !$teamMember ? 'ring-2 ring-blue-400' : '' ?>">
        <p class="text-2xl font-bold text-gray-700"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Total Clients</p>
    </a>
    <div class="card p-4 text-center bg-green-50">
        <p class="text-2xl font-bold text-green-600"><?= $stats['assigned'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Assigned</p>
    </div>
    <a href="client_teams.php?unassigned=1" class="card p-4 text-center hover:bg-gray-50 <?= $unassigned ? 'ring-2 ring-amber-400' : '' ?> bg-amber-50">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['unassigned'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Unassigned</p>
    </a>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[200px]">
            <label class="block text-xs text-gray-500 mb-1">Search Client</label>
            <input type="text" name="search" class="form-input" placeholder="Client name..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Team Member</label>
            <select name="team_member" class="form-input">
                <option value="">All Members</option>
                <?php foreach ($teamMembers as $tm): ?>
                <option value="<?= $tm['id'] ?>" <?= $teamMember == $tm['id'] ? 'selected' : '' ?>><?= htmlspecialchars($tm['display_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="unassigned" id="unassigned" value="1" <?= $unassigned ? 'checked' : '' ?> class="rounded">
            <label for="unassigned" class="text-sm text-gray-600">Unassigned only</label>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-filter mr-1"></i>Filter</button>
        <?php if ($search || $unassigned || $teamMember): ?>
        <a href="client_teams.php" class="btn btn-secondary">Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Clients List -->
<div class="card overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Executor 1</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Executor 2</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Reviewer</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Manager</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <?php if (empty($clients)): ?>
            <tr>
                <td colspan="6" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-users text-4xl text-gray-300 mb-2 block"></i>
                    <p>No clients found</p>
                </td>
            </tr>
            <?php else: ?>
            <?php foreach ($clients as $client): 
                $hasTeam = $client['executor_1_id'] || $client['executor_2_id'] || $client['reviewer_id'] || $client['manager_id'];
            ?>
            <tr class="hover:bg-gray-50 <?= !$hasTeam ? 'bg-amber-50' : '' ?>">
                <td class="px-4 py-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 font-bold text-sm">
                            <?= strtoupper(substr($client['name'], 0, 2)) ?>
                        </div>
                        <div>
                            <a href="view_client.php?id=<?= $client['id'] ?>" class="font-medium text-gray-900 hover:text-blue-600">
                                <?= htmlspecialchars($client['name']) ?>
                            </a>
                            <div class="flex items-center gap-2 mt-0.5">
                                <span class="text-xs text-gray-500"><?= $entityLabels[$client['entity_type']] ?? $client['entity_type'] ?></span>
                                <?php if ($client['active_requests'] > 0): ?>
                                <span class="px-1.5 py-0.5 bg-blue-100 text-blue-700 rounded text-xs"><?= $client['active_requests'] ?> active</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-3 text-center">
                    <?php if ($client['executor_1_name']): ?>
                    <span class="text-sm text-gray-700"><?= htmlspecialchars($client['executor_1_name']) ?></span>
                    <?php else: ?>
                    <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-center">
                    <?php if ($client['executor_2_name']): ?>
                    <span class="text-sm text-gray-700"><?= htmlspecialchars($client['executor_2_name']) ?></span>
                    <?php else: ?>
                    <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-center">
                    <?php if ($client['reviewer_name']): ?>
                    <span class="text-sm text-gray-700"><?= htmlspecialchars($client['reviewer_name']) ?></span>
                    <?php else: ?>
                    <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-center">
                    <?php if ($client['manager_name']): ?>
                    <span class="text-sm text-gray-700"><?= htmlspecialchars($client['manager_name']) ?></span>
                    <?php else: ?>
                    <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-center">
                    <button type="button" 
                            onclick="openEditModal(<?= htmlspecialchars(json_encode($client)) ?>)"
                            class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" 
                            title="Edit Assignment">
                        <i class="fas fa-edit"></i>
                    </button>
                    <a href="view_client.php?id=<?= $client['id'] ?>" 
                       class="p-1.5 text-gray-500 hover:bg-gray-100 rounded" 
                       title="View Client">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<p class="text-xs text-gray-400 mt-4 text-right">
    Showing <?= count($clients) ?> client(s)
</p>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-lg mx-4">
        <h3 class="text-lg font-bold mb-1"><i class="fas fa-user-tie text-blue-500 mr-2"></i>Assign Team</h3>
        <p class="text-sm text-gray-500 mb-4" id="modalClientName">Client Name</p>
        
        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="save_team">
            <input type="hidden" name="client_id" id="modalClientId">
            
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Executor 1</label>
                        <select name="executor_1_id" id="modalExecutor1" class="form-input">
                            <option value="">Not assigned</option>
                            <?php foreach ($teamMembers as $tm): ?>
                            <option value="<?= $tm['id'] ?>"><?= htmlspecialchars($tm['display_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <p class="text-xs text-gray-400 mt-1">Primary executor</p>
                    </div>
                    <div>
                        <label class="form-label">Executor 2</label>
                        <select name="executor_2_id" id="modalExecutor2" class="form-input">
                            <option value="">Not assigned</option>
                            <?php foreach ($teamMembers as $tm): ?>
                            <option value="<?= $tm['id'] ?>"><?= htmlspecialchars($tm['display_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <p class="text-xs text-gray-400 mt-1">Secondary executor</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Reviewer</label>
                        <select name="reviewer_id" id="modalReviewer" class="form-input">
                            <option value="">Not assigned</option>
                            <?php foreach ($teamMembers as $tm): ?>
                            <option value="<?= $tm['id'] ?>"><?= htmlspecialchars($tm['display_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <p class="text-xs text-gray-400 mt-1">Reviews completed work</p>
                    </div>
                    <div>
                        <label class="form-label">Manager</label>
                        <select name="manager_id" id="modalManager" class="form-input">
                            <option value="">Not assigned</option>
                            <?php foreach ($teamMembers as $tm): ?>
                            <option value="<?= $tm['id'] ?>"><?= htmlspecialchars($tm['display_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <p class="text-xs text-gray-400 mt-1">Overall oversight</p>
                    </div>
                </div>
            </div>
            
            <div class="flex gap-2 justify-end mt-6">
                <button type="button" onclick="closeEditModal()" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Save Assignment</button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditModal(client) {
    document.getElementById('modalClientId').value = client.id;
    document.getElementById('modalClientName').textContent = client.name;
    document.getElementById('modalExecutor1').value = client.executor_1_id || '';
    document.getElementById('modalExecutor2').value = client.executor_2_id || '';
    document.getElementById('modalReviewer').value = client.reviewer_id || '';
    document.getElementById('modalManager').value = client.manager_id || '';
    
    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editModal').classList.add('flex');
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
    document.getElementById('editModal').classList.remove('flex');
}

document.getElementById('editModal').addEventListener('click', function(e) {
    if (e.target === this) closeEditModal();
});
</script>

<?php require_once 'includes/footer.php'; ?>
