
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
    <title>Tally to Odoo Migration Pune 2026 | Patron Accounting</title>
    <meta name="description" content="Tally to Odoo ERP migration in Pune from INR 9,999. CA-led chart mapping, l10n_in GST setup, Inventory and Sales modules, and trial balance reconciliation.">
    <link rel="canonical" href="/migration-from-tally-to-odoo/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Tally to Odoo Migration Pune 2026 | Patron Accounting">
    <meta property="og:description" content="Tally to Odoo ERP migration in Pune from INR 9,999. CA-led chart mapping, l10n_in GST setup, Inventory and Sales modules, and trial balance reconciliation.">
    <meta property="og:url" content="/migration-from-tally-to-odoo/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/migration-from-tally-to-odoo/pune-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tally to Odoo Migration Pune 2026 | Patron Accounting">
    <meta name="twitter:description" content="Tally to Odoo ERP migration in Pune from INR 9,999. CA-led chart mapping, l10n_in GST setup, Inventory and Sales modules, and trial balance reconciliation.">
    <meta name="twitter:image" content="/images/migration-from-tally-to-odoo/pune-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/migration-from-tally-to-odoo/pune#breadcrumb",
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
          "name": "Tally to Odoo Migration",
          "item": "/migration-from-tally-to-odoo"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Tally to Odoo Migration in Pune",
          "item": "/migration-from-tally-to-odoo/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/migration-from-tally-to-odoo/pune#faq",
      "datePublished": "2026-06-23T08:00:00+05:30",
      "dateModified": "2026-06-23T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What does Tally to Odoo migration involve for a Pune business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It is the planned move of your books from Tally into the Odoo ERP. For Pune firms it covers chart of accounts mapping to Odoo's Schedule III template, opening balances, customer, vendor, and product masters, historical data, l10n_in GST configuration, the Accounting, Inventory, and Sales modules, and trial balance reconciliation before go-live."
          }
        },
        {
          "@type": "Question",
          "name": "How much does Tally to Odoo migration cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Accounting charges Starting from INR 9,999 (Exl GST and Govt. Charges). The final fee depends on years of data, transaction volume, GSTINs, and which Odoo modules you activate, such as Inventory or Manufacturing. A Hinjewadi SaaS team and a Chakan auto-ancillary unit each get a fixed-scope quote first."
          }
        },
        {
          "@type": "Question",
          "name": "How does Odoo handle GST after migrating from Tally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Odoo manages GST through its Indian fiscal localization, l10n_in. Patron sets up your GSTIN, HSN and SAC codes, and fiscal positions for intra-state and inter-state supply so CGST, SGST, and IGST compute automatically under the CGST Act 2017. We also enable GSTR-1 and GSTR-3B reports for your Pune entity."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a Tally to Odoo migration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most Pune migrations run 2 to 4 weeks because Odoo is a full ERP, not just ledgers. A single-company Hinjewadi services file with the Accounting app alone can be live in 10 to 12 days. A Chakan manufacturer adding Inventory and Manufacturing, with multiple GSTINs, sits at the longer end."
          }
        },
        {
          "@type": "Question",
          "name": "Should we use Odoo Community or Enterprise after migration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on the workflow. Odoo Community covers the base l10n_in chart and GST tax determination, while Enterprise adds e-invoicing, GSTR JSON generation, and advanced bank reconciliation. Patron advises Pune clients on the right edition during scoping so you do not pay for modules a Hinjewadi or Magarpatta team will not use."
          }
        },
        {
          "@type": "Question",
          "name": "How do Tally ledgers, vouchers, and cost centres map into Odoo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In Odoo, a Tally ledger becomes an Account, a Tally group becomes an Account Type, a voucher becomes a Journal Entry, and a cost centre becomes an Analytic Account. Patron documents this mapping for every head before import so a Pune company's reporting structure carries across cleanly into Odoo."
          }
        },
        {
          "@type": "Question",
          "name": "How is migration accuracy verified for a Pune company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron reconciles the Odoo trial balance, profit and loss, and balance sheet against the same Tally reports, then sample-tests ledgers, stock valuation, and GST figures. A Chartered Accountant signs off only when Odoo agrees with Tally for the migrated period, so your Pune books are audit-ready from day one."
          }
        },
        {
          "@type": "Question",
          "name": "Do you train our Pune team on the Odoo modules after go-live?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. After reconciliation, Patron runs a handover covering invoicing in Accounting, stock moves in Inventory, quotations in Sales, and GST reports for your Pune finance and operations teams. We share a reference guide per module and stay available so the shift from Tally to a full ERP feels manageable."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/migration-from-tally-to-odoo/pune#service",
      "name": "Tally to Odoo Migration in Pune",
      "description": "Tally to Odoo ERP migration in Pune covering chart of accounts mapping to the Schedule III template, opening balances, customer, vendor, and product masters, historical data, l10n_in GST configuration, the Accounting, Inventory, and Sales modules, and trial balance reconciliation. Patron Accounting delivers CA-verified, audit-ready Odoo databases for Hinjewadi, Magarpatta, and Chakan businesses.",
      "serviceType": "Tally to Odoo ERP Data Migration",
      "url": "/migration-from-tally-to-odoo/pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
      },
      "provider": {
        "@id": "/#localbusiness-pune"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Odoo",
          "sameAs": "https://en.wikipedia.org/wiki/Odoo"
        },
        {
          "@type": "Thing",
          "name": "Goods and Services Tax (India)",
          "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Tally to Odoo Migration Plans in Pune",
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
              "name": "Tally to Odoo ERP Migration"
            }
          }
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "/#localbusiness-pune",
      "name": "Patron Accounting LLP - Pune",
      "image": "/images/site-logo.svg",
      "url": "/migration-from-tally-to-odoo/pune",
      "telephone": "+91-9699936369",
      "priceRange": "INR",
      "areaServed": {
        "@type": "City",
        "name": "Pune"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Pune",
        "addressRegion": "Maharashtra",
        "postalCode": "411014",
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
                        Tally to Odoo Migration in Pune
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI and ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 June 2026</span></span>
                        </span>
                        <a href="/migration-from-tally-to-odoo" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scope:</span> Chart mapping, opening balances, masters, historical data, l10n_in GST, Odoo modules, trial balance reconciliation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 9,999 (Exl GST and Govt. Charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Pune SMEs, Hinjewadi SaaS firms, Chakan manufacturers, and MIDC traders adopting the Odoo ERP</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 2 to 4 weeks for most ERP migrations, depending on modules and years</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Tally%20to%20Odoo%20migration%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Tally to Odoo Migration'/>
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
                                <option value="migration-from-tally-to-odoo/pune" selected>Tally to Odoo Migration in Pune</option>
                                <option value="odoo-accounting/pune">Odoo Accounting in Pune</option>
                                <option value="tally-accounting/pune">Tally Accounting in Pune</option>
                                <option value="accounting-services/pune">Accounting Services in Pune</option>
                                <option value="gst-returns/pune">GST Return Filing in Pune</option>
                                <option value="backlog-bookkeeping-catch-up-services/pune">Backlog Bookkeeping in Pune</option>
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
            <div class="stat-content"><span class="stat-value">2,000+</span><span class="stat-label">Migrations Delivered</span><span class="stat-desc">Tally, Zoho, QuickBooks, and Odoo files moved accurately.</span></div>
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">What We Migrate</a>
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
            <h2 class="section-title">Tally to Odoo Migration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Tally to Odoo Migration in Pune at a Glance</strong></p>
                    <p>Tally to Odoo migration in Pune moves your books into a full ERP, not just a ledger tool. Patron Accounting maps your chart to Odoo's Schedule III template, carries opening balances and masters, brings historical data across, configures GST through l10n_in, sets up the Accounting, Inventory, and Sales modules, and reconciles the trial balance against Tally. Fees start from INR 9,999. Serving Hinjewadi, Magarpatta, Chakan, and the MIDC belts.</p>
                </div>

                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Quick Reference</th><th>Details for Pune Businesses</th></tr></thead>
                    <tbody>
                        <tr><td>What Moves</td><td>Chart of accounts, opening balances, partner and product masters, historical data, GST config, module setup</td></tr>
                        <tr><td>Applicable To</td><td>Pune SMEs, Hinjewadi SaaS teams, Chakan manufacturers, and MIDC traders adopting Odoo ERP</td></tr>
                        <tr><td>Starting Price</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Timeline</td><td>2 to 4 weeks for most ERP migrations</td></tr>
                        <tr><td>Accuracy Check</td><td>Trial balance, P&L, balance sheet, and stock valuation reconciled Odoo vs Tally</td></tr>
                        <tr><td>GST Compliance</td><td>l10n_in localization with GSTIN, HSN/SAC, and fiscal positions under the CGST Act 2017</td></tr>
                        <tr><td>Local Authority</td><td>GST Commissionerate Pune; RoC Pune (MCA)</td></tr>
                    </tbody>
                </table>
                </div>

                <p>Across Pune, the move from Tally to Odoo is usually about outgrowing a ledger tool and wanting a connected ERP. A funded SaaS team in Hinjewadi or Magarpatta wants Accounting, Sales, and project workflows in one database with role-based access. An auto-component maker in Chakan or the MIDC belts at Bhosari and Talegaon wants Inventory, Manufacturing, and accounts talking to each other rather than re-keying figures. The challenge is moving years of ledgers into that ERP without losing the audit trail. Learn more about our national <a href="/migration-from-tally-to-odoo">Tally to Odoo Migration</a> service.</p>
                <p>Patron Accounting's Pune CA team runs the migration end to end, mapping every Tally ledger to an Odoo account, configuring l10n_in for GST, importing partner and product masters, and reconciling the trial balance before go-live. To keep books running in the new ERP, see our <a href="/accounting-services">Accounting Services</a>. This page is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Tally to Odoo Migration?</h2>
                <div class="content-text what-is-definition">
                    <p>Tally to Odoo migration is the planned transfer of your accounting and operational data from Tally into the Odoo ERP, so the new system carries the same chart, balances, masters, and history while adding connected modules such as Inventory, Sales, and Purchase.</p>
                    <p>For an IT-SaaS firm in Hinjewadi, this means mapping income and expense ledgers onto Odoo's Schedule III chart, importing partners and products, and rebuilding invoices and gateway settlements with the right GST treatment through l10n_in. For a manufacturer in Chakan or the MIDC industrial belts, it adds Inventory and Manufacturing, carrying product masters, bills of material, and opening stock, then matching the closing trial balance to Tally before go-live.</p>
                    <p>An ERP migration is more than copying ledgers. It pairs with cleanup so duplicate accounts, misclassified groups, and stale balances do not follow you into Odoo. For software-specific help, see <a href="/odoo-accounting/pune">Odoo Accounting in Pune</a> and <a href="/tally-accounting/pune">Tally Accounting in Pune</a>.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Tally to Odoo Migration in Pune:</strong></p>
                    <p><strong>Chart of Accounts Mapping:</strong> Matching every Tally ledger and group to an Odoo Account and Account Type on the Schedule III template.</p>
                    <p><strong>l10n_in Localization:</strong> Odoo's Indian fiscal module that drives GST tax determination, fiscal positions, and GSTR reports.</p>
                    <p><strong>Masters:</strong> Customer, vendor (partner), and product lists imported so quotations, invoices, and stock work from day one.</p>
                    <p><strong>Modules:</strong> Accounting, Inventory, Sales, and Purchase apps activated and linked to your migrated data.</p>
                    <p><strong>Trial Balance Reconciliation:</strong> Confirming Odoo debits, credits, and stock valuation match Tally for the migrated period before sign-off.</p>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="20" y="55" width="60" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <text x="50" y="95" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Tally</text>
                            <rect x="120" y="55" width="60" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <text x="150" y="95" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Odoo</text>
                            <path d="M85 90h30" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/>
                            <path d="M108 83l9 7-9 7" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="150" cy="45" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M142 45l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="160" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Migrated, Reconciled, Live</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pune ERP Migration</span>
                        <strong>Chart | Modules | GST</strong>
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
            <h2 class="section-title">Who Needs Tally to Odoo Migration in Pune?</h2>
            <div class="content-text">
                <p>Pune businesses that have outgrown a standalone ledger and want accounting, stock, and sales to run in one ERP are the ones who benefit most from a planned Odoo migration.</p>
                <ul>
                    <li><strong>IT and SaaS Startups (Hinjewadi/Magarpatta)</strong> - Want Accounting, Sales, and project apps in one Odoo database with role-based access for founders, finance, and a remote team.</li>
                    <li><strong>Auto-Ancillary Manufacturers (Chakan/Talegaon/MIDC)</strong> - Need Inventory and Manufacturing linked to accounts, with BOMs, product masters, and opening stock carried across.</li>
                    <li><strong>Distributors and Traders (Bhosari/Pimpri)</strong> - High order volumes that want Sales, Purchase, and Inventory connected instead of separate spreadsheets.</li>
                    <li><strong>Multi-Entity Pune Groups</strong> - Several companies or branches that prefer one Odoo platform with consolidated reporting.</li>
                    <li><strong>Businesses Hitting Tally's Complexity Ceiling</strong> - Outgrown Tally but not large enough for SAP or Oracle, so Odoo fits the middle.</li>
                    <li><strong>Firms Wanting Workflow Automation</strong> - Approvals, e-invoicing, and e-Way Bills handled inside the ERP rather than across tools.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What We Migrate from Tally to Odoo in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Migration Component</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Chart of Accounts Mapping</td><td>Map each Tally ledger to an Odoo Account and group to an Account Type on the Schedule III template, merging duplicates as we go.</td></tr>
                        <tr><td>Opening Balances</td><td>Post account, bank, and partner balances at the cut-off date through a labelled opening journal entry in Odoo.</td></tr>
                        <tr><td>Partner Masters</td><td>Import customers and vendors with GSTIN, addresses, and payment terms so quotations and bills work immediately.</td></tr>
                        <tr><td>Product and Stock Masters</td><td>Import products, HSN/SAC codes, BOMs, and opening stock into the Inventory and Manufacturing apps.</td></tr>
                        <tr><td>Historical Data</td><td>Bring past invoices, bills, and payments across so reports, partner ledgers, and ageing stay intact.</td></tr>
                        <tr><td>GST and Module Setup</td><td>Configure l10n_in with GSTIN, HSN/SAC, and fiscal positions, then activate Accounting, Inventory, and Sales and verify the trial balance against Tally.</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Need ongoing returns and books afterwards? See <a href="/gst-returns">GST Return Filing</a> and <a href="/accounting-services">Accounting Services</a> across India.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: PROCESS STEPS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Tally to Odoo Migration Works in Pune: 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A CA-supervised ERP migration methodology for Pune businesses, from data assessment to a reconciled, live Odoo database.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assessment and Module Scoping</h3><p class="step-description">Patron's CA reviews your Tally data, the number of years, GSTINs, and which Odoo modules you actually need, then agrees a cut-off date. We confirm Community or Enterprise, list the reports and exports required, and issue a fixed-scope quote before work starts.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Modules Scoped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fixed Quote</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M45 35v14M38 42h14" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="70" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="70" y1="42" x2="90" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Scoped</span><span class="step-number-large">01</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Export, Cleanup, and Chart Mapping</h3><p class="step-description">We export ledgers, masters, and reports from Tally, clean duplicates and misclassified groups, and map each ledger to an Odoo Account and Account Type. For Hinjewadi service firms, analytic accounts replace Tally cost centres before import.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Chart Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cleaned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="25" width="64" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="28" y="38" width="48" height="8" rx="2" fill="#14365F" opacity="0.15"/><rect x="28" y="51" width="56" height="8" rx="2" fill="#14365F" opacity="0.15"/><circle cx="92" cy="62" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M87 62l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Mapped</span><span class="step-number-large">02</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Masters and Opening Balances Import</h3><p class="step-description">Partner and product masters are imported into Odoo with GSTIN, HSN/SAC, and payment terms. Opening account, bank, partner, and stock balances are posted at the cut-off date through a clearly labelled opening journal entry for easy audit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Masters Loaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Balances Posted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="32" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Tally</text><rect x="65" y="20" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="87" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Odoo</text><path d="M55 47h10" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/><path d="M60 42l5 5-5 5" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Imported</span><span class="step-number-large">03</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Historical Data, l10n_in GST, and Modules</h3><p class="step-description">Past invoices, bills, and payments are loaded in date order so reports and ageing stay intact. We configure l10n_in with your GSTIN, HSN/SAC, and fiscal positions so CGST, SGST, and IGST compute correctly under the CGST Act 2017, and activate the Inventory and Sales modules.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Loaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST Configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="55" width="12" height="15" rx="2" fill="#E8712C" opacity="0.6"/><rect x="42" y="40" width="12" height="30" rx="2" fill="#14365F" opacity="0.4"/><rect x="59" y="30" width="12" height="40" rx="2" fill="#E8712C" opacity="0.6"/><rect x="76" y="25" width="12" height="45" rx="2" fill="#14365F" opacity="0.4"/></svg></div><span class="illustration-label">Loaded</span><span class="step-number-large">04</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Reconciliation and Parallel Run</h3><p class="step-description">We reconcile the Odoo trial balance, P&L, balance sheet, and stock valuation against Tally, then run the two systems in parallel for a short window. Any difference is traced and fixed so Odoo agrees with Tally for the migrated period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TB Matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Parallel Run</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="16" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M60 32v8l5 4" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">05</span></div></div></div>

            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Go-Live, Sign-Off, and Training</h3><p class="step-description">A CA signs off the migrated database, we set up bank feeds and user roles, and your Odoo goes live. Patron trains your Pune team across the Accounting, Inventory, and Sales modules and shares a per-module reference guide so everyone is confident from day one.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Signed Off</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Team Trained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 37l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="72" width="50" height="12" rx="6" fill="#F5A623" opacity="0.3"/><text x="60" y="81" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LIVE</text></svg></div><span class="illustration-label">Live</span><span class="step-number-large">06</span></div></div></div>
        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Tally to Odoo Migration in Pune</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Tally Data File or Backup</strong> - The company data for every year to be migrated</li>
                    <li><strong>Trial Balance and Financials</strong> - As at the migration cut-off date, to anchor reconciliation</li>
                    <li><strong>Chart of Accounts / Ledger List</strong> - Exported from Tally for mapping to the Schedule III template</li>
                    <li><strong>Partner Masters</strong> - Customers and vendors with GSTIN, addresses, and payment terms</li>
                    <li><strong>Product, Stock, and BOM Masters</strong> - Products, services, HSN/SAC, opening stock, and bills of material</li>
                    <li><strong>Bank and Credit Card Statements</strong> - For balance verification and bank feed setup</li>
                    <li><strong>GST Registration Certificate</strong> - GSTIN for each registration</li>
                    <li><strong>Open Invoices and Bills</strong> - For AR and AP ageing at the cut-off</li>
                    <li><strong>PTRC and PTEC Details</strong> - Maharashtra Professional Tax registration, if applicable</li>
                    <li><strong>Odoo Instance Access</strong> - Existing Community or Enterprise database, or we advise on the right edition and hosting</li>
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
                        <tr><td>Tally and Odoo structures differ</td><td>Map ledger to Account, group to Account Type, voucher to Journal Entry, and cost centre to Analytic Account before any import.</td></tr>
                        <tr><td>Stock valuation does not tie out</td><td>Import product masters, BOMs, and opening stock into Inventory, then reconcile stock valuation against Tally for Chakan and MIDC units.</td></tr>
                        <tr><td>GST breaks under a new tax engine</td><td>Configure l10n_in fiscal positions and HSN/SAC so CGST, SGST, and IGST compute automatically, with GSTR-1 and GSTR-3B enabled.</td></tr>
                        <tr><td>Teams overwhelmed by a full ERP</td><td>Scope only the modules you need, run Tally and Odoo in parallel, and train each Pune team on its own app before go-live.</td></tr>
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
            <h2 class="section-title">Tally to Odoo Migration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Additional Years of History</td><td>Quoted per extra financial year migrated, based on transaction volume</td></tr>
                        <tr><td>Inventory and Manufacturing Modules</td><td>Quoted separately where product masters, BOMs, and opening stock are involved</td></tr>
                        <tr><td>Odoo Licensing and Hosting</td><td>Charged separately by Odoo or your hosting partner for Enterprise users</td></tr>
                        <tr><td>Post-Migration Training</td><td>One per-module handover included; further sessions quoted on request</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box">
                    <p>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Odoo Enterprise licensing and any hosting are billed directly by Odoo or your hosting partner and are separate from Patron's professional fees.</p>
                </div>

                <div class="reviews-cta">
                    <div class="reviews-cta-content">
                        <div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                        <div class="reviews-cta-text">
                            <h3>Get a fixed-scope Odoo migration quote for your Pune business</h3>
                            <p>Share your Tally years and the modules you need and we respond within 2 hours.</p>
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
            <h2 class="section-title">How Long Tally to Odoo Migration Takes in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Migration Size</th><th>Typical Turnaround</th></tr></thead>
                    <tbody>
                        <tr><td>Accounting app only, current year</td><td>10 to 12 working days for a simple Pune services business</td></tr>
                        <tr><td>Accounting plus Sales and Purchase</td><td>2 to 3 weeks for most Pune SMEs with partner masters</td></tr>
                        <tr><td>Adding Inventory, 2 to 3 years</td><td>3 to 4 weeks for traders and distributors with stock</td></tr>
                        <tr><td>Inventory plus Manufacturing</td><td>4 weeks or more for Chakan and MIDC units with BOMs and multiple GSTINs</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Turnaround depends on how many modules you switch on, how clean the Tally data is, and how fast access is shared. Hinjewadi service firms on the Accounting app alone go live fastest; manufacturers reconstructing stock and BOMs take longest.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div class="why-choose-header">
            <h2 class="section-title" style="text-align:center;">Why Choose Patron for Tally to Odoo Migration in Pune</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                <h3 class="feature-title">CA-Verified Reconciliation</h3>
                <p class="feature-text">The migrated database is signed off only after the Odoo trial balance, P&L, balance sheet, and stock valuation match Tally, so your books stand up to audit and notices.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/></svg></div>
                <h3 class="feature-title">l10n_in GST Compliant</h3>
                <p class="feature-text">We configure Odoo's Indian localization with GSTIN, HSN/SAC, and fiscal positions, with GSTR-1 and GSTR-3B reports under the CGST Act 2017.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                <h3 class="feature-title">Full ERP, No History Lost</h3>
                <p class="feature-text">Chart, masters, balances, and history come across while Accounting, Inventory, and Sales are set up to work together from day one.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <h3 class="feature-title">Fixed-Scope Pricing</h3>
                <p class="feature-text">A clear quote from INR 9,999 before work starts, with module add-ons priced upfront so there are no surprises mid-project.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
                <h3 class="feature-title">Local Pune Knowledge</h3>
                <p class="feature-text">Familiar with GST Commissionerate Pune practice and RoC Pune timelines, and with the sectors driving Hinjewadi, Magarpatta, Chakan, and Talegaon.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg></div>
                <h3 class="feature-title">Per-Module Training</h3>
                <p class="feature-text">A go-live handover across Accounting, Inventory, and Sales, plus ongoing support so each Pune team runs its Odoo app with confidence.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON TABLE -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Migration vs Patron Professional Migration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron Professional</th><th>DIY Migration</th></tr></thead>
                    <tbody>
                        <tr><td>Chart and module mapping</td><td>Documented, CA-reviewed mapping and scoping</td><td>Ad-hoc; entries and modules misconfigured</td></tr>
                        <tr><td>Trial balance and stock reconciliation</td><td>Odoo matched to Tally, signed off</td><td>Often unbalanced; stock valuation off</td></tr>
                        <tr><td>l10n_in GST configuration</td><td>Fiscal positions, HSN/SAC, GSTR set and tested</td><td>Frequently misconfigured; ITC at risk</td></tr>
                        <tr><td>Historical data</td><td>Loaded by year; ageing intact</td><td>Skipped; reports and history lost</td></tr>
                        <tr><td>Team adoption</td><td>Per-module training and parallel run</td><td>Staff struggle; ERP underused</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Weighing alternatives or staying on Tally for now? See <a href="/tally-accounting/pune">Tally Accounting in Pune</a> and our national <a href="/accounting-services">Accounting Services</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED / PARTNER SERVICES -->
<section class="content-section" id="related-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services</h2>
            <p class="pa-block-sub">Start with the national migration service, then explore complementary services across India.</p>
            <ul>
                <li><a href="/migration-from-tally-to-odoo">Tally to Odoo Migration in India</a> - the national parent service</li>
                <li><a href="/accounting-services">Accounting Services</a> - ongoing monthly bookkeeping in Odoo</li>
                <li><a href="/gst-returns">GST Return Filing</a> - file GSTR-1 and GSTR-3B from your new Odoo data</li>
                <li><a href="/income-tax-return">Income Tax Return Filing</a> - file accurate ITRs on clean ERP books</li>
                <li><a href="/backlog-bookkeeping-catch-up-services">Backlog Bookkeeping and Catch-Up</a> - clear any backlog before migrating</li>
                <li><a href="/statutory-audit">Statutory Audit</a> - audit-ready handover for companies</li>
            </ul>

            <h3 style="margin-top:32px;margin-bottom:8px;">More Services in Pune</h3>
            <div class="pa-cross-grid" style="margin-top:12px;">
                <a href="/odoo-accounting/pune" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                    <div><div class="pa-card-title">Odoo Accounting</div><div class="pa-card-sub">Pune</div></div>
                </a>
                <a href="/accounting-services/pune" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                    <div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div>
                </a>
                <a href="/tally-accounting/pune" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18"/></svg></div>
                    <div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">Pune</div></div>
                </a>
                <a href="/gst-returns/pune" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 7h8M8 11h8M8 15h5"/></svg></div>
                    <div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Pune</div></div>
                </a>
                <a href="/income-tax-return/pune" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                    <div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div>
                </a>
                <a href="/backlog-bookkeeping-catch-up-services/pune" class="pa-cross-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                    <div><div class="pa-card-title">Backlog Bookkeeping</div><div class="pa-card-sub">Pune</div></div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Compliance Framework for Migration in India</h2>
            <div class="content-text">
                <p><strong>CGST Act 2017, Sections 31 and 16:</strong> Tax invoices must carry GSTIN, HSN/SAC, and correct tax, and input tax credit depends on matching with supplier data. Patron sets up Odoo's l10n_in so invoices and ITC stay compliant after migration.</p>
                <p><strong>Records Retention, Rule 6F(5) and Section 36 CGST:</strong> Books and GST records must be retained for 6 years, so migrated history is preserved in Odoo, with Tally kept as a read-only archive of the full detail.</p>
                <p><strong>Companies Act 2013, Section 128:</strong> Every company must keep proper books of account; the ERP switch must not break the audit trail. For Pune companies, filings route through <strong>RoC Pune</strong> under the MCA.</p>
                <p><strong>Odoo India Localization:</strong> The l10n_in module set drives GST tax determination, GSTR-1, and GSTR-3B; Enterprise adds e-invoicing and e-Way Bill generation through the NIC portals.</p>
                <p><strong>Maharashtra Professional Tax:</strong> PTRC and PTEC obligations continue regardless of ERP; payroll and tax settings are carried into Odoo.</p>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: Tally to Odoo Migration in Pune</h2>
                    <p class="faq-expanded__lead">Real questions from Pune founders and finance teams about moving from Tally to the Odoo ERP.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune', 'enquiryService' => 'Tally to Odoo Migration in Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What does Tally to Odoo migration involve for a Pune business?</h3>
                        <div class="faq-expanded__a"><p>It is the planned move of your books from Tally into the Odoo ERP. For Pune firms it covers chart of accounts mapping to Odoo's Schedule III template, opening balances, customer, vendor, and product masters, historical data, l10n_in GST configuration, the Accounting, Inventory, and Sales modules, and trial balance reconciliation before go-live.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does Tally to Odoo migration cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting charges Starting from INR 9,999 (Exl GST and Govt. Charges). The final fee depends on years of data, transaction volume, GSTINs, and which Odoo modules you activate, such as Inventory or Manufacturing. A Hinjewadi SaaS team and a Chakan auto-ancillary unit each get a fixed-scope quote first.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does Odoo handle GST after migrating from Tally?</h3>
                        <div class="faq-expanded__a"><p>Odoo manages GST through its Indian fiscal localization, l10n_in. Patron sets up your GSTIN, HSN and SAC codes, and fiscal positions for intra-state and inter-state supply so CGST, SGST, and IGST compute automatically under the CGST Act 2017. We also enable GSTR-1 and GSTR-3B reports for your Pune entity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does a Tally to Odoo migration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Most Pune migrations run 2 to 4 weeks because Odoo is a full ERP, not just ledgers. A single-company Hinjewadi services file with the Accounting app alone can be live in 10 to 12 days. A Chakan manufacturer adding Inventory and Manufacturing, with multiple GSTINs, sits at the longer end.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Should we use Odoo Community or Enterprise after migration?</h3>
                        <div class="faq-expanded__a"><p>It depends on the workflow. Odoo Community covers the base l10n_in chart and GST tax determination, while Enterprise adds e-invoicing, GSTR JSON generation, and advanced bank reconciliation. Patron advises Pune clients on the right edition during scoping so you do not pay for modules a Hinjewadi or Magarpatta team will not use.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How do Tally ledgers, vouchers, and cost centres map into Odoo?</h3>
                        <div class="faq-expanded__a"><p>In Odoo, a Tally ledger becomes an Account, a Tally group becomes an Account Type, a voucher becomes a Journal Entry, and a cost centre becomes an Analytic Account. Patron documents this mapping for every head before import so a Pune company's reporting structure carries across cleanly into Odoo.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is migration accuracy verified for a Pune company?</h3>
                        <div class="faq-expanded__a"><p>Patron reconciles the Odoo trial balance, profit and loss, and balance sheet against the same Tally reports, then sample-tests ledgers, stock valuation, and GST figures. A Chartered Accountant signs off only when Odoo agrees with Tally for the migrated period, so your Pune books are audit-ready from day one.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do you train our Pune team on the Odoo modules after go-live?</h3>
                        <div class="faq-expanded__a"><p>Yes. After reconciliation, Patron runs a handover covering invoicing in Accounting, stock moves in Inventory, quotations in Sales, and GST reports for your Pune finance and operations teams. We share a reference guide per module and stay available so the shift from Tally to a full ERP feels manageable.</p></div>
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
                <p><strong>Cheapest way to migrate?</strong> Start with the Accounting app and current-year balances, then add Inventory or prior years only when you need them; this keeps the first phase tight.</p>
                <p><strong>Will I lose my GST history?</strong> No. l10n_in is configured and migrated purchases are reconciled so input tax credit continues without a gap.</p>
                <p><strong>Can it be done remotely?</strong> Yes. Most Pune migrations run online; an on-site review is offered for Chakan and MIDC manufacturers with physical stock and BOM records.</p>
                <p><strong>What do I get at the end?</strong> A reconciled, live Odoo database with chart, masters, balances, history, and the chosen modules, plus per-module team training.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 19: CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" id="conclusion-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Move Your Pune Books to the Odoo ERP Without Losing History</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Stepping up from Tally to a full ERP should not cost you years of ledgers or break your GST trail. Whether you run a SaaS team in Hinjewadi, an auto-ancillary unit in Chakan or the MIDC belts, or a practice in Magarpatta, Patron Accounting's CA-supervised migration maps your chart, configures l10n_in, sets up the modules you need, and reconciles Odoo against Tally, from INR 9,999.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Explore the national <a href="/migration-from-tally-to-odoo" style="color:#fff;text-decoration:underline;">Tally to Odoo Migration</a> page, then continue with <a href="/accounting-services" style="color:#fff;text-decoration:underline;">Accounting Services</a> once you are live. Patron Accounting LLP serves 10,000+ businesses with a 4.9 Google rating.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Tally%20to%20Odoo%20migration%20in%20Pune.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Tally%20to%20Odoo%20Migration%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20Tally%20to%20Odoo%20migration%20in%20Pune.%0A%0APlease%20contact%20me.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY INTERLINKING (CURRENT CITY = PUNE, NOT LINKED) -->
<section class="content-section" id="city-links-section">
    <div class="content-container">
        <div class="pa-city-block">
            <div class="pa-block-title">Tally to Odoo Migration by City</div>
            <div class="pa-block-sub">Available across our four office cities. You are viewing the Pune page.</div>
            <div class="pa-city-grid">
                <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    <span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span>
                </div>
                <a href="/migration-from-tally-to-odoo/mumbai" class="pa-city-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                </a>
                <a href="/migration-from-tally-to-odoo/delhi" class="pa-city-card">
                    <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div>
                </a>
                <a href="/migration-from-tally-to-odoo/gurugram" class="pa-city-card">
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
            <p style="margin-bottom:0;">Reviewed by CA and CS Team, Patron Accounting LLP. Review Triggers: changes to Odoo India localization, GST invoice rules, or Patron Accounting fees.</p>
        </div>
    </div>
</section>

</main>

<script>
// ── Country Code Dropdown ──────────────────────────────────────
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

// ── Field Error Helpers ────────────────────────────────────────
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

// ── Phone Validation ──────────────────────────────────────────
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
