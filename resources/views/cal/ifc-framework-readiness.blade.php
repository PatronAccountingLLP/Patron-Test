@extends('layouts.app')
@section('meta')

<title>IFC Readiness Check | Section 143(3)(i) ICFR Audit</title>
<meta name="description" content="IFC framework readiness tool checks whether Section 143(3)(i) ICFR auditor reporting applies and scores your internal financial control readiness. Check now!">
<meta name="robots" content="index, follow">
<link rel="canonical" href="/tools/ifc-framework-readiness">

<meta property="og:title" content="IFC Framework Readiness Tool — Free ICFR Audit Check">
<meta property="og:description" content="Check whether IFC/ICFR auditor reporting under Section 143(3)(i) applies to your company and score internal financial control readiness. Free, instant, India-specific.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/ifc-framework-readiness">
<meta property="og:image" content="/tools/ifc-framework-readiness-og.png">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="theme-color" content="#15365f">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="IFC Framework Readiness Tool — Free ICFR Audit Check">
<meta name="twitter:description" content="Check whether IFC/ICFR auditor reporting under Section 143(3)(i) applies and score internal financial control readiness.">
<meta name="twitter:image" content="/tools/ifc-framework-readiness-og.png">

<link rel="icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">

@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "IFC Framework Readiness Tool",
  "description": "The IFC Framework Readiness Tool determines whether auditor reporting on internal financial controls over financial reporting under Section 143(3)(i) of the Companies Act 2013 applies to a company, applying the MCA 2017 private company exemption test for OPC, small company, turnover, borrowings and Section 137/92 default, and scores readiness across core ICFR framework components.",
  "url": "/tools/ifc-framework-readiness",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Any",
  "inLanguage": "en-IN",
  "isAccessibleForFree": true,
  "datePublished": "2026-05-16T08:00:00+05:30",
  "dateModified": "2026-05-16T08:00:00+05:30",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR"
  },
  "reviewedBy": {
    "@type": "Person",
    "@id": "/#founder",
    "name": "CA Sundram Gupta",
    "jobTitle": "Founder & Chartered Accountant",
    "url": "/contact-page",
    "sameAs": ["https://www.linkedin.com/in/ca-sundram-gupta"],
    "hasCredential": [{
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "Professional Certification",
      "name": "Chartered Accountant (CA)",
      "recognizedBy": {
        "@type": "Organization",
        "name": "Institute of Chartered Accountants of India",
        "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
      }
    }]
  },
  "publisher": { "@id": "/#organization" },
  "provider": { "@id": "/#organization" }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
    {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
    {"@type": "ListItem", "position": 3, "name": "IFC Framework Readiness Tool", "item": "/tools/ifc-framework-readiness"}
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the IFC Framework Readiness Tool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is a free tool that first determines whether auditor reporting on internal financial controls over financial reporting under Section 143(3)(i) applies to your company, by running the MCA 2017 private company exemption test, and then scores how ready your ICFR framework is across core control components. It produces an applicability verdict and a readiness percentage."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between IFC and ICFR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Internal Financial Controls is the broad term under Section 134(5)(e) covering operational, compliance and reporting controls. Internal Controls over Financial Reporting is the narrower subset focused on the reliability of financial statements. The ICAI Guidance Note clarifies that the Section 143(3)(i) auditor reporting requirement relates specifically to ICFR, not the wider IFC concept."
      }
    },
    {
      "@type": "Question",
      "name": "Which section governs IFC auditor reporting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Section 143(3)(i) of the Companies Act 2013 requires the statutory auditor to state whether the company has an adequate internal financial controls system over financial reporting and whether such controls operated effectively. Separately, Section 134(5)(e) places the responsibility to establish and maintain those controls on the board of directors."
      }
    },
    {
      "@type": "Question",
      "name": "Which companies are exempt from IFC auditor reporting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Per MCA notification dated 13 June 2017, a private company is exempt from Section 143(3)(i) auditor IFC reporting if it is a One Person Company or small company, or has turnover below 50 crore as per the latest audited financials and aggregate borrowings below 25 crore at any time during the year. The exemption is lost if the company defaulted in filing under Section 137 or 92."
      }
    },
    {
      "@type": "Question",
      "name": "Is the turnover and borrowing test AND or OR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MCA Notification 2218(E) dated 13 July 2017 clarified that the words are to be read as turnover below 50 crore AND borrowings below 25 crore. So a private company that is not an OPC or small company must satisfy both the turnover and the borrowings condition to be exempt from auditor IFC reporting. Breaching either one means Section 143(3)(i) reporting applies."
      }
    },
    {
      "@type": "Question",
      "name": "Does the IFC exemption remove director responsibility?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The exemption only relieves the auditor from reporting under Section 143(3)(i). The board's responsibility under Section 134(5)(e) to lay down adequate internal financial controls and confirm they operated effectively is absolute and applies to every company regardless of size or audit exemption status. Directors remain accountable even when the auditor does not report."
      }
    },
    {
      "@type": "Question",
      "name": "Does IFC apply to private limited companies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Director responsibility for internal financial controls applies to all private companies. Auditor IFC reporting under Section 143(3)(i) applies to a private company unless it qualifies for the MCA 2017 exemption as an OPC or small company, or has turnover below 50 crore and borrowings below 25 crore with no Section 137 or 92 filing default."
      }
    },
    {
      "@type": "Question",
      "name": "How does a Section 137 or 92 default affect the exemption?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The MCA exemption from auditor IFC reporting is available only if the private company has not committed a default in filing its financial statements under Section 137 or its annual return under Section 92 with the Registrar. If such a default exists, the exemption is unavailable and the auditor must report on ICFR even if the turnover and borrowing thresholds are met."
      }
    },
    {
      "@type": "Question",
      "name": "What does an ICFR audit involve?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An ICFR audit objectively examines whether controls over financial reporting are well designed and operated effectively throughout the year. Auditors follow standards such as SA 315 and SA 330, perform process walkthroughs, build a Risk Control Matrix, and test sample transactions. The objective is to identify deficiencies that could cause a material misstatement of the financial statements."
      }
    },
    {
      "@type": "Question",
      "name": "Do listed and public companies always have IFC reporting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The MCA private company exemption does not extend to listed companies or public companies. Auditors of listed and public companies must report on the adequacy and operating effectiveness of internal financial controls over financial reporting under Section 143(3)(i), and the board must also report on adequacy under the Companies (Accounts) Rules 2014."
      }
    },
    {
      "@type": "Question",
      "name": "Does this tool give a binding IFC opinion?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The tool gives an indicative applicability verdict and a readiness score for planning only. The binding determination of Section 143(3)(i) applicability and the ICFR audit opinion rest with the statutory auditor, based on the company's actual facts, group structure, filing history and the rules for the specific financial year. Confirm with a Chartered Accountant."
      }
    },
    {
      "@type": "Question",
      "name": "Does the tool store my company data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The IFC Framework Readiness Tool runs entirely in your browser. The company type, threshold figures and control answers you enter are never transmitted to any server or stored anywhere. Refreshing the page clears all inputs, so you can assess applicability and readiness confidentially before engaging an auditor or consultant."
      }
    },
    {
      "@type": "Question",
      "name": "Is the IFC Framework Readiness Tool free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a planning aid for directors, finance teams and auditors preparing for ICFR. For a full ICFR design and operating effectiveness review with a Risk Control Matrix, our Chartered Accountants conduct statutory and internal audits across India."
      }
    }
  ]
}
</script>
@endsection
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<style>

        :root {
            --primary: #15365f;
            --primary-light: #1f4a7a;
            --primary-dark: #0a2240;
            --accent: #f26522;
            --accent-light: #ff8347;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #414042;
            --text-secondary: #555555;
            --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669;
            --info: #0EA5E9;
            --danger: #DC2626;
            --radius: 12px;
            --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif;
            --font-mono: 'Space Mono', monospace;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; }

        body {
            font-family: var(--font-body);
            background: var(--surface);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        /* ====== STICKY TOC NAV ====== */
        .toc-nav {
            background: var(--primary-dark);
            position: sticky;
            top: 0;
            z-index: 100;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .toc-nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 0;
        }
        .toc-nav a {
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 12px 16px;
            transition: all 0.2s;
            border-bottom: 2px solid transparent;
            display: inline-block;
        }
        .toc-nav a:hover, .toc-nav a.active {
            color: #fff;
            border-bottom-color: var(--accent);
        }

        /* ====== BREADCRUMB ====== */
        .breadcrumb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0;
            font-size: 13px;
            color: var(--text-muted);
        }
        .breadcrumb a {
            color: var(--primary-light);
            text-decoration: none;
        }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

        /* ====== HERO ====== */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px 24px;
        }
        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .badge-updated {
            background: var(--primary);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: 0.3px;
        }
        .author-byline {
            font-size: 13px;
            color: var(--text-secondary);
        }
        .author-byline strong { color: var(--primary); font-weight: 600; }

        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero h1 span {
            color: var(--accent);
            display: inline;
        }

        /* ====== TL;DR SUMMARY ====== */
        .tldr {
            background: var(--card);
            border-left: 4px solid var(--accent);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 20px 24px;
            margin: 0 auto 32px;
            max-width: 1200px;
            box-shadow: var(--shadow-sm);
        }
        .tldr-label {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .tldr p {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* ====== LAYOUT ====== */
        .main-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }

        @media (min-width: 768px) {
            .main-layout {
                grid-template-columns: 1fr 320px;
                gap: 40px;
            }
        }

        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }

        /* ====== CALCULATOR CARD ====== */
        .calc-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            margin-bottom: 40px;
            border: 1px solid var(--border);
        }
        .calc-card h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }
        .calc-card .step-label {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 24px 0 12px;
        }

        .calc-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            color: var(--text);
            background: var(--surface);
            transition: border-color 0.2s;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--primary);
        }
        .form-group input[type="number"] {
            font-family: var(--font-mono);
            font-size: 18px;
            font-weight: 700;
        }
        .field-hint {
            font-size: 11px;
            color: var(--text-muted);
            margin-top: 4px;
            text-transform: none;
            letter-spacing: 0;
            font-weight: 400;
        }

        /* Checklist */
        .clause-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 8px;
            margin: 8px 0 20px;
        }
        .clause-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 12px 14px;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
            -webkit-tap-highlight-color: transparent;
        }
        .clause-item:hover { border-color: var(--primary-light); }
        .clause-item.checked { background: #ECFDF5; border-color: var(--success); }
        .clause-item input { margin-top: 3px; width: 18px; height: 18px; flex-shrink: 0; accent-color: var(--primary); }
        .clause-item label { font-size: 14px; color: var(--text-secondary); cursor: pointer; line-height: 1.5; }
        .clause-item .cnum {
            font-family: var(--font-mono);
            font-weight: 700;
            color: var(--primary);
            margin-right: 6px;
        }

        .btn-calculate {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            margin-top: 8px;
        }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-secondary {
            width: 100%;
            padding: 12px;
            background: var(--surface-alt);
            color: var(--primary);
            border: none;
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }
        .btn-secondary:hover { background: var(--border); }

        /* Results */
        .result-section {
            margin-top: 28px;
            display: none;
        }
        .result-section.visible { display: block; }

        .result-divider {
            height: 1px;
            background: var(--border);
            margin-bottom: 24px;
        }

        .verdict-card {
            border-radius: var(--radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            border: 1px solid var(--border);
        }
        .verdict-card.applies { background: #FEF2F2; border-color: var(--danger); }
        .verdict-card.exempt { background: #ECFDF5; border-color: var(--success); }
        .verdict-headline {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 6px;
        }
        .verdict-card.applies .verdict-headline { color: var(--danger); }
        .verdict-card.exempt .verdict-headline { color: var(--success); }
        .verdict-reason { font-size: 14px; color: var(--text-secondary); }

        .result-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
        }
        @media (min-width: 500px) {
            .result-grid { grid-template-columns: 1fr 1fr; }
        }

        .result-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 16px 20px;
            border: 1px solid var(--border);
        }
        .result-card.highlight {
            background: var(--primary);
            border-color: var(--primary);
        }
        .result-card.highlight .result-label,
        .result-card.highlight .result-value { color: #fff; }

        .result-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .result-value {
            font-family: var(--font-mono);
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .progress-wrap {
            margin-top: 16px;
            background: var(--surface-alt);
            border-radius: 999px;
            height: 14px;
            overflow: hidden;
        }
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-light), var(--primary));
            width: 0;
            transition: width 0.5s ease;
        }

        .result-breakdown {
            margin-top: 16px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 16px 20px;
        }
        .breakdown-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            font-size: 14px;
        }
        .breakdown-row:not(:last-child) {
            border-bottom: 1px dashed var(--border);
        }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value {
            font-family: var(--font-mono);
            font-weight: 700;
            color: var(--text);
        }

        .btn-reset {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 16px;
            padding: 8px 16px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--card);
            color: var(--text-muted);
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }

        /* ====== CONTENT SECTIONS ====== */
        .content-section {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 32px;
            margin-bottom: 32px;
            border: 1px solid var(--border);
        }
        .content-section h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 16px;
            line-height: 1.3;
        }
        .content-section h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-dark);
            margin: 20px 0 10px;
        }
        .content-section p {
            font-size: 15px;
            color: var(--text-secondary);
            margin-bottom: 14px;
            line-height: 1.75;
        }
        .content-section ul, .content-section ol {
            margin: 0 0 14px 22px;
            color: var(--text-secondary);
            font-size: 15px;
            line-height: 1.75;
        }
        .content-section li { margin-bottom: 6px; }
        .content-section a {
            color: var(--primary-light);
            text-decoration: underline;
            text-underline-offset: 2px;
        }
        .content-section a:hover { color: var(--primary); }

        /* Rate Table */
        .rate-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0;
            font-size: 14px;
        }
        .rate-table thead th {
            background: var(--primary);
            color: #fff;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text-secondary);
            vertical-align: top;
        }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }

        /* Formula Box */
        .formula-box {
            background: var(--primary-dark);
            color: #fff;
            border-radius: var(--radius);
            padding: 20px 24px;
            margin: 16px 0;
            font-family: var(--font-mono);
            font-size: 14px;
            line-height: 1.8;
            overflow-x: auto;
        }
        .formula-box .label {
            color: var(--accent-light);
            font-weight: 700;
        }

        /* Info callout */
        .callout {
            background: #EFF6FF;
            border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }

        .callout.warn {
            background: #FFFBEB;
            border-left-color: var(--accent);
        }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

        /* ====== FAQ ACCORDION ====== */
        .faq-item {
            background: var(--surface);
            border-radius: var(--radius);
            margin-bottom: 10px;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: box-shadow 0.2s;
        }
        .faq-item:hover { box-shadow: var(--shadow-sm); }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 16px 20px;
            border: none;
            background: none;
            font-family: var(--font-body);
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            text-align: left;
            line-height: 1.4;
            gap: 12px;
            -webkit-tap-highlight-color: transparent;
        }
        .faq-question * { pointer-events: none; }
        .faq-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: transform 0.3s;
        }
        .faq-item.open .faq-icon { transform: rotate(45deg); }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.35s ease;
        }
        .faq-item.open .faq-answer {
            max-height: 600px;
        }
        .faq-answer-inner {
            padding: 0 20px 16px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

        /* ====== SIDEBAR ====== */
        .sidebar-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
        }
        .sidebar-card h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 14px;
        }
        .sidebar-link {
            display: block;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s;
            margin-bottom: 4px;
            -webkit-tap-highlight-color: rgba(0,0,0,0.05);
            touch-action: manipulation;
        }
        .sidebar-link:hover {
            background: var(--surface-alt);
            color: var(--primary);
        }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .cta-card p {
            font-size: 14px;
            color: rgba(255,255,255,0.85);
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--accent);
            color: var(--primary-dark);
            font-weight: 700;
            font-size: 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s;
            -webkit-tap-highlight-color: rgba(0,0,0,0.1);
            touch-action: manipulation;
        }
        .cta-btn:hover { background: var(--accent-light); }

        /* ====== FOOTER ====== */
        .office-strip {
            background: var(--primary-dark);
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 14px;
        }
        .office-strip .offices {
            font-weight: 600;
            color: #fff;
            margin-bottom: 4px;
        }
        .office-strip .trust {
            color: var(--accent);
            font-weight: 600;
        }

        .footer {
            background: var(--primary-dark);
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            padding: 16px 20px;
            font-size: 13px;
            color: rgba(255,255,255,0.5);
        }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        /* ====== NOSCRIPT ====== */
        .noscript-box {
            background: #FEE2E2;
            border: 2px solid #DC2626;
            border-radius: var(--radius);
            padding: 20px;
            text-align: center;
            color: #991B1B;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }


/* ===== CTA SYSTEM ===== */
/* ============================================================================
   PATRON ACCOUNTING — CTA SYSTEM
   4-placement CTA architecture for tool/calculator pages:
     1. Peach top bar (after H1, before TL;DR)
     2. Post-result CTA (inside result section, only fires after calc)
     3. Mid-body CTA (navy gradient, between content sections)
     4. Sidebar CTA card (vertical 3-button stack, in sidebar column)

   Each CTA uses 3 channels: Call (orange) / WhatsApp (green) / Email (white)

   Drop-in: paste these rules at the end of the page's <style> block, after
   the existing component CSS. Requires brand-tokens.css to be loaded first.
   ============================================================================ */

/* === Peach top bar (image-style, static, full-width) === */
.brand-cta-bar {
    background: #FFEDD5;
    border-top: 1px solid #FED7AA;
    border-bottom: 1px solid #FED7AA;
    padding: 14px 20px;
}
.brand-cta-bar-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}
.brand-cta-bar-text {
    flex: 1 1 320px;
    font-size: 14px;
    color: var(--text);
    line-height: 1.45;
}
.brand-cta-bar-text strong { color: var(--text); font-weight: 700; }
.brand-cta-bar-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

/* === Universal CTA button === */
.brand-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 11px 18px;
    border-radius: 8px;
    font-family: var(--font-body);
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    border: 0;
    cursor: pointer;
    transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.2s ease;
    -webkit-tap-highlight-color: transparent;
    touch-action: manipulation;
    white-space: nowrap;
    line-height: 1.2;
    min-height: 44px;        /* WCAG 2.5.5 tap target */
}
.brand-cta-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
}
.brand-cta-btn:active { transform: translateY(0); }
.brand-cta-btn .ico { width: 16px; height: 16px; flex-shrink: 0; }

/* === Channel variants === */
.brand-cta-btn-call { background: var(--accent); color: #fff; }
.brand-cta-btn-call:hover { background: var(--accent-light); color: #fff; }

.brand-cta-btn-wa { background: #25D366; color: #fff; }   /* Universal WhatsApp green — never change */
.brand-cta-btn-wa:hover { background: #1FB855; color: #fff; }

.brand-cta-btn-email { background: #fff; color: var(--text); border: 1px solid #E5D6C5; }
.brand-cta-btn-email:hover { background: #FAFAF8; color: var(--text); }

/* === Sidebar variant — vertical stack === */
.brand-cta-stack { display: flex; flex-direction: column; gap: 8px; }
.brand-cta-stack .brand-cta-btn { width: 100%; }

/* === Inside dark body-cta — email button gets a contrasting style === */
.body-cta .brand-cta-bar-actions { justify-content: center; margin-top: 4px; }
.body-cta .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.body-cta .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }

/* === Inside dark sidebar cta-card — same email override === */
.cta-card .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.cta-card .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }

/* === Post-result CTA — orange-bordered soft alert (only visible after calc) === */
.post-result-cta {
    background: #FFF7ED;
    border: 1px solid #FED7AA;
    border-left: 4px solid var(--accent);
    border-radius: var(--radius);
    padding: 18px 20px;
    margin: 20px 0 4px;
}
.post-result-cta-head {
    font-size: 15px;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 4px;
    line-height: 1.4;
}
.post-result-cta-sub {
    font-size: 13px;
    color: var(--text-secondary);
    margin-bottom: 14px;
    line-height: 1.55;
}
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

/* === Mobile breakpoint (≤767px): peach bar restructures, body-cta + post-result stack === */
@media (max-width: 767px) {
    .brand-cta-bar { padding: 12px 14px; }
    .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
    .brand-cta-bar-actions { width: 100%; gap: 8px; }
    .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; min-height: 44px; }
    .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }   /* Call gets its own row */
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta { padding: 16px; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* === Tablet portrait + narrow laptops: 2-col layout makes content column too narrow for 3-button rows === */
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* ===== FOCUS-VISIBLE ===== */
/* ============================================================================
   PATRON ACCOUNTING — Focus-visible accessibility (WCAG 2.4.7)

   PROBLEM:
     `outline: none` on inputs/buttons removes the keyboard focus indicator.
     Mouse users don't notice. Keyboard users (tabbing through the form)
     can't see where focus lands. WCAG 2.4.7 Focus Visible failure.

   SOLUTION:
     Use :focus-visible (pseudo-class). It only triggers on KEYBOARD focus,
     not mouse-click focus. So mouse users see a clean visual design,
     keyboard users get a clear focus ring.

   Browser support: Chrome 86+, Safari 15.4+, Firefox 85+, Edge 86+ — all
   our target browsers. No fallback needed.
   ============================================================================ */

/* === Form inputs and selects ===
   Replace any `outline: none` with this transparent-outline pattern.
   The transparent outline is always there (no layout shift on focus),
   only its color changes on keyboard focus. */
.form-group input,
.form-group select {
    outline: 2px solid transparent;
    outline-offset: 1px;
}
.form-group input:focus-visible,
.form-group select:focus-visible {
    outline-color: var(--primary);
}

/* === Buttons and links — universal :focus-visible ring === */
button:focus-visible,
a:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: 2px;
    border-radius: 4px;
}

/* === Toggle buttons get primary-color outline (they live on accent-tinted areas) === */
.toggle-btn:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 2px;
}

/* === TOC nav links: outline goes inward (links are flush with sticky bar edge) === */
.toc-nav a:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: -2px;
}

/* === FAQ accordion buttons: outline goes inward (buttons span full width) === */
.faq-question:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: -2px;
}

/* ===== REDUCED MOTION ===== */
/* ============================================================================
   PATRON ACCOUNTING — Reduced motion (WCAG 2.3.3)

   Some users (vestibular disorders, motion sensitivity) configure their OS
   to request reduced motion. The browser exposes this via the
   prefers-reduced-motion media query.

   This rule blanket-disables animations, transitions, and smooth-scroll
   for those users. Everyone else gets the normal animated experience.

   Paste at the end of your <style> block. Order matters — must come AFTER
   any rule that defines transitions, otherwise the cascade won't override.
   ============================================================================ */

@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* ===== PRINT ===== */
/* ============================================================================
   PATRON ACCOUNTING — Print stylesheet for /tools/ pages

   AUDIENCE: A user who has run the calculator and now wants to print the
   working paper / memo / output for inclusion in their audit/tax/accounting
   file. They want clean black-on-white output, no chrome, no CTAs, no
   educational content. Just the result.

   This stylesheet:
   - Hides navigation (TOC, breadcrumb, CTAs, sidebar, content sections, footer)
   - Inverts dark code blocks (working-paper text, formula box) to white-on-black
   - Removes background gradients, replaces with simple borders
   - Sets serif-friendly print typography
   - Avoids page-breaks inside result blocks

   Paste at the end of your <style> block.
   ============================================================================ */

@media print {
    @page { margin: 1.5cm; }

    body {
        background: #fff !important;
        color: #000 !important;
        font-size: 10pt;
        line-height: 1.5;
    }

    /* Hide all navigation and chrome */
    .toc-nav,
    .breadcrumb,
    .brand-cta-bar,
    .post-result-cta,
    .body-cta,
    .cta-card,
    .sidebar-card,
    .sidebar-col,
    .office-strip,
    .footer,
    .btn-calculate,
    .btn-reset,
    .calc-section-title,
    .calc-intro,
    .form-group,
    .toggle-group,
    .conditional-row,
    .noscript-box,
    .content-section {
        display: none !important;
    }

    /* Calc card chrome stripped, but keep the wrapper for results */
    .calc-card {
        box-shadow: none !important;
        border: none !important;
        padding: 0 !important;
    }
    .calc-card h2 { display: none; }

    /* Hero compacted */
    .hero { padding: 0 0 12px !important; }
    .hero h1 {
        font-size: 18pt !important;
        color: #000 !important;
    }
    .hero h1 span { color: #000 !important; }
    .hero-meta { font-size: 9pt; }
    .badge-updated {
        background: transparent !important;
        color: #000 !important;
        border: 1px solid #000;
    }
    .author-byline strong { color: #000 !important; }

    /* TL;DR — keep but flatten */
    .tldr {
        box-shadow: none !important;
        border-left: 3px solid #000 !important;
        padding: 8px 12px !important;
        margin: 0 0 12px !important;
    }
    .tldr-label { color: #000 !important; }
    .tldr p { font-size: 9pt; color: #333 !important; }

    /* Layout becomes single-column in print */
    .main-layout {
        display: block !important;
        padding: 0 !important;
    }

    /* Result blocks — keep crisp, avoid page breaks inside */
    .verdict-card {
        background: #fff !important;
        border: 2px solid #000 !important;
        border-left: 6px solid #000 !important;
        page-break-inside: avoid;
    }
    .verdict-headline,
    .verdict-grid-value { color: #000 !important; }
    .verdict-grid-item {
        background: #fff !important;
        border: 1px solid #999;
    }

    .summary-card {
        background: #fff !important;
        border: 1px solid #999 !important;
    }
    .summary-card.highlight { background: #fff !important; }
    .summary-card.highlight .summary-label,
    .summary-card.highlight .summary-value { color: #000 !important; }
    .summary-value { color: #000 !important; }

    .info-banner {
        background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
    }

    .basis-block {
        background: #fff !important;
        border: 1px solid #000 !important;
        page-break-inside: avoid;
    }
    .basis-label { color: #000 !important; }

    /* Working paper text — invert from dark navy bg to white-on-black */
    .wp-text {
        background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
        page-break-inside: avoid;
        font-size: 9pt;
    }
    .wp-text .wp-label { color: #000 !important; }

    /* Strip link decoration in print */
    a, a:visited {
        color: #000 !important;
        text-decoration: none !important;
    }
}

</style>

@section('content')

<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#assessment">Readiness Tool</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#applicability">Applicability</a>
        <a href="#ifc-vs-icfr">IFC vs ICFR</a>
        <a href="#components">Framework Components</a>
        <a href="#audit-process">Audit Process</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    IFC Framework Readiness Tool
</nav>

<header class="hero" id="assessment">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>IFC Framework Readiness Tool — <span>Section 143(3)(i) ICFR Applicability &amp; Control Readiness</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Unsure if IFC reporting applies? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20IFC%20Framework%20Readiness%20Tool.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=IFC%20Framework%20Readiness%20Tool%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20IFC%2FICFR%20applicability%20and%20a%20statutory%20audit.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free tool answers two questions for any company: does auditor reporting on internal financial controls under Section 143(3)(i) apply to you, and how ready is your ICFR framework? Step 1 runs the MCA 13 June 2017 exemption test — entity type, the turnover-and-borrowings conditions, and the Section 137/92 default check. Step 2 lets you tick off readiness across 14 core ICFR framework components and gives a preparedness score. Built and reviewed by Chartered Accountants at Patron Accounting LLP, it runs entirely in your browser so your company data never leaves your device.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>IFC / ICFR Applicability &amp; Readiness Check</h2>
            <noscript>
                <div class="noscript-box">
                    This tool requires JavaScript. Please enable JavaScript or use the applicability table in the section below.
                </div>
            </noscript>

            <div class="step-label">Step 1 — Auditor IFC Reporting Applicability</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="entityType">Entity Type</label>
                    <select id="entityType">
                        <option value="">Select…</option>
                        <option value="listed">Listed Company</option>
                        <option value="public">Public Limited Company</option>
                        <option value="private">Private Limited Company</option>
                        <option value="opc">One Person Company (OPC)</option>
                        <option value="small">Small Company (Sec 2(85))</option>
                    </select>
                    <div class="field-hint">Statutory classification of the entity.</div>
                </div>
                <div class="form-group">
                    <label for="defaultStatus">Default in Sec 137/92 Filing?</label>
                    <select id="defaultStatus">
                        <option value="no" selected>No default</option>
                        <option value="yes">Yes — defaulted</option>
                    </select>
                    <div class="field-hint">Late AOC-4 (137) or MGT-7 (92) filing.</div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="turnover">Turnover — Latest Audited (₹)</label>
                    <input type="text" inputmode="decimal" id="turnover" placeholder="e.g. 350000000" min="0" step="1000000" autocomplete="off">
                    <div class="field-hint">Exemption needs &lt; ₹50 crore.</div>
                </div>
                <div class="form-group">
                    <label for="borrowings">Max Borrowings in Year (₹)</label>
                    <input type="text" inputmode="decimal" id="borrowings" placeholder="e.g. 150000000" min="0" step="1000000" autocomplete="off">
                    <div class="field-hint">Banks/FIs/body corporate, any point. &lt; ₹25 cr.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="checkApplicability()">Check IFC Reporting Applicability</button>

            <div class="step-label">Step 2 — ICFR Framework Readiness (optional)</div>
            <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px;">Tick each ICFR component your company has designed, documented and tested. Then score readiness.</p>
            <div class="clause-list" id="clauseList"></div>
            <button class="btn-secondary" onclick="scoreReadiness()">Score Framework Readiness</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-headline" id="verdictHeadline">—</div>
                    <div class="verdict-reason" id="verdictReason">—</div>
                </div>

                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Components Ready</div>
                        <div class="result-value" id="resReady">—</div>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">Readiness Score</div>
                        <div class="result-value" id="resScore">—</div>
                    </div>
                </div>
                <div class="progress-wrap"><div class="progress-bar" id="progressBar"></div></div>

                <div class="result-breakdown" id="breakdownSection">
                    <div class="breakdown-row">
                        <span class="breakdown-label">Auditor IFC reporting</span>
                        <span class="breakdown-value" id="bdVerdict">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Components in place</span>
                        <span class="breakdown-value" id="bdReady">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Components pending</span>
                        <span class="breakdown-value" id="bdPending">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Readiness band</span>
                        <span class="breakdown-value" id="bdBand">—</span>
                    </div>
                </div>

                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want a CA to confirm IFC applicability and review your ICFR framework?</div>
                    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — applicability confirmation, Risk Control Matrix gaps and statutory audit, no obligation.</div>
                    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20IFC%20Framework%20Readiness%20Tool.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=IFC%20Framework%20Readiness%20Tool%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20IFC%20Framework%20Readiness%20Tool%20and%20would%20like%20a%20CA%20to%20review%20applicability%20and%20ICFR%20readiness.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Tool</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the IFC Framework Readiness Tool</h2>
            <p>This tool is built for directors, finance teams and auditors of Indian companies who need a quick read on whether the statutory auditor must report on internal financial controls, and how prepared the company's ICFR framework is before the audit begins.</p>
            <ol>
                <li><strong>Select your entity type.</strong> Listed and public companies always attract auditor IFC reporting; OPCs and small companies are exempt; private companies depend on the threshold test.</li>
                <li><strong>Set the Section 137/92 default status.</strong> A filing default removes the private company exemption even when the size thresholds are met.</li>
                <li><strong>Enter turnover and maximum borrowings.</strong> For a private company that is not an OPC or small company, the tool applies the MCA "turnover below ₹50 crore AND borrowings below ₹25 crore" test.</li>
                <li><strong>Score framework readiness.</strong> Tick the ICFR components your company has designed, documented and tested, then generate a readiness percentage and band.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Even if the auditor reporting exemption applies, the board's duty under Section 134(5)(e) to maintain adequate controls is absolute. Use Step 2 every year regardless of the Step 1 verdict — a documented framework protects directors and improves funding and audit outcomes.</p>
            </div>
        </section>

        <section class="content-section" id="applicability">
            <h2>IFC / ICFR Applicability Rules</h2>
            <p>Two distinct obligations operate in parallel. Under <strong>Section 134(5)(e)</strong> of the Companies Act 2013, the board of every company must lay down internal financial controls and confirm they were adequate and operating effectively — there is no exemption. Under <strong>Section 143(3)(i)</strong>, the statutory auditor must additionally report on the adequacy and operating effectiveness of internal financial controls over financial reporting, unless an MCA exemption applies.</p>
            <p>The auditor reporting exemption comes from the MCA notification dated 13 June 2017 (G.S.R. 583(E)), as clarified by Notification 2218(E) dated 13 July 2017.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Category</th><th>Auditor IFC Reporting (Sec 143(3)(i))</th></tr>
                </thead>
                <tbody>
                    <tr><td>Listed company</td><td>Applicable — no exemption</td></tr>
                    <tr><td>Public company</td><td>Applicable — no exemption</td></tr>
                    <tr><td>One Person Company (OPC)</td><td>Exempt</td></tr>
                    <tr><td>Small company (Sec 2(85))</td><td>Exempt</td></tr>
                    <tr><td>Private company within thresholds, no default</td><td>Exempt</td></tr>
                    <tr><td>Private company breaching a threshold or in default</td><td>Applicable</td></tr>
                </tbody>
            </table>
            <h3>The Private Company Exemption Test</h3>
            <p>A private company (not an OPC or small company) is exempt from auditor IFC reporting only if it satisfies <strong>both</strong> thresholds and has <strong>no</strong> filing default:</p>
            <div class="formula-box">
                <span class="label">Condition A:</span> Turnover &lt; ₹50 crore (latest audited financials)<br>
                <span class="label">Condition B:</span> Aggregate borrowings &lt; ₹25 crore (any point in FY)<br>
                <span class="label">Condition C:</span> No default in filing under Sec 137 or Sec 92<br><br>
                Exempt only if <span class="label">A AND B AND C</span> — breach any one ⇒ Sec 143(3)(i) reporting applies
            </div>
            <p>The "AND" between turnover and borrowings was clarified by MCA Notification 2218(E); the conditions are cumulative, not alternative. Source references: the notifications are issued by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> under the Companies Act 2013, available via <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code</a>, and the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> has published a Guidance Note on auditing internal financial controls.</p>
        </section>

        <section class="content-section" id="ifc-vs-icfr">
            <h2>IFC vs ICFR — Why the Distinction Matters</h2>
            <p>The terms are often used interchangeably but are not identical, and the difference drives what the auditor actually reports on.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Aspect</th><th>IFC (Sec 134(5)(e))</th><th>ICFR (Sec 143(3)(i))</th></tr>
                </thead>
                <tbody>
                    <tr><td>Scope</td><td>All controls: operations, compliance, reporting</td><td>Only controls over financial reporting</td></tr>
                    <tr><td>Owner</td><td>Board of directors</td><td>Management designs; auditor reports</td></tr>
                    <tr><td>Obligation</td><td>Absolute — every company</td><td>Subject to MCA exemption</td></tr>
                    <tr><td>Output</td><td>Directors' Responsibility Statement</td><td>Auditor's opinion in audit report</td></tr>
                </tbody>
            </table>
            <p>The ICAI Guidance Note clarifies that "internal financial controls" in Section 143(3)(i) means internal financial controls <em>over financial reporting</em> — a narrower, reporting-focused subset of the wider Section 134 concept. This is why a company can be exempt from auditor ICFR reporting yet still carry an absolute board-level IFC duty.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> The exemption is from <em>auditor reporting</em> only. It does not dilute director responsibility, and it does not stop investors, lenders or acquirers from expecting a documented control framework during due diligence.</p>
            </div>
        </section>

        <section class="content-section" id="components">
            <h2>Core ICFR Framework Components</h2>
            <p>A defensible ICFR framework is built process by process. Auditors following SA 315 (risk identification) and SA 330 (responses to assessed risks) expect each significant financial process to be documented, risk-mapped and tested. The readiness checklist in this tool covers the 14 components below.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>#</th><th>Framework Component</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>Entity-level controls &amp; control environment</td></tr>
                    <tr><td>2</td><td>Risk assessment &amp; fraud risk register</td></tr>
                    <tr><td>3</td><td>Process narratives / flowcharts (P2P, O2C, etc.)</td></tr>
                    <tr><td>4</td><td>Risk Control Matrix (RCM) per process</td></tr>
                    <tr><td>5</td><td>Revenue &amp; receivables controls</td></tr>
                    <tr><td>6</td><td>Procurement &amp; payables controls</td></tr>
                    <tr><td>7</td><td>Payroll &amp; HR controls</td></tr>
                    <tr><td>8</td><td>Fixed assets &amp; inventory controls</td></tr>
                    <tr><td>9</td><td>Treasury, borrowings &amp; cash controls</td></tr>
                    <tr><td>10</td><td>Financial close &amp; reporting controls</td></tr>
                    <tr><td>11</td><td>IT general controls (access, change, backup)</td></tr>
                    <tr><td>12</td><td>Segregation of duties &amp; authorisation matrix</td></tr>
                    <tr><td>13</td><td>Control operating-effectiveness testing &amp; sampling</td></tr>
                    <tr><td>14</td><td>Deficiency log &amp; remediation tracking</td></tr>
                </tbody>
            </table>
            <div class="callout">
                <p><strong>CA Tip:</strong> The single most common audit gap is a Risk Control Matrix copied from a template that does not reflect the company's actual processes. Auditors test controls as operated, not as written — an RCM must be walked through and validated against real transactions.</p>
            </div>
        </section>

        <section class="content-section" id="audit-process">
            <h2>The ICFR Audit Process and Director Duty</h2>
            <p>An ICFR audit is an objective examination of whether controls over financial reporting are properly designed and operated effectively throughout the reporting period. Through walkthroughs and sample testing, the auditor forms an opinion and flags deficiencies that could cause a material misstatement. Audit quality in this area is overseen by the <a href="https://nfra.gov.in/" target="_blank" rel="noopener">NFRA</a>, and auditors apply the Standards on Auditing issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>.</p>
            <h3>Typical Audit Steps</h3>
            <ol>
                <li>Business and risk understanding, then process walkthroughs from transaction initiation to accounting.</li>
                <li>Standard operating procedures and process flow diagrams documented.</li>
                <li>Risk Control Matrix built per process, mapping risks to controls.</li>
                <li>Control design assessment, then operating-effectiveness testing on sampled documents.</li>
                <li>Deficiency evaluation and reporting; an unqualified ICFR opinion strengthens stakeholder confidence.</li>
            </ol>
            <h3>Director Responsibility Is Absolute</h3>
            <p>Section 134(5)(e) requires the Directors' Responsibility Statement to confirm that adequate internal financial controls were laid down and operated effectively. Rule 8(5)(viii) of the Companies (Accounts) Rules 2014 requires the Board's Report of all companies to comment on the adequacy of internal financial controls with reference to the financial statements. This duty does not disappear when the auditor reporting exemption applies. For implementation support, see our <a href="/internal-audit">internal audit</a> and <a href="/statutory-audit">statutory audit</a> services.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Build the ICFR file alongside the financial statements — entity-level controls, process RCMs, test evidence and a deficiency tracker. Companies that do this shorten the audit, reduce qualification risk and are materially more credible in fundraising due diligence. Patron's team conducts <a href="/statutory-audit-private-limited-company">statutory audits for private limited companies</a> with full ICFR documentation.</p>
            </div>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool gives an indicative assessment for planning only. The binding determination of Section 143(3)(i) applicability and the ICFR audit opinion rest with the statutory auditor, based on the company's actual facts, group structure, filing history and the rules for the specific financial year. Confirm with a Chartered Accountant.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need an ICFR Design &amp; Operating Effectiveness Review?</h3>
    <p>Patron Accounting LLP builds Risk Control Matrices and tests ICFR for statutory audit readiness — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IFC%20Framework%20Readiness%20Tool.%20I%20need%20help%20with%20an%20ICFR%20review%20and%20statutory%20audit.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=IFC%20Framework%20Readiness%20Tool%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20IFC%2FICFR%20applicability%20and%20a%20statutory%20audit.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
</div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About IFC &amp; ICFR</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the IFC Framework Readiness Tool?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">It is a free tool that first determines whether auditor reporting on internal financial controls over financial reporting under Section 143(3)(i) applies to your company, by running the MCA 2017 private company exemption test, and then scores how ready your ICFR framework is across core control components. It produces an applicability verdict and a readiness percentage.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the difference between IFC and ICFR?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Internal Financial Controls is the broad term under Section 134(5)(e) covering operational, compliance and reporting controls. Internal Controls over Financial Reporting is the narrower subset focused on the reliability of financial statements. The ICAI Guidance Note clarifies that the Section 143(3)(i) auditor reporting requirement relates specifically to ICFR, not the wider IFC concept.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Which section governs IFC auditor reporting?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 143(3)(i) of the Companies Act 2013 requires the statutory auditor to state whether the company has an adequate internal financial controls system over financial reporting and whether such controls operated effectively. Separately, Section 134(5)(e) places the responsibility to establish and maintain those controls on the board of directors.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Which companies are exempt from IFC auditor reporting?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Per MCA notification dated 13 June 2017, a private company is exempt from Section 143(3)(i) auditor IFC reporting if it is a One Person Company or small company, or has turnover below 50 crore as per the latest audited financials and aggregate borrowings below 25 crore at any time during the year. The exemption is lost if the company defaulted in filing under Section 137 or 92.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the turnover and borrowing test AND or OR?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">MCA Notification 2218(E) dated 13 July 2017 clarified that the words are to be read as turnover below 50 crore AND borrowings below 25 crore. So a private company that is not an OPC or small company must satisfy both the turnover and the borrowings condition to be exempt from auditor IFC reporting. Breaching either one means Section 143(3)(i) reporting applies.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the IFC exemption remove director responsibility?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The exemption only relieves the auditor from reporting under Section 143(3)(i). The board's responsibility under Section 134(5)(e) to lay down adequate internal financial controls and confirm they operated effectively is absolute and applies to every company regardless of size or audit exemption status. Directors remain accountable even when the auditor does not report.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does IFC apply to private limited companies?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Director responsibility for internal financial controls applies to all private companies. Auditor IFC reporting under Section 143(3)(i) applies to a private company unless it qualifies for the MCA 2017 exemption as an OPC or small company, or has turnover below 50 crore and borrowings below 25 crore with no Section 137 or 92 filing default.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How does a Section 137 or 92 default affect the exemption?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The MCA exemption from auditor IFC reporting is available only if the private company has not committed a default in filing its financial statements under Section 137 or its annual return under Section 92 with the Registrar. If such a default exists, the exemption is unavailable and the auditor must report on ICFR even if the turnover and borrowing thresholds are met.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What does an ICFR audit involve?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">An ICFR audit objectively examines whether controls over financial reporting are well designed and operated effectively throughout the year. Auditors follow standards such as SA 315 and SA 330, perform process walkthroughs, build a Risk Control Matrix, and test sample transactions. The objective is to identify deficiencies that could cause a material misstatement of the financial statements.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do listed and public companies always have IFC reporting?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The MCA private company exemption does not extend to listed companies or public companies. Auditors of listed and public companies must report on the adequacy and operating effectiveness of internal financial controls over financial reporting under Section 143(3)(i), and the board must also report on adequacy under the Companies (Accounts) Rules 2014.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does this tool give a binding IFC opinion?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The tool gives an indicative applicability verdict and a readiness score for planning only. The binding determination of Section 143(3)(i) applicability and the ICFR audit opinion rest with the statutory auditor, based on the company's actual facts, group structure, filing history and the rules for the specific financial year. Confirm with a Chartered Accountant.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the tool store my company data?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The IFC Framework Readiness Tool runs entirely in your browser. The company type, threshold figures and control answers you enter are never transmitted to any server or stored anywhere. Refreshing the page clears all inputs, so you can assess applicability and readiness confidentially before engaging an auditor or consultant.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the IFC Framework Readiness Tool free?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a planning aid for directors, finance teams and auditors preparing for ICFR. For a full ICFR design and operating effectiveness review with a Risk Control Matrix, our Chartered Accountants conduct statutory and internal audits across India.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need an ICFR Design &amp; Effectiveness Review?</h3>
            <p>Risk Control Matrices &amp; ICFR testing for statutory audit readiness across India — fixed-fee.</p>
            <div class="brand-cta-stack">
                <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IFC%20Framework%20Readiness%20Tool.%20I%20need%20help%20with%20an%20ICFR%20review%20and%20statutory%20audit.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
                <a href="mailto:sales@patronaccounting.com?subject=IFC%20Framework%20Readiness%20Tool%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20IFC%2FICFR%20applicability%20and%20a%20statutory%20audit.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
            </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit Services <span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit Service <span class="arrow">→</span></a>
            <a href="/statutory-audit-private-limited-company" class="sidebar-link">Statutory Audit (Pvt Ltd) <span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit Service <span class="arrow">→</span></a>
            <a href="/appointment-of-auditor" class="sidebar-link">Appointment of Auditor <span class="arrow">→</span></a>
            <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Company Compliance <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/caro-2020-self-assessment" class="sidebar-link">CARO 2020 Self-Assessment <span class="arrow">→</span></a>
            <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator <span class="arrow">→</span></a>
            <a href="/tools/profit-loss-generator" class="sidebar-link">Profit &amp; Loss Generator <span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator <span class="arrow">→</span></a>
            <a href="/tools/roc-filing-due-date-calendar" class="sidebar-link">ROC Filing Due Date Calendar <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
            <a href="/blog/related-party-transactions-under-section-188-a-complete-compliance-guide" class="sidebar-link">Related Party Transactions (Sec 188) <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
    var COMPONENTS = [
        "Entity-level controls & control environment",
        "Risk assessment & fraud risk register",
        "Process narratives / flowcharts (P2P, O2C)",
        "Risk Control Matrix (RCM) per process",
        "Revenue & receivables controls",
        "Procurement & payables controls",
        "Payroll & HR controls",
        "Fixed assets & inventory controls",
        "Treasury, borrowings & cash controls",
        "Financial close & reporting controls",
        "IT general controls (access, change, backup)",
        "Segregation of duties & authorisation matrix",
        "Operating-effectiveness testing & sampling",
        "Deficiency log & remediation tracking"
    ];

    var ifcVerdict = null;

    (function buildComponents() {
        var list = document.getElementById('clauseList');
        var html = '';
        for (var i = 0; i < COMPONENTS.length; i++) {
            var n = i + 1;
            html += '<div class="clause-item" onclick="toggleClause(this, event)">' +
                '<input type="checkbox" id="cl' + n + '" onclick="event.stopPropagation();syncClause(this)">' +
                '<label for="cl' + n + '"><span class="cnum">' + n + '.</span>' + COMPONENTS[i] + '</label></div>';
        }
        list.innerHTML = html;
    })();

    function toggleClause(div, e) {
        var cb = div.querySelector('input[type="checkbox"]');
        if (e && e.target === cb) return;
        cb.checked = !cb.checked;
        div.classList.toggle('checked', cb.checked);
    }
    function syncClause(cb) {
        cb.closest('.clause-item').classList.toggle('checked', cb.checked);
    }

    function num(id) {
        var raw = document.getElementById(id).value;
        if (raw === undefined || raw === null) return NaN;
        var c = String(raw).replace(/[,\s₹]/g, '');
        if (c === '') return NaN;
        var n = parseFloat(c);
        return isFinite(n) ? n : NaN;
    }

    function showResult() {
        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        requestAnimationFrame(function(){
            requestAnimationFrame(function(){
                rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            });
        });
    }

    function checkApplicability() {
        var et = document.getElementById('entityType').value;
        if (!et) { alert('Please select an entity type.'); return; }
        var dft = document.getElementById('defaultStatus').value;

        var TURN = 500000000;  // ₹50 crore
        var BORR = 250000000;  // ₹25 crore
        var applies, reason;

        if (et === 'listed' || et === 'public') {
            applies = true;
            reason = (et === 'listed' ? 'A listed company' : 'A public company') + ' cannot use the MCA private company exemption, so auditor reporting on ICFR under Section 143(3)(i) applies.';
        } else if (et === 'opc' || et === 'small') {
            applies = false;
            reason = (et === 'opc' ? 'A One Person Company' : 'A small company under Sec 2(85)') + ' is exempt from auditor IFC reporting under the MCA notification dated 13 June 2017. Director responsibility under Sec 134(5)(e) still applies.';
        } else { // private
            if (dft === 'yes') {
                applies = true;
                reason = 'The private company has defaulted in filing under Section 137 or 92, so the MCA exemption is unavailable and Section 143(3)(i) auditor IFC reporting applies.';
            } else {
                var to = num('turnover');
                var bo = num('borrowings');
                if (isNaN(to) || isNaN(bo)) {
                    alert('For a private company with no default, enter turnover and maximum borrowings.');
                    return;
                }
                var cA = to < TURN, cB = bo < BORR;
                if (cA && cB) {
                    applies = false;
                    reason = 'Both MCA conditions are met (turnover < ₹50 cr AND borrowings < ₹25 cr) with no Sec 137/92 default, so auditor IFC reporting is exempt. Board duty under Sec 134(5)(e) still applies.';
                } else {
                    applies = true;
                    var fails = [];
                    if (!cA) fails.push('turnover is ₹50 crore or more');
                    if (!cB) fails.push('borrowings reached ₹25 crore or more in the year');
                    reason = 'Section 143(3)(i) auditor IFC reporting applies because ' + fails.join(' and ') + '. The exemption needs turnover AND borrowings both below the limits.';
                }
            }
        }

        ifcVerdict = applies;
        var vc = document.getElementById('verdictCard');
        vc.className = 'verdict-card ' + (applies ? 'applies' : 'exempt');
        document.getElementById('verdictHeadline').textContent = applies ? 'AUDITOR IFC REPORTING APPLIES' : 'AUDITOR IFC REPORTING — EXEMPT';
        document.getElementById('verdictReason').textContent = reason;
        document.getElementById('bdVerdict').textContent = applies ? 'Applies' : 'Exempt';

        document.getElementById('resReady').textContent = '—';
        document.getElementById('resScore').textContent = '—';
        document.getElementById('progressBar').style.width = '0';
        document.getElementById('bdReady').textContent = '—';
        document.getElementById('bdPending').textContent = '—';
        document.getElementById('bdBand').textContent = '—';
        showResult();
    }

    function scoreReadiness() {
        var total = COMPONENTS.length;
        var ready = 0;
        for (var i = 1; i <= total; i++) {
            if (document.getElementById('cl' + i).checked) ready++;
        }
        var pct = Math.round((ready / total) * 100);
        var band = pct >= 85 ? 'Audit-ready' : (pct >= 60 ? 'Mostly ready — close gaps' : (pct >= 30 ? 'Significant gaps' : 'Not prepared'));

        document.getElementById('resReady').textContent = ready + ' / ' + total;
        document.getElementById('resScore').textContent = pct + '%';
        document.getElementById('progressBar').style.width = pct + '%';
        document.getElementById('bdReady').textContent = ready + ' components';
        document.getElementById('bdPending').textContent = (total - ready) + ' components';
        document.getElementById('bdBand').textContent = band;

        if (ifcVerdict === null) {
            document.getElementById('verdictCard').className = 'verdict-card';
            document.getElementById('verdictHeadline').textContent = 'Readiness scored';
            document.getElementById('verdictReason').textContent = 'Run Step 1 above to also get an auditor IFC reporting applicability verdict.';
            document.getElementById('bdVerdict').textContent = 'Not checked';
        }
        showResult();
    }

    function resetCalc() {
        document.getElementById('entityType').value = '';
        document.getElementById('defaultStatus').value = 'no';
        document.getElementById('turnover').value = '';
        document.getElementById('borrowings').value = '';
        for (var i = 1; i <= COMPONENTS.length; i++) {
            var cb = document.getElementById('cl' + i);
            cb.checked = false;
            cb.closest('.clause-item').classList.remove('checked');
        }
        ifcVerdict = null;
        document.getElementById('resultSection').classList.remove('visible');
    }

    function toggleFaq(e) {
        var btn = e.closest ? (e.closest('.faq-question') || e) : e;
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(it){ it.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }

    ['turnover','borrowings'].forEach(function(id){
        var el = document.getElementById(id);
        if (el) el.addEventListener('keydown', function(e){ if (e.key === 'Enter') checkApplicability(); });
    });

    var sections = document.querySelectorAll('[id]');
    var navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', function() {
        var current = '';
        sections.forEach(function(s){
            var top = s.offsetTop - 80;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(function(link){
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });
</script>


<style>
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
</style>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>
@endsection

