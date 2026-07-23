
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
    <title>Audit Report Types India: SA 705</title>
    <meta name="description" content="Complete audit report types guide - Unmodified, Qualified, Adverse and Disclaimer opinions under SA 700-705, Key Audit Matters under SA 701, Sec 145 signing.">
    <link rel="canonical" href="/audit-report-types-india">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Audit Report Types India 2026: SA 705 | Patron Accounting">
    <meta property="og:description" content="Complete audit report types guide - Unmodified, Qualified, Adverse and Disclaimer opinions under SA 700-705, Key Audit Matters under SA 701, Sec 145 signing.">
    <meta property="og:url" content="/audit-report-types-india">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/audit-report-types-india-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Audit Report Types India 2026: SA 705 | Patron Accounting">
    <meta name="twitter:description" content="Complete audit report types guide - Unmodified, Qualified, Adverse and Disclaimer opinions under SA 700-705, Key Audit Matters under SA 701, Sec 145 signing.">
    <meta name="twitter:image" content="/images/audit-report-types-india-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/audit-report-types-india#breadcrumb",
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
          "name": "Audit Report Types in India",
          "item": "/audit-report-types-india"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/audit-report-types-india#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are the types of audit reports?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Audit reports in India fall into two categories - unmodified opinion (clean report under SA 700) and modified opinion (under SA 705). A modified opinion is one of three types - Qualified (material BUT NOT pervasive misstatement OR material BUT NOT pervasive inability to obtain audit evidence), Adverse (material AND pervasive misstatement), or Disclaimer (material AND pervasive inability to obtain audit evidence). Beyond the opinion, audit reports include Key Audit Matters under SA 701 (mandatory for listed entities), Emphasis of Matter and Other Matter paragraphs under SA 706, and Going Concern reporting under SA 570 - none of which modify the opinion."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between qualified and unqualified audit opinion?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An unqualified opinion - more accurately called unmodified opinion under the revised SA 700 - is the clean audit report. The auditor concludes that the financial statements give a true and fair view in accordance with the applicable financial reporting framework (AS or Ind AS). A qualified opinion under SA 705 is issued when (a) the financial statements are materially misstated but the misstatement is NOT pervasive, OR (b) the auditor is unable to obtain Sufficient Appropriate Audit Evidence on a matter that is material but NOT pervasive. A qualified opinion uses 'except for' language - the financial statements give a true and fair view except for the matter described in the Basis for Qualified Opinion paragraph."
          }
        },
        {
          "@type": "Question",
          "name": "What is a modified audit opinion?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A modified audit opinion is any opinion other than unmodified - issued under SA 705. There are three types of modified opinions - Qualified, Adverse, and Disclaimer. The type is determined by two factors per the SA 705 decision matrix - (a) whether the matter is a misstatement (auditor has audit evidence) or an inability to obtain Sufficient Appropriate Audit Evidence, and (b) whether the matter is material but NOT pervasive, or material AND pervasive. Misstatement with SAAE - qualified if not pervasive, adverse if pervasive. Inability to obtain SAAE - qualified if not pervasive, disclaimer if pervasive."
          }
        },
        {
          "@type": "Question",
          "name": "What are Key Audit Matters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Key Audit Matters (KAM) under SA 701 are matters that, in the auditor's professional judgment, were of most significance in the audit of the financial statements for the current period. KAMs are selected from matters communicated with Those Charged with Governance under SA 260 - taking into account areas of higher assessed risk under SA 315, significant management judgments on accounting estimates, and the effects of significant events or transactions. KAM communication is mandatory for listed entity audits and optional for unlisted; prohibited where the auditor disclaims an opinion (unless law requires). Each KAM is described in a four-element format - description, why considered, audit procedures performed, outcome reference."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between adverse opinion and disclaimer of opinion?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Both adverse opinion and disclaimer of opinion are issued when the matter is material AND pervasive - but they differ in whether the auditor has audit evidence. Adverse opinion is issued when the auditor HAS Sufficient Appropriate Audit Evidence and concludes that the financial statements are materially and pervasively misstated - i.e. the financial statements as a whole do not give a true and fair view. Disclaimer is issued when the auditor was UNABLE to obtain Sufficient Appropriate Audit Evidence on a matter that is material and pervasive - the auditor cannot form an opinion on the financial statements as a whole. Disclaimer is used in extremely rare circumstances involving multiple uncertainties."
          }
        },
        {
          "@type": "Question",
          "name": "What is an Emphasis of Matter paragraph?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Emphasis of Matter (EoM) paragraph under SA 706 is included in the audit report to draw users' attention to a matter PROPERLY presented or disclosed in the financial statements that is fundamental to users' understanding. EoM does NOT modify the auditor's opinion - the opinion remains unmodified even with an EoM paragraph. Typical EoM triggers - subsequent events between balance sheet date and audit report date; scheme of arrangement effects; regulatory development; prior-period correction adequately disclosed. The placement is after the Opinion and Basis for Opinion sections; before KAM if any. EoM is the auditor's way of saying 'do not miss this' without modifying the opinion."
          }
        },
        {
          "@type": "Question",
          "name": "Who can sign an audit report under the Companies Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 145 of the Companies Act, 2013, the person appointed as auditor of the company shall sign the auditor's report or sign or certify any other document of the company. The auditor is appointed under Section 139 by the members at the AGM (or by the Board for first auditor or casual vacancy). The auditor must be a Chartered Accountant in practice holding a valid Certificate of Practice from ICAI, not disqualified under Section 141 (officer or employee of company; indebted above prescribed limit; business relationship; security holding above prescribed limit; convicted for fraud). Chartered Accountants Act 1949 First Schedule Clause 12 prohibits a CA from allowing a non-CA or non-partner CA to sign on his behalf. UDIN must be generated on the ICAI portal at sign-off."
          }
        },
        {
          "@type": "Question",
          "name": "How to read an audit report as an investor or lender?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Read the audit report in seven layers - (1) Opinion type on the first page - unmodified, qualified, adverse, disclaimer; (2) Basis for Opinion paragraph explaining the cause where modified; (3) Key Audit Matters section (listed entities) signalling where audit attention concentrated; (4) Material Uncertainty Related to Going Concern section (where present) signalling twelve-month forward financial distress; (5) Emphasis of Matter and Other Matter paragraphs which do not modify opinion but are high-signal; (6) Annexure A CARO 2020 with 21-clause company-compliance assessment; (7) Annexure B IFC report with separate opinion on internal financial controls. Each layer can carry independent qualifications; cross-reference all layers in due diligence."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/audit-report-types-india#service",
      "name": "Audit Report Drafting Under SA 700 to 706",
      "description": "Audit report drafting service for statutory audits under SA 700 (Revised), SA 701, SA 705 (Revised), SA 706 (Revised) and SA 570 (Revised) - covering the four opinion types (Unmodified, Qualified, Adverse, Disclaimer), Key Audit Matters selection for listed entities, Going Concern reporting, Emphasis of Matter and Other Matter paragraphs, Section 145 sign-off, and UDIN generation on the ICAI portal. Delivered by Patron Accounting LLP under Section 143 of the Companies Act, 2013 as the reporting expression layer of the statutory audit engagement.",
      "serviceType": "Audit Report Drafting and Statutory Audit Engagement",
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
          "name": "Auditor's report",
          "sameAs": "https://en.wikipedia.org/wiki/Auditor%27s_report"
        },
        {
          "@type": "Thing",
          "name": "Auditing",
          "sameAs": "https://en.wikipedia.org/wiki/Audit"
        },
        {
          "@type": "Thing",
          "name": "Companies Act 2013",
          "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Statutory Audit Engagement Plans (India)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Pvt Ltd Statutory Audit + CARO + IFC (under Rs 50 crore revenue)",
            "price": "175000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/audit-report-types-india"
          },
          {
            "@type": "Offer",
            "name": "Mid-size Pvt Ltd Statutory Audit (Rs 50-100 crore)",
            "price": "450000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/audit-report-types-india"
          },
          {
            "@type": "Offer",
            "name": "Large Unlisted Pvt Ltd (Rs 100-500 crore)",
            "price": "950000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/audit-report-types-india"
          },
          {
            "@type": "Offer",
            "name": "Listed Entity With KAM Disclosure Under SA 701",
            "price": "2500000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/audit-report-types-india"
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
                        Audit Report Types in India Under SA 700 to 706 for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Standards:</span> SA 700, SA 701, SA 705, SA 706 (all Revised) - effective 1 April 2018 onwards</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Opinion Types:</span> Unmodified, Qualified, Adverse, Disclaimer plus KAM, EoM, Going Concern</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Authority:</span> Section 143 and Section 145 of the Companies Act, 2013; ICAI auditing standards</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> All statutory audits under Companies Act; tax audits under Income Tax Act follow same SA 700 series</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20Engagement&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20statutory%20audit%20engagement%20under%20SA%20700%20with%20clean%20unmodified%20opinion%20objective.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20statutory%20audit%20engagement%20under%20SA%20700%20with%20clean%20unmodified%20opinion%20objective." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Audit Report Types India'/>
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
                                <option value="audit-report-types-india" selected>Audit Report Types Reference (this page)</option>
                                <option value="statutory-audit">Statutory Audit Engagement</option>
                                <option value="caro-2020-reporting">CARO 2020 Reporting</option>
                                <option value="internal-financial-controls-audit">Internal Financial Controls Audit</option>
                                <option value="schedule-iii-compliance-companies-act">Schedule III Compliance</option>
                                <option value="tax-audit">Tax Audit (Section 44AB)</option>
                                <option value="appointment-of-auditor">Appointment of Auditor</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The statutory audit was clean and completed well before deadline. No last-minute rush. The audit team applied the SA 705 decision matrix finding-by-finding and surfaced a potential qualified opinion early - giving our finance team time to remediate before sign-off. Clean unmodified opinion under SA 700 with UDIN generated on the ICAI portal.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Managing Director</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trading Firm, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our trademark was filed and registered within the timeline Patron promised. No surprises. Their audit engagement on our Pvt Ltd entity ran on a tight 5-week timeline with clean unmodified opinion. The KAM voluntary disclosure on revenue recognition was a useful proactive step ahead of our IPO discussions.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FB</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Founder</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">D2C Brand, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's KAM selection memo per SA 701 was the most rigorous I have seen from a mid-tier firm. Three-step framework: matters communicated with TCWG, significant attention areas, most-significant-in-current-year. Four KAMs disclosed - revenue, ECL provisioning, deferred tax recoverability, going-concern factors. Equity research analysts engaged constructively.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Audit Committee Chair</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Listed Mid-Cap, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We faced a potential qualified opinion on Section 17(5)(c) ITC tracking - the audit team identified the issue at week 7 and worked with us on additional disclosure under Ind AS rather than imposing the qualification. Modification avoided through SA 260 pre-sign-off TCWG communication. Unmodified opinion delivered with Emphasis of Matter paragraph drawing attention to the disclosure.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Listed Manufacturing, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's SA 600 component-auditor coordination for our 7-component group audit was textbook. Component auditor independence verified; scope and materiality communicated; findings aggregated for principal auditor opinion. Single UDIN for the consolidated opinion. AOC-4 filed within 30 days of AGM with complete package.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GA</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Group Auditor Coordinator</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Multi-State Group, Gurugram</div>
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
                    <p>Free initial consultation on opinion-type risk assessment - in-person at any Patron office, by phone or video.</p>
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
            <a href="#what-section" class="toc-btn">What Are Audit Reports</a>
            <a href="#who-section" class="toc-btn">Who Should Reference</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#procedure-section" class="toc-btn">6-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documentation</a>
            <a href="#challenges-section" class="toc-btn">4 Opinion Types</a>
            <a href="#fees-section" class="toc-btn">Engagement Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">DIY/Big-4/Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Audit Report Types in India - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Audit Report Types India Services at a Glance</strong></p>
                    <p>Audit reports in India fall into two categories - unmodified opinion (clean report under SA 700) and modified opinion (under SA 705). A modified opinion is one of three types - Qualified (material BUT NOT pervasive), Adverse (material AND pervasive misstatement), or Disclaimer (material AND pervasive inability to obtain audit evidence). Beyond the opinion, the audit report includes Key Audit Matters under SA 701 (mandatory for listed entities), Emphasis of Matter and Other Matter paragraphs under SA 706, and Going Concern reporting under SA 570. The audit report must be signed by the appointed auditor under Section 145 of the Companies Act, 2013 with a Unique Document Identification Number (UDIN) generated on the ICAI portal.</p>
                </div>
                <p>The audit report is the most concentrated piece of financial-system information available to external users - investors, lenders, regulators, tax authorities, and counter-parties. A single page expresses a reasoned professional opinion on whether the financial statements give a true and fair view; everything else in the audit file supports this opinion. The revised SA 700 series (effective 1 April 2018) substantially expanded the audit report - moving from one page of opinion to a multi-section document with Key Audit Matters, expanded auditor responsibilities, and explicit going-concern reporting.</p>
                <div class="table-responsive-wrapper" style="margin-top:24px;margin-bottom:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory Standards</td><td>SA 700 (Revised) - Forming an Opinion; SA 701 - Key Audit Matters; SA 705 (Revised) - Modifications; SA 706 (Revised) - Emphasis of Matter; SA 570 (Revised) - Going Concern</td></tr>
                        <tr><td>Effective Date</td><td>Audits of financial statements for periods beginning on or after 1 April 2018</td></tr>
                        <tr><td>Number of Opinion Types</td><td>Four - Unmodified (SA 700) plus three modified types under SA 705 - Qualified, Adverse, Disclaimer</td></tr>
                        <tr><td>Decision Matrix Drivers</td><td>(a) Nature of matter - misstatement (auditor has evidence) vs inability to obtain SAAE; (b) Pervasiveness - material but NOT pervasive vs material AND pervasive</td></tr>
                        <tr><td>KAM Applicability</td><td>Mandatory for listed entity audits; optional for unlisted; prohibited where auditor disclaims opinion (unless law requires)</td></tr>
                        <tr><td>Signing Authority</td><td>Section 145 Companies Act - auditor appointed under Section 139; UDIN generated on ICAI portal</td></tr>
                        <tr><td>Penalty for Misreporting</td><td>Section 147 Companies Act - auditor Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh for fraudulent reporting)</td></tr>
                    </tbody>
                </table>
                </div>
                <p>The result is that today's audit report carries far more information per page than the pre-2018 format, and reading it properly requires familiarity with the layered framework. Patron treats audit-report drafting as the culmination of the audit engagement - the opinion type and KAM selection drive client communication, follow-on engagements, and lender-investor positioning.</p>
                <p>The audit report sits within the Section 143 Companies Act reporting package - main report under SA 700/705 with KAM (SA 701) and Going Concern (SA 570) sections, Annexure A CARO 2020 (Section 143(11)) with 21 clauses, and Annexure B IFC (Section 143(3)(i)) - all signed under one UDIN by the auditor appointed in ADT-1 under Section 139. Reading an audit report properly requires understanding seven layers: opinion type, basis paragraph, KAMs, going concern, emphasis/other matter, CARO Annexure, and IFC Annexure - each of which can carry independent qualifications.</p>
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
                <h2 class="section-title">What Are Audit Report Types in India?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Audit report types</strong> are the classifications of the auditor's opinion under Indian Standards on Auditing (SA 700 to SA 706 issued by ICAI) and Section 143 of the Companies Act, 2013. There are <strong>four opinion types</strong> - Unmodified (clean) under SA 700, and three Modified opinions under SA 705: Qualified (material BUT NOT pervasive), Adverse (material AND pervasive misstatement), and Disclaimer (material AND pervasive inability to obtain audit evidence).</p>
<p>Each audit report includes specific mandatory sections per the revised SA 700: <strong>Opinion paragraph, Basis for Opinion paragraph, Key Audit Matters section</strong> (for listed entities under SA 701; optional for unlisted), Management Responsibility, Auditor's Responsibility (significantly expanded in the revised format), <strong>Report on Other Legal and Regulatory Requirements</strong> (covering Section 143(3) and Section 143(11) CARO and Section 143(3)(i) IFC), Signature with UDIN, Date, and Place.</p>
<p>Where a modified opinion is expressed, the Basis paragraph is renamed - <strong>Basis for Qualified Opinion, Basis for Adverse Opinion, or Basis for Disclaimer of Opinion.</strong> The audit report is functionally the bridge between the audit work performed (governed by SA 200 to SA 620) and the financial statement users.</p>
<p>A clean unmodified opinion gives users reasonable assurance that the financial statements give a true and fair view; a modified opinion (qualified, adverse, or disclaimer) signals specific concerns of varying severity. <strong>KAM reporting</strong> signals where the auditor concentrated significant judgment; <strong>Going Concern reporting</strong> signals material uncertainty; <strong>Emphasis of Matter</strong> signals important disclosures users should focus on.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Audit Report Types India:</strong></p>
                    <p><strong>Unmodified Opinion (SA 700):</strong> The auditor concludes that the financial statements give a true and fair view in accordance with the applicable financial reporting framework (AS or Ind AS). This is the clean report - no qualification, adverse remark, or disclaimer.</p>
<p><strong>Qualified Opinion (SA 705):</strong> The auditor concludes that either (a) the financial statements are materially misstated but the misstatement is NOT pervasive, OR (b) the auditor was unable to obtain Sufficient Appropriate Audit Evidence on a matter that is material but NOT pervasive. Expressed using 'except for' language.</p>
<p><strong>Adverse Opinion (SA 705):</strong> The auditor concludes that the financial statements are materially misstated AND the misstatement is pervasive - i.e. so significant that the financial statements as a whole do not give a true and fair view. The most severe form of modification with audit evidence in hand.</p>
<p><strong>Disclaimer of Opinion (SA 705):</strong> The auditor concludes that he or she was unable to obtain Sufficient Appropriate Audit Evidence on a matter that is material AND pervasive - so significant that the auditor cannot form an opinion on the financial statements as a whole. Used in extremely rare circumstances of multiple uncertainties.</p>
<p><strong>Key Audit Matters (SA 701):</strong> Matters that, in the auditor's professional judgment, were of most significance in the audit of the financial statements for the current period. Selected from matters communicated with Those Charged with Governance under SA 260. Mandatory for listed entity audits.</p>
<p><strong>Emphasis of Matter (SA 706):</strong> A paragraph in the auditor's report that refers to a matter appropriately presented or disclosed in the financial statements that is of such importance that it is fundamental to users' understanding. Does NOT modify the opinion.</p>
<p><strong>Material Uncertainty Related to Going Concern (SA 570):</strong> Where events or conditions exist that cast significant doubt on the entity's ability to continue as a going concern, the auditor includes a separate section in the report. Does NOT modify the opinion if disclosure is adequate.</p>
<p><strong>UDIN:</strong> Unique Document Identification Number generated on the ICAI portal at sign-off; mandatory for all audit reports, certifications, and attestations under ICAI rules.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Audit Report Types India</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>SA 700-706</span>
                        <strong>Audit Opinion Authority</strong>
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
            <h2 class="section-title">Who Should Reference This Authority Page?</h2>
            <div class="content-text">
                
                <p>This pillar page on audit report types in India is the authority reference for the following readers:</p>
<ul>
    <li><strong>Chartered Accountants and articled assistants</strong> studying SA 700 to SA 706 framework for opinion-type selection and report drafting</li>
    <li><strong>CFOs and finance leaders</strong> assessing draft audit-report wording and the implications of modified opinions on lenders and investors</li>
    <li><strong>Audit committees and Boards of Directors</strong> reviewing audit findings communicated under SA 260 before audit-report sign-off</li>
    <li><strong>M and A and PE investors</strong> reading target company audit reports during diligence - particularly KAM disclosures for listed targets</li>
    <li><strong>Lenders and bankers</strong> during credit diligence - modified opinions and going-concern flags are covenant triggers</li>
    <li><strong>Founders of listed and pre-IPO entities</strong> preparing for first audited reporting cycle with KAM disclosure requirements</li>
    <li><strong>Compliance teams of listed companies</strong> tracking KAM consistency year-on-year as an audit-attention concentration signal</li>
    <li>Anyone needing the <strong>SA 705 Material vs Pervasive decision matrix</strong> applied finding-by-finding to drive opinion-type selection</li>
    <li>Anyone seeking the <strong>seven-layer audit report reading framework</strong> (opinion, basis, KAM, going concern, EoM, CARO, IFC)</li>
</ul>
<h3 style="margin-top:24px;">Statutory Snapshot for Audit Reports</h3>
<ul>
    <li><strong>SA 700/701/705/706 (all Revised):</strong> Effective for audits of financial statements for periods beginning on or after 1 April 2018</li>
    <li><strong>Section 143 Companies Act 2013:</strong> Auditor's powers, duties and audit report content - ten-clause reporting under Section 143(3)</li>
    <li><strong>Section 145 Companies Act 2013:</strong> Auditor to sign audit reports - signing by anyone other than appointed auditor is professional misconduct</li>
    <li><strong>Section 147 Companies Act 2013:</strong> Penalty Rs 25,000 to Rs 5,00,000 on auditor (Rs 1 lakh to Rs 25 lakh for fraudulent reporting)</li>
    <li><strong>UDIN:</strong> Mandatory on every audit report; generated on ICAI portal at sign-off</li>
    <li><strong>Form AOC-4 Filing:</strong> Complete audit report package (main report + Annexure A CARO + Annexure B IFC) filed with MCA21 V3 within 30 days of AGM</li>
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
            <h2 class="section-title">Patron's Audit Report Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory Audit With Clean Unmodified Opinion Objective</td><td>Patron's core engagement - Section 143 statutory audit conducted under all applicable Standards on Auditing with the objective of expressing an unmodified opinion under SA 700. Where modification is unavoidable, Patron drafts the modified opinion with the precise wording prescribed by SA 705 and the illustrative formats in the SA appendices.</td></tr>
<tr><td>Modified Opinion Drafting and Pre-Sign-Off TCWG Discussion</td><td>Where audit findings drive a modification, Patron drafts the Basis for Qualified / Adverse / Disclaimer of Opinion paragraph with the specific cause, financial-statement-level effect (where quantifiable), and management response. The auditor's draft is shared with management and Those Charged with Governance under SA 260 before sign-off; remediation opportunities are surfaced where the modification can be avoided.</td></tr>
<tr><td>Key Audit Matters (KAM) Selection and Drafting Under SA 701</td><td>For listed and large unlisted entities, Patron selects KAMs from matters communicated with TCWG under SA 260 - typically two to four KAMs for a mid-size listed entity. KAM selection criteria: areas of higher assessed risk under SA 315, significant auditor judgments on accounting estimates, effects of significant events. KAM drafting follows the SA 701 four-element format - description, why considered, audit procedures performed, outcome.</td></tr>
<tr><td>Going Concern Reporting Under SA 570 (Revised)</td><td>Where management's going-concern assessment surfaces material uncertainty - recurring losses, negative working capital, debt covenant breach, large litigation contingencies - Patron evaluates management's disclosures and includes a separate Material Uncertainty Related to Going Concern section. The opinion remains unmodified if disclosure is adequate; modified to adverse or disclaimer if disclosure is inadequate or going-concern basis is itself inappropriate.</td></tr>
<tr><td>Emphasis of Matter and Other Matter Paragraphs (SA 706)</td><td>Where the auditor wants to draw attention to a matter properly disclosed in the financial statements (Emphasis of Matter) or to a matter not disclosed but relevant to the audit (Other Matter), the paragraph is added without modifying the opinion. Typical Emphasis of Matter triggers: subsequent events, scheme of arrangement effects, regulatory uncertainty, prior-period correction.</td></tr>
<tr><td>UDIN Generation and Section 145 Sign-Off</td><td>The audit report is signed by the appointed auditor under Section 145 of the Companies Act, 2013 with UDIN generated on the ICAI portal. Section 145 prohibits signing by any person other than the appointed auditor or auditor's partner; Chartered Accountants Act 1949 First Schedule Clause 12 makes signing on behalf of another CA professional misconduct.</td></tr>
<tr><td>Audit Committee and Board Engagement Under SA 260 (Revised)</td><td>Patron communicates audit findings, opinion type, KAMs, and adverse outcomes with Those Charged with Governance per SA 260 before sign-off. For listed entities, this is at the Audit Committee; for unlisted, at the Board of Directors. The TCWG communication is documented in the audit working file.</td></tr>
<tr><td>Annexure A CARO 2020 and Annexure B IFC Coordination</td><td>The complete audit report package: main report under SA 700/705, KAM section, Going Concern section, Annexure A CARO 2020 (21 clauses under Section 143(11)), and Annexure B IFC (Section 143(3)(i)) - all signed under one UDIN. Patron documents opinion carry-through where main report differs from Annexure opinions.</td></tr>
<tr><td>Form AOC-4 Filing With MCA21 V3</td><td>The complete audit report package is filed as an attachment to Form AOC-4 with MCA21 V3 portal within 30 days of the AGM. Delay attracts Rs 100 per day MCA additional fees plus Section 137 penalty.</td></tr>

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
            <h2 class="section-title">Patron's 6-Step Audit Report Drafting Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Audit-report drafting is the culmination of the audit engagement under SA 200 to SA 620. Patron applies the SA 700/705/706/701 framework finding-by-finding - not as a year-end checklist.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Year-End Audit Findings Aggregation (SA 450)</h3>
        <p class="step-description">Patron aggregates all audit findings - misstatements identified during substantive procedures, control deficiencies identified during IFC testing, going-concern uncertainties, CARO 2020 clause-by-clause findings, related-party issues, accounting estimate variances. Each finding is evaluated under SA 450 for materiality and aggregation impact. The findings drive the opinion type selection.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 450 evaluation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cross-finding aggregation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Material vs not analysis</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<rect x="22" y="25" width="20" height="50" rx="2" fill="#F5A623" opacity="0.7"/>
<rect x="50" y="35" width="20" height="40" rx="2" fill="#E8712C" opacity="0.7"/>
<rect x="78" y="20" width="20" height="55" rx="2" fill="#14365F" opacity="0.7"/>
<line x1="15" y1="80" x2="105" y2="80" stroke="#14365F" stroke-width="1.5"/>
                </svg>
            </div>
            <span class="illustration-label">Findings Aggregated</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Opinion Type Determination - Material vs Pervasive Matrix (SA 705)</h3>
        <p class="step-description">Patron applies the SA 705 decision matrix to each material finding: (a) does the auditor have Sufficient Appropriate Audit Evidence on the matter, or is unable to obtain it? (b) is the matter material but NOT pervasive, or material AND pervasive? The 2x2 matrix: misstatement with SAAE -> Qualified if not pervasive, Adverse if pervasive; inability to obtain SAAE -> Qualified if not pervasive, Disclaimer if pervasive.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2x2 SA 705 matrix</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-finding analysis</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aggregation under SA 450</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="40" height="30" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
<text x="40" y="38" font-size="8" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">QUALIFIED</text>
<rect x="62" y="20" width="40" height="30" rx="3" fill="#FFF4E5" stroke="#F5A623" stroke-width="1.5"/>
<text x="82" y="38" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">ADVERSE</text>
<rect x="20" y="52" width="40" height="30" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="40" y="70" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">QUALIFIED</text>
<rect x="62" y="52" width="40" height="30" rx="3" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="1.5"/>
<text x="82" y="70" font-size="8" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">DISCLAIM</text>
                </svg>
            </div>
            <span class="illustration-label">Opinion Type Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Modified Opinion Drafting and TCWG Communication (SA 260)</h3>
        <p class="step-description">Where modification is required, Patron drafts the Basis for Modified Opinion paragraph immediately before the Opinion paragraph - following the SA 705 appendix illustrative format with cause, financial-statement-level effect, and management response. The draft is shared with Those Charged with Governance under SA 260 (Revised) before sign-off - giving management opportunity to remediate where possible.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 705 appendix format</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TCWG pre-sign-off briefing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Remediation window</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="18" y="15" width="70" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="53" y="36" font-size="10" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">MODIFIED</text>
<line x1="28" y1="46" x2="78" y2="46" stroke="#FD6B6D" stroke-width="2.5"/>
<line x1="28" y1="56" x2="72" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
<line x1="28" y1="66" x2="75" y2="66" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
<line x1="28" y1="76" x2="68" y2="76" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
<rect x="92" y="35" width="22" height="30" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="103" y="53" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">TCWG</text>
                </svg>
            </div>
            <span class="illustration-label">Draft + TCWG</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">KAM Selection and Drafting for Listed Entities (SA 701)</h3>
        <p class="step-description">For listed entities, Patron applies the SA 701 three-step selection framework: identify matters communicated with TCWG; evaluate which required significant auditor attention (higher assessed risk under SA 315, significant management judgment on accounting estimates); determine which were of most significance in the current period's audit. Each KAM is drafted in the four-element format - description, why considered, audit procedures performed, outcome.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-step SA 701 framework</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-element KAM format</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-4 KAMs typical</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="50" r="34" fill="none" stroke="#14365F" stroke-width="1.5" stroke-dasharray="4 3"/>
<circle cx="42" cy="38" r="9" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="42" y="42" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">K1</text>
<circle cx="78" cy="38" r="9" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="78" y="42" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">K2</text>
<circle cx="42" cy="62" r="9" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="42" y="66" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">K3</text>
<circle cx="78" cy="62" r="9" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="78" y="66" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">K4</text>
                </svg>
            </div>
            <span class="illustration-label">KAM Memo Locked</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Going Concern, EoM and Other Information (SA 570, 706, 720)</h3>
        <p class="step-description">Patron evaluates going concern under SA 570 (Revised) - reviewing management's twelve-month forward assessment, evaluating events or conditions casting significant doubt, assessing adequacy of disclosure. Material Uncertainty Related to Going Concern triggers a separate report section but does NOT modify the opinion if disclosure is adequate. Emphasis of Matter and Other Matter paragraphs added where users should focus on properly-disclosed or relevant matters. SA 720 review of Board Report and MDA for inconsistencies.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 570 12-month review</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 706 EoM/OM judgment</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 720 MDA review</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 75 L40 60 L60 65 L85 40 L105 30" stroke="#FD6B6D" stroke-width="2.5" fill="none" stroke-linecap="round"/>
<circle cx="15" cy="75" r="3" fill="#FD6B6D"/>
<circle cx="40" cy="60" r="3" fill="#FD6B6D"/>
<circle cx="60" cy="65" r="3" fill="#FD6B6D"/>
<circle cx="85" cy="40" r="3" fill="#FD6B6D"/>
<circle cx="105" cy="30" r="3" fill="#FD6B6D"/>
<rect x="60" y="78" width="50" height="14" rx="3" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="1"/>
<text x="85" y="88" font-size="7" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">SA 570</text>
                </svg>
            </div>
            <span class="illustration-label">Sections Added</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Signing, UDIN and AOC-4 Filing (Section 145)</h3>
        <p class="step-description">The complete audit report package - main report under SA 700/705, KAM section, Going Concern section, Annexure A CARO 2020, Annexure B IFC - is reviewed by the audit partner under SA 220 (Quality Control). The auditor signs under Section 145 of the Companies Act, 2013; UDIN is generated on the ICAI portal covering the entire package; date and place of signing stated. Form AOC-4 filed with MCA21 V3 within 30 days of the AGM.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 220 partner review</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 145 sign-off</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICAI UDIN + AOC-4</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<rect x="28" y="25" width="64" height="40" rx="2" fill="#FFFFFF" stroke="#14365F" stroke-width="0.5"/>
<line x1="32" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="32" y1="42" x2="78" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="32" y1="49" x2="72" y2="49" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<path d="M40 75 Q50 70 60 73 T80 75" stroke="#E8712C" stroke-width="1.8" fill="none"/>
<rect x="32" y="82" width="55" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/>
<text x="60" y="88" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">UDIN GENERATED</text>
                </svg>
            </div>
            <span class="illustration-label">Signed and Filed</span>
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
            <h2 class="section-title">Documentation Required for Audit Report Preparation</h2>
            <div class="content-text">
                
                <p>The audit working file supporting the audit report includes the following mandatory documentation under the SA 200 series quality framework:</p>
<ul>
    <li><strong>Engagement Letter Under SA 210:</strong> Signed engagement letter establishing scope, responsibilities, fees, deliverables, audit timeline</li>
    <li><strong>Section 141 Independence Certificate:</strong> Certificate confirming no disqualification - direct interest, indebtedness, surety, business relationship</li>
    <li><strong>Audit Plan and Risk Assessment Working Paper:</strong> Under SA 315 - business understanding, internal control evaluation, risk assessment, planned audit response</li>
    <li><strong>Materiality Working Paper Under SA 320:</strong> Overall materiality, performance materiality, clearly trivial threshold for the year</li>
    <li><strong>Misstatement Schedule Under SA 450:</strong> Accumulated misstatements by category (factual / judgmental / projected); evaluation against materiality</li>
    <li><strong>Going Concern Assessment Under SA 570:</strong> Management's twelve-month forward assessment; auditor's evaluation; identified events or conditions</li>
    <li><strong>Written Representations Under SA 580:</strong> Management representation letter with all required acknowledgments</li>
    <li><strong>TCWG Communication File Under SA 260:</strong> Audit Committee or Board agenda papers; significant audit findings communicated; minutes of TCWG meetings</li>
    <li><strong>KAM Selection Memo Under SA 701:</strong> List of matters communicated with TCWG; significant auditor attention rationale; KAM selection conclusion</li>
    <li><strong>Subsequent Events Review Under SA 560:</strong> Events between balance sheet date and audit report date; impact on opinion type</li>
    <li><strong>Other Information Review Under SA 720:</strong> Board Report and Management Discussion Analysis read for inconsistencies with audited financial statements</li>
    <li><strong>Component Auditor Communication Under SA 600:</strong> For groups - component auditor independence, scope, materiality, communicated findings</li>
    <li><strong>Audit Quality Review Documentation Under SA 220:</strong> Engagement partner review; engagement quality control review where applicable</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The Four Audit Opinion Types - Practitioner Walkthrough</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Unmodified Opinion (SA 700)</td><td>Auditor concludes that financial statements give a true and fair view in accordance with the applicable financial reporting framework (AS or Ind AS). No qualification, adverse remark, or disclaimer.</td><td>Section title: 'Opinion'. Wording: 'In our opinion and to the best of our information and according to the explanations given to us, the aforesaid financial statements give the information required by the Companies Act, 2013 in the manner so required and give a true and fair view.' Diligence read: Baseline expectation - clean report.</td></tr>
<tr><td>Qualified Opinion (SA 705)</td><td>(a) Financial statements materially misstated but the misstatement is NOT pervasive (auditor has SAAE), OR (b) Auditor unable to obtain SAAE on a matter that is material but NOT pervasive. Common examples: inventory misstated at cost not lower of cost or NRV; specific receivable bad-debt provision inadequate; specific accounting estimate departure from Ind AS.</td><td>Section title: 'Qualified Opinion'. Wording: 'In our opinion, except for the effects of the matter described in the Basis for Qualified Opinion section of our report, the aforesaid financial statements give a true and fair view.' Diligence read: Investigate the specific matter in the Basis paragraph; quantify and verify the effect; assess whether matter is one-off or systemic.</td></tr>
<tr><td>Adverse Opinion (SA 705)</td><td>Financial statements materially misstated AND the misstatement is pervasive (auditor has SAAE) - the misstatement is so significant that the financial statements as a whole do not give a true and fair view. Common examples: going concern basis used when liquidation basis appropriate; massive non-disclosure of liabilities; non-consolidation of material subsidiary; fundamentally wrong revenue recognition method.</td><td>Section title: 'Adverse Opinion'. Wording: 'In our opinion, because of the significance of the matter described in the Basis for Adverse Opinion section of our report, the aforesaid financial statements do not give a true and fair view.' Diligence read: Deal-breaker in most cases; investigation must be exhaustive before continuing diligence; pricing implications severe.</td></tr>
<tr><td>Disclaimer of Opinion (SA 705)</td><td>Auditor unable to obtain SAAE on a matter that is material AND pervasive - inability so significant that auditor cannot form an opinion on the financial statements as a whole. Used in extremely rare circumstances. Common examples: management imposes scope limitation auditor cannot work around; multiple unresolved uncertainties (going concern + regulatory + litigation) interact unmanageably; auditor unable to obtain critical opening balances.</td><td>Section title: 'Disclaimer of Opinion'. Wording: 'We do not express an opinion on the aforesaid financial statements. Because of the significance of the matter described in the Basis for Disclaimer of Opinion section of our report, we have not been able to obtain sufficient appropriate audit evidence to provide a basis for an audit opinion on these financial statements.' Diligence read: Highest concern signal; transaction typically does not proceed without forensic engagement.</td></tr>

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
            <h2 class="section-title">Patron Audit Engagement - Scope and Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Pvt Ltd Statutory Audit + CARO + IFC (under Rs 50 crore revenue)</td><td>Rs 1,75,000 to Rs 4,00,000 (Exl GST and Govt. Charges) - Timeline 5 to 6 weeks. Audit report drafting is included as the natural conclusion of the engagement; not separately billable.</td></tr>
<tr><td>Mid-size Pvt Ltd Statutory Audit (Rs 50 to 100 crore revenue)</td><td>Rs 4,50,000 to Rs 9,00,000 (Exl GST and Govt. Charges) - Timeline 6 to 7 weeks - Full SA 700/705 framework + KAM voluntary disclosure where applicable</td></tr>
<tr><td>Large Unlisted Pvt Ltd (Rs 100 to 500 crore revenue)</td><td>Rs 9,50,000 to Rs 22,00,000 (Exl GST and Govt. Charges) - Timeline 7 to 10 weeks - SA 220 quality review at partner level</td></tr>
<tr><td>Listed Entity With KAM Disclosure Under SA 701</td><td>Starting from Rs 25,00,000 (Exl GST and Govt. Charges) - Timeline 10 to 14 weeks - Mandatory KAM under SA 701; SA 260 Audit Committee briefings; SEBI compliance integration</td></tr>
<tr><td>Group Audit With Component Auditors Under SA 600</td><td>Add Rs 75,000 to Rs 3,00,000 per component (Exl GST and Govt. Charges) - Same audit window - Principal auditor coordination of component work</td></tr>
<tr><td>Pre-IPO Transition Audit (3-Year Restated Under Ind AS)</td><td>Starting from Rs 35,00,000 (Exl GST and Govt. Charges) - Timeline 12 to 16 weeks - 3-year restatement, KAM rollout, Ind AS transition</td></tr>
<tr><td>Special Purpose Framework Audit (SA 800 / SA 805)</td><td>Rs 75,000 to Rs 5,00,000 (Exl GST and Govt. Charges) - Timeline 3 to 8 weeks depending on scope - Single financial statements, agreed-upon procedures</td></tr>
<tr><td>Initial Audit Consultation (30-min on opinion-type risk assessment)</td><td>Free (no obligation)</td></tr>
<tr><td>UDIN Generation on ICAI Portal</td><td>No separate fee - bundled with audit-report sign-off</td></tr>
<tr><td>Form AOC-4 Filing With MCA21 V3</td><td>Bundled with audit engagement - separate MCA filing fees applicable per Companies (Registration Offices and Fees) Rules</td></tr>
<tr><td>Section 147 Penalty for Auditor Misreporting</td><td>Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh for fraudulent reporting) - statutory exposure for any auditor on the engagement</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Audit Report Types India consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20statutory%20audit%20quote%20under%20SA%20700%20framework." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Audit Report Preparation Timeline Within the Audit Cycle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Engagement (Week 1)</td><td>SA 210 engagement letter; Section 141 independence; opinion-type expectation discussion with management</td></tr>
<tr><td>Interim Audit (Weeks 2 to 4)</td><td>Risk assessment under SA 315; substantive testing of significant accounts; KAM candidate identification for listed entities</td></tr>
<tr><td>Year-End Audit (Weeks 4 to 7)</td><td>Year-end substantive procedures; CARO 2020 and IFC testing; subsequent events review under SA 560</td></tr>
<tr><td>Going Concern and KAM Evaluation (Week 7)</td><td>SA 570 going-concern assessment; SA 701 KAM selection memo</td></tr>
<tr><td>Misstatement Aggregation and Opinion Determination (Week 8)</td><td>SA 450 misstatement evaluation; SA 705 modification decision matrix; TCWG communication under SA 260</td></tr>
<tr><td>Draft Audit Report (Weeks 8 to 9)</td><td>Main report under SA 700/705; KAM section; Going Concern section; Annexure A CARO; Annexure B IFC</td></tr>
<tr><td>Partner Review and UDIN (Week 9)</td><td>SA 220 quality review; UDIN generation on ICAI portal</td></tr>
<tr><td>Board Approval and AOC-4 Filing (Within 30 days of AGM)</td><td>Form AOC-4 with complete audit report package filed with MCA21 V3</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Urgent deadline:</strong> Form AOC-4 with complete audit report package must be filed with MCA21 V3 within 30 days of the AGM (typically by 30 October for September AGMs). Delay attracts Rs 100 per day MCA additional fees plus Section 137 penalty. A modified opinion (qualified, adverse, or disclaimer) carries compounding consequences - lender covenant trigger, investor due-diligence red flag, regulatory inquiry trigger for listed entities, NFRA monitoring escalation. <strong>Engage Patron early in the audit cycle for clean unmodified opinion objective with KAM selection memo where applicable.</strong></p>

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
            <h2 class="section-title">Why Patron's Audit Report Approach Differs</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3>Clean Unmodified Opinion Objective</h3>
        <p>Patron's core engagement targets clean unmodified opinion under SA 700. Where modification is unavoidable, the precise wording prescribed by SA 705 and illustrative formats in the SA appendices is applied.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg></div>
        <h3>SA 705 Decision Matrix Applied Finding-by-Finding</h3>
        <p>Material-vs-pervasive 2x2 matrix applied to each material finding with explicit aggregation analysis under SA 450 where individually-not-pervasive findings might collectively become pervasive.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
        <h3>KAM Selection Memo Per Listed Entity</h3>
        <p>Three-step SA 701 framework documented in audit working file - matters communicated with TCWG, significant auditor attention areas, most-significant-in-current-year selection. Typically 2-4 KAMs per listed entity.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3>Modification Avoidance Through TCWG Communication</h3>
        <p>Pre-sign-off TCWG briefing under SA 260 (Revised) - where management can remediate (additional disclosure, correction of misstatement, additional audit evidence procurement), the modification is avoided rather than imposed.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3>Going Concern Evaluation Under SA 570</h3>
        <p>Twelve-month forward assessment; events or conditions casting significant doubt; adequacy of disclosure evaluation. Separate Material Uncertainty Related to Going Concern section where required - opinion remains unmodified if disclosure adequate.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3>Section 145 Sign-Off Plus ICAI UDIN</h3>
        <p>Audit report signed by appointed auditor (per ADT-1 filing) under Section 145 Companies Act; UDIN generated on ICAI portal covering the entire package. No signing by non-partner CA per First Schedule Clause 12.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3>Audit Trilogy Integration</h3>
        <p>Audit report (this page) integrates with CARO 2020 reporting (Annexure A under Section 143(11)), IFC audit (Annexure B under Section 143(3)(i)), and Schedule III financial statements - all delivered by the same Patron audit team.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <h3>Group Audit Coordination Under SA 600</h3>
        <p>Component auditor independence and work coordination under SA 600 for groups. Principal auditor responsibility for the consolidated opinion with documented component-auditor communication.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted Audit Practice Across India</h2>
            <div class="content-text">
                
                <div style="background:var(--blue-lighter);padding:24px;border-radius:12px;margin-bottom:24px;">
    <p style="font-weight:700;color:var(--blue);font-size:18px;margin-bottom:8px;">10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
</div>
<h3 style="margin-top:24px;">Practitioner Authority Signal</h3>
<p><em>"The statutory audit was clean and completed well before deadline. No last-minute rush." - MD, Trading Firm, Mumbai (Google Review)</em></p>
<p><em>"Our trademark was filed and registered within the timeline Patron promised. No surprises." - Founder, D2C Brand, Bangalore (Google Review)</em></p>
<h3 style="margin-top:24px;">Client Coverage</h3>
<p>Trusted by <strong>Hyundai, Asian Paints, Bridgestone and a growing roster of Pvt Ltd companies, listed entities, and group audits</strong> across <strong>manufacturing, financial services, real estate, e-commerce and SaaS.</strong> Patron's audit practice spans clean Pvt Ltd opinions, listed-entity KAM disclosures under SA 701, group audits with component-auditor coordination under SA 600, and pre-IPO transition audits with three-year Ind AS restatement.</p>
<h3 style="margin-top:24px;">4-Office Signal</h3>
<p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron services audit engagements from single Pvt Ltd entities to listed groups with multi-component component-auditor coordination under SA 600.</strong> Peer-reviewed ICAI workpapers; SA 220 quality control at partner level; SA 260 TCWG communication discipline.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Big-Four vs Patron-Led Audit Reports</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory authority to sign</td><td>Section 141 disqualification - cannot sign</td><td>Qualified ICAI member firm</td><td>Qualified ICAI member firm</td></tr>
<tr><td>SA 705 modification decision matrix</td><td>Not signable</td><td>Centralised technical team</td><td>Finding-by-finding analysis</td></tr>
<tr><td>KAM selection for listed entities</td><td>N/A</td><td>Standard procedure</td><td>Three-step SA 701 memo per entity</td></tr>
<tr><td>Going concern SA 570 evaluation</td><td>N/A</td><td>Standard procedure</td><td>Twelve-month forward review</td></tr>
<tr><td>TCWG communication pre-sign-off</td><td>N/A</td><td>Audit Committee briefing</td><td>Audit Committee or Board briefing</td></tr>
<tr><td>Modification avoidance through remediation</td><td>N/A</td><td>Standard procedure</td><td>Standard procedure</td></tr>
<tr><td>Cost (mid-size Rs 100 crore listed entity)</td><td>Apparent zero - unsignable</td><td>Rs 28 to 50 lakh</td><td>Rs 18 to 30 lakh</td></tr>
<tr><td>Partner attention</td><td>N/A</td><td>Engagement partner with team layers</td><td>Senior partner direct review</td></tr>

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
                
                <p>This audit report types authority page sits within the Patron audit cluster. Sister authority pages cover adjacent reporting requirements under Section 143 of the Companies Act 2013:</p>
<ul>
    <li><strong><a href="/statutory-audit">Statutory Audit in India (Parent)</a>:</strong> The complete Section 143 statutory audit engagement - this audit report types page is the reporting expression layer within that engagement.</li>
    <li><strong><a href="/caro-2020-reporting">CARO 2020 Reporting (Annexure A)</a>:</strong> Section 143(11) - 21-clause Annexure A to the audit report covering company compliance with specific operational and financial matters.</li>
    <li><strong><a href="/internal-financial-controls-audit">Internal Financial Controls Audit (Annexure B)</a>:</strong> Section 143(3)(i) - Annexure B to the audit report with separate opinion on IFC adequacy and operating effectiveness under COSO 2013 framework.</li>
    <li><strong><a href="/schedule-iii-compliance-companies-act">Schedule III Compliance</a>:</strong> Section 129 - form of financial statements being audited; balance sheet and statement of profit and loss structure under Division I, II, or III as applicable.</li>
    <li><strong><a href="/internal-audit">Internal Audit Services (Section 138)</a>:</strong> Separate from statutory audit; statutory auditor considers internal audit reports per CARO 3(xiv).</li>
    <li><strong><a href="/tax-audit">Tax Audit (Section 44AB)</a>:</strong> Form 3CB tax audit report follows the same SA 700 series framework per ICAI clarification in SA 800.</li>
    <li><strong><a href="/private-limited-company-compliance">Private Limited Company Compliance</a>:</strong> AOC-4 filing with complete audit report package; annual MCA compliance calendar.</li>
    <li><strong><a href="/appointment-of-auditor">Appointment of Auditor</a>:</strong> ADT-1 filing under Section 139; first auditor by Board within 30 days; AGM appointment for 5 (individual) or 10 (firm) years.</li>
    <li><strong><a href="/change-of-auditor">Change of Auditor</a>:</strong> Section 140 resignation; predecessor auditor's exit findings under CARO 3(xviii).</li>
    <li><strong><a href="/due-diligence">Due Diligence</a>:</strong> Reading audit reports as buyer, investor or lender - the seven-layer audit-report reading framework.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Material vs Pervasive Decision Matrix and Legal Framework</h2>
            <div class="content-text">
                
                <p>Audit opinion type selection under SA 705 (Revised) is driven by a 2x2 decision matrix combining two binary judgments: (1) does the auditor have Sufficient Appropriate Audit Evidence (SAAE) on the matter, or is the auditor unable to obtain such evidence? (2) is the matter material but NOT pervasive, or material AND pervasive? Primary regulator: <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a>. Filing portal: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 V3</a>. Independent regulator: <a href="https://www.nfra.gov.in" target="_blank" rel="noopener">NFRA (National Financial Reporting Authority)</a>.</p>
<h3 style="margin-top:24px;">The SA 705 Material vs Pervasive Decision Matrix</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Situation</th><th>Material BUT NOT Pervasive</th><th>Material AND Pervasive</th></tr></thead>
    <tbody>
        <tr><td>Financial statements materially misstated AND auditor has Sufficient Appropriate Audit Evidence</td><td><strong>QUALIFIED OPINION</strong></td><td><strong>ADVERSE OPINION</strong></td></tr>
        <tr><td>Inability to obtain Sufficient Appropriate Audit Evidence to conclude</td><td><strong>QUALIFIED OPINION</strong></td><td><strong>DISCLAIMER OF OPINION</strong></td></tr>
    </tbody>
</table>
</div>
<p><strong>Pervasive (SA 705 definition):</strong> Effects that, in the auditor's judgment, (a) are not confined to specific elements, accounts or items of the financial statements; (b) if so confined, represent or could represent a substantial proportion of the financial statements; or (c) in relation to disclosures, are fundamental to users' understanding of the financial statements.</p>
<h3 style="margin-top:24px;">KAM Applicability Decision Matrix (SA 701)</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Entity Type</th><th>KAM Mandatory?</th><th>Notes</th></tr></thead>
    <tbody>
        <tr><td>Listed entity (NSE / BSE / other recognised exchange)</td><td>Yes</td><td>Mandatory under SA 701; minimum one KAM unless extreme rare case</td></tr>
        <tr><td>Unlisted public company (Board has not opted for KAM)</td><td>Optional</td><td>Auditor may include KAM voluntarily; Board-direction-based</td></tr>
        <tr><td>Pvt Ltd company (Board has not opted for KAM)</td><td>Optional</td><td>Same as unlisted public; auditor judgment if reporting expected to add value</td></tr>
        <tr><td>Audit with disclaimer of opinion</td><td>Prohibited (unless law)</td><td>KAM communication suggests credibility - inconsistent with disclaimer</td></tr>
        <tr><td>Audit with adverse opinion</td><td>Permitted but limited</td><td>KAM may be included on matters other than that giving rise to adverse opinion</td></tr>
        <tr><td>Special purpose framework (SA 800)</td><td>Optional</td><td>Auditor judgment; often omitted for non-public audits</td></tr>
    </tbody>
</table>
</div>
<h3 style="margin-top:24px;">Mandatory Sections in Every Audit Report (SA 700 Revised)</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Section</th><th>Content</th></tr></thead>
    <tbody>
        <tr><td>Title</td><td>'Independent Auditor's Report' - to distinguish from internal reports</td></tr>
        <tr><td>Opinion Paragraph</td><td>First paragraph (location moved up in revised format) - 'Opinion' or 'Qualified Opinion' / 'Adverse Opinion' / 'Disclaimer of Opinion'</td></tr>
        <tr><td>Basis for Opinion</td><td>Identifies framework (Companies Act + ICAI auditing standards) and independence under Section 141 and ICAI Code of Ethics</td></tr>
        <tr><td>Material Uncertainty Related to Going Concern</td><td>Separate section under SA 570 where applicable - does NOT modify opinion if disclosure adequate</td></tr>
        <tr><td>Key Audit Matters</td><td>Mandatory for listed entities under SA 701; optional disclosure for unlisted; section omitted with disclaimer (unless law requires)</td></tr>
        <tr><td>Other Information</td><td>Auditor's responsibility for Board Report and Management Discussion Analysis per SA 720</td></tr>
        <tr><td>Management Responsibility</td><td>Management's responsibility for preparation of financial statements per Section 134(5)</td></tr>
        <tr><td>Auditor's Responsibility</td><td>Significantly expanded in revised format - reasonable assurance, professional skepticism, going concern evaluation, TCWG communication</td></tr>
        <tr><td>Report on Other Legal and Regulatory Requirements</td><td>Section 143(3) ten-clause reporting; CARO 2020 annexure cross-reference; IFC annexure cross-reference</td></tr>
        <tr><td>Signature, UDIN, Date, Place</td><td>Signed by appointed auditor per Section 145; UDIN generated on ICAI portal</td></tr>
    </tbody>
</table>
</div>
<h3 style="margin-top:24px;">Statutory Provisions and Standards on Auditing</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>What It Governs</th></tr></thead>
    <tbody>
        <tr><td>Section 143 Companies Act 2013</td><td>Powers and duties of auditors; audit report content; Section 143(3) ten-clause reporting; Section 143(11) CARO; Section 143(3)(i) IFC</td></tr>
        <tr><td>Section 145 Companies Act 2013</td><td>Auditor to sign audit reports - appointed auditor only; no signing on behalf</td></tr>
        <tr><td>Section 147 Companies Act 2013</td><td>Penalty Rs 25,000 to Rs 5,00,000 on auditor (Rs 1 lakh to Rs 25 lakh fraudulent); officer in default Rs 10,000 to Rs 1,00,000</td></tr>
        <tr><td>Section 141 Companies Act 2013</td><td>Auditor eligibility, qualifications, disqualifications - independence requirements</td></tr>
        <tr><td>Section 139 Companies Act 2013</td><td>Appointment of auditor - first auditor by Board within 30 days; AGM appointment for 5 (individual) or 10 (firm) years</td></tr>
        <tr><td>Section 140 Companies Act 2013</td><td>Removal, resignation, Section 140(2) statement of outgoing auditor</td></tr>
        <tr><td>SA 700 (Revised)</td><td>Forming an Opinion and Reporting on Financial Statements - effective for audits of FS for periods beginning on or after 1 April 2018</td></tr>
        <tr><td>SA 701</td><td>Communicating Key Audit Matters in the Independent Auditor's Report - effective from 1 April 2018; four-element format</td></tr>
        <tr><td>SA 705 (Revised)</td><td>Modifications to the Opinion in the Independent Auditor's Report - three modified types; material vs pervasive matrix</td></tr>
        <tr><td>SA 706 (Revised)</td><td>Emphasis of Matter Paragraphs and Other Matter Paragraphs in the Independent Auditor's Report - do NOT modify opinion</td></tr>
        <tr><td>SA 570 (Revised)</td><td>Going Concern - Material Uncertainty Related to Going Concern section</td></tr>
        <tr><td>SA 260 (Revised)</td><td>Communication with Those Charged with Governance - pre-sign-off; KAM source</td></tr>
        <tr><td>SA 720 (Revised)</td><td>Auditor's Responsibilities Relating to Other Information - Board Report and MDA</td></tr>
        <tr><td>SA 600</td><td>Using the Work of Another Auditor - group audits; component auditor coordination</td></tr>
        <tr><td>SA 800 / SA 805</td><td>Special purpose framework audits and audits of single financial statements and specific elements</td></tr>
        <tr><td>Chartered Accountants Act 1949 First Schedule Clause 12</td><td>Professional misconduct - allowing a person not being a member or non-partner to sign on behalf</td></tr>
        <tr><td>UDIN (Unique Document Identification Number)</td><td>Generated on ICAI portal at sign-off; mandatory for all audit reports, certifications, attestations</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Audit Report Types in India</h2>
                    <p class="faq-expanded__lead">Practitioner-level Q&A on SA 700-706 framework, KAM, going concern, modified opinions, Section 145 signing, and reading audit reports as an investor or lender.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Audit Report Types in India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What are the types of audit reports?</h3>
                        <div class="faq-expanded__a"><p>Audit reports in India fall into two categories - unmodified opinion (clean report under SA 700) and modified opinion (under SA 705). A modified opinion is one of three types - Qualified (material BUT NOT pervasive misstatement OR material BUT NOT pervasive inability to obtain audit evidence), Adverse (material AND pervasive misstatement), or Disclaimer (material AND pervasive inability to obtain audit evidence). Beyond the opinion, audit reports include Key Audit Matters under SA 701 (mandatory for listed entities), Emphasis of Matter and Other Matter paragraphs under SA 706, and Going Concern reporting under SA 570 - none of which modify the opinion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between qualified and unqualified audit opinion?</h3>
                        <div class="faq-expanded__a"><p>An unqualified opinion - more accurately called unmodified opinion under the revised SA 700 - is the clean audit report. The auditor concludes that the financial statements give a true and fair view in accordance with the applicable financial reporting framework (AS or Ind AS). A qualified opinion under SA 705 is issued when (a) the financial statements are materially misstated but the misstatement is NOT pervasive, OR (b) the auditor is unable to obtain Sufficient Appropriate Audit Evidence on a matter that is material but NOT pervasive. A qualified opinion uses 'except for' language - the financial statements give a true and fair view except for the matter described in the Basis for Qualified Opinion paragraph.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is a modified audit opinion?</h3>
                        <div class="faq-expanded__a"><p>A modified audit opinion is any opinion other than unmodified - issued under SA 705. There are three types of modified opinions - Qualified, Adverse, and Disclaimer. The type is determined by two factors per the SA 705 decision matrix - (a) whether the matter is a misstatement (auditor has audit evidence) or an inability to obtain Sufficient Appropriate Audit Evidence, and (b) whether the matter is material but NOT pervasive, or material AND pervasive. Misstatement with SAAE - qualified if not pervasive, adverse if pervasive. Inability to obtain SAAE - qualified if not pervasive, disclaimer if pervasive.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are Key Audit Matters?</h3>
                        <div class="faq-expanded__a"><p>Key Audit Matters (KAM) under SA 701 are matters that, in the auditor's professional judgment, were of most significance in the audit of the financial statements for the current period. KAMs are selected from matters communicated with Those Charged with Governance under SA 260 - taking into account areas of higher assessed risk under SA 315, significant management judgments on accounting estimates, and the effects of significant events or transactions. KAM communication is mandatory for listed entity audits and optional for unlisted; prohibited where the auditor disclaims an opinion (unless law requires). Each KAM is described in a four-element format - description, why considered, audit procedures performed, outcome reference.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between adverse opinion and disclaimer of opinion?</h3>
                        <div class="faq-expanded__a"><p>Both adverse opinion and disclaimer of opinion are issued when the matter is material AND pervasive - but they differ in whether the auditor has audit evidence. Adverse opinion is issued when the auditor HAS Sufficient Appropriate Audit Evidence and concludes that the financial statements are materially and pervasively misstated - i.e. the financial statements as a whole do not give a true and fair view. Disclaimer is issued when the auditor was UNABLE to obtain Sufficient Appropriate Audit Evidence on a matter that is material and pervasive - the auditor cannot form an opinion on the financial statements as a whole. Disclaimer is used in extremely rare circumstances involving multiple uncertainties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is an Emphasis of Matter paragraph?</h3>
                        <div class="faq-expanded__a"><p>An Emphasis of Matter (EoM) paragraph under SA 706 is included in the audit report to draw users' attention to a matter PROPERLY presented or disclosed in the financial statements that is fundamental to users' understanding. EoM does NOT modify the auditor's opinion - the opinion remains unmodified even with an EoM paragraph. Typical EoM triggers - subsequent events between balance sheet date and audit report date; scheme of arrangement effects; regulatory development; prior-period correction adequately disclosed. The placement is after the Opinion and Basis for Opinion sections; before KAM if any. EoM is the auditor's way of saying 'do not miss this' without modifying the opinion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Who can sign an audit report under the Companies Act?</h3>
                        <div class="faq-expanded__a"><p>Under Section 145 of the Companies Act, 2013, the person appointed as auditor of the company shall sign the auditor's report or sign or certify any other document of the company. The auditor is appointed under Section 139 by the members at the AGM (or by the Board for first auditor or casual vacancy). The auditor must be a Chartered Accountant in practice holding a valid Certificate of Practice from ICAI, not disqualified under Section 141 (officer or employee of company; indebted above prescribed limit; business relationship; security holding above prescribed limit; convicted for fraud). Chartered Accountants Act 1949 First Schedule Clause 12 prohibits a CA from allowing a non-CA or non-partner CA to sign on his behalf. UDIN must be generated on the ICAI portal at sign-off.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to read an audit report as an investor or lender?</h3>
                        <div class="faq-expanded__a"><p>Read the audit report in seven layers - (1) Opinion type on the first page - unmodified, qualified, adverse, disclaimer; (2) Basis for Opinion paragraph explaining the cause where modified; (3) Key Audit Matters section (listed entities) signalling where audit attention concentrated; (4) Material Uncertainty Related to Going Concern section (where present) signalling twelve-month forward financial distress; (5) Emphasis of Matter and Other Matter paragraphs which do not modify opinion but are high-signal; (6) Annexure A CARO 2020 with 21-clause company-compliance assessment; (7) Annexure B IFC report with separate opinion on internal financial controls. Each layer can carry independent qualifications; cross-reference all layers in due diligence.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Audit report ke kitne types hote hain?</strong> 4 types - Unmodified (SA 700, clean), Qualified (SA 705 - material but not pervasive), Adverse (material aur pervasive misstatement), Disclaimer (material aur pervasive inability to obtain audit evidence).</p>
<p><strong>Qualified aur Unqualified opinion mein kya farak hai?</strong> Unqualified (Unmodified) - clean report; financial statements true and fair view dete hain. Qualified - 'except for' language; specific matter ke alawa financial statements true and fair hain. Qualified mein matter material hai par pervasive nahi.</p>
<p><strong>Modified opinion kya hota hai?</strong> SA 705 ke under unmodified ke alawa kuch bhi - Qualified, Adverse, ya Disclaimer. Material vs pervasive decision matrix se type decide hota hai - SAAE hai toh Qualified ya Adverse; SAAE nahi obtain hua toh Qualified ya Disclaimer.</p>
<p><strong>KAM kya hai aur kab mandatory hai?</strong> Key Audit Matters - SA 701 ke under jo audit mein significant judgment areas hote hain. Listed entities ke liye mandatory; unlisted ke liye optional. Disclaimer ke saath prohibited (jab tak law require na kare).</p>
<p><strong>Adverse aur Disclaimer mein kya farak hai?</strong> Dono material aur pervasive hain - par Adverse mein auditor ke pass evidence hai (FS materially misstated); Disclaimer mein auditor ko evidence nahi mil paya (cannot form opinion). Disclaimer extreme rare cases mein issue hota hai multiple uncertainties ke saath.</p>
<p><strong>Audit report kaun sign kar sakta hai?</strong> Section 145 Companies Act - appointed auditor sign karega. Practicing CA with valid CoP from ICAI, Section 141 disqualifications nahi honi chahiye. UDIN ICAI portal pe generate karna mandatory hai sign-off ke saath.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency Recap - Audit Report Compliance Stakes</h2>
            <div class="content-text">
                
                <p>The audit report is filed with Form AOC-4 within 30 days of the AGM (typically 30 October for September AGMs) - <strong>delay attracts Rs 100 per day MCA additional fees plus Section 137 penalty.</strong> A modified opinion (qualified, adverse, or disclaimer) carries compounding consequences - lender covenant trigger, investor due-diligence red flag, regulatory inquiry trigger for listed entities, NFRA monitoring escalation.</p>
<p>KAM disclosure (mandatory for listed entities under SA 701) is the most-read section in equity research analyst reports - any change in KAM year-on-year signals shifting audit attention. <strong>UDIN must be generated within prescribed time of audit-report sign-off</strong> - non-generation is professional misconduct under ICAI rules. Section 145 prohibits signing by anyone other than the appointed auditor - signing by partner not appointed in ADT-1 is professional misconduct under First Schedule Clause 12 of Chartered Accountants Act 1949.</p>
<p>The Companies Act 2013 imposes <strong>Rs 25,000 to Rs 5,00,000 penalty on auditors for contravention (Rs 1 lakh to Rs 25 lakh for fraudulent reporting) under Section 147.</strong></p>
<p><strong>Action now:</strong> Engage Patron for a statutory audit with clean unmodified opinion objective - <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20statutory%20audit%20quote%20under%20SA%20700%20framework." target="_blank">WhatsApp</a>. Free initial consultation on opinion-type risk assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for Clean Unmodified Audit Reports</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Audit report types in India - unmodified, qualified, adverse, and disclaimer of opinion - are the most consequential output of the entire audit cycle. The revised SA 700 / 705 / 706 / 701 framework (effective 1 April 2018) transformed audit reports from one-page opinions to multi-section structured documents - Opinion paragraph, Basis for Opinion, Key Audit Matters (listed entities), Going Concern uncertainty, Emphasis of Matter, Other Matter, Other Information, Auditor's Responsibility, Report on Other Legal and Regulatory Requirements, Annexure A CARO 2020, and Annexure B IFC - all signed by the appointed auditor under Section 145 of the Companies Act 2013 with UDIN generated on the ICAI portal.</p>
<p>Reading an audit report properly requires understanding the seven layers - opinion type, basis, KAMs, going concern, emphasis/other matter, CARO, and IFC - each of which can carry independent qualifications. Together with CARO 2020 reporting (Section 143(11)), Internal Financial Controls audit (Section 143(3)(i)), and Schedule III compliance (Section 129), this Audit Report Types page completes the financial statements compliance quartet. Patron handles audit-report drafting as a structured exercise driven by the SA 700/705/706 framework - applying the material-vs-pervasive decision matrix finding-by-finding, preparing KAM selection memos for every listed entity, evaluating going concern under SA 570, and communicating with TCWG pre-sign-off to avoid avoidable modifications. Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring audit-report depth from clean Pvt Ltd opinions to listed-entity KAM disclosures with group-component coordination under SA 600.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20statutory%20audit%20quote%20under%20SA%20700%20framework." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20Engagement&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20statutory%20audit%20engagement.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- SISTER AUTHORITY PAGES GRID -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Audit and Financial Statements Compliance Cluster</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron's audit cluster - this Audit Report Types authority page sits alongside CARO 2020, IFC audit, and Schedule III compliance. All four authority pages cross-reference each other for complete Section 143 reporting depth.</p>
       
            <div class="pa-city-block">
    <div class="pa-block-title">Sister Authority Pages</div>
    <div class="pa-block-sub">Financial statements compliance quartet under the Companies Act 2013</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Parent)</div><div class="pa-card-sub">Section 143 engagement</div></div></a>
        <a href="/caro-2020-reporting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">CARO 2020 (Annexure A)</div><div class="pa-card-sub">Section 143(11)</div></div></a>
        <a href="/internal-financial-controls-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IFC Audit (Annexure B)</div><div class="pa-card-sub">Section 143(3)(i)</div></div></a>
        <a href="/schedule-iii-compliance-companies-act" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Schedule III Compliance</div><div class="pa-card-sub">Section 129</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">Section 44AB - Form 3CB</div></div></a>
        <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">Section 139 - ADT-1</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">14 May 2026 </span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content refreshed quarterly (Tier 1) or whenever ICAI revises SA 700/701/705/706/570 Implementation Guides, NFRA issues disciplinary orders citing improperly modified opinions, MCA notifies amendments to Section 143 reporting under the Companies Act 2013, or significant court judgments on auditor liability and KAM disclosure emerge.</p>
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