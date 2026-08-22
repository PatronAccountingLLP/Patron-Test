<?php
/**
 * PATRON - Common Directors / Partners Report
 * Shows persons who are linked to multiple clients,
 * useful for conflict-of-interest checks and compliance
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$pageTitle = 'Common Directors Report';

// Filters
$minClients = max(2, (int)($_GET['min'] ?? 2));
$roleFilter = sanitize($_GET['role'] ?? '');
$entityFilter = sanitize($_GET['entity'] ?? '');

// Build query for persons linked to multiple clients
$where = ["p.deleted_at IS NULL", "p.status = 'ACTIVE'"];
$having = ["client_count >= ?"];
$params = [];
$havingParams = [$minClients];

if ($roleFilter) {
    $where[] = "EXISTS (SELECT 1 FROM client_persons cp2 WHERE cp2.person_id = p.id AND cp2.role_type = ? AND cp2.is_active = 1)";
    $params[] = $roleFilter;
}

$whereClause = implode(' AND ', $where);
$havingClause = implode(' AND ', $having);

$commonPersons = dbFetchAll("
    SELECT p.id, p.full_name, p.pan_number, p.din, p.dpin, p.mobile, p.email, p.status,
           p.dsc_status, p.dsc_expiry_date, p.din_kyc_status,
           COUNT(DISTINCT cp.client_id) as client_count,
           GROUP_CONCAT(DISTINCT cp.role_type SEPARATOR ', ') as all_roles
    FROM persons_new p
    JOIN client_persons cp ON cp.person_id = p.id AND cp.is_active = 1
    JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
    " . ($entityFilter ? "AND c.entity_type = '" . addslashes($entityFilter) . "'" : "") . "
    WHERE $whereClause
    GROUP BY p.id
    HAVING $havingClause
    ORDER BY client_count DESC, p.full_name ASC
", array_merge($params, $havingParams)) ?: [];

// For each person, get their client details
$personClients = [];
if (!empty($commonPersons)) {
    $personIds = array_column($commonPersons, 'id');
    $placeholders = implode(',', array_fill(0, count($personIds), '?'));
    $links = dbFetchAll("
        SELECT cp.person_id, cp.role_type, cp.appointment_date, cp.director_category,
               c.id as client_id, c.name as client_name, c.entity_type
        FROM client_persons cp
        JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
        WHERE cp.person_id IN ($placeholders) AND cp.is_active = 1
        ORDER BY c.name
    ", $personIds) ?: [];
    
    foreach ($links as $l) {
        $personClients[$l['person_id']][] = $l;
    }
}

// Stats
$totalCommon = count($commonPersons);
$maxOverlap = $totalCommon > 0 ? max(array_column($commonPersons, 'client_count')) : 0;

// Entity types for filter
$entityTypes = dbFetchAll("SELECT DISTINCT entity_type FROM clients WHERE deleted_at IS NULL ORDER BY entity_type") ?: [];

// Role options
$allRoles = [
    'DIRECTOR' => 'Director', 'SHAREHOLDER' => 'Shareholder', 'PARTNER' => 'Partner',
    'DESIGNATED_PARTNER' => 'Designated Partner', 'PROPRIETOR' => 'Proprietor',
    'MEMBER' => 'Member', 'TRUSTEE' => 'Trustee', 'KARTA' => 'Karta',
    'COPARCENER' => 'Coparcener', 'NOMINEE' => 'Nominee', 'PROMOTER' => 'Promoter',
    'AUTHORIZED_SIGNATORY' => 'Authorized Signatory',
    'MANAGING_TRUSTEE' => 'Managing Trustee', 'SETTLER' => 'Settler',
    'PRESIDENT' => 'President', 'SECRETARY' => 'Secretary', 'TREASURER' => 'Treasurer',
];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="persons.php" class="hover:text-blue-600">Persons</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Common Directors Report</span>
        </div>
        <h2 class="text-2xl font-bold text-gray-900">Common Directors / Partners</h2>
        <p class="text-sm text-gray-500 mt-1">Persons linked to multiple client entities</p>
    </div>
    <a href="person_export.php?report=common&min=<?= $minClients ?>" class="btn bg-green-50 text-green-700 hover:bg-green-100 text-sm">
        <i class="fas fa-file-excel mr-1"></i>Export
    </a>
</div>

<!-- Summary Stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <div class="card p-4 bg-gradient-to-br from-indigo-50 to-indigo-100 border-l-4 border-indigo-500">
        <p class="text-3xl font-bold text-indigo-700"><?= $totalCommon ?></p>
        <p class="text-sm text-indigo-600">Persons in <?= $minClients ?>+ clients</p>
    </div>
    <div class="card p-4 bg-gradient-to-br from-amber-50 to-amber-100 border-l-4 border-amber-500">
        <p class="text-3xl font-bold text-amber-700"><?= $maxOverlap ?></p>
        <p class="text-sm text-amber-600">Max client overlap</p>
    </div>
    <div class="card p-4 bg-gradient-to-br from-purple-50 to-purple-100 border-l-4 border-purple-500">
        <p class="text-3xl font-bold text-purple-700"><?= array_sum(array_column($commonPersons, 'client_count')) ?></p>
        <p class="text-sm text-purple-600">Total cross-links</p>
    </div>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-3 items-end">
        <div>
            <label class="block text-xs text-gray-500 mb-1">Min Clients</label>
            <select name="min" class="form-input">
                <?php for ($i = 2; $i <= 10; $i++): ?>
                <option value="<?= $i ?>" <?= $minClients == $i ? 'selected' : '' ?>><?= $i ?>+ clients</option>
                <?php endfor; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Role</label>
            <select name="role" class="form-input">
                <option value="">All Roles</option>
                <?php foreach ($allRoles as $code => $label): ?>
                <option value="<?= $code ?>" <?= $roleFilter === $code ? 'selected' : '' ?>><?= $label ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Entity Type</label>
            <select name="entity" class="form-input">
                <option value="">All Types</option>
                <?php foreach ($entityTypes as $et): ?>
                <option value="<?= $et['entity_type'] ?>" <?= $entityFilter === $et['entity_type'] ? 'selected' : '' ?>><?= str_replace('_',' ',$et['entity_type']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary text-sm"><i class="fas fa-search mr-1"></i>Apply</button>
        <?php if ($roleFilter || $entityFilter || $minClients > 2): ?>
        <a href="common_directors_report.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300 text-sm"><i class="fas fa-times mr-1"></i>Reset</a>
        <?php endif; ?>
    </form>
</div>

<!-- Results -->
<?php if (empty($commonPersons)): ?>
<div class="card p-8 text-center">
    <i class="fas fa-check-circle text-4xl text-green-300 mb-3"></i>
    <p class="text-gray-500">No persons found linked to <?= $minClients ?>+ clients with current filters.</p>
</div>
<?php else: ?>

<div class="space-y-4">
    <?php foreach ($commonPersons as $p): 
        $clients = $personClients[$p['id']] ?? [];
    ?>
    <div class="card overflow-hidden">
        <!-- Person Header -->
        <div class="p-4 bg-gray-50 border-b flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-sm">
                    <?= getPersonInitials($p['full_name']) ?>
                </div>
                <div>
                    <a href="person_view.php?id=<?= $p['id'] ?>" class="font-semibold text-gray-900 hover:text-blue-600 text-lg"><?= htmlspecialchars($p['full_name']) ?></a>
                    <div class="flex items-center gap-3 text-sm text-gray-500 mt-0.5">
                        <?php if ($p['pan_number']): ?><span class="font-mono"><?= $p['pan_number'] ?></span><?php endif; ?>
                        <?php if ($p['din']): ?><span>DIN: <span class="font-mono text-blue-600"><?= $p['din'] ?></span></span><?php endif; ?>
                        <?php if ($p['dpin']): ?><span>DPIN: <span class="font-mono text-purple-600"><?= $p['dpin'] ?></span></span><?php endif; ?>
                        <?php if ($p['mobile']): ?><span><i class="fas fa-phone mr-1"></i><?= $p['mobile'] ?></span><?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full font-bold"><?= $p['client_count'] ?> clients</span>
                <?= getDSCBadgeHTML($p) ?>
                <?= getKYCBadgeHTML($p) ?>
            </div>
        </div>

        <!-- Client Links Table -->
        <div class="p-4">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-xs text-gray-500 border-b">
                        <th class="text-left py-2 px-3">Client</th>
                        <th class="text-left py-2 px-3">Entity Type</th>
                        <th class="text-left py-2 px-3">Role</th>
                        <th class="text-left py-2 px-3">Category</th>
                        <th class="text-left py-2 px-3">Appointment</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($clients as $cl): ?>
                    <tr class="border-b border-dashed hover:bg-gray-50">
                        <td class="py-2 px-3">
                            <a href="view_client.php?id=<?= $cl['client_id'] ?>" class="text-blue-600 hover:underline font-medium"><?= htmlspecialchars($cl['client_name']) ?></a>
                        </td>
                        <td class="py-2 px-3 text-gray-500"><?= str_replace('_',' ',$cl['entity_type']) ?></td>
                        <td class="py-2 px-3"><?= getRoleBadgeHTML($cl['role_type']) ?></td>
                        <td class="py-2 px-3 text-gray-500"><?= $cl['director_category'] ? str_replace('_',' ',$cl['director_category']) : '—' ?></td>
                        <td class="py-2 px-3 text-gray-500"><?= $cl['appointment_date'] ? date('d M Y', strtotime($cl['appointment_date'])) : '—' ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
