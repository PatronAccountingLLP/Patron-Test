
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
    <title>FCRA Annual Return (Form FC-4) in Mumbai</title>
    <meta name="description" content="File FCRA Form FC-4 by 31 December every year. Learn the nil return rule, CA certificate, attachments and late-filing penalty. Expert CA help. Serving Mumbai.">
    <link rel="canonical" href="/fcra-fc-4-annual-return/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FCRA Annual Return (Form FC-4): Due Date & Filing Guide">
    <meta property="og:description" content="File FCRA Form FC-4 by 31 December every year. Learn the nil return rule, CA certificate, attachments and late-filing penalty. Expert CA help.">
    <meta property="og:url" content="/fcra-fc-4-annual-return/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/fcra-fc-4-annual-return-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FCRA Annual Return (Form FC-4): Due Date & Filing Guide">
    <meta name="twitter:description" content="File FCRA Form FC-4 by 31 December every year. Learn the nil return rule, CA certificate, attachments and late-filing penalty. Expert CA help.">
    <meta name="twitter:image" content="/images/fcra-fc-4-annual-return-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/fcra-fc-4-annual-return/#breadcrumb",
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
          "name": "FCRA Annual Return (Form FC-4)",
          "item": "https://www.patronaccounting.com/fcra-fc-4-annual-return"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FCRA Annual Return (Form FC-4) in Mumbai",
          "item": "https://www.patronaccounting.com/fcra-fc-4-annual-return/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/fcra-fc-4-annual-return/#faq",
      "datePublished": "2026-07-01T08:00:00+05:30",
      "dateModified": "2026-07-01T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Form FC-4 under FCRA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form FC-4 is the mandatory annual return that every association registered or granted prior permission under the Foreign Contribution (Regulation) Act, 2010 must submit to the Ministry of Home Affairs, reporting the foreign contribution received and utilised during the financial year."
          }
        },
        {
          "@type": "Question",
          "name": "By what date must FC-4 be filed each year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FC-4 must be submitted online on or before 31 December, i.e. within nine months of the end of the financial year (1 April to 31 March). For example, the return for FY 2025-26 is due by 31 December 2026."
          }
        },
        {
          "@type": "Question",
          "name": "Do we have to file FC-4 if we received no foreign contribution this year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Filing a nil return in Form FC-4 is compulsory even if no foreign contribution was received or utilised during the year. For a nil return, the CA certificate and audited financial statements are not required to be uploaded."
          }
        },
        {
          "@type": "Question",
          "name": "Which documents must be attached to Form FC-4?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When foreign contribution is received or utilised, FC-4 must carry a chartered accountant certificate, the audited statement of accounts comprising the receipt and payment account, the income and expenditure statement, and the balance sheet for the financial year."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late or non-filing of FC-4?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late filing is an offence under the FCRA. It can be compounded on payment of the higher of Rs. 1,00,000 or 5% of the foreign contribution received during the period of non-submission, and repeated default can lead to suspension or cancellation of FCRA registration."
          }
        },
        {
          "@type": "Question",
          "name": "Can we file FC-4 offline or send it by post?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. FC-4 is filed exclusively online on the FCRA portal (fcraonline.nic.in). The form is digitally submitted with the required uploads; no offline or postal filing is permitted."
          }
        },
        {
          "@type": "Question",
          "name": "How long must we keep FCRA records after filing FC-4?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Associations must maintain separate accounts of foreign contribution on a yearly basis and preserve the accounts, records and vouchers as required under the FCRA and its Rules, so they can be produced for inspection or audit by the authorities."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/fcra-fc-4-annual-return/#service",
      "name": "FCRA Annual Return (Form FC-4) Filing Service",
      "description": "End-to-end assistance for FCRA-registered associations, trusts, societies and Section 8 companies to prepare and file the mandatory annual return in Form FC-4 on the FCRA online portal. Coverage includes reconciliation of foreign contribution received and utilised, preparation of the receipt and payment account, income and expenditure statement and balance sheet, coordination of the chartered accountant certificate, nil-return filing where no foreign contribution is received, online submission on fcraonline.nic.in, and guidance on record preservation and late-filing compounding under Section 37 of the FCRA.",
      "serviceType": "FCRA Form FC-4 Annual Return Preparation and Filing",
      "provider": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com/"
      },
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
      },
      "url": "https://www.patronaccounting.com/fcra-fc-4-annual-return/mumbai",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "price": "7500",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/fcra-fc-4-annual-return/mumbai"
      }
    },
    {
      "@type": "LocalBusiness",
      "name": "Patron Accounting LLP - FCRA Annual Return (Form FC-4) Mumbai",
      "url": "https://www.patronaccounting.com/fcra-fc-4-annual-return/mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai"
      },
      "telephone": "+919459456700",
      "priceRange": "INR"
    }
  ]
}</script>
@endsection

@section('content')
<style>
        :root {
            --orange: #E8712C; --orange-dark: #D4621F; --orange-light: #FEF4EE; --orange-lighter: #FFF9F5;
            --blue: #1B365D; --blue-light: #2A4A7A; --blue-lighter: #F4F7FB;
            --white: #FFFFFF; --cream: #FDFCFB;
            --gray-50: #F9FAFB; --gray-100: #F3F4F6; --gray-200: #E5E7EB; --gray-300: #D1D5DB;
            --gray-400: #9CA3AF; --gray-500: #6B7280; --gray-600: #4B5563; --gray-700: #374151;
            --text-primary: #1F2937; --text-secondary: #4B5563; --text-muted: #6B7280;
            --green: #10B981; --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04); --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08); --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px; --radius-md: 12px; --radius-lg: 16px; --radius-xl: 24px;
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }
        body { font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif; font-size: 16px; line-height: 1.6; color: var(--text-primary); background: var(--white); }
        h2 { font-size: clamp(26px, 3vw, 32px); font-weight: 800; color: var(--blue); margin-bottom: 24px; line-height: 1.25; }
        h3 { color: var(--blue); font-size: 1.5rem; }
        p { color: var(--text-secondary); }
        section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        section a:hover { color: var(--orange-dark); }
        section ul { list-style: none; padding-left: 0; margin: 0; }
        section ul li:not(.nav-item) { display: flex; align-items: flex-start; gap: 12px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px; }
        section ul li:not(.nav-item)::before { content: ""; width: 22px; height: 22px; background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px; display: flex; align-items: center; justify-content: center; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: center; background-size: 12px; }
        main section h3 { color: #14365F !important; }
        main section table { width: 100% !important; font-family: 'Barlow', sans-serif; border-collapse: collapse; border-spacing: 0; }
        main section table thead tr th { border: none !important; color: #fff !important; font-size: 14px; font-weight: 700; background-color: #14365F !important; padding: 14px 18px; text-align: left; }
        main section table thead tr th:first-child { border-radius: 10px 0 0 0; }
        main section table thead tr th:last-child  { border-radius: 0 10px 0 0; }
        main section table tbody tr td { padding: 12px 18px; font-size: 14px; color: var(--text-secondary); background: var(--white); border: none !important; border-bottom: 1px solid var(--gray-200) !important; vertical-align: top; }
        main section table tbody tr:nth-child(even) td { background: #F9FAFB; }
        main section table tbody tr:hover td { background: var(--orange-lighter); transition: background 0.15s; }
        main section table tbody tr:last-child td { border-bottom: none !important; }
        main section table tbody tr td:first-child { font-weight: 700; color: var(--text-primary); min-width: 160px; }
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }
        .expert-attribution-box { background: #F9F9F9; border: 1px solid var(--gray-200); border-radius: var(--radius-md); padding: 12px 20px; display: flex; align-items: center; gap: 10px; flex-wrap: wrap; margin-bottom: 24px; }
        .expert-attribution-box .eab-check { color: var(--green); font-size: 16px; flex-shrink: 0; }
        .expert-attribution-box .eab-title { font-size: 13px; font-weight: 700; color: var(--text-primary); }
        .expert-attribution-box .eab-meta { font-size: 12px; color: var(--text-muted); display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        .expert-attribution-box .eab-meta .eab-sep { color: var(--gray-300); }
        .expert-attribution-box .eab-link { font-size: 12px; color: var(--orange); text-decoration: none; font-weight: 600; transition: color 0.2s; }
        .expert-attribution-box .eab-link:hover { color: var(--orange-dark); text-decoration: underline; }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--orange-light); padding: 8px 16px; border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px; }
        .hero-badge svg { width: 14px; height: 14px; }
        .private-registration-heading { font-family: 'Barlow', sans-serif !important; font-weight: 700 !important; font-size: 48px !important; line-height: 100% !important; color: #14365F !important; margin-bottom: 1.5rem !important; }
        @media (max-width: 768px) { .private-registration-heading { font-size: 32px !important; line-height: 110% !important; } }
        @media (max-width: 480px) { .private-registration-heading { font-size: 28px !important; } }
        .check-icon { width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0; }
        .check-icon svg { width: 12px; height: 12px; color: var(--green); }
        .benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 100%; }
        .benefit-paragraph span { font-weight: 700; }
        .hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }
        .btn-video { display: inline-flex; align-items: center; gap: 10px; padding: 12px 20px; background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md); font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none; }
        .btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
        .btn-video .play-circle { width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; background: var(--orange); border-radius: 50%; transition: transform 0.25s ease; }
        .btn-video:hover .play-circle { transform: scale(1.08); }
        .btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }
        .btn-sample { display: inline-flex; align-items: center; gap: 8px; padding: 12px 20px; background: transparent; border: 1.5px solid var(--gray-200); border-radius: var(--radius-md); font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none; }
        .btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
        .btn-sample svg { width: 16px; height: 16px; }
        .trust-section { display: flex; flex-direction: column; gap: 20px; }
        .trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
        .trust-item { display: flex; align-items: center; gap: 10px; }
        .trust-icon { width: 38px; height: 38px; display: flex; align-items: center; justify-content: center; background: var(--gray-50); border-radius: var(--radius-sm); }
        .trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
        .trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
        .trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }
        .google-rating { display: inline-flex; align-items: center; gap: 12px; background: var(--white); border: 1px solid var(--gray-200); padding: 10px 16px; border-radius: var(--radius-md); }
        .rating-content { display: flex; flex-direction: column; gap: 2px; }
        .rating-stars { display: flex; align-items: center; gap: 2px; }
        .rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
        .rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
        .rating-count { font-size: 11px; color: var(--text-muted); }
        .form-card { background: var(--white); border-radius: var(--radius-xl); padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative; max-width: 420px; width: 100%; animation: fadeInForm 0.5s ease 0.2s forwards; opacity: 0; margin: 0 auto; }
        @keyframes fadeInForm { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-card::before { content: ''; position: absolute; top: 0; left: 28px; right: 28px; height: 3px; background: linear-gradient(90deg, var(--orange), var(--blue)); border-radius: 0 0 3px 3px; }
        .form-header { margin-bottom: 24px; }
        .form-title { font-size: 22px; font-weight: 800; color: var(--blue); margin-bottom: 4px; }
        .form-subtitle { font-size: 13px; color: var(--text-muted); }
        .form-group { margin-bottom: 16px; }
        .form-label { display: block; font-family: 'Barlow', sans-serif; font-size: 11px; font-weight: 700; color: var(--blue); text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px; }
        .form-input { width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px; color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent; border-radius: var(--radius-md); transition: all 0.2s ease; }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:hover { background: var(--gray-100); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }
        .form-select { width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px; color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent; border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease; }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }
        .phone-group { min-height: 50px; display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md); border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative; }
        .phone-group:hover { background: var(--gray-100); }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }
        .country-code-dropdown { display: flex; align-items: center; justify-content: flex-start; gap: 6px; padding: 13px 10px 13px 14px; cursor: pointer; border-right: 1px solid var(--gray-200); background: transparent; position: relative; min-width: 80px; user-select: none; flex-shrink: 0; transition: background 0.15s; box-sizing: border-box; }
        .country-code-dropdown:hover { background: rgba(0,0,0,0.03); }
        .selected-flag { font-size: 20px; line-height: 1; display:flex; align-items:center; width: 26px; overflow: hidden; flex-shrink: 0; font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif; }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { transition: transform 0.25s ease; color: var(--gray-400); flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { transform: rotate(180deg); }
        .country-dropdown-list { display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px; background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md); box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column; }
        .country-code-dropdown.open .country-dropdown-list { display: flex; }
        .country-search-input { width: 100%; padding: 11px 14px; border: none; border-bottom: 1px solid var(--gray-200); font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary); background: var(--gray-50); outline: none; }
        .country-search-input::placeholder { color: var(--gray-400); }
        .country-options { overflow-y: auto; max-height: 260px; scrollbar-width: thin; }
        .country-option { display: flex; align-items: center; gap: 10px; padding: 10px 14px; cursor: pointer; transition: background 0.12s ease; font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary); }
        .country-option:hover, .country-option.active { background: var(--orange-lighter); }
        .country-option .flag-emoji { font-size: 18px; line-height: 1; width: 24px; text-align: center; }
        .country-option .country-name { flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 500; }
        .country-option .dial-code { color: var(--text-muted); font-weight: 600; font-size: 12px; flex-shrink: 0; }
        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }
        .btn-submit { width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif; font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange); border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease; display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px; }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; box-shadow: none; }
        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer { display: flex; justify-content: center; gap: 16px; margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--gray-100); }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { width: 64px; height: 64px; background: rgba(16,185,129,0.12); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
        .form-success h3 { font-size: 22px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .form-success p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }
        @media (max-width: 480px) { .form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; } .form-title { font-size: 20px; } .country-dropdown-list { width: 260px; } .form-footer { flex-wrap: wrap; gap: 10px; } .btn-submit { font-size: 16px; padding: 14px 20px; } }
        .stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 32px; }
        .stats-container { max-width: 1320px; margin: 0 auto; display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap; }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon { width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; background: var(--orange-light); border-radius: var(--radius-md); }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
        .stat-label { font-size: 12px; color: var(--text-muted); }
        .certifications { display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200); }
        .cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
        .cert-item svg { width: 18px; height: 18px; }
        .toc-section { background: var(--gray-50); border-bottom: 1px solid var(--gray-200); padding: 20px 0; position: sticky; top: 100px; z-index: 50; }
        .toc-container { max-width: 1320px; margin: 0 auto; padding: 0 32px; display: flex; align-items: center; }
        .toc-wrapper { display: flex; align-items: center; gap: 10px; overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px; }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn { display: inline-flex; align-items: center; gap: 6px; padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600; color: var(--text-secondary); background: var(--white); border: 1.5px solid var(--gray-200); border-radius: 50px; cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none; }
        .toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-btn.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
        .toc-arrow { border: none; cursor: pointer; font-size: 22px; width: 45px; height: 45px; border-radius: 50%; background: transparent; }
        .toc-arrow.left { margin-right: 8px; }
        .toc-arrow.right { margin-left: 8px; }
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1320px; margin: 0 auto; }
        .section-container { max-width: 1320px; margin: 0 auto; }
        .text-content { max-width: 100%; }
        .section-title { font-size: clamp(26px, 3vw, 32px); font-weight: 800; color: var(--blue); margin-bottom: 24px; line-height: 1.25; }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: left; }
        .content-text p { margin-bottom: 16px; text-align: left; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }
        .content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }
        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { max-width: 100%; }
        .column-image { display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 24px; }
        .highlight-box { background: var(--orange-lighter); border-left: 4px solid var(--orange); padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0; }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: left; }
        .highlight-box p:last-child { margin-bottom: 0; }
        .illustration-placeholder { width: 100%; max-width: 420px; aspect-ratio: 4/3; background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%); border-radius: var(--radius-xl); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; position: relative; overflow: hidden; }
        .illustration-icon { width: 100%; max-width: 280px; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
        .illustration-icon svg { width: 100%; height: 100%; color: var(--blue); }
        .illustration-badge { background: var(--white); padding: 12px 20px; border-radius: var(--radius-md); box-shadow: var(--shadow-md); text-align: center; }
        .illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }
        .section-eyebrow { display: inline-flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; color: var(--orange); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }
        .steps-section { padding: 72px 32px; background: var(--gray-50); }
        .steps-container { display: flex; flex-direction: column; gap: 32px; }
        .step-card { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; background: var(--white); border-radius: var(--radius-xl); padding: 40px; border: 1px solid var(--gray-200); transition: all 0.3s ease; }
        .step-card:hover { box-shadow: var(--shadow-lg); border-color: var(--gray-300); }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { display: flex; flex-direction: column; }
        .step-badge { display: inline-flex; align-items: center; gap: 6px; background: var(--orange); color: var(--white); padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content; }
        .step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
        .step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; text-align: left; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .highlight-tag { display: inline-flex; align-items: center; gap: 6px; padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted); }
        .highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
        .step-visual { display: flex; justify-content: center; align-items: center; }
        .step-illustration { width: 100%; max-width: 280px; aspect-ratio: 1; background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%); border-radius: var(--radius-xl); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px; position: relative; overflow: hidden; }
        .step-illustration .illustration-icon { width: 100%; max-width: 180px; aspect-ratio: 1; margin-bottom: 8px; background: none; box-shadow: none; }
        .step-illustration .illustration-icon svg { width: 100%; height: 100%; }
        .illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
        .step-number-large { position: absolute; bottom: 16px; right: 20px; font-size: 64px; font-weight: 800; color: rgba(27,54,93,0.06); line-height: 1; }
        .why-choose-section { padding: 72px 32px; background: var(--gray-50); }
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-card { background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease; }
        .feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .feature-icon-wrapper { width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 18px; }
        .feature-icon-wrapper svg { width: 26px; height: 26px; color: var(--orange); }
        .feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .feature-description { font-size: 14px; color: var(--text-secondary); line-height: 1.7; text-align: left; }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 6px; }
        .pa-block-sub   { font-size: 14px; color: var(--text-muted); margin-bottom: 16px; }
        .pa-city-grid, .pa-cross-grid { display: grid; gap: 12px; max-width: 1100px; }
        .pa-city-grid  { grid-template-columns: repeat(4, 1fr); }
        .pa-cross-grid { grid-template-columns: repeat(3, 1fr); }
        .pa-city-card, .pa-cross-card { display: flex; align-items: center; gap: 10px; padding: 14px 16px; background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md); text-decoration: none; transition: all 0.25s ease; }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: 0 4px 16px rgba(232,113,44,0.12); transform: translateY(-2px); }
        .pa-card-icon { width: 32px; height: 32px; background: var(--orange-light); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .pa-card-title  { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub    { font-size: 11px; color: var(--text-muted); }
        @media (max-width: 768px) { .pa-city-grid  { grid-template-columns: repeat(2, 1fr); } .pa-cross-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 480px) { .pa-city-grid  { grid-template-columns: 1fr; } .pa-cross-grid { grid-template-columns: 1fr; } }
        @media (max-width: 1024px) { .two-column { grid-template-columns: 1fr; gap: 40px; } .features-grid { grid-template-columns: repeat(2, 1fr); } .stats-container { gap: 32px; } .certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); } }
        @media (max-width: 900px) { .step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; } .step-card:nth-child(even) { direction: ltr; } .step-visual { order: -1; } }
        @media (max-width: 768px) { .content-section { padding: 40px 16px; } .hero-cta { flex-direction: column; } .btn-video, .btn-sample { width: 100%; justify-content: center; } .stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; } .stat-item { width: 100%; } .features-grid { grid-template-columns: 1fr; gap: 16px; } .content-text { font-size: 14px; } main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; } main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; } .table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); } .form-card { max-width: 100%; } .private-registration-heading { margin-bottom: 1rem !important; } .benefit-paragraph { font-size: 0.9rem; } .hero-badge { font-size: 12px; padding: 6px 12px; } .trust-section { gap: 12px; } .trust-row { gap: 16px; } .google-rating { width: 100%; } section ul li:not(.nav-item) { font-size: 14px; } }
        .content-section[id] { scroll-margin-top: 80px; }
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }
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
                        FCRA Annual Return (Form FC-4) in Mumbai</h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI &amp; ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 1 July 2026</span>
                        </span>
                        <a href="/fcra-registration" class="eab-link">FCRA Registration &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due 31 December:</span> Form FC-4 must be filed online by 31 December each year, within nine months of the close of the financial year that ends 31 March. Patron tracks your deadline and files on time.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Nil Return Still Mandatory:</span> Every FCRA-registered association must file FC-4 for each financial year, even when no foreign contribution was received or utilised. We prepare and submit nil returns too.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CA Certificate &amp; Audited Accounts:</span> Where foreign contribution is received or utilised, FC-4 carries a chartered accountant certificate and audited accounts. Patron coordinates the CA certification and attachments end to end.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Avoid Section 37 Penalty:</span> Late filing is an offence and can be compounded on the higher of Rs. 1,00,000 or 5% of the foreign contribution received. Timely FC-4 filing protects your FCRA registration.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FCRA%20Form%20FC-4%20Annual%20Return%20Filing&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20filing%20the%20FCRA%20annual%20return%20in%20Form%20FC-4%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20filing%20the%20FCRA%20annual%20return%20in%20Form%20FC-4." target="_blank" class="btn-sample text-decoration-none">
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
                                <div class="trust-text"><strong>CA &amp; CS</strong>Certified Experts</div>
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - FCRA Annual Return Form FC-4 in Mumbai'/>
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
                                <option value="fcra-fc-4-annual-return" selected>FCRA Annual Return (Form FC-4)</option>
                                <option value="fcra-registration">FCRA Registration</option>
                                <option value="fcra-renewal-5-year-cycle">FCRA Renewal (5-Year Cycle)</option>
                                <option value="fcra-fc-6-prior-intimation-and-bank-account">FCRA FC-6 Prior Intimation and Bank Account</option>
                                <option value="fcra-quarterly-receipt-declaration">FCRA Quarterly Receipt Declaration</option>
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

<!-- TESTIMONIALS (self-contained auto-scroll carousel, vanilla JS, no Slick) -->
<section class="imf-testi-sec">
    <style>
        .imf-testi-sec { padding: 24px 32px 8px; background: var(--white,#fff); overflow: hidden; }
        .imf-testi-sec .imf-testi-inner { max-width: 1320px; margin: 0 auto; }
        .imf-testi-sec .imf-testi-head { text-align: center; margin-bottom: 20px; }
        .imf-testi-sec .imf-testi-head h2 { font-size: clamp(26px,3.5vw,34px); font-weight: 800; color: var(--blue,#152238); margin: 0 0 8px; }
        .imf-testi-sec .imf-testi-head p { font-size: 15px; color: var(--text-muted,#6B7280); margin: 0; }
        .imf-testi-viewport { overflow: hidden; }
        .imf-testi-track { display: flex; gap: 20px; align-items: stretch; }
        .imf-testi-track > div { flex: 0 0 calc((100% - 60px) / 4); min-width: 0; }
        @media (max-width:1024px){ .imf-testi-track > div { flex: 0 0 calc((100% - 20px) / 2); } }
        @media (max-width:600px){ .imf-testi-track > div { flex: 0 0 100%; } }
        .imf-testi-sec .testi-video-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); overflow: hidden; height: 340px; display: flex; flex-direction: column; transition: all .25s ease; }
        .imf-testi-sec .testi-video-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-video-area { position: relative; height: 230px; overflow: hidden; cursor: pointer; flex-shrink: 0; }
        .imf-testi-sec .testi-video-area video { width: 100%; height: 100%; object-fit: cover; display: block; }
        .imf-testi-sec .testi-play-overlay { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,.25); transition: opacity .3s; pointer-events: none; }
        .imf-testi-sec .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .imf-testi-sec .testi-play-btn { width: 56px; height: 56px; background: rgba(232,113,44,.85); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,.3); }
        .imf-testi-sec .testi-play-btn svg { width: 22px; height: 22px; color: #fff; margin-left: 3px; }
        .imf-testi-sec .testi-star-badge { position: absolute; bottom: 12px; left: 12px; display: flex; gap: 2px; }
        .imf-testi-sec .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-quote-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); padding: 24px; height: 340px; display: flex; flex-direction: column; justify-content: space-between; transition: all .25s ease; }
        .imf-testi-sec .testi-quote-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-quote-icon { color: var(--orange,#E8712C); opacity: .25; margin-bottom: 8px; }
        .imf-testi-sec .testi-quote-icon svg { width: 24px; height: 24px; }
        .imf-testi-sec .testi-quote-text { font-size: 14px; line-height: 1.65; color: var(--text-secondary,#374151); flex: 1; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; overflow: hidden; margin: 0; }
        .imf-testi-sec .testi-footer { display: flex; flex-direction: column; gap: 8px; padding-top: 16px; border-top: 1px solid var(--gray-100,#F3F4F6); }
        .imf-testi-sec .testi-author { display: flex; align-items: center; gap: 10px; }
        .imf-testi-sec .testi-avatar { width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: #fff; flex-shrink: 0; overflow: hidden; background: var(--orange,#E8712C); }
        .imf-testi-sec .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .imf-testi-sec .testi-avatar.blue { background: var(--blue,#152238); }
        .imf-testi-sec .testi-avatar.teal { background: #0D9488; }
        .imf-testi-sec .testi-avatar.purple { background: #7C3AED; }
        .imf-testi-sec .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary,#111827); line-height: 1.2; }
        .imf-testi-sec .testi-role { font-size: 12px; color: var(--text-muted,#6B7280); }
        .imf-testi-sec .testi-rating-row { display: flex; align-items: center; justify-content: space-between; }
        .imf-testi-sec .testi-stars { display: flex; gap: 1px; }
        .imf-testi-sec .testi-stars svg { width: 12px; height: 12px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-google-badge { width: 22px; height: 22px; }
        .imf-testi-sec .testi-google-badge img { width: 100%; height: 100%; }
        .imf-testi-cta { margin-top: 20px; background: var(--blue,#152238); border-radius: 12px; padding: 22px 26px; display: flex; align-items: center; justify-content: space-between; gap: 18px; flex-wrap: wrap; }
        .imf-testi-cta h3 { color: #fff; margin: 0 0 6px; font-size: 20px; font-weight: 800; }
        .imf-testi-cta p { color: rgba(255,255,255,.85); margin: 0; font-size: 14px; max-width: 760px; }
        .imf-testi-cta a { background: var(--orange,#E8712C); color: #fff; padding: 12px 26px; border-radius: 50px; font-weight: 700; text-decoration: none; white-space: nowrap; flex-shrink: 0; }
        @media (max-width:768px){ .imf-testi-sec { padding: 16px 16px 8px; } .imf-testi-cta { flex-direction: column; text-align: center; } }
    </style>
    <div class="imf-testi-inner">
        <div class="imf-testi-head">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, and stay in control.</p>
        </div>
        <div class="imf-testi-viewport">
            <div class="imf-testi-track" id="imfTestiTrack">
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"><source src="/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal"></div>
                            <div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Very proficient and professional staff. Do a fantastic job with instant response. Strongly recommended for all accounting needs, especially for startups and growing businesses.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar ">A</div><div><div class="testi-name">Anita Gaur</div><div class="testi-role">5 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"><source src="/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava"></div>
                            <div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional, giving prompt responses. Highly recommend them for tax and compliance work.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar blue">P</div><div><div class="testi-name">Pankaj Arvikar</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">From the very beginning their approach has been highly professional, prompt and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">P</div><div><div class="testi-name">Preeti Singh Rathor</div><div class="testi-role">3 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I called Patron to file ITR for my family members. I worked with Shubham and Amin Jain and it was a smooth process. They understand the basics very well and respond promptly.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="imf-testi-cta">
            <div>
                <h3>Join 10,000+ Satisfied Businesses</h3>
                <p>From charitable trusts and NGOs to startups and established enterprises, thousands of clients trust Patron for compliant registration, tax, audit and regulatory filings.</p>
            </div>
            <a href="tel:+919459456700">Talk to an Expert &rarr;</a>
        </div>
    </div>
</section>
<script>
function toggleTestiVideo(area){
    var v=area.querySelector('video'); if(!v) return;
    if(v.paused){ document.querySelectorAll('.testi-video-area video').forEach(function(x){ x.pause(); x.closest('.testi-video-area').classList.remove('playing'); }); v.play(); area.classList.add('playing'); }
    else { v.pause(); area.classList.remove('playing'); }
}
(function(){
    var track=document.getElementById('imfTestiTrack'); if(!track) return;
    var vp=track.parentElement, paused=false, animating=false;
    vp.addEventListener('mouseenter',function(){ paused=true; });
    vp.addEventListener('mouseleave',function(){ paused=false; });
    function step(){
        if(paused||animating||track.children.length<2) return;
        if(track.querySelector('.testi-video-area.playing')) return;
        var first=track.children[0];
        var w=first.getBoundingClientRect().width+20;
        animating=true;
        track.style.transition='transform .6s ease';
        track.style.transform='translateX(-'+w+'px)';
        window.setTimeout(function(){
            track.style.transition='none';
            track.appendChild(first);
            track.style.transform='translateX(0)';
            animating=false;
        },640);
    }
    window.setInterval(step,3000);
})();
</script>

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">Compliance and filing support for NGOs and trusts across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in FCRA, trust and society compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, certificates, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by NGOs, charitable trusts, and Section 8 companies.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and organisational data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth',block:'start'});">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth',block:'start'});">What Is FC-4</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">Who Must File</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">Filing Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Common Mistakes</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Why Patron</button>
            <button class="toc-btn" onclick="document.getElementById('penalty-section').scrollIntoView({behavior:'smooth',block:'start'});">Penalty &amp; Records</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 1A: OVERVIEW + QUICK ANSWERS (question H2 for AI Overview) -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Is the FCRA Annual Return in Form FC-4?</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; Quick Answers</strong></p>
                    <ul style="margin-top:12px;">
                        <li><strong>When is Form FC-4 due?</strong> Form FC-4 must be filed online by 31 December each year, that is within nine months of the close of the financial year (which ends 31 March).</li>
                        <li><strong>Is FC-4 mandatory even with no foreign contribution?</strong> Yes. Every FCRA-registered association must file FC-4 for each financial year. If no foreign contribution was received or utilised, a nil return is still mandatory.</li>
                        <li><strong>Does FC-4 need a CA certificate?</strong> Yes, where foreign contribution is received or utilised. A chartered accountant certificate plus audited accounts must be uploaded. A nil return does not require the CA certificate or audited accounts.</li>
                        <li><strong>How is FC-4 filed?</strong> FC-4 is filed only online through the FCRA portal at fcraonline.nic.in. No physical or postal submission is accepted.</li>
                    </ul>
                </div>
                <p>Form FC-4 is the annual return of foreign contribution prescribed under the <strong>Foreign Contribution (Regulation) Act, 2010</strong> and Rule 17 of the <strong>Foreign Contribution (Regulation) Rules, 2011</strong>. Every association registered under the FCRA, or granted prior permission, must submit this return to the <strong>Ministry of Home Affairs (MHA)</strong> for each financial year, reporting the foreign contribution received and utilised during the year.</p>
                <p>The FCRA annual return Form FC-4 must be filed online on or before <strong>31 December</strong> each year, within nine months of the close of the financial year ending 31 March. For example, the return for FY 2025-26 is due by 31 December 2026. The return is submitted only through the FCRA online portal at <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">fcraonline.nic.in</a>; no physical or postal submission is accepted.</p>
                <p>Patron Accounting helps FCRA-registered NGOs, trusts, societies and Section 8 companies prepare and file Form FC-4 accurately and on time - whether the return reports substantial foreign contribution or is a nil return. Verify your registration status and file directly at the <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">FCRA online portal (fcraonline.nic.in)</a> operated by the Ministry of Home Affairs.</p>
                <p>Content is reviewed periodically for accuracy against FCRA and FCRA Rules updates.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: WHAT IS FC-4 (detail + key terms) -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">Understanding FCRA Form FC-4 and the Annual Return Requirement</h2>
                <div class="content-text">
                    <p>The FCRA annual return in Form FC-4 is the primary disclosure that a foreign-funded association makes to the Government of India each year. It reports the opening balance of foreign contribution, the amount received during the year, the utilisation, and the unutilised balance at year end. Filing FC-4 is a statutory obligation under <strong>Section 18 of the FCRA</strong> read with <strong>Rule 17 of the FCRA Rules, 2011</strong>.</p>
                    <p><strong>Who prescribes it:</strong> Form FC-4 is prescribed by the FCRA Department under the Ministry of Home Affairs. The <strong>Chief Functionary</strong> of the association is responsible for ensuring the return is filed correctly and on time using the association's login and <strong>Darpan ID</strong> on the FCRA portal.</p>
                    <p><strong>What it captures:</strong> The return covers the receipt and utilisation of <strong>foreign contribution</strong> during the financial year, along with the audited <strong>receipt and payment account</strong>, <strong>income and expenditure statement</strong>, and <strong>balance sheet</strong>, where foreign contribution is received or utilised.</p>
                    <p><strong>Nil return:</strong> If no foreign contribution is received or utilised during the year, filing a nil return in Form FC-4 remains mandatory. For a nil return, a chartered accountant certificate, income and expenditure statement, receipt and payment account and balance sheet are not required to be enclosed.</p>
                    <p>Patron's team reconciles your foreign contribution designated bank account, prepares the FCRA-specific financial statements, coordinates the <a href="/fcra-registration">FCRA registration</a> details and CA certificate, and submits FC-4 on the portal so your association stays compliant year after year.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FCRA Form FC-4:</strong></p>
                    <ul style="margin-top:12px;">
                        <li><strong>Form FC-4:</strong> The annual return of foreign contribution filed under FCRA, 2010 and Rule 17 of the FCRA Rules, 2011.</li>
                        <li><strong>Financial year:</strong> 1 April to 31 March. FC-4 covers foreign contribution received and utilised in this period.</li>
                        <li><strong>Due date - 31 December:</strong> Within nine months of the close of the financial year that ends 31 March.</li>
                        <li><strong>Chartered Accountant certificate:</strong> Certifies the opening balance of foreign contribution, the amount received during the year, the unutilised balance at year end, and proper maintenance of accounts as per FCRA, 2010 - required where foreign contribution is received or utilised.</li>
                        <li><strong>Receipt and payment account, income and expenditure statement, balance sheet:</strong> The audited financial statements uploaded with FC-4 for the financial year.</li>
                        <li><strong>Nil return:</strong> A compulsory FC-4 filing even when no foreign contribution is received or utilised; CA certificate and audited accounts are not required.</li>
                        <li><strong>Section 37 FCRA:</strong> The provision under which delay in filing the annual return can be compounded.</li>
                        <li><strong>Darpan ID:</strong> The NGO-DARPAN unique identity used alongside FCRA credentials on the portal.</li>
                    </ul>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="30" width="120" height="120" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="55" y1="52" x2="145" y2="52" stroke="#F5A623" stroke-width="4"/>
                            <line x1="55" y1="70" x2="130" y2="70" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                            <line x1="55" y1="86" x2="140" y2="86" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                            <line x1="55" y1="102" x2="120" y2="102" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="55" y="120" width="52" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="81" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM FC-4</text>
                            <text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FCRA Annual Return</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Annual Compliance</span>
                        <strong>Due 31 December Each Year</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHO MUST FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Is Required to File the FCRA Annual Return?</h2>
            <div class="content-text">
                <p>The obligation to file Form FC-4 applies to every association that holds FCRA registration or prior permission. Filing is required for each financial year, whether or not foreign contribution was actually received.</p>
                <ul>
                    <li><strong>FCRA-registered associations:</strong> Every association registered under the FCRA, 2010 must file FC-4 for each financial year.</li>
                    <li><strong>Prior-permission holders:</strong> Associations granted prior permission under the FCRA must also file the annual return in Form FC-4.</li>
                    <li><strong>NGOs, charitable trusts, societies and Section 8 companies:</strong> Any of these entity forms holding FCRA registration is required to file.</li>
                    <li><strong>Associations with nil foreign contribution:</strong> Even where no foreign contribution was received or utilised during the year, a nil return in Form FC-4 remains mandatory.</li>
                    <li><strong>Associations that received foreign contribution:</strong> Must file FC-4 with the chartered accountant certificate and audited receipt and payment account, income and expenditure statement, and balance sheet.</li>
                </ul>
                <p style="margin-top:16px;">The <strong>Chief Functionary</strong> is responsible for the correctness and timely submission of the return. Associations that also need to complete their <a href="/fcra-quarterly-receipt-declaration">FCRA quarterly receipt declaration</a> or manage their <a href="/fcra-fc-6-prior-intimation-and-bank-account">FC-6 prior intimation and bank account</a> updates should align these with the annual FC-4 filing for a clean compliance record.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron FCRA Form FC-4 Filing Service Coverage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>Foreign Contribution Reconciliation</td>
                            <td>Reconciliation of the FCRA designated bank account and utilisation account - opening balance, foreign contribution received during the year, utilisation, and unutilised closing balance for the financial year.</td>
                            <td><span class="badge-included">All Filings</span></td>
                        </tr>
                        <tr>
                            <td>FCRA Financial Statements Preparation</td>
                            <td>Preparation of the audited receipt and payment account, income and expenditure statement, and balance sheet for foreign contribution, ready for upload with Form FC-4.</td>
                            <td><span class="badge-included">FC Received</span></td>
                        </tr>
                        <tr>
                            <td>Chartered Accountant Certificate Coordination</td>
                            <td>Coordination of the CA certificate that certifies opening balance, amount received, unutilised balance and proper maintenance of accounts as per FCRA, 2010 - required where foreign contribution is received or utilised.</td>
                            <td><span class="badge-included">FC Received</span></td>
                        </tr>
                        <tr>
                            <td>Nil Return Filing</td>
                            <td>Preparation and online submission of a nil Form FC-4 where no foreign contribution was received or utilised - CA certificate and audited accounts not required.</td>
                            <td><span class="badge-included">Nil Return</span></td>
                        </tr>
                        <tr>
                            <td>Online FC-4 Submission (fcraonline.nic.in)</td>
                            <td>Digital submission of Form FC-4 with all required attachments through the FCRA online portal using the association's login and Darpan ID.</td>
                            <td><span class="badge-included">All Filings</span></td>
                        </tr>
                        <tr>
                            <td>Due-Date Tracking and Reminders</td>
                            <td>Tracking of the 31 December due date and proactive reminders so the return is filed within nine months of financial year end and penalties are avoided.</td>
                            <td><span class="badge-included">All Filings</span></td>
                        </tr>
                        <tr>
                            <td>Record Preservation Guidance</td>
                            <td>Guidance on maintaining a separate set of accounts and records exclusively for foreign contribution, and preserving vouchers and records for inspection or audit.</td>
                            <td><span class="badge-included">All Filings</span></td>
                        </tr>
                        <tr>
                            <td>Late-Filing and Compounding Support</td>
                            <td>Support where filing was delayed - guidance on compounding under Section 37 of the FCRA and steps to regularise the compliance record.</td>
                            <td><span class="badge-included">On Request</span></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: FILING PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Patron Files Your FCRA Form FC-4</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured workflow from foreign contribution reconciliation through CA certification and online submission on fcraonline.nic.in - designed to file on or before the 31 December due date.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Reconcile Foreign Contribution Accounts</h3>
                    <p class="step-description">We reconcile the FCRA designated and utilisation bank accounts for the financial year - opening balance, foreign contribution received, utilisation, and unutilised closing balance.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Balances tied out</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC identified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="40" x2="90" y2="40" stroke="#F5A623" stroke-width="3"/>
                                <line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <line x1="30" y1="68" x2="82" y2="68" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Reconciled</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Prepare Audited FCRA Financial Statements</h3>
                    <p class="step-description">Where foreign contribution is received or utilised, we prepare the receipt and payment account, income and expenditure statement, and balance sheet for the financial year.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statements ready</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit aligned</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="25" width="60" height="6" rx="2" fill="#F5A623"/>
                                <rect x="30" y="37" width="50" height="5" rx="2" fill="#14365F" opacity="0.5"/>
                                <rect x="30" y="48" width="55" height="5" rx="2" fill="#14365F" opacity="0.5"/>
                                <rect x="30" y="59" width="45" height="5" rx="2" fill="#14365F" opacity="0.5"/>
                                <rect x="30" y="70" width="60" height="5" rx="2" fill="#F5A623"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Accounts Drawn</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Obtain the Chartered Accountant Certificate</h3>
                    <p class="step-description">We coordinate the CA certificate confirming the opening balance, amount received, unutilised balance, and proper maintenance of accounts as per FCRA, 2010. A nil return skips this step.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA certified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FCRA-compliant</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="45" r="26" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <path d="M48 45l8 8 16-16" stroke="#14365F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                <text x="60" y="88" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">CA CERT</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Certified</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">File FC-4 Online on fcraonline.nic.in</h3>
                    <p class="step-description">We submit Form FC-4 digitally on the FCRA portal with all required uploads using your association's login and Darpan ID, on or before the 31 December due date. No offline or postal filing is permitted.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed online</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acknowledgement saved</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M42 50 L55 63 L80 38" stroke="#F5A623" stroke-width="4" stroke-linecap="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Submitted</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 6: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required to File Form FC-4</h2>
            <div class="content-text">
                <p>The attachments to Form FC-4 depend on whether foreign contribution was received or utilised during the year. Where it was, the following are required; for a nil return, the CA certificate and audited accounts are not required.</p>
                <ul>
                    <li>FCRA registration certificate / prior permission details and registration number</li>
                    <li>Association login credentials and Darpan ID for the FCRA portal</li>
                    <li>FCRA designated bank account and utilisation account statements for the financial year</li>
                    <li>Details of foreign contribution received - donor name, country, amount and purpose</li>
                    <li>Chartered accountant certificate (where foreign contribution is received or utilised)</li>
                    <li>Audited receipt and payment account for the financial year</li>
                    <li>Audited income and expenditure statement for the financial year</li>
                    <li>Audited balance sheet for the financial year</li>
                    <li>Details of utilisation of foreign contribution, including any transfer to other associations</li>
                    <li>Opening and closing balances of foreign contribution</li>
                </ul>
                <p style="margin-top:16px;">All filing is completed on the <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">FCRA online portal (fcraonline.nic.in)</a>. If your association is also due for its five-year <a href="/fcra-renewal-5-year-cycle">FCRA renewal (5-year cycle)</a>, Patron can align the annual return and renewal so both stay compliant.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: COMMON MISTAKES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FC-4 Mistakes Patron Helps You Avoid</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Mistake</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>Skipping the nil return</td>
                            <td>Associations assume that with no foreign contribution there is nothing to file. A nil return in Form FC-4 is still mandatory; skipping it is a default.</td>
                            <td>Patron files the nil return each year even when no foreign contribution is received or utilised, keeping your compliance record clean.</td>
                        </tr>
                        <tr>
                            <td>Missing the 31 December due date</td>
                            <td>Delay in filing the annual return is an offence under Section 37 of the FCRA and can be compounded on payment of a penalty.</td>
                            <td>We track the due date - within nine months of financial year end - and file on or before 31 December with proactive reminders.</td>
                        </tr>
                        <tr>
                            <td>Filing without the CA certificate</td>
                            <td>Where foreign contribution is received or utilised, FC-4 must carry a chartered accountant certificate and audited accounts; filing without them is defective.</td>
                            <td>Patron coordinates the CA certificate and the audited receipt and payment account, income and expenditure statement, and balance sheet before submission.</td>
                        </tr>
                        <tr>
                            <td>Attempting offline or postal filing</td>
                            <td>FC-4 is filed only online on fcraonline.nic.in; any physical or postal submission is not accepted and leaves the return unfiled.</td>
                            <td>We submit digitally on the FCRA portal with all uploads and save the acknowledgement for your records.</td>
                        </tr>
                        <tr>
                            <td>Commingling foreign contribution with other funds</td>
                            <td>Associations must maintain a separate set of accounts exclusively for foreign contribution; commingling makes the return and any inspection difficult.</td>
                            <td>Patron sets up and maintains separate FCRA accounts and records so the return reconciles cleanly and is inspection-ready.</td>
                        </tr>
                        <tr>
                            <td>Not preserving records after filing</td>
                            <td>Accounts, records and vouchers must be preserved for production during inspection or audit; gaps create exposure.</td>
                            <td>We guide record preservation on a yearly basis so accounts and vouchers can be produced whenever required by the authorities.</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 8: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Fees for FCRA Form FC-4 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>Free FC-4 Scoping Call</td>
                            <td>Free - a short call to review your FCRA registration, foreign contribution position, and whether a nil or full return applies</td>
                        </tr>
                        <tr>
                            <td>Nil Return Filing (Form FC-4)</td>
                            <td>Starting from INR 5,000 (Exl. GST &amp; Govt. Charges) - final quote on assessment</td>
                        </tr>
                        <tr>
                            <td>Full FC-4 Filing (foreign contribution received)</td>
                            <td>Starting from INR 15,000 (Exl. GST &amp; Govt. Charges) - final quote on assessment; includes reconciliation, financial statements and CA certificate coordination</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of foreign contribution transactions, the number of donors, and the complexity of the accounts.</p>
                <p style="margin-top:16px;"><strong>Get a free FCRA FC-4 consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20filing%20the%20FCRA%20annual%20return%20in%20Form%20FC-4%20-%20please%20share%20a%20quote." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FCRA Form FC-4 Due Date and Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>Financial Year</td>
                            <td>1 April to 31 March - the period for which foreign contribution received and utilised is reported</td>
                        </tr>
                        <tr>
                            <td>Accounts and Audit</td>
                            <td>After 31 March - preparation and audit of the receipt and payment account, income and expenditure statement, and balance sheet</td>
                        </tr>
                        <tr>
                            <td>CA Certificate</td>
                            <td>Before filing - chartered accountant certificate obtained where foreign contribution is received or utilised</td>
                        </tr>
                        <tr>
                            <td>FC-4 Due Date</td>
                            <td>On or before 31 December - within nine months of the close of the financial year</td>
                        </tr>
                        <tr>
                            <td>Example - FY 2025-26</td>
                            <td>Return due by 31 December 2026</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Plan ahead:</strong> Because FC-4 requires audited accounts and, where applicable, a CA certificate, it is best to begin reconciliation and audit soon after the financial year closes on 31 March. This leaves ample time to file well before the 31 December deadline and avoid Section 37 compounding.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: WHY PATRON -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Choose Patron for FCRA FC-4 Filing</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="feature-title">FCRA Compliance Specialists</h3>
                <p class="feature-description">Focused experience with FCRA, 2010 and the FCRA Rules, 2011 - Form FC-4, nil returns, CA certification and record-keeping for NGOs, trusts, societies and Section 8 companies.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3 class="feature-title">On-Time Filing, Every Year</h3>
                <p class="feature-description">We track the 31 December due date and file within nine months of financial year end, protecting your registration from Section 37 penalties and compounding.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="feature-title">CA Certificate Coordinated</h3>
                <p class="feature-description">Where foreign contribution is received or utilised, we coordinate the CA certificate and audited receipt and payment account, income and expenditure statement, and balance sheet.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                </div>
                <h3 class="feature-title">Nil Returns Handled</h3>
                <p class="feature-description">No foreign contribution this year? We prepare and submit the mandatory nil Form FC-4 online, so a quiet year does not become a default.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                </div>
                <h3 class="feature-title">Clean Records, Inspection-Ready</h3>
                <p class="feature-description">We help maintain separate FCRA accounts and preserve records and vouchers so they can be produced for inspection or audit whenever required.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="feature-title">15+ Years Across NGO Compliance</h3>
                <p class="feature-description">CA and CS coordination under one roof, with 15+ years supporting FCRA registration, renewal, quarterly declarations and annual returns for non-profits across India.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 11: PENALTY AND RECORDS -->
<section class="content-section" id="penalty-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Penalty for Late Filing and Record Preservation</h2>
            <div class="content-text">
                <p><strong>Penalty under Section 37:</strong> Delay in filing the annual return is an offence under Section 37 of the FCRA. It can be compounded on payment of the higher of <strong>Rs. 1,00,000 or 5% of the foreign contribution received during the period of non-submission</strong>. Persistent failure to file the annual return can lead to <strong>suspension or cancellation of FCRA registration</strong> by the Ministry of Home Affairs.</p>
                <p><strong>Repeated default:</strong> Non-filing is not a one-time risk. Continued failure to file FC-4 can escalate from a compoundable offence to suspension and, ultimately, cancellation of registration - which stops the association from receiving foreign contribution altogether.</p>
                <p><strong>Record preservation:</strong> Associations must maintain a separate set of accounts and records exclusively for foreign contribution, on a yearly basis, and preserve the accounts, records and vouchers as required under the FCRA and its Rules, so they can be produced for inspection or audit by the authorities.</p>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Bottom line:</strong> Filing Form FC-4 on time each year - whether a full return or a nil return - is the simplest way to protect your FCRA registration. Patron manages the deadline, the accounts, the CA certificate and the online submission so you stay compliant.</p>
                </div>
                <p style="margin-top:16px;">Related FCRA services: <a href="/fcra-registration">FCRA Registration</a>, <a href="/fcra-renewal-5-year-cycle">FCRA Renewal (5-Year Cycle)</a>, <a href="/fcra-fc-6-prior-intimation-and-bank-account">FCRA FC-6 Prior Intimation and Bank Account</a>, and <a href="/fcra-quarterly-receipt-declaration">FCRA Quarterly Receipt Declaration</a>.</p>
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
                    <p class="faq-expanded__lead">Answers to the most common questions from NGOs, charitable trusts, societies and Section 8 companies filing the FCRA annual return in Form FC-4.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Form FC-4 under FCRA?</h3>
                        <div class="faq-expanded__a"><p>Form FC-4 is the mandatory annual return that every association registered or granted prior permission under the Foreign Contribution (Regulation) Act, 2010 must submit to the Ministry of Home Affairs, reporting the foreign contribution received and utilised during the financial year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">By what date must FC-4 be filed each year?</h3>
                        <div class="faq-expanded__a"><p>FC-4 must be submitted online on or before 31 December, i.e. within nine months of the end of the financial year (1 April to 31 March). For example, the return for FY 2025-26 is due by 31 December 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do we have to file FC-4 if we received no foreign contribution this year?</h3>
                        <div class="faq-expanded__a"><p>Yes. Filing a nil return in Form FC-4 is compulsory even if no foreign contribution was received or utilised during the year. For a nil return, the CA certificate and audited financial statements are not required to be uploaded.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Which documents must be attached to Form FC-4?</h3>
                        <div class="faq-expanded__a"><p>When foreign contribution is received or utilised, FC-4 must carry a chartered accountant certificate, the audited statement of accounts comprising the receipt and payment account, the income and expenditure statement, and the balance sheet for the financial year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late or non-filing of FC-4?</h3>
                        <div class="faq-expanded__a"><p>Late filing is an offence under the FCRA. It can be compounded on payment of the higher of Rs. 1,00,000 or 5% of the foreign contribution received during the period of non-submission, and repeated default can lead to suspension or cancellation of FCRA registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can we file FC-4 offline or send it by post?</h3>
                        <div class="faq-expanded__a"><p>No. FC-4 is filed exclusively online on the FCRA portal (fcraonline.nic.in). The form is digitally submitted with the required uploads; no offline or postal filing is permitted.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long must we keep FCRA records after filing FC-4?</h3>
                        <div class="faq-expanded__a"><p>Associations must maintain separate accounts of foreign contribution on a yearly basis and preserve the accounts, records and vouchers as required under the FCRA and its Rules, so they can be produced for inspection or audit by the authorities.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your FC-4 Before the 31 December Deadline</h2>
            <div class="content-text">
                <p><strong>The clock is set by law:</strong> Form FC-4 is due within nine months of the close of the financial year - on or before 31 December. Leaving it late risks a Section 37 offence that can be compounded on the higher of Rs. 1,00,000 or 5% of the foreign contribution received during the period of non-submission.</p>
                <p><strong>Nil year? Still file:</strong> If your association received no foreign contribution, the nil return is still mandatory. A missed nil return is treated as a default just like any other.</p>
                <p><strong>Action:</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a> for a free FC-4 scoping call, or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20filing%20the%20FCRA%20annual%20return%20in%20Form%20FC-4." target="_blank">WhatsApp us</a>. Nil returns from INR 5,000; full FC-4 filing from INR 15,000 (Exl. GST &amp; Govt. Charges) - final quote on assessment.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content" style="text-align:left;">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's FCRA Team Today</h2>
            <p style="color:rgba(255,255,255,0.92);">The FCRA annual return in Form FC-4 is a yearly obligation for every association registered or granted prior permission under the Foreign Contribution (Regulation) Act, 2010. It must be filed online on fcraonline.nic.in on or before 31 December, with the chartered accountant certificate and audited accounts where foreign contribution is received or utilised, and as a nil return where it is not.</p>
            <p style="color:rgba(255,255,255,0.92);">Patron Accounting reconciles your foreign contribution accounts, prepares the receipt and payment account, income and expenditure statement and balance sheet, coordinates the CA certificate, and submits Form FC-4 on the portal - on time, every year - so your association avoids Section 37 penalties and protects its FCRA registration.</p>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20filing%20the%20FCRA%20annual%20return%20in%20Form%20FC-4." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FCRA%20Form%20FC-4%20Annual%20Return%20Filing&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20filing%20the%20FCRA%20annual%20return%20in%20Form%20FC-4.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- RELATED FCRA SERVICES -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related FCRA Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Form FC-4 is one part of the FCRA compliance lifecycle. Patron supports registration, renewal, prior intimation and quarterly declarations too.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">FCRA Compliance for NGOs and Trusts</div>
                <div class="pa-block-sub">End-to-end support across the FCRA lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="/fcra-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">FCRA Registration</div><div class="pa-card-sub">Get registered</div></div></a>
                    <a href="/fcra-renewal-5-year-cycle" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M23 4v6h-6M1 20v-6h6"/><path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/></svg></div><div><div class="pa-card-title">FCRA Renewal</div><div class="pa-card-sub">5-year cycle</div></div></a>
                    <a href="/fcra-fc-6-prior-intimation-and-bank-account" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></div><div><div class="pa-card-title">FC-6 Prior Intimation</div><div class="pa-card-sub">Bank account</div></div></a>
                    <a href="/fcra-quarterly-receipt-declaration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Quarterly Declaration</div><div class="pa-card-sub">Receipt disclosure</div></div></a>
                </div>
            </div>

            <div class="pa-city-block" style="margin-top:40px;">
                <div class="pa-block-title">Patron Offices Serving NGOs and Trusts</div>
                <div class="pa-block-sub">4-office network with pan-India remote engagement</div>
                <div class="pa-city-grid">
                    <a href="/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CHOOSE YOUR CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50,#F9FAFB);">
  <div class="content-container"><div class="text-content">
    <h2 class="section-title">FCRA Annual Return (Form FC-4) in Other Cities</h2>
    <div class="content-text"><p>Patron delivers fcra annual return (form fc-4) for trusts, societies, Section 8 companies and NGOs in Mumbai and across India. Choose your city:</p></div>
    <div class="pa-city-grid"><a href="/fcra-fc-4-annual-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange,#E8712C)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><span class="pa-city-card" aria-current="page" style="border-color:var(--orange,#E8712C);background:#FFF7F2;position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange,#E8712C)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:10px;right:12px;font-size:10px;font-weight:700;color:var(--orange,#E8712C);">YOU'RE HERE</span></span><a href="/fcra-fc-4-annual-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange,#E8712C)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a><a href="/fcra-fc-4-annual-return/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange,#E8712C)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div>
  </div></div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 1 July 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 1 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed periodically and immediately on any amendment to the Foreign Contribution (Regulation) Act, 2010, the FCRA Rules, 2011, Form FC-4 requirements, or Ministry of Home Affairs notifications affecting the FCRA annual return.</p>
        </div>
    </div>
</section>


</main>

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
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

var selectedCountry = countries[0];

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

document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

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
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var m = (btn.getAttribute('onclick') || '').match(/getElementById\('([^']+)'\)/);
        return { btn: btn, section: m ? document.getElementById(m[1]) : null };
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
