

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
    <title>PF Registration Gurugram - EPFO Process & 20-Employee Rule</title>
    <meta name="description" content="PF registration in Gurugram. EPF for 20+ employees. 12% contribution. EPFO portal. Monthly ECR. UAN. EPS pension. EDLI insurance. Call +91 945 945 6700.">
    <link rel="canonical" href="/pf-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PF Registration Gurugram - EPFO Process & 20-Employee Rule">
    <meta property="og:description" content="PF registration in Gurugram. EPF for 20+ employees. 12% contribution. EPFO portal. Monthly ECR. UAN. EPS pension. EDLI insurance. Call +91 945 945 6700.">
    <meta property="og:url" content="/pf-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/pf-registration-gurugram-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PF Registration Gurugram - EPFO Process & 20-Employee Rule">
    <meta name="twitter:description" content="PF registration in Gurugram. EPF for 20+ employees. 12% contribution. EPFO portal. Monthly ECR. UAN. EPS pension. EDLI insurance. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/pf-registration-gurugram-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PF Registration in Gurugram | EPF Compliance",
      "description": "PF registration in Gurugram. EPF for 20+ employees. 12% contribution. EPFO portal. Monthly ECR. UAN. EPS pension. EDLI insurance. Call +91 945 945 6700.",
      "url": "/pf-registration/gurugram",
      "serviceType": "PF Registration in Gurugram | EPF Compliance",
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
        "url": "/pf-registration/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1500",
          "maxPrice": "3999",
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
          "name": "PF Registration: Process and Compliance",
          "item": "https://www.patronaccounting.com/pf-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "PF Registration in Gurugram | EPF Compliance",
          "item": "https://www.patronaccounting.com/pf-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "When is PF registration mandatory in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF registration is mandatory when your establishment has 20 or more employees including permanent, contract, temporary, and casual workers. You must register within 1 month of crossing the threshold. Once registered, coverage continues permanently even if the employee count later drops below 20. Voluntary registration is available for smaller establishments with EPFO approval."
          }
        },
        {
          "@type": "Question",
          "name": "How much does PF compliance cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No government registration fee. Monthly contribution: employee 12% + employer 12% = 24% of basic wages + DA. Example: Rs 15,000 basic salary, total contribution = Rs 3,600/month (Rs 1,800 each). Professional: Rs 3,999-7,999 for registration, Rs 1,500-5,000/month for ECR filing. Call +91 945 945 6700 for a detailed quote."
          }
        },
        {
          "@type": "Question",
          "name": "What are the three PF schemes and their benefits?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total timeline: 2-6 months. Filing and Diary Number: immediate. Mandatory 30-day objection waiting period: 1 month. Manage EPS and EDLI: 1-3 months. Certificate issuance: after examination approval. If a third-party objection is filed, the timeline extends by 2-4 months for hearing and resolution."
          }
        },
        {
          "@type": "Question",
          "name": "Do contract workers count toward the 20-employee threshold?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All workers count toward the PF threshold: permanent, contract, temporary, casual, and trainee. A company with 15 direct employees and 5 contract workers has 20 employees for PF purposes. The principal employer is responsible for ensuring PF compliance even for contract workers - if the staffing agency defaults, EPFO can recover from the principal employer."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for late PF deposit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12% annual interest per annum on delayed contributions under Section 7Q (calculated from due date to actual deposit). Damages under Section 14B: 5% for up to 2 months delay, escalating to 100% for delays over 6 months. Prosecution is possible for persistent default. These penalties make PF one of the most strictly enforced employer compliances."
          }
        },
        {
          "@type": "Question",
          "name": "What is UAN and why is it important?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Universal Account Number (UAN) is a unique 12-digit number assigned to each employee under PF. It remains the same throughout the employee's career regardless of job changes, enabling portability of PF balance. UAN must be linked to Aadhaar, PAN, and bank account for online claims, transfers, and balance checking. Without KYC-verified UAN, employees cannot access PF services online."
          }
        },
        {
          "@type": "Question",
          "name": "How is PF different from ESIC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF (Provident Fund) provides retirement savings under EPF Act 1952 for 20+ employees, with 24% total contribution (12% each). ESIC (Employees' State Insurance) provides medical and social security under ESI Act 1948 for 10+ employees, with 4% total contribution (3.25% employer + 0.75% employee). Both are separate, mandatory compliances with different thresholds and purposes. Both can be managed together through integrated payroll. Quick Answers PF kab mandatory hota hai? Jab establishment mein 20 ya zyada employees ho jayein (permanent, contract, temporary sab count hote hain). 1 mahine ke andar registration karna padta hai. Ek baar registered toh hamesha covered. Kitna deduct hota hai? Employee: 12% basic + DA. Employer: 12% (3.67% EPF + 8.33% EPS). Plus admin charges. Wage ceiling: Rs 15,000. Monthly 15 tarikh tak deposit karna hota hai. Late kiya toh? 12% annual interest automatically lagta hai. 5-100% damages Section 14B mein. Prosecution bhi ho sakti hai repeated default pe. Kabhi late mat karo."
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
                        PF Registration in Gurugram: Retirement Security for Your Workforce
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, incorporation certificate, GST, address proof, bank details, employee details (Aadhaar, DOB, DOJ), DSC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> EPFO registration: No government fee. Professional: Rs 3,999-7,999. Monthly compliance: Rs 1,500-5,000/month</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Mandatory for 20+ employees. Voluntary for <20 with EPFO approval. All types of establishments</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Registration: 3-7 working days online. Must register within 1 month of crossing 20 employees</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PF%20Registration%20in%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20PF%20Registration%20services%20in%20Gurugram%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20PF%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - PF Registration Gurugram'/>
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
                                <option value="pf-registration/gurugram" selected>PF Registration in Gurugram</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron registered us for PF the week we hired our 20th employee. They set up UANs for all staff, structured our salary components correctly, and have been filing ECR monthly for 2 years without a single late deposit. Zero penalties. Essential for growing startups.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Deepak Arora</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Tech Startup, DLF Cyber City</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our manufacturing unit had 35 employees but was not PF registered for 4 months. Patron regularised us through the Enrolment Campaign at reduced penalties, set up compliant ECR filing, and handled the EPFO inspection that followed. Saved us lakhs in damages.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RY</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Yadav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Manufacturing, Udyog Vihar</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handles PF, ESIC, and payroll for our 80-employee office. One team, one monthly process, zero compliance gaps. The contribution advisory helped us structure salaries properly. Every corporate office in Gurugram needs this integrated service.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Kapoor</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Head, Corporate Office, Golf Course Road</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We didn't know contract workers counted for the 20-employee threshold. Patron audited our workforce, found we had 24 employees including contractors, and registered us immediately. They also verified our staffing agency's PF compliance. Thorough.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Sharma</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Admin Manager, BPO, Cyber City</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron explained the 12% split clearly: 3.67% EPF and 8.33% EPS from our share. They helped us set up voluntary PF for employees above Rs 15,000 basic as a retention tool. UAN KYC for all 45 employees completed in one week.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Meera Singh</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, IT Services, Gurugram</div>
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
                    <p>Trusted PF compliance partner for employers across Gurugram.</p>
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
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">PF registration and EPF compliance across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in EPF, EPS, EDLI, and payroll compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">PF registrations, ECR filings, and payroll compliance documents handled.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by IT companies, manufacturers, corporates, and startups.</span></div>
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
            <h2 class="section-title">Why PF Registration Matters for Gurugram's Workforce</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PF Registration Services at a Glance</strong></p>
                    <p>Provident Fund registration under the Employees' Provident Funds and Miscellaneous Provisions Act, 1952 is mandatory for every establishment employing 20 or more persons. Registration must be completed within one month of crossing the threshold. Once registered, coverage continues permanently even if employee count drops below 20. The employer must contribute 12% of each employee's basic wages + DA (up to Rs 15,000 ceiling) and deduct 12% from the employee's salary. The employer's 12% is split: 3.67% to EPF (retirement savings) and 8.33% to EPS (pension). Employees are also covered under EDLI (life insurance up to Rs 7 lakh). Monthly ECR must be filed and contributions deposited by the 15th. Late deposit attracts 12% interest plus damages of 5-100% of arrears.</p>
                </div>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Employees' Provident Funds & Miscellaneous Provisions Act, 1952</td></tr>
                        <tr><td>Authority</td><td>EPFO under Ministry of Labour & Employment. Portal: <a href="https://epfindia.gov.in" target="_blank" rel="noopener">epfindia.gov.in</a></td></tr>
                        <tr><td>Mandatory For</td><td>Every establishment with 20+ employees (all types: permanent, contract, temporary)</td></tr>
                        <tr><td>Employee Contribution</td><td>12% of basic wages + DA (deducted from salary)</td></tr>
                        <tr><td>Employer Contribution</td><td>12% of basic wages + DA (3.67% EPF + 8.33% EPS). Plus admin charges</td></tr>
                        <tr><td>Wage Ceiling</td><td>Rs 15,000/month (mandatory PF on wages up to this amount). Higher: voluntary</td></tr>
                        <tr><td>Three Schemes</td><td>EPF (retirement corpus) + EPS (pension after 10 years) + EDLI (Rs 7 lakh insurance)</td></tr>
                        <tr><td>Penalties</td><td>Late deposit: 12% interest. Damages: 5-100% of arrears. Prosecution possible</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Gurugram's employment landscape makes PF registration a priority compliance. IT companies in DLF Cyber City employ hundreds to thousands with structured salary components. Manufacturing units in Udyog Vihar and Manesar have factory workforces well above 20 employees. Corporate offices on Golf Course Road house regional teams. Even startups cross the 20-employee threshold within 12-18 months. For comprehensive information about <a href="/pf-registration">PF registration across India</a>, visit our national service page.</p>
                <p>The most expensive mistake: not registering when the 20th employee joins. EPFO can demand contributions from the date the threshold was crossed, plus 12% interest, plus 5-100% damages. A startup crossing 20 employees in January but registering in June faces 5 months of backdated contributions. Register proactively. You will also need <a href="/esic-registration">ESIC registration</a> (10+ employees) and <a href="/payroll-services">payroll services</a> for complete employer compliance.</p>
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
                <h2 class="section-title">What Is PF Registration</h2>
                <div class="content-text what-is-definition">
                    <p>PF registration is the process of enrolling your establishment with the Employees' Provident Fund Organization (EPFO) under the EPF Act 1952. Once registered, both employer and employee contribute 12% each of basic wages + DA monthly towards the employee's retirement savings, pension, and insurance.</p>
                    <p>Registration is online at epfindia.gov.in. A PF Code (establishment ID) is issued. Each employee gets a UAN (Universal Account Number). Monthly ECR (Electronic Challan cum Return) must be filed by the 15th of the following month with contribution deposit.</p>
                    <p>Three schemes are covered: EPF (retirement corpus), EPS (pension after 10 years of service), and EDLI (life insurance up to Rs 7 lakh). For complete employer compliance, pair PF with <a href="/esic-registration">ESIC registration</a> and <a href="/payroll-services">payroll services</a>.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright Registration:</strong></p>
                    <ul>
                        <li><strong>EPF Act 1952</strong> - Law mandating provident fund for 20+ employee establishments</li>
                        <li><strong>ECR</strong> - Electronic Challan cum Return filed monthly for PF contributions</li>
                        <li><strong>UAN</strong> - Universal Account Number for each employee, portable across jobs</li>
                        <li><strong>EPS</strong> - Employees' Pension Scheme funded by 8.33% of employer's 12%</li>
                        <li><strong>EDLI</strong> - Life insurance up to Rs 7 lakh at 0.5% employer contribution</li>
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
                        <span>EPFO / epfindia.gov.in</span>
                        <strong>12% + 12% Savings</strong>
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
            <h2 class="section-title">Who Needs PF Registration in Gurugram</h2>
            <div class="content-text">
                <ul>
                    <li><strong>IT and technology companies</strong> in DLF Cyber City with 20+ employees. PF is a standard IT sector benefit. Most Gurugram IT companies cross the threshold within their first year. PF compliance is verified during client audits and vendor empanelment.</li>
                    <li><strong>Manufacturing units</strong> in Udyog Vihar and Manesar with factory workforces. Manufacturing establishments with 20+ workers are within PF jurisdiction. EPFO inspectors actively audit manufacturing units. Contract workers count towards the threshold.</li>
                    <li><strong>Photographers, graphic designers, and illustrators</strong> producing visual works - product photographs, marketing graphics, illustrations, architectural drawings, logos (as artistic works), and packaging designs. Artistic work copyright prevents unauthorized reproduction in Gurugram's competitive D2C and e-commerce market.</li>
                    <li><strong>Startups</strong> in Gurugram crossing the 20-employee threshold. Most common trigger: startup grows from 10 to 25 employees within a quarter. PF obligation kicks in the moment the 20th employee joins. Co-working and shared office startups equally covered.</li>
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
            <h2 class="section-title">7 PF Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>EPFO Registration</td><td>Online registration on EPFO/Unified Shram Suvidha Portal. Establishment details, employee details, DSC submission. PF Code issued. 3-7 working days.</td></tr>
                        <tr><td>Contribution Structure Advisory</td><td>Salary structuring to optimize PF: basic wages + DA design, Rs 15,000 ceiling implications, voluntary higher contribution options. Explaining 12% split: 3.67% EPF + 8.33% EPS.</td></tr>
                        <tr><td>UAN Generation and KYC</td><td>Creating Universal Account Numbers for all employees. Linking Aadhaar, PAN, and bank account. KYC verification for seamless claims, transfers, and portability.</td></tr>
                        <tr><td>Monthly ECR Filing</td><td>Calculating contributions. Generating ECR. Depositing by 15th of following month. Maintaining wage registers and contribution records. Core monthly compliance.</td></tr>
                        <tr><td>EPS and EDLI Management</td><td>Managing Employees' Pension Scheme (8.33%) and Employees' Deposit Linked Insurance (0.5%). Ensuring all three schemes are correctly maintained for every employee.</td></tr>
                        <tr><td>Annual Return and Compliance</td><td>Filing annual PF return. Responding to EPFO notices. Maintaining registers. Handling Section 7A inquiries and Section 14B damage proceedings.</td></tr>
                        <tr><td>Penalty Prevention and Regularisation</td><td>Proactive deposit by 15th to avoid 12% interest. Addressing past non-compliance through Employees' Enrolment Campaign (Nov 2025-Apr 2026). Reduced penalties for regularisation.</td></tr>
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
            <h2 class="section-title">How PF Registration Works in Gurugram: 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA-led team handles PF registration, UAN management, monthly ECR filing, contribution advisory, and EPFO compliance for Gurugram employers.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Assess PF Threshold</h3>
                    <p class="step-description">Count ALL employees including contract and temporary. If 20 or more, PF is mandatory. Register within 1 month. Once registered, coverage is permanent.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20+ Employees</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Threshold Met</span>
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
                        <span class="illustration-label">Threshold Checked</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Register on EPFO Portal</h3>
                    <p class="step-description">Complete online registration on EPFO/Unified Shram Suvidha Portal. File establishment details, employee details, DSC. PF Code (establishment ID) issued in 3-7 working days.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF Code Issued</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registered</span>
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
                        <span class="illustration-label">Registered</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Generate UANs and Set Up Contributions</h3>
                    <p class="step-description">Create UANs for all employees. Link Aadhaar, PAN, and bank. Structure salary: basic + DA component. Calculate 12% employee + 12% employer (3.67% EPF + 8.33% EPS).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UANs Active</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC Done</span>
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
                        <span class="illustration-label">Contributing</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">File Monthly ECR</h3>
                    <p class="step-description">Prepare ECR with each employee contribution calculation. Generate challan on EPFO portal. Deposit by 15th of following month. Maintain wage registers and contribution records.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12% + 12%</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>By 15th Monthly</span>
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
                        <span class="illustration-label">ECR Filed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Manage EPS and EDLI</h3>
                    <p class="step-description">Ensure EPS pension scheme (8.33%) and EDLI insurance (0.5%) are correctly maintained. Employees get pension after 10 years of service and Rs 7 lakh life insurance coverage.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EPS Active</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EDLI Covered</span>
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
                        <span class="illustration-label">Schemes Active</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Ongoing Compliance</h3>
                    <p class="step-description">File annual PF returns. Enroll new employees within 1 month. Handle EPFO notices and inspections. Monitor salary revisions. Prevent late deposits. Integrate with ESIC and payroll.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliant</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESIC Integrated</span>
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
            <p><strong>City Processing Note:</strong> Patron's Gurugram office on Golf Course Extension Road handles PF registration, monthly ECR filing, and integrated payroll compliance for employers across Gurugram.</p>
        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PF Registration in Gurugram</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Business Registration:</strong> Certificate of Incorporation / LLP Agreement / Partnership Deed / GST certificate / Shop Act license.</li>
                    <li><strong>Business Identity:</strong> PAN card | Bank account details (cancelled cheque) | Registered address proof.</li>
                    <li><strong>Employee Details:</strong> List of all employees with Aadhaar, date of birth, date of joining, basic wages + DA, nominee details.</li>
                    <li><strong>Additional:</strong> Digital Signature Certificate (DSC) | MOA/AOA (for companies) | Authorized signatory details | Nature of business.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common PF Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Late Registration After Threshold</td><td>Startup employs 20th person but delays PF registration for 6 months</td><td>Register within 1 month. Backdated contributions plus 12% interest plus 5-100% damages for late registration. Monitor headcount proactively.</td></tr>
                        <tr><td>Contract Workers Not Counted</td><td>Company counts only direct employees, ignoring contract workers from staffing agencies</td><td>All workers count: permanent, contract, temporary, casual. Principal employer is responsible if staffing agency defaults. Verify agency PF compliance.</td></tr>
                        <tr><td>Salary Structuring to Minimize PF</td><td>Employer sets very low basic wage to reduce PF contribution amount</td><td>EPFO scrutinizes unreasonably low basic wages. Rs 15,000 ceiling applies to mandatory PF. Structuring must be reasonable and defensible.</td></tr>
                        <tr><td>ECR Not Filed by 15th</td><td>Cash flow constraints cause employers to delay monthly PF deposit past the 15th</td><td>12% annual interest on every day of delay. Damages 5-100%. Set up auto-reminders or integrate with payroll. Never delay PF deposits.</td></tr>
                        <tr><td>UAN KYC Not Completed</td><td>UANs generated but Aadhaar/PAN/bank not linked. Employees can't access services</td><td>Complete KYC immediately after UAN generation. Aadhaar and bank linking mandatory for claims, transfers, and online services. Bulk KYC for new establishments.</td></tr>
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
            <h2 class="section-title">PF Registration Fees in Gurugram 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>EPFO Registration</td><td>Rs 3,999-7,999 professional (govt: free)</td></tr>
                        <tr><td>Monthly ECR Filing</td><td>Rs 1,500-5,000/month</td></tr>
                        <tr><td>UAN Generation + KYC (per employee)</td><td>Rs 100-200/employee</td></tr>
                        <tr><td>Annual PF Return</td><td>Rs 2,000-4,000/year</td></tr>
                        <tr><td>PF + ESIC + Payroll Bundle</td><td>Rs 5,000-12,000/month</td></tr>
                        <tr><td>EPFO Notice/Inquiry Response</td><td>Rs 5,000-15,000</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 2,999 (Exl GST and Govt. Charges)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">No government registration fee. Professional fees cover EPFO registration, UAN generation, and initial setup. Monthly ECR filing and payroll integration available as ongoing engagements.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20PF%20Registration%20in%20Gurugram.%20Please%20share%20fee%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Online EPFO Registration</td><td>3-7 working days</td></tr>
                        <tr><td>PF Code Issuance</td><td>Immediate upon approval</td></tr>
                        <tr><td>UAN Generation (all employees)</td><td>1-3 days</td></tr>
                        <tr><td>UAN KYC Linking</td><td>3-7 days</td></tr>
                        <tr><td>First ECR Filing</td><td>By 15th of following month</td></tr>
                        <tr><td>Registration Deadline</td><td>Within 1 month of 20+ employees</td></tr>
                        <tr><td>Monthly ECR Deadline</td><td>15th of every following month</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Note:</strong> EPFO registration is fast (3-7 days online). The critical timeline is the 1-month mandatory registration window after crossing 20 employees. Monthly ECR by the 15th has no exceptions. Patron automates all compliance calendars.</p>
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
            <h2 class="section-title">Why Choose Patron for PF Registration in Gurugram</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">20-Employee Trigger</h3>
                <p class="feature-text">Proactive monitoring of employee count. Registration before or within 1 month of crossing 20 employees to prevent retrospective liability.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                <h3 class="feature-title">Monthly ECR Filing</h3>
                <p class="feature-text">Accurate contribution calculation, ECR preparation, and deposit by 15th of each month. Auto-reminders and payroll integration prevent late payments.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3 class="feature-title">UAN Management</h3>
                <p class="feature-text">UAN generation for all employees with Aadhaar/PAN/bank KYC linking. Portability management for employees changing jobs. Balance and claims assistance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">ESIC + Payroll Bundle</h3>
                <p class="feature-text">PF integrated with ESIC contributions, TDS on salary, and complete payroll processing. Single-point compliance for all employer obligations.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                <h3 class="feature-title">Contribution Advisory</h3>
                <p class="feature-text">Salary structuring guidance: basic + DA design, Rs 15,000 ceiling implications, EPF/EPS split optimization. Balancing compliance with take-home salary.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div>
                <h3 class="feature-title">Penalty Prevention</h3>
                <p class="feature-text">Proactive deposits avoiding 12% interest and 5-100% damages. Enrolment Campaign advisory for regularising past defaults at reduced penalties.</p>
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
            <h2 class="section-title">PF Contribution Structure</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Component</th><th>Employee</th><th>Employer</th></tr></thead>
                    <tbody>
                        <tr><td>EPF (Provident Fund)</td><td>12% of basic + DA</td><td>3.67% of basic + DA</td></tr>
                        <tr><td>EPS (Pension Scheme)</td><td>Nil</td><td>8.33% of basic + DA (max Rs 15,000)</td></tr>
                        <tr><td>EDLI (Insurance)</td><td>Nil</td><td>0.5% of basic + DA (max Rs 15,000)</td></tr>
                        <tr><td>EPFO Admin Charges</td><td>Nil</td><td>0.5% of basic + DA (min Rs 500/month)</td></tr>
                        <tr><td>Total Employee Deduction</td><td>12%</td><td>-</td></tr>
                        <tr><td>Total Employer Cost</td><td>-</td><td>~13% (12% contribution + admin charges)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:12px;">External Authority: <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO (epfindia.gov.in)</a></p>
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
            <h2 class="section-title">Legal Framework for PF Registration</h2>
            <div class="content-text">
                <p>PF registration is governed by the <strong>Employees' Provident Funds and Miscellaneous Provisions Act, 1952</strong> and the EPF Scheme 1952, EPS 1995, and EDLI 1976. EPFO under the Ministry of Labour and Employment administers the scheme. The EPFO Regional Office covering Gurugram/Faridabad handles local jurisdiction.</p>
                <p>The contribution rate is set by the Central Government: 12% employee + 12% employer on basic wages + DA up to Rs 15,000. The employer's 12% is split: 3.67% to EPF and 8.33% to EPS. Admin charges of 0.5% apply. EDLI contribution is 0.5% from the employer. Late deposit attracts 12% annual interest (Section 7Q) and damages of 5-100% (Section 14B).</p>
                <p>Registration and monthly ECR filing are managed through the <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO portal (epfindia.gov.in)</a>. The Unified Shram Suvidha Portal integrates PF with other labour compliances. The <strong>Employees' Enrolment Campaign (Nov 2025-Apr 2026)</strong> offers reduced penalties for establishments regularising past non-compliance.</p>
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
                    <h2 class="faq-expanded__title">FAQs - PF Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Answers to common questions about PF registration including 20-employee threshold, contribution rates, ECR filing, penalties, and the three PF schemes for Gurugram employers.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Gurugram', 'enquiryService' => 'PF Registration in Gurugram'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">When is PF registration mandatory in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>PF registration is mandatory when your establishment has 20 or more employees including permanent, contract, temporary, and casual workers. You must register within 1 month of crossing the threshold. Once registered, coverage continues permanently even if the employee count later drops below 20. Voluntary registration is available for smaller establishments with EPFO approval.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does PF compliance cost?</h3>
                        <div class="faq-expanded__a"><p>No government registration fee. Monthly contribution: employee 12% + employer 12% = 24% of basic wages + DA. Example: Rs 15,000 basic salary, total contribution = Rs 3,600/month (Rs 1,800 each). Professional: Rs 3,999-7,999 for registration, Rs 1,500-5,000/month for ECR filing. Call +91 945 945 6700 for a detailed quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the three PF schemes and their benefits?</h3>
                        <div class="faq-expanded__a"><p>Total timeline: 2-6 months. Filing and Diary Number: immediate. Mandatory 30-day objection waiting period: 1 month. Manage EPS and EDLI: 1-3 months. Certificate issuance: after examination approval. If a third-party objection is filed, the timeline extends by 2-4 months for hearing and resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do contract workers count toward the 20-employee threshold?</h3>
                        <div class="faq-expanded__a"><p>Yes. All workers count toward the PF threshold: permanent, contract, temporary, casual, and trainee. A company with 15 direct employees and 5 contract workers has 20 employees for PF purposes. The principal employer is responsible for ensuring PF compliance even for contract workers - if the staffing agency defaults, EPFO can recover from the principal employer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the penalties for late PF deposit?</h3>
                        <div class="faq-expanded__a"><p>12% annual interest per annum on delayed contributions under Section 7Q (calculated from due date to actual deposit). Damages under Section 14B: 5% for up to 2 months delay, escalating to 100% for delays over 6 months. Prosecution is possible for persistent default. These penalties make PF one of the most strictly enforced employer compliances.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is UAN and why is it important?</h3>
                        <div class="faq-expanded__a"><p>Universal Account Number (UAN) is a unique 12-digit number assigned to each employee under PF. It remains the same throughout the employee's career regardless of job changes, enabling portability of PF balance. UAN must be linked to Aadhaar, PAN, and bank account for online claims, transfers, and balance checking. Without KYC-verified UAN, employees cannot access PF services online.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is PF different from ESIC?</h3>
                        <div class="faq-expanded__a"><p>PF (Provident Fund) provides retirement savings under EPF Act 1952 for 20+ employees, with 24% total contribution (12% each). ESIC (Employees' State Insurance) provides medical and social security under ESI Act 1948 for 10+ employees, with 4% total contribution (3.25% employer + 0.75% employee). Both are separate, mandatory compliances with different thresholds and purposes. Both can be managed together through integrated payroll.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PF kab mandatory hota hai?</strong> Jab establishment mein 20 ya zyada employees ho jayein (permanent, contract, temporary sab count hote hain). 1 mahine ke andar registration karna padta hai. Ek baar registered toh hamesha covered.</p>
                <p><strong>Kitna deduct hota hai?</strong> Employee: 12% basic + DA. Employer: 12% (3.67% EPF + 8.33% EPS). Plus admin charges. Wage ceiling: Rs 15,000. Monthly 15 tarikh tak deposit karna hota hai.</p>
                <p><strong>Late kiya toh?</strong> 12% annual interest automatically lagta hai. 5-100% damages Section 14B mein. Prosecution bhi ho sakti hai repeated default pe. Kabhi late mat karo.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why PF Registration Matters for Gurugram's Workforce</h2>
            <div class="content-text">
                <p>A Gurugram IT company with 50 employees and Rs 10 lakh monthly basic wage bill does not register for PF for 8 months after crossing 20 employees. EPFO inspector visits. Consequence: backdated PF contribution demand of Rs 19.2 lakh (24% x Rs 10 lakh x 8 months), plus 12% interest (Rs 1.5 lakh), plus damages (minimum 5% = Rs 96,000). Total liability: Rs 21+ lakh - which would have been Rs 2.4 lakh/month if registered on time. The Rs 3,999-7,999 registration fee prevents crores in potential liability.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your PF Registration in Gurugram Today</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:rgba(255,255,255,0.85);">PF Registration in Gurugram is mandatory for every establishment with 20 or more employees, providing retirement savings (EPF), pension (EPS), and life insurance (EDLI) through monthly employer and employee contributions deposited via ECR by the 15th of each month.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road handles PF registration, UAN management, monthly ECR filing, contribution advisory, annual returns, and EPFO notice response for IT companies, manufacturers, corporates, and startups across Gurugram.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP, with offices in Pune, Mumbai, Delhi, and Gurugram, has served 10,000+ businesses with a 4.9 Google rating and 50,000+ documents filed over 15+ years.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20PF%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PF%20Registration%20in%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20PF%20Registration%20services%20in%20Gurugram%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY PAGES GRID — Zone C: Gurugram NOT interlinked (4-city non-starred) + Zone D: Same-city cross-sell -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PF Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">PF registration services available in major cities across India with local office support.</p>
            <!-- Block 1: City Cards (4-city non-starred) — Gurugram = current city, NOT a link -->
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/provident-fund-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/pf-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
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
                <div class="pa-block-sub">End-to-end support for PF Registration in Gurugram</div>
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
            <p>This page is reviewed quarterly for accuracy. EPF Act provisions, contribution rates, wage ceiling, ECR filing processes, and EPFO notification updates are verified against official government notifications. Gurugram employer landscape and EPFO regional office information is validated with each review.</p>
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
