@extends('layouts.app')
@section('meta')

<title>Statutory Audit Fee Estimator | ICAI Indicative Range</title>
<meta name="description" content="Statutory audit fee estimator gives an indicative audit fee range by turnover, entity type, city class and complexity, on ICAI's recommended scale. Try free!">
<meta name="robots" content="index, follow">
<link rel="canonical" href="/tools/statutory-audit-fee-estimator">

<meta property="og:title" content="Statutory Audit Fee Estimator — Free Indicative Cost Tool">
<meta property="og:description" content="Estimate an indicative statutory audit fee range by turnover, entity type, city class and complexity, based on ICAI's recommendatory scale of fees. Free and instant.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/statutory-audit-fee-estimator">
<meta property="og:image" content="/tools/statutory-audit-fee-estimator-og.png">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="theme-color" content="#15365f">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Statutory Audit Fee Estimator — Free Indicative Cost Tool">
<meta name="twitter:description" content="Estimate an indicative statutory audit fee range by turnover, entity type, city class and complexity, based on ICAI's recommendatory scale.">
<meta name="twitter:image" content="/tools/statutory-audit-fee-estimator-og.png">

<link rel="icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">

@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Statutory Audit Fee Estimator",
  "description": "The Statutory Audit Fee Estimator gives an indicative statutory audit fee range for an Indian company or LLP based on turnover band, entity type, city class and engagement complexity, anchored to the ICAI Committee for Capacity Building of Members in Practice recommendatory minimum scale of fees. The recommended scale is a guideline only and the actual fee is a matter of agreement.",
  "url": "/tools/statutory-audit-fee-estimator",
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
    {"@type": "ListItem", "position": 3, "name": "Statutory Audit Fee Estimator", "item": "/tools/statutory-audit-fee-estimator"}
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
      "name": "What is the Statutory Audit Fee Estimator?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is a free tool that gives an indicative statutory audit fee range for an Indian company or LLP. You enter turnover band, entity type, city class and complexity factors, and it returns a low, base and high estimate anchored to the ICAI recommendatory minimum scale of fees. It is a planning aid, not a quotation."
      }
    },
    {
      "@type": "Question",
      "name": "How are statutory audit fees decided in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The ICAI Committee for Capacity Building of Members in Practice publishes a Revised Minimum Recommended Scale of Fees that varies by turnover, assignment type and city class. These figures are recommendatory only. The actual statutory audit fee is a matter of agreement between the auditor and the company, and depends on scope, complexity and time involved."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ICAI recommended scale of fees mandatory?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The ICAI scale of fees is explicitly recommendatory and not binding law. Members are free to charge varying rates depending on the nature and complexity of the assignment and the time involved. Firms can and do quote below the recommended scale, particularly in tenders, and there is no direct penalty for charging less."
      }
    },
    {
      "@type": "Question",
      "name": "What factors increase a statutory audit fee?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fees rise with turnover and transaction volume, group structure and consolidation, Ind AS reporting, multiple locations or branches, inventory-heavy or regulated operations, first-year audits, weak internal controls, and the reputation of the audit firm. Big Five firms typically carry a 100 to 500 percent premium over a small or medium practitioner's base fee."
      }
    },
    {
      "@type": "Question",
      "name": "Does the audit fee include GST and out-of-pocket expenses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The ICAI scale figures are professional fees only. GST is collected separately wherever applicable, and office time spent in travelling plus out-of-pocket expenses are chargeable in addition. The estimates produced by this tool are professional fees before GST and reimbursable expenses."
      }
    },
    {
      "@type": "Question",
      "name": "What are Class A, B and C cities for audit fees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ICAI recommends fees separately for Class A, Class B and Class C cities. Class A cities are Delhi, Greater Mumbai, Kolkata, Chennai, Pune, Hyderabad, Bengaluru and Ahmedabad. Class B and Class C cover other smaller cities and towns, where recommended fees are progressively lower than Class A."
      }
    },
    {
      "@type": "Question",
      "name": "How much does a statutory audit cost for a small company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For a small private limited company with low turnover, the ICAI recommendatory base for a company audit starts in the lower lakh range in Class A cities and less in smaller cities, before any complexity or firm-reputation premium. Actual fees vary widely and are agreed case by case, so use the estimate as a starting reference only."
      }
    },
    {
      "@type": "Question",
      "name": "Is a statutory audit mandatory for every company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Every company registered under the Companies Act 2013, including private limited companies and One Person Companies, must have its accounts audited each financial year regardless of turnover. LLPs require a statutory audit only if turnover exceeds 40 lakh or contribution exceeds 25 lakh. The audit fee depends on size and complexity, not on whether the audit is optional."
      }
    },
    {
      "@type": "Question",
      "name": "Why do two firms quote very different audit fees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Audit fees reflect firm reputation, audit methodology, team mix, technology and risk appetite, not just company size. A Big Five firm prices in a signalling premium of 100 to 500 percent over a small or medium practitioner, while a smaller firm may quote near or below the ICAI scale. Both can be legitimate; the difference is positioning and scope."
      }
    },
    {
      "@type": "Question",
      "name": "Does this tool give a binding audit fee quote?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The estimate is indicative and for planning only. It is anchored to the ICAI recommendatory scale, which is a guideline, not a price. A binding statutory audit fee can only be set after a scoping discussion and engagement letter. Contact a Chartered Accountant for an actual quotation tailored to your company."
      }
    },
    {
      "@type": "Question",
      "name": "Does the tool store the figures I enter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The Statutory Audit Fee Estimator runs entirely in your browser. The turnover, entity type, city class and complexity inputs you select are never transmitted to any server or stored anywhere. Refreshing the page clears all inputs, so you can estimate an indicative fee confidentially before approaching an auditor."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Statutory Audit Fee Estimator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a planning aid for directors and finance teams budgeting for statutory audit. For an actual fixed-fee statutory audit quotation tailored to your company, our Chartered Accountants work with companies across India."
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

        .breadcrumb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0;
            font-size: 13px;
            color: var(--text-muted);
        }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

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
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }

        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero h1 span { color: var(--accent); display: inline; }

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
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }

        .main-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }
        @media (min-width: 768px) {
            .main-layout { grid-template-columns: 1fr 320px; gap: 40px; }
        }
        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }

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
        .form-group select:focus { border-color: var(--primary); }
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

        .check-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 8px;
            margin: 8px 0 20px;
        }
        @media (min-width: 600px) {
            .check-list { grid-template-columns: 1fr 1fr; }
        }
        .check-item {
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
        .check-item:hover { border-color: var(--primary-light); }
        .check-item.checked { background: #ECFDF5; border-color: var(--success); }
        .check-item input { margin-top: 3px; width: 18px; height: 18px; flex-shrink: 0; accent-color: var(--primary); }
        .check-item label { font-size: 14px; color: var(--text-secondary); cursor: pointer; line-height: 1.5; }

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

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .estimate-card {
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 16px;
            border: 1px solid var(--info);
            background: #EFF6FF;
            text-align: center;
        }
        .estimate-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }
        .estimate-range {
            font-family: var(--font-mono);
            font-size: 26px;
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.3;
        }
        .estimate-base {
            font-size: 14px;
            color: var(--text-secondary);
            margin-top: 8px;
        }
        .estimate-base strong { color: var(--primary); }

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
        .result-card.highlight { background: var(--primary); border-color: var(--primary); }
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
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-dark);
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
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); }

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
        .formula-box .label { color: var(--accent-light); font-weight: 700; }

        .callout {
            background: #EFF6FF;
            border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

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
        .faq-item.open .faq-answer { max-height: 600px; }
        .faq-answer-inner {
            padding: 0 20px 16px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

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
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
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

        .office-strip {
            background: var(--primary-dark);
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 14px;
        }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }

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

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .estimate-range { font-size: 21px; }
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
        <a href="#estimator">Fee Estimator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#how-fees-work">How Fees Work</a>
        <a href="#city-class">City Class</a>
        <a href="#drivers">Cost Drivers</a>
        <a href="#disclaimer">Important</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Statutory Audit Fee Estimator
</nav>

<header class="hero" id="estimator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Statutory Audit Fee Estimator — <span>Indicative Cost by Turnover, Entity &amp; Complexity</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need an actual audit quote? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Statutory%20Audit%20Fee%20Estimator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=Statutory%20Audit%20Fee%20Estimator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20a%20statutory%20audit%20fee%20quote%20for%20my%20company.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free tool gives an indicative statutory audit fee range for an Indian company or LLP. Enter your turnover band, entity type, city class and the complexity factors that apply, and it returns a low, base and high estimate anchored to the ICAI Committee for Capacity Building of Members in Practice recommendatory minimum scale of fees. The ICAI scale is a guideline only — the actual fee is always a matter of agreement, excludes GST and out-of-pocket expenses, and can vary widely with firm reputation. Built and reviewed by Chartered Accountants at Patron Accounting LLP; it runs entirely in your browser.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Estimate Your Statutory Audit Fee</h2>
            <noscript>
                <div class="noscript-box">
                    This tool requires JavaScript. Please enable JavaScript or refer to the fee guidance tables in the sections below.
                </div>
            </noscript>

            <div class="step-label">Step 1 — Company Profile</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="turnoverBand">Annual Turnover Band</label>
                    <select id="turnoverBand">
                        <option value="">Select…</option>
                        <option value="0">Up to ₹1 crore</option>
                        <option value="1">₹1 crore – ₹5 crore</option>
                        <option value="2">₹5 crore – ₹10 crore</option>
                        <option value="3">₹10 crore – ₹25 crore</option>
                        <option value="4">₹25 crore – ₹50 crore</option>
                        <option value="5">₹50 crore – ₹100 crore</option>
                        <option value="6">Above ₹100 crore</option>
                    </select>
                    <div class="field-hint">Latest financial year revenue.</div>
                </div>
                <div class="form-group">
                    <label for="entityType">Entity Type</label>
                    <select id="entityType">
                        <option value="">Select…</option>
                        <option value="small">Small / OPC Pvt Ltd</option>
                        <option value="private">Private Limited Company</option>
                        <option value="public">Public Limited Company</option>
                        <option value="llp">LLP (audit applicable)</option>
                    </select>
                    <div class="field-hint">Statutory classification.</div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="cityClass">City Class (ICAI)</label>
                    <select id="cityClass">
                        <option value="A">Class A (metro)</option>
                        <option value="B">Class B</option>
                        <option value="C">Class C</option>
                    </select>
                    <div class="field-hint">Class A: Delhi, Mumbai, Pune, etc.</div>
                </div>
                <div class="form-group">
                    <label for="firmTier">Audit Firm Positioning</label>
                    <select id="firmTier">
                        <option value="smp">Small / Medium Practitioner</option>
                        <option value="mid">Established mid-size firm</option>
                        <option value="big">Big Five / IPO-grade</option>
                    </select>
                    <div class="field-hint">Drives the reputation premium.</div>
                </div>
            </div>

            <div class="step-label">Step 2 — Complexity Factors (tick all that apply)</div>
            <div class="check-list" id="factorList"></div>

            <button class="btn-calculate" onclick="estimateFee()">Estimate Audit Fee</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="estimate-card">
                    <div class="estimate-label">Indicative Statutory Audit Fee (professional fee, excl. GST)</div>
                    <div class="estimate-range" id="estRange">—</div>
                    <div class="estimate-base">Mid-point estimate: <strong id="estBase">—</strong></div>
                </div>

                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">ICAI Scale Anchor</div>
                        <div class="result-value" id="resAnchor">—</div>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">Complexity Multiplier</div>
                        <div class="result-value" id="resMult">—</div>
                    </div>
                </div>

                <div class="result-breakdown" id="breakdownSection">
                    <div class="breakdown-row">
                        <span class="breakdown-label">Turnover band anchor</span>
                        <span class="breakdown-value" id="bdAnchor">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">City class factor</span>
                        <span class="breakdown-value" id="bdCity">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Firm positioning factor</span>
                        <span class="breakdown-value" id="bdFirm">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Complexity loading</span>
                        <span class="breakdown-value" id="bdComplexity">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Estimate basis</span>
                        <span class="breakdown-value">ICAI recommendatory</span>
                    </div>
                </div>

                <div class="callout warn" style="margin-top:16px;">
                    <p><strong>Indicative only.</strong> The ICAI scale is recommendatory, not binding. This is a planning estimate, excludes GST and out-of-pocket expenses, and is not a quotation. The actual fee is a matter of agreement after scoping.</p>
                </div>

                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want an actual fixed-fee statutory audit quote, not just an estimate?</div>
                    <div class="post-result-cta-sub">Free 15-min scoping call with a Chartered Accountant — tailored statutory audit quotation for your company's size and complexity, no obligation.</div>
                    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Statutory%20Audit%20Fee%20Estimator.%20Please%20review%20my%20estimate%20and%20share%20an%20actual%20statutory%20audit%20quote." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=Statutory%20Audit%20Fee%20Estimator%20%E2%80%94%20Quote%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Statutory%20Audit%20Fee%20Estimator%20and%20would%20like%20an%20actual%20fixed-fee%20statutory%20audit%20quotation%20for%20my%20company.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Tool</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Statutory Audit Fee Estimator</h2>
            <p>This tool is built for company directors and finance teams who need a realistic budgeting figure for the statutory audit before approaching firms, and for founders comparing quotes that look very different.</p>
            <ol>
                <li><strong>Select your turnover band.</strong> Turnover is the single biggest driver of the ICAI recommended scale.</li>
                <li><strong>Choose entity type and city class.</strong> ICAI recommends fees separately for Class A, B and C cities; entity type adjusts the base.</li>
                <li><strong>Set the audit firm positioning.</strong> A small or medium practitioner prices near the ICAI scale; a Big Five firm carries a large reputation premium.</li>
                <li><strong>Tick the complexity factors.</strong> Group consolidation, Ind AS, branches, inventory, first-year audit and weak controls each add a loading.</li>
                <li><strong>Estimate.</strong> You get a low–high range and a mid-point, anchored to the ICAI recommendatory scale.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Use the mid-point for budgeting and the high end for board approvals. Audit fees in India have barely risen in real terms over the last five years, so a quote far above the high end usually signals either Big Five positioning or a genuinely complex engagement worth discussing.</p>
            </div>
        </section>

        <section class="content-section" id="how-fees-work">
            <h2>How Statutory Audit Fees Work in India</h2>
            <p>The <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>, through its Committee for Capacity Building of Members in Practice, publishes a Revised Minimum Recommended Scale of Fees. It lists indicative fees for a company audit scaled by turnover, with separate columns for Class A, Class B and Class C cities, and different rows for small, medium and large companies.</p>
            <p>Statutory audit itself is mandated by the Companies Act 2013, administered by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>. Crucially, the ICAI fee scale is <strong>recommendatory only</strong>. ICAI itself states that members are free to charge varying rates depending on the nature and complexity of the assignment and the time involved, that GST is collected separately, and that the actual fee charged in individual cases is a matter of agreement between the member and the client. There is no direct penalty for charging below the scale, and firms routinely do so, especially in competitive tenders.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Turnover Band</th><th>Indicative Company Audit Anchor (Class A, SMP base)</th></tr>
                </thead>
                <tbody>
                    <tr><td>Up to ₹1 crore</td><td>Lower lakh range</td></tr>
                    <tr><td>₹1 – ₹10 crore</td><td>Low-to-mid lakh range</td></tr>
                    <tr><td>₹10 – ₹50 crore</td><td>Mid lakh range</td></tr>
                    <tr><td>₹50 – ₹100 crore</td><td>Upper lakh range</td></tr>
                    <tr><td>Above ₹100 crore</td><td>Scale base plus negotiable premium</td></tr>
                </tbody>
            </table>
            <p>The estimator translates these bands into an indicative range. It is anchored to the ICAI guidance but deliberately expressed as a range, because the single biggest determinant of the final number — firm positioning and engagement complexity — is negotiated, not tabulated.</p>
        </section>

        <section class="content-section" id="city-class">
            <h2>City Class and the Reputation Premium</h2>
            <p>ICAI recommends fees separately for three city classes. Class A cities are Delhi, Greater Mumbai, Kolkata, Chennai, Pune, Hyderabad, Bengaluru and Ahmedabad. Class B and Class C cover progressively smaller cities and towns with lower recommended fees.</p>
            <h3>The Firm Positioning Premium</h3>
            <p>The biggest swing in the final fee is not the city — it is which firm signs the report. Independent analysis of auditor remuneration shows Big Five firms typically charge a signalling premium of 100 to 500 percent over what a small or medium practitioner would charge for the same company, because financial statement readers and IPO markets value the brand. The estimator models this through the firm positioning factor.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> A startup heading toward an IPO often migrates to a Big Five auditor regardless of size. If that is on your roadmap, budget for the premium early — switching auditors close to an IPO is far more expensive and disruptive than planning for it. See our guide on <a href="/how-to-evaluate-statutory-audit-firm">how to evaluate a statutory audit firm</a>.</p>
            </div>
        </section>

        <section class="content-section" id="drivers">
            <h2>What Pushes the Audit Fee Up</h2>
            <p>Beyond turnover and firm choice, specific engagement characteristics drive the fee, because they drive the hours and the risk. The estimator's complexity factors map to the cost drivers auditors actually price for.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Driver</th><th>Why It Raises the Fee</th></tr>
                </thead>
                <tbody>
                    <tr><td>Group / consolidation</td><td>Multiple entities, inter-company eliminations, CFS</td></tr>
                    <tr><td>Ind AS reporting</td><td>Fair value, financial instruments, larger disclosures</td></tr>
                    <tr><td>Multiple locations / branches</td><td>Travel, additional sampling, more controls testing</td></tr>
                    <tr><td>Inventory-heavy operations</td><td>Physical verification, valuation, cut-off procedures</td></tr>
                    <tr><td>First-year audit</td><td>Opening balance verification, system understanding</td></tr>
                    <tr><td>Weak internal controls</td><td>More substantive testing, larger samples</td></tr>
                    <tr><td>Regulated sector (NBFC, etc.)</td><td>Sector reporting, regulator-specific procedures</td></tr>
                </tbody>
            </table>
            <p>For an actual scope and fee, our team conducts <a href="/statutory-audit">statutory audits</a> and <a href="/statutory-audit-private-limited-company">statutory audits for private limited companies</a> across India, and assists with the <a href="/appointment-of-auditor">appointment of auditor</a> formalities.</p>
        </section>

        <section class="content-section" id="disclaimer">
            <h2>Important — How to Read This Estimate</h2>
            <p>This estimator is a planning aid, not a quotation, and not professional advice. Three points matter most:</p>
            <ul>
                <li><strong>The ICAI scale is recommendatory.</strong> It is a guideline issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> for general information, explicitly not binding. Members may charge more or less, and the actual fee is a matter of agreement.</li>
                <li><strong>The number excludes GST and expenses.</strong> GST is collected separately wherever applicable, and travelling time and out-of-pocket expenses are chargeable in addition.</li>
                <li><strong>Real fees vary widely.</strong> The same company can receive quotes that differ by several multiples depending on firm positioning, scope and risk appetite. A range is realistic; a single number is not.</li>
            </ul>
            <div class="callout warn">
                <p><strong>Note:</strong> The binding statutory audit fee for your company can only be determined after a scoping discussion and an engagement letter. Use this estimate to budget and to sense-check quotes, then confirm with a Chartered Accountant. For statutory audit applicability and related checks, see our <a href="/tools/caro-2020-self-assessment">CARO 2020 Self-Assessment</a> and <a href="/tools/ifc-framework-readiness">IFC Framework Readiness</a> tools, with audit oversight by the <a href="https://nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> and the law available via <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code</a>.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Want an Actual Statutory Audit Fee Quote?</h3>
    <p>Patron Accounting LLP gives fixed-fee statutory audit quotations tailored to scope — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Statutory%20Audit%20Fee%20Estimator.%20I%20need%20a%20statutory%20audit%20quote%20for%20my%20company.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=Statutory%20Audit%20Fee%20Estimator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20a%20statutory%20audit%20fee%20quote%20for%20my%20company.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
</div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Statutory Audit Fees</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the Statutory Audit Fee Estimator?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">It is a free tool that gives an indicative statutory audit fee range for an Indian company or LLP. You enter turnover band, entity type, city class and complexity factors, and it returns a low, base and high estimate anchored to the ICAI recommendatory minimum scale of fees. It is a planning aid, not a quotation.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How are statutory audit fees decided in India?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The ICAI Committee for Capacity Building of Members in Practice publishes a Revised Minimum Recommended Scale of Fees that varies by turnover, assignment type and city class. These figures are recommendatory only. The actual statutory audit fee is a matter of agreement between the auditor and the company, and depends on scope, complexity and time involved.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the ICAI recommended scale of fees mandatory?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The ICAI scale of fees is explicitly recommendatory and not binding law. Members are free to charge varying rates depending on the nature and complexity of the assignment and the time involved. Firms can and do quote below the recommended scale, particularly in tenders, and there is no direct penalty for charging less.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What factors increase a statutory audit fee?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Fees rise with turnover and transaction volume, group structure and consolidation, Ind AS reporting, multiple locations or branches, inventory-heavy or regulated operations, first-year audits, weak internal controls, and the reputation of the audit firm. Big Five firms typically carry a 100 to 500 percent premium over a small or medium practitioner's base fee.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the audit fee include GST and out-of-pocket expenses?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The ICAI scale figures are professional fees only. GST is collected separately wherever applicable, and office time spent in travelling plus out-of-pocket expenses are chargeable in addition. The estimates produced by this tool are professional fees before GST and reimbursable expenses.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What are Class A, B and C cities for audit fees?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">ICAI recommends fees separately for Class A, Class B and Class C cities. Class A cities are Delhi, Greater Mumbai, Kolkata, Chennai, Pune, Hyderabad, Bengaluru and Ahmedabad. Class B and Class C cover other smaller cities and towns, where recommended fees are progressively lower than Class A.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How much does a statutory audit cost for a small company?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">For a small private limited company with low turnover, the ICAI recommendatory base for a company audit starts in the lower lakh range in Class A cities and less in smaller cities, before any complexity or firm-reputation premium. Actual fees vary widely and are agreed case by case, so use the estimate as a starting reference only.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is a statutory audit mandatory for every company?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Every company registered under the Companies Act 2013, including private limited companies and One Person Companies, must have its accounts audited each financial year regardless of turnover. LLPs require a statutory audit only if turnover exceeds 40 lakh or contribution exceeds 25 lakh. The audit fee depends on size and complexity, not on whether the audit is optional.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Why do two firms quote very different audit fees?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Audit fees reflect firm reputation, audit methodology, team mix, technology and risk appetite, not just company size. A Big Five firm prices in a signalling premium of 100 to 500 percent over a small or medium practitioner, while a smaller firm may quote near or below the ICAI scale. Both can be legitimate; the difference is positioning and scope.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does this tool give a binding audit fee quote?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The estimate is indicative and for planning only. It is anchored to the ICAI recommendatory scale, which is a guideline, not a price. A binding statutory audit fee can only be set after a scoping discussion and engagement letter. Contact a Chartered Accountant for an actual quotation tailored to your company.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the tool store the figures I enter?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The Statutory Audit Fee Estimator runs entirely in your browser. The turnover, entity type, city class and complexity inputs you select are never transmitted to any server or stored anywhere. Refreshing the page clears all inputs, so you can estimate an indicative fee confidentially before approaching an auditor.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the Statutory Audit Fee Estimator free?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a planning aid for directors and finance teams budgeting for statutory audit. For an actual fixed-fee statutory audit quotation tailored to your company, our Chartered Accountants work with companies across India.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Want an Actual Audit Fee Quote?</h3>
            <p>Fixed-fee statutory audit quotation tailored to your company's size &amp; complexity.</p>
            <div class="brand-cta-stack">
                <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Statutory%20Audit%20Fee%20Estimator.%20I%20need%20a%20statutory%20audit%20quote%20for%20my%20company.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
                <a href="mailto:sales@patronaccounting.com?subject=Statutory%20Audit%20Fee%20Estimator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20a%20statutory%20audit%20fee%20quote%20for%20my%20company.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
            </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit Services <span class="arrow">→</span></a>
            <a href="/statutory-audit-private-limited-company" class="sidebar-link">Statutory Audit (Pvt Ltd) <span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit Service <span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit Service <span class="arrow">→</span></a>
            <a href="/appointment-of-auditor" class="sidebar-link">Appointment of Auditor <span class="arrow">→</span></a>
            <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Company Compliance <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/caro-2020-self-assessment" class="sidebar-link">CARO 2020 Self-Assessment <span class="arrow">→</span></a>
            <a href="/tools/ifc-framework-readiness" class="sidebar-link">IFC Framework Readiness <span class="arrow">→</span></a>
            <a href="/tools/schedule-iii-compliance-checker" class="sidebar-link">Schedule III Compliance Checker <span class="arrow">→</span></a>
            <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator <span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
            <a href="/first-year-statutory-audit-checklist" class="sidebar-link">First-Year Audit Checklist <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
    // Indicative ICAI-anchored base (Class A, SMP, private co) in INR, per turnover band index.
    // Deliberately conservative ranges; ICAI scale is recommendatory only.
    var BAND_BASE = [60000, 110000, 175000, 300000, 500000, 850000, 1250000];
    var BAND_LABEL = ["Up to ₹1 cr", "₹1–5 cr", "₹5–10 cr", "₹10–25 cr", "₹25–50 cr", "₹50–100 cr", "Above ₹100 cr"];

    var CITY_FACTOR = { A: 1.00, B: 0.80, C: 0.65 };
    var ENTITY_FACTOR = { small: 0.75, private: 1.00, public: 1.30, llp: 0.85 };
    var FIRM_FACTOR = { smp: 1.00, mid: 1.60, big: 3.50 };

    var FACTORS = [
        { id: "grp", label: "Group / consolidation (CFS)", w: 0.30 },
        { id: "indas", label: "Ind AS reporting", w: 0.20 },
        { id: "branch", label: "Multiple locations / branches", w: 0.20 },
        { id: "inv", label: "Inventory-heavy operations", w: 0.15 },
        { id: "first", label: "First-year audit", w: 0.15 },
        { id: "weak", label: "Weak internal controls", w: 0.15 },
        { id: "reg", label: "Regulated sector (NBFC, etc.)", w: 0.20 }
    ];

    (function buildFactors() {
        var list = document.getElementById('factorList');
        var html = '';
        for (var i = 0; i < FACTORS.length; i++) {
            html += '<div class="check-item" onclick="toggleFactor(this, event)">' +
                '<input type="checkbox" id="' + FACTORS[i].id + '" onclick="event.stopPropagation();syncFactor(this)">' +
                '<label for="' + FACTORS[i].id + '">' + FACTORS[i].label + '</label></div>';
        }
        list.innerHTML = html;
    })();

    function toggleFactor(div, e) {
        var cb = div.querySelector('input[type="checkbox"]');
        if (e && e.target === cb) return;
        cb.checked = !cb.checked;
        div.classList.toggle('checked', cb.checked);
    }
    function syncFactor(cb) {
        cb.closest('.check-item').classList.toggle('checked', cb.checked);
    }

    function inr(n) {
        n = Math.round(n / 1000) * 1000;
        return '₹' + n.toLocaleString('en-IN');
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

    function estimateFee() {
        var bandSel = document.getElementById('turnoverBand').value;
        var entity = document.getElementById('entityType').value;
        if (bandSel === '' || !entity) {
            alert('Please select turnover band and entity type.');
            return;
        }
        var band = parseInt(bandSel, 10);
        var city = document.getElementById('cityClass').value;
        var firm = document.getElementById('firmTier').value;

        var base = BAND_BASE[band];
        var cf = CITY_FACTOR[city];
        var ef = ENTITY_FACTOR[entity];
        var ff = FIRM_FACTOR[firm];

        var loading = 0;
        for (var i = 0; i < FACTORS.length; i++) {
            if (document.getElementById(FACTORS[i].id).checked) loading += FACTORS[i].w;
        }
        var complexityMult = 1 + loading;

        var point = base * cf * ef * ff * complexityMult;
        var low = point * 0.80;
        var high = point * 1.30;

        document.getElementById('estRange').textContent = inr(low) + ' – ' + inr(high);
        document.getElementById('estBase').textContent = inr(point);
        document.getElementById('resAnchor').textContent = inr(base);
        document.getElementById('resMult').textContent = complexityMult.toFixed(2) + '×';

        document.getElementById('bdAnchor').textContent = BAND_LABEL[band] + ' · ' + inr(base);
        document.getElementById('bdCity').textContent = 'Class ' + city + ' · ' + cf.toFixed(2) + '×';
        document.getElementById('bdFirm').textContent = ff.toFixed(2) + '×';
        document.getElementById('bdComplexity').textContent = '+' + Math.round(loading * 100) + '%';

        showResult();
    }

    function resetCalc() {
        document.getElementById('turnoverBand').value = '';
        document.getElementById('entityType').value = '';
        document.getElementById('cityClass').value = 'A';
        document.getElementById('firmTier').value = 'smp';
        for (var i = 0; i < FACTORS.length; i++) {
            var cb = document.getElementById(FACTORS[i].id);
            cb.checked = false;
            cb.closest('.check-item').classList.remove('checked');
        }
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