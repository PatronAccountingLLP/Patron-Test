<?php
/**
 * PATRON - Zoho Books API Wrapper
 * Handles OAuth, API calls, and token refresh
 * 
 * LOCATION: /patron/includes/zoho_api.php
 */

// Ensure db.php is loaded (safe to include multiple times due to require_once)
if (!function_exists('dbFetchAll')) {
    require_once __DIR__ . '/db.php';
}

class ZohoBooks {
    private $clientId;
    private $clientSecret;
    private $redirectUri;
    private $organizationId;
    private $accessToken;
    private $refreshToken;
    private $tokenExpiresAt;
    private $datacenter;
    
    // API Base URLs by datacenter
    private $apiUrls = [
        'in' => 'https://www.zohoapis.in/books/v3',
        'com' => 'https://www.zohoapis.com/books/v3',
        'eu' => 'https://www.zohoapis.eu/books/v3',
        'au' => 'https://www.zohoapis.com.au/books/v3'
    ];
    
    private $authUrls = [
        'in' => 'https://accounts.zoho.in/oauth/v2',
        'com' => 'https://accounts.zoho.com/oauth/v2',
        'eu' => 'https://accounts.zoho.eu/oauth/v2',
        'au' => 'https://accounts.zoho.com.au/oauth/v2'
    ];
    
    private $lastError = null;
    private $lastResponse = null;
    
    /**
     * Constructor - Load settings from database
     */
    public function __construct() {
        $this->loadSettings();
    }
    
    /**
     * Load settings from database
     */
    private function loadSettings() {
        try {
            $settings = dbFetchAll("SELECT setting_key, setting_value FROM zoho_settings");
            $config = [];
            if ($settings) {
                foreach ($settings as $s) {
                    $config[$s['setting_key']] = $s['setting_value'];
                }
            }
            
            $this->clientId = $config['client_id'] ?? '';
            $this->clientSecret = $config['client_secret'] ?? '';
            $this->redirectUri = $config['redirect_uri'] ?? '';
            $this->organizationId = $config['organization_id'] ?? '';
            $this->accessToken = $config['access_token'] ?? '';
            $this->refreshToken = $config['refresh_token'] ?? '';
            $this->tokenExpiresAt = $config['token_expires_at'] ?? '';
            $this->datacenter = $config['datacenter'] ?? 'in';
        } catch (Exception $e) {
            $this->lastError = 'Failed to load settings: ' . $e->getMessage();
        }
    }
    
    /**
     * Check if integration is configured
     */
    public function isConfigured(): bool {
        return !empty($this->clientId) && !empty($this->clientSecret) && !empty($this->organizationId);
    }
    
    /**
     * Check if connected (has valid tokens)
     */
    public function isConnected(): bool {
        return !empty($this->accessToken) && !empty($this->refreshToken);
    }
    
    /**
     * Get OAuth authorization URL
     */
    public function getAuthorizationUrl(): string {
        $baseUrl = $this->authUrls[$this->datacenter] ?? $this->authUrls['in'];
        
        $params = [
            'scope' => 'ZohoBooks.fullaccess.all',
            'client_id' => $this->clientId,
            'response_type' => 'code',
            'redirect_uri' => $this->redirectUri,
            'access_type' => 'offline',
            'prompt' => 'consent'
        ];
        
        return $baseUrl . '/auth?' . http_build_query($params);
    }
    
    /**
     * Exchange authorization code for tokens
     */
    public function exchangeCodeForTokens(string $code): array {
        $baseUrl = $this->authUrls[$this->datacenter] ?? $this->authUrls['in'];
        
        $params = [
            'grant_type' => 'authorization_code',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri' => $this->redirectUri,
            'code' => $code
        ];
        
        $response = $this->httpPost($baseUrl . '/token', $params, false);
        
        if (isset($response['access_token'])) {
            $this->accessToken = $response['access_token'];
            $this->refreshToken = $response['refresh_token'] ?? $this->refreshToken;
            $expiresIn = $response['expires_in'] ?? 3600;
            $this->tokenExpiresAt = date('Y-m-d H:i:s', time() + $expiresIn - 300); // 5 min buffer
            
            // Save tokens
            $this->saveSetting('access_token', $this->accessToken);
            $this->saveSetting('refresh_token', $this->refreshToken);
            $this->saveSetting('token_expires_at', $this->tokenExpiresAt);
            $this->saveSetting('is_connected', '1');
            
            return ['success' => true, 'message' => 'Connected successfully'];
        }
        
        $this->lastError = $response['error_description'] ?? $response['error'] ?? 'Token exchange failed';
        return ['success' => false, 'error' => $this->lastError];
    }
    
    /**
     * Refresh access token
     */
    public function refreshAccessToken(): bool {
        if (empty($this->refreshToken)) {
            $this->lastError = 'No refresh token available';
            return false;
        }
        
        $baseUrl = $this->authUrls[$this->datacenter] ?? $this->authUrls['in'];
        
        $params = [
            'grant_type' => 'refresh_token',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'refresh_token' => $this->refreshToken
        ];
        
        $response = $this->httpPost($baseUrl . '/token', $params, false);
        
        if (isset($response['access_token'])) {
            $this->accessToken = $response['access_token'];
            $expiresIn = $response['expires_in'] ?? 3600;
            $this->tokenExpiresAt = date('Y-m-d H:i:s', time() + $expiresIn - 300);
            
            $this->saveSetting('access_token', $this->accessToken);
            $this->saveSetting('token_expires_at', $this->tokenExpiresAt);
            
            return true;
        }
        
        $this->lastError = $response['error_description'] ?? $response['error'] ?? 'Token refresh failed';
        
        // If refresh token is invalid, mark as disconnected
        if (isset($response['error']) && in_array($response['error'], ['invalid_code', 'invalid_client'])) {
            $this->saveSetting('is_connected', '0');
        }
        
        return false;
    }
    
    /**
     * Ensure token is valid, refresh if needed
     */
    private function ensureValidToken(): bool {
        if (empty($this->accessToken)) {
            $this->lastError = 'No access token';
            return false;
        }
        
        // Check if token is expired or about to expire
        if (!empty($this->tokenExpiresAt) && strtotime($this->tokenExpiresAt) < time()) {
            return $this->refreshAccessToken();
        }
        
        return true;
    }
    
    /**
     * Check if token will expire within given minutes
     * Use this before starting large sync operations
     * 
     * @param int $minutes Minutes to check (default 5)
     * @return bool True if token will expire soon
     */
    public function willTokenExpireSoon(int $minutes = 5): bool {
        if (empty($this->tokenExpiresAt)) {
            return true; // No expiry set, assume needs refresh
        }
        
        $expiryTime = strtotime($this->tokenExpiresAt);
        $bufferTime = time() + ($minutes * 60);
        
        return $expiryTime <= $bufferTime;
    }
    
    /**
     * Ensure token is valid for at least X minutes
     * Call this before starting a large sync
     * 
     * @param int $minutes Minimum minutes of validity needed
     * @return bool True if token is valid for the duration
     */
    public function ensureTokenValidFor(int $minutes = 10): bool {
        if ($this->willTokenExpireSoon($minutes)) {
            return $this->refreshAccessToken();
        }
        return true;
    }
    
    /**
     * Get token expiry info for display
     * 
     * @return array Token status info
     */
    public function getTokenStatus(): array {
        if (empty($this->tokenExpiresAt)) {
            return [
                'valid' => false,
                'expires_at' => null,
                'expires_in_minutes' => 0,
                'status' => 'unknown'
            ];
        }
        
        $expiryTime = strtotime($this->tokenExpiresAt);
        $now = time();
        $minutesLeft = max(0, round(($expiryTime - $now) / 60));
        
        return [
            'valid' => $expiryTime > $now,
            'expires_at' => $this->tokenExpiresAt,
            'expires_in_minutes' => $minutesLeft,
            'status' => $expiryTime > $now 
                ? ($minutesLeft > 10 ? 'healthy' : 'expiring_soon')
                : 'expired'
        ];
    }
    
    /**
     * Make API request
     */
    private function apiRequest(string $method, string $endpoint, array $params = [], array $data = []): ?array {
        if (!$this->ensureValidToken()) {
            return null;
        }
        
        $baseUrl = $this->apiUrls[$this->datacenter] ?? $this->apiUrls['in'];
        $url = $baseUrl . $endpoint;
        
        // Add organization_id to params
        $params['organization_id'] = $this->organizationId;
        
        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }
        
        $headers = [
            'Authorization: Zoho-oauthtoken ' . $this->accessToken,
            'Content-Type: application/json'
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($method === 'PUT') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($method === 'DELETE') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        }
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            $this->lastError = 'cURL Error: ' . $error;
            return null;
        }
        
        $this->lastResponse = json_decode($response, true);
        
        // Handle token expiry
        if ($httpCode === 401) {
            if ($this->refreshAccessToken()) {
                // Retry the request once
                return $this->apiRequest($method, $endpoint, $params, $data);
            }
            return null;
        }
        
        if ($httpCode >= 400) {
            $this->lastError = $this->lastResponse['message'] ?? "HTTP Error: $httpCode";
            return null;
        }
        
        return $this->lastResponse;
    }
    
    /**
     * HTTP POST for OAuth (different from API requests)
     */
    private function httpPost(string $url, array $params, bool $isJson = true): array {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        if ($isJson) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        } else {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        }
        
        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            return ['error' => $error];
        }
        
        return json_decode($response, true) ?: ['error' => 'Invalid response'];
    }
    
    // =========================================================
    // CONTACTS API
    // =========================================================
    
    /**
     * Get all contacts with pagination
     */
    public function getContacts(int $page = 1, ?string $lastModified = ''): ?array {
        $params = [
            'page' => $page,
            'per_page' => 200,
            'sort_column' => 'last_modified_time',
            'sort_order' => 'A'
        ];
        
        if ($lastModified) {
            // Convert to Zoho-friendly format (YYYY-MM-DDTHH:MM:SS+HHMM - no colon in timezone)
            $timestamp = strtotime($lastModified);
            if ($timestamp) {
                $params['last_modified_time'] = date('Y-m-d\TH:i:sO', $timestamp);
            }
        }
        
        return $this->apiRequest('GET', '/contacts', $params);
    }
    
    /**
     * Get single contact
     */
    public function getContact(string $contactId): ?array {
        $result = $this->apiRequest('GET', "/contacts/$contactId");
        return $result['contact'] ?? $result;
    }
    
    /**
     * Search contacts by field
     */
    public function searchContacts(string $searchText): ?array {
        $params = ['search_text' => $searchText];
        return $this->apiRequest('GET', '/contacts', $params);
    }
    
    /**
     * Create a new contact in Zoho Books
     */
    public function createContact(array $contactData): ?array {
        return $this->apiRequest('POST', '/contacts', [], $contactData);
    }
    
    /**
     * Update existing contact in Zoho Books
     */
    public function updateContact(string $contactId, array $contactData): ?array {
        return $this->apiRequest('PUT', "/contacts/$contactId", [], $contactData);
    }
    
    /**
     * Mark contact as active in Zoho
     */
    public function markContactActive(string $contactId): ?array {
        return $this->apiRequest('POST', "/contacts/$contactId/active");
    }
    
    /**
     * Mark contact as inactive in Zoho
     */
    public function markContactInactive(string $contactId): ?array {
        return $this->apiRequest('POST', "/contacts/$contactId/inactive");
    }
    
    // =========================================================
    // ESTIMATES API
    // =========================================================
    
    /**
     * Get all estimates with pagination
     */
    public function getEstimates(int $page = 1, ?string $lastModified = '', string $status = ''): ?array {
        $params = [
            'page' => $page,
            'per_page' => 200,
            'sort_column' => 'last_modified_time',
            'sort_order' => 'A'
        ];
        
        if ($lastModified) {
            // Convert to Zoho-friendly format
            $timestamp = strtotime($lastModified);
            if ($timestamp) {
                $params['last_modified_time'] = date('Y-m-d\TH:i:sO', $timestamp);
            }
        }
        
        if ($status) {
            $params['status'] = $status;
        }
        
        return $this->apiRequest('GET', '/estimates', $params);
    }
    
    /**
     * Get single estimate with line items
     */
    public function getEstimate(string $estimateId): ?array {
        $result = $this->apiRequest('GET', "/estimates/$estimateId");
        return $result['estimate'] ?? $result;
    }
    
    /**
     * Get estimates for a customer
     */
    public function getCustomerEstimates(string $customerId): ?array {
        $params = ['customer_id' => $customerId];
        return $this->apiRequest('GET', '/estimates', $params);
    }
    
    /**
     * Get estimate PDF
     */
    public function getEstimatePdf(string $estimateId): ?string {
        if (!$this->ensureValidToken()) {
            return null;
        }
        
        $baseUrl = $this->apiUrls[$this->datacenter] ?? $this->apiUrls['in'];
        $url = $baseUrl . "/estimates/$estimateId?organization_id=" . $this->organizationId . "&accept=pdf";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Zoho-oauthtoken ' . $this->accessToken,
            'Accept: application/pdf'
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            $this->lastError = 'cURL Error: ' . $error;
            return null;
        }
        
        if ($httpCode === 401) {
            if ($this->refreshAccessToken()) {
                return $this->getEstimatePdf($estimateId);
            }
            return null;
        }
        
        if ($httpCode >= 400) {
            $this->lastError = "HTTP Error: $httpCode";
            return null;
        }
        
        if (strpos($contentType, 'application/pdf') === false && strpos($response, '%PDF') !== 0) {
            $this->lastError = 'Response is not a PDF';
            return null;
        }
        
        return $response;
    }
    
    // =========================================================
    // INVOICES API
    // =========================================================
    
    /**
     * Get all invoices with pagination
     */
    public function getInvoices(int $page = 1, ?string $lastModified = '', string $status = ''): ?array {
        $params = [
            'page' => $page,
            'per_page' => 200,
            'sort_column' => 'last_modified_time',
            'sort_order' => 'A'
        ];
        
        if ($lastModified) {
            // Convert to Zoho-friendly format
            $timestamp = strtotime($lastModified);
            if ($timestamp) {
                $params['last_modified_time'] = date('Y-m-d\TH:i:sO', $timestamp);
            }
        }
        
        if ($status) {
            $params['status'] = $status;
        }
        
        return $this->apiRequest('GET', '/invoices', $params);
    }
    
    /**
     * Get single invoice with line items
     */
    public function getInvoice(string $invoiceId): ?array {
        $result = $this->apiRequest('GET', "/invoices/$invoiceId");
        return $result['invoice'] ?? $result;
    }
    
    /**
     * Get invoices for a customer
     */
    public function getCustomerInvoices(string $customerId): ?array {
        $params = ['customer_id' => $customerId];
        return $this->apiRequest('GET', '/invoices', $params);
    }
    
    /**
     * Get unpaid invoices
     */
    public function getUnpaidInvoices(): ?array {
        $params = ['status' => 'unpaid'];
        return $this->apiRequest('GET', '/invoices', $params);
    }
    
    /**
     * Get overdue invoices
     */
    public function getOverdueInvoices(): ?array {
        $params = ['status' => 'overdue'];
        return $this->apiRequest('GET', '/invoices', $params);
    }
    
    /**
     * Get invoice PDF
     */
    public function getInvoicePdf(string $invoiceId): ?string {
        if (!$this->ensureValidToken()) {
            return null;
        }
        
        $baseUrl = $this->apiUrls[$this->datacenter] ?? $this->apiUrls['in'];
        $url = $baseUrl . "/invoices/$invoiceId?organization_id=" . $this->organizationId . "&accept=pdf";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Zoho-oauthtoken ' . $this->accessToken,
            'Accept: application/pdf'
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            $this->lastError = 'cURL Error: ' . $error;
            return null;
        }
        
        if ($httpCode === 401) {
            if ($this->refreshAccessToken()) {
                return $this->getInvoicePdf($invoiceId);
            }
            return null;
        }
        
        if ($httpCode >= 400) {
            $this->lastError = "HTTP Error: $httpCode";
            return null;
        }
        
        if (strpos($contentType, 'application/pdf') === false && strpos($response, '%PDF') !== 0) {
            $this->lastError = 'Response is not a PDF';
            return null;
        }
        
        return $response;
    }
    
    // =========================================================
    // PAYMENTS API
    // =========================================================
    
    /**
     * Get all customer payments with pagination
     */
    public function getPayments(int $page = 1, ?string $lastModified = ''): ?array {
        $params = [
            'page' => $page,
            'per_page' => 200,
            'sort_column' => 'last_modified_time',
            'sort_order' => 'A'
        ];
        
        if ($lastModified) {
            // Convert to Zoho-friendly format
            $timestamp = strtotime($lastModified);
            if ($timestamp) {
                $params['last_modified_time'] = date('Y-m-d\TH:i:sO', $timestamp);
            }
        }
        
        return $this->apiRequest('GET', '/customerpayments', $params);
    }
    
    /**
     * Get single payment
     */
    public function getPayment(string $paymentId): ?array {
        $result = $this->apiRequest('GET', "/customerpayments/$paymentId");
        return $result['payment'] ?? $result;
    }
    
    /**
     * Get payments for a customer
     */
    public function getCustomerPayments(string $customerId): ?array {
        $params = ['customer_id' => $customerId];
        return $this->apiRequest('GET', '/customerpayments', $params);
    }
    
    /**
     * Get payments for an invoice
     */
    public function getInvoicePayments(string $invoiceId): ?array {
        return $this->apiRequest('GET', "/invoices/$invoiceId/payments");
    }
    
    /**
     * Get payment PDF/receipt
     */
    public function getPaymentPdf(string $paymentId): ?string {
        if (!$this->ensureValidToken()) {
            return null;
        }
        
        $baseUrl = $this->apiUrls[$this->datacenter] ?? $this->apiUrls['in'];
        $url = $baseUrl . "/customerpayments/$paymentId?organization_id=" . $this->organizationId . "&accept=pdf";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Zoho-oauthtoken ' . $this->accessToken,
            'Accept: application/pdf'
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            $this->lastError = 'cURL Error: ' . $error;
            return null;
        }
        
        if ($httpCode === 401) {
            if ($this->refreshAccessToken()) {
                return $this->getPaymentPdf($paymentId);
            }
            return null;
        }
        
        if ($httpCode >= 400) {
            $this->lastError = "HTTP Error: $httpCode";
            return null;
        }
        
        if (strpos($contentType, 'application/pdf') === false && strpos($response, '%PDF') !== 0) {
            $this->lastError = 'Response is not a PDF';
            return null;
        }
        
        return $response;
    }
    
    // =========================================================
    // ITEMS API (for service mapping)
    // =========================================================
    
    /**
     * Get all items (services/products)
     */
    public function getItems(int $page = 1): ?array {
        $params = [
            'page' => $page,
            'per_page' => 200
        ];
        return $this->apiRequest('GET', '/items', $params);
    }
    
    /**
     * Get single item
     */
    public function getItem(string $itemId): ?array {
        $result = $this->apiRequest('GET', "/items/$itemId");
        return $result['item'] ?? $result;
    }
    
    // =========================================================
    // ORGANIZATION API
    // =========================================================
    
    /**
     * Get organization details
     */
    public function getOrganization(): ?array {
        if (!$this->ensureValidToken()) {
            return null;
        }
        
        $baseUrl = $this->apiUrls[$this->datacenter] ?? $this->apiUrls['in'];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . '/organizations');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Zoho-oauthtoken ' . $this->accessToken
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            $this->lastError = 'cURL Error: ' . $error;
            return null;
        }
        
        if ($httpCode === 401) {
            if ($this->refreshAccessToken()) {
                return $this->getOrganization();
            }
            return null;
        }
        
        return json_decode($response, true);
    }
    
    // =========================================================
    // UTILITY METHODS
    // =========================================================
    
    /**
     * Save setting to database
     */
    public function saveSetting(string $key, string $value): bool {
        try {
            return dbExecute(
                "INSERT INTO zoho_settings (setting_key, setting_value, updated_at) VALUES (?, ?, NOW()) 
                 ON DUPLICATE KEY UPDATE setting_value = ?, updated_at = NOW()",
                [$key, $value, $value]
            );
        } catch (Exception $e) {
            $this->lastError = 'Failed to save setting: ' . $e->getMessage();
            return false;
        }
    }
    
    /**
     * Get setting from database
     */
    public function getSetting(string $key): ?string {
        try {
            $result = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = ?", [$key]);
            return $result['setting_value'] ?? null;
        } catch (Exception $e) {
            return null;
        }
    }
    
    /**
     * Get last error
     */
    public function getLastError(): ?string {
        return $this->lastError;
    }
    
    /**
     * Get last response
     */
    public function getLastResponse(): ?array {
        return $this->lastResponse;
    }
    
    /**
     * Test connection
     */
    public function testConnection(): array {
        $org = $this->getOrganization();
        
        if ($org && isset($org['organizations'])) {
            // Verify organization ID exists
            $found = false;
            foreach ($org['organizations'] as $o) {
                if ($o['organization_id'] == $this->organizationId) {
                    $found = true;
                    break;
                }
            }
            
            if (!$found) {
                return [
                    'success' => false,
                    'error' => 'Organization ID not found in your Zoho account',
                    'organizations' => $org['organizations']
                ];
            }
            
            return [
                'success' => true,
                'organizations' => $org['organizations']
            ];
        }
        
        return [
            'success' => false,
            'error' => $this->lastError ?? 'Connection test failed'
        ];
    }
    
    /**
     * Disconnect (revoke tokens)
     */
    public function disconnect(): bool {
        $this->saveSetting('access_token', '');
        $this->saveSetting('refresh_token', '');
        $this->saveSetting('token_expires_at', '');
        $this->saveSetting('is_connected', '0');
        
        $this->accessToken = '';
        $this->refreshToken = '';
        
        return true;
    }
    
    // =========================================================
    // CREATE METHODS (for billing requests)
    // =========================================================
    
    /**
     * Create invoice in Zoho Books
     * 
     * @param array $data Invoice data with customer_id, line_items, etc.
     * @return array|null Response with invoice details or null on error
     */
    public function createInvoice(array $data): ?array {
        $result = $this->apiRequest('POST', '/invoices', [], $data);
        
        if ($result && isset($result['invoice'])) {
            return $result['invoice'];
        }
        
        return $result;
    }
    
    /**
     * Create estimate in Zoho Books
     * 
     * @param array $data Estimate data with customer_id, line_items, etc.
     * @return array|null Response with estimate details or null on error
     */
    public function createEstimate(array $data): ?array {
        $result = $this->apiRequest('POST', '/estimates', [], $data);
        
        if ($result && isset($result['estimate'])) {
            return $result['estimate'];
        }
        
        return $result;
    }
    
    /**
     * Send invoice email to customer
     * 
     * @param string $invoiceId Zoho invoice ID
     * @param array $emailData Optional email customization
     * @return bool Success status
     */
    public function sendInvoice(string $invoiceId, array $emailData = []): bool {
        $result = $this->apiRequest('POST', "/invoices/$invoiceId/email", [], $emailData);
        return $result && ($result['code'] ?? 1) === 0;
    }
    
    /**
     * Send estimate email to customer
     * 
     * @param string $estimateId Zoho estimate ID
     * @param array $emailData Optional email customization
     * @return bool Success status
     */
    public function sendEstimate(string $estimateId, array $emailData = []): bool {
        $result = $this->apiRequest('POST', "/estimates/$estimateId/email", [], $emailData);
        return $result && ($result['code'] ?? 1) === 0;
    }
    
    /**
     * Get tax list from Zoho
     * 
     * @return array|null List of taxes
     */
    public function getTaxes(): ?array {
        return $this->apiRequest('GET', '/settings/taxes');
    }
}

// Also create ZohoAPI alias for backwards compatibility with invoice items sync
class ZohoAPI extends ZohoBooks {}
