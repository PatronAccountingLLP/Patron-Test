@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Singapore Pte Ltd Setup Delhi 2026 | Patron Accounting</title>
    <meta name="description" content="Set up Singapore Pte Ltd from Delhi - ACRA filing, resident director, SUTE tax exemption, India-Singapore DTAA MLI PPT memo and FEMA Form ODI compliance.">
    <link rel="canonical" href="https://www.patronaccounting.com/company-registration-in-singapore/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Singapore Pte Ltd Setup Delhi 2026 | Patron Accounting">
    <meta property="og:description" content="Set up Singapore Pte Ltd from Delhi - ACRA filing, resident director, SUTE tax exemption, India-Singapore DTAA MLI PPT memo and FEMA Form ODI compliance.">
    <meta property="og:url" content="https://www.patronaccounting.com/company-registration-in-singapore/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/company-registration-in-singapore/delhi-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Singapore Pte Ltd Setup Delhi 2026 | Patron Accounting">
    <meta name="twitter:description" content="Set up Singapore Pte Ltd from Delhi - ACRA filing, resident director, SUTE tax exemption, India-Singapore DTAA MLI PPT memo and FEMA Form ODI compliance.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/company-registration-in-singapore/delhi-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/company-registration-in-singapore/delhi/#service",
        "name": "Company Registration in Singapore - Delhi",
        "description": "End-to-end setup of a Singapore Private Limited Company (Pte Ltd) for Indian founders, fund managers and SMEs in Delhi-NCR under the Singapore Companies Act 1967 read with the Income Tax Act 1947 - paired with the India-side Foreign Exchange Management Act 1999 and Overseas Investment Rules, Regulations and Directions 2022 (effective 22 August 2022) compliance and India-Singapore Double Taxation Avoidance Agreement (original treaty signed 1994; 2016 Protocol effective from AY 2017-18 introducing source-based capital gains on shares acquired after 1 April 2017 and the Limitation of Benefits clause under Article 24A) as modified by the Multilateral Convention to Implement Tax Treaty Related Measures to Prevent BEPS (MLI) with the Principal Purpose Test under Article 7 effective from 1 April 2020 (taxable periods on or after this date) positioning aligned with CBDT Circular 01/2025 dated 21 January 2025 (PPT applies prospectively; pre-1 April 2017 grandfathered shares remain outside PPT scope; LOB clause continues to apply). Service covers pre-setup jurisdictional and entity structuring memo evaluating Singapore Pte Ltd versus Singapore Variable Capital Company (VCC) versus Mauritius GBC versus UAE Free Zone versus Cayman Exempted Company with GAAR (Income Tax Act 1961 Chapter X-A Sections 95-102), POEM under Section 6(3), MLI PPT, India-Singapore DTAA Limitation of Benefits (Article 24A expenditure threshold of S$200,000 over 24 months) and FEMA OI route mapping for the specific use case (operating company, holding company, regional headquarters, fund VCC or treaty-eligible holding), Singapore Pte Ltd incorporation through a licensed corporate filing agent on the Accounting and Corporate Regulatory Authority (ACRA) BizFile+ portal with name reservation (typically same day to 2 days), Memorandum of Association drafting, BizFile+ filing, Unique Entity Number (UEN) allotment, resident director arrangement (mandatory minimum of one resident director who is a Singapore citizen, Permanent Resident or EntrePass holder; nominee directors commonly used by foreign founders through the Singapore corporate service provider with clear engagement letter, KYC pack and indemnity terms typically running S$2,000 to S$4,000 per year), company secretary appointment within 6 months of incorporation (mandatory under Companies Act 1967), registered office service in Singapore and Certificate of Incorporation issuance typically within 1 to 3 working days, Companies Act 1967 minimum requirements (1 resident director, 1 shareholder which can be individual or corporate with 100 percent foreign ownership allowed, registered office in Singapore, company secretary within 6 months, S$1 minimum paid-up share capital), India-side FEMA Overseas Investment Rules 2022 compliance with Form ODI Part I drafting, Rule 7(3) valuation report for the Singapore Pte Ltd, AD Category-I bank submission in Delhi, RBI Unique Identification Number (UIN) allotment, outward remittance authorisation (Indian companies on automatic route up to 400 percent of net worth; resident individuals under LRS USD 250,000 per FY with financial-services entities NOT permitted under LRS), Form ODI Part II filing in India within 30 days of remittance and Annual Performance Report (APR) by 31 December annually with FEMA Section 13 penalties (up to 3 times the sum involved where quantifiable plus INR 5,000 per day for continuing contravention), Singapore corporate bank account opening through DBS, OCBC or UOB traditional banks (typically 2 to 4 weeks; some banks allow remote opening while others require in-person Singapore visit; EMI fallback through Wise Business, Aspire or Airwallex where traditional bank declines) plus payment processor onboarding, IRAS corporate tax registration with Tax Residency Certificate (TRC) application for treaty claim purposes, Goods and Services Tax (GST) registration with IRAS where taxable turnover exceeds S$1 million in any 12-month period (or voluntary registration), India-Singapore DTAA and MLI PPT positioning memo including TRC from IRAS, beneficial ownership memo, Limitation of Benefits compliance demonstration (Article 24A expenditure threshold of S$200,000 over 24 months) and Principal Purpose Test defence memo aligned with CBDT Circular 01/2025, POEM playbook calendar to prevent inadvertent Indian tax residence under Section 6(3) where the Singapore Pte Ltd would otherwise be taxed at 40 percent plus surcharge and cess in India (resident director chairs strategic board meetings; minutes signed in Singapore; principal banking and key contracts authorised by the Singapore board; where dual residence is unavoidable, Article 4 tie-breaker POEM test with documentation aligned to the result) and ongoing annual compliance pack covering ACRA Annual Return within 7 months of FY end after the AGM, AGM within 6 months of FY end, audited or unaudited financial statements (small company exemption applies where 2 of 3 criteria met - total revenue not exceeding S$10 million, total assets not exceeding S$10 million, number of employees not exceeding 50), Estimated Chargeable Income (ECI) filed within 3 months of FY end (waivers apply when revenue does not exceed S$5 million and ECI is nil), Form C-S or Form C corporate income tax return filed electronically with IRAS by 30 November, GST returns where registered, India APR by 31 December annually and Indian tax positions where applicable. Singapore Corporate Tax - 17 percent flat headline rate; Start-Up Tax Exemption (SUTE) for first 3 Years of Assessment giving 75 percent exemption on the first S$100,000 of normal chargeable income plus 50 percent on the next S$100,000 reducing the effective rate to approximately 4.25 percent on the first slab; Partial Tax Exemption (PTE) thereafter giving 75 percent exemption on first S$10,000 plus 50 percent on next S$190,000 reducing the effective rate to approximately 8.3 percent on the first S$200,000; YA 2026 Corporate Income Tax Rebate of 40 percent on tax payable capped at S$30,000 per company (Budget 2026). ACRA government fees - name application S$15; incorporation S$300 (combined S$315); small company annual return S$60. Authority - Accounting and Corporate Regulatory Authority (ACRA) and Inland Revenue Authority of Singapore (IRAS) on the Singapore side; Reserve Bank of India through AD Category-I Bank and CBDT on the India side.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/company-registration-in-singapore/delhi" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Private company limited by shares", "sameAs": "https://en.wikipedia.org/wiki/Companies_of_Singapore" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Singapore Pte Ltd Setup Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Pre-Setup Structuring Memo (Jurisdiction + Tax + FEMA + DTAA/PPT)",
                    "description": "Two-week jurisdiction and entity structuring memo evaluating Singapore Pte Ltd versus Singapore Variable Capital Company (VCC) versus Mauritius GBC versus UAE Free Zone versus Cayman Exempted Company for the specific use case. Maps GAAR (Income Tax Act 1961 Chapter X-A Sections 95-102), POEM under Section 6(3), MLI Principal Purpose Test, India-Singapore DTAA (1994 + 2016 Protocol + MLI effective 1 April 2020) including Limitation of Benefits Article 24A expenditure threshold of S$200,000 over 24 months, Start-Up Tax Exemption tax projection across the first 3 Years of Assessment and the FEMA OI Rules 2022 route. Output - a binding structural recommendation memo with the binding quote for the downstream Singapore + India execution scope.",
                    "priceCurrency": "INR",
                    "price": "24999",
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "price": "24999",
                        "priceCurrency": "INR",
                        "description": "Starting from INR 24,999 (exclusive of GST and government charges); pricing scales with the number of jurisdictions evaluated and the depth of GAAR / POEM / PPT analysis required"
                    },
                    "areaServed": { "@type": "City", "name": "Delhi" }
                },
                {
                    "@type": "Offer",
                    "name": "India-Side FEMA Overseas Investment Execution",
                    "description": "Form ODI Part I drafting with Rule 7(3) valuation report for the Singapore Pte Ltd, AD Category-I bank submission in Delhi, RBI Unique Identification Number (UIN) allotment, outward remittance authorisation (Indian companies up to 400 percent of net worth on automatic route under FEMA OI Rules 2022; resident individuals under LRS USD 250,000 per FY excluding financial-services entities), Form ODI Part II filing within 30 days of remittance and Annual Performance Report (APR) by 31 December annually. Includes FEMA Section 13 penalty defence memo where applicable.",
                    "priceCurrency": "INR",
                    "price": "49999",
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "price": "49999",
                        "priceCurrency": "INR",
                        "description": "Starting from INR 49,999 (exclusive of GST and government charges); AD bank charges, valuer fees and ACRA government fees (S$315) pass-through at actuals"
                    },
                    "areaServed": { "@type": "City", "name": "Delhi" }
                },
                {
                    "@type": "Offer",
                    "name": "India-Singapore DTAA + MLI PPT Positioning Memo",
                    "description": "Tax Residency Certificate (TRC) application from IRAS, beneficial ownership memo, Limitation of Benefits compliance demonstration (Article 24A India-Singapore DTAA expenditure threshold of S$200,000 over 24 months) and treaty claim documentation for royalty, interest and dividend flows under the India-Singapore DTAA (1994 + 2016 Protocol effective AY 2017-18 introducing source-based capital gains on shares acquired after 1 April 2017) as modified by the MLI effective for India's DTAAs from 1 April 2020. Principal Purpose Test defence memo aligned with CBDT Circular 01/2025 dated 21 January 2025 (PPT applies prospectively; pre-1 April 2017 grandfathered shares remain outside PPT scope; LOB clause continues to apply). POEM playbook calendar to prevent inadvertent Indian tax residence under Section 6(3) Income Tax Act 1961 with the Singapore resident director chairing strategic board meetings, minutes signed in Singapore and key contracts authorised by the Singapore board.",
                    "priceCurrency": "INR",
                    "price": "49999",
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "price": "49999",
                        "priceCurrency": "INR",
                        "description": "Starting from INR 49,999 (exclusive of GST and government charges); depth scales with the complexity of the treaty-claimed payment flows and the GAAR / PPT / LOB exposure profile"
                    },
                    "areaServed": { "@type": "City", "name": "Delhi" }
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/company-registration-in-singapore/delhi/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Company Registration in Singapore", "item": "https://www.patronaccounting.com/company-registration-in-singapore" },
            { "@type": "ListItem", "position": 3, "name": "Delhi", "item": "https://www.patronaccounting.com/company-registration-in-singapore/delhi" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/company-registration-in-singapore/delhi/#faq",
        "datePublished": "2026-07-02T08:00:00+05:30",
        "dateModified": "2026-07-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How can an Indian citizen open a company in Singapore?",
                "acceptedAnswer": { "@type": "Answer", "text": "An Indian individual or Indian company can incorporate a Singapore Private Limited Company through a licensed corporate filing agent on ACRA's BizFile+ portal. The Indian leg goes through the FEMA Overseas Investment Rules 2022 via an Authorized Dealer Category-I bank. A resident director (Singapore citizen, Permanent Resident or EntrePass holder) is mandatory; foreign founders typically use a nominee director arrangement at incorporation. 100 percent foreign ownership is permitted; no Singaporean co-founder is required." }
            },
            {
                "@type": "Question",
                "name": "How much does it cost to register a Pte Ltd in Singapore?",
                "acceptedAnswer": { "@type": "Answer", "text": "ACRA government fees are S$315 - S$15 for name application and S$300 for incorporation. Add a nominee resident director (typically S$2,000 to S$4,000 per year), company secretary and registered office (S$800 to S$1,500 per year) and bank account opening assistance. India-side advisory and FEMA ODI execution is cross-listed - indicative bands INR 24,999 + INR 49,999 starting; binding quote shared after a discovery call." }
            },
            {
                "@type": "Question",
                "name": "How long does it take to register a company in Singapore?",
                "acceptedAnswer": { "@type": "Answer", "text": "ACRA incorporation typically takes 1 to 3 working days after name reservation. End-to-end including corporate bank account opening (1 to 4 weeks depending on bank and UBO complexity) and the India-side FEMA ODI route (Form ODI Part I, UIN allotment, remittance, Form ODI Part II) typically runs 4 to 8 weeks." }
            },
            {
                "@type": "Question",
                "name": "What is the corporate tax rate in Singapore?",
                "acceptedAnswer": { "@type": "Answer", "text": "The headline corporate tax rate is a flat 17 percent. For the first three Years of Assessment, the Start-Up Tax Exemption gives a 75 percent exemption on the first S$100,000 of normal chargeable income plus 50 percent on the next S$100,000, reducing the effective rate to about 4.25 percent on the first slab. The Partial Tax Exemption applies thereafter (75 percent on first S$10,000 + 50 percent on next S$190,000). Budget 2026 also added a 40 percent CIT Rebate capped at S$30,000." }
            },
            {
                "@type": "Question",
                "name": "Do I need to be in Singapore to register a company?",
                "acceptedAnswer": { "@type": "Answer", "text": "No. Singapore company registration through ACRA's BizFile+ portal is fully digital. Foreign founders, including Indian residents, do not need to travel to Singapore for incorporation - a licensed filing agent handles the entire process remotely. An in-person visit may still be required for corporate bank account opening with traditional banks (DBS, OCBC, UOB), although remote KYC video calls and EMI alternatives (Wise, Aspire) reduce that need." }
            },
            {
                "@type": "Question",
                "name": "What is a resident director in Singapore?",
                "acceptedAnswer": { "@type": "Answer", "text": "A resident director is a natural person who is ordinarily resident in Singapore - a Singapore citizen, a Permanent Resident or an EntrePass holder. Every Singapore Pte Ltd must have at least one resident director throughout its operating life. Foreign founders without a Singapore-resident representative typically engage a nominee director through their corporate service provider, with an indemnity arrangement that ringfences the nominee's liability." }
            },
            {
                "@type": "Question",
                "name": "What is the India-Singapore DTAA status in 2026?",
                "acceptedAnswer": { "@type": "Answer", "text": "The India-Singapore DTAA dates to 1994. The 2016 Protocol effective for AY 2017-18 introduced source-based capital gains tax in India on shares acquired after 1 April 2017 and a Limitation of Benefits clause. The Multilateral Instrument (MLI) Principal Purpose Test has been in force for the India-Singapore DTAA since 1 April 2020. CBDT Circular 01/2025 dated 21 January 2025 confirms PPT applies prospectively and grandfathered shares (pre-1 April 2017) stay outside PPT scope." }
            },
            {
                "@type": "Question",
                "name": "What is SUTE and how does it apply?",
                "acceptedAnswer": { "@type": "Answer", "text": "SUTE is the Start-Up Tax Exemption available to Singapore Pte Ltd companies for the first 3 Years of Assessment - it gives 75 percent exemption on the first S$100,000 of normal chargeable income plus 50 percent on the next S$100,000. The Partial Tax Exemption (PTE) applies thereafter - 75 percent on first S$10,000 + 50 percent on next S$190,000. Combined with the 17 percent headline rate, this reduces the effective tax rate to approximately 4.25 percent on the first S$100,000 of chargeable income." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/company-registration-in-singapore/delhi",
        "name": "Company Registration in Singapore - Delhi",
        "description": "Set up Singapore Pte Ltd from Delhi - ACRA filing, resident director, SUTE tax exemption, India-Singapore DTAA MLI PPT memo and FEMA Form ODI compliance.",
        "url": "https://www.patronaccounting.com/company-registration-in-singapore/delhi",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com" },
        "about": { "@id": "https://www.patronaccounting.com/company-registration-in-singapore/delhi/#service" },
        "datePublished": "2026-07-02T08:00:00+05:30",
        "dateModified": "2026-07-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/company-registration-in-singapore/delhi/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to register a Singapore Private Limited Company from Delhi",
        "description": "Eight-step sequence to set up a Singapore Private Limited Company (Pte Ltd) from Delhi under the Singapore Companies Act 1967 - from pre-setup structuring memo with Singapore / Mauritius / Cayman / UAE comparison, through Indian board resolution and Rule 7(3) valuation, Form ODI Part I with AD Category-I bank approval and RBI UIN allotment, Singapore name reservation with KYC and beneficial owner declarations through the licensed filing agent, ACRA BizFile+ incorporation with UEN allotment, resident director arrangement plus company secretary appointment within 6 months plus registered office service, Singapore corporate bank account opening (DBS / OCBC / UOB for 1-4 weeks or EMI fallback through Wise / Aspire) and outward remittance with Form ODI Part II within 30 days, ECI within 3 months of FY end, Form C-S/C by 30 November and APR by 31 December plus the multi-year ACRA and IRAS compliance calendar.",
        "totalTime": "P56D",
        "step": [
            {
                "@type": "HowToStep",
                "position": 1,
                "name": "Discovery + Structuring Memo",
                "text": "60-minute consultation followed by two-week pre-setup structuring memo confirming Singapore Pte Ltd fit versus Singapore VCC / Mauritius GBC / UAE Free Zone / Cayman Exempted Company alternatives, India-Singapore DTAA + MLI PPT mapping, Limitation of Benefits Article 24A expenditure threshold analysis, SUTE tax projection across first 3 Years of Assessment and FEMA OI Rules 2022 route confirmation."
            },
            {
                "@type": "HowToStep",
                "position": 2,
                "name": "India Board Resolution + Rule 7(3) Valuation",
                "text": "Drafting of Indian board resolution authorising the ODI (where investor is an Indian company); Rule 7(3) valuation report for the Singapore Pte Ltd by an empanelled valuer; latest audited financial statements of the Indian investor to compute the 400 percent of net worth cap on automatic route; AD Category-I bank identification in Delhi."
            },
            {
                "@type": "HowToStep",
                "position": 3,
                "name": "Form ODI Part I + AD Bank + UIN",
                "text": "AD bank submission in Delhi; UIN allotment by RBI; bank remittance authorisation; LRS route for individuals (USD 250,000 per FY; financial-services entities NOT permitted) versus corporate ODI route. Typical 2 to 3 weeks."
            },
            {
                "@type": "HowToStep",
                "position": 4,
                "name": "Singapore Name Reservation + KYC",
                "text": "Three name options sent to ACRA via BizFile+ through the licensed Singapore filing agent; KYC and Beneficial Owner declarations for every shareholder, director and beneficial owner holding 25 percent or more; name reservation typically same day to 2 days."
            },
            {
                "@type": "HowToStep",
                "position": 5,
                "name": "ACRA Pte Ltd Incorporation + UEN",
                "text": "MOA drafted, BizFile+ submission, Unique Entity Number (UEN) allotted, Business Profile generated - typically 1 to 3 working days. Companies Act 1967 minimum requirements - 1 resident director (Singapore citizen, PR or EntrePass holder), 1 shareholder (100% foreign ownership allowed), registered office in Singapore, S$1 minimum paid-up capital."
            },
            {
                "@type": "HowToStep",
                "position": 6,
                "name": "Resident Director + Company Secretary + Registered Office",
                "text": "Resident director arrangement (nominee through Singapore corporate service partner with indemnity engagement; S$2,000-S$4,000 per year); company secretary appointed within 6 months of incorporation (mandatory under Companies Act 1967); registered office service in Singapore activated (S$800-S$1,500 per year through partner)."
            },
            {
                "@type": "HowToStep",
                "position": 7,
                "name": "Singapore Bank Account Opening",
                "text": "Application to DBS, OCBC or UOB (traditional - 2 to 4 weeks; some allow remote KYC, others require in-person Singapore visit); EMI fallback through Wise Business, Aspire or Airwallex (typically 1 to 2 weeks accepting remote KYC); IRAS Tax Residency Certificate application; GST registration with IRAS where mandatory (turnover above S$1 million) or voluntary."
            },
            {
                "@type": "HowToStep",
                "position": 8,
                "name": "Outward Remittance + Form ODI Part II + Compliance Onboarding",
                "text": "AD bank effects outward remittance; Form ODI Part II filed in India within 30 days; ACRA Annual Return calendar set (within 7 months of FY end after AGM); IRAS calendar with ECI within 3 months of FY end and Form C-S or C by 30 November; India APR by 31 December annually; multi-year master compliance calendar across ACRA, IRAS, AD bank and CBDT."
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "DefinedTermSet",
        "name": "Singapore Pte Ltd Setup Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Singapore Pte Ltd",
                "description": "Private Limited Company under Singapore Companies Act 1967 - separate legal entity, limited liability, standard vehicle for SMEs and foreign founders; 100% foreign ownership allowed; S$1 minimum paid-up capital."
            },
            {
                "@type": "DefinedTerm",
                "name": "ACRA",
                "description": "Accounting and Corporate Regulatory Authority - Singapore's regulator for company incorporation and corporate compliance."
            },
            {
                "@type": "DefinedTerm",
                "name": "BizFile+",
                "description": "ACRA's online portal for incorporation, annual returns and other corporate filings."
            },
            {
                "@type": "DefinedTerm",
                "name": "Resident Director",
                "description": "Natural person ordinarily resident in Singapore - citizen, Permanent Resident or EntrePass holder; mandatory minimum of one for every Pte Ltd throughout operating life."
            },
            {
                "@type": "DefinedTerm",
                "name": "Nominee Director",
                "description": "Resident director arrangement through Singapore corporate service provider for foreign founders without Singapore presence; engagement letter, KYC pack and indemnity terms; typically S$2,000-S$4,000 per year."
            },
            {
                "@type": "DefinedTerm",
                "name": "SUTE",
                "description": "Start-Up Tax Exemption - first 3 Years of Assessment; 75% exemption on first S$100,000 of normal chargeable income plus 50% on next S$100,000; effective rate ~4.25%."
            },
            {
                "@type": "DefinedTerm",
                "name": "PTE",
                "description": "Partial Tax Exemption - permanent regime after SUTE; 75% on first S$10,000 + 50% on next S$190,000; effective rate ~8.3% on first S$200,000."
            },
            {
                "@type": "DefinedTerm",
                "name": "ECI",
                "description": "Estimated Chargeable Income - filed within 3 months of FY end (waivers apply when revenue does not exceed S$5 million and ECI is nil)."
            },
            {
                "@type": "DefinedTerm",
                "name": "Form C-S / C",
                "description": "Annual corporate income tax return filed with IRAS by 30 November (electronic). Form C-S for smaller companies; Form C for others."
            },
            {
                "@type": "DefinedTerm",
                "name": "VCC",
                "description": "Variable Capital Company - special fund vehicle since 2020 regulated by MAS and ACRA; umbrella or stand-alone fund structure."
            },
            {
                "@type": "DefinedTerm",
                "name": "MLI Principal Purpose Test",
                "description": "Article 7 of the Multilateral Convention - treaty benefits denied where one of the principal purposes of an arrangement was tax benefit; effective for India-Singapore DTAA from 1 April 2020."
            },
            {
                "@type": "DefinedTerm",
                "name": "LOB (Article 24A)",
                "description": "Limitation of Benefits clause in the India-Singapore DTAA 2016 Protocol - expenditure threshold of S$200,000 over 24 months to qualify for treaty benefits."
            }
        ]
    }
    </script>
@endsection

<style>
        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }

        h2 {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }
        h3 { color: var(--blue); font-size: 1.5rem; }
        p { color: var(--text-secondary); }
        section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        section a:hover { color: var(--orange-dark); }

        section ul { list-style: none; padding-left: 0; margin: 0; }
        section ul li:not(.nav-item) {
            display: flex; align-items: flex-start; gap: 12px;
            color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px;
        }
        section ul li:not(.nav-item)::before {
            content: ""; width: 22px; height: 22px;
            background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px;
            display: flex; align-items: center; justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }
        main section h3 { color: #14365F !important; }
        main section table { width: 100% !important; font-family: 'Barlow', sans-serif; border-collapse: collapse; border-spacing: 0; }
        main section table thead tr th {
            border: none !important; color: #fff !important; font-size: 14px; font-weight: 700;
            background-color: #14365F !important; padding: 14px 18px; text-align: left;
        }
        main section table thead tr th:first-child { border-radius: 10px 0 0 0; }
        main section table thead tr th:last-child  { border-radius: 0 10px 0 0; }
        main section table tbody tr td {
            padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary);
            background: var(--white);
            border: none !important;
            border-bottom: 1px solid var(--gray-200) !important;
            vertical-align: top;
        }
        main section table tbody tr:nth-child(even) td { background: #F9FAFB; }
        main section table tbody tr:hover td { background: var(--orange-lighter); transition: background 0.15s; }
        main section table tbody tr:last-child td { border-bottom: none !important; }
        main section table tbody tr td:first-child {
            font-weight: 700; color: var(--text-primary);
            min-width: 160px;
        }
        /* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        /* Section 8 / primary entity highlight column in comparison tables */
        .table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
        .table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
        /* Badge pills for service status cells */
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
        .table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        .expert-attribution-box .eab-check { color: var(--green); font-size: 16px; flex-shrink: 0; }
        .expert-attribution-box .eab-title { font-size: 13px; font-weight: 700; color: var(--text-primary); }
        .expert-attribution-box .eab-meta {
            font-size: 12px; color: var(--text-muted);
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
        }
        .expert-attribution-box .eab-meta .eab-sep { color: var(--gray-300); }
        .expert-attribution-box .eab-link {
            font-size: 12px; color: var(--orange); text-decoration: none;
            font-weight: 600; transition: color 0.2s;
        }
        .expert-attribution-box .eab-link:hover { color: var(--orange-dark); text-decoration: underline; }

        /* ============================================
           HERO SECTION
           ============================================ */
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
        }
        .hero-badge svg { width: 14px; height: 14px; }

        .private-registration-heading {
            font-family: 'Barlow', sans-serif !important;
            font-weight: 700 !important;
            font-size: 48px !important;
            line-height: 100% !important;
            color: #14365F !important;
            margin-bottom: 1.5rem !important;
        }
        @media (max-width: 768px) { .private-registration-heading { font-size: 32px !important; line-height: 110% !important; } }
        @media (max-width: 480px) { .private-registration-heading { font-size: 28px !important; } }

        .check-icon {
            width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;
            background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0;
        }
        .check-icon svg { width: 12px; height: 12px; color: var(--green); }

        .benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 100%; }
        .benefit-paragraph span { font-weight: 700; }

        /* Hero CTA Buttons */
        .hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }

        .btn-video {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 12px 20px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
        .btn-video .play-circle {
            width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
            background: var(--orange); border-radius: 50%; transition: transform 0.25s ease;
        }
        .btn-video:hover .play-circle { transform: scale(1.08); }
        .btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }

        .btn-sample {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; background: transparent;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
        .btn-sample svg { width: 16px; height: 16px; }

        /* Trust Section */
        .trust-section { display: flex; flex-direction: column; gap: 20px; }
        .trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
        .trust-item { display: flex; align-items: center; gap: 10px; }
        .trust-icon {
            width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;
            background: var(--gray-50); border-radius: var(--radius-sm);
        }
        .trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
        .trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
        .trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }

        .google-rating {
            display: inline-flex; align-items: center; gap: 12px;
            background: var(--white); border: 1px solid var(--gray-200);
            padding: 10px 16px; border-radius: var(--radius-md);
        }
        .rating-content { display: flex; flex-direction: column; gap: 2px; }
        .rating-stars { display: flex; align-items: center; gap: 2px; }
        .rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
        .rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
        .rating-count { font-size: 11px; color: var(--text-muted); }

        /* ============================================
           FORM CARD
           ============================================ */
        .form-card {
            background: var(--white); border-radius: var(--radius-xl);
            padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative;
            max-width: 420px; width: 100%;
            animation: fadeInForm 0.5s ease 0.2s forwards; opacity: 0;
            margin: 0 auto;
        }
        @keyframes fadeInForm { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-card::before {
            content: ''; position: absolute; top: 0; left: 28px; right: 28px; height: 3px;
            background: linear-gradient(90deg, var(--orange), var(--blue)); border-radius: 0 0 3px 3px;
        }
        .form-header { margin-bottom: 24px; }
        .form-title { font-size: 22px; font-weight: 800; color: var(--blue); margin-bottom: 4px; }
        .form-subtitle { font-size: 13px; color: var(--text-muted); }
        .form-group { margin-bottom: 16px; }
        .form-label {
            display: block; font-family: 'Barlow', sans-serif; font-size: 11px; font-weight: 700;
            color: var(--blue); text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;
        }
        .form-input {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); transition: all 0.2s ease;
        }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:hover { background: var(--gray-100); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Select */
        .form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Phone Group + Country Dropdown */
        .phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
        .phone-group:hover { background: var(--gray-100); }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        .country-code-dropdown {
            display: flex; align-items: center; justify-content: flex-start; gap: 6px;
            padding: 13px 10px 13px 14px; cursor: pointer;
            border-right: 1px solid var(--gray-200); background: transparent; position: relative;
            min-width: 80px; user-select: none; flex-shrink: 0; transition: background 0.15s;
            box-sizing: border-box;
        }
        .country-code-dropdown:hover { background: rgba(0,0,0,0.03); }
        .selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { transition: transform 0.25s ease; color: var(--gray-400); flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { transform: rotate(180deg); }

        /* Country Dropdown List */
        .country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
        .country-code-dropdown.open .country-dropdown-list { display: flex; }
        .country-search-input {
            width: 100%; padding: 11px 14px; border: none; border-bottom: 1px solid var(--gray-200);
            font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
            background: var(--gray-50); outline: none;
        }
        .country-search-input::placeholder { color: var(--gray-400); }
        .country-options { overflow-y: auto; max-height: 260px; scrollbar-width: thin; }
        .country-options::-webkit-scrollbar { width: 5px; }
        .country-options::-webkit-scrollbar-track { background: transparent; }
        .country-options::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 10px; }
        .country-option {
            display: flex; align-items: center; gap: 10px; padding: 10px 14px; cursor: pointer;
            transition: background 0.12s ease; font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
        }
        .country-option:hover, .country-option.active { background: var(--orange-lighter); }
        .country-option .flag-emoji { font-size: 18px; line-height: 1; width: 24px; text-align: center; }
        .country-option .country-name { flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 500; }
        .country-option .dial-code { color: var(--text-muted); font-weight: 600; font-size: 12px; flex-shrink: 0; }

        /* Phone Input Override */
        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }

        /* Submit Button */
        .btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:active { transform: translateY(0); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; box-shadow: none; }

        /* Form Footer */
        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }

        /* Error States */
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }

        /* Success State */
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { width: 64px; height: 64px; background: rgba(16,185,129,0.12); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
        .form-success h3 { font-size: 22px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .form-success p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }

        @media (max-width: 480px) {
            .form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; }
            .form-title { font-size: 20px; }
            .country-dropdown-list { width: 260px; }
            .form-footer { flex-wrap: wrap; gap: 10px; }
            .btn-submit { font-size: 16px; padding: 14px 20px; }
        }

        /* ============================================
           STATS BAR
           ============================================ */
        .stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 32px; }
        .stats-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap;
        }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md);
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
        .stat-label { font-size: 12px; color: var(--text-muted); }
        .certifications {
            display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200);
        }
        .cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
        .cert-item svg { width: 18px; height: 18px; }

        /* ============================================
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
        }
        .toc-container {
            max-width: 1320px; margin: 0 auto; padding: 0 32px;
            display: flex; align-items: center;
        }
        .toc-wrapper {
            display: flex; align-items: center; gap: 10px;
            overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px;
        }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
        .toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-btn.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
        .toc-arrow {
            border: none; cursor: pointer; font-size: 22px;
            width: 45px; height: 45px; border-radius: 50%; background: transparent;
        }
        .toc-arrow.left { margin-right: 8px; }
        .toc-arrow.right { margin-left: 8px; }

        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1320px; margin: 0 auto; }
        .section-container { max-width: 1320px; margin: 0 auto; }
        .text-content { max-width: 100%; }

        .section-title {
            font-size: clamp(26px, 3vw, 32px); font-weight: 800;
            color: var(--blue); margin-bottom: 24px; line-height: 1.25;
        }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: left; }
        .content-text p { margin-bottom: 16px; text-align: left; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }
        .content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }

        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { max-width: 100%; }
        .column-image { display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 24px; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: left; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .illustration-placeholder {
            width: 100%; max-width: 420px; aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 24px; position: relative; overflow: hidden;
        }
        .illustration-icon {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
        }
        .illustration-icon svg { width: 100%; height: 100%; color: var(--blue); }
        .illustration-badge {
            background: var(--white); padding: 12px 20px; border-radius: var(--radius-md);
            box-shadow: var(--shadow-md); text-align: center;
        }
        .illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }

        /* Section Eyebrow */
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }

        /* Steps Section */
        .steps-section { padding: 72px 32px; background: var(--gray-50); }
        .steps-container { display: flex; flex-direction: column; gap: 32px; }
        .step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;
            background: var(--white); border-radius: var(--radius-xl); padding: 40px;
            border: 1px solid var(--gray-200); transition: all 0.3s ease;
        }
        .step-card:hover { box-shadow: var(--shadow-lg); border-color: var(--gray-300); }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { display: flex; flex-direction: column; }
        .step-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--orange); color: var(--white);
            padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content;
        }
        .step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
        .step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; text-align: left; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted);
        }
        .highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
        .step-visual { display: flex; justify-content: center; align-items: center; }
        .step-illustration {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 20px; position: relative; overflow: hidden;
        }
        .step-illustration .illustration-icon {
            width: 100%; max-width: 180px; aspect-ratio: 1; margin-bottom: 8px;
            background: none; box-shadow: none;
        }
        .step-illustration .illustration-icon svg { width: 100%; height: 100%; }
        .illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
        .step-number-large {
            position: absolute; bottom: 16px; right: 20px;
            font-size: 64px; font-weight: 800; color: rgba(27,54,93,0.06); line-height: 1;
        }

        /* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
        .process-screenshot-details summary {
            font-size: 13px; font-weight: 600; color: var(--orange); cursor: pointer;
            display: inline-flex; align-items: center; gap: 6px;
        }
        .process-screenshot-details summary:hover { color: var(--orange-dark); }
        .process-screenshot-details .screenshot-img {
            max-width: 100%; border-radius: 8px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm); margin-top: 10px;
        }
        .process-screenshot-details .screenshot-note {
            font-size: 11px; color: var(--text-muted); margin-top: 6px;
        }

        /* Why Choose Section */
        .why-choose-section { padding: 72px 32px; background: var(--gray-50); }
        .why-choose-header { text-align: center; margin-bottom: 48px; }
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease;
        }
        .feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .feature-icon {
            width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center; margin-bottom: 18px;
        }
        .feature-icon svg { width: 26px; height: 26px; color: var(--orange); }
        .feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .feature-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; text-align: left; }

        /* Reviews CTA */
        .reviews-cta {
            margin-top: 40px; padding: 28px 32px; background: var(--blue);
            border-radius: var(--radius-lg); display: flex;
            align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;
        }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon {
            width: 48px; height: 48px; background: rgba(255,255,255,0.1);
            border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;
        }
        .reviews-cta-icon svg { width: 24px; height: 24px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 18px; font-weight: 700; color: #FFFFFF !important; margin-bottom: 2px; margin-top: 0; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-cta:hover { background: var(--orange-light); color: var(--orange); }
        .btn-cta svg { width: 16px; height: 16px; }

        /* ============================================
           CUSTOM FAQ ACCORDION (replaces Bootstrap accordion)
           ============================================ */
        /* Static FAQ - direct Q&A, always expanded (no collapse) */
        .pa-faq-wrap { display: flex; flex-direction: column; gap: 12px; }
        .pa-faq-item {
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-md);
            overflow: hidden;
            background: var(--white);
        }
        .pa-faq-q-static {
            margin: 0; padding: 18px 22px 0 22px;
            font-size: 15px; font-weight: 700;
            color: var(--blue); line-height: 1.4;
        }
        .pa-faq-body { display: block; }
        .pa-faq-a { padding: 8px 22px 18px; }
        .pa-faq-a p { font-size: 14px; color: var(--text-secondary); line-height: 1.7; margin: 0; }
        @media (max-width: 640px) {
            .pa-faq-q-static { padding: 14px 16px 0 16px; font-size: 14px; }
            .pa-faq-a { padding: 6px 16px 14px; }
        }

        /* ============================================
           CITY & CROSS-SELL GRID CARDS
           ============================================ */
        .pa-city-block { }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 6px; }
        .pa-block-sub   { font-size: 14px; color: var(--text-muted); margin-bottom: 16px; }
        .pa-city-grid, .pa-cross-grid { display: grid; gap: 12px; max-width: 1100px; }
        .pa-city-grid  { grid-template-columns: repeat(4, 1fr); }
        .pa-cross-grid { grid-template-columns: repeat(3, 1fr); }
        .pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 10px;
            padding: 14px 16px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            text-decoration: none; transition: all 0.25s ease;
        }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: 0 4px 16px rgba(232,113,44,0.12); transform: translateY(-2px); }
        .pa-card-icon {
            width: 32px; height: 32px; background: var(--orange-light);
            border-radius: var(--radius-sm); display: flex; align-items: center;
            justify-content: center; flex-shrink: 0;
        }
        .pa-card-title  { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub    { font-size: 11px; color: var(--text-muted); }
        @media (max-width: 768px) {
            .pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
            .pa-cross-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 480px) {
            .pa-city-grid  { grid-template-columns: 1fr; }
            .pa-cross-grid { grid-template-columns: 1fr; }
        }
        .testimonials-section {
            padding: 24px 32px 0 32px;
            background: var(--white);
            overflow: hidden;
        }
        .testimonials-section .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }
        .testimonials-section .section-header {
            text-align: center;
            margin-bottom: 16px;
        }
        .testimonials-section .section-header h2 {
            font-size: clamp(26px, 3.5vw, 34px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 10px;
        }
        .testimonials-section .section-header p {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* Slick overrides */
        .testimonial-slider .slick-slide { padding: 0 10px; height: auto; }
        .testimonial-slider .slick-list { margin: 0 -10px; overflow: hidden; }
        .testimonial-slider .slick-dots { bottom: -40px; }
        .testimonial-slider .slick-dots li button:before { font-size: 10px; color: var(--gray-300); opacity: 1; }
        .testimonial-slider .slick-dots li.slick-active button:before { color: var(--orange); }
        .testimonial-slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
        .testimonial-slider .slick-track { display: flex !important; }
        .testimonial-slider .slick-slide > div { height: 100%; }
        /* Fixed uniform height so text + video cards always match (video area 298px + author = ~370px) */
        .testimonial-slider .testimonial-card { height: 370px !important; min-height: 370px !important; overflow: hidden; }
        .testimonial-slider.slick-initialized { margin-bottom: 0; }

        /* Video Testimonial Card */
        .testi-video-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            overflow: hidden;
            height: 340px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }
        .testi-video-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-video-area {
            position: relative;
            height: 230px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
        }
        .testi-video-area video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .testi-play-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.25);
            transition: opacity 0.3s;
            pointer-events: none;
        }
        .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .testi-play-btn {
            width: 56px;
            height: 56px;
            background: rgba(232,113,44,0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .testi-play-btn svg { width: 22px; height: 22px; color: white; margin-left: 3px; }
        .testi-star-badge {
            position: absolute;
            bottom: 12px;
            left: 12px;
            display: flex;
            gap: 2px;
        }
        .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }

        /* Quote Testimonial Card */
        .testi-quote-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            height: 340px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.25s ease;
        }
        .testi-quote-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-quote-icon { color: var(--orange); opacity: 0.25; margin-bottom: 8px; }
        .testi-quote-icon svg { width: 24px; height: 24px; }
        .testi-quote-text {
            font-size: 14px;
            line-height: 1.65;
            color: var(--text-secondary);
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .testi-footer {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }
        .testi-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .testi-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--white);
            flex-shrink: 0;
            overflow: hidden;
            background: var(--orange);
        }
        .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .testi-avatar.blue { background: var(--blue); }
        .testi-avatar.teal { background: #0D9488; }
        .testi-avatar.purple { background: #7C3AED; }
        .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary); line-height: 1.2; }
        .testi-role { font-size: 12px; color: var(--text-muted); }
        .testi-rating-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .testi-stars { display: flex; gap: 1px; }
        .testi-stars svg { width: 12px; height: 12px; fill: var(--gold); color: var(--gold); }
        .testi-google-badge { width: 22px; height: 22px; }
        .testi-google-badge img { width: 100%; height: 100%; }

        /* Loading state */
        .testi-loading {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 0;
            color: var(--text-muted);
            font-size: 14px;
        }
        .testi-loading .spinner {
            width: 32px;
            height: 32px;
            border: 3px solid var(--gray-200);
            border-top-color: var(--orange);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        @media (max-width: 768px) {
            .testimonials-section { padding: 16px 20px 0 20px; }
        }
        @media (max-width: 576px) {

        }

        

        @media (max-width: 1024px) {
        }
        @media (max-width: 768px) {

        }
        @media (max-width: 480px) {


        }
        @media (max-width: 768px) {

        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .two-column { grid-template-columns: 1fr; gap: 40px; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-container { gap: 32px; }
            .certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }
        }
        @media (max-width: 900px) {
            .step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
            .step-card:nth-child(even) { direction: ltr; }
            .step-visual { order: -1; }
        }
        @media (max-width: 768px) {
            .content-section { padding: 40px 16px; }
            .hero-cta { flex-direction: column; }
            .btn-video, .btn-sample { width: 100%; justify-content: center; }
            .stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
            .stat-item { width: 100%; }
            .features-grid { grid-template-columns: 1fr; gap: 16px; }
            .reviews-cta { flex-direction: column; text-align: center; }
            .reviews-cta-content { flex-direction: column; }
            .content-text { font-size: 14px; }
            .accordion-body { text-align: left; }
            main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; }
            main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; }
            .table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); }
            .col-lg-4 { margin-top: 24px; }
            .form-card { max-width: 100%; }
            .private-registration-heading { margin-bottom: 1rem !important; }
            .benefit-paragraph { font-size: 0.9rem; }
            .hero-badge { font-size: 12px; padding: 6px 12px; }
            .expert-attribution-box { padding: 10px 14px; }
            .expert-attribution-box .eab-title { font-size: 12px; }
            .expert-attribution-box .eab-meta { font-size: 11px; }
            .trust-section { gap: 12px; }
            .trust-row { gap: 16px; }
            .google-rating { width: 100%; }
            section ul li:not(.nav-item) { font-size: 14px; }
        }

        /* Smooth scroll offset */
        .content-section[id] { scroll-margin-top: 80px; }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    
        /* Trust Badge Descriptions */
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }

        /* City Interlinking Grid */
        @media (max-width: 768px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }
        }
        @media (max-width: 480px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }
        }

        /* ============================================
           STICKY WHATSAPP BAR
           ============================================ */
        .wa-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #0F6E56;
            z-index: 9999;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.15);
            transition: transform 0.35s ease;
        }
        .wa-sticky-bar.hidden { transform: translateY(100%); }
        .wa-sticky-bar-content {
            display: flex;
            align-items: center;
            gap: 12px;
            max-width: 1320px;
            width: 100%;
            justify-content: center;
        }
        .wa-sticky-bar-icon {
            width: 36px; height: 36px; flex-shrink: 0;
            display: flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.2); border-radius: 50%;
        }
        .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
        .wa-sticky-bar-text {
            font-family: 'Barlow', sans-serif;
            font-size: 15px; color: #fff; font-weight: 500;
        }
        .wa-sticky-bar-text strong { font-weight: 700; }
        .wa-sticky-bar-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 8px 22px; background: #fff; color: #0F6E56;
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            border: none; border-radius: 50px; cursor: pointer;
            text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
        }
        .wa-sticky-bar-btn:hover { background: #E1F5EE; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
        .wa-sticky-bar-close {
            background: none; border: none; cursor: pointer;
            color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1;
            padding: 4px 8px; transition: color 0.2s; flex-shrink: 0;
            font-family: 'Barlow', sans-serif; font-weight: 300;
        }
        .wa-sticky-bar-close:hover { color: #fff; }
        @media (max-width: 768px) {
            .wa-sticky-bar { padding: 8px 12px; gap: 8px; }
            .wa-sticky-bar-text { font-size: 13px; }
            .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
            .wa-sticky-bar-icon { width: 30px; height: 30px; }
            .wa-sticky-bar-icon svg { width: 16px; height: 16px; }
        }
        @media (max-width: 480px) {
            .wa-sticky-bar-text { display: none; }
            .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
            .wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
            .wa-sticky-bar-btn span { display: none; }
        }
</style>

@section('content')
<main>

<!-- BREADCRUMB -->
<nav aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="https://www.patronaccounting.com" style="color:var(--text-muted);text-decoration:none;font-weight:500;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Home
                </a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="https://www.patronaccounting.com/company-registration-in-singapore/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Company Registration in Singapore</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li><span style="color:var(--orange);font-weight:600;">Delhi</span></li>
        </ol>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Company Registration in Singapore from Delhi
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">2 July 2026</span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> KYC, business plan, MOA, resident director, registered office, BO declaration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Hub 05 cross-listed - call for tailored quote; indicative INR 24,999 / INR 49,999 starting bands</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> 1 shareholder, 1 resident director, S$1 minimum paid-up capital, 100% foreign ownership</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> ACRA approval 1-3 days; bank 1-4 weeks; end-to-end 4-8 weeks</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Singapore Pte Ltd Setup%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Singapore Pte Ltd Setup%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20register%20a%20Singapore%20Pte%20Ltd%20from%20Delhi%20with%20FEMA%20ODI%20compliance.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA & CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars">
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <span class="rating-score">4.9</span>
                                </div>
                                <span class="rating-count">Based on 500+ reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card" id="consultationFormCard">
                    <div class="form-header">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <p class="form-subtitle">Talk to a CA/CS expert today</p>
                    </div>

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                    <form id='BiginWebToRecordForm208810000001209168'
                          name='BiginWebToRecordForm208810000001209168'
                          action='https://bigin.zoho.in/crm/WebToRecordForm'
                          method='POST'
                          enctype='multipart/form-data'
                          target='hidden208810000001209168Frame'
                          onSubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() && checkMandatory208810000001209168()'
                          accept-charset='UTF-8'>

                        <input type='text' style='display:none;' name='xnQsjsdp' value='e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'/>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                        <input type='text' style='display:none;' name='xmIwtLD' value='2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843'/>
                        <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
                        <input type='hidden' name='rmsg' id='rmsg' value='true'/>
                        <input type='text' style='display:none;' name='returnURL' value='null' />
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Singapore Pte Ltd Setup'/>
                        <input type='hidden' name='Pipeline' value='Sales Pipeline Standard'/>
                        <input type='hidden' name='Stage' value='Qualification'/>
                        <input type='hidden' name='Contacts.Lead Source' id='pageSourceField' value=''/>

                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input name='Contacts.Last Name' id='consultFullName' type='text' maxlength='80'
                                   class='form-input' placeholder='Your name' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-group" id="phoneGroup">
                                <div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
                                    <span class="selected-flag" id="selectedFlag">&#127470;&#127475;</span>
                                    <span class="selected-code" id="selectedCode">+91</span>
                                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                                    <div class="country-dropdown-list" id="countryDropdownList">
                                        <input type="text" class="country-search-input" id="countrySearchInput"
                                               placeholder="Search country..." onclick="event.stopPropagation()" oninput="filterCountries(this.value)"/>
                                        <div class="country-options" id="countryOptions"></div>
                                    </div>
                                </div>
                                <input type='text' class='form-input phone-input' id='phoneNumberInput' maxlength='15'
                                       placeholder='Enter phone number'
                                       oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";'
                                       onblur='validatePhoneOnBlur(this)'/>
                                <div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
                            </div>
                            <input type='hidden' name='Contacts.Mobile' id='combinedMobileField' value=''/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input name='Contacts.Mailing City' id='consultCity' type='text' maxlength='100'
                                   class='form-input' placeholder='Enter your city' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled selected>Select a service</option>
                                <option value='Company Registration in Singapore - Delhi' selected>Company Registration in Singapore - Delhi</option>
                                <option value='Company Registration in USA'>Company Registration in USA</option>
                                <option value='Company Registration in UAE'>Company Registration in UAE</option>
                                <option value='Private Limited Company Registration - Delhi'>Private Limited Company Registration - Delhi</option>
                                <option value='LLP Incorporation - Delhi'>LLP Incorporation - Delhi</option>
                                <option value='ITR for Companies - Delhi'>ITR for Companies - Delhi</option>
                                <option value='Income Tax Notice - Delhi'>Income Tax Notice - Delhi</option>
                                <option value='Other'>Other</option>

                            </select>
                        </div>

                        <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote &rarr;</button>
                    </form>

                    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

                    <div class="form-footer">
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            Quick Response
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, &amp; stay in control.</p>
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <div class="testimonial-card" style="padding:0;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;overflow:hidden;">
    <div style="position:relative;cursor:pointer;height:298px;flex-shrink:0;background:#000;" onclick="var v=this.querySelector('video'); if(v.paused){v.play();this.querySelector('.testi-play-ov').style.display='none';}else{v.pause();this.querySelector('.testi-play-ov').style.display='flex';}">
        <video preload="metadata" poster="https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;"><source src="https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4"></video>
        <div class="testi-play-ov" style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;">
            <div style="width:54px;height:54px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,0.35);"><svg viewBox="0 0 24 24" fill="#fff" style="width:22px;height:22px;margin-left:2px;"><path d="M8 5v14l11-7z"/></svg></div>
        </div>
        <div style="position:absolute;left:16px;bottom:12px;color:var(--orange);font-size:15px;text-shadow:0 1px 3px rgba(0,0,0,0.5);">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    </div>
    <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
        <div style="width:36px;height:36px;border-radius:50%;overflow:hidden;flex-shrink:0;"><img src="https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal" style="width:100%;height:100%;object-fit:cover;"></div>
        <div style="min-width:0;"><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director - Demandify Media</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics of ITR filing and I really admire their skills to look into data and provide necessary guidance to Client.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sameer Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:0;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;overflow:hidden;">
    <div style="position:relative;cursor:pointer;height:298px;flex-shrink:0;background:#000;" onclick="var v=this.querySelector('video'); if(v.paused){v.play();this.querySelector('.testi-play-ov').style.display='none';}else{v.pause();this.querySelector('.testi-play-ov').style.display='flex';}">
        <video preload="metadata" poster="https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;"><source src="https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4"></video>
        <div class="testi-play-ov" style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;">
            <div style="width:54px;height:54px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,0.35);"><svg viewBox="0 0 24 24" fill="#fff" style="width:22px;height:22px;margin-left:2px;"><path d="M8 5v14l11-7z"/></svg></div>
        </div>
        <div style="position:absolute;left:16px;bottom:12px;color:var(--orange);font-size:15px;text-shadow:0 1px 3px rgba(0,0,0,0.5);">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    </div>
    <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
        <div style="width:36px;height:36px;border-radius:50%;overflow:hidden;flex-shrink:0;"><img src="https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava" style="width:100%;height:100%;object-fit:cover;"></div>
        <div style="min-width:0;"><div style="font-weight:700;font-size:13px;color:var(--blue);">Anjanay Srivastava</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder - Hunarsource Consulting</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Really a fantastic experience with Patron accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth and quick ITR filling experience.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Recommend to give them a try.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PA</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Pankaj Arvikar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially filing the ITR.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anita Gaur</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Very professional team. I have been using this accounting firm services for IT filing from last 3 years. Its super convenient.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">Y</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Yuvraj</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I&#x27;ve had an outstanding experience working with Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process smooth and stress-free. Highly recommended for anyone seeking reliable and knowledgeable financial guidance!</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I&#x27;m glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really impressed by their acumen. And it&#x27;s not expensive at all. Good guidance while filling was given as well.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Google Review</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
    </div>
</div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                <div class="reviews-cta-text"><h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3><p>Get expert support for your Delhi business. Accurate, compliant, on-time.</p></div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">Talk to an Expert<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
    </div>
</section>


<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is Pte Ltd</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Should Use</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">SG vs MU vs KY vs UAE</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Singapore Pte Ltd Setup from Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Singapore Pte Ltd Setup Services at a Glance</strong></p>
                    <p>A Singapore Private Limited Company (Pte Ltd) is the standard vehicle for Indian founders going global, incorporated under the Companies Act 1967 through ACRA on the BizFile+ portal. Setup requires 1 resident director, 1 shareholder, a company secretary within 6 months and S$1 minimum paid-up capital. Corporate tax is 17% with effective rates as low as 4.25% under the Start-Up Tax Exemption.</p>
                </div>
                <p><div class='table-responsive-wrapper'>
                <table>
                    <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Laws</td><td>Singapore - Companies Act 1967; Income Tax Act 1947. India - FEMA 1999 + Overseas Investment Rules / Regulations / Directions 2022. India-Singapore DTAA (1994) as amended by 2016 Protocol (effective 1 April 2017) and MLI PPT (effective 1 April 2020)</td></tr>
                        <tr><td>Applicable To</td><td>Indian companies (ODI on automatic route up to 400% of net worth) and resident individuals under LRS (USD 250,000 per FY; financial-services entities NOT permitted)</td></tr>
                        <tr><td>Timeline</td><td>ACRA name reservation same day to 2 days; incorporation 1-3 working days; corporate bank account 1-4 weeks; India-side Form ODI Part I + UIN + remittance 2-3 weeks; end-to-end 4-8 weeks for standard cases</td></tr>
                        <tr><td>Cost (Indicative)</td><td>Hub 05 cross-list. Singapore govt fees S$315 (S$15 name + S$300 incorporation). Annual maintenance S$3,000-S$6,000. India advisory bands - Structuring Memo INR 24,999 starting, FEMA ODI Execution INR 49,999 starting, DTAA + MLI PPT Memo INR 49,999 starting</td></tr>
                        <tr><td>Tax Rate</td><td>17% headline; effective ~4.25% for first 3 YAs with SUTE; ~8.3% under PTE thereafter; 40% one-off CIT Rebate (capped S$30,000) for YA 2026</td></tr>
                        <tr><td>Forms / Portal</td><td>Singapore - ACRA BizFile+ (incorporation); IRAS for ECI (within 3 months of FY end) and Form C-S/C (by 30 November). India - Form ODI Part I (pre), Part II (within 30 days), APR (by 31 December), Form OFC (disinvestment)</td></tr>
                        <tr><td>Authority</td><td>Singapore - ACRA (registrar) + IRAS (tax); India - RBI through AD Category-I Bank + CBDT for treaty interpretation</td></tr>
                    </tbody>
                </table>
                </div></p>
                <p>Singapore is the most established jurisdiction for Indian outbound investment - the largest single source of FDI into India, a top-4 source of Foreign Portfolio Investment and the preferred regional headquarters location for Indian founders building global businesses. The Singapore Private Limited Company (Pte Ltd), incorporated under the Companies Act 1967 through ACRA on the BizFile+ portal, takes 1 to 3 working days to set up. The Indian leg, governed by the FEMA Overseas Investment Rules 2022 through an Authorized Dealer Category-I bank, runs in parallel.</p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is a Singapore Private Limited Company?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Singapore Private Limited Company (Pte Ltd) is a separate legal entity incorporated under the <strong>Companies Act 1967</strong> and registered with the <strong>Accounting and Corporate Regulatory Authority (ACRA)</strong> through the BizFile+ portal. It is the standard vehicle for Indian founders going global because of:</p>
<ul>
    <li><strong>17% headline corporate tax</strong> with effective rates as low as <strong>4.25%</strong> under the Start-Up Tax Exemption in the first 3 Years of Assessment</li>
    <li><strong>India-Singapore DTAA</strong> (1994 + 2016 Protocol + MLI PPT effective 1 April 2020)</li>
    <li>World-class banking (DBS, OCBC, UOB) and regional headquarters status</li>
    <li>The deepest treaty network in Asia (Singapore has 84+ DTAAs)</li>
</ul>

<p>A Pte Ltd requires:</p>
<ul>
    <li>At least <strong>1 resident director</strong> (Singapore citizen, Permanent Resident or EntrePass holder; nominee directors commonly used by foreign founders)</li>
    <li>At least <strong>1 shareholder</strong> (individual or corporate; <strong>100% foreign ownership is allowed</strong>)</li>
    <li>A registered office in Singapore</li>
    <li>A company secretary appointed <strong>within 6 months</strong> (mandatory)</li>
    <li><strong>S$1 minimum paid-up capital</strong></li>
</ul>

<p>Unlike the UK (where company secretary is optional under Section 270), the Singapore Pte Ltd has a mandatory company secretary requirement within 6 months of incorporation. The resident director requirement is similarly more stringent than the UK or Delaware C-Corp - Singapore mandates a physically resident director, which drives the nominee director arrangement for foreign founders.</p>

<p>Delhi anchors this engagement because of access to AD Category-I bank head offices, the Income Tax international taxation circles and the highest concentration of SaaS founders, family offices and fund managers in India. Patron's engagement covers both legs - Singapore Pte Ltd incorporation through a licensed filing agent on BizFile+ plus the India-side FEMA Overseas Investment Rules 2022 compliance through an Authorized Dealer Category-I bank in Delhi.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Singapore Pte Ltd Setup:</strong></p>
                    <p><strong>Pte Ltd:</strong> Private Limited Company under Companies Act 1967; separate legal entity; limited liability; standard vehicle for SMEs and foreign founders.</p>
<p><strong>ACRA:</strong> Accounting and Corporate Regulatory Authority - Singapore's regulator for company incorporation and corporate compliance.</p>
<p><strong>BizFile+:</strong> ACRA's online portal for incorporation, annual returns and other corporate filings.</p>
<p><strong>Resident Director:</strong> Singapore citizen, PR or EntrePass holder; mandatory minimum of one for every Pte Ltd throughout operating life.</p>
<p><strong>Nominee Director:</strong> Resident director arrangement through Singapore corporate service provider for foreign founders; S$2,000-S$4,000 per year.</p>
<p><strong>SUTE:</strong> Start-Up Tax Exemption - first 3 YAs; 75% exemption on first S$100,000 + 50% on next S$100,000; effective rate ~4.25%.</p>
<p><strong>PTE:</strong> Partial Tax Exemption - permanent regime after SUTE; 75% on first S$10,000 + 50% on next S$190,000.</p>
<p><strong>ECI:</strong> Estimated Chargeable Income - filed within 3 months of FY end.</p>
<p><strong>Form C-S / C:</strong> Annual corporate income tax return with IRAS by 30 November (electronic).</p>
<p><strong>VCC:</strong> Variable Capital Company - special fund vehicle since 2020 regulated by MAS and ACRA.</p>
<p><strong>MLI PPT:</strong> Article 7 of the Multilateral Convention - in force for India from 1 October 2019; effective for India-Singapore DTAA from 1 April 2020.</p>
<p><strong>LOB Article 24A:</strong> India-Singapore DTAA Limitation of Benefits clause - expenditure threshold of S$200,000 over 24 months.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="40" y="50" width="120" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Roof / Pediment -->
                            <path d="M30 52L100 15L170 52" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <!-- Columns -->
                            <rect x="55" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="112" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="137" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="88" y="105" width="24" height="35" rx="12" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="1"/>
                            <!-- Scale of Justice icon -->
                            <circle cx="100" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="100" y1="70" x2="100" y2="86" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="90" y1="76" x2="110" y2="76" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"/>
                            <path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Singapore Pte Ltd Setup</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Companies Act 1967 + Income Tax Act 1947</span>
                        <strong>ACRA BizFile+ + 17% Tax (4.25% with SUTE)</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Should Use a Singapore Structure (and Who Should Not)</h2>
            <div class="content-text">
                
                <p>A Singapore Pte Ltd is HIGH-VALUE for the following Delhi-NCR profiles:</p>
                <ul>
                    <li><strong>Indian founders building global SaaS, fintech or services businesses:</strong> Singapore is the standard regional headquarters location with world-class banking and talent access.</li>
                    <li><strong>Indian operating companies setting up Asia-Pacific subsidiaries:</strong> For distribution, sourcing or regional sales.</li>
                    <li><strong>Family offices and HNIs holding non-India investments:</strong> Where treaty access and effective sub-10% tax matter.</li>
                    <li><strong>Fund managers establishing a Variable Capital Company (VCC):</strong> Under MAS regulation for global investors.</li>
                    <li><strong>Indian businesses accessing deep DTAA network:</strong> Singapore has 84+ DTAAs for cross-border royalty, interest and dividend flows.</li>
                </ul>
                <p style="margin-top:16px;"><strong>NOT optimal for:</strong> Pure offshore holding with no operating substance (MLI PPT effective 1 April 2020 will deny treaty benefits where one of the principal purposes was tax benefit); capital gains arbitrage on shares of Indian companies acquired after 1 April 2017 (source-based taxation applies under the 2016 Protocol); round-tripping back into India (explicitly prohibited under FEMA OI Rules 2022); resident-individual investment under LRS in financial-services entities (LRS does not permit this; corporate ODI route required); structures where day-to-day management remains in India (POEM rules under Section 6(3) will treat the Singapore company as Indian tax resident, taxed at 40% plus surcharge and cess).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Singapore Setup Services - Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Setup Structuring Memo</td><td>Two-week jurisdiction and entity review covering Singapore Pte Ltd vs Singapore VCC vs Mauritius GBC vs UAE Free Zone vs Cayman Exempted Company. Maps GAAR, POEM, MLI PPT, India-Singapore DTAA and the FEMA OI route for the specific use case.</td></tr>
                        <tr><td>Singapore Pte Ltd Incorporation through Licensed Filing Agent</td><td>Coordination with Singapore corporate service partner - ACRA name reservation, MOA drafting, BizFile+ filing, UEN allotment, resident director arrangement (nominee where required), company secretary appointment and registered office service.</td></tr>
                        <tr><td>FEMA OI Rules 2022 Compliance (India Side)</td><td>Form ODI Part I drafting, Rule 7(3) valuation, AD Category-I bank submission in Delhi, UIN allotment, Form ODI Part II within 30 days of remittance and Annual Performance Report (APR) by 31 December.</td></tr>
                        <tr><td>Singapore Bank Account Opening and KYC</td><td>Application packets for DBS, OCBC, UOB, Wise, Aspire or other partner banks; remote opening where supported; in-person Singapore visit coordination where required.</td></tr>
                        <tr><td>India-Singapore DTAA and MLI PPT Positioning</td><td>TRC application with IRAS, beneficial ownership memo, Limitation of Benefits compliance demonstration (Article 24A expenditure threshold of S$200,000 over 24 months) and PPT defence memo aligned with CBDT Circular 01/2025.</td></tr>
                        <tr><td>Ongoing Annual Compliance Pack</td><td>ACRA annual return (within 7 months of FY end after AGM), audited or unaudited financial statements (small company exemption applies), ECI (within 3 months of FY end), Form C-S or C with IRAS (by 30 November), GST returns (if registered), India APR by 31 December and Indian tax positions where applicable.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">8 Steps to Set Up Singapore Pte Ltd from Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron's Delhi-to-Singapore Pte Ltd pipeline runs from pre-setup structuring memo with four-jurisdiction comparison (Singapore / Mauritius / Cayman / UAE) and India-Singapore DTAA + MLI PPT mapping, through Indian board resolution and Rule 7(3) valuation, Form ODI Part I with AD Category-I bank approval and RBI UIN allotment, Singapore name reservation with KYC and beneficial owner declarations through licensed filing agent, ACRA BizFile+ incorporation with UEN allotment in 1-3 working days, resident director + company secretary + registered office setup, Singapore corporate bank account with DBS / OCBC / UOB or EMI fallback and final outward remittance with Form ODI Part II within 30 days plus the multi-year compliance calendar. Each step is a fixed deliverable - no surprises mid-engagement.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Discovery + Structuring Memo</h3>
                    <p>60-minute consultation followed by two-week pre-setup memo confirming Singapore Pte Ltd fit versus Singapore VCC / Mauritius GBC / UAE Free Zone / Cayman Exempted Company, India-Singapore DTAA + MLI PPT mapping, LOB Article 24A expenditure threshold analysis, SUTE tax projection across first 3 YAs and FEMA OI Rules 2022 route confirmation.</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="45" y="55" width="50" height="32" rx="3" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><text x="70" y="70" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Singapore</text><text x="70" y="82" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">17%/4.25%</text><rect x="105" y="55" width="50" height="32" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="130" y="70" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Mauritius</text><text x="130" y="82" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">15%/3%</text><rect x="45" y="92" width="50" height="32" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="70" y="107" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Cayman</text><text x="70" y="119" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">0%</text><rect x="105" y="92" width="50" height="32" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="130" y="107" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UAE</text><text x="130" y="119" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">9%</text><rect x="45" y="130" width="110" height="18" rx="2" fill="#E8F5E9"/><text x="100" y="142" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">DTAA + MLI PPT</text></svg>
                    </div>
                    <div class="step-label">4-Jurisdiction Comparison</div>
                    <div class="step-number-large">01</div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">India Board Resolution + Rule 7(3) Valuation</h3>
                    <p>Drafting of Indian board resolution authorising the ODI (where investor is an Indian company); Rule 7(3) valuation report for the Singapore Pte Ltd by empanelled valuer; latest audited financials of Indian investor to compute the 400% net worth cap; AD Category-I bank identification in Delhi.</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="55" y="55" width="90" height="35" rx="3" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><text x="100" y="70" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Indian Board</text><text x="100" y="83" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial">Resolution</text><rect x="45" y="95" width="110" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="109" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rule 7(3) Valuation</text><rect x="45" y="120" width="110" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="100" y="134" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">400% Net Worth Cap</text></svg>
                    </div>
                    <div class="step-label">Board Resolution + Valuation</div>
                    <div class="step-number-large">02</div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Form ODI Part I + AD Bank + UIN</h3>
                    <p>AD bank submission in Delhi; UIN allotment by RBI; bank remittance authorisation; LRS route for individuals (USD 250,000 per FY; financial-services entities NOT permitted) versus corporate ODI route. Typical 2-3 weeks.</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="55" y="50" width="90" height="32" rx="3" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><text x="100" y="64" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ODI Part I</text><text x="100" y="77" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial">AD Cat-I Bank</text><rect x="45" y="88" width="110" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="102" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RBI UIN</text><rect x="45" y="113" width="110" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="100" y="127" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">FEMA OI Rules 2022</text></svg>
                    </div>
                    <div class="step-label">ODI Part I + UIN + Remittance</div>
                    <div class="step-number-large">03</div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Singapore Name Reservation + KYC</h3>
                    <p>Three name options sent to ACRA via BizFile+ through the licensed Singapore filing agent; KYC and Beneficial Owner declarations for every shareholder, director and beneficial owner holding 25% or more; name reservation typically same day to 2 days.</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="55" y="55" width="90" height="32" rx="3" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><text x="100" y="69" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ACRA Name</text><text x="100" y="82" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial">BizFile+</text><rect x="45" y="93" width="110" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="107" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">KYC + BO 25%+</text><rect x="45" y="118" width="110" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="100" y="132" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Same Day - 2 Days</text></svg>
                    </div>
                    <div class="step-label">ACRA Name + BO Declarations</div>
                    <div class="step-number-large">04</div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">ACRA Pte Ltd Incorporation + UEN</h3>
                    <p>MOA drafted, BizFile+ submission under Companies Act 1967, Unique Entity Number (UEN) allotted, Business Profile generated - typically 1 to 3 working days. ACRA government fee S$300 (plus S$15 name application; total S$315). Companies Act 1967 minimum - 1 resident director, 1 shareholder, S$1 paid-up.</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="55" y="55" width="90" height="40" rx="6" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><text x="100" y="73" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ACRA</text><text x="100" y="87" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial">BizFile+</text><circle cx="100" cy="120" r="13" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M94 120l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round" fill="none"/><rect x="45" y="138" width="110" height="12" rx="2" fill="#F0F4F8"/><text x="100" y="147" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CoI + UEN</text></svg>
                    </div>
                    <div class="step-label">ACRA + UEN + 1-3 Days</div>
                    <div class="step-number-large">05</div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Resident Director + Co Secretary + Reg Office</h3>
                    <p>Resident director arrangement (nominee through Singapore corporate service partner - S$2,000-S$4,000/yr with indemnity engagement); company secretary appointed within 6 months of incorporation (mandatory under Companies Act 1967); registered office service in Singapore activated (S$800-S$1,500/yr).</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="45" y="55" width="50" height="22" rx="2" fill="#FFE5E5" stroke="#DC2626" stroke-width="1"/><text x="70" y="69" font-size="8" fill="#DC2626" font-weight="700" text-anchor="middle" font-family="Arial">Resident Dir</text><rect x="105" y="55" width="50" height="22" rx="2" fill="#FFF3E0"/><text x="130" y="69" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Co Sec</text><rect x="45" y="82" width="110" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="96" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Within 6 Months</text><rect x="45" y="108" width="110" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="100" y="122" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Registered Office</text><rect x="45" y="132" width="110" height="14" rx="2" fill="#FFF3E0"/><text x="100" y="143" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Nominee S$2k-4k/yr</text></svg>
                    </div>
                    <div class="step-label">Nominee Dir + Co Sec + RO</div>
                    <div class="step-number-large">06</div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Singapore Bank Account Opening</h3>
                    <p>Application to DBS, OCBC or UOB (traditional - 2 to 4 weeks; remote KYC video call where supported; in-person Singapore visit usually required); EMI fallback via Wise Business, Aspire or Airwallex (1-2 weeks accepting remote KYC); IRAS Tax Residency Certificate application; GST registration where mandatory (turnover above S$1 million).</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="45" y="55" width="50" height="35" rx="3" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><text x="70" y="69" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DBS</text><text x="70" y="80" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">2-4 wks</text><rect x="105" y="55" width="50" height="35" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="130" y="69" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Wise EMI</text><text x="130" y="80" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">1-2 wks</text><rect x="45" y="95" width="110" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="109" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IRAS TRC + GST</text><rect x="45" y="120" width="110" height="22" rx="3" fill="#FFF3E0" stroke="#E8712C" stroke-width="1"/><text x="100" y="134" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">GST Above S$1M</text></svg>
                    </div>
                    <div class="step-label">DBS/OCBC/UOB or Wise/Aspire</div>
                    <div class="step-number-large">07</div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Outward Remittance + Form ODI Part II + Compliance</h3>
                    <p>AD bank effects outward remittance; Form ODI Part II filed in India within 30 days; ACRA Annual Return calendar set (within 7 months of FY end after AGM); IRAS calendar with ECI within 3 months of FY end and Form C-S or C by 30 November; India APR by 31 December annually; multi-year master compliance calendar.</p>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="35" width="140" height="120" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="35" width="140" height="20" rx="6" fill="#14365F"/><text x="100" y="49" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">Singapore + India Live</text><rect x="42" y="65" width="42" height="20" rx="2" fill="#FFF3E0"/><text x="63" y="78" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Part II</text><rect x="89" y="65" width="42" height="20" rx="2" fill="#FFF3E0"/><text x="110" y="78" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">APR</text><rect x="136" y="65" width="30" height="20" rx="2" fill="#FFF3E0"/><text x="151" y="78" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ECI</text><rect x="42" y="90" width="42" height="20" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="63" y="103" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form C-S</text><rect x="89" y="90" width="42" height="20" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="110" y="103" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ACRA AR</text><rect x="136" y="90" width="30" height="20" rx="2" fill="#FFE5E5"/><text x="151" y="103" font-size="6" fill="#DC2626" font-weight="700" text-anchor="middle" font-family="Arial">PPT</text><rect x="45" y="115" width="110" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="100" y="129" font-size="10" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Multi-Year Calendar</text></svg>
                    </div>
                    <div class="step-label">ODI Part II + APR + Calendar</div>
                    <div class="step-number-large">08</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist for Singapore Pte Ltd Setup from Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li>Passport and residential address proof of every shareholder, director and beneficial owner (25% or more)</li>
                    <li>Bank reference letter for each beneficial owner</li>
                    <li>CV / professional history of each director (used for bank KYC)</li>
                    <li>Indian PAN and Aadhaar of the resident investor or director (for AD bank ODI processing)</li>
                    <li>Indian investor's board resolution authorising the ODI (where investor is an Indian company)</li>
                    <li>Latest audited financial statements of the Indian investor company</li>
                    <li>Rule 7(3) valuation report for the Singapore Pte Ltd</li>
                    <li>Detailed business plan covering activities, target markets and projected financials</li>
                    <li>Three proposed company names (in case the first is taken or requires referral)</li>
                    <li>Source-of-funds declaration and KYC pack as required by the Singapore bank</li>
                    <li>FATCA / CRS declarations where applicable</li>
                    <li>Indian investor company memorandum and articles (where Indian company is the ODI source)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Delhi-Singapore Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Resident director requirement</td><td>Foreign Indian founders cannot themselves act as the resident director without EntrePass or PR. Every Pte Ltd must have at least one resident director throughout its operating life.</td><td>Patron arranges a nominee director through the Singapore corporate service partner, with a clear engagement letter, KYC pack and indemnity terms. Nominee fees typically run S$2,000-S$4,000 per year and are billed separately. The engagement ringfences the nominee's liability with proper indemnity.</td></tr>
                        <tr><td>Bank account opening - the most variable step</td><td>Singapore banks tighten KYC for foreign-owned companies, especially when no Singapore-resident UBO is on the cap table. DBS, OCBC, UOB applications can decline despite clean source-of-funds.</td><td>Patron pre-qualifies the application with the bank, prepares a clean source-of-funds story, lines up a 30-minute video KYC and has an EMI fallback (Wise, Aspire, Airwallex) ready if a traditional bank declines. The EMI fallback is configured before incorporation, not after a decline.</td></tr>
                        <tr><td>India-Singapore DTAA MLI PPT</td><td>In force from 1 April 2020 - treaty benefits can be denied where obtaining the benefit is one of the principal purposes.</td><td>Patron builds a commercial purpose memo at the outset documenting the operational rationale beyond tax. Aligns with CBDT Circular 01/2025 which confirms PPT applies prospectively only and grandfathered shares pre-1 April 2017 stay outside scope. The memo is designed for assessment defence under both PPT and GAAR.</td></tr>
                        <tr><td>POEM under Section 6(3) Income Tax Act 1961</td><td>If effective management remains in India, the Singapore Pte Ltd becomes Indian tax resident, taxed at 40% plus surcharge and cess.</td><td>Resident director chairs strategic board meetings; minutes signed in Singapore; principal banking and key contracts authorised by the Singapore board. Patron's POEM playbook calendar prevents inadvertent Indian tax residence. Where dual residence is unavoidable, Article 4 tie-breaker (POEM test) is run with documentation aligned to the result.</td></tr>
                        <tr><td>Withholding tax position</td><td>Dividends from India to Singapore Pte Ltd attract DDT (abolished) replaced by classical treatment; interest and royalty rates need treaty claim with TRC; LOB Article 24A expenditure threshold of S$200,000 over 24 months applies.</td><td>Patron assists the Singapore Pte Ltd in obtaining the IRAS Tax Residency Certificate annually, structures the income flows for cleanest treaty application and files Form 10F and Section 195 lower deduction certificates in India where applicable. LOB Article 24A compliance file maintained.</td></tr>
                        <tr><td>Company secretary 6-month deadline</td><td>Companies Act 1967 mandates company secretary appointment within 6 months of incorporation; non-appointment triggers ACRA enforcement and director liability.</td><td>Patron's Singapore partner appoints the company secretary at incorporation itself (not at 6-month edge); company secretary is a qualified person under Section 171 - either an accountant, lawyer or chartered secretary. Engagement is annual with renewal calendar built in.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Fees for Singapore Pte Ltd Setup (Indicative - Hub 05 Cross-list)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-setup Structuring Memo (jurisdiction + tax + FEMA + DTAA/PPT mapping)</td><td>Starting from INR 24,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>India-side FEMA ODI execution (Form ODI Part I + UIN + Part II)</td><td>Starting from INR 49,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Singapore Pte Ltd incorporation (ACRA filing + UEN)</td><td>Pass-through at actuals (ACRA S$315) plus Patron + Singapore partner coordination</td></tr>
                        <tr><td>Resident director (nominee) annual fee</td><td>Pass-through S$2,000-S$4,000 per year</td></tr>
                        <tr><td>Company secretary + registered office annual fee</td><td>Pass-through S$800-S$1,500 per year</td></tr>
                        <tr><td>Singapore bank account opening assistance</td><td>Starting from INR 24,999 (Exl GST and Govt. Charges) plus bank charges</td></tr>
                        <tr><td>Annual Performance Report (APR) - India side</td><td>Starting from INR 14,999 per year (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Singapore annual compliance pack (ACRA + IRAS + ECI + Form C-S)</td><td>Starting from S$3,000 per year through partner; coordination via Patron</td></tr>
                        <tr><td>India-Singapore DTAA + PPT positioning memo</td><td>Starting from INR 49,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ACRA government fees</td><td>S$15 name application + S$300 incorporation = S$315 total - at actuals</td></tr>
                        <tr><td>ACRA small company annual return</td><td>S$60 - at actuals</td></tr>
                        <tr><td>GST registration with IRAS (where applicable)</td><td>Free with IRAS; Patron + Singapore partner coordination</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Singapore Pte Ltd Setup consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20register%20a%20Singapore%20Pte%20Ltd%20from%20Delhi%20with%20FEMA%20ODI%20compliance.%20Please%20share%20the%20process%20and%20fees." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Required for Singapore Pte Ltd Setup from Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Structuring memo and FEMA route confirmation</td><td>1-2 weeks</td></tr>
                        <tr><td>Indian board resolution, Rule 7(3) valuation and AD bank Form ODI Part I + UIN allotment</td><td>2-3 weeks</td></tr>
                        <tr><td>Singapore name reservation (ACRA BizFile+)</td><td>Same day to 2 days</td></tr>
                        <tr><td>Singapore ACRA incorporation (UEN allotment)</td><td>1-3 working days</td></tr>
                        <tr><td>Resident director + company secretary + registered office setup</td><td>1 week</td></tr>
                        <tr><td>Singapore bank account opening - traditional (DBS / OCBC / UOB)</td><td>2-4 weeks (varies by bank and UBO complexity; in-person visit may be required)</td></tr>
                        <tr><td>Singapore bank account opening - EMI fallback (Wise / Aspire / Airwallex)</td><td>1-2 weeks (remote KYC accepted)</td></tr>
                        <tr><td>India outward remittance and Form ODI Part II</td><td>1-3 working days remittance; Part II within 30 days</td></tr>
                        <tr><td>End-to-end live Singapore Pte Ltd with India compliance</td><td>4-8 weeks for standard cases</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>India deadlines are strict</strong> - Form ODI Part II within 30 days of outward remittance, APR by 31 December annually, with FEMA Section 13 penalties up to 3 times the sum involved plus INR 5,000 per day continuing. <strong>Singapore deadlines</strong> - ECI within 3 months of FY end (waivers apply for small companies meeting both revenue and nil-tax conditions), Form C-S or C with IRAS by 30 November (electronic), ACRA annual return within 7 months of FY end after the AGM. <strong>The India-Singapore DTAA Principal Purpose Test</strong> has been in force since 1 April 2020; substance and commercial-purpose documentation should be in place BEFORE the first treaty claim, not after a notice arrives.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Benefits of Engaging a Specialist Firm</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Single Delhi Team Across Both Legs</h3>
                <p class="feature-text">Delhi office runs the India-side FEMA OI Rules 2022 compliance through an Authorized Dealer Category-I bank; Singapore corporate service partner handles ACRA incorporation, resident director arrangement, company secretary, registered office, IRAS registration and ongoing compliance. No coordination overhead between vendors.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">India-Singapore DTAA + MLI PPT Memo from Day One</h3>
                <p class="feature-text">Critical because PPT has been in force since 1 April 2020 - any structure built without PPT defence documentation faces denial of treaty benefits at first assessment. Patron's TRC + LOB Article 24A + commercial purpose memo built at outset, aligned with CBDT Circular 01/2025.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Pre-Qualified Singapore Bank Relationships</h3>
                <p class="feature-text">DBS, OCBC, UOB pre-qualified with clean source-of-funds story; EMI fallback (Wise, Aspire, Airwallex) configured before incorporation. Reduces the most variable step in the timeline - bank account opening - from 4-6 weeks to 1-4 weeks.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">POEM Playbook to Prevent Indian Tax Residence</h3>
                <p class="feature-text">Resident director chairs strategic board meetings; minutes signed in Singapore; principal banking and key contracts authorised by the Singapore board. Patron's POEM calendar prevents the 40% Indian corporate tax + surcharge + cess exposure that POEM triggers.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Singapore Budget 2026 Awareness</h3>
                <p class="feature-text">40% CIT Rebate (capped S$30,000), refined SUTE eligibility, AI deduction and other Budget 2026 changes baked into the SUTE projection at structuring. First-year tax filings claim all available exemptions and rebates.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">CA + CS Named Sign-Off Across Both Jurisdictions</h3>
                <p class="feature-text">No junior-only handling on cross-border work. Master compliance calendar covering ACRA Annual Return, IRAS ECI + Form C-S/C, India APR, Indian tax positions - calendared at engagement with reminders 30 days before each due date.</p>
            </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof - Delhi Founders Trust Patron for Singapore Setup</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years</strong></p>
                <blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:20px 0;color:var(--text-secondary);font-style:italic;">"I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really impressed by their acumen. And it's not expensive at all. Good guidance while filling was given as well." - Rajib Dutta, Google Review</blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:20px 0;color:var(--text-secondary);font-style:italic;">"Professionalism, attention to detail and timely communication made the entire process smooth and stress-free. Highly recommended for anyone seeking reliable and knowledgeable financial guidance." - Subhendu Mishra, Google Review</blockquote>
                <p><strong>Trusted by Delhi-NCR SaaS founders, fund managers, family offices and operating companies setting up Singapore regional headquarters and holding structures with India-Singapore DTAA + MLI PPT positioning and FEMA OI Rules 2022 compliance.</strong></p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves Indian outbound founders through a Delhi-anchored India team plus Singapore corporate service partners on the ground.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Singapore vs Mauritius vs Cayman vs UAE - Comparison for Indian Founders</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Singapore (Pte Ltd) - This Page</th><th>Mauritius (GBC)</th><th>Cayman Islands</th><th>UAE (Free Zone)</th></tr></thead>
                    <tbody>
                        <tr><td>Corporate tax</td><td>17% headline; ~4.25% effective with SUTE; ~8.3% with PTE</td><td>15% (effective ~3% with 80% PE)</td><td>0%</td><td>9% above AED 375,000</td></tr>
                        <tr><td>Capital gains</td><td>0% (no CG tax)</td><td>0% in Mauritius</td><td>0%</td><td>0% most cases</td></tr>
                        <tr><td>DTAA with India</td><td>Yes; MLI PPT effective 1 April 2020</td><td>Yes (1983; 2016 + 2024 Protocols)</td><td>No</td><td>Yes</td></tr>
                        <tr><td>CG on Indian shares (post 1 Apr 2017)</td><td>Source-based (India taxes)</td><td>Source-based (India taxes)</td><td>Not applicable (no treaty)</td><td>Source-based for some categories</td></tr>
                        <tr><td>Setup timeline (incorporation)</td><td>1-3 working days</td><td>4-6 weeks</td><td>5-7 business days</td><td>2-6 weeks</td></tr>
                        <tr><td>Substance requirements</td><td>Resident director + company secretary + registered office; ECI/Form C-S</td><td>2 resident directors, board in Mauritius, local records</td><td>Economic Substance Act 2018 if in scope</td><td>ESR Regulations</td></tr>
                        <tr><td>First-year cost (full)</td><td>ACRA S$315 + ~S$3,000 ongoing</td><td>USD 5,000-12,000</td><td>USD 3,500-5,000</td><td>USD 4,000-10,000</td></tr>
                        <tr><td>Common use cases</td><td>Regional HQ, SaaS holdco, fund VCC, treaty access</td><td>India inbound non-CG, Africa, fund management</td><td>Hedge funds, listing SPVs, IP holding</td><td>Trading, services, regional ops</td></tr>
                        <tr><td>Banking</td><td>World-class (DBS, OCBC, UOB)</td><td>Solid (Mauritius banks)</td><td>Specialised offshore</td><td>Strong (Emirates NBD, Mashreq)</td></tr>
                        <tr><td>India-side route</td><td>FEMA OI Rules 2022</td><td>FEMA OI Rules 2022</td><td>FEMA OI Rules 2022</td><td>FEMA OI Rules 2022</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong><a href="https://www.patronaccounting.com/company-registration-in-usa">Company Registration in USA</a>:</strong> Delaware C-Corp setup via Division of Corporations - the alternative jurisdiction for VC fundraising and US market entry. India-side same FEMA OI Rules 2022 framework. Compare for the right downstream use case.</li>
                    <li><strong><a href="https://www.patronaccounting.com/company-registration-in-uae">Company Registration in UAE</a>:</strong> UAE Free Zone or Mainland setup at 9% corporate tax above AED 375,000 - useful for Indian founders with Middle East customer concentration or seeking regional HQ closer to South Asia.</li>
                    <li><strong><a href="https://www.patronaccounting.com/private-limited-company-registration/delhi">Private Limited Company Registration - Delhi</a>:</strong> Indian holding or operating Pvt Ltd at the India end of the structure - the typical India-side investor entity for the outbound ODI route to Singapore.</li>
                    <li><strong><a href="https://www.patronaccounting.com/llp-incorporation/delhi">LLP Incorporation - Delhi</a>:</strong> India-side LLP option for founders who want lighter compliance at the Indian end while running the Singapore Pte Ltd separately for international operations.</li>
                    <li><strong><a href="https://www.patronaccounting.com/itr-for-companies/delhi">ITR Filing for Companies - Delhi</a>:</strong> Indian investor company ITR-6 with the ODI reporting in Schedule FA (Foreign Assets) including the Singapore Pte Ltd shareholding.</li>
                    <li><strong><a href="https://www.patronaccounting.com/income-tax-notice/delhi">Income Tax Notice Reply - Delhi</a>:</strong> POEM or PPT notices on the Indian investor - particularly relevant where central management is challenged or the India-Singapore DTAA treaty claim is queried at scrutiny.</li>
                    <li><strong><a href="https://www.patronaccounting.com/us-bank-account-opening">US Bank Account Opening from India</a>:</strong> For cross-structured setups - Mercury, Chase or SVB account opening from India for entities that pair with Singapore Pte Ltd holdings.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Singapore Primary Statute:</strong> Companies Act 1967 of Singapore.</p>
                <p><strong>Singapore Tax Statute:</strong> Income Tax Act 1947 (Singapore) - 17% flat corporate rate; SUTE first 3 YAs (75% on first S$100,000 + 50% on next S$100,000); PTE thereafter (75% on first S$10,000 + 50% on next S$190,000).</p>
                <p><strong>YA 2026 CIT Rebate:</strong> 40% one-off rebate on tax payable, capped at S$30,000 per company (Budget 2026).</p>
                <p><strong>Singapore Regulator (Companies):</strong> Accounting and Corporate Regulatory Authority (ACRA).</p>
                <p><strong>Singapore Tax Authority:</strong> Inland Revenue Authority of Singapore (IRAS).</p>
                <p><strong>Singapore Filing Portal:</strong> BizFile+ (ACRA) and myTax Portal (IRAS).</p>
                <p><strong>ACRA Government Fees:</strong> Name application S$15; incorporation S$300; annual return S$60 (small company).</p>
                <p><strong>Indian Statute (Outbound):</strong> FEMA 1999 + Foreign Exchange Management (Overseas Investment) Rules 2022 + Regulations 2022 + Directions 2022, effective 22 August 2022.</p>
                <p><strong>India ODI Limit (Companies):</strong> 400% of net worth on automatic route.</p>
                <p><strong>India LRS Limit (Individuals):</strong> USD 250,000 per FY; financial-services entities NOT permitted under LRS.</p>
                <p><strong>Indian Forms:</strong> Form ODI Part I, Form ODI Part II (within 30 days), APR (by 31 December), Form OFC (disinvestment).</p>
                <p><strong>India-Singapore DTAA:</strong> Original treaty 1994; 2016 Protocol effective from AY 2017-18 for source-based capital gains on shares acquired after 1 April 2017; Limitation of Benefits clause (Article 24A).</p>
                <p><strong>MLI:</strong> India-Singapore DTAA is a Covered Tax Agreement; Principal Purpose Test under MLI Article 7 effective from 1 April 2020 (taxable periods on or after this date).</p>
                <p><strong>CBDT Guidance:</strong> Circular No. 01/2025 dated 21 January 2025 - PPT applies prospectively; pre-1 April 2017 grandfathered shares remain outside PPT scope; LOB clause continues to apply.</p>
                <p><strong>Indian Anti-Avoidance:</strong> GAAR - Income Tax Act 1961 Chapter X-A (Sections 95 to 102); POEM - Section 6(3); SEP - Explanation 2A to Section 9(1)(i).</p>
                <p><strong>Penalty (FEMA Section 13):</strong> Up to 3 times the sum involved (where quantifiable) plus INR 5,000 per day for continuing contravention.</p>
                <p><strong>Singapore Annual Compliance:</strong> AGM within 6 months of FY end; Annual Return within 7 months; ECI within 3 months of FY end; Form C-S/C with IRAS by 30 November.</p>
                <p><strong>GST Registration:</strong> Mandatory if taxable turnover exceeds S$1 million in any 12-month period; voluntary registration also available.</p>
                <p><strong>Authority for source verification:</strong> ACRA at <a href="https://www.acra.gov.sg" target="_blank" rel="noopener">acra.gov.sg</a>, IRAS at <a href="https://www.iras.gov.sg" target="_blank" rel="noopener">iras.gov.sg</a>, RBI Master Direction on Overseas Investment at <a href="https://www.rbi.org.in" target="_blank" rel="noopener">rbi.org.in</a>, CBDT Circular 01/2025 at <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">incometaxindia.gov.in</a> and India Code at <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">FAQs: Company Registration in Singapore from Delhi in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about Company Registration in Singapore from Delhi for Delhi businesses, answered by our CA and CS team.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Delhi', 'enquiryService' => 'Company Registration in Singapore from Delhi in Delhi'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How can an Indian citizen open a company in Singapore?</h3>
                        <div class="faq-expanded__a"><p>An Indian individual or Indian company can incorporate a Singapore Private Limited Company through a licensed corporate filing agent on ACRA's BizFile+ portal. The Indian leg goes through the FEMA Overseas Investment Rules 2022 via an Authorized Dealer Category-I bank. A resident director (Singapore citizen, Permanent Resident or EntrePass holder) is mandatory; foreign founders typically use a nominee director arrangement at incorporation. 100 percent foreign ownership is permitted; no Singaporean co-founder is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does it cost to register a Pte Ltd in Singapore?</h3>
                        <div class="faq-expanded__a"><p>ACRA government fees are S$315 - S$15 for name application and S$300 for incorporation. Add a nominee resident director (typically S$2,000 to S$4,000 per year), company secretary and registered office (S$800 to S$1,500 per year) and bank account opening assistance. India-side advisory and FEMA ODI execution is cross-listed - indicative bands INR 24,999 + INR 49,999 starting; binding quote shared after a discovery call.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does it take to register a company in Singapore?</h3>
                        <div class="faq-expanded__a"><p>ACRA incorporation typically takes 1 to 3 working days after name reservation. End-to-end including corporate bank account opening (1 to 4 weeks depending on bank and UBO complexity) and the India-side FEMA ODI route (Form ODI Part I, UIN allotment, remittance, Form ODI Part II) typically runs 4 to 8 weeks.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the corporate tax rate in Singapore?</h3>
                        <div class="faq-expanded__a"><p>The headline corporate tax rate is a flat 17 percent. For the first three Years of Assessment, the Start-Up Tax Exemption gives a 75 percent exemption on the first S$100,000 of normal chargeable income plus 50 percent on the next S$100,000, reducing the effective rate to about 4.25 percent on the first slab. The Partial Tax Exemption applies thereafter (75 percent on first S$10,000 + 50 percent on next S$190,000). Budget 2026 also added a 40 percent CIT Rebate capped at S$30,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I need to be in Singapore to register a company?</h3>
                        <div class="faq-expanded__a"><p>No. Singapore company registration through ACRA's BizFile+ portal is fully digital. Foreign founders, including Indian residents, do not need to travel to Singapore for incorporation - a licensed filing agent handles the entire process remotely. An in-person visit may still be required for corporate bank account opening with traditional banks (DBS, OCBC, UOB), although remote KYC video calls and EMI alternatives (Wise, Aspire) reduce that need.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is a resident director in Singapore?</h3>
                        <div class="faq-expanded__a"><p>A resident director is a natural person who is ordinarily resident in Singapore - a Singapore citizen, a Permanent Resident or an EntrePass holder. Every Singapore Pte Ltd must have at least one resident director throughout its operating life. Foreign founders without a Singapore-resident representative typically engage a nominee director through their corporate service provider, with an indemnity arrangement that ringfences the nominee's liability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the India-Singapore DTAA status in 2026?</h3>
                        <div class="faq-expanded__a"><p>The India-Singapore DTAA dates to 1994. The 2016 Protocol effective for AY 2017-18 introduced source-based capital gains tax in India on shares acquired after 1 April 2017 and a Limitation of Benefits clause. The Multilateral Instrument (MLI) Principal Purpose Test has been in force for the India-Singapore DTAA since 1 April 2020. CBDT Circular 01/2025 dated 21 January 2025 confirms PPT applies prospectively and grandfathered shares (pre-1 April 2017) stay outside PPT scope.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is SUTE and how does it apply?</h3>
                        <div class="faq-expanded__a"><p>SUTE is the Start-Up Tax Exemption available to Singapore Pte Ltd companies for the first 3 Years of Assessment - it gives 75 percent exemption on the first S$100,000 of normal chargeable income plus 50 percent on the next S$100,000. The Partial Tax Exemption (PTE) applies thereafter - 75 percent on first S$10,000 + 50 percent on next S$190,000. Combined with the 17 percent headline rate, this reduces the effective tax rate to approximately 4.25 percent on the first S$100,000 of chargeable income.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Standard Singapore vehicle?</strong> A: Private Limited Company (Pte Ltd) under Companies Act 1967.</p>
                <p><strong>Q: Singapore corporate tax?</strong> A: 17% headline; effective ~4.25% on first S$100,000 with SUTE; ~8.3% under PTE.</p>
                <p><strong>Q: ACRA incorporation timeline?</strong> A: 1-3 working days after name reservation.</p>
                <p><strong>Q: Government fees?</strong> A: S$315 (S$15 name + S$300 incorporation).</p>
                <p><strong>Q: Resident director?</strong> A: Mandatory; Singapore citizen, PR or EntrePass holder; nominee arrangement standard for foreign founders (S$2,000-S$4,000/yr).</p>
                <p><strong>Q: Company secretary?</strong> A: Mandatory; appointed within 6 months of incorporation under Companies Act 1967.</p>
                <p><strong>Q: DTAA status?</strong> A: India-Singapore DTAA in force since 1994; 2016 Protocol added source-based CG and LOB Article 24A; MLI PPT effective from 1 April 2020.</p>
                <p><strong>Q: Annual compliance?</strong> A: ECI within 3 months of FY end; Form C-S/C by 30 November; ACRA annual return within 7 months of FY end.</p>
                <p><strong>Q: GST?</strong> A: Mandatory above S$1 million turnover; voluntary registration available.</p>
                <p><strong>Q: India outbound regime?</strong> A: FEMA Overseas Investment Rules 2022; Form ODI Part I, Part II (within 30 days), APR (by 31 Dec).</p>
                <p><strong>Q: ODI limits?</strong> A: Indian companies up to 400% of net worth (automatic route); resident individuals LRS USD 250,000 per FY (no financial-services entities).</p>
                <p><strong>Q: FEMA Section 13 penalties?</strong> A: Up to 3x the sum involved + INR 5,000 per day for continuing contravention.</p>
                <p><strong>Q: LOB Article 24A?</strong> A: India-Singapore DTAA expenditure threshold of S$200,000 over 24 months to qualify for treaty benefits.</p>
                <p><strong>Q: Patron fee?</strong> A: Hub 05 cross-list - indicative bands INR 24,999 / INR 49,999 starting; binding quote after discovery call.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Deadlines for Delhi-Singapore Setup</h2>
            <div class="content-text">
                
                <p>India-side FEMA compliance is unforgiving. <strong>First</strong>, Form ODI Part II within <strong>30 days</strong> of outward remittance and Annual Performance Report by <strong>31 December</strong> annually. Missing these triggers FEMA Section 13 penalty exposure of up to <strong>3 times the sum involved plus INR 5,000 per day</strong> for continuing contravention. <strong>Second</strong>, Singapore-side deadlines are equally precise - ECI within 3 months of FY end (with waivers for small companies meeting both revenue and nil-tax conditions), Form C-S or C with IRAS by 30 November (electronic), ACRA annual return within 7 months of FY end after the AGM. <strong>Third</strong>, the India-Singapore DTAA Principal Purpose Test has been in force since 1 April 2020; substance and commercial-purpose documentation should be in place BEFORE the first treaty claim, not after a notice arrives.</p>
                <p>Patron Accounting builds all three into the master compliance calendar at engagement closing. The FEMA ODI Part II filing is calendared immediately after the AD bank effects the remittance. The Singapore ACRA Annual Return + IRAS ECI + Form C-S/C deadlines are pre-calendared with reminders 30 days before each due date. The PPT defence memo with LOB Article 24A compliance file is delivered at engagement closing - ready for any India scrutiny on the treaty claim.</p>
                <p><strong>Talk to a Patron Singapore setup specialist in Delhi today - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20register%20a%20Singapore%20Pte%20Ltd%20from%20Delhi.%20Please%20share%20the%20process%20and%20fees." target="_blank" rel="noopener">WhatsApp us</a>.</strong> Hub 05 cross-listed - indicative pricing bands INR 24,999 / INR 49,999 starting (Exl GST and Govt. Charges); binding quote confirmed after the discovery call and structuring memo. Free first consultation. Response within 2 hours during working hours.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Set Up Your Singapore Pte Ltd from Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Singapore is the cleanest, fastest and most institutionally credible jurisdiction for Indian founders going global. The Pte Ltd under the Companies Act 1967 is the standard vehicle; ACRA incorporation runs 1 to 3 working days; the effective tax rate for the first three years can fall to 4.25% under SUTE; the DTAA with India remains in force although the MLI PPT (since 1 April 2020) and the 2016 Protocol source-based capital gains rules constrain pure treaty-shopping.</p>
                <p style="color:rgba(255,255,255,0.9);">The India leg under FEMA OI Rules 2022 is the unforgiving track - Form ODI Part II within 30 days, APR by 31 December, Section 13 penalties up to 3x the sum involved + INR 5,000/day. Most cross-border failures happen on the India side rather than the Singapore side; that is where Patron's calendar discipline matters most.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting LLP, with a Delhi office and partner Singapore corporate service providers, runs both legs from a single engagement - substance file, AD bank coordination, banking arrangement and multi-year compliance calendar built in. CA + CS named sign-off across both jurisdictions; Hub 05 cross-listed pricing with binding quote after the discovery call.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20register%20a%20Singapore%20Pte%20Ltd%20from%20Delhi%20with%20FEMA%20ODI%20compliance.%20Please%20share%20the%20process%20and%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Singapore Pte Ltd Setup%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Singapore Pte Ltd Setup%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron Accounting - Cross-Border Setup Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Singapore Pte Ltd setup runs from Patron's Delhi office plus Singapore corporate service partners. Cross-sell into adjacent jurisdictions (USA, UAE) and India-side services below.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;">
                    <div class="pa-block-title">Other Cross-Border Jurisdictions</div>
                    <div class="pa-block-sub">Patron's Hub 05 cross-border setup services for Indian founders</div>
                    <div class="pa-city-grid">
                    <a href="/company-registration-in-singapore/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/company-registration-in-singapore/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/company-registration-in-singapore/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/company-registration-in-singapore/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
                </div>
                <div class="pa-city-block">
                    <div class="pa-block-title">Related India Services in Delhi</div>
                    <div class="pa-block-sub">India-side support for the Singapore Pte Ltd structure - investor entity, FEMA, tax, POEM defence</div>
                    <div class="pa-cross-grid">
                        <a href="https://www.patronaccounting.com/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration - Delhi</div><div class="pa-card-sub">India</div></div></a>
                        <a href="https://www.patronaccounting.com/llp-incorporation/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Incorporation - Delhi</div><div class="pa-card-sub">India</div></div></a>
                        <a href="https://www.patronaccounting.com/itr-for-companies/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Companies - Delhi</div><div class="pa-card-sub">India</div></div></a>
                        <a href="https://www.patronaccounting.com/income-tax-notice/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice - Delhi</div><div class="pa-card-sub">India</div></div></a>
                        <a href="https://www.patronaccounting.com/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration - Delhi</div><div class="pa-card-sub">India</div></div></a>
                        <a href="https://www.patronaccounting.com/us-bank-account-opening" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">US Bank Account Opening</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 2 July 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">2 July 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 2 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed every 6 months (Tier 2). Review triggers: Singapore Budget cycle updates affecting SUTE / PTE rates and CIT Rebate, IRAS guidance updates, ACRA fee schedule revisions, FEMA OI Rules 2022 amendments and CBDT MLI PPT clarifications.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026-27 ITR filing is live</strong> - get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="https://www.patronaccounting.com/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
    function renderReviews(reviews) {
        const slider = document.getElementById('testimonialSlider');
        const loading = document.getElementById('testiLoading');
        // Static cards already in DOM - just init Slick if not already done
        if (slider.children.length > 0 && !$(slider).hasClass('slick-initialized')) {
            if (loading) loading.style.display = 'none';
            initSlick(slider);
            return;
        }
        let html = '';

        reviews.forEach(function(review, i) {
            if (review.hasVideo && review.videoUrl) {
                html += buildVideoCard(review);
            } else {
                html += buildQuoteCard(review, i);
            }
        });

        slider.innerHTML = html;
        slider.style.display = 'block';
        loading.style.display = 'none';

        // Init Slick
        initSlick(slider);
    }

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered in the desired order - use them as-is and do NOT
        // fetch/regenerate from fallbackReviews or the Google API (that would overwrite the
        // curated order, e.g. video, text, video, then rest).
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
            return; // static cards are authoritative - stop here
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    let current = '';
    sections.forEach(function(section) {
        const sectionTop = section.offsetTop - 120;
        if (pageYOffset >= sectionTop) { current = section.getAttribute('id'); }
    });
    tocBtns.forEach(function(btn) {
        btn.classList.remove('active');
        if (btn.getAttribute('href') === '#' + current) { btn.classList.add('active'); }
    });
});
</script>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>

<!-- Last Updated is hardcoded in markup per QC Timestamp Standard v2.1 (no view-time JS) -->

<!-- Custom: ensure form pageSource is set on load -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ps = document.getElementById('pageSourceField');
    if (ps && !ps.value) { ps.value = window.location.href; }
});
</script>