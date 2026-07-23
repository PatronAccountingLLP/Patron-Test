
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
    <title>Schedule III Companies Act 2013</title>
    <meta name="description" content="Complete Schedule III guide - Division I (AS) vs Division II (Ind AS) vs Division III (NBFC), 2021 ageing and ARI disclosures, common errors, Patron checklist.">
    <link rel="canonical" href="/schedule-iii-compliance-companies-act">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Schedule III Companies Act 2013 2026 | Patron Accounting">
    <meta property="og:description" content="Complete Schedule III guide - Division I (AS) vs Division II (Ind AS) vs Division III (NBFC), 2021 ageing and ARI disclosures, common errors, Patron checklist.">
    <meta property="og:url" content="/schedule-iii-compliance-companies-act">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/schedule-iii-compliance-companies-act-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Schedule III Companies Act 2013 2026 | Patron Accounting">
    <meta name="twitter:description" content="Complete Schedule III guide - Division I (AS) vs Division II (Ind AS) vs Division III (NBFC), 2021 ageing and ARI disclosures, common errors, Patron checklist.">
    <meta name="twitter:image" content="/images/schedule-iii-compliance-companies-act-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/schedule-iii-compliance-companies-act#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
            { "@type": "ListItem", "position": 3, "name": "Schedule III Compliance Companies Act", "item": "/schedule-iii-compliance-companies-act" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/schedule-iii-compliance-companies-act#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is Schedule III of the Companies Act?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Schedule III to the Companies Act, 2013 is the statutory schedule that prescribes the form and content of financial statements that every Indian company must prepare under Section 129 of the Act. It contains three divisions - Division I for AS / Indian GAAP companies; Division II for Ind AS companies; and Division III for NBFCs under Ind AS. Schedule III prescribes balance sheet line items, P and L line items, ageing schedules, financial ratios and Additional Regulatory Information disclosures."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Schedule III Division I and Division II?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Division I applies to companies preparing financial statements under the Companies (Accounting Standards) Rules, 2006 - the AS / Indian GAAP framework. Division II applies to companies under the Companies (Indian Accounting Standards) Rules, 2015 - the Ind AS framework. Division II is significantly more detailed with Ind AS-specific presentation (Other Comprehensive Income section, lease liabilities under Ind AS 116, expected credit loss classification of trade receivables, financial instrument disclosures). Both were amended on 24 March 2021."
              }
            },
            {
              "@type": "Question",
              "name": "What is Division III of Schedule III?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Division III of Schedule III was introduced in 2018 (and significantly updated in 2021) to prescribe the format for Non-Banking Financial Companies (NBFCs) covered under the Companies (Indian Accounting Standards) Rules, 2015. Division III aligns NBFC presentation with financial-instrument-heavy disclosures under Ind AS 109 (classification and impairment), Ind AS 107 (disclosures) and Ind AS 32 (presentation). NBFCs covered include those with net worth above Rs 500 crore from FY 2018-19."
              }
            },
            {
              "@type": "Question",
              "name": "What are the 2021 amendments to Schedule III?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "MCA Notification G.S.R. 207(E) dated 24 March 2021 introduced significant amendments effective from FY 2021-22 - (a) four ageing schedules for trade receivables, trade payables, capital work-in-progress and intangible assets under development; (b) promoter shareholding with percentage change; (c) eleven financial ratios with above-25-percent variance explanation; (d) Additional Regulatory Information (ARI) disclosures; (e) mandatory rounding off based on Total Income; (f) lease liabilities separately disclosed per Ind AS 116."
              }
            },
            {
              "@type": "Question",
              "name": "What is the trade receivables ageing schedule?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trade receivables ageing is one of four ageing schedules introduced by the 24 March 2021 Schedule III amendments. Trade receivables outstanding at year-end are classified into five age buckets - less than 6 months, 6 months to 1 year, 1-2 years, 2-3 years and more than 3 years from due date (or transaction date where due date is not specified). Separate Unbilled and Not-Due columns bridge to total. Each bucket sub-classifies into Considered Good Secured, Unsecured, SICR and Credit Impaired."
              }
            },
            {
              "@type": "Question",
              "name": "What are Additional Regulatory Information (ARI) disclosures?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Additional Regulatory Information (ARI) is the bundle of disclosures introduced by the 24 March 2021 amendments covering thirteen areas - title deeds of immovable property not in name of company; revaluation of PP and E; loans / advances to specified persons with no terms; benami proceedings; wilful defaulter status; struck-off company relationships; charge registration delays; Section 2(87) layers compliance; Scheme of Arrangement effects; funded-party UBO; virtual currency transactions; surrendered income; CSR shortfall. Most ARI overlap with CARO 2020 clauses."
              }
            },
            {
              "@type": "Question",
              "name": "Is Schedule III applicable to private limited companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, Schedule III applies to every company registered under the Companies Act, 2013 - including private limited companies - with no asset, turnover or paid-up capital exemption. Unlike CARO 2020 (small-company exemptions) and IFC under Section 143(3)(i), Schedule III always applies. What varies is which division. Most unlisted Pvt Ltd companies prepare under Division I (AS framework); those crossing the Rs 250 crore net worth threshold transition to Division II. NBFCs follow Division III."
              }
            },
            {
              "@type": "Question",
              "name": "What financial ratios must be disclosed under Schedule III?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The 24 March 2021 amendments require disclosure of eleven financial ratios in notes to accounts - Current Ratio, Debt-Equity Ratio, Debt Service Coverage Ratio, Return on Equity, Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover, Net Capital Turnover, Net Profit Ratio, Return on Capital Employed and Return on Investment. For each, the company must explain numerator and denominator definitions and provide an explanation for any ratio that has changed by more than 25 percent versus prior year."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/schedule-iii-compliance-companies-act#service",
          "name": "Schedule III Compliance Under the Companies Act 2013",
          "url": "/schedule-iii-compliance-companies-act",
          "description": "Patron Accounting Schedule III compliant financial statement preparation and review for Indian companies under Section 129 of the Companies Act 2013 - covering Division I (AS framework), Division II (Ind AS), Division III (NBFC under Ind AS), MCA Notification G.S.R. 207(E) dated 24 March 2021 amendments (four ageing schedules, promoter shareholding, eleven financial ratios, Additional Regulatory Information disclosures), Ind AS transition Schedule III adoption, ARI bundle preparation, CARO 2020 and IFC reconciliation and partner sign-off. Starting from INR 75,000 standalone Schedule III review.",
          "provider": { "@id": "/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "serviceType": "Schedule III Compliant Financial Statement Preparation and Review under Companies Act 2013",
          "about": [
            { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
            { "@type": "Thing", "name": "Indian Accounting Standards", "sameAs": "https://en.wikipedia.org/wiki/Indian_Accounting_Standards" },
            { "@type": "Thing", "name": "Financial statement", "sameAs": "https://en.wikipedia.org/wiki/Financial_statement" }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Schedule III Compliance Engagements",
            "itemListElement": [
              { "@type": "Offer", "name": "Standalone Schedule III Review (Advisory Before Audit)", "price": "75000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/schedule-iii-compliance-companies-act" },
              { "@type": "Offer", "name": "Annual Financial Statement Preparation - Division I Pvt Ltd (Under Rs 50 cr Revenue)", "price": "150000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/schedule-iii-compliance-companies-act" },
              { "@type": "Offer", "name": "Annual Financial Statement Preparation - Division II Ind AS (Rs 50 to 250 cr Revenue)", "price": "450000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/schedule-iii-compliance-companies-act" },
              { "@type": "Offer", "name": "Annual Financial Statement Preparation - Division III NBFC plus ARI Disclosure Bundle", "price": "600000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/schedule-iii-compliance-companies-act" }
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
                        Schedule III Compliance Under the Companies Act 2013 for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pillar Authority Page:</span> Three divisions (I for AS, II for Ind AS, III for NBFC Ind AS), the March 2021 amendments, ARI disclosures, common errors and Patron review checklist</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Standalone Schedule III review from Rs 75,000; Division I Pvt Ltd financials from Rs 1,50,000; Division II Ind AS from Rs 4,50,000; Division III NBFC from Rs 6,00,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability:</span> Every Indian company under Section 129 - no asset, turnover or paid-up capital exemption; division choice driven by AS vs Ind AS framework</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Anchor:</span> Schedule III Companies Act 2013; MCA G.S.R. 207(E) dated 24 March 2021 amendments effective FY 2021-22; Audit Trail effective 1 April 2023</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India - 15+ years of Schedule III preparation and review across Division I Pvt Ltd, Division II Ind AS and Division III NBFC entities - rated 4.9 on Google.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20Schedule%20III%20compliant%20financial%20statement%20preparation%20quote%20from%20Patron%20Accounting." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Schedule III Compliance Companies Act'/>
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
                                
<option value="schedule-iii-compliance-companies-act" selected>Schedule III Compliance Companies Act</option>
<option value="statutory-audit">Statutory Audit (National Hub)</option>
<option value="statutory-audit-private-limited-company">Pvt Ltd Statutory Audit</option>
<option value="qualified-audit-opinion-handling-guide">Qualified Opinion Handling Guide</option>
<option value="qualified-vs-unqualified-audit-opinion">Qualified vs Unqualified Opinion</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
<option value="change-of-auditor">Change of Auditor</option>
<option value="private-limited-company-compliance">Pvt Ltd Compliance</option>
<option value="tax-audit">Tax Audit</option>
<option value="internal-audit">Internal Audit</option>
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
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our first-year-of-2021-amendments Schedule III had several ageing schedule errors flagged by the statutory auditor late in fieldwork - cost us 3 extra weeks. Patron took over for FY 2022-23 with the standalone Schedule III review 6 weeks before year-end - clean financials at audit and no late observations. Saved an estimated Rs 4 lakh in audit firm overrun.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rakesh M.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Controller, Mid-Cap Pvt Ltd, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We crossed Rs 250 crore net worth in FY 2023-24 and faced the Phase II Ind AS transition. Patron ran the full Schedule III Division II adoption - ERP reconfiguration, comparative Division I to Division II reconciliation, Ind AS 101 first-time adoption working papers and the full ARI bundle. Clean financial statements delivered for both FY 2023-24 and FY 2024-25 comparatives.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Anjali S.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Phase II Ind AS Transition Pvt Ltd, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We have 5 operating Pvt Ltd entities plus an NBFC arm. Patron mapped Schedule III applicability across all 6 entities (4 Division I, 1 Division II, 1 Division III NBFC), built a single working file for ARI reconciliation against CARO 2020 and IFC, and delivered consolidated CFS with mutatis mutandis Schedule III application. Clean Group financials with no audit observations across the cluster.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PG</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Pankaj G.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Group CFO, Family Business Holding Co, Delhi NCR</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">NFRA inspection had flagged ageing schedule construction errors and 11-ratio variance explanation gaps in our peer group last year. We engaged Patron for the standalone Schedule III review - they identified 4 ageing schedule errors and rebuilt the variance explanations as operational-event-tied narratives. The financial statements went through NFRA review without observation this year.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NJ</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Nitin J.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Audit Committee Chair, Listed Mid-Cap, Bengaluru</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Division III NBFC Schedule III is technical - Ind AS 109 financial-instrument-heavy disclosures, ECL classification, Stage 1 / 2 / 3 bucketing - and we had a Phase IV transition into Division III in FY 2024-25. Patron handled the full transition including comparative restatement under Ind AS 101. The Division III financial statements pass through every quarterly investor diligence cleanly now.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vandana K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Lead, NBFC Pvt Ltd, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">The ARI disclosures - particularly virtual currency, funded-party UBO, struck-off company relationships - were where our finance team kept getting it wrong against CARO 2020. Patron built a single working file reconciliation across Schedule III ARI, CARO 2020 clause-by-clause and IFC - one source of truth maintained through audit cycle. Lender diligence on our recent Rs 50 cr term loan went through without an information request.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Sandip C.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Manufacturing Pvt Ltd, Hyderabad</div>
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
                    <p>Talk to a Patron CA and CS team specialising in Schedule III compliance - standalone Schedule III review 6 to 8 weeks before audit fieldwork, full financial statement preparation across Division I, II and III, Phase II Ind AS transition, ARI disclosure bundle with CARO 2020 reconciliation and partner sign-off with SA 220 quality documentation.</p>
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
<a href="#what-section" class="toc-btn">Definition</a>
<a href="#who-section" class="toc-btn">Three Divisions</a>
<a href="#services-section" class="toc-btn">Patron Services</a>
<a href="#procedure-section" class="toc-btn">6-Step Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Common Errors</a>
<a href="#fees-section" class="toc-btn">Pricing</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Benefits</a>
<a href="#comparison-section" class="toc-btn">DIY vs Patron</a>
<a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview of Schedule III Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Schedule III Compliance Companies Act Services at a Glance</strong></p>
                    <p>Schedule III to the Companies Act, 2013 prescribes the format and content of financial statements that every Indian company must prepare under Section 129 of the Act. It is split into three divisions - Division I applies to companies under the Companies (Accounting Standards) Rules, 2006 (AS / Indian GAAP); Division II applies to companies under the Companies (Indian Accounting Standards) Rules, 2015 (Ind AS); Division III, added in 2018 and significantly updated in 2021, applies to Non-Banking Financial Companies (NBFCs) covered under Ind AS. MCA Notification G.S.R. 207(E) dated 24 March 2021 introduced significant amendments effective FY 2021-22 - ageing schedules, promoter shareholding with percentage change, eleven financial ratios with above-25-percent variance explanation, Additional Regulatory Information (ARI) disclosures covering title deeds, benami, struck-off companies, virtual currency, funded-party UBO, undisclosed income, CSR shortfall and mandatory rounding off based on Total Income.</p>
                </div>
                <p>Section 129 of the Companies Act, 2013 requires every company to prepare financial statements that give a true and fair view, comply with the accounting standards under Section 133, and are in the form prescribed in Schedule III. Schedule III is therefore the canonical format - it is not optional, not negotiable and any departure must be justified by relevance to industry-specific requirements or applicable accounting standards. The March 2021 amendments substantially expanded the disclosure requirements - what was a 70-page Schedule III in 2014 grew to a 110-plus-page Schedule III by 2022.</p>
                <p>Patron Accounting LLP treats Schedule III not as a presentation exercise at the end of the accounting cycle but as a structured disclosure framework that drives accounting policy choices from the start of the year. Our CA-led pod handles trial-balance-to-Schedule-III mapping at engagement start, monthly ageing run-up to year-end, ARI disclosure bundle preparation with CARO 2020 reconciliation and partner sign-off with SA 220 quality control. Cross-sell to /statutory-audit (parent hub), /statutory-audit-private-limited-company, /qualified-audit-opinion-handling-guide, /qualified-vs-unqualified-audit-opinion, /appointment-of-auditor, /change-of-auditor, /private-limited-company-compliance, /tax-audit and /internal-audit delivers a single CA pod across the audit cluster.</p>
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
                <h2 class="section-title">Schedule III Compliance - Definition and Framework</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Schedule III compliance is the preparation of financial statements - balance sheet, statement of profit and loss, statement of changes in equity, cash flow statement and notes - in the form prescribed by Schedule III to the Companies Act, 2013, applicable under <strong>Section 129</strong> of the Act, in alignment with the company applicable accounting framework (Accounting Standards under Division I; Indian Accounting Standards under Division II; or Ind AS for NBFCs under Division III).</p>

<p>Schedule III prescribes (a) the line items that must appear on the face of the balance sheet and statement of profit and loss, (b) the sub-line items under each line item, (c) the notes that must accompany the financial statements and (d) the format and content of specific disclosures (ageing schedules, promoter shareholding, financial ratios, ARI items). The schedule operates as a <strong>minimum disclosure framework</strong> - additional line items, sub-line items and disclosures must be added where relevant to the company facts, industry or compliance with the Companies Act or accounting standards.</p>

<p>Schedule III is the <strong>format component</strong> of the broader financial statements compliance triangle. The other two components are the <strong>recognition and measurement framework</strong> (Accounting Standards under Companies (AS) Rules 2006 or Ind AS under Companies (Ind AS) Rules 2015) and the <strong>auditor reporting framework</strong> (Section 143 with CARO under 143(11) and IFC under 143(3)(i)). All three operate together - the same item is recognised per AS or Ind AS, presented per Schedule III and reported on by the auditor per Section 143.</p>

<p>This page is the canonical Schedule III authority page on the site - the financial-statements-format technical authority. Industry-specific Patron audit pages, qualification framework pages and entity-specific audit pages all reference back here for Schedule III depth, particularly on the March 2021 amendments (ageing schedules, promoter shareholding, eleven financial ratios, ARI disclosures) and audit trail effective 1 April 2023.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Schedule III Compliance Companies Act:</strong></p>
                    
<ul>
    <li><strong>Section 129 Companies Act 2013:</strong> Mandates every company to prepare financial statements giving a true and fair view, complying with accounting standards under Section 133 and in the form prescribed in Schedule III.</li>
    <li><strong>Division I:</strong> Format for companies preparing financial statements under the Companies (Accounting Standards) Rules, 2006 - the AS / Indian GAAP framework. Typically applies to unlisted private limited companies below Ind AS thresholds.</li>
    <li><strong>Division II:</strong> Format for companies preparing under the Companies (Indian Accounting Standards) Rules, 2015 - Ind AS framework. Mandatory for listed companies, unlisted companies with net worth above Rs 250 crore and their subsidiaries / associates / joint ventures.</li>
    <li><strong>Division III:</strong> Format for Non-Banking Financial Companies (NBFCs) covered under Ind AS - introduced in 2018, significantly updated in 2021. Aligns NBFC presentation with Ind AS 109 financial-instrument-heavy disclosures.</li>
    <li><strong>Additional Regulatory Information (ARI):</strong> The bundle of disclosures introduced by the 24 March 2021 MCA notification - title deeds, benami, struck-off companies, virtual currency, funded-party UBO, undisclosed income, CSR, layers compliance, scheme of arrangement compliance, wilful defaulter status.</li>
    <li><strong>Ageing Schedule:</strong> Disclosure introduced by the 24 March 2021 amendments requiring trade receivables, trade payables, capital work-in-progress and intangible assets under development in age-based buckets - typically less than 1 year, 1-2 years, 2-3 years, more than 3 years.</li>
    <li><strong>G.S.R. 207(E) dated 24 March 2021:</strong> MCA notification that introduced the major 2021 amendments to Schedule III - effective for FY commencing on or after 1 April 2021 (FY 2021-22 onwards).</li>
    <li><strong>Audit Trail Rules:</strong> Companies (Accounts) Rules 2014 Rule 3(1) - books of account maintained in electronic mode must have an audit trail feature; effective for FY commencing on or after 1 April 2023.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Schedule III Compliance Companies Act</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Built for Practitioners</span>
                        <strong>Section 129 + 3 Divisions Framework</strong>
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
            <h2 class="section-title">Schedule III Applicability - Which Division?</h2>
            <div class="content-text">
                
                
<p>Schedule III applies to every company registered under the Companies Act, 2013 - including foreign companies under Section 2(42) - with <strong>no asset, turnover or paid-up capital exemption</strong>. There is no equivalent of the CARO 2020 small-company exemption or the IFC threshold-based exemption for Schedule III itself; Schedule III always applies. What does vary is which division applies, driven by the accounting framework the company is required (or chooses) to follow.</p>

<p style="margin-top:16px;"><strong>Three Divisions Applicability Map</strong></p>
<div style="overflow-x:auto;">
<table style="width:100%;border-collapse:collapse;margin-top:8px;">
    <thead>
        <tr style="background:var(--blue);color:#fff;">
            <th style="padding:10px;text-align:left;font-size:13px;">Division</th>
            <th style="padding:10px;text-align:left;font-size:13px;">Accounting Framework</th>
            <th style="padding:10px;text-align:left;font-size:13px;">Applicability</th>
        </tr>
    </thead>
    <tbody>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;"><strong>Division I</strong></td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Companies (Accounting Standards) Rules 2006 - Indian GAAP</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">All companies NOT required to follow Ind AS - typically unlisted private companies below Ind AS thresholds</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;"><strong>Division II</strong></td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Companies (Indian Accounting Standards) Rules 2015 - Ind AS</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">(a) Listed companies (Phase I from FY 2016-17); (b) Unlisted with net worth above Rs 250 cr; (c) Subsidiaries, associates, JVs of (a) or (b)</td></tr>
        <tr><td style="padding:10px;font-size:13px;"><strong>Division III</strong></td><td style="padding:10px;font-size:13px;">Ind AS - NBFC-specific format</td><td style="padding:10px;font-size:13px;">NBFCs - Phase I (net worth above Rs 500 cr) from FY 2018-19; Phase II (Rs 250 to 500 cr or listed) from FY 2019-20</td></tr>
    </tbody>
</table>
</div>

<p style="margin-top:16px;"><strong>Division II Adoption Map - Ind AS Phases</strong></p>
<ul>
    <li><strong>Phase I:</strong> Listed entities and unlisted with net worth Rs 500 crore or above - FY 2016-17 (voluntarily 2015-16)</li>
    <li><strong>Phase II:</strong> Unlisted with net worth Rs 250 to 500 crore and other listed (SME exchange) - FY 2017-18</li>
    <li><strong>Phase III (NBFC):</strong> NBFCs with net worth Rs 500 crore or above - FY 2018-19</li>
    <li><strong>Phase IV (NBFC):</strong> NBFCs with net worth Rs 250 to 500 crore or listed NBFCs - FY 2019-20</li>
</ul>

<p style="margin-top:16px;"><strong>Critical Note - One-Way Door:</strong> Once a company adopts Ind AS - either voluntarily or because it crossed a threshold - it cannot revert to AS / Indian GAAP in subsequent years, even if it falls below the threshold (e.g. through capital reduction or divestment). Schedule III division applicability follows the accounting framework choice. A Phase II Ind AS company prepares Division II financial statements; an NBFC under Ind AS prepares Division III.</p>

<p style="margin-top:12px;"><strong>Consolidated Financial Statements - Section 129(4):</strong> Provisions applicable to financial statements of a holding company apply mutatis mutandis to consolidated financial statements. Schedule III therefore applies to CFS in the same division as the holding company standalone financial statements. A Division II holding company prepares Division II CFS; a Division III NBFC holding company prepares Division III CFS.</p>

<p style="margin-top:16px;"><strong>Where Schedule III Appears in the Financial Statements Package:</strong></p>
<ul>
    <li>Balance Sheet (Part I) - assets and equity / liabilities; current / non-current classification</li>
    <li>Statement of Profit and Loss (Part II) - revenue, expenses, finance costs, depreciation, tax expense, profit for the period; with Ind AS bifurcation between P&amp;L and OCI in Division II / III</li>
    <li>Statement of Changes in Equity (Division II and III only) - movement in equity share capital and other equity</li>
    <li>Cash Flow Statement (per AS 3 in Division I; per Ind AS 7 in Division II / III)</li>
    <li>Notes to Accounts - accounting policies, line item notes, specific disclosures, ARI disclosures</li>
    <li>Other regulatory information - Section 134(5) DRS, Section 134(3) Board Report, Section 198 managerial remuneration where applicable</li>
</ul>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Schedule III Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Annual Financial Statement Preparation (Division I, II or III)</td><td>End-to-end preparation of balance sheet, P&amp;L, statement of changes in equity (Division II / III), cash flow statement and notes to accounts in the applicable Schedule III division format - including all 2021 amendment disclosures (ageing schedules, promoter shareholding, financial ratios, ARI bundle).</td></tr>
<tr><td>Standalone Schedule III Review (Advisory Before Audit)</td><td>Independent Schedule III compliance check on financial statements prepared by the company in-house finance team - before audit fieldwork begins. Covers division applicability verification, line-item format check, ageing schedule construction, ARI bundle completeness, CARO 2020 reconciliation prep.</td></tr>
<tr><td>Division Adoption Memo and Mapping</td><td>For companies transitioning between divisions (e.g. crossing the Rs 250 crore net-worth threshold into Phase II Ind AS), Patron documents the adoption rationale, the Schedule III division applicable from the next financial year, the difference in disclosure obligations and the transition adjustments required.</td></tr>
<tr><td>Ind AS Transition Schedule III Adoption (One-Time Setup)</td><td>Full-scope first-time Ind AS adoption including Schedule III Division II format setup in ERP, Ind AS 101 first-time adoption working papers, comparative Division I to Division II reconciliation and transition memo.</td></tr>
<tr><td>ARI Disclosure Bundle Preparation (Add-On)</td><td>Standalone preparation of all 13 Additional Regulatory Information disclosures - title deeds, revaluation, loans / advances to specified persons, benami proceedings, wilful defaulter, struck-off companies, charge registration delays, layers compliance, scheme of arrangement, funded-party UBO, virtual currency, surrendered income, CSR.</td></tr>
<tr><td>Schedule III Format Setup in ERP</td><td>One-time configuration of Tally / SAP / Oracle / NetSuite / Zoho ERP to produce Schedule III-compliant trial balance and P&amp;L directly - including chart of accounts realignment, sub-ledger ageing reports configuration and notes-to-accounts working paper integration.</td></tr>
<tr><td>Financial Ratio Working with Variance Explanation</td><td>Eleven financial ratios per the 2021 amendments computed with documented numerator and denominator definitions per the ICAI Guidance Note; variance explanation memo for any ratio with above-25-percent change versus prior year - tied to operational or financing events.</td></tr>
<tr><td>CARO 2020 + IFC + Schedule III Reconciliation</td><td>Single working file covering Schedule III ARI, CARO 2020 clause-by-clause findings and IFC under Section 143(3)(i) - resolving inconsistencies before financials sign-off. Critical for entities preparing for lender diligence or NFRA-monitored audit cycle.</td></tr>
<tr><td>Form AOC-4 Filing with Schedule III Financials</td><td>Bundled within audit engagement - filing of audited Schedule III financial statements in Form AOC-4 with MCA21 V3 within 30 days of AGM; coordination with audit partner for UDIN; Board Report under Section 134 with audit trail disclosure where applicable.</td></tr>


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
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">Patron 6-Step Schedule III Compliance Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured CA-led preparation and review process covering applicability and division identification, ERP / trial balance mapping, four ageing schedules preparation, promoter shareholding and eleven financial ratios, Additional Regulatory Information disclosure bundle and cross-reference reconciliation with partner sign-off.</p>
        </div>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Applicability and Division Identification</h3>
        <p class="step-description">Patron documents the company applicable accounting framework - AS (Division I), Ind AS (Division II) or Ind AS for NBFC (Division III). For companies near a transition trigger (Phase II Ind AS at Rs 250 cr net worth; NBFC Phase IV at Rs 250 cr net worth), the next-year applicability is also documented. Division choice drives the entire format.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Division I / II / III call
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Transition trigger monitoring
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Format implications mapped
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="14" y="22" width="28" height="56" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><text x="28" y="47" font-size="13" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">I</text><text x="28" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AS</text><rect x="46" y="22" width="28" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="60" y="47" font-size="13" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">II</text><text x="60" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IndAS</text><rect x="78" y="22" width="28" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="92" y="47" font-size="13" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">III</text><text x="92" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NBFC</text></svg>
            </div>
            <span class="illustration-label">3 Divisions</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">ERP and Trial Balance Mapping</h3>
        <p class="step-description">Patron maps every general ledger account in the trial balance to a Schedule III line item or sub-line item. The 2021 amendments require specific account-level changes - separate intangibles from PP and E; current maturities of long-term debt to short-term borrowings; lease liabilities separately presented per Ind AS 116.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            GL-to-Sch-III mapping
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Sub-ledger workings
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Ind AS 116 lease split
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="22" width="38" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="37" y="35" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">TB</text><rect x="22" y="40" width="30" height="2" fill="#14365F" opacity="0.4"/><rect x="22" y="46" width="26" height="2" fill="#14365F" opacity="0.4"/><rect x="22" y="52" width="28" height="2" fill="#14365F" opacity="0.4"/><rect x="22" y="58" width="24" height="2" fill="#14365F" opacity="0.4"/><rect x="22" y="64" width="22" height="2" fill="#14365F" opacity="0.4"/><path d="M 58 50 L 70 50 L 65 45 M 70 50 L 65 55" stroke="#E8712C" stroke-width="2" fill="none"/><rect x="72" y="22" width="38" height="56" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="91" y="35" font-size="8" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">SCH III</text><rect x="76" y="40" width="30" height="2" fill="#E8712C" opacity="0.6"/><rect x="76" y="46" width="26" height="2" fill="#E8712C" opacity="0.6"/><rect x="76" y="52" width="28" height="2" fill="#E8712C" opacity="0.6"/></svg>
            </div>
            <span class="illustration-label">TB → Sch III</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Four Ageing Schedules Preparation</h3>
        <p class="step-description">Patron prepares the four ageing schedules at year-end - trade receivables (5 buckets), trade payables (4 buckets), CWIP (4 buckets) and intangible assets under development (4 buckets). Sources are sub-ledger ageing reports validated against the trial balance, with separate workings for unbilled revenue, amounts not yet due and disputed amounts.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            4 ageing schedules
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Unbilled + Not-Due columns
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            TB reconciliation
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="22" width="80" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="60" y="34" font-size="8" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">AGEING</text><rect x="26" y="42" width="14" height="8" fill="#10B981" opacity="0.7"/><rect x="42" y="42" width="14" height="14" fill="#F5A623" opacity="0.7"/><rect x="58" y="42" width="14" height="20" fill="#E8712C" opacity="0.7"/><rect x="74" y="42" width="14" height="26" fill="#DC2626" opacity="0.7"/><text x="33" y="60" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&lt;6M</text><text x="49" y="66" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">6-1</text><text x="65" y="70" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">1-2</text><text x="81" y="76" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">3+</text></svg>
            </div>
            <span class="illustration-label">Ageing Done</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Promoter Shareholding + 11 Financial Ratios</h3>
        <p class="step-description">Promoter shareholding table reconciled with share register, SBO register under Section 90 and stock exchange filing (listed entities). Eleven financial ratios computed per the ICAI Guidance Note; variance explanation prepared for any ratio with above-25-percent change versus prior year - tied to operational or financing events.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Promoter % change table
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            11 ratios computed
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            >25% variance memo
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="28" fill="none" stroke="#14365F" stroke-width="1.5"/><text x="60" y="46" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">11</text><text x="60" y="60" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RATIOS</text><circle cx="30" cy="30" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><circle cx="90" cy="30" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><circle cx="30" cy="70" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><circle cx="90" cy="70" r="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/></svg>
            </div>
            <span class="illustration-label">11 Ratios</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Additional Regulatory Information (ARI) Bundle</h3>
        <p class="step-description">Patron prepares each of the 13 ARI disclosures - title deeds, benami, struck-off relationships, wilful defaulter, charges, layers, scheme, funded-party UBO, virtual currency, surrendered income, CSR shortfall - each cross-referenced to the corresponding CARO 2020 clause where overlap exists.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            13 ARI items
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            MCA Master Data check
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            CARO clause mapping
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="14" width="84" height="76" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="10" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">ARI</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">13 ITEMS</text><rect x="26" y="50" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/><rect x="50" y="50" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/><rect x="74" y="50" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/><rect x="26" y="60" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/><rect x="50" y="60" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/><rect x="74" y="60" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/><rect x="26" y="70" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/><rect x="50" y="70" width="20" height="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/></svg>
            </div>
            <span class="illustration-label">ARI Pack</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Cross-Reference Reconciliation and Partner Sign-Off</h3>
        <p class="step-description">Patron reconciles Schedule III ARI against CARO 2020 (auditor reporting on the same matters) and IFC (auditor reporting on internal controls over disclosure preparation). Inconsistencies surfaced and resolved before sign-off. Audit partner review with SA 220 quality documentation; UDIN generated; Form AOC-4 filed within 30 days of AGM.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Sch III + CARO + IFC reconciled
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            SA 220 partner review
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            AOC-4 filing
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="14" y="22" width="28" height="56" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><text x="28" y="42" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">SCH III</text><text x="28" y="55" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ARI</text><rect x="46" y="22" width="28" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">CARO</text><text x="60" y="55" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">2020</text><rect x="78" y="22" width="28" height="56" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="92" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">IFC</text><text x="92" y="55" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">143(3)(i)</text></svg>
            </div>
            <span class="illustration-label">Single Sign-Off</span>
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
            <h2 class="section-title">Documents Checklist for Schedule III Compliance</h2>
            <div class="content-text">
                
                
<p>Patron uses the following documents and registers at engagement onboarding. Documents are categorised by Schedule III line item and ARI disclosure:</p>

<p><strong>Section A - Core Financial Records:</strong></p>
<ul>
    <li><strong>Trial Balance and General Ledger:</strong> Year-end TB with comparative; full ledger scroll; trial balance to Schedule III line-item mapping</li>
    <li><strong>Sub-Ledger Ageing Reports:</strong> Trade receivables ageing, trade payables ageing, CWIP ageing, IAUD ageing per ERP cut-off at year-end</li>
    <li><strong>PP and E and Intangible Asset Registers:</strong> Asset-wise register with addition / disposal / depreciation / WDV; separately for tangible and intangible</li>
    <li><strong>Revaluation Reports:</strong> Registered Valuer reports for any revaluation under Companies (Registered Valuers and Valuation) Rules 2017</li>
</ul>

<p><strong>Section B - Shareholding and Governance:</strong></p>
<ul>
    <li><strong>Share Register and Beneficial Ownership:</strong> Share register; SBO register under Section 90; promoter shareholding pattern (listed entities)</li>
    <li><strong>Financial Ratio Working:</strong> Eleven ratios with numerator and denominator definitions; variance explanation memo for above-25-percent changes</li>
    <li><strong>Loan and Advance Register:</strong> Loans / advances to promoters, directors, KMP, related parties; with terms / no-terms classification</li>
</ul>

<p><strong>Section C - ARI Source Documents:</strong></p>
<ul>
    <li><strong>Title Deed Register:</strong> Every immovable property owned with title deed reference and holder name; separate disclosure where title not in name</li>
    <li><strong>MCA Master Data Verification:</strong> Counter-party check against MCA Master Data for struck-off companies; report attached</li>
    <li><strong>Wilful Defaulter Status:</strong> Bank confirmations; RBI wilful defaulter list check</li>
    <li><strong>Charge Register and Filing Status:</strong> Form CHG-1 / CHG-9 filing dates; satisfaction of charges; delay disclosure</li>
    <li><strong>Scheme of Arrangement Documentation:</strong> NCLT-approved Scheme; effect on financial statements; accounting policy compliance</li>
    <li><strong>Funded-Party Documentation:</strong> Any funds advanced to intermediaries with onward investment; FEMA / Companies Act / PMLA compliance declarations</li>
    <li><strong>Cryptocurrency Transactions:</strong> Trading / investment / deposits received - aggregate value, gain / loss, year-end holding</li>
    <li><strong>Income Tax Assessment Orders:</strong> Surrendered or disclosed income during the year in tax assessments</li>
    <li><strong>CSR Spend Statement:</strong> Section 135 CSR spend; unspent transfer to specified fund or Unspent CSR Account; reconciliation with CARO 3(xx)</li>
    <li><strong>MSME Vendor Confirmation:</strong> MSME registration confirmations from vendors; unpaid principal and interest at year-end</li>
</ul>

<p style="margin-top:16px;">Share your trial balance and the latest audited financials via WhatsApp at <a href="https://wa.me/919459456700">+91 945 945 6700</a> and Patron will revert with a Schedule III review scoping note within 48 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Schedule III Errors and Patron Remediation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr>
    <td>Ageing Schedule Construction Failures</td>
    <td>Most-frequent error in first-year-of-2021-amendment financial statements. Common patterns - using transaction date instead of due date when due date is specified; the reverse where no due date exists; missing the Unbilled and Not-Due columns; ageing not bridging to total trade receivables / payables on the balance sheet.</td>
    <td>Patron builds ageing in three steps - identify appropriate ageing reference date (due date or transaction date); compute buckets; add Unbilled and Not-Due columns to bridge to total; reconcile to balance-sheet line item.</td>
</tr>
<tr>
    <td>Promoter Shareholding Percentage Change Calculation</td>
    <td>Common error - calculating percentage change as a simple holding-percentage difference rather than the absolute change in percentage of total shares. Example - promoter held 50 percent at start; issued 10 percent of new equity to outside investor; promoter holding is now 45 percent (50/110). Percentage change is 5 points (50 to 45), not 10.</td>
    <td>Patron prepares a promoter-by-promoter table with opening shares, closing shares, percentage of opening total, percentage of closing total and absolute percentage change - removing the arithmetic ambiguity.</td>
</tr>
<tr>
    <td>Financial Ratio Variance Explanation Missing</td>
    <td>Common error - computing all eleven ratios but not providing the explanation for ratios changing by more than 25 percent. The explanation is mandatory per the 2021 amendments. Common variance triggers - inventory turnover crashed during slowdown; debt-service coverage dropped after fresh borrowing; ROE collapsed in loss year.</td>
    <td>Patron prepares a one-line explanation for each ratio crossing the 25 percent threshold; tie the explanation to the underlying operational or financing event. Same explanation feeds the Board Report and analyst commentary.</td>
</tr>
<tr>
    <td>Title Deed Disclosure Format Errors</td>
    <td>Common error - listing title-deed-not-in-name properties without the prescribed columns (description, gross carrying value, held in name of, whether held in name of promoter / director / relative / employee, period of holding, reason for not being in name).</td>
    <td>Patron uses the exact Schedule III format with all six columns; cross-references each row to CARO 2020 Clause 3(i)(c) which has a similar (slightly more granular) format; aligns both presentations.</td>
</tr>
<tr>
    <td>Struck-Off Company Relationship Disclosure Missing</td>
    <td>The 2021 amendment requires disclosure of nature of transactions with struck-off companies (under Section 248 or Section 560 of Companies Act 1956) - investments, receivables, payables, shares held by struck-off company in reporting company. Common error - finance teams do not run MCA Master Data verification on counter-parties.</td>
    <td>Patron runs counter-party MCA Master Data verification at year-end; identifies struck-off counter-parties; discloses nature of transactions and outstanding balances; cross-links to /restore-struck-off-company-mca service if a key counter-party needs restoration.</td>
</tr>
<tr>
    <td>Rounding-Off Inconsistency</td>
    <td>The 2021 amendments made rounding off MANDATORY (changed from may to shall) and shifted the trigger from Turnover to Total Income. Common error - using Turnover instead of Total Income; or rounding off inconsistently (some figures in lakhs, some in thousands).</td>
    <td>Patron computes Total Income (revenue from operations + other income); selects the rounding-off unit based on Total Income (below Rs 100 cr - to nearest hundreds, thousands, lakhs or millions; Rs 100 cr and above - to nearest lakhs, millions or crores); applies uniformly across all line items and notes.</td>
</tr>
<tr>
    <td>ARI vs CARO 2020 Inconsistency</td>
    <td>Common error - a title deed disclosure in Schedule III ARI shows three properties not in name; CARO 2020 Clause 3(i)(c) shows two; the auditor main report references CARO. The discrepancy is a flag in lender diligence and ROC scrutiny.</td>
    <td>Patron prepares a single reconciliation working covering Schedule III ARI, CARO 2020 clause-by-clause and the main audit report; resolves before financials sign-off. Single working file maintained through audit cycle.</td>
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
            <h2 class="section-title">Patron Schedule III Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Standalone Schedule III Review (Advisory)</strong></td><td>2-3 day independent compliance check before audit fieldwork - <strong>Rs 75,000 to Rs 3,00,000</strong> | Timeline: 2 to 4 weeks</td></tr>
<tr><td>Annual Financial Statement Preparation - Division I Pvt Ltd</td><td>Under Rs 50 cr revenue - <strong>Rs 1,50,000 to Rs 4,00,000</strong> | Timeline: 4 to 6 weeks</td></tr>
<tr><td>Annual Financial Statement Preparation - Division II Ind AS</td><td>Rs 50 to 250 cr revenue - <strong>Rs 4,50,000 to Rs 10,00,000</strong> | Timeline: 5 to 8 weeks</td></tr>
<tr><td>Annual Financial Statement Preparation - Division III NBFC</td><td>NBFC under Ind AS - <strong>From Rs 6,00,000</strong> | Timeline: 6 to 9 weeks</td></tr>
<tr><td>Schedule III Format Setup in ERP (One-Time)</td><td>Configuration of Tally / SAP / Oracle / NetSuite / Zoho - <strong>Rs 1,00,000 to Rs 4,00,000</strong> | Timeline: 3 to 6 weeks</td></tr>
<tr><td>Ind AS Transition Schedule III Adoption (One-Time)</td><td>First-time Ind AS 101 transition - <strong>From Rs 5,00,000</strong> | Timeline: 8 to 12 weeks</td></tr>
<tr><td>ARI Disclosure Bundle Preparation (Add-On)</td><td>All 13 ARI disclosures standalone - <strong>Rs 50,000 to Rs 1,50,000</strong> | Timeline: Same window as financials</td></tr>
<tr><td>Listed Entity / NFRA-Monitored Premium</td><td>SEBI LODR coordination, NFRA-review-grade documentation - 15 to 25 percent premium on base fee</td></tr>
<tr><td>One-Time Setup</td><td>Included in the engagement - no separate setup charge</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 75,000 (Exl GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Schedule III Compliance Companies Act consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20Patron%20consultation%20on%20Schedule%20III%20compliance%20under%20the%20Companies%20Act%202013." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Schedule III Timeline in the Annual Accounting Cycle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Pre-year-end interim (Weeks 2-3 of March)</td><td>Trial balance to Schedule III line item mapping; ageing report walkthrough; ARI disclosure preparation start</td></tr>
<tr><td>Year-end close (First 2 weeks of April)</td><td>Final trial balance; sub-ledger ageing extracts; CWIP and IAUD project lists; share register validation</td></tr>
<tr><td>Schedule III draft (Weeks 3-4 of April)</td><td>Balance sheet, P&amp;L, changes in equity, cash flow drafted; ageing schedules; eleven financial ratios computed</td></tr>
<tr><td>ARI disclosure assembly (Weeks 5-6)</td><td>Title deeds, benami, struck-off, wilful defaulter, charges, layers, scheme, funded-party, crypto, surrendered income, CSR</td></tr>
<tr><td>CARO 2020 and IFC reconciliation (Week 6)</td><td>Cross-reference of overlapping disclosures - single reconciliation working file maintained</td></tr>
<tr><td>Audit partner review (Week 7)</td><td>SA 220 quality review; UDIN generation on ICAI portal; engagement quality review for KAM-disclosing entities</td></tr>
<tr><td>Board approval and AOC-4 filing</td><td>Within 30 days of AGM - Form AOC-4 with full Schedule III financial statements filed with MCA21 V3 under Section 137</td></tr>
<tr><td><strong>Total Engagement (Typical)</strong></td><td><strong>~8 weeks from year-end to AOC-4 filing</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
<p><strong>Key Statutory Dates for Schedule III:</strong></p>
<ul>
    <li>2021 Amendments Effective Date - FY commencing on or after 1 April 2021 (i.e. FY 2021-22 onwards)</li>
    <li>Audit Trail Effective Date - FY commencing on or after 1 April 2023 (deferred from 1 April 2021 and 1 April 2022)</li>
    <li>Section 137 Filing Window - Form AOC-4 within 30 days of AGM (typically by 30 October for 30 September AGM)</li>
    <li>ICAI Guidance Note - Latest revision is the primary practitioner manual for Ind AS Schedule III (Division II)</li>
</ul>

<p style="margin-top:12px;"><strong>Major 2021 Amendment Package (G.S.R. 207(E) dated 24 March 2021):</strong></p>
<ul>
    <li>Four ageing schedules - Trade Receivables (5 buckets), Trade Payables (4 buckets), CWIP (4 buckets), IAUD (4 buckets)</li>
    <li>Promoter shareholding disclosure with absolute percentage change</li>
    <li>Eleven financial ratios with above-25-percent variance explanation</li>
    <li>13 Additional Regulatory Information (ARI) disclosures</li>
    <li>Mandatory rounding off (may to shall) based on Total Income (replaced Turnover)</li>
    <li>Lease liabilities separately disclosed per Ind AS 116 (Division II only)</li>
    <li>Current maturities of long-term debt moved to short-term borrowings</li>
</ul>


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
            <h2 class="section-title">8 Benefits of Patron Schedule III Compliance</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3 class="feature-title">Year-Round Compliance Framework</h3>
        <p class="feature-desc">Trial-balance-to-Schedule-III mapping built into ERP at engagement start - not stitched together at year-end; ageing reports run monthly so the year-end disclosure is a continuation rather than a discovery.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
        <h3 class="feature-title">Single Working File ARI Bundle</h3>
        <p class="feature-desc">ARI disclosure bundle prepared as a single working file with reconciliation back to CARO 2020 clauses and Schedule III line items - eliminating the inconsistency risk between three parallel disclosures.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <h3 class="feature-title">Operational-Event-Tied Ratio Variance</h3>
        <p class="feature-desc">Financial ratio variance explanations prepared from the management discussion analysis perspective - tied to underlying operational events rather than mechanical ratio-arithmetic; same explanation usable in Board Report.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
        <h3 class="feature-title">3-Division Adoption Expertise</h3>
        <p class="feature-desc">Division I (AS), Division II (Ind AS) and Division III (NBFC Ind AS) - Patron has prepared financial statements across all three with specific expertise in the Phase II Ind AS transition at the Rs 250 cr net worth threshold.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">CARO + IFC Reconciliation Built In</h3>
        <p class="feature-desc">Schedule III ARI + CARO 2020 clause-by-clause + IFC under Section 143(3)(i) - single reconciliation working file maintained through the audit cycle; eliminates the three-document inconsistency risk on lender diligence.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
        <h3 class="feature-title">Audit Trail Rules Compliant</h3>
        <p class="feature-desc">For FY commencing on or after 1 April 2023, books maintained in electronic mode must have audit trail feature - Patron implements audit trail-compliant ERP configuration and prepares the Board Report disclosure under the new rules.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3 class="feature-title">ICAI Guidance Note Aligned</h3>
        <p class="feature-desc">All Division II Ind AS Schedule III workpapers prepared per the ICAI Guidance Note on Division II - the primary practitioner manual; numerator and denominator definitions for all eleven financial ratios documented per the Guidance Note formulas.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Four-Office National Coverage</h3>
        <p class="feature-desc">Patron offices in Pune, Mumbai, Delhi and Gurugram with travel coverage for Schedule III review onboarding within 7 days of enquiry - particularly for Phase II Ind AS transitions and Division III NBFC engagements.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Trust Signals</h2>
            <div class="content-text">
                
                
<p style="font-size:18px;font-weight:600;color:var(--blue);margin-bottom:12px;">10,000+ Businesses Served &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 50,000+ Documents Filed &nbsp;|&nbsp; 15+ Years of Practice</p>

<p>Trusted by Hyundai, Asian Paints, Bridgestone and a growing roster of Pvt Ltd companies, Ind AS adopters and NBFCs across manufacturing, financial services, real estate, e-commerce and SaaS. Patron Schedule III teams operate from offices in Pune, Mumbai, Delhi and Gurugram with national coverage for Schedule III review and full financial statement preparation engagements.</p>

<p><strong>Why CFOs and finance controllers choose Patron:</strong> Schedule III is the canonical format - it is not optional, not negotiable and any departure must be justified by relevance to industry-specific requirements or applicable accounting standards. The March 2021 amendments substantially expanded the disclosure requirements - what was a 70-page Schedule III in 2014 grew to a 110-plus-page Schedule III by 2022. For Pvt Ltd companies preparing for investor diligence, lender renewals or pre-IPO transition, a senior partner-led mid-tier firm with deep Schedule III process discipline delivers equivalent assurance at one-third the Big-Four fee.</p>

<p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting services Division I, Division II and Division III companies across India - both in-person and remotely.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Big-Four vs Patron - Schedule III Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House Finance Team</th><th>Big-Four Firm</th><th>Patron Structured Pod</th></tr></thead>
                    <tbody>
                        
<tr><td>ERP Mapping for Division II Ind AS</td><td>Often inconsistent across years</td><td>Centralised methodology</td><td><span class="badge-included">Configured</span> at engagement start</td></tr>
<tr><td>Ageing Schedule Construction</td><td>First-year errors common</td><td>Standard procedure</td><td><span class="badge-included">Monthly</span> run-up to year-end</td></tr>
<tr><td>Eleven Financial Ratios Computation</td><td>Mechanical or with errors</td><td>Standard procedure</td><td><span class="badge-included">ICAI GN</span> aligned definitions</td></tr>
<tr><td>Financial Ratio Variance Explanation</td><td>Mechanical or missing</td><td>Standard procedure</td><td><span class="badge-included">Operational</span>-event-tied</td></tr>
<tr><td>ARI Disclosure Bundle</td><td>Often inconsistent with CARO</td><td>Centralised reconciliation</td><td><span class="badge-included">Single</span> working file reconciliation</td></tr>
<tr><td>CARO 2020 + IFC + Schedule III Reconciliation</td><td>Three separate workpapers</td><td>Heavy review</td><td><span class="badge-included">Built in</span> to review process</td></tr>
<tr><td>Audit Trail (FY 2023-24 onwards)</td><td>ERP gap common</td><td>Standard procedure</td><td><span class="badge-included">ERP</span> configured at start</td></tr>
<tr><td>Senior CA Partner Review</td><td>N/A</td><td>Standard, availability varies</td><td><span class="badge-included">Standard</span> on every engagement</td></tr>
<tr><td>Cost for Mid-Size Division II (Rs 100 cr)</td><td>Apparent zero - errors expensive in audit and lender diligence</td><td>Rs 12 to 25 lakh</td><td>Rs 4.5 to 10 lakh</td></tr>


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
            <h2 class="section-title">Related Patron Services for the Audit Cluster</h2>
            <div class="content-text">
                
                
<p>Schedule III compliance pairs naturally with several Patron service lines across the audit cluster - all delivered by the same CA pod for a single point of accountability.</p>
<ul>
    <li><strong><a href="/statutory-audit">Statutory Audit (Parent Hub)</a>:</strong> National statutory audit topical authority hub - methodology, applicability matrix across all entity types and Patron-vs-commodity comparison.</li>
    <li><strong><a href="/statutory-audit-private-limited-company">Pvt Ltd Statutory Audit</a>:</strong> Pvt Ltd entity-specific spoke - CARO 2020 four-criteria exemption, Section 143(3)(i) IFC under G.S.R. 583(E), Section 139(2) rotation under Rule 5.</li>
    <li><strong><a href="/qualified-audit-opinion-handling-guide">Qualified Audit Opinion Handling Guide</a>:</strong> CFO post-receipt operational playbook for handling a qualified opinion - Schedule III non-compliance is a frequent qualification trigger.</li>
    <li><strong><a href="/qualified-vs-unqualified-audit-opinion">Qualified vs Unqualified Audit Opinion</a>:</strong> Practitioner framework on the four qualification triggers - Schedule III non-compliance falls under Trigger 1 (GAAP departure).</li>
    <li><strong><a href="/appointment-of-auditor">Appointment of Auditor</a>:</strong> ADT-1 filing service - statutory auditor responsible for Schedule III opinion under Section 143(3)(b).</li>
    <li><strong><a href="/change-of-auditor">Change of Auditor</a>:</strong> Section 140 procedural compliance - relevant when Schedule III qualification disagreement triggers auditor change.</li>
    <li><strong><a href="/private-limited-company-compliance">Private Limited Company Compliance</a>:</strong> Annual retainer covering AOC-4 filing with Schedule III financials, MGT-7 / MGT-7A and ongoing ROC obligations.</li>
    <li><strong><a href="/tax-audit">Tax Audit</a>:</strong> Section 44AB tax audit - Form 3CD disclosures parallel to Schedule III for tax purposes; tax adjustment items can trigger Schedule III ARI items.</li>
    <li><strong><a href="/internal-audit">Internal Audit</a>:</strong> Section 138 preventative internal audit - Schedule III process audit for first-time adopters and Phase II Ind AS transitions.</li>
    <li><strong><a href="/gst-audit">GST Audit</a>:</strong> Section 35(5) CGST audit and Form 9C reconciliation - GST adjustment items can trigger Schedule III disclosure changes.</li>
    <li><strong><a href="/roc-notice">ROC Notice Response</a>:</strong> Defence and reply support for MCA / ROC adjudication on AOC-4 filings with Schedule III deviations.</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework Governing Schedule III</h2>
            <div class="content-text">
                
                
<p><strong>Statutory Authority:</strong> Schedule III to the Companies Act, 2013 read with Section 129 - form and content of financial statements. <strong>Section 129</strong> mandates every company to prepare financial statements giving a true and fair view, complying with accounting standards under Section 133 and in the form prescribed in Schedule III.</p>

<p><strong>Section 129(1) Override:</strong> If financial statements do not give a true and fair view by complying with Section 129, the company shall disclose the deviation, reasons and effect.</p>

<p><strong>Section 129(4):</strong> Provisions applicable to financial statements of a holding company apply mutatis mutandis to consolidated financial statements - Schedule III therefore applies to CFS in the same division as the holding company standalone financial statements.</p>

<p><strong>Section 133 (<a href="https://www.icai.org" target="_blank" rel="noopener">ICAI Portal</a>):</strong> Central Government power to prescribe accounting standards - Companies (AS) Rules 2006 and Companies (Ind AS) Rules 2015 issued under this section.</p>

<p><strong>Section 134 + Section 137 (<a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a>):</strong> Section 134 covers Board Report content, Director Responsibility Statement and signing of financial statements. Section 137 covers filing of financial statements (Form AOC-4) with Registrar of Companies within 30 days of AGM.</p>

<p><strong>Section 198:</strong> Calculation of net profits for managerial remuneration; CSR base under Section 135.</p>

<p><strong>Division I Framework - Companies (Accounting Standards) Rules 2006:</strong> AS 1 to AS 29; format under Schedule III Division I.</p>

<p><strong>Division II Framework - Companies (Indian Accounting Standards) Rules 2015:</strong> Ind AS 1 to Ind AS 116; format under Schedule III Division II.</p>

<p><strong>Division III Framework:</strong> Companies (Indian Accounting Standards) Rules 2015 - Ind AS for NBFCs; format under Schedule III Division III added in 2018 and updated in 2021.</p>

<p><strong>MCA Notification G.S.R. 207(E) dated 24 March 2021:</strong> Major Schedule III amendments - ageing schedules, promoter shareholding, financial ratios, Additional Regulatory Information, mandatory rounding off; effective from FY commencing on or after 1 April 2021.</p>

<p><strong>Audit Trail Rules:</strong> Companies (Accounts) Rules 2014 Rule 3(1) - books of account maintained in electronic mode must have an audit trail feature; effective from FY commencing on or after 1 April 2023.</p>

<p><strong>MSMED Act 2006:</strong> Trade payables disclosure includes MSME bifurcation with unpaid principal and accrued interest; cross-referenced to ARI.</p>

<p><strong>Prevention of Money-Laundering Act 2002:</strong> Funded-party UBO disclosure under ARI - declaration that transactions are not violative of PMLA.</p>

<p><strong>FEMA 1999:</strong> Foreign-entity transaction declarations under ARI - declaration of FEMA compliance.</p>

<p><strong>Benami Transactions (Prohibition) Act 1988:</strong> Benami property proceedings disclosure under ARI; cross-referenced with CARO 2020 Clause 3(i)(e).</p>

<p><strong>Companies (Registered Valuers and Valuation) Rules 2017:</strong> Revaluation of PP and E by Registered Valuer disclosure under ARI.</p>

<p><strong>ICAI Guidance Note on Division II:</strong> Ind AS Schedule III to the Companies Act 2013 (latest revision) - the primary practitioner manual for Ind AS Schedule III.</p>

<p style="margin-top:20px;"><strong>Penalty Snapshot</strong></p>
<ul>
    <li>Section 129(7) - non-compliance with Schedule III: officer in default Rs 50,000 to Rs 5,00,000; imprisonment up to 1 year (managing director, whole-time director, CFO, other in charge)</li>
    <li>Section 137 non-compliance with AOC-4 filing - Rs 100 per day per form additional fee with no upper cap</li>
    <li>Section 134 Board Report non-compliance with Section 134(3)(f) explanation - officer in default penalty</li>
    <li>CCFS 2026 (closes 15 July 2026) - 10 percent of accumulated additional fees instead of 100 percent for AOC-4 backlog</li>
    <li>NFRA inspection findings on Schedule III - independent penalty framework</li>
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
                    <h2 class="faq-expanded__title">Schedule III Compliance FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on Schedule III to the Companies Act 2013, Division I (AS) vs Division II (Ind AS) vs Division III (NBFC), the March 2021 amendments (four ageing schedules, promoter shareholding, eleven financial ratios, ARI disclosures), audit trail effective 1 April 2023 and Patron Schedule III compliance methodology - answered by the Patron CA and CS team.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Schedule III Compliance FAQs'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Schedule III of the Companies Act?</h3>
                        <div class="faq-expanded__a"><p>Schedule III to the Companies Act, 2013 is the statutory schedule that prescribes the form and content of financial statements that every Indian company must prepare under Section 129 of the Act. It contains three divisions - Division I for companies preparing under the Companies (Accounting Standards) Rules, 2006 (AS / Indian GAAP); Division II for companies under the Companies (Indian Accounting Standards) Rules, 2015 (Ind AS); and Division III for Non-Banking Financial Companies (NBFCs) covered under Ind AS. Schedule III prescribes balance sheet line items, P&amp;L line items, sub-line items, ageing schedules, financial ratios and Additional Regulatory Information disclosures.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Schedule III Division I and Division II?</h3>
                        <div class="faq-expanded__a"><p>Division I applies to companies preparing financial statements under the Companies (Accounting Standards) Rules, 2006 - the AS / Indian GAAP framework. Division II applies to companies preparing under the Companies (Indian Accounting Standards) Rules, 2015 - the Ind AS framework. Division II is significantly more detailed than Division I, with Ind AS-specific presentation requirements (Other Comprehensive Income section, lease liabilities under Ind AS 116, expected credit loss classification of trade receivables, financial instrument disclosures). Both divisions were significantly amended on 24 March 2021.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Division III of Schedule III?</h3>
                        <div class="faq-expanded__a"><p>Division III of Schedule III was introduced in 2018 (and significantly updated in 2021) to prescribe the format of financial statements for Non-Banking Financial Companies (NBFCs) that are covered under the Companies (Indian Accounting Standards) Rules, 2015. Division III aligns NBFC presentation with the financial-instrument-heavy disclosures required under Ind AS 109 (financial instruments classification and impairment), Ind AS 107 (financial instrument disclosures) and Ind AS 32 (presentation). NBFCs covered include those with net worth above Rs 500 crore from FY 2018-19 and net worth Rs 250 to 500 crore or listed NBFCs from FY 2019-20.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the 2021 amendments to Schedule III?</h3>
                        <div class="faq-expanded__a"><p>MCA Notification G.S.R. 207(E) dated 24 March 2021 introduced significant amendments effective from FY 2021-22 onwards. Key changes - (a) ageing schedules for trade receivables (5 buckets), trade payables (4 buckets), capital work-in-progress (4 buckets) and intangible assets under development (4 buckets); (b) promoter shareholding with percentage change; (c) eleven financial ratios with above-25-percent variance explanation; (d) Additional Regulatory Information (ARI) disclosures; (e) mandatory rounding off based on Total Income; (f) lease liabilities separately disclosed per Ind AS 116.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the trade receivables ageing schedule?</h3>
                        <div class="faq-expanded__a"><p>The trade receivables ageing schedule is one of the four ageing schedules introduced by the 24 March 2021 Schedule III amendments. Trade receivables outstanding at year-end must be classified into five age buckets - less than 6 months, 6 months to 1 year, 1-2 years, 2-3 years and more than 3 years from the due date (or transaction date where due date is not specified) - with separate Unbilled and Not-Due columns to bridge to the total trade receivables on the balance sheet face. Each bucket is sub-classified.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are Additional Regulatory Information (ARI) disclosures?</h3>
                        <div class="faq-expanded__a"><p>Additional Regulatory Information (ARI) is the bundle of disclosures introduced by the 24 March 2021 Schedule III amendments covering thirteen distinct areas - title deeds of immovable property not in name of company; revaluation of PP and E; loans / advances to promoters / directors / KMP / related parties with no terms; benami property proceedings; wilful defaulter status; relationship with struck-off companies; charge registration delays; Section 2(87) layers compliance; Scheme of Arrangement effects; funded-party UBO; virtual currency transactions; surrendered income; CSR shortfall. Most ARI disclosures overlap with CARO 2020 clauses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is Schedule III applicable to private limited companies?</h3>
                        <div class="faq-expanded__a"><p>Yes, Schedule III applies to every company registered under the Companies Act, 2013 - including private limited companies - with no asset, turnover or paid-up capital exemption. Unlike CARO 2020 (which has the small-company and qualifying Pvt Ltd exemptions) and IFC under Section 143(3)(i) (which has the MCA 13 June 2017 exemption), Schedule III always applies. What does vary is which division applies. Most unlisted Pvt Ltd companies prepare financial statements under Division I (AS framework); those crossing Rs 250 crore net worth transition to Division II.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What financial ratios must be disclosed under Schedule III?</h3>
                        <div class="faq-expanded__a"><p>The 24 March 2021 amendments require disclosure of eleven financial ratios in the notes to accounts - Current Ratio, Debt-Equity Ratio, Debt Service Coverage Ratio, Return on Equity Ratio, Inventory Turnover Ratio, Trade Receivables Turnover Ratio, Trade Payables Turnover Ratio, Net Capital Turnover Ratio, Net Profit Ratio, Return on Capital Employed and Return on Investment. For each ratio, the company must explain numerator and denominator definitions used and provide a specific explanation for any ratio that has changed by more than 25 percent versus prior year.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Q: Schedule III kya hai?</strong><br>Companies Act 2013 ka schedule jo company ke financial statements ka format prescribe karta hai - Section 129 ke under. Three divisions - I (AS), II (Ind AS), III (NBFC Ind AS).</p>
<p><strong>Q: Division I aur Division II mein kya farak hai?</strong><br>Division I unlisted companies under AS framework ke liye. Division II Ind AS companies ke liye - listed + unlisted Rs 250 cr+ net worth + their subsidiaries. Division III NBFCs ke liye 2018 mein add hua.</p>
<p><strong>Q: 2021 mein kya bada amendment aaya?</strong><br>24 March 2021 ki MCA notification - ageing schedules (4 schedules), promoter shareholding with % change, 11 financial ratios, ARI disclosures (title deeds, benami, struck-off, crypto, funded-party UBO), mandatory rounding off Total Income basis pe.</p>
<p><strong>Q: Trade receivables ageing kaise karte hain?</strong><br>5 buckets - less than 6 months, 6 mo-1 yr, 1-2 yr, 2-3 yr, more than 3 yr. Due date se age count karte hain - agar due date nahi hai toh transaction date se. Unbilled aur Not-Due alag columns hote hain.</p>
<p><strong>Q: ARI disclosures CARO se overlap karti hain?</strong><br>Haan, kaafi sare - title deeds (CARO 3(i)(c)), benami (CARO 3(i)(e)), CSR (CARO 3(xx)), statutory dues (CARO 3(vii)), struck-off relationships - dono mein cross-reference karna padta hai consistency ke liye.</p>
<p><strong>Q: Rounding off mandatory hai?</strong><br>Haan, 2021 amendment ke baad. "May" se "shall" ho gaya. Total Income ke basis pe round off karna - Rs 100 cr se kam toh hundreds / thousands / lakhs; Rs 100 cr aur uparr toh lakhs / millions / crores.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Schedule III Is Not Optional - Every Company, Every Year</h2>
            <div class="content-text">
                
                
<p>Schedule III to the Companies Act, 2013 is the canonical format for every Indian company financial statements - <strong>no asset, turnover or paid-up capital exemption</strong>. The March 2021 amendments substantially expanded the disclosure requirements; the audit trail rules effective FY 2023-24 added an ERP-level compliance dimension. Schedule III non-compliance is one of the most-frequent qualification triggers (GAAP departure under SA 705 Trigger 1) and a recurring source of lender diligence flags during M&amp;A.</p>

<p style="margin-top:16px;">Penalties under Section 129(7) - officer in default Rs 50,000 to Rs 5,00,000 with imprisonment up to 1 year. AOC-4 filing penalties under Section 137 - Rs 100 per day per form with no upper cap unless CCFS 2026 applies (10 percent of accumulated additional fees till 15 July 2026).</p>

<p style="margin-top:16px;"><strong>Action now:</strong> book a Patron standalone Schedule III review before audit fieldwork starts - typically 6 to 8 weeks before year-end. Call <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700">WhatsApp us</a>.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Run Your Financial Statements the Schedule III Way</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#fff;">Schedule III to the Companies Act, 2013 prescribes the canonical format for every Indian company financial statements under Section 129 of the Act. Three divisions - Division I (AS framework), Division II (Ind AS) and Division III (NBFC under Ind AS) - cover the full spectrum of accounting frameworks. The 2021 amendments substantially expanded the disclosure obligations - four ageing schedules, promoter shareholding with absolute percentage change, eleven financial ratios with above-25-percent variance explanation, thirteen Additional Regulatory Information disclosures, mandatory rounding off based on Total Income and lease liabilities separately disclosed per Ind AS 116.</p>
<p style="color:#fff;margin-top:12px;">Audit trail rules effective FY commencing on or after 1 April 2023 added an ERP-level compliance dimension - books of account maintained in electronic mode must have audit trail feature that cannot be disabled. Schedule III non-compliance is a leading qualification trigger under SA 705 (GAAP departure, Trigger 1) and a recurring source of lender diligence flags during institutional borrowing and M&amp;A transactions.</p>
<p style="color:#fff;margin-top:12px;">Patron Accounting handles Schedule III compliance as a year-round managed engagement - trial-balance-to-Schedule-III mapping at engagement start, monthly ageing run-up to year-end, ARI disclosure bundle as a single working file with CARO 2020 reconciliation and partner sign-off with SA 220 quality control. Cross-sell to /statutory-audit, /statutory-audit-private-limited-company, /qualified-audit-opinion-handling-guide, /qualified-vs-unqualified-audit-opinion, /appointment-of-auditor, /change-of-auditor, /tax-audit, /internal-audit and /private-limited-company-compliance delivers a single CA pod across the audit cluster.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20Patron%20consultation%20on%20Schedule%20III%20compliance%20under%20the%20Companies%20Act%202013." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Schedule%20III%20Compliance&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Schedule%20III%20compliant%20financial%20statement%20preparation%20and%20review%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Explore Related Audit and Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end Patron support for the audit cluster - same CA and CS pod, single engagement letter across statutory audit, Schedule III preparation, qualification management and audit-related ROC compliance.</p>
         
            
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Adjacent compliance workflows for Pvt Ltd entities, listed entities, NBFCs, family-business groups and pre-IPO transitions.</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">National Hub</div></div></a>
        <a href="/statutory-audit-private-limited-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><div><div class="pa-card-title">Pvt Ltd Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/qualified-audit-opinion-handling-guide" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><div><div class="pa-card-title">Qualified Opinion Handling</div><div class="pa-card-sub">India</div></div></a>
        <a href="/qualified-vs-unqualified-audit-opinion" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">Qualified vs Unqualified Opinion</div><div class="pa-card-sub">India</div></div></a>
        <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
        <a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India</div></div></a>
        <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">14 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months by the Patron CA &amp; CS team to capture MCA Schedule III amendments, ICAI Guidance Note revisions on Division II Ind AS, audit trail rule applicability dates, NFRA inspection observations on Schedule III non-compliance and Companies Act 2013 amendment cycles.</p>
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