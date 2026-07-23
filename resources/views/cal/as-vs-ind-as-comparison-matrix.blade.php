@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>AS vs Ind AS Comparison Matrix | 30 Standards Mapped</title>
    <meta name="description" content="Free AS vs Ind AS comparison matrix: 30 accounting standards mapped with key differences, searchable and filterable. ICAI-aligned, CA-reviewed reference tool.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/as-vs-ind-as-comparison-matrix/">
    <meta property="og:title" content="AS vs Ind AS Comparison Matrix — FY 2025-26">
    <meta property="og:description" content="30 Indian GAAP (AS) vs Ind AS standards mapped with key differences. Searchable matrix. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/as-vs-ind-as-comparison-matrix">
    <meta property="og:image" content="/tools/og/as-vs-ind-as-comparison-matrix.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AS vs Ind AS Comparison Matrix — FY 2025-26">
    <meta name="twitter:description" content="30 standards mapped with key differences. Searchable, filterable. Free CA-reviewed reference tool.">
    <meta name="twitter:image" content="/tools/og/as-vs-ind-as-comparison-matrix.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "AS vs Ind AS Comparison Matrix",
      "description": "AS vs Ind AS Comparison Matrix is a searchable and filterable reference tool for Indian Chartered Accountants and CFO offices comparing Indian GAAP Accounting Standards (AS) under the Companies (Accounting Standards) Rules 2021 with Indian Accounting Standards (Ind AS) under the Companies (Indian Accounting Standards) Rules 2015. The matrix maps 30 standards across categories — Presentation and Disclosure, Revenue and Income, Assets including Inventory and PPE, Leases, Financial Instruments, Income Taxes, Employee Benefits, Group Reporting and Consolidation, Foreign Currency, Provisions and Contingencies, and Special Standards. For each pair, the matrix shows the AS number, Ind AS number, common topic name, category, and three to four key differences with major-difference flagging. Filter capabilities include keyword search across standard numbers and topic names, multi-select category chips, and a major-differences-only toggle. Suitable for transition planning, dual GAAP reporting, group consolidation, audit preparation, and educational reference for CA students.",
      "url": "/tools/as-vs-ind-as-comparison-matrix",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-07T08:00:00+05:30",
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
        {"@type": "ListItem", "position": 3, "name": "AS vs Ind AS Comparison Matrix", "item": "/tools/as-vs-ind-as-comparison-matrix"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-07T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the difference between AS and Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Accounting Standards (AS) are Indian GAAP standards notified under the Companies (Accounting Standards) Rules 2021, applicable to companies not required to follow Ind AS. Indian Accounting Standards (Ind AS) are the IFRS-converged standards notified under the Companies (Indian Accounting Standards) Rules 2015. Ind AS is principles-based, requires fair value measurement for many items, mandates component accounting and ECL provisioning, and aligns Indian financial reporting with international practice."
          }
        },
        {
          "@type": "Question",
          "name": "Which companies are required to follow Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Phase I (FY 2016-17) covers listed companies and unlisted companies with net worth of ₹500 crore or more. Phase II (FY 2017-18) covers listed companies and unlisted companies with net worth of ₹250 crore or more. NBFCs follow separate phases — Phase I (FY 2018-19) for ₹500 crore plus, Phase II (FY 2019-20) for ₹250-500 crore. Holding, subsidiary, joint venture and associate companies of covered entities also apply Ind AS."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company voluntarily adopt Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Rule 4(1)(i) of the Companies (Indian Accounting Standards) Rules 2015 permits any company to voluntarily adopt Ind AS. However, once adopted — voluntarily or mandatorily — a company cannot revert to AS framework under Rule 4(2). Voluntary adoption is typically driven by group reporting requirements, attracting foreign investment, listing aspirations, comparison with global peers, or improved access to international debt markets."
          }
        },
        {
          "@type": "Question",
          "name": "What is the major difference in revenue recognition (AS 9 vs Ind AS 115)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AS 9 uses a transfer-of-risks-and-rewards model where revenue is recognised when significant risks and rewards have transferred to the buyer. Ind AS 115 follows a 5-step control-based model — identify the contract, identify performance obligations, determine transaction price, allocate price to obligations, and recognise revenue when each obligation is satisfied. Ind AS 115 has detailed guidance on variable consideration, contract modifications, principal versus agent assessment and disclosures."
          }
        },
        {
          "@type": "Question",
          "name": "Why does Ind AS 116 capitalise all leases?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 116 (effective 1 April 2019, replacing Ind AS 17) abolished the operating versus finance lease distinction for lessees. All leases over 12 months are recognised on balance sheet as a Right-of-Use (ROU) asset and lease liability. The change increases reported assets, debt and EBITDA. AS 19 retained the old operating-finance distinction — operating leases stayed off-balance-sheet with rent expensed straight-line. This is one of the most impactful AS to Ind AS transition differences."
          }
        },
        {
          "@type": "Question",
          "name": "How does AS 22 differ from Ind AS 12 for income taxes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AS 22 uses the income statement approach — deferred tax is computed on timing differences between accounting and taxable income. Ind AS 12 uses the balance sheet approach — deferred tax is computed on temporary differences between carrying amount and tax base of assets and liabilities. The balance sheet approach captures more items (revaluation reserves, fair value changes, business combinations) and produces different deferred tax than the income statement approach."
          }
        },
        {
          "@type": "Question",
          "name": "How are actuarial gains and losses treated under AS 15 vs Ind AS 19?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under AS 15, actuarial gains and losses on defined benefit obligations are recognised in the profit and loss account as they arise. Ind AS 19 mandates recognition of remeasurements (which include actuarial gains and losses, return on plan assets above interest, and changes in asset ceiling effect) in Other Comprehensive Income (OCI). Once recognised in OCI, remeasurements are not reclassified to P&L in subsequent periods, though may be transferred within equity."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between AS 21 and Ind AS 110 for control?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AS 21 defines control as ownership of more than half of voting power, OR control of board composition. The test is largely quantitative based on voting rights. Ind AS 110 introduces a three-element control test — power over the investee, exposure to variable returns, and ability to use power to affect those returns. Ind AS 110 captures de facto control (substantive rights even with less than 50% voting), structured entities and contractual arrangements that AS 21 may miss."
          }
        },
        {
          "@type": "Question",
          "name": "Are Indian accounting standards converging globally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Ind AS standards are substantially converged with IFRS issued by the IASB, with Indian carve-outs only where necessary for local context. The ICAI Accounting Standards Board, in consultation with NFRA, periodically issues amendments to maintain alignment. Major IFRS updates such as IFRS 17 Insurance Contracts (Ind AS 117 expected) and IFRS S1/S2 Sustainability Standards are under consideration. Globally, more than 140 jurisdictions require or permit IFRS for public companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is Ind AS 101 First-time Adoption?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 101 First-time Adoption of Indian Accounting Standards governs the transition from previous GAAP (AS) to Ind AS. It requires preparation of an opening Ind AS balance sheet at the date of transition (one year before reporting period). The standard provides mandatory exceptions and optional exemptions to simplify retrospective application — for example, business combinations exemption, deemed cost exemption for PPE, and cumulative translation differences exemption. Reconciliations from previous GAAP to Ind AS must be disclosed."
          }
        },
        {
          "@type": "Question",
          "name": "How does GAAP-Ind AS transition affect tax computation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 115JB of the Income Tax Act applies MAT on book profits. The Income Tax Act was amended via Section 115JB(2A) and Rule 40B to address Ind AS adjustments — specifically, transition adjustments routed through Other Equity, OCI items, fair value changes on equity investments, and revaluation of PPE. Some transition impacts are treated as timing differences, others as permanent differences. Companies must compute MAT carefully during and after the year of transition to Ind AS."
          }
        },
        {
          "@type": "Question",
          "name": "What is Schedule III Division II?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III of the Companies Act 2013 prescribes the format of financial statements. Division I applies to companies preparing financial statements under AS framework. Division II applies to companies preparing financial statements under Ind AS framework. Division II reflects Ind AS terminology, classification and presentation requirements — for example, separate presentation of financial assets, FVOCI/FVTPL classifications, statement of changes in equity, and disclosures aligned with Ind AS 1 and Ind AS 107."
          }
        },
        {
          "@type": "Question",
          "name": "How does AS 14 differ from Ind AS 103 for business combinations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AS 14 permits two methods — pooling of interests for amalgamations in nature of merger, and purchase method for nature of purchase. Ind AS 103 prescribes only the acquisition method for all business combinations. Under Ind AS 103, identifiable assets and liabilities are measured at fair value, goodwill is recognised but not amortised — tested for impairment annually. Common control transactions have specific guidance under Ind AS 103 Appendix C."
          }
        }
      ]
    }
    </script>
@endsection

<style>
        :root {
            --primary: #1B4D3E;
            --primary-light: #2A7A5F;
            --primary-dark: #0F2E25;
            --accent: #F59E0B;
            --accent-light: #FCD34D;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #1A1A1A;
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
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 20px; line-height: 1.65; }

        .search-row { margin-bottom: 16px; }
        .search-input { width: 100%; padding: 14px 18px 14px 44px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 15px; color: var(--text); background: var(--surface) url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="%23888" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>') no-repeat 14px center; transition: border-color 0.2s; outline: none; }
        .search-input:focus { border-color: var(--primary); }

        .filter-section { margin-bottom: 18px; }
        .filter-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .filter-chips { display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 12px; }
        .chip { padding: 7px 12px; border: 1.5px solid var(--border); border-radius: 100px; background: var(--card); font-size: 12px; font-weight: 600; color: var(--text-secondary); cursor: pointer; transition: all 0.2s; -webkit-tap-highlight-color: transparent; user-select: none; }
        .chip * { pointer-events: none; }
        .chip:hover { border-color: var(--primary-light); color: var(--primary); }
        .chip.active { background: var(--primary); border-color: var(--primary); color: #fff; }
        .chip.special { background: var(--surface-alt); }
        .chip.special.active { background: var(--accent); border-color: var(--accent); color: var(--primary-dark); }

        .results-bar { display: flex; justify-content: space-between; align-items: center; padding: 12px 16px; background: var(--surface-alt); border-radius: var(--radius); margin-bottom: 16px; font-size: 13px; color: var(--text-secondary); }
        .results-count { font-weight: 600; color: var(--primary); }
        .reset-link { color: var(--text-muted); cursor: pointer; font-size: 12px; text-decoration: underline; -webkit-tap-highlight-color: transparent; }
        .reset-link:hover { color: var(--primary); }

        .matrix-card { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); margin-bottom: 10px; overflow: hidden; transition: box-shadow 0.2s; border-left: 4px solid var(--primary); }
        .matrix-card:hover { box-shadow: var(--shadow-sm); }
        .matrix-card.major { border-left-color: var(--accent); background: linear-gradient(to right, #FFFBEB 0%, var(--card) 60%); }
        .matrix-header { display: flex; justify-content: space-between; align-items: center; padding: 14px 18px; gap: 12px; cursor: pointer; -webkit-tap-highlight-color: transparent; user-select: none; }
        .matrix-header * { pointer-events: none; }
        .matrix-header-left { display: flex; align-items: center; gap: 12px; flex: 1; min-width: 0; flex-wrap: wrap; }
        .matrix-tags { display: flex; gap: 6px; flex-shrink: 0; flex-wrap: wrap; }
        .matrix-tag { font-family: var(--font-mono); font-size: 10px; font-weight: 700; padding: 3px 9px; border-radius: 5px; letter-spacing: 0.3px; white-space: nowrap; }
        .matrix-tag.as { background: var(--surface-alt); color: var(--text-secondary); }
        .matrix-tag.indas { background: var(--primary); color: #fff; }
        .matrix-tag.major { background: var(--accent); color: var(--primary-dark); }
        .matrix-name { font-size: 15px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; flex: 1; min-width: 200px; }
        .matrix-cat { font-size: 11px; color: var(--text-muted); font-family: var(--font-mono); flex-shrink: 0; padding-left: 4px; }
        .matrix-toggle { color: var(--primary); font-size: 22px; line-height: 1; transition: transform 0.25s; padding-left: 4px; flex-shrink: 0; }
        .matrix-card.open .matrix-toggle { transform: rotate(45deg); }
        .matrix-body { max-height: 0; overflow: hidden; transition: max-height 0.5s ease; padding: 0 18px; }
        .matrix-card.open .matrix-body { max-height: 1000px; padding: 0 18px 16px; }
        .matrix-body h4 { font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin: 14px 0 8px; font-family: var(--font-mono); }
        .matrix-body ul { margin: 4px 0 8px 4px; list-style: none; padding-left: 0; }
        .matrix-body li { font-size: 13px; color: var(--text-secondary); padding: 6px 0 6px 22px; line-height: 1.65; position: relative; border-bottom: 1px solid var(--surface-alt); }
        .matrix-body li:last-child { border-bottom: none; }
        .matrix-body li::before { content: "→"; color: var(--primary-light); position: absolute; left: 0; font-weight: 700; }
        .matrix-body li.major-diff::before { content: "★"; color: var(--accent); }
        @media (max-width: 600px) {
            .matrix-cat { display: none; }
            .matrix-name { font-size: 13px; min-width: 0; }
        }

        .empty-state { text-align: center; padding: 40px 20px; color: var(--text-muted); }
        .empty-state h3 { color: var(--text-secondary); font-size: 16px; margin-bottom: 8px; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(42,122,95,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
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
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: var(--primary-dark); font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
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
        }
    </style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#matrix">Matrix</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#applicability">Ind AS Applicability</a>
        <a href="#major-themes">Major Themes</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    AS vs Ind AS Comparison Matrix
</nav>

<header class="hero" id="matrix">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>AS vs Ind AS <span>Comparison Matrix</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Indian companies follow either Accounting Standards (AS) under the Companies (Accounting Standards) Rules 2021 or Indian Accounting Standards (Ind AS) under the Companies (Indian Accounting Standards) Rules 2015. This matrix maps 30 standards across 11 categories with key differences flagged — searchable by standard number or topic, filterable by category, with a major-differences-only toggle. Useful for transition planning, dual reporting, group consolidation, audit preparation and educational reference.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Search the Matrix</h2>
            <p class="calc-intro">Type a standard number ("AS 22", "Ind AS 116", "115"), a topic keyword ("revenue", "leases", "tax"), or filter by category. Toggle the major-differences chip to see only standards with significant divergence between AS and Ind AS.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use the comparison matrix. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="search-row">
                <input type="text" id="searchInput" class="search-input" placeholder="Search by standard number or topic..." autocomplete="off">
            </div>

            <div class="filter-section">
                <div class="filter-label">Filter by Category</div>
                <div class="filter-chips" id="categoryChips">
                    <div class="chip active" data-cat="all">All (30)</div>
                    <div class="chip" data-cat="presentation">Presentation</div>
                    <div class="chip" data-cat="revenue">Revenue</div>
                    <div class="chip" data-cat="assets">Assets & PPE</div>
                    <div class="chip" data-cat="leases">Leases</div>
                    <div class="chip" data-cat="finstruments">Financial Instruments</div>
                    <div class="chip" data-cat="taxes">Income Taxes</div>
                    <div class="chip" data-cat="employees">Employee Benefits</div>
                    <div class="chip" data-cat="group">Group Reporting</div>
                    <div class="chip" data-cat="forex">Foreign Currency</div>
                    <div class="chip" data-cat="provisions">Provisions</div>
                    <div class="chip" data-cat="other">Other</div>
                </div>
                <div class="filter-chips">
                    <div class="chip special" id="majorOnlyChip" data-cat="major">★ Major Differences Only</div>
                </div>
            </div>

            <div class="results-bar">
                <div>Showing <span class="results-count" id="resultsCount">30</span> of 30 standards</div>
                <span class="reset-link" id="resetFilters">Reset filters</span>
            </div>

            <div id="matrixResults"></div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How to Use This Matrix</h2>
            <p>The matrix is designed for quick lookup during audit planning, transition projects, dual GAAP reporting and academic study. Each entry shows the AS-Ind AS pair, the topic, the relevant category, and 3-4 concise differences.</p>

            <h3>Reading a Matrix Card</h3>
            <ul>
                <li><strong>AS tag (grey)</strong> shows the Indian GAAP standard number. "—" means no equivalent AS exists (the standard is Ind AS-only)</li>
                <li><strong>Ind AS tag (green)</strong> shows the Ind AS standard number. All Ind AS-mandated companies follow these</li>
                <li><strong>Major tag (amber)</strong> flags significant divergence — these are the differences with biggest balance sheet, P&L or disclosure impact during transition</li>
                <li><strong>Star (★) bullets</strong> inside the card highlight the most material differences within that pair</li>
                <li><strong>Arrow (→) bullets</strong> are secondary differences — operationally relevant but smaller magnitude</li>
            </ul>

            <h3>Search Tips</h3>
            <ul>
                <li>Type a number alone — "22" matches AS 22 / Ind AS 22 (search is across both)</li>
                <li>Type "Ind AS 116" to find lease-related standards (matches "Ind AS 116" in the standard tag)</li>
                <li>Type a keyword like "revenue", "tax", "lease", "consolidation" to find topical matches</li>
                <li>Combine search and category filter — e.g., search "intangible" with category "Assets & PPE"</li>
                <li>The matrix updates instantly as you type or toggle filters</li>
            </ul>

            <h3>Filter Combinations</h3>
            <p>Filters work together with AND logic. If you select "Revenue" category and "Major Differences Only" — you see only revenue standards with major divergence. If you also type "115" in search, the result narrows further. To start over, click "Reset filters" or the All chip.</p>
        </section>

        <section class="content-section" id="applicability">
            <h2>Ind AS Applicability — Phases & Thresholds</h2>
            <p>Ind AS applicability under Rule 4 of the Companies (Indian Accounting Standards) Rules 2015 follows phased rollout based on listing status, net worth and entity type. Once a company adopts Ind AS — voluntarily or mandatorily — it cannot revert to AS framework.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Phase</th><th>Effective Date</th><th>Coverage</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Phase I (Companies)</strong></td><td>FY 2016-17</td><td>Listed companies; unlisted with net worth ≥ ₹500 crore</td></tr>
                    <tr><td><strong>Phase II (Companies)</strong></td><td>FY 2017-18</td><td>Listed companies; unlisted with net worth ≥ ₹250 crore</td></tr>
                    <tr><td><strong>Phase III (NBFCs)</strong></td><td>FY 2018-19</td><td>NBFCs with net worth ≥ ₹500 crore (Phase I)</td></tr>
                    <tr><td><strong>Phase IV (NBFCs)</strong></td><td>FY 2019-20</td><td>Listed NBFCs; unlisted with net worth ₹250-500 crore (Phase II)</td></tr>
                    <tr><td><strong>Group Companies</strong></td><td>Same as parent</td><td>Holding, subsidiary, JV, associate companies of any covered entity</td></tr>
                    <tr><td><strong>Voluntary Adoption</strong></td><td>Any FY</td><td>Any company under Rule 4(1)(i) — irreversible once adopted</td></tr>
                </tbody>
            </table>

            <h3>Excluded Entities</h3>
            <ul>
                <li>Banks and insurance companies — separate RBI / IRDAI frameworks (Ind AS for banks deferred multiple times)</li>
                <li>Companies on SME Exchange of recognised stock exchange — exempt under Rule 4(1)(iii)(D)</li>
                <li>Companies whose shares are listed only on debt segments — limited application</li>
                <li>Limited Liability Partnerships (LLPs) — outside Companies Act framework, not subject to Ind AS</li>
                <li>Charitable, not-for-profit and Section 8 companies follow AS unless specifically electing Ind AS</li>
            </ul>

            <div class="callout">
                <p><strong>For detailed applicability:</strong> Use the <a href="/tools/ind-as-applicability-checker">Ind AS Applicability Checker</a> tool to determine whether a specific company must apply Ind AS based on entity type, net worth, listing status and group structure. The official notification text is available at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> portal.</p>
            </div>
        </section>

        <section class="content-section" id="major-themes">
            <h2>Major Themes — Where AS and Ind AS Diverge Most</h2>
            <p>Out of 30 standards mapped in this matrix, 12 show major divergence with significant impact on balance sheet, profit and loss or disclosures during transition. These are the areas where a CFO office must invest most effort during Ind AS adoption.</p>

            <h3>Theme 1 — Fair Value Measurement</h3>
            <p>Ind AS introduces fair value as the primary measurement basis for many items where AS used historical cost — investments (Ind AS 109), derivatives, biological assets (Ind AS 41), and acquired assets in business combinations (Ind AS 103). Ind AS 113 provides a comprehensive fair value measurement framework absent from AS.</p>

            <h3>Theme 2 — Time Value of Money</h3>
            <p>Ind AS mandates discounting where the effect of time value of money is material — provisions (Ind AS 37), decommissioning costs (Ind AS 16), employee benefits (Ind AS 19), revenue with significant financing components (Ind AS 115). AS 29 explicitly does not require discounting for most provisions, leading to undervaluation of long-dated obligations under AS.</p>

            <h3>Theme 3 — Off-Balance-Sheet Items Brought On</h3>
            <p>Ind AS 116 brings operating leases on balance sheet as ROU assets and lease liabilities. Ind AS 109 brings expected credit losses on financial assets to balance sheet provisions. Ind AS 110 brings de facto controlled entities into consolidation that AS 21's voting-power test would miss. Net effect: bigger reported balance sheets, often higher debt ratios.</p>

            <h3>Theme 4 — Performance Reporting Format</h3>
            <p>Ind AS 1 requires Statement of Profit and Loss with separate sections for P&L items and Other Comprehensive Income (OCI). OCI captures remeasurements of defined benefit obligations (Ind AS 19), revaluation surplus (Ind AS 16), and FVOCI movements (Ind AS 109). AS framework has no equivalent OCI section — these all flow through P&L or capital reserves.</p>

            <p>For NFRA's analysis of common Ind AS implementation issues, refer to <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> inspection reports and ICAI's Educational Material on each Ind AS published at <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> and <a href="https://kb.icai.org/" target="_blank" rel="noopener">ICAI Knowledge Bank</a>. The international parent standards are at <a href="https://www.ifrs.org/" target="_blank" rel="noopener">IFRS Foundation</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with AS to Ind AS Transition?</h3>
            <p>Patron Accounting LLP supports CFO offices with first-time Ind AS adoption (Ind AS 101), opening balance sheet preparation, transition adjustments, dual GAAP reporting, MAT computation under Section 115JB(2A), and ongoing Ind AS audit support — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20AS%20vs%20Ind%20AS%20Comparison%20Matrix.%20I%20need%20help%20with%20Ind%20AS%20transition.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between AS and Ind AS?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Accounting Standards (AS) are Indian GAAP standards notified under the Companies (Accounting Standards) Rules 2021, applicable to companies not required to follow Ind AS. Indian Accounting Standards (Ind AS) are the IFRS-converged standards notified under the Companies (Indian Accounting Standards) Rules 2015. Ind AS is principles-based, requires fair value measurement for many items, mandates component accounting and ECL provisioning, and aligns Indian financial reporting with international practice.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Which companies are required to follow Ind AS?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Phase I (FY 2016-17) covers listed companies and unlisted companies with net worth of ₹500 crore or more. Phase II (FY 2017-18) covers listed companies and unlisted companies with net worth of ₹250 crore or more. NBFCs follow separate phases — Phase I (FY 2018-19) for ₹500 crore plus, Phase II (FY 2019-20) for ₹250-500 crore. Holding, subsidiary, joint venture and associate companies of covered entities also apply Ind AS.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Can a company voluntarily adopt Ind AS?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Rule 4(1)(i) of the Companies (Indian Accounting Standards) Rules 2015 permits any company to voluntarily adopt Ind AS. However, once adopted — voluntarily or mandatorily — a company cannot revert to AS framework under Rule 4(2). Voluntary adoption is typically driven by group reporting requirements, attracting foreign investment, listing aspirations, comparison with global peers, or improved access to international debt markets.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the major difference in revenue recognition (AS 9 vs Ind AS 115)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">AS 9 uses a transfer-of-risks-and-rewards model where revenue is recognised when significant risks and rewards have transferred to the buyer. Ind AS 115 follows a 5-step control-based model — identify the contract, identify performance obligations, determine transaction price, allocate price to obligations, and recognise revenue when each obligation is satisfied. Ind AS 115 has detailed guidance on variable consideration, contract modifications, principal versus agent assessment and disclosures.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why does Ind AS 116 capitalise all leases?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 116 (effective 1 April 2019, replacing Ind AS 17) abolished the operating versus finance lease distinction for lessees. All leases over 12 months are recognised on balance sheet as a Right-of-Use (ROU) asset and lease liability. The change increases reported assets, debt and EBITDA. AS 19 retained the old operating-finance distinction — operating leases stayed off-balance-sheet with rent expensed straight-line. This is one of the most impactful AS to Ind AS transition differences.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does AS 22 differ from Ind AS 12 for income taxes?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">AS 22 uses the income statement approach — deferred tax is computed on timing differences between accounting and taxable income. Ind AS 12 uses the balance sheet approach — deferred tax is computed on temporary differences between carrying amount and tax base of assets and liabilities. The balance sheet approach captures more items (revaluation reserves, fair value changes, business combinations) and produces different deferred tax than the income statement approach.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How are actuarial gains and losses treated under AS 15 vs Ind AS 19?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under AS 15, actuarial gains and losses on defined benefit obligations are recognised in the profit and loss account as they arise. Ind AS 19 mandates recognition of remeasurements (which include actuarial gains and losses, return on plan assets above interest, and changes in asset ceiling effect) in Other Comprehensive Income (OCI). Once recognised in OCI, remeasurements are not reclassified to P&L in subsequent periods, though may be transferred within equity.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between AS 21 and Ind AS 110 for control?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">AS 21 defines control as ownership of more than half of voting power, OR control of board composition. The test is largely quantitative based on voting rights. Ind AS 110 introduces a three-element control test — power over the investee, exposure to variable returns, and ability to use power to affect those returns. Ind AS 110 captures de facto control (substantive rights even with less than 50% voting), structured entities and contractual arrangements that AS 21 may miss.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Are Indian accounting standards converging globally?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Ind AS standards are substantially converged with IFRS issued by the IASB, with Indian carve-outs only where necessary for local context. The ICAI Accounting Standards Board, in consultation with NFRA, periodically issues amendments to maintain alignment. Major IFRS updates such as IFRS 17 Insurance Contracts (Ind AS 117 expected) and IFRS S1/S2 Sustainability Standards are under consideration. Globally, more than 140 jurisdictions require or permit IFRS for public companies.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Ind AS 101 First-time Adoption?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 101 First-time Adoption of Indian Accounting Standards governs the transition from previous GAAP (AS) to Ind AS. It requires preparation of an opening Ind AS balance sheet at the date of transition (one year before reporting period). The standard provides mandatory exceptions and optional exemptions to simplify retrospective application — for example, business combinations exemption, deemed cost exemption for PPE, and cumulative translation differences exemption. Reconciliations from previous GAAP to Ind AS must be disclosed.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does GAAP-Ind AS transition affect tax computation?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 115JB of the Income Tax Act applies MAT on book profits. The Income Tax Act was amended via Section 115JB(2A) and Rule 40B to address Ind AS adjustments — specifically, transition adjustments routed through Other Equity, OCI items, fair value changes on equity investments, and revaluation of PPE. Some transition impacts are treated as timing differences, others as permanent differences. Companies must compute MAT carefully during and after the year of transition to Ind AS.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Schedule III Division II?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Schedule III of the Companies Act 2013 prescribes the format of financial statements. Division I applies to companies preparing financial statements under AS framework. Division II applies to companies preparing financial statements under Ind AS framework. Division II reflects Ind AS terminology, classification and presentation requirements — for example, separate presentation of financial assets, FVOCI/FVTPL classifications, statement of changes in equity, and disclosures aligned with Ind AS 1 and Ind AS 107.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does AS 14 differ from Ind AS 103 for business combinations?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">AS 14 permits two methods — pooling of interests for amalgamations in nature of merger, and purchase method for nature of purchase. Ind AS 103 prescribes only the acquisition method for all business combinations. Under Ind AS 103, identifiable assets and liabilities are measured at fair value, goodwill is recognised but not amortised — tested for impairment annually. Common control transactions have specific guidance under Ind AS 103 Appendix C.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Ind AS Transition Support</h3>
            <p>First-time adoption (Ind AS 101), opening balance sheet, transition adjustments, MAT computation — fixed-fee.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20AS%20vs%20Ind%20AS%20Comparison%20Matrix.%20I%20need%20help%20with%20Ind%20AS%20transition.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation<span class="arrow">→</span></a>
            <a href="/business-set-up-services" class="sidebar-link">Business Setup<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/ecl-calculator-ind-as-109" class="sidebar-link">ECL Calculator (Ind AS 109)<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Calculator (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/ifc-testing-checklist" class="sidebar-link">IFC Testing Checklist<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
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

    // ===== MASTER DATA — 30 STANDARDS =====
    const STANDARDS = [
        // Presentation & Disclosure
        {as: 'AS 1', indas: 'Ind AS 1', name: 'Presentation of Financial Statements', cat: 'presentation', major: true,
         diff: [
            {major: true, text: 'AS 1 only covers disclosure of accounting policies; Ind AS 1 governs complete presentation including structure, minimum line items and statement of changes in equity'},
            {major: true, text: 'Ind AS 1 mandates Statement of Profit & Loss with separate Other Comprehensive Income (OCI) section — concept absent in AS framework'},
            {major: false, text: 'Ind AS 1 requires opening balance sheet on first-time adoption; AS framework presents only current and previous year'},
            {major: false, text: 'Ind AS 1 prescribes specific minimum line items on face of FS; AS framework follows Schedule III Division I formats'}
         ]},
        {as: 'AS 3', indas: 'Ind AS 7', name: 'Cash Flow Statements', cat: 'presentation', major: false,
         diff: [
            {major: false, text: 'Both standards permit direct or indirect method for operating activities — largely converged'},
            {major: false, text: 'Ind AS 7 explicitly allows bank overdrafts repayable on demand to be treated as cash equivalents if integral to cash management; AS 3 silent'},
            {major: false, text: 'Ind AS 7 requires disclosure of changes in liabilities arising from financing activities (debt reconciliation) — added by IASB amendment'},
            {major: false, text: 'Ind AS 7 has more detailed guidance on classification of interest, dividends and taxes paid in cash flow categories'}
         ]},
        {as: 'AS 4', indas: 'Ind AS 10', name: 'Events After Reporting Period', cat: 'presentation', major: true,
         diff: [
            {major: true, text: 'AS 4 requires proposed dividends to be recognised as liability at year-end; Ind AS 10 PROHIBITS this — proposed dividends are disclosed only'},
            {major: false, text: 'Both distinguish adjusting events (existed at year-end) and non-adjusting events (arose after) — concepts converged'},
            {major: false, text: 'Ind AS 10 prohibits accrual of dividends declared after reporting date even for cumulative preference shares'},
            {major: false, text: 'Both require disclosure of date when financial statements were authorised for issue'}
         ]},
        {as: 'AS 5', indas: 'Ind AS 8', name: 'Accounting Policies, Changes in Estimates & Errors', cat: 'presentation', major: false,
         diff: [
            {major: false, text: 'Largely converged — both require retrospective application of policy changes and prospective for estimate changes'},
            {major: false, text: 'AS 5 covers prior period items and extraordinary items; Ind AS 8 prohibits "extraordinary items" presentation'},
            {major: false, text: 'Ind AS 8 has more detailed guidance on distinguishing between policy change and estimate change'},
            {major: false, text: 'Both standards mandate restatement of comparative figures for material errors'}
         ]},
        {as: 'AS 25', indas: 'Ind AS 34', name: 'Interim Financial Reporting', cat: 'presentation', major: false,
         diff: [
            {major: false, text: 'Largely converged — both require condensed format with selected explanatory notes for interim periods'},
            {major: false, text: 'Ind AS 34 has detailed guidance on materiality assessment within interim periods'},
            {major: false, text: 'Both apply same accounting policies as annual financial statements'}
         ]},
        // Revenue
        {as: 'AS 9', indas: 'Ind AS 115', name: 'Revenue from Contracts with Customers', cat: 'revenue', major: true,
         diff: [
            {major: true, text: 'AS 9: Risks-and-rewards transfer model. Ind AS 115: 5-step control-based model — identify contract, performance obligations, transaction price, allocate, recognise'},
            {major: true, text: 'Ind AS 115 has detailed guidance on variable consideration, refunds, warranties and significant financing components — largely absent in AS 9'},
            {major: true, text: 'Ind AS 115 requires explicit principal vs agent assessment for revenue recognition; AS 9 silent'},
            {major: false, text: 'Ind AS 115 mandates extensive contract disclosures including disaggregated revenue, contract balances, and remaining performance obligations'}
         ]},
        {as: 'AS 7', indas: 'Ind AS 115', name: 'Construction Contracts (subsumed)', cat: 'revenue', major: true,
         diff: [
            {major: true, text: 'AS 7 has dedicated standard for construction contracts using percentage-of-completion (POC) method'},
            {major: true, text: 'Ind AS 11 (Construction Contracts) was withdrawn — construction contracts subsumed under Ind AS 115 with new performance obligation framework'},
            {major: false, text: 'POC method continues under Ind AS 115 where performance obligation is satisfied over time and progress can be measured'},
            {major: false, text: 'Ind AS 115 requires separate accounting for distinct goods/services within a single construction contract'}
         ]},
        {as: 'AS 12', indas: 'Ind AS 20', name: 'Government Grants', cat: 'revenue', major: true,
         diff: [
            {major: true, text: 'AS 12: Capital grants can be credited to capital reserve OR deducted from asset cost. Ind AS 20: Capital reserve approach NOT permitted'},
            {major: false, text: 'Ind AS 20 permits two methods only — gross presentation (deferred income) or net presentation (deduction from asset cost)'},
            {major: false, text: 'Both standards recognise revenue grants in P&L over the period to which the related cost is recognised'},
            {major: false, text: 'Ind AS 20 has specific guidance on non-monetary government grants and forgivable loans'}
         ]},
        // Assets & PPE
        {as: 'AS 2', indas: 'Ind AS 2', name: 'Inventories', cat: 'assets', major: false,
         diff: [
            {major: false, text: 'Largely converged — both prohibit LIFO; permit FIFO and Weighted Average; require lower of cost and Net Realisable Value'},
            {major: false, text: 'Ind AS 2 explicitly excludes producers of agricultural and forest products at NRV (covered under Ind AS 41 Agriculture)'},
            {major: false, text: 'Ind AS 2 has more detailed guidance on cost of conversion, abnormal costs and joint product costing'},
            {major: false, text: 'Both apply specific identification for non-fungible inventory items'}
         ]},
        {as: 'AS 10', indas: 'Ind AS 16', name: 'Property, Plant and Equipment', cat: 'assets', major: true,
         diff: [
            {major: true, text: 'Ind AS 16 MANDATES component accounting for significant parts; AS 10 (revised) recommends but does not mandate'},
            {major: true, text: 'Ind AS 16 requires capitalisation of decommissioning provisions in asset cost at present value; AS 10 silent on this'},
            {major: false, text: 'Both permit cost or revaluation models; Ind AS 16 requires regular revaluation if model is chosen, AS 10 has similar requirement'},
            {major: false, text: 'Both apply Schedule II useful lives for depreciation under Companies Act'}
         ]},
        {as: 'AS 26', indas: 'Ind AS 38', name: 'Intangible Assets', cat: 'assets', major: true,
         diff: [
            {major: true, text: 'AS 26: Intangibles amortised over useful life with default 10-year cap if life is indeterminate. Ind AS 38: Indefinite-life intangibles NOT amortised — tested for impairment annually'},
            {major: true, text: 'Ind AS 38 prohibits capitalisation of internally-generated brands, mastheads, customer lists; AS 26 has similar restriction'},
            {major: false, text: 'Both permit revaluation model only if active market exists for the intangible asset (rare)'},
            {major: false, text: 'Ind AS 38 distinguishes research phase (expense) and development phase (capitalise if criteria met) — converged with AS 26'}
         ]},
        {as: 'AS 28', indas: 'Ind AS 36', name: 'Impairment of Assets', cat: 'assets', major: false,
         diff: [
            {major: false, text: 'Largely converged — both compare carrying amount with recoverable amount (higher of FV less costs of disposal and value in use)'},
            {major: false, text: 'Ind AS 36 has more detailed guidance on cash-generating units (CGUs), goodwill allocation and impairment indicators'},
            {major: false, text: 'Both prohibit reversal of impairment for goodwill in subsequent periods'},
            {major: false, text: 'Ind AS 36 mandates annual impairment test for goodwill and indefinite-life intangibles regardless of indicators'}
         ]},
        {as: 'AS 13', indas: 'Ind AS 109/28', name: 'Investments', cat: 'assets', major: true,
         diff: [
            {major: true, text: 'AS 13: Long-term investments at cost less impairment; current at lower of cost or fair value. Ind AS 109: Three classifications — amortised cost, FVOCI, FVTPL — based on business model and SPPI test'},
            {major: true, text: 'Ind AS 109 requires fair value measurement for most equity investments; AS 13 uses cost model'},
            {major: false, text: 'Investments in associates move from AS 13 (cost in standalone, equity in CFS) to Ind AS 28 (equity method in CFS, cost or equity in standalone)'},
            {major: false, text: 'Ind AS 109 introduces ECL framework for debt instrument investments at amortised cost or FVOCI'}
         ]},
        // Leases
        {as: 'AS 19', indas: 'Ind AS 116', name: 'Leases', cat: 'leases', major: true,
         diff: [
            {major: true, text: 'AS 19: Operating vs Finance lease classification. Operating leases stay off-balance-sheet — rent expensed straight-line'},
            {major: true, text: 'Ind AS 116: Single lessee model — ALL leases over 12 months recognised as Right-of-Use (ROU) asset and lease liability on balance sheet'},
            {major: true, text: 'Ind AS 116 increases reported assets, debt and EBITDA; produces front-loaded P&L expense (depreciation + interest)'},
            {major: false, text: 'Lessor accounting is largely retained — operating vs finance classification continues with enhanced disclosures'}
         ]},
        // Financial Instruments
        {as: 'AS 30/31/32', indas: 'Ind AS 32/107/109', name: 'Financial Instruments — Recognition, Disclosures, Measurement', cat: 'finstruments', major: true,
         diff: [
            {major: true, text: 'AS 30/31/32 were withdrawn — never made fully mandatory. Ind AS 32, 107, 109 are comprehensive standards aligned with IFRS 9'},
            {major: true, text: 'Ind AS 109 introduces Expected Credit Loss (ECL) model replacing incurred loss; mandatory three-stage classification'},
            {major: true, text: 'Ind AS 109 allows hedge accounting based on risk management objective (more principles-based than IAS 39)'},
            {major: false, text: 'Ind AS 32 governs distinction between liability and equity classification — significant for compulsorily convertible instruments'}
         ]},
        // Income Taxes
        {as: 'AS 22', indas: 'Ind AS 12', name: 'Income Taxes', cat: 'taxes', major: true,
         diff: [
            {major: true, text: 'AS 22: Income statement approach — deferred tax on TIMING differences between accounting and taxable profit'},
            {major: true, text: 'Ind AS 12: Balance sheet approach — deferred tax on TEMPORARY differences between carrying amount and tax base'},
            {major: true, text: 'Balance sheet approach captures more items — revaluation reserves, fair value changes, business combination differences, OCI items'},
            {major: false, text: 'Both apply substantively enacted tax rates and require recognition of deferred tax assets only where realisation is probable'}
         ]},
        // Employee Benefits
        {as: 'AS 15', indas: 'Ind AS 19', name: 'Employee Benefits', cat: 'employees', major: true,
         diff: [
            {major: true, text: 'AS 15: Actuarial gains and losses recognised in P&L as they arise. Ind AS 19: Remeasurements (incl. actuarial gains/losses) recognised in OCI — never reclassified to P&L'},
            {major: true, text: 'Ind AS 19 introduces "net interest" on net defined benefit liability/asset; AS 15 uses separate expected return on plan assets concept'},
            {major: false, text: 'Both require projected unit credit method for defined benefit obligations and actuarial valuation'},
            {major: false, text: 'Ind AS 19 has more detailed guidance on past service costs, settlements and asset ceiling effect'}
         ]},
        // Group Reporting
        {as: 'AS 21', indas: 'Ind AS 110', name: 'Consolidated Financial Statements', cat: 'group', major: true,
         diff: [
            {major: true, text: 'AS 21: Control = ownership of more than 50% voting power OR control of board composition (largely quantitative)'},
            {major: true, text: 'Ind AS 110: Three-element control test — power, exposure to variable returns, ability to use power to affect returns. Captures de facto control'},
            {major: true, text: 'Ind AS 110 brings structured entities (formerly VIEs) and contractually controlled entities into consolidation that AS 21 may miss'},
            {major: false, text: 'Both require uniform accounting policies across group entities for consolidation'}
         ]},
        {as: 'AS 23', indas: 'Ind AS 28', name: 'Investments in Associates and Joint Ventures', cat: 'group', major: false,
         diff: [
            {major: false, text: 'Both require equity method for associates in consolidated financial statements'},
            {major: false, text: 'Ind AS 28 also covers joint ventures — equity method mandatory; AS 23 covered associates only'},
            {major: false, text: 'Significant influence: 20% threshold rebuttable presumption in both standards'},
            {major: false, text: 'Ind AS 28 has more detailed guidance on impairment, fresh start and elimination of intra-group transactions'}
         ]},
        {as: 'AS 27', indas: 'Ind AS 111', name: 'Joint Arrangements', cat: 'group', major: true,
         diff: [
            {major: true, text: 'AS 27: Proportionate consolidation method permitted for jointly controlled entities. Ind AS 111: Proportionate consolidation NOT permitted for joint ventures'},
            {major: true, text: 'Ind AS 111 distinguishes joint operations (proportionate consolidation of assets/liabilities/expenses) from joint ventures (equity method only)'},
            {major: false, text: 'Classification under Ind AS 111 depends on rights and obligations, not legal structure'},
            {major: false, text: 'Ind AS 111 has detailed guidance on "structured joint arrangements" through separate vehicles'}
         ]},
        {as: 'AS 14', indas: 'Ind AS 103', name: 'Business Combinations', cat: 'group', major: true,
         diff: [
            {major: true, text: 'AS 14: Pooling of interests OR purchase method based on amalgamation type (merger vs purchase)'},
            {major: true, text: 'Ind AS 103: ONLY acquisition method (similar to purchase) for all business combinations meeting the definition'},
            {major: true, text: 'Ind AS 103: Goodwill recognised but NOT amortised — tested for impairment annually. AS 14: Goodwill amortised typically over 5 years'},
            {major: false, text: 'Common control transactions — Ind AS 103 Appendix C provides specific guidance using pooling-style accounting'}
         ]},
        {as: 'AS 17', indas: 'Ind AS 108', name: 'Operating Segments', cat: 'group', major: true,
         diff: [
            {major: true, text: 'AS 17: Risk-and-rewards approach — segment based on dominant source of risks (business or geographical)'},
            {major: true, text: 'Ind AS 108: Management approach — segments based on internal reports reviewed by Chief Operating Decision Maker (CODM)'},
            {major: false, text: 'Ind AS 108 typically results in different segment groupings than AS 17 — aligned with how management runs the business'},
            {major: false, text: 'Both require quantitative thresholds (10% test) for reportable segments'}
         ]},
        // Foreign Currency
        {as: 'AS 11', indas: 'Ind AS 21', name: 'Effects of Changes in Foreign Exchange Rates', cat: 'forex', major: true,
         diff: [
            {major: true, text: 'AS 11 provides transitional option to capitalise forex differences on long-term FA loans (Para 46/46A); Ind AS 21 does NOT permit this'},
            {major: true, text: 'Ind AS 21 introduces functional currency concept — currency of primary economic environment in which entity operates'},
            {major: false, text: 'Both treat monetary items at closing rate and non-monetary items at historical rate (cost) or fair value rate'},
            {major: false, text: 'Translation of foreign operations — cumulative translation differences in OCI under both, but Ind AS 21 has more detail'}
         ]},
        {as: 'AS 16', indas: 'Ind AS 23', name: 'Borrowing Costs', cat: 'forex', major: false,
         diff: [
            {major: false, text: 'Both standards mandate capitalisation of borrowing costs directly attributable to acquisition, construction or production of qualifying assets'},
            {major: false, text: 'Ind AS 23 has more detailed guidance on capitalisation rate computation for general borrowings'},
            {major: false, text: 'Both define qualifying asset as one taking substantial period of time to get ready for intended use or sale'},
            {major: false, text: 'Investment income from temporary investment of specifically-borrowed funds reduces capitalisation under both'}
         ]},
        // Provisions
        {as: 'AS 29', indas: 'Ind AS 37', name: 'Provisions, Contingent Liabilities and Assets', cat: 'provisions', major: true,
         diff: [
            {major: true, text: 'AS 29: Discounting NOT permitted for most provisions. Ind AS 37: Discounting REQUIRED if effect of time value of money is material'},
            {major: false, text: 'Both apply best estimate of expenditure required to settle the obligation at reporting date'},
            {major: false, text: 'Both prohibit recognition of contingent liabilities — only disclosed unless probability is remote'},
            {major: false, text: 'Both prohibit recognition of contingent assets unless realisation is virtually certain'}
         ]},
        // Other
        {as: 'AS 18', indas: 'Ind AS 24', name: 'Related Party Disclosures', cat: 'other', major: false,
         diff: [
            {major: false, text: 'Largely converged — both require disclosure of related party relationships and transactions'},
            {major: false, text: 'Ind AS 24 has wider scope — includes commitments and government-related entities; AS 18 silent on these'},
            {major: false, text: 'Both apply substance over form in identifying related parties'},
            {major: false, text: 'Ind AS 24 requires disclosure of key management personnel compensation in detail'}
         ]},
        {as: 'AS 20', indas: 'Ind AS 33', name: 'Earnings Per Share', cat: 'other', major: false,
         diff: [
            {major: false, text: 'Largely converged — both compute basic and diluted EPS using weighted average shares outstanding'},
            {major: false, text: 'Ind AS 33 has more detailed guidance on dilutive instruments — convertibles, options, warrants, contingently issuable shares'},
            {major: false, text: 'Both require restatement of EPS for bonus issues, share splits and rights issues'},
            {major: false, text: 'Ind AS 33 requires presentation of EPS for both continuing and discontinued operations'}
         ]},
        {as: 'AS 24', indas: 'Ind AS 105', name: 'Discontinuing Operations / Held-for-Sale', cat: 'other', major: true,
         diff: [
            {major: true, text: 'AS 24: Disclosure-based — defines discontinuing operations, requires P&L disclosures. Ind AS 105: Measurement-based — Held-for-Sale criteria with separate measurement at lower of carrying amount and FV less costs to sell'},
            {major: true, text: 'Ind AS 105 introduces "Disposal Group" concept — assets and liabilities sold together as a unit'},
            {major: false, text: 'Both require separate presentation in financial statements'},
            {major: false, text: 'Ind AS 105 prohibits depreciation of held-for-sale assets from classification date'}
         ]},
        {as: '—', indas: 'Ind AS 101', name: 'First-time Adoption of Indian Accounting Standards', cat: 'other', major: true,
         diff: [
            {major: true, text: 'No AS equivalent — Ind AS 101 specifically governs the AS-to-Ind AS transition'},
            {major: true, text: 'Requires opening Ind AS balance sheet at date of transition (one year before reporting period)'},
            {major: false, text: 'Provides mandatory exceptions and optional exemptions to ease retrospective application'},
            {major: false, text: 'Common exemptions used: deemed cost for PPE, business combinations exemption, cumulative translation differences'}
         ]},
        {as: '—', indas: 'Ind AS 113', name: 'Fair Value Measurement', cat: 'other', major: true,
         diff: [
            {major: true, text: 'No AS equivalent — Ind AS 113 provides comprehensive fair value measurement framework absent in AS framework'},
            {major: true, text: 'Defines fair value as exit price; introduces three-level fair value hierarchy (Level 1 quoted, Level 2 observable, Level 3 unobservable inputs)'},
            {major: false, text: 'Applies only when other Ind AS require or permit fair value measurement — does not introduce new fair value requirements'},
            {major: false, text: 'Requires extensive disclosures on valuation techniques, inputs and sensitivity for Level 3 measurements'}
         ]}
    ];

    const CAT_LABELS = {
        presentation: 'Presentation',
        revenue: 'Revenue',
        assets: 'Assets & PPE',
        leases: 'Leases',
        finstruments: 'Financial Instruments',
        taxes: 'Income Taxes',
        employees: 'Employee Benefits',
        group: 'Group Reporting',
        forex: 'Foreign Currency',
        provisions: 'Provisions',
        other: 'Other'
    };

    // ===== STATE =====
    let state = {
        search: '',
        category: 'all',
        majorOnly: false
    };

    // ===== FILTERING =====
    function filterStandards() {
        return STANDARDS.filter(function(s) {
            // Category filter
            if (state.category !== 'all' && s.cat !== state.category) return false;
            // Major-only filter
            if (state.majorOnly && !s.major) return false;
            // Search filter
            if (state.search) {
                const q = state.search.toLowerCase();
                const haystack = (s.as + ' ' + s.indas + ' ' + s.name + ' ' + (CAT_LABELS[s.cat] || '')).toLowerCase();
                if (!haystack.includes(q)) return false;
            }
            return true;
        });
    }

    // ===== RENDER =====
    function renderResults() {
        const results = filterStandards();
        const container = document.getElementById('matrixResults');
        const countEl = document.getElementById('resultsCount');

        countEl.textContent = results.length;

        if (results.length === 0) {
            container.innerHTML = '<div class="empty-state"><h3>No standards match your filters</h3><p>Try a different search term or click Reset filters to see all 30 standards.</p></div>';
            return;
        }

        let html = '';
        results.forEach(function(s, idx) {
            const cardClass = 'matrix-card' + (s.major ? ' major' : '');
            html += '<div class="' + cardClass + '" data-idx="' + idx + '">';
            html += '<div class="matrix-header" tabindex="0" role="button" aria-expanded="false">';
            html += '<div class="matrix-header-left">';
            html += '<div class="matrix-tags">';
            html += '<span class="matrix-tag as">' + escapeHtml(s.as) + '</span>';
            html += '<span class="matrix-tag indas">' + escapeHtml(s.indas) + '</span>';
            if (s.major) html += '<span class="matrix-tag major">Major</span>';
            html += '</div>';
            html += '<span class="matrix-name">' + escapeHtml(s.name) + '</span>';
            html += '</div>';
            html += '<span class="matrix-cat">' + escapeHtml(CAT_LABELS[s.cat] || s.cat) + '</span>';
            html += '<span class="matrix-toggle">+</span>';
            html += '</div>';
            html += '<div class="matrix-body">';
            html += '<h4>Key Differences</h4>';
            html += '<ul>';
            s.diff.forEach(function(d) {
                const liClass = d.major ? 'major-diff' : '';
                html += '<li class="' + liClass + '">' + escapeHtml(d.text) + '</li>';
            });
            html += '</ul>';
            html += '</div></div>';
        });
        container.innerHTML = html;

        // Wire up card toggles
        container.querySelectorAll('.matrix-header').forEach(function(h) {
            h.addEventListener('click', function() {
                h.parentElement.classList.toggle('open');
                h.setAttribute('aria-expanded', h.parentElement.classList.contains('open') ? 'true' : 'false');
            });
            h.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    h.click();
                }
            });
        });
    }

    function escapeHtml(text) {
        if (!text) return '';
        return String(text)
            .replace(/&/g, '&')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('searchInput').addEventListener('input', function(e) {
        state.search = e.target.value.trim();
        renderResults();
    });

    document.getElementById('categoryChips').addEventListener('click', function(e) {
        const chip = e.target.closest('.chip');
        if (!chip) return;
        document.querySelectorAll('#categoryChips .chip').forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        state.category = chip.dataset.cat;
        renderResults();
    });

    document.getElementById('majorOnlyChip').addEventListener('click', function(e) {
        const chip = e.target.closest('.chip');
        chip.classList.toggle('active');
        state.majorOnly = chip.classList.contains('active');
        renderResults();
    });

    document.getElementById('resetFilters').addEventListener('click', function() {
        state = {search: '', category: 'all', majorOnly: false};
        document.getElementById('searchInput').value = '';
        document.querySelectorAll('#categoryChips .chip').forEach(function(c) {
            c.classList.toggle('active', c.dataset.cat === 'all');
        });
        document.getElementById('majorOnlyChip').classList.remove('active');
        renderResults();
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

    // Initial render
    renderResults();
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
