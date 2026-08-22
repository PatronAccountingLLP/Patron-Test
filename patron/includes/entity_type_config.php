<?php
/**
 * PATRON - Entity Type Configuration
 * Defines what fields, documents, and person types are applicable for each entity type
 * 
 * This is the SINGLE SOURCE OF TRUTH for entity-specific requirements
 */

/**
 * Entity Type Configuration
 * 
 * Structure:
 * - label: Display name
 * - description: Short description
 * - icon: FontAwesome icon class
 * - color: Tailwind color name
 * - person_types: What types of persons can be added
 * - entity_fields: Fields applicable at entity level
 * - person_fields: Fields applicable at person level
 * - entity_documents: Documents required at entity level
 * - person_documents: Documents required at person level
 * - requires_din: Whether persons need DIN
 * - requires_dpin: Whether persons need DPIN
 * - requires_dsc: Whether DSC is typically needed
 * - person_is_entity: Whether person = entity (like Proprietorship)
 * - min_persons: Minimum number of persons required
 * - max_persons: Maximum number of persons (null = unlimited)
 */

$ENTITY_TYPE_CONFIG = [
    
    'PRIVATE_LIMITED' => [
        'label' => 'Private Limited Company',
        'short_label' => 'Pvt Ltd',
        'description' => 'Company limited by shares with 2-200 shareholders',
        'icon' => 'fa-building',
        'color' => 'blue',
        'person_types' => ['DIRECTOR', 'SHAREHOLDER', 'DIRECTOR_SHAREHOLDER'],
        'min_persons' => 2,
        'max_persons' => 200,
        'requires_din' => true,
        'requires_dpin' => false,
        'requires_dsc' => true,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'cin' => ['label' => 'CIN', 'required' => true, 'placeholder' => 'U12345MH2020PTC123456'],
            'company_pan' => ['label' => 'Company PAN', 'required' => true, 'placeholder' => 'AABCT1234A'],
            'tan' => ['label' => 'TAN', 'required' => false, 'placeholder' => 'MUMT12345A'],
            'gstin' => ['label' => 'GSTIN', 'required' => false, 'placeholder' => '27AABCT1234A1Z5'],
            'date_of_incorporation' => ['label' => 'Date of Incorporation', 'type' => 'date', 'required' => true],
            'authorized_capital' => ['label' => 'Authorized Capital', 'type' => 'number', 'required' => false],
            'paid_up_capital' => ['label' => 'Paid-up Capital', 'type' => 'number', 'required' => false],
            'registered_office' => ['label' => 'Registered Office Address', 'type' => 'textarea', 'required' => true],
        ],
        
        'person_fields' => [
            'din' => ['label' => 'DIN', 'required' => true, 'placeholder' => '12345678', 'for' => ['DIRECTOR', 'DIRECTOR_SHAREHOLDER']],
            'pan_number' => ['label' => 'PAN', 'required' => true],
            'share_percentage' => ['label' => 'Share %', 'type' => 'number', 'required' => false, 'for' => ['SHAREHOLDER', 'DIRECTOR_SHAREHOLDER']],
            'date_of_appointment' => ['label' => 'Date of Appointment', 'type' => 'date', 'required' => false, 'for' => ['DIRECTOR', 'DIRECTOR_SHAREHOLDER']],
            'dsc_status' => ['label' => 'DSC Status', 'type' => 'select', 'options' => ['NOT_REQUIRED', 'REQUIRED', 'APPLIED', 'ACTIVE', 'EXPIRED']],
            'dsc_expiry_date' => ['label' => 'DSC Expiry', 'type' => 'date', 'required' => false],
        ],
        
        'entity_documents' => [
            'COI' => ['label' => 'Certificate of Incorporation', 'required' => true],
            'MOA' => ['label' => 'Memorandum of Association', 'required' => true],
            'AOA' => ['label' => 'Articles of Association', 'required' => true],
            'COMPANY_PAN' => ['label' => 'Company PAN Card', 'required' => true],
            'GST_CERTIFICATE' => ['label' => 'GST Registration Certificate', 'required' => false],
            'TAN_CERTIFICATE' => ['label' => 'TAN Allotment Letter', 'required' => false],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
            'PASSPORT_PHOTO' => ['label' => 'Passport Size Photo', 'required' => true],
            'ADDRESS_PROOF' => ['label' => 'Address Proof', 'required' => true],
            'DIN_CERTIFICATE' => ['label' => 'DIN Certificate', 'required' => false, 'for' => ['DIRECTOR', 'DIRECTOR_SHAREHOLDER']],
            'DSC_CERTIFICATE' => ['label' => 'DSC Certificate', 'required' => false],
        ],
    ],
    
    'LLP' => [
        'label' => 'Limited Liability Partnership',
        'short_label' => 'LLP',
        'description' => 'Partnership with limited liability protection',
        'icon' => 'fa-handshake',
        'color' => 'indigo',
        'person_types' => ['DESIGNATED_PARTNER', 'PARTNER'],
        'min_persons' => 2,
        'max_persons' => null,
        'requires_din' => false,
        'requires_dpin' => true,
        'requires_dsc' => true,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'llpin' => ['label' => 'LLPIN', 'required' => true, 'placeholder' => 'AAA-1234'],
            'company_pan' => ['label' => 'LLP PAN', 'required' => true, 'placeholder' => 'AABFL1234A'],
            'tan' => ['label' => 'TAN', 'required' => false],
            'gstin' => ['label' => 'GSTIN', 'required' => false],
            'date_of_incorporation' => ['label' => 'Date of Incorporation', 'type' => 'date', 'required' => true],
            'total_contribution' => ['label' => 'Total Capital Contribution', 'type' => 'number', 'required' => false],
            'registered_office' => ['label' => 'Registered Office Address', 'type' => 'textarea', 'required' => true],
        ],
        
        'person_fields' => [
            'dpin' => ['label' => 'DPIN', 'required' => true, 'placeholder' => '12345678', 'for' => ['DESIGNATED_PARTNER']],
            'pan_number' => ['label' => 'PAN', 'required' => true],
            'contribution_amount' => ['label' => 'Capital Contribution', 'type' => 'number', 'required' => false],
            'profit_sharing_ratio' => ['label' => 'Profit Sharing %', 'type' => 'number', 'required' => false],
            'date_of_joining' => ['label' => 'Date of Joining', 'type' => 'date', 'required' => false],
            'dsc_status' => ['label' => 'DSC Status', 'type' => 'select', 'options' => ['NOT_REQUIRED', 'REQUIRED', 'APPLIED', 'ACTIVE', 'EXPIRED']],
        ],
        
        'entity_documents' => [
            'COI' => ['label' => 'Certificate of Incorporation', 'required' => true],
            'LLP_AGREEMENT' => ['label' => 'LLP Agreement', 'required' => true],
            'LLP_PAN' => ['label' => 'LLP PAN Card', 'required' => true],
            'GST_CERTIFICATE' => ['label' => 'GST Registration Certificate', 'required' => false],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
            'PASSPORT_PHOTO' => ['label' => 'Passport Size Photo', 'required' => true],
            'ADDRESS_PROOF' => ['label' => 'Address Proof', 'required' => true],
            'DPIN_CERTIFICATE' => ['label' => 'DPIN Certificate', 'required' => false, 'for' => ['DESIGNATED_PARTNER']],
        ],
    ],
    
    'PARTNERSHIP' => [
        'label' => 'Partnership Firm',
        'short_label' => 'Partnership',
        'description' => 'Traditional partnership with unlimited liability',
        'icon' => 'fa-users',
        'color' => 'purple',
        'person_types' => ['PARTNER'],
        'min_persons' => 2,
        'max_persons' => 50,
        'requires_din' => false,
        'requires_dpin' => false,
        'requires_dsc' => false,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'firm_pan' => ['label' => 'Firm PAN', 'required' => true, 'placeholder' => 'AABFF1234A'],
            'gstin' => ['label' => 'GSTIN', 'required' => false],
            'registration_number' => ['label' => 'Firm Registration No.', 'required' => false, 'placeholder' => 'Optional - if registered'],
            'date_of_formation' => ['label' => 'Date of Formation', 'type' => 'date', 'required' => true],
            'business_address' => ['label' => 'Business Address', 'type' => 'textarea', 'required' => true],
        ],
        
        'person_fields' => [
            'pan_number' => ['label' => 'PAN', 'required' => true],
            'profit_sharing_ratio' => ['label' => 'Profit Sharing %', 'type' => 'number', 'required' => true],
            'capital_contribution' => ['label' => 'Capital Contribution', 'type' => 'number', 'required' => false],
            'is_managing_partner' => ['label' => 'Managing Partner?', 'type' => 'checkbox', 'required' => false],
        ],
        
        'entity_documents' => [
            'PARTNERSHIP_DEED' => ['label' => 'Partnership Deed', 'required' => true],
            'FIRM_PAN' => ['label' => 'Firm PAN Card', 'required' => true],
            'GST_CERTIFICATE' => ['label' => 'GST Registration Certificate', 'required' => false],
            'FIRM_REGISTRATION' => ['label' => 'Firm Registration Certificate', 'required' => false],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
            'PASSPORT_PHOTO' => ['label' => 'Passport Size Photo', 'required' => false],
            'ADDRESS_PROOF' => ['label' => 'Address Proof', 'required' => true],
        ],
    ],
    
    'PROPRIETORSHIP' => [
        'label' => 'Proprietorship',
        'short_label' => 'Proprietor',
        'description' => 'Single owner business - proprietor = business',
        'icon' => 'fa-user-tie',
        'color' => 'amber',
        'person_types' => ['PROPRIETOR'],
        'min_persons' => 1,
        'max_persons' => 1,
        'requires_din' => false,
        'requires_dpin' => false,
        'requires_dsc' => false,
        'person_is_entity' => true,  // KEY: Person IS the entity
        
        'entity_fields' => [
            // For Proprietorship, entity PAN = proprietor PAN (captured in person)
            'trade_name' => ['label' => 'Trade/Business Name', 'required' => false, 'placeholder' => 'If different from proprietor name'],
            'gstin' => ['label' => 'GSTIN', 'required' => false],
            'udyam_number' => ['label' => 'Udyam Registration No.', 'required' => false, 'placeholder' => 'UDYAM-XX-00-0000000'],
            'date_of_commencement' => ['label' => 'Date of Business Start', 'type' => 'date', 'required' => false],
            'business_address' => ['label' => 'Business Address', 'type' => 'textarea', 'required' => true],
        ],
        
        'person_fields' => [
            // Proprietor's PAN is the business PAN
            'pan_number' => ['label' => 'PAN (Business PAN)', 'required' => true, 'help' => 'This PAN is used for the business'],
            'aadhaar_number' => ['label' => 'Aadhaar Number', 'required' => true],
            // NO DIN/DPIN for proprietorship
        ],
        
        'entity_documents' => [
            // Most documents are at person level for proprietorship
            'GST_CERTIFICATE' => ['label' => 'GST Registration Certificate', 'required' => false],
            'UDYAM_CERTIFICATE' => ['label' => 'Udyam Registration Certificate', 'required' => false],
            'SHOP_ACT_LICENSE' => ['label' => 'Shop & Establishment License', 'required' => false],
        ],
        
        'person_documents' => [
            // Primary documents for proprietor
            'PAN_CARD' => ['label' => 'PAN Card (Business PAN)', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
            'PASSPORT_PHOTO' => ['label' => 'Passport Size Photo', 'required' => true],
            'ADDRESS_PROOF' => ['label' => 'Address Proof', 'required' => true],
            'BANK_STATEMENT' => ['label' => 'Bank Statement', 'required' => false],
        ],
    ],
    
    'HUF' => [
        'label' => 'Hindu Undivided Family',
        'short_label' => 'HUF',
        'description' => 'Family business entity under Hindu law',
        'icon' => 'fa-home',
        'color' => 'orange',
        'person_types' => ['KARTA', 'COPARCENER'],
        'min_persons' => 2,
        'max_persons' => null,
        'requires_din' => false,
        'requires_dpin' => false,
        'requires_dsc' => false,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'huf_pan' => ['label' => 'HUF PAN', 'required' => true, 'placeholder' => 'AABHF1234A'],
            'gstin' => ['label' => 'GSTIN', 'required' => false],
            'huf_name' => ['label' => 'HUF Name', 'required' => true, 'placeholder' => 'e.g., Ram Kumar HUF'],
        ],
        
        'person_fields' => [
            'pan_number' => ['label' => 'PAN', 'required' => true],
            'relationship_to_karta' => ['label' => 'Relationship to Karta', 'required' => false, 'for' => ['COPARCENER']],
        ],
        
        'entity_documents' => [
            'HUF_PAN' => ['label' => 'HUF PAN Card', 'required' => true],
            'HUF_DEED' => ['label' => 'HUF Declaration/Deed', 'required' => true],
            'GST_CERTIFICATE' => ['label' => 'GST Registration Certificate', 'required' => false],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
        ],
    ],
    
    'OPC' => [
        'label' => 'One Person Company',
        'short_label' => 'OPC',
        'description' => 'Single member company with limited liability',
        'icon' => 'fa-user-shield',
        'color' => 'teal',
        'person_types' => ['DIRECTOR', 'NOMINEE'],
        'min_persons' => 2, // Director + Nominee
        'max_persons' => 2,
        'requires_din' => true,
        'requires_dpin' => false,
        'requires_dsc' => true,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'cin' => ['label' => 'CIN', 'required' => true],
            'company_pan' => ['label' => 'Company PAN', 'required' => true],
            'tan' => ['label' => 'TAN', 'required' => false],
            'gstin' => ['label' => 'GSTIN', 'required' => false],
            'date_of_incorporation' => ['label' => 'Date of Incorporation', 'type' => 'date', 'required' => true],
            'authorized_capital' => ['label' => 'Authorized Capital', 'type' => 'number', 'required' => false],
            'registered_office' => ['label' => 'Registered Office Address', 'type' => 'textarea', 'required' => true],
        ],
        
        'person_fields' => [
            'din' => ['label' => 'DIN', 'required' => true, 'for' => ['DIRECTOR']],
            'pan_number' => ['label' => 'PAN', 'required' => true],
            'dsc_status' => ['label' => 'DSC Status', 'type' => 'select', 'options' => ['NOT_REQUIRED', 'REQUIRED', 'APPLIED', 'ACTIVE', 'EXPIRED'], 'for' => ['DIRECTOR']],
        ],
        
        'entity_documents' => [
            'COI' => ['label' => 'Certificate of Incorporation', 'required' => true],
            'MOA' => ['label' => 'Memorandum of Association', 'required' => true],
            'AOA' => ['label' => 'Articles of Association', 'required' => true],
            'COMPANY_PAN' => ['label' => 'Company PAN Card', 'required' => true],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
            'PASSPORT_PHOTO' => ['label' => 'Passport Size Photo', 'required' => true],
            'ADDRESS_PROOF' => ['label' => 'Address Proof', 'required' => true],
            'NOMINEE_CONSENT' => ['label' => 'Nominee Consent Letter', 'required' => true, 'for' => ['NOMINEE']],
        ],
    ],
    
    'TRUST' => [
        'label' => 'Trust',
        'short_label' => 'Trust',
        'description' => 'Charitable or private trust',
        'icon' => 'fa-hand-holding-heart',
        'color' => 'pink',
        'person_types' => ['TRUSTEE', 'MANAGING_TRUSTEE', 'SETTLER'],
        'min_persons' => 2,
        'max_persons' => null,
        'requires_din' => false,
        'requires_dpin' => false,
        'requires_dsc' => false,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'trust_pan' => ['label' => 'Trust PAN', 'required' => true],
            'registration_number' => ['label' => 'Trust Registration No.', 'required' => true],
            'date_of_registration' => ['label' => 'Date of Registration', 'type' => 'date', 'required' => true],
            '80g_registration' => ['label' => '80G Registration No.', 'required' => false],
            '12a_registration' => ['label' => '12A Registration No.', 'required' => false],
        ],
        
        'person_fields' => [
            'pan_number' => ['label' => 'PAN', 'required' => true],
        ],
        
        'entity_documents' => [
            'TRUST_DEED' => ['label' => 'Trust Deed', 'required' => true],
            'TRUST_PAN' => ['label' => 'Trust PAN Card', 'required' => true],
            'REGISTRATION_CERTIFICATE' => ['label' => 'Trust Registration Certificate', 'required' => true],
            '80G_CERTIFICATE' => ['label' => '80G Certificate', 'required' => false],
            '12A_CERTIFICATE' => ['label' => '12A Certificate', 'required' => false],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
        ],
    ],
    
    'SOCIETY' => [
        'label' => 'Society',
        'short_label' => 'Society',
        'description' => 'Registered society under Societies Registration Act',
        'icon' => 'fa-people-group',
        'color' => 'cyan',
        'person_types' => ['PRESIDENT', 'SECRETARY', 'TREASURER', 'MEMBER'],
        'min_persons' => 7,
        'max_persons' => null,
        'requires_din' => false,
        'requires_dpin' => false,
        'requires_dsc' => false,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'society_pan' => ['label' => 'Society PAN', 'required' => true],
            'registration_number' => ['label' => 'Registration No.', 'required' => true],
            'date_of_registration' => ['label' => 'Date of Registration', 'type' => 'date', 'required' => true],
        ],
        
        'person_fields' => [
            'pan_number' => ['label' => 'PAN', 'required' => false],
            'designation' => ['label' => 'Designation', 'required' => true],
        ],
        
        'entity_documents' => [
            'SOCIETY_REGISTRATION' => ['label' => 'Society Registration Certificate', 'required' => true],
            'SOCIETY_PAN' => ['label' => 'Society PAN Card', 'required' => true],
            'MOA_SOCIETY' => ['label' => 'Memorandum of Society', 'required' => true],
            'RULES_REGULATIONS' => ['label' => 'Rules & Regulations', 'required' => true],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => false],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
        ],
    ],
    
    'SECTION_8' => [
        'label' => 'Section 8 Company',
        'short_label' => 'Sec 8',
        'description' => 'Non-profit company (formerly Section 25)',
        'icon' => 'fa-building-ngo',
        'color' => 'emerald',
        'person_types' => ['DIRECTOR'],
        'min_persons' => 2,
        'max_persons' => null,
        'requires_din' => true,
        'requires_dpin' => false,
        'requires_dsc' => true,
        'person_is_entity' => false,
        
        'entity_fields' => [
            'cin' => ['label' => 'CIN', 'required' => true],
            'company_pan' => ['label' => 'Company PAN', 'required' => true],
            'tan' => ['label' => 'TAN', 'required' => false],
            'date_of_incorporation' => ['label' => 'Date of Incorporation', 'type' => 'date', 'required' => true],
            '12a_registration' => ['label' => '12A Registration No.', 'required' => false],
            '80g_registration' => ['label' => '80G Registration No.', 'required' => false],
        ],
        
        'person_fields' => [
            'din' => ['label' => 'DIN', 'required' => true],
            'pan_number' => ['label' => 'PAN', 'required' => true],
            'dsc_status' => ['label' => 'DSC Status', 'type' => 'select', 'options' => ['NOT_REQUIRED', 'REQUIRED', 'APPLIED', 'ACTIVE', 'EXPIRED']],
        ],
        
        'entity_documents' => [
            'COI' => ['label' => 'Certificate of Incorporation', 'required' => true],
            'MOA' => ['label' => 'Memorandum of Association', 'required' => true],
            'AOA' => ['label' => 'Articles of Association', 'required' => true],
            'COMPANY_PAN' => ['label' => 'Company PAN Card', 'required' => true],
            'LICENSE_SECTION_8' => ['label' => 'Section 8 License', 'required' => true],
        ],
        
        'person_documents' => [
            'PAN_CARD' => ['label' => 'PAN Card', 'required' => true],
            'AADHAAR' => ['label' => 'Aadhaar Card', 'required' => true],
            'PASSPORT_PHOTO' => ['label' => 'Passport Size Photo', 'required' => true],
            'ADDRESS_PROOF' => ['label' => 'Address Proof', 'required' => true],
        ],
    ],
];

/**
 * Helper function to get entity type config
 */
function getEntityTypeConfig($entityType) {
    global $ENTITY_TYPE_CONFIG;
    
    // Handle alias: PVT_LTD maps to PRIVATE_LIMITED
    $typeMap = [
        'PVT_LTD' => 'PRIVATE_LIMITED',
    ];
    
    $mappedType = $typeMap[$entityType] ?? $entityType;
    return $ENTITY_TYPE_CONFIG[$mappedType] ?? null;
}

/**
 * Get person type label based on entity type
 */
function getPersonTypeLabel($entityType, $personType) {
    $labels = [
        'DIRECTOR' => 'Director',
        'SHAREHOLDER' => 'Shareholder',
        'DIRECTOR_SHAREHOLDER' => 'Director & Shareholder',
        'DESIGNATED_PARTNER' => 'Designated Partner',
        'PARTNER' => 'Partner',
        'PROPRIETOR' => 'Proprietor',
        'KARTA' => 'Karta',
        'COPARCENER' => 'Coparcener',
        'NOMINEE' => 'Nominee',
        'TRUSTEE' => 'Trustee',
        'MANAGING_TRUSTEE' => 'Managing Trustee',
        'SETTLER' => 'Settler',
        'PRESIDENT' => 'President',
        'SECRETARY' => 'Secretary',
        'TREASURER' => 'Treasurer',
        'MEMBER' => 'Member',
    ];
    return $labels[$personType] ?? $personType;
}

/**
 * Check if a field is applicable for a given person type
 */
function isFieldApplicableForPersonType($fieldConfig, $personType) {
    if (!isset($fieldConfig['for'])) {
        return true; // Applicable to all if 'for' not specified
    }
    return in_array($personType, $fieldConfig['for']);
}

/**
 * Get all entity types for dropdown
 */
function getEntityTypeOptions() {
    global $ENTITY_TYPE_CONFIG;
    $options = [];
    foreach ($ENTITY_TYPE_CONFIG as $key => $config) {
        $options[$key] = $config['label'];
    }
    return $options;
}

/**
 * Get all entity type configurations
 * Useful for JavaScript-side processing
 */
function getAllEntityTypeConfigs() {
    global $ENTITY_TYPE_CONFIG;
    
    // Map both PVT_LTD and PRIVATE_LIMITED to same config
    $configs = $ENTITY_TYPE_CONFIG;
    
    // Add alias mappings
    if (isset($configs['PRIVATE_LIMITED'])) {
        $configs['PVT_LTD'] = $configs['PRIVATE_LIMITED'];
    }
    
    return $configs;
}
