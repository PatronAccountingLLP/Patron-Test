
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
    <title>IMF for Insurance Agents: Agent to Firm</title>
    <meta name="description" content="Graduate from LIC or private insurer agent to IMF - multi-insurer model, 30-60 percent income lift, succession planning. From Rs 50,000.">
    <link rel="canonical" href="/imf-for-insurance-agents">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IMF for Insurance Agents 2026: Agent to Firm | Patron">
    <meta property="og:description" content="Graduate from LIC or private insurer agent to IMF - multi-insurer model, 30-60 percent income lift, succession planning. From Rs 50,000.">
    <meta property="og:url" content="/imf-for-insurance-agents">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/imf-for-insurance-agents-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IMF for Insurance Agents 2026: Agent to Firm | Patron">
    <meta name="twitter:description" content="Graduate from LIC or private insurer agent to IMF - multi-insurer model, 30-60 percent income lift, succession planning. From Rs 50,000.">
    <meta name="twitter:image" content="/images/imf-for-insurance-agents-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/imf-for-insurance-agents/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Insurance Marketing Firm Registration", "item": "/insurance-marketing-firm-registration" },
        { "@type": "ListItem", "position": 3, "name": "IMF for Insurance Agents", "item": "/imf-for-insurance-agents" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/imf-for-insurance-agents/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can an insurance agent become an IMF in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Individual insurance agents - LIC agents, private life insurance agents (HDFC Life, ICICI Prudential, SBI Life, Bajaj Allianz, Max Life), general insurance agents, and health insurance agents - can graduate to Insurance Marketing Firm. The agent must form a Pvt Ltd or LLP entity since individual cannot be IMF under Regulation 2.2 IMF Regulations 2015, then complete Principal Officer 50-hour training, surrender the individual agent licence (conflict of interest under Regulation 4), and complete IRDAI IMF registration. Patron's agent graduation package Rs 50,000 to Rs 1,00,000 covers the full 120-day transition."
          }
        },
        {
          "@type": "Question",
          "name": "What are the requirements to upgrade from agent to IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Requirements - (1) Form Pvt Ltd or LLP entity (individual cannot be IMF); (2) Rs 10 lakh paid-up capital (Rs 5 lakh single-district); (3) Principal Officer with 50-hour IRDAI training and certification; (4) Schedule II Fit and Proper compliance for promoters and PO; (5) At least one insurer consent letter; (6) Office infrastructure; (7) 3-year business plan; (8) Surrender of existing individual agent licence before PO appointment. Patron coordinates all requirements end-to-end through the 3-tier graduation package Rs 50,000 to Rs 1,00,000."
          }
        },
        {
          "@type": "Question",
          "name": "What is the income difference between agent and IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Individual agent income is constrained by one-insurer-per-line restriction and personal selling capacity - typical senior agent Rs 15-25 lakh per year. IMF founder income depends on (a) multi-insurer scale (open architecture 2L + 2G + 2H); (b) Insurance Sales Person team scaling; (c) Financial Service Executive distribution of mutual funds, NPS, banking. Typical income lift 30-60 percent over 2-3 years - a Rs 22 lakh agent often reaches Rs 32-40 lakh as Year 2-3 IMF founder. Year 1 may dip 10-20 percent due to setup costs and transition friction."
          }
        },
        {
          "@type": "Question",
          "name": "Can I keep my LIC agent licence after becoming IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. An individual cannot simultaneously hold (a) Individual Insurance Agent appointment under Section 42 Insurance Act 1938 and (b) Principal Officer appointment under Regulation 4 IMF Regulations 2015 - this is the conflict-of-interest framework. You must surrender your individual agent licence before assuming Principal Officer role of your IMF. Some agents structure a 30-day overlap with Authority knowledge for transition. Existing policies you sold as agent continue to receive renewal commission through original arrangement until maturity or transfer."
          }
        },
        {
          "@type": "Question",
          "name": "Will I lose my existing clients if I graduate to IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, with proper migration. Existing policies remain serviceable through original insurer; renewal commission continues per existing arrangement. Customer relationships transfer naturally - same person now operating under corporate IMF brand. Patron's customer migration playbook covers personalised communication to top 20-30 percent customers explaining the upgrade, service continuity during transition, new business routing through IMF post-registration, and ongoing customer relationship development. Many Patron clients have improved customer retention post-graduation as the IMF brand signals professional growth."
          }
        },
        {
          "@type": "Question",
          "name": "How long does agent to IMF conversion take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's agent graduation engagement is a 120-day end-to-end project. Critical paths run in parallel - Pvt Ltd incorporation Days 1-30, PO 50-hour training Days 1-50, ISP onboarding Days 30-65, insurer outreach Days 50-80, IRDAI application Days 80-85, processing Days 85-120. Agent licence surrender coordinated at Days 85-95. Customer communication Days 85-120. Total 120 days to IMF Registration Certificate receipt. Tighter timeline (90-100 days) possible if PO already trained. Complex cases extend to 150 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of agent graduation to IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's 3-tier fixed-fee structure - Tier 1 Solo Agent (Rs 50,000 to Rs 65,000) includes Pvt Ltd plus IRDAI plus PO plus 1 tie-up plus customer templates plus licence surrender coordination; Tier 2 Agent with Junior Team (Rs 65,000 to Rs 85,000) above plus up to 3 ISPs plus multi-sectoral tie-ups plus migration playbook; Tier 3 Comprehensive (Rs 85,000 to Rs 1,00,000) above plus 5 ISPs plus full 2L + 2G + 2H plus FSE setup plus Year 1 compliance retainer included. Statutory pass-through fees additional Rs 30,000 to Rs 50,000."
          }
        },
        {
          "@type": "Question",
          "name": "Can I onboard my agent team as ISPs in IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Junior agents in your network can transition to become Insurance Sales Persons under your IMF. Process per ISP - (1) Verify eligibility (Class 12 pass minimum, Fit and Proper, Indian resident, 18+); (2) Surrender existing individual agent licence; (3) Complete 25-hour sectoral training; (4) Pass IRDAI sectoral certification examination; (5) Receive Fit and Proper certification by you as Principal Officer; (6) Sign Code of Conduct Undertaking; (7) Onboarded in IMF internal register; (8) Insurer-specific code generation. Patron coordinates as part of graduation package."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/imf-for-insurance-agents/#service",
      "name": "IMF for Insurance Agents - Agent Graduation Package",
      "description": "Specialised graduation engagement for individual insurance agents - LIC agents (13L plus universe in India), private life insurance agents (HDFC Life, ICICI Prudential, SBI Life, Bajaj Allianz, Max Life), general insurance agents (HDFC ERGO, ICICI Lombard, Tata AIG, Reliance General), and health insurance agents (Star Health, Care Health, Niva Bupa) - moving from tied-agent model to Insurance Marketing Firm under IRDAI IMF Regulations 2015. Coverage includes Pvt Ltd or LLP incorporation with IMF-tailored MoA Object Clause aligned with Regulation 3 IMF Regulations 2015, Rs 10 lakh paid-up capital infusion (or Rs 5 lakh single-district under Regulation 6), Principal Officer 50-hour training and IRDAI certification, IRDAI IMF registration filing, multi-insurer outreach calibrated to open architecture (up to 2 life + 2 general + 2 health tie-ups under Regulation 3), Insurance Sales Person onboarding of existing junior agents (25-hour sectoral training under Regulation 12), individual agent licence surrender coordination to navigate Section 42 Insurance Act 1938 conflict-of-interest with Regulation 4 IMF Regulations 2015 PO role, customer base migration playbook, and Tier 3 Year 1 compliance retainer covering half-yearly IRDAI returns, ROC, statutory audit, ITR-6, and GST.",
      "serviceType": "Insurance Agent to IMF Graduation Package with Multi-Insurer Open Architecture Setup",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Insurance Regulatory and Development Authority of India", "sameAs": "https://en.wikipedia.org/wiki/Insurance_Regulatory_and_Development_Authority" },
        { "@type": "Thing", "name": "Life Insurance Corporation of India", "sameAs": "https://en.wikipedia.org/wiki/Life_Insurance_Corporation" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Agent Graduation Engagement Tiers",
        "itemListElement": [
          { "@type": "Offer", "name": "Tier 1 - Solo Agent Graduation (single-district or 2-3 district, no ISP team)", "price": "50000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-insurance-agents" },
          { "@type": "Offer", "name": "Tier 2 - Agent with Junior Team Graduation (up to 3 ISPs, multi-district)", "price": "65000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-insurance-agents" },
          { "@type": "Offer", "name": "Tier 3 - Comprehensive Graduation with Year 1 Compliance Retainer (5 ISPs, full 2L + 2G + 2H tie-ups)", "price": "85000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-insurance-agents" }
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
                        IMF for Insurance Agents
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>From Tied to Open Architecture:</span> Move from 1 insurer per line (tied agent under Section 42 Insurance Act 1938) to up to 2 life + 2 general + 2 health insurer tie-ups under IMF Regulation 3 - 6x the product offering.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Income Lift 30-60 Percent:</span> Typical agent revenue lift 30-60 percent over 2-3 years through multi-insurer scale plus Insurance Sales Person team plus Financial Service Executive distribution of mutual funds, NPS, and banking products.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Succession Planning Built In:</span> Individual agent licence is non-transferable and lapses on retirement or death. IMF Pvt Ltd or LLP is a transferable corporate asset - shares can be transferred, inherited, gifted, or sold.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Graduation Package:</span> Rs 50,000 to Rs 1,00,000 fixed-fee across 3 tiers; 120-day end-to-end transition including agent licence surrender coordination, Pvt Ltd setup, IRDAI IMF registration, ISP onboarding, and Tier 3 Year 1 retainer.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20for%20Insurance%20Agents&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20agent-to-IMF%20graduation%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20an%20LIC%20or%20private%20insurer%20agent%20and%20want%20Patron's%20IMF%20graduation%20package." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - IMF for Insurance Agents'/>
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
                                                                <option value="imf-for-insurance-agents" selected>IMF for Insurance Agents</option>
                                <option value="insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</option>
                                <option value="imf-incorporation-services">IMF Incorporation Services</option>
                                <option value="imf-irdai-registration-process">IRDAI IMF Registration Process</option>
                                <option value="ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</option>
                                <option value="imf-compliance-retainer-services">IMF Compliance Retainer</option>
                                <option value="imf-for-financial-advisors">IMF for Financial Advisors</option>
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
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">Agent Types Served</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">Graduation Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">Graduation Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Common Mistakes</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">Fees and Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">120-Day Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Why Patron</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth',block:'start'});">Agent vs IMF</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>















<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - Agent Graduation to IMF</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IMF for Insurance Agents Services at a Glance</strong></p>
                    <p>India has over 13 lakh LIC agents and several lakh private insurer agents who form the largest aspirational IMF founder pool. Graduation from individual agent to IMF unlocks four structural advantages - (1) Open architecture multi-insurer selling (2 life + 2 general + 2 health) versus the 1-insurer-per-line tied model; (2) Income lift 30-60 percent over 2-3 years through multi-insurer scale plus Insurance Sales Person team plus Financial Service Executive distribution of mutual funds, NPS, and banking products; (3) Succession planning - the IMF entity is a transferable corporate asset; an individual agent licence is non-transferable; (4) Structured branded firm positioning versus personal agent identity. Patron's 3-tier agent graduation package Rs 50,000 to Rs 1,00,000 covers the full 120-day transition. The agent must surrender individual agent licence before assuming Principal Officer role; existing book of business continues to receive renewal commissions through original arrangement.</p>
                </div>
                <p>The individual insurance agent model in India has structural ceilings - one insurer per line (life, general, health) under tied-agent appointment, geographic limitations defined by insurer territory, non-transferable personal licence that lapses on retirement, and product mix constrained to the tied insurer's portfolio. Senior agents who have built substantial books of business often discover their growth has plateaued precisely because of these structural ceilings. The Insurance Marketing Firm model addresses each ceiling - open architecture permits up to 6 insurer relationships (2 life + 2 general + 2 health) under Regulation 3 IMF Regulations 2015, area-of-operation can be expanded to multi-district or multi-state, the corporate entity is transferable and inheritable, and product range expands to mutual funds, NPS, and banking products through Financial Service Executives.</p>
                <p>Patron's agent graduation package consolidates the entire transition - Pvt Ltd or LLP incorporation with IMF-aligned MoA, Rs 10 lakh paid-up capital infusion, Principal Officer 50-hour certification, IRDAI IMF registration, insurer outreach for tie-ups, existing client base migration, Insurance Sales Person onboarding of existing junior agents, and Tier 3 Year 1 compliance retainer. The 120-day fixed-fee engagement Rs 50,000 to Rs 1,00,000 (3 tiers) is the largest-volume entry point in the Patron IMF cluster. Verify framework through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India</a>; LIC agent specifics at <a href="https://licindia.in" target="_blank" rel="noopener">Life Insurance Corporation of India</a>; entity formation at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>; tax planning at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>.</p>
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
                <h2 class="section-title">4 Structural Drivers for Agent Graduation to IMF</h2>
                <div class="content-text what-is-definition">
                    
                                        <p>Four structural drivers push successful insurance agents toward IMF graduation. Each addresses a ceiling in the individual agent model that cannot be solved by working harder within the tied-agent framework. Together they make the agent graduation page the largest-volume route within the Patron IMF cluster.</p>
                    <p><strong>Driver 1 - Multi-Insurer Open Architecture:</strong> Individual agents are tied to one insurer per line under Section 42 Insurance Act 1938 plus IRDAI Agents Regulations 2016. An LIC agent cannot also represent HDFC Life; a Bajaj Allianz General agent cannot also represent ICICI Lombard. This restricts the agent to selling whatever the tied insurer offers - often forcing customer compromise where another insurer's product would have been a better fit. IMF open architecture under Regulation 3 IMF Regulations 2015 permits up to 2 life + 2 general + 2 health insurer tie-ups, enabling competitive product offering and reducing customer-friction lost sales.</p>
                    <p><strong>Driver 2 - Income Scale Through Team and Product Mix:</strong> Individual agent income is constrained by personal selling capacity - typically 10-50 policies per month at best. IMF model unlocks team scaling through Insurance Sales Persons - each ISP adds independent selling capacity. A 10-ISP IMF can generate 5-20x the policy volume of a sole agent. Additionally, Financial Service Executives can distribute mutual funds, NPS pension products, and banking products - new revenue streams unavailable to individual agents. Income lift is typically 30-60 percent over 2-3 years when full IMF model is leveraged.</p>
                    <p><strong>Driver 3 - Succession Planning and Asset Value:</strong> An individual agent licence is personal and non-transferable. When the agent retires or passes away, the licence lapses; the book of business may receive ongoing renewal commission for some years but cannot be sold, gifted, or inherited as a going concern. An IMF Pvt Ltd or LLP entity is a corporate asset - shares can be transferred, inherited, gifted, sold to private equity, or used as collateral. The IMF entity has perpetual existence (Section 9 Companies Act 2013) independent of any individual founder. Agents in their 40s-60s increasingly choose IMF for succession planning reasons alone.</p>
                    <p><strong>Driver 4 - Structured Business Positioning:</strong> Agent identity is personal - 'I am Mr X, agent for XYZ insurer'. Customer relationship is bilateral between customer and agent. IMF entity creates corporate brand - 'XYZ Insurance Marketing Firm' - with customer relationship triangulated to entity + brand + servicing infrastructure. Trust signals shift from personal credibility to institutional credibility. Many high-end customers (HNIs, business owners, corporate buyers) prefer dealing with a registered firm versus an individual agent. IMF positioning unlocks customer segments unreachable for individual agents.</p>
                    <p><strong>The Licence Surrender Imperative:</strong> A central regulatory feature of agent graduation is the requirement to surrender the individual agent licence before assuming the Principal Officer role of the IMF. An individual cannot simultaneously hold (a) Individual Insurance Agent appointment under Section 42 Insurance Act 1938 and (b) Principal Officer appointment under Regulation 4 IMF Regulations 2015 - this is the conflict-of-interest framework. Existing policies sold as agent continue to receive renewal commission through original arrangement; only NEW business flows through IMF.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IMF for Insurance Agents:</strong></p>
                                        <ul style="margin-top:12px;">
                        <li><strong>Individual Insurance Agent (Section 42):</strong> Agent appointed by insurer under Section 42 Insurance Act 1938 read with IRDAI (Appointment of Insurance Agents) Regulations 2016. Tied to one life + one general + one health insurer; cannot represent competing insurers. Licence valid 3 years; renewable subject to performance and CPD hours.</li>
                        <li><strong>Insurance Marketing Firm (IMF):</strong> Insurance distribution intermediary under IRDAI IMF Regulations 2015 operating as Pvt Ltd, LLP, or Cooperative Society. Commission-based; earns from insurers. Net worth Rs 10 lakh general or Rs 5 lakh single-district. Maximum 2L + 2G + 2H insurer tie-ups (open architecture).</li>
                        <li><strong>Open Architecture (2L + 2G + 2H):</strong> Under Regulation 3 IMF Regulations 2015, an IMF can tie up with up to 2 life + 2 general + 2 health insurers (total 6 relationships). This is the core differentiator from tied-agent model. Customer benefits from competitive product offering across insurers.</li>
                        <li><strong>Principal Officer (PO):</strong> Designated officer responsible for IMF compliance under Regulation 4 IMF Regulations 2015. Requires 50-hour IRDAI training plus certification examination. Cannot simultaneously hold individual agent licence under Section 42.</li>
                        <li><strong>Insurance Sales Person (ISP):</strong> Sales staff appointed by IMF under Regulation 12 IMF Regulations 2015. Each ISP requires 25-hour sectoral training (Life or General or Health) and IRDAI certification. Junior agents in the founder's network typically transition to ISPs.</li>
                        <li><strong>Financial Service Executive (FSE):</strong> Staff distributing mutual funds, NPS, and banking products under separate AMFI / PFRDA / banking regulator frameworks - additional revenue streams unavailable to individual agents. Typically introduced in Tier 3 or Year 2 onward.</li>
                        <li><strong>Agent Licence Surrender:</strong> Mandatory step before assuming IMF Principal Officer role - resolves Section 42 versus Regulation 4 conflict of interest. 30-day overlap permitted with Authority knowledge in some cases. Existing book continues receiving renewal commission through original arrangement.</li>
                        <li><strong>Customer Migration Playbook:</strong> Patron's structured customer base transition methodology - personalised communication to top 20-30 percent customers explaining the upgrade, service continuity during transition, new business routing through IMF post-registration, and ongoing relationship development.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IMF for Insurance Agents</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Agent Persona</span>
                        <strong>Agent to IMF Architecture</strong>
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
            <h2 class="section-title">Agent Types and Profiles Patron Serves</h2>
            <div class="content-text">
                
                                <p>Patron's agent graduation engagement is calibrated to a wide range of insurance agent profiles. Each segment brings distinct considerations around insurer mix, customer base profile, and team structure that shape the tier selection.</p>
                <ul>
                    <li><strong>LIC Agents (Largest Segment):</strong> Approximately 13 lakh active LIC agents in India - the largest single insurance distribution force in the country. Senior LIC agents with 10+ years vintage often have books of Rs 8-20 crore annual premium and Rs 15-25 lakh annual renewal income. Tier 2 or Tier 3 graduation engagement typical.</li>
                    <li><strong>Private Life Insurance Agents:</strong> Agents from HDFC Life, ICICI Prudential, SBI Life, Bajaj Allianz, Max Life, Tata AIA, Kotak Life, and similar private insurers. Often more digitally enabled than LIC agents; faster transition through Tier 1 or Tier 2.</li>
                    <li><strong>General Insurance Agents:</strong> Agents from HDFC ERGO, ICICI Lombard, Tata AIG, Reliance General, New India Assurance, United India, Bajaj Allianz General, and others. Commission rates and product mix differ from life - typically faster commission flow and different customer profile (corporate and retail mix).</li>
                    <li><strong>Health Insurance Agents:</strong> Agents from Star Health, Care Health, Niva Bupa, HDFC ERGO Health, Aditya Birla Health. Increasingly important segment given health insurance market growth. Tier 1 or Tier 2 typical.</li>
                    <li><strong>Composite or Multi-Line Agents:</strong> Agents holding multiple individual licences across lines (e.g. LIC + general insurer + health). Graduation simplifies their multi-licence management into a single IMF entity with open architecture.</li>
                    <li><strong>Senior Agents Planning Succession:</strong> Agents in their 50s-60s where succession planning becomes the primary driver. IMF setup in spouse's, child's, or trusted partner's name creates transferable corporate asset that outlasts active practice. Often Tier 3 with Year 1 retainer for smooth transition.</li>
                    <li><strong>Agent Teams Considering Corporate Structure:</strong> 2-3 senior agents partnering to form together - LLP or Pvt Ltd with multiple founders. Shared infrastructure, shared ISP team, distributed selling capacity. Tier 2 or Tier 3 with LLP variant typical.</li>
                </ul>
                <p><strong>Practice Scale Distribution:</strong> Patron's agent graduation engagements span from solo senior agents with Rs 12-15 lakh annual income through agent teams with combined Rs 30-50 lakh annual baseline. Tier selection matches engagement complexity and team size rather than just income level.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Agent Graduation Service Coverage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Tier 1 - Solo Agent Graduation (Rs 50,000-65,000)</td>
                            <td>Suitable for senior individual agent transitioning solo (no ISP team yet) with single-district or 2-3 district operation. Pvt Ltd entity preferred. Includes Pvt Ltd incorporation via SPICe+ with IMF-tailored MoA, DIN and DSC for 2 directors (agent founder plus spouse / family member typically), Rs 10 lakh (or Rs 5 lakh single-district) paid-up capital coordination, CA Net Worth Certificate, Principal Officer 50-hour training, 3-year business plan, IRDAI portal application, initial insurer outreach for 1 tie-up, customer communication templates, agent licence surrender coordination.</td>
                            <td><span class="badge-included">Solo Agent</span></td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Agent with Junior Team Graduation (Rs 65,000-85,000)</td>
                            <td>Suitable for senior agent with 2-3 junior agents in network ready to become ISPs. Multi-district operation. Cross-sectoral expansion planned. All Tier 1 deliverables plus up to 3 ISPs onboarding with 25-hour training coordination per ISP per sector, ISP licence surrender coordination (if any held individual agent licences), insurer outreach for 2-3 tie-ups (mix of life + general + health), customer migration playbook execution support, first-quarter compliance manual, initial accounting and books setup.</td>
                            <td><span class="badge-included">With Team</span></td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Comprehensive Graduation with Year 1 Retainer (Rs 85,000-1,00,000)</td>
                            <td>Suitable for senior agent building full IMF operation - 5+ ISPs, multi-sector tie-ups, multi-district. All Tier 2 deliverables expanded to 5 ISPs, insurer outreach for full 2L + 2G + 2H tie-up architecture, tie-up agreement negotiation and execution for up to 4 insurers, FSE setup advisory (mutual fund, NPS, banking product distribution), Year 1 IMF Compliance Retainer included covering half-yearly IRDAI returns, ROC, statutory audit, ITR-6, GST, ISP CPD tracking, branding and digital presence advisory, bi-monthly check-in calls.</td>
                            <td><span class="badge-included">Comprehensive</span></td>
                        </tr>
                        <tr>
                            <td>Agent Licence Surrender Coordination</td>
                            <td>Coordinated surrender of agent founder's individual licence to current insurer (LIC, HDFC Life, ICICI Pru, Bajaj Allianz General etc.) before assuming IMF Principal Officer role - resolves Section 42 versus Regulation 4 conflict of interest. 30-day overlap window managed with Authority knowledge where applicable. Existing policy book preserved for renewal commission continuity.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>ISP Licence Surrender Coordination</td>
                            <td>For junior agents in the founder's network transitioning to ISPs - coordinated surrender of any individual agent licences they hold. Same conflict-of-interest principle as PO. Required before ISP appointment in IMF.</td>
                            <td><span class="badge-included">Tier 2 + 3</span></td>
                        </tr>
                        <tr>
                            <td>Customer Migration Playbook</td>
                            <td>Patron's structured customer base transition methodology - personalised communication to top 20-30 percent of customers explaining IMF formation, service continuity messaging, new business routing protocols, customer onboarding documentation under IMF Code of Conduct, ongoing relationship development quarterly touch-points. Templates and protocols proven across LIC and private insurer agent graduations.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Multi-Insurer Outreach Strategy</td>
                            <td>Insurer outreach calibrated to agent's customer profile and existing relationships. Typically Tier 1 - 1 tie-up (often agent's previous tied insurer plus 1 competitor); Tier 2 - 2-3 tie-ups mixing life + general + health; Tier 3 - full 2L + 2G + 2H architecture. Patron leverages existing insurer relationships for founder introductions.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Principal Officer 50-Hour Training Coordination</td>
                            <td>Agent founder enrolled in 50-hour PO training at IRDAI-approved institute. Existing agent insurance knowledge and Class 12+ qualification means first-attempt pass rate is high. Schedule alignment with engagement timeline. Examination booking and certification follow-up.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>ISP 25-Hour Sectoral Training Coordination</td>
                            <td>Junior agents transitioning to ISPs enrolled in 25-hour IRDAI sectoral training (Life or General or Health). Existing agent experience accelerates learning curve. Sectoral certification examination booking. Tier 1 - 1-2 ISPs; Tier 2 - up to 3 ISPs; Tier 3 - up to 5 ISPs.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>FSE Setup Advisory (Mutual Funds, NPS, Banking)</td>
                            <td>Financial Service Executive setup for distribution of mutual funds (through AMFI ARN if eligible), NPS pension products (through PFRDA points-of-presence), and banking products. Additional revenue streams unavailable to individual agents. Typically introduced in Tier 3 or Year 2 onward.</td>
                            <td><span class="badge-included">Tier 3</span></td>
                        </tr>
                        <tr>
                            <td>Year 1 Compliance Retainer (Tier 3)</td>
                            <td>Half-yearly IRDAI returns (period ends 31 March and 30 September), ROC trio (AOC-4, MGT-7, ADT-1), DIR-3 KYC, DPT-3, ITR-6, GST returns, ISP CPD tracking, insurer amendment paperwork. Eliminates Year 1 compliance worry during transition. Bi-monthly check-in calls included.</td>
                            <td><span class="badge-included">Tier 3</span></td>
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
            <h2 class="section-title">Patron 8-Phase Agent Graduation Engagement</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured 120-day workflow from initial agent KYC and book review through Pvt Ltd or LLP incorporation, PO certification, ISP onboarding, IRDAI application, agent licence surrender, and full operations launch with multi-insurer tie-ups active.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Discovery and Book of Business Review</h3>
                    <p class="step-description">
                        Days 1-7. Agent KYC; book of business review (active policies, premium income, renewal commission, geographic distribution); capital planning; tier selection based on team size and growth plan; engagement letter.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Book mapped
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Tier selected
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="22" fill="none" stroke="#14365F" stroke-width="2"/>
                                <line x1="68" y1="68" x2="92" y2="92" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                                <text x="50" y="55" font-size="11" fill="#14365F" text-anchor="middle" font-weight="700">BOOK</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Diagnosed</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Entity Formation - Pvt Ltd or LLP</h3>
                    <p class="step-description">
                        Days 7-30. Pvt Ltd or LLP incorporation via SPICe+ with IMF-tailored MoA Object Clause aligned with Regulation 3 IMF Regulations 2015; DIN and DSC for directors; Rs 10 lakh paid-up capital infusion (Rs 5 lakh single-district); bank account; PAN / TAN / GSTIN; Board Meeting.
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
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="48" font-size="14" fill="#14365F" text-anchor="middle" font-weight="700">Pvt Ltd</text>
                                <text x="60" y="65" font-size="9" fill="#14365F" text-anchor="middle">Rs 10L Capital</text>
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
                    <h3 class="step-title">PO Training (Parallel) - 50-Hour Certification</h3>
                    <p class="step-description">
                        Days 7-50. Principal Officer 50-hour training at IRDAI-approved institute; certification examination. Agent founder usually clears first attempt given existing insurance knowledge. Schedule alignment with engagement timeline.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            PO certified
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Exam passed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="45" font-size="11" fill="#14365F" text-anchor="middle" font-weight="700">50-HOUR</text>
                                <text x="60" y="63" font-size="11" fill="#F5A623" text-anchor="middle" font-weight="700">PASSED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Trained</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">ISP Onboarding - Junior Agents to ISPs</h3>
                    <p class="step-description">
                        Days 30-65. Junior agent identification from founder's network; 25-hour sectoral training enrolment (Life or General or Health) per ISP; sectoral certification examination; ISP licence surrender for any held individual agent licences; KYC and Fit and Proper declarations.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Team transitioned
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Certs received
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
                        <span class="illustration-label">ISPs Live</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Insurer Outreach for Open Architecture Tie-Ups</h3>
                    <p class="step-description">
                        Days 50-80. Insurer outreach calibrated to agent's customer profile - LIC, HDFC Life, ICICI Pru, Bajaj Allianz Life for life; ICICI Lombard, Tata AIG for general; Star Health, Care, Niva Bupa for health. Consent letters secured for 2-4 insurers.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Consent letters
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Open architecture
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="30" r="13" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="25" y="34" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">L1</text>
                                <circle cx="55" cy="30" r="13" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="55" y="34" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">L2</text>
                                <circle cx="85" cy="30" r="13" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <text x="85" y="34" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">G</text>
                                <circle cx="40" cy="70" r="13" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <text x="40" y="74" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">G</text>
                                <circle cx="75" cy="70" r="13" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <text x="75" y="74" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">H</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Tie-Ups Set</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">IRDAI Application Filing</h3>
                    <p class="step-description">
                        Days 65-85. 25+ document compilation including PO Pass Certificate, CA Net Worth Certificate, Schedule II F and P documentation, insurer consent letters, 3-year business plan, office documentation, IMF-aligned MoA confirmation. IRDAI portal application filed; Rs 5,000 application fee.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ARN received
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Application filed
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
                    <h3 class="step-title">Agent Licence Surrender and Customer Communication</h3>
                    <p class="step-description">
                        Days 85-120. Agent founder surrenders individual agent licence to current insurer (resolves Section 42 versus Regulation 4 conflict). Customer communication to top 20-30 percent customers explaining IMF formation. Patron's templates used for proactive, planned messaging.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Licence surrendered
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Customers informed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 50 Q60 25 90 50" stroke="#F5A623" stroke-width="3" fill="none"/>
                                <circle cx="30" cy="50" r="10" fill="#FEF4EE" stroke="#14365F" stroke-width="2"/>
                                <text x="30" y="54" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">A</text>
                                <circle cx="90" cy="50" r="10" fill="#F5A623" stroke="#14365F" stroke-width="2"/>
                                <text x="90" y="54" font-size="9" fill="#fff" text-anchor="middle" font-weight="700">IMF</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Transitioned</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Operations Launch and Year 1 Retainer (Tier 3)</h3>
                    <p class="step-description">
                        Days 120 to Day 365 / 500. IMF Registration Certificate received; tie-up agreements active; ISP team operational; first new business sales through IMF; books and compliance setup. Tier 3 Year 1 retainer covers half-yearly IRDAI returns, ROC trio, ITR-6, GST, ISP CPD tracking.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Operations live
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Year 1 managed
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
            <h2 class="section-title">Document Checklist for Agent Graduation</h2>
            <div class="content-text">
                
                                <p>For an effective agent graduation engagement, the following documents should be ready. Patron coordinates fresh issuance where existing documents are inadequate.</p>
                <ul>
                    <li>Agent founder PAN, Aadhaar, photograph, digital signature specimen</li>
                    <li>Co-founder or co-director PAN, Aadhaar, photograph, digital signature specimen (typically spouse / family / partner)</li>
                    <li>Existing individual agent licence (LIC or private insurer or general insurer or health insurer)</li>
                    <li>Agent appointment letter from current insurer; agent licence number and expiry date</li>
                    <li>Last 3 years agent commission income statements (insurer-issued)</li>
                    <li>Last 3 years ITR acknowledgements (agent founder)</li>
                    <li>Book of business summary - active policies, annual premium income, renewal commission</li>
                    <li>Agent founder Fit and Proper declaration (Form A Schedule II IMF Regulations 2015)</li>
                    <li>Education certificates - Class 12 minimum; degree if available; any insurance certifications (IRDAI Insurance Agent training, CFP if held, NISM if any)</li>
                    <li>Office rental agreement or owned office property documents</li>
                    <li>Office photographs and office layout sketch</li>
                    <li>Net Worth supporting - bank account statements showing capital availability for Rs 10 lakh paid-up capital</li>
                    <li>3 reference letters (2 from senior industry connections - insurer, AMC, custodian; 1 from major client)</li>
                    <li>Junior agent team list for ISP onboarding (Tier 2-3) with their individual agent licences if any</li>
                    <li>Customer mix analysis - HNI percentage, retail percentage, geographic distribution, product mix</li>
                    <li>Insurer outreach target list (Patron typically assists with this list)</li>
                    <li>Business plan inputs - 3-year revenue projection, ISP scaling plan, area of operation declaration</li>
                </ul>
                <p style="margin-top:16px;">Verify portal status at the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a> and the <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI Insurance Marketing Firm portal</a>. LIC agent specifics at <a href="https://licindia.in" target="_blank" rel="noopener">Life Insurance Corporation of India</a>. Pvt Ltd / LLP filings at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>. Income tax e-filing at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Agent Graduation Mistakes Patron Helps You Avoid</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Trying to Retain Agent Licence After IMF Registration</td>
                            <td>Some agents attempt to keep their individual agent licence active alongside IMF Principal Officer role. This is a conflict-of-interest violation under Section 42 versus Regulation 4. IRDAI may take adverse action against both the individual licence and the IMF; significant penalty exposure.</td>
                            <td>Patron coordinates licence surrender as a mandatory step at Days 85-95 of the engagement. 30-day overlap with Authority knowledge structured for transition smoothness. Existing book continues receiving renewal commission unchanged.</td>
                        </tr>
                        <tr>
                            <td>Customer Surprise Communication Post-Registration</td>
                            <td>Some agents wait until IMF registration is received before communicating to customers. Result - customer surprise; trust signals confused; potential retention loss as customers feel transition was unplanned.</td>
                            <td>Patron's customer migration playbook starts the customer conversation at Day 60-90 in advance. Templates for personalised email + WhatsApp + phone call combination. Customers feel transition is planned, professional growth narrative reinforced.</td>
                        </tr>
                        <tr>
                            <td>Underestimating Year 1 Income Dip</td>
                            <td>Agents who expect immediate income lift in Year 1 may be disappointed. Year 1 typically dips 10-20 percent due to setup costs (Rs 50,000-1,25,000 Patron plus Rs 30,000-50,000 statutory pass-through), annual compliance retainer, and transition friction. Buyer's remorse common if expectations not set.</td>
                            <td>Patron sets expectations explicitly at engagement onboarding - Year 1 dip 10-20 percent; Year 2 recovery to baseline; Year 3+ 30-60 percent lift. The Year 1 dip is the investment for multi-year structural income lift. Tier 3 retainer absorbs much of the Year 1 compliance cost.</td>
                        </tr>
                        <tr>
                            <td>Onboarding ISPs Who Do Not Surrender Their Agent Licences</td>
                            <td>ISPs must surrender their individual agent licences before assuming ISP role - same conflict-of-interest principle as PO. Some agents try to keep junior agents on both licences. Non-compliant; ISP cannot solicit; risks IRDAI action.</td>
                            <td>Patron coordinates ISP licence surrenders as part of ISP onboarding. Verification process ensures no overlap. Some ISPs surrender immediately; others structure with insurer cooperation.</td>
                        </tr>
                        <tr>
                            <td>MoA Object Clause Not Aligned with IMF Activities</td>
                            <td>Generic Pvt Ltd MoA Object Clauses (e.g. 'business consultancy', 'financial services') are insufficient for IMF registration. IRDAI flags the mismatch at application stage; clarification queries delay registration.</td>
                            <td>Patron drafts IMF-specific Object Clause with Regulation 3 cross-references at incorporation stage. Clause covers insurance solicitation, multi-insurer tie-ups (2L + 2G + 2H), ISP appointments, FSE distribution, all aligned with IRDAI expectations.</td>
                        </tr>
                        <tr>
                            <td>Capital Infusion from Loan Rather Than Equity</td>
                            <td>Some agents try to fund the Rs 10 lakh capital from family loan or borrowing - which does NOT count toward net worth under Regulation 6 IMF Regulations 2015. Capital must be paid-up equity (share allotment). CA Net Worth Certificate cannot be issued for borrowed capital.</td>
                            <td>Patron CA structures capital infusion correctly - paid-up shares allotted to agent founder, spouse, family member, or co-founder. Bank statement evidence collected. Net Worth Certificate issued post-infusion verification.</td>
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
            <h2 class="section-title">Patron Fees for Agent Graduation to IMF</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Free Agent Graduation Scoping Call</td>
                            <td>Free - 30-minute scoping call plus book of business review plus tier selection memo; response within 4 hours</td>
                        </tr>
                        <tr>
                            <td>Patron Accounting Professional Fees (entry-level diagnostic add-on)</td>
                            <td>Starting from INR 2,999 (Exl GST and Govt. Charges) for initial agent practice diagnostic; credit applied if Tier 1 / 2 / 3 engaged within 30 days</td>
                        </tr>
                        <tr>
                            <td>Tier 1 - Solo Agent Graduation (one-time)</td>
                            <td>Rs 50,000 to Rs 65,000 (excl. GST and statutory pass-through fees) - Pvt Ltd or LLP with IMF-tailored MoA, Rs 10 lakh capital infusion, PO 50-hour training, IRDAI application, 1 insurer tie-up, customer templates, agent licence surrender</td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Agent with Junior Team (one-time)</td>
                            <td>Rs 65,000 to Rs 85,000 (excl. GST) - all Tier 1 deliverables plus up to 3 ISPs onboarding (25-hour training per ISP per sector), 2-3 insurer tie-ups, customer migration playbook, first-quarter compliance manual, initial accounting setup</td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Comprehensive Graduation with Year 1 Retainer</td>
                            <td>Rs 85,000 to Rs 1,00,000 (excl. GST) - all Tier 2 deliverables expanded to 5 ISPs, full 2L + 2G + 2H tie-up architecture, tie-up agreement execution for 4 insurers, FSE setup advisory, Year 1 IMF Compliance Retainer included, bi-monthly check-ins</td>
                        </tr>
                        <tr>
                            <td>Pvt Ltd Incorporation (one-time)</td>
                            <td>Rs 7,500 to Rs 12,000 - Companies Act 2013 Sections 3, 4, 7 compliance; SPICe+ filing; IMF-tailored MoA Object Clause aligned with Regulation 3</td>
                        </tr>
                        <tr>
                            <td>LLP Incorporation (alternative one-time)</td>
                            <td>Rs 7,500 to Rs 12,000 - LLP Act 2008; designated partners; LLP Agreement covering IMF activities; suitable for two-partner agent setups</td>
                        </tr>
                        <tr>
                            <td>PO 50-Hour IRDAI Training (Pass-Through)</td>
                            <td>Rs 7,500 to Rs 15,000 plus examination fees - paid directly to IRDAI-approved institute; agent founder with insurance background typically passes first attempt</td>
                        </tr>
                        <tr>
                            <td>ISP 25-Hour Sectoral Training (Pass-Through, Per ISP)</td>
                            <td>Rs 3,500 to Rs 6,000 per ISP plus exam fees - sectoral training (Life or General or Health); Tier 1 (1-2 ISPs) / Tier 2 (up to 3) / Tier 3 (up to 5) coordinated</td>
                        </tr>
                        <tr>
                            <td>Agent Licence Surrender Coordination</td>
                            <td>Included in all tiers - coordinated surrender of agent founder's individual licence; 30-day overlap with Authority knowledge where applicable; ISP licence surrenders for Tier 2 / 3</td>
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
                <p style="margin-top:16px;"><strong>Get a free IMF for Insurance Agents consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20an%20LIC%20or%20private%20insurer%20agent%20and%20want%20Patron's%20agent-to-IMF%20graduation%20package%20-%20please%20share%20scoping%20call%20availability." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">120-Day Agent Graduation Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Phase 0 - Discovery</td>
                            <td>Days 1-7 - agent KYC, book of business review, capital planning, tier selection, engagement letter signing</td>
                        </tr>
                        <tr>
                            <td>Phase 1A - Entity Formation</td>
                            <td>Days 7-30 - Pvt Ltd or LLP incorporation via SPICe+, IMF-tailored MoA, DIN / DSC, PAN / TAN / GSTIN, bank account, Rs 10 lakh paid-up capital infusion, Board Meeting</td>
                        </tr>
                        <tr>
                            <td>Phase 1B - PO Training (Parallel)</td>
                            <td>Days 7-50 - Principal Officer 50-hour training enrolment at IRDAI-approved institute and certification examination</td>
                        </tr>
                        <tr>
                            <td>Phase 2A - ISP Onboarding (If Tier 2 / 3)</td>
                            <td>Days 30-65 - ISP candidate identification, 25-hour training enrolment, sectoral examinations, KYC and Fit and Proper declarations, ISP licence surrenders</td>
                        </tr>
                        <tr>
                            <td>Phase 2B - Insurer Outreach</td>
                            <td>Days 50-80 - insurer relationship development, consent letter execution, tie-up draft agreements (1-4 insurers depending on tier)</td>
                        </tr>
                        <tr>
                            <td>Phase 3A - IRDAI Application</td>
                            <td>Days 65-85 - 25+ document compilation, IRDAI portal application filing, Rs 5,000 application fee, ARN received</td>
                        </tr>
                        <tr>
                            <td>Phase 3B - Agent Licence Surrender</td>
                            <td>Days 85-95 - agent founder surrenders individual agent licence to current insurer (30-day overlap permitted with Authority knowledge for some cases)</td>
                        </tr>
                        <tr>
                            <td>Phase 4 - Customer Communication</td>
                            <td>Days 85-120 - top 20-30 percent customer outreach, communication templates, transition messaging, service continuity protocols</td>
                        </tr>
                        <tr>
                            <td>Phase 5 - IRDAI Processing</td>
                            <td>Days 85-120 - Authority review, clarification queries handled, final decision, IMF Registration Certificate received</td>
                        </tr>
                        <tr>
                            <td>Phase 6 - Operations Launch</td>
                            <td>Days 120+ - first IMF policy sales, tie-up agreements active, ISP team operational, books and compliance setup</td>
                        </tr>
                        <tr>
                            <td>Phase 7 - Year 1 Compliance Retainer (Tier 3)</td>
                            <td>Day 120-365 / 120-500 - quarterly check-ins, half-yearly IRDAI returns, ROC trio, ITR-6, GST, ISP CPD tracking, insurer amendment paperwork</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Year 1 to Year 3 Income Trajectory:</strong> Year 1 income typically dips 10-20 percent due to one-time setup costs, annual compliance retainer, and transition friction. Year 2 recovers to baseline as multi-insurer tie-ups mature, ISP team productivity ramps up, and FSE channel begins contributing. Year 3 shows 30-60 percent cumulative lift over Year 0 baseline as full open architecture is leveraged, ISP team is fully productive, and customer base is bundled across multiple insurers and products. Some Patron clients have exceeded 100 percent lift over 5 years. The 120-day setup investment is the entry ticket to a multi-year structural income trajectory that the tied-agent model cannot deliver.</p>

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
            <h2 class="section-title">Why Patron for Agent Graduation</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="feature-title">Specialised Agent-Graduation Focus</h3>
                <p class="feature-description">Dedicated agent graduation package versus generic IMF setup. Patron understands the LIC agent and private insurer agent transition specifics - existing book preservation, licence surrender coordination, customer migration, ISP onboarding from junior agent network. Distinct from financial advisor or bank employee persona pages.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 class="feature-title">3-Tier Fixed-Fee Transparency</h3>
                <p class="feature-description">Rs 50,000 to Rs 1,00,000 across 3 tiers with all deliverables itemised at engagement onboarding. No scope creep; no surprise add-ons. Tier 1 solo agent; Tier 2 with junior team; Tier 3 comprehensive with Year 1 retainer. Statutory pass-through fees disclosed separately.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 class="feature-title">End-to-End Transition Coordination</h3>
                <p class="feature-description">Patron coordinates the entire graduation - entity formation through Pvt Ltd or LLP, IRDAI IMF registration, agent licence surrender, customer migration, ISP onboarding, insurer outreach. Single firm handles MCA + IRDAI + accounting + compliance, eliminating fragmentation across multiple providers.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="feature-title">Customer Migration Playbook</h3>
                <p class="feature-description">Templates and protocols proven across LIC and private insurer agent graduations. Personalised customer communication, service continuity messaging, new business routing protocols. Many Patron clients have improved customer retention post-graduation as the IMF brand signals professional growth.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg>
                </div>
                <h3 class="feature-title">Tier 3 Year 1 Retainer Included</h3>
                <p class="feature-description">Tier 3 includes Year 1 IMF compliance retainer covering half-yearly IRDAI returns, ROC trio (AOC-4, MGT-7, ADT-1), DIR-3 KYC, DPT-3, ITR-6, GST returns, ISP CPD tracking. Eliminates Year 1 compliance worry during the critical transition year. Bi-monthly check-in calls included.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="feature-title">15+ Years Across IRDAI, MCA, RBI</h3>
                <p class="feature-description">Offices in Pune, Mumbai, Delhi, and Gurugram with pan-India remote engagement. Single firm CA + CS + IRDAI compliance coordination. 15+ years experience across IRDAI, MCA, RBI, ITD, and GST regulators. Parallel-track project management compresses timeline (PO training and ISP onboarding overlap).</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by LIC Agents and Private Insurer Agents Across India</h2>
            <div class="content-text">
                
                                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years in Practice</p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:24px;">
                    <div style="padding:20px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"I had been an LIC agent for 18 years with Rs 22 lakh annual income but felt my growth had plateaued. Patron walked me through the IMF model - within 5 months I had my own Pvt Ltd IMF, two new private life insurer tie-ups and three of my junior agents as ISPs. Year 2 income hit Rs 31 lakh; Year 3 crossed Rs 40 lakh. The Rs 85,000 Patron fee paid for itself in 6 months."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Founder, IMF in Maharashtra (ex-LIC agent, Tier 3)</p>
                    </div>
                    <div style="padding:20px;background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"I am 56 years old and was worried about my book of business after retirement. Patron set up the IMF in my daughter's and my joint name with me as Principal Officer. Now the firm continues even when I taper off. My daughter handles operations; we have 5 ISPs. The Rs 95,000 graduation engagement was the best money I spent in my entire career as agent."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Co-founder, IMF in Karnataka (ex-private insurer agent, Tier 3 succession)</p>
                    </div>
                </div>

                <p style="margin-top:24px;"><strong>Client Roster:</strong> Agent graduation engagements completed for LIC agents, private life insurance agents (HDFC Life, ICICI Prudential, SBI Life, Bajaj Allianz, Max Life), general insurance agents (HDFC ERGO, ICICI Lombard, Tata AIG, Reliance General), and health insurance agents (Star Health, Care Health, Niva Bupa) across Tier 1 and Tier 2 cities in India.</p>

                <p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves agent clients across India - both in-person and remotely. Pan-India remote engagement particularly valuable for agents in smaller cities and B30 / Tier 2-3 markets where IMF expansion potential is highest.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Individual Agent vs IMF - Detailed Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>Individual Agent</th><th>Insurance Marketing Firm</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Regulatory Framework</td>
                            <td>Section 42 Insurance Act 1938 + IRDAI Agents Regulations 2016</td>
                            <td>Section 42D Insurance Act 1938 + IRDAI IMF Regulations 2015</td>
                        </tr>
                        <tr>
                            <td>Legal Status</td>
                            <td>Individual; personal licence</td>
                            <td>Body corporate (Pvt Ltd / LLP / Cooperative Society)</td>
                        </tr>
                        <tr>
                            <td>Insurer Tie-Up Cap</td>
                            <td>1 life + 1 general + 1 health (or composite tied)</td>
                            <td>Up to 2 life + 2 general + 2 health (open architecture)</td>
                        </tr>
                        <tr>
                            <td>Geographic Scope</td>
                            <td>Insurer-defined territory; typically single-state</td>
                            <td>Single-district (Rs 5L NW) or multi-district / multi-state (Rs 10L NW)</td>
                        </tr>
                        <tr>
                            <td>Income Sources</td>
                            <td>Insurance commission only</td>
                            <td>Insurance commission + FSE commission (MF, NPS, banking products)</td>
                        </tr>
                        <tr>
                            <td>Income Ceiling</td>
                            <td>Limited by personal selling capacity</td>
                            <td>Scales with ISP team + insurer relationships + FSE products</td>
                        </tr>
                        <tr>
                            <td>Capital Requirement</td>
                            <td>Nil</td>
                            <td>Rs 10 lakh paid-up capital (Rs 5L single-district)</td>
                        </tr>
                        <tr>
                            <td>Annual Compliance</td>
                            <td>Agent licence renewal + CPD hours + insurer reporting</td>
                            <td>IRDAI half-yearly returns + statutory audit + ROC + ITR + GST + ISP CPD</td>
                        </tr>
                        <tr>
                            <td>Compliance Cost</td>
                            <td>Rs 5,000-15,000 per year</td>
                            <td>Rs 40,000-1,00,000 per year (Patron retainer)</td>
                        </tr>
                        <tr>
                            <td>Team Building</td>
                            <td>Cannot have employees as agents (personal licence)</td>
                            <td>Can onboard 2-50+ ISPs as employees / consultants</td>
                        </tr>
                        <tr>
                            <td>Succession</td>
                            <td>Non-transferable; lapses on retirement / death</td>
                            <td>Transferable corporate entity; perpetual existence</td>
                        </tr>
                        <tr>
                            <td>External Equity</td>
                            <td>Not possible</td>
                            <td>Possible (Pvt Ltd to PE; future Public Ltd conversion)</td>
                        </tr>
                        <tr>
                            <td>Best Suited For</td>
                            <td>Newcomers; part-time agents; small books; geographic concentration</td>
                            <td>Mid-to-senior agents with proven books; team builders; succession-focused; HNI / corporate segments</td>
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
                
                                <p>Agent graduation is one of several persona-specific routes within Patron's IMF cluster. Related services help across the engagement lifecycle - from initial entity decision through ongoing annual compliance:</p>
                <ul>
                    <li>Parent service: <a href="/insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</a> - master hub covering all IMF cluster services.</li>
                    <li><a href="/imf-incorporation-services">IMF Incorporation Services</a> - combined MCA plus IRDAI engagement detail.</li>
                    <li><a href="/imf-irdai-registration-process">IRDAI IMF Registration Process</a> - standalone IRDAI registration if entity already exists.</li>
                    <li><a href="/ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</a> - Principal Officer training and ISP coordination.</li>
                    <li><a href="/imf-compliance-retainer-services">IMF Compliance Retainer Services</a> - ongoing annual compliance after graduation (Year 1 included in Tier 3).</li>
                    <li><a href="/imf-for-financial-advisors">IMF for Financial Advisors</a> - financial-advisor persona page (SEBI RIAs, MFDs, CFPs).</li>
                    <li><a href="/imf-for-bank-employees-retirees">IMF for Bank Employees and Retirees</a> - bank-retiree persona page.</li>
                    <li><a href="/imf-private-limited-vs-llp">IMF Private Limited vs LLP</a> - entity selection guide.</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Pvt Ltd entity for agent founders.</li>
                </ul>
                <p style="margin-top:16px;">Verify your eligibility through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a> and the <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI Insurance Marketing Firm portal</a>. LIC agent specifics at <a href="https://licindia.in" target="_blank" rel="noopener">Life Insurance Corporation of India</a>. For company-level filings, the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a> portal. Income tax e-filing at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

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
                
                                <p><strong>Governing Statutes and Regulations:</strong> Insurance Act 1938, IRDAI Act 1999, IRDAI (Appointment of Insurance Agents) Regulations 2016, IRDAI (Registration of Insurance Marketing Firm) Regulations 2015, IRDAI (Registration of Corporate Agents) Regulations 2015, Companies Act 2013, LLP Act 2008, Income Tax Act 1961, and GST Act 2017.</p>
                <ul>
                    <li><strong>Insurance Act 1938 Section 42:</strong> Individual Insurance Agent appointment by insurers.</li>
                    <li><strong>Insurance Act 1938 Section 42D:</strong> Intermediary registration framework - the parent statute for IMF registration.</li>
                    <li><strong>IRDAI (Appointment of Insurance Agents) Regulations 2016:</strong> Individual agent licensing, training, CPD hours, conduct.</li>
                    <li><strong>IRDAI (Registration of Corporate Agents) Regulations 2015:</strong> Corporate agent model - distinct from IMF; typically 1-2 tie-ups.</li>
                    <li><strong>IRDAI (Registration of Insurance Marketing Firm) Regulations 2015:</strong> Master regulation for IMF.</li>
                    <li><strong>Regulation 2.2 IMF Regulations 2015:</strong> Eligible entity types - Company, LLP, Cooperative Society. Individual cannot be IMF.</li>
                    <li><strong>Regulation 3 IMF Regulations 2015:</strong> Permitted activities; 2L + 2G + 2H open architecture distribution.</li>
                    <li><strong>Regulation 4 IMF Regulations 2015:</strong> Principal Officer requirements - PO cannot simultaneously be Individual Agent.</li>
                    <li><strong>Regulation 6 IMF Regulations 2015:</strong> Net worth Rs 10 lakh general or Rs 5 lakh single-district.</li>
                    <li><strong>Regulation 7 IMF Regulations 2015:</strong> 3-year IMF registration validity.</li>
                    <li><strong>Regulation 12 IMF Regulations 2015:</strong> ISP framework - existing downline can transition with 25-hour training.</li>
                    <li><strong>Schedule I IMF Regulations 2015:</strong> Code of Conduct (sales practices).</li>
                    <li><strong>Schedule II IMF Regulations 2015:</strong> Fit and Proper criteria.</li>
                    <li><strong>IRDAI (Manner of Receipt of Premium) Regulations 2002:</strong> Premium handling procedures.</li>
                    <li><strong>IRDAI Master Circular on Insurance Intermediaries:</strong> Operational guidance across intermediary types.</li>
                    <li><strong>Companies Act 2013 Section 3:</strong> Formation of Pvt Ltd (2 directors + 2 shareholders minimum).</li>
                    <li><strong>Companies Act 2013 Section 4:</strong> MoA with IMF Object Clause aligned with Regulation 3.</li>
                    <li><strong>Companies Act 2013 Section 7:</strong> SPICe+ incorporation.</li>
                    <li><strong>LLP Act 2008:</strong> LLP route as alternative entity.</li>
                    <li><strong>LIC of India Agents Manual:</strong> LIC-specific agent appointment, commission, and termination procedures.</li>
                </ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on book size, ISP team count, insurer tie-up complexity, and specific transition requirements (e.g. 30-day licence overlap, multi-state declaration, FSE setup).</p>

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
                    <p class="faq-expanded__lead">Answers to the most common questions from LIC agents, private life insurance agents, general insurance agents, and health insurance agents evaluating graduation to IMF.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can an insurance agent become an IMF in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Individual insurance agents - LIC agents, private life insurance agents (HDFC Life, ICICI Prudential, SBI Life, Bajaj Allianz, Max Life), general insurance agents, and health insurance agents - can graduate to Insurance Marketing Firm. The agent must form a Pvt Ltd or LLP entity since individual cannot be IMF under Regulation 2.2 IMF Regulations 2015, then complete Principal Officer 50-hour training, surrender the individual agent licence (conflict of interest under Regulation 4), and complete IRDAI IMF registration. Patron's agent graduation package Rs 50,000 to Rs 1,00,000 covers the full 120-day transition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the requirements to upgrade from agent to IMF?</h3>
                        <div class="faq-expanded__a"><p>Requirements - (1) Form Pvt Ltd or LLP entity (individual cannot be IMF); (2) Rs 10 lakh paid-up capital (Rs 5 lakh single-district); (3) Principal Officer with 50-hour IRDAI training and certification; (4) Schedule II Fit and Proper compliance for promoters and PO; (5) At least one insurer consent letter; (6) Office infrastructure; (7) 3-year business plan; (8) Surrender of existing individual agent licence before PO appointment. Patron coordinates all requirements end-to-end through the 3-tier graduation package Rs 50,000 to Rs 1,00,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the income difference between agent and IMF?</h3>
                        <div class="faq-expanded__a"><p>Individual agent income is constrained by one-insurer-per-line restriction and personal selling capacity - typical senior agent Rs 15-25 lakh per year. IMF founder income depends on (a) multi-insurer scale (open architecture 2L + 2G + 2H); (b) Insurance Sales Person team scaling; (c) Financial Service Executive distribution of mutual funds, NPS, banking. Typical income lift 30-60 percent over 2-3 years - a Rs 22 lakh agent often reaches Rs 32-40 lakh as Year 2-3 IMF founder. Year 1 may dip 10-20 percent due to setup costs and transition friction.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I keep my LIC agent licence after becoming IMF?</h3>
                        <div class="faq-expanded__a"><p>No. An individual cannot simultaneously hold (a) Individual Insurance Agent appointment under Section 42 Insurance Act 1938 and (b) Principal Officer appointment under Regulation 4 IMF Regulations 2015 - this is the conflict-of-interest framework. You must surrender your individual agent licence before assuming Principal Officer role of your IMF. Some agents structure a 30-day overlap with Authority knowledge for transition. Existing policies you sold as agent continue to receive renewal commission through original arrangement until maturity or transfer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Will I lose my existing clients if I graduate to IMF?</h3>
                        <div class="faq-expanded__a"><p>No, with proper migration. Existing policies remain serviceable through original insurer; renewal commission continues per existing arrangement. Customer relationships transfer naturally - same person now operating under corporate IMF brand. Patron's customer migration playbook covers personalised communication to top 20-30 percent customers explaining the upgrade, service continuity during transition, new business routing through IMF post-registration, and ongoing customer relationship development. Many Patron clients have improved customer retention post-graduation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does agent to IMF conversion take?</h3>
                        <div class="faq-expanded__a"><p>Patron's agent graduation engagement is a 120-day end-to-end project. Critical paths run in parallel - Pvt Ltd incorporation Days 1-30, PO 50-hour training Days 1-50, ISP onboarding Days 30-65, insurer outreach Days 50-80, IRDAI application Days 80-85, processing Days 85-120. Agent licence surrender coordinated at Days 85-95. Customer communication Days 85-120. Total 120 days to IMF Registration Certificate receipt. Tighter timeline (90-100 days) possible if PO already trained. Complex cases extend to 150 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost of agent graduation to IMF?</h3>
                        <div class="faq-expanded__a"><p>Patron's 3-tier fixed-fee structure - Tier 1 Solo Agent (Rs 50,000 to Rs 65,000) includes Pvt Ltd plus IRDAI plus PO plus 1 tie-up plus customer templates plus licence surrender coordination; Tier 2 Agent with Junior Team (Rs 65,000 to Rs 85,000) above plus up to 3 ISPs plus multi-sectoral tie-ups plus migration playbook; Tier 3 Comprehensive (Rs 85,000 to Rs 1,00,000) above plus 5 ISPs plus full 2L + 2G + 2H plus FSE setup plus Year 1 compliance retainer included. Statutory pass-through fees additional Rs 30,000 to Rs 50,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I onboard my agent team as ISPs in IMF?</h3>
                        <div class="faq-expanded__a"><p>Yes. Junior agents in your network can transition to become Insurance Sales Persons under your IMF. Process per ISP - (1) Verify eligibility (Class 12 pass minimum, Fit and Proper, Indian resident, 18+); (2) Surrender existing individual agent licence; (3) Complete 25-hour sectoral training; (4) Pass IRDAI sectoral certification examination; (5) Receive Fit and Proper certification by you as Principal Officer; (6) Sign Code of Conduct Undertaking; (7) Onboarded in IMF internal register; (8) Insurer-specific code generation. Patron coordinates as part of graduation package.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                                <ul style="margin-top:12px;">
                    <li><strong>Can two agents form an IMF together?</strong> Yes. LLP route is common for two senior agents partnering. Or Pvt Ltd with both as co-founders / directors.</li>
                    <li><strong>Will my LIC commission stop after graduation?</strong> No. Existing policy renewals continue through original arrangement; only NEW business routes through IMF.</li>
                    <li><strong>Can I continue MDRT / COT performance recognition?</strong> Personal recognition is tied to individual agent licence; corporate recognition operates differently under IMF.</li>
                    <li><strong>Is there an age limit for becoming IMF founder?</strong> No upper limit. Indian resident, 18+ years, degree (or IRDAI-equivalent), Fit and Proper.</li>
                    <li><strong>Can my spouse be co-director without insurance background?</strong> Yes. Spouse can be co-director / shareholder without being PO. PO needs the 50-hour training plus certification.</li>
                    <li><strong>How does GST apply on commission income?</strong> IMF commission income above Rs 20 lakh aggregate turnover attracts GST at 18 percent.</li>
                    <li><strong>Can I run IMF part-time alongside another business?</strong> Yes if Fit and Proper criteria met and bandwidth declared. Many Patron clients run IMF alongside CA practice, real estate, or other businesses.</li>
                    <li><strong>LIC agent se IMF kaise banein?</strong> 120 din ka end-to-end transition - Pvt Ltd ya LLP form karna (Regulation 2.2), Rs 10 lakh paid-up capital, PO 50-hour training, junior agents ko ISP banana, IRDAI portal application, LIC agent licence surrender karna conflict of interest avoid karne ke liye, customer base ko inform karna. Patron ka agent graduation package Rs 50,000-1,00,000. Income lift 30-60 percent over 2-3 years. Call +91 945 945 6700.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Graduation Around Renewal Cycle or Team Readiness</h2>
            <div class="content-text">
                
                                <p><strong>Trigger Events for Agent Graduation:</strong> Patron's agent graduation engagement is most effective when timed to one of several natural triggers - (a) Individual agent licence renewal approaching - good evaluation point for IMF graduation; (b) Book of business approaching critical mass (Rs 15+ lakh annual commission) - structural ceiling becomes felt; (c) Customer base seeking multi-product offerings unavailable from tied insurer - retention risk if not graduated; (d) Age approaching 50s-60s - succession planning becomes pressing; (e) Junior agents in network ready for ISP transition - timing-sensitive for team building.</p>
                <p><strong>Cost of Continuing the Status Quo:</strong> Plateaued growth despite years of effort, lost sales to competitor recommendations the tied insurer cannot match, customer attrition to multi-product wealth platforms, no asset value built for retirement or family succession. A 12-month delay in IMF graduation typically represents Rs 5-15 lakh foregone Year 2-3 income lift for a mid-size agent practice.</p>
                <p><strong>Other Agents Are Graduating First:</strong> The competitive landscape is shifting. Agents in your geography who graduate to IMF first capture the multi-insurer customer segment - HNIs, business owners, corporate buyers - that prefer dealing with registered firms. Late graduation means competing against established IMFs for the same customer pool. Earlier graduation positions you as the IMF brand in your geography.</p>
                <p><strong>Action:</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a> for a free 30-minute Agent Graduation Scoping Call. Tier 1 Solo Agent from Rs 50,000; Tier 2 with Junior Team from Rs 65,000; Tier 3 Comprehensive with Year 1 Retainer from Rs 85,000.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Agent Graduation Team Today</h2>
            <div class="content-text" style="text-align:left;">
                
                                <p style="color:rgba(255,255,255,0.92);">Graduation from individual insurance agent to Insurance Marketing Firm is the largest-volume entry point in the Patron IMF cluster given India's 13 lakh-plus LIC agent universe plus private insurer agents from HDFC Life, ICICI Prudential, SBI Life, Bajaj Allianz, Max Life, and others. Four structural drivers push successful senior agents toward graduation - multi-insurer open architecture (2L + 2G + 2H tie-ups), income lift potential 30-60 percent over 2-3 years through team and product mix scaling, succession planning through transferable corporate entity, and structured branded business positioning.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron's 3-tier agent graduation package Rs 50,000 to Rs 1,00,000 covers the full 120-day transition - Pvt Ltd or LLP incorporation with IMF-tailored MoA, Rs 10 lakh paid-up capital infusion, Principal Officer 50-hour certification, ISP onboarding from junior agents in your network, insurer outreach for multi-line tie-ups, customer migration playbook, agent licence surrender coordination to navigate the Section 42 versus Regulation 4 conflict-of-interest, and Tier 3 includes Year 1 compliance retainer.</p>
                <p style="color:rgba(255,255,255,0.92);">Common concerns - client retention, agent licence surrender mechanics, Year 1 income dip, area-of-operation declaration, ISP onboarding - all addressed through Patron's experience across hundreds of LIC and private insurer agent graduations. The firm serves agents across Pune, Mumbai, Delhi, and Gurugram with pan-India remote engagement for agents in B30 and Tier 2-3 cities where IMF expansion potential is highest.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20an%20LIC%20or%20private%20insurer%20agent%20and%20want%20Patron's%20agent-to-IMF%20graduation%20package%20-%20please%20share%20scoping%20call%20availability." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20for%20Insurance%20Agents&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20agent-to-IMF%20graduation%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Agent graduation is one of several persona-specific routes within Patron's IMF cluster. Sister pages cover entity setup, IRDAI registration, ongoing compliance, and other persona verticals.</p>
        
                        <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Patron IMF Cluster Services</div>
                <div class="pa-block-sub">End-to-end support across the IMF engagement lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="/insurance-marketing-firm-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">IMF Registration Hub</div><div class="pa-card-sub">Parent service</div></div></a>
                    <a href="/imf-incorporation-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">IMF Incorporation</div><div class="pa-card-sub">Combined setup</div></div></a>
                    <a href="/imf-irdai-registration-process" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="pa-card-title">IRDAI Registration</div><div class="pa-card-sub">Standalone process</div></div></a>
                    <a href="/ismp-certification-isp-appointment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg></div><div><div class="pa-card-title">ISMP and ISP</div><div class="pa-card-sub">PO + ISP coordination</div></div></a>
                    <a href="/imf-compliance-retainer-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Compliance Retainer</div><div class="pa-card-sub">Annual ongoing</div></div></a>
                    <a href="/imf-for-financial-advisors" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="pa-card-title">Financial Advisors</div><div class="pa-card-sub">RIA + MFD persona</div></div></a>
                    <a href="/imf-for-bank-employees-retirees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Bank Retirees</div><div class="pa-card-sub">Post-retirement</div></div></a>
                    <a href="/imf-private-limited-vs-llp" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11H3v10h6V11zM21 3h-6v18h6V3zM15 7H9v14h6V7z"/></svg></div><div><div class="pa-card-title">Pvt Ltd vs LLP</div><div class="pa-card-sub">Entity decision</div></div></a>
                </div>
            </div>

            <div class="pa-city-block">
                <div class="pa-block-title">Patron Offices Serving Insurance Agents</div>
                <div class="pa-block-sub">4-office network with pan-India remote engagement for LIC and private insurer agents</div>
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
            <p>This page is reviewed quarterly (Tier 2 - 3 months) and immediately on IRDAI commission norm updates, new private insurer entries, LIC scheme changes, and IRDAI Agents Regulations 2016 amendments affecting individual agent to IMF transitions.</p>
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