
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
    <title>Dormant Company Compliance Sec 455</title>
    <meta name="description" content="Dormant company compliance under Section 455 with MSC-1, MSC-3, MSC-4 filings. CCFS-2026 amnesty 50% MSC-1 fee. Patron annual package Rs 25,000 to Rs 35,000.">
    <link rel="canonical" href="/small-company-compliance-dormant">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Dormant Company Compliance Sec 455 2026 | Patron Accounting">
    <meta property="og:description" content="Dormant company compliance under Section 455 with MSC-1, MSC-3, MSC-4 filings. CCFS-2026 amnesty 50% MSC-1 fee. Patron annual package Rs 25,000 to Rs 35,000.">
    <meta property="og:url" content="/small-company-compliance-dormant">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/small-company-compliance-dormant-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Dormant Company Compliance Sec 455 2026 | Patron Accounting">
    <meta name="twitter:description" content="Dormant company compliance under Section 455 with MSC-1, MSC-3, MSC-4 filings. CCFS-2026 amnesty 50% MSC-1 fee. Patron annual package Rs 25,000 to Rs 35,000.">
    <meta name="twitter:image" content="/images/small-company-compliance-dormant-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/small-company-compliance-dormant#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Compliance Services",
                        "item": "/private-limited-company-compliance"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Dormant Company Compliance under Section 455",
                        "item": "/small-company-compliance-dormant"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/small-company-compliance-dormant#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is a dormant company under Section 455 of the Companies Act, 2013?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A dormant company is a private or public limited company that has been formed and registered under the Companies Act for a future project, to hold an asset or intellectual property, or that has no significant accounting transactions. Section 455(1) allows such a company to apply to the Registrar of Companies in Form MSC-1 for dormant status, supported by a special resolution at general meeting or written consent of 3/4 shareholders by value. On satisfaction, the ROC issues a certificate in Form MSC-2 and enters the company name in the Register of Dormant Companies. Dormant status reduces annual compliance and is valid for up to 5 consecutive years."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between an inactive company and a dormant company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Inactive is a factual description; dormant is a formal status. Under Explanation (i) to Section 455(1), an inactive company is one not carrying on business / not making significant accounting transactions / not filing financial statements for the last 2 financial years. An inactive company is a CANDIDATE for dormant status. A dormant company is one that has formally applied via Form MSC-1 and received an MSC-2 certificate from the ROC. Until that certificate is issued, the company is merely inactive (still subject to full annual compliance and Section 164(2) disqualification risk); after MSC-2, it is dormant (with reduced compliance and protection from Section 164(2))."
                }
            },
            {
                "@type": "Question",
                "name": "When should a company apply for dormant status instead of strike-off?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Apply for dormant status when you want to preserve the company entity, brand, CIN, and director continuity for future use - typical scenarios include IP / patent / trademark holding, asset-holdco for shares of other companies, 'ready company' structure for a future project, or venture pause between operations of 1 to 5 years. Apply for strike-off when the wind-down is genuinely permanent with no future use intended. Dormancy costs Rs 25,000 per year for up to 5 years; strike-off costs Rs 15,000 to Rs 25,000 one-time but loses the entity. Choose dormancy where the 5-year preservation has value above the cost differential."
                }
            },
            {
                "@type": "Question",
                "name": "What forms are filed during the dormant company lifecycle?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Five MSC forms cover the dormant lifecycle. MSC-1 is the application by the company for dormant status, filed after special resolution or 3/4 shareholder consent. MSC-2 is the certificate of dormant status issued by ROC. MSC-3 is the annual return of dormant company indicating financial position, due within 30 days of every FY end, audited by a practising CA. MSC-4 is the application to regain active status, accompanied by an MSC-3 for the year of revival. MSC-5 is the certificate of active status issued by ROC. Forms MSC-1, MSC-3, and MSC-4 were substituted by the Companies (Miscellaneous) Amendment Rules, 2023 dated 20 January 2023."
                }
            },
            {
                "@type": "Question",
                "name": "What compliances does a dormant company still need to maintain?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Dormant status reduces but does not eliminate compliance. A dormant company must file the annual MSC-3 return within 30 days of every FY end with audited statement of financial position. It must maintain the minimum number of directors (2 for private company, 3 for public, 1 for OPC) under Rule 6 of Companies (Miscellaneous) Rules, 2014. It must hold one board meeting per half calendar year under Section 173(5), with gap not less than 90 days. Event-based filings continue - PAS-3 for any allotment, DIR-12 for director changes - within 7 days of any such event. The company is exempt from AOC-4 and MGT-7 filings; these are replaced entirely by MSC-3."
                }
            },
            {
                "@type": "Question",
                "name": "How long can a company remain dormant?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A company can remain dormant for up to 5 consecutive financial years under Section 455(4). Beyond 5 years, the Registrar of Companies may initiate strike off proceedings under Section 248 - removing the company name from the Register of Companies. The 5-year clock starts from the date of MSC-2 certificate issuance. Patron tracks the issuance date and proactively flags the 3-year mark to give the founder 18-24 months to decide between MSC-4 revival to active status or planned strike-off before ROC action."
                }
            },
            {
                "@type": "Question",
                "name": "How does a dormant company return to active status?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A dormant company applies to the Registrar in Form MSC-4 under Section 455(5) read with Rule 8 of Companies (Miscellaneous) Rules, 2014. The MSC-4 must be accompanied by Form MSC-3 for the financial year in which the application is being filed, with audited financials. The Registrar issues a certificate in Form MSC-5 allowing return to active status. The application must also be filed within 7 days if any 'significant accounting transaction' or other event occurs that affects the dormant status - this is mandatory under the Rule 8(1) proviso. Patron handles MSC-4 at a one-time Rs 15,000 fee, and transitions the engagement to active compliance from the following financial year."
                }
            },
            {
                "@type": "Question",
                "name": "What is the CCFS-2026 benefit for dormant status applications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The Companies Compliance Facilitation Scheme (CCFS) 2026 is active from 15 April 2026 to 15 July 2026 per General Circular No. 01/2026 dated 24 February 2026. During this window, companies filing Form MSC-1 to obtain dormant status pay only 50 percent of the normal filing fee prescribed under the Companies (Registration Offices and Fees) Rules, 2014. For most private companies, this is a Rs 100 to Rs 300 saving on government fee. More significantly, the same scheme offers 90 percent waiver on additional fees for late filings of AOC-4, MGT-7, and other backlog - companies with backlog can clean up first under CCFS-2026 (at 10 percent of normal late fees) and then file MSC-1 sequentially."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/small-company-compliance-dormant#service",
                "name": "Dormant Company Compliance under Section 455",
                "url": "/small-company-compliance-dormant",
                "description": "End-to-end dormant company compliance under Section 455 of the Companies Act, 2013. MSC-1 conversion application with special resolution coordination, annual MSC-3 maintenance within 30 days of FY end, and MSC-4 active status revival. Includes Rule 3 eligibility screening (8 conditions), lender concurrence coordination, payment-screening protocol, 5-year ceiling tracking, and CCFS-2026 amnesty sequencing. Fixed-fee Rs 25,000 (annual maintenance) to Rs 35,000 (MSC-1 conversion year).",
                "serviceType": "Corporate Compliance and Advisory Service",
                "provider": { "@id": "/#organization" },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "Companies Act, 2013",
                        "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
                    },
                    {
                        "@type": "Thing",
                        "name": "Dormant company",
                        "sameAs": "https://en.wikipedia.org/wiki/Dormant_company"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Dormant Compliance Engagement Modes",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "Dormant Conversion (Year 1)",
                            "price": "35000",
                            "priceCurrency": "INR",
                            "description": "Full MSC-1 conversion engagement under Section 455(1) - Rule 3 eligibility screening, board resolution, EGM facilitation, special resolution, MGT-14 filing under Section 117, MSC-1 preparation and filing, MSC-2 certificate confirmation, plus first year MSC-3 annual return."
                        },
                        {
                            "@type": "Offer",
                            "name": "Annual Dormant Maintenance (Year 2 onwards)",
                            "price": "25000",
                            "priceCurrency": "INR",
                            "description": "MSC-3 annual return drafting and filing under Rule 7 within 30 days of FY end, 2 board meetings per year facilitation under Section 173(5), statutory register maintenance, event-based filings (DIR-12 / PAS-3 if any), payment screening protocol, and 5-year horizon tracking under Section 455(4)."
                        },
                        {
                            "@type": "Offer",
                            "name": "Return to Active Status (When Required)",
                            "price": "15000",
                            "priceCurrency": "INR",
                            "description": "MSC-4 application under Section 455(5) with accompanying MSC-3, board resolution, regulatory NOC where applicable, and MSC-5 certificate confirmation. Transition to active compliance engagement from the following financial year."
                        }
                    ]
                }
            }
        ]
    }
    </script>
@endsection

@section('content')
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
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
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
        .btn-cta svg { width: 16px; height: 16px; }        @media (max-width: 640px) {        }

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
        .testimonial-slider .slick-slide { padding: 0 10px; }
        .testimonial-slider .slick-list { margin: 0 -10px; overflow: hidden; }
        .testimonial-slider .slick-dots { bottom: -40px; }
        .testimonial-slider .slick-dots li button:before { font-size: 10px; color: var(--gray-300); opacity: 1; }
        .testimonial-slider .slick-dots li.slick-active button:before { color: var(--orange); }
        .testimonial-slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
        .testimonial-slider .slick-track { display: flex !important; }
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

/* Fix: dark CTA block body text -> white (low-contrast on navy #1B365D) */
section[style*="background: var(--blue)"] .content-text,
section[style*="background: var(--blue)"] .content-text p,
section[style*="background: var(--blue)"] .content-text li,
section[style*="background: var(--blue)"] .content-text strong{color:#FFFFFF !important;}

/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}
</style>
<main>



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
                        Dormant Company Compliance under Section 455
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Special resolution, MSC-1 with statement of affairs, lender concurrence (if loans), MSC-3 annual return.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 25,000 (annual maintenance only) to Rs 35,000 (MSC-1 conversion + first year MSC-3).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> No active operations, no listed securities, no investigation, no statutory dues, lender consent where applicable.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> MSC-1 conversion 4 to 6 weeks; MSC-3 annual return within 30 days of FY end.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 240+ FY24-25 Dormant Engagements | 100% On-Time MSC-3</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20dormant%20company%20status%20under%20Section%20455%20before%20CCFS-2026%20closes." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Dormant Company Compliance'/>
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
                                <option value="small-company-compliance-dormant" selected>Dormant Company Compliance (this page)</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance</option>
                                <option value="small-company-annual-compliance">Small Company Annual Compliance</option>
                                <option value="strike-off-private-limited-company">Strike Off Pvt Ltd</option>
                                <option value="condonation-of-delay-roc-filings">Condonation of Delay</option>
                                <option value="aoc-4-filing-services">AOC-4 Filing Services</option>
                                <option value="mgt-7-filing-services">MGT-7 Filing Services</option>
                                <option value="company-closure">Company Closure</option>
                                <option value="other">Other</option>

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
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our biotech pivoted away from clinical trials but we owned 3 patents. Strike-off would lose the IP. Patron converted us to dormant via MSC-1 in 5 weeks - patents preserved, compliance down from Rs 45k/yr to Rs 25k/yr. Smart move.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr Rohit Saxena</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Biotech IP-co</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Filed MSC-1 during CCFS-2026 window. 50% off the MSC-1 fee plus 90% waiver on our backlog AOC-4 / MGT-7. Patron sequenced backlog cleanup first, then MSC-1 - saved roughly Rs 1.4 lakh in total fees.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Shilpa Pillai</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Holdco</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were dormant 3 years for venture pause. Patron tracked the 5-year ceiling and gave us 24-month notice. Used MSC-4 to revive when we restarted - active in 3 weeks. CIN and brand preserved through the entire pause.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AT</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Aman Thakur</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Co-Founder, EdTech</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Unsecured loan from a co-founder was blocking MSC-1. Patron coordinated the concurrence letter properly - took 10 days. Without that the application would have been rejected and Rs 600 fee forfeited. Detail matters.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Rana</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Asset Holdco</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron set up a payment screening protocol. When we wanted to pay a contractor for a small project, they flagged it as a potential significant accounting transaction - we paused, restructured the engagement, kept dormant status intact. Worth every rupee.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Kapur</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, IP Holdco</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Free 15-minute consultation. Rule 3 eligibility screening in 24 hours. CCFS-2026 50% MSC-1 fee discount applied where window allows. Two engagement modes - one-time conversion or ongoing annual maintenance.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
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
            
                <a href="#overview-section" class="toc-btn">TL;DR</a>
                <a href="#what-section" class="toc-btn">Section 455 Basics</a>
                <a href="#who-section" class="toc-btn">Decision Framework</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">8-Step Procedure</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA + CS</a>
                <a href="#comparison-section" class="toc-btn">Dormant vs Strike Off</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: Dormant Company Compliance at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Dormant Company Compliance Services at a Glance</strong></p>
                    <p>A dormant company under <strong>Section 455</strong> of the Companies Act, 2013 is a private limited company that has formally applied for and received dormant status from the ROC via Form MSC-1 supported by special resolution (or 3/4th shareholder consent). Dormant status reduces annual MCA compliance to a single <strong>MSC-3</strong> return within 30 days of FY end, requires only 1 board meeting per half calendar year under Section 173(5), and reduces statutory director minimums to 2 for private companies. The company can remain dormant for up to 5 consecutive years. <strong>CCFS-2026</strong> amnesty active from 15 April to 15 July 2026 offers 50 percent discount on MSC-1 filing fees. Patron annual package Rs 25,000 to Rs 35,000.</p>
                </div>
                <p>Dormant status is the formal mechanism under Section 455 for preserving a company that is not actively trading - typical use cases include holding intellectual property pending commercialisation, asset-holding holdcos, post-pivot companies between projects, or 'ready company' structures kept for future use. The company keeps its CIN, brand, directors, and 5-year preservation runway while compliance drops from Rs 35-50k/year (active) to Rs 25k/year (dormant).</p>
                <p>Below is the quick-reference summary covering governing sections, applicability, dormancy duration ceiling, Patron's two-mode engagement (MSC-1 conversion + annual MSC-3 maintenance), government fee structure with CCFS-2026 50% discount, full MSC-1 to MSC-5 form ecosystem, and ROC authority. CCFS-2026 also offers a 90% waiver on additional fees for ROC backlog - useful for sequencing cleanup BEFORE MSC-1 conversion.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 455, 455(1), 455(4), 455(5), 173(5), 248, 117, 102 read with Companies (Miscellaneous) Rules, 2014 (Rules 3 to 8) and Companies (Miscellaneous) Amendment Rules, 2023 (G.S.R. 46(E) dated 20 January 2023, effective 23 January 2023)</td></tr>
                        <tr><td>Applicable To</td><td>Private and public limited companies that are not carrying on significant accounting transactions - asset-holding holdcos, IP-holding entities, post-pivot companies, paused operations. NOT for listed companies or companies under investigation / prosecution / with statutory dues outstanding.</td></tr>
                        <tr><td>Dormancy Duration</td><td>Up to 5 consecutive financial years. After 5 years, Registrar may initiate strike off under Section 248. Company can return to active status anytime via Form MSC-4.</td></tr>
                        <tr><td>Cost (Patron)</td><td>Annual maintenance package: Rs 25,000 per year (MSC-3 + minimal board meeting facilitation). MSC-1 conversion year: Rs 35,000 (MSC-1 + special resolution + first year MSC-3).</td></tr>
                        <tr><td>Government Fees</td><td>MSC-1 filing: Rs 200 to Rs 600 by authorised capital slab. <strong>CCFS-2026 amnesty: 50% discount on MSC-1 fees from 15 April to 15 July 2026.</strong> MSC-3 annual return: similar slab structure.</td></tr>
                        <tr><td>Forms / Portal</td><td>MSC-1 (apply for dormant) | MSC-2 (ROC certificate of dormant status) | MSC-3 (annual return within 30 days of FY end) | MSC-4 (apply for active status) | MSC-5 (ROC certificate of active status) via MCA V3 portal</td></tr>
                        <tr><td>Authority</td><td>Registrar of Companies (ROC) of relevant jurisdiction. No NCLT involvement for dormant lifecycle.</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;
</p>
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
                <h2 class="section-title">What Is a Dormant Company under Section 455?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>Section 455 of the Companies Act, 2013 introduced the formal concept of a "dormant company" - a registered company that is not actively trading or earning income, has been put into a holding pattern by its members, but wants to preserve its corporate existence for future use. The dormant status was designed for legitimate business reasons: holding intellectual property pending commercialisation, acting as a "ready company" structure for a future project, holding investment assets, or pausing operations during a business pivot without going through the formal strike-off and re-incorporation cycle.</p>

                    <p style="margin-top:16px;">Section 455(1) defines that a company "formed and registered under this Act for a future project or to hold an asset or intellectual property and has no significant accounting transaction" may apply to the Registrar for the status of a dormant company. The application is made in <strong>Form MSC-1</strong> supported by either a special resolution at general meeting or written consent of at least three-fourths shareholders (by value). The Registrar examines the application and, on satisfaction, issues a certificate in <strong>Form MSC-2</strong> granting dormant status. The company name is entered in the Register of Dormant Companies maintained on the MCA portal.</p>

                    <div class="highlight-box" style="margin-top:24px;background:#E8F5E9;border-left:4px solid #10B981;">
                        <p><strong>&#10003; CCFS-2026 window OPEN: 15 April to 15 July 2026.</strong> Companies filing Form MSC-1 during this window pay only 50 percent of the normal filing fee under Companies (Registration Offices and Fees) Rules, 2014. Same window also offers 90 percent waiver on additional fees for late filings of AOC-4, MGT-7, and other backlog - companies with accumulated default can clean up under CCFS-2026 first, then file MSC-1 sequentially.</p>
                    </div>

                    <h3 style="margin-top:32px;">Inactive Company vs Dormant Company - Candidate vs Formal Status</h3>
                    <p>The terms "inactive" and "dormant" are often used interchangeably - but the Companies Act treats them differently. Getting this distinction right is the first step of the engagement.</p>

                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Parameter</th>
                                <th>Inactive Company (Explanation (i) to Section 455(1))</th>
                                <th>Dormant Company (Section 455 formal status)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>Definition</strong></td><td>Not carrying on any business; no significant accounting transaction in last 2 FYs OR not filing financial statements / annual returns in last 2 FYs</td><td>Inactive company that has FORMALLY APPLIED via MSC-1 and received MSC-2 certificate from ROC</td></tr>
                            <tr><td><strong>Legal status</strong></td><td>Description of factual position; no formal MCA recognition</td><td>Formal status entered in Register of Dormant Companies</td></tr>
                            <tr><td><strong>Compliance regime</strong></td><td>Full annual compliance - AOC-4, MGT-7, ITR-6, DIR-3 KYC, audit. Late fees Rs 100/day per form.</td><td>Reduced - MSC-3 replaces AOC-4 and MGT-7. 1 board meeting per half year under Section 173(5). Minimum 2 directors.</td></tr>
                            <tr><td><strong>Annual cost</strong></td><td>Rs 35,000 to Rs 50,000 + audit + late fees</td><td>Rs 25,000 (Patron) + minimal govt fees</td></tr>
                            <tr><td><strong>Director disqualification risk</strong></td><td>YES - 3 consecutive years MGT-7 default triggers Section 164(2)</td><td>NO - MSC-3 replaces MGT-7; Section 164(2) does not apply</td></tr>
                            <tr><td><strong>Strike-off risk</strong></td><td>YES - Section 248 suo-moto after 2 years of non-operation</td><td>NO during dormant period (5 years); risk only after 5-year ceiling</td></tr>
                            <tr><td><strong>Reactivation path</strong></td><td>Section 460 condonation + clear pending filings</td><td>Form MSC-4 + MSC-3 for revival year; ROC issues MSC-5</td></tr>
                        </tbody>
                    </table>
                    </div>

                    <p style="margin-top:16px;"><strong>The decision framework:</strong> any inactive company is a CANDIDATE for dormant status. Whether to actually convert depends on the founder's view of future use of the entity, the cost of maintaining active compliance versus paying for MSC-1 conversion, and whether the 5-year ceiling fits the use case. Patron runs this assessment as Step 1 of every engagement.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Dormant Company Compliance:</strong></p>
                    
                    <p><strong>Section 455 (Dormant Company):</strong> Companies Act, 2013 provision establishing the formal "dormant" status for companies formed for future projects, asset/IP holding, or with no significant accounting transactions.</p>
                    <p><strong>Section 455(1):</strong> Eligibility criteria and application process via MSC-1 with special resolution or 3/4 shareholder consent.</p>
                    <p><strong>Section 455(4):</strong> Empowers Registrar to suo-moto enter company in dormant register after 2 consecutive years of non-filing; can initiate strike off after 5 consecutive years dormant.</p>
                    <p><strong>Section 455(5):</strong> Application by dormant company to regain active status via MSC-4.</p>
                    <p><strong>Section 173(5):</strong> Reduced board meeting requirement for dormant companies - one per half calendar year, gap not less than 90 days.</p>
                    <p><strong>Significant Accounting Transaction:</strong> Definition under Rule 2 of Companies (Miscellaneous) Rules, 2014 - excludes Registrar payments, legal compliance payments, share allotments, and office / records maintenance. Any other transaction disqualifies dormant status.</p>
                    <p><strong>Form MSC-1:</strong> Application by company to ROC for dormant status under Rule 3 (substituted via Companies (Miscellaneous) Amendment Rules, 2023 dated 20 January 2023, effective 23 January 2023).</p>
                    <p><strong>Form MSC-2:</strong> Certificate of dormant status issued by ROC under Rule 4.</p>
                    <p><strong>Form MSC-3:</strong> Annual return of dormant company, due within 30 days of FY end under Rule 7. CA-certified statement of financial position.</p>
                    <p><strong>Form MSC-4:</strong> Application for return to active status under Section 455(5) + Rule 8 (substituted via 2023 Amendment Rules).</p>
                    <p><strong>Form MSC-5:</strong> Certificate of active status issued by ROC under Rule 8(2).</p>
                    <p><strong>CCFS-2026 (Companies Compliance Facilitation Scheme, 2026):</strong> MCA amnesty via General Circular No. 01/2026 dated 24 February 2026. Window 15 April to 15 July 2026. 50% discount on MSC-1 fees + 90% waiver on additional fees for late ROC filings + 25% discount on STK-2 strike-off fees.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Dormant Company Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Dormant Status</span>
                        <strong>MSC-1 to MSC-5</strong>
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
            <h2 class="section-title">When Dormancy Is the Wise Choice: Decision Framework</h2>
            <div class="content-text">
                
                
                <p>Dormant status is a specific tool for a specific use case. The decision matrix below maps common founder scenarios to the right path - Active Compliance vs Dormant Status vs Strike Off.</p>

                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead>
                        <tr>
                            <th>Scenario</th>
                            <th>Active Compliance</th>
                            <th>Dormant Status</th>
                            <th>Strike Off</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><strong>Operations paused, may resume in 1-2 years</strong></td><td>Wasteful - Rs 35-50k/yr for no benefit</td><td><strong>IDEAL</strong> - Rs 25k/yr, entity preserved, easy MSC-4 revival</td><td>Wrong - re-incorporation Rs 30k+ if you change mind</td></tr>
                        <tr><td><strong>Operations paused, may resume in 3-5 years</strong></td><td>Wasteful + risky (Section 164(2) on 3-year MGT-7 default)</td><td><strong>IDEAL</strong> - Rs 25k/yr for up to 5 years; ROI break-even at 18 months</td><td>Wrong - brand and CIN lost</td></tr>
                        <tr><td><strong>Holding IP / patents / trademarks for future commercialisation</strong></td><td>Acceptable but expensive</td><td><strong>OPTIMAL</strong> - explicitly contemplated in Section 455(1)</td><td>Wrong - assets vest with Central Government under Section 250(2)</td></tr>
                        <tr><td><strong>Holding investment portfolio (shares, fixed assets)</strong></td><td>Acceptable but expensive</td><td><strong>GOOD</strong> - if no significant accounting transactions</td><td>Wrong - asset distribution required first; complex</td></tr>
                        <tr><td><strong>Genuine permanent wind-down, no future use</strong></td><td>Wasteful</td><td>Wasteful - 5-year ceiling, then strike-off anyway</td><td><strong>IDEAL</strong> - Rs 15-25k under CCFS-2026, finality</td></tr>
                        <tr><td><strong>Recently incorporated, business plan changed, never started</strong></td><td>Required if INC-20A filed</td><td>Available if Rule 3 eligibility met</td><td>Acceptable; requires Section 249 3-month look-back review</td></tr>
                        <tr><td><strong>Active disputes / litigation / tax assessment pending</strong></td><td>Must continue full compliance</td><td><strong>NOT ELIGIBLE</strong> under Rule 3</td><td><strong>NOT ELIGIBLE</strong> under Section 248 if disputes pending</td></tr>
                        <tr><td><strong>Listed company or company with deposits</strong></td><td>Must continue full compliance</td><td><strong>NOT ELIGIBLE</strong> under Rule 3</td><td><strong>NOT ELIGIBLE</strong> during deposit obligations</td></tr>
                    </tbody>
                </table>
                </div>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>Patron applies this framework on Day 1 of every engagement.</strong> The aim is not to push dormant status by default but to select the right tool. For many founders strike-off is the better answer; for others active maintenance is wiser if turnover is imminent. Dormancy fits a specific middle ground - 1 to 5 year pauses where CIN / brand / director continuity matters.</p>
                </div>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Delivers in the Dormant Compliance Engagement</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Eligibility Screening under Rule 3</strong></td><td>Full Rule 3 test on Day 1 - investigation status, prosecution status, deposit status, outstanding loans (with lender concurrence path if unsecured), management dispute, statutory dues, workmen dues, listed securities. Any blocker flagged BEFORE engagement starts.</td></tr>
                        <tr><td><strong>2. Special Resolution and Shareholder Consent</strong></td><td>Board meeting convened; resolution recommending dormant status. EGM notice issued under Section 102 with explanatory statement. Special resolution passed (or 3/4 shareholder consent obtained in writing). MGT-14 filed for special resolution within 30 days under Section 117.</td></tr>
                        <tr><td><strong>3. MSC-1 Application Filing to ROC</strong></td><td>MSC-1 drafted with statement of affairs (CA-certified), special resolution / shareholder consent, lender concurrence if applicable, no-dispute certificate, supporting documents. Filed via MCA V3 portal. CCFS-2026 50% fee discount leveraged where window applies.</td></tr>
                        <tr><td><strong>4. Annual MSC-3 Return Maintenance</strong></td><td>MSC-3 prepared annually within 30 days of FY end (typically before 30 April for FY ending 31 March). Financial position audited by Patron CAs. Statement of transactions (limited to permitted accounting transactions only) compiled. Director and shareholder updates captured.</td></tr>
                        <tr><td><strong>5. Reduced Board Meeting Coordination under Section 173(5)</strong></td><td>Dormant companies need only 1 board meeting per half calendar year (gap not less than 90 days). Patron facilitates 2 meetings per year - agendas, minutes, statutory registers. Event-based filings (PAS-3, DIR-12) handled as needed.</td></tr>
                        <tr><td><strong>6. Return to Active Status via MSC-4 (When Required)</strong></td><td>When the company decides to resume operations, MSC-4 filed with financial position via accompanying MSC-3, board resolution, supporting documents. ROC issues MSC-5 active status certificate. Engagement transitions to active compliance from that FY.</td></tr>


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
            <h2 class="section-title">Dormant Conversion Procedure: 8 Steps to MSC-2 Certificate</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs the MSC-1 conversion as a structured engagement. From eligibility screening (Week 1) to MSC-2 certificate issuance (Week 6-10), the 8 steps below cover the full active-to-dormant transition. Total timeline 4 to 6 weeks end-to-end.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Eligibility Screening under Rule 3 (Week 1)</h3>
                        <p class="step-description">All 8 disqualifying conditions tested - no investigation, no prosecution, no public deposits, no outstanding loan unless lender concurrence, no management dispute, no statutory dues, no workmen dues, securities not listed. Any pending loan reviewed for lender concurrence path. Engagement starts only after all-clear.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                8 Rule 3 conditions tested
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Loan concurrence path
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                All-clear before billing
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="55" y="46" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RULE 3</text>
                                    <line x1="65" y1="52" x2="78" y2="65" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                    <rect x="25" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="36" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 455</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Eligibility Confirmed</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Board Resolution and EGM Notice (Week 2)</h3>
                        <p class="step-description">Board meeting convened; resolution recommending dormant status drafted. EGM notice issued under Section 102 with explanatory statement disclosing all material facts. Notice circulated to all shareholders 21 clear days before EGM (or shorter with consent of 95% members entitled to vote).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Board resolution drafted
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 102 explanatory
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                21-day EGM notice
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="12" fill="#14365F"/>
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">EGM NOTICE</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="30" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="68" x2="85" y2="68" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                </svg>
                            </div>
                            <span class="illustration-label">EGM Notice Issued</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Special Resolution at EGM (Week 3-4)</h3>
                        <p class="step-description">EGM convened; special resolution passed under Section 455(1) authorising application for dormant status. Alternatively, written consent of at least 3/4 shareholders (by value) obtained outside EGM. Minutes recorded; share register validated; voting outcomes captured.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                3/4 shareholder approval
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                EGM or written consent
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Minutes recorded
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="10" fill="#14365F"/>
                                    <text x="44" y="27" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">SPECIAL</text>
                                    <text x="44" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RESOLUTION</text>
                                    <text x="44" y="52" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">3/4</text>
                                    <text x="44" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SHAREHOLDERS</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 455(1)</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Resolution Passed</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">MGT-14 Filing for Special Resolution</h3>
                        <p class="step-description">MGT-14 filed with ROC within 30 days of the special resolution under Section 117. Resolution copy attached; SRN captured. This is a prerequisite for MSC-1 filing - the MGT-14 SRN is referenced in the MSC-1 application.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Within 30 days of resolution
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 117 filing
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN referenced in MSC-1
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-14</text>
                                    <line x1="28" y1="44" x2="52" y2="44" stroke="#E8712C" stroke-width="1.5" stroke-linecap="round"/>
                                    <line x1="28" y1="52" x2="50" y2="52" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="28" y1="60" x2="52" y2="60" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ROC</text>
                                    <text x="88" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 117</text>
                                </svg>
                            </div>
                            <span class="illustration-label">MGT-14 Filed</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">MSC-1 Application Drafting</h3>
                        <p class="step-description">MSC-1 drafted with statement of affairs of the company certified by a practising CA, special resolution / shareholder consent, lender concurrence if applicable, no-dispute certificate, reasons for seeking dormant status (future project / asset / IP holding / venture pause), MGT-14 SRN, supporting documents. CA / CS / CMA certification embedded.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Statement of Affairs by CA
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Lender concurrence (if any)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                No-dispute certificate
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="10" fill="#14365F"/>
                                    <text x="44" y="27" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">MSC-1</text>
                                    <line x1="31" y1="38" x2="57" y2="38" stroke="#E8712C" stroke-width="1.5" stroke-linecap="round"/>
                                    <line x1="31" y1="46" x2="55" y2="46" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="54" x2="57" y2="54" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="62" x2="53" y2="62" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="68" y="22" width="32" height="50" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="84" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CA</text>
                                    <text x="84" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CERTIFIED</text>
                                    <text x="84" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RULE 3</text>
                                </svg>
                            </div>
                            <span class="illustration-label">MSC-1 Ready</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">MCA V3 Portal Submission (with CCFS-2026)</h3>
                        <p class="step-description">MSC-1 submitted via MCA V3 portal with active DSC of authorised signatory. Government filing fee paid by authorised capital slab - if window is open (15 April to 15 July 2026), CCFS-2026 50% discount is applied automatically by the portal. SRN captured for tracking.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MCA V3 portal filing
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CCFS-2026 50% discount
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN captured
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="40" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="42" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MSC-1</text>
                                    <text x="42" y="46" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FILED</text>
                                    <circle cx="42" cy="56" r="4" fill="#10B981"/>
                                    <path d="M39 56l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <rect x="66" y="22" width="36" height="42" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="84" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CCFS-2026</text>
                                    <text x="84" y="48" font-size="8" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">50%</text>
                                    <text x="84" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OFF</text>
                                </svg>
                            </div>
                            <span class="illustration-label">MSC-1 Filed</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">ROC Review and Query Resolution (Week 6-10)</h3>
                        <p class="step-description">Registrar examines the application against Rule 3 eligibility, statement of affairs, and supporting documents. ROC may issue queries for documentation gaps - typically minor (e.g. additional address proof, signature mismatch). Patron handles all queries within MCA-stipulated response window.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 3 examination
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ROC queries handled
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                2 to 6 week review
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="20" width="35" height="50" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ROC</text>
                                    <text x="40" y="44" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REVIEW</text>
                                    <circle cx="40" cy="56" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="40" y="59" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">QUERIES</text>
                                    <path d="M62 45l8 0M70 45l-3 -3M70 45l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="20" width="28" height="50" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">APPROVED</text>
                                    <circle cx="88" cy="55" r="5" fill="#10B981"/>
                                    <path d="M85 55l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">ROC Review Done</span>
                            <span class="step-number-large">07</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 8</span>
                        <h3 class="step-title">MSC-2 Certificate Issuance + Register Entry</h3>
                        <p class="step-description">Registrar issues Certificate of Dormant Status in Form MSC-2 under Rule 4. Company name entered in the Register of Dormant Companies maintained on the MCA portal. Patron retains MSC-2 in the company secretarial pack. Annual MSC-3 calendar set up; first MSC-3 due within 30 days of next FY end.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MSC-2 certificate received
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Register entry made
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MSC-3 calendar set
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <rect x="22" y="22" width="76" height="14" fill="#10B981"/>
                                    <text x="60" y="32" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">MSC-2 CERTIFICATE</text>
                                    <text x="60" y="50" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DORMANT</text>
                                    <text x="60" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STATUS GRANTED</text>
                                    <circle cx="60" cy="72" r="4" fill="#10B981"/>
                                    <path d="M57 72l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Dormant Status Live</span>
                            <span class="step-number-large">08</span>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Dormant Lifecycle</h2>
            <div class="content-text">
                
                
                <p>The documents below cover the three major filing milestones: MSC-1 conversion, annual MSC-3 maintenance, and MSC-4 active status revival. Patron prepares missing items in-house wherever feasible.</p>

                <h3 style="margin-top:24px;">For MSC-1 Application (One-Time, Dormant Conversion)</h3>
                <ul>
                    <li>Certified true copy of special resolution OR written consent letters from 3/4 shareholders (by value)</li>
                    <li>Statement of Affairs of the company certified by a practising Chartered Accountant</li>
                    <li>Notice of EGM with explanatory statement under Section 102 (if EGM route used)</li>
                    <li>Concurrence letter from unsecured lender (if any unsecured loan outstanding)</li>
                    <li>Certificate from board certifying no dispute in management or ownership</li>
                    <li>Reasons for seeking dormant status (future project / asset holding / IP holding / venture pause)</li>
                    <li>MGT-14 SRN (filed within 30 days of special resolution)</li>
                    <li>Active DSC of authorised signatory</li>
                </ul>

                <h3 style="margin-top:24px;">For MSC-3 Annual Return (Every Year)</h3>
                <ul>
                    <li>Audited statement of financial position by practising Chartered Accountant</li>
                    <li>Statement of transactions during the FY (limited to permitted accounting transactions only - Registrar payments, legal compliance, share allotments, office maintenance)</li>
                    <li>Director and KMP details with DINs</li>
                    <li>Shareholder pattern updated</li>
                    <li>Confirmation that no significant accounting transactions occurred</li>
                    <li>Active DSC of director / CFO / CS / manager</li>
                </ul>

                <h3 style="margin-top:24px;">For MSC-4 Return to Active Status (When Required)</h3>
                <ul>
                    <li>Certified true copy of board resolution authorising MSC-4 application</li>
                    <li>MSC-3 for the financial year in which application for active status is being filed</li>
                    <li>Audited statement of financial position by practising CA</li>
                    <li>Approval or NOC from regulatory authority if company is regulated by such authority</li>
                    <li>Active DSC of authorised signatory</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Dormant Compliance Pitfalls - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Outstanding loan blocking MSC-1 application</strong></td>
                            <td>Rule 3(iv) bars MSC-1 unless lender concurrence is enclosed where unsecured loan is outstanding - typical scenario is loan from director / relative still unpaid. Many platforms miss this and the application gets rejected.</td>
                            <td>Patron coordinates the concurrence letter from the lender or, where possible, helps repay the loan before the application. Concurrence letter clearly states lender accepts dormant status and related compliance regime.</td>
                        </tr>
                        <tr>
                            <td><strong>2. 5-year ceiling under Section 455(4) creeping up</strong></td>
                            <td>Registrar may initiate strike off under Section 248 once a company has been dormant for 5 consecutive years. Founders sometimes miss the running clock and only realise when the strike-off notice arrives.</td>
                            <td>Patron tracks the MSC-2 issuance date and proactively flags the 5-year horizon by the third year - giving the founder 18-24 months to decide between MSC-4 revival or planned strike-off.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Accidental "significant accounting transaction"</strong></td>
                            <td>Dormant status is lost the moment a "significant accounting transaction" occurs. Definition under Rule 2 is narrow: only Registrar payments, legal compliance, share allotments, and office maintenance permitted. A contractor payment, domain renewal, or GST payment can argue outside the list.</td>
                            <td>Patron sets up a payment-screening protocol - founders pause any uncertain transaction and confirm with us first. Saves the company from inadvertent loss of dormant status and the 7-day MSC-4 mandatory filing trigger.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Missing MSC-3 within 30-day window</strong></td>
                            <td>MSC-3 is due within 30 days of FY end - by 30 April for the typical 31 March FY end. Missing the window forces a Section 460 condonation route - an avoidable extra cost of Rs 50,000+ for what should have been routine.</td>
                            <td>Patron auto-schedules MSC-3 preparation in March to file by mid-April, giving comfortable buffer. Where MSC-3 is missed, we run the Section 460 condonation route as a separate engagement.</td>
                        </tr>


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
            <h2 class="section-title">Dormant Compliance Pricing: Two Engagement Modes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Dormant Conversion (Year 1)</strong> - Full MSC-1 conversion: eligibility screening, board resolution, EGM facilitation, special resolution, MGT-14 filing, MSC-1 preparation and filing, MSC-2 certificate, AND first year MSC-3 annual return. End-to-end active to dormant.</td><td class="text-end">Rs 35,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>Annual Dormant Maintenance (Year 2 onwards)</strong> - MSC-3 annual return drafting and filing, 2 board meetings per year facilitation under Section 173(5), statutory register maintenance, event-based filings (DIR-12 / PAS-3 if any), payment screening protocol, 5-year horizon tracking.</td><td class="text-end">Rs 25,000 per year (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>Return to Active Status (When Required)</strong> - MSC-4 application with accompanying MSC-3, board resolution, regulatory NOC where applicable, MSC-5 certificate confirmation. Transition to active compliance engagement from next FY.</td><td class="text-end">Rs 15,000 one-time (Exl GST and Govt fees)</td></tr>
                        <tr><td>Govt MSC-1 Fee - Authorised Capital up to Rs 1 lakh</td><td class="text-end">Rs 200 (CCFS-2026: Rs 100)</td></tr>
                        <tr><td>Govt MSC-1 Fee - Authorised Capital Rs 1 lakh to Rs 5 lakh</td><td class="text-end">Rs 300 (CCFS-2026: Rs 150)</td></tr>
                        <tr><td>Govt MSC-1 Fee - Authorised Capital Rs 5 lakh to Rs 25 lakh</td><td class="text-end">Rs 400 (CCFS-2026: Rs 200)</td></tr>
                        <tr><td>Govt MSC-1 Fee - Authorised Capital Rs 25 lakh to Rs 1 crore</td><td class="text-end">Rs 500 (CCFS-2026: Rs 250)</td></tr>
                        <tr><td>Govt MSC-1 Fee - Authorised Capital above Rs 1 crore</td><td class="text-end">Rs 600 (CCFS-2026: Rs 300)</td></tr>
                        <tr><td>Govt MSC-3 and MSC-4 Fees</td><td class="text-end">Similar capital-slab structure</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 Amnesty Window</strong></td><td class="text-end"><strong>15 April to 15 July 2026 - 50% off MSC-1 fees + 90% waiver on additional fees for ROC backlog</strong></td></tr>
                        <tr><td>Statutory ROC Fees (where applicable)</td><td class="text-end">At actuals</td></tr>
                        <tr><td>Missed MSC-3 (additional fee)</td><td class="text-end">Rs 100/day under Rule 12; remedied via Section 460 condonation if missed by months</td></tr>
                        <tr><td>5-Year Active Maintenance Total Cost</td><td class="text-end">Rs 1,75,000 to Rs 2,50,000</td></tr>
                        <tr><td>5-Year Dormant Maintenance Total Cost (Patron)</td><td class="text-end">Rs 1,35,000 (Rs 35k year 1 + Rs 25k x 4 years)</td></tr>
                        <tr><td>Strike Off + Re-incorporation Alternative (5 years later)</td><td class="text-end">Rs 45,000 to Rs 55,000 (loses CIN and brand)</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Dormant Company Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20quote%20for%20dormant%20company%20conversion%20or%20annual%20MSC-3%20maintenance." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Dormant Lifecycle Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Eligibility screening + intake</td><td class="text-end">Week 1</td></tr>
                        <tr><td>Board resolution + EGM notice</td><td class="text-end">Week 2</td></tr>
                        <tr><td>EGM and special resolution (or written 3/4 consent)</td><td class="text-end">Week 3 to 4</td></tr>
                        <tr><td>MGT-14 filing for special resolution under Section 117</td><td class="text-end">Within 30 days of resolution</td></tr>
                        <tr><td>MSC-1 preparation and filing under Rule 3</td><td class="text-end">Week 4 to 5</td></tr>
                        <tr><td>ROC review + MSC-2 certificate issuance under Rule 4</td><td class="text-end">Week 6 to 10 (2 to 6 weeks)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Total Active-to-Dormant Conversion Timeline</strong></td><td class="text-end"><strong>4 to 6 weeks end-to-end</strong></td></tr>
                        <tr><td>MSC-3 annual return (every year during dormancy) under Rule 7</td><td class="text-end">Within 30 days of FY end (by 30 April for 31 March FY end)</td></tr>
                        <tr><td>Board meetings during dormancy under Section 173(5)</td><td class="text-end">2 per calendar year (one each half), gap not less than 90 days</td></tr>
                        <tr><td>Maximum dormancy duration under Section 455(4)</td><td class="text-end">5 consecutive FYs; thereafter ROC may strike off under Section 248</td></tr>
                        <tr><td>MSC-4 return to active status under Section 455(5) + Rule 8</td><td class="text-end">Anytime within 5-year window OR within 7 days of any "active" event</td></tr>
                        <tr><td>ROC review + MSC-5 active certificate under Rule 8(2)</td><td class="text-end">2 to 4 weeks</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 MSC-1 Window (50% fee discount)</strong></td><td class="text-end"><strong>15 April to 15 July 2026</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; CCFS-2026 closing 15 July 2026.</strong> The 50% MSC-1 fee discount and 90% waiver on accumulated additional fees expire after the window. Companies with accumulated backlog can clean up first under CCFS-2026 (at 10% of normal additional fees) and then file MSC-1 sequentially - Patron handles this sequencing routinely.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on company complexity, presence of unsecured loans (requires lender concurrence), prior ROC backlog (may need CCFS-2026 sequencing), and whether the engagement is one-time conversion or ongoing annual maintenance. Government fees, MGT-14 filing fees, audit charges, DSC charges, and any regulatory NOC fees are billed separately at actuals.</p>


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
            <h2 class="section-title">Why Use a CA + CS Firm for Dormant Compliance</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Rule 3 Eligibility Discipline</h3>
                <p>Rule 3 has 8 separate disqualifying conditions - investigation, prosecution, deposits, loans, management dispute, statutory dues, workmen dues, listed securities. Missing any one means MSC-1 rejection and forfeited fee. Patron screens all 8 on Day 1 before billing begins.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>Payment Screening Protocol</h3>
                <p>"Significant accounting transaction" is narrowly defined under Rule 2 - only Registrar payments, legal compliance, share allotments, and office maintenance permitted. A single non-permitted transaction can void dormant status. Patron sets up a payment-screening protocol so founders can flag uncertain payments before they happen.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>MSC-3 30-Day Window Calendar</h3>
                <p>MSC-3 annual return is due within 30 days of FY end. Missing it forces a Section 460 condonation route costing Rs 50,000+ to recover from what should have been routine. Patron builds a March-prep schedule to file by mid-April, giving comfortable buffer every year.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>5-Year Horizon Tracking</h3>
                <p>Section 455(4) triggers ROC strike-off action under Section 248 after 5 consecutive years dormant. The clock starts from MSC-2 issuance date. Patron tracks this and flags the 3-year mark proactively, giving 18-24 months to decide between MSC-4 revival or planned strike-off.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>CCFS-2026 Sequencing Strategy</h3>
                <p>Where backlog exists, cleaning up under CCFS-2026 (at 10% of normal additional fees) BEFORE MSC-1 is materially cheaper than handling them post-conversion. Patron plans this sequence - clean backlog first, then file MSC-1 inside the same 15 April-15 July 2026 window.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Lender Concurrence Coordination</h3>
                <p>Rule 3(iv) bars MSC-1 unless lender concurrence is enclosed where unsecured loan is outstanding. Patron coordinates the concurrence letter from the lender (often a director or relative) with proper acknowledgment of the dormant compliance regime - or helps repay the loan before the application where simpler.</p>
            </article>
        </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders Across India</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>

                <h3 style="margin-top:24px;">Outcome Proof - FY 2024-25 Internal Metrics</h3>
                <ul>
                    <li>Patron managed <strong>240+ dormant compliance engagements</strong> across MSC-1 conversion and annual MSC-3 maintenance</li>
                    <li><strong>100 percent on-time MSC-3 filings</strong> - zero missed 30-day windows across all clients</li>
                    <li><strong>14 successful MSC-4 revivals</strong> to active status (typically post-pivot returning to operations)</li>
                    <li><strong>Zero engagements lost dormant status</strong> due to inadvertent significant accounting transaction</li>
                    <li>38 MSC-1 conversions filed during CCFS amnesty windows captured the 50% fee discount</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves dormant compliance engagements across all ROC jurisdictions. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies including IP-holdcos, asset-holdcos, and post-pivot ventures preserving CIN for future use.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Dormant Status vs Strike Off vs Active Maintenance: The Three Paths</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Dormant Status (Section 455)</th><th>Strike Off (Section 248)</th><th>Active Maintenance</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Outcome</td><td>Company retained but compliance reduced for up to 5 years</td><td>Company dissolved permanently</td><td>Company continues full operations and compliance</td></tr>
                        <tr><td>Entity preserved?</td><td>YES - same CIN, same name, same directors</td><td>NO - struck off, ceases to exist</td><td>YES</td></tr>
                        <tr><td>Brand / name preserved?</td><td>YES</td><td>NO (name returns to pool after 20 years)</td><td>YES</td></tr>
                        <tr><td>Annual compliance cost (Patron)</td><td>Rs 25,000 per year</td><td>N/A after Rs 15-25k strike-off</td><td>Rs 35,000 to Rs 50,000 per year</td></tr>
                        <tr><td>Compliance scope</td><td>MSC-3 only + 2 board meetings + event-based filings</td><td>None after dissolution</td><td>AOC-4 + MGT-7 + ITR-6 + DIR-3 KYC + audit</td></tr>
                        <tr><td>Reactivation cost</td><td>Rs 15,000 one-time MSC-4 fee + audit</td><td>Rs 30,000+ re-incorporation + Rs 2L NCLT restoration if struck off</td><td>N/A (already active)</td></tr>
                        <tr><td>Maximum duration</td><td>5 consecutive financial years</td><td>Permanent</td><td>Indefinite</td></tr>
                        <tr><td>Director disqualification risk</td><td>NONE (MSC-3 replaces MGT-7)</td><td>NONE (no compliance to default on)</td><td>YES under Section 164(2) if 3-year MGT-7 default</td></tr>
                        <tr><td>Best for</td><td>IP holding, asset holdcos, venture pause 1-5 years, "ready company" for future project</td><td>Genuine permanent wind-down</td><td>Active operations or imminent operations</td></tr>


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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                
                <p>Dormant compliance connects to several adjacent service lines. Cross-link map:</p>
                <ul>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Private Limited Company Annual Compliance</strong></a> - the active full-compliance bundle that dormant status replaces; also the destination when an MSC-4 revival happens.</li>
                    <li><a href="/small-company-annual-compliance"><strong>Small Company Annual Compliance</strong></a> - for ACTIVE small companies under Section 2(85) (distinct from dormant status; different statutory regime).</li>
                    <li><a href="/strike-off-private-limited-company"><strong>Strike Off Private Limited Company</strong></a> - the permanent exit alternative for genuinely defunct companies.</li>
                    <li><a href="/condonation-of-delay-roc-filings"><strong>Condonation of Delay ROC Filings</strong></a> - for inactive companies with accumulated backlog needing cleanup before MSC-1 conversion.</li>
                    <li><a href="/company-closure"><strong>Company Closure</strong></a> - broader closure / pause hub.</li>
                    <li><a href="/aoc-4-filing-services"><strong>AOC-4 Filing Services</strong></a> - for the year preceding dormant conversion.</li>
                    <li><a href="/mgt-7-filing-services"><strong>MGT-7 Filing Services</strong></a> - for the year preceding dormant conversion.</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Acts, Sections, Rules, and Notifications</h2>
            <div class="content-text">
                
                
                <h3>Governing Legislation</h3>
                <ul>
                    <li><strong>Companies Act, 2013</strong> - master statute for dormant company concept and lifecycle</li>
                    <li><strong>Companies (Miscellaneous) Rules, 2014</strong> - Rules 3 to 8 govern dormant company application, certificate, register, minimum directors, annual return, and active status revival</li>
                    <li><strong>Companies (Miscellaneous) Amendment Rules, 2023</strong> - G.S.R. 46(E) dated 20 January 2023, effective 23 January 2023 - substituted Forms MSC-1, MSC-3, and MSC-4 (currently in force)</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - Rule 12 prescribes the slab-based fee structure for MSC filings by authorised capital</li>
                    <li><strong>CCFS-2026 - General Circular No. 01/2026 dated 24 February 2026</strong> - Companies Compliance Facilitation Scheme, 2026. Window 15 April to 15 July 2026. 50% discount on MSC-1 filing fees + 90% waiver on accumulated additional fees for AOC-4 / MGT-7 / other backlog + 25% discount on STK-2 strike-off fees.</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections of the Companies Act, 2013</h3>
                <ul>
                    <li><strong>Section 455(1)</strong> - eligibility and application via MSC-1 with special resolution or 3/4 shareholder consent (by value)</li>
                    <li><strong>Section 455(2)</strong> - Registrar to maintain a Register of Dormant Companies; status entered after MSC-2 issuance</li>
                    <li><strong>Section 455(4)</strong> - Registrar may suo-moto enter company in dormant register after 2 consecutive years of non-filing; can initiate strike off after 5 consecutive years dormant</li>
                    <li><strong>Section 455(5)</strong> - application by dormant company to regain active status via MSC-4</li>
                    <li><strong>Section 173(5)</strong> - reduced board meeting requirement: one per half calendar year, gap not less than 90 days</li>
                    <li><strong>Section 248</strong> - strike off triggered after 5 years of continuous dormancy</li>
                    <li><strong>Section 117</strong> - filing of MGT-14 within 30 days of special resolution</li>
                    <li><strong>Section 102</strong> - explanatory statement to be annexed to EGM notice for special resolution</li>
                </ul>

                <h3 style="margin-top:24px;">Key Rules of Companies (Miscellaneous) Rules, 2014</h3>
                <ul>
                    <li><strong>Rule 3</strong> - application for obtaining status of dormant company in Form MSC-1 (substituted by 2023 Amendment Rules)</li>
                    <li><strong>Rule 4</strong> - certificate of status of dormant company in Form MSC-2 issued by ROC</li>
                    <li><strong>Rule 5</strong> - Register of dormant companies maintained on the MCA portal</li>
                    <li><strong>Rule 6</strong> - minimum number of directors for dormant company: 3 (public), 2 (private), 1 (OPC); auditor rotation does not apply</li>
                    <li><strong>Rule 7</strong> - annual return of dormant company in Form MSC-3 within 30 days of FY end, certified by practising CA</li>
                    <li><strong>Rule 8</strong> - application for active status in Form MSC-4 with MSC-3 for revival year; certificate in Form MSC-5</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule</h3>
                <ul>
                    <li><strong>Missed MSC-3 annual return</strong> - additional fee Rs 100 per day under Rule 12 of Companies (Registration Offices and Fees) Rules, 2014; remedied via Section 460 condonation if missed by months</li>
                    <li><strong>Loss of dormant status due to significant accounting transaction</strong> - directors must file MSC-4 within 7 days of event under Rule 8(1) proviso; failure attracts penalty</li>
                    <li><strong>Dormancy exceeding 5 years</strong> - Registrar action under Section 248 (strike off); director disqualification potential under Section 164(2) where strike-off triggered by ROC non-filing</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for MSC-1, MSC-3, and MSC-4 filings, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for CCFS-2026 General Circular No. 01/2026, and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text.</p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Real buyer questions on Section 455 dormant status, inactive vs dormant distinction, the MSC form ecosystem (MSC-1 to MSC-5), reduced-compliance scope, 5-year ceiling, return to active status via MSC-4, and CCFS-2026 50% MSC-1 fee window.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a dormant company under Section 455 of the Companies Act, 2013?</h3>
                        <div class="faq-expanded__a"><p>A dormant company is a private or public limited company that has been formed and registered under the Companies Act for a future project, to hold an asset or intellectual property, or that has no significant accounting transactions. Section 455(1) allows such a company to apply to the Registrar of Companies in Form MSC-1 for dormant status, supported by a special resolution at general meeting or written consent of 3/4 shareholders by value. On satisfaction, the ROC issues a certificate in Form MSC-2 and enters the company name in the Register of Dormant Companies. Dormant status reduces annual compliance and is valid for up to 5 consecutive years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between an inactive company and a dormant company?</h3>
                        <div class="faq-expanded__a"><p>Inactive is a factual description; dormant is a formal status. Under Explanation (i) to Section 455(1), an inactive company is one not carrying on business / not making significant accounting transactions / not filing financial statements for the last 2 financial years. An inactive company is a CANDIDATE for dormant status. A dormant company is one that has formally applied via Form MSC-1 and received an MSC-2 certificate from the ROC. Until that certificate is issued, the company is merely inactive (still subject to full annual compliance and Section 164(2) disqualification risk); after MSC-2, it is dormant (with reduced compliance and protection from Section 164(2)).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When should a company apply for dormant status instead of strike-off?</h3>
                        <div class="faq-expanded__a"><p>Apply for dormant status when you want to preserve the company entity, brand, CIN, and director continuity for future use - typical scenarios include IP / patent / trademark holding, asset-holdco for shares of other companies, 'ready company' structure for a future project, or venture pause between operations of 1 to 5 years. Apply for strike-off when the wind-down is genuinely permanent with no future use intended. Dormancy costs Rs 25,000 per year for up to 5 years; strike-off costs Rs 15,000 to Rs 25,000 one-time but loses the entity. Choose dormancy where the 5-year preservation has value above the cost differential.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What forms are filed during the dormant company lifecycle?</h3>
                        <div class="faq-expanded__a"><p>Five MSC forms cover the dormant lifecycle. MSC-1 is the application by the company for dormant status, filed after special resolution or 3/4 shareholder consent. MSC-2 is the certificate of dormant status issued by ROC. MSC-3 is the annual return of dormant company indicating financial position, due within 30 days of every FY end, audited by a practising CA. MSC-4 is the application to regain active status, accompanied by an MSC-3 for the year of revival. MSC-5 is the certificate of active status issued by ROC. Forms MSC-1, MSC-3, and MSC-4 were substituted by the Companies (Miscellaneous) Amendment Rules, 2023 dated 20 January 2023.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What compliances does a dormant company still need to maintain?</h3>
                        <div class="faq-expanded__a"><p>Dormant status reduces but does not eliminate compliance. A dormant company must file the annual MSC-3 return within 30 days of every FY end with audited statement of financial position. It must maintain the minimum number of directors (2 for private company, 3 for public, 1 for OPC) under Rule 6 of Companies (Miscellaneous) Rules, 2014. It must hold one board meeting per half calendar year under Section 173(5), with gap not less than 90 days. Event-based filings continue - PAS-3 for any allotment, DIR-12 for director changes - within 7 days of any such event. The company is exempt from AOC-4 and MGT-7 filings; these are replaced entirely by MSC-3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long can a company remain dormant?</h3>
                        <div class="faq-expanded__a"><p>A company can remain dormant for up to 5 consecutive financial years under Section 455(4). Beyond 5 years, the Registrar of Companies may initiate strike off proceedings under Section 248 - removing the company name from the Register of Companies. The 5-year clock starts from the date of MSC-2 certificate issuance. Patron tracks the issuance date and proactively flags the 3-year mark to give the founder 18-24 months to decide between MSC-4 revival to active status or planned strike-off before ROC action.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does a dormant company return to active status?</h3>
                        <div class="faq-expanded__a"><p>A dormant company applies to the Registrar in Form MSC-4 under Section 455(5) read with Rule 8 of Companies (Miscellaneous) Rules, 2014. The MSC-4 must be accompanied by Form MSC-3 for the financial year in which the application is being filed, with audited financials. The Registrar issues a certificate in Form MSC-5 allowing return to active status. The application must also be filed within 7 days if any 'significant accounting transaction' or other event occurs that affects the dormant status - this is mandatory under the Rule 8(1) proviso. Patron handles MSC-4 at a one-time Rs 15,000 fee, and transitions the engagement to active compliance from the following financial year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the CCFS-2026 benefit for dormant status applications?</h3>
                        <div class="faq-expanded__a"><p>The Companies Compliance Facilitation Scheme (CCFS) 2026 is active from 15 April 2026 to 15 July 2026 per General Circular No. 01/2026 dated 24 February 2026. During this window, companies filing Form MSC-1 to obtain dormant status pay only 50 percent of the normal filing fee prescribed under the Companies (Registration Offices and Fees) Rules, 2014. For most private companies, this is a Rs 100 to Rs 300 saving on government fee. More significantly, the same scheme offers 90 percent waiver on additional fees for late filings of AOC-4, MGT-7, and other backlog - companies with backlog can clean up first under CCFS-2026 (at 10 percent of normal late fees) and then file MSC-1 sequentially.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is dormant status?</strong> Formal MCA status under Section 455 granting reduced compliance to a non-operational Pvt Ltd company via Form MSC-2 certificate.</p>
                <p><strong>Which form starts it?</strong> Form MSC-1 supported by special resolution or 3/4 shareholder consent (by value).</p>
                <p><strong>Annual obligation?</strong> Form MSC-3 within 30 days of every FY end - replaces AOC-4 and MGT-7.</p>
                <p><strong>Maximum duration?</strong> 5 consecutive financial years under Section 455(4); thereafter ROC may strike off under Section 248.</p>
                <p><strong>Return to active?</strong> Form MSC-4 anytime within the 5-year window, or within 7 days if significant accounting transaction occurs (Rule 8(1) proviso).</p>
                <p><strong>Reduced board meetings?</strong> 1 per half calendar year under Section 173(5), gap not less than 90 days.</p>
                <p><strong>Minimum directors?</strong> 3 (public), 2 (private), 1 (OPC) under Rule 6 of Companies (Miscellaneous) Rules, 2014.</p>
                <p><strong>What does Patron charge?</strong> Rs 35,000 first year (MSC-1 + first MSC-3) or Rs 25,000 per year for ongoing maintenance; Rs 15,000 one-time for MSC-4 revival.</p>
                <p><strong>CCFS-2026 benefit?</strong> 50% off MSC-1 fees + 90% waiver on additional fees for backlog cleanup. Window: 15 April to 15 July 2026.</p>
                <p><strong>Forms substituted by 2023 Amendment Rules?</strong> MSC-1, MSC-3, MSC-4 substituted via G.S.R. 46(E) dated 20 January 2023, effective 23 January 2023.</p>
                <p><strong>Dormant company kya hota hai?</strong> <em>Pvt Ltd company jo currently chal nahi rahi lekin band bhi nahi karna chahti. Section 455 ke under formal status - MSC-1 file karna padta hai ROC ko special resolution ke saath. MSC-2 certificate milne ke baad sirf MSC-3 file karna padta hai har saal. 5 saal tak dormant rakh sakte ho. Patron Rs 25,000 per year mein maintain karta hai. CCFS-2026 chal rahi hai 15 July tak - MSC-1 fee 50% off.</em></p>
                <p><strong>Inactive aur dormant mein farak kya hai?</strong> <em>Inactive matlab company de-facto kaam nahi kar rahi. Dormant matlab company ne FORMALLY ROC se status le liya MSC-1 file karke. Inactive ko full compliance karna padta hai (AOC-4, MGT-7) aur Section 164(2) ka risk hai. Dormant ko ye risk nahi - sirf MSC-3 har saal. Inactive is candidate; dormant is protected status.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">CCFS-2026 Closing 15 July 2026: Why Act Now</h2>
            <div class="content-text">
                
                
                <p>The Companies Compliance Facilitation Scheme (CCFS) 2026 window is open RIGHT NOW with two major benefits relevant to dormant company conversion:</p>
                <ul>
                    <li><strong>50% discount on MSC-1 filing fees</strong> - companies filing MSC-1 between 15 April and 15 July 2026 pay only Rs 100 to Rs 300 government fee instead of Rs 200 to Rs 600</li>
                    <li><strong>90% waiver on accumulated additional fees</strong> - companies with backlog (pending AOC-4, MGT-7, etc.) can clean up first at 10% of normal late fees, THEN file MSC-1 - a once-in-several-years sequencing opportunity</li>
                    <li><strong>25% discount on STK-2 strike-off fees</strong> - for companies that decide strike-off is the better route after eligibility screening</li>
                </ul>

                <p style="margin-top:16px;"><strong>After 15 July 2026 the window closes.</strong> Full MSC-1 fees resume; backlog cleanup reverts to Rs 100 per day per form with no upper cap; companies that delay miss the bundled sequencing benefit. The 4-6 week MSC-1 conversion timeline means engagements started after late May 2026 risk closing AFTER the window expires.</p>

                <p style="margin-top:16px;"><strong>Get a Free Eligibility Screening in 24 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20screen%20my%20company%20for%20dormant%20status%20before%20CCFS-2026%20closes." target="_blank">WhatsApp us</a>. Free 15-minute consultation. We respond within 2 hours during business hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: Dormancy as a Strategic Tool</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Dormant status under Section 455 is the formal mechanism to pause a private limited company for up to 5 consecutive financial years while preserving CIN, brand, directors, and corporate existence for future use. The compliance scope drops from full annual filings (AOC-4, MGT-7, ITR-6, audit) to a single MSC-3 return - and Section 164(2) director-disqualification risk is eliminated for the dormant period.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">The 5-year ceiling under Section 455(4) means dormancy is not a substitute for strike-off in genuine wind-down cases. It is a precision tool for IP-holdcos, asset-holdcos, post-pivot companies between projects, and 'ready company' structures held for future use. Patron applies the decision framework on Day 1 - some founders are better served by strike-off (Rs 15-25k one-time, finality), others by active maintenance (if turnover is imminent), and a specific middle ground belongs to dormancy.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">The CCFS-2026 window (15 April to 15 July 2026) offers a 50% discount on MSC-1 fees and a 90% waiver on backlog additional fees - a sequencing window that closes mid-July. Patron's MSC-1 to MSC-2 conversion timeline is 4 to 6 weeks; engagements started by end-May 2026 typically close inside the window. Start the eligibility screening this week.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20quote%20for%20dormant%20company%20conversion%20or%20annual%20MSC-3%20maintenance." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="/cdn-cgi/l/email-protection#4c25222a230c3c2d383e23222d2f2f2339223825222b622f2321" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Dormant Company Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. MSC-1 conversion, annual MSC-3 maintenance, and MSC-4 active status revival delivered pan-India across all ROC jurisdictions. CCFS-2026 amnesty window active until 15 July 2026.</p>
           
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise Dormant Compliance Pages</div>
                <div class="pa-block-sub">Local CS and CA team for MSC-1 conversion and annual MSC-3 maintenance</div>
                <div class="pa-city-grid">
                    <a href="/small-company-compliance-dormant/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Dormant Compliance in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/small-company-compliance-dormant/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Dormant Compliance in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/small-company-compliance-dormant/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Dormant Compliance in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/small-company-compliance-dormant/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Dormant Compliance in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Adjacent services that pair with dormant compliance</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">Post-MSC-4 Revival</div></div>
                    </a>
                    <a href="/small-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Small Co Annual Compliance</div><div class="pa-card-sub">Active Small Co</div></div>
                    </a>
                    <a href="/strike-off-private-limited-company" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Strike Off Pvt Ltd</div><div class="pa-card-sub">Permanent Wind-Down</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Condonation of Delay</div><div class="pa-card-sub">Backlog Cleanup</div></div>
                    </a>
                    <a href="/aoc-4-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing</div><div class="pa-card-sub">Pre-Conversion Year</div></div>
                    </a>
                    <a href="/company-closure" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Company Closure</div><div class="pa-card-sub">Broader Exit Hub</div></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 12 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed semi-annually while CCFS-2026 amnesty window is open. Next scheduled review: 12 November 2026 (post-window closure on 15 July 2026). Review triggers include MCA amendment to Section 455 / Rules 3-8 / MSC forms, new amnesty schemes extending or replacing CCFS-2026, change in Companies (Registration Offices and Fees) Rules fee structure, change in 5-year dormancy ceiling under Section 455(4), and any procedural change on Forms MSC-1 through MSC-5.</p>
        </div>
    </div>
</section>



</main>


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
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
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
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
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

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
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
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
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
      var phoneVal = phoneInput.value.trim();
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

</script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;
    var OFFSET = 200;
    var ticking = false;
    function setActive(entry) {
        tocBtns.forEach(function (b) { b.classList.remove('active'); });
        if (!entry) return;
        entry.btn.classList.add('active');
        if (wrapper) {
            var left = entry.btn.offsetLeft;
            var right = left + entry.btn.offsetWidth;
            if (left < wrapper.scrollLeft) {
                wrapper.scrollTo({ left: left - 16, behavior: 'smooth' });
            } else if (right > wrapper.scrollLeft + wrapper.clientWidth) {
                wrapper.scrollTo({ left: right - wrapper.clientWidth + 16, behavior: 'smooth' });
            }
        }
    }
    function onScroll() {
        ticking = false;
        var y = window.pageYOffset + OFFSET;
        var active = entries[0];
        for (var i = 0; i < entries.length; i++) {
            if (entries[i].section.offsetTop <= y) { active = entries[i]; }
        }
        if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight - 2)) {
            active = entries[entries.length - 1];
        }
        setActive(active);
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();
})();
</script>


<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');
    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection