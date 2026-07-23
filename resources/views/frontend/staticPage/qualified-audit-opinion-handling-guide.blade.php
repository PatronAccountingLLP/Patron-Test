
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
    <title>Qualified Audit Opinion Handling</title>
    <meta name="description" content="Complete CFO handling guide for qualified audit opinions - 7-day response, stakeholder communication, Section 134(3)(f) Board Report and AOC-4 filing.">
    <link rel="canonical" href="/qualified-audit-opinion-handling-guide">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Qualified Audit Opinion Handling 2026 | Patron Accounting">
    <meta property="og:description" content="Complete CFO handling guide for qualified audit opinions - 7-day response, stakeholder communication, Section 134(3)(f) Board Report and AOC-4 filing.">
    <meta property="og:url" content="/qualified-audit-opinion-handling-guide">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/qualified-audit-opinion-handling-guide-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Qualified Audit Opinion Handling 2026 | Patron Accounting">
    <meta name="twitter:description" content="Complete CFO handling guide for qualified audit opinions - 7-day response, stakeholder communication, Section 134(3)(f) Board Report and AOC-4 filing.">
    <meta name="twitter:image" content="/images/qualified-audit-opinion-handling-guide-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/qualified-audit-opinion-handling-guide#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
            { "@type": "ListItem", "position": 3, "name": "Qualified Audit Opinion Handling Guide", "item": "/qualified-audit-opinion-handling-guide" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/qualified-audit-opinion-handling-guide#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What should a company do after receiving a qualified audit opinion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron's 7-step handling playbook - Day 0 audit committee briefing within 24 hours of sign-off; 5-stakeholder identification covering Banks, Investors, Customers, Employees and Regulators; communication pack drafting for each category; Section 134(3)(f) Board Report substantive explanation drafting following 4-element standard (factual acknowledgment, management view, remediation steps, timeline); AGM coordination; AOC-4 filing within 30 days of AGM; Year-1-to-Year-2 remediation roadmap initiation. Listed entities require SEBI LODR Regulation 30 24-hour notification."
              }
            },
            {
              "@type": "Question",
              "name": "How does a qualified opinion affect bank loans and credit facilities?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Banks read every audit report during loan origination and at annual review. A qualified opinion triggers additional diligence and potentially covenant breach. Most loan covenants include 'no qualified audit opinion' as a representation - the qualified opinion triggers a technical covenant breach requiring waiver. Patron prepares a lender briefing memo with qualification context, financial-statement-level effect, remediation plan and proposed waiver terms. Typical waiver outcomes - 90 to 180 day covenant cure period, pricing increase of 50 to 100 basis points."
              }
            },
            {
              "@type": "Question",
              "name": "What goes in the Section 134(3)(f) Board Report explanation on a qualified opinion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron's 4-element substantive drafting standard - (1) Factual acknowledgment with verbatim quote or substantive extract from the Basis for Qualified Opinion paragraph; (2) Management view with agreement or respectful disagreement and specific reasoning; (3) Remediation steps with operational detail including names of working papers, dates of Board approvals and specific process changes; (4) Implementation timeline with quarterly milestones leading to target clean opinion. Boilerplate 'the matter has been noted' explanations attract NFRA scrutiny."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to remove a qualified opinion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Removal typically takes 1 to 3 audit cycles depending on qualification cause. GAAP departure qualifications can usually be removed in the next audit through corrective accounting and AS 5 or Ind AS 8 prior period correction. Insufficient audit evidence qualifications usually resolve once predecessor cooperation or alternative procedures provide evidence. Scope limitation qualifications remove once management releases the limitation. Significant uncertainty qualifications including going concern may take 1 to 3 cycles depending on business turnaround."
              }
            },
            {
              "@type": "Question",
              "name": "How should listed entities disclose qualified opinions to investors?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Listed entities face SEBI LODR Regulation 30 24-hour notification requirement on qualified audit reports. Patron's listed-entity playbook coordinates SEBI LODR notification timing with auditor sign-off (typically within 4 to 12 hours), prepares stock exchange filing with substantive context, schedules analyst conference call within 48 hours of disclosure, prepares CFO talking points for media and coordinates with merchant banker for context-setting. Stock price reactions typically 5 to 15 percent on initial disclosure can be mitigated with structured response."
              }
            },
            {
              "@type": "Question",
              "name": "Can a company file AOC-4 with a qualified audit report?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. AOC-4 filing within 30 days of AGM under Section 137 is mandatory regardless of audit opinion type. The complete audit report package attached to AOC-4 includes main audit report under SA 705 with qualified opinion, Annexure A CARO 2020, Annexure B IFC under Section 143(3)(i), Board Report with Section 134(3)(f) substantive explanation, Director Responsibility Statement under Section 134(5) and audited financial statements in Schedule III format under Section 129. AOC-4 filing makes the qualified report public record."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Year-1-to-Year-2 qualification remediation roadmap?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron's 7-step Year-1-to-Year-2 remediation roadmap - (1) Cause analysis at sign-off; (2) Remediation plan design Months 1-2; (3) AS 5 or Ind AS 8 prior period correction evaluation Month 2-3; (4) Implementation Months 3-8; (5) Interim verification 6 months before next year-end via Patron's PAII review; (6) Pre-audit cleanup 1 month before next year-end; (7) Next year audit with clean opinion drafting and comparative restatement if AS 5 / Ind AS 8 route taken."
              }
            },
            {
              "@type": "Question",
              "name": "How can Patron help prevent qualified opinions in subsequent audit cycles?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron's qualification-prevention approach - (1) Pre-Audit Issue Identification review 6 months before next year-end specifically tests qualification triggers from the prior cycle; (2) Mid-engagement remediation window with SA 260 TCWG communication during audit fieldwork allows management to evaluate remediation options before audit report drafting; (3) Structured remediation paths including corrective accounting, additional documentation, scope-limitation release and enhanced disclosure; (4) Audit Committee briefing pack with substantive Section 134(3)(f) draft language. Bundled within audit engagement where Patron is next year's auditor."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/qualified-audit-opinion-handling-guide#service",
          "name": "Qualified Audit Opinion Handling Guide for Companies",
          "url": "/qualified-audit-opinion-handling-guide",
          "description": "CFO post-receipt handling playbook for companies that have just received a qualified audit opinion under SA 705 (Revised) or expect one during ongoing audit fieldwork - covering the 7-day immediate response, 5-stakeholder communication playbook for Banks and Lenders, Equity Investors and PE, Customers, Employees and Regulators, Section 134(3)(f) Board Report substantive explanation drafting, AOC-4 filing under Section 137 within 30 days of AGM, SEBI LODR Regulation 30 24-hour notification for listed entities, and Year-1-to-Year-2 remediation roadmap targeting clean unmodified opinion in the next audit cycle. Starting fee Rs 1,00,000 for 7-day immediate response.",
          "provider": { "@id": "/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "serviceType": "Qualified Audit Opinion CFO Handling and Stakeholder Communication Advisory",
          "about": [
            { "@type": "Thing", "name": "Auditor's report", "sameAs": "https://en.wikipedia.org/wiki/Auditor%27s_report" },
            { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
            { "@type": "Thing", "name": "Audit", "sameAs": "https://en.wikipedia.org/wiki/Audit" }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Qualified Audit Opinion Handling Engagements",
            "itemListElement": [
              { "@type": "Offer", "name": "Immediate Response Playbook - 7 days post sign-off - audit committee briefing, stakeholder identification, communication pack drafting", "price": "100000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-audit-opinion-handling-guide" },
              { "@type": "Offer", "name": "5-Stakeholder Communication Playbook - lender, investor, customer, employee, regulator scripts and disclosure tactics", "price": "150000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-audit-opinion-handling-guide" },
              { "@type": "Offer", "name": "Section 134(3)(f) Board Report Substantive Drafting and AOC-4 Filing Coordination with qualified report package", "price": "75000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-audit-opinion-handling-guide" },
              { "@type": "Offer", "name": "Year-1-to-Year-2 Remediation Advisory plus AS 5 or Ind AS 8 prior period correction support across audit cycles", "price": "200000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-audit-opinion-handling-guide" }
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
        /* Amount column  -  right-align only on tables with .table-amount class */
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
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
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

        /* Process Evidence Screenshot  -  Plan 3.2 */
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

/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}
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
                        Qualified Audit Opinion Handling Guide for Companies 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Operational Guide:</span> CFO post-receipt response playbook - 7-day immediate response, 5-stakeholder playbook, Section 134(3)(f) drafting, AOC-4 filing, Year-1-to-Year-2 remediation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Immediate response from Rs 1,00,000; 5-stakeholder playbook Rs 1,50,000+; full handling package Rs 5-18 lakh; standalone advisory engagement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Companies that have JUST received qualified audit opinion OR expect one during ongoing fieldwork - Pvt Ltd, listed entity, NBFC, family-group, M&amp;A target</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Anchor:</span> Section 134(3)(f) Companies Act 2013 mandatory Board Report explanation; Section 137 AOC-4 30-day filing; SEBI LODR Regulation 30 24-hour listed notification; SA 705 (Revised)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India - 15+ years of qualified audit opinion handling depth across Pvt Ltd entities, listed entities, NBFCs and family-business groups - rated 4.9 on Google.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20received%20a%20qualified%20audit%20opinion%20and%20need%20Patron%27s%20immediate%20response%20playbook.%20Please%20engage%20within%2024%20hours." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Qualified Opinion Handling'/>
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
                                
<option value="qualified-audit-opinion-handling-guide" selected>Qualified Audit Opinion Handling</option>
<option value="statutory-audit">Statutory Audit (National Hub)</option>
<option value="statutory-audit-private-limited-company">Pvt Ltd Statutory Audit</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
<option value="change-of-auditor">Change of Auditor</option>
<option value="private-limited-company-compliance">Pvt Ltd Compliance</option>
<option value="tax-audit">Tax Audit</option>
<option value="gst-audit">GST Audit</option>
<option value="internal-audit">Internal Audit</option>
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
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our FY 2024-25 statutory audit came back with a qualified opinion on inventory cut-off. Patron engaged within 12 hours of sign-off, coordinated the SEBI LODR Regulation 30 notification, scheduled the analyst conference call within 48 hours and prepared CFO talking points for media. Stock price reaction held to 4 percent vs the typical 10-15 percent we were expecting.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit M.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Listed Pharma, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We were in the middle of Series C diligence when our prior year qualified opinion surfaced as a deal-breaker. Patron prepared the mitigating-context investor briefing pack, quantified the qualification-specific financial effect (Rs 38 lakh vs the 12 percent valuation discount the lead was demanding) and secured auditor written confirmation that remediation was feasible. The discount got capped at 3 percent with milestone-based escrow.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Saurabh P.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, SaaS Pvt Ltd, Bengaluru</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our term lender flagged the qualified opinion at AGM and threatened to invoke the covenant breach clause. Patron drafted the lender briefing memo, set up the relationship-manager meeting before the AOC-4 filing went public, and secured a 120-day cure period waiver with a 75 bps pricing increase. The structured response was the difference between a renegotiated facility and an accelerated repayment.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Aniket K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Manufacturing Pvt Ltd, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">NFRA scrutiny of Section 134(3)(f) Board Report explanations was on our risk radar. Patron drafted the substantive explanation using their 4-element standard - factual acknowledgment verbatim, management view with reasoning, remediation steps with working paper references, quarterly milestone timeline. The Audit Committee minutes referenced everything in the explanation; the NFRA review last quarter passed without observation.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VG</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vidya G.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Audit Committee Chair, NBFC, Delhi NCR</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Three subsidiary qualifications were affecting our group consolidation and PE diligence ahead of our next funding round. Patron mapped the AS 5 / Ind AS 8 prior period correction route across all three, scheduled the 6-month-before-year-end PAII reviews and worked with the next-year auditor on comparative restatement. Two of the three subsidiaries got clean opinions in FY 2024-25; the third in FY 2025-26.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Ashish B.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Group CFO, Family Business Group, Hyderabad</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our auditor disagreed on related-party Section 188 disclosure and qualified the audit. Patron supported the Section 140 procedural compliance for auditor change at the next AGM, prepared the predecessor handover under ICAI inter-firm guidance, and coordinated CARO 2020 Clause 3(xviii) reporting by the incoming auditor. The transition went through with full Audit Committee governance and zero shareholder pushback.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Nidhi R.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, D2C Pvt Ltd, Gurugram</div>
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
                    <p>Talk to a Patron CA team specialising in qualified audit opinion handling - 7-day immediate response playbook, 5-stakeholder communication scripts, Section 134(3)(f) substantive drafting, AOC-4 filing coordination and Year-1-to-Year-2 remediation roadmap.</p>
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
<a href="#who-section" class="toc-btn">When It Triggers</a>
<a href="#services-section" class="toc-btn">Patron Services</a>
<a href="#procedure-section" class="toc-btn">7-Step Playbook</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Pricing</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Benefits</a>
<a href="#comparison-section" class="toc-btn">DIY vs Patron</a>
<a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview of Qualified Audit Opinion Handling</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Qualified Opinion Handling Services at a Glance</strong></p>
                    <p>Qualified audit opinion handling refers to the company response after receiving (or in anticipation of) a qualified audit opinion under SA 705 (Revised) - the "except for" opinion indicating that financial statements give a true and fair view EXCEPT FOR a specific matter that is material but not pervasive. Handling covers four dimensions - immediate 7-day response, 5-stakeholder communication, Companies Act compliance (Section 134(3)(f) Board Report and AOC-4 filing), and Year-1-to-Year-2 remediation toward clean opinion in next audit cycle.</p>
                </div>
                <p>Receiving a qualified audit opinion is one of the most consequential moments in a company's annual reporting cycle. The "except for" wording in the audit report under SA 705 (Revised) is a public-record document that lenders, investors, regulators, customers and employees can read. The business impact - covered in detail on the sister page on qualified vs unqualified opinions - includes lender covenant triggers, equity investor valuation discounts of 5 to 15 percent, M&amp;A escrow conditions, listed-entity stock price reactions, NFRA regulatory scrutiny and mandatory Section 134(3)(f) Board Report explanation.</p>
                <p>This page focuses on what CFOs and management teams should DO AFTER receiving the qualification (or in anticipation of one) - the operational handling playbook. The 7-day immediate response window is the most important - decisions made in the first week after sign-off shape the multi-month stakeholder management cycle that follows. Patron's handling approach is structured around five stakeholder categories (Banks and Lenders, Equity Investors and PE, Customers, Employees, Regulators) with specific communication scripts and disclosure tactics, paired with the four-element Section 134(3)(f) substantive drafting standard and a Year-1-to-Year-2 remediation roadmap typically achieving clean unmodified opinion within one to three audit cycles.</p>
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
                <h2 class="section-title">What Is Qualified Audit Opinion Handling</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Qualified audit opinion handling refers to the company's operational response to receiving (or anticipating) a qualified audit opinion under SA 705 (Revised) - covering immediate post-receipt actions, stakeholder communication across five categories, Companies Act compliance (Section 134(3)(f) Board Report and Form AOC-4 filing under Section 137) and Year-1-to-Year-2 remediation toward clean unmodified opinion in subsequent audit cycles. The handling response begins on Day 0 (audit report sign-off date) and continues through the next year's audit cycle.</p>

<p>Qualified audit opinions arise when the auditor concludes under SA 705 that either (a) the financial statements are materially misstated but the misstatement is NOT pervasive, or (b) the auditor is unable to obtain sufficient appropriate audit evidence on a matter that is material but NOT pervasive. The qualified opinion uses "except for" language - <em>"In our opinion, except for the effects of the matter described in the Basis for Qualified Opinion section, the financial statements give a true and fair view"</em>. The trigger categories (GAAP departure, insufficient evidence, scope limitation, significant uncertainty) and the prevention methodology are covered on the sister practitioner framework page in the same audit cluster.</p>

<p>This page focuses on operational handling - the practical CFO and management response. The handling dimensions are operationally distinct from the practitioner framework. While practitioners focus on whether qualification is appropriate and how to remove it from the audit perspective, CFOs face a different set of decisions - which stakeholders to notify and in what order, what to say in each communication, how to draft the Section 134(3)(f) Board Report substantive explanation, how to file Form AOC-4 with the qualified report, how to manage the AGM agenda, how to coordinate next year's auditor relationship and how to plan AS 5 or Ind AS 8 prior period correction if applicable.</p>

<p>Patron Accounting LLP delivers the entire handling lifecycle as a managed advisory engagement. Our CA-led pod handles Day 0 audit committee briefing, 5-stakeholder identification and sequencing, communication pack drafting, SEBI LODR Regulation 30 24-hour notification coordination for listed entities, Section 134(3)(f) substantive drafting, AGM coordination, AOC-4 filing with the qualified report package, and Year-1-to-Year-2 remediation roadmap initiation - with cross-sell to /statutory-audit, /appointment-of-auditor, /change-of-auditor and /private-limited-company-compliance delivering a single CA pod across the audit cluster.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Qualified Opinion Handling:</strong></p>
                    
<ul>
    <li><strong>Qualified Audit Opinion (SA 705):</strong> "Except for" opinion under Standard on Auditing 705 (Revised) - financial statements give true and fair view except for a specific matter that is material but not pervasive.</li>
    <li><strong>Section 134(3)(f) Board Report Explanation:</strong> MANDATORY Companies Act 2013 requirement - Board Report must contain explanations or comments on every qualification, reservation, adverse remark or disclaimer made by the auditor. Substantive content required; boilerplate explanations scrutinised in NFRA inspections.</li>
    <li><strong>Form AOC-4 Filing:</strong> Filed by company with ROC within 30 days of AGM under Section 137 of the Companies Act 2013. Attaches main audit report under SA 705 (qualified), Annexure A CARO 2020, Annexure B IFC under Section 143(3)(i), and Board Report including Section 134(3)(f) explanation.</li>
    <li><strong>SEBI LODR Regulation 30:</strong> Listed Entity Disclosure Obligations - material event disclosure within 24 hours; auditor's qualified opinion is a material event requiring stock exchange notification for NSE / BSE listed entities.</li>
    <li><strong>AS 5 / Ind AS 8 Prior Period Correction:</strong> Accounting standards governing prior period item correction in current year's financial statements. Where qualification was driven by misstatement requiring restatement of comparatives, this route is used in the next audit cycle to remove qualification.</li>
    <li><strong>Patron's Qualification-Prevention Approach:</strong> Pre-Audit Issue Identification (PAII) review 6 months before next year-end; mid-engagement remediation window with SA 260 TCWG communication; structured remediation roadmap targeting clean unmodified opinion in 1 to 3 audit cycles.</li>
    <li><strong>4-Quadrant Response Decision Tree:</strong> Patron's framework for categorising handling response - axes are (a) Already received vs Expecting and (b) Material qualification vs Not material qualification. Each quadrant has a different response strategy.</li>
    <li><strong>SA 260 (Revised) TCWG Communication:</strong> Auditor's pre-sign-off communication to Those Charged with Governance on identified matters that may trigger qualification - the trigger window for management remediation before audit report drafting.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Qualified Opinion Handling</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Built for CFOs</span>
                        <strong>7-Day Response + 5-Stakeholder Playbook</strong>
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
            <h2 class="section-title">When Does the Handling Response Trigger</h2>
            <div class="content-text">
                
                
<p>The handling response triggers in two scenarios - (a) <strong>Already received</strong> - the audit report has been signed under Section 145 with UDIN and includes a qualified opinion under SA 705; (b) <strong>Expecting one</strong> - the auditor has flagged a likely qualification during audit fieldwork under SA 260 TCWG communication, and management is in the remediation window before audit report drafting. Each scenario triggers different sub-playbooks.</p>

<p><strong>Scenario A - Already Received Qualified Audit Report:</strong> Day 0 is the audit report sign-off date. The handling response covers audit committee briefing within 24 hours, stakeholder identification (banks, equity investors, customers, employees, regulators), communication pack drafting, AGM coordination (the qualified report will be tabled before shareholders at the AGM), Section 134(3)(f) Board Report substantive explanation, Form AOC-4 filing within 30 days of AGM and Year-1-to-Year-2 remediation planning initiated immediately. For listed entities, SEBI LODR Regulation 30 notification within 24 hours of sign-off is mandatory.</p>

<p><strong>Scenario B - Expecting Qualified Audit Report:</strong> During audit fieldwork, the auditor has communicated under SA 260 (Revised) that one or more matters may trigger qualification - typical examples include inventory cut-off failure, related-party non-disclosure under Section 188, Section 269ST cash receipt above Rs 2 lakh, IFC Material Weakness or going concern uncertainty under SA 570. Management is in the remediation window (typically 2 to 6 weeks before audit report drafting). The handling response focuses on remediation evaluation, TCWG decision under SA 260, pre-emptive stakeholder briefing if qualification appears unavoidable and Section 134(3)(f) draft preparation in parallel with audit report drafting.</p>

<p style="margin-top:16px;"><strong>Applicability by Company Type:</strong></p>
<div style="overflow-x:auto;">
<table style="width:100%;border-collapse:collapse;margin-top:8px;">
    <thead>
        <tr style="background:var(--blue);color:#fff;">
            <th style="padding:10px;text-align:left;font-size:13px;">Company Type</th>
            <th style="padding:10px;text-align:left;font-size:13px;">SEBI LODR Notification</th>
            <th style="padding:10px;text-align:left;font-size:13px;">AOC-4 Filing</th>
            <th style="padding:10px;text-align:left;font-size:13px;">Investor Diligence Impact</th>
        </tr>
    </thead>
    <tbody>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Listed entity (NSE / BSE)</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Within 24 hours - Regulation 30 material event</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Within 30 days of AGM under Section 137</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Stock price 5-15% drop; analyst downgrade risk; passive fund outflow</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Large unlisted public co (Rs 10 cr+ paid-up)</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Not applicable</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Within 30 days of AGM</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Public deposit holder concerns; lender covenant questions; pre-IPO transition</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Pvt Ltd company (Rs 20 cr+ paid-up)</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Not applicable</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Within 30 days of AGM</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">PE investor diligence at next round; lender covenant questions; family-group consolidation</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Small Pvt Ltd company</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Not applicable</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Within 30 days of AGM</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Limited stakeholder base; lender covenant questions; vendor / customer generally unaffected</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">NBFC / Bank / Insurance</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Sector regulator notification (RBI / IRDAI)</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Within 30 days of AGM</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Regulator scrutiny intensifies; capital adequacy / solvency implications</td></tr>
        <tr><td style="padding:10px;font-size:13px;">Section 8 / Trust / Society</td><td style="padding:10px;font-size:13px;">Not applicable</td><td style="padding:10px;font-size:13px;">Within 30 days of AGM</td><td style="padding:10px;font-size:13px;">Donor / grant body queries; FCRA registration implications if applicable</td></tr>
    </tbody>
</table>
</div>

<p style="margin-top:16px;"><strong>Statutory Trigger Calendar:</strong></p>
<ul>
    <li>Day 0 - Audit report sign-off under Section 145 with UDIN</li>
    <li>Within 24 hours - SEBI LODR Regulation 30 notification (listed entities)</li>
    <li>Day 1 to Day 7 - Audit committee briefing, stakeholder communication packs delivered</li>
    <li>Within 30 days of AGM - Form AOC-4 filing under Section 137</li>
    <li>Within 60 days of AGM - Form MGT-7 annual return under Section 92</li>
    <li>Within 9 months of FY-end - AGM under Section 96 (or 6 months for non-first year)</li>
    <li>6 months before next year-end - Patron Pre-Audit Issue Identification (PAII) review</li>
</ul>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's Qualified Opinion Handling Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Immediate Response (First 7 Days Post Sign-Off)</td><td>Day 0 audit committee briefing under Section 177; stakeholder identification matrix; communication pack drafting; SEBI LODR Regulation 30 notification coordination for listed entities; AGM agenda coordination. Engagement starts within 24 hours of qualified audit report sign-off.</td></tr>
<tr><td>5-Stakeholder Communication Playbook</td><td>Category-specific scripts for Banks and Lenders (covenant briefing, waiver request, remediation plan presentation), Equity Investors and PE (transparent disclosure with mitigating context), Customers (typically no direct disclosure but indirect impact via credit terms), Employees (Section 138 internal audit-team briefing and ESOP impact), Regulators (SEBI LODR for listed, RBI / IRDAI for sector, ROC via AOC-4).</td></tr>
<tr><td>Section 134(3)(f) Board Report Substantive Drafting</td><td>4-element substantive standard - factual acknowledgment (verbatim from Basis for Qualified Opinion), management view (agreement or respectful disagreement with reasoning), remediation steps with operational detail, implementation timeline with quarterly milestones. NFRA-review-grade content rather than boilerplate.</td></tr>
<tr><td>AOC-4 Filing with Qualified Report Package</td><td>Form AOC-4 filed under Section 137 within 30 days of AGM - main audit report under SA 705 with qualified opinion, Annexure A CARO 2020, Annexure B IFC under Section 143(3)(i), Board Report with Section 134(3)(f) explanation, Director Responsibility Statement under Section 134(5) and audited financial statements in Schedule III format under Section 129.</td></tr>
<tr><td>AGM Coordination With Qualified Report on Table</td><td>Shareholder Q and A preparation with specific scripts for common qualification questions; auditor coordination for any direct shareholder questions; auditor re-appointment under Section 139(1) or auditor change under Section 140 if qualification disagreement; Section 134(3)(f) explanation referenced in Director's Report tabled at AGM.</td></tr>
<tr><td>Year-1-to-Year-2 Remediation Roadmap</td><td>Cause analysis, remediation plan design, AS 5 or Ind AS 8 prior period correction route evaluation, interim verification scheduling 6 months before next year-end, pre-audit cleanup planning, next year audit clean opinion drafting target. Roadmap presented to Audit Committee within 30 days of sign-off.</td></tr>
<tr><td>AS 5 / Ind AS 8 Prior Period Correction Support</td><td>Where prior period correction route is taken for qualification removal in subsequent year - correction items identification, restated comparatives preparation, working paper documentation and coordination with next year's auditor for comparative restatement audit.</td></tr>
<tr><td>Listed Entity SEBI LODR Coordination</td><td>SEBI LODR Regulation 30 notification timing coordination with auditor sign-off; stock exchange filing preparation; analyst conference call coordination within 48 hours; CFO talking points for media inquiries; merchant banker coordination for context-setting; investor relations briefing pack with comparative analysis.</td></tr>
<tr><td>Statutory Audit Bundling for Subsequent Cycle</td><td>Where Patron is also engaged as the next year's auditor under Section 139, the qualification-prevention work is bundled within the audit engagement - Pre-Audit Issue Identification (PAII) review, mid-engagement remediation window with SA 260 TCWG communication and structured remediation paths.</td></tr>


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
            <h2 class="section-title">Our 7-Step Qualified Opinion Handling Playbook</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured CA-led response from Day 0 audit report sign-off through next year clean opinion drafting - covering immediate response, 5-stakeholder communication, Section 134(3)(f) substantive drafting, AGM coordination, AOC-4 filing under Section 137, and Year-1-to-Year-2 remediation under SA 705 and SA 260.</p>
        </div>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Day 0 Audit Committee Briefing</h3>
        <p class="step-description">Within 24 hours of qualified audit report sign-off, Patron coordinates the Audit Committee briefing under Section 177 - qualification summary memo, financial-statement-level effect, auditor concerns acknowledged, management response options tabled, communication timing decisions taken.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            24-hour AC briefing
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Section 177 governance
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Decisions tabled in minutes
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="32" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/><text x="60" y="48" font-size="20" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">DAY</text><text x="60" y="68" font-size="22" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">0</text></svg>
            </div>
            <span class="illustration-label">Day 0 Briefing</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">5-Stakeholder Identification and Sequencing</h3>
        <p class="step-description">Stakeholder identification matrix across five categories - Banks and Lenders, Equity Investors and PE, Customers, Employees, Regulators - with notification priority, channel, timing and message-mapping per category. SEBI LODR Regulation 30 listed-entity 24-hour priority.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            5-category matrix
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Priority sequencing
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            SEBI LODR fast-track if listed
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="20" cy="50" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><circle cx="40" cy="30" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><circle cx="60" cy="50" r="11" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><circle cx="80" cy="30" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><circle cx="100" cy="50" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><line x1="29" y1="50" x2="49" y2="50" stroke="#14365F" stroke-width="1" stroke-dasharray="2,2"/><line x1="49" y1="36" x2="49" y2="44" stroke="#14365F" stroke-width="1" stroke-dasharray="2,2"/><line x1="71" y1="50" x2="91" y2="50" stroke="#14365F" stroke-width="1" stroke-dasharray="2,2"/><line x1="71" y1="36" x2="71" y2="44" stroke="#14365F" stroke-width="1" stroke-dasharray="2,2"/></svg>
            </div>
            <span class="illustration-label">Stakeholder Matrix</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Communication Pack Drafting</h3>
        <p class="step-description">Category-specific communication packs delivered between Day 1 and Day 7 - lender briefing memo with covenant analysis and waiver request, equity investor briefing pack with mitigating context, employee internal cascade, regulator filings with statutory disclosure plus remediation commitment.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Lender memo + waiver ask
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Investor mitigating context
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Regulator statutory filings
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="22" width="48" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><rect x="54" y="14" width="48" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><rect x="62" y="24" width="32" height="2" fill="#E8712C"/><rect x="62" y="32" width="28" height="2" fill="#14365F" opacity="0.4"/><rect x="62" y="40" width="30" height="2" fill="#14365F" opacity="0.4"/><rect x="62" y="48" width="26" height="2" fill="#14365F" opacity="0.4"/><rect x="62" y="56" width="30" height="2" fill="#14365F" opacity="0.4"/></svg>
            </div>
            <span class="illustration-label">Comms Packs</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Section 134(3)(f) Substantive Drafting</h3>
        <p class="step-description">Patron drafts the Board Report Section 134(3)(f) explanation using the 4-element substantive standard - factual acknowledgment verbatim from Basis for Qualified Opinion, management view with specific reasoning, remediation steps with operational detail, implementation timeline with quarterly milestones.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            4-element standard
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            NFRA-review grade
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Quarterly milestone timeline
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="14" width="84" height="74" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">134(3)(f)</text><rect x="28" y="42" width="64" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="50" width="56" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="58" width="60" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="66" width="48" height="2" fill="#14365F" opacity="0.4"/><circle cx="92" cy="78" r="8" fill="#10B981"/><path d="M88 78l3 3 5-5" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">134(3)(f) Draft</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">AGM Coordination With Qualified Report</h3>
        <p class="step-description">The qualified audit report is tabled before shareholders at the AGM under Section 96. Patron prepares shareholder Q and A scripts, coordinates auditor presence for direct questions, supports auditor re-appointment under Section 139(1) or change under Section 140 if qualification disagreement.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            AGM Q&amp;A scripts
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Auditor coordination
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Sec 140 path if disagreement
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="36" width="80" height="44" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><polyline points="20,36 60,16 100,36" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><circle cx="40" cy="58" r="5" fill="#14365F"/><circle cx="60" cy="58" r="5" fill="#14365F"/><circle cx="80" cy="58" r="5" fill="#14365F"/><text x="60" y="32" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">AGM</text></svg>
            </div>
            <span class="illustration-label">AGM</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">AOC-4 Filing Within 30 Days of AGM</h3>
        <p class="step-description">Form AOC-4 filed by the company with ROC under Section 137 within 30 days of AGM - main audit report under SA 705 with qualified opinion, Annexure A CARO 2020, Annexure B IFC, Board Report with Section 134(3)(f) explanation, Director Responsibility Statement, declaration coordination. MGT-7 follows in 60 days.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            30-day Sec 137 deadline
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Full audit package attached
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            MGT-7 in 60 days
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="12" width="60" height="74" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="48" y="32" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">AOC-4</text><rect x="28" y="40" width="40" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="48" width="34" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="56" width="38" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="64" width="32" height="2" fill="#14365F" opacity="0.4"/><circle cx="92" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><text x="92" y="38" font-size="9" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">30</text><text x="92" y="48" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DAYS</text></svg>
            </div>
            <span class="illustration-label">AOC-4 Filed</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Year-1-to-Year-2 Remediation Roadmap</h3>
        <p class="step-description">Patron initiates the Year-1-to-Year-2 remediation roadmap at sign-off - cause analysis, remediation plan, AS 5 or Ind AS 8 prior period correction route evaluation, interim verification 6 months before next year-end (PAII review), pre-audit cleanup, next year clean opinion drafting target.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Cause analysis at Day 0
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            6-month PAII review
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Clean opinion target
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12c-12 0-20 14-20 28v18l-8 8 8 4 4-2v8h32v-8l4 2 8-4-8-8V40c0-14-8-28-20-28z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="41" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">Y1-Y2</text><path d="M50 74l-5 12M70 74l5 12M60 80v8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Remediation</span>
            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Qualified Opinion Handling Documents Checklist</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents and registers at handling-engagement onboarding (typically within 24 hours of audit report sign-off):</p>

<p><strong>Section A - Day 0 Sign-Off Documents:</strong></p>
<ul>
    <li>Signed audit report under SA 705 with UDIN; qualified opinion paragraph; Basis for Qualified Opinion paragraph; date of signing; auditor letterhead</li>
    <li>Annexure A CARO 2020 - clause-by-clause reporting; CARO findings cross-referenced to main report qualification where applicable</li>
    <li>Annexure B IFC - Section 143(3)(i) reporting; Material Weakness disclosure if applicable</li>
    <li>Auditor SA 260 communication to TCWG - pre-sign-off communication; identified matters; remediation discussion; TCWG decision</li>
</ul>

<p><strong>Section B - Audit Committee Briefing Pack:</strong></p>
<ul>
    <li>Qualification summary memo - qualification matter; financial-statement-level effect; auditor concerns; management response options</li>
    <li>Stakeholder identification matrix - categorised list across Banks / Investors / Customers / Employees / Regulators with notification priority and communication channel</li>
    <li>Audit Committee minutes - decisions on communication timing; Section 134(3)(f) drafting direction; next year remediation initial direction</li>
</ul>

<p><strong>Section C - Stakeholder Communication Packs:</strong></p>
<ul>
    <li>Bank / lender briefing memo with qualification context, financial-statement-level effect, remediation plan, covenant compliance analysis, waiver request if needed</li>
    <li>Equity investor briefing pack with mitigating context, comparative analysis, value-preservation messaging, M&amp;A impact if transaction in progress</li>
    <li>SEBI LODR Regulation 30 notification (listed entities only) - 24-hour stock exchange filing</li>
    <li>Sector-specific regulator filing - RBI for NBFCs, IRDAI for insurance, SEBI for listed</li>
</ul>

<p><strong>Section D - Section 134(3)(f) Board Report Content:</strong></p>
<ul>
    <li>Factual acknowledgment - verbatim quote from Basis for Qualified Opinion paragraph</li>
    <li>Management view - agreement or respectful disagreement with specific reasoning</li>
    <li>Remediation steps - operational detail of corrective accounting, process change, additional documentation</li>
    <li>Implementation timeline - quarterly milestones with specific dates</li>
</ul>

<p><strong>Section E - AOC-4 Filing Package:</strong></p>
<ul>
    <li>Main audit report under SA 705 with qualified opinion</li>
    <li>Annexure A CARO 2020 - clause-by-clause reporting</li>
    <li>Annexure B IFC - Section 143(3)(i) reporting</li>
    <li>Board Report under Section 134 including Section 134(3)(f) explanation</li>
    <li>Director Responsibility Statement under Section 134(5) with IFC adequacy declaration under 134(5)(e)</li>
    <li>Audited financial statements in Schedule III format under Section 129</li>
</ul>

<p><strong>Section F - Year-1-to-Year-2 Remediation Documents:</strong></p>
<ul>
    <li>Cause analysis memo - specific facts triggering qualification, root cause identification</li>
    <li>Remediation plan - accounting / process / disclosure changes with timeline</li>
    <li>AS 5 / Ind AS 8 working where prior period correction route taken</li>
    <li>Interim verification schedule - 6 months before next year-end with specific test procedures</li>
</ul>

<p style="margin-top:16px;">Share the inventory via WhatsApp at <a href="https://wa.me/919459456700">+91 945 945 6700</a> and Patron will revert with a 7-day immediate response schedule within 4 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Key Handling Challenges and Patron's Approach</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr>
    <td>Lender Covenant Breach - Waiver Negotiation</td>
    <td>Most term loan and working capital facility agreements include "no qualified audit opinion" as a representation and warranty. The qualified opinion triggers a technical covenant breach requiring waiver from the lender.</td>
    <td>Prepare the lender briefing memo with the qualification context, financial-statement-level effect, remediation plan and proposed waiver terms; engage with the lender relationship manager BEFORE the AOC-4 filing makes the qualification public record; document the waiver in writing. Typical outcomes - 90 to 180 day covenant cure period, pricing increase of 50 to 100 basis points, or covenant relaxation tied to remediation milestone reporting.</td>
</tr>
<tr>
    <td>Equity Investor Valuation Adjustments in Funding Round / M&amp;A</td>
    <td>Where the company is in a live funding round or M&amp;A transaction, the qualified opinion triggers valuation adjustments and escrow renegotiation. PE houses typically apply 5 to 15 percent valuation discounts; M&amp;A transactions add 5 to 15 percent escrow conditions held until next year's clean audit.</td>
    <td>Prepare the mitigating-context investor briefing; quantify the qualification-specific effect (often substantially smaller than headline valuation discount being demanded); propose escrow conditions tied to specific remediation milestones (release escrow on next year's clean audit) rather than blanket holdback; coordinate auditor written confirmation that remediation plan is feasible.</td>
</tr>
<tr>
    <td>Listed Entity Stock Price and Investor Relations</td>
    <td>Listed entities face SEBI LODR Regulation 30 24-hour notification requirement on qualified audit reports. Stock price reactions are typically 5 to 15 percent on initial disclosure with potential for greater declines on subsequent diligence questions.</td>
    <td>Coordinate the SEBI LODR notification timing with auditor sign-off; prepare the investor relations briefing pack with analyst Q&amp;A scripts; coordinate with merchant banker / analyst coverage for context-setting; schedule analyst conference call within 48 hours of disclosure; prepare CFO talking points for media inquiries.</td>
</tr>
<tr>
    <td>Section 134(3)(f) NFRA Scrutiny of Board Report Explanation</td>
    <td>NFRA inspections increasingly scrutinise the Section 134(3)(f) Board Report explanation - boilerplate "matter has been noted; remediation is in progress" draws specific attention.</td>
    <td>Use the four-element substantive standard (factual acknowledgment + management view + remediation steps with operational detail + quarterly-milestone timeline); avoid hedge language ("may consider" / "might explore"); use specific dates and metrics; cross-reference to Audit Committee minutes for governance support; ensure the explanation matches what was actually communicated to the auditor under SA 260.</td>
</tr>
<tr>
    <td>Next Year Audit - Auditor Continuity Question</td>
    <td>Where the qualification reflects significant disagreement with the auditor (rather than agreed-but-unavoidable matter), management may consider auditor change at next AGM under Section 140 - Section 140(1) Central Government approval for removal during term; Section 140(4) special notice; predecessor auditor right to file Section 140(2) statement of reasons; CARO 2020 Clause 3(xviii) reporting by incoming auditor.</td>
    <td>If Patron is the incoming auditor, full predecessor cooperation under ICAI inter-firm guidance; if Patron is outgoing, Section 140(2) substantive statement with full handover. Auditor continuity is generally preferable unless fundamental disagreement - cross-sell to /change-of-auditor for Section 140 procedural compliance.</td>
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
            <h2 class="section-title">Patron Qualified Opinion Handling Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Immediate Response (7 days post sign-off)</td><td>Audit committee briefing + stakeholder identification + communication pack drafting - <strong>Rs 1,00,000 to Rs 3,00,000</strong> | Timeline: 1 week</td></tr>
<tr><td>5-Stakeholder Communication Playbook</td><td>Lender + investor + customer + employee + regulator scripts and disclosure tactics - <strong>Rs 1,50,000 to Rs 4,50,000</strong> | Timeline: 2 to 3 weeks</td></tr>
<tr><td>Section 134(3)(f) Board Report Substantive Drafting</td><td>4-element substantive drafting with NFRA-review-grade content - <strong>Rs 75,000 to Rs 2,50,000</strong> | Timeline: 1 to 2 weeks</td></tr>
<tr><td>AOC-4 Filing Coordination with Qualified Report</td><td>Section 137 filing with complete audit report package and declaration coordination - <strong>Rs 50,000 to Rs 1,50,000</strong> | Timeline: 1 to 2 weeks</td></tr>
<tr><td>AGM Coordination With Qualified Report on Table</td><td>Shareholder Q&amp;A scripts, auditor coordination, AGM agenda preparation - <strong>Rs 75,000 to Rs 2,00,000</strong> | Timeline: 1 week</td></tr>
<tr><td>Year-1-to-Year-2 Remediation Engagement (Advisory)</td><td>Cause analysis + remediation plan + PAII review + clean opinion target - <strong>Rs 2,00,000 to Rs 7,50,000</strong> | Timeline: 3 to 6 months across audit cycles</td></tr>
<tr><td>AS 5 / Ind AS 8 Prior Period Correction Support</td><td>Restatement of comparatives in next year financial statements - <strong>Rs 1,50,000 to Rs 5,00,000</strong> | Timeline: 3 to 4 weeks</td></tr>
<tr><td>Listed Entity SEBI LODR Coordination + Investor Relations Briefing</td><td>SEBI LODR Regulation 30 notification + analyst conference call + CFO media talking points - <strong>From Rs 2,50,000</strong> | Timeline: 1 to 2 weeks</td></tr>
<tr><td>Full Handling Package (all of the above bundled)</td><td><strong>Rs 5,00,000 to Rs 18,00,000</strong> | Timeline: 3 to 6 months</td></tr>
<tr><td>Statutory Audit + Qualification Prevention (next year, where Patron is also engaged as auditor)</td><td>Bundled within audit fee + 15-25 percent premium | Timeline: next audit cycle</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Qualified Opinion Handling consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20Patron%20consultation%20on%20qualified%20audit%20opinion%20handling." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline - From Sign-Off Through Next Year Clean Opinion</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Day 0 - Sign-Off</td><td>Audit report signed under Section 145 with UDIN; qualified opinion paragraph in audit report</td></tr>
<tr><td>Day 0 to Day 1 (within 24 hours)</td><td>Listed entity SEBI LODR Regulation 30 notification; Audit Committee briefing under Section 177</td></tr>
<tr><td>Day 1 to Day 3</td><td>Stakeholder identification matrix completed; communication pack drafting initiated; bank / lender preliminary notification</td></tr>
<tr><td>Day 3 to Day 7</td><td>Communication packs delivered to stakeholders; investor briefing if M&amp;A in progress; Section 134(3)(f) draft initiated</td></tr>
<tr><td>Day 7 to Day 30 (Weeks 2-4)</td><td>Section 134(3)(f) Board Report substantive explanation finalised; Board approval; AGM agenda preparation</td></tr>
<tr><td>Within 9 months of FY-end</td><td>Annual General Meeting under Section 96; qualified report tabled before shareholders; auditor re-appointment under Section 139(1) or change under Section 140</td></tr>
<tr><td>Within 30 days of AGM</td><td>Form AOC-4 filed with ROC under Section 137 with complete audit report package</td></tr>
<tr><td>Within 60 days of AGM</td><td>Form MGT-7 annual return filed with ROC under Section 92</td></tr>
<tr><td>Month 2 to Month 4 - Remediation Planning</td><td>Year-1-to-Year-2 remediation roadmap; cause analysis; remediation plan; AS 5 / Ind AS 8 evaluation</td></tr>
<tr><td>Month 4 to Month 8 - Implementation</td><td>Remediation implementation; corrective accounting; process changes; documentation procurement</td></tr>
<tr><td>6 months before next year-end</td><td>Patron Pre-Audit Issue Identification (PAII) review tests remediation effectiveness</td></tr>
<tr><td>Next year-end and audit</td><td>Year-end close; subsequent events review; next year audit with clean opinion drafting target</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
<p><strong>4-Quadrant Response Decision Tree (Patron categorises handling response into four quadrants based on (a) Already received vs Expecting and (b) Material vs Not Material qualification):</strong></p>
<ul>
    <li><strong>Already Received + Material</strong> - full handling playbook with 7-day immediate response; all 5 stakeholder categories; 4-element substantive Section 134(3)(f); full remediation roadmap with AS 5 / Ind AS 8 evaluation</li>
    <li><strong>Already Received + Not Material</strong> - streamlined handling with Section 134(3)(f) substantive but stakeholder communication scaled; lenders + investors + regulators only</li>
    <li><strong>Expecting + Material</strong> - mid-engagement remediation push to convert to clean or Material Uncertainty Related to Going Concern; pre-emptive lender briefing if covenant "no qualified opinion" representation</li>
    <li><strong>Expecting + Not Material</strong> - mid-engagement remediation to fully clean opinion typically achievable; light pre-emptive briefing or no advance communication needed</li>
</ul>


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
            <h2 class="section-title">8 Benefits of Patron's Structured Qualified Opinion Handling</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">24-Hour Engagement Start</h3>
        <p class="feature-desc">Patron engages within 24 hours of audit report sign-off - Day 0 audit committee briefing, stakeholder identification and SEBI LODR coordination for listed entities tracked from hour zero.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
        <h3 class="feature-title">5-Stakeholder Playbook</h3>
        <p class="feature-desc">Category-specific scripts for Banks and Lenders, Equity Investors and PE, Customers, Employees and Regulators - tested in 100+ engagements across listed and unlisted entities.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
        <h3 class="feature-title">NFRA-Review-Grade 134(3)(f)</h3>
        <p class="feature-desc">4-element substantive drafting standard - factual acknowledgment, management view, remediation steps, quarterly-milestone timeline - matches what was communicated to the auditor under SA 260.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
        <h3 class="feature-title">AOC-4 Filing Coordination</h3>
        <p class="feature-desc">Form AOC-4 filed under Section 137 within 30 days of AGM with the full audit report package - main report, CARO Annexure A, IFC Annexure B, Board Report and Director Responsibility Statement.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <h3 class="feature-title">Lender Covenant Mitigation</h3>
        <p class="feature-desc">Lender briefing memo with covenant analysis and waiver request - 90-180 day cure periods, pricing-only increases, or remediation-milestone covenant relaxation - secured pre-AOC-4 filing.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3 class="feature-title">SEBI LODR Listed-Entity Cover</h3>
        <p class="feature-desc">SEBI LODR Regulation 30 24-hour notification coordinated with auditor sign-off; analyst conference call within 48 hours; CFO media talking points; investor relations briefing pack with peer comparatives.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3 class="feature-title">Year-1-to-Year-2 Remediation</h3>
        <p class="feature-desc">7-step remediation roadmap from Day 0 cause analysis through next year clean opinion drafting - target clean unmodified opinion in next audit cycle or 2-3 cycles for multi-year remediation.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Qualification-Prevention Approach</h3>
        <p class="feature-desc">Pre-Audit Issue Identification (PAII) review 6 months before next year-end; mid-engagement remediation window under SA 260 TCWG - prevents qualification in subsequent cycles, bundled with audit engagement.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Trust Signals</h2>
            <div class="content-text">
                
                
<p style="font-size:18px;font-weight:600;color:var(--blue);margin-bottom:12px;">10,000+ Businesses Served &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 50,000+ Documents Filed &nbsp;|&nbsp; 15+ Years Experience</p>

<p>Trusted by CFOs, audit committees and Board chairs at Pvt Ltd entities, listed entities, NBFCs, family-business groups and M&amp;A transaction targets across SaaS, D2C, manufacturing, healthcare, NBFC and professional services. Patron qualified opinion handling teams operate from offices in Pune, Mumbai, Delhi and Gurugram with national coverage for engagement deployment within 24 hours.</p>

<p><strong>Why CFOs choose Patron:</strong> Qualified opinion handling cannot be effectively performed by the audit firm itself - the audit firm role is to AUDIT, not advise on stakeholder management of audit findings. The audit firm communication is constrained by audit professional standards. For listed entities and NFRA-monitored entities, specialised audit advisory firms with structured handling playbooks deliver superior stakeholder management outcomes at substantially lower fees than ad-hoc Big-Four advisory engagements. Patron's structured handling approach with day-by-day playbook and four-element Section 134(3)(f) drafting standard delivers professional-grade response without the cost of ad-hoc advisory.</p>

<p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves qualified opinion handling clients across India - both in-person and remotely with 24-hour engagement start.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Handling vs Audit Firm vs Big-Four Advisory vs Patron</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>DIY Handling</th><th>Audit Firm Advisory</th><th>Big-Four Ad-Hoc</th><th>Patron Structured</th></tr></thead>
                    <tbody>
                        
<tr><td>7-Day Immediate Response Playbook</td><td>Reactive</td><td>Standard audit closure</td><td>Variable</td><td><span class="badge-included">Included</span> Day-by-day CFO action plan</td></tr>
<tr><td>5-Stakeholder Communication Scripts</td><td>Generic memo</td><td>Limited (audit firm not advisory)</td><td>Variable</td><td><span class="badge-included">Included</span> Category-specific tested scripts</td></tr>
<tr><td>Section 134(3)(f) Substantive Drafting</td><td>Often boilerplate</td><td>Compliance language</td><td>Variable</td><td><span class="badge-included">Included</span> 4-element substantive standard</td></tr>
<tr><td>AOC-4 Filing Coordination</td><td>DIY</td><td>Not bundled</td><td>Variable</td><td><span class="badge-included">Included</span> Bundled with handling engagement</td></tr>
<tr><td>Year-1-to-Year-2 Remediation Roadmap</td><td>Ad-hoc</td><td>Audit-cycle-only view</td><td>Variable</td><td><span class="badge-included">Included</span> Operational roadmap from sign-off</td></tr>
<tr><td>AS 5 / Ind AS 8 Prior Period Correction Support</td><td>Limited</td><td>Audit-cycle-only view</td><td>Variable</td><td><span class="badge-included">Included</span> Dedicated technical support</td></tr>
<tr><td>Listed Entity SEBI LODR Coordination</td><td>Stock exchange filing only</td><td>Auditor sign-off only</td><td>Variable</td><td><span class="badge-included">Included</span> Notification + analyst call + media</td></tr>
<tr><td>Cost - Mid-Size Pvt Ltd Full Handling</td><td>Apparent zero - typically suboptimal</td><td>Often unbundled and expensive</td><td>Rs 8-15 lakh variable</td><td>Rs 5-18 lakh structured</td></tr>
<tr><td>Accountability for Stakeholder Outcome</td><td>Internal</td><td>Audit professional standards constrain</td><td>Engagement-specific</td><td>On Patron under engagement letter</td></tr>


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
            <h2 class="section-title">Related Patron Services for Audit Cluster</h2>
            <div class="content-text">
                
                
<p>Qualified audit opinion handling connects to several Patron service lines across the audit cluster - all delivered by the same CA and CS team for a single point of accountability.</p>
<ul>
    <li><strong><a href="/statutory-audit">Statutory Audit (Parent Hub)</a>:</strong> National statutory audit topical authority hub - methodology, applicability matrix across all entity types and Patron-vs-commodity comparison.</li>
    <li><strong><a href="/statutory-audit-private-limited-company">Pvt Ltd Statutory Audit</a>:</strong> Pvt Ltd entity-specific spoke covering CARO 2020 four-criteria exemption, Section 143(3)(i) IFC under G.S.R. 583(E), Section 139(2) rotation under Rule 5.</li>
    <li><strong><a href="/appointment-of-auditor">Appointment of Auditor</a>:</strong> ADT-1 filing service for first and subsequent auditor appointments under Sections 139(6) and 139(1).</li>
    <li><strong><a href="/change-of-auditor">Change of Auditor</a>:</strong> Section 140 procedural compliance where qualification disagreement triggers auditor change; Section 140(1) Central Government approval and Section 140(2) statement of reasons.</li>
    <li><strong><a href="/private-limited-company-compliance">Private Limited Company Compliance</a>:</strong> Annual retainer covering MGT-7 / MGT-7A, AOC-4, audit coordination and ongoing ROC obligations.</li>
    <li><strong><a href="/tax-audit">Tax Audit</a>:</strong> Section 44AB tax audit - parallel engagement where statutory audit qualification has tax adjustment implications.</li>
    <li><strong><a href="/gst-audit">GST Audit</a>:</strong> Section 35(5) CGST audit and Form 9C reconciliation - GST adjustment items can trigger statutory audit qualifications.</li>
    <li><strong><a href="/internal-audit">Internal Audit</a>:</strong> Section 138 internal audit-team briefing and ESOP-impact assessment as part of qualified opinion employee-stakeholder communication.</li>
    <li><strong><a href="/roc-notice">ROC Notice Response</a>:</strong> Defence and reply support for MCA / ROC adjudication on AOC-4 filings with qualified reports.</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework Governing Qualified Opinion Handling</h2>
            <div class="content-text">
                
                
<p><strong>Section 134, Companies Act 2013:</strong> Board Report contents and approval. <strong>Section 134(3)(f)</strong> - PRIMARY anchor for this page - Board Report MUST contain explanations or comments on every qualification, reservation, adverse remark or disclaimer made by the auditor.</p>

<p><strong>Section 134(5), Companies Act 2013:</strong> Director Responsibility Statement - five declarations including IFC adequacy under <strong>Section 134(5)(e)</strong> which creates tension with IFC qualifications (directors declaring adequate IFC while auditor qualifies IFC effectiveness).</p>

<p><strong>Section 137, Companies Act 2013 (<a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 V3 Portal</a>):</strong> Form AOC-4 filing within 30 days of AGM with audited financial statements, Board Report and audit report. <strong>Section 92</strong> - Form MGT-7 annual return within 60 days of AGM. <strong>Section 96</strong> - AGM requirements; qualified report tabled before shareholders.</p>

<p><strong>Section 143, Companies Act 2013:</strong> Auditor report contents - the statutory anchor for qualifications. <strong>Section 143(3)(b)</strong> - auditor report to state whether financial statements comply with applicable accounting standards. <strong>Section 145</strong> - auditor signs audit reports; qualified opinion signed under this section with UDIN. <strong>Section 147</strong> - penalty for misreporting Rs 25,000 to Rs 5,00,000 (auditor); Rs 1 lakh to Rs 25 lakh fraudulent; Rs 10,000 to Rs 1,00,000 (officer in default).</p>

<p><strong>Section 188, Companies Act 2013:</strong> Related party transactions - common qualification trigger when Section 188 approval missing. <strong>Section 177</strong> - Audit Committee - Section 134(3)(f) explanation discussed and recommended by Audit Committee to Board.</p>

<p><strong>ICAI Standards on Auditing:</strong> SA 700 (Revised) - Forming an Opinion and Reporting on Financial Statements (effective 1 April 2018). SA 705 (Revised) - Modifications to the Opinion - "except for" wording mandated for qualified opinion. SA 706 (Revised) - Emphasis of Matter paragraphs do NOT modify opinion. SA 570 (Revised) - Going Concern. SA 260 (Revised) - Communication with TCWG.</p>

<p><strong>AS 5 / Ind AS 8:</strong> Prior period correction route for qualification removal in subsequent year - comparatives restated in next year financial statements where prior period correction route taken.</p>

<p><strong>SEBI LODR Regulation 30 (<a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI Portal</a>):</strong> Material event disclosure for listed entities - 24-hour notification on auditor qualified opinion is a material event requiring stock exchange notification for NSE / BSE listed entities.</p>

<p><strong>CARO 2020 Clause 3(xviii) (<a href="https://www.nfra.gov.in" target="_blank" rel="noopener">NFRA Portal</a>):</strong> Auditor reporting on resignation of statutory auditors during the year - including whether issues, objections or concerns raised by outgoing auditors were considered. NFRA monitors listed-entity audit files with qualifications.</p>

<p><strong>Income Tax Section 271(1)(c):</strong> Penalty on adjustment items - qualification-driven restatement may trigger Income Tax penalty on prior years for concealment of income or furnishing of inaccurate particulars.</p>

<p><strong>RBI Master Direction on Resolution Framework:</strong> Lender response framework where qualified opinion triggers covenant breach; framework for negotiated lender response.</p>

<p style="margin-top:20px;"><strong>Penalty Snapshot</strong></p>
<ul>
    <li>Section 147 - auditor default Rs 25,000 to Rs 5,00,000; fraudulent Rs 1 lakh to Rs 25 lakh; officer in default Rs 10,000 to Rs 1,00,000</li>
    <li>Section 137 AOC-4 late filing - Rs 100 per day additional fee with no upper cap</li>
    <li>Section 92 MGT-7 late filing - Rs 100 per day additional fee</li>
    <li>SEBI LODR Regulation 30 non-compliance - SEBI adjudication and stock exchange disciplinary action</li>
    <li>Section 164(2) - 3 consecutive years of AOC-4 or MGT-7 default triggers director disqualification for 5 years</li>
    <li>Section 271(1)(c) IT Act - penalty 100 percent to 300 percent of tax on adjustment items</li>
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
                    <h2 class="faq-expanded__title">Qualified Audit Opinion Handling FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on the 7-day immediate response, 5-stakeholder communication playbook, Section 134(3)(f) Board Report substantive drafting, AOC-4 filing with qualified report, SEBI LODR Regulation 30 24-hour listed-entity notification and Year-1-to-Year-2 remediation - answered by the Patron CA team.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Qualified Audit Opinion Handling FAQs'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What should a company do after receiving a qualified audit opinion?</h3>
                        <div class="faq-expanded__a"><p>Patron&apos;s 7-step handling playbook - (1) Day 0 audit committee briefing within 24 hours of sign-off; (2) 5-stakeholder identification and sequencing covering Banks, Investors, Customers, Employees and Regulators; (3) Communication pack drafting for each category; (4) Section 134(3)(f) Board Report substantive explanation drafting following the 4-element standard (factual acknowledgment, management view, remediation steps, timeline); (5) AGM coordination with qualified report on table; (6) AOC-4 filing within 30 days of AGM; (7) Year-1-to-Year-2 remediation roadmap initiation. Listed entities additionally require SEBI LODR Regulation 30 24-hour notification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How does a qualified opinion affect bank loans and credit facilities?</h3>
                        <div class="faq-expanded__a"><p>Banks read every audit report during loan origination and at annual review. A qualified opinion triggers additional diligence and potentially covenant breach. Most loan covenants include &quot;no qualified audit opinion&quot; as a representation - the qualified opinion triggers a technical covenant breach requiring waiver. Patron prepares the lender briefing memo with qualification context, financial-statement-level effect, remediation plan and proposed waiver terms; engages with lender relationship manager BEFORE the AOC-4 filing makes the qualification public record. Typical waiver outcomes - 90 to 180 day covenant cure period, pricing increase of 50 to 100 basis points, or covenant relaxation tied to remediation milestone reporting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What goes in the Section 134(3)(f) Board Report explanation on a qualified opinion?</h3>
                        <div class="faq-expanded__a"><p>Patron&apos;s 4-element substantive drafting standard - (1) Factual acknowledgment with verbatim quote or substantive extract from the Basis for Qualified Opinion paragraph; (2) Management view with agreement or respectful disagreement and specific reasoning; (3) Remediation steps with operational detail including names of working papers, dates of Board approvals and specific process changes implemented; (4) Implementation timeline with quarterly milestones leading to target clean opinion in subsequent audit cycle. Boilerplate explanations like &quot;the matter has been noted; remediation is in progress&quot; attract NFRA inspection scrutiny and lender / investor diligence questions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does it take to remove a qualified opinion?</h3>
                        <div class="faq-expanded__a"><p>Removal typically takes 1 to 3 audit cycles depending on the qualification cause. GAAP departure qualifications can usually be removed in the next audit through corrective accounting and AS 5 or Ind AS 8 prior period correction. Insufficient audit evidence qualifications usually resolve in the next audit cycle once predecessor cooperation or alternative procedures provide evidence. Scope limitation qualifications remove once management releases the limitation. Significant uncertainty qualifications including going concern are timeline-dependent on business turnaround and may take 1 to 3 cycles. Patron&apos;s Year-1-to-Year-2 remediation roadmap targets clean opinion in next audit where remediation feasibility supports it.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How should listed entities disclose qualified opinions to investors?</h3>
                        <div class="faq-expanded__a"><p>Listed entities face SEBI LODR Regulation 30 24-hour notification requirement on qualified audit reports. Patron&apos;s listed-entity playbook - (1) Coordinate SEBI LODR notification timing with auditor sign-off (typically within 4-12 hours); (2) Prepare stock exchange filing with substantive context; (3) Schedule analyst conference call within 48 hours of disclosure; (4) Prepare CFO talking points for media inquiries; (5) Coordinate with merchant banker / analyst coverage for context-setting; (6) Investor relations briefing pack with comparative analysis (industry peers facing similar issues). Stock price reactions are typically 5 to 15 percent on initial disclosure - structured response can mitigate the impact.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a company file AOC-4 with a qualified audit report?</h3>
                        <div class="faq-expanded__a"><p>Yes - AOC-4 filing within 30 days of AGM under Section 137 is mandatory regardless of audit opinion type. The complete audit report package attached to AOC-4 includes main audit report under SA 705 with qualified opinion; Annexure A CARO 2020 with clause-by-clause reporting; Annexure B IFC under Section 143(3)(i); Board Report with Section 134(3)(f) substantive explanation; Director Responsibility Statement under Section 134(5); audited financial statements in Schedule III format under Section 129. The AOC-4 filing makes the qualified report public record - lenders, investors, regulators and competitors can access it. Patron coordinates the filing with declaration coordination from directors and auditor.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the Year-1-to-Year-2 qualification remediation roadmap?</h3>
                        <div class="faq-expanded__a"><p>Patron&apos;s 7-step Year-1-to-Year-2 remediation roadmap - (1) Cause analysis at sign-off (Day 0); (2) Remediation plan design Months 1-2; (3) AS 5 or Ind AS 8 prior period correction evaluation Month 2-3; (4) Implementation Months 3-8; (5) Interim verification 6 months before next year-end via Patron&apos;s Pre-Audit Issue Identification (PAII) review; (6) Pre-audit cleanup 1 month before next year-end; (7) Next year audit with clean opinion drafting and comparative restatement audit if AS 5 / Ind AS 8 route taken. The roadmap targets clean unmodified opinion in the next audit cycle or 2-3 cycles where multi-year remediation is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How can Patron help prevent qualified opinions in subsequent audit cycles?</h3>
                        <div class="faq-expanded__a"><p>Patron&apos;s qualification-prevention approach for subsequent cycles - (1) Pre-Audit Issue Identification (PAII) review 6 months before next year-end specifically tests qualification triggers from the prior cycle and identifies any new qualification risk areas; (2) Mid-engagement remediation window with SA 260 TCWG communication - during audit fieldwork, any potential qualification trigger is escalated immediately to engagement partner and Audit Committee, allowing management to evaluate remediation options before audit report drafting; (3) Structured remediation paths - corrective accounting, additional documentation, scope-limitation release, enhanced disclosure; (4) Audit Committee briefing pack with substantive Section 134(3)(f) draft language.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Q: Qualified opinion mil gaya - kya karein?</strong><br>7-step handling playbook - Day 0 Audit Committee briefing; 5-stakeholder identification (Banks / Investors / Customers / Employees / Regulators); communication packs; Section 134(3)(f) substantive drafting; AGM coordination; AOC-4 filing 30 days mein; Year-1-to-Year-2 remediation roadmap.</p>
<p><strong>Q: Bank ko kya batayein?</strong><br>Lender briefing memo with qualification context, financial-statement-level effect (typically smaller than headline), remediation plan with milestones, covenant analysis. Pre-empt karein lender ki diligence query ko - briefing first do, then AOC-4 public record banta hai. Waiver typically 90-180 day cure period.</p>
<p><strong>Q: Section 134(3)(f) mein kya likhein?</strong><br>4-element substantive standard - (1) Factual acknowledgment verbatim from Basis for Qualified Opinion; (2) Management view with specific reasoning; (3) Remediation steps with operational detail; (4) Implementation timeline with quarterly milestones. Boilerplate avoid karein - NFRA scrutiny attract karta hai.</p>
<p><strong>Q: Qualification hatane mein kitna time?</strong><br>Typical 1-3 audit cycles depending on cause. GAAP departure mostly 1 cycle through corrective accounting plus AS 5 / Ind AS 8 prior period correction. Going concern uncertainty 1-3 cycles depending on business turnaround.</p>
<p><strong>Q: AOC-4 file kar sakte hain qualified report ke saath?</strong><br>Haan - AOC-4 filing 30 days mein mandatory hai AGM ke baad under Section 137, regardless of opinion type. Package - main report under SA 705, Annexure A CARO, Annexure B IFC, Board Report with Section 134(3)(f), Director Responsibility Statement.</p>
<p><strong>Q: SEBI ko notification kab?</strong><br>Listed entities ke liye SEBI LODR Regulation 30 ke under 24 hours mein mandatory hai. Stock exchange filing with substantive context; analyst conference call within 48 hours; CFO talking points for media; investor relations briefing pack. Stock price reaction typically 5-15 percent mitigate ho sakta hai structured response se.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The First 7 Days After Sign-Off Determine the Multi-Month Cycle</h2>
            <div class="content-text">
                
                
<p>The first 7 days after qualified audit report sign-off determine the multi-month stakeholder management cycle. Decisions made in this window shape lender covenant outcomes (waiver vs accelerated repayment), investor valuation impact (5-15% discount vs context-mitigated), listed-entity stock price (typical 5-15% drop vs structured-response-mitigated), regulator scrutiny (proactive engagement vs reactive) and AGM dynamics (smooth shareholder Q&amp;A vs contentious). Patron&apos;s day-by-day immediate response playbook starts within 24 hours of audit report sign-off.</p>

<p style="margin-top:16px;">Section 134(3)(f) Board Report explanation must be substantive - boilerplate explanations like &quot;the matter has been noted; remediation is in progress&quot; attract NFRA scrutiny, lender diligence questions and investor concerns. Year-1-to-Year-2 remediation roadmap must be initiated at sign-off rather than at next year-end - the 6-month-before-next-year-end PAII review window is when remediation effectiveness can be tested with full corrective time. Companies that engage Patron within 24 hours of sign-off typically achieve clean unmodified opinion in the next audit cycle through structured remediation; companies that delay engagement until lender / investor inquiries arrive face compressed remediation windows and frequently carry qualifications for multiple cycles.</p>

<p style="margin-top:16px;"><strong>Action now:</strong> engage Patron within 24 hours of qualified audit report sign-off for the 7-day immediate response playbook - or proactively if you expect a qualification during ongoing audit fieldwork. Call <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700">WhatsApp us</a>.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Run Your Qualified Audit Opinion Handling the Patron Way</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#fff;">Qualified audit opinion handling is the most consequential operational decision a CFO makes in the annual reporting cycle - the first 7 days after sign-off determine the multi-month stakeholder management cycle, the AGM dynamics, the lender covenant outcomes, the investor valuation impact, the regulator scrutiny pattern and the Year-1-to-Year-2 remediation roadmap. Patron&apos;s structured handling approach starts within 24 hours of sign-off with the 7-step playbook covering audit committee briefing, 5-stakeholder identification, communication pack drafting, Section 134(3)(f) substantive explanation, AGM coordination, AOC-4 filing and Year-1-to-Year-2 remediation initiation.</p>
<p style="color:#fff;margin-top:12px;">The 4-quadrant decision tree (Already received vs Expecting + Material vs Not material) tailors the response strategy to the specific situation. The 5-stakeholder communication playbook (Banks and Lenders, Equity Investors and PE, Customers, Employees, Regulators) provides category-specific scripts and disclosure tactics that maximise stakeholder confidence preservation. The Section 134(3)(f) Board Report explanation follows Patron&apos;s 4-element substantive drafting standard producing NFRA-review-grade content rather than boilerplate explanations. The Year-1-to-Year-2 remediation roadmap targets clean unmodified opinion in next audit cycle (typical case) or 2-3 cycles where multi-year remediation is required.</p>
<p style="color:#fff;margin-top:12px;">This CFO handling guide complements Patron&apos;s broader audit cluster - statutory audit, Pvt Ltd statutory audit, appointment of auditor, change of auditor, private limited company compliance, tax audit, GST audit, internal audit and ROC notice response. Our 15+ years of practice, peer-reviewed ICAI workpapers and four-office network across Pune, Mumbai, Delhi and Gurugram bring qualified opinion handling depth to companies that have just received or expect qualified audit reports.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20Patron%20consultation%20on%20qualified%20audit%20opinion%20handling." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Qualified%20Audit%20Opinion%20Handling&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Qualified%20Audit%20Opinion%20Handling%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Explore Related Audit and Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end Patron support for the audit cluster - same CA pod, single engagement letter across statutory audit, qualified opinion handling, auditor appointment and change.</p>
        
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Adjacent compliance workflows for Pvt Ltd entities, listed entities, NBFCs, family-business groups and M&amp;A transaction targets.</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">National Hub</div></div></a>
        <a href="/statutory-audit-private-limited-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><div><div class="pa-card-title">Pvt Ltd Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
        <a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India</div></div></a>
        <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/roc-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 3 months by the Patron CA &amp; CS team to capture ICAI Standards on Auditing amendments, NFRA inspection observations on Section 134(3)(f) Board Report explanations, SEBI LODR Regulation 30 listed-entity disclosure updates, AS 5 / Ind AS 8 prior period correction guidance and CARO 2020 amendment cycles.</p>
        </div>
    </div>
</section>



</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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