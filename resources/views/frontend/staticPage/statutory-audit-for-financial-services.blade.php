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
    <title>Audit for Financial Services</title>
    <meta name="description" content="CA-led statutory audit for NBFCs, fintech lenders and AIFs - RBI prudential norms, NPA classification, CARO 3(xvi), CRAR, Ind AS 109. From Rs 1,50,000.">
    <link rel="canonical" href="/statutory-audit-for-financial-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Audit for Financial Services 2026 | Patron Accounting">
    <meta property="og:description" content="CA-led statutory audit for NBFCs, fintech lenders and AIFs - RBI prudential norms, NPA classification, CARO 3(xvi), CRAR, Ind AS 109. From Rs 1,50,000.">
    <meta property="og:url" content="/statutory-audit-for-financial-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-financial-services-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Audit for Financial Services 2026 | Patron Accounting">
    <meta name="twitter:description" content="CA-led statutory audit for NBFCs, fintech lenders and AIFs - RBI prudential norms, NPA classification, CARO 3(xvi), CRAR, Ind AS 109. From Rs 1,50,000.">
    <meta name="twitter:image" content="/images/statutory-audit-for-financial-services-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/statutory-audit-for-financial-services#breadcrumb",
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
              "name": "For Financial Services",
              "item": "/statutory-audit-for-financial-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/statutory-audit-for-financial-services#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is statutory audit mandatory for NBFCs in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - including every NBFC, HFC, fintech lender, AIF Manager and Core Investment Company - irrespective of asset size or profitability. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment. For deposit-taking NBFCs, the appointment additionally requires prior concurrence of the Reserve Bank of India under Section 30A of the RBI Act, with a three-year cooling-off rule between consecutive audits."
              }
            },
            {
              "@type": "Question",
              "name": "What is the 90-day NPA classification norm?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the RBI IRACP Directions, 2025 (effective 28 November 2025), a loan account is classified as a Non-Performing Asset when interest or principal remains overdue for 90 days or more. The 90-day norm applies to NBFC-Middle Layer, Upper Layer and Top Layer with immediate effect; a phased glide path applies to NBFC-Base Layer. Once classified as NPA, the account moves through Sub-standard, Doubtful D1 / D2 / D3, and Loss categories. Upgrade to Standard requires full payment of all arrears of interest and principal."
              }
            },
            {
              "@type": "Question",
              "name": "What is CARO clause 3(xvi)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CARO 2020 clause 3(xvi) is a financial-services-specific reporting requirement with four sub-clauses. (a) Whether the company is required to be registered under Section 45-IA of the RBI Act and if so, whether the registration has been obtained. (b) Whether the company has conducted any NBFC activity without holding a valid Certificate of Registration - an offence under Chapter V of the RBI Act. (c) Whether the company qualifies as a Core Investment Company. (d) Whether more than one CIC exists in the group. Each sub-clause is independently tested and reported by the statutory auditor."
              }
            },
            {
              "@type": "Question",
              "name": "What is the minimum CRAR for NBFCs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the RBI Master Direction NBFC Scale-Based Regulation (October 2023), the minimum Capital to Risk-weighted Assets Ratio is 15 percent for all NBFC-Deposit-taking entities, NBFC-Middle Layer, NBFC-Upper Layer and NBFC-Top Layer. Tier I capital must be at least 10 percent of risk-weighted assets. NBFC-Base Layer with AUM under Rs 500 crore is exempt from CRAR but must maintain a leverage ratio (Total Outside Liabilities to Owned Funds) not exceeding 7. The auditor independently computes the CRAR against the RBI risk-weights matrix."
              }
            },
            {
              "@type": "Question",
              "name": "How is interest income on NPAs recognised?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the IRACP Directions, 2025, interest, processing fees and any other charges on Non-Performing Assets can be recognised in income only on a realisation basis - not on accrual. Additionally, any income that was recognised on an accrual basis before the loan account became an NPA must be reversed in the financial year in which the account is classified as NPA. The statutory auditor tests a sample of NPA accounts to confirm both the realisation-basis recognition post-NPA and the reversal of pre-NPA accrued income. For Ind AS reporters, this interacts with the effective interest rate method under Ind AS 109."
              }
            },
            {
              "@type": "Question",
              "name": "What is the 50-50 test for NBFC classification?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The 50-50 test, established by RBI Circular 2011-12/446, determines whether a company qualifies as an NBFC. A company is treated as an NBFC if its financial assets are at least 50 percent of total assets, and its income from financial assets is at least 50 percent of total income. Both conditions must be satisfied. The statutory auditor signs a separate certificate to the RBI Department of Non-Banking Supervision under Paragraph 9C of the NBFC Prudential Norms Directions confirming the 50-50 test outcome and whether the company continues to qualify for registration under Section 45-IA."
              }
            },
            {
              "@type": "Question",
              "name": "How does Ind AS 109 ECL interact with RBI IRACP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ind AS 109 prescribes a three-stage Expected Credit Loss model - Stage 1 (12-month ECL for performing assets), Stage 2 (Lifetime ECL for assets with significant credit deterioration), Stage 3 (Lifetime ECL for credit-impaired assets / NPAs). RBI IRACP prescribes fixed provisioning percentages by asset class. For NBFCs reporting under Ind AS, RBI Notification dated 13 March 2020 requires parallel computation of both - where IRACP provisioning exceeds Ind AS 109 ECL, the differential is appropriated from retained earnings into a non-distributable Impairment Reserve, disclosed in the Statement of Changes in Equity."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Para 9C auditor certificate to RBI?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Paragraph 9C of the NBFC Prudential Norms Directions, inserted by RBI under Section 45JA of the RBI Act, 1934, requires the statutory auditor of every NBFC to submit a separate certificate to the Reserve Bank of India confirming that the entity is engaged in the business of a non-banking financial institution requiring it to hold a Certificate of Registration under Section 45-IA. The certificate references the position as at end of the financial year, is filed with the Regional Office of the Department of Non-Banking Supervision, and effectively serves as the annual confirmation of the 50-50 test outcome."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/statutory-audit-for-financial-services#service",
          "name": "Statutory Audit for Financial Services Companies",
          "url": "/statutory-audit-for-financial-services",
          "serviceType": "Statutory Audit (Financial Services - NBFC, HFC, Fintech Lender, AIF, MFI)",
          "description": "CA-led statutory audit for Indian financial services companies - NBFCs, HFCs, fintech lenders, MFIs and AIF managers - under Section 143 of the Companies Act, 2013, covering RBI Master Direction prudential norms compliance, IRACP-based NPA classification with the 90-day overdue trigger, CARO clause 3(xvi) registration and CIC verification, capital adequacy (CRAR) computation, Ind AS 109 expected credit loss with RBI Impairment Reserve overlay, and Paragraph 9C separate auditor certificate to the RBI.",
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
              "name": "Non-banking financial company",
              "sameAs": "https://en.wikipedia.org/wiki/Non-banking_financial_company_%26_microfinance_institutions_in_India"
            },
            {
              "@type": "Thing",
              "name": "Reserve Bank of India",
              "sameAs": "https://en.wikipedia.org/wiki/Reserve_Bank_of_India"
            },
            {
              "@type": "Thing",
              "name": "Companies Act 2013",
              "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Financial Services Statutory Audit Packages",
            "itemListElement": [
              {
                "@type": "Offer",
                "name": "NBFC-BL (AUM under Rs 100 crore)",
                "priceCurrency": "INR",
                "price": "150000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "NBFC-BL (AUM Rs 100 to 500 crore)",
                "priceCurrency": "INR",
                "price": "375000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "NBFC-ML (AUM Rs 1,000 to 10,000 crore) with LFAR",
                "priceCurrency": "INR",
                "price": "1500000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "AIF Manager (SEBI Cat I / II / III)",
                "priceCurrency": "INR",
                "price": "300000",
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
                        Statutory Audit for Financial Services Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trial balance, loan book with DPD ageing, RBI Certificate of Registration (Form CoR), CRAR computation, NBS quarterly returns, Ind AS 109 ECL model, IRACP Impairment Reserve working</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 1,50,000 for NBFC-Base Layer with AUM under Rs 100 crore; scales by SBR layer, loan book size and product mix</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian NBFC, HFC, fintech lender, MFI, AIF Manager and financial services company under Section 139 - irrespective of profit. RBI Certificate of Registration under Section 45-IA mandatory</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 9 weeks fieldwork; loan book sampling; IRACP and ECL parallel computation; Para 9C auditor certificate to RBI</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20CA-led%20statutory%20audit%20for%20our%20NBFC%20%2F%20fintech%20lender.%20Please%20share%20a%20layer-tiered%20fixed-fee%20quote." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Financial Services Audit'/>
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
                                
<option value="statutory-audit-for-financial-services" selected>Statutory Audit (Financial Services)</option>
<option value="statutory-audit">Statutory Audit (Hub)</option>
<option value="tax-audit">Tax Audit (Section 44AB)</option>
<option value="internal-audit">Internal Audit (RBI RBIA)</option>
<option value="nbfc-registration">NBFC Registration</option>
<option value="aif-registration">AIF Registration</option>
<option value="gst-audit">GST Audit</option>
<option value="private-limited-company-compliance">Private Limited Company Compliance</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
<option value="change-of-auditor">Change of Auditor</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The statutory audit was clean and completed well before deadline. No last-minute rush. Patron team handled the IRACP re-classification and Ind AS 109 ECL reconciliation under a single CA partner - we used to have three different advisors for these three workstreams.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">BL</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">NBFC-BL CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Non-Deposit NBFC, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Para 9C auditor certificate to DNBS was filed within the 90-day window with the 50-50 test working that withstood the next supervisory inspection - the inspecting RBI officer specifically commented on the working paper quality.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">ML</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">NBFC-ML Compliance Head</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Middle-Layer NBFC, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">FLDG and LSP arrangement audit was the deal-breaker for our Series C investor diligence. Patron clarified the FLDG cap compliance, the escrow mechanism, and the LSP commission recognition under Ind AS 115. Investor cleared the round in 60 days.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FT</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Fintech Founder CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Digital NBFC, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled the parallel NHB norms overlay on top of the standard NBFC audit. Risk-weights for housing finance, mortgage testing, and the NHB returns cross-check were delivered in 6 weeks. CRAR computation tied to the basis-point.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">HFC Finance Director</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Housing Finance Company, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">INR-USD valuation under SEBI AIF Regulation 23 was always a contentious area. Patron provided a robust valuation working with comparable transactions, DCF, and Ind AS 113 fair value hierarchy. Investor reporting tied through clean.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AI</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">AIF Manager</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SEBI Cat II Fund, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Multiple-MFI exposure checks under RBI Microfinance Directions 2022 were tested borrower-by-borrower. The household income cap compliance and the multiple-lender exposure limit were verified against actual borrower data. Supervisory rating improved.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">NBFC-MFI Finance Head</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Microfinance Institution, Chennai</div>
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
                    <p>RBI prudential norms, IRACP NPA classification, CARO 3(xvi), CRAR, Ind AS 109 ECL, Para 9C certificate - delivered under one CA partner from Rs 1,50,000.</p>
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
                <a href="#challenges-section" class="toc-btn">Common Challenges</a>
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
            <h2 class="section-title">Statutory Audit for Financial Services: A Snapshot</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Financial Services Audit Services at a Glance</strong></p>
                    <p>Statutory audit for financial services companies in India is the annual independent examination of financial statements under Section 143 of the Companies Act, 2013, with six sector-specific risk areas: RBI Master Direction prudential norms compliance, IRACP-based NPA classification with the 90-day overdue trigger, CARO clause 3(xvi)(a) to (d) registration and CIC verification, capital adequacy (CRAR) computation at 15 percent minimum with 10 percent Tier I, Ind AS 109 expected credit loss model with RBI Impairment Reserve overlay, and Para 9C separate auditor certificate to the RBI on the 50-50 test outcome.</p>
                </div>
                <p><strong>Quick-Reference Summary Table</strong></p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 139 to 148; RBI Act, 1934 - Section 45-IA</td></tr><tr><td>Applicable To</td><td>NBFCs, HFCs, fintech lenders, MFIs, AIF Managers, gold loan companies, vehicle finance companies, NBFC-Factor, NBFC-AA, NBFC-P2P</td></tr><tr><td>SBR Framework</td><td>NBFC-BL (Base, AUM under Rs 1,000 cr) / NBFC-ML (Middle, Rs 1,000 to 10,000 cr or specified) / NBFC-UL (Upper, top 10 by parametric scoring) / NBFC-TL (Top, currently empty)</td></tr><tr><td>NPA Norm</td><td>90 days past due for NBFC-ML, UL and TL; glide path applies to NBFC-BL</td></tr><tr><td>CRAR Minimum</td><td>15 percent (Tier I 10 percent) for NBFC-D and NBFC-ML/UL/TL</td></tr><tr><td>NoF for Registration</td><td>Rs 2 crore (Rs 10 crore for new NBFC-ICC w.e.f Oct 2022)</td></tr><tr><td>Cost Starting From</td><td>Rs 1,50,000 (Patron - NBFC-BL, AUM under Rs 100 crore)</td></tr></tbody></table></div><p>Financial services audits operate at a tighter regulatory standard than any other industry in India. The auditor reports not only to shareholders under Section 143 of the Companies Act, but also separately to the Reserve Bank of India under Paragraph 9C of the NBFC Prudential Norms Directions confirming the entity qualifies as an NBFC under the 50-50 test.</p>
                <p>CARO clause 3(xvi) has four sub-clauses specific to financial-services companies covering registration under Section 45-IA, conduct of business without Certificate of Registration as an offence under Chapter V of the RBI Act, Core Investment Company qualification, and multi-CIC group identification. Add Ind AS 109 expected credit loss modelling with RBI parallel IRACP Impairment Reserve framework introduced 13 March 2020, and the audit becomes a tri-track exercise of Companies Act, RBI Master Directions, and ICAI Standards on Auditing - delivered by Patron under a single CA partner.</p>
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
                <h2 class="section-title">What Is Statutory Audit for Financial Services Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Statutory audit for financial services companies is the legally mandated annual examination of financial statements under Section 143 of the Companies Act, 2013, covering six sector-specific risk areas: RBI Master Direction compliance, IRACP-based NPA classification, CARO clause 3(xvi) registration verification, capital adequacy (CRAR), Ind AS 109 expected credit loss with IRACP Impairment Reserve overlay, and Para 9C auditor certificate to the RBI.</p>
<p>It is conducted by an independent practicing Chartered Accountant holding a valid Certificate of Practice from ICAI. The audit applies to every Indian financial services company regardless of size or profit - a Base-Layer NBFC with Rs 50 crore AUM and a Middle-Layer NBFC with Rs 5,000 crore AUM are equally bound. The auditor opinion under SA 700 is filed with the Registrar of Companies in Form AOC-4 within 30 days of the AGM, Form ADT-1 intimates auditor appointment within 15 days of the board resolution, and the Para 9C auditor certificate is filed separately with the Department of Non-Banking Supervision of the RBI for NBFCs. Source: <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>.</p>
<p>What distinguishes financial-services audits is the depth of regulatory testing. The auditor independently re-classifies the entire loan book on a Days-Past-Due (DPD) basis as Standard, Sub-standard, Doubtful (D1, D2, D3) and Loss; re-computes interest income reversal for accounts that crossed the 90-day NPA trigger during the year; validates the CRAR calculation against risk-weighted assets under the RBI risk-weights matrix; reconciles the Ind AS 109 expected credit loss provision with the IRACP provisioning floor; and signs the Para 9C certificate to the RBI confirming the entity continues to qualify as an NBFC under the 50-50 test (financial assets are at least 50 percent of total assets, and income from financial assets is at least 50 percent of total income).</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Financial Services Audit:</strong></p>
                    
<p><strong>Section 45-IA Certificate of Registration (CoR):</strong> Under Section 45-IA of the RBI Act, 1934, no company can commence or carry on the business of a non-banking financial institution without obtaining a CoR from the RBI and maintaining the Net Owned Fund (Rs 2 crore minimum; Rs 10 crore for new NBFC-Investment and Credit Companies from October 2022).</p>
<p><strong>50-50 Test:</strong> RBI Circular 2011-12/446 - a company is treated as an NBFC if (a) financial assets are at least 50 percent of total assets, and (b) income from financial assets is at least 50 percent of total income. The Para 9C auditor certificate confirms this test annually.</p>
<p><strong>DPD (Days Past Due):</strong> Number of days for which interest or principal of a loan account remains overdue. The auditor independently calculates DPD on a borrower-wise basis and applies the asset-classification matrix.</p>
<p><strong>NPA (Non-Performing Asset):</strong> A loan account where interest or principal remains overdue for 90 days or more (NBFC-ML, UL, TL); glide path applies to NBFC-BL. Categories - Sub-standard (NPA up to 12 months), Doubtful D1 (12 to 24 months), D2 (24 to 48 months), D3 (above 48 months), Loss (identified loss but not written off).</p>
<p><strong>CRAR (Capital to Risk-weighted Asset Ratio):</strong> Minimum 15 percent for NBFC-D and NBFC-ML / UL / TL, with Tier I capital at least 10 percent of risk-weighted assets. NBFC-BL with AUM under Rs 500 crore exempt from CRAR but maintain a leverage ratio of 7.</p>
<p><strong>Ind AS 109 ECL:</strong> Expected Credit Loss model - 12-month ECL for Stage 1 (performing), Lifetime ECL for Stage 2 (significant credit deterioration) and Stage 3 (credit-impaired / NPA). RBI requires parallel IRACP provisioning computation and creation of an Impairment Reserve where IRACP provision exceeds ECL.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Financial Services Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Statutory Framework</span>
                        <strong>Sec 143 + RBI Sec 45-IA + CARO 3(xvi)</strong>
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
            <h2 class="section-title">Who Needs Statutory Audit (Financial Services)</h2>
            <div class="content-text">
                
                
<p>Statutory audit applies to every company incorporated under the Companies Act, 2013 - no asset-size threshold and no exemption based on profitability. For financial services entities the applicability stacks by RBI registration category and SBR layer:</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Entity Type / Layer</th><th>Examples</th><th>Audit Layers</th></tr></thead>
<tbody>
<tr><td>NBFC-Base Layer (BL)</td><td>Non-deposit NBFC with AUM under Rs 1,000 cr, NBFC-AA, NBFC-P2P, NOFHC</td><td>Sec 143 + CARO 3(xvi) + IRACP + Ind AS 109 ECL + Para 9C cert</td></tr>
<tr><td>NBFC-Middle Layer (ML)</td><td>AUM Rs 1,000 to 10,000 cr; NBFC-D, IDF-NBFC, IFC, NBFC-MFI, HFC, NBFC-Factor</td><td>All BL + CRAR 15% audit + ALM testing + CRILC reporting</td></tr>
<tr><td>NBFC-Upper Layer (UL)</td><td>Top 10 NBFCs by parametric scoring (Bajaj Finance, Shriram Finance etc)</td><td>All ML + LCR + Risk-Based Internal Audit + ICAAP review</td></tr>
<tr><td>HFC (Housing Finance Company)</td><td>Registered with NHB, follows NHB Master Direction</td><td>Sec 143 + NHB norms + Section 45-IA CoR (post Nov 2020 retained)</td></tr>
<tr><td>Fintech lender / digital NBFC</td><td>App-based personal loan, BNPL, SME credit lender</td><td>All BL + RBI Digital Lending Guidelines + LSP / FLDG audit</td></tr>
<tr><td>AIF Manager (SEBI-regulated)</td><td>Category I / II / III AIF management company</td><td>Sec 143 + SEBI AIF Regulations 2012 + INR-USD valuation under Reg 23</td></tr>
<tr><td>Microfinance Institution (MFI)</td><td>NBFC-MFI under RBI Microfinance Directions 2022</td><td>All ML + Microfinance lending limits + multiple-MFI exposure check</td></tr>
<tr><td>Insurance broker / IRDAI-regulated</td><td>Direct broker, composite broker, web aggregator</td><td>Sec 143 + IRDAI Brokers Regulations + commission TDS Sec 194D / 194DA</td></tr>
</tbody>
</table>
</div>
<p>Tax audit under Section 44AB applies at Rs 1 crore turnover. CARO 2020 applies in full to all financial-services companies; the 3(xvi) sub-clauses are specifically triggered by RBI registration status. Cost records under Section 148 do not apply (financial services are excluded from Table A and B). Section 138 internal audit is mandatory for all NBFC-ML, UL and TL irrespective of the Companies Act threshold, under RBI Risk-Based Internal Audit framework.</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Financial Services Audit Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Section 143 Full-Scope Statutory Audit</td><td>Companies Act 2013 audit with CARO 2020 21-clause annexure focused on clause 3(xvi)(a) to (d); SA 700 / 705 reporting; Ind AS or AS framework as applicable.</td></tr>
<tr><td>RBI Prudential Norms Audit (IRACP Directions 2025)</td><td>Borrower-wise NPA classification on DPD basis under the IRACP Directions, 2025 (effective 28 November 2025); reclassification into Standard, Sub-standard, Doubtful D1 / D2 / D3 and Loss; provisioning at prescribed rates; income reversal for accounts that crossed 90 DPD during the year.</td></tr>
<tr><td>CARO Clause 3(xvi) Verification</td><td>(a) Whether Section 45-IA CoR is required and obtained; (b) Whether the company has conducted NBFC activity without a valid CoR (offence under Chapter V of the RBI Act); (c) Whether the company qualifies as a Core Investment Company (CIC); (d) Whether more than one CIC exists in the group. Each sub-clause independently tested.</td></tr>
<tr><td>Capital Adequacy (CRAR) Audit</td><td>Independent computation of CRAR; risk-weighting of on-balance-sheet and off-balance-sheet exposures per RBI risk-weights matrix; Tier I (equity + free reserves) and Tier II (subordinated debt, etc) classification; verification of minimum 15 percent CRAR with Tier I at least 10 percent.</td></tr>
<tr><td>Ind AS 109 ECL and IRACP Impairment Reserve</td><td>Review of three-stage ECL model (12-month ECL Stage 1; Lifetime ECL Stage 2 and Stage 3); validation of PD, LGD and EAD estimation; SICR trigger testing; parallel IRACP provisioning per RBI Notification 13 March 2020; creation of Impairment Reserve from retained earnings where IRACP exceeds ECL.</td></tr>
<tr><td>Para 9C Auditor Certificate and DNBS Reporting</td><td>Separate certificate to DNBS confirming the 50-50 test outcome; review of quarterly NBS-1, NBS-2, NBS-3 and ALM-1 returns; CRILC reporting cross-check for NBFC-ML and above; Fair Practices Code, KYC, AML, and Digital Lending Guidelines compliance.</td></tr>


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
            <h2 class="section-title">Our 6-Step NBFC Statutory Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron follows a structured 6-step process tailored to the SBR layer of the NBFC, with parallel IRACP and Ind AS 109 ECL workings and a dedicated Para 9C certificate to the RBI.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Engagement and SBR-Layer Risk Profiling</h3>
        <p class="step-description">Patron issues SA 210 engagement letter, obtains independence and non-disqualification certificate under Section 141 plus RBI eligibility (no overlap with entity borrowing group, three-year cooling-off rule between NBFC audits, RBI empanelment). SBR-layer profile built - BL/ML/UL/TL, AUM bucket, product mix, DPD snapshot, CRAR position, related-party loan exposure.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 210 letter
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                RBI eligibility
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SBR profile
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
        <rect x="25" y="38" width="16" height="14" rx="2" fill="#25D366"/>
        <text x="33" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">BL</text>
        <rect x="44" y="38" width="16" height="14" rx="2" fill="#F5A623"/>
        <text x="52" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ML</text>
        <rect x="63" y="38" width="16" height="14" rx="2" fill="#E8712C"/>
        <text x="71" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UL</text>
        <rect x="82" y="38" width="16" height="14" rx="2" fill="#14365F"/>
        <text x="90" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">TL</text>
        <line x1="25" y1="60" x2="98" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/>
        <text x="60" y="73" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">RBI SCALE-BASED REGULATION</text>
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
        <h3 class="step-title">Loan Book Re-Classification on DPD Basis</h3>
        <p class="step-description">Patron extracts the entire loan book at year-end into a master file (borrower ID, sanction date, outstanding principal, accrued interest, last paid date, DPD, current asset class). Independent DPD calculation; reclassification against IRACP Directions 2025 matrix - Standard, Sub-standard, Doubtful D1/D2/D3, Loss. Reclassification differences quantified.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Borrower-wise DPD
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                IRACP 2025 matrix
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Diff table
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="14" rx="6" fill="#14365F"/>
        <text x="60" y="20" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DPD AGEING</text>
        <rect x="25" y="32" width="14" height="50" rx="1" fill="#25D366"/>
        <text x="32" y="88" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">STD</text>
        <rect x="42" y="42" width="14" height="40" rx="1" fill="#F5A623"/>
        <text x="49" y="88" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SUB</text>
        <rect x="59" y="56" width="14" height="26" rx="1" fill="#E8712C"/>
        <text x="66" y="88" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">D1</text>
        <rect x="76" y="64" width="14" height="18" rx="1" fill="#DC2626"/>
        <text x="83" y="88" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">D2</text>
        <rect x="93" y="72" width="10" height="10" rx="1" fill="#14365F"/>
        <text x="98" y="88" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">LS</text>
                </svg>
            </div>
            <span class="illustration-label">Re-classified</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Income Recognition Audit and NPA Interest Reversal</h3>
        <p class="step-description">Under IRACP, interest income on NPA loans is recognised only on realisation basis. Interest accrued before NPA classification but not realised must be reversed in the year of NPA. Patron tests NPA sample for (a) reversal of pre-NPA accrued interest, (b) cash-basis recognition post-NPA, (c) re-aging if part-payment received. For Ind AS, reconciled with EIR method.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Realisation basis
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Pre-NPA reversal
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                EIR reconciled
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="30" y="30" width="60" height="6" rx="2" fill="#25D366"/>
        <text x="60" y="35" font-size="4" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">PRE-NPA ACCRUAL</text>
        <path d="M88 38 L98 38 L93 45 Z" fill="#DC2626"/>
        <rect x="30" y="50" width="60" height="6" rx="2" fill="#F5A623"/>
        <text x="60" y="55" font-size="4" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">REVERSAL</text>
        <rect x="30" y="64" width="40" height="6" rx="2" fill="#14365F" opacity="0.7"/>
        <text x="50" y="69" font-size="4" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">POST-NPA CASH</text>
                </svg>
            </div>
            <span class="illustration-label">Income Tested</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">CRAR Computation Audit</h3>
        <p class="step-description">Patron independently computes Capital to Risk-weighted Assets Ratio at year-end. Risk-weighting on on-balance-sheet assets per RBI matrix (cash 0%, govt securities 0%, residential mortgages 50/75%, retail 100/125%, commercial real estate 100%, sub-standard 150%); off-balance-sheet exposures using CCFs. Tier I verified at 10% minimum; total CRAR at 15% minimum.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Risk weights
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Tier I 10%
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                CRAR 15%
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <circle cx="60" cy="50" r="22" fill="none" stroke="#14365F" stroke-width="2"/>
        <path d="M60 28 A22 22 0 0 1 76 60 L60 50 Z" fill="#25D366" opacity="0.8"/>
        <path d="M76 60 A22 22 0 0 1 60 72 L60 50 Z" fill="#F5A623" opacity="0.8"/>
        <text x="60" y="48" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CRAR</text>
        <text x="60" y="58" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">15%</text>
                </svg>
            </div>
            <span class="illustration-label">CRAR Verified</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Ind AS 109 ECL and IRACP Impairment Reserve</h3>
        <p class="step-description">For Ind AS NBFCs, Patron reviews Stage 1/2/3 classification. Stage 1 (performing - 12-month ECL); Stage 2 (significant credit deterioration - Lifetime ECL); Stage 3 (credit-impaired - Lifetime ECL). PD/LGD/EAD validated against historical data and back-tested. SICR triggers tested. Where IRACP exceeds ECL, differential appropriated to non-distributable Impairment Reserve from retained earnings.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                3-stage ECL
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                PD/LGD/EAD
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Impairment Reserve
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="14" rx="6" fill="#14365F"/>
        <text x="60" y="20" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Ind AS 109</text>
        <rect x="25" y="32" width="22" height="22" rx="3" fill="#25D366" opacity="0.85"/>
        <text x="36" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">S1</text>
        <text x="36" y="52" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">12M</text>
        <rect x="49" y="32" width="22" height="22" rx="3" fill="#F5A623" opacity="0.85"/>
        <text x="60" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">S2</text>
        <text x="60" y="52" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">LT</text>
        <rect x="73" y="32" width="22" height="22" rx="3" fill="#DC2626" opacity="0.85"/>
        <text x="84" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">S3</text>
        <text x="84" y="52" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">LT</text>
        <text x="60" y="74" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">IMPAIRMENT RESERVE</text>
                </svg>
            </div>
            <span class="illustration-label">ECL Reviewed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Sign-Off, UDIN, AOC-4 and Para 9C Filing</h3>
        <p class="step-description">Patron audit partner signs the report under UDIN generated on the ICAI portal, annexes it to Form AOC-4, files with ROC within 30 days of AGM. MGT-7 within 60 days. Para 9C auditor certificate to RBI DNBS filed separately confirming 50-50 test outcome and IRACP compliance. For NBFC-ML and above, LFAR addresses RBI-specified queries.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                UDIN signed
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
                Para 9C + LFAR
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <path d="M30 50 L48 65 L92 30" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="60" y="78" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UDIN + AOC-4 + 9C</text>
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
            <h2 class="section-title">Documents Checklist for Financial Services Audit</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents to scope and execute a financial services statutory audit. The exact list varies by SBR layer (BL / ML / UL / TL), product mix (secured / unsecured / gold / vehicle / housing / microfinance), and Ind AS adoption status.</p>
<h3>Foundation and Regulatory</h3>
<ul>
<li><strong>Trial Balance and General Ledger:</strong> Year-end TB plus full ledger scroll; Ind AS or AS framework declared</li>
<li><strong>RBI Certificate of Registration (CoR):</strong> Section 45-IA Form B; any subsequent endorsements; deposit-taking authorisation if applicable</li>
<li><strong>Net Owned Fund (NoF) Computation:</strong> Paid-up equity capital plus free reserves minus accumulated losses, intangible assets and certain investments</li>
</ul>
<h3>Loan Book and Credit Risk</h3>
<ul>
<li><strong>Loan Book Master File:</strong> Borrower ID, sanction date, sanctioned amount, outstanding principal, accrued interest, last paid date, DPD, current asset class</li>
<li><strong>DPD Ageing Report:</strong> Borrower-wise ageing in 0 to 30, 31 to 60, 61 to 90, SMA-0, SMA-1, SMA-2, Sub-standard, Doubtful D1 / D2 / D3, Loss buckets</li>
<li><strong>Ind AS 109 ECL Model:</strong> Stage 1 / 2 / 3 classification, PD-LGD-EAD parameters, historical loss data, forward-looking macroeconomic overlays, SICR triggers</li>
<li><strong>IRACP Provisioning Working:</strong> Standard 0.25 to 2 percent (by sub-category), Sub-standard 10/20 percent, Doubtful escalating by ageing, Loss 100 percent; Impairment Reserve computation</li>
</ul>
<h3>Capital and Regulatory Returns</h3>
<ul>
<li><strong>CRAR Computation:</strong> Tier I and Tier II breakup, risk-weighted assets matrix, off-balance-sheet exposures, CCF application</li>
<li><strong>NBS Quarterly Returns:</strong> NBS-1 (financial parameters), NBS-2 (prudential norms), NBS-3 (deposit-taking), ALM-1, ALM-2, ALM-3 (asset-liability management)</li>
<li><strong>CRILC Reporting:</strong> Central Repository of Information on Large Credits - exposures above Rs 5 crore (NBFC-ML and above)</li>
</ul>
<h3>Conduct and Compliance</h3>
<ul>
<li><strong>Fair Practices Code Compliance:</strong> Loan application forms, sanction letters with KFS (Key Facts Statement), penal charges disclosure, grievance redressal logs</li>
<li><strong>KYC / AML Records:</strong> CKYC Registry uploads, Customer Due Diligence files, suspicious transaction reporting (STR) logs, PMLA compliance</li>
<li><strong>Digital Lending Guidelines Compliance:</strong> LSP (Lending Service Provider) agreements, FLDG (First Loss Default Guarantee) arrangements, cooling-off period, KFS-D format</li>
<li><strong>Para 9C Auditor Certificate Working:</strong> Financial assets to total assets ratio; income from financial assets to total income ratio; 50-50 test confirmation</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Financial Services Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td>IRACP vs Ind AS 109 ECL Reconciliation</td><td>Ind AS 109 ECL is a forward-looking probability-weighted model with three stages; IRACP is a backward-looking days-past-due rule. For most NBFCs, IRACP provisioning exceeds Ind AS 109 ECL because IRACP uses fixed percentages while ECL relies on historical loss rates that may have been low. Under RBI Notification dated 13 March 2020, where IRACP provision exceeds ECL, the differential is appropriated from retained earnings into a non-distributable Impairment Reserve.</td><td>Patron audit produces side-by-side IRACP and ECL workings, reconciles the difference, and verifies the Impairment Reserve appropriation is correctly disclosed in the Statement of Changes in Equity. Reconciliation memo becomes a Key Audit Matter under SA 701 for Ind AS NBFCs.</td></tr>
<tr><td>SICR Trigger Calibration Under Ind AS 109</td><td>Ind AS 109 paragraph 5.5.9 requires assessment of significant increase in credit risk (SICR) since origination - usually a quantitative trigger of 30 days past due plus qualitative triggers (deterioration in external rating, modification of terms). NBFCs sometimes set the SICR threshold too high (60 or 75 DPD), keeping more loans in Stage 1 with 12-month ECL and lower provisioning.</td><td>Patron tests the SICR threshold against the rebuttable presumption of 30 DPD; where the entity rebuts the presumption, the rebuttal documentation is reviewed for sufficiency under SA 540 (auditing estimates). Insufficient rebuttals trigger a reclassification adjustment in the audit observations.</td></tr>
<tr><td>Fintech Lender FLDG and LSP Accounting</td><td>Digital lending platforms operating under the RBI Digital Lending Guidelines 2022 typically engage Lending Service Providers (LSPs) for sourcing, collection or both, with a First Loss Default Guarantee (FLDG) arrangement up to 5 percent of the loan portfolio. Mis-accounting of FLDG as a guarantee versus a co-investment changes the regulatory capital position.</td><td>Audit verifies (a) FLDG cap is not exceeded, (b) FLDG cash is held in a separate escrow as required, (c) FLDG draw-downs are routed through the contractual mechanism not as ad-hoc top-ups, and (d) LSP commission is correctly recognised under Ind AS 115. Cross-check against the RBI Digital Lending Guidelines September 2022 framework.</td></tr>
<tr><td>NBFC-D Auditor Concurrence Under Section 30A RBI Act</td><td>For deposit-taking NBFCs (NBFC-D), the appointment of the statutory auditor requires prior concurrence of the RBI under Section 30A of the RBI Act (read with RBI Master Direction). The audit cannot proceed until the RBI concurrence letter is on file. The three-year cooling-off rule applies between consecutive audits by the same firm.</td><td>Patron pre-engagement protocol verifies the RBI concurrence is current, that the audit firm satisfies the three-year cooling-off rule (no audit of the same NBFC for three years after exit), and that the firm empanelment with RBI is active. No audit firm exit risk mid-cycle.</td></tr>
<tr><td>CARO Clause 3(xvi) Four-Proposition Testing</td><td>CARO 3(xvi) is often reported as a single composite statement when it is actually four distinct propositions - (a) Section 45-IA registration requirement and obtained, (b) NBFC activity without valid CoR, (c) CIC qualification, (d) multiple CICs in the group. Each requires independent testing and reporting.</td><td>Patron tests each sub-clause as a separate proposition with independent workpaper evidence. The four-proposition structure is reflected in the CARO annexure with separate observations for each. Avoids the supervisory observation that the auditor has not adequately considered each sub-clause.</td></tr>
<tr><td>Para 9C 50-50 Test Edge Cases</td><td>The 50-50 test (RBI Circular 2011-12/446) requires (a) financial assets at least 50 percent of total assets AND (b) income from financial assets at least 50 percent of total income. Edge cases - revaluation of investment property, treatment of intangibles, classification of CGS investments, treatment of derivative MTM gains - can swing the ratio. A failed 50-50 test means the entity is not an NBFC and the CoR should be surrendered.</td><td>Patron computes the 50-50 test on a borrower-wise and income-source-wise basis with all edge cases documented. The Para 9C certificate to RBI DNBS is supported by a 50-50 working that withstands DNBS scrutiny in the next inspection cycle.</td></tr>


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
            <h2 class="section-title">Financial Services Audit Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,50,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>NBFC-BL with AUM under Rs 100 crore</td><td>Rs 1,50,000 to Rs 3,50,000 - 5 weeks fieldwork; CARO 3(xvi); IRACP re-classification; Para 9C certificate</td></tr>
<tr><td>NBFC-BL with AUM Rs 100 to 500 crore</td><td>Rs 3,75,000 to Rs 7,50,000 - 5 to 6 weeks; full Ind AS 109 ECL review where applicable; FLDG audit for digital lenders</td></tr>
<tr><td>NBFC-BL with AUM Rs 500 cr to Rs 1,000 crore</td><td>Rs 8,00,000 to Rs 14,00,000 - 6 to 7 weeks; CRAR audit; leverage ratio compliance; ALM testing</td></tr>
<tr><td>NBFC-ML (AUM Rs 1,000 to 10,000 cr) - LFAR + CRAR + ALM</td><td>From Rs 15,00,000 - 7 to 9 weeks; Long-Form Audit Report; CRILC cross-check; Risk-Based Internal Audit overlay</td></tr>
<tr><td>HFC (NHB-registered) - parallel NHB norms overlay</td><td>From Rs 8,00,000 - 6 to 8 weeks; housing finance specific risk weights; NHB returns cross-check</td></tr>
<tr><td>Fintech lender / digital NBFC - LSP + FLDG audit overlay</td><td>Add Rs 1,50,000 to Rs 5,00,000 - same window; RBI Digital Lending Guidelines compliance; LSP agreements review</td></tr>
<tr><td>AIF Manager (SEBI Cat I / II / III)</td><td>Rs 3,00,000 to Rs 12,00,000 - 5 to 7 weeks; INR-USD valuation under Reg 23; investor reporting cross-check</td></tr>
<tr><td>Ind AS 109 ECL model review for Ind AS NBFC</td><td>Add Rs 2,00,000 to Rs 6,00,000 - same window; PD-LGD-EAD validation; SICR testing; macroeconomic overlay review</td></tr>
<tr><td>Government Filing Fees (AOC-4, MGT-7, ADT-1)</td><td>ROC filing fees billed at actuals; DNBS Para 9C filing fees billed at actuals</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Financial Services Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20layer-tiered%20fee%20quote%20for%20our%20NBFC%20%2F%20HFC%20%2F%20fintech%20%2F%20AIF%20statutory%20audit." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Financial Services Audit Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Engagement and pre-audit checks</td><td>Week 1 - SA 210 engagement letter; Section 141 + RBI eligibility verification; concurrence letter for NBFC-D</td></tr>
<tr><td>Pre-year-end interim audit</td><td>Week 2 to 3 - Q4 loan-book DPD walkthrough; CRAR projection review; KYC and Fair Practices Code sample</td></tr>
<tr><td>Loan book IRACP re-classification</td><td>Weeks 3 to 5 - borrower-wise DPD re-calculation; reclassification difference quantification</td></tr>
<tr><td>Ind AS 109 ECL and Impairment Reserve audit</td><td>Weeks 4 to 6 (parallel) - Stage 1 / 2 / 3 classification; PD-LGD-EAD validation; SICR testing; IRACP overlay</td></tr>
<tr><td>CRAR audit and ALM testing</td><td>Weeks 5 to 6 - risk-weighted assets; Tier I / II classification; ALM-1/2/3 returns cross-check</td></tr>
<tr><td>Draft report, LFAR and management response</td><td>Week 6 to 7 - SA 700 / 705 review; KAM discussion; LFAR for NBFC-ML and above</td></tr>
<tr><td>UDIN, sign-off and AOC-4 filing</td><td>Within 30 days of AGM - Patron files AOC-4 with audit report annexed</td></tr>
<tr><td>Para 9C auditor certificate to RBI DNBS</td><td>Post AOC-4 - 50-50 test certification; submitted to Regional Office of DNBS</td></tr>
<tr><td>NBS quarterly returns sign-off</td><td>Within 15 days of quarter-end - NBS-1, NBS-2, NBS-3, ALM-1 / 2 / 3 auditor cross-check</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>IRACP Directions 2025 became effective 28 November 2025 - NBFCs that have not aligned their books to the new classification matrix face supervisory observations in the next inspection cycle.</strong> Conducting NBFC activity without a valid Certificate of Registration is an offence under Chapter V of the RBI Act, attracting penalty under Section 58B and potential business shutdown. Delay in Section 143 audit filings attracts Rs 100 per day MCA additional fees plus Section 147 penalty.</p>

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
            <h2 class="section-title">Why Choose Patron for Financial Services Audit</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
        <h3 class="feature-title">Single CA Partner Across 6 Risk Areas</h3>
        <p class="feature-description">One engagement covers Section 143 statutory audit, CARO 3(xvi) sub-clauses, IRACP re-classification, CRAR audit, Ind AS 109 ECL review, Para 9C certificate and LFAR (where applicable). No workpaper duplication across multiple advisors.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3 class="feature-title">Independent Borrower-Wise IRACP Re-Run</h3>
        <p class="feature-description">Borrower-wise DPD re-calculation produces the reclassification difference table - which becomes the management discussion benchmark and the supervisory submission for NBFC-ML and above.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Ind AS 109 ECL with IRACP Overlay</h3>
        <p class="feature-description">Side-by-side ECL and IRACP working with Impairment Reserve appropriation traced through the Statement of Changes in Equity. SICR trigger testing under SA 540 estimates audit.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="feature-title">CRAR Against Latest RBI Risk-Weights</h3>
        <p class="feature-description">CRAR computed against the latest RBI risk-weights matrix, with off-balance-sheet exposures correctly converted using credit conversion factors (CCF). Tier I and Tier II classification reviewed line-by-line.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="feature-title">CARO 3(xvi) Four-Proposition Testing</h3>
        <p class="feature-description">CARO 3(xvi)(a) to (d) tested as four distinct propositions - registration, conduct without CoR, CIC qualification, multi-CIC group - not as a single composite statement.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
        <h3 class="feature-title">RBI Eligibility Pre-Verified</h3>
        <p class="feature-description">RBI eligibility verification before engagement - no audit firm exit risk mid-cycle from concurrence withdrawal or cooling-off non-compliance. Empanelment status checked on engagement letter date.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 class="feature-title">4-Office Pan-India Network</h3>
        <p class="feature-description">Pune, Mumbai, Delhi and Gurugram offices service NBFC and fintech finance teams across BKC, Lower Parel, Connaught Place, Cyber City Gurugram, Hinjewadi and Andheri SEEPZ.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">LFAR Calibrated to RBI Query Template</h3>
        <p class="feature-description">For NBFC-ML and above, the Long-Form Audit Report is calibrated to the RBI-specified query template. Withstands DNBS inspection scrutiny in the supervisory cycle.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by NBFC CFOs, Fintech Founders and AIF Managers</h2>
            <div class="content-text">
                
                
<p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of Practice</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "The statutory audit was clean and completed well before deadline. No last-minute rush. Patron team handled the IRACP re-classification and Ind AS 109 ECL reconciliation under a single CA partner - we used to have three different advisors for these three workstreams."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- CFO, NBFC-Base Layer, Mumbai</footer>
</blockquote>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "Para 9C auditor certificate to DNBS was filed within the 90-day window with the 50-50 test working that withstood the next supervisory inspection - the inspecting RBI officer specifically commented on the working paper quality."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- Compliance Head, NBFC-Middle Layer, Delhi</footer>
</blockquote>
<p style="margin-top:16px;"><strong>Client roster:</strong> Trusted by Hyundai, Asian Paints, Bridgestone and a growing roster of NBFCs (Base and Middle Layer), fintech lenders (digital personal loan, BNPL, SME credit), AIF managers (Category I, II, III), HFCs (NHB-registered housing finance), NBFC-MFIs, NBFC-Factor, and AIF Category II venture / private equity funds.</p>
<p style="margin-top:16px;"><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron services NBFC and fintech finance teams across BKC, Lower Parel, Connaught Place, Cyber City Gurugram, Hinjewadi and Andheri SEEPZ.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY / Big-Four / Patron-Led NBFC Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        
<tr><td>Independence under Section 141 and RBI rules</td><td>Disqualified</td><td>Qualified + RBI-empanelled</td><td>Qualified + RBI-empanelled</td></tr>
<tr><td>CARO 3(xvi) sub-clause testing</td><td>Not signable</td><td>Heavy procedure</td><td>Four-proposition test</td></tr>
<tr><td>IRACP re-classification depth</td><td>N/A</td><td>Centralised, slower turnaround</td><td>Borrower-wise re-run with difference table</td></tr>
<tr><td>Ind AS 109 ECL model review</td><td>Cannot review own model</td><td>Heavy modelling team</td><td>PD-LGD-EAD validation + SICR testing</td></tr>
<tr><td>Para 9C certificate to RBI</td><td>Not signable</td><td>Bundled</td><td>Bundled</td></tr>
<tr><td>LFAR for NBFC-ML</td><td>Not applicable in-house</td><td>Heavy</td><td>Calibrated to RBI query template</td></tr>
<tr><td>NBFC-D auditor concurrence (Section 30A)</td><td>Not applicable</td><td>Pre-cleared</td><td>Pre-cleared with cooling-off compliance</td></tr>
<tr><td>Cost (NBFC-BL with AUM Rs 100 cr)</td><td>Apparent zero - unsignable</td><td>Rs 12 to 25 lakh</td><td>Rs 3.75 to 7.5 lakh</td></tr>


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
                
                
<p>Financial services statutory audit pairs naturally with the parent statutory audit hub, NBFC and AIF registration, tax audit, and internal audit (under RBI RBIA framework for NBFC-ML and above).</p>
<ul>
<li><a href="/statutory-audit"><strong>Statutory Audit (Parent Hub):</strong></a> National framework for Section 139 Companies Act audit with full methodology, applicability matrix, and Patron vs commodity provider comparison</li>
<li><a href="/tax-audit"><strong>Tax Audit (Section 44AB):</strong></a> Tax audit bundled for NBFCs above Rs 1 crore turnover; coordinated with statutory audit to share workpapers</li>
<li><a href="/internal-audit"><strong>Internal Audit (Section 138 + RBI RBIA):</strong></a> Mandatory for all NBFC-ML, UL, TL under RBI Risk-Based Internal Audit framework irrespective of Companies Act threshold</li>
<li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance:</strong></a> ROC annual filings - ADT-1, AOC-4, MGT-7 for NBFC corporate entities</li>
<li><a href="/nbfc-registration"><strong>NBFC Registration:</strong></a> Section 45-IA CoR application; Form CRA-1 to CRA-6 RBI Companies Act overlay for new NBFCs</li>
<li><a href="/aif-registration"><strong>AIF Registration:</strong></a> SEBI Alternative Investment Fund Regulations 2012 - Category I / II / III registration</li>
<li><a href="/accounting-services-for-the-service-sector-industry"><strong>Accounting Services for Service Sector:</strong></a> Peer industry vertical for ongoing accounting and reconciliation work</li>
<li><a href="/gst-audit"><strong>GST Audit:</strong></a> GST exemption review for financial services (interest income exempt; fee income taxable); GSTR-9C reconciliation</li>
<li><a href="/appointment-of-auditor"><strong>Appointment of Auditor:</strong></a> First auditor and AGM appointment with ADT-1 filing; RBI concurrence for NBFC-D under Section 30A</li>
<li><a href="/change-of-auditor"><strong>Change of Auditor:</strong></a> Section 140 resignation and replacement with RBI cooling-off rule (three-year between NBFC audits)</li>
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
                
                
<p>Financial services audits draw legal authority from a tightly layered statutory framework - Companies Act 2013 for the basic audit duty, RBI Act 1934 for NBFC registration and prudential directions, RBI Master Directions for SBR and IRACP, and ICAI Standards on Auditing for the audit conduct.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Reference</th><th>Detail</th></tr></thead>
<tbody>
<tr><td>Governing Acts</td><td>Companies Act 2013 - Sections 139 to 148; RBI Act 1934 - Chapter IIIB (Sections 45-I to 45-QB)</td></tr>
<tr><td>Section 139 Companies Act</td><td>First auditor within 30 days; AGM appointment for 5 / 10 years; NBFC-D additionally needs RBI concurrence</td></tr>
<tr><td>Section 143 Companies Act</td><td>Powers and duties; SA 700 / 705 reporting; CARO 2020 annexure; IFC reporting</td></tr>
<tr><td>Section 147 Companies Act</td><td>Penalty - company Rs 25,000 to Rs 5,00,000; auditor Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh fraudulent); officer in default Rs 10,000 to Rs 1,00,000</td></tr>
<tr><td>Section 45-IA RBI Act 1934</td><td>Certificate of Registration mandatory for NBFC commencement / continuation; Net Owned Fund minimum Rs 2 crore (Rs 10 crore for new NBFC-ICC from October 2022)</td></tr>
<tr><td>Section 45-IB RBI Act 1934</td><td>Maintenance of percentage of assets in unencumbered approved securities for deposit-taking NBFCs</td></tr>
<tr><td>Section 45-IC RBI Act 1934</td><td>Reserve Fund - transfer of 20 percent of profits annually</td></tr>
<tr><td>Section 45JA RBI Act 1934</td><td>RBI power to issue prudential directions</td></tr>
<tr><td>Chapter V RBI Act 1934</td><td>Penalty provisions - conducting NBFC activity without CoR is an offence; Section 58B penalty</td></tr>
<tr><td>RBI Master Direction NBFC SBR (Oct 2023)</td><td>Scale-Based Regulation - NBFC-BL / ML / UL / TL classification with differentiated prudential norms; UL parametric scoring by RBI</td></tr>
<tr><td>RBI IRACP Directions 2025</td><td>Effective 28 November 2025 - replaces all earlier IRACP norms; uniform NPA classification; 90-day NPA with glide path for BL; income on NPA only on realisation; pre-NPA accrued interest reversal</td></tr>
<tr><td>RBI Notification 13 March 2020</td><td>Implementation of Ind AS - Impairment Reserve framework where IRACP provisioning exceeds Ind AS 109 ECL</td></tr>
<tr><td>RBI Master Direction CIC</td><td>Core Investment Companies (Reserve Bank) Directions, 2020 - 90 percent investments in group companies test</td></tr>
<tr><td>RBI Digital Lending Guidelines (Sept 2022)</td><td>Lending Service Provider (LSP) accountability; First Loss Default Guarantee (FLDG) framework with 5 percent cap; KFS-D; cooling-off period</td></tr>
<tr><td>CARO 2020 Clause 3(xvi)</td><td>(a) Whether company required to be registered under Section 45-IA and if so whether obtained; (b) Whether NBFC activity conducted without valid CoR (Chapter V offence); (c) Whether company qualifies as CIC; (d) Whether more than one CIC in the group</td></tr>
<tr><td>Para 9C NBFC Prudential Norms Directions</td><td>Separate auditor certificate to RBI DNBS confirming 50-50 test - financial assets at least 50 percent of total assets AND income from financial assets at least 50 percent of total income</td></tr>
<tr><td>Section 30A RBI Act 1934</td><td>RBI concurrence required for appointment of statutory auditor of deposit-taking NBFC (NBFC-D) - three-year cooling-off rule applies</td></tr>
<tr><td>Ind AS Standards</td><td>Ind AS 109 (Financial Instruments - three-stage ECL); Ind AS 32 (Equity Classification - critical for Tier II hybrid instruments); Ind AS 107 (Disclosures); Ind AS 113 (Fair Value Measurement)</td></tr>
<tr><td>Standards on Auditing (ICAI)</td><td>SA 200, SA 500, SA 540 (Auditing Accounting Estimates - applies to ECL PD-LGD-EAD), SA 550 (Related Parties - critical for NBFC promoter loans), SA 570 (Going Concern), SA 600 (Group Audit), SA 700 / 701 / 705 / 706</td></tr>
<tr><td>Forms and Returns</td><td>ADT-1 (auditor), AOC-4 (financials), MGT-7 (annual return); NBS-1 / 2 / 3 (RBI financial returns), ALM-1 / 2 / 3 (asset-liability); DNBS-10 (auditor certificate); CRILC (large exposures); 3CD (tax audit if applicable)</td></tr>
</tbody>
</table>
</div>
<p style="margin-top:12px;font-size:13px;color:var(--text-muted);">External references: <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India (RBI Master Directions and DNBS)</a> | <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">Securities and Exchange Board of India (SEBI - AIF Regulations)</a> | <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21 V3)</a></p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Financial Services Audit</h2>
                    <p class="faq-expanded__lead">Common questions on NBFC statutory audit applicability, the 90-day NPA classification norm, CARO clause 3(xvi), CRAR minimum, NPA interest recognition, the 50-50 test, Ind AS 109 ECL interaction with IRACP, and the Para 9C auditor certificate to RBI.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Financial Services Audit'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for NBFCs in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - including every NBFC, HFC, fintech lender, AIF Manager and Core Investment Company - irrespective of asset size or profitability. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment. For deposit-taking NBFCs, the appointment additionally requires prior concurrence of the Reserve Bank of India under Section 30A of the RBI Act, with a three-year cooling-off rule between consecutive audits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the 90-day NPA classification norm?</h3>
                        <div class="faq-expanded__a"><p>Under the RBI IRACP Directions, 2025 (effective 28 November 2025), a loan account is classified as a Non-Performing Asset when interest or principal remains overdue for 90 days or more. The 90-day norm applies to NBFC-Middle Layer, Upper Layer and Top Layer with immediate effect; a phased glide path applies to NBFC-Base Layer. Once classified as NPA, the account moves through Sub-standard, Doubtful D1 / D2 / D3, and Loss categories. Upgrade to Standard requires full payment of all arrears of interest and principal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is CARO clause 3(xvi)?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 clause 3(xvi) is a financial-services-specific reporting requirement with four sub-clauses. (a) Whether the company is required to be registered under Section 45-IA of the RBI Act and if so, whether the registration has been obtained. (b) Whether the company has conducted any NBFC activity without holding a valid Certificate of Registration - an offence under Chapter V of the RBI Act. (c) Whether the company qualifies as a Core Investment Company. (d) Whether more than one CIC exists in the group. Each sub-clause is independently tested and reported by the statutory auditor.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the minimum CRAR for NBFCs?</h3>
                        <div class="faq-expanded__a"><p>Under the RBI Master Direction NBFC Scale-Based Regulation (October 2023), the minimum Capital to Risk-weighted Assets Ratio is 15 percent for all NBFC-Deposit-taking entities, NBFC-Middle Layer, NBFC-Upper Layer and NBFC-Top Layer. Tier I capital must be at least 10 percent of risk-weighted assets. NBFC-Base Layer with AUM under Rs 500 crore is exempt from CRAR but must maintain a leverage ratio (Total Outside Liabilities to Owned Funds) not exceeding 7. The auditor independently computes the CRAR against the RBI risk-weights matrix.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is interest income on NPAs recognised?</h3>
                        <div class="faq-expanded__a"><p>Under the IRACP Directions, 2025, interest, processing fees and any other charges on Non-Performing Assets can be recognised in income only on a realisation basis - not on accrual. Additionally, any income that was recognised on an accrual basis before the loan account became an NPA must be reversed in the financial year in which the account is classified as NPA. The statutory auditor tests a sample of NPA accounts to confirm both the realisation-basis recognition post-NPA and the reversal of pre-NPA accrued income. For Ind AS reporters, this interacts with the effective interest rate method under Ind AS 109.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the 50-50 test for NBFC classification?</h3>
                        <div class="faq-expanded__a"><p>The 50-50 test, established by RBI Circular 2011-12/446, determines whether a company qualifies as an NBFC. A company is treated as an NBFC if its financial assets are at least 50 percent of total assets, and its income from financial assets is at least 50 percent of total income. Both conditions must be satisfied. The statutory auditor signs a separate certificate to the RBI Department of Non-Banking Supervision under Paragraph 9C of the NBFC Prudential Norms Directions confirming the 50-50 test outcome and whether the company continues to qualify for registration under Section 45-IA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does Ind AS 109 ECL interact with RBI IRACP?</h3>
                        <div class="faq-expanded__a"><p>Ind AS 109 prescribes a three-stage Expected Credit Loss model - Stage 1 (12-month ECL for performing assets), Stage 2 (Lifetime ECL for assets with significant credit deterioration), Stage 3 (Lifetime ECL for credit-impaired assets / NPAs). RBI IRACP prescribes fixed provisioning percentages by asset class. For NBFCs reporting under Ind AS, RBI Notification dated 13 March 2020 requires parallel computation of both - where IRACP provisioning exceeds Ind AS 109 ECL, the differential is appropriated from retained earnings into a non-distributable Impairment Reserve, disclosed in the Statement of Changes in Equity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the Para 9C auditor certificate to RBI?</h3>
                        <div class="faq-expanded__a"><p>Paragraph 9C of the NBFC Prudential Norms Directions, inserted by RBI under Section 45JA of the RBI Act, 1934, requires the statutory auditor of every NBFC to submit a separate certificate to the Reserve Bank of India confirming that the entity is engaged in the business of a non-banking financial institution requiring it to hold a Certificate of Registration under Section 45-IA. The certificate references the position as at end of the financial year, is filed with the Regional Office of the Department of Non-Banking Supervision, and effectively serves as the annual confirmation of the 50-50 test outcome.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>NBFC ka audit kaise hota hai?</strong> Companies Act Section 143 ke under practicing CA dwara annual examination - RBI Master Direction compliance, IRACP NPA classification, CRAR, Ind AS 109 ECL, CARO 3(xvi), Para 9C certificate.</p>
<p><strong>90-day NPA norm kya hai?</strong> IRACP Directions 2025 ke under loan 90 days se zyada overdue ho toh NPA. Sub-standard se shuru hota hai, fir Doubtful D1/D2/D3, fir Loss. Upgrade tabhi when full payment of arrears.</p>
<p><strong>CRAR kitna chahiye?</strong> Minimum 15 percent NBFC-D aur ML/UL/TL ke liye, Tier I at least 10 percent. NBFC-BL with AUM under Rs 500 crore exempt - leverage ratio 7 maintain karna padta hai.</p>
<p><strong>CARO 3(xvi) kya hai?</strong> 4 sub-clauses - (a) Section 45-IA CoR required and obtained, (b) NBFC activity without valid CoR (offence), (c) CIC qualification, (d) multiple CICs in group.</p>
<p><strong>50-50 test kya hai?</strong> Financial assets >= 50 percent of total assets AND income from financial assets >= 50 percent of total income. Dono conditions satisfied honi chahiye NBFC qualify karne ke liye.</p>
<p><strong>Para 9C certificate kya hai?</strong> Auditor ki separate certificate RBI DNBS ko, 50-50 test ka confirmation, har financial year ke end position pe. Section 45JA ke under issued.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IRACP Directions 2025 Effective 28 November 2025</h2>
            <div class="content-text">
                
                
<p>AOC-4 with audit report must be filed within 30 days of the AGM and MGT-7 within 60 days. NBS-1 / NBS-2 / NBS-3 returns are filed quarterly with the RBI Department of Non-Banking Supervision. ALM-1 / ALM-2 / ALM-3 are also quarterly. The Para 9C auditor certificate to RBI is typically filed within 90 days of year-end. CRILC reporting (NBFC-ML and above) is monthly.</p>
<p><strong>IRACP Directions 2025 became effective 28 November 2025 - NBFCs that have not aligned their books to the new classification matrix face supervisory observations in the next inspection cycle.</strong></p>
<p style="margin-top:16px;"><strong>Conducting NBFC activity without a valid Certificate of Registration is an offence under Chapter V of the RBI Act, attracting penalty under Section 58B and potential business shutdown. </strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20fixed-fee%20NBFC%20audit%20quote." target="_blank" rel="noopener">WhatsApp us</a>. Partner CA scoping call and fixed-fee quote within 24 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Six Risk Areas. RBI-Empanelled. One CA Partner.</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#FFFFFF;">Statutory audit for financial services companies is the most regulation-intensive audit category in India - dual reporting to shareholders under Section 143 and to the RBI under Para 9C, borrower-wise IRACP NPA reclassification on a Days-Past-Due basis, four-proposition CARO clause 3(xvi) testing, independent CRAR computation against the RBI risk-weights matrix, three-stage Ind AS 109 ECL modelling with Impairment Reserve reconciliation, and Long-Form Audit Report for NBFC-Middle Layer and above. An audit that gets any one of these wrong surfaces in the next RBI inspection cycle, a CARO qualification, or a supervisory action notice.</p>
<p style="color:#FFFFFF;margin-top:14px;">Patron Accounting handles the full scope under a single CA partner with RBI-aware risk assessment, independent loan-book IRACP re-run, Ind AS 109 ECL model review, CRAR audit, CARO 3(xvi) four-sub-clause testing, Para 9C certificate, and LFAR preparation where applicable. Our 15+ years of practice, peer-reviewed ICAI workpapers, RBI-empanelment compliance and four-office network across Pune, Mumbai, Delhi and Gurugram bring depth from Base Layer NBFCs to Middle Layer entities and HFCs.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20layer-tiered%20fee%20quote%20for%20our%20NBFC%20%2F%20HFC%20%2F%20fintech%20%2F%20AIF%20statutory%20audit." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NBFC Audit Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron four-office network services NBFC and fintech finance teams across BKC, Lower Parel, Connaught Place, Cyber City Gurugram, Hinjewadi and Andheri SEEPZ - in-person from four offices, remote everywhere else.</p>
            
            
<div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Our Offices Across India</div>
    <div class="pa-block-sub">In-person NBFC audit fieldwork from our four offices; remote coverage everywhere else with site visits to NBFC head offices on demand.</div>
    <div class="pa-city-grid">
        <a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune (HQ)</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Parent audit hub plus NBFC / AIF registration and complementary compliance services</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Hub)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Sec 44AB)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit (RBI RBIA)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/nbfc-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NBFC Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/aif-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">AIF Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 3 months (Freshness Tier 1 - IRACP Directions 2025 effective 28 Nov 2025; RBI Master Direction updates; Digital Lending Guidelines revisions; SBR layer parametric scoring). Triggers for earlier review include RBI Master Direction NBFC SBR amendment, IRACP Directions revision, CARO 2020 clause 3(xvi) amendment, RBI Notification on Ind AS Impairment Reserve revision, Digital Lending Guidelines update, and Section 45-IA NoF threshold change.</p>
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
