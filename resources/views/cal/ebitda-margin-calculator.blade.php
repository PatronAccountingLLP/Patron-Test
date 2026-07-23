@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>EBITDA Margin Calculator | EV/EBITDA & Benchmarks</title>
    <meta name="description" content="Free EBITDA margin calculator: compute EBITDA &amp; margin with Ind AS 116 lease reconciliation, sector benchmarks and EV/EBITDA valuation. CA-reviewed tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ebitda-margin-calculator/">
    <meta property="og:title" content="EBITDA Margin Calculator — Schedule III &amp; Ind AS 116 India 2026">
    <meta property="og:description" content="Compute EBITDA margin with Ind AS 116 lease reconciliation, sector benchmarks, operating margin, net profit margin, EV/EBITDA valuation. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/ebitda-margin-calculator">
    <meta property="og:image" content="/tools/og/ebitda-margin-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EBITDA Margin Calculator — Schedule III &amp; Ind AS 116 India 2026">
    <meta name="twitter:description" content="EBITDA margin with Ind AS 116 reconciliation, EV/EBITDA valuation, sector benchmarks. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/ebitda-margin-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "EBITDA Margin Calculator",
      "description": "EBITDA Margin Calculator computes Earnings Before Interest, Tax, Depreciation and Amortisation (EBITDA) and EBITDA Margin for an Indian company using P and L line items aligned with Schedule III to the Companies Act, 2013. The tool supports an optional Ind AS 116 lease reconciliation showing the difference between post-Ind AS 116 reported EBITDA and pre-Ind AS 116 EBITDA after deducting lease rent expense, an SEBI Alternative Performance Measure (APM) disclosure approach. Output includes EBITDA in rupees, EBITDA Margin percentage, EBIT and Operating Margin, Profit Before Tax, Profit After Tax and Net Profit Margin, sector benchmark comparison across IT, Manufacturing, FMCG, Retail, Pharma, Real Estate, Telecom and Services, year-over-year trend versus prior year margin, implied Enterprise Value via EV / EBITDA multiple selector, and a sample Schedule III Net Profit Ratio disclosure that ties to the same input data. The Schedule III mandatory ratio of Net Profit Ratio is auto-derived alongside EBITDA Margin for full P and L margin analysis.",
      "url": "/tools/ebitda-margin-calculator",
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
      "provider": {"@id": "/#organization"}
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "EBITDA Margin Calculator", "item": "/tools/ebitda-margin-calculator"}
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
          "name": "What is EBITDA Margin and what does it measure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EBITDA Margin is a profitability ratio that expresses Earnings Before Interest, Tax, Depreciation and Amortisation as a percentage of Revenue from Operations. It strips out capital structure choices (interest), tax jurisdiction effects (tax), and accounting estimates (depreciation, amortisation) to focus purely on operating profitability. A higher EBITDA Margin signals stronger pricing power, cost control, or scale advantage. It is widely used for cross-company comparison, M&A pricing through EV/EBITDA multiples, and bank covenant testing."
          }
        },
        {
          "@type": "Question",
          "name": "What is the formula for EBITDA Margin?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EBITDA Margin equals EBITDA divided by Revenue from Operations, expressed as a percentage. EBITDA itself can be derived two ways. Bottom-up: PAT plus Tax plus Finance Costs plus Depreciation and Amortisation. Top-down: Revenue from Operations less Cost of Materials less Employee Benefit Expenses less Other Operating Expenses. Both methods yield the same result. Other Income is excluded from EBITDA by default unless it is operating in nature, in which case it is added before computing the margin."
          }
        },
        {
          "@type": "Question",
          "name": "How did Ind AS 116 affect EBITDA Margin in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 116, effective 1 April 2019, replaced operating lease rent expense with right-of-use depreciation plus lease liability interest. Since depreciation and interest sit below EBITDA while lease rent sat above, post-Ind AS 116 reported EBITDA is structurally higher. The boost is material for retail, airlines, telecom and logistics. SEBI permits voluntary disclosure of pre-Ind AS 116 EBITDA as an Alternative Performance Measure for historical comparability."
          }
        },
        {
          "@type": "Question",
          "name": "Is EBITDA Margin a mandatory Schedule III disclosure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EBITDA Margin itself is not one of the eleven mandatory analytical ratios under Schedule III to the Companies Act, 2013. However, Net Profit Ratio is mandatory and is computed from the same source data. The MCA notification dated 24 March 2021 introduced eleven ratios including Current Ratio, Debt-Equity, DSCR, Return on Equity, Net Profit Ratio and Return on Capital Employed. Listed companies disclose EBITDA Margin separately under SEBI LODR Regulation 34(3) in MD&A as a key financial indicator."
          }
        },
        {
          "@type": "Question",
          "name": "What is a good EBITDA Margin in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A good EBITDA Margin varies sharply by industry. IT services typically deliver 22 to 28 per cent, FMCG 18 to 25 per cent, manufacturing 12 to 18 per cent, pharma 20 to 28 per cent, real estate developers 25 to 35 per cent, telecom 40 to 50 per cent post-Ind AS 116, and retail only 6 to 12 per cent due to thin margins. Always benchmark against three or four direct Indian listed peers."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between EBITDA Margin and Operating Margin?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EBITDA Margin uses earnings before depreciation and amortisation as the numerator. Operating Margin uses EBIT, which is EBITDA less Depreciation and Amortisation. The two diverge when D&A is material. Capital-intensive businesses such as telecom and infrastructure show much higher EBITDA Margin than Operating Margin because they carry large depreciation. Asset-light services businesses show similar EBITDA and Operating Margins. Both are useful, with EBITDA Margin preferred for cross-industry comparison and Operating Margin closer to true economic profit."
          }
        },
        {
          "@type": "Question",
          "name": "How does EV / EBITDA work as a valuation multiple?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EV/EBITDA is a valuation multiple computed as Enterprise Value divided by EBITDA, where EV equals Market Capitalisation plus Net Debt plus Lease Liabilities (post-Ind AS 116) plus Minority Interest less Cash. Indian listed mid-cap companies trade between 8 and 12 times forward EBITDA, growth and quality leaders 15 to 25 times, and consumer staples leaders 30 to 50 times. Lower multiples indicate value or stress, higher multiples indicate growth or premium positioning. EV/EBITDA neutralises capital structure choices."
          }
        },
        {
          "@type": "Question",
          "name": "Should Other Income be included in EBITDA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Other Income should be included in EBITDA only if it is operating in nature — recurring service fees, royalty income, scrap sales, foreign exchange gains on operating items. Non-operating Other Income such as interest on fixed deposits, dividend income, profit on sale of investments and one-off insurance claims should be excluded to keep EBITDA reflective of core operating profitability. The default treatment in this calculator excludes Other Income; toggle to include only when the income is genuinely operating."
          }
        },
        {
          "@type": "Question",
          "name": "What are the criticisms of EBITDA as a profitability measure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Warren Buffett and Charlie Munger have famously called EBITDA a misleading measure because it ignores the very real cash cost of replacing capital assets (depreciation) and the cost of debt servicing (interest). For capital-intensive businesses, EBITDA can flatter performance while free cash flow tells a different story. EBITDA also enabled aggressive M&A leverage in past decades that ended in distress. Always read EBITDA alongside Operating Cash Flow, Free Cash Flow and Net Profit for a balanced view."
          }
        },
        {
          "@type": "Question",
          "name": "How is EBITDA Margin used in bank loan covenants?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian bank loan agreements typically include EBITDA-based covenants such as Net Debt to EBITDA below a specified threshold (commonly 3.0 to 4.0 times for mid-corporates) and Interest Coverage above a floor (commonly 2.5 to 3.0 times). Listed bond issuers face similar tests in trust deeds. Post-Ind AS 116, definitions need careful reading because the standard mechanically lifts EBITDA without changing economic substance. Many lenders have updated covenant definitions to use frozen pre-Ind AS 116 numbers or adjusted EBITDA after lease."
          }
        },
        {
          "@type": "Question",
          "name": "How do listed companies disclose EBITDA under SEBI rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under SEBI LODR Regulations 2015, listed entities disclose key financial ratios including EBITDA Margin in the Management Discussion and Analysis section of the annual report under Regulation 34(3) read with Schedule V. Investor presentations and earnings call commentary commonly highlight EBITDA, EBITDA Margin and Adjusted EBITDA. Listed debt entities make half-yearly disclosures under Regulation 52. Post-Ind AS 116, many companies present pre-Ind AS 116 EBITDA reconciliations in investor decks as an Alternative Performance Measure for historical comparability."
          }
        },
        {
          "@type": "Question",
          "name": "What is Adjusted EBITDA and when is it used?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Adjusted EBITDA is reported EBITDA modified for one-off items, non-recurring charges, share-based payments, restructuring costs, foreign exchange impact, ESOP costs and similar adjustments to provide a normalised view of operating performance. Indian listed companies frequently disclose Adjusted EBITDA in investor presentations, M&A documentation and lender covenant compliance certificates. The adjustments must be transparent and consistently applied. SEBI guidance on Alternative Performance Measures requires reconciliation to reported numbers and explanation of each adjustment."
          }
        },
        {
          "@type": "Question",
          "name": "Where on the P&L do I find inputs for EBITDA computation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS Schedule III Division II, Revenue from Operations is the top line of the Statement of Profit and Loss. Cost of Materials Consumed, Purchases of Stock-in-Trade, Changes in Inventory, Employee Benefit Expenses, Finance Costs, Depreciation and Amortisation, and Other Expenses appear as separate line items. Other Income is reported separately above expenses. Tax Expense splits into current and deferred tax. All Schedule III line items map directly into this calculator."
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
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
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
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }

        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); }
        .verdict-card.amber { border-left-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); }
        .verdict-card.red { border-left-color: var(--danger); background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); }
        .verdict-card.blue { border-left-color: var(--info); background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 8px; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 14px; }
        @media (max-width: 500px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.65); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .info-banner strong { font-weight: 700; }

        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        .basis-text strong { color: var(--primary-dark); }

        .pl-walk { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .pl-walk table { width: 100%; border-collapse: collapse; font-size: 14px; }
        .pl-walk td { padding: 6px 4px; border-bottom: 1px dashed var(--border); }
        .pl-walk td:last-child { font-family: var(--font-mono); font-weight: 700; text-align: right; color: var(--primary-dark); }
        .pl-walk tr.subtotal td { padding-top: 10px; padding-bottom: 10px; border-bottom: 2px solid var(--primary); font-weight: 700; color: var(--primary-dark); }
        .pl-walk tr.subtotal td:last-child { font-size: 15px; }
        .pl-walk tr.total td { padding-top: 12px; padding-bottom: 12px; background: var(--primary); color: #fff; }
        .pl-walk tr.total td:first-child { border-radius: 6px 0 0 6px; padding-left: 12px; }
        .pl-walk tr.total td:last-child { border-radius: 0 6px 6px 0; padding-right: 12px; color: #fff; font-size: 15px; }

        .ind-as-recon { background: linear-gradient(135deg, #FEF3C7, #FFFBEB); border: 2px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .ind-as-recon h4 { font-size: 14px; color: #78350F; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .ind-as-recon-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 10px; }
        @media (max-width: 500px) { .ind-as-recon-grid { grid-template-columns: 1fr; } }
        .ind-as-recon-card { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 14px; }
        .ind-as-recon-card .lbl { font-size: 11px; font-weight: 700; color: #92400E; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .ind-as-recon-card .val { font-family: var(--font-mono); font-weight: 700; color: #78350F; font-size: 18px; }

        .disclosure-block { background: var(--primary-dark); color: #E8EEF5; padding: 20px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.7; margin: 14px 0; overflow-x: auto; }
        .disclosure-block .dl-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 8px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .disclosure-block table { width: 100%; border-collapse: collapse; font-size: 12px; margin-top: 8px; }
        .disclosure-block th, .disclosure-block td { padding: 8px 6px; text-align: left; border-bottom: 1px solid rgba(224,242,241,0.2); }
        .disclosure-block th { color: var(--accent-light); font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px; }
        .disclosure-block td.num { text-align: right; }
        @media (max-width: 600px) { .disclosure-block { font-size: 11px; padding: 14px 16px; } .disclosure-block table { font-size: 10px; } }

        .body-cta { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 28px 32px; margin: 32px 0; }
        .body-cta h3 { color: #fff; font-size: 20px; margin-bottom: 8px; }
        .body-cta p { color: rgba(255,255,255,0.88); margin-bottom: 16px; font-size: 15px; }
        .body-cta .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .body-cta .cta-btn:hover { background: var(--accent-light); }

        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 14px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); margin-bottom: 8px; line-height: 1.7; }
        .content-section li strong { color: var(--primary-dark); }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }

        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        @media (max-width: 600px) { .rate-table { font-size: 12px; } .rate-table thead th, .rate-table tbody td { padding: 8px 10px; } }

        .formula-box { background: var(--primary-dark); color: #fff; border-radius: var(--radius); padding: 20px 24px; margin: 16px 0; font-family: var(--font-mono); font-size: 14px; line-height: 1.8; overflow-x: auto; }
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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.45s ease; }
        .faq-item.open .faq-answer { max-height: 800px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }

        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .cta-btn:hover { background: var(--accent-light); }

        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .body-cta { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
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
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#formula">Formula</a>
        <a href="#ind-as-116">Ind AS 116 Impact</a>
        <a href="#vs-margins">vs Other Margins</a>
        <a href="#benchmarks">Benchmarks</a>
        <a href="#valuation">EV/EBITDA</a>
        <a href="#limitations">Limitations</a>
        <a href="#sebi-disclosure">SEBI Disclosure</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    EBITDA Margin Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>EBITDA Margin Calculator — <span>Schedule III &amp; Ind AS 116</span> Compliant for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20EBITDA%20Margin%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=EBITDA%20Margin%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20EBITDA%20Margin%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This EBITDA Margin Calculator computes EBITDA, EBITDA Margin, EBIT, Operating Margin, PBT, PAT and Net Profit Margin from standard P&amp;L line items aligned with <strong>Schedule III to the Companies Act, 2013</strong>. The unique feature is the <strong>Ind AS 116 lease reconciliation</strong> showing pre-Ind AS 116 versus reported EBITDA — material for retail, airlines, telecom and logistics where the standard mechanically lifts EBITDA. Sector benchmarks across 8 Indian industries, EV/EBITDA implied valuation with India-specific multiples, year-over-year trend, and Schedule III Net Profit Ratio disclosure are all auto-derived.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your EBITDA Margin</h2>
            <p class="calc-intro">Enter line items directly from your audited Statement of Profit and Loss. The calculator computes EBITDA, all other margins, and an optional Ind AS 116 lease reconciliation in one shot. All amounts in ₹ rupees.</p>
            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or refer to the formula in the section below.</div>
            </noscript>

            <div class="calc-section-title">Income</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="revenue">Revenue from Operations (₹)</label>
                    <input type="text" id="revenue" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Top line of P&amp;L. Net sales after returns and discounts. Excludes GST.</span>
                </div>
                <div class="form-group">
                    <label for="otherIncome">Other Income (₹) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                    <input type="text" id="otherIncome" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Interest income, dividend, FX gain, profit on sale of investments.</span>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label>Treat Other Income as Operating?</label>
                <div class="toggle-group" id="oiTreatment" role="tablist" aria-label="Other income treatment">
                    <button type="button" class="toggle-btn active" data-value="exclude" role="tab" aria-selected="true">Exclude from EBITDA<small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">Standard treatment</small></button>
                    <button type="button" class="toggle-btn" data-value="include" role="tab" aria-selected="false">Include in EBITDA<small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">Only if operating in nature</small></button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Default excludes Other Income for cleanest core operating EBITDA. Include only if recurring service/operational income.</span>
            </div>

            <div class="calc-section-title">Operating Expenses (Pre-D&amp;A and Interest)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="cogs">Cost of Materials / Purchases (₹)</label>
                    <input type="text" id="cogs" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cost of Materials Consumed + Purchases of Stock-in-Trade + Changes in Inventory + Mfg Expenses.</span>
                </div>
                <div class="form-group">
                    <label for="empCost">Employee Benefit Expenses (₹)</label>
                    <input type="text" id="empCost" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Salaries, wages, contributions to PF/ESI, gratuity, ESOP cost.</span>
                </div>
            </div>
            <div class="form-group" style="margin-bottom: 18px;">
                <label for="otherExp">Other Operating Expenses (₹)</label>
                <input type="text" id="otherExp" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                <span class="helper">Other Expenses from P&amp;L excluding Depreciation, Amortisation and Finance Costs. Includes operating lease rent if pre-Ind AS 116.</span>
            </div>

            <div class="calc-section-title">Below-EBITDA Items</div>
            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="dep">Depreciation &amp; Amortisation (₹)</label>
                    <input type="text" id="dep" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">D&amp;A line. Includes ROU asset depreciation post-Ind AS 116.</span>
                </div>
                <div class="form-group">
                    <label for="finCost">Finance Costs / Interest (₹)</label>
                    <input type="text" id="finCost" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total finance cost. Includes interest on lease liability post-Ind AS 116.</span>
                </div>
                <div class="form-group">
                    <label for="tax">Tax Expense (₹)</label>
                    <input type="text" id="tax" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Current tax + deferred tax. Negative if net deferred tax credit.</span>
                </div>
            </div>

            <div class="calc-section-title">Ind AS 116 Reconciliation (Optional)</div>
            <div class="form-group" style="margin-bottom: 8px;">
                <label for="leaseRent">Operating Lease Rent — Pre-Ind AS 116 Equivalent (₹)</label>
                <input type="text" id="leaseRent" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                <span class="helper">Cash lease payments under Ind AS 116. Used to compute pre-Ind AS 116 EBITDA for like-for-like historical comparison (SEBI APM disclosure).</span>
            </div>

            <div class="calc-section-title">Context (Optional)</div>
            <div class="form-group" style="margin-bottom: 18px;">
                <label>Industry / Sector</label>
                <div class="toggle-group" id="industryGroup" role="tablist" aria-label="Industry">
                    <button type="button" class="toggle-btn active" data-value="manufacturing" role="tab" aria-selected="true">Manufacturing</button>
                    <button type="button" class="toggle-btn" data-value="it" role="tab" aria-selected="false">IT / Software</button>
                    <button type="button" class="toggle-btn" data-value="fmcg" role="tab" aria-selected="false">FMCG</button>
                    <button type="button" class="toggle-btn" data-value="retail" role="tab" aria-selected="false">Retail</button>
                    <button type="button" class="toggle-btn" data-value="pharma" role="tab" aria-selected="false">Pharma</button>
                    <button type="button" class="toggle-btn" data-value="realestate" role="tab" aria-selected="false">Real Estate</button>
                    <button type="button" class="toggle-btn" data-value="telecom" role="tab" aria-selected="false">Telecom</button>
                    <button type="button" class="toggle-btn" data-value="services" role="tab" aria-selected="false">Services</button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Used for sector benchmark comparison.</span>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="prevMargin">Previous Year EBITDA Margin (%) — Optional</label>
                    <input type="text" id="prevMargin" step="0.1" placeholder="0.0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Enter last year's margin to track YoY trend.</span>
                </div>
                <div class="form-group">
                    <label for="evMultiple">EV/EBITDA Target Multiple — Optional</label>
                    <input type="text" id="evMultiple" min="0" step="0.5" placeholder="10" inputmode="decimal" autocomplete="off">
                    <span class="helper">For implied valuation. Indian mid-caps trade 8-12×, growth leaders 15-25×.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate EBITDA Margin</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label">EBITDA Margin</div>
                    <div class="verdict-headline" id="verdictHeadline">EBITDA Margin = 0.00%</div>
                    <div class="verdict-sub" id="verdictSub">Verdict</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">EBITDA</div>
                            <div class="verdict-grid-value" id="ebitdaVal">₹0</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Revenue from Operations</div>
                            <div class="verdict-grid-value" id="revenueVal">₹0</div>
                        </div>
                    </div>
                </div>

                <div class="basis-label" style="margin-bottom: 8px;">P&amp;L Walk — Income Statement Bridge</div>
                <div class="pl-walk" id="plWalk"></div>

                <div class="ind-as-recon" id="indAsRecon" style="display:none;">
                    <h4>Ind AS 116 Reconciliation</h4>
                    <p style="font-size:13px;color:#78350F;margin-bottom:8px;">Comparing reported EBITDA with the pre-Ind AS 116 equivalent (after deducting operating lease rent), for like-for-like historical comparison and SEBI APM disclosure.</p>
                    <div class="ind-as-recon-grid">
                        <div class="ind-as-recon-card">
                            <div class="lbl">Reported EBITDA (Post-Ind AS 116)</div>
                            <div class="val" id="ebitdaReported">₹0 (0.0%)</div>
                        </div>
                        <div class="ind-as-recon-card">
                            <div class="lbl">Pre-Ind AS 116 EBITDA</div>
                            <div class="val" id="ebitdaPre">₹0 (0.0%)</div>
                        </div>
                        <div class="ind-as-recon-card">
                            <div class="lbl">Ind AS 116 Boost (Absolute)</div>
                            <div class="val" id="indAsBoostAbs">₹0</div>
                        </div>
                        <div class="ind-as-recon-card">
                            <div class="lbl">Ind AS 116 Boost (% of Reported EBITDA)</div>
                            <div class="val" id="indAsBoostPct">0.0%</div>
                        </div>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="benchmarkBanner"></div>
                <div class="info-banner" id="trendBanner" style="display:none;"></div>
                <div class="info-banner info" id="valuationBanner" style="display:none;"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis (per Schedule III P&amp;L Format)</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div class="basis-label" style="margin: 24px 0 8px;">Schedule III Sample Disclosure — Net Profit Ratio (Mandatory)</div>
                <div class="disclosure-block" id="disclosureBlock">
                    <span class="dl-label">Note X — Analytical Ratios (extract)</span>
                    <table>
                        <thead>
                            <tr><th>Ratio</th><th>Numerator</th><th>Denominator</th><th>Current Year</th></tr>
                        </thead>
                        <tbody id="disclosureRows"></tbody>
                    </table>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — EBITDA Margin Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20EBITDA%20Margin%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=EBITDA%20Margin%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20EBITDA%20Margin%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>


        <section class="content-section" id="how-to-use">
            <h2>How to Use This EBITDA Margin Calculator</h2>
            <p>The EBITDA Margin Calculator follows the exact P&amp;L line items prescribed in <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Schedule III</a> Division II. Open your audited Statement of Profit and Loss and enter eight numbers — that is all you need to compute EBITDA, every margin, and the Ind AS 116 reconciliation in one go.</p>

            <h3>Step 1 — Enter Income Lines</h3>
            <p>Revenue from Operations is the top line of the P&amp;L after netting GST, returns and discounts. It excludes Other Income, which sits as a separate line item. Other Income covers interest on fixed deposits, dividend income, foreign exchange gains, profit on sale of investments and one-off items. By default the calculator excludes Other Income from EBITDA because it is non-operating; toggle to include only when the income is genuinely operating in nature (recurring service fees, royalty, scrap sales).</p>

            <h3>Step 2 — Enter Three Operating Expense Lines</h3>
            <p>Cost of Materials / Purchases captures Cost of Materials Consumed plus Purchases of Stock-in-Trade plus Changes in Inventory plus Manufacturing Expenses. Employee Benefit Expenses captures salaries, wages, contributions to PF and ESI, gratuity, leave encashment and ESOP cost. Other Operating Expenses covers everything else operating — rent (if pre-Ind AS 116), travel, marketing, professional fees, repairs, utilities. Critically, exclude Depreciation, Amortisation and Finance Costs from this bucket — they go into separate fields.</p>

            <h3>Step 3 — Enter Below-EBITDA Items</h3>
            <p>Depreciation and Amortisation is the consolidated D&amp;A line, including Right-of-Use asset depreciation under Ind AS 116. Finance Costs is the total finance cost from the P&amp;L, including interest on lease liability under Ind AS 116. Tax Expense is current tax plus deferred tax — refer the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax India</a> portal for current corporate tax rates. Enter as a negative number if there is a net deferred tax credit in the year.</p>

            <h3>Step 4 — Optional Ind AS 116 Reconciliation</h3>
            <p>If your company adopted Ind AS 116 from 1 April 2019 and has material operating leases, enter the cash lease payment for the year. The calculator computes pre-Ind AS 116 EBITDA by deducting the lease rent from reported EBITDA, then shows the absolute and percentage boost. For listed companies in retail, telecom, hospitality and logistics, this reconciliation is increasingly disclosed as an Alternative Performance Measure under SEBI guidance for like-for-like historical comparison.</p>

            <h3>Step 5 — Read the Output Panel</h3>
            <p>The output shows EBITDA absolute, EBITDA Margin, the full P&amp;L walk from Revenue down to PAT, all four margins (EBITDA, Operating, PBT, Net), sector benchmark comparison, year-over-year trend (if previous margin entered), and implied Enterprise Value (if EV multiple entered). The Schedule III disclosure block auto-populates the Net Profit Ratio (one of eleven mandatory ratios).</p>
        </section>

        <section class="content-section" id="formula">
            <h2>EBITDA Formula and Components</h2>
            <p>EBITDA can be derived from two directions, and both yield the same result. The bottom-up method starts from PAT and adds back below-the-line items. The top-down method starts from Revenue and subtracts only operating expenses. The <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a> Guidance Note on Schedule III recognises both formulations, with practitioners preferring bottom-up for audit-trail purposes since it directly maps to the audited P&amp;L line items.</p>

            <div class="formula-box">
<span class="label">EBITDA Margin</span> = EBITDA &divide; Revenue from Operations × 100<br>
<br>
<span class="label">Bottom-Up</span>: EBITDA = PAT + Tax + Finance Costs + D&amp;A<br>
<br>
<span class="label">Top-Down</span>: EBITDA = Revenue from Operations − COGS − Employee Costs − Other Operating Expenses<br>
<br>
<span class="label">Pre-Ind AS 116 EBITDA</span> = Reported EBITDA − Lease Rent (operating lease equivalent)
            </div>

            <h3>Why Two Methods Yield the Same Number</h3>
            <p>Bottom-up and top-down are arithmetically identical. Starting from Revenue and subtracting only operating expenses produces the same EBITDA as starting from PAT and adding back tax, interest and D&amp;A. Use bottom-up when you have PAT and individual addback lines (most common in audited financials). Use top-down when you have a clean operating expense breakdown but the PAT calculation has unusual items.</p>

            <h3>What Goes Above and Below the EBITDA Line</h3>
            <table class="rate-table">
                <thead><tr><th>P&amp;L Line</th><th>Above / Below EBITDA</th><th>Effect on EBITDA</th></tr></thead>
                <tbody>
                    <tr><td>Revenue from Operations</td><td>Above</td><td>Increases EBITDA</td></tr>
                    <tr><td>Cost of Materials / COGS</td><td>Above</td><td>Decreases EBITDA</td></tr>
                    <tr><td>Employee Benefit Expenses</td><td>Above</td><td>Decreases EBITDA</td></tr>
                    <tr><td>Other Operating Expenses</td><td>Above</td><td>Decreases EBITDA</td></tr>
                    <tr><td>Operating Lease Rent (Pre-Ind AS 116)</td><td>Above</td><td>Decreases EBITDA</td></tr>
                    <tr><td>ROU Depreciation (Post-Ind AS 116)</td><td>Below</td><td>No effect on EBITDA</td></tr>
                    <tr><td>Lease Liability Interest (Post-Ind AS 116)</td><td>Below</td><td>No effect on EBITDA</td></tr>
                    <tr><td>Depreciation &amp; Amortisation</td><td>Below</td><td>No effect on EBITDA</td></tr>
                    <tr><td>Finance Costs</td><td>Below</td><td>No effect on EBITDA</td></tr>
                    <tr><td>Tax Expense</td><td>Below</td><td>No effect on EBITDA</td></tr>
                </tbody>
            </table>

            <h3>Worked Example</h3>
            <p>An Indian listed company reports the following P&amp;L (₹ in lakhs):</p>
            <table class="rate-table">
                <thead><tr><th>Line Item</th><th>Amount</th></tr></thead>
                <tbody>
                    <tr><td>Revenue from Operations</td><td>10,000</td></tr>
                    <tr><td>Other Income</td><td>200</td></tr>
                    <tr><td>Cost of Materials</td><td>(4,500)</td></tr>
                    <tr><td>Employee Benefit Expenses</td><td>(2,000)</td></tr>
                    <tr><td>Other Expenses (excl. D&amp;A)</td><td>(1,500)</td></tr>
                    <tr><td><strong>EBITDA (excl. Other Income)</strong></td><td><strong>2,000</strong></td></tr>
                    <tr><td>Depreciation &amp; Amortisation</td><td>(500)</td></tr>
                    <tr><td>Finance Costs</td><td>(300)</td></tr>
                    <tr><td>Other Income</td><td>200</td></tr>
                    <tr><td>Profit Before Tax</td><td>1,400</td></tr>
                    <tr><td>Tax Expense</td><td>(350)</td></tr>
                    <tr><td><strong>Profit After Tax</strong></td><td><strong>1,050</strong></td></tr>
                </tbody>
            </table>
            <p><strong>EBITDA Margin</strong> = 2,000 / 10,000 = <strong>20.0%</strong>. <strong>Operating Margin (EBIT Margin)</strong> = 1,500 / 10,000 = 15.0%. <strong>Net Profit Margin</strong> = 1,050 / 10,000 = 10.5%. The 5 percentage-point gap between EBITDA and Operating Margin reflects D&amp;A intensity. The further 4.5 percentage-point gap to Net Margin reflects interest, tax and the Other Income credit.</p>
        </section>

        <section class="content-section" id="ind-as-116">
            <h2>Ind AS 116 Lease Reconciliation — The EBITDA Boost</h2>
            <p>Ind AS 116 was notified by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> on 30 March 2019 and is effective for accounting periods beginning on or after 1 April 2019. The standard fundamentally changed lessee accounting and, in doing so, mechanically lifted reported EBITDA for any company with material operating leases.</p>

            <h3>Why EBITDA Increased Post-Ind AS 116</h3>
            <p>Under the previous standard Ind AS 17, operating lease rent was charged to the P&amp;L as a single line item above EBITDA. Under Ind AS 116, the lease is replaced by a Right-of-Use asset (depreciated over the lease term) and a lease liability (carrying interest). Both depreciation and interest sit below EBITDA — so the same economic transaction now leaves EBITDA untouched on the expense side. PwC's transition study and Grant Thornton's valuation impact analysis both confirm that approximately 80% of Indian companies with material lease portfolios saw a meaningful EBITDA boost on transition.</p>

            <h3>Sectors Most Affected</h3>
            <table class="rate-table">
                <thead><tr><th>Sector</th><th>Typical EBITDA Boost</th><th>Reason</th></tr></thead>
                <tbody>
                    <tr><td><strong>Retail</strong></td><td>3 – 8 percentage points</td><td>Store leases dominate cost structure</td></tr>
                    <tr><td><strong>Aviation</strong></td><td>5 – 12 percentage points</td><td>Aircraft leases on operating-lease basis</td></tr>
                    <tr><td><strong>Telecom</strong></td><td>10 – 20 percentage points</td><td>Tower and fibre infrastructure leases</td></tr>
                    <tr><td><strong>Hospitality / Hotels</strong></td><td>2 – 6 percentage points</td><td>Property leases on long tenor</td></tr>
                    <tr><td><strong>Logistics / Warehousing</strong></td><td>3 – 7 percentage points</td><td>Warehouse leases material</td></tr>
                    <tr><td><strong>IT Services</strong></td><td>0.5 – 2 percentage points</td><td>Office leases, modest impact</td></tr>
                    <tr><td><strong>Manufacturing (with own plants)</strong></td><td>Negligible</td><td>Owned plants, minimal lease exposure</td></tr>
                </tbody>
            </table>

            <h3>Reconciliation Format Used by Listed Companies</h3>
            <p>SEBI permits voluntary disclosure of Pre-Ind AS 116 EBITDA as an Alternative Performance Measure (APM) for like-for-like historical comparison. The standard format used by listed companies in investor presentations:</p>
            <table class="rate-table">
                <thead><tr><th>Line</th><th>Treatment</th></tr></thead>
                <tbody>
                    <tr><td>Reported EBITDA (Post-Ind AS 116)</td><td>As per audited P&amp;L</td></tr>
                    <tr><td>Less: Operating Lease Rent (Pre-Ind AS 116 equivalent)</td><td>Cash lease payment for the year</td></tr>
                    <tr><td><strong>Pre-Ind AS 116 EBITDA</strong></td><td><strong>Comparable with historical numbers</strong></td></tr>
                    <tr><td>Reported EBITDA Margin</td><td>Higher</td></tr>
                    <tr><td>Pre-Ind AS 116 EBITDA Margin</td><td>Comparable lower margin</td></tr>
                </tbody>
            </table>

            <div class="callout warn">
                <p><strong>Note:</strong> Bank loan covenants drafted before April 2019 may reference EBITDA without specifying treatment. Post-Ind AS 116, this creates ambiguity — does "EBITDA" mean reported (higher) or pre-standard (comparable)? Always re-read existing covenants and renegotiate definitions during loan renewal to remove this ambiguity.</p>
            </div>

            <p>For deeper Ind AS 116 implementation guidance, see Patron's <a href="/tools/lease-accounting-calculator-ind-as-116" target="_blank" rel="noopener">Lease Accounting Calculator (Ind AS 116)</a> which computes ROU asset, lease liability and year-wise schedule.</p>
        </section>

        <section class="content-section" id="vs-margins">
            <h2>EBITDA Margin vs Operating Margin vs Net Profit Margin</h2>
            <p>The Statement of Profit and Loss produces four distinct margin metrics, each useful for a different purpose. Understanding the cascade clarifies which one to use when.</p>

            <table class="rate-table">
                <thead><tr><th>Margin</th><th>Numerator</th><th>What It Measures</th><th>Best For</th></tr></thead>
                <tbody>
                    <tr><td><strong>Gross Margin</strong></td><td>Revenue − COGS</td><td>Production / sourcing efficiency</td><td>Pricing decisions, manufacturing benchmarking</td></tr>
                    <tr><td><strong>EBITDA Margin</strong></td><td>EBITDA</td><td>Operating profitability before D&amp;A</td><td>Cross-industry comparison, M&amp;A pricing</td></tr>
                    <tr><td><strong>Operating Margin (EBIT)</strong></td><td>EBITDA − D&amp;A</td><td>Operating profitability after capital cost</td><td>True economic profit at operating level</td></tr>
                    <tr><td><strong>Net Profit Margin</strong></td><td>PAT</td><td>Bottom-line profitability</td><td>Shareholder returns, dividend capacity</td></tr>
                </tbody>
            </table>

            <h3>When EBITDA and Operating Margin Diverge</h3>
            <p>The gap between EBITDA Margin and Operating Margin equals the D&amp;A intensity of the business. Capital-intensive businesses (telecom, infrastructure, manufacturing) show large gaps because depreciation is heavy. Asset-light services (IT services, consulting) show small gaps. A company with EBITDA Margin of 25% and Operating Margin of 22% has D&amp;A of 3% of revenue — moderate. A company with EBITDA Margin of 40% and Operating Margin of 18% has D&amp;A of 22% of revenue — extreme capital intensity, common in telecom post-Ind AS 116.</p>

            <h3>When Operating Margin and Net Margin Diverge</h3>
            <p>The gap between Operating Margin and Net Profit Margin reflects three forces: (a) net interest cost, (b) effective tax rate, (c) other income / exceptional items. A company with Operating Margin of 18% and Net Margin of 10% has 8 percentage points eaten by interest plus tax — typical for moderately leveraged Indian companies at a 25% effective tax rate. A net margin higher than operating margin signals large non-operating gains, low effective tax (set-off of carry-forward losses), or one-off items.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> The Schedule III mandatory ratio is Net Profit Ratio, not EBITDA Margin. However, both Operating Margin and EBITDA Margin are commonly disclosed in MD&amp;A by listed companies under SEBI LODR Reg 34(3). For a complete profitability view, present all three margins in board reporting and investor commentary.</p>
            </div>
        </section>


        <div class="body-cta">
            <h3>Need Help with EBITDA Disclosure or Ind AS 116 Reconciliation?</h3>
            <p>Patron Accounting LLP supports CFO offices with Ind AS 116 lease impact assessment, EBITDA reconciliation working papers, MD&amp;A drafting for listed entities, bank covenant compliance and Schedule III ratio disclosure — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20EBITDA%20Margin%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=EBITDA%20Margin%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20EBITDA%20Margin%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks for EBITDA Margin in India</h2>
            <p>EBITDA Margin varies dramatically by industry — comparing across sectors is meaningless. The bands below reflect typical Indian listed-peer ranges for FY 2024-25 reported financials. Always benchmark against three or four direct competitors for precise positioning.</p>

            <table class="rate-table">
                <thead><tr><th>Industry</th><th>Typical EBITDA Margin Band</th><th>Drivers</th></tr></thead>
                <tbody>
                    <tr><td><strong>IT Services / Software</strong></td><td>22% – 28%</td><td>People-led; pricing power varies. Tier-1 firms (TCS, Infosys, HCL) at the top end.</td></tr>
                    <tr><td><strong>FMCG / Consumer Goods</strong></td><td>18% – 25%</td><td>Brand strength enables premium pricing. HUL, Nestle, Colgate at top end.</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>20% – 28%</td><td>Differentiated product mix; export pricing materially helps.</td></tr>
                    <tr><td><strong>Real Estate Developer</strong></td><td>25% – 35%</td><td>Project-based; varies sharply by RERA registration vintage and location.</td></tr>
                    <tr><td><strong>Telecom (Post-Ind AS 116)</strong></td><td>40% – 50%</td><td>Inflated by Ind AS 116 lease capitalisation; pre-Ind AS 116 comparable 25-35%.</td></tr>
                    <tr><td><strong>Manufacturing — Capital Goods</strong></td><td>12% – 18%</td><td>Cyclical; raw material cost pass-through capability matters.</td></tr>
                    <tr><td><strong>Manufacturing — Auto / Auto Comp</strong></td><td>10% – 16%</td><td>Commodity input pressure; tier-1 OEMs at upper end.</td></tr>
                    <tr><td><strong>Banking — Net Interest Margin</strong></td><td>3% – 4% NIM</td><td>EBITDA Margin not relevant for banks; use NIM and Cost-to-Income Ratio.</td></tr>
                    <tr><td><strong>Retail / Quick-Commerce</strong></td><td>6% – 12%</td><td>High volume, thin margins. Modern retail (DMart) at upper end.</td></tr>
                    <tr><td><strong>Hospitality / Hotels</strong></td><td>20% – 35%</td><td>Operating leverage; ARR and occupancy drive margins.</td></tr>
                    <tr><td><strong>Logistics</strong></td><td>10% – 18%</td><td>Asset-heavy; fleet and warehouse leases material post-Ind AS 116.</td></tr>
                    <tr><td><strong>Power / Utilities</strong></td><td>20% – 40%</td><td>Tariff-regulated; fixed cost structure benefits from operating leverage.</td></tr>
                </tbody>
            </table>

            <div class="callout">
                <p><strong>CA Tip:</strong> When benchmarking against telecom peers, always reduce EBITDA Margin by 10-15 percentage points to compare on a pre-Ind AS 116 basis with historical data and global peers using IFRS-equivalent treatment. Failing to do so leads to misleading conclusions about margin expansion.</p>
            </div>
        </section>

        <section class="content-section" id="valuation">
            <h2>EV/EBITDA — How EBITDA Drives Valuation</h2>
            <p>EV/EBITDA (Enterprise Value to EBITDA) is the single most widely-used valuation multiple in M&amp;A and equity research, especially for capital-intensive industries where Price/Earnings is distorted by depreciation policies and tax jurisdictions.</p>

            <h3>The EV/EBITDA Formula</h3>
            <div class="formula-box">
<span class="label">Enterprise Value (EV)</span> = Market Cap + Net Debt + Lease Liabilities (post-Ind AS 116) + Minority Interest − Cash &amp; Investments<br>
<br>
<span class="label">EV/EBITDA Multiple</span> = EV ÷ Trailing or Forward EBITDA<br>
<br>
<span class="label">Implied EV</span> = EBITDA × Target Multiple
            </div>

            <h3>India-Specific EV/EBITDA Multiples</h3>
            <table class="rate-table">
                <thead><tr><th>Company Profile</th><th>Typical EV/EBITDA Range</th><th>Examples</th></tr></thead>
                <tbody>
                    <tr><td><strong>Distressed / Stressed</strong></td><td>3 – 6×</td><td>Companies in IBC; turnaround candidates</td></tr>
                    <tr><td><strong>Cyclical Mid-Cap</strong></td><td>6 – 10×</td><td>Auto components, capital goods, commodity chemicals</td></tr>
                    <tr><td><strong>Stable Mid-Cap</strong></td><td>10 – 15×</td><td>Engineering, mid-cap pharma, tier-2 IT services</td></tr>
                    <tr><td><strong>Quality Large-Cap</strong></td><td>15 – 25×</td><td>Tier-1 IT services, large-cap private banks</td></tr>
                    <tr><td><strong>Consumer Staples Leaders</strong></td><td>25 – 50×</td><td>HUL, Nestle, Asian Paints, Pidilite</td></tr>
                    <tr><td><strong>High-Growth Tech</strong></td><td>30 – 80× or N/A</td><td>SaaS leaders; many trade on EV/Sales due to thin EBITDA</td></tr>
                </tbody>
            </table>

            <h3>Why EV/EBITDA Beats P/E for Some Use Cases</h3>
            <p>EV/EBITDA neutralises capital structure choices (debt versus equity funding) and tax jurisdiction effects (different tax rates change PAT but not EBITDA). For cross-border M&amp;A, mixed-cap-structure peer comparisons, and acquisitions where the buyer will refinance the target's debt, EV/EBITDA is the cleaner multiple. P/E is preferred for stable mature businesses where capital structure is stable and tax is fully paid.</p>

            <div class="callout warn">
                <p><strong>Note:</strong> Post-Ind AS 116, the lease liability is part of EV. Failing to add it back leads to an artificially low EV and inflated EV/EBITDA conclusions. The reported EBITDA is also higher post-Ind AS 116, which partially offsets. Net effect varies by lease intensity. Always verify the EV definition used by your benchmark sources.</p>
            </div>
        </section>

        <section class="content-section" id="limitations">
            <h2>Limitations and Criticisms of EBITDA</h2>
            <p>EBITDA is widely used but is not without serious critics. Famously, Warren Buffett and Charlie Munger have called it a deceptive measure for ignoring the real economic costs of depreciation and interest. Understanding these limitations helps avoid over-relying on EBITDA.</p>

            <h3>EBITDA Ignores Capital Replacement Cost</h3>
            <p>Depreciation is a real economic cost — capital assets wear out and need replacement. By stripping it out, EBITDA flatters capital-intensive businesses. A telecom company with EBITDA Margin of 45% but Operating Margin of 12% is paying nearly 33 percentage points of revenue toward depreciation — a real cash outflow over the asset life. EBITDA tells you nothing about whether the business generates enough cash to replace the assets it consumes.</p>

            <h3>EBITDA Ignores Capital Structure Cost</h3>
            <p>Interest is a real cost of operations for any leveraged business. By stripping it out, EBITDA equates a debt-free company to a heavily-leveraged one. Two companies with identical EBITDA can have very different free cash flow after interest payments. <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>-regulated lender covenants for this reason use EBITDA only in conjunction with Debt-to-EBITDA caps and DSCR floors — not standalone.</p>

            <h3>EBITDA Ignores Working Capital Investment</h3>
            <p>Growing businesses absorb working capital — inventory builds, receivables expand, payables stretch. None of this shows in EBITDA. A company with growing EBITDA can have negative free cash flow if working capital is consuming all the operating profit. Always read EBITDA alongside Operating Cash Flow and the change in Cash Conversion Cycle.</p>

            <h3>The Buffett Quote</h3>
            <p>Warren Buffett, in his 2002 letter to Berkshire Hathaway shareholders, wrote that references to EBITDA "make us shudder" — adding that depreciation is a real expense and that any management team using EBITDA to flatter performance "are trying to con you or they're conning themselves." For Indian listed companies, EBITDA is now a standard reported metric, but Buffett's caution applies — always cross-check with Operating Cash Flow.</p>

            <h3>Adjusted EBITDA — Use With Care</h3>
            <p>Indian listed companies routinely report "Adjusted EBITDA" excluding one-off items, restructuring costs, share-based payments, FX impact and similar adjustments. This is acceptable when adjustments are transparent and consistently applied year-on-year. It becomes problematic when adjustments seem to recur every year, or when items shift between recurring and non-recurring designation depending on whether they help or hurt the headline number. Auditors and investors should challenge such patterns.</p>
        </section>

        <section class="content-section" id="sebi-disclosure">
            <h2>SEBI Disclosure Requirements for EBITDA</h2>
            <p>Listed entities have specific disclosure obligations regarding EBITDA, EBITDA Margin and Adjusted EBITDA. While EBITDA itself is not a Schedule III mandatory ratio, related disclosures fall under the <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">Securities and Exchange Board of India</a> framework.</p>

            <h3>SEBI LODR Regulation 34(3) and Schedule V</h3>
            <p>Listed equity entities disclose key financial ratios including EBITDA Margin in the Management Discussion and Analysis section of the annual report under Regulation 34(3) read with Schedule V Part B(1). Significant changes (25 per cent or more) compared to the immediately previous financial year require detailed explanation. The seven ratios specifically mentioned cover Debtors Turnover, Inventory Turnover, Interest Coverage, Current Ratio, Debt-Equity, Operating Profit Margin and Net Profit Margin, plus Return on Net Worth — EBITDA Margin is voluntarily added by most listed companies.</p>

            <h3>Listed Debt Entities — Regulation 52</h3>
            <p>Companies with listed non-convertible debentures or commercial paper disclose financial ratios half-yearly under SEBI LODR Regulation 52, certified by the statutory auditor or practising company secretary. EBITDA-based covenants under the trust deed are tested at every disclosure date. Trustees and rating agencies pay close attention to trends.</p>

            <h3>Alternative Performance Measures (APM)</h3>
            <p>SEBI guidance recognises Alternative Performance Measures such as Adjusted EBITDA, Pre-Ind AS 116 EBITDA, Cash EBITDA and similar non-GAAP metrics. The disclosure must (a) reconcile to the nearest GAAP/Ind AS measure, (b) explain each adjustment, (c) be consistently applied year-on-year, (d) be presented with equal prominence to GAAP measures. The SEBI rules align with broader IOSCO principles on APM disclosure adopted globally.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> If your listed company plans to introduce a new APM (such as "Cash EBITDA" or "Pre-IndAS 116 EBITDA") for the first time, brief the audit committee one quarter ahead, get statutory auditor concurrence on the reconciliation methodology, and disclose the change-in-policy explicitly in the first annual report featuring the new metric. Retroactive APM definitions trigger investor scepticism.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About EBITDA Margin</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is EBITDA Margin and what does it measure?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EBITDA Margin is a profitability ratio that expresses Earnings Before Interest, Tax, Depreciation and Amortisation as a percentage of Revenue from Operations. It strips out capital structure choices (interest), tax jurisdiction effects (tax), and accounting estimates (depreciation, amortisation) to focus purely on operating profitability. A higher EBITDA Margin signals stronger pricing power, cost control, or scale advantage. It is widely used for cross-company comparison, M&amp;A pricing through EV/EBITDA multiples, and bank covenant testing.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the formula for EBITDA Margin?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EBITDA Margin equals EBITDA divided by Revenue from Operations, expressed as a percentage. EBITDA itself can be derived two ways. Bottom-up: PAT plus Tax plus Finance Costs plus Depreciation and Amortisation. Top-down: Revenue from Operations less Cost of Materials less Employee Benefit Expenses less Other Operating Expenses. Both methods yield the same result. Other Income is excluded from EBITDA by default unless it is operating in nature, in which case it is added before computing the margin.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How did Ind AS 116 affect EBITDA Margin in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 116, effective 1 April 2019, replaced operating lease rent expense with right-of-use depreciation plus lease liability interest. Since depreciation and interest sit below EBITDA while operating lease rent sat above, post-Ind AS 116 reported EBITDA is structurally higher than pre-Ind AS 116. The boost is material for retail, airlines, telecom and logistics. SEBI permits voluntary disclosure of pre-Ind AS 116 EBITDA as an Alternative Performance Measure for like-for-like historical comparability.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is EBITDA Margin a mandatory Schedule III disclosure?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EBITDA Margin itself is not one of the eleven mandatory analytical ratios under Schedule III to the Companies Act, 2013. However, Net Profit Ratio is mandatory and is computed from the same source data. The MCA notification dated 24 March 2021 introduced eleven ratios including Current Ratio, Debt-Equity, DSCR, Return on Equity, Net Profit Ratio and Return on Capital Employed. Listed companies disclose EBITDA Margin separately under SEBI LODR Regulation 34(3) in MD&amp;A as a key financial indicator.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is a good EBITDA Margin in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A good EBITDA Margin varies sharply by industry. IT services and software firms typically deliver 22 to 28 per cent, FMCG and consumer goods 18 to 25 per cent, manufacturing 12 to 18 per cent, pharma 20 to 28 per cent, real estate developers 25 to 35 per cent, telecom 40 to 50 per cent post-Ind AS 116, and retail only 6 to 12 per cent due to thin margins on high-volume sales. Always benchmark against three or four direct Indian listed peers, not cross-industry averages.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between EBITDA Margin and Operating Margin?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EBITDA Margin uses earnings before depreciation and amortisation as the numerator. Operating Margin uses EBIT, which is EBITDA less Depreciation and Amortisation. The two diverge when D&amp;A is material. Capital-intensive businesses such as telecom and infrastructure show much higher EBITDA Margin than Operating Margin because they carry large depreciation. Asset-light services businesses show similar EBITDA and Operating Margins. Both are useful, with EBITDA Margin preferred for cross-industry comparison and Operating Margin closer to true economic profit.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does EV / EBITDA work as a valuation multiple?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EV/EBITDA is a valuation multiple computed as Enterprise Value divided by EBITDA, where EV equals Market Capitalisation plus Net Debt plus Lease Liabilities (post-Ind AS 116) plus Minority Interest less Cash. Indian listed mid-cap companies trade between 8 and 12 times forward EBITDA, growth and quality leaders 15 to 25 times, and consumer staples leaders 30 to 50 times. Lower multiples indicate value or stress, higher multiples indicate growth or premium positioning. EV/EBITDA neutralises capital structure choices.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should Other Income be included in EBITDA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Other Income should be included in EBITDA only if it is operating in nature — recurring service fees, royalty income, scrap sales, foreign exchange gains on operating items. Non-operating Other Income such as interest on fixed deposits, dividend income, profit on sale of investments and one-off insurance claims should be excluded to keep EBITDA reflective of core operating profitability. The default treatment in this calculator excludes Other Income; toggle to include only when the income is genuinely operating.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What are the criticisms of EBITDA as a profitability measure?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Warren Buffett and Charlie Munger have famously called EBITDA a misleading measure because it ignores the very real cash cost of replacing capital assets (depreciation) and the cost of debt servicing (interest). For capital-intensive businesses, EBITDA can flatter performance while free cash flow tells a different story. EBITDA also enabled aggressive M&amp;A leverage in past decades that ended in distress. Always read EBITDA alongside Operating Cash Flow, Free Cash Flow and Net Profit for a balanced view.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is EBITDA Margin used in bank loan covenants?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Indian bank loan agreements typically include EBITDA-based covenants such as Net Debt to EBITDA below a specified threshold (commonly 3.0 to 4.0 times for mid-corporates) and Interest Coverage above a floor (commonly 2.5 to 3.0 times). Listed bond issuers face similar tests in trust deeds. Post-Ind AS 116, definitions need careful reading because the standard mechanically lifts EBITDA without changing economic substance. Many lenders have updated covenant definitions to use frozen pre-Ind AS 116 numbers or adjusted EBITDA after lease.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How do listed companies disclose EBITDA under SEBI rules?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under SEBI LODR Regulations 2015, listed entities disclose key financial ratios including EBITDA Margin in the Management Discussion and Analysis section of the annual report under Regulation 34(3) read with Schedule V. Investor presentations and earnings call commentary commonly highlight EBITDA, EBITDA Margin and Adjusted EBITDA. Listed debt entities make half-yearly disclosures under Regulation 52. Post-Ind AS 116, many companies present pre-Ind AS 116 EBITDA reconciliations in investor decks as an Alternative Performance Measure for historical comparability.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Adjusted EBITDA and when is it used?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Adjusted EBITDA is reported EBITDA modified for one-off items, non-recurring charges, share-based payments, restructuring costs, foreign exchange impact, ESOP costs and similar adjustments to provide a normalised view of operating performance. Indian listed companies frequently disclose Adjusted EBITDA in investor presentations, M&amp;A documentation and lender covenant compliance certificates. The adjustments must be transparent and consistently applied. SEBI guidance on Alternative Performance Measures requires reconciliation to reported numbers and explanation of each adjustment.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Where on the P&amp;L do I find inputs for EBITDA computation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS Schedule III Division II, Revenue from Operations is the top line of the Statement of Profit and Loss. Cost of Materials Consumed, Purchases of Stock-in-Trade, Changes in Inventory, Employee Benefit Expenses, Finance Costs, Depreciation and Amortisation, and Other Expenses appear as separate line items in the prescribed P&amp;L format. Other Income is reported separately above the expenses block. Tax Expense is split into current tax and deferred tax. All Schedule III line items map directly into this calculator's input fields.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need Ind AS 116 Reconciliation Help?</h3>
            <p>Get CA-led EBITDA reconciliation working papers, Ind AS 116 lease impact assessment, MD&amp;A drafting and bank covenant compliance — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20EBITDA%20Margin%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=EBITDA%20Margin%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20EBITDA%20Margin%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting &amp; Bookkeeping<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/secretarial-audit" class="sidebar-link">Secretarial Audit<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Accounting (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator<span class="arrow">→</span></a>
            <a href="/tools/debt-to-equity-calculator" class="sidebar-link">Debt to Equity Calculator<span class="arrow">→</span></a>
            <a href="/tools/cash-conversion-cycle-calculator" class="sidebar-link">Cash Conversion Cycle<span class="arrow">→</span></a>
            <a href="/tools/profit-loss-generator" class="sidebar-link">Profit &amp; Loss Generator<span class="arrow">→</span></a>
            <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements<span class="arrow">→</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Tax Scrutiny &amp; Assessment<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function() {
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    function setupToggleGroup(id) {
        const group = document.getElementById(id);
        if (!group) return;
        group.addEventListener('click', function(e) {
            const btn = e.target.closest('.toggle-btn');
            if (!btn || !group.contains(btn)) return;
            group.querySelectorAll('.toggle-btn').forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
        });
    }
    function getActive(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }
    setupToggleGroup('oiTreatment');
    setupToggleGroup('industryGroup');

    function fmtINR(n) {
        if (n === undefined || n === null || isNaN(n)) return '₹0';
        const sign = n < 0 ? '-' : '';
        const abs = Math.abs(n);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function fmtINRneg(n) {
        if (isNaN(n)) return '₹0';
        if (n === 0) return '—';
        if (n < 0) return '(' + fmtINR(Math.abs(n)) + ')';
        return fmtINR(n);
    }
    function fmtPct(n, decimals) {
        if (!isFinite(n)) return '—';
        decimals = decimals === undefined ? 1 : decimals;
        const sign = n > 0 ? '+' : '';
        return sign + n.toFixed(decimals) + '%';
    }
    function fmtPctRaw(n, decimals) {
        if (!isFinite(n)) return '—';
        decimals = decimals === undefined ? 1 : decimals;
        return n.toFixed(decimals) + '%';
    }
    function num(id) {
        const v = parseINR(document.getElementById(id).value);
        return isNaN(v) ? 0 : v;
    }

    const benchmarks = {
        manufacturing: { low: 12, high: 18, label: 'Manufacturing', note: 'Indian manufacturing peers run EBITDA Margin 12-18%, with cyclical sensitivity to raw material costs.' },
        it: { low: 22, high: 28, label: 'IT / Software', note: 'Indian IT majors run EBITDA Margin 22-28%. Tier-1 firms (TCS, Infosys, HCL) at the top end.' },
        fmcg: { low: 18, high: 25, label: 'FMCG', note: 'Indian FMCG peers run EBITDA Margin 18-25%. HUL, Nestle, Colgate at top end on brand strength.' },
        retail: { low: 6, high: 12, label: 'Retail', note: 'Indian retail peers run EBITDA Margin 6-12%. Modern retail (DMart, Trent) at upper end.' },
        pharma: { low: 20, high: 28, label: 'Pharma', note: 'Indian pharma peers run EBITDA Margin 20-28%, with export pricing materially helping.' },
        realestate: { low: 25, high: 35, label: 'Real Estate', note: 'Indian real estate developers run EBITDA Margin 25-35%, varying by RERA registration vintage and location.' },
        telecom: { low: 40, high: 50, label: 'Telecom (Post-Ind AS 116)', note: 'Telecom EBITDA Margin 40-50% post-Ind AS 116. Pre-Ind AS 116 comparable is 25-35%.' },
        services: { low: 15, high: 25, label: 'Services', note: 'Indian services-sector peers run EBITDA Margin 15-25%, dependent on labour intensity.' }
    };

    function readInputs() {
        return {
            rev: num('revenue'),
            oi: num('otherIncome'),
            oiInc: getActive('oiTreatment') === 'include',
            cogs: num('cogs'),
            empCost: num('empCost'),
            otherExp: num('otherExp'),
            dep: num('dep'),
            finCost: num('finCost'),
            tax: num('tax'),
            leaseRent: num('leaseRent'),
            industry: getActive('industryGroup') || 'manufacturing',
            prevMargin: parseINR(document.getElementById('prevMargin').value),
            evMultiple: parseINR(document.getElementById('evMultiple').value)
        };
    }

    function validate(inp) {
        if (inp.rev <= 0) return 'Please enter Revenue from Operations (must be greater than zero).';
        if ((inp.cogs + inp.empCost + inp.otherExp) === 0 && inp.dep === 0 && inp.finCost === 0 && inp.tax === 0) {
            return 'Please enter at least one expense line item to compute EBITDA.';
        }
        return null;
    }

    function compute(inp) {
        const oiInEbitda = inp.oiInc ? inp.oi : 0;
        const oiBelowEbitda = inp.oiInc ? 0 : inp.oi;
        const totalOpEx = inp.cogs + inp.empCost + inp.otherExp;
        const ebitda = inp.rev + oiInEbitda - totalOpEx;
        const ebit = ebitda - inp.dep;
        const pbt = ebit - inp.finCost + oiBelowEbitda;
        const pat = pbt - inp.tax;

        const ebitdaMargin = inp.rev > 0 ? (ebitda / inp.rev) * 100 : 0;
        const operatingMargin = inp.rev > 0 ? (ebit / inp.rev) * 100 : 0;
        const pbtMargin = inp.rev > 0 ? (pbt / inp.rev) * 100 : 0;
        const netMargin = inp.rev > 0 ? (pat / inp.rev) * 100 : 0;

        // Pre-Ind AS 116 reconciliation
        const ebitdaPre = ebitda - inp.leaseRent;
        const ebitdaPreMargin = inp.rev > 0 ? (ebitdaPre / inp.rev) * 100 : 0;
        const indAsBoostAbs = inp.leaseRent;
        const indAsBoostPct = ebitda > 0 ? (inp.leaseRent / ebitda) * 100 : 0;

        // Trend
        let trendPct = null, trendType = null;
        if (!isNaN(inp.prevMargin) && document.getElementById('prevMargin').value !== '' && Math.abs(inp.prevMargin) > 0.001) {
            trendPct = ebitdaMargin - inp.prevMargin;  // basis points change
            trendType = trendPct > 1 ? 'up' : trendPct < -1 ? 'down' : 'flat';
        }

        // Implied EV
        let impliedEV = null;
        if (!isNaN(inp.evMultiple) && document.getElementById('evMultiple').value !== '' && inp.evMultiple > 0 && ebitda > 0) {
            impliedEV = ebitda * inp.evMultiple;
        }

        // Effective tax rate
        const effTaxRate = pbt > 0 ? (inp.tax / pbt) * 100 : 0;

        return {
            ebitda, ebit, pbt, pat, totalOpEx,
            ebitdaMargin, operatingMargin, pbtMargin, netMargin,
            ebitdaPre, ebitdaPreMargin, indAsBoostAbs, indAsBoostPct,
            trendPct, trendType, impliedEV, effTaxRate, oiInEbitda, oiBelowEbitda
        };
    }

    function getVerdict(margin, industry) {
        const b = benchmarks[industry];
        if (!b) return { headline: 'Margin Computed', sub: 'See breakdown below.', cls: 'verdict' };
        if (margin < 0) return { headline: 'Negative EBITDA — Operating Loss', sub: 'Operating expenses exceed revenue. Urgent review of cost base needed.', cls: 'red' };
        if (margin < b.low * 0.5) return { headline: 'Materially Below Industry', sub: 'EBITDA Margin is significantly below ' + b.label + ' peers. Investigate cost overruns or pricing pressure.', cls: 'red' };
        if (margin < b.low) return { headline: 'Below Industry Band', sub: 'Margin trails ' + b.label + ' peers. Identify which expense line is driving the gap.', cls: 'amber' };
        if (margin <= b.high) return { headline: 'In Line with Industry', sub: 'Margin sits within typical ' + b.label + ' range. Healthy operating profitability.', cls: 'verdict' };
        if (margin <= b.high * 1.3) return { headline: 'Above Industry Band', sub: 'Strong margin relative to ' + b.label + ' peers. Sustainable advantage worth preserving.', cls: 'blue' };
        return { headline: 'Materially Above Industry', sub: 'Exceptional margin. Verify accounting policies and Ind AS 116 lease treatment.', cls: 'blue' };
    }

    function getBenchmarkBanner(margin, industry) {
        const b = benchmarks[industry];
        if (!b) return null;
        let cls, msg;
        if (margin < 0) {
            cls = 'danger';
            msg = '<strong>⚠ Negative EBITDA Margin.</strong> Operating expenses exceed revenue. Industry comparison is not meaningful — focus on cost reduction and revenue growth before benchmarking.';
        } else if (margin >= b.low && margin <= b.high) {
            cls = 'success';
            msg = '<strong>✓ In line with industry.</strong> Your EBITDA Margin of <strong>' + fmtPctRaw(margin) + '</strong> sits within the typical ' + b.label + ' band of ' + b.low + '% to ' + b.high + '%. ' + b.note;
        } else if (margin < b.low) {
            cls = 'warn';
            msg = '<strong>⚠ Below industry band.</strong> Your EBITDA Margin of <strong>' + fmtPctRaw(margin) + '</strong> is below the typical ' + b.label + ' band of ' + b.low + '% to ' + b.high + '%. Investigate which expense line is driving the gap (raw material, employee, or other operating).';
        } else {
            cls = 'info';
            msg = '<strong>✓ Above industry band.</strong> Your EBITDA Margin of <strong>' + fmtPctRaw(margin) + '</strong> exceeds the typical ' + b.label + ' band of ' + b.low + '% to ' + b.high + '%. Strong operating performance — verify Ind AS 116 lease treatment and other policy choices.';
        }
        return { cls: cls, html: msg };
    }

    function buildPLWalk(inp, r) {
        const oiAboveLine = inp.oiInc ? inp.oi : 0;
        const oiBelowLine = inp.oiInc ? 0 : inp.oi;
        const rows = [
            ['Revenue from Operations', inp.rev]
        ];
        if (oiAboveLine > 0) rows.push(['Other Income (operating)', oiAboveLine]);
        rows.push(
            ['Cost of Materials / Purchases', -inp.cogs],
            ['Employee Benefit Expenses', -inp.empCost],
            ['Other Operating Expenses', -inp.otherExp]
        );
        let html = '<table>';
        rows.forEach(r => {
            html += '<tr><td>' + r[0] + '</td><td>' + fmtINRneg(r[1]) + '</td></tr>';
        });
        html += '<tr class="subtotal"><td>EBITDA</td><td>' + fmtINR(r.ebitda) + ' (' + fmtPctRaw(r.ebitdaMargin) + ')</td></tr>';
        html += '<tr><td>Depreciation &amp; Amortisation</td><td>' + fmtINRneg(-inp.dep) + '</td></tr>';
        html += '<tr class="subtotal"><td>EBIT (Operating Profit)</td><td>' + fmtINR(r.ebit) + ' (' + fmtPctRaw(r.operatingMargin) + ')</td></tr>';
        html += '<tr><td>Finance Costs</td><td>' + fmtINRneg(-inp.finCost) + '</td></tr>';
        if (oiBelowLine > 0) html += '<tr><td>Other Income (non-operating)</td><td>' + fmtINRneg(oiBelowLine) + '</td></tr>';
        html += '<tr class="subtotal"><td>Profit Before Tax</td><td>' + fmtINR(r.pbt) + ' (' + fmtPctRaw(r.pbtMargin) + ')</td></tr>';
        html += '<tr><td>Tax Expense</td><td>' + fmtINRneg(-inp.tax) + '</td></tr>';
        html += '<tr class="total"><td>Profit After Tax</td><td>' + fmtINR(r.pat) + ' (' + fmtPctRaw(r.netMargin) + ')</td></tr>';
        html += '</table>';
        return html;
    }

    function buildSummaryGrid(r, inp) {
        const cards = [
            { label: 'EBITDA Margin', value: fmtPctRaw(r.ebitdaMargin), highlight: true },
            { label: 'Operating Margin (EBIT)', value: fmtPctRaw(r.operatingMargin) },
            { label: 'Net Profit Margin', value: fmtPctRaw(r.netMargin) },
            { label: 'EBITDA Absolute', value: fmtINR(r.ebitda) },
            { label: 'EBIT Absolute', value: fmtINR(r.ebit) },
            { label: 'PAT Absolute', value: fmtINR(r.pat) }
        ];
        return cards.map(c => '<div class="summary-card' + (c.highlight ? ' highlight' : '') + '"><div class="summary-label">' + c.label + '</div><div class="summary-value">' + c.value + '</div></div>').join('');
    }

    function buildBasisText(inp, r) {
        const oiTxt = inp.oiInc ? 'Other Income <strong>included</strong> in EBITDA (treated as operating).' : 'Other Income <strong>excluded</strong> from EBITDA (treated as non-operating).';
        return 'Computed using P&amp;L line items per Schedule III Division II to the Companies Act, 2013. <strong>EBITDA</strong> = Revenue ' + fmtINR(inp.rev) + (inp.oiInc && inp.oi > 0 ? ' + Other Income ' + fmtINR(inp.oi) : '') + ' − COGS ' + fmtINR(inp.cogs) + ' − Employee Costs ' + fmtINR(inp.empCost) + ' − Other Op Expenses ' + fmtINR(inp.otherExp) + ' = <strong>' + fmtINR(r.ebitda) + '</strong>. <strong>EBITDA Margin</strong> = ' + fmtINR(r.ebitda) + ' / ' + fmtINR(inp.rev) + ' = <strong>' + fmtPctRaw(r.ebitdaMargin, 2) + '</strong>. ' + oiTxt + (inp.leaseRent > 0 ? ' Pre-Ind AS 116 EBITDA after deducting lease rent ' + fmtINR(inp.leaseRent) + ' = ' + fmtINR(r.ebitdaPre) + ' (margin ' + fmtPctRaw(r.ebitdaPreMargin) + ').' : '');
    }

    function buildDisclosureRows(r, inp) {
        return [
            '<tr><td>Net Profit Ratio (Mandatory)</td><td>Profit After Tax</td><td>Revenue from Operations</td><td class="num">' + fmtPctRaw(r.netMargin, 2) + '</td></tr>',
            '<tr><td>EBITDA Margin (Voluntary, MD&amp;A)</td><td>EBITDA</td><td>Revenue from Operations</td><td class="num">' + fmtPctRaw(r.ebitdaMargin, 2) + '</td></tr>',
            '<tr><td>Operating Margin (Voluntary, MD&amp;A)</td><td>EBIT</td><td>Revenue from Operations</td><td class="num">' + fmtPctRaw(r.operatingMargin, 2) + '</td></tr>'
        ].join('');
    }

    function calculate() {
        const inp = readInputs();
        const err = validate(inp);
        const result = document.getElementById('resultSection');
        if (err) {
            alert(err);
            result.classList.remove('visible');
            return;
        }
        const r = compute(inp);

        const v = getVerdict(r.ebitdaMargin, inp.industry);
        const vc = document.getElementById('verdictCard');
        vc.className = 'verdict-card' + (v.cls && v.cls !== 'verdict' ? ' ' + v.cls : '');
        document.getElementById('verdictHeadline').textContent = 'EBITDA Margin = ' + fmtPctRaw(r.ebitdaMargin, 2) + ' — ' + v.headline;
        document.getElementById('verdictSub').textContent = v.sub;
        document.getElementById('ebitdaVal').textContent = fmtINR(r.ebitda);
        document.getElementById('revenueVal').textContent = fmtINR(inp.rev);

        document.getElementById('plWalk').innerHTML = buildPLWalk(inp, r);
        document.getElementById('summaryGrid').innerHTML = buildSummaryGrid(r, inp);

        // Ind AS 116 reconciliation
        const indAsEl = document.getElementById('indAsRecon');
        if (inp.leaseRent > 0) {
            document.getElementById('ebitdaReported').textContent = fmtINR(r.ebitda) + ' (' + fmtPctRaw(r.ebitdaMargin) + ')';
            document.getElementById('ebitdaPre').textContent = fmtINR(r.ebitdaPre) + ' (' + fmtPctRaw(r.ebitdaPreMargin) + ')';
            document.getElementById('indAsBoostAbs').textContent = fmtINR(r.indAsBoostAbs);
            document.getElementById('indAsBoostPct').textContent = fmtPctRaw(r.indAsBoostPct);
            indAsEl.style.display = 'block';
        } else {
            indAsEl.style.display = 'none';
        }

        // Benchmark
        const bb = getBenchmarkBanner(r.ebitdaMargin, inp.industry);
        const bbEl = document.getElementById('benchmarkBanner');
        if (bb) {
            bbEl.className = 'info-banner ' + bb.cls;
            bbEl.innerHTML = bb.html;
            bbEl.style.display = 'block';
        } else {
            bbEl.style.display = 'none';
        }

        // Trend
        const tEl = document.getElementById('trendBanner');
        if (r.trendPct !== null) {
            const cls = r.trendType === 'up' ? 'success' : r.trendType === 'down' ? 'warn' : 'info';
            const arrow = r.trendType === 'up' ? '↑' : r.trendType === 'down' ? '↓' : '→';
            const msg = '<strong>' + arrow + ' Trend vs Previous Year:</strong> EBITDA Margin moved from ' + fmtPctRaw(inp.prevMargin) + ' to ' + fmtPctRaw(r.ebitdaMargin) + ', a change of <strong>' + fmtPct(r.trendPct) + '</strong> percentage points (' + (r.trendType === 'up' ? 'expansion' : r.trendType === 'down' ? 'contraction' : 'flat') + ').';
            tEl.className = 'info-banner ' + cls;
            tEl.innerHTML = msg;
            tEl.style.display = 'block';
        } else {
            tEl.style.display = 'none';
        }

        // Valuation
        const vEl = document.getElementById('valuationBanner');
        if (r.impliedEV !== null) {
            vEl.innerHTML = '<strong>Implied Enterprise Value:</strong> EBITDA ' + fmtINR(r.ebitda) + ' × ' + inp.evMultiple + '× = <strong>' + fmtINR(r.impliedEV) + '</strong>. To derive Equity Value, deduct Net Debt and add Cash from this implied EV. Indian mid-caps trade 8-12×, growth leaders 15-25×, consumer staples 30-50×.';
            vEl.style.display = 'block';
        } else {
            vEl.style.display = 'none';
        }

        document.getElementById('basisText').innerHTML = buildBasisText(inp, r);
        document.getElementById('disclosureRows').innerHTML = buildDisclosureRows(r, inp);

        result.classList.add('visible');
        setTimeout(function() { result.scrollIntoView({behavior: 'smooth', block: 'start'}); }, 80);
    }

    function reset() {
        ['revenue', 'otherIncome', 'cogs', 'empCost', 'otherExp', 'dep', 'finCost', 'tax', 'leaseRent', 'prevMargin', 'evMultiple'].forEach(id => {
            document.getElementById(id).value = '';
        });
        document.querySelectorAll('#oiTreatment .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === 'exclude';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        document.querySelectorAll('#industryGroup .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === 'manufacturing';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('btnCalculate').addEventListener('click', calculate);
    document.getElementById('btnReset').addEventListener('click', reset);

    document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                calculate();
            }
        });
    });

    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

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
