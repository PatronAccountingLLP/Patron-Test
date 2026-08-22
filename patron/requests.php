<?php
/**
 * PATRON - Work Board (v25 - Multiple Assignees + URL Filter Fix)
 * UPDATED: 
 * - Support for multiple assignees display
 * - Fixed: Clicking stat cards now shows only that status column
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

$pageTitle = 'Work Board';
$userId = $_SESSION['user_id'] ?? 0;
$currentUser = isLoggedIn() ? getCurrentUser() : null;
$isAdmin = function_exists('canSeeAllData') ? canSeeAllData() : isAdmin();

// Build request access filter - users can see requests they're assigned to OR reviewing
if ($isAdmin) {
    $requestFilter = ''; // Admins see all
} else {
    // Non-admins see: assigned to them (via junction table) OR they are the reviewer OR they created it
    // Also check legacy assigned_to column for backward compatibility
    $requestFilter = " AND (
        sr.assigned_to = $userId 
        OR sr.reviewer_id = $userId 
        OR sr.created_by = $userId
        OR sr.id IN (SELECT service_request_id FROM service_request_assignees WHERE user_id = $userId)
    )";
}

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    if ($action === 'update_status') {
        $requestId = (int)($_POST['request_id'] ?? 0);
        $newStatus = trim($_POST['new_status'] ?? '');
        $reviewerId = (int)($_POST['reviewer_id'] ?? 0);
        
        $validStatuses = ['NEW', 'WAITING_DOCS', 'UNDER_REVIEW', 'APPLIED', 'DONE', 'HOLD'];
        
        if ($requestId && in_array($newStatus, $validStatuses)) {
            try {
                if ($newStatus === 'DONE') {
                    dbExecute("UPDATE service_requests SET status = ?, completed_at = NOW() WHERE id = ?", [$newStatus, $requestId]);
                } elseif ($newStatus === 'UNDER_REVIEW' && $reviewerId) {
                    dbExecute("UPDATE service_requests SET status = ?, reviewer_id = ? WHERE id = ?", [$newStatus, $reviewerId, $requestId]);
                } else {
                    dbExecute("UPDATE service_requests SET status = ? WHERE id = ?", [$newStatus, $requestId]);
                }
                setFlash('success', 'Status updated to ' . str_replace('_', ' ', $newStatus));
            } catch (Exception $e) {
                setFlash('error', 'Error: ' . $e->getMessage());
            }
        }
    }
    
    if ($action === 'add_remark') {
        $requestId = (int)($_POST['request_id'] ?? 0);
        $remark = trim($_POST['remark'] ?? '');
        
        if ($requestId && $remark) {
            // Get existing notes
            $existing = dbFetchOne("SELECT id, notes FROM service_requests WHERE id = ?", [$requestId]);
            
            if (!$existing) {
                setFlash('error', 'Request not found (ID: ' . $requestId . ')');
            } else {
                $existingNotes = trim($existing['notes'] ?? '');
                
                // Format new remark with timestamp and user
                $timestamp = date('d M Y H:i');
                $userName = $currentUser['display_name'] ?? $currentUser['name'] ?? 'User';
                $newRemark = "[$timestamp - $userName]\n$remark";
                
                // Append to existing notes
                $updatedNotes = $existingNotes ? $existingNotes . "\n\n" . $newRemark : $newRemark;
                
                // Update the database
                $result = dbExecute("UPDATE service_requests SET notes = ? WHERE id = ?", [$updatedNotes, $requestId]);
                
                if ($result !== false) {
                    setFlash('success', 'Remark added successfully.');
                } else {
                    setFlash('error', 'Database update failed.');
                }
            }
        } else {
            setFlash('error', 'Please enter a remark. (ID: ' . $requestId . ', Remark: ' . ($remark ? 'yes' : 'no') . ')');
        }
    }
    
    // Preserve filter params on redirect
    $redirectParams = [];
    if (isset($_GET['status'])) $redirectParams[] = 'status=' . urlencode($_GET['status']);
    if (isset($_GET['show_done'])) $redirectParams[] = 'show_done=1';
    $redirectUrl = 'requests.php' . (!empty($redirectParams) ? '?' . implode('&', $redirectParams) : '');
    header('Location: ' . $redirectUrl);
    exit;
}

// Filters
$filterClient = (int)($_GET['client'] ?? 0);
$filterAssigned = (int)($_GET['assigned'] ?? 0);
$filterUnassigned = isset($_GET['unassigned']);
$filterStatus = sanitize($_GET['status'] ?? '');
$filterOverdue = isset($_GET['overdue']);
$search = sanitize($_GET['q'] ?? '');
$showDone = isset($_GET['show_done']) || $filterStatus === 'DONE';

$baseWhere = "sr.deleted_at IS NULL" . $requestFilter;
if ($filterClient) $baseWhere .= " AND sr.client_id = " . (int)$filterClient;
if ($filterAssigned) {
    // Check both legacy column and junction table
    $baseWhere .= " AND (sr.assigned_to = " . (int)$filterAssigned . " OR sr.id IN (SELECT service_request_id FROM service_request_assignees WHERE user_id = " . (int)$filterAssigned . "))";
}
if ($filterUnassigned) {
    // Unassigned = no entry in junction table AND no legacy assigned_to
    $baseWhere .= " AND (sr.assigned_to IS NULL OR sr.assigned_to = 0) AND sr.id NOT IN (SELECT service_request_id FROM service_request_assignees)";
}
if ($filterOverdue) $baseWhere .= " AND COALESCE(sr.due_date, sr.expected_completion) < CURDATE() AND sr.status NOT IN ('DONE','COMPLETED','CANCELLED','HOLD')";
if ($search) {
    $searchEsc = addslashes($search);
    $baseWhere .= " AND (sr.request_number LIKE '%$searchEsc%' OR c.name LIKE '%$searchEsc%' OR s.name LIKE '%$searchEsc%')";
}

// UPDATED: Function to get multiple assignees for a request
function getRequestAssignees($requestId) {
    $assignees = dbFetchAll("
        SELECT u.id, u.display_name, sra.is_primary
        FROM service_request_assignees sra
        JOIN users u ON sra.user_id = u.id
        WHERE sra.service_request_id = ?
        ORDER BY sra.is_primary DESC, u.display_name
    ", [$requestId]) ?: [];
    return $assignees;
}

function getRequests($statusCondition, $baseWhere) {
    return dbFetchAll("
        SELECT sr.id, sr.request_number, sr.status, sr.priority, sr.assigned_to, sr.reviewer_id, 
            sr.created_at, sr.notes,
            COALESCE(sr.due_date, sr.expected_completion, sr.expected_completion_date) as deadline,
            s.name as service_name, c.name as client_name, 
            u.display_name as assigned_to_name,
            rv.display_name as reviewer_name,
            (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id) as total_docs,
            (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id AND status = 'PENDING') as pending_docs,
            (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id AND status IN ('RECEIVED', 'APPROVED', 'UPLOADED', 'VERIFIED')) as received_docs,
            (SELECT COUNT(*) FROM request_info_values WHERE service_request_id = sr.id) as total_info,
            (SELECT COUNT(*) FROM request_info_values WHERE service_request_id = sr.id AND (field_value IS NULL OR field_value = '')) as pending_info,
            (SELECT COUNT(*) FROM request_info_values WHERE service_request_id = sr.id AND field_value IS NOT NULL AND field_value != '') as filled_info,
            (SELECT COUNT(*) FROM service_request_assignees WHERE service_request_id = sr.id) as assignee_count,
            DATEDIFF(CURDATE(), DATE(sr.created_at)) as days_old
        FROM service_requests sr
        JOIN services s ON sr.service_id = s.id
        JOIN clients c ON sr.client_id = c.id
        LEFT JOIN users u ON sr.assigned_to = u.id
        LEFT JOIN users rv ON sr.reviewer_id = rv.id
        WHERE $baseWhere AND ($statusCondition)
        ORDER BY sr.priority = 'URGENT' DESC, sr.created_at DESC LIMIT 100
    ") ?: [];
}

// DEFINE renderCard FUNCTION HERE - BEFORE IT'S USED
// UPDATED: Now supports multiple assignees display
function renderCard($request, $currentStatus) {
    // Validate input
    if (!is_array($request) || empty($request['id'])) {
        return '';
    }
    
    $r = $request;
    $priority = $r['priority'] ?? 'NORMAL';
    $isUrgent = $priority === 'URGENT';
    $isHigh = $priority === 'HIGH';
    
    $totalDocs = (int)($r['total_docs'] ?? 0);
    $pendingDocs = (int)($r['pending_docs'] ?? 0);
    $totalInfo = (int)($r['total_info'] ?? 0);
    $pendingInfo = (int)($r['pending_info'] ?? 0);
    
    $daysOld = (int)($r['days_old'] ?? 0);
    $deadline = $r['deadline'] ?? null;
    $isOverdue = $deadline && $deadline < date('Y-m-d') && !in_array($currentStatus, ['DONE', 'HOLD']);
    $id = (int)$r['id'];
    $reviewerName = $r['reviewer_name'] ?? null;
    
    // UPDATED: Get multiple assignees
    $assigneeCount = (int)($r['assignee_count'] ?? 0);
    $assignees = [];
    if ($assigneeCount > 0) {
        $assignees = getRequestAssignees($id);
    }
    // Fallback to legacy single assignee if no junction table entries
    $isUnassigned = empty($assignees) && empty($r['assigned_to']);
    
    $cardClass = 'work-card';
    if ($isUrgent) $cardClass .= ' urgent';
    elseif ($isHigh) $cardClass .= ' high';
    elseif ($isOverdue) $cardClass .= ' overdue';
    
    ob_start();
    ?>
    <div class="<?= $cardClass ?>">
        <a href="view_request.php?id=<?= $id ?>" class="block">
            <div class="flex justify-between items-start mb-1">
                <div class="flex-1 min-w-0 pr-2">
                    <p class="font-semibold text-sm truncate text-gray-900"><?= htmlspecialchars($r['client_name'] ?? '') ?></p>
                    <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($r['service_name'] ?? '') ?></p>
                </div>
                <div class="flex gap-1">
                    <?php if ($isUrgent): ?><span class="badge priority-urgent">URGENT</span>
                    <?php elseif ($isHigh): ?><span class="badge priority-high">HIGH</span><?php endif; ?>
                </div>
            </div>
            
            <?php if ($totalDocs > 0 || $totalInfo > 0): ?>
            <div class="info-row">
                <?php if ($totalDocs > 0): ?>
                    <span class="info-chip <?= $pendingDocs > 0 ? 'warning' : 'success' ?>">
                        <i class="fas fa-file-alt"></i>
                        <?= $pendingDocs > 0 ? "<strong>$pendingDocs</strong> docs pending" : "$totalDocs docs ✓" ?>
                    </span>
                <?php endif; ?>
                <?php if ($totalInfo > 0): ?>
                    <span class="info-chip <?= $pendingInfo > 0 ? 'warning' : 'success' ?>">
                        <i class="fas fa-info-circle"></i>
                        <?= $pendingInfo > 0 ? "<strong>$pendingInfo</strong> info pending" : "$totalInfo info ✓" ?>
                    </span>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <div class="flex flex-wrap gap-1 mb-2 mt-2">
                <span class="badge bg-gray-100 text-gray-600">
                    <i class="fas fa-clock"></i> <?= date('d M', strtotime($r['created_at'])) ?>
                    <?php if ($daysOld > 0): ?>(<?= $daysOld ?>d)<?php endif; ?>
                </span>
                <?php if ($deadline): ?>
                    <span class="badge <?= $isOverdue ? 'bg-red-100 text-red-700' : 'bg-blue-100 text-blue-700' ?>">
                        <i class="fas fa-flag"></i> <?= date('d M', strtotime($deadline)) ?>
                        <?php if ($isOverdue): ?><strong>OVERDUE</strong><?php endif; ?>
                    </span>
                <?php endif; ?>
            </div>
            
            <!-- UPDATED: Multiple assignees display -->
            <div class="flex justify-between items-center text-xs border-t border-gray-100 pt-2 mt-2">
                <div>
                    <?php if ($isUnassigned): ?>
                        <span class="text-red-600 font-medium"><i class="fas fa-user-slash mr-1"></i>Unassigned</span>
                    <?php elseif (!empty($assignees)): ?>
                        <!-- Multiple assignees -->
                        <div class="flex flex-wrap gap-1">
                            <?php foreach ($assignees as $idx => $assignee): ?>
                                <?php if ($idx < 3): // Show max 3 names ?>
                                <span class="<?= $assignee['is_primary'] ? 'text-blue-600 font-medium' : 'text-gray-600' ?>">
                                    <i class="fas fa-user<?= $assignee['is_primary'] ? '-check' : '' ?> mr-1"></i><?= htmlspecialchars($assignee['display_name']) ?><?= $idx < min(count($assignees), 3) - 1 ? ',' : '' ?>
                                </span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (count($assignees) > 3): ?>
                                <span class="text-gray-400">+<?= count($assignees) - 3 ?> more</span>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <!-- Legacy single assignee -->
                        <span class="text-gray-600"><i class="fas fa-user mr-1"></i><?= htmlspecialchars($r['assigned_to_name'] ?? '') ?></span>
                    <?php endif; ?>
                    <?php if ($currentStatus === 'UNDER_REVIEW' && $reviewerName): ?>
                        <br><span class="text-purple-600"><i class="fas fa-user-check mr-1"></i><?= htmlspecialchars($reviewerName) ?></span>
                    <?php endif; ?>
                </div>
                <span class="text-gray-400 font-mono text-[10px]"><?= htmlspecialchars($r['request_number'] ?? '') ?></span>
            </div>
            
            <?php 
            $notes = trim($r['notes'] ?? '');
            if ($notes): 
                $shortNote = strlen($notes) > 80 ? substr($notes, 0, 80) . '...' : $notes;
                // Get last line only for display
                $noteLines = explode("\n", $notes);
                $lastNote = end($noteLines);
                $lastNote = strlen($lastNote) > 60 ? substr($lastNote, 0, 60) . '...' : $lastNote;
            ?>
            <div class="mt-2 pt-2 border-t border-dashed border-gray-200">
                <p class="text-xs text-gray-500 italic truncate" title="<?= htmlspecialchars($notes) ?>">
                    <i class="fas fa-sticky-note mr-1 text-amber-400"></i><?= htmlspecialchars($lastNote) ?>
                </p>
            </div>
            <?php endif; ?>
        </a>
        
        <!-- Remark Button - Outside the link -->
        <div class="flex items-center justify-between px-1 py-1 bg-gray-50 rounded -mt-1 mb-1">
            <button type="button" onclick="openRemarkModal(<?= $id ?>, '<?= htmlspecialchars(addslashes($r['client_name'] ?? '')) ?>')" 
                    class="flex items-center gap-1 px-2 py-1 text-xs text-gray-500 hover:text-blue-600 hover:bg-blue-100 rounded transition-colors">
                <i class="fas fa-comment-alt"></i> Add Remark
            </button>
            <?php if ($notes): ?>
            <span class="text-[10px] text-gray-400"><?= count($noteLines) ?> note(s)</span>
            <?php endif; ?>
        </div>
        
        <div class="card-actions">
            <?php if ($currentStatus === 'NEW'): ?>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="WAITING_DOCS">
                    <button type="submit" class="status-btn waiting" style="width:100%;">→ Waiting</button>
                </form>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="HOLD">
                    <button type="submit" class="status-btn hold" style="width:100%;">Hold</button>
                </form>
            <?php elseif ($currentStatus === 'WAITING_DOCS'): ?>
                <button type="button" class="status-btn review" style="flex:1;" onclick="openReviewerModal(<?= $id ?>)">→ Review</button>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="APPLIED">
                    <button type="submit" class="status-btn applied" style="width:100%;">→ Applied</button>
                </form>
            <?php elseif ($currentStatus === 'UNDER_REVIEW'): ?>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="APPLIED">
                    <button type="submit" class="status-btn applied" style="width:100%;">→ Applied</button>
                </form>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="WAITING_DOCS">
                    <button type="submit" class="status-btn back" style="width:100%;">← Back</button>
                </form>
            <?php elseif ($currentStatus === 'APPLIED'): ?>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="DONE">
                    <button type="submit" class="status-btn done" style="width:100%;">✓ Done</button>
                </form>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="HOLD">
                    <button type="submit" class="status-btn hold" style="width:100%;">Hold</button>
                </form>
            <?php elseif ($currentStatus === 'DONE'): ?>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="NEW">
                    <button type="submit" class="status-btn back" style="width:100%;">↺ Reopen</button>
                </form>
            <?php elseif ($currentStatus === 'HOLD'): ?>
                <form method="POST" style="flex:1; margin:0;">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="request_id" value="<?= $id ?>">
                    <input type="hidden" name="new_status" value="NEW">
                    <button type="submit" class="status-btn back" style="width:100%;">↺ Resume</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Status mapping for queries
$statusMap = [
    'NEW' => "sr.status IN ('NEW', 'COLLECTING', 'ASSIGNED') OR sr.status IS NULL OR sr.status = ''",
    'WAITING_DOCS' => "sr.status = 'WAITING_DOCS'",
    'UNDER_REVIEW' => "sr.status IN ('UNDER_REVIEW', 'REVIEW')",
    'APPLIED' => "sr.status IN ('APPLIED', 'PROCESSING', 'GOVT_PENDING')",
    'DONE' => "sr.status IN ('DONE', 'COMPLETED')",
    'HOLD' => "sr.status IN ('HOLD', 'CANCELLED')"
];

// Fetch requests for each column - respect status filter if set
if ($filterStatus && isset($statusMap[$filterStatus])) {
    // FIXED: When filtering by status, only fetch and show that status
    $newRequests = $filterStatus === 'NEW' ? getRequests($statusMap['NEW'], $baseWhere) : [];
    $waitingDocs = $filterStatus === 'WAITING_DOCS' ? getRequests($statusMap['WAITING_DOCS'], $baseWhere) : [];
    $underReview = $filterStatus === 'UNDER_REVIEW' ? getRequests($statusMap['UNDER_REVIEW'], $baseWhere) : [];
    $applied = $filterStatus === 'APPLIED' ? getRequests($statusMap['APPLIED'], $baseWhere) : [];
    $done = $filterStatus === 'DONE' ? getRequests($statusMap['DONE'], $baseWhere) : [];
    $onHold = $filterStatus === 'HOLD' ? getRequests($statusMap['HOLD'], $baseWhere) : [];
} else {
    // Normal view - show all columns
    $newRequests = getRequests($statusMap['NEW'], $baseWhere);
    $waitingDocs = getRequests($statusMap['WAITING_DOCS'], $baseWhere);
    $underReview = getRequests($statusMap['UNDER_REVIEW'], $baseWhere);
    $applied = getRequests($statusMap['APPLIED'], $baseWhere);
    $done = $showDone ? getRequests($statusMap['DONE'], $baseWhere) : [];
    $onHold = getRequests($statusMap['HOLD'], $baseWhere);
}

// Stats
$stats = dbFetchOne("
    SELECT 
        SUM(sr.status IN ('NEW', 'COLLECTING', 'ASSIGNED') OR sr.status IS NULL OR sr.status = '') as new_count,
        SUM(sr.status = 'WAITING_DOCS') as waiting_count,
        SUM(sr.status IN ('UNDER_REVIEW','REVIEW')) as review_count,
        SUM(sr.status IN ('APPLIED','PROCESSING','GOVT_PENDING')) as applied_count,
        SUM(sr.status IN ('DONE','COMPLETED')) as done_count,
        SUM(sr.status IN ('HOLD','CANCELLED')) as hold_count,
        SUM((sr.assigned_to IS NULL OR sr.assigned_to = 0) AND sr.id NOT IN (SELECT service_request_id FROM service_request_assignees)) as unassigned_count,
        SUM(COALESCE(sr.due_date, sr.expected_completion) < CURDATE() AND sr.status NOT IN ('DONE','COMPLETED','CANCELLED','HOLD')) as overdue_count
    FROM service_requests sr 
    JOIN clients c ON sr.client_id = c.id 
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL $requestFilter
") ?: [];

$clients = dbFetchAll("SELECT DISTINCT c.id, c.name FROM clients c JOIN service_requests sr ON c.id = sr.client_id WHERE sr.deleted_at IS NULL ORDER BY c.name") ?: [];
$allTeamMembers = dbFetchAll("SELECT id, display_name FROM users ORDER BY display_name") ?: [];
$teamMembers = $isAdmin ? (dbFetchAll("SELECT DISTINCT u.id, u.display_name FROM users u JOIN service_requests sr ON u.id = sr.assigned_to WHERE sr.deleted_at IS NULL ORDER BY u.display_name") ?: []) : [];

require_once 'includes/header.php';
?>

<style>
.board-wrapper { overflow-x: auto; padding-bottom: 20px; }
.board-container { display: flex; gap: 16px; min-width: max-content; }
.board-column { width: 320px; flex-shrink: 0; }
/* ADDED: Full-width column when filtering by status */
.board-column.full-width { width: 100%; max-width: 800px; }
.column-header { padding: 12px 16px; border-radius: 8px 8px 0 0; font-weight: 600; display: flex; align-items: center; justify-content: space-between; }
.column-body { background: #f8fafc; border: 2px solid #e2e8f0; border-top: none; border-radius: 0 0 8px 8px; padding: 12px; min-height: 450px; max-height: calc(100vh - 380px); overflow-y: auto; }
/* ADDED: Grid layout for filtered view */
.column-body.grid-view { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 12px; }
.work-card { background: white; border-radius: 8px; padding: 12px; margin-bottom: 10px; border-left: 4px solid #cbd5e1; box-shadow: 0 1px 3px rgba(0,0,0,0.08); transition: box-shadow 0.2s; }
.column-body.grid-view .work-card { margin-bottom: 0; }
.work-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.12); }
.work-card.urgent { border-left-color: #ef4444; background: linear-gradient(to right, #fef2f2, white); }
.work-card.high { border-left-color: #f97316; }
.work-card.overdue { border-left-color: #dc2626; }
.badge { display: inline-flex; align-items: center; gap: 3px; padding: 2px 6px; border-radius: 4px; font-size: 10px; font-weight: 500; }
.card-actions { display: flex; gap: 6px; margin-top: 10px; padding-top: 10px; border-top: 1px solid #e5e7eb; }
.status-btn { flex: 1; padding: 7px 8px; font-size: 11px; font-weight: 600; border-radius: 6px; border: none; cursor: pointer; transition: opacity 0.2s; }
.status-btn:hover { opacity: 0.85; }
.status-btn.waiting { background: #fef3c7; color: #92400e; }
.status-btn.review { background: #ede9fe; color: #6b21a8; }
.status-btn.applied { background: #dbeafe; color: #1e40af; }
.status-btn.done { background: #d1fae5; color: #065f46; }
.status-btn.hold { background: #fee2e2; color: #991b1b; }
.status-btn.back { background: #f3f4f6; color: #374151; }
.empty-state { text-align: center; padding: 40px 20px; color: #9ca3af; }
.info-row { display: flex; gap: 6px; flex-wrap: wrap; margin: 8px 0; }
.info-chip { display: inline-flex; align-items: center; gap: 4px; padding: 4px 8px; border-radius: 6px; font-size: 11px; font-weight: 500; }
.info-chip.warning { background: #fef3c7; color: #92400e; }
.info-chip.success { background: #d1fae5; color: #065f46; }
.priority-urgent { background: #ef4444; color: white; }
.priority-high { background: #f97316; color: white; }
.modal-overlay { display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center; }
.modal-overlay.active { display: flex; }
.modal-box { background: white; border-radius: 12px; padding: 24px; width: 90%; max-width: 400px; }
.modal-title { font-size: 18px; font-weight: 600; margin-bottom: 16px; }
.modal-buttons { display: flex; gap: 10px; margin-top: 20px; }
.modal-buttons button { flex: 1; padding: 10px; border-radius: 6px; font-weight: 500; cursor: pointer; }
.modal-cancel { background: #f3f4f6; border: none; color: #374151; }
.modal-confirm { background: #7c3aed; border: none; color: white; }
/* ADDED: Filter indicator styles */
.filter-indicator { display: inline-flex; align-items: center; gap: 6px; padding: 6px 12px; border-radius: 6px; font-size: 13px; font-weight: 500; }
</style>

<div class="flex items-center justify-between mb-4">
    <div>
        <h1 class="text-2xl font-bold">Work Board</h1>
        <p class="text-gray-500 text-sm">
            <?= $isAdmin ? 'All requests' : 'Your assigned work' ?>
            <?php if ($filterStatus): ?>
                <span class="ml-2 filter-indicator bg-blue-100 text-blue-700">
                    <i class="fas fa-filter"></i> Showing: <?= str_replace('_', ' ', $filterStatus) ?>
                    <a href="requests.php<?= $showDone && $filterStatus !== 'DONE' ? '?show_done=1' : '' ?>" class="ml-2 text-blue-600 hover:text-blue-800">
                        <i class="fas fa-times"></i>
                    </a>
                </span>
            <?php endif; ?>
        </p>
    </div>
    <a href="add_request.php" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>New Request</a>
</div>

<!-- Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-3 mb-4">
    <a href="?status=NEW" class="card p-3 text-center bg-gray-50 hover:bg-gray-100 transition-colors cursor-pointer <?= $filterStatus === 'NEW' ? 'ring-2 ring-gray-400' : '' ?>"><p class="text-xl font-bold text-gray-700"><?= $stats['new_count'] ?? 0 ?></p><p class="text-xs text-gray-500">New</p></a>
    <a href="?status=WAITING_DOCS" class="card p-3 text-center bg-amber-50 hover:bg-amber-100 transition-colors cursor-pointer <?= $filterStatus === 'WAITING_DOCS' ? 'ring-2 ring-amber-400' : '' ?>"><p class="text-xl font-bold text-amber-700"><?= $stats['waiting_count'] ?? 0 ?></p><p class="text-xs text-gray-500">Waiting</p></a>
    <a href="?status=UNDER_REVIEW" class="card p-3 text-center bg-purple-50 hover:bg-purple-100 transition-colors cursor-pointer <?= $filterStatus === 'UNDER_REVIEW' ? 'ring-2 ring-purple-400' : '' ?>"><p class="text-xl font-bold text-purple-700"><?= $stats['review_count'] ?? 0 ?></p><p class="text-xs text-gray-500">Review</p></a>
    <a href="?status=APPLIED" class="card p-3 text-center bg-blue-50 hover:bg-blue-100 transition-colors cursor-pointer <?= $filterStatus === 'APPLIED' ? 'ring-2 ring-blue-400' : '' ?>"><p class="text-xl font-bold text-blue-700"><?= $stats['applied_count'] ?? 0 ?></p><p class="text-xs text-gray-500">Applied</p></a>
    <a href="?status=DONE&show_done=1" class="card p-3 text-center bg-green-50 hover:bg-green-100 transition-colors cursor-pointer <?= $filterStatus === 'DONE' ? 'ring-2 ring-green-400' : '' ?>"><p class="text-xl font-bold text-green-700"><?= $stats['done_count'] ?? 0 ?></p><p class="text-xs text-gray-500">Done</p></a>
    <a href="?status=HOLD" class="card p-3 text-center hover:bg-red-100 transition-colors cursor-pointer <?= ($stats['hold_count'] ?? 0) > 0 ? 'bg-red-50' : '' ?> <?= $filterStatus === 'HOLD' ? 'ring-2 ring-red-400' : '' ?>"><p class="text-xl font-bold text-red-600"><?= $stats['hold_count'] ?? 0 ?></p><p class="text-xs text-gray-500">On Hold</p></a>
    <a href="?unassigned=1" class="card p-3 text-center bg-orange-50 hover:bg-orange-100 transition-colors cursor-pointer <?= isset($_GET['unassigned']) ? 'ring-2 ring-orange-400' : '' ?>"><p class="text-xl font-bold text-orange-600"><?= $stats['unassigned_count'] ?? 0 ?></p><p class="text-xs text-gray-500">Unassigned</p></a>
    <a href="?overdue=1" class="card p-3 text-center hover:bg-red-100 transition-colors cursor-pointer <?= ($stats['overdue_count'] ?? 0) > 0 ? 'bg-red-50' : '' ?> <?= isset($_GET['overdue']) ? 'ring-2 ring-red-400' : '' ?>"><p class="text-xl font-bold text-red-600"><?= $stats['overdue_count'] ?? 0 ?></p><p class="text-xs text-gray-500">Overdue</p></a>
</div>

<!-- Filters -->
<div class="card p-3 mb-4">
    <form method="GET" class="flex flex-wrap gap-3 items-center">
        <input type="text" name="q" class="form-input text-sm w-48" placeholder="🔍 Search..." value="<?= htmlspecialchars($search) ?>">
        <select name="client" class="form-input text-sm w-40"><option value="">All Clients</option><?php foreach ($clients as $c): ?><option value="<?= $c['id'] ?>" <?= $filterClient == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option><?php endforeach; ?></select>
        <?php if ($isAdmin && $teamMembers): ?><select name="assigned" class="form-input text-sm w-40"><option value="">All Team</option><?php foreach ($teamMembers as $t): ?><option value="<?= $t['id'] ?>" <?= $filterAssigned == $t['id'] ? 'selected' : '' ?>><?= htmlspecialchars($t['display_name']) ?></option><?php endforeach; ?></select><?php endif; ?>
        <label class="flex items-center gap-2 text-sm cursor-pointer"><input type="checkbox" name="show_done" <?= $showDone ? 'checked' : '' ?> onchange="this.form.submit()"> Show Done</label>
        <label class="flex items-center gap-2 text-sm cursor-pointer"><input type="checkbox" name="unassigned" <?= $filterUnassigned ? 'checked' : '' ?> onchange="this.form.submit()"> Unassigned</label>
        <button type="submit" class="btn btn-primary text-sm px-4"><i class="fas fa-search"></i></button>
        <?php if ($search || $filterClient || $filterAssigned || $filterUnassigned || $filterStatus || $filterOverdue): ?><a href="requests.php<?= $showDone ? '?show_done=1' : '' ?>" class="text-sm text-red-500 hover:underline">Clear</a><?php endif; ?>
    </form>
</div>

<!-- Kanban Board -->
<div class="board-wrapper">
    <div class="board-container">
        
        <?php 
        // FIXED: Only show relevant columns based on filter
        $showAllColumns = empty($filterStatus);
        $columnConfig = [
            'NEW' => ['label' => 'New', 'icon' => 'fa-inbox', 'headerBg' => 'bg-gray-200', 'headerText' => 'text-gray-800', 'data' => $newRequests],
            'WAITING_DOCS' => ['label' => 'Waiting Docs/Info', 'icon' => 'fa-folder-open', 'headerBg' => 'bg-amber-200', 'headerText' => 'text-amber-900', 'data' => $waitingDocs],
            'UNDER_REVIEW' => ['label' => 'Under Review', 'icon' => 'fa-eye', 'headerBg' => 'bg-purple-200', 'headerText' => 'text-purple-900', 'data' => $underReview],
            'APPLIED' => ['label' => 'Applied For', 'icon' => 'fa-paper-plane', 'headerBg' => 'bg-blue-200', 'headerText' => 'text-blue-900', 'data' => $applied],
            'DONE' => ['label' => 'Done', 'icon' => 'fa-check-circle', 'headerBg' => 'bg-green-200', 'headerText' => 'text-green-900', 'data' => $done],
            'HOLD' => ['label' => 'On Hold', 'icon' => 'fa-pause-circle', 'headerBg' => 'bg-red-200', 'headerText' => 'text-red-900', 'data' => $onHold]
        ];
        
        foreach ($columnConfig as $status => $config):
            // Skip columns that shouldn't be shown
            if (!$showAllColumns && $filterStatus !== $status) continue;
            if ($showAllColumns && $status === 'DONE' && !$showDone) continue;
            if ($showAllColumns && $status === 'HOLD' && empty($config['data'])) continue;
            
            $isFiltered = !$showAllColumns;
        ?>
        <div class="board-column <?= $isFiltered ? 'full-width' : '' ?>">
            <div class="column-header <?= $config['headerBg'] ?> <?= $config['headerText'] ?>">
                <span><i class="fas <?= $config['icon'] ?> mr-2"></i><?= $config['label'] ?></span>
                <span class="bg-white px-2 py-1 rounded-full text-xs font-bold"><?= count($config['data']) ?></span>
            </div>
            <div class="column-body <?= $isFiltered ? 'grid-view' : '' ?>">
                <?php if (empty($config['data'])): ?>
                    <div class="empty-state"><i class="fas <?= $config['icon'] ?> fa-2x mb-2 opacity-50"></i><br>No <?= strtolower($config['label']) ?> requests</div>
                <?php else: ?>
                    <?php foreach ($config['data'] as $req): ?>
                        <?= renderCard($req, $status) ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
        
    </div>
</div>

<!-- Reviewer Selection Modal -->
<div id="reviewerModal" class="modal-overlay">
    <div class="modal-box">
        <div class="modal-title"><i class="fas fa-user-check mr-2 text-purple-600"></i>Select Reviewer</div>
        <form method="POST" action="requests.php<?= $filterStatus ? '?status=' . urlencode($filterStatus) : '' ?>">
            <input type="hidden" name="action" value="update_status">
            <input type="hidden" name="request_id" id="modalRequestId" value="">
            <input type="hidden" name="new_status" value="UNDER_REVIEW">
            
            <label class="block text-sm font-medium text-gray-700 mb-2">Who will review this request?</label>
            <select name="reviewer_id" id="modalReviewerId" class="form-input w-full" required>
                <option value="">-- Select Reviewer --</option>
                <?php foreach ($allTeamMembers as $m): ?>
                    <option value="<?= $m['id'] ?>"><?= htmlspecialchars($m['display_name']) ?></option>
                <?php endforeach; ?>
            </select>
            
            <div class="modal-buttons">
                <button type="button" class="modal-cancel" onclick="closeReviewerModal()">Cancel</button>
                <button type="submit" class="modal-confirm">Send to Review</button>
            </div>
        </form>
    </div>
</div>

<!-- Add Remark Modal -->
<div id="remarkModal" class="modal-overlay">
    <div class="modal-box">
        <div class="modal-title"><i class="fas fa-comment-alt mr-2 text-blue-600"></i>Add Remark</div>
        <p class="text-sm text-gray-500 mb-3" id="remarkClientName"></p>
        <form method="POST" action="requests.php<?= $filterStatus ? '?status=' . urlencode($filterStatus) : '' ?>">
            <input type="hidden" name="action" value="add_remark">
            <input type="hidden" name="request_id" id="remarkRequestId" value="">
            
            <label class="block text-sm font-medium text-gray-700 mb-2">Your Remark / Note</label>
            <textarea name="remark" id="remarkText" class="form-input w-full" rows="3" 
                      placeholder="Add a note about this request..." required></textarea>
            <p class="text-xs text-gray-400 mt-1">This will be visible to all team members</p>
            
            <div class="modal-buttons">
                <button type="button" class="modal-cancel" onclick="closeRemarkModal()">Cancel</button>
                <button type="submit" class="modal-confirm" style="background:#3b82f6;">Add Remark</button>
            </div>
        </form>
    </div>
</div>

<script>
function openReviewerModal(requestId) {
    document.getElementById('modalRequestId').value = requestId;
    document.getElementById('modalReviewerId').value = '';
    document.getElementById('reviewerModal').classList.add('active');
}

function closeReviewerModal() {
    document.getElementById('reviewerModal').classList.remove('active');
}

function openRemarkModal(requestId, clientName) {
    document.getElementById('remarkRequestId').value = requestId;
    document.getElementById('remarkClientName').textContent = clientName;
    document.getElementById('remarkText').value = '';
    document.getElementById('remarkModal').classList.add('active');
    document.getElementById('remarkText').focus();
}

function closeRemarkModal() {
    document.getElementById('remarkModal').classList.remove('active');
}

document.getElementById('reviewerModal').addEventListener('click', function(e) {
    if (e.target === this) closeReviewerModal();
});

document.getElementById('remarkModal').addEventListener('click', function(e) {
    if (e.target === this) closeRemarkModal();
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeReviewerModal();
        closeRemarkModal();
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>
