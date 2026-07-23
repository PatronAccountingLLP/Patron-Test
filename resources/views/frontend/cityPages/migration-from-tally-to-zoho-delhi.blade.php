
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
    <title>Tally to Zoho Migration in Delhi 2026 | Patron Accounting</title>
    <meta name="description" content="Shift Tally to Zoho Books in Delhi from INR 9,999. CA-led ledger mapping, opening balance tie-out, and Delhi GST setup for Nehru Place and Okhla firms.">
    <link rel="canonical" href="/migration-from-tally-to-zoho/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Tally to Zoho Migration in Delhi 2026 | Patron Accounting">
    <meta property="og:description" content="Shift Tally to Zoho Books in Delhi from INR 9,999. CA-led ledger mapping, opening balance tie-out, and Delhi GST setup for Nehru Place and Okhla firms.">
    <meta property="og:url" content="/migration-from-tally-to-zoho/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/migration-from-tally-to-zoho/delhi-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tally to Zoho Migration in Delhi 2026 | Patron Accounting">
    <meta name="twitter:description" content="Shift Tally to Zoho Books in Delhi from INR 9,999. CA-led ledger mapping, opening balance tie-out, and Delhi GST setup for Nehru Place and Okhla firms.">
    <meta name="twitter:image" content="/images/migration-from-tally-to-zoho/delhi-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/migration-from-tally-to-zoho/delhi#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.patronaccounting.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Migration From Tally To Zoho",
          "item": "https://www.patronaccounting.com/migration-from-tally-to-zoho"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Tally to Zoho Migration Services in Delhi",
          "item": "https://www.patronaccounting.com/migration-from-tally-to-zoho/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/migration-from-tally-to-zoho/delhi#faq",
      "datePublished": "2026-06-23T08:00:00+05:30",
      "dateModified": "2026-06-23T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does it cost to migrate from Tally to Zoho in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Accounting charges Starting from INR 9,999 (Exl GST and Govt. Charges). What you finally pay turns on the years of history brought across, the count of ledgers and GSTINs, stock volume, and whether you take Zoho Books on its own or the broader Zoho One suite. Nehru Place and Okhla firms receive a fixed quote up front."
          }
        },
        {
          "@type": "Question",
          "name": "Will my opening balances and trial balance match after moving to Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Opening balances are keyed from your Tally trial balance as on 31 March or the chosen cut-off, after which we verify the Opening Balance Adjustment account in Zoho Books reads zero. A two-point trial balance check across Tally and Zoho Books confirms debits and credits agree before any sign-off is given."
          }
        },
        {
          "@type": "Question",
          "name": "Can you set up Delhi GST and e-invoicing in Zoho Books during migration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We finish the Zoho Books GST setup, record your Delhi GSTIN, attach HSN and SAC codes, link the GSP, switch on e-invoicing and reverse charge where due, and align GSTR-2B reconciliation under the CGST Act 2017. The whole GST stack is live before your first Zoho invoice leaves the building."
          }
        },
        {
          "@type": "Question",
          "name": "Can you migrate a high-volume Nehru Place IT reseller without disrupting daily invoicing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. For Nehru Place hardware and IT resellers raising hundreds of invoices a week, we agree a cut-off date, migrate masters and opening balances first, and configure Zoho Books in parallel with your live Tally. You keep billing in Tally until go-live day, then switch over once the trial balance ties out cleanly."
          }
        },
        {
          "@type": "Question",
          "name": "How do you handle inventory for an Okhla or Mayapuri manufacturer moving to Zoho?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For Okhla and Mayapuri production units we carry item masters, opening stock quantities and values, and tax mappings into Zoho Books or Zoho Inventory. Every stock summary is matched against the Tally closing position item by item, so valuation continues without a break and your factory accounting stays intact after the cut-off date."
          }
        },
        {
          "@type": "Question",
          "name": "Can you migrate a Karol Bagh trading house that runs several GSTINs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Karol Bagh and Connaught Place trading houses often hold multiple GSTINs across branches. We map each registration to its own Zoho Books organisation or branch, carry opening balances separately, and reconcile every GSTIN against its Tally figures so consolidated and branch-level reports both stand up after migration."
          }
        },
        {
          "@type": "Question",
          "name": "Do I lose my Tally history after migrating to Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Your original Tally company file is left untouched and retained for the 6-year period under Rule 6F(5) of the Income Tax Rules. You decide how much history enters Zoho Books, ranging from opening balances alone to several years of invoices, bills, and journals rebuilt in the correct import sequence."
          }
        },
        {
          "@type": "Question",
          "name": "Should a Delhi business pick Zoho Books or the full Zoho One suite?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Zoho Books on its own fits firms that only want accounting, Delhi GST, and bank feeds. A Connaught Place office already running Zoho CRM or Zoho People usually gains from Zoho One, where Books, Inventory, Expense, and Payroll sit on one shared ledger. Patron weighs the fit with you during scoping before any licence is bought."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/migration-from-tally-to-zoho/delhi#service",
      "name": "Tally to Zoho Migration in Delhi",
      "description": "Tally to Zoho Books migration in Delhi moves your chart of accounts, masters, opening balances, and historical transactions into Zoho Books with Delhi GST setup, bank feeds, and trial balance reconciliation. Patron Accounting handles ledger mapping and validation for Nehru Place, Okhla, and Karol Bagh businesses.",
      "serviceType": "Tally to Zoho Books Migration",
      "url": "/migration-from-tally-to-zoho/delhi",
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
          "name": "Accounting software",
          "sameAs": "https://en.wikipedia.org/wiki/Accounting_software"
        },
        {
          "@type": "Thing",
          "name": "Goods and Services Tax (India)",
          "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Tally to Zoho Migration Plans in Delhi",
        "itemListElement": [
          {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "9999",
            "priceSpecification": {
              "@type": "UnitPriceSpecification",
              "priceCurrency": "INR",
              "price": "9999",
              "unitText": "starting from"
            },
            "itemOffered": {
              "@type": "Service",
              "name": "Tally to Zoho Books Migration"
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
      "url": "/migration-from-tally-to-zoho/delhi",
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
                        Tally to Zoho Migration in Delhi
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI and ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 June 2026</span></span>
                        </span>
                        <a href="/migration-from-tally-to-zoho" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What Moves:</span> Chart of accounts, ledgers, masters, opening balances, and historical transactions into Zoho Books</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 9,999 (Exl GST and Govt. Charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Best For:</span> Nehru Place IT resellers, Okhla and Mayapuri manufacturers, and Karol Bagh trading houses on single-PC Tally</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Go-Live:</span> 3 to 7 working days for opening balances; 3 to 6 weeks with full history</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20migrate%20from%20Tally%20to%20Zoho%20Books%20in%20Delhi.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Tally to Zoho Migration'/>
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
                                <option value="migration-from-tally-to-zoho/delhi" selected>Tally to Zoho Migration in Delhi</option>
                                <option value="zoho-books-accounting/delhi">Zoho Books Accounting in Delhi</option>
                                <option value="tally-accounting/delhi">Tally Accounting in Delhi</option>
                                <option value="gst-returns/delhi">GST Return Filing in Delhi</option>
                                <option value="accounting-services/delhi">Accounting Services in Delhi</option>
                                <option value="payroll-services/delhi">Payroll Services in Delhi</option>
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
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">Startups, SMEs, and growing companies across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
            <div class="stat-content"><span class="stat-value">2,000+</span><span class="stat-label">Software Migrations</span><span class="stat-desc">Tally, Zoho, QuickBooks, and Xero data moved cleanly.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Zoho Aware<span class="cert-desc">Hands-on with Zoho Books, Inventory, and Zoho One.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
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

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR + SUMMARY TABLE -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tally to Zoho Migration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Tally to Zoho Books Migration in Delhi at a Glance</strong></p>
                    <p>Switching from Tally to Zoho Books takes your ledgers, masters, opening balances, and the years of history you choose out of a desktop file and onto a cloud platform any browser can reach. Patron Accounting matches each Tally group to a Zoho account, imports the data in Zoho's prescribed order, sets up Delhi GST and bank feeds, and demonstrates that the trial balance agrees. Fees begin at INR 9,999. We work with firms across Nehru Place, Okhla, Mayapuri, Karol Bagh, and Connaught Place.</p>
                </div>

                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Quick Reference</th><th>Details for Delhi Businesses</th></tr></thead>
                    <tbody>
                        <tr><td>What It Is</td><td>Structured move of Tally data into Zoho Books or the Zoho One cloud suite</td></tr>
                        <tr><td>Best Suited To</td><td>Nehru Place IT and hardware resellers, Okhla and Mayapuri factories, Karol Bagh and CP trading houses</td></tr>
                        <tr><td>Starting Price</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Go-Live Timeline</td><td>3 to 7 working days (opening balances) up to 3 to 6 weeks (full history)</td></tr>
                        <tr><td>Import Order</td><td>Chart of accounts, contacts, items, opening balances, then historical transactions</td></tr>
                        <tr><td>Validation Check</td><td>Opening Balance Adjustment account must read zero; two-point trial balance tie-out</td></tr>
                        <tr><td>GST Setup</td><td>Delhi GSTIN, HSN/SAC, GSP connection, e-invoicing, GSTR-2B reconciliation in Zoho Books</td></tr>
                    </tbody>
                </table>
                </div>

                <p>Across Delhi, what pushes a business off Tally is rarely the software itself; it is the single-PC ceiling. A hardware and IT reseller in the crowded lanes of Nehru Place wants partners, the owner, and an outsourced accountant to all see the same books without queuing for one machine. A fabrication unit in Okhla or Mayapuri needs purchase, stock, and Delhi GST in one place that the shop floor and the head office both reach. Migration is the bridge that gets you there without dropping a single voucher of history. See our national <a href="/migration-from-tally-to-zoho">Migration from Tally to Zoho</a> service.</p>
                <p>For Patron Accounting's Delhi desk, migration is an accounting engagement and not a copy-paste exercise. We rebuild your chart of accounts inside Zoho Books, transfer opening balances from the Tally trial balance, and reconcile both systems before you issue even one Zoho invoice. A bonus for Delhi firms: there is no profession tax here, so there is one fewer registration to carry across. To operate the books afterwards, see <a href="/zoho-books-accounting/delhi">Zoho Books Accounting in Delhi</a>. This page is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Tally to Zoho Books Migration?</h2>
                <div class="content-text what-is-definition">
                    <p>Tally to Zoho migration is the deliberate handover of your accounting records from Tally, a desktop ERP, into Zoho Books, the cloud accounting product within the wider Zoho One suite, so your financials live online and stay aligned with Delhi GST rules.</p>
                    <p>For a Nehru Place IT reseller, it means rebuilding the chart of accounts in Zoho Books, importing customer and supplier masters, carrying opening balances over, and wiring up bank feeds so high-volume settlements drop in on their own. For an Okhla or Mayapuri manufacturer, it extends to item masters, opening stock quantities and values, and tax mappings, so production accounting carries on inside Zoho Inventory without interruption.</p>
                    <p>What matters most is that the data enters Zoho in the sequence it demands and that the trial balance squares with Tally before the cut-over is locked in. To keep the books running, see <a href="/zoho-books-accounting/delhi">Zoho Books Accounting in Delhi</a>; if you intend to stay on the desktop a while longer, see <a href="/tally-accounting/delhi">Tally Accounting in Delhi</a>.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Tally to Zoho Migration in Delhi:</strong></p>
                    <p><strong>Chart of Accounts Mapping:</strong> Pairing each Tally ledger and group with its Zoho Books equivalent so reports remain comparable across both systems.</p>
                    <p><strong>Opening Balances:</strong> The Tally trial balance figures as on the cut-off date, posted into Zoho Books to open the new set of books.</p>
                    <p><strong>Opening Balance Adjustment:</strong> The Zoho Books account that has to read zero once every debit and credit is posted correctly.</p>
                    <p><strong>Import Sequence:</strong> Bringing in accounts first, then contacts, items, opening balances, and historical transactions in the order Zoho Books expects.</p>
                    <p><strong>Bank Feeds:</strong> The automatic pull of bank transactions into Zoho Books for ongoing reconciliation once you go live.</p>
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
                            <text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Tally Migrated, Zoho Books Live</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Delhi Migration</span>
                        <strong>Accounts | Masters | Balances</strong>
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
            <h2 class="section-title">Who Needs Tally to Zoho Migration in Delhi?</h2>
            <div class="content-text">
                <p>If your Delhi business has hit the limit of a single-machine Tally licence, wants cloud access for a spread-out team, or is consolidating on the Zoho stack, you are a strong candidate to move onto Zoho Books.</p>
                <ul>
                    <li><strong>IT and Hardware Resellers (Nehru Place)</strong> - Raising heavy invoice volumes daily and needing multi-user, browser-based books with tidy Zoho CRM integration.</li>
                    <li><strong>Manufacturers and Fabricators (Okhla/Mayapuri)</strong> - Want item masters, stock, and Delhi GST in one cloud system the factory and office can both open.</li>
                    <li><strong>Trading Houses (Karol Bagh/Connaught Place)</strong> - Often juggling several GSTINs and bank accounts that automated Zoho bank feeds make far easier to reconcile.</li>
                    <li><strong>Founders Consolidating on Zoho One</strong> - Already on Zoho CRM, Expense, or People and wanting Books on the same login and shared ledger.</li>
                    <li><strong>Distributed and Hybrid Finance Teams</strong> - Accountants who can no longer pass one desktop Tally file between branches or work-from-home staff.</li>
                    <li><strong>Firms Chasing Cleaner GST and E-Invoicing</strong> - After built-in GSTR-2B reconciliation and e-invoicing sitting right inside the accounting tool.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Tally to Zoho Migration Services in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Chart of Accounts Mapping</td><td>Pair every Tally ledger and group with a Zoho Books account so your profit and loss and balance sheet stay comparable across both platforms.</td></tr>
                        <tr><td>Masters and Contacts Import</td><td>Move customers, suppliers, items, tax rates, and HSN/SAC codes into Zoho Books as clean, de-duplicated records.</td></tr>
                        <tr><td>Opening Balances and Trial Balance</td><td>Post opening balances from the Tally trial balance and verify the Opening Balance Adjustment account reads zero.</td></tr>
                        <tr><td>Historical Transactions</td><td>Rebuild your chosen years of invoices, bills, payments, receipts, and journals in the import sequence Zoho requires.</td></tr>
                        <tr><td>Delhi GST, E-Invoicing, and Bank Feeds</td><td>Set up the Delhi GSTIN, GSP connection, e-invoicing, GSTR-2B reconciliation, and switch on automated bank feeds.</td></tr>
                        <tr><td>Team Training and Handover</td><td>Coach your Delhi team on running Zoho Books day to day, then hand over a reconciled, audit-ready file.</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Already decided on Zoho? See <a href="/zoho-books-accounting">Zoho Books Accounting</a> and <a href="/gst-returns">GST Return Filing</a> across India.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: PROCESS STEPS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Tally to Zoho Migration Works in Delhi: 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A CA-supervised migration method built for Delhi businesses, running from Tally data export through to a reconciled Zoho Books go-live.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Scoping and Tally Data Export</h3><p class="step-description">Patron's CA checks how many ledgers, GSTINs, and years of history you hold, and whether Zoho Books alone or Zoho One fits. We pull the Tally chart of accounts, masters, and trial balance, then fix a firm scope before any work begins.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scope Defined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Exported</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M45 35v14M38 42h14" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="70" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="70" y1="42" x2="90" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Scoped</span><span class="step-number-large">01</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Chart of Accounts Mapping in Zoho Books</h3><p class="step-description">Each Tally ledger and group is paired to the right Zoho Books account, tax treatments are set, and cost centres are aligned. For Nehru Place resellers, sales-channel and warranty-provision structures are configured so reports keep reconciling after the move.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Accounts Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax Aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="25" width="64" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="28" y="38" width="48" height="8" rx="2" fill="#14365F" opacity="0.15"/><rect x="28" y="51" width="56" height="8" rx="2" fill="#14365F" opacity="0.15"/><circle cx="92" cy="62" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M87 62l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Mapped</span><span class="step-number-large">02</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Masters and Opening Balances Import</h3><p class="step-description">Customer, supplier, and item masters go in first, then opening balances are posted from the Tally trial balance as on the cut-off date. Before moving on, we make sure the Zoho Books Opening Balance Adjustment account reads zero.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Masters Loaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Balances Tied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="32" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Tally</text><rect x="65" y="20" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="87" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Zoho</text><path d="M55 47h10" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/><path d="M60 42l5 5-5 5" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Imported</span><span class="step-number-large">03</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Historical Transactions and GST Setup</h3><p class="step-description">Your chosen years of invoices, bills, payments, and journals are loaded in Zoho's required order. Alongside that we finish the GST setup: Delhi GSTIN, HSN and SAC codes, GSP connection, e-invoicing, and GSTR-2B reconciliation under the CGST Act 2017.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>History Loaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST Configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="55" width="12" height="15" rx="2" fill="#E8712C" opacity="0.6"/><rect x="42" y="40" width="12" height="30" rx="2" fill="#14365F" opacity="0.4"/><rect x="59" y="30" width="12" height="40" rx="2" fill="#E8712C" opacity="0.6"/><rect x="76" y="25" width="12" height="45" rx="2" fill="#14365F" opacity="0.4"/></svg></div><span class="illustration-label">Loaded</span><span class="step-number-large">04</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Bank Feeds and Reconciliation</h3><p class="step-description">Automated bank feeds are linked for every account, and opening bank reconciliations are matched against the migrated ledgers. We confirm the Zoho Books balances agree with the bank statements and with the Tally closing position.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Feeds Connected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Banks Matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="16" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M60 32v8l5 4" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">05</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Validation, Training, and Go-Live</h3><p class="step-description">A two-point trial balance check proves Zoho Books matches Tally, a CA signs off, and we train your Delhi team on everyday use. The books go live with a brief summary of what was migrated and any items awaiting your confirmation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TB Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Team Trained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 37l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="72" width="50" height="12" rx="6" fill="#F5A623" opacity="0.3"/><text x="60" y="81" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GO LIVE</text></svg></div><span class="illustration-label">Live</span><span class="step-number-large">06</span></div></div></div>
        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What We Need to Migrate Tally to Zoho in Delhi</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Tally Company File or Backup</strong> - The source data covering your full migration period</li>
                    <li><strong>Tally Trial Balance</strong> - As on 31 March or your chosen cut-off date, used for opening balances</li>
                    <li><strong>Chart of Accounts and Ledger List</strong> - With groupings, ready for mapping into Zoho Books</li>
                    <li><strong>Customer and Supplier Masters</strong> - With GSTINs and contact details</li>
                    <li><strong>Item and Stock Masters</strong> - Quantities, values, and HSN/SAC codes, if you carry inventory</li>
                    <li><strong>Delhi GST Registration Certificate</strong> - GSTIN for each registration</li>
                    <li><strong>PAN of the Business Entity</strong></li>
                    <li><strong>Bank Statements</strong> - For opening bank reconciliation and feed setup</li>
                    <li><strong>Zoho Books or Zoho One Plan Choice</strong> - So we configure the correct edition</li>
                    <li><strong>Trade Licence or Establishment Details</strong> - If applicable to your Delhi premises</li>
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
            <h2 class="section-title">Common Migration Challenges and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Patron's Solution</th></tr></thead>
                    <tbody>
                        <tr><td>Tally groups with no clean Zoho equivalent</td><td>Prepare a documented mapping sheet, merge or split ledgers as required, and agree report comparability with you up front.</td></tr>
                        <tr><td>Multiple GSTINs across Karol Bagh and CP branches</td><td>Map each registration to its own Zoho organisation or branch and reconcile every GSTIN against its Tally figures separately.</td></tr>
                        <tr><td>High invoice volumes that risk import errors</td><td>Stage imports in Zoho's required order, batch high-volume Nehru Place data, and validate row counts before the final load.</td></tr>
                        <tr><td>Stock valuation drifting after the cut-off</td><td>Carry opening stock at the Tally closing quantities and values, then reconcile the Zoho Inventory position item by item.</td></tr>
                        <tr><td>Delhi GST and e-invoicing left until after go-live</td><td>Complete the full Zoho Books GST setup, GSP and e-invoicing included, before the first live invoice is raised.</td></tr>
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
            <h2 class="section-title">Tally to Zoho Migration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Additional Years of History</td><td>Quoted per financial year, based on transaction volume</td></tr>
                        <tr><td>Inventory and Stock Migration</td><td>Quoted per item-master volume for Okhla and Mayapuri manufacturers</td></tr>
                        <tr><td>Zoho Books / Zoho One Subscription</td><td>Billed separately by Zoho per the chosen edition</td></tr>
                        <tr><td>Team Training Sessions</td><td>Included for core users; extra sessions on request</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box">
                    <p>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Zoho subscription charges are billed directly by Zoho and are separate from Patron's migration fees.</p>
                </div>

                <div class="reviews-cta">
                    <div class="reviews-cta-content">
                        <div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                        <div class="reviews-cta-text">
                            <h3>Get a fixed-scope migration quote for your Delhi business</h3>
                            <p>Share your ledger count and years of history; we reply within 2 hours.</p>
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
            <h2 class="section-title">How Long Tally to Zoho Migration Takes in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Migration Scope</th><th>Typical Turnaround</th></tr></thead>
                    <tbody>
                        <tr><td>Opening balances only, single GSTIN</td><td>3 to 7 working days for a straightforward Connaught Place office</td></tr>
                        <tr><td>Current year plus masters</td><td>1 to 2 weeks for most Delhi SMEs</td></tr>
                        <tr><td>2 to 3 years of full history</td><td>3 to 5 weeks depending on volume and the number of GSTINs</td></tr>
                        <tr><td>Multi-year with inventory</td><td>4 to 6 weeks for Okhla and Mayapuri manufacturers carrying stock and BOM</td></tr>
                    </tbody>
                </table>
                </div>
                <p>How long it takes hinges on how much Tally history you carry forward and how fast masters are confirmed. Service firms with tidy ledgers go live soonest; manufacturers needing stock reconstruction take the most time.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div class="why-choose-header">
            <h2 class="section-title" style="text-align:center;">Why Choose Patron for Tally to Zoho Migration in Delhi</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                <h3 class="feature-title">CA-Verified Tie-Out</h3>
                <p class="feature-text">A Chartered Accountant signs off only once a two-point trial balance check confirms Zoho Books matches your Tally closing position to the rupee.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/></svg></div>
                <h3 class="feature-title">Delhi GST-Ready From Day One</h3>
                <p class="feature-text">Delhi GSTIN, HSN/SAC codes, GSP connection, e-invoicing, and GSTR-2B reconciliation are all in place before your first Zoho invoice.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                <h3 class="feature-title">Correct Import Sequence</h3>
                <p class="feature-text">We load accounts, contacts, items, opening balances, then history in the precise order Zoho Books needs, so nothing breaks mid-migration.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <h3 class="feature-title">Fixed-Scope Pricing</h3>
                <p class="feature-text">A transparent quote from INR 9,999 before work starts, covering your agreed ledgers, years of history, and inventory.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
                <h3 class="feature-title">Local Delhi Knowledge</h3>
                <p class="feature-text">Comfortable with Delhi GST practice and RoC Delhi filings, and the trade that powers Nehru Place, Okhla, Mayapuri, and Karol Bagh.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg></div>
                <h3 class="feature-title">Training and Aftercare</h3>
                <p class="feature-text">Your team is trained on Zoho Books at handover, and we can carry on with monthly bookkeeping so the new system stays clean.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON TABLE -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Migration vs Patron Professional Tally to Zoho</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron Professional</th><th>DIY Migration</th></tr></thead>
                    <tbody>
                        <tr><td>Chart of accounts mapping</td><td>Documented Tally to Zoho mapping sheet</td><td>Improvised; reports stop reconciling</td></tr>
                        <tr><td>Opening balance tie-out</td><td>Adjustment account driven to zero</td><td>Frequently left out of balance</td></tr>
                        <tr><td>Multiple GSTIN handling</td><td>Each GSTIN mapped and reconciled separately</td><td>Branches mixed up or double-counted</td></tr>
                        <tr><td>Delhi GST and e-invoicing setup</td><td>Configured before the first invoice</td><td>Found broken only after go-live</td></tr>
                        <tr><td>Time and founder focus</td><td>Run end to end by experts</td><td>Weeks of owner or staff time burned</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Weighing up platforms first? See our national <a href="/migration-from-tally-to-zoho">Migration from Tally to Zoho</a> page and <a href="/zoho-books-accounting">Zoho Books Accounting</a> service.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED / PARTNER SERVICES -->
<section class="content-section" id="related-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services</h2>
            <p class="pa-block-sub">Begin with the national migration service, then branch into complementary services across India.</p>
            <ul>
                <li><a href="/migration-from-tally-to-zoho">Migration from Tally to Zoho in India</a> - the national parent service</li>
                <li><a href="/zoho-books-accounting">Zoho Books Accounting</a> - run your new cloud books after migration</li>
                <li><a href="/tally-accounting">Tally Accounting</a> - if you are staying on the desktop for now</li>
                <li><a href="/gst-returns">GST Return Filing</a> - file from Zoho Books with GSTR-2B reconciliation</li>
                <li><a href="/accounting-services">Accounting Services</a> - ongoing monthly bookkeeping in Zoho</li>
                <li><a href="/payroll-services">Payroll Services</a> - add Zoho Payroll for your team</li>
            </ul>

            <h3 style="margin-top:32px;margin-bottom:8px;">More Services in Delhi</h3>
            <div class="pa-cross-grid" style="margin-top:12px;">
                <a href="/zoho-books-accounting/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                    <div><div class="pa-card-title">Zoho Books Accounting</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/tally-accounting/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18"/></svg></div>
                    <div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/gst-returns/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 7h8M8 11h8M8 15h5"/></svg></div>
                    <div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/accounting-services/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                    <div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div>
                </a>
                <a href="/income-tax-return/delhi" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                    <div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div>
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
            <h2 class="section-title">Compliance Framework for Software Migration in India</h2>
            <div class="content-text">
                <p><strong>CGST Act 2017, GST configuration:</strong> Zoho Books must carry the correct <strong>Delhi GSTIN, HSN and SAC codes, and GSP connection</strong> before invoicing, so returns and e-invoices stay valid from go-live.</p>
                <p><strong>E-Invoicing Rules:</strong> Businesses over the notified turnover threshold must raise <strong>e-invoices via the IRP</strong>; this is switched on inside Zoho Books during migration.</p>
                <p><strong>GSTR-2B Reconciliation:</strong> Input tax credit has to be matched against the auto-drafted <strong>GSTR-2B</strong> under the CGST Act 2017; Zoho Books supports this natively once set up.</p>
                <p><strong>Income Tax Act, Rule 6F(5):</strong> Books of account must be kept for <strong>6 years</strong>, which is why your original Tally file is preserved alongside the new Zoho data.</p>
                <p><strong>Companies Act 2013, Section 128:</strong> Companies must maintain proper books of account; for Delhi companies, filings route through <strong>RoC Delhi</strong> under the MCA.</p>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: Tally to Zoho Migration in Delhi</h2>
                    <p class="faq-expanded__lead">Real questions from Delhi owners and finance teams about moving from Tally to Zoho Books.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Delhi', 'enquiryService' => 'Tally to Zoho Migration in Delhi'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does it cost to migrate from Tally to Zoho in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting charges Starting from INR 9,999 (Exl GST and Govt. Charges). What you finally pay turns on the years of history brought across, the count of ledgers and GSTINs, stock volume, and whether you take Zoho Books on its own or the broader Zoho One suite. Nehru Place and Okhla firms receive a fixed quote up front.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Will my opening balances and trial balance match after moving to Zoho Books?</h3>
                        <div class="faq-expanded__a"><p>Yes. Opening balances are keyed from your Tally trial balance as on 31 March or the chosen cut-off, after which we verify the Opening Balance Adjustment account in Zoho Books reads zero. A two-point trial balance check across Tally and Zoho Books confirms debits and credits agree before any sign-off is given.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can you set up Delhi GST and e-invoicing in Zoho Books during migration?</h3>
                        <div class="faq-expanded__a"><p>Yes. We finish the Zoho Books GST setup, record your Delhi GSTIN, attach HSN and SAC codes, link the GSP, switch on e-invoicing and reverse charge where due, and align GSTR-2B reconciliation under the CGST Act 2017. The whole GST stack is live before your first Zoho invoice leaves the building.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can you migrate a high-volume Nehru Place IT reseller without disrupting daily invoicing?</h3>
                        <div class="faq-expanded__a"><p>Yes. For Nehru Place hardware and IT resellers raising hundreds of invoices a week, we agree a cut-off date, migrate masters and opening balances first, and configure Zoho Books in parallel with your live Tally. You keep billing in Tally until go-live day, then switch over once the trial balance ties out cleanly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How do you handle inventory for an Okhla or Mayapuri manufacturer moving to Zoho?</h3>
                        <div class="faq-expanded__a"><p>For Okhla and Mayapuri production units we carry item masters, opening stock quantities and values, and tax mappings into Zoho Books or Zoho Inventory. Every stock summary is matched against the Tally closing position item by item, so valuation continues without a break and your factory accounting stays intact after the cut-off date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can you migrate a Karol Bagh trading house that runs several GSTINs?</h3>
                        <div class="faq-expanded__a"><p>Yes. Karol Bagh and Connaught Place trading houses often hold multiple GSTINs across branches. We map each registration to its own Zoho Books organisation or branch, carry opening balances separately, and reconcile every GSTIN against its Tally figures so consolidated and branch-level reports both stand up after migration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do I lose my Tally history after migrating to Zoho Books?</h3>
                        <div class="faq-expanded__a"><p>No. Your original Tally company file is left untouched and retained for the 6-year period under Rule 6F(5) of the Income Tax Rules. You decide how much history enters Zoho Books, ranging from opening balances alone to several years of invoices, bills, and journals rebuilt in the correct import sequence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Should a Delhi business pick Zoho Books or the full Zoho One suite?</h3>
                        <div class="faq-expanded__a"><p>Zoho Books on its own fits firms that only want accounting, Delhi GST, and bank feeds. A Connaught Place office already running Zoho CRM or Zoho People usually gains from Zoho One, where Books, Inventory, Expense, and Payroll sit on one shared ledger. Patron weighs the fit with you during scoping before any licence is bought.</p></div>
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
                <p><strong>Cheapest way to migrate?</strong> Bring only opening balances and the current year first, then pull older history across later if a report genuinely calls for it.</p>
                <p><strong>Will my reports still reconcile?</strong> Yes, because the Tally chart of accounts is mapped to Zoho Books on purpose and the trial balance is verified to tie out before go-live.</p>
                <p><strong>Can it be done remotely?</strong> Yes. Most Delhi migrations run fully online; an on-site review is available for Okhla and Mayapuri manufacturers with physical stock records.</p>
                <p><strong>What do I get at the end?</strong> A live, Delhi GST-ready Zoho Books file, reconciled bank feeds, a verified trial balance, and a trained team.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 19: CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" id="conclusion-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Move Your Delhi Books to Zoho the Right Way</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">A migration that cuts corners on mapping or opening-balance checks costs far more to repair than to do properly once. Whether you run an IT reseller in Nehru Place, a fabrication unit in Okhla or Mayapuri, or a trading house in Karol Bagh, Patron Accounting's CA-supervised service lifts your Tally data into Zoho Books, configures Delhi GST and bank feeds, and proves the trial balance ties out from INR 9,999.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Explore the national <a href="/migration-from-tally-to-zoho" style="color:#fff;text-decoration:underline;">Migration from Tally to Zoho</a> page, then carry on with <a href="/zoho-books-accounting" style="color:#fff;text-decoration:underline;">Zoho Books Accounting</a> once you are live. Patron Accounting LLP serves 10,000+ businesses with a 4.9 Google rating.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20migrate%20from%20Tally%20to%20Zoho%20Books%20in%20Delhi.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Tally%20to%20Zoho%20Migration%20in%20Delhi&body=Hello%20Patron%20Team%2C%0A%0AI%20want%20to%20migrate%20from%20Tally%20to%20Zoho%20Books%20in%20Delhi.%0A%0APlease%20contact%20me.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY INTERLINKING (CURRENT CITY = DELHI, NOT LINKED) -->
<section class="content-section" id="city-links-section">
    <div class="content-container">
        <div class="pa-city-block">
            <div class="pa-block-title">Tally to Zoho Migration by City</div>
            <div class="pa-block-sub">Available across our four office cities. You are viewing the Delhi page.</div>
            <div class="pa-city-grid">
                <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div>
                    <span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span>
                </div>
                <a href="/migration-from-tally-to-zoho/mumbai" class="pa-city-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                </a>
                <a href="/migration-from-tally-to-zoho/pune" class="pa-city-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                </a>
                <a href="/migration-from-tally-to-zoho/gurugram" class="pa-city-card">
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
            <p style="margin-bottom:0;">Reviewed by CA and CS Team, Patron Accounting LLP. Review Triggers: changes to Zoho Books GST features, e-invoicing thresholds, or Patron Accounting fees.</p>
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
