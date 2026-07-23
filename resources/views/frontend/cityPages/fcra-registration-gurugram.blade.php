

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
    <title>FCRA Registration for NGOs Gurugram - MHA & Renewal</title>
    <meta name="description" content="FCRA registration in Gurugram for NGOs and trusts. Foreign donation license from MHA. SBI account, Darpan ID, annual returns. Call +91 945 945 6700.">
    <link rel="canonical" href="/fcra-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FCRA Registration for NGOs Gurugram - MHA & Renewal">
    <meta property="og:description" content="FCRA registration in Gurugram for NGOs and trusts. Foreign donation license from MHA. SBI account, Darpan ID, annual returns. Call +91 945 945 6700.">
    <meta property="og:url" content="/fcra-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/fcra-registration-gurugram-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FCRA Registration for NGOs Gurugram - MHA & Renewal">
    <meta name="twitter:description" content="FCRA registration in Gurugram for NGOs and trusts. Foreign donation license from MHA. SBI account, Darpan ID, annual returns. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/fcra-registration-gurugram-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FCRA Registration in Gurugram | Foreign Funding",
      "description": "FCRA registration in Gurugram for NGOs and trusts. Foreign donation license from MHA. SBI account, Darpan ID, annual returns. Call +91 945 945 6700.",
      "url": "/fcra-registration/gurugram",
      "serviceType": "FCRA Registration in Gurugram | Foreign Funding",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
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
        "url": "/fcra-registration/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "10",
          "maxPrice": "15000",
          "priceCurrency": "INR"
        }
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
          "name": "FCRA Registration in India: Process, Fees and Compliance",
          "item": "https://www.patronaccounting.com/fcra-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FCRA Registration in Gurugram | Foreign Funding",
          "item": "https://www.patronaccounting.com/fcra-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who needs FCRA registration in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Any Indian trust, society, or Section 8 company that receives or plans to receive foreign contributions or donations. This includes charitable NGOs, CSR foundations, educational trusts, healthcare organizations, religious bodies, and social enterprises. Without FCRA, accepting foreign funds is illegal under the FCRA 2010 and attracts severe penalties including imprisonment."
          }
        },
        {
          "@type": "Question",
          "name": "How much does FCRA registration cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fee: Rs 10,000 for Regular Registration (FC-3A) or Rs 5,000 for Prior Permission (FC-3B). Professional fee: Rs 15,000 to Rs 30,000 (covers eligibility assessment, Darpan ID, SBI account coordination, MHA application, and query response). Darpan ID and SBI account opening: Rs 2,000-5,000 additional. Call +91 945 945 6700 for a detailed quote."
          }
        },
        {
          "@type": "Question",
          "name": "How long does FCRA registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total timeline: 2-6 months. Filing and Diary Number: immediate. Mandatory 30-day objection waiting period: 1 month. FCRA Registration Approved: 1-3 months. Certificate issuance: after examination approval. If a third-party objection is filed, the timeline extends by 2-4 months for hearing and resolution."
          }
        },
        {
          "@type": "Question",
          "name": "Why is the SBI New Delhi account mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 2020 Amendment mandates that all foreign contributions must be received in a designated FCRA account at SBI Main Branch, 11 Sansad Marg, New Delhi - not at any Gurugram SBI branch. Funds received in this account can then be transferred to a local utilization account in any PFMS-compliant scheduled bank for program activities."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 20% admin cap and how does it work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 2020 Amendment limits administrative expenses to 20% of total foreign contributions received (reduced from the earlier 50%). Administrative expenses include salaries of non-program staff, office rent, utilities, and overhead. The remaining 80% must be spent on program activities. Exceeding the cap risks show-cause notice and potential FCRA cancellation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Regular Registration and Prior Permission?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Regular Registration (FC-3A): for established organizations with 3+ years of operation and Rs 10 lakh+ spent, seeking ongoing foreign funding from multiple donors. 5-year validity. Rs 10,000 fee. Prior Permission (FC-3B): for newer organizations with a specific committed donor and defined project. Rs 5,000 fee. Prior Permission can be upgraded to Regular Registration after building track record."
          }
        },
        {
          "@type": "Question",
          "name": "Does FCRA registration expire?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. FCRA registration has 5-year validity. The renewal application must be filed on the MHA portal at least 6 months before the expiry date. Late renewal risks lapse of registration, meaning the organization loses authority to receive foreign contributions. Annual returns (Form FC-4) must be filed every year within 9 months of financial year end, regardless of whether foreign contributions were received. Quick Answers FCRA kis ke liye zaroori hai? Kisi bhi Indian NGO, trust, society, ya Section 8 company ke liye jo foreign donation receive karna chahti hai. Bina FCRA ke foreign paisa lena illegal hai. MHA se permission chahiye. SBI Delhi mein account kyun? 2020 Amendment ke baad sabhi foreign contributions sirf SBI Main Branch, New Delhi mein receive ho sakti hain. Gurugram mein nahi. SBI Delhi se local utilization account mein transfer kar sakte ho. Kitne din lagte hain? Total 90-180 din. Preparation: 30-45 din (Darpan + SBI + documents). MHA review: 60-120 din. Queries ka jawab: 15-30 din extra. Pehle se plan karein."
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
            background-size: 12px 12px; background-position: center; background-repeat: no-repeat;
        }
        main section table { width: 100%; border-collapse: collapse; border: none; }
        main section table thead tr th {
            padding: 14px 18px; font-size: 13px; font-weight: 700;
            color: var(--white); text-transform: uppercase; letter-spacing: 0.05em;
            background: var(--blue); border: none !important;
            text-align: left; white-space: nowrap;
        }
        main section table thead tr th:first-child { border-top-left-radius: var(--radius-md); }
        main section table thead tr th:last-child { border-top-right-radius: var(--radius-md); }
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
        .form-label { display: block; font-size: 13px; font-weight: 600; color: var(--text-primary); margin-bottom: 6px; }
        .form-input, .form-select {
            width: 100%; padding: 11px 14px; border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-sm); font-family: 'Barlow', sans-serif;
            font-size: 14px; color: var(--text-primary); background: var(--white);
            transition: border-color 0.2s, box-shadow 0.2s; outline: none;
        }
        .form-input:focus, .form-select:focus { border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.1); }
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D; }
        .phone-group {
            display: flex; align-items: center; gap: 0;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-sm);
            transition: border-color 0.2s;
        }
        .phone-group:focus-within { border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.1); }
        .phone-group.input-error { border-color: #FD6B6D; }
        .phone-group .form-input { border: none; box-shadow: none; }

        .country-code-dropdown {
            display: flex; align-items: center; gap: 4px;
            padding: 8px 8px 8px 12px; cursor: pointer; position: relative;
            border-right: 1px solid var(--gray-200); flex-shrink: 0;
            font-family: 'Barlow', sans-serif;
        }
        .selected-flag { font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji","Twemoji Mozilla",sans-serif; font-size: 18px; width: 26px; overflow: hidden; display: inline-block; }
        .selected-code { font-size: 13px; font-weight: 600; color: var(--text-primary); }
        .dropdown-arrow { width: 12px; height: 12px; color: var(--gray-400); transition: transform 0.2s; }
        .country-dropdown-list {
            display: none; position: absolute; top: 100%; left: 0; min-width: 260px;
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-sm); box-shadow: var(--shadow-lg); z-index: 100;
            max-height: 220px; overflow-y: auto;
        }
        .country-dropdown-list.show { display: block; }
        .country-search-input {
            width: 100%; padding: 8px 12px; border: none; border-bottom: 1px solid var(--gray-200);
            font-size: 13px; outline: none; font-family: 'Barlow', sans-serif;
        }
        .country-option {
            display: flex; align-items: center; gap: 8px;
            padding: 8px 12px; cursor: pointer; font-size: 13px; transition: background 0.15s;
        }
        .country-option:hover { background: var(--gray-50); }
        .country-option .co-flag { font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif; font-size: 16px; width: 24px; }

        .btn-submit {
            width: 100%; padding: 14px; background: var(--orange); color: var(--white);
            border: none; border-radius: var(--radius-sm); font-family: 'Barlow', sans-serif;
            font-size: 15px; font-weight: 700; cursor: pointer; transition: all 0.25s ease;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-1px); box-shadow: 0 4px 12px rgba(232,113,44,0.3); }
        .form-response-note { font-size: 12px; color: var(--text-muted); text-align: center; margin-top: 12px; }

        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item {
            display: flex; align-items: center; gap: 4px;
            font-size: 11px; color: var(--text-muted); font-weight: 500;
        }
        .form-footer-item svg { width: 12px; height: 12px; }
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { margin-bottom: 16px; }
        .form-success h3 { color: var(--blue); font-size: 20px; margin-bottom: 8px; }
        .form-success p { color: var(--text-muted); font-size: 14px; }

        /* Content Sections */
        .content-section { padding: 64px 32px; }
        .content-container { max-width: 900px; margin: 0 auto; }
        .section-container { max-width: 1200px; margin: 0 auto; padding: 0 32px; }
        .section-header { text-align: center; margin-bottom: 48px; }
        .section-header h2 { margin-bottom: 12px; }
        .section-header p { color: var(--text-muted); font-size: 15px; max-width: 600px; margin: 0 auto; }
        .section-title { margin-bottom: 24px; }
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 6px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 14px; height: 14px; }
        .content-text { font-size: 15px; line-height: 1.7; color: var(--text-secondary); }
        .content-text p { margin-bottom: 16px; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 20px 24px; border-radius: 0 var(--radius-md) var(--radius-md) 0;
            margin: 20px 0;
        }
        .highlight-box p { color: var(--text-primary); margin-bottom: 8px; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .text-content { max-width: 100%; }
        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { }
        .column-image { position: sticky; top: 24px; }
        .illustration-placeholder {
            background: var(--gray-50); border-radius: var(--radius-lg);
            padding: 32px; text-align: center; border: 1px solid var(--gray-200);
        }
        .illustration-icon { margin: 0 auto 16px; }
        .illustration-badge {
            display: flex; flex-direction: column; gap: 2px;
            font-size: 13px; color: var(--text-muted);
        }
        .illustration-badge strong { color: var(--blue); font-size: 14px; }

        /* Steps Section */
        .steps-section { padding: 80px 32px; background: var(--gray-50); }
        .steps-container { max-width: 1000px; margin: 0 auto; display: flex; flex-direction: column; gap: 32px; }
        .step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 40px;
            background: var(--white); border-radius: var(--radius-lg);
            padding: 40px; box-shadow: var(--shadow-md); border: 1px solid var(--gray-100);
            align-items: center;
        }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { }
        .step-badge {
            display: inline-block; padding: 4px 14px; background: var(--orange-light);
            color: var(--orange); font-size: 12px; font-weight: 700;
            border-radius: 50px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 12px;
        }
        .step-title { font-size: 20px; font-weight: 700; color: var(--blue); margin-bottom: 12px; }
        .step-description { font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 16px; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 8px; }
        .highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--green); background: rgba(16,185,129,0.08);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: #065F46;
        }
        .highlight-tag svg { width: 12px; height: 12px; }
        .step-visual { display: flex; justify-content: center; }
        .step-illustration {
            background: var(--gray-50); border-radius: var(--radius-lg);
            padding: 32px; text-align: center; width: 100%; position: relative;
            border: 1px solid var(--gray-200);
        }
        .step-illustration .illustration-icon { margin-bottom: 8px; }
        .illustration-label { display: block; font-size: 13px; font-weight: 600; color: var(--blue); margin-top: 8px; }
        .step-number-large {
            position: absolute; bottom: 8px; right: 16px;
            font-size: 48px; font-weight: 800; color: var(--blue); opacity: 0.06;
            line-height: 1;
        }

        /* Why Choose / Benefits */
        .why-choose-section { padding: 80px 32px; background: var(--blue-lighter); }
        .features-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;
            max-width: 1200px; margin: 0 auto;
        }
        .feature-card {
            background: var(--white); border-radius: var(--radius-lg);
            padding: 28px; box-shadow: var(--shadow-sm); border: 1px solid var(--gray-100);
            transition: all 0.25s ease;
        }
        .feature-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
        .feature-icon {
            width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md); margin-bottom: 16px;
        }
        .feature-icon svg { width: 22px; height: 22px; color: var(--orange); }
        .feature-title { font-size: 16px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .feature-text { font-size: 13px; color: var(--text-muted); line-height: 1.5; }

        /* Stats Bar */
        .stats-bar { background: var(--blue); padding: 36px 32px; }
        .stats-container {
            max-width: 1200px; margin: 0 auto;
            display: flex; align-items: center; justify-content: space-between; gap: 40px; flex-wrap: wrap;
        }
        .stat-item { display: flex; align-items: center; gap: 14px; }
        .stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.1); border-radius: var(--radius-sm);
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 22px; font-weight: 800; color: var(--white); line-height: 1.2; }
        .stat-label { font-size: 12px; color: rgba(255,255,255,0.7); font-weight: 500; }
        .certifications {
            display: flex; gap: 20px; padding-left: 20px; border-left: 1px solid rgba(255,255,255,0.15);
        }
        .cert-item {
            display: flex; align-items: center; gap: 6px;
            font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.85);
        }
        .cert-item svg { width: 16px; height: 16px; flex-shrink: 0; }

        /* TOC */
        .toc-section {
            background: var(--white); border-bottom: 1px solid var(--gray-200);
            padding: 12px 16px; position: sticky; top: 100px; z-index: 100;
        }
        .toc-container {
            max-width: 1200px; margin: 0 auto;
            display: flex; align-items: center; gap: 8px;
        }
        .toc-wrapper {
            display: flex; gap: 6px; overflow-x: auto; scroll-behavior: smooth;
            -ms-overflow-style: none; scrollbar-width: none; flex: 1;
        }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 8px 16px; background: var(--gray-50);
            border: 1px solid var(--gray-200); border-radius: 50px;
            font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 500;
            color: var(--text-secondary); white-space: nowrap; text-decoration: none;
            transition: all 0.2s ease; cursor: pointer;
        }
        .toc-btn:hover, .toc-btn.active { background: var(--orange-light); border-color: var(--orange); color: var(--orange); font-weight: 600; }
        .toc-arrow {
            background: none; border: 1px solid var(--gray-200); border-radius: 50%;
            width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;
            cursor: pointer; color: var(--text-muted); font-size: 14px; flex-shrink: 0;
            transition: all 0.2s;
        }
        .toc-arrow:hover { background: var(--gray-50); color: var(--blue); }

        /* Testimonials */
        .testimonials-section { padding: 64px 32px 0; background: var(--gray-50); }
        .testimonial-slider { }
        .reviews-cta {
            background: var(--blue); border-radius: var(--radius-lg);
            padding: 24px 32px; display: flex; align-items: center; justify-content: space-between; gap: 24px;
        }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.1); border-radius: var(--radius-sm); flex-shrink: 0;
        }
        .reviews-cta-icon svg { width: 20px; height: 20px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 16px; color: var(--white); margin-bottom: 2px; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; background: var(--orange); color: var(--white);
            border-radius: 50px; font-weight: 700; font-size: 14px;
            text-decoration: none; transition: all 0.25s; flex-shrink: 0;
        }
        .btn-cta:hover { background: var(--orange-dark); transform: translateY(-1px); }
        .btn-cta svg { width: 14px; height: 14px; }

        /* PA City/Cross-sell Cards */
        .pa-city-block { margin-bottom: 40px; }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 4px; }
        .pa-block-sub { font-size: 14px; color: var(--text-muted); margin-bottom: 20px; }
        .pa-city-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .pa-cross-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
        .pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 12px;
            padding: 16px; background: var(--white); border-radius: var(--radius-md);
            border: 1px solid var(--gray-200); text-decoration: none;
            transition: all 0.2s ease;
        }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); transform: translateY(-2px); }
        .pa-card-icon { flex-shrink: 0; }
        .pa-card-title { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub { font-size: 12px; color: var(--text-muted); }

        .spinner {
            width: 24px; height: 24px; border: 3px solid var(--gray-200);
            border-top-color: var(--orange); border-radius: 50%;
            animation: spin 0.8s linear infinite; display: inline-block;
            margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

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
            .testimonials-section { padding: 16px 20px 0 20px; }
            .pa-city-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 12px !important; }
            .pa-cross-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 12px !important; }
        }
        @media (max-width: 480px) {
            .pa-city-grid { grid-template-columns: 1fr !important; }
            .pa-cross-grid { grid-template-columns: 1fr !important; }
        }

        .content-section[id] { scroll-margin-top: 80px; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }
        /* WhatsApp Sticky Bar */
        .wa-sticky-bar {
            position: fixed; bottom: 0; left: 0; right: 0;
            background: #25D366; z-index: 9999; padding: 10px 20px;
            display: flex; align-items: center; justify-content: center; gap: 12px;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.15); transition: transform 0.35s ease;
        }
        .wa-sticky-bar.hidden { transform: translateY(100%); }
        .wa-sticky-bar-content { display: flex; align-items: center; gap: 12px; max-width: 1320px; width: 100%; justify-content: center; }
        .wa-sticky-bar-icon { width: 36px; height: 36px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.2); border-radius: 50%; }
        .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
        .wa-sticky-bar-text { font-family: 'Barlow', sans-serif; font-size: 15px; color: #fff; font-weight: 500; }
        .wa-sticky-bar-text strong { font-weight: 700; }
        .wa-sticky-bar-btn { display: inline-flex; align-items: center; gap: 6px; padding: 8px 22px; background: #fff; color: #25D366; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700; border: none; border-radius: 50px; cursor: pointer; text-decoration: none; transition: all 0.2s ease; flex-shrink: 0; }
        .wa-sticky-bar-btn:hover { background: #f0fdf4; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
        .wa-sticky-bar-close { background: none; border: none; cursor: pointer; color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1; padding: 4px 8px; transition: color 0.2s; flex-shrink: 0; font-family: 'Barlow', sans-serif; font-weight: 300; }
        .wa-sticky-bar-close:hover { color: #fff; }
        @media (max-width: 768px) { .wa-sticky-bar { padding: 8px 12px; gap: 8px; } .wa-sticky-bar-text { font-size: 13px; } .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; } .wa-sticky-bar-icon { width: 30px; height: 30px; } .wa-sticky-bar-icon svg { width: 16px; height: 16px; } }
        @media (max-width: 480px) { .wa-sticky-bar-text { display: none; } .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; } .wa-sticky-bar-btn::before { content: 'Join Community'; } .wa-sticky-bar-btn span { display: none; } }
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
                        FCRA Registration in Gurugram: Legal Authority to Receive Foreign Contributions
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">02 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Registration certificate (trust/society/Section 8), MOA/Trust Deed, audited financials (3 years), activity reports, Aadhaar/PAN of functionaries, Darpan ID, SBI FCRA account, DSC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Regular Registration: Rs 10,000 (govt). Prior Permission: Rs 5,000. Professional: Rs 15,000-30,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Trusts, societies, Section 8 companies with 3+ years of charitable activity and Rs 10 lakh+ spent</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 90-180 days (MHA review, queries, approval). Application preparation: 15-30 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FCRA%20Registration%20in%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20FCRA%20Registration%20services%20in%20Gurugram%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FCRA%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - FCRA Registration Gurugram'/>
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
                                   class='form-input' placeholder='Enter your city' value='Gurugram' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled>Select a service</option>
                                <!-- Zone A: SAME-CITY URLs for Gurugram (4-city non-starred services) -->
                                <option value="fcra-registration/gurugram" selected>FCRA Registration in Gurugram</option>
                                <option value="brand-copyright-registration">Brand Copyright Registration</option>
                                <option value="copyright-assignment">Copyright Assignment</option>
                                <option value="copyright-disclaimer">Copyright Disclaimer</option>
                                <option value="copyright-objection">Copyright Objection</option>
                                <option value="trademark-registration/gurugram">Trademark Registration in Gurugram</option>
                                <option value="private-limited-company-registration/gurugram">Private Limited Company Registration in Gurugram</option>
                                <option value="gst-registration/gurugram">GST Registration in Gurugram</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron managed our entire FCRA registration: Darpan ID, SBI Delhi account, and MHA application. They responded to two MHA queries within 48 hours each. Registration approved in 4 months. Without their expertise, we would still be waiting.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr. Sunita Rao</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Healthcare NGO, Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our CSR foundation needed FCRA for a US corporate partnership. Patron advised us on Prior Permission (FC-3B) since we were under 3 years old but had a committed donor. Perfect strategy. Approval in 90 days with the commitment letter.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Arun Bakshi</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CSR Director, Corporate Foundation, Cyber City</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron restructured our financial planning to meet the 20% admin cap. We were at 35% admin before their advisory. They helped reclassify expenses and adjust our budget. MHA compliance secured without compromising operations.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MA</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Meena Aggarwal</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trustee, Educational Trust, Sector 15</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our trust's FCRA was expiring in 3 months. Patron filed the renewal application on time, compiled the compliance history, and coordinated with MHA. Renewal approved before expiry. Continuous foreign funding maintained.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajiv Sharma</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Secretary, Charitable Trust, Civil Lines</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled FCRA alongside 12A and 80G for our newly formed Section 8 company. They created an integrated compliance framework. Three registrations coordinated efficiently. Every NGO needs this bundled approach.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Kavita Menon</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Social Enterprise, Golf Course Road</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
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
                    <p>Trusted FCRA registration partner for NGOs and social sector organizations in Gurugram.</p>
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
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">FCRA registration and NGO compliance across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in FCRA registration, MHA compliance, and NGO governance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">FCRA registrations, annual returns, and NGO compliance documents handled.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by NGOs, charitable trusts, CSR foundations, and educational institutions.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your IP and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why FCRA Registration Matters for Gurugram's Social Sector</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FCRA Registration Services at a Glance</strong></p>
                    <p>FCRA Registration under the Foreign Contribution (Regulation) Act 2010 is the mandatory legal authorization from the Ministry of Home Affairs (MHA) for any Indian NGO, trust, society, or Section 8 company to receive foreign contributions or donations. Without FCRA registration, accepting foreign funds is illegal and attracts severe penalties including imprisonment. Two types: Regular Registration (Form FC-3A) for ongoing foreign funding (organization must be 3+ years old, Rs 10 lakh+ spent, Rs 10,000 fee) and Prior Permission (Form FC-3B) for one-time/specific donor contributions (Rs 5,000 fee). Critical 2020 Amendment: mandatory FCRA account at SBI Main Branch New Delhi, 20% administrative expense cap, ban on sub-granting, and Aadhaar mandatory for all key functionaries. Darpan ID from NITI Aayog is a prerequisite. 5-year validity with renewal. Annual returns (Form FC-4) mandatory.</p>
                </div>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Foreign Contribution (Regulation) Act 2010, as amended 2020. FCRR 2011</td></tr>
                        <tr><td>Authority</td><td>Ministry of Home Affairs (MHA). Portal: <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">fcraonline.nic.in</a></td></tr>
                        <tr><td>Regular Registration</td><td>Form FC-3A. 3+ years operation. Rs 10 lakh+ spent. Rs 10,000 govt fee. Ongoing foreign funding</td></tr>
                        <tr><td>Prior Permission</td><td>Form FC-3B. Specific donor/amount/project. Rs 5,000 govt fee. One-time or project-based</td></tr>
                        <tr><td>Mandatory SBI Account</td><td>FCRA designated account at SBI, Main Branch, 11 Sansad Marg, New Delhi</td></tr>
                        <tr><td>Utilization Account</td><td>One 'Another FCRA Account' + one 'Utilization Account' in any PFMS-compliant scheduled bank</td></tr>
                        <tr><td>Admin Expense Cap</td><td>20% of foreign contribution (reduced from 50% by 2020 Amendment)</td></tr>
                        <tr><td>Validity</td><td>5 years. Renewal application 6 months before expiry</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Gurugram hosts a significant social sector ecosystem. Charitable trusts and NGOs in Sector 14, 15, and Civil Lines work on education, healthcare, and community development with international donor support. CSR foundations of corporates in DLF Cyber City channel foreign CSR contributions through FCRA-registered entities. International NGOs with India offices in Gurugram require FCRA. Educational trusts receive foreign alumni donations. For comprehensive information about <a href="/fcra-registration">FCRA registration across India</a>, visit our national service page.</p>
                <p>The 2020 Amendment significantly tightened FCRA compliance. The mandatory SBI New Delhi account means all foreign contributions must first be received in Delhi before being transferred to a local utilization account. The 20% admin cap forces organizations to spend 80% on programs. The sub-granting ban means organizations cannot pass foreign funds to other NGOs. You may also need <a href="/12a-registration">12A registration</a> for tax exemption and <a href="/80g-registration">80G registration</a> for donor tax deductions.</p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is FCRA Registration</h2>
                <div class="content-text what-is-definition">
                    <p>FCRA Registration is the legal approval from the Ministry of Home Affairs that authorizes an Indian organization (trust, society, or Section 8 company) to receive and utilize foreign contributions for social, cultural, educational, religious, or economic activities.</p>
                    <p>The registration links the organization to its mandatory SBI New Delhi FCRA account, establishes compliance with foreign fund regulations, and creates reporting obligations (annual returns via Form FC-4). The certificate contains the FCRA registration number, validity period, and approved bank account details.</p>
                    <p>5-year validity with mandatory renewal. For complete NGO compliance, pair FCRA with <a href="/12a-registration">12A registration</a>, <a href="/80g-registration">80G registration</a>, and <a href="/ngo-registration">NGO registration</a> services.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright Registration:</strong></p>
                    <ul>
                        <li><strong>FCRA 2010</strong> - Foreign Contribution (Regulation) Act governing foreign donations to Indian organizations</li>
                        <li><strong>SBI FCRA Account</strong> - Mandatory designated account at SBI Main Branch New Delhi for receiving foreign contributions</li>
                        <li><strong>Darpan ID</strong> - NITI Aayog NGO Darpan portal registration ID required before FCRA application</li>
                        <li><strong>Admin Cap</strong> - 20% limit on administrative expenses from foreign contributions (2020 Amendment)</li>
                        <li><strong>FC-4</strong> - Annual return filed with MHA reporting all foreign contributions received and utilized</li>
                    </ul>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Copyright symbol document -->
                            <rect x="40" y="20" width="120" height="140" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Copyright C symbol -->
                            <circle cx="100" cy="80" r="35" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                            <text x="100" y="95" font-size="40" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">&copy;</text>
                            <!-- Document lines -->
                            <line x1="60" y1="130" x2="140" y2="130" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <line x1="60" y1="142" x2="120" y2="142" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <line x1="60" y1="154" x2="100" y2="154" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <!-- Green check badge -->
                            <circle cx="150" cy="35" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M142 35l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="175" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Ministry of Home Affairs</span>
                        <strong>Foreign Funding License</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO NEEDS -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs FCRA Registration in Gurugram</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Charitable trusts and NGOs</strong> in Gurugram that receive or plan to receive donations from foreign individuals, organizations, foundations, or governments for social welfare, education, healthcare, child protection, or community development programs.</li>
                    <li><strong>CSR foundations and trusts</strong> of corporate companies in DLF Cyber City and Golf Course Road that receive foreign CSR contributions or international grant funding for social impact programs. Corporate CSR arms structured as Section 8 companies or trusts need FCRA.</li>
                    <li><strong>Photographers, graphic designers, and illustrators</strong> producing visual works - product photographs, marketing graphics, illustrations, architectural drawings, logos (as artistic works), and packaging designs. Artistic work copyright prevents unauthorized reproduction in Gurugram's competitive D2C and e-commerce market.</li>
                    <li><strong>Healthcare organizations and hospital trusts</strong> receiving foreign funding for medical programs, equipment, research, or community health initiatives. International health organizations require FCRA-registered partners for India programs.</li>
                    <li><strong>Film producers and video creators</strong> making documentaries, advertisements, corporate films, short films, and OTT content from Gurugram production houses. Cinematograph films have a specific registration process and Rs 5,000 fee.</li>
                    <li><strong>Startups and companies</strong> wanting to build an IP portfolio for investor due diligence, M&A preparation, or licensing revenue. A documented copyright portfolio increases company valuation and demonstrates IP maturity.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">7 FCRA Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment</td><td>Evaluating whether your organization qualifies for Regular Registration (3+ years, Rs 10 lakh+ spent) or Prior Permission (specific donor with commitment letter). Advising on the appropriate route.</td></tr>
                        <tr><td>Darpan ID Registration</td><td>Registering on the NITI Aayog NGO Darpan portal (ngodarpan.gov.in) for mandatory Darpan ID. Prerequisite for FCRA application. Requires organizational registration details and PAN.</td></tr>
                        <tr><td>SBI FCRA Account Opening</td><td>Coordinating the opening of the mandatory FCRA designated account at SBI Main Branch, 11 Sansad Marg, New Delhi. Assisting with documentation and SBI's verification requirements.</td></tr>
                        <tr><td>Form FC-3A/FC-3B Filing</td><td>Completing the FCRA application on fcraonline.nic.in. Uploading all documents in prescribed format. Digital signature. Government fee payment. FC-3A for Regular or FC-3B for Prior Permission.</td></tr>
                        <tr><td>MHA Query Response</td><td>MHA frequently raises queries during review. Preparing and submitting responses promptly with additional documents and clarifications to prevent approval delays.</td></tr>
                        <tr><td>Post-Registration Compliance</td><td>Annual return filing (Form FC-4), 20% admin cap monitoring, board member change reporting, renewal tracking (6 months before 5-year expiry), and ongoing compliance management.</td></tr>
                        <tr><td>12A and 80G Integration</td><td>Coordinating Section 12A (tax exemption) and Section 80G (donor tax deduction) alongside FCRA for comprehensive NGO compliance framework.</td></tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: PROCESS STEPS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How FCRA Registration Works in Gurugram: 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA-led team handles FCRA registration including Darpan ID, SBI account coordination, MHA application, query response, annual returns, and renewal management for Gurugram organizations.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Assess Eligibility and Get Darpan ID</h3>
                    <p class="step-description">Evaluate: 3+ years of operation, Rs 10 lakh+ spent for Regular Registration. Or specific committed donor for Prior Permission. Register on NITI Aayog Darpan portal for mandatory Darpan ID.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Eligibility OK</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Darpan Ready</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="60" y="42" font-size="18" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&copy;</text>
                                <line x1="30" y1="80" x2="90" y2="80" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Eligible</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Open SBI FCRA Account</h3>
                    <p class="step-description">Open the mandatory FCRA designated bank account at SBI, Main Branch, 11 Sansad Marg, New Delhi. This is the only account authorized to receive foreign contributions. 15-30 days process.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SBI Delhi Open</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Account Verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="35" width="60" height="12" rx="3" fill="#E5E7EB"/>
                                <rect x="30" y="52" width="60" height="12" rx="3" fill="#E5E7EB"/>
                                <circle cx="60" cy="25" r="5" fill="#F5A623"/>
                                <line x1="25" y1="80" x2="95" y2="80" stroke="#14365F" stroke-width="2" opacity="0.2"/>
                            </svg>
                        </div>
                        <span class="illustration-label">SBI Account</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Prepare and File FC-3A/FC-3B</h3>
                    <p class="step-description">Complete FCRA application on fcraonline.nic.in. Upload all documents in prescribed format. Chief Functionary digital signature. Pay Rs 10,000 (Regular) or Rs 5,000 (Prior Permission).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC-3A/3B Filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fee Paid</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                                <line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <line x1="30" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <rect x="65" y="78" width="40" height="16" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                                <text x="85" y="89" font-size="7" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial">SUBMITTED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">MHA Filed</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">MHA Review and Query Response</h3>
                    <p class="step-description">MHA reviews application over 60-120 days. May raise queries requesting additional documents or clarifications. Respond promptly with comprehensive supporting documentation to prevent delays.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MHA Reviewing</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Queries Answered</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="10" width="70" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="25" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="1"/>
                                <rect x="35" y="38" width="12" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                                <rect x="53" y="38" width="12" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                                <rect x="71" y="38" width="12" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                                <text x="60" y="25" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Under Review</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">FCRA Registration Approved</h3>
                    <p class="step-description">MHA issues FCRA registration certificate with unique registration number. 5-year validity. Organization can now legally receive foreign contributions through the SBI FCRA account.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FCRA Approved</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5-Year Valid</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="82" y1="62" x2="100" y2="80" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                <path d="M50 40l6 6 14-14" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Approved</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Ongoing Compliance</h3>
                    <p class="step-description">File annual returns (Form FC-4) within 9 months of financial year end. Monitor 20% admin expense cap. Report changes in board members or address to MHA. Renewal application 6 months before 5-year expiry.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns Filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewal Tracked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="60" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <path d="M55 35l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                                <line x1="35" y1="55" x2="85" y2="55" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                                <rect x="40" y="75" width="40" height="14" rx="3" fill="#F5A623" opacity="0.2"/>
                                <text x="60" y="85" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Compliant</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-box" style="margin-top:32px;max-width:1000px;margin-left:auto;margin-right:auto;">
            <p><strong>City Processing Note:</strong> Patron's Gurugram office on Golf Course Extension Road handles FCRA registration, SBI account coordination, MHA application, annual returns, and renewal management for NGOs, trusts, and CSR foundations across Gurugram.</p>
        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FCRA Registration in Gurugram</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Organization Registration:</strong> Trust Deed / MOA / Section 8 Certificate of Incorporation. Registration certificate. PAN of the organization.</li>
                    <li><strong>Financial Records:</strong> Last 3 years audited financial statements. Income and expenditure details. Activity reports with beneficiary details.</li>
                    <li><strong>Functionary Details:</strong> Aadhaar and PAN of all key functionaries / board members / trustees. Photographs. Contact details.</li>
                    <li><strong>Additional:</strong> Darpan ID certificate | SBI FCRA account details | Digital Signature Certificate (DSC) of Chief Functionary | Donor commitment letter (for FC-3B).</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common FCRA Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>SBI New Delhi Account Opening Delays</td><td>Gurugram NGOs must open account at SBI Delhi not any Gurugram branch. Specific requirements and timelines</td><td>Start SBI account opening at least 30 days before FCRA filing. SBI Main Branch, 11 Sansad Marg has specific FCRA account procedures. Patron coordinates the process.</td></tr>
                        <tr><td>Insufficient Activity Documentation</td><td>MHA requires evidence of 3 years of charitable activity but many NGOs lack formal documentation</td><td>Maintain activity documentation from day one: photographs, beneficiary lists, impact reports, media coverage. MHA rejects applications where activities cannot be verified.</td></tr>
                        <tr><td>20% Administrative Expense Cap Non-Compliance</td><td>Organizations accustomed to 50% threshold find expenses exceed new 20% cap</td><td>Restructure financial planning: move expenses to program budgets, reduce overhead, increase program spending proportion. Plan financial structure before receiving foreign funds.</td></tr>
                        <tr><td>Sub-Granting Ban</td><td>Organizations that previously sub-granted foreign funds to implementing partners can no longer do so</td><td>Each implementing organization must obtain its own FCRA. This fundamentally changes the funding model. Plan organizational restructuring early.</td></tr>
                        <tr><td>Aadhaar of All Functionaries</td><td>FCRA requires Aadhaar of every key functionary including NRI board members who may not have Aadhaar</td><td>Ensure all key functionaries have valid Aadhaar before application. NRI board members may need to obtain or update Aadhaar. Plan ahead for this requirement.</td></tr>
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
            <h2 class="section-title">FCRA Registration Fees in Gurugram 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Regular Registration (FC-3A)</td><td>Rs 10,000 govt + Rs 20,000-30,000 professional</td></tr>
                        <tr><td>Prior Permission (FC-3B)</td><td>Rs 5,000 govt + Rs 15,000-20,000 professional</td></tr>
                        <tr><td>Darpan ID Registration</td><td>Rs 2,000-3,000 professional</td></tr>
                        <tr><td>SBI FCRA Account Opening</td><td>Rs 3,000-5,000 professional</td></tr>
                        <tr><td>Annual Return (FC-4)</td><td>Rs 3,999-5,999 per year</td></tr>
                        <tr><td>FCRA Renewal (5-yearly)</td><td>Rs 10,000-15,000 professional</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 14,999 (Exl GST and Govt. Charges)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional fees cover eligibility assessment, Darpan ID, SBI coordination, MHA application, query response, and compliance setup. Annual returns and renewal are quoted separately.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FCRA%20Registration%20in%20Gurugram.%20Please%20share%20fee%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FCRA Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Darpan ID Registration</td><td>7-15 days</td></tr>
                        <tr><td>SBI FCRA Account Opening (New Delhi)</td><td>15-30 days</td></tr>
                        <tr><td>Document Compilation and Application Preparation</td><td>15-30 days</td></tr>
                        <tr><td>MHA Application Filing</td><td>Immediate after preparation</td></tr>
                        <tr><td>MHA Review</td><td>60-120 days</td></tr>
                        <tr><td>MHA Queries (if raised)</td><td>Additional 15-30 days</td></tr>
                        <tr><td>Total (end to end)</td><td>90-180 days</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Note:</strong> FCRA registration timelines depend on MHA review workload and query cycles. Start Darpan ID and SBI account opening early (these can be done in parallel). Document preparation quality reduces MHA queries. Plan at least 6 months before expected foreign funding.</p>
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
            <h2 class="section-title">Why Choose Patron for FCRA Registration in Gurugram</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">2020 Amendment Compliance</h3>
                <p class="feature-text">Expert guidance on mandatory SBI New Delhi account, 20% admin cap structuring, sub-granting ban compliance, and Aadhaar requirements for all functionaries.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                <h3 class="feature-title">Darpan + SBI Coordination</h3>
                <p class="feature-text">Managing the Darpan ID registration and SBI FCRA account opening simultaneously, reducing the overall preparation timeline.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3 class="feature-title">MHA Query Management</h3>
                <p class="feature-text">Preparing comprehensive responses to MHA queries with supporting documentation. Preventing approval delays from incomplete or late responses.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">12A/80G Integration</h3>
                <p class="feature-text">Coordinating FCRA with Section 12A and 80G registrations for complete NGO tax and foreign funding compliance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                <h3 class="feature-title">Annual Return Filing</h3>
                <p class="feature-text">Filing Form FC-4 annual returns with MHA. Maintaining records of all foreign contributions received and utilized. 20% admin cap monitoring.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div>
                <h3 class="feature-title">Renewal Management</h3>
                <p class="feature-text">Tracking 5-year validity and filing renewal application 6 months before expiry. Preventing FCRA lapse and maintaining continuous authority to receive foreign funds.</p>
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
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India for copyright registration, IP protection, and comprehensive accounting services.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regular Registration vs Prior Permission</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Regular Registration (FC-3A)</th><th>Prior Permission (FC-3B)</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility</td><td>3+ years operation. Rs 10 lakh+ spent</td><td>Registered organization. Specific donor with commitment letter</td></tr>
                        <tr><td>Purpose</td><td>Ongoing foreign funding from multiple donors</td><td>One-time or project-based from specific donor</td></tr>
                        <tr><td>Form</td><td>FC-3A on fcraonline.nic.in</td><td>FC-3B on fcraonline.nic.in</td></tr>
                        <tr><td>Fee</td><td>Rs 10,000 government</td><td>Rs 5,000 government</td></tr>
                        <tr><td>Validity</td><td>5 years (renewable)</td><td>Project/donor specific period</td></tr>
                        <tr><td>Best For</td><td>Established NGOs with regular foreign donors</td><td>Newer organizations with committed foreign donor</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:12px;">External Authority: <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">MHA FCRA Portal (fcraonline.nic.in)</a></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES — Zone B: Parent + India-level links -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                <ul>
                    <li><a href="/copyright-registration">Copyright Registration in India</a> - National copyright registration service covering all categories across India</li>
                    <li><a href="/brand-copyright-registration">Brand Copyright Registration</a> - Comprehensive brand IP protection including logos, taglines, and brand assets</li>
                    <li><a href="/copyright-assignment">Copyright Assignment</a> - Transfer of copyright ownership with legal documentation and registration</li>
                    <li><a href="/copyright-disclaimer">Copyright Disclaimer</a> - Official disclaimer of copyright interest with the Copyright Office</li>
                    <li><a href="/copyright-objection">Copyright Objection</a> - Responding to third-party objections during the 30-day objection period</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand identity protection under Trade Marks Act 1999</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing services for individuals and businesses</li>
                    <li><a href="/statutory-audit">Statutory Audit Service</a> - Annual audit compliance for companies</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FCRA Registration</h2>
            <div class="content-text">
                <p>FCRA Registration is governed by the <strong>Foreign Contribution (Regulation) Act 2010</strong> and the <strong>Foreign Contribution (Regulation) Rules 2011</strong>. The <strong>2020 Amendment</strong> introduced significant changes including mandatory SBI New Delhi account, 20% admin cap, sub-granting ban, and Aadhaar requirements.</p>
                <p>The Ministry of Home Affairs (MHA) administers FCRA through the <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">FCRA Online Portal</a>. The Darpan ID from NITI Aayog is a mandatory prerequisite. All foreign contributions must flow through the designated SBI account at 11 Sansad Marg, New Delhi, before transfer to utilization accounts.</p>
                <p>Annual returns (Form FC-4) must be filed within 9 months of the financial year end through <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">fcraonline.nic.in</a>. FCRA registration has 5-year validity with renewal required 6 months before expiry. Non-compliance can lead to suspension or cancellation of registration by MHA.</p>
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
                    <h2 class="faq-expanded__title">FAQs - FCRA Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Answers to common questions about FCRA registration including eligibility, SBI account, Darpan ID, 2020 Amendment compliance, and annual returns for Gurugram NGOs and trusts.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Gurugram', 'enquiryService' => 'FCRA Registration in Gurugram'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who needs FCRA registration in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Any Indian trust, society, or Section 8 company that receives or plans to receive foreign contributions or donations. This includes charitable NGOs, CSR foundations, educational trusts, healthcare organizations, religious bodies, and social enterprises. Without FCRA, accepting foreign funds is illegal under the FCRA 2010 and attracts severe penalties including imprisonment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does FCRA registration cost?</h3>
                        <div class="faq-expanded__a"><p>Government fee: Rs 10,000 for Regular Registration (FC-3A) or Rs 5,000 for Prior Permission (FC-3B). Professional fee: Rs 15,000 to Rs 30,000 (covers eligibility assessment, Darpan ID, SBI account coordination, MHA application, and query response). Darpan ID and SBI account opening: Rs 2,000-5,000 additional. Call +91 945 945 6700 for a detailed quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does FCRA registration take?</h3>
                        <div class="faq-expanded__a"><p>Total timeline: 2-6 months. Filing and Diary Number: immediate. Mandatory 30-day objection waiting period: 1 month. FCRA Registration Approved: 1-3 months. Certificate issuance: after examination approval. If a third-party objection is filed, the timeline extends by 2-4 months for hearing and resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Why is the SBI New Delhi account mandatory?</h3>
                        <div class="faq-expanded__a"><p>The 2020 Amendment mandates that all foreign contributions must be received in a designated FCRA account at SBI Main Branch, 11 Sansad Marg, New Delhi - not at any Gurugram SBI branch. Funds received in this account can then be transferred to a local utilization account in any PFMS-compliant scheduled bank for program activities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the 20% admin cap and how does it work?</h3>
                        <div class="faq-expanded__a"><p>The 2020 Amendment limits administrative expenses to 20% of total foreign contributions received (reduced from the earlier 50%). Administrative expenses include salaries of non-program staff, office rent, utilities, and overhead. The remaining 80% must be spent on program activities. Exceeding the cap risks show-cause notice and potential FCRA cancellation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between Regular Registration and Prior Permission?</h3>
                        <div class="faq-expanded__a"><p>Regular Registration (FC-3A): for established organizations with 3+ years of operation and Rs 10 lakh+ spent, seeking ongoing foreign funding from multiple donors. 5-year validity. Rs 10,000 fee. Prior Permission (FC-3B): for newer organizations with a specific committed donor and defined project. Rs 5,000 fee. Prior Permission can be upgraded to Regular Registration after building track record.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does FCRA registration expire?</h3>
                        <div class="faq-expanded__a"><p>Yes. FCRA registration has 5-year validity. The renewal application must be filed on the MHA portal at least 6 months before the expiry date. Late renewal risks lapse of registration, meaning the organization loses authority to receive foreign contributions. Annual returns (Form FC-4) must be filed every year within 9 months of financial year end, regardless of whether foreign contributions were received.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>FCRA kis ke liye zaroori hai?</strong> Kisi bhi Indian NGO, trust, society, ya Section 8 company ke liye jo foreign donation receive karna chahti hai. Bina FCRA ke foreign paisa lena illegal hai. MHA se permission chahiye.</p>
                <p><strong>SBI Delhi mein account kyun?</strong> 2020 Amendment ke baad sabhi foreign contributions sirf SBI Main Branch, New Delhi mein receive ho sakti hain. Gurugram mein nahi. SBI Delhi se local utilization account mein transfer kar sakte ho.</p>
                <p><strong>Kitne din lagte hain?</strong> Total 90-180 din. Preparation: 30-45 din (Darpan + SBI + documents). MHA review: 60-120 din. Queries ka jawab: 15-30 din extra. Pehle se plan karein.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why FCRA Registration Matters for Gurugram's Social Sector</h2>
            <div class="content-text">
                <p>A Gurugram educational trust receives a commitment from a US-based alumni foundation for a Rs 50 lakh annual grant. Without FCRA, the trust cannot legally receive this money. The trust applies but discovers it needs Darpan ID (2 weeks), SBI New Delhi account (3-4 weeks), and MHA approval (3-6 months). The first year's grant is delayed by 6 months. The foundation redirects funds to a FCRA-registered competitor. Meanwhile, a healthcare NGO exceeds the 20% admin cap and MHA issues a show-cause notice. Both situations are preventable with proactive registration and proper compliance.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your FCRA Registration in Gurugram Today</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:rgba(255,255,255,0.85);">FCRA Registration in Gurugram provides the legal authority for NGOs, trusts, and Section 8 companies to receive foreign contributions - with the 2020 Amendment requiring mandatory SBI New Delhi account, 20% admin cap, Aadhaar compliance, and ongoing annual reporting.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road handles FCRA registration including Darpan ID, SBI account coordination, MHA application, query response, annual returns, and renewal management for NGOs, trusts, and CSR foundations across Gurugram.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP, with offices in Pune, Mumbai, Delhi, and Gurugram, has served 10,000+ businesses with a 4.9 Google rating and 50,000+ documents filed over 15+ years.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FCRA%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FCRA%20Registration%20in%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20FCRA%20Registration%20services%20in%20Gurugram%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY PAGES GRID — Zone C: Gurugram NOT interlinked (4-city non-starred) + Zone D: Same-city cross-sell -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FCRA Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">FCRA registration services available in major cities across India with local office support.</p>
            <!-- Block 1: City Cards (4-city non-starred) — Gurugram = current city, NOT a link -->
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/fcra-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fcra-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fcra-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <!-- CURRENT CITY: Gurugram — NOT a link, visual "You're here" indicator -->
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                        <span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span>
                    </div>
                </div>
            </div>
            <!-- Block 2: Cross-sell — Zone D: Same-city URLs for Gurugram -->
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for FCRA Registration in Gurugram</div>
                <div class="pa-cross-grid">
                    <a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/llp-incorporation/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 02 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">02 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 02 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly for accuracy. FCRA 2010 provisions, 2020 Amendment requirements, MHA portal processes, SBI FCRA account procedures, and Darpan registration rules are verified against official government notifications. Gurugram NGO sector information is validated with each review.</p>
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


<script>
// Country code data and phone validation
var countries=[{name:"India",code:"+91",flag:"\ud83c\uddee\ud83c\uddf3"},{name:"United States",code:"+1",flag:"\ud83c\uddfa\ud83c\uddf8"},{name:"United Kingdom",code:"+44",flag:"\ud83c\uddec\ud83c\udde7"},{name:"UAE",code:"+971",flag:"\ud83c\udde6\ud83c\uddea"},{name:"Singapore",code:"+65",flag:"\ud83c\uddf8\ud83c\uddec"},{name:"Australia",code:"+61",flag:"\ud83c\udde6\ud83c\uddfa"},{name:"Canada",code:"+1",flag:"\ud83c\udde8\ud83c\udde6"},{name:"Germany",code:"+49",flag:"\ud83c\udde9\ud83c\uddea"},{name:"France",code:"+33",flag:"\ud83c\uddeb\ud83c\uddf7"},{name:"Japan",code:"+81",flag:"\ud83c\uddef\ud83c\uddf5"},{name:"China",code:"+86",flag:"\ud83c\udde8\ud83c\uddf3"},{name:"South Korea",code:"+82",flag:"\ud83c\uddf0\ud83c\uddf7"},{name:"Brazil",code:"+55",flag:"\ud83c\udde7\ud83c\uddf7"},{name:"Mexico",code:"+52",flag:"\ud83c\uddf2\ud83c\uddfd"},{name:"South Africa",code:"+27",flag:"\ud83c\uddff\ud83c\udde6"},{name:"Nigeria",code:"+234",flag:"\ud83c\uddf3\ud83c\uddec"},{name:"Kenya",code:"+254",flag:"\ud83c\uddf0\ud83c\uddea"},{name:"Saudi Arabia",code:"+966",flag:"\ud83c\uddf8\ud83c\udde6"},{name:"Qatar",code:"+974",flag:"\ud83c\uddf6\ud83c\udde6"},{name:"Kuwait",code:"+965",flag:"\ud83c\uddf0\ud83c\uddfc"},{name:"Bahrain",code:"+973",flag:"\ud83c\udde7\ud83c\udded"},{name:"Oman",code:"+968",flag:"\ud83c\uddf4\ud83c\uddf2"},{name:"Nepal",code:"+977",flag:"\ud83c\uddf3\ud83c\uddf5"},{name:"Sri Lanka",code:"+94",flag:"\ud83c\uddf1\ud83c\uddf0"},{name:"Bangladesh",code:"+880",flag:"\ud83c\udde7\ud83c\udde9"},{name:"Malaysia",code:"+60",flag:"\ud83c\uddf2\ud83c\uddfe"},{name:"Thailand",code:"+66",flag:"\ud83c\uddf9\ud83c\udded"},{name:"Indonesia",code:"+62",flag:"\ud83c\uddee\ud83c\udde9"},{name:"Philippines",code:"+63",flag:"\ud83c\uddf5\ud83c\udded"},{name:"Vietnam",code:"+84",flag:"\ud83c\uddfb\ud83c\uddf3"},{name:"Italy",code:"+39",flag:"\ud83c\uddee\ud83c\uddf9"},{name:"Spain",code:"+34",flag:"\ud83c\uddea\ud83c\uddf8"},{name:"Netherlands",code:"+31",flag:"\ud83c\uddf3\ud83c\uddf1"},{name:"Sweden",code:"+46",flag:"\ud83c\uddf8\ud83c\uddea"},{name:"Switzerland",code:"+41",flag:"\ud83c\udde8\ud83c\udded"},{name:"Russia",code:"+7",flag:"\ud83c\uddf7\ud83c\uddfa"},{name:"Turkey",code:"+90",flag:"\ud83c\uddf9\ud83c\uddf7"},{name:"Egypt",code:"+20",flag:"\ud83c\uddea\ud83c\uddec"},{name:"Israel",code:"+972",flag:"\ud83c\uddee\ud83c\uddf1"},{name:"New Zealand",code:"+64",flag:"\ud83c\uddf3\ud83c\uddff"}];

function populateCountries(){var o=document.getElementById('countryOptions');if(!o)return;o.innerHTML='';countries.forEach(function(c){var d=document.createElement('div');d.className='country-option';d.innerHTML='<span class="co-flag">'+c.flag+'</span><span>'+c.name+'</span><span style="color:var(--text-muted);margin-left:auto;">'+c.code+'</span>';d.onclick=function(e){e.stopPropagation();document.getElementById('selectedFlag').textContent=c.flag;document.getElementById('selectedCode').textContent=c.code;document.getElementById('countryDropdownList').classList.remove('show');};o.appendChild(d);});}
function toggleCountryDropdown(e){e.stopPropagation();var l=document.getElementById('countryDropdownList');l.classList.toggle('show');}
function filterCountries(v){var opts=document.querySelectorAll('.country-option');v=v.toLowerCase();opts.forEach(function(o){o.style.display=o.textContent.toLowerCase().includes(v)?'flex':'none';});}
document.addEventListener('click',function(){var l=document.getElementById('countryDropdownList');if(l)l.classList.remove('show');});
function clearFieldError(el){el.classList.remove('input-error');}

function validatePhoneOnBlur(input){var code=document.getElementById('selectedCode').textContent;var phone=input.value.replace(/\D/g,'');var errEl=document.getElementById('phoneError');var group=document.getElementById('phoneGroup');if(!phone){errEl.style.display='none';group.classList.remove('input-error');return;}if(code==='+91'){if(!/^[6-9]\d{9}$/.test(phone)){errEl.textContent='Please enter a valid 10-digit Indian mobile number starting with 6-9';errEl.style.display='block';group.classList.add('input-error');return;}}else{if(phone.length<7||phone.length>15){errEl.textContent='Please enter a valid phone number (7-15 digits)';errEl.style.display='block';group.classList.add('input-error');return;}}errEl.style.display='none';group.classList.remove('input-error');}

function validateConsultationForm(){var isValid=true;var name=document.getElementById('consultFullName');var phone=document.getElementById('phoneNumberInput');var city=document.getElementById('consultCity');var service=document.getElementById('consultService');var code=document.getElementById('selectedCode').textContent;if(!name.value.trim()){name.classList.add('input-error');isValid=false;}if(!phone.value.trim()){document.getElementById('phoneGroup').classList.add('input-error');isValid=false;}else{var p=phone.value.replace(/\D/g,'');if(code==='+91'&&!/^[6-9]\d{9}$/.test(p)){document.getElementById('phoneGroup').classList.add('input-error');document.getElementById('phoneError').textContent='Please enter a valid 10-digit Indian mobile number';document.getElementById('phoneError').style.display='block';isValid=false;}else if(p.length<7){document.getElementById('phoneGroup').classList.add('input-error');isValid=false;}}if(!city.value.trim()){city.classList.add('input-error');isValid=false;}if(!service.value){service.classList.add('input-error');isValid=false;}if(isValid){document.getElementById('combinedMobileField').value=code+phone.value.replace(/\D/g,'');var btn=document.getElementById('formSubmitBtn');btn.disabled=true;btn.textContent='Submitting...';setTimeout(function(){btn.disabled=false;btn.innerHTML='Get Free Quote \u2192';},6000);}return isValid;}

window.addEventListener('DOMContentLoaded',function(){populateCountries();var pageSourceField=document.getElementById('pageSourceField');if(pageSourceField){pageSourceField.value=window.location.href;}var iframe=document.getElementById('hidden208810000001209168Frame');if(iframe){iframe.addEventListener('load',function(){try{var iframeDoc=this.contentWindow.document;if(iframeDoc.body&&iframeDoc.body.childElementCount!==0){showSuccessState();}}catch(error){showSuccessState();}});}});

function showSuccessState(){var formCard=document.getElementById('consultationFormCard');if(formCard){formCard.innerHTML='<div class="form-success"><div class="form-success-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg></div><h3>Thank You!</h3><p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p></div>';}}
</script>

<script>
var mndFields208810000001209168=new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168=new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');
function checkMandatory208810000001209168(){var isReturn=true;for(var i=0;i<mndFields208810000001209168.length;i++){var fieldObj=document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];if(fieldObj){if(((fieldObj.value).replace(/^\s+|\s+$/g,'')).length==0){isReturn=false;}}}if(isReturn){document.getElementById('formSubmitBtn').disabled=true;}return isReturn;}
document.getElementById('hidden208810000001209168Frame').addEventListener('load',function(){try{var doc=arguments[0].currentTarget.contentWindow.document;if(doc.body&&doc.body.childElementCount!==0){showSuccessState();}}catch(error){showSuccessState();}});
</script>

<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>

</script>

<script>
var tocWrapper=document.getElementById('tocWrapper');document.getElementById('tocLeft').addEventListener('click',function(){tocWrapper.scrollBy({left:-200,behavior:'smooth'});});document.getElementById('tocRight').addEventListener('click',function(){tocWrapper.scrollBy({left:200,behavior:'smooth'});});
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
(function(){var waBar=document.getElementById('waBar');var waClose=document.getElementById('waBarClose');var dismissed=false;waBar.classList.add('hidden');window.addEventListener('scroll',function(){if(dismissed)return;if(window.scrollY>300){waBar.classList.remove('hidden');}else{waBar.classList.add('hidden');}});waClose.addEventListener('click',function(){dismissed=true;waBar.classList.add('hidden');try{sessionStorage.setItem('wa_bar_dismissed','1');}catch(e){}});try{if(sessionStorage.getItem('wa_bar_dismissed')==='1'){dismissed=true;waBar.classList.add('hidden');waBar.style.display='none';}}catch(e){}})();
</script>

<script>
(function(){var opts={day:'numeric',month:'long',year:'numeric'};var dateStr=new Date().toLocaleDateString('en-IN',opts);var el1=document.getElementById('lastUpdated');var el2=document.getElementById('lastUpdatedFooter');if(el1)el1.textContent=dateStr;if(el2)el2.textContent=dateStr;})();
</script>

<script>
$(document).ready(function(){$('#testimonialSlider').slick({dots:false,infinite:true,speed:500,slidesToShow:3,slidesToScroll:1,autoplay:true,autoplaySpeed:4000,arrows:false,responsive:[{breakpoint:1024,settings:{slidesToShow:2}},{breakpoint:768,settings:{slidesToShow:1}}]});});
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
