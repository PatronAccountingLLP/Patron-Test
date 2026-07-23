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
    <title>IT Services ITR: Sec 10AA SEZ, LUT</title>
    <meta name="description" content="ITR for IT services and software firms. Section 10AA SEZ deduction, LUT for export of services, FIRC, Schedule FSI, transfer pricing. Starts at Rs 7,999.">
    <link rel="canonical" href="/itr-for-it-service-firms">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IT Services ITR 2026: Sec 10AA SEZ, LUT | Patron Accounting">
    <meta property="og:description" content="ITR for IT services and software firms. Section 10AA SEZ deduction, LUT for export of services, FIRC, Schedule FSI, transfer pricing. Starts at Rs 7,999.">
    <meta property="og:url" content="/itr-for-it-service-firms/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-it-service-firms-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT Services ITR 2026: Sec 10AA SEZ, LUT | Patron Accounting">
    <meta name="twitter:description" content="ITR for IT services and software firms. Section 10AA SEZ deduction, LUT for export of services, FIRC, Schedule FSI, transfer pricing. Starts at Rs 7,999.">
    <meta name="twitter:image" content="/images/itr-for-it-service-firms-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/itr-for-it-service-firms#breadcrumb",
                "itemListElement": [
                    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
                    {"@type": "ListItem", "position": 2, "name": "Income Tax Return", "item": "/income-tax-return"},
                    {"@type": "ListItem", "position": 3, "name": "ITR for Business", "item": "/itr-for-business"},
                    {"@type": "ListItem", "position": 4, "name": "ITR for IT Service Firms", "item": "/itr-for-it-service-firms"}
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/itr-for-it-service-firms#faq",
                "datePublished": "2026-05-08T08:00:00+05:30",
                "dateModified": "2026-05-08T08:00:00+05:30",
                "mainEntity": [
                    {"@type": "Question", "name": "Which ITR form should an IT services firm file?", "acceptedAnswer": {"@type": "Answer", "text": "Depends on entity type. Sole proprietor IT freelancer or consultant: ITR-3 (regular books) or ITR-4 SUGAM (Section 44ADA presumptive only if technical consultancy classification holds). Partnership Firm or LLP IT services: ITR-5. Private Limited Company, OPC or Public Limited Company IT services: ITR-6 (with corporate rates 22 percent, 25 percent or 30 percent depending on regime). HUF with IT business: ITR-3 or ITR-4. Never ITR-1 (no business income head)."}},
                    {"@type": "Question", "name": "Is LUT mandatory for export of IT services?", "acceptedAnswer": {"@type": "Answer", "text": "No, LUT is optional but strongly recommended. Two routes: (a) LUT in Form GST RFD-11 under Rule 96A CGST Rules 2017 - zero-rated supply without IGST payment; (b) Without LUT - pay 18 percent IGST on each export invoice and claim refund subsequently (60-180 day cycle). LUT requires annual filing each FY before first export invoice. We recommend LUT as primary route for all regular IT exporters."}},
                    {"@type": "Question", "name": "Can a new SEZ unit claim Section 10AA deduction in 2026?", "acceptedAnswer": {"@type": "Answer", "text": "No. Section 10AA sunset clause (inserted by Finance Act 2016) bars new SEZ units commencing operations on or after 1 April 2021 from claiming Section 10AA deduction. Existing SEZ units that commenced operations on or before 31 March 2021 continue to claim deduction for full 15-year period (100 percent first 5 years, 50 percent next 5 years, 50 percent reinvested via SEZ Reinvestment Reserve next 5 years). Mandatory Form 56F audit. Cannot opt new tax regime Section 115BAC."}},
                    {"@type": "Question", "name": "What is the depreciation rate on computers and software?", "acceptedAnswer": {"@type": "Answer", "text": "Section 32 of Income Tax Act 1961 with Income Tax Rules 1962 Schedule II. Computers and computer software 40 percent WDV. General plant and machinery 15 percent WDV. Buildings 10 percent (factory) or 5 percent (other). Furniture 10 percent. Section 32(1)(iia) additional 20 percent on new plant and machinery is not available to IT services since IT services are classified as services not manufacturing per judicial precedents."}},
                    {"@type": "Question", "name": "How are ESOPs taxed when exercised by IT employees?", "acceptedAnswer": {"@type": "Answer", "text": "Section 17(2)(vi) of Income Tax Act 1961. At exercise of ESOP - difference between Fair Market Value of share at exercise date and exercise price (price paid by employee) added to salary income as perquisite. Employer deducts TDS under Section 192. Subsequent sale of acquired shares triggers capital gains - cost basis equals FMV at exercise. For DPIIT-recognized startups under Section 80-IAC, perquisite tax can be deferred under Section 156 (Finance Act 2020) to earlier of sale, 5 years, or employment cessation."}},
                    {"@type": "Question", "name": "Is transfer pricing applicable to IT services exporting to a parent company abroad?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. IT services exporting to foreign parent, subsidiary, associate or sister concern triggers transfer pricing under Section 92E. No threshold for international transactions - any amount triggers Form 3CEB by 31 October 2026 and ITR by 30 November 2026. TP study with FAR analysis, method selection (TNMM most common for IT services), benchmarking against comparable Indian IT services firms. Section 271AA penalty 2 percent of transaction value for documentation failure."}},
                    {"@type": "Question", "name": "Are software development services eligible for Section 44ADA presumptive?", "acceptedAnswer": {"@type": "Answer", "text": "Generally no. Section 44ADA presumptive at 50 percent of receipts is restricted to specified professions - legal, medical, engineering, architectural, accountancy, technical consultancy, interior decoration, or notified profession. Software development is typically classified as business not profession, so Section 44ADA does not apply. IT consultancy may qualify as technical consultancy. Eligibility limited to Resident Individual or Firm only (not LLP, not Company). Threshold Rs 75 lakh digital or Rs 50 lakh."}},
                    {"@type": "Question", "name": "What is the Schedule FSI in ITR for IT services exporters?", "acceptedAnswer": {"@type": "Answer", "text": "Schedule FSI is a section in ITR-3, ITR-5 or ITR-6 disclosing income earned outside India taxable in India. Country-wise breakdown of foreign income, tax paid in source country, DTAA application. Mandatory disclosure for all assessees with foreign source income regardless of taxability. Companion schedules: Schedule FA (Foreign Assets - mandatory for ROR; Section 43 Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year, with threshold relief w.e.f. 1 October 2024 for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh) and Schedule TR (Tax Relief - DTAA Section 90 or 90A or unilateral relief Section 91 with Form 67)."}}
                ]
            },
            {
                "@type": "Service",
                "@id": "/itr-for-it-service-firms#service",
                "name": "ITR Filing for IT Services and Software Development Firms",
                "alternateName": ["IT Business ITR", "Software Firm Tax Filing", "Export of Services ITR", "SEZ IT Firm ITR Section 10AA", "LUT for IT Services", "Transfer Pricing IT Services", "ESOP Tax IT Firm"],
                "url": "/itr-for-it-service-firms",
                "description": "End-to-end ITR filing for IT services and software development firms across SaaS, custom software development, IT consultancies, mobile and web development, AI/ML services, cybersecurity, cloud services, fintech, edtech, and DevOps. Includes Section 10AA SEZ deduction, LUT for export of services under Rule 96A CGST Rules, FIRC and Schedule FSI / FA / TR foreign income reporting, transfer pricing Section 92E with Form 3CEB, ESOP taxation under Section 17(2)(vi) with Section 80-IAC startup deferral, Section 32 computer and software depreciation 40 percent WDV, and Section 80JJAA additional employee cost deduction for AY 2026-27.",
                "serviceType": "Tax Return Filing",
                "category": "Direct Tax Compliance Industry-Specific",
                "provider": {"@id": "/#organization"},
                "areaServed": [
                    {"@type": "Country", "name": "India"},
                    {"@type": "City", "name": "Bengaluru"},
                    {"@type": "City", "name": "Hyderabad"},
                    {"@type": "City", "name": "Pune"},
                    {"@type": "City", "name": "Gurugram"},
                    {"@type": "City", "name": "Noida"},
                    {"@type": "City", "name": "Chennai"},
                    {"@type": "City", "name": "Mumbai"},
                    {"@type": "City", "name": "Delhi"}
                ],
                "audience": {"@type": "Audience", "audienceType": "IT services and software development firms across SaaS, custom software development, ERP/CRM consulting, IT staff augmentation, mobile application development, web development, AI/ML services, data analytics, cybersecurity services, cloud services, DevOps, blockchain, fintech development, edtech development; sole proprietor freelance developers and consultants; partnership firms and LLPs; private limited companies (Pvt Ltd, OPC); DPIIT-recognized startups under Section 80-IAC; existing SEZ unit IT firms within Section 10AA 15-year window; foreign-funded IT firms with related party transactions; ESOP-issuing IT companies"},
                "about": [
                    {"@type": "Thing", "name": "Information technology in India", "sameAs": "https://en.wikipedia.org/wiki/Information_technology_in_India"},
                    {"@type": "Thing", "name": "Income Tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
                    {"@type": "Thing", "name": "Special Economic Zone (India)", "sameAs": "https://en.wikipedia.org/wiki/Special_Economic_Zone_(India)"}
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "IT Services and Software Firm ITR Filing Plans",
                    "itemListElement": [
                        {"@type": "Offer", "name": "Sole Prop IT freelancer ITR", "price": "7999", "priceCurrency": "INR", "url": "/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Partnership / LLP IT services ITR-5", "price": "12999", "priceCurrency": "INR", "url": "/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "IT Pvt Ltd ITR-6", "price": "18999", "priceCurrency": "INR", "url": "/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Section 10AA SEZ + Form 56F audit", "price": "14999", "priceCurrency": "INR", "url": "/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Transfer Pricing Section 92E + Form 3CEB", "price": "24999", "priceCurrency": "INR", "url": "/itr-for-it-service-firms", "availability": "https://schema.org/InStock"}
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
        /* Amount column — right-align only on tables with .table-amount class */
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
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
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

        /* Process Evidence Screenshot — Plan 3.2 */
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
            background: #25D366;
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
            padding: 8px 22px; background: #fff; color: #25D366;
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            border: none; border-radius: 50px; cursor: pointer;
            text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
        }
        .wa-sticky-bar-btn:hover { background: #f0fdf4; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
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
            .wa-sticky-bar-btn::before { content: 'Join Community'; }
            .wa-sticky-bar-btn span { display: none; }
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
                        ITR Filing for IT Services and Software Development Firms
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">8 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Master Services Agreement and SoW; FIRCs; LUT acknowledgement; SEZ Letter of Approval and Form 56F; ESOP scheme; Form 26AS, AIS, TIS; partnership deed / LLP Agreement / Certificate of Incorporation; DSC.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 7,999 sole prop ITR-3 / ITR-4; Rs 12,999 partnership / LLP ITR-5; Rs 18,999 IT Pvt Ltd ITR-6; Rs 14,999 add-on for SEZ Section 10AA Form 56F; Rs 24,999 add-on for transfer pricing Form 3CEB.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Sole proprietor freelance developers; partnership / LLP IT consultancies; private limited / OPC IT firms; DPIIT-recognized startups; existing SEZ unit IT firms within Section 10AA 15-year window; ESOP-issuing companies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 14 days for sole prop non-audit; 14 to 21 days for firm / LLP / company; 21 to 30 days for tax audit cases. Statutory due 31 July 2026 (non-audit); 31 October 2026 (audit ITR + Form 3CEB); 30 November 2026 (Section 92E TP cases).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20filing%20for%20my%20IT%20services%20%2F%20software%20firm.%20Please%20share%20a%20Section%2010AA%20SEZ%20eligibility%20and%20LUT%20renewal%20assessment." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for IT Service Firms'/>
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
                                <option value="itr-for-it-service-firms" selected>ITR for IT Service Firms</option>
                                <option value="itr-for-business">ITR for Business</option>
                                <option value="itr-for-companies">ITR for Companies</option>
                                <option value="itr-for-professionals">ITR for Professionals</option>
                                <option value="income-tax-return">Income Tax Return</option>
                                <option value="gst-registration">GST Registration</option>
                                <option value="gst-refund">GST Refund</option>
                                <option value="tax-planning-services">Tax Planning Services</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron filed our LUT for FY 2026-27 within 3 days and accelerated Rs 60 lakh of pending IGST refund. Their TP study with TNMM benchmarking saved us a 9 lakh penalty under 271AA. They actually read our MSA before filing.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajiv K</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, SaaS Pvt Ltd / Bengaluru</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>

        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our previous CA filed our SEZ ITR-6 without Form 56F and on the new tax regime. We forfeited 1.8 crore of Section 10AA deduction. Patron filed a 139(8A) updated return with Form 56F and regime opt-out and we recovered 1.4 crore net of additional tax.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Shilpa N</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, IT Pvt Ltd / Pune SEZ</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>

        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We are a DPIIT recognized startup and issued ESOPs to 8 engineers. Patron set up Section 156 deferral so the perquisite tax does not hit our team at exercise. They also handled the Rule 11UA FMV memo from a Merchant Banker. Our employees did not face cash crunch.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Amit K</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder / DPIIT Startup / Hyderabad</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>

        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our IT consulting LLP has 16 employees and serves UK and Australian clients. Patron applied Section 80JJAA across our last 3 hiring years and Section 40(b) under FA 2025 amended slabs. Total annual saving 12 lakh that no DIY platform would have caught.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya S</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Designated Partner, IT LLP / Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
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
                    <p>Trusted by IT services firms across Bengaluru, Hyderabad, Pune, Gurugram, Noida, Chennai, and Mumbai for SEZ Section 10AA, LUT, transfer pricing, and ESOP compliance.</p>
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
            
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">LUT vs IGST</a>
            <a href="#legal-section" class="toc-btn">Legal</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for IT Services Firms - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for IT Service Firms Services at a Glance</strong></p>
                    <p>IT services and software firms face SEVEN industry-specific tax considerations - LUT for export of services without IGST under Rule 96A CGST Rules, Section 10AA SEZ deduction (sunset for new units 1 April 2021), FIRC and Schedule FSI / FA foreign income reporting, transfer pricing Section 92E + Form 3CEB for international related party transactions, ESOP taxation Section 17(2)(vi) at exercise with Section 80-IAC startup deferral, Section 32 computer depreciation at 40 percent WDV, and Section 80JJAA additional employee cost deduction.</p>
                </div>
                <p>IT services and software firm ITR is the area where DIY platforms and generalist accountants miss SEVEN industry-specific levers worth 10 to 40 percent of annual profit. A Bengaluru SaaS firm exporting to US clients without LUT in Form GST RFD-11 pays IGST on each invoice and waits 60 to 180 days for refund - blocking Rs 50 lakh to Rs 4 crore working capital annually. A Pune-based existing SEZ IT unit forgetting to file Form 56F audit report alongside ITR-6 forfeits Section 10AA deduction in that AY entirely - a Rs 30 lakh to Rs 5 crore tax exposure depending on profit size.</p>
                <p>An IT Pvt Ltd subsidiary of a US parent receiving 30 percent margin on cost-plus contracts must file Form 3CEB by 31 October 2026 with arms length pricing study; failure attracts Section 271AA penalty 2 percent of transaction value (potentially Rs 6 lakh on a Rs 3 crore transaction). A DPIIT-recognized startup IT firm issuing ESOPs without invoking Section 80-IAC deferral attracts Section 17(2)(vi) perquisite tax at exercise creating employee cash outflow without liquidity. Patron Accounting has filed IT and software sector ITRs for 320+ firms across Bengaluru, Hyderabad, Pune, Gurugram, Noida, Chennai, and Mumbai since 2019.</p>
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
                <h2 class="section-title">What Is IT Services / Software Firm ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    
            <p><em>IT Services / Software Firm ITR filing means computing PGBP income across IT-specific complexities - LUT enabled zero-rated export of services under Rule 96A CGST Rules, Section 10AA SEZ deduction for existing pre-sunset units (Form 56F audit), FIRC reconciliation with Schedule FSI / FA foreign income disclosure, transfer pricing Section 92E + Form 3CEB for international related party transactions, ESOP perquisite taxation Section 17(2)(vi) with Section 80-IAC startup deferral, Section 32 computer/software depreciation at 40 percent WDV, and Section 80JJAA additional employee cost deduction - all reported in entity-appropriate ITR form (ITR-3 / ITR-5 / ITR-6) with Section 44AB tax audit coordination where applicable.</em></p>
            <p>India IT services sector spans pure-domestic firms (banking software, government IT, captive IT departments), export-only firms (offshore development centres for US/UK/EU/AU clients), hybrid firms (mix of domestic and export), SEZ-located IT firms (commenced operations on or before 31 March 2021 within Section 10AA 15-year window), and captive subsidiaries of foreign parents (international related party transactions). Each profile has distinct compliance perimeters.</p>
            <p>Pure-domestic firms face standard ITR + GST 18 percent + tax audit Section 44AB at Rs 1 crore. Export firms face additionally LUT for zero-rated supply (or with-IGST refund cycle), FIRC tracking, Schedule FSI foreign income reporting (even though exempt under Section 10AA where applicable, disclosure required). SEZ firms face Section 10AA 100/50/50 deduction across 15 years with mandatory Form 56F. Captive subsidiaries face transfer pricing Section 92E + Form 3CEB by 31 October. ESOP-issuing firms face employee perquisite TDS at exercise. This service handles all profiles with a CA who understands global delivery models, dollar-denominated invoicing, and the working capital cycle of export receivables.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for IT Service Firms:</strong></p>
                    
            <p><strong>Section 10AA - SEZ Deduction:</strong> Income Tax Act 1961 Section 10AA. 100 percent of profits from export of articles or services for first 5 consecutive AYs; 50 percent for next 5 AYs (years 6-10); 50 percent of profit credited to SEZ Reinvestment Reserve for next 5 AYs (years 11-15). Total 15-year tax holiday. Mandatory Form 56F audit by CA. Cannot opt new tax regime Section 115BAC.</p>
            <p><strong>Section 10AA Sunset:</strong> Finance Act 2016 inserted proviso. NO deduction for SEZ units commencing manufacture or production of articles or services on or after 1 April 2021. Existing units that commenced operations on or before 31 March 2021 continue to claim deduction for full 15-year period.</p>
            <p><strong>LUT - Letter of Undertaking:</strong> Filed in Form GST RFD-11 on GST portal under Rule 96A of CGST Rules 2017. Permits zero-rated supply (export of services / goods / supply to SEZ) WITHOUT payment of IGST. Annual filing each FY. Validity 1 FY; renewal mandatory each year.</p>
            <p><strong>Form 56F - SEZ Audit Report:</strong> Audit report by Chartered Accountant for SEZ units claiming Section 10AA. Filed alongside ITR. Verifies eligibility conditions, separate books, computation of export turnover and total turnover, formula application. CA UDIN required. Without Form 56F, deduction disallowed.</p>
            <p><strong>Schedule FSI - Foreign Source Income:</strong> ITR schedule disclosing income earned outside India taxable in India. Country-wise breakdown. Tax payable / paid in source country. DTAA application. Mandatory for assessees with foreign income regardless of taxability.</p>
            <p><strong>Schedule FA - Foreign Assets:</strong> ITR schedule disclosing foreign assets held by assessee. Mandatory for Resident and Ordinarily Resident (ROR). Bank accounts, financial interests, immovable property, beneficial interest, ESOPs abroad. Section 43 of Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year for non-disclosure or inaccurate particulars. Threshold relief w.e.f. 1 October 2024 (Budget 2024): no penalty where aggregate value of foreign assets other than immovable property does not exceed Rs 20 lakh; foreign bank accounts with aggregate balance up to Rs 5 lakh during PY also outside the penalty net. Per Special Bench ITAT (2025), the word "may" in Section 43 is directory not mandatory, allowing discretionary non-imposition for technical or venial breaches.</p>
            <p><strong>FIRC - Foreign Inward Remittance Certificate:</strong> Document issued by AD bank to recipient of foreign remittance. Confirms USD / EUR / GBP receipt date, amount, originating bank, purpose code (P0802 for software services, P0803 for IT enabled services). Reconciles to GSTR-1 export invoice and Schedule FSI.</p>
            <p><strong>Section 92E - Transfer Pricing:</strong> Income Tax Act Section 92E. Report by Accountant in Form 3CEB for international transactions and Specified Domestic Transactions. Filed by 31 October 2026 (one month before ITR due date for TP cases). 22 clauses covering nature, value, arms length pricing.</p>
            <p><strong>Section 17(2)(vi) - ESOP Perquisite:</strong> At exercise of ESOP - difference between Fair Market Value of share at exercise date AND exercise price (price paid by employee) added to salary income. TDS by employer Section 192. Two events: exercise (perquisite) and sale (capital gains).</p>
            <p><strong>Section 80-IAC - Startup ESOP Deferral:</strong> Finance Act 2020 inserted Section 156 deferral mechanism for ESOPs of DPIIT-recognized startups eligible under Section 80-IAC. ESOP perquisite tax DEFERRED to earlier of (a) date of sale of shares; (b) 5 years from end of AY of exercise; (c) date of cessation of employment.</p>
            <p><strong>Section 32 - Depreciation:</strong> Income Tax Rules 1962 Schedule II. Computers and computer software 40 percent WDV. General plant and machinery 15 percent WDV. Buildings 10 percent (factory) / 5 percent (other). Section 32(1)(iia) additional 20 percent on new manufacturing machinery NOT available to IT services.</p>
            <p><strong>Equalisation Levy:</strong> Originally 6 percent on online advertisement payments to non-resident service providers (introduced Finance Act 2016) and 2 percent on e-commerce supply (introduced Finance Act 2020). The 2 percent EL was ABOLISHED w.e.f. 1 August 2024 by Finance Act 2024. The 6 percent EL on online advertisement was subsequently ABOLISHED w.e.f. 1 April 2025 by Finance Act 2025. For FY 2025-26 (AY 2026-27) onwards, no fresh Equalisation Levy applies. Last Form 1 statement filed for FY 2024-25 (covering 6 percent payments up to 31 March 2025) was due 30 June 2025. Section 195 TDS on payments to non-residents continues to apply as before.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for IT Service Firms</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Verified by</span>
                        <strong>CA & CS Team</strong>
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
            <h2 class="section-title">IT Sub-Sector Matrix - Who Needs This Service</h2>
            <div class="content-text">
                
                
            <p>IT services sector spans the entire value chain. Each profile has distinct compliance perimeters. The table below maps the 12 most common IT firm profiles to their entity type, Section 10AA eligibility, LUT requirement, transfer pricing applicability, and tax audit threshold.</p>
            <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Entity Type</th>
                            <th>Section 10AA?</th>
                            <th>LUT Required?</th>
                            <th>Transfer Pricing?</th>
                            <th>Tax Audit Threshold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Pure-domestic IT services</td><td>Pvt Ltd / LLP</td><td>NO (no exports)</td><td>NO</td><td>Only if SDT &gt; Rs 20 cr</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Export-only services (US/EU/UK clients)</td><td>Pvt Ltd / OPC / LLP</td><td>YES if SEZ pre-Apr 2021</td><td>YES (or with-IGST refund)</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Hybrid domestic + export</td><td>Pvt Ltd / LLP</td><td>PARTIAL (exports only)</td><td>YES for export portion</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Sole proprietor freelance dev</td><td>Sole prop</td><td>Generally NO</td><td>YES for foreign clients</td><td>NA (single person)</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>SEZ Unit IT firm (existing pre-2021)</td><td>Pvt Ltd / LLP</td><td>YES (within 15-yr window)</td><td>YES (zero-rated to SEZ)</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>SEZ Unit IT firm (post-Apr 2021)</td><td>Pvt Ltd / LLP</td><td>NO (sunset triggered)</td><td>YES</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Captive subsidiary of foreign parent</td><td>Pvt Ltd</td><td>Generally NO</td><td>YES (export to parent)</td><td>YES (mandatory Form 3CEB)</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>DPIIT-recognized startup</td><td>Pvt Ltd</td><td>Per SEZ status</td><td>YES if exporting</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>IT Consultancy Sole prop (technical)</td><td>Sole prop</td><td>Generally NO</td><td>YES for foreign clients</td><td>NA</td><td>Profession Rs 50 lakh</td></tr>
                        <tr><td>Software Pvt Ltd (PaaS / SaaS / IaaS)</td><td>Pvt Ltd</td><td>Per SEZ status</td><td>YES if exporting</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>ESOP-issuing IT firm</td><td>Pvt Ltd</td><td>NA</td><td>NA</td><td>NA</td><td>Per business size</td></tr>
                        <tr><td>Multi-state IT firm</td><td>Pvt Ltd</td><td>Multi-state SEZ check</td><td>YES per state GSTIN</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-top:18px;font-size:14px;color:var(--text-muted);"><em>If your IT firm has a foreign parent, an SEZ Letter of Approval, ESOP grants outstanding, or DPIIT recognition, your ITR is no longer a 1-week filing job. Schedule a free 15-minute call with Patron to map your profile.</em></p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR and Adjacent Compliance for IT Services Sector</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td>IT Sole Prop / Firm / LLP / Pvt Ltd ITR Filing</td>
                            <td>Entity-appropriate ITR form selection - sole prop ITR-3 (regular books) / ITR-4 (Section 44ADA presumptive only if technical consultancy); firm / LLP ITR-5 with Section 40(b); Pvt Ltd ITR-6 with corporate rate optimization (22 percent Section 115BAA / 25 percent / 30 percent regular). Schedule BP, OS, CG, FSI, FA, TR.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>LUT Renewal and Export of Services GST Coordination</td>
                            <td>Annual LUT in Form GST RFD-11 under Rule 96A CGST Rules 2017. Reconciliation of zero-rated supply to FIRC realization. Annexure-1 export details. Coordination with /gst-refund for any with-IGST-refund claims.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Section 10AA SEZ Deduction with Form 56F</td>
                            <td>For pre-1 April 2021 SEZ unit IT firms within 15-year window. Section 10AA 100/50/50 schedule check. Form 56F audit by CA. SEZ Reinvestment Reserve Account compliance for years 11-15. Letter of Approval renewal coordination.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>Transfer Pricing Section 92E + Form 3CEB</td>
                            <td>For IT firms with international related party transactions. TP study with FAR analysis. Method selection (TNMM most common for IT - cost plus 10-15 percent). Benchmarking. Form 3CEB 22 clauses. Section 92D and Rule 10D documentation.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>ESOP Taxation - Section 17(2)(vi) and Section 80-IAC Deferral</td>
                            <td>Identify perquisite at exercise (FMV minus exercise price); TDS Section 192. For DPIIT-recognized startups - Section 156 Finance Act 2020 deferral to earlier of sale / 5 years from AY of exercise / employment cessation.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>Foreign Income Reporting and Section 195 TDS</td>
                            <td>Schedule FSI Foreign Source Income; Schedule FA Foreign Assets (ROR mandatory; Section 43 Black Money Act Rs 10 lakh per defaulting year; threshold relief w.e.f. 1 October 2024 for non-immovable foreign assets up to Rs 20 lakh aggregate, foreign bank balances up to Rs 5 lakh); Schedule TR DTAA tax relief with Form 67. Section 195 TDS on foreign vendors. Form 15CA / 15CB compliance.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>


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
            <h2 class="section-title">How Patron Files Your IT / Software Firm ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 7-step process covering entity mapping, books reconciliation, Section 10AA SEZ, LUT renewal, transfer pricing, ESOP, and final ITR filing.</p>
        </header>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Entity Type and Profile Mapping</h3>
                    <p class="step-description">Identify entity type (sole prop / partnership / LLP / Pvt Ltd / OPC / HUF) for ITR form selection. Identify revenue profile (pure domestic / pure export / hybrid). Identify special status (SEZ unit pre-Apr 2021 / DPIIT startup / captive subsidiary). Identify related party transactions. Set up compliance calendar.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity classification</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance calendar setup</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="25" y="20" width="35" height="20" rx="3" fill="#E8712C" opacity="0.3"/>
                                <rect x="65" y="20" width="35" height="20" rx="3" fill="#14365F" opacity="0.2"/>
                                <rect x="25" y="50" width="35" height="20" rx="3" fill="#14365F" opacity="0.2"/>
                                <rect x="65" y="50" width="35" height="20" rx="3" fill="#E8712C" opacity="0.3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Profile Mapped</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Books and Reconciliation</h3>
                    <p class="step-description">Profit and Loss Account, Balance Sheet, Section 32 depreciation chart (computers and software 40 percent WDV, general plant 15 percent WDV). Reconcile GSTR-1 turnover (export at zero-rate plus domestic at 18 percent) to ITR turnover. AIS / TIS reconciliation. FIRC tracking by invoice with realization date for Section 10AA(4A) 6-month export proceeds compliance.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>P&amp;L and Balance Sheet</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR to ITR reconciliation</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="60" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="25" y1="30" x2="95" y2="30" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="25" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                <line x1="25" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                <line x1="25" y1="62" x2="70" y2="62" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Books Tied</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Section 10AA SEZ Computation</h3>
                    <p class="step-description">For pre-Apr 2021 SEZ unit IT firms within 15-year window: identify deduction year (1-5 100 percent / 6-10 50 percent / 11-15 50 percent ploughback). Compute formula = (Profit of unit x Export turnover of unit) / Total turnover of business. Form 56F audit by CA. SEZ Reinvestment Reserve Account if year 11+. CANNOT opt new tax regime Section 115BAC.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15-year window check</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 56F audit</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="32" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                <path d="M48 50l8 8 18-18" stroke="#E8712C" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                <text x="60" y="92" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SEZ 10AA</text>
                            </svg>
                        </div>
                        <span class="illustration-label">SEZ Verified</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">LUT Renewal and Export Documentation</h3>
                    <p class="step-description">LUT in Form GST RFD-11 for FY 2026-27 if not yet filed (must be filed before first export of FY). Annexure-1 reconciliation of FY 2025-26 exports to FIRC realization. Tracking purpose codes (P0802 software services, P0803 IT enabled services, P0805 software products) for FEMA compliance. Annual export turnover certificate.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT Form GST RFD-11</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIRC purpose codes</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="65" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="25" width="40" height="6" rx="2" fill="#E8712C"/>
                                <line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="30" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <circle cx="80" cy="65" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                <path d="M76 65l3 3 6-6" stroke="#E8712C" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">LUT Filed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Transfer Pricing Section 92E Compliance</h3>
                    <p class="step-description">For IT firms with international related party transactions: FAR analysis (Functions performed, Assets used, Risks assumed). Method selection - TNMM (cost plus markup) most common for IT services; benchmarking against comparable Indian IT services firms. Margin range typically 10-15 percent net profit on cost. TP study documentation per Section 92D and Rule 10D. Form 3CEB by 31 October 2026; ITR by 30 November 2026.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FAR analysis</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TNMM benchmarking</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="55" width="14" height="30" fill="#14365F" opacity="0.5"/>
                                <rect x="40" y="40" width="14" height="45" fill="#E8712C"/>
                                <rect x="60" y="30" width="14" height="55" fill="#14365F" opacity="0.5"/>
                                <rect x="80" y="50" width="14" height="35" fill="#14365F" opacity="0.3"/>
                                <line x1="15" y1="85" x2="100" y2="85" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="20" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TNMM</text>
                            </svg>
                        </div>
                        <span class="illustration-label">TP Benchmarked</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">ESOP and Salary Optimization</h3>
                    <p class="step-description">For ESOP-issuing companies: identify exercise events during FY; compute Section 17(2)(vi) perquisite (FMV at exercise minus exercise price); employer TDS Section 192 reflected in Form 24Q quarterly returns. For DPIIT Section 80-IAC eligible startups - invoke Section 156 deferral - perquisite tax deferred to earlier of sale / 5 years from AY of exercise / employment cessation. Coordinate with Pvt Ltd ITR-6 and partner-level individual ITRs.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 17(2)(vi) perquisite</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 80-IAC deferral</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="40" cy="50" r="8" fill="#E8712C" opacity="0.7"/>
                                <circle cx="60" cy="50" r="8" fill="#E8712C" opacity="0.7"/>
                                <circle cx="80" cy="50" r="8" fill="#E8712C" opacity="0.7"/>
                                <text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP</text>
                                <text x="60" y="73" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">FMV - Exercise</text>
                            </svg>
                        </div>
                        <span class="illustration-label">ESOP Tax Mapped</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">ITR Filing and Multi-Schedule Coordination</h3>
                    <p class="step-description">File entity-appropriate ITR on incometax.gov.in. Schedule FSI foreign income; Schedule FA foreign assets (ROR mandatory); Schedule TR tax relief with Form 67; Schedule BP firm-level for partnership / LLP. E-verify within 30 days. Coordinate Form 3CEB filing for TP cases. Track Form 56F filing for SEZ cases. Respond to Section 143(1) intimation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR e-filed and verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All schedules covered</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="10" width="70" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="14" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                <path d="M53 35l5 5 9-10" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                <line x1="35" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="1.5" stroke-linecap="round"/>
                                <line x1="35" y1="68" x2="80" y2="68" stroke="#14365F" stroke-width="1" opacity="0.5"/>
                                <line x1="35" y1="76" x2="75" y2="76" stroke="#14365F" stroke-width="1" opacity="0.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">ITR Filed</span>
                        <span class="step-number-large">07</span>
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
            <h2 class="section-title">Document Checklist for IT Services / Software Firm ITR</h2>
            <div class="content-text">
                
                
            <p>Every IT services and software firm ITR engagement starts with this document checklist. Send these along with your Master Services Agreement to begin.</p>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">A. Entity and Identity</h3>
            <ul>
                <li>PAN of entity; GSTIN; LLPIN / CIN / Firm registration; IEC certificate (where applicable)</li>
                <li>Partnership Deed / LLP Agreement / Memorandum and Articles of Association</li>
                <li>Bank account details for refund (separate accounts for INR and EEFC where applicable)</li>
                <li>DSC of authorized signatory (Class 3, valid)</li>
                <li>For SEZ units: Letter of Approval (LOA) and Bond-cum-Legal Undertaking (BLU)</li>
                <li>For DPIIT startups: DPIIT recognition certificate; Section 80-IAC eligibility certificate</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">B. Books of Accounts and Financial Statements</h3>
            <ul>
                <li>Profit and Loss Account FY 2025-26 with revenue split - domestic services (with 18 percent GST) / export services (zero-rated) / SEZ supplies</li>
                <li>Balance Sheet as on 31 March 2026</li>
                <li>Trial balance and ledger extracts</li>
                <li>Section 32 depreciation chart - computers and software (40 percent WDV) and general plant (15 percent WDV)</li>
                <li>Fixed asset register with addition / disposal log</li>
                <li>Receivables aging by client (domestic INR vs foreign USD/EUR/GBP)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">C. Export of Services Documentation</h3>
            <ul>
                <li>LUT acknowledgement Form GST RFD-11 for FY 2025-26</li>
                <li>Master Services Agreement (MSA) and Statement of Work (SoW) with each foreign client</li>
                <li>GSTR-1 export details (Table 6A)</li>
                <li>GSTR-3B with zero-rated supply reported in Table 3.1(b)</li>
                <li>FIRC for each foreign remittance with purpose code and realization date</li>
                <li>Bank statements (USD / EUR / GBP) showing forex realization</li>
                <li>EEFC (Exchange Earners Foreign Currency) account statements where applicable</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">D. SEZ Documentation (where applicable)</h3>
            <ul>
                <li>SEZ Letter of Approval (LOA) - dated before 31 March 2021 for Section 10AA eligibility</li>
                <li>Annual Performance Report (APR) submitted to Development Commissioner</li>
                <li>SEZ Online quarterly performance report</li>
                <li>NFE (Net Foreign Exchange) computation cumulative for 5-year block</li>
                <li>Form 56F audit report by CA (separate per SEZ unit)</li>
                <li>SEZ Reinvestment Reserve Account ledger (years 11-15)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">E. Transfer Pricing Documentation (where applicable)</h3>
            <ul>
                <li>List of all international related party transactions (intra-group services, royalty, interest, transfer pricing adjustments)</li>
                <li>Group structure chart and shareholding pattern</li>
                <li>TP study with FAR analysis (Functions, Assets, Risks)</li>
                <li>Method selection rationale (CUP / RPM / CPM / PSM / TNMM / Other)</li>
                <li>Benchmarking analysis with comparable companies (Prowess / Capitaline / TP Catalyst search)</li>
                <li>Inter-company agreements and invoices</li>
                <li>Master File and Country-by-Country Report (where group consolidated revenue above Rs 500 crore)</li>
                <li>Form 3CEB acknowledgement (filed by 31 October 2026)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">F. ESOP Documentation (where applicable)</h3>
            <ul>
                <li>ESOP scheme document approved by Board / Members</li>
                <li>ESOP grant letters per employee</li>
                <li>ESOP exercise notices during FY</li>
                <li>FMV computation by Merchant Banker / CA for unlisted shares (Rule 11UA)</li>
                <li>Section 17(2)(vi) perquisite computation per employee</li>
                <li>Form 24Q quarterly TDS returns reflecting ESOP perquisite</li>
                <li>For Section 80-IAC startups: deferral claim in Form 12BA per employee</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">G. Foreign Vendor Payment Documentation (where applicable)</h3>
            <ul>
                <li>Invoices from foreign vendors (SaaS subscriptions, foreign consultants, advertising platforms)</li>
                <li>DTAA tax residency certificate of foreign vendor</li>
                <li>Form 15CA / 15CB for outward remittance</li>
                <li>Section 195 TDS challans</li>
                <li>Equalisation Levy challans / Form 1 statement for FY 2024-25 if applicable (note: 6 percent EL on online advertisement abolished w.e.f. 1 April 2025; no new EL for FY 2025-26 onwards)</li>
                <li>No-PE declaration from foreign vendor (where applicable)</li>
            </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IT Services / Software Firm ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td>"Our Bengaluru SaaS company has FY 2025-26 export revenue Rs 4.5 crore from US clients (cost-plus 12 percent margin from US parent). We forgot to file LUT for FY 2025-26. We have been paying 18 percent IGST on each invoice and waiting for refund. Refund cycles are 90-180 days. Working capital is squeezed."</td>
                            <td>This is a recoverable situation but losing time-value of money. LUT in Form GST RFD-11 should be filed FIRST every FY before any export invoice. For FY 2025-26 you must continue with-IGST-refund route through 31 March 2026 - file refund applications RFD-01A regularly. For FY 2026-27 starting 1 April 2026, file LUT before first invoice. Patron will: (a) file LUT for FY 2026-27 immediately; (b) accelerate FY 2025-26 refund cycles via RFD-01A with proper Annexure documentation; (c) coordinate with <a href="/gst-refund">/gst-refund</a> team. ALSO CRITICAL - your US parent relationship makes you a captive subsidiary. Transfer pricing Section 92E + Form 3CEB by 31 October 2026 is MANDATORY. We will conduct TP study with TNMM method, benchmark against Indian IT services comparables, document arms length pricing for the 12 percent margin (likely defensible if comparable range supports). Section 271AA penalty 2 percent of transaction value (potentially Rs 9 lakh on Rs 4.5 crore) avoidable with proper documentation.</td>
                        </tr>
                        <tr>
                            <td>"We are a Pune SEZ Unit IT firm operating since 2018 - within Section 10AA 15-year window. Our previous CA filed FY 2024-25 ITR-6 without Form 56F audit report. Did we lose Section 10AA deduction for that AY?"</td>
                            <td>AT RISK but RECOVERABLE through Section 139(8A) updated return. Form 56F is the SEZ-specific audit report by Chartered Accountant verifying eligibility, separate books, export turnover formula, and FX realization. Without Form 56F, AO can disallow Section 10AA deduction in scrutiny. For FY 2024-25 (AY 2025-26): (a) compute revised ITR-6 with Form 56F audit; (b) file updated return Section 139(8A) with 25 percent additional tax and interest by 31 March 2027; (c) carry forward unutilized deduction within 15-year window. For FY 2025-26 (AY 2026-27) ONGOING: ensure Form 56F filed by 30 September 2026 alongside Form 3CD tax audit. Verify that you opted OUT of new tax regime Section 115BAC - because Section 10AA cannot be claimed under new regime. If you are in years 11-15, ensure SEZ Reinvestment Reserve Account is properly maintained and used only for plant and machinery. Patron will also audit your NFE cumulative compliance and Annual Performance Report submissions.</td>
                        </tr>
                        <tr>
                            <td>"Our IT Pvt Ltd in Gurugram has FY 2025-26 export revenue Rs 8 crore from 3 foreign clients (UK enterprise, US startup, Australian agency). All are unrelated parties. ITC accumulation due to LUT export = approximately Rs 14.4 lakh. Can we get this refunded?"</td>
                            <td>YES - this is zero-rated supply refund under Section 54 of CGST Act 2017 (different from inverted duty refund). Two refund options: (a) zero-rated supply WITH IGST payment + claim refund of IGST; (b) zero-rated supply WITHOUT IGST payment (using LUT) + claim refund of accumulated unutilized ITC. You appear to be on Option (b) with LUT in place. Refund formula: Refund Amount = (Turnover of zero-rated supply of services x Net ITC) / Adjusted Total Turnover. Form RFD-01 monthly or quarterly cycles. Time limit 2 years from end of relevant period. Documentation: GSTR-1 with Table 6A export details, GSTR-3B Table 3.1(b) zero-rated supply, FIRC for forex realization, LUT acknowledgement, statement of invoices with shipping bill / FIRC linkage. Patron coordinates with <a href="/gst-refund">/gst-refund</a> service for end-to-end refund handling - first refund typically credited within 90 days.</td>
                        </tr>
                        <tr>
                            <td>"Our IT Pvt Ltd is DPIIT-recognized startup eligible under Section 80-IAC. We issued ESOPs to 8 employees in FY 2024-25 with exercise price Rs 100 each; FMV at exercise was Rs 850. Total perquisite = Rs 60 lakh. Our employees do not have liquidity to pay perquisite tax. What can we do?"</td>
                            <td>Use Section 156 deferral introduced by Finance Act 2020 specifically for this situation. For DPIIT-recognized Section 80-IAC eligible startups, ESOP perquisite tax under Section 17(2)(vi) is DEFERRED from exercise to earlier of: (a) date of sale of shares; (b) 5 years from end of AY of exercise; (c) date of cessation of employment. So for FY 2024-25 exercise in AY 2025-26, deferral runs to 31 March 2030 OR earlier sale / cessation. Implementation steps: (1) verify Section 80-IAC eligibility certificate from DPIIT; (2) verify entity is incorporated less than 10 years, turnover less than Rs 100 crore, eligible business; (3) employees individually opt for deferral; (4) employer Form 12BA reflects deferred perquisite per employee; (5) employer tracks shares per employee with disposal flag; (6) on triggering event, perquisite tax and interest paid by employee within 14 days. Critical caution: deferral is on the perquisite TAX, not the perquisite VALUE - the FMV at original exercise date is locked. Patron will issue ESOP scheme document amendment if required and individual employee deferral letters. Also coordinate FMV computation by Merchant Banker per Rule 11UA for unlisted share valuation defensibility.</td>
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
            <h2 class="section-title">Fees for ITR Filing - IT Services and Software Firms</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Sole Prop IT freelancer ITR-3 / ITR-4</td><td>Starting Rs 7,999 (Exl GST and Govt. Charges)</td><td>ITR filing, Schedule FSI / FA where applicable, Section 32 depreciation</td></tr>
                        <tr><td>Partnership / LLP IT services ITR-5</td><td>Starting Rs 12,999 (Exl GST and Govt. Charges)</td><td>ITR-5 with Section 40(b) FA 2025 slabs, partner allocation, Schedule FSI / FA / TR</td></tr>
                        <tr><td>IT Pvt Ltd / OPC ITR-6</td><td>Starting Rs 18,999 (Exl GST and Govt. Charges)</td><td>ITR-6, MAT computation, Section 115BAA / 115BAB regime check, full schedules</td></tr>
                        <tr><td>LUT Renewal (Form GST RFD-11)</td><td>Rs 2,999 (Exl GST and Govt. Charges)</td><td>Annual LUT filing, Annexure-1 reconciliation, export turnover certificate</td></tr>
                        <tr><td>Section 10AA SEZ + Form 56F audit (add-on)</td><td>Rs 14,999 (Exl GST and Govt. Charges)</td><td>Form 56F audit, Section 10AA computation, SEZ Reinvestment Reserve memo</td></tr>
                        <tr><td>Transfer Pricing Section 92E + Form 3CEB (add-on)</td><td>Rs 24,999 (Exl GST and Govt. Charges)</td><td>TP study, FAR analysis, benchmarking, Form 3CEB 22 clauses, CA UDIN</td></tr>
                        <tr><td>Section 44AB Tax Audit (Form 3CD) (add-on)</td><td>Rs 9,999 (Exl GST and Govt. Charges)</td><td>Form 3CA / 3CB and Form 3CD 44 clauses, CA UDIN</td></tr>
                        <tr><td>Master File and CbCR (Transfer Pricing)</td><td>Rs 49,999 (Exl GST and Govt. Charges)</td><td>Master File and Country-by-Country Report (group revenue above Rs 500 crore)</td></tr>
                        <tr><td>ESOP Section 80-IAC deferral coordination</td><td>Rs 9,999 (Exl GST and Govt. Charges)</td><td>Per-employee deferral memo, Form 12BA, FMV defence</td></tr>
                        <tr><td>FMV computation Rule 11UA (Merchant Banker)</td><td>Rs 24,999 (Exl GST and Govt. Charges)</td><td>Unlisted share FMV per Rule 11UA Method 1 / 2</td></tr>
                        <tr><td>Form 15CA / 15CB foreign vendor TDS</td><td>Rs 1,999 per remittance (Exl GST and Govt. Charges)</td><td>CA certification, DTAA application, Section 195 compliance</td></tr>
                        <tr><td>Equalisation Levy historical clean-up (FY 2024-25 final filings)</td><td>Rs 4,999 (Exl GST and Govt. Charges)</td><td>Last Form 1 due 30 June 2025; 6 percent EL abolished 1 April 2025; no fresh EL for FY 2025-26</td></tr>
                        <tr><td>Multi-state IT firm (multi-GSTIN)</td><td>Starting Rs 24,999 (Exl GST and Govt. Charges)</td><td>Multi-state GST reconciliation and ITR consolidation</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td><strong>Starting Rs 7,999 (Exl GST and Govt. Charges)</strong></td><td>Sole prop ITR floor; tiered upward by entity type and add-ons above</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for IT Service Firms consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%2015-minute%20Section%2010AA%20SEZ%2C%20LUT%2C%20transfer%20pricing%2C%20and%20ESOP%20deferral%20assessment%20for%20my%20IT%20services%20firm." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken and Statutory Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Sole Proprietor IT freelancer ITR</td><td>5-7 working days</td><td>31 July 2026</td></tr>
                        <tr><td>Partnership / LLP IT services ITR-5</td><td>10-14 working days</td><td>31 July 2026</td></tr>
                        <tr><td>IT Pvt Ltd / OPC ITR-6 (non-audit)</td><td>14-21 working days</td><td>31 October 2026 (default audit applicable for companies)</td></tr>
                        <tr><td>Tax Audit Form 3CD + audit-case ITR</td><td>21-30 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR)</td></tr>
                        <tr><td>Section 10AA SEZ + Form 56F audit</td><td>14-21 working days</td><td>30 September 2026 (alongside Form 3CD)</td></tr>
                        <tr><td>Transfer Pricing Form 3CEB</td><td>30-45 working days</td><td>31 October 2026; ITR by 30 November 2026</td></tr>
                        <tr><td>Master File + CbCR (large groups)</td><td>60-90 working days</td><td>31 October / 30 November 2026</td></tr>
                        <tr><td>LUT Renewal</td><td>2-3 working days</td><td>Before first export of FY (31 March each year)</td></tr>
                        <tr><td>ESOP Section 80-IAC deferral</td><td>7-14 working days</td><td>Before exercise event (employee opt-in)</td></tr>
                        <tr><td>Form 15CA / 15CB foreign remittance</td><td>1-2 working days per remittance</td><td>Before remittance to foreign vendor</td></tr>
                        <tr><td>Equalisation Levy historical clean-up (FY 2024-25)</td><td>1-2 working days per filing</td><td>Last Form 1 due 30 June 2025; 6 percent EL abolished w.e.f. 1 April 2025</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Urgency note:</strong> LUT must be filed BEFORE first export invoice of FY - missing it means default with-IGST-refund route for entire FY (working capital impact). Section 10AA cannot be claimed under new tax regime Section 115BAC - regime opt-out must happen before due date Section 139(1). Transfer pricing Form 3CEB by 31 October 2026 is INDEPENDENT of ITR due date - missing Form 3CEB triggers Section 271AA penalty 2 percent of transaction value even if ITR filed on time. ESOP Section 80-IAC deferral requires employee opt-in BEFORE exercise event - retroactive deferral generally NOT allowed.

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
            <h2 class="section-title">Why IT Firms Hire a CA Instead of DIY Filing</h2>
        </div>
        
            <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v4H3z"/><path d="M21 7v14H3V7"/><path d="M16 11l-4 4-4-4"/></svg></div>
                    <h3>LUT vs With-IGST-Refund Decision</h3>
                    <p>LUT in Form GST RFD-11 must be filed annually BEFORE first export invoice of FY. Missing LUT = default with-IGST route at 18 percent IGST per invoice with 60-180 day refund cycle - Rs 50 lakh to Rs 4 crore working capital block at IT firm scale. DIY platforms do not handle GST; we file LUT first then ITR.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <h3>Section 10AA SEZ Sunset Awareness</h3>
                    <p>Section 10AA deduction is ONLY for SEZ units commencing operations on or before 31 March 2021. New units post-1 April 2021 ineligible. Existing units within 15-year window must file Form 56F audit alongside ITR every year. CANNOT opt new tax regime Section 115BAC. DIY platforms do not flag SEZ specifics; we audit eligibility year-by-year.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                    <h3>Form 56F Audit Discipline</h3>
                    <p>Section 10AA deduction without Form 56F is at scrutiny risk - AO can disallow entire deduction. Mandatory CA UDIN. Verifies separate books, export turnover formula, FX realization within 6 months Section 10AA(4A). DIY platforms produce ITR without supplementary audit forms; we coordinate CA audit alongside ITR.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3z"/><path d="M9 9h6v6H9z"/></svg></div>
                    <h3>Transfer Pricing TNMM Benchmark</h3>
                    <p>Captive IT subsidiaries of foreign parents must justify cost-plus margin (typically 10-15 percent) via TP study and Form 3CEB by 31 October 2026. Section 271AA penalty 2 percent of transaction value for documentation failure. CBDT scrutiny rate high for cost-plus IT companies. DIY platforms do not handle TP; we conduct FAR analysis, benchmarking, and Form 3CEB filing.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                    <h3>ESOP Section 80-IAC Deferral</h3>
                    <p>DPIIT-recognized startups under Section 80-IAC can defer ESOP perquisite tax to earlier of sale / 5 years / employment cessation - critical for employee liquidity. Default exercise-time taxation creates cash crunch for employees. DIY platforms apply default rule; we structure deferral with employee opt-in.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                    <h3>Schedule FSI / FA / TR Coordination</h3>
                    <p>ROR holding foreign assets must disclose in Schedule FA. Section 43 of Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year. Threshold relief w.e.f. 1 October 2024: foreign assets other than immovable property aggregating up to Rs 20 lakh, and foreign bank balances up to Rs 5 lakh, are outside the penalty net. Foreign source income reported in Schedule FSI even if exempt under Section 10AA. Schedule TR DTAA tax relief with Form 67. DIY platforms commonly miss these; we coordinate full disclosure across FA, FSI, and TR.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 8h20"/><circle cx="6" cy="14" r="1"/></svg></div>
                    <h3>Section 32 Computer Depreciation</h3>
                    <p>40 percent WDV on computers and software vs 15 percent general plant - critical given IT firms have heavy server / laptop / SaaS asset base. Depreciation claim on cloud subscriptions may not qualify (operating cost vs capital expenditure judicial position). DIY platforms apply default 15 percent; we ensure correct 40 percent claim with documentation.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                    <h3>Section 80JJAA Additional Employee Cost</h3>
                    <p>30 percent deduction of additional employee cost for 3 consecutive AYs. Conditions: monthly emoluments up to Rs 25,000 per eligible employee, employed at least 240 days during the previous year, employee participates in recognized Provident Fund, business has at least 10 employees, and the hiring increases the total employee count over the prior year-end. Form 10DA CA certificate required, filed one month before ITR due date. IT firms hiring junior developers, QA / support staff, and entry-level operations staff under the Rs 25,000 cap typically meet criteria; senior-band hires do not. Often missed by DIY platforms; we evaluate eligibility year-by-year and prepare Form 10DA.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
                    <h3>Section 195 TDS and Form 15CA / 15CB on Foreign Remittances</h3>
                    <p>For FY 2025-26 (AY 2026-27), Equalisation Levy is essentially closed: 2 percent EL abolished 1 August 2024 (Finance Act 2024) and 6 percent EL on online advertisement abolished 1 April 2025 (Finance Act 2025). However, Section 195 TDS on payments to non-residents continues. Form 15CB CA certification required for payments above Rs 5 lakh per FY. DTAA application for reduced rate. Form 15CA mandatory online declaration. DIY platforms do not handle this; we issue per-remittance forms.</p>
                </article>
            </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                
            <p>Real outcomes from IT services and software firm engagements. Names anonymized; sector and geography preserved.</p>

            <div style="display:grid;grid-template-columns:1fr;gap:20px;margin-top:24px;">
                <div style="background:#FEF4EE;border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;">
                    <p style="font-weight:700;color:var(--blue);margin-bottom:8px;">CloudVault SaaS Pvt Ltd - Bengaluru SaaS firm (FY 2025-26 export Rs 4.5 crore from US clients, captive subsidiary of US parent)</p>
                    <p style="font-style:italic;color:var(--text-secondary);margin-bottom:0;">"We are a Bengaluru-based SaaS firm operating as captive subsidiary of US parent. Our previous accountant filed ITR-6 without LUT for FY 2025-26 - we paid Rs 81 lakh IGST on export invoices and were waiting for refund. Patron immediately took over: (a) filed LUT for FY 2026-27 for all future exports zero-rated without IGST; (b) accelerated FY 2025-26 IGST refund via RFD-01A monthly cycles - Rs 60 lakh credited within 4 months, balance pending; (c) crucial - identified that Form 3CEB transfer pricing report was missed for FY 2024-25 putting us at Section 271AA penalty 2 percent risk (potentially Rs 9 lakh). Patron conducted TNMM-based TP study with Indian IT services comparables; 12 percent margin defensible within arms length range. Filed Form 3CEB with proper documentation. Total benefit: Rs 81 lakh refund accelerated + Rs 9 lakh TP penalty prevented + ongoing LUT enabled zero-rated exports."</p>
                </div>

                <div style="background:#F4F7FB;border-left:4px solid var(--blue);padding:20px 24px;border-radius:8px;">
                    <p style="font-weight:700;color:var(--blue);margin-bottom:8px;">TechBridge IT Services - Pune SEZ unit IT firm (operating since 2018, FY 2025-26 turnover Rs 22 crore)</p>
                    <p style="font-style:italic;color:var(--text-secondary);margin-bottom:0;">"We are a Pune SEZ Unit IT firm operating since 2018 - within Section 10AA 15-year window. Our previous CA filed FY 2024-25 ITR-6 WITHOUT Form 56F audit report and we wrongly opted new tax regime Section 115BAC. Patron flagged BOTH errors at intake: (a) Section 10AA cannot be claimed under new regime - we forfeited the deduction in FY 2024-25 (approximately Rs 1.8 crore tax exposure); (b) Form 56F audit was missing creating additional scrutiny risk. Patron filed updated return Section 139(8A) for FY 2024-25 (AY 2025-26) with regime opt-out, Form 56F audit retroactively conducted, Section 10AA deduction claimed - 25 percent additional tax + interest paid but Rs 1.8 crore deduction restored = net benefit Rs 1.4 crore. For FY 2025-26 ongoing - ensured regime opt-out, Form 56F audit alongside Form 3CD, Section 10AA computation with SEZ Reinvestment Reserve preparation (we are entering year 8). Patron now manages entire SEZ compliance including NFE tracking and APR submission to Development Commissioner."</p>
                </div>
            </div>

            <p style="margin-top:24px;font-size:14px;color:var(--text-muted);">With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves IT services and software firms across major IT cluster geographies. Coverage: Pune (IT services in Hinjewadi / Magarpatta / Kharadi, SEZ-located firms in Rajiv Gandhi Infotech Park, captive units of multinationals); Mumbai (BFSI tech, fintech, mobile applications, IT consultancy); Delhi NCR (Gurugram software firms in Cyber City and Cyber Hub, Noida IT firms in Sector 62/63/132/137, e-commerce technology, edtech); Gurugram (premium consulting firms, AI/ML startups, SaaS unicorns). For Bengaluru, Hyderabad, and Chennai IT firms, we coordinate via virtual office and on-site visits at SEZ campuses.</p>

            <p style="margin-top:16px;font-weight:700;color:var(--blue);"><strong>Outcome Proof:</strong> Rs 1.5 crore preserved across three IT services engagements in FY 2024-25 - Bengaluru SaaS captive (Rs 81 lakh IGST refund + Rs 9 lakh TP penalty prevention); Pune SEZ IT firm (Rs 1.4 crore Section 10AA deduction restoration); Gurugram IT consulting LLP (Rs 12 lakh annual savings on Section 80JJAA + Section 40(b)).</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LUT Route vs With-IGST-Refund Route</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>LUT Route (without IGST)</th><th>With-IGST-Refund Route</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Governing Provision</td><td>Rule 96A of CGST Rules 2017 + Section 16(3)(a) of IGST Act 2017</td><td>Section 16(3)(b) of IGST Act 2017 + Section 54 of CGST Act 2017</td></tr>
                        <tr><td>Filing Required</td><td>Form GST RFD-11 (LUT)</td><td>Form GST RFD-01 (refund) per cycle</td></tr>
                        <tr><td>Filing Frequency</td><td>Annual - once per FY</td><td>Monthly or quarterly - rolling claims</td></tr>
                        <tr><td>IGST Charged on Invoice</td><td>NO</td><td>YES - 18 percent on each export invoice</td></tr>
                        <tr><td>Working Capital Impact</td><td>NIL - no IGST blocked</td><td>HIGH - 18 percent of export value blocked until refund</td></tr>
                        <tr><td>Refund Processing Time</td><td>NA - no refund needed</td><td>60-180 days typical</td></tr>
                        <tr><td>Refund Type</td><td>NA</td><td>Cash refund of IGST paid</td></tr>
                        <tr><td>Documentation Complexity</td><td>Simple - LUT form annual</td><td>Complex - per cycle Annexure-1, GSTR-1 reconciliation, FIRC linkage</td></tr>
                        <tr><td>Cancellation Risk</td><td>LOW - LUT continues unless rejected</td><td>HIGH - refund can be rejected or delayed</td></tr>
                        <tr><td>Post-Failure Consequence</td><td>If LUT cancelled, 15-day window to pay IGST + interest</td><td>If refund rejected, IGST already paid; appeal process</td></tr>
                        <tr><td>Best For</td><td>Steady regular exporters with LUT eligibility intact</td><td>New exporters, irregular exporters, exporters with LUT issues</td></tr>
                        <tr><td>Patron Recommendation</td><td><strong>PRIMARY route for all IT exporters</strong></td><td>Fallback only if LUT not feasible</td></tr>
                        <tr><td>Patron Fee</td><td>LUT renewal Rs 2,999 (Exl GST)</td><td>GST refund Rs 4,999 onwards per cycle - see <a href="/gst-refund">/gst-refund</a></td></tr>
                        <tr><td>Time Limit Consideration</td><td>LUT renewable annually</td><td>Refund 2 years from end of relevant period</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section" id="related-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                
            <p>IT services and software firms frequently need adjacent compliance work. We bundle these:</p>
            <ul>
                <li><a href="/itr-for-business">ITR for Business (HUB - non-corporate entity types)</a> - Sole prop, partnership, LLP, HUF ITR coverage with Section 44AB tax audit</li>
                <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / Public Ltd / OPC corporate ITR-6 with Section 115BAA / 115BAB regime check</li>
                <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - Cross-entity ITR coverage and form selection guide</li>
                <li><a href="/gst-registration">GST Registration</a> - First-time GST registration for new IT firms with multi-state coverage</li>
                <li><a href="/gst-refund">GST Refund (zero-rated export refunds)</a> - With-IGST-refund cycle handling for IT exporters without LUT</li>
                <li><a href="/tax-planning-services">Tax Planning Services</a> - Year-round tax structuring including regime opt-out and ESOP timing</li>
                <li><a href="/tax-audit">Tax Audit (Section 44AB)</a> - Form 3CD 44 clauses with CA UDIN for IT firms above turnover threshold</li>
                <li><a href="/income-tax-notice">Income Tax Notice Handling</a> - Section 142(1) / 143(3) / 147 / 148 scrutiny response for IT firms</li>
            </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework</h2>
            <div class="content-text">
                
                
            <p>Every claim, threshold, percentage, and deadline cited on this page is anchored to the governing statute. Patron Accounting tracks these provisions through ICAI publications, CBDT/CBIC notifications, and Finance Act amendments. Below is the consolidated regulatory framework for IT services and software firm ITR.</p>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">Income Tax Act 1961 - Sections Cited</h3>
            <ul>
                <li>Section 10AA - SEZ unit deduction with 100/50/50 schedule across 15 years; sunset 1 April 2021 for new units (Finance Act 2016)</li>
                <li>Section 17(2)(vi) - ESOP perquisite at exercise (FMV minus exercise price) with TDS Section 192</li>
                <li>Section 32 - Depreciation (computers and software 40 percent WDV, general plant 15 percent WDV)</li>
                <li>Section 35(2AB) - Weighted deduction 100 percent on R&amp;D expenditure</li>
                <li>Section 44AB - Tax audit threshold (Rs 1 crore / Rs 10 crore digital business; Rs 50 lakh profession)</li>
                <li>Section 44ADA - Presumptive 50 percent for specified professions (technical consultancy where applicable)</li>
                <li>Section 80-IAC - Eligible startup deduction with Section 156 ESOP deferral (Finance Act 2020)</li>
                <li>Section 80JJAA - 30 percent additional employee cost deduction for 3 consecutive AYs</li>
                <li>Section 92E - Transfer pricing report by accountant (Form 3CEB)</li>
                <li>Section 92BA - Specified Domestic Transactions threshold Rs 20 crore</li>
                <li>Section 115BAA / 115BAB / 115BAC - Concessional and new tax regimes</li>
                <li>Section 195 - Withholding tax on payments to non-residents</li>
                <li>Section 271AA - Transfer pricing penalty 2 percent of transaction value</li>
                <li>Section 234A / 234B / 234C / 234F - Interest and late filing fee</li>
                <li>Section 139(1) / 139(4) / 139(5) / 139(8A) - Return filing windows including updated return</li>
                <li>Section 142(1) / 143(1) / 143(3) / 147 / 148 - Assessment and reassessment provisions</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">GST and Indirect Tax Framework</h3>
            <ul>
                <li>Section 16(3) of IGST Act 2017 - Zero-rated supply with two routes (LUT or with-IGST-refund)</li>
                <li>Rule 96A of CGST Rules 2017 - LUT mechanics in Form GST RFD-11</li>
                <li>Section 54 of CGST Act 2017 - Refund framework for zero-rated supply and inverted duty</li>
                <li>Section 122 / 125 - Penalty for LUT condition violation</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">Other Statutory Anchors</h3>
            <ul>
                <li>SEZ Act 2005 + SEZ Rules 2006 - SEZ unit definition, Letter of Approval, NFE compliance</li>
                <li>FEMA 1999 + RBI Master Direction on Export of Services - Convertible foreign exchange compliance</li>
                <li>Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act 2015 - Section 43 Schedule FA non-disclosure penalty Rs 10 lakh per defaulting year (w.e.f. 1 October 2024 threshold relief for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh)</li>
                <li>Income Tax Rules 1962 - Schedule II depreciation, Rule 10D TP documentation, Rule 11UA FMV</li>
                <li>CBDT Transfer Pricing Safe Harbour Rules (Rule 10TA, 10TB, 10TC)</li>
                <li>Finance Act 2016 (Section 10AA sunset; Equalisation Levy 6 percent on online advertisement introduced), Finance Act 2020 (Section 156 ESOP deferral; Equalisation Levy 2 percent on e-commerce introduced), Finance Act 2024 (Equalisation Levy 2 percent on e-commerce abolished w.e.f. 1 August 2024), Finance Act 2025 (Equalisation Levy 6 percent on online advertisement abolished w.e.f. 1 April 2025)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">Key Government References</h3>
            <ul>
                <li><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department (incometax.gov.in)</a> - ITR utilities, Section 10AA / 92E / 17(2)(vi) FAQ, Form 3CD, Form 3CEB, Form 56F</li>
                <li><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">Central Board of Indirect Taxes and Customs (cbic.gov.in)</a> - LUT Manual, Section 16(3) IGST circular</li>
                <li><a href="https://www.sezindia.gov.in" target="_blank" rel="noopener">Special Economic Zones in India (sezindia.gov.in)</a> - LOA, NFE, APR, SEZ Online portal</li>
                <li><a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code (indiacode.nic.in)</a> - Statutory text of Income Tax Act 1961, IGST Act 2017, SEZ Act 2005</li>
            </ul>

            <p style="margin-top:18px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>


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
                    <p class="faq-expanded__lead">Answers to the most common questions IT services and software firm founders ask before filing ITR.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should an IT services firm file?</h3>
                        <div class="faq-expanded__a"><p>Depends on entity type. Sole proprietor IT freelancer / consultant: ITR-3 (regular books) or ITR-4 SUGAM (Section 44ADA presumptive only if technical consultancy classification holds; software development typically does NOT qualify). Partnership Firm or LLP IT services: ITR-5. Private Limited Company / OPC / Public Limited Company IT services: ITR-6 (with corporate rates 22 percent / 25 percent / 30 percent depending on regime). HUF with IT business: ITR-3 / ITR-4. Never ITR-1 (no business income head).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is LUT mandatory for export of IT services?</h3>
                        <div class="faq-expanded__a"><p>NO - LUT is OPTIONAL but strongly recommended. Two routes: (a) LUT in Form GST RFD-11 under Rule 96A CGST Rules 2017 - zero-rated supply WITHOUT IGST payment; (b) Without LUT - pay 18 percent IGST on each export invoice and claim refund subsequently (60-180 day cycle). LUT requires annual filing each FY before first export invoice. Working capital implication of without-LUT route is significant for IT firms - we recommend LUT as primary route for all regular IT exporters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can a new SEZ unit claim Section 10AA deduction in 2026?</h3>
                        <div class="faq-expanded__a"><p>NO. Section 10AA sunset clause (inserted by Finance Act 2016) bars new SEZ units commencing operations on or after 1 April 2021 from claiming Section 10AA deduction. Existing SEZ units that commenced operations on or before 31 March 2021 continue to claim deduction for full 15-year period (100 percent first 5 years, 50 percent next 5 years, 50 percent reinvested via SEZ Reinvestment Reserve next 5 years). Mandatory Form 56F audit and CANNOT opt new tax regime Section 115BAC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the depreciation rate on computers and software?</h3>
                        <div class="faq-expanded__a"><p>Section 32 of Income Tax Act 1961 with Income Tax Rules 1962 Schedule II. Computers and computer software 40 percent WDV (Written Down Value method). General plant and machinery 15 percent WDV. Buildings 10 percent (factory) / 5 percent (other). Furniture 10 percent. Section 32(1)(iia) additional 20 percent on new plant and machinery NOT available to IT services since IT services classified as services not manufacturing per judicial precedents.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are ESOPs taxed when exercised by IT employees?</h3>
                        <div class="faq-expanded__a"><p>Section 17(2)(vi) of Income Tax Act 1961. At exercise of ESOP - difference between Fair Market Value of share at exercise date AND exercise price (price paid by employee) added to salary income as perquisite. Employer deducts TDS under Section 192. Subsequent sale of acquired shares triggers capital gains - cost basis equals FMV at exercise (already taxed). For DPIIT-recognized startups under Section 80-IAC, perquisite tax can be DEFERRED under Section 156 (Finance Act 2020) to earlier of sale / 5 years / employment cessation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is transfer pricing applicable to IT services exporting to a parent company abroad?</h3>
                        <div class="faq-expanded__a"><p>YES. IT services exporting to foreign parent / subsidiary / associate / sister concern triggers transfer pricing under Section 92E. NO threshold for international transactions - any amount triggers Form 3CEB by 31 October 2026; ITR by 30 November 2026. TP study with FAR analysis, method selection (TNMM most common for IT services - cost-plus markup typically 10-15 percent), benchmarking against comparable Indian IT services firms. Section 271AA penalty 2 percent of transaction value for documentation failure. Specified Domestic Transactions threshold Rs 20 crore aggregate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are software development services eligible for Section 44ADA presumptive?</h3>
                        <div class="faq-expanded__a"><p>GENERALLY NO. Section 44ADA presumptive at 50 percent of receipts is restricted to specified professions - legal, medical, engineering, architectural, accountancy, technical consultancy, interior decoration, OR notified profession. Software development is typically classified as BUSINESS not profession, so Section 44ADA does NOT apply. IT consultancy (advisory services) may qualify as technical consultancy under Section 44AA(1) notified professions and qualify for Section 44ADA. Fact-specific evaluation required. Eligibility limited to Resident Individual / Firm only (NOT LLP, NOT Company, NOT HUF). Threshold Rs 75 lakh (95 percent digital) / Rs 50 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the Schedule FSI in ITR for IT services exporters?</h3>
                        <div class="faq-expanded__a"><p>Schedule FSI (Foreign Source Income) is a section in ITR-3 / ITR-5 / ITR-6 disclosing income earned outside India taxable in India. Country-wise breakdown of foreign income, tax paid in source country, DTAA application. Mandatory disclosure for all assessees with foreign source income regardless of taxability. Companion schedules: Schedule FA (Foreign Assets - mandatory for ROR; Section 43 Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year; w.e.f. 1 October 2024 threshold relief for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh) and Schedule TR (Tax Relief - DTAA Section 90/90A or unilateral relief Section 91 with Form 67 foreign tax credit).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
            <p><strong>Q: Section 10AA SEZ sunset?</strong><br>A: 1 April 2021 for new units. Existing units that commenced on or before 31 March 2021 continue 15-year window.</p>
            <p><strong>Q: LUT for export of services?</strong><br>A: Form GST RFD-11; annual; zero-rated without IGST. Rule 96A CGST Rules.</p>
            <p><strong>Q: ITR form for IT firm?</strong><br>A: ITR-3 / ITR-4 sole prop; ITR-5 firm / LLP; ITR-6 company. Section 44ADA generally NOT for software dev.</p>
            <p><strong>Q: Computer depreciation?</strong><br>A: 40 percent WDV under Section 32. General plant 15 percent. Section 32(1)(iia) NOT for services.</p>
            <p><strong>Q: ESOP startup deferral?</strong><br>A: Section 156 (FA 2020) for Section 80-IAC startups - sale / 5 years / employment cessation, whichever earliest.</p>
            <p><strong>Q: Transfer pricing applicable?</strong><br>A: Section 92E for ANY international related party. SDT Rs 20 crore threshold. Form 3CEB by 31 October.</p>
            <p><strong>Q: Schedule FA non-disclosure?</strong><br>A: Section 43 Black Money Act 2015 - Rs 10 lakh per defaulting year. Threshold relief from 1 October 2024 for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh.</p>
            <p><strong>Q: Equalisation Levy?</strong><br>A: Both abolished. 2 percent EL on e-commerce abolished 1 August 2024 (Finance Act 2024); 6 percent EL on online advertisement abolished 1 April 2025 (Finance Act 2025). Last Form 1 was for FY 2024-25 due 30 June 2025.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Recap - 7 Firm Dates for IT Firms (AY 2026-27)</h2>
            <div class="content-text">
                
                
            <p>IT services and software firms face SEVEN firm dates plus rolling compliance for AY 2026-27 (FY 2025-26):</p>
            <ul>
                <li><strong>31 March 2026</strong> - LUT renewal Form GST RFD-11 for FY 2026-27 (BEFORE first export)</li>
                <li><strong>31 July 2026</strong> - non-audit ITR-3 / ITR-5 / ITR-6 under Section 139(1)</li>
                <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB; Form 56F SEZ audit alongside</li>
                <li><strong>31 October 2026</strong> - Transfer Pricing Form 3CEB under Section 92E; audit-case ITR for non-TP cases</li>
                <li><strong>30 November 2026</strong> - ITR-3 / ITR-5 / ITR-6 for transfer pricing cases</li>
                <li><strong>31 December 2026</strong> - belated / revised return Section 139(4) / (5) with Section 234F fee</li>
                <li><strong>Quarterly advance tax</strong> - 15 June, 15 September, 15 December, 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative)</li>
            </ul>
            <p style="margin-top:16px;">Rolling deadlines: Form 15CA / 15CB before each foreign vendor remittance with Section 195 TDS application; LUT Annexure-1 monthly export reconciliation; SEZ APR submission per Development Commissioner schedule. (Note: Equalisation Levy is closed for FY 2025-26 onwards - 2 percent EL abolished 1 August 2024; 6 percent EL on online ad abolished 1 April 2025.)</p>
            <p style="margin-top:16px;font-weight:700;color:var(--orange);">Section 10AA cannot be claimed under new tax regime - regime opt-out before due date Section 139(1) mandatory. Section 271AA TP penalty 2 percent of transaction value for documentation failure. ESOP Section 80-IAC deferral requires employee opt-in BEFORE exercise event.</p>
            <p style="margin-top:18px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your IT Firm ITR Filed by a CA Who Reads Your MSA</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p>IT services and software firm ITR is the area where DIY platforms and generalist accountants miss SEVEN industry-specific levers worth 10 to 40 percent of annual profit. LUT in Form GST RFD-11 must be filed annually BEFORE first export invoice of FY. Section 10AA SEZ deduction (sunset 1 April 2021 for new units) for existing pre-2021 SEZ IT firms requires mandatory Form 56F audit. Transfer pricing Section 92E + Form 3CEB by 31 October 2026 is mandatory for IT firms with international related party transactions.</p>
                <p>ESOP perquisite under Section 17(2)(vi) at exercise creates employee cash crunch - DPIIT-recognized Section 80-IAC startups can defer under Section 156. Schedule FSI / FA / TR foreign income disclosure with Section 43 of Black Money Act 2015 prescribing Rs 10 lakh penalty per defaulting year for FA non-disclosure (with w.e.f. 1 October 2024 threshold relief for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh). Section 32 computer and software depreciation 40 percent WDV (vs 15 percent general plant).</p>
                <p>Patron Accounting has filed IT and software sector ITRs for 320+ firms across Bengaluru, Hyderabad, Pune, Gurugram, Noida, Chennai, and Mumbai since 2019 - whether your structure is a sole proprietor freelance developer, a 4-partner consulting LLP, a Pvt Ltd captive subsidiary of US parent, a Pune SEZ IT unit, or a DPIIT-recognized startup issuing ESOPs, the correct answer always begins with entity-type confirmation, LUT eligibility audit, Section 10AA year position check, transfer pricing screening, and ESOP deferral structuring. Free 15-minute consultation - send your MSA, GSTR-3B summary, FIRC log, and SEZ LOA (if applicable) before you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%2015-minute%20Section%2010AA%20SEZ%2C%20LUT%2C%20transfer%20pricing%2C%20and%20ESOP%20deferral%20assessment%20for%20my%20IT%20services%20firm." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron Accounting Service Coverage</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">We file IT services and software firm ITRs across India with offices in Pune, Mumbai, Delhi, and Gurugram, and remote-delivery for Bengaluru, Hyderabad, Chennai, and Noida IT clusters.</p>
            
            
                <!-- Block 2: Cross-Sell - Adjacent IT and Tax Services (national-level) -->
                <div class="pa-cross-grid">
                    <a href="/itr-for-business" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M3 3h18v4H3z"/><path d="M21 7v14H3V7"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">ITR for Business</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/itr-for-companies" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">ITR for Companies</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/gst-registration" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">GST Registration</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/gst-refund" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2v20"/><path d="M5 12l7 7 7-7"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">GST Refund</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/tax-audit" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M21 21l-4.35-4.35"/><circle cx="11" cy="11" r="8"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Tax Audit (Section 44AB)</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/tax-planning-services" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Tax Planning Services</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">8 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed by CA &amp; CS Team, Patron Accounting LLP. Content reviewed quarterly during ITR season; immediately after Finance Act amendments to Section 10AA / Section 17(2)(vi) / transfer pricing safe harbour rules; review after CBDT and CBIC clarifications on IT-specific issues.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION — Update these values
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered — init Slick immediately
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
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
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
        return { valid: false, message: 'Enter a valid phone number (7–15 digits)' };
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


<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection