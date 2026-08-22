<?php
/**
 * PATRON - Zoho Books Sync Service
 * Handles syncing data from Zoho Books to Patron
 * 
 * UPDATED: Excludes VOID invoices from sync
 */

require_once __DIR__ . '/zoho_api.php';

class ZohoSyncService {
    private $zoho;
    private $logId;
    private $dryRun = false;
    private $dryRunChanges = [];
    private $stats = [
        'fetched' => 0,
        'created' => 0,
        'updated' => 0,
        'failed' => 0,
        'skipped' => 0,
        'errors' => []
    ];
    
    // Statuses to exclude from sync
    private $excludeInvoiceStatuses = ['void'];
    
    public function __construct() {
        $this->zoho = new ZohoBooks();
    }
    
    /**
     * Enable/disable dry run mode
     * In dry run mode, no database changes are made
     * 
     * @param bool $enabled Enable dry run
     * @return self For method chaining
     */
    public function setDryRun(bool $enabled = true): self {
        $this->dryRun = $enabled;
        $this->dryRunChanges = [];
        return $this;
    }
    
    /**
     * Check if dry run mode is enabled
     */
    public function isDryRun(): bool {
        return $this->dryRun;
    }
    
    /**
     * Get dry run changes (what would have happened)
     */
    public function getDryRunChanges(): array {
        return $this->dryRunChanges;
    }
    
    /**
     * Log a change in dry run mode
     */
    private function logDryRunChange(string $type, string $action, array $data): void {
        if (!$this->dryRun) return;
        
        $this->dryRunChanges[] = [
            'type' => $type,
            'action' => $action,
            'data' => $data,
            'timestamp' => date('Y-m-d H:i:s')
        ];
    }
    
    /**
     * Ensure token is valid before sync
     */
    public function ensureTokenReady(int $minutesNeeded = 10): bool {
        return $this->zoho->ensureTokenValidFor($minutesNeeded);
    }
    
    /**
     * Get token status
     */
    public function getTokenStatus(): array {
        return $this->zoho->getTokenStatus();
    }
    
    /**
     * Check if sync is possible
     */
    public function canSync(): bool {
        return $this->zoho->isConfigured() && $this->zoho->isConnected();
    }
    
    /**
     * Start sync log
     */
    private function startLog(string $syncType, string $triggeredBy = 'SYSTEM'): int {
        if ($this->dryRun) {
            $this->logId = 0; // No log in dry run
            $this->stats = ['fetched' => 0, 'created' => 0, 'updated' => 0, 'failed' => 0, 'skipped' => 0, 'errors' => []];
            return 0;
        }
        
        dbExecute(
            "INSERT INTO zoho_sync_log (sync_type, status, triggered_by) VALUES (?, 'STARTED', ?)",
            [$syncType, $triggeredBy]
        );
        $this->logId = dbLastInsertId();
        $this->stats = ['fetched' => 0, 'created' => 0, 'updated' => 0, 'failed' => 0, 'skipped' => 0, 'errors' => []];
        return $this->logId;
    }
    
    /**
     * Complete sync log
     */
    private function completeLog(string $status = 'SUCCESS', string $error = ''): void {
        if (!$this->logId || $this->dryRun) return;
        
        $details = json_encode($this->stats);
        dbExecute(
            "UPDATE zoho_sync_log SET 
                status = ?, 
                records_fetched = ?,
                records_created = ?,
                records_updated = ?,
                records_failed = ?,
                error_message = ?,
                details = ?,
                completed_at = NOW()
             WHERE id = ?",
            [
                $status,
                $this->stats['fetched'],
                $this->stats['created'],
                $this->stats['updated'],
                $this->stats['failed'],
                $error ?: null,
                $details,
                $this->logId
            ]
        );
    }
    
    // =========================================================
    // CONTACTS SYNC - TWO WAY
    // =========================================================
    
    /**
     * Sync contacts from Zoho to Patron clients
     */
    public function syncContacts(string $triggeredBy = 'SYSTEM', bool $fullSync = false): array {
        $this->startLog('CONTACTS', $triggeredBy);
        
        try {
            $lastSync = $fullSync ? '' : $this->zoho->getSetting('last_sync_contacts');
            $page = 1;
            $hasMore = true;
            
            while ($hasMore) {
                $response = $this->zoho->getContacts($page, $lastSync);
                
                if (!$response || !isset($response['contacts'])) {
                    throw new Exception($this->zoho->getLastError() ?? 'Failed to fetch contacts');
                }
                
                $contacts = $response['contacts'];
                $this->stats['fetched'] += count($contacts);
                
                foreach ($contacts as $contact) {
                    $this->processContact($contact);
                }
                
                // Check for more pages
                $pageContext = $response['page_context'] ?? [];
                $hasMore = ($pageContext['has_more_page'] ?? false) && $page < 50; // Max 50 pages safety
                $page++;
            }
            
            // =====================================================
            // APPLY 15-MONTH RULE TO ALL EXISTING CLIENTS
            // This ensures clients not modified in Zoho still get evaluated
            // =====================================================
            $this->apply15MonthRuleToAllClients();
            
            // =====================================================
            // FIX CLIENT LINKAGES
            // Link invoices/payments/quotations to clients via zoho_customer_id
            // =====================================================
            $this->fixClientLinkages();
            
            // Update last sync time
            $this->zoho->saveSetting('last_sync_contacts', date('Y-m-d\TH:i:sP'));
            
            $this->completeLog('SUCCESS');
            
            return [
                'success' => true,
                'stats' => $this->stats
            ];
            
        } catch (Exception $e) {
            $this->completeLog('FAILED', $e->getMessage());
            return [
                'success' => false,
                'error' => $e->getMessage(),
                'stats' => $this->stats
            ];
        }
    }
    
    /**
     * Apply 15-month rule to ALL clients in database
     * Marks clients as INACTIVE if no invoice/estimate/payment in last 15 months
     * RESPECTS status_override flag - won't change clients with override=1
     */
    private function apply15MonthRuleToAllClients(): void {
        $cutoffDate = date('Y-m-d', strtotime('-15 months'));
        
        // Mark as INACTIVE: clients with NO activity in 15 months who are currently ACTIVE
        // SKIP clients with status_override = 1
        dbExecute("
            UPDATE clients c
            SET c.status = 'INACTIVE', c.updated_at = NOW()
            WHERE c.deleted_at IS NULL
            AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
            AND COALESCE(c.status_override, 0) = 0
            AND NOT EXISTS (
                SELECT 1 FROM invoices i 
                WHERE i.client_id = c.id 
                AND i.invoice_date >= ? 
                AND (i.status IS NULL OR LOWER(i.status) != 'void')
            )
            AND NOT EXISTS (
                SELECT 1 FROM quotations q 
                WHERE q.client_id = c.id 
                AND q.estimate_date >= ?
            )
            AND NOT EXISTS (
                SELECT 1 FROM payments p 
                WHERE p.client_id = c.id 
                AND p.payment_date >= ?
            )
        ", [$cutoffDate, $cutoffDate, $cutoffDate]);
        
        // Mark as ACTIVE: clients with activity in 15 months who are currently INACTIVE
        // (This applies regardless of override flag - if there's activity, they should be active)
        dbExecute("
            UPDATE clients c
            SET c.status = 'ACTIVE', c.updated_at = NOW()
            WHERE c.deleted_at IS NULL
            AND UPPER(c.status) = 'INACTIVE'
            AND (
                EXISTS (
                    SELECT 1 FROM invoices i 
                    WHERE i.client_id = c.id 
                    AND i.invoice_date >= ? 
                    AND (i.status IS NULL OR LOWER(i.status) != 'void')
                )
                OR EXISTS (
                    SELECT 1 FROM quotations q 
                    WHERE q.client_id = c.id 
                    AND q.estimate_date >= ?
                )
                OR EXISTS (
                    SELECT 1 FROM payments p 
                    WHERE p.client_id = c.id 
                    AND p.payment_date >= ?
                )
            )
        ", [$cutoffDate, $cutoffDate, $cutoffDate]);
    }
    
    /**
     * Fix client_id linkages for invoices, payments, quotations
     * This ensures records synced before client was linked get properly connected
     */
    private function fixClientLinkages(): void {
        // Fix invoices - link client_id via zoho_customer_id
        dbExecute("
            UPDATE invoices i
            JOIN clients c ON i.zoho_customer_id COLLATE utf8mb4_unicode_ci = c.zoho_contact_id COLLATE utf8mb4_unicode_ci
            SET i.client_id = c.id
            WHERE (i.client_id IS NULL OR i.client_id = 0)
            AND i.zoho_customer_id IS NOT NULL
        ");
        
        // Fix payments
        dbExecute("
            UPDATE payments p
            JOIN clients c ON p.zoho_customer_id COLLATE utf8mb4_unicode_ci = c.zoho_contact_id COLLATE utf8mb4_unicode_ci
            SET p.client_id = c.id
            WHERE (p.client_id IS NULL OR p.client_id = 0)
            AND p.zoho_customer_id IS NOT NULL
        ");
        
        // Fix quotations/estimates
        dbExecute("
            UPDATE quotations q
            JOIN clients c ON q.zoho_customer_id COLLATE utf8mb4_unicode_ci = c.zoho_contact_id COLLATE utf8mb4_unicode_ci
            SET q.client_id = c.id
            WHERE (q.client_id IS NULL OR q.client_id = 0)
            AND q.zoho_customer_id IS NOT NULL
        ");
    }
    
    /**
     * Push client from Patron to Zoho Books
     */
    public function pushClientToZoho(int $clientId): array {
        try {
            $client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
            
            if (!$client) {
                return ['success' => false, 'error' => 'Client not found'];
            }
            
            // Build Zoho contact data
            $contactData = [
                'contact_name' => $client['name'],
                'company_name' => $client['name'],
                'contact_type' => 'customer',
                'customer_sub_type' => 'business',
                'email' => $client['email'] ?? '',
                'phone' => $client['phone'] ?? '',
                'mobile' => $client['mobile'] ?? $client['phone'] ?? '',
                'pan_number' => $client['pan'] ?? '',
                'gst_no' => $client['gstin'] ?? '',
                'gst_treatment' => !empty($client['gstin']) ? 'business_gst' : 'business_none',
            ];
            
            // Add billing address if available
            if (!empty($client['address'])) {
                $contactData['billing_address'] = [
                    'address' => $client['address'],
                    'city' => $client['city'] ?? '',
                    'state' => $client['state'] ?? '',
                    'zip' => $client['pincode'] ?? '',
                    'country' => 'India'
                ];
            }
            
            // Check if already synced to Zoho
            if (!empty($client['zoho_contact_id'])) {
                // Update existing contact
                $response = $this->zoho->updateContact($client['zoho_contact_id'], $contactData);
                
                if ($response && isset($response['contact'])) {
                    dbExecute(
                        "UPDATE clients SET zoho_synced_at = NOW() WHERE id = ?",
                        [$clientId]
                    );
                    return ['success' => true, 'action' => 'updated', 'zoho_contact_id' => $client['zoho_contact_id']];
                }
            } else {
                // Create new contact in Zoho
                $response = $this->zoho->createContact($contactData);
                
                if ($response && isset($response['contact'])) {
                    $zohoContactId = $response['contact']['contact_id'];
                    
                    dbExecute(
                        "UPDATE clients SET zoho_contact_id = ?, zoho_customer_name = ?, zoho_synced_at = NOW() WHERE id = ?",
                        [$zohoContactId, $response['contact']['contact_name'], $clientId]
                    );
                    
                    return ['success' => true, 'action' => 'created', 'zoho_contact_id' => $zohoContactId];
                }
            }
            
            return ['success' => false, 'error' => $this->zoho->getLastError() ?? 'Failed to sync to Zoho'];
            
        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
    
    /**
     * Push multiple clients to Zoho
     */
    public function pushClientsToZoho(array $clientIds, string $triggeredBy = 'SYSTEM'): array {
        $this->startLog('CONTACTS_PUSH', $triggeredBy);
        
        foreach ($clientIds as $clientId) {
            $result = $this->pushClientToZoho($clientId);
            $this->stats['fetched']++;
            
            if ($result['success']) {
                if ($result['action'] === 'created') {
                    $this->stats['created']++;
                } else {
                    $this->stats['updated']++;
                }
            } else {
                $this->stats['failed']++;
                $this->stats['errors'][] = "Client $clientId: " . ($result['error'] ?? 'Unknown error');
            }
            
            usleep(100000); // 100ms delay between API calls
        }
        
        $this->completeLog($this->stats['failed'] > 0 ? 'PARTIAL' : 'SUCCESS');
        
        return [
            'success' => $this->stats['failed'] === 0,
            'stats' => $this->stats
        ];
    }
    
    /**
     * Process single contact from Zoho
     */
    private function processContact(array $contact): void {
        try {
            $zohoContactId = $contact['contact_id'];
            $contactType = strtolower($contact['contact_type'] ?? 'customer');
            
            // Only sync customers, not vendors
            if ($contactType !== 'customer') {
                $this->stats['skipped']++;
                return;
            }
            
            // =====================================================
            // CLIENT NAME LOGIC - Priority: contact_name > company_name > first+last
            // =====================================================
            $contactName = trim($contact['contact_name'] ?? '');
            $companyName = trim($contact['company_name'] ?? '');
            $firstName = trim($contact['first_name'] ?? '');
            $lastName = trim($contact['last_name'] ?? '');
            $fullName = trim("$firstName $lastName");
            
            // Get the best available name
            $bestName = $contactName ?: $companyName ?: $fullName;
            
            // Skip contacts with no usable name
            if (empty($bestName)) {
                $this->stats['skipped']++;
                return;
            }
            
            // Check if client exists by Zoho ID
            $existing = dbFetchOne(
                "SELECT id FROM clients WHERE zoho_contact_id = ?",
                [$zohoContactId]
            );
            
            // Or try to match by name/email
            if (!$existing && !empty($contact['email'])) {
                $existing = dbFetchOne(
                    "SELECT id FROM clients WHERE email = ? AND zoho_contact_id IS NULL AND deleted_at IS NULL",
                    [$contact['email']]
                );
            }
            
            if (!$existing && !empty($bestName)) {
                $existing = dbFetchOne(
                    "SELECT id FROM clients WHERE name = ? AND zoho_contact_id IS NULL AND deleted_at IS NULL",
                    [$bestName]
                );
            }
            
            // =====================================================
            // 15-MONTH RULE - Auto determine ACTIVE/INACTIVE status
            // =====================================================
            $status = 'ACTIVE';
            $cutoffDate = date('Y-m-d', strtotime('-15 months'));
            
            if ($existing) {
                // For existing clients: Check for recent activity in last 15 months
                $hasRecentActivity = dbFetchOne("
                    SELECT 1 FROM (
                        SELECT id FROM invoices 
                        WHERE client_id = ? AND invoice_date >= ? AND (status IS NULL OR LOWER(status) != 'void')
                        UNION ALL
                        SELECT id FROM quotations 
                        WHERE client_id = ? AND estimate_date >= ?
                        UNION ALL
                        SELECT id FROM payments 
                        WHERE client_id = ? AND payment_date >= ?
                    ) AS activity LIMIT 1
                ", [$existing['id'], $cutoffDate, $existing['id'], $cutoffDate, $existing['id'], $cutoffDate]);
                
                $status = $hasRecentActivity ? 'ACTIVE' : 'INACTIVE';
            } else {
                // For new contacts: Check Zoho status and receivables
                $hasOutstanding = (($contact['outstanding_receivable_amount'] ?? 0) > 0);
                $hasCredits = (($contact['unused_credits_receivable_amount'] ?? 0) > 0);
                $zohoStatus = strtolower($contact['status'] ?? 'active');
                
                // Only mark inactive if Zoho says inactive AND no outstanding balance
                if ($zohoStatus === 'inactive' && !$hasOutstanding && !$hasCredits) {
                    $status = 'INACTIVE';
                }
            }
            
            // Get GST treatment
            $gstTreatment = $contact['gst_treatment'] ?? '';
            $entityType = $this->mapGstTreatmentToEntityType($gstTreatment);
            
            $data = [
                'zoho_contact_id' => $zohoContactId,
                'zoho_customer_name' => $contactName ?: $companyName,  // Store original Zoho name
                'name' => $bestName,  // Use best available name
                'email' => $contact['email'] ?? '',
                'phone' => $contact['phone'] ?? '',
                'mobile' => $contact['mobile'] ?? $contact['phone'] ?? '',
                'pan' => $contact['pan_no'] ?? '',
                'gstin' => $contact['gst_no'] ?? '',
                'status' => $status,
                'zoho_synced_at' => date('Y-m-d H:i:s')
            ];
            
            // Only set entity_type if we could determine it
            if ($entityType) {
                $data['entity_type'] = $entityType;
            }
            
            // Get address from billing_address
            if (!empty($contact['billing_address'])) {
                $addr = $contact['billing_address'];
                $data['address'] = $addr['address'] ?? '';
                $data['city'] = $addr['city'] ?? '';
                $data['state'] = $addr['state'] ?? '';
                $data['pincode'] = $addr['zip'] ?? '';
            }
            
            if ($existing) {
                // Update existing client
                $setParts = [];
                $params = [];
                foreach ($data as $key => $value) {
                    $setParts[] = "$key = ?";
                    $params[] = $value;
                }
                $params[] = $existing['id'];
                
                if ($this->dryRun) {
                    $this->logDryRunChange('client', 'update', [
                        'id' => $existing['id'],
                        'name' => $bestName,
                        'zoho_contact_id' => $zohoContactId,
                        'changes' => $data
                    ]);
                } else {
                    dbExecute(
                        "UPDATE clients SET " . implode(', ', $setParts) . " WHERE id = ?",
                        $params
                    );
                }
                $this->stats['updated']++;
            } else {
                // Create new client
                $data['created_at'] = date('Y-m-d H:i:s');
                
                if ($this->dryRun) {
                    $this->logDryRunChange('client', 'create', [
                        'name' => $bestName,
                        'zoho_contact_id' => $zohoContactId,
                        'data' => $data
                    ]);
                } else {
                    $columns = implode(', ', array_keys($data));
                    $placeholders = implode(', ', array_fill(0, count($data), '?'));
                    
                    dbExecute(
                        "INSERT INTO clients ($columns) VALUES ($placeholders)",
                        array_values($data)
                    );
                }
                $this->stats['created']++;
            }
            
        } catch (Exception $e) {
            $this->stats['failed']++;
            $this->stats['errors'][] = "Contact {$contact['contact_id']}: " . $e->getMessage();
        }
    }
    
    /**
     * Map GST treatment to entity type
     */
    private function mapGstTreatmentToEntityType(string $gstTreatment): ?string {
        $map = [
            'business_gst' => 'PVT_LTD',
            'business_none' => 'PROPRIETORSHIP',
            'consumer' => null,
            'overseas' => null,
            'sez' => 'PVT_LTD'
        ];
        return $map[strtolower($gstTreatment)] ?? null;
    }
    
    /**
     * Find or create client for Zoho customer
     */
    private function findOrCreateClient(string $zohoCustomerId, string $customerName): ?int {
        // First try to find by Zoho ID
        $client = dbFetchOne(
            "SELECT id FROM clients WHERE zoho_contact_id = ?",
            [$zohoCustomerId]
        );
        
        if ($client) {
            return $client['id'];
        }
        
        // Try to match by name
        $client = dbFetchOne(
            "SELECT id FROM clients WHERE name = ? AND deleted_at IS NULL",
            [$customerName]
        );
        
        if ($client) {
            // Link the existing client to Zoho
            dbExecute(
                "UPDATE clients SET zoho_contact_id = ?, zoho_customer_name = ? WHERE id = ?",
                [$zohoCustomerId, $customerName, $client['id']]
            );
            return $client['id'];
        }
        
        // Create new client
        dbExecute(
            "INSERT INTO clients (name, zoho_contact_id, zoho_customer_name, status, created_at) VALUES (?, ?, ?, 'ACTIVE', NOW())",
            [$customerName, $zohoCustomerId, $customerName]
        );
        
        return dbLastInsertId();
    }
    
    // =========================================================
    // ESTIMATES SYNC
    // =========================================================
    
    /**
     * Sync estimates from Zoho to Patron quotations
     */
    public function syncEstimates(string $triggeredBy = 'SYSTEM', bool $fullSync = false): array {
        $this->startLog('ESTIMATES', $triggeredBy);
        
        try {
            $lastSync = $fullSync ? '' : $this->zoho->getSetting('last_sync_estimates');
            $page = 1;
            $hasMore = true;
            
            while ($hasMore) {
                $response = $this->zoho->getEstimates($page, $lastSync);
                
                if (!$response || !isset($response['estimates'])) {
                    throw new Exception($this->zoho->getLastError() ?? 'Failed to fetch estimates');
                }
                
                $estimates = $response['estimates'];
                $this->stats['fetched'] += count($estimates);
                
                foreach ($estimates as $estimate) {
                    $this->processEstimate($estimate);
                }
                
                $pageContext = $response['page_context'] ?? [];
                $hasMore = ($pageContext['has_more_page'] ?? false) && $page < 50;
                $page++;
            }
            
            $this->zoho->saveSetting('last_sync_estimates', date('Y-m-d\TH:i:sP'));
            $this->completeLog('SUCCESS');
            
            return ['success' => true, 'stats' => $this->stats];
            
        } catch (Exception $e) {
            $this->completeLog('FAILED', $e->getMessage());
            return ['success' => false, 'error' => $e->getMessage(), 'stats' => $this->stats];
        }
    }
    
    /**
     * Process single estimate
     */
    private function processEstimate(array $estimate): void {
        try {
            $zohoEstimateId = $estimate['estimate_id'];
            $zohoCustomerId = $estimate['customer_id'];
            
            // Find client by Zoho contact ID
            $client = dbFetchOne(
                "SELECT id FROM clients WHERE zoho_contact_id = ?",
                [$zohoCustomerId]
            );
            $clientId = $client['id'] ?? null;
            
            // Check if quotation exists
            $existing = dbFetchOne(
                "SELECT id FROM quotations WHERE zoho_estimate_id = ?",
                [$zohoEstimateId]
            );
            
            $data = [
                'client_id' => $clientId,
                'zoho_estimate_id' => $zohoEstimateId,
                'zoho_estimate_number' => $estimate['estimate_number'] ?? '',
                'reference_number' => $estimate['reference_number'] ?? '',
                'status' => strtolower($estimate['status'] ?? 'draft'),
                'estimate_date' => $estimate['date'] ?? null,
                'expiry_date' => $estimate['expiry_date'] ?? null,
                'currency_code' => $estimate['currency_code'] ?? 'INR',
                'currency_symbol' => $estimate['currency_symbol'] ?? '₹',
                'subtotal' => $estimate['sub_total'] ?? 0,
                'discount_total' => $estimate['discount_total'] ?? 0,
                'tax_total' => $estimate['tax_total'] ?? 0,
                'adjustment' => $estimate['adjustment'] ?? 0,
                'shipping_charge' => $estimate['shipping_charge'] ?? 0,
                'total' => $estimate['total'] ?? 0,
                'customer_notes' => $estimate['notes'] ?? '',
                'terms_conditions' => $estimate['terms'] ?? '',
                'zoho_customer_id' => $zohoCustomerId,
                'zoho_customer_name' => $estimate['customer_name'] ?? '',
                'zoho_status' => $estimate['status'] ?? '',
                'zoho_created_time' => $estimate['created_time'] ?? null,
                'zoho_last_modified' => $estimate['last_modified_time'] ?? null,
                'synced_at' => date('Y-m-d H:i:s')
            ];
            
            if ($existing) {
                // Update
                $setParts = [];
                $params = [];
                foreach ($data as $key => $value) {
                    $setParts[] = "$key = ?";
                    $params[] = $value;
                }
                $params[] = $existing['id'];
                
                dbExecute(
                    "UPDATE quotations SET " . implode(', ', $setParts) . " WHERE id = ?",
                    $params
                );
                $quotationId = $existing['id'];
                $this->stats['updated']++;
            } else {
                // Insert
                $columns = implode(', ', array_keys($data));
                $placeholders = implode(', ', array_fill(0, count($data), '?'));
                
                dbExecute(
                    "INSERT INTO quotations ($columns) VALUES ($placeholders)",
                    array_values($data)
                );
                $quotationId = dbLastInsertId();
                $this->stats['created']++;
            }
            
            // Sync line items if we have full estimate data
            if (isset($estimate['line_items'])) {
                $this->syncEstimateLineItems($quotationId, $estimate['line_items']);
            }
            
        } catch (Exception $e) {
            $this->stats['failed']++;
            $this->stats['errors'][] = "Estimate {$estimate['estimate_id']}: " . $e->getMessage();
        }
    }
    
    /**
     * Sync estimate line items
     */
    private function syncEstimateLineItems(int $quotationId, array $lineItems): void {
        // Delete existing items
        dbExecute("DELETE FROM quotation_items WHERE quotation_id = ?", [$quotationId]);
        
        foreach ($lineItems as $item) {
            dbExecute(
                "INSERT INTO quotation_items (
                    quotation_id, zoho_line_item_id, zoho_item_id, item_name, item_description,
                    hsn_or_sac, quantity, unit, rate, discount_percent, discount_amount,
                    tax_id, tax_name, tax_percentage, item_total
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                [
                    $quotationId,
                    $item['line_item_id'] ?? null,
                    $item['item_id'] ?? null,
                    $item['name'] ?? '',
                    $item['description'] ?? '',
                    $item['hsn_or_sac'] ?? '',
                    $item['quantity'] ?? 1,
                    $item['unit'] ?? '',
                    $item['rate'] ?? 0,
                    $item['discount_percentage'] ?? 0,
                    $item['discount_amount'] ?? 0,
                    $item['tax_id'] ?? null,
                    $item['tax_name'] ?? '',
                    $item['tax_percentage'] ?? 0,
                    $item['item_total'] ?? 0
                ]
            );
        }
    }
    
    // =========================================================
    // INVOICES SYNC
    // =========================================================
    
    /**
     * Sync invoices from Zoho to Patron
     * NOTE: VOID invoices are excluded
     */
    public function syncInvoices(string $triggeredBy = 'SYSTEM', bool $fullSync = false): array {
        $this->startLog('INVOICES', $triggeredBy);
        
        try {
            $lastSync = $fullSync ? '' : $this->zoho->getSetting('last_sync_invoices');
            $page = 1;
            $hasMore = true;
            
            while ($hasMore) {
                $response = $this->zoho->getInvoices($page, $lastSync);
                
                if (!$response || !isset($response['invoices'])) {
                    throw new Exception($this->zoho->getLastError() ?? 'Failed to fetch invoices');
                }
                
                $invoices = $response['invoices'];
                $this->stats['fetched'] += count($invoices);
                
                foreach ($invoices as $invoice) {
                    $this->processInvoice($invoice);
                }
                
                $pageContext = $response['page_context'] ?? [];
                $hasMore = ($pageContext['has_more_page'] ?? false) && $page < 50;
                $page++;
            }
            
            $this->zoho->saveSetting('last_sync_invoices', date('Y-m-d\TH:i:sP'));
            $this->completeLog('SUCCESS');
            
            return ['success' => true, 'stats' => $this->stats];
            
        } catch (Exception $e) {
            $this->completeLog('FAILED', $e->getMessage());
            return ['success' => false, 'error' => $e->getMessage(), 'stats' => $this->stats];
        }
    }
    
    /**
     * Process single invoice
     * UPDATED: Skips VOID invoices and deletes them if they exist locally
     */
    private function processInvoice(array $invoice): void {
        try {
            $zohoInvoiceId = $invoice['invoice_id'];
            $zohoCustomerId = $invoice['customer_id'];
            $invoiceStatus = strtolower($invoice['status'] ?? 'draft');
            
            // ========================================
            // SKIP VOID INVOICES
            // ========================================
            if (in_array($invoiceStatus, $this->excludeInvoiceStatuses)) {
                // If a void invoice exists locally, delete it
                $existing = dbFetchOne(
                    "SELECT id FROM invoices WHERE zoho_invoice_id = ?",
                    [$zohoInvoiceId]
                );
                
                if ($existing) {
                    // Delete line items first
                    dbExecute("DELETE FROM invoice_items WHERE invoice_id = ?", [$existing['id']]);
                    // Delete invoice
                    dbExecute("DELETE FROM invoices WHERE id = ?", [$existing['id']]);
                }
                
                $this->stats['skipped']++;
                return; // Skip this invoice
            }
            // ========================================
            
            // Find client
            $client = dbFetchOne(
                "SELECT id FROM clients WHERE zoho_contact_id = ?",
                [$zohoCustomerId]
            );
            $clientId = $client['id'] ?? null;
            
            // Find linked quotation
            $quotationId = null;
            if (!empty($invoice['estimate_id'])) {
                $quotation = dbFetchOne(
                    "SELECT id FROM quotations WHERE zoho_estimate_id = ?",
                    [$invoice['estimate_id']]
                );
                $quotationId = $quotation['id'] ?? null;
            }
            
            // Check if invoice exists
            $existing = dbFetchOne(
                "SELECT id FROM invoices WHERE zoho_invoice_id = ?",
                [$zohoInvoiceId]
            );
            
            // Map Zoho status to our status
            $status = $this->mapInvoiceStatus($invoice['status'] ?? 'draft');
            
            $data = [
                'client_id' => $clientId,
                'quotation_id' => $quotationId,
                'zoho_invoice_id' => $zohoInvoiceId,
                'zoho_invoice_number' => $invoice['invoice_number'] ?? '',
                'reference_number' => $invoice['reference_number'] ?? '',
                'status' => $status,
                'invoice_date' => $invoice['date'] ?? null,
                'due_date' => $invoice['due_date'] ?? null,
                'currency_code' => $invoice['currency_code'] ?? 'INR',
                'currency_symbol' => $invoice['currency_symbol'] ?? '₹',
                'subtotal' => $invoice['sub_total'] ?? 0,
                'discount_total' => $invoice['discount_total'] ?? 0,
                'tax_total' => $invoice['tax_total'] ?? 0,
                'adjustment' => $invoice['adjustment'] ?? 0,
                'shipping_charge' => $invoice['shipping_charge'] ?? 0,
                'total' => $invoice['total'] ?? 0,
                'payment_made' => $invoice['payment_made'] ?? 0,
                'credits_applied' => $invoice['credits_applied'] ?? 0,
                'write_off_amount' => $invoice['write_off_amount'] ?? 0,
                'balance_due' => $invoice['balance'] ?? 0,
                'customer_notes' => $invoice['notes'] ?? '',
                'terms_conditions' => $invoice['terms'] ?? '',
                'payment_terms' => $invoice['payment_terms'] ?? null,
                'payment_terms_label' => $invoice['payment_terms_label'] ?? '',
                'zoho_customer_id' => $zohoCustomerId,
                'zoho_customer_name' => $invoice['customer_name'] ?? '',
                'zoho_estimate_id' => $invoice['estimate_id'] ?? null,
                'zoho_status' => $invoice['status'] ?? '',
                'zoho_created_time' => $invoice['created_time'] ?? null,
                'zoho_last_modified' => $invoice['last_modified_time'] ?? null,
                'synced_at' => date('Y-m-d H:i:s')
            ];
            
            if ($existing) {
                $setParts = [];
                $params = [];
                foreach ($data as $key => $value) {
                    $setParts[] = "$key = ?";
                    $params[] = $value;
                }
                $params[] = $existing['id'];
                
                dbExecute(
                    "UPDATE invoices SET " . implode(', ', $setParts) . " WHERE id = ?",
                    $params
                );
                $invoiceId = $existing['id'];
                $this->stats['updated']++;
            } else {
                $columns = implode(', ', array_keys($data));
                $placeholders = implode(', ', array_fill(0, count($data), '?'));
                
                dbExecute(
                    "INSERT INTO invoices ($columns) VALUES ($placeholders)",
                    array_values($data)
                );
                $invoiceId = dbLastInsertId();
                $this->stats['created']++;
            }
            
            // Sync line items
            if (isset($invoice['line_items'])) {
                $this->syncInvoiceLineItems($invoiceId, $invoice['line_items']);
            }
            
        } catch (Exception $e) {
            $this->stats['failed']++;
            $this->stats['errors'][] = "Invoice {$invoice['invoice_id']}: " . $e->getMessage();
        }
    }
    
    /**
     * Map Zoho invoice status to our status
     */
    private function mapInvoiceStatus(string $zohoStatus): string {
        $map = [
            'draft' => 'draft',
            'sent' => 'sent',
            'viewed' => 'viewed',
            'overdue' => 'overdue',
            'partially_paid' => 'partially_paid',
            'paid' => 'paid',
            'void' => 'void'
        ];
        return $map[strtolower($zohoStatus)] ?? 'draft';
    }
    
    /**
     * Sync invoice line items
     */
    private function syncInvoiceLineItems(int $invoiceId, array $lineItems): void {
        dbExecute("DELETE FROM invoice_items WHERE invoice_id = ?", [$invoiceId]);
        
        foreach ($lineItems as $item) {
            dbExecute(
                "INSERT INTO invoice_items (
                    invoice_id, zoho_line_item_id, zoho_item_id, item_name, item_description,
                    hsn_or_sac, quantity, unit, rate, discount_percent, discount_amount,
                    tax_id, tax_name, tax_percentage, item_total
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                [
                    $invoiceId,
                    $item['line_item_id'] ?? null,
                    $item['item_id'] ?? null,
                    $item['name'] ?? '',
                    $item['description'] ?? '',
                    $item['hsn_or_sac'] ?? '',
                    $item['quantity'] ?? 1,
                    $item['unit'] ?? '',
                    $item['rate'] ?? 0,
                    $item['discount_percentage'] ?? 0,
                    $item['discount_amount'] ?? 0,
                    $item['tax_id'] ?? null,
                    $item['tax_name'] ?? '',
                    $item['tax_percentage'] ?? 0,
                    $item['item_total'] ?? 0
                ]
            );
        }
    }
    
    // =========================================================
    // PAYMENTS SYNC
    // =========================================================
    
    /**
     * Sync payments from Zoho to Patron
     */
    public function syncPayments(string $triggeredBy = 'SYSTEM', bool $fullSync = false): array {
        $this->startLog('PAYMENTS', $triggeredBy);
        
        try {
            $lastSync = $fullSync ? '' : $this->zoho->getSetting('last_sync_payments');
            $page = 1;
            $hasMore = true;
            
            while ($hasMore) {
                $response = $this->zoho->getPayments($page, $lastSync);
                
                if (!$response || !isset($response['customerpayments'])) {
                    throw new Exception($this->zoho->getLastError() ?? 'Failed to fetch payments');
                }
                
                $payments = $response['customerpayments'];
                $this->stats['fetched'] += count($payments);
                
                foreach ($payments as $payment) {
                    $this->processPayment($payment);
                }
                
                $pageContext = $response['page_context'] ?? [];
                $hasMore = ($pageContext['has_more_page'] ?? false) && $page < 50;
                $page++;
            }
            
            $this->zoho->saveSetting('last_sync_payments', date('Y-m-d\TH:i:sP'));
            $this->completeLog('SUCCESS');
            
            return ['success' => true, 'stats' => $this->stats];
            
        } catch (Exception $e) {
            $this->completeLog('FAILED', $e->getMessage());
            return ['success' => false, 'error' => $e->getMessage(), 'stats' => $this->stats];
        }
    }
    
    /**
     * Process single payment
     */
    private function processPayment(array $payment): void {
        try {
            $zohoPaymentId = $payment['payment_id'];
            $zohoCustomerId = $payment['customer_id'];
            
            // Find client
            $client = dbFetchOne(
                "SELECT id FROM clients WHERE zoho_contact_id = ?",
                [$zohoCustomerId]
            );
            $clientId = $client['id'] ?? null;
            
            // Find primary invoice (first one if multiple)
            $invoiceId = null;
            $invoiceIds = [];
            if (!empty($payment['invoices'])) {
                foreach ($payment['invoices'] as $inv) {
                    $invoiceIds[] = $inv['invoice_id'];
                }
                if (!empty($invoiceIds)) {
                    $invoice = dbFetchOne(
                        "SELECT id FROM invoices WHERE zoho_invoice_id = ?",
                        [$invoiceIds[0]]
                    );
                    $invoiceId = $invoice['id'] ?? null;
                }
            }
            
            // Check if payment exists
            $existing = dbFetchOne(
                "SELECT id FROM payments WHERE zoho_payment_id = ?",
                [$zohoPaymentId]
            );
            
            $data = [
                'client_id' => $clientId,
                'invoice_id' => $invoiceId,
                'zoho_payment_id' => $zohoPaymentId,
                'zoho_payment_number' => $payment['payment_number'] ?? '',
                'payment_date' => $payment['date'] ?? null,
                'amount' => $payment['amount'] ?? 0,
                'bank_charges' => $payment['bank_charges'] ?? 0,
                'unused_amount' => $payment['unused_amount'] ?? 0,
                'payment_mode' => $payment['payment_mode'] ?? '',
                'reference_number' => $payment['reference_number'] ?? '',
                'description' => $payment['description'] ?? '',
                'zoho_customer_id' => $zohoCustomerId,
                'zoho_customer_name' => $payment['customer_name'] ?? '',
                'zoho_invoice_ids' => json_encode($invoiceIds),
                'zoho_created_time' => $payment['created_time'] ?? null,
                'zoho_last_modified' => $payment['last_modified_time'] ?? null,
                'synced_at' => date('Y-m-d H:i:s')
            ];
            
            if ($existing) {
                $setParts = [];
                $params = [];
                foreach ($data as $key => $value) {
                    $setParts[] = "$key = ?";
                    $params[] = $value;
                }
                $params[] = $existing['id'];
                
                dbExecute(
                    "UPDATE payments SET " . implode(', ', $setParts) . " WHERE id = ?",
                    $params
                );
                $paymentId = $existing['id'];
                $this->stats['updated']++;
            } else {
                $columns = implode(', ', array_keys($data));
                $placeholders = implode(', ', array_fill(0, count($data), '?'));
                
                dbExecute(
                    "INSERT INTO payments ($columns) VALUES ($placeholders)",
                    array_values($data)
                );
                $paymentId = dbLastInsertId();
                $this->stats['created']++;
            }
            
            // Sync payment-invoice allocations
            if (!empty($payment['invoices'])) {
                $this->syncPaymentInvoices($paymentId, $payment['invoices']);
            }
            
        } catch (Exception $e) {
            $this->stats['failed']++;
            $this->stats['errors'][] = "Payment {$payment['payment_id']}: " . $e->getMessage();
        }
    }
    
    /**
     * Sync payment to invoice allocations
     */
    private function syncPaymentInvoices(int $paymentId, array $invoices): void {
        dbExecute("DELETE FROM payment_invoices WHERE payment_id = ?", [$paymentId]);
        
        foreach ($invoices as $inv) {
            $invoice = dbFetchOne(
                "SELECT id FROM invoices WHERE zoho_invoice_id = ?",
                [$inv['invoice_id']]
            );
            
            dbExecute(
                "INSERT INTO payment_invoices (payment_id, invoice_id, zoho_invoice_id, amount_applied) 
                 VALUES (?, ?, ?, ?)",
                [
                    $paymentId,
                    $invoice['id'] ?? null,
                    $inv['invoice_id'],
                    $inv['amount_applied'] ?? 0
                ]
            );
        }
    }
    
    // =========================================================
    // FULL SYNC
    // =========================================================
    
    /**
     * Run full sync of all data types
     */
    public function syncAll(string $triggeredBy = 'SYSTEM', bool $fullSync = false): array {
        $results = [];
        
        // Ensure token is valid for at least 10 minutes before starting
        if (!$this->dryRun && !$this->ensureTokenReady(10)) {
            return [
                'success' => false,
                'error' => 'Failed to ensure valid token for sync',
                'token_status' => $this->getTokenStatus()
            ];
        }
        
        // Sync in order: Contacts → Estimates → Invoices → Payments
        $results['contacts'] = $this->syncContacts($triggeredBy, $fullSync);
        $results['estimates'] = $this->syncEstimates($triggeredBy, $fullSync);
        $results['invoices'] = $this->syncInvoices($triggeredBy, $fullSync);
        $results['payments'] = $this->syncPayments($triggeredBy, $fullSync);
        
        // Final pass: fix any remaining unlinked records (skip in dry run)
        if (!$this->dryRun) {
            $this->fixClientLinkages();
            $this->apply15MonthRuleToAllClients();
        }
        
        $allSuccess = $results['contacts']['success'] && 
                      $results['estimates']['success'] && 
                      $results['invoices']['success'] && 
                      $results['payments']['success'];
        
        $response = [
            'success' => $allSuccess,
            'results' => $results
        ];
        
        // Include dry run changes if in dry run mode
        if ($this->dryRun) {
            $response['dry_run'] = true;
            $response['changes'] = $this->getDryRunChanges();
            $response['summary'] = $this->getDryRunSummary();
        }
        
        return $response;
    }
    
    /**
     * Run a dry run sync to preview changes
     * 
     * @param string $triggeredBy Who triggered the sync
     * @param bool $fullSync Full sync or incremental
     * @return array Preview of what would change
     */
    public function dryRunSync(string $triggeredBy = 'PREVIEW', bool $fullSync = false): array {
        $this->setDryRun(true);
        $result = $this->syncAll($triggeredBy, $fullSync);
        $this->setDryRun(false);
        return $result;
    }
    
    /**
     * Get summary of dry run changes
     */
    private function getDryRunSummary(): array {
        $summary = [
            'client' => ['create' => 0, 'update' => 0],
            'invoice' => ['create' => 0, 'update' => 0],
            'estimate' => ['create' => 0, 'update' => 0],
            'payment' => ['create' => 0, 'update' => 0],
            'total_changes' => 0
        ];
        
        foreach ($this->dryRunChanges as $change) {
            $type = $change['type'];
            $action = $change['action'];
            if (isset($summary[$type][$action])) {
                $summary[$type][$action]++;
                $summary['total_changes']++;
            }
        }
        
        return $summary;
    }
    
    /**
     * Get sync statistics
     */
    public function getSyncStats(): array {
        return [
            'last_sync_contacts' => $this->zoho->getSetting('last_sync_contacts'),
            'last_sync_estimates' => $this->zoho->getSetting('last_sync_estimates'),
            'last_sync_invoices' => $this->zoho->getSetting('last_sync_invoices'),
            'last_sync_payments' => $this->zoho->getSetting('last_sync_payments'),
            'totals' => dbFetchOne("
                SELECT 
                    (SELECT COUNT(*) FROM clients WHERE zoho_contact_id IS NOT NULL) as synced_clients,
                    (SELECT COUNT(*) FROM quotations) as quotations,
                    (SELECT COUNT(*) FROM invoices) as invoices,
                    (SELECT COUNT(*) FROM payments) as payments
            ")
        ];
    }
    
    /**
     * Delete all VOID invoices from local database
     * Run this once to clean up existing void invoices
     */
    public function cleanupVoidInvoices(): array {
        try {
            // Delete line items first
            $deletedItems = dbExecute("DELETE FROM invoice_items WHERE invoice_id IN (SELECT id FROM invoices WHERE LOWER(status) = 'void')");
            
            // Delete void invoices
            $deletedInvoices = dbExecute("DELETE FROM invoices WHERE LOWER(status) = 'void'");
            
            return [
                'success' => true,
                'deleted_invoices' => $deletedInvoices,
                'message' => "Deleted void invoices and their line items"
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}
