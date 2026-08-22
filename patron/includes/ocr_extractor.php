<?php
/**
 * PATRON - Certificate OCR Extractor
 * Extracts structured data from Indian business certificates
 * 
 * Supported Documents:
 * - COI (Certificate of Incorporation - Company)
 * - LLP COI (Certificate of Incorporation - LLP)  
 * - GST Certificate (GST REG-06)
 * - MCA Master Data (Company)
 * - LLP Master Data
 * - PAN Card
 * - TAN Allotment Letter
 * - PTEC (Professional Tax Enrolment Certificate)
 * - PTRC (Professional Tax Registration Certificate)
 * - Udyam/MSME Certificate
 * - IEC (Import Export Code)
 * - FSSAI License
 * 
 * LOCATION: /patron/includes/ocr_extractor.php
 */

class CertificateOCRExtractor {
    
    // Document type detection keywords
    private $documentTypes = [
        'COI' => [
            'keywords' => ['Certificate of Incorporation', 'Companies Act, 2013', 'Corporate Identity Number', 'hereby certify that', 'is incorporated', 'limited by shares'],
            'min_matches' => 2,
            'exclude' => ['LLP', 'Limited Liability Partnership']
        ],
        'LLP_COI' => [
            'keywords' => ['Certificate of Incorporation', 'LLP Identification Number', 'Limited Liability Partnership', 'Form 16', 'section 12(1)'],
            'min_matches' => 2
        ],
        'GST_CERT' => [
            'keywords' => ['Goods and Services Tax', 'GST REG-06', 'Registration Certificate', 'GSTIN', 'Registration Number'],
            'min_matches' => 2
        ],
        'MCA_MASTER' => [
            'keywords' => ['Company Master Data', 'CIN', 'Company Name', 'Authorised Capital', 'Paid up Capital', 'ROC Code', 'Director/Signatory Details'],
            'min_matches' => 3,
            'exclude' => ['LLPIN', 'LLP Name']
        ],
        'LLP_MASTER' => [
            'keywords' => ['LLPIN', 'LLP Name', 'Number of Designated Partners', 'Total Obligation of Contribution', 'LLP Status', 'Company Master Data'],
            'min_matches' => 3
        ],
        'PAN_CARD' => [
            'keywords' => ['Permanent Account Number', 'e-PAN', 'Income Tax Department', 'GOVT. OF INDIA', 'PAN Card'],
            'min_matches' => 2
        ],
        'TAN_ALLOTMENT' => [
            'keywords' => ['Tax Deduction Account Number', 'TAN', 'Income Tax Act', 'Form 49B', 'Allotment'],
            'min_matches' => 2
        ],
        'PTEC' => [
            'keywords' => ['Certificate of Enrolment', 'FORM II-A', 'Professions, Trades, Callings', 'Enrolment Certificate Number', 'enrolled'],
            'min_matches' => 2
        ],
        'PTRC' => [
            'keywords' => ['Certificate of Registration', 'FORM I-A', 'registered as an employer', 'Registration Certificate Number', 'Professions, Trades'],
            'min_matches' => 2
        ],
        'UDYAM' => [
            'keywords' => ['UDYAM REGISTRATION', 'Udyam Registration Number', 'MSME', 'Ministry of Micro', 'Enterprise Type'],
            'min_matches' => 2
        ],
        'IEC' => [
            'keywords' => ['Importer Exporter Code', 'IEC', 'DGFT', 'Director General of Foreign Trade'],
            'min_matches' => 2
        ],
        'FSSAI' => [
            'keywords' => ['FSSAI', 'Food Safety', 'License Number', 'Food Business Operator'],
            'min_matches' => 2
        ],
    ];
    
    // Common regex patterns
    private $patterns = [
        'cin' => '/\b([UL]\d{5}[A-Z]{2}\d{4}[A-Z]{3}\d{6})\b/',
        'llpin' => '/(?:LLPIN|LLP Identification Number)[:\s]*([A-Z]{3}-\d{4})/i',
        'pan' => '/\b([A-Z]{5}\d{4}[A-Z])\b/',
        'tan' => '/\b([A-Z]{4}\d{5}[A-Z])\b/',
        'gstin' => '/\b(\d{2}[A-Z]{5}\d{4}[A-Z][A-Z\d][Z][A-Z\d])\b/',
        'din' => '/\b(\d{8})\b/',
        'udyam' => '/\b(UDYAM-[A-Z]{2}-\d{2}-\d{7})\b/',
        'ptec' => '/(?:Enrolment\s*Certificate\s*Number|PTEC)[:\s]*(\d{11}P)/i',
        'ptrc' => '/(?:Registration\s*Certificate\s*Number|PTRC)[:\s]*(\d{11}P)/i',
        'fssai' => '/\b(\d{14})\b/',
        'iec' => '/\b(IEC\d{10}|\d{10})\b/',
        'pincode' => '/\b(\d{6})\b/',
        'email' => '/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/i',
        'mobile' => '/\b([6-9]\d{9})\b/',
        'date_dmy' => '/(\d{1,2}[\/\-]\d{1,2}[\/\-]\d{2,4})/',
    ];
    
    /**
     * Main extraction method
     */
    public function extract(string $text): array {
        $docType = $this->detectDocumentType($text);
        
        $extractors = [
            'COI' => 'extractCOI',
            'LLP_COI' => 'extractLLPCOI',
            'GST_CERT' => 'extractGST',
            'MCA_MASTER' => 'extractMCAMaster',
            'LLP_MASTER' => 'extractLLPMaster',
            'PAN_CARD' => 'extractPAN',
            'TAN_ALLOTMENT' => 'extractTAN',
            'PTEC' => 'extractPTEC',
            'PTRC' => 'extractPTRC',
            'UDYAM' => 'extractUdyam',
            'IEC' => 'extractIEC',
            'FSSAI' => 'extractFSSAI',
        ];
        
        if (isset($extractors[$docType])) {
            $method = $extractors[$docType];
            $result = $this->$method($text);
        } else {
            $result = $this->extractGeneric($text);
        }
        
        $result['document_type'] = $docType;
        $result['raw_text_preview'] = substr($text, 0, 500);
        
        return $result;
    }
    
    /**
     * Detect document type from text
     */
    private function detectDocumentType(string $text): string {
        $scores = [];
        
        foreach ($this->documentTypes as $type => $config) {
            $score = 0;
            foreach ($config['keywords'] as $keyword) {
                if (stripos($text, $keyword) !== false) {
                    $score++;
                }
            }
            
            // Check exclusions
            if (isset($config['exclude'])) {
                foreach ($config['exclude'] as $exclude) {
                    if (stripos($text, $exclude) !== false) {
                        $score -= 2;
                    }
                }
            }
            
            if ($score >= $config['min_matches']) {
                $scores[$type] = $score;
            }
        }
        
        if (empty($scores)) {
            return 'UNKNOWN';
        }
        
        arsort($scores);
        return key($scores);
    }
    
    /**
     * Extract COI (Company)
     */
    private function extractCOI(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'COI',
                'issuing_authority' => 'Registrar of Companies'
            ]
        ];
        
        // CIN
        if (preg_match($this->patterns['cin'], $text, $m)) {
            $data['client_data']['cin'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Company Name
        if (preg_match('/hereby certify that\s+([A-Z][A-Z0-9\s&\-\.]+(?:PRIVATE\s+)?LIMITED)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // PAN
        if (preg_match('/PAN[)\s]+(?:of the company\s+is\s+)?([A-Z]{5}\d{4}[A-Z])/i', $text, $m)) {
            $data['client_data']['pan'] = $m[1];
        }
        
        // TAN
        if (preg_match('/TAN[)\s]+(?:of the company\s+is\s*)?([A-Z]{4}\d{5}[A-Z])/i', $text, $m)) {
            $data['client_data']['tan'] = $m[1];
        }
        
        // Incorporation Date - written format
        if (preg_match('/incorporated on this\s+(\w+)\s+day of\s+(\w+)\s+(?:Two thousand\s+)?(\w+[-\s]?\w*)/i', $text, $m)) {
            $data['client_data']['incorporation_date'] = $this->parseWrittenDate($m[1], $m[2], $m[3]);
            $data['certificate_data']['issue_date'] = $data['client_data']['incorporation_date'];
        }
        
        // Address
        $data['client_data'] = array_merge($data['client_data'], $this->extractAddress($text));
        
        return $data;
    }
    
    /**
     * Extract LLP COI
     */
    private function extractLLPCOI(string $text): array {
        $data = [
            'client_data' => ['entity_type' => 'LLP'],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'LLP_COI',
                'issuing_authority' => 'Registrar of Companies'
            ]
        ];
        
        // LLPIN
        if (preg_match('/LLP Identification Number[:\s]*([A-Z]{3}-\d{4})/i', $text, $m)) {
            $data['client_data']['llpin'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // LLP Name
        if (preg_match('/certified that\s+([A-Z][A-Z0-9\s&\-\.]+LLP)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // PAN
        if (preg_match('/PAN[)\s]+(?:of the LLP\s+is\s+)?([A-Z]{5}\d{4}[A-Z])/i', $text, $m)) {
            $data['client_data']['pan'] = $m[1];
        }
        
        // TAN
        if (preg_match('/TAN[)\s]+(?:of the LLP\s+is\s*)?([A-Z]{4}\d{5}[A-Z])/i', $text, $m)) {
            $data['client_data']['tan'] = $m[1];
        }
        
        // Incorporation Date
        if (preg_match('/this\s+(\w+)\s+day of\s+(\w+)\s+TWO THOUSAND\s+(\w+)/i', $text, $m)) {
            $data['client_data']['incorporation_date'] = $this->parseWrittenDate($m[1], $m[2], $m[3]);
            $data['certificate_data']['issue_date'] = $data['client_data']['incorporation_date'];
        }
        
        // Address
        $data['client_data'] = array_merge($data['client_data'], $this->extractAddress($text));
        
        return $data;
    }
    
    /**
     * Extract GST Certificate
     */
    private function extractGST(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'GST_CERT',
                'issuing_authority' => 'GST Department'
            ]
        ];
        
        // GSTIN
        if (preg_match('/Registration Number\s*:?\s*(\d{2}[A-Z]{5}\d{4}[A-Z][A-Z\d][Z][A-Z\d])/i', $text, $m)) {
            $data['client_data']['gstin'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        } elseif (preg_match($this->patterns['gstin'], $text, $m)) {
            $data['client_data']['gstin'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Legal Name
        if (preg_match('/Legal Name\s+([A-Z][A-Z0-9\s&\-\.]+(?:LLP|LIMITED|PARTNERSHIP)?)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // Issue Date
        if (preg_match('/Date of issue of Certificate\s+(\d{2}\/\d{2}\/\d{4})/i', $text, $m)) {
            $data['certificate_data']['issue_date'] = $this->parseDate($m[1]);
        }
        
        // Period of Validity
        if (preg_match('/Period of Validity\s+From\s+(\d{2}\/\d{2}\/\d{4})/i', $text, $m)) {
            $data['certificate_data']['valid_from'] = $this->parseDate($m[1]);
            if (empty($data['certificate_data']['issue_date'])) {
                $data['certificate_data']['issue_date'] = $data['certificate_data']['valid_from'];
            }
        }
        
        // Address of Principal Place
        if (preg_match('/Address of Principal Place of\s*Business\s+(.+?)(?:\d+\.\s+Date|\d+\.\s+Period)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            $data['client_data']['registered_address'] = $addr;
            $data['client_data'] = array_merge($data['client_data'], $this->parseAddressString($addr));
        }
        
        // Partners/Directors from Annexure B
        if (preg_match_all('/\d+\s+Name\s+([A-Z][a-zA-Z\s]+)\s+Designation\/Status\s+(\w+)/i', $text, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $data['person_data'][] = [
                    'full_name' => trim($match[1]),
                    'role_type' => strtoupper($match[2]) === 'DIRECTOR' ? 'DESIGNATED_PARTNER' : 'PARTNER'
                ];
            }
        }
        
        return $data;
    }
    
    /**
     * Extract MCA Master Data (Company)
     */
    private function extractMCAMaster(string $text): array {
        $data = [
            'client_data' => ['entity_type' => 'PVT_LTD'],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'MCA_MASTER',
                'issuing_authority' => 'Ministry of Corporate Affairs'
            ]
        ];
        
        // CIN
        if (preg_match('/CIN\s+([UL]\d{5}[A-Z]{2}\d{4}[A-Z]{3}\d{6})/i', $text, $m)) {
            $data['client_data']['cin'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Company Name
        if (preg_match('/Company Name\s+([A-Z][A-Z0-9\s&\-\.]+(?:PRIVATE\s+)?LIMITED)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // ROC
        if (preg_match('/ROC Code\s+(RoC-[A-Za-z]+)/i', $text, $m)) {
            $data['client_data']['roc'] = $m[1];
        }
        
        // Date of Incorporation
        if (preg_match('/Date of Incorporation\s+(\d{2}\/\d{2}\/\d{4})/i', $text, $m)) {
            $data['client_data']['incorporation_date'] = $this->parseDate($m[1]);
            $data['certificate_data']['issue_date'] = $data['client_data']['incorporation_date'];
        }
        
        // Email
        if (preg_match('/Email Id\s+([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/i', $text, $m)) {
            $data['client_data']['email'] = strtolower($m[1]);
        }
        
        // Authorized Capital
        if (preg_match('/Authorised Capital\s+(\d[\d,\.]+)/i', $text, $m)) {
            $data['client_data']['authorized_capital'] = str_replace(',', '', $m[1]);
        }
        
        // Paid-up Capital
        if (preg_match('/Paid up Capital\s+(\d[\d,\.]+)/i', $text, $m)) {
            $data['client_data']['paid_up_capital'] = str_replace(',', '', $m[1]);
        }
        
        // Registered Address
        if (preg_match('/Registered Address\s+(.+?)(?:Email|Previous|$)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            $data['client_data']['registered_address'] = $addr;
            $data['client_data'] = array_merge($data['client_data'], $this->parseAddressString($addr));
        }
        
        // Directors
        if (preg_match_all('/(\d{8})\s+([A-Z][A-Z\s]+?)\s+(\d{2}\/\d{2}\/\d{4})\s+[\-\d\/]+\s+(YES|NO)/i', $text, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $data['person_data'][] = [
                    'din' => $match[1],
                    'full_name' => trim($match[2]),
                    'role_type' => 'DIRECTOR',
                    'appointment_date' => $this->parseDate($match[3])
                ];
            }
        }
        
        return $data;
    }
    
    /**
     * Extract LLP Master Data
     */
    private function extractLLPMaster(string $text): array {
        $data = [
            'client_data' => ['entity_type' => 'LLP'],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'LLP_MASTER',
                'issuing_authority' => 'Ministry of Corporate Affairs'
            ]
        ];
        
        // LLPIN
        if (preg_match('/LLPIN\s+([A-Z]{3}-\d{4})/i', $text, $m)) {
            $data['client_data']['llpin'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // LLP Name
        if (preg_match('/LLP Name\s+([A-Z][A-Z0-9\s&\-\.]+LLP)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // ROC
        if (preg_match('/ROC Code\s+(RoC-[A-Za-z]+)/i', $text, $m)) {
            $data['client_data']['roc'] = $m[1];
        }
        
        // Date of Incorporation
        if (preg_match('/Date of Incorporation\s+(\d{2}\/\d{2}\/\d{4})/i', $text, $m)) {
            $data['client_data']['incorporation_date'] = $this->parseDate($m[1]);
            $data['certificate_data']['issue_date'] = $data['client_data']['incorporation_date'];
        }
        
        // Email
        if (preg_match('/Email Id\s+([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/i', $text, $m)) {
            $data['client_data']['email'] = strtolower($m[1]);
        }
        
        // Total Contribution
        if (preg_match('/Total Obligation of Contribution\s+(\d+)/i', $text, $m)) {
            $data['client_data']['total_contribution'] = $m[1];
        }
        
        // Registered Address
        if (preg_match('/Registered Address\s+(.+?)(?:Email|Previous|Total|$)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            $data['client_data']['registered_address'] = $addr;
            $data['client_data'] = array_merge($data['client_data'], $this->parseAddressString($addr));
        }
        
        // Partners with DIN
        if (preg_match_all('/(\d{8})\s+([A-Z][A-Z\s]+?)\s+(\d{2}\/\d{2}\/\d{4})\s+[\-\d\/]+\s+(YES|NO)/i', $text, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $data['person_data'][] = [
                    'din' => $match[1],
                    'full_name' => trim($match[2]),
                    'role_type' => 'DESIGNATED_PARTNER',
                    'appointment_date' => $this->parseDate($match[3])
                ];
            }
        }
        
        return $data;
    }
    
    /**
     * Extract PAN Card
     */
    private function extractPAN(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'PAN_CARD',
                'issuing_authority' => 'Income Tax Department'
            ]
        ];
        
        // PAN
        if (preg_match('/([A-Z]{5}\d{4}[A-Z])\s*(?:\*|नाम|Name)/i', $text, $m)) {
            $data['client_data']['pan'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        } elseif (preg_match('/Permanent Account Number[^A-Z]*([A-Z]{5}\d{4}[A-Z])/i', $text, $m)) {
            $data['client_data']['pan'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Name
        if (preg_match('/(?:नाम\s*\/\s*Name|Name)\s+([A-Z][A-Z0-9\s&\-\.]+(?:LLP|LIMITED)?)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // Date of Incorporation/Formation
        if (preg_match('/Date of (?:Incorporation|Formation)\s+(\d{2}\/\d{2}\/\d{4})/i', $text, $m)) {
            $data['client_data']['incorporation_date'] = $this->parseDate($m[1]);
            $data['certificate_data']['issue_date'] = $data['client_data']['incorporation_date'];
        }
        
        return $data;
    }
    
    /**
     * Extract TAN Allotment
     */
    private function extractTAN(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'TAN_ALLOTMENT',
                'issuing_authority' => 'Income Tax Department'
            ]
        ];
        
        // TAN
        if (preg_match('/following TAN has been issued[^A-Z]*([A-Z]{4}\d{5}[A-Z])/i', $text, $m)) {
            $data['client_data']['tan'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        } elseif (preg_match('/([A-Z]{4}\d{5}[A-Z])/', $text, $m)) {
            $data['client_data']['tan'] = $m[1];
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Name
        if (preg_match('/TO,\s+([A-Z][A-Z0-9\s&\-\.]+(?:LLP|LIMITED)?)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // Phone
        if (preg_match('/TEL\.?\s*NO\.?[:\s]*(\d{10,})/i', $text, $m)) {
            $data['client_data']['mobile'] = $m[1];
        }
        
        // Address
        $data['client_data'] = array_merge($data['client_data'], $this->extractAddress($text));
        
        // Application Date
        if (preg_match('/Form 49B[)\s]+dated\s+([A-Za-z]+\s+\d{1,2},?\s+\d{4})/i', $text, $m)) {
            $data['certificate_data']['issue_date'] = $this->parseDate($m[1]);
        }
        
        return $data;
    }
    
    /**
     * Extract PTEC
     */
    private function extractPTEC(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'PTEC',
                'issuing_authority' => 'Maharashtra Sales Tax Department'
            ]
        ];
        
        // PTEC Number
        if (preg_match('/Enrolment Certificate Number\s+(\d{11}P)/i', $text, $m)) {
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Name
        if (preg_match('/Name of the Enrolled Person\s+(?:M\/s\s+)?([A-Z][A-Z0-9\s&\-\.]+(?:LLP|LIMITED)?)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // Address
        if (preg_match('/Address of person\/Principal place[^:]*:\s*(.+?)(?:\d+\.\s+Entry|\d+\.\s+Address of Additional)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            $data['client_data']['registered_address'] = $addr;
            $data['client_data'] = array_merge($data['client_data'], $this->parseAddressString($addr));
        }
        
        // Effective Date
        if (preg_match('/Certificate with effect from\s+(\d{2}-[A-Za-z]{3}-\d{2})/i', $text, $m)) {
            $data['certificate_data']['valid_from'] = $this->parseDate($m[1]);
            $data['certificate_data']['issue_date'] = $data['certificate_data']['valid_from'];
        }
        
        return $data;
    }
    
    /**
     * Extract PTRC
     */
    private function extractPTRC(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'PTRC',
                'issuing_authority' => 'Maharashtra Sales Tax Department'
            ]
        ];
        
        // PTRC Number
        if (preg_match('/Registration Certificate Number\s+(\d{11}P)/i', $text, $m)) {
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Employer Name
        if (preg_match('/Name of the Employer\s+(?:M\/s\s+)?([A-Z][A-Z0-9\s&\-\.]+(?:LLP|LIMITED)?)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // Address
        if (preg_match('/Address of Principal Place of work\s+(.+?)(?:\d+\.\s+Constitution|\d+\.\s+Nature)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            $data['client_data']['registered_address'] = $addr;
            $data['client_data'] = array_merge($data['client_data'], $this->parseAddressString($addr));
        }
        
        // Effective Date
        if (preg_match('/Certificate with effect from\s+(\d{2}-[A-Za-z]{3}-\d{2})/i', $text, $m)) {
            $data['certificate_data']['valid_from'] = $this->parseDate($m[1]);
            $data['certificate_data']['issue_date'] = $data['certificate_data']['valid_from'];
        }
        
        return $data;
    }
    
    /**
     * Extract Udyam Certificate
     */
    private function extractUdyam(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'UDYAM',
                'issuing_authority' => 'Ministry of MSME'
            ]
        ];
        
        // Udyam Number
        if (preg_match('/Udyam Registration Number[:\s]*(UDYAM-[A-Z]{2}-\d{2}-\d{7})/i', $text, $m)) {
            $data['certificate_data']['certificate_number'] = $m[1];
        } elseif (preg_match('/(UDYAM-[A-Z]{2}-\d{2}-\d{7})/i', $text, $m)) {
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        // Enterprise Name
        if (preg_match('/NAME OF ENTERPRISE\s+(?:M\/S\s+)?([A-Z][A-Z0-9\s&\-\.]+(?:LLP|LIMITED)?)/i', $text, $m)) {
            $data['client_data']['name'] = trim($m[1]);
        }
        
        // Enterprise Type
        if (preg_match('/Enterprise Type\s+(Micro|Small|Medium)/i', $text, $m)) {
            $data['client_data']['msme_category'] = ucfirst(strtolower($m[1]));
        }
        
        // Mobile
        if (preg_match('/Mobile\s+(\d{10})/i', $text, $m)) {
            $data['client_data']['mobile'] = $m[1];
        }
        
        // Email
        if (preg_match('/Email[:\s]+([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/i', $text, $m)) {
            $data['client_data']['email'] = strtolower($m[1]);
        }
        
        // Registration Date
        if (preg_match('/DATE OF UDYAM REGISTRATION\s+(\d{2}\/\d{2}\/\d{4})/i', $text, $m)) {
            $data['certificate_data']['issue_date'] = $this->parseDate($m[1]);
        }
        
        // Incorporation Date
        if (preg_match('/DATE OF INCORPORATION[^0-9]*(\d{2}\/\d{2}\/\d{4})/i', $text, $m)) {
            $data['client_data']['incorporation_date'] = $this->parseDate($m[1]);
        }
        
        // Address
        if (preg_match('/OFFIC(?:I)?AL ADDRESS OF ENTERPRISE\s+(.+?)(?:DATE OF|NATIONAL|$)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            $data['client_data']['registered_address'] = $addr;
            $data['client_data'] = array_merge($data['client_data'], $this->parseAddressString($addr));
        }
        
        return $data;
    }
    
    /**
     * Extract IEC
     */
    private function extractIEC(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'IEC',
                'issuing_authority' => 'DGFT'
            ]
        ];
        
        // IEC Number
        if (preg_match('/IEC[:\s]*(\d{10})/i', $text, $m)) {
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        return $data;
    }
    
    /**
     * Extract FSSAI
     */
    private function extractFSSAI(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => [
                'type' => 'FSSAI',
                'issuing_authority' => 'FSSAI'
            ]
        ];
        
        // FSSAI Number (14 digits)
        if (preg_match('/License (?:No|Number)[:\s]*(\d{14})/i', $text, $m)) {
            $data['certificate_data']['certificate_number'] = $m[1];
        }
        
        return $data;
    }
    
    /**
     * Generic extraction for unknown document types
     */
    private function extractGeneric(string $text): array {
        $data = [
            'client_data' => [],
            'person_data' => [],
            'certificate_data' => ['type' => 'UNKNOWN']
        ];
        
        // Try to find any identifiers
        if (preg_match($this->patterns['cin'], $text, $m)) {
            $data['client_data']['cin'] = $m[1];
        }
        if (preg_match($this->patterns['llpin'], $text, $m)) {
            $data['client_data']['llpin'] = $m[1];
        }
        if (preg_match($this->patterns['gstin'], $text, $m)) {
            $data['client_data']['gstin'] = $m[1];
        }
        if (preg_match($this->patterns['pan'], $text, $m)) {
            $data['client_data']['pan'] = $m[1];
        }
        if (preg_match($this->patterns['tan'], $text, $m)) {
            $data['client_data']['tan'] = $m[1];
        }
        
        return $data;
    }
    
    /**
     * Extract address components from text
     */
    private function extractAddress(string $text): array {
        $result = [];
        
        // Try to find full address block
        if (preg_match('/Mailing Address[^:]*:\s*(.+?)(?:\*|Disclaimer|$)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            $result['registered_address'] = $addr;
            $result = array_merge($result, $this->parseAddressString($addr));
        }
        
        return $result;
    }
    
    /**
     * Parse address string into components
     */
    private function parseAddressString(string $address): array {
        $result = [];
        
        // Pincode
        if (preg_match('/(\d{6})/', $address, $m)) {
            $result['pincode'] = $m[1];
        }
        
        // State
        $states = ['Maharashtra', 'Gujarat', 'Karnataka', 'Tamil Nadu', 'Delhi', 'Rajasthan', 
                   'West Bengal', 'Uttar Pradesh', 'Madhya Pradesh', 'Andhra Pradesh', 
                   'Telangana', 'Kerala', 'Punjab', 'Haryana', 'Bihar', 'Odisha', 'Goa'];
        foreach ($states as $state) {
            if (stripos($address, $state) !== false) {
                $result['state'] = $state;
                break;
            }
        }
        
        // City - common cities
        $cities = ['Mumbai', 'Pune', 'Delhi', 'Bangalore', 'Chennai', 'Hyderabad', 'Kolkata', 
                   'Ahmedabad', 'Jaipur', 'Lucknow', 'Nagpur', 'Nashik', 'Thane'];
        foreach ($cities as $city) {
            if (stripos($address, $city) !== false) {
                $result['city'] = $city;
                break;
            }
        }
        
        return $result;
    }
    
    /**
     * Parse date in various formats
     */
    private function parseDate(string $dateStr): ?string {
        $dateStr = trim($dateStr);
        
        // DD/MM/YYYY or DD-MM-YYYY
        if (preg_match('/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/', $dateStr, $m)) {
            return sprintf('%04d-%02d-%02d', $m[3], $m[2], $m[1]);
        }
        
        // DD-Mon-YY or DD-Mon-YYYY
        if (preg_match('/(\d{1,2})-([A-Za-z]{3})-(\d{2,4})/i', $dateStr, $m)) {
            $months = ['jan'=>1,'feb'=>2,'mar'=>3,'apr'=>4,'may'=>5,'jun'=>6,
                       'jul'=>7,'aug'=>8,'sep'=>9,'oct'=>10,'nov'=>11,'dec'=>12];
            $month = $months[strtolower($m[2])] ?? 1;
            $year = strlen($m[3]) == 2 ? 2000 + (int)$m[3] : (int)$m[3];
            return sprintf('%04d-%02d-%02d', $year, $month, (int)$m[1]);
        }
        
        // Month DD, YYYY
        if (preg_match('/([A-Za-z]+)\s+(\d{1,2}),?\s+(\d{4})/i', $dateStr, $m)) {
            $months = ['january'=>1,'february'=>2,'march'=>3,'april'=>4,'may'=>5,'june'=>6,
                       'july'=>7,'august'=>8,'september'=>9,'october'=>10,'november'=>11,'december'=>12];
            $month = $months[strtolower($m[1])] ?? 1;
            return sprintf('%04d-%02d-%02d', (int)$m[3], $month, (int)$m[2]);
        }
        
        return null;
    }
    
    /**
     * Parse written date like "Twenty third day of June Two thousand twenty-two"
     */
    private function parseWrittenDate(string $day, string $month, string $year): ?string {
        $dayNum = $this->wordToNumber(strtolower(str_replace(['st','nd','rd','th'], '', $day)));
        
        $months = ['january'=>1,'february'=>2,'march'=>3,'april'=>4,'may'=>5,'june'=>6,
                   'july'=>7,'august'=>8,'september'=>9,'october'=>10,'november'=>11,'december'=>12];
        $monthNum = $months[strtolower($month)] ?? 1;
        
        // Parse year like "twenty-two" or "twenty three"
        $year = strtolower(str_replace('-', ' ', $year));
        $yearParts = explode(' ', $year);
        
        $decades = ['twenty'=>20, 'thirty'=>30, 'forty'=>40, 'fifty'=>50];
        $ones = ['one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5,'six'=>6,'seven'=>7,'eight'=>8,'nine'=>9];
        
        $yearNum = 2000;
        foreach ($yearParts as $part) {
            if (isset($decades[$part])) {
                $yearNum += $decades[$part];
            } elseif (isset($ones[$part])) {
                $yearNum += $ones[$part];
            }
        }
        
        return sprintf('%04d-%02d-%02d', $yearNum, $monthNum, $dayNum);
    }
    
    /**
     * Convert word to number
     */
    private function wordToNumber(string $word): int {
        $numbers = [
            'first'=>1,'second'=>2,'third'=>3,'fourth'=>4,'fifth'=>5,'sixth'=>6,
            'seventh'=>7,'eighth'=>8,'ninth'=>9,'tenth'=>10,'eleventh'=>11,'twelfth'=>12,
            'thirteenth'=>13,'fourteenth'=>14,'fifteenth'=>15,'sixteenth'=>16,
            'seventeenth'=>17,'eighteenth'=>18,'nineteenth'=>19,'twentieth'=>20,
            'twenty'=>20,'twenty first'=>21,'twenty second'=>22,'twenty third'=>23,
            'twenty fourth'=>24,'twenty fifth'=>25,'twenty sixth'=>26,'twenty seventh'=>27,
            'twenty eighth'=>28,'twenty ninth'=>29,'thirtieth'=>30,'thirty first'=>31
        ];
        
        return $numbers[$word] ?? 1;
    }
    
    /**
     * Extract text from PDF file
     */
    public function extractTextFromPDF(string $filePath): ?string {
        if (!file_exists($filePath)) {
            return null;
        }
        
        // Try Smalot PdfParser (pure PHP - works on shared hosting)
        $pdfParserPath = __DIR__ . '/pdfparser/vendor/autoload.php';
        if (file_exists($pdfParserPath)) {
            require_once $pdfParserPath;
        }
        
        if (class_exists('Smalot\PdfParser\Parser')) {
            try {
                $parser = new \Smalot\PdfParser\Parser();
                $pdf = $parser->parseFile($filePath);
                $text = $pdf->getText();
                if (!empty(trim($text ?? ''))) {
                    return $text;
                }
            } catch (\Exception $e) {
                error_log("PdfParser error: " . $e->getMessage());
            }
        }
        
        // pdftotext command is NOT available on shared hosting - skip it
        // exec() and shell_exec() are disabled
        
        return null;
    }
}
