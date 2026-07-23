
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
    <title>First Year Compliance: Pvt Ltd</title>
    <meta name="description" content="New pvt ltd first year compliance: first auditor in 30 days, INC-20A in 180 days, first AGM in 9 months. Patron pack from Rs 30,000.">
    <link rel="canonical" href="/annual-compliance-first-year-after-incorporation">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="First Year Compliance 2026: Pvt Ltd | Patron Accounting">
    <meta property="og:description" content="New pvt ltd first year compliance: first auditor in 30 days, INC-20A in 180 days, first AGM in 9 months. Patron pack from Rs 30,000.">
    <meta property="og:url" content="/annual-compliance-first-year-after-incorporation">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/annual-compliance-first-year-after-incorporation-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="First Year Compliance 2026: Pvt Ltd | Patron Accounting">
    <meta name="twitter:description" content="New pvt ltd first year compliance: first auditor in 30 days, INC-20A in 180 days, first AGM in 9 months. Patron pack from Rs 30,000.">
    <meta name="twitter:image" content="/images/annual-compliance-first-year-after-incorporation-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/annual-compliance-first-year-after-incorporation#breadcrumb",
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
                        "name": "First Year Compliance for Newly Incorporated Companies",
                        "item": "/annual-compliance-first-year-after-incorporation"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/annual-compliance-first-year-after-incorporation#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What compliance is required after incorporating a private limited company in India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Year-one compliance covers nine items: first board meeting within 30 days under Section 173, first auditor appointment under Section 139(6) plus ADT-1 within 15 days (mandatory from 14 July 2025 per G.S.R. 359(E)), INC-20A within 180 days under Section 10A, SH-1 share certificates within 60 days of allotment under Section 56(4), first AGM within 9 months of first FY end under Section 96 proviso, first AOC-4 within 30 days of AGM under Section 137, first MGT-7 or MGT-7A within 60 days of AGM under Section 92, first DIR-3 KYC by 30 September after DIN allotment, and DPT-3 by 30 June under Rule 16A if any deposit or non-deposit money received."
                }
            },
            {
                "@type": "Question",
                "name": "When is the first AGM of a new company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Within 9 months from the end of the first financial year under the proviso to Section 96 of the Companies Act 2013. No extension is available for the first AGM, unlike subsequent AGMs which can be extended up to 3 months by the ROC under Section 96(1). For a company with first FY ending 31 March 2026, the first AGM must be held by 31 December 2026. Default triggers Section 99 prosecution of the company and every officer in default."
                }
            },
            {
                "@type": "Question",
                "name": "How long is the first financial year of a new company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Up to 15 months if incorporated on or after 1 January, per Section 2(41) of the Companies Act 2013. The first FY can extend up to 31 March of the following calendar year. If incorporated before 1 January (i.e., between 1 April and 31 December), the first FY ends 31 March of the same calendar year - a window of less than 12 months. This extended-FY rule is unique to year one and affects all dependent filings (statutory audit timing, first AGM date, first AOC-4 / MGT-7A filing windows)."
                }
            },
            {
                "@type": "Question",
                "name": "Is ADT-1 mandatory for the first auditor?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes - from 14 July 2025. The Companies (Audit and Auditors) Amendment Rules, 2025, notified via G.S.R. 359(E) dated 30 May 2025 and effective 14 July 2025, made ADT-1 filing mandatory for first auditor appointment within 15 days of the board resolution under Section 139(6). Previously (pre-July 2025), ADT-1 for first auditor appointed by Board was optional best practice and many companies followed Rule 4(2) / MCA FAQ Question 35 which said it was not mandatory. Post-July 2025 this position has changed - the revised ADT-1 form on MCA V3 portal now includes a specific 'First Auditor' dropdown option and rejects placeholder SRNs. Non-filing risks Section 147 (Rs 25,000 to Rs 5,00,000) and Section 450 (Rs 10,000 + Rs 1,000/day per officer) penalties."
                }
            },
            {
                "@type": "Question",
                "name": "What is the deadline for INC-20A filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "180 days from the date of incorporation, under Section 10A of the Companies Act 2013 read with Rule 23A of Companies (Incorporation) Rules, 2014. INC-20A is the declaration that subscribers have paid for their shares and the registered office has been verified under Section 12. Default attracts Section 10A(2) penalty - Rs 50,000 on the company and Rs 1,000 per day per officer in default. More seriously, Section 10A(3) authorises the ROC to initiate Section 248 strike-off proceedings if INC-20A is not filed - a far worse outcome than the monetary penalty."
                }
            },
            {
                "@type": "Question",
                "name": "When must the first board meeting be held after incorporation?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Within 30 days of incorporation under Section 173 of the Companies Act 2013. This meeting typically appoints the first auditor under Section 139(6), authorises bank account opening, resolves to file INC-20A under Section 10A, approves registered-office address proof under Section 12, and opens the statutory register. Patron locks the first board meeting in the first 7 days of onboarding so all 30-day and 60-day deadlines have comfortable buffer."
                }
            },
            {
                "@type": "Question",
                "name": "Do new pvt ltd companies file MGT-7 or MGT-7A in year one?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Whichever applies based on Section 2(85) classification. A newly incorporated private company with paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore qualifies as a small company per G.S.R. 880(E) dated 1 December 2025 and files MGT-7A (simplified annual return signed by a single director). Above either threshold, OR if the company is a holding / subsidiary under Section 2(46) (excluded from small-co status by the proviso to Section 2(85)), MGT-7 (full annual return) applies. Most first-year pvt ltds file MGT-7A."
                }
            },
            {
                "@type": "Question",
                "name": "When is the first DIR-3 KYC due after incorporation?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "By 30 September of the financial year following the year in which the DIN was allotted. For example, a director with DIN allotted in FY 2025-26 files first DIR-3 KYC by 30 September 2026. Subsequent KYC is now TRIENNIAL per Companies (Appointment and Qualification of Directors) Amendment Rules 2025 notified via G.S.R. 943(E) dated 31 December 2025 (effective 31 March 2026) - the substituted Rule 12A requires Form DIR-3 KYC Web filing once every 3 consecutive financial years by 30 June. Mobile / email / address changes must be filed within 30 days separately. Missing the first DIR-3 KYC deactivates the DIN; reactivation costs Rs 5,000 per director."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/annual-compliance-first-year-after-incorporation#service",
                "name": "First Year Compliance for Newly Incorporated Private Limited Companies",
                "url": "/annual-compliance-first-year-after-incorporation",
                "description": "End-to-end first-year compliance pack for newly incorporated Indian private limited companies. Includes first board meeting within 30 days (Section 173), first auditor appointment under Section 139(6) with ADT-1 filing within 15 days (mandatory from 14 July 2025 per G.S.R. 359(E) dated 30 May 2025), INC-20A within 180 days under Section 10A read with Rule 23A, share certificates SH-1 within 60 days of allotment (Section 56(4)), first AGM within 9 months of first FY end (Section 96 proviso - no ROC extension), first AOC-4 (Section 137), first MGT-7 or MGT-7A (Section 92), DIR-3 KYC, and DPT-3. Patron pack from Rs 30,000 one-time.",
                "serviceType": "Corporate Compliance Service",
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
                        "name": "Incorporation (business)",
                        "sameAs": "https://en.wikipedia.org/wiki/Incorporation_(business)"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "First-Year Compliance Packages",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "First-Year Compliance Pack",
                            "price": "30000",
                            "priceCurrency": "INR",
                            "description": "One-time first-year compliance pack covering all 9 statutory filings: first board meeting under Section 173, first auditor appointment under Section 139(6) with ADT-1 (mandatory per G.S.R. 359(E) dated 30 May 2025 effective 14 July 2025), INC-20A under Section 10A within 180 days, SH-1 share certificates within 60 days under Section 56(4), first AGM facilitation within 9 months of first FY end under Section 96 proviso, first AOC-4 under Section 137, first MGT-7 or MGT-7A under Section 92, first DIR-3 KYC, and DPT-3 under Rule 16A. Partner-CA / CS review on every filing."
                        },
                        {
                            "@type": "Offer",
                            "name": "First-Year + Bookkeeping (Full-Service)",
                            "price": "40000",
                            "priceCurrency": "INR",
                            "description": "First-Year Compliance Pack plus monthly bookkeeping, GST returns, and TDS for the first FY. Full-service variant for founders without an in-house accountant. Single intake, single calendar, single accountable owner across compliance and bookkeeping."
                        },
                        {
                            "@type": "Offer",
                            "name": "INC-20A Late-Filing Recovery",
                            "price": "8000",
                            "priceCurrency": "INR",
                            "description": "For companies past the 180-day Section 10A window. Penalty mitigation, additional-fee filing under Section 403, ROC notice response, defence against Section 10A(3) strike-off proceedings. Plus actuals for government additional fees and any ROC adjudication costs."
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
                        First Year Compliance for Newly Incorporated Private Limited Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> First board minutes, ADT-1, INC-20A, share certificates (SH-1), first AGM notice, first AOC-4 and MGT-7 / MGT-7A.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> First-year pack from Rs 30,000; full-service variant from Rs 40,000 with monthly bookkeeping.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any private limited company or OPC within 18 months of incorporation.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> First board meeting within 30 days; INC-20A within 180 days; first AGM within 9 months of first FY end.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20incorporated%20a%20pvt%20ltd%20and%20need%20first-year%20compliance%20support." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - First Year Compliance'/>
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
                                <option value="annual-compliance-first-year-after-incorporation" selected>First Year Compliance (this page)</option>
                                <option value="private-limited-company-compliance">Pvt Ltd Compliance (Year 2+)</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance</option>
                                <option value="appointment-of-auditor">Appointment of Auditor (ADT-1)</option>
                                <option value="appointment-of-director">Appointment of Director (DIR-12)</option>
                                <option value="dsc-registration">DSC Registration</option>
                                <option value="director-kyc">DIR-3 KYC Filing</option>
                                <option value="compliance-calendar">Compliance Calendar</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We incorporated in March 2025 and were 60 days from missing INC-20A. Patron filed it inside 5 working days, then ran the entire first-year cycle through to MGT-7A on schedule. No penalty, no strike-off notice.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">SaaS Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bangalore | FY 2025-26 first-year</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a foreign-promoted Indian subsidiary we had FC-GPR plus first-year ROC filings overlapping. Patron mapped both timelines, coordinated with our AD bank, and we cleared every deadline. Clean Year 1.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Foreign Subsidiary CFO</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai | FY 2025-26 first-year</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our previous CA had told us ADT-1 was optional for the first auditor. Patron flagged the 14 July 2025 MCA amendment, filed ADT-1 retroactively within compliance limits, and avoided Section 147 exposure. Detail matters.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DC</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">D2C Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi | FY 2025-26 first-year</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Incorporated in February 2025. Patron mapped the extended first FY to 31 March 2026 (15 months), saving us a wasted audit and AOC-4 cycle. First AGM locked for December 2026 - already on the calendar.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Manufacturing Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Gurugram | Feb 2025 incorporation</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My co-founder and I had no idea about INC-20A until Patron walked us through Section 10A on Day 1 of onboarding. Filed inside 90 days with comfortable buffer. Calendar discipline saved us a Rs 50k+ penalty.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Services Co-Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune | Aug 2025 incorporation</div>
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
                    <p>Free 20-minute first-year scoping call. Personalised compliance calendar pinned to your incorporation date. 100% on-time INC-20A and first AGM track record across 340+ FY 2024-25 first-year engagements. Section 139(6) backup path activated if board misses the 30-day window. Partner-CA / CS review on every filing.</p>
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
                <a href="#what-section" class="toc-btn">What Is It</a>
                <a href="#who-section" class="toc-btn">Who Needs This</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">6-Step Procedure</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Day-Based Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA + CS</a>
                <a href="#comparison-section" class="toc-btn">Year 1 vs Ongoing</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: First Year Compliance at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - First Year Compliance Services at a Glance</strong></p>
                    <p><strong>Newly incorporated private limited companies</strong> face <strong>nine specific first-year filings</strong> under the Companies Act 2013: first board meeting (30 days), first auditor with ADT-1 (30+15 days), <strong>INC-20A (180 days)</strong>, share certificates (60 days), <strong>first AGM (9 months from first FY end - no extension)</strong>, first AOC-4, first MGT-7 or MGT-7A, DIR-3 KYC, and DPT-3. Patron first-year pack from <strong>Rs 30,000</strong>.</p>
                </div>
                <p>Year one is the highest-risk compliance window in a company's life. Two filings - INC-20A under Section 10A and first auditor appointment under Section 139(6) - have penalty regimes severe enough to trigger strike-off or director disqualification. The first AGM under Section 96 proviso has no statutory extension - the ROC cannot grant one. Both clocks run from incorporation, not from when the founder remembers.</p>
                <p>Below is the quick-reference summary covering governing provisions (Sections 2(41), 96, 137, 139(6), 173, 92, 10A), the extended first FY rule (up to 15 months if incorporated on or after 1 January), the 9-month first AGM deadline with no extension available, the 30-day first auditor window with ADT-1 now mandatory per the 14 July 2025 MCA amendment (Companies (Audit and Auditors) Amendment Rules 2025 via G.S.R. 359(E) dated 30 May 2025), the 180-day INC-20A clock under Section 10A, and Patron's Rs 30,000 first-year pack.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Provisions</td><td>Companies Act 2013 Sections 2(41), 10A, 12, 56(4), 92, 96, 137, 139(6), 141, 147, 173, 248, 403, 450; Companies (Incorporation) Rules 2014 Rule 23A; Companies (Accounts) Rules 2014; Companies (Audit and Auditors) Amendment Rules, 2025 (G.S.R. 359(E) dated 30 May 2025, effective 14 July 2025)</td></tr>
                        <tr><td>First Financial Year</td><td>Up to <strong>15 months</strong> if incorporated on or after 1 January (Section 2(41)). Else first FY ends 31 March of same calendar year.</td></tr>
                        <tr><td>First AGM Deadline</td><td><strong>9 months</strong> from first FY end (Section 96 proviso) - <strong>NO extension available</strong>, unlike subsequent AGMs which can be extended up to 3 months by ROC</td></tr>
                        <tr><td>First Auditor Window</td><td>30 days from incorporation by Board (Section 139(6)); 90 days by EGM if Board fails. ADT-1 within 15 days of appointment <strong>mandatory from 14 July 2025</strong> per Companies (Audit and Auditors) Amendment Rules 2025.</td></tr>
                        <tr><td>INC-20A Deadline</td><td><strong>180 days</strong> from incorporation under Section 10A read with Rule 23A of Companies (Incorporation) Rules 2014</td></tr>
                        <tr><td>First-Year Penalty Risk</td><td>INC-20A default: <strong>Rs 50,000 on company + Rs 1,000 per officer per day + Section 248 strike-off risk.</strong> First auditor default: Section 147 (Rs 25,000 - Rs 5,00,000) + Section 450 penalties. AOC-4 / MGT-7 late filing: Rs 100/day per form additional fee under Section 403.</td></tr>
                        <tr><td>Patron First-Year Pack</td><td>Rs 30,000 one-time (compliance only); Rs 40,000 with monthly bookkeeping, GST, and TDS for first FY; Rs 8,000 + actuals for INC-20A late-filing recovery</td></tr>
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
                <h2 class="section-title">What Is First Year Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>First year compliance is the package of post-incorporation governance setup, event-based ROC filings, and first annual returns that every Indian private limited company must complete between the date of incorporation and the close of its first annual filing window.</p>

                    <p style="margin-top:16px;">The pattern differs from ongoing compliance in three structural ways. <strong>First</strong>, the first financial year can extend up to 15 months under Section 2(41) of the Companies Act 2013 when the company is incorporated on or after 1 January. <strong>Second</strong>, the first AGM gets 9 months from FY end under Section 96 proviso (versus 6 months for subsequent AGMs), with no extension allowed. <strong>Third</strong>, six event-based filings - first board meeting, first auditor appointment, INC-20A, share certificates, DIR-3 KYC, DPT-3 - happen only once and are easy to miss.</p>

                    <div class="highlight-box" style="margin-top:24px;background:#FEF4EE;border-left:4px solid #E8712C;">
                        <p><strong>&#9888; The 14 July 2025 MCA amendment changed the rules:</strong> Per Companies (Audit and Auditors) Amendment Rules, 2025 notified via <strong>G.S.R. 359(E) dated 30 May 2025</strong>, filing of Form ADT-1 within 15 days of first auditor appointment is now <strong>MANDATORY</strong> for every newly incorporated company. Previously ADT-1 for first auditor (appointed by Board under Section 139(6)) was best practice but not strictly required. Companies incorporated on or after 14 July 2025 must include ADT-1 filing in their post-incorporation compliance checklist - non-filing risks Section 147 and Section 450 penalties.</p>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for First Year Compliance:</strong></p>
                    
                    <p><strong>First financial year (Section 2(41)):</strong> If incorporated on or after 1 January, the first FY can extend up to 31 March of the following year - a window of up to 15 months. If incorporated before 1 January, the first FY ends 31 March of the same calendar year.</p>
                    <p><strong>First AGM (Section 96 proviso):</strong> Annual General Meeting of a newly incorporated company. Must be held within <strong>9 months from the end of the first FY</strong>. Cannot be extended by ROC, unlike subsequent AGMs which can be extended up to 3 months.</p>
                    <p><strong>First auditor (Section 139(6)):</strong> Statutory auditor appointed by Board within 30 days of incorporation. Holds office until the conclusion of the first AGM. If the Board fails, members can appoint within 90 days via EGM ordinary resolution.</p>
                    <p><strong>ADT-1 for First Auditor:</strong> Form ADT-1 filed with ROC within 15 days of first auditor appointment. <strong>Mandatory from 14 July 2025</strong> per Companies (Audit and Auditors) Amendment Rules, 2025 (G.S.R. 359(E) dated 30 May 2025). Previously optional best practice.</p>
                    <p><strong>INC-20A Commencement of Business (Section 10A):</strong> Mandatory declaration filed within 180 days of incorporation confirming that subscribers have paid for their shares and the registered office details have been verified under Section 12. Penalty for default: Rs 50,000 on company plus Rs 1,000 per day per officer; can trigger Section 248 strike-off under Section 10A(3).</p>
                    <p><strong>Rule 23A of Companies (Incorporation) Rules 2014:</strong> Prescribes Form INC-20A and the 180-day filing window under Section 10A.</p>
                    <p><strong>Share Certificate (Section 56(4)):</strong> Share certificates in Form SH-1 must be issued to subscribers within 60 days of allotment. Stamp duty payable per state-specific rates.</p>
                    <p><strong>First Board Meeting (Section 173):</strong> First meeting of the Board must be held within 30 days of incorporation. Typical agenda: appoint first auditor, authorise bank account opening, resolve to file INC-20A, approve registered-office address proof.</p>
                    <p><strong>First DIR-3 KYC:</strong> Every director with a DIN allotted during the year files DIR-3 KYC by 30 September of the financial year following DIN allotment. Per <strong>G.S.R. 943(E) dated 31 December 2025</strong> (effective 31 March 2026), subsequent KYC is triennial under substituted Rule 12A using Form DIR-3 KYC Web.</p>
                    <p><strong>Section 2(85) Small Company:</strong> Per <strong>G.S.R. 880(E) dated 1 December 2025</strong> amending Rule 2(1)(t), a private company with paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore qualifies as a small company - files MGT-7A (not MGT-7). Holding and subsidiary companies excluded by proviso to Section 2(85).</p>
                    <p><strong>Section 10A(2) Penalty:</strong> For INC-20A default - <strong>Rs 50,000 on company + Rs 1,000 per day per officer in default</strong>. Section 10A(3) authorises ROC to initiate Section 248 strike-off if INC-20A is not filed.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">First Year Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Year One</span>
                        <strong>9 Filings + 6 Events</strong>
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
            <h2 class="section-title">Who Needs First Year Compliance Service?</h2>
            <div class="content-text">
                
                
                <p>First year compliance applies to every Indian private limited company, OPC, and Section 8 company from the date of incorporation until the first annual return is filed with the ROC. The service is targeted at:</p>

                <ul>
                    <li>First-time founders who incorporated through SPICe+ in the last 12 months and have not yet appointed a first auditor or filed INC-20A</li>
                    <li>Promoters whose company has crossed the 180-day INC-20A window and now face Rs 50,000 plus Rs 1,000 per day per officer penalty under Section 10A(2)</li>
                    <li>SaaS, D2C, and services startups whose first FY ends 31 March 2026 and who must hold first AGM by 31 December 2026 (no extension under Section 96 proviso)</li>
                    <li>Foreign-promoted Indian subsidiaries needing FC-GPR within 30 days of share allotment in addition to first-year ROC filings</li>
                    <li>Companies incorporated on or after 1 January with an extended first FY of up to 15 months (Section 2(41))</li>
                </ul>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>&#9888; No extension rule:</strong> First AGM cannot be extended under Section 96. Subsequent AGMs can get a three-month extension, but the first cannot - Section 99 prosecution is the only remedy for default. Plan backwards from the 9-month deadline. For a company with FY ending 31 March 2026, the first AGM must be held by <strong>31 December 2026</strong>.</p>
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
            <h2 class="section-title">What Patron Delivers in First-Year Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Post-Incorporation Governance Setup</strong></td><td>First board meeting agenda and minutes under Section 173, statutory register opening (members, directors, share transfers, charges, KMP), DSC and DIN status check, registered-office signage verification under Section 12, INC-22 if pending.</td></tr>
                        <tr><td><strong>2. First Auditor Appointment</strong></td><td>Auditor consent letter, eligibility check under Section 141, board resolution under Section 139(6), <strong>ADT-1 filing within 15 days - mandatory from 14 July 2025</strong> per Companies (Audit and Auditors) Amendment Rules 2025 (G.S.R. 359(E) dated 30 May 2025).</td></tr>
                        <tr><td><strong>3. INC-20A Commencement Filing</strong></td><td>Director declaration of paid-up subscription, bank-statement evidence showing capital received, INC-22 office verification, INC-20A filing within 180 days of incorporation under Section 10A read with Rule 23A of Companies (Incorporation) Rules 2014.</td></tr>
                        <tr><td><strong>4. Share Certificate and Statutory Register</strong></td><td>SH-1 share certificates issued within 60 days of allotment under Section 56(4), statutory register of members, share-transfer register opening, stamp duty paid on share certificates as per state-specific rates.</td></tr>
                        <tr><td><strong>5. First AGM, AOC-4, and Annual Return</strong></td><td>AGM notice with 21 clear days under Section 101, AGM minutes signed within 30 days, first AOC-4 within 30 days of first AGM under Section 137, first MGT-7 or MGT-7A within 60 days of first AGM under Section 92.</td></tr>
                        <tr><td><strong>6. First-Year Add-Ons</strong></td><td>DIR-3 KYC for every DIN-holding director (first filing by 30 September after DIN allotment; triennial cycle thereafter per G.S.R. 943(E)), DPT-3 for any non-deposit money received under Rule 16A, BEN-2 if 10%+ significant beneficial ownership applies under Section 90, MSME-1 half-yearly return where applicable.</td></tr>


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
            <h2 class="section-title">Patron First-Year Procedure: 6 Steps from Incorporation to MGT-7A</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs every first-year engagement through a structured 6-step protocol starting the day the Certificate of Incorporation is in hand. The full cycle runs 9 to 15 months depending on incorporation date and the Section 2(41) extended FY rule. Each step is calendared back-to-back so no Section 10A, Section 96, or Section 139(6) deadline is ever missed.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Onboarding (Day 1 to 7)</h3>
                        <p class="step-description">Pull SPICe+ documents, MOA, AOA, share subscription details from MCA records. Open the statutory register (members, directors, charges, KMP). Activate DSCs for all directors. Verify DIN status on MCA portal. Confirm registered office signage under Section 12. Map the first FY end date (31 March of the next calendar year if incorporated on or after 1 January, per Section 2(41)).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SPICe+ pull from MCA
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DSC and DIN check
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                First FY end mapped
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="55" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text>
                                    <line x1="65" y1="52" x2="78" y2="65" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                    <rect x="25" y="68" width="20" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="35" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text>
                                    <rect x="50" y="68" width="20" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="60" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIN</text>
                                    <rect x="75" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="86" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 12</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Onboarding Done</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">First Board Meeting + First Auditor (Day 8 to 30)</h3>
                        <p class="step-description">First board meeting held within 30 days of incorporation under Section 173. Resolutions passed for: appointment of first auditor under Section 139(6), bank account opening, authorising INC-20A filing, approving registered-office address proof. Statutory auditor consent letter obtained with eligibility certificate under Section 141. Minute book opened.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 173 (30 days)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 139(6) auditor
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                INC-20A authorisation
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FIRST BOARD MEETING</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="30" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="68" x2="85" y2="68" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Board Meeting 1 Done</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">ADT-1 + Share Certificates (Day 30 to 60)</h3>
                        <p class="step-description">ADT-1 filed within 15 days of auditor appointment - MANDATORY from 14 July 2025 per Companies (Audit and Auditors) Amendment Rules 2025 (G.S.R. 359(E) dated 30 May 2025). Share certificates SH-1 issued to subscribers within 60 days of allotment under Section 56(4) with stamp duty paid. Register of members updated. Share-transfer register opened.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ADT-1 mandatory (14 Jul 2025)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SH-1 within 60 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Stamp duty paid
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
                                    <text x="44" y="27" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ADT-1</text>
                                    <text x="44" y="40" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MANDATORY</text>
                                    <text x="44" y="52" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">14 JUL 2025</text>
                                    <text x="44" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">G.S.R. 359(E)</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SH-1 / 60D</text>
                                </svg>
                            </div>
                            <span class="illustration-label">ADT-1 + SH-1 Filed</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">INC-20A Filing (Day 60 to 180)</h3>
                        <p class="step-description">Confirm subscribers have paid for shares (bank statement evidence). File INC-20A under Section 10A read with Rule 23A of Companies (Incorporation) Rules 2014 - DEADLINE 180 days from incorporation. Verify registered office under Section 12 and file INC-22 if pending. Default exposes the company to Rs 50,000 + Rs 1,000/day per officer + Section 248 strike-off risk.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                180-day Section 10A clock
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 23A INC-20A
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Strike-off avoided
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-20A</text>
                                    <text x="40" y="46" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">180</text>
                                    <text x="40" y="57" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DAYS</text>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 10A</text>
                                    <circle cx="88" cy="55" r="5" fill="#10B981"/>
                                    <path d="M85 55l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">INC-20A Filed</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Audit, AGM Notice, First AGM (End of FY to AGM)</h3>
                        <p class="step-description">Coordinate statutory audit under Section 143 with auditor UDIN signature. Prepare directors' report and AOC-4 attachments. Draft AGM notice with 21 clear days under Section 101 and explanatory statement under Section 102 if special business. Hold first AGM within 9 months of first FY end under Section 96 proviso - NO ROC extension available.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Statutory audit + UDIN
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                21 clear days notice
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 96 proviso (9 months)
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
                                    <text x="44" y="27" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FIRST AGM</text>
                                    <text x="44" y="40" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">9</text>
                                    <text x="44" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MONTHS</text>
                                    <text x="44" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NO EXTENSION</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 96</text>
                                </svg>
                            </div>
                            <span class="illustration-label">First AGM Held</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">AOC-4 + MGT-7A + DIR-3 KYC + DPT-3 (Post-AGM)</h3>
                        <p class="step-description">File first AOC-4 within 30 days of first AGM under Section 137 with audited financials, directors' report, and auditor report. File first MGT-7 or MGT-7A within 60 days under Section 92 (MGT-7A for small companies under Section 2(85)). First DIR-3 KYC by 30 September after DIN allotment (triennial thereafter per G.S.R. 943(E)). DPT-3 by 30 June under Rule 16A if any non-deposit money received.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AOC-4 (30 days)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MGT-7A (60 days)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DIR-3 KYC + DPT-3
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
                                    <text x="60" y="32" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">YEAR 1 COMPLETE</text>
                                    <text x="60" y="50" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4 + MGT-7A</text>
                                    <text x="60" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+ DIR-3 KYC + DPT-3</text>
                                    <circle cx="60" cy="72" r="4" fill="#10B981"/>
                                    <path d="M57 72l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Year 1 Cycle Closed</span>
                            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Required for First-Year Compliance</h2>
            <div class="content-text">
                
                
                <p>The documents below cover all 9 first-year filings and the 6 event-based compliance items. Patron prepares missing items in-house wherever feasible.</p>

                <h3 style="margin-top:24px;">Incorporation Records</h3>
                <ul>
                    <li>Certificate of Incorporation, MOA, AOA, and SPICe+ Part B acknowledgement</li>
                    <li>DSC of every director and current DIN status for all directors</li>
                    <li>PAN and TAN of the company</li>
                </ul>

                <h3 style="margin-top:24px;">For INC-20A Filing (Section 10A)</h3>
                <ul>
                    <li>Share subscription details and bank statements showing paid-up capital received from subscribers</li>
                    <li>Registered office proof and NOC from premises owner</li>
                    <li>Verified registered office under Section 12 (utility bill, rent agreement, NOC)</li>
                    <li>Director declaration of paid-up subscription</li>
                </ul>

                <h3 style="margin-top:24px;">For First Auditor Appointment (Section 139(6) + ADT-1)</h3>
                <ul>
                    <li>Auditor consent letter (Form ADT-1 Annexure A)</li>
                    <li>Auditor eligibility certificate under Section 141</li>
                    <li>Board resolution appointing the auditor</li>
                    <li>Auditor firm PAN, ICAI membership number, and UDIN</li>
                </ul>

                <h3 style="margin-top:24px;">For Share Certificates (Section 56(4))</h3>
                <ul>
                    <li>Share allotment register</li>
                    <li>SH-1 share certificate template with company seal</li>
                    <li>Stamp duty proof (state-specific rates)</li>
                </ul>

                <h3 style="margin-top:24px;">For First AGM and AOC-4 / MGT-7A</h3>
                <ul>
                    <li>Draft first board meeting agenda and minutes</li>
                    <li>Audited financial statements signed by auditor with UDIN</li>
                    <li>Directors' report under Section 134</li>
                    <li>AGM notice with 21 clear days under Section 101 and explanatory statement under Section 102</li>
                    <li>AGM attendance sheet and signed minutes</li>
                </ul>

                <h3 style="margin-top:24px;">For Add-On Filings</h3>
                <ul>
                    <li>List of beneficial owners (for BEN-2 if applicable - 10%+ significant beneficial ownership under Section 90)</li>
                    <li>Schedule of any non-deposit money received during the FY (for DPT-3 under Rule 16A)</li>
                    <li>Director KYC declarations and identity / address proofs (for first DIR-3 KYC)</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common First-Year Compliance Pitfalls - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. INC-20A missed within 180 days</strong></td>
                            <td>Rs 50,000 on company + Rs 1,000 per officer per day under Section 10A(2). Section 10A(3) authorises ROC to initiate Section 248 strike-off proceedings. Common when founders defer the bank account opening.</td>
                            <td>Patron files INC-20A on a priority track with paid-up subscription evidence and Section 12 office verification. Where the deadline is missed, we manage the additional-fee filing (Rs 8,000 + actuals recovery pack) and any ROC notice response.</td>
                        </tr>
                        <tr>
                            <td><strong>2. First auditor not appointed within 30 days</strong></td>
                            <td>Board misses the Section 139(6) 30-day window. The financial statement signature chain is blocked, which in turn blocks AOC-4 and MGT-7 filings. Common when founders shop multiple CAs without locking one.</td>
                            <td>Patron triggers the Section 139(6) backup - 90-day EGM appointment by members. Drafts the EGM notice, runs the ordinary resolution, and files ADT-1 within 15 days of the EGM appointment (mandatory per G.S.R. 359(E)).</td>
                        </tr>
                        <tr>
                            <td><strong>3. Founders treat ADT-1 as optional for first auditor (pre-July 2025 position)</strong></td>
                            <td>Until 14 July 2025, ADT-1 for first auditor appointed by Board under Section 139(6) was best practice but not mandatory. Many founders and even some CAs still follow the old position - which now risks Section 147 (Rs 25,000 - Rs 5,00,000) and Section 450 penalties.</td>
                            <td>From 14 July 2025 the Companies (Audit and Auditors) Amendment Rules 2025 (G.S.R. 359(E)) made ADT-1 mandatory for first auditor. Patron files ADT-1 in every first-year engagement regardless of pre-2025 practice; non-filing risk eliminated.</td>
                        </tr>
                        <tr>
                            <td><strong>4. First AGM date missed (6-month vs 9-month confusion)</strong></td>
                            <td>Founders apply the 6-month subsequent-AGM rule instead of the 9-month first-AGM proviso under Section 96. Or worse, assume ROC can grant an extension - it cannot for the first AGM. Default triggers Section 99 prosecution.</td>
                            <td>Patron applies Section 96 proviso - 9 months from first FY end - and locks the AGM date in the first board meeting. No extension is available; missing this date triggers Section 99 prosecution. Calendared backwards from the 9-month deadline.</td>
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
            <h2 class="section-title">First-Year Compliance Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>First-Year Compliance Pack</strong> - First board meeting, ADT-1 (mandatory per G.S.R. 359(E)), INC-20A under Section 10A, SH-1 share certificates, first AGM facilitation, first AOC-4 (Section 137), first MGT-7 or MGT-7A (Section 92), DIR-3 KYC, DPT-3.</td><td class="text-end">Rs 30,000 one-time (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>First-Year + Bookkeeping</strong> - All of the above plus monthly bookkeeping, GST returns, and TDS for the first FY. Full-service variant for founders without an in-house accountant.</td><td class="text-end">Rs 40,000 one-time (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>INC-20A Late-Filing Recovery</strong> - Penalty mitigation, additional-fee filing under Section 403, ROC notice response if deadline missed. For companies past the 180-day Section 10A window.</td><td class="text-end">Rs 8,000 + actuals (Exl GST)</td></tr>
                        <tr><td><strong>First Audit Coordination</strong> - Audit-firm appointment, statutory audit preparation, directors' report drafting under Section 134, AOC-4 attachment compilation.</td><td class="text-end">Quoted on scope</td></tr>
                        <tr><td>Statutory ROC Filing Fees (under Companies (Registration Offices and Fees) Rules 2014)</td><td class="text-end">At actuals by authorised capital slab</td></tr>
                        <tr><td>Stamp Duty on Share Certificates (state-specific)</td><td class="text-end">At actuals</td></tr>
                        <tr><td>DSC Charges (Class 3)</td><td class="text-end">At actuals</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Late-Filing Penalty Exposure (Without Patron Pack)</strong></td><td class="text-end"><strong>See penalty schedule below</strong></td></tr>
                        <tr><td>INC-20A Default - Section 10A(2)</td><td class="text-end">Rs 50,000 on company + Rs 1,000/day per officer in default</td></tr>
                        <tr><td>INC-20A Strike-Off Risk - Section 10A(3) + Section 248</td><td class="text-end">ROC can initiate strike-off proceedings</td></tr>
                        <tr><td>First Auditor Default - Section 147</td><td class="text-end">Rs 25,000 to Rs 5,00,000 on company</td></tr>
                        <tr><td>First Auditor Default - Section 450 (General Penalty)</td><td class="text-end">Rs 10,000 + Rs 1,000/day per officer in default</td></tr>
                        <tr><td>AOC-4 / MGT-7 Late Filing - Section 403 Additional Fee</td><td class="text-end">Rs 100/day per form, NO upper cap</td></tr>
                        <tr><td>AOC-4 Late Filing Penalty - Section 137(3) Post-2020 Amendment</td><td class="text-end">Company cap Rs 2,00,000 / Officer cap Rs 50,000 (decriminalized)</td></tr>
                        <tr><td>MGT-7 / MGT-7A Late Filing Penalty - Section 92(5) Post-2020 Amendment</td><td class="text-end">Company cap Rs 2,00,000 / Officer cap Rs 50,000 (decriminalized)</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Small Company Half-Penalty under Section 446B</strong></td><td class="text-end"><strong>Halves Section 137(3) / 92(5) caps for small companies under Section 2(85)</strong></td></tr>
                        <tr><td>Section 164(2) Director Disqualification Risk</td><td class="text-end">5-year disqualification after 3 consecutive years of default</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free First Year Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20first-year%20compliance%20pack%20quote%20starting%20at%20Rs%2030%2C000." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">First-Year Compliance Timeline - Day-by-Day</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Day 30 - First board meeting; first auditor appointed</td><td class="text-end">Section 173 + Section 139(6)</td></tr>
                        <tr><td>Day 30 + 15 (Day 45) - ADT-1 filed</td><td class="text-end">Section 139(6) read with G.S.R. 359(E) - MANDATORY from 14 Jul 2025</td></tr>
                        <tr><td>Day 60 - Share certificates SH-1 issued to subscribers</td><td class="text-end">Section 56(4) - within 60 days of allotment</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Day 180 - INC-20A Commencement of Business filed</strong></td><td class="text-end"><strong>Section 10A + Rule 23A - HARD STOP, Rs 50k + Rs 1k/day penalty if missed</strong></td></tr>
                        <tr><td>End of first FY (31 March) - Statutory audit signed; financial statements adopted</td><td class="text-end">Section 134 + Section 143</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Within 9 months of FY end - First AGM held</strong></td><td class="text-end"><strong>Section 96 proviso - NO ROC extension available</strong></td></tr>
                        <tr><td>AGM + 30 days - First AOC-4 filed</td><td class="text-end">Section 137</td></tr>
                        <tr><td>AGM + 60 days - First MGT-7 or MGT-7A filed</td><td class="text-end">Section 92</td></tr>
                        <tr><td>30 September of next FY - First DIR-3 KYC for every DIN-holding director</td><td class="text-end">Rule 12A of Companies (Appointment and Qualification of Directors) Rules 2014</td></tr>
                        <tr><td>30 June of next FY - First DPT-3 if any deposit or non-deposit money received</td><td class="text-end">Rule 16A of Companies (Acceptance of Deposits) Rules 2014</td></tr>
                        <tr><td>Patron End-to-End First-Year Cycle</td><td class="text-end">9 to 15 months depending on incorporation date (Section 2(41) extended FY rule)</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; The first AGM has NO statutory extension</strong> under Section 96 proviso. Subsequent AGMs can be extended up to 3 months by ROC under Section 96(1) - but the first cannot. Default triggers Section 99 prosecution. For a company incorporated in February 2025 with first FY ending 31 March 2026 (extended FY under Section 2(41)), the first AGM must be held by <strong>31 December 2026</strong>. Plan backwards from this hard date.</p>
                    <p style="margin-top:12px;">For a personalised first-year calendar pinned to your actual incorporation date, call <a href="tel:+919459456700">+91 945 945 6700</a>. All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on incorporation date (affects extended FY rule), number of subscribers (share certificate volume), foreign promoter status (FC-GPR overlay), and whether the company has crossed the 180-day INC-20A window. Government fees, stamp duty, DSC charges, and audit firm fees are billed separately at actuals.</p>


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
            <h2 class="section-title">Why Use a CA + CS Firm for First-Year Compliance</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>INC-20A 180-Day Deadline Discipline</h3>
                <p>The single most common first-year default. Section 10A(2) penalty is Rs 50,000 + Rs 1,000/day per officer. Section 10A(3) authorises Section 248 strike-off. Patron calendars INC-20A in the first board meeting and files inside 90 days of incorporation as a default policy.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>ADT-1 Mandatory From 14 July 2025</h3>
                <p>G.S.R. 359(E) dated 30 May 2025 (Companies (Audit and Auditors) Amendment Rules 2025) made ADT-1 mandatory for first auditor appointment. Many founders and CA firms still follow the pre-July 2025 optional position. Patron files ADT-1 within 15 days of board appointment in every engagement.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Section 96 Proviso (9-Month) Lock</h3>
                <p>First AGM has no ROC extension - unlike subsequent AGMs which can be extended up to 3 months. Default triggers Section 99 prosecution. Patron locks the first AGM date in the first board meeting and calendars all dependent filings (audit, AOC-4 in 30 days, MGT-7A in 60 days) backwards from it.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Section 139(6) Backup Path</h3>
                <p>If the Board misses the 30-day window to appoint the first auditor, Section 139(6) allows members to appoint within 90 days via EGM ordinary resolution. Patron triggers this backup automatically, drafts the EGM notice, runs the resolution, and files ADT-1 within 15 days of the EGM.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>Section 2(41) Extended FY Mapping</h3>
                <p>If incorporated on or after 1 January, the first FY can extend up to 15 months. Founders often miss this and try to close books at 31 March of the same calendar year - triggering unnecessary audit costs and a wasted AOC-4. Patron maps the extended FY end correctly on Day 1.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>MGT-7 vs MGT-7A Classification</h3>
                <p>Per G.S.R. 880(E) dated 1 December 2025, small-company thresholds are Rs 10 cr paid-up + Rs 100 cr turnover. Newly incorporated companies typically qualify - file MGT-7A. Holding companies under Section 2(46) excluded from small-co status by proviso to Section 2(85) - must file full MGT-7. Patron locks classification on Day 1.</p>
            </article>
        </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by New-Generation Founders Across India</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>

                <h3 style="margin-top:24px;">First-Year Cycle Outcome Proof</h3>
                <ul>
                    <li><strong>340+ first-year compliance engagements</strong> in FY 2024-25 across SaaS, D2C, services, and manufacturing startups</li>
                    <li><strong>100 percent on-time INC-20A</strong> across all first-year clients - zero Section 10A(2) penalty exposures</li>
                    <li><strong>100 percent on-time first AGM</strong> - all clients held first AGM inside the 9-month Section 96 proviso window</li>
                    <li><strong>42 INC-20A late-filing recoveries</strong> for founders who came to us past the 180-day window - all closed without Section 248 strike-off proceedings</li>
                    <li>Multi-sector profile: 45% SaaS / tech, 22% D2C / e-commerce, 18% professional services, 15% manufacturing / industrial</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves first-year compliance engagements across all ROC jurisdictions. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies including newly incorporated subsidiaries and foreign-promoted Indian entities.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">First Year vs Ongoing Year Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>First Year (Year 1)</th><th>Ongoing (Year 2 onwards)</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Financial year length</td><td>Up to <strong>15 months</strong> under Section 2(41) if incorporated on or after 1 January</td><td>12 months (April to March)</td></tr>
                        <tr><td>AGM deadline from FY end</td><td><strong>9 months</strong> (Section 96 proviso)</td><td>6 months (Section 96 main)</td></tr>
                        <tr><td>AGM extension by ROC</td><td><strong>NOT available</strong></td><td>Up to 3 months available under Section 96(1)</td></tr>
                        <tr><td>Auditor appointment</td><td>Within 30 days by Board (Section 139(6)); 90 days by EGM if Board fails</td><td>5-year term at AGM (Section 139(1))</td></tr>
                        <tr><td>ADT-1 filing</td><td>Within 15 days of board appointment - <strong>MANDATORY from 14 Jul 2025</strong> per G.S.R. 359(E)</td><td>Within 15 days of AGM</td></tr>
                        <tr><td>INC-20A</td><td><strong>Within 180 days of incorporation</strong> (one-time) under Section 10A</td><td>Not applicable</td></tr>
                        <tr><td>Share certificates (SH-1)</td><td>Within 60 days of allotment under Section 56(4)</td><td>Within 60 days of allotment, only when shares allotted</td></tr>
                        <tr><td>DIR-3 KYC</td><td>First filing by 30 September after DIN allotment</td><td>Triennial from FY 2026-27 under G.S.R. 943(E) dated 31 December 2025 (effective 31 March 2026)</td></tr>
                        <tr><td>Director disqualification trigger</td><td>INC-20A non-filing under Section 10A(3) can trigger Section 248 strike-off; first auditor non-appointment blocks AOC-4 chain</td><td>3 consecutive defaults of AOC-4 / MGT-7 under Section 164(2)</td></tr>
                        <tr><td>Late-filing penalty cap (AOC-4 / MGT-7)</td><td>Section 403 Rs 100/day per form (no cap) + Section 137(3) / 92(5) penalty caps (Company Rs 2,00,000 / Officer Rs 50,000 post-2020 Amendment)</td><td>Same as Year 1 post-2020 Amendment</td></tr>
                        <tr><td>Patron fee</td><td>Rs 30,000 one-time (compliance pack); Rs 40,000 with monthly books</td><td>Rs 18,000 - Rs 35,000 annual retainer depending on company size</td></tr>


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
            <h2 class="section-title">Related Patron Services for Newly Incorporated Companies</h2>
            <div class="content-text">
                
                
                <p>First-year compliance connects naturally to other Patron service lines once the first AGM cycle closes:</p>
                <ul>
                    <li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance</strong></a> - the ongoing annual pack for year 2 onwards.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Pvt Ltd Annual Compliance</strong></a> - full annual filing bundle for established companies.</li>
                    <li><a href="/appointment-of-auditor"><strong>Appointment of Auditor</strong></a> - subsequent ADT-1 filing at AGM under Section 139(1).</li>
                    <li><a href="/appointment-of-director"><strong>Appointment of Director</strong></a> - DIR-12 and statutory register updates if board strength changes during year one.</li>
                    <li><a href="/dsc-registration"><strong>DSC Registration</strong></a> - new and renewed DSCs for every director and CFO authorised on the MCA portal.</li>
                    <li><a href="/director-kyc"><strong>Director KYC</strong></a> - DIR-3 KYC for every DIN holder; triennial from FY 2026-27 per G.S.R. 943(E).</li>
                    <li><a href="/compliance-calendar"><strong>Compliance Calendar</strong></a> - month-by-month tracker pinned to the company's actual incorporation date.</li>
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
                    <li><strong>Companies Act, 2013</strong> - Master statute. Key sections for first-year compliance: 2(41) financial year; 2(85) small company; 10A commencement of business; 12 registered office; 56(4) share certificate timeline; 92 annual return; 96 AGM (with 9-month proviso for first AGM); 134 directors' report; 137 financial-statement filing; 139(6) first auditor; 141 auditor qualifications; 143 audit; 147 auditor-default penalty; 173 board meetings; 248 strike-off; 403 additional fee for late filing; 446B half-penalty for small companies; 450 general penalty.</li>
                    <li><strong>Companies (Incorporation) Rules, 2014</strong> - <strong>Rule 23A</strong> prescribes Form INC-20A and the 180-day timeline under Section 10A.</li>
                    <li><strong>Companies (Accounts) Rules, 2014</strong> - <strong>Rule 8</strong> prescribes Form AOC-4 and the 30-day-from-AGM filing window.</li>
                    <li><strong>Companies (Audit and Auditors) Amendment Rules, 2025</strong> - <strong>G.S.R. 359(E) dated 30 May 2025, effective 14 July 2025</strong>. Substitutes Forms ADT-1 to ADT-4. Adds a specific "First Auditor" appointment category under "Nature of Appointment" dropdown. <strong>ADT-1 filing now mandatory for first auditor appointed by Board under Section 139(6).</strong> Previously optional best practice; some companies and CA firms still follow the pre-2025 position - which now risks Section 147 / 450 penalties.</li>
                    <li><strong>Companies (Specification of Definition Details) Amendment Rules, 2025</strong> - <strong>G.S.R. 880(E) dated 1 December 2025</strong>. Substitutes Rule 2(1)(t) - small company thresholds Rs 10 crore paid-up capital + Rs 100 crore turnover. Newly incorporated pvt ltds typically qualify for MGT-7A (signed by single director).</li>
                    <li><strong>Companies (Appointment and Qualification of Directors) Amendment Rules, 2025</strong> - <strong>G.S.R. 943(E) dated 31 December 2025, effective 31 March 2026</strong>. Substitutes Rule 12A introducing triennial DIR-3 KYC Web (one consolidated form replacing DIR-3 KYC + DIR-3 KYC Web). Affects subsequent KYC after first filing.</li>
                </ul>

                <h3 style="margin-top:24px;">Year 1 Penalty Exposure</h3>
                <ul>
                    <li><strong>INC-20A default (Section 10A(2)):</strong> <strong>Rs 50,000 on company + Rs 1,000 per day per officer in default.</strong> Section 10A(3) authorises ROC to initiate Section 248 strike-off if INC-20A is not filed.</li>
                    <li><strong>First auditor default (Section 147):</strong> Company - <strong>Rs 25,000 to Rs 5,00,000.</strong> Officers - separately liable. Plus Section 450 general penalty - Rs 10,000 + Rs 1,000/day per officer.</li>
                    <li><strong>AOC-4 / MGT-7 late filing (Section 403):</strong> Rs 100/day per form additional FEE, NO upper cap. Applies the moment any e-form is delayed past the statutory window. Independent of the penalty schedule below.</li>
                    <li><strong>Section 137(3) penalty for AOC-4 default (post-Companies (Amendment) Act 2020):</strong> Company - Rs 10,000 base + Rs 100/day continuing, capped <strong>Rs 2,00,000</strong>. Officer in default - Rs 10,000 base + Rs 100/day continuing, capped <strong>Rs 50,000</strong>. Decriminalized.</li>
                    <li><strong>Section 92(5) penalty for MGT-7 / MGT-7A default:</strong> Same post-2020 structure as Section 137(3) - Company cap Rs 2,00,000 / Officer cap Rs 50,000. Decriminalized.</li>
                    <li><strong>Section 446B half-penalty for small companies and OPCs:</strong> Halves Section 92 / 117 / 137 penalties. Newly incorporated pvt ltds qualifying as small companies under G.S.R. 880(E) benefit from this.</li>
                    <li><strong>First AGM default (Section 99):</strong> Prosecution of company and every officer in default. No ROC extension is available for the first AGM under Section 96 proviso.</li>
                    <li><strong>Section 164(2) director disqualification:</strong> 5-year disqualification after 3 consecutive years of AOC-4 / MGT-7 default. Relevant for second cycle onwards.</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for INC-20A, ADT-1, AOC-4, and MGT-7A e-form filing, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for G.S.R. 359(E) (14 July 2025 ADT-1 mandatory), G.S.R. 880(E) (1 December 2025 small-company thresholds), and G.S.R. 943(E) (31 December 2025 DIR-3 KYC triennial regime), and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text of Sections 2(41), 10A, 56(4), 96, 137, 139(6), 173, and 248.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on first-year compliance for newly incorporated private limited companies - covering the 9-item filing checklist, first AGM 9-month deadline, extended first FY rule under Section 2(41), ADT-1 mandatory regime from 14 July 2025, INC-20A 180-day clock, first board meeting requirements, MGT-7 vs MGT-7A choice, and first DIR-3 KYC timing.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What compliance is required after incorporating a private limited company in India?</h3>
                        <div class="faq-expanded__a"><p>Year-one compliance covers nine items: first board meeting within 30 days under Section 173, first auditor appointment under Section 139(6) plus ADT-1 within 15 days (mandatory from 14 July 2025 per G.S.R. 359(E)), INC-20A within 180 days under Section 10A, SH-1 share certificates within 60 days of allotment under Section 56(4), first AGM within 9 months of first FY end under Section 96 proviso, first AOC-4 within 30 days of AGM under Section 137, first MGT-7 or MGT-7A within 60 days of AGM under Section 92, first DIR-3 KYC by 30 September after DIN allotment, and DPT-3 by 30 June under Rule 16A if any deposit or non-deposit money received.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">When is the first AGM of a new company?</h3>
                        <div class="faq-expanded__a"><p>Within 9 months from the end of the first financial year under the proviso to Section 96 of the Companies Act 2013. No extension is available for the first AGM, unlike subsequent AGMs which can be extended up to 3 months by the ROC under Section 96(1). For a company with first FY ending 31 March 2026, the first AGM must be held by 31 December 2026. Default triggers Section 99 prosecution of the company and every officer in default.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long is the first financial year of a new company?</h3>
                        <div class="faq-expanded__a"><p>Up to 15 months if incorporated on or after 1 January, per Section 2(41) of the Companies Act 2013. The first FY can extend up to 31 March of the following calendar year. If incorporated before 1 January (i.e., between 1 April and 31 December), the first FY ends 31 March of the same calendar year - a window of less than 12 months. This extended-FY rule is unique to year one and affects all dependent filings (statutory audit timing, first AGM date, first AOC-4 / MGT-7A filing windows).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is ADT-1 mandatory for the first auditor?</h3>
                        <div class="faq-expanded__a"><p>Yes - from 14 July 2025. The Companies (Audit and Auditors) Amendment Rules, 2025, notified via G.S.R. 359(E) dated 30 May 2025 and effective 14 July 2025, made ADT-1 filing mandatory for first auditor appointment within 15 days of the board resolution under Section 139(6). Previously (pre-July 2025), ADT-1 for first auditor appointed by Board was optional best practice and many companies followed Rule 4(2) / MCA FAQ Question 35 which said it was not mandatory. Post-July 2025 this position has changed - the revised ADT-1 form on MCA V3 portal now includes a specific 'First Auditor' dropdown option and rejects placeholder SRNs. Non-filing risks Section 147 (Rs 25,000 to Rs 5,00,000) and Section 450 (Rs 10,000 + Rs 1,000/day per officer) penalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the deadline for INC-20A filing?</h3>
                        <div class="faq-expanded__a"><p>180 days from the date of incorporation, under Section 10A of the Companies Act 2013 read with Rule 23A of Companies (Incorporation) Rules, 2014. INC-20A is the declaration that subscribers have paid for their shares and the registered office has been verified under Section 12. Default attracts Section 10A(2) penalty - Rs 50,000 on the company and Rs 1,000 per day per officer in default. More seriously, Section 10A(3) authorises the ROC to initiate Section 248 strike-off proceedings if INC-20A is not filed - a far worse outcome than the monetary penalty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When must the first board meeting be held after incorporation?</h3>
                        <div class="faq-expanded__a"><p>Within 30 days of incorporation under Section 173 of the Companies Act 2013. This meeting typically appoints the first auditor under Section 139(6), authorises bank account opening, resolves to file INC-20A under Section 10A, approves registered-office address proof under Section 12, and opens the statutory register. Patron locks the first board meeting in the first 7 days of onboarding so all 30-day and 60-day deadlines have comfortable buffer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do new pvt ltd companies file MGT-7 or MGT-7A in year one?</h3>
                        <div class="faq-expanded__a"><p>Whichever applies based on Section 2(85) classification. A newly incorporated private company with paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore qualifies as a small company per G.S.R. 880(E) dated 1 December 2025 and files MGT-7A (simplified annual return signed by a single director). Above either threshold, OR if the company is a holding / subsidiary under Section 2(46) (excluded from small-co status by the proviso to Section 2(85)), MGT-7 (full annual return) applies. Most first-year pvt ltds file MGT-7A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">When is the first DIR-3 KYC due after incorporation?</h3>
                        <div class="faq-expanded__a"><p>By 30 September of the financial year following the year in which the DIN was allotted. For example, a director with DIN allotted in FY 2025-26 files first DIR-3 KYC by 30 September 2026. Subsequent KYC is now TRIENNIAL per Companies (Appointment and Qualification of Directors) Amendment Rules 2025 notified via G.S.R. 943(E) dated 31 December 2025 (effective 31 March 2026) - the substituted Rule 12A requires Form DIR-3 KYC Web filing once every 3 consecutive financial years by 30 June. Mobile / email / address changes must be filed within 30 days separately. Missing the first DIR-3 KYC deactivates the DIN; reactivation costs Rs 5,000 per director.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>First board meeting deadline?</strong> 30 days from incorporation under Section 173 of the Companies Act 2013.</p>
                <p><strong>First auditor appointment deadline?</strong> 30 days from incorporation by Board under Section 139(6); 90 days by EGM if Board fails.</p>
                <p><strong>ADT-1 filing for first auditor?</strong> 15 days from board appointment - MANDATORY from 14 July 2025 per G.S.R. 359(E) dated 30 May 2025 (Companies (Audit and Auditors) Amendment Rules 2025).</p>
                <p><strong>INC-20A deadline?</strong> 180 days from incorporation under Section 10A read with Rule 23A of Companies (Incorporation) Rules 2014.</p>
                <p><strong>INC-20A default penalty?</strong> Rs 50,000 on company + Rs 1,000/day per officer (Section 10A(2)); Section 10A(3) strike-off risk.</p>
                <p><strong>Share certificate (SH-1) deadline?</strong> 60 days from share allotment under Section 56(4).</p>
                <p><strong>First AGM deadline?</strong> 9 months from end of first FY under Section 96 proviso - NO ROC extension available.</p>
                <p><strong>First FY length?</strong> Up to 15 months if incorporated on or after 1 January (Section 2(41)).</p>
                <p><strong>First AOC-4 deadline?</strong> 30 days from first AGM under Section 137.</p>
                <p><strong>First MGT-7 / MGT-7A deadline?</strong> 60 days from first AGM under Section 92. MGT-7A for small companies under Section 2(85) per G.S.R. 880(E).</p>
                <p><strong>First DIR-3 KYC?</strong> By 30 September after DIN allotment FY; triennial thereafter per G.S.R. 943(E).</p>
                <p><strong>What does Patron charge?</strong> Rs 30,000 first-year pack (compliance only); Rs 40,000 with monthly bookkeeping; Rs 8,000 + actuals for INC-20A late-filing recovery.</p>
                <p><strong>Naya pvt ltd company compliance kaise kare?</strong> <em>9 cheezein file karni hain saal 1 mein - first board meeting (30 din), first auditor + ADT-1 (30+15 din), INC-20A (180 din), SH-1 share certificates (60 din), first AGM (9 mahine FY end ke baad), AOC-4 (30 din AGM ke baad), MGT-7A (60 din AGM ke baad), DIR-3 KYC (30 Sept tak), DPT-3 (30 June tak). ADT-1 ab mandatory hai 14 July 2025 se. Patron Rs 30,000 mein pura pack handle karta hai - call +91 945 945 6700.</em></p>
                <p><strong>First year filing kaise kare aur kab kare?</strong> <em>Date of incorporation se start hota hai. Pehla 30 din - board meeting + auditor. Pehla 45 din - ADT-1 file karna (mandatory). Pehla 60 din - share certificates issue karna. Pehla 180 din - INC-20A file karna (sabse important - Rs 50k + Rs 1k/day penalty + strike-off risk if missed). FY khatam hone ke 9 mahine baad - first AGM. AGM ke 30 din baad - AOC-4. AGM ke 60 din baad - MGT-7A. Patron har deadline ko calendar karta hai.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Two Clocks Running From Incorporation</h2>
            <div class="content-text">
                
                
                <p>Newly incorporated companies have two hard statutory clocks running from the date of incorporation, plus three event-based windows that compound the risk:</p>
                <ul>
                    <li><strong>180-day INC-20A clock under Section 10A</strong> - default attracts Rs 50,000 on company + Rs 1,000 per day per officer + Section 248 strike-off risk under Section 10A(3)</li>
                    <li><strong>9-month first AGM clock under Section 96 proviso</strong> - no ROC extension available, unlike subsequent AGMs; default triggers Section 99 prosecution of company and every officer in default</li>
                    <li><strong>30-day first board meeting + first auditor window</strong> under Sections 173 and 139(6) - missing this blocks the financial-statement signature chain, which blocks AOC-4 and MGT-7</li>
                    <li><strong>15-day ADT-1 window from auditor appointment</strong> - MANDATORY from 14 July 2025 per G.S.R. 359(E); previously optional best practice</li>
                    <li><strong>60-day SH-1 share certificate window</strong> from allotment under Section 56(4); stamp duty payable at state-specific rates</li>
                </ul>

                <p style="margin-top:16px;"><strong>Both major clocks run from the date of incorporation</strong>, not from when the founder remembers. Patron's first-year pack stitches all 9 filings + 6 event-based items into one timeline pinned to the company's actual incorporation date, supervised by CA and CS partners with 15+ years of post-incorporation experience.</p>

                <p style="margin-top:16px;"><strong>Get a Personalised First-Year Compliance Plan in 24 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20incorporated%20and%20need%20a%20first-year%20compliance%20plan%20with%20every%20deadline%20pinned%20to%20my%20incorporation%20date." target="_blank">WhatsApp us</a>. Free 20-minute scoping call. We respond within 2 hours during business hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: Year One Is the Highest-Risk Compliance Window</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Year one is the highest-risk compliance window in a company's life. Nine event-based or annual filings under five different statutes, plus a Section 96 proviso deadline that the ROC cannot extend, plus a Section 10A penalty regime that can trigger Section 248 strike-off. The 14 July 2025 MCA amendment (Companies (Audit and Auditors) Amendment Rules 2025 via G.S.R. 359(E)) added ADT-1 as a mandatory filing for first auditor - many founders and even some CA firms are still on the pre-2025 optional position, exposing the company to Section 147 and Section 450 penalties.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">The second-most overlooked item is the Section 2(41) extended FY rule - companies incorporated on or after 1 January can stretch the first FY up to 15 months, but founders often try to close books at 31 March of the same year and run unnecessary audit costs. Section 2(85) classification (G.S.R. 880(E) dated 1 December 2025 - Rs 10 cr paid-up + Rs 100 cr turnover) determines whether the company files MGT-7 or MGT-7A; most newly incorporated pvt ltds qualify for MGT-7A.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Patron's first-year pack stitches all 9 filings + 6 event-based items into one timeline pinned to the company's actual incorporation date, supervised by CA and CS partners with 15+ years of post-incorporation experience across SaaS, D2C, professional services, and manufacturing startups. Rs 30,000 one-time for the compliance pack; Rs 40,000 with monthly bookkeeping, GST, and TDS for the first FY. Rs 8,000 + actuals for INC-20A late-filing recovery if you've already crossed the 180-day window.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20first-year%20compliance%20pack%20quote%20starting%20at%20Rs%2030%2C000." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">First-Year Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. End-to-end first-year compliance pack (9 filings + 6 event-based items) delivered pan-India to newly incorporated private limited companies, OPCs, and Section 8 companies. Average 9 to 15 months full-cycle engagement from Day 1 onboarding to first MGT-7A filing.</p>
       
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise First-Year Compliance Pages</div>
                <div class="pa-block-sub">Local CA + CS team for newly incorporated companies</div>
                <div class="pa-city-grid">
                    <a href="/annual-compliance-first-year-after-incorporation/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">First-Year Compliance in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/annual-compliance-first-year-after-incorporation/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">First-Year Compliance in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/annual-compliance-first-year-after-incorporation/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">First-Year Compliance in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/annual-compliance-first-year-after-incorporation/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">First-Year Compliance in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Adjacent services for newly incorporated companies</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Compliance (Year 2+)</div><div class="pa-card-sub">Ongoing Annual Pack</div></div>
                    </a>
                    <a href="/appointment-of-auditor" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">ADT-1 at AGM</div></div>
                    </a>
                    <a href="/appointment-of-director" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">DIR-12</div></div>
                    </a>
                    <a href="/dsc-registration" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">DSC Registration</div><div class="pa-card-sub">Class 3 DSC</div></div>
                    </a>
                    <a href="/director-kyc" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">DIR-3 KYC Filing</div><div class="pa-card-sub">Triennial Web Form</div></div>
                    </a>
                    <a href="/compliance-calendar" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Compliance Calendar</div><div class="pa-card-sub">Month-by-Month Tracker</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026 (after first-year compliance cycle peaks in September-November). Review triggers include MCA amendment to ADT-1 framework (currently mandatory per G.S.R. 359(E) dated 30 May 2025, effective 14 July 2025), Section 2(85) small company threshold changes (currently per G.S.R. 880(E) dated 1 December 2025), DIR-3 KYC framework changes (currently triennial per G.S.R. 943(E) dated 31 December 2025), Section 10A INC-20A regime changes, Section 96 proviso revisions, and Companies (Incorporation) Rules Rule 23A amendments.</p>
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
