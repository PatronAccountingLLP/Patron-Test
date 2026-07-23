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
    <title>Statutory Audit for E-commerce</title>
    <meta name="description" content="CA-led statutory audit for D2C brands, marketplaces and quick commerce - Sec 194-O TDS, Sec 52 GST TCS, returns provisioning, CAC. From Rs 1,00,000.">
    <link rel="canonical" href="/statutory-audit-for-ecommerce-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Statutory Audit for E-commerce 2026 | Patron Accounting">
    <meta property="og:description" content="CA-led statutory audit for D2C brands, marketplaces and quick commerce - Sec 194-O TDS, Sec 52 GST TCS, returns provisioning, CAC. From Rs 1,00,000.">
    <meta property="og:url" content="/statutory-audit-for-ecommerce-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-ecommerce-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Statutory Audit for E-commerce 2026 | Patron Accounting">
    <meta name="twitter:description" content="CA-led statutory audit for D2C brands, marketplaces and quick commerce - Sec 194-O TDS, Sec 52 GST TCS, returns provisioning, CAC. From Rs 1,00,000.">
    <meta name="twitter:image" content="/images/statutory-audit-for-ecommerce-companies-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/statutory-audit-for-ecommerce-companies#breadcrumb",
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
              "name": "Statutory Audit",
              "item": "/statutory-audit"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "For E-commerce Companies",
              "item": "/statutory-audit-for-ecommerce-companies"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/statutory-audit-for-ecommerce-companies#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is statutory audit mandatory for D2C and ecommerce companies in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - including every e-commerce operator, D2C brand, marketplace seller, quick-commerce operator and online aggregator - irrespective of turnover or profitability. A single-product D2C brand in stub-period year one and a national marketplace operator are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days. Every e-commerce operator additionally has compulsory CGST registration under Section 24(vi)."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between marketplace model and inventory model?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the marketplace model, the e-commerce operator is a facilitator only - it does not own the inventory. Sellers list their goods on the operator platform, and the operator earns commission. Revenue is recognised net under Ind AS 115 principal-agent test. FDI Press Note 2 of 2018 restricts single-vendor concentration to 25 percent of total sales and prohibits pricing influence. Under the inventory model, the operator owns the inventory and sells directly to buyers. Revenue is recognised gross at the selling price. The inventory model is permitted only for Indian-owned-and-controlled entities under current FDI rules."
              }
            },
            {
              "@type": "Question",
              "name": "How is Section 194-O TDS audited?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 194-O of the Income Tax Act requires every e-commerce operator to deduct TDS at 0.1 percent (reduced from 1 percent w.e.f. 1 October 2024) on the gross amount of sale credited to the e-commerce participant. The statutory auditor reconciles the Form 26AS Section 194-O credit quarter-by-quarter against the marketplace dashboard deduction report and the books of account. For operators, the quarterly Form 26Q filing, Form 16A issuance, and Rs 5 lakh annual threshold tracking for individual / HUF participants are tested. Operator-side misallocation to wrong PAN or wrong financial year is a frequent finding."
              }
            },
            {
              "@type": "Question",
              "name": "How are ecommerce returns provisioned under Ind AS 115?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Ind AS 115 paragraphs B20 to B27, revenue is recognised net of expected returns - the entity books a refund liability for consideration to be refunded and a return asset for the right to recover the returned product at the lower of original cost or NRV at the time of return. The auditor tests historical return rate by category and channel (apparel 30-35 percent on marketplaces, electronics 5-10 percent), the current-year refund liability calculation, and the return asset valuation. The 7 to 30 day return window cut-off is tested past 31 March to capture returns of March sales processed in early April."
              }
            },
            {
              "@type": "Question",
              "name": "Can customer acquisition cost be capitalised?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Generally no. Under Ind AS 38 paragraph 21, an intangible asset is recognised only if identifiable, controlled by the entity, and expected to generate future economic benefits. Paragraph 63 specifically prohibits capitalising internally generated brands and customer lists. Performance marketing, brand campaigns and influencer payments fail the identifiability test and are expensed immediately. Limited capitalisation is permitted under Ind AS 115 paragraph 91 for direct, incremental contract-acquisition costs the entity expects to recover - e.g. sales-team commission to acquire a long-term subscription, amortised over the customer-relationship period."
              }
            },
            {
              "@type": "Question",
              "name": "What TDS applies on influencer marketing payments?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Influencer payments straddle multiple TDS sections depending on contract terms. Section 194R deducts 10 percent on the aggregate value of any benefit or perquisite exceeding Rs 20,000 per financial year (effective 1 July 2022) - applicable when products are gifted in barter for promotion. Section 194C deducts 2 percent on advertising contracts. Section 194H deducts 5 percent (2 percent from 1 October 2024) on commission paid for sale referrals. Product gifting at MRP is the most-missed Section 194R risk - many D2C brands fail to deduct TDS on the product value gifted to influencers."
              }
            },
            {
              "@type": "Question",
              "name": "How is cash on delivery reconciliation audited?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "COD reconciliation is the weekly three-way match between gross order value of COD orders shipped, courier-partner weekly remittance report (Delhivery, Bluedart, Shiprocket, Xpressbees, Ekart, India Post), and the books of account. Adjustments include COD handling fees, RTO (Return to Origin), failed delivery, and reverse-logistics cost. Lost shipments above the courier insurance threshold are reviewed for write-off; courier disputes are aged and tested. The auditor verifies the weighted average RTO rate per pin code is applied to recent month COD orders for accurate revenue accrual at year-end."
              }
            },
            {
              "@type": "Question",
              "name": "Is GST registration mandatory for marketplace sellers below Rs 20 lakh?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, with a recent relaxation. Under Section 24 of the CGST Act read with Rule 31A, every person supplying goods or services through an e-commerce operator is required to obtain GST registration irrespective of the Rs 20 lakh threshold. However, with effect from 1 October 2023, GST-unregistered sellers and Composition scheme sellers are permitted to sell goods online through ECOs in their home state only, subject to conditions - aggregate turnover not exceeding the relevant threshold, supplies not made inter-state, and ECO collecting TCS at 0.5 percent."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/statutory-audit-for-ecommerce-companies#service",
          "name": "Statutory Audit for E-commerce Companies",
          "url": "/statutory-audit-for-ecommerce-companies",
          "serviceType": "Statutory Audit (E-commerce - Marketplace, D2C, Quick Commerce, ONDC)",
          "description": "CA-led statutory audit for Indian e-commerce companies - marketplace operators (Amazon, Flipkart, Myntra, Nykaa, Meesho), D2C brands, marketplace sellers, quick-commerce operators (Zepto, Blinkit, Instamart), online aggregators and ONDC participants - under Section 143 of the Companies Act, 2013, covering marketplace vs inventory model determination under FDI Press Note 2, Section 194-O 0.1 percent TDS reconciliation, Section 52 CGST 0.5 percent TCS reconciliation, Ind AS 115 returns and refund liability provisioning, Cash-on-Delivery and logistics partner reconciliation, customer acquisition cost capitalisation under Ind AS 38, and influencer payments TDS under Sections 194R / 194C / 194H.",
          "provider": {
            "@id": "/#organization"
          },
          "areaServed": {
            "@type": "Country",
            "name": "India",
            "sameAs": "https://en.wikipedia.org/wiki/India"
          },
          "about": [
            {
              "@type": "Thing",
              "name": "E-commerce in India",
              "sameAs": "https://en.wikipedia.org/wiki/E-commerce_in_India"
            },
            {
              "@type": "Thing",
              "name": "Companies Act 2013",
              "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
            },
            {
              "@type": "Thing",
              "name": "Indian Accounting Standards",
              "sameAs": "https://en.wikipedia.org/wiki/Indian_Accounting_Standards"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "E-commerce Statutory Audit Packages",
            "itemListElement": [
              {
                "@type": "Offer",
                "name": "D2C Brand / Online Business (turnover under Rs 5 crore)",
                "price": "100000",
                "priceCurrency": "INR",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "D2C on 2-3 Marketplaces (turnover Rs 5 to 25 crore)",
                "price": "250000",
                "priceCurrency": "INR",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Mid-Size D2C / Online Retailer (turnover Rs 25 to 100 crore)",
                "price": "550000",
                "priceCurrency": "INR",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Marketplace Operator (Section 24(vi) compulsory ECO)",
                "price": "1500000",
                "priceCurrency": "INR",
                "availability": "https://schema.org/InStock"
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
                        Statutory Audit for E-commerce Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trial balance, marketplace dashboards (Amazon Seller Central, Flipkart Seller Hub, Nykaa, Myntra Partner Portal), Form 26AS with Sec 194-O credits, GSTR-8 vs GSTR-9 reconciliation, returns and refund liability schedule, COD logistics remittance reports</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 1,00,000 for D2C brands and online businesses with turnover under Rs 5 crore; scales by transaction volume, marketplace count and GSTIN count</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian e-commerce company (Pvt Ltd / Public / OPC) under Section 139; LLPs above Rs 40 lakh; ECOs under compulsory CGST Section 24(vi) registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 4 to 8 weeks fieldwork; marketplace dashboard reconciliation; Section 194-O Form 26AS cross-check; returns provisioning model review; multi-state GSTR-9C bridge</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20statutory%20audit%20for%20our%20D2C%20brand%20or%20e-commerce%20company.%20Please%20share%20a%20fixed-fee%20quote." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - E-commerce Audit'/>
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
                                
<option value="statutory-audit-for-ecommerce-companies" selected>Statutory Audit for E-commerce</option>
<option value="statutory-audit">Statutory Audit (Parent)</option>
<option value="tax-audit">Tax Audit (Section 44AB)</option>
<option value="internal-audit">Internal Audit (Section 138)</option>
<option value="gst-audit">GST Audit</option>
<option value="tds-return">TDS Return Filing</option>
<option value="private-limited-company-compliance">Private Limited Compliance</option>
<option value="accounting-services-for-e-commerce-industry">Accounting for E-commerce</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our first IFC audit after we crossed Rs 50 cr turnover and listed across Amazon, Flipkart, Myntra and Nykaa. Platform-by-platform principal-agent test, quarterly Form 26AS reconciliation, and category-wise return provisioning - all in 5 weeks. Clean audit opinion accepted by Series C diligence team.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">D2</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">D2C Brand Founder</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Beauty Brand, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Section 52 TCS reconciliation across 18 states and Section 194-O quarterly Form 26Q filings used to take our team weeks every quarter. Patron centralised the GSTR-8 to GSTR-9B annual return bridge and audited the lot. We saved 3-4 weeks of finance team time on year-end close.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MO</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Marketplace CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Indian-Owned ECO, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">SA 501 dark store inventory observation at 47 stores across Mumbai, Pune and Bangalore was coordinated through Patron four-office network. Section 9(5) reverse charge testing on restaurant aggregation and Ind AS 115 timing for instant delivery were documented as KAMs - exactly what our institutional lender asked for.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">QC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Quick Commerce CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Dark Store Operator, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Operator-side Section 194-O misallocation to a related-party PAN was caught by Patron in the Q2 Form 26AS reconciliation - we corrected it with Amazon support before the Income Tax notice cycle. Saved us a TDS short-deduction interest exposure of Rs 14 lakh.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Multi-Marketplace Seller Controller</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Apparel Brand, Indiranagar</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Section 194R 10 percent TDS on product gifting at MRP was a blind spot for us across 60+ influencer contracts. Patron reviewed each contract, classified as 194R / 194C / 194H, and reconciled Form 26Q quarterly. Cleared the influencer TDS audit gap before our Series B diligence.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">IN</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Influencer Marketing Head</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">D2C Brand, Pune Koregaon Park</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">FDI Press Note 2 single-vendor 25 percent cap monitoring was a critical KAM in our audit file. Patron quarterly schedule with cap monitoring and pricing-policy declarations gave our foreign investor full visibility - no FDI compliance investigation risk. FC-GPR / FC-TRS filings clean.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Foreign-Funded Marketplace CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Inventory-Light Platform, BKC</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div>
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
                    <p>Section 194-O TDS, Section 52 CGST TCS, returns provisioning, COD reconciliation, CAC, and influencer TDS under one CA partner - delivered with transaction-volume-tiered fixed-fee pricing starting at Rs 1,00,000.</p>
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
                <a href="#what-section" class="toc-btn">What It Covers</a>
                <a href="#who-section" class="toc-btn">Who Needs It</a>
                <a href="#services-section" class="toc-btn">Patron Services</a>
                <a href="#procedure-section" class="toc-btn">6-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Issues</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Patron</a>
                <a href="#comparison-section" class="toc-btn">DIY vs Big-4 vs Patron</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">E-commerce Statutory Audit in India: A Snapshot</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - E-commerce Audit Services at a Glance</strong></p>
                    <p>Statutory audit for e-commerce companies in India is the annual independent examination of financial statements under Section 143 of the Companies Act, 2013, with seven sector-specific risk areas: marketplace vs inventory model determination under FDI Press Note 2 and Ind AS 115 principal-agent test, Section 194-O 0.1 percent TDS reconciliation by operators on participants, Section 52 CGST 0.5 percent TCS reconciliation, Ind AS 115 returns and refund liability provisioning, Cash-on-Delivery and logistics partner reconciliation, customer acquisition cost capitalisation vs expense under Ind AS 38, and influencer payments TDS under Sections 194R / 194C / 194H.</p>
                </div>
                <p><strong>Quick-Reference Summary Table</strong></p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>Companies Act 2013 - Sec 139 to 148; Income Tax Act 1961 - Sec 194-O, 194R; CGST Act 2017 - Sec 52, 9(5), 24(vi); FDI Policy - Press Note 2 of 2018</td></tr><tr><td>Applicable To</td><td>E-commerce operators (Amazon, Flipkart, Nykaa, Myntra, Meesho, Zepto, Blinkit), D2C brands, marketplace sellers, ONDC Buyer / Seller Apps, online aggregators, food / grocery / cab platforms</td></tr><tr><td>Section 194-O TDS</td><td>0.1 percent (reduced from 1 percent w.e.f. 1 October 2024) on gross sales / services credited to e-commerce participant by operator; Rs 5 lakh annual threshold for individual / HUF</td></tr><tr><td>Section 52 CGST TCS</td><td>0.5 percent (reduced from 1 percent w.e.f. 10 July 2024) collected by ECO on net taxable supplies; CGST 0.25 + SGST 0.25 intra-state or IGST 0.5 inter-state</td></tr><tr><td>GSTR-8 / GSTR-9B</td><td>Monthly TCS return by 10th + Annual return by 31 December</td></tr><tr><td>FDI Marketplace Cap</td><td>Single vendor on marketplace cannot exceed 25 percent of total sales (Press Note 2 of 2018); marketplace cannot influence pricing</td></tr><tr><td>Cost Starting From</td><td>Rs 1,00,000 (Patron - D2C brand, turnover under Rs 5 crore)</td></tr></tbody></table></div><p>E-commerce audits in India sit at the intersection of multiple regulatory regimes that did not exist together a decade ago - the Companies Act under Section 143, the Section 194-O income-tax TDS framework (effective 1 October 2020 at 1 percent and reduced to 0.1 percent from 1 October 2024), the Section 52 CGST TCS framework (rate cut to 0.5 percent from 10 July 2024), the FDI Press Note 2 of 2018 separating marketplace and inventory models with a 25 percent single-vendor cap, the Consumer Protection (E-Commerce) Rules 2020, and the Digital Personal Data Protection Act 2023.</p>
                <p>Add Ind AS 115 principal-vs-agent control test for marketplace operators, returns provisioning under paragraphs B20 to B27, customer acquisition cost treatment under Ind AS 38, and influencer payments straddling Sections 194R, 194C and 194H - the audit becomes a multi-track exercise. Patron handles all seven under a single CA partner.</p>
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
                <h2 class="section-title">What Is Statutory Audit for E-commerce Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Statutory audit for e-commerce companies is the legally mandated annual examination of financial statements under Section 143 of the Companies Act, 2013, covering seven sector-specific risk areas: marketplace vs inventory model determination, Section 194-O 0.1 percent TDS reconciliation, Section 52 CGST 0.5 percent TCS reconciliation, returns and refund liability provisioning, COD and logistics partner reconciliation, customer acquisition cost capitalisation, and influencer payments TDS.</p>
<p>It is conducted by an independent practicing Chartered Accountant holding a valid Certificate of Practice from ICAI. The audit applies to every Indian e-commerce company regardless of size or business model - a single-product D2C brand in stub-period year one and a national marketplace operator with crores of monthly transactions are equally bound. The auditor opinion under SA 700 is filed with the Registrar of Companies in Form AOC-4 within 30 days of the AGM, and Form ADT-1 intimates auditor appointment within 15 days of the board resolution.</p>
<p>Where e-commerce audits differ most from other industries is the daily-transaction velocity coupled with operator-side reporting. A typical D2C brand selling through its own website + 3 to 5 marketplaces + 2 quick-commerce platforms receives revenue across 6 to 8 settlement cycles weekly, each net of marketplace commission (5 to 30 percent), payment gateway fees, return-related debit notes, and operator-side Section 194-O TDS plus Section 52 TCS deductions. Source: <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax India</a>.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for E-commerce Audit:</strong></p>
                    
<p><strong>E-commerce Operator (ECO):</strong> Defined in Section 2(45) of CGST Act and Section 194-O of Income Tax Act - any person who owns, operates or manages a digital or electronic facility or platform for electronic commerce. Compulsory CGST registration under Section 24(vi) irrespective of turnover.</p>
<p><strong>E-commerce Participant:</strong> A resident person supplying goods, services or both - including digital products - through an ECO digital facility. Subject to Section 194-O TDS deduction by the ECO at 0.1 percent.</p>
<p><strong>Marketplace Model:</strong> ECO is a facilitator only; sellers retain inventory ownership; ECO recognises revenue net of cost (commission only). FDI Press Note 2 of 2018 restricts single-vendor concentration to 25 percent of marketplace total sales.</p>
<p><strong>Inventory Model:</strong> ECO owns the inventory and sells directly; revenue recognised gross at selling price; cost of inventory hits COGS. Cannot be combined with marketplace operations under FDI rules for foreign-funded entities.</p>
<p><strong>Section 9(5) Reverse Charge:</strong> CGST Act Section 9(5) shifts GST liability to the ECO for specified services - passenger transport (cab aggregators), accommodation (online hotel platforms below Rs 7,500 declared tariff), housekeeping (Urban Company-type platforms), and restaurant services (food delivery aggregators).</p>
<p><strong>Section 194R:</strong> Income Tax Act - 10 percent TDS on the aggregate value of any benefit or perquisite (whether convertible into money or not) exceeding Rs 20,000 in a financial year provided to a resident in connection with carrying on a business or profession. Critical for influencer marketing where products are gifted as benefit.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">E-commerce Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Audit Framework</span>
                        <strong>Sec 143 + Sec 194-O + Sec 52 + Ind AS 115</strong>
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
            <h2 class="section-title">Who Needs Statutory Audit (E-commerce)?</h2>
            <div class="content-text">
                
                
<p>Statutory audit applies to every company incorporated under the Companies Act, 2013 - no asset-size threshold and no exemption based on profitability. For e-commerce entities the applicability stacks by business model and operator role.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>E-commerce Sub-segment</th><th>Examples</th><th>Audit Layers</th></tr></thead>
<tbody>
<tr><td>Marketplace operator (ECO)</td><td>Amazon India, Flipkart, Myntra, Meesho, AJIO Luxe, Nykaa, FirstCry</td><td>Sec 143 + Ind AS 115 net revenue + GSTR-8 / 9B + FDI Press Note 2 + Sec 9(5) for specified services</td></tr>
<tr><td>Inventory model retailer (ECO)</td><td>Cloudtail-type entities, Reliance Smart, Tata Cliq direct</td><td>Sec 143 + Ind AS 115 gross revenue + inventory under Ind AS 2 + multi-state GSTR-9C</td></tr>
<tr><td>D2C brand (own website)</td><td>Mamaearth, Sugar, BoAt, Lenskart, Bombay Shaving Co, Wakefit</td><td>Sec 143 + Ind AS 115 returns provisioning + CAC under Ind AS 38 + influencer TDS</td></tr>
<tr><td>D2C brand on marketplace</td><td>Same brands listed across Amazon / Flipkart / Myntra / Nykaa</td><td>All D2C + Sec 194-O Form 26AS reconciliation + Sec 52 GSTR-8 vs books</td></tr>
<tr><td>Quick commerce / dark store</td><td>Zepto, Blinkit, Swiggy Instamart, BB Now</td><td>Sec 143 + dark store SA 501 + Ind AS 115 timing + last-mile logistics reconciliation</td></tr>
<tr><td>Food / grocery aggregator</td><td>Zomato (delivery), Swiggy (delivery), BigBasket (marketplace)</td><td>Sec 143 + Sec 9(5) restaurant services + delivery partner reconciliation</td></tr>
<tr><td>Cab / mobility aggregator</td><td>Uber India, Ola Cabs, Rapido</td><td>Sec 143 + Sec 9(5) passenger transport reverse charge + driver-partner TDS</td></tr>
<tr><td>ONDC Buyer App / Seller App / LSP</td><td>Paytm Mall ONDC, Pincode, MagicPin, Shiprocket as LSP</td><td>Sec 143 + ONDC participation rules + multi-state TCS + new compliance framework</td></tr>
</tbody>
</table>
</div>
<p><strong>Tax audit under Section 44AB</strong> applies at Rs 1 crore turnover (Rs 10 crore for digital receipts above 95 percent - typically met by most D2C brands and ECOs). CARO 2020 applies in full to all e-commerce companies; clauses 3(ii) inventory + working capital, 3(vii) statutory dues including TCS / TDS, and 3(xv) related-party (between D2C brand and group manufacturer) are particularly relevant. CGST Section 24(vi) makes registration compulsory for all e-commerce operators irrespective of turnover, and Rule 31A makes registration compulsory for sellers supplying through an ECO (excluding low-value Section 9(5) services where the operator pays GST).</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Section 143 Full-Scope Statutory Audit</td><td>Companies Act 2013 audit with CARO 2020 21-clause annexure; SA 700 / 705 reporting; Ind AS or AS framework as applicable.</td></tr>
<tr><td>Marketplace vs Inventory Model Audit (FDI + Ind AS 115)</td><td>Verification of FDI Press Note 2 of 2018 compliance for foreign-funded marketplace operators - 25 percent single-vendor cap, no pricing influence, inventory-light model; principal-vs-agent control test under Ind AS 115 paragraphs B34 to B38 - inventory risk, fulfilment responsibility, pricing discretion; net vs gross revenue presentation conclusion documented in the audit file.</td></tr>
<tr><td>Section 194-O TDS Reconciliation (Operator and Seller Sides)</td><td>For operators - quarterly Form 26Q filing with 0.1 percent TDS deducted at credit to seller account; Form 16A issuance; Rs 5 lakh threshold tracking for individual / HUF participants; Section 206AA higher rate (5 percent) for no-PAN sellers. For sellers - Form 26AS quarterly cross-check with marketplace dashboards; identification of operator-side misallocation to wrong PAN.</td></tr>
<tr><td>Section 52 CGST TCS Reconciliation</td><td>For operators - monthly GSTR-8 with 0.5 percent TCS on net taxable supplies; annual GSTR-9B by 31 December; state-wise TCS registration where suppliers are located. For sellers - GSTR-2X (auto-populated) review; cross-check with marketplace dashboard TCS deductions; ITC claim verification.</td></tr>
<tr><td>Ind AS 115 Returns and Refund Liability Provisioning</td><td>Right-of-return refund liability under paragraphs B20 to B27 - revenue recognised net of expected returns; refund liability for consideration to be refunded; return asset for right to recover product at lower of original cost or NRV; SA 540 testing of return-rate estimate against historical data; cut-off testing past 31 March for 7-30 day return windows.</td></tr>
<tr><td>Cash-on-Delivery and Logistics Partner Reconciliation</td><td>For courier-led COD (Delhivery, Bluedart, Shiprocket, Xpressbees, Ekart, India Post) - weekly remittance reconciliation to gross order value net of COD handling fees, RTO, failed delivery, and reverse-logistics cost; weighted average RTO rate per pin code; lost-shipment write-off review; courier disputes ageing.</td></tr>
<tr><td>Customer Acquisition Cost - Capitalisation vs Expense (Ind AS 38)</td><td>Review of marketing spend - performance ads (Google, Meta, Affiliate), brand campaigns, influencer payments - against Ind AS 38 criteria for intangible asset recognition; identifiability test, control test, future economic benefit test; default expense recognition unless contract with named customer creates an identifiable intangible (typically fails - CAC is expensed); contract-acquisition cost capitalisation under Ind AS 115 paragraph 91 for direct, incremental, recoverable costs.</td></tr>
<tr><td>Influencer Payments TDS Audit (Sections 194R, 194C, 194H)</td><td>Section 194R 10 percent TDS on aggregate benefit or perquisite above Rs 20,000 per year per influencer; product gifting valuation at MRP or actual cost; Section 194C 2 percent TDS where payment is contract-based advertising; Section 194H 5 percent (2 percent w.e.f. Oct 2024) where payment is commission for sale referral; Form 26Q quarterly reconciliation; Form 16A issuance.</td></tr>


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
            <h2 class="section-title">Our 6-Step E-commerce Statutory Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Each step is designed around the seven e-commerce-specific risk areas - marketplace vs inventory model, Section 194-O TDS, Section 52 CGST TCS, returns provisioning, COD reconciliation, CAC, and influencer TDS.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Engagement and Business Model Risk Profiling</h3>
        <p class="step-description">SA 210 engagement letter, Section 141 independence and non-disqualification certificate, and an e-commerce-specific business-model profile. Catalogue every revenue channel (own website + marketplaces + quick commerce + ONDC), every GSTIN, every dashboard credential, COD and prepaid mix, logistics-partner list, historical return-rate by category and channel, and marketing spend by sub-head.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 210
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Sec 141 check
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Channel catalogue
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="18" rx="6" fill="#14365F"/>
        <text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA 210</text>
        <line x1="25" y1="40" x2="80" y2="40" stroke="#F5A623" stroke-width="2"/>
        <line x1="25" y1="52" x2="90" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="25" y1="64" x2="75" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <circle cx="95" cy="74" r="9" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
        <path d="M91 74l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Scoped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Marketplace vs Inventory Model and Principal-Agent Test</h3>
        <p class="step-description">For each platform-channel, Patron applies the Ind AS 115 paragraphs B34 to B38 control test - which party is primarily responsible for fulfilling the promise, bears inventory risk, and has pricing discretion. For D2C brands listing on marketplaces, the brand is typically the principal (revenue gross at listing price). FDI Press Note 2 of 2018 compliance separately tested for foreign-funded marketplaces.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Ind AS 115 B34-B38
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                FDI 25% cap
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Net vs gross
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="20" y="15" width="80" height="12" fill="#14365F"/>
        <text x="60" y="24" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">PRINCIPAL</text>
        <line x1="30" y1="40" x2="90" y2="40" stroke="#F5A623" stroke-width="2"/>
        <line x1="30" y1="52" x2="80" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="30" y1="64" x2="85" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <circle cx="95" cy="72" r="9" fill="#FFF" stroke="#F5A623" stroke-width="1.5"/>
        <circle cx="92" cy="69" r="4" fill="none" stroke="#14365F" stroke-width="1.5"/>
                </svg>
            </div>
            <span class="illustration-label">Model Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Section 194-O TDS and Section 52 GST TCS Reconciliation</h3>
        <p class="step-description">Section 194-O TDS at 0.1 percent (reduced from 1 percent w.e.f. 1 October 2024) reconciled quarter-by-quarter against Form 26AS for each marketplace seller. Section 52 CGST TCS at 0.5 percent (reduced from 1 percent w.e.f. 10 July 2024) reconciled monthly against GSTR-8 filed by the operator. Form 26Q filing, Form 16A issuance, and Rs 5 lakh threshold tracking audited.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Form 26AS recon
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                GSTR-8 cross-check
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Threshold tracking
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <circle cx="30" cy="40" r="6" fill="#F5A623"/>
        <text x="30" y="44" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">194-O</text>
        <circle cx="60" cy="40" r="6" fill="#14365F"/>
        <text x="60" y="44" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">52</text>
        <circle cx="90" cy="40" r="6" fill="#25D366"/>
        <text x="90" y="44" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">26AS</text>
        <line x1="20" y1="58" x2="100" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
        <line x1="20" y1="68" x2="80" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Reconciled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Returns Provisioning and COD Reconciliation</h3>
        <p class="step-description">Under Ind AS 115 paragraphs B20 to B27, revenue recognised net of expected returns. Patron tests historical return rate by category and channel (apparel 30-35 percent, electronics 5-10 percent), refund liability, and return asset valuation. 7-30 day return window cut-off tested past 31 March. COD reconciliation matches courier-partner weekly remittance to gross order value net of fees, RTO, failed delivery, and reverse logistics.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                B20-B27
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Return rate
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                COD recon
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="30" y="30" width="60" height="6" rx="2" fill="#F5A623"/>
        <rect x="30" y="42" width="50" height="6" rx="2" fill="#14365F" opacity="0.5"/>
        <rect x="30" y="54" width="55" height="6" rx="2" fill="#E8712C" opacity="0.7"/>
        <rect x="30" y="66" width="45" height="6" rx="2" fill="#14365F" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Provisioned</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">CAC Capitalisation, Influencer TDS and Multi-State GST</h3>
        <p class="step-description">Customer acquisition cost tested against Ind AS 38 criteria - identifiability, control, future economic benefit; default treatment is immediate expense. Influencer payments tested across Section 194R 10 percent TDS on benefits, Section 194C 2 percent on advertising, and Section 194H 5/2 percent on commission. State-wise GSTR-9 and GSTR-9C bridge prepared for each GSTIN above Rs 5 crore.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Ind AS 38
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                194R/194C/194H
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                GSTR-9C bridge
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <line x1="25" y1="32" x2="85" y2="32" stroke="#F5A623" stroke-width="2"/>
        <line x1="25" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="25" y1="54" x2="75" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="25" y1="64" x2="80" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <circle cx="95" cy="70" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
        <path d="M90 70l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Tested</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Sign-Off, UDIN and AOC-4 Filing</h3>
        <p class="step-description">Patron audit partner signs the report under UDIN generated on the ICAI portal, annexes it to Form AOC-4, and files with Registrar of Companies within 30 days of AGM. Form MGT-7 follows within 60 days. Form 3CD tax audit closes for Section 44AB. State-wise GSTR-9 / 9C close by 31 December. Annual ECO return GSTR-9B closes by 31 December.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                UDIN
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                AOC-4 filed
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                GSTR-9B
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="60" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <line x1="25" y1="25" x2="65" y2="25" stroke="#F5A623" stroke-width="2"/>
        <line x1="25" y1="38" x2="60" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="25" y1="48" x2="55" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="25" y1="58" x2="62" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <path d="M82 45 L92 35 L92 40 L102 40 L102 50 L92 50 L92 55 Z" fill="#E8712C"/>
        <circle cx="92" cy="68" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
        <path d="M87 68l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Filed</span>
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
            <h2 class="section-title">Documents Checklist for E-commerce Audit</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents to scope and execute a statutory audit for an e-commerce company. Depth scales by transaction volume, marketplace count, and GSTIN count.</p>
<h3>Books and Accounting</h3>
<ul>
<li>Trial balance and general ledger - year-end TB plus full ledger scroll</li>
<li>Channel master and GSTIN register - own website plus each marketplace operator plus each quick-commerce platform plus each ONDC participation; GSTIN per state of operation; ECO Section 24(vi) registration</li>
</ul>
<h3>Marketplace and Operator Data</h3>
<ul>
<li>Marketplace operator dashboards - Amazon Seller Central, Flipkart Seller Hub, Myntra Partner Portal, Nykaa Seller Portal, Meesho Supplier Panel - monthly settlement reports with TCS, TDS, commission, returns, refunds</li>
<li>Payment gateway settlement reports - Razorpay, Cashfree, PayU, Paytm Payment Gateway, ICICI Eazypay - monthly settlement with MDR breakup and TDS Section 194-O if facilitator</li>
</ul>
<h3>TDS and TCS Documentation</h3>
<ul>
<li>Form 26AS and Section 194-O statements - quarter-wise Form 26AS; mapping of 194-O credits to specific marketplace operator; threshold tracking for individual / HUF</li>
<li>GSTR-8 and GSTR-9B (for operators) - monthly GSTR-8 with 0.5 percent TCS; annual GSTR-9B by 31 December</li>
<li>State-wise GSTR-9 and GSTR-9C (for sellers) - annual return and reconciliation statement for each GSTIN above Rs 5 crore</li>
<li>Form 26Q TDS returns - Section 194-O, 194R, 194C, 194H quarterly returns; Form 16A issued to deductees</li>
</ul>
<h3>Operations and Logistics</h3>
<ul>
<li>Returns and refund liability schedule - category-wise and channel-wise historical return rate; current-year refund liability; return asset valuation</li>
<li>Logistics partner remittance reports - Delhivery, Bluedart, Shiprocket, Xpressbees, Ekart, India Post - weekly COD remittance; RTO and failed delivery breakup</li>
</ul>
<h3>Marketing and Influencer</h3>
<ul>
<li>Marketing spend breakdown - performance ads (Google, Meta), brand campaigns, affiliate, influencer fees; Ind AS 38 capitalisation test for each sub-head</li>
<li>Influencer agreements and payment schedule - contract with each influencer (advertising / commission / barter), aggregate benefit per influencer per FY for Section 194R threshold</li>
</ul>
<h3>Regulatory Compliance</h3>
<ul>
<li>FDI compliance documentation (foreign-funded marketplaces) - single-vendor concentration schedule with 25 percent cap monitoring; FC-GPR / FC-TRS filings; pricing-policy declarations</li>
<li>Consumer Protection and DPDP compliance - grievance officer details, return / refund policy, data fiduciary registration (DPDP Act 2023), consent records</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common E-commerce Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td>Principal vs Agent on Multi-Marketplace D2C Brands</td><td>A D2C brand listing the same SKU on Amazon, Flipkart, Myntra and its own website may appear as a marketplace participant in operator portal language but functionally is the principal - it owns inventory, bears price and return risk, and decides listing price.</td><td>Patron applies the Ind AS 115 paragraphs B34 to B38 control test on a platform-by-platform basis; for most Indian D2C brands the conclusion is principal across the board, meaning revenue is recognised gross at the listing price and operator commission is a marketing cost. Documented as a critical accounting estimate under Ind AS 1 paragraph 122.</td></tr>
<tr><td>Section 194-O Form 26AS Misallocation by Operators</td><td>A frequent finding is the operator Form 26AS reporting allocating the Section 194-O TDS credit to a related-party PAN or to a wrong financial year. For example, a March-end sale credited in early April by the marketplace may appear in next year Form 26AS while the revenue sits in current-year P and L.</td><td>Patron reconciles every quarter Form 26AS Section 194-O credit against the marketplace dashboard deduction report and the books of account; mismatches above a materiality threshold are taken up with operator seller-support team for correction before the Income Tax Department notice cycle catches it.</td></tr>
<tr><td>CAC Capitalisation Pressure From CFO and Investors</td><td>Cash-burn-stage D2C brands and quick-commerce operators face pressure to capitalise customer acquisition cost as an intangible asset to improve EBITDA. Treating CAC as an asset typically fails the Ind AS 38 paragraph 21 recognition criteria.</td><td>Patron applies the Ind AS 38 paragraph 21 recognition criteria and the paragraph 63 prohibition against capitalising internally generated brands, mastheads and customer lists. Default conclusion is immediate expense in P and L. Limited capitalisation under Ind AS 115 paragraph 91 for direct, incremental contract-acquisition costs.</td></tr>
<tr><td>Influencer Payment TDS Section Choice</td><td>Influencer payments straddle multiple TDS sections - Section 194R (10 percent on benefits / perquisites above Rs 20,000 per year), Section 194C (2 percent on advertising contracts), and Section 194H (5 percent / 2 percent on commission for sale referrals). Product gifting at MRP is the most-missed Section 194R risk.</td><td>Patron reviews each influencer contract, classifies payment as benefit / advertising / commission, and confirms TDS deduction is at the correct section and rate. Form 26Q quarterly reconciliation; Form 16A issuance to each influencer.</td></tr>
<tr><td>Returns Provisioning Across 7-30 Day Windows</td><td>March-end sales returned in early April create a cut-off gap if the auditor does not test the historical return rate by category and channel. Apparel returns typically 30-35 percent on marketplaces; electronics 5-10 percent.</td><td>Patron tests historical return rate by category and channel; refund liability for consideration to be refunded; return asset for right to recover product at lower of original cost or NRV; SA 540 testing of return-rate estimate; cut-off testing past 31 March for the 7-30 day return window.</td></tr>
<tr><td>FDI Single-Vendor Concentration Above 25 Percent</td><td>Foreign-funded marketplace operators are restricted under FDI Press Note 2 of 2018 to 25 percent of total sales from any single vendor. Breach triggers FDI compliance investigation and rollback risk for the foreign investment.</td><td>Single-vendor concentration schedule with 25 percent cap monitoring; pricing-policy declarations; FC-GPR / FC-TRS filings verified; vendor-onboarding controls reviewed. Reported in the audit file with a critical-finding flag if concentration approaches the 25 percent threshold.</td></tr>


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
            <h2 class="section-title">E-commerce Statutory Audit Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,00,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>D2C Brand / Online Business (turnover under Rs 5 cr; own website only)</td><td>Rs 1,00,000 to Rs 2,25,000 - 4 weeks timeline</td></tr>
<tr><td>D2C on 2 to 3 Marketplaces (turnover Rs 5 to 25 cr)</td><td>Rs 2,50,000 to Rs 5,00,000 - 4 to 5 weeks timeline</td></tr>
<tr><td>Mid-Size D2C / Online Retailer (turnover Rs 25 to 100 cr; 5+ marketplaces)</td><td>Rs 5,50,000 to Rs 12,00,000 - 5 to 7 weeks timeline</td></tr>
<tr><td>Large D2C / Inventory-Model ECO (turnover Rs 100 to 500 cr)</td><td>Rs 12,50,000 to Rs 28,00,000 - 6 to 8 weeks timeline</td></tr>
<tr><td>Marketplace Operator (Section 24(vi) compulsory registration; GSTR-8 / 9B)</td><td>From Rs 15,00,000 - 6 to 9 weeks timeline</td></tr>
<tr><td>Quick Commerce / Dark Store Operator (SA 501 + Sec 9(5))</td><td>Add Rs 2,00,000 to Rs 6,00,000 - same window</td></tr>
<tr><td>Multi-State GSTR-9C Bridge (per additional GSTIN above Rs 5 cr)</td><td>Add Rs 25,000 to Rs 50,000 - same window</td></tr>
<tr><td>FDI Compliance Audit (foreign-funded marketplace)</td><td>Add Rs 2,00,000 to Rs 5,00,000 - same window</td></tr>
<tr><td>Late Filing Government Additional Fees</td><td>Rs 100 per day MCA additional fees plus Section 147 penalty - billed at actuals</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free E-commerce Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20transaction-volume-tiered%20fee%20quote%20for%20our%20D2C%20brand%20or%20marketplace%20audit." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">E-commerce Audit Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Engagement and channel profiling</td><td>Week 1 - SA 210 engagement letter; Section 141 independence; channel and GSTIN catalogue</td></tr>
<tr><td>Pre-year-end interim audit</td><td>Week 2 to 3 - Q4 substantive testing; principal-agent walkthrough; CAC sub-head review</td></tr>
<tr><td>Marketplace dashboard reconciliation</td><td>Weeks 3 to 5 - platform-by-platform settlement vs book reconciliation</td></tr>
<tr><td>Section 194-O Form 26AS quarterly cross-check</td><td>Weeks 4 to 5 - mismatch investigation with operator support</td></tr>
<tr><td>Returns and refund liability testing</td><td>Weeks 4 to 6 - historical return rate; refund liability and return asset valuation</td></tr>
<tr><td>COD logistics partner remittance audit</td><td>Weeks 5 to 6 - weekly remittance vs gross order value reconciliation</td></tr>
<tr><td>Influencer TDS and CAC capitalisation testing</td><td>Weeks 5 to 6 - Section 194R / 194C / 194H section choice; Ind AS 38 test</td></tr>
<tr><td>Multi-state GSTR-9 / GSTR-9C bridge</td><td>Weeks 6 to 7 - state-wise reconciliation</td></tr>
<tr><td>Draft report and management response</td><td>Week 7 to 8 - SA 700 / 705 review; KAM discussion for listed entities</td></tr>
<tr><td>UDIN, sign-off and AOC-4 filing</td><td>Within 30 days of AGM - Patron files AOC-4 with audit report annexed</td></tr>
<tr><td>State-wise GSTR-9 / 9C and ECO GSTR-9B filing</td><td>By 31 December - per GSTIN with aggregate turnover above Rs 5 cr; annual ECO return</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>AOC-4 must be filed within 30 days of the AGM and MGT-7 within 60 days.</strong> Form 3CD tax audit due by 31 October. State-wise GSTR-9 and GSTR-9C due by 31 December following the financial year. For e-commerce operators, GSTR-9B annual return is also due by 31 December. Monthly GSTR-8 closes on the 10th of next month. Delay in audit filings attracts Rs 100 per day MCA additional fees plus Section 147 penalty.</p>

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
            <h2 class="section-title">Why Choose Patron-Led E-commerce Audit</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
        <h3 class="feature-title">Seven Risk Areas, One CA Partner</h3>
        <p class="feature-description">Single engagement letter covers Section 143 statutory audit, Section 194-O reconciliation, Section 52 TCS, returns provisioning under Ind AS 115, CAC testing under Ind AS 38, influencer TDS audit, and state-wise GSTR-9C. No workpaper duplication.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3 class="feature-title">Platform-by-Platform Principal-Agent Test</h3>
        <p class="feature-description">Ind AS 115 paragraphs B34 to B38 control test applied to every marketplace listing - inventory risk, fulfilment responsibility, pricing discretion. Documented for KAM disclosure and Series B / C / D diligence.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
        <h3 class="feature-title">Quarter-Wise Form 26AS Reconciliation</h3>
        <p class="feature-description">Section 194-O TDS credits matched quarter-by-quarter against marketplace dashboards. Operator-side misallocation to wrong PAN or wrong financial year surfaced before Income Tax Department notice cycle.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Returns Quantified by Category and Channel</h3>
        <p class="feature-description">Historical return-rate data by category and channel (apparel 30-35 percent, electronics 5-10 percent, beauty 5-8 percent) drives the refund liability and return asset estimate - not a generic provision percentage.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="feature-title">Influencer TDS Contract-by-Contract</h3>
        <p class="feature-description">Section 194R / 194C / 194H section choice documented for each contract. Product gifting at MRP - the most-missed Section 194R risk - flagged and remediated before TDS scrutiny.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
        <h3 class="feature-title">FDI Press Note 2 Monitoring</h3>
        <p class="feature-description">25 percent single-vendor concentration cap monitored for foreign-funded marketplaces. Protects the foreign investment from regulatory rollback risk and supports clean FC-GPR / FC-TRS filings.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 class="feature-title">4-Office Pan-India Network</h3>
        <p class="feature-description">Marine Lines Mumbai, Wagholi Pune, Rohini Delhi, Golf Course Extension Road Gurugram - on-site availability for D2C brand finance teams operating from BKC, Bandra, Indiranagar, Gurugram, Hinjewadi.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">Transaction-Volume-Tiered Pricing</h3>
        <p class="feature-description">Fees scale with transaction volume, marketplace count and GSTIN count. D2C brand starts at Rs 1,00,000; mid-size online retailer Rs 5.5L to 12L; marketplace operator from Rs 15L. Transparent fixed-fee, no surprise scope-creep.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by D2C Brands, Marketplaces and Quick-Commerce Operators</h2>
            <div class="content-text">
                
                
<p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of Practice</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "Our trademark was filed and registered within the timeline Patron promised. No surprises."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- Founder, D2C Brand, Bangalore</footer>
</blockquote>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "The statutory audit was clean and completed well before deadline. No last-minute rush."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- MD, Trading Firm, Mumbai</footer>
</blockquote>
<p><strong>Indicative client logos:</strong> Trusted by Hyundai, Asian Paints, Bridgestone and a growing roster of D2C brands, marketplace sellers, and quick-commerce operators across BKC, Bandra, Indiranagar, Gurugram and Hinjewadi.</p>
<p style="margin-top:16px;"><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron services D2C brand finance teams operating from Lower Parel, Bandra Kurla Complex, Gurugram Cyber City, Delhi Saket, Pune Koregaon Park, and Hinjewadi Phase 1 / 2 / 3.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Big-Four vs Patron-Led E-commerce Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        
<tr><td>Independence under Section 141</td><td>Disqualified</td><td>Qualified</td><td>Qualified</td></tr>
<tr><td>Principal vs Agent (Ind AS 115 B34-B38)</td><td>Self-conclusion rejected</td><td>Heavy memo</td><td>Platform-by-platform documented</td></tr>
<tr><td>Section 194-O Form 26AS reconciliation</td><td>Self-reconciliation rejected</td><td>Centralised review</td><td>Quarter-wise per-operator</td></tr>
<tr><td>Returns provisioning model</td><td>Generic estimate</td><td>Heavy modelling</td><td>Category and channel historical rate</td></tr>
<tr><td>CAC Ind AS 38 capitalisation</td><td>Investor-driven capitalisation</td><td>Default expense</td><td>Default expense plus Ind AS 115 para 91 limited capitalisation</td></tr>
<tr><td>Influencer TDS (194R / 194C / 194H)</td><td>Section choice often wrong</td><td>Heavy procedure</td><td>Contract-by-contract section choice</td></tr>
<tr><td>FDI Press Note 2 single-vendor monitoring</td><td>Not performed</td><td>Annual snapshot</td><td>Quarterly schedule with cap monitoring</td></tr>
<tr><td>Cost (mid-size D2C with 5 marketplaces)</td><td>Apparent zero - unsignable</td><td>Rs 18 to 35 lakh</td><td>Rs 5.5 to 12 lakh</td></tr>


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
                
                
<p>E-commerce statutory audit pairs naturally with the parent audit service, tax and GST audits, and the e-commerce accounting service line.</p>
<ul>
<li><a href="/statutory-audit"><strong>Statutory Audit (Parent India Page):</strong></a> National statutory audit service covering methodology, applicability matrix, and CARO 2020 framework</li>
<li><a href="/tax-audit"><strong>Tax Audit (Section 44AB):</strong></a> Bundled for e-commerce companies above Rs 1 cr (or Rs 10 cr digital) turnover</li>
<li><a href="/internal-audit"><strong>Internal Audit (Section 138):</strong></a> Mandatory for ECOs above Rs 200 cr turnover; recommended for multi-marketplace D2C brands</li>
<li><a href="/gst-audit"><strong>GST Audit:</strong></a> State-wise GSTR-9C reconciliation; GSTR-8 / 9B for operators; Section 9(5) reverse charge review</li>
<li><a href="/tds-return"><strong>TDS Return Filing:</strong></a> Quarterly Form 26Q with Section 194-O, 194R, 194C, 194H; Form 16A issuance</li>
<li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance:</strong></a> ROC annual filings - ADT-1, AOC-4, MGT-7</li>
<li><a href="/accounting-services-for-e-commerce-industry"><strong>Accounting Services for E-commerce Industry:</strong></a> Peer accounting service - ongoing books, marketplace reconciliation, GST returns</li>
<li><a href="/accounting-services-for-trading-industry"><strong>Accounting Services for Trading Industry:</strong></a> Peer accounting service for B2B online traders</li>
<li><a href="/appointment-of-auditor"><strong>Appointment of Auditor:</strong></a> First auditor and AGM appointment with ADT-1 filing</li>
<li><a href="/change-of-auditor"><strong>Change of Auditor:</strong></a> Section 140 resignation and replacement</li>
</ul>


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
                
                
<p>E-commerce statutory audit sits at the intersection of the Companies Act, Income Tax Act, CGST Act, FDI Policy, Consumer Protection Rules, and DPDP Act. The legal framework below is the audit-relevant subset of these statutes.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Reference</th><th>Detail</th></tr></thead>
<tbody>
<tr><td>Governing Acts</td><td>Companies Act 2013 - Sections 139 to 148; Income Tax Act 1961 - Sections 194-O, 194R; CGST Act 2017 - Sections 52, 9(5), 24(vi); FEMA + FDI Policy Press Note 2 of 2018; Consumer Protection Act 2019 with E-Commerce Rules 2020; Digital Personal Data Protection Act 2023</td></tr>
<tr><td>Section 139 Companies Act</td><td>First auditor within 30 days; AGM appointment for 5 (individual) / 10 (firm) years</td></tr>
<tr><td>Section 143 Companies Act</td><td>Powers and duties; SA 700 / 705 reporting; CARO 2020 annexure</td></tr>
<tr><td>Section 147 Companies Act</td><td>Penalty - company Rs 25,000 to Rs 5,00,000; auditor Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh fraudulent); officer in default Rs 10,000 to Rs 1,00,000</td></tr>
<tr><td>Income Tax Section 44AB</td><td>Tax audit - turnover above Rs 1 crore (Rs 10 crore for digital receipts above 95 percent)</td></tr>
<tr><td>Income Tax Section 194-O</td><td>0.1 percent TDS (reduced from 1 percent w.e.f. 1 October 2024) by ECO on gross amount of sale credited to participant; effective 1 October 2020; Rs 5 lakh annual threshold for resident individual / HUF with PAN; 5 percent under Section 206AA for no-PAN</td></tr>
<tr><td>Income Tax Section 194R</td><td>10 percent TDS on aggregate benefit or perquisite exceeding Rs 20,000 in a financial year per resident; effective 1 July 2022; critical for influencer marketing</td></tr>
<tr><td>Income Tax Section 194C</td><td>2 percent TDS on advertising contracts (1 percent for individual / HUF); applicable to influencer contracts framed as advertising</td></tr>
<tr><td>Income Tax Section 194H</td><td>5 percent TDS on commission (reduced to 2 percent w.e.f. 1 October 2024); applicable to commission paid to ECO by seller; and to sale-referral commission paid to influencer</td></tr>
<tr><td>CGST Act Section 52</td><td>TCS at 0.5 percent (reduced from 1 percent w.e.f. 10 July 2024) by ECO on net taxable supplies; CGST 0.25 + SGST 0.25 intra-state or IGST 0.5 inter-state; filed in GSTR-8 monthly by 10th</td></tr>
<tr><td>CGST Act Section 9(5)</td><td>Reverse charge to ECO for specified services - passenger transport (cab aggregator), accommodation in unit with declared tariff up to Rs 7,500, housekeeping, restaurant services other than from premises with declared tariff above Rs 7,500</td></tr>
<tr><td>CGST Act Section 24(vi)</td><td>Compulsory GST registration for every e-commerce operator irrespective of turnover; Rule 31A applies to sellers supplying through ECO</td></tr>
<tr><td>FDI Press Note 2 of 2018</td><td>Marketplace e-commerce - 25 percent single-vendor concentration cap; cannot influence pricing; cannot have control over inventory; inventory model permitted for Indian-owned-and-controlled entities only</td></tr>
<tr><td>Consumer Protection (E-Commerce) Rules 2020</td><td>Grievance officer mandatory; return / refund policy disclosure; fair-trade practices; ECO accountability for seller compliance</td></tr>
<tr><td>Digital Personal Data Protection Act 2023</td><td>Data fiduciary obligations; consent management; data principal rights; cross-border data transfer rules</td></tr>
<tr><td>Ind AS 115 Paragraphs</td><td>B20-B27 (right of return + refund liability + return asset); B34-B38 (principal vs agent control test); 91 (incremental costs of obtaining a contract - limited capitalisation)</td></tr>
<tr><td>Ind AS 38</td><td>Intangible Assets - identifiability + control + future economic benefit; paragraph 63 prohibits capitalising internally generated brands and customer lists; CAC typically expensed</td></tr>
<tr><td>Standards on Auditing (ICAI)</td><td>SA 200, SA 500, SA 540 (Estimates - returns rate, CAC recoverability), SA 550 (Related Parties), SA 570 (Going Concern - critical for cash-burn D2C), SA 700 / 701 / 705 / 706</td></tr>
</tbody>
</table>
</div>
<p style="margin-top:12px;font-size:13px;color:var(--text-muted);">External references: <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal (CBIC)</a> | <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax India</a> | <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA21 V3 portal</a></p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - E-commerce Statutory Audit</h2>
                    <p class="faq-expanded__lead">Common questions on D2C and marketplace audit applicability, marketplace vs inventory model, Section 194-O TDS reconciliation, returns provisioning under Ind AS 115, CAC capitalisation, influencer TDS, COD reconciliation, and GST registration thresholds.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'E-commerce Statutory Audit'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for D2C and ecommerce companies in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - including every e-commerce operator, D2C brand, marketplace seller, quick-commerce operator and online aggregator - irrespective of turnover or profitability. A single-product D2C brand in stub-period year one and a national marketplace operator are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days. Every e-commerce operator additionally has compulsory CGST registration under Section 24(vi).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between marketplace model and inventory model?</h3>
                        <div class="faq-expanded__a"><p>Under the marketplace model, the e-commerce operator is a facilitator only - it does not own the inventory. Sellers list their goods on the operator platform, and the operator earns commission. Revenue is recognised net under Ind AS 115 principal-agent test. FDI Press Note 2 of 2018 restricts single-vendor concentration to 25 percent of total sales and prohibits pricing influence. Under the inventory model, the operator owns the inventory and sells directly to buyers. Revenue is recognised gross at the selling price. The inventory model is permitted only for Indian-owned-and-controlled entities under current FDI rules.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How is Section 194-O TDS audited?</h3>
                        <div class="faq-expanded__a"><p>Section 194-O of the Income Tax Act requires every e-commerce operator to deduct TDS at 0.1 percent (reduced from 1 percent w.e.f. 1 October 2024) on the gross amount of sale credited to the e-commerce participant. The statutory auditor reconciles the Form 26AS Section 194-O credit quarter-by-quarter against the marketplace dashboard deduction report and the books of account. For operators, the quarterly Form 26Q filing, Form 16A issuance, and Rs 5 lakh annual threshold tracking for individual / HUF participants are tested. Operator-side misallocation to wrong PAN or wrong financial year is a frequent finding.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are ecommerce returns provisioned under Ind AS 115?</h3>
                        <div class="faq-expanded__a"><p>Under Ind AS 115 paragraphs B20 to B27, revenue is recognised net of expected returns - the entity books a refund liability for consideration to be refunded and a return asset for the right to recover the returned product at the lower of original cost or NRV at the time of return. The auditor tests historical return rate by category and channel (apparel 30-35 percent on marketplaces, electronics 5-10 percent), the current-year refund liability calculation, and the return asset valuation. The 7 to 30 day return window cut-off is tested past 31 March to capture returns of March sales processed in early April.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can customer acquisition cost be capitalised?</h3>
                        <div class="faq-expanded__a"><p>Generally no. Under Ind AS 38 paragraph 21, an intangible asset is recognised only if identifiable, controlled by the entity, and expected to generate future economic benefits. Paragraph 63 specifically prohibits capitalising internally generated brands and customer lists. Performance marketing, brand campaigns and influencer payments fail the identifiability test and are expensed immediately. Limited capitalisation is permitted under Ind AS 115 paragraph 91 for direct, incremental contract-acquisition costs the entity expects to recover - e.g. sales-team commission to acquire a long-term subscription, amortised over the customer-relationship period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What TDS applies on influencer marketing payments?</h3>
                        <div class="faq-expanded__a"><p>Influencer payments straddle multiple TDS sections depending on contract terms. Section 194R deducts 10 percent on the aggregate value of any benefit or perquisite exceeding Rs 20,000 per financial year (effective 1 July 2022) - applicable when products are gifted in barter for promotion. Section 194C deducts 2 percent on advertising contracts. Section 194H deducts 5 percent (2 percent from 1 October 2024) on commission paid for sale referrals. Product gifting at MRP is the most-missed Section 194R risk - many D2C brands fail to deduct TDS on the product value gifted to influencers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is cash on delivery reconciliation audited?</h3>
                        <div class="faq-expanded__a"><p>COD reconciliation is the weekly three-way match between gross order value of COD orders shipped, courier-partner weekly remittance report (Delhivery, Bluedart, Shiprocket, Xpressbees, Ekart, India Post), and the books of account. Adjustments include COD handling fees, RTO (Return to Origin), failed delivery, and reverse-logistics cost. Lost shipments above the courier insurance threshold are reviewed for write-off; courier disputes are aged and tested. The auditor verifies the weighted average RTO rate per pin code is applied to recent month COD orders for accurate revenue accrual at year-end.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for marketplace sellers below Rs 20 lakh?</h3>
                        <div class="faq-expanded__a"><p>Yes, with a recent relaxation. Under Section 24 of the CGST Act read with Rule 31A, every person supplying goods or services through an e-commerce operator is required to obtain GST registration irrespective of the Rs 20 lakh threshold. However, with effect from 1 October 2023, GST-unregistered sellers and Composition scheme sellers are permitted to sell goods online through ECOs in their home state only, subject to conditions - aggregate turnover not exceeding the relevant threshold, supplies not made inter-state, and ECO collecting TCS at 0.5 percent.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>D2C brand ka audit kaise hota hai?</strong> Companies Act Section 143 ke under practicing CA dwara annual examination - Marketplace vs inventory model, Section 194-O TDS recon, Section 52 GST TCS, Ind AS 115 returns provisioning, COD reconciliation, CAC under Ind AS 38, influencer TDS.</p>
<p><strong>194-O TDS kya hai?</strong> E-commerce operator (Amazon, Flipkart, etc.) seller ke gross sales pe 0.1 percent TDS deduct karta hai (1 Oct 2024 se 1 percent ke bajaye). Form 26AS mein credit aata hai - books ke saath reconcile karna padta hai.</p>
<p><strong>Marketplace pe principal hu ya agent?</strong> Ind AS 115 B34 to B38 control test - inventory risk, fulfilment responsibility, pricing discretion. Most Indian D2C brands principal hote hain - gross revenue at listing price.</p>
<p><strong>Influencer ko gift karne pe TDS lagta hai?</strong> Haan, Section 194R ke under 10 percent TDS lagta hai aggregate benefit or perquisite Rs 20,000 se zyada ho toh. Product gifting MRP pe value hota hai. Most D2C brands ye section miss kar dete hain.</p>
<p><strong>Marketing spend capitalise kar sakte hain?</strong> Generally nahi. Ind AS 38 paragraph 63 internally generated brand aur customer list ko capitalise karne se mana karta hai. CAC default mein expense hota hai - sirf Ind AS 115 para 91 ke under direct contract acquisition cost capitalise ho sakti hai.</p>
<p><strong>GSTR-8 kya hai?</strong> E-commerce operator ka monthly TCS return - 0.5 percent CGST + 0.5 percent SGST (intra-state) ya 0.5 percent IGST (inter-state) on net taxable supplies. 10th of next month tak file karna hota hai.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AOC-4 Due Within 30 Days of AGM. Don't Miss the Window.</h2>
            <div class="content-text">
                
                
<p>AOC-4 with audit report must be filed within 30 days of the AGM and MGT-7 within 60 days. Form 3CD (tax audit) is due by 31 October. State-wise GSTR-9 and GSTR-9C are due by 31 December following the financial year. For e-commerce operators, GSTR-9B annual return is also due by 31 December. Monthly GSTR-8 closes on the 10th. For sellers active on multiple marketplaces, the Section 194-O TDS credit window closes for Form 26AS issuance by 15 June; operator-side mismatch must be corrected before that to avoid notice.</p>
<p><strong>The Section 194-O rate reduction from 1 percent to 0.1 percent took effect on 1 October 2024 - audit-year reconciliation must apply the right rate for the right period.</strong> Section 52 CGST TCS reduced from 1 percent to 0.5 percent on 10 July 2024. Delay in audit filings attracts Rs 100 per day MCA additional fees plus Section 147 penalty.</p>
<p style="margin-top:16px;"><strong>Get a transaction-volume-tiered fee quote - </strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20fixed-fee%20D2C%20or%20marketplace%20audit%20quote." target="_blank" rel="noopener">WhatsApp us</a>. Partner CA scoping call and fixed-fee quote within 24 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Seven Risk Areas. One CA Partner. Fixed Fees.</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#FFFFFF;">Statutory audit for e-commerce companies is the most rapidly evolving audit category in India - the Section 194-O TDS rate halved twice in five years, the Section 52 CGST TCS rate dropped from 1 percent to 0.5 percent in July 2024, the Digital Personal Data Protection Act 2023 added a new fiduciary regime, the Consumer Protection (E-Commerce) Rules 2020 added grievance and policy disclosure obligations, and the ONDC framework continues to evolve. Add Ind AS 115 principal-vs-agent test for every marketplace listing, returns provisioning across 7 to 30 day windows, CAC capitalisation pressure from investors, and influencer payments straddling three TDS sections - the audit becomes a multi-track exercise.</p>
<p style="color:#FFFFFF;margin-top:14px;">An audit that mishandles any one surfaces in Form 26AS mismatch notices, lender diligence, investor due diligence, or a CARO clause 3(vii) statutory-dues qualification. Patron Accounting handles the full scope under a single CA partner with e-commerce-aware risk assessment, platform-by-platform principal-vs-agent test, quarterly Form 26AS Section 194-O reconciliation, returns provisioning by category and channel, Ind AS 38 CAC capitalisation test, contract-by-contract influencer TDS section choice, FDI Press Note 2 single-vendor monitoring, and multi-state GSTR-9C bridge. Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring depth from single-website D2C brands to multi-state inventory-model ECOs.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20transaction-volume-tiered%20fee%20quote%20for%20our%20D2C%20brand%20or%20marketplace%20audit." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">E-commerce Audit Coverage Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron services D2C brand finance teams operating from BKC, Bandra, Indiranagar, Gurugram Cyber City, Delhi Saket, Pune Koregaon Park, and Hinjewadi Phase 1 / 2 / 3 - through our four-office pan-India network.</p>
            
            
<div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Our Offices Across India</div>
    <div class="pa-block-sub">On-site availability for D2C brand finance teams; remote coverage for marketplace sellers and ONDC participants nationwide.</div>
    <div class="pa-city-grid">
        <a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune (HQ)</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Parent statutory audit, complementary tax / GST / TDS audits, and peer accounting service</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Parent)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Sec 44AB)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tds-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a>
        <a href="/accounting-services-for-e-commerce-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting for E-commerce</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 May 2026 </span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months (Freshness Tier 1 - rapid e-commerce regulatory evolution). Triggers for earlier review include further Section 194-O / 194Q rate changes, Section 52 CGST TCS rate amendments, FDI Press Note revisions on marketplace cap, ONDC framework amendments, DPDP Act 2023 implementation rules, Consumer Protection (E-Commerce) Rules amendments, GSTR-8 / 9B procedural changes, and Ind AS 115 paragraph revisions.</p>
        </div>
    </div>
</section>



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
