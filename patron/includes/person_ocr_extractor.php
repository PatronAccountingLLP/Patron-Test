<?php
/**
 * Person Document OCR Extractor
 * Extracts data from KYC documents (PAN, Aadhaar, Passport, etc.)
 * 
 * LOCATION: /patron/includes/person_ocr_extractor.php
 */

class PersonOCRExtractor {
    
    private $ocrSpaceApiKey = ''; // Free API key from ocr.space (optional)
    
    /**
     * Extract text from file (PDF or Image)
     */
    public function extractText(string $filePath): ?string {
        if (!file_exists($filePath)) {
            return null;
        }
        
        $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        
        if ($ext === 'pdf') {
            return $this->extractFromPDF($filePath);
        } elseif (in_array($ext, ['jpg', 'jpeg', 'png'])) {
            return $this->extractFromImage($filePath);
        }
        
        return null;
    }
    
    /**
     * Extract text from PDF using PdfParser
     */
    private function extractFromPDF(string $filePath): ?string {
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
                error_log("PDF Parser error: " . $e->getMessage());
            }
        }
        
        return null;
    }
    
    /**
     * Extract text from image using OCR.space API (free tier)
     * Get free API key from: https://ocr.space/ocrapi
     */
    private function extractFromImage(string $filePath): ?string {
        // If no API key, return null (will use manual entry)
        if (empty($this->ocrSpaceApiKey)) {
            // Try to read from config
            $configFile = __DIR__ . '/ocr_config.php';
            if (file_exists($configFile)) {
                include $configFile;
                if (!empty($ocrSpaceApiKey)) {
                    $this->ocrSpaceApiKey = $ocrSpaceApiKey;
                }
            }
        }
        
        if (empty($this->ocrSpaceApiKey)) {
            return null; // No API key, can't do image OCR
        }
        
        try {
            $imageData = base64_encode(file_get_contents($filePath));
            $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
            $mimeType = $ext === 'png' ? 'image/png' : 'image/jpeg';
            
            $postData = [
                'apikey' => $this->ocrSpaceApiKey,
                'base64Image' => "data:$mimeType;base64,$imageData",
                'language' => 'eng',
                'isOverlayRequired' => 'false',
                'OCREngine' => '2' // More accurate for documents
            ];
            
            $ch = curl_init('https://api.ocr.space/parse/image');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            
            $response = curl_exec($ch);
            curl_close($ch);
            
            if ($response) {
                $result = json_decode($response, true);
                if (!empty($result['ParsedResults'][0]['ParsedText'])) {
                    return $result['ParsedResults'][0]['ParsedText'];
                }
            }
        } catch (\Exception $e) {
            error_log("OCR.space error: " . $e->getMessage());
        }
        
        return null;
    }
    
    /**
     * Detect document type from text
     */
    public function detectDocumentType(string $text): string {
        $textUpper = strtoupper($text);
        
        if (preg_match('/PERMANENT\s*ACCOUNT\s*NUMBER|INCOME\s*TAX\s*DEPARTMENT|PAN\s*CARD/i', $text)) {
            return 'PAN';
        }
        
        if (preg_match('/AADHAAR|UNIQUE\s*IDENTIFICATION|UIDAI|आधार/i', $text)) {
            return 'AADHAAR';
        }
        
        if (preg_match('/PASSPORT|REPUBLIC\s*OF\s*INDIA.*PASSPORT|TRAVEL\s*DOCUMENT/i', $text)) {
            return 'PASSPORT';
        }
        
        if (preg_match('/ELECTION\s*COMMISSION|VOTER.*ID|ELECTORAL/i', $text)) {
            return 'VOTER_ID';
        }
        
        if (preg_match('/DRIVING\s*LICEN[CS]E|TRANSPORT\s*DEPARTMENT|DL\s*NO/i', $text)) {
            return 'DL';
        }
        
        if (preg_match('/DIRECTOR\s*IDENTIFICATION\s*NUMBER|DIN\s*ALLOTMENT/i', $text)) {
            return 'DIN';
        }
        
        return 'UNKNOWN';
    }
    
    /**
     * Extract person data based on document type
     */
    public function extractPersonData(string $text, string $docType = ''): array {
        if (empty($docType)) {
            $docType = $this->detectDocumentType($text);
        }
        
        $data = [
            'document_type' => $docType,
            'person_data' => [],
            'raw_text' => substr($text, 0, 500)
        ];
        
        switch ($docType) {
            case 'PAN':
                $data['person_data'] = $this->extractPAN($text);
                break;
            case 'AADHAAR':
                $data['person_data'] = $this->extractAadhaar($text);
                break;
            case 'PASSPORT':
                $data['person_data'] = $this->extractPassport($text);
                break;
            case 'VOTER_ID':
                $data['person_data'] = $this->extractVoterID($text);
                break;
            case 'DL':
                $data['person_data'] = $this->extractDrivingLicense($text);
                break;
            case 'DIN':
                $data['person_data'] = $this->extractDIN($text);
                break;
            default:
                $data['person_data'] = $this->extractGeneric($text);
        }
        
        return $data;
    }
    
    /**
     * Extract PAN Card data
     * Formats: Physical PAN, e-PAN, PAN Letter
     */
    private function extractPAN(string $text): array {
        $data = [];
        
        // PAN Number - 10 character alphanumeric (5 letters + 4 digits + 1 letter)
        if (preg_match('/\b([A-Z]{5}[0-9]{4}[A-Z])\b/', strtoupper($text), $m)) {
            $data['pan_number'] = $m[1];
        }
        
        // Alternative: Permanent Account Number followed by value
        if (empty($data['pan_number']) && preg_match('/(?:Permanent\s*Account\s*Number|PAN)[:\s]*([A-Z]{5}[0-9]{4}[A-Z])/i', $text, $m)) {
            $data['pan_number'] = strtoupper($m[1]);
        }
        
        // Name - Usually after "Name" or in specific position
        if (preg_match('/(?:Name|नाम)[:\s]*([A-Z][A-Z\s]+?)(?:\n|Father|DOB|Date|$)/i', $text, $m)) {
            $name = trim(preg_replace('/\s+/', ' ', $m[1]));
            if (strlen($name) > 3 && strlen($name) < 100) {
                $data['full_name'] = $name;
            }
        }
        
        // Father's Name
        if (preg_match('/(?:Father\'?s?\s*Name|पिता का नाम)[:\s]*([A-Z][A-Z\s]+?)(?:\n|DOB|Date|$)/i', $text, $m)) {
            $data['father_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // Date of Birth
        if (preg_match('/(?:Date\s*of\s*Birth|DOB|जन्म\s*तिथि)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        // Alternative DOB format
        if (empty($data['dob']) && preg_match('/(\d{2}[\/-]\d{2}[\/-]\d{4})/', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        return $data;
    }
    
    /**
     * Extract Aadhaar Card data
     */
    private function extractAadhaar(string $text): array {
        $data = [];
        
        // Aadhaar Number - 12 digits (may have spaces)
        if (preg_match('/\b(\d{4}\s*\d{4}\s*\d{4})\b/', $text, $m)) {
            $data['aadhaar_number'] = preg_replace('/\s+/', '', $m[1]);
        }
        
        // VID (Virtual ID) - 16 digits
        if (preg_match('/VID[:\s]*(\d{4}\s*\d{4}\s*\d{4}\s*\d{4})/i', $text, $m)) {
            $data['aadhaar_vid'] = preg_replace('/\s+/', '', $m[1]);
        }
        
        // Name
        if (preg_match('/(?:Name|नाम)[:\s]*([A-Za-z][A-Za-z\s]+?)(?:\n|DOB|Date|Gender|पता|Address|$)/i', $text, $m)) {
            $name = trim(preg_replace('/\s+/', ' ', $m[1]));
            if (strlen($name) > 2 && strlen($name) < 100) {
                $data['full_name'] = $name;
            }
        }
        
        // DOB
        if (preg_match('/(?:DOB|Date\s*of\s*Birth|जन्म\s*तिथि)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        // Year of Birth (if full DOB not available)
        if (empty($data['dob']) && preg_match('/(?:Year\s*of\s*Birth|YOB)[:\s]*(\d{4})/i', $text, $m)) {
            $data['dob'] = $m[1] . '-01-01'; // Approximate
        }
        
        // Gender
        if (preg_match('/(?:Gender|लिंग)[:\s]*(Male|Female|MALE|FEMALE|पुरुष|महिला|M|F)/i', $text, $m)) {
            $gender = strtoupper(trim($m[1]));
            if (in_array($gender, ['MALE', 'M', 'पुरुष'])) {
                $data['gender'] = 'MALE';
            } elseif (in_array($gender, ['FEMALE', 'F', 'महिला'])) {
                $data['gender'] = 'FEMALE';
            }
        }
        
        // Address
        if (preg_match('/(?:Address|पता)[:\s]*(.+?)(?:\d{6}|$)/is', $text, $m)) {
            $addr = trim(preg_replace('/\s+/', ' ', $m[1]));
            if (strlen($addr) > 10) {
                $data['address'] = substr($addr, 0, 500);
            }
        }
        
        // Pincode
        if (preg_match('/\b(\d{6})\b/', $text, $m)) {
            $data['present_pincode'] = $m[1];
        }
        
        return $data;
    }
    
    /**
     * Extract Passport data
     */
    private function extractPassport(string $text): array {
        $data = [];
        
        // Passport Number
        if (preg_match('/(?:Passport\s*No|Number)[.:\s]*([A-Z]\d{7})/i', $text, $m)) {
            $data['passport_number'] = strtoupper($m[1]);
        }
        
        // Alternative pattern
        if (empty($data['passport_number']) && preg_match('/\b([A-Z]\d{7})\b/', strtoupper($text), $m)) {
            $data['passport_number'] = $m[1];
        }
        
        // Surname
        if (preg_match('/(?:Surname|Family\s*Name)[:\s]*([A-Z]+)/i', $text, $m)) {
            $data['last_name'] = ucfirst(strtolower($m[1]));
        }
        
        // Given Names
        if (preg_match('/(?:Given\s*Name|First\s*Name)[s]?[:\s]*([A-Z\s]+?)(?:\n|Nationality|Date|$)/i', $text, $m)) {
            $data['first_name'] = trim($m[1]);
        }
        
        // Combine names
        if (!empty($data['first_name']) || !empty($data['last_name'])) {
            $data['full_name'] = trim(($data['first_name'] ?? '') . ' ' . ($data['last_name'] ?? ''));
        }
        
        // Date of Birth
        if (preg_match('/(?:Date\s*of\s*Birth|DOB)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        // Place of Birth
        if (preg_match('/(?:Place\s*of\s*Birth)[:\s]*([A-Za-z\s,]+?)(?:\n|Date|$)/i', $text, $m)) {
            $data['place_of_birth'] = trim($m[1]);
        }
        
        // Gender
        if (preg_match('/(?:Sex|Gender)[:\s]*(M|F|MALE|FEMALE)/i', $text, $m)) {
            $data['gender'] = strtoupper($m[1]) === 'M' || strtoupper($m[1]) === 'MALE' ? 'MALE' : 'FEMALE';
        }
        
        // Expiry Date
        if (preg_match('/(?:Date\s*of\s*Expiry|Valid\s*Until|Expiry)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['passport_expiry'] = $this->parseDate($m[1]);
        }
        
        return $data;
    }
    
    /**
     * Extract Voter ID data
     */
    private function extractVoterID(string $text): array {
        $data = [];
        
        // EPIC Number (Voter ID)
        if (preg_match('/(?:EPIC\s*No|Voter\s*ID|Card\s*No)[.:\s]*([A-Z]{3}\d{7})/i', $text, $m)) {
            $data['voter_id'] = strtoupper($m[1]);
        }
        
        // Alternative pattern
        if (empty($data['voter_id']) && preg_match('/\b([A-Z]{3}\d{7})\b/', strtoupper($text), $m)) {
            $data['voter_id'] = $m[1];
        }
        
        // Name
        if (preg_match('/(?:Name|Elector\'?s?\s*Name)[:\s]*([A-Za-z\s]+?)(?:\n|Father|Husband|Age|$)/i', $text, $m)) {
            $data['full_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // Father's/Husband's Name
        if (preg_match('/(?:Father\'?s?|Husband\'?s?)\s*Name[:\s]*([A-Za-z\s]+?)(?:\n|Age|Date|$)/i', $text, $m)) {
            $data['father_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // Gender
        if (preg_match('/(?:Sex|Gender)[:\s]*(Male|Female|M|F)/i', $text, $m)) {
            $data['gender'] = strtoupper($m[1]) === 'M' || strtoupper($m[1]) === 'MALE' ? 'MALE' : 'FEMALE';
        }
        
        // DOB or Age
        if (preg_match('/(?:Date\s*of\s*Birth|DOB)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        // Address
        if (preg_match('/(?:Address)[:\s]*(.+?)(?:\d{6}|$)/is', $text, $m)) {
            $data['address'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        return $data;
    }
    
    /**
     * Extract Driving License data
     */
    private function extractDrivingLicense(string $text): array {
        $data = [];
        
        // DL Number - Various state formats
        if (preg_match('/(?:DL\s*No|Licen[cs]e\s*No|LIC\.?\s*NO)[.:\s]*([A-Z]{2}\d{2}\s*\d{11})/i', $text, $m)) {
            $data['dl_number'] = preg_replace('/\s+/', '', strtoupper($m[1]));
        }
        
        // Alternative: State code + year + number
        if (empty($data['dl_number']) && preg_match('/\b([A-Z]{2}[\-\s]?\d{2}[\-\s]?\d{4}[\-\s]?\d{7})\b/', strtoupper($text), $m)) {
            $data['dl_number'] = preg_replace('/[\s\-]/', '', $m[1]);
        }
        
        // Name
        if (preg_match('/(?:Name)[:\s]*([A-Za-z\s]+?)(?:\n|S\/O|D\/O|W\/O|DOB|Date|$)/i', $text, $m)) {
            $data['full_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // S/O, D/O, W/O (Father's name)
        if (preg_match('/(?:S\/O|D\/O|W\/O|Son\s*of|Daughter\s*of)[.:\s]*([A-Za-z\s]+?)(?:\n|DOB|Date|Add|$)/i', $text, $m)) {
            $data['father_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // DOB
        if (preg_match('/(?:DOB|Date\s*of\s*Birth)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        // Blood Group
        if (preg_match('/(?:Blood\s*Group|BG)[:\s]*([ABO]{1,2}[\+\-])/i', $text, $m)) {
            $data['blood_group'] = strtoupper($m[1]);
        }
        
        // Valid Till / Expiry
        if (preg_match('/(?:Valid\s*(?:Till|Upto)|Expiry|NT)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['dl_expiry'] = $this->parseDate($m[1]);
        }
        
        // Address
        if (preg_match('/(?:Address|Add)[:\s]*(.+?)(?:\d{6}|Valid|Expiry|$)/is', $text, $m)) {
            $data['address'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        return $data;
    }
    
    /**
     * Extract DIN allotment letter data
     */
    private function extractDIN(string $text): array {
        $data = [];
        
        // DIN - 8 digit number
        if (preg_match('/(?:DIN|Director\s*Identification\s*Number)[:\s]*(\d{8})/i', $text, $m)) {
            $data['din'] = $m[1];
        }
        
        // Alternative
        if (empty($data['din']) && preg_match('/\b(\d{8})\b/', $text, $m)) {
            // Verify it looks like a DIN (starts with 0-9)
            $data['din'] = $m[1];
        }
        
        // Name
        if (preg_match('/(?:Name\s*of\s*(?:the\s*)?(?:Applicant|Director))[:\s]*([A-Za-z\s]+?)(?:\n|Father|DIN|$)/i', $text, $m)) {
            $data['full_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // Father's Name
        if (preg_match('/(?:Father\'?s?\s*Name)[:\s]*([A-Za-z\s]+?)(?:\n|Date|Address|$)/i', $text, $m)) {
            $data['father_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // DOB
        if (preg_match('/(?:Date\s*of\s*Birth|DOB)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        // Allotment Date
        if (preg_match('/(?:Date\s*of\s*Allotment|Allotted\s*on)[:\s]*(\d{2}[\/-]\d{2}[\/-]\d{4})/i', $text, $m)) {
            $data['din_allotment_date'] = $this->parseDate($m[1]);
        }
        
        return $data;
    }
    
    /**
     * Generic extraction for unknown documents
     */
    private function extractGeneric(string $text): array {
        $data = [];
        
        // Try to find any PAN-like number
        if (preg_match('/\b([A-Z]{5}[0-9]{4}[A-Z])\b/', strtoupper($text), $m)) {
            $data['pan_number'] = $m[1];
        }
        
        // Try to find Aadhaar-like number
        if (preg_match('/\b(\d{4}\s*\d{4}\s*\d{4})\b/', $text, $m)) {
            $data['aadhaar_number'] = preg_replace('/\s+/', '', $m[1]);
        }
        
        // Try to find any name
        if (preg_match('/(?:Name)[:\s]*([A-Za-z][A-Za-z\s]+?)(?:\n|$)/i', $text, $m)) {
            $data['full_name'] = trim(preg_replace('/\s+/', ' ', $m[1]));
        }
        
        // Try to find any date
        if (preg_match('/(\d{2}[\/-]\d{2}[\/-]\d{4})/', $text, $m)) {
            $data['dob'] = $this->parseDate($m[1]);
        }
        
        return $data;
    }
    
    /**
     * Parse date string to Y-m-d format
     */
    private function parseDate(string $dateStr): ?string {
        $dateStr = trim($dateStr);
        
        // DD/MM/YYYY or DD-MM-YYYY
        if (preg_match('/^(\d{2})[\/-](\d{2})[\/-](\d{4})$/', $dateStr, $m)) {
            $day = (int)$m[1];
            $month = (int)$m[2];
            $year = (int)$m[3];
            
            // Validate
            if ($day >= 1 && $day <= 31 && $month >= 1 && $month <= 12 && $year >= 1900 && $year <= 2100) {
                return sprintf('%04d-%02d-%02d', $year, $month, $day);
            }
        }
        
        return null;
    }
    
    /**
     * Map extracted data to persons_new table columns
     */
    public function mapToPersonFields(array $extractedData): array {
        $personData = $extractedData['person_data'] ?? [];
        $mapped = [];
        
        // Direct mappings
        $directMap = [
            'pan_number' => 'pan_number',
            'aadhaar_number' => 'aadhaar_number',
            'passport_number' => 'passport_number',
            'full_name' => 'full_name',
            'father_name' => 'father_name',
            'dob' => 'dob',
            'gender' => 'gender',
            'din' => 'din',
            'din_allotment_date' => 'din_allotment_date',
            'address' => 'address',
            'present_pincode' => 'present_pincode',
            'mobile' => 'mobile',
            'email' => 'email'
        ];
        
        foreach ($directMap as $extracted => $dbColumn) {
            if (!empty($personData[$extracted])) {
                $mapped[$dbColumn] = $personData[$extracted];
            }
        }
        
        return $mapped;
    }
}
