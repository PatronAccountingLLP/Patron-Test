<?php
/**
 * PATRON - Cross-Sell Intelligence
 * Recommends services based on client profile
 * Supports "Already Have" and "Not Required" dismissals
 */

function getCrossSellRecommendations($clientId) {
    $recommendations = [];
    
    // Get client details
    $client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
    if (!$client) return [];
    
    // Get dismissed recommendations
    $dismissals = dbFetchAll("
        SELECT service_code, dismissal_type FROM cross_sell_dismissals WHERE client_id = ?
    ", [$clientId]);
    $dismissedCodes = array_column($dismissals, 'service_code');
    
    // Get client's existing services (completed or in-progress)
    $existingServices = dbFetchAll("
        SELECT DISTINCT s.code, s.name, s.category
        FROM service_requests sr
        JOIN services s ON sr.service_id = s.id
        WHERE sr.client_id = ? AND sr.status NOT IN ('CANCELLED', 'REJECTED')
    ", [$clientId]);
    
    $existingCodes = array_column($existingServices, 'code');
    
    // Get client's certificates
    $certificates = dbFetchAll("
        SELECT ct.code, ct.name, c.expiry_date
        FROM client_certificates c
        JOIN certificate_types ct ON c.certificate_type_id = ct.id
        WHERE c.client_id = ? AND c.deleted_at IS NULL
    ", [$clientId]);
    
    $certCodes = array_column($certificates, 'code');
    
    // Get all services for looking up IDs
    $allServices = dbFetchAll("SELECT id, code, name FROM services WHERE is_active = 1 AND deleted_at IS NULL");
    $serviceIdByCode = [];
    foreach ($allServices as $svc) {
        $serviceIdByCode[$svc['code']] = $svc['id'];
    }
    
    // Helper to add recommendation if not dismissed
    $addRec = function($code, $title, $reason, $priority, $icon, $color) use (&$recommendations, $dismissedCodes, $existingCodes, $serviceIdByCode) {
        if (!in_array($code, $dismissedCodes) && !in_array($code, $existingCodes)) {
            $recommendations[] = [
                'service_code' => $code,
                'service_id' => $serviceIdByCode[$code] ?? null,
                'title' => $title,
                'reason' => $reason,
                'priority' => $priority,
                'icon' => $icon,
                'color' => $color
            ];
        }
    };
    
    // ===== RECOMMENDATION RULES =====
    
    // Rule 1: Has GST but no MSME
    if (in_array('GST-REG', $existingCodes)) {
        $addRec('MSME-REG', 'MSME/Udyam Registration', 
            'Client has GST registration. MSME registration provides government benefits and tender preferences.',
            'high', 'fa-award', 'green');
    }
    
    // Rule 2: Pvt Ltd/LLP without Trademark
    if (in_array($client['entity_type'], ['PVT_LTD', 'LLP', 'SECTION_8'])) {
        $addRec('TM-REG', 'Trademark Registration',
            'Protect your brand name and logo. Essential for ' . str_replace('_', ' ', $client['entity_type']) . ' companies.',
            'medium', 'fa-trademark', 'blue');
    }
    
    // Rule 3: Business without Shop Act
    if ($client['entity_type'] !== 'INDIVIDUAL') {
        $addRec('SHOP-ACT', 'Shop Act License',
            'Mandatory for businesses with employees. Required for opening bank accounts and compliance.',
            'high', 'fa-store', 'orange');
    }
    
    // Rule 4: Has business but no TAN (for salary payments)
    if (in_array('GST-REG', $existingCodes)) {
        $addRec('TAN-REG', 'TAN Registration',
            'Required for deducting TDS on salary, rent, and professional payments.',
            'medium', 'fa-file-invoice-dollar', 'purple');
    }
    
    // Rule 5: Food business without FSSAI
    $hasFoodBusiness = false;
    foreach ($existingServices as $svc) {
        if (stripos($svc['name'], 'food') !== false || stripos($svc['name'], 'restaurant') !== false) {
            $hasFoodBusiness = true;
            break;
        }
    }
    if ($hasFoodBusiness) {
        $addRec('FSSAI-REG', 'FSSAI Registration/License',
            'Mandatory for all food businesses. Avoid penalties up to ₹5 lakhs.',
            'high', 'fa-utensils', 'red');
    }
    
    // Rule 6: Import/Export business without IEC
    $addRec('IEC-REG', 'Import Export Code (IEC)',
        'Required for international trade. One-time registration, lifetime validity.',
        'low', 'fa-globe', 'teal');
    
    // Rule 7: Pvt Ltd without DSC for directors
    if (in_array($client['entity_type'], ['PVT_LTD', 'LLP', 'OPC', 'SECTION_8'])) {
        $addRec('DSC-CL3', 'Digital Signature Certificate',
            'Required for MCA filings, GST registration, and e-tendering.',
            'medium', 'fa-signature', 'indigo');
    }
    
    // Rule 8: Annual compliance reminders for Pvt Ltd
    if (in_array($client['entity_type'], ['PVT_LTD', 'OPC', 'SECTION_8'])) {
        $addRec('ANNUAL-FILING', 'Annual ROC Filing',
            'Mandatory yearly compliance. Due within 30 days of AGM.',
            'info', 'fa-calendar-check', 'gray');
    }
    
    // ===== CERTIFICATE EXPIRY ALERTS =====
    foreach ($certificates as $cert) {
        if ($cert['expiry_date']) {
            $daysToExpiry = (strtotime($cert['expiry_date']) - time()) / 86400;
            if ($daysToExpiry <= 90 && $daysToExpiry > 0) {
                $recommendations[] = [
                    'service_code' => 'RENEWAL-' . $cert['code'],
                    'service_id' => null,
                    'title' => $cert['name'] . ' Renewal',
                    'reason' => 'Expires in ' . round($daysToExpiry) . ' days. Renew before ' . date('d M Y', strtotime($cert['expiry_date'])),
                    'priority' => $daysToExpiry <= 30 ? 'urgent' : 'high',
                    'icon' => 'fa-clock',
                    'color' => $daysToExpiry <= 30 ? 'red' : 'orange'
                ];
            }
        }
    }
    
    // Sort by priority
    $priorityOrder = ['urgent' => 0, 'high' => 1, 'medium' => 2, 'low' => 3, 'info' => 4];
    usort($recommendations, function($a, $b) use ($priorityOrder) {
        return ($priorityOrder[$a['priority']] ?? 5) - ($priorityOrder[$b['priority']] ?? 5);
    });
    
    // Limit to top 5
    return array_slice($recommendations, 0, 5);
}

/**
 * Dismiss a cross-sell recommendation
 */
function dismissCrossSell($clientId, $serviceCode, $dismissalType, $userId, $notes = null) {
    try {
        // Check if already dismissed
        $existing = dbFetchOne("SELECT id FROM cross_sell_dismissals WHERE client_id = ? AND service_code = ?", 
            [$clientId, $serviceCode]);
        
        if ($existing) {
            // Update existing
            dbExecute("
                UPDATE cross_sell_dismissals 
                SET dismissal_type = ?, dismissed_by = ?, dismissed_at = NOW(), notes = ?
                WHERE id = ?
            ", [$dismissalType, $userId, $notes, $existing['id']]);
        } else {
            // Insert new
            dbExecute("
                INSERT INTO cross_sell_dismissals (client_id, service_code, dismissal_type, dismissed_by, notes)
                VALUES (?, ?, ?, ?, ?)
            ", [$clientId, $serviceCode, $dismissalType, $userId, $notes]);
        }
        
        return true;
    } catch (Exception $e) {
        return false;
    }
}

/**
 * Get dismissed recommendations for a client
 */
function getDismissedRecommendations($clientId) {
    return dbFetchAll("
        SELECT csd.*, u.display_name as dismissed_by_name
        FROM cross_sell_dismissals csd
        LEFT JOIN users u ON csd.dismissed_by = u.id
        WHERE csd.client_id = ?
        ORDER BY csd.dismissed_at DESC
    ", [$clientId]);
}

/**
 * Restore a dismissed recommendation
 */
function restoreCrossSell($clientId, $serviceCode) {
    try {
        dbExecute("DELETE FROM cross_sell_dismissals WHERE client_id = ? AND service_code = ?", 
            [$clientId, $serviceCode]);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

/**
 * Get compliance score for a client
 */
function getClientComplianceScore($clientId) {
    $score = 100;
    $issues = [];
    
    // Check for missing mandatory documents
    $pendingDocs = dbFetchOne("
        SELECT COUNT(*) as count 
        FROM request_documents rd
        JOIN service_requests sr ON rd.service_request_id = sr.id
        WHERE sr.client_id = ? AND rd.status = 'PENDING' AND rd.is_required = 1
    ", [$clientId]);
    
    if ($pendingDocs['count'] > 0) {
        $score -= min(30, $pendingDocs['count'] * 5);
        $issues[] = $pendingDocs['count'] . ' mandatory documents pending';
    }
    
    // Check for expiring certificates
    $expiringCerts = dbFetchOne("
        SELECT COUNT(*) as count 
        FROM client_certificates 
        WHERE client_id = ? AND expiry_date IS NOT NULL 
        AND expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 90 DAY)
        AND deleted_at IS NULL
    ", [$clientId]);
    
    if ($expiringCerts['count'] > 0) {
        $score -= min(20, $expiringCerts['count'] * 10);
        $issues[] = $expiringCerts['count'] . ' certificates expiring soon';
    }
    
    // Check for overdue tasks
    $overdueTasks = dbFetchOne("
        SELECT COUNT(*) as count 
        FROM tasks t
        JOIN service_requests sr ON t.service_request_id = sr.id
        WHERE sr.client_id = ? AND t.due_date < CURDATE() AND t.status NOT IN ('COMPLETED', 'CANCELLED')
    ", [$clientId]);
    
    if ($overdueTasks['count'] > 0) {
        $score -= min(20, $overdueTasks['count'] * 5);
        $issues[] = $overdueTasks['count'] . ' overdue tasks';
    }
    
    // Check for stale requests (no activity in 30 days)
    $staleRequests = dbFetchOne("
        SELECT COUNT(*) as count 
        FROM service_requests 
        WHERE client_id = ? AND status IN ('NEW', 'IN_PROGRESS', 'PENDING_DOCUMENTS')
        AND updated_at < DATE_SUB(NOW(), INTERVAL 30 DAY)
    ", [$clientId]);
    
    if ($staleRequests['count'] > 0) {
        $score -= min(15, $staleRequests['count'] * 5);
        $issues[] = $staleRequests['count'] . ' requests with no recent activity';
    }
    
    return [
        'score' => max(0, $score),
        'grade' => $score >= 90 ? 'A' : ($score >= 75 ? 'B' : ($score >= 60 ? 'C' : ($score >= 40 ? 'D' : 'F'))),
        'color' => $score >= 90 ? 'green' : ($score >= 75 ? 'blue' : ($score >= 60 ? 'yellow' : ($score >= 40 ? 'orange' : 'red'))),
        'issues' => $issues
    ];
}

/**
 * Check service dependencies
 */
function checkServiceDependencies($clientId, $serviceId) {
    $warnings = [];
    
    // Get dependencies for this service
    $dependencies = dbFetchAll("
        SELECT sd.*, s.name as depends_on_name, s.code as depends_on_code
        FROM service_dependencies sd
        JOIN services s ON sd.depends_on_service_id = s.id
        WHERE sd.service_id = ?
    ", [$serviceId]);
    
    if (empty($dependencies)) return $warnings;
    
    // Check which dependencies are met
    foreach ($dependencies as $dep) {
        $hasService = dbFetchOne("
            SELECT id, status FROM service_requests 
            WHERE client_id = ? AND service_id = ? AND status = 'COMPLETED' AND deleted_at IS NULL
        ", [$clientId, $dep['depends_on_service_id']]);
        
        if (!$hasService) {
            $warningType = $dep['dependency_type'] === 'MUST_COMPLETE' ? 'error' : 'warning';
            $warnings[] = [
                'type' => $warningType,
                'service_code' => $dep['depends_on_code'],
                'service_name' => $dep['depends_on_name'],
                'message' => $dep['dependency_type'] === 'MUST_COMPLETE' 
                    ? "Requires completed '{$dep['depends_on_name']}' first"
                    : "Recommended to complete '{$dep['depends_on_name']}' first"
            ];
        }
    }
    
    return $warnings;
}
?>
