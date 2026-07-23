
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
    <title>IMF for Financial Advisors: RIA + IMF</title>
    <meta name="description" content="Add IMF to financial advisory or RIA practice - operating model, RIA-IMF segregation, tax planning, insurer strategy. From Rs 75,000. Free scoping call.">
    <link rel="canonical" href="/imf-for-financial-advisors">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IMF for Financial Advisors 2026: RIA + IMF | Patron">
    <meta property="og:description" content="Add IMF to financial advisory or RIA practice - operating model, RIA-IMF segregation, tax planning, insurer strategy. From Rs 75,000. Free scoping call.">
    <meta property="og:url" content="/imf-for-financial-advisors">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/imf-for-financial-advisors-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IMF for Financial Advisors 2026: RIA + IMF | Patron">
    <meta name="twitter:description" content="Add IMF to financial advisory or RIA practice - operating model, RIA-IMF segregation, tax planning, insurer strategy. From Rs 75,000. Free scoping call.">
    <meta name="twitter:image" content="/images/imf-for-financial-advisors-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/imf-for-financial-advisors/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Insurance Marketing Firm Registration", "item": "/insurance-marketing-firm-registration" },
        { "@type": "ListItem", "position": 3, "name": "IMF for Financial Advisors", "item": "/imf-for-financial-advisors" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/imf-for-financial-advisors/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can a financial advisor become an IMF in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Independent financial advisors - including Mutual Fund Distributors (MFDs), Certified Financial Planners (CFPs), family office advisors, and wealth managers - can add IMF activity to their practice. The structural decision is whether to operate IMF in the same entity (permitted for non-RIA advisors) or in a separate entity (mandatory for SEBI Registered Investment Advisors under 2020 Amendment Regulation 22A). Patron's advisor-track package Rs 75,000 to Rs 1,50,000 across 3 tiers covers entity structure design, mixed-revenue tax planning, IMF setup and Year 1 retainer (Tier 3)."
          }
        },
        {
          "@type": "Question",
          "name": "Can a SEBI RIA also operate as an IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but not in the same entity under SEBI IA Regulations 2020 Amendment Regulation 22A. SEBI mandates segregation between advisory (fee-only) and distribution (commission-based) activities. Two segregation paths - (a) Client-level - some clients on fee-only basis, others on commission basis with explicit choice; (b) Entity-level - separate corporate entities. Most Patron RIA clients choose entity-level separation through Tier 3 advisor-track engagement Rs 1,20,000 to Rs 1,50,000 with two-entity setup, inter-entity service agreements, and Year 1 retainer."
          }
        },
        {
          "@type": "Question",
          "name": "What is the income lift for advisors adding IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typical revenue addition 15-30 percent over 12-24 months. Lower than agent-graduation (30-60 percent) because advisor revenue baseline is higher and more diversified - existing advisory fees plus MF commission already provide a solid base. Insurance adds proportionally less but improves client lifetime value and retention significantly. Lift accelerates if advisor has substantial HNI book where high-ticket term insurance and protection products are needed. Cumulative LTV impact over 5-10 years exceeds the 15-30 percent first-year metric materially."
          }
        },
        {
          "@type": "Question",
          "name": "How do RIAs handle insurance distribution under SEBI rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SEBI RIAs cannot earn insurance commission in the same entity as advisory under 2020 Amendment Regulation 22A. Two compliance paths - (a) Separate IMF entity with same beneficial owners - RIA client referred to IMF entity for insurance with explicit disclosure; commission earned by IMF entity, advisory fee earned by RIA entity; (b) Client-level segregation - some clients on RIA fee-only basis, others on commission basis with documented choice. Patron typically recommends entity-level segregation for clarity, audit trail, and operational simplicity."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between RIA and IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RIA (Registered Investment Advisor under SEBI IA Regulations 2013) provides investment advisory on fee-only basis with fiduciary duty; cannot earn commission from advised products under 2020 Amendment. Net worth requirement Rs 50 lakh (Non-Individual) or Rs 5 lakh (Individual). IMF (Insurance Marketing Firm under IRDAI IMF Regulations 2015) is an insurance distribution intermediary earning commission from insurers; net worth Rs 10 lakh or Rs 5 lakh single-district. RIAs are fee-based fiduciaries; IMFs are commission-based distributors. Both can exist for the same beneficial owner in two separate entities."
          }
        },
        {
          "@type": "Question",
          "name": "Should a financial advisor add IMF in the same entity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Decision depends on SEBI registration status. (a) SEBI RIA - MUST use separate entity under 2020 Amendment Regulation 22A; same-entity model violates segregation requirement. (b) Non-RIA (MFD, CFP, family advisor) - CAN use same entity; multi-activity MoA covering both MFD and IMF objects; single set of audit, ROC, ITR, GST returns. (c) For advisors planning future SEBI RIA registration - separate-entity model is forward-compatible. Patron's tier selection process includes structure decision based on current and planned regulatory status."
          }
        },
        {
          "@type": "Question",
          "name": "What are the tax implications of advisor IMF activity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mixed-revenue tax considerations - (a) Income Tax - all revenue heads (advisory, MF, insurance) reported in ITR-6 under Section 28; separate books for each stream for audit verification; tax audit triggered at Rs 1 crore aggregate turnover under Section 44AB; (b) GST - 18 percent rate on all three revenue heads; aggregate turnover threshold Rs 20 lakh; (c) TDS - 5 percent on insurance commission under Section 194D; 10 percent on MF commission under Section 194H; 10 percent on professional fees under Section 194J. Two-entity model requires Section 188 RPT compliance for inter-entity transactions."
          }
        },
        {
          "@type": "Question",
          "name": "How long does advisor IMF setup take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard 120 days for Tier 1 and Tier 2 single-entity setup; 150 days for Tier 3 two-entity SEBI RIA setup. Phase 0 Discovery (Days 1-10) - SEBI registration check, revenue mix analysis, entity structure decision. Phase 1 Entity Formation (Days 10-35) plus PO Training in parallel (Days 1-50). Phase 2 Tax Structure plus Insurer Outreach plus ISP Onboarding (Days 25-80). Phase 3 IRDAI Application and Processing (Days 65-100). Phase 4 Operations Launch (Days 100-130). Phase 5 Year 1 Retainer for Tier 3 (Day 130 onward)."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/imf-for-financial-advisors/#service",
      "name": "IMF for Financial Advisors - Setup Engagement",
      "description": "Specialised Insurance Marketing Firm setup engagement for SEBI Registered Investment Advisors (RIAs), Mutual Fund Distributors (MFDs / ARN holders), independent wealth managers, family office advisors, CFP charterholders, and financial planners. Coverage includes entity structure design under SEBI IA Regulations 2020 Amendment Regulation 22A (same entity for non-RIA advisors versus segregated separate entity for SEBI RIAs), mixed-revenue tax planning across advisory fees, mutual fund commission, and insurance commission with TDS Sections 194D / 194H / 194J handling, IMF-tailored MoA Object Clause, Principal Officer 50-hour training, insurer outreach calibrated to advisor-led mix (1-2 life + 1-2 health + 0-1 general), ISP onboarding from existing advisor team, and Year 1 compliance retainer. Three-tier fixed-fee structure Rs 75,000 to Rs 1,50,000.",
      "serviceType": "Financial Advisor IMF Setup and Two-Entity Segregation Advisory",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Insurance Regulatory and Development Authority of India", "sameAs": "https://en.wikipedia.org/wiki/Insurance_Regulatory_and_Development_Authority" },
        { "@type": "Thing", "name": "Securities and Exchange Board of India", "sameAs": "https://en.wikipedia.org/wiki/Securities_and_Exchange_Board_of_India" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Financial Advisor IMF Engagement Tiers",
        "itemListElement": [
          { "@type": "Offer", "name": "Tier 1 - Non-RIA Advisor Single-Entity Setup (MFD / CFP / family advisor)", "price": "75000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-financial-advisors" },
          { "@type": "Offer", "name": "Tier 2 - Comprehensive Advisor-Track with ISPs (up to 3 ISPs, multi-state)", "price": "90000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-financial-advisors" },
          { "@type": "Offer", "name": "Tier 3 - SEBI RIA Two-Entity Setup with Year 1 Compliance Retainer", "price": "120000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-financial-advisors" }
        ]
      }
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
                        IMF for Financial Advisors
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>RIA + IMF Segregation:</span> Same entity (non-RIA advisors like MFDs, CFPs, family advisors) or separate entities (SEBI RIAs) under SEBI 2020 Amendment Regulation 22A. Patron handles both structures.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Revenue Add 15-30 Percent:</span> Typical advisory practice adds 15-30 percent revenue over 12-24 months by layering insurance commission on existing advisory fees and MF distribution income. HNI client base accelerates lift.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Advisor-Led Insurer Mix:</span> Typically 1-2 life insurance + 1-2 health insurance tie-ups; less general insurance focus. Calibrated to HNI client base preference for asset-protection over commodity general products.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Advisor Package:</span> Rs 75,000 to Rs 1,50,000 fixed-fee across 3 tiers - higher sophistication than agent-graduation due to entity structure design, mixed-revenue tax planning, and inter-entity service agreements (Tier 3).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20for%20Financial%20Advisors%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20IMF%20setup%20for%20financial%20advisors%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20a%20financial%20advisor%20or%20RIA%20and%20want%20Patron's%20advisor-track%20IMF%20setup." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - IMF for Financial Advisors'/>
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
                                                                <option value="imf-for-financial-advisors" selected>IMF for Financial Advisors</option>
                                <option value="insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</option>
                                <option value="imf-incorporation-services">IMF Incorporation Services</option>
                                <option value="imf-irdai-registration-process">IRDAI IMF Registration Process</option>
                                <option value="ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</option>
                                <option value="imf-compliance-retainer-services">IMF Compliance Retainer</option>
                                <option value="imf-for-insurance-agents">IMF for Insurance Agents</option>
                                <option value="imf-private-limited-vs-llp">IMF Pvt Ltd vs LLP</option>
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
                <p>From SEBI RIAs to mutual fund distributors and corporate agents, businesses across India trust Patron for compliant IMF setup and IRDAI registration.</p>
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
                        <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth',block:'start'});">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth',block:'start'});">4 Drivers</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">Advisor Types Served</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">Engagement Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">Setup Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Common Mistakes</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">Fees and Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">120-150 Day Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Why Patron</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth',block:'start'});">Same vs Separate Entity</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>















<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - IMF for Financial Advisors</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IMF for Financial Advisors Services at a Glance</strong></p>
                    <p>Independent financial advisors in India operate under one of three regulatory frameworks - SEBI Registered Investment Advisor (RIA) under SEBI IA Regulations 2013 (fee-only fiduciary; approximately 1,300 active RIAs), Mutual Fund Distributor (MFD or ARN holder) under SEBI Mutual Fund Regulations 1996 (commission-based; approximately 3 lakh ARN holders), or unregistered financial planner (CFP charterholders, family advisory consultants). Adding IMF unlocks four benefits - one-stop client offering, 15-30 percent revenue addition, client retention through bundled services, and customer lifetime value through renewal commissions. Critical regulatory consideration - SEBI RIAs CANNOT earn insurance commission in the same entity as advisory under 2020 Amendment Regulation 22A; segregation required either by client or by entity. Patron's advisor-track package Rs 75,000 to Rs 1,50,000 across 3 tiers.</p>
                </div>
                <p>Independent financial advisors in India increasingly add Insurance Marketing Firm activity to deepen client engagement, diversify revenue, and build sticky bundled relationships. The advisor-led IMF differs from the general IMF or agent-graduated IMF in three structural respects - (1) Regulatory complexity if the advisor is SEBI Registered Investment Advisor (RIA), since SEBI IA Regulations 2013 read with 2020 Amendment Regulation 22A prohibits commission earnings in the same entity as advisory; (2) Mixed-revenue tax structuring spanning advisory fees, mutual fund distribution commission, and insurance commission with different TDS rates and GST treatment; (3) Insurer mix preference skewing toward life (term and protection for HNI clients) and health (high-value family floater) with less general insurance focus given the wealth-advisory client profile.</p>
                <p>Patron's advisor-track package addresses these dimensions through entity structure design (same entity vs separate entity), MoA Object Clause architecture, Rs 10 lakh paid-up capital coordination, Principal Officer certification, insurer outreach calibrated to advisor-led mix, ISP onboarding from existing advisor team, and Year 1 IMF compliance retainer. Patron fee Rs 75,000 to Rs 1,50,000 across 3 tiers reflects the higher sophistication versus agent-graduation or generic IMF setup. Verify your eligibility through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India</a>; SEBI advisor framework at the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">Securities and Exchange Board of India</a>; entity formation at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>; tax planning at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>.</p>
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
                <h2 class="section-title">4 Structural Drivers for Adding IMF to an Advisory Practice</h2>
                <div class="content-text what-is-definition">
                    
                                        <p>Four structural drivers push successful financial advisors toward IMF addition. Each addresses a different growth lever - revenue, retention, lifetime value, and competitive positioning - and combined they make the advisor-led IMF one of the highest-quality persona segments in the IMF cluster.</p>
                    <p><strong>Driver 1 - One-Stop Client Offering:</strong> HNI and family office clients prefer integrated wealth advisors who can address all financial needs - investments, insurance, pension, banking, tax. Advisors limited to investment-only advisory or only mutual fund distribution lose share-of-wallet to competing one-stop wealth platforms. Adding IMF enables insurance solicitation under the same brand and relationship, completing the financial-services bouquet. The client friction of working with a separate insurance distributor disappears.</p>
                    <p><strong>Driver 2 - Revenue Addition 15-30 Percent:</strong> Advisor revenue typically comprises (a) advisory fees (RIA fee-only or family advisory retainers); (b) mutual fund distribution commission (MFD or ARN holders); (c) other revenue streams. Adding insurance commission layers a typical 15-30 percent revenue addition over 12-24 months. The lift is lower than agent-graduation (30-60 percent) because advisor revenue baseline is higher and more diversified. The lift accelerates if the advisor has a substantial HNI book where high-ticket term insurance and protection products are needed.</p>
                    <p><strong>Driver 3 - Client Retention Through Bundled Services:</strong> Single-product relationships (only MF distribution OR only advisory) face client churn risk. Bundled relationships (advisory + MF + insurance + pension) have switching costs - clients must replace multiple providers to leave fully. Retention rates for bundled clients are measurably higher than single-product clients. IMF addition is therefore a defensive moat as much as a growth play.</p>
                    <p><strong>Driver 4 - Customer Lifetime Value Through Renewal Commission:</strong> Insurance products have long durations - 10 to 30+ years for life and pension; renewable annually for general and health. Once a client is on insurance distribution through the advisor's IMF, recurring renewal commissions accrue over many years even without new sales effort. This compounds advisor revenue across time. The customer lifetime value of an insurance-distributing advisor exceeds an insurance-absent advisor by 2-3x over a 7-10 year window.</p>
                    <p><strong>The Regulatory Complexity Layer:</strong> Adding IMF to an advisory practice is not a uniform exercise. SEBI Registered Investment Advisors (RIAs) face a strict segregation requirement under 2020 Amendment Regulation 22A - advisory and distribution activities cannot coexist in the same entity. Non-RIA advisors (MFDs, CFPs, family advisors) face no such restriction and can use a single Pvt Ltd or LLP entity for both activities. The first decision in any advisor-track engagement is therefore entity structure - and that decision depends almost entirely on SEBI registration status.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IMF for Financial Advisors:</strong></p>
                                        <ul style="margin-top:12px;">
                        <li><strong>SEBI Registered Investment Advisor (RIA):</strong> Investment advisor registered under SEBI (Investment Advisers) Regulations 2013. Fee-only fiduciary; cannot earn commission from advised products under 2020 Amendment Regulation 22A. Net worth requirement Rs 50 lakh (Non-Individual) or Rs 5 lakh (Individual). Approximately 1,300 active RIAs in India.</li>
                        <li><strong>Mutual Fund Distributor (MFD or ARN Holder):</strong> Distributor registered with AMFI under SEBI Mutual Fund Regulations 1996. Commission-based; not fee-only. NISM Series V-A certification required. Approximately 3 lakh ARN holders in India. Can combine with IMF in same entity.</li>
                        <li><strong>Regulation 22A SEBI IA Regulations 2020 Amendment:</strong> Mandatory segregation between advisory (fee-only) and distribution (commission-based) activities for RIAs. Two paths - client-level segregation OR entity-level segregation. Most Patron clients choose entity-level for clarity.</li>
                        <li><strong>Same vs Separate Entity Model:</strong> Same-entity model - one Pvt Ltd or LLP for both MFD plus IMF activities (only for non-RIA advisors). Separate-entity model - two entities with same beneficial owners (mandatory for SEBI RIAs; optional for others).</li>
                        <li><strong>IMF (Insurance Marketing Firm):</strong> Insurance distribution intermediary under IRDAI IMF Regulations 2015. Commission-based; earns from insurers. Net worth Rs 10 lakh general or Rs 5 lakh single-district. Pvt Ltd / LLP / Cooperative Society entity types only.</li>
                        <li><strong>Open Architecture Distribution (2L + 2G + 2H Cap):</strong> Under Regulation 3 IMF Regulations 2015, an IMF can have up to 2 life + 2 general + 2 health insurer tie-ups. Advisor-led IMFs typically use 1-2 life and 1-2 health.</li>
                        <li><strong>Mixed-Revenue Tax Treatment:</strong> Advisor practice combining advisory fees, MF commission, and insurance commission needs separate revenue heads in books and ITR-6 reporting under Section 28. TDS rates differ - Section 194D 5 percent on insurance; Section 194H 10 percent on MF / general; Section 194J 10 percent on professional fees.</li>
                        <li><strong>Section 188 Related Party Transactions (RPT):</strong> Under Companies Act 2013 Section 188, inter-entity transactions between RIA entity and IMF entity (separate-entity model) require RPT framework compliance, arm's length pricing, and board approvals for certain thresholds.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IMF for Financial Advisors</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Advisor Persona</span>
                        <strong>RIA + MFD + IMF Architecture</strong>
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
            <h2 class="section-title">Advisor Types and Practice Profiles Patron Serves</h2>
            <div class="content-text">
                
                                <p>Patron's advisor-track IMF engagement is calibrated to a diverse range of advisor practices. Each advisor type brings distinct regulatory status, revenue mix, and client profile considerations that shape the IMF structure decision.</p>
                <ul>
                    <li><strong>SEBI Registered Investment Advisors (RIAs):</strong> Approximately 1,300 active RIAs in India under SEBI IA Regulations 2013. Fee-only fiduciary advisors with mandatory entity-level segregation for IMF addition under 2020 Amendment Regulation 22A. Tier 3 engagement (Rs 1,20,000 to Rs 1,50,000) - separate IMF entity with cross-shareholding, inter-entity service agreement, and Year 1 retainer.</li>
                    <li><strong>Mutual Fund Distributors (MFDs or ARN Holders):</strong> Approximately 3 lakh ARN holders under SEBI Mutual Fund Regulations 1996. Commission-based distribution with no segregation requirement. Same-entity model permitted. Tier 1 engagement (Rs 75,000 to Rs 90,000).</li>
                    <li><strong>Certified Financial Planner (CFP) Charterholders:</strong> Professional designation from FPSB India. Often operating as MFDs or independent planners. Can combine IMF in same entity if not SEBI RIA registered. Tier 1 or Tier 2 engagement depending on team size and revenue scale.</li>
                    <li><strong>Family Office Advisors:</strong> Independent wealth advisors serving HNI families with multi-asset portfolios. Typically not SEBI RIA registered. High HNI client profile makes life and health insurance tie-ups particularly valuable. Tier 2 or Tier 3 engagement.</li>
                    <li><strong>Independent Wealth Managers:</strong> Wealth managers operating independent practice (post-bank or post-AMC). Revenue mix typically advisory fee + MF distribution + selective insurance distribution. Same-entity or separate-entity decision based on SEBI status.</li>
                    <li><strong>Bank or AMC Relationship Managers Planning Independence:</strong> Senior RMs from banks or AMCs planning independent advisor practice launch. Pre-launch advisory on entity structure, registration sequencing (NISM, AMFI ARN, possible SEBI RIA, IMF), and capital deployment.</li>
                    <li><strong>HNI Advisory Firms:</strong> Established firms serving HNI client base across investments, tax, estate planning. Insurance distribution layered onto existing offering for one-stop client experience. Tier 3 engagement with comprehensive setup.</li>
                </ul>
                <p><strong>Practice Scale Distribution:</strong> Patron's advisor-track engagements span practices from Rs 25 crore AUM solo MFDs upward through Rs 500+ crore AUM RIA firms. The tier selection process matches engagement complexity to practice scale and regulatory status rather than just AUM.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Advisor-Track Service Coverage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Tier 1 - Non-RIA Single-Entity Setup (Rs 75,000-90,000)</td>
                            <td>Suitable for MFDs, ARN holders, CFP charterholders, family advisors NOT registered as SEBI RIA. Same-entity model permitted. Includes Pvt Ltd or LLP incorporation with multi-activity MoA (MFD + IMF objects), DIN / DSC, Rs 10 lakh paid-up capital infusion, CA Net Worth Certificate, Principal Officer 50-hour training, 3-year business plan, IRDAI portal filing, 1-2 life + 1 health tie-up outreach, mixed-revenue tax planning advisory.</td>
                            <td><span class="badge-included">Non-RIA</span></td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Comprehensive Advisor-Track with ISPs (Rs 90,000-1,20,000)</td>
                            <td>Suitable for advisor practice with 2-3 junior advisors transitioning to ISPs; multi-state operation considered. All Tier 1 deliverables plus up to 3 ISPs onboarding, ISP training coordination for sectoral specialisations, insurer outreach expanded to 2 life + 2 health (4 tie-ups total), entity structure design, customer migration playbook customised to HNI advisory, accounting setup with revenue segregation methodology, FSE setup advisory.</td>
                            <td><span class="badge-included">Multi-Advisor</span></td>
                        </tr>
                        <tr>
                            <td>Tier 3 - SEBI RIA Two-Entity Setup with Year 1 Retainer (Rs 1,20,000-1,50,000)</td>
                            <td>Suitable for SEBI Registered Investment Advisors requiring entity-level segregation under 2020 Amendment Regulation 22A. Two-entity setup with same beneficial owners. Existing RIA entity preserved; second Pvt Ltd or LLP entity formed for IMF. Cross-shareholding, inter-entity service agreement, Section 188 RPT framework, all Tier 2 deliverables applied to IMF entity, up to 5 ISPs, Year 1 IMF Compliance Retainer included.</td>
                            <td><span class="badge-included">RIA Track</span></td>
                        </tr>
                        <tr>
                            <td>Multi-Activity MoA Object Clause Design</td>
                            <td>MoA Object Clause architected to cover both MFD activity (under AMFI ARN) and IMF activity (under IRDAI IMF Regulations 2015) for same-entity model. Drafted to satisfy ROC and IRDAI compliance reviewers simultaneously.</td>
                            <td><span class="badge-included">Tier 1 + 2</span></td>
                        </tr>
                        <tr>
                            <td>Inter-Entity Service Agreement (Tier 3)</td>
                            <td>Arm's length service agreement between RIA entity and IMF entity covering shared office, shared staff allocation, brand usage rights, client referral terms. Drafted to withstand transfer pricing audit. Section 188 RPT compliance built in.</td>
                            <td><span class="badge-included">Tier 3</span></td>
                        </tr>
                        <tr>
                            <td>Mixed-Revenue Tax Planning</td>
                            <td>Revenue head segregation in books - advisory fees, MF commission, insurance commission. ITR-6 reporting with segment-wise disclosure. Tax audit Section 44AB at Rs 1 crore aggregate turnover. TDS handling across Sections 194D, 194H, 194J.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>GST Architecture Across Revenue Heads</td>
                            <td>18 percent GST on advisory fees, MF commission, and insurance commission. Aggregate Rs 20 lakh turnover threshold. Input Tax Credit optimisation across business expenses. Inter-entity GST planning for two-entity model.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Principal Officer 50-Hour Training Coordination</td>
                            <td>Advisor founder (or designated PO) enrolled in 50-hour PO training at IRDAI-approved institute. CFP and NISM background enables high first-attempt pass rate.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Advisor-Led Insurer Outreach Strategy</td>
                            <td>Insurer outreach calibrated to HNI advisory client profile - life insurance for term protection and pension products; health insurance for high-value family floater and critical illness; general insurance often de-emphasised given HNI client preference for asset-protection.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>ISP Onboarding from Existing Advisor Team</td>
                            <td>Junior advisors in the practice transitioned to ISPs - 25-hour IRDAI sectoral training, KYC, Fit and Proper declarations, internal appointment letter. Tier 1 (1-2), Tier 2 (up to 3), Tier 3 (up to 5).</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Client Disclosure Templates (Code of Conduct)</td>
                            <td>Disclosure templates for clients receiving both advisory and insurance distribution. Code of Conduct compliance under Schedule I IMF Regulations 2015 - transparent fee structure, commission disclosure, product mix, conflict-of-interest management.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>

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
            <h2 class="section-title">Patron 8-Phase Advisor-Track IMF Engagement</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured workflow from initial SEBI registration check through entity setup, mixed-revenue tax structuring, insurer outreach, IRDAI application, and operations launch - with Year 1 retainer included in Tier 3 for two-entity RIA setups.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Discovery and SEBI Status Check</h3>
                    <p class="step-description">
                        Days 1-10. Advisor practice review - SEBI RIA registration status (critical), AMFI ARN status, revenue mix, client profile (HNI mix, AUM), team size. Entity structure decision (same vs separate) anchored to SEBI status. Tier selection.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SEBI status checked
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Structure decided
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="22" fill="none" stroke="#14365F" stroke-width="2"/>
                                <line x1="68" y1="68" x2="92" y2="92" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                                <text x="50" y="55" font-size="14" fill="#14365F" text-anchor="middle" font-weight="700">RIA?</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Status Diagnosed</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Entity Formation - Single or Two-Entity</h3>
                    <p class="step-description">
                        Days 10-35. Non-RIA - one Pvt Ltd or LLP with multi-activity MoA. RIA Tier 3 - existing RIA entity preserved; second Pvt Ltd or LLP entity formed for IMF with cross-shareholding. DIN / DSC; Rs 10 lakh paid-up capital; bank account; PAN / TAN / GSTIN.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            CoI received
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Capital infused
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="20" width="40" height="60" rx="4" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="35" y="55" font-size="11" fill="#14365F" text-anchor="middle" font-weight="700">RIA</text>
                                <rect x="65" y="20" width="40" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <text x="85" y="55" font-size="11" fill="#14365F" text-anchor="middle" font-weight="700">IMF</text>
                                <line x1="55" y1="50" x2="65" y2="50" stroke="#F5A623" stroke-width="2" stroke-dasharray="3,2"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Entity Live</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">PO Training (Parallel) and Tax Structure Design</h3>
                    <p class="step-description">
                        Days 1-60. Principal Officer 50-hour training enrolment. Days 25-60 - mixed-revenue tax structure design with books-of-account segregation, GST input credit mapping, TDS handling across Sections 194D / 194H / 194J.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            PO certified
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Tax design locked
                        </span>
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
                        <span class="illustration-label">Tax Designed</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Insurer Outreach Calibrated to Advisor Mix</h3>
                    <p class="step-description">
                        Days 40-80. Advisor-led insurer outreach - 1-2 life (term and pension focus); 1-2 health (high-value family floater, critical illness); optional general for HNI needs. Patron leverages existing insurer relationships.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            2-4 consent letters
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            HNI-focused mix
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="40" r="14" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="30" y="44" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">LIFE</text>
                                <circle cx="60" cy="40" r="14" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="44" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">LIFE</text>
                                <circle cx="90" cy="40" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <text x="90" y="44" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">H</text>
                                <circle cx="45" cy="75" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <text x="45" y="79" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">H</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Tie-Ups Lined Up</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">ISP Onboarding from Existing Advisor Team</h3>
                    <p class="step-description">
                        Days 35-70. Junior advisors in the practice identified for ISP transition; 25-hour IRDAI sectoral training; certification examination; KYC and Fit and Proper declarations; internal appointment letters.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Team transitioned
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Sectoral certs done
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="30" r="10" fill="#F5A623" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="35" cy="65" r="9" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <circle cx="60" cy="70" r="9" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <circle cx="85" cy="65" r="9" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <line x1="60" y1="40" x2="35" y2="58" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="60" y1="40" x2="60" y2="61" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="60" y1="40" x2="85" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">ISP Team Live</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">IRDAI Application Filing</h3>
                    <p class="step-description">
                        Days 65-100. All 25+ documents compiled including PO Pass Certificate, CA Net Worth Certificate, Schedule II F and P documentation, insurer consent letters, 3-year business plan, office documentation, multi-activity MoA confirmation. IRDAI portal application; clarification handling.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ARN received
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Queries cleared
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="3"/>
                                <line x1="30" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <line x1="30" y1="60" x2="85" y2="60" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <line x1="30" y1="72" x2="75" y2="72" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Operations Launch and Client Communication</h3>
                    <p class="step-description">
                        Days 100-130. IRDAI Registration Certificate received; insurer tie-up agreements signed; ISP deployment. Client communication to top advisory clients on insurance distribution availability; Code of Conduct disclosure templates issued; first policy sales begin.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Operations live
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Clients informed
                        </span>
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
                        <span class="illustration-label">Live</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Year 1 Compliance Retainer (Tier 3)</h3>
                    <p class="step-description">
                        Day 130 to Day 365 / 500. Tier 3 Year 1 compliance retainer - half-yearly IRDAI returns, ROC trio (AOC-4, MGT-7, ADT-1), DIR-3 KYC, DPT-3, ITR-6, GST returns, ISP CPD tracking. Inter-entity service agreement monitoring; Section 188 RPT compliance.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Compliance handled
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Inter-entity managed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="30" width="20" height="40" fill="#F5A623"/>
                                <rect x="45" y="20" width="20" height="50" fill="#F5A623" opacity="0.8"/>
                                <rect x="70" y="40" width="20" height="30" fill="#F5A623" opacity="0.5"/>
                                <line x1="15" y1="75" x2="100" y2="75" stroke="#14365F" stroke-width="2"/>
                                <text x="30" y="88" font-size="9" fill="#14365F" text-anchor="middle">Q1</text>
                                <text x="55" y="88" font-size="9" fill="#14365F" text-anchor="middle">Q2</text>
                                <text x="80" y="88" font-size="9" fill="#14365F" text-anchor="middle">Q3</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Year 1 Complete</span>
                        <span class="step-number-large">08</span>
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
            <h2 class="section-title">Document Checklist for Advisor-Track IMF Setup</h2>
            <div class="content-text">
                
                                <p>For an effective advisor-track engagement, the following documents should be ready. Patron coordinates fresh issuance where existing documents are inadequate.</p>
                <ul>
                    <li>Advisor founder PAN, Aadhaar, photograph, digital signature specimen</li>
                    <li>Co-founder or co-director PAN, Aadhaar, photograph, digital signature specimen (if applicable)</li>
                    <li>SEBI RIA registration certificate (if applicable - critical document; determines entity structure)</li>
                    <li>AMFI ARN registration certificate (for MFD activity continuation)</li>
                    <li>NISM Series V-A certification (for MFD continuation) or NISM Investment Adviser certification (for RIA)</li>
                    <li>CFP charter certificate (if applicable; supports Fit and Proper credentials)</li>
                    <li>Advisor founder Fit and Proper declaration (Form A Schedule II IMF Regulations 2015)</li>
                    <li>Last 3 years ITR acknowledgements (founder and existing advisory entity if applicable)</li>
                    <li>Existing advisory entity financial statements (if separate-entity model for Tier 3)</li>
                    <li>Existing advisory entity AOC-4 / ROC filings history</li>
                    <li>Existing advisory entity GST registration certificate and filing history</li>
                    <li>Office rental agreement or owned office property documents</li>
                    <li>Office photographs and office layout sketch</li>
                    <li>Net Worth supporting - bank account statements showing capital availability for Rs 10 lakh paid-up capital</li>
                    <li>Education and qualification certificates - graduation degree, professional certifications</li>
                    <li>3 reference letters (2 from senior industry connections; 1 from major client)</li>
                    <li>Insurer outreach target list (calibrated to HNI client profile)</li>
                    <li>Junior advisor team list for ISP onboarding (Tier 2-3) with NISM / IRDAI background</li>
                    <li>Client mix analysis - HNI percentage, advisory fee revenue, MF commission revenue</li>
                </ul>
                <p style="margin-top:16px;">Verify portal status at the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a> and the <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI Insurance Marketing Firm portal</a>. SEBI advisor framework at the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">Securities and Exchange Board of India</a>. Pvt Ltd / LLP filings at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>. Income tax e-filing at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Advisor-Track Mistakes Patron Helps You Avoid</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>RIA Adding IMF Activity in Same Entity (Regulatory Violation)</td>
                            <td>SEBI RIAs sometimes attempt to add IMF activity to the existing RIA entity. This violates SEBI IA Regulations 2020 Amendment Regulation 22A. SEBI surveillance can lead to adverse action including RIA registration suspension and significant penalty exposure.</td>
                            <td>Patron's first step for RIA clients is mandatory entity-level segregation discussion. Tier 3 setup creates a second Pvt Ltd or LLP entity for IMF with same beneficial owners; existing RIA entity preserved; inter-entity service agreement drafted on arm's length terms.</td>
                        </tr>
                        <tr>
                            <td>Insufficient Client-Level Disclosure of Mixed Revenue</td>
                            <td>Clients receiving advisory AND being sold insurance through same advisor's IMF must understand the dual relationship and the commission earned. Suitability assessment must consider whether insurance recommendation is truly in client interest vs commission-motivated. Inadequate disclosure creates Code of Conduct risk.</td>
                            <td>Patron drafts disclosure templates aligned with Schedule I IMF Regulations 2015 Code of Conduct - transparent fee structure, commission disclosure, product mix, conflict-of-interest management. Templates issued to all clients at engagement onboarding.</td>
                        </tr>
                        <tr>
                            <td>MFD Revenue Not Segregated from Advisory in Books</td>
                            <td>MFDs adding IMF often run sloppy books with MF commission and insurance commission commingled. Tax audit (Section 44AB) becomes opaque; expense allocation between revenue heads cannot be defended; potential income tax notices on revenue head misclassification.</td>
                            <td>Patron sets up revenue head segregation in accounting from Day 1 - advisory fees, MF commission, insurance commission, TDS receivable by section. Books designed for segment reporting in ITR-6 and tax audit defence.</td>
                        </tr>
                        <tr>
                            <td>Mismatched Insurer Mix versus Client Profile</td>
                            <td>Advisor onboards general insurer tie-ups to maximise tie-up count but client profile is HNI family office. Insurer commission flow remains minimal; tie-up management overhead high relative to revenue contribution; opportunity cost on Life and Health focus.</td>
                            <td>Patron aligns insurer mix to client profile - typically 1-2 life + 1-2 health for HNI advisors. Term life for HNI protection, pension products for retirement planning, high-value family floater health, critical illness top-ups.</td>
                        </tr>
                        <tr>
                            <td>ISP Onboarding Before 25-Hour Training Completed</td>
                            <td>Junior advisors who lack 25-hour IRDAI training cannot be onboarded as ISPs. Some advisors attempt to onboard pre-training - non-compliant; ISP cannot solicit until certified; risks Code of Conduct breach.</td>
                            <td>Patron coordinates 25-hour training first, onboarding after certification. Training calendar aligned with IRDAI-approved institute schedules. Junior advisors with existing NISM background often pass quickly.</td>
                        </tr>
                        <tr>
                            <td>Two-Entity Setup Without Inter-Entity Service Agreement</td>
                            <td>Separate-entity model requires arm's length inter-entity agreements for shared services (office, staff, brand). Absence of formal agreements creates Section 188 RPT compliance risk, transfer pricing audit risk, and GST input credit denial risk.</td>
                            <td>Patron drafts inter-entity service agreement as part of Tier 3 - shared office cost allocation, staff time apportionment, brand usage rights, client referral terms. Arm's length pricing documented; Section 188 board approvals captured.</td>
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
            <h2 class="section-title">Patron Fees for Advisor-Track IMF Setup</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Free Advisor-Track Scoping Call</td>
                            <td>Free - 30-minute scoping call plus SEBI registration status check plus tier and entity structure recommendation memo; response within 4 hours</td>
                        </tr>
                        <tr>
                            <td>Patron Accounting Professional Fees (entry-level diagnostic add-on)</td>
                            <td>Starting from INR 2,999 (Exl GST and Govt. Charges) for initial advisor practice diagnostic; credit applied if Tier 1 / 2 / 3 engaged within 30 days</td>
                        </tr>
                        <tr>
                            <td>Tier 1 - Non-RIA Single-Entity Setup (one-time)</td>
                            <td>Rs 75,000 to Rs 90,000 (excl. GST and statutory pass-through fees) - MFDs, CFPs, family advisors NOT SEBI RIA registered; one Pvt Ltd or LLP with multi-activity MoA; 1-2 life + 1 health tie-up; mixed-revenue tax planning</td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Comprehensive Advisor-Track with ISPs (one-time)</td>
                            <td>Rs 90,000 to Rs 1,20,000 (excl. GST) - up to 3 ISPs (junior advisor transition), 4 insurer tie-ups (2 life + 2 health), entity structure design, customer migration playbook, FSE setup for pension and NPS cross-sell</td>
                        </tr>
                        <tr>
                            <td>Tier 3 - SEBI RIA Two-Entity Setup with Year 1 Retainer</td>
                            <td>Rs 1,20,000 to Rs 1,50,000 (excl. GST) - mandatory for SEBI RIAs under 2020 Amendment Regulation 22A; two-entity setup with cross-shareholding; inter-entity service agreement; up to 5 ISPs; full 2 life + 2 health + 1 general tie-up; Year 1 compliance retainer</td>
                        </tr>
                        <tr>
                            <td>Pvt Ltd Incorporation (one-time, per entity)</td>
                            <td>Rs 7,500 to Rs 12,000 - Companies Act 2013 Sections 3, 4, 7 compliance; SPICe+ filing; multi-activity MoA Object Clause; for Tier 3 two-entity setup, this is incurred once (RIA entity already exists)</td>
                        </tr>
                        <tr>
                            <td>LLP Incorporation (alternative one-time, per entity)</td>
                            <td>Rs 7,500 to Rs 12,000 - LLP Act 2008; designated partners; LLP Agreement covering multi-activity (if same-entity) or single-activity (if Tier 3 IMF entity)</td>
                        </tr>
                        <tr>
                            <td>PO 50-Hour IRDAI Training (Pass-Through)</td>
                            <td>Rs 7,500 to Rs 15,000 plus examination fees - paid directly to IRDAI-approved institute; advisor founder with CFP / NISM background typically passes first attempt</td>
                        </tr>
                        <tr>
                            <td>ISP 25-Hour Sectoral Training (Pass-Through, Per ISP)</td>
                            <td>Rs 3,500 to Rs 6,000 per ISP plus exam fees - sectoral training (Life or General or Health); Tier 1 (1-2 ISPs) / Tier 2 (up to 3 ISPs) / Tier 3 (up to 5 ISPs)</td>
                        </tr>
                        <tr>
                            <td>Inter-Entity Service Agreement Drafting (Tier 3 Only)</td>
                            <td>Included in Tier 3 - arm's length service agreement between RIA entity and IMF entity covering shared office, staff allocation, brand usage, client referral. Section 188 RPT compliance built in.</td>
                        </tr>
                        <tr>
                            <td>Statutory Pass-Through Fees (Government Charges)</td>
                            <td>Pass-through - IRDAI application fee Rs 5,000 (non-refundable), MCA name approval and incorporation fees Rs 1,500 to Rs 7,000, GST registration free, stamp duty on share certificates per state schedule</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IMF for Financial Advisors consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20a%20financial%20advisor%2C%20MFD%20or%20SEBI%20RIA%20and%20want%20Patron's%20advisor-track%20IMF%20setup%20-%20please%20share%20scoping%20call%20availability." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">120 to 150 Day Advisor-Track Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Phase 0 - Discovery</td>
                            <td>Days 1-10 - advisor practice review, SEBI registration status check, revenue mix analysis, client profile review, tier and entity structure selection, engagement letter</td>
                        </tr>
                        <tr>
                            <td>Phase 1A - Entity Formation</td>
                            <td>Days 10-35 - Pvt Ltd or LLP incorporation with multi-activity MoA, DIN / DSC, bank account, Rs 10 lakh capital infusion (two entities for Tier 3)</td>
                        </tr>
                        <tr>
                            <td>Phase 1B - PO Training (Parallel)</td>
                            <td>Days 1-50 - Principal Officer 50-hour training enrolment and certification examination at IRDAI-approved institute</td>
                        </tr>
                        <tr>
                            <td>Phase 2A - Tax Structure Design</td>
                            <td>Days 25-60 - mixed-revenue tax planning, books-of-account segregation methodology, GST input credit mapping, TDS handling across 194D / 194H / 194J</td>
                        </tr>
                        <tr>
                            <td>Phase 2B - Insurer Outreach</td>
                            <td>Days 40-80 - advisor-led insurer mix outreach - 1-2 life, 1-2 health, optional general; consent letters secured from 2-4 insurers</td>
                        </tr>
                        <tr>
                            <td>Phase 2C - ISP Onboarding</td>
                            <td>Days 35-70 - junior advisor identification, 25-hour training enrolment, sectoral certifications, KYC, Fit and Proper declarations</td>
                        </tr>
                        <tr>
                            <td>Phase 3 - IRDAI Application and Processing</td>
                            <td>Days 65-100 - all 25+ documents compiled, IRDAI portal application filed, clarification handling during portal review, ARN received</td>
                        </tr>
                        <tr>
                            <td>Phase 4 - Operations Launch</td>
                            <td>Days 100-130 - IRDAI Registration Certificate received, insurer tie-up agreements signed, ISP deployment, client communication with Code of Conduct disclosure templates</td>
                        </tr>
                        <tr>
                            <td>Phase 5 - Year 1 Compliance Retainer (Tier 3)</td>
                            <td>Day 130-365 / 130-500 - quarterly check-ins, half-yearly IRDAI returns, ROC trio, ITR-6, GST returns, ISP CPD tracking, inter-entity service agreement monitoring</td>
                        </tr>
                        <tr>
                            <td>Tier 3 Two-Entity Adjustment</td>
                            <td>+30 days for two-entity setup vs single entity - second incorporation, cross-shareholding documentation, inter-entity service agreement drafting, Section 188 RPT framework</td>
                        </tr>
                        <tr>
                            <td>Year 2+ Steady State</td>
                            <td>Revenue ramp accelerates - typical 15-30 percent first-year revenue addition compounds through renewal commission; client lifetime value impact over 5-10 years exceeds first-year metric materially</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Tier 3 Timeline Adjustment:</strong> Two-entity SEBI RIA setup adds approximately 30 days to the standard 120-day timeline (total 150 days). The additional time covers second-entity incorporation, cross-shareholding documentation, inter-entity service agreement drafting on arm's length terms, and Section 188 Related Party Transactions framework setup. The investment is worthwhile - it creates a durable, audit-defensible segregation between fee-only advisory and commission-based distribution that protects both the RIA registration and the IMF revenue stream. Engagement timing matters - SEBI RIA renewal cycle (5-year) is a natural trigger point; AUM milestones Rs 50-100 crore signal that structural revenue addition becomes meaningful.</p>

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
            <h2 class="section-title">Why Patron for Advisor-Track IMF</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="feature-title">SEBI RIA Segregation Expertise</h3>
                <p class="feature-description">Specialised understanding of SEBI IA Regulations 2020 Amendment Regulation 22A. Entity-level segregation design for SEBI RIAs with cross-shareholding, inter-entity service agreement drafting, and Section 188 Companies Act 2013 RPT framework. Distinct from generic IMF setup engagements.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 class="feature-title">Mixed-Revenue Tax Planning</h3>
                <p class="feature-description">Books-of-account segregation across advisory fees, MF commission, and insurance commission from Day 1. ITR-6 segment reporting design. TDS handling across Sections 194D (5 percent insurance), 194H (10 percent MF), 194J (10 percent professional). GST 18 percent across all three heads with input credit optimisation.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 class="feature-title">Two-Entity Setup Capability</h3>
                <p class="feature-description">Tier 3 covers comprehensive two-entity setup - cross-shareholding (typically common founders or family across both entities), inter-entity service agreement on arm's length terms, brand architecture decision, GST input credit optimisation across entities, transfer pricing audit defence.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="feature-title">Advisor-Led Insurer Mix Calibration</h3>
                <p class="feature-description">Insurer mix calibrated to HNI advisory client profile - 1-2 life (term, pension, ULIP de-emphasised), 1-2 health (high-value family floater, critical illness), optional general. Specific insurer relationships - HDFC Life, Max Life, ICICI Pru, Tata AIA, Bajaj Allianz Life; Niva Bupa, Care Health, Star Health, HDFC ERGO.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg>
                </div>
                <h3 class="feature-title">Year 1 Retainer Included (Tier 3)</h3>
                <p class="feature-description">Tier 3 includes Year 1 IMF compliance retainer - half-yearly IRDAI returns, ROC trio, DIR-3 KYC, DPT-3, ITR-6, GST returns, ISP CPD tracking. For two-entity setup, both entities' compliance handled with no overlap. Removes operational worry during the critical transition year.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="feature-title">15+ Years Across SEBI, IRDAI, MCA</h3>
                <p class="feature-description">Offices in Pune, Mumbai, Delhi, and Gurugram with pan-India remote engagement. Single firm CA + CS + SEBI compliance coordination. 15+ years experience across IRDAI, SEBI, MCA, RBI, CBDT, and GST regulators. CFP and NISM background partner referrals where applicable.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by SEBI RIAs, MFDs, CFPs and Family Office Advisors</h2>
            <div class="content-text">
                
                                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years in Practice</p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:24px;">
                    <div style="padding:20px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"We are a SEBI RIA practice with Rs 200 crore AUM and decided to add insurance distribution for our HNI clients who wanted bundled service. Patron designed the two-entity structure - existing RIA preserved, new IMF Pvt Ltd with same beneficial owners. Took 140 days end-to-end, Rs 1,35,000 Patron fee. Year 1 insurance commission Rs 32 lakh - exceeded our 15-30 percent revenue addition projection."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Co-founder, RIA + IMF practice in Mumbai (Tier 3)</p>
                    </div>
                    <div style="padding:20px;background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"As an MFD with Rs 50 crore AUM I wanted to add insurance but worried about complexity. Patron's Tier 1 same-entity setup was straightforward - Pvt Ltd with multi-activity MoA covering both MFD and IMF. Total Patron fee Rs 85,000, Year 1 insurance revenue Rs 18 lakh on top of my existing MF distribution income."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Founder, MFD + IMF practice in Pune (Tier 1)</p>
                    </div>
                </div>

                <p style="margin-top:24px;"><strong>Client Logos:</strong> Trusted by Hyundai, Asian Paints, Bridgestone and a roster of advisor-track clients - SEBI RIAs, MFDs, CFP charterholders, family office advisors, wealth managers, and HNI advisory firms across Tier 1 and select Tier 2 cities.</p>

                <p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves advisor clients across India - both in-person and remotely. Pan-India remote engagement particularly valuable for advisors operating across multiple cities or with HNI clients spread geographically.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Same Entity vs Separate Entity Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>Same Entity Model (Tier 1-2)</th><th>Separate Entity Model (Tier 3)</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Advisor Type Eligible</td>
                            <td>Non-RIA only (MFD, CFP, family advisor, wealth manager)</td>
                            <td>SEBI RIA mandatory under Regulation 22A; others optional</td>
                        </tr>
                        <tr>
                            <td>Number of Legal Entities</td>
                            <td>One Pvt Ltd or LLP with multi-activity MoA</td>
                            <td>Two entities - existing RIA + new IMF Pvt Ltd or LLP</td>
                        </tr>
                        <tr>
                            <td>Setup Cost (Patron Fee)</td>
                            <td>Rs 75,000-1,20,000 (Tier 1 / Tier 2)</td>
                            <td>Rs 1,20,000-1,50,000 (Tier 3 with Year 1 retainer)</td>
                        </tr>
                        <tr>
                            <td>Compliance Cost (Ongoing)</td>
                            <td>Single set - one audit, one ROC, one ITR, one GST</td>
                            <td>Two sets - duplicated audit, ROC, ITR, GST returns</td>
                        </tr>
                        <tr>
                            <td>Revenue Optimisation</td>
                            <td>Single P&amp;L; simpler tax planning; one books-of-account</td>
                            <td>Inter-entity transfer pricing considerations; Section 188 RPT compliance</td>
                        </tr>
                        <tr>
                            <td>Client Clarity</td>
                            <td>Single contracting party; one engagement letter</td>
                            <td>Two contracting parties; client must understand the dual relationship</td>
                        </tr>
                        <tr>
                            <td>Brand Architecture</td>
                            <td>Single firm brand across all activities</td>
                            <td>Master brand + sub-brand OR single brand both entities</td>
                        </tr>
                        <tr>
                            <td>Inter-Entity Agreements</td>
                            <td>Not required (single entity)</td>
                            <td>Service agreement on arm's length terms - shared office, staff, brand, referrals</td>
                        </tr>
                        <tr>
                            <td>Regulatory Compliance Risk</td>
                            <td>Low for non-RIA advisors; SEBI 22A violation if RIA misuse</td>
                            <td>Low - audit-defensible segregation by design</td>
                        </tr>
                        <tr>
                            <td>Future Equity Funding</td>
                            <td>Single fundraise possible; cleaner cap table</td>
                            <td>Two entities; PE may prefer holding structure with shared ownership</td>
                        </tr>
                        <tr>
                            <td>Succession Planning</td>
                            <td>Simpler; founder retains single entity</td>
                            <td>More complex; succession planning across two entities</td>
                        </tr>
                        <tr>
                            <td>Permitted For</td>
                            <td>Non-RIA advisors freely; RIAs ONLY with client-level segregation</td>
                            <td>All advisors; mandatory for RIAs preferring entity-level segregation</td>
                        </tr>
                        <tr>
                            <td>Best Suited For</td>
                            <td>MFDs adding insurance; CFP-led practices; family advisory without SEBI RIA</td>
                            <td>SEBI RIAs; advisors wanting brand separation; advisors with future SEBI RIA plans</td>
                        </tr>

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
            <h2 class="section-title">Related Patron IMF Cluster Services</h2>
            <div class="content-text">
                
                                <p>The advisor-track page is one of several persona-specific routes within Patron's IMF cluster. Related services help across the engagement lifecycle - from initial entity decision through ongoing annual compliance:</p>
                <ul>
                    <li>Parent service: <a href="/insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</a> - master hub covering all IMF cluster services.</li>
                    <li><a href="/imf-incorporation-services">IMF Incorporation Services</a> - combined MCA plus IRDAI engagement detail.</li>
                    <li><a href="/imf-irdai-registration-process">IRDAI IMF Registration Process</a> - standalone IRDAI registration if entity exists.</li>
                    <li><a href="/ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</a> - Principal Officer training and ISP coordination.</li>
                    <li><a href="/imf-compliance-retainer-services">IMF Compliance Retainer Services</a> - ongoing annual compliance after setup (Year 1 included in Tier 3).</li>
                    <li><a href="/imf-for-insurance-agents">IMF for Insurance Agents</a> - agent-persona graduation page.</li>
                    <li><a href="/imf-for-bank-employees-retirees">IMF for Bank Employees and Retirees</a> - bank-retiree persona page.</li>
                    <li><a href="/imf-private-limited-vs-llp">IMF Private Limited vs LLP</a> - entity selection guide.</li>
                    <li><a href="/income-tax-return-filing">Income Tax Return Filing</a> - ITR-6 filing for mixed-revenue advisor entities.</li>
                </ul>
                <p style="margin-top:16px;">Verify your eligibility through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a> and the <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI Insurance Marketing Firm portal</a>. SEBI advisor framework at the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">Securities and Exchange Board of India</a>. For company-level filings, the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a> portal. Income tax e-filing at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework (India)</h2>
            <div class="content-text">
                
                                <p><strong>Governing Statutes and Regulations:</strong> SEBI (Investment Advisers) Regulations 2013, SEBI (Investment Advisers) Amendment Regulations 2020, SEBI (Mutual Funds) Regulations 1996, Insurance Act 1938, IRDAI (Registration of Insurance Marketing Firm) Regulations 2015, Companies Act 2013, LLP Act 2008, Income Tax Act 1961, and GST Act 2017.</p>
                <ul>
                    <li><strong>SEBI (Investment Advisers) Regulations 2013:</strong> Master regulation for SEBI RIAs - notified 21 January 2013. Eligibility, registration, fiduciary duty, suitability assessment, written agreement framework.</li>
                    <li><strong>SEBI (Investment Advisers) (Amendment) Regulations 2020:</strong> Effective 3 July 2020. Strict segregation between advisory and distribution activities.</li>
                    <li><strong>Regulation 4 SEBI IA Regulations 2013:</strong> Eligibility - Non-Individual corporate entity net worth Rs 50 lakh; Individual net worth Rs 5 lakh; NISM Investment Adviser certification required.</li>
                    <li><strong>Regulation 22 SEBI IA Regulations 2013:</strong> Segregation between advisory and distribution activities.</li>
                    <li><strong>Regulation 22A SEBI IA Regulations 2020 Amendment:</strong> Client-level OR entity-level segregation - the central regulation governing same vs separate entity decision for RIAs.</li>
                    <li><strong>SEBI (Mutual Funds) Regulations 1996:</strong> AMFI Registration Number (ARN) framework for distributors.</li>
                    <li><strong>SEBI Circular on Investment Adviser obligations:</strong> Fiduciary duty, suitability assessment, written agreement.</li>
                    <li><strong>Insurance Act 1938 Section 42D:</strong> Intermediary registration framework.</li>
                    <li><strong>IRDAI (Registration of Insurance Marketing Firm) Regulations 2015:</strong> Master regulation for IMF.</li>
                    <li><strong>Regulation 2.2 IMF Regulations 2015:</strong> Eligible entity types - Company, LLP, Cooperative Society.</li>
                    <li><strong>Regulation 3 IMF Regulations 2015:</strong> Permitted activities; 2L + 2G + 2H open architecture distribution.</li>
                    <li><strong>Regulation 4 IMF Regulations 2015:</strong> Principal Officer requirements.</li>
                    <li><strong>Regulation 6 IMF Regulations 2015:</strong> Net worth Rs 10 lakh general or Rs 5 lakh single-district.</li>
                    <li><strong>Section 28 Income Tax Act 1961:</strong> Profits and gains of business or profession - all advisor revenue heads.</li>
                    <li><strong>Section 44AB Income Tax Act 1961:</strong> Tax audit threshold Rs 1 crore aggregate turnover (Rs 10 crore digital).</li>
                    <li><strong>Section 44AD Income Tax Act 1961:</strong> Presumptive taxation - not applicable for commission / brokerage income.</li>
                    <li><strong>Section 194D Income Tax Act 1961:</strong> TDS 5 percent on insurance commission.</li>
                    <li><strong>Section 194H Income Tax Act 1961:</strong> TDS 10 percent on general / MF commission.</li>
                    <li><strong>Section 194J Income Tax Act 1961:</strong> TDS 10 percent on professional / advisory fees.</li>
                    <li><strong>Section 188 Companies Act 2013:</strong> Related Party Transactions - critical for two-entity inter-entity transactions.</li>
                    <li><strong>Companies Act 2013 Sections 3, 4, 7:</strong> Pvt Ltd formation - SPICe+ incorporation.</li>
                    <li><strong>LLP Act 2008:</strong> LLP route for partnership-led practices.</li>
                    <li><strong>GST Act 2017:</strong> Registration threshold Rs 20 lakh aggregate turnover; 18 percent on advisory + MF + insurance commission.</li>
                </ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on SEBI registration status, number of entities required, ISP team size, insurer tie-up count, and complexity of the inter-entity service agreement.</p>

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
                    <p class="faq-expanded__lead">Answers to the most common questions from SEBI RIAs, MFDs, CFP charterholders, family office advisors, and wealth managers evaluating IMF addition to their practice.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can a financial advisor become an IMF in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Independent financial advisors - including Mutual Fund Distributors (MFDs), Certified Financial Planners (CFPs), family office advisors, and wealth managers - can add IMF activity to their practice. The structural decision is whether to operate the IMF in the same entity (permitted for non-RIA advisors) or in a separate entity (mandatory for SEBI Registered Investment Advisors under 2020 Amendment Regulation 22A). Patron's advisor-track package Rs 75,000 to Rs 1,50,000 across 3 tiers covers entity structure design, mixed-revenue tax planning, IMF setup, and Year 1 retainer (Tier 3).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can a SEBI RIA also operate as an IMF?</h3>
                        <div class="faq-expanded__a"><p>Yes, but not in the same entity under SEBI IA Regulations 2020 Amendment Regulation 22A. SEBI mandates segregation between advisory (fee-only) and distribution (commission-based) activities. Two segregation paths - (a) client-level: some clients on fee-only basis, others on commission basis with explicit choice; (b) entity-level: separate corporate entities. Most Patron RIA clients choose entity-level separation through Tier 3 advisor-track engagement Rs 1,20,000 to Rs 1,50,000 with two-entity setup, inter-entity service agreements, and Year 1 retainer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the income lift for advisors adding IMF?</h3>
                        <div class="faq-expanded__a"><p>Typical revenue addition is 15-30 percent over 12-24 months. Lower than agent-graduation (30-60 percent) because advisor revenue baseline is higher and more diversified - existing advisory fees plus MF commission already provide a solid base. Insurance adds proportionally less but improves client lifetime value and retention significantly. The lift accelerates if the advisor has a substantial HNI book where high-ticket term insurance and protection products are needed. Cumulative LTV impact over 5-10 years exceeds the first-year metric.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How do RIAs handle insurance distribution under SEBI rules?</h3>
                        <div class="faq-expanded__a"><p>SEBI RIAs cannot earn insurance commission in the same entity as advisory under 2020 Amendment Regulation 22A. Two compliance paths - (a) separate IMF entity with same beneficial owners; the RIA client is referred to the IMF entity for insurance with explicit disclosure; commission earned by the IMF entity, advisory fee earned by the RIA entity; (b) client-level segregation. Patron typically recommends entity-level segregation for clarity, audit trail, and operational simplicity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between RIA and IMF?</h3>
                        <div class="faq-expanded__a"><p>RIA (Registered Investment Advisor under SEBI IA Regulations 2013) provides investment advisory on a fee-only basis with fiduciary duty; cannot earn commission from advised products under the 2020 Amendment. Net worth requirement Rs 50 lakh (Non-Individual) or Rs 5 lakh (Individual). IMF (Insurance Marketing Firm under IRDAI IMF Regulations 2015) is an insurance distribution intermediary earning commission from insurers; net worth Rs 10 lakh or Rs 5 lakh single-district. RIAs are fee-based fiduciaries; IMFs are commission-based distributors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Should a financial advisor add IMF in the same entity?</h3>
                        <div class="faq-expanded__a"><p>The decision depends on SEBI registration status. (a) SEBI RIA - MUST use a separate entity under 2020 Amendment Regulation 22A; same-entity model violates the segregation requirement. (b) Non-RIA (MFD, CFP, family advisor) - CAN use the same entity; a multi-activity MoA covering both MFD and IMF objects; single set of audit, ROC, ITR, GST returns. (c) For advisors planning future SEBI RIA registration, the separate-entity model is forward-compatible.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the tax implications of advisor IMF activity?</h3>
                        <div class="faq-expanded__a"><p>Mixed-revenue tax considerations - (a) Income Tax - all revenue heads (advisory, MF, insurance) reported in ITR-6 under Section 28; separate books for each stream; tax audit triggered at Rs 1 crore aggregate turnover under Section 44AB. (b) GST - 18 percent rate on all three revenue heads; aggregate turnover threshold Rs 20 lakh. (c) TDS - 5 percent on insurance commission (Section 194D); 10 percent on MF commission (Section 194H); 10 percent on professional fees (Section 194J). Two-entity model requires Section 188 RPT compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does advisor IMF setup take?</h3>
                        <div class="faq-expanded__a"><p>Standard 120 days for Tier 1-2 single-entity setup; 150 days for Tier 3 two-entity SEBI RIA setup. Phase 0 Discovery (Days 1-10) - SEBI registration check, revenue mix analysis, entity structure decision. Phase 1 Entity Formation (Days 10-35) with PO Training in parallel (Days 1-50). Phase 2 Tax Structure plus Insurer Outreach plus ISP Onboarding (Days 25-80). Phase 3 IRDAI Application and Processing (Days 65-100). Phase 4 Operations Launch (Days 100-130). Phase 5 Year 1 Retainer for Tier 3 (Day 130 onward).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                                <ul style="margin-top:12px;">
                    <li><strong>Can an Individual RIA become an IMF founder?</strong> Yes through a separate IMF entity (Pvt Ltd or LLP) with the founder as PO. Individual RIA registration retained separately.</li>
                    <li><strong>Does an MFD lose ARN if becoming an IMF?</strong> No. ARN remains valid; IMF is added as an additional revenue stream alongside MFD activity.</li>
                    <li><strong>Can a CFP charterholder operate an IMF?</strong> Yes. CFP is a professional designation, not a regulatory framework; CFPs can operate an IMF entity through Pvt Ltd or LLP route.</li>
                    <li><strong>How does fee disclosure work for mixed-revenue clients?</strong> Code of Conduct requires transparent disclosure of fee structure plus commission earned plus product mix; templates drafted by Patron.</li>
                    <li><strong>Can two-entity model use the same office?</strong> Yes with a shared service agreement; cost allocation methodology; arm's length terms documented for audit.</li>
                    <li><strong>Is two-entity model future-equity friendly?</strong> More complex than single entity; PE may prefer a holding structure with shared beneficial ownership.</li>
                    <li><strong>Can an advisor onboard a junior advisor as ISP without 25-hour training?</strong> No. All ISPs need IRDAI sectoral training and certification regardless of prior advisory experience.</li>
                    <li><strong>Financial advisor ke liye IMF setup kaise hota hai?</strong> Pehla decision entity structure ka - SEBI RIA ho to separate entity zaroori (2020 Amendment 22A); MFD ya CFP ya family advisor ho to same entity mein dono activities chal sakte hain. Patron ke 3 tiers - Tier 1 Rs 75,000-90,000 (non-RIA same entity); Tier 2 Rs 90,000-1,20,000 (with ISPs); Tier 3 Rs 1,20,000-1,50,000 (RIA two-entity). Call +91 945 945 6700.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engage Around SEBI Renewal or AUM Milestone Triggers</h2>
            <div class="content-text">
                
                                <p><strong>Trigger Events for Advisor-Track Engagement:</strong> Patron's advisor-track engagement is most effective when timed to one of several natural triggers - (a) SEBI RIA registration renewal cycle (5-year) - good evaluation point for IMF entity structure decision; (b) AUM milestone (Rs 50-100 crore) - structural revenue addition becomes meaningful; (c) Client demand signals for bundled service - retention risk if not addressed; (d) Competitor advisors adding IMF first - HNI client segment competitive positioning concern.</p>
                <p><strong>Cost of Continuing the Status Quo:</strong> Single-product relationships face client churn risk; missing renewal commission accrual on long-tenor insurance products represents foregone customer lifetime value. A 12-month delay in IMF addition typically represents Rs 5-15 lakh foregone Year 1 commission for a mid-size advisor practice.</p>
                <p><strong>SEBI Compliance Imperative for RIAs:</strong> If you are SEBI RIA and currently distributing insurance through workarounds (e.g. agent licence held personally; family member acting as agent), the 2020 Amendment Regulation 22A surveillance has intensified. Formalising the structure through a separate IMF entity is the only durable, audit-defensible path forward.</p>
                <p><strong>Action:</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a> for a free 30-minute Advisor-Track Scoping Call. Tier 1 from Rs 75,000; Tier 2 from Rs 90,000; Tier 3 from Rs 1,20,000 with Year 1 retainer.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Advisor-Track IMF Team Today</h2>
            <div class="content-text" style="text-align:left;">
                
                                <p style="color:rgba(255,255,255,0.92);">Adding Insurance Marketing Firm activity to a financial advisor practice is a strategic revenue diversification and client retention move for SEBI RIAs, MFDs, CFP charterholders, family office advisors, and wealth managers. The critical structural decision is entity architecture - same entity for non-RIA advisors versus separate segregated entities for SEBI RIAs under SEBI IA Regulations 2020 Amendment Regulation 22A.</p>
                <p style="color:rgba(255,255,255,0.92);">Mixed-revenue tax planning across advisory fees, mutual fund commission, and insurance commission requires segregated books, ITR-6 reporting under Section 28, and TDS handling across Sections 194D (5 percent on insurance), 194H (10 percent on MF), and 194J (10 percent on professional fees). Insurer mix preferences for advisor-led IMFs skew toward 1-2 life and 1-2 health tie-ups. Typical revenue addition is 15-30 percent over 12-24 months; client lifetime value impact over 5-10 years exceeds the first-year metric materially through renewal commission.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron's advisor-track package Rs 75,000 to Rs 1,50,000 across 3 tiers reflects the higher sophistication needed - entity structure design, mixed-revenue tax planning, two-entity inter-entity agreements (Tier 3), insurer outreach calibrated to advisor mix, ISP onboarding, and Year 1 retainer (Tier 3). The firm serves advisor clients across Pune, Mumbai, Delhi, and Gurugram with pan-India remote engagement.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20a%20financial%20advisor%2C%20MFD%20or%20SEBI%20RIA%20and%20want%20Patron's%20advisor-track%20IMF%20setup%20-%20please%20share%20scoping%20call%20availability." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20for%20Financial%20Advisors%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20IMF%20setup%20for%20financial%20advisors%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron IMF Cluster Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">The advisor-track page is one of several persona-specific routes within Patron's IMF cluster. Sister pages cover entity setup, IRDAI registration, ongoing compliance, and other persona verticals.</p>
        
                        <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Patron IMF Cluster Services</div>
                <div class="pa-block-sub">End-to-end support across the IMF engagement lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="/insurance-marketing-firm-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">IMF Registration Hub</div><div class="pa-card-sub">Parent service</div></div></a>
                    <a href="/imf-incorporation-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">IMF Incorporation</div><div class="pa-card-sub">Combined setup</div></div></a>
                    <a href="/imf-irdai-registration-process" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="pa-card-title">IRDAI Registration</div><div class="pa-card-sub">Standalone process</div></div></a>
                    <a href="/ismp-certification-isp-appointment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg></div><div><div class="pa-card-title">ISMP and ISP</div><div class="pa-card-sub">PO + ISP coordination</div></div></a>
                    <a href="/imf-compliance-retainer-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Compliance Retainer</div><div class="pa-card-sub">Annual ongoing</div></div></a>
                    <a href="/imf-for-insurance-agents" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="pa-card-title">Insurance Agents</div><div class="pa-card-sub">Agent graduation</div></div></a>
                    <a href="/imf-for-bank-employees-retirees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Bank Retirees</div><div class="pa-card-sub">Post-retirement</div></div></a>
                    <a href="/imf-private-limited-vs-llp" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11H3v10h6V11zM21 3h-6v18h6V3zM15 7H9v14h6V7z"/></svg></div><div><div class="pa-card-title">Pvt Ltd vs LLP</div><div class="pa-card-sub">Entity decision</div></div></a>
                </div>
            </div>

            <div class="pa-city-block">
                <div class="pa-block-title">Patron Offices Serving Financial Advisors</div>
                <div class="pa-block-sub">4-office network with pan-India remote engagement for advisor clients across HNI segments</div>
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

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 2 - 3 months) and immediately on SEBI IA Regulation updates, AMFI commission norm changes, IRDAI insurer mix preferences, tax law amendments, and SEBI 2020 Amendment Regulation 22A surveillance interpretations affecting advisor-IMF entity structure.</p>
        </div>
    </div>
</section>


</main>








<!-- Google Maps Places Library (for GMB reviews) -->




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