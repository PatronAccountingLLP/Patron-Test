@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Gurugram ESOP Advisory for Family-Owned SaaS Firms</title>
    <meta name="description" content="Cyber City family businesses retain enterprise-SaaS talent without losing family control, using ESOPs and sweat equity valued and filed from INR 24,999.">
    <meta name="keywords" content="ESOP Services for Family Business Gurugram, ESOP Services for Family Business in Gurugram, ESOP Services for Family Business services in Gurugram, ESOP services Gurugram, ESOP Services for Family Business cost Gurugram, ESOP Services for Family Business consultants Gurugram, CA firm for ESOP Services for Family Business Gurugram, ESOP advisory Gurugram">
    <link rel="canonical" href="/esop-services-for-family-business/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Gurugram ESOP Advisory for Family-Owned SaaS Firms | Patron Accounting">
    <meta property="og:description" content="Cyber City family businesses retain enterprise-SaaS talent without losing family control, using ESOPs and sweat equity valued and filed from INR 24,999.">
    <meta property="og:url" content="/esop-services-for-family-business/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gurugram ESOP Advisory for Family-Owned SaaS Firms | Patron Accounting">
    <meta name="twitter:description" content="Cyber City family businesses retain enterprise-SaaS talent without losing family control, using ESOPs and sweat equity valued and filed from INR 24,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/esop-services-for-family-business/gurugram#service",
      "name": "ESOP Services for Family Business",
      "description": "Patron Accounting structures equity for family businesses, using ESOPs under Section 62 to retain non-family executives and sweat equity under Section 54 for family members, with dilution and control modelling, valuation and full compliance, so ownership stays in the family while management is professionalised, across India.",
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-services-for-family-business"
      },
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "sameAs": "https://en.wikipedia.org/wiki/Gurugram"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Family business",
          "sameAs": "https://en.wikipedia.org/wiki/Family_business"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "ESOP for Family Business Service Plans",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Family-Business ESOP and Sweat Equity Structuring"
            },
            "price": "24999",
            "priceCurrency": "INR",
            "description": "Design and structuring of the hybrid ESOP and sweat-equity plan. Starting price, exclusive of GST and government charges; implementation and valuation scoped to the plan."
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/esop-services-for-family-business/gurugram#breadcrumb",
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
          "name": "ESOP Services",
          "item": "https://www.patronaccounting.com/esop-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESOP Services in Gurugram",
          "item": "https://www.patronaccounting.com/esop-services/gurugram"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "ESOP for Family Business",
          "item": "https://www.patronaccounting.com/esop-services-for-family-business/gurugram"
        }
      ]
    },
    {
      "@type": "LocalBusiness",
      "additionalType": "https://schema.org/AccountingService",
      "@id": "https://www.patronaccounting.com/esop-services-for-family-business/gurugram#localbusiness",
      "name": "Patron Accounting LLP - ESOP Services For Family Business, Gurugram",
      "url": "https://www.patronaccounting.com/esop-services-for-family-business/gurugram",
      "telephone": "+91-9459456700",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Gurugram",
        "addressRegion": "Haryana",
        "addressCountry": "IN"
      },
      "parentOrganization": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/esop-services-for-family-business/gurugram#faq",
      "datePublished": "2026-06-24T08:00:00+05:30",
      "dateModified": "2026-06-24T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Does a Gurugram family business file ESOP grants with RoC Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Even though the company sits in Haryana, a Gurugram private limited files its ESOP special resolution and Form MGT-14 with the Registrar of Companies (RoC) Delhi, which has jurisdiction over Haryana. The fair market value for perquisite tax must come from a SEBI-registered Category-I merchant banker under Rule 11UA. We handle the RoC Delhi filings and coordinate the valuation so the grant is compliant from day one."
          }
        },
        {
          "@type": "Question",
          "name": "How do Cyber City and Udyog Vihar family firms retain non-family tech leaders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gurugram family firms running a SaaS or ITES business in Cyber City, Udyog Vihar or along Golf Course Road compete for product and engineering leaders against employers who all offer equity. An ESOP under Section 62(1)(b) gives that non-family CEO or CTO a stake in long-term value, which conserves cash and bridges the credibility gap while the next generation of the family grows into leadership."
          }
        },
        {
          "@type": "Question",
          "name": "What is the best way to give equity in a Gurugram family business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For Gurugram family businesses, a hybrid structure works best. The non-family executives in Cyber City or Udyog Vihar receive ESOPs for retention, while family members receive sweat equity, because promoters cannot normally hold ESOPs. This professionalises management and keeps ownership within the family, and even though the company is in Haryana, the grant is filed with RoC Delhi."
          }
        },
        {
          "@type": "Question",
          "name": "Will ESOPs dilute our family's control of the business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Options dilute ownership only when exercised, and the impact is controllable. For Gurugram family firms competing for Cyber City talent, we model the dilution and size the option pool so the family stays above the promoter holding it is comfortable with, while still offering equity that matches market. Sizing the pool deliberately, rather than granting ad hoc to each CXO, is how a family business keeps both retention power and control."
          }
        },
        {
          "@type": "Question",
          "name": "Should the next generation in a Gurugram family business get ESOPs or sweat equity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If the next-generation family members are promoters or part of the promoter group, they generally cannot receive ESOPs, so sweat equity under Section 54 is the route, recognising their contribution with real shares subject to a three-year lock-in. If they genuinely run a separate non-promoter venture, such as a new Sohna Road tech arm, an ESOP may be possible. We assess each person's status and recommend the right instrument."
          }
        },
        {
          "@type": "Question",
          "name": "We are a DPIIT-recognised Gurugram startup. Can promoters get ESOPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Possibly. The general promoter bar under Section 62 read with Rule 12 is relaxed for DPIIT-recognised startups for ten years from incorporation, so a founder-promoter in an eligible Gurugram startup can receive ESOPs during that window. Many Cyber City and Golf Course Road new-economy firms qualify. We confirm your DPIIT status and recognition date before deciding between ESOPs and sweat equity for the family."
          }
        },
        {
          "@type": "Question",
          "name": "Can a non-family CEO in Cyber City be granted ESOPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, certainly. A non-family CEO or CXO is not a promoter, so they can be granted ESOPs under Section 62(1)(b). For Gurugram family businesses, this is the best way to retain senior professional management in Cyber City's competitive talent market."
          }
        },
        {
          "@type": "Question",
          "name": "How much does a family-business equity plan cost in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Family-business ESOP structuring starts from Rs 24,999 plus GST for the design and structuring work. Implementing the scheme and issuing sweat equity to family members are scoped to the plan, while the merchant-banker valuation and RoC Delhi charges are billed at actuals. We give a clear, fixed-scope quote once we understand your family and management structure."
          }
        }
      ]
    }
  ]
}</script>

@endsection

@section('content')
<style>/* ============================================
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
@media (max-width: 768px) {.private-registration-heading { font-size: 32px !important; line-height: 110% !important; }}
@media (max-width: 480px) {.private-registration-heading { font-size: 28px !important; }}
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
/* Select */
.form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
/* Phone Group + Country Dropdown */
.phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
.selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
/* Country Dropdown List */
.country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
/* Phone Input Override */
.phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
/* Submit Button */
.btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
/* Form Footer */
.form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
/* Error States */
.form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
/* Success State */
.form-success { text-align: center; padding: 40px 20px; }
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
@media (max-width: 768px) {.pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
.pa-cross-grid { grid-template-columns: repeat(2, 1fr); }}
@media (max-width: 480px) {.pa-city-grid  { grid-template-columns: 1fr; }
.pa-cross-grid { grid-template-columns: 1fr; }}
/* Slick overrides */
/* Fixed uniform height so text + video cards always match (video area 298px + author = ~370px) */
/* Video Testimonial Card */
/* Quote Testimonial Card */
/* Loading state */
@keyframes spin { to { transform: rotate(360deg); } }
/* ============================================
           RESPONSIVE
           ============================================ */
@media (max-width: 1024px) {.two-column { grid-template-columns: 1fr; gap: 40px; }
.features-grid { grid-template-columns: repeat(2, 1fr); }
.stats-container { gap: 32px; }
.certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }}
@media (max-width: 900px) {.step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
.step-card:nth-child(even) { direction: ltr; }
.step-visual { order: -1; }}
@media (max-width: 768px) {.content-section { padding: 40px 16px; }
.hero-cta { flex-direction: column; }
.btn-video, .btn-sample { width: 100%; justify-content: center; }
.stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
.stat-item { width: 100%; }
.features-grid { grid-template-columns: 1fr; gap: 16px; }
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
section ul li:not(.nav-item) { font-size: 14px; }}
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
@media (max-width: 768px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }}
@media (max-width: 480px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }}
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
@media (max-width: 768px) {.wa-sticky-bar { padding: 8px 12px; gap: 8px; }
.wa-sticky-bar-text { font-size: 13px; }
.wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
.wa-sticky-bar-icon { width: 30px; height: 30px; }
.wa-sticky-bar-icon svg { width: 16px; height: 16px; }}
@media (max-width: 480px) {.wa-sticky-bar-text { display: none; }
.wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
.wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
.wa-sticky-bar-btn span { display: none; }}
#who-section ul li:not(.nav-item) > strong:first-child { flex: 0 0 300px; max-width: 300px; }
@media (max-width: 768px) {section ul li:not(.nav-item) { flex-wrap: wrap; }
#who-section ul li:not(.nav-item) > strong:first-child { flex-basis: 100%; max-width: 100%; }}</style>
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
                        ESOP Services for Family Business in Gurugram
                    </h1>

                    <p class="mb-4" style="font-size:17px;color:var(--text-secondary);line-height:1.6;">In the Cyber City and Udyog Vihar SaaS belt where unicorns like Zomato, Delhivery and Policybazaar set the equity benchmark, we help promoter families hold their non-family tech leaders with ESOPs and reward family with sweat equity, all filed at RoC Delhi.</p>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>For non-family executives:</span> ESOPs that retain senior talent through succession.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>For family members:</span> sweat equity, since promoters cannot normally hold ESOPs.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>The goal:</span> professionalise management without diluting family control unintentionally.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From INR 24,999 (Exl GST and Govt. Charges)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years advising family businesses</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for Family Business%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP for Family Business%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20we%20run%20a%20family%20business%20and%20want%20to%20structure%20equity%3A%20ESOPs%20for%20non-family%20executives%20and%20sweat%20equity%20for%20family%20members.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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


                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'ESOP for Family Business',
                                            'city'     => 'Gurugram',
                                        ])

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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Family businesses across generations trust Patron Accounting to retain key professionals with ESOPs and reward family with sweat equity, while keeping control intact.',
])

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
            
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">The Challenge</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Gets What</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">6 Steps</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">What We Need</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Why for Succession</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What This Service Covers</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP for Family Business Services at a Glance</strong></p>
                    <p>In a city where Zomato, Delhivery and Policybazaar made ESOP wealth visible, the non-family product and engineering leaders inside a Gurugram family firm now expect equity as a matter of course. We give them ESOPs to stay, give family members sweat equity (promoters cannot normally hold ESOPs), and file every grant at RoC Delhi, which holds jurisdiction over Haryana, so the family keeps ownership while management is professionalised.</p>
                </div>
                <p>Gurugram is an enterprise-SaaS and unicorn town first, a family-business town second, and that order matters. A promoter family running an ITES platform out of Udyog Vihar or a vertical-SaaS product from a Cyber City tower is not competing with the firm down the street for its CTO; it is competing with the same listed and venture-backed names whose option grants are common knowledge across DLF Cyber City. That is the equity gravity any family-business plan here has to answer.</p>
                <p>Patron Accounting builds the structure to that reality. We design ESOPs sized against what the unicorn and growth-stage employers along Golf Course Road and Sohna Road actually offer, route the family through <a href="/sweat-equity-services/gurugram">sweat equity under Section 54</a>, and model the dilution before anything is granted, so a single retention package for an enterprise-SaaS hire never quietly slips the founders below the holding they intend to keep.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">The Family Business Equity Challenge</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Picture the typical Gurugram version. A first-generation founder scaled a SaaS or ITES platform out of Udyog Vihar, the next generation is still a few years from running it, and the business now turns on a non-family CTO or VP of Engineering who could walk into a Policybazaar-scale fintech or a Cyber City unicorn the same week. A counter-offer of cash will not hold that person when every rival on the same road is paying partly in options. Retention here is an equity problem, not a salary one.</p>
                    <p>The second half of the puzzle sits inside the family. The founders want to keep ownership of what they built along the Golf Course Road and Sohna Road corridors, and they often want to recognise a son, daughter or sibling who already contributes IP or runs a division. But the Companies Act draws a hard line between the two groups: a non-family executive can be granted ESOPs under Section 62(1)(b), while a family member who is a promoter generally cannot. The right plan works with that line rather than against it.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP for Family Business:</strong></p>
                    <ul>
                        <li><strong>ESOP:</strong> options under Section 62(1)(b), for non-family executives.</li>
                        <li><strong>Sweat equity:</strong> shares under Section 54 for directors and promoters, the route for family.</li>
                        <li><strong>Promoter bar:</strong> promoters are excluded from ESOPs, except in DPIIT-recognised startups.</li>
                        <li><strong>Hybrid:</strong> ESOPs for non-family executives plus sweat equity for family members.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP for Family Business</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Structured under</span>
                        <strong>Section 62 and Section 54</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3B: GURUGRAM LOCAL MARKET -->
<section class="content-section" id="local-market-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Family-Business ESOPs in the Gurugram Market</h2>
            <div class="content-text">
                <p>Few Indian cities have a denser concentration of equity-paying employers than Gurugram. DLF Cyber City and Udyog Vihar host the SaaS and ITES anchors; Golf Course Road and the Sohna Road corridor carry the venture-backed startup cluster; and the headline names that came out of all this, Zomato, Delhivery, Policybazaar, turned employee stock into a household idea here long before the rest of the country caught up. A family business operating in that ecosystem inherits its expectations whether it likes them or not.</p>
                <p>The compliance backbone is specific to Haryana. A Gurugram private limited files its ESOP special resolution and Form MGT-14 with the Registrar of Companies (RoC) Delhi, which has jurisdiction over Haryana, and the perquisite-tax fair market value must be certified by a SEBI-registered Category-I merchant banker under <a href="/esop-valuation-services/gurugram">Rule 11UA</a>. For a DPIIT-recognised firm, and Gurugram has a large stock of them, the usual promoter bar on ESOPs is relaxed for ten years from incorporation, which can change the family's options entirely.</p>
                <p>So the benchmark we hold Gurugram family groups to is an enterprise-SaaS benchmark: build a vesting-based ESOP pool that stands up next to the unicorn and growth-stage offers your leaders see, model the dilution before any grant goes out, and lodge the resolution and MGT-14 with RoC Delhi on schedule so the cap table is clean and investor-ready if a funding round follows.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Gets What: The Hybrid Structure</h2>
            <div class="content-text">
                
                <p>Once a Gurugram family firm accepts that its enterprise-SaaS leaders expect equity, the design becomes a sorting exercise: every person who is to receive shares falls into one of two legal buckets, and the instrument follows from which bucket they sit in. Here is how the common Gurugram cases map:</p>
                <ul>
                    <li><strong>The non-family CTO or VP Engineering you hired against a unicorn:</strong> ESOP. Not a promoter, so options are open, and they are the only retention lever that competes with a Cyber City counter-offer.</li>
                    <li><strong>The senior product, data and commercial bench:</strong> ESOPs, vested over time to carry them through the generational handover.</li>
                    <li><strong>A founder, parent or sibling in the promoter group:</strong> sweat equity, because options are barred for promoters.</li>
                    <li><strong>A family member who wrote the core IP or domain know-how:</strong> sweat equity under Section 54, real shares against the value they added to the platform.</li>
                </ul>
                <p><strong>The deciding rule:</strong> Section 62 read with Rule 12 keeps ESOPs away from promoters and the promoter group, except inside a DPIIT-recognised startup, where the bar lifts for ten years from incorporation; Gurugram's startup base means this exception applies more often here than in most cities. Sweat equity under Section 54 is expressly open to directors and promoters. So the salaried SaaS professionals get options, and the family is usually routed through sweat equity, unless DPIIT status opens a door for a founder.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Family-Business ESOP Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Retention Design for the Professional Bench</td><td>We identify the non-family leaders a Gurugram SaaS or ITES family firm cannot afford to lose through the handover, and build an ESOP that ties them to long-term value rather than a cash bidding war on Golf Course Road.</td></tr>
                        <tr><td>ESOP Scheme for Non-Family Executives</td><td>We draft and roll out the scheme, board and shareholder resolutions, grant letters, vesting schedule and the SH-6 register.</td></tr>
                        <tr><td>Sweat Equity for Family Members</td><td>Where the family is to receive equity for the IP or know-how it contributed, we issue sweat equity under Section 54, with the registered-valuer price, 3-year lock-in and SH-3 register.</td></tr>
                        <tr><td>Ownership and Control Modelling</td><td>We model how each grant dilutes the family and size the plan so the promoter family keeps the holding it is comfortable with, aligned to its succession intentions.</td></tr>
                        <tr><td>Valuation and RoC Delhi Compliance</td><td>We arrange the valuations and, because a Haryana company files with the Registrar of Companies (RoC) Delhi, lodge the forms there and keep both the ESOP and sweat equity compliant.</td></tr>

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
            <h2 class="section-title">How We Structure It in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From a sit-down with the promoter family to ongoing upkeep, we build a hybrid that holds your Cyber City professional bench and keeps the family firmly in control.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Understand the family and the business</h3>
        <p class="step-description">We sit with the promoters to map who is family, who is hired professional, and what the next-generation handover looks like for a Gurugram firm.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Family vs professional</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Succession view</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="44" cy="36" r="9" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="76" cy="36" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 68 a14 11 0 0128 0z M62 68 a14 11 0 0128 0z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/></svg></div>
            <span class="illustration-label">Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Map recipients to instruments</h3>
        <p class="step-description">Options for the non-family Cyber City executives, sweat equity for the promoter family.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESOP non-family</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sweat equity family</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="38" cy="38" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="38" cy="66" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="74" y="30" width="20" height="16" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1.3"/><rect x="74" y="58" width="20" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><path d="M46 38 h24 M46 66 h24" stroke="#14365F" stroke-width="1.5" stroke-dasharray="3 3"/></svg></div>
            <span class="illustration-label">Instruments Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Model dilution and control</h3>
        <p class="step-description">We size the option pool and the sweat-equity issue so the promoter family stays above the holding it wants, even while matching market equity.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pool sizing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Control protected</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 50 L60 20 A30 30 0 0 1 86 65 Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><path d="M60 50 L86 65 A30 30 0 0 1 38 73 Z" fill="#E8F5E9" stroke="#25D366" stroke-width="1.3"/></svg></div>
            <span class="illustration-label">Modelled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Draft schemes and resolutions</h3>
        <p class="step-description">The ESOP scheme and the sweat-equity special resolution, backed by the registered-valuer and Rule 11UA workings.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESOP scheme</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sweat-equity SR</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="38" height="58" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="52" y="28" width="38" height="58" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="60" y1="44" x2="82" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="60" y1="54" x2="82" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div>
            <span class="illustration-label">Drafted</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Grant, allot and register</h3>
        <p class="step-description">We make the ESOP grants and the sweat-equity allotment and file with RoC Delhi, with PAS-3, SH-6 and SH-3.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grants + allotment</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registers filed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="20" width="52" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAS-3</text><text x="60" y="56" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SH-6 / SH-3</text></svg></div>
            <span class="illustration-label">Registered</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Maintain and review</h3>
        <p class="step-description">We run vesting, exercise and the annual compliance cycle as the plan matures alongside the business.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vesting + exercise</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual compliance</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="26" fill="none" stroke="#14365F" stroke-width="1.5"/><path d="M60 30 A20 20 0 0 1 80 50" stroke="#F5A623" stroke-width="2.5" fill="none" stroke-linecap="round"/><path d="M80 44 l2 8 -8 -2" fill="#E8712C"/><circle cx="60" cy="50" r="4" fill="#14365F"/></svg></div>
            <span class="illustration-label">Maintained</span>
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
            <h2 class="section-title">What We Need From You</h2>
            <div class="content-text">
                
                <p>To get a Gurugram family-business plan moving, a short pack lets us scope the hybrid accurately:</p>
                <ul>
                    <li>The current cap table and shareholding, so we can see where the promoter family sits today.</li>
                    <li>The roster of family and non-family people to be rewarded, with their roles, naming the Cyber City or Golf Course Road leaders you most need to retain.</li>
                    <li>Your succession intentions and the minimum holding the family wants to protect.</li>
                    <li>The Articles of Association and any earlier resolutions touching share capital.</li>
                    <li>For sweat equity, the IP, know-how or value addition by each family member that is being recognised.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>The hybrid in one line</strong></p>
                    <p>Your non-family executives take ESOPs under Section 62(1)(b); the promoter family takes sweat equity under Section 54. The family owns, the professionals run, control is modelled, and the grants file with RoC Delhi.</p>
                </div>

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
                <p>These are the failure points we see most often with Gurugram family firms operating in a high-equity, unicorn-adjacent market, and how we head each one off.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>A non-family CTO weighing a Cyber City unicorn's option-heavy offer</td><td>Leadership gap right at the handover</td><td>Design ESOP vesting that ties the executive to the firm's long-term value through succession, sized against the market they are being offered.</td></tr>
                        <tr><td>Promoters worried about loosening their grip on the company</td><td>Dilution running away unchecked</td><td>Model every grant and size the option pool so the family stays above its target holding.</td></tr>
                        <tr><td>Assuming the next-generation family member can simply take an ESOP</td><td>The promoter bar blocks it outright</td><td>Route family promoters through sweat equity under Section 54; ESOPs are not available to them.</td></tr>
                        <tr><td>Trying to reward family and the professional bench in one undifferentiated plan</td><td>Legal and structural tangle</td><td>Keep the ESOP and sweat-equity structures separate, each matched to its eligible group.</td></tr>

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
            <h2 class="section-title">Family-Business ESOP Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td><strong>From INR 24,999 (Exl GST and Govt. Charges)</strong></td></tr>
                        <tr><td>Scope of the starting fee</td><td>The design and structuring of the hybrid equity plan</td></tr>
                        <tr><td>ESOP scheme implementation and sweat-equity issuance</td><td>Scoped to the plan</td></tr>
                        <tr><td>Valuation and ROC charges</td><td>Billed at actuals</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP for Family Business consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20structure%20equity%20for%20our%20family%20business%20for%20succession%20and%20retention.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20share%20our%20family%20and%20management%20structure." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Designing the structure</td><td>1 to 2 weeks of advisory</td></tr>
                        <tr><td>Implementing an ESOP scheme</td><td>2 to 4 weeks</td></tr>
                        <tr><td>A sweat-equity issue</td><td>3 to 5 weeks (notice and valuation driven)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Where both are run together for a family business, we sequence them so the whole plan is in place in a single, coordinated programme.</strong></p>

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
            <h2 class="section-title">Why Use a Specialist</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">Talent held, not lost</h3>
            <p class="feature-text">Your Cyber City and Golf Course Road professional bench retained through the generational transition with equity that matches the market.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-2a6 6 0 0112 0v2"/></svg></div>
            <h3 class="feature-title">Family stays in control</h3>
            <p class="feature-text">Promoter control protected by deliberate, grant-by-grant dilution modelling rather than ad hoc CXO equity.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/></svg></div>
            <h3 class="feature-title">Right instrument, right person</h3>
            <p class="feature-text">A structure that respects the law: ESOPs for the non-family bench, sweat equity under Section 54 for the promoter family.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">One RoC Delhi programme</h3>
            <p class="feature-text">Both the ESOP and the sweat-equity compliance, including the RoC Delhi filings for a Haryana company, run as a single coordinated programme.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Family Businesses Across Generations</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years advising family businesses on equity, succession and compliance across generations.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why ESOPs Help Family-Business Succession</h2>
            <div class="content-text">
                <p>In Gurugram's enterprise-SaaS market, where the unicorn names normalised stock-based pay, these four levers are what let a promoter family hand the business to the next generation without losing the professionals who keep it running:</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Benefit</th><th>What it does for a Gurugram family firm</th></tr></thead>
                    <tbody>
                        <tr><td>Bridge the leadership gap</td><td>Hold the non-family CTO and product bench while the next generation grows into a Cyber City or Udyog Vihar operation.</td></tr>
                        <tr><td>Compete on equity, not just cash</td><td>Match the option-based offers your leaders see from Golf Course Road unicorns without a salary war.</td></tr>
                        <tr><td>Align interests</td><td>Tie professional managers to the long-term value of the platform the family owns.</td></tr>
                        <tr><td>Separate ownership from management</td><td>The family owns, the SaaS professionals run it, the model that lets a Gurugram business outlast its founder.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework</h2>
            <div class="content-text">
                <p>The same central statutes govern a Gurugram family business as anywhere in India; the only local twist is that a Haryana company files with RoC Delhi. The framework that shapes every plan we structure:</p>
                <p><strong>ESOP for non-family executives:</strong> granted under Section 62(1)(b) of the Companies Act read with Rule 12; promoters and the promoter group are excluded except in DPIIT-recognised startups, so non-family professionals are the natural recipients.</p>
                <p><strong>Sweat equity for family members:</strong> issued under Section 54 read with Rule 8 to directors and promoters for know-how, IPR or value additions; locked in for 3 years, capped at 15% a year or Rs 5 crore and 25% overall, with a registered-valuer price and the SH-3 register.</p>
                <p><strong>Taxation:</strong> ESOPs are taxed as a <a href="/esop-perquisite-tax-section-17-2-vi/gurugram">perquisite at exercise</a> and as <a href="/esop-capital-gains-tax-on-sale/gurugram">capital gains on sale</a>; sweat equity is taxed as a perquisite in the year of issue and as capital gains on sale.</p>
                <p><strong>Listed family companies:</strong> a listed family business additionally follows the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 and its disclosure requirements.</p>
                <p>Authoritative sources: the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Section 62, Section 54, SCD Rules), the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (ESOP and sweat-equity perquisite), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>, and <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> (SBEB and Sweat Equity Regulations 2021).</p>

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
                    <p class="faq-expanded__lead">Common questions on ESOPs and sweat equity for family businesses, succession, family control and listed-company rules.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP for Family Business',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Does a Gurugram family business file ESOP grants with RoC Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. Even though the company sits in Haryana, a Gurugram private limited files its ESOP special resolution and Form MGT-14 with the Registrar of Companies (RoC) Delhi, which has jurisdiction over Haryana. The fair market value for perquisite tax must come from a SEBI-registered Category-I merchant banker under Rule 11UA. We handle the RoC Delhi filings and coordinate the valuation so the grant is compliant from day one.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How do Cyber City and Udyog Vihar family firms retain non-family tech leaders?</h3>
                        <div class="faq-expanded__a"><p>Gurugram family firms running a SaaS or ITES business in Cyber City, Udyog Vihar or along Golf Course Road compete for product and engineering leaders against employers who all offer equity. An ESOP under Section 62(1)(b) gives that non-family CEO or CTO a stake in long-term value, which conserves cash and bridges the credibility gap while the next generation of the family grows into leadership.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the best way to give equity in a Gurugram family business?</h3>
                        <div class="faq-expanded__a"><p>For Gurugram family businesses, a hybrid structure works best. The non-family executives in Cyber City or Udyog Vihar receive ESOPs for retention, while family members receive sweat equity, because promoters cannot normally hold ESOPs. This professionalises management and keeps ownership within the family, and even though the company is in Haryana, the grant is filed with RoC Delhi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Will ESOPs dilute our family's control of the business?</h3>
                        <div class="faq-expanded__a"><p>Options dilute ownership only when exercised, and the impact is controllable. For Gurugram family firms competing for Cyber City talent, we model the dilution and size the option pool so the family stays above the promoter holding it is comfortable with, while still offering equity that matches market. Sizing the pool deliberately, rather than granting ad hoc to each CXO, is how a family business keeps both retention power and control.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Should the next generation in a Gurugram family business get ESOPs or sweat equity?</h3>
                        <div class="faq-expanded__a"><p>If the next-generation family members are promoters or part of the promoter group, they generally cannot receive ESOPs, so sweat equity under Section 54 is the route, recognising their contribution with real shares subject to a three-year lock-in. If they genuinely run a separate non-promoter venture, such as a new Sohna Road tech arm, an ESOP may be possible. We assess each person's status and recommend the right instrument.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">We are a DPIIT-recognised Gurugram startup. Can promoters get ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Possibly. The general promoter bar under Section 62 read with Rule 12 is relaxed for DPIIT-recognised startups for ten years from incorporation, so a founder-promoter in an eligible Gurugram startup can receive ESOPs during that window. Many Cyber City and Golf Course Road new-economy firms qualify. We confirm your DPIIT status and recognition date before deciding between ESOPs and sweat equity for the family.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a non-family CEO in Cyber City be granted ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Yes, certainly. A non-family CEO or CXO is not a promoter, so they can be granted ESOPs under Section 62(1)(b). For Gurugram family businesses, this is the best way to retain senior professional management in Cyber City's competitive talent market.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does a family-business equity plan cost in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Family-business ESOP structuring starts from Rs 24,999 plus GST for the design and structuring work. Implementing the scheme and issuing sweat equity to family members are scoped to the plan, while the merchant-banker valuation and RoC Delhi charges are billed at actuals. We give a clear, fixed-scope quote once we understand your family and management structure.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>How are non-family executives rewarded?</strong> Through an ESOP issued under Section 62(1)(b) of the Companies Act, 2013.</li>
                    <li><strong>How are working family members rewarded?</strong> Through sweat equity shares issued under Section 54 of the Companies Act, 2013.</li>
                    <li><strong>Why do family businesses need a hybrid structure?</strong> Because promoters and their relatives are barred from receiving ESOPs, so sweat equity is used alongside.</li>
                    <li><strong>Is family control protected in this structure?</strong> Yes, ownership and voting control are modelled upfront and protected throughout.</li>
                    <li><strong>What does this service cost?</strong> Our fees start from INR 24,999 plus GST.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Timing Matters</h2>
            <div class="content-text">
                
                <p>Succession is rarely sudden, but the retention risk is. The best non-family professionals have options, and a clear equity stake is what keeps them through a transition. Put the structure in place before the handover, not during the crisis, so the people who carry the business stay, and the family keeps control on its own terms.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Structure Your Family-Business Equity</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">For a family business, equity is about two things at once: retaining the professionals who run the company, and keeping ownership in the family. The hybrid of ESOPs for non-family executives and sweat equity for family members does both, within the law.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of family-business experience, designs and implements the whole structure so your succession is smooth and your control intact.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20structure%20equity%20for%20our%20family%20business%20for%20succession%20and%20retention.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20share%20our%20family%20and%20management%20structure." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for Family Business%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP for Family Business%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<!-- RELATED SERVICES -->
<section class="content-section">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">Related Services</h2>
        <div class="content-text"><p>Start with the national ESOP Services for Family Business service, then explore complementary ESOP services across India.</p>
        <ul>
                    <li><strong><a href="/esop-services-for-family-business">ESOP Services for Family Business in India</a></strong> - the national parent service</li>
                    <li><strong><a href="/esop-services">ESOP Services Hub</a></strong> - the full ESOP advisory hub - route by stage, scenario or tax</li>
                    <li><strong><a href="/esop-scheme-design">ESOP Scheme Design</a></strong> - design the option pool, vesting schedule and leaver terms</li>
                    <li><strong><a href="/esop-valuation-services">ESOP Valuation Services</a></strong> - Rule 11UA fair-market-value reports for grants and exercises</li>
                    <li><strong><a href="/esop-corporate-filings">ESOP Corporate Filings</a></strong> - MGT-14, PAS-3 and Form SH-6 register filings</li>
                    <li><strong><a href="/esop-perquisite-tax-section-17-2-vi">ESOP Perquisite Tax (Sec 17(2)(vi))</a></strong> - perquisite tax and TDS computation at exercise</li>
        </ul></div>
    </div></div>
</section>

<!-- MORE SERVICES IN CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">More Services in Gurugram</h2>
        <div class="pa-cross-grid"><a href="/esop-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services Hub</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/esop-scheme-design/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/esop-valuation-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Valuation Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/esop-corporate-filings/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Corporate Filings</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/esop-perquisite-tax-section-17-2-vi/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Perquisite Tax (Sec 17(2)(vi))</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/esop-management-and-compliance-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">Gurugram</div></div></a></div>
    </div></div>
</section>

<!-- SERVICE BY CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">ESOP Services for Family Business by City</h2>
        <div class="content-text"><p>Available across our four office cities. You are viewing the Gurugram page.</p></div>
        <div class="pa-city-grid"><a href="/esop-services-for-family-business/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esop-services-for-family-business/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esop-services-for-family-business/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><span class="pa-city-card" aria-current="page" style="border-color:var(--orange);background:#FFF7F2;cursor:default;position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute;top:10px;right:12px;font-size:10px;font-weight:700;color:var(--orange);letter-spacing:.04em;">YOU'RE HERE</span></span></div>
    </div></div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every six months for changes to promoter eligibility for ESOPs, the DPIIT exemption, sweat-equity rules, ESOP or sweat-equity taxation, and SEBI SBEB amendments affecting listed family companies (Tier 2 freshness).</p>
        </div>
    </div>
</section>


</main>






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
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = "2 June 2026";
    var el1 = document.getElementById('lastUpdated');
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el1) el1.textContent = dateStr;
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection