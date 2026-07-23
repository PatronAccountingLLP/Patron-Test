
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
    <title>Section 8 Company Registration Mumbai - MOA, AOA & Fees</title>
    <meta name="description" content="CA-assisted Section 8 company registration in Mumbai. Non-profit incorporation with 12A, 80G, FCRA support. Serving BKC, Nariman Point. Call +91 945 945 6700.">
    <link rel="canonical" href="/section8-company-registration/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Section 8 Company Registration Mumbai - MOA, AOA & Fees">
    <meta property="og:description" content="CA-assisted Section 8 company registration in Mumbai. Non-profit incorporation with 12A, 80G, FCRA support. Serving BKC, Nariman Point. Call +91 945 945 6700.">
    <meta property="og:url" content="/section8-company-registration/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/section8-company-registration/mumbai-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Section 8 Company Registration Mumbai - MOA, AOA & Fees">
    <meta name="twitter:description" content="CA-assisted Section 8 company registration in Mumbai. Non-profit incorporation with 12A, 80G, FCRA support. Serving BKC, Nariman Point. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/section8-company-registration/mumbai-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Section 8 Company Registration Mumbai",
      "description": "CA-assisted Section 8 company registration in Mumbai. Non-profit incorporation with 12A, 80G, FCRA support. Serving BKC, Nariman Point. Call +91 945 945 6700.",
      "url": "/section8-company-registration/mumbai",
      "serviceType": "Section 8 Company Registration Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
      },
      "provider": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "/",
        "logo": "/images/site-logo.svg"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "/section8-company-registration/mumbai",
        "price": "14999"
      }
    },
    {
      "@type": "BreadcrumbList",
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
          "name": "Section 8 Company Registration: Process & Fees",
          "item": "https://www.patronaccounting.com/section8-company-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Section 8 Company Registration Mumbai",
          "item": "https://www.patronaccounting.com/section8-company-registration/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which offices handle Section 8 registration in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 8 registration in Mumbai involves two offices. The Regional Director (Western Region), MCA, at CGO Complex, CBD Belapur, Navi Mumbai 400614 issues the Section 8 licence via Form INC-12. The Registrar of Companies (RoC) Mumbai at Everest Building, 100 Marine Drive, Mumbai 400002 handles the final incorporation via SPICe+. Patron's Marine Lines office coordinates with both authorities throughout the process."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register a Section 8 company online from Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The licence application (INC-12) and incorporation (SPICe+) are both filed electronically on the MCA portal. No physical visit to either the Regional Director's office at CBD Belapur or RoC Mumbai is required. Patron's CA team handles all digital filings, with in-person support available at Marine Lines for document execution and consultations."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Section 8 registration cost in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 8 company registration through Patron starts from Rs 14,999 all-inclusive. This covers DSC, name reservation, MOA/AOA drafting, licence application (INC-12), incorporation (SPICe+), PAN/TAN, and professional fees. A major cost advantage: Section 8 companies are exempt from stamp duty on MOA/AOA, saving Rs 8,000+ compared to Pvt Ltd registration in Maharashtra. 12AB and 80G applications are quoted separately at Rs 5,000-7,000 each."
          }
        },
        {
          "@type": "Question",
          "name": "How long does Section 8 registration take in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 8 company registration in Mumbai takes 30 to 45 working days. The Regional Director licence (INC-12) processing at CBD Belapur takes 15-20 days, which is the longest step. Post-licence, RoC Mumbai processes SPICe+ incorporation in 7-10 days. DSC and name reservation take 3-5 days at the start."
          }
        },
        {
          "@type": "Question",
          "name": "Is stamp duty required for Section 8 company in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 8 companies are exempt from stamp duty on MOA and AOA under the Companies Act 2013. This is a significant advantage in Maharashtra, where stamp duty for private limited companies exceeds Rs 8,000 for Rs 1 lakh authorised capital. This exemption makes Section 8 one of the most cost-effective company structures to incorporate in Mumbai."
          }
        },
        {
          "@type": "Question",
          "name": "Can an NRI register a Section 8 company in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NRIs and foreign nationals can be directors and members of a Section 8 company in Mumbai. At least one director must be an Indian resident under the Companies Act 2013. NRI directors submit apostilled passport copies and foreign address proofs. Section 8 companies with NRI involvement are particularly common for cross-border philanthropic foundations targeting Mumbai's social development needs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between 12AB and 80G for Section 8?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 12AB registration provides income tax exemption to the Section 8 company itself - the organisation's income from donations, grants, and investments is not taxed. Section 80G registration enables donors who contribute to the company to claim a 50% tax deduction on their donation. Both registrations are essential for Mumbai Section 8 companies seeking CSR funding."
          }
        },
        {
          "@type": "Question",
          "name": "What are the annual compliance requirements for Section 8?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 8 companies registered in Mumbai must comply with: minimum 4 board meetings per year (14-day AGM notice), AOC-4 (financial statements) and MGT-7 (annual return) with RoC Mumbai, mandatory statutory audit, ITR-7 with the Income Tax Department, and 12AB/80G renewal. If receiving CSR funds, CSR-1 registration must be maintained. Patron manages all compliance as part of post-incorporation support. Quick Answers Section 8 company kya hai? Section 8 company is a non-profit company under the Companies Act 2013 formed for charitable purposes like education, health, social welfare. No dividends. All profits go towards objects. Mumbai mein Section 8 ka kharcha? From Rs 14,999 through Patron. No stamp duty for Section 8 (unlike Pvt Ltd). 12AB and 80G separate at Rs 5,000-7,000 each. Kya Section 8 company CSR fund le sakti hai? Yes. Section 8 companies are eligible for CSR funding under Section 135 of the Companies Act 2013 after CSR-1 registration. BKC corporates prefer Section 8 over trusts."
          }
        }
      ]
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
                        Section 8 Company Registration in Mumbai: CA-Managed Non-Profit Incorporation
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof of directors, registered office proof, DSC, projected financials (3 years)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Section 8 company registration in Mumbai starts from Rs 14,999 (all-inclusive)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Min 2 directors (1 Indian resident) + 2 members, no minimum capital, non-profit objects mandatory</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Section 8 incorporation in 30-45 working days (includes Regional Director licence + RoC Mumbai approval)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Mumbai office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20know%20about%20Section%208%20Company%20Registration%20in%20Mumbai.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Section 8 Company Registration in Mumbai'/>
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
                                <option value="section8-company-registration/mumbai" selected>Section 8 Company Registration in Mumbai</option>
                                <option value="private-limited-company-registration/mumbai">Private Limited Company Registration in Mumbai</option>
                                <option value="ngo-registration/mumbai">NGO Registration in Mumbai</option>
                                <option value="llp-incorporation/mumbai">LLP Registration in Mumbai</option>
                                <option value="gst-registration/mumbai">GST Registration in Mumbai</option>
                                <option value="trademark-registration/mumbai">Trademark Registration in Mumbai</option>
                                <option value="society-registration/mumbai">Society Registration in Mumbai</option>
                                <option value="one-person-company-registration/mumbai">OPC Registration in Mumbai</option>
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our Section 8 company registration from licence to incorporation seamlessly. The MOA drafting aligned perfectly with 12AB requirements - we got our exemption on the first attempt.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Aarav Kulkarni</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Mumbai Education Foundation</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Outstanding support for our NGO registration. The CA team drafted MOA objects that satisfied both MCA and Income Tax requirements. The Regional Director licence came through without any queries.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PN</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Nair</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, BKC Healthcare Trust</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron made the entire Section 8 process stress-free. From name reservation to CSR-1 registration, everything was handled professionally. Our corporate CSR partners were impressed with the compliance documentation.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Sharma</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, Green Mumbai Initiative</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Excellent service for our NRI-funded foundation. The team handled apostille requirements, Regional Director coordination, and post-incorporation 80G filing. Highly recommended for Mumbai non-profits.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MD</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Meera Desai</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trustee, NRI Philanthropy Network</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
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
                    <p>CA-managed Section 8 registration with 12AB, 80G, and CSR readiness for Mumbai non-profits.</p>
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
            <a href="#what-section" class="toc-btn">What Is Section 8</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#roc-calculator" class="toc-btn">ROC Fee Calculator</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 8 Company Registration in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Section 8 Company Registration in Mumbai Services at a Glance</strong></p>
                    <p>Section 8 company registration creates a non-profit organisation with corporate governance under Section 8 of the Companies Act 2013. Unlike a trust or society, a Section 8 company has a board of directors, mandatory audit, and regulated compliance - giving it the highest credibility among NGO structures for CSR funding and government grants. Registration requires a licence from the Regional Director (MCA) before incorporation with RoC Mumbai. Post-registration, the company applies for 12AB and 80G exemptions under the Income Tax Act.</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Act</td><td>Companies Act, 2013 - Section 8 (read with Section 3, 7)</td></tr>
                            <tr><td>Applicable To</td><td>Non-profit foundations, CSR vehicles, educational institutions, healthcare foundations, environmental organisations in Mumbai</td></tr>
                            <tr><td>Timeline</td><td>30-45 working days (Regional Director licence 15-20 days + RoC Mumbai incorporation 10-15 days)</td></tr>
                            <tr><td>Cost Starting From</td><td>Rs 14,999 all-inclusive (no stamp duty for Section 8)</td></tr>
                            <tr><td>Key Compliance</td><td>12AB, 80G under IT Act, annual ROC filing (AOC-4, MGT-7), statutory audit, ITR-7, FCRA (for foreign donations)</td></tr>
                            <tr><td>Key Forms</td><td>INC-12 (licence application), SPICe+ (incorporation), e-MOA/e-AOA, INC-16 (licence), Form 10A (12AB/80G)</td></tr>
                            <tr><td>Jurisdictional Offices</td><td>Regional Director (Western Region), CGO Complex, CBD Belapur, Navi Mumbai. RoC Mumbai, Everest Building, Marine Drive.</td></tr>
                        </tbody>
                    </table>
                    </div></p>
                </div>
                <p>Mumbai is the CSR capital of India. BKC and Nariman Point house the headquarters of corporations mandated to spend 2% of net profits on social initiatives under Section 135 of the Companies Act 2013. These CSR departments overwhelmingly prefer funding Section 8 companies over trusts or societies because of the corporate governance structure, mandatory audit, and MCA oversight. The Regional Director (Western Region) at CGO Complex, CBD Belapur, Navi Mumbai issues the Section 8 licence for Maharashtra, while RoC Mumbai at Everest Building on Marine Drive handles the final incorporation. Learn more about <a href="/section8-company-registration">Section 8 Company Registration across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines provides CA-managed Section 8 registration covering licence application, incorporation, MOA drafting aligned to 12AB/80G eligibility, and post-registration compliance that makes your non-profit CSR-ready from day one. After Section 8 registration, you may also need <a href="/ngo-registration">NGO Registration</a> and <a href="#">12A and 80G Registration</a> for full non-profit compliance.</p>
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
                <h2 class="section-title">What Is Section 8 Company Registration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Section 8 company registration is the legal process of incorporating a non-profit company under Section 8 of the Companies Act 2013, which permits the formation of companies with charitable objects that apply all profits towards promoting their stated purposes and prohibit dividend distribution to members.</p>
                    <p>Under Section 8(1) of the Companies Act 2013, the Central Government may grant a licence to a company if it is formed for promoting commerce, art, science, sports, education, research, social welfare, religion, charity, protection of environment, or any other useful object. The company must intend to apply its profits and other income in promoting its objects and must prohibit the payment of any dividend to its members. The licence is granted by the Regional Director after examining the application in Form INC-12, the draft MOA and AOA, and projected financial statements for 3 years.</p>
                    <p>For Mumbai's non-profit ecosystem, Section 8 registration offers distinct advantages over trusts and societies. CSR teams at BKC evaluate funding proposals based on governance structure - Section 8 companies have a board of directors, statutory audit, and ROC oversight that trusts lack. International donors and FCRA-registered organisations prefer the transparency of MCA-regulated entities. Educational institutions, healthcare foundations, and environmental organisations across Mumbai increasingly choose Section 8 for its credibility with government grant agencies like NITI Aayog, CSR funders, and foreign philanthropic foundations. A CA-managed registration ensures the MOA objects are drafted to satisfy both the Regional Director's licence requirements and the Income Tax Department's 12AB/80G eligibility criteria simultaneously.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Section 8 Company Registration in Mumbai:</strong></p>
                    <p><strong>Section 8 Company:</strong> A non-profit company under the Companies Act 2013 that prohibits dividend distribution and applies all profits towards charitable objects.</p>
                    <p><strong>Form INC-12:</strong> Application for licence to Regional Director containing draft MOA, AOA, projected financials, and director declarations.</p>
                    <p><strong>12AB Registration:</strong> Income tax exemption registration for the organisation under Section 12AB of the IT Act 1961.</p>
                    <p><strong>80G Registration:</strong> Registration enabling donors to claim 50% tax deduction on contributions under Section 80G of the IT Act.</p>
                    <p><strong>Regional Director (Western Region):</strong> Senior MCA official at CGO Complex, CBD Belapur, Navi Mumbai who examines and grants Section 8 licences for Maharashtra.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Section 8 Company Registration in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>MCA Regulated</span>
                        <strong>Non-Profit Company</strong>
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
            <h2 class="section-title">Who Needs Section 8 Company Registration in Mumbai</h2>
            <div class="content-text">
                
                <p>Section 8 company registration in Mumbai is ideal for organisations planning to operate at scale with institutional funding, corporate governance, and long-term sustainability. CSR arms of Mumbai corporates at BKC and Nariman Point that want to establish in-house foundations choose Section 8 for direct control over social spending under Section 135 of the Companies Act 2013. These corporate foundations receive and deploy crores in CSR funds annually.</p>
                <p>Educational institutions establishing scholarship funds, schools, or skill development centres in Mumbai's underserved areas like Dharavi, Govandi, and Mankhurd benefit from Section 8's credibility with government education grants. Healthcare foundations at Parel and Worli running hospitals, clinics, or public health programmes prefer Section 8 for its ability to attract foreign donations after FCRA registration - a process that is significantly easier for MCA-regulated companies than for trusts or societies.</p>
                <p>Social enterprises at Lower Parel and Powai working on urban sustainability, waste management, or clean energy in Mumbai use Section 8 to access impact investment and blended finance structures. NRIs funding social initiatives in Mumbai from abroad find Section 8 companies more familiar and trustworthy than the trust or society structure, given the corporate governance parallels. Religious and cultural organisations seeking structured governance and transparent financial reporting also choose Section 8 over trusts for long-term institutional stability.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 8 Registration Services Included in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DSC and DIN Procurement</td><td>Class 3 Digital Signature Certificates and Director Identification Numbers for all proposed directors via the MCA portal.</td></tr>
                        <tr><td>Name Reservation (SPICe+ Part A)</td><td>Reserve a unique non-profit name (Foundation, Association, Forum, Institute). Patron checks MCA and trademark databases before filing.</td></tr>
                        <tr><td>MOA and AOA Drafting</td><td>CA-drafted MOA with charitable objects aligned to both Regional Director licence criteria and IT Department 12AB/80G eligibility. AOA with governance rules and profit prohibition clauses.</td></tr>
                        <tr><td>Licence Application (INC-12)</td><td>File Form INC-12 with Regional Director (Western Region) at CBD Belapur, Navi Mumbai. Includes projected financials, INC-14, INC-15, and subscriber affidavits.</td></tr>
                        <tr><td>SPICe+ Incorporation</td><td>File SPICe+ Part B with RoC Mumbai (Everest Building, Marine Drive) after licence approval. No stamp duty for Section 8. AGILE-PRO-S for GST/EPFO/ESIC.</td></tr>
                        <tr><td>12AB Registration</td><td>Application under Section 12AB of IT Act for income tax exemption. Filed on <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a>. Provisional registration valid for 5 years.</td></tr>
                        <tr><td>80G Registration</td><td>Application under Section 80G enabling donors to claim 50% tax deduction. Critical for attracting CSR funding from BKC and Nariman Point corporates.</td></tr>
                        <tr><td>FCRA Planning</td><td>Strategic guidance for FCRA registration under FCRA Act 2010 after 3 years. Section 8 companies have stronger FCRA applications than trusts or societies.</td></tr>
                        <tr><td>CSR Funding Readiness</td><td>Compliance documentation package meeting CSR due diligence standards - 12AB certificate, 80G certificate, audited financials, NGO Darpan, and project proposal templates.</td></tr>

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
            <h2 class="section-title">6-Step Section 8 Company Registration Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting manages the entire Section 8 registration process from DSC procurement to 12AB/80G filing. The licence application (INC-12) is filed with the Regional Director at CBD Belapur, Navi Mumbai, and incorporation (SPICe+) is with RoC Mumbai at Marine Drive. No physical visit by founders is required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Obtain DSC and Reserve Company Name</h3>
                    <p class="step-description">Every proposed director obtains a Class 3 DSC from a licensed Certifying Authority. File SPICe+ Part A on the MCA portal to reserve the company name. The name must clearly reflect non-profit character - words like Foundation, Association, Forum, or Institute are commonly used. RoC Mumbai processes the name reservation. Patron checks name availability across MCA and IP India trademark databases before filing.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Class 3 DSC for all directors</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MCA + Trademark check</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="25" y="20" width="40" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                <line x1="25" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <line x1="25" y1="52" x2="75" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <circle cx="85" cy="22" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                                <path d="M81 22l3 3 5-5" stroke="#25D366" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">DSC Ready</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Draft MOA, AOA, and Prepare Licence Documents</h3>
                    <p class="step-description">Patron's CA team drafts the MOA with charitable objects aligned to both the Regional Director's licence criteria and the IT Department's 12AB/80G eligibility requirements. The AOA defines governance rules, board composition, and profit prohibition clauses. Additionally, prepare projected income and expenditure statements for 3 financial years, director declarations in INC-14 and INC-15, and affidavits from each subscriber.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual MCA + IT alignment</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-year financial projections</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="5" width="50" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="60" y="15" width="50" height="70" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                                <line x1="20" y1="22" x2="50" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="20" y1="34" x2="45" y2="34" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                                <line x1="20" y1="44" x2="48" y2="44" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                                <line x1="70" y1="32" x2="100" y2="32" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                                <line x1="70" y1="44" x2="95" y2="44" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                                <text x="35" y="60" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MOA</text>
                                <text x="85" y="70" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOA</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Docs Drafted</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Apply for Licence with Regional Director (Form INC-12)</h3>
                    <p class="step-description">File Form INC-12 with the Regional Director (Western Region) at CGO Complex, CBD Belapur, Navi Mumbai 400614. The application includes the draft MOA and AOA, projected financials, director declarations, and a statement explaining how the company's objects will benefit the public. The Regional Director examines the application and upon satisfaction issues the licence in Form INC-16. This step typically takes 15-20 working days.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed with Regional Director</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15-20 days processing</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M15 12L60 2L105 12" stroke="#14365F" stroke-width="1.5" fill="#E8EDF4"/>
                                <rect x="35" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                                <rect x="55" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                                <rect x="75" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                                <rect x="50" y="48" width="20" height="18" rx="8" fill="#14365F" opacity="0.15"/>
                                <text x="60" y="82" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-12</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Licence Filed</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">File SPICe+ Part B for Incorporation with RoC Mumbai</h3>
                    <p class="step-description">Once the licence (INC-16) is received, file SPICe+ Part B with RoC Mumbai (Everest Building, Marine Drive). Attach the licence, e-MOA, e-AOA, director details, registered office address in Mumbai, and AGILE-PRO-S for integrated GST/EPFO/ESIC registration. Section 8 companies are exempt from stamp duty on MOA and AOA - a major cost saving compared to Pvt Ltd in Maharashtra where stamp duty exceeds Rs 8,000.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zero stamp duty</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RoC Mumbai filing</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M40 35L55 50L85 20" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <rect x="30" y="60" width="60" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                                <text x="60" y="69" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Incorporation</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Receive COI, PAN, TAN, and Complete Post-Incorporation</h3>
                    <p class="step-description">Certificate of Incorporation is issued digitally by RoC Mumbai. PAN and TAN are allotted simultaneously. File INC-20A (commencement of business) within 180 days. Appoint the first auditor within 30 days. Hold the first board meeting within 30 days. Open a current account with a Mumbai bank branch. Patron initiates 12AB and 80G applications immediately after incorporation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital COI + PAN/TAN</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>INC-20A within 180 days</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="5" width="80" height="60" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <circle cx="60" cy="30" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                                <path d="M52 30l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/>
                                <rect x="35" y="52" width="50" height="8" rx="3" fill="#14365F" opacity="0.1"/>
                                <text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COI Issued</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Certificate Ready</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Apply for 12AB, 80G, NGO Darpan, and Set Up Compliance</h3>
                    <p class="step-description">File Form 10A on incometax.gov.in for provisional 12AB registration (valid 5 years). Apply for 80G registration to enable donor tax deductions. Register on NGO Darpan (ngodarpan.gov.in) for government grant eligibility. Patron sets up the annual compliance calendar: board meetings, AOC-4, MGT-7 with RoC Mumbai, statutory audit, ITR-7, and CSR-1 registration. For organisations planning foreign donations, we begin FCRA readiness documentation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12AB + 80G filing</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual compliance setup</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="45" height="35" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                                <text x="32" y="32" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12AB</text>
                                <rect x="65" y="10" width="45" height="35" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                                <text x="88" y="32" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">80G</text>
                                <rect x="20" y="55" width="80" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                                <text x="60" y="74" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Compliance Calendar</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Tax Exempt</span>
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
            <h2 class="section-title">Documents Required for Section 8 Registration in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li>PAN card of all directors and members - mandatory for MCA filings</li>
                    <li>Aadhaar card of all directors - eKYC verification on MCA portal</li>
                    <li>Bank statement or mobile bill (not older than 2 months) - address proof for directors/members</li>
                    <li>Passport-size photograph of all directors - white background</li>
                    <li>Registered office proof - utility bill (not older than 2 months) and NOC from owner if rented</li>
                    <li>Projected income and expenditure for 3 financial years - required for Form INC-12 licence application</li>
                    <li>Declaration by each director in Form INC-14 - affirming the objects are charitable</li>
                    <li>Declaration in Form INC-15 - from a CA/CS/advocate verifying the draft MOA complies with Section 8</li>
                    <li>Affidavit from each subscriber - confirming non-profit intent</li>
                    <li>For NRI/Foreign directors - apostilled passport and foreign address proof</li>
                </ul>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Mumbai-specific tip:</strong> The Regional Director (Western Region) at CBD Belapur may request additional clarifications on the projected financials or objects. Patron's CA team prepares these projections with realistic assumptions based on Mumbai's social sector landscape - ensuring the licence application is not returned for revision.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Section 8 Registration Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Licence Rejection by Regional Director</td><td>Vaguely worded or commercial-sounding MOA objects lead to licence return or rejection at CBD Belapur</td><td>CA-drafted MOA with legal precision to pass both Regional Director and IT Department scrutiny on first submission</td></tr>
                        <tr><td>12AB/80G Rejection Due to MOA Misalignment</td><td>MOA objects not drafted with IT compliance lead to exemption rejection post-incorporation</td><td>Dual-alignment approach - MOA satisfies both MCA licence and IT Department 12AB/80G criteria simultaneously</td></tr>
                        <tr><td>Unrealistic Financial Projections</td><td>Poorly prepared projections trigger queries from Regional Director, delaying licence</td><td>Conservative, well-reasoned projections based on comparable Mumbai NGOs prepared by CA team</td></tr>
                        <tr><td>Post-Incorporation Compliance Burden</td><td>Section 8 requires full Companies Act compliance - board meetings, AGM, AOC-4, MGT-7, audit, ITR-7</td><td>Integrated annual compliance management as a single service - no vendor fragmentation</td></tr>
                        <tr><td>CSR-1 Registration Gap</td><td>Missing CSR-1 registration causes CSR disbursement delays from Mumbai corporates</td><td>CSR-1 registration included in post-incorporation checklist for every Mumbai Section 8 company</td></tr>

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
            <h2 class="section-title">Section 8 Registration Fees in Mumbai - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>SPICe+ Part A (Name Reservation)</td><td>Rs 1,000 (Government Fee)</td></tr>
                        <tr><td>INC-12 (Licence Application)</td><td>Rs 2,000 (Government Fee)</td></tr>
                        <tr><td>SPICe+ Part B (Incorporation)</td><td>Rs 0 (No stamp duty for Section 8)</td></tr>
                        <tr><td>PAN + TAN</td><td>Rs 143 (Government Fee)</td></tr>
                        <tr><td>DSC (2 Directors)</td><td>Rs 500-1,500 per DSC</td></tr>
                        <tr><td>MOA/AOA Drafting</td><td>Included (CA-drafted)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>12AB Registration (Separate)</td><td>Rs 5,000-7,000</td></tr>
                        <tr><td>80G Registration (Separate)</td><td>Rs 5,000-7,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Section 8 Company Registration in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20a%20Section%208%20company%20in%20Mumbai.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 8 Registration Timeline in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DSC + Name Reservation</td><td>3-5 days</td></tr>
                        <tr><td>MOA/AOA Drafting + INC-12 Preparation</td><td>3-5 days</td></tr>
                        <tr><td>Regional Director Licence (CBD Belapur)</td><td>15-20 days</td></tr>
                        <tr><td>SPICe+ Part B + COI (RoC Mumbai)</td><td>7-10 days</td></tr>
                        <tr><td>12AB + 80G Applications</td><td>15-30 days each (post-incorporation)</td></tr>
                        <tr><td><strong>Total (Incorporation)</strong></td><td><strong>30-45 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> The Regional Director licence (15-20 days) is the longest step. Post-licence, RoC Mumbai processes incorporation in 7-10 days. Patron follows up with both offices to minimise delays.</p>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- ROC FEE CALCULATOR - injected by citywise-html-v1 skill -->
<section style="padding:0;">
<!-- 
  ROC Fee Calculator V2 - Embeddable Widget for Patron Accounting Service Pages
  Blade-ready version (no DOCTYPE/html/head/body).
  CSS is scoped under .roc-widget class.
  JS functions are prefixed with roc* to avoid global conflicts.
-->

<style>
/* === ROC CALCULATOR WIDGET - NAMESPACED UNDER .roc-widget === */
.roc-widget {
  --bg: #f8fafc;
  --surface: #ffffff;
  --border: #e2e8f0;
  --border-hover: #cbd5e1;
  
  --primary: #4f46e5; /* Indigo */
  --primary-hover: #4338ca;
  --primary-light: #e0e7ff;
  
  --success: #10b981; /* Emerald */
  --success-light: #d1fae5;
  
  --accent: #f59e0b; /* Amber */
  --accent-light: #fef3c7;
  
  --text-main: #0f172a;
  --text-muted: #64748b;
  --text-light: #94a3b8;
  
  --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

.roc-widget {
  font-family: 'Inter', sans-serif;
  background: var(--bg);
  color: var(--text-main);
  min-height: auto;
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}

.roc-widget .wrap { max-width: 1100px; margin: 0 auto; padding: 0 20px 80px; }

/* ─ HEADER ─ */
.roc-widget header {
  padding: 60px 0 40px;
  text-align: center;
}
.roc-widget .badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 100px; padding: 6px 16px;
  font-size: 11px; font-weight: 600; letter-spacing: 0.05em;
  text-transform: uppercase; color: var(--text-main); margin-bottom: 20px;
  box-shadow: var(--shadow-sm);
}
.roc-widget .dot { width: 8px; height: 8px; background: var(--success); border-radius: 50%; }
.roc-widget header h1 {
  font-family: 'Outfit', sans-serif;
  font-size: clamp(32px, 5vw, 48px); font-weight: 800; line-height: 1.1;
  color: var(--text-main); letter-spacing: -0.02em; margin-bottom: 12px;
}
.roc-widget header h1 em { font-style: normal; color: var(--primary); }
.roc-widget header p { font-size: 15px; color: var(--text-muted); }
.roc-widget .patron-tag {
  font-size: 14px; color: var(--text-muted); margin-top: 12px;
}
.roc-widget .patron-tag strong { color: var(--primary); font-weight: 700; }

/* ─ LAYOUT ─ */
.roc-widget .grid-2 { display: grid; grid-template-columns: 1fr 1.2fr; gap: 30px; align-items: start; }

/* ─ CARD ─ */
.roc-widget .card {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 20px;
  box-shadow: var(--shadow-md);
}
.roc-widget .card-hdr {
  padding: 24px 30px; border-bottom: 1px solid var(--border);
  background: #f8fafc;
  display: flex; align-items: center; gap: 12px;
}
.roc-widget .card-hdr h3 { font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: var(--text-main); }
.roc-widget .card-hdr .ico {
  width: 36px; height: 36px; border-radius: 10px;
  background: #ffffff; border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center; font-size: 16px;
  box-shadow: var(--shadow-sm);
}
.roc-widget .card-body { padding: 30px; }

/* ─ FORM ─ */
.roc-widget .field { margin-bottom: 24px; }
.roc-widget .field:last-child { margin-bottom: 0; }
.roc-widget label {
  display: block; font-size: 12px; font-weight: 600; 
  text-transform: uppercase; color: var(--text-muted); margin-bottom: 8px; 
  letter-spacing: 0.05em;
}

.roc-widget select, .roc-widget input[type=number] {
  width: 100%; background: #ffffff; border: 1px solid var(--border);
  border-radius: 12px; color: var(--text-main); font-family: 'Inter', sans-serif;
  font-size: 15px; font-weight: 500; padding: 12px 16px; outline: none;
  transition: all 0.2s; box-shadow: var(--shadow-sm);
  -webkit-appearance: none;
}
.roc-widget select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='7' viewBox='0 0 10 7'%3E%3Cpath d='M1 1l4 4 4-4' stroke='%2364748b' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
  background-repeat: no-repeat; background-position: right 16px center; padding-right: 40px; cursor:pointer;
}
.roc-widget select:focus, .roc-widget input:focus {
  border-color: var(--primary); 
  box-shadow: 0 0 0 3px var(--primary-light); 
}

.roc-widget .seg { display: grid; gap: 8px; }
.roc-widget .seg.c2 { grid-template-columns: 1fr 1fr; }
.roc-widget .seg.c3 { grid-template-columns: 1fr 1fr 1fr; }
.roc-widget .seg-btn {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 10px; color: var(--text-muted); font-family: 'Inter', sans-serif;
  font-size: 13px; font-weight: 600; padding: 10px 8px; cursor: pointer;
  transition: all 0.2s; text-align: center; box-shadow: var(--shadow-sm);
}
.roc-widget .seg-btn.on {
  background: var(--primary); border-color: var(--primary); 
  color: #ffffff; box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3); 
}
.roc-widget .seg-btn:hover:not(.on) { border-color: var(--border-hover); color: var(--text-main); }

.roc-widget .stepper {
  display: flex; align-items: center; gap: 10px;
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 12px; padding: 6px 6px 6px 16px; box-shadow: var(--shadow-sm);
}
.roc-widget .stepper span { flex:1; font-family: 'JetBrains Mono', monospace; font-size: 16px; font-weight: 600; color: var(--text-main); }
.roc-widget .st-btn {
  width: 36px; height: 36px; background: var(--bg); border: 1px solid var(--border);
  border-radius: 8px; color: var(--text-main); font-size: 20px; cursor: pointer; line-height:1;
  display: flex; align-items: center; justify-content: center; transition: all 0.2s;
}
.roc-widget .st-btn:hover { background: var(--border); }

/* ─ RESULTS ─ */
.roc-widget .res-state {
  font-size: 12px; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;
  color: var(--primary); margin-bottom: 4px; display: flex; align-items: center; gap: 8px;
}
.roc-widget .res-title { font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; color: var(--text-main); margin-bottom: 0; }

.roc-widget .section-lbl {
  font-size: 11px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
  color: var(--text-light); padding: 20px 0 10px;
  display: flex; align-items: center; gap: 12px;
}
.roc-widget .section-lbl::after { content:''; flex:1; height:1px; background: var(--border); }

.roc-widget .fee-row {
  display: flex; justify-content: space-between; align-items: center;
  padding: 12px 0; border-bottom: 1px dashed var(--border); gap: 10px;
}
.roc-widget .fee-row:last-of-type { border-bottom: none; }
.roc-widget .fee-row .lbl { font-size: 14px; font-weight: 500; color: var(--text-main); flex: 1; }
.roc-widget .fee-row .tag {
  font-size: 10px; font-weight: 700; letter-spacing: 0.05em;
  border-radius: 6px; padding: 4px 8px; text-transform: uppercase; white-space: nowrap;
}
.roc-widget .tag-mca { background: #e0f2fe; color: #0284c7; }
.roc-widget .tag-state { background: #fef3c7; color: #d97706; }
.roc-widget .tag-prof { background: #f3e8ff; color: #9333ea; }
.roc-widget .tag-tax { background: #fee2e2; color: #dc2626; }

.roc-widget .fee-row .amt {
  font-family: 'JetBrains Mono', monospace; font-size: 14px; font-weight: 600;
  color: var(--text-main); white-space: nowrap;
}
.roc-widget .fee-row.dimmed { opacity: 0.4; text-decoration: line-through; }

.roc-widget .subtotal {
  display: flex; justify-content: space-between; align-items: center;
  padding: 16px; margin: 12px 0; background: #f8fafc;
  border: 1px solid var(--border); border-radius: 12px;
}
.roc-widget .subtotal .lbl { font-size: 12px; font-weight: 700; text-transform: uppercase; color: var(--text-muted); }
.roc-widget .subtotal .amt { font-family: 'JetBrains Mono', monospace; font-size: 15px; font-weight: 700; color: var(--text-main); }

/* ─ GRAND TOTAL ─ */
.roc-widget .grand {
  margin: 24px 0 0; padding: 30px;
  background: linear-gradient(135deg, var(--primary), #3b82f6);
  border-radius: 20px; position: relative; overflow: hidden; color: #ffffff;
  box-shadow: var(--shadow-lg);
}
.roc-widget .grand::before {
  content: '₹'; position: absolute; right: 10px; bottom: -30px;
  font-family: 'Outfit', sans-serif; font-size: 150px; font-weight: 800;
  color: rgba(255,255,255,0.1); line-height: 1; pointer-events: none;
}
.roc-widget .grand .gt-lbl { font-size: 12px; font-weight: 700; letter-spacing: 0.1em;
  text-transform: uppercase; color: var(--primary-light); margin-bottom: 8px; }
.roc-widget .grand .gt-amt {
  font-family: 'Outfit', sans-serif; font-size: 48px; font-weight: 800;
  letter-spacing: -0.02em; line-height: 1; margin-bottom: 8px;
}
.roc-widget .grand .gt-note { font-size: 13px; color: var(--primary-light); opacity: 0.9; }

.roc-widget .gt-split { display: flex; gap: 12px; margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.2); }
.roc-widget .gt-part {
  flex:1; padding: 12px; background: rgba(0,0,0,0.15);
  border-radius: 12px; backdrop-filter: blur(4px);
}
.roc-widget .gt-part .p-lbl { font-size: 10px; font-weight: 700; letter-spacing: 0.05em;
  text-transform: uppercase; color: rgba(255,255,255,0.7); margin-bottom: 4px; }
.roc-widget .gt-part .p-amt { font-family: 'JetBrains Mono', monospace; font-size: 15px; font-weight: 600; color: #ffffff; }

/* ─ AOA NOTE ─ */
.roc-widget .aoa-note {
  margin-top: 16px; padding: 14px 16px;
  background: #fffbeb; border-left: 4px solid var(--accent);
  border-radius: 8px; font-size: 13px; color: #b45309; line-height: 1.5;
}
.roc-widget .aoa-note strong { color: #92400e; font-weight: 700; }

/* ─ MOBILE RESPONSIVENESS ─ */
@media(max-width: 850px) {
  .wrap { padding: 0 16px 40px; }
  .roc-widget .grid-2 { grid-template-columns: 1fr; gap: 20px; }
  .roc-widget header { padding: 40px 0 20px; }
  .roc-widget header h1 { font-size: 32px; }
  .roc-widget .card-hdr { padding: 16px 20px; }
  .roc-widget .card-body { padding: 20px; }
  
  /* Stack 3-column buttons into 2 columns for better touch targets */
  .roc-widget .seg.c3 { grid-template-columns: 1fr 1fr; }
  
  .roc-widget .grand { padding: 24px 20px; }
  .roc-widget .grand .gt-amt { font-size: 36px; }
  
  /* Stack the split totals vertically on small screens */
  .roc-widget .gt-split { flex-direction: column; gap: 8px; }
}

/* ─ TOOLTIP / INFO BUTTON ─ */
.roc-widget .info-wrap {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  position: static;
}
.roc-widget .info-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: rgba(232,93,4,0.12);
  border: 1px solid rgba(232,93,4,0.35);
  color: var(--primary, #e85d04);
  font-size: 10px;
  font-weight: 700;
  font-style: normal;
  cursor: pointer;
  line-height: 1;
  flex-shrink: 0;
  transition: background .18s, border-color .18s;
  user-select: none;
  vertical-align: middle;
  font-family: serif;
}
.roc-widget .info-btn:hover {
  background: var(--primary, #e85d04);
  color: #fff;
  border-color: var(--primary, #e85d04);
}
/* Tooltip rendered as fixed so it escapes overflow:hidden on any parent */
.roc-widget .tooltip-box {
  display: none;
  position: fixed;
  z-index: 9999;
  width: 300px;
  background: #fff;
  border: 1.5px solid rgba(232,93,4,0.22);
  border-radius: 12px;
  padding: 14px 16px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.14), 0 2px 8px rgba(232,93,4,0.1);
  font-family: 'Plus Jakarta Sans', 'Outfit', 'IBM Plex Sans', sans-serif;
  pointer-events: none;
}
.roc-widget .tooltip-box.visible {
  display: block;
  animation: tooltipIn .15s ease;
}
.roc-widget @keyframes tooltipIn {
  .roc-widget from { opacity: 0; transform: translateY(5px); }
  .roc-widget to { opacity: 1; transform: translateY(0); }
}
  .roc-widget to { opacity: 1; transform: translateY(0); }
}
.roc-widget .tt-title {
  font-size: 12px;
  font-weight: 600;
  color: var(--primary, #e85d04);
  margin-bottom: 8px;
  letter-spacing: .01em;
}
.roc-widget .tt-body {
  font-size: 12px;
  font-weight: 400;
  color: #5a3a20;
  line-height: 1.7;
}
.roc-widget .tt-body b { font-weight: 600; color: #3a2010; }
.roc-widget .tt-body ul {
  margin: 8px 0 0 0;
  padding-left: 16px;
}
.roc-widget .tt-body ul li {
  margin-bottom: 5px;
  font-weight: 400;
  color: #5a3a20;
}
.roc-widget .tt-alert {
  margin-top: 10px;
  padding: 9px 11px;
  background: #fff8f0;
  border-left: 3px solid var(--primary, #e85d04);
  border-radius: 0 7px 7px 0;
  font-size: 11.5px;
  font-weight: 400;
  color: #7a3000;
  line-height: 1.65;
}
.roc-widget .tt-alert b { font-weight: 600; color: #c94d02; }
</style>

<!-- ROC Calculator Section -->
<section id="roc-calculator" class="roc-widget" style="margin:60px 0;padding:0;">
<div class="wrap">

<header>
  <div class="badge"><span class="dot"></span> Official MCA Rates 2026</div>
  <h2 style="font-family:'Outfit', sans-serif; font-size: clamp(32px, 5vw, 48px); font-weight: 800; line-height: 1.1; color: var(--text-main); letter-spacing: -0.02em; margin-bottom: 12px;">ROC <em>Fee Calculator</em></h2>
  <p class="patron-tag">Powered by <strong>Patron Accounting</strong></p>
</header>

<div class="grid-2">

  <div class="card">
    <div class="card-hdr"><span class="ico">⚙️</span><h3>Company Details</h3></div>
    <div class="card-body">

      <div class="field">
        <label>State / Union Territory</label>
        <select id="stateSelect" onchange="rocCalc()"></select>
      </div>

      <div class="field">
        <label>Company Type</label>
        <div class="seg c3">
          <button class="seg-btn on" data-ct="pvt" onclick="rocSetCT(this)">Private Ltd</button>
          <button class="seg-btn" data-ct="pub" onclick="rocSetCT(this)">Public Ltd</button>
          <button class="seg-btn" data-ct="opc" onclick="rocSetCT(this)">OPC</button>
          <button class="seg-btn" data-ct="small" onclick="rocSetCT(this)">Small Co.</button>
          <button class="seg-btn" data-ct="sec8" onclick="rocSetCT(this)">Section 8</button>
          <button class="seg-btn" data-ct="nocap" onclick="rocSetCT(this)">No Share Cap</button>
        </div>
      </div>

      <div class="field" id="authCapField">
        <label>Authorised Capital (₹)</label>
        <input type="number" id="authCap" value="100000" min="0" step="10000" oninput="rocCalc()">
      </div>

      <div class="field" id="paidCapField">
        <label>Paid-up Capital (₹) <span style="font-weight:400; text-transform:none; color:var(--text-light);">(for INC-20A fee)</span></label>
        <input type="number" id="paidCap" value="100000" min="0" step="10000" oninput="rocCalc()">
      </div>

      <div class="field">
        <label>
  <span class="info-wrap">
    Number of DSC Required
    <span class="info-btn" onclick="rocToggleTip(event,'tip-dsc')" title="What is DSC?">i</span>
    <div class="tooltip-box" id="tip-dsc">
      <div class="tt-title">How many DSCs do I need?</div>
      <div class="tt-body">
        Every proposed <b>Director</b> and <b>Shareholder</b> must have their own <b>Class 3 Digital Signature Certificate (DSC)</b> to legally sign the incorporation documents. If an individual acts as both a Director and a Shareholder, they only need <b>one DSC</b>.
        <ul>
          <li><b>Private Limited Company</b> — Minimum 2 DSCs (for 2 individuals)</li>
          <li><b>One Person Company (OPC)</b> — Minimum 1 DSC</li>
        </ul>
      </div>
    </div>
  </span>
</label>
        <div class="stepper">
          <span id="dscLbl">2</span>
          <button class="st-btn" onclick="rocDsc(-1)">−</button>
          <button class="st-btn" onclick="rocDsc(+1)">+</button>
        </div>
      </div>

      <div class="field">
        <label>
  <span class="info-wrap">
    ADT-1 — Auditor Appointment
    <span class="info-btn" onclick="rocToggleTip(event,'tip-adt')" title="What is ADT-1?">i</span>
    <div class="tooltip-box" id="tip-adt">
      <div class="tt-title">Should I include Form ADT-1?</div>
      <div class="tt-body">
        <b>Yes — we strongly recommend keeping this as "Yes".</b><br><br>
        Every new company is legally required to appoint its first Statutory Auditor within <b>30 days of incorporation</b>.
        <div class="tt-alert">
          ⚠️ Under the latest <b>MCA amendment effective July 14, 2025</b>, filing Form ADT-1 is now <b>strictly mandatory</b>. Missing the <b>15-day filing deadline</b> will result in <b>daily multiplying penalties</b>.
        </div>
      </div>
    </div>
  </span>
</label>
        <div class="seg c2">
          <button class="seg-btn on" data-adt="yes" onclick="rocSetADT(this)">Yes</button>
          <button class="seg-btn" data-adt="no" onclick="rocSetADT(this)">No</button>
        </div>
      </div>

    </div></div><div class="card">
    <div class="card-hdr">
      <span class="ico">📊</span>
      <div>
        <div class="res-state"><span class="dot"></span><span id="rs_state">Select a State</span></div>
        <div class="res-title">Fee Breakdown</div>
      </div>
    </div>
    <div class="card-body" id="resultBody">

      <div class="section-lbl">Government Fees — Reimbursable</div>

      <div class="fee-row" id="row_inc">
        <span class="lbl">State Stamp on INC Form</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_inc">—</span>
      </div>
      <div class="fee-row" id="row_moa">
        <span class="lbl">MoA Stamp Duty</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_moa">—</span>
      </div>
      <div class="fee-row" id="row_aoa">
        <span class="lbl">AoA Stamp Duty</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_aoa">—</span>
      </div>
      <div class="fee-row" id="row_run">
        <span class="lbl">Name Reservation (RUN/SPICe+)</span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_run">₹1,000</span>
      </div>
      <div class="fee-row" id="row_20a">
        <span class="lbl">INC-20A — Commencement <span style="font-size:11px; color:var(--text-light); font-weight:400;">(mandatory)</span></span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_20a">—</span>
      </div>
      <div class="fee-row" id="row_adt">
        <span class="lbl">ADT-1 — Auditor Appointment</span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_adt">—</span>
      </div>
      <div class="fee-row" id="row_pantan">
        <span class="lbl">PAN + TAN Application</span>
        <span class="tag tag-mca">Govt</span>
        <span class="amt" id="v_pantan">₹143</span>
      </div>

      <div class="subtotal">
        <span class="lbl">Total Reimbursable Govt Fees</span>
        <span class="amt" id="v_subtotal_gov">—</span>
      </div>

      <div class="section-lbl">Professional &amp; Service Fees</div>

      <div class="fee-row">
        <span class="lbl">DSC (<span id="dsc_lbl2">2</span> unit × ₹1,750)</span>
        <span class="tag tag-prof">DSC</span>
        <span class="amt" id="v_dsc">—</span>
      </div>
      <div class="fee-row">
        <span class="lbl">Professional Fees</span>
        <span class="tag tag-prof">Prof</span>
        <span class="amt" id="v_prof">—</span>
      </div>
      <div class="fee-row">
        <span class="lbl">GST on Fees (18%)</span>
        <span class="tag tag-tax">Tax</span>
        <span class="amt" id="v_gstonf">—</span>
      </div>

      <div class="subtotal">
        <span class="lbl">Total Service Fees</span>
        <span class="amt" id="v_subtotal_svc">—</span>
      </div>

      <div class="aoa-note" id="aoaNote" style="display:none">
        <strong>AoA Stamp Rule:</strong> <span id="aoaRuleText"></span>
      </div>

      <div class="grand">
        <div class="gt-lbl">Grand Total Cost</div>
        <div class="gt-amt" id="v_grand">₹ 0.00</div>
        <div class="gt-note" id="v_grand_note">Select a state and fill inputs above</div>
        <div class="gt-split">
          <div class="gt-part">
            <div class="p-lbl">Reimbursable Govt</div>
            <div class="p-amt" id="gt_reimb">—</div>
          </div>
          <div class="gt-part">
            <div class="p-lbl">Professional & Tax</div>
            <div class="p-amt" id="gt_svc">—</div>
          </div>
        </div>
      </div>

    </div></div></div></div>
</section>

<script>
// === ROC CALCULATOR WIDGET JS ===
// Functions prefixed with roc* to avoid conflicts with host page.
// NOT wrapped in IIFE so inline onclick/onchange handlers can find them.
// ═══════════════════════════════════════════════════════════════════════════
// STATE DATA — sourced from MCA eStamp Rate Schedule (official PDF)
// Fields: incStamp (state), moa, aoa_fn(authCap), aoa_rule,
//         moa_sec8, aoa_sec8_fn, incStamp_sec8
//         moa_nocap, aoa_nocap
// ═══════════════════════════════════════════════════════════════════════════
const STATES = [
{
  name: "Andaman & Nicobar",
  incStamp: 20, incStamp_sec8: 20,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300,   aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Andhra Pradesh",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of authorised capital; min ₹1,000; max ₹5,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000), // sec8 WITH share cap same as regular
  aoa_nocap_fn: c => 1000,
},
{
  name: "Arunachal Pradesh",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 200, moa_nocap: 200,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500",
  aoa_sec8_fn: c => 500, aoa_nocap_fn: c => 500,
},
{
  name: "Assam",
  incStamp: 15, incStamp_sec8: 15,
  moa: 200, moa_sec8: 200, moa_nocap: 200,
  aoa_fn: c => 310, aoa_rule: "Fixed ₹310",
  aoa_sec8_fn: c => 310, aoa_nocap_fn: c => 310,
},
{
  name: "Bihar",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Chandigarh",
  incStamp: 3, incStamp_sec8: 3,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 1000, aoa_rule: "Fixed ₹1,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Chhattisgarh",
  incStamp: 10, incStamp_sec8: 10,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Dadra & Nagar Haveli",
  incStamp: 1, incStamp_sec8: 1,
  moa: 15, moa_sec8: 0, moa_nocap: 15,
  aoa_fn: c => 25, aoa_rule: "Fixed ₹25",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 25,
},
{
  name: "Daman & Diu",
  incStamp: 20, incStamp_sec8: 20,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => Math.ceil(c/500000)*1000,
  aoa_rule: "₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Delhi",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => Math.min(c*0.0015, 2500000),
  aoa_rule: "0.15% of authorised capital; maximum ₹25,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 200,
},
{
  name: "Goa",
  incStamp: 50, incStamp_sec8: 50,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => Math.ceil(c/500000)*1000,
  aoa_rule: "₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Gujarat",
  incStamp: 20, incStamp_sec8: 20,
  moa: 100, moa_sec8: 0, moa_nocap: 100,
  aoa_fn: c => Math.min(c*0.005, 500000),
  aoa_rule: "0.5% of authorised capital; maximum ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Haryana",
  incStamp: 15, incStamp_sec8: 15,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => c <= 100000 ? 60 : 120,
  aoa_rule: "₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 60,
},
{
  name: "Himachal Pradesh",
  incStamp: 3, incStamp_sec8: 3,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => c <= 100000 ? 60 : 120,
  aoa_rule: "₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 60,
},
{
  name: "Jammu & Kashmir",
  incStamp: 10, incStamp_sec8: 10,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => c <= 100000 ? 150 : 300,
  aoa_rule: "₹150 if auth. capital ≤ ₹1 Lakh; ₹300 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 150,
},
{
  name: "Jharkhand",
  incStamp: 5, incStamp_sec8: 5,
  moa: 63, moa_sec8: 0, moa_nocap: 63,
  aoa_fn: c => 105, aoa_rule: "Fixed ₹105",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 105,
},
{
  name: "Karnataka",
  incStamp: 20, incStamp_sec8: 20,
  moa: 1000, moa_sec8: 0, moa_nocap: 1000,
  aoa_fn: c => Math.max(Math.ceil(c/1000000)*500, 500),
  aoa_rule: "₹500 per every ₹10 Lakhs of authorised capital or part thereof; minimum ₹500",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 500,
},
{
  name: "Kerala",
  incStamp: 25, incStamp_sec8: 25,
  moa: 1000, moa_sec8: 1000, moa_nocap: 1000,
  aoa_fn: c => c<=1000000 ? 2000 : c<=2500000 ? 5000 : c*0.005,
  aoa_rule: "Auth. cap ≤₹10L → ₹2,000 | ₹10L–₹25L → ₹5,000 | >₹25L → 0.5% of auth. capital",
  aoa_sec8_fn: c => c<=1000000 ? 2000 : c<=2500000 ? 5000 : c*0.005,
  aoa_nocap_fn: c => 2000,
},
{
  name: "Lakshadweep",
  incStamp: 25, incStamp_sec8: 25,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => 1000, aoa_rule: "Fixed ₹1,000",
  aoa_sec8_fn: c => 1000, aoa_nocap_fn: c => 1000,
},
{
  name: "Madhya Pradesh",
  incStamp: 50, incStamp_sec8: 50,
  moa: 2500, moa_sec8: 2500, moa_nocap: 2500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 5000), 2500000),
  aoa_rule: "0.15% of authorised capital; minimum ₹5,000; maximum ₹25,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 5000), 2500000),
  aoa_nocap_fn: c => 5000,
},
{
  name: "Maharashtra",
  incStamp: 100, incStamp_sec8: 100,
  moa: 200, moa_sec8: 0, moa_nocap: 0,
  aoa_fn: c => Math.min(Math.ceil(c/500000)*1000, 5000000),
  aoa_rule: "₹1,000 per every ₹5 Lakhs of auth. capital or part thereof; max ₹50 Lakhs (no duty beyond ₹250 Cr)",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 0,
},
{
  name: "Manipur",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Meghalaya",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 300, aoa_nocap_fn: c => 300,
},
{
  name: "Mizoram",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Nagaland",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Odisha",
  incStamp: 10, incStamp_sec8: 10,
  moa: 300, moa_sec8: 300, moa_nocap: 300,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300 (applies to all company types)",
  aoa_sec8_fn: c => 300, aoa_nocap_fn: c => 300,
},
{
  name: "Puducherry",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Punjab",
  incStamp: 25, incStamp_sec8: 25,
  moa: 5000, moa_sec8: 0, moa_nocap: 5000,
  aoa_fn: c => c <= 100000 ? 5000 : 10000,
  aoa_rule: "₹5,000 if auth. capital ≤ ₹1 Lakh; ₹10,000 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 5000,
},
{
  name: "Rajasthan",
  incStamp: 10, incStamp_sec8: 10,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => c * 0.005,
  aoa_rule: "0.5% of authorised capital (no cap for initial registration)",
  aoa_sec8_fn: c => c * 0.005, // Sec8 WITH share capital: same
  aoa_nocap_fn: c => 500,
},
{
  name: "Tamil Nadu",
  incStamp: 20, incStamp_sec8: 20,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Telangana",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of authorised capital; minimum ₹1,000; maximum ₹5,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_nocap_fn: c => 1000,
},
{
  name: "Tripura",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Uttar Pradesh",
  incStamp: 10, incStamp_sec8: 0,  // Sec8 without share cap = NIL
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500 (applies to all incl. Sec8 with share capital)",
  aoa_sec8_fn: c => 0,  // Sec8 without share cap = NIL
  aoa_nocap_fn: c => 500,
},
{
  name: "Uttarakhand",
  incStamp: 10, incStamp_sec8: 0,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500 (applies to all incl. Sec8 with share capital)",
  aoa_sec8_fn: c => 0,
  aoa_nocap_fn: c => 500,
},
{
  name: "West Bengal",
  incStamp: 10, incStamp_sec8: 10,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
];

// ═══════════════════════════════════════════════════════════════════════════
// ROC REGISTRATION FEE — Companies (Registration Offices & Fees) Rules, 2014
// ═══════════════════════════════════════════════════════════════════════════
function rocCalcROCFee(authCap, companyType) {
  if (companyType === 'nocap') return 0; // no share capital → different fee structure (not computed here)

  const isOPCSmall = (companyType === 'opc' || companyType === 'small');

  if (isOPCSmall) {
    if (authCap <= 1000000) return 2000;
    const excess = Math.min(authCap, 5000000) - 1000000;
    return 2000 + Math.ceil(excess / 10000) * 200;
  }

  // Regular (Private, Public, Section 8 with share capital)
  if (authCap <= 100000) return 5000;

  let fee = 5000;
  // Slab 1: ₹1L to ₹5L → ₹400 per ₹10,000
  if (authCap > 100000) {
    const s1 = Math.min(authCap, 500000) - 100000;
    fee += Math.ceil(s1 / 10000) * 400;
  }
  // Slab 2: ₹5L to ₹50L → ₹300 per ₹10,000
  if (authCap > 500000) {
    const s2 = Math.min(authCap, 5000000) - 500000;
    fee += Math.ceil(s2 / 10000) * 300;
  }
  // Slab 3: ₹50L to ₹1Cr → ₹100 per ₹10,000
  if (authCap > 5000000) {
    const s3 = Math.min(authCap, 10000000) - 5000000;
    fee += Math.ceil(s3 / 10000) * 100;
  }
  // Slab 4: above ₹1Cr → ₹75 per ₹10,000; cap additional at ₹2.5 Cr
  if (authCap > 10000000) {
    const s4 = authCap - 10000000;
    const addlSoFar = fee - 5000;
    const remainCap = 25000000 - addlSoFar;
    fee += Math.min(Math.ceil(s4 / 10000) * 75, remainCap);
  }
  return fee;
}

// INC-20A fee — filing fee per Table of Fees section 5
function rocCalcINC20AFee(nominalCap) {
  if (nominalCap < 100000)   return 200;
  if (nominalCap < 500000)   return 300;
  if (nominalCap < 2500000)  return 400;
  if (nominalCap < 10000000) return 500;
  return 600;
}

// ADT-1 fee — same slab as section 5 filing fees
function rocCalcADTFee(nominalCap) {
  if (nominalCap < 100000)   return 200;
  if (nominalCap < 500000)   return 300;
  if (nominalCap < 2500000)  return 400;
  if (nominalCap < 10000000) return 500;
  return 600;
}

// ═══════════════════════════════════════════════════════════════════════════
// APP STATE
// ═══════════════════════════════════════════════════════════════════════════
let dscCount = 2, adtReq = true;
const inc20aReq = true; // always mandatory
let companyType = 'pvt', sortMode = 'grand';
const DSC_UNIT = 1750, PROF = 2999, GST_ON_FEES = 1439.82;

// Populate state select
const sel = document.getElementById('stateSelect');
sel.innerHTML = '<option value="">— Select a State —</option>';
STATES.forEach(s => {
  const o = document.createElement('option'); o.value = s.name; o.textContent = s.name; sel.appendChild(o);
});
sel.value = 'Maharashtra';

// ═══════════════════════════════════════════════════════════════════════════
// HELPERS
// ═══════════════════════════════════════════════════════════════════════════
function rocFmt(n) {
  if (n === null || isNaN(n)) return '—';
  return '₹ ' + n.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
}
function rocFmtShort(n) {
  if (n === null || isNaN(n) || n === 0) return '₹0';
  return '₹' + n.toLocaleString('en-IN', {maximumFractionDigits:0});
}

function rocSetCT(btn) {
  companyType = btn.dataset.ct;
  document.querySelectorAll('[data-ct]').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  rocCalc();
}
function rocSetADT(btn) {
  adtReq = btn.dataset.adt === 'yes';
  document.querySelectorAll('[data-adt]').forEach(b => b.classList.remove('on'));
  btn.classList.add('on'); rocCalc();
}
function rocDsc(d) {
  dscCount = Math.max(0, Math.min(10, dscCount+d));
  document.getElementById('dscLbl').textContent = dscCount;
  rocCalc();
}

function rocGetStampFees(s, authCap) {
  const isSec8 = companyType === 'sec8';
  const isNoCap = companyType === 'nocap';
  const inc = isSec8 ? s.incStamp_sec8 : s.incStamp;
  const moa = isNoCap ? s.moa_nocap : isSec8 ? s.moa_sec8 : s.moa;
  const aoa = isNoCap ? s.aoa_nocap_fn(authCap) : isSec8 ? s.aoa_sec8_fn(authCap) : s.aoa_fn(authCap);
  return { inc, moa, aoa };
}

// ═══════════════════════════════════════════════════════════════════════════
// MAIN CALCULATE
// ═══════════════════════════════════════════════════════════════════════════
function rocCalc() {
  const stateName = document.getElementById('stateSelect').value;
  const authCap = parseFloat(document.getElementById('authCap').value) || 0;
  const paidCap = parseFloat(document.getElementById('paidCap').value) || 0;
  const s = STATES.find(x => x.name === stateName);

  document.getElementById('dsc_lbl2').textContent = dscCount;

  if (!s) {
    document.getElementById('rs_state').textContent = 'Select a State';
    return;
  }

  document.getElementById('rs_state').textContent = s.name;

  const { inc, moa, aoa } = rocGetStampFees(s, authCap);
  const runFee    = 1000;
  const pantanFee = 143;
  const inc20aFee = companyType !== 'nocap' ? rocCalcINC20AFee(authCap) : 0;
  const adtFee    = adtReq ? rocCalcADTFee(authCap) : 0;

  const totalGovFees  = inc + moa + aoa + runFee + pantanFee + inc20aFee + adtFee;
  const dscFee        = dscCount * DSC_UNIT;
  const totalSvcFees  = dscFee + PROF + GST_ON_FEES;
  const grand         = totalGovFees + totalSvcFees;

  const set = (id, val) => { const el = document.getElementById(id); if (el) el.textContent = val; };
  const dim = (id, flag) => { const el = document.getElementById(id); if (el) el.classList.toggle('dimmed', flag); };

  set('v_inc',    inc > 0 ? rocFmt(inc) : '₹ NIL');
  set('v_moa',    moa > 0 ? rocFmt(moa) : '₹ NIL');
  set('v_aoa',    aoa > 0 ? rocFmt(aoa) : '₹ NIL');
  set('v_run',    rocFmt(runFee));
  set('v_20a',    companyType !== 'nocap' ? rocFmt(inc20aFee) : '₹ NIL');
  set('v_adt',    adtReq ? rocFmt(adtFee) : '₹ NIL');
  set('v_pantan', rocFmt(pantanFee));
  set('v_subtotal_gov', rocFmt(totalGovFees));

  set('v_dsc',    rocFmt(dscFee));
  set('v_prof',   rocFmt(PROF));
  set('v_gstonf', rocFmt(GST_ON_FEES));
  set('v_subtotal_svc', rocFmt(totalSvcFees));

  dim('row_20a', companyType === 'nocap');
  dim('row_adt',  !adtReq);

  set('v_grand', rocFmt(grand));
  set('v_grand_note', `${s.name} · ₹${(authCap/100000).toFixed(1)}L auth cap · ${dscCount} DSC${companyType!=='nocap'?' · INC-20A':''}`);
  set('gt_reimb', rocFmtShort(totalGovFees));
  set('gt_svc',   rocFmtShort(totalSvcFees));
  document.getElementById('aoaNote').style.display = 'block';
  document.getElementById('aoaRuleText').textContent = s.aoa_rule;
}

// ── INIT ──
rocCalc();

// ── TOOLTIP: fixed-position so it escapes overflow:hidden ──
function rocPositionTooltip(btn, box) {
  const r = btn.getBoundingClientRect();
  const tipW = 300;
  let left = r.left;
  // keep within viewport
  if (left + tipW > window.innerWidth - 12) left = window.innerWidth - tipW - 12;
  if (left < 8) left = 8;
  box.style.left = left + 'px';
  box.style.top  = (r.bottom + 8) + 'px';
}

function rocToggleTip(e, id) {
  e.stopPropagation();
  const box  = document.getElementById(id);
  const btn  = e.currentTarget;
  const isVis = box.classList.contains('visible');
  // close all
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
  if (!isVis) {
    rocPositionTooltip(btn, box);
    box.classList.add('visible');
  }
}

// hover support for desktop
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.info-btn').forEach(btn => {
    const id  = btn.getAttribute('onclick').match(/'([^']+)'/)[1];
    const box = document.getElementById(id);
    btn.addEventListener('mouseenter', function() {
      rocPositionTooltip(btn, box);
      box.classList.add('visible');
    });
    btn.addEventListener('mouseleave', function() {
      setTimeout(() => { if (!box.matches(':hover')) box.classList.remove('visible'); }, 80);
    });
    box.addEventListener('mouseleave', function() {
      box.classList.remove('visible');
    });
  });
});

document.addEventListener('click', function() {
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
});
window.addEventListener('scroll', function() {
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
}, true);
</script>

</section>
<!-- /ROC FEE CALCULATOR -->

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Choose Patron for Section 8 Registration in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3 class="feature-title">Mumbai Office Near RoC and Regional Director</h3>
                <p class="feature-text">Patron's Marine Lines office is minutes from RoC Mumbai (Everest Building, Marine Drive). The Regional Director (Western Region) at CGO Complex, CBD Belapur is accessible for follow-ups. In-person consultations and document verification available.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                <h3 class="feature-title">CA-Managed with Dual MOA Alignment</h3>
                <p class="feature-text">Patron's CA team drafts MOA objects that satisfy both the Regional Director's licence criteria and the IT Department's 12AB/80G eligibility simultaneously. This prevents the common problem of licence approval followed by 12AB rejection.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">End-to-End Non-Profit Compliance</h3>
                <p class="feature-text">Registration is just the beginning. Patron handles 12AB, 80G, NGO Darpan, CSR-1, annual ROC filing, statutory audit, ITR-7, and FCRA planning as an integrated service. No vendor fragmentation.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <h3 class="feature-title">CSR Funding Readiness</h3>
                <p class="feature-text">Patron structures your Section 8 company's compliance documentation to meet CSR due diligence standards of BKC and Nariman Point corporates - 12AB certificate, 80G certificate, audited financials, project proposals, and impact reports.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Mumbai non-profits with national CA practice strength and local expertise.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 8 Company vs Trust vs Society for Mumbai Non-Profits</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Section 8 Company</th><th>Trust</th><th>Society</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Companies Act 2013 (Section 8)</td><td>Indian Trusts Act 1882 / BPT Act 1950</td><td>Societies Registration Act 1860</td></tr>
                        <tr><td>Registering Authority</td><td>Regional Director + RoC Mumbai</td><td>Charity Commissioner, Worli</td><td>Registrar of Societies</td></tr>
                        <tr><td>Stamp Duty</td><td>Exempt (zero in Maharashtra)</td><td>Applicable (Maharashtra rates)</td><td>Minimal</td></tr>
                        <tr><td>Governance</td><td>Board of Directors, AGM, audit - highest</td><td>Flexible per trust deed</td><td>Member voting</td></tr>
                        <tr><td>CSR Preference</td><td>Highest - corporate structure preferred by BKC funders</td><td>Moderate - depends on compliance</td><td>Lower - less structured</td></tr>
                        <tr><td>FCRA Eligibility</td><td>Strongest - MCA regulated entity</td><td>Good - after 3 years</td><td>Good - after 3 years</td></tr>
                        <tr><td>Annual Compliance</td><td>Highest - AOC-4, MGT-7, audit, ITR-7</td><td>Low - Charity Commissioner return, ITR-7</td><td>Low - annual return, ITR-7</td></tr>
                        <tr><td>Best For Mumbai</td><td>CSR-funded, scaled operations, institutional donors</td><td>Small charitable, religious trusts</td><td>Membership clubs, cultural bodies</td></tr>

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
            <h2 class="section-title">Related Services for Non-Profit Registration in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/section8-company-registration">Section 8 Company Registration in India</a> - Our national Section 8 registration service covering all states</li>
                    <li><a href="/ngo-registration">NGO Registration</a> - Comprehensive NGO formation services including Trust, Society, and Section 8</li>
                    <li><a href="#">12A and 80G Registration</a> - Tax exemption registration for charitable organisations</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - Annual compliance management for companies</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Mandatory audit services for Section 8 companies</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Complete accounting solutions for non-profit organisations</li>
                </ul>
                <p>Patron recommends Section 8 for Mumbai organisations planning to raise CSR funds, apply for government grants, or receive foreign donations. For smaller charitable initiatives, a trust under the BPT Act 1950 may be more appropriate.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Section 8 in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p>
                <ul>
                    <li>Companies Act, 2013 - Section 8 (licence and incorporation), Sections 92, 129, 137, 139, 173 (annual compliance)</li>
                    <li>Companies (Incorporation) Rules, 2014 - INC-12 (licence), INC-16 (licence grant), SPICe+, e-MOA/e-AOA</li>
                    <li>Income Tax Act, 1961 - Section 12AB (NGO exemption), Section 80G (donor deduction), Section 2(15) (charitable purpose)</li>
                    <li>Foreign Contribution (Regulation) Act, 2010 - FCRA registration for foreign donations</li>
                    <li>Companies (CSR Policy) Rules, 2014 - CSR-1 registration for receiving CSR funds</li>
                </ul>
                <p><strong>Key Portals:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal (mca.gov.in)</a> | RoC Mumbai (Everest Building) | Regional Director (CBD Belapur) | <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax (incometax.gov.in)</a> | <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">NGO Darpan (ngodarpan.gov.in)</a> | FCRA (fcraonline.nic.in)</p>
                <p><strong>Penalties:</strong></p>
                <ul>
                    <li>Non-filing of INC-20A within 180 days: Company cannot commence operations. Risk of striking off.</li>
                    <li>Breach of Section 8 licence conditions: Central Government may revoke licence and order winding up.</li>
                    <li>Late filing of AOC-4/MGT-7: Rs 100/day penalty.</li>
                    <li>Loss of 12AB/80G: Non-renewal or non-filing of ITR-7 leads to exemption lapse.</li>
                    <li>FCRA violation: Penalties up to Rs 10 lakh and cancellation under Section 35 of FCRA Act 2010.</li>
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
                    <h2 class="faq-expanded__title">FAQs - Section 8 Company Registration in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about Section 8 non-profit registration in Mumbai. Can't find your answer? Call +91 945 945 6700.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Mumbai', 'enquiryService' => 'Section 8 Company Registration in Mumbai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which offices handle Section 8 registration in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Section 8 registration in Mumbai involves two offices. The Regional Director (Western Region), MCA, at CGO Complex, CBD Belapur, Navi Mumbai 400614 issues the Section 8 licence via Form INC-12. The Registrar of Companies (RoC) Mumbai at Everest Building, 100 Marine Drive, Mumbai 400002 handles the final incorporation via SPICe+. Patron's Marine Lines office coordinates with both authorities throughout the process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I register a Section 8 company online from Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes. The licence application (INC-12) and incorporation (SPICe+) are both filed electronically on the MCA portal. No physical visit to either the Regional Director's office at CBD Belapur or RoC Mumbai is required. Patron's CA team handles all digital filings, with in-person support available at Marine Lines for document execution and consultations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the Section 8 registration cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Section 8 company registration through Patron starts from Rs 14,999 all-inclusive. This covers DSC, name reservation, MOA/AOA drafting, licence application (INC-12), incorporation (SPICe+), PAN/TAN, and professional fees. A major cost advantage: Section 8 companies are exempt from stamp duty on MOA/AOA, saving Rs 8,000+ compared to Pvt Ltd registration in Maharashtra. 12AB and 80G applications are quoted separately at Rs 5,000-7,000 each.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does Section 8 registration take in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Section 8 company registration in Mumbai takes 30 to 45 working days. The Regional Director licence (INC-12) processing at CBD Belapur takes 15-20 days, which is the longest step. Post-licence, RoC Mumbai processes SPICe+ incorporation in 7-10 days. DSC and name reservation take 3-5 days at the start.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is stamp duty required for Section 8 company in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>No. Section 8 companies are exempt from stamp duty on MOA and AOA under the Companies Act 2013. This is a significant advantage in Maharashtra, where stamp duty for private limited companies exceeds Rs 8,000 for Rs 1 lakh authorised capital. This exemption makes Section 8 one of the most cost-effective company structures to incorporate in Mumbai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can an NRI register a Section 8 company in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs and foreign nationals can be directors and members of a Section 8 company in Mumbai. At least one director must be an Indian resident under the Companies Act 2013. NRI directors submit apostilled passport copies and foreign address proofs. Section 8 companies with NRI involvement are particularly common for cross-border philanthropic foundations targeting Mumbai's social development needs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between 12AB and 80G for Section 8?</h3>
                        <div class="faq-expanded__a"><p>Section 12AB registration provides income tax exemption to the Section 8 company itself - the organisation's income from donations, grants, and investments is not taxed. Section 80G registration enables donors who contribute to the company to claim a 50% tax deduction on their donation. Both registrations are essential for Mumbai Section 8 companies seeking CSR funding.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What are the annual compliance requirements for Section 8?</h3>
                        <div class="faq-expanded__a"><p>Section 8 companies registered in Mumbai must comply with: minimum 4 board meetings per year (14-day AGM notice), AOC-4 (financial statements) and MGT-7 (annual return) with RoC Mumbai, mandatory statutory audit, ITR-7 with the Income Tax Department, and 12AB/80G renewal. If receiving CSR funds, CSR-1 registration must be maintained. Patron manages all compliance as part of post-incorporation support.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Section 8 company kya hai?</strong> Section 8 company is a non-profit company under the Companies Act 2013 formed for charitable purposes like education, health, social welfare. No dividends. All profits go towards objects.</p>
                <p><strong>Mumbai mein Section 8 ka kharcha?</strong> From Rs 14,999 through Patron. No stamp duty for Section 8 (unlike Pvt Ltd). 12AB and 80G separate at Rs 5,000-7,000 each.</p>
                <p><strong>Kya Section 8 company CSR fund le sakti hai?</strong> Yes. Section 8 companies are eligible for CSR funding under Section 135 of the Companies Act 2013 after CSR-1 registration. BKC corporates prefer Section 8 over trusts.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the Next CSR Funding Cycle</h2>
            <div class="content-text">
                
                <p>The SPICe+ Part A name reservation expires in 20 days. INC-20A must be filed within 180 days of incorporation or the company cannot operate. The first auditor must be appointed within 30 days. Non-filing of AOC-4 and MGT-7 attracts Rs 100/day penalty. 12AB provisional registration must be applied for promptly to start receiving tax-exempt donations. CSR funding cycles at BKC corporates operate annually - missing the compliance window means waiting another year.</p>
                <p><strong>Start your Section 8 registration before the next CSR cycle begins. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20a%20Section%208%20company%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Section 8 Company in Mumbai Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Section 8 company registration in Mumbai provides the most credible and structured non-profit incorporation for organisations seeking CSR funding, government grants, and international donations. The two-stage process - Regional Director licence at CBD Belapur followed by RoC Mumbai incorporation - ensures genuine non-profit intent while providing the corporate governance framework that institutional funders at BKC and Nariman Point demand.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Mumbai office at Marine Lines brings 15+ years of chartered accountancy practice, 10,000+ businesses served, and expertise in MOA drafting for dual MCA-IT compliance, Regional Director coordination, and post-incorporation 12AB/80G/FCRA management. From licence application to CSR readiness, Patron delivers CA-managed Section 8 registration that positions your Mumbai non-profit for institutional funding and long-term social impact.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20a%20Section%208%20company%20in%20Mumbai.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Section%208%20Company%20Registration%20Mumbai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Section%208%20Company%20Registration%20services%20in%20Mumbai%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Section 8 Company Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offers Section 8 registration services in 8 major cities across India. Select your city below.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/section-8-company-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/section8-company-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/section8-company-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/section8-company-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/section8-company-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/section8-company-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/section8-company-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div><div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">End-to-end support for Section 8 Company Registration</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/ngo-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/llp-incorporation/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/society-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Society Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually (Freshness Tier 2) to reflect changes in MCA licence procedures, Regional Director processing timelines, and Income Tax 12AB/80G regulations. The next scheduled review is September 2026.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
{{--
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div> 
--}}
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
