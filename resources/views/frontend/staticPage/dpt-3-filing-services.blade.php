
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
    <title>DPT-3 Filing Services</title>
    <meta name="description" content="DPT-3 return of deposits filing under Rule 16. Due 30 June 2026. Mandatory for all companies (even nil deposit). From Rs 3,000 standalone or Rs 35,000 bundled.">
    <link rel="canonical" href="/dpt-3-filing-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="DPT-3 Filing Services 2026 | Patron Accounting">
    <meta property="og:description" content="DPT-3 return of deposits filing under Rule 16. Due 30 June 2026. Mandatory for all companies (even nil deposit). From Rs 3,000 standalone or Rs 35,000 bundled.">
    <meta property="og:url" content="/dpt-3-filing-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/dpt-3-filing-services-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DPT-3 Filing Services 2026 | Patron Accounting">
    <meta name="twitter:description" content="DPT-3 return of deposits filing under Rule 16. Due 30 June 2026. Mandatory for all companies (even nil deposit). From Rs 3,000 standalone or Rs 35,000 bundled.">
    <meta name="twitter:image" content="/images/dpt-3-filing-services-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/dpt-3-filing-services#breadcrumb",
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
                        "name": "DPT-3 Filing Services in India",
                        "item": "/dpt-3-filing-services"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/dpt-3-filing-services#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is Form DPT-3 and who must file it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form DPT-3 is the annual return of deposits filed with the Registrar of Companies under Rule 16 and Rule 16A of the Companies (Acceptance of Deposits) Rules, 2014 read with Section 73 of the Companies Act, 2013. It must be filed by every non-government company in India - including private limited companies, public limited companies, OPCs, small companies, Section 8 companies, and Producer companies. LLPs are NOT covered. Banking companies, NBFCs, and housing finance companies are exempt under Rule 1(3)."
                }
            },
            {
                "@type": "Question",
                "name": "What is the due date for DPT-3 filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DPT-3 must be filed on or before 30 June every year, covering the position of outstanding deposits and exempted-deposit loans as on 31 March of the same calendar year. For FY 2025-26 (position as on 31 March 2026), the deadline is 30 June 2026. The deadline is absolute and the MCA has rarely granted extensions - in 2023 a one-time relaxation was granted till 31 July, but this is not the norm."
                }
            },
            {
                "@type": "Question",
                "name": "Do small companies and OPCs need to file DPT-3 even with no deposits?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. The DPT-3 obligation applies regardless of size or whether deposits have been accepted. Most small companies and OPCs file Purpose 3 - the 'exempted deposits' return - because they have outstanding director loans, customer advances, or other balances on 31 March that fall under exempted categories. Even where the company has ZERO outstanding balances, professional consensus recommends filing a nil DPT-3 (Purpose 3) to maintain a clean compliance record. The Rs 3,000 Patron fee is a small price for a clean audit trail."
                }
            },
            {
                "@type": "Question",
                "name": "Do loans from directors need to be reported in DPT-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes - and this is the most overlooked DPT-3 trigger for founder-funded private companies. A loan from a director is an exempted deposit (not a regulated deposit) ONLY if the director has filed a written declaration under Rule 2(1)(c)(viii) confirming that the loaned amount is the director's own funds and not borrowed. Where the declaration is missing, the loan is treated as a deposit - triggering Section 73 eligibility requirements and Section 73(6) penalties up to Rs 1 crore on the company. The director loan, whether declared or not, must be reported in DPT-3."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for non-filing of DPT-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Three layers of penalty apply. First, multiplier-based additional fee under Companies (Registration Offices and Fees) Rules - 2x normal fee for delays up to 30 days, escalating to 12x for delays beyond 180 days. Second, Rule 21 specific penalty - fine up to Rs 5,000 on the company and every officer in default, plus a further fine up to Rs 500 per day of continuing default. Third, where actual deposit violation exists (e.g. missing director declaration converts a loan into a deposit), Section 73(6) penalties on the company of up to Rs 1 crore and on officers of Rs 25 lakh to Rs 2 crore plus imprisonment up to 7 years."
                }
            },
            {
                "@type": "Question",
                "name": "Is auditor certificate mandatory for DPT-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Auditor certificate is mandatory only when DPT-3 is filed as Purpose 2 (return of deposits) or Purpose 4 (return of both deposits and exempted deposits). For Purpose 3 (return of exempted deposits only) - which is the most common scenario for small companies and OPCs - auditor certificate is NOT required. The MCA help kit is explicit on this. Many platforms request the certificate unnecessarily, costing clients additional time and money. Patron applies the correct logic and skips auditor coordination where not needed."
                }
            },
            {
                "@type": "Question",
                "name": "Do LLPs need to file DPT-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. DPT-3 applies only to companies registered under the Companies Act, 2013. LLPs are governed by the LLP Act, 2008 and file Form 8 (Statement of Account and Solvency) and Form 11 (Annual Return) under that separate statute. There is no DPT-3 equivalent for LLPs. If your entity is an LLP, the DPT-3 obligation does not arise."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between one-time return and annual return DPT-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The one-time return (Purpose 1) was a historical filing covering the period 1 April 2014 to 31 March 2019. It was a single, retrospective compliance to capture outstanding non-deposit loans for the five-year window post the Companies Act, 2013 commencement. The annual return (Purpose 2, 3, or 4 depending on scope) is the ongoing yearly filing required since the 22 January 2019 amendment to Rule 16A. New filings going forward use Purpose 2, 3, or 4 - the one-time return is no longer relevant."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/dpt-3-filing-services#service",
                "name": "DPT-3 Filing Services in India",
                "url": "/dpt-3-filing-services",
                "description": "Annual return of deposits (Form DPT-3) filing under Rule 16 and Rule 16A of Companies (Acceptance of Deposits) Rules, 2014 read with Section 73 of the Companies Act, 2013. Includes purpose classification across 4 radio buttons, director loan declaration under Rule 2(1)(c)(viii), auditor certificate coordination (Purpose 2 / 4 only), Form DPT-3 drafting per MCA Notification 29 August 2022, and MCA V3 portal submission. Due 30 June every year. Standalone Rs 3,000 to Rs 5,000 or bundled into the Rs 35,000 annual compliance package.",
                "serviceType": "Corporate Compliance Filing Service",
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
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    },
                    {
                        "@type": "Thing",
                        "name": "Registrar of Companies",
                        "sameAs": "https://en.wikipedia.org/wiki/Registrar_of_Companies_(India)"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "DPT-3 Filing Packages",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "DPT-3 Nil / Exempted Deposits Only (Purpose 3)",
                            "price": "3000",
                            "priceCurrency": "INR",
                            "description": "Most common scenario for small companies and OPCs. No actual deposits; only director loans / inter-corporate loans / customer advances outstanding (or zero balance). No auditor certificate required. Director declaration under Rule 2(1)(c)(viii) drafting included."
                        },
                        {
                            "@type": "Offer",
                            "name": "DPT-3 Return of Deposits (Purpose 2)",
                            "price": "4000",
                            "priceCurrency": "INR",
                            "description": "Where the company has accepted deposits under Section 73 of the Companies Act, 2013. Includes auditor certificate coordination, depositor schedule, and credit rating particulars where applicable."
                        },
                        {
                            "@type": "Offer",
                            "name": "DPT-3 Return of Both Deposits and Exempted (Purpose 4)",
                            "price": "5000",
                            "priceCurrency": "INR",
                            "description": "Mixed scenario - both actual deposits and exempted-deposit loans outstanding on 31 March. Full auditor certificate plus comprehensive loan schedule across all categories."
                        },
                        {
                            "@type": "Offer",
                            "name": "Annual Compliance Bundle (Essential) - DPT-3 Included Free",
                            "price": "35000",
                            "priceCurrency": "INR",
                            "description": "Full annual cycle: AOC-4, MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, DPT-3, MSME-1, statutory audit, ITR-6, statutory registers, board minutes. Dedicated CS, partner-CA review, automated compliance calendar. DPT-3 included free of charge."
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
                        DPT-3 Filing Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Audited financials, list of outstanding loans / advances, auditor certificate (if deposits reported), board resolution.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 3,000 (nil return) to Rs 5,000 (with deposits and auditor certificate) standalone OR free in annual bundle.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every non-government company in India: Pvt Ltd, Public Ltd, OPC, small company, Section 8. LLPs NOT covered.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Due 30 June every year covering position as on 31 March of preceding FY. FY 2025-26: due 30 June 2026.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 1,600+ FY24-25 DPT-3 Filings | 100% On-Time</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20DPT-3%20return%20of%20deposits%20for%20FY%202025-26." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - DPT-3 Filing Services'/>
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
                                <option value="dpt-3-filing-services" selected>DPT-3 Filing Services (this page)</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance</option>
                                <option value="small-company-annual-compliance">Small Co Annual Compliance</option>
                                <option value="aoc-4-filing-services">AOC-4 Filing Services</option>
                                <option value="mgt-7-filing-services">MGT-7 Filing Services</option>
                                <option value="dir-3-kyc-filing-services">DIR-3 KYC Filing</option>
                                <option value="llp-annual-compliance">LLP Annual Compliance</option>
                                <option value="private-limited-company-compliance">Pvt Ltd Compliance Hub</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I had no idea director loans triggered DPT-3. Patron caught it on intake, drafted the Rule 2(1)(c)(viii) declaration, and filed Purpose 3 in 4 days. Avoided Section 73(6) exposure entirely.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Aanya Rajan</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, SaaS Pvt Ltd</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Previous platform charged Rs 8,000 for DPT-3 with auditor certificate every year - even though we were Purpose 3. Switched to Patron at Rs 3,000 - same outcome, half the cost.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Varun Khan</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Trading Co</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Eligible public company with actual deposits - Purpose 2 plus credit rating particulars. Patron coordinated the auditor certificate and depositor schedule end-to-end. Clean filing, zero MCA queries.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjay Gupta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, NBFC subsidiary</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Was paying Rs 35-40k across various platforms for DPT-3, AOC-4, MGT-7, DIR-3 KYC, MSME-1. Patron bundled everything at Rs 35,000 with one CS and one calendar. Game changer.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Pooja Malhotra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, D2C Brand</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">LLP and we were getting DPT-3 reminders from a competing CA firm. Patron clarified in 5 minutes - DPT-3 doesn't apply to LLPs, we only file Form 8 and Form 11. Saved unnecessary work and fees.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Harish Rao</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Designated Partner, LLP</div>
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
                    <p>Free 15-minute consultation. Purpose classification on Day 1. Director declaration drafted where missing. Auditor certificate coordinated only where required (Purpose 2 / 4). Bundle into Rs 35,000 annual compliance package for materially better value.</p>
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
                <a href="#what-section" class="toc-btn">4 Filing Purposes</a>
                <a href="#who-section" class="toc-btn">Who Must File</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">7-Step Procedure</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA + CS</a>
                <a href="#comparison-section" class="toc-btn">Deposit vs Exempted</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: DPT-3 Filing at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - DPT-3 Filing Services Services at a Glance</strong></p>
                    <p><strong>DPT-3</strong> is the annual return of deposits under Rule 16 and Rule 16A of Companies (Acceptance of Deposits) Rules, 2014 read with Section 73 of the Companies Act, 2013. Due <strong>30 June every year</strong> for the position as on 31 March. Mandatory for every non-government company - even those with zero deposits (most small companies file the 'exempted deposits' nil version). LLPs are NOT covered. Late filing attracts multiplier-based additional fees plus Section 73 / Rule 21 specific penalties. Patron files from Rs 3,000 standalone or free in the Rs 35,000 annual bundle.</p>
                </div>
                <p>The annual filing was made mandatory via MCA Notification dated 22 January 2019, which inserted sub-rule (3) in Rule 16A. The form was last substituted by MCA Notification dated 29 August 2022. The most common filing scenario in practice is the 'exempted deposits' return (Purpose 3) where a small company reports outstanding loans (typically from directors or related entities) that fall outside the definition of 'deposit' but still require disclosure.</p>
                <p>Below is the quick-reference summary covering governing sections, applicability, the 30 June deadline, Patron's three-tier pricing by filing purpose (Rs 3k / 4k / 5k standalone, free in Rs 35k bundle), the three-layer penalty structure (multiplier additional fee + Rule 21 specific penalty + Section 73(6) deposit-violation penalties), the four-purpose radio-button matrix, and the ROC filing authority.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 73, 76, 73(6), 76A read with Rule 16 and Rule 16A of Companies (Acceptance of Deposits) Rules, 2014</td></tr>
                        <tr><td>Applicable To</td><td>Every non-government company: Private Limited, Public Limited, OPC, small company, Section 8, Producer companies. LLPs are NOT covered (different statute). Banking, NBFC, and housing finance companies exempt under Rule 1(3).</td></tr>
                        <tr><td>Timeline</td><td>Due <strong>30 June every year</strong>. Reports position as on 31 March of the same calendar year. FY 2025-26: due 30 June 2026.</td></tr>
                        <tr><td>Cost (Patron)</td><td>Standalone: Rs 3,000 (nil / exempted deposits only) | Rs 4,000 (return of deposits) | Rs 5,000 (both deposits and exempted). Free in full annual compliance bundle at Rs 35,000.</td></tr>
                        <tr><td>Penalty</td><td>Multiplier-based additional fee (2x to 12x by delay slab) PLUS Rule 21 fine Rs 5,000 + Rs 500/day continuing default PLUS Section 73(6) penalties (up to Rs 1 crore on company, Rs 25 lakh to Rs 2 crore + 7-year imprisonment on officers) where deposit violations exist.</td></tr>
                        <tr><td>Form / Portal</td><td>DPT-3 (4 filing purposes - one-time, deposits, exempted deposits, both) | MCA V3 portal | Form last substituted by MCA Notification dated 29 August 2022</td></tr>
                        <tr><td>Authority</td><td>Registrar of Companies (ROC), Ministry of Corporate Affairs</td></tr>
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
                <h2 class="section-title">The 4 DPT-3 Filing Purposes: Which One Applies to You?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>Form DPT-3 is the MCA e-form used to file the annual return of deposits (or particulars of money received that are not treated as deposits) with the Registrar of Companies under Rule 16 and Rule 16A of the Companies (Acceptance of Deposits) Rules, 2014. It captures the position of outstanding deposits and exempted-deposit loans as on 31 March of the relevant financial year.</p>

                    <p style="margin-top:16px;">Form DPT-3 carries four radio buttons under "Purpose of the Form". <strong>Selecting the wrong purpose triggers rejection and re-filing.</strong> Most small companies and OPCs land in Purpose 3 (exempted deposits only).</p>

                    <div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Purpose</th>
                                <th>When to Use</th>
                                <th>Auditor Certificate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>1. One-time return</strong></td><td>Already filed - covered the period 1 April 2014 to 31 March 2019 for outstanding loans not classified as deposits. No longer relevant for new filings.</td><td>Not required</td></tr>
                            <tr><td><strong>2. Return of deposits</strong></td><td>Where the company has accepted "deposits" within the meaning of Section 73 / Rule 2(1)(c) - typically eligible public companies that have taken public deposits.</td><td><strong>MANDATORY</strong> - to be attached</td></tr>
                            <tr><td><strong>3. Return of particulars not considered as deposits (exempted deposits)</strong></td><td>Where the company has only outstanding loans / advances that fall under exempted categories - director loans, inter-corporate loans, customer advances, employee deposits. <strong>THIS IS THE MOST COMMON SCENARIO</strong> for small companies and OPCs.</td><td>NOT required</td></tr>
                            <tr><td><strong>4. Return of both deposits AND exempted deposits</strong></td><td>Where the company has BOTH actual deposits and exempted-deposit loans outstanding. Common for companies that mix director funding with eligible-deposit programmes.</td><td><strong>MANDATORY</strong> - to be attached</td></tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="highlight-box" style="margin-top:24px;background:#E8F5E9;border-left:4px solid #10B981;">
                        <p><strong>&#10003; Key clarification on the "no deposit" filing:</strong> even if a company has ZERO deposits and ZERO exempted-deposit loans on 31 March, professional consensus recommends filing a nil DPT-3 (Purpose 3) to maintain a clean compliance record. The MCA portal does not block this; the audit trail it creates is worth more than the Rs 3,000 filing fee.</p>
                    </div>

                    <h3 style="margin-top:32px;">What Counts as "Loans Not Considered Deposits" (Purpose 3 Scope)</h3>
                    <p>The most under-appreciated DPT-3 trigger is outstanding loans from directors. Even where the company has never taken a single public deposit, the following balances as on 31 March trigger DPT-3 reporting:</p>
                    <ul style="margin-top:16px;">
                        <li>Loans from directors or relatives of directors (declared as own funds, not borrowed)</li>
                        <li>Loans from other body corporates (inter-corporate loans)</li>
                        <li>Loans from banks, public financial institutions, insurance companies, foreign governments / banks</li>
                        <li>Advances received from customers for supply of goods or services (pending beyond timelines)</li>
                        <li>Security deposits from employees (non-interest bearing, not exceeding annual salary)</li>
                        <li>Subscriptions to securities and calls in advance</li>
                        <li>Convertible notes above Rs 25 lakh from a single person (startup-specific)</li>
                        <li>Amounts received from government or guaranteed by government</li>
                    </ul>

                    <p style="margin-top:16px;"><strong>All of the above are NOT deposits under the strict Companies Act definition</strong> - they fall under exempted categories - but they must still be reported in DPT-3 if outstanding on 31 March. This is why founder-funded startups and family-owned companies almost always have a DPT-3 filing obligation, even when they think they don't.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for DPT-3 Filing Services:</strong></p>
                    
                    <p><strong>Form DPT-3:</strong> MCA e-form for annual return of deposits (or particulars not considered as deposits) under Rule 16 and Rule 16A of Companies (Acceptance of Deposits) Rules, 2014. Form last substituted by MCA Notification dated 29 August 2022.</p>
                    <p><strong>Rule 16:</strong> Annual return of deposits - filed by every company that has accepted deposits, on or before 30 June every year, with position as on 31 March.</p>
                    <p><strong>Rule 16A:</strong> Return of exempted deposits - sub-rule (3) inserted via Companies (Acceptance of Deposits) Amendment Rules, 2019 dated 22 January 2019 - makes annual filing mandatory for every non-government company even where no deposits exist.</p>
                    <p><strong>Rule 1(3):</strong> Exempt categories - banking companies regulated by RBI under Banking Regulation Act, 1949; NBFCs registered with RBI; HFCs under the National Housing Bank Act; LLPs (different statute).</p>
                    <p><strong>Rule 2(1)(c):</strong> Definition of "deposit" with 14 sub-clauses of exemptions covering director loans, inter-corporate loans, bank borrowings, customer advances, employee security deposits, government grants, convertible notes above Rs 25 lakh, etc.</p>
                    <p><strong>Rule 2(1)(c)(viii):</strong> Director loan exemption conditional on written declaration that loaned amount is the director's own funds and not borrowed. <strong>Missing this declaration converts the loan into a regulated "deposit" and triggers Section 73 eligibility requirements.</strong></p>
                    <p><strong>Rule 21:</strong> Specific penalty for non-filing - fine up to Rs 5,000 on the company and every officer in default, plus a further fine up to Rs 500 per day of continuing default.</p>
                    <p><strong>Section 73 (Companies Act, 2013):</strong> Prohibition on acceptance of deposits from public, eligibility conditions, and penalty under Section 73(6) for unauthorised acceptance - up to Rs 1 crore on company; officer fine Rs 25 lakh to Rs 2 crore + imprisonment up to 7 years.</p>
                    <p><strong>Section 76:</strong> Acceptance of deposits by eligible public companies from public. Section 76A prescribes penalties for contravention.</p>
                    <p><strong>Net Worth (for DPT-3):</strong> Paid-up capital + free reserves + securities premium less accumulated losses, as on 31 March.</p>
                    <p><strong>Auditor Certificate:</strong> Required for Purpose 2 (return of deposits) and Purpose 4 (both deposits and exempted) only - NOT required for Purpose 3 (exempted deposits only).</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DPT-3 Filing Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Annual Return</span>
                        <strong>Due 30 June</strong>
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
            <h2 class="section-title">Who Must File DPT-3? (and Who Is Exempt)</h2>
            <div class="content-text">
                
                
                <p>Every non-government company in India must file DPT-3 every year - <strong>regardless of size, status, or whether actual deposits have been accepted</strong>. The applicable universe includes:</p>

                <ul>
                    <li>Private Limited Companies (including small companies under Section 2(85))</li>
                    <li>Public Limited Companies (listed and unlisted)</li>
                    <li>One Person Companies (OPCs)</li>
                    <li>Section 8 Companies (non-profit)</li>
                    <li>Producer Companies</li>
                    <li>Wholly-owned subsidiaries of foreign companies</li>
                </ul>

                <h3 style="margin-top:24px;">Exempt Categories (Under Rule 1(3) and Industry Status)</h3>
                <ul>
                    <li>Government companies (51 percent or more share capital held by Central or State Government)</li>
                    <li>Banking companies regulated by RBI under the Banking Regulation Act, 1949</li>
                    <li>Non-Banking Financial Companies (NBFCs) registered with RBI</li>
                    <li>Housing Finance Companies (HFCs) under the National Housing Bank Act</li>
                    <li>Limited Liability Partnerships (LLPs) - governed by LLP Act 2008, not Companies Act 2013</li>
                </ul>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>&#9888; LLP non-applicability is the single most common point of confusion.</strong> LLPs file Form 8 and Form 11 under the LLP Act - NOT DPT-3. If your entity is an LLP, this page does not apply to you; see LLP Annual Compliance instead.</p>
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
            <h2 class="section-title">What Patron Delivers in DPT-3 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Purpose Classification on Intake</strong></td><td>Map every outstanding loan / advance balance on 31 March against Section 73 and Rule 2(1)(c) definitions. Director loans, inter-corporate loans, customer advances, employee deposits, government grants - each classified. The correct DPT-3 radio button (Purpose 1, 2, 3, or 4) locked before drafting.</td></tr>
                        <tr><td><strong>2. Auditor Certificate Coordination</strong></td><td>For Purpose 2 and Purpose 4 (where actual deposits are reported), auditor certificate is mandatory. Patron coordinates with the company's statutory auditor for the certificate. For Purpose 3 (exempted deposits only) no auditor certificate is required - we save the client both time and money.</td></tr>
                        <tr><td><strong>3. Form Drafting and Attachment Compilation</strong></td><td>Form DPT-3 drafted with CIN, financial year, net worth, charge particulars, credit rating where applicable, depositor list, outstanding deposit / loan figures. Attachments compiled per Rule 16 and the MCA help kit.</td></tr>
                        <tr><td><strong>4. DSC Application and MCA V3 Portal Submission</strong></td><td>Form digitally signed by the Director / KMP authorised by the board. Filed via Patron's MCA V3 portal access. Government filing fee paid (Rs 200 to Rs 600 based on capital slab). SRN captured and saved.</td></tr>
                        <tr><td><strong>5. Director Loan Documentation Trail</strong></td><td>Where the company has loans from directors, we ensure the director declaration under Rule 2(1)(c)(viii) is on file - confirming the loaned amount is the director's own funds and not borrowed. Missing this declaration converts an exempted loan into a "deposit" and triggers Section 73 penalties.</td></tr>
                        <tr><td><strong>6. Bundle Upgrade to Full Annual Compliance</strong></td><td>DPT-3 is one of 6+ filings in the Patron annual compliance bundle at Rs 35,000. Single intake, single calendar, single accountable owner. Most clients save Rs 5,000 to 10,000 vs buying forms separately.</td></tr>


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
            <h2 class="section-title">DPT-3 Filing Process: 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs DPT-3 as a structured 7-step engagement. From balance review and purpose classification (Day 1-2) to MCA V3 portal submission and acknowledgement (Day 5-6), the typical turnaround is 3-5 working days. CCFS-2026 amnesty considerations applied where backlog cleanup is sequenced before current-year filing.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Balance Review and Purpose Classification (Day 1-2)</h3>
                        <p class="step-description">Outstanding loans, advances, and deposits as on 31 March extracted from audited or provisional books. Each entry classified as deposit / exempted deposit / not in scope per Section 73 and Rule 2(1)(c). Correct DPT-3 radio button (Purpose 1, 2, 3, or 4) locked before drafting.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                31 March balance scan
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 73 + Rule 2(1)(c)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Purpose locked
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="55" y="46" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">31 MAR</text>
                                    <rect x="25" y="68" width="18" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="34" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">P 1</text>
                                    <rect x="45" y="68" width="18" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="54" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">P 2</text>
                                    <rect x="65" y="68" width="18" height="8" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="74" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">P 3</text>
                                    <rect x="85" y="68" width="18" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="94" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">P 4</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Purpose Locked</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Director Loan Declaration Check (Day 2)</h3>
                        <p class="step-description">Where any director loan exists, confirm written declaration under Rule 2(1)(c)(viii) is on file - that loaned amount is the director's own funds and not borrowed. Where missing, declaration drafted and signed before filing. Missing declaration converts loan into 'deposit' and triggers Section 73 penalties.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 2(1)(c)(viii) check
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Declaration drafted
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 73 risk averted
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">DIRECTOR DECLARATION</text>
                                    <text x="36" y="46" font-size="6" fill="#14365F" font-weight="700" font-family="Arial">Rule 2(1)(c)(viii)</text>
                                    <line x1="30" y1="55" x2="90" y2="55" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="30" y1="63" x2="80" y2="63" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <circle cx="88" cy="68" r="5" fill="#10B981"/>
                                    <path d="M85 68l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Declaration On File</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Auditor Certificate (Day 2-4, Purpose 2 or 4 only)</h3>
                        <p class="step-description">For Purpose 2 (return of deposits) and Purpose 4 (both deposits and exempted), statutory auditor issues certificate confirming the deposit position. Format per MCA help kit; UDIN tagged. For Purpose 3 (most common scenario for small companies), this step is SKIPPED - saving Rs 5,000 to 10,000 in unnecessary coordination time.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Statutory auditor coord
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                UDIN tagged
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Skipped for Purpose 3
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PURPOSE</text>
                                    <text x="40" y="46" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">2 / 4</text>
                                    <text x="40" y="57" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CA CERT</text>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDIN</text>
                                    <text x="88" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TAGGED</text>
                                    <circle cx="88" cy="58" r="4" fill="#10B981"/>
                                    <path d="M85 58l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Cert (if needed)</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Form Drafting and Attachment Compilation (Day 4-5)</h3>
                        <p class="step-description">Form DPT-3 drafted with CIN, financial year, net worth from audited balance sheet, depositor list, outstanding amounts, charge particulars (Section 77 CHG-1 / CHG-4 SRN where applicable), credit rating where applicable. Attachments compiled per Rule 16 and MCA help kit.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Net worth calculated
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Depositor schedule
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MCA help-kit format
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="12" fill="#14365F"/>
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">DPT-3</text>
                                    <line x1="31" y1="40" x2="57" y2="40" stroke="#E8712C" stroke-width="1.5" stroke-linecap="round"/>
                                    <line x1="31" y1="48" x2="55" y2="48" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="56" x2="57" y2="56" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="64" x2="53" y2="64" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="68" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="83" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RULE 16</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Form Ready</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Board Resolution and DSC (Day 5)</h3>
                        <p class="step-description">Board resolution authorising filing and signatory recorded in minute book. Form digitally signed by Director / CEO / CFO / Manager with active Class 3 DSC. Active DIN of the signatory verified on MCA portal.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Board resolution
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Class 3 DSC affixed
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Active DIN verified
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BOARD</text>
                                    <text x="40" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RESOLUTION</text>
                                    <line x1="28" y1="55" x2="52" y2="55" stroke="#E8712C" stroke-width="1" stroke-linecap="round"/>
                                    <line x1="28" y1="62" x2="48" y2="62" stroke="#14365F" stroke-width="0.8" stroke-linecap="round" opacity="0.5"/>
                                    <path d="M62 47l8 0M70 47l-3 -3M70 47l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="55" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CLASS 3</text>
                                    <text x="88" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text>
                                    <circle cx="88" cy="65" r="5" fill="#10B981"/>
                                    <path d="M85 65l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">DSC Signed</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">MCA V3 Portal Submission (Day 5-6)</h3>
                        <p class="step-description">Form uploaded via Patron's MCA V3 portal access. Government filing fee paid by authorised capital slab (Rs 200 to Rs 600 per document). SRN captured. Filing tagged in compliance calendar.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MCA V3 upload
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Govt fee paid
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
                                    <text x="42" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MCA V3</text>
                                    <text x="42" y="46" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PORTAL</text>
                                    <circle cx="42" cy="56" r="4" fill="#10B981"/>
                                    <path d="M39 56l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <path d="M64 42l6 0M70 42l-2 -2M70 42l-2 2" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="88" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SRN</text>
                                    <text x="88" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SAVED</text>
                                </svg>
                            </div>
                            <span class="illustration-label">DPT-3 Filed</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">Acknowledgement and Audit Trail (Day 6)</h3>
                        <p class="step-description">SRN saved in compliance calendar. Acknowledgement PDF downloaded and circulated. Filing pack archived for the seven-year audit retention period under Section 128 of the Companies Act, 2013.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN logged
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                PDF acknowledged
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                7-year retention
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
                                    <text x="60" y="32" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ACKNOWLEDGEMENT</text>
                                    <text x="60" y="50" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SRN PDF</text>
                                    <text x="60" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">7-YEAR RETENTION</text>
                                    <circle cx="60" cy="72" r="4" fill="#10B981"/>
                                    <path d="M57 72l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Closure Done</span>
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
            <h2 class="section-title">Document Checklist for DPT-3 Filing</h2>
            <div class="content-text">
                
                
                <p>The documents below cover all four filing purposes. Patron prepares missing items in-house wherever feasible and coordinates with the statutory auditor for the certificate where Purpose 2 / 4 applies.</p>

                <h3 style="margin-top:24px;">Financial Records</h3>
                <ul>
                    <li>Audited balance sheet as on 31 March (or provisional if audit not yet complete)</li>
                    <li>Schedule of outstanding deposits as on 31 March (where deposits exist)</li>
                    <li>Schedule of exempted-deposit loans as on 31 March - director loans, inter-corporate loans, customer advances, employee deposits</li>
                    <li>Net worth calculation as on 31 March (paid-up capital + free reserves + securities premium less accumulated losses)</li>
                </ul>

                <h3 style="margin-top:24px;">Declarations and Certificates</h3>
                <ul>
                    <li>Director declaration under Rule 2(1)(c)(viii) for each director loan - confirming funds are director's own and not borrowed</li>
                    <li>Auditor certificate (mandatory for Purpose 2 and Purpose 4 only - return of deposits with or without exempted deposits)</li>
                    <li>Board resolution authorising DPT-3 filing and signatory</li>
                </ul>

                <h3 style="margin-top:24px;">Statutory References</h3>
                <ul>
                    <li>Particulars of charges under Section 77 (if applicable) - CHG-1 / CHG-4 SRN references</li>
                    <li>Credit rating particulars (where applicable - eligible public companies under Section 76)</li>
                </ul>

                <h3 style="margin-top:24px;">Signatory Documents</h3>
                <ul>
                    <li>Active DIN, DSC (Class 3), and PAN of the Director / KMP signing the form</li>
                    <li>CIN and active company status on MCA portal</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common DPT-3 Pain Points - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. "We never took deposits - we don't need to file DPT-3"</strong></td>
                            <td>This is the single most common DPT-3 misconception among founder-funded private companies. The rule is binary: if any outstanding loan / advance balance exists on 31 March - including director loans, inter-corporate loans, or customer advances - DPT-3 is required (Purpose 3).</td>
                            <td>Patron files the right purpose every year so the compliance record stays clean. Even where balance is zero, professional consensus recommends a nil DPT-3 (Purpose 3) for audit trail - we recommend this.</td>
                        </tr>
                        <tr>
                            <td><strong>2. Director loan converted into deposit due to missing declaration</strong></td>
                            <td>Under Rule 2(1)(c)(viii), a loan from a director is exempt from "deposit" definition ONLY if the director files a written declaration that the loaned amount is the director's own funds and not borrowed. Missing declaration converts the loan into a "deposit" - triggering Section 73 eligibility and harsh penalties under Section 73(6) / 76A.</td>
                            <td>Patron ensures the declaration is on file for every director loan BEFORE DPT-3 is filed. Where missing, we draft and obtain signature as Step 2 of the engagement.</td>
                        </tr>
                        <tr>
                            <td><strong>3. LLP partners assume DPT-3 applies to them</strong></td>
                            <td>LLP designated partners often ask about DPT-3 because they hear it discussed alongside their other filings. DPT-3 does NOT apply to LLPs - LLPs are governed by the LLP Act, 2008 and file Form 8 and Form 11 under that separate statute.</td>
                            <td>Patron clarifies this on intake and routes LLP clients to the correct LLP annual cycle.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Auditor certificate ordered unnecessarily for Purpose 3 filings</strong></td>
                            <td>Many platforms automatically request an auditor certificate for every DPT-3 filing, even when the company is filing Purpose 3 (exempted deposits only). The MCA help kit is explicit - certificate is required only for Purpose 2 and Purpose 4.</td>
                            <td>Patron applies the correct logic and saves the client Rs 5,000 to 10,000 in unnecessary auditor coordination time. Purpose 3 filings skip the auditor step entirely.</td>
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
            <h2 class="section-title">DPT-3 Filing Pricing: Standalone or Bundle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>DPT-3 Nil / Exempted Deposits Only (Purpose 3)</strong> - Most common scenario for small companies and OPCs. No actual deposits; only director loans / inter-corporate loans / customer advances outstanding (or zero balance). No auditor certificate required. Director declaration drafting included.</td><td class="text-end">Rs 3,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>DPT-3 Return of Deposits (Purpose 2)</strong> - Where the company has accepted "deposits" under Section 73. Includes auditor certificate coordination, depositor schedule, credit rating particulars where applicable.</td><td class="text-end">Rs 4,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>DPT-3 Return of Both Deposits and Exempted (Purpose 4)</strong> - Mixed scenario - both actual deposits and exempted-deposit loans outstanding. Full auditor certificate plus comprehensive loan schedule.</td><td class="text-end">Rs 5,000 (Exl GST and Govt fees)</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>BUNDLE - Patron Annual Compliance (Recommended)</strong> - Full annual cycle: AOC-4, MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, DPT-3, MSME-1, statutory audit, ITR-6, statutory registers, board minutes. Dedicated CS, partner-CA review, automated calendar.</td><td class="text-end"><strong>Rs 35,000 (Essential bundle - DPT-3 FREE)</strong></td></tr>
                        <tr><td>Standalone Buying All Forms Separately (no central calendar)</td><td class="text-end">Rs 30,000 to Rs 50,000 typical</td></tr>
                        <tr><td>Government Filing Fee under Companies (Registration Offices and Fees) Rules 2014</td><td class="text-end">Rs 200 to Rs 600 by authorised capital slab</td></tr>
                        <tr><td>Multiplier-Based Additional Fee for Late Filing</td><td class="text-end">2x to 12x normal fee by delay slab</td></tr>
                        <tr><td>Rule 21 Specific Penalty - Non-Filing of DPT-3</td><td class="text-end">Rs 5,000 fine on company + Rs 5,000 on every officer in default + Rs 500/day continuing default</td></tr>
                        <tr><td>Section 73(6) - Unauthorised Acceptance of Deposits (Company)</td><td class="text-end">Fine Rs 1 crore or 2x deposit amount, whichever is LOWER</td></tr>
                        <tr><td>Section 73(6) - Officer in Default</td><td class="text-end">Rs 25 lakh to Rs 2 crore + imprisonment up to 7 years</td></tr>
                        <tr><td>Section 76A - Contravention of Section 76 (Eligible Public Companies)</td><td class="text-end">Similar penalty structure to Section 73(6)</td></tr>
                        <tr><td>DSC Charges and Stamp Duty on Resolutions</td><td class="text-end">At actuals</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free DPT-3 Filing Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20quote%20for%20DPT-3%20filing%20-%20standalone%20or%20bundled." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DPT-3 Filing Timeline (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Financial year ends</td><td class="text-end">31 March 2026</td></tr>
                        <tr><td>DPT-3 reporting reference date (position reported)</td><td class="text-end">31 March 2026</td></tr>
                        <tr><td>Statutory audit completion (recommended for Purpose 2 / 4)</td><td class="text-end">By May 2026 (under Section 143)</td></tr>
                        <tr><td>Auditor certificate for DPT-3 (Purpose 2 / 4 only)</td><td class="text-end">Before 30 June 2026</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>DPT-3 Filing Deadline (FY 2025-26)</strong></td><td class="text-end"><strong>30 June 2026</strong></td></tr>
                        <tr><td>Late filing window with multiplier fee</td><td class="text-end">Open after 30 June 2026 - additional fee escalates 2x / 4x / 6x / 10x / 12x by delay slab</td></tr>
                        <tr><td>Rule 21 specific penalty trigger</td><td class="text-end">Starts accruing from 1 July 2026 - Rs 5,000 + Rs 500/day continuing default</td></tr>
                        <tr><td>Patron turnaround (data finalised to filing)</td><td class="text-end">3 to 5 working days</td></tr>
                        <tr><td>MCA portal availability for DPT-3 e-form</td><td class="text-end">MCA V3 portal - year-round access; form revised version active per MCA Notification 29 August 2022</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Recommended Filing Window (avoid last-week portal load)</strong></td><td class="text-end"><strong>15 May to 15 June 2026</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; The 30 June deadline is absolute.</strong> MCA has historically granted extensions only in exceptional circumstances (e.g. one-time relaxation to 31 July 2023). Missing it triggers three layers of penalty: multiplier-based additional fee (2x to 12x), Rule 21 specific penalty (Rs 5,000 + Rs 500/day on company and every officer in default), and where actual deposit violation exists (e.g. missing director declaration converts a loan into a deposit), Section 73(6) penalties up to Rs 1 crore on company and Rs 25 lakh to Rs 2 crore on officers plus imprisonment up to 7 years.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on filing purpose (1, 2, 3, or 4), presence of director loans (declaration drafting), need for auditor certificate (Purpose 2 / 4 only), and whether the engagement is standalone or part of the full annual compliance bundle. Government filing fees and DSC charges are billed separately at actuals.</p>


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
            <h2 class="section-title">Why Use a CA Firm for DPT-3</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Director Loan Reporting Awareness</h3>
                <p>Founders almost never realise their own loans to the company trigger DPT-3 (Purpose 3) every year. A CA firm runs the balance scan and catches this on intake - the single most overlooked DPT-3 trigger for founder-funded private companies.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>Rule 2(1)(c)(viii) Declaration Discipline</h3>
                <p>Missing the director declaration converts an exempted loan into a regulated "deposit", triggering Section 73 eligibility requirements and Section 73(6) / 76A penalties up to Rs 1 crore. Patron ensures the declaration is on file BEFORE filing - not after.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>LLP Confusion Resolved</h3>
                <p>DPT-3 does not apply to LLPs. A CA firm clarifies entity-type applicability before any filing fee is charged. LLPs file Form 8 and Form 11 under the LLP Act 2008 - not DPT-3 under the Companies Act 2013.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Auditor Certificate Logic Correct</h3>
                <p>Required for Purpose 2 / 4 only, not for Purpose 3 (most common scenario for small companies). Many platforms charge for auditor coordination unnecessarily - costing clients Rs 5,000 to 10,000 in avoidable fees. Patron applies the correct logic per MCA help kit.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>Bundle Economics Optimised</h3>
                <p>DPT-3 is one of six annual forms. Buying each one separately totals Rs 30,000 to 50,000 - the same as the full annual bundle at Rs 35,000, but without a central calendar, partner-CA continuity, or accountable owner. The bundle is materially better value.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Section 73(6) / 76A Penalty Awareness</h3>
                <p>Where DPT-3 is not filed because director declaration was missing AND the loan is reclassified as deposit, Section 73(6) penalties may apply on top of Rule 21 - up to Rs 1 crore on company, Rs 25 lakh to Rs 2 crore on officers + 7-year imprisonment. Patron's intake check prevents this scenario.</p>
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
                    <li>Patron filed <strong>1,600+ DPT-3 returns</strong> across Purpose 2, Purpose 3, and Purpose 4 scenarios with a <strong>100 percent on-time rate</strong></li>
                    <li><strong>Sub-1 percent MCA query rate</strong> across all filings (well below industry average)</li>
                    <li><strong>Director-loan declaration coverage at 100 percent</strong> on filings - zero loans converted into deposits due to missing declarations</li>
                    <li>Multi-purpose handling: 60% Purpose 3 (small co + OPC + founder-funded private companies); 25% Purpose 2 (eligible public companies with deposits); 15% Purpose 4 (mixed scenarios)</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves DPT-3 filings across India. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies. Both in-person and remote engagement modes supported.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Counts as a 'Deposit' vs 'Exempted Deposit': The Real Test</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Balance Type</th><th>Classification</th><th>Reporting in DPT-3</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Loan from a director <strong>(WITH Rule 2(1)(c)(viii) declaration)</strong></td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Loan from a director <strong>(WITHOUT declaration)</strong></td><td>Treated as deposit</td><td>Purpose 2 - report; auditor certificate; triggers Section 73 eligibility</td></tr>
                        <tr><td>Loan from relative of director (private company only)</td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Loan from another company (inter-corporate)</td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Loan from bank / public financial institution / insurance company</td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Customer advance for goods / services (within timelines)</td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Customer advance pending beyond timelines</td><td>May convert to deposit - review with CA</td><td>Possibly Purpose 2 - check classification carefully</td></tr>
                        <tr><td>Security deposit from employee (not exceeding annual salary, non-interest bearing)</td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Subscription to securities / call in advance</td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Convertible note above Rs 25 lakh from single person (startup-specific)</td><td>Conditional - may be exempted if conditions met</td><td>Purpose 3 if conditions met; verify with CA</td></tr>
                        <tr><td>Amount received from government / government-guaranteed</td><td>Exempted deposit</td><td>Purpose 3 - report; no auditor certificate</td></tr>
                        <tr><td>Public deposit from non-related party for fixed term (eligible public companies)</td><td>Deposit under Section 73</td><td>Purpose 2 - report; auditor certificate mandatory</td></tr>


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
                
                
                <p>DPT-3 is one of six annual MCA filings for a private limited company. If you are filing DPT-3, you almost certainly need the rest too:</p>
                <ul>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Private Limited Company Annual Compliance</strong></a> - the full bundle covering DPT-3, AOC-4, MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, MSME-1, audit, and ITR-6 at Rs 35,000 fixed fee.</li>
                    <li><a href="/small-company-annual-compliance"><strong>Small Company Annual Compliance</strong></a> - the specialised package for Section 2(85) small companies.</li>
                    <li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance</strong></a> - the broader Pvt Ltd hub.</li>
                    <li><a href="/aoc-4-filing-services"><strong>AOC-4 Filing Services</strong></a> - financial statements filing within 30 days of AGM.</li>
                    <li><a href="/mgt-7-filing-services"><strong>MGT-7 Filing Services</strong></a> - annual return filing within 60 days of AGM.</li>
                    <li><a href="/dir-3-kyc-filing-services"><strong>DIR-3 KYC Filing Services</strong></a> - annual director KYC by 30 September.</li>
                    <li><a href="/llp-annual-compliance"><strong>LLP Annual Compliance</strong></a> - the LLP parallel (DPT-3 does NOT apply to LLPs; Form 8 and Form 11 do).</li>
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
                    <li><strong>Companies Act, 2013</strong> - Sections 73 (acceptance of deposits from members), 76 (acceptance of deposits from public), 73(6) (penalty for unauthorised acceptance), 76A (penalty for contravention of Section 76)</li>
                    <li><strong>Companies (Acceptance of Deposits) Rules, 2014</strong> - Rule 1(3) (exempt companies), Rule 2(1)(c) (definition of "deposit" and exemptions), Rule 16 (annual return of deposits), Rule 16A(3) (annual return of exempted deposits), Rule 21 (specific penalty for non-filing)</li>
                    <li><strong>Companies (Acceptance of Deposits) Amendment Rules, 2019</strong> - dated 22 January 2019 - inserted sub-rule (3) in Rule 16A making annual DPT-3 mandatory for every non-government company</li>
                    <li><strong>Companies (Acceptance of Deposits) Second Amendment Rules, 2019</strong> - dated 30 April 2019 - refined annual filing scope</li>
                    <li><strong>MCA Notification dated 29 August 2022</strong> - substituted current version of Form DPT-3</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - multiplier-based additional fee structure for late filing (Annexure A)</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections of the Companies Act, 2013</h3>
                <ul>
                    <li><strong>Section 73</strong> - Prohibition on acceptance of deposits from public; eligibility conditions for member-deposits; penalty under sub-section (6)</li>
                    <li><strong>Section 73(6)</strong> - Penalty for unauthorised acceptance: fine Rs 1 crore or 2x deposit amount whichever is lower on company; officer fine Rs 25 lakh to Rs 2 crore + imprisonment up to 7 years</li>
                    <li><strong>Section 76</strong> - Acceptance of deposits by eligible public companies from public</li>
                    <li><strong>Section 76A</strong> - Punishment for contravention of Section 76 - similar structure to Section 73(6)</li>
                    <li><strong>Section 77</strong> - Charge particulars (CHG-1 / CHG-4 SRN references needed for DPT-3 attachments where applicable)</li>
                    <li><strong>Section 128</strong> - Books of account; 7-year audit retention period</li>
                </ul>

                <h3 style="margin-top:24px;">Key Rules of Companies (Acceptance of Deposits) Rules, 2014</h3>
                <ul>
                    <li><strong>Rule 1(3)</strong> - Exempt categories - banking companies, NBFCs, HFCs</li>
                    <li><strong>Rule 2(1)(c)</strong> - Definition of "deposit" with 14 sub-clauses of exemptions</li>
                    <li><strong>Rule 2(1)(c)(viii)</strong> - Director-loan exemption conditional on written declaration that loaned amount is the director's own funds and not borrowed</li>
                    <li><strong>Rule 16</strong> - Annual return of deposits filed on or before 30 June every year</li>
                    <li><strong>Rule 16A(3)</strong> - One-time and annual return of exempted deposits (inserted 22 January 2019)</li>
                    <li><strong>Rule 21</strong> - Punishment for contravention of these rules - fine up to Rs 5,000 on company and each officer, with further fine up to Rs 500 per day of continuing default</li>
                </ul>

                <h3 style="margin-top:24px;">Three-Layer Penalty Schedule</h3>
                <ul>
                    <li><strong>Layer 1 - Additional fee for late filing:</strong> multiplier-based slabs (2x / 4x / 6x / 10x / 12x) under Companies (Registration Offices and Fees) Rules 2014</li>
                    <li><strong>Layer 2 - Rule 21 specific penalty:</strong> Rs 5,000 on company + Rs 5,000 on every officer in default + Rs 500 per day continuing default</li>
                    <li><strong>Layer 3 - Section 73(6) deposit violation:</strong> Where DPT-3 is not filed because director declaration was missing AND the director loan is reclassified as deposit, Section 73(6) penalties apply on top of Rule 21 - up to Rs 1 crore on company, Rs 25 lakh to Rs 2 crore on officers + 7-year imprisonment</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for DPT-3 e-form filing, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for the 22 January 2019 Amendment Rules and 29 August 2022 form substitution, and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on DPT-3 applicability, the 30 June deadline, small-company 'no deposit' obligation, director loan reporting under Rule 2(1)(c)(viii), three-layer penalty structure, auditor certificate logic, LLP non-applicability, and one-time vs annual return distinction.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Form DPT-3 and who must file it?</h3>
                        <div class="faq-expanded__a"><p>Form DPT-3 is the annual return of deposits filed with the Registrar of Companies under Rule 16 and Rule 16A of the Companies (Acceptance of Deposits) Rules, 2014 read with Section 73 of the Companies Act, 2013. It must be filed by every non-government company in India - including private limited companies, public limited companies, OPCs, small companies, Section 8 companies, and Producer companies. LLPs are NOT covered. Banking companies, NBFCs, and housing finance companies are exempt under Rule 1(3).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for DPT-3 filing?</h3>
                        <div class="faq-expanded__a"><p>DPT-3 must be filed on or before 30 June every year, covering the position of outstanding deposits and exempted-deposit loans as on 31 March of the same calendar year. For FY 2025-26 (position as on 31 March 2026), the deadline is 30 June 2026. The deadline is absolute and the MCA has rarely granted extensions - in 2023 a one-time relaxation was granted till 31 July, but this is not the norm.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do small companies and OPCs need to file DPT-3 even with no deposits?</h3>
                        <div class="faq-expanded__a"><p>Yes. The DPT-3 obligation applies regardless of size or whether deposits have been accepted. Most small companies and OPCs file Purpose 3 - the 'exempted deposits' return - because they have outstanding director loans, customer advances, or other balances on 31 March that fall under exempted categories. Even where the company has ZERO outstanding balances, professional consensus recommends filing a nil DPT-3 (Purpose 3) to maintain a clean compliance record. The Rs 3,000 Patron fee is a small price for a clean audit trail.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do loans from directors need to be reported in DPT-3?</h3>
                        <div class="faq-expanded__a"><p>Yes - and this is the most overlooked DPT-3 trigger for founder-funded private companies. A loan from a director is an exempted deposit (not a regulated deposit) ONLY if the director has filed a written declaration under Rule 2(1)(c)(viii) confirming that the loaned amount is the director's own funds and not borrowed. Where the declaration is missing, the loan is treated as a deposit - triggering Section 73 eligibility requirements and Section 73(6) penalties up to Rs 1 crore on the company. The director loan, whether declared or not, must be reported in DPT-3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for non-filing of DPT-3?</h3>
                        <div class="faq-expanded__a"><p>Three layers of penalty apply. First, multiplier-based additional fee under Companies (Registration Offices and Fees) Rules - 2x normal fee for delays up to 30 days, escalating to 12x for delays beyond 180 days. Second, Rule 21 specific penalty - fine up to Rs 5,000 on the company and every officer in default, plus a further fine up to Rs 500 per day of continuing default. Third, where actual deposit violation exists (e.g. missing director declaration converts a loan into a deposit), Section 73(6) penalties on the company of up to Rs 1 crore and on officers of Rs 25 lakh to Rs 2 crore plus imprisonment up to 7 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is auditor certificate mandatory for DPT-3?</h3>
                        <div class="faq-expanded__a"><p>Auditor certificate is mandatory only when DPT-3 is filed as Purpose 2 (return of deposits) or Purpose 4 (return of both deposits and exempted deposits). For Purpose 3 (return of exempted deposits only) - which is the most common scenario for small companies and OPCs - auditor certificate is NOT required. The MCA help kit is explicit on this. Many platforms request the certificate unnecessarily, costing clients additional time and money. Patron applies the correct logic and skips auditor coordination where not needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do LLPs need to file DPT-3?</h3>
                        <div class="faq-expanded__a"><p>No. DPT-3 applies only to companies registered under the Companies Act, 2013. LLPs are governed by the LLP Act, 2008 and file Form 8 (Statement of Account and Solvency) and Form 11 (Annual Return) under that separate statute. There is no DPT-3 equivalent for LLPs. If your entity is an LLP, the DPT-3 obligation does not arise.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the difference between one-time return and annual return DPT-3?</h3>
                        <div class="faq-expanded__a"><p>The one-time return (Purpose 1) was a historical filing covering the period 1 April 2014 to 31 March 2019. It was a single, retrospective compliance to capture outstanding non-deposit loans for the five-year window post the Companies Act, 2013 commencement. The annual return (Purpose 2, 3, or 4 depending on scope) is the ongoing yearly filing required since the 22 January 2019 amendment to Rule 16A. New filings going forward use Purpose 2, 3, or 4 - the one-time return is no longer relevant.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is DPT-3?</strong> Annual return of deposits under Rule 16 + Rule 16A of Companies (Acceptance of Deposits) Rules 2014.</p>
                <p><strong>When is it due?</strong> 30 June every year - reports position as on 31 March of the same calendar year.</p>
                <p><strong>Who must file?</strong> Every non-government company - Pvt Ltd, Public Ltd, OPC, small company, Section 8, Producer. LLPs NOT covered.</p>
                <p><strong>Exempt entities?</strong> Government companies, banking companies, NBFCs, HFCs, and LLPs under Rule 1(3) and industry status.</p>
                <p><strong>No deposit - still file?</strong> Yes. Most small companies file Purpose 3 (exempted deposits return) because director loans / customer advances trigger reporting even without actual deposits.</p>
                <p><strong>Auditor certificate required?</strong> Only for Purpose 2 (return of deposits) and Purpose 4 (both deposits and exempted). NOT required for Purpose 3.</p>
                <p><strong>Director loan declaration?</strong> Mandatory under Rule 2(1)(c)(viii) - confirming director's funds are own and not borrowed. Missing declaration converts loan into deposit and triggers Section 73(6) penalties.</p>
                <p><strong>What does Patron charge?</strong> Rs 3,000 (Purpose 3 nil / exempted) | Rs 4,000 (Purpose 2 deposits) | Rs 5,000 (Purpose 4 both). Free in Rs 35,000 annual compliance bundle.</p>
                <p><strong>Three-layer penalty for late filing?</strong> Multiplier additional fee (2x to 12x) + Rule 21 specific fine (Rs 5,000 + Rs 500/day) + Section 73(6) (up to Rs 1 crore + 7-year imprisonment) where deposit violation exists.</p>
                <p><strong>Form last substituted?</strong> MCA Notification dated 29 August 2022.</p>
                <p><strong>Annual DPT-3 made mandatory?</strong> MCA Notification dated 22 January 2019 inserted sub-rule (3) in Rule 16A.</p>
                <p><strong>DPT-3 form kya hai aur kab file karna hai?</strong> <em>Company ka annual return of deposits hai - Rule 16 + Rule 16A ke under. 30 June har saal deadline hai. Har non-government company file karti hai - chhoti company aur OPC bhi. Director ka loan, customer advance, inter-corporate loan - sab kuch report karna padta hai. LLP file nahi karti. Patron Rs 3,000 (nil / exempted) se Rs 5,000 (with deposits) mein file karta hai, ya Rs 35,000 ke annual bundle mein free.</em></p>
                <p><strong>Director ka loan DPT-3 mein report karna padta hai kya?</strong> <em>Haan - bilkul. Founder-funded companies ke liye yeh sabse common trap hai. Director ka loan 'exempted deposit' tabhi count hota hai jab director ki written declaration ho - ki paisa unka own fund hai, borrowed nahi. Declaration nahi hone par loan 'deposit' maan liya jaata hai - aur Section 73 ke penalties trigger ho jaate hain. Declaration must hai.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Urgency: 30 June 2026</h2>
            <div class="content-text">
                
                
                <p>For the financial year ending 31 March 2026, DPT-3 is due on or before <strong>30 June 2026</strong>. The deadline is absolute - MCA has historically granted extensions only in exceptional circumstances:</p>
                <ul>
                    <li><strong>Layer 1 penalty:</strong> Multiplier-based additional fees (2x to 12x normal fee by delay slab)</li>
                    <li><strong>Layer 2 penalty:</strong> Rule 21 specific penalty - Rs 5,000 + Rs 500 per day of continuing default on company AND every officer in default</li>
                    <li><strong>Layer 3 penalty:</strong> Where late filing is connected to a deposit violation (e.g. missing director declaration converting a loan into a deposit), Section 73(6) penalties of up to Rs 1 crore on company and Rs 25 lakh to Rs 2 crore on officers plus imprisonment up to 7 years</li>
                </ul>

                <p style="margin-top:16px;"><strong>Start preparation in April or May.</strong> The most common DPT-3 trap is the founder-funded private company that assumes 'no deposits means no DPT-3' - the rule covers exempted deposits too, and director loans are the most common trigger. Patron's recommended filing window is 15 May to 15 June 2026 to avoid last-week MCA portal load.</p>

                <p style="margin-top:16px;"><strong>Get a Free Quote in 2 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20DPT-3%20for%20FY%202025-26%20before%20the%2030%20June%20deadline." target="_blank">WhatsApp us</a>. Free 15-minute consultation. We respond within 2 hours during business hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: File DPT-3 Right the First Time</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Form DPT-3 is the annual return of deposits filed under Rule 16 and Rule 16A of the Companies (Acceptance of Deposits) Rules, 2014 read with Section 73 of the Companies Act, 2013. Due 30 June every year for the position as on 31 March, mandatory for every non-government company in India - including small companies, OPCs, and Section 8 companies.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">The most common DPT-3 reality is the 'exempted deposits' return (Purpose 3) filed by founder-funded private companies with outstanding director loans, customer advances, or inter-corporate loans - not actual public deposits. LLPs are NOT covered. The single biggest trap is the missing director declaration under Rule 2(1)(c)(viii) which converts an exempted loan into a regulated deposit and triggers Section 73(6) penalties up to Rs 1 crore.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Patron files DPT-3 standalone from Rs 3,000, or bundles it into the full annual compliance package at Rs 35,000 alongside AOC-4, MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, MSME-1, statutory audit, and ITR-6. The bundle is materially better value once you account for the other six filings every non-government company also needs. Start the engagement by mid-May 2026 to leave comfortable buffer before the 30 June deadline.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20quote%20for%20DPT-3%20filing%20-%20standalone%20or%20bundled." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">DPT-3 Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. DPT-3 standalone filing (Purpose 1-4) or bundled into the full annual compliance package delivered pan-India. Average 3-5 working day turnaround once balances are finalised.</p>
        
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise DPT-3 Filing Pages</div>
                <div class="pa-block-sub">Local CA-CS team for DPT-3 standalone or bundle filing</div>
                <div class="pa-city-grid">
                    <a href="/dpt-3-filing-services/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">DPT-3 Filing in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/dpt-3-filing-services/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">DPT-3 Filing in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/dpt-3-filing-services/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">DPT-3 Filing in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/dpt-3-filing-services/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">DPT-3 Filing in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">DPT-3 is one of six annual MCA filings - bundle for better value</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">DPT-3 Included Free</div></div>
                    </a>
                    <a href="/small-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Small Co Annual Compliance</div><div class="pa-card-sub">Sec 2(85) Companies</div></div>
                    </a>
                    <a href="/aoc-4-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing</div><div class="pa-card-sub">Financial Statements</div></div>
                    </a>
                    <a href="/mgt-7-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing</div><div class="pa-card-sub">Annual Return</div></div>
                    </a>
                    <a href="/dir-3-kyc-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">DIR-3 KYC Filing</div><div class="pa-card-sub">Director KYC</div></div>
                    </a>
                    <a href="/llp-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">LLP Annual Compliance</div><div class="pa-card-sub">Form 8 + Form 11</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026 (after FY 2025-26 DPT-3 cycle closes). Review triggers include MCA amendment to Rule 16 / 16A / 21, change in Form DPT-3 (last substituted 29 August 2022), Companies (Acceptance of Deposits) amendment rules, change in additional fee structure, change in Section 73 / 73(6) / 76 / 76A penalty schedule, and any new MCA help-kit clarifications.</p>
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