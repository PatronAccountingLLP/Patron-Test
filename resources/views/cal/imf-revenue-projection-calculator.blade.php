@extends('layouts.app')
@section('meta')
<title>Revenue Projection Calculator | IMF GDP-Based Forecast</title>
<meta name="description" content="Revenue projection calculator forecasts your revenue using IMF World Economic Outlook GDP growth and inflation data plus your own growth premium. Try now!">
<meta name="robots" content="index, follow">
<link rel="canonical" href="/tools/imf-revenue-projection-calculator">

<meta property="og:title" content="IMF Revenue Projection Calculator — Free Forecast Tool 2026">
<meta property="og:description" content="Forecast multi-year business revenue anchored to IMF World Economic Outlook GDP growth and inflation projections for India. Free, instant, India-specific.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/imf-revenue-projection-calculator">
<meta property="og:image" content="/tools/imf-revenue-projection-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="theme-color" content="#15365f">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="IMF Revenue Projection Calculator — Free Forecast Tool 2026">
<meta name="twitter:description" content="Forecast multi-year business revenue anchored to IMF World Economic Outlook GDP growth and inflation projections for India.">
<meta name="twitter:image" content="/tools/imf-revenue-projection-calculator-og.png">

<link rel="icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "IMF Revenue Projection Calculator",
  "description": "The IMF Revenue Projection Calculator forecasts multi-year business revenue for Indian companies by anchoring growth to IMF World Economic Outlook real GDP growth and GDP-deflator inflation, plus a user-defined company outperformance premium, returning a year-by-year nominal and real revenue path with CAGR.",
  "url": "/tools/imf-revenue-projection-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "IMF Revenue Projection Calculator", "item": "/tools/imf-revenue-projection-calculator"}
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
      "name": "What is the IMF Revenue Projection Calculator?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is a free online tool that forecasts a business's future revenue by anchoring projections to IMF World Economic Outlook macro data for India — real GDP growth and GDP-deflator inflation — combined with a company-specific outperformance premium. It produces a year-by-year nominal and real revenue path useful for budgeting, fundraising decks and board planning."
      }
    },
    {
      "@type": "Question",
      "name": "Why anchor revenue projections to IMF data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "IMF World Economic Outlook projections are independent, methodologically consistent and widely accepted by investors and lenders. Anchoring a forecast to nominal GDP growth gives a defensible baseline: a company growing only with the economy assumes zero market-share change. Adding an explicit premium forces founders to justify why they will beat the macro environment."
      }
    },
    {
      "@type": "Question",
      "name": "What IMF GDP growth rate does the calculator use for India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The default real GDP growth is pre-filled from the IMF World Economic Outlook April 2026 update, which projects India's real GDP growth at about 6.5% for 2026 (FY27). You can override this with any IMF figure or your own assumption. Always check the latest WEO release on imf.org because projections are revised twice a year."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between nominal and real revenue projection?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nominal revenue includes the effect of inflation, so it grows by real GDP growth plus the GDP deflator plus your premium. Real revenue strips out inflation and shows growth in constant-price terms. Lenders usually want nominal numbers for repayment cover, while strategic planning often uses real growth to judge genuine volume expansion."
      }
    },
    {
      "@type": "Question",
      "name": "How is nominal growth calculated from IMF inputs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The calculator uses an approximate compounding identity: nominal growth equals (1 + real GDP growth) multiplied by (1 + GDP-deflator inflation) multiplied by (1 + your company premium), minus one. This is more accurate than simply adding the three rates, especially over longer horizons where the cross-product becomes material."
      }
    },
    {
      "@type": "Question",
      "name": "Is this calculator suitable for a startup with no revenue history?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Partly. A macro-anchored model works best for established businesses with a stable base. Early-stage startups should pair it with a bottom-up forecast (units multiplied by price multiplied by conversion). Use the IMF baseline as a sanity check: if your bottom-up plan implies growth far above nominal GDP for many years, investors will expect a strong market-share narrative."
      }
    },
    {
      "@type": "Question",
      "name": "Does the tool store or send my financial data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The calculator runs entirely in your browser using JavaScript. No revenue figures, growth assumptions or results are transmitted to any server or stored anywhere. You can use it offline once the page has loaded, and refreshing the page clears all inputs for confidentiality."
      }
    },
    {
      "@type": "Question",
      "name": "How accurate are IMF-anchored revenue forecasts?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No multi-year forecast is precise. IMF projections themselves carry uncertainty and are revised for shocks like tariff changes or geopolitical conflict. Treat the output as a disciplined baseline scenario, not a guarantee. Build optimistic and conservative cases by adjusting the premium, and revisit the model whenever a new World Economic Outlook is published."
      }
    },
    {
      "@type": "Question",
      "name": "Can I use this for income tax or GST advance estimation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Indirectly. Projected revenue informs advance tax instalments under the Income Tax Act and helps anticipate GST registration thresholds or turnover-based compliance. However, statutory computations need actual books and applicable rates. Use the projection for planning and confirm tax positions with a Chartered Accountant before filing or making advance tax payments."
      }
    },
    {
      "@type": "Question",
      "name": "What growth premium should I assume over GDP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There is no universal figure. A mature business in a saturated sector may grow at or below nominal GDP, implying a zero or negative premium. A scaling company gaining market share might justify 5%–20% above GDP. Base the premium on historical outperformance, pipeline visibility and competitive position, and document the rationale for investors."
      }
    },
    {
      "@type": "Question",
      "name": "How often does the IMF update its projections for India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The IMF publishes the World Economic Outlook twice a year — typically in April and October — with interim updates in January and July. Article IV consultations also produce country-specific assessments. Because figures change between releases, always verify the latest real GDP growth and deflator on imf.org before finalising a forecast."
      }
    },
    {
      "@type": "Question",
      "name": "Is the IMF Revenue Projection Calculator free to use?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it is completely free with no sign-up, no usage limit and no paywall. Patron Accounting LLP provides it as a planning aid for founders, finance teams and CFOs in India. For a board-ready financial model with scenario analysis and tax integration, our Chartered Accountants can build a customised projection on request."
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

        /* Toggle switch for inclusive/exclusive */
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

        /* Transaction type toggle */
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

        /* Projection table */
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

        /* Bar chart */
        .chart-wrap {
            margin-top: 20px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 20px;
        }
        .chart-bars {
            display: flex;
            align-items: flex-end;
            gap: 8px;
            height: 180px;
            margin-top: 12px;
        }
        .chart-bar-col {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            height: 100%;
        }
        .chart-bar {
            width: 100%;
            max-width: 46px;
            background: linear-gradient(180deg, var(--primary-light), var(--primary));
            border-radius: 6px 6px 0 0;
            transition: height 0.4s ease;
        }
        .chart-bar-label {
            font-size: 11px;
            color: var(--text-muted);
            margin-top: 6px;
            font-family: var(--font-mono);
        }
        .chart-title {
            font-size: 13px;
            font-weight: 700;
            color: var(--primary-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
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


/* ===== APPENDED: CTA SYSTEM ===== */
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

/* ===== APPENDED: FOCUS-VISIBLE ===== */
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

/* ===== APPENDED: REDUCED MOTION ===== */
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

/* ===== APPENDED: PRINT ===== */
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
        <a href="#methodology">Methodology</a>
        <a href="#imf-data">IMF Data for India</a>
        <a href="#interpreting">Interpreting Results</a>
        <a href="#india-rules">India Tax &amp; Compliance</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    IMF Revenue Projection Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>IMF Revenue Projection Calculator — <span>Macro-Anchored Forecasting</span> for FY 2025–26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need a board-ready model? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20IMF%20Revenue%20Projection%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=IMF%20Revenue%20Projection%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20revenue%20projections.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free calculator forecasts your business revenue over up to 10 years by anchoring growth to IMF World Economic Outlook macro projections for India — real GDP growth plus GDP-deflator inflation — and adding your own company outperformance premium. It returns a year-by-year nominal and real revenue path, a CAGR, and a downloadable-style table you can paste into a budget or fundraising deck. Built and reviewed by Chartered Accountants at Patron Accounting LLP, the tool runs entirely in your browser, so no financial data ever leaves your device.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Project Your Revenue Using IMF Macro Data</h2>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript or use the manual formula in the Methodology section below.
                </div>
            </noscript>

            <div class="calc-row">
                <div class="form-group">
                    <label for="baseRevenue">Current Annual Revenue (₹)</label>
                    <input type="text" inputmode="decimal" id="baseRevenue" placeholder="e.g. 5,00,00,000 or 50000000" autocomplete="off">
                    <div class="field-hint">Latest full-year turnover in ₹ — commas allowed.</div>
                </div>
                <div class="form-group">
                    <label for="years">Projection Period (Years)</label>
                    <input type="number" id="years" placeholder="e.g. 5" min="1" max="10" step="1" value="5" autocomplete="off">
                    <div class="field-hint">1 to 10 years.</div>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="realGdp">IMF Real GDP Growth (%)</label>
                    <input type="number" id="realGdp" placeholder="6.5" min="-20" max="30" step="0.1" value="6.5" autocomplete="off">
                    <div class="field-hint">WEO Apr 2026: India ≈ 6.5%.</div>
                </div>
                <div class="form-group">
                    <label for="deflator">GDP Deflator / Inflation (%)</label>
                    <input type="number" id="deflator" placeholder="4.0" min="-10" max="40" step="0.1" value="4.0" autocomplete="off">
                    <div class="field-hint">IMF inflation assumption.</div>
                </div>
                <div class="form-group">
                    <label for="premium">Your Growth Premium (%)</label>
                    <input type="number" id="premium" placeholder="0" min="-30" max="100" step="0.1" value="0" autocomplete="off">
                    <div class="field-hint">Outperformance vs the economy.</div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Projection Basis</label>
                <div class="toggle-group" id="basisToggle">
                    <button type="button" class="toggle-btn active" data-value="nominal" onclick="setBasis(this)">
                        Nominal<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Includes inflation</small>
                    </button>
                    <button type="button" class="toggle-btn" data-value="real" onclick="setBasis(this)">
                        Real<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Constant prices</small>
                    </button>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Projection</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Effective Annual Growth</div>
                        <div class="result-value" id="resGrowth">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">CAGR Over Period</div>
                        <div class="result-value" id="resCagr">—</div>
                    </div>
                    <div class="result-card highlight" style="grid-column: 1 / -1;">
                        <div class="result-label">Projected Revenue (Final Year)</div>
                        <div class="result-value" id="resFinal">—</div>
                    </div>
                </div>

                <div class="result-breakdown" id="breakdownSection">
                    <div class="breakdown-row">
                        <span class="breakdown-label">Starting revenue</span>
                        <span class="breakdown-value" id="bdStart">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Total growth over period</span>
                        <span class="breakdown-value" id="bdTotalGrowth">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Absolute increase</span>
                        <span class="breakdown-value" id="bdIncrease">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Basis used</span>
                        <span class="breakdown-value" id="bdBasis">—</span>
                    </div>
                </div>

                <div class="chart-wrap">
                    <div class="chart-title">Revenue Trajectory</div>
                    <div class="chart-bars" id="chartBars"></div>
                </div>

                <div class="proj-table-wrap">
                    <table class="proj-table">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Opening (₹)</th>
                                <th>Growth %</th>
                                <th>Closing (₹)</th>
                            </tr>
                        </thead>
                        <tbody id="projTableBody"></tbody>
                    </table>
                </div>

                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want a CA to validate this projection before it goes into your deck?</div>
                    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — assumptions check, scenario range and tax-trigger mapping, no obligation.</div>
                    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20IMF%20Revenue%20Projection%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=IMF%20Revenue%20Projection%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20IMF%20Revenue%20Projection%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20my%20projection.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the IMF Revenue Projection Calculator</h2>
            <p>The tool turns a single year of revenue into a defensible multi-year forecast in four steps. It is designed for founders, finance managers and CFOs in India who need a baseline that an investor or lender will accept without argument.</p>
            <ol>
                <li><strong>Enter current annual revenue.</strong> Use your latest audited or finalised full-year turnover in rupees. This is the base the projection compounds from.</li>
                <li><strong>Set the projection period.</strong> Choose 1 to 10 years. Three to five years is typical for a business plan; five to seven for a fundraising model.</li>
                <li><strong>Confirm the IMF macro inputs.</strong> Real GDP growth is pre-filled at 6.5% from the IMF World Economic Outlook April 2026 update for India, and inflation at a conservative 4%. Override either with the latest figure from <a href="https://www.imf.org/en/countries/ind" target="_blank" rel="noopener">imf.org</a>.</li>
                <li><strong>Add your growth premium and choose a basis.</strong> The premium is how much you expect to beat the overall economy. Pick a nominal basis for lender repayment models, or a real basis to judge genuine volume growth, then click Calculate.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Run the model three times — premium at 0% (you grow only with the economy), a realistic premium based on past outperformance, and a stretch case. Presenting all three as a range is far more credible to investors than a single optimistic line.</p>
            </div>
        </section>

        <section class="content-section" id="methodology">
            <h2>Methodology: How the Projection Is Built</h2>
            <p>Most online revenue calculators ask you to invent a growth rate out of thin air. This tool instead anchors the forecast to an independent macroeconomic baseline — the same projections the IMF publishes for India in its World Economic Outlook — and then asks you to explicitly justify any growth above the economy as a premium. That discipline is what makes the output defensible in a board meeting or due-diligence room.</p>

            <h3>The Core Identity</h3>
            <p>Nominal economic growth is not simply real growth plus inflation; the two compound. The calculator uses the multiplicative identity, which is materially more accurate over multi-year horizons:</p>
            <div class="formula-box">
                <span class="label">Nominal Growth</span> = (1 + Real GDP Growth) × (1 + Inflation) × (1 + Premium) − 1<br><br>
                <span class="label">Example:</span> Real 6.5%, Inflation 4%, Premium 0%<br>
                = (1.065 × 1.04 × 1.00) − 1<br>
                = <span class="label">10.76%</span> nominal per year
            </div>
            <p>For the real basis, the inflation term is removed, leaving growth in constant-price terms: (1 + Real GDP Growth) × (1 + Premium) − 1. Each projected year compounds on the previous year's closing figure, and the period CAGR is computed as (Final ÷ Start) raised to the power of 1 divided by the number of years, minus one.</p>

            <h3>Why a Macro Anchor Beats a Guessed Rate</h3>
            <p>A company growing exactly with nominal GDP is, by definition, holding constant market share. Growth above that implies you are taking share from competitors or expanding the market; growth below implies you are losing share. Forcing the assumption into an explicit premium makes the forecast honest and easy to challenge — a discipline lenders and venture investors expect. The approach is a recognised "top-down" forecasting method, used alongside bottom-up unit economics for a complete plan.</p>

            <h3>Top-Down vs Bottom-Up</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Aspect</th><th>Top-Down (this tool)</th><th>Bottom-Up</th></tr>
                </thead>
                <tbody>
                    <tr><td>Starting point</td><td>Macro GDP &amp; inflation</td><td>Units × price × conversion</td></tr>
                    <tr><td>Best for</td><td>Established, stable revenue</td><td>Early-stage, granular plans</td></tr>
                    <tr><td>Key risk</td><td>Premium assumption</td><td>Pipeline optimism</td></tr>
                    <tr><td>Investor use</td><td>Sanity check / baseline</td><td>Operating plan</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="imf-data">
            <h2>IMF World Economic Outlook Data for India</h2>
            <p>The IMF's World Economic Outlook (WEO) is the most widely cited independent source of macroeconomic projections. For revenue planning, the two figures that matter are real GDP growth (the volume of economic expansion) and the GDP deflator or consumer inflation (the price effect). Together they give nominal GDP growth — the natural ceiling for a company that is not gaining market share.</p>
            <p>In its April 2026 update, the IMF projected <a href="https://www.imf.org/en/countries/ind" target="_blank" rel="noopener">India's real GDP growth</a> at roughly 6.5% for 2026 (broadly FY27), citing a strong prior-year base and easing external headwinds, while flagging geopolitical risks that could revise the figure. Independent trackers compiling the same WEO April 2026 dataset likewise report India growing about 6.5% with GDP per capita near US$2,813 for 2026. These are the defaults pre-filled in the calculator.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Indicator</th><th>Source</th><th>Typical Use in Forecast</th></tr>
                </thead>
                <tbody>
                    <tr><td>Real GDP growth</td><td>IMF WEO (NGDP_RPCH)</td><td>Volume baseline</td></tr>
                    <tr><td>GDP deflator</td><td>IMF WEO (NGDP_D)</td><td>Inflation / price effect</td></tr>
                    <tr><td>Inflation, avg CPI</td><td>IMF WEO (PCPIPCH)</td><td>Alternative price proxy</td></tr>
                    <tr><td>Nominal GDP growth</td><td>Derived</td><td>Market-share-neutral ceiling</td></tr>
                </tbody>
            </table>
            <div class="callout warn">
                <p><strong>Note:</strong> IMF projections are revised at least twice a year (April and October WEO, with January and July updates). Always confirm the current figure on the <a href="https://www.imf.org/en/Publications/WEO" target="_blank" rel="noopener">IMF WEO page</a> before finalising a model — a forecast built on a superseded projection is the most common avoidable error in fundraising decks.</p>
            </div>
            <p>For context on how India's official statistics interact with these projections, the Reserve Bank of India's growth and inflation assessments are published by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>, and corporate financial statements feeding your base revenue are governed by standards notified under the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>.</p>
        </section>

        <section class="content-section" id="interpreting">
            <h2>Interpreting Your Results</h2>
            <p>The calculator returns four things: the effective annual growth rate it applied, the compounded CAGR over the whole period, the final-year revenue, and a year-by-year table. Here is how to read each in an Indian planning context.</p>
            <h3>Effective Annual Growth</h3>
            <p>This is the single compounded rate derived from your IMF inputs and premium. If it is close to nominal GDP (roughly 10–11% in the current environment), your plan assumes no market-share change — usually the most credible default for a mature business.</p>
            <h3>CAGR vs Year-by-Year</h3>
            <p>Because the model compounds at a constant rate, the period CAGR equals the effective annual growth. The value of the year-by-year table is in the rupee figures: it shows exactly when revenue crosses thresholds that trigger compliance — for example GST audit applicability or tax-audit limits under the Income Tax Act.</p>
            <h3>Nominal vs Real Output</h3>
            <p>Always tell your audience which basis you used. Lenders sizing a term loan want nominal revenue because EMIs are paid in nominal rupees. Strategy teams judging whether the business is genuinely scaling want the real figure, because nominal growth can flatter a company that is merely riding inflation.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> If your required premium to hit a target valuation is more than about 15–20% above nominal GDP for several consecutive years, expect investors to demand a detailed market-share and unit-economics story. The IMF anchor makes such aggressive assumptions visible rather than buried.</p>
            </div>
        </section>

        <section class="content-section" id="india-rules">
            <h2>India Tax &amp; Compliance Implications of Your Projection</h2>
            <p>A revenue projection is not just a planning artefact in India — it directly drives several statutory obligations. Use the calculator's year-by-year output to anticipate the financial year in which each of the following is triggered, then plan cash flow and professional engagement accordingly.</p>
            <h3>Advance Tax</h3>
            <p>Under the Income Tax Act, companies and many other taxpayers must pay advance tax in instalments when estimated tax liability for the year exceeds the prescribed threshold. A forward revenue path helps you estimate each instalment and avoid interest under sections 234B and 234C. Refer to the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> for current due dates and rates.</p>
            <h3>GST Registration &amp; Audit Thresholds</h3>
            <p>GST registration becomes mandatory once aggregate turnover crosses the limits notified under the CGST framework, and turnover-linked obligations such as reconciliation statements apply above higher thresholds. The projection lets you see the year your turnover is likely to cross these lines. Confirm current limits on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Portal</a> and the <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> site, since thresholds are periodically revised by the GST Council.</p>
            <h3>Tax Audit &amp; Statutory Audit</h3>
            <p>Crossing turnover thresholds under the Income Tax Act brings tax-audit applicability, and every company incorporated under the Companies Act 2013 requires a statutory audit regardless of turnover. Professional standards for these audits are issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. Knowing the projected crossing year lets you budget audit fees and timelines in advance.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool is a planning aid, not tax advice. Statutory thresholds, rates and due dates change. Always confirm the applicable position for your financial year with a Chartered Accountant before relying on a projection for advance tax, GST or audit decisions.</p>
            </div>
            <p>If you would like a board-ready financial model that integrates these compliance triggers, scenario analysis and tax provisioning, Patron Accounting's team builds customised projections — see our <a href="/accounting-and-bookkeeping">accounting and bookkeeping</a> and <a href="/income-tax-return">income tax return</a> services.</p>
        </section>

        <div class="body-cta">
    <h3>Need Help with Financial Projections &amp; Tax Planning?</h3>
    <p>Patron Accounting LLP supports founders, finance teams and CFOs with investor-grade models — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IMF%20Revenue%20Projection%20Calculator.%20I%20need%20help%20with%20financial%20projections%20and%20modelling.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=IMF%20Revenue%20Projection%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20revenue%20projections.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
</div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About the IMF Revenue Projection Calculator</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the IMF Revenue Projection Calculator?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">It is a free online tool that forecasts a business's future revenue by anchoring projections to IMF World Economic Outlook macro data for India — real GDP growth and GDP-deflator inflation — combined with a company-specific outperformance premium. It produces a year-by-year nominal and real revenue path useful for budgeting, fundraising decks and board planning.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Why anchor revenue projections to IMF data?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">IMF World Economic Outlook projections are independent, methodologically consistent and widely accepted by investors and lenders. Anchoring a forecast to nominal GDP growth gives a defensible baseline: a company growing only with the economy assumes zero market-share change. Adding an explicit premium forces founders to justify why they will beat the macro environment.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What IMF GDP growth rate does the calculator use for India?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The default real GDP growth is pre-filled from the IMF World Economic Outlook April 2026 update, which projects India's real GDP growth at about 6.5% for 2026 (FY27). You can override this with any IMF figure or your own assumption. Always check the latest WEO release on imf.org because projections are revised twice a year.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the difference between nominal and real revenue projection?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Nominal revenue includes the effect of inflation, so it grows by real GDP growth plus the GDP deflator plus your premium. Real revenue strips out inflation and shows growth in constant-price terms. Lenders usually want nominal numbers for repayment cover, while strategic planning often uses real growth to judge genuine volume expansion.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How is nominal growth calculated from IMF inputs?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The calculator uses an approximate compounding identity: nominal growth equals (1 + real GDP growth) multiplied by (1 + GDP-deflator inflation) multiplied by (1 + your company premium), minus one. This is more accurate than simply adding the three rates, especially over longer horizons where the cross-product becomes material.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is this calculator suitable for a startup with no revenue history?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Partly. A macro-anchored model works best for established businesses with a stable base. Early-stage startups should pair it with a bottom-up forecast (units multiplied by price multiplied by conversion). Use the IMF baseline as a sanity check: if your bottom-up plan implies growth far above nominal GDP for many years, investors will expect a strong market-share narrative.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does the tool store or send my financial data?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The calculator runs entirely in your browser using JavaScript. No revenue figures, growth assumptions or results are transmitted to any server or stored anywhere. You can use it offline once the page has loaded, and refreshing the page clears all inputs for confidentiality.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How accurate are IMF-anchored revenue forecasts?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No multi-year forecast is precise. IMF projections themselves carry uncertainty and are revised for shocks like tariff changes or geopolitical conflict. Treat the output as a disciplined baseline scenario, not a guarantee. Build optimistic and conservative cases by adjusting the premium, and revisit the model whenever a new World Economic Outlook is published.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I use this for income tax or GST advance estimation?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Indirectly. Projected revenue informs advance tax instalments under the Income Tax Act and helps anticipate GST registration thresholds or turnover-based compliance. However, statutory computations need actual books and applicable rates. Use the projection for planning and confirm tax positions with a Chartered Accountant before filing or making advance tax payments.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What growth premium should I assume over GDP?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">There is no universal figure. A mature business in a saturated sector may grow at or below nominal GDP, implying a zero or negative premium. A scaling company gaining market share might justify 5%–20% above GDP. Base the premium on historical outperformance, pipeline visibility and competitive position, and document the rationale for investors.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How often does the IMF update its projections for India?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The IMF publishes the World Economic Outlook twice a year — typically in April and October — with interim updates in January and July. Article IV consultations also produce country-specific assessments. Because figures change between releases, always verify the latest real GDP growth and deflator on imf.org before finalising a forecast.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the IMF Revenue Projection Calculator free to use?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, it is completely free with no sign-up, no usage limit and no paywall. Patron Accounting LLP provides it as a planning aid for founders, finance teams and CFOs in India. For a board-ready financial model with scenario analysis and tax integration, our Chartered Accountants can build a customised projection on request.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need a Board-Ready Financial Model?</h3>
            <p>Investor-grade revenue projections with scenario analysis and tax integration — fixed-fee.</p>
            <div class="brand-cta-stack">
                <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IMF%20Revenue%20Projection%20Calculator.%20I%20need%20help%20with%20financial%20projections%20and%20modelling.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
                <a href="mailto:sales@patronaccounting.com?subject=IMF%20Revenue%20Projection%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20revenue%20projections.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
            </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-and-bookkeeping" class="sidebar-link">Accounting &amp; Bookkeeping <span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit <span class="arrow">→</span></a>
            <a href="/startup-registration" class="sidebar-link">Startup Registration <span class="arrow">→</span></a>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/roi-calculator" class="sidebar-link">ROI Calculator <span class="arrow">→</span></a>
            <a href="/tools/break-even-calculator" class="sidebar-link">Break-Even Calculator <span class="arrow">→</span></a>
            <a href="/tools/compound-interest-calculator" class="sidebar-link">Compound Interest Calculator <span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/profit-loss-generator" class="sidebar-link">Profit &amp; Loss Generator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">→</span></a>
            <a href="/blog/economic-value-added-eva" class="sidebar-link">Economic Value Added (EVA) <span class="arrow">→</span></a>
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
    var currentBasis = 'nominal';

    function setBasis(btn) {
        var el = btn.closest('.toggle-btn') || btn;
        currentBasis = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        el.classList.add('active');
    }

    function formatCurrency(num) {
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }

    function calculate() {
        var base = parseINR(document.getElementById('baseRevenue').value);
        var years = parseInt(String(document.getElementById('years').value).replace(/[,\s]/g,''), 10);
        var realG = parseINR(document.getElementById('realGdp').value);
        var defl = parseINR(document.getElementById('deflator').value);
        var prem = parseINR(document.getElementById('premium').value);

        if (isNaN(base) || base <= 0) { alert('Please enter a valid current annual revenue.'); return; }
        if (isNaN(years) || years < 1 || years > 10) { alert('Projection period must be between 1 and 10 years.'); return; }
        if (isNaN(realG)) realG = 0;
        if (isNaN(defl)) defl = 0;
        if (isNaN(prem)) prem = 0;

        var r = realG / 100;
        var i = defl / 100;
        var p = prem / 100;

        var growth;
        if (currentBasis === 'nominal') {
            growth = (1 + r) * (1 + i) * (1 + p) - 1;
        } else {
            growth = (1 + r) * (1 + p) - 1;
        }

        var rows = [];
        var opening = base;
        for (var y = 1; y <= years; y++) {
            var closing = opening * (1 + growth);
            rows.push({ year: y, opening: opening, growth: growth * 100, closing: closing });
            opening = closing;
        }
        var finalRev = rows[rows.length - 1].closing;
        var cagr = Math.pow(finalRev / base, 1 / years) - 1;
        var totalGrowth = (finalRev / base) - 1;

        document.getElementById('resGrowth').textContent = (growth * 100).toFixed(2) + '%';
        document.getElementById('resCagr').textContent = (cagr * 100).toFixed(2) + '%';
        document.getElementById('resFinal').textContent = formatCurrency(finalRev);

        document.getElementById('bdStart').textContent = formatCurrency(base);
        document.getElementById('bdTotalGrowth').textContent = (totalGrowth * 100).toFixed(2) + '%';
        document.getElementById('bdIncrease').textContent = formatCurrency(finalRev - base);
        document.getElementById('bdBasis').textContent = currentBasis === 'nominal' ? 'Nominal (incl. inflation)' : 'Real (constant prices)';

        var tbody = document.getElementById('projTableBody');
        tbody.innerHTML = '';
        rows.forEach(function(row) {
            var tr = document.createElement('tr');
            tr.innerHTML = '<td>Year ' + row.year + '</td>' +
                '<td>' + formatCurrency(row.opening) + '</td>' +
                '<td>' + row.growth.toFixed(2) + '%</td>' +
                '<td>' + formatCurrency(row.closing) + '</td>';
            tbody.appendChild(tr);
        });

        var maxVal = rows[rows.length - 1].closing;
        var chart = document.getElementById('chartBars');
        chart.innerHTML = '';
        var startCol = document.createElement('div');
        startCol.className = 'chart-bar-col';
        startCol.innerHTML = '<div class="chart-bar" style="height:' + (base / maxVal * 100) + '%"></div><div class="chart-bar-label">Now</div>';
        chart.appendChild(startCol);
        rows.forEach(function(row) {
            var col = document.createElement('div');
            col.className = 'chart-bar-col';
            col.innerHTML = '<div class="chart-bar" style="height:' + (row.closing / maxVal * 100) + '%"></div><div class="chart-bar-label">Y' + row.year + '</div>';
            chart.appendChild(col);
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
        document.getElementById('baseRevenue').value = '';
        document.getElementById('years').value = '5';
        document.getElementById('realGdp').value = '6.5';
        document.getElementById('deflator').value = '4.0';
        document.getElementById('premium').value = '0';
        currentBasis = 'nominal';
        var tg = document.getElementById('basisToggle');
        tg.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        tg.querySelector('[data-value="nominal"]').classList.add('active');
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

    ['baseRevenue','years','realGdp','deflator','premium'].forEach(function(id){
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
