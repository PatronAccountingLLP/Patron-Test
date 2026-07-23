
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
    <title>Restore Struck-Off Company NCLT</title>
    <meta name="description" content="Revive your struck-off company via NCLT under Section 252(3) within 20 years. Form NCLT-9, INC-28. 4 to 12 month timeline. Patron from Rs 75,000.">
    <link rel="canonical" href="/restore-struck-off-company-mca">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Restore Struck-Off Company NCLT 2026 | Patron Accounting">
    <meta property="og:description" content="Revive your struck-off company via NCLT under Section 252(3) within 20 years. Form NCLT-9, INC-28. 4 to 12 month timeline. Patron from Rs 75,000.">
    <meta property="og:url" content="/restore-struck-off-company-mca">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/restore-struck-off-company-mca-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Restore Struck-Off Company NCLT 2026 | Patron Accounting">
    <meta name="twitter:description" content="Revive your struck-off company via NCLT under Section 252(3) within 20 years. Form NCLT-9, INC-28. 4 to 12 month timeline. Patron from Rs 75,000.">
    <meta name="twitter:image" content="/images/restore-struck-off-company-mca-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/restore-struck-off-company-mca#breadcrumb",
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
                        "name": "Company Closure and Restoration",
                        "item": "/company-closure"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Restore Struck-Off Company via NCLT",
                        "item": "/restore-struck-off-company-mca"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/restore-struck-off-company-mca#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the time limit to restore a struck-off company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Up to 20 years from the date of publication of the strike-off notice in the Official Gazette under Section 252(3) of the Companies Act 2013. The shorter 3-year window under Section 252(1) applies only to appeals against the RoC strike-off order itself, filed by any person aggrieved by that order. Most founder restoration engagements proceed under Section 252(3) - the 20-year window comfortably covers post-discovery situations where founders learn of the strike-off years later."
                }
            },
            {
                "@type": "Question",
                "name": "What is Section 252(3) of the Companies Act?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The sub-section that lets a company, any member, any creditor, or any workman apply to the NCLT for restoration of a struck-off company within 20 years of the Section 248(5) Gazette notice. Statutory grounds: (a) company was carrying on business or in operation at the time of strike-off; OR (b) it is otherwise just that the name of the company be restored to the Register. This is the most commonly used restoration route - 90% of Patron NCLT engagements proceed under Section 252(3)."
                }
            },
            {
                "@type": "Question",
                "name": "Who can apply to NCLT for restoration?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 252(1), any person aggrieved by the RoC order may appeal within 3 years from the RoC strike-off order date. Under Section 252(3), the company itself, any member, any creditor, or any workman may apply within 20 years of the Section 248(5) Gazette notice. Under Section 252(2), the Registrar of Companies may apply when strike-off was based on incorrect or inadvertent information. The Section 252(3) class is deliberately broad - even creditors with unpaid invoices and workmen with unpaid dues can file."
                }
            },
            {
                "@type": "Question",
                "name": "What is Form NCLT-9 and how is it filed?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form NCLT-9 is the petition format prescribed under Rule 87A of the NCLT (Amendment) Rules 2017 (notified 5 July 2017) for Section 252 applications. It is e-filed on the NCLT portal at the bench having jurisdiction over the registered office, accompanied by a Rs 1,000 demand draft to the Pay and Accounts Officer (PAO), Ministry of Corporate Affairs, and served on the RoC and Regional Director NOT LESS than 14 days before the first hearing. The petition includes statement of facts, grounds for restoration, and prayer for consequential reliefs (asset recovery, DIN reactivation)."
                }
            },
            {
                "@type": "Question",
                "name": "What documents are required for NCLT restoration?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Master data print from MCA portal showing strike-off status; Certificate of Incorporation, MOA and AOA; audited financials for every defaulted financial year (proof of operations); ITR acknowledgements covering strike-off period; GST registration + GSTR-1 / GSTR-3B filings (GST portal records persist 7+ years); bank statements showing transactions at and around strike-off date; vendor invoices, employee PF and ESI returns as evidence of business; board resolution authorising petition; affidavit by authorised representative; vakalatnama or memorandum of appearance; Power of Attorney on Rs 50 stamp paper; Rs 1,000 demand draft to PAO MCA."
                }
            },
            {
                "@type": "Question",
                "name": "What happens to company assets after strike-off?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 250 of the Companies Act 2013, all assets of a struck-off company vest in the Central Government on strike-off. Bank balances are frozen, fixed deposits are locked, immovable property and intellectual property rights are blocked, and other assets become unreachable. The company's liabilities continue but assets cannot be accessed. Restoration under Section 252 is the ONLY legal route to recover these assets - they return to the company on restoration order + Form INC-28 filing. Patron has recovered FDs worth Rs 28+ lakh within 30 days of INC-28 filing in recent engagements."
                }
            },
            {
                "@type": "Question",
                "name": "Can directors disqualified under Section 164(2) restore the company?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Section 164(2) disqualifies directors of a company in 3 consecutive years of AOC-4 / MGT-7 default for 5 years across ALL company directorships, with DIN deactivation - so the disqualified directors cannot sign the restoration petition directly. However, Section 252(3) deliberately permits application by the company through any member, creditor, workman, or authorised representative - allowing Patron to draft the petition through the company secretary or authorised representative. Once the NCLT restoration order is passed and all pending AOC-4 / MGT-7 are filed within the tribunal-directed window, the disqualified directors file Form DIR-10 under Rule 14 of Companies (Appointment and Qualification of Directors) Rules 2014 for DIN reactivation."
                }
            },
            {
                "@type": "Question",
                "name": "What is the cost of NCLT restoration?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Patron professional fees range from Rs 75,000 (Simple - recent strike-off within 5 years, clean evidence) to Rs 1,00,000 (Standard - 5-10 years old, moderate backlog) to Rs 1,50,000 (Complex - 10+ years old, multi-year backlog, asset recovery under Section 250, multi-director DIN reactivation). Additional costs include: Rs 1,000 demand draft to PAO MCA; NCLT-mandated conditional penalty (commonly Rs 20,000 per defaulted financial year); ROC restoration fees; backlog AOC-4 / MGT-7 ROC late fees (CCFS-2026 90% waiver may apply for restorations completing inside 15 April-15 July 2026 window). Patron quotes the exact tier in writing after a feasibility scoping call within 48 hours."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/restore-struck-off-company-mca#service",
                "name": "NCLT Restoration of Struck-Off Companies Under Section 252",
                "url": "/restore-struck-off-company-mca",
                "description": "NCLT restoration of struck-off companies under Section 252 of Companies Act 2013. Section 252(3) provides a 20-year window from the Section 248(5) Gazette notice for the company, any member, creditor, or workman to apply for restoration on merits. Section 252(1) provides a 3-year window for aggrieved-person appeals. Petition filed in Form NCLT-9 under Rule 87A of NCLT (Amendment) Rules 2017 (notified 5 July 2017) at NCLT bench having jurisdiction over registered office, with Rs 1,000 demand draft to Pay and Accounts Officer MCA. Section 250 asset vesting in Central Government recovered on restoration. Post-order Form INC-28 within 30 days under MCA21 V3. DIR-10 under Rule 14 for DIN reactivation post Section 164(2) backlog clearance. Patron tiered pricing: Rs 75,000 Simple / Rs 1,00,000 Standard / Rs 1,50,000 Complex. NCLT and ROC fees at actuals. CCFS-2026 amnesty window 15 April-15 July 2026 provides 90% additional-fee waiver on post-restoration backlog cleanup.",
                "serviceType": "NCLT Company Restoration / Corporate Litigation Service",
                "provider": { "@id": "/#organization" },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "National Company Law Tribunal",
                        "sameAs": "https://en.wikipedia.org/wiki/National_Company_Law_Tribunal"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    },
                    {
                        "@type": "Thing",
                        "name": "Companies Act 2013",
                        "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "NCLT Restoration Service Tiers",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "Simple NCLT Restoration",
                            "price": "75000",
                            "priceCurrency": "INR",
                            "description": "Recent strike-off (within 5 years); clean evidence of business; single director-shareholder; one hearing expected; standard Form NCLT-9 petition under Section 252(3). Includes feasibility opinion within 48 hours, petition drafting under Rule 87A of NCLT (Amendment) Rules 2017, evidence pack assembly, NCLT e-filing with Rs 1,000 demand draft, hearing representation by partner-CA, post-order Form INC-28 filing, backlog AOC-4 / MGT-7 filing, DIR-10 DIN reactivation for one director. NCLT and ROC fees at actuals."
                        },
                        {
                            "@type": "Offer",
                            "name": "Standard NCLT Restoration",
                            "price": "100000",
                            "priceCurrency": "INR",
                            "description": "Strike-off 5 to 10 years old; moderate backlog; 2-3 hearings expected; coordination with RoC and Regional Director objections. Includes everything in Simple tier plus extended evidence reconstruction from bank/GST/ITR records, multi-hearing representation, Section 250 asset coordination with banks holding frozen assets, structured payment negotiation for NCLT conditional penalty. NCLT and ROC fees at actuals."
                        },
                        {
                            "@type": "Offer",
                            "name": "Complex NCLT Restoration",
                            "price": "150000",
                            "priceCurrency": "INR",
                            "description": "Strike-off 10+ years old; multi-year backlog; contested hearings; Section 250 asset-vesting recovery from Central Government; Section 164(2) DIN reactivation for multiple directors via DIR-10. Includes everything in Standard tier plus advocate empanelment for contested cases, cross-jurisdictional coordination if applicable, asset recovery facilitation (FDs, immovable property, IP rights), multi-director DIR-10 filings under Rule 14, post-restoration compliance retainer setup. NCLT and ROC fees at actuals; CCFS-2026 amnesty leveraged for backlog cleanup through 15 July 2026."
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
                        Restore Struck-Off Company via NCLT Under Section 252
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>20-Year Window (Section 252(3)):</span> Company / member / creditor / workman can apply within 20 years of Gazette notice. NOT 3 years as commonly believed - that's Section 252(1) for aggrieved-person appeals only.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Simple Rs 75,000 (recent strike-off, clean evidence) | Standard Rs 1,00,000 (5-10 years old) | Complex Rs 1,50,000 (asset recovery + DIN reactivation). NCLT + ROC fees at actuals.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Asset Recovery (Section 250):</span> Section 250 vests assets in Central Government on strike-off - bank balances, FDs, immovable property, IP all frozen. Restoration is the ONLY legal route to recover them.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>End-to-End Timeline:</span> Petition drafting 14-21 days | NCLT order 3-9 months | Post-order Form INC-28 + backlog + DIR-10 DIN reactivation. Full cycle 4-12 months.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 15+ Years NCLT Practice | Partner-CA + Empanelled Advocate Representation</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20restore%20a%20struck-off%20company%20via%20NCLT%20under%20Section%20252." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Restore Struck-Off Company'/>
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
                                <option value="restore-struck-off-company-mca" selected>NCLT Restoration Section 252 (this page)</option>
                                <option value="company-closure">Voluntary Closure (STK-2)</option>
                                <option value="llp-strike-off-form-24">LLP Strike-Off Form 24</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance</option>
                                <option value="backlog-filings-3-year-cleanup">Backlog Cleanup CCFS-2026</option>
                                <option value="director-kyc">DIR-3 KYC + DIR-10</option>
                                <option value="roc-notice">ROC Notice Response</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our company was struck off in 2019. We discovered it in 2024 when a bank refused to renew the FD worth Rs 28 lakh. Patron filed under Section 252(3) and got the restoration order in 8 months. The FD released within 30 days of INC-28 filing.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Pvt Ltd Director</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune | FY25-26 | FD recovery Rs 28L</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">A buyer needed our struck-off subsidiary revived for an asset transfer. Patron handled the NCLT petition, RoC representation, and post-order compliance inside 6 months - well inside our SPA timeline. Partner-CA attended every hearing personally.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GC</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Group CFO</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai | M&amp;A subsidiary revival</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">All 4 of our directors were disqualified under Section 164(2). We thought restoration was impossible. Patron drafted the petition through our CS, restored the company in 9 months, cleared backlog AOC-4 / MGT-7, and filed DIR-10 for all 4 directors. DINs reactivated across our entire group.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Promoter</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi | Multi-director DIR-10</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">15-year-old strike-off. IP rights worth Rs 1 crore frozen. We were told the 3-year window had closed years ago. Patron clarified Section 252(3) gives 20 years from Gazette notice and we were well within. Restoration in 9 months. IP transferred to operating entity.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">IP</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">IP Holdco Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bangalore | 15-year-old restoration</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron negotiated structured payment of the Rs 1.2 lakh NCLT conditional penalty across 6 months - we couldn't pay upfront after 6 years of zero activity. Restoration became effective on the second installment. Compliance retainer signed for ongoing AOC-4 / MGT-7.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Restored Pvt Ltd Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Gurugram | Phased penalty pay</div>
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
                    <p>Free 20-minute restoration feasibility call - written opinion within 48 hours. Section 252(3) 20-year window vs Section 252(1) 3-year window analysis on your specific CIN. Form NCLT-9 petition under Rule 87A of NCLT (Amendment) Rules 2017. Evidence pack reconstruction from bank, GST, ITR, vendor, employee records. Partner-CA or empanelled advocate hearing representation across NCLT benches pan-India. Post-order Form INC-28 + backlog AOC-4 / MGT-7 cleanup + DIR-10 DIN reactivation under Rule 14. CCFS-2026 amnesty window leveraged through 15 July 2026.</p>
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
                <a href="#what-section" class="toc-btn">What Is NCLT Restoration</a>
                <a href="#who-section" class="toc-btn">252(1) vs 252(3)</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">8-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why NCLT Expertise</a>
                <a href="#comparison-section" class="toc-btn">Status Comparison</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: Restoration via NCLT Section 252(3) at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Restore Struck-Off Company Services at a Glance</strong></p>
                    <p><strong>A company struck off under Section 248 can be restored by the NCLT under Section 252(3) within 20 years of the strike-off Gazette notice.</strong> Petition in <strong>Form NCLT-9</strong> under Rule 87A of NCLT (Amendment) Rules 2017; after order, file <strong>Form INC-28</strong> with RoC within 30 days. <strong>Section 250</strong> vests assets in Central Government - restoration recovers them. Patron NCLT service from <strong>Rs 75,000</strong>.</p>
                </div>
                <p>Section 252 provides three procedural routes. <strong>Section 252(1)</strong> lets any aggrieved person appeal the strike-off order within 3 years (rare). <strong>Section 252(2)</strong> is the Registrar's own application proviso. <strong>Section 252(3) - the most commonly used route</strong> - allows the company, any member, creditor, or workman to apply within 20 years of the Gazette notice if the company was carrying on business at strike-off OR if restoration is just. The 20-year window is far longer than most founders realise.</p>
                <p>Below is the quick-reference summary covering governing provisions (Sections 248, 250, 252(1), 252(2), 252(3) + Rule 87A of NCLT Amendment Rules 2017), the 252(1) vs 252(3) window comparison, Patron's tiered fixed-fee pricing, post-order compliance (Form INC-28 + backlog AOC-4/MGT-7 + DIR-10 DIN reactivation), and CCFS-2026 amnesty leverage for backlog cleanup post-restoration.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Provisions</td><td>Companies Act 2013: Section 248 (strike-off grounds), Section 250 (asset vesting in Central Government), Section 252(1) (3-year aggrieved-person appeal), Section 252(2) (Registrar's own application), <strong>Section 252(3) (20-year window for company/member/creditor/workman)</strong>. NCLT (Amendment) Rules 2017: Rule 87A (procedure + Form NCLT-9 prescription, notified 5 July 2017).</td></tr>
                        <tr><td>Application Window</td><td><strong>20 years from Gazette notice under Section 252(3)</strong> (most common); 3 years from RoC order under Section 252(1) (limited to aggrieved-person appeals).</td></tr>
                        <tr><td>Who Can Apply (Sec 252(3))</td><td>Company, any member, any creditor, or any workman aggrieved by strike-off. NOT limited to directors.</td></tr>
                        <tr><td>Application Form</td><td><strong>Form NCLT-9</strong> with demand draft of Rs 1,000 in favour of Pay and Accounts Officer, MCA. Filed at NCLT bench having jurisdiction over registered office. 14-day service on RoC before hearing.</td></tr>
                        <tr><td>Statutory Grounds</td><td>(a) Company was carrying on business or in operation at the time its name was struck off; OR (b) it is otherwise just that the name of the company be restored to the Register.</td></tr>
                        <tr><td>Asset Position (Section 250)</td><td>On strike-off, all assets vest in Central Government - bank balances frozen, FDs locked, immovable property and IP blocked. <strong>Restoration is the ONLY legal route to recover them.</strong></td></tr>
                        <tr><td>Post-Order Filing</td><td><strong>Form INC-28</strong> on MCA21 V3 within 30 days of NCLT order. RoC publishes restoration in Official Gazette; status changes from Struck Off to Active.</td></tr>
                        <tr><td>NCLT Conditional Penalty</td><td>Typically conditional on payment of fine (commonly Rs 20,000 per defaulted financial year) plus filing of pending AOC-4 / MGT-7 inside tribunal-directed window. Restoration becomes effective only on condition compliance.</td></tr>
                        <tr><td>DIN Reactivation</td><td>Form DIR-10 under Rule 14 of Companies (Appointment and Qualification of Directors) Rules 2014. Filed after backlog cleared, for directors disqualified under Section 164(2).</td></tr>
                        <tr><td>Patron Fee Tiers</td><td><strong>Simple Rs 75,000</strong> (recent strike-off, clean evidence) | <strong>Standard Rs 1,00,000</strong> (5-10 years old) | <strong>Complex Rs 1,50,000</strong> (10+ years old, multi-year backlog, asset recovery, DIN reactivation for multiple directors). NCLT and ROC fees at actuals.</td></tr>
                        <tr><td>CCFS-2026 Backlog Leverage</td><td><strong>AVAILABLE</strong> for post-restoration backlog AOC-4 / MGT-7 cleanup. 90% additional-fee waiver. Window 15 April to 15 July 2026 (General Circular 01/2026 dated 24 February 2026).</td></tr>
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
                <h2 class="section-title">What Is NCLT Company Restoration?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>NCLT company restoration is the judicial process by which a company struck off the Register of Companies under Section 248 of the Companies Act 2013 is reinstated to active status by an order of the National Company Law Tribunal under Section 252.</strong> The company resumes its legal existence as if it had never been struck off, and assets that vested in the Central Government under Section 250 return to the company.</p>

                    <p style="margin-top:16px;">Section 252 provides three procedural routes:</p>
                    <ul>
                        <li><strong>Section 252(1)</strong> - lets any aggrieved person appeal the strike-off order itself within <strong>3 years</strong> from the RoC order. Grounds focus on the strike-off being unjustified (e.g., RoC error, missed notice).</li>
                        <li><strong>Section 252(2)</strong> - the proviso allowing the Registrar to apply to NCLT for restoration where strike-off was based on incorrect or inadvertent information.</li>
                        <li><strong>Section 252(3)</strong> - <strong>the most commonly used route</strong> - allows the company, any member, creditor, or workman to apply within <strong>20 years</strong> of the Section 248(5) Gazette notice if the company was carrying on business at strike-off OR if restoration is just.</li>
                    </ul>

                    <div class="highlight-box" style="margin-top:24px;background:#FEF4EE;border-left:4px solid #E8712C;">
                        <p><strong>&#9888; The 20-year window is widely misunderstood.</strong> Many founders are told the 3-year limit applies and assume they are out of time. The 3-year limit under Section 252(1) applies ONLY to appeals against the RoC strike-off order itself, by any person aggrieved. Most founder restoration engagements proceed under Section 252(3) where the company, any member, creditor, or workman has up to 20 years to apply on merits.</p>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Restore Struck-Off Company:</strong></p>
                    
                    <p><strong>Section 252(1) - 3-Year Aggrieved-Person Appeal:</strong> Appeal by any aggrieved person against the RoC strike-off order itself within 3 years of the order. Grounds focus on the strike-off being unjustified (RoC error, missed notice, incorrect address on file).</p>
                    <p><strong>Section 252(2) - Registrar's Own Application:</strong> Proviso allowing the Registrar to apply to NCLT for restoration where strike-off was based on incorrect or inadvertent information.</p>
                    <p><strong>Section 252(3) - 20-Year Application on Merits:</strong> Application by company, any member, any creditor, or any workman within 20 years of the Section 248(5) Gazette notice. Statutory grounds: (a) company was carrying on business or in operation at the time of strike-off; OR (b) it is otherwise just that the name be restored. <strong>This is the most common route for founder restoration engagements.</strong></p>
                    <p><strong>Form NCLT-9:</strong> Petition format prescribed under Rule 87A of NCLT (Amendment) Rules 2017 (notified 5 July 2017) for Section 252 applications. Filed at the NCLT bench having jurisdiction over the registered office. Demand draft of Rs 1,000 to Pay and Accounts Officer (PAO), MCA. Service on RoC at least 14 days before first hearing.</p>
                    <p><strong>Rule 87A of NCLT (Amendment) Rules 2017:</strong> Inserted via notification dated 5 July 2017 - "Appeal or Application under Section 252(1) and 252(3) of the Act". Prescribes procedure, Form NCLT-9, and service requirements for restoration petitions.</p>
                    <p><strong>Section 248 - Grounds for Strike-Off:</strong> Failure to file financials or annual returns for 2+ years (Section 248(1)(c)), non-commencement of business within 1 year of incorporation (Section 248(1)(c)), INC-20A default. Notice via Section 248(5) Official Gazette publication.</p>
                    <p><strong>Section 250 - Asset Vesting on Strike-Off:</strong> On strike-off, all assets of the company vest in the Central Government - bank balances are frozen, fixed deposits are locked, immovable property and intellectual property rights are blocked. Liabilities continue but assets are unreachable. <strong>Restoration is the ONLY legal route to recover these assets.</strong></p>
                    <p><strong>Form INC-28 (Post-Order):</strong> Filed on MCA21 V3 within 30 days of NCLT restoration order. Certified copy of the NCLT order attached. RoC then publishes the restoration in the Official Gazette and updates the company status from Struck Off to Active.</p>
                    <p><strong>Form DIR-10 - DIN Reactivation:</strong> Filed under Rule 14 of Companies (Appointment and Qualification of Directors) Rules 2014 for directors whose DINs were deactivated under Section 164(2) following strike-off. Filed after the company is restored and all pending AOC-4 / MGT-7 are cleared.</p>
                    <p><strong>NCLT Conditional Orders:</strong> Tribunal orders are typically conditional. Common conditions: payment of fine (commonly Rs 20,000 per defaulted financial year), filing of pending returns inside specified window, undertaking to maintain ongoing compliance. Restoration becomes effective only on condition compliance.</p>
                    <p><strong>Section 164(2) Director Disqualification:</strong> Directors of a company in 3 consecutive years of AOC-4 / MGT-7 default disqualified for 5 years across ALL company directorships. Lifted post-restoration via DIR-10 filing.</p>
                    <p><strong>CCFS-2026 (General Circular 01/2026):</strong> Companies Compliance Facilitation Scheme 2026 dated 24 February 2026. 90% additional-fee waiver on Pvt Ltd backlog. Window 15 April to 15 July 2026. Available for post-restoration AOC-4 / MGT-7 backlog cleanup. LLP Form 11 NOT covered.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Restore Struck-Off Company</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>NCLT Restoration</span>
                        <strong>Section 252(3) - 20 Years - Form NCLT-9</strong>
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
            <h2 class="section-title">Section 252(1) vs Section 252(3): Which Window Applies?</h2>
            <div class="content-text">
                
                
                <p>The single most common founder confusion is which sub-section governs their restoration. Most engagements proceed under Section 252(3) since the 20-year window comfortably covers post-discovery situations.</p>

                <h3 style="margin-top:32px;">Decision Matrix - 252(1) vs 252(3)</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr><th>Criterion</th><th>Section 252(1)</th><th>Section 252(3)</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Window</td><td>3 years from RoC strike-off order</td><td><strong>20 years from Gazette notice under Sec 248(5)</strong></td></tr>
                        <tr><td>Who can apply</td><td>Any person aggrieved by the RoC order</td><td>Company, any member, any creditor, or any workman</td></tr>
                        <tr><td>Primary ground</td><td>Strike-off was unjustified - RoC had no grounds under Sec 248</td><td>Company was carrying on business at strike-off OR restoration is just</td></tr>
                        <tr><td>Evidence focus</td><td>Errors or irregularities in the RoC strike-off process</td><td>Proof of business activity at strike-off date - GST, ITR, bank, contracts</td></tr>
                        <tr><td>Typical use case</td><td>Strike-off based on incorrect address; missed RoC notice</td><td>Founder discovers strike-off years later; needs asset recovery</td></tr>
                        <tr><td>NCLT relief</td><td>Set aside RoC order; restore name</td><td>Restore name; impose conditional penalty</td></tr>
                        <tr><td>Form used</td><td>Form NCLT-9</td><td>Form NCLT-9</td></tr>
                        <tr><td>Frequency in Patron practice</td><td>Less than 10% of engagements</td><td><strong>More than 90% of engagements</strong></td></tr>
                    </tbody>
                </table>
                </div>

                <h3 style="margin-top:32px;">Who Needs NCLT Restoration?</h3>
                <ul>
                    <li><strong>Companies struck off for non-filing</strong> of AOC-4 and MGT-7 (the most common ground under Section 248(1)(c)) where founders want to resume operations</li>
                    <li><strong>Founders who discover company assets frozen</strong> - bank balances, immovable property, fixed deposits - vested with Central Government under Section 250 and needing recovery</li>
                    <li><strong>Companies in ongoing litigation or arbitration</strong> at the time of strike-off needing legal personality restored to participate</li>
                    <li><strong>Promoters seeking to lift Section 164(2) director disqualification</strong> after restoring the underlying defaulting company</li>
                    <li><strong>Buyers in M&amp;A or distressed-asset deals</strong> where the target turns out to be a struck-off entity holding the asset of interest</li>
                    <li><strong>Group CFOs reorganising holding-subsidiary structures</strong> where a struck-off subsidiary needs revival to be merged or wound up properly</li>
                </ul>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>&#9888; Window check.</strong> Calculate from the date the Section 248(5) strike-off notice was published in the Official Gazette - NOT from the RoC strike-off order date. Section 252(3) gives 20 years from Gazette publication. The 3-year window under Section 252(1) runs from the RoC order - shorter and harder to qualify.</p>
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
            <h2 class="section-title">What Patron Delivers - End-to-End NCLT Restoration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Feasibility Opinion (48 hours)</strong></td><td>Section 252(3) eligibility check against the 20-year window calculated from Section 248(5) Gazette notice. Review of strike-off grounds under Section 248. Audit of available evidence of business activity at strike-off date. Written opinion on restoration probability and recommended sub-section route (252(1) vs 252(3)). Fixed-fee quote.</td></tr>
                        <tr><td><strong>2. Petition Drafting (14-21 days)</strong></td><td>Form NCLT-9 petition prepared under Rule 87A of NCLT (Amendment) Rules 2017 with statement of facts narrating company history, strike-off circumstances, and grounds for restoration. Affidavit and verification. Prayer for restoration plus consequential reliefs (asset recovery under Section 250, DIN reactivation under Rule 14).</td></tr>
                        <tr><td><strong>3. Evidence Pack Assembly</strong></td><td>Audited financials for the defaulted period, ITR acknowledgements, GST returns (GSTR-1 / GSTR-3B from GST portal records which persist 7+ years), bank statements, vendor invoices, employee PF and ESI records - any documentation showing business operations at strike-off date. Patron reconstructs evidence where books are thin.</td></tr>
                        <tr><td><strong>4. NCLT Filing and Hearing Representation</strong></td><td>E-filing on NCLT portal with Rs 1,000 demand draft to Pay and Accounts Officer (PAO), MCA. Service on RoC and Regional Director not less than 14 days before hearing. Oral hearing representation by partner-CA or empanelled advocate. Response to RoC and Regional Director objections.</td></tr>
                        <tr><td><strong>5. NCLT Conditional Order Negotiation</strong></td><td>Tribunal orders are typically conditional - common conditions: fine commonly Rs 20,000 per defaulted financial year, filing of pending returns inside specified window. Patron negotiates structured payment terms where the lump sum is unaffordable. Conditions must be complied with for restoration to become effective.</td></tr>
                        <tr><td><strong>6. Post-Order Compliance (Within 30 Days)</strong></td><td>Certified copy of NCLT order delivered to RoC within 30 days. Form INC-28 filed on MCA21 V3. Coordination with RoC for status change from Struck Off to Active. RoC publishes restoration in Official Gazette - Patron tracks publication.</td></tr>
                        <tr><td><strong>7. Backlog Cleanup (1-3 Months Post-Restoration)</strong></td><td>All pending AOC-4 and MGT-7 returns filed with NCLT-mandated penalty (typically Rs 20,000 per defaulted year). CCFS-2026 amnesty leveraged for additional-fee waiver where restoration completes before 15 July 2026 window closure (90% waiver on Rs 100/day late fees).</td></tr>
                        <tr><td><strong>8. DIR-10 DIN Reactivation</strong></td><td>For directors disqualified under Section 164(2), Form DIR-10 filed under Rule 14 of Companies (Appointment and Qualification of Directors) Rules 2014 once backlog AOC-4 / MGT-7 are cleared. Reactivates DIN across the director's entire company portfolio.</td></tr>


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
            <h2 class="section-title">Patron NCLT Restoration Process: 7-Phase Protocol</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs every NCLT restoration through a 7-phase protocol aligned to standard tribunal practice. Petition drafting in Days 1-21, NCLT filing by Day 35, first hearing typically 6-10 weeks from filing, NCLT order in 3-9 months, post-order Form INC-28 within 30 days, backlog cleanup + DIR-10 in 1-3 months. End-to-end cycle 4-12 months depending on bench backlog and complexity.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Phase 1</span>
                        <h3 class="step-title">Feasibility + Window Check (Days 1-7)</h3>
                        <p class="step-description">Confirm strike-off date from Section 248(5) Gazette notice (NOT from RoC order date). Calculate Section 252(3) 20-year window from Gazette publication. Audit available evidence of business activity at strike-off date. Issue written feasibility opinion with sub-section route recommendation (252(1) vs 252(3)) and fixed-fee tier quote.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 248(5) Gazette
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                20-year window calc
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Sub-section route
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="55" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">252(3)</text>
                                    <text x="55" y="48" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">20 YEARS</text>
                                    <rect x="22" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="33" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GAZETTE</text>
                                    <rect x="48" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="59" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CIN CHECK</text>
                                    <rect x="74" y="68" width="24" height="8" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="86" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FIXED FEE</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Feasibility Done</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Phase 2</span>
                        <h3 class="step-title">Petition Drafting + Evidence Pack (Days 8-28)</h3>
                        <p class="step-description">Form NCLT-9 petition drafted under Rule 87A of NCLT (Amendment) Rules 2017 with statement of facts, grounds for restoration under Section 252(3), prayer for restoration plus consequential reliefs (Section 250 asset recovery, Section 164(2) DIN reactivation). Evidence pack assembled - audited financials, ITR acknowledgements, GST returns, bank statements, vendor invoices, employee PF/ESI records.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 87A NCLT 2017
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Form NCLT-9
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 252(3) grounds
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM NCLT-9</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <text x="60" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PETITION DRAFT</text>
                                    <text x="60" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EVIDENCE PACK</text>
                                    <text x="60" y="72" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RULE 87A</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Petition Ready</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Phase 3</span>
                        <h3 class="step-title">NCLT Filing + Service (Days 28-35)</h3>
                        <p class="step-description">E-file petition on NCLT portal at the bench having jurisdiction over registered office. Rs 1,000 demand draft to Pay and Accounts Officer (PAO), MCA enclosed. Serve copies on RoC and Regional Director NOT LESS than 14 days before first hearing date. First hearing date typically 6-10 weeks from filing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rs 1,000 DD to PAO
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                14-day service
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Bench jurisdiction
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NCLT</text>
                                    <text x="40" y="48" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PORTAL</text>
                                    <text x="40" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">E-FILE</text>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="36" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SERVE</text>
                                    <text x="88" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RoC + RD</text>
                                    <text x="88" y="58" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">14 DAYS</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Filed</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Phase 4</span>
                        <h3 class="step-title">Hearings + RoC Representation (Months 2-7)</h3>
                        <p class="step-description">First hearing typically 6-10 weeks from filing. RoC and Regional Director responses filed; objections addressed by partner-CA or empanelled advocate. Hearings continue until NCLT is satisfied on (a) carrying on business at strike-off OR (b) just and equitable restoration. 2-3 hearings typical for standard cases; complex cases may require 4-6.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Partner-CA hearings
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                RoC objections
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Empanelled advocate
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
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">HEARING</text>
                                    <text x="44" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">2-3 ROUNDS</text>
                                    <text x="44" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MONTHS 2-7</text>
                                    <text x="44" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RoC + RD</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PARTNER</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Hearings Done</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Phase 5</span>
                        <h3 class="step-title">NCLT Order + Conditional Penalty (Months 6-9)</h3>
                        <p class="step-description">Tribunal passes restoration order typically conditional on: payment of fine (commonly Rs 20,000 per defaulted financial year) AND filing of pending AOC-4 / MGT-7 returns inside tribunal-directed window (usually 30-60 days from order). Restoration becomes effective only on condition compliance. Non-compliance can lead to re-strike-off under Section 248.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Conditional order
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rs 20k/year typical
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Tribunal window
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NCLT ORDER</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                    <text x="60" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CONDITIONAL</text>
                                    <text x="60" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20k/YEAR</text>
                                    <text x="60" y="72" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PER DEFAULT</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Order Received</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Phase 6</span>
                        <h3 class="step-title">Form INC-28 Filing (Within 30 Days of Order)</h3>
                        <p class="step-description">Certified copy of NCLT order delivered to RoC within 30 days. Form INC-28 filed on MCA21 V3 with NCLT order attached. RoC publishes restoration in Official Gazette; status changes from 'Struck Off' to 'Active'. Patron tracks Gazette publication. Section 250 asset vesting reverses - bank balances unfreeze, FDs unlock, immovable property and IP rights restored.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                30-day window
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MCA21 V3
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 250 reversal
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
                                    <text x="60" y="32" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM INC-28</text>
                                    <text x="60" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text>
                                    <text x="60" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STRUCK OFF -&gt; ACTIVE</text>
                                    <text x="60" y="68" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SEC 250 REVERSE</text>
                                </svg>
                            </div>
                            <span class="illustration-label">INC-28 Filed</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Phase 7</span>
                        <h3 class="step-title">Backlog Cleanup + DIR-10 (Months 8-12)</h3>
                        <p class="step-description">All pending AOC-4 and MGT-7 / MGT-7A filed with NCLT-mandated conditional penalty. CCFS-2026 amnesty leveraged where restoration completes inside 15 April-15 July 2026 window (90% additional-fee waiver). Form DIR-10 filed under Rule 14 of Companies (Appointment and Qualification of Directors) Rules 2014 for directors disqualified under Section 164(2) - reactivates DIN across portfolio.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Backlog AOC-4 + MGT-7
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CCFS-2026 leverage
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DIR-10 + Rule 14
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="60" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CYCLE CLOSED</text>
                                    <line x1="30" y1="46" x2="90" y2="46" stroke="#10B981" stroke-width="1"/>
                                    <text x="60" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BACKLOG CLEARED</text>
                                    <text x="60" y="66" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-10 DIN ACTIVE</text>
                                    <circle cx="60" cy="74" r="3" fill="#10B981"/>
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
            <h2 class="section-title">Documents Required for NCLT Restoration Petition</h2>
            <div class="content-text">
                
                
                <p>NCLT restoration is a judicial process requiring documentary evidence of business activity at strike-off date plus standard corporate records. Patron prepares a consolidated checklist on Day 1 of engagement.</p>

                <h3 style="margin-top:24px;">Corporate Records</h3>
                <ul>
                    <li>Master data of the company from MCA portal showing current strike-off status</li>
                    <li>Certificate of Incorporation (COI), Memorandum of Association (MOA), Articles of Association (AOA)</li>
                    <li>Board resolution authorising the petition and appointing the signatory (where possible)</li>
                    <li>Power of Attorney on Rs 50 stamp paper authorising the signatory</li>
                </ul>

                <h3 style="margin-top:24px;">Evidence of Business Activity at Strike-Off Date</h3>
                <ul>
                    <li>Audited financial statements for every defaulted financial year (proof of operations)</li>
                    <li>Latest filed Income Tax Returns and acknowledgements covering strike-off period</li>
                    <li>GST registration certificate and GSTR-1 / GSTR-3B filings for strike-off period (GST portal records persist 7+ years)</li>
                    <li>Bank account statements showing transactions at and around strike-off date</li>
                    <li>Vendor invoices and statutory contracts</li>
                    <li>Employee PF and ESI returns - strong evidence of operations</li>
                    <li>Any other documentation showing business operations at strike-off date</li>
                </ul>

                <h3 style="margin-top:24px;">NCLT Filing Documents</h3>
                <ul>
                    <li>Affidavit by the authorised representative verifying the petition contents</li>
                    <li>Vakalatnama or memorandum of appearance for the advocate / CS appearing</li>
                    <li>Demand draft of Rs 1,000 in favour of Pay and Accounts Officer, Ministry of Corporate Affairs</li>
                    <li>Copies of petition for service on RoC and Regional Director (delivered 14 days before hearing)</li>
                </ul>

                <p style="margin-top:16px;"><em>Note: Evidence of business at strike-off date is the central element. Patron reconstructs evidence from bank statements, GST portal records, vendor confirmations, and employee PF/ESI records where books are thin. NCLT has consistently accepted reconstructed evidence where the underlying business activity is established.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common NCLT Restoration Challenges - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Founders believe 3-year window applies</strong></td>
                            <td>Founders are told the 3-year limit under Section 252(1) is the only route and assume they are out of time. They abandon restoration even when assets worth crores are frozen under Section 250.</td>
                            <td>Patron clarifies the Section 252(3) <strong>20-year window</strong> applies to company / member / creditor / workman applications. Almost every founder restoration proceeds under 252(3), not 252(1). Calculate from Section 248(5) Gazette notice date.</td>
                        </tr>
                        <tr>
                            <td><strong>2. Evidence of business at strike-off date is thin</strong></td>
                            <td>Books were not maintained for years. Original vendor invoices lost. Bank statements purged. Founders fear NCLT will reject for want of evidence.</td>
                            <td>Patron reconstructs evidence from bank statements (RBI norms - 7-10 year retention), GST portal records (persist 7+ years), vendor confirmations, employee PF/ESI records. NCLT has consistently accepted reconstructed evidence where underlying business activity is established.</td>
                        </tr>
                        <tr>
                            <td><strong>3. NCLT conditional penalty unaffordable upfront</strong></td>
                            <td>Tribunal orders typically conditional on payment of fine (commonly Rs 20,000 per defaulted financial year). For multi-year defaults, lump sum can be Rs 1-2 lakh which the company cannot pay upfront.</td>
                            <td>Patron negotiates structured payment terms with NCLT through representation. The order can permit phased payment. Restoration is contingent on payment, so structure matters more than absolute amount.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Directors disqualified under Section 164(2) cannot sign</strong></td>
                            <td>Directors disqualified under Section 164(2) face 5-year disqualification with DIN deactivation - cannot sign the petition or DIN-based documents. Founders assume restoration is impossible.</td>
                            <td>Patron drafts the petition through the company secretary or an authorised representative under Section 252(3) (which permits member/creditor application). Once NCLT order restores the company AND pending returns are filed, the disqualified directors file Form DIR-10 under Rule 14 for DIN reactivation.</td>
                        </tr>
                        <tr>
                            <td><strong>5. Asset recovery from Central Government takes time</strong></td>
                            <td>Section 250 vests assets in Central Government on strike-off. Even after restoration, recovering frozen FDs and bank balances requires bank-side processing - typically 30-60 days post Form INC-28 filing.</td>
                            <td>Patron tracks Gazette publication of restoration, coordinates with banks holding frozen assets, drafts formal asset-release requests citing the restored status. FD release typically within 30 days of INC-28; immovable property and IP within 60-90 days.</td>
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
            <h2 class="section-title">NCLT Restoration Pricing - Three Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td colspan="2" style="background:#F0F4F8 !important;"><strong>Three Engagement Tiers (Fixed Fee per Tier)</strong></td></tr>
                        <tr><td><strong>Simple Restoration</strong> - Recent strike-off (within 5 years); clean evidence of business; single director-shareholder; one hearing expected; standard NCLT-9 petition under Section 252(3).</td><td class="text-end">Rs 75,000 (Exl GST, NCLT + ROC fees, NCLT penalty)</td></tr>
                        <tr><td><strong>Standard Restoration</strong> - Strike-off 5 to 10 years old; moderate backlog; 2-3 hearings expected; coordination with RoC and Regional Director objections; Section 252(3) application with detailed evidence pack reconstruction.</td><td class="text-end">Rs 1,00,000 (Exl GST, NCLT + ROC fees, NCLT penalty)</td></tr>
                        <tr><td><strong>Complex Restoration</strong> - Strike-off 10+ years old; multi-year backlog; contested hearings; Section 250 asset-vesting recovery from Central Government; Section 164(2) DIN reactivation for multiple directors via DIR-10; cross-jurisdictional coordination if applicable.</td><td class="text-end">Rs 1,50,000 (Exl GST, NCLT + ROC fees, NCLT penalty)</td></tr>
                        <tr><td colspan="2" style="background:#FEF4EE !important;"><strong>NCLT and Government Fees (Billed at Actuals)</strong></td></tr>
                        <tr><td>Rs 1,000 demand draft to Pay and Accounts Officer, MCA</td><td class="text-end">Rs 1,000</td></tr>
                        <tr><td><strong>NCLT-mandated conditional penalty</strong> (typically Rs 20,000 per defaulted financial year - exact figure in tribunal order)</td><td class="text-end">Variable (Rs 20k typical per defaulted year)</td></tr>
                        <tr><td>ROC restoration fees and stamp duties</td><td class="text-end">At actuals</td></tr>
                        <tr><td>Backlog AOC-4 / MGT-7 ROC late fees (Rs 100/day per form under Section 403)</td><td class="text-end">At actuals (CCFS-2026 90% waiver may apply)</td></tr>
                        <tr><td>Empanelled advocate fees (if engaged separately)</td><td class="text-end">At actuals</td></tr>
                        <tr><td colspan="2" style="background:#E8F5E9 !important;"><strong>What's Included Across All Tiers</strong></td></tr>
                        <tr><td>Written feasibility opinion within 48 hours of CIN handover</td><td class="text-end">Included</td></tr>
                        <tr><td>Form NCLT-9 petition drafting under Rule 87A of NCLT (Amendment) Rules 2017</td><td class="text-end">Included</td></tr>
                        <tr><td>Evidence pack reconstruction (bank, GST, ITR, vendor, employee records)</td><td class="text-end">Included</td></tr>
                        <tr><td>NCLT e-filing + 14-day service on RoC and Regional Director</td><td class="text-end">Included</td></tr>
                        <tr><td>Partner-CA or empanelled advocate hearing representation</td><td class="text-end">Included</td></tr>
                        <tr><td>Post-order Form INC-28 filing on MCA21 V3 within 30 days</td><td class="text-end">Included</td></tr>
                        <tr><td>Backlog AOC-4 / MGT-7 filing post-restoration (excludes late fees)</td><td class="text-end">Included</td></tr>
                        <tr><td>DIR-10 DIN reactivation for disqualified directors under Section 164(2)</td><td class="text-end">Included (Complex tier covers multiple directors)</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 Backlog Amnesty Leverage (15 April-15 July 2026)</strong></td><td class="text-end"><strong>90% additional-fee waiver on Pvt Ltd backlog AOC-4 / MGT-7 catch-up</strong> | General Circular 01/2026 dated 24 February 2026</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Restore Struck-Off Company consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20NCLT%20restoration%20service%20from%20Rs%2075%2C000." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">End-to-End NCLT Restoration Timeline (4-12 Months)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Feasibility opinion turnaround</td><td class="text-end">48 hours from CIN handover and document review</td></tr>
                        <tr><td>Petition drafting + evidence pack assembly</td><td class="text-end">14 to 21 working days</td></tr>
                        <tr><td>NCLT e-filing to first hearing date</td><td class="text-end">6 to 10 weeks (varies by bench backlog)</td></tr>
                        <tr><td>Hearings to final NCLT order</td><td class="text-end">2 to 6 months depending on RoC objections and tribunal calendar (2-3 hearings typical)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Post-order Form INC-28 filing</strong></td><td class="text-end"><strong>Within 30 days of NCLT order</strong> (tribunal direction)</td></tr>
                        <tr><td>RoC Gazette publication of restoration</td><td class="text-end">7-14 days after INC-28 filing</td></tr>
                        <tr><td>Bank FD release post-restoration</td><td class="text-end">30 days typical from INC-28 filing</td></tr>
                        <tr><td>Immovable property and IP restoration</td><td class="text-end">60-90 days from INC-28 filing</td></tr>
                        <tr><td>Backlog AOC-4 / MGT-7 catch-up</td><td class="text-end">30 to 60 days post restoration</td></tr>
                        <tr><td>DIN reactivation via DIR-10 (Rule 14)</td><td class="text-end">7 to 15 working days after backlog clearance</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>End-to-end cycle</strong></td><td class="text-end"><strong>4 to 12 months</strong> depending on complexity and bench backlog</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td>CCFS-2026 amnesty window (post-restoration backlog leverage)</td><td class="text-end"><strong>15 April to 15 July 2026</strong> - 90% additional-fee waiver | General Circular 01/2026 dated 24 February 2026</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; The 20-year Section 252(3) window is generous, but two factors create urgency.</strong> First, every year that passes makes evidence of business at strike-off date harder to reconstruct - bank statements are purged, GST records age out, vendors disappear. Second, NCLT bench backlogs add 2-6 months to every petition; starting earlier means restoration completes earlier. Third, the CCFS-2026 window for backlog cleanup post-restoration closes on <strong>15 July 2026</strong> - companies restored before then can clear pending AOC-4 / MGT-7 at 90% additional-fee waiver; after 15 July 2026 the full Rs 100/day late fee resumes.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on tier (Simple Rs 75k / Standard Rs 1,00,000 / Complex Rs 1,50,000), strike-off age, evidence reconstruction effort, contested hearings, Section 250 asset-recovery scope, Section 164(2) DIN reactivation across multiple directors, and any cross-jurisdictional coordination. NCLT government fees, conditional penalties, ROC restoration fees, and backlog late fees billed at actuals.</p>


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
            <h2 class="section-title">Why Patron NCLT Restoration Expertise Matters</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Asset Recovery Under Section 250</h3>
                <p>Restoration is the ONLY legal route to recover company assets that vested in the Central Government under Section 250 on strike-off - bank balances, fixed deposits, immovable property, IP rights. Without restoration, those assets remain frozen indefinitely. A correctly prepared Section 252(3) petition can recover assets even from a strike-off that happened more than a decade ago. Patron has recovered FDs worth Rs 28+ lakh in recent engagements within 30 days of Form INC-28 filing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>20-Year Window Mastery (Section 252(3))</h3>
                <p>The Section 252(3) 20-year window is widely misunderstood - founders assume the 3-year limit under Section 252(1) applies and abandon restoration prematurely. Patron correctly identifies the applicable sub-section, calculates window from the Section 248(5) Gazette notice (not RoC order), and runs almost every engagement under Section 252(3). 90% of Patron NCLT restoration engagements proceed under Section 252(3).</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>15+ Years NCLT Practice</h3>
                <p>Patron is led by CAs and CSs with 15+ years of NCLT practice including asset-recovery restorations, director-disqualification linkage cases, and contested RoC objections. Every petition is partner-reviewed; hearings are attended by a CA, CS, or empanelled advocate; and post-order compliance is delivered inside the tribunal's direction window.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Section 164(2) DIN Reactivation Path</h3>
                <p>Disqualified directors under Section 164(2) cannot sign DIN-based documents - including the restoration petition itself. Patron drafts the petition through the company secretary or authorised representative (Section 252(3) permits member/creditor application). Once NCLT restores the company and backlog AOC-4 / MGT-7 are cleared, Form DIR-10 under Rule 14 reactivates DIN across the director's entire portfolio.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>NCLT Conditional Order Negotiation</h3>
                <p>Tribunal orders are typically conditional on payment of fine (commonly Rs 20,000 per defaulted year) plus backlog return filing inside specified window. For multi-year defaults the lump sum can be substantial. Patron negotiates structured payment terms through tribunal representation. Non-compliance with conditions can lead to re-strike-off under Section 248 - structure matters more than absolute amount.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>CCFS-2026 Backlog Amnesty Leverage</h3>
                <p>CCFS-2026 (General Circular 01/2026 dated 24 February 2026) provides 90% additional-fee waiver on Pvt Ltd backlog through 15 July 2026 window. For restored companies, this dramatically reduces post-restoration AOC-4 / MGT-7 catch-up cost. Patron sequences restoration timeline to leverage this amnesty where applicable - the difference can be Rs 50,000-Rs 2,00,000 in saved late fees per defaulted year.</p>
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
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years NCLT Practice</strong></p>

                <h3 style="margin-top:24px;">NCLT Restoration Outcome Proof - FY 2025-26 Recent Engagements</h3>
                <ul>
                    <li><strong>FD release Rs 28+ lakh:</strong> Pune-based Pvt Ltd struck off in 2019, discovered in 2024 when bank refused FD renewal. Patron filed Section 252(3) petition; NCLT order in 8 months; FD released within 30 days of INC-28 filing.</li>
                    <li><strong>M&amp;A subsidiary revival:</strong> Mumbai-based Group CFO needed struck-off subsidiary revived for buyer asset transfer. Patron handled NCLT petition, RoC representation, post-order compliance inside 6 months - within SPA timeline.</li>
                    <li><strong>Multi-director DIN reactivation:</strong> Delhi-based Pvt Ltd with 4 directors disqualified under Section 164(2). Patron drafted petition via CS, restored company, cleared backlog AOC-4 / MGT-7, filed DIR-10 for all 4 directors.</li>
                    <li><strong>15-year-old strike-off restoration:</strong> Bangalore IP-holding company struck off in 2011, IP rights worth Rs 1 crore frozen. Patron filed under Section 252(3) (well within 20-year window); restoration completed in 9 months; IP transferred to operating entity.</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India NCLT Bench Coverage</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves NCLT benches across India through partner-CA, partner-CS, and empanelled advocate representation. NCLT bench coverage includes Mumbai, Pune (Maharashtra jurisdiction), Delhi (NCT, Haryana, Punjab, Himachal), Kolkata, Chennai, Bangalore, Hyderabad, Ahmedabad, and other benches via empanelled advocate network. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies including group-affiliate restoration work.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restoration vs Strike-Off vs Dormant - Status Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Status</th><th>Legal Position</th><th>Patron Service Path</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Active and compliant</td><td>Company on ROC register; filings up to date</td><td>Annual compliance retainer; no restoration needed.</td></tr>
                        <tr><td>Active with backlog (2-5 years)</td><td>On register but late; risk of strike-off and director disqualification under Section 164(2)</td><td>Backlog cleanup under CCFS-2026 before strike-off triggers.</td></tr>
                        <tr><td>Struck off under Section 248 within last 3 years</td><td>Removed from register; assets vested in Central Government under Section 250</td><td>NCLT Section 252(1) appeal (if RoC error) OR Section 252(3) application on merits.</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Struck off 3 to 20 years ago</strong></td><td>Removed from register; founders often believe they cannot revive</td><td><strong>NCLT Section 252(3) application - 20-year window applies. This page.</strong></td></tr>
                        <tr><td>Struck off more than 20 years ago</td><td>Beyond Section 252 window; restoration not available</td><td>Restoration not possible; assets remain with CG; consider winding up of any successor entity.</td></tr>
                        <tr><td>Dormant under Section 455 (with MCA approval)</td><td>On register but inactive with MCA-approved dormant status</td><td>Convert back to active under Section 455(5); not a restoration case.</td></tr>
                        <tr><td>Voluntary STK-2 strike-off (Pvt Ltd)</td><td>Founder-initiated closure via Form STK-2 at C-PACE</td><td>Voluntary Company Closure service (parallel exit path, NOT restoration).</td></tr>


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
                
                
                <p>NCLT restoration connects to several Patron service lines before and after the tribunal order:</p>
                <ul>
                    <li><a href="/company-closure"><strong>Voluntary Company Closure</strong></a> - the parallel STK-2 strike-off service for companies that want to formally wind down rather than restore.</li>
                    <li><a href="/llp-strike-off-form-24"><strong>LLP Strike-Off Form 24</strong></a> - the LLP equivalent of strike-off. Note: restoration of struck-off LLPs follows a different track under the LLP Act.</li>
                    <li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance</strong></a> - annual retainer post-restoration to prevent recurrence and meet NCLT-directed filing schedule.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Pvt Ltd Annual Compliance Bundle</strong></a> - the Rs 35-50k annual cycle bundle for restored companies returning to active status.</li>
                    <li><a href="/backlog-filings-3-year-cleanup"><strong>Backlog Filings Cleanup</strong></a> - 2-5 year ROC backlog clearance under CCFS-2026 for restored companies that need pending AOC-4 and MGT-7.</li>
                    <li><a href="/director-kyc"><strong>Director KYC and DIN Reactivation</strong></a> - DIR-10 filing for directors whose DINs were deactivated under Section 164(2).</li>
                    <li><a href="/roc-notice"><strong>ROC Notice Response</strong></a> - if RoC files objections to the restoration petition or issues post-restoration notices.</li>
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
                    <li><strong>Companies Act, 2013</strong> - master statute. Section 248 (grounds for ROC strike-off), Section 248(1)(c) (non-filing of financials/annual returns for 2+ years OR non-commencement within 1 year), Section 248(5) (Official Gazette notice of strike-off), Section 250 (vesting of assets in Central Government on strike-off), Section 252 (restoration by NCLT), Section 252(1) (3-year aggrieved-person appeal), Section 252(2) (Registrar's own restoration application), <strong>Section 252(3) (20-year application by company / member / creditor / workman)</strong>, Section 164(2) (5-year director disqualification on 3 consecutive defaults).</li>
                    <li><strong>National Company Law Tribunal Rules, 2016</strong> - master procedural framework for NCLT proceedings.</li>
                    <li><strong>NCLT (Amendment) Rules, 2017</strong> - notified <strong>5 July 2017</strong>. Inserted <strong>Rule 87A</strong> "Appeal or Application under Section 252(1) and 252(3) of the Act" prescribing Form NCLT-9, Rs 1,000 demand draft to PAO MCA, 14-day service on RoC and affected parties before hearing.</li>
                    <li><strong>Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016</strong> - procedural framework for Section 248 strike-off (referenced for understanding strike-off grounds).</li>
                    <li><strong>Companies (Appointment and Qualification of Directors) Rules, 2014</strong> - <strong>Rule 14</strong> prescribes Form DIR-10 for DIN reactivation post backlog clearance for directors disqualified under Section 164(2).</li>
                    <li><strong>Companies (Incorporation) Rules, 2014</strong> - Form INC-28 prescribed for post-NCLT-order filing on MCA21 V3 within 30 days of order.</li>
                    <li><strong>General Circular 01/2026 dated 24 February 2026 (CCFS-2026)</strong> - Companies Compliance Facilitation Scheme 2026. Window 15 April to 15 July 2026. 90% additional-fee waiver on Pvt Ltd backlog AOC-4 / MGT-7 catch-up post-restoration.</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections at a Glance</h3>
                <ul>
                    <li><strong>Section 248</strong> - grounds for ROC strike-off (non-filing 2+ years, non-commencement within 1 year, INC-20A default)</li>
                    <li><strong>Section 248(5)</strong> - Official Gazette notice of strike-off (anchor date for Section 252(3) 20-year window)</li>
                    <li><strong>Section 250</strong> - assets of struck-off company vest in Central Government; liabilities continue</li>
                    <li><strong>Section 252(1)</strong> - 3-year appeal by aggrieved person against RoC strike-off order</li>
                    <li><strong>Section 252(2)</strong> - Registrar's own restoration application (incorrect/inadvertent information)</li>
                    <li><strong>Section 252(3)</strong> - <strong>20-year application by company / member / creditor / workman on merits</strong></li>
                    <li><strong>Section 164(2)</strong> - 5-year director disqualification on 3 consecutive AOC-4 / MGT-7 defaults; lifted via DIR-10 post-restoration</li>
                </ul>

                <h3 style="margin-top:24px;">NCLT Practice on Conditional Orders</h3>
                <p>Tribunal restoration orders are typically conditional. Common conditions:</p>
                <ul>
                    <li>Payment of fine (commonly Rs 20,000 per defaulted financial year - exact figure in tribunal order)</li>
                    <li>Filing of pending AOC-4 / MGT-7 inside tribunal-directed window (usually 30-60 days from order)</li>
                    <li>Undertaking to maintain ongoing compliance going forward</li>
                    <li>Payment of NCLT and ROC fees</li>
                </ul>
                <p>Non-compliance with conditions can lead to re-strike-off under Section 248. Restoration becomes effective only on condition compliance.</p>

                <h3 style="margin-top:24px;">Post-Order Obligations Within 30 Days</h3>
                <ul>
                    <li>Certified copy of NCLT order delivered to RoC</li>
                    <li>Form INC-28 filed on MCA21 V3</li>
                    <li>RoC publishes restoration in Official Gazette</li>
                    <li>Company status changes from "Struck Off" to "Active"</li>
                    <li>Section 250 asset vesting reverses - assets return to company</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.nclt.gov.in" target="_blank" rel="noopener">National Company Law Tribunal (NCLT) portal</a> for e-filing of Form NCLT-9 and bench jurisdiction. Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for Form INC-28 post-order filing and CCFS-2026 General Circular 01/2026 dated 24 February 2026. Refer to the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text of Sections 248, 250, 252.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on NCLT restoration under Section 252: the 20-year Section 252(3) window vs 3-year Section 252(1) appeal, Form NCLT-9 procedure under Rule 87A of NCLT (Amendment) Rules 2017, required documents and evidence of business at strike-off date, Section 250 asset vesting and recovery, end-to-end timeline (4-12 months), Patron tiered pricing (Rs 75k Simple / Rs 1L Standard / Rs 1.5L Complex), Section 164(2) director disqualification handling, and DIR-10 DIN reactivation post-restoration.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the time limit to restore a struck-off company?</h3>
                        <div class="faq-expanded__a"><p>Up to 20 years from the date of publication of the strike-off notice in the Official Gazette under Section 252(3) of the Companies Act 2013. The shorter 3-year window under Section 252(1) applies only to appeals against the RoC strike-off order itself, filed by any person aggrieved by that order. Most founder restoration engagements proceed under Section 252(3) - the 20-year window comfortably covers post-discovery situations where founders learn of the strike-off years later.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Section 252(3) of the Companies Act?</h3>
                        <div class="faq-expanded__a"><p>The sub-section that lets a company, any member, any creditor, or any workman apply to the NCLT for restoration of a struck-off company within 20 years of the Section 248(5) Gazette notice. Statutory grounds: (a) company was carrying on business or in operation at the time of strike-off; OR (b) it is otherwise just that the name of the company be restored to the Register. This is the most commonly used restoration route - 90% of Patron NCLT engagements proceed under Section 252(3).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can apply to NCLT for restoration?</h3>
                        <div class="faq-expanded__a"><p>Under Section 252(1), any person aggrieved by the RoC order may appeal within 3 years from the RoC strike-off order date. Under Section 252(3), the company itself, any member, any creditor, or any workman may apply within 20 years of the Section 248(5) Gazette notice. Under Section 252(2), the Registrar of Companies may apply when strike-off was based on incorrect or inadvertent information. The Section 252(3) class is deliberately broad - even creditors with unpaid invoices and workmen with unpaid dues can file.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Form NCLT-9 and how is it filed?</h3>
                        <div class="faq-expanded__a"><p>Form NCLT-9 is the petition format prescribed under Rule 87A of the NCLT (Amendment) Rules 2017 (notified 5 July 2017) for Section 252 applications. It is e-filed on the NCLT portal at the bench having jurisdiction over the registered office, accompanied by a Rs 1,000 demand draft to the Pay and Accounts Officer (PAO), Ministry of Corporate Affairs, and served on the RoC and Regional Director NOT LESS than 14 days before the first hearing. The petition includes statement of facts, grounds for restoration, and prayer for consequential reliefs (asset recovery, DIN reactivation).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What documents are required for NCLT restoration?</h3>
                        <div class="faq-expanded__a"><p>Master data print from MCA portal showing strike-off status; Certificate of Incorporation, MOA and AOA; audited financials for every defaulted financial year (proof of operations); ITR acknowledgements covering strike-off period; GST registration + GSTR-1 / GSTR-3B filings (GST portal records persist 7+ years); bank statements showing transactions at and around strike-off date; vendor invoices, employee PF and ESI returns as evidence of business; board resolution authorising petition; affidavit by authorised representative; vakalatnama or memorandum of appearance; Power of Attorney on Rs 50 stamp paper; Rs 1,000 demand draft to PAO MCA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens to company assets after strike-off?</h3>
                        <div class="faq-expanded__a"><p>Under Section 250 of the Companies Act 2013, all assets of a struck-off company vest in the Central Government on strike-off. Bank balances are frozen, fixed deposits are locked, immovable property and intellectual property rights are blocked, and other assets become unreachable. The company's liabilities continue but assets cannot be accessed. Restoration under Section 252 is the ONLY legal route to recover these assets - they return to the company on restoration order + Form INC-28 filing. Patron has recovered FDs worth Rs 28+ lakh within 30 days of INC-28 filing in recent engagements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can directors disqualified under Section 164(2) restore the company?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 164(2) disqualifies directors of a company in 3 consecutive years of AOC-4 / MGT-7 default for 5 years across ALL company directorships, with DIN deactivation - so the disqualified directors cannot sign the restoration petition directly. However, Section 252(3) deliberately permits application by the company through any member, creditor, workman, or authorised representative - allowing Patron to draft the petition through the company secretary or authorised representative. Once the NCLT restoration order is passed and all pending AOC-4 / MGT-7 are filed within the tribunal-directed window, the disqualified directors file Form DIR-10 under Rule 14 of Companies (Appointment and Qualification of Directors) Rules 2014 for DIN reactivation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the cost of NCLT restoration?</h3>
                        <div class="faq-expanded__a"><p>Patron professional fees range from Rs 75,000 (Simple - recent strike-off within 5 years, clean evidence) to Rs 1,00,000 (Standard - 5-10 years old, moderate backlog) to Rs 1,50,000 (Complex - 10+ years old, multi-year backlog, asset recovery under Section 250, multi-director DIN reactivation). Additional costs include: Rs 1,000 demand draft to PAO MCA; NCLT-mandated conditional penalty (commonly Rs 20,000 per defaulted financial year); ROC restoration fees; backlog AOC-4 / MGT-7 ROC late fees (CCFS-2026 90% waiver may apply for restorations completing inside 15 April-15 July 2026 window). Patron quotes the exact tier in writing after a feasibility scoping call within 48 hours.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>Window under Section 252(3)?</strong> 20 years from Gazette notice under Section 248(5). Company, any member, creditor, or workman can apply.</p>
                <p><strong>Window under Section 252(1)?</strong> 3 years from RoC strike-off order. Aggrieved-person appeals only.</p>
                <p><strong>Which sub-section applies to most founders?</strong> Section 252(3) - 90% of Patron engagements proceed under this 20-year window.</p>
                <p><strong>Application form?</strong> Form NCLT-9 under Rule 87A of NCLT (Amendment) Rules 2017 with Rs 1,000 demand draft to Pay and Accounts Officer, MCA.</p>
                <p><strong>Bench jurisdiction?</strong> NCLT bench having jurisdiction over the registered office. Service on RoC and Regional Director 14 days before first hearing.</p>
                <p><strong>Post-order form to ROC?</strong> Form INC-28 within 30 days of NCLT order. Status changes from Struck Off to Active.</p>
                <p><strong>Asset vesting position?</strong> Section 250 vests all assets in Central Government on strike-off - bank balances, FDs, immovable property, IP all frozen. Restoration is the ONLY legal route to recover.</p>
                <p><strong>Typical NCLT conditional penalty?</strong> Commonly Rs 20,000 per defaulted financial year (exact figure in tribunal order). Plus filing of pending AOC-4 / MGT-7.</p>
                <p><strong>DIN reactivation after Section 164(2) disqualification?</strong> Form DIR-10 under Rule 14 of Companies (Appointment and Qualification of Directors) Rules 2014 - filed post backlog clearance.</p>
                <p><strong>End-to-end timeline?</strong> 4 to 12 months. Petition drafting 14-21 days; first hearing 6-10 weeks from filing; final order 2-6 months; post-order compliance 1-3 months.</p>
                <p><strong>Patron fee tiers?</strong> Simple Rs 75,000 | Standard Rs 1,00,000 | Complex Rs 1,50,000. NCLT and ROC fees at actuals. CCFS-2026 amnesty available for backlog cleanup through 15 July 2026.</p>
                <p><strong>Struck-off company kaise revive kare?</strong> <em>Companies Act ke Section 252(3) ke under NCLT mein petition file karna padta hai - Form NCLT-9 mein Rule 87A NCLT (Amendment) Rules 2017 ke procedure ke hisab se. 20 saal ka window hai Gazette notice ki date se (NCLT Sec 252(3)) - 3 saal wala window sirf RoC order ke khilaf appeal ke liye hai (Sec 252(1)). Patron 48 ghante mein feasibility opinion deti hai - Simple Rs 75,000, Standard Rs 1 lakh, Complex Rs 1.5 lakh. NCLT order ke baad 30 din ke andar Form INC-28 file karte hain MCA portal pe.</em></p>
                <p><strong>Company restore karne ki procedure?</strong> <em>Pehle Section 248(5) Gazette notice ki date check karein - 20 saal window calculate karne ke liye. Phir Form NCLT-9 petition draft hota hai with Statement of Facts aur evidence of business at strike-off date. Rs 1,000 ka demand draft PAO MCA ke naam ka. RoC aur Regional Director ko 14 din pehle copy bhejni padti hai. NCLT 3-9 mahine mein order deta hai - conditional usually Rs 20,000 per defaulted year ke saath. Order ke 30 din ke andar Form INC-28 file karna padta hai. Section 164(2) wale director DIR-10 file karte hain DIN reactivate karne ke liye.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why NCLT Restoration Should Not Wait</h2>
            <div class="content-text">
                
                
                <p>The Section 252(3) <strong>20-year window is generous</strong>, but four factors create real urgency:</p>
                <ul>
                    <li><strong>Evidence decay:</strong> Every year that passes makes evidence of business at strike-off date harder to reconstruct - bank statements are purged (RBI 7-10 year retention), GST records age out (7+ years on portal), vendors disappear, employee records become unreachable.</li>
                    <li><strong>NCLT bench backlog:</strong> Bench backlogs add 2-6 months to every petition timeline. Starting earlier means restoration completes earlier and the company can resume operations sooner.</li>
                    <li><strong>Asset deterioration:</strong> Section 250-frozen assets continue to decay - bank FDs stop earning interest from the date Central Government takes vesting, immovable property may face encroachment, IP rights may lapse for non-renewal.</li>
                    <li><strong>CCFS-2026 amnesty window closes 15 July 2026:</strong> Companies restored before then can clear pending AOC-4 and MGT-7 at 90% additional-fee waiver under General Circular 01/2026 dated 24 February 2026; after 15 July 2026 the full Rs 100/day late fee resumes. The difference can be Rs 50,000-Rs 2,00,000 per defaulted year saved.</li>
                </ul>

                <p style="margin-top:16px;"><strong>Real recovery examples:</strong> Patron has restored 15-year-old strike-offs, recovered FDs worth Rs 28+ lakh, revived M&amp;A target subsidiaries within SPA timelines, and reactivated DINs for 4-director disqualification cases - all within the Section 252(3) framework.</p>

                <p style="margin-top:16px;"><strong>Get a Written Feasibility Opinion in 48 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20restore%20a%20struck-off%20company%20via%20NCLT%20-%20please%20issue%20feasibility%20opinion." target="_blank">WhatsApp us</a>. We map your CIN to the correct sub-section (252(1) vs 252(3)), calculate the window from Section 248(5) Gazette notice, audit available evidence, and issue a written restoration opinion within 48 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: The Highest-Leverage Corporate Remedy in Indian Company Law</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Section 252(3) restoration is the highest-leverage corporate remedy in Indian company law - it can recover assets worth crores frozen under Section 250 vesting in Central Government, lift Section 164(2) director disqualifications across multiple companies, and revive legal personality for litigation, M&amp;A transactions, or simple resumption of business operations. The 20-year window under Section 252(3) is far longer than most founders realise.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Petition filed in Form NCLT-9 under Rule 87A of NCLT (Amendment) Rules 2017 (notified 5 July 2017) at the NCLT bench having jurisdiction over the registered office, with Rs 1,000 demand draft to Pay and Accounts Officer (PAO), MCA. Service on RoC and Regional Director 14 days before hearing. Tribunal orders typically conditional - payment of fine (commonly Rs 20,000 per defaulted financial year) plus filing of pending AOC-4 / MGT-7 inside tribunal-directed window. Post-order Form INC-28 filed on MCA21 V3 within 30 days - status changes from Struck Off to Active. Form DIR-10 under Rule 14 reactivates DINs for directors disqualified under Section 164(2).</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Patron Accounting brings 15+ years of NCLT practice including asset-recovery restorations, director-disqualification linkage cases, and contested RoC objections. Every petition is partner-reviewed; hearings are attended by a CA, CS, or empanelled advocate. Tiered fixed-fee pricing: Rs 75,000 Simple (recent strike-off, clean evidence) | Rs 1,00,000 Standard (5-10 years old) | Rs 1,50,000 Complex (asset recovery, multi-director DIN reactivation). CCFS-2026 amnesty (General Circular 01/2026 dated 24 February 2026, window 15 April-15 July 2026) leveraged for post-restoration backlog cleanup at 90% additional-fee waiver. Written feasibility opinion in 48 hours.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20NCLT%20restoration%20service%20from%20Rs%2075%2C000." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NCLT Restoration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. NCLT restoration services delivered pan-India through partner-CA, partner-CS, and empanelled advocate network covering NCLT benches in Mumbai, Pune, Delhi, Chennai, Kolkata, Bangalore, Hyderabad, Ahmedabad, and other principal benches. 90% of engagements proceed under Section 252(3) 20-year window - covering recent strike-offs, asset-recovery cases, M&amp;A subsidiary revivals, and Section 164(2) DIN reactivation.</p>
           
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise NCLT Restoration Services</div>
                <div class="pa-block-sub">Local partner-CA + empanelled advocate at bench jurisdiction</div>
                <div class="pa-city-grid">
                    <a href="/restore-struck-off-company-mca/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">NCLT Restoration Pune</div><div class="pa-card-sub">Maharashtra Bench</div></div>
                    </a>
                    <a href="/restore-struck-off-company-mca/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">NCLT Restoration Mumbai</div><div class="pa-card-sub">Mumbai Bench</div></div>
                    </a>
                    <a href="/restore-struck-off-company-mca/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">NCLT Restoration Delhi</div><div class="pa-card-sub">Principal Bench</div></div>
                    </a>
                    <a href="/restore-struck-off-company-mca/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">NCLT Restoration Gurugram</div><div class="pa-card-sub">Delhi Bench Jurisdiction</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Before, during, and after NCLT restoration</div>
                <div class="pa-cross-grid">
                    <a href="/company-closure" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Voluntary Closure (STK-2)</div><div class="pa-card-sub">Parallel Exit Path</div></div>
                    </a>
                    <a href="/llp-strike-off-form-24" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">LLP Strike-Off Form 24</div><div class="pa-card-sub">LLP Equivalent</div></div>
                    </a>
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">Post-Restoration Retainer</div></div>
                    </a>
                    <a href="/backlog-filings-3-year-cleanup" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Backlog Cleanup CCFS-2026</div><div class="pa-card-sub">Post-Restoration Backlog</div></div>
                    </a>
                    <a href="/director-kyc" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">DIR-3 KYC + DIN</div><div class="pa-card-sub">DIR-10 Reactivation</div></div>
                    </a>
                    <a href="/roc-notice" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">RoC Objections</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026 (after CCFS-2026 amnesty window closure on 15 July 2026 and FY 2026-27 annual compliance cycle). Review triggers include MCA amendment to Section 248 (strike-off grounds), Section 250 (asset vesting framework), Section 252 (NCLT restoration provisions including 252(1) 3-year window, 252(2) Registrar application, and 252(3) 20-year window), NCLT (Amendment) Rules beyond the 2017 amendment (Rule 87A Form NCLT-9 prescription notified 5 July 2017), Companies (Appointment and Qualification of Directors) Rules 2014 Rule 14 (DIR-10 DIN reactivation framework), Section 164(2) director disqualification framework revisions, CCFS-2026 successor amnesty schemes beyond General Circular 01/2026 dated 24 February 2026 (15 April-15 July 2026 window), and any amendment to NCLT bench jurisdiction or e-filing procedures.</p>
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
