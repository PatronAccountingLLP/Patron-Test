@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Mumbai NRI ESOP Tax Help: Form 67 & FTC Credit Claims</title>
    <meta name="description" content="NRI and non-resident staff at Mumbai SaaS and BKC firms get the ESOP perquisite split by India workdays plus Form 67 FTC relief, starting at Rs 9,999.">
    <meta name="keywords" content="ESOP Tax for NRI and Non Resident Employees Mumbai, ESOP Tax for NRI and Non Resident Employees in Mumbai, ESOP Tax for NRI and Non Resident Employees services in Mumbai, ESOP services Mumbai, ESOP Tax for NRI and Non Resident Employees cost Mumbai, ESOP Tax for NRI and Non Resident Employees consultants Mumbai, CA firm for ESOP Tax for NRI and Non Resident Employees Mumbai, ESOP advisory Mumbai">
    <link rel="canonical" href="/esop-tax-for-nri-and-non-resident-employees/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Mumbai NRI ESOP Tax Help: Form 67 & FTC Credit Claims | Patron Accounting">
    <meta property="og:description" content="NRI and non-resident staff at Mumbai SaaS and BKC firms get the ESOP perquisite split by India workdays plus Form 67 FTC relief, starting at Rs 9,999.">
    <meta property="og:url" content="/esop-tax-for-nri-and-non-resident-employees/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mumbai NRI ESOP Tax Help: Form 67 & FTC Credit Claims | Patron Accounting">
    <meta name="twitter:description" content="NRI and non-resident staff at Mumbai SaaS and BKC firms get the ESOP perquisite split by India workdays plus Form 67 FTC relief, starting at Rs 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/mumbai#service",
      "name": "ESOP Tax for NRI and Non-Resident Employees",
      "description": "Patron Accounting determines residential status under Section 6, apportions the India-taxable ESOP perquisite by India workdays, claims DTAA relief and Foreign Tax Credit through TRC, Form 10F and Form 67, handles Schedule FA disclosure, and plans FEMA-compliant repatriation for NRI and non-resident employees.",
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees"
      },
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "sameAs": "https://en.wikipedia.org/wiki/Mumbai"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Non-resident Indian",
          "sameAs": "https://en.wikipedia.org/wiki/Non-resident_Indian_and_person_of_Indian_origin"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "NRI ESOP Tax Service Plans",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "NRI and Cross-Border ESOP Tax Advisory"
            },
            "price": "9999",
            "priceCurrency": "INR",
            "description": "Residency determination, apportionment and DTAA relief mapping. Starting price, exclusive of GST and government charges."
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/mumbai#breadcrumb",
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
          "name": "ESOP Services in Mumbai",
          "item": "https://www.patronaccounting.com/esop-services/mumbai"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "NRI ESOP Tax",
          "item": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/mumbai"
        }
      ]
    },
    {
      "@type": "LocalBusiness",
      "additionalType": "https://schema.org/AccountingService",
      "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/mumbai#localbusiness",
      "name": "Patron Accounting LLP - ESOP Tax For Nri And Non Resident Employees, Mumbai",
      "url": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/mumbai",
      "telephone": "+91-9459456700",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Mumbai",
        "addressRegion": "Maharashtra",
        "addressCountry": "IN"
      },
      "parentOrganization": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/esop-tax-for-nri-and-non-resident-employees/mumbai#faq",
      "datePublished": "2026-06-24T08:00:00+05:30",
      "dateModified": "2026-06-24T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Are Mumbai listed-company ESOPs taxed if I exercise after moving abroad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, to the extent they relate to services rendered in Mumbai. A 2025 tribunal ruling confirmed that ESOPs granted for Mumbai work stay taxable in India even when exercised after the move abroad. For SEBI-listed plans common in BKC and Lower Parel, the perquisite at exercise is apportioned by Mumbai workdays during vesting, and DTAA relief prevents double taxation."
          }
        },
        {
          "@type": "Question",
          "name": "How are capital gains taxed when an NRI sells Indian listed ESOP shares?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Shares of an Indian company are an India-sourced asset, so capital gains on their sale are taxable in India for an NRI at the same rates as residents, in addition to the perquisite already taxed at exercise. For listed shares on a Mumbai exchange, the holding period decides short-term versus long-term, and treaty relief may apply on the gain depending on the DTAA."
          }
        },
        {
          "@type": "Question",
          "name": "Are an NRI's ESOPs taxed in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The portion that relates to services rendered in India remains taxable in India, even where the exercise takes place abroad. The perquisite is apportioned on the basis of residency and India workdays, and the Double Taxation Avoidance Agreement provides relief from being taxed twice."
          }
        },
        {
          "@type": "Question",
          "name": "How do I claim DTAA relief on ESOP income?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To claim relief under the applicable Double Taxation Avoidance Agreement, obtain a Tax Residency Certificate from your country of residence, file Form 10F, and claim Foreign Tax Credit by filing Form 67 before the ITR due date under Section 90 or 91. Missing the Form 67 deadline forfeits the credit, a common and costly oversight."
          }
        },
        {
          "@type": "Question",
          "name": "My employer is a SEBI-listed Mumbai company headquartered near BKC. Does that change my ESOP tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The listing status does not change the residency-based apportionment, but it affects the mechanics. SEBI-listed plans from companies filing with RoC Mumbai value the exercise perquisite on the listed market price, and the post-exercise gain is a listed-equity capital gain taxed in India for an NRI. If you have left India, only the Mumbai-workday share of the perquisite is taxable, while the capital gain on the Indian listed shares remains India-sourced regardless of your residency."
          }
        },
        {
          "@type": "Question",
          "name": "How are ESOP sale proceeds repatriated by an NRI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Proceeds depend on the bank account used. Funds in an NRE account are fully repatriable without limit, while funds in an NRO account are repatriable up to USD 1 million per financial year. An NRI demat account is required to sell listed shares on an Indian exchange, and the route must follow FEMA documentation."
          }
        },
        {
          "@type": "Question",
          "name": "How are a foreign company's RSUs taxed in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For an Indian resident, the RSUs of a foreign company are taxable as a salary perquisite on vesting, and the subsequent sale is taxed as a capital gain. Any tax already paid abroad is available as a credit under the Double Taxation Avoidance Agreement through Form 67."
          }
        },
        {
          "@type": "Question",
          "name": "I am a BKC banker moving to London or Dubai mid-vesting. How am I taxed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Your residency is tested each year under Section 6, and the perquisite is apportioned by Mumbai workdays. For a London move, the UK-workday share follows UK tax with India-UK DTAA relief via Form 67. For a no-tax Dubai posting there is no foreign tax to credit, so Section 6 and Section 6(1A) deemed-residence planning is what keeps the foreign portion outside the India net."
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
                        ESOP Tax for NRI and Non-Resident Employees in Mumbai
                    </h1>

                    <p class="mb-4" style="color: var(--text-secondary); font-size: 16px; line-height: 1.7;">For BKC bankers, Lower Parel fund staff and Andheri-Powai SaaS engineers who left Mumbai mid-vesting, only the Mumbai-workday slice of the perquisite is taxed in India, with DTAA relief on the rest.</p>

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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> grant letter, residency days, TRC, Form 10F, foreign tax slips.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From INR 9,999 (Exl GST and Govt. Charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rule:</span> NR and RNOR taxed only on the India-services portion.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Relief:</span> DTAA Article 16, Foreign Tax Credit via Form 67 and Section 90.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years in cross-border and NRI tax</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NRI ESOP Tax%20Services&body=Hello%2C%20I%20just%20visited%20your%20NRI%20ESOP%20Tax%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NRI%20ESOP%20Tax%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'NRI ESOP Tax',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'NRIs and global employers trust Patron Accounting to fix residency, apportion the India-taxable portion and secure DTAA relief so ESOP income is taxed once.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who It Applies To</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">6 Steps</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Resident vs NR</button>
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
                    <p><strong>&#128204; TL;DR - NRI ESOP Tax Services at a Glance</strong></p>
                    <p>A Mumbai employee who has gone non-resident pays India tax only on the Mumbai-workday share of the ESOP perquisite. The rest is treaty-relieved through Form 67. We fix the residency, run the apportionment and file it clean.</p>
                </div>
                <p>SEBI runs the country's listed-equity rulebook from its BKC headquarters, and a large slice of Mumbai's equity-pay sits inside SEBI-listed SBEB plans and foreign-parent RSU programmes. That makes the city's ESOP question less about whether tax applies and more about <a href="/blog/esop-taxation-rules-2026-when-how-stock-options-taxed-rules">how much of it India can claim</a> once an employee crosses a border. The answer is set by two things: residential status under Section 6, and the proportion of the vesting period spent working in Mumbai.</p>
                <p>Patron Accounting handles that split end to end. We see it most with a Lower Parel fund professional exercising listed RSUs from a Singapore desk, a Powai deep-tech engineer holding a US parent's stock, and a Goregaon media executive <a href="/esop-secondary-sale-advisory/mumbai">selling vested shares in a secondary</a> after acquiring NRI status. In each case a 2025 ITAT ruling keeps the Mumbai-services portion firmly within India's net even when the exercise happens abroad, so the apportionment, the DTAA claim and the Schedule FA position all have to be defensible. Fifteen years of cross-border and NRI work sits behind every file we take.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2B: LOCAL MARKET CONTEXT -->
<section class="content-section" id="local-market-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NRI ESOP Tax in Mumbai: Local Context</h2>
            <div class="content-text">
                <p>Mumbai's ESOP base is concentrated in finance and high-growth software. The BKC and Lower Parel finance hubs hold investment bankers, private-equity and fund professionals whose packages include RSUs of US and UK-listed parents, while the Andheri-Powai SaaS belt and the Goregaon-Vikhroli startup corridor add Indian-company ESOPs that vest and liquidate quickly through buybacks and secondaries.</p>
                <p>Indian companies based in Mumbai file with the <strong>Registrar of Companies, Mumbai</strong>, under the Maharashtra MCA jurisdiction, and SEBI's headquarters in BKC means many Mumbai holders sit in listed-company plans governed by SEBI SBEB Regulations. Individual income-tax assessment runs through the Mumbai principal commissionerate. Our typical Mumbai matters involve a banker moving to London or Singapore mid-vesting, and a Powai SaaS employee selling vested shares in a secondary after acquiring NRI status.</p>
                <p>Because Mumbai postings cluster in the UK, Singapore and the UAE, the India-UK, India-Singapore and India-UAE DTAAs are the treaties we apply most. For UAE postings, where there is no personal income tax, residency planning under Section 6 and Section 6(1A) deemed-residence matters more than Foreign Tax Credit.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Cross-Border ESOP Tax</h2>
                <div class="content-text what-is-definition">
                    
                    <p>In Mumbai the term covers two recurring fact patterns: a SEBI-listed or private Indian-company ESOP held by someone who has moved to an overseas finance desk, and a foreign-parent RSU grant held by an engineer still working out of Powai or Andheri. Both are taxed in India to the extent the underlying service was rendered in Mumbai, and that link does not break simply because the option is exercised from London, Singapore or Dubai.</p>
                    <p>How much India can charge depends on Section 6. Where the holder is a resident and ordinarily resident, the entire perquisite is in the Indian net, including a US parent's RSUs vesting on a Lower Parel laptop. Where the holder is a non-resident or RNOR, only the Mumbai-workday slice of the vesting period is taxed here, and any tax already paid on the foreign slice is recovered through the relevant Double Taxation Avoidance Agreement.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NRI ESOP Tax:</strong></p>
                    <ul>
                        <li><strong>RNOR:</strong> Resident but Not Ordinarily Resident, taxed broadly like a non-resident on foreign income.</li>
                        <li><strong>Apportionment:</strong> splitting the perquisite by India workdays during the grant-to-vest period.</li>
                        <li><strong>TRC:</strong> Tax Residency Certificate from the country of residence, required for DTAA relief.</li>
                        <li><strong>FTC:</strong> Foreign Tax Credit under Section 90 or 91 for tax paid abroad, claimed via Form 67.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NRI ESOP Tax</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Turns on</span>
                        <strong>Residency and DTAA</strong>
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
            <h2 class="section-title">Who This Applies To</h2>
            <div class="content-text">
                
                <p>If your equity pay and your tax residence no longer point at the same country, this page is written for you. In Mumbai that mismatch is routine: the city's fintech, fund-management and SaaS employers post people abroad and recruit returning NRIs faster than most, and equity grants vest straight through those moves. The common thread is a single question under Section 6 of who is resident in which year, because that is what decides how much of the grant India taxes.</p>
                <ul>
                    <li>A BKC or Lower Parel banker or PE professional exercising an Indian-company ESOP after taking a desk in London, Singapore or the Gulf.</li>
                    <li>An Andheri or Powai SaaS or IIT-Bombay deep-tech engineer holding a US or other foreign parent's RSUs while still based in Mumbai.</li>
                    <li>A Goregaon or Vikhroli professional transferred into or out of the city mid-vesting on an inter-office move.</li>
                    <li>A returning NRI joining a Mumbai role whose status has shifted to RNOR or resident.</li>
                    <li>A foreign-parent group running its India arm from Mumbai and advising local equity-holders on their grants.</li>
                </ul>
                <p><strong>Statutory anchor:</strong> an individual is resident under Section 6 if present 182 days or more in the year, or 60 days plus 365 days across the prior four years; Indian citizens with India income above Rs 15 lakh face a 120-day threshold and possible deemed residence under Section 6(1A).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Cross-Border ESOP Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Year-by-Year Residency</td><td>For a BKC or Lower Parel professional on a Gulf or UK posting, we settle Section 6 status separately for each exercise and sale year, including the RNOR and Section 6(1A) deemed-resident tests.</td></tr>
                        <tr><td>Mumbai-Workday Apportionment</td><td>We reconstruct the grant-to-vest window against days actually worked in Mumbai, so only the city-services share of the perquisite is brought to tax.</td></tr>
                        <tr><td>Listed-Plan and SBEB Mechanics</td><td>For SEBI-listed Mumbai employers, we value the exercise perquisite on the listed price and separate it cleanly from the later listed-equity capital gain.</td></tr>
                        <tr><td>Foreign-Parent RSU Handling</td><td>For Powai and Andheri deep-tech teams holding a US parent's RSUs, we tax vesting as a salary perquisite and the sale as capital gain, reconciled to the foreign payslip.</td></tr>
                        <tr><td>DTAA Relief and FTC</td><td>We secure treaty relief under the applicable Article and Foreign Tax Credit through the TRC, Form 10F and Form 67, filed before the return due date.</td></tr>
                        <tr><td>Schedule FA, FEMA and Notice Defence</td><td>We disclose foreign holdings in Schedule FA against Black Money Act exposure, route proceeds through NRE or NRO within the USD 1 million cap, and answer mismatch notices.</td></tr>

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
            <h2 class="section-title">How Cross-Border ESOP Tax Works in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The same six steps run whether your grant comes from a SEBI-listed Mumbai employer or a foreign parent: pin the residency, isolate the Mumbai-workday portion, and lock in DTAA relief so the grant is taxed once.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Fix residential status</h3>
        <p class="step-description">We apply Section 6 day-count and the RNOR and Section 6(1A) tests for the exercise and sale years.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 6</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RNOR / 6(1A)</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="32" y="22" width="56" height="56" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="32" y1="36" x2="88" y2="36" stroke="#14365F" stroke-width="1.5"/><text x="60" y="60" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">182d</text></svg></div>
            <span class="illustration-label">Status Fixed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Map the service period</h3>
        <p class="step-description">We identify the grant-to-vest period and the days worked in Mumbai within it.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grant-to-vest</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>India workdays</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="28" y1="50" x2="92" y2="50" stroke="#14365F" stroke-width="2"/><circle cx="34" cy="50" r="4" fill="#F5A623"/><circle cx="60" cy="50" r="4" fill="#E8712C"/><circle cx="86" cy="50" r="4" fill="#25D366"/><rect x="34" y="42" width="26" height="16" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1" opacity="0.6"/></svg></div>
            <span class="illustration-label">Period Mapped</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Apportion the perquisite</h3>
        <p class="step-description">We tax only the India-services share for a non-resident or RNOR; the whole for a resident.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>India share</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NR vs ROR</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 50 L60 20 A30 30 0 0 1 60 80 Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><text x="74" y="54" font-size="9" fill="#E8712C" font-weight="700" font-family="Arial, sans-serif">India</text></svg></div>
            <span class="illustration-label">Apportioned</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Claim DTAA relief</h3>
        <p class="step-description">We obtain the TRC and Form 10F, and file Form 67 for Foreign Tax Credit before the ITR due date.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRC + Form 10F</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 67</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="36" width="30" height="28" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><rect x="68" y="36" width="30" height="28" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><path d="M52 50 h16 M60 45 l6 5 -6 5" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><text x="37" y="78" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRC/67</text></svg></div>
            <span class="illustration-label">Relief Claimed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Handle the sale and FEMA</h3>
        <p class="step-description">We compute <a href="/esop-capital-gains-tax-on-sale/mumbai">capital gains on India-sourced shares</a> and route proceeds through NRE or NRO accounts.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Capital gains</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NRE / NRO</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M32 50 h56 M60 22 a40 40 0 010 56 M60 22 a40 40 0 000 56" stroke="#F5A623" stroke-width="1.2" fill="none"/><text x="60" y="92" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NRE/NRO</text></svg></div>
            <span class="illustration-label">FEMA Routed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Disclose and file</h3>
        <p class="step-description">We report foreign shares in Schedule FA and file the ITR reconciled with foreign tax slips.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule FA</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reconciled ITR</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="14" width="52" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sch FA</text><circle cx="60" cy="60" r="11" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M54 60l4 4 8-8" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
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
            <h2 class="section-title">Documents Checklist</h2>
            <div class="content-text">
                
                <ul>
                    <li>Passport stamps or travel record to count residency days.</li>
                    <li>ESOP grant letter with grant date, vesting schedule and exercise price.</li>
                    <li>Record of days worked in Mumbai during the vesting period.</li>
                    <li>Tax Residency Certificate and Form 10F from the country of residence.</li>
                    <li>Foreign tax slips (W-2, 1099 or equivalent) for Foreign Tax Credit.</li>
                    <li>NRE/NRO account details and demat statement for sale and repatriation.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Worked example: Powai engineer to Singapore</strong></p>
                    <p>A Powai SaaS engineer's foreign-parent RSUs vest over 4 years. She works in Mumbai for the first 3 years, then moves to the Singapore office for year 4 and becomes non-resident. Roughly 75% of the perquisite stays taxable in India as the Mumbai-workday share; the Singapore-workday quarter follows Singapore tax, and the India-Singapore DTAA with Form 67 stops the same income being taxed twice.</p>
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
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>A Gulf-posted BKC banker assumes a Dubai or London exercise means zero India tax</td><td>Under-reporting and notice risk on the Mumbai-workday share</td><td>We apply the services-in-India rule confirmed by the 2025 ITAT ruling and apportion the perquisite by Mumbai workdays.</td></tr>
                        <tr><td>On a SEBI-listed plan, the exercise perquisite and the later listed-share capital gain are run together</td><td>Wrong head of income and overstated or understated tax</td><td>We value the perquisite on the listed price at exercise and account for the post-exercise gain separately as listed-equity capital gain.</td></tr>
                        <tr><td>A Powai engineer's foreign-parent RSUs are taxed in both India and the parent's country</td><td>The same income taxed twice</td><td>We claim DTAA relief and Foreign Tax Credit through the TRC, Form 10F and Form 67 before the due date.</td></tr>
                        <tr><td>Foreign ESOP shares left out of Schedule FA by a resident or returning RNOR</td><td>Black Money Act exposure</td><td>We disclose every foreign ESOP holding in Schedule FA to keep the position penalty-safe.</td></tr>
                        <tr><td>Sale proceeds blocked or over the cap on repatriation</td><td>Funds stuck abroad or trapped in NRO</td><td>We route proceeds through NRE or NRO accounts within the USD 1 million annual limit under FEMA.</td></tr>

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
            <h2 class="section-title">Cross-Border ESOP Tax Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td><strong>From INR 9,999 (Exl GST and Govt. Charges)</strong></td></tr>
                        <tr><td>Scope of the starting fee</td><td>Residency determination, apportionment and DTAA relief mapping</td></tr>
                        <tr><td>FEMA repatriation planning, Schedule FA disclosure and full ITR filing</td><td>Quoted on scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NRI ESOP Tax consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NRI%20ESOP%20Tax%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Residency determination with apportionment</td><td>4 to 6 working days</td></tr>
                        <tr><td>Where TRC, Form 10F and Foreign Tax Credit documentation are involved</td><td>1 to 2 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>File Form 67 before the ITR due date, as a late filing can forfeit the credit.</strong> Fixing residency and gathering the TRC early keeps the cross-border position clean.</p>

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
            <h2 class="section-title">Why Use a Professional</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20M12 2a15 15 0 000 20"/></svg></div>
            <h3 class="feature-title">Correct residency</h3>
            <p class="feature-text">Year-by-year Section 6 status pinned first, the foundation under every BKC, Lower Parel and Powai cross-border ESOP.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12l2.5 2.5L16 9"/></svg></div>
            <h3 class="feature-title">Defensible apportionment</h3>
            <p class="feature-text">The Mumbai-workday share evidenced from travel and grant records, ready for the Mumbai assessing officer.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <h3 class="feature-title">Relief claimed in time</h3>
            <p class="feature-text">India-UK, India-Singapore and India-UAE treaty relief and FTC locked in through Form 67, before the deadline that forfeits it.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">FA and FEMA handled</h3>
            <p class="feature-text">Schedule FA disclosure and NRE/NRO routing handled so foreign holdings and Mumbai sale proceeds stay clean.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by NRIs and Global Employers</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years in cross-border and NRI taxation, DTAA relief and FEMA-compliant repatriation.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Resident vs Non-Resident ESOP Tax</h2>
            <div class="content-text">
                <p>For a Mumbai grant the same shares can land in very different tax positions depending on which status box the holder sits in for the year. A BKC banker still resident in Mumbai is taxed on the whole grant including any foreign-parent RSUs; the moment a Gulf or Singapore posting makes them non-resident, only the Mumbai-workday slice stays in the Indian net. The table sets the two positions side by side.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Resident (ROR)</th><th>Non-Resident / RNOR</th></tr></thead>
                    <tbody>
                        <tr><td>Taxable scope</td><td>Worldwide ESOP income</td><td>India-services portion only</td></tr>
                        <tr><td>Foreign shares</td><td>Taxable in Mumbai</td><td>Generally outside India tax</td></tr>
                        <tr><td>Schedule FA</td><td>Mandatory disclosure</td><td>Not required for non-resident</td></tr>
                        <tr><td>DTAA relief</td><td>FTC on foreign tax</td><td>Treaty allocates taxing right</td></tr>
                        <tr><td>Repatriation</td><td>Resident account</td><td>NRE free; NRO up to USD 1M/year</td></tr>

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
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                <p>A Mumbai cross-border ESOP file is governed by the same national statute that applies anywhere in India; what is local is the administration, since residency assessment runs through the Mumbai income-tax commissionerate, listed employers fall under SEBI's BKC-based SBEB framework, and the Indian companies involved file with the Registrar of Companies, Mumbai. The substantive rules below are the ones we work to.</p>
                <p><strong>Residency:</strong> Section 6 of the Income-tax Act 1961 sets the 182-day and 60-plus-365-day tests, the 120-day threshold for high-India-income citizens, and deemed residence under Section 6(1A). RNOR applies where the individual was non-resident in 9 of the last 10 years or present 729 days or fewer in the last 7.</p>
                <p><strong>Charge and sourcing:</strong> the ESOP perquisite under Section 17(2)(vi) is taxable to the extent it relates to services rendered in Mumbai, per CBDT Circular 2/2021 and confirmed by a 2025 ITAT ruling, even if exercised abroad.</p>
                <p><strong>Relief:</strong> Section 90 and 91 and the applicable DTAA Article 16 allow Foreign Tax Credit, claimed with a TRC, Form 10F and Form 67 filed before the return due date.</p>
                <p><strong>Disclosure and FEMA:</strong> residents must disclose foreign ESOP shares in Schedule FA, with Black Money Act exposure for non-disclosure; FEMA permits full NRE repatriation and NRO repatriation up to USD 1 million per financial year.</p>
                <p>Authoritative sources: the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (residency, Schedule FA, Form 67), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Income-tax Act and Rules</a>, the <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> (FEMA, repatriation), and the <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">CBDT</a> (DTAA, Circular 2/2021).</p>

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
                    <p class="faq-expanded__lead">Common questions on NRI ESOP taxability, exercise abroad, apportionment, DTAA relief, Schedule FA and FEMA repatriation.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NRI ESOP Tax',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Are Mumbai listed-company ESOPs taxed if I exercise after moving abroad?</h3>
                        <div class="faq-expanded__a"><p>Yes, to the extent they relate to services rendered in Mumbai. A 2025 tribunal ruling confirmed that ESOPs granted for Mumbai work stay taxable in India even when exercised after the move abroad. For SEBI-listed plans common in BKC and Lower Parel, the perquisite at exercise is apportioned by Mumbai workdays during vesting, and DTAA relief prevents double taxation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How are capital gains taxed when an NRI sells Indian listed ESOP shares?</h3>
                        <div class="faq-expanded__a"><p>Shares of an Indian company are an India-sourced asset, so capital gains on their sale are taxable in India for an NRI at the same rates as residents, in addition to the perquisite already taxed at exercise. For listed shares on a Mumbai exchange, the holding period decides short-term versus long-term, and treaty relief may apply on the gain depending on the DTAA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Are an NRI's ESOPs taxed in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. The portion that relates to services rendered in India remains taxable in India, even where the exercise takes place abroad. The perquisite is apportioned on the basis of residency and India workdays, and the Double Taxation Avoidance Agreement provides relief from being taxed twice.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How do I claim DTAA relief on ESOP income?</h3>
                        <div class="faq-expanded__a"><p>To claim relief under the applicable Double Taxation Avoidance Agreement, obtain a Tax Residency Certificate from your country of residence, file Form 10F, and claim Foreign Tax Credit by filing Form 67 before the ITR due date under Section 90 or 91. Missing the Form 67 deadline forfeits the credit, a common and costly oversight.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">My employer is a SEBI-listed Mumbai company headquartered near BKC. Does that change my ESOP tax?</h3>
                        <div class="faq-expanded__a"><p>The listing status does not change the residency-based apportionment, but it affects the mechanics. SEBI-listed plans from companies filing with RoC Mumbai value the exercise perquisite on the listed market price, and the post-exercise gain is a listed-equity capital gain taxed in India for an NRI. If you have left India, only the Mumbai-workday share of the perquisite is taxable, while the capital gain on the Indian listed shares remains India-sourced regardless of your residency.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How are ESOP sale proceeds repatriated by an NRI?</h3>
                        <div class="faq-expanded__a"><p>Proceeds depend on the bank account used. Funds in an NRE account are fully repatriable without limit, while funds in an NRO account are repatriable up to USD 1 million per financial year. An NRI demat account is required to sell listed shares on an Indian exchange, and the route must follow FEMA documentation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How are a foreign company's RSUs taxed in India?</h3>
                        <div class="faq-expanded__a"><p>For an Indian resident, the RSUs of a foreign company are taxable as a salary perquisite on vesting, and the subsequent sale is taxed as a capital gain. Any tax already paid abroad is available as a credit under the Double Taxation Avoidance Agreement through Form 67.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">I am a BKC banker moving to London or Dubai mid-vesting. How am I taxed?</h3>
                        <div class="faq-expanded__a"><p>Your residency is tested each year under Section 6, and the perquisite is apportioned by Mumbai workdays. For a London move, the UK-workday share follows UK tax with India-UK DTAA relief via Form 67. For a no-tax Dubai posting there is no foreign tax to credit, so Section 6 and Section 6(1A) deemed-residence planning is what keeps the foreign portion outside the India net.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Who is taxed in India on worldwide ESOP income?</strong> Only an employee who is Resident and Ordinarily Resident is taxed in India on worldwide ESOP income.</li>
                    <li><strong>What is taxed for an NRI or RNOR employee?</strong> An NRI or RNOR employee is taxed in India only on the India-services portion of the ESOP perquisite.</li>
                    <li><strong>How is the taxable share apportioned?</strong> The taxable share is apportioned by the number of India workdays during the vesting period.</li>
                    <li><strong>Which documents are needed to claim DTAA relief?</strong> DTAA relief requires a Tax Residency Certificate (TRC), Form 10F and Form 67.</li>
                    <li><strong>How much sale proceeds can be repatriated from an NRO account?</strong> Funds in an NRO account can be repatriated up to USD 1 million per financial year.</li>
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
                
                <p>Form 67 for Foreign Tax Credit must be filed before the ITR due date, or the credit is lost for that year. Schedule FA non-disclosure carries Black Money Act exposure. Fix residency and gather the TRC early, well before the return deadline.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Cross-Border ESOP Sorted</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP tax for NRIs and non-resident employees sits at the intersection of residency, DTAA and FEMA, and a single wrong assumption can trigger double taxation or a notice.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of cross-border tax experience, fixes your residency, apportions the India-taxable portion, and secures DTAA relief so you are taxed once and stay compliant on both sides.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NRI%20ESOP%20Tax%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NRI ESOP Tax%20Services&body=Hello%2C%20I%20just%20visited%20your%20NRI%20ESOP%20Tax%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<!-- RELATED SERVICES -->
<section class="content-section">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">Related Services</h2>
        <div class="content-text"><p>Start with the national ESOP Tax for NRI and Non Resident Employees service, then explore complementary ESOP services across India.</p>
        <ul>
                    <li><strong><a href="/esop-tax-for-nri-and-non-resident-employees">ESOP Tax for NRI and Non Resident Employees in India</a></strong> - the national parent service</li>
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
        <h2 class="section-title">More Services in Mumbai</h2>
        <div class="pa-cross-grid"><a href="/esop-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services Hub</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-scheme-design/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-valuation-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Valuation Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-corporate-filings/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Corporate Filings</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-perquisite-tax-section-17-2-vi/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Perquisite Tax (Sec 17(2)(vi))</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-management-and-compliance-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">Mumbai</div></div></a></div>
    </div></div>
</section>

<!-- SERVICE BY CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">ESOP Tax for NRI and Non Resident Employees by City</h2>
        <div class="content-text"><p>Available across our four office cities. You are viewing the Mumbai page.</p></div>
        <div class="pa-city-grid"><a href="/esop-tax-for-nri-and-non-resident-employees/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><span class="pa-city-card" aria-current="page" style="border-color:var(--orange);background:#FFF7F2;cursor:default;position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:10px;right:12px;font-size:10px;font-weight:700;color:var(--orange);letter-spacing:.04em;">YOU'RE HERE</span></span><a href="/esop-tax-for-nri-and-non-resident-employees/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/esop-tax-for-nri-and-non-resident-employees/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div>
    </div></div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every three months for residency-rule amendments, new DTAA or MLI positions, ITAT or High Court rulings on cross-border ESOPs, FEMA repatriation limit changes, Schedule FA or Form 67 procedure changes, and Income-tax Act 2025 mapping (Tier 1 freshness).</p>
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