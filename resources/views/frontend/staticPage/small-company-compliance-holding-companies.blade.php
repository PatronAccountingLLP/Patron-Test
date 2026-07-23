
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
    <title>Holding Company Compliance India</title>
    <meta name="description" content="Holding company compliance with Section 186 disclosures, AOC-1 statement of subsidiaries, RPT under Section 188, ITR-6. Patron package Rs 35,000 to Rs 50,000.">
    <link rel="canonical" href="/small-company-compliance-holding-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Holding Company Compliance India 2026 | Patron Accounting">
    <meta property="og:description" content="Holding company compliance with Section 186 disclosures, AOC-1 statement of subsidiaries, RPT under Section 188, ITR-6. Patron package Rs 35,000 to Rs 50,000.">
    <meta property="og:url" content="/small-company-compliance-holding-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/small-company-compliance-holding-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Holding Company Compliance India 2026 | Patron Accounting">
    <meta name="twitter:description" content="Holding company compliance with Section 186 disclosures, AOC-1 statement of subsidiaries, RPT under Section 188, ITR-6. Patron package Rs 35,000 to Rs 50,000.">
    <meta name="twitter:image" content="/images/small-company-compliance-holding-companies-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/small-company-compliance-holding-companies#breadcrumb",
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
                        "name": "Holding Company Compliance",
                        "item": "/small-company-compliance-holding-companies"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/small-company-compliance-holding-companies#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "We just hold investments and have no operating business - do we still need full compliance?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. A holding company - whether pure investment vehicle, family holdco, or group holding structure - is a private limited company under the Companies Act, 2013. The full annual compliance regime applies: AOC-4, MGT-7, ITR-6, DIR-3 KYC, DPT-3, statutory audit under Section 139. What changes from operating-company compliance is the CONTENT of the filings (more Section 186 disclosures, AOC-1 attachment, possibly Consolidated Financial Statements) and the governance overlay (special resolutions on cross-threshold investments under Section 186(3), RPT approvals on inter-company transactions under Section 188). Compliance attaches to the corporate entity, not to operating activity."
                }
            },
            {
                "@type": "Question",
                "name": "What is Section 186 and when does it apply to a holding company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 186 of the Companies Act, 2013 governs loans, guarantees, security, and investments by a company in any other body corporate. The Section 186(2) limit caps the aggregate at the HIGHER of: 60 percent of paid-up share capital + free reserves + securities premium, OR 100 percent of free reserves + securities premium. Above the limit, a special resolution under Section 186(3) is required at general meeting and MGT-14 filed within 30 days. For a holding company, Section 186 applies on every investment, loan, or guarantee transaction with subsidiaries, group entities, or portfolio companies. Wholly-owned subsidiaries are exempt from the special resolution requirement under Rule 11 - but Section 186(4) disclosure, Section 186(5) unanimous board resolution, and MBP-2 register entries still apply."
                }
            },
            {
                "@type": "Question",
                "name": "What is AOC-1 and when must a holding company file it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form AOC-1 is the statement containing salient features of subsidiaries, associates, and joint ventures - paid-up capital, reserves, total assets, total liabilities, investments, turnover, profit before / after tax, percentage of shareholding. AOC-1 is mandatorily attached to AOC-4 under Section 129(3) read with Rule 5 of Companies (Accounts) Rules, 2014, whenever the company has any subsidiary, associate, or joint venture. The information in AOC-1 must reconcile with the subsidiary's own audited financial statements - mismatches trigger ROC queries on AOC-4 and potential RPT scrutiny. Patron prepares AOC-1 per entity and coordinates with each subsidiary's auditor before filing."
                }
            },
            {
                "@type": "Question",
                "name": "Do we need Consolidated Financial Statements?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes - whenever the holding company has any subsidiary, associate, or joint venture, Section 129(3) of the Companies Act, 2013 mandates preparation of Consolidated Financial Statements (CFS) in addition to standalone financial statements. CFS applies Ind AS 110 (for Ind AS reporting entities) or AS 21 / 23 / 27 (for AS reporting entities). The CFS is audited separately (often by the same auditor as standalone) and annexed to AOC-4 along with AOC-1. For a pure investment vehicle holding only portfolio investments in unrelated companies (not subsidiaries / associates / JVs), CFS is NOT required."
                }
            },
            {
                "@type": "Question",
                "name": "How are related party transactions handled in a holding company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 188 of the Companies Act, 2013 governs related party transactions. For a holding company, every inter-company loan, guarantee, sale or purchase of investments, services rendered or received, leasing of property between holding company and subsidiaries / associates / KMP / relatives is an RPT. Each RPT must be at arm's length basis with documented pricing. Board approval is required for all RPTs; Audit Committee approval (where applicable under Section 177) is required for material RPTs. Above the thresholds prescribed under Rule 15 of Companies (Meetings of Board and its Powers) Rules, 2014, a special resolution at general meeting is required with MGT-14 filing. Post-2020 Amendment, Section 188(3) penalty is Rs 25 lakh for listed companies or Rs 5 lakh for other companies on each defaulting party - one of three sections where penalty was INCREASED."
                }
            },
            {
                "@type": "Question",
                "name": "When does a pure investment company become an NBFC or Core Investment Company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under the RBI framework, a Core Investment Company (CIC) is a non-banking financial company that holds investments in equity, debt instruments, or loans of group companies. NBFC-CIC registration with RBI is required when the company has: total assets above Rs 100 crore AND has raised public funds (debentures from public, fixed deposits, PE / VC funds with public participation). The broader NBFC 50-50 test: financial assets exceed 50 percent of total assets AND financial income exceeds 50 percent of total income. Most family holdcos sit comfortably below CIC thresholds because they do not raise public funds. Patron runs the CIC test annually and flags threshold proximity 12+ months in advance for restructuring or registration."
                }
            },
            {
                "@type": "Question",
                "name": "What is the two-layer subsidiary restriction?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Two separate two-layer provisions apply under the Companies Act framework and are often confused. Section 186(1) restricts investment through more than two layers of INVESTMENT COMPANIES in the investment chain (with exemptions for foreign acquisitions and statutory requirements). Companies (Restriction on number of layers) Rules, 2017 dated 20 September 2017 separately restrict total subsidiary layers to two for the corporate group structure (with exemptions for banks, insurance, NBFC, government companies, and certain other regulated entities). Existing layers as on 20 September 2017 are grandfathered; new layers above two are restricted. Multi-generational family holding structures frequently surface unexpected restructuring needs to comply."
                }
            },
            {
                "@type": "Question",
                "name": "Is ITR-6 simpler for a holding company with only passive income?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Mostly yes. A pure holding company with no operating business has Schedule BP (business income) at nil or near-nil; the active schedules are Schedule CG for capital gains on portfolio sales, Schedule OS for other sources (dividend, interest), Schedule HP if real estate is held, Schedule EI for exempt income, and Schedule TDS for TDS credits. Where the holding company has subsidiary dividend income, the post-Finance Act 2020 regime requires dividend to be treated as taxable income in the recipient holdco hands (not exempt as it was pre-2020). Audit under Section 44AB applies if turnover plus passive receipts exceed Rs 1 crore threshold (rare for pure holdcos). Patron uses ITR-6 Schedule HP / CG / OS / EI as primary, Schedule BP as residual."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/small-company-compliance-holding-companies#service",
                "name": "Holding Company Compliance in India",
                "url": "/small-company-compliance-holding-companies",
                "description": "End-to-end annual ROC, statutory, and tax compliance for pure holding companies, family investment vehicles, HNI portfolio holdcos, and group holding structures under the Companies Act 2013. Standard cycle (AOC-4, MGT-7, ITR-6, DIR-3 KYC, DPT-3, statutory audit under Section 139) plus six holding-company overlays: Section 186 limit tracking (60% / 100% formula) and special resolution coordination, Form MBP-2 register maintenance within 7 days, Form AOC-1 statement of subsidiaries / associates / JVs per Section 129(3) and Rule 5 of Companies (Accounts) Rules 2014, Consolidated Financial Statements under Section 129(3) per Ind AS 110 or AS 21 / 23 / 27, Section 188 RPT documentation with arms-length pricing, and annual NBFC / CIC threshold re-test against the Rs 100 crore total-asset line under RBI Core Investment Company framework. Patron three-tier pricing Rs 35,000 to Rs 50,000 per year by subsidiary count.",
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
                        "name": "Holding company",
                        "sameAs": "https://en.wikipedia.org/wiki/Holding_company"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Holding Company Compliance Tiers",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "Pure Investment Vehicle (No Subsidiaries)",
                            "price": "35000",
                            "priceCurrency": "INR",
                            "description": "Single-entity investment vehicle holding portfolio of equity / debt / mutual funds in unrelated companies. No subsidiaries / associates / JVs. No AOC-1 attachment, no CFS, no inter-company RPTs. Standard annual cycle plus Section 186 disclosures on portfolio additions. MBP-2 register maintenance. Annual NBFC / CIC threshold re-test."
                        },
                        {
                            "@type": "Offer",
                            "name": "Family Holdco with 1-3 Subsidiaries",
                            "price": "40000",
                            "priceCurrency": "INR",
                            "description": "Holding company with 1-3 subsidiaries / associates / JVs. AOC-1 statement of subsidiaries attached to AOC-4 under Section 129(3) and Rule 5 of Companies (Accounts) Rules 2014. Basic CFS preparation under Ind AS 110 or AS 21 / 23 / 27. Section 186 disclosures plus continuous Section 188 RPT framework with inter-company loans / services / asset transfers. MBP-2 register maintenance."
                        },
                        {
                            "@type": "Offer",
                            "name": "Group Holdco with 4+ Subsidiaries OR Active Inter-Company Activity",
                            "price": "50000",
                            "priceCurrency": "INR",
                            "description": "Multi-subsidiary group holding structure. Full Ind AS / AS consolidation across 4+ entities. Multiple Section 186 special resolutions per year. Continuous Section 188 RPT compliance with material thresholds (post-2020 penalty Rs 25 lakh listed / Rs 5 lakh other per defaulting party). Possible NBFC / CIC threshold proximity requiring quarterly tracking against Rs 100 crore line."
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
                        Holding Company Compliance in India: Pure Investment Vehicles
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> Section 186 disclosures, AOC-1 statement of subsidiaries, CFS under Section 129(3), Section 188 RPT, MBP-2 register, MGT-14 special resolutions.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 35,000 (pure investment vehicle) | Rs 40,000 (1-3 subsidiaries) | Rs 50,000 (4+ subsidiaries or active inter-company).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Pure holding companies, family investment vehicles, HNI portfolio holdcos, group holding structures structured as Pvt Ltd.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Threshold Check:</span> Annual NBFC / CIC threshold re-test at Rs 100 crore total assets + public funds raised under RBI framework.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 60+ FY24-25 Holdco Engagements | 100% Section 186 Compliance Rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20holding%20company%20compliance%20support%20covering%20Section%20186%20and%20AOC-1." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Holding Company Compliance'/>
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
                                <option value="small-company-compliance-holding-companies" selected>Holding Company Compliance (this page)</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance</option>
                                <option value="small-company-compliance-family-vehicles">Family Company Compliance</option>
                                <option value="small-company-compliance-dormant">Dormant Company Compliance</option>
                                <option value="strike-off-private-limited-company">Strike Off Pvt Ltd</option>
                                <option value="condonation-of-delay-roc-filings">Condonation of Delay</option>
                                <option value="annual-compliance-cost-comparison-cheap-vs-quality">Cost: Cheap vs Quality</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Got required documents within 4 hours of request. Patron tracked our Section 186 limit continuously and triggered 3 special resolutions across FY 2024-25 - all MGT-14 filed within the 30-day window. Zero compliance gaps.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FO</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Family Office Director</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai | Family Holdco 6 Subs</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professionalism, attention to detail, and timely communication made the process smooth. Our portfolio crossed Rs 80 crore - Patron flagged the CIC line 14 months ahead and we restructured. Avoided RBI registration entirely.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HNI Investment Vehicle | Delhi</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. Patron handled AOC-1 + CFS coordination across our 7 subsidiary structure - all reconciled with subsidiary auditors before AOC-4. Zero MCA queries. And it's not expensive at all.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Group Holdco CFO | Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">During our Rs 200 crore PE round diligence, the buyer's lawyers spent 3 weeks on our Section 186 trail and MBP-2 register. Patron's file passed every test. The diligence read was clean. Worth every rupee of the Rs 50k retainer.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PH</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Promoter Holdco</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune | PE Diligence FY24-25</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had a 4-tier subsidiary structure - Patron flagged the 2017 Rules layer cap breach at intake. Helped us execute a vertical merger to comply. Saved us from regulator action down the line.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Multi-Gen Family</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai | 3-generation structure</div>
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
                    <p>Free 15-minute diagnostic call. Section 186 baseline + CIC threshold test + group structure mapping within 24 hours. Continuous limit tracking, special resolution scheduling 30 days ahead, contemporaneous RPT documentation, annual CIC re-test. Investor-diligence grade file maintenance across 60+ FY24-25 holdco engagements with 100% Section 186 compliance rate.</p>
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
                <a href="#what-section" class="toc-btn">Section 2(46) / 2(87)</a>
                <a href="#who-section" class="toc-btn">Section 186 Limit Math</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">8-Step Annual Cycle</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA + CS</a>
                <a href="#comparison-section" class="toc-btn">Holdco vs Operating</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: Holding Company Compliance at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Holding Company Compliance Services at a Glance</strong></p>
                    <p>Pure holding companies and investment vehicles structured as <strong>private limited companies face the full Companies Act compliance regime - regardless of having no operating revenue</strong>. Standard annual cycle: AOC-4 + MGT-7 + ITR-6 + DIR-3 KYC + DPT-3 + statutory audit under Section 139. Holding-company overlays: <strong>Section 186</strong> governs inter-corporate loans and investments with <strong>60% / 100% limits</strong> requiring special resolution above the threshold; <strong>Section 188</strong> governs related party transactions; Form <strong>AOC-1</strong> statement of subsidiaries attaches to AOC-4 under Section 129(3); <strong>Consolidated Financial Statements</strong> required where subsidiaries / associates / JVs exist. Form MBP-2 register maintained chronologically. Pure investment companies above <strong>Rs 100 crore total assets</strong> check Core Investment Company (CIC) classification with RBI. Patron handles end-to-end at <strong>Rs 35,000 to Rs 50,000 per year</strong> by subsidiary count.</p>
                </div>
                <p>The compliance question for a holding company is not WHETHER compliance applies - it does, fully - but HOW it applies given the specific overlay of Section 186, Section 188, AOC-1, and CFS that operating companies typically do not face. Compliance attaches to the corporate entity, not to operating activity.</p>
                <p>Below is the quick-reference summary covering governing provisions (Sections 2(46), 2(87), 186, 188, 129(3), 137, 92, 139, 173), the Section 186(2) limit math (60% of paid-up + free reserves + securities premium OR 100% of free reserves + securities premium - whichever higher), the dual two-layer rule (Section 186(1) for investment-company layers + Companies (Restriction on number of layers) Rules 2017 for general subsidiary layers), the Rs 100 crore RBI CIC threshold, and Patron's three-tier pricing by subsidiary count.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 (Sections 2(46), 2(87), 186, 188, 129(3), 137, 92, 139, 173) read with Companies (Meetings of Board and its Powers) Rules, 2014 (Rule 11, Rule 15) and Companies (Restriction on number of layers) Rules, 2017</td></tr>
                        <tr><td>Applicable To</td><td>Pure holding companies, family investment vehicles, HNI portfolio holdcos, group holding companies, founder-promoter holding structures, IP / asset holdcos - structured as private limited companies</td></tr>
                        <tr><td>Section 186 Limit</td><td><strong>HIGHER of:</strong> 60% of (paid-up share capital + free reserves + securities premium account), OR 100% of (free reserves + securities premium account). Above the limit requires special resolution under Section 186(3) at general meeting. WOS / JV transactions exempt from special resolution but Section 186(4) disclosure + Section 186(5) unanimous board resolution still apply.</td></tr>
                        <tr><td>Two-Layer Rule</td><td><strong>Section 186(1):</strong> investment through max 2 layers of investment companies. <strong>Separately, Companies (Restriction on number of layers) Rules, 2017 dated 20 September 2017:</strong> max 2 layers of subsidiaries (with exemptions for banks, insurance, NBFC, government companies, certain regulated entities). Existing layers as on 20 September 2017 grandfathered.</td></tr>
                        <tr><td>CIC / NBFC Threshold</td><td>Core Investment Company under RBI: total assets above <strong>Rs 100 crore</strong> AND public funds raised → NBFC-CIC registration required. NBFC 50-50 test: financial assets > 50% AND financial income > 50% of totals.</td></tr>
                        <tr><td>Cost (Patron)</td><td>Rs 35,000 per year (pure investment vehicle, no subsidiaries) | Rs 40,000 per year (1-3 subsidiaries) | Rs 50,000 per year (4+ subsidiaries OR active inter-company transactions OR consolidation required)</td></tr>
                        <tr><td>Forms / Portal</td><td>AOC-4 + AOC-1 attachment + MGT-7 + ITR-6 + DIR-3 KYC + DPT-3 + MGT-14 (for special resolutions under Section 186(3) when limits exceeded) + MBP-2 register | MCA V3 portal</td></tr>
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
                <h2 class="section-title">What Is a Holding Company under the Companies Act?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>Section 2(46) of the Companies Act, 2013</strong> defines a "holding company" in relation to one or more other companies as a company of which such other companies are subsidiaries. <strong>Section 2(87)</strong> defines a "subsidiary" as a company in which the holding company controls the composition of the board of directors OR exercises / controls more than half of the total voting power.</p>

                    <p style="margin-top:16px;">In commercial usage, a "pure holding company" or "investment vehicle" is a company whose principal activity is to hold investments - equity shares, debentures, government securities, mutual funds, or other body-corporate securities - either in subsidiary group companies or in unrelated portfolio investments.</p>

                    <div class="highlight-box" style="margin-top:24px;background:#FEF4EE;border-left:4px solid #E8712C;">
                        <p><strong>&#9888; Compliance attaches to the entity, not to operating activity.</strong> The compliance question for a holding company is not WHETHER compliance applies - it does, fully - but HOW it applies given the specific overlay of Section 186, Section 188, AOC-1, and CFS that operating companies typically do not face. The Companies Act, 2013 treats every Pvt Ltd company the same for purposes of annual filings; what changes for a holding company is the CONTENT of those filings (more Section 186 disclosures, AOC-1 attachment, possibly CFS) and the GOVERNANCE LAYER (special resolutions on cross-threshold investments, RPT approvals on inter-company transactions).</p>
                    </div>

                    <p style="margin-top:24px;">Pure investment companies face one additional question that operating companies do not: <strong>when do they become a Non-Banking Financial Company (NBFC) or Core Investment Company (CIC) under RBI?</strong> The answer turns on the <strong>50-50 test</strong> (financial assets exceed 50 percent of total assets AND financial income exceeds 50 percent of total income) and, for CIC registration, on the <strong>Rs 100 crore total-asset threshold combined with public funds raised</strong>. Most family holdcos and founder-promoter holdcos sit comfortably below CIC thresholds; for those that approach the line, the question is real and Patron screens it at intake.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Holding Company Compliance:</strong></p>
                    
                    <p><strong>Section 2(46) - Holding company:</strong> A company of which one or more other companies are subsidiaries. Controlled via board composition or voting power.</p>
                    <p><strong>Section 2(87) - Subsidiary:</strong> A company in which the holding company controls the composition of the board OR exercises / controls more than half of the total voting power.</p>
                    <p><strong>Section 186 - Loans and investments:</strong> Master provision governing loans, guarantees, security, and investments by a company in any other body corporate. Includes the 60% / 100% limit (sub-section 2), special resolution requirement above limit (sub-section 3), disclosure requirement (sub-section 4), unanimous board resolution (sub-section 5), interest rate floor (sub-section 7), and exemptions (sub-section 11).</p>
                    <p><strong>Section 186(2) Limit:</strong> Higher of: 60% of (paid-up share capital + free reserves + securities premium), OR 100% of (free reserves + securities premium).</p>
                    <p><strong>Section 188 - Related Party Transactions:</strong> Arms-length basis required; board approval for all RPTs; Audit Committee approval (where applicable under Section 177) for material RPTs; special resolution at general meeting above Rule 15 thresholds.</p>
                    <p><strong>Section 129(3) - Consolidated Financial Statements:</strong> Mandatory wherever a subsidiary, associate, or joint venture exists. CFS audited and annexed to AOC-4 along with AOC-1.</p>
                    <p><strong>Form AOC-1:</strong> Statement containing salient features of subsidiaries / associates / joint ventures (paid-up capital, reserves, total assets, total liabilities, investments, turnover, profit, shareholding percentage). Attached to AOC-4 under Rule 5 of Companies (Accounts) Rules, 2014.</p>
                    <p><strong>Form MBP-2:</strong> Register of loans, guarantees, security, and investments maintained chronologically. Entries within 7 days of each transaction. Preserved permanently at registered office.</p>
                    <p><strong>Rule 11 of Companies (Meetings of Board and its Powers) Rules, 2014:</strong> Exempts loans / guarantees / security to wholly-owned subsidiary (WOS) or joint venture from Section 186(3) special resolution requirement. Does NOT exempt Section 186(4) disclosure or Section 186(5) unanimous board resolution.</p>
                    <p><strong>Companies (Restriction on number of layers) Rules, 2017:</strong> Notified 20 September 2017. Restricts holding company to maximum 2 layers of subsidiaries. Exempts banking, insurance, NBFC, government companies, certain regulated entities. Existing layers grandfathered.</p>
                    <p><strong>Core Investment Company (CIC):</strong> RBI Master Direction - non-banking financial company holding investments primarily in group companies. Registration required when total assets > Rs 100 crore AND public funds raised. NBFC 50-50 test applies separately.</p>
                    <p><strong>Public Funds:</strong> Funds raised through public deposits, NCDs issued to public, fixed deposits, or PE / VC fund placement with public. Distinguished from promoter / group equity which does NOT count as public funds.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Holding Company Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Holding Structure</span>
                        <strong>Section 186 + AOC-1 + CFS</strong>
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
            <h2 class="section-title">Section 186 Limit Math: The Core Holding-Company Calculation</h2>
            <div class="content-text">
                
                
                <p>Section 186(2) of the Companies Act, 2013 caps the aggregate of loans, investments, guarantees, and securities a company may extend to other body corporates without special resolution. <strong>The cap is the HIGHER of:</strong></p>
                <ul>
                    <li>Sixty percent of paid-up share capital + free reserves + securities premium account, OR</li>
                    <li>One hundred percent of free reserves + securities premium account</li>
                </ul>

                <p style="margin-top:16px;">Above this cap, a <strong>special resolution at general meeting under Section 186(3)</strong> is mandatory - prior authorisation by shareholders. MGT-14 must be filed within 30 days of the special resolution under Section 117. Failure to obtain special resolution renders the transaction non-compliant and exposes the company and officers to penalty under Section 186(13).</p>

                <h3 style="margin-top:32px;">Worked Example: Section 186 Limit Computation</h3>
                <p>Assume a family holding company XYZ Pvt Ltd with the following balance sheet as on 31 March 2026:</p>

                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th class="text-end">Amount (Rs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Paid-up share capital</td><td class="text-end">Rs 10,00,000</td></tr>
                        <tr><td>Free reserves</td><td class="text-end">Rs 4,90,00,000</td></tr>
                        <tr><td>Securities premium account</td><td class="text-end">Rs 1,00,00,000</td></tr>
                        <tr style="background:#F0F4F8 !important;"><td><strong>Total (a) - sum of all three</strong></td><td class="text-end"><strong>Rs 6,00,00,000</strong></td></tr>
                        <tr><td>60% of (a) [Option 1]</td><td class="text-end">Rs 3,60,00,000</td></tr>
                        <tr><td>100% of free reserves + securities premium [Option 2]</td><td class="text-end">Rs 5,90,00,000</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Section 186 limit = HIGHER of Option 1 and Option 2</strong></td><td class="text-end"><strong>Rs 5,90,00,000</strong></td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:16px;"><strong>XYZ Pvt Ltd can extend up to Rs 5.9 crore in aggregate loans, investments, guarantees, and securities to other body corporates without special resolution.</strong> Above Rs 5.9 crore, a special resolution under Section 186(3) is required - approved at general meeting, MGT-14 filed within 30 days under Section 117. Patron tracks this aggregate balance continuously and triggers the special resolution process BEFORE the limit is breached.</p>

                <div class="highlight-box" style="margin-top:24px;background:#E8F5E9;border-left:4px solid #10B981;">
                    <p><strong>&#10003; Wholly-Owned Subsidiary Exemption (Rule 11):</strong> Rule 11 of Companies (Meetings of Board and its Powers) Rules, 2014 exempts loans / guarantees / security to wholly-owned subsidiary (WOS) or joint venture from the Section 186(3) special resolution requirement. <strong>Critical caveats:</strong></p>
                    <ul style="margin-top:8px;">
                        <li>Exemption is from SPECIAL RESOLUTION only - NOT from Section 186(4) disclosure requirement</li>
                        <li>Disclosure in financial statements + board's report still required</li>
                        <li>MBP-2 register entries still mandatory within 7 days</li>
                        <li>Unanimous board resolution under Section 186(5) at board meeting still required</li>
                    </ul>
                </div>

                <h3 style="margin-top:32px;">Two-Layer Subsidiary Rule: Two Different Provisions Often Confused</h3>
                <p>Founders frequently confuse two separate two-layer provisions. Both restrict layered investment structures but apply differently:</p>

                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead>
                        <tr>
                            <th>Aspect</th>
                            <th>Section 186(1) - Investment Company</th>
                            <th>Companies (Restriction on Number of Layers) Rules, 2017</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>What it restricts</td><td>Max 2 layers of INVESTMENT COMPANIES in investment chain</td><td>Max 2 layers of SUBSIDIARIES (any company) in group structure</td></tr>
                        <tr><td>Type of layers</td><td>Two layers of investment companies</td><td>Two layers of subsidiaries</td></tr>
                        <tr><td>Exemptions</td><td>Foreign acquisition with deeper layers permitted by foreign law; subsidiary having additional investment subsidiary for statutory requirement</td><td>Banking, insurance, NBFC, government company, certain other regulated entities exempt</td></tr>
                        <tr><td>Effective date</td><td>Companies Act, 2013</td><td>Notification dated 20 September 2017</td></tr>
                        <tr><td>Compliance horizon</td><td>On every transaction</td><td>Continuous - existing layers grandfathered as on 20 September 2017</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:16px;"><strong>Patron screens both rules at intake.</strong> For multi-generational family holding structures, the 2017 Rules often surface unexpected restructuring needs to comply with the layer cap.</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Delivers in the Holding Company Compliance Engagement</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Section 186 Limit Tracking + Special Resolution Coordination</strong></td><td>Patron tracks aggregate of loans + investments + guarantees + securities continuously against the 60% / 100% Section 186 limit on each transaction date. Where a proposed transaction would breach the limit, we trigger special resolution - board recommendation, EGM notice with explanatory statement under Section 102, special resolution passed, MGT-14 filed within 30 days under Section 117. WOS / JV transactions: Section 186(4) disclosure + Section 186(5) unanimous board resolution still apply.</td></tr>
                        <tr><td><strong>2. MBP-2 Register Maintenance</strong></td><td>Form MBP-2 register maintained for every loan, guarantee, security, and investment. Entries chronologically within 7 days of each transaction. Patron maintains the register on the client's behalf; preserves it permanently at registered office under custody of CS or authorised person.</td></tr>
                        <tr><td><strong>3. Form AOC-1 Statement of Subsidiaries / Associates / JVs</strong></td><td>AOC-1 prepared per entity with all salient features - paid-up capital, reserves, total assets, total liabilities, investments, turnover, profit before / after tax, percentage of shareholding. Attached to AOC-4 under Section 129(3) read with Rule 5 of Companies (Accounts) Rules, 2014. Patron coordinates with each subsidiary's auditor for reconciliation before filing.</td></tr>
                        <tr><td><strong>4. Consolidated Financial Statements under Section 129(3)</strong></td><td>Where the holding company has any subsidiary, associate, or joint venture, Section 129(3) mandates CFS preparation. Patron coordinates with each subsidiary's auditor to obtain final audited financials; applies consolidation procedures under Ind AS 110 or AS 21 / 23 / 27 as applicable; integrates with holding company's standalone audit; ensures CFS audit report annexed to AOC-4.</td></tr>
                        <tr><td><strong>5. Section 188 RPT Approvals and Disclosures</strong></td><td>Every inter-company loan, guarantee, sale or purchase of investments, services rendered or received, or leasing of property between holding company and subsidiaries / associates / KMP / relatives is an RPT. Patron papers each transaction with arms-length pricing, board approval, Audit Committee approval (where applicable under Section 177) for material RPTs, special resolution + MGT-14 above Rule 15 thresholds, board's report disclosure.</td></tr>
                        <tr><td><strong>6. NBFC / CIC Threshold Check + Standard Annual Cycle</strong></td><td>Annual CIC test at FY close - Rs 100 crore total assets check + public funds raised + 50-50 test (financial assets > 50% AND financial income > 50%). Where thresholds approach, 12-18 month restructuring or RBI registration runway given. Plus full standard cycle: AOC-4 + MGT-7 + ITR-6 + DIR-3 KYC + DPT-3 + audit under Section 139.</td></tr>


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
            <h2 class="section-title">Holding Company Annual Compliance Procedure: 8 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs every holding-company engagement through a structured 8-step protocol. The cycle starts with Section 186 baseline mapping and CIC test at engagement intake (Week 1) and closes with annual filing reconciliation and next-year calendar setup (Week 40). Total cycle 6 to 9 months end-to-end.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Engagement Intake + Section 186 Baseline + CIC Test (Week 1)</h3>
                        <p class="step-description">Group structure mapped (parent + subsidiaries + associates + JVs). Section 186 limit computed for current balance sheet (60% / 100% formula). CIC threshold tested - total assets vs Rs 100 crore; 50-50 test on financial assets and financial income; public-funds-raised check. Two-layer rule screening (both Section 186(1) and 2017 Rules).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Group structure mapped
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 186 baseline
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CIC threshold tested
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="55" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BASELINE</text>
                                    <rect x="22" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="33" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 186</text>
                                    <rect x="48" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="59" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CIC TEST</text>
                                    <rect x="74" y="68" width="24" height="8" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="86" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">2-LAYER</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Baseline Locked</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Continuous Section 186 Limit Tracking (Throughout Year)</h3>
                        <p class="step-description">Every loan, investment, guarantee, security transaction screened against the 60% / 100% Section 186 limit on transaction date. MBP-2 register entries made within 7 days under Rule 12 of Companies (Meetings of Board and its Powers) Rules 2014. Where a proposed transaction would breach the limit, special resolution scheduled 30 days ahead under Section 186(3).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Transaction-date check
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MBP-2 within 7 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Pre-emptive resolution
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">MBP-2 REGISTER</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="30" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="68" x2="85" y2="68" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Limits Tracked</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Special Resolution Preparation When Limit Threatened</h3>
                        <p class="step-description">Where a proposed transaction would breach the Section 186 limit, special resolution process triggered 4-6 weeks before transaction. Board recommendation + EGM notice with explanatory statement under Section 102 + special resolution passed under Section 186(3) + MGT-14 filed within 30 days under Section 117.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                4-6 week buffer
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 186(3) + 117
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MGT-14 in 30 days
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
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">MGT-14</text>
                                    <text x="44" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPECIAL</text>
                                    <text x="44" y="52" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RESOLUTION</text>
                                    <text x="44" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 186(3)</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 117</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Resolution Filed</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Subsidiary Financials Collection + Standalone Audit (Week 8-16)</h3>
                        <p class="step-description">Each subsidiary's audited financial statements collected (May-August). Standalone audit of holding company under Section 139 / 143 with UDIN. CFS preparation under Ind AS 110 or AS 21 / 23 / 27 as applicable. Investment valuation, fair value adjustments, related party identification all completed.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Subsidiary audit pack
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Standalone audit + UDIN
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Ind AS 110 / AS 21
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
                                    <text x="40" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUBSIDIARY</text>
                                    <text x="40" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PACK</text>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CFS</text>
                                    <text x="88" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IndAS</text>
                                    <text x="88" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">110</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Complete</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">AOC-1 Preparation Per Subsidiary (Week 12-14)</h3>
                        <p class="step-description">Form AOC-1 prepared per subsidiary / associate / JV with all salient features - paid-up capital, reserves, total assets, total liabilities, investments, turnover, profit before / after tax, percentage of shareholding. Each entry reconciled with the subsidiary's own audited statements before filing. Mismatches resolved with subsidiary auditor coordination.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Per-entity AOC-1
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Subsidiary reconciliation
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 5 Accounts Rules
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
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">AOC-1</text>
                                    <line x1="31" y1="40" x2="57" y2="40" stroke="#E8712C" stroke-width="1.5" stroke-linecap="round"/>
                                    <line x1="31" y1="48" x2="55" y2="48" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="56" x2="57" y2="56" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="64" x2="53" y2="64" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="68" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="83" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PER ENT</text>
                                </svg>
                            </div>
                            <span class="illustration-label">AOC-1 Ready</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">AGM + AOC-4 Filing with AOC-1 + CFS (Week 15-30)</h3>
                        <p class="step-description">AGM held within 9 months of FY end under Section 96 (first AGM) or 6 months (subsequent AGMs). AOC-4 filed within 30 days of AGM under Section 137 with AOC-1 attachment, CFS, audit reports, Section 186(4) disclosures, RPT disclosures in board's report. Late filing attracts Section 403 additional fee (Rs 100/day per form, no upper cap) + Section 137(3) post-2020 Amendment penalty (Company cap Rs 2,00,000 / Officer cap Rs 50,000, decriminalized).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AOC-4 with AOC-1 + CFS
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Within 30 days of AGM
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 137 post-2020
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="40" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="42" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text>
                                    <text x="42" y="46" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+ AOC-1</text>
                                    <text x="42" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+ CFS</text>
                                    <path d="M64 42l6 0M70 42l-2 -2M70 42l-2 2" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="88" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 137</text>
                                    <text x="88" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text>
                                </svg>
                            </div>
                            <span class="illustration-label">AOC-4 Filed</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">MGT-7 + ITR-6 Filings (Week 30-40)</h3>
                        <p class="step-description">MGT-7 filed within 60 days of AGM under Section 92. Late filing attracts Section 403 Rs 100/day + Section 92(5) post-2020 penalty (Company cap Rs 2,00,000 / Officer cap Rs 50,000, decriminalized). ITR-6 filed by 31 October (audit case) with appropriate schedules - Schedule HP if property held, Schedule CG for portfolio capital gains, Schedule OS for dividend / interest, Schedule EI for exempt income, Schedule TDS for credits.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MGT-7 within 60 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ITR-6 by 31 Oct
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Passive income schedules
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text>
                                    <text x="40" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">60 DAYS</text>
                                    <text x="40" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 92</text>
                                    <rect x="68" y="22" width="36" height="55" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="86" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-6</text>
                                    <text x="86" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">31 OCT</text>
                                    <text x="86" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PASSIVE</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Tax Filed</span>
                            <span class="step-number-large">07</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 8</span>
                        <h3 class="step-title">Annual Reconciliation + Next-Year Calendar (Week 40)</h3>
                        <p class="step-description">All event-based filings during the year reconciled. Special resolution-related MGT-14 filings confirmed. MBP-2 register closed for the year. CIC threshold re-checked at FY close. Next year compliance calendar set up with DIR-3 KYC (next per G.S.R. 943(E) triennial regime), DPT-3 (by 30 June), Section 186 baseline rolled forward, two-layer rule re-screened.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Year reconciled
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CIC re-test
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
                                    <rect x="22" y="22" width="76" height="14" fill="#10B981"/>
                                    <text x="60" y="32" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ANNUAL CYCLE</text>
                                    <text x="60" y="50" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CIC RE-TEST</text>
                                    <text x="60" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CALENDAR SET</text>
                                    <circle cx="60" cy="72" r="4" fill="#10B981"/>
                                    <path d="M57 72l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Cycle Closed</span>
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
            <h2 class="section-title">Document Checklist for Holding Company Annual Compliance</h2>
            <div class="content-text">
                
                
                <p>The documents below cover the standard annual cycle plus all six holding-company-specific overlays. Patron prepares missing items in-house wherever feasible.</p>

                <h3 style="margin-top:24px;">Standard Annual Cycle Documents</h3>
                <ul>
                    <li>Audited financial statements (standalone) as on 31 March</li>
                    <li>Audited consolidated financial statements (where applicable) per Section 129(3)</li>
                    <li>Audit report from practising CA with UDIN</li>
                    <li>Statutory registers under Section 88 (Members, Directors, Charges)</li>
                    <li>Director DSCs (Class 3) active and current</li>
                    <li>Latest INC-22 / INC-22A confirming active address</li>
                </ul>

                <h3 style="margin-top:24px;">Section 186 Compliance Documents</h3>
                <ul>
                    <li>MBP-2 register with all loan / investment / guarantee / security entries chronologically within 7 days of each transaction</li>
                    <li>Computation of Section 186 limit (60% paid-up + free reserves + securities premium OR 100% of free reserves + securities premium - higher)</li>
                    <li>Unanimous board resolutions for every Section 186 transaction (Section 186(5))</li>
                    <li>Special resolutions and MGT-14 SRNs for transactions exceeding the limit (Section 186(3))</li>
                    <li>Disclosure note under Section 186(4) listing full particulars of all loans / investments / guarantees / securities during the FY</li>
                </ul>

                <h3 style="margin-top:24px;">Section 188 and AOC-1 Documents</h3>
                <ul>
                    <li>Audit Committee approval letters for material RPTs (where applicable under Section 177)</li>
                    <li>Board approval minutes for all RPTs</li>
                    <li>Special resolution and MGT-14 SRN for RPTs exceeding Rule 15 thresholds</li>
                    <li>Arms-length pricing documentation for each material RPT</li>
                    <li>Form AOC-1 prepared per subsidiary / associate / joint venture with all salient features filled</li>
                    <li>Each subsidiary / associate / JV's audited financial statements for consolidation</li>
                </ul>

                <h3 style="margin-top:24px;">NBFC / CIC Threshold Documents (If Applicable)</h3>
                <ul>
                    <li>Computation of total assets as on FY-end against Rs 100 crore CIC threshold</li>
                    <li>Computation of 50-50 test (financial assets / total assets; financial income / total income)</li>
                    <li>Confirmation of no public deposits raised (no NCDs issued to public, no fixed deposits, no PE / VC fund placement with public)</li>
                    <li>RBI NBFC-CIC registration application if thresholds crossed</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Holding Company Pain Points - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Special resolution missed on cross-threshold investment</strong></td>
                            <td>Founders make investments in subsidiaries or portfolio companies without realising the aggregate balance has crossed the Section 186(2) limit. Transaction proceeds without special resolution; subsequently identified as Section 186(3) violation.</td>
                            <td>Patron tracks the aggregate continuously and triggers special resolution preparation BEFORE the limit is breached - typically a 30-day buffer for EGM and MGT-14 filing under Section 117.</td>
                        </tr>
                        <tr>
                            <td><strong>2. WOS exemption misapplied</strong></td>
                            <td>Founders assume "wholly-owned subsidiary" exemption from Section 186(3) special resolution means NO Section 186 compliance at all. The exemption is from the special resolution requirement only; Section 186(4) disclosure in financial statements and Section 186(5) unanimous board resolution still apply.</td>
                            <td>Patron clarifies this on Day 1 and prevents accidental non-compliance. MBP-2 register entries within 7 days still mandatory regardless of WOS status.</td>
                        </tr>
                        <tr>
                            <td><strong>3. AOC-1 inconsistency with subsidiary financials</strong></td>
                            <td>AOC-1 captures salient features of each subsidiary - paid-up capital, reserves, profit / loss, percentage of shareholding. These figures MUST reconcile with the subsidiary's own audited financial statements. Mismatches trigger MCA queries on AOC-4 and potential RPT scrutiny.</td>
                            <td>Patron coordinates AOC-1 preparation with each subsidiary's auditor before filing. Reconciliation completed Week 12-14, ahead of AOC-4 filing.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Two-layer subsidiary restriction overlooked in restructuring</strong></td>
                            <td>Multi-generational family structures - particularly where holdco owns holdco which owns operating sub - frequently breach the Companies (Restriction on number of layers) Rules, 2017 layer cap. Discovery typically happens during investor diligence or planned acquisition.</td>
                            <td>Patron screens the layer structure at intake and recommends restructuring (typically a vertical merger or share-swap) where the cap is breached. Existing layers as on 20 September 2017 grandfathered; new layers above two restricted.</td>
                        </tr>
                        <tr>
                            <td><strong>5. Accidental NBFC classification</strong></td>
                            <td>Pure family investment vehicles that have grown to Rs 100+ crore portfolio sometimes inadvertently trigger Core Investment Company (CIC) registration requirements under the RBI framework. Particularly if they have issued any debentures to non-promoter parties (which counts as "public funds").</td>
                            <td>Patron runs the CIC test annually and flags the line BEFORE it is crossed, giving founders 12-18 months to either register or restructure.</td>
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
            <h2 class="section-title">Holding Company Pricing: Three Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Pure Investment Vehicle (No Subsidiaries)</strong> - Single-entity investment vehicle holding portfolio of equity / debt / mutual funds in unrelated companies. No subsidiaries / associates / JVs. No AOC-1 attachment, no CFS, no inter-company RPTs. Standard annual cycle plus Section 186 disclosures on portfolio additions.</td><td class="text-end">Rs 35,000 per year (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>Family Holdco with 1-3 Subsidiaries</strong> - Holding company with 1-3 subsidiaries / associates / JVs. AOC-1 statement of subsidiaries attached to AOC-4. Basic CFS preparation under Ind AS 110 or AS 21 / 23 / 27. Section 186 disclosures plus continuous Section 188 RPT framework with inter-company loans / services / asset transfers. MBP-2 register maintenance.</td><td class="text-end">Rs 40,000 per year (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>Group Holdco with 4+ Subsidiaries OR Active Inter-Company Activity</strong> - Multi-subsidiary group holding structure. Full Ind AS / AS consolidation across 4+ entities. Multiple Section 186 special resolutions per year. Continuous Section 188 RPT compliance with material thresholds. Possible NBFC / CIC threshold proximity requiring quarterly tracking.</td><td class="text-end">Rs 50,000 per year (Exl GST and Govt fees)</td></tr>
                        <tr><td>Government Filing Fees (AOC-4 / MGT-7 / MGT-14)</td><td class="text-end">Rs 200 to Rs 600 per form by authorised capital slab</td></tr>
                        <tr><td>Statutory Audit Fee</td><td class="text-end">Rs 25,000 to Rs 1,00,000 by portfolio size and consolidation complexity</td></tr>
                        <tr><td>NBFC-CIC Registration Fees (if applicable)</td><td class="text-end">Separate; quoted on scope</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Late-Filing Penalty Exposure (Post-2020 Amendment)</strong></td><td class="text-end"><strong>See penalty schedule below</strong></td></tr>
                        <tr><td>Section 403 Additional Fee for Late Filing (AOC-4 / MGT-7 / MGT-14)</td><td class="text-end">Rs 100/day per form, NO upper cap</td></tr>
                        <tr><td>Section 137(3) Post-2020 Amendment Penalty (AOC-4 default)</td><td class="text-end">Company cap Rs 2,00,000 / Officer cap Rs 50,000 (decriminalized)</td></tr>
                        <tr><td>Section 92(5) Post-2020 Amendment Penalty (MGT-7 default)</td><td class="text-end">Company cap Rs 2,00,000 / Officer cap Rs 50,000 (decriminalized)</td></tr>
                        <tr><td>Section 186(13) Penalty (Section 186 contravention)</td><td class="text-end">Rs 25,000 to Rs 5,00,000 on company + officer fine + potential imprisonment</td></tr>
                        <tr><td>Section 188(3) Post-2020 Amendment Penalty (RPT default) - Listed Company</td><td class="text-end">Rs 25,00,000 on each defaulting party</td></tr>
                        <tr><td>Section 188(3) Post-2020 Amendment Penalty (RPT default) - Other Companies</td><td class="text-end">Rs 5,00,000 on each defaulting party</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Section 446B Half-Penalty</strong></td><td class="text-end"><strong>Halves Section 137(3) / 92(5) caps for small companies, OPCs, startups (rare for holdcos)</strong></td></tr>
                        <tr><td>NBFC-CIC Accidental Classification</td><td class="text-end">RBI penalties + potential business prohibition order</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Holding Company Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20a%20holding-company%20compliance%20package%20Rs%2035k%20to%20Rs%2050k%20by%20subsidiary%20count." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Holding Company Annual Compliance Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Engagement intake + group structure mapping + Section 186 baseline + CIC test</td><td class="text-end">Week 1</td></tr>
                        <tr><td>Continuous Section 186 limit tracking on every transaction</td><td class="text-end">Throughout the year (Section 186(2))</td></tr>
                        <tr><td>Special resolution preparation when limit threatened (EGM notice + MGT-14)</td><td class="text-end">4-6 weeks before transaction (Section 186(3) + 117)</td></tr>
                        <tr><td>Subsidiary financial statements collection</td><td class="text-end">Week 8-14 (May-August)</td></tr>
                        <tr><td>Standalone audit + consolidation under Ind AS / AS</td><td class="text-end">Week 8-16 (May-September) under Section 139</td></tr>
                        <tr><td>AOC-1 preparation per subsidiary / associate / JV</td><td class="text-end">Week 12-14 (Section 129(3) + Rule 5)</td></tr>
                        <tr><td>AGM held within 9 months of FY end (first AGM) / 6 months (subsequent)</td><td class="text-end">By 30 September / 31 December (Section 96)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>AOC-4 filing with AOC-1 + CFS attachments</strong></td><td class="text-end"><strong>Within 30 days of AGM (Section 137)</strong></td></tr>
                        <tr><td>MGT-7 filing</td><td class="text-end">Within 60 days of AGM (Section 92)</td></tr>
                        <tr><td>ITR-6 filing with passive income schedules</td><td class="text-end">By 31 October (audit case)</td></tr>
                        <tr><td>DIR-3 KYC Web</td><td class="text-end">Triennial per G.S.R. 943(E) - next due 30 June 2028</td></tr>
                        <tr><td>DPT-3 annual return</td><td class="text-end">By 30 June (Rules 16 / 16A)</td></tr>
                        <tr><td>NBFC / CIC threshold re-test</td><td class="text-end">Annually at FY close (RBI CIC framework)</td></tr>
                        <tr><td>Total annual cycle</td><td class="text-end">6 to 9 months end-to-end</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; Section 186 limit tracking is continuous, not annual.</strong> Every transaction date checks the aggregate against the 60% / 100% limit. A breach without special resolution exposes the company to Section 186(13) penalty (Rs 25k-5L on company + officer fine + potential imprisonment up to 2 years). Patron's continuous tracking protocol typically catches limit-approach 30+ days before the transaction and triggers special resolution preparation.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on subsidiary count (driving the Rs 35k / Rs 40k / Rs 50k tier), inter-company transaction volume (driving Section 188 RPT documentation cost), and CIC threshold proximity (driving RBI registration assistance cost). Government fees, statutory audit fee (Rs 25k-1L), Rule 11UA valuation reports, DSC charges, and RBI registration fees are billed separately at actuals.</p>


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
            <h2 class="section-title">Why Holding Company Compliance Cannot Be Treated as Routine</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Section 186 Limit Continuous Tracking</h3>
                <p>Section 186 limit tracking is continuous, not annual - every transaction date checks the aggregate against the 60% / 100% limit. A breach without special resolution exposes the company to Section 186(13) penalty (Rs 25k-5L on company + officer fine + potential imprisonment). Patron's MBP-2 register protocol catches limit-approach 30+ days ahead.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>Section 188 RPT Documentation Discipline</h3>
                <p>Section 188 framework requires arm's-length documentation for every inter-company transaction. Post-2020 Amendment, Section 188(3) penalty is INCREASED - Rs 25 lakh for listed companies / Rs 5 lakh for other companies on each defaulting party. Patron maintains contemporaneous RPT documentation - founders rarely have the bandwidth to do this in real time.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>AOC-1 + CFS Coordination Across Subsidiaries</h3>
                <p>AOC-1 + CFS coordination across multiple subsidiaries requires liaison with each subsidiary auditor on a fixed timeline. A CA firm running 60+ holdco engagements has the operational discipline; ad-hoc handling typically delays AOC-4 filing and triggers Section 403 additional fees (Rs 100/day per form, no upper cap) + Section 137(3) penalty (Company cap Rs 2,00,000 post-2020).</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>NBFC / CIC Annual Reassessment</h3>
                <p>NBFC / CIC threshold proximity needs annual reassessment - the Rs 100 crore line moves with portfolio appreciation, not just with new investments. Annual valuation re-checks are part of a managed engagement. Across Patron's 60+ holdco engagements, zero accidental NBFC classification triggers - all threshold-proximity cases flagged 12+ months in advance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>Investor-Diligence Grade File Maintenance</h3>
                <p>Multi-year board records and statutory registers must be defensible during investor diligence, exit transactions, or NCLT family succession disputes. Operating-company-grade compliance handling rarely survives this scrutiny. A Rs 15-20k saving from a commodity-tier provider becomes a Rs 25-50 lakh problem when a Section 186 violation surfaces during a Rs 100 crore deal.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Dual Two-Layer Rule Screening</h3>
                <p>Section 186(1) restricts investment through max 2 layers of investment companies. Separately, Companies (Restriction on number of layers) Rules, 2017 restrict max 2 layers of any subsidiaries (with banking / insurance / NBFC / government exemptions). Multi-generational family structures frequently breach the 2017 Rules layer cap. Patron screens both rules at intake.</p>
            </article>
        </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Family Offices and Group Promoters</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>

                <h3 style="margin-top:24px;">Holdco Outcome Proof - FY 2024-25 Internal Metrics</h3>
                <ul>
                    <li>Patron managed <strong>60+ holding company engagements</strong> across pure investment vehicles, family holdcos, and group structures</li>
                    <li><strong>100 percent Section 186 compliance rate</strong> - zero unauthorised cross-threshold transactions across all engagements</li>
                    <li><strong>98 percent AOC-1 + CFS on-time filing rate</strong></li>
                    <li><strong>Average 2 to 4 Section 186 special resolutions managed per holdco engagement per year</strong></li>
                    <li><strong>Zero CIC / NBFC accidental classification triggers</strong> - all threshold-proximity cases flagged 12+ months in advance</li>
                    <li>Average founder time per holdco engagement: 4-6 hours per year (low because we run it end-to-end)</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves holding company compliance engagements across all ROC jurisdictions in India and for family offices and HNI investment vehicles based in India and abroad. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Holding Company vs Operating Company: Compliance Overlay</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance Element</th><th>Operating Company</th><th>Holding Company (Additional / Different)</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Annual return (MGT-7)</td><td>Standard filing with director, shareholder, capital structure details</td><td>Same form but additional disclosure of subsidiaries / associates / JVs in attached statements</td></tr>
                        <tr><td>Financial statements (AOC-4)</td><td>Standalone P/L + Balance Sheet + Cash Flow + Audit Report</td><td>Same plus AOC-1 statement of subsidiaries attached + Consolidated Financial Statements (CFS) if any subsidiary / associate / JV exists under Section 129(3)</td></tr>
                        <tr><td>Section 186 Loans and Investments</td><td>Rarely material - operating companies invest in operations, not in other body corporates</td><td><strong>Core activity</strong> - every loan, guarantee, security, and investment in another body corporate hits Section 186 limits. Special resolution required above 60% / 100% limit.</td></tr>
                        <tr><td>Section 186(4) disclosure</td><td>Minimal disclosure if any inter-corporate activity</td><td>Material disclosure - full particulars of loans, investments, guarantees, securities; purpose for which proceeds proposed to be utilised</td></tr>
                        <tr><td>MBP-2 Register</td><td>Maintained only if some inter-corporate activity</td><td>Maintained mandatorily; entries within 7 days of each transaction</td></tr>
                        <tr><td>Section 188 Related Party Transactions</td><td>Occasional - typically with KMP or directors</td><td>Continuous - every inter-company loan, guarantee, intercompany services, sale or purchase of investments at fair value triggers RPT framework. Post-2020 penalty Rs 5 lakh per defaulting party (Rs 25 lakh listed).</td></tr>
                        <tr><td>Consolidated Financial Statements (Section 129(3))</td><td>Only if has subsidiaries</td><td>Mandatory whenever subsidiary, associate, or joint venture exists; impacts audit complexity</td></tr>
                        <tr><td>ITR-6 schedules</td><td>Schedule BP for business income dominant</td><td>Schedule HP, Schedule CG, Schedule OS, Schedule EI for passive income; Schedule BP may be nil or minimal</td></tr>
                        <tr><td>Audit complexity</td><td>Inventory valuation, revenue recognition, cost matching</td><td>Investment valuation under Ind AS / AS, fair value adjustments, related party identification, CFS preparation</td></tr>
                        <tr><td>Special resolutions filing (MGT-14)</td><td>Rare - typically only at incorporation and major change</td><td>Frequent - every cross-threshold Section 186 transaction triggers MGT-14 within 30 days under Section 117</td></tr>
                        <tr><td>Two-layer subsidiary restriction</td><td>Not relevant for non-investment-company structures</td><td>Section 186(1) limits investment-company layers to 2; Companies (Restriction on number of layers) Rules, 2017 also limit subsidiary layers</td></tr>
                        <tr><td>NBFC / CIC consideration</td><td>Not applicable</td><td>Material if pure investment activity - Rs 100 crore threshold + 50-50 test</td></tr>


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
            <h2 class="section-title">Related Patron Services for Holding Companies</h2>
            <div class="content-text">
                
                
                <p>Holding company compliance connects to several adjacent service lines:</p>
                <ul>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Private Limited Company Annual Compliance</strong></a> - standard active Pvt Ltd bundle covering operating companies (not pure holdcos but operating subsidiaries within a group).</li>
                    <li><a href="/small-company-annual-compliance"><strong>Small Company Annual Compliance</strong></a> - for active small companies that may also be holdcos under Section 2(85) thresholds (rare - most holdcos are excluded by Section 2(85) proviso).</li>
                    <li><a href="/small-company-compliance-dormant"><strong>Dormant Company Compliance Section 455</strong></a> - alternative for inactive holdcos seeking reduced compliance to Rs 25,000 per year.</li>
                    <li><a href="/strike-off-private-limited-company"><strong>Strike Off Private Limited Company</strong></a> - for failed holdcos with no future use.</li>
                    <li><a href="/condonation-of-delay-roc-filings"><strong>Condonation of Delay ROC Filings</strong></a> - cleanup if Section 186 disclosures or RPT filings were missed historically.</li>
                    <li><a href="/small-company-compliance-family-vehicles"><strong>Family Company Compliance</strong></a> - for closely-held family pvt ltds (when they are NOT yet holding companies).</li>
                    <li><a href="/annual-compliance-cost-comparison-cheap-vs-quality"><strong>Annual Compliance Cost: Cheap vs Quality</strong></a> - decision support for commodity-tier vs Patron-tier choice.</li>
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
                    <li><strong>Companies Act, 2013</strong> - master statute for all corporate compliance. Key sections: 2(46), 2(87), 92, 117, 129(3), 137, 139, 173, 177, 186, 188</li>
                    <li><strong>Companies (Meetings of Board and its Powers) Rules, 2014</strong> - Rule 11 (Section 186 WOS / JV exemptions), Rule 15 (Section 188 RPT thresholds)</li>
                    <li><strong>Companies (Restriction on number of layers) Rules, 2017</strong> dated 20 September 2017 - two-layer subsidiary cap</li>
                    <li><strong>Companies (Accounts) Rules, 2014</strong> - Rule 5 (AOC-1 statement of subsidiaries) and Rule 6 (CFS preparation methodology)</li>
                    <li><strong>RBI Master Direction - Core Investment Companies (Reserve Bank) Directions, 2016</strong> (as amended) - CIC framework</li>
                    <li><strong>Ind AS 110 (Consolidated Financial Statements) and AS 21 / 23 / 27</strong> - consolidation procedures</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections for Holding Companies</h3>
                <ul>
                    <li><strong>Section 2(46)</strong> - definition of holding company</li>
                    <li><strong>Section 2(87)</strong> - definition of subsidiary company</li>
                    <li><strong>Section 186</strong> - Loan and investment by company; covers limits, special resolution requirements, disclosures, two-layer rule, interest rate floor, exemptions</li>
                    <li><strong>Section 186(1)</strong> - two-layer investment-company rule</li>
                    <li><strong>Section 186(2)</strong> - 60% / 100% limit on aggregate loans, investments, guarantees, security</li>
                    <li><strong>Section 186(3)</strong> - special resolution requirement above limit</li>
                    <li><strong>Section 186(4)</strong> - disclosure requirement in financial statements (applies regardless of WOS exemption)</li>
                    <li><strong>Section 186(5)</strong> - unanimous board resolution at meeting (not by circulation)</li>
                    <li><strong>Section 186(7)</strong> - interest rate floor (not below prevailing government security yield)</li>
                    <li><strong>Section 186(11)</strong> - exemptions for banking, insurance, housing finance, infrastructure finance, investment companies</li>
                    <li><strong>Section 188</strong> - Related Party Transactions; arms-length basis required; board approval; Audit Committee approval for material RPTs under Section 177</li>
                    <li><strong>Section 129(3)</strong> - mandatory Consolidated Financial Statements where company has subsidiary / associate / JV</li>
                    <li><strong>Section 137</strong> - AOC-4 filing with AOC-1 attachment within 30 days of AGM</li>
                    <li><strong>Section 117</strong> - MGT-14 filing of special resolutions within 30 days</li>
                    <li><strong>Section 173</strong> - board meeting requirements (minimum 4 per year for non-small / non-dormant companies)</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule (Post-Companies (Amendment) Act 2020)</h3>
                <ul>
                    <li><strong>Section 186(13) - Section 186 limit breach without special resolution:</strong> Company - Rs 25,000 to Rs 5,00,000; Officer in default - additional fine + potential imprisonment up to 2 years (Section 186 was amended but retains substantial penalty exposure)</li>
                    <li><strong>Section 188(3) - RPT without board approval (post-2020 Amendment):</strong> Listed company - <strong>Rs 25,00,000</strong> on each defaulting party; Other companies - <strong>Rs 5,00,000</strong> on each defaulting party. This is one of three sections where the Companies (Amendment) Act 2020 INCREASED (not decreased) the penalty.</li>
                    <li><strong>Section 137(3) - AOC-4 / AOC-1 / CFS late filing (post-2020 Amendment):</strong> Company - Rs 10,000 base + Rs 100/day continuing default, capped <strong>Rs 2,00,000</strong>. Officer in default - Rs 10,000 base + Rs 100/day continuing default, capped <strong>Rs 50,000</strong>. Decriminalized.</li>
                    <li><strong>Section 92(5) - MGT-7 late filing (post-2020 Amendment):</strong> Same structure as Section 137(3) - Company cap Rs 2,00,000 / Officer cap Rs 50,000. Decriminalized.</li>
                    <li><strong>Section 117(2) - MGT-14 special resolution not filed within 30 days (post-2020 Amendment):</strong> Decriminalized with caps. Plus Section 403 additional fee Rs 100/day with no upper cap.</li>
                    <li><strong>Section 403 - Additional fee for late filing:</strong> Rs 100/day per form, NO upper cap. Applies the moment any e-form is delayed past the statutory window. Independent of the penalty schedule above.</li>
                    <li><strong>Section 446B - Half-penalty for small companies, OPCs, startups:</strong> Halves Section 92 / 117 / 137 penalties. Rarely applicable to holding companies (excluded from small-company status by Section 2(85) proviso).</li>
                    <li><strong>MBP-2 register not maintained or entries not within 7 days:</strong> Penalty under Section 186 and rule penalty provisions</li>
                    <li><strong>NBFC-CIC accidental classification without registration:</strong> RBI penalties under RBI Act + RBI Directions; potential business prohibition order</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for AOC-4 / AOC-1 / MGT-7 / MGT-14 e-form filing, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for Companies (Restriction on number of layers) Rules 2017 dated 20 September 2017, and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text of Sections 2(46), 2(87), 92, 117, 129(3), 137, 139, 173, 177, 186, 188, 403, 446B.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on holding company compliance, Section 186 limit math (60% / 100%), AOC-1 statement of subsidiaries, Consolidated Financial Statements under Section 129(3), Section 188 RPT framework, NBFC / CIC threshold proximity at Rs 100 crore, the dual two-layer rule (Section 186(1) + 2017 Rules), and ITR-6 schedules for passive income.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">We just hold investments and have no operating business - do we still need full compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes. A holding company - whether pure investment vehicle, family holdco, or group holding structure - is a private limited company under the Companies Act, 2013. The full annual compliance regime applies: AOC-4, MGT-7, ITR-6, DIR-3 KYC, DPT-3, statutory audit under Section 139. What changes from operating-company compliance is the CONTENT of the filings (more Section 186 disclosures, AOC-1 attachment, possibly Consolidated Financial Statements) and the governance overlay (special resolutions on cross-threshold investments under Section 186(3), RPT approvals on inter-company transactions under Section 188). Compliance attaches to the corporate entity, not to operating activity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Section 186 and when does it apply to a holding company?</h3>
                        <div class="faq-expanded__a"><p>Section 186 of the Companies Act, 2013 governs loans, guarantees, security, and investments by a company in any other body corporate. The Section 186(2) limit caps the aggregate at the HIGHER of: 60 percent of paid-up share capital + free reserves + securities premium, OR 100 percent of free reserves + securities premium. Above the limit, a special resolution under Section 186(3) is required at general meeting and MGT-14 filed within 30 days. For a holding company, Section 186 applies on every investment, loan, or guarantee transaction with subsidiaries, group entities, or portfolio companies. Wholly-owned subsidiaries are exempt from the special resolution requirement under Rule 11 - but Section 186(4) disclosure, Section 186(5) unanimous board resolution, and MBP-2 register entries still apply.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is AOC-1 and when must a holding company file it?</h3>
                        <div class="faq-expanded__a"><p>Form AOC-1 is the statement containing salient features of subsidiaries, associates, and joint ventures - paid-up capital, reserves, total assets, total liabilities, investments, turnover, profit before / after tax, percentage of shareholding. AOC-1 is mandatorily attached to AOC-4 under Section 129(3) read with Rule 5 of Companies (Accounts) Rules, 2014, whenever the company has any subsidiary, associate, or joint venture. The information in AOC-1 must reconcile with the subsidiary's own audited financial statements - mismatches trigger ROC queries on AOC-4 and potential RPT scrutiny. Patron prepares AOC-1 per entity and coordinates with each subsidiary's auditor before filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do we need Consolidated Financial Statements?</h3>
                        <div class="faq-expanded__a"><p>Yes - whenever the holding company has any subsidiary, associate, or joint venture, Section 129(3) of the Companies Act, 2013 mandates preparation of Consolidated Financial Statements (CFS) in addition to standalone financial statements. CFS applies Ind AS 110 (for Ind AS reporting entities) or AS 21 / 23 / 27 (for AS reporting entities). The CFS is audited separately (often by the same auditor as standalone) and annexed to AOC-4 along with AOC-1. For a pure investment vehicle holding only portfolio investments in unrelated companies (not subsidiaries / associates / JVs), CFS is NOT required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are related party transactions handled in a holding company?</h3>
                        <div class="faq-expanded__a"><p>Section 188 of the Companies Act, 2013 governs related party transactions. For a holding company, every inter-company loan, guarantee, sale or purchase of investments, services rendered or received, leasing of property between holding company and subsidiaries / associates / KMP / relatives is an RPT. Each RPT must be at arm's length basis with documented pricing. Board approval is required for all RPTs; Audit Committee approval (where applicable under Section 177) is required for material RPTs. Above the thresholds prescribed under Rule 15 of Companies (Meetings of Board and its Powers) Rules, 2014, a special resolution at general meeting is required with MGT-14 filing. Post-2020 Amendment, Section 188(3) penalty is Rs 25 lakh for listed companies or Rs 5 lakh for other companies on each defaulting party - one of three sections where penalty was INCREASED.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When does a pure investment company become an NBFC or Core Investment Company?</h3>
                        <div class="faq-expanded__a"><p>Under the RBI framework, a Core Investment Company (CIC) is a non-banking financial company that holds investments in equity, debt instruments, or loans of group companies. NBFC-CIC registration with RBI is required when the company has: total assets above Rs 100 crore AND has raised public funds (debentures from public, fixed deposits, PE / VC funds with public participation). The broader NBFC 50-50 test: financial assets exceed 50 percent of total assets AND financial income exceeds 50 percent of total income. Most family holdcos sit comfortably below CIC thresholds because they do not raise public funds. Patron runs the CIC test annually and flags threshold proximity 12+ months in advance for restructuring or registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the two-layer subsidiary restriction?</h3>
                        <div class="faq-expanded__a"><p>Two separate two-layer provisions apply under the Companies Act framework and are often confused. Section 186(1) restricts investment through more than two layers of INVESTMENT COMPANIES in the investment chain (with exemptions for foreign acquisitions and statutory requirements). Companies (Restriction on number of layers) Rules, 2017 dated 20 September 2017 separately restrict total subsidiary layers to two for the corporate group structure (with exemptions for banks, insurance, NBFC, government companies, and certain other regulated entities). Existing layers as on 20 September 2017 are grandfathered; new layers above two are restricted. Multi-generational family holding structures frequently surface unexpected restructuring needs to comply.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is ITR-6 simpler for a holding company with only passive income?</h3>
                        <div class="faq-expanded__a"><p>Mostly yes. A pure holding company with no operating business has Schedule BP (business income) at nil or near-nil; the active schedules are Schedule CG for capital gains on portfolio sales, Schedule OS for other sources (dividend, interest), Schedule HP if real estate is held, Schedule EI for exempt income, and Schedule TDS for TDS credits. Where the holding company has subsidiary dividend income, the post-Finance Act 2020 regime requires dividend to be treated as taxable income in the recipient holdco hands (not exempt as it was pre-2020). Audit under Section 44AB applies if turnover plus passive receipts exceed Rs 1 crore threshold (rare for pure holdcos). Patron uses ITR-6 Schedule HP / CG / OS / EI as primary, Schedule BP as residual.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>Does a holding company need full compliance?</strong> Yes. It is a Pvt Ltd company - full Companies Act annual cycle applies regardless of operating activity.</p>
                <p><strong>Section 186 limit?</strong> Higher of: 60% of paid-up + free reserves + securities premium, OR 100% of free reserves + securities premium. Above limit needs special resolution under Section 186(3).</p>
                <p><strong>WOS exemption from special resolution?</strong> Yes (Rule 11) - but Section 186(4) disclosure + Section 186(5) unanimous board resolution + MBP-2 register still mandatory.</p>
                <p><strong>AOC-1 and CFS?</strong> AOC-1 attached to AOC-4 when subsidiary / associate / JV exists. CFS under Section 129(3) when same.</p>
                <p><strong>NBFC / CIC threshold?</strong> Rs 100 crore total assets + public funds raised = NBFC-CIC registration required. Most family holdcos below this.</p>
                <p><strong>Two-layer rule?</strong> Section 186(1): max 2 layers of investment companies. Companies (Restriction on Number of Layers) Rules 2017: max 2 layers of any subsidiaries.</p>
                <p><strong>Section 188 penalty post-2020?</strong> Listed Rs 25 lakh / Other Rs 5 lakh on each defaulting party (penalty was INCREASED, not decreased, by 2020 Amendment).</p>
                <p><strong>Section 137(3) / 92(5) penalty post-2020?</strong> Company cap Rs 2,00,000 / Officer cap Rs 50,000. Decriminalized.</p>
                <p><strong>What does Patron charge?</strong> Rs 35k (pure investment vehicle, no subs) | Rs 40k (1-3 subs) | Rs 50k (4+ subs or active inter-company).</p>
                <p><strong>Holding company ka compliance kya hota hai?</strong> <em>Holding company bhi Pvt Ltd hi hoti hai under Companies Act, 2013 - to full annual compliance apply hota hai. AOC-4, MGT-7, ITR-6, DIR-3 KYC, DPT-3, audit - sab zaruri hai chahe operations ho ya na ho. Plus holding-company-specific overlays bhi: Section 186 ke under loans aur investments ke limits (60% / 100%), Section 188 ke under related party transactions, AOC-1 statement of subsidiaries attached to AOC-4, Consolidated Financial Statements if any subsidiary hai. Patron Rs 35-50k mein end-to-end manage karta hai.</em></p>
                <p><strong>Hum sirf investments hold karte hain to itna compliance kyu?</strong> <em>Companies Act compliance corporate ENTITY pe attach hota hai - revenue pe nahi. Pvt Ltd company hain to AOC-4, MGT-7, ITR-6, audit sab zaruri hai. Holding companies pe extra layer hai: Section 186 limit math (60% / 100%) har transaction par check; Section 188 RPT framework har inter-company transaction par; AOC-1 statement har subsidiary ke liye; CFS Section 129(3) ke under jab subsidiary ho. Pure holdco bhi simpler ITR-6 file kar sakta hai (mostly passive income) lekin MCA compliance same hai.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Holding-Company Compliance Failures Cost More</h2>
            <div class="content-text">
                
                
                <p>Operating-company compliance failures show up at filing time. <strong>Holding-company compliance failures show up at much costlier moments</strong>:</p>
                <ul>
                    <li>Investor diligence on a fund raise</li>
                    <li>Acquirer diligence on an exit</li>
                    <li>Family succession dispute reaching the NCLT</li>
                    <li>Tax assessment probing related party transactions</li>
                    <li>RBI inquiry on whether a portfolio holding has crossed NBFC thresholds</li>
                </ul>

                <p style="margin-top:16px;">Each of these moments puts the entire holdco file under microscope - Section 186 trail, MBP-2 register, RPT documentation, CFS consolidation accuracy, AOC-1 reconciliation against subsidiary financials. Operating-company-grade compliance handling rarely survives this scrutiny. <strong>The Rs 15-20k saving from a commodity-tier provider in routine years becomes a Rs 25-50 lakh problem when a Section 186 violation or RPT non-disclosure surfaces during a Rs 100 crore deal.</strong></p>

                <p style="margin-top:16px;"><strong>The CIC threshold proximity is also a slow-moving but irreversible risk.</strong> By the time the company realises it has crossed Rs 100 crore + raised debentures from non-promoter parties, RBI registration is mandatory and unwinding is costly. Patron handles these risks proactively - threshold tracking, special resolution scheduling 30 days ahead, contemporaneous RPT documentation, annual CIC re-test. Compliance for a holdco is governance, not paperwork.</p>

                <p style="margin-top:16px;"><strong>Get a Free 15-Minute Diagnostic -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20holding%20company%20compliance%20diagnostic%20covering%20Section%20186%20baseline%20and%20CIC%20test." target="_blank">WhatsApp us</a>. We will map your group structure, run the Section 186 baseline, test the CIC threshold, and quote the right tier within 24 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: Holdco Compliance Is Governance, Not Paperwork</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Pure holding companies and family investment vehicles structured as private limited companies in India face the full Companies Act, 2013 compliance regime - regardless of having no operating revenue. The standard annual cycle (AOC-4, MGT-7, ITR-6, DIR-3 KYC, DPT-3, statutory audit under Section 139) applies in full.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">On top of the standard cycle, holding companies face specific overlays that operating companies do not: Section 186 limit math (60% of paid-up + free reserves + securities premium, OR 100% of free reserves + securities premium - whichever higher) on every loan, guarantee, security, or investment transaction; Section 188 related party transaction framework on every inter-company flow (post-2020 Amendment penalty INCREASED to Rs 5 lakh per defaulting party or Rs 25 lakh for listed); Form AOC-1 statement of subsidiaries attached to AOC-4 under Section 129(3); Consolidated Financial Statements under Section 129(3) wherever a subsidiary, associate, or joint venture exists; Form MBP-2 register chronologically maintained within 7 days of each transaction. Two-layer restrictions apply both under Section 186(1) (investment-company layers) and under the Companies (Restriction on number of layers) Rules, 2017 (general subsidiary layers).</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Pure investment companies above Rs 100 crore total assets with public funds raised face Core Investment Company classification under RBI requiring NBFC-CIC registration. Patron handles end-to-end holding company compliance on a fixed-fee basis: Rs 35,000 per year (pure investment vehicle, no subsidiaries) | Rs 40,000 per year (1-3 subsidiaries) | Rs 50,000 per year (4+ subsidiaries or active inter-company). Most importantly, the file is maintained to investor-diligence and tax-assessment grade - protection against the much higher-cost failure moments that test holdco compliance.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20a%20holding-company%20compliance%20package%20Rs%2035k%20to%20Rs%2050k%20by%20subsidiary%20count." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Holding Company Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. Pure investment vehicle compliance through complex group holding structures delivered pan-India for family offices, HNI investment vehicles, and group promoters. Average 6 to 9 months full-cycle engagement; continuous Section 186 tracking throughout the year.</p>
            
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise Holding Company Compliance</div>
                <div class="pa-block-sub">Local CA + CS team for holdco engagements</div>
                <div class="pa-city-grid">
                    <a href="/small-company-compliance-holding-companies/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Holdco Compliance in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/small-company-compliance-holding-companies/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Holdco Compliance in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/small-company-compliance-holding-companies/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Holdco Compliance in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/small-company-compliance-holding-companies/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Holdco Compliance in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Adjacent services for holdco engagements</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">Operating Subsidiaries</div></div>
                    </a>
                    <a href="/small-company-compliance-family-vehicles" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Family Company Compliance</div><div class="pa-card-sub">Pre-Holdco Stage</div></div>
                    </a>
                    <a href="/small-company-compliance-dormant" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Dormant Holdco Sec 455</div><div class="pa-card-sub">Inactive Path</div></div>
                    </a>
                    <a href="/strike-off-private-limited-company" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Strike Off</div><div class="pa-card-sub">Wind-Down</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Condonation of Delay</div><div class="pa-card-sub">Historical Cleanup</div></div>
                    </a>
                    <a href="/annual-compliance-cost-comparison-cheap-vs-quality" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Cost: Cheap vs Quality</div><div class="pa-card-sub">Tier Decision</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026 (after FY 2025-26 holdco filing cycle). Review triggers include MCA amendment to Section 186 / 188 / 129(3) / 137 / 92 / 173 / 177, RBI revision to CIC Master Direction (currently RBI Master Direction - Core Investment Companies (Reserve Bank) Directions 2016), Companies (Restriction on number of layers) Rules amendment, Ind AS 110 / AS 21 / 23 / 27 consolidation methodology change, post-2020 Companies (Amendment) Act further changes to Section 137(3) / 92(5) / 188(3) penalty caps, and any new MCA help-kit clarifications on AOC-1 / MBP-2 form revisions.</p>
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
