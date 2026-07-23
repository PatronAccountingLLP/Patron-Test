
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
    <title>LLP Form 11 and Form 8 Filing</title>
    <meta name="description" content="LLP Form 11 due 30 May 2026 and Form 8 due 30 October 2026. Section 34 and 35 LLP Act. CA reviewed. From Rs 8,000 combined or bundled in LLP compliance.">
    <link rel="canonical" href="/llp-form-11-form-8-filing">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Form 11 and Form 8 Filing 2026 | Patron Accounting">
    <meta property="og:description" content="LLP Form 11 due 30 May 2026 and Form 8 due 30 October 2026. Section 34 and 35 LLP Act. CA reviewed. From Rs 8,000 combined or bundled in LLP compliance.">
    <meta property="og:url" content="/llp-form-11-form-8-filing">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/llp-form-11-form-8-filing-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Form 11 and Form 8 Filing 2026 | Patron Accounting">
    <meta name="twitter:description" content="LLP Form 11 due 30 May 2026 and Form 8 due 30 October 2026. Section 34 and 35 LLP Act. CA reviewed. From Rs 8,000 combined or bundled in LLP compliance.">
    <meta name="twitter:image" content="/images/llp-form-11-form-8-filing-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/llp-form-11-form-8-filing#breadcrumb",
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
                        "name": "LLP Compliance",
                        "item": "/llp-compliance"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "LLP Form 11 and Form 8 Filing",
                        "item": "/llp-form-11-form-8-filing"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/llp-form-11-form-8-filing#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the difference between LLP Form 11 and Form 8?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form 11 is the LLP Annual Return under Section 35 of the LLP Act, 2008 - it captures partner, designated partner, and contribution structure (the structural / governance layer). Form 8 is the Statement of Account and Solvency under Section 34 - it captures the LLP's financial position with Part A (Solvency Statement) and Part B (Income, Expenditure, and Balance Sheet). Form 11 is due 30 May; Form 8 is due 30 October. Both are mandatory; neither substitutes the other."
                }
            },
            {
                "@type": "Question",
                "name": "What are the due dates for LLP Form 11 and Form 8?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form 11 is due within 60 days from the end of the financial year - typically 30 May for FY ending 31 March. Form 8 is due within 30 days from the end of 6 months after the financial year end - typically 30 October for FY ending 31 March. For FY 2025-26 specifically: Form 11 by 30 May 2026 and Form 8 by 30 October 2026. The deadlines are firm; MCA rarely grants extensions."
                }
            },
            {
                "@type": "Question",
                "name": "When is an LLP audit mandatory?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 34(4) of the LLP Act, 2008 read with Rule 24(8) of LLP Rules, 2009, an LLP audit by a practising Chartered Accountant is mandatory where turnover during the financial year exceeds Rs 40 lakh OR total contribution from partners exceeds Rs 25 lakh. Either condition triggers audit. Below both thresholds, the LLP can file unaudited Form 8 with the designated partners certifying the figures themselves under Small LLP status (Section 2(1)(ta))."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for late filing of Form 11 or Form 8?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Both forms attract an additional fee of Rs 100 per day per form with no upper cap on the daily fee. The penalty clocks run INDEPENDENTLY - missing both forms can accumulate Rs 200 per day combined. Plus the substituted post-LLP (Amendment) Act 2021 penalty: under Section 35(2) for Form 11 default (and parallel Section 34(2) for Form 8), LLP and designated partners are liable to Rs 100 per day capped at Rs 1,00,000 for the LLP and Rs 50,000 for designated partners. Section 35(2) was substituted by Section 9 of the LLP (Amendment) Act 2021 via Notification S.O. 621(E) dated 11 February 2022, effective 1 April 2022 - replacing the earlier Rs 25,000 to Rs 5 lakh fine structure. Small LLPs under Section 2(1)(ta) get 50% reduced penalty under Section 76A(3)(a) on adjudication only - daily Rs 100 fee unchanged."
                }
            },
            {
                "@type": "Question",
                "name": "Is CS certification required for LLP Form 11?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, but only where the LLP's contribution exceeds Rs 50 lakh OR turnover during the financial year exceeds Rs 5 crore. In those cases, Form 11 must be certified by a Company Secretary in practice with UDIN, under Rule 25 of LLP Rules, 2009. Below both thresholds, Form 11 is signed only by a designated partner with DSC. CS certification is a separate test from audit applicability (which has different thresholds Rs 40 lakh / Rs 25 lakh under Section 34(4) governing Form 8)."
                }
            },
            {
                "@type": "Question",
                "name": "Do dormant LLPs with no business activity still need to file?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Both Form 11 and Form 8 are mandatory for every LLP registered in India, regardless of business activity, turnover, profit, or partner count. Dormant LLPs file nil returns - declaring zero turnover and unchanged partner / contribution position. Non-filing of dormant LLP returns still attracts the Rs 100 per day per form additional fee and the post-2021 Section 35(2) / Section 34(2) penalty caps."
                }
            },
            {
                "@type": "Question",
                "name": "Are LLPs incorporated after 1 October exempt from Form 8?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Partially. LLPs incorporated on or after 1 October of any year are exempt from filing Form 8 for the financial year ending on the immediately following 31 March (i.e., the short first FY). They may still file Form 8 voluntarily. The exemption does NOT apply to Form 11 - Form 11 must be filed even in the first FY, however short. From the second financial year onwards, both forms are mandatory without exception."
                }
            },
            {
                "@type": "Question",
                "name": "What is a Small LLP and does it get reduced penalties?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A Small LLP under Section 2(1)(ta) of the LLP Act, 2008 (inserted by the LLP (Amendment) Act 2021 via S.O. 621(E) dated 11 February 2022) is one where total contribution does not exceed Rs 25 lakh AND turnover during the immediately preceding FY does not exceed Rs 40 lakh - both thresholds must be met. Small LLPs enjoy 50% reduced penalty under Section 76A(3)(a) for adjudication of offences. The 50% reduction applies to the substituted Section 35(2) / 34(2) penalties (Rs 1L LLP / Rs 50k DP caps) only - NOT to the daily Rs 100 additional fee, which remains the same for all LLPs."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/llp-form-11-form-8-filing#service",
                "name": "LLP Form 11 and Form 8 Filing Services",
                "url": "/llp-form-11-form-8-filing",
                "description": "Combined LLP Form 11 (Annual Return under Section 35 LLP Act 2008) and Form 8 (Statement of Account and Solvency under Section 34) filing service. Form 11 due 30 May; Form 8 due 30 October. Audit threshold Rs 40 lakh turnover OR Rs 25 lakh contribution under Section 34(4) + Rule 24(8). CS certification threshold Rs 50 lakh contribution OR Rs 5 crore turnover under Rule 25. Post-LLP (Amendment) Act 2021 Section 35(2) substituted penalty: LLP cap Rs 1,00,000 / Designated Partner cap Rs 50,000 at Rs 100/day (S.O. 621(E) dated 11 February 2022). Standalone combined fee Rs 8,000 to Rs 12,000 or full LLP Annual Compliance bundle at Rs 25,000.",
                "serviceType": "LLP Compliance Service",
                "provider": { "@id": "/#organization" },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "Limited liability partnership",
                        "sameAs": "https://en.wikipedia.org/wiki/Limited_liability_partnership"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    },
                    {
                        "@type": "Thing",
                        "name": "Annual report",
                        "sameAs": "https://en.wikipedia.org/wiki/Annual_report"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "LLP Form 11 + Form 8 Filing Packages",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "Form 11 + Form 8 (No Audit, No CS Cert)",
                            "price": "8000",
                            "priceCurrency": "INR",
                            "description": "Both forms filed with partner reconciliation, contribution validation, books closure assistance, MSME and contingent liability disclosures. For LLPs below all thresholds (audit under Section 34(4), CS certification under Rule 25). Self-certification path under Small LLP Section 2(1)(ta) status."
                        },
                        {
                            "@type": "Offer",
                            "name": "Form 11 + Form 8 (Audit Required)",
                            "price": "10000",
                            "priceCurrency": "INR",
                            "description": "Everything in basic plus statutory audit coordination with practising CA under Section 34(4) + Rule 24(8). For LLPs at turnover above Rs 40 lakh OR contribution above Rs 25 lakh. Audit fee charged separately at actuals."
                        },
                        {
                            "@type": "Offer",
                            "name": "Form 11 + Form 8 (Audit + CS Cert)",
                            "price": "12000",
                            "priceCurrency": "INR",
                            "description": "Everything plus CS-in-practice certification for Form 11 with UDIN under Rule 25 of LLP Rules 2009. For LLPs at contribution above Rs 50 lakh OR turnover above Rs 5 crore. CS certification fee charged separately at actuals."
                        },
                        {
                            "@type": "Offer",
                            "name": "LLP Annual Compliance Bundle",
                            "price": "25000",
                            "priceCurrency": "INR",
                            "description": "Form 11 + Form 8 + ITR-5 + DIR-3 KYC for all designated partners (triennial per G.S.R. 943(E)) + statutory audit (where applicable) + books of accounts maintenance + central compliance calendar. Dedicated CS contact. Recommended path when filing all four annual returns. Saves Rs 5,000 to Rs 15,000 vs piecemeal purchase."
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
                        LLP Form 11 and Form 8 Filing Services
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two Hard Deadlines:</span> Form 11 by 30 May (Section 35) | Form 8 by 30 October (Section 34) - independent penalty clocks under Rule 25 + Rule 24.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Combined: Rs 8,000 (no audit) to Rs 12,000 (audit + CS cert) | LLP Annual Bundle: Rs 25,000 covers all 4 filings.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audit Trigger:</span> Turnover > Rs 40 lakh OR contribution > Rs 25 lakh under Section 34(4) + Rule 24(8). Either threshold.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CS Certification:</span> Form 11 requires CS-in-practice certification at contribution > Rs 50 lakh OR turnover > Rs 5 crore.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 800+ Form 11 + 800+ Form 8 Filed FY24-25 | 100% On-Time</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20combined%20LLP%20Form%2011%20and%20Form%208%20filing%20support." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - LLP Form 11 and Form 8 Filing'/>
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
                                <option value="llp-form-11-form-8-filing" selected>LLP Form 11 + Form 8 Filing (this page)</option>
                                <option value="llp-annual-compliance">LLP Annual Compliance Bundle (Rs 25k)</option>
                                <option value="llp-compliance">LLP Compliance Hub</option>
                                <option value="llp-form-11-filing">LLP Form 11 Filing (Standalone)</option>
                                <option value="llp-form-8-filing">LLP Form 8 Filing (Standalone)</option>
                                <option value="director-kyc">DIR-3 KYC for DPIN</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Got required documents within 4 hours of request. Form 11 filed 25 May and Form 8 by 22 October - both ahead of deadlines. Combined fee Rs 8,000 - lower than I expected for full partner-CA accountability.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SL</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Small LLP Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune | FY24-25 client</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. Our contribution had just crossed Rs 50 lakh so CS certification was needed for Form 11 - Patron arranged UDIN-tagged certification within 4 days. And it's not expensive at all.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Consulting LLP | Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had a pending Form 4 partner change that we didn't realise was blocking Form 11. Patron audited at intake, cleared the Form 4 in 5 days, then filed Form 11 with the new partner data. Zero deadline miss.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RE</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Real Estate LLP</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi | Form 4 + Form 11 fix</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We bundled into Rs 25,000 LLP annual compliance - saved Rs 8,000 vs piecemeal Form 11 + Form 8 + ITR-5 + DIR-3 KYC. Single point of contact across the year. All deadlines hit ahead of time.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">TS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Tech Services LLP</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Gurugram | Bundle FY24-25</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Dormant LLP - we tried to skip filings assuming no activity meant no obligation. Patron explained even dormant LLPs file nil Form 11 and Form 8 - and our 2-year backlog under post-2021 caps was clearable. Filed everything in 30 days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DL</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Dormant LLP Owner</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bangalore | Backlog cleanup</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
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
                    <p>Free 15-minute scoping call. Form 11 by 30 May (Section 35) and Form 8 by 30 October (Section 34) - independent penalty clocks managed with 30/15/5 day alerts. Section 34(4) audit applicability + Rule 25 CS certification thresholds tested annually on intake. Small LLP Section 2(1)(ta) classification + Section 76A(3)(a) 50% penalty benefit confirmed. Post-LLP Amendment Act 2021 framework applied (Section 35(2) substituted).</p>
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
                <a href="#what-section" class="toc-btn">Form 11 vs Form 8</a>
                <a href="#who-section" class="toc-btn">Who Must File</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">7-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA + CS</a>
                <a href="#comparison-section" class="toc-btn">LLP vs Pvt Ltd</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: LLP Form 11 and Form 8 at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Form 11 and Form 8 Filing Services at a Glance</strong></p>
                    <p><strong>Form 11</strong> is the LLP Annual Return under Section 35 of the LLP Act, 2008 - <strong>due 30 May</strong> every year, captures partner and contribution structure. <strong>Form 8</strong> is the Statement of Account and Solvency under Section 34 - <strong>due 30 October</strong>, captures the LLP's financial position. Both mandatory for every LLP regardless of activity. Late filing attracts <strong>Rs 100 per day per form</strong> additional fee with independent penalty clocks. Audit required only where turnover > Rs 40 lakh OR contribution > Rs 25 lakh under Section 34(4). Patron files both combined from <strong>Rs 8,000</strong> standalone or includes them in the <strong>Rs 25,000 LLP annual bundle</strong>.</p>
                </div>
                <p>The two forms cover different domains - Form 11 is structural / governance, Form 8 is financial. Both are mandatory for every LLP every year. Filing one does not substitute the other. They have separate due dates, separate fee slabs, and separate penalty clocks running independently.</p>
                <p>Below is the quick-reference summary covering governing provisions (LLP Act 2008 Sections 34, 35, 35(2), 2(1)(ta), 76A(3)(a) + LLP Rules 2009 Rule 24, 24(8), 25), the dual-deadline structure, the audit threshold (Section 34(4)), the CS certification threshold (contribution Rs 50 lakh OR turnover Rs 5 crore), and Patron's standalone vs bundle pricing path.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Limited Liability Partnership Act, 2008 (Sections 34, 35, 35(2) post-LLP Amendment Act 2021, 2(1)(ta), 76A(3)(a)) read with Rule 24 + Rule 24(8) + Rule 25 of LLP Rules, 2009. Section 35(2) substituted by LLP (Amendment) Act 2021 (Notification S.O. 621(E) dated 11 February 2022, w.e.f. 1 April 2022).</td></tr>
                        <tr><td>Applicable To</td><td>Every LLP registered under the LLP Act, 2008 - regardless of size, activity, profit, or business volume. Dormant LLPs file nil returns. 1 October+ incorporated LLPs may skip first-year Form 8 only.</td></tr>
                        <tr><td>Timeline</td><td><strong>Form 11</strong> - within 60 days from FY end (<strong>30 May 2026</strong> for FY 2025-26). <strong>Form 8</strong> - within 30 days from end of 6 months after FY end (<strong>30 October 2026</strong> for FY 2025-26).</td></tr>
                        <tr><td>Cost (Patron)</td><td><strong>Standalone combined:</strong> Rs 8,000 (no audit) to Rs 12,000 (audit + CS cert). <strong>Bundled in LLP Annual Compliance:</strong> Rs 25,000 (covers Form 11 + Form 8 + ITR-5 + DIR-3 KYC + audit if applicable).</td></tr>
                        <tr><td>Penalty (Post-2021)</td><td><strong>Additional fee:</strong> Rs 100 per day per form. <strong>Section 35(2) post-LLP (Amendment) Act 2021</strong> penalty: LLP cap <strong>Rs 1,00,000</strong>; Designated Partner cap <strong>Rs 50,000</strong> at Rs 100/day. Small LLPs under Section 2(1)(ta) get <strong>50% reduction</strong> under Section 76A(3)(a).</td></tr>
                        <tr><td>Forms / Portal</td><td>Form 11 (Annual Return) | Form 8 (Statement of Account and Solvency - Part A Solvency Statement, Part B Income and Expenditure + Balance Sheet) | MCA V3 portal (mca.gov.in)</td></tr>
                        <tr><td>Audit Trigger (Section 34(4))</td><td>Turnover above <strong>Rs 40 lakh</strong> OR contribution above <strong>Rs 25 lakh</strong>. Either threshold triggers audit by practising CA. Below both - designated partners self-certify Form 8.</td></tr>
                        <tr><td>CS Certification (Rule 25)</td><td>Form 11 requires CS-in-practice certification with UDIN at contribution above <strong>Rs 50 lakh</strong> OR turnover above <strong>Rs 5 crore</strong>. Separate test from audit applicability.</td></tr>
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
                <h2 class="section-title">What Are LLP Form 11 and Form 8?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>Form 11</strong> is the LLP Annual Return filed with the Registrar of Companies under <strong>Section 35 of the LLP Act, 2008</strong> read with <strong>Rule 25 of LLP Rules, 2009</strong>. It captures the LLP's structural position as on 31 March - partners, designated partners, contribution amounts, changes during the year, and basic LLP details. It is the LLP equivalent of MGT-7 / MGT-7A for companies. <strong>Form 11 does NOT carry financial information.</strong></p>

                    <p style="margin-top:16px;"><strong>Form 8</strong> is the Statement of Account and Solvency filed under <strong>Section 34 of the LLP Act, 2008</strong> read with <strong>Rule 24 of LLP Rules, 2009</strong>. It carries TWO parts:</p>
                    <ul>
                        <li><strong>Part A:</strong> Statement of Solvency declaring the LLP's ability to pay its debts</li>
                        <li><strong>Part B:</strong> Statement of Income and Expenditure (the LLP's financials) plus Balance Sheet</li>
                    </ul>
                    <p>Form 8 is the LLP equivalent of AOC-4 for companies. Both designated partners must sign Form 8; auditor signature is required only where the audit threshold under Section 34(4) is crossed.</p>

                    <div class="highlight-box" style="margin-top:24px;background:#FEF4EE;border-left:4px solid #E8712C;">
                        <p><strong>&#9888; The two forms cover different domains.</strong> Form 11 is structural / governance, Form 8 is financial. Both are mandatory for every LLP every year. Filing one does not substitute the other. They have separate due dates (Form 11 first by 30 May, Form 8 later by 30 October), separate fee slabs, and <strong>separate penalty clocks running independently</strong>. Missing both forms can accumulate Rs 200 per day combined.</p>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Form 11 and Form 8 Filing:</strong></p>
                    
                    <p><strong>Form 11 - LLP Annual Return:</strong> Filed under Section 35 of LLP Act 2008 read with Rule 25 of LLP Rules 2009. Captures partner / designated partner details, contribution structure, and any partner changes during the year. <strong>Due 30 May</strong> - within 60 days of FY end. Mandatory from first FY onwards.</p>
                    <p><strong>Form 8 - Statement of Account and Solvency:</strong> Filed under Section 34 of LLP Act 2008 read with Rule 24 of LLP Rules 2009. Part A is Solvency Statement (designated partner declaration); Part B is Income and Expenditure + Balance Sheet. <strong>Due 30 October</strong> - within 30 days from end of 6 months after FY end.</p>
                    <p><strong>Section 35(2) Post-LLP (Amendment) Act 2021:</strong> The substituted penalty provision (effective 1 April 2022 via Notification S.O. 621(E) dated 11 February 2022) provides: penalty of Rs 100 per day, capped at <strong>Rs 1,00,000 for the LLP</strong> and <strong>Rs 50,000 for designated partners</strong>. This replaced the pre-2021 fine structure of Rs 25,000 to Rs 5 lakh.</p>
                    <p><strong>Section 34(4) Audit Threshold:</strong> Statutory audit mandatory if turnover > Rs 40 lakh OR contribution > Rs 25 lakh. Either condition triggers audit by practising CA under Rule 24(8). Below both - self-certification by designated partners.</p>
                    <p><strong>Rule 25 CS Certification Threshold:</strong> Form 11 requires CS-in-practice certification with UDIN if contribution > Rs 50 lakh OR turnover > Rs 5 crore. Separate test from audit applicability. Below both - designated partner signature with DSC suffices.</p>
                    <p><strong>Small LLP (Section 2(1)(ta)):</strong> Inserted by LLP (Amendment) Act 2021. Contribution up to Rs 25 lakh AND turnover up to Rs 40 lakh in preceding FY. Both thresholds. Small LLPs get <strong>50% reduced penalty under Section 76A(3)(a)</strong> on adjudication - daily Rs 100 additional fee remains the same.</p>
                    <p><strong>1 October First-FY Exemption (Form 8 Only):</strong> LLPs incorporated on or after 1 October of any year may skip first-year Form 8 for the financial year ending the immediately following 31 March. Exemption applies to Form 8 ONLY - Form 11 must be filed even in the short first FY.</p>
                    <p><strong>Section 76A:</strong> Adjudication of penalties framework introduced by LLP (Amendment) Act 2021. Section 76A(3)(a) is the small LLP 50% reduction provision; Section 76A(9) provides imprisonment up to 6 months OR fine Rs 25,000 - Rs 1,00,000 OR both for non-compliance with adjudication orders within 90 days.</p>
                    <p><strong>CCFS 2026:</strong> Companies Compliance Facilitation Scheme 2026 - one-time amnesty window for companies under the Companies Act, 2013. <strong>Does NOT extend to LLPs.</strong> Past LLP defaults must be cleared with full accumulated Rs 100/day per form additional fee plus Section 35(2) / 34(2) penalty.</p>
                    <p><strong>DPIN (Designated Partner Identification Number):</strong> LLP equivalent of DIN. DIR-3 KYC under Rule 12A applies to DPIN equally - triennial per G.S.R. 943(E) dated 31 December 2025 effective 31 March 2026.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Form 11 and Form 8 Filing</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Dual Filings</span>
                        <strong>Form 11 (30 May) + Form 8 (30 Oct)</strong>
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
            <h2 class="section-title">Who Must File LLP Form 11 and Form 8?</h2>
            <div class="content-text">
                
                
                <p>Every LLP registered under the LLP Act, 2008 must file Form 11 and Form 8 every financial year, <strong>regardless of</strong>:</p>
                <ul>
                    <li><strong>Turnover</strong> - zero-turnover LLPs still file</li>
                    <li><strong>Profit or loss</strong> - loss-making LLPs file the same forms</li>
                    <li><strong>Business activity</strong> - dormant LLPs file nil returns</li>
                    <li><strong>Number of partners or designated partners</strong></li>
                    <li><strong>Contribution size</strong></li>
                </ul>

                <h3 style="margin-top:32px;">First-FY Exemption for Form 8 (Not Form 11)</h3>
                <div class="highlight-box" style="background:#E8F5E9;border-left:4px solid #10B981;">
                    <p>LLPs incorporated <strong>on or after 1 October of any year</strong> are exempt from filing Form 8 for the financial year ending on the immediately following 31 March. They may file voluntarily. <strong>The exemption does NOT apply to Form 11</strong> - which must be filed even in the first FY, however short. From the second FY onwards, both forms are mandatory without exception.</p>
                </div>

                <h3 style="margin-top:32px;">Audit Threshold (Section 34(4) + Rule 24(8))</h3>
                <p>An LLP requires statutory audit by a practising CA only where EITHER condition is satisfied:</p>
                <ul>
                    <li>Turnover during the financial year exceeds <strong>Rs 40 lakh</strong>, OR</li>
                    <li>Total contribution from partners exceeds <strong>Rs 25 lakh</strong></li>
                </ul>
                <p>If either condition is satisfied, audit is mandatory and the audited financials must be filed with Form 8. Below both thresholds, the LLP can file unaudited Form 8 - the designated partners certify the figures themselves.</p>

                <h3 style="margin-top:32px;">CS Certification Threshold for Form 11 (Rule 25)</h3>
                <p>Form 11 must be certified by a Company Secretary in practice where:</p>
                <ul>
                    <li>Total contribution received exceeds <strong>Rs 50 lakh</strong>, OR</li>
                    <li>Turnover during the financial year exceeds <strong>Rs 5 crore</strong></li>
                </ul>
                <p>Below both thresholds, Form 11 is signed by a designated partner with DSC - no CS certification required. <strong>This is a separate test from audit applicability</strong> (which has Rs 40 lakh / Rs 25 lakh thresholds under Section 34(4)).</p>

                <h3 style="margin-top:32px;">Small LLP Status under Section 2(1)(ta)</h3>
                <p>A small LLP is one where:</p>
                <ul>
                    <li>Total contribution from partners does not exceed Rs 25 lakh, <strong>AND</strong></li>
                    <li>Turnover during the immediately preceding FY does not exceed Rs 40 lakh</li>
                </ul>
                <p><strong>Both thresholds must be met.</strong> Small LLPs enjoy half-penalty treatment under Section 76A(3)(a) for adjudication - useful where Form 11 or Form 8 late-filing triggers Section 35(2) or Section 34(2) penalties. Note: half-penalty applies to <strong>adjudication only</strong>; the daily Rs 100 additional fee remains the same for all LLPs.</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Delivers in Form 11 + Form 8 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Partner Register Reconciliation for Form 11</strong></td><td>Designated partner and partner register reconciled against any FiLLiP, Form 3 (LLP Agreement change), Form 4 (notice of partner appointment / cessation), or Form 5 (name change) filed during the year. Contribution received from each partner cross-checked against bank credits. Partner-wise contribution percentages locked.</td></tr>
                        <tr><td><strong>2. CS Certification Coordination (Where Applicable)</strong></td><td>Where contribution exceeds Rs 50 lakh or turnover exceeds Rs 5 crore, Form 11 requires CS-in-practice certification under Rule 25 with UDIN. Patron arranges certification before the 30 May deadline. CS fee billed separately at actuals.</td></tr>
                        <tr><td><strong>3. Books Closure and Audit Coordination for Form 8</strong></td><td>Books of account closed as on 31 March. Where audit threshold under Section 34(4) is crossed (turnover > Rs 40 lakh OR contribution > Rs 25 lakh), Patron coordinates statutory audit by a practising CA. UDIN generated; audit report annexed to Form 8.</td></tr>
                        <tr><td><strong>4. Form 8 Part A (Solvency Statement) Drafting</strong></td><td>Solvency declaration drafted. Both designated partners attest under Section 34(2) that the LLP can pay its debts in full as on the date of the statement. The declaration must be supported by the underlying financials in Part B.</td></tr>
                        <tr><td><strong>5. Form 8 Part B (Income, Expenditure, Balance Sheet) Compilation</strong></td><td>Income and Expenditure account and Balance Sheet compiled per ICAI guidance (no specific LLP Act format - ICAI accounting standards govern). MSME disclosure under MSME Development Act 2006 and contingent liabilities annexed.</td></tr>
                        <tr><td><strong>6. Direct MCA V3 Portal Submission with SRN Tracking</strong></td><td>Both forms filed directly via Patron's MCA V3 portal access. Government filing fee paid by contribution slab (Rs 50 to Rs 600 per form). SRNs captured for both. Acknowledgements circulated to designated partners. 7-year retention archive.</td></tr>


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
            <h2 class="section-title">Combined Form 11 + Form 8 Filing Process: 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron treats Form 11 and Form 8 as one continuous annual workflow - Form 11 first by 30 May, then audit and books closure, then Form 8 by 30 October. The two forms have INDEPENDENT penalty clocks at Rs 100/day each, so dropping either is costly. Total cycle 8 months (March setup through November acknowledgement).</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Annual Workflow Setup (March)</h3>
                        <p class="step-description">Both deadlines (30 May and 30 October) entered into Patron's compliance calendar with 30/15/5 day alerts. Designated partner DSCs verified for currency (Class 3, registered on MCA portal). Audit applicability assessed against Section 34(4) thresholds. CS certification applicability tested against Rule 25 thresholds.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                30/15/5 day alerts
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DSC currency
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Threshold tests
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="55" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MARCH</text>
                                    <rect x="22" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="33" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CALENDAR</text>
                                    <rect x="48" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="59" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC OK</text>
                                    <rect x="74" y="68" width="24" height="8" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="86" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">THRESH</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Calendar Set</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Form 11 Data Collection (April - Early May)</h3>
                        <p class="step-description">Partner / designated partner register reconciled against current MCA records. Event filings during the year (Form 3, Form 4, Form 5) confirmed and cleared - any pending Form 4 BLOCKS Form 11 filing. Contribution received per partner reconciled to bank statements. Partner-wise percentages locked.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Partner register
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Form 4 cleared
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Bank reconciliation
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">PARTNER REGISTER</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="30" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="68" x2="85" y2="68" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Data Locked</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Form 11 Drafting, CS Certification, Filing (By 30 May)</h3>
                        <p class="step-description">For contribution > Rs 50 lakh OR turnover > Rs 5 crore - CS-in-practice certifies Form 11 with UDIN under Rule 25. Form 11 digitally signed by designated partner and filed via MCA V3. SRN captured. Acknowledgement circulated. Late filing past 30 May attracts Rs 100/day additional fee + Section 35(2) post-2021 penalty (LLP cap Rs 1,00,000 / DP cap Rs 50,000).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 35 LLP Act
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 25 CS cert
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DSC + MCA V3
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
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM 11</text>
                                    <text x="44" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANNUAL</text>
                                    <text x="44" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RETURN</text>
                                    <text x="44" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">30 MAY</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 35</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Form 11 Filed</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Books Closure and Audit (June - August)</h3>
                        <p class="step-description">Books closed as on 31 March. Trial balance prepared. Where audit applies under Section 34(4) (turnover > Rs 40 lakh OR contribution > Rs 25 lakh), practising CA conducts statutory audit; UDIN-tagged audit report finalised. Where Small LLP under Section 2(1)(ta) (both thresholds within Rs 40L / Rs 25L), self-certification path - audit fee saved entirely.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 34(4) audit
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 24(8) check
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                UDIN audit report
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AUDIT</text>
                                    <text x="40" y="48" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rs 40L</text>
                                    <text x="40" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OR Rs 25L</text>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDIN</text>
                                    <text x="88" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RULE 24(8)</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Done</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Form 8 Drafting (September)</h3>
                        <p class="step-description">Part A - Solvency Statement drafted with designated partner declarations under Section 34(2). Part B - Income and Expenditure plus Balance Sheet compiled per ICAI guidance. MSME disclosure under MSME Development Act 2006 attached. Statement of contingent liabilities (where applicable). Contribution figure cross-checked against Form 11 - must match exactly to avoid ROC queries.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 34 LLP Act
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MSME + contingent
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Form 11 reconciliation
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
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM 8</text>
                                    <text x="44" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PART A SOLV</text>
                                    <text x="44" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PART B P&amp;L</text>
                                    <text x="44" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DRAFT</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 34</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Form 8 Ready</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Form 8 Signing and Filing (By 30 October)</h3>
                        <p class="step-description">Both designated partners sign Form 8 with DSC. Audit certification embedded where applicable (turnover > Rs 40 lakh OR contribution > Rs 25 lakh). Form filed via MCA V3 portal. Government fee paid by contribution slab (Rs 50 to Rs 600). Late filing past 30 October attracts Rs 100/day per form + Section 34(2) post-2021 penalty (parallel to Section 35(2) structure).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                2 DPs sign with DSC
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                30 October deadline
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Govt fee by slab
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
                                    <text x="60" y="32" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM 8 FILED</text>
                                    <text x="60" y="50" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STATEMENT OF</text>
                                    <text x="60" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ACCOUNT + SOLVENCY</text>
                                    <circle cx="60" cy="72" r="4" fill="#10B981"/>
                                    <path d="M57 72l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Form 8 Filed</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">Acknowledgements and Audit Trail (Post-Filing)</h3>
                        <p class="step-description">SRNs captured for both Form 11 and Form 8. Acknowledgement PDFs saved. Filing pack archived for the 7-year retention period required under LLP Act compliance. Compliance calendar updated for next year. Audit working papers retained for next year audit comparison.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN captured
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                7-year archive
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Next-year calendar
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="60" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SRN + ARCHIVE</text>
                                    <line x1="30" y1="46" x2="90" y2="46" stroke="#10B981" stroke-width="1"/>
                                    <text x="60" y="58" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">7-YEAR HOLD</text>
                                    <circle cx="60" cy="68" r="4" fill="#10B981"/>
                                    <path d="M57 68l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Cycle Closed</span>
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
            <h2 class="section-title">Document Checklist for Form 11 + Form 8 Filing</h2>
            <div class="content-text">
                
                
                <p>The checklist below covers both forms. Form 11 needs partner / structural data; Form 8 needs financial data plus the audit / solvency layer.</p>

                <h3 style="margin-top:24px;">For Form 11 (Annual Return)</h3>
                <ul>
                    <li>LLPIN and incorporation certificate of the LLP</li>
                    <li>PAN of the LLP</li>
                    <li>Partner / designated partner register with DIN / DPIN of every partner</li>
                    <li>Contribution-received register with partner-wise amounts and dates</li>
                    <li>Partner change documentation - Form 3 (LLP Agreement change), Form 4 (notice of partner appointment / cessation), Form 5 (notice of name change) where applicable</li>
                    <li>Total contribution received certificate (cross-checked with Form 8)</li>
                    <li>Active DSC (Class 3) of at least one designated partner</li>
                    <li>CS-in-practice DSC and UDIN where contribution > Rs 50 lakh OR turnover > Rs 5 crore</li>
                </ul>

                <h3 style="margin-top:24px;">For Form 8 (Statement of Account and Solvency)</h3>
                <ul>
                    <li>Books of accounts closed as on 31 March</li>
                    <li>Balance Sheet as on 31 March</li>
                    <li>Income and Expenditure Account for the financial year</li>
                    <li>Audit report by practising CA (mandatory if turnover > Rs 40 lakh OR contribution > Rs 25 lakh)</li>
                    <li>Solvency Statement signed by both designated partners (Part A)</li>
                    <li>MSME disclosure under MSME Development Act, 2006</li>
                    <li>Statement of contingent liabilities (where applicable)</li>
                    <li>Complete bank statements for the financial year (April to March) for reconciliation</li>
                    <li>Active DSC of both designated partners</li>
                    <li>Auditor DSC and FRN where audit applies</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Form 11 + Form 8 Pitfalls - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. 30 May Form 11 deadline missed because audit isn't ready</strong></td>
                            <td>Form 11 deadline is 30 May; statutory audit (which feeds Form 8) often runs into June or July. Founders mistakenly delay Form 11 because they think audit completion is needed. It is NOT - Form 11 is structural and does not carry financial figures.</td>
                            <td>Patron files Form 11 by 30 May with partner / contribution data only and pursues Form 8 separately by 30 October. Two-stage workflow eliminates the dependency confusion.</td>
                        </tr>
                        <tr>
                            <td><strong>2. CS certification threshold missed</strong></td>
                            <td>Where contribution exceeds Rs 50 lakh OR turnover exceeds Rs 5 crore, Form 11 requires CS-in-practice certification with UDIN under Rule 25 - distinct from the audit certification for Form 8. Many LLPs file Form 11 without it, triggering rejection.</td>
                            <td>Patron tests the Rule 25 threshold on intake every year and arranges CS certification before 30 May. CS fee billed transparently at actuals.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Audit applicability test misapplied to Form 11</strong></td>
                            <td>The Section 34(4) audit threshold (Rs 40 lakh / Rs 25 lakh) applies to Form 8 only. Form 11 is structural and does not require audit. Many platforms over-engineer by demanding audited financials for Form 11 too, delaying its filing past 30 May.</td>
                            <td>Patron files Form 11 with partner-data-only without waiting for audit completion. Form 8 follows independently after audit by 30 October.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Form 8 contribution figure mismatched with Form 11</strong></td>
                            <td>The total contribution figure in Form 11 (filed by 30 May) and Form 8 (filed by 30 October) must match exactly. Partners contributing additional capital between 31 March and 30 May often gets misclassified as "current year" data instead of being properly disclosed in the next FY.</td>
                            <td>Patron locks the 31 March balance on both forms and tracks any contribution between 31 March and filing date as next-FY data. Cross-form reconciliation done before filing each form.</td>
                        </tr>
                        <tr>
                            <td><strong>5. Pending Form 4 blocks Form 11 filing</strong></td>
                            <td>A pending Form 4 (partner change notification) creates data inconsistency between MCA records (which still reflect the old partner) and Form 11 (which reflects new partners). Form 11 is rejected.</td>
                            <td>Patron audits Form 4 status on intake (April) and clears any pending forms BEFORE Form 11 preparation. Buffer of 4-6 weeks built in.</td>
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
            <h2 class="section-title">Form 11 + Form 8 Filing Pricing: Standalone or Bundle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td colspan="2" style="background:#F0F4F8 !important;"><strong>Path 1: Standalone Combined Form 11 + Form 8 Filing</strong></td></tr>
                        <tr><td><strong>Form 11 + Form 8 (No Audit, No CS Cert)</strong> - Both forms filed with partner reconciliation, contribution validation, books closure assistance, MSME and contingent liability disclosures. For LLPs below all thresholds (audit, CS certification). Self-certification path.</td><td class="text-end">Rs 8,000 combined (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>Form 11 + Form 8 (Audit Required)</strong> - Everything in basic plus statutory audit coordination with practising CA under Section 34(4). For LLPs at turnover > Rs 40 lakh OR contribution > Rs 25 lakh. Audit fee charged separately at actuals.</td><td class="text-end">Rs 10,000 combined (Exl GST, Govt fees, audit fee)</td></tr>
                        <tr><td><strong>Form 11 + Form 8 (Audit + CS Cert)</strong> - Everything plus CS-in-practice certification for Form 11 with UDIN under Rule 25. For LLPs at contribution > Rs 50 lakh OR turnover > Rs 5 crore. CS certification fee charged separately at actuals.</td><td class="text-end">Rs 12,000 combined (Exl GST, Govt fees, audit, CS cert)</td></tr>
                        <tr><td colspan="2" style="background:#E8F5E9 !important;"><strong>Path 2: LLP Annual Compliance Bundle (Recommended)</strong></td></tr>
                        <tr><td><strong>Full LLP Annual Compliance</strong> - Form 11 + Form 8 + ITR-5 + DIR-3 KYC for all designated partners + statutory audit (where applicable) + books of accounts maintenance + central compliance calendar. Dedicated CS contact. <strong>Saves Rs 5,000 to Rs 15,000 vs piecemeal purchase.</strong></td><td class="text-end">Rs 25,000 per year (Exl GST and Govt fees)</td></tr>
                        <tr><td colspan="2" style="background:#FEF4EE !important;"><strong>Government Filing Fees by Contribution Slab</strong></td></tr>
                        <tr><td>Up to Rs 1 lakh contribution</td><td class="text-end">Rs 50 per form</td></tr>
                        <tr><td>Rs 1 lakh to Rs 5 lakh</td><td class="text-end">Rs 100 per form</td></tr>
                        <tr><td>Rs 5 lakh to Rs 10 lakh</td><td class="text-end">Rs 150 per form</td></tr>
                        <tr><td>Rs 10 lakh to Rs 25 lakh</td><td class="text-end">Rs 200 per form</td></tr>
                        <tr><td>Rs 25 lakh to Rs 1 crore</td><td class="text-end">Rs 400 per form</td></tr>
                        <tr><td>Above Rs 1 crore</td><td class="text-end">Rs 600 per form</td></tr>
                        <tr><td>Foreign LLP (Form 8)</td><td class="text-end">Rs 1,000</td></tr>
                        <tr><td colspan="2" style="background:#FEF4EE !important;"><strong>Late-Filing Penalty Exposure (Post-LLP Amendment Act 2021)</strong></td></tr>
                        <tr><td>Additional fee for late filing - independent clocks for each form</td><td class="text-end">Rs 100/day per form, NO upper cap on additional fee</td></tr>
                        <tr><td><strong>Section 35(2) Post-2021 Form 11 Penalty</strong> (substituted by S.O. 621(E) dated 11 February 2022)</td><td class="text-end">LLP cap <strong>Rs 1,00,000</strong> | Designated Partner cap <strong>Rs 50,000</strong> at Rs 100/day</td></tr>
                        <tr><td><strong>Section 34(2) Post-2021 Form 8 Penalty</strong> (parallel substituted structure)</td><td class="text-end">LLP cap <strong>Rs 1,00,000</strong> | Designated Partner cap <strong>Rs 50,000</strong> at Rs 100/day</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Small LLP 50% Penalty Reduction under Section 76A(3)(a)</strong></td><td class="text-end"><strong>Small LLPs (Section 2(1)(ta)) get 50% on adjudication only - daily Rs 100 fee unchanged</strong></td></tr>
                        <tr><td>Section 76A(9) Non-compliance with adjudication order (90 days)</td><td class="text-end">Imprisonment up to 6 months OR fine Rs 25,000 - Rs 1,00,000 OR both</td></tr>
                        <tr><td>Continuous non-filing (2-3 years)</td><td class="text-end">LLP may be struck off by Registrar under Section 75</td></tr>
                        <tr><td>CCFS 2026 Amnesty Coverage</td><td class="text-end">DOES NOT apply to LLPs</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Form 11 and Form 8 Filing consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20combined%20Form%2011%20%2B%20Form%208%20package%20from%20Rs%208%2C000." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Form 11 + Form 8 Combined Timeline (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Financial year ends</td><td class="text-end">31 March 2026 (Section 2(1)(j) LLP Act)</td></tr>
                        <tr><td>Form 11 data collection window opens</td><td class="text-end">April 2026 (Internal SLA)</td></tr>
                        <tr><td>CS-in-practice certification (where contribution > Rs 50 lakh OR turnover > Rs 5 crore)</td><td class="text-end">Before 30 May 2026 (Rule 25)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Form 11 filing deadline</strong></td><td class="text-end"><strong>30 May 2026 (Section 35 LLP Act 2008)</strong></td></tr>
                        <tr><td>Books closure for audit</td><td class="text-end">June-July 2026 (Section 34)</td></tr>
                        <tr><td>Statutory audit (where threshold crossed)</td><td class="text-end">July-August 2026 (Section 34(4) + Rule 24(8))</td></tr>
                        <tr><td>ITR-5 filing for non-audit LLPs</td><td class="text-end">31 July 2026 (Section 139(1) IT Act)</td></tr>
                        <tr><td>DIR-3 KYC for designated partners (current cycle)</td><td class="text-end">30 September 2026 (Rule 12A)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Form 8 filing deadline</strong></td><td class="text-end"><strong>30 October 2026 (Section 34 LLP Act 2008)</strong></td></tr>
                        <tr><td>ITR-5 filing for audit LLPs</td><td class="text-end">31 October 2026 (Section 44AB IT Act)</td></tr>
                        <tr><td>Patron turnaround per form (Form 11 / Form 8)</td><td class="text-end">3 to 5 working days each (Internal SLA)</td></tr>
                        <tr><td>Patron combined turnaround across the cycle</td><td class="text-end">1 to 2 weeks across the annual cycle</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Next DIR-3 KYC cycle (Triennial per G.S.R. 943(E))</strong></td><td class="text-end"><strong>30 June 2028 for DPs filed FY 2025-26</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; The two forms have INDEPENDENT Rs 100/day penalty clocks.</strong> Missing both forms accumulates Rs 200 per day combined. Plus the substituted post-2021 Section 35(2) (Form 11) and Section 34(2) (Form 8) penalties cap LLP exposure at Rs 1,00,000 per form / Rs 50,000 per designated partner. Small LLPs under Section 2(1)(ta) get 50% reduction on these penalties under Section 76A(3)(a) - but the daily Rs 100 additional fee remains the same.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on path chosen (standalone Rs 8k-12k vs bundle Rs 25k), audit applicability under Section 34(4), CS certification applicability under Rule 25, and any pending Form 3 / Form 4 / Form 5 event filings that need clearing before Form 11. Government fees, audit fee, CS certification fee, and DSC charges billed separately at actuals.</p>


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
            <h2 class="section-title">Why Use a CA Firm for Combined LLP Form 11 + Form 8 Filing</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Dual-Deadline Coordination</h3>
                <p>Form 11 by 30 May and Form 8 by 30 October - independent penalty clocks at Rs 100 per day per form under Section 35(2) / Section 34(2) substituted by LLP Amendment Act 2021. A CA firm runs both calendar lines without dropping either. Post-2021 caps: Rs 1,00,000 LLP / Rs 50,000 designated partner per form.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>Audit Threshold Testing (Section 34(4))</h3>
                <p>The Section 34(4) test (turnover > Rs 40 lakh OR contribution > Rs 25 lakh) must be re-run every year. A small LLP that grows past either threshold needs audit coordination; many founders miss this transition. Patron tests on intake and arranges practising CA audit where applicable - Section 76A(3)(a) Small LLP 50% benefit preserved where eligible.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>CS Certification Testing (Rule 25)</h3>
                <p>Form 11 requires CS-in-practice certification at contribution > Rs 50 lakh OR turnover > Rs 5 crore under Rule 25. This is a SEPARATE test from audit applicability under Section 34(4) - different thresholds, different professional. Missing it triggers Form 11 rejection. Patron tests both thresholds independently.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Contribution-Figure Consistency Across Forms</h3>
                <p>Form 11 contribution and Form 8 contribution must reconcile EXACTLY - they are filed 5 months apart but capture the same 31 March balance. Filing one in May and another in October without locked figures creates discrepancies that trigger ROC queries. Patron locks the 31 March balance on both forms at the start of the cycle.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>Section 35(2) Post-2021 Penalty Awareness</h3>
                <p>Many online articles still cite stale pre-2021 figures ("Rs 25,000 to Rs 5 lakh on designated partners"). Post-LLP (Amendment) Act 2021 (S.O. 621(E) dated 11 February 2022 effective 1 April 2022), Section 35(2) was substituted to provide Rs 100/day capped at Rs 1,00,000 LLP / Rs 50,000 DP. Patron applies the current framework.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Continuity Across Years</h3>
                <p>A single firm holding multi-year Form 11, Form 8, and audit working papers catches anomalies and partner-data drift that year-by-year freelance work cannot. 7-year archive maintained. Critical for investor diligence, lender review, partner exit valuations, and any future Section 75 strike-off defence.</p>
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

                <h3 style="margin-top:24px;">Form 11 + Form 8 Outcome Proof - FY 2024-25 Internal Metrics</h3>
                <ul>
                    <li>Patron filed <strong>800+ LLP Form 11 returns by 30 May</strong> and <strong>800+ Form 8 returns by 30 October</strong> across all client LLPs</li>
                    <li><strong>100 percent on-time rate</strong> across both forms</li>
                    <li><strong>Zero contribution-figure mismatches</strong> between Form 11 and Form 8</li>
                    <li>Sub-5 percent MCA query rate (sub-1 percent in FY 2024-25)</li>
                    <li>Average designated partner time per filing cycle: 3-5 hours total across both forms</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves LLP Form 11 and Form 8 filing engagements across India - both in-person and remotely. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies including professional services LLPs, consulting partnerships, real estate LLPs, and technology services LLPs.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Form 11 + Form 8 vs Company AOC-4 + MGT-7: Cross-Entity Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>LLP (Form 11 + Form 8)</th><th>Company (AOC-4 + MGT-7 / MGT-7A)</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Statute</td><td>LLP Act, 2008 + LLP Rules, 2009</td><td>Companies Act, 2013 + Companies (Accounts) Rules 2014 + Companies (Management and Administration) Rules 2014</td></tr>
                        <tr><td>Annual return form</td><td>Form 11 (structural / partner registry)</td><td>MGT-7 (regular) or MGT-7A (small companies, OPCs)</td></tr>
                        <tr><td>Financial statement form</td><td>Form 8 (financials + solvency declaration)</td><td>AOC-4 (Standard, XBRL, CFS, NBFC, CSR-2 variants)</td></tr>
                        <tr><td>Annual return deadline</td><td><strong>30 May</strong> (60 days from FY end)</td><td>29 November (60 days from AGM)</td></tr>
                        <tr><td>Financial statement deadline</td><td><strong>30 October</strong> (30 days from 6 months after FY end)</td><td>End October (30 days from AGM)</td></tr>
                        <tr><td>Filing sequence</td><td>Form 11 FIRST then Form 8</td><td>AOC-4 FIRST then MGT-7 / MGT-7A</td></tr>
                        <tr><td>Audit threshold</td><td>Turnover > Rs 40 lakh OR contribution > Rs 25 lakh (Section 34(4))</td><td>All companies - audit mandatory regardless under Section 139</td></tr>
                        <tr><td>CS certification threshold</td><td>Form 11: contribution > Rs 50 lakh OR turnover > Rs 5 crore (Rule 25)</td><td>MGT-7: listed companies, paid-up Rs 10 crore, or turnover Rs 50 crore (MGT-8)</td></tr>
                        <tr><td>Daily late fee</td><td>Rs 100 per day per form (no cap on daily fee)</td><td>Rs 100 per day per form (Section 403, no cap on daily fee)</td></tr>
                        <tr><td>Penalty (post-Amendment Acts)</td><td><strong>Section 35(2) post-2021:</strong> LLP cap Rs 1L / DP cap Rs 50k at Rs 100/day</td><td><strong>Section 92(5) / 137(3) post-2020:</strong> Company cap Rs 2L / Officer cap Rs 50k at Rs 100/day</td></tr>
                        <tr><td>Small entity relief</td><td>Small LLP under Section 2(1)(ta): 50% penalty under Section 76A(3)(a)</td><td>Small company under Section 2(85): MGT-7A abridged version; Section 446B half-penalty</td></tr>
                        <tr><td>AGM requirement</td><td><strong>None</strong> - LLPs do not hold AGM</td><td>Mandatory under Section 96 by 30 September; AGM must precede AOC-4 / MGT-7</td></tr>
                        <tr><td>Amnesty under CCFS 2026</td><td><strong>NOT applicable to LLPs</strong></td><td>Available for Pvt Ltd defaults</td></tr>


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
                
                
                <p>Form 11 and Form 8 are two of four annual filings for an LLP. The full annual cycle also requires DIR-3 KYC for designated partners and ITR-5 for income tax. Related Patron services:</p>
                <ul>
                    <li><a href="/llp-annual-compliance"><strong>LLP Annual Compliance (Bundle)</strong></a> - the full bundle covering Form 11, Form 8, ITR-5, DIR-3 KYC, and audit at Rs 25,000 fixed fee. <strong>Recommended path</strong> if buying multiple filings.</li>
                    <li><a href="/llp-compliance"><strong>LLP Compliance (Hub)</strong></a> - broader LLP compliance hub including event-based filings, Form 3 / Form 4 partner changes, and LLP Agreement amendments.</li>
                    <li><a href="/llp-form-11-filing"><strong>LLP Form 11 Filing (Standalone)</strong></a> - Form 11 alone for clients who file Form 8 elsewhere.</li>
                    <li><a href="/llp-form-8-filing"><strong>LLP Form 8 Filing (Standalone)</strong></a> - Form 8 alone for clients who file Form 11 elsewhere.</li>
                    <li><a href="/director-kyc"><strong>DIR-3 KYC for DPIN</strong></a> - triennial filing per G.S.R. 943(E) regime for designated partners.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Pvt Ltd Annual Compliance</strong></a> - company-side parallel for founders considering conversion.</li>
                    <li><a href="/compliance-calendar"><strong>Compliance Calendar</strong></a> - tracked deadlines for the full financial year.</li>
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
                    <li><strong>Limited Liability Partnership Act, 2008</strong> - master statute for all LLPs in India. Key sections: 34 (Statement of Account and Solvency obligation), 35 (Annual Return obligation), 35(2) (substituted post-2021 penalty for Form 11 default), 34(2) (parallel substituted structure for Form 8 default), 2(1)(ta) (Small LLP definition), 75 (strike-off), 76A (adjudication framework)</li>
                    <li><strong>LLP (Amendment) Act, 2021</strong> - <strong>Notification S.O. 621(E) dated 11 February 2022, effective 1 April 2022.</strong> Substituted Section 35(2) and Section 34(2) penalty structures from "Rs 25,000 to Rs 5 lakh fine" to "Rs 100/day capped at Rs 1,00,000 LLP / Rs 50,000 DP". Introduced Section 2(1)(ta) Small LLP and Section 76A(3)(a) 50% reduced penalty.</li>
                    <li><strong>Limited Liability Partnership Rules, 2009</strong> - Rule 24 (Form 8 procedure), Rule 24(8) (audit requirement), Rule 25 (Form 11 procedure and CS certification thresholds)</li>
                    <li><strong>Companies (Appointment and Qualification of Directors) Rules, 2014</strong> - Rule 12A governs DIR-3 KYC for DPIN. Substituted via G.S.R. 943(E) dated 31 December 2025, effective 31 March 2026, introducing TRIENNIAL filing cycle.</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - additional fee structure applicable to LLP forms by analogy under post-2022 framework</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections</h3>
                <ul>
                    <li><strong>Section 34</strong> of LLP Act 2008 - Statement of Account and Solvency (Form 8) obligation</li>
                    <li><strong>Section 34(2)</strong> - solvency declaration by designated partners; substituted penalty post-2021 for Form 8 default</li>
                    <li><strong>Section 34(4)</strong> - audit requirement where turnover exceeds Rs 40 lakh OR contribution exceeds Rs 25 lakh</li>
                    <li><strong>Section 35</strong> of LLP Act 2008 - Annual Return (Form 11) obligation within 60 days of FY end (30 May)</li>
                    <li><strong>Section 35(2)</strong> POST-LLP Amendment Act 2021 - substituted penalty: LLP and designated partners liable to Rs 100/day capped at Rs 1,00,000 LLP and Rs 50,000 DP (replacing pre-2021 fine Rs 25,000-5 lakh)</li>
                    <li><strong>Section 2(1)(ta)</strong> of LLP Act 2008 - Small LLP definition (contribution up to Rs 25 lakh AND turnover up to Rs 40 lakh, both thresholds)</li>
                    <li><strong>Section 76A</strong> - Adjudication of penalties framework introduced by LLP (Amendment) Act 2021</li>
                    <li><strong>Section 76A(3)(a)</strong> - 50% reduced penalty for Small LLPs under Section 2(1)(ta)</li>
                    <li><strong>Section 76A(9)</strong> - imprisonment up to 6 months OR fine Rs 25,000-Rs 1,00,000 OR both for non-compliance with adjudication order within 90 days</li>
                    <li><strong>Section 75</strong> - LLP strike-off by Registrar for continuous non-filing</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule (Post-LLP Amendment Act 2021)</h3>
                <ul>
                    <li><strong>Additional fee for late filing</strong> (Form 11 / Form 8): Rs 100 per day per form, no upper cap on daily fee. Independent clocks for each form.</li>
                    <li><strong>Section 35(2) Post-2021 Form 11 Penalty:</strong> Rs 100/day, capped at <strong>Rs 1,00,000 for the LLP</strong> and <strong>Rs 50,000 for designated partners</strong>. Substituted by Section 9 of LLP (Amendment) Act 2021 (S.O. 621(E) dated 11.02.2022).</li>
                    <li><strong>Section 34(2) Post-2021 Form 8 Penalty:</strong> Parallel substituted structure - Rs 100/day, capped at Rs 1,00,000 LLP / Rs 50,000 DP.</li>
                    <li><strong>Section 76A(3)(a) Small LLP 50% Penalty Reduction:</strong> Applies to adjudication only. Daily Rs 100 additional fee remains unchanged.</li>
                    <li><strong>Section 76A(9):</strong> Imprisonment up to 6 months OR fine Rs 25,000-Rs 1,00,000 OR both for non-compliance with adjudication order within 90 days.</li>
                    <li><strong>Continuous non-filing (2-3 years):</strong> LLP may be struck off by Registrar under Section 75.</li>
                    <li><strong>CCFS 2026:</strong> DOES NOT extend to LLPs - past defaults must be cleared with full accumulated additional fee plus capped penalty.</li>
                </ul>

                <h3 style="margin-top:24px;">Government Filing Fee by Contribution Slab</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Total Contribution</th><th>Filing Fee Per Form</th></tr></thead>
                    <tbody>
                        <tr><td>Up to Rs 1 lakh</td><td>Rs 50</td></tr>
                        <tr><td>Rs 1 lakh to Rs 5 lakh</td><td>Rs 100</td></tr>
                        <tr><td>Rs 5 lakh to Rs 10 lakh</td><td>Rs 150</td></tr>
                        <tr><td>Rs 10 lakh to Rs 25 lakh</td><td>Rs 200</td></tr>
                        <tr><td>Rs 25 lakh to Rs 1 crore</td><td>Rs 400</td></tr>
                        <tr><td>Above Rs 1 crore</td><td>Rs 600</td></tr>
                        <tr><td>Foreign LLP (Form 8)</td><td>Rs 1,000</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for Form 11 / Form 8 filing, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for S.O. 621(E) dated 11 February 2022 (LLP Amendment Act 2021 commencement), and the <a href="https://www.indiacode.nic.in/handle/123456789/2065" target="_blank" rel="noopener">LLP Act, 2008</a> on India Code for full statutory text of Sections 34, 35, 35(2), 2(1)(ta), 76A.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on the Form 11 vs Form 8 distinction, the 30 May + 30 October dual deadline, audit threshold under Section 34(4) (Rs 40 lakh / Rs 25 lakh), CS certification threshold under Rule 25 (Rs 50 lakh / Rs 5 crore), Section 35(2) post-LLP Amendment Act 2021 penalty (Rs 100/day capped Rs 1 lakh LLP / Rs 50k DP), Small LLP 50% benefit, 1 October first-FY Form 8 exemption, and the dormant LLP filing obligation.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the difference between LLP Form 11 and Form 8?</h3>
                        <div class="faq-expanded__a"><p>Form 11 is the LLP Annual Return under Section 35 of the LLP Act, 2008 - it captures partner, designated partner, and contribution structure (the structural / governance layer). Form 8 is the Statement of Account and Solvency under Section 34 - it captures the LLP's financial position with Part A (Solvency Statement) and Part B (Income, Expenditure, and Balance Sheet). Form 11 is due 30 May; Form 8 is due 30 October. Both are mandatory; neither substitutes the other.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the due dates for LLP Form 11 and Form 8?</h3>
                        <div class="faq-expanded__a"><p>Form 11 is due within 60 days from the end of the financial year - typically 30 May for FY ending 31 March. Form 8 is due within 30 days from the end of 6 months after the financial year end - typically 30 October for FY ending 31 March. For FY 2025-26 specifically: Form 11 by 30 May 2026 and Form 8 by 30 October 2026. The deadlines are firm; MCA rarely grants extensions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When is an LLP audit mandatory?</h3>
                        <div class="faq-expanded__a"><p>Under Section 34(4) of the LLP Act, 2008 read with Rule 24(8) of LLP Rules, 2009, an LLP audit by a practising Chartered Accountant is mandatory where turnover during the financial year exceeds Rs 40 lakh OR total contribution from partners exceeds Rs 25 lakh. Either condition triggers audit. Below both thresholds, the LLP can file unaudited Form 8 with the designated partners certifying the figures themselves under Small LLP status (Section 2(1)(ta)).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of Form 11 or Form 8?</h3>
                        <div class="faq-expanded__a"><p>Both forms attract an additional fee of Rs 100 per day per form with no upper cap on the daily fee. The penalty clocks run INDEPENDENTLY - missing both forms can accumulate Rs 200 per day combined. Plus the substituted post-LLP (Amendment) Act 2021 penalty: under Section 35(2) for Form 11 default (and parallel Section 34(2) for Form 8), LLP and designated partners are liable to Rs 100 per day capped at Rs 1,00,000 for the LLP and Rs 50,000 for designated partners. Section 35(2) was substituted by Section 9 of the LLP (Amendment) Act 2021 via Notification S.O. 621(E) dated 11 February 2022, effective 1 April 2022 - replacing the earlier Rs 25,000 to Rs 5 lakh fine structure. Small LLPs under Section 2(1)(ta) get 50% reduced penalty under Section 76A(3)(a) on adjudication only - daily Rs 100 fee unchanged.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is CS certification required for LLP Form 11?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only where the LLP's contribution exceeds Rs 50 lakh OR turnover during the financial year exceeds Rs 5 crore. In those cases, Form 11 must be certified by a Company Secretary in practice with UDIN, under Rule 25 of LLP Rules, 2009. Below both thresholds, Form 11 is signed only by a designated partner with DSC. CS certification is a separate test from audit applicability (which has different thresholds Rs 40 lakh / Rs 25 lakh under Section 34(4) governing Form 8).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do dormant LLPs with no business activity still need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. Both Form 11 and Form 8 are mandatory for every LLP registered in India, regardless of business activity, turnover, profit, or partner count. Dormant LLPs file nil returns - declaring zero turnover and unchanged partner / contribution position. Non-filing of dormant LLP returns still attracts the Rs 100 per day per form additional fee and the post-2021 Section 35(2) / Section 34(2) penalty caps.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are LLPs incorporated after 1 October exempt from Form 8?</h3>
                        <div class="faq-expanded__a"><p>Partially. LLPs incorporated on or after 1 October of any year are exempt from filing Form 8 for the financial year ending on the immediately following 31 March (i.e., the short first FY). They may still file Form 8 voluntarily. The exemption does NOT apply to Form 11 - Form 11 must be filed even in the first FY, however short. From the second financial year onwards, both forms are mandatory without exception.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is a Small LLP and does it get reduced penalties?</h3>
                        <div class="faq-expanded__a"><p>A Small LLP under Section 2(1)(ta) of the LLP Act, 2008 (inserted by the LLP (Amendment) Act 2021 via S.O. 621(E) dated 11 February 2022) is one where total contribution does not exceed Rs 25 lakh AND turnover during the immediately preceding FY does not exceed Rs 40 lakh - both thresholds must be met. Small LLPs enjoy 50% reduced penalty under Section 76A(3)(a) for adjudication of offences. The 50% reduction applies to the substituted Section 35(2) / 34(2) penalties (Rs 1L LLP / Rs 50k DP caps) only - NOT to the daily Rs 100 additional fee, which remains the same for all LLPs.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is Form 11?</strong> LLP Annual Return under Section 35 of LLP Act 2008 - captures partner and contribution structure. Due 30 May.</p>
                <p><strong>What is Form 8?</strong> LLP Statement of Account and Solvency under Section 34 - captures financials and solvency declaration. Due 30 October.</p>
                <p><strong>Due dates?</strong> Form 11: 30 May (60 days from FY end). Form 8: 30 October (30 days from 6 months after FY end).</p>
                <p><strong>Audit threshold?</strong> Turnover > Rs 40 lakh OR contribution > Rs 25 lakh triggers mandatory audit under Section 34(4) + Rule 24(8).</p>
                <p><strong>CS certification?</strong> Form 11 requires CS-in-practice certification with UDIN at contribution > Rs 50 lakh OR turnover > Rs 5 crore under Rule 25.</p>
                <p><strong>What does Patron charge?</strong> Combined Rs 8,000 (no audit) to Rs 12,000 (audit + CS cert). Rs 25,000 LLP bundle covers all four annual filings.</p>
                <p><strong>Late filing penalty (post-2021)?</strong> Rs 100 per day per form additional fee (no cap on daily fee) PLUS Section 35(2) / 34(2) substituted penalty: LLP cap Rs 1,00,000 / DP cap Rs 50,000.</p>
                <p><strong>Small LLP benefit?</strong> 50% reduction on Section 35(2) / 34(2) penalty under Section 76A(3)(a) for Small LLPs under Section 2(1)(ta). Daily Rs 100 fee unchanged.</p>
                <p><strong>Does CCFS 2026 cover LLPs?</strong> No. LLPs are excluded. Past defaults must be cleared with full accumulated daily fee + capped penalty.</p>
                <p><strong>LLP Form 11 aur Form 8 mein kya farak hai?</strong> <em>Form 11 hai LLP ka annual return - Section 35 ke under, partners aur contribution structure capture karta hai. Due date 30 May har saal. Form 8 hai Statement of Account aur Solvency - Section 34 ke under, financial statements capture karta hai. Due date 30 October. Dono mandatory hain har LLP ke liye, har saal - chahe activity ho ya na ho. Audit chahiye sirf jab turnover Rs 40 lakh se zyada ho YA contribution Rs 25 lakh se zyada ho. Patron Rs 8,000 mein dono combine karke file karta hai.</em></p>
                <p><strong>LLP audit kab mandatory hai?</strong> <em>Section 34(4) ke under do tests hain - dono independent: (1) turnover Rs 40 lakh se zyada OR (2) contribution Rs 25 lakh se zyada. Kisi bhi ek condition par audit mandatory ho jaata hai. Dono thresholds ke neeche ho to designated partners khud certify kar sakte hain Form 8 - audit lagega nahi. Patron har saal yeh test re-run karta hai - chhoti LLP grow karke threshold cross kare to audit coordination ka time milta hai.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Urgency: Two Hard Dates for FY 2025-26</h2>
            <div class="content-text">
                
                
                <p>For the financial year ending 31 March 2026, LLPs face <strong>two firm MCA deadlines</strong>:</p>
                <ul>
                    <li><strong>Form 11 by 30 May 2026</strong> (60 days from FY end) - the tightest LLP deadline</li>
                    <li><strong>Form 8 by 30 October 2026</strong> (30 days from 6 months after FY end)</li>
                </ul>

                <p style="margin-top:16px;">Each form runs its own Rs 100 per day no-cap daily additional fee under the post-2022 fee framework. Missing both forms accumulates Rs 200 per day combined. On top, the post-LLP (Amendment) Act 2021 Section 35(2) imposes a substituted penalty - LLP cap Rs 1,00,000 / designated partner cap Rs 50,000 at Rs 100/day - on Form 11 default, with parallel Section 34(2) penalty on Form 8 default. Small LLPs under Section 2(1)(ta) get 50% reduction under Section 76A(3)(a) on adjudication only.</p>

                <p style="margin-top:16px;"><strong>CCFS 2026 amnesty does NOT extend to LLPs</strong> - the Companies Act amnesty covers companies only. File Form 11 first by 30 May, then complete the audit cycle for Form 8 by 30 October.</p>

                <p style="margin-top:16px;"><strong>Get a Free Quote in 2 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20combined%20LLP%20Form%2011%20%2B%20Form%208%20filing%20-%20please%20quote%20from%20Rs%208%2C000." target="_blank">WhatsApp us</a>. Free 15-minute scoping call. We respond within 2 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: Two Forms, One Annual Workflow</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Form 11 and Form 8 are the two core annual MCA filings for every LLP in India - Form 11 under Section 35 (Annual Return, due 30 May) and Form 8 under Section 34 (Statement of Account and Solvency, due 30 October). Both are mandatory regardless of LLP size or activity. The forms cover different domains - Form 11 is structural, Form 8 is financial - and each runs an independent Rs 100 per day late-filing additional fee with no cap on the daily clock.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Under the post-LLP (Amendment) Act 2021 framework (substituted via Notification S.O. 621(E) dated 11 February 2022, effective 1 April 2022), Section 35(2) penalty for Form 11 default is now Rs 100/day capped at Rs 1,00,000 for the LLP and Rs 50,000 for designated partners (replacing the earlier Rs 25,000-Rs 5 lakh fine). Section 34(2) provides parallel structure for Form 8 default. Small LLPs under Section 2(1)(ta) - contribution up to Rs 25 lakh AND turnover up to Rs 40 lakh - get 50% reduced penalty under Section 76A(3)(a) on adjudication only.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Statutory audit under Section 34(4) + Rule 24(8) is triggered only where turnover exceeds Rs 40 lakh OR contribution exceeds Rs 25 lakh (either threshold). CS-in-practice certification under Rule 25 applies to Form 11 where contribution exceeds Rs 50 lakh OR turnover exceeds Rs 5 crore. CCFS 2026 amnesty does NOT extend to LLPs. Patron files both forms combined from Rs 8,000 standalone, or bundles them into the full LLP Annual Compliance package at Rs 25,000 fixed fee (covering Form 11, Form 8, ITR-5, DIR-3 KYC, and audit where applicable). 800+ Form 11 and 800+ Form 8 returns filed FY 2024-25 with 100 percent on-time rate. Zero contribution-figure mismatches.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20combined%20Form%2011%20%2B%20Form%208%20package%20from%20Rs%208%2C000." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Form 11 and Form 8 Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. Combined Form 11 + Form 8 filing delivered pan-India for professional services LLPs, consulting partnerships, real estate LLPs, technology services LLPs, and dormant LLPs. 8-month annual workflow from March setup through November acknowledgements.</p>
          
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise Form 11 + Form 8 Filing</div>
                <div class="pa-block-sub">Local CA + CS team for LLP filings</div>
                <div class="pa-city-grid">
                    <a href="/llp-form-11-form-8-filing/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Form 11+8 Filing in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/llp-form-11-form-8-filing/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Form 11+8 Filing in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/llp-form-11-form-8-filing/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Form 11+8 Filing in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/llp-form-11-form-8-filing/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Form 11+8 Filing in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Adjacent LLP services and conversion paths</div>
                <div class="pa-cross-grid">
                    <a href="/llp-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">LLP Annual Compliance Bundle</div><div class="pa-card-sub">Rs 25,000 Full Cycle</div></div>
                    </a>
                    <a href="/llp-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">LLP Compliance Hub</div><div class="pa-card-sub">Event-Based Filings</div></div>
                    </a>
                    <a href="/llp-form-11-filing" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Form 11 Standalone</div><div class="pa-card-sub">Annual Return Only</div></div>
                    </a>
                    <a href="/llp-form-8-filing" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Form 8 Standalone</div><div class="pa-card-sub">Solvency Statement Only</div></div>
                    </a>
                    <a href="/director-kyc" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">DIR-3 KYC for DPIN</div><div class="pa-card-sub">Triennial Filing</div></div>
                    </a>
                    <a href="/compliance-calendar" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Compliance Calendar</div><div class="pa-card-sub">Month-by-Month</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026 (after FY 2025-26 LLP filing cycle peaks May-October). Review triggers include further amendment to Sections 34 / 35 / 35(2) / 34(2) / 76A of LLP Act 2008 beyond the LLP (Amendment) Act 2021 (S.O. 621(E) dated 11 February 2022), LLP Rules 2009 Rule 24 / 24(8) / 25 revisions, DIR-3 KYC framework changes (currently triennial per G.S.R. 943(E) dated 31 December 2025), introduction of any LLP-specific amnesty scheme (currently CCFS 2026 excludes LLPs), Government filing fee revisions, and Section 2(1)(ta) Small LLP threshold revisions (Central Government may raise contribution up to Rs 5 crore and turnover up to Rs 50 crore).</p>
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