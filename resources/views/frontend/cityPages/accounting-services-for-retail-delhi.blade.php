
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
    <title>Retail Accounting in Delhi 2026 | Patron Accounting</title>
    <meta name="description" content="Delhi retail and e-tail accounting from INR 3,499/mo. Cash-heavy market books, wholesale plus retail GST, POS and Amazon, Flipkart settlement reconciliation.">
    <link rel="canonical" href="/accounting-services-for-retail/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Retail Accounting in Delhi 2026 | Patron Accounting">
    <meta property="og:description" content="Delhi retail and e-tail accounting from INR 3,499/mo. Cash-heavy market books, wholesale plus retail GST, POS and Amazon, Flipkart settlement reconciliation.">
    <meta property="og:url" content="/accounting-services-for-retail/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/accounting-services-for-retail/delhi-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Retail Accounting in Delhi 2026 | Patron Accounting">
    <meta name="twitter:description" content="Delhi retail and e-tail accounting from INR 3,499/mo. Cash-heavy market books, wholesale plus retail GST, POS and Amazon, Flipkart settlement reconciliation.">
    <meta name="twitter:image" content="/images/accounting-services-for-retail/delhi-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/accounting-services-for-retail/delhi#breadcrumb",
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
          "name": "Retail Sector Accounting",
          "item": "/accounting-services-for-retail"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Retail Sector Accounting in Delhi",
          "item": "/accounting-services-for-retail/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/accounting-services-for-retail/delhi#faq",
      "datePublished": "2026-06-23T08:00:00+05:30",
      "dateModified": "2026-06-23T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do you keep books for a cash-heavy Delhi market shop?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For a high-cash store in Karol Bagh or Sadar Bazaar, Patron posts every day-close, reconciles the cash drawer against the bank deposit, and separates card and UPI tenders. Daily denomination tracking exposes short banking early, and counter sales are booked as B2C supplies in GSTR-1 so cash turnover and declared GST stay aligned under the CGST Act 2017."
          }
        },
        {
          "@type": "Question",
          "name": "We sell wholesale and retail under one GSTIN in Chandni Chowk. How is GST handled?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Sadar Bazaar or Chandni Chowk dealer running both wholesale B2B and counter B2C uses one GSTIN with split reporting. Patron records B2B invoices with buyer GSTINs and books counter sales as consolidated B2C, both flowing into GSTR-1 and GSTR-3B. We tag each channel so margins on bulk and retail lines read separately."
          }
        },
        {
          "@type": "Question",
          "name": "Is there a profession tax on retail staff in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Delhi does not levy profession tax, so there is no PTRC or PTEC registration as there is in Maharashtra cities like Pune or Mumbai. Patron still runs your store payroll with PF, ESI, and TDS where applicable, but a Delhi retailer skips the profession tax filings entirely, which lightens monthly compliance for shops in CP or Lajpat Nagar."
          }
        },
        {
          "@type": "Question",
          "name": "How is jewellery and bullion-linked stock valued for a Karol Bagh store?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Apparel-and-jewellery shops in Karol Bagh carry stock whose value moves with gold rates. Patron values bullion-linked inventory at cost with rate-date records, books making charges separately, and reconciles physical weight to the stock register. This keeps closing stock defensible in an audit and shows true margin once metal price swings are stripped out."
          }
        },
        {
          "@type": "Question",
          "name": "How much does retail accounting cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fees start from INR 3,499/mo (Exl GST and Govt. Charges). The exact retainer scales with store count, billing volume, marketplace channels, and the number of GST registrations. A single Khan Market boutique sits at the lower end; a Sadar Bazaar wholesaler also selling online pays more. We confirm a fixed quote before any onboarding begins."
          }
        },
        {
          "@type": "Question",
          "name": "How do you reconcile Amazon, Flipkart, and Meesho payouts for Delhi sellers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Each payout is grossed back up to taxable sales by adding commission, Section 52 TCS, Section 194-O TDS, shipping, and return adjustments, then matched to the bank credit and your GSTR-1. The 1 percent TCS shown in the platform GSTR-8 is reconciled to your GSTR-2B every month so a Lajpat Nagar seller loses no input credit."
          }
        },
        {
          "@type": "Question",
          "name": "Should a Delhi trader pick the GST composition scheme or regular GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A trader below INR 1.5 crore can elect composition under Section 10 and pay a flat 1 percent, but loses input credit, cannot issue a tax invoice, and cannot sell on TCS marketplaces. A Connaught Place flagship or any seller listing on Amazon must stay in regular GST. Patron models both routes against your turnover before you lock in."
          }
        },
        {
          "@type": "Question",
          "name": "Which records must a Delhi retail business retain?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 35 of the CGST Act 2017 and Section 44AA of the Income Tax Act require sales and purchase registers, stock records, the cash book, and bank statements to be kept for 6 years. Patron maintains these by store and channel for the GST Delhi authority and RoC Delhi, so a notice or assessment is answered without scrambling for papers."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/accounting-services-for-retail/delhi#service",
      "name": "Retail Sector Accounting in Delhi",
      "description": "Retail and e-tail accounting in Delhi covering cash-heavy market shops, wholesale plus retail GST, POS reconciliation, multi-store inventory, and Amazon and Flipkart settlement matching. Patron Accounting delivers margin and stock MIS for Karol Bagh, Sadar Bazaar, Connaught Place, and online retailers.",
      "serviceType": "Retail Sector Accounting and Bookkeeping",
      "url": "/accounting-services-for-retail/delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
        }
      },
      "provider": {
        "@id": "/#localbusiness-delhi"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Retail",
          "sameAs": "https://en.wikipedia.org/wiki/Retail"
        },
        {
          "@type": "Thing",
          "name": "Goods and Services Tax (India)",
          "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Retail Accounting Plans in Delhi",
        "itemListElement": [
          {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "3499",
            "priceSpecification": {
              "@type": "UnitPriceSpecification",
              "priceCurrency": "INR",
              "price": "3499",
              "unitText": "per month"
            },
            "itemOffered": {
              "@type": "Service",
              "name": "Monthly Retail Accounting per Store"
            }
          }
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "/#localbusiness-delhi",
      "name": "Patron Accounting LLP - Delhi",
      "image": "/images/site-logo.svg",
      "url": "/accounting-services-for-retail/delhi",
      "telephone": "+91-9699936369",
      "priceRange": "INR",
      "areaServed": {
        "@type": "City",
        "name": "Delhi"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Delhi",
        "addressRegion": "Delhi",
        "postalCode": "110085",
        "addressCountry": "IN"
      },
      "parentOrganization": {
        "@id": "/#organization"
      }
    }
  ]
}</script>
@endsection

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
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        .table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
        .table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
        .table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* EXPERT ATTRIBUTION BOX (E-E-A-T) */
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

        /* HERO SECTION */
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

        /* FORM CARD */
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

        .form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

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
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { transition: transform 0.25s ease; color: var(--gray-400); flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { transform: rotate(180deg); }

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

        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }

        .btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:active { transform: translateY(0); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; box-shadow: none; }

        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }

        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }

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

        /* STATS BAR */
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

        /* TOC NAVIGATION */
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

        /* CONTENT SECTIONS */
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

        /* CITY & CROSS-SELL GRID CARDS */
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
        .pa-card-icon svg { width: 16px; height: 16px; color: var(--orange); }
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

        /* RESPONSIVE */
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
            main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; }
            main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; }
            .table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); }
            .col-lg-4 { margin-top: 24px; }
            .form-card { max-width: 100%; }
            .private-registration-heading { margin-bottom: 1rem !important; }
            .benefit-paragraph { font-size: 0.9rem; }
            .hero-badge { font-size: 12px; padding: 6px 12px; }
            .trust-section { gap: 12px; }
            .trust-row { gap: 16px; }
            .google-rating { width: 100%; }
            section ul li:not(.nav-item) { font-size: 14px; }
        }

        .content-section[id] { scroll-margin-top: 80px; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }

</style>

@section('content')
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
                        Retail Sector Accounting in Delhi
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI and ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 June 2026</span></span>
                        </span>
                        <a href="/accounting-services-for-retail" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scope:</span> Cash-heavy market books, wholesale and retail GST, POS reconciliation, marketplace settlement matching</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 3,499/mo (Exl GST and Govt. Charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Delhi market traders, wholesale-cum-retail dealers, brand flagships, boutiques, and online sellers</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Reporting:</span> Monthly margin and stock MIS by outlet, product line, and sales channel</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20retail%20accounting%20in%20Delhi.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                <div class="trust-text"><strong>CA and CS</strong>Certified Experts</div>
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Retail Accounting'/>
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
                                <option value='' disabled>Select a service</option>
                                <option value="accounting-services-for-retail/delhi" selected>Retail Sector Accounting in Delhi</option>
                                <option value="gst-returns/delhi">GST Return Filing in Delhi</option>
                                <option value="income-tax-return/delhi">Income Tax Return Filing in Delhi</option>
                                <option value="tally-accounting/delhi">Tally Accounting in Delhi</option>
                                <option value="zoho-books-accounting/delhi">Zoho Books Accounting in Delhi</option>
                                <option value="payroll-services/delhi">Payroll Services in Delhi</option>
                                <option value="accounting-services-for-e-commerce-industry/delhi">E-commerce Accounting in Delhi</option>
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

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 11V3a1 1 0 00-1-1H9a1 1 0 00-1 1v8M5 11h14a1 1 0 011 1v8a1 1 0 01-1 1H5a1 1 0 01-1-1v-8a1 1 0 011-1z"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">Shops, chains, and online sellers across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Books Reconciled</span><span class="stat-desc">POS, settlements, and stock handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by retailers, boutiques, and e-tailers.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your sales and financial data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail Sector Accounting in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Retail Accounting in Delhi at a Glance</strong></p>
                    <p>Delhi retail spans dense wholesale-to-retail bazaars and polished brand flagships, and the books have to cope with both. Patron Accounting handles cash-heavy day-closes, splits wholesale B2B from counter B2C under one GSTIN, reconciles card and UPI tenders, grosses up Amazon and Flipkart settlements, and tracks stock by store. You get a monthly margin and stock MIS, and because Delhi has no profession tax, compliance is lighter than in Maharashtra cities. Fees start from INR 3,499/mo. Serving Karol Bagh, Sadar Bazaar, Connaught Place, and online sellers.</p>
                </div>

                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Quick Reference</th><th>Details for Delhi Retailers</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>CGST Act 2017 Sections 10, 35, 52; Income Tax Act Section 44AA and Section 194-O</td></tr>
                        <tr><td>Applicable To</td><td>Delhi market traders, wholesale-cum-retail dealers, brand flagships, boutiques, and marketplace sellers</td></tr>
                        <tr><td>Starting Price</td><td>Starting from INR 3,499/mo (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Composition Limit</td><td>Turnover up to INR 1.5 crore for 1 percent levy under Section 10 (no marketplace sales)</td></tr>
                        <tr><td>Marketplace TCS</td><td>1 percent under Section 52, reported in seller GSTR-8, matched to GSTR-2B</td></tr>
                        <tr><td>Records Retention</td><td>6 years under Section 35 CGST Act and Rule 6F</td></tr>
                        <tr><td>Local Authority</td><td>GST Delhi; RoC Delhi (MCA); note: Delhi levies no profession tax (unlike Maharashtra)</td></tr>
                    </tbody>
                </table>
                </div>

                <p>Few retail markets in India are as layered as Delhi. Walk through Karol Bagh and an apparel-and-jewellery store rings up cash bills beside bullion-linked stock; cross to Sadar Bazaar or Chandni Chowk and a single dealer sells in bulk to small shops while also shipping retail orders online. A few kilometres south, a Connaught Place flagship runs almost entirely on card and UPI footfall, and a Lajpat Nagar boutique is busy launching its first listings on Amazon, Flipkart, and Meesho. One accounting template cannot serve all four. See our national <a href="/accounting-services-for-retail">Retail Sector Accounting</a> service for the wider view.</p>
                <p>What Patron Accounting's Delhi team does is structure books to each format: tight cash controls for market shops, channel tagging for wholesale-plus-retail dealers, tender reconciliation for flagships, and settlement gross-ups for online sellers. GST is filed so B2C and B2B figures both tie out. For the day-to-day ledgers that sit beneath this, see our <a href="/accounting-services">Accounting Services</a>. This page is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Retail Sector Accounting?</h2>
                <div class="content-text what-is-definition">
                    <p>Retail sector accounting is the specialised bookkeeping built for high-volume, low-value selling: it captures sales across counters and online channels, settles every payment tender against the bank, and values inventory so the owner sees a genuine margin rather than a guess.</p>
                    <p>In a Connaught Place flagship that mostly means importing the POS close, splitting card and UPI, and tying both to the bank. In a cash-driven Karol Bagh shop it adds drawer-level cash control and bullion-linked stock valuation. For a Sadar Bazaar wholesaler who also sells retail online, it means separating bulk B2B invoices from counter B2C, then decoding marketplace settlement files where the bank credit survives only after commission, Section 52 TCS, Section 194-O TDS, shipping, and returns.</p>
                    <p>Because Delhi retail blends counter sales, wholesale, and marketplace TCS, this work runs hand in hand with GST. If your model is purely online, our <a href="/accounting-services-for-e-commerce-industry/delhi">E-commerce Accounting in Delhi</a> page covers platform reconciliation in more depth.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Retail Accounting in Delhi:</strong></p>
                    <p><strong>POS Reconciliation:</strong> Tying each store day-close (cash, card, UPI) back to the bank deposit and the sales ledger.</p>
                    <p><strong>Inventory and Stock Accounting:</strong> Valuing closing stock, including bullion-linked lines, recording transfers, and booking shrinkage so margin is real.</p>
                    <p><strong>Settlement Reconciliation:</strong> Rebuilding a marketplace payout into taxable sales by adding back commission, TCS, TDS, shipping, and returns.</p>
                    <p><strong>Wholesale plus Retail GST:</strong> Reporting B2B bulk invoices and consolidated B2C counter sales under one GSTIN in GSTR-1 and GSTR-3B.</p>
                    <p><strong>Composition Levy:</strong> A flat 1 percent scheme under Section 10 for small traders below INR 1.5 crore who do not supply through TCS marketplaces.</p>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="35" y="35" width="130" height="110" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="50" y1="58" x2="150" y2="58" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                            <line x1="50" y1="76" x2="130" y2="76" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <line x1="50" y1="92" x2="140" y2="92" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <line x1="50" y1="108" x2="120" y2="108" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <circle cx="150" cy="40" r="20" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M141 40l6 6 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">POS, Stock, GST Reconciled</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Delhi Retail</span>
                        <strong>POS | Stock | GST 2B</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO NEEDS IT -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Retail Accounting in Delhi?</h2>
            <div class="content-text">
                <p>If your Delhi business sells goods to end buyers, or to small shops and end buyers at once, retail-specific accounting is what keeps margins legible and GST defensible across cash, card, and online channels.</p>
                <ul>
                    <li><strong>Cash-Heavy Market Shops (Karol Bagh/Chandni Chowk)</strong> - Apparel, jewellery, and general stores with large daily cash takings and bullion-linked stock to control.</li>
                    <li><strong>Wholesale-cum-Retail Dealers (Sadar Bazaar)</strong> - Traders billing bulk B2B to small shops while also selling retail online, needing channel-split GST.</li>
                    <li><strong>Brand Flagships (Connaught Place/Khan Market)</strong> - Premium and brand outlets driven by card and UPI footfall, with tight tender reconciliation needs.</li>
                    <li><strong>Boutiques and Fashion Sellers (Lajpat Nagar/Sarojini Nagar)</strong> - Curated fashion stores launching on Amazon, Flipkart, and Meesho alongside their counter.</li>
                    <li><strong>Multi-Store and Omnichannel Brands</strong> - Chains across NCR needing store-wise stock, group margin, and marketplace settlement reconciliation.</li>
                    <li><strong>Composition-Scheme Traders</strong> - Small Delhi shops below INR 1.5 crore needing CMP-08 and GSTR-4 filed correctly under Section 10.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Retail Accounting Services in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Cash and Tender Reconciliation</td><td>Reconcile high-cash drawers, card, and UPI from each day-close to the bank, with denomination tracking to catch short banking in market shops.</td></tr>
                        <tr><td>Wholesale and Retail GST</td><td>Split B2B bulk invoices from consolidated B2C counter sales under one GSTIN, flowing both correctly into GSTR-1 and GSTR-3B.</td></tr>
                        <tr><td>Marketplace Settlement Matching</td><td>Rebuild Amazon, Flipkart, and Meesho payouts to taxable value, separating commission, TCS, Section 194-O TDS, shipping, and returns, then tie to bank.</td></tr>
                        <tr><td>Inventory and Bullion-Linked Stock</td><td>Value closing stock by outlet, including gold-rate-linked jewellery lines, book transfers and shrinkage, and reconcile physical counts.</td></tr>
                        <tr><td>Margin and Channel MIS</td><td>Monthly dashboards covering gross margin, bulk versus retail mix, fast and slow SKUs, and channel performance so owners price sharper.</td></tr>
                        <tr><td>Payroll and Statutory Support</td><td>Store staff payroll, PF, ESI, and TDS, with no profession tax filings since Delhi does not levy one.</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Need the underlying compliance too? See <a href="/gst-returns">GST Return Filing</a> and <a href="/income-tax-return">Income Tax Return Filing</a> across India.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: PROCESS STEPS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Retail Accounting Works in Delhi: 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A CA-supervised method for Delhi retailers, from scoping your markets and marketplaces to a monthly margin MIS.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Store and Channel Mapping</h3><p class="step-description">Our CA scopes every outlet, POS, bank account, GSTIN, and marketplace you operate. A Karol Bagh cash store, a Connaught Place flagship, and a Meesho listing are each defined up front, with wholesale and retail channels flagged, so the books are structured before a single entry is posted. A fixed quote follows.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Outlets Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fixed Quote</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M45 35v14M38 42h14" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="70" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="70" y1="42" x2="90" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Mapped</span><span class="step-number-large">01</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">POS, Bank, and Marketplace Setup</h3><p class="step-description">We pull your POS day-close, bank feeds, and Amazon and Flipkart settlement reports into Tally or Zoho Books. The chart of accounts is laid out with cost centres for each store, plus separate tags for wholesale and retail, so every rupee can be traced to where it was actually earned.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Feeds Connected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cost Centres</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="25" width="64" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="28" y="38" width="48" height="8" rx="2" fill="#14365F" opacity="0.15"/><rect x="28" y="51" width="56" height="8" rx="2" fill="#14365F" opacity="0.15"/><circle cx="92" cy="62" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M87 62l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Set Up</span><span class="step-number-large">02</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Daily Sales and Stock Posting</h3><p class="step-description">Counter, wholesale, and online sales are posted day-wise against the right outlet, HSN, and tax rate. Purchases, transfers, and stock adjustments, including bullion-linked jewellery lines, go in so closing inventory and cost of goods sold stay accurate for each Delhi store.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sales Posted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stock Tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="32" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">POS</text><rect x="65" y="20" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="87" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Books</text><path d="M55 47h10" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/><path d="M60 42l5 5-5 5" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Posted</span><span class="step-number-large">03</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Tender and Settlement Reconciliation</h3><p class="step-description">Cash, card, and UPI tenders are reconciled to the bank, with cash drawers checked closely for market shops, and each marketplace payout is rebuilt to taxable sales. Section 52 TCS is verified against GSTR-2B so no input credit slips through the cracks for the period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tenders Matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TCS Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="55" width="12" height="15" rx="2" fill="#E8712C" opacity="0.6"/><rect x="42" y="40" width="12" height="30" rx="2" fill="#14365F" opacity="0.4"/><rect x="59" y="30" width="12" height="40" rx="2" fill="#E8712C" opacity="0.6"/><rect x="76" y="25" width="12" height="45" rx="2" fill="#14365F" opacity="0.4"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">04</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GST Filing and Compliance</h3><p class="step-description">B2B and B2C sales flow into GSTR-1 and GSTR-3B for regular dealers, or CMP-08 and GSTR-4 for composition shops. We compute liability, reconcile marketplace TCS, and file on time with the GST Delhi authority so a Delhi retailer never carries an unmatched credit forward.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Credit Protected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="16" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M60 32v8l5 4" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Monthly Margin and Stock MIS</h3><p class="step-description">Each month a CA reviews the books and hands over a clear MIS: gross margin by store and channel, wholesale versus retail split, best and slow-moving SKUs, and a closing stock position. You see exactly which Karol Bagh or CP outlet earns and where cash is tied up in stock.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS Delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Margin Clear</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 37l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="72" width="50" height="12" rx="6" fill="#F5A623" opacity="0.3"/><text x="60" y="81" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MIS READY</text></svg></div><span class="illustration-label">Reported</span><span class="step-number-large">06</span></div></div></div>
        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Retail Accounting in Delhi</h2>
            <div class="content-text">
                <ul>
                    <li><strong>POS Day-Close Reports</strong> - Daily tender-wise sales summary for each outlet</li>
                    <li><strong>Cash, Bank, and Gateway Statements</strong> - Cash registers for market shops, plus card and UPI settlement files</li>
                    <li><strong>Marketplace Settlement Reports</strong> - Amazon, Flipkart, and Meesho payout and tax statements</li>
                    <li><strong>Sales and Purchase Invoices</strong> - Both B2B bulk and B2C, with credit and debit notes</li>
                    <li><strong>Stock and Inventory Registers</strong> - Opening stock, purchases, transfers, and physical count sheets, including bullion-linked items</li>
                    <li><strong>GST Registration Certificate</strong> - GSTIN for each registration or composition enrolment</li>
                    <li><strong>PAN of the Business Entity</strong></li>
                    <li><strong>Payroll and Staff Records</strong> - Store staff salary, PF, and ESI details (no profession tax in Delhi)</li>
                    <li><strong>Rent and Expense Bills</strong> - Shop rent, electricity, and operating costs</li>
                    <li><strong>Existing Accounting File</strong> - Tally, Zoho Books, or QuickBooks data, if any</li>
                </ul>
                <div class="highlight-box">
                    <p>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES AND SOLUTIONS -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Retail Challenges and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Patron's Solution</th></tr></thead>
                    <tbody>
                        <tr><td>Heavy cash takings hard to reconcile</td><td>Denomination-level cash control and daily drawer-to-bank matching so short banking in Karol Bagh or Sadar Bazaar shops surfaces fast.</td></tr>
                        <tr><td>Wholesale and retail muddled under one GSTIN</td><td>Channel tagging that splits B2B bulk invoices from consolidated B2C, so both report cleanly and margins stay separate.</td></tr>
                        <tr><td>Marketplace payout mistaken for revenue</td><td>Every Amazon and Flipkart settlement is rebuilt to taxable sales, with commission, TCS, and TDS recorded as their own lines.</td></tr>
                        <tr><td>Bullion-linked jewellery stock hard to value</td><td>Cost valuation with rate-date records and physical weight reconciliation, keeping closing stock audit-ready as gold rates move.</td></tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES + CTA 2 -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail Accounting Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 3,499/mo (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Additional Store or Channel</td><td>Priced per outlet and per marketplace based on volume</td></tr>
                        <tr><td>Marketplace TCS (Section 52)</td><td>1 percent collected by the platform, claimed back via GSTR-2B (govt mechanism)</td></tr>
                        <tr><td>Section 194-O TDS</td><td>0.1 percent on gross sales, deducted by the platform (govt charge)</td></tr>
                        <tr><td>Accounting Software Subscription</td><td>Charged separately by Tally, Zoho, or the chosen provider</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box">
                    <p>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the number of stores, channels, and transaction volume. Government taxes such as TCS and TDS are statutory and adjusted through your GST and income tax returns.</p>
                </div>

                <div class="reviews-cta">
                    <div class="reviews-cta-content">
                        <div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                        <div class="reviews-cta-text">
                            <h3>Get a fixed monthly quote for your Delhi retail business</h3>
                            <p>Tell us your stores and channels and we respond within 2 hours.</p>
                        </div>
                    </div>
                    <a href="tel:+919459456700" class="btn-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Call +91 945 945 6700
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIME TAKEN -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail Accounting Turnaround in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Retail Setup</th><th>Typical Cycle</th></tr></thead>
                    <tbody>
                        <tr><td>Single counter shop</td><td>Onboarding in 3 to 5 days; books closed within 5 days of month-end</td></tr>
                        <tr><td>Wholesale-cum-retail dealer</td><td>Onboarding in 1 to 2 weeks; channel-split close within 7 to 10 days of month-end</td></tr>
                        <tr><td>Online and omnichannel seller</td><td>Onboarding in 1 to 2 weeks; settlement reconciliation monthly before GSTR-3B</td></tr>
                        <tr><td>Cash-heavy or high-SKU market shop</td><td>Onboarding in 2 to 3 weeks; daily cash and POS posting with monthly stock reconciliation</td></tr>
                    </tbody>
                </table>
                </div>
                <p>How fast we onboard depends on how cleanly your POS, cash records, and settlement data export, and on the number of outlets and channels in play. A single CP shop moves quickest; a Sadar Bazaar dealer running wholesale, retail, and Amazon takes a little longer to map.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div class="why-choose-header">
            <h2 class="section-title" style="text-align:center;">Why Choose Patron for Retail Accounting in Delhi</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                <h3 class="feature-title">Retail-Specialised CAs</h3>
                <p class="feature-text">Our team reads POS data, cash drawers, store-wise stock, and marketplace settlements fluently, so reconciliations land right the first time, not after rework.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/></svg></div>
                <h3 class="feature-title">GST and TCS Accurate</h3>
                <p class="feature-text">We split wholesale B2B from retail B2C, reconcile marketplace TCS to GSTR-2B, and weigh composition against regular GST under Section 10.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                <h3 class="feature-title">Software Agnostic</h3>
                <p class="feature-text">Your books run inside Tally Prime, Zoho Books, or QuickBooks, fitting around your current POS and billing rather than forcing a switch.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <h3 class="feature-title">Fixed Monthly Pricing</h3>
                <p class="feature-text">A transparent retainer from INR 3,499/mo, scoped to your outlets and channels, so the cost stays predictable as you scale.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
                <h3 class="feature-title">Local Delhi Knowledge</h3>
                <p class="feature-text">We know GST Delhi practice and the trading belts of Karol Bagh, Sadar Bazaar, Chandni Chowk, Connaught Place, and Lajpat Nagar, including that Delhi has no profession tax.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg></div>
                <h3 class="feature-title">Margin You Can Act On</h3>
                <p class="feature-text">A monthly MIS that breaks margin down by store, channel, and SKU, so you back the winners and clear the dead stock.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON TABLE -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Bookkeeping vs Patron Retail Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron Professional</th><th>In-House / DIY</th></tr></thead>
                    <tbody>
                        <tr><td>Cash and tender control</td><td>Daily drawer-to-bank matching with denomination checks</td><td>Cash counted loosely; short banking goes unnoticed</td></tr>
                        <tr><td>Wholesale vs retail GST</td><td>Channels split cleanly under one GSTIN</td><td>B2B and B2C mixed; returns and margin distorted</td></tr>
                        <tr><td>Marketplace settlement</td><td>Rebuilt to taxable value; commission, TCS, TDS split out</td><td>Net payout treated as sales; margin overstated</td></tr>
                        <tr><td>Stock and bullion valuation</td><td>Per outlet, rate-date records, audit-ready</td><td>Rough estimates; gold-rate swings hide true margin</td></tr>
                        <tr><td>Cost and owner focus</td><td>Fixed retainer; owner trades, not bookkeeps</td><td>Staff hours and rework land on the founder</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Selling heavily online as well? Compare with <a href="/accounting-services-for-e-commerce-industry/delhi">E-commerce Accounting in Delhi</a> and our national <a href="/gst-returns">GST Return Filing</a> service.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED / PARTNER SERVICES -->
<section class="content-section" id="related-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services</h2>
            <p class="pa-block-sub">Start with the national retail service, then explore complementary services across India.</p>
            <ul>
                <li><a href="/accounting-services-for-retail">Retail Sector Accounting in India</a> - the national parent service</li>
                <li><a href="/accounting-services">Accounting Services</a> - the bookkeeping foundation under your retail books</li>
                <li><a href="/gst-returns">GST Return Filing</a> - B2C, composition, and regular returns</li>
                <li><a href="/income-tax-return">Income Tax Return Filing</a> - file accurate ITRs on clean retail books</li>
                <li><a href="/payroll-services">Payroll Services</a> - store staff payroll, PF, and ESI</li>
                <li><a href="/tax-audit">Tax Audit</a> - audit support when turnover crosses the threshold</li>
            </ul>

            <h3 style="margin-top:32px;margin-bottom:8px;">More Services in Delhi</h3>
            <div class="pa-cross-grid" style="margin-top:12px;">
                <a href="/accounting-services/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                    <div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/gst-returns/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 7h8M8 11h8M8 15h5"/></svg></div>
                    <div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/accounting-services-for-e-commerce-industry/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
                    <div><div class="pa-card-title">E-commerce Accounting</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/tally-accounting/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18"/></svg></div>
                    <div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/zoho-books-accounting/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                    <div><div class="pa-card-title">Zoho Books Accounting</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/payroll-services/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                    <div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Delhi</div></div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Retail Accounting in India</h2>
            <div class="content-text">
                <p><strong>CGST Act 2017, Section 10:</strong> A trader with turnover up to <strong>INR 1.5 crore</strong> can opt for the composition levy at <strong>1 percent</strong>, but cannot claim input tax credit, cannot issue a tax invoice, and cannot supply through a marketplace that collects TCS.</p>
                <p><strong>CGST Act 2017, Section 52:</strong> E-commerce operators collect <strong>TCS at 1 percent</strong> (0.5 percent CGST + 0.5 percent SGST) on net taxable supplies and report it in GSTR-8; the seller reconciles it against GSTR-2B.</p>
                <p><strong>CGST Act 2017, Section 35:</strong> Every registered person must maintain true and correct accounts of production, stock, inward and outward supply, and input tax credit, kept for <strong>6 years</strong>.</p>
                <p><strong>Income Tax Act, Section 194-O:</strong> E-commerce operators deduct <strong>TDS at 0.1 percent</strong> on the gross amount of sales to participants, with an exemption for small individual and HUF sellers below INR 5 lakh who furnish PAN.</p>
                <p><strong>Income Tax Act, Section 44AA and Delhi profession tax:</strong> Books must be maintained above the prescribed threshold. Unlike Maharashtra, <strong>Delhi levies no profession tax</strong>, so a Delhi retailer has no PTRC or PTEC registration to manage.</p>
                <p>Authority reference: <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal (gst.gov.in)</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 16: FAQs (H3) -->
<section class="content-section" id="faq-section">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions: Retail Accounting in Delhi</h2>
                    <p class="faq-expanded__lead">Real questions from Delhi market traders, brand flagships, and online sellers about retail accounting, cash, and GST.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Delhi', 'enquiryService' => 'Retail Accounting in Delhi'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do you keep books for a cash-heavy Delhi market shop?</h3>
                        <div class="faq-expanded__a"><p>For a high-cash store in Karol Bagh or Sadar Bazaar, Patron posts every day-close, reconciles the cash drawer against the bank deposit, and separates card and UPI tenders. Daily denomination tracking exposes short banking early, and counter sales are booked as B2C supplies in GSTR-1 so cash turnover and declared GST stay aligned under the CGST Act 2017.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">We sell wholesale and retail under one GSTIN in Chandni Chowk. How is GST handled?</h3>
                        <div class="faq-expanded__a"><p>A Sadar Bazaar or Chandni Chowk dealer running both wholesale B2B and counter B2C uses one GSTIN with split reporting. Patron records B2B invoices with buyer GSTINs and books counter sales as consolidated B2C, both flowing into GSTR-1 and GSTR-3B. We tag each channel so margins on bulk and retail lines read separately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is there a profession tax on retail staff in Delhi?</h3>
                        <div class="faq-expanded__a"><p>No. Delhi does not levy profession tax, so there is no PTRC or PTEC registration as there is in Maharashtra cities like Pune or Mumbai. Patron still runs your store payroll with PF, ESI, and TDS where applicable, but a Delhi retailer skips the profession tax filings entirely, which lightens monthly compliance for shops in CP or Lajpat Nagar.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is jewellery and bullion-linked stock valued for a Karol Bagh store?</h3>
                        <div class="faq-expanded__a"><p>Apparel-and-jewellery shops in Karol Bagh carry stock whose value moves with gold rates. Patron values bullion-linked inventory at cost with rate-date records, books making charges separately, and reconciles physical weight to the stock register. This keeps closing stock defensible in an audit and shows true margin once metal price swings are stripped out.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How much does retail accounting cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Fees start from INR 3,499/mo (Exl GST and Govt. Charges). The exact retainer scales with store count, billing volume, marketplace channels, and the number of GST registrations. A single Khan Market boutique sits at the lower end; a Sadar Bazaar wholesaler also selling online pays more. We confirm a fixed quote before any onboarding begins.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How do you reconcile Amazon, Flipkart, and Meesho payouts for Delhi sellers?</h3>
                        <div class="faq-expanded__a"><p>Each payout is grossed back up to taxable sales by adding commission, Section 52 TCS, Section 194-O TDS, shipping, and return adjustments, then matched to the bank credit and your GSTR-1. The 1 percent TCS shown in the platform GSTR-8 is reconciled to your GSTR-2B every month so a Lajpat Nagar seller loses no input credit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Should a Delhi trader pick the GST composition scheme or regular GST?</h3>
                        <div class="faq-expanded__a"><p>A trader below INR 1.5 crore can elect composition under Section 10 and pay a flat 1 percent, but loses input credit, cannot issue a tax invoice, and cannot sell on TCS marketplaces. A Connaught Place flagship or any seller listing on Amazon must stay in regular GST. Patron models both routes against your turnover before you lock in.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Which records must a Delhi retail business retain?</h3>
                        <div class="faq-expanded__a"><p>Section 35 of the CGST Act 2017 and Section 44AA of the Income Tax Act require sales and purchase registers, stock records, the cash book, and bank statements to be kept for 6 years. Patron maintains these by store and channel for the GST Delhi authority and RoC Delhi, so a notice or assessment is answered without scrambling for papers.</p></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 17: QUICK ANSWERS -->
<section class="content-section" id="quick-answers-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Quick Answers</h2>
            <div class="content-text">
                <p><strong>Most common retail mistake?</strong> Treating the net marketplace payout as revenue; the gross sale, commission, TCS, and TDS each need their own line so margin and GST stay correct.</p>
                <p><strong>Does Delhi charge profession tax?</strong> No, Delhi has no profession tax, so there is no PTRC or PTEC to file, unlike Pune or Mumbai in Maharashtra.</p>
                <p><strong>Can it be done remotely?</strong> Yes. POS, cash, bank, and settlement files are shared online; we arrange store visits for physical stock counts when needed.</p>
                <p><strong>What do I get each month?</strong> Reconciled books, filed GST, and a margin and stock MIS split by store, channel, and product line.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 19: CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" id="conclusion-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Run Your Delhi Retail Business on Clear Numbers</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">In Delhi, margins are made store by store and SKU by SKU, and lost the moment cash, stock, and marketplace settlements stop agreeing. Whether you run a cash-heavy shop in Karol Bagh, a wholesale-cum-retail counter in Sadar Bazaar, a brand flagship in Connaught Place, or a boutique listing on Amazon and Flipkart, Patron Accounting's CA-supervised retail service reconciles every tender and channel, files your GST, and delivers a monthly margin MIS from INR 3,499/mo.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Explore the national <a href="/accounting-services-for-retail" style="color:#fff;text-decoration:underline;">Retail Sector Accounting</a> page, then pair it with <a href="/gst-returns" style="color:#fff;text-decoration:underline;">GST Return Filing</a> to keep compliance tight. Patron Accounting LLP serves 10,000+ businesses with a 4.9 Google rating.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20retail%20accounting%20in%20Delhi.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Retail%20Accounting%20in%20Delhi&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20retail%20sector%20accounting%20in%20Delhi.%0A%0APlease%20contact%20me.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY INTERLINKING (CURRENT CITY = DELHI, NOT LINKED) -->
<section class="content-section" id="city-links-section">
    <div class="content-container">
        <div class="pa-city-block">
            <div class="pa-block-title">Retail Sector Accounting by City</div>
            <div class="pa-block-sub">Available across our four office cities. You are viewing the Delhi page.</div>
            <div class="pa-city-grid">
                <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div>
                    <span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span>
                </div>
                <a href="/accounting-services-for-retail/pune" class="pa-city-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                </a>
                <a href="/accounting-services-for-retail/mumbai" class="pa-city-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                </a>
                <a href="/accounting-services-for-retail/gurugram" class="pa-city-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 24: FRESHNESS FOOTER -->
<section class="content-section" id="freshness-section" style="padding-top:32px;padding-bottom:48px;">
    <div class="content-container">
        <div class="content-text" style="font-size:13px;color:var(--text-muted);">
            <p style="margin-bottom:4px;"><strong>Content Created:</strong> 23 June 2026 | <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 June 2026</span> | <strong>Next Review:</strong> 23 September 2026</p>
            <p style="margin-bottom:0;">Reviewed by CA and CS Team, Patron Accounting LLP. Review Triggers: changes to GST composition limits, marketplace TCS or TDS rates, or Patron Accounting fees.</p>
        </div>
    </div>
</section>

</main>

<script>
// Country Code Dropdown
var countries = [
    { name: 'India', code: '+91', flag: '🇮🇳' },
    { name: 'United States', code: '+1', flag: '🇺🇸' },
    { name: 'United Kingdom', code: '+44', flag: '🇬🇧' },
    { name: 'United Arab Emirates', code: '+971', flag: '🇦🇪' },
    { name: 'Singapore', code: '+65', flag: '🇸🇬' },
    { name: 'Australia', code: '+61', flag: '🇦🇺' },
    { name: 'Canada', code: '+1', flag: '🇨🇦' },
    { name: 'Germany', code: '+49', flag: '🇩🇪' },
    { name: 'Saudi Arabia', code: '+966', flag: '🇸🇦' }
];
var selectedCountry = countries[0];

function populateCountries() {
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    countries.forEach(function(c, i) {
        var div = document.createElement('div');
        div.className = 'country-option' + (i === 0 ? ' active' : '');
        div.innerHTML = '<span class="flag-emoji">' + c.flag + '</span><span class="country-name">' + c.name + '</span><span class="dial-code">' + c.code + '</span>';
        div.onclick = function(e) { e.stopPropagation(); selectCountry(c); };
        container.appendChild(div);
    });
}
function selectCountry(c) {
    selectedCountry = c;
    document.getElementById('selectedFlag').textContent = c.flag;
    document.getElementById('selectedCode').textContent = c.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
}
function toggleCountryDropdown(e) {
    e.stopPropagation();
    document.getElementById('countryCodeDropdown').classList.toggle('open');
}
function filterCountries(val) {
    val = (val || '').toLowerCase();
    var opts = document.querySelectorAll('#countryOptions .country-option');
    opts.forEach(function(o) {
        var name = o.querySelector('.country-name').textContent.toLowerCase();
        var code = o.querySelector('.dial-code').textContent.toLowerCase();
        o.style.display = (name.indexOf(val) > -1 || code.indexOf(val) > -1) ? 'flex' : 'none';
    });
}
document.addEventListener('click', function() {
    var d = document.getElementById('countryCodeDropdown');
    if (d) d.classList.remove('open');
});

// Field Error Helpers
function clearFieldError(el) {
    el.classList.remove('input-error');
    var parent = el.closest('.form-group');
    if (parent) {
        var err = parent.querySelector('.field-error-msg');
        if (err) err.remove();
    }
}
function setFieldError(el, message) {
    el.classList.add('input-error');
    var parent = el.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// Phone Validation
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) { return { valid: false, message: 'Phone number is required' }; }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) { return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' }; }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) { return { valid: false, message: 'Enter a valid phone number (7-15 digits)' }; }
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
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote →'; }, 6000);
    }
    return isValid;
}

window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
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
// Bigin Mandatory Fields Validation
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) { isReturn = false; }
        }
    }
    if(isReturn) { document.getElementById('formSubmitBtn').disabled = true; }
    return isReturn;
}

document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) { showSuccessState(); }
    } catch (error) { showSuccessState(); }
});
</script>

<!-- Bigin WebForm Script -->
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
