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
    <title>ITR for ESOP Employees: RSU + DTAA</title>
    <meta name="description" content="ITR-2 for Indian and foreign ESOPs. Perquisite at exercise, LTCG on sale, DTAA Form 67, Schedule FA. From Rs 4,999.">
    <link rel="canonical" href="/itr-for-esop-employees">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for ESOP Employees 2026: RSU + DTAA | Patron Accounting">
    <meta property="og:description" content="ITR-2 for Indian and foreign ESOPs. Perquisite at exercise, LTCG on sale, DTAA Form 67, Schedule FA. From Rs 4,999.">
    <meta property="og:url" content="/itr-for-esop-employees/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-esop-employees-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for ESOP Employees 2026: RSU + DTAA | Patron Accounting">
    <meta name="twitter:description" content="ITR-2 for Indian and foreign ESOPs. Perquisite at exercise, LTCG on sale, DTAA Form 67, Schedule FA. From Rs 4,999.">
    <meta name="twitter:image" content="/images/itr-for-esop-employees-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/itr-for-esop-employees#breadcrumb",
                "itemListElement": [
                    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
                    {"@type": "ListItem", "position": 2, "name": "Services", "item": "/services"},
                    {"@type": "ListItem", "position": 3, "name": "Income Tax Return", "item": "/income-tax-return"},
                    {"@type": "ListItem", "position": 4, "name": "ITR for ESOP Employees", "item": "/itr-for-esop-employees"}
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/itr-for-esop-employees#faq",
                "datePublished": "2026-05-08T08:00:00+05:30",
                "dateModified": "2026-05-08T08:00:00+05:30",
                "mainEntity": [
                    {"@type": "Question", "name": "When is ESOP taxed - at grant, vesting, exercise, or sale?", "acceptedAnswer": {"@type": "Answer", "text": "ESOP is not taxed at grant or vesting - vesting only means the option becomes exercisable. Tax triggers at exercise - the difference between FMV on exercise date and exercise price paid is treated as Section 17(2)(vi) perquisite, taxed as salary at slab. Employer deducts TDS under Section 192. Tax triggers again at sale - capital gain equals sale price minus FMV at exercise per Section 49(2AA). For RSUs, the perquisite trigger is at vesting since there is no exercise step."}},
                    {"@type": "Question", "name": "How is FMV at exercise determined for listed and unlisted ESOPs?", "acceptedAnswer": {"@type": "Answer", "text": "Per Rule 3(8) of the Income Tax Rules 1962. Listed Indian shares: FMV is the average of opening and closing price on a recognised stock exchange in India on the date of exercise. Unlisted Indian shares: FMV is determined by a SEBI-registered Category I merchant banker certificate, valid for 180 days from a specified date. Foreign listed shares typically use the foreign exchange opening or closing on vesting date."}},
                    {"@type": "Question", "name": "How are RSUs from US companies taxed in India?", "acceptedAnswer": {"@type": "Answer", "text": "Two-stage taxation. At vesting, full FMV of vested RSUs is treated as salary perquisite under Section 17(2)(vi) and added to Form 16 Part B; employer deducts Section 192 TDS, often via sell-to-cover. At sale, capital gain equals sale price minus FMV at vesting per Section 49(2AA). Holding period from vesting date - 24 months for LTCG under Section 112 at 12.5 percent without indexation, or slab STCG. Schedule FA disclosure mandatory on calendar year basis."}},
                    {"@type": "Question", "name": "Is Schedule FA mandatory for foreign ESOPs and RSUs?", "acceptedAnswer": {"@type": "Answer", "text": "Yes for ROR tax residents. NRIs and RNORs are exempt. Schedule FA reports foreign equity holdings on calendar year basis (1 January to 31 December preceding the AY) with peak balance, closing balance, dividends, and sale proceeds. ITR-1 and ITR-4 do not contain Schedule FA - using these forms with foreign equity triggers Section 139(9) defective return automatically. Black Money Act Section 43 imposes Rs 10 lakh per AY penalty for non-disclosure."}},
                    {"@type": "Question", "name": "What is the Section 80-IAC startup ESOP tax deferral?", "acceptedAnswer": {"@type": "Answer", "text": "Section 80-IAC permits employees of eligible startups to defer ESOP perquisite tax until the earliest of sale of shares, cessation of employment, or 5 years from end of FY of allotment. Eligibility requires the startup to be DPIIT-recognized AND holding an Inter-Ministerial Board (IMB) certificate under Section 80-IAC. DPIIT recognition alone is not sufficient. Mitigates the dry-tax problem at unlisted startup ESOP exercise."}},
                    {"@type": "Question", "name": "How to claim DTAA relief on foreign ESOP via Form 67?", "acceptedAnswer": {"@type": "Answer", "text": "Three steps. Compute India tax on the foreign capital gain or dividend. File Form 67 online on incometax.gov.in BEFORE ITR submission. Report Schedule FSI (foreign source income) and Schedule TR (tax relief claim) in ITR-2. FTC is the lower of foreign tax paid converted at Rule 115 TTBR, or India tax payable on same income. Late Form 67 results in FTC rejection regardless of underlying foreign tax actually paid."}},
                    {"@type": "Question", "name": "What is the holding period for ESOP capital gains - from grant or allotment?", "acceptedAnswer": {"@type": "Answer", "text": "From the date of allotment, not grant or exercise. Allotment is when the company actually allots the shares to your name (which can be days or weeks after exercise). Listed Indian shares - holding above 12 months qualifies as LTCG under Section 112A at 12.5 percent above Rs 1.25 lakh. Unlisted Indian or foreign shares - holding above 24 months qualifies as LTCG under Section 112 at 12.5 percent without indexation."}},
                    {"@type": "Question", "name": "How is the dry tax problem managed at exercise?", "acceptedAnswer": {"@type": "Answer", "text": "Dry tax is the cash flow problem at exercise where you owe Section 17(2)(vi) perquisite tax on a paper gain but have no cash because the shares are illiquid. Mitigation - Section 80-IAC deferral if startup is DPIIT-recognized AND IMB-certified (defers tax up to 5 years), sell-to-cover for listed shares where employer sells a portion to fund TDS, bank loans against ESOP value, timing exercise to align with liquidity events like IPO or buyback."}}
                ]
            },
            {
                "@type": "Service",
                "@id": "/itr-for-esop-employees#service",
                "name": "ITR Filing for ESOP and RSU Employees",
                "alternateName": ["ESOP ITR Filing", "RSU Tax Filing India", "Foreign ESOP ITR", "Tech Employee Equity Compensation Tax Return"],
                "url": "/itr-for-esop-employees",
                "description": "End-to-end ITR-2 filing for tech employees with Indian listed company ESOPs, unlisted Indian startup ESOPs, and foreign company RSUs (US, Singapore, UK, Canada, Australia). Includes Section 17(2)(vi) perquisite at exercise or vesting, Rule 3(8) FMV computation, Section 49(2AA) cost determination, Section 111A / 112A / 112 capital gains, Schedule FA foreign equity disclosure on calendar year basis, Form 67 DTAA Foreign Tax Credit, Section 80-IAC DPIIT-recognized startup deferral, Rule 115 TTBR currency conversion, and sell-to-cover notional capital gain reporting for AY 2026-27.",
                "serviceType": "Tax Return Filing",
                "category": "Direct Tax Compliance for Equity Compensation",
                "provider": {"@id": "/#organization"},
                "areaServed": [
                    {"@type": "Country", "name": "India"},
                    {"@type": "Country", "name": "United States"},
                    {"@type": "Country", "name": "Singapore"},
                    {"@type": "Country", "name": "United Kingdom"},
                    {"@type": "Country", "name": "Canada"},
                    {"@type": "Country", "name": "Australia"},
                    {"@type": "City", "name": "Pune"},
                    {"@type": "City", "name": "Mumbai"},
                    {"@type": "City", "name": "Delhi"},
                    {"@type": "City", "name": "Gurugram"},
                    {"@type": "City", "name": "Bengaluru"},
                    {"@type": "City", "name": "Hyderabad"},
                    {"@type": "City", "name": "Chennai"}
                ],
                "audience": {"@type": "Audience", "audienceType": "Tech employees with Indian listed company ESOPs (Infosys, TCS, Wipro), unlisted Indian startup ESOPs (Razorpay, Cred, Zerodha pre-IPO), foreign company RSUs and ESOPs (Google, Amazon, Meta, Microsoft, Adobe, Atlassian, Salesforce), ESPP participants at US MNC Indian subsidiaries, sweat equity holders, Section 80-IAC eligible startup employees, returning NRIs with foreign equity portfolios, HNI tech employees with significant ESOP exits"},
                "about": [
                    {"@type": "Thing", "name": "Employee Stock Ownership Plan", "sameAs": "https://en.wikipedia.org/wiki/Employee_stock_ownership_plan"},
                    {"@type": "Thing", "name": "Restricted Stock Unit", "sameAs": "https://en.wikipedia.org/wiki/Restricted_stock"},
                    {"@type": "Thing", "name": "Income Tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"}
                ],
                "termsOfService": "/terms",
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "ESOP and RSU ITR Filing Plans",
                    "itemListElement": [
                        {"@type": "Offer", "name": "ITR-2 Indian Listed ESOP", "price": "4999", "priceCurrency": "INR", "url": "/itr-for-esop-employees", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "ITR-2 Unlisted Indian Startup ESOP with Sec 80-IAC", "price": "6499", "priceCurrency": "INR", "url": "/itr-for-esop-employees", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "ITR-2 with US RSU Schedule FA + Form 67", "price": "7499", "priceCurrency": "INR", "url": "/itr-for-esop-employees", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "ITR-2 Multi-Employer ESOP / RSU History", "price": "9999", "priceCurrency": "INR", "url": "/itr-for-esop-employees", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Schedule FA Past 4 Years Revised Filing + FAST-DS 2026", "price": "12999", "priceCurrency": "INR", "url": "/itr-for-esop-employees", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "HNI Multi-Asset ITR-2 with ESOP + Capital Gains", "price": "14999", "priceCurrency": "INR", "url": "/itr-for-esop-employees", "availability": "https://schema.org/InStock"}
                    ]
                },
                "mainEntityOfPage": "/itr-for-esop-employees"
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
        /* Amount column  -  right-align only on tables with .table-amount class */
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
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
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

        /* Process Evidence Screenshot  -  Plan 3.2 */
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
                        ESOP and RSU ITR Filing for Tech Employees
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 8 May 2026</span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form 16 Part B with ESOP / RSU perquisite, grant letter, vesting schedule, broker statements (E-Trade, Fidelity, Schwab), merchant banker FMV (unlisted)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 4,999 for ESOP perquisite + capital gains; Rs 7,499 for foreign RSU with Schedule FA + Form 67</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Tech employees with ESOPs, RSUs, ESPPs, sweat equity, or stock appreciation rights from Indian listed (Infosys, TCS, Wipro), unlisted startup (Razorpay, Cred, Zerodha), or foreign companies (Google, Amazon, Meta, Microsoft, Adobe, Atlassian)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 14 working days. Due 31 July 2026 for AY 2026-27 (FY 2025-26 income). Form 67 BEFORE ITR for any FTC claim</p>
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
                        <a href="https://wa.me/919459456700?text=Hi Patron Accounting, I would like a 15-minute free ESOP / RSU ITR review. I will share Form 16 Part B and broker statements." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for ESOP Employees'/>
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
                                
                                    <option value="ITR for ESOP Employees" selected>ITR for ESOP Employees</option>
                                    <option value="Income Tax Return">Income Tax Return</option>
                                    <option value="ITR for Salaries">ITR for Salaries</option>
                                    <option value="ITR for Capital Gains">ITR for Capital Gains</option>
                                    <option value="ESOP Management and Compliance">ESOP Management and Compliance</option>
                                    <option value="Tax Planning Services">Tax Planning Services</option>
                                    <option value="Income Tax Notice">Income Tax Notice</option>
                                    <option value="Defective Return Notice">Defective Return Notice</option>
                                    <option value="Other">Other</option>

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
        
<div class="testimonial-card">
  <div class="testimonial-stars">★★★★★</div>
  <p class="testimonial-quote">"4 years of Google RSU vests, monthly sell-to-cover for TDS, multi-broker history (E-Trade and Charles Schwab), and I had never filed Schedule FA correctly. Patron rebuilt my entire RSU ledger, computed sell-to-cover notional gains, filed revised ITRs, and used FAST-DS 2026 Category B for older years. Total exposure reduced from Rs 40 lakh theoretical Black Money Act penalty to Rs 1.4 lakh actual closure cost."</p>
  <div class="testimonial-author"><strong>Sneha M</strong><br><span>Senior Software Engineer, Google India, Bengaluru</span></div>
</div>
<div class="testimonial-card">
  <div class="testimonial-stars">★★★★★</div>
  <p class="testimonial-quote">"I was about to exercise 2,500 ESOPs at Rs 100 with merchant banker FMV of Rs 1,200. Pre-Patron, my CA quoted me Rs 8.6 lakh dry tax exposure. Patron validated my startup&apos;s Sec 80-IAC IMB certificate, applied the 5-year deferral correctly, and pushed perquisite tax to whichever comes first - sale, exit, or FY 2030-31. Cash flow preserved entirely."</p>
  <div class="testimonial-author"><strong>Aditya R</strong><br><span>Senior Product Manager, Bengaluru DPIIT-recognized fintech</span></div>
</div>
<div class="testimonial-card">
  <div class="testimonial-stars">★★★★★</div>
  <p class="testimonial-quote">"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing."</p>
  <div class="testimonial-author"><strong>Nishikant Gurav</strong><br><span>Google Review</span></div>
</div>
<div class="testimonial-card">
  <div class="testimonial-stars">★★★★★</div>
  <p class="testimonial-quote">"Took minimum time, really impressive acumen. And it&apos;s not expensive at all."</p>
  <div class="testimonial-author"><strong>Rajib Dutta</strong><br><span>Google Review</span></div>
</div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Free 15-minute ESOP review with a CA. Send Form 16 Part B, grant letter, vesting schedule, and broker statement - we tell you the exact tax position before you pay anything. Tech employees served across IST, EST, GMT, GST timezones.</p>
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
            
<a href="#overview" class="toc-link">Overview</a>
<a href="#what-is" class="toc-link">What Is</a>
<a href="#who" class="toc-link">Who Files</a>
<a href="#services" class="toc-link">Our Services</a>
<a href="#process" class="toc-link">Process</a>
<a href="#documents" class="toc-link">Documents</a>
<a href="#challenges" class="toc-link">Challenges</a>
<a href="#fees" class="toc-link">Fees</a>
<a href="#timeline" class="toc-link">Timeline</a>
<a href="#benefits" class="toc-link">Benefits</a>
<a href="#comparison" class="toc-link">Compared</a>
<a href="#faq" class="toc-link">FAQ</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP and RSU ITR Overview - Two-Stage Tax for Tech Employees</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for ESOP Employees Services at a Glance</strong></p>
                    <p><p style="font-size:1rem; line-height:1.85; color:var(--gray-700); margin:0 0 1.5rem;"><strong>TL;DR -</strong> ESOP and RSU income is taxed in two stages: (1) Section 17(2)(vi) salary perquisite at exercise (ESOP) or vesting (RSU) - taxed at slab via Section 192 employer TDS; (2) capital gains on sale - Section 111A 20% STCG / Section 112A 12.5% LTCG above Rs 1.25 lakh for listed Indian, or Section 112 12.5% for unlisted / foreign. ITR-2 mandatory. Schedule FA on calendar year basis for foreign equity. Form 67 BEFORE ITR for DTAA FTC. Section 80-IAC defers tax for DPIIT-recognized startup ESOPs. Due 31 July 2026. Starting Rs 4,999.</p><div class="table-responsive"><table class="table"><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td><strong>Governing Acts</strong></td><td>Income-tax Act 1961, Income Tax Rules 1962 (Rule 3(8), 115, 128), Black Money Act 2015, applicable DTAA (India-USA, India-Singapore, India-UK, India-Canada)</td></tr><tr><td><strong>Applicable To</strong></td><td>Tech employees with Indian listed ESOPs (Infosys, TCS, Wipro), unlisted startup ESOPs (Razorpay, Cred, Zerodha), foreign RSUs (Google, Amazon, Meta, Microsoft), ESPPs, sweat equity</td></tr><tr><td><strong>ITR Form</strong></td><td>ITR-2 mandatory; ITR-3 only if separate business income; ITR-1 / ITR-4 NOT allowed (auto-defective under Sec 139(9) if foreign assets held)</td></tr><tr><td><strong>Statutory Deadline</strong></td><td>31 July 2026 (non-audit ITR-2), 31 December 2026 (belated). Form 67 BEFORE ITR for FTC</td></tr><tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Starting Rs 4,999 (Exl GST and Govt. Charges) - variable by ESOP type, employer count, foreign equity, and Schedule FA history</td></tr><tr><td><strong>Penalty</strong></td><td>Sec 234F up to Rs 5,000; Sec 270A 50% / 200%; Black Money Act Sec 43 Rs 10 lakh per AY for missed Schedule FA (Rs 20 lakh exemption from 1 Oct 2024 for movable assets)</td></tr><tr><td><strong>Authority</strong></td><td>CBDT, Income Tax Department, RBI (FEMA), DPIIT (startup recognition), IMB (Sec 80-IAC certificate)</td></tr></tbody></table></div></p>
                </div>
                <p>Tech employee ESOP and RSU taxation is the area where Form 16 looks deceptively simple but the actual tax position requires reconciling three different statutes - the Income Tax Act 1961, the Black Money Act 2015, and the applicable DTAA - plus Rule 3(8) FMV computation and Rule 115 currency conversion. Indian listed company ESOPs (Infosys, TCS, Wipro) follow the cleanest path - perquisite at exercise via Form 16, then Section 111A or 112A on sale through your demat account.</p>
                <p>Indian unlisted startup ESOPs (Razorpay, Cred, Zerodha pre-IPO) trigger merchant banker FMV at exercise creating a dry-tax problem because shares are illiquid; Section 80-IAC DPIIT-recognized startups offer up to 5-year deferral. Foreign company RSUs (Google, Amazon, Meta, Microsoft, Adobe, Atlassian) compound complexity - perquisite at vesting via Form 16, Schedule FA disclosure on calendar year basis (Jan to Dec), Form 67 for India-USA or India-Singapore DTAA Foreign Tax Credit, and capital gains on sale with TTBR currency conversion under Rule 115. Patron Accounting has filed ESOP and RSU ITRs for tech employees at over 200 Indian and foreign-parent companies since 2019.</p>
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
                <h2 class="section-title">What is ESOP and RSU ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP and RSU ITR filing means computing two-stage tax on equity compensation - <strong>Section 17(2)(vi) salary perquisite at exercise (ESOP) or vesting (RSU) plus capital gains on subsequent sale</strong> - and reporting it in ITR-2 with Schedule CG, Schedule FA (foreign equity), Schedule FSI / TR (foreign income), and Form 67 (DTAA Foreign Tax Credit) where applicable.</p><p>Equity compensation is taxed twice in India - first as perquisite when the employee acquires the shares (exercise for ESOPs, vesting for RSUs), and again as capital gains when the shares are sold. The perquisite is the difference between fair market value (FMV) on the relevant date and the exercise price paid (zero for RSUs). It is added to salary income and taxed at slab rates with employer-deducted TDS under Section 192. The FMV becomes the cost of acquisition under Section 49(2AA) for the second-stage capital gain, which is taxed as STCG at slab rate (or 20 percent for listed Indian shares under Section 111A) or LTCG at 12.5 percent (with Rs 1.25 lakh exemption under Section 112A for listed Indian shares). Foreign company equity adds Schedule FA disclosure, DTAA Form 67 for FTC, and TTBR currency conversion under Rule 115.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for ESOP Employees:</strong></p>
                    <dl class="key-terms-list"><dt>ESOP - Employee Stock Option Plan</dt><dd>Right granted to an employee to purchase company shares at a fixed exercise price after a vesting period. Common at Indian listed companies and unlisted startups. Tax trigger at EXERCISE.</dd><dt>RSU - Restricted Stock Unit</dt><dd>Promise to deliver shares at no exercise cost after vesting. Common at US tech companies (Google, Amazon, Meta, Microsoft) granting to India-based employees. Tax trigger at VESTING (no exercise step).</dd><dt>ESPP - Employee Stock Purchase Plan</dt><dd>Lets employees buy shares at a discount via salary deductions. Discount is treated as perquisite under Section 17(2)(vi). Common at US MNC Indian subsidiaries.</dd><dt>Section 17(2)(vi) - Perquisite Provision</dt><dd>Defines perquisite to include the value of any specified security or sweat equity shares allotted free or at concessional rate by employer. Triggered at exercise (ESOP) or vesting (RSU). Taxed as salary at slab.</dd><dt>Rule 3(8) - FMV Computation</dt><dd>Listed shares: average of opening price and closing price on a recognised stock exchange in India on the date of exercise. Unlisted shares: FMV per a SEBI-registered Category I merchant banker certificate (validity 180 days from exercise date).</dd><dt>Section 49(2AA) - Cost of Acquisition for CG</dt><dd>For shares acquired through ESOP / RSU, the cost of acquisition for subsequent capital gains computation is the FMV on the date of exercise (or vesting for RSUs), as that FMV was already taxed as perquisite. Prevents double taxation.</dd><dt>Section 80-IAC - Eligible Startup Deferral</dt><dd>For employees of DPIIT-recognized startups with Inter-Ministerial Board (IMB) certificate under Section 80-IAC, perquisite tax is deferred until earlier of: (a) sale of shares, (b) cessation of employment, (c) 5 years from the end of the FY in which shares were allotted.</dd><dt>Schedule FA - Foreign Assets</dt><dd>Mandatory disclosure schedule in ITR-2 / ITR-3 for ROR taxpayers holding foreign assets - including foreign company RSU / ESOP shares, foreign brokerage accounts (E-Trade, Fidelity, Schwab), and foreign dividend income. Calendar year basis (Jan to Dec preceding AY). NRI / RNOR exempt.</dd><dt>Form 67 - Foreign Tax Credit Claim</dt><dd>Online form filed BEFORE ITR to claim FTC under Rule 128 for foreign tax paid (e.g., US capital gains tax on RSU sale). FTC = lower of foreign tax paid or India tax payable on same income. Late Form 67 = FTC rejection.</dd><dt>Sell-to-Cover and Dry Tax</dt><dd>Sell-to-Cover: employer mechanism where a portion of vested shares is automatically sold on the vesting date to fund the TDS on the perquisite. Dry Tax: cash flow problem at exercise where the employee owes Section 17(2)(vi) perquisite tax on a paper gain but has no actual cash inflow because the shares are illiquid (especially unlisted startup ESOPs). Section 80-IAC deferral is the primary mitigation.</dd></dl>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for ESOP Employees</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Sec 17(2)(vi)</span>
                        <strong>Two-Stage Tax</strong>
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
            <h2 class="section-title">Who Must File</h2>
            <div class="content-text">
                
                <p>Every tech employee with ESOPs, RSUs, ESPPs, or sweat equity must file an ITR. Form depends on residency and whether foreign equity is held. ITR-1 and ITR-4 do NOT contain Schedule FA - using these forms despite foreign equity holdings triggers Section 139(9) defective return automatically.</p><ul><li><strong>Indian listed ESOP holder (Infosys, TCS, Wipro, etc.)</strong> - ITR-2 with Schedule CG, Schedule 112A line-item</li><li><strong>Indian unlisted startup ESOP holder (Razorpay, Cred, Zerodha)</strong> - ITR-2 with merchant banker FMV; Section 80-IAC deferral if startup is DPIIT + IMB certified</li><li><strong>Foreign company RSU holder (Google, Amazon, Meta, Microsoft, Adobe, Atlassian)</strong> - ITR-2 with Schedule FA, Schedule FSI, Schedule TR, Form 67 for FTC</li><li><strong>ESPP participant at US MNC Indian subsidiary</strong> - ITR-2 with Section 17(2)(vi) discount perquisite</li><li><strong>Sweat equity recipient</strong> - ITR-2; same Section 17(2)(vi) treatment</li><li><strong>Returning NRI with foreign ESOP / RSU portfolio</strong> - ITR-2; Section 6 residency assessment, RNOR window optimization, Schedule FA inception year tracking</li></ul><h4>Statutory Deadlines for AY 2026-27</h4><ul><li><strong>31 July 2026</strong> - Non-audit ITR-2 under Section 139(1)</li><li><strong>31 October 2026</strong> - Audit-case ITR-3 (rare for salaried tech employees unless side-business)</li><li><strong>31 December 2026</strong> - Belated / revised return Section 139(4) / (5) with Section 234F fee</li><li><strong>Form 67</strong> - BEFORE ITR submission for any FTC claim. No grace period - late Form 67 = FTC rejection</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP and RSU ITR Services at Patron</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Indian Listed ESOP ITR-2 Filing</strong></td><td>Form 16 Part B perquisite extraction. Section 111A 20 percent STCG and Section 112A 12.5 percent LTCG above Rs 1.25 lakh on sale through demat. Rule 3(8) average open-close price validation. Section 49(2AA) FMV-as-cost computation. Schedule 112A line-item population.</td></tr>
<tr><td><strong>Unlisted Startup ESOP with Section 80-IAC Deferral</strong></td><td>DPIIT recognition + IMB Section 80-IAC certificate validation for eligible startup status. Perquisite tax deferral until earlier of sale, cessation, or 5 years from end of allotment year. Merchant banker FMV certificate review (180-day validity per Rule 3(8)). Dry tax mitigation strategy. Section 112 LTCG computation on secondary sale.</td></tr>
<tr><td><strong>US RSU ITR-2 (Google, Amazon, Meta, Microsoft, Adobe, Atlassian)</strong></td><td>Form 16 Part B perquisite at vesting reconciliation against E-Trade / Fidelity / Schwab statements. Sell-to-cover treatment with notional capital gain reporting. Section 49(2AA) FMV at vesting as cost. Schedule FA Jan-Dec calendar year disclosure. Form 67 DTAA FTC for any US capital gains tax. Rule 115 TTBR currency conversion.</td></tr>
<tr><td><strong>Foreign ESOP with DTAA Form 67</strong></td><td>India-USA, India-Singapore, India-UK, India-Canada DTAA application. Form 67 filing BEFORE ITR. FTC computation (lower of foreign tax paid or India tax payable). Schedule FSI for foreign source income. Schedule TR for tax relief claim. TRC and W-8BEN coordination.</td></tr>
<tr><td><strong>Schedule FA Reporting and Black Money Act Compliance</strong></td><td>Granular reporting of foreign brokerage accounts, RSU / ESOP holdings, peak balance, closing balance as on 31 December, dividends, capital gains. Black Money Act Section 43 Rs 10 lakh per AY non-disclosure penalty avoidance (Rs 20 lakh exemption from 1 October 2024 for movable assets).</td></tr>
<tr><td><strong>Returning NRI ESOP Transition Planning</strong></td><td>For tech employees moving back to India after US / Singapore tenure: residency status assessment under Section 6, RNOR window optimization, foreign ESOP Schedule FA inception year, NRO / NRE / RFC account planning for sale proceeds, Section 197 lower TDS certificate where applicable.</td></tr>


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
            <h2 class="section-title">How Patron Files Your ESOP / RSU ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Seven-step CA-led pipeline from grant inventory through e-verification - built for tech employees with Indian or foreign equity</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
  <div class="step-content">
    <div class="step-number-wrap"><span class="step-number-large">01</span></div>
    <h3>Equity Compensation Inventory</h3>
    <p>We collect grant letters, vesting schedules, exercise confirmations, and merchant banker FMV certificates (unlisted) or exchange close prices (listed). Identify every grant across employers if you have switched companies. Map each grant to allotment date, exercise / vesting date, FMV at exercise, exercise price, and sale date.</p>
  </div>
  <div class="step-visual">
    <div class="step-visual-inner">
      <svg viewBox="0 0 100 100" width="100" height="100" fill="none" stroke="#0a3d62" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="20" y="15" width="60" height="75" rx="4" fill="#dbeafe"/><line x1="30" y1="32" x2="70" y2="32"/><line x1="30" y1="44" x2="70" y2="44"/><line x1="30" y1="56" x2="55" y2="56"/><circle cx="68" cy="68" r="9" fill="#fef3c7" stroke="#0a3d62"/><text x="68" y="72" font-size="9" font-weight="bold" stroke="none" fill="#0a3d62" text-anchor="middle">RSU</text></svg>
      <div class="step-visual-label">Grant Ledger</div>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <div class="step-number-wrap"><span class="step-number-large">02</span></div>
    <h3>Form 16 Part B Perquisite Reconciliation</h3>
    <p>Extract Section 17(2)(vi) perquisite line item from Form 16 Part B. Cross-check against the (FMV minus exercise price) computation. Validate Section 192 TDS deducted by employer. For DPIIT-recognized startups, validate Section 80-IAC deferral status and confirm perquisite is NOT yet in Form 16.</p>
  </div>
  <div class="step-visual">
    <div class="step-visual-inner">
      <svg viewBox="0 0 100 100" width="100" height="100" fill="none" stroke="#0a3d62" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="20" y="15" width="60" height="75" rx="4"/><text x="50" y="32" font-size="11" font-weight="bold" stroke="none" fill="#0a3d62" text-anchor="middle">Form 16</text><line x1="28" y1="42" x2="72" y2="42"/><text x="50" y="56" font-size="9" font-weight="bold" stroke="none" fill="#1e3a8a" text-anchor="middle">Part B</text><text x="50" y="68" font-size="8" stroke="none" fill="#0a3d62" text-anchor="middle">17(2)(vi)</text><circle cx="72" cy="78" r="7" fill="#10b981" stroke="none"/><path d="M68 78l3 3 5-5" stroke="white" stroke-width="2"/></svg>
      <div class="step-visual-label">Sec 17(2)(vi)</div>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <div class="step-number-wrap"><span class="step-number-large">03</span></div>
    <h3>Capital Gains Computation</h3>
    <p>For sold shares, compute capital gain = sale price minus FMV at exercise (Section 49(2AA) cost). Apply holding period from date of allotment - 12 months for listed Indian shares, 24 months for unlisted Indian or foreign shares. Section 111A (20%) or 112A (12.5% above Rs 1.25 lakh) for listed Indian; slab STCG or Section 112 12.5% LTCG without indexation for unlisted / foreign.</p>
  </div>
  <div class="step-visual">
    <div class="step-visual-inner">
      <svg viewBox="0 0 100 100" width="100" height="100" fill="none" stroke="#0a3d62" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 75 L30 60 L45 65 L60 45 L75 35 L90 25" stroke="#10b981" stroke-width="3" fill="none"/><circle cx="30" cy="60" r="3" fill="#10b981" stroke="none"/><circle cx="60" cy="45" r="3" fill="#10b981" stroke="none"/><circle cx="90" cy="25" r="3" fill="#10b981" stroke="none"/><line x1="10" y1="85" x2="92" y2="85"/><line x1="10" y1="85" x2="10" y2="15"/><text x="50" y="98" font-size="9" font-weight="bold" stroke="none" fill="#0a3d62" text-anchor="middle">LTCG 12.5%</text></svg>
      <div class="step-visual-label">111A / 112A / 112</div>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <div class="step-number-wrap"><span class="step-number-large">04</span></div>
    <h3>Foreign Equity Schedule FA Population</h3>
    <p>For foreign company RSUs / ESOPs (US, Singapore, UK), report each holding on calendar year basis (Jan to Dec preceding AY). Include peak balance during the year, closing balance as on 31 December, dividends received, sale proceeds. Convert all amounts to INR using Rule 115 TTBR (last day of preceding month). NRI / RNOR exempt from Schedule FA.</p>
  </div>
  <div class="step-visual">
    <div class="step-visual-inner">
      <svg viewBox="0 0 100 100" width="100" height="100" fill="none" stroke="#0a3d62" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="50" cy="48" r="28" fill="#dbeafe"/><path d="M50 20 Q70 35 50 76 Q30 35 50 20" stroke="#0a3d62" fill="none"/><line x1="22" y1="48" x2="78" y2="48" stroke="#0a3d62"/><text x="50" y="92" font-size="9" font-weight="bold" stroke="none" fill="#0a3d62" text-anchor="middle">Schedule FA</text></svg>
      <div class="step-visual-label">Schedule FA</div>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <div class="step-number-wrap"><span class="step-number-large">05</span></div>
    <h3>DTAA Form 67 Filing for Foreign Tax Credit</h3>
    <p>For US RSUs sold with US capital gains tax withheld, identify India-USA DTAA Article 13. Compute FTC = lower of (US tax paid converted at TTBR) or (India tax payable on same income). File Form 67 ONLINE on incometax.gov.in BEFORE ITR submission. Late Form 67 = FTC rejection. Similar process for India-Singapore, India-UK, India-Canada DTAAs.</p>
  </div>
  <div class="step-visual">
    <div class="step-visual-inner">
      <svg viewBox="0 0 100 100" width="100" height="100" fill="none" stroke="#0a3d62" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="20" y="15" width="60" height="65" rx="4" fill="#fef3c7"/><text x="50" y="36" font-size="13" font-weight="bold" stroke="none" fill="#0a3d62" text-anchor="middle">Form 67</text><line x1="28" y1="44" x2="72" y2="44"/><text x="50" y="58" font-size="9" font-weight="bold" stroke="none" fill="#92400e" text-anchor="middle">DTAA FTC</text><text x="50" y="72" font-size="8" stroke="none" fill="#0a3d62" text-anchor="middle">BEFORE ITR</text><circle cx="76" cy="22" r="9" fill="#dc2626" stroke="none"/><text x="76" y="25" font-size="9" font-weight="bold" stroke="none" fill="white" text-anchor="middle">!</text></svg>
      <div class="step-visual-label">Form 67 First</div>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <div class="step-number-wrap"><span class="step-number-large">06</span></div>
    <h3>Tax Computation and Regime Selection</h3>
    <p>Apply correct slab. Compare old regime (with Chapter VI-A deductions) vs new regime under Section 115BAC. Note - Section 87A rebate NOT available against Section 112A LTCG. Surcharge cap of 15 percent on Section 111A / 112A / 112 capital gains. Compute advance tax exposure and Section 234B / 234C interest.</p>
  </div>
  <div class="step-visual">
    <div class="step-visual-inner">
      <svg viewBox="0 0 100 100" width="100" height="100" fill="none" stroke="#0a3d62" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="10" y="35" width="35" height="40" rx="3" fill="#dcfce7"/><rect x="55" y="35" width="35" height="40" rx="3" fill="#dbeafe"/><text x="27" y="52" font-size="9" font-weight="bold" stroke="none" fill="#065f46" text-anchor="middle">OLD</text><text x="27" y="65" font-size="8" stroke="none" fill="#065f46" text-anchor="middle">80C+</text><text x="72" y="52" font-size="9" font-weight="bold" stroke="none" fill="#1e3a8a" text-anchor="middle">NEW</text><text x="72" y="65" font-size="8" stroke="none" fill="#1e3a8a" text-anchor="middle">115BAC</text></svg>
      <div class="step-visual-label">Old vs New</div>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <div class="step-number-wrap"><span class="step-number-large">07</span></div>
    <h3>ITR-2 E-Filing and Verification</h3>
    <p>File ITR-2 on incometax.gov.in. Schedule CG (capital gains), Schedule 112A line-item (listed Indian equity LTCG), Schedule FA (foreign assets), Schedule FSI (foreign source income), Schedule TR (tax relief), Schedule SI (special rates), Schedule TDS. E-verify within 30 days. Track refund. Respond to Section 143(1) intimation or Section 139(9) defective return within timeline.</p>
  </div>
  <div class="step-visual">
    <div class="step-visual-inner">
      <svg viewBox="0 0 100 100" width="100" height="100" fill="none" stroke="#0a3d62" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="20" y="20" width="60" height="60" rx="4" fill="#dcfce7"/><path d="M30 50l12 12 28-28" stroke="#10b981" stroke-width="4"/><text x="50" y="92" font-size="9" font-weight="bold" stroke="none" fill="#0a3d62" text-anchor="middle">ITR-V</text></svg>
      <div class="step-visual-label">ITR-V Received</div>
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
            <h2 class="section-title">Document Checklist for ESOP / RSU ITR</h2>
            <div class="content-text">
                
                <p>ESOP and RSU ITR documents fall into six categories - identity, salary, grant, sale, foreign equity, and capital gains reference.</p><h4>A. Identity</h4><ul><li>PAN card and Aadhaar (linked - mandatory)</li><li>Bank account details for refund (Indian bank for residents; NRE / NRO for NRIs)</li><li>Passport and visa copy if foreign company employee or returning NRI</li></ul><h4>B. Salary and Perquisite</h4><ul><li>Form 16 Part A and Part B (perquisite line item must show ESOP / RSU value)</li><li>Form 12BA (perquisite breakdown)</li><li>Salary slips for FY 2025-26 to validate sell-to-cover treatment</li></ul><h4>C. ESOP / RSU Grant Documents</h4><ul><li>Grant letter - grant date, exercise price (if any), number of options, vesting schedule</li><li>Vesting confirmations - vesting date, number of shares vested, FMV at vesting</li><li>Exercise confirmations (ESOP) - exercise date, exercise price paid, shares allotted</li><li>For unlisted ESOP - SEBI Category I merchant banker FMV certificate (within 180 days of exercise date)</li><li>For Section 80-IAC startup - DPIIT recognition certificate AND IMB certificate under Section 80-IAC</li></ul><h4>D. Sale Documents</h4><ul><li>Indian listed - broker contract notes, ledger from Zerodha / Groww / ICICI Direct</li><li>Indian unlisted - share transfer agreement, secondary market sale documents</li><li>US shares - E-Trade / Fidelity / Schwab consolidated 1099 (Year-end statement), broker statements</li><li>Sell-to-cover detail - shares sold by employer at vesting for TDS</li></ul><h4>E. Foreign Equity (US / Singapore / UK)</h4><ul><li>Foreign brokerage statements for full calendar year (Jan to Dec)</li><li>Form W-8BEN copy (US) - for 25 percent dividend withholding instead of 30 percent</li><li>US tax withholding statements (Form 1042-S, Form 1099-DIV, Form 1099-B)</li><li>Foreign country tax return copy (if filed) - Form 1040 (US), SA100 (UK), etc.</li><li>Tax Residency Certificate (TRC) of India for DTAA claim</li></ul><h4>F. Capital Gains Reference</h4><ul><li>Form 26AS, AIS, TIS download from incometax.gov.in</li><li>Brought forward loss return acknowledgement (for Section 74 set-off)</li><li>For pre-2018 Indian listed equity - 31 January 2018 NSE / BSE adjusted close prices for Section 112A grandfathering</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Tech Employee Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Microsoft RSU Sell-to-Cover - Two Reportings</strong></td><td>Microsoft India RSUs vest in November 2025; company sells a portion via sell-to-cover for TDS. Form 16 shows full perquisite. Patron's solution - report the FULL perquisite as salary income (already taxed via Sec 192 TDS) AND report the sell-to-cover sale as notional capital gain or loss in Schedule CG. Schedule FA must report the NET retained shares on 31 December 2025, NOT the sold-to-cover portion.</td></tr>
<tr><td><strong>Bengaluru Startup Dry Tax on 1,000 ESOPs</strong></td><td>Exercise 1,000 ESOPs at Rs 50 with merchant banker FMV of Rs 800 = Rs 7.5 lakh perquisite. Shares are unlisted and illiquid. Patron's solution - validate DPIIT recognition AND Inter-Ministerial Board (IMB) certificate under Section 80-IAC (separate certificates - many founders confuse the two). Defer perquisite tax until earlier of sale, exit, or 5 years from end of allotment FY. Cash flow preserved.</td></tr>
<tr><td><strong>Pune Google Office - US Capital Gains Tax Withheld</strong></td><td>Sold 200 vested Google shares in March 2026; US withheld capital gains tax. Not a refund - a CREDIT. India-USA DTAA Article 13 gives India primary taxing rights. Patron's solution - obtain TRC of India, compute India tax (Sec 112 12.5% without indexation since Google is foreign listed), file Form 67 BEFORE ITR with FTC = lower of (US tax converted at Rule 115 TTBR) or (India tax payable on same income). File ITR-2 with Schedule FSI and Schedule TR.</td></tr>
<tr><td><strong>4 Years of Google RSU Without Schedule FA</strong></td><td>Joined Google India 2018; 4 years of RSU vests and sales; never filed Schedule FA. Black Money Act Sec 43 imposes Rs 10 lakh per AY penalty. Theoretical exposure Rs 40 lakh. Patron's solution - assess Rs 20 lakh exemption (1 October 2024 movable assets), file revised returns within Sec 139(5) windows where possible, use FAST-DS 2026 Category B amnesty (one-time Rs 1 lakh flat fee for technical reporting lapses where underlying perquisite tax was already paid via Form 16). Most cases close at well under Rs 5 lakh combined cost.</td></tr>


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
            <h2 class="section-title">Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Patron Accounting Professional Fees</strong></td><td class="table-amount">Starting from <strong>INR 4,999</strong> (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-2 Indian listed ESOP (Infosys, TCS, Wipro)</td><td class="table-amount">Rs 4,999 - Form 16 reconciliation, Sec 111A / 112A computation, Schedule 112A line-item, e-verification</td></tr>
<tr><td>ITR-2 unlisted Indian startup ESOP</td><td class="table-amount">Rs 6,499 - Merchant banker FMV validation, Sec 80-IAC deferral assessment, Sec 112 computation</td></tr>
<tr><td>ITR-2 with US RSU (Google, Amazon, Meta, Microsoft, Adobe, Atlassian)</td><td class="table-amount">Rs 7,499 - Sell-to-cover reconciliation, Schedule FA Jan-Dec, Form 67 DTAA FTC, Rule 115 TTBR</td></tr>
<tr><td>ITR-2 multi-employer ESOP / RSU history</td><td class="table-amount">Rs 9,999 - Cross-employer ledger, multi-grant tracking, multi-jurisdiction DTAA</td></tr>
<tr><td>ITR-2 with Schedule FA past 4 years (revised filing + FAST-DS 2026)</td><td class="table-amount">Rs 12,999 - FAST-DS Category B amnesty, revised ITRs for eligible years, Black Money Act memo</td></tr>
<tr><td>HNI multi-asset ITR-2 with ESOP + capital gains</td><td class="table-amount">Rs 14,999 - Full HNI portfolio (ESOP + equity + MF + property + crypto), Sec 54 / 54F / 54EC reinvestment planning</td></tr>
<tr><td>Returning NRI with foreign ESOP / RSU portfolio</td><td class="table-amount">Rs 9,999 - Sec 6 residency memo, RNOR window optimization, Schedule FA inception, Form 67 multi-year FTC</td></tr>
<tr><td>Section 139(9) defective return cure</td><td class="table-amount">Rs 3,999 - Re-file with correct Schedule FA within 15-day cure window</td></tr>
<tr><td>Add-On - Section 80-IAC deferral assessment + IMB certificate validation</td><td class="table-amount">Rs 4,500 (one-time, before exercise event)</td></tr>
<tr><td>Add-On - Form 67 multi-jurisdiction (US + Singapore + UK)</td><td class="table-amount">Rs 3,500 per additional country</td></tr>
<tr><td colspan="2" class="fee-disclaimer">All fees exclusive of GST and government charges. Foreign payments accepted via wire transfer or Wise; Indian payments via NEFT / UPI. Multi-year backlog discounts available.</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for ESOP Employees consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi Patron Accounting, I would like a 15-minute free ESOP / RSU ITR review. I will share Form 16 Part B and broker statements." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Indian listed ESOP single-employer</td><td class="table-amount">5 to 7 working days</td></tr>
<tr><td>Unlisted Indian startup ESOP with Sec 80-IAC</td><td class="table-amount">7 to 10 working days (deferral memo BEFORE exercise event)</td></tr>
<tr><td>US RSU single-employer with Schedule FA + Form 67</td><td class="table-amount">10 to 14 working days (Form 67 BEFORE ITR)</td></tr>
<tr><td>Multi-employer cross-jurisdiction ESOP / RSU</td><td class="table-amount">14 to 21 working days</td></tr>
<tr><td>Schedule FA missed past 4 years revised filing</td><td class="table-amount">21 to 30 working days</td></tr>
<tr><td>Returning NRI with foreign ESOP transition</td><td class="table-amount">14 to 21 working days</td></tr>
<tr><td>Section 139(9) defective return cure</td><td class="table-amount">2 to 3 working days (15-day cure window)</td></tr>
<tr><td>Statutory deadline (non-audit ITR-2)</td><td class="table-amount">31 July 2026 (AY 2026-27)</td></tr>
<tr><td>Belated / revised return window</td><td class="table-amount">31 December 2026</td></tr>
<tr><td>Form 67 timing</td><td class="table-amount">BEFORE ITR submission - no grace period</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Statutory Urgency -</strong> Form 67 filed AFTER the ITR results in FTC rejection - even if all underlying foreign tax was genuinely paid abroad. Schedule FA non-disclosure attracts Rs 10 lakh per AY under Black Money Act Section 43 (subject to Rs 20 lakh movable asset exemption from 1 October 2024). Section 80-IAC deferral assessment must be done BEFORE exercise event for unlisted startup ESOPs to lock in the deferral position.

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
            <h2 class="section-title">Why Tech Employees Hire a CA Instead of DIY ESOP Filing</h2>
        </div>
        
<div class="features-grid">
  <div class="feature-card"><h4>Holding Period from Allotment Date</h4><p>DIY platforms use exercise / vesting date - the Income Tax Act runs holding from ALLOTMENT, which can be days or weeks later, shifting LTCG / STCG line.</p></div>
  <div class="feature-card"><h4>Section 80-IAC Eligibility Validation</h4><p>DPIIT recognition is necessary but NOT sufficient. The startup needs an Inter-Ministerial Board (IMB) certificate under Section 80-IAC. Many founders confuse the two.</p></div>
  <div class="feature-card"><h4>Sell-to-Cover Notional Capital Gain</h4><p>Portion of vested RSUs sold by employer at vesting for TDS creates a notional CG or loss. Tiny in value but mandatory in Schedule CG. DIY platforms skip it entirely.</p></div>
  <div class="feature-card"><h4>Schedule FA Calendar Year vs FY</h4><p>Schedule FA reports foreign assets on calendar year basis (1 January to 31 December). Most DIY filers attempt FY-basis reporting and get notice queries.</p></div>
  <div class="feature-card"><h4>Form 67 Timing</h4><p>Foreign Tax Credit is only granted if Form 67 is filed BEFORE the ITR, not after. Late Form 67 = full FTC rejection regardless of foreign tax actually paid.</p></div>
  <div class="feature-card"><h4>Rule 115 TTBR Currency Conversion</h4><p>Foreign income / tax converted at SBI Telegraphic Transfer Buying Rate of LAST DAY of PRECEDING MONTH. DIY platforms use spot or settlement rates - AIS data exchange now flags errors.</p></div>
  <div class="feature-card"><h4>Section 49(2AA) Cost Linking</h4><p>FMV taxed as perquisite at exercise / vesting becomes the cost of acquisition for capital gains. Without correct cost, perquisite portion gets double-taxed.</p></div>
  <div class="feature-card"><h4>Pre-2018 Section 112A Grandfathering</h4><p>For pre-1-Feb-2018 ESOP exercises, cost = higher of FMV at exercise OR FMV on 31 January 2018 (capped at sale price). Lot-by-lot computation often saves significant LTCG.</p></div>
  <div class="feature-card"><h4>15% Surcharge Cap on Capital Gains</h4><p>Above Rs 2 crore total income, surcharge at 25% / 37% normally; CBDT FAQ confirms 15% cap on Sec 111A / 112A / 112 capital gains. Tech HNI employees with ESOP exits cross these thresholds.</p></div>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                <p class="trust-banner"><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents | 15+ Years</strong></p><p>Trusted by tech employees at over 200 Indian listed companies, DPIIT-recognized startups, and foreign-parent tech firms (Google, Amazon, Meta, Microsoft, Adobe, Atlassian, Salesforce). Indian tech hubs covered - Bengaluru, Pune, Mumbai, Hyderabad, Gurugram, Delhi NCR, Chennai. Foreign-based clients (US, Singapore, UK, Canada, Australia) served via remote consultations across IST, EST, GMT, and GST timezones.</p><div class="outcome-proof"><strong>Outcome Proof - Rs 38 lakh saved across two engagements:</strong> (a) Google India RSU multi-year Black Money Act compliance cure with FAST-DS 2026 saved <strong>Rs 24 lakh</strong> against worst-case exposure, and (b) Bengaluru fintech startup Section 80-IAC deferral application preserved <strong>Rs 14 lakh</strong> dry tax exposure for 5 years until liquidity event.</div><p class="city-trust-signal"><strong>4-Office City Trust Signal -</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves tech employees across India and abroad - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Indian Listed ESOP vs Indian Unlisted Startup ESOP vs Foreign RSU</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
<tr>
<th>Aspect</th>
<th>Indian Listed ESOP</th>
<th>Indian Unlisted Startup ESOP</th>
<th>Foreign RSU (US / SG / UK)</th>
</tr>
</thead>
                    <tbody>
                        
<tr><td>Perquisite Trigger</td><td><span class="badge-included">Exercise date</span></td><td><span class="badge-included">Exercise date (deferred if Sec 80-IAC eligible)</span></td><td><span class="badge-included">Vesting date (no exercise)</span></td></tr>
<tr><td>FMV Source</td><td>Avg of opening + closing on NSE / BSE on exercise date (Rule 3(8))</td><td>SEBI Cat I merchant banker certificate (180-day validity)</td><td>Foreign exchange opening or closing on vesting date</td></tr>
<tr><td>Holding for LTCG</td><td>12 months from allotment</td><td>24 months from allotment</td><td>24 months from vesting</td></tr>
<tr><td>STCG Rate</td><td>Section 111A 20%</td><td>Slab rate</td><td>Slab rate</td></tr>
<tr><td>LTCG Rate</td><td>Section 112A 12.5% above Rs 1.25 lakh exemption</td><td>Section 112 12.5% without indexation</td><td>Section 112 12.5% without indexation</td></tr>
<tr><td>Cost of Acquisition</td><td>FMV at exercise (Sec 49(2AA))</td><td>FMV at exercise (Sec 49(2AA))</td><td>FMV at vesting (Sec 49(2AA))</td></tr>
<tr><td>Section 80-IAC Deferral</td><td><span class="badge-addon">Not applicable</span></td><td><span class="badge-included">AVAILABLE if DPIIT + IMB certificate</span></td><td><span class="badge-addon">Not applicable</span></td></tr>
<tr><td>Schedule FA</td><td><span class="badge-addon">NOT applicable</span></td><td><span class="badge-addon">NOT applicable</span></td><td><span class="badge-included">MANDATORY for ROR (calendar year basis)</span></td></tr>
<tr><td>Form 67 / DTAA</td><td><span class="badge-addon">Not applicable</span></td><td><span class="badge-addon">Not applicable</span></td><td><span class="badge-included">REQUIRED if foreign tax paid</span></td></tr>
<tr><td>Currency Conversion</td><td>Not applicable</td><td>Not applicable</td><td>Rule 115 TTBR last day of preceding month</td></tr>
<tr><td>Sell-to-Cover Treatment</td><td>Rare (employee pays exercise separately)</td><td>Rare</td><td><span class="badge-included">COMMON - notional CG must be reported</span></td></tr>
<tr><td>Dry Tax Risk</td><td><span class="badge-addon">Low (shares liquid)</span></td><td><span class="badge-included">HIGH (illiquid; Sec 80-IAC mitigates)</span></td><td><span class="badge-addon">Low (shares liquid post vesting)</span></td></tr>
<tr><td>Section 87A Rebate</td><td>NOT on Sec 112A LTCG</td><td>Available within rebate cap</td><td>Available within rebate cap</td></tr>
<tr><td>Black Money Act Exposure</td><td>NIL</td><td>NIL</td><td><span class="badge-included">FULL (Sec 43 + 41 if Schedule FA missed)</span></td></tr>


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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                
<div class="related-services-grid">
  <a href="/income-tax-return" class="related-service-card"><h4>Income Tax Return</h4><p>Complete ITR filing across all entity types and income heads - general overview.</p></a>
  <a href="/itr-for-salaries" class="related-service-card"><h4>ITR for Salaries</h4><p>Employer-only income (no ESOP / RSU complexity) - ITR-1 / ITR-2 for salaried employees.</p></a>
  <a href="/itr-for-capital-gains" class="related-service-card"><h4>ITR for Capital Gains</h4><p>HNI multi-asset capital gains - equity, MF, property, crypto, gold, REIT, InvIT.</p></a>
  <a href="/esop-management-and-compliance-services" class="related-service-card"><h4>ESOP Management for Employers</h4><p>For companies / employers (NOT individual employees) - ESOP scheme drafting, shareholder approval, Form A.</p></a>
  <a href="/tax-planning-services" class="related-service-card"><h4>Tax Planning Services</h4><p>Old vs new regime selection, advance tax planning, surcharge cap claims, Sec 54 reinvestment.</p></a>
  <a href="/income-tax-notice-for-defective-return" class="related-service-card"><h4>Defective Return Cure (Sec 139(9))</h4><p>Re-file with correct Schedule FA within 15-day cure window - common for ESOP / RSU first-time filers.</p></a>
</div>


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
                
                <h4>Governing Acts and Rules</h4><ul><li><strong>Income Tax Act 1961</strong> - applies to AY 2026-27 (FY 2025-26 income) per Section 536(2)(c) of ITA 2025</li><li><strong>Income Tax Act 2025</strong> - applies to Tax Year 2026-27 onwards (FY 2026-27 income from 1 April 2026) - Section 17(2)(vi) preserved (renumbered); Section 192 maps to Section 392</li><li><strong>Income Tax Rules 1962</strong> - Rule 3(8) FMV computation, Rule 115 TTBR currency conversion, Rule 128 Foreign Tax Credit, Rule 21AB TRC and Form 10F</li><li><strong>Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act 2015</strong> - Sections 41, 43, 50</li><li><strong>Foreign Exchange Management Act 1999</strong> - operation of foreign brokerage accounts and repatriation</li></ul><h4>Key Statutory Sections for ESOP / RSU Filers</h4><ul><li><strong>Section 17(2)(vi)</strong> - Defines perquisite to include ESOP / sweat equity benefit; FMV minus exercise price taxed as salary at exercise (or vesting for RSU)</li><li><strong>Section 49(2AA)</strong> - Cost of acquisition for shares acquired via ESOP / RSU = FMV taxed as perquisite (prevents double tax)</li><li><strong>Section 80-IAC</strong> - Eligible startup ESOP deferral; DPIIT + IMB certificate; deferral until earliest of sale, cessation, or 5 years from end of allotment FY</li><li><strong>Sections 90 / 91</strong> - DTAA-based relief and unilateral relief; India-USA, India-Singapore, India-UK DTAAs apply for FTC</li><li><strong>Section 111A</strong> - 20 percent STCG on listed Indian ESOP shares (12 months or less from allotment)</li><li><strong>Section 112</strong> - 12.5 percent LTCG without indexation; unlisted Indian ESOP and foreign RSU</li><li><strong>Section 112A</strong> - 12.5 percent LTCG above Rs 1.25 lakh; listed Indian ESOP shares</li><li><strong>Section 192</strong> - TDS on salary including perquisite; Section 80-IAC defers for eligible startups</li><li><strong>Section 6</strong> - Residential status; determines whether Schedule FA applies (ROR yes; NRI / RNOR no)</li></ul><h4>Penalty Provisions for ESOP / RSU Filers</h4><ul><li><strong>Section 234F</strong> - late filing fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li><li><strong>Section 234A</strong> - 1 percent per month from 1 August 2026 on unpaid tax</li><li><strong>Section 234B / 234C</strong> - 1 percent per month for advance tax shortfall (common for tech HNIs with Q4 ESOP exits)</li><li><strong>Section 270A</strong> - 50 percent under-reporting / 200 percent misreporting penalty</li><li><strong>Section 139(9)</strong> - defective return; 15-day cure window; ITR-1 with foreign assets auto-defective</li><li><strong>Black Money Act Section 43</strong> - Rs 10 lakh per AY for missed Schedule FA (Rs 20 lakh exemption from 1 Oct 2024 for movable assets)</li><li><strong>Black Money Act Section 41</strong> - Tax + 3x penalty on undisclosed foreign income</li><li><strong>Black Money Act Section 50</strong> - Imprisonment 3 to 10 years for willful evasion</li></ul><p>Authoritative reference: <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department of India</a>, <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">CBDT Notification 70/2025 (CII for FY 2025-26)</a>, <a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener">India Code (Income Tax Act 1961)</a>, <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India / DPIIT recognition portal</a>.</p>

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
                    <p class="faq-expanded__lead">Sec 17(2)(vi) perquisite, Sec 80-IAC startup deferral, Schedule FA, Form 67 DTAA - the eight questions tech employees ask before filing ITR</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'ITR For ESOP Employees'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">When is ESOP taxed - at grant, vesting, exercise, or sale?</h3>
                        <div class="faq-expanded__a"><p>ESOP is NOT taxed at grant or vesting (vesting only means the option becomes exercisable). Tax triggers at exercise - the difference between FMV on exercise date and exercise price paid is treated as Section 17(2)(vi) perquisite, taxed as salary at slab. The employer deducts TDS under Section 192. Tax triggers AGAIN at sale - capital gain equals sale price minus FMV at exercise (Section 49(2AA)). For RSUs, the perquisite trigger is at vesting (no exercise step) since there is no exercise price.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is FMV at exercise determined for listed and unlisted ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Per Rule 3(8) of the Income Tax Rules 1962. Listed Indian shares - FMV is the average of opening and closing price on a recognised stock exchange in India on the date of exercise. If shares were not traded on the exercise date, the immediately preceding trading day prices are used. Unlisted Indian shares (startup ESOPs) - FMV is determined by a SEBI-registered Category I merchant banker certificate. The certificate is valid for 180 days from a specified date. Foreign listed shares typically use the foreign exchange opening or closing on vesting date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How are RSUs from US companies (Google, Amazon, Meta) taxed in India?</h3>
                        <div class="faq-expanded__a"><p>Two-stage taxation. Stage 1 at vesting - full FMV of vested RSUs is treated as salary perquisite under Section 17(2)(vi) and added to your Form 16 Part B; employer deducts Section 192 TDS, often via sell-to-cover (selling a portion of vested shares to fund TDS). Stage 2 at sale - capital gain equals sale price minus FMV at vesting (Section 49(2AA)). Holding period from vesting date - 24 months for LTCG (foreign listed shares) under Section 112 at 12.5 percent without indexation, or slab STCG for shorter holding. Schedule FA disclosure mandatory on calendar year basis.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Foreign RSU report karna mandatory hai? Schedule FA needs explained (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Yes for ROR (Resident and Ordinarily Resident) tax residents. NRIs and RNORs are exempt. Schedule FA reports foreign equity holdings on calendar year basis (1 January to 31 December preceding the AY) with peak balance, closing balance as on 31 December, dividends received, and sale proceeds. ITR-1 and ITR-4 do NOT contain Schedule FA - using these forms despite foreign equity holdings triggers Section 139(9) defective return automatically. Black Money Act Section 43 imposes Rs 10 lakh per AY penalty for non-disclosure (Rs 20 lakh exemption for movable assets from 1 October 2024).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the Section 80-IAC startup ESOP tax deferral?</h3>
                        <div class="faq-expanded__a"><p>Section 80-IAC permits employees of eligible startups to defer ESOP perquisite tax until the earliest of (a) sale of shares, (b) cessation of employment, or (c) 5 years from the end of the FY in which shares were allotted. Eligibility requires the startup to be (i) DPIIT-recognized AND (ii) holding a separate Inter-Ministerial Board (IMB) certificate under Section 80-IAC. DPIIT recognition alone is NOT sufficient. The deferral primarily mitigates the dry-tax problem at unlisted startup ESOP exercise where merchant banker FMV creates a perquisite tax obligation but the shares are illiquid.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How to claim DTAA relief on foreign ESOP via Form 67?</h3>
                        <div class="faq-expanded__a"><p>Three steps. (1) Compute India tax on the foreign capital gain or dividend. (2) File Form 67 ONLINE on incometax.gov.in BEFORE submitting your ITR - this declares the foreign income, the foreign tax paid, and claims the FTC under Section 90 (DTAA exists) or Section 91 (no DTAA). (3) Report Schedule FSI (foreign source income) and Schedule TR (tax relief claim) in ITR-2. FTC is the lower of (foreign tax paid converted at Rule 115 TTBR) or (India tax payable on same income). Late Form 67 = FTC rejection regardless of underlying foreign tax actually paid.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the holding period for ESOP capital gains - from grant or allotment?</h3>
                        <div class="faq-expanded__a"><p>From the date of ALLOTMENT, NOT grant or exercise. Allotment is when the company actually allots the shares to your name (which can be days or weeks after exercise). For listed Indian shares, holding above 12 months qualifies as LTCG under Section 112A (12.5 percent above Rs 1.25 lakh exemption). For unlisted Indian or foreign shares, holding above 24 months qualifies as LTCG under Section 112 (12.5 percent without indexation). DIY platforms commonly use exercise or vesting date and misclassify some LTCG transactions as STCG.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How is the dry tax problem managed at exercise?</h3>
                        <div class="faq-expanded__a"><p>Dry tax is the cash flow problem at exercise where you owe Section 17(2)(vi) perquisite tax on a paper gain (FMV minus exercise price) but have no cash because the shares are illiquid - especially with unlisted startup ESOPs at high merchant banker FMV. Mitigation options - (1) Section 80-IAC deferral if your startup is DPIIT-recognized AND IMB-certified (defers tax until sale, cessation, or 5 years); (2) sell-to-cover for listed shares where the employer sells a portion at exercise to fund TDS; (3) bank loans against ESOP value (some private banks offer this); (4) timing the exercise to align with liquidity events (IPO, secondary tender offer, buyback).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<dl class="quick-answers-list">
<dt>Tax stages for ESOP / RSU?</dt><dd>Stage 1 - perquisite at exercise (ESOP) or vesting (RSU). Stage 2 - capital gains on sale. FMV at exercise / vesting = cost for capital gains.</dd>
<dt>Holding period start date?</dt><dd>Date of ALLOTMENT (NOT grant or exercise). 12 months for listed Indian; 24 months for unlisted Indian or foreign.</dd>
<dt>ITR form for ESOP / RSU?</dt><dd>ITR-2 mandatory. ITR-1 NOT allowed if Schedule FA needed (foreign ESOPs) or Sec 112A LTCG above Rs 1.25 lakh.</dd>
<dt>Schedule FA reporting period?</dt><dd>Calendar year (1 January to 31 December) preceding the AY. NOT financial year. Peak + closing + dividends + sale proceeds.</dd>
<dt>Form 67 deadline?</dt><dd>BEFORE the ITR is filed. Late Form 67 = FTC rejection. No grace period.</dd>
<dt>Section 80-IAC eligibility?</dt><dd>DPIIT recognition + Inter-Ministerial Board (IMB) certificate under Sec 80-IAC. Both required. Defers perquisite tax up to 5 years.</dd>
<dt>Currency conversion rule?</dt><dd>Rule 115 - TT Buying Rate (TTBR) of last day of preceding month for income; spot rate for asset valuation in Schedule FA.</dd>
<dt>Sell-to-cover treatment?</dt><dd>Tiny notional capital gain or loss = (sale price - FMV at vesting). Mandatory in Schedule CG even though value is small.</dd>
</dl>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Deadlines to Lock for AY 2026-27</h2>
            <div class="content-text">
                
                <p>Three deadlines to lock for ESOP / RSU filers for AY 2026-27. <strong>ITR-2 non-audit - 31 July 2026. Form 67 - BEFORE ITR (no grace period). Belated / revised return - 31 December 2026.</strong> Late filing triggers Section 234F fee, Section 234A interest at 1 percent per month, loss of carry-forward of capital losses, Section 270A 50 percent / 200 percent under-reporting penalty. Schedule FA non-disclosure attracts Black Money Act Section 43 - Rs 10 lakh per AY (subject to Rs 20 lakh movable asset exemption from 1 October 2024). Late Form 67 = full FTC rejection regardless of foreign tax actually paid abroad.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File With Confidence</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>ESOP and RSU ITR for tech employees is not a longer salary return - it is a coordination problem across two stages, multiple statutes, and often two countries. Holding period from allotment date, Section 80-IAC deferral with separate IMB certificate validation, sell-to-cover notional capital gain, Schedule FA calendar year basis, Form 67 BEFORE ITR, Rule 115 TTBR currency conversion, Section 49(2AA) cost linking, pre-2018 Section 112A grandfathering, Rs 1.25 lakh exemption allocation across listed Indian and foreign equity, and the 15 percent surcharge cap on capital gains - each is a place where DIY platforms systematically err.</p><p>Patron Accounting brings 15+ years of tax practice and over 200 Indian and foreign-parent company engagements since 2019 to file your ITR-2 on time, defend it under scrutiny, and unlock unclaimed Foreign Tax Credits via Form 67. From Bengaluru to Bay Area, Mumbai to Manchester, Pune to Singapore - we know the cross-border ESOP tax stack inside out.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi Patron Accounting, I would like a 15-minute free ESOP / RSU ITR review. I will share Form 16 Part B and broker statements." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for ESOP Employees in Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Local CA support across our four offices - tech-hub coverage in-person or remote</p>
            <!-- CITY_PAGES_GRID PATTERN:
                BLOCK 1  -  City cards (pa-city-grid, 4 cols desktop):
                <div class="pa-city-block" style="margin-bottom:40px;">
                    <div class="pa-city-grid">
                        <a href="/itr-for-esop-employees-pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/itr-for-esop-employees-mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/itr-for-esop-employees-delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                        <a href="/itr-for-esop-employees-gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        <a href="/itr-for-esop-employees-bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                        <a href="/itr-for-esop-employees-hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                        <a href="/itr-for-esop-employees-chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                        <a href="/itr-for-esop-employees-kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                    </div>
                </div>
                BLOCK 2  -  Cross-sell services (pa-cross-grid, 3 cols desktop):
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for ITR for ESOP Employees</div>
                    <div class="pa-cross-grid">
                        <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                        (repeat for 5-6 related services)
                    </div>
                </div>
            -->
            
<div class="pa-city-block">
<div class="pa-city-grid">
  <a href="/itr-for-esop-employees/pune" class="pa-city-card">
    <div class="pa-city-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v8c0 5-3.5 9-8 10-4.5-1-8-5-8-10V6l8-4z"/></svg></div>
    <h4>Pune</h4><p>ITR for ESOP Employees in Pune</p>
  </a>
  <a href="/itr-for-esop-employees/mumbai" class="pa-city-card">
    <div class="pa-city-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V9l9-6 9 6v12M9 21V12h6v9"/></svg></div>
    <h4>Mumbai</h4><p>ITR for ESOP Employees in Mumbai</p>
  </a>
  <a href="/itr-for-esop-employees/delhi" class="pa-city-card">
    <div class="pa-city-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg></div>
    <h4>Delhi</h4><p>ITR for ESOP Employees in Delhi</p>
  </a>
  <a href="/itr-for-esop-employees/gurugram" class="pa-city-card">
    <div class="pa-city-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="8" width="16" height="13" rx="1"/><path d="M9 21V13h6v8M3 8l9-6 9 6"/></svg></div>
    <h4>Gurugram</h4><p>ITR for ESOP Employees in Gurugram</p>
  </a>
</div>
<h3 class="pa-cross-title">Pair With These Tax-Cluster Services</h3>
<div class="pa-cross-grid">
  <a href="/income-tax-return" class="pa-cross-card"><div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="18" rx="2"/><line x1="8" y1="8" x2="16" y2="8"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="8" y1="16" x2="13" y2="16"/></svg></div><h4>Income Tax Return</h4><p>Complete ITR filing across all entity types and income heads.</p></a>
  <a href="/itr-for-salaries" class="pa-cross-card"><div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M5 21v-2a4 4 0 014-4h6a4 4 0 014 4v2"/></svg></div><h4>ITR for Salaries</h4><p>Employer-only income (no ESOP / RSU complexity) - ITR-1 / ITR-2 for salaried employees.</p></a>
  <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8"/><path d="M14 7h7v7"/></svg></div><h4>ITR for Capital Gains</h4><p>HNI multi-asset capital gains - equity, MF, property, crypto, gold, REIT, InvIT.</p></a>
  <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="12" cy="12" r="4"/><line x1="12" y1="3" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="21"/></svg></div><h4>ESOP Management for Employers</h4><p>For companies (not individual employees) - scheme drafting, shareholder approval, Form A.</p></a>
  <a href="/tax-planning-services" class="pa-cross-card"><div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg></div><h4>Tax Planning Services</h4><p>Old vs new regime selection, advance tax planning, surcharge cap claims, Sec 54 reinvestment.</p></a>
  <a href="/income-tax-notice-for-defective-return" class="pa-cross-card"><div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a9 9 0 11-3.5-7"/><polyline points="21 4 21 11 14 11"/></svg></div><h4>Defective Return Cure</h4><p>Re-file with correct Schedule FA within 15-day cure window - common for ESOP / RSU first-time filers.</p></a>
</div>
</div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
        </div>
    </div>
</section>

@include('layouts.itr-season-strip')

</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection