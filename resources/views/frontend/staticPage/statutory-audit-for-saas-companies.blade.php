
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
    <title>Statutory Audit for SaaS Companies</title>
    <meta name="description" content="CA-led statutory audit for SaaS companies - Ind AS 115 revenue, ESOP, India-US TP, 80-IAC deferment. From Rs 75,000. Call +91 945 945 6700.">
    <link rel="canonical" href="/statutory-audit-for-saas-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Statutory Audit for SaaS Companies 2026 | Patron Accounting">
    <meta property="og:description" content="CA-led statutory audit for SaaS companies - Ind AS 115 revenue, ESOP, India-US TP, 80-IAC deferment. From Rs 75,000. Call +91 945 945 6700.">
    <meta property="og:url" content="/statutory-audit-for-saas-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-saas-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Statutory Audit for SaaS Companies 2026 | Patron Accounting">
    <meta name="twitter:description" content="CA-led statutory audit for SaaS companies - Ind AS 115 revenue, ESOP, India-US TP, 80-IAC deferment. From Rs 75,000. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/statutory-audit-for-saas-companies-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/statutory-audit-for-saas-companies#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
        { "@type": "ListItem", "position": 3, "name": "Statutory Audit for SaaS Companies", "item": "/statutory-audit-for-saas-companies" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/statutory-audit-for-saas-companies#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is statutory audit mandatory for SaaS startups in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - private limited, public limited, OPC, Section 8 - irrespective of revenue or stage. A pre-revenue product SaaS startup in stub-period year one and a Rs 200 crore ARR scale-up are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment."
          }
        },
        {
          "@type": "Question",
          "name": "How is SaaS subscription revenue recognised under Ind AS 115?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the 5-step model of Ind AS 115, SaaS subscription revenue is typically recognised over time as the service is delivered, because the customer simultaneously receives and consumes the benefits as the provider performs (paragraph 35(a)). An annual contract worth Rs 12,00,000 invoiced upfront on 1 April is recognised at Rs 1,00,000 per month over 12 months. The Rs 12 lakh received at billing sits as a contract liability (deferred revenue) on the balance sheet and unwinds month-by-month."
          }
        },
        {
          "@type": "Question",
          "name": "What is a contract liability in SaaS audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A contract liability is the obligation to transfer goods or services to a customer for consideration already received or due. In a SaaS context, when an annual subscription is billed upfront, the unearned portion sits as a contract liability under Schedule III (Other Current Liabilities - Deferred Revenue). Paragraph 116 of Ind AS 115 requires the entity to disclose the opening and closing balances and the revenue recognised during the period from the opening balance. The auditor independently reconciles this against contract-level unwinding schedules."
          }
        },
        {
          "@type": "Question",
          "name": "How are ESOPs taxed at exercise under Section 17(2)(vi)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "At exercise, the difference between the Fair Market Value (FMV) of the shares on the exercise date and the exercise price paid by the employee is taxed as a perquisite under Section 17(2)(vi) of the Income Tax Act, 1961. The employer withholds TDS under Section 192 on this perquisite as part of salary. Example - 1,000 options exercised at Rs 100 when FMV is Rs 400 creates a perquisite of Rs 3,00,000 taxed at the employee's marginal slab. A subsequent sale creates capital gains computed from FMV at exercise as the cost of acquisition."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ESOP tax deferment for DPIIT startups?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 192(1C) of the Income Tax Act allows employees of DPIIT-recognised, IMB-certified Section 80-IAC startups to defer ESOP perquisite TDS withholding to the earliest of (a) 48 months from the end of the assessment year in which shares were allotted, (b) the date the employee sells the shares, or (c) the date the employee ceases employment. The perquisite is still valued at exercise FMV minus exercise price but the cash tax outflow shifts to the trigger event. DPIIT recognition alone is not sufficient - IMB certification under Section 80-IAC is also required."
          }
        },
        {
          "@type": "Question",
          "name": "Is Form 3CEB required for India-USA SaaS subsidiaries?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 92E of the Income Tax Act, 1961 requires every person entering into international transactions or specified domestic transactions to obtain an Accountant's report in Form 3CEB. For an Indian SaaS captive providing development or back-office services to a US parent under a cost-plus arrangement, every intercompany invoice is an international transaction. Form 3CEB is due 31 October following the financial year. For groups above Rs 500 crore consolidated revenue, Master File (Form 3CEAA) and Country-by-Country Reporting (Form 3CEAC / 3CEAD) also apply under Section 286."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 80-IAC and who can claim it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 80-IAC of the Income Tax Act, 1961 grants a 100 percent deduction on profits of an eligible startup for any 3 consecutive assessment years out of the first 10 from incorporation. Eligibility requires incorporation as Pvt Ltd or LLP (partnership firms excluded), incorporation after 1 April 2016 and before 31 March 2030 (Budget 2025-26 extension), turnover under Rs 100 crore in any preceding financial year, DPIIT recognition, and separate certification by the Inter-Ministerial Board (IMB). Over 3,700 startups have received IMB approval to date."
          }
        },
        {
          "@type": "Question",
          "name": "How does GST timing mismatch affect SaaS statutory audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST at 18 percent on SaaS subscriptions (classified as OIDAR under SAC 998314) is payable on the invoice date - the full annual contract value at billing. Ind AS 115 recognises revenue ratably over the subscription term. A Rs 12 lakh annual invoice creates a Rs 2.16 lakh GST liability immediately, while only Rs 1 lakh of revenue is recognised in month one. The audit reconciles GSTR-3B challan trail to the books and reports any statutory dues outstanding for more than six months under CARO 2020 clause 3(vii). For export SaaS, a valid LUT under Form GST RFD-11 zero-rates the supply."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/statutory-audit-for-saas-companies#service",
      "name": "Statutory Audit for SaaS Companies",
      "url": "/statutory-audit-for-saas-companies",
      "serviceType": "Statutory Audit (SaaS / IT / Software)",
      "description": "CA-led statutory audit for Indian SaaS companies, India-US captive subsidiaries, DPIIT-recognised startups and Series A to D scale-ups under Section 143 of the Companies Act, 2013, covering Ind AS 115 subscription revenue recognition, contract liability (deferred revenue) disclosure, ESOP accounting under Ind AS 102 and perquisite tax under Section 17(2)(vi) with Section 192(1C) deferral for 80-IAC startups, India-US transfer pricing certification in Form 3CEB under Section 92E, and Section 80-IAC startup tax-holiday deferment claims.",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Software as a service", "sameAs": "https://en.wikipedia.org/wiki/Software_as_a_service" },
        { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
        { "@type": "Thing", "name": "Indian Accounting Standards", "sameAs": "https://en.wikipedia.org/wiki/Indian_Accounting_Standards" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Statutory Audit for SaaS Companies Service Plans",
        "itemListElement": [
          { "@type": "Offer", "name": "Pre-revenue / Seed SaaS (ARR under Rs 1 crore)", "price": "75000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-saas-companies" },
          { "@type": "Offer", "name": "Series A SaaS (ARR Rs 1 to 10 crore)", "price": "150000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-saas-companies" },
          { "@type": "Offer", "name": "Series B / C SaaS (ARR Rs 10 to 50 crore)", "price": "350000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-saas-companies" },
          { "@type": "Offer", "name": "Series D and above / pre-IPO SaaS (ARR above Rs 50 crore)", "price": "800000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-saas-companies" },
          { "@type": "Offer", "name": "India-US captive subsidiary (statutory + Form 3CEB bundled)", "price": "150000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-saas-companies" }
        ]
      },
      "datePublished": "2026-05-13T08:00:00+05:30",
      "dateModified": "2026-05-13T08:00:00+05:30"
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
                        Statutory Audit for SaaS Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trial balance, ARR / MRR roll-forward, deferred revenue schedule, ESOP plan + grant register, Form 3CEB benchmarking, DPIIT and IMB certificates.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 75,000 for SaaS startups under Rs 5 crore ARR; scales by ARR, ESOP complexity and India-US captive structure.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian SaaS company under Section 139 (Pvt Ltd / LLP above turnover threshold) - irrespective of profit or stage.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 4 to 6 weeks fieldwork including Ind AS 115 contract-by-contract review; ADT-1 within 15 days of AGM.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20for%20SaaS%20Companies&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Statutory%20Audit%20for%20SaaS%20Companies%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20statutory%20audit%20for%20my%20SaaS%20company." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Statutory Audit for SaaS Companies'/>
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
                                <option value='statutory-audit-for-saas-companies' selected>Statutory Audit for SaaS Companies</option>
                                <option value='statutory-audit'>Statutory Audit (India)</option>
                                <option value='tax-audit'>Tax Audit (Section 44AB)</option>
                                <option value='internal-audit'>Internal Audit</option>
                                <option value='startup-registration'>Startup Registration (DPIIT)</option>
                                <option value='private-limited-company-compliance'>Pvt Ltd Compliance</option>
                                <option value='payroll-services-for-it-and-software-industry'>IT/SaaS Payroll Services</option>
                                <option value='gst-returns-for-oidar'>GST Returns for OIDAR</option>
                                <option value='other'>Other</option>
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron rebuilt our Ind AS 115 revenue waterfall after a previous auditor recognised setup fees upfront. The contract liability roll-forward was textbook for our Series B diligence. Caught a Rs 1.8 crore deferred revenue understatement before the lead investor's accounting diligence did.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul K.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO - Vertical SaaS, Bangalore</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">India-US captive structure with cost-plus 14 percent. Patron bundled statutory audit, Form 3CEB and Master File under one engagement. TP benchmarking was refreshed to current-year comparables before sign-off. Saved us a separate Big-Four bill of Rs 6 lakh.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anand M.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director - India-US SaaS Captive, Hyderabad</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">DPIIT recognition aur IMB Section 80-IAC application Patron ne handle kiya. Audited financials IMB submission ke saath aligned the. 3-year deferment claim window picked optimally. ESOP perquisite deferral under Section 192(1C) cleanly disclosed.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PV</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya V.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder - DPIIT SaaS Startup, Pune</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">ESOP grants to 80+ employees, mid-year cancellations, accelerated vesting on senior hires. Patron's Ind AS 102 expense reconciliation matched Form 16 perquisite under Section 17(2)(vi) to the rupee. Big-Four had taken three weeks on this last year - Patron closed in seven days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Neha S.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Controller - Series C SaaS, Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Export SaaS pe LUT under RFD-11 expired tha by 18 days - GST liability issue ban gaya tha. Patron ne audit ke pehle catch kiya, retrospective LUT renewal kar wa diya. CARO 3(vii) qualification se bach gaye. Worth every rupee.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh K.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Co-founder - Export-only SaaS, Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>DPIIT-recognised SaaS founders, India-US captive CFOs and Series A to D finance heads across India trust our five-risk-area audit framework. Talk to a CA partner directly.</p>
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs Audit</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Audit Process</a>
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

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - Statutory Audit for SaaS Companies</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Statutory Audit for SaaS at a Glance</strong></p>
                    <p>Statutory audit for SaaS companies in India is the annual independent examination of financial statements under Section 143 of the Companies Act, 2013, with five sector-specific risk areas: Ind AS 115 subscription revenue recognition, contract liability (deferred revenue) disclosure, ESOP accounting under Ind AS 102 and perquisite tax under Section 17(2)(vi), India-US transfer pricing certification in Form 3CEB, and Section 80-IAC startup tax-holiday deferment claims.</p>
                </div>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 139 to 148</td></tr>
                            <tr><td>Applicable To</td><td>Every Indian SaaS company (Pvt Ltd, Public, OPC, Sec 8); LLP above Rs 40 lakh turnover</td></tr>
                            <tr><td>Revenue Standard</td><td>Ind AS 115 (5-step model) for SaaS subscriptions - recognised over the subscription term</td></tr>
                            <tr><td>Contract Liability</td><td>Deferred revenue disclosed under Schedule III; opening to closing roll-forward in audit</td></tr>
                            <tr><td>ESOP Accounting</td><td>Ind AS 102 fair value over vesting; perquisite tax under Section 17(2)(vi); deferral for 80-IAC startups under Section 192(1C)</td></tr>
                            <tr><td>India-US Transfer Pricing</td><td>Form 3CEB under Section 92E for SaaS captives; Master File and CbCR above Rs 500 cr group turnover</td></tr>
                            <tr><td>Cost Starting From</td><td>Rs 75,000 (Patron - SaaS startup under Rs 5 crore ARR)</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>SaaS audits are not manufacturing audits with a different brand. The audit risk profile is dominated by revenue recognition under Ind AS 115 - where annual upfront billing creates a contract liability that must unwind month by month - not by inventory or fixed assets. Layered on top are ESOP accounting that hits Ind AS 102 fair-value expensing over the vesting period, perquisite tax that triggers at exercise under Section 17(2)(vi) (or is deferred under Section 192(1C) for DPIIT-recognised startups certified under Section 80-IAC), India-US transfer pricing requiring Form 3CEB certification for captive subsidiaries serving a US parent, and startup tax-holiday claim disclosure for the 3,700-plus IMB-certified entities.</p>
                <p>Patron's SaaS audit team handles all five risk areas under one engagement letter and one CA partner, whether you operate a pre-revenue product startup, a Series A bootstrap, a Series C scale-up, an India-US captive subsidiary, or a DPIIT-recognised entity preparing the IMB Section 80-IAC application. Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Statutory Audit for SaaS Companies</h2>
                <div class="content-text what-is-definition">
                    <p>Statutory audit for SaaS companies is the legally mandated annual examination of financial statements under Section 143 of the Companies Act, 2013, covering five SaaS-specific risk areas: Ind AS 115 subscription revenue, contract liability disclosure, ESOP accounting under Ind AS 102, India-US transfer pricing, and Section 80-IAC deferment.</p>
                    <p>It is conducted by an independent practicing Chartered Accountant holding a valid Certificate of Practice from ICAI. The audit applies to every Indian SaaS company regardless of revenue or profitability - a pre-revenue product startup in stub-period year one and a Rs 200 crore ARR scale-up are equally bound. The auditor's opinion under SA 700 is filed with the Registrar of Companies in Form AOC-4 within 30 days of the AGM, and Form ADT-1 intimates auditor appointment within 15 days of the board resolution.</p>
                    <p>Where SaaS audits diverge sharply from other industries is in the depth of revenue recognition testing. Annual contracts paid upfront create a contract liability on the balance sheet (Schedule III: Other Current Liabilities - Deferred Revenue) that must be unwound month-by-month as the service is delivered. Multi-element arrangements bundling subscription, implementation and support require allocation of the transaction price across performance obligations on standalone selling price (SSP) basis under paragraph 76-80 of Ind AS 115. The auditor reviews this entire revenue waterfall and the supporting contract sample.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Statutory Audit (SaaS):</strong></p>
                    <p><strong>Ind AS 115:</strong> Indian accounting standard (equivalent of IFRS 15) prescribing a five-step model for revenue recognition - identify contract, identify performance obligations, determine transaction price, allocate to performance obligations, recognise when (or as) satisfied.</p>
                    <p><strong>Contract Liability:</strong> Deferred revenue - the obligation to transfer goods or services to a customer for consideration already received or due. Disclosed in opening / closing reconciliation per paragraph 116 of Ind AS 115.</p>
                    <p><strong>Standalone Selling Price (SSP):</strong> Price at which an entity would sell a promised good or service separately to a customer; used to allocate transaction price across performance obligations.</p>
                    <p><strong>Section 80-IAC:</strong> Income Tax Act provision allowing DPIIT-recognised, IMB-certified Pvt Ltd or LLP startups with turnover below Rs 100 crore to claim 100 percent deduction on eligible business profits for any 3 consecutive years out of the first 10.</p>
                    <p><strong>Section 17(2)(vi):</strong> Income Tax Act provision treating the difference between FMV at exercise and exercise price of ESOPs as a taxable perquisite. Section 192(1C) allows deferral of TDS for employees of 80-IAC-eligible startups.</p>
                    <p><strong>Form 3CEB:</strong> Accountant's report under Section 92E of the Income Tax Act certifying international and specified domestic transactions; due 31 October following the financial year.</p>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Cloud SaaS icon top-left -->
                            <path d="M30 32C30 22 38 14 48 14C56 14 62 19 65 25C68 22 72 20 76 20C84 20 90 26 90 34C90 42 84 48 76 48H50C39 48 30 41 30 32Z" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Laptop / dashboard -->
                            <rect x="28" y="58" width="110" height="68" rx="4" fill="#FFFFFF" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="32" y="62" width="102" height="56" rx="2" fill="#F0F4F8"/>
                            <rect x="22" y="126" width="122" height="6" rx="3" fill="#14365F"/>
                            <!-- Dashboard header bar -->
                            <rect x="36" y="66" width="94" height="8" rx="1" fill="#14365F"/>
                            <text x="83" y="72" font-size="6" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ARR DASHBOARD</text>
                            <!-- ARR chart bars -->
                            <rect x="40" y="100" width="8" height="12" fill="#14365F" opacity="0.4"/>
                            <rect x="52" y="95" width="8" height="17" fill="#14365F" opacity="0.55"/>
                            <rect x="64" y="88" width="8" height="24" fill="#F5A623" opacity="0.75"/>
                            <rect x="76" y="82" width="8" height="30" fill="#F5A623"/>
                            <rect x="88" y="78" width="8" height="34" fill="#E8712C"/>
                            <rect x="100" y="72" width="8" height="40" fill="#E8712C"/>
                            <rect x="112" y="68" width="8" height="44" fill="#10B981"/>
                            <rect x="124" y="64" width="8" height="48" fill="#10B981"/>
                            <!-- ARR uptick line -->
                            <path d="M40 100 L60 90 L80 80 L100 70 L128 64" stroke="#FFFFFF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <!-- Contract liability tag -->
                            <rect x="148" y="78" width="44" height="32" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="170" y="92" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DEFERRED</text>
                            <text x="170" y="102" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REVENUE</text>
                            <!-- Green check badge top-right -->
                            <circle cx="158" cy="34" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                            <path d="M152 34l4 4 8-8" stroke="#10B981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <!-- Ind AS 115 badge bottom-left -->
                            <rect x="20" y="140" width="58" height="18" rx="4" fill="#FFFFFF" stroke="#14365F" stroke-width="1"/>
                            <text x="49" y="152" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Ind AS 115</text>
                            <!-- Label -->
                            <text x="100" y="172" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Statutory Audit for SaaS</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 143</span>
                        <strong>5-Risk-Area SaaS Audit Framework</strong>
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
            <h2 class="section-title">Who Needs Statutory Audit (SaaS)</h2>
            <div class="content-text">
                <p>Statutory audit applies to every company incorporated under the Companies Act, 2013 - no turnover or revenue threshold. For SaaS businesses, the applicability stack layers like this:</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Entity / Stage</th><th>Audit Layer</th><th>Reference</th></tr></thead>
                        <tbody>
                            <tr><td>Pre-revenue SaaS Pvt Ltd in stub-period year 1</td><td>Section 143 Statutory Audit</td><td>Mandatory from incorporation; first auditor within 30 days</td></tr>
                            <tr><td>SaaS LLP - turnover above Rs 40 lakh or contribution above Rs 25 lakh</td><td>Statutory audit under LLP Rule 24</td><td>When threshold crossed</td></tr>
                            <tr><td>SaaS scale-up with ESOP grants outstanding</td><td>Ind AS 102 fair-value expensing review + Section 17(2)(vi) perquisite TDS audit</td><td>All audit years from first grant</td></tr>
                            <tr><td>SaaS captive of US / foreign parent (related-party services)</td><td>Form 3CEB transfer pricing audit + statutory audit</td><td>Section 92E - due 31 October</td></tr>
                            <tr><td>SaaS group with consolidated turnover above Rs 500 cr</td><td>Master File (Form 3CEAA) and Country-by-Country Reporting (Form 3CEAC / 3CEAD)</td><td>Section 286</td></tr>
                            <tr><td>DPIIT-recognised + IMB-certified SaaS startup</td><td>Section 80-IAC deferment claim disclosure in audit + Form 10-IC option</td><td>Income Tax Act 1961</td></tr>
                            <tr><td>SaaS with WC limits above Rs 5 crore</td><td>CARO clause 3(ii)(b) - applies (rare in SaaS but possible at venture debt)</td><td>CARO 2020</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>For <a href="/tax-audit">tax audit</a> applicability under Section 44AB, SaaS businesses cross the Rs 1 crore turnover threshold (or Rs 10 crore if 95 percent receipts are digital - typical for SaaS). Patron bundles statutory audit, tax audit, Form 3CEB and Section 80-IAC certification under a single engagement letter for India-US captive structures.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 143 Full-Scope Statutory Audit</td><td>Companies Act audit with CARO 2020 21-clause annexure; SA 700 / 705 / 706 reporting under ICAI Standards.</td></tr>
                        <tr><td>Ind AS 115 Revenue Recognition Audit</td><td>Contract-by-contract testing of the 5-step model; SSP allocation across multi-element arrangements; recognition pattern verification (over-time vs point-in-time); contract modification accounting; deferred revenue (contract liability) opening-to-closing reconciliation under paragraph 116.</td></tr>
                        <tr><td>ESOP Accounting (Ind AS 102) and Perquisite Tax Audit</td><td>Fair-value computation review (Black-Scholes or binomial); vesting-period expense recognition; ESOP Outstanding Account reconciliation; Section 17(2)(vi) perquisite TDS audit; Section 192(1C) deferral applicability for 80-IAC startups.</td></tr>
                        <tr><td>India-US Transfer Pricing - Form 3CEB Section 92E</td><td>Functional analysis and characterisation of the Indian SaaS captive; arm's-length benchmarking (TNMM, cost-plus, or CUP); Form 3CEB certification; Master File and CbCR coordination above Rs 500 cr group turnover; safe harbour rule applicability under Rules 10TA to 10TG.</td></tr>
                        <tr><td>Section 80-IAC Deferment Claim Disclosure Audit</td><td>Verification of DPIIT recognition + IMB certificate; profit segregation between eligible business and non-eligible income (interest, capital gains); 3-consecutive-year selection strategy; Form 10-IC opt-in for concessional tax regime alignment; audit disclosure in financial statements.</td></tr>
                        <tr><td>GST OIDAR Recognition and LUT Reconciliation</td><td>18 percent GST on domestic SaaS under SAC 998314 (OIDAR classification); LUT under Form GST RFD-11 for zero-rated export supplies; reconciliation of GST liability timing (invoice date) with Ind AS 115 revenue recognition timing (service-delivery date); CARO 3(vii) statutory dues testing.</td></tr>
                        <tr><td>SA 700 Audit Report Components for SaaS</td><td>Opinion paragraph on true and fair view; Basis for Opinion (independence under SA 200; Ind AS 115 revenue policy adoption); Key Audit Matters (SA 701) for listed entities - revenue timing and SSP allocation, ESOP fair-value computation, transfer pricing of captive services; Going Concern (SA 570) for cash-burn-stage SaaS pre-Series-C; Section 143(3)(i) Internal Financial Controls.</td></tr>
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
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">SaaS Statutory Audit Process - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From engagement letter to UDIN sign-off and AOC-4 filing - here's how Patron runs a SaaS audit contract-by-contract, grant-by-grant, captive-by-captive.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Engagement and SaaS Risk Profiling</h3>
                    <p class="step-description">
                        Patron issues an engagement letter under SA 210, obtains independence and non-disqualification certificate under Section 141 of the Companies Act, 2013, and conducts an industry-specific risk profile. For SaaS, this means cataloguing all customer contracts by tenure (monthly, annual, multi-year), classifying each by performance obligation (subscription, implementation, support, training, customisation), mapping ESOP grants outstanding and vesting schedules, identifying related-party flows with foreign parent (where applicable), and confirming DPIIT and IMB status for 80-IAC eligibility.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SA 210 Letter
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Contract Tenure Catalogue
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            DPIIT / IMB Check
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="10" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="28" y1="25" x2="92" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                                <rect x="28" y="34" width="35" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <rect x="28" y="44" width="55" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <rect x="28" y="54" width="45" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <circle cx="92" cy="68" r="9" fill="#10B981"/>
                                <path d="M87 68l4 4 7-7" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Engagement Letter</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Ind AS 115 Contract Testing and Deferred Revenue Reconciliation</h3>
                    <p class="step-description">
                        A representative sample of contracts (typically top 25 by value plus a random sample of 15 to 25) is tested against the 5-step Ind AS 115 model. For each contract Patron documents: identification of the contract (legal enforceability), distinct performance obligations, transaction price (including variable consideration constrained under paragraph 56), SSP-based allocation, and recognition pattern. The aggregate deferred revenue balance on the balance sheet is reconciled to the sum of unrecognised amounts across all active contracts under paragraph 116(a) of Ind AS 115. Schedule III disclosure of opening to closing roll-forward is independently verified.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Top 25 + Random Sample
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SSP Allocation
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Para 116 Roll-Forward
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="14" y="20" width="34" height="60" rx="3" fill="#FFFFFF" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="20" y1="32" x2="42" y2="32" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="20" y1="42" x2="42" y2="42" stroke="#14365F" stroke-width="1.4" opacity="0.3"/>
                                <line x1="20" y1="52" x2="38" y2="52" stroke="#14365F" stroke-width="1.4" opacity="0.3"/>
                                <line x1="20" y1="62" x2="40" y2="62" stroke="#14365F" stroke-width="1.4" opacity="0.3"/>
                                <line x1="20" y1="72" x2="35" y2="72" stroke="#14365F" stroke-width="1.4" opacity="0.3"/>
                                <line x1="52" y1="50" x2="62" y2="50" stroke="#14365F" stroke-width="2.5"/>
                                <path d="M59 47l3 3-3 3" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" fill="none"/>
                                <rect x="66" y="20" width="40" height="60" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="86" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DEFERRED</text>
                                <text x="86" y="48" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REVENUE</text>
                                <rect x="71" y="56" width="30" height="6" rx="2" fill="#FFFFFF" stroke="#F5A623" stroke-width="0.8"/>
                                <rect x="71" y="65" width="30" height="6" rx="2" fill="#FFFFFF" stroke="#F5A623" stroke-width="0.8"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Ind AS 115 Testing</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">ESOP Accounting and Perquisite Tax Cross-Check</h3>
                    <p class="step-description">
                        ESOP grants outstanding are tested under Ind AS 102 (Share-Based Payment). Patron reviews the FMV methodology (Black-Scholes or binomial) of the registered valuer's report, recomputes the grant-date fair value, schedules the vesting-period expense, and reconciles to the ESOP Outstanding Account under reserves. For exercises during the year, the perquisite computation under Section 17(2)(vi) is independently re-performed (FMV on exercise date minus exercise price) and cross-checked against Form 16 TDS withholding under Section 192. For 80-IAC startups exercising the deferral option under Section 192(1C), the deferral conditions are documented and the contingent perquisite is disclosed.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Black-Scholes Review
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Section 17(2)(vi) Cross-Check
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Section 192(1C) Deferral
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="18" width="80" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="32" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP GRANTS</text>
                                <line x1="28" y1="38" x2="92" y2="38" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <rect x="30" y="44" width="58" height="6" rx="2" fill="#14365F" opacity="0.3"/>
                                <text x="30" y="42" font-size="5" fill="#14365F" font-family="Arial, sans-serif">Vest 25%</text>
                                <rect x="30" y="54" width="44" height="6" rx="2" fill="#F5A623" opacity="0.6"/>
                                <text x="30" y="52" font-size="5" fill="#14365F" font-family="Arial, sans-serif">Vest 50%</text>
                                <rect x="30" y="64" width="30" height="6" rx="2" fill="#E8712C"/>
                                <text x="30" y="62" font-size="5" fill="#14365F" font-family="Arial, sans-serif">Vest 75%</text>
                                <rect x="30" y="74" width="15" height="6" rx="2" fill="#10B981"/>
                                <text x="30" y="72" font-size="5" fill="#14365F" font-family="Arial, sans-serif">Vest 100%</text>
                            </svg>
                        </div>
                        <span class="illustration-label">ESOP Vesting</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">India-US Transfer Pricing Form 3CEB Review</h3>
                    <p class="step-description">
                        For SaaS captives serving a foreign parent (the dominant US-India structure), Patron coordinates the Form 3CEB Section 92E certification with the transfer pricing study. The functional analysis (asset, function, risk profile of the Indian captive) is reviewed, the chosen Most Appropriate Method (typically Transactional Net Margin Method on cost-plus 12 to 15 percent for low-risk captive services) is validated, and the comparables benchmarking is tested for current-year currency. Master File (Form 3CEAA) and Country-by-Country Reporting filings are checked for SaaS groups crossing Rs 500 crore consolidated revenue.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            TNMM Cost-Plus
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Current-Year Comparables
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Master File + CbCR
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="35" width="32" height="32" rx="6" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <text x="26" y="48" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">USA</text>
                                <text x="26" y="58" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Parent</text>
                                <line x1="44" y1="45" x2="76" y2="45" stroke="#14365F" stroke-width="2" stroke-dasharray="2,2"/>
                                <path d="M74 42l3 3-3 3" stroke="#14365F" stroke-width="2" stroke-linecap="round" fill="none"/>
                                <text x="60" y="40" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Cost+</text>
                                <line x1="44" y1="60" x2="76" y2="60" stroke="#14365F" stroke-width="2"/>
                                <path d="M46 57l-3 3 3 3" stroke="#14365F" stroke-width="2" stroke-linecap="round" fill="none"/>
                                <text x="60" y="74" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Services</text>
                                <rect x="78" y="35" width="32" height="32" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="94" y="48" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">India</text>
                                <text x="94" y="58" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">SaaS</text>
                                <rect x="38" y="80" width="44" height="14" rx="3" fill="#10B981"/>
                                <text x="60" y="90" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Form 3CEB</text>
                            </svg>
                        </div>
                        <span class="illustration-label">India-US TP</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Section 80-IAC Deferment Audit Disclosure</h3>
                    <p class="step-description">
                        For DPIIT-recognised IMB-certified SaaS startups, Patron verifies (a) the DPIIT certificate validity and the IMB Form 80-IAC certificate, (b) age of incorporation (must be after 1 April 2016 and before 31 March 2030 per the Budget 2025-26 extension), (c) turnover under Rs 100 crore in any preceding FY, (d) Pvt Ltd or LLP entity form (partnerships excluded), and (e) the 3-consecutive-year window the startup intends to claim. The audited financial statements are then aligned for IMB application submission (which itself requires CA-certified financials).
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            DPIIT + IMB Check
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            31 Mar 2030 Sunset
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            3-Year Window
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="18" y="18" width="84" height="64" rx="5" fill="#FFFFFF" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="32" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">80-IAC ELIGIBLE YEARS</text>
                                <g transform="translate(24, 40)">
                                    <rect x="0" y="0" width="10" height="34" fill="#14365F" opacity="0.18"/>
                                    <rect x="12" y="0" width="10" height="34" fill="#14365F" opacity="0.18"/>
                                    <rect x="24" y="0" width="10" height="34" fill="#10B981"/>
                                    <rect x="36" y="0" width="10" height="34" fill="#10B981"/>
                                    <rect x="48" y="0" width="10" height="34" fill="#10B981"/>
                                    <rect x="60" y="0" width="10" height="34" fill="#14365F" opacity="0.18"/>
                                    <rect x="72" y="0" width="10" height="34" fill="#14365F" opacity="0.18"/>
                                    <text x="5" y="44" font-size="5" fill="#14365F" font-family="Arial, sans-serif" text-anchor="middle">Y1</text>
                                    <text x="17" y="44" font-size="5" fill="#14365F" font-family="Arial, sans-serif" text-anchor="middle">Y2</text>
                                    <text x="29" y="44" font-size="5" fill="#10B981" font-weight="700" font-family="Arial, sans-serif" text-anchor="middle">Y3</text>
                                    <text x="41" y="44" font-size="5" fill="#10B981" font-weight="700" font-family="Arial, sans-serif" text-anchor="middle">Y4</text>
                                    <text x="53" y="44" font-size="5" fill="#10B981" font-weight="700" font-family="Arial, sans-serif" text-anchor="middle">Y5</text>
                                    <text x="65" y="44" font-size="5" fill="#14365F" font-family="Arial, sans-serif" text-anchor="middle">Y6</text>
                                    <text x="77" y="44" font-size="5" fill="#14365F" font-family="Arial, sans-serif" text-anchor="middle">Y7</text>
                                </g>
                            </svg>
                        </div>
                        <span class="illustration-label">3-Year Selection</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Sign-Off, UDIN and AOC-4 Filing</h3>
                    <p class="step-description">
                        Patron's audit partner signs the report under UDIN generated on the ICAI portal, annexes it to Form AOC-4, and files with the Registrar of Companies within 30 days of the AGM. Form MGT-7 (annual return) follows within 60 days. Form 3CEB filing to the Income Tax Department closes by 31 October. ADT-1 SRN status is tracked on the MCA21 V3 portal until disposal.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            UDIN Generation
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            AOC-4 within 30 days
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Form 3CEB by 31 Oct
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="32" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AUDIT REPORT</text>
                                <line x1="28" y1="40" x2="92" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="28" y1="48" x2="92" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="28" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <rect x="55" y="62" width="38" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                <text x="74" y="71" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">UDIN</text>
                                <circle cx="98" cy="85" r="11" fill="#10B981"/>
                                <path d="M92 85l4 4 8-8" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Sign-Off and Filing</span>
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
            <h2 class="section-title">Documents Checklist for SaaS Audit</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Trial Balance and General Ledger:</strong> Year-end TB plus full ledger scroll.</li>
                    <li><strong>ARR / MRR Roll-Forward and Customer Master:</strong> Opening ARR, new bookings, upgrades, downgrades, churn, closing ARR; reconciled to revenue.</li>
                    <li><strong>Customer Contract Sample:</strong> Top 25 by value plus random 15 to 25 contracts; renewal terms; SSP documentation.</li>
                    <li><strong>Deferred Revenue Schedule (Contract Liability):</strong> Customer-wise, contract-wise unrecognised amounts; reconciled to balance sheet line under Schedule III.</li>
                    <li><strong>ESOP Plan, Grant Register and Vesting Schedule:</strong> All grants outstanding; vesting tranches; cancellations; exercises during year.</li>
                    <li><strong>Registered Valuer FMV Report:</strong> Under Rule 11UA of the Income Tax Rules for ESOP perquisite; under Rule 8 of Companies (Accounts) Rules for accounting fair value.</li>
                    <li><strong>Form 3CEB Working Papers (where applicable):</strong> Transfer pricing study, comparables analysis, intercompany agreement.</li>
                    <li><strong>DPIIT Recognition + IMB Section 80-IAC Certificate:</strong> If claiming the 3-year tax holiday.</li>
                    <li><strong>GST Returns:</strong> GSTR-1, GSTR-3B, GSTR-9 reconciled to revenue; LUT (RFD-11) for export SaaS.</li>
                    <li><strong>TDS Returns:</strong> Form 24Q and 26Q reconciled to expense; ESOP perquisite TDS check; Section 192(1C) deferral working (if applicable).</li>
                    <li><strong>Statutory Registers under Sections 88, 170, 188, 189:</strong> Members, directors, contracts (Sec 188 RPT register), loans.</li>
                    <li><strong>Intercompany Agreements (India-US captive):</strong> Master services agreement, intercompany invoices, cost-plus mark-up workings.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common SaaS Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>Setup Fees and Mid-Term Contract Modifications</td>
                            <td>A common Ind AS 115 misapplication in SaaS: recognising one-time setup or implementation fees as revenue on invoice date even when the fee does not provide a standalone benefit to the customer without the subscription. Under paragraph 26 of Ind AS 115, such fees must be deferred and recognised over the expected customer life.</td>
                            <td>Patron tests the standalone benefit of each setup fee, applies paragraph 26 of Ind AS 115 to defer non-standalone fees over the expected customer life, and rebuilds the revenue waterfall. Mid-term upgrades and downgrades are tested for contract-modification accounting under paragraphs 18 to 21 - either as a separate contract, a termination plus new contract, or a prospective change.</td>
                        </tr>
                        <tr>
                            <td>GST Timing Mismatch Creating CARO Clause 3(vii) Risk</td>
                            <td>GST at 18 percent on SaaS (classified as OIDAR under SAC 998314) is payable on the invoice date for the full annual contract value, while Ind AS 115 recognises revenue ratably over 12 months. A Rs 12 lakh annual invoice creates a Rs 2.16 lakh GST liability immediately even though only Rs 1 lakh of revenue is recognised in month one.</td>
                            <td>If the GST is not regularly deposited, CARO clause 3(vii) requires reporting of statutory dues outstanding for more than six months. Patron's audit cross-checks the GSTR-3B challan trail against the books to clear this and flags any aged dues. For export SaaS, valid LUT under <a href="/gst-returns-for-oidar">Form GST RFD-11</a> is verified.</td>
                        </tr>
                        <tr>
                            <td>ESOP Perquisite Deferral Eligibility Confusion</td>
                            <td>Many DPIIT-recognised startups assume that DPIIT recognition alone is enough for ESOP perquisite tax deferral under Section 192(1C). It is not. The startup must also hold IMB certification under Section 80-IAC. Wrong claim creates Income Tax notices on the employee and Section 201 / 234 interest on the employer.</td>
                            <td>Patron verifies both DPIIT recognition and IMB Section 80-IAC certificates before signing off on the deferral disclosure. Where deferral is properly claimed, the contingent perquisite (still computed at FMV at exercise) is documented in the audit file for the eventual TDS trigger event - earliest of 48 months from end of AY of allotment, sale of shares, or employee cessation.</td>
                        </tr>
                        <tr>
                            <td>India-US Captive TP Benchmarking Currency</td>
                            <td>Indian SaaS captives serving US parents are typically characterised as low-risk service providers and benchmarked under TNMM on a cost-plus basis. Benchmarking studies often use comparables data more than 12 months old; the Income Tax Department uses 3-year weighted-average data under Rule 10B(4). Stale benchmarks invite TP adjustments.</td>
                            <td>Patron reviews the benchmarking study for current-year freshness, adjusts for working-capital and risk differences, and reconciles the actual cost-plus mark-up earned by the Indian entity to the benchmarked range before Form 3CEB sign-off. Safe harbour rules under 10TA to 10TG are tested as fallback.</td>
                        </tr>
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
            <h2 class="section-title">Patron Statutory Audit Fees for SaaS Companies</h2>
            <div class="content-text">
                <p>Patron's statutory audit fees for SaaS companies are stage-tiered (ARR or Series stage) and inclusive of the SaaS-specific scope - Ind AS 115 contract review, ESOP accounting cross-check, and CARO 2020. Form 3CEB, Master File / CbCR, and Section 80-IAC IMB application support are separately priced add-ons.</p>
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>SaaS Stage / Profile</th><th>Patron Fee (Rs)</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-revenue / Seed SaaS (ARR under Rs 1 crore)</td><td>75,000 to 1,25,000</td><td>3 weeks</td></tr>
                        <tr><td>Series A (ARR Rs 1 to 10 crore)</td><td>1,50,000 to 3,25,000</td><td>4 to 5 weeks</td></tr>
                        <tr><td>Series B / C (ARR Rs 10 to 50 crore)</td><td>3,50,000 to 7,00,000</td><td>5 to 6 weeks</td></tr>
                        <tr><td>Series D and above / pre-IPO (ARR above Rs 50 crore)</td><td>From 8,00,000</td><td>6 to 8 weeks</td></tr>
                        <tr><td>India-US captive subsidiary (statutory + Form 3CEB bundled)</td><td>Add 1,50,000 to 4,00,000</td><td>Same window plus 2 weeks for TP</td></tr>
                        <tr><td>ESOP accounting and perquisite audit overlay</td><td>Add 35,000 to 1,25,000</td><td>Same window</td></tr>
                        <tr><td>Section 80-IAC IMB application + deferment audit disclosure</td><td>50,000 to 1,00,000</td><td>Same window</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td><strong>Starting from INR 75,000 (Exl GST and Govt. Charges)</strong></td><td>3 weeks</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for the five SaaS-specific risk areas - Ind AS 115 contract testing, contract liability roll-forward, ESOP Ind AS 102 audit, India-US transfer pricing Form 3CEB, and Section 80-IAC deferment disclosure - are bundled at the tier rates above. Statutory filing fees with the MCA portal, IMB application processing, and any UDIN cost are separate. The exact fee depends on contract count, ESOP grant complexity, captive structure and DPIIT / IMB status. Contact us for a stage-tiered quote.</p>
                <p style="margin-top:16px;"><strong>Get a free statutory audit consultation for your SaaS company - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20SaaS%20company." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Audit Timeline for SaaS Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Duration</th><th>Notes</th></tr></thead>
                    <tbody>
                        <tr><td>Engagement and planning</td><td>Week 1</td><td>SA 210 engagement letter; Section 141 independence; DPIIT and IMB certificate review.</td></tr>
                        <tr><td>Pre-year-end interim audit</td><td>Week 2 to 3</td><td>Q4 contract sample review; ESOP fair-value walkthrough.</td></tr>
                        <tr><td>Ind AS 115 contract testing</td><td>Week 3 to 5</td><td>Top 25 plus random 15 to 25 contracts; SSP allocation testing.</td></tr>
                        <tr><td>ESOP accounting review</td><td>Week 4 to 5 (parallel)</td><td>Ind AS 102 fair-value verification; Section 192(1C) deferral applicability.</td></tr>
                        <tr><td>Form 3CEB review (India-US captives)</td><td>Week 4 to 6</td><td>TP study and benchmarking validation.</td></tr>
                        <tr><td>Draft report and management response</td><td>Week 5 to 6</td><td>SA 700 / 705 review; KAM discussion for listed entities.</td></tr>
                        <tr><td>UDIN, sign-off and AOC-4 filing</td><td>Within 30 days of AGM</td><td>Patron files AOC-4 with audit report annexed.</td></tr>
                        <tr><td>Form 3CEB filing</td><td>By 31 October</td><td>Section 92E - independent of AOC-4.</td></tr>
                        <tr><td>Form 10-IC and ITR (with 80-IAC claim)</td><td>By 31 October (audit-applicable cases)</td><td>Where 3-year deferment claim is being made.</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>&#9888; Statutory Deadlines to Track:</strong></p>
                    <p>AOC-4 with audit report within 30 days of AGM; MGT-7 within 60 days; ADT-1 within 15 days of board resolution. Form 3CEB under Section 92E by 31 October following the financial year. Section 80-IAC IMB application requires CA-audited financials and approval takes 3 to 4 months. Section 80-IAC has a hard sunset - incorporation must be before 31 March 2030 (Budget 2025-26 extension). Delay attracts Rs 100 per day MCA additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000.</p>
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
            <h2 class="section-title">Benefits of Patron-Led SaaS Audit</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
                <h3 class="feature-title">Single Engagement, Five Risk Areas</h3>
                <p class="feature-text">One engagement letter covers Section 143 statutory audit, Form 3CEB transfer pricing, ESOP accounting cross-check, and 80-IAC deferment disclosure. Eliminates the workpaper duplication that occurs when SaaS founders stitch together a statutory auditor, a separate TP firm, and an ESOP advisory specialist.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">Contract Sample Calibrated to Your Base</h3>
                <p class="feature-text">Sample size and SSP testing calibrated to your customer base, not a generic 25-contract template. Top contracts plus random selection across tenure, segment and renewal cohort. Tested against the 5-step model with documented conclusion under paragraphs 35 and 76 to 80 of Ind AS 115.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3 class="feature-title">Black-Scholes ESOP FMV Review</h3>
                <p class="feature-text">Black-Scholes / binomial review of your registered valuer's ESOP FMV report - so the Ind AS 102 expense matches what hits Form 16 perquisite under Section 17(2)(vi). Vesting-period expense reconciled to ESOP Outstanding Account under reserves. Section 192(1C) deferral conditions documented for DPIIT + IMB startups.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/></svg></div>
                <h3 class="feature-title">TP Study Current-Year Freshness Check</h3>
                <p class="feature-text">TP study current-year freshness check before Form 3CEB sign-off, avoiding the Income Tax Department's most common adjustment - stale benchmarking data more than 12 months old. Comparables refreshed; working-capital and risk differences adjusted; cost-plus mark-up reconciled to benchmarked range.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                <h3 class="feature-title">DPIIT + IMB Validity Pre-Check</h3>
                <p class="feature-text">DPIIT and IMB certificate validity check before claiming the Section 80-IAC deferment - many startups miss the partnership-firm-exclusion or the 31 March 2030 sunset. Patron also verifies the Rs 100 crore turnover ceiling in every preceding FY before sign-off.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg></div>
                <h3 class="feature-title">Investor-Ready Audit Report</h3>
                <p class="feature-text">The KAM wording is calibrated for Series B / C diligence questions, not boilerplate. Revenue recognition timing, ESOP fair-value, and transfer pricing are addressed at the level investor accounting diligence will read. No restatement risk at the next round.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">SaaS Audit Clients: Track Record</h2>
            <div class="content-text">
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</p>
                <p>"Our trademark was filed and registered within the timeline Patron promised. No surprises." - Founder, D2C Brand, Bangalore</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and SaaS captives across DLF Cyber City, HSR Layout and HITEC City. With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves SaaS founders across Indian and India-US captive structures with a single partner-led team.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Big-Four vs Patron-Led SaaS Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron-Led</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>DIY / In-House</th></tr></thead>
                    <tbody>
                        <tr><td>Independence under Section 141</td><td>Qualified</td><td>Qualified</td><td>Disqualified</td></tr>
                        <tr><td>Ind AS 115 contract testing depth</td><td>Calibrated to your contract base</td><td>Heavy - full SSP modelling</td><td>N/A</td></tr>
                        <tr><td>ESOP accounting and Section 192(1C) deferral</td><td>Single-partner sign-off; integrated</td><td>Centralised - slower turnaround</td><td>Not auditable in-house</td></tr>
                        <tr><td>Form 3CEB Section 92E</td><td>Bundled in single engagement</td><td>Separate TP partner</td><td>Not signable</td></tr>
                        <tr><td>Section 80-IAC IMB application support</td><td>Bundled - IMB submission to audit alignment</td><td>Typically not bundled</td><td>Self-application</td></tr>
                        <tr><td>Cost (Series A SaaS)</td><td>Rs 1.5 to 3.25 lakh</td><td>Rs 8 to 20 lakh</td><td>Apparent zero - unsignable</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;">Statutory audit cannot be performed in-house - Section 141 disqualifies all officers and employees. The meaningful comparison for funded SaaS founders is between Big-Four scale and a senior partner-led mid-tier firm. Pre-IPO and Series E entities often need Big-Four scale; Seed through Series C SaaS founders typically get better senior-partner attention and faster turnaround with Patron, at one-fifth to one-tenth of the Big-Four fee.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                <p>SaaS founders, India-US captive CFOs, DPIIT-recognised startups and Series A to D scale-ups often need a bundled compliance scope. These are the services Patron offers alongside the statutory audit:</p>
                <ul>
                    <li><strong>Statutory Audit (India):</strong> <a href="/statutory-audit">Parent statutory audit page</a> - Section 143 framework applicable across all industries.</li>
                    <li><strong>Tax Audit (Section 44AB):</strong> <a href="/tax-audit">Tax audit</a> - bundled engagement for SaaS above Rs 1 crore (Rs 10 crore digital) turnover; Form 3CD and 3CA / 3CB.</li>
                    <li><strong>Internal Audit (Section 138):</strong> <a href="/internal-audit">Internal audit</a> - mandatory for SaaS above Rs 200 crore turnover; recommended for Series C / D entities.</li>
                    <li><strong>Private Limited Compliance:</strong> <a href="/private-limited-company-compliance">Pvt Ltd compliance</a> - ROC annual filings ADT-1, AOC-4, MGT-7.</li>
                    <li><strong>Startup Registration / DPIIT:</strong> <a href="/startup-registration">Startup registration</a> - DPIIT recognition before 80-IAC IMB application.</li>
                    <li><strong>Appointment of Auditor:</strong> <a href="/appointment-of-auditor">Appointment of auditor</a> - first auditor and AGM appointment with ADT-1 filing.</li>
                    <li><strong>Change of Auditor:</strong> <a href="/change-of-auditor">Change of auditor</a> - Section 140 resignation and replacement, common at Series B / C transitions.</li>
                    <li><strong>Accounting Services for E-commerce Industry:</strong> <a href="/accounting-services-for-e-commerce-industry">E-commerce accounting</a> - peer industry vertical for marketplace settlements and digital commerce.</li>
                    <li><strong>Payroll Services for IT and Software Industry:</strong> <a href="/payroll-services-for-it-and-software-industry">IT / SaaS payroll</a> - IT / SaaS payroll with ESOP perquisite handling under Section 17(2)(vi).</li>
                    <li><strong>GST Returns for OIDAR:</strong> <a href="/gst-returns-for-oidar">GST OIDAR returns</a> - SaaS OIDAR classification under SAC 998314 and LUT compliance for export SaaS.</li>
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
                <p>The statutory audit framework for SaaS companies in India draws on the Companies Act, the Income Tax Act, DPIIT / IMB notifications, ICAI accounting standards, and the GST Act. Authoritative sources include the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 V3 portal</a> for AOC-4 / MGT-7 / ADT-1 filings, <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India</a> for Section 17(2)(vi), 80-IAC, 92E, 192(1C) references, and the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> for OIDAR SAC 998314 and LUT filings.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act (Statutory Audit)</td><td>Companies Act, 2013 - Sections 139 to 148</td></tr>
                        <tr><td>Section 139</td><td>First auditor within 30 days; AGM appointment for 5 years (individual) or 10 years (firm)</td></tr>
                        <tr><td>Section 143</td><td>Powers and duties of auditor; SA 700 / 705 reporting; CARO 2020 annexure</td></tr>
                        <tr><td>Section 143(3)(i)</td><td>Internal Financial Controls over Financial Reporting</td></tr>
                        <tr><td>Section 147</td><td>Penalty - company Rs 25,000 to Rs 5,00,000; auditor Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh if fraudulent); officer in default Rs 10,000 to Rs 1,00,000</td></tr>
                        <tr><td>Ind AS 115 (Revenue from Contracts with Customers)</td><td>5-step model: identify contract, performance obligations, transaction price, allocation, recognition. Para 26 (services that do not transfer goods or services). Para 56 (variable consideration constraint). Para 76 to 80 (SSP allocation). Para 116 (contract liability disclosure).</td></tr>
                        <tr><td>Ind AS 102 (Share-Based Payment)</td><td>Fair-value measurement at grant date; expense recognition over the vesting period; ESOP Outstanding Account treatment</td></tr>
                        <tr><td>Income Tax Section 17(2)(vi)</td><td>ESOP perquisite at exercise = FMV - exercise price; taxed as salary in employee's hands</td></tr>
                        <tr><td>Income Tax Section 192(1C)</td><td>TDS withholding deferral for ESOP perquisite where employer is eligible startup under Section 80-IAC; trigger - earliest of (a) 48 months from end of AY of allotment, (b) sale of shares, (c) employee cessation</td></tr>
                        <tr><td>Income Tax Section 80-IAC</td><td>100 percent deduction on eligible business profits for any 3 consecutive years out of first 10; Pvt Ltd or LLP; incorporated after 1 April 2016 and before 31 March 2030; turnover under Rs 100 crore in any preceding FY; DPIIT-recognised; IMB-certified</td></tr>
                        <tr><td>Income Tax Section 92E and Rule 10E</td><td>Form 3CEB - Accountant's report on international and specified domestic transactions; due 31 October</td></tr>
                        <tr><td>Income Tax Section 286 and Rule 10DA / 10DB</td><td>Master File (Form 3CEAA) and Country-by-Country Reporting (Form 3CEAC / 3CEAD) for groups above Rs 500 crore consolidated revenue</td></tr>
                        <tr><td>Income Tax Rules 10TA to 10TG</td><td>Safe harbour rules for low-value-adding intra-group services (5 percent mark-up) and contract software development (17 to 18 percent for under Rs 100 crore; 18 to 24 percent for above)</td></tr>
                        <tr><td>GST SAC 998314 (OIDAR)</td><td>Online Information Database Access and Retrieval - SaaS classification; 18 percent on domestic supplies; zero-rated for export with LUT under Form GST RFD-11</td></tr>
                        <tr><td>CARO 2020</td><td>Clauses 3(vii) statutory dues incl GST; 3(xiii) related-party transactions; 3(xv) non-cash transactions with directors (e.g. ESOP allotments)</td></tr>
                        <tr><td>Standards on Auditing</td><td>SA 200 (Overall Objectives), SA 500 / 501 / 530, SA 540 (Auditing Accounting Estimates - applies to ESOP fair-value and SSP), SA 550 (Related Parties), SA 570 (Going Concern), SA 700 / 701 / 705 / 706</td></tr>
                        <tr><td>DPIIT Notification</td><td>G.S.R. 127(E) dated 19 February 2019 (Startup definition); extended to 31 March 2030 under Budget 2025-26</td></tr>
                        <tr><td>Forms</td><td>ADT-1 (auditor), AOC-4 (financials), MGT-7 (annual return), 3CEB (TP), 3CEAA / 3CEAC / 3CEAD (Master File / CbCR), Form 10-IC (concessional tax regime opt-in), RFD-11 (LUT)</td></tr>
                    </tbody>
                </table>
                </div>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Statutory Audit for SaaS Companies</h2>
                    <p class="faq-expanded__lead">Common questions from DPIIT-recognised SaaS founders, India-US captive CFOs, Series A to D finance heads and ESOP plan administrators on Section 143, Ind AS 115 revenue recognition, ESOP perquisite, Form 3CEB and Section 80-IAC.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Statutory Audit for SaaS Companies'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for SaaS startups in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - private limited, public limited, OPC, Section 8 - irrespective of revenue or stage. A pre-revenue product SaaS startup in stub-period year one and a Rs 200 crore ARR scale-up are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is SaaS subscription revenue recognised under Ind AS 115?</h3>
                        <div class="faq-expanded__a"><p>Under the 5-step model of Ind AS 115, SaaS subscription revenue is typically recognised over time as the service is delivered, because the customer simultaneously receives and consumes the benefits as the provider performs (paragraph 35(a)). An annual contract worth Rs 12,00,000 invoiced upfront on 1 April is recognised at Rs 1,00,000 per month over 12 months. The Rs 12 lakh received at billing sits as a contract liability (deferred revenue) on the balance sheet and unwinds month-by-month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is a contract liability in SaaS audit?</h3>
                        <div class="faq-expanded__a"><p>A contract liability is the obligation to transfer goods or services to a customer for consideration already received or due. In a SaaS context, when an annual subscription is billed upfront, the unearned portion sits as a contract liability under Schedule III (Other Current Liabilities - Deferred Revenue). Paragraph 116 of Ind AS 115 requires the entity to disclose the opening and closing balances and the revenue recognised during the period from the opening balance. The auditor independently reconciles this against contract-level unwinding schedules.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are ESOPs taxed at exercise under Section 17(2)(vi)?</h3>
                        <div class="faq-expanded__a"><p>At exercise, the difference between the Fair Market Value (FMV) of the shares on the exercise date and the exercise price paid by the employee is taxed as a perquisite under Section 17(2)(vi) of the Income Tax Act, 1961. The employer withholds TDS under Section 192 on this perquisite as part of salary. Example - 1,000 options exercised at Rs 100 when FMV is Rs 400 creates a perquisite of Rs 3,00,000 taxed at the employee's marginal slab. A subsequent sale creates capital gains computed from FMV at exercise as the cost of acquisition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the ESOP tax deferment for DPIIT startups?</h3>
                        <div class="faq-expanded__a"><p>Section 192(1C) of the Income Tax Act allows employees of DPIIT-recognised, IMB-certified Section 80-IAC startups to defer ESOP perquisite TDS withholding to the earliest of (a) 48 months from the end of the assessment year in which shares were allotted, (b) the date the employee sells the shares, or (c) the date the employee ceases employment. The perquisite is still valued at exercise FMV minus exercise price but the cash tax outflow shifts to the trigger event. DPIIT recognition alone is not sufficient - IMB certification under Section 80-IAC is also required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is Form 3CEB required for India-USA SaaS subsidiaries?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 92E of the Income Tax Act, 1961 requires every person entering into international transactions or specified domestic transactions to obtain an Accountant's report in Form 3CEB. For an Indian SaaS captive providing development or back-office services to a US parent under a cost-plus arrangement, every intercompany invoice is an international transaction. Form 3CEB is due 31 October following the financial year. For groups above Rs 500 crore consolidated revenue, Master File (Form 3CEAA) and Country-by-Country Reporting (Form 3CEAC / 3CEAD) also apply under Section 286.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Section 80-IAC and who can claim it?</h3>
                        <div class="faq-expanded__a"><p>Section 80-IAC of the Income Tax Act, 1961 grants a 100 percent deduction on profits of an eligible startup for any 3 consecutive assessment years out of the first 10 from incorporation. Eligibility requires (a) incorporation as Pvt Ltd or LLP (partnership firms excluded), (b) incorporation after 1 April 2016 and before 31 March 2030 (Budget 2025-26 extension), (c) turnover under Rs 100 crore in any preceding financial year, (d) DPIIT recognition, and (e) separate certification by the Inter-Ministerial Board (IMB). Over 3,700 startups have received IMB approval to date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does GST timing mismatch affect SaaS statutory audit?</h3>
                        <div class="faq-expanded__a"><p>GST at 18 percent on SaaS subscriptions (classified as OIDAR under SAC 998314) is payable on the invoice date - the full annual contract value at billing. Ind AS 115 recognises revenue ratably over the subscription term. A Rs 12 lakh annual invoice creates a Rs 2.16 lakh GST liability immediately, while only Rs 1 lakh of revenue is recognised in month one. The audit reconciles GSTR-3B challan trail to the books and reports any statutory dues outstanding for more than six months under CARO 2020 clause 3(vii). For export SaaS, a valid LUT under Form GST RFD-11 zero-rates the supply.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>SaaS startup ka audit kaise hota hai?</strong> Companies Act Section 143 ke under practicing CA dwara annual examination - revenue under Ind AS 115, ESOP under Ind AS 102, transfer pricing Form 3CEB.</p>
                <p><strong>Subscription revenue ek baar mein book kar sakte hain?</strong> Nahi. Ind AS 115 ke under over the subscription term (typically straight-line monthly) recognise karna hota hai. Upfront billing ko deferred revenue (contract liability) mein dalo.</p>
                <p><strong>ESOP perquisite tax kab lagta hai?</strong> Exercise par - Section 17(2)(vi). DPIIT + IMB certified 80-IAC startup ho toh Section 192(1C) ke under deferral mil sakta hai.</p>
                <p><strong>Form 3CEB kya hai?</strong> Section 92E Accountant's report on international and specified domestic transactions - due 31 October.</p>
                <p><strong>80-IAC kaun claim kar sakta hai?</strong> DPIIT + IMB-certified Pvt Ltd / LLP, incorporated 1 Apr 2016 to 31 Mar 2030, turnover under Rs 100 cr. 100 percent deduction for any 3 consecutive years out of first 10.</p>
                <p><strong>SaaS pe GST kitna hai?</strong> 18 percent under SAC 998314 (OIDAR) for domestic. Export ke liye LUT (Form GST RFD-11) lo, zero-rated.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Critical Deadlines and Penalty Exposure</h2>
            <div class="content-text">
                <p>AOC-4 with the audit report must be filed within 30 days of the AGM and MGT-7 within 60 days. Form 3CEB Section 92E is due 31 October following the financial year. For DPIIT-recognised startups planning to claim Section 80-IAC, the IMB application requires CA-audited financials, and approval typically takes 3 to 4 months from submission to certificate issue.</p>
                <p>Section 80-IAC has a hard sunset - incorporation must be before 31 March 2030 (Budget 2025-26 extension). After that date, no new startup can claim the tax holiday regardless of DPIIT recognition. Delay in MCA filings attracts Rs 100 per day in additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000 on the company. The auditor faces equivalent penalty under Section 147 (Rs 25,000 to Rs 5,00,000; Rs 1 lakh to Rs 25 lakh in fraudulent cases). Officer in default exposure: Rs 10,000 to Rs 1,00,000.</p>
                <p><strong>Don't wait for the AGM week panic.</strong> Patron starts SaaS audit fieldwork at least 6 weeks before AGM to capture Q4 contract sample review, ESOP fair-value walkthrough, Form 3CEB benchmarking refresh, and DPIIT / IMB validity check. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20SaaS%20company." target="_blank">WhatsApp us</a> for a stage-tiered quote.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for Your SaaS Statutory Audit</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:#FFFFFF !important;">Statutory audit for SaaS companies sits at the intersection of Section 143 of the Companies Act, Ind AS 115 revenue recognition, Ind AS 102 ESOP accounting, Section 17(2)(vi) perquisite tax, India-US transfer pricing under Section 92E, and Section 80-IAC startup tax-holiday claims.</p>
                <p style="color:#FFFFFF !important;">A SaaS audit that gets any one of these wrong typically surfaces in Series B / C diligence - and forces a restated audit. Patron Accounting handles the full scope under a single CA partner with SaaS-aware risk assessment, contract-by-contract Ind AS 115 testing, ESOP fair-value cross-check, bundled Form 3CEB transfer pricing certification, and 80-IAC IMB application support.</p>
                <p style="color:#FFFFFF !important;">Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring depth from Seed through Series D for both pure-Indian and India-US captive structures. Whether you operate a pre-revenue vertical SaaS, a Series A bootstrap, a Series C scale-up, an India-US captive subsidiary, or a DPIIT-recognised entity preparing the IMB Section 80-IAC application - Patron's five-risk-area framework is your one engagement letter for the year.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20SaaS%20company." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20for%20SaaS%20Companies&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Statutory%20Audit%20for%20SaaS%20Companies%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Other Services for SaaS and IT Companies</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end audit, tax, accounting and compliance support for SaaS founders, India-US captives, DPIIT-recognised startups and Series A to D scale-ups under one roof.</p>
           
            <div class="pa-city-block">
                <div class="pa-block-title">Related Audit and SaaS Services</div>
                <div class="pa-block-sub">End-to-end support for SaaS founders, India-US captives, DPIIT-recognised startups and Series A to D scale-ups</div>
                <div class="pa-cross-grid">
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (India)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Section 44AB)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration (DPIIT)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/payroll-services-for-it-and-software-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT/SaaS Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns-for-oidar" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns for OIDAR</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is on a Tier 1 quarterly review cycle - we re-check it every quarter against the latest DPIIT / IMB notifications, CBDT circulars on Section 192(1C) deferral triggers, Section 80-IAC sunset extensions, ICAI revisions to Ind AS 115 and Ind AS 102 guidance, and Budget announcements affecting SaaS / startup taxation. Material updates trigger an immediate refresh; routine sweeps consolidate at the quarter-end.</p>
        </div>
    </div>
</section>



</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
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
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
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
        // Static cards already rendered - init Slick immediately
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
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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