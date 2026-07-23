
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
    <title>IMF Incorporation India: Pvt Ltd + IRDAI</title>
    <meta name="description" content="MCA Pvt Ltd plus IRDAI IMF registration in one engagement - Rs 10 lakh net worth, MoA/AoA, DIN/DSC, ISP training. 120-day fixed-fee. From Rs 50,000.">
    <link rel="canonical" href="/imf-incorporation-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IMF Incorporation India 2026: Pvt Ltd + IRDAI | Patron">
    <meta property="og:description" content="MCA Pvt Ltd plus IRDAI IMF registration in one engagement - Rs 10 lakh net worth, MoA/AoA, DIN/DSC, ISP training. 120-day fixed-fee. From Rs 50,000.">
    <meta property="og:url" content="/imf-incorporation-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/imf-incorporation-services-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IMF Incorporation India 2026: Pvt Ltd + IRDAI | Patron">
    <meta name="twitter:description" content="MCA Pvt Ltd plus IRDAI IMF registration in one engagement - Rs 10 lakh net worth, MoA/AoA, DIN/DSC, ISP training. 120-day fixed-fee. From Rs 50,000.">
    <meta name="twitter:image" content="/images/imf-incorporation-services-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/imf-incorporation-services/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Insurance Marketing Firm Registration", "item": "/insurance-marketing-firm-registration" },
        { "@type": "ListItem", "position": 3, "name": "IMF Incorporation Services", "item": "/imf-incorporation-services" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/imf-incorporation-services/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to start an insurance marketing firm in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Starting an IMF in India is a 120-day combined regulatory engagement. Step 1 - Incorporate a registered entity (Private Limited Company is the most common choice; LLP is an alternative). Step 2 - Build Rs 10 lakh paid-up capital as net worth (Rs 5 lakh for single-district operation). Step 3 - Principal Officer undergoes 50-hour IRDAI-approved training and passes certification examination. Step 4 - Insurance Sales Persons complete 25-hour training and certification. Step 5 - Compile 12+ documents and file IRDAI portal application. Step 6 - Secure at least 1 insurer consent letter. Step 7 - IRDAI processes and issues 3-year IMF Registration Certificate. Patron's combined engagement runs all steps in parallel on a fixed-fee basis Rs 50,000 to Rs 1,25,000."
          }
        },
        {
          "@type": "Question",
          "name": "Which entity type is best for IMF - Pvt Ltd or LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Approximately 85 percent of new IMF founders choose Private Limited Company. Reasons - easier paid-up capital infusion through share allotment, cleaner ownership for future funding, established corporate governance framework familiar to insurers and IRDAI, standardised audit and compliance, and easier expansion. LLP is suitable for partnership-led structures (e.g. two CA partners adding insurance to a financial advisory firm), where simpler annual compliance is preferred and no external equity funding is planned. Both are permitted under IRDAI IMF Regulation 2.2. Patron offers both pathways at equivalent fixed-fee pricing."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of incorporating an IMF Pvt Ltd in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's fixed-fee tiers - Tier 1 (Pvt Ltd Only): Rs 50,000; Tier 2 (Pvt Ltd plus IRDAI application): Rs 75,000-90,000; Tier 3 (Full combined plus initial compliance): Rs 1,00,000-1,15,000; Tier 4 (Full plus multi-insurer tie-up): Rs 1,15,000-1,25,000. Statutory pass-through fees (additional) - MCA SPICe+ form fees Rs 5,000-10,000 depending on state, DSC Rs 2,500-5,000 for 2 directors, IRDAI application fee Rs 5,000, PO training institute fee Rs 8,000-15,000, ISP training fees Rs 3,000-5,000 per ISP, stamp duty Rs 1,000-5,000 depending on state. Total external cost approximately Rs 30,000-50,000 over and above Patron fee."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register IMF without forming a company first?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. IRDAI IMF Regulation 2.2 requires a registered entity - Company, LLP, Cooperative Society or other IRDAI-authorised entity. An individual cannot be an IMF. The combined engagement therefore starts with entity formation (Pvt Ltd or LLP) as Phase 1 followed by IRDAI registration as Phase 2 and Phase 3. The two phases can run in parallel to compress total timeline to 120 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the paid-up capital required for IMF Pvt Ltd?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 10 lakh paid-up capital is required to meet the IRDAI IMF Regulation 6 net worth threshold (Rs 5 lakh for single-district operation). The Rs 10 lakh must be infused as equity (paid-up share capital) - not as a loan from director or subscribed-but-unpaid capital. Patron coordinates the infusion through Board-approved share allotment, files Form PAS-3 within 30 days, issues SH-1 share certificates and provides CA Net Worth Certificate based on the actual bank balance."
          }
        },
        {
          "@type": "Question",
          "name": "What MoA objects are needed for IMF activities?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Memorandum of Association Object Clause must specifically authorise insurance solicitation and procurement activities aligned with IRDAI IMF Regulation 3. Generic 'business consultancy' or 'financial services' clauses are insufficient. Patron drafts IMF-specific objects covering - acting as IMF under IMF Regulations 2015, soliciting insurance from life / general / health insurers, servicing policies including premium collection, distributing financial products via FSE (mutual funds, NPS, banking products), insurance consultancy and risk advisory, survey and loss assessment work, and ancillary IRDAI-permitted activities."
          }
        },
        {
          "@type": "Question",
          "name": "How long does combined Pvt Ltd plus IMF registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's combined engagement targets 120 days end-to-end. Phase 1 (Days 1-30) - MCA setup: SPICe+ filing, name approval, DIN / DSC, MoA / AoA, capital infusion, PAN / TAN / GSTIN, bank account, First Board Meeting. Phase 2 (Days 30-90) - IRDAI workflow: PO 50-hour training (started Day 1 in parallel), IRDAI examination, 3-year business plan, documentation compilation, IRDAI portal application filing, Authority processing and clarifications. Phase 3 (Days 90-120) - ISP certification, insurer tie-up agreements, IRDAI Registration Certificate receipt, post-registration compliance handover. Complex cases may extend to 150 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is Patron's fixed fee for IMF incorporation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's fixed-fee tiers - Rs 50,000 (Tier 1 Pvt Ltd only), Rs 75,000-90,000 (Tier 2 Combined Pvt Ltd plus IRDAI application), Rs 1,00,000-1,15,000 (Tier 3 Full combined plus initial compliance), Rs 1,15,000-1,25,000 (Tier 4 Full combined plus multi-insurer tie-up). All Patron deliverables itemised in engagement letter. Statutory pass-through fees (MCA forms, DSC, IRDAI fee, training institute fees, stamp duty) are additional and total approximately Rs 30,000-50,000. LLP variant pricing identical to Pvt Ltd. GST extra."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/imf-incorporation-services/#service",
      "name": "IMF Incorporation Services - Combined Pvt Ltd plus IRDAI Engagement",
      "description": "Combined MCA Private Limited Company (or LLP) incorporation plus IRDAI Insurance Marketing Firm registration in a single 120-day fixed-fee engagement. End-to-end Patron-handled process - entity name approval, SPICe+ filing via INC-32 / INC-33 / INC-34 with AGILE-PRO-S integration for PAN / TAN / GSTIN / EPFO / ESIC / Bank / Shops Act, DIN allotment under Section 153 Companies Act 2013 plus Rule 9 of Companies (Appointment and Qualification of Directors) Rules 2014, Class 3 Digital Signature Certificate from CCA-licensed Certifying Authorities, IMF-tailored MoA Object Clause aligned with IRDAI Regulation 3 IMF Regulations 2015, Rs 10 lakh paid-up capital infusion under Regulation 6 (or Rs 5 lakh single-district route) with PAS-3 allotment return filing and SH-1 share certificates, CA Net Worth Certificate, Principal Officer 50-hour training coordination under Regulation 4 with IRDAI examination, Insurance Sales Person (ISP / ISMP) 25-hour sectoral certification under Regulation 12, 3-year business plan drafting, IRDAI online portal application filing with Fit and Proper declarations under Schedule II, insurer consent letter outreach and tie-up agreement negotiation (1 of 6 maximum under Regulation 3 - 2 life plus 2 general plus 2 health), Authority clarification responses, and post-registration compliance setup with first quarterly return template and Code of Conduct manual. CA + CS led; transparent fixed-fee tiers Rs 50,000 to Rs 1,25,000 across 4 engagement levels.",
      "serviceType": "Combined MCA Private Limited Company plus IRDAI Insurance Marketing Firm Registration",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Insurance Regulatory and Development Authority of India", "sameAs": "https://en.wikipedia.org/wiki/Insurance_Regulatory_and_Development_Authority" },
        { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "IMF Incorporation Engagement Tiers",
        "itemListElement": [
          { "@type": "Offer", "name": "Tier 1 - Lean Pvt Ltd Incorporation Only (SPICe+, DIN, DSC, IMF-tailored MoA, PAN, TAN, GSTIN, bank coordination)", "price": "50000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-incorporation-services" },
          { "@type": "Offer", "name": "Tier 2 - Standard Combined Pvt Ltd plus IRDAI Application Filing (capital infusion, Net Worth Certificate, PO training, 3-year plan, portal filing)", "price": "75000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-incorporation-services" },
          { "@type": "Offer", "name": "Tier 3 - Full Combined plus Initial Compliance (5 ISPs, 1 insurer consent letter, compliance manual, quarterly return template, Code of Conduct)", "price": "100000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-incorporation-services" },
          { "@type": "Offer", "name": "Tier 4 - Full Combined with Multi-Insurer Tie-Up Support (3 insurer tie-ups, 10 ISPs, branch expansion advisory, Year 1 audit and IRDAI returns)", "price": "115000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-incorporation-services" }
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
                        IMF Incorporation Services
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Combined MCA + IRDAI Scope:</span> Pvt Ltd (or LLP) incorporation plus IMF registration in one 120-day fixed-fee engagement. End-to-end SPICe+ filing, MoA Object Clause, DIN / DSC, capital infusion, PO certification, IRDAI portal.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rs 10 Lakh Net Worth:</span> Paid-up capital infusion under Regulation 6 IMF Regulations 2015; CA-certified Net Worth Certificate; PAS-3 allotment return filing; SH-1 share certificates within 2 months.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>3-Phase 120-Day Timeline:</span> Phase 1 Days 1-30 MCA setup; Phase 2 Days 30-90 IRDAI filing and processing; Phase 3 Days 90-120 ISP certification, insurer tie-ups, IMF Registration Certificate.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fixed-Fee Tiers:</span> Rs 50,000 to Rs 1,25,000 across 4 tiers with transparent itemisation of all Patron deliverables. Statutory pass-through fees (MCA, IRDAI, DSC, training, stamp duty) separately invoiced.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20Incorporation%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Patron's%20combined%20IMF%20incorporation%20engagement%20(Pvt%20Ltd%20or%20LLP%20plus%20IRDAI%20registration)%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20Patron's%20combined%20IMF%20incorporation%20engagement%20(Pvt%20Ltd%20plus%20IRDAI)." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - IMF Incorporation Services'/>
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
                                                                <option value="imf-incorporation-services" selected>IMF Incorporation Services</option>
                                <option value="insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</option>
                                <option value="imf-irdai-registration-process">IRDAI IMF Registration Process</option>
                                <option value="ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</option>
                                <option value="imf-compliance-retainer-services">IMF Compliance Retainer</option>
                                <option value="imf-private-limited-vs-llp">IMF Private Limited vs LLP</option>
                                <option value="private-limited-company-registration">Pvt Ltd Registration</option>
                                <option value="llp-registration">LLP Registration</option>
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth',block:'start'});">Pvt Ltd vs LLP</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">Founder Profiles</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">4 Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">Day-by-Day Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Common Mistakes</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">Fees and Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">120-Day Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Why Patron</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth',block:'start'});">Pvt Ltd vs LLP Matrix</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>















<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - Combined IMF Incorporation</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IMF Incorporation Services Services at a Glance</strong></p>
                    <p>Starting an Insurance Marketing Firm in India requires two parallel regulatory tracks - MCA incorporation under the Companies Act 2013 (most IMFs choose Private Limited Company; LLP under LLP Act 2008 is an alternative) and IRDAI registration under the IMF Regulations 2015. Patron's combined engagement runs both tracks in parallel on a 120-day fixed-fee basis. Days 1-30 cover MCA setup - name approval, SPICe+ filing, DIN and DSC, MoA Object Clause tailored for IMF activities, Rs 10 lakh paid-up capital infusion, PAN, TAN, GSTIN and bank account opening. Days 30-90 cover IRDAI workflow - Principal Officer 50-hour training, ISP certification, 3-year business plan, CA Net Worth Certificate, IRDAI portal application filing and Authority processing. Days 90-120 cover ISP completion, insurer tie-ups and post-registration setup. Fixed-fee tiers Rs 50,000 to Rs 1,25,000 cover all Patron deliverables; statutory fees pass-through.</p>
                </div>
                <p>Starting an Insurance Marketing Firm in India is a two-regulator engagement - MCA on the entity formation side and IRDAI on the IMF registration side. Founders often discover the complexity only after starting - the MoA Object Clause must specifically authorise insurance solicitation activities, capital must be infused as paid-up capital (not just subscribed) before the Net Worth Certificate stage, Principal Officer training takes 30-45 days and runs on a separate critical path from MCA work, and insurer consent letters take their own coordination time. Patron's combined engagement compresses the two tracks into a single 120-day fixed-fee project, with CA and CS coordination across MCA SPICe+, MoA drafting, DIN / DSC, capital infusion, PO training, IRDAI portal filing and post-registration compliance setup.</p>
                <p>This page covers the combined engagement scope, day-by-day timeline, fixed-fee tiers and selection between Pvt Ltd and LLP. Verify framework specifics through the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>; IMF registration specifics at the <a href="https://irdai.gov.in" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India</a>; entity name and SPICe+ filings through the <a href="https://www.mca.gov.in/MinistryV2/spicelpartainfo.html" target="_blank" rel="noopener">MCA SPICe+ portal</a>; PAN / TAN / income tax via the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>; GST registration through the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a>; auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>
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
                <h2 class="section-title">Why Most IMFs Choose Private Limited Company</h2>
                <div class="content-text what-is-definition">
                    
                                        <p>Although IRDAI IMF Regulations 2015 Regulation 2.2 permits Company, LLP and Cooperative Society as eligible entity types, the overwhelming majority of new IMFs in India - approximately 85 percent - choose the Private Limited Company structure. The reasons are practical and operational, anchored in capital mechanics, ownership clarity and counterparty recognition.</p>
                    <p><strong>Pvt Ltd Advantages for IMF Operations:</strong> Easier capital infusion mechanics - paid-up capital through share allotment is well-understood by founders, banks and IRDAI; cleaner ownership structure for future funding with private equity / founders / ISPs as shareholders fitting Pvt Ltd model naturally; established corporate governance through Board of Directors, Annual General Meeting and Special Resolution framework familiar to IRDAI; better recognition by insurer counterparties during tie-up negotiations - Pvt Ltd is the default counterparty type for IRDAI-registered insurers; standardised audit and compliance framework with statutory audit, ROC filings and Board minutes; easier to expand and add directors / shareholders / employees; conversion to Public Limited Company possible if scaling toward listing.</p>
                    <p><strong>When LLP Makes Sense Instead:</strong> Founders are professional partners (CA, advocate, financial advisor) preferring partnership-led structure; simpler annual compliance preferred (LLP has lighter ROC obligations); no plan for external equity funding; designated partners want flow-through tax treatment; family or closely-held business with stable partnership culture.</p>
                    <p><strong>IMF-Tailored MoA Object Clause:</strong> The Memorandum of Association Object Clause under Section 4 of the Companies Act 2013 defines what the company is permitted to do. For IMF entities, the Object Clause must specifically authorise activities aligned with IRDAI IMF Regulation 3 - insurance solicitation and procurement, financial product distribution through FSE, etc. A generic 'business services' Object Clause is insufficient and may attract IRDAI scrutiny at the application stage.</p>
                    <p><strong>The Combined Engagement Compression Advantage:</strong> The MCA track (incorporation, SPICe+, MoA / AoA, capital infusion, PAN / TAN / GSTIN) and the IRDAI track (PO 50-hour training, business plan, IRDAI portal application, insurer outreach) have substantial overlap if managed in parallel. Sequential approach extends total timeline by 30-45 days; Patron's parallel-track project management starts PO training enrolment on Day 1 alongside MCA work, with PO exam-ready by Day 50 and MCA setup complete - allowing IRDAI portal filing by Day 80.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IMF Incorporation Services:</strong></p>
                                        <ul style="margin-top:12px;">
                        <li><strong>SPICe+ (Simplified Proforma for Incorporating Company Electronically Plus):</strong> Integrated MCA form combining INC-32 (incorporation), INC-33 (MoA), INC-34 (AoA) with AGILE-PRO-S for PAN, TAN, GSTIN, EPFO, ESIC, Bank Account and Shops Act.</li>
                        <li><strong>DIN (Director Identification Number):</strong> Unique 8-digit number under Section 153 Companies Act 2013 plus Rule 9 Companies (Appointment and Qualification of Directors) Rules 2014. Allotted via SPICe+ INC-32 for first directors or DIR-3 for additional directors.</li>
                        <li><strong>DSC (Digital Signature Certificate):</strong> Class 3 DSC under Information Technology Act 2000 required for signing MCA / IRDAI / IT e-forms. Issued by CCA-licensed Certifying Authorities like eMudhra, Sify, NSDL, IDRBT, NCode, Capricorn.</li>
                        <li><strong>MoA Object Clause:</strong> Memorandum of Association under Section 4 Companies Act 2013 defining permitted activities. IMF-specific Object Clause aligned with IRDAI Regulation 3 IMF Regulations 2015 prevents application scrutiny.</li>
                        <li><strong>Paid-Up Capital:</strong> Capital actually received from shareholders against allotted shares. Rs 10 lakh paid-up required under Regulation 6 IMF Regulations 2015 for general operation; Rs 5 lakh single-district route.</li>
                        <li><strong>PAS-3 Allotment Return:</strong> ROC return under Section 39(4) Companies Act 2013 plus Rule 12 Companies (Share Capital and Debentures) Rules 2014 filed within 30 days of share allotment.</li>
                        <li><strong>CA Net Worth Certificate:</strong> Chartered Accountant certificate confirming entity net worth based on paid-up capital plus free reserves minus accumulated losses and intangibles. Mandatory at IRDAI application stage.</li>
                        <li><strong>Principal Officer (PO):</strong> Designated officer of the IMF responsible for compliance under Regulation 4 IMF Regulations 2015. Indian resident, 18+ years, degree holder, 50-hour IRDAI training plus examination plus Fit and Proper.</li>
                        <li><strong>Insurance Sales Person (ISP) / ISMP:</strong> Sales executive certified under Regulation 12 IMF Regulations 2015 with 25-hour sectoral training (Life, General, Health). At least 2 ISPs required; minimum varies by insurer mix and business plan scope.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IMF Incorporation Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Combined</span>
                        <strong>Pvt Ltd + IRDAI in 120 Days</strong>
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
            <h2 class="section-title">IMF Founder Profiles Patron Serves</h2>
            <div class="content-text">
                
                                <p>Patron's IMF incorporation engagement is calibrated to a range of founder profiles - united by the common requirement of combined entity formation and IRDAI registration. Tier selection matches operational ambition rather than founder background alone.</p>
                <ul>
                    <li><strong>Aspiring IMF Founders Ready to Start:</strong> First-time entrepreneurs entering the insurance distribution space with capital and operational intent ready. Tier 2 or Tier 3 typical with combined Pvt Ltd plus IRDAI scope.</li>
                    <li><strong>Financial Advisors Planning Insurance Entry:</strong> Wealth advisors, financial planners or MFDs adding IMF as adjacent revenue stream. Tier 3 with full setup including initial compliance setup typical.</li>
                    <li><strong>Existing Individual Agents Upgrading to Corporate Model:</strong> Successful LIC or private insurer agents incorporating their practice under corporate structure for tax efficiency, recruitment of ISPs and brand building.</li>
                    <li><strong>Family Offices Building Distribution Arm:</strong> Family office wealth managers adding insurance distribution capability to existing investment advisory; Tier 3 or Tier 4 typical given multi-insurer ambitions.</li>
                    <li><strong>Sub-Broker Firms Migrating to IMF Model:</strong> Stock-broking sub-brokers diversifying revenue through insurance addition; LLP or Pvt Ltd depending on existing structure.</li>
                    <li><strong>NBFC Distribution Subsidiaries:</strong> NBFCs setting up dedicated subsidiary for insurance distribution; Tier 4 typical with multi-insurer tie-up support.</li>
                    <li><strong>Two-Partner CA / Advocate Firms:</strong> Professional partnership firms adding insurance distribution; LLP route common; Tier 3 with combined engagement.</li>
                    <li><strong>Existing Companies Adding IMF Objects:</strong> Already-incorporated Pvt Ltd or LLP entities adding IMF activity through Special Resolution and Form MGT-14 filing; tier scope adapted.</li>
                </ul>
                <p><strong>Tier Selection Driven by Operational Ambition:</strong> Tier 1 (Pvt Ltd only) suits founders who want to handle IRDAI engagement separately. Tier 2 covers entity formation plus IRDAI filing. Tier 3 includes 5 ISPs and 1 insurer tie-up plus compliance manual. Tier 4 expands to 3 insurer tie-ups, 10 ISPs, branch advisory and Year 1 audit / IRDAI returns coordination.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron IMF Incorporation Service Coverage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Tier 1 - Lean Pvt Ltd Incorporation Only (Rs 50,000)</td>
                            <td>Pvt Ltd incorporation via SPICe+ - INC-32, INC-33, INC-34, AGILE-PRO-S. DIN and DSC for 2 directors. IMF-tailored MoA Object Clause drafting. PAN, TAN, GSTIN registration. Bank account opening coordination. First Board Meeting minutes and resolutions. Suitable for founders handling IRDAI workflow separately.</td>
                            <td><span class="badge-included">Pvt Ltd Only</span></td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Standard Combined Pvt Ltd plus IRDAI (Rs 75,000-90,000)</td>
                            <td>All Tier 1 deliverables plus Rs 10 lakh paid-up capital infusion coordination, CA Net Worth Certificate, Principal Officer 50-hour training enrolment coordination, 3-year business plan drafting, IRDAI online portal application filing, response to IRDAI clarifications. Standard combined engagement.</td>
                            <td><span class="badge-included">Combined</span></td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Full Combined plus Initial Compliance (Rs 1,00,000-1,15,000)</td>
                            <td>All Tier 2 deliverables plus Insurance Sales Person (ISP / ISMP) onboarding for up to 5 ISPs (training coordination and certification), insurer consent letter outreach and negotiation for 1 of 6 tie-ups, internal compliance manual drafting, first quarterly compliance return template, Customer disclosure and Code of Conduct documentation.</td>
                            <td><span class="badge-included">Full</span></td>
                        </tr>
                        <tr>
                            <td>Tier 4 - Full Combined with Multi-Insurer Tie-Up (Rs 1,15,000-1,25,000)</td>
                            <td>All Tier 3 deliverables plus insurer tie-up agreement negotiation and execution support for up to 3 insurers (mix of life, general, health), additional ISPs (up to 10 total) training coordination, branch office or multi-district expansion advisory, first-year statutory audit coordination, first-year IRDAI quarterly returns preparation.</td>
                            <td><span class="badge-included">Premium</span></td>
                        </tr>
                        <tr>
                            <td>LLP Variant (Alternative to Pvt Ltd)</td>
                            <td>All four tiers available with LLP entity instead of Pvt Ltd at equivalent pricing. LLP route requires Form FiLLiP filing, LLP Agreement drafting, designated partner appointments and LLP-specific net worth certification. Patron's LLP route deliverables mirror Pvt Ltd track with applicable adaptations.</td>
                            <td><span class="badge-included">Alternative</span></td>
                        </tr>
                        <tr>
                            <td>IMF-Tailored MoA Object Clause Drafting</td>
                            <td>IMF-specific Object Clause covering - acting as IMF under IMF Regulations 2015, soliciting insurance from life / general / health insurers, servicing policies, distributing financial products via FSE, insurance consultancy and risk advisory, ancillary IRDAI-permitted activities. Survives IRDAI scrutiny at application stage.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Rs 10 Lakh Paid-Up Capital Coordination</td>
                            <td>Authorised capital setting in MoA, subscriber sheet drafting, paid-up infusion through bank transfer, Board allotment resolution, Form PAS-3 ROC return within 30 days under Section 39(4), SH-1 share certificates within 2 months, CA Net Worth Certificate at IRDAI application stage.</td>
                            <td><span class="badge-included">Tier 2 + 3 + 4</span></td>
                        </tr>
                        <tr>
                            <td>Principal Officer 50-Hour Training Coordination</td>
                            <td>PO enrolment at IRDAI-approved institute under Regulation 4 IMF Regulations 2015, training schedule alignment with engagement timeline, examination booking and certification follow-up, Fit and Proper declaration drafting under Schedule II.</td>
                            <td><span class="badge-included">Tier 2 + 3 + 4</span></td>
                        </tr>
                        <tr>
                            <td>Insurance Sales Person (ISP / ISMP) Onboarding</td>
                            <td>ISP shortlisting from founder's network, 25-hour sectoral training enrolment per ISP under Regulation 12, sectoral certification (Life or General or Health), KYC and Fit and Proper declarations, internal appointment letters. Tier 3 covers 5 ISPs; Tier 4 up to 10.</td>
                            <td><span class="badge-included">Tier 3 + 4</span></td>
                        </tr>
                        <tr>
                            <td>Insurer Consent Letter Outreach and Tie-Up Negotiation</td>
                            <td>Coordinated outreach to insurer counterparties (HDFC Life, Max Life, ICICI Pru, Tata AIA, Niva Bupa, Care Health, ICICI Lombard etc.) for consent letters and progression to formal tie-up agreements. Tier 3 covers 1 tie-up; Tier 4 covers up to 3 tie-ups across life / general / health.</td>
                            <td><span class="badge-included">Tier 3 + 4</span></td>
                        </tr>
                        <tr>
                            <td>Post-Registration Compliance Setup</td>
                            <td>First quarterly return template, internal compliance manual, customer disclosure templates, Code of Conduct documentation, statutory book-keeping kickoff, GST registration if applicable, annual audit and ITR planning calendar.</td>
                            <td><span class="badge-included">Tier 3 + 4</span></td>
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
            <h2 class="section-title">Patron 8-Phase Combined IMF Incorporation Engagement</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured 120-day workflow running MCA Pvt Ltd / LLP and IRDAI IMF registration tracks in parallel - Phase 1 entity formation Days 1-30, Phase 2 IRDAI workflow Days 30-90 (with PO training starting Day 1), Phase 3 ISP certification plus insurer tie-ups Days 90-120, and Tier 4 first-year compliance retainer through Day 365.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Engagement Kickoff and KYC</h3>
                    <p class="step-description">
                        Day 1. Patron team allocation; KYC of proposed directors / shareholders; engagement letter signed; tier selection (Tier 1 / 2 / 3 / 4); entity decision (Pvt Ltd or LLP); name suggestions; PO designate identification.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Engagement live
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Tier locked
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="22" fill="none" stroke="#14365F" stroke-width="2"/>
                                <line x1="68" y1="68" x2="92" y2="92" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                                <text x="50" y="55" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">KYC</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Onboarded</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">DSC + Name Approval via SPICe+ Part A</h3>
                    <p class="step-description">
                        Days 2-8. DSC procurement for 2 directors (Class 3 from eMudhra / Sify / NSDL); MCA SPICe+ Part A filing - up to 2 names with IMF / Insurance / Marketing references aligned with IRDAI nomenclature; name approval received (valid 20 days).
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            DSC issued
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Name reserved
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="44" font-size="11" fill="#14365F" text-anchor="middle" font-weight="700">SPICe+</text>
                                <text x="60" y="62" font-size="11" fill="#F5A623" text-anchor="middle" font-weight="700">Part A</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Name OK</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">SPICe+ Part B - MoA / AoA + DIN + Incorporation</h3>
                    <p class="step-description">
                        Days 9-17. SPICe+ Part B drafting - MoA INC-33 with IMF-tailored Object Clause, AoA INC-34, DIR-2 (Consent of Directors), INC-9 (Declaration). SPICe+ Part B filing with DIN application for first 2 directors plus AGILE-PRO-S for PAN / TAN / GSTIN / EPFO / ESIC / Bank / Shops Act. CoI received.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            CoI received
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            DIN allotted
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="40" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">MoA + AoA</text>
                                <text x="60" y="62" font-size="10" fill="#F5A623" text-anchor="middle" font-weight="700">CoI Live</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Live Entity</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Capital Infusion + PAS-3 + Net Worth</h3>
                    <p class="step-description">
                        Days 18-25. Bank account opened (current account); Rs 10 lakh paid-up capital transfer by shareholders; First Board Meeting passes allotment resolution; Form PAS-3 ROC return filed within 30 days under Section 39(4); SH-1 share certificates issued; CA Net Worth Certificate prepared.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Capital paid
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Net worth cert
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="32" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="48" font-size="14" fill="#14365F" text-anchor="middle" font-weight="700">Rs 10L</text>
                                <text x="60" y="64" font-size="9" fill="#14365F" text-anchor="middle">Paid-Up</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Capital Set</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">PO Training (Parallel - Day 1 Start)</h3>
                    <p class="step-description">
                        Days 1-50 (parallel). Principal Officer 50-hour training enrolment at IRDAI-approved institute starts Day 1 alongside MCA work. 2-3 weeks contact; IRDAI certification examination Day 50-55; results 7-10 days. Parallel approach compresses 30-45 days versus sequential.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            PO certified
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Parallel track
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="40" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">50-HOUR</text>
                                <text x="60" y="62" font-size="10" fill="#F5A623" text-anchor="middle" font-weight="700">PASSED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Certified</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">ISP Onboarding + Insurer Outreach</h3>
                    <p class="step-description">
                        Days 30-65. ISP shortlisting and 25-hour sectoral training enrolment (Life or General or Health) for 5 ISPs (Tier 3) / 10 ISPs (Tier 4). Insurer consent letter outreach starts Day 50 - HDFC Life, Max Life, Niva Bupa, ICICI Lombard depending on tier mix.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ISPs onboarded
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Letters received
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
                        <span class="illustration-label">Team Set</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">IRDAI Portal Application Filing</h3>
                    <p class="step-description">
                        Days 75-85. 25+ document compilation - PO Pass Certificate, CA Net Worth Certificate, Schedule II Fit and Proper, insurer consent letters, 3-year business plan, organisation chart, office photographs, Board Resolutions. IRDAI online portal application; Rs 5,000 application fee; clarification handling Day 82-90.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Application filed
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ARN received
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
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Tie-Up Execution + Certificate + Year 1 (Tier 4)</h3>
                    <p class="step-description">
                        Days 90-365. ISP certification examinations complete; insurer tie-up agreements moved from consent letter to formal execution; IRDAI Registration Certificate received around Day 115-120 (3-year validity); post-registration compliance handover - quarterly return template, compliance manual, Code of Conduct. Tier 4 includes Year 1 audit and IRDAI returns.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Cert received
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Operations live
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
            <h2 class="section-title">Document Checklist for Combined IMF Incorporation</h2>
            <div class="content-text">
                
                                <p>For an effective combined IMF incorporation engagement, the following documents should be ready. Patron coordinates pickup of physical documents via courier from any Indian location; digital documents collected over WhatsApp / email.</p>
                <ul>
                    <li>Director / shareholder 1 PAN card, Aadhaar, photograph, mobile and email verification</li>
                    <li>Director / shareholder 2 PAN card, Aadhaar, photograph, mobile and email verification</li>
                    <li>Address proof of all directors / shareholders (utility bill / bank statement / passport, within 2 months)</li>
                    <li>Photograph of directors (passport size, clear background) for DIR-2 and SH-1</li>
                    <li>Existing DIN (if any director already has one) plus DIR-3 KYC current-year status</li>
                    <li>Registered office address - rental agreement (if rented), latest utility bill (electricity / telephone / property tax), NOC from owner if rented</li>
                    <li>Registered office photographs (interior + exterior + signboard with company name once signed) - for IRDAI infrastructure compliance</li>
                    <li>Capital plan - Rs 10 lakh paid-up capital arrangement (which director / shareholder contributing how much)</li>
                    <li>Bank account opening preference - which banker (HDFC, ICICI, Axis, SBI, Kotak etc.) plus branch</li>
                    <li>Principal Officer documents - educational qualifications certificates (graduation minimum), professional certifications (CA / CFA / CFP / NISM / existing IRDAI exams), experience certificates from prior employers</li>
                    <li>Principal Officer Fit and Proper declaration (Form A Schedule II IMF Regulations 2015)</li>
                    <li>3 reference letters - typically from senior industry connections, banker, existing CA / Auditor</li>
                    <li>ISP candidates list (Tier 3 / 4) - 5 to 10 candidates with educational and experience details</li>
                    <li>3-year business plan inputs - product mix preference, geographic scope, ISP scaling plan, target client segments, revenue projection</li>
                    <li>Insurer preference list - which insurers founder wants tie-ups with (Patron handles outreach in Tier 3 / 4)</li>
                </ul>
                <p style="margin-top:16px;">Verify framework specifics through the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>; IMF registration specifics at the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a> and the <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI IMF portal</a>; entity name reservations at the <a href="https://www.mca.gov.in/MinistryV2/spicelpartainfo.html" target="_blank" rel="noopener">MCA SPICe+ portal</a>. PAN / TAN / income tax via the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. GST registration through the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IMF Incorporation Mistakes Patron Helps You Avoid</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>PO Training Started After Incorporation Rather Than in Parallel</td>
                            <td>Sequential approach (incorporate first, then start PO training) extends total timeline by 30-45 days. Founders lose 1-2 months of revenue start and tie-up window narrows.</td>
                            <td>Patron's parallel-track approach starts PO 50-hour training enrolment on Day 1 alongside MCA work. By Day 50, PO is exam-ready while MCA setup is complete. Compressed total timeline.</td>
                        </tr>
                        <tr>
                            <td>MoA Object Clause Too Generic</td>
                            <td>Generic 'business consultancy' or 'financial services' Object Clause is insufficient for IMF activities and attracts IRDAI scrutiny at the application stage. Clarification queries delay registration.</td>
                            <td>Patron drafts IMF-specific Object Clause with explicit IRDAI Regulation 3 cross-references covering insurance solicitation, FSE distribution, premium collection, claims facilitation, and ancillary IRDAI-permitted activities.</td>
                        </tr>
                        <tr>
                            <td>Capital Infused as Loan Rather Than Equity</td>
                            <td>Net worth under Regulation 6 requires equity capital (paid-up shares plus free reserves), not borrowed funds. Founders sometimes transfer Rs 10 lakh as 'loan from director' which does not count toward net worth - CA Net Worth Certificate fails.</td>
                            <td>Patron structures the capital infusion as Board-approved share allotment - increases authorised capital, processes paid-up subscription, files PAS-3 within 30 days, issues SH-1 share certificates. Equity capital properly recognised.</td>
                        </tr>
                        <tr>
                            <td>Bank Account Opened but Capital Not Infused Before CA Certificate</td>
                            <td>CA Net Worth Certificate is based on bank balance at certificate date. Some founders open account but delay capital transfer waiting for 'right time'. Certificate then fails or shows under Rs 10 lakh.</td>
                            <td>Patron coordinates capital transfer immediately after account opening so certificate can be issued without delay. Bank account, capital transfer, Board allotment and PAS-3 all sequenced tightly within Days 18-25 of engagement.</td>
                        </tr>
                        <tr>
                            <td>Form PAS-3 Allotment Return Missed</td>
                            <td>Section 39(4) plus Rule 12 require PAS-3 return within 30 days of share allotment. Missing this creates inchoate capital structure and may invite ROC default penalty. IRDAI may treat capital as not properly infused.</td>
                            <td>Patron files PAS-3 within 7 days of Board allotment resolution - well within the 30-day statutory window. PAS-3 acknowledgement attached to CA Net Worth Certificate as proof of compliant capital structure.</td>
                        </tr>
                        <tr>
                            <td>Insurer Consent Letter Delayed Past Day 60</td>
                            <td>Insurer consent letter outreach takes 15-30 days minimum. Starting late delays IRDAI application by the same period. Sequential approach (outreach after MCA setup) creates time loss.</td>
                            <td>Patron initiates insurer outreach by Day 50 to align with documentation timeline. Consent letters typically received by Day 65-75. IRDAI application can therefore file by Day 80 without delay.</td>
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
            <h2 class="section-title">Patron Fees for Combined IMF Incorporation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Free IMF Incorporation Scoping Call</td>
                            <td>Free - 30-minute scoping call plus tier recommendation plus indicative timeline; response within 4 hours; video / phone / WhatsApp</td>
                        </tr>
                        <tr>
                            <td>Patron Accounting Professional Fees (entry-level diagnostic add-on)</td>
                            <td>Starting from INR 2,999 (Exl GST and Govt. Charges) for initial diagnostic plus tier scoping document; credit applied if Tier 1 / 2 / 3 / 4 engaged within 30 days</td>
                        </tr>
                        <tr>
                            <td>Tier 1 - Lean Pvt Ltd Incorporation Only (one-time)</td>
                            <td>Rs 50,000 (excl. GST and statutory pass-through fees) - SPICe+ filing INC-32 / 33 / 34, DIN / DSC for 2 directors, IMF-tailored MoA, PAN / TAN / GSTIN, bank coordination, First Board Meeting minutes</td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Standard Combined Pvt Ltd plus IRDAI (one-time)</td>
                            <td>Rs 75,000 to Rs 90,000 (excl. GST) - all Tier 1 plus Rs 10 lakh capital infusion coordination, CA Net Worth Certificate, PO 50-hour training coordination, 3-year business plan, IRDAI portal filing, clarification responses</td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Full Combined plus Initial Compliance (one-time)</td>
                            <td>Rs 1,00,000 to Rs 1,15,000 (excl. GST) - all Tier 2 plus 5 ISPs onboarding (25-hour sectoral training each), 1 insurer consent letter outreach and tie-up negotiation, internal compliance manual, first quarterly return template, Code of Conduct documentation</td>
                        </tr>
                        <tr>
                            <td>Tier 4 - Full Combined with Multi-Insurer Tie-Up</td>
                            <td>Rs 1,15,000 to Rs 1,25,000 (excl. GST) - all Tier 3 plus 3 insurer tie-up agreements (life / general / health mix), up to 10 ISPs, branch / multi-district expansion advisory, Year 1 statutory audit coordination, Year 1 IRDAI quarterly returns preparation</td>
                        </tr>
                        <tr>
                            <td>LLP Variant (Alternative to Pvt Ltd)</td>
                            <td>Same pricing as Tier 1 / 2 / 3 / 4 with LLP entity instead of Pvt Ltd - Form FiLLiP filing, LLP Agreement drafting, designated partner appointments, LLP-specific net worth certification</td>
                        </tr>
                        <tr>
                            <td>SPICe+ Statutory Pass-Through Fees</td>
                            <td>Pass-through - MCA SPICe+ form fees Rs 5,000-10,000 depending on state; DSC Rs 1,200-2,500 per director (2 directors); stamp duty Rs 1,000-5,000 depending on state; total approximately Rs 8,000-20,000</td>
                        </tr>
                        <tr>
                            <td>IRDAI Application Fee (Pass-Through)</td>
                            <td>Rs 5,000 - non-refundable IRDAI application fee paid at portal filing stage</td>
                        </tr>
                        <tr>
                            <td>PO 50-Hour Training (Pass-Through)</td>
                            <td>Rs 8,000 to Rs 15,000 plus examination fees - paid directly to IRDAI-approved training institute; varies by institute and location</td>
                        </tr>
                        <tr>
                            <td>ISP 25-Hour Sectoral Training (Pass-Through, Per ISP)</td>
                            <td>Rs 3,000 to Rs 5,000 per ISP plus exam fees - sectoral training (Life or General or Health); Tier 3 covers 5 ISPs; Tier 4 up to 10</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IMF Incorporation Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20Patron's%20combined%20IMF%20incorporation%20engagement%20-%20please%20share%20scoping%20call%20availability%20and%20tier%20comparison." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">120-Day Combined IMF Incorporation Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Phase 0 - Engagement Kickoff</td>
                            <td>Day 1 - Patron team allocation, KYC of directors / shareholders, engagement letter signed, tier selection, entity decision (Pvt Ltd or LLP), name suggestions, PO designate identification</td>
                        </tr>
                        <tr>
                            <td>Phase 1A - DSC + Name Approval</td>
                            <td>Days 2-8 - DSC procurement Class 3 for 2 directors; MCA SPICe+ Part A filing with IMF / Insurance / Marketing names; name approval received (20-day validity)</td>
                        </tr>
                        <tr>
                            <td>Phase 1B - PO Training (Parallel)</td>
                            <td>Days 1-50 (parallel start Day 1) - Principal Officer 50-hour training at IRDAI-approved institute; certification examination Day 50-55; results Day 60-65</td>
                        </tr>
                        <tr>
                            <td>Phase 1C - SPICe+ Part B Incorporation</td>
                            <td>Days 9-17 - SPICe+ Part B drafting (MoA INC-33, AoA INC-34, DIR-2, INC-9); SPICe+ Part B filing with DIN application plus AGILE-PRO-S for PAN / TAN / GSTIN / EPFO / ESIC; ROC processing; Certificate of Incorporation</td>
                        </tr>
                        <tr>
                            <td>Phase 1D - Capital Infusion + Board Meeting</td>
                            <td>Days 18-30 - PAN / TAN received; bank account opened; Rs 10 lakh paid-up capital transfer; First Board Meeting; allotment resolution; SH-1 share certificates; PAS-3 ROC return; CA Net Worth Certificate</td>
                        </tr>
                        <tr>
                            <td>Phase 2A - Business Plan + ISP Outreach</td>
                            <td>Days 30-65 - 3-year business plan drafting; ISP shortlisting and 25-hour sectoral training enrolment for 5 ISPs (Tier 3) or 10 ISPs (Tier 4); insurer consent letter outreach starts Day 50</td>
                        </tr>
                        <tr>
                            <td>Phase 2B - Office Infrastructure + Documentation</td>
                            <td>Days 60-80 - office lease finalisation, photographs, signboard; organisation chart; manpower documentation; Fit and Proper declarations for PO and directors; Schedule II compliance</td>
                        </tr>
                        <tr>
                            <td>Phase 3A - IRDAI Application Filing</td>
                            <td>Days 80-85 - 25+ document compilation; IRDAI online portal application; Rs 5,000 application fee; ARN received</td>
                        </tr>
                        <tr>
                            <td>Phase 3B - IRDAI Processing</td>
                            <td>Days 85-115 - Authority initial review; clarification queries (if any) responded by Patron; final decision; IMF Registration Certificate received</td>
                        </tr>
                        <tr>
                            <td>Phase 4 - ISP Certification + Tie-Up Execution</td>
                            <td>Days 90-120 - ISP certification examinations complete; insurer tie-up agreements moved from consent to formal execution (1 in Tier 3; up to 3 in Tier 4); operations launch ready</td>
                        </tr>
                        <tr>
                            <td>Phase 5 - Tier 4 Year 1 Compliance Retainer</td>
                            <td>Days 130-365 (Tier 4 only) - quarterly check-ins, half-yearly IRDAI returns, ROC trio (AOC-4, MGT-7), ITR-6, GST, ISP CPD tracking, statutory audit coordination, additional insurer tie-ups</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Parallel-Track Compression:</strong> The 120-day combined engagement is achievable because Patron runs MCA and IRDAI tracks in parallel. PO 50-hour training (Days 1-50), MCA SPICe+ work (Days 1-30), business plan and ISP outreach (Days 30-65), and insurer consent letters (Days 50-75) overlap rather than queue sequentially. By Day 80, all inputs for IRDAI portal filing are ready. IRDAI processing typically takes 30-45 days. Complex cases with multiple Fit and Proper queries, insurer counterparty issues or PO re-examination needs may extend to 150 days. Year 1 first quarterly return is due 30 days after end of first quarter post-registration; Patron's Tier 4 retainer handles this seamlessly.</p>

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
            <h2 class="section-title">Why Patron for Combined IMF Incorporation</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="feature-title">Fixed-Fee Transparency Across 4 Tiers</h3>
                <p class="feature-description">Rs 50,000 to Rs 1,25,000 across 4 tiers with all Patron deliverables clearly itemised in engagement letter. Statutory pass-through fees (MCA forms, DSC, IRDAI fee, training, stamp duty) separately invoiced. No hidden costs. LLP variant at equivalent pricing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 class="feature-title">Single Firm CA + CS Coordination</h3>
                <p class="feature-description">No scattered hand-offs between incorporation lawyer, CS firm and IRDAI agent. Patron handles SPICe+, MoA drafting, capital infusion, PAS-3, CA Net Worth Certificate, PO training, IRDAI portal filing and post-registration compliance under single accountable engagement.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 class="feature-title">Parallel-Track Project Management</h3>
                <p class="feature-description">PO 50-hour training started Day 1 alongside MCA work; insurer outreach Day 50 alongside ISP onboarding. Compresses 30-45 days from sequential approach. By Day 80, all IRDAI portal inputs ready; Certificate by Day 115-120.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="feature-title">IMF-Tailored MoA Object Clause</h3>
                <p class="feature-description">Drafted with IRDAI Regulation 3 cross-references covering insurance solicitation, FSE distribution, premium collection, claims facilitation, consultancy, survey work and ancillary activities. Survives Authority scrutiny at application stage.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg>
                </div>
                <h3 class="feature-title">Rs 10 Lakh Paid-Up Capital Coordination</h3>
                <p class="feature-description">Banking, allotment, PAS-3 filing under Section 39(4) plus Rule 12, SH-1 share certificates within 2 months, and CA Net Worth Certificate in single workflow. Equity capital properly recognised - not classified as director loan.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="feature-title">15+ Years Across MCA, IRDAI, RBI</h3>
                <p class="feature-description">Direct IRDAI portal filing experience with clean clarification responses; offices in Pune, Mumbai, Delhi, and Gurugram with pan-India remote engagement. Post-registration handover includes quarterly return template, compliance manual and Code of Conduct.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by IMF Founders Across India</h2>
            <div class="content-text">
                
                                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years in Practice</p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:24px;">
                    <div style="padding:20px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"I had been a top life insurance agent for 12 years and wanted to start my own IMF Pvt Ltd. Patron handled everything - incorporation Day 1-15, my PO training enrolled Day 2, IRDAI application filed Day 80, registration certificate Day 118. Total fee Rs 95,000 fixed - no surprises."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Founder, IMF Pvt Ltd in Tamil Nadu (Tier 2, ex-agent)</p>
                    </div>
                    <div style="padding:20px;background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"We were two CA partners wanting to add insurance distribution to our existing financial advisory practice. Patron set up the LLP, coordinated my partner's PO training, got us a consent letter from a major health insurer, and we received IMF registration in 4 months. Combined engagement was Rs 1,10,000 - we would have paid 2x dealing with separate firms."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Managing Partner, CA firm-led IMF LLP in Karnataka (Tier 3)</p>
                    </div>
                </div>

                <p style="margin-top:24px;"><strong>Client Roster:</strong> IMF incorporation engagements completed for individual founders, multi-partner firms, financial advisor groups, NBFC distribution arms, family offices and sub-broker firms migrating to IMF model. Geography mix - Tier 1 metros (Mumbai, Delhi, Bangalore, Chennai) plus Tier 2-3 cities (Indore, Pune, Coimbatore, Kochi, Hyderabad outskirts).</p>

                <p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves IMF founders across India - both in-person and remotely. Pan-India remote engagement model uses video consultations, courier-based document collection, DSC delivery anywhere, and digital MCA / IRDAI / GST filings.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd vs LLP - IMF Entity Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>Private Limited Company</th><th>Limited Liability Partnership (LLP)</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Governing Law</td>
                            <td>Companies Act 2013</td>
                            <td>LLP Act 2008</td>
                        </tr>
                        <tr>
                            <td>Minimum Members</td>
                            <td>2 shareholders + 2 directors (can be same persons)</td>
                            <td>2 designated partners</td>
                        </tr>
                        <tr>
                            <td>Capital Concept</td>
                            <td>Paid-up share capital - clear quantum</td>
                            <td>Capital contribution per LLP Agreement - more flexible</td>
                        </tr>
                        <tr>
                            <td>Net Worth Mechanic for IMF (Rs 10 Lakh)</td>
                            <td>Easier - direct paid-up capital infusion</td>
                            <td>Possible - capital contribution plus reserves; requires LLP-specific drafting</td>
                        </tr>
                        <tr>
                            <td>Annual Compliance</td>
                            <td>Statutory audit + ROC filings (AOC-4 + MGT-7) + ITR</td>
                            <td>Statutory audit if turnover above Rs 40 lakh + Form 8 + Form 11 + ITR</td>
                        </tr>
                        <tr>
                            <td>Ownership Transfer</td>
                            <td>Share transfer via SH-4; relatively simple</td>
                            <td>LLP Agreement amendment required</td>
                        </tr>
                        <tr>
                            <td>Future Equity Funding</td>
                            <td>Suitable - VC / PE friendly</td>
                            <td>Less suitable - VCs prefer Pvt Ltd</td>
                        </tr>
                        <tr>
                            <td>Insurer Counterparty Recognition</td>
                            <td>High - default counterparty type</td>
                            <td>Moderate - some insurers prefer Pvt Ltd</td>
                        </tr>
                        <tr>
                            <td>Audit Cost</td>
                            <td>Higher - mandatory audit</td>
                            <td>Lower - audit only if turnover above threshold</td>
                        </tr>
                        <tr>
                            <td>Compliance Cost</td>
                            <td>Higher</td>
                            <td>Lower</td>
                        </tr>
                        <tr>
                            <td>IRDAI Application Treatment</td>
                            <td>Standard - well-documented precedent</td>
                            <td>Standard - well-documented precedent</td>
                        </tr>
                        <tr>
                            <td>Recommended For</td>
                            <td>85 percent of IMF founders; default choice</td>
                            <td>Specific scenarios (partnership culture, simpler compliance preferred)</td>
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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                                <p>IMF Incorporation is the bottom-of-funnel transactional engagement in Patron's IMF cluster. Related services support before, during and after incorporation:</p>
                <ul>
                    <li>Parent service: <a href="/insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</a> - master hub covering all IMF cluster services.</li>
                    <li><a href="/imf-irdai-registration-process">IRDAI IMF Registration Process</a> - standalone IRDAI registration if entity already exists.</li>
                    <li><a href="/ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</a> - Principal Officer training and ISP coordination.</li>
                    <li><a href="/imf-compliance-retainer-services">IMF Compliance Retainer Services</a> - ongoing annual compliance after setup.</li>
                    <li><a href="/imf-private-limited-vs-llp">IMF Private Limited vs LLP</a> - detailed entity selection guide.</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - general Pvt Ltd incorporation (for non-IMF needs).</li>
                    <li><a href="/llp-registration">LLP Registration</a> - general LLP incorporation (LLP alternative for IMF entity).</li>
                    <li><a href="/one-person-company-registration">One Person Company Registration</a> - OPC route for single-founder structures (subject to IRDAI approval).</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - annual audit of IMF entity post-incorporation.</li>
                    <li><a href="/income-tax-return-filing">Income Tax Return Filing</a> - ITR for IMF entity and directors.</li>
                    <li><a href="/gst-registration">GST Registration</a> - GST registration where commission turnover applies.</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - brand protection for IMF entity name and logo.</li>
                </ul>
                <p style="margin-top:16px;">Verify framework specifics through the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>; IMF registration specifics at the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a>. PAN / TAN / income tax via the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. GST registration through the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

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
                
                                <p><strong>Governing Statutes and Regulations:</strong> Companies Act 2013, LLP Act 2008, Insurance Act 1938, IRDAI (Registration of Insurance Marketing Firm) Regulations 2015, Information Technology Act 2000, Income Tax Act 1961, and GST Act 2017.</p>
                <ul>
                    <li><strong>Section 3 Companies Act 2013:</strong> Formation of company.</li>
                    <li><strong>Section 4 Companies Act 2013:</strong> Memorandum of Association (MoA) and Object Clause.</li>
                    <li><strong>Section 5 Companies Act 2013:</strong> Articles of Association (AoA).</li>
                    <li><strong>Section 7 Companies Act 2013:</strong> ROC incorporation process and Certificate of Incorporation.</li>
                    <li><strong>Section 39 Companies Act 2013:</strong> Allotment of securities (PAS-3 within 30 days).</li>
                    <li><strong>Section 152 Companies Act 2013:</strong> Appointment of directors.</li>
                    <li><strong>Section 153 Companies Act 2013:</strong> Application for allotment of DIN.</li>
                    <li><strong>Section 173 Companies Act 2013:</strong> First Board Meeting within 30 days of incorporation.</li>
                    <li><strong>Rule 9 Companies (Appointment and Qualification of Directors) Rules 2014:</strong> DIN allotment procedure.</li>
                    <li><strong>Rule 12 Companies (Share Capital and Debentures) Rules 2014:</strong> PAS-3 allotment return.</li>
                    <li><strong>MCA SPICe+ INC-32 / INC-33 / INC-34:</strong> Integrated incorporation form.</li>
                    <li><strong>AGILE-PRO-S Integration:</strong> PAN, TAN, GSTIN, EPFO, ESIC, Bank Account, Shops Act through single workflow.</li>
                    <li><strong>Form DIR-2:</strong> Consent of Directors.</li>
                    <li><strong>Form DIR-3 KYC:</strong> Annual director KYC by 30 September.</li>
                    <li><strong>Form INC-9:</strong> Affidavit / Declaration at incorporation.</li>
                    <li><strong>Form INC-22:</strong> Registered office change within 15 days under Section 12.</li>
                    <li><strong>Form MGT-14:</strong> Special Resolution filing for MoA amendment (to add IMF objects to existing entity).</li>
                    <li><strong>LLP Act 2008:</strong> LLP formation alternative; Form FiLLiP and LLP-3 Agreement.</li>
                    <li><strong>IRDAI (Registration of Insurance Marketing Firm) Regulations 2015:</strong> Master regulation for IMF.</li>
                    <li><strong>Regulation 2.2 IMF Regulations 2015:</strong> Eligible entity types - Company, LLP, Cooperative Society.</li>
                    <li><strong>Regulation 3 IMF Regulations 2015:</strong> Permitted activities; open architecture.</li>
                    <li><strong>Regulation 4 IMF Regulations 2015:</strong> Principal Officer requirements.</li>
                    <li><strong>Regulation 6 IMF Regulations 2015:</strong> Net worth Rs 10 lakh general or Rs 5 lakh single-district.</li>
                    <li><strong>Regulation 7 IMF Regulations 2015:</strong> Registration certificate 3-year validity.</li>
                    <li><strong>Regulation 12 IMF Regulations 2015:</strong> Insurance Sales Persons (ISP) 25-hour training.</li>
                    <li><strong>Information Technology Act 2000:</strong> Class 3 Digital Signature Certificate framework.</li>
                    <li><strong>Income Tax Act 1961 plus Rule 114:</strong> PAN allotment via SPICe+ integration.</li>
                    <li><strong>Income Tax Act 1961 Section 203A:</strong> TAN allotment via SPICe+ integration.</li>
                    <li><strong>GST Act 2017:</strong> GSTIN allotment via SPICe+ AGILE-PRO-S; 18 percent on commission income; Rs 20 lakh registration threshold.</li>
                </ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on entity type (Pvt Ltd or LLP), state (stamp duty), insurer mix breadth, ISP team count, and specific complexity (e.g. existing entity amendment requirements, multi-state expansion).</p>

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
                    <p class="faq-expanded__lead">Answers to the most common questions from founders evaluating combined IMF incorporation - Pvt Ltd vs LLP decision, fees, timeline, capital infusion, MoA Object Clause, and DIN / DSC requirements.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to start an insurance marketing firm in India?</h3>
                        <div class="faq-expanded__a"><p>Starting an IMF in India is a 120-day combined regulatory engagement. Step 1 - Incorporate a registered entity (Private Limited Company is the most common choice; LLP is an alternative). Step 2 - Build Rs 10 lakh paid-up capital as net worth (Rs 5 lakh for single-district operation). Step 3 - Principal Officer undergoes 50-hour IRDAI-approved training and passes certification examination. Step 4 - Insurance Sales Persons complete 25-hour training and certification. Step 5 - Compile 12+ documents and file IRDAI portal application. Step 6 - Secure at least 1 insurer consent letter. Step 7 - IRDAI processes and issues 3-year IMF Registration Certificate. Patron's combined engagement runs all steps in parallel on a fixed-fee basis Rs 50,000 to Rs 1,25,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which entity type is best for IMF - Pvt Ltd or LLP?</h3>
                        <div class="faq-expanded__a"><p>Approximately 85 percent of new IMF founders choose Private Limited Company. Reasons - easier paid-up capital infusion through share allotment, cleaner ownership for future funding, established corporate governance framework familiar to insurers and IRDAI, standardised audit and compliance, and easier expansion. LLP is suitable for partnership-led structures (e.g. two CA partners adding insurance to a financial advisory firm), where simpler annual compliance is preferred and no external equity funding is planned. Both are permitted under IRDAI IMF Regulation 2.2. Patron offers both pathways at equivalent fixed-fee pricing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of incorporating an IMF Pvt Ltd in India?</h3>
                        <div class="faq-expanded__a"><p>Patron's fixed-fee tiers - Tier 1 (Pvt Ltd Only): Rs 50,000; Tier 2 (Pvt Ltd plus IRDAI application): Rs 75,000-90,000; Tier 3 (Full combined plus initial compliance): Rs 1,00,000-1,15,000; Tier 4 (Full plus multi-insurer tie-up): Rs 1,15,000-1,25,000. Statutory pass-through fees (additional) - MCA SPICe+ form fees Rs 5,000-10,000 depending on state, DSC Rs 2,500-5,000 for 2 directors, IRDAI application fee Rs 5,000, PO training institute fee Rs 8,000-15,000, ISP training fees Rs 3,000-5,000 per ISP, stamp duty Rs 1,000-5,000 depending on state. Total external cost approximately Rs 30,000-50,000 over and above Patron fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I register IMF without forming a company first?</h3>
                        <div class="faq-expanded__a"><p>No. IRDAI IMF Regulation 2.2 requires a registered entity - Company, LLP, Cooperative Society or other IRDAI-authorised entity. An individual cannot be an IMF. The combined engagement therefore starts with entity formation (Pvt Ltd or LLP) as Phase 1 followed by IRDAI registration as Phase 2 and Phase 3. The two phases can run in parallel to compress total timeline to 120 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the paid-up capital required for IMF Pvt Ltd?</h3>
                        <div class="faq-expanded__a"><p>Rs 10 lakh paid-up capital is required to meet the IRDAI IMF Regulation 6 net worth threshold (Rs 5 lakh for single-district operation). The Rs 10 lakh must be infused as equity (paid-up share capital) - not as a loan from director or subscribed-but-unpaid capital. Patron coordinates the infusion through Board-approved share allotment, files Form PAS-3 within 30 days, issues SH-1 share certificates and provides CA Net Worth Certificate based on the actual bank balance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What MoA objects are needed for IMF activities?</h3>
                        <div class="faq-expanded__a"><p>The Memorandum of Association Object Clause must specifically authorise insurance solicitation and procurement activities aligned with IRDAI IMF Regulation 3. Generic 'business consultancy' or 'financial services' clauses are insufficient. Patron drafts IMF-specific objects covering - acting as IMF under IMF Regulations 2015, soliciting insurance from life / general / health insurers, servicing policies including premium collection, distributing financial products via FSE (mutual funds, NPS, banking products), insurance consultancy and risk advisory, survey and loss assessment work, and ancillary IRDAI-permitted activities. Existing Pvt Ltd entities adding IMF objects require Special Resolution and Form MGT-14 filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long does combined Pvt Ltd plus IMF registration take?</h3>
                        <div class="faq-expanded__a"><p>Patron's combined engagement targets 120 days end-to-end. Phase 1 (Days 1-30) - MCA setup: SPICe+ filing, name approval, DIN / DSC, MoA / AoA, capital infusion, PAN / TAN / GSTIN, bank account, First Board Meeting. Phase 2 (Days 30-90) - IRDAI workflow: PO 50-hour training (started Day 1 in parallel), IRDAI examination, 3-year business plan, documentation compilation, IRDAI portal application filing, Authority processing and clarifications. Phase 3 (Days 90-120) - ISP certification, insurer tie-up agreements, IRDAI Registration Certificate receipt, post-registration compliance handover. Complex cases may extend to 150 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is Patron's fixed fee for IMF incorporation?</h3>
                        <div class="faq-expanded__a"><p>Patron's fixed-fee tiers - Rs 50,000 (Tier 1 Pvt Ltd only), Rs 75,000-90,000 (Tier 2 Combined Pvt Ltd plus IRDAI application), Rs 1,00,000-1,15,000 (Tier 3 Full combined plus initial compliance), Rs 1,15,000-1,25,000 (Tier 4 Full combined plus multi-insurer tie-up). All Patron deliverables itemised in engagement letter. Statutory pass-through fees (MCA forms, DSC, IRDAI fee, training institute fees, stamp duty) are additional and total approximately Rs 30,000-50,000. LLP variant pricing identical to Pvt Ltd. GST extra.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                                <ul style="margin-top:12px;">
                    <li><strong>Can I run MCA and IRDAI tracks in parallel?</strong> Yes. Patron's standard approach starts PO 50-hour training on Day 1 alongside MCA work, compressing total timeline by 30-45 days.</li>
                    <li><strong>Is OPC allowed for IMF?</strong> Permitted under IMF Regulation 2.2 but requires IRDAI case-by-case approval based on business plan; not common.</li>
                    <li><strong>Can I add IMF objects to existing Pvt Ltd?</strong> Yes via Special Resolution and Form MGT-14. Existing Object Clause amended; subject to IRDAI scrutiny of business plan rationale.</li>
                    <li><strong>What if Rs 10 lakh capital is from loan?</strong> Not eligible. Net worth under Regulation 6 requires equity capital (paid-up shares plus free reserves), not borrowed funds.</li>
                    <li><strong>Can two CA partners form an IMF LLP?</strong> Yes. LLP route is common for CA / CS partner-led firms. Both partners become designated partners; one acts as Principal Officer.</li>
                    <li><strong>Does Patron handle insurer outreach?</strong> Yes in Tier 3 and Tier 4 engagements; consent letter outreach and tie-up agreement negotiation included.</li>
                    <li><strong>What if Principal Officer fails the IRDAI exam?</strong> Re-examination can be scheduled within 2-4 weeks; timeline impact 30-45 days; Patron coordinates re-enrolment.</li>
                    <li><strong>IMF Pvt Ltd kaise banayein?</strong> IMF Pvt Ltd banane ke liye 120 din ka combined engagement chahiye. Pehle Pvt Ltd incorporate karna padta hai - SPICe+ form bharna, MoA mein IMF-specific Object Clause likhna, DIN aur DSC lena, Rs 10 lakh paid-up capital infuse karna. Phir IRDAI - PO ka 50-hour training, ISP ka 25-hour training, 3-year business plan, IRDAI portal pe application file karna. Patron Rs 50,000 se Rs 1,25,000 fixed fee. Call +91 945 945 6700.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Start Combined Engagement Now to Secure Q3 Launch</h2>
            <div class="content-text">
                
                                <p><strong>Statutory Deadlines and Combined Engagement Risks:</strong> SPICe+ name reserved only 20 days - delay in finalisation requires re-filing; First Board Meeting within 30 days of incorporation under Section 173 Companies Act 2013; PAS-3 share allotment return within 30 days under Section 39(4) plus Rule 12 (default penalty applies); DIR-3 KYC by 30 September each year for existing DIN holders (lapse blocks SPICe+ filing); PO 50-hour training started late extends total timeline by 30-45 days; insurer consent letter delayed holds up IRDAI application; IRDAI application filed without complete documentation triggers clarification queries extending timeline by 30-60 days.</p>
                <p><strong>Cost of Continuing the Status Quo:</strong> Every month of delay in IMF incorporation represents foregone insurance commission income - typical mid-size IMF earns Rs 50,000-1,00,000 per month in initial months, ramping to Rs 3-5 lakh per month by Year 2-3. A 4-month delay therefore costs Rs 5-10 lakh in foregone first-year revenue alone. The 3-year IMF Registration validity clock also starts later, compressing return-on-investment timeline.</p>
                <p><strong>Tier Selection Influences Timeline:</strong> Tier 1 (Pvt Ltd only) completes in 30 days; founder handles IRDAI separately. Tier 2 standard combined 120 days. Tier 3 with initial compliance 130 days. Tier 4 with multi-insurer plus Year 1 retainer extends to Day 365 but locks in operations from Day 130. Choose tier based on operational ambition rather than fee minimisation.</p>
                <p><strong>Action:</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a> for a free 30-minute IMF Incorporation Scoping Call. Tier 1 Pvt Ltd Only from Rs 50,000; Tier 2 Standard Combined from Rs 75,000; Tier 3 Full Combined from Rs 1,00,000; Tier 4 Premium with Multi-Insurer from Rs 1,15,000.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Combined Incorporation Team Today</h2>
            <div class="content-text" style="text-align:left;">
                
                                <p style="color:rgba(255,255,255,0.92);">Combined IMF incorporation - Private Limited Company (or LLP) plus IRDAI IMF registration - is the highest-volume bottom-of-funnel engagement in the Patron IMF cluster. Most founders choose Pvt Ltd for the easier capital infusion through paid-up share allotment, cleaner ownership structure, established corporate governance and insurer counterparty recognition. LLP is the alternative for partnership-led structures where simpler annual compliance is preferred.</p>
                <p style="color:rgba(255,255,255,0.92);">The 120-day combined timeline runs MCA and IRDAI tracks in parallel - PO 50-hour training started Day 1 alongside SPICe+ filing, IRDAI application filed by Day 80, Registration Certificate received by Day 115-120. Patron's 4-tier fixed-fee structure (Rs 50,000 to Rs 1,25,000) covers all Patron deliverables transparently with statutory pass-through fees (MCA forms, DSC, IRDAI fee, training, stamp duty) itemised separately. Single firm CA and CS coordination eliminates fragmentation across incorporation lawyer, CS firm and IRDAI agent.</p>
                <p style="color:rgba(255,255,255,0.92);">The IMF-tailored MoA Object Clause aligned with IRDAI Regulation 3, Rs 10 lakh paid-up capital coordination through proper Board allotment plus PAS-3 plus CA Net Worth Certificate workflow, parallel-track project management compressing 30-45 days versus sequential approach, and direct IRDAI portal experience with clean clarification responses reduce founder friction. The firm serves IMF founders across Pune, Mumbai, Delhi and Gurugram with pan-India remote engagement.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20Patron's%20combined%20IMF%20incorporation%20engagement%20-%20please%20share%20scoping%20call%20availability%20and%20tier%20comparison." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20Incorporation%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Patron's%20combined%20IMF%20incorporation%20engagement%20(Pvt%20Ltd%20or%20LLP%20plus%20IRDAI%20registration)%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">IMF Incorporation is the bottom-of-funnel transactional engagement within Patron's IMF cluster. Sister pages cover ongoing compliance, persona verticals (bank retirees, agents, advisors, MFDs), geographic segments (rural / Tier 2-3), and standalone entity formation services.</p>
     
                        <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Patron IMF Cluster Services</div>
                <div class="pa-block-sub">End-to-end support across the IMF engagement lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="/insurance-marketing-firm-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">IMF Registration Hub</div><div class="pa-card-sub">Parent service</div></div></a>
                    <a href="/imf-irdai-registration-process" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="pa-card-title">IRDAI Registration</div><div class="pa-card-sub">Standalone process</div></div></a>
                    <a href="/ismp-certification-isp-appointment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg></div><div><div class="pa-card-title">ISMP and ISP</div><div class="pa-card-sub">PO + ISP coordination</div></div></a>
                    <a href="/imf-compliance-retainer-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Compliance Retainer</div><div class="pa-card-sub">Annual ongoing</div></div></a>
                    <a href="/imf-private-limited-vs-llp" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11H3v10h6V11zM21 3h-6v18h6V3zM15 7H9v14h6V7z"/></svg></div><div><div class="pa-card-title">Pvt Ltd vs LLP</div><div class="pa-card-sub">Entity decision</div></div></a>
                    <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">General company</div></div></a>
                    <a href="/llp-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Alternative entity</div></div></a>
                    <a href="/imf-for-bank-employees-retirees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="8" r="3"/><path d="M5 21v-1a7 7 0 0114 0v1"/></svg></div><div><div class="pa-card-title">Bank Retirees</div><div class="pa-card-sub">Persona vertical</div></div></a>
                </div>
            </div>

            <div class="pa-city-block">
                <div class="pa-block-title">Patron Offices</div>
                <div class="pa-block-sub">4-office network with pan-India remote engagement for IMF founders</div>
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
            <p>This page is reviewed quarterly (Tier 2 - 3 months) and immediately on MCA SPICe+ updates, IRDAI fee revisions, capital requirement amendments to IMF Regulations 2015, Companies Act 2013 amendments affecting Section 4 / Section 39, and DSC / DIN regulatory framework changes.</p>
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