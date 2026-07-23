@extends('layouts.app')
@section('meta')
    <title>AIS Reconciliation Tool | Match AIS, 26AS & Bank 2026</title>
    <meta name="description" content="Free AIS reconciliation tool: match AIS, Form 26AS and bank records to flag mismatches before ITR filing for AY 2026-27. Avoid notices. Reconcile now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ais-reconciliation-tool">

    <!-- Open Graph -->
    <meta property="og:title" content="AIS Reconciliation Tool — Match AIS, 26AS & Bank Records">
    <meta property="og:description" content="Match your Annual Information Statement, Form 26AS, and bank records side by side to catch ITR mismatches before they trigger Section 143(1) notices.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/ais-reconciliation-tool">
    <meta property="og:image" content="/tools/og/ais-reconciliation-tool.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AIS Reconciliation Tool — Match AIS, 26AS & Bank Records">
    <meta name="twitter:description" content="Match your Annual Information Statement, Form 26AS, and bank records side by side to catch ITR mismatches before they trigger notices.">
    <meta name="twitter:image" content="/tools/og/ais-reconciliation-tool.png">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

@endsection
@section('schema')
    <!-- Schema: WebApplication -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "AIS Reconciliation Tool",
      "description": "AIS Reconciliation Tool compares your Annual Information Statement (AIS), Form 26AS, and bank or broker records side by side, flags mismatches, and generates an action checklist before you file your Income Tax Return for AY 2026-27.",
      "url": "/tools/ais-reconciliation-tool",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Any",
      "inLanguage": "en-IN",
      "isAccessibleForFree": true,
      "datePublished": "2026-05-06T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
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
      "provider": {
        "@id": "/#organization"
      }
    }
    </script>

    <!-- Schema: BreadcrumbList -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "AIS Reconciliation Tool", "item": "/tools/ais-reconciliation-tool"}
      ]
    }
    </script>

    <!-- Schema: FAQPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is AIS reconciliation and why is it important before filing ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AIS reconciliation is the process of matching the Annual Information Statement on the Income Tax portal with Form 26AS and your own bank, broker, and salary records. It is critical because the department auto-processes returns under Section 143(1) by comparing your declared income against AIS data. Any mismatch can trigger an intimation, additional demand, defective return notice, or scrutiny."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between AIS, Form 26AS and TIS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 26AS is now limited to TDS, TCS, advance tax, and refund credits linked to your PAN. AIS is a wider statement covering interest, dividends, securities trades, property transactions, foreign remittances, and SFT entries. TIS is the Taxpayer Information Summary, an aggregated category-wise total derived from AIS that is used to pre-fill your ITR."
          }
        },
        {
          "@type": "Question",
          "name": "Will Form 26AS still apply for FY 2025-26 ITR filing in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. For FY 2025-26 (Assessment Year 2026-27) returns filed in 2026, you will still see Form 26AS and AIS under the Income Tax Act 1961. Form 168 replaces Form 26AS only for Tax Year 2026-27 onwards (income from 1 April 2026). Pre-1 April 2026 proceedings continue under the old Act, forms, and nomenclature."
          }
        },
        {
          "@type": "Question",
          "name": "How do I download AIS, Form 26AS and TIS from the Income Tax portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log in to incometax.gov.in. To get AIS and TIS, go to Services then Annual Information Statement and click Proceed. To get Form 26AS, go to e-File then Income Tax Returns and click View Form 26AS, which redirects to the TRACES portal. AIS can be downloaded as PDF, JSON, or CSV. Form 26AS export is available as PDF or HTML."
          }
        },
        {
          "@type": "Question",
          "name": "What should I do if AIS shows income I never received?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Open the AIS section on the e-filing portal, locate the disputed transaction, and click Give Feedback. Mark it as Information is incorrect, Information relates to other PAN, Information is duplicate, or Income is not taxable, as applicable. Attach supporting documents and keep a screenshot of the feedback acknowledgement. The reporting source is notified and TIS updates automatically once processed."
          }
        },
        {
          "@type": "Question",
          "name": "What if my bank or broker records show more income than AIS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Always declare income based on your own books and supporting documents, not on AIS alone. The Income Tax Department itself states AIS may not contain every item relevant to you. Under-reporting carries penalties up to 200 percent under Section 270A. If AIS understates your income, simply file the ITR with the higher figure backed by bank statements or contract notes."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim TDS that appears in AIS but is missing from Form 26AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The portal restricts TDS credit in your ITR to amounts reflected in Form 26AS. If TDS is in AIS but missing from Form 26AS, contact the deductor and ask them to file a revised TDS return with your correct PAN. Once the revised return is processed by CPC, the credit will appear in Form 26AS and you can claim it in your ITR."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I file my ITR without reconciling AIS first?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CPC processes every return under Section 143(1) by matching declared income against AIS. If AIS shows higher income, you will receive an intimation adjusting your tax demand. Persistent mismatches can escalate to a defective return notice under Section 139(9), reassessment under Section 148, or full scrutiny under Section 143(3). Refunds are also withheld until mismatches are resolved."
          }
        },
        {
          "@type": "Question",
          "name": "How long does AIS feedback take to process?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no fixed timeline. In practice, simple feedback such as duplicate entries or wrong PAN takes two to four weeks to reflect in TIS. Disputes that require the source entity, such as a bank or registrar, to revise its filing can take six to eight weeks. Always start reconciliation at least three to four weeks before your ITR due date to allow time for corrections."
          }
        },
        {
          "@type": "Question",
          "name": "Can I rectify my ITR after filing if I missed AIS reconciliation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can file a revised return under Section 139(5) before 31 December 2026 for AY 2026-27, or an updated return (ITR-U) under Section 139(8A) within 48 months of the relevant assessment year on payment of additional tax. For arithmetic errors only, a Section 154 rectification is available. Filing voluntarily before a notice issues reduces penalty exposure significantly."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form 168 and when does it apply?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 168 is the new Annual Tax Statement notified under the Income Tax Rules 2026, replacing Form 26AS under the Income Tax Act 2025. It applies from 1 April 2026 for Tax Year 2026-27 onwards. Form 16 also becomes Form 130, and Form 16A becomes Form 131. Existing forms continue for FY 2025-26 returns and all earlier proceedings under transitional provisions."
          }
        },
        {
          "@type": "Question",
          "name": "Does the Income Tax Department use AIS for Section 143(1) auto-processing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. CPC Bengaluru runs every return through automated comparison against AIS, TIS, and Form 26AS. Any income reflected in AIS but not declared in your ITR triggers a prima facie adjustment under Section 143(1)(a). You receive an intimation with a 30-day window to respond. Failure to respond leads to a final order with tax demand, interest, and possible Section 270A penalty."
          }
        },
        {
          "@type": "Question",
          "name": "Does this AIS Reconciliation Tool store or transmit my financial data?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The tool runs entirely in your browser. No values you enter are sent to any server, saved to a database, or shared with third parties. The page contains no analytics on form fields. Once you close the tab, all data is cleared. You can run it offline after the page loads. For maximum privacy, use private or incognito browsing mode."
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
        .calc-intro {
            font-size: 14px;
            color: var(--text-secondary);
            margin-bottom: 24px;
            line-height: 1.65;
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
            font-size: 16px;
            font-weight: 700;
        }
        .form-group input:disabled {
            background: var(--surface-alt);
            color: var(--text-muted);
            cursor: not-allowed;
        }

        /* ====== RECONCILIATION TABLE (custom) ====== */
        .recon-wrapper {
            margin: 0 -8px 24px;
        }
        .recon-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 14px;
            min-width: 720px;
        }
        .recon-scroll {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin: 0 -8px;
            padding: 0 8px 8px;
        }
        .recon-table thead th {
            background: var(--primary-dark);
            color: #fff;
            padding: 12px 14px;
            text-align: left;
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            position: sticky;
            top: 0;
        }
        .recon-table thead th:first-child { border-radius: var(--radius) 0 0 0; min-width: 160px; }
        .recon-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .recon-table tbody tr:nth-child(even) td { background: var(--surface); }
        .recon-table tbody td {
            padding: 10px 12px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }
        .recon-table .cat-cell {
            font-weight: 600;
            color: var(--text);
            font-size: 13px;
        }
        .recon-table .cat-cell .cat-help {
            display: block;
            font-size: 11px;
            font-weight: 400;
            color: var(--text-muted);
            margin-top: 2px;
            line-height: 1.4;
        }
        .recon-table input[type="number"] {
            width: 100%;
            padding: 8px 10px;
            border: 1.5px solid var(--border);
            border-radius: 8px;
            font-family: var(--font-mono);
            font-size: 14px;
            font-weight: 700;
            color: var(--text);
            background: var(--card);
            transition: border-color 0.2s;
            -moz-appearance: textfield;
        }
        .recon-table input[type="number"]:focus {
            border-color: var(--primary);
        }
        .recon-table input[type="number"]:disabled {
            background: var(--surface-alt);
            color: var(--text-muted);
            cursor: not-allowed;
        }
        .recon-table input[type="number"]::-webkit-outer-spin-button,
        .recon-table input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .status-pill {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            min-width: 80px;
            text-align: center;
        }
        .status-pill.empty { background: var(--surface-alt); color: var(--text-muted); }
        .status-pill.match { background: #D1FAE5; color: #065F46; }
        .status-pill.investigate { background: #FEE2E2; color: #991B1B; }
        .status-pill.declare { background: #FEF3C7; color: #92400E; }
        .status-pill.tds-issue { background: #FEE2E2; color: #991B1B; }

        .tolerance-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 12px 16px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .tolerance-row label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin: 0;
            text-transform: none;
            letter-spacing: 0;
        }
        .tolerance-row input {
            width: 120px;
            padding: 8px 12px;
            border: 1.5px solid var(--border);
            border-radius: 8px;
            font-family: var(--font-mono);
            font-size: 14px;
            font-weight: 700;
            color: var(--text);
            background: var(--card);
            }

        .upload-section {
            background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%);
            border: 1px solid #BFDBFE;
            border-radius: var(--radius);
            padding: 16px 20px;
            margin-bottom: 16px;
        }
        .upload-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 8px;
        }
        .upload-header strong {
            font-size: 14px;
            color: #1E3A8A;
            display: block;
        }
        .upload-hint {
            display: block;
            font-size: 12px;
            color: #3B82F6;
            margin-top: 2px;
        }
        .upload-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        .btn-sample, .btn-upload {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border: 1.5px solid #3B82F6;
            border-radius: 8px;
            background: #fff;
            color: #1E40AF;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            -webkit-tap-highlight-color: transparent;
        }
        .btn-sample:hover, .btn-upload:hover {
            background: #1E40AF;
            color: #fff;
        }
        .upload-status {
            font-size: 13px;
            font-weight: 500;
            min-height: 20px;
            margin-top: 6px;
        }
        .upload-status.success { color: #065F46; }
        .upload-status.error { color: #991B1B; }
        .upload-format {
            margin-top: 10px;
            font-size: 12px;
            color: #1E40AF;
        }
        .upload-format summary {
            cursor: pointer;
            font-weight: 600;
            color: #1E40AF;
            padding: 4px 0;
        }
        .upload-format p { margin: 8px 0 6px; line-height: 1.5; }
        .upload-format code {
            background: #fff;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: var(--font-mono);
            font-size: 11px;
            color: #1E3A8A;
        }
        .csv-example {
            background: #fff;
            border: 1px solid #BFDBFE;
            border-radius: 6px;
            padding: 10px 12px;
            font-family: var(--font-mono);
            font-size: 11px;
            color: #1E3A8A;
            overflow-x: auto;
            white-space: pre;
            margin-top: 6px;
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
            .result-grid { grid-template-columns: 1fr 1fr 1fr; }
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
        .result-card.danger {
            background: #FEE2E2;
            border-color: #FCA5A5;
        }
        .result-card.danger .result-label { color: #991B1B; }
        .result-card.danger .result-value { color: #991B1B; }
        .result-card.success {
            background: #D1FAE5;
            border-color: #6EE7B7;
        }
        .result-card.success .result-label { color: #065F46; }
        .result-card.success .result-value { color: #065F46; }

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

        .action-checklist {
            margin-top: 20px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 20px 24px;
        }
        .action-checklist h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 12px;
        }
        .action-checklist ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .action-checklist li {
            padding: 10px 0 10px 32px;
            position: relative;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.6;
            border-bottom: 1px dashed var(--border);
        }
        .action-checklist li:last-child { border-bottom: none; }
        .action-checklist li::before {
            content: "→";
            position: absolute;
            left: 8px;
            top: 10px;
            color: var(--accent);
            font-weight: 700;
        }
        .action-checklist li strong { color: var(--text); font-weight: 700; }
        .action-checklist .empty-state {
            padding: 12px 0;
            color: var(--success);
            font-weight: 600;
            font-size: 14px;
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
            margin: 8px 0 16px 24px;
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
        .formula-box .label {
            color: var(--accent-light);
            font-weight: 700;
        }

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
            transition: max-height 0.4s ease, padding 0.4s ease;
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

        .body-cta {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 32px;
            margin: 28px 0;
            text-align: center;
        }
        .body-cta h3 {
            color: #fff;
            font-size: 22px;
            margin-bottom: 10px;
        }
        .body-cta p {
            font-size: 15px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 20px;
            line-height: 1.65;
        }

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
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
        }
    
/* === PATRON CTA SYSTEM (4-placement architecture) === */
.brand-cta-bar { background: #FFEDD5; border-top: 1px solid #FED7AA; border-bottom: 1px solid #FED7AA; padding: 14px 20px; }
.brand-cta-bar-inner { max-width: 1200px; margin: 0 auto; display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
.brand-cta-bar-text { flex: 1 1 320px; font-size: 14px; color: var(--text); line-height: 1.45; }
.brand-cta-bar-text strong { color: var(--text); font-weight: 700; }
.brand-cta-bar-actions { display: flex; gap: 10px; flex-wrap: wrap; }
.brand-cta-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 11px 18px; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 700; text-decoration: none; border: 0; cursor: pointer; transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.2s ease; -webkit-tap-highlight-color: transparent; touch-action: manipulation; white-space: nowrap; line-height: 1.2; min-height: 44px; }
.brand-cta-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.12); }
.brand-cta-btn:active { transform: translateY(0); }
.brand-cta-btn .ico { width: 16px; height: 16px; flex-shrink: 0; }
.brand-cta-btn-call { background: var(--accent); color: #fff; }
.brand-cta-btn-call:hover { background: var(--accent-light); color: #fff; }
.brand-cta-btn-wa { background: #25D366; color: #fff; }
.brand-cta-btn-wa:hover { background: #1FB855; color: #fff; }
.brand-cta-btn-email { background: #fff; color: var(--text); border: 1px solid #E5D6C5; }
.brand-cta-btn-email:hover { background: #FAFAF8; color: var(--text); }
.brand-cta-stack { display: flex; flex-direction: column; gap: 8px; }
.brand-cta-stack .brand-cta-btn { width: 100%; }
.body-cta .brand-cta-bar-actions { justify-content: center; margin-top: 4px; }
.body-cta .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.body-cta .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }
.cta-card .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.cta-card .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }
.post-result-cta { background: #FFF7ED; border: 1px solid #FED7AA; border-left: 4px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin: 20px 0 4px; }
.post-result-cta-head { font-size: 15px; font-weight: 700; color: var(--text); margin-bottom: 4px; line-height: 1.4; }
.post-result-cta-sub { font-size: 13px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.55; }
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

@media (max-width: 767px) {
    .brand-cta-bar { padding: 12px 14px; }
    .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
    .brand-cta-bar-actions { width: 100%; gap: 8px; }
    .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; min-height: 44px; }
    .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta { padding: 16px; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* === A11y: visible keyboard focus rings (WCAG 2.4.7) — replaces removed focus-suppression === */
.form-group input:focus-visible, .form-group select:focus-visible { outline: 2px solid var(--primary-light); outline-offset: 2px; border-color: var(--primary-light); }
.brand-cta-btn:focus-visible, .cta-btn:focus-visible, button.faq-question:focus-visible, .toc-nav a:focus-visible, .sidebar-link:focus-visible, .breadcrumb a:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }

/* === A11y: reduced-motion (WCAG 2.3.3) === */
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important; }
}

/* === Print stylesheet (calculator working-paper output) === */
@media print {
    .toc-nav, .breadcrumb, .brand-cta-bar, .post-result-cta, .body-cta, .cta-card, .sidebar-card, .sidebar-col, .office-strip, .footer { display: none !important; }
    body { background: #fff !important; color: #000 !important; }
    .main-layout { display: block !important; }
    .content-col { width: 100% !important; max-width: none !important; }
    a { color: #000 !important; text-decoration: underline; }
    .calc-card, .result-section, .result-card, .working-paper, .formula-box { box-shadow: none !important; border: 1px solid #ccc !important; page-break-inside: avoid; }
}

/* === Office strip (Phase 5 — was missing from all 10 tools) === */
.office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
.office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
.office-strip .trust { color: var(--accent); font-weight: 600; }

/* === Mobile tap reliability — addresses keyboard-open + tap quirks on iOS Quick Look + reduces 300ms tap-delay === */
button, .toggle-btn, .toggle-btn.active, .faq-question, .sidebar-link, .toc-nav a, .breadcrumb a,
.cta-btn, .brand-cta-btn, .btn-calculate, .btn-recompute, .btn-reset, .btn-restart, .btn-back, .btn-next,
.option-btn, .next-btn, .reset-btn { touch-action: manipulation; -webkit-tap-highlight-color: rgba(0,0,0,0.05); }
/* Ensure no accidental ancestor blocks pointer events on toggle/faq containers */
.toggle-group, .toggle-btn, .faq-item, .faq-question { pointer-events: auto; }

/* === Responsive table wrapper (fix mobile horizontal overflow on schedule/rate/recon tables) === */
.table-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; max-width: 100%; margin: 16px 0; border-radius: var(--radius); }
.table-scroll > table { margin: 0; }
@media (max-width: 767px) {
    .table-scroll { box-shadow: inset -10px 0 8px -10px rgba(0,0,0,0.15); border: 1px solid var(--border); }
    .schedule-table, .rate-table, .recon-table { font-size: 12px; min-width: 480px; }
    .schedule-table thead th, .rate-table thead th, .recon-table thead th,
    .schedule-table tbody td, .rate-table tbody td, .recon-table tbody td { padding: 8px 10px; }
}
    </style>
@section('content')

<!-- Sticky TOC Nav -->
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Reconciliation Tool</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#explained">AIS vs 26AS vs TIS</a>
        <a href="#mismatches">Common Mismatches</a>
        <a href="#form-168">Form 168 Update</a>
        <a href="#feedback">AIS Feedback</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    AIS Reconciliation Tool
</nav>

<!-- Hero -->
<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>AIS Reconciliation Tool — Match <span>AIS, Form 26AS & Bank Records</span> Before You File ITR</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Mismatch in AIS or 26AS? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20AIS%20Reconciliation%20Tool.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=AIS%20Reconciliation%20Tool%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20AIS%20Reconciliation%20Tool.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20AIS%20%2F%2026AS%20reconciliation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<!-- TL;DR -->
<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Match your <strong>Annual Information Statement (AIS)</strong>, <strong>Form 26AS</strong>, and <strong>your own bank or broker records</strong> across eight income heads — salary, bank interest, dividend, capital gains, rent, professional receipts, and more. The tool flags every mismatch above your tolerance threshold and generates an action checklist before you file your ITR for AY 2026-27. Runs entirely in your browser. Built and reviewed by Chartered Accountants at Patron Accounting LLP.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <!-- Calculator Card -->
        <div class="calc-card">
            <h2>AIS &harr; Form 26AS &harr; Your Records Worksheet</h2>
            <p class="calc-intro">Enter the values for each income head from the three sources. Leave a cell blank if not applicable. The tool flags rows where the gap exceeds your tolerance threshold.</p>

            <noscript>
                <div class="noscript-box">This reconciliation tool requires JavaScript. Please enable JavaScript in your browser, or download AIS, Form 26AS, and your records and reconcile manually using the guidance below.</div>
            </noscript>

            <div class="upload-section">
                <div class="upload-header">
                    <div>
                        <strong>Quick Fill — Upload CSV</strong>
                        <span class="upload-hint">Save typing for users with many AIS line items. Upload a CSV in the documented format.</span>
                    </div>
                    <div class="upload-actions">
                        <button type="button" class="btn-sample" onclick="downloadSampleCSV()" aria-label="Download sample CSV file">↓ Sample CSV</button>
                        <label class="btn-upload">
                            <input type="file" id="csvUpload" accept=".csv,text/csv" onchange="handleCSVUpload(event)" hidden>
                            ↑ Upload CSV
                        </label>
                    </div>
                </div>
                <div class="upload-status" id="uploadStatus" role="status" aria-live="polite"></div>
                <details class="upload-format">
                    <summary>CSV format reference</summary>
                    <p>Headers (first row): <code>category,ais,form26as,records</code></p>
                    <p>Categories (one row each): <code>salary</code>, <code>savings</code>, <code>fd_rd</code>, <code>dividend</code>, <code>capgains</code>, <code>rent</code>, <code>professional</code>, <code>other</code>. Use empty cells for "N/A" (savings and capgains have no Form 26AS column). Amounts in rupees, no commas, no ₹ symbol.</p>
                    <pre class="csv-example">category,ais,form26as,records
salary,1500000,1500000,1500000
savings,25000,,25000
fd_rd,80000,80000,80000
dividend,15000,0,15000
capgains,200000,,200000
rent,360000,360000,360000
professional,800000,800000,800000
other,5000,0,5000</pre>
                </details>
            </div>

            <div class="tolerance-row">
                <label for="tolerance">Tolerance threshold (₹) — gaps below this are treated as a match (rounding noise):</label>
                <input type="text" autocomplete="off" inputmode="decimal" id="tolerance" value="100" aria-label="Tolerance threshold in rupees">
            </div>

            <div class="recon-scroll">
                <div class="table-scroll"><table class="recon-table" id="reconTable">
                    <thead>
                        <tr>
                            <th>Income Head</th>
                            <th>AIS Reported (₹)</th>
                            <th>Form 26AS (₹) — TDS only</th>
                            <th>Your Records (₹)</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-cat="salary" data-tds="1">
                            <td class="cat-cell">Salary Income<span class="cat-help">Gross salary; TDS u/s 192 in Form 26AS</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="form26-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                        <tr data-cat="savings" data-tds="0">
                            <td class="cat-cell">Interest — Savings Bank<span class="cat-help">Interest credited; usually no TDS (covered by 80TTA/80TTB)</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" autocomplete="off" inputmode="decimal" class="form26-in" placeholder="N/A" disabled></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                        <tr data-cat="fd_rd" data-tds="1">
                            <td class="cat-cell">Interest — Fixed & Recurring Deposits<span class="cat-help">FD/RD interest; TDS u/s 194A above ₹40k (₹50k for senior citizens)</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="form26-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                        <tr data-cat="dividend" data-tds="1">
                            <td class="cat-cell">Dividend Income<span class="cat-help">From shares and mutual funds; TDS u/s 194 above ₹10k per company</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="form26-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                        <tr data-cat="capgains" data-tds="0">
                            <td class="cat-cell">Capital Gains — Securities<span class="cat-help">Equity, MF, bonds (LTCG + STCG combined); STT replaces TDS</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" autocomplete="off" inputmode="decimal" class="form26-in" placeholder="N/A" disabled></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                        <tr data-cat="rent" data-tds="1">
                            <td class="cat-cell">Rental Income<span class="cat-help">Property let-out; TDS u/s 194I (5%) or 194IB (5% above ₹50k/month)</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="form26-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                        <tr data-cat="professional" data-tds="1">
                            <td class="cat-cell">Professional / Business Receipts<span class="cat-help">Freelance fees, consultancy; TDS u/s 194J / 194C</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="form26-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                        <tr data-cat="other" data-tds="0">
                            <td class="cat-cell">Other (Property Sale, Foreign Remittance, Lottery)<span class="cat-help">SFT entries, property u/s 194IA, foreign remittance LRS</span></td>
                            <td><input type="text" class="ais-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="form26-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><input type="text" class="rec-in" placeholder="0" autocomplete="off" inputmode="decimal"></td>
                            <td><span class="status-pill empty">—</span></td>
                        </tr>
                    </tbody>
                </table></div>
            </div>

            <div class="action-bar" style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-top: 16px;">
                <button class="btn-calculate" onclick="reconcile()">Reconcile & Show Action Checklist</button>
                <button class="btn-reset" onclick="resetCalc()" style="margin-top: 0;">↺ Reset Worksheet</button>
            </div>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card" id="cardMatched">
                        <div class="result-label">Heads Matched</div>
                        <div class="result-value" id="resMatched">—</div>
                    </div>
                    <div class="result-card" id="cardMismatch">
                        <div class="result-label">Heads with Mismatches</div>
                        <div class="result-value" id="resMismatch">—</div>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">Net Mismatch (₹)</div>
                        <div class="result-value" id="resTotal">—</div>
                    </div>
                </div>
                <div class="action-checklist">
                    <h3>Your Action Checklist</h3>
                    <ul id="actionList"></ul>
                </div>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — AIS Reconciliation Tool validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20AIS%20Reconciliation%20Tool.%20Please%20review%20my%20matched%2Fmismatched%20entries%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=AIS%20Reconciliation%20Tool%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20AIS%20Reconciliation%20Tool%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20AIS%20%2F%2026AS%20reconciliation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <!-- How to Use -->
        <section class="content-section" id="how-to-use">
            <h2>How to Use the AIS Reconciliation Tool</h2>
            <p>Reconciling your AIS, Form 26AS, and personal records before filing your <a href="/income-tax-return">Income Tax Return</a> is the single most effective way to avoid an automated Section 143(1) intimation. The process takes 30–45 minutes if your records are organised. Follow these six steps:</p>
            <ol>
                <li><strong>Download AIS, TIS, and Form 26AS</strong> from the e-filing portal at <a href="https://www.incometax.gov.in/iec/foportal/" target="_blank" rel="noopener">incometax.gov.in</a>. Choose JSON or CSV for AIS so you can search transactions quickly. Form 26AS is downloaded from TRACES via the same portal.</li>
                <li><strong>Open your supporting documents.</strong> Form 16 (salary), Form 16A (non-salary TDS), bank statements for every account linked to your PAN — even dormant ones — broker contract notes, mutual fund statements, and property registration deeds.</li>
                <li><strong>Aggregate by income head.</strong> For each of the eight categories in the worksheet above, sum up the value reported in AIS, the TDS reflected in Form 26AS, and the figure as per your own records. Match the financial year to FY 2025-26 (1 April 2025 to 31 March 2026).</li>
                <li><strong>Set your tolerance.</strong> The default ₹100 absorbs rounding differences. Reduce to ₹10 if you want a strict match; increase to ₹500 for high-income heads.</li>
                <li><strong>Click Reconcile.</strong> The tool flags four kinds of issues: a clean match, an AIS overstatement (likely duplicate or wrong PAN), an AIS understatement (declare full amount in ITR), and a TDS gap (Form 26AS missing credit visible in AIS).</li>
                <li><strong>Work through the action checklist.</strong> File AIS feedback for incorrect entries, contact deductors for missing TDS credits, and revise your ITR draft to include any income your records confirm but AIS missed.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Start reconciliation at least three weeks before your filing deadline. AIS feedback can take two to four weeks to reflect in TIS, and deductors need time to revise their TDS returns so the credit appears in your Form 26AS.</p>
            </div>
        </section>

        <!-- AIS vs 26AS vs TIS -->
        <section class="content-section" id="explained">
            <h2>AIS vs Form 26AS vs TIS — What Each Statement Actually Shows</h2>
            <p>From Assessment Year 2023-24 onwards the Income Tax Department split the information that earlier sat inside Form 26AS into three separate statements. Knowing which document carries which data prevents wasted reconciliation effort.</p>

            <h3>Form 26AS — The Tax Credit Statement</h3>
            <p>Form 26AS is now restricted to tax credits attached to your PAN: Tax Deducted at Source (TDS), Tax Collected at Source (TCS), advance tax, self-assessment tax, refunds, and processing defaults. It is downloaded from the <a href="https://www.tdscpc.gov.in/" target="_blank" rel="noopener">TRACES portal</a> via the e-filing site and is the legally controlling document for claiming tax credits in your ITR. The CPC system restricts your TDS claim to the amount visible in Form 26AS regardless of what AIS shows.</p>

            <h3>AIS — The Annual Information Statement</h3>
            <p>AIS is the comprehensive view. It captures everything Form 26AS no longer carries: salary breakdowns, bank interest (savings, FD, RD), dividend payouts, mutual fund redemptions, securities trades, property purchases and sales, foreign remittances under the Liberalised Remittance Scheme, business receipts under SFT (Specified Financial Transactions), and even high-value cash deposits. Each transaction shows the reported value and a modified value after taxpayer feedback. AIS is published under <a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener">Section 285BA of the Income Tax Act</a> read with Rule 114E.</p>

            <h3>TIS — The Taxpayer Information Summary</h3>
            <p>TIS rolls up AIS into category-wise totals — Total Salary, Total Interest Income, Total Dividend, Total Capital Gains, Total Taxes Paid. It shows a Value Processed (after de-duplication by the system) and a Value Accepted (after taxpayer feedback). TIS is what the e-filing portal uses to pre-fill your ITR draft. You cannot edit TIS directly; submit AIS feedback and TIS updates automatically. The methodology Patron's CAs apply for AIS reconciliation is consistent with the audit and assurance standards prescribed by the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a>.</p>

            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Statement</th><th>Primary Purpose</th><th>Editable via Feedback?</th><th>Drives Pre-fill?</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Form 26AS</strong></td><td>TDS / TCS / Tax Payment credits</td><td>No — deductor must revise return</td><td>Tax credit claim</td></tr>
                    <tr><td><strong>AIS</strong></td><td>Comprehensive transaction view</td><td>Yes</td><td>Indirect (via TIS)</td></tr>
                    <tr><td><strong>TIS</strong></td><td>Category-wise summary</td><td>No (auto from AIS)</td><td>Yes — pre-fills ITR</td></tr>
                </tbody>
            </table></div>
            <div class="callout warn">
                <p><strong>Note:</strong> The Income Tax Department itself states that AIS may not contain every item relevant to you. Always file your ITR based on your underlying records and supporting documents — not on AIS alone. AIS is a cross-check, not a substitute for your own books.</p>
            </div>
        </section>

        <!-- Common Mismatches -->
        <section class="content-section" id="mismatches">
            <h2>Common AIS Mismatch Patterns & How to Resolve Them</h2>
            <p>Over five years of running reconciliations for our clients, we see the same eight mismatch patterns recur across taxpayers. Each one has a specific remedy — picking the wrong remedy wastes weeks and may worsen the issue.</p>

            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Mismatch Pattern</th><th>Likely Cause</th><th>Correct Remedy</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>AIS shows interest, bank statement does not</strong></td>
                        <td>Bank reported accrued (not paid) interest; or interest paid in next FY</td>
                        <td>Submit AIS feedback as <em>Information is incorrect</em> and attach interest certificate from the bank</td>
                    </tr>
                    <tr>
                        <td><strong>Same FD interest appears twice in AIS</strong></td>
                        <td>Bank reported under both PAN and account holder details</td>
                        <td>AIS feedback: <em>Information is duplicate</em>; reference the original transaction ID</td>
                    </tr>
                    <tr>
                        <td><strong>Salary in AIS &gt; Form 16 (Form 130 from FY 2026-27)</strong></td>
                        <td>Employer reported gross including exempt allowances; or arrears/bonus credited differently</td>
                        <td>Use Form 16/130 figure in ITR; document the difference with payslip evidence</td>
                    </tr>
                    <tr>
                        <td><strong>Dividend in AIS but not in your demat statement</strong></td>
                        <td>Wrong PAN reported by the registrar (RTA), or company spin-off shares</td>
                        <td>Contact the RTA (KFin/CAMS/Link Intime); submit AIS feedback as <em>Information relates to other PAN</em></td>
                    </tr>
                    <tr>
                        <td><strong>TDS in AIS but missing from Form 26AS</strong></td>
                        <td>Deductor filed wrong PAN or has not yet processed the quarterly TDS return</td>
                        <td>Email deductor with PAN; ask them to file revised <a href="/tds-return/">TDS return</a>. Wait for CPC processing before claiming credit.</td>
                    </tr>
                    <tr>
                        <td><strong>Capital gains in AIS &lt; broker statement</strong></td>
                        <td>AIS uses cost-basis defaults; broker uses your actual buy price</td>
                        <td>Always declare per your broker contract notes and FIFO calculation. Tools like our <a href="/tools/income-tax-calculator">Income Tax Calculator</a> help test scenarios.</td>
                    </tr>
                    <tr>
                        <td><strong>Property sale in AIS for a co-owner only</strong></td>
                        <td>Registrar reported full value against one PAN instead of split between co-owners</td>
                        <td>AIS feedback: <em>Information relates to other PAN</em>; both co-owners should declare their share in their respective ITRs</td>
                    </tr>
                    <tr>
                        <td><strong>SFT entry for cash deposit you didn't make</strong></td>
                        <td>Bank misreported under your PAN, or joint-account holder's transaction tagged to you</td>
                        <td>AIS feedback: <em>Information is incorrect</em> with bank statement evidence; escalate to bank's nodal officer if not corrected</td>
                    </tr>
                </tbody>
            </table></div>

            <div class="callout">
                <p><strong>CA Tip:</strong> If AIS shows higher income than your records and you cannot get the source to correct it before your filing deadline, declare the higher AIS figure in your ITR and continue pursuing feedback. You can always file a revised return under Section 139(5) before 31 December 2026 once the correction comes through. This is far safer than under-declaring and waiting for a notice.</p>
            </div>
        </section>

        <!-- Body CTA -->
        <div class="body-cta">
    <h3>Need Help Reconciling AIS, 26AS and Bank?</h3>
    <p>Patron's CAs match your AIS, 26AS and bank entries line-by-line, raise feedback on incorrect entries, and prepare the ITR ready to file. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20AIS%20Reconciliation%20Tool.%20I%20need%20help%20with%20AIS%20%2F%2026AS%20reconciliation.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=AIS%20Reconciliation%20Tool%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20AIS%20Reconciliation%20Tool.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20AIS%20%2F%2026AS%20reconciliation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <!-- Form 168 -->
        <section class="content-section" id="form-168">
            <h2>Form 168 & Income Tax Rules 2026 — What Changes from 1 April 2026</h2>
            <p>The <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Central Board of Direct Taxes</a> notified the Income Tax Rules 2026 alongside the Income Tax Act 2025, both effective <strong>1 April 2026</strong>. The legacy form numbers used since 1962 are being renumbered for Tax Year 2026-27 onwards.</p>

            <h3>Form Renumbering Summary</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Old Form (FY 2025-26 & earlier)</th><th>New Form (Tax Year 2026-27 onwards)</th><th>Purpose</th></tr>
                </thead>
                <tbody>
                    <tr><td>Form 26AS</td><td><strong>Form 168</strong></td><td>Annual tax statement (TDS / TCS / payments)</td></tr>
                    <tr><td>Form 16</td><td><strong>Form 130</strong></td><td>Salary TDS certificate</td></tr>
                    <tr><td>Form 16A</td><td><strong>Form 131</strong></td><td>Non-salary TDS certificate</td></tr>
                    <tr><td>Form 15G + 15H</td><td><strong>Form 121 (merged)</strong></td><td>Self-declaration for nil / lower TDS</td></tr>
                    <tr><td>Form 3CA / 3CB / 3CD</td><td><strong>Form 26 (consolidated)</strong></td><td>Tax audit report</td></tr>
                </tbody>
            </table></div>

            <h3>Transitional Provisions — What Applies to Your AY 2026-27 Return</h3>
            <p>Section 536(2)(c) of the Income Tax Act 2025 preserves the old Act for any proceeding relating to a tax year beginning before 1 April 2026. In practical terms, for your <strong>FY 2025-26 (Assessment Year 2026-27) ITR</strong> — the one you are filing in 2026 — the existing Form 26AS, Form 16, AIS, and TIS continue to apply. The Form 168 transition kicks in only when you reconcile income earned from 1 April 2026 onwards (FY 2026-27, the new "Tax Year 2026-27").</p>

            <h3>What Does Not Change</h3>
            <p>The substance of reconciliation is unchanged. AIS continues, taxpayer feedback continues, the AIS-TIS-26AS three-document architecture continues. Only the form numbers and the underlying statutory references change. Section 285BA of the 1961 Act becomes Section 522 of the 2025 Act, but the SFT reporting framework is identical. CBDT has stated that operational rollout will follow as the e-filing portal utilities are updated.</p>

            <div class="callout warn">
                <p><strong>Note for Tax Year 2026-27 onwards:</strong> When you reconcile FY 2026-27 income (next year's filing), the worksheet above remains valid — replace "Form 26AS" mentally with "Form 168" and "Form 16" with "Form 130". Patron Accounting will update this tool with the renumbered terminology before the FY 2026-27 filing season opens.</p>
            </div>
        </section>

        <!-- AIS Feedback -->
        <section class="content-section" id="feedback">
            <h2>How to Submit AIS Feedback (Step by Step)</h2>
            <p>AIS feedback is the official mechanism to dispute an entry without contacting the reporting source directly. Once feedback is accepted, the modified value flows into TIS, and your pre-filled ITR gets corrected automatically.</p>

            <ol>
                <li><strong>Log in</strong> to the e-filing portal at <a href="https://www.incometax.gov.in/iec/foportal/" target="_blank" rel="noopener">incometax.gov.in</a> using your PAN credentials.</li>
                <li><strong>Open AIS:</strong> Dashboard → Annual Information Statement (AIS) → Proceed → AIS tile.</li>
                <li><strong>Locate the disputed transaction.</strong> Use the search/filter by Information Source name, Information Code, or amount.</li>
                <li><strong>Click Optional in the right-hand column,</strong> then Submit Feedback.</li>
                <li><strong>Choose the appropriate feedback type:</strong>
                    <ul>
                        <li><em>Information is correct</em> — accept as is (no change needed).</li>
                        <li><em>Information is not fully correct</em> — modify the value and explain.</li>
                        <li><em>Information relates to other PAN/year</em> — wrong taxpayer or year tagging.</li>
                        <li><em>Information is duplicate / included in other information</em> — for repeat entries.</li>
                        <li><em>Information is denied</em> — transaction never happened.</li>
                        <li><em>Customised feedback</em> — for SFT entries with a free-text reason.</li>
                    </ul>
                </li>
                <li><strong>Attach supporting documents</strong> (interest certificate, bank statement, contract note) and submit.</li>
                <li><strong>Download the acknowledgement.</strong> Save the screenshot — it is your audit trail if the reporting entity disputes the change.</li>
                <li><strong>Track status.</strong> AIS shows a <em>Feedback Submitted</em> tag; TIS updates within two to four weeks for simple corrections, six to eight weeks if the source has to be contacted.</li>
            </ol>

            <h3>What If Feedback Is Rejected?</h3>
            <p>If the reporting entity disputes your feedback, AIS marks the entry as <em>Information confirmed by source</em>. At that point you have three options: (a) accept the figure and adjust your ITR, (b) escalate to the source's grievance redressal officer (banks have one, registrars have one), or (c) file the ITR with your figure and prepare to respond to a likely <a href="/income-tax-notices-under-section-143-3">Section 143(1) intimation</a> with documentary evidence. Option (c) requires professional handling — a <a href="/income-tax-notice">tax notice specialist</a> can draft the response.</p>
        </section>

        <!-- Compliance / Penalties -->
        <section class="content-section" id="compliance">
            <h2>Statutory Risks of Filing Without Reconciliation</h2>
            <p>The Centralised Processing Centre at Bengaluru runs every ITR through automated comparison against AIS, TIS, and Form 26AS. Mismatches cascade through specific statutory provisions — knowing the sequence helps you decide how urgently to respond.</p>

            <h3>Section 143(1) — Prima Facie Adjustment</h3>
            <p>The first-line response to a mismatch. CPC issues an intimation (often within weeks of filing) showing the adjusted income, additional tax demand, and interest under Sections 234B/234C. You get a 30-day window to respond. Ignore it and the adjustment becomes final.</p>

            <h3>Section 139(9) — Defective Return Notice</h3>
            <p>Issued when the return is structurally incomplete relative to AIS — for example, missing schedules, undeclared TDS that exceeds tax payable, or capital gains schedule missing despite securities trades in AIS. You get 15 days to rectify, failing which the return is treated as not filed. See our guide on <a href="/income-tax-notice-for-defective-return">defective return notices</a>.</p>

            <h3>Section 270A — Penalty for Misreporting (50% to 200%)</h3>
            <p>Where AIS data conclusively shows under-reporting of income, CPC can refer the case for Section 270A penalty proceedings. The penalty is 50% of tax on under-reported income, rising to 200% if classified as "misreporting" (e.g., concealment, false claims). Voluntary correction before notice issues — through revised return or ITR-U — substantially reduces this exposure.</p>

            <h3>Section 148 — Reassessment</h3>
            <p>For older years where AIS reveals high-value transactions not declared, the AO can reopen the assessment under Section 148. The reassessment window is now 3 years (or 5 years for entries above ₹50 lakh) per the <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> Finance Act 2021 amendments, with confirming notifications from <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB</a>. Defending these requires CA representation and documentation that may be 4-5 years old.</p>

            <div class="callout warn">
                <p><strong>The economics of reconciliation are simple:</strong> 30–45 minutes spent reconciling AIS pre-filing saves potentially weeks of notice response work and tens of thousands of rupees in interest, penalty, and professional fees later. The ITR filing window for FY 2025-26 closes 31 July 2026 for non-audit cases, 31 October 2026 for audit cases, and 30 November 2026 for transfer pricing cases.</p>
            </div>
        </section>

        <!-- FAQ -->
        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About AIS Reconciliation</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is AIS reconciliation and why is it important before filing ITR?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">AIS reconciliation is the process of matching the Annual Information Statement on the Income Tax portal with Form 26AS and your own bank, broker, and salary records. It is critical because the department auto-processes returns under Section 143(1) by comparing your declared income against AIS data. Any mismatch can trigger an intimation, additional demand, defective return notice, or scrutiny.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the difference between AIS, Form 26AS and TIS?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Form 26AS is now limited to TDS, TCS, advance tax, and refund credits linked to your PAN. AIS is a wider statement covering interest, dividends, securities trades, property transactions, foreign remittances, and SFT entries. TIS is the Taxpayer Information Summary, an aggregated category-wise total derived from AIS that is used to pre-fill your ITR. All three should be reviewed before filing.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Will Form 26AS still apply for FY 2025-26 ITR filing in 2026?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Yes. For FY 2025-26 (Assessment Year 2026-27) returns filed in 2026, you will still see Form 26AS and AIS under the Income Tax Act 1961. Form 168 replaces Form 26AS only for Tax Year 2026-27 onwards (income from 1 April 2026). Pre-1 April 2026 proceedings continue under the old Act, forms, and nomenclature per Section 536(2)(c).</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How do I download AIS, Form 26AS and TIS from the Income Tax portal?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Log in to incometax.gov.in. To get AIS and TIS, go to Services then Annual Information Statement and click Proceed. To get Form 26AS, go to e-File then Income Tax Returns and click View Form 26AS, which redirects to the TRACES portal. AIS can be downloaded as PDF, JSON, or CSV. Form 26AS export is available as PDF or HTML.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What should I do if AIS shows income I never received?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Open the AIS section on the e-filing portal, locate the disputed transaction, and click Give Feedback. Mark it as Information is incorrect, Information relates to other PAN, Information is duplicate, or Income is not taxable, as applicable. Attach supporting documents and keep a screenshot of the feedback acknowledgement. The reporting source is notified and TIS updates automatically once processed.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if my bank or broker records show more income than AIS?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Always declare income based on your own books and supporting documents, not on AIS alone. The Income Tax Department itself states AIS may not contain every item relevant to you. Under-reporting carries penalties up to 200 percent under Section 270A. If AIS understates your income, simply file the ITR with the higher figure backed by bank statements or contract notes.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I claim TDS that appears in AIS but is missing from Form 26AS?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">The portal restricts TDS credit in your ITR to amounts reflected in Form 26AS. If TDS is in AIS but missing from Form 26AS, contact the deductor and ask them to file a revised TDS return with your correct PAN. Once the revised return is processed by CPC, the credit will appear in Form 26AS and you can claim it in your ITR.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What happens if I file my ITR without reconciling AIS first?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">CPC processes every return under Section 143(1) by matching declared income against AIS. If AIS shows higher income, you will receive an intimation adjusting your tax demand. Persistent mismatches can escalate to a defective return notice under Section 139(9), reassessment under Section 148, or full scrutiny under Section 143(3). Refunds are also withheld until mismatches are resolved.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long does AIS feedback take to process?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">There is no fixed timeline. In practice, simple feedback such as duplicate entries or wrong PAN takes two to four weeks to reflect in TIS. Disputes that require the source entity, such as a bank or registrar, to revise its filing can take six to eight weeks. Always start reconciliation at least three to four weeks before your ITR due date to allow time for corrections.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I rectify my ITR after filing if I missed AIS reconciliation?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Yes. You can file a revised return under Section 139(5) before 31 December 2026 for AY 2026-27, or an updated return (ITR-U) under Section 139(8A) within 48 months of the relevant assessment year on payment of additional tax. For arithmetic errors only, a Section 154 rectification is available. Filing voluntarily before a notice issues reduces penalty exposure significantly.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is Form 168 and when does it apply?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Form 168 is the new Annual Tax Statement notified under the Income Tax Rules 2026, replacing Form 26AS under the Income Tax Act 2025. It applies from 1 April 2026 for Tax Year 2026-27 onwards. Form 16 also becomes Form 130, and Form 16A becomes Form 131. Existing forms continue for FY 2025-26 returns and all earlier proceedings under transitional provisions.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the Income Tax Department use AIS for Section 143(1) auto-processing?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">Yes. CPC Bengaluru runs every return through automated comparison against AIS, TIS, and Form 26AS. Any income reflected in AIS but not declared in your ITR triggers a prima facie adjustment under Section 143(1)(a). You receive an intimation with a 30-day window to respond. Failure to respond leads to a final order with tax demand, interest, and possible Section 270A penalty.</div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does this AIS Reconciliation Tool store or transmit my financial data?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">No. The tool runs entirely in your browser. No values you enter are sent to any server, saved to a database, or shared with third parties. The page contains no analytics on form fields. Once you close the tab, all data is cleared. You can run it offline after the page loads. For maximum privacy, use private or incognito browsing mode.</div>
                </div>
            </div>
        </section>

    </div>

    <!-- Sidebar -->
    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Reviewed AIS Match</h3>
    <p>Catch every mismatch before the notice arrives. We reconcile AIS/26AS and prepare the ITR — fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20AIS%20Reconciliation%20Tool.%20I%20need%20help%20with%20AIS%20%2F%2026AS%20reconciliation.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=AIS%20Reconciliation%20Tool%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20AIS%20Reconciliation%20Tool.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20AIS%20%2F%2026AS%20reconciliation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/itr-filing-for-salary" class="sidebar-link">ITR Filing for Salary <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Assistance <span class="arrow">→</span></a>
            <a href="/income-tax-notice-for-defective-return" class="sidebar-link">Defective Return Notice <span class="arrow">→</span></a>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/tds-return/" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/tds-rate-finder-calculator" class="sidebar-link">TDS Rate Finder & Calculator <span class="arrow">→</span></a>
            <a href="/tools/tds-on-salary-calculator" class="sidebar-link">TDS on Salary Calculator <span class="arrow">→</span></a>
            <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/itr-form-selector" class="sidebar-link">ITR Form Selector <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/ais-vs-form-26as-reconcile-itr-2025-26" class="sidebar-link">AIS vs Form 26AS Reconciliation Guide <span class="arrow">→</span></a>
            <a href="/blog/ais-mismatch-correct-errors-before-itr" class="sidebar-link">AIS Mismatch — Correct Errors Before ITR <span class="arrow">→</span></a>
            <a href="/blog/annual-information-statement-ais-rules-2026-whats-reported-it" class="sidebar-link">AIS Rules 2026 — What's Reported <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<!-- Office Strip -->
<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
/* === PATRON tolerant numeric parser (handles Indian comma format, ₹ symbol, whitespace) === */
function parseINR(raw) {
    if (raw === undefined || raw === null) return NaN;
    var cleaned = String(raw).replace(/[,\s\u20B9]/g, '');
    if (cleaned === '') return NaN;
    var n = parseFloat(cleaned);
    return isFinite(n) ? n : NaN;
}
function pickPositive(parsed, fallback) {
    return (isFinite(parsed) && parsed > 0) ? parsed : fallback;
}

    // ====== UTILITIES ======
    function fmtINR(num) {
        if (!isFinite(num)) return '—';
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }
    function getNum(el) {
        if (!el || el.disabled) return null;
        const v = el.value.trim();
        if (v === '') return null;
        const n = parseINR(v);
        return isFinite(n) ? n : null;
    }

    // ====== CATEGORY LABELS (for action checklist) ======
    const CAT_LABELS = {
        salary: 'Salary Income',
        savings: 'Savings Bank Interest',
        fd_rd: 'FD / RD Interest',
        dividend: 'Dividend Income',
        capgains: 'Capital Gains (Securities)',
        rent: 'Rental Income',
        professional: 'Professional / Business Receipts',
        other: 'Other (Property / Foreign Remittance / Lottery)'
    };

    // ====== CORE RECONCILIATION ======
    function reconcile() {
        const tolerance = Math.max(0, getNum(document.getElementById('tolerance')) || 0);
        const rows = document.querySelectorAll('#reconTable tbody tr');
        const issues = [];
        let matched = 0, mismatched = 0, netMismatch = 0;
        let evaluatedRows = 0;

        rows.forEach(row => {
            const cat = row.getAttribute('data-cat');
            const tdsApplicable = row.getAttribute('data-tds') === '1';
            const ais = getNum(row.querySelector('.ais-in'));
            const form26 = getNum(row.querySelector('.form26-in'));
            const rec = getNum(row.querySelector('.rec-in'));
            const pill = row.querySelector('.status-pill');

            // Skip rows where neither AIS nor Records is filled
            if (ais === null && rec === null && form26 === null) {
                pill.className = 'status-pill empty';
                pill.textContent = '—';
                return;
            }

            evaluatedRows++;

            // Need at least AIS or Records to compare
            if (ais === null || rec === null) {
                pill.className = 'status-pill empty';
                pill.textContent = 'Incomplete';
                issues.push({
                    cat,
                    type: 'incomplete',
                    msg: '<strong>' + CAT_LABELS[cat] + ':</strong> Enter both the AIS value and your records to reconcile this head.'
                });
                return;
            }

            const diff = ais - rec;
            const absDiff = Math.abs(diff);

            if (absDiff <= tolerance) {
                pill.className = 'status-pill match';
                pill.textContent = 'Match ✓';
                matched++;

                // Even on match, check TDS gap if applicable
                if (tdsApplicable && form26 !== null && form26 > 0) {
                    // No specific issue but a confirmation
                }
            } else if (diff > tolerance) {
                // AIS > Records — likely over-reporting by source
                pill.className = 'status-pill investigate';
                pill.textContent = 'Investigate';
                mismatched++;
                netMismatch += diff;
                issues.push({
                    cat,
                    type: 'investigate',
                    msg: '<strong>' + CAT_LABELS[cat] + ':</strong> AIS shows ' + fmtINR(ais) + ' but your records show ' + fmtINR(rec) + ' (gap ' + fmtINR(diff) + '). Likely causes: duplicate entry, wrong PAN, accrued vs cash timing, or gross vs net reporting. Submit AIS feedback marking the entry "Information is not fully correct" or "Information is duplicate" with supporting documents.'
                });
            } else {
                // AIS < Records — your records show more
                pill.className = 'status-pill declare';
                pill.textContent = 'Declare Full';
                mismatched++;
                netMismatch += Math.abs(diff);
                issues.push({
                    cat,
                    type: 'declare',
                    msg: '<strong>' + CAT_LABELS[cat] + ':</strong> Your records show ' + fmtINR(rec) + ' but AIS shows only ' + fmtINR(ais) + ' (gap ' + fmtINR(absDiff) + '). Declare the full ' + fmtINR(rec) + ' in your ITR — AIS is incomplete. Keep documentary evidence ready in case of a Section 143(1) query.'
                });
            }

            // TDS gap check (independent of income match)
            if (tdsApplicable && form26 !== null) {
                // Heuristic: if AIS shows income but Form 26AS shows zero TDS where it should reasonably exist
                // We flag only the obvious case: AIS > 0 income, F26 = 0, and a likely TDS threshold crossed
                let tdsExpected = false;
                let thresholdNote = '';
                if (cat === 'salary' && ais > 250000) { tdsExpected = true; thresholdNote = 'salary above basic exemption'; }
                else if (cat === 'fd_rd' && ais > 40000) { tdsExpected = true; thresholdNote = 'FD/RD interest above ₹40,000 (Section 194A)'; }
                else if (cat === 'dividend' && ais > 10000) { tdsExpected = true; thresholdNote = 'dividend above ₹10,000 per company (Section 194)'; }
                else if (cat === 'rent' && ais > 240000) { tdsExpected = true; thresholdNote = 'rent above ₹2,40,000 p.a. (Section 194I)'; }
                else if (cat === 'professional' && ais > 30000) { tdsExpected = true; thresholdNote = 'professional fees above ₹30,000 (Section 194J)'; }

                if (tdsExpected && form26 === 0) {
                    issues.push({
                        cat,
                        type: 'tds-issue',
                        msg: '<strong>' + CAT_LABELS[cat] + ' — TDS Gap:</strong> AIS shows ' + fmtINR(ais) + ' but Form 26AS shows zero TDS, despite ' + thresholdNote + '. Check if the deductor has filed the quarterly TDS return correctly with your PAN. You cannot claim TDS credit not reflected in Form 26AS — ask the deductor to file a revised TDS return.'
                    });
                }
            }
        });

        // Update result cards
        document.getElementById('resMatched').textContent = matched;
        document.getElementById('resMismatch').textContent = mismatched;
        document.getElementById('resTotal').textContent = fmtINR(netMismatch);

        // Color-code the cards
        const cardMatched = document.getElementById('cardMatched');
        const cardMismatch = document.getElementById('cardMismatch');
        cardMatched.className = matched > 0 ? 'result-card success' : 'result-card';
        cardMismatch.className = mismatched > 0 ? 'result-card danger' : 'result-card success';

        // Build action list
        const list = document.getElementById('actionList');
        list.innerHTML = '';

        if (evaluatedRows === 0) {
            const li = document.createElement('li');
            li.innerHTML = '<strong>No data entered yet.</strong> Fill in at least one income head from your AIS, Form 26AS, and personal records to begin reconciliation.';
            list.appendChild(li);
        } else if (issues.length === 0) {
            const li = document.createElement('li');
            li.className = 'empty-state';
            li.innerHTML = '✓ All entered heads are within tolerance. You can proceed to file your ITR with confidence — but cross-check the pre-filled ITR draft against your reconciled numbers before submitting.';
            list.appendChild(li);
        } else {
            issues.forEach(iss => {
                const li = document.createElement('li');
                li.innerHTML = iss.msg;
                list.appendChild(li);
            });

            // Final guidance line
            const liGuide = document.createElement('li');
            liGuide.innerHTML = '<strong>Final step:</strong> File AIS feedback for "Investigate" rows on incometax.gov.in. For "TDS Gap" rows, contact the deductor immediately. For "Declare Full" rows, your ITR figure should equal your records — AIS understates. Save screenshots of all feedback acknowledgements.';
            list.appendChild(liGuide);
        }

        // Show + scroll
        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => {
            rs.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 100);
    }

    // ====== RESET ======
    function resetCalc() {
        document.querySelectorAll('#reconTable input[type="number"]').forEach(inp => {
            if (!inp.disabled) inp.value = '';
        });
        document.getElementById('tolerance').value = 100;
        document.querySelectorAll('.status-pill').forEach(p => {
            p.className = 'status-pill empty';
            p.textContent = '—';
        });
        document.getElementById('resultSection').classList.remove('visible');
        document.getElementById('actionList').innerHTML = '';
        document.querySelector('.calc-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // ====== CSV UPLOAD & SAMPLE DOWNLOAD ======
    const VALID_CATEGORIES = ['salary', 'savings', 'fd_rd', 'dividend', 'capgains', 'rent', 'professional', 'other'];
    const NO_FORM26_CATS = new Set(['savings', 'capgains']); // Form 26AS column disabled for these

    function downloadSampleCSV() {
        const sample =
'category,ais,form26as,records\n' +
'salary,1500000,1500000,1500000\n' +
'savings,25000,,25000\n' +
'fd_rd,80000,80000,80000\n' +
'dividend,15000,0,15000\n' +
'capgains,200000,,200000\n' +
'rent,360000,360000,360000\n' +
'professional,800000,800000,800000\n' +
'other,5000,0,5000\n';
        const blob = new Blob([sample], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'patron-ais-sample.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        setUploadStatus('Sample CSV downloaded — fill in your numbers and re-upload.', 'success');
    }

    function setUploadStatus(msg, type) {
        const el = document.getElementById('uploadStatus');
        el.textContent = msg;
        el.className = 'upload-status' + (type ? ' ' + type : '');
    }

    function parseCSV(text) {
        // Strip BOM, normalise line endings
        text = text.replace(/^\ufeff/, '').replace(/\r\n/g, '\n').replace(/\r/g, '\n').trim();
        const rows = text.split('\n').map(line => line.split(',').map(c => c.trim()));
        if (rows.length < 2) throw new Error('CSV has no data rows');
        const header = rows[0].map(h => h.toLowerCase());
        const required = ['category', 'ais', 'form26as', 'records'];
        for (const col of required) {
            if (header.indexOf(col) === -1) {
                throw new Error('Missing column: "' + col + '". Headers must be: category,ais,form26as,records');
            }
        }
        const idxCat = header.indexOf('category');
        const idxAis = header.indexOf('ais');
        const idxForm26 = header.indexOf('form26as');
        const idxRec = header.indexOf('records');

        const parsed = [];
        const errors = [];
        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            if (row.length < 4 || row.every(c => c === '')) continue; // skip blank
            const cat = (row[idxCat] || '').toLowerCase();
            if (!cat) continue;
            if (VALID_CATEGORIES.indexOf(cat) === -1) {
                errors.push('Row ' + (i + 1) + ': unknown category "' + cat + '"');
                continue;
            }
            const num = (s) => {
                if (s === '' || s == null) return null;
                const cleaned = String(s).replace(/[₹,\s]/g, '');
                const n = parseINR(cleaned);
                return isFinite(n) ? n : null;
            };
            parsed.push({
                category: cat,
                ais: num(row[idxAis]),
                form26as: num(row[idxForm26]),
                records: num(row[idxRec])
            });
        }
        return { parsed, errors };
    }

    function applyParsedToTable(parsed) {
        let populated = 0;
        for (const entry of parsed) {
            const tr = document.querySelector('#reconTable tr[data-cat="' + entry.category + '"]');
            if (!tr) continue;
            const aisIn = tr.querySelector('.ais-in');
            const form26In = tr.querySelector('.form26-in');
            const recIn = tr.querySelector('.rec-in');
            if (aisIn && entry.ais != null) { aisIn.value = entry.ais; populated++; }
            if (form26In && !form26In.disabled && entry.form26as != null) { form26In.value = entry.form26as; populated++; }
            if (recIn && entry.records != null) { recIn.value = entry.records; populated++; }
        }
        return populated;
    }

    function handleCSVUpload(event) {
        const file = event.target.files && event.target.files[0];
        if (!file) return;
        if (file.size > 1024 * 1024) {
            setUploadStatus('File too large (max 1 MB). AIS CSVs should be tiny.', 'error');
            event.target.value = '';
            return;
        }
        const reader = new FileReader();
        reader.onload = function(e) {
            try {
                const text = e.target.result;
                const { parsed, errors } = parseCSV(text);
                if (parsed.length === 0) {
                    setUploadStatus('No valid rows found. ' + (errors.length ? 'Errors: ' + errors.join('; ') : 'Check the format and try again.'), 'error');
                    return;
                }
                const populated = applyParsedToTable(parsed);
                const errMsg = errors.length ? ' (' + errors.length + ' row error' + (errors.length > 1 ? 's' : '') + ' skipped)' : '';
                setUploadStatus('✓ Populated ' + populated + ' field' + (populated !== 1 ? 's' : '') + ' from ' + parsed.length + ' row' + (parsed.length !== 1 ? 's' : '') + errMsg + '. Click Reconcile to compare.', 'success');
                // Auto-trigger reconcile if all 8 categories have data
                if (parsed.length >= 6 && typeof reconcile === 'function') {
                    setTimeout(reconcile, 200);
                }
            } catch (err) {
                setUploadStatus('Parse error: ' + err.message, 'error');
            }
        };
        reader.onerror = function() {
            setUploadStatus('Could not read file. Try again.', 'error');
        };
        reader.readAsText(file);
        event.target.value = ''; // reset so same file can be re-uploaded
    }

    // ====== FAQ ACCORDION ======
    function toggleFaq(e) {
        const btn = e.closest ? (e.closest('.faq-question') || e) : e;
        const item = btn.closest('.faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }

    // ====== ENTER KEY ======
    document.querySelectorAll('#reconTable input[type="number"], #tolerance').forEach(inp => {
        inp.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') reconcile();
        });
    });

    // ====== STICKY NAV ACTIVE STATE ======
    const sections = document.querySelectorAll('[id]');
    const navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => {
            const top = s.offsetTop - 100;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(link => {
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
