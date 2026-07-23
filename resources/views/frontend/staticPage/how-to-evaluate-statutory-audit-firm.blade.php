
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
    <title>How to Evaluate Statutory Audit Firm</title>
    <meta name="description" content="Evaluating a statutory audit firm? Patron's 10-question checklist, peer review and AQMM framework, 3-tier pricing benchmark, red flags. Free workshop.">
    <link rel="canonical" href="/how-to-evaluate-statutory-audit-firm">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="How to Evaluate Statutory Audit Firm 2026 | Patron">
    <meta property="og:description" content="Evaluating a statutory audit firm? Patron's 10-question checklist, peer review and AQMM framework, 3-tier pricing benchmark, red flags. Free workshop.">
    <meta property="og:url" content="/how-to-evaluate-statutory-audit-firm">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/how-to-evaluate-statutory-audit-firm-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Evaluate Statutory Audit Firm 2026 | Patron">
    <meta name="twitter:description" content="Evaluating a statutory audit firm? Patron's 10-question checklist, peer review and AQMM framework, 3-tier pricing benchmark, red flags. Free workshop.">
    <meta name="twitter:image" content="/images/how-to-evaluate-statutory-audit-firm-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/how-to-evaluate-statutory-audit-firm/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
        { "@type": "ListItem", "position": 3, "name": "How to Evaluate Statutory Audit Firm", "item": "/how-to-evaluate-statutory-audit-firm" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/how-to-evaluate-statutory-audit-firm/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I evaluate a statutory audit firm?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's 10-question evaluation checklist covers ICAI Peer Review Certificate validity, AQMM Level disclosure for listed audits, senior CA partner substantive engagement, industry expertise, NFRA-review-grade working paper standard, documented SQC 1 quality control, SA 220 Engagement Quality Control Review process, technology stack, references from comparable engagements, and transparent fee structure. Each question scored on a 0-10 scale; comparative scoring matrix produces objective ranking. Reference checks on top 2-3 candidates frequently surface concerns not apparent in proposals."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ICAI Peer Review Certificate and why does it matter?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The ICAI Peer Review Certificate is issued by the Peer Review Board of the Institute of Chartered Accountants of India to firms that have undergone the peer review process - an independent evaluation of the firm's audit and assurance quality systems. Valid Peer Review Certificate is mandatory for audits of listed entities under SEBI Circular CIR/CFD/DIL/1/2010 dated 5 April 2010. ICAI Peer Review Mandate Phase I from 1 April 2022 covers listed audits; Phase IV from 1 April 2025 covers further categories. Firms must hold valid certificate at engagement acceptance and audit report signing."
          }
        },
        {
          "@type": "Question",
          "name": "What is AQMM and which audit firms need it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AQMM is the Audit Quality Maturity Model introduced by ICAI as rev v1.0 mandatory from 1 April 2023 for firms auditing listed entities, banks other than co-operative banks, and insurance companies. The model has 600 points across 3 sections - Practice Management Operations, Human Resource Management, and Practice Management Strategic. Based on scores, firms arrive at Level 1 (nascent) to Level 4 (significant adoption of standards). The Level is reviewed and hosted on ICAI's website alongside the peer review certificate."
          }
        },
        {
          "@type": "Question",
          "name": "What are realistic audit fee benchmarks in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's 3-tier pricing benchmark - Tier 1 (Rs 30,000 to Rs 50,000) is cheap-DIY-style typical of junior-only teams without peer review; HIGH risk and AVOID for any company with material exposure. Tier 2 (Rs 1,00,000 to Rs 3,00,000) is Patron-style mid-tier with peer-reviewed firm, senior CA partner-led approach, NFRA-review-grade working files; RECOMMENDED for Pvt Ltd, family-business groups, NBFCs, pre-IPO domestic. Tier 3 (Rs 8,00,000+) is Big-Four scale for listed entities, NFRA-regulated entities, and pre-IPO with global investor expectation; premium is 3-5x mid-tier."
          }
        },
        {
          "@type": "Question",
          "name": "What red flags should I watch for in audit firm selection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Key red flags - no ICAI Peer Review Certificate or expired (automatic disqualification for listed audits); junior-only team without senior partner involvement; ad-hoc Excel-based workpapers; no documented SQC 1 quality control policy; no SA 220 Engagement Quality Control Review for listed engagements; boilerplate CARO 2020 reporting; inadequate SA 240 fraud documentation; opaque fee structure with scope expansion potential; unwillingness to provide references for direct contact; NFRA disciplinary history; ICAI disciplinary history; disproportionately low fee proposal at 60-70 percent below mid-tier benchmark."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 10-question evaluation checklist?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's 10-question evaluation checklist covers - Q1 Peer Review Certificate validity; Q2 AQMM Level for listed audits; Q3 senior CA partner substantive engagement; Q4 industry expertise; Q5 NFRA-review-grade working paper standard; Q6 documented SQC 1 quality control; Q7 SA 220 Engagement Quality Control Review process; Q8 technology stack; Q9 references from comparable engagements; Q10 transparent fee structure with scope clarity. Each question has a good-answer definition (score 8-10) and red-flag indicators (score 0-3); Audit Committee weights the questions per company-specific context."
          }
        },
        {
          "@type": "Question",
          "name": "How is Patron different from Big-Four and other mid-tier firms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron is positioned in Tier 2 mid-tier with peer-reviewed firm status, senior CA partner-led engagement model, NFRA-review-grade working paper standard, documented SQC 1 quality control, and transparent fee structure - at one-third the typical Big-Four fee. Patron's differentiation versus other mid-tier firms - explicit 10-question evaluation framework adoption; substantive engagement letter with scope clarity; 4-office network across Pune, Mumbai, Delhi, Gurugram; sector-specific industry expertise; consistent senior partner engagement; predictable multi-year fee structure."
          }
        },
        {
          "@type": "Question",
          "name": "How should the Audit Committee finalise audit firm appointment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's 7-step process - (1) Audit Committee workshop on 10-question framework with company-specific weights; (2) RFP drafting for shortlisting; (3) Shortlist of 3-5 firms RFP issuance with 21-30 day window; (4) 10-question framework scoring across proposals; (5) Reference checks on top 2-3 candidates; (6) Audit Committee recommendation under Section 177(4)(vii) to Board; (7) Board appointment, AGM Member ratification under Section 139(1), Form ADT-1 filing within 15 days under Rule 4. Audit trail documents provide NFRA-inspection-grade record."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/how-to-evaluate-statutory-audit-firm/#service",
      "name": "Audit Firm Evaluation and Selection Advisory",
      "description": "Patron's structured audit firm evaluation advisory for CFOs and Audit Committees. Covers the 10-question evaluation checklist, ICAI Peer Review Mandate Phase I-IV applicability, AQMM Level 1-4 framework, 3-tier pricing benchmark (Tier 1 cheap-DIY Rs 30-50K / Tier 2 Patron mid-tier Rs 1-3L / Tier 3 Big-Four Rs 8L+), red flags catalogue, RFP drafting, proposal evaluation, reference check coordination, Audit Committee recommendation memo drafting under Section 177(4)(vii), Section 139(1) AGM resolution drafting, engagement letter drafting with scope clarity, and first audit cycle onboarding support. Patron also competes as a Tier 2 candidate audit firm with peer-reviewed senior CA partner-led engagements, NFRA-review-grade working papers, SQC 1 quality control, and transparent multi-year fee structure across our 4-office network.",
      "serviceType": "Audit Firm Selection and Statutory Audit Advisory",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
        { "@type": "Thing", "name": "Institute of Chartered Accountants of India", "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Audit Firm Evaluation Services",
        "itemListElement": [
          { "@type": "Offer", "name": "Audit Committee Evaluation Framework Workshop (2-3 hour session)", "price": "75000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/how-to-evaluate-statutory-audit-firm" },
          { "@type": "Offer", "name": "Audit Firm Proposal Evaluation with Scoring Matrix (3-5 proposals)", "price": "150000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/how-to-evaluate-statutory-audit-firm" },
          { "@type": "Offer", "name": "Full Evaluation Package (workshop + RFP + proposal eval + references + memo + engagement letter)", "price": "400000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/how-to-evaluate-statutory-audit-firm" },
          { "@type": "Offer", "name": "Patron as Candidate Audit Firm - Statutory Audit (Pvt Ltd)", "price": "175000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/how-to-evaluate-statutory-audit-firm" }
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
                        How to Evaluate Statutory Audit Firm: Buyer's Guide
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>10-Question Evaluation Checklist:</span> Structured Audit Committee framework across peer review, AQMM Level, senior CA partner engagement, industry expertise, NFRA-grade workpapers, SQC 1, SA 220, technology, references, and fee transparency.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Peer Review and AQMM Coverage:</span> ICAI Peer Review Mandate Phase I-IV (1 April 2022 to 1 April 2025) applicability matrix plus AQMM rev v1.0 Level 1-4 framework for listed, bank, and insurance audit firms.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>3-Tier Pricing Benchmark:</span> Tier 1 cheap-DIY-style Rs 30-50K HIGH RISK; Tier 2 Patron-style mid-tier Rs 1-3L peer-reviewed senior partner-led; Tier 3 Big-Four Rs 8L+ for listed and NFRA-regulated.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Transparent Advisory Fees:</span> Audit Committee workshop from Rs 75,000; full evaluation package Rs 4,00,000 to Rs 12,00,000. Patron as candidate audit firm from Rs 1,75,000 (Pvt Ltd). Free 30-minute scoping call.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20Firm%20Evaluation%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20statutory%20audit%20firm%20evaluation%20advisory%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20Patron%20to%20help%20our%20Audit%20Committee%20evaluate%20statutory%20audit%20firm%20proposals." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Audit Firm Evaluation'/>
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
                                                                <option value="how-to-evaluate-statutory-audit-firm" selected>Audit Firm Evaluation (Buyer's Guide)</option>
                                <option value="statutory-audit">Statutory Audit</option>
                                <option value="first-statutory-auditor-appointment-checklist">First Statutory Auditor Appointment</option>
                                <option value="change-of-auditor">Change of Auditor (Section 140)</option>
                                <option value="audit-rotation-transition-india">Audit Rotation Transition (Section 139(2))</option>
                                <option value="caro-2020-reporting">CARO 2020 Reporting</option>
                                <option value="internal-financial-controls-audit">Internal Financial Controls Audit</option>
                                <option value="private-limited-company-compliance">Private Limited Company Compliance</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron ran a structured 10-question evaluation for our Audit Committee with 4 shortlisted firms. The comparative scoring matrix exposed quality gaps that proposals concealed - we selected a peer-reviewed mid-tier firm at 40 percent below the incumbent Big-Four fee. The audit trail documents survived our Series B investor diligence cleanly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit M.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Pvt Ltd Technology Company</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As Audit Committee Chair I needed a defensible Section 177(4)(vii) recommendation process. Patron's workshop and proposal evaluation gave us the framework, scoring matrix, and reference check protocol. The recommendation memo to the Board was clean and the AGM Member ratification went through without questions.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Shashi P.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Audit Committee Chair, Listed Manufacturing</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Pre-IPO transition needed an auditor with valid Peer Review Certificate under SEBI Circular CIR/CFD/DIL/1/2010. Patron coordinated the entire transition - peer review verification on shortlisted firms, predecessor cooperation under Section 140(2), SA 510 onboarding procedures. Investor banker had zero concerns on auditor diligence.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NA</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Neha A.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Pre-IPO Consumer Brand</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Family-business group with 6 subsidiaries needed audit firm consolidation. Patron's evaluation framework and 3-tier pricing benchmark helped us migrate from 4 different cheap-tier firms to a single Tier 2 peer-reviewed firm at predictable multi-year fee. Engagement letter scope clarity eliminated the surprise billings we had been facing.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vinod K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Group CFO, Family-Business Conglomerate</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
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
                    <p>From Audit Committee Chairs to Pvt Ltd CFOs - clients share how Patron's structured evaluation framework helped them select better-fit audit firms with predictable fees and NFRA-grade audit trails.</p>
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
                        <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth',block:'start'});">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth',block:'start'});">What Is Evaluation</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">When to Conduct</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">Patron Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">7-Step Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Audit Trail</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Why Patron</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth',block:'start'});">Tier Comparison</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - Why Audit Firm Evaluation Matters</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Audit Firm Evaluation Services at a Glance</strong></p>
                    <p>Selecting the right statutory audit firm shapes 5-10 years of compliance quality (Section 139(2) rotation), regulator confidence, and investor diligence ratings. Patron's framework comprises the 10-question evaluation checklist (peer review, AQMM, senior partner, industry, workpapers, SQC 1, SA 220, technology, references, fee transparency); the ICAI Peer Review Mandate Phase I (1 April 2022) to Phase IV (1 April 2025) matrix; the AQMM Level 1-4 framework; the 3-tier pricing benchmark (Tier 1 Rs 30-50K cheap-DIY HIGH RISK / Tier 2 Rs 1-3L Patron-style RECOMMENDED for Pvt Ltd / Tier 3 Rs 8L+ Big-Four for listed); and the red flags catalogue.</p>
                </div>
                <p>Selecting the right statutory audit firm is one of the most consequential decisions a CFO and Audit Committee make every audit rotation cycle. Section 139 of the Companies Act, 2013 establishes the appointment procedure with Section 177(4)(vii) Audit Committee recommendation; the actual firm selection turns on quality criteria that are not statutorily mandated - peer review status, audit quality, industry expertise, technology stack, team experience, and fee transparency. Companies that select on price alone frequently receive audit deliverables that do not meet NFRA inspection standards, lender or investor diligence expectations, or regulator scrutiny - resulting in qualified opinions, ADT-4 filings, IFC Material Weaknesses, and stakeholder confidence erosion.</p>
                <p>The 10-question evaluation checklist in this guide is Patron's structured framework for buyer-stage decisions - applicable whether you are appointing first-time auditor under Section 139(6), changing auditor under Section 140, transitioning auditor at rotation under Section 139(2), or simply benchmarking your existing audit firm for future cycles. Verify your prospective firm's peer review status at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a>, listed-entity requirements at the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">Securities and Exchange Board of India (SEBI)</a>, and audit firm disciplinary history at the <a href="https://www.nfra.gov.in" target="_blank" rel="noopener">National Financial Reporting Authority (NFRA)</a>.</p>
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
                <h2 class="section-title">What Is Statutory Audit Firm Evaluation</h2>
                <div class="content-text what-is-definition">
                    
                                        <p>Statutory audit firm evaluation refers to the systematic assessment of audit firm candidates against quality, capability, regulatory-status, and fee criteria before appointment under <strong>Section 139 of the Companies Act, 2013.</strong> The evaluation produces a structured comparison enabling the Audit Committee (Section 177(4)(vii) recommendation) and the Board to make informed appointment decisions. The evaluation is most rigorous when conducted at first-time auditor appointment under Section 139(6); at mandatory rotation transition under Section 139(2); at auditor change under Section 140; or at periodic benchmarking exercises (typical 3 to 5 year cycles).</p>
                    <p>Patron's <strong>10-question evaluation checklist</strong> covers ten dimensions - (1) ICAI Peer Review Certificate validity for the engagement period (mandatory for listed audits under SEBI Circular CIR/CFD/DIL/1/2010; mandatory across Phase I-IV under ICAI Peer Review Mandate); (2) AQMM Level disclosure for firms auditing listed / bank / insurance entities under AQMM rev v1.0 from 1 April 2023; (3) Senior CA partner engagement on the audit signing; (4) Industry expertise relevant to the company's sector; (5) Substantive working paper standard meeting NFRA inspection grade; (6) Documented SQC 1 quality control system at firm level; (7) SA 220 Engagement Quality Control Review process for listed and other high-risk engagements; (8) Technology stack supporting audit; (9) References from comparable engagements; (10) Transparent fee structure with explicit scope and out-of-scope clarity.</p>
                    <p>The <strong>3-tier pricing framework</strong> reflects three distinct audit propositions. Tier 1 (Rs 30,000 to Rs 50,000) is the cheap-DIY-style audit typical of junior-only teams without peer review - HIGH compliance risk; auditor failure under Section 143(15) can attract penalty Rs 1 lakh to Rs 5 lakh on top of NFRA / ICAI disciplinary exposure. Tier 2 (Rs 1,00,000 to Rs 3,00,000) is the senior CA partner-led mid-tier firm with peer review, NFRA-review-grade working files, SA 240 substantive procedures, CARO 2020 three-part fraud reporting, IFC under SA 220 quality control review - this is the Patron positioning. Tier 3 (Rs 8,00,000+) is Big-Four scale appropriate for listed entities, NFRA-regulated entities, and AQMM Level 3-4 expectations.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Audit Firm Evaluation:</strong></p>
                                        <ul style="margin-top:12px;">
                        <li><strong>ICAI Peer Review Certificate:</strong> Issued by ICAI Peer Review Board to firms that have undergone the peer review process; valid certificate is mandatory for listed audit engagements under SEBI Circular CIR/CFD/DIL/1/2010 and for prescribed engagements under ICAI Peer Review Mandate Phase I-IV.</li>
                        <li><strong>Audit Quality Maturity Model (AQMM):</strong> ICAI's audit firm quality framework introduced as rev v1.0 mandatory from 1 April 2023 for firms auditing listed / bank / insurance entities. 600 points across 3 sections (Practice Management Operations / HRM / Practice Management Strategic); Levels 1 (nascent) to 4 (significant adoption).</li>
                        <li><strong>SQC 1 - Quality Control for Firms:</strong> ICAI standard requiring all audit firms to establish and maintain a system of quality control covering leadership responsibility, ethical requirements, client acceptance, human resources, engagement performance, and monitoring.</li>
                        <li><strong>SA 220 - Engagement Quality Control Review:</strong> ICAI Standard on Auditing requiring an independent quality control reviewer for high-risk engagements (mandatory for listed entity audits); reviews audit engagement before report signing.</li>
                        <li><strong>Section 141 Qualification and Disqualification:</strong> Section 141(1) qualification (CA / LLP under Companies Act); Section 141(3) seven disqualifications including body corporate (except LLP), officer or employee, relative holding security over Rs 1 lakh, indebtedness over Rs 5 lakh, guarantee over Rs 1 lakh, business relationship.</li>
                        <li><strong>Section 144 Prohibited Services:</strong> Auditor cannot provide 10 prescribed non-audit services to audit client - accounting and book-keeping, internal audit, financial information system design, actuarial services, investment advisory, investment banking, outsourced financial services, management services, and other prescribed services.</li>
                        <li><strong>Senior Partner Engagement:</strong> CFO buyer signal - is a senior CA partner (typically 15+ years post-qualification) substantively involved in audit planning, fieldwork supervision, key technical decisions, and sign-off? Or is partner sign-off after manager / staff conduct without partner involvement?</li>
                        <li><strong>NFRA-Review-Grade Working Papers:</strong> Working paper standard meeting NFRA inspection expectations - substantive risk assessment, fraud risk procedures under SA 240, journal entry testing, analytical procedures, CARO 2020 substantive clause-by-clause working, IFC adequacy testing, going concern conclusion, SA 260 TCWG communication documentation.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Audit Firm Evaluation</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Buyer's Framework</span>
                        <strong>10-Question + 3-Tier Benchmark</strong>
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
            <h2 class="section-title">When to Conduct Audit Firm Evaluation</h2>
            <div class="content-text">
                
                                <p>Audit firm evaluation should be conducted in five distinct scenarios:</p>
                <ul>
                    <li><strong>Scenario 1 - First-Time Auditor Appointment Under Section 139(6):</strong> Newly-incorporated companies appoint first statutory auditor under Section 139(6) within 30 days of incorporation - Board appointment (no AGM required for first appointment). The first auditor holds office until conclusion of first AGM. Patron's recommendation: run a structured evaluation even for first appointment; do not select the founder's CA on convenience.</li>
                    <li><strong>Scenario 2 - Audit Firm Change Under Section 140:</strong> Auditor change before term-end under Section 140 - typically driven by disagreement, loss of confidence, or strategic transition (Big-Four to mid-tier for cost rationalisation or vice versa for pre-IPO). Evaluation considers predecessor cooperation under Section 140(2), Central Government approval where applicable, and CARO 2020 Clause 3(xviii) reporting.</li>
                    <li><strong>Scenario 3 - Mandatory Rotation Transition Under Section 139(2):</strong> Listed entities and prescribed companies face mandatory rotation - individual auditor maximum 1 term of 5 years; audit firm maximum 2 terms of 10 years; 5-year cooling-off mandatory. Start evaluation 6-9 months before rotation due date; substantive RFP process with 3-5 firm shortlist.</li>
                    <li><strong>Scenario 4 - Pre-IPO Auditor Transition:</strong> Pre-IPO companies require auditor with valid Peer Review Certificate under SEBI Circular CIR/CFD/DIL/1/2010. Many private limited companies have non-peer-reviewed auditors and must transition before IPO filing. Consider peer review status, ability to re-audit prior three years, pre-IPO transition timeline, investor banker preferences, and AQMM Level expectations.</li>
                    <li><strong>Scenario 5 - Periodic Benchmarking:</strong> Even where statutory rotation does not require change, periodic benchmarking (typical 3-5 year cycles) is good Audit Committee practice. Tests whether the existing audit firm continues to provide proportionate value at the current fee level and whether better-fit firms have emerged.</li>
                </ul>
                <p style="margin-top:20px;"><strong>Section 141(3) Disqualification Categories:</strong></p>
                <table style="width:100%;border-collapse:collapse;margin-top:8px;">
                    <thead>
                        <tr style="background:var(--blue-lighter);">
                            <th style="padding:10px;border:1px solid #e2e8f0;text-align:left;">Disqualification Category</th>
                            <th style="padding:10px;border:1px solid #e2e8f0;text-align:left;">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td style="padding:10px;border:1px solid #e2e8f0;">Body corporate (except LLP)</td><td style="padding:10px;border:1px solid #e2e8f0;">Companies cannot be auditors - only individuals or LLPs</td></tr>
                        <tr><td style="padding:10px;border:1px solid #e2e8f0;">Officer or employee of the company</td><td style="padding:10px;border:1px solid #e2e8f0;">Cannot audit own employer</td></tr>
                        <tr><td style="padding:10px;border:1px solid #e2e8f0;">Partner or employee of officer or employee</td><td style="padding:10px;border:1px solid #e2e8f0;">Cannot have employee / partner relationship with company's officer</td></tr>
                        <tr><td style="padding:10px;border:1px solid #e2e8f0;">Relative holds security or interest over Rs 1 lakh</td><td style="padding:10px;border:1px solid #e2e8f0;">Relative independence test</td></tr>
                        <tr><td style="padding:10px;border:1px solid #e2e8f0;">Indebtedness to company over Rs 5 lakh</td><td style="padding:10px;border:1px solid #e2e8f0;">Auditor or partner indebtedness test</td></tr>
                        <tr><td style="padding:10px;border:1px solid #e2e8f0;">Guarantee for third-party indebtedness over Rs 1 lakh</td><td style="padding:10px;border:1px solid #e2e8f0;">Guarantee independence test</td></tr>
                        <tr><td style="padding:10px;border:1px solid #e2e8f0;">Business relationship with company</td><td style="padding:10px;border:1px solid #e2e8f0;">Business relationship independence test (except in ordinary course)</td></tr>
                    </tbody>
                </table>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's Audit Firm Evaluation Support Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Audit Firm Evaluation Framework Workshop for Audit Committees</td>
                            <td>Patron conducts evaluation framework workshops for Audit Committees and Boards - the 10-question evaluation checklist; ICAI Peer Review Mandate; AQMM Level framework; SQC 1; SA 220; 3-tier pricing benchmark; red flags catalogue. Produces a structured Audit Committee briefing pack.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>RFP Drafting Support for Audit Firm Shortlisting</td>
                            <td>Patron drafts the RFP document covering scope, timeline, fee structure expectations, deliverable specifications, peer review and AQMM requirements, industry expertise, technology stack, reference requirements, and evaluation criteria with scoring weights.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Audit Firm Proposal Evaluation (3 to 5 Proposals)</td>
                            <td>Patron evaluates each proposal against the 10-question framework with scoring; red flag identification; comparative scoring matrix; recommendation rationale for Audit Committee.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Patron's Proposal as Candidate Audit Firm</td>
                            <td>Patron submits its own proposal for the audit engagement where requested - peer-reviewed firm with senior CA partner-led approach; NFRA-review-grade working file standard; SQC 1; SA 220 EQCR for high-risk engagements; transparent fee structure; 4-office network across Pune, Mumbai, Delhi, Gurugram.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Audit Firm Reference Check Coordination</td>
                            <td>Substantive reference checks with comparable engagements - targeted questions on senior partner engagement, working paper standard, response time, NFRA / ICAI disciplinary history, audit committee communication quality, fee predictability.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Audit Committee Recommendation Memo Drafting under Section 177(4)(vii)</td>
                            <td>Patron drafts the Audit Committee recommendation memo to the Board - evaluation framework documented; firm-by-firm scoring; recommended firm with rationale; fee structure summary; engagement letter framework.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>Section 139(1) AGM Resolution and Engagement Letter Drafting</td>
                            <td>Patron drafts Member ratification resolution for AGM appointment under Section 139(1) with auditor's eligibility certificate under Section 141, plus engagement letter framework with explicit scope (statutory audit + Annexure A CARO + Annexure B IFC + AOC-4 coordination) and out-of-scope clarity.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>First Audit Cycle Onboarding Support</td>
                            <td>For newly-appointed firms (including Patron), the first audit cycle requires substantive onboarding - SA 510 Initial Engagement procedures on opening balances; predecessor cooperation under Section 140(2); company-side onboarding; engagement team familiarisation.</td>
                            <td><span class="badge-addon">Add-on</span></td>
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
            <h2 class="section-title">Patron's 7-Step Audit Firm Evaluation Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured Audit Committee workflow Patron follows from initial framework adoption through Form ADT-1 filing - producing an NFRA-inspection-grade audit trail of the selection process.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Audit Committee Workshop on 10-Question Framework</h3>
                    <p class="step-description">
                        9 months before audit cycle start - the Audit Committee adopts Patron's 10-question evaluation framework with company-specific scoring weights (industry expertise may weight 20% for sector-specific entities). Existing firm performance reviewed; decision taken on RFP vs continuation.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            10 questions weighted
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Section 177(4)(vii) prep
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="25" y1="32" x2="95" y2="32" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                                <line x1="25" y1="45" x2="85" y2="45" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                <line x1="25" y1="58" x2="80" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                <line x1="25" y1="71" x2="75" y2="71" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Framework Set</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">RFP Drafting and Longlist Identification</h3>
                    <p class="step-description">
                        8 months before - RFP drafted covering scope, timeline, fee expectations, deliverables, peer review and AQMM requirements, evaluation criteria with scoring weights. Longlist identified via ICAI Peer Review Database, AQMM published Levels, sector research, and peer Audit Committee referrals.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ICAI database checked
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            AQMM Levels reviewed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="22" width="60" height="10" rx="2" fill="#F5A623"/>
                                <rect x="30" y="38" width="50" height="6" rx="2" fill="#14365F" opacity="0.3"/>
                                <rect x="30" y="50" width="55" height="6" rx="2" fill="#14365F" opacity="0.3"/>
                                <rect x="30" y="62" width="45" height="6" rx="2" fill="#14365F" opacity="0.3"/>
                                <rect x="30" y="74" width="50" height="6" rx="2" fill="#14365F" opacity="0.3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">RFP Drafted</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Shortlist of 3 to 5 Firms - RFP Issuance</h3>
                    <p class="step-description">
                        7 months before - RFP issued to shortlisted firms with 21 to 30 day submission window. Each firm submits proposal including fee structure, team composition, methodology, references, peer review certificate copy, and AQMM Level disclosure where applicable.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            3 to 5 firm shortlist
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            21-30 day window
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="35" r="12" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <circle cx="60" cy="35" r="12" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <circle cx="90" cy="35" r="12" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <circle cx="45" cy="70" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <circle cx="75" cy="70" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                            </svg>
                        </div>
                        <span class="illustration-label">RFP Issued</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Proposal Evaluation with 10-Question Scoring Matrix</h3>
                    <p class="step-description">
                        6 months before - each received proposal scored against the 10-question framework with weighted comparative matrix. Red flags identified (no peer review, junior-only team, ad-hoc workpapers, opaque fees). Top 2 to 3 candidates advance to reference checks.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            0-10 scoring per question
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Red flags surfaced
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="25" y="30" width="20" height="40" fill="#F5A623"/>
                                <rect x="50" y="40" width="20" height="30" fill="#F5A623" opacity="0.6"/>
                                <rect x="75" y="50" width="20" height="20" fill="#F5A623" opacity="0.4"/>
                                <line x1="20" y1="75" x2="100" y2="75" stroke="#14365F" stroke-width="2"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Scored</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Reference Checks on Top 2 to 3 Candidates</h3>
                    <p class="step-description">
                        5 months before - substantive reference calls with comparable engagements. Targeted questions beyond 'are you satisfied' - response time, partner engagement quality, working paper standard, NFRA / ICAI disciplinary history, fee predictability. Direct contact without firm coordination.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Direct reference contact
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Targeted questions
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="50" r="20" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M40 50L52 50 L52 38" stroke="#F5A623" stroke-width="3" stroke-linecap="round" fill="none"/>
                                <line x1="68" y1="50" x2="100" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                <line x1="68" y1="35" x2="95" y2="35" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                <line x1="68" y1="65" x2="90" y2="65" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                            </svg>
                        </div>
                        <span class="illustration-label">References Checked</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Audit Committee Recommendation Under Section 177(4)(vii)</h3>
                    <p class="step-description">
                        5 months before - Patron drafts the Audit Committee recommendation memo to the Board. Evaluation framework documented; firm-by-firm weighted scoring; recommended firm with rationale; fee structure summary; engagement letter framework. Section 139(11) Audit Committee-Board interlink documented.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            AC memo drafted
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Board recommendation
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3"/>
                                <line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <line x1="30" y1="54" x2="85" y2="54" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <line x1="30" y1="66" x2="70" y2="66" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <path d="M65 78 L75 78 L70 84 Z" fill="#F5A623"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Recommended</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Board Appointment, AGM Ratification, Form ADT-1 Filing</h3>
                    <p class="step-description">
                        Board recommends appointment to AGM under Section 139(1); Member ratification at AGM (within 9 months of year-end); Form ADT-1 filed with ROC within 15 days of appointment under Rule 4; auditor's eligibility certificate under Section 141 included.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            AGM Member resolution
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ADT-1 within 15 days
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="20" width="70" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M50 50 L58 58 L75 38" stroke="#F5A623" stroke-width="4" stroke-linecap="round" fill="none"/>
                                <line x1="35" y1="70" x2="85" y2="70" stroke="#14365F" stroke-width="2" opacity="0.3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">ADT-1 Filed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Engagement Letter Sign-Off and First Audit Cycle Onboarding</h3>
                    <p class="step-description">
                        Engagement letter signed within 30 days of appointment with explicit scope (statutory audit + Annexure A CARO + Annexure B IFC + AOC-4 coordination) and out-of-scope clarity. First audit cycle 3 to 4 months before year-end - SA 510 Initial Engagement procedures on opening balances; predecessor cooperation under Section 140(2); system access and team familiarisation.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Engagement letter signed
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SA 510 onboarding
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
                        <span class="illustration-label">Onboarded</span>
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
            <h2 class="section-title">Audit Firm Selection Audit Trail Documents</h2>
            <div class="content-text">
                
                                <p>The audit firm selection process should produce a substantive audit trail document set for NFRA inspection, lender diligence, investor diligence, and regulator scrutiny. Patron's selection audit trail covers:</p>
                <ul>
                    <li>RFP document - scope, timeline, fee expectations, deliverable specifications, peer review and AQMM requirements, evaluation criteria with scoring weights</li>
                    <li>Audit firm proposals received - typically 3 to 7 from shortlist; each proposal with fee structure, team composition, methodology, references, peer review certificate copy, AQMM Level disclosure (where applicable)</li>
                    <li>Proposal evaluation matrix - 10-question framework with firm-by-firm scoring; red flag identification; comparative summary</li>
                    <li>Reference check notes - substantive reference checks with comparable engagements; targeted questions; quality of response notes</li>
                    <li>Audit Committee meeting minutes recording the evaluation discussion under Section 177(4)(vii)</li>
                    <li>Audit Committee recommendation memo to the Board with selected firm and rationale</li>
                    <li>Board meeting minutes recording appointment recommendation under Section 139(1)</li>
                    <li>AGM resolution under Section 139(1) ratifying Board recommendation; auditor's eligibility certificate under Section 141</li>
                    <li>Engagement letter signed by appointed auditor and authorised company representative with explicit scope and out-of-scope clarity</li>
                    <li>Form ADT-1 filed with ROC within 15 days of appointment under Rule 4</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Evaluation Challenges and Patron's Approach</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Auditor Selection on Price Alone</td>
                            <td>Most common buyer mistake. Tier 1 (Rs 30-50K) firms frequently appear attractive on cost but deliver audit reports that do not withstand NFRA inspection, lender diligence, or investor diligence. Cost of audit failure typically exceeds 5-10x the fee savings.</td>
                            <td>Never select on price alone. The 10-question framework with scoring exposes quality vs price tradeoffs explicitly. Auditor failure under Section 143(15) attracts Rs 1-25 lakh penalty plus NFRA / ICAI disciplinary exposure - cost of failure exceeds savings from cheap-tier selection.</td>
                        </tr>
                        <tr>
                            <td>Senior Partner Engagement vs Partner Sign-Off Without Involvement</td>
                            <td>Many audit firms operate with manager / staff conducting the audit and partner sign-off without substantive partner involvement - structurally permitted under Section 145 but produces audit deliverables lacking senior CA judgment on technical decisions and qualification triggers.</td>
                            <td>Explicit commitment in engagement letter that senior CA partner with 15+ years post-qualification experience will be substantively involved in audit planning, fieldwork supervision, key technical decisions, and sign-off. Reference checks specifically test partner engagement.</td>
                        </tr>
                        <tr>
                            <td>Peer Review Certificate Validity Verification</td>
                            <td>Peer Review Certificates are valid for 3-year periods; firms may have expired or about-to-expire certificate. Companies often do not verify validity at appointment - resulting in audit reports signed by firm without valid Peer Review at signing time (Phase I-IV non-compliance).</td>
                            <td>Obtain Peer Review Certificate copy with validity period. Verify on ICAI Peer Review Board website. Ensure validity covers the entire audit engagement period. For multi-year engagements, ensure renewal commitment.</td>
                        </tr>
                        <tr>
                            <td>Hidden Fee Inflation in Engagement Letter</td>
                            <td>Initial fee proposals can be artificially low with substantial 'additional scope' billing during the engagement - common scope expansion items include CARO 2020 substantive testing, IFC adequacy testing, Section 138 internal audit reporting, going concern matters, fraud detection, related party testing.</td>
                            <td>Engagement letter with explicit scope (statutory audit + Annexure A CARO + Annexure B IFC + AOC-4 coordination included); out-of-scope items clearly identified (tax audit, internal audit, advisory services separately quoted); no surprise billing.</td>
                        </tr>
                        <tr>
                            <td>Reference Verification Quality</td>
                            <td>Audit firms typically provide curated references likely to give positive feedback. Substantive reference checks require targeted questions beyond 'are you satisfied'; specific operational questions; permission to contact directly rather than coordinated calls.</td>
                            <td>Prepare specific reference questions covering response time, partner engagement, working paper standard, fee predictability. Contact references directly without firm coordination. Cross-reference responses with peer Audit Committee Chair feedback.</td>
                        </tr>
                        <tr>
                            <td>Big-Four Premium vs Mid-Tier Value</td>
                            <td>Big-Four firms (Deloitte / PwC / EY / KPMG) command 3-5x fee premium over mid-tier firms with comparable Peer Review and AQMM Level status. Premium justified for listed entities, NFRA-regulated entities, pre-IPO global investor expectation - rarely justified for Pvt Ltd and family-business groups.</td>
                            <td>Explicit articulation of when Big-Four premium is justified vs when mid-tier value is appropriate. Transparent positioning of Patron as Tier 2 mid-tier with peer review plus AQMM-equivalent quality at one-third Big-Four fee.</td>
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
            <h2 class="section-title">Patron Fees for Audit Firm Evaluation Engagement</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Initial Scoping Call</td>
                            <td>Free - 30-minute scoping plus evaluation framework primer plus engagement options memo</td>
                        </tr>
                        <tr>
                            <td>Audit Committee Evaluation Framework Workshop</td>
                            <td>Rs 75,000 to Rs 1,50,000 - 1 week prep plus 1 session (2-3 hours)</td>
                        </tr>
                        <tr>
                            <td>RFP Drafting for Audit Firm Shortlisting</td>
                            <td>Rs 1,00,000 to Rs 2,50,000 - 2 to 3 weeks</td>
                        </tr>
                        <tr>
                            <td>Audit Firm Proposal Evaluation (3 to 5 proposals)</td>
                            <td>Rs 1,50,000 to Rs 4,00,000 - 3 to 4 weeks; with comparative scoring matrix</td>
                        </tr>
                        <tr>
                            <td>Reference Check Coordination (2 to 3 candidates)</td>
                            <td>Rs 75,000 to Rs 2,00,000 - 2 weeks</td>
                        </tr>
                        <tr>
                            <td>Audit Committee Recommendation Memo and Board Appointment Resolution</td>
                            <td>Rs 75,000 to Rs 2,00,000 - 2 weeks; Section 177(4)(vii) compliant</td>
                        </tr>
                        <tr>
                            <td>Engagement Letter Drafting with Scope Clarity</td>
                            <td>Rs 50,000 to Rs 1,50,000 - 1 week</td>
                        </tr>
                        <tr>
                            <td>Full Evaluation Package (all of the above bundled)</td>
                            <td>Rs 4,00,000 to Rs 12,00,000 - 8 to 12 weeks end-to-end</td>
                        </tr>
                        <tr>
                            <td>Patron Accounting Professional Fees (Statutory Audit, Pvt Ltd)</td>
                            <td>Starting from INR 14,999 (Exl GST and Govt. Charges) - smaller Pvt Ltd; mid-tier scope from Rs 1,75,000 to Rs 6,00,000 per cycle</td>
                        </tr>
                        <tr>
                            <td>Patron as Candidate Audit Firm - Large Unlisted / Pre-IPO</td>
                            <td>From Rs 6,00,000 - 8 to 12 weeks per cycle; senior CA partner-led with peer review</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Audit Firm Evaluation consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20engage%20Patron%20for%20audit%20firm%20evaluation%20advisory%20and%20Audit%20Committee%20workshop." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Audit Firm Evaluation Cycle Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Audit Committee briefing</td>
                            <td>9 months before audit cycle start - adopt 10-question framework, review existing firm, decision on RFP vs continuation</td>
                        </tr>
                        <tr>
                            <td>RFP drafting</td>
                            <td>8 months before - scope, timeline, fee expectations, deliverables, evaluation criteria with weights</td>
                        </tr>
                        <tr>
                            <td>Longlist identification</td>
                            <td>8 to 7 months before - ICAI Peer Review Database, AQMM published Levels, sector research, peer Audit Committee referrals</td>
                        </tr>
                        <tr>
                            <td>Shortlist (3 to 5 firms) RFP issuance</td>
                            <td>7 months before - RFP issued; 21 to 30 day submission window</td>
                        </tr>
                        <tr>
                            <td>Proposal evaluation</td>
                            <td>6 months before - 10-question framework scoring; comparative matrix; red flag identification</td>
                        </tr>
                        <tr>
                            <td>Reference checks (top 2 to 3)</td>
                            <td>5 months before - substantive reference calls; targeted questions; cross-verification</td>
                        </tr>
                        <tr>
                            <td>Audit Committee recommendation</td>
                            <td>5 months before - Section 177(4)(vii) recommendation to Board</td>
                        </tr>
                        <tr>
                            <td>Board appointment recommendation</td>
                            <td>5 months before - Section 139(1) recommendation to AGM</td>
                        </tr>
                        <tr>
                            <td>AGM Member ratification</td>
                            <td>AGM date (within 9 months of year-end) - Member resolution under Section 139(1)</td>
                        </tr>
                        <tr>
                            <td>Form ADT-1 filing</td>
                            <td>Within 15 days of appointment - filed with ROC under Rule 4</td>
                        </tr>
                        <tr>
                            <td>Engagement letter sign-off and first audit cycle onboarding</td>
                            <td>Within 30 days of appointment; first cycle onboarding 3 to 4 months before next year-end</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Start Early:</strong> Begin the evaluation 6 to 9 months before audit rotation due date. Missing this window forces a rushed selection that defaults to incumbent or convenience-based appointments, eroding 5-10 years of audit quality. The Audit Committee briefing under Section 177(4)(vii) should be calendared for the meeting 9 months before audit cycle start - this is the single most consequential pre-audit decision.</p>

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
            <h2 class="section-title">Why Patron's Evaluation Approach Differs</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11H3v10h6V11zM21 3h-6v18h6V3zM15 7H9v14h6V7z"/></svg>
                </div>
                <h3 class="feature-title">10-Question Evaluation Framework</h3>
                <p class="feature-description">Patron's structured framework converts subjective 'fit' assessment into objective scoring across peer review, AQMM, senior partner engagement, industry expertise, working paper standard, SQC 1, SA 220, technology, references, and fee transparency - with company-specific weighting.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93z"/></svg>
                </div>
                <h3 class="feature-title">3-Tier Pricing Benchmark</h3>
                <p class="feature-description">Patron's transparent benchmark explains what Rs 30-50K Tier 1 cheap-DIY vs Rs 1-3L Tier 2 mid-tier vs Rs 8L+ Tier 3 Big-Four engagements actually deliver - exposing the false equivalence frequently created by cheap-audit propositions.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="feature-title">Tier 2 Positioning - Mid-Tier Value</h3>
                <p class="feature-description">Patron is positioned in Tier 2 with peer-reviewed firm status, senior CA partner-led engagement model, NFRA-review-grade working papers, documented SQC 1 quality control, and transparent fee structure - at one-third the typical Big-Four fee.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                </div>
                <h3 class="feature-title">Peer-Reviewed and Senior Partner-Led</h3>
                <p class="feature-description">Patron holds valid ICAI Peer Review Certificate covering engagement period. Senior CA partner with 15+ years post-qualification is substantively involved in audit planning, fieldwork supervision, key technical decisions, and sign-off - documented in the engagement letter.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/><path d="M12 7v5l3 3"/></svg>
                </div>
                <h3 class="feature-title">NFRA-Review-Grade Working Papers</h3>
                <p class="feature-description">Substantive SA 240 fraud procedures, CARO 2020 21-clause substantive working, IFC adequacy testing under SA 220, SA 260 TCWG documentation, documented SQC 1 quality control system - working paper standard built to withstand NFRA inspection.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"/></svg>
                </div>
                <h3 class="feature-title">Transparent and Predictable Fees</h3>
                <p class="feature-description">Advisory workshops from Rs 75,000; full evaluation package Rs 4-12 lakh; Patron as candidate audit firm from Rs 1.75 lakh (Pvt Ltd) or from Rs 6 lakh (large unlisted / pre-IPO). Engagement letter with explicit in-scope and out-of-scope clarity; no surprise scope-expansion billing.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Practitioner Authority - Trusted by CFOs and Audit Committees</h2>
            <div class="content-text">
                
                                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:24px;">
                    <div style="padding:20px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"The statutory audit was clean and completed well before deadline. No last-minute rush."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- MD, Trading Firm, Mumbai</p>
                    </div>
                    <div style="padding:20px;background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Startup Founder, Pune</p>
                    </div>
                </div>

                <p style="margin-top:24px;"><strong>Client Logos:</strong> Trusted by Hyundai, Asian Paints, Bridgestone and a growing roster of Pvt Ltd companies, family-business groups, and pre-IPO companies that have engaged Patron after structured audit firm evaluation processes.</p>

                <p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron services audit firm appointments across India with a consistent senior CA partner-led engagement model. Companies in any of India's major commercial hubs can engage Patron with confidence in continuity, hearing presence, and ROC coordination.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tier Comparison - Big-Four / Mid-Tier Patron / Cheap-Tier</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Tier 3 Big-Four (Rs 8L+)</th><th>Tier 2 Mid-Tier Patron (Rs 1-3L)</th><th>Tier 1 Cheap-Tier (Rs 30-50K)</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>ICAI Peer Review Certificate</td>
                            <td>Yes - mandatory</td>
                            <td>Yes - Patron is peer-reviewed</td>
                            <td>Frequently no or expired</td>
                        </tr>
                        <tr>
                            <td>AQMM Level (listed audits)</td>
                            <td>Level 3-4</td>
                            <td>Level 2-3</td>
                            <td>Typically not assessed</td>
                        </tr>
                        <tr>
                            <td>Senior CA partner engagement</td>
                            <td>Yes - typically multiple senior partners</td>
                            <td>Yes - senior partner-led</td>
                            <td>Typically junior team only</td>
                        </tr>
                        <tr>
                            <td>NFRA-review-grade working papers</td>
                            <td>Yes - global firm standard</td>
                            <td>Yes - Patron's documented standard</td>
                            <td>Typically ad-hoc</td>
                        </tr>
                        <tr>
                            <td>SQC 1 quality control system</td>
                            <td>Yes - global firm system</td>
                            <td>Yes - documented at firm level</td>
                            <td>Typically not documented</td>
                        </tr>
                        <tr>
                            <td>SA 220 engagement quality review</td>
                            <td>Yes - mandatory for listed</td>
                            <td>Yes for listed and high-risk engagements</td>
                            <td>Typically not</td>
                        </tr>
                        <tr>
                            <td>CARO 2020 substantive reporting</td>
                            <td>Yes - global standard</td>
                            <td>Yes - substantive 21-clause working</td>
                            <td>Frequently boilerplate</td>
                        </tr>
                        <tr>
                            <td>IFC adequacy testing under SA 220</td>
                            <td>Yes - global standard</td>
                            <td>Yes - documented framework</td>
                            <td>Frequently inadequate</td>
                        </tr>
                        <tr>
                            <td>Technology stack (data analytics)</td>
                            <td>Advanced - proprietary tools</td>
                            <td>Industry-standard (CaseWare etc)</td>
                            <td>Manual Excel-based</td>
                        </tr>
                        <tr>
                            <td>Industry expertise depth</td>
                            <td>Multi-sector specialist teams</td>
                            <td>Patron has sector-specific expertise</td>
                            <td>Generic</td>
                        </tr>
                        <tr>
                            <td>Fee predictability over multi-year</td>
                            <td>High - global standard</td>
                            <td>High - transparent engagement letter</td>
                            <td>Low - frequent scope expansion billing</td>
                        </tr>
                        <tr>
                            <td>NFRA disciplinary action risk</td>
                            <td>Low (despite high scrutiny)</td>
                            <td>Low (peer-reviewed, documented quality)</td>
                            <td>Higher (cheap-tier over-represented in NFRA orders)</td>
                        </tr>
                        <tr>
                            <td>Appropriate for</td>
                            <td>Listed entities; NFRA-regulated; pre-IPO global investor expectation</td>
                            <td>Pvt Ltd; family-business groups; pre-IPO domestic; NBFCs</td>
                            <td>AVOID for any company with material compliance / lender / investor exposure</td>
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
            <h2 class="section-title">Related Patron Audit Services</h2>
            <div class="content-text">
                
                                <p>Pair audit firm evaluation advisory with related Patron audit cluster services. This buyer's guide is the 20th page completing Patron's comprehensive audit cluster - the 19 sister pages cover practitioner depth across the engagement lifecycle:</p>
                <ul>
                    <li>Parent service: <a href="/statutory-audit">Statutory Audit in India</a> - the practitioner depth page covering Patron's statutory audit engagement model.</li>
                    <li><a href="/first-statutory-auditor-appointment-checklist">First statutory auditor appointment checklist</a> - Section 139(6) first appointment for newly-incorporated companies.</li>
                    <li><a href="/change-of-auditor">Change of auditor</a> - Section 140 procedural compliance for auditor change.</li>
                    <li><a href="/audit-rotation-transition-india">Audit rotation transition</a> - Section 139(2) mandatory rotation framework.</li>
                    <li><a href="/caro-2020-reporting">CARO 2020 reporting</a> - audit deliverable quality benchmark for firm evaluation.</li>
                    <li><a href="/internal-financial-controls-audit">Internal Financial Controls audit</a> - Section 143(3)(i) IFC framework.</li>
                    <li><a href="/audit-report-types-india">Audit report types in India</a> - opinion type framework knowledge for buyer.</li>
                    <li><a href="/qualified-vs-unqualified-audit-opinion">Qualified vs unqualified audit opinion</a> - qualification prevention as audit firm quality marker.</li>
                    <li><a href="/private-limited-company-compliance">Private Limited company compliance</a> - statutory audit as part of broader compliance package.</li>
                    <li><a href="/due-diligence">Due diligence</a> - pre-engagement diligence on audit firm history.</li>
                </ul>
                <p style="margin-top:16px;">Verify prospective firms at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a> Peer Review Board, listed-entity requirements at the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">Securities and Exchange Board of India</a>, and disciplinary history at the <a href="https://www.nfra.gov.in" target="_blank" rel="noopener">National Financial Reporting Authority</a>.</p>

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
                
                                <p><strong>Governing Statutes and Standards:</strong> Companies Act 2013, Companies (Audit and Auditors) Rules 2014, ICAI Standards on Auditing, ICAI Peer Review Guidelines 2022, and NFRA Rules under Section 132.</p>
                <ul>
                    <li><strong>Section 139 Companies Act 2013:</strong> Appointment of auditors - first appointment under Section 139(6); subsequent appointments under Section 139(1) with Member ratification.</li>
                    <li><strong>Section 139(2):</strong> Mandatory rotation - listed companies and prescribed companies under Rule 5; individual auditor maximum 1 term of 5 years; firm maximum 2 terms of 10 years; 5-year cooling-off mandatory.</li>
                    <li><strong>Section 139(6):</strong> First auditor appointed by Board within 30 days of incorporation; holds office until conclusion of first AGM.</li>
                    <li><strong>Section 139(11):</strong> For companies required to constitute Audit Committee under Section 177, Board appointment under Section 139 is on recommendation of Audit Committee.</li>
                    <li><strong>Section 140:</strong> Removal of auditor before term-end requires Special Resolution plus Central Government approval under Section 140(1); Section 140(4) special notice for non-reappointment at AGM.</li>
                    <li><strong>Section 141:</strong> Qualification and disqualification of auditors - Section 141(1) qualification (CA / LLP under Companies Act); Section 141(3) seven disqualification categories covering body corporate, officer / employee, relative independence, indebtedness over Rs 5 lakh, guarantee over Rs 1 lakh, and business relationship.</li>
                    <li><strong>Section 144:</strong> Prohibited services - auditor cannot provide 10 prescribed non-audit services to audit client (accounting / book-keeping; internal audit; financial information system design and implementation; actuarial; investment advisory; investment banking; outsourced financial services; management services).</li>
                    <li><strong>Section 145:</strong> Auditor signs audit report with UDIN.</li>
                    <li><strong>Section 177(4)(vii):</strong> Audit Committee functions include recommendation for appointment, remuneration, and terms of appointment of auditors.</li>
                    <li><strong>Rule 4 (Companies Audit and Auditors Rules 2014):</strong> Form ADT-1 filed within 15 days of appointment.</li>
                    <li><strong>Rule 6:</strong> Rotation applicability - listed company, unlisted public company with paid-up Rs 10 crore plus, Pvt Ltd with paid-up Rs 50 crore plus OR borrowings Rs 100 crore plus, non-cooperative banking / insurance.</li>
                    <li><strong>SEBI Circular CIR/CFD/DIL/1/2010 dated 5 April 2010:</strong> Peer review mandatory for auditors of listed entities; limited review / statutory audit reports submitted to stock exchanges only by peer-reviewed auditors.</li>
                    <li><strong>ICAI Peer Review Mandate Phase I (1 April 2022) to Phase IV (1 April 2025):</strong> Progressive extension of mandatory Peer Review Certificate holding across entity categories.</li>
                    <li><strong>ICAI AQMM rev v1.0:</strong> Audit Quality Maturity Model mandatory from 1 April 2023 for firms auditing listed / bank (non-cooperative) / insurance entities; 600 points across 3 sections; Levels 1 to 4.</li>
                    <li><strong>SQC 1, SA 220, SA 240, SA 260, SA 510, SA 701:</strong> ICAI Standards on Auditing covering firm-level quality control, engagement quality review, fraud risk, TCWG communication, initial engagements, and key audit matters for listed entities.</li>
                    <li><strong>Section 132 NFRA:</strong> National Financial Reporting Authority jurisdiction over listed entities and other notified categories - audit firm inspections and disciplinary action.</li>
                </ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>

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
                    <p class="faq-expanded__lead">Answers to the most common questions from CFOs, Audit Committee Chairs, and founders evaluating statutory audit firm proposals.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I evaluate a statutory audit firm?</h3>
                        <div class="faq-expanded__a"><p>Patron's 10-question evaluation checklist covers ten dimensions - (1) ICAI Peer Review Certificate validity; (2) AQMM Level disclosure for listed audits; (3) Senior CA partner substantive engagement; (4) Industry expertise relevant to your sector; (5) NFRA-review-grade working paper standard; (6) Documented SQC 1 quality control; (7) SA 220 Engagement Quality Control Review for listed and high-risk engagements; (8) Technology stack; (9) References from comparable engagements; (10) Transparent fee structure with scope clarity. Each question is scored 0-10; comparative scoring matrix produces objective ranking. Reference checks on top 2-3 candidates frequently surface concerns not apparent in proposals.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the ICAI Peer Review Certificate and why does it matter?</h3>
                        <div class="faq-expanded__a"><p>The ICAI Peer Review Certificate is issued by the Peer Review Board of the Institute of Chartered Accountants of India to firms that have undergone the peer review process - an independent evaluation of the firm's audit and assurance quality systems and procedures. Valid Peer Review Certificate is mandatory for audits of listed entities under SEBI Circular CIR/CFD/DIL/1/2010 dated 5 April 2010. ICAI Peer Review Mandate progressively extends the requirement - Phase I from 1 April 2022 covers audits of listed entities; Phase IV from 1 April 2025 covers further categories. Practice Units must hold a valid Peer Review Certificate before accepting the audit engagement AND at the time of signing the audit report. For non-listed audits, peer review status is a strong quality marker.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is AQMM and which audit firms need it?</h3>
                        <div class="faq-expanded__a"><p>AQMM is the Audit Quality Maturity Model introduced by ICAI as rev v1.0 mandatory from 1 April 2023 for firms auditing - (a) listed entities; (b) banks other than co-operative banks (except multi-state co-operative banks); (c) insurance companies. The model has 600 points across 3 sections - Practice Management Operations, Human Resource Management, and Practice Management Strategic. Based on scores, firms arrive at a Level ranging from Level 1 (nascent) to Level 4 (significant adoption of standards and procedures). The Level is reviewed by a Peer Reviewer or AQMM Reviewer and hosted on ICAI's website alongside the peer review certificate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are realistic audit fee benchmarks in India?</h3>
                        <div class="faq-expanded__a"><p>Patron's 3-tier pricing benchmark - Tier 1 (Rs 30,000 to Rs 50,000) is cheap-DIY-style typical of junior-only teams without peer review and ad-hoc workpapers; HIGH compliance risk and AVOID for any company with material exposure. Tier 2 (Rs 1,00,000 to Rs 3,00,000) is the Patron-style mid-tier with peer-reviewed firm, senior CA partner-led approach, NFRA-review-grade working files, substantive CARO 2020 reporting; RECOMMENDED for Pvt Ltd, family-business groups, NBFCs, pre-IPO domestic, non-listed entities. Tier 3 (Rs 8,00,000+, frequently Rs 25 lakh+ for mid-size listed) is Big-Four scale appropriate for listed entities, NFRA-regulated entities, pre-IPO with global investor expectation; premium is 3-5x mid-tier.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What red flags should I watch for in audit firm selection?</h3>
                        <div class="faq-expanded__a"><p>Key red flags from Patron's catalogue - no ICAI Peer Review Certificate or expired (AUTOMATIC DISQUALIFICATION for listed audits); junior-only team without senior partner involvement; ad-hoc Excel-based workpapers without audit automation; no documented SQC 1 quality control policy; no SA 220 Engagement Quality Control Review process for listed engagements; boilerplate CARO 2020 reporting in sample reports; inadequate SA 240 fraud documentation; opaque fee structure with scope expansion potential; unwillingness to provide references for direct contact; NFRA disciplinary history; ICAI disciplinary history; disproportionately low fee proposal (60-70 percent below mid-tier benchmark). Any single red flag warrants substantive investigation; multiple red flags warrant passing on the firm.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the 10-question evaluation checklist?</h3>
                        <div class="faq-expanded__a"><p>Patron's 10-question evaluation checklist is the structured framework for buyer-stage audit firm selection. The questions cover - (Q1) Peer Review Certificate validity; (Q2) AQMM Level for listed audits; (Q3) Senior CA partner substantive engagement; (Q4) Industry expertise; (Q5) NFRA-review-grade working paper standard; (Q6) Documented SQC 1 quality control; (Q7) SA 220 Engagement Quality Control Review process; (Q8) Technology stack; (Q9) References from comparable engagements; (Q10) Transparent fee structure with scope clarity. Each question has a good-answer definition (score 8-10) and red flag indicators (score 0-3); Audit Committee weights the questions per company-specific context (industry expertise may be 20 percent for sector-specific company); comparative scoring matrix produces objective ranking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is Patron different from Big-Four and other mid-tier firms?</h3>
                        <div class="faq-expanded__a"><p>Patron is positioned in Tier 2 (mid-tier) with peer-reviewed firm status, senior CA partner-led engagement model, NFRA-review-grade working paper standard, documented SQC 1 quality control system, and transparent fee structure - at one-third the typical Big-Four fee. Patron's differentiation versus other mid-tier firms - explicit 10-question evaluation framework adoption; substantive engagement letter with scope clarity; 4-office network across Pune, Mumbai, Delhi, Gurugram; sector-specific industry expertise; documented working paper standard; consistent senior partner engagement; predictable multi-year fee structure. For listed entities, NFRA-regulated entities, and pre-IPO with global investor expectation, Big-Four (Tier 3) may be appropriate despite the premium; for Pvt Ltd, family-business groups, NBFCs, and pre-IPO domestic, Patron (Tier 2) delivers balanced quality vs cost.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How should the Audit Committee finalise audit firm appointment?</h3>
                        <div class="faq-expanded__a"><p>Patron's 7-step process - (1) Audit Committee workshop on the 10-question evaluation framework with company-specific scoring weights; (2) RFP drafting for audit firm shortlisting; (3) Shortlist (3-5 firms) RFP issuance with 21-30 day submission window; (4) 10-question framework scoring across received proposals with comparative matrix; (5) Reference checks on top 2-3 candidates with substantive targeted questions; (6) Audit Committee recommendation under Section 177(4)(vii) to Board; (7) Board appointment recommendation to AGM, Member ratification under Section 139(1), Form ADT-1 filing within 15 days under Rule 4. The audit trail documents (RFP, proposals, scoring matrix, reference notes, Audit Committee minutes, Board minutes, AGM resolution, engagement letter, ADT-1) collectively provide NFRA-inspection-grade record of the selection process.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                                <ul style="margin-top:12px;">
                    <li><strong>Audit firm kaise choose karein?</strong> Patron's 10-question evaluation checklist - peer review, AQMM Level, senior CA partner, industry expertise, NFRA-grade workpapers, SQC 1, SA 220, technology, references, fee transparency. Each question 0-10 score; comparative matrix; reference checks on top 2-3.</li>
                    <li><strong>Peer Review Certificate kya hota hai?</strong> ICAI Peer Review Board issues it after independent evaluation. Mandatory for listed audits under SEBI Circular CIR/CFD/DIL/1/2010 since 2010. Phase I from 1 April 2022; Phase IV from 1 April 2025. Valid at engagement acceptance AND at audit report signing.</li>
                    <li><strong>AQMM Level kya hai?</strong> ICAI Audit Quality Maturity Model - mandatory from 1 April 2023 for listed / bank / insurance audit firms. 600 points across 3 sections. Level 1 (nascent) to Level 4 (significant adoption). Published on ICAI website.</li>
                    <li><strong>Realistic audit fee?</strong> Tier 1 (Rs 30-50K) cheap-DIY HIGH RISK avoid. Tier 2 (Rs 1-3L) Patron-style mid-tier peer-reviewed - RECOMMENDED for Pvt Ltd / family-business / NBFC / pre-IPO domestic. Tier 3 (Rs 8L+) Big-Four for listed / NFRA-regulated / pre-IPO global - premium 3-5x mid-tier.</li>
                    <li><strong>Red flags kya hote hain?</strong> No peer review (auto-disqualification for listed); junior-only team; ad-hoc Excel workpapers; no SQC 1; no SA 220 EQCR; boilerplate CARO; inadequate SA 240; opaque fees; refusal of direct references; NFRA / ICAI disciplinary history; disproportionately low fee.</li>
                    <li><strong>Audit Committee kaise finalise karein?</strong> 7-step process - workshop on 10-question framework; RFP drafting; shortlist 3-5; proposal scoring; reference checks on top 2-3; AC recommendation under Section 177(4)(vii); Board appointment + AGM ratification + Form ADT-1 within 15 days under Rule 4.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Start the Evaluation 6 to 9 Months Before Audit Rotation</h2>
            <div class="content-text">
                
                                <p><strong>Critical Window:</strong> Begin the audit firm evaluation 6 to 9 months before the audit rotation due date. Missing this window forces a rushed selection that defaults to incumbent or convenience-based appointments, eroding 5 to 10 years of audit quality across Section 139(2) rotation cycles.</p>
                <p><strong>Cost of Failure:</strong> Auditor failure under Section 143(15) attracts Rs 1 to Rs 25 lakh penalty plus NFRA / ICAI disciplinary exposure. Cost of audit failure typically exceeds 5 to 10x the fee savings from cheap-tier audit selection.</p>
                <p><strong>Peer Review Phase IV (1 April 2025):</strong> Audit firms without valid ICAI Peer Review Certificate are automatic disqualifications for listed audits and strong negative signals for unlisted.</p>
                <p><strong>Action:</strong> Engage Patron for the Audit Committee evaluation framework workshop from Rs 75,000 or the full evaluation package from Rs 4,00,000. <a href="tel:+919459456700">Call +91 945 945 6700</a> for free 30-minute scoping call.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for Structured Audit Firm Evaluation</h2>
            <div class="content-text" style="text-align:left;">
                
                                <p style="color:rgba(255,255,255,0.92);">Evaluating a statutory audit firm is the most consequential pre-engagement decision in the audit cycle - shaping compliance quality, regulator confidence, investor diligence ratings, and the audit-cycle experience for 5 to 10 years across Section 139(2) rotation cycles. Patron's structured framework comprises the 10-question evaluation checklist (peer review, AQMM, senior CA partner, industry, workpapers, SQC 1, SA 220, technology, references, fee transparency); the ICAI Peer Review Mandate Phase I (1 April 2022) to Phase IV (1 April 2025) applicability matrix; the AQMM Level 1-4 framework; the 3-tier pricing benchmark; and the red flags catalogue covering 12 warning signs.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron's 7-step audit firm evaluation process - Audit Committee workshop with company-specific weights; RFP drafting; shortlist of 3-5 firms; proposal scoring with comparative matrix; reference checks on top 2-3 candidates; Audit Committee recommendation under Section 177(4)(vii); Board appointment with Member ratification at AGM under Section 139(1) and Form ADT-1 filing within 15 days under Rule 4. The audit trail documents collectively provide NFRA-inspection-grade record of the selection process.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron's positioning is Tier 2 mid-tier - peer-reviewed firm with senior CA partner-led engagement model, NFRA-review-grade working paper standard, documented SQC 1 quality control, transparent fee structure, 4-office network across Pune, Mumbai, Delhi, Gurugram, and sector-specific industry expertise - at one-third typical Big-Four fee. For Pvt Ltd companies, family-business groups, NBFCs, and pre-IPO domestic engagements, Patron's Tier 2 proposition delivers balanced quality vs cost outcome.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20engage%20Patron%20for%20audit%20firm%20evaluation%20advisory%20and%20Audit%20Committee%20workshop." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20Firm%20Evaluation%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20statutory%20audit%20firm%20evaluation%20advisory%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related Patron Audit Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">This buyer's guide is the 20th page completing Patron's comprehensive audit cluster - sister pages cover practitioner depth across the engagement lifecycle.</p>
          
                        <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Patron Audit Cluster Services</div>
                <div class="pa-block-sub">Practitioner-depth pages across the audit engagement lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Parent service</div></div></a>
                    <a href="/first-statutory-auditor-appointment-checklist" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">First Auditor Appointment</div><div class="pa-card-sub">Section 139(6)</div></div></a>
                    <a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M3 12a9 9 0 0118 0M21 12a9 9 0 01-18 0"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">Section 140</div></div></a>
                    <a href="/audit-rotation-transition-india" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M23 4v6h-6M1 20v-6h6"/><path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/></svg></div><div><div class="pa-card-title">Rotation Transition</div><div class="pa-card-sub">Section 139(2)</div></div></a>
                    <a href="/caro-2020-reporting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div><div><div class="pa-card-title">CARO 2020 Reporting</div><div class="pa-card-sub">Quality benchmark</div></div></a>
                    <a href="/internal-financial-controls-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">IFC Audit</div><div class="pa-card-sub">Section 143(3)(i)</div></div></a>
                    <a href="/audit-report-types-india" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">Audit Report Types</div><div class="pa-card-sub">Opinion framework</div></div></a>
                    <a href="/qualified-vs-unqualified-audit-opinion" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div><div><div class="pa-card-title">Qualified vs Unqualified</div><div class="pa-card-sub">Opinion types</div></div></a>
                </div>
            </div>

            <div class="pa-city-block">
                <div class="pa-block-title">Patron Audit Services Across India</div>
                <div class="pa-block-sub">4-office network supporting consistent senior CA partner-led engagements</div>
                <div class="pa-city-grid">
                    <a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
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
            <p>This page is reviewed quarterly (Tier 1 - 3 months) and immediately on ICAI Peer Review Mandate phase rollouts, AQMM rev revisions, NFRA disciplinary orders affecting selection guidance, audit fee benchmark trends, and Companies Act 2013 audit-related amendments.</p>
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