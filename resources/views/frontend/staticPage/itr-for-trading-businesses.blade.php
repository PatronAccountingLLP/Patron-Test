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
    <title>ITR for Trading Business</title>
    <meta name="description" content="File ITR for wholesale, retail, commodity traders. Sec 44AD, Sec 269ST cash, ICDS-II FIFO, branch transfer, audit. Starting Rs 7,500.">
    <link rel="canonical" href="/itr-for-trading-businesses">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Trading Business in 2026 | Patron Accounting">
    <meta property="og:description" content="File ITR for wholesale, retail, commodity traders. Sec 44AD, Sec 269ST cash, ICDS-II FIFO, branch transfer, audit. Starting Rs 7,500.">
    <meta property="og:url" content="/itr-for-trading-businesses/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-trading-businesses-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Trading Business in 2026 | Patron Accounting">
    <meta name="twitter:description" content="File ITR for wholesale, retail, commodity traders. Sec 44AD, Sec 269ST cash, ICDS-II FIFO, branch transfer, audit. Starting Rs 7,500.">
    <meta name="twitter:image" content="/images/itr-for-trading-businesses-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/itr-for-trading-businesses#breadcrumb",
                "itemListElement": [
                    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
                    {"@type": "ListItem", "position": 2, "name": "Income Tax Return", "item": "/income-tax-return"},
                    {"@type": "ListItem", "position": 3, "name": "ITR for Trading Businesses", "item": "/itr-for-trading-businesses"}
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/itr-for-trading-businesses#faq",
                "datePublished": "2026-05-08T08:00:00+05:30",
                "dateModified": "2026-05-08T08:00:00+05:30",
                "mainEntity": [
                    {"@type": "Question", "name": "Which ITR form should a wholesale trader file?", "acceptedAnswer": {"@type": "Answer", "text": "A private limited or listed wholesale company files ITR-6. An LLP or partnership firm wholesaler files ITR-5 (LLP cannot use Sec 44AD). A proprietor wholesaler with regular books files ITR-3, while one opting for the Section 44AD presumptive scheme up to Rs 2 crore turnover (Rs 3 crore if 95 percent receipts and payments are non-cash) files ITR-4. HUF and partnership firms other than LLP are eligible for Sec 44AD."}},
                    {"@type": "Question", "name": "Can a retail trader use Section 44AD presumptive scheme?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Retail traders run as proprietorship, partnership firm other than LLP, or HUF can opt for Section 44AD up to Rs 2 crore turnover (Rs 3 crore if 95 percent receipts and payments are non-cash, per Finance Act 2023). Deemed profit is 8 percent on cash and 6 percent on digital. The 5-year continuity rule applies; opting out triggers 5-year lock-out. LLPs, companies, commission agents, and brokers are not eligible."}},
                    {"@type": "Question", "name": "When does tax audit apply for a trading business?", "acceptedAnswer": {"@type": "Answer", "text": "Tax audit applies under Section 44AB if turnover exceeds Rs 1 crore. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash. Form 3CD report is due 30 September 2026 and ITR by 31 October 2026 for AY 2026-27. Penalty under Sec 271B is 0.5 percent of turnover or Rs 1.5 lakh whichever is lower."}},
                    {"@type": "Question", "name": "How is turnover computed for a trading business?", "acceptedAnswer": {"@type": "Answer", "text": "Under Section 145A as substituted by Finance Act 2018 (inclusive method), turnover includes GST, customs duty, and other indirect taxes collected on sales. Returns and rebates are deducted. Branch transfers between same-PAN-different-state GSTINs are NOT included in turnover. The inclusive turnover determines Sec 44AD (Rs 3 crore digital), Sec 44AB (Rs 10 crore digital), and MSME thresholds."}},
                    {"@type": "Question", "name": "What is the Section 269ST cash receipt limit for traders?", "acceptedAnswer": {"@type": "Answer", "text": "Section 269ST of the Income-tax Act 1961 bars cash receipt of Rs 2 lakh or more from one person in a single day, single transaction, or for one event. Section 271DA imposes a penalty equal to 100 percent of the cash received imposed by the Joint Commissioner. Festival sales, mandi auctions, scrap collection, and bullion transactions are common traps. Mandate UPI or cheque for transactions above Rs 1.5 lakh."}},
                    {"@type": "Question", "name": "How is inventory valued under ICDS-II for trading businesses?", "acceptedAnswer": {"@type": "Answer", "text": "ICDS-II (CBDT Notification 87/2016 dated 29 September 2016) mandates inventory valuation at the lower of cost or net realisable value, using FIFO or Weighted Average Cost. LIFO is not permitted. Once a method is selected, it must be applied consistently across years. Item-by-item NRV writedown is required for slow-moving, obsolete, or damaged stock. Form 3CD Clause 14 requires disclosure in audit cases."}},
                    {"@type": "Question", "name": "Is inter-state branch transfer revenue for income tax?", "acceptedAnswer": {"@type": "Answer", "text": "No. For income tax, inter-state branch transfers between same-PAN-different-state GSTINs are intra-PAN transfers and NOT revenue. Section 5 taxes income that accrues; branch transfers do not generate accrual at the entity level. For GST, however, these are deemed supplies under Schedule I para 2 of the CGST Act (since branches with separate state GSTINs are distinct persons under Sec 25(4)) with valuation under Rule 28."}},
                    {"@type": "Question", "name": "What gross profit ratio is acceptable for a wholesale trader?", "acceptedAnswer": {"@type": "Answer", "text": "There is no statutory minimum GP ratio - the test is internal consistency and industry norms. Wholesale FMCG distributors typically operate at 3 to 7 percent, electronics at 5 to 12 percent, garment at 8 to 18 percent, and agri-commodity at 1 to 5 percent. Year-on-year variations should be reconcilable to verifiable causes. Sharp drops without documentation may invite Section 145(3) rejection of books."}}
                ]
            },
            {
                "@type": "Service",
                "@id": "/itr-for-trading-businesses#service",
                "name": "ITR for Trading Businesses",
                "alternateName": ["Wholesale Trader ITR", "Retail Trader ITR", "Commodity Trader ITR", "Trading Business Tax Filing", "Section 44AD Trading", "FMCG Distributor ITR", "Mandi Commission Agent ITR", "Bullion Trader ITR"],
                "url": "/itr-for-trading-businesses",
                "description": "CA-led income tax return filing for wholesalers, retailers, and physical commodity traders in India. Covers ITR-3, ITR-4, ITR-5, ITR-6, Section 44AD presumptive eligibility (Rs 3 crore digital threshold), Section 145A inclusive turnover method, Section 269ST cash receipt audit, ICDS-II FIFO and Weighted Average inventory valuation, gross profit ratio defensibility, inter-state branch transfer reconciliation under Schedule I CGST, and Section 44AB tax audit for AY 2026-27.",
                "serviceType": "Income Tax Return Filing for Wholesale, Retail, and Commodity Traders",
                "category": "Direct Tax Compliance Industry-Specific",
                "provider": {"@id": "/#organization"},
                "areaServed": [
                    {"@type": "Country", "name": "India"},
                    {"@type": "City", "name": "Pune"},
                    {"@type": "City", "name": "Mumbai"},
                    {"@type": "City", "name": "Delhi"},
                    {"@type": "City", "name": "Gurugram"},
                    {"@type": "City", "name": "Bengaluru"},
                    {"@type": "City", "name": "Hyderabad"},
                    {"@type": "City", "name": "Chennai"},
                    {"@type": "City", "name": "Kolkata"}
                ],
                "audience": {"@type": "Audience", "audienceType": "Wholesale traders, retail traders, commodity traders, mandi commission agents, kirana retailers, FMCG distributors, electronics dealers, agri-commodity traders, scrap and metal merchants, bullion / jewellery dealers, garment retailers, sole proprietors and partnership firms (non-LLP) under Section 44AD, LLPs and private limited companies excluded from Section 44AD, multi-state distributors with branch transfers under Schedule I CGST, importers / exporters with cross-border consignments"},
                "about": [
                    {"@type": "Thing", "name": "Income Tax Return", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_return_(India)"},
                    {"@type": "Thing", "name": "Wholesale and retail trade in India", "sameAs": "https://en.wikipedia.org/wiki/Retail_in_India"},
                    {"@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"}
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "ITR for Trading Businesses Pricing",
                    "itemListElement": [
                        {"@type": "Offer", "name": "Single-state proprietor presumptive (Sec 44AD)", "price": "7500", "priceCurrency": "INR", "url": "/itr-for-trading-businesses", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Single-state proprietor regular books", "price": "12500", "priceCurrency": "INR", "url": "/itr-for-trading-businesses", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Trading firm / LLP audit case", "price": "25000", "priceCurrency": "INR", "url": "/itr-for-trading-businesses", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Multi-state trader (3+ state GSTINs)", "price": "45000", "priceCurrency": "INR", "url": "/itr-for-trading-businesses", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Pvt Ltd trader audit + multi-state + cross-border", "price": "80000", "priceCurrency": "INR", "url": "/itr-for-trading-businesses", "availability": "https://schema.org/InStock"}
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
                        ITR for Trading Businesses in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, DSC of authorised signatory, GST registration certificate (every state with branch / godown), GSTR-1, GSTR-3B, GSTR-9, sales and purchase registers, item-wise stock register, bank statements, customer / supplier ledgers with PAN, Form 26AS, AIS, TIS, branch transfer register, cash book / petty cash log, audited financials (audit cases).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 7,500 single-state proprietor presumptive (Sec 44AD); Rs 12,500 single-state regular books non-audit; Rs 25,000+ trading firm or LLP audit case; Rs 45,000+ multi-state trader (3+ state GSTINs); Rs 80,000+ Pvt Ltd trader with cross-border and TP.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Proprietor wholesaler / retailer / commodity trader, partnership firm or LLP trader, private limited or listed trading company, HUF wholesale or retail trader, mandi commission agent or arhatiya, kirana, FMCG distributor, electronics dealer, agri-commodity trader, scrap merchant, bullion dealer.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3 to 5 working days for proprietor presumptive; 5 to 8 days for regular books non-audit; 12 to 18 days for audit case; 15 to 25 days for multi-state trader; 25 to 40 days for Pvt Ltd cross-border. Statutory due 31 August 2026 (non-audit); 30 September 2026 (Form 3CD); 31 October 2026 (audit ITR).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20filing%20for%20my%20trading%20business.%20Please%20share%20a%20Section%2044AD%20eligibility%20and%20Section%20145A%20inclusive%20method%20assessment." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for Trading Businesses'/>
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
                                <option value="itr-for-trading-businesses" selected>ITR for Trading Businesses</option>
                                <option value="itr-for-business">ITR for Business</option>
                                <option value="itr-for-companies">ITR for Companies</option>
                                <option value="income-tax-return">Income Tax Return</option>
                                <option value="tax-audit">Tax Audit (Section 44AB)</option>
                                <option value="accounting-services-for-trading-industry">Trading Industry Accounting</option>
                                <option value="stock-audit">Stock Audit</option>
                                <option value="tds-return">TDS Return Filing</option>
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

        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's branch transfer reconciliation removed Rs 11.6 crore of inflated turnover from our books across three state GSTINs. Clean ITR-5 with the correct Rs 7.4 crore third-party turnover. Sec 44AB exposure prevented. They also caught Sec 145A inclusive method gaps before year-end.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Vinod K</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Mumbai FMCG Distributor</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trader / Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">Google Review</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. And it's not expensive at all.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Wholesaler / Kolkata</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">Google Review</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron flagged Sec 145A inclusive method early - my net Rs 1.85 crore turnover became Rs 2.18 crore inclusive, crossing Sec 44AD. They moved me to ITR-3 with regular books and ICDS-II inventory before audit kicked in. Diwali cash receipts also caught and routed to UPI in advance.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PA</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Pradeep A</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Electronics Retailer, Pune</div>
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
                    <p>Trusted by 1,500+ trading enterprises across India - kirana retailers, FMCG distributors, electronics dealers, agri-commodity traders, scrap merchants, and mandi commission agents - plus enterprise clients including Hyundai, Asian Paints, and Bridgestone.</p>
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
            <a href="#who-section" class="toc-btn">Applicability</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Patron</a>
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
            <h2 class="section-title">ITR for Trading Businesses - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Trading Businesses Services at a Glance</strong></p>
                    <p>Trading businesses file ITR-3 (proprietor regular books), ITR-4 (presumptive Sec 44AD up to Rs 2 crore turnover, Rs 3 crore if 95 percent receipts and payments are non-cash), ITR-5 (LLP / firm), or ITR-6 (Pvt Ltd). Tax audit applies above Rs 1 crore (Rs 10 crore digital). Section 269ST bars Rs 2 lakh+ cash receipts. ICDS-II mandates FIFO or Weighted Average inventory. Branch transfers are not revenue. Due date 31 October 2026 if audit. Starting Rs 7,500.</p>
                </div>
                <p>Trading is the largest small-business segment in India. Wholesalers operating mandi yards, kirana retailers, FMCG distributors, electronics dealers, agricultural commodity traders, and metal scrap merchants together file the bulk of business ITRs every year. Yet trading is also where most ITR errors happen - the Section 44AD Rs 3 crore digital threshold gets misread, inter-state branch transfers get reported as revenue, Section 269ST cash receipts trigger 100 percent penalties, ICDS-II FIFO is replaced with cherry-picked inventory cost methods, and Section 145A inclusive method gets ignored entirely.</p>
                <p>Patron Accounting handles the full stack, from a Rs 40 lakh kirana ITR-4 to a Rs 80 crore multi-state distributor ITR-6. We bring 1,500+ trading enterprise engagements across kirana, FMCG, electronics, agri-commodity, scrap, mandi commission, and bullion to file your return on time, defend it under scrutiny, and structure your tax position for the years ahead. Schedule a free 15-minute call - we evaluate your Sec 44AD eligibility, Sec 145A inclusive turnover, ICDS-II inventory method, and Sec 269ST cash exposure before you pay anything.</p>
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
                <h2 class="section-title">What Is ITR for Trading Businesses</h2>
                <div class="content-text what-is-definition">
                    
                    
            <p><em>ITR for trading businesses is the annual income tax return filed by wholesalers, retailers, and physical commodity traders under Section 139(1) of the Income-tax Act 1961, after computing income subject to ICDS-II inventory valuation (FIFO or Weighted Average), Section 145A inclusive method for turnover and stock, Section 269ST cash receipt restrictions, and Section 44AB tax audit thresholds.</em></p>
            <p>The return reports income classified as Profits and Gains of Business or Profession under business code 09001 (Wholesale and retail trading) and related sub-codes. Sales register, purchase register, item-wise stock register, debtor and creditor ledgers, bank statements, and GSTR-9 reconciliation feed into Schedule BP. For multi-state traders with branches in different states, separate state GSTINs (per Sec 25 CGST Act) consolidate at the PAN level into one ITR.</p>
            <p>Branch transfers between same-PAN-different-state GSTINs are deemed supplies under Schedule I CGST Act but are NOT revenue for income tax. India trading sector spans wholesalers (mandi yards, FMCG distributors, electronics dealers), retailers (kirana, supermarkets, e-commerce sellers, garment retailers), commodity traders (agricultural, metal scrap, bullion, jewellery), commission agents (arhatiyas, mandi brokers - excluded from Sec 44AD), and importers / exporters with cross-border consignments.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Trading Businesses:</strong></p>
                    
            <p><strong>Section 44AD:</strong> Presumptive taxation scheme. Resident individual, HUF, partnership firm (not LLP) with trading business turnover up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023) declares deemed profit at 8 percent (cash) or 6 percent (digital). 5-year continuity rule and 5-year lock-out on opt-out under Sec 44AD(4) and 44AD(5).</p>
            <p><strong>Section 145A inclusive method:</strong> GST, customs duty, excise, and other indirect taxes must be INCLUDED in the value of purchases, sales, and inventory for income computation. Substituted by Finance Act 2018. The method is tax-neutral on net profit but affects the gross turnover figure used for thresholds (Sec 44AD limit, Sec 44AB audit, Rs 5 crore MSME limit).</p>
            <p><strong>ICDS-II Inventory:</strong> Mandates valuation at lower of cost or net realisable value using FIFO or Weighted Average Cost. LIFO is NOT permitted under ICDS-II (CBDT Notification 87/2016 dated 29 September 2016). Consistent application is required across years; changes need disclosure in Form 3CD Clause 14 for audit cases.</p>
            <p><strong>Schedule I CGST inter-state branch transfer:</strong> A trader with the same PAN but different state GSTINs is treated as 'distinct persons' under Section 25(4) of the CGST Act. Stock movements between such branches are deemed supplies under Schedule I para 2, with valuation under Rule 28 CGST (90 percent of price charged to unrelated customer or open market value). For income tax, branch transfers are NOT revenue.</p>
            <p><strong>Gross Profit (GP) Ratio:</strong> Gross profit divided by sales turnover. Used by tax officers as a sanity benchmark against industry norms. Variations against historical or peer ratios may invite Section 145(3) rejection of books and best-judgement assessment under Section 144 - hence consistency, documentation, and segment notes matter.</p>
            <p><strong>Section 269ST / 271DA:</strong> Bars cash receipt of Rs 2 lakh or more from one person in a single day, single transaction, or for one event. Section 271DA imposes 100 percent penalty on the receiver - imposed by Joint Commissioner. High-risk segments: festival sales (Diwali, Eid), mandi auctions, bullion / jewellery, scrap collection peaks.</p>
            <p><strong>Section 40A(3) Cash Payment:</strong> Any payment to a single person in a day exceeding Rs 10,000 in cash is 100 percent disallowed (Rs 35,000 for transporters). Common in informal vendor settlements, mandi yard fees, daily wage to handlers, freight to small operators.</p>
            <p><strong>Section 145(3):</strong> Assessing Officer may reject books of account if not satisfied with correctness or completeness; best-judgement assessment under Section 144 follows. Often triggered by sharp GP ratio variation, missing stock register, or unsupported writedowns.</p>
            <p><strong>Form 3CD:</strong> Tax audit report under Section 44AB. Trader-relevant clauses include Clause 14 (method of valuation of closing stock), Clause 18 (depreciation), Clause 21 (Sec 269ST cash receipts; Sec 40A(3) cash payments above Rs 10,000), Clause 31 (Sec 269SS / 269T loans), Clause 35 (quantitative details for trader).</p>
            <p><strong>Section 25 CGST:</strong> Mandates separate GST registration for each state of business. Same-PAN-different-state GSTINs are 'distinct persons' under Sec 25(4) - this is what makes inter-state branch transfers deemed supplies under Schedule I.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Trading Businesses</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Reviewed by</span>
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
            <h2 class="section-title">Applicability - Who Needs This Service</h2>
            <div class="content-text">
                
                
            <p>Every trader earning income in India must file an ITR. Form depends on entity structure and turnover. Tax audit depends on receipts. The table below maps the most common trading profiles to their entity type, ITR form, Sec 44AD eligibility, and statutory due date for AY 2026-27.</p>
            <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Entity Type</th>
                            <th>ITR Form</th>
                            <th>Sec 44AD Eligible</th>
                            <th>ITR Due Date (AY 2026-27)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Proprietor wholesaler / retailer / commodity trader</td><td>Sole prop</td><td>ITR-3 regular / ITR-4 presumptive</td><td>YES (up to Rs 2 cr / Rs 3 cr digital)</td><td>31 Aug 2026 non-audit; 31 Oct 2026 audit</td></tr>
                        <tr><td>HUF wholesale / retail trader</td><td>HUF</td><td>ITR-3 / ITR-4</td><td>YES (up to Rs 2 cr / Rs 3 cr digital)</td><td>31 Aug 2026 non-audit; 31 Oct 2026 audit</td></tr>
                        <tr><td>Partnership firm trader (non-LLP)</td><td>Firm</td><td>ITR-5</td><td>YES (up to Rs 2 cr / Rs 3 cr digital)</td><td>31 Aug 2026 non-audit; 31 Oct 2026 audit</td></tr>
                        <tr><td>LLP trader</td><td>LLP</td><td>ITR-5</td><td>NO (LLP excluded)</td><td>31 Oct 2026 if audit</td></tr>
                        <tr><td>Private limited trading company</td><td>Pvt Ltd</td><td>ITR-6</td><td>NO (Companies excluded)</td><td>31 Oct 2026 (audit applicable for companies)</td></tr>
                        <tr><td>Listed trading company</td><td>Listed Co</td><td>ITR-6</td><td>NO</td><td>31 Oct 2026; 30 Nov 2026 if TP</td></tr>
                        <tr><td>Mandi commission agent / arhatiya</td><td>Sole prop / Firm</td><td>ITR-3 / ITR-5</td><td>NO (Sec 44AD(6) excludes commission agents)</td><td>31 Aug 2026 / 31 Oct 2026 if audit</td></tr>
                        <tr><td>Kirana / small retailer</td><td>Sole prop</td><td>ITR-4 typically</td><td>YES (under Rs 2 cr most cases)</td><td>31 Aug 2026 non-audit</td></tr>
                        <tr><td>FMCG distributor (single state)</td><td>Sole prop / Firm / Pvt Ltd</td><td>ITR-3 / ITR-5 / ITR-6</td><td>YES (prop / firm only, if under Rs 3 cr digital)</td><td>31 Aug / 31 Oct 2026</td></tr>
                        <tr><td>FMCG distributor (multi-state)</td><td>Pvt Ltd / LLP typically</td><td>ITR-5 / ITR-6</td><td>NO (LLP / Co excluded)</td><td>31 Oct 2026 (audit usual at scale)</td></tr>
                        <tr><td>Electronics / mobile dealer</td><td>Sole prop / Firm / Pvt Ltd</td><td>ITR-3 / ITR-5 / ITR-6</td><td>YES (prop / firm only)</td><td>31 Aug / 31 Oct 2026</td></tr>
                        <tr><td>Agri-commodity trader</td><td>Sole prop / Firm</td><td>ITR-3 / ITR-4 / ITR-5</td><td>YES if not commission agent</td><td>31 Aug / 31 Oct 2026</td></tr>
                        <tr><td>Scrap / metal merchant</td><td>Sole prop / Firm</td><td>ITR-3 / ITR-4 / ITR-5</td><td>YES (prop / firm only)</td><td>31 Aug / 31 Oct 2026</td></tr>
                        <tr><td>Bullion / jewellery dealer</td><td>Sole prop / Firm / Pvt Ltd</td><td>ITR-3 / ITR-5 / ITR-6</td><td>YES (prop / firm only)</td><td>31 Aug / 31 Oct 2026 (Sec 269ST high-risk)</td></tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-top:18px;font-size:14px;color:var(--text-muted);"><em>If your trading business has multi-state branches, an active Sec 44AD election with 5-year continuity, or has crossed the Rs 1 crore turnover threshold, your ITR is no longer a 1-week filing job. Schedule a free 15-minute call with Patron to map your profile.</em></p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Services for Trading Business ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td>Section 44AD Eligibility and Election Decision</td>
                            <td>Pre-filing analysis on whether to opt for presumptive Sec 44AD (Rs 2 crore / Rs 3 crore digital) versus regular books with audit. Five-year continuity check, mid-year opt-out cost-benefit, and Sec 44AD(4) lock-out modelling. For multi-business proprietors, aggregation of turnover at the PAN level. ITR-4 vs ITR-3 form selection memo.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Section 145A Inclusive Method Turnover Computation</td>
                            <td>Inclusive method computation - GST, customs duty, and other taxes included in sales, purchases, and closing stock. Reconciliation with GSTR-9 outward supplies. Critical for accurate threshold determination - many traders cross Sec 44AD or Sec 44AB limits when GST is included even though they were 'below' on net basis.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>ICDS-II Inventory Valuation</td>
                            <td>Closing stock valued at lower of cost or net realisable value using FIFO or Weighted Average Cost (LIFO not permitted per CBDT Notification 87/2016). Slow-moving and obsolete stock written down item by item. Year-on-year consistency check with Form 3CD Clause 14 disclosure for audit cases.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Section 269ST Cash Receipt Audit</td>
                            <td>Customer-wise daily cash receipt review to flag any aggregate Rs 2 lakh receipt from one customer in a single day, single transaction, or one event. Mandi yard cash, festival season retail, scrap collection, and bullion trades are common high-risk segments. Sec 271DA imposes 100 percent penalty on the receiver - imposed by Joint Commissioner.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Inter-State Branch Transfer Reconciliation</td>
                            <td>For multi-state traders with different state GSTINs, branch transfers (Sec 25 CGST 'distinct persons' under Schedule I para 2) are deemed supplies for GST but NOT revenue for income tax. Patron's reconciliation removes branch transfers from Schedule BP turnover and aligns IGST charged at sending branch with ITC claimed at receiving branch.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>Gross Profit Ratio Defensibility Memo</td>
                            <td>Year-on-year and segment-wise GP ratio comparison. Patron's documentation reconciles ratio fluctuations to verifiable causes - bulk discount realisation, slow-moving stock writedown, freight cost spikes, GST rate changes - so that tax officers cannot invoke Section 145(3) rejection of books and Sec 144 best-judgement assessment.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Tax Audit + Form 3CD Clause Specifics for Traders</td>
                            <td>Form 3CA-3CD or 3CB-3CD audit. Clause 14 (method of valuation of closing stock), Clause 18 (depreciation), Clause 21 (Sec 269ST cash, Sec 40A(3) cash payment above Rs 10,000), Clause 31 (Sec 269SS / 269T loans), Clause 35 (quantitative details for trader). Multi-state branch consolidation memo for Pvt Ltd traders.</td>
                            <td><span class="badge-addon">Add-on</span></td>
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
            <h2 class="section-title">How Patron Files Your Trading Business ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">An 8-step process covering entity classification, Section 145A inclusive turnover, Section 44AD election, ICDS-II inventory, Section 269ST and 40A(3) cash audit, branch transfer reconciliation, GP ratio defence, and audit / filing.</p>
        </header>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Entity Type and ITR Form Selection</h3>
                    <p class="step-description">Identify entity type. Pvt Ltd trader files ITR-6 (no Sec 44AD). LLP files ITR-5 (no Sec 44AD). Proprietor with regular books files ITR-3. Proprietor / firm / HUF under presumptive Sec 44AD up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash) files ITR-4. HUF and partnership firms (other than LLP) are eligible for Sec 44AD. Mandi commission agents are excluded from Sec 44AD per Sec 44AD(6).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity classification</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR form mapping</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="20" width="160" height="140" rx="12" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="50" font-size="13" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Entity -> ITR Map</text>
                        <text x="100" y="75" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Pvt Ltd -> ITR-6</text>
                        <text x="100" y="92" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">LLP / Firm -> ITR-5</text>
                        <text x="100" y="109" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Prop regular -> ITR-3</text>
                        <text x="100" y="126" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Prop 44AD -> ITR-4</text>
                        <text x="100" y="148" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Sec 139(1) ITA 1961</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Section 145A Inclusive Method Turnover</h3>
                    <p class="step-description">Compute turnover under Section 145A inclusive method. GST, customs duty, and other indirect taxes are INCLUDED in the value of sales, purchases, and inventory. The method is tax-neutral on net profit but the gross turnover figure determines threshold eligibility for Sec 44AD (Rs 3 crore digital), Sec 44AB (Rs 10 crore digital), and MSME classification. Reconcile with GSTR-9 outward supplies.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inclusive method</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9 recon</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="100" y="50" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 145A</text>
                        <text x="100" y="73" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Net Sales Rs 1.85 cr</text>
                        <text x="100" y="90" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">+ GST 18%</text>
                        <text x="100" y="107" font-size="11" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">= Rs 2.18 cr</text>
                        <text x="100" y="128" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Crosses Sec 44AD</text>
                        <text x="100" y="145" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Rs 2 cr limit</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Section 44AD Election vs Regular Books</h3>
                    <p class="step-description">Decide Sec 44AD election versus regular books. If turnover is within Rs 3 crore digital and the business is willing to declare 6 percent (digital) or 8 percent (cash) as deemed profit, file ITR-4. Note the 5-year continuity rule under Sec 44AD(4) - opting out below the deemed rate triggers a 5-year lock-out from the scheme and mandatory tax audit if total income exceeds basic exemption.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5-year continuity</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lock-out modelling</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="15" y="30" width="80" height="120" rx="8" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="55" y="60" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 44AD</text>
                        <text x="55" y="80" font-size="14" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">8% / 6%</text>
                        <text x="55" y="100" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">cash / digital</text>
                        <text x="55" y="125" font-size="8" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">No books</text>
                        <rect x="105" y="30" width="80" height="120" rx="8" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="145" y="60" font-size="11" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Regular</text>
                        <text x="145" y="80" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Books</text>
                        <text x="145" y="100" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">+ ICDS-II</text>
                        <text x="145" y="125" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Audit if &gt; Rs 1 cr</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">ICDS-II Inventory Valuation</h3>
                    <p class="step-description">Apply ICDS-II to closing stock. Item-by-item valuation at lower of cost or net realisable value using FIFO or Weighted Average Cost (LIFO not permitted per CBDT Notification 87/2016 dated 29 September 2016). Slow-moving, obsolete, and damaged stock written down with documented basis. Consistency requirement across years - changes need disclosure.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIFO / WAC only</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Item-level NRV</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="50" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ICDS-II</text>
                        <text x="100" y="75" font-size="11" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FIFO</text>
                        <text x="100" y="93" font-size="11" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">or WAC</text>
                        <text x="100" y="118" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">LIFO X not permitted</text>
                        <text x="100" y="138" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Lower of cost / NRV</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Section 269ST Cash Receipt Audit</h3>
                    <p class="step-description">Audit Sec 269ST cash receipts. Identify any single customer paying Rs 2 lakh or more in cash in one day, one transaction, or one event (festival sales, mandi auctions, scrap collection, bullion deals are common traps). Penalty under Sec 271DA equals 100 percent of the cash received - imposed by Joint Commissioner. Build a daily cash limit register; mandate UPI / NEFT / cheque for any single-day transaction above Rs 1.5 lakh.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 2 lakh limit</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>271DA 100% penalty</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="20" width="160" height="140" rx="12" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="100" y="50" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 269ST</text>
                        <text x="100" y="78" font-size="14" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rs 2 lakh</text>
                        <text x="100" y="96" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">single day / txn / event</text>
                        <text x="100" y="120" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">271DA = 100% penalty</text>
                        <text x="100" y="140" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Joint Commissioner</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Section 40A(3) Cash Payment and Branch Transfer</h3>
                    <p class="step-description">Audit Sec 40A(3) cash payments - any payment to a single person in a day exceeding Rs 10,000 in cash (Rs 35,000 for transporters) is disallowed at 100 percent. Petty cash logs reviewed pre-filing. For multi-state traders, reconcile inter-state branch transfers - stock movements between same-PAN-different-state GSTINs are deemed supplies under Schedule I para 2 CGST with IGST charged at sending branch and ITC at receiving branch, but for income tax these are intra-PAN transfers and NOT revenue.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 10K cash limit</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Branch != revenue</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <circle cx="60" cy="65" r="30" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="60" y="62" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">State A</text>
                        <text x="60" y="76" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">GSTIN</text>
                        <circle cx="140" cy="65" r="30" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="140" y="62" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">State B</text>
                        <text x="140" y="76" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">GSTIN</text>
                        <line x1="90" y1="65" x2="110" y2="65" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="115" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">IGST + ITC (GST)</text>
                        <text x="100" y="135" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Not revenue (IT)</text>
                        <text x="100" y="155" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Sch I CGST</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Gross Profit Ratio Defensibility</h3>
                    <p class="step-description">Document gross profit ratio. Year-on-year GP ratio variation must be reconcilable to verifiable causes - bulk discount realisation, slow-moving stock writedown, freight cost spikes, GST rate changes. Tax officers use industry GP benchmarks as a sanity check; large variations may trigger Section 145(3) rejection of books and Sec 144 best-judgement assessment. Patron prepares a year-end GP defensibility memo with line-item reconciliation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pre-empt 145(3)</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>YoY reconciliation</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="55" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GP Ratio Memo</text>
                        <text x="100" y="80" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">FY 24-25: 8.5%</text>
                        <text x="100" y="98" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">FY 25-26: 6.2%</text>
                        <text x="100" y="120" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Cause: bulk discount</text>
                        <text x="100" y="138" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">+ NRV writedown</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Tax Audit, Self-Assessment Tax, and ITR Filing</h3>
                    <p class="step-description">Run tax audit if turnover exceeds Rs 1 crore (Rs 10 crore if 95 percent receipts and payments are non-cash) under Section 44AB. File Form 3CA-3CD or 3CB-3CD by 30 September 2026. Pay self-assessment tax under Sec 140A and validate advance tax instalments. Upload ITR JSON on incometax.gov.in, e-verify via Aadhaar OTP / DSC / EVC, and download ITR-V acknowledgement.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CD audit</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-verify ITR-V</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="100" y="55" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Filing Sequence</text>
                        <text x="100" y="80" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">31 Aug -> Non-audit</text>
                        <text x="100" y="98" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">30 Sep -> Form 3CD</text>
                        <text x="100" y="116" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">31 Oct -> Audit ITR</text>
                        <text x="100" y="138" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">e-verify within 30d</text>
                    </svg>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Document Checklist for Trading Business ITR</h2>
            <div class="content-text">
                
                
            <p>The trading business ITR document checklist groups identity, books, GST, cash discipline, and audit-only items. Group your documents under these headings.</p>
            <h3 style="margin-top:24px;color:var(--blue);">Group A - Identity and Authorisation</h3>
            <ul>
                <li>PAN, Aadhaar of proprietor / authorised signatory</li>
                <li>DSC (Digital Signature Certificate) for Pvt Ltd / LLP</li>
                <li>Certificate of Incorporation (Pvt Ltd), LLP Agreement (LLP), Partnership Deed (firm), HUF deed</li>
                <li>Board resolution authorising the signatory (corporate cases)</li>
                <li>State Shop and Establishment / Trade Licence; weights and measures certificate where applicable</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group B - GST Registration and Returns</h3>
            <ul>
                <li>GST registration certificate (every state where branch / godown exists)</li>
                <li>GSTR-1 monthly outward supply returns for FY 2025-26</li>
                <li>GSTR-3B summary returns for FY 2025-26</li>
                <li>GSTR-9 annual return; GSTR-9C reconciliation if applicable</li>
                <li>Branch transfer register with IGST / ITC mapping</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group C - Books of Accounts and Inventory</h3>
            <ul>
                <li>Sales register (item-wise, party-wise) for FY 2025-26</li>
                <li>Purchase register (item-wise, party-wise) for FY 2025-26</li>
                <li>Item-wise stock register: opening, purchases, sales, branch transfers, closing</li>
                <li>ICDS-II inventory valuation working - FIFO or Weighted Average Cost</li>
                <li>Slow-moving / obsolete stock writedown working with management note</li>
                <li>Trial balance, P&amp;L Account, and Balance Sheet as on 31 March 2026</li>
                <li>Fixed asset register and depreciation schedule</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group D - Bank, Cash, and Ledgers</h3>
            <ul>
                <li>Bank statements (current and OD accounts) for the entire FY</li>
                <li>Customer ledger with PAN of corporate buyers</li>
                <li>Supplier ledger with PAN of major vendors</li>
                <li>Cash book and petty cash log (Sec 269ST and Sec 40A(3) audit)</li>
                <li>Daily cash receipt register (Sec 269ST high-risk segments - festival, mandi, bullion)</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group E - TDS, AIS, and Tax Credits</h3>
            <ul>
                <li>Form 26AS (consolidated TDS / TCS / advance tax statement)</li>
                <li>AIS (Annual Information Statement) and TIS (Taxpayer Information Summary)</li>
                <li>Form 16A from corporate buyers</li>
                <li>TDS payment challans and Form 26Q acknowledgements</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group F - Cross-Border (Importers / Exporters)</h3>
            <ul>
                <li>IEC certificate copy</li>
                <li>Customs documents - Bill of Entry for imports, Shipping Bill for exports</li>
                <li>Advance Authorisation / EPCG licence (if applicable)</li>
                <li>Bank Realisation Certificate (BRC) / FIRC</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group G - Audit (Where Applicable)</h3>
            <ul>
                <li>For Section 44AB tax audit: Form 3CA / 3CB + Form 3CD 44 clauses</li>
                <li>CA UDIN for audit signing</li>
                <li>Engagement letter and management representation letter</li>
                <li>Audited financial statements with Notes</li>
            </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trading Business ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>Section 44AD Rs 3 crore digital threshold misread</strong><br>The Rs 3 crore (vs Rs 2 crore) limit applies only when BOTH cash receipts AND cash payments are each below 5 percent of total. Many traders meet the receipts test (digital UPI, RTGS) but fail the payments test (informal vendor cash, daily wage to handlers, mandi yard fees in cash).</td>
                            <td>Patron's quarterly cash mix dashboard tracks both receipts and payments, with vendor digital onboarding before year-end. We model the Sec 44AD lock-out cost under Sec 44AD(4) before electing in or out, and prepare the 5-year continuity decision memo.</td>
                        </tr>
                        <tr>
                            <td><strong>Section 145A inclusive method ignored</strong><br>Many small traders compute turnover net of GST, missing the Section 145A inclusive method substituted by Finance Act 2018. A trader with Rs 1.85 crore net sales actually has Rs 2.18 crore inclusive turnover (at 18 percent GST average) - crossing the Sec 44AD limit and triggering tax audit.</td>
                            <td>Patron's reconciliation aligns books with GSTR-9 turnover (which is inclusive of GST collected) and Schedule BP. We document inclusive turnover at quarter-end so threshold tests are not surprised at year-end.</td>
                        </tr>
                        <tr>
                            <td><strong>Inter-state branch transfer reported as revenue</strong><br>Multi-state traders with separate state GSTINs frequently report branch transfers as sales in their books because IGST is charged on the deemed supply. For income tax, these are intra-PAN transfers and NOT revenue under Section 5. Inflating revenue this way has triggered Sec 44AB audit applicability for traders who would otherwise have been below threshold.</td>
                            <td>Patron's branch transfer reconciliation removes them from Schedule BP turnover. We reconcile IGST charged at sending branch with ITC claimed at receiving branch, and document Schedule I para 2 CGST treatment with Rule 28 valuation memo.</td>
                        </tr>
                        <tr>
                            <td><strong>Section 269ST cash receipt at festival or mandi peaks</strong><br>Festival season (Diwali, Eid, Navratri) often produces single-day cash receipts above Rs 2 lakh from one customer (gold / electronics / apparel). Mandi yard auctions and bullion lots routinely cross the limit. Sec 271DA imposes 100 percent penalty on the receiver, imposed by the Joint Commissioner.</td>
                            <td>Patron's preventive solution: a daily cash limit register, mandatory UPI / NEFT / cheque for any single-day transaction exceeding Rs 1.5 lakh, and split-event documentation where genuine. We audit cash receipt logs pre-filing.</td>
                        </tr>
                        <tr>
                            <td><strong>Gross profit ratio collapse triggering Section 145(3)</strong><br>If GP ratio drops sharply year-on-year without documented cause, the Assessing Officer may reject books under Section 145(3) and apply best-judgement assessment under Section 144. Common causes: bulk-discount campaigns, slow-moving inventory writedown, freight spikes, GST rate cuts on stock.</td>
                            <td>Patron's solution: a year-end GP ratio defensibility memo with line-item reconciliation that pre-empts AO scrutiny. We tie each ratio movement to verifiable causes - invoice-level discount rate, item-level NRV writedown, freight cost ledger, GST rate change effective date.</td>
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
            <h2 class="section-title">Fees for ITR Filing - Trading Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Single-state proprietor (Sec 44AD presumptive)</td><td>Rs 7,500 (Exl GST and Govt. Charges)</td><td>ITR-4, GSTR-9 review, basic reconciliation</td></tr>
                        <tr><td>Single-state proprietor (regular books, no audit)</td><td>Rs 12,500 (Exl GST and Govt. Charges)</td><td>ITR-3, Schedule BP, ICDS-II inventory schedule</td></tr>
                        <tr><td>Trading firm / LLP (audit case)</td><td>Rs 25,000+ (Exl GST and Govt. Charges)</td><td>ITR-5 + Form 3CD audit + ICDS-II + Sec 269ST review</td></tr>
                        <tr><td>Multi-state trader (3+ state GSTINs)</td><td>Rs 45,000+ (Exl GST and Govt. Charges)</td><td>ITR + multi-state branch transfer reconciliation + audit</td></tr>
                        <tr><td>Pvt Ltd trader (audit + multi-state + cross-border)</td><td>Rs 80,000+ (Exl GST and Govt. Charges)</td><td>ITR-6, audit, branch consolidation, customs reconciliation, Form 3CEB if cross-border</td></tr>
                        <tr><td>Sec 44AD vs regular books decision memo (standalone)</td><td>Rs 4,999 (Exl GST and Govt. Charges)</td><td>5-year continuity check, Sec 44AD(4) lock-out modelling, ITR-4 vs ITR-3 form selection</td></tr>
                        <tr><td>Sec 145A inclusive turnover reconciliation</td><td>Rs 5,999 (Exl GST and Govt. Charges)</td><td>Books vs GSTR-9 reconciliation; threshold pre-test for Sec 44AD / 44AB / MSME</td></tr>
                        <tr><td>ICDS-II inventory schedule (audit cases)</td><td>Rs 9,999 (Exl GST and Govt. Charges)</td><td>FIFO or Weighted Average; item-level NRV; Form 3CD Clause 14 disclosure</td></tr>
                        <tr><td>Sec 269ST cash receipt audit</td><td>Rs 7,999 (Exl GST and Govt. Charges)</td><td>Customer-wise daily cash review; festival / mandi / bullion peak flagging</td></tr>
                        <tr><td>Inter-state branch transfer reconciliation</td><td>Rs 9,999 (Exl GST and Govt. Charges)</td><td>Schedule I CGST deemed supply vs Schedule BP non-revenue treatment</td></tr>
                        <tr><td>GP ratio defensibility memo (annual)</td><td>Rs 7,999 (Exl GST and Govt. Charges)</td><td>Year-on-year reconciliation with verifiable cause documentation</td></tr>
                        <tr><td>Section 44AB Tax Audit (Form 3CD) (add-on)</td><td>Rs 14,999+ (Exl GST and Govt. Charges)</td><td>Form 3CA / 3CB and Form 3CD 44 clauses, CA UDIN, multi-state memo</td></tr>
                        <tr><td>Form 26Q TDS quarterly filing</td><td>Rs 2,999 per quarter (Exl GST and Govt. Charges)</td><td>Sec 194C / 194H / 194Q TDS filings with Form 16A</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td><strong>Starting Rs 7,500 (Exl GST and Govt. Charges)</strong></td><td>Single-state proprietor presumptive floor; tiered upward by entity, audit, branches</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Trading Businesses consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%2015-minute%20Section%2044AD%20vs%20regular%20books%20decision%2C%20Section%20269ST%20cash%20audit%2C%20and%20ICDS-II%20inventory%20review%20for%20my%20trading%20business." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        
                        <tr><td>Single-state proprietor presumptive (Sec 44AD)</td><td>3-5 working days</td><td>31 August 2026 (extended from 31 July)</td></tr>
                        <tr><td>Single-state regular books non-audit</td><td>5-8 working days</td><td>31 August 2026</td></tr>
                        <tr><td>Audit case (Form 3CD + ITR)</td><td>12-18 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (audit ITR)</td></tr>
                        <tr><td>Multi-state trader (3+ state GSTINs)</td><td>15-25 working days</td><td>31 October 2026</td></tr>
                        <tr><td>Pvt Ltd trader with cross-border + TP</td><td>25-40 working days</td><td>30 November 2026 if Section 92E TP</td></tr>
                        <tr><td>Sec 44AD vs regular books decision memo</td><td>2-3 working days</td><td>Lock at engagement onset, before opt-in</td></tr>
                        <tr><td>Sec 145A inclusive turnover reconciliation</td><td>3-5 working days</td><td>Quarter-end recommended</td></tr>
                        <tr><td>ICDS-II inventory schedule</td><td>5-7 working days</td><td>Year-end before Form 3CD filing</td></tr>
                        <tr><td>Sec 269ST cash receipt audit</td><td>3-5 working days</td><td>Quarterly during high-risk seasons</td></tr>
                        <tr><td>Inter-state branch transfer reconciliation</td><td>5-10 working days</td><td>Quarterly with GSTR-1 cycle</td></tr>
                        <tr><td>Belated / revised return Sec 139(4) / (5)</td><td>3-5 working days</td><td>31 December 2026 with Sec 234F fee</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Urgency note:</strong> Sec 44AD opt-out below 8 / 6 percent triggers a 5-year lock-out from the scheme - opt-out decisions must be made carefully. Form 3CD tax audit must be filed by 30 September 2026 - one month before audit-case ITR. Sec 269ST cash receipts above Rs 2 lakh trigger 100 percent penalty under Sec 271DA (Joint Commissioner) - mandate UPI / NEFT for any single-day customer transaction above Rs 1.5 lakh during Diwali, Eid, Navratri, mandi auction, bullion, and scrap collection peaks. Sec 40A(3) cash payments above Rs 10,000 (Rs 35,000 transporters) are 100 percent disallowed - vendor cash settlements must be moved to bank / UPI before year-end. GP ratio sharp drops without documentation invite Section 145(3) book rejection.

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
            <h2 class="section-title">Why Trading Businesses Hire a CA Instead of DIY Filing</h2>
        </div>
        
            <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/></svg></div>
                    <h3>Sec 44AD Election Firewall</h3>
                    <p>5-year continuity rule under Sec 44AD(4) and 5-year lock-out on opt-out tested before opting in. Receipts plus payments digital threshold (Rs 3 crore) verified separately. ITR-4 vs ITR-3 form selection memo locked at engagement onset for the project's life.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
                    <h3>Sec 145A Inclusive Method</h3>
                    <p>GST included correctly so Rs 44AD and Rs 44AB threshold tests are not missed. Net-of-GST computation hides the inclusive turnover - we run the inclusive method per Finance Act 2018 and reconcile with GSTR-9 to ensure no surprise threshold trigger at year-end.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
                    <h3>ICDS-II Inventory Discipline</h3>
                    <p>FIFO or Weighted Average documented with item-level NRV writedown. LIFO is not permitted per CBDT Notification 87/2016. Slow-moving and obsolete stock written down with documented basis. Form 3CD Clause 14 disclosure for audit cases. Year-on-year consistency check.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                    <h3>Sec 269ST Cash Receipt Firewall</h3>
                    <p>Joint Commissioner-proof memo on festival / mandi / bullion peaks. Daily cash receipt register with party-wise aggregation. Mandatory UPI / NEFT / cheque for single-day transactions above Rs 1.5 lakh. Pre-empts Sec 271DA 100 percent penalty on the receiver.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></div>
                    <h3>Sec 40A(3) Cash Payment Audit</h3>
                    <p>Rs 10,000 cash payment limit log per vendor per day. Rs 35,000 for transporters. Petty cash logs reviewed pre-filing. Prevents 100 percent disallowance of vendor settlements - common in informal vendor settlements, mandi yard fees, daily wage to handlers, freight to small operators.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
                    <h3>Branch Transfer Reconciliation</h3>
                    <p>Intra-PAN transfers correctly excluded from revenue. IGST charged at sending branch reconciled with ITC at receiving branch. Schedule BP turnover reflects only third-party sales. One Mumbai-based three-state FMCG distributor avoided a Rs 11.6 crore inflated turnover and the consequent Sec 44AB exposure through this reconciliation.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                    <h3>GP Ratio Defensibility</h3>
                    <p>Pre-filed memo prevents Sec 145(3) book rejection and Sec 144 best-judgement assessment. Year-on-year and segment-wise GP ratio reconciliation. Each ratio movement tied to verifiable causes - bulk discount realisation, slow-moving stock writedown, freight cost spikes, GST rate changes.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="2"/><path d="M2 8h20M8 2v20"/></svg></div>
                    <h3>Multi-State PAN-Level Consolidation</h3>
                    <p>One PAN, multiple state GSTINs, one defensible Schedule BP. Section 25 CGST 'distinct persons' treated correctly under Schedule I para 2 for GST and as intra-PAN transfers for income tax. Multi-state traders handled across Pune, Mumbai, Delhi, and Gurugram offices plus remote delivery nationwide.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                    <h3>Time Saving - 60+ Hours Absorbed</h3>
                    <p>Sec 44AD election memo, Sec 145A inclusive turnover, ICDS-II inventory schedule, Sec 269ST and 40A(3) cash audit, branch transfer reconciliation, GP ratio defensibility - 60+ hours of internal CFO / finance team work absorbed by Patron CAs. Owners and finance heads stay focused on procurement, sales, and branch operations.</p>
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
                
                
            <p style="font-size:16px;color:var(--text-dark);line-height:1.7;"><strong>Trust banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience | 1,500+ Trading Enterprise Engagements</p>
            <div style="margin-top:24px;padding:24px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:8px;">
                <p style="margin-bottom:12px;font-style:italic;color:var(--text-dark);font-size:15px;line-height:1.7;">"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing."</p>
                <p style="margin:0;font-weight:600;color:var(--blue);">- Nishikant Gurav, Google Review</p>
            </div>
            <div style="margin-top:16px;padding:24px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:8px;">
                <p style="margin-bottom:12px;font-style:italic;color:var(--text-dark);font-size:15px;line-height:1.7;">"Took minimum time, really impressive acumen. And it's not expensive at all."</p>
                <p style="margin:0;font-weight:600;color:var(--blue);">- Rajib Dutta, Google Review</p>
            </div>
            <div style="margin-top:24px;padding:20px;background:#F5F8FE;border-radius:8px;">
                <p style="margin:0;color:var(--text-dark);line-height:1.7;"><strong style="color:var(--blue);">Outcome proof:</strong> One Mumbai-based three-state FMCG distributor avoided a Rs 11.6 crore inflated turnover (caused by branch transfers reported as sales) and the consequent tax audit + Sec 271B exposure by Patron's branch reconciliation - delivering a clean ITR-5 with the correct Rs 7.4 crore third-party turnover.</p>
            </div>
            <p style="margin-top:24px;color:var(--text-muted);font-size:14px;">Trusted by 1,500+ trading enterprises across India - kirana retailers, FMCG distributors, electronics dealers, agri-commodity traders, scrap merchants, and mandi commission agents - plus enterprise clients including Hyundai, Asian Paints, and Bridgestone. With offices in 4 cities (Pune, Mumbai, Delhi, Gurugram), Patron Accounting serves businesses across India both in-person and remotely.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY / In-house Junior vs Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>DIY / In-house Junior</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Sec 44AD eligibility test</td><td>Often misses payments-side digital test</td><td>Receipts + payments quarterly cash mix dashboard</td></tr>
                        <tr><td>Sec 145A inclusive method</td><td>Net of GST (incorrect)</td><td>Inclusive computation reconciled with GSTR-9</td></tr>
                        <tr><td>ICDS-II inventory</td><td>Cherry-picked / LIFO (non-compliant)</td><td>FIFO or Weighted Average with item-level NRV</td></tr>
                        <tr><td>Sec 269ST cash audit</td><td>Often missed - 100 percent penalty risk</td><td>Daily cash receipt register + festival / mandi peak review</td></tr>
                        <tr><td>Sec 40A(3) cash payment</td><td>Lumped into 'misc expenses'</td><td>Rs 10,000 cash payment log per vendor per day</td></tr>
                        <tr><td>Branch transfer treatment</td><td>Reported as revenue (inflates turnover)</td><td>Excluded from Schedule BP, IGST / ITC mapped</td></tr>
                        <tr><td>GP ratio</td><td>Reported without explanation</td><td>Year-on-year defensibility memo</td></tr>
                        <tr><td>Multi-state consolidation</td><td>Branch-wise filing without PAN view</td><td>One PAN, multiple state GSTINs, one defensible Schedule BP</td></tr>
                        <tr><td>Scrutiny defence</td><td>Reactive, no pre-filed memo</td><td>Pre-filed paper on 44AD, 145A, ICDS-II, branch transfer</td></tr>
                        <tr><td>Form 3CD audit clauses (14, 18, 21, 31, 35)</td><td>Generic responses</td><td>Trader-specific: inventory method, cash trail, quantitative details</td></tr>


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
                
                
            <p>Trading businesses frequently need adjacent compliance work. We bundle these:</p>
            <ul>
                <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - cross-entity ITR coverage and form selection guide for individuals, businesses, and companies</li>
                <li><a href="/itr-for-business">ITR for Business (HUB - non-corporate entity types)</a> - sole prop, partnership, LLP, HUF ITR coverage with Section 44AB tax audit</li>
                <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / Public Ltd / OPC corporate ITR-6 with Section 115BAA / 115BAB regime check</li>
                <li><a href="/tax-audit">Tax Audit (Section 44AB)</a> - Form 3CA-3CD or 3CB-3CD with 44 clauses and CA UDIN for traders above turnover threshold</li>
                <li><a href="/accounting-services-for-trading-industry">Accounting Services for Trading Industry</a> - full-stack monthly bookkeeping, item-wise stock register, branch transfer ledger, GP ratio dashboards</li>
                <li><a href="/stock-audit">Stock Audit</a> - physical stock verification, ICDS-II valuation review, slow-moving and obsolete stock writedown</li>
                <li><a href="/tds-return">TDS Return Filing</a> - Form 26Q quarterly filing for Section 194C contractor, Section 194H commission, Section 194Q goods purchase</li>
                <li><a href="/income-tax-notice">Income Tax Notice Handling</a> - Section 142(1) / 143(3) / 145(3) / 147 / 148 scrutiny response for traders</li>
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
                
                
            <p>Every claim, threshold, percentage, and deadline cited on this page is anchored to the governing statute. Patron Accounting tracks these provisions through ICAI publications, CBDT / CBIC notifications, ITAT / High Court rulings, and Finance Act amendments. Below is the consolidated regulatory framework for trading business ITR.</p>
            <h3 style="margin-top:24px;color:var(--blue);">Income-tax Act 1961 - Direct Tax</h3>
            <ul>
                <li><strong>Section 139(1):</strong> Return filing obligation</li>
                <li><strong>Section 44AB:</strong> Tax audit threshold of Rs 1 crore (Rs 10 crore if 95 percent receipts and payments are non-cash, per Finance Act 2020)</li>
                <li><strong>Section 44AD:</strong> Presumptive scheme for trading business - turnover up to Rs 2 crore (Rs 3 crore if 95 percent receipts and payments are non-cash, per Finance Act 2023). Deemed profit 8 percent (cash) / 6 percent (digital). 5-year continuity rule under Sec 44AD(4); 5-year lock-out on opt-out. Eligible: resident individual, HUF, partnership firm (NOT LLP). Excluded: commission agents, brokers, transporters under Sec 44AE</li>
                <li><strong>Section 145A</strong> (substituted by Finance Act 2018): Inclusive method - GST, customs duty, and other indirect taxes included in the value of sales, purchases, and inventory. Tax-neutral on net profit</li>
                <li><strong>Section 145(3):</strong> Assessing Officer may reject books if not satisfied with correctness or completeness; best-judgement assessment under Sec 144 follows</li>
                <li><strong>Section 269ST / 271DA:</strong> Bars cash receipt above Rs 2 lakh from one person in a single day, single transaction, or one event; 100 percent penalty on receiver</li>
                <li><strong>Section 40A(3):</strong> Any payment to a single person in a day exceeding Rs 10,000 in cash is 100 percent disallowed (Rs 35,000 for transporters)</li>
                <li><strong>Section 44AA:</strong> Books of accounts mandatory if business turnover exceeds Rs 25 lakh OR business income exceeds Rs 2.5 lakh</li>
                <li><strong>Section 234F / 234A / 234B / 234C:</strong> Late filing fee and interest at 1 percent per month</li>
                <li><strong>Section 271B:</strong> Tax audit default penalty 0.5 percent of turnover or Rs 1.5 lakh whichever is lower</li>
                <li><strong>Section 270A:</strong> Under-reporting / mis-reporting penalty at 50 percent / 200 percent of tax sought to be evaded</li>
                <li><strong>ICDS-II Valuation of Inventories</strong> (CBDT Notification 87/2016 dated 29 September 2016): Inventory at lower of cost or net realisable value using FIFO or Weighted Average Cost; LIFO not permitted; consistency requirement</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">CGST Act 2017 - Indirect Tax</h3>
            <ul>
                <li><strong>Section 25 read with Schedule I para 2:</strong> Separate state GSTINs treated as 'distinct persons'; inter-state stock transfers between distinct persons are deemed supplies</li>
                <li><strong>Rule 28 CGST:</strong> Valuation of branch transfers - 90 percent of price charged to unrelated customer or open market value</li>
                <li><strong>Section 24:</strong> Mandatory GST registration for inter-state suppliers regardless of turnover; intra-state above Rs 40 lakh (goods) / Rs 20 lakh (services)</li>
                <li><strong>GSTR-1, GSTR-3B, GSTR-9, GSTR-9C:</strong> Periodic returns and annual reconciliation</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Other Statutes and Authorities</h3>
            <ul>
                <li><strong>Customs Act 1962 + Foreign Trade Policy:</strong> IEC, Bill of Entry for imports, Advance Authorisation for cross-border traders</li>
                <li><strong>FSS Act 2006:</strong> FSSAI registration / state / central licence for food traders</li>
                <li><strong>State Shop and Establishment Act:</strong> Trade licence, weights and measures, working hours</li>
                <li><strong>Companies Act 2013:</strong> AOC-4, MGT-7 for Pvt Ltd traders; Limited Liability Partnership Act 2008 - LLP-11 for LLP traders</li>
                <li><strong>Finance Act 2017</strong> (Sec 269ST insertion), Finance Act 2018 (Sec 145A inclusive method), Finance Act 2020 (Sec 44AB Rs 10 cr digital), Finance Act 2023 (Sec 44AD Rs 3 cr digital)</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Government Source Links</h3>
            <ul>
                <li><a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax e-Filing Portal (CBDT)</a></li>
                <li><a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Portal (CBIC)</a></li>
                <li><a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department - Notification 87/2016 ICDS-II</a></li>
                <li><a href="https://www.dgft.gov.in/" target="_blank" rel="noopener">DGFT Portal - IEC for cross-border traders</a></li>
            </ul>


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
                    <p class="faq-expanded__lead">Answers to the most common questions traders, wholesalers, and retailers ask before filing ITR.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a wholesale trader file?</h3>
                        <div class="faq-expanded__a"><p>A private limited or listed wholesale company files ITR-6. An LLP or partnership firm wholesaler files ITR-5 (LLP cannot use Sec 44AD presumptive). A proprietor wholesaler with regular books files ITR-3, while one opting for the Section 44AD presumptive scheme up to Rs 2 crore turnover (Rs 3 crore if 95 percent of receipts and payments are non-cash) files ITR-4. HUF and partnership firms (other than LLP) are eligible for Sec 44AD.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can a retail trader use Section 44AD presumptive scheme?</h3>
                        <div class="faq-expanded__a"><p>Yes. Retail traders run as proprietorship, partnership firm (other than LLP), or HUF can opt for Section 44AD presumptive taxation up to Rs 2 crore turnover (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023). Deemed profit is 8 percent on cash receipts and 6 percent on digital. The 5-year continuity rule under Sec 44AD(4) applies - opting out below the deemed rate triggers a 5-year lock-out. LLPs and companies are not eligible. Commission agents and brokers are also excluded.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When does tax audit apply for a trading business?</h3>
                        <div class="faq-expanded__a"><p>Tax audit applies under Section 44AB if turnover exceeds Rs 1 crore in a financial year. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash - achievable for wholesalers with UPI customer collection and bank vendor settlements. Form 3CD report is due 30 September 2026 and the ITR by 31 October 2026 for AY 2026-27. Penalty under Sec 271B is 0.5 percent of turnover or Rs 1.5 lakh whichever is lower.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is turnover computed for a trading business?</h3>
                        <div class="faq-expanded__a"><p>Under Section 145A as substituted by Finance Act 2018 (inclusive method), turnover includes GST, customs duty, and other indirect taxes collected on sales. Returns and rebates are deducted. Branch transfers between same-PAN-different-state GSTINs are NOT included in turnover (these are deemed supplies for GST under Schedule I CGST but intra-PAN transfers for income tax). The inclusive turnover is what determines Sec 44AD (Rs 3 crore digital), Sec 44AB (Rs 10 crore digital), and MSME thresholds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the Section 269ST cash receipt limit for traders?</h3>
                        <div class="faq-expanded__a"><p>Section 269ST of the Income-tax Act 1961 bars cash receipt of Rs 2 lakh or more from one person in a single day, single transaction, or for one event. Section 271DA imposes a penalty equal to 100 percent of the cash received - imposed by the Joint Commissioner. Festival sales (Diwali, Eid, Navratri), mandi auctions, scrap collection peaks, and bullion / jewellery transactions are common traps. Mandate UPI, NEFT, RTGS, or cheque for any single-day transaction above Rs 1.5 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is inventory valued under ICDS-II for trading businesses?</h3>
                        <div class="faq-expanded__a"><p>ICDS-II (CBDT Notification 87/2016 dated 29 September 2016) mandates inventory valuation at the lower of cost or net realisable value, using FIFO or Weighted Average Cost. LIFO is not permitted. Once a method is selected, it must be applied consistently across years - changes require disclosure. For trading businesses, item-by-item NRV writedown is required for slow-moving, obsolete, or damaged stock. Form 3CD Clause 14 requires disclosure of the method used in audit cases.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is inter-state branch transfer revenue for income tax?</h3>
                        <div class="faq-expanded__a"><p>No. For income tax, inter-state branch transfers between same-PAN-different-state GSTINs are intra-PAN transfers and NOT revenue. Section 5 of the Income-tax Act taxes income that accrues; branch transfers do not generate accrual at the entity level. For GST, however, these are deemed supplies under Schedule I para 2 of the CGST Act (since branches with separate state GSTINs are 'distinct persons' under Sec 25(4)) with valuation under Rule 28 - IGST is charged at sending branch and ITC available at receiving branch. Schedule BP turnover excludes branch transfers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What gross profit ratio is acceptable for a wholesale trader?</h3>
                        <div class="faq-expanded__a"><p>There is no statutory minimum GP ratio - the test is internal consistency and industry norms. Wholesale FMCG distributors typically operate at 3 to 7 percent, electronics at 5 to 12 percent, garment at 8 to 18 percent, and agri-commodity at 1 to 5 percent. Year-on-year variations should be reconcilable to verifiable causes - bulk discounts, slow-moving writedowns, freight changes, GST rate cuts. Sharp drops without documentation may invite Section 145(3) rejection of books and best-judgement assessment under Section 144. Patron prepares a year-end GP defensibility memo.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
            <p><strong>Q: Which ITR for a Pvt Ltd trader?</strong><br>A: ITR-6, due 31 October 2026 if audited.</p>
            <p><strong>Q: Tax audit threshold?</strong><br>A: Rs 1 crore; Rs 10 crore if 95 percent non-cash.</p>
            <p><strong>Q: Sec 44AD presumptive limit?</strong><br>A: Rs 2 crore (Rs 3 crore digital). Deemed profit 8 percent / 6 percent.</p>
            <p><strong>Q: Sec 269ST cash receipt limit?</strong><br>A: Rs 2 lakh per day / transaction / event. 100 percent penalty under Sec 271DA.</p>
            <p><strong>Q: Sec 40A(3) cash payment limit?</strong><br>A: Rs 10,000 per person per day (Rs 35,000 for transporters). 100 percent disallowance.</p>
            <p><strong>Q: Inventory method allowed?</strong><br>A: ICDS-II - FIFO or Weighted Average. LIFO not permitted.</p>
            <p><strong>Q: Inter-state branch transfer revenue?</strong><br>A: No for income tax. Yes (deemed supply) for GST under Schedule I CGST.</p>
            <p><strong>Q: Sec 44AD opt-out lock-out?</strong><br>A: 5 years if profit declared below 8 / 6 percent under Sec 44AD(4).</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Recap - 3 Firm Dates for Trading Businesses (AY 2026-27)</h2>
            <div class="content-text">
                
                
            <p>Trading businesses face THREE firm dates plus rolling deadlines for AY 2026-27 (FY 2025-26):</p>
            <ul>
                <li><strong>31 August 2026</strong> - non-audit ITR-3 / ITR-4 / ITR-5 / ITR-6 under Section 139(1) (extended from 31 July)</li>
                <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB</li>
                <li><strong>31 October 2026</strong> - audit-case ITR-3 / ITR-5 / ITR-6 under Section 139(1)</li>
                <li><strong>30 November 2026</strong> - ITR for transfer pricing cases under Section 92E (cross-border traders with related-party imports)</li>
                <li><strong>31 December 2026</strong> - belated / revised return Section 139(4) / (5) with Section 234F fee</li>
                <li><strong>Quarterly advance tax</strong> - 15 June, 15 September, 15 December, 15 March (15%, 45%, 75%, 100% cumulative)</li>
                <li><strong>Quarterly TDS</strong> - 31 July, 31 October, 31 January, 31 May for Form 26Q (Sec 194C / 194H / 194Q)</li>
            </ul>
            <p style="margin-top:16px;">Rolling deadlines: GSTR-1 monthly (11th of next month); GSTR-3B monthly (20th of next month); GSTR-9 annual (31 December 2026 for FY 2025-26); branch transfer reconciliation quarterly.</p>
            <p style="margin-top:16px;font-weight:700;color:var(--orange);">Late filing triggers Section 234F fee, Section 234A interest, loss of carry-forward of business losses, Section 271B audit penalty up to Rs 1.5 lakh, plus the 100 percent penalty under Sec 271DA on cash receipts above Rs 2 lakh and 100 percent disallowance under Sec 40A(3) on cash payments above Rs 10,000. Sec 44AD opt-out below 8 / 6 percent triggers 5-year lock-out from the scheme.</p>
            <p style="margin-top:18px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Trading Business ITR with a CA Who Reads Your Stock Register and Cash Book</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p>ITR for trading businesses is the largest small-business filing segment in India and one of the most error-prone. The interplay of Section 44AD presumptive eligibility (Rs 3 crore digital threshold), Section 145A inclusive turnover method, ICDS-II FIFO and weighted average inventory, Section 269ST cash receipt firewall, Section 40A(3) cash payment limit, Schedule I CGST inter-state branch transfer, and gross profit ratio defensibility demands a CA team that has lived through both the Income-tax Act and the CGST Act in equal measure.</p>
                <p>Patron Accounting brings 15+ years of tax practice and 1,500+ trading enterprise engagements - from Rs 40 lakh kirana stores to Rs 80 crore multi-state distributors - to file your return on time, defend it under scrutiny, and structure your tax position for the years ahead. Whether your structure is a single-state proprietor wholesaler under Sec 44AD, a 3-partner family firm in mandi commission, an LLP electronics dealer, or a Pvt Ltd FMCG distributor across 5 states, the correct answer always begins with entity-type confirmation, Sec 44AD eligibility test, Sec 145A inclusive turnover, ICDS-II inventory schedule, and Sec 269ST / 40A(3) cash audit.</p>
                <p>Free 15-minute consultation - send your trial balance, GSTR-9 summary, item-wise stock register, and cash book before you pay anything. We respond within 2 hours.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%2015-minute%20Section%2044AD%20vs%20regular%20books%20decision%2C%20Section%20269ST%20cash%20audit%2C%20and%20ICDS-II%20inventory%20review%20for%20my%20trading%20business." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">We file trading business ITRs across India with offices in Pune, Mumbai, Delhi, and Gurugram, plus remote delivery for kirana retailers, FMCG distributors, and multi-state traders nationwide.</p>
            
            
                <!-- Block 2: Cross-Sell - Adjacent Trading Sector and Tax Services (national-level) -->
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
                    <a href="/tax-audit" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M21 21l-4.35-4.35"/><circle cx="11" cy="11" r="8"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Tax Audit (Sec 44AB)</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/accounting-services-for-trading-industry" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Trading Industry Accounting</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/stock-audit" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><rect x="2" y="2" width="20" height="20" rx="2"/><path d="M2 8h20M8 2v20"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Stock Audit</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/tds-return" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2v20"/><path d="M5 12l7 7 7-7"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">TDS Return Filing</div>
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
            <p><strong>Content Created:</strong> 06 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">8 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed by CA &amp; CS Team, Patron Accounting LLP. Content reviewed quarterly during ITR season; immediately after Finance Act amendments to Section 44AD / 44AB / 145A / 269ST / 40A(3); review after CBDT clarification on ICDS-II or new inventory standard; immediate review after GST rate changes affecting trading sectors (FMCG, electronics, garments, agri-commodities) and ITR form changes.</p>
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