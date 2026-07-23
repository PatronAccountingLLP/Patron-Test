@extends('layouts.service-app')

@push('styles')
<!-- External Dependencies -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endpush

@section('meta')
    <title>Virtual CFO Services for Startups and SMEs in India</title>
    <meta name="description" content="Patron Accounting offers Virtual CFO services for Indian startups and SMEs - MIS, cash flow, fundraising and compliance. From Rs 35,000 per month.">
    <link rel="canonical" href="https://www.patronaccounting.com/virtual-cfo-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Virtual CFO in 2026: Startups and SMEs | Patron Accounting">
    <meta property="og:description" content="Patron Accounting offers Virtual CFO services for Indian startups and SMEs - MIS, cash flow, fundraising and compliance. From Rs 35,000 per month.">
    <meta property="og:url" content="https://www.patronaccounting.com/virtual-cfo-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta property="og:image" content="https://www.patronaccounting.com/images/virtual-cfo-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Virtual CFO in 2026: Startups and SMEs | Patron Accounting">
    <meta name="twitter:description" content="Patron Accounting offers Virtual CFO services for Indian startups and SMEs - MIS, cash flow, fundraising and compliance. From Rs 35,000 per month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/virtual-cfo-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/virtual-cfo-services#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://www.patronaccounting.com"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Virtual CFO",
                        "item": "https://www.patronaccounting.com/virtual-cfo-services"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/virtual-cfo-services#faq",
                "datePublished": "2026-05-05T08:00:00+05:30",
                "dateModified": "2026-05-05T08:00:00+05:30",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What is a Virtual CFO?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "A Virtual CFO is an outsourced senior finance professional - typically a Chartered Accountant - who delivers Chief Financial Officer outcomes on a part-time retainer. The role covers MIS reporting, cash flow forecasting, budgeting, fundraising support, and compliance oversight without occupying a full-time position on the payroll. It is most useful for startups and SMEs that sit below the Section 203 mandatory CFO threshold of Rs 10 crore paid-up capital."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How is a Virtual CFO different from an accountant?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "An accountant records what already happened - invoices, bank entries, GST and TDS returns. A Virtual CFO interprets the numbers and looks forward, building forecasts, advising on capital allocation and joining founder and investor conversations. Patron Accounting bundles both: an accounting team handles the books while the Virtual CFO partner owns reporting, strategy and compliance review."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How much does a Virtual CFO cost in India?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Indian Virtual CFO retainers range from Rs 20,000 to Rs 3,00,000 per month, against a full-time CFO cost of Rs 25 to Rs 50 lakh per year including benefits. Patron Accounting starts at Rs 35,000 per month for bootstrapped startups, Rs 75,000 for funded startups with full MIS and compliance, and Rs 1,50,000 per month for Series A / B and multi-entity groups. All retainers are fixed-fee with no hourly billing."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Virtual CFO kya hota hai aur kab lena chahiye?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Virtual CFO ek senior CA hai jo aapki finance team ka head ban jata hai - lekin part-time, retainer par. Jab business 2 crore se 100 crore tak revenue par hai, fundraising ki taiyari ho rahi hai, ya GST / TDS / ROC compliance founder ke liye unmanageable ho raha hai, tab vCFO best fit hai. Full-time CFO Rs 25 lakh+ per year hota hai - vCFO us se 80% kaam 10-20% cost me karta hai."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "When should I hire a Virtual CFO?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Engage a Virtual CFO when one of these triggers fires: revenue crosses Rs 2 crore, the founder cannot read the P&L confidently, fundraising due diligence is being prepared, the books are more than 60 days behind, the tax audit threshold under Section 44AB is breached, or a foreign group is setting up an Indian subsidiary. Any single trigger is enough; multiple together make the case obvious."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Will a Virtual CFO interact with auditors, bankers and the Income Tax Department?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. Patron Accounting's Virtual CFO partner is the management's representative in audit walkthroughs, banker meetings, and Income Tax notices. We coordinate with statutory auditors on management representations, walk the bank credit committee through projections, and draft replies to scrutiny notices under Sections 142(1) and 143(3). Where required, we attend hearings on behalf of the company."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Is a CFO mandatory for a private limited company in India?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No - a whole-time CFO is mandatory only for listed companies and public companies with paid-up share capital of Rs 10 crore or more, under Section 203 of the Companies Act 2013 read with Rule 8. Private companies, irrespective of size, are not required to appoint a CFO. However, Rule 8A separately requires a whole-time Company Secretary for any private company with paid-up capital of Rs 10 crore or more. Voluntary CFO designations still trigger DIR-12 filing obligations."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can a Virtual CFO help with fundraising?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. The fundraising scope typically covers: a three-statement financial model with 24-month projections, valuation working using DCF and comparable transactions, a virtual data room with management accounts and statutory filings, investor deck financial slides, term sheet review on commercial economics, and quarterly investor update letters post-close. Patron Accounting has supported seed to Series B rounds across SaaS, manufacturing and consumer brands."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What is the difference between a Virtual CFO, Fractional CFO, and Interim CFO?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Virtual CFO and Fractional CFO are usually interchangeable - both denote part-time retainer arrangements; Fractional often implies a fixed allocation (for example, 8 days a month). An Interim CFO is full-time but temporary, used during leadership transitions, fundraising sprints or pre-IPO preparation, typically 3 to 9 months. All three sit outside Section 203 unless the company crosses the listed / public + Rs 10 crore paid-up capital threshold."
                        }
                    }
                ]
            },
            {
                "@type": "Service",
                "@id": "https://www.patronaccounting.com/virtual-cfo-services#service",
                "name": "Virtual CFO Services",
                "description": "Outsourced Virtual CFO retainer for Indian startups, SMEs and growth-stage businesses - covering monthly MIS, 13-week cash flow forecasting, budgeting, fundraising support, board reporting, and compliance oversight across GST, TDS, ROC and Income Tax. Delivered by a CA-led team for companies operating below the Section 203 Companies Act 2013 mandatory CFO threshold.",
                "serviceType": "Virtual CFO and Outsourced Finance Leadership",
                "provider": {
                    "@id": "https://www.patronaccounting.com/#organization"
                },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "Chief financial officer",
                        "sameAs": "https://en.wikipedia.org/wiki/Chief_financial_officer"
                    },
                    {
                        "@type": "Thing",
                        "name": "Outsourcing",
                        "sameAs": "https://en.wikipedia.org/wiki/Outsourcing"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Virtual CFO Retainer Tiers",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "Starter Virtual CFO retainer",
                            "priceCurrency": "INR",
                            "price": "35000",
                            "description": "Bootstrapped startups, revenue up to Rs 5 crore - basic MIS"
                        },
                        {
                            "@type": "Offer",
                            "name": "Growth Virtual CFO retainer",
                            "priceCurrency": "INR",
                            "price": "75000",
                            "description": "Funded startups, revenue Rs 5 to Rs 25 crore - full MIS, cash flow, compliance oversight"
                        },
                        {
                            "@type": "Offer",
                            "name": "Scale Virtual CFO retainer",
                            "priceCurrency": "INR",
                            "price": "150000",
                            "description": "Series A/B startups, SMEs, multi-entity groups - board pack, investor relations"
                        }
                    ]
                }
            }
        ]
    }
    </script>
@endsection

@push('styles')
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
            position: relative; padding-left: 34px;
            color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px;
        }
        section ul li:not(.nav-item)::before {
            content: ""; position: absolute; left: 0; top: 2px;
            width: 22px; height: 22px;
            background: var(--orange-light); border-radius: 50%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }
        /* Defensive: any block-level children inside <li> flow naturally without column breaks */
        section ul li:not(.nav-item) > p,
        section ul li:not(.nav-item) > div { margin: 0; display: inline; }
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

</style>
@endpush

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
            <li><span style="color:var(--orange);font-weight:600;">Virtual CFO</span></li>
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
                        Virtual CFO Services for Indian Startups and SMEs
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">5 May 2026</span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deliverables:</span> monthly MIS dashboard, 13-week rolling cash flow, board pack, investor updates and statutory compliance tracker.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> fixed retainer from Rs 35,000 per month - one-tenth the cost of a full-time CFO at Rs 25 lakh per year.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> any Indian company, LLP, partnership or proprietorship - especially businesses below the Section 203 mandatory CFO threshold of Rs 10 crore paid-up capital.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Onboarding:</span> 10 to 14 days from kickoff to first MIS pack delivered, including legacy clean-up and KPI baseline.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years in Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%27d%20like%20to%20learn%20more%20about%20Virtual%20CFO%20services%20for%20my%20business." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Virtual CFO'/>
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
                                <option value="Virtual CFO" selected>Virtual CFO</option>
                                <option value="Accounting Services">Accounting Services</option>
                                <option value="Payroll Services">Payroll Services</option>
                                <option value="Tax Audit">Tax Audit</option>
                                <option value="Tax Planning Services">Tax Planning Services</option>
                                <option value="Compliance Calendar">Compliance Calendar</option>
                                <option value="ESOP Management and Compliance">ESOP Management and Compliance</option>
                                <option value="Internal Audit">Internal Audit</option>
                                <option value="Startup Registration">Startup Registration</option>
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;display:flex;align-items:center;gap:8px;">
                    <img src="https://www.patronaccounting.com/images/google.png" alt="Google review" width="16" height="16" style="flex-shrink:0;" onerror="this.outerHTML='G'">
                    <span style="font-size:11px;color:var(--text-muted);">2 months ago</span>
                </div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;display:flex;align-items:center;gap:8px;">
                    <img src="https://www.patronaccounting.com/images/google.png" alt="Google review" width="16" height="16" style="flex-shrink:0;" onerror="this.outerHTML='G'">
                    <span style="font-size:11px;color:var(--text-muted);">3 months ago</span>
                </div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;display:flex;align-items:center;gap:8px;">
                    <img src="https://www.patronaccounting.com/images/google.png" alt="Google review" width="16" height="16" style="flex-shrink:0;" onerror="this.outerHTML='G'">
                    <span style="font-size:11px;color:var(--text-muted);">1 month ago</span>
                </div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7c3aed;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil Nimbhorkar</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;display:flex;align-items:center;gap:8px;">
                    <img src="https://www.patronaccounting.com/images/google.png" alt="Google review" width="16" height="16" style="flex-shrink:0;" onerror="this.outerHTML='G'">
                    <span style="font-size:11px;color:var(--text-muted);">4 months ago</span>
                </div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#0ea5e9;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anita Gaur</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;display:flex;align-items:center;gap:8px;">
                    <img src="https://www.patronaccounting.com/images/google.png" alt="Google review" width="16" height="16" style="flex-shrink:0;" onerror="this.outerHTML='G'">
                    <span style="font-size:11px;color:var(--text-muted);">5 months ago</span>
                </div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Preeti Singh Rathor</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;display:flex;align-items:center;gap:8px;">
                    <img src="https://www.patronaccounting.com/images/google.png" alt="Google review" width="16" height="16" style="flex-shrink:0;" onerror="this.outerHTML='G'">
                    <span style="font-size:11px;color:var(--text-muted);">3 months ago</span>
                </div>
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
                    <p>From founders running Series A startups to family-business promoters scaling beyond Rs 100 crore - see how a fractional CFO transforms decision-making.</p>
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
            <a href="#who-section" class="toc-btn">Who Should Engage</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Onboarding Process</a>
            <a href="#documents-section" class="toc-btn">What We Need</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">CFO vs vCFO vs Accountant</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Virtual CFO Services - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Virtual CFO Services at a Glance</strong></p>
                    <p>A Virtual CFO is an outsourced senior finance professional who runs your finance function on a fractional retainer. Indian retainers range from Rs 20,000 to Rs 3,00,000 per month, against Rs 25 to Rs 50 lakh per year for a full-time CFO. Patron Accounting starts at Rs 35,000 per month.</p>
                </div>
                <p>Patron Accounting LLP delivers Virtual CFO services to founders who need senior finance leadership but cannot justify a Rs 25 lakh+ annual full-time hire. Our CA and CS team builds investor-ready MIS, runs the monthly close, projects cash flow 13 weeks out and represents the company before bankers, auditors, and the Income Tax Department.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, we serve clients in person and remotely. Below is a quick reference of the regulatory context, applicability, engagement models and pricing benchmarks that founders ask about most often.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing context</td><td>Companies Act 2013, Section 203 + Rule 8 - mandatory whole-time CFO only for listed companies and public companies with paid-up capital of Rs 10 crore or more</td></tr>
                        <tr><td>Applicable to</td><td>Startups, SMEs, family businesses, foreign companies entering India, and any growth-stage business needing CFO-level oversight without a full-time hire</td></tr>
                        <tr><td>Engagement models</td><td>Monthly retainer, project-based, interim coverage, or hourly on-demand</td></tr>
                        <tr><td>Cost</td><td>Patron Accounting fees start at Rs 35,000 per month; full-time CFO benchmark Rs 25 to Rs 50 lakh per year</td></tr>
                        <tr><td>Onboarding time</td><td>10 to 14 days to first MIS pack</td></tr>
                        <tr><td>Tools used</td><td>Tally, Zoho Books, QuickBooks, Xero, Power BI, Google Sheets, custom dashboards</td></tr>
                        <tr><td>Authority for KMP rules</td><td>Ministry of Corporate Affairs (MCA) at <a href="https://www.mca.gov.in" target="_blank" rel="nofollow noopener">mca.gov.in</a></td></tr>
                    </tbody>
                </table>
                </div>
                <p style='margin-top:8px;font-size:13px;color:var(--text-muted);font-style:italic;'>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
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
                <h2 class="section-title">What Is a Virtual CFO?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Virtual CFO (vCFO) is an outsourced senior Chartered Accountant who delivers Chief Financial Officer outcomes - MIS, cash flow, budgeting, fundraising support, and compliance oversight - on a fractional retainer instead of a full-time payroll hire.</p>
                    <p>Unlike an accountant who records past transactions, a Virtual CFO interprets the numbers, builds forward-looking forecasts and partners with the founder on capital allocation. The role exists in the regulatory whitespace below <a href="https://www.indiacode.nic.in/show-data?actid=AC_CEN_22_29_00008_201318_1517807327856&amp;sectionId=49129" target="_blank" rel="nofollow noopener">Section 203 of the Companies Act 2013</a>, which mandates a whole-time CFO only for listed companies and public companies with paid-up capital of Rs 10 crore or more. Most Indian startups and SMEs sit below that threshold and choose a vCFO retainer instead.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Virtual CFO:</strong></p>
                    <ul style="margin-top:12px;">
                        <li><strong>Virtual CFO (vCFO):</strong> An outsourced finance leader engaged on a part-time or retainer basis, working remotely or onsite as needed.</li>
                        <li><strong>Fractional CFO:</strong> Same scope as a vCFO but typically allocates a fixed percentage of week or month (for example, 8 days a month) to one client.</li>
                        <li><strong>Interim CFO:</strong> Full-time temporary appointment used during leadership transitions, fundraising sprints or pre-IPO clean-up - usually 3 to 9 months.</li>
                        <li><strong>Outsourced CFO:</strong> Umbrella term covering vCFO, fractional and interim arrangements where the CFO function sits outside the employee payroll.</li>
                        <li><strong>Key Managerial Personnel (KMP):</strong> Defined under Section 2(51) of the Companies Act 2013 - includes CEO/MD, Company Secretary, CFO, and any officer designated by the Board.</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Virtual CFO</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Outsourced Finance Function</span>
                        <strong>vCFO Retainer</strong>
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
            <h2 class="section-title">Who Should Engage a Virtual CFO?</h2>
            <div class="content-text">
                
                <p>Engage a Virtual CFO when revenue or complexity outpaces the founder's bandwidth but a Rs 2 lakh+ per month full-time CFO is premature. Section 203 of the Companies Act 2013 only mandates a whole-time CFO for listed companies and public companies with paid-up capital of Rs 10 crore or more - everyone else operates by choice.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Trigger</th><th>Why a Virtual CFO Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Revenue between Rs 2 crore and Rs 100 crore</td><td>Too large for the founder to track, too small for a full-time CFO at Rs 25 lakh+ per year</td></tr>
                        <tr><td>Preparing for fundraising (seed to Series B)</td><td>Investor-grade MIS, cap table hygiene, financial model and data-room readiness</td></tr>
                        <tr><td>Crossing the tax audit threshold (Section 44AB)</td><td>CFO-level oversight on books, TDS, GST and ITR-6 filings</td></tr>
                        <tr><td>Section 203 + Rule 8 threshold not yet met</td><td>Most private companies under Rs 10 crore paid-up capital - statutory CFO not required, but governance gap exists</td></tr>
                        <tr><td>Foreign group entering India</td><td>FDI compliance, FEMA filings, transfer pricing, payroll setup and inter-company billing</td></tr>
                        <tr><td>Family business succession or professionalisation</td><td>Independent finance leadership separate from promoter family</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;"><strong>Statutory note:</strong> Rule 8A of the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014 separately requires every private company with paid-up capital of Rs 10 crore or more to appoint a whole-time Company Secretary - that obligation is not satisfied by a Virtual CFO.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Virtual CFO Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>MIS and Board Reporting</td><td>Monthly P&amp;L, balance sheet, segment-wise margin analysis, KPI dashboards and a 5-page board pack delivered by the 10th of every month.</td></tr>
                        <tr><td>Cash Flow and Working Capital</td><td>13-week rolling cash forecast, AR/AP ageing review, vendor terms negotiation and bank limit utilisation tracking to extend runway.</td></tr>
                        <tr><td>Budgeting, Forecasting and Variance</td><td>Annual operating plan, scenario-based forecasts, monthly actuals-versus-budget variance and corrective action plans for the founder.</td></tr>
                        <tr><td>Fundraising and Investor Relations</td><td>Financial model, valuation working, data room build, investor deck review, term sheet review and quarterly investor update letters.</td></tr>
                        <tr><td>Compliance Oversight</td><td>Statutory calendar covering GST, TDS, ITR, ROC, EPF and ESI filings, with sign-off review before every filing date.</td></tr>
                        <tr><td>ERP and Process Setup</td><td>Tally, Zoho Books, QuickBooks or Xero implementation, chart of accounts design, SOPs for AP/AR and month-end close discipline.</td></tr>
                        <tr><td>Deliverables Per Engagement</td><td>Monthly MIS pack, 13-week cash flow forecast, annual budget, quarterly re-forecast, investor update template, financial model, compliance calendar, founder dashboard and (where applicable) a 5-page board pack distributed 48 hours before each meeting.</td></tr>

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
            <h2 class="section-title">Our Onboarding Process - From Kickoff to First MIS Pack</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured 10-to-14-day onboarding sequence that takes you from discovery call to a live MIS pack, with legacy clean-up and KPI baseline built in.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Discovery Call</h3>
                    <p class="step-description">A 30-minute scoping call to map your current finance maturity, pain points, fundraising stage, ERP and team structure - so the proposal we send back is tailored, not boilerplate.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Free 30-minute call</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pain-point map</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="50" r="22" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.8"/>
                                <path d="M30 50a10 10 0 0120 0" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="35" cy="48" r="2" fill="#14365F"/>
                                <circle cx="45" cy="48" r="2" fill="#14365F"/>
                                <rect x="70" y="30" width="40" height="40" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="78" y1="42" x2="102" y2="42" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="78" y1="50" x2="98" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <line x1="78" y1="58" x2="100" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <path d="M58 60Q63 65 68 60" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Day 1 - Scoping</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Diagnostic and Proposal</h3>
                    <p class="step-description">Light-touch review of last 3 months books, GST and TDS filings. We send a fixed-fee retainer proposal with clear scope, deliverables and SLAs - no hourly billing surprises later.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 3-month book review</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fixed-fee proposal</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="48" cy="48" r="20" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.8"/>
                                <line x1="64" y1="64" x2="82" y2="82" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                <line x1="38" y1="48" x2="58" y2="48" stroke="#14365F" stroke-width="1.8" stroke-linecap="round"/>
                                <line x1="38" y1="42" x2="55" y2="42" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                <line x1="38" y1="54" x2="56" y2="54" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                <rect x="80" y="20" width="32" height="22" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                                <text x="96" y="34" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FIXED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Days 2-3</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Engagement Letter and KYC</h3>
                    <p class="step-description">Signed engagement letter, payment terms, NDA, ICAI UDIN process explained, partner and team allocated. You know who is on your account from day one.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NDA + UDIN</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Senior partner named</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="62" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="30" x2="72" y2="30" stroke="#F5A623" stroke-width="2.5"/>
                                <line x1="30" y1="42" x2="68" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="30" y1="50" x2="65" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="30" y1="58" x2="60" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <path d="M35 72L42 78L55 65" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                <circle cx="92" cy="38" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                                <path d="M86 38l4 4 8-8" stroke="#10B981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Day 4 - Signed</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Data Room Handover</h3>
                    <p class="step-description">Read-only access to Tally / Zoho Books / Xero, bank statements, invoices, statutory dashboards and HR records. No clean-up of your live data without sign-off.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Read-only access</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All books connected</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="14" y="22" width="40" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="60" y="22" width="40" height="56" rx="4" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/>
                                <line x1="22" y1="36" x2="46" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.6"/>
                                <line x1="22" y1="46" x2="42" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="22" y1="56" x2="44" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="22" y1="66" x2="40" y2="66" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="68" y1="36" x2="92" y2="36" stroke="#E8712C" stroke-width="1.5" opacity="0.6"/>
                                <line x1="68" y1="46" x2="88" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="68" y1="56" x2="90" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <path d="M48 50L62 50" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" marker-end="url(#arr)"/>
                                <defs><marker id="arr" markerWidth="6" markerHeight="6" refX="5" refY="3" orient="auto"><polygon points="0 0, 6 3, 0 6" fill="#E8712C"/></marker></defs>
                            </svg>
                        </div>
                        <span class="illustration-label">Days 5-7</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Legacy Clean-up</h3>
                    <p class="step-description">Reconcile bank, GST 2B, TDS 26AS and ledger. We flag and propose treatment for backlog items - so there are no surprises in MIS month one.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank + GST 2B reco</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS 26AS match</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M30 70L40 50L52 60L65 38L75 48L88 32" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="40" cy="50" r="2.5" fill="#E8712C"/>
                                <circle cx="52" cy="60" r="2.5" fill="#E8712C"/>
                                <circle cx="65" cy="38" r="2.5" fill="#E8712C"/>
                                <circle cx="75" cy="48" r="2.5" fill="#E8712C"/>
                                <circle cx="88" cy="32" r="2.5" fill="#10B981" stroke="#fff" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Days 8-10</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Chart of Accounts and KPI Design</h3>
                    <p class="step-description">Customise COA to investor and management views. Lock the KPI list - MRR, CAC, gross margin, runway for SaaS; gross margin and working-capital cycle for trading - so the very first MIS speaks your business language.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Investor-grade COA</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> KPI list locked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="18" y="20" width="84" height="62" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="26" y="58" width="14" height="20" rx="2" fill="#E8712C" opacity="0.85"/>
                                <rect x="46" y="48" width="14" height="30" rx="2" fill="#14365F" opacity="0.85"/>
                                <rect x="66" y="38" width="14" height="40" rx="2" fill="#10B981" opacity="0.85"/>
                                <rect x="86" y="30" width="14" height="48" rx="2" fill="#F5A623" opacity="0.85"/>
                                <line x1="22" y1="78" x2="104" y2="78" stroke="#14365F" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Days 11-12</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">First MIS Pack</h3>
                    <p class="step-description">Live walkthrough with the founder. Baseline cash forecast and budget framework agreed. The first MIS pack hits your inbox by Day 14.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Founder walkthrough</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 13-week forecast live</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="18" y="14" width="84" height="62" rx="6" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/>
                                <rect x="26" y="22" width="34" height="18" rx="3" fill="#fff" stroke="#E8712C" stroke-width="1"/>
                                <rect x="62" y="22" width="34" height="18" rx="3" fill="#fff" stroke="#E8712C" stroke-width="1"/>
                                <text x="43" y="34" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">P&amp;L</text>
                                <text x="79" y="34" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CASH</text>
                                <line x1="26" y1="50" x2="96" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="26" y1="58" x2="90" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <line x1="26" y1="66" x2="84" y2="66" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                <circle cx="100" cy="84" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                                <path d="M93 84l4 4 8-8" stroke="#10B981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Days 13-14</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Steady-State Cadence</h3>
                    <p class="step-description">Weekly cash review, monthly MIS by the 10th, quarterly budget vs actuals deep dive, and a quarterly investor update letter. The monthly close becomes a discipline, not a fire-drill.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MIS by the 10th</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Quarterly investor letter</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="32" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="50" r="3" fill="#E8712C"/>
                                <line x1="60" y1="50" x2="60" y2="28" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="60" y1="50" x2="76" y2="50" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/>
                                <line x1="60" y1="22" x2="60" y2="26" stroke="#14365F" stroke-width="2"/>
                                <line x1="60" y1="74" x2="60" y2="78" stroke="#14365F" stroke-width="2"/>
                                <line x1="32" y1="50" x2="36" y2="50" stroke="#14365F" stroke-width="2"/>
                                <line x1="84" y1="50" x2="88" y2="50" stroke="#14365F" stroke-width="2"/>
                                <text x="60" y="92" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">10TH OF MONTH</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Steady State</span>
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
            <h2 class="section-title">What We Need from You</h2>
            <div class="content-text">
                
                <p>To start your Virtual CFO engagement, share the following with our team. We work with read-only access wherever possible - no system changes happen without your sign-off.</p>
                <ul style="margin-top:16px;">
                    <li>Last 24 months audited financials (or provisional financials, where audits are pending)</li>
                    <li>Tally / Zoho Books / Xero / QuickBooks read-only access</li>
                    <li>Bank statements (last 6 months) for all current accounts and OD/CC accounts</li>
                    <li>GST returns (GSTR-1, 3B, 9) and TDS returns (24Q, 26Q) for the last 4 quarters</li>
                    <li>Most recent ITR acknowledgement and tax audit report (Form 3CA/3CB and 3CD)</li>
                    <li>Cap table, SHA, term sheet (if funded) and ESOP plan documents</li>
                    <li>HR master, payroll register and employment contracts</li>
                    <li>Top 10 customer and top 10 vendor contracts</li>
                    <li>Founder's view of top 3 finance and business questions to answer in the first 90 days</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Books are 90 days behind</td><td>MIS unreliable; investor due-diligence stalls; tax audit at risk</td><td>We deploy a senior associate for a 2-week clean-up sprint, reconcile bank, GST 2B and TDS 26AS, and bring books current before the first MIS.</td></tr>
                        <tr><td>Founder cannot read the P&amp;L</td><td>Decision paralysis; over-reliance on instinct; cash burns silently</td><td>We replace traditional P&amp;L with a one-page founder view (revenue, gross margin, EBITDA, cash, runway) and explain it line-by-line monthly.</td></tr>
                        <tr><td>Investor due diligence triggered cap table chaos</td><td>Series A delayed; valuation cuts; founder dilution risk</td><td>We rebuild the cap table from MOA and SHA, reconcile to MCA filings, and prepare the data room in 7 to 10 days.</td></tr>
                        <tr><td>Cash crunch despite revenue growth</td><td>Vendor payment delays; missed payroll dates; bank limits maxed</td><td>We map the cash conversion cycle, renegotiate vendor terms, tighten AR collection and surface working-capital lines from existing bankers.</td></tr>

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
            <h2 class="section-title">Virtual CFO Fees and Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter retainer (1 reporting entity, basic MIS)</td><td>Rs 35,000 per month + GST</td></tr>
                        <tr><td>Growth retainer (full MIS, cash flow, compliance oversight)</td><td>Rs 75,000 per month + GST</td></tr>
                        <tr><td>Scale retainer (board pack, investor relations, multi-entity)</td><td>Rs 1,50,000 per month + GST</td></tr>
                        <tr><td>Interim CFO (3 to 6 months full-time)</td><td>Rs 3,50,000 per month + GST</td></tr>
                        <tr><td>Project: Financial model + data room</td><td>Rs 2,00,000 per project + GST</td></tr>
                        <tr><td>Project: India entry (foreign group)</td><td>Rs 3,50,000 per project + GST</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 35,000 per month (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Virtual CFO consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20please%20share%20a%20fixed-fee%20Virtual%20CFO%20proposal." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken and Engagement Cadence</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Discovery call to signed engagement</td><td>3 to 5 working days</td></tr>
                        <tr><td>Legacy clean-up and KPI baseline</td><td>7 to 10 working days</td></tr>
                        <tr><td>First monthly MIS pack delivered</td><td>By Day 14 from kickoff</td></tr>
                        <tr><td>Steady-state monthly close cycle</td><td>MIS by the 10th of every month</td></tr>
                        <tr><td>Quarterly board pack and investor update</td><td>Within 21 days of quarter end</td></tr>
                        <tr><td>Annual budget exercise</td><td>30 to 45 days, finalised before year start</td></tr>
                        <tr><td>Fundraising data room from kickoff</td><td>10 to 21 days, depending on book hygiene</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p style='margin:0;'><strong>Important:</strong> There is no statutory deadline driving Virtual CFO timing. The cadence above is what investor-grade and audit-grade reporting demand in practice. Most founders engage 90 days before a fundraise, board onboarding, tax audit or banker review.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting as Your Virtual CFO Partner</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">CA-Led Senior Team</h3>
                <p class="feature-description">15+ years of experience across statutory audit, tax and management accounting - your monthly review is run by a senior partner, not a junior associate.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3 class="feature-title">Fixed-Fee Retainer</h3>
                <p class="feature-description">No hourly meter, no surprise invoices. Retainers are quarterly-reviewed; out-of-pocket expenses billed at actuals only with prior approval.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div>
                <h3 class="feature-title">Senior Partner Attendance</h3>
                <p class="feature-description">Your senior partner attends every monthly review and joins board meetings, banker calls, and investor diligence sessions when needed.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
                <h3 class="feature-title">Integrated Tax + Audit + ROC</h3>
                <p class="feature-description">Coordinated delivery with our in-house tax audit, ROC, payroll and ITR teams - no need to chase three different firms for the same closing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
                <h3 class="feature-title">ERP-Agnostic Delivery</h3>
                <p class="feature-description">Direct experience with Tally, Zoho Books, QuickBooks, Xero, NetSuite and Power BI - we work with what you have, not what we prefer.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3 class="feature-title">4-Office Physical Presence</h3>
                <p class="feature-description">Pune, Mumbai, Delhi and Gurugram offices for in-person reviews, bank meetings and audit walkthroughs - remote delivery for the rest of India.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">10 to 14 Day Onboarding</h3>
                <p class="feature-description">From kickoff to first MIS pack in 10 to 14 days - faster than the industry average of 30 to 45 days for a fractional CFO ramp-up.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                <h3 class="feature-title">Cross-Sector Track Record</h3>
                <p class="feature-description">Active engagements across SaaS, e-commerce, manufacturing, healthcare, hospitality and IT/ITES captives - your industry KPIs are not new ground.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders and Promoters Across India</h2>
            <div class="content-text">
                
                <div style="background:var(--orange-light);padding:20px 24px;border-radius:12px;margin-bottom:24px;font-weight:700;color:var(--blue);font-size:16px;text-align:center;">
                    10,000+ Businesses Served &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 50,000+ Documents Filed &nbsp;|&nbsp; 15+ Years in Practice
                </div>
                <p style="margin-top:24px;">Clients served include Hyundai, Asian Paints, Bridgestone and 100+ Indian startups and SMEs across SaaS, manufacturing, healthcare, hospitality and e-commerce. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Full-Time CFO vs Virtual CFO vs Accountant</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Full-Time CFO</th><th>Virtual CFO (Patron)</th><th>Accountant / Bookkeeper</th></tr></thead>
                    <tbody>
                        <tr><td>Annual cost</td><td>Rs 25 to Rs 50 lakh + benefits</td><td>Rs 4.2 lakh to Rs 18 lakh</td><td>Rs 3 to Rs 8 lakh</td></tr>
                        <tr><td>Strategy and forecasting</td><td><span class="badge-included">Yes</span></td><td><span class="badge-included">Yes</span></td><td><span class="badge-addon">No</span></td></tr>
                        <tr><td>Investor relations and fundraising</td><td><span class="badge-included">Yes</span></td><td><span class="badge-included">Yes</span></td><td><span class="badge-addon">No</span></td></tr>
                        <tr><td>Monthly close and MIS</td><td><span class="badge-included">Yes</span></td><td><span class="badge-included">Yes</span></td><td><span class="badge-addon">Limited</span></td></tr>
                        <tr><td>Day-to-day data entry and bookkeeping</td><td><span class="badge-addon">Limited</span></td><td>Coordinated with bookkeeper</td><td><span class="badge-included">Yes</span></td></tr>
                        <tr><td>Compliance oversight (GST/TDS/ROC)</td><td><span class="badge-included">Yes</span></td><td><span class="badge-included">Yes</span></td><td><span class="badge-addon">Limited</span></td></tr>
                        <tr><td>Best fit</td><td>Listed and large public companies (Section 203)</td><td>Startups and SMEs below Rs 10 crore paid-up capital</td><td>All sizes for transactional accounting</td></tr>
                        <tr><td>Time to value</td><td>3 to 6 months hiring + 90-day ramp</td><td>10 to 14 days from kickoff</td><td>30 to 45 days</td></tr>

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
            <h2 class="section-title">Partner Services That Work Alongside Your Virtual CFO</h2>
            <div class="content-text">
                
                <p>Patron Accounting's Virtual CFO retainer plugs straight into our wider compliance and tax teams - so the same partner who builds your MIS also signs off on your tax audit and ROC filings.</p>
                <ul style="margin-top:16px;">
                    <li><strong><a href="https://www.patronaccounting.com/accounting-services">Accounting Services</a> -</strong> day-to-day bookkeeping, ledger maintenance and ERP-led accounting that feeds the vCFO MIS pack.</li>
                    <li><strong><a href="https://www.patronaccounting.com/payroll-services">Payroll Services</a> -</strong> end-to-end payroll, PF, ESI, PT and TDS on salary, integrated with the vCFO compliance tracker.</li>
                    <li><strong><a href="https://www.patronaccounting.com/tax-audit">Tax Audit (Form 3CD)</a> -</strong> Section 44AB tax audit, coordinated with the vCFO month-end close.</li>
                    <li><strong><a href="https://www.patronaccounting.com/tax-planning-services">Tax Planning Services</a> -</strong> structuring, holding company review, intercompany pricing and director / promoter remuneration.</li>
                    <li><strong><a href="https://www.patronaccounting.com/compliance-calendar">Compliance Calendar</a> -</strong> master compliance calendar across GST, TDS, ROC, EPF, ESI - embedded into the vCFO dashboard.</li>
                    <li><strong><a href="https://www.patronaccounting.com/esop-management-and-compliance-services">ESOP Management and Compliance</a> -</strong> ESOP plan drafting, valuation, accounting and exercise tracking for funded startups.</li>
                    <li><strong><a href="https://www.patronaccounting.com/startup-registration">Startup Registration</a> -</strong> DPIIT recognition, Section 80-IAC tax holiday and angel tax exemption support.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework and Professional Standards</h2>
            <div class="content-text">
                
                <p>Virtual CFO services occupy a regulatory whitespace in India: there is no specific licence required to act as a vCFO, but the engagement is shaped by the Companies Act 2013, ICAI professional standards, and (where applicable) FEMA and Income Tax obligations.</p>
                <ul style="margin-top:16px;">
                    <li><strong>Companies Act 2013, <a href="https://www.indiacode.nic.in/show-data?actid=AC_CEN_22_29_00008_201318_1517807327856&amp;sectionId=49129" target="_blank" rel="nofollow noopener">Section 203</a> read with Rule 8</strong> - mandates a whole-time CFO only for listed companies and public companies with paid-up capital of Rs 10 crore or more.</li>
                    <li><strong>Section 2(51), Companies Act 2013</strong> - defines Key Managerial Personnel (KMP) to include CEO/MD, CFO, Company Secretary and any officer designated by the Board.</li>
                    <li><strong>Rule 8A, Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014</strong> - separately requires every private company with paid-up capital of Rs 10 crore or more to appoint a whole-time Company Secretary (this is not satisfied by a vCFO).</li>
                    <li><strong>Section 203(5)</strong> - penalty quantum for non-appointment: Rs 5,00,000 (company), Rs 50,000 (director / KMP), Rs 1,000 per day continuing default capped at Rs 5 lakh.</li>
                    <li><strong>Section 203(4)</strong> - vacancy in a KMP position must be filled within 6 months from the date of vacancy. Form DIR-12 and Form MR-1 to be filed within 60 days of any KMP appointment.</li>
                    <li><strong>Authority:</strong> Ministry of Corporate Affairs (MCA) at <a href="https://www.mca.gov.in" target="_blank" rel="nofollow noopener">mca.gov.in</a>; Registrar of Companies of the relevant state.</li>
                    <li><strong>Professional standards:</strong> Patron Accounting LLP delivers Virtual CFO services in line with the <a href="https://www.icai.org" target="_blank" rel="nofollow noopener">ICAI Code of Ethics 2020</a> (Volume II) on management consultancy and outsourced finance functions.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
@include('partials.faq-section', [
    'faqs' => [
        ['question' => 'What is a Virtual CFO?', 'answer' => 'A Virtual CFO is an outsourced senior finance professional - typically a Chartered Accountant - who delivers Chief Financial Officer outcomes on a part-time retainer. The role covers MIS reporting, cash flow forecasting, budgeting, fundraising support, and compliance oversight without occupying a full-time position on the payroll. It is most useful for startups and SMEs that sit below the Section 203 mandatory CFO threshold of Rs 10 crore paid-up capital.'],
        ['question' => 'How is a Virtual CFO different from an accountant?', 'answer' => 'An accountant records what already happened - invoices, bank entries, GST and TDS returns. A Virtual CFO interprets the numbers and looks forward, building forecasts, advising on capital allocation and joining founder and investor conversations. Patron Accounting bundles both: an accounting team handles the books while the Virtual CFO partner owns reporting, strategy and compliance review.'],
        ['question' => 'How much does a Virtual CFO cost in India?', 'answer' => 'Indian Virtual CFO retainers range from Rs 20,000 to Rs 3,00,000 per month, against a full-time CFO cost of Rs 25 to Rs 50 lakh per year including benefits. Patron Accounting starts at Rs 35,000 per month for bootstrapped startups, Rs 75,000 for funded startups with full MIS and compliance, and Rs 1,50,000 per month for Series A / B and multi-entity groups. All retainers are fixed-fee with no hourly billing.'],
        ['question' => 'Virtual CFO kya hota hai aur kab lena chahiye?', 'answer' => 'Virtual CFO ek senior CA hai jo aapki finance team ka head ban jata hai - lekin part-time, retainer par. Jab business 2 crore se 100 crore tak revenue par hai, fundraising ki taiyari ho rahi hai, ya GST / TDS / ROC compliance founder ke liye unmanageable ho raha hai, tab vCFO best fit hai. Full-time CFO Rs 25 lakh+ per year hota hai - vCFO us se 80% kaam 10-20% cost me karta hai.'],
        ['question' => 'When should I hire a Virtual CFO?', 'answer' => 'Engage a Virtual CFO when one of these triggers fires: revenue crosses Rs 2 crore, the founder cannot read the P&L confidently, fundraising due diligence is being prepared, the books are more than 60 days behind, the tax audit threshold under Section 44AB is breached, or a foreign group is setting up an Indian subsidiary. Any single trigger is enough; multiple together make the case obvious.'],
        ['question' => 'Will a Virtual CFO interact with auditors, bankers and the Income Tax Department?', 'answer' => "Yes. Patron Accounting's Virtual CFO partner is the management's representative in audit walkthroughs, banker meetings, and Income Tax notices. We coordinate with statutory auditors on management representations, walk the bank credit committee through projections, and draft replies to scrutiny notices under Sections 142(1) and 143(3). Where required, we attend hearings on behalf of the company."],
        ['question' => 'Is a CFO mandatory for a private limited company in India?', 'answer' => 'No - a whole-time CFO is mandatory only for listed companies and public companies with paid-up share capital of Rs 10 crore or more, under Section 203 of the Companies Act 2013 read with Rule 8. Private companies, irrespective of size, are not required to appoint a CFO. However, Rule 8A separately requires a whole-time Company Secretary for any private company with paid-up capital of Rs 10 crore or more. Voluntary CFO designations still trigger DIR-12 filing obligations.'],
        ['question' => 'Can a Virtual CFO help with fundraising?', 'answer' => 'Yes. The fundraising scope typically covers: a three-statement financial model with 24-month projections, valuation working using DCF and comparable transactions, a virtual data room with management accounts and statutory filings, investor deck financial slides, term sheet review on commercial economics, and quarterly investor update letters post-close. Patron Accounting has supported seed to Series B rounds across SaaS, manufacturing and consumer brands.'],
        ['question' => 'What is the difference between a Virtual CFO, Fractional CFO, and Interim CFO?', 'answer' => 'Virtual CFO and Fractional CFO are usually interchangeable - both denote part-time retainer arrangements; Fractional often implies a fixed allocation (for example, 8 days a month). An Interim CFO is full-time but temporary, used during leadership transitions, fundraising sprints or pre-IPO preparation, typically 3 to 9 months. All three sit outside Section 203 unless the company crosses the listed / public + Rs 10 crore paid-up capital threshold.'],
    ],
    'heading' => 'Frequently Asked Questions',
    'lead' => 'Everything Indian founders ask before engaging a Virtual CFO - from cost benchmarks to Section 203 obligations.',
    'includeSchema' => false,
    'enquiryService' => 'Virtual CFO Services',
])

<!-- Quick Answers -->
<section class="content-section" style="background-color:#ffffff;padding-top:0;">
    <div class="content-container">
        <div class="text-content">
            <div class="highlight-box" style="margin-top:0;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-top:12px;">
                    <li><strong>Is CFO mandatory for private limited?</strong> No - only for listed and public companies with paid-up capital of Rs 10 crore or more (Section 203 + Rule 8).</li>
                    <li><strong>Penalty for missing CFO appointment?</strong> Rs 5,00,000 (company); Rs 50,000 (director / KMP); Rs 1,000/day continuing (capped at Rs 5 lakh) under Section 203(5).</li>
                    <li><strong>Vacancy fill timeline?</strong> 6 months from vacancy under Section 203(4).</li>
                    <li><strong>Filing forms?</strong> Form DIR-12 + Form MR-1 within 60 days of appointment.</li>
                    <li><strong>Patron Accounting starting retainer?</strong> Rs 35,000 per month + GST.</li>
                    <li><strong>Time to first MIS pack?</strong> 10 to 14 days from kickoff.</li>
                    <li><strong>Engagement model?</strong> Monthly retainer (most common), project-based, interim or hourly on-demand.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">When to Engage Patron Accounting</h2>
            <div class="content-text">
                
                <p>There is no statutory urgency driving Virtual CFO timing - so the right trigger is a business event. Engage Patron Accounting at least <strong>90 days before</strong> any of the following:</p>
                <ul style="margin-top:12px;">
                    <li>Closing a funding round (seed / pre-Series A / Series A / B)</li>
                    <li>Board onboarding of an external investor</li>
                    <li>A tax audit under Section 44AB</li>
                    <li>A statutory audit qualification risk</li>
                    <li>A banker credit review or working-capital limit renewal</li>
                    <li>An IPO / SME-IPO data-room kickoff</li>
                    <li>A foreign parent's India entity launch (FDI, FEMA, transfer pricing setup)</li>
                </ul>
                <p style="margin-top:16px;"><strong>Earlier engagement always reduces the unit economics of the eventual transaction.</strong> Books cleaned and KPIs baselined ahead of due diligence cost a fraction of what an emergency clean-up costs once an investor or banker is already at the table.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Senior Finance Leadership at One-Tenth the Cost of a Full-Time CFO</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);font-size:16px;">A Virtual CFO is the most cost-effective path to senior finance leadership for Indian startups and SMEs operating below the Section 203 mandatory CFO threshold. Patron Accounting LLP delivers the full vCFO function - MIS, cash flow, fundraising support, and compliance oversight - through a CA-led team based out of Pune, Mumbai, Delhi and Gurugram, on a fixed-fee retainer starting at <strong style="color:#fff;">Rs 35,000 per month</strong>.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;margin-top:12px;">Senior partner attendance, no hourly billing, and integrated tax / payroll / audit teams are built into every engagement. Book a free 30-minute scoping call - we share a fixed-fee proposal within 24 hours, with no obligation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20please%20share%20a%20fixed-fee%20Virtual%20CFO%20proposal." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Virtual CFO Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person reviews and bank meetings where you operate, remote delivery everywhere else.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title" style="text-align:left;font-weight:700;color:var(--blue);font-size:18px;margin-bottom:6px;">Virtual CFO Services in Top Indian Cities</div>
                <div class="pa-block-sub" style="color:var(--text-muted);font-size:14px;margin-bottom:20px;">In-person reviews and bank meetings at our offices in Pune, Mumbai, Delhi and Gurugram - remote delivery everywhere else in India.</div>
                <div class="pa-city-grid">
                    <a href="https://www.patronaccounting.com/virtual-cfo/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Virtual CFO Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="https://www.patronaccounting.com/virtual-cfo/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Virtual CFO Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="https://www.patronaccounting.com/virtual-cfo/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Virtual CFO Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="https://www.patronaccounting.com/virtual-cfo/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Virtual CFO Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title" style="text-align:left;font-weight:700;color:var(--blue);font-size:18px;margin-bottom:6px;">Related Services</div>
                <div class="pa-block-sub" style="color:var(--text-muted);font-size:14px;margin-bottom:20px;">End-to-end finance and compliance support that pairs with your Virtual CFO retainer.</div>
                <div class="pa-cross-grid">
                    <a href="https://www.patronaccounting.com/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="https://www.patronaccounting.com/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="https://www.patronaccounting.com/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="https://www.patronaccounting.com/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="https://www.patronaccounting.com/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management &amp; Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="https://www.patronaccounting.com/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 5 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">5 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 5 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every six months or sooner whenever the Companies Act 2013 (Section 203 / Rule 8 / Rule 8A), the Section 203(5) penalty quantum, the ICAI Code of Ethics, or the Indian Virtual CFO market pricing benchmark changes materially. Last reviewed: 5 May 2026.</p>
        </div>
    </div>
</section>

</main>
<!-- Page scripts (kept inside content section: layout's @stack('scripts') renders twice) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
        let html = '';

        reviews.forEach(function(review, i) {
            if (review.hasVideo && review.videoUrl) {
                html += buildVideoCard(review);
            } else {
                html += buildQuoteCard(review, i);
            }
        });

        // If slider already initialized, destroy first (prevents a stale slick-initialized class blocking re-init)
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
        var phoneVal = phoneInput.value.trim();
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

<!-- BF-1: "Last Updated" is hardcoded in the markup (5 May 2026) to mirror schema dateModified; view-time JS removed per QC v2.1 (visible date must not drift from schema). -->
@endsection
