<?php
/**
 * PATRON - Sync Invoice Line Items from Zoho Books
 * This syncs line items for invoices that don't have items yet
 * 
 * Run via cron or manually from admin panel
 * Usage: php zoho_sync_invoice_items.php [--limit=50]
 */

require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/zoho_api.php';

// Parse command line args or use defaults
$limit = 50;
foreach ($argv ?? [] as $arg) {
    if (strpos($arg, '--limit=') === 0) {
        $limit = (int)substr($arg, 8);
    }
}

class ZohoInvoiceItemsSync {
    private $api;
    private $syncedCount = 0;
    private $errorCount = 0;
    private $errors = [];
    
    public function __construct() {
        $this->api = new ZohoAPI();
    }
    
    public function syncInvoiceItems($limit = 50) {
        echo "Starting invoice items sync...\n";
        
        // Get invoices that need items synced
        $invoices = dbFetchAll("
            SELECT id, zoho_invoice_id, zoho_invoice_number 
            FROM invoices 
            WHERE zoho_invoice_id IS NOT NULL 
            AND (items_synced = 0 OR items_synced IS NULL)
            ORDER BY invoice_date DESC
            LIMIT ?
        ", [$limit]);
        
        if (empty($invoices)) {
            echo "No invoices need items sync.\n";
            return;
        }
        
        echo "Found " . count($invoices) . " invoices to sync.\n";
        
        foreach ($invoices as $invoice) {
            $this->syncSingleInvoice($invoice);
            usleep(200000); // 200ms delay to avoid rate limits
        }
        
        echo "\n=== Sync Complete ===\n";
        echo "Synced: {$this->syncedCount}\n";
        echo "Errors: {$this->errorCount}\n";
        
        if (!empty($this->errors)) {
            echo "\nErrors:\n";
            foreach ($this->errors as $err) {
                echo "- $err\n";
            }
        }
    }
    
    private function syncSingleInvoice($invoice) {
        try {
            echo "Syncing items for {$invoice['zoho_invoice_number']}... ";
            
            // Fetch invoice details from Zoho
            $zohoInvoice = $this->api->getInvoice($invoice['zoho_invoice_id']);
            
            if (!$zohoInvoice || empty($zohoInvoice['line_items'])) {
                echo "No line items found.\n";
                // Mark as synced anyway
                dbExecute("UPDATE invoices SET items_synced = 1 WHERE id = ?", [$invoice['id']]);
                return;
            }
            
            // Delete existing items (in case of re-sync)
            dbExecute("DELETE FROM invoice_items WHERE invoice_id = ?", [$invoice['id']]);
            
            // Insert line items
            foreach ($zohoInvoice['line_items'] as $item) {
                $serviceId = $this->findServiceId($item['item_id'] ?? null, $item['name'] ?? '');
                
                dbExecute("
                    INSERT INTO invoice_items 
                    (invoice_id, zoho_line_item_id, zoho_item_id, service_id, 
                     item_name, item_description, hsn_sac_code, quantity, unit,
                     rate, discount_percent, discount_amount, tax_id, tax_name,
                     tax_percentage, tax_amount, item_total)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                ", [
                    $invoice['id'],
                    $item['line_item_id'] ?? null,
                    $item['item_id'] ?? null,
                    $serviceId,
                    $item['name'] ?? '',
                    $item['description'] ?? '',
                    $item['hsn_or_sac'] ?? null,
                    $item['quantity'] ?? 1,
                    $item['unit'] ?? null,
                    $item['rate'] ?? 0,
                    $item['discount_percentage'] ?? 0,
                    $item['discount_amount'] ?? 0,
                    $item['tax_id'] ?? null,
                    $item['tax_name'] ?? null,
                    $item['tax_percentage'] ?? 0,
                    $item['tax_amount'] ?? 0,
                    $item['item_total'] ?? 0
                ]);
            }
            
            // Mark invoice as items_synced
            dbExecute("UPDATE invoices SET items_synced = 1 WHERE id = ?", [$invoice['id']]);
            
            echo "OK (" . count($zohoInvoice['line_items']) . " items)\n";
            $this->syncedCount++;
            
        } catch (Exception $e) {
            echo "ERROR: " . $e->getMessage() . "\n";
            $this->errorCount++;
            $this->errors[] = "{$invoice['zoho_invoice_number']}: " . $e->getMessage();
        }
    }
    
    private function findServiceId($zohoItemId, $itemName) {
        if (!$zohoItemId) return null;
        
        // Check zoho_service_mapping table
        $mapping = dbFetchOne("
            SELECT service_id FROM zoho_service_mapping 
            WHERE zoho_item_id = ? AND is_active = 1
        ", [$zohoItemId]);
        
        if ($mapping && $mapping['service_id']) {
            return $mapping['service_id'];
        }
        
        // Try to match by name
        $service = dbFetchOne("
            SELECT id FROM services 
            WHERE LOWER(name) LIKE LOWER(?) AND deleted_at IS NULL
            LIMIT 1
        ", ['%' . $itemName . '%']);
        
        return $service ? $service['id'] : null;
    }
    
    public function syncQuotationItems($limit = 50) {
        echo "Starting quotation items sync...\n";
        
        $quotations = dbFetchAll("
            SELECT id, zoho_estimate_id, zoho_estimate_number 
            FROM quotations 
            WHERE zoho_estimate_id IS NOT NULL 
            AND (items_synced = 0 OR items_synced IS NULL)
            ORDER BY estimate_date DESC
            LIMIT ?
        ", [$limit]);
        
        if (empty($quotations)) {
            echo "No quotations need items sync.\n";
            return;
        }
        
        echo "Found " . count($quotations) . " quotations to sync.\n";
        
        foreach ($quotations as $quotation) {
            $this->syncSingleQuotation($quotation);
            usleep(200000);
        }
    }
    
    private function syncSingleQuotation($quotation) {
        try {
            echo "Syncing items for {$quotation['zoho_estimate_number']}... ";
            
            $zohoEstimate = $this->api->getEstimate($quotation['zoho_estimate_id']);
            
            if (!$zohoEstimate || empty($zohoEstimate['line_items'])) {
                echo "No line items found.\n";
                dbExecute("UPDATE quotations SET items_synced = 1 WHERE id = ?", [$quotation['id']]);
                return;
            }
            
            dbExecute("DELETE FROM quotation_items WHERE quotation_id = ?", [$quotation['id']]);
            
            foreach ($zohoEstimate['line_items'] as $item) {
                $serviceId = $this->findServiceId($item['item_id'] ?? null, $item['name'] ?? '');
                
                dbExecute("
                    INSERT INTO quotation_items 
                    (quotation_id, zoho_line_item_id, zoho_item_id, service_id, 
                     item_name, item_description, hsn_sac_code, quantity, unit,
                     rate, discount_percent, discount_amount, tax_id, tax_name,
                     tax_percentage, tax_amount, item_total)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                ", [
                    $quotation['id'],
                    $item['line_item_id'] ?? null,
                    $item['item_id'] ?? null,
                    $serviceId,
                    $item['name'] ?? '',
                    $item['description'] ?? '',
                    $item['hsn_or_sac'] ?? null,
                    $item['quantity'] ?? 1,
                    $item['unit'] ?? null,
                    $item['rate'] ?? 0,
                    $item['discount_percentage'] ?? 0,
                    $item['discount_amount'] ?? 0,
                    $item['tax_id'] ?? null,
                    $item['tax_name'] ?? null,
                    $item['tax_percentage'] ?? 0,
                    $item['tax_amount'] ?? 0,
                    $item['item_total'] ?? 0
                ]);
            }
            
            dbExecute("UPDATE quotations SET items_synced = 1 WHERE id = ?", [$quotation['id']]);
            
            echo "OK (" . count($zohoEstimate['line_items']) . " items)\n";
            $this->syncedCount++;
            
        } catch (Exception $e) {
            echo "ERROR: " . $e->getMessage() . "\n";
            $this->errorCount++;
            $this->errors[] = "{$quotation['zoho_estimate_number']}: " . $e->getMessage();
        }
    }
}

// Run if called directly
if (php_sapi_name() === 'cli') {
    $sync = new ZohoInvoiceItemsSync();
    $sync->syncInvoiceItems($limit);
    $sync->syncQuotationItems($limit);
}
