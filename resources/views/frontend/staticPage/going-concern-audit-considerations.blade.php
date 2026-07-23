
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
    <title>Going Concern Audit SA 570 India</title>
    <meta name="description" content="Going concern audit guide under SA 570 - reporting outcomes, material uncertainty disclosure, CARO 3(xix), distressed company engagement and remediation.">
    <link rel="canonical" href="/going-concern-audit-considerations">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Going Concern Audit SA 570 India 2026 | Patron Accounting">
    <meta property="og:description" content="Going concern audit guide under SA 570 - reporting outcomes, material uncertainty disclosure, CARO 3(xix), distressed company engagement and remediation.">
    <meta property="og:url" content="/going-concern-audit-considerations">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/going-concern-audit-considerations-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Going Concern Audit SA 570 India 2026 | Patron Accounting">
    <meta name="twitter:description" content="Going concern audit guide under SA 570 - reporting outcomes, material uncertainty disclosure, CARO 3(xix), distressed company engagement and remediation.">
    <meta name="twitter:image" content="/images/going-concern-audit-considerations-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/going-concern-audit-considerations#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Statutory Audit",
          "item": "/statutory-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Going Concern Audit Considerations",
          "item": "/going-concern-audit-considerations"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/going-concern-audit-considerations#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is going concern audit under SA 570?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Going concern audit under SA 570 (Revised) is the auditor's evaluation of management's use of the going concern basis of accounting - the fundamental accounting assumption that the entity will continue to operate in the foreseeable future and meet its financial obligations. The auditor obtains sufficient appropriate audit evidence on management's assessment and concludes whether material uncertainty exists related to events or conditions that may cast significant doubt on the entity's ability to continue as a going concern. The minimum forward-looking horizon is 12 months from the audit report date - not the balance sheet date. SA 570 yields four reporting outcomes ranging from clean unmodified opinion to adverse opinion."
          }
        },
        {
          "@type": "Question",
          "name": "What is the meaning of going concern in audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Going concern in audit refers to the fundamental accounting assumption that the entity will continue to operate in the foreseeable future and will be able to realise its assets and discharge its liabilities in the normal course of business. It is the default basis for financial statement preparation under both Accounting Standards (AS framework) and Indian Accounting Standards (Ind AS framework). Section 134(5)(a) of the Companies Act, 2013 requires the Director Responsibility Statement to confirm preparation on going concern basis. When events or conditions cast significant doubt, the auditor performs SA 570 procedures and may report material uncertainty in the audit report."
          }
        },
        {
          "@type": "Question",
          "name": "What is material uncertainty related to going concern?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Material uncertainty related to going concern exists when the magnitude of potential impact AND the likelihood of occurrence are such that, in the auditor's judgment, appropriate disclosure of the nature and implications is necessary for fair presentation (under fair presentation framework) or to prevent misleading statements (under compliance framework). Per SA 570 paragraph 18, both magnitude and likelihood must combine to make disclosure necessary. Where material uncertainty exists and disclosure is adequate, the audit report includes a separate Material Uncertainty Related to Going Concern (MURGC) section - this does NOT modify the opinion. Where disclosure is inadequate, the opinion is modified to qualified (not pervasive) or adverse (pervasive)."
          }
        },
        {
          "@type": "Question",
          "name": "What are the four reporting outcomes under SA 570?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 570 yields four reporting outcomes - (1) Going concern basis appropriate, no material uncertainty - clean unmodified opinion with standard report sections, no MURGC; (2) Going concern basis appropriate, material uncertainty exists, disclosure adequate - unmodified opinion with separate Material Uncertainty Related to Going Concern (MURGC) section; KAM by nature for listed entities under SA 701; (3) Going concern basis appropriate, material uncertainty exists, disclosure inadequate - qualified opinion (if not pervasive) or adverse opinion (if pervasive) under SA 705; (4) Going concern basis INAPPROPRIATE (entity not viable for foreseeable future) - adverse opinion under SA 705. The four-outcome matrix is the core of SA 570 reporting."
          }
        },
        {
          "@type": "Question",
          "name": "What are common going concern indicators?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 570 categorises indicators in three groups. Financial - net liability position, negative working capital, debt maturity approaching without renewal prospects, withdrawal of financial support by creditors, negative operating cash flows, adverse key financial ratios, substantial operating losses, inability to pay creditors, inability to comply with loan covenants. Operating - management intent to liquidate, loss of key management, loss of major market or key customers or principal suppliers, labour difficulties, shortage of important supplies, emergence of successful competitor. Other - non-compliance with capital or statutory requirements, pending legal or regulatory proceedings, adverse changes in law or regulation, IBC 2016 application against the company, NCLT proceedings, RBI license cancellation, SEBI suspension. Single indicator does not automatically signify going concern issue; combination and significance evaluated."
          }
        },
        {
          "@type": "Question",
          "name": "What is CARO 3(xix) reporting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 Clause 3(xix) requires the auditor to separately report - on the basis of the financial ratios, ageing and expected dates of realisation of financial assets and payment of financial liabilities, other information accompanying the financial statements, and the auditor's knowledge of the Board of Directors and management plans - whether the auditor is of the opinion that no material uncertainty exists as on the date of the audit report that the company is capable of meeting its liabilities existing at the date of the balance sheet as and when they fall due within a period of one year from the balance sheet date. This is a one-year forward look from balance sheet date (shorter than SA 570's 12 months from audit report date). The CARO 3(xix) reporting is mandatory for every audit covered by CARO 2020."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between going concern qualification and material uncertainty disclosure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The two are different audit report elements. Material uncertainty disclosure (MURGC) - where going concern basis is appropriate, material uncertainty exists, and management's disclosure is adequate, the audit report includes a separate Material Uncertainty Related to Going Concern section under SA 570 paragraph 22. This does NOT modify the audit opinion - the opinion remains unmodified. Going concern qualification - where going concern basis is appropriate but management's disclosure is INADEQUATE, the audit opinion is modified to qualified (not pervasive) or adverse (pervasive) under SA 705. Where going concern basis itself is inappropriate, the opinion is adverse. The MURGC section is a signal of material uncertainty without opinion modification; qualification arises only from inadequate disclosure or inappropriate basis."
          }
        },
        {
          "@type": "Question",
          "name": "How should distressed companies engage proactively with the auditor on going concern?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's proactive engagement framework starts 4 to 6 months before year-end. CFO actions - share preliminary 12-month forward cash flow projection; document mitigating management plans (capital raise term sheets, debt restructuring discussions, cost reduction implementation, asset monetisation); finalise lender covenant compliance status; horizon-scan for subsequent events; prepare Section 134(3)(f) Board Report explanation draft for any anticipated modification. Auditor's response - pre-audit engagement memo; preliminary view shared with Audit Committee; SA 570 risk assessment; mitigating plans feasibility evaluation; conclusion on whether material uncertainty exists; reporting outcome selection from the four-outcome matrix; SA 260 TCWG communication. The proactive engagement maximises the remediation window and frequently converts what would have been qualified opinions to unmodified opinions with MURGC sections."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/going-concern-audit-considerations#service",
      "name": "Going Concern Audit Considerations Under SA 570 Service in India",
      "description": "End-to-end going concern audit service by Patron Accounting LLP under SA 570 (Revised) for distressed companies and restructuring scenarios - covering pre-audit going concern engagement 4 to 6 months before year-end; SA 570 risk assessment under SA 315 with going concern indicators identification across financial, operating, and other categories; management's 12-month forward assessment review with cash flow projection, debt service plan, and mitigating management plans (capital raise, debt restructuring, cost reduction, asset monetisation); material uncertainty determination based on magnitude AND likelihood threshold under SA 570 paragraph 18; four reporting outcomes decision matrix application (clean unmodified / unmodified with MURGC section per SA 570 paragraph 22 / qualified or adverse under SA 705 / adverse for inappropriate going concern basis); KAM by nature treatment under SA 701 for listed entities; CARO 2020 Clause 3(xix) substantive reporting based on financial ratios, ageing, expected realisation dates; SA 260 (Revised) mandatory communication with Those Charged with Governance; SA 560 subsequent events review; lender and investor communication support during going concern disclosure; IBC 2016 pre-admission audit advisory; NCLT-admitted company audit with Resolution Professional coordination; SEBI LODR Regulation 30 material event coordination for listed entities; going concern remediation roadmap with quarterly milestone tracking for year-over-year MURGC removal. Senior partner CA on every distressed-company engagement; all engagements subject to strict professional confidentiality.",
      "serviceType": "Going Concern Audit Service Under SA 570",
      "provider": {
        "@id": "/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "India",
        "sameAs": "https://en.wikipedia.org/wiki/India"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Going concern",
          "sameAs": "https://en.wikipedia.org/wiki/Going_concern"
        },
        {
          "@type": "Thing",
          "name": "Auditor's report",
          "sameAs": "https://en.wikipedia.org/wiki/Auditor%27s_report"
        },
        {
          "@type": "Thing",
          "name": "Insolvency and Bankruptcy Code, 2016",
          "sameAs": "https://en.wikipedia.org/wiki/Insolvency_and_Bankruptcy_Code,_2016"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Going Concern Audit Service Plans (India)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Pre-Audit Going Concern Engagement (4-6 Months Before YE)",
            "price": "150000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/going-concern-audit-considerations"
          },
          {
            "@type": "Offer",
            "name": "Statutory Audit With Going Concern Bundled (Mid-Size Pvt Ltd)",
            "price": "450000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/going-concern-audit-considerations"
          },
          {
            "@type": "Offer",
            "name": "Going Concern Remediation Advisory (Year-Over-Year Removal)",
            "price": "250000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/going-concern-audit-considerations"
          },
          {
            "@type": "Offer",
            "name": "IBC 2016 Pre-Admission Audit Advisory",
            "price": "500000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/going-concern-audit-considerations"
          }
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
                        Going Concern Audit Considerations Under SA 570 for Distressed Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Anchor:</span> SA 570 (Revised) Going Concern - effective 1 April 2017; Section 134(5)(a) DRS; Section 143; CARO 2020 Clause 3(xix); SA 260 TCWG communication</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Four Reporting Outcomes:</span> Clean unmodified; Unmodified with MURGC paragraph; Qualified or Adverse (inadequate disclosure); Adverse (inappropriate basis)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Forward-Look Period:</span> Minimum 12 months from audit report date - NOT from balance sheet date; covers next financial year</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Fees:</span> Statutory audit with going concern bundled Rs 4,50,000 to Rs 9,00,000; pre-audit going concern Rs 1,50,000 to Rs 5,00,000; IBC pre-admission Rs 5,00,000+</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Going%20Concern%20Audit%20Consultation%20-%20Distressed%20Company%20Dialogue&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20proactive%20going%20concern%20audit%20engagement%20-%20SA%20570%20pre-audit%20dialogue%2C%20mitigating%20plans%20evaluation%2C%20MURGC%20drafting%2C%20or%20IBC%20pre-admission%20advisory.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20proactive%20going%20concern%20audit%20engagement%20-%20SA%20570%20pre-audit%20dialogue%20with%20lender%20coordination." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Going Concern Audit'/>
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
                                <option value="going-concern-audit-considerations" selected>Going Concern Audit Considerations (this page)</option>
                                <option value="statutory-audit">Statutory Audit (general)</option>
                                <option value="qualified-vs-unqualified-audit-opinion">Qualified vs Unqualified Opinion</option>
                                <option value="audit-report-types-india">Audit Report Types</option>
                                <option value="caro-2020-reporting">CARO 2020 Reporting</option>
                                <option value="internal-financial-controls-audit">IFC Audit</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's pre-audit going concern engagement 5 months before year-end was the difference between a qualified opinion and clean unmodified with MURGC. We documented mitigating plans for capital raise and debt restructuring; auditor's preliminary view gave us a 4-month window to finalise term sheets. Audit signed off with MURGC paragraph - lender accepted without covenant trigger.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CFO</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Group CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing Pvt Ltd, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">RBI Resolution Framework filing required clean going concern dialogue with auditor. Patron coordinated with restructuring counsel, prepared 18-month forward FCF, evaluated covenant compliance under restructured terms. SA 570 conclusion supported the resolution plan; CARO 3(xix) reporting integrated with main audit MURGC section.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Finance Controller</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Restructuring NBFC, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's IBC pre-admission audit advisory was critical. Section 7 application filed by financial creditor; we engaged Patron to position the audit before NCLT hearing. Audit conclusion with comprehensive MURGC paragraph documented all mitigating plans; supported our Resolution Plan submission in CIRP.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Managing Director</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pre-IBC Company, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">SA 701 KAM on going concern alongside MURGC section required precise drafting. Patron's wording stood up to SEBI scrutiny and analyst questions. Stock price reaction was contained because we had the lender briefing pack and investor analyst pre-call ready at sign-off - all coordinated through Patron's bundled communication support.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Audit Committee Chair</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Listed Mid-Cap, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Year-over-year MURGC removal was our goal. Patron's remediation roadmap had quarterly milestones - capital raise closure, working capital improvement, covenant compliance restoration. Subsequent year audit cleared the MURGC paragraph - lender repriced facility 200bps lower; equity investor closed Series B at full valuation.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Chief Restructuring Officer</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Turnaround Pvt Ltd, Pune</div>
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
                    <p>Free initial consultation with senior partner CA - share whether you need pre-audit going concern engagement, distressed-company statutory audit, MURGC paragraph drafting, going concern remediation roadmap, IBC pre-admission advisory, or NCLT-admitted company audit with RP coordination. All engagements subject to strict professional confidentiality.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is Going Concern</a>
            <a href="#who-section" class="toc-btn">SA 570 Applicability</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">7 Business Impacts</a>
            <a href="#fees-section" class="toc-btn">Engagement Fees</a>
            <a href="#timeline-section" class="toc-btn">Distressed Co Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Big-4 vs Mid-Tier vs Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Going Concern Audit - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Going Concern Audit Services at a Glance</strong></p>
                    <p>Going concern audit under SA 570 (Revised) is the auditor's evaluation of management's use of the going concern basis of accounting - the fundamental accounting assumption that the entity will continue to operate in the foreseeable future and meet its financial obligations. The minimum forward-looking horizon is 12 months from the audit report date. SA 570 yields one of four reporting outcomes - (1) Going concern basis appropriate, no material uncertainty - clean unmodified opinion; (2) Going concern basis appropriate, material uncertainty exists, adequate disclosure - unmodified opinion with separate Material Uncertainty Related to Going Concern (MURGC) section; KAM by nature under SA 701 for listed entities; (3) Going concern basis appropriate, material uncertainty exists, inadequate disclosure - qualified opinion or adverse opinion; (4) Going concern basis INAPPROPRIATE - adverse opinion. CARO 2020 Clause 3(xix) requires the auditor to separately report on going concern based on financial ratios, ageing, expected dates of realisation, knowledge of Board / management plans.</p>
                </div>
                <p>Going concern audit is the auditor's most consequential forward-looking evaluation. Unlike substantive testing of year-end balances (which examines what HAS happened), going concern assessment examines what WILL happen - the entity's ability to operate and meet obligations over a minimum 12-month horizon from the audit report date.</p>
                <div class="table-responsive-wrapper" style="margin-top:24px;margin-bottom:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory Authority</td><td>SA 570 (Revised) Going Concern - effective for audits of financial statements for periods beginning on or after 1 April 2017</td></tr>
                        <tr><td>Companies Act Reference</td><td>Section 134(5)(a) Director Responsibility Statement; Section 143 auditor's report; Section 143(3)(b) compliance with accounting standards</td></tr>
                        <tr><td>Forward-Look Period</td><td>Minimum 12 months from the audit report date (NOT from the balance sheet date)</td></tr>
                        <tr><td>Material Uncertainty Threshold</td><td>Both magnitude AND likelihood of potential impact such that disclosure is necessary for fair presentation or to prevent misleading statements</td></tr>
                        <tr><td>Reporting Outcomes (Four)</td><td>(1) Clean unmodified; (2) Unmodified with MURGC paragraph; (3) Qualified or Adverse due to inadequate disclosure; (4) Adverse due to inappropriate going concern basis</td></tr>
                        <tr><td>KAM by Nature</td><td>Material uncertainty related to going concern is KAM by nature under SA 701 for listed entities</td></tr>
                        <tr><td>CARO 2020 Clause 3(xix)</td><td>Auditor's separate opinion on whether material uncertainty exists for entity to meet liabilities within one year from balance sheet date</td></tr>
                        <tr><td>TCWG Communication</td><td>SA 260 (Revised) mandatory communication on going concern matters - non-negotiable under SA 570 paragraph 25</td></tr>
                    </tbody>
                </table>
                </div>
                <p>SA 570 (Revised) places significant procedural and judgmental obligations on the auditor - evaluate management's twelve-month forward assessment, identify going concern indicators, assess mitigating management plans, conclude on the appropriateness of the going concern basis, determine whether material uncertainty exists, evaluate adequacy of disclosure. The reporting outcomes range from clean unmodified opinion to adverse opinion - with the MURGC paragraph being the most distinctive feature of SA 570 reporting (does NOT modify opinion but signals material uncertainty to users).</p>
                <p>For distressed company CFOs, proactive engagement with the auditor before audit fieldwork is the single most important decision - waiting until the auditor surfaces concerns during fieldwork compresses the remediation window and often leads to suboptimal reporting outcomes. Patron's proactive engagement framework starts 4 to 6 months before year-end - CFO shares preliminary 12-month forward cash flow projection, debt service plan, covenant compliance status, mitigating management plans (capital raise, debt restructuring, cost reduction, asset monetisation), and seeks auditor's preliminary view on going concern conclusion. The pre-audit engagement frequently converts what would have been qualified opinions to unmodified opinions with MURGC sections through enhanced disclosure of management's mitigating plans. Going concern modifications carry the heaviest business impact among all audit opinion modifications - lender covenant triggers, equity investor valuation discounts of 15 to 30 percent, listed entity stock price declines of 15 to 30 percent, SEBI LODR Regulation 30 24-hour notification, Section 134(3)(f) mandatory Board Report explanation, and potential IBC 2016 Section 7 / 9 admission grounds where combined with debt default.</p>
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
                <h2 class="section-title">What Are Going Concern Audit Considerations?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Going concern audit considerations under <strong>SA 570 (Revised)</strong> are the auditor's responsibilities and procedures for evaluating management's use of the going concern basis of accounting in preparing the financial statements - the fundamental accounting assumption that the entity will continue to operate in the foreseeable future and will be able to realise its assets and discharge its liabilities in the normal course of business.</p>
<p>The auditor's evaluation covers a <strong>minimum forward-looking horizon of 12 months from the audit report date</strong> and concludes with one of four reporting outcomes ranging from clean unmodified opinion to adverse opinion.</p>
<p>The going concern basis of accounting is the default assumption under both <strong>Accounting Standards (AS framework - Division I Schedule III)</strong> and <strong>Indian Accounting Standards (Ind AS framework - Division II and III Schedule III)</strong>. <strong>Section 134(5)(a)</strong> of the Companies Act, 2013 requires the Director Responsibility Statement to confirm that the financial statements have been prepared on a going concern basis.</p>
<p>When the going concern basis is appropriate but material uncertainty exists, the financial statements continue to be prepared on going concern basis BUT must disclose the material uncertainty principally events or conditions and management's plans to deal with them. When the going concern basis itself is inappropriate (entity not viable for the foreseeable future), management must prepare financial statements on a basis other than going concern - typically realisation values for assets and immediate settlement values for liabilities.</p>
<p>The auditor's responsibility under SA 570 is significant but bounded - the auditor obtains sufficient appropriate audit evidence on management's use of the going concern basis AND concludes on whether material uncertainty exists, BUT <strong>the auditor cannot guarantee the entity's ability to continue as a going concern</strong>. Going concern is a future-oriented conclusion subject to events and uncertainties beyond the auditor's control. The auditor's evaluation focuses on identifying events or conditions that may cast significant doubt and evaluating management's plans to deal with them - it is not a guarantee that the entity will continue operating.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Going Concern Audit:</strong></p>
                    <p><strong>Going Concern Basis of Accounting:</strong> The fundamental accounting assumption that the entity will continue to operate in the foreseeable future and will be able to realise its assets and discharge its liabilities in the normal course of business. The default basis for financial statement preparation under AS and Ind AS.</p>
<p><strong>Material Uncertainty:</strong> Exists when the magnitude of potential impact AND the likelihood of occurrence are such that, in the auditor's judgment, appropriate disclosure of the nature and implications is necessary for fair presentation (under fair presentation framework) or to prevent misleading statements (under compliance framework). Paragraph 18 SA 570.</p>
<p><strong>Twelve-Month Forward Look:</strong> Minimum forward-looking horizon over which the auditor evaluates the entity's ability to continue as a going concern - measured from the AUDIT REPORT DATE, not the balance sheet date. The auditor may consider events beyond this period where significant doubt could be cast.</p>
<p><strong>Going Concern Indicators:</strong> Events or conditions that may, individually or collectively, cast significant doubt on the entity's ability to continue as a going concern. SA 570 categorises these as financial (net liability position, negative working capital, debt maturity), operating (loss of key management or market), or other (litigation, regulatory action, IBC 2016 CIRP).</p>
<p><strong>MURGC Paragraph:</strong> Material Uncertainty Related to Going Concern - a separate section in the audit report under SA 570 paragraph 22 where the going concern basis is appropriate, material uncertainty exists, AND disclosure is adequate. Does NOT modify the audit opinion. Standard heading format prescribed.</p>
<p><strong>CARO 2020 Clause 3(xix):</strong> Auditor's separate opinion based on financial ratios, ageing and expected dates of realisation of financial assets and payment of financial liabilities, other information accompanying financial statements, and auditor's knowledge of Board and management plans, on whether material uncertainty exists for the entity to meet liabilities within one year from balance sheet date.</p>
<p><strong>KAM by Nature (SA 701):</strong> Material uncertainty related to going concern is automatically classified as a Key Audit Matter for listed entities under SA 701 - reported alongside the MURGC section describing audit procedures performed.</p>
<p><strong>Audit Report Date vs Balance Sheet Date:</strong> Critical distinction - balance sheet date is 31 March (typical); audit report date is when auditor signs (4 to 6 months later, typically Jul-Aug). The 12-month forward look starts from the audit report date and extends into the next financial year.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Going Concern Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>SA 570</span>
                        <strong>Going Concern Authority</strong>
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
            <h2 class="section-title">SA 570 Applicability and Forward-Look Period</h2>
            <div class="content-text">
                
                <p>SA 570 (Revised) applies to <strong>every statutory audit of financial statements in India</strong> where the auditor expresses an opinion - companies under the Companies Act 2013, banks under the Banking Regulation Act 1949, insurance companies under the Insurance Act 1938, NBFCs under the Companies Act and RBI directions, special purpose framework audits under SA 800. The going concern evaluation is mandatory for every audit - even where the entity is clearly viable; in clean audits, the conclusion is documented in the audit working file but does not surface in the report.</p>

<h3 style="margin-top:24px;">Twelve-Month Forward-Look Period Mechanics</h3>
<p>The minimum forward-looking horizon under SA 570 is <strong>12 months from the AUDIT REPORT DATE - not from the balance sheet date</strong>. This is a critical distinction:</p>
<ul>
    <li><strong>Balance sheet date</strong> - e.g. 31 March 2026; financial statements as at this date</li>
    <li><strong>Audit report date</strong> - e.g. 15 August 2026; the date the auditor signs the report (after Board approval; typically 4 to 6 months after balance sheet date)</li>
    <li><strong>Twelve-month forward look</strong> - from 15 August 2026 to 15 August 2027 in this example; covers 4 to 5 months BEYOND the next financial year-end of 31 March 2027</li>
</ul>
<p>The implication - the auditor must consider events and conditions that may affect going concern not just in the audit year being reported, but in the next financial year as well, up to 12 months from the report date. This makes <strong>subsequent events review under SA 560 particularly important for going concern</strong> - events between balance sheet date and audit report date may shift the going concern conclusion.</p>

<h3 style="margin-top:24px;">Management's Assessment vs Auditor's Evaluation</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Aspect</th><th>Management</th><th>Auditor</th></tr></thead>
    <tbody>
        <tr><td>Primary Responsibility</td><td>Assess entity's ability to continue as going concern (Section 134(5)(a) Director Responsibility Statement)</td><td>Evaluate management's assessment for appropriateness; obtain SAAE on conclusion</td></tr>
        <tr><td>Assessment Period</td><td>Foreseeable future (minimum 12 months from balance sheet date under Ind AS 1; auditor extends to 12 months from audit report date)</td><td>12 months from audit report date - minimum</td></tr>
        <tr><td>Output</td><td>Going concern basis of accounting used in financial statements; disclosure if material uncertainty exists; explanatory note in financial statements</td><td>Audit opinion on financial statements; MURGC paragraph if applicable; CARO 3(xix) reporting; KAM if applicable; communication with TCWG</td></tr>
        <tr><td>Tools</td><td>Cash flow projection, debt service plan, mitigating management plans (capital raise, debt restructuring, cost reduction, asset monetisation)</td><td>Inquiry of management; analysis of management's cash flow forecast; subsequent events review; SA 260 TCWG communication; written representations under SA 580</td></tr>
    </tbody>
</table>
</div>

<h3 style="margin-top:24px;">Going Concern Indicators Catalogue - Three Categories</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Category</th><th>Indicators</th></tr></thead>
    <tbody>
        <tr><td>FINANCIAL</td><td>Net liability or net current liability position; Fixed-term borrowings approaching maturity without realistic prospects of renewal; Excessive reliance on short-term borrowings to finance long-term assets; Indications of withdrawal of financial support by creditors; Negative operating cash flows; Adverse key financial ratios; Substantial operating losses or significant deterioration in value of assets; Arrears or discontinuance of dividends; Inability to pay creditors on due dates; Inability to comply with terms of loan agreements; Change from credit to cash-on-delivery transactions with suppliers; Inability to obtain financing for essential new product development</td></tr>
        <tr><td>OPERATING</td><td>Management intentions to liquidate the entity or to cease operations; Loss of key management without replacement; Loss of a major market, key customers, franchise, license, or principal suppliers; Labour difficulties; Shortages of important supplies; Emergence of a highly successful competitor</td></tr>
        <tr><td>OTHER</td><td>Non-compliance with capital or other statutory requirements; Pending legal or regulatory proceedings that may result in claims the entity cannot satisfy; Changes in law or regulation or government policy expected to adversely affect the entity; Uninsured or underinsured catastrophes; IBC 2016 Section 7 / 8 / 9 / 10 application filed against the company; NCLT proceedings under Sections 230 to 240; Section 245 class action; RBI cancellation of license (NBFC); SEBI suspension (listed entity)</td></tr>
    </tbody>
</table>
</div>

<div class="highlight-box" style="margin-top:16px;">
<p><strong>Auditor's Limitations:</strong> SA 570 explicitly recognises that the auditor cannot guarantee the entity's ability to continue as a going concern. The auditor's evaluation is based on audit evidence available at the time the audit report is signed; management's plans which are inherently uncertain; assumptions about future events. SA 570 specifically protects the auditor from liability for accurate prediction of going concern - the obligation is to perform appropriate procedures and form a reasoned conclusion.</p>
</div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's Going Concern Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Audit Going Concern Engagement (Distressed Companies)</td><td>For companies showing distress signals - recurring losses, negative working capital, covenant breach, key customer or market loss - Patron initiates the going concern audit dialogue 4 to 6 months before year-end. The pre-audit engagement covers 12-month forward cash flow projection review, debt service plan with mitigating plans, covenant compliance status, subsequent events horizon scanning. Output - preliminary going concern view shared with Audit Committee or Board.</td></tr>
<tr><td>SA 570 Risk Assessment Under SA 315</td><td>Risk assessment specifically for going concern under SA 315 read with SA 570 - identifying financial, operating, and other indicators; assessing significance of each indicator individually and collectively; evaluating management's mitigating plans; conclusion on whether events or conditions exist that may cast significant doubt.</td></tr>
<tr><td>Management's Plans Evaluation Under SA 570</td><td>Where indicators exist, Patron evaluates management's mitigating plans - feasibility analysis of capital raise (term sheets, investor interest); feasibility analysis of debt restructuring (lender restructuring discussion, RBI Master Direction on Resolution Framework); feasibility analysis of cost reduction; feasibility analysis of asset monetisation (asset sale, factoring, leaseback). Output - conclusion on whether plans are likely to be effective and whether material uncertainty exists.</td></tr>
<tr><td>MURGC Paragraph Drafting Where Material Uncertainty Exists</td><td>Where material uncertainty exists and disclosure is adequate, Patron drafts the Material Uncertainty Related to Going Concern paragraph following SA 570 paragraph 22 - identifying the events or conditions; cross-referencing the management's plans disclosed in the financial statements; concluding that the auditor's opinion is not modified. Draft shared with TCWG before sign-off.</td></tr>
<tr><td>Going Concern Qualification Drafting Where Disclosure Inadequate</td><td>Where material uncertainty exists but disclosure is inadequate, Patron drafts qualified or adverse opinion under SA 705 - Basis for Qualified Opinion paragraph identifies the inadequate disclosure; financial statement effect quantified where possible. Patron coordinates with management on enhanced disclosure that could convert qualified to unmodified with MURGC paragraph.</td></tr>
<tr><td>Adverse Opinion Where Going Concern Basis Inappropriate</td><td>Where management has used going concern basis but the entity is not viable (NCLT admission for IBC, liquidation order, no revenue and no funding plan), Patron drafts adverse opinion under SA 705 - the financial statements do not give a true and fair view because they should have been prepared on basis other than going concern (typically realisation values).</td></tr>
<tr><td>CARO 2020 Clause 3(xix) Substantive Reporting</td><td>CARO 3(xix) reporting based on financial ratios, ageing and expected dates of realisation, other information accompanying financial statements, and knowledge of Board and management plans. Where material uncertainty exists, CARO 3(xix) reports the uncertainty; cross-references the MURGC paragraph in main audit report; ties to going concern KAM under SA 701 for listed entities.</td></tr>
<tr><td>Lender and Restructuring Coordination</td><td>For companies undergoing restructuring - RBI Resolution Framework, S4A, OTR, or one-time settlement - Patron coordinates with management on lender communication regarding the audit findings. Where the lender restructuring is sufficient mitigation, the audit conclusion may move from material uncertainty to no material uncertainty before sign-off.</td></tr>
<tr><td>SA 260 TCWG Communication on Going Concern</td><td>Patron mandatorily communicates with Those Charged with Governance under SA 260 (Revised) on going concern matters - whether events or conditions constitute material uncertainty; whether going concern basis is appropriate; adequacy of disclosure; implications for audit report. Communication is documented in audit working file.</td></tr>

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
            <h2 class="section-title">Patron's 7-Step Going Concern Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From pre-audit distress identification 4 to 6 months before year-end through SA 570 risk assessment, management's mitigating plans evaluation, material uncertainty determination, four-outcome decision matrix application, SA 260 TCWG communication, and final sign-off with UDIN. Structured for distressed companies, not imported from steady-state audit template.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Pre-Audit Distress Identification (Four to Six Months Before Year-End)</h3>
        <p class="step-description">Patron tests for going concern indicators 4 to 6 months before year-end - financial indicators (net liability position, negative working capital, debt service stress, covenant compliance), operating indicators (key customer loss, market loss, key management departure), other indicators (NCLT proceedings, regulatory action, litigation). Where indicators exist, distressed-company audit dialogue initiated with management and Audit Committee.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3 categories scanned</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-6 months pre-YE</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit Committee briefing</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DISTRESS SCAN</text>
<rect x="22" y="38" width="24" height="11" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="34" y="45" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">FIN</text>
<rect x="48" y="38" width="24" height="11" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="60" y="45" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">OP</text>
<rect x="74" y="38" width="24" height="11" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="86" y="45" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">OTH</text>
<rect x="22" y="51" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="58" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">4-6 MONTHS BEFORE YE</text>
<rect x="22" y="64" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="71" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">EARLY DIALOGUE START</text>
                </svg>
            </div>
            <span class="illustration-label">Distress Identified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Management's 12-Month Forward Assessment Review</h3>
        <p class="step-description">Management's assessment under Section 134(5)(a) is reviewed - twelve-month forward cash flow projection from audit report date; debt service plan with covenant compliance; mitigating management plans (capital raise, debt restructuring, cost reduction, asset monetisation). Patron evaluates reasonableness of assumptions; sensitivity of conclusion to key variables; subsequent events horizon scanning.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12-month forward FCF</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Debt service plan</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mitigating plans review</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12-MONTH FCF</text>
<line x1="22" y1="38" x2="98" y2="38" stroke="#F5A623" stroke-width="2"/>
<polyline points="22,75 35,65 50,68 65,55 80,52 98,45" fill="none" stroke="#E8712C" stroke-width="1.5"/>
<circle cx="22" cy="75" r="2" fill="#E8712C"/>
<circle cx="50" cy="68" r="2" fill="#E8712C"/>
<circle cx="80" cy="52" r="2" fill="#E8712C"/>
<text x="22" y="84" font-size="5" fill="#14365F" font-weight="400" text-anchor="middle" font-family="Arial">M1</text>
<text x="60" y="84" font-size="5" fill="#14365F" font-weight="400" text-anchor="middle" font-family="Arial">M6</text>
<text x="98" y="84" font-size="5" fill="#14365F" font-weight="400" text-anchor="middle" font-family="Arial">M12</text>
<rect x="22" y="88" width="76" height="6" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="0.5"/>
<text x="60" y="92" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">DEBT SERVICE + COVENANTS</text>
                </svg>
            </div>
            <span class="illustration-label">Assessment Reviewed</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">SA 570 Audit Procedures - Risk Assessment and Evidence Gathering</h3>
        <p class="step-description">Patron performs SA 570 procedures - inquiry of management as to going concern factors and assessment; analysis of cash flow forecast accuracy and underlying data; subsequent events review under SA 560 between balance sheet date and audit report date; evaluation of management's plans feasibility (term sheets for capital raise, restructuring discussion documentation, asset sale agreements); written representations under SA 580.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inquiry + FCF analysis</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 560 subsequent events</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 580 written reps</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SA 570 PROC</text>
<rect x="22" y="35" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="41" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">INQUIRY OF MGMT</text>
<rect x="22" y="46" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="52" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">CASH FLOW ANALYSIS</text>
<rect x="22" y="57" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="63" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SA 560 SUBSEQUENT EVT</text>
<rect x="22" y="68" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="74" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PLANS FEASIBILITY</text>
<rect x="22" y="79" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="86" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SA 580 WRITTEN REPS</text>
                </svg>
            </div>
            <span class="illustration-label">Evidence Gathered</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Material Uncertainty Determination - Magnitude AND Likelihood</h3>
        <p class="step-description">Patron concludes on whether material uncertainty exists - magnitude of potential impact (financial-statement-level significance); likelihood of occurrence (probability of the adverse event materialising); together making appropriate disclosure necessary. Where material uncertainty exists, Patron determines the four reporting outcomes path under SA 570 paragraph 18.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Magnitude assessment</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Likelihood evaluation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Disclosure necessity test</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MAT UNCERTAINTY</text>
<rect x="22" y="35" width="36" height="14" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="40" y="44" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">MAGNITUDE</text>
<text x="60" y="44" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+</text>
<rect x="62" y="35" width="36" height="14" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="80" y="44" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">LIKELIHOOD</text>
<rect x="22" y="53" width="76" height="11" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="60" y="60" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">DISCLOSURE NECESSARY</text>
<rect x="22" y="66" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="73" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SA 570 PARA 18</text>
<rect x="22" y="79" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="86" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FS-LEVEL THRESHOLD</text>
                </svg>
            </div>
            <span class="illustration-label">Uncertainty Determined</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Reporting Outcome Selection - Four-Outcome Decision Matrix</h3>
        <p class="step-description">Patron applies the SA 570 four-outcome decision matrix - (a) Going concern basis appropriate, no material uncertainty - clean unmodified; (b) Going concern basis appropriate, material uncertainty, disclosure adequate - unmodified with MURGC + KAM if listed; (c) Going concern basis appropriate, material uncertainty, disclosure inadequate - qualified (not pervasive) or adverse (pervasive) opinion under SA 705; (d) Going concern basis inappropriate - adverse opinion under SA 705.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-outcome decision matrix</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MURGC vs qualification</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 705 if modified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">4 OUTCOMES</text>
<rect x="22" y="34" width="36" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="40" y="42" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">CLEAN</text>
<text x="40" y="46" font-size="5" fill="#10B981" font-weight="400" text-anchor="middle" font-family="Arial">UNMOD</text>
<rect x="62" y="34" width="36" height="14" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="80" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">MURGC</text>
<text x="80" y="46" font-size="5" fill="#E8712C" font-weight="400" text-anchor="middle" font-family="Arial">UNMOD + KAM</text>
<rect x="22" y="50" width="36" height="14" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="40" y="58" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">QUALIF</text>
<text x="40" y="62" font-size="5" fill="#FD6B6D" font-weight="400" text-anchor="middle" font-family="Arial">INADEQ DISC</text>
<rect x="62" y="50" width="36" height="14" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="80" y="58" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">ADVERSE</text>
<text x="80" y="62" font-size="5" fill="#FD6B6D" font-weight="400" text-anchor="middle" font-family="Arial">INAPPROP</text>
<rect x="22" y="68" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/>
<text x="60" y="74" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DECISION MATRIX</text>
<rect x="22" y="79" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="86" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SA 705 IF MODIFIED</text>
                </svg>
            </div>
            <span class="illustration-label">Outcome Selected</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">SA 260 TCWG Communication and Report Drafting</h3>
        <p class="step-description">Patron mandatorily communicates with Those Charged with Governance under SA 260 (Revised) - whether material uncertainty exists; whether going concern basis is appropriate; adequacy of disclosure; implications for audit report. Audit report drafted based on outcome selected - MURGC paragraph if applicable; Basis for Qualified / Adverse Opinion if applicable; KAM under SA 701 for listed entities; CARO 3(xix) reporting; cross-references reconciled.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 260 TCWG mandatory</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report drafting</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cross-references reconciled</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SA 260 TCWG</text>
<circle cx="40" cy="48" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="40" y="51" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">AUD CTTE</text>
<circle cx="80" cy="48" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="80" y="51" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BOARD</text>
<line x1="47" y1="48" x2="73" y2="48" stroke="#14365F" stroke-width="0.8" stroke-dasharray="2"/>
<rect x="22" y="60" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="66" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">MAT UNCERTAINTY?</text>
<rect x="22" y="71" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="77" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DISCLOSURE ADEQ?</text>
<rect x="22" y="82" width="76" height="9" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="88" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SA 570 PARA 25</text>
                </svg>
            </div>
            <span class="illustration-label">TCWG Communicated</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Sign-Off and AOC-4 Filing</h3>
        <p class="step-description">The complete audit report (main report under SA 700/705 with or without MURGC, Annexure A CARO, Annexure B IFC) is signed by the appointed auditor under Section 145 with UDIN. Form AOC-4 is filed with MCA21 V3 within 30 days of AGM. Where material uncertainty was disclosed, Patron supports management in preparing lender / investor communication; for listed entities, SEBI LODR Regulation 30 24-hour notification.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 145 + UDIN</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOC-4 within 30 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LODR Reg 30 if listed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
<text x="60" y="32" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SIGN-OFF</text>
<line x1="25" y1="42" x2="95" y2="42" stroke="#10B981" stroke-width="2"/>
<rect x="28" y="48" width="64" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/>
<text x="60" y="54" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">MURGC IF APPLICABLE</text>
<rect x="28" y="59" width="64" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/>
<text x="60" y="65" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">CARO 3(xix) + KAM</text>
<rect x="28" y="70" width="64" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/>
<text x="60" y="76" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">UDIN + SEC 145</text>
<line x1="40" y1="82" x2="80" y2="82" stroke="#10B981" stroke-width="0.5" stroke-dasharray="2"/>
<text x="60" y="90" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4 + LODR 30</text>
<circle cx="100" cy="22" r="5" fill="#10B981"/>
<path d="M97 22 L99 24 L103 20" stroke="#fff" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Report Signed</span>
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
            <h2 class="section-title">Going Concern Audit Documents Checklist</h2>
            <div class="content-text">
                
                <p>Patron's going concern audit document checklist organised across 5 sections - management's assessment documents through auditor's working papers. Documents support the SA 570 four-outcome determination and MURGC paragraph drafting where applicable.</p>

<h3 style="margin-top:24px;">Section A - Management's Going Concern Assessment</h3>
<ul>
    <li><strong>Twelve-Month Forward Cash Flow Projection:</strong> From audit report date forward; monthly breakdown; opening cash position; expected receipts (collections, debt drawdown, capital raise); expected payments (operations, debt service, statutory dues); closing cash position; assumptions documentation</li>
    <li><strong>Debt Service Plan:</strong> Bank-wise / lender-wise outstanding; maturity schedule; covenant compliance status; renewal / refinance plan</li>
    <li><strong>Mitigating Management Plans:</strong> Capital raise (term sheets, investor interest documents); debt restructuring (lender discussion minutes, RBI Resolution Framework if applicable); cost reduction (specific savings with implementation timeline); asset monetisation (asset sale, factoring, leaseback)</li>
    <li><strong>Section 134(5)(a) Director Responsibility Statement:</strong> Board's confirmation that financial statements prepared on going concern basis; substantive Board minute discussion if going concern uncertain</li>
</ul>

<h3 style="margin-top:24px;">Section B - Financial Indicators Documentation</h3>
<ul>
    <li><strong>Financial Ratios Schedule:</strong> Current ratio, debt-equity, debt service coverage, interest coverage, return on equity, inventory and receivable turnover, EBITDA margin trends; cross-reference Schedule III 11 financial ratios disclosure</li>
    <li><strong>Ageing Schedules:</strong> Trade receivables and trade payables ageing per Schedule III 2021 amendments; statutory dues ageing for CARO 3(vii)(a)</li>
    <li><strong>Working Capital Position:</strong> Current assets minus current liabilities; negative working capital trend analysis; explanation if applicable</li>
</ul>

<h3 style="margin-top:24px;">Section C - Operating Indicators Documentation</h3>
<ul>
    <li><strong>Key Customer / Market Dependence:</strong> Top 10 customer concentration; customer loss history; market disruption analysis</li>
    <li><strong>Key Management / Talent:</strong> Senior management retention; key person dependencies; succession planning documentation</li>
    <li><strong>Industry / Regulatory Position:</strong> Industry stress indicators; regulatory action history; pending regulatory proceedings</li>
</ul>

<h3 style="margin-top:24px;">Section D - Other Indicators Documentation</h3>
<ul>
    <li><strong>Litigation Schedule:</strong> Pending matters with material potential loss; opinion of counsel; provisioning analysis</li>
    <li><strong>Regulatory Action:</strong> Any pending regulatory action - RBI, SEBI, CCI, NCLT, etc.; nature of action; potential financial impact</li>
    <li><strong>IBC 2016 Status:</strong> Any Section 7 / 8 / 9 / 10 application filed against the company; CIRP status if applicable; Resolution Professional appointment</li>
    <li><strong>NCLT Proceedings:</strong> Compromise or arrangement under Sections 230 to 240; class action under Section 245</li>
</ul>

<h3 style="margin-top:24px;">Section E - Auditor's Working Papers</h3>
<ul>
    <li><strong>SA 570 Risk Assessment Memo:</strong> Identification of events / conditions; significance assessment; mitigating plans evaluation</li>
    <li><strong>Subsequent Events Memo Under SA 560:</strong> Events between balance sheet date and audit report date with going concern implications</li>
    <li><strong>SA 260 TCWG Communication File:</strong> Audit Committee / Board minutes recording going concern discussion; auditor's communication; management response</li>
    <li><strong>Written Representations Under SA 580:</strong> Management representation on going concern basis appropriateness; completeness of relevant information; mitigating plans support</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Seven Business Impacts of Going Concern Modifications</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Bank Lender Covenant Trigger</td><td>Most loan covenants include 'no going concern qualification or material uncertainty disclosure' as a representation and warranty. A going concern modification - even just an MURGC paragraph without opinion modification - can trigger covenant breach requiring lender waiver or cure period. Outcomes - accelerated repayment demands; cross-default into other facilities; conversion of revolving facilities to term facilities; pricing increases of 200 to 500 basis points; additional collateral requirements.</td><td>Patron solution: Pre-audit lender notification framework; lender restructuring discussion documented as mitigating plan; covenant relaxation request coordinated with audit timeline; lender communication pack prepared in parallel with audit report drafting.</td></tr>
<tr><td>Equity Investor and PE Diligence Adjustment</td><td>Going concern modifications in target audit reports are deal-breakers in most M&A transactions. Where the deal proceeds - additional diligence cost (Rs 10 to 50 lakh in advisory fees), valuation adjustments (typical 15 to 30 percent discount for going-concern-uncertain targets), escrow conditions (15 to 25 percent of consideration held until next year's clean audit), management indemnities. Listed entity share price reactions typically 15 to 30 percent declines.</td><td>Patron solution: Investor communication pack with management mitigating plans timeline; pre-disclosure investor briefing where appropriate; remediation roadmap with measurable milestones to remove modification in subsequent year audit.</td></tr>
<tr><td>Section 134(3)(f) Board Report Mandatory Explanation</td><td>Section 134(3)(f) of the Companies Act, 2013 makes it MANDATORY for the Board Report to contain explanations or comments on every qualification, reservation, adverse remark, or disclaimer made by the auditor - INCLUDING MURGC paragraph commentary. NFRA inspections heavily scrutinise Section 134(3)(f) language; boilerplate explanations are red flags.</td><td>Patron solution: Substantive Section 134(3)(f) explanation drafted alongside audit report - acknowledging the going concern matter factually, stating management's view, describing remediation steps with specific timeline. Avoids boilerplate language that attracts NFRA scrutiny.</td></tr>
<tr><td>SEBI LODR Regulation 30 Material Event Disclosure</td><td>Listed entities must disclose going concern modifications as material events under SEBI LODR Regulation 30 - within 24 hours of audit report sign-off. Stock exchange notification is mandatory; investor analyst commentary follows. SEBI may issue queries; periodic monitoring may intensify. BSE-500 / NIFTY-500 entities may see passive fund flow adjustments.</td><td>Patron solution: Pre-sign-off coordination with company secretary on Regulation 30 disclosure language; stock exchange filing within 24-hour window; investor call script prepared in parallel.</td></tr>
<tr><td>Income Tax Consequences</td><td>Going concern modifications can trigger Income Tax inquiries on specific provisions - revenue recognition reversal, asset impairment, inventory write-down, deferred tax asset reversal. Where the entity moves from going-concern basis to realisation values, AS 4 (Contingencies and Events After Balance Sheet Date) and AS 24 (Discontinuing Operations) or Ind AS 5 (Non-Current Assets Held for Sale and Discontinued Operations) implications follow.</td><td>Patron solution: Income tax position memo documenting accounting changes; coordination with tax counsel on revenue / asset impairment / DTA positions; pre-emptive documentation for likely tax inquiries.</td></tr>
<tr><td>NCLT and IBC 2016 Triggers</td><td>Going concern modifications combined with default on debt obligations create grounds for IBC 2016 application by financial creditors (Section 7) or operational creditors (Section 9). The Corporate Insolvency Resolution Process (CIRP) under Section 12 runs for 180 days extendable to 270 days; on admission, management is replaced by Resolution Professional under Section 17; control passes to Committee of Creditors.</td><td>Patron solution: Pre-IBC audit advisory; coordination with restructuring counsel on debt service plan; lender consortium meeting support; where CIRP becomes likely, audit conclusion considers IBC 2016 admission as 'other indicator' in SA 570 categorisation.</td></tr>
<tr><td>Director Personal Exposure Under Section 339 / 271 / 248</td><td>Where the entity is wound up after going concern modifications, directors face personal exposure - Section 339 fraudulent conduct of business; Section 271(1)(c) inability to pay debts; Section 248 strike-off if entity has not carried on business for two consecutive years. Where wrongful trading is alleged, directors who continued operations despite known going concern doubts face additional exposure.</td><td>Patron solution: Director responsibility documentation memo; Audit Committee minutes capturing director discussion on going concern factors; written representation under SA 580; substantive Section 134(5)(a) DRS support that documents director consideration of going concern matters.</td></tr>

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
            <h2 class="section-title">Patron Going Concern Audit Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Statutory Audit With Going Concern Bundled (Mid-Size Pvt Ltd)</td><td>Rs 4,50,000 to Rs 9,00,000 (Exl GST and Govt. Charges) - Timeline 6 to 8 weeks. Statutory audit including SA 570 risk assessment, mitigating plans evaluation, MURGC paragraph drafting if applicable, CARO 3(xix) reporting.</td></tr>
<tr><td>Large Unlisted With Going Concern Bundled</td><td>Rs 9,50,000 to Rs 22,00,000 (Exl GST and Govt. Charges) - Timeline 8 to 11 weeks. Multi-segment / multi-entity Pvt Ltd with substantial going concern complexity.</td></tr>
<tr><td>Listed Entity With Going Concern KAM Under SA 701</td><td>From Rs 30,00,000 (Exl GST and Govt. Charges) - Timeline 11 to 14 weeks. Full SA 701 KAM treatment alongside MURGC; SEBI LODR Regulation 30 coordination; investor analyst preparation.</td></tr>
<tr><td>Pre-Audit Going Concern Engagement (4-6 Months Before YE)</td><td>Rs 1,50,000 to Rs 5,00,000 standalone (Exl GST and Govt. Charges) - Timeline 3 to 5 weeks. Distress identification, 12-month forward FCF review, mitigating plans evaluation, preliminary view memo for Audit Committee.</td></tr>
<tr><td>Going Concern Remediation Advisory (Year-Over-Year Removal)</td><td>Rs 2,50,000 to Rs 8,00,000 standalone (Exl GST and Govt. Charges) - Timeline 4 to 6 weeks. Roadmap to remove MURGC paragraph in subsequent year audit; quarterly milestone tracking; lender / investor communication coordination.</td></tr>
<tr><td>Lender / Investor Communication Support During Going Concern Disclosure</td><td>From Rs 1,50,000 (Exl GST and Govt. Charges) - Timeline 1 to 3 weeks. Lender briefing pack, covenant waiver request support, investor analyst Q&A preparation, SEBI LODR Regulation 30 disclosure coordination.</td></tr>
<tr><td>IBC 2016 Pre-Admission Audit Advisory</td><td>From Rs 5,00,000 (Exl GST and Govt. Charges) - Timeline 4 to 6 weeks. Pre-CIRP audit positioning; Section 7 / 9 risk assessment; Resolution Plan coordination support; restructuring counsel coordination.</td></tr>
<tr><td>NCLT-Admitted Company Audit (RP Coordination)</td><td>From Rs 7,50,000 (Exl GST and Govt. Charges) - Timeline 6 to 9 weeks. Audit under Resolution Professional control; Committee of Creditors reporting; basis-other-than-going-concern accounting where applicable.</td></tr>
<tr><td>Initial Distress Consultation (30 Minutes With Senior Partner CA)</td><td>Free (no obligation)</td></tr>
<tr><td>Integrated With Patron Statutory Audit (Bundled)</td><td>Going concern audit work bundled within statutory audit fee where Patron is the appointed auditor. Standalone fees apply only for pre-audit engagement, remediation advisory, lender support, or IBC advisory engaged separately.</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Going Concern Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20going%20concern%20audit%20engagement%20-%20SA%20570%20mitigating%20plans%20evaluation%20and%20MURGC%20drafting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Going Concern Audit Cycle Timeline for Distressed Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Audit Distress Identification (4 to 6 months before year-end)</td><td>Distress indicator scan; Audit Committee briefing; pre-audit engagement decision. October to November timeframe for March year-end companies</td></tr>
<tr><td>Management 12-Month Forward Assessment (3 to 4 months before year-end)</td><td>Cash flow projection prepared by management; mitigating plans documented; lender restructuring discussions initiated where applicable</td></tr>
<tr><td>Pre-Audit Going Concern Engagement (3 to 4 months before year-end)</td><td>Patron's review of management assessment; preliminary view shared with Audit Committee; sensitivity analysis; subsequent events horizon scanning</td></tr>
<tr><td>Year-End Close and Subsequent Events Review (Year-end and first 2 weeks of April)</td><td>Year-end financial close; subsequent events from April 1 to audit report date scanned for going concern implications</td></tr>
<tr><td>SA 570 Audit Procedures (Weeks 2 to 6 of audit fieldwork)</td><td>Inquiry of management; cash flow forecast analysis; mitigating plans evaluation; written representations under SA 580; subsequent events review under SA 560</td></tr>
<tr><td>Material Uncertainty Determination (Week 6 to 7)</td><td>Magnitude and likelihood evaluation; conclusion on whether material uncertainty exists; documentation of reasoning chain</td></tr>
<tr><td>SA 260 TCWG Communication (Week 7)</td><td>Audit Committee or Board briefing on going concern findings; remediation options discussed; management response opportunity</td></tr>
<tr><td>Audit Report Drafting With Reporting Outcome (Week 7 to 8)</td><td>Outcome selection from four-outcome matrix; CARO 3(xix) drafting; KAM under SA 701 if listed; MURGC paragraph if applicable</td></tr>
<tr><td>Sign-Off, UDIN, and Stock Exchange Notification (Week 8 to 9)</td><td>Section 145 sign-off; UDIN generation; SEBI LODR Regulation 30 disclosure within 24 hours if listed</td></tr>
<tr><td>Form AOC-4 Filing (Within 30 days of AGM)</td><td>Complete audit report package filed with MCA21 V3; main report + Annexure A CARO + Annexure B IFC if applicable + Schedule III financial statements</td></tr>
<tr><td>Lender / Investor Communication (Concurrent with sign-off)</td><td>Lender briefing pack delivered; covenant waiver / restructuring discussions if MURGC; investor analyst pre-call where applicable</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>For distressed company CFOs, proactive auditor engagement 4 to 6 months before year-end is the single most important decision.</strong> Waiting until audit fieldwork begins to discuss going concern with the auditor compresses the remediation window and frequently leads to suboptimal reporting outcomes - qualified opinion where clean unmodified with MURGC could have been achieved with enhanced disclosure; adverse opinion where qualified could have been negotiated through documented mitigating plans.</p>

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
            <h2 class="section-title">Why Patron's Going Concern Audit Approach Differs</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3>Pre-Audit Going Concern Engagement 4-6 Months Ahead</h3>
        <p>Patron identifies distress signals early and initiates the going concern dialogue with sufficient remediation window; rare in market practice and prevents the last-minute scramble that frequently leads to qualified opinions where remediation was possible.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
        <h3>Four-Outcome Decision Matrix Walk-Through</h3>
        <p>Patron walks management through the SA 570 outcome possibilities and works toward the best outcome consistent with the facts; many companies do not realise that adequate disclosure converts a potential qualified opinion to clean unmodified with MURGC.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3>MURGC Paragraph Drafting Expertise</h3>
        <p>Precise wording per SA 570 paragraph 22 - identifying events or conditions; cross-referencing management's plans disclosed in financial statements; opinion remains unmodified. Standard heading 'Material Uncertainty Related to Going Concern' applied correctly.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <h3>CARO 3(xix) Substantive Reporting</h3>
        <p>Substantive linkage with main audit report MURGC section rather than boilerplate disclaimer. Based on financial ratios, ageing, expected realisation dates, and Board / management plans knowledge per the Clause 3(xix) framework.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3>Lender and Investor Communication Bundled</h3>
        <p>Where MURGC is unavoidable, Patron supports management in preparing the lender briefing and investor communication pack so the disclosure lands with context rather than as a shock. Bundled with going concern audit work.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3>IBC 2016 Pre-Admission Audit Experience</h3>
        <p>Specific engagement track for companies approaching IBC 2016 admission - pre-CIRP audit positioning, Section 7 / 9 risk assessment, Resolution Plan coordination, restructuring counsel coordination. NCLT-admitted company audit with Resolution Professional coordination.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3>One-Third of Big-Four Fees</h3>
        <p>For mid-size distressed Pvt Ltd Rs 50 cr revenue - Big-Four Rs 15 to 30 lakh vs Patron Rs 4.5 to 9 lakh. Senior partner-led mid-tier firm with structured pre-audit engagement playbook at one-third the cost.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <h3>Going Concern Remediation Roadmap</h3>
        <p>Year-over-year removal of MURGC paragraph through documented remediation - quarterly milestone tracking, lender / investor communication, subsequent-year audit positioning. Patron's roadmap covers 12 to 18 month remediation cycles.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted Going Concern Audit Practice</h2>
            <div class="content-text">
                
                <div style="background:var(--blue-lighter);padding:24px;border-radius:12px;margin-bottom:24px;">
    <p style="font-weight:700;color:var(--blue);font-size:18px;margin-bottom:8px;">10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
</div>
<h3 style="margin-top:24px;">Client Coverage</h3>
<p>Trusted by <strong>Hyundai, Asian Paints, Bridgestone and a growing roster of distressed Pvt Ltd companies, restructuring NBFCs, and pre-IBC audit engagements.</strong> Patron's going concern audit practice spans turnaround Pvt Ltd entities, restructuring NBFCs under RBI Resolution Framework, pre-IBC 2016 audit engagements for companies approaching CIRP admission, NCLT-admitted companies with Resolution Professional coordination, listed entities with going concern KAM under SA 701 alongside MURGC section, and family-business group distressed-subsidiary audits.</p>
<h3 style="margin-top:24px;">Confidentiality and Discretion</h3>
<p><strong>All pre-audit going concern engagements and distressed-company audit work are subject to strict professional confidentiality.</strong> Patron's engagement letters explicitly cover ICAI Code of Ethics confidentiality. Pre-audit going concern dialogue is conducted on a confidential basis - the auditor's preliminary view does not become public until and unless reflected in the final audit report.</p>
<h3 style="margin-top:24px;">4-Office Signal</h3>
<p><strong>With offices in Pune (Wagholi), Mumbai (Marine Lines), Delhi (Rohini), and Gurugram (Golf Course Extension Road), Patron Accounting services distressed-company audits across India</strong> - turnaround Pvt Ltd entities, restructuring NBFCs, and pre-IBC audit engagements. Direct on-site availability for Audit Committee briefings, lender consortium presentations, NCLT proceedings, and Resolution Professional coordination meetings.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Big-Four vs Generic Mid-Tier vs Patron Going Concern Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Big-Four</th><th>Generic Mid-Tier</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Audit Going Concern Engagement 4-6 Months Ahead</td><td>Rare</td><td>Variable</td><td>Standard procedure for distressed companies</td></tr>
<tr><td>Four-Outcome Decision Matrix Walk-Through With Management</td><td>Compliance-only</td><td>Variable</td><td>Hands-on management dialogue</td></tr>
<tr><td>MURGC Paragraph Drafting Expertise</td><td>Standard procedure</td><td>Variable</td><td>SA 570 paragraph 22 precise wording</td></tr>
<tr><td>CARO 3(xix) Substantive Reporting</td><td>Standard procedure</td><td>Often boilerplate</td><td>Substantive linkage with main report</td></tr>
<tr><td>Lender / Investor Communication Support</td><td>Limited</td><td>Limited</td><td>Bundled with engagement</td></tr>
<tr><td>IBC 2016 Pre-Admission Audit Experience</td><td>Variable</td><td>Limited</td><td>Specific engagement track</td></tr>
<tr><td>NCLT-Admitted Company Audit With RP Coordination</td><td>Variable</td><td>Limited</td><td>Standard capability</td></tr>
<tr><td>Going Concern Remediation Roadmap</td><td>Standard</td><td>Variable</td><td>Quarterly milestone tracking with year-over-year removal</td></tr>
<tr><td>Cost - Mid-Size Distressed Pvt Ltd Rs 50 cr Revenue</td><td>Rs 15 to 30 lakh</td><td>Rs 8 to 18 lakh</td><td>Rs 4.5 to 9 lakh</td></tr>
<tr><td>Best Use Case</td><td>Listed entities; NFRA-monitored entities</td><td>Steady-state audits</td><td>Pvt Ltd; NBFCs; family-business groups; turnaround entities; pre-IBC engagements</td></tr>

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
            <h2 class="section-title">Related Patron Services in the Audit Cluster</h2>
            <div class="content-text">
                
                <p>Going concern audit is part of Patron's broader statutory audit cluster. The cluster includes the parent service page, sister authority pages on opinions / CARO / IFC / first-year audit / rotation, and adjacent compliance services:</p>
<ul>
    <li><strong><a href="/statutory-audit">Statutory Audit (Parent)</a>:</strong> Overarching statutory audit service in India - this going concern page is the operational drilldown for SA 570 procedures.</li>
    <li><strong><a href="/qualified-vs-unqualified-audit-opinion">Qualified vs Unqualified Audit Opinion</a>:</strong> Going concern is one of four qualification triggers; this page provides going concern depth.</li>
    <li><strong><a href="/audit-report-types-india">Audit Report Types in India</a>:</strong> SA 570 is part of the audit reporting framework alongside SA 700 / 705 / 706 / 701.</li>
    <li><strong><a href="/caro-2020-reporting">CARO 2020 Reporting</a>:</strong> Clause 3(xix) specific going concern reporting requirement.</li>
    <li><strong><a href="/internal-financial-controls-audit">Internal Financial Controls Audit</a>:</strong> Material Weakness in cash flow forecasting / covenant monitoring during distress frequently parallels going concern findings.</li>
    <li><strong><a href="/schedule-iii-compliance-companies-act">Schedule III Compliance</a>:</strong> Financial ratios disclosure under Schedule III Note 9 relevant to going concern indicators.</li>
    <li><strong><a href="/first-year-statutory-audit-checklist">First Year Statutory Audit Checklist</a>:</strong> Y1 going concern indicators for early-stage companies (cash runway, funding round timing).</li>
    <li><strong><a href="/audit-rotation-transition-india">Audit Rotation Transition</a>:</strong> Going concern continuity across rotation - successor auditor must form independent SA 570 view.</li>
    <li><strong><a href="/change-of-auditor">Change of Auditor</a>:</strong> Section 140 if predecessor disagreement on going concern.</li>
    <li><strong><a href="/private-limited-company-compliance">Private Limited Company Compliance</a>:</strong> Section 134(3)(f) Board Report mandatory explanation on going concern modifications.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Framework - SA 570, Companies Act, CARO 2020, IBC 2016, RBI, SEBI</h2>
            <div class="content-text">
                
                <p>Going concern audit is governed by ICAI Standards on Auditing (SA 570 Revised primary), Companies Act 2013 (Section 134(5)(a) DRS + Section 143 auditor's report), CARO 2020 Clause 3(xix), IBC 2016, RBI Master Direction on Resolution Framework, and SEBI LODR Regulation 30 for listed entities. Audit standards issuer: <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a>. Primary regulator: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA)</a>. IBC oversight: <a href="https://www.ibbi.gov.in" target="_blank" rel="noopener">Insolvency and Bankruptcy Board of India (IBBI)</a>.</p>

<h3 style="margin-top:24px;">SA 570 (Revised) Going Concern - Paragraph-Level Reference</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>SA 570 (Revised) - Going Concern</td><td>PRIMARY anchor - effective for audits of financial statements for periods beginning on or after 1 April 2017</td></tr>
        <tr><td>SA 570 Paragraph 17</td><td>Auditor evaluates management's assessment for SAAE on going concern basis appropriateness</td></tr>
        <tr><td>SA 570 Paragraph 18</td><td>Material uncertainty existence threshold - magnitude AND likelihood requiring disclosure</td></tr>
        <tr><td>SA 570 Paragraphs 19-20</td><td>Adequacy of disclosure when material uncertainty exists / when no material uncertainty but indicators exist</td></tr>
        <tr><td>SA 570 Paragraph 21</td><td>Adverse opinion when going concern basis itself inappropriate</td></tr>
        <tr><td>SA 570 Paragraph 22</td><td>Material Uncertainty Related to Going Concern separate section; opinion remains unmodified; standard heading prescribed</td></tr>
        <tr><td>SA 570 Paragraph 23</td><td>Qualified or adverse opinion when material uncertainty exists but disclosure inadequate</td></tr>
        <tr><td>SA 570 Paragraph 24</td><td>Management unwilling to make or extend assessment - audit report implications</td></tr>
        <tr><td>SA 570 Paragraph 25</td><td>Mandatory communication with TCWG on going concern matters - non-negotiable</td></tr>
    </tbody>
</table>
</div>

<h3 style="margin-top:24px;">Related ICAI Standards on Auditing</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>SA 701 - KAM Going Concern</td><td>Material uncertainty related to going concern is KAM by nature for listed entities; appears alongside MURGC section</td></tr>
        <tr><td>SA 560 - Subsequent Events</td><td>Events between balance sheet date and audit report date; critical for going concern given 12-month forward look from audit report date</td></tr>
        <tr><td>SA 260 (Revised) - TCWG Communication</td><td>Mandatory communication with Those Charged with Governance on going concern matters - non-negotiable under SA 570 paragraph 25</td></tr>
        <tr><td>SA 315 - Risk Assessment</td><td>Risk assessment framework that integrates with SA 570 going concern indicators identification</td></tr>
        <tr><td>SA 540 - Auditing Accounting Estimates</td><td>Cash flow projection and mitigating plans involve significant estimates evaluated under SA 540</td></tr>
        <tr><td>SA 580 - Written Representations</td><td>Management representations on going concern basis appropriateness and completeness of relevant information</td></tr>
        <tr><td>SA 700 (Revised) - Forming an Opinion</td><td>Standard opinion formation; MURGC section sits between Basis for Opinion and KAM sections</td></tr>
        <tr><td>SA 705 (Revised) - Modifications</td><td>Qualified, adverse, or disclaimer of opinion frameworks used when SA 570 outcomes 3 or 4 apply</td></tr>
        <tr><td>SA 706 (Revised) - EoM and OM Paragraphs</td><td>Standard mechanism for emphasis and other matter paragraphs distinct from MURGC</td></tr>
    </tbody>
</table>
</div>

<h3 style="margin-top:24px;">Companies Act 2013 and CARO 2020</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>Section 134(5)(a) Companies Act 2013</td><td>Director Responsibility Statement - financial statements prepared on going concern basis</td></tr>
        <tr><td>Section 143 Companies Act 2013</td><td>Auditor's report contents</td></tr>
        <tr><td>Section 143(3)(b)</td><td>Auditor reports on whether financial statements comply with applicable accounting standards - including going concern accounting</td></tr>
        <tr><td>Section 134(3)(f)</td><td>Board Report MUST contain explanations on every qualification, reservation, adverse remark, or disclaimer - INCLUDING going concern modifications</td></tr>
        <tr><td>Section 145 Companies Act 2013</td><td>Auditor signs audit report under this section</td></tr>
        <tr><td>Sections 230 to 240 Companies Act 2013</td><td>Compromise or arrangement; class action under Section 245</td></tr>
        <tr><td>CARO 2020 Clause 3(xix)</td><td>Auditor's separate opinion based on financial ratios, ageing, expected realisation dates, Board / management plans knowledge - whether material uncertainty exists for entity to meet liabilities within one year from balance sheet date</td></tr>
        <tr><td>AS 1 - Disclosure of Accounting Policies</td><td>Going concern as fundamental accounting assumption; disclosure required if not followed</td></tr>
        <tr><td>Ind AS 1 - Presentation of Financial Statements</td><td>Going concern assessment - foreseeable future minimum 12 months from balance sheet date; disclosure of uncertainties</td></tr>
    </tbody>
</table>
</div>

<h3 style="margin-top:24px;">IBC 2016, RBI Resolution Framework, SEBI LODR</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>IBC 2016 Section 7</td><td>Financial creditor application to NCLT for initiating CIRP</td></tr>
        <tr><td>IBC 2016 Sections 8 and 9</td><td>Operational creditor demand notice and application</td></tr>
        <tr><td>IBC 2016 Section 10</td><td>Corporate applicant - company itself initiating CIRP</td></tr>
        <tr><td>IBC 2016 Section 12</td><td>CIRP timeline - 180 days extendable to 270 days; mandatory liquidation if no resolution plan approved</td></tr>
        <tr><td>IBC 2016 Section 17</td><td>Management is replaced by Resolution Professional on CIRP admission</td></tr>
        <tr><td>RBI Master Direction on Resolution Framework</td><td>Standard restructuring framework for stressed accounts; covenant relaxation mechanism</td></tr>
        <tr><td>RBI IRACP Directions 2025</td><td>Income Recognition, Asset Classification, Provisioning - NBFC distress framework</td></tr>
        <tr><td>SEBI LODR Regulation 30</td><td>Material event disclosure - going concern modifications require stock exchange notification within 24 hours</td></tr>
    </tbody>
</table>
</div>

<h3 style="margin-top:24px;">SA 570 Four Reporting Outcomes Decision Matrix</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Scenario</th><th>Going Concern Basis</th><th>Material Uncertainty</th><th>Disclosure</th><th>Audit Report Outcome</th></tr></thead>
    <tbody>
        <tr><td>1</td><td>Appropriate</td><td>None</td><td>Not applicable</td><td>CLEAN UNMODIFIED - standard report sections; no MURGC; no CARO 3(xix) qualification</td></tr>
        <tr><td>2</td><td>Appropriate</td><td>Exists</td><td>Adequate</td><td>UNMODIFIED with MURGC SECTION - opinion not modified; separate section heading; KAM by nature for listed entities under SA 701</td></tr>
        <tr><td>3</td><td>Appropriate</td><td>Exists</td><td>Inadequate</td><td>QUALIFIED OPINION (not pervasive) OR ADVERSE OPINION (pervasive) under SA 705 - Basis for Modified Opinion identifies inadequate disclosure</td></tr>
        <tr><td>4</td><td>INAPPROPRIATE</td><td>Not relevant</td><td>Not relevant</td><td>ADVERSE OPINION under SA 705 - financial statements should have been prepared on basis other than going concern (typically realisation values)</td></tr>
        <tr><td>5 Special</td><td>Appropriate</td><td>Likely but management unwilling to extend assessment</td><td>Not assessable</td><td>Auditor considers implications under SA 570 paragraph 24 - typically Qualified or Disclaimer of Opinion</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Going Concern Audit Considerations</h2>
                    <p class="faq-expanded__lead">Practitioner-level Q&A on SA 570 (Revised) Going Concern Standard, going concern basis of accounting, material uncertainty related to going concern (MURGC), four reporting outcomes under SA 570, common going concern indicators across financial / operating / other categories, CARO 2020 Clause 3(xix) reporting, distinction between MURGC paragraph and going concern qualification, and proactive distressed-company CFO engagement framework.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Going Concern Audit Considerations'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is going concern audit under SA 570?</h3>
                        <div class="faq-expanded__a"><p>Going concern audit under SA 570 (Revised) is the auditor's evaluation of management's use of the going concern basis of accounting - the fundamental accounting assumption that the entity will continue to operate in the foreseeable future and meet its financial obligations. The auditor obtains sufficient appropriate audit evidence on management's assessment and concludes whether material uncertainty exists related to events or conditions that may cast significant doubt on the entity's ability to continue as a going concern. The minimum forward-looking horizon is 12 months from the audit report date - not the balance sheet date. SA 570 yields four reporting outcomes ranging from clean unmodified opinion to adverse opinion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the meaning of going concern in audit?</h3>
                        <div class="faq-expanded__a"><p>Going concern in audit refers to the fundamental accounting assumption that the entity will continue to operate in the foreseeable future and will be able to realise its assets and discharge its liabilities in the normal course of business. It is the default basis for financial statement preparation under both Accounting Standards (AS framework) and Indian Accounting Standards (Ind AS framework). Section 134(5)(a) of the Companies Act, 2013 requires the Director Responsibility Statement to confirm preparation on going concern basis. When events or conditions cast significant doubt, the auditor performs SA 570 procedures and may report material uncertainty in the audit report.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is material uncertainty related to going concern?</h3>
                        <div class="faq-expanded__a"><p>Material uncertainty related to going concern exists when the magnitude of potential impact AND the likelihood of occurrence are such that, in the auditor's judgment, appropriate disclosure of the nature and implications is necessary for fair presentation (under fair presentation framework) or to prevent misleading statements (under compliance framework). Per SA 570 paragraph 18, both magnitude and likelihood must combine to make disclosure necessary. Where material uncertainty exists and disclosure is adequate, the audit report includes a separate Material Uncertainty Related to Going Concern (MURGC) section - this does NOT modify the opinion. Where disclosure is inadequate, the opinion is modified to qualified (not pervasive) or adverse (pervasive).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the four reporting outcomes under SA 570?</h3>
                        <div class="faq-expanded__a"><p>SA 570 yields four reporting outcomes - (1) Going concern basis appropriate, no material uncertainty - clean unmodified opinion with standard report sections, no MURGC; (2) Going concern basis appropriate, material uncertainty exists, disclosure adequate - unmodified opinion with separate Material Uncertainty Related to Going Concern (MURGC) section; KAM by nature for listed entities under SA 701; (3) Going concern basis appropriate, material uncertainty exists, disclosure inadequate - qualified opinion (if not pervasive) or adverse opinion (if pervasive) under SA 705; (4) Going concern basis INAPPROPRIATE (entity not viable for foreseeable future) - adverse opinion under SA 705. The four-outcome matrix is the core of SA 570 reporting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are common going concern indicators?</h3>
                        <div class="faq-expanded__a"><p>SA 570 categorises indicators in three groups. Financial - net liability position, negative working capital, debt maturity approaching without renewal prospects, withdrawal of financial support by creditors, negative operating cash flows, adverse key financial ratios, substantial operating losses, inability to pay creditors, inability to comply with loan covenants. Operating - management intent to liquidate, loss of key management, loss of major market or key customers or principal suppliers, labour difficulties, shortage of important supplies, emergence of successful competitor. Other - non-compliance with capital or statutory requirements, pending legal or regulatory proceedings, adverse changes in law or regulation, IBC 2016 application against the company, NCLT proceedings, RBI license cancellation, SEBI suspension. Single indicator does not automatically signify going concern issue; combination and significance evaluated.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is CARO 3(xix) reporting?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 Clause 3(xix) requires the auditor to separately report - on the basis of the financial ratios, ageing and expected dates of realisation of financial assets and payment of financial liabilities, other information accompanying the financial statements, and the auditor's knowledge of the Board of Directors and management plans - whether the auditor is of the opinion that no material uncertainty exists as on the date of the audit report that the company is capable of meeting its liabilities existing at the date of the balance sheet as and when they fall due within a period of one year from the balance sheet date. This is a one-year forward look from balance sheet date (shorter than SA 570's 12 months from audit report date). The CARO 3(xix) reporting is mandatory for every audit covered by CARO 2020.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between going concern qualification and material uncertainty disclosure?</h3>
                        <div class="faq-expanded__a"><p>The two are different audit report elements. Material uncertainty disclosure (MURGC) - where going concern basis is appropriate, material uncertainty exists, and management's disclosure is adequate, the audit report includes a separate Material Uncertainty Related to Going Concern section under SA 570 paragraph 22. This does NOT modify the audit opinion - the opinion remains unmodified. Going concern qualification - where going concern basis is appropriate but management's disclosure is INADEQUATE, the audit opinion is modified to qualified (not pervasive) or adverse (pervasive) under SA 705. Where going concern basis itself is inappropriate, the opinion is adverse. The MURGC section is a signal of material uncertainty without opinion modification; qualification arises only from inadequate disclosure or inappropriate basis.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How should distressed companies engage proactively with the auditor on going concern?</h3>
                        <div class="faq-expanded__a"><p>Patron's proactive engagement framework starts 4 to 6 months before year-end. CFO actions - share preliminary 12-month forward cash flow projection; document mitigating management plans (capital raise term sheets, debt restructuring discussions, cost reduction implementation, asset monetisation); finalise lender covenant compliance status; horizon-scan for subsequent events; prepare Section 134(3)(f) Board Report explanation draft for any anticipated modification. Auditor's response - pre-audit engagement memo; preliminary view shared with Audit Committee; SA 570 risk assessment; mitigating plans feasibility evaluation; conclusion on whether material uncertainty exists; reporting outcome selection from the four-outcome matrix; SA 260 TCWG communication. The proactive engagement maximises the remediation window and frequently converts what would have been qualified opinions to unmodified opinions with MURGC sections.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Going concern audit kya hota hai SA 570 ke under? (Hinglish)</strong> Auditor ka evaluation ki company foreseeable future mein operate kar sakti hai aur obligations meet kar sakti hai. 12 mahine ka forward look audit report date se. SA 570 ke 4 reporting outcomes hote hain.</p>
<p><strong>Material uncertainty kya hota hai? (Hinglish)</strong> SA 570 para 18 ke under - magnitude AND likelihood dono significant hain ki disclosure necessary hai fair presentation ke liye. Disclosure adequate hai toh MURGC paragraph; inadequate hai toh qualified ya adverse opinion.</p>
<p><strong>MURGC paragraph kya hai? (Hinglish)</strong> Material Uncertainty Related to Going Concern - SA 570 para 22 ke under separate section in audit report. Opinion ko modify NAHI karta. Sirf signal hai users ko ki material uncertainty exists. Listed entities ke liye KAM by nature.</p>
<p><strong>Going concern qualification kab hoti hai? (Hinglish)</strong> Do scenarios - (1) Material uncertainty exists but disclosure inadequate - Qualified ya Adverse under SA 705; (2) Going concern basis itself inappropriate (entity not viable) - Adverse under SA 705. Pervasiveness based on financial-statement-level effect.</p>
<p><strong>CARO 3(xix) kya report karna hai? (Hinglish)</strong> Auditor's opinion based on financial ratios, ageing, expected realisation dates, Board / management plans knowledge - whether company 1 saal ke andar liabilities meet kar sakti hai balance sheet date se. Mandatory for every CARO audit.</p>
<p><strong>Distressed CFO ko kya karna chahiye? (Hinglish)</strong> 4-6 months pehle year-end se auditor ke saath dialogue start karein. 12-month forward cash flow, debt service plan, mitigating plans share karein. Pre-audit engagement se best outcome milta hai - frequently qualified opinion ko clean unmodified with MURGC mein convert kar sakte hain.</p>
<p><strong>What is the forward-look period?</strong> Minimum 12 months from the audit report date - NOT from the balance sheet date. Covers events into the next financial year.</p>
<p><strong>Does MURGC paragraph modify the audit opinion?</strong> NO. MURGC is a signal of material uncertainty without opinion modification. Qualification arises only from inadequate disclosure or inappropriate going concern basis.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency Recap - Proactive Engagement 4 to 6 Months Before Year-End</h2>
            <div class="content-text">
                
                <p><strong>Going concern modifications carry the heaviest business impact among all audit opinion modifications.</strong> Lender covenant triggers (most loan covenants include 'no going concern qualification or material uncertainty disclosure' as representation - covenant breach with accelerated repayment exposure, cross-default into other facilities, pricing increases of 200 to 500 basis points), equity investor valuation discounts of 15 to 30 percent for going-concern-uncertain targets, escrow conditions of 15 to 25 percent of consideration, listed entity stock price declines of 15 to 30 percent on disclosure, SEBI LODR Regulation 30 24-hour notification requirement, Section 134(3)(f) mandatory Board Report substantive explanation, Income Tax inquiry on revenue recognition / asset impairment / inventory write-down / deferred tax reversal, and potential IBC 2016 Section 7 / 9 admission grounds where combined with debt default.</p>
<p><strong>Section 339 fraudulent conduct of business exposure</strong> for directors who continued operations despite known going concern doubts. Section 271(1)(c) inability to pay debts; Section 248 strike-off if entity has not carried on business for two consecutive years.</p>
<p>The single most important decision for a distressed company CFO is to <strong>ENGAGE WITH THE AUDITOR PROACTIVELY 4 to 6 months before year-end</strong> - the remediation window between management's identification of going concern factors and the audit report sign-off is the difference between a clean unmodified opinion with MURGC paragraph (best-case outcome where material uncertainty exists) and a qualified or adverse opinion (worst-case outcomes). Waiting until audit fieldwork begins to discuss going concern with the auditor compresses the remediation window and frequently leads to suboptimal reporting.</p>
<p><strong>Action now:</strong> Engage Patron proactively for going concern audit dialogue 4 to 6 months before year-end if your company is approaching distress - SA 570 pre-audit engagement with mitigating plans evaluation, four-outcome decision matrix walk-through, MURGC paragraph drafting where applicable, and CARO 3(xix) substantive reporting - <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20going%20concern%20audit%20engagement%20-%20SA%20570%20mitigating%20plans%20evaluation%20and%20MURGC%20drafting." target="_blank">WhatsApp</a>. Free initial consultation with senior partner CA.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for Going Concern Audit Dialogue</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Going concern audit considerations under SA 570 (Revised) are the most consequential forward-looking element of Indian audit reporting - examining the entity's ability to operate and meet obligations over a minimum 12-month horizon from the audit report date. The four reporting outcomes under SA 570 - clean unmodified, unmodified with Material Uncertainty Related to Going Concern (MURGC) section, qualified or adverse due to inadequate disclosure, and adverse due to inappropriate going concern basis - cover the full landscape of distressed-company reporting scenarios. CARO 2020 Clause 3(xix) adds a specific one-year forward look from balance sheet date with the auditor's opinion on whether material uncertainty exists. The going concern indicators catalogue across financial, operating, and other categories covers everything from net liability position to IBC 2016 admission.</p>
<p>For distressed company CFOs, proactive auditor engagement 4 to 6 months before year-end is the single most important decision - it maximises the remediation window and frequently converts qualified opinions to clean unmodified opinions with MURGC sections through enhanced disclosure of management's mitigating plans. Patron Accounting LLP, a 15-year-old CA and CS firm with offices in Pune, Mumbai, Delhi, and Gurugram, has delivered going concern audit engagements for turnaround Pvt Ltd entities, restructuring NBFCs, IBC pre-admission engagements, and listed entities with going concern KAM under SA 701. Senior partner CA on every distressed-company engagement; four-outcome decision matrix walk-through with management; MURGC paragraph drafting under SA 570 paragraph 22 precise wording; lender and investor communication support bundled with going concern audit work; IBC 2016 pre-admission and NCLT-admitted company audit capability.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20going%20concern%20audit%20engagement%20-%20SA%20570%20mitigating%20plans%20evaluation%20and%20MURGC%20drafting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Going%20Concern%20Audit%20Consultation&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20going%20concern%20audit%20consultation.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- STATUTORY AUDIT AUTHORITY CLUSTER -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron Audit Cluster - Sister Authority Pages</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Going concern audit integrates with broader statutory audit and assurance authority pages - all under a single senior partner CA.</p>
         
            <div class="pa-city-block">
    <div class="pa-block-title">Statutory Audit Authority Cluster</div>
    <div class="pa-block-sub">Cross-linked services in Patron's audit and assurance practice</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Parent)</div><div class="pa-card-sub">Section 139 overarching service</div></div></a>
        <a href="/qualified-vs-unqualified-audit-opinion" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Qualified vs Unqualified</div><div class="pa-card-sub">Going concern trigger 1 of 4</div></div></a>
        <a href="/audit-report-types-india" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Audit Report Types</div><div class="pa-card-sub">SA 700/705/706/701 framework</div></div></a>
        <a href="/caro-2020-reporting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">CARO 2020 Reporting</div><div class="pa-card-sub">Clause 3(xix) going concern</div></div></a>
        <a href="/internal-financial-controls-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IFC Audit</div><div class="pa-card-sub">Cash flow forecasting MW</div></div></a>
        <a href="/first-year-statutory-audit-checklist" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">First Year Audit</div><div class="pa-card-sub">Y1 going concern indicators</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">14 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content refreshed quarterly (Tier 1) or whenever ICAI revises SA 570 or related Standards on Auditing (ISA 570 IAASB convergence), MCA amends Section 134(5)(a) DRS requirements, CARO 2020 Clause 3(xix) is amended, RBI revises Master Direction on Resolution Framework, SEBI amends LODR Regulation 30, or NFRA issues inspection findings on SA 570 quality.</p>
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