<?php
/**
 * PATRON - Invoice Helper Functions
 * Shared utilities for invoice categorization, FY calculation, and filtering
 * Updated: Fetches categories from billing_categories table
 */

/**
 * Get Financial Year from a date
 * Indian FY: April 1 to March 31
 * @param string $date Date in Y-m-d format
 * @return string FY in format "2024-25"
 */
function getFinancialYear($date) {
    if (!$date) return null;
    
    $month = (int)date('n', strtotime($date));
    $year = (int)date('Y', strtotime($date));
    
    if ($month >= 4) {
        // April onwards = current year to next year
        return $year . '-' . substr($year + 1, 2);
    } else {
        // Jan-Mar = previous year to current year
        return ($year - 1) . '-' . substr($year, 2);
    }
}

/**
 * Get FY start and end dates
 * @param string $fy FY in format "2024-25"
 * @return array ['start' => 'Y-m-d', 'end' => 'Y-m-d']
 */
function getFYDateRange($fy) {
    if (!$fy || !preg_match('/^(\d{4})-(\d{2})$/', $fy, $matches)) {
        // Default to current FY
        $month = (int)date('n');
        $year = (int)date('Y');
        $startYear = $month >= 4 ? $year : $year - 1;
    } else {
        $startYear = (int)$matches[1];
    }
    
    return [
        'start' => $startYear . '-04-01',
        'end' => ($startYear + 1) . '-03-31'
    ];
}

/**
 * Get current Financial Year
 * @return string FY in format "2024-25"
 */
function getCurrentFY() {
    return getFinancialYear(date('Y-m-d'));
}

/**
 * Get list of FYs from invoices table
 * @return array List of FYs in descending order
 */
function getAvailableFYs() {
    $fys = [];
    
    // Get distinct years from invoices
    $years = dbFetchAll("
        SELECT DISTINCT 
            YEAR(invoice_date) as year,
            MONTH(invoice_date) as month
        FROM invoices 
        WHERE invoice_date IS NOT NULL AND (status IS NULL OR LOWER(status) != 'void')
        ORDER BY invoice_date DESC
    ") ?: [];
    
    foreach ($years as $row) {
        $fy = getFinancialYear($row['year'] . '-' . str_pad($row['month'], 2, '0', STR_PAD_LEFT) . '-01');
        if ($fy && !in_array($fy, $fys)) {
            $fys[] = $fy;
        }
    }
    
    // Ensure current FY is always in list
    $currentFY = getCurrentFY();
    if (!in_array($currentFY, $fys)) {
        array_unshift($fys, $currentFY);
    }
    
    // Sort descending
    usort($fys, function($a, $b) {
        return strcmp($b, $a);
    });
    
    return $fys;
}

/**
 * Color mapping for categories
 * Maps category codes to Tailwind color names
 */
function getCategoryColorMap() {
    return [
        'PA_P' => 'indigo',
        'PA_R' => 'blue',
        'TDS' => 'purple',
        'GST' => 'teal',
        'ROC' => 'cyan',
        'PT' => 'amber',
        'AUDIT' => 'emerald',
        'ITR' => 'violet',
        'REIM' => 'orange',
        'OTHER' => 'gray',
        // Add more mappings as needed
    ];
}

/**
 * Get color for a category code
 */
function getCategoryColor($code) {
    $colorMap = getCategoryColorMap();
    
    // Direct match
    if (isset($colorMap[$code])) {
        return $colorMap[$code];
    }
    
    // Partial match (e.g., PA_P_2024 matches PA_P)
    foreach ($colorMap as $prefix => $color) {
        if (strpos($code, $prefix) === 0) {
            return $color;
        }
    }
    
    // Default color
    return 'gray';
}

/**
 * Invoice Category Definitions - Fetched from billing_categories table
 * Falls back to hardcoded if table doesn't exist
 */
function getInvoiceCategories() {
    static $categories = null;
    
    if ($categories !== null) {
        return $categories;
    }
    
    $categories = [];
    
    try {
        // Fetch from database
        $dbCategories = dbFetchAll("
            SELECT code, name, description, is_reimbursement_only 
            FROM billing_categories 
            WHERE is_active = 1 
            ORDER BY sort_order, code
        ");
        
        if ($dbCategories && count($dbCategories) > 0) {
            foreach ($dbCategories as $cat) {
                $code = $cat['code'];
                $color = getCategoryColor($code);
                
                $categories[$code] = [
                    'name' => $cat['name'],
                    'short' => str_replace('_', '/', $code), // PA_P becomes PA/P
                    'description' => $cat['description'] ?? '',
                    'is_reimbursement' => (bool)$cat['is_reimbursement_only'],
                    'color' => $color,
                    'icon' => getIconForCategory($code)
                ];
            }
        }
    } catch (Exception $e) {
        // Table might not exist, use fallback
    }
    
    // Fallback if no categories from DB
    if (empty($categories)) {
        $categories = getDefaultCategories();
    }
    
    // Always ensure OTHER category exists
    if (!isset($categories['OTHER'])) {
        $categories['OTHER'] = [
            'name' => 'Other',
            'short' => 'OTHER',
            'description' => 'Uncategorized invoices',
            'is_reimbursement' => false,
            'color' => 'gray',
            'icon' => 'fa-file-invoice'
        ];
    }
    
    return $categories;
}

/**
 * Get icon for category
 */
function getIconForCategory($code) {
    $icons = [
        'PA_P' => 'fa-briefcase',
        'PA_R' => 'fa-building',
        'TDS' => 'fa-percent',
        'GST' => 'fa-receipt',
        'ROC' => 'fa-building-columns',
        'PT' => 'fa-landmark',
        'AUDIT' => 'fa-search-dollar',
        'ITR' => 'fa-file-invoice-dollar',
        'REIM' => 'fa-hand-holding-dollar',
        'OTHER' => 'fa-file-invoice'
    ];
    
    if (isset($icons[$code])) {
        return $icons[$code];
    }
    
    // Partial match
    foreach ($icons as $prefix => $icon) {
        if (strpos($code, $prefix) === 0) {
            return $icon;
        }
    }
    
    return 'fa-file-invoice';
}

/**
 * Default hardcoded categories (fallback)
 */
function getDefaultCategories() {
    return [
        'PA_P' => [
            'name' => 'Professional Fees - Periodic',
            'short' => 'PA/P',
            'description' => 'Recurring professional services',
            'is_reimbursement' => false,
            'color' => 'indigo',
            'icon' => 'fa-briefcase'
        ],
        'PA_R' => [
            'name' => 'Professional Fees - Registration',
            'short' => 'PA/R',
            'description' => 'One-time registration services',
            'is_reimbursement' => false,
            'color' => 'blue',
            'icon' => 'fa-building'
        ],
        'TDS' => [
            'name' => 'TDS Compliance',
            'short' => 'TDS',
            'description' => 'TDS filing and compliance',
            'is_reimbursement' => true,
            'color' => 'purple',
            'icon' => 'fa-percent'
        ],
        'GST' => [
            'name' => 'GST Compliance',
            'short' => 'GST',
            'description' => 'GST filing and related charges',
            'is_reimbursement' => true,
            'color' => 'teal',
            'icon' => 'fa-receipt'
        ],
        'ROC' => [
            'name' => 'ROC Filing',
            'short' => 'ROC',
            'description' => 'ROC/MCA filing charges',
            'is_reimbursement' => true,
            'color' => 'cyan',
            'icon' => 'fa-building-columns'
        ],
        'PT' => [
            'name' => 'Professional Tax',
            'short' => 'PT',
            'description' => 'Professional Tax related',
            'is_reimbursement' => true,
            'color' => 'amber',
            'icon' => 'fa-landmark'
        ],
        'OTHER' => [
            'name' => 'Other',
            'short' => 'OTHER',
            'description' => 'Uncategorized invoices',
            'is_reimbursement' => false,
            'color' => 'gray',
            'icon' => 'fa-file-invoice'
        ]
    ];
}

/**
 * Detect invoice category from invoice number
 * Matches the invoice number prefix to category codes
 * @param string $invoiceNumber
 * @return string Category key
 */
function detectInvoiceCategory($invoiceNumber) {
    if (!$invoiceNumber) return 'OTHER';
    
    $invoiceNumber = strtoupper(trim($invoiceNumber));
    $categories = getInvoiceCategories();
    
    // Get all category codes sorted by length (longest first for better matching)
    $codes = array_keys($categories);
    usort($codes, function($a, $b) {
        return strlen($b) - strlen($a);
    });
    
    // Try to match invoice number prefix with category codes
    foreach ($codes as $code) {
        // Skip OTHER - it's the fallback
        if ($code === 'OTHER') continue;
        
        // Check if invoice number starts with category code (with _ or / or nothing between parts)
        // e.g., "PA_P-001" or "PA/P-001" or "PAP-001" should all match PA_P
        $escapedCode = preg_quote($code, '/');
        $pattern = str_replace(['\_', '\/', ' '], '[_/\s]?', $escapedCode);
        
        if (preg_match('/^' . $pattern . '[\-_\/\s\d]/i', $invoiceNumber . '-')) {
            return $code;
        }
        
        // Also try with slash variant
        $slashVariant = str_replace('_', '/', $code);
        if (stripos($invoiceNumber, $slashVariant) === 0) {
            return $code;
        }
        
        // Direct prefix match (simpler)
        if (stripos($invoiceNumber, $code) === 0) {
            return $code;
        }
    }
    
    return 'OTHER';
}

/**
 * Categorize invoices array
 * @param array $invoices
 * @return array Categorized invoices with category key added
 */
function categorizeInvoices($invoices) {
    foreach ($invoices as &$inv) {
        $inv['category'] = detectInvoiceCategory($inv['zoho_invoice_number'] ?? '');
    }
    return $invoices;
}

/**
 * Group invoices by status (Overdue, Unpaid, Paid)
 * @param array $invoices
 * @return array ['overdue' => [], 'unpaid' => [], 'paid' => []]
 */
function groupInvoicesByStatus($invoices) {
    $result = [
        'overdue' => [],
        'unpaid' => [],
        'paid' => []
    ];
    
    $today = date('Y-m-d');
    
    foreach ($invoices as $inv) {
        $status = strtolower($inv['status'] ?? '');
        $balanceDue = (float)($inv['balance_due'] ?? 0);
        $dueDate = $inv['due_date'] ?? null;
        
        // Skip void invoices
        if ($status === 'void') continue;
        
        if ($balanceDue <= 0 || $status === 'paid') {
            $result['paid'][] = $inv;
        } elseif ($dueDate && $dueDate < $today && $balanceDue > 0) {
            $result['overdue'][] = $inv;
        } else {
            $result['unpaid'][] = $inv;
        }
    }
    
    return $result;
}

/**
 * Group invoices by category
 * @param array $invoices
 * @return array Keyed by category
 */
function groupInvoicesByCategory($invoices) {
    $categories = getInvoiceCategories();
    $result = [];
    
    foreach (array_keys($categories) as $key) {
        $result[$key] = [];
    }
    
    foreach ($invoices as $inv) {
        $cat = $inv['category'] ?? detectInvoiceCategory($inv['zoho_invoice_number'] ?? '');
        if (!isset($result[$cat])) {
            $result[$cat] = [];
        }
        $result[$cat][] = $inv;
    }
    
    return $result;
}

/**
 * Calculate invoice statistics
 * @param array $invoices
 * @return array Statistics
 */
function calculateInvoiceStats($invoices) {
    $stats = [
        'total_count' => 0,
        'total_amount' => 0,
        'total_paid' => 0,
        'total_outstanding' => 0,
        'overdue_count' => 0,
        'overdue_amount' => 0,
        'unpaid_count' => 0,
        'unpaid_amount' => 0,
        'paid_count' => 0,
        'paid_amount' => 0,
        'by_category' => []
    ];
    
    $categories = getInvoiceCategories();
    foreach (array_keys($categories) as $key) {
        $stats['by_category'][$key] = [
            'count' => 0,
            'total' => 0,
            'outstanding' => 0,
            'paid' => 0
        ];
    }
    
    $today = date('Y-m-d');
    
    foreach ($invoices as $inv) {
        $status = strtolower($inv['status'] ?? '');
        if ($status === 'void') continue;
        
        $total = (float)($inv['total'] ?? 0);
        $balanceDue = (float)($inv['balance_due'] ?? 0);
        $paidAmount = $total - $balanceDue;
        $dueDate = $inv['due_date'] ?? null;
        $category = $inv['category'] ?? detectInvoiceCategory($inv['zoho_invoice_number'] ?? '');
        
        $stats['total_count']++;
        $stats['total_amount'] += $total;
        $stats['total_paid'] += $paidAmount;
        $stats['total_outstanding'] += $balanceDue;
        
        // Category stats
        if (!isset($stats['by_category'][$category])) {
            $stats['by_category'][$category] = [
                'count' => 0,
                'total' => 0,
                'outstanding' => 0,
                'paid' => 0
            ];
        }
        $stats['by_category'][$category]['count']++;
        $stats['by_category'][$category]['total'] += $total;
        $stats['by_category'][$category]['outstanding'] += $balanceDue;
        $stats['by_category'][$category]['paid'] += $paidAmount;
        
        // Status breakdown
        if ($balanceDue <= 0 || $status === 'paid') {
            $stats['paid_count']++;
            $stats['paid_amount'] += $total;
        } elseif ($dueDate && $dueDate < $today && $balanceDue > 0) {
            $stats['overdue_count']++;
            $stats['overdue_amount'] += $balanceDue;
        } else {
            $stats['unpaid_count']++;
            $stats['unpaid_amount'] += $balanceDue;
        }
    }
    
    return $stats;
}

/**
 * Format FY for display
 * @param string $fy FY in format "2024-25"
 * @return string "FY 2024-25"
 */
function formatFY($fy) {
    return 'FY ' . $fy;
}

/**
 * Get category color classes
 * @param string $category
 * @return array ['bg' => 'bg-xxx-100', 'text' => 'text-xxx-700', 'border' => 'border-xxx-200']
 */
function getCategoryColors($category) {
    $categories = getInvoiceCategories();
    $color = $categories[$category]['color'] ?? getCategoryColor($category);
    
    return [
        'bg' => "bg-{$color}-100",
        'text' => "text-{$color}-700",
        'border' => "border-{$color}-200",
        'bg_light' => "bg-{$color}-50",
        'ring' => "ring-{$color}-400"
    ];
}

/**
 * Get category summary for dashboard
 * @return array Summary of invoices by category
 */
function getCategorySummary() {
    $categories = getInvoiceCategories();
    $summary = [];
    
    foreach ($categories as $code => $cat) {
        $summary[$code] = [
            'code' => $code,
            'name' => $cat['name'],
            'short' => $cat['short'],
            'color' => $cat['color'],
            'overdue' => 0,
            'unpaid' => 0,
            'paid' => 0,
            'total' => 0
        ];
    }
    
    return $summary;
}
