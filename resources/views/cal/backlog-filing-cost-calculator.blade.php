@extends('layouts.app')
@section('meta')
<title>Backlog Filing Cost Calculator | ROC Late Fee Tool 2026</title>
<meta name="description" content="Free backlog filing cost calculator: estimate total ROC cost to clear pending AOC-4 & MGT-7A filings, with CCFS-2026 90% late-fee waiver savings. Calculate now!">
<meta name="robots" content="index, follow">
<link rel="canonical" href="/tools/backlog-filing-cost-calculator">

<meta property="og:title" content="Backlog Filing Cost Calculator — ROC Late Fee Tool 2026">
<meta property="og:description" content="Estimate the total cost of clearing pending AOC-4 and MGT-7A ROC filings for a small company, including CCFS-2026 90% late-fee waiver savings.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/backlog-filing-cost-calculator">
<meta property="og:image" content="/tools/backlog-filing-cost-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="theme-color" content="#15365f">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Backlog Filing Cost Calculator — ROC Late Fee Tool 2026">
<meta name="twitter:description" content="Estimate the total cost of clearing pending AOC-4 and MGT-7A ROC filings, including CCFS-2026 90% late-fee waiver savings.">
<meta name="twitter:image" content="/tools/backlog-filing-cost-calculator-og.png">

<link rel="icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Backlog Filing Cost Calculator",
  "description": "The Backlog Filing Cost Calculator estimates the total Registrar of Companies cost for an Indian small company to clear pending AOC-4 and MGT-7A annual filings, computing normal filing fees by authorised capital slab plus the uncapped 100-rupee-per-day additional fee and the CCFS-2026 ninety percent late-fee waiver savings.",
  "url": "/tools/backlog-filing-cost-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "Backlog Filing Cost Calculator", "item": "/tools/backlog-filing-cost-calculator"}
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
      "name": "What is the Backlog Filing Cost Calculator?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is a free tool that estimates the total Registrar of Companies cost to clear a small company's backlog of pending annual filings. It adds the normal filing fee for AOC-4 and MGT-7A across each pending financial year, the uncapped 100-rupee-per-day additional fee for delay, and shows what you would pay under the CCFS-2026 ninety percent waiver."
      }
    },
    {
      "@type": "Question",
      "name": "How is the ROC late fee calculated for AOC-4 and MGT-7A?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Since 1 July 2018, the additional fee for delayed AOC-4 and MGT-7 or MGT-7A is a flat 100 rupees per day per form, counted from the day after the statutory due date until the date of actual filing. There is no upper cap, so multi-year backlogs compound quickly. The normal filing fee is separate and depends on authorised share capital."
      }
    },
    {
      "@type": "Question",
      "name": "What is the CCFS-2026 scheme?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Companies Compliance Facilitation Scheme 2026 is a one-time MCA amnesty notified by General Circular 01/2026. During the window of 15 April 2026 to 15 July 2026, eligible companies clearing pending annual filings pay only 10 percent of the accumulated additional fee, an effective 90 percent waiver, plus the normal filing fee. Verify eligibility before relying on it."
      }
    },
    {
      "@type": "Question",
      "name": "Which forms does a small company need to file annually?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every small company must file Form AOC-4 for financial statements and Form MGT-7A, the abridged annual return for one person and small companies, each financial year. AOC-4 is generally due within 30 days of the AGM and MGT-7A within 60 days. Even dormant or zero-revenue companies must file NIL returns to avoid daily additional fees."
      }
    },
    {
      "@type": "Question",
      "name": "What is the normal filing fee for AOC-4 and MGT-7A?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The normal fee follows authorised share capital slabs under the Companies (Registration Offices and Fees) Rules, 2014: 200 rupees up to 1 lakh, 300 for 1 to 5 lakh, 400 for 5 to 25 lakh, 500 for 25 lakh to 1 crore, and 600 above 1 crore, charged per form per year. The calculator applies the correct slab automatically."
      }
    },
    {
      "@type": "Question",
      "name": "Does the daily late fee really have no maximum cap?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Correct. For annual return and financial statement forms under sections 92 and 137, the 100-rupee-per-day additional fee has had no ceiling since July 2018. A three-year delay on a single form can exceed 1 lakh rupees in additional fees alone. This uncapped structure is the main reason CCFS-2026 offers significant relief for chronic non-filers."
      }
    },
    {
      "@type": "Question",
      "name": "Can a company that never filed since incorporation use CCFS-2026?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. CCFS-2026 applies regardless of how long filings have been overdue. A company incorporated several years ago that never filed annual returns or financial statements can clear all pending years within the scheme window by paying the normal fee plus only 10 percent of accumulated additional fees, subject to eligibility conditions in the circular."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if I do not clear the backlog?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Continued non-filing leads to additional fees accumulating daily without limit, the company being marked Active-non-compliant, director disqualification under section 164(2), and possible strike-off under section 248. Adjudication penalties under sections 92 and 137 can also apply, separate from filing fees. Clearing the backlog protects directors and the company's legal status."
      }
    },
    {
      "@type": "Question",
      "name": "Is CCFS-2026 available for all overdue forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The scheme primarily covers annual filings such as AOC-4, AOC-4 XBRL, AOC-4 CFS, MGT-7 and MGT-7A, along with certain other specified forms like ADT-1. Companies already issued a final strike-off notice or that have applied for voluntary strike-off may be excluded. Confirm form-level eligibility against the MCA circular before filing."
      }
    },
    {
      "@type": "Question",
      "name": "Does the calculator store my company data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The calculator runs entirely in your browser. The figures you enter, such as authorised capital and delay days, are never transmitted to any server or stored. Refreshing the page clears all inputs, so you can estimate backlog cost confidentially before engaging a professional or filing on the MCA portal."
      }
    },
    {
      "@type": "Question",
      "name": "Is the late fee counted from the AGM date or the due date?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The additional fee is counted from the day after the statutory due date of the form, not from the AGM date and not from any extended date unless the specific MCA notification says so. AOC-4 is generally due 30 days after the AGM and MGT-7A 60 days after. Always verify the exact due date applicable to your financial year."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Backlog Filing Cost Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a planning aid for founders and small companies assessing backlog exposure before CCFS-2026 closes. For exact figures and end-to-end backlog filing, our Chartered Accountants and Company Secretaries can verify and file on your behalf."
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
            margin-bottom: 24px;
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

        /* Toggle switch */
        .toggle-group {
            display: flex;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
            gap: 4px;
        }
        .toggle-btn {
            flex: 1;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            -webkit-tap-highlight-color: transparent;
        }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active {
            background: var(--card);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .txn-toggle {
            display: flex;
            gap: 4px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
        }
        .txn-btn {
            flex: 1;
            padding: 10px 12px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }
        .txn-btn * { pointer-events: none; }
        .txn-btn.active {
            background: var(--card);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
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
        .result-card.savings {
            background: var(--success);
            border-color: var(--success);
        }
        .result-card.savings .result-label,
        .result-card.savings .result-value { color: #fff; }

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

        /* Backlog table */
        .proj-table-wrap {
            margin-top: 20px;
            overflow-x: auto;
            border-radius: var(--radius);
            border: 1px solid var(--border);
        }
        .proj-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            min-width: 560px;
        }
        .proj-table thead th {
            background: var(--primary);
            color: #fff;
            padding: 12px 14px;
            text-align: right;
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .proj-table thead th:first-child { text-align: left; }
        .proj-table tbody td {
            padding: 11px 14px;
            border-bottom: 1px solid var(--border);
            color: var(--text-secondary);
            text-align: right;
            font-family: var(--font-mono);
            font-size: 13px;
        }
        .proj-table tbody td:first-child {
            text-align: left;
            font-family: var(--font-body);
            font-weight: 600;
            color: var(--text);
        }
        .proj-table tbody tr:nth-child(even) { background: var(--surface); }
        .proj-table tbody tr:last-child {
            background: var(--surface-alt);
            font-weight: 700;
        }

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
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#fee-structure">Fee Structure</a>
        <a href="#ccfs-2026">CCFS-2026 Scheme</a>
        <a href="#consequences">Consequences</a>
        <a href="#how-to-clear">How to Clear Backlog</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Backlog Filing Cost Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Backlog Filing Cost Calculator — <span>ROC Late Fee & CCFS-2026 Savings</span> for Small Companies</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">CCFS-2026 closes 15 July. <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Backlog%20Filing%20Cost%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=Backlog%20Filing%20Cost%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20clearing%20my%20company%27s%20pending%20ROC%20filings.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free calculator estimates what it will cost a small company to clear a backlog of pending AOC-4 and MGT-7A annual filings. It adds the normal ROC filing fee for every pending financial year, the uncapped ₹100-per-day additional fee for delay, and then shows your reduced liability under the CCFS-2026 amnesty (90% waiver of additional fees, window 15 April–15 July 2026). Built and reviewed by Chartered Accountants at Patron Accounting LLP, it runs entirely in your browser so your company data never leaves your device.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Estimate Your Backlog Filing Cost</h2>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript or use the manual formula in the Fee Structure section below.
                </div>
            </noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label for="authCapital">Authorised Share Capital (₹)</label>
                    <input type="text" inputmode="decimal" id="authCapital" placeholder="e.g. 10,00,000 or 1000000" autocomplete="off">
                    <div class="field-hint">In ₹ — commas allowed. Sets the fee slab.</div>
                </div>
                <div class="form-group">
                    <label for="pendingYears">Pending Financial Years</label>
                    <input type="number" id="pendingYears" placeholder="e.g. 3" min="1" max="15" step="1" value="3" autocomplete="off">
                    <div class="field-hint">Number of FYs not yet filed (1–15).</div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="avgDelay">Average Delay per Form (Days)</label>
                    <input type="number" id="avgDelay" placeholder="e.g. 400" min="1" max="5000" step="1" value="400" autocomplete="off">
                    <div class="field-hint">Avg days past due, averaged across all pending forms.</div>
                </div>
                <div class="form-group">
                    <label for="formsPerYear">Forms per Year</label>
                    <select id="formsPerYear">
                        <option value="2" selected>2 — AOC-4 + MGT-7A</option>
                        <option value="1">1 — Single form only</option>
                        <option value="3">3 — Incl. ADT-1 / other</option>
                    </select>
                    <div class="field-hint">Small companies usually file 2 annual forms.</div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Apply CCFS-2026 Waiver?</label>
                <div class="toggle-group" id="schemeToggle">
                    <button type="button" class="toggle-btn active" data-value="yes" onclick="setScheme(this)">
                        Yes — under scheme<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">10% additional fee</small>
                    </button>
                    <button type="button" class="toggle-btn" data-value="no" onclick="setScheme(this)">
                        No — normal rules<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">100% additional fee</small>
                    </button>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Backlog Cost</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Total Normal Filing Fee</div>
                        <div class="result-value" id="resNormal">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Additional Fee (Full)</div>
                        <div class="result-value" id="resAddlFull">—</div>
                    </div>
                    <div class="result-card highlight" style="grid-column: 1 / -1;">
                        <div class="result-label">Total Payable (Selected Basis)</div>
                        <div class="result-value" id="resTotal">—</div>
                    </div>
                    <div class="result-card savings" style="grid-column: 1 / -1;">
                        <div class="result-label">You Save Under CCFS-2026</div>
                        <div class="result-value" id="resSaving">—</div>
                    </div>
                </div>

                <div class="result-breakdown" id="breakdownSection">
                    <div class="breakdown-row">
                        <span class="breakdown-label">Normal fee per form (slab)</span>
                        <span class="breakdown-value" id="bdSlab">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Total forms across backlog</span>
                        <span class="breakdown-value" id="bdForms">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Additional fee per form (₹100/day)</span>
                        <span class="breakdown-value" id="bdAddlPer">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Cost without scheme</span>
                        <span class="breakdown-value" id="bdNoScheme">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Cost under CCFS-2026</span>
                        <span class="breakdown-value" id="bdScheme">—</span>
                    </div>
                </div>

                <div class="proj-table-wrap">
                    <table class="proj-table">
                        <thead>
                            <tr>
                                <th>Component</th>
                                <th>Without Scheme (₹)</th>
                                <th>Under CCFS-2026 (₹)</th>
                            </tr>
                        </thead>
                        <tbody id="projTableBody"></tbody>
                    </table>
                </div>

                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want a CA to verify this backlog cost and file under CCFS-2026?</div>
                    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — exact per-form day-count, eligibility check and end-to-end filing, no obligation.</div>
                    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Backlog%20Filing%20Cost%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=Backlog%20Filing%20Cost%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Backlog%20Filing%20Cost%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20my%20backlog%20cost%20and%20file%20under%20CCFS-2026.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Backlog Filing Cost Calculator</h2>
            <p>This tool is built for founders, directors and accountants of small companies who have missed one or more years of ROC annual filings and need to know the realistic cost of catching up — especially before the CCFS-2026 amnesty window closes.</p>
            <ol>
                <li><strong>Enter authorised share capital.</strong> This sets the normal filing fee slab under the Companies (Registration Offices and Fees) Rules, 2014. The calculator picks the correct slab automatically.</li>
                <li><strong>Enter the number of pending financial years.</strong> Count every FY for which AOC-4 and MGT-7A have not yet been filed.</li>
                <li><strong>Enter the average delay per form in days.</strong> Estimate the average number of days each form is past its statutory due date. Older years carry larger delays, so use a blended average.</li>
                <li><strong>Choose forms per year and the CCFS-2026 toggle, then Calculate.</strong> You will see the normal fee, the uncapped additional fee, the total under both bases, and the rupee saving the amnesty delivers.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> The exact delay differs for each form and year because AOC-4 and MGT-7A have different due dates. For a precise figure, a Chartered Accountant computes day-count per form from each year's actual AGM and due date. Use this tool for fast planning, then verify before filing.</p>
            </div>
        </section>

        <section class="content-section" id="fee-structure">
            <h2>ROC Fee Structure for Backlog Filings</h2>
            <p>The total cost of clearing a backlog has two distinct parts: the <strong>normal filing fee</strong> (a fixed amount per form per year, based on authorised capital) and the <strong>additional fee</strong> (a daily penalty for delay). Understanding both is essential before deciding how to clear pending filings.</p>

            <h3>Normal Filing Fee Slabs</h3>
            <p>Per the Companies (Registration Offices and Fees) Rules, 2014, the normal fee for forms such as AOC-4 and MGT-7A is charged per form per financial year on the following authorised share capital slabs:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Authorised Share Capital</th><th>Normal Fee per Form</th></tr>
                </thead>
                <tbody>
                    <tr><td>Less than ₹1,00,000</td><td>₹200</td></tr>
                    <tr><td>₹1,00,000 to ₹4,99,999</td><td>₹300</td></tr>
                    <tr><td>₹5,00,000 to ₹24,99,999</td><td>₹400</td></tr>
                    <tr><td>₹25,00,000 to ₹99,99,999</td><td>₹500</td></tr>
                    <tr><td>₹1,00,00,000 and above</td><td>₹600</td></tr>
                </tbody>
            </table>

            <h3>The Uncapped Additional Fee</h3>
            <p>Since 1 July 2018, the additional fee for delayed AOC-4 and MGT-7/MGT-7A is a flat <strong>₹100 per day per form</strong>, counted from the day after the statutory due date until actual filing. Crucially, for annual return and financial statement forms under sections 92 and 137, there is <strong>no maximum cap</strong> — the penalty accrues indefinitely.</p>
            <div class="formula-box">
                <span class="label">Additional Fee</span> = ₹100 × Days of Delay × Number of Forms<br><br>
                <span class="label">Example:</span> 3 FYs × 2 forms = 6 forms, avg 400 days delay<br>
                = ₹100 × 400 × 6<br>
                = <span class="label">₹2,40,000</span> additional fee (before any waiver)
            </div>
            <p>This is why a small company with two or three years of pending filings can face additional fees running into lakhs — far exceeding the few hundred rupees of normal fee. The full picture for backlog cost is set out by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> and the fee rules referenced on <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code</a>.</p>
        </section>

        <section class="content-section" id="ccfs-2026">
            <h2>CCFS-2026: The 90% Late-Fee Waiver Window</h2>
            <p>The Companies Compliance Facilitation Scheme 2026 (CCFS-2026) is a one-time amnesty notified by MCA General Circular No. 01/2026. It allows eligible defaulting companies to clear pending annual filings by paying the normal filing fee plus only <strong>10% of the accumulated additional fee</strong> — an effective 90% waiver on the daily penalty.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Particular</th><th>Detail</th></tr>
                </thead>
                <tbody>
                    <tr><td>Scheme</td><td>Companies Compliance Facilitation Scheme 2026</td></tr>
                    <tr><td>Authority</td><td>MCA General Circular No. 01/2026</td></tr>
                    <tr><td>Active window</td><td>15 April 2026 – 15 July 2026</td></tr>
                    <tr><td>Additional fee payable</td><td>10% of normal additional fee (90% waiver)</td></tr>
                    <tr><td>Covered forms</td><td>AOC-4, AOC-4 XBRL/CFS, MGT-7, MGT-7A, ADT-1 and other specified forms</td></tr>
                    <tr><td>Typical beneficiaries</td><td>Small companies, OPCs, startups, dormant companies</td></tr>
                </tbody>
            </table>
            <div class="callout warn">
                <p><strong>Note:</strong> The scheme excludes companies already issued a final strike-off notice or that have applied for voluntary strike-off or dormancy. The MCA circular contains no extension provision — after 15 July 2026, normal uncapped additional fees and stricter enforcement resume. Always confirm eligibility against the official circular on the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA portal</a> before relying on the waiver.</p>
            </div>
            <p>For chronic non-filers, the saving is dramatic: a company that has not filed MGT-7A for three consecutive years could owe over ₹1 lakh in additional fees per form under normal rules, but only around ₹10,000 per form under CCFS-2026. Founders preparing for fundraising or a clean exit are using this window as a compliance reset.</p>
        </section>

        <section class="content-section" id="consequences">
            <h2>Consequences of Not Clearing the Backlog</h2>
            <p>Ignoring pending ROC filings does not make them cheaper — the opposite is true, because the daily additional fee never stops. Beyond money, the legal consequences for the company and its directors are serious.</p>
            <h3>Director Disqualification</h3>
            <p>Under section 164(2) of the Companies Act 2013, directors of a company that fails to file financial statements or annual returns for three continuous financial years are disqualified and cannot be reappointed in that company or appointed in any other company for five years.</p>
            <h3>Strike-Off and Active-Non-Compliant Status</h3>
            <p>Persistent non-filing can lead the Registrar to mark the company "Active-non-compliant" and ultimately to strike it off the register under section 248, after which the company cannot legally operate. Restoration is a costly tribunal process. Background on the Registrar's role is published by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>, and professional standards for the certifying auditor are issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> and, for company secretaries, the <a href="https://www.icsi.edu/" target="_blank" rel="noopener">ICSI</a>.</p>
            <h3>Adjudication Penalties</h3>
            <p>Separate from filing fees, the ROC can initiate e-adjudication and levy statutory penalties under sections 92 and 137 on the company and officers in default. These are in addition to the additional fee and are not waived by simply paying the late fee.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> If directors are approaching the three-year threshold, prioritise filing immediately within the CCFS-2026 window — clearing the backlog before disqualification triggers protects directorships across all companies, not just this one.</p>
            </div>
        </section>

        <section class="content-section" id="how-to-clear">
            <h2>How to Clear a Filing Backlog Correctly</h2>
            <p>Catching up on multiple years of filings is sequence-sensitive. Forms must usually be filed in chronological order, financial statements must be properly prepared and audited, and version or financial-year mapping errors on the MCA21 portal commonly cause rejections that waste the scheme window.</p>
            <ol>
                <li><strong>Confirm pending years.</strong> Check company master data and the filing history on the MCA portal to identify exactly which AOC-4 and MGT-7A filings are missing.</li>
                <li><strong>Prepare and audit accounts.</strong> Each pending year needs finalised, audited financial statements before AOC-4 can be filed. This is the longest step for old backlogs.</li>
                <li><strong>Verify CCFS-2026 eligibility.</strong> Confirm the company is not excluded and that each form is covered before assuming the 90% waiver applies.</li>
                <li><strong>File in sequence and pay.</strong> File year by year, oldest first, paying the normal fee plus the reduced additional fee within the window.</li>
            </ol>
            <p>Because MGT-7 requires certification by a practising Company Secretary above a paid-up capital threshold and AOC-4 needs an auditor's sign-off, most multi-year backlogs are best handled by professionals familiar with CCFS-2026 procedures. Patron Accounting's team handles end-to-end backlog clearance — see our <a href="/private-limited-company-compliance">private limited company compliance</a> and <a href="/registrar-of-companies">Registrar of Companies (ROC) notice</a> services.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool gives a planning estimate, not a statutory computation. Actual additional fees depend on the exact due date and filing date of each individual form. Confirm the precise figure with a Chartered Accountant before paying on the MCA portal.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need Help Clearing Your ROC Filing Backlog?</h3>
    <p>Patron Accounting LLP files pending AOC-4 and MGT-7A end-to-end under CCFS-2026 — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Backlog%20Filing%20Cost%20Calculator.%20I%20need%20help%20clearing%20pending%20ROC%20filings%20under%20CCFS-2026.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=Backlog%20Filing%20Cost%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20clearing%20my%20company%27s%20pending%20ROC%20filings.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
</div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Backlog Filing Cost</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the Backlog Filing Cost Calculator?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">It is a free tool that estimates the total Registrar of Companies cost to clear a small company's backlog of pending annual filings. It adds the normal filing fee for AOC-4 and MGT-7A across each pending financial year, the uncapped 100-rupee-per-day additional fee for delay, and shows what you would pay under the CCFS-2026 ninety percent waiver.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How is the ROC late fee calculated for AOC-4 and MGT-7A?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Since 1 July 2018, the additional fee for delayed AOC-4 and MGT-7 or MGT-7A is a flat 100 rupees per day per form, counted from the day after the statutory due date until the date of actual filing. There is no upper cap, so multi-year backlogs compound quickly. The normal filing fee is separate and depends on authorised share capital.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the CCFS-2026 scheme?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The Companies Compliance Facilitation Scheme 2026 is a one-time MCA amnesty notified by General Circular 01/2026. During the window of 15 April 2026 to 15 July 2026, eligible companies clearing pending annual filings pay only 10 percent of the accumulated additional fee, an effective 90 percent waiver, plus the normal filing fee. Verify eligibility before relying on it.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Which forms does a small company need to file annually?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Every small company must file Form AOC-4 for financial statements and Form MGT-7A, the abridged annual return for one person and small companies, each financial year. AOC-4 is generally due within 30 days of the AGM and MGT-7A within 60 days. Even dormant or zero-revenue companies must file NIL returns to avoid daily additional fees.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the normal filing fee for AOC-4 and MGT-7A?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The normal fee follows authorised share capital slabs under the Companies (Registration Offices and Fees) Rules, 2014: 200 rupees up to 1 lakh, 300 for 1 to 5 lakh, 400 for 5 to 25 lakh, 500 for 25 lakh to 1 crore, and 600 above 1 crore, charged per form per year. The calculator applies the correct slab automatically.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the daily late fee really have no maximum cap?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Correct. For annual return and financial statement forms under sections 92 and 137, the 100-rupee-per-day additional fee has had no ceiling since July 2018. A three-year delay on a single form can exceed 1 lakh rupees in additional fees alone. This uncapped structure is the main reason CCFS-2026 offers significant relief for chronic non-filers.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can a company that never filed since incorporation use CCFS-2026?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. CCFS-2026 applies regardless of how long filings have been overdue. A company incorporated several years ago that never filed annual returns or financial statements can clear all pending years within the scheme window by paying the normal fee plus only 10 percent of accumulated additional fees, subject to eligibility conditions in the circular.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What happens if I do not clear the backlog?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Continued non-filing leads to additional fees accumulating daily without limit, the company being marked Active-non-compliant, director disqualification under section 164(2), and possible strike-off under section 248. Adjudication penalties under sections 92 and 137 can also apply, separate from filing fees. Clearing the backlog protects directors and the company's legal status.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is CCFS-2026 available for all overdue forms?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The scheme primarily covers annual filings such as AOC-4, AOC-4 XBRL, AOC-4 CFS, MGT-7 and MGT-7A, along with certain other specified forms like ADT-1. Companies already issued a final strike-off notice or that have applied for voluntary strike-off may be excluded. Confirm form-level eligibility against the MCA circular before filing.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the calculator store my company data?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The calculator runs entirely in your browser. The figures you enter, such as authorised capital and delay days, are never transmitted to any server or stored. Refreshing the page clears all inputs, so you can estimate backlog cost confidentially before engaging a professional or filing on the MCA portal.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the late fee counted from the AGM date or the due date?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The additional fee is counted from the day after the statutory due date of the form, not from the AGM date and not from any extended date unless the specific MCA notification says so. AOC-4 is generally due 30 days after the AGM and MGT-7A 60 days after. Always verify the exact due date applicable to your financial year.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the Backlog Filing Cost Calculator free?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a planning aid for founders and small companies assessing backlog exposure before CCFS-2026 closes. For exact figures and end-to-end backlog filing, our Chartered Accountants and Company Secretaries can verify and file on your behalf.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Clear Your ROC Backlog Before 15 July 2026</h3>
            <p>CAs and CS file pending AOC-4 & MGT-7A end-to-end under CCFS-2026 — fixed-fee.</p>
            <div class="brand-cta-stack">
                <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Backlog%20Filing%20Cost%20Calculator.%20I%20need%20help%20clearing%20pending%20ROC%20filings%20under%20CCFS-2026.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
                <a href="mailto:sales@patronaccounting.com?subject=Backlog%20Filing%20Cost%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20clearing%20my%20company%27s%20pending%20ROC%20filings.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
            </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Company Compliance <span class="arrow">→</span></a>
            <a href="/registrar-of-companies" class="sidebar-link">Registrar of Companies Notice <span class="arrow">→</span></a>
            <a href="/appointment-of-auditor" class="sidebar-link">Appointment of Auditor <span class="arrow">→</span></a>
            <a href="/director-kyc" class="sidebar-link">Director KYC <span class="arrow">→</span></a>
            <a href="/company-closure" class="sidebar-link">Company Closure <span class="arrow">→</span></a>
            <a href="/one-person-company-registration" class="sidebar-link">OPC Registration <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/roc-filing-due-date-calendar" class="sidebar-link">ROC Filing Due Date Calendar <span class="arrow">→</span></a>
            <a href="/tools/company-registration-cost-calculator" class="sidebar-link">Company Registration Cost Calculator <span class="arrow">→</span></a>
            <a href="/tools/dir-3-kyc-reminder" class="sidebar-link">DIR-3 KYC Reminder <span class="arrow">→</span></a>
            <a href="/tools/llp-compliance-checklist" class="sidebar-link">LLP Compliance Checklist <span class="arrow">→</span></a>
            <a href="/tools/business-structure-comparison" class="sidebar-link">Business Structure Comparison <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
            <a href="/blog/company-annual-filing-services-a-complete-guide-to-roc-filing-for-private-limited-companies-and-llps" class="sidebar-link">Company Annual Filing (ROC) Guide <span class="arrow">→</span></a>
            <a href="/blog/company-strike-off-fast-track-exit-procedure-for-closing-your-company" class="sidebar-link">Company Strike Off Procedure <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
    function parseINR(raw){
        if (raw === undefined || raw === null) return NaN;
        var cleaned = String(raw).replace(/[,\s₹]/g, '');
        if (cleaned === '') return NaN;
        var n = parseFloat(cleaned);
        return isFinite(n) ? n : NaN;
    }
    var currentScheme = 'yes';

    function setScheme(btn) {
        var el = btn.closest('.toggle-btn') || btn;
        currentScheme = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        el.classList.add('active');
    }

    function formatCurrency(num) {
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }

    function slabFee(capital) {
        if (capital < 100000) return 200;
        if (capital < 500000) return 300;
        if (capital < 2500000) return 400;
        if (capital < 10000000) return 500;
        return 600;
    }

    function calculate() {
        var cap = parseINR(document.getElementById('authCapital').value);
        var years = parseInt(String(document.getElementById('pendingYears').value).replace(/[,\s]/g,''), 10);
        var delay = parseINR(document.getElementById('avgDelay').value);
        var fpy = parseInt(document.getElementById('formsPerYear').value, 10);

        if (isNaN(cap) || cap < 0) { alert('Please enter a valid authorised share capital.'); return; }
        if (isNaN(years) || years < 1 || years > 15) { alert('Pending financial years must be between 1 and 15.'); return; }
        if (isNaN(delay) || delay < 1) { alert('Please enter a valid average delay in days.'); return; }
        if (isNaN(fpy) || fpy < 1) fpy = 2;

        var perForm = slabFee(cap);
        var totalForms = years * fpy;
        var totalNormal = perForm * totalForms;
        var addlPerForm = 100 * delay;
        var addlFull = addlPerForm * totalForms;
        var addlScheme = addlFull * 0.10;

        var costNoScheme = totalNormal + addlFull;
        var costScheme = totalNormal + addlScheme;
        var saving = costNoScheme - costScheme;

        var selectedTotal = (currentScheme === 'yes') ? costScheme : costNoScheme;

        document.getElementById('resNormal').textContent = formatCurrency(totalNormal);
        document.getElementById('resAddlFull').textContent = formatCurrency(addlFull);
        document.getElementById('resTotal').textContent = formatCurrency(selectedTotal);
        document.getElementById('resSaving').textContent = formatCurrency(saving);

        document.getElementById('bdSlab').textContent = formatCurrency(perForm);
        document.getElementById('bdForms').textContent = totalForms + ' forms';
        document.getElementById('bdAddlPer').textContent = formatCurrency(addlPerForm);
        document.getElementById('bdNoScheme').textContent = formatCurrency(costNoScheme);
        document.getElementById('bdScheme').textContent = formatCurrency(costScheme);

        var rows = [
            ['Normal filing fee', totalNormal, totalNormal],
            ['Additional fee (₹100/day)', addlFull, addlScheme],
            ['Total payable', costNoScheme, costScheme]
        ];
        var tbody = document.getElementById('projTableBody');
        tbody.innerHTML = '';
        rows.forEach(function(r) {
            var tr = document.createElement('tr');
            tr.innerHTML = '<td>' + r[0] + '</td><td>' + formatCurrency(r[1]) + '</td><td>' + formatCurrency(r[2]) + '</td>';
            tbody.appendChild(tr);
        });

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        requestAnimationFrame(function(){
            requestAnimationFrame(function(){
                rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            });
        });
    }

    function resetCalc() {
        document.getElementById('authCapital').value = '';
        document.getElementById('pendingYears').value = '3';
        document.getElementById('avgDelay').value = '400';
        document.getElementById('formsPerYear').value = '2';
        currentScheme = 'yes';
        var tg = document.getElementById('schemeToggle');
        tg.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        tg.querySelector('[data-value="yes"]').classList.add('active');
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

    ['authCapital','pendingYears','avgDelay'].forEach(function(id){
        var el = document.getElementById(id);
        if (el) el.addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });
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
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> — get your taxes filed accurately by CAs.</span>
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