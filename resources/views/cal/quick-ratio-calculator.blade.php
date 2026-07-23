@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Quick Ratio Calculator | Acid Test Ratio &amp; Benchmarks</title>
    <meta name="description" content="Quick Ratio (Acid Test) Calculator: build up quick assets, run a stress test and compare against industry benchmarks. ICAI-aligned, CA-reviewed. Free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/quick-ratio-calculator/">
    <meta property="og:title" content="Quick Ratio Calculator (Acid Test) — Free 2026">
    <meta property="og:description" content="Compute Quick Ratio + Cash Ratio with stress testing. Build-up of quick assets. Schedule III aligned. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/quick-ratio-calculator">
    <meta property="og:image" content="/tools/og/quick-ratio-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quick Ratio Calculator (Acid Test) — Free 2026">
    <meta name="twitter:description" content="Quick Ratio + Cash Ratio with stress testing. Build-up of quick assets. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/quick-ratio-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Quick Ratio Calculator",
      "description": "Quick Ratio Calculator (Acid Test) computes the quick ratio for Indian companies, LLPs and businesses using a build-up approach for quick assets — Cash and Bank Balances, Marketable Securities and Current Investments, Trade Receivables (net of Expected Credit Loss provisions under Ind AS 109), and Other Current Receivables divided by Total Current Liabilities. The standard formula is Quick Ratio = (Current Assets minus Inventory minus Prepaid Expenses) divided by Current Liabilities, equivalently Quick Ratio = (Cash plus Marketable Securities plus Receivables) divided by Current Liabilities. The tool includes optional stress-testing for adverse scenarios — receivables haircut to simulate collection delays and marketable securities haircut for market value drops. Output includes Quick Ratio, Super-Quick Ratio also known as Cash Ratio, stress-tested ratio, health zone classification (Stressed below 0.5, Acceptable 0.5-1.0, Healthy 1.0-1.5, Strong above 1.5), and industry benchmark comparison. Aligned with Schedule III of the Companies Act 2013 ratio disclosure framework effective FY 2021-22 and lender covenant requirements typically embedded in working capital loan agreements.",
      "url": "/tools/quick-ratio-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-19T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
      "author": {
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
        {"@type": "ListItem", "position": 3, "name": "Quick Ratio Calculator", "item": "/tools/quick-ratio-calculator"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-19T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The quick ratio (also called acid test ratio) is a stricter liquidity ratio than the current ratio. It measures a company's ability to meet short-term obligations using only its most liquid assets — cash, marketable securities and receivables. Inventory and prepaid expenses are excluded because they cannot be converted to cash quickly enough in an adverse scenario. Quick Ratio = (Cash + Marketable Securities + Receivables) ÷ Current Liabilities, equivalently (Current Assets − Inventory − Prepaid) ÷ Current Liabilities."
          }
        },
        {
          "@type": "Question",
          "name": "How does quick ratio differ from current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Current ratio includes all current assets in the numerator, including inventory and prepaid expenses. Quick ratio strips those out, focusing only on assets readily convertible to cash. Quick ratio is more conservative and typically lower than current ratio. A company can have a healthy current ratio of 2.0 but a stressed quick ratio of 0.4 if most current assets are slow-moving inventory. Lenders increasingly use quick ratio for inventory-heavy businesses."
          }
        },
        {
          "@type": "Question",
          "name": "Why is inventory excluded from quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Inventory is excluded because it requires sales activity to convert to cash, which takes time. In a liquidity crunch, inventory may need to be discounted heavily to dispose quickly, or may be obsolete with limited resale value. The quick ratio assumes a stress scenario where the company must meet obligations from existing receivables and cash, without relying on selling inventory. This makes the quick ratio especially useful for cyclical businesses, tech companies and during market downturns."
          }
        },
        {
          "@type": "Question",
          "name": "Why are prepaid expenses excluded from quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Prepaid expenses are excluded because they cannot be converted back into cash. They represent payments already made for future services — rent, insurance, software subscriptions. Even in a liquidity crisis, prepaid expenses do not generate cash inflow; they only reduce future cash outflows. Some practitioners also exclude tax receivables and statutory deposits, although these are typically small and recoverable. The quick ratio formula assumes only assets that can fund obligations from external sources."
          }
        },
        {
          "@type": "Question",
          "name": "What is the acid test ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Acid test ratio is another name for the quick ratio — they refer to the same metric. The term originates from gold prospecting, where acid was used to test gold authenticity quickly. Applied to corporate finance, the acid test asks whether a company can pay off its short-term obligations from quick assets alone — passing the test means the company would not collapse in a short-term liquidity squeeze. Both terms appear interchangeably in lender agreements and financial analysis."
          }
        },
        {
          "@type": "Question",
          "name": "What is the super-quick ratio or cash ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The super-quick ratio (cash ratio) is even stricter than the quick ratio — only cash and cash equivalents divided by current liabilities. Receivables are excluded since collection may be uncertain or delayed. Cash Ratio = (Cash + Cash Equivalents) ÷ Current Liabilities. A cash ratio above 0.5 indicates very strong immediate liquidity. Most healthy companies operate at 0.2 to 0.5. The cash ratio is most relevant for distressed companies or crisis scenario testing."
          }
        },
        {
          "@type": "Question",
          "name": "What is a good quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A quick ratio of 1.0 or above is generally considered healthy — the company can pay all current liabilities from quick assets alone. Below 0.5 signals stress; 0.5 to 1.0 is acceptable but tight; above 1.5 may indicate excess liquid assets not deployed productively. Industry context matters significantly — services and IT typically operate at 1.5 plus given low inventory, while inventory-heavy retail or manufacturing may operate healthily at 0.7 to 1.2."
          }
        },
        {
          "@type": "Question",
          "name": "What are typical industry benchmarks for quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT and services typically target 1.5 to 2.5 (low inventory). Pharma operates at 1.0 to 2.0. Manufacturing targets 0.8 to 1.2 due to inventory and receivables. FMCG and trading at 0.5 to 1.0 with high inventory turnover. Retail at 0.3 to 0.7. Real estate varies widely 0.5 to 1.5. Hospitality at 0.5 to 1.0 due to perishable inventory and prepaid bookings. Always benchmark against listed peers in the same sector for meaningful comparison."
          }
        },
        {
          "@type": "Question",
          "name": "How do you calculate quick ratio from a balance sheet?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From Schedule III balance sheet under Companies Act 2013: Numerator = Cash and Cash Equivalents + Other Bank Balances + Current Investments + Trade Receivables (net of ECL) + Loans (current) + Other Financial Assets (current). Denominator = Total Current Liabilities (Borrowings, Trade Payables, Other Financial Liabilities, Other Current Liabilities, Provisions current, Current Tax Liabilities). Exclude Inventories and Other Current Assets where prepaid expenses sit. Most companies disclose Quick Ratio in Notes to Accounts under Ratio Analysis."
          }
        },
        {
          "@type": "Question",
          "name": "What are limitations of the quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Quick ratio has limitations: it treats all receivables as equally liquid (older receivables may not collect), uses point-in-time data subject to year-end window dressing, ignores cash flow timing within the next 12 months, and treats current liabilities as equally urgent when some have flexible terms. The ratio also does not capture available undrawn credit lines, which may be substantial. Use quick ratio alongside cash ratio, cash flow from operations and DSO trend for complete liquidity picture."
          }
        },
        {
          "@type": "Question",
          "name": "Why do lenders examine quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lenders use quick ratio for inventory-heavy borrowers — manufacturing, retail, FMCG — where current ratio could overstate liquidity. Working capital loan agreements may include both current ratio and quick ratio covenants. Banks also stress-test the quick ratio under recessionary scenarios where receivables collection slows by 30-50%. Failing the stress test, even with healthy current ratio, can lead to higher interest rates, additional collateral requirements or limit reductions on cash credit facilities."
          }
        },
        {
          "@type": "Question",
          "name": "How can a company improve its quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Strategies to improve quick ratio: accelerate receivables collection, factor or discount receivables to convert to cash, reduce dependence on short-term debt by refinancing to long-term, raise fresh equity, sale of marketable securities to repay payables, reduce slow-moving inventory through targeted promotions. Avoid measures that hurt operations — aggressive collection that damages customer relationships, or refusing supplier credit that damages supplier ties. The best route is improving the cash conversion cycle holistically."
          }
        },
        {
          "@type": "Question",
          "name": "What does a quick ratio below 1 mean?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A quick ratio below 1 means the company cannot fully cover current liabilities from quick assets alone — it must liquidate inventory, draw credit lines, or roll over payables. This is not always alarming — many healthy retailers, FMCG and distribution businesses operate below 1 because inventory turns to cash quickly through high sales velocity. For service or IT businesses, a quick ratio below 1 is unusual and warrants closer examination of working capital management."
          }
        }
      ]
    }
    </script>
@endsection

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
        body { font-family: var(--font-body); background: var(--surface); color: var(--text); line-height: 1.65; -webkit-font-smoothing: antialiased; }
        .toc-nav { background: var(--primary-dark); position: sticky; top: 0; z-index: 100; overflow-x: auto; white-space: nowrap; -webkit-overflow-scrolling: touch; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; }
        .toc-nav a { color: rgba(255,255,255,0.75); text-decoration: none; font-size: 13px; font-weight: 500; padding: 12px 16px; transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block; }
        .toc-nav a:hover, .toc-nav a.active { color: #fff; border-bottom-color: var(--accent); }
        .breadcrumb { max-width: 1200px; margin: 0 auto; padding: 16px 20px 0; font-size: 13px; color: var(--text-muted); }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }
        .hero { max-width: 1200px; margin: 0 auto; padding: 32px 20px 24px; }
        .hero-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 16px; }
        .badge-updated { background: var(--primary); color: #fff; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px; letter-spacing: 0.3px; }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }
        .hero h1 { font-size: clamp(28px, 5vw, 42px); font-weight: 700; color: var(--primary-dark); line-height: 1.2; margin-bottom: 16px; }
        .hero h1 span { color: var(--accent); display: inline; }
        .tldr { background: var(--card); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 20px 24px; margin: 0 auto 32px; max-width: 1200px; box-shadow: var(--shadow-sm); }
        .tldr-label { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }
        .main-layout { max-width: 1200px; margin: 0 auto; padding: 0 20px 40px; display: grid; grid-template-columns: 1fr; gap: 32px; }
        @media (min-width: 768px) { .main-layout { grid-template-columns: 1fr 320px; gap: 40px; } }
        .content-col, .sidebar-col { min-width: 0; }
        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }
        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 14px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .live-totals { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; padding: 12px 14px; background: var(--surface-alt); border-radius: var(--radius); margin: 16px 0; font-size: 13px; }
        .live-totals .total-card { padding: 10px 12px; background: var(--card); border-radius: 8px; }
        .live-totals .total-label { font-size: 10px; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .live-totals .total-value { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); font-size: 16px; }

        .stress-toggle-row { display: flex; align-items: center; justify-content: space-between; gap: 14px; padding: 14px 16px; background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border: 1.5px solid var(--accent); border-radius: var(--radius); margin: 18px 0 14px; cursor: pointer; -webkit-tap-highlight-color: transparent; user-select: none; }
        .stress-toggle-row * { pointer-events: none; }
        .stress-toggle-row:hover { background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%); }
        .stress-toggle-text { font-size: 13px; font-weight: 600; color: var(--primary-dark); flex: 1; }
        .stress-toggle-text small { display: block; font-size: 11px; font-weight: 400; color: var(--text-secondary); margin-top: 2px; }
        .stress-toggle-switch { width: 40px; height: 22px; background: var(--surface-alt); border: 1.5px solid var(--border); border-radius: 11px; position: relative; transition: all 0.25s; flex-shrink: 0; }
        .stress-toggle-switch::after { content: ""; position: absolute; top: 1px; left: 1px; width: 16px; height: 16px; background: var(--card); border-radius: 50%; transition: transform 0.25s; box-shadow: 0 1px 2px rgba(0,0,0,0.1); }
        .stress-toggle-row.on .stress-toggle-switch { background: var(--primary); border-color: var(--primary); }
        .stress-toggle-row.on .stress-toggle-switch::after { transform: translateX(18px); }
        .stress-block { display: none; }
        .stress-block.show { display: block; }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid; }
        .verdict-card.healthy { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.acceptable { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.stressed { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.idle { background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border-left-color: var(--info); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 14px; }
        @media (max-width: 500px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 24px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(4, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-card.stress { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-color: var(--accent); }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .breakdown-table { width: 100%; border-collapse: collapse; margin: 8px 0; font-size: 13px; }
        .breakdown-table thead th { background: var(--primary); color: #fff; padding: 10px 12px; text-align: right; font-weight: 600; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .breakdown-table thead th:first-child { text-align: left; border-radius: 6px 0 0 0; }
        .breakdown-table thead th:last-child { border-radius: 0 6px 0 0; }
        .breakdown-table tbody td { padding: 8px 12px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .breakdown-table tbody td:first-child { text-align: left; font-family: var(--font-body); font-weight: 600; color: var(--primary-dark); }
        .breakdown-table tbody tr:nth-child(even) { background: var(--surface); }
        .breakdown-table tfoot td { padding: 10px 12px; background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .breakdown-table tfoot td:first-child { text-align: left; font-family: var(--font-body); }

        .gauge-bar { height: 12px; background: linear-gradient(to right, var(--danger) 0%, var(--danger) 25%, var(--accent) 25%, var(--accent) 50%, var(--success) 50%, var(--success) 75%, var(--info) 75%, var(--info) 100%); border-radius: 6px; position: relative; margin: 16px 0 30px; }
        .gauge-marker { position: absolute; top: -6px; width: 4px; height: 24px; background: var(--primary-dark); border-radius: 2px; transform: translateX(-50%); transition: left 0.5s ease; }
        .gauge-marker::after { content: attr(data-val); position: absolute; bottom: -22px; left: 50%; transform: translateX(-50%); font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--primary-dark); white-space: nowrap; }
        .gauge-marker-stress { position: absolute; top: -3px; width: 3px; height: 18px; background: var(--accent); border-radius: 2px; transform: translateX(-50%); transition: left 0.5s ease; opacity: 0.85; }
        .gauge-marker-stress::after { content: "stress"; position: absolute; top: 22px; left: 50%; transform: translateX(-50%); font-family: var(--font-mono); font-size: 9px; font-weight: 700; color: var(--accent); white-space: nowrap; text-transform: uppercase; letter-spacing: 0.5px; }
        .gauge-labels { display: flex; justify-content: space-between; font-size: 10px; font-family: var(--font-mono); color: var(--text-muted); margin-top: 6px; }
        .gauge-labels span { font-weight: 600; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(31,74,122,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; }
        .faq-question * { pointer-events: none; }
        .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
        .faq-item.open .faq-answer { max-height: 700px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }
        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .cta-btn:hover { background: var(--accent-light); }
        .body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 32px; margin: 28px 0; text-align: center; }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .verdict-grid-value { font-size: 20px; }
        }
    
/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}

/* ===== Patron CTA system v1 (4 placements x 3 channels) ===== */
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px;}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap;}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45;}
.brand-cta-bar-text strong{color:var(--text);font-weight:700;}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap;}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,background .2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px;}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,.12);}
.brand-cta-btn:active{transform:translateY(0);}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0;}
.brand-cta-btn-call{background:var(--accent);color:#fff;}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff;}
.brand-cta-btn-wa{background:#25D366;color:#fff;}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff;}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5;}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text);}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px;}
.brand-cta-stack .brand-cta-btn{width:100%;}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px;}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px;}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4;}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55;}
.post-result-cta .brand-cta-bar-actions{gap:8px;}
@media (max-width:767px){
 .brand-cta-bar{padding:12px 14px;}
 .brand-cta-bar-text{font-size:13px;flex-basis:100%;}
 .brand-cta-bar-actions{width:100%;gap:8px;}
 .brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0;min-height:44px;}
 .brand-cta-bar .brand-cta-btn-call{flex:1 1 100%;}
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta{padding:16px;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
@media (min-width:768px) and (max-width:950px){
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
/* ===== A11y: focus-visible (WCAG 2.4.7) ===== */
.form-group input,.form-group select{outline:2px solid transparent;outline-offset:2px;}
.form-group input:focus-visible,.form-group select:focus-visible{outline:2px solid var(--accent);outline-offset:2px;}
a:focus-visible,button:focus-visible,.toggle-btn:focus-visible,.brand-cta-btn:focus-visible,.faq-question:focus-visible,.cta-btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px;}
/* ===== Reduced motion (WCAG 2.3.3) ===== */
@media (prefers-reduced-motion:reduce){
 *,*::before,*::after{animation-duration:.001ms!important;animation-iteration-count:1!important;transition-duration:.001ms!important;scroll-behavior:auto!important;}
}
/* ===== Print stylesheet (working-paper output) ===== */
@media print{
 .toc-nav,.brand-cta-bar,.body-cta,.cta-card,.post-result-cta,.wa-sticky-bar,.sidebar-col,.faq-section{display:none!important;}
 body{background:#fff;color:#000;}
 a[href]::after{content:"";}
 .container,.main-col{max-width:100%!important;width:100%!important;}
}

</style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#variants">Quick vs Acid vs Cash</a>
        <a href="#benchmarks">Benchmarks</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Quick Ratio Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Quick Ratio Calculator <span>(Acid Test)</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Quick%20Ratio%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Quick%20Ratio%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Quick%20Ratio%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The Quick Ratio (acid test) measures short-term liquidity using only the most liquid assets — Cash, Marketable Securities and Receivables — divided by Current Liabilities. It strips out inventory and prepaid expenses that cannot convert to cash quickly. A ratio of 1.0 or above is healthy for most industries; below 0.5 signals stress. This calculator uses a build-up approach for quick assets (additive, not subtractive from CA) plus an optional stress test that haircuts receivables and marketable securities to test resilience under adverse scenarios.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute Quick Ratio</h2>
            <p class="calc-intro">Build up your quick assets line by line — cash, securities, receivables. Enter total current liabilities. Optionally enable stress testing to apply haircuts to receivables (collection delays) and securities (market drops).</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Quick Assets (Build-up)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="qa_cash">Cash &amp; Bank Balances (₹)</label>
                    <input type="text" id="qa_cash" min="0" step="any" placeholder="0" inputmode="decimal" data-section="qa" autocomplete="off">
                    <span class="helper">Cash on hand + current accounts + demand deposits + short-term FDs (under 3 months).</span>
                </div>
                <div class="form-group">
                    <label for="qa_securities">Marketable Securities (₹)</label>
                    <input type="text" id="qa_securities" min="0" step="any" placeholder="0" inputmode="decimal" data-section="qa" autocomplete="off">
                    <span class="helper">Liquid mutual funds, treasury bills, current investments held for trading.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="qa_recv">Trade Receivables — Net (₹)</label>
                    <input type="text" id="qa_recv" min="0" step="any" placeholder="0" inputmode="decimal" data-section="qa" autocomplete="off">
                    <span class="helper">Net of provision for ECL / doubtful debts under Ind AS 109.</span>
                </div>
                <div class="form-group">
                    <label for="qa_other">Other Receivables (Current) (₹)</label>
                    <input type="text" id="qa_other" min="0" step="any" placeholder="0" inputmode="decimal" data-section="qa" autocomplete="off">
                    <span class="helper">Loans, interest accrued, unbilled revenue, refunds due.</span>
                </div>
            </div>

            <div class="calc-section-title">Current Liabilities</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="cl_total">Total Current Liabilities (₹)</label>
                    <input type="text" id="cl_total" min="0" step="any" placeholder="e.g. 5000000" inputmode="decimal" data-section="cl" autocomplete="off">
                    <span class="helper">Total from balance sheet — borrowings, payables, statutory dues, provisions current, current tax.</span>
                </div>
                <div class="form-group">
                    <label for="prior_qr">Prior Period Quick Ratio — Optional</label>
                    <input type="text" id="prior_qr" min="0" max="10" step="0.01" placeholder="e.g. 1.20" inputmode="decimal" autocomplete="off">
                    <span class="helper">Enter previous year's quick ratio to compute trend. Schedule III requires variance explanation if &gt;25%.</span>
                </div>
            </div>

            <div class="live-totals" id="liveTotals" style="display:none;">
                <div class="total-card">
                    <div class="total-label">Total Quick Assets</div>
                    <div class="total-value" id="liveQa">₹0</div>
                </div>
                <div class="total-card">
                    <div class="total-label">Total Current Liabilities</div>
                    <div class="total-value" id="liveCl">₹0</div>
                </div>
            </div>

            <div class="stress-toggle-row" id="stressToggle">
                <div class="stress-toggle-text">
                    Enable Stress Testing
                    <small>Apply haircuts to receivables (slow collection) and securities (market drop) to test liquidity resilience.</small>
                </div>
                <div class="stress-toggle-switch"></div>
            </div>

            <div class="stress-block" id="stressBlock">
                <div class="calc-row">
                    <div class="form-group">
                        <label for="stress_recv">Receivables Haircut (%)</label>
                        <input type="text" id="stress_recv" min="0" max="80" step="1" value="30" inputmode="decimal" autocomplete="off">
                        <span class="helper">% of receivables assumed uncollectable in stress scenario. Banks typically test 30-50%.</span>
                    </div>
                    <div class="form-group">
                        <label for="stress_sec">Marketable Securities Haircut (%)</label>
                        <input type="text" id="stress_sec" min="0" max="50" step="1" value="15" inputmode="decimal" autocomplete="off">
                        <span class="helper">% market value drop assumed for marketable securities. Typical stress test 10-25%.</span>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Quick Ratio</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Quick Ratio (Acid Test)</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Quick Ratio</div>
                            <div class="verdict-grid-value" id="qrVal">0.00</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label" id="secondaryLabel">Cash Ratio</div>
                            <div class="verdict-grid-value" id="secondaryVal">0.00</div>
                        </div>
                    </div>
                </div>

                <div style="margin: 8px 0 8px;">
                    <div class="gauge-bar">
                        <div class="gauge-marker" id="gaugeMarker" data-val="0.00" style="left:50%"></div>
                        <div class="gauge-marker-stress" id="gaugeStressMarker" style="left:50%; display:none;"></div>
                    </div>
                    <div class="gauge-labels">
                        <span>Stressed (&lt;0.5)</span>
                        <span>Acceptable (0.5-1.0)</span>
                        <span>Healthy (1.0-1.5)</span>
                        <span>Strong (&gt;1.5)</span>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div id="breakdownOutput"></div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Quick Ratio Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Quick%20Ratio%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Quick%20Ratio%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Quick%20Ratio%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The quick ratio is a stricter liquidity test than the current ratio. By stripping inventory and prepaid expenses, it shows whether the business can meet short-term obligations even if no inventory is sold during the period. The "build-up" approach used here is more transparent than the traditional "subtract from current assets" method — you see exactly what's driving the ratio.</p>

            <h3>The Standard Formula</h3>
            <div class="formula-box">
<span class="label">Quick Ratio</span>     = Quick Assets ÷ Current Liabilities

<span class="label">Quick Assets</span>    = Cash + Bank Balances
                + Marketable Securities
                + Trade Receivables (Net)
                + Other Receivables

<span class="label">Equivalent</span>      = (Current Assets − Inventory − Prepaid) ÷ CL

<span class="label">Cash Ratio</span>      = Cash &amp; Bank ÷ Current Liabilities (super-quick)
            </div>

            <h3>Why Build-up Instead of Subtraction?</h3>
            <p>The traditional formula starts with Total Current Assets and subtracts inventory and prepaid expenses. The build-up approach is mathematically identical but more useful in practice:</p>
            <ul>
                <li><strong>Transparency</strong> — you see each component of liquidity directly, not as a residual</li>
                <li><strong>Easier verification</strong> — auditors and lenders can tie each line to the balance sheet</li>
                <li><strong>Stress testing</strong> — applying haircuts to specific quick assets is cleaner than working with totals</li>
                <li><strong>Schedule III alignment</strong> — Indian financial statements present these line items separately under the Companies Act 2013</li>
            </ul>

            <h3>Stress Testing — Why It Matters</h3>
            <p>A healthy quick ratio at year-end may not survive an adverse scenario. Stress testing applies haircuts to simulate:</p>
            <ul>
                <li><strong>Receivables haircut (30-50%)</strong> — what if a major customer delays payment by 6 months, or a portion of receivables turns into bad debts during a downturn?</li>
                <li><strong>Marketable securities haircut (10-25%)</strong> — what if the equity market drops or liquid mutual fund NAVs decline before you need to liquidate?</li>
                <li><strong>Combined scenario</strong> — banks routinely stress-test both simultaneously during credit appraisal</li>
            </ul>
            <p>If the stressed quick ratio falls below 0.5, the business has insufficient resilience to a moderate liquidity shock. Many sophisticated lenders include stress test covenants alongside base case ratio covenants.</p>

            <h3>Health Zone Classification</h3>
            <ul>
                <li><strong>Stressed (below 0.5)</strong> — quick assets cover less than half of current liabilities. Immediate action needed</li>
                <li><strong>Acceptable (0.5 to 1.0)</strong> — operable, but limited buffer. Common in inventory-heavy retail and FMCG</li>
                <li><strong>Healthy (1.0 to 1.5)</strong> — quick assets fully cover current liabilities. Industry sweet spot</li>
                <li><strong>Strong (above 1.5)</strong> — strong liquidity position. Above 2.5 may indicate excess liquid assets</li>
            </ul>
        </section>

        <section class="content-section" id="variants">
            <h2>Quick Ratio Variants — Acid Test, Cash Ratio, Modified</h2>
            <p>The "quick ratio" family includes several variants of progressively stricter definitions. Knowing which variant applies in a given context (lender covenant, audit working paper, investor analysis) avoids confusion.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Ratio</th><th>Numerator</th><th>Use Case</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Quick Ratio (Standard)</strong></td><td>Cash + Securities + Receivables</td><td>Most common — balanced liquidity test</td></tr>
                    <tr><td><strong>Acid Test Ratio</strong></td><td>Same as Quick Ratio</td><td>Same — alternate name from gold-prospecting metaphor</td></tr>
                    <tr><td><strong>Super-Quick / Cash Ratio</strong></td><td>Cash + Cash Equivalents only</td><td>Crisis testing, distressed company analysis</td></tr>
                    <tr><td><strong>Modified Quick Ratio</strong></td><td>Quick Assets weighted by aging</td><td>Internal management — applies haircuts to older receivables</td></tr>
                    <tr><td><strong>Defensive Interval Ratio</strong></td><td>Quick Assets ÷ Daily Operating Expense</td><td>Days of operating cash buffer (alternative metric)</td></tr>
                </tbody>
            </table>

            <h3>Cash Ratio — When It Matters</h3>
            <p>The cash ratio is rarely a primary decision metric for healthy companies — it would imply that even receivables are at risk. However, it becomes critical when:</p>
            <ul>
                <li>The company is in financial distress and creditors are tightening terms</li>
                <li>Auditors flag going concern uncertainty under SA 570</li>
                <li>Lenders perform crisis stress tests during credit appraisal</li>
                <li>Investors evaluate downside scenarios in M&amp;A or PE transactions</li>
                <li><a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>'s Liquidity Coverage Ratio (LCR) for banks is conceptually a cash ratio variant</li>
            </ul>

            <div class="callout warn">
                <p><strong>Schedule III disclosure note:</strong> The MCA notification dated 24 March 2021 amended Schedule III to require disclosure of nine financial ratios in Notes to Accounts effective FY 2021-22 — Current Ratio is included but Quick Ratio is not separately listed. However, many companies voluntarily disclose Quick Ratio for credit-sensitive industries. Reference at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> and <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> guidance.</p>
            </div>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks for Quick Ratio</h2>
            <p>Quick ratio benchmarks are naturally lower than current ratio benchmarks because inventory is excluded. Industries with low inventory (services, IT) target higher quick ratios; inventory-heavy industries (retail, FMCG) target lower ones. Compare against listed peers in the same sector for meaningful insight.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Industry</th><th>Quick Ratio Target</th><th>Why</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>IT / Services</strong></td><td>1.5 – 2.5</td><td>Minimal inventory; high cash cycles</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>1.0 – 2.0</td><td>Moderate inventory, regulated receivables</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>0.8 – 1.2</td><td>Significant inventory and receivables cycle</td></tr>
                    <tr><td><strong>Construction / EPC</strong></td><td>0.7 – 1.2</td><td>Project receivables, retention money</td></tr>
                    <tr><td><strong>FMCG / Trading</strong></td><td>0.5 – 1.0</td><td>High inventory turnover compensates</td></tr>
                    <tr><td><strong>Real Estate</strong></td><td>0.5 – 1.5</td><td>Project-cycle dependent; varies widely</td></tr>
                    <tr><td><strong>Hospitality</strong></td><td>0.5 – 1.0</td><td>Perishable inventory, advance bookings</td></tr>
                    <tr><td><strong>E-commerce / Retail</strong></td><td>0.3 – 0.7</td><td>High inventory, quick turnover model</td></tr>
                    <tr><td><strong>Banks / NBFCs</strong></td><td>Not applicable</td><td>LCR / NSFR framework under Basel III</td></tr>
                </tbody>
            </table>

            <h3>Lender Covenant Implications</h3>
            <p>Working capital loan agreements often include both current ratio and quick ratio covenants. Typical thresholds:</p>
            <ul>
                <li>Current Ratio ≥ 1.25 or 1.33 (broad minimum)</li>
                <li>Quick Ratio ≥ 0.75 or 1.0 (stricter, especially for inventory-heavy borrowers)</li>
                <li>Cash flow from operations ≥ 1.25× of debt service</li>
                <li>DSCR ≥ 1.5</li>
            </ul>
            <p>Breaching the quick ratio covenant — even with healthy current ratio — can trigger default events under loan documentation. <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations also require listed companies to disclose quick ratio variances in MD&amp;A. The Companies Act framework is at <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Working Capital &amp; Liquidity Audit Support?</h3>
            <p>Patron Accounting LLP supports CFO offices with quick ratio analysis, liquidity stress testing, lender covenant compliance, working capital optimisation, Schedule III ratio disclosures and financial restructuring — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Quick%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Quick%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Quick%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The quick ratio (also called acid test ratio) is a stricter liquidity ratio than the current ratio. It measures a company's ability to meet short-term obligations using only its most liquid assets — cash, marketable securities and receivables. Inventory and prepaid expenses are excluded because they cannot be converted to cash quickly enough in an adverse scenario. Quick Ratio = (Cash + Marketable Securities + Receivables) ÷ Current Liabilities, equivalently (Current Assets − Inventory − Prepaid) ÷ Current Liabilities.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does quick ratio differ from current ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Current ratio includes all current assets in the numerator, including inventory and prepaid expenses. Quick ratio strips those out, focusing only on assets readily convertible to cash. Quick ratio is more conservative and typically lower than current ratio. A company can have a healthy current ratio of 2.0 but a stressed quick ratio of 0.4 if most current assets are slow-moving inventory. Lenders increasingly use quick ratio for inventory-heavy businesses.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why is inventory excluded from quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Inventory is excluded because it requires sales activity to convert to cash, which takes time. In a liquidity crunch, inventory may need to be discounted heavily to dispose quickly, or may be obsolete with limited resale value. The quick ratio assumes a stress scenario where the company must meet obligations from existing receivables and cash, without relying on selling inventory. This makes the quick ratio especially useful for cyclical businesses, tech companies and during market downturns.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why are prepaid expenses excluded from quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Prepaid expenses are excluded because they cannot be converted back into cash. They represent payments already made for future services — rent, insurance, software subscriptions. Even in a liquidity crisis, prepaid expenses do not generate cash inflow; they only reduce future cash outflows. Some practitioners also exclude tax receivables and statutory deposits, although these are typically small and recoverable. The quick ratio formula assumes only assets that can fund obligations from external sources.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the acid test ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Acid test ratio is another name for the quick ratio — they refer to the same metric. The term originates from gold prospecting, where acid was used to test gold authenticity quickly. Applied to corporate finance, the acid test asks whether a company can pay off its short-term obligations from quick assets alone — passing the test means the company would not collapse in a short-term liquidity squeeze. Both terms appear interchangeably in lender agreements and financial analysis.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the super-quick ratio or cash ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The super-quick ratio (cash ratio) is even stricter than the quick ratio — only cash and cash equivalents divided by current liabilities. Receivables are excluded since collection may be uncertain or delayed. Cash Ratio = (Cash + Cash Equivalents) ÷ Current Liabilities. A cash ratio above 0.5 indicates very strong immediate liquidity. Most healthy companies operate at 0.2 to 0.5. The cash ratio is most relevant for distressed companies or crisis scenario testing.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is a good quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A quick ratio of 1.0 or above is generally considered healthy — the company can pay all current liabilities from quick assets alone. Below 0.5 signals stress; 0.5 to 1.0 is acceptable but tight; above 1.5 may indicate excess liquid assets not deployed productively. Industry context matters significantly — services and IT typically operate at 1.5 plus given low inventory, while inventory-heavy retail or manufacturing may operate healthily at 0.7 to 1.2.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are typical industry benchmarks for quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">IT and services typically target 1.5 to 2.5 (low inventory). Pharma operates at 1.0 to 2.0. Manufacturing targets 0.8 to 1.2 due to inventory and receivables. FMCG and trading at 0.5 to 1.0 with high inventory turnover. Retail at 0.3 to 0.7. Real estate varies widely 0.5 to 1.5. Hospitality at 0.5 to 1.0 due to perishable inventory and prepaid bookings. Always benchmark against listed peers in the same sector for meaningful comparison.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How do you calculate quick ratio from a balance sheet?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">From Schedule III balance sheet under Companies Act 2013: Numerator = Cash and Cash Equivalents + Other Bank Balances + Current Investments + Trade Receivables (net of ECL) + Loans (current) + Other Financial Assets (current). Denominator = Total Current Liabilities (Borrowings, Trade Payables, Other Financial Liabilities, Other Current Liabilities, Provisions current, Current Tax Liabilities). Exclude Inventories and Other Current Assets where prepaid expenses sit. Most companies disclose Quick Ratio in Notes to Accounts under Ratio Analysis.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are limitations of the quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Quick ratio has limitations: it treats all receivables as equally liquid (older receivables may not collect), uses point-in-time data subject to year-end window dressing, ignores cash flow timing within the next 12 months, and treats current liabilities as equally urgent when some have flexible terms. The ratio also does not capture available undrawn credit lines, which may be substantial. Use quick ratio alongside cash ratio, cash flow from operations and DSO trend for complete liquidity picture.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why do lenders examine quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Lenders use quick ratio for inventory-heavy borrowers — manufacturing, retail, FMCG — where current ratio could overstate liquidity. Working capital loan agreements may include both current ratio and quick ratio covenants. Banks also stress-test the quick ratio under recessionary scenarios where receivables collection slows by 30-50%. Failing the stress test, even with healthy current ratio, can lead to higher interest rates, additional collateral requirements or limit reductions on cash credit facilities.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How can a company improve its quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Strategies to improve quick ratio: accelerate receivables collection, factor or discount receivables to convert to cash, reduce dependence on short-term debt by refinancing to long-term, raise fresh equity, sale of marketable securities to repay payables, reduce slow-moving inventory through targeted promotions. Avoid measures that hurt operations — aggressive collection that damages customer relationships, or refusing supplier credit that damages supplier ties. The best route is improving the cash conversion cycle holistically.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What does a quick ratio below 1 mean?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A quick ratio below 1 means the company cannot fully cover current liabilities from quick assets alone — it must liquidate inventory, draw credit lines, or roll over payables. This is not always alarming — many healthy retailers, FMCG and distribution businesses operate below 1 because inventory turns to cash quickly through high sales velocity. For service or IT businesses, a quick ratio below 1 is unusual and warrants closer examination of working capital management.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Liquidity Stress Testing</h3>
            <p>CFO-grade liquidity review, lender covenant compliance, Schedule III disclosures — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Quick%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Quick%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Quick%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
            <a href="/business-set-up-services" class="sidebar-link">Business Setup<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
            <a href="/tools/ecl-calculator-ind-as-109" class="sidebar-link">ECL Calculator (Ind AS 109)<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Calculator (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/as-vs-ind-as-comparison-matrix" class="sidebar-link">AS vs Ind AS Matrix<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/what-is-a-small-company-under-the-companies-act-2013" class="sidebar-link">Small Company Definition<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<div class="office-strip">
    <div class="offices">Pune | Mumbai | Delhi | Gurugram</div>
    <div class="trust">25,000+ Businesses Trust Us</div>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
(function(){
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function fmtINRDecimal(num) {
        return num.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function v(id) {
        return parseINR(document.getElementById(id).value) || 0;
    }

    // ===== LIVE TOTALS =====
    function updateLiveTotals() {
        const qa = v('qa_cash') + v('qa_securities') + v('qa_recv') + v('qa_other');
        const cl = v('cl_total');
        document.getElementById('liveQa').textContent = fmtINR(qa);
        document.getElementById('liveCl').textContent = fmtINR(cl);
        document.getElementById('liveTotals').style.display = (qa > 0 || cl > 0) ? 'grid' : 'none';
    }
    document.querySelectorAll('input[data-section]').forEach(function(el) {
        el.addEventListener('input', updateLiveTotals);
    });

    // ===== STRESS TOGGLE =====
    let stressOn = false;
    document.getElementById('stressToggle').addEventListener('click', function() {
        stressOn = !stressOn;
        const toggle = document.getElementById('stressToggle');
        const block = document.getElementById('stressBlock');
        toggle.classList.toggle('on', stressOn);
        block.classList.toggle('show', stressOn);
    });

    // ===== CLASSIFY =====
    function classifyRatio(ratio) {
        if (ratio < 0.5) return {zone: 'stressed', label: 'Stressed — Liquidity Concern', headline: 'Quick Assets Cover Less Than 50% of Liabilities'};
        if (ratio < 1.0) return {zone: 'acceptable', label: 'Acceptable — Tight', headline: 'Quick Liquidity Below Full Coverage'};
        if (ratio <= 1.5) return {zone: 'healthy', label: 'Healthy — Strong Position', headline: 'Healthy Quick Liquidity Position'};
        if (ratio <= 2.5) return {zone: 'healthy', label: 'Strong — Strong Position', headline: 'Strong Quick Liquidity Position'};
        return {zone: 'idle', label: 'Idle — Possibly Excess', headline: 'Excess Quick Assets — Review Deployment'};
    }

    function gaugeLeft(ratio) {
        // Map ratio 0-2.5 onto 0-100% gauge
        const capped = Math.max(0, Math.min(2.5, ratio));
        return (capped / 2.5) * 100;
    }

    // ===== COMPUTE =====
    function compute() {
        const cash = v('qa_cash');
        const securities = v('qa_securities');
        const recv = v('qa_recv');
        const otherRecv = v('qa_other');
        const cl = v('cl_total');
        const priorQr = parseINR(document.getElementById('prior_qr').value);

        const totalQa = cash + securities + recv + otherRecv;

        if (totalQa <= 0) { alert('Please enter at least one quick asset value.'); return; }
        if (cl <= 0) { alert('Please enter total current liabilities.'); return; }

        const quickRatio = totalQa / cl;
        const cashRatio = cash / cl;

        let stressedQr = null;
        let stressedQa = null;
        let stressRecvHc = 0, stressSecHc = 0;
        if (stressOn) {
            stressRecvHc = parseINR(document.getElementById('stress_recv').value) || 0;
            stressSecHc = parseINR(document.getElementById('stress_sec').value) || 0;
            const stressedRecv = recv * (1 - stressRecvHc / 100);
            const stressedOther = otherRecv * (1 - stressRecvHc / 100);
            const stressedSec = securities * (1 - stressSecHc / 100);
            stressedQa = cash + stressedSec + stressedRecv + stressedOther;
            stressedQr = stressedQa / cl;
        }

        let trend = null;
        if (priorQr && priorQr > 0) {
            const pctChange = ((quickRatio - priorQr) / priorQr) * 100;
            trend = {priorQr: priorQr, pctChange: pctChange, materialVariance: Math.abs(pctChange) > 25};
        }

        renderResult({
            cash: cash, securities: securities, recv: recv, otherRecv: otherRecv, cl: cl,
            totalQa: totalQa, quickRatio: quickRatio, cashRatio: cashRatio,
            stressOn: stressOn, stressedQa: stressedQa, stressedQr: stressedQr,
            stressRecvHc: stressRecvHc, stressSecHc: stressSecHc,
            trend: trend
        });
    }

    function renderResult(r) {
        const cls = classifyRatio(r.quickRatio);
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + cls.zone;

        document.getElementById('verdictLabel').textContent = cls.label;
        document.getElementById('verdictHeadline').textContent = cls.headline;
        document.getElementById('qrVal').textContent = r.quickRatio.toFixed(2);

        // Secondary value: stressed QR if available, else cash ratio
        if (r.stressOn && r.stressedQr !== null) {
            document.getElementById('secondaryLabel').textContent = 'Stressed Quick Ratio';
            document.getElementById('secondaryVal').textContent = r.stressedQr.toFixed(2);
        } else {
            document.getElementById('secondaryLabel').textContent = 'Cash Ratio';
            document.getElementById('secondaryVal').textContent = r.cashRatio.toFixed(2);
        }

        // Gauge
        const marker = document.getElementById('gaugeMarker');
        marker.style.left = gaugeLeft(r.quickRatio) + '%';
        marker.dataset.val = r.quickRatio.toFixed(2);
        const stressMarker = document.getElementById('gaugeStressMarker');
        if (r.stressOn && r.stressedQr !== null) {
            stressMarker.style.display = 'block';
            stressMarker.style.left = gaugeLeft(r.stressedQr) + '%';
        } else {
            stressMarker.style.display = 'none';
        }

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const items = [
            {label: 'Quick Ratio', value: r.quickRatio.toFixed(2), highlight: true},
            {label: 'Cash Ratio', value: r.cashRatio.toFixed(2)},
            {label: 'Total Quick Assets', value: fmtINR(r.totalQa)},
            {label: 'Total Current Liab.', value: fmtINR(r.cl)}
        ];
        if (r.stressOn && r.stressedQr !== null) {
            items.push({label: 'Stressed Quick Ratio', value: r.stressedQr.toFixed(2), stress: true});
            items.push({label: 'Stressed Quick Assets', value: fmtINR(r.stressedQa), stress: true});
        }
        if (r.trend) {
            items.push({label: 'Prior Period QR', value: r.trend.priorQr.toFixed(2)});
            items.push({label: 'YoY Change', value: (r.trend.pctChange >= 0 ? '+' : '') + r.trend.pctChange.toFixed(1) + '%'});
        }
        items.forEach(function(s) {
            const c = document.createElement('div');
            let cls = 'summary-card';
            if (s.highlight) cls += ' highlight';
            if (s.stress) cls += ' stress';
            c.className = cls;
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '';
        if (cls.zone === 'stressed') {
            advisory.className = 'info-banner danger';
            advHtml = '<strong>Quick liquidity stress.</strong> Quick assets cover less than 50% of current liabilities — the business depends on inventory liquidation, credit lines or rollover of payables to meet obligations. Review immediate cash flow forecasts, accelerate collections, and consider refinancing short-term debt to longer tenor.';
        } else if (cls.zone === 'acceptable') {
            advisory.className = 'info-banner warn';
            advHtml = '<strong>Tight quick liquidity.</strong> Quick ratio between 0.5 and 1.0 — operable but limited buffer. Common in inventory-heavy businesses. Verify lender covenants — many require minimum quick ratio of 0.75 or 1.0. Strengthen by accelerating receivables, factoring, or refinancing short-term debt.';
        } else if (cls.zone === 'healthy') {
            advisory.className = 'info-banner success';
            advHtml = '<strong>Healthy quick liquidity.</strong> Quick assets fully cover current liabilities with comfortable buffer. The business is well-positioned for short-term shocks. Continue monitoring against industry peers and the trend over multiple periods.';
        } else {
            advisory.className = 'info-banner info';
            advHtml = '<strong>Possibly excess quick liquidity.</strong> Quick ratio above 2.5 may indicate underutilised cash and securities. Examine whether surplus could be deployed for capex, debt reduction, dividends or growth — versus held as conservative buffer for upcoming obligations.';
        }
        if (r.stressOn && r.stressedQr !== null) {
            const stressCls = classifyRatio(r.stressedQr);
            if (stressCls.zone === 'stressed' && cls.zone !== 'stressed') {
                advHtml += '<br><br><strong>Stress test alert:</strong> Under haircut scenario (' + r.stressRecvHc + '% receivables, ' + r.stressSecHc + '% securities), quick ratio falls to ' + r.stressedQr.toFixed(2) + ' — entering the stressed zone. Review resilience to collection delays and market shocks.';
            } else {
                advHtml += '<br><br><strong>Stress test result:</strong> Under haircut scenario (' + r.stressRecvHc + '% receivables, ' + r.stressSecHc + '% securities), quick ratio remains at ' + r.stressedQr.toFixed(2) + ' — ' + stressCls.zone + ' zone.';
            }
        }
        if (r.trend && r.trend.materialVariance) {
            advHtml += '<br><br><strong>Material variance (>25%):</strong> Schedule III amendment effective FY 2021-22 requires explanation of variances exceeding 25% in Notes to Accounts. Document the drivers — typical reasons include refinancing of short-term debt, collection cycle changes, capital raise, or business cycle shifts.';
        }
        advisory.innerHTML = advHtml;

        // Basis text
        let basis = 'Quick Ratio = (₹' + fmtINRDecimal(r.cash) + ' + ₹' + fmtINRDecimal(r.securities) + ' + ₹' + fmtINRDecimal(r.recv) + ' + ₹' + fmtINRDecimal(r.otherRecv) + ') ÷ ₹' + fmtINRDecimal(r.cl) + ' = <strong>' + r.quickRatio.toFixed(2) + '</strong>. ';
        basis += 'Cash Ratio = ₹' + fmtINRDecimal(r.cash) + ' ÷ ₹' + fmtINRDecimal(r.cl) + ' = <strong>' + r.cashRatio.toFixed(2) + '</strong>. ';
        if (r.stressOn && r.stressedQr !== null) {
            basis += '<br><br><em>Stress scenario:</em> Receivables haircut ' + r.stressRecvHc + '%, Marketable securities haircut ' + r.stressSecHc + '%. Stressed quick assets = ₹' + fmtINRDecimal(r.stressedQa) + '. Stressed quick ratio = <strong>' + r.stressedQr.toFixed(2) + '</strong>. ';
        }
        basis += '<br><br>Computed per Schedule III current vs non-current 12-month classification under the Companies Act 2013.';
        document.getElementById('basisText').innerHTML = basis;

        // Breakdown table
        let html = '<h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Quick Assets Breakdown</h3>';
        html += '<div style="overflow-x:auto;"><table class="breakdown-table">';
        html += '<thead><tr><th>Quick Asset</th><th>Amount (₹)</th><th>% of QA</th></tr></thead><tbody>';
        const components = [
            {label: 'Cash & Bank Balances', amt: r.cash},
            {label: 'Marketable Securities', amt: r.securities},
            {label: 'Trade Receivables (Net)', amt: r.recv},
            {label: 'Other Receivables', amt: r.otherRecv}
        ];
        components.forEach(function(c) {
            if (c.amt > 0) {
                const pct = (c.amt / r.totalQa) * 100;
                html += '<tr><td>' + c.label + '</td><td>' + fmtINRDecimal(c.amt) + '</td><td>' + pct.toFixed(1) + '%</td></tr>';
            }
        });
        html += '</tbody><tfoot><tr><td>Total Quick Assets</td><td>' + fmtINRDecimal(r.totalQa) + '</td><td>100.0%</td></tr></tfoot>';
        html += '</table></div>';
        document.getElementById('breakdownOutput').innerHTML = html;

        // Show
        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
            if (el.id === 'stress_recv') el.value = '30';
            else if (el.id === 'stress_sec') el.value = '15';
            else el.value = '';
        });
        document.getElementById('liveTotals').style.display = 'none';
        document.getElementById('resultSection').classList.remove('visible');
        if (stressOn) {
            stressOn = false;
            document.getElementById('stressToggle').classList.remove('on');
            document.getElementById('stressBlock').classList.remove('show');
        }
    });

    document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnCalc').click();
            }
        });
    });

    // FAQ accordion
    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    // TOC active link
    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) {
            if (s.offsetTop <= scrollPos) active = s.id;
        });
        tocLinks.forEach(function(l) {
            l.classList.toggle('active', l.getAttribute('href') === '#' + active);
        });
    }
    window.addEventListener('scroll', updateActive, {passive: true});
    updateActive();
})();
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
