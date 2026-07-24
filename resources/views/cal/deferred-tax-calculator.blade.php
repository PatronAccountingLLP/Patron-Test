@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Deferred Tax Calculator | DTA/DTL AS 22 & Ind AS 12</title>
    <meta name="description" content="Deferred tax calculator: compute DTA & DTL under AS 22 / Ind AS 12 with FY 2025-26 corporate rates, surcharge & cess, plus journal entries. Free CA tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/deferred-tax-calculator/">
    <meta property="og:title" content="Deferred Tax Calculator (DTA/DTL) — AS 22 & Ind AS 12 — FY 2025-26">
    <meta property="og:description" content="Calculate deferred tax assets and liabilities for Indian companies. Auto-effective rate (base + surcharge + cess), multi-line timing differences, journal entries.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/deferred-tax-calculator">
    <meta property="og:image" content="/tools/og/deferred-tax-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Deferred Tax Calculator (DTA/DTL) — AS 22 & Ind AS 12 — FY 2025-26">
    <meta name="twitter:description" content="Auto-effective rate, multi-line timing differences, journal entries — for Indian companies under AS 22 / Ind AS 12.">
    <meta name="twitter:image" content="/tools/og/deferred-tax-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Deferred Tax Calculator (DTA/DTL)",
      "description": "Deferred Tax Calculator computes Deferred Tax Asset (DTA) and Deferred Tax Liability (DTL) for Indian companies under Accounting Standard 22 (Indian GAAP) and Indian Accounting Standard 12 (Ind AS). The tool supports six tax regimes for FY 2025-26 / AY 2026-27 — domestic company at 25%, domestic company at 30%, Section 115BAA at 22%, Section 115BAB at 15%, foreign company at 35%, and custom rate — with automatic surcharge (0%/7%/12% domestic, 0%/2%/5% foreign, flat 10% for 115BAA/115BAB) and 4% Health and Education Cess to compute the effective tax rate. Timing or temporary differences supported include depreciation differences (Companies Act vs Income Tax Act), Section 43B disallowances (PF, ESI, GST, bonus, leave encashment), provision for doubtful debts, provision for gratuity, provision for leave encashment, provision for warranty, brought-forward business losses and unabsorbed depreciation, plus three custom line items. Output includes total DTA, total DTL, net position, detailed breakdown table and journal entry guidance.",
      "url": "/tools/deferred-tax-calculator",
      "applicationCategory": "FinanceApplication",
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
        {"@type": "ListItem", "position": 3, "name": "Deferred Tax Calculator", "item": "/tools/deferred-tax-calculator"}
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
          "name": "What is deferred tax — DTA and DTL?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Deferred tax is the tax effect of timing or temporary differences between book profit (per Companies Act and accounting standards) and taxable profit (per Income Tax Act, 1961). A Deferred Tax Asset arises when book profit is lower than taxable profit currently and tax savings will accrue in future years. A Deferred Tax Liability arises when book profit is higher than taxable profit currently and tax will be payable in future years when the difference reverses."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between AS 22 and Ind AS 12?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AS 22 issued by ICAI follows the income statement approach and recognises deferred tax on timing differences between book profit and taxable profit. Ind AS 12, which is converged with IAS 12, follows the balance sheet approach and recognises deferred tax on temporary differences between the carrying amount of an asset or liability and its tax base. Both methods produce similar net deferred tax balances but presentation and recognition triggers differ."
          }
        },
        {
          "@type": "Question",
          "name": "What are the most common DTA-creating items in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The most common DTA items are Section 43B disallowances (PF, ESI, GST, bonus and leave encashment paid after the due date), provision for doubtful debts (allowed only on actual write-off), provision for gratuity and leave encashment (allowed on actual payment basis), provision for warranty, brought-forward business losses and unabsorbed depreciation, voluntary retirement scheme expenses under Section 35DDA, and certain preliminary expenses spread over five years under Section 35D."
          }
        },
        {
          "@type": "Question",
          "name": "What are the most common DTL-creating items in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The single largest source of DTL in India is the depreciation difference: Income Tax Act allows accelerated depreciation on the written-down value method while companies typically charge straight-line method depreciation in books, creating a DTL in early years of asset life that reverses later. Other DTL items include capitalisation differences for borrowing costs, deferred revenue expenditure written off over a longer period in books, and revaluation gains taxed only on disposal."
          }
        },
        {
          "@type": "Question",
          "name": "What is virtual certainty for DTA recognition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under AS 22, DTA on unabsorbed depreciation and brought-forward business losses can be recognised only when there is virtual certainty supported by convincing evidence that sufficient future taxable income will be available against which the loss can be set off. Convincing evidence means binding export orders, signed sales contracts or robust forecasts based on confirmed business pipeline. General optimism or projections without supporting documents do not meet the virtual certainty test."
          }
        },
        {
          "@type": "Question",
          "name": "Which tax rate should be used to compute DTA and DTL?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under AS 22 and Ind AS 12, deferred tax assets and liabilities are measured using tax rates and laws that have been enacted or substantively enacted by the balance sheet date and that are expected to apply in the period when the asset is realised or liability is settled. The applicable rate must include base rate plus surcharge plus 4% Health and Education Cess to reflect the actual cash tax outflow on reversal."
          }
        },
        {
          "@type": "Question",
          "name": "Are surcharge and cess included in the deferred tax rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The effective tax rate for deferred tax computation must include surcharge and Health and Education Cess because these are integral components of the income tax payable on reversal of the timing difference. For a Section 115BAA company, the rate is 22% plus 10% surcharge plus 4% cess equalling 25.168%. For a domestic company at 30% with income above ₹10 crore, the rate is 30% plus 12% surcharge plus 4% cess equalling 34.944%."
          }
        },
        {
          "@type": "Question",
          "name": "Is MAT credit treated as a Deferred Tax Asset?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MAT credit entitlement under Section 115JAA is recognised as a separate asset on the balance sheet, not as Deferred Tax Asset. Under AS 22, MAT credit does not arise from timing differences and is therefore outside the deferred tax framework. Under Ind AS 12, MAT credit is presented separately under Other Non-current Assets when there is convincing evidence of utilisation within the 15-year carry-forward window allowed under Section 115JAA."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between permanent and timing differences?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Permanent differences are items that affect either book profit or taxable profit but never both — examples include disallowed donations, fines and penalties, expenses on exempt income, and dividends from domestic companies pre-Finance Act 2020. They never reverse, so no deferred tax is created on them. Timing or temporary differences are items recognised in different periods between books and tax — they reverse over time and therefore give rise to DTA or DTL under AS 22 and Ind AS 12."
          }
        },
        {
          "@type": "Question",
          "name": "Where are DTA and DTL disclosed on the balance sheet?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under AS 22, the net Deferred Tax Asset is shown after the head Investments on the asset side, and net Deferred Tax Liability is shown after the head Unsecured Loans on the liability side. Under Ind AS 12 and Schedule III Division II of the Companies Act, DTA and DTL are always classified as non-current and presented separately under Non-Current Assets and Non-Current Liabilities respectively, with set-off allowed only when there is a legally enforceable right."
          }
        },
        {
          "@type": "Question",
          "name": "What is the journal entry for creating DTA and DTL?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To create a Deferred Tax Asset: Debit Deferred Tax Asset (balance sheet) and Credit Deferred Tax Expense or Profit and Loss Account, with the amount equal to the deductible timing difference multiplied by the effective tax rate. To create a Deferred Tax Liability: Debit Deferred Tax Expense or Profit and Loss Account and Credit Deferred Tax Liability (balance sheet). Reversals follow the opposite pattern when the underlying timing difference reverses in subsequent periods."
          }
        },
        {
          "@type": "Question",
          "name": "When are DTA and DTL reversed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Deferred tax balances reverse when the underlying timing difference reverses. For example, a DTL on depreciation reverses in later years of asset life when book depreciation exceeds tax depreciation. A DTA on Section 43B unpaid statutory dues reverses in the year the dues are actually paid and become tax-deductible. DTA on brought-forward losses reverses when those losses are absorbed against future taxable profits. The carrying amount must be reviewed each balance sheet date."
          }
        },
        {
          "@type": "Question",
          "name": "What is the foreign company tax rate for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For Assessment Year 2026-27 corresponding to Financial Year 2025-26, foreign companies are taxed at a base rate of 35% on income earned in India, reduced from 40% by the Finance (No. 2) Act, 2024. Surcharge applies at 0% for income up to ₹1 crore, 2% for ₹1 to ₹10 crore, and 5% above ₹10 crore. Health and Education Cess is 4% on tax plus surcharge. Effective rates range from 36.4% to 38.22% depending on income bracket."
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
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }
        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .toggle-group.stacked-mobile { flex-direction: column; }
        @media (min-width: 600px) { .toggle-group.stacked-mobile { flex-direction: row; } }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid; }
        .verdict-card.dta { background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); border-left-color: var(--success); }
        .verdict-card.dtl { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.zero { background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border-left-color: var(--info); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-amount { font-family: var(--font-mono); font-size: 32px; font-weight: 700; color: var(--primary-dark); margin: 8px 0; line-height: 1.1; }
        .verdict-amount.dta { color: var(--success); }
        .verdict-amount.dtl { color: var(--danger); }
        .verdict-sub { font-size: 14px; color: var(--text-secondary); }
        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        .effective-rate-display { background: var(--primary); color: #fff; border-radius: var(--radius); padding: 16px 18px; margin: 14px 0 22px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px; }
        .effective-rate-display .er-label { font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; opacity: 0.85; }
        .effective-rate-display .er-formula { font-family: var(--font-mono); font-size: 12px; opacity: 0.85; margin-top: 2px; }
        .effective-rate-display .er-value { font-family: var(--font-mono); font-size: 28px; font-weight: 700; color: var(--accent-light); line-height: 1.1; }
        .timing-row { display: grid; grid-template-columns: 1fr 90px 130px; gap: 8px; align-items: center; padding: 10px 0; border-bottom: 1px solid var(--border); }
        .timing-row:last-child { border-bottom: none; }
        .timing-label { font-size: 13px; color: var(--text); font-weight: 500; line-height: 1.4; }
        .timing-label .desc { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 2px; line-height: 1.4; }
        .timing-amount { width: 100%; padding: 8px 10px; border: 1.5px solid var(--border); border-radius: 8px; font-family: var(--font-mono); font-size: 14px; font-weight: 700; color: var(--text); background: var(--surface); outline: none; transition: border-color 0.2s; text-align: right; }
        .timing-amount:focus { border-color: var(--primary); }
        .timing-type-toggle { display: flex; background: var(--surface-alt); border-radius: 8px; padding: 2px; gap: 2px; }
        .timing-type-btn { flex: 1; padding: 6px 4px; border: none; border-radius: 6px; font-family: var(--font-body); font-size: 11px; font-weight: 700; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.2s; -webkit-tap-highlight-color: transparent; }
        .timing-type-btn * { pointer-events: none; }
        .timing-type-btn.active.dta { background: var(--success); color: #fff; }
        .timing-type-btn.active.dtl { background: var(--danger); color: #fff; }
        .timing-row.custom { grid-template-columns: 1fr 90px 130px; }
        .timing-row.custom .timing-label-input { width: 100%; padding: 8px 10px; border: 1.5px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 13px; color: var(--text); background: var(--surface); outline: none; }
        .timing-row.custom .timing-label-input:focus { border-color: var(--primary); }
        @media (max-width: 600px) {
            .timing-row { grid-template-columns: 1fr; gap: 6px; }
            .timing-row > * { grid-column: 1; }
            .timing-row .timing-label { padding-bottom: 4px; }
        }
        .breakdown-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 13px; }
        .breakdown-table thead th { background: var(--primary); color: #fff; padding: 10px 12px; text-align: left; font-weight: 600; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .breakdown-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .breakdown-table thead th:last-child { border-radius: 0 var(--radius) 0 0; text-align: right; }
        .breakdown-table thead th.right { text-align: right; }
        .breakdown-table tbody td { padding: 10px 12px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 13px; }
        .breakdown-table tbody td.right { text-align: right; font-family: var(--font-mono); font-weight: 600; }
        .breakdown-table tbody td .badge-type { display: inline-block; font-family: var(--font-mono); font-size: 10px; font-weight: 700; padding: 2px 6px; border-radius: 4px; }
        .breakdown-table tbody td .badge-type.dta { background: #D1FAE5; color: #065F46; }
        .breakdown-table tbody td .badge-type.dtl { background: #FEE2E2; color: #991B1B; }
        .breakdown-table tfoot td { padding: 12px; background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); font-size: 13px; }
        .breakdown-table tfoot td.right { text-align: right; font-family: var(--font-mono); }
        .journal-entry { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.9; margin: 16px 0; overflow-x: auto; }
        .journal-entry .je-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 6px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .journal-entry .je-row { display: grid; grid-template-columns: 1fr 80px 80px; gap: 8px; }
        .journal-entry .je-amt { text-align: right; }
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
        .formula-box { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .callout.danger { background: #FEF2F2; border-left-color: var(--danger); }
        .callout.danger p { color: #991B1B; }
        .callout.danger strong { color: #7F1D1D; }
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
        .conditional-row { display: none; }
        .conditional-row.show { display: grid; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .rate-table, .breakdown-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th, .breakdown-table tbody td, .breakdown-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .verdict-amount { font-size: 26px; }
            .effective-rate-display .er-value { font-size: 22px; }
            .journal-entry { font-size: 11px; padding: 14px 16px; }
            .journal-entry .je-row { grid-template-columns: 1fr 60px 60px; }
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
</style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#tax-rates">Tax Rates</a>
        <a href="#timing-vs-permanent">Timing vs Permanent</a>
        <a href="#examples">Examples</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Deferred Tax Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Deferred Tax Calculator <span>(DTA / DTL)</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Deferred tax arises from timing or temporary differences between book profit (Companies Act) and taxable profit (Income Tax Act, 1961). This calculator computes Deferred Tax Asset and Liability under AS 22 and Ind AS 12 with FY 2025-26 corporate tax rates — domestic 25%/30%, Section 115BAA at 22%, Section 115BAB at 15%, foreign at 35% — auto-applying surcharge slabs and 4% Health and Education Cess to give the effective tax rate. Supports eight common timing differences plus three custom rows, and produces a journal entry-ready breakdown.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute DTA & DTL Instantly</h2>
            <p class="calc-intro">Pick your tax regime and surcharge slab, then enter the timing or temporary differences below. The calculator auto-applies the effective tax rate (base + surcharge + 4% cess) and gives you a journal entry-ready breakdown.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to run this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Tax Regime</div>

            <div class="form-group" style="margin-bottom:16px;">
                <label>Select Applicable Tax Regime</label>
                <div class="toggle-group" id="regimeGroup" role="tablist" aria-label="Tax regime">
                    <button type="button" class="toggle-btn active" data-value="std25" data-base="25" role="tab" aria-selected="true">Std 25%</button>
                    <button type="button" class="toggle-btn" data-value="std30" data-base="30" role="tab" aria-selected="false">Std 30%</button>
                    <button type="button" class="toggle-btn" data-value="115baa" data-base="22" role="tab" aria-selected="false">115BAA 22%</button>
                    <button type="button" class="toggle-btn" data-value="115bab" data-base="15" role="tab" aria-selected="false">115BAB 15%</button>
                    <button type="button" class="toggle-btn" data-value="foreign" data-base="35" role="tab" aria-selected="false">Foreign 35%</button>
                    <button type="button" class="toggle-btn" data-value="custom" data-base="0" role="tab" aria-selected="false">Custom</button>
                </div>
                <span class="helper">Std 25% = domestic co with turnover ≤ ₹400 cr in FY 2024-25. Std 30% = domestic co with turnover &gt; ₹400 cr. 115BAA/BAB = concessional regimes (flat 10% surcharge). Foreign rate reduced to 35% by Finance (No. 2) Act, 2024.</span>
            </div>

            <div class="calc-row" style="margin-bottom:14px;">
                <div class="form-group" id="domesticSurchargeRow">
                    <label>Surcharge (Domestic)</label>
                    <div class="toggle-group stacked-mobile" id="surchargeGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="0" role="tab" aria-selected="true">0% (≤₹1cr)</button>
                        <button type="button" class="toggle-btn" data-value="7" role="tab" aria-selected="false">7% (₹1–10cr)</button>
                        <button type="button" class="toggle-btn" data-value="12" role="tab" aria-selected="false">12% (&gt;₹10cr)</button>
                    </div>
                </div>
                <div class="form-group conditional-row" id="foreignSurchargeRow">
                    <label>Surcharge (Foreign)</label>
                    <div class="toggle-group stacked-mobile" id="surchargeForeignGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="0" role="tab" aria-selected="true">0% (≤₹1cr)</button>
                        <button type="button" class="toggle-btn" data-value="2" role="tab" aria-selected="false">2% (₹1–10cr)</button>
                        <button type="button" class="toggle-btn" data-value="5" role="tab" aria-selected="false">5% (&gt;₹10cr)</button>
                    </div>
                </div>
                <div class="form-group conditional-row" id="customRateRow">
                    <label for="customRate">Custom Effective Rate (%)</label>
                    <input type="number" id="customRate" min="0" max="100" step="0.001" placeholder="e.g. 25.168" inputmode="decimal">
                    <span class="helper">Enter the full effective rate including surcharge and cess.</span>
                </div>
            </div>

            <div class="effective-rate-display" id="effectiveRateDisplay">
                <div>
                    <div class="er-label">Effective Tax Rate</div>
                    <div class="er-formula" id="erFormula">25% × 1.00 (no surcharge) × 1.04 (cess)</div>
                </div>
                <div class="er-value" id="erValue">26.00%</div>
            </div>

            <div class="calc-section-title">Timing / Temporary Differences (₹)</div>

            <p class="calc-intro" style="margin-bottom:14px;font-size:13px;">Enter the absolute amount of each timing difference (positive number). The DTA/DTL type is pre-set based on conventional treatment but can be toggled per row.</p>

            <div id="timingRows">
                <div class="timing-row" data-id="dep">
                    <div class="timing-label">Depreciation Difference<span class="desc">Tax dep (WDV) less Book dep (SLM) — typically DTL in early asset years</span></div>
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="dep">
                        <button type="button" class="timing-type-btn dta" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl active" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row" data-id="s43b">
                    <div class="timing-label">Section 43B Disallowance<span class="desc">PF, ESI, GST, bonus, leave encashment paid after due date</span></div>
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="s43b">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row" data-id="prdd">
                    <div class="timing-label">Provision for Doubtful Debts<span class="desc">Movement during year — allowed on actual write-off only</span></div>
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="prdd">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row" data-id="grat">
                    <div class="timing-label">Provision for Gratuity<span class="desc">Allowed on actual payment basis under Sec 36(1)(v)</span></div>
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="grat">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row" data-id="leave">
                    <div class="timing-label">Provision for Leave Encashment<span class="desc">Sec 43B(f) — allowed only on actual payment</span></div>
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="leave">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row" data-id="warr">
                    <div class="timing-label">Provision for Warranty<span class="desc">Allowed on actual claim payment</span></div>
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="warr">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row" data-id="bfloss">
                    <div class="timing-label">B/F Losses & Unabsorbed Depreciation<span class="desc">Virtual certainty required under AS 22 for DTA recognition</span></div>
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="bfloss">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row custom" data-id="custom1">
                    <input type="text" class="timing-label-input" placeholder="Other timing difference 1" value="">
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="custom1">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row custom" data-id="custom2">
                    <input type="text" class="timing-label-input" placeholder="Other timing difference 2" value="">
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="custom2">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>

                <div class="timing-row custom" data-id="custom3">
                    <input type="text" class="timing-label-input" placeholder="Other timing difference 3" value="">
                    <input type="number" class="timing-amount" placeholder="0" min="0" step="any" inputmode="decimal">
                    <div class="timing-type-toggle" data-row="custom3">
                        <button type="button" class="timing-type-btn dta active" data-type="dta">DTA</button>
                        <button type="button" class="timing-type-btn dtl" data-type="dtl">DTL</button>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate Deferred Tax</button>
            <button type="button" class="btn-reset" id="btnReset">Reset All</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Net Position</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="verdict-amount" id="verdictAmount"></div>
                    <div class="verdict-sub" id="verdictSub"></div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 4px;">Detailed Breakdown</h3>
                <div style="overflow-x:auto;">
                    <table class="breakdown-table" id="breakdownTable">
                        <thead>
                            <tr>
                                <th>Timing Difference</th>
                                <th>Type</th>
                                <th class="right">Amount (₹)</th>
                                <th class="right">Tax Effect (₹)</th>
                            </tr>
                        </thead>
                        <tbody id="breakdownBody"></tbody>
                        <tfoot id="breakdownFoot"></tfoot>
                    </table>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 4px;">Journal Entry</h3>
                <div class="journal-entry" id="journalEntry"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The calculator follows the textbook AS 22 / Ind AS 12 method: identify timing or temporary differences between book profit and taxable profit, multiply each by the effective tax rate that will apply when the difference reverses, and aggregate to get the net Deferred Tax Asset or Liability.</p>

            <h3>Step 1 — Determine Effective Tax Rate</h3>
            <p>The effective rate equals base rate × (1 + surcharge%) × (1 + 4% cess). For example, a Section 115BAA company carries a base rate of 22% with a flat 10% surcharge and 4% cess: 22% × 1.10 × 1.04 = 25.168%. A standard domestic company at 30% with income above ₹10 crore carries 30% × 1.12 × 1.04 = 34.944%. The rates and surcharge slabs are notified annually through the Finance Act and codified at <a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener">India Code (Income Tax Act, 1961)</a>.</p>

            <div class="formula-box">
<span class="label">Effective Rate</span> = Base × (1 + Surcharge%) × (1 + Cess%)
<span class="label">115BAA Example</span> = 22% × 1.10 × 1.04 = <strong>25.168%</strong>
<span class="label">30% + 12% Surcharge</span> = 30% × 1.12 × 1.04 = <strong>34.944%</strong>
<span class="label">Foreign + 5% Surcharge</span> = 35% × 1.05 × 1.04 = <strong>38.220%</strong>
            </div>

            <h3>Step 2 — Classify Each Difference</h3>
            <p>The calculator pre-classifies eight common timing differences based on Indian tax law: depreciation difference is conventionally a DTL in early years (because tax allows accelerated WDV depreciation), while Section 43B disallowances, provisions for doubtful debts, gratuity, leave encashment, warranty and brought-forward losses are conventionally DTAs. The toggle on each row lets you flip the classification when the direction reverses in later years.</p>

            <h3>Step 3 — Compute Tax Effect Per Row</h3>
            <p>Each row's tax effect equals the timing difference amount multiplied by the effective tax rate. The calculator aggregates all DTA rows separately from DTL rows, then computes the net position as Total DTA minus Total DTL.</p>

            <h3>Step 4 — Generate Journal Entry</h3>
            <p>The output includes a ready-to-use journal entry. For a net DTA: Debit Deferred Tax Asset and Credit Profit and Loss Account (Deferred Tax Income). For a net DTL: Debit Profit and Loss Account (Deferred Tax Expense) and Credit Deferred Tax Liability. Reversal entries in subsequent years follow the opposite pattern.</p>
        </section>

        <section class="content-section" id="tax-rates">
            <h2>Corporate Tax Rates — FY 2025-26 / AY 2026-27</h2>
            <p>India operates a multi-rate corporate tax structure with separate rates for domestic and foreign companies, two concessional regimes for new and existing manufacturers, and surcharge slabs that step up with total income. Understanding the exact effective rate is critical because deferred tax computation under <a href="https://resource.cdn.icai.org/74944asb-as22.pdf" target="_blank" rel="noopener">AS 22</a> and Ind AS 12 must use the rate enacted at the balance sheet date that is expected to apply on reversal.</p>

            <h3>Rate Card</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Regime</th><th>Base Rate</th><th>Surcharge</th><th>Cess</th><th>Effective Rate</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Std 25%</strong> (Turnover ≤ ₹400 cr)</td><td>25%</td><td>0% / 7% / 12%</td><td>4%</td><td>26.00% – 29.12%</td></tr>
                    <tr><td><strong>Std 30%</strong> (Turnover &gt; ₹400 cr)</td><td>30%</td><td>0% / 7% / 12%</td><td>4%</td><td>31.20% – 34.944%</td></tr>
                    <tr><td><strong>Sec 115BAA</strong></td><td>22%</td><td>Flat 10%</td><td>4%</td><td>25.168%</td></tr>
                    <tr><td><strong>Sec 115BAB</strong> (New Mfg)</td><td>15%</td><td>Flat 10%</td><td>4%</td><td>17.16%</td></tr>
                    <tr><td><strong>Foreign Co</strong></td><td>35%</td><td>0% / 2% / 5%</td><td>4%</td><td>36.40% – 38.22%</td></tr>
                </tbody>
            </table>

            <h3>Surcharge Slabs</h3>
            <p><strong>Domestic companies</strong> at standard rates: 0% if total income up to ₹1 crore, 7% if above ₹1 crore but up to ₹10 crore, 12% if above ₹10 crore. <strong>Companies under Section 115BAA or 115BAB:</strong> flat 10% surcharge regardless of income — favourable for high-income companies that would otherwise face 12%. <strong>Foreign companies:</strong> 0% / 2% / 5% based on the same ₹1 crore and ₹10 crore thresholds. Marginal relief applies in all cases at the surcharge thresholds.</p>

            <h3>Health and Education Cess</h3>
            <p>A flat 4% Health and Education Cess applies on income tax plus surcharge in all cases — domestic, concessional regime, foreign, and even Minimum Alternate Tax. The cess is non-creditable, non-refundable, and forms part of the cash tax outflow, which is why it must be included in the deferred tax effective rate. For the official rate schedule, refer to the <a href="https://www.incometax.gov.in/iec/foportal/help/company/return-applicable" target="_blank" rel="noopener">Income Tax Department's company tax page</a> and the <a href="https://incometaxindia.gov.in/Documents/Left%20Menu/TAX%20RATES-domestic.htm" target="_blank" rel="noopener">domestic rate notification</a>.</p>

            <div class="callout warn">
                <p><strong>Foreign company rate change:</strong> The Finance (No. 2) Act, 2024 reduced the foreign company base rate from 40% to 35% effective Assessment Year 2025-26 onwards. Any DTA/DTL previously computed at 40% must be remeasured at the new rate, with the change recognised in the year of substantive enactment.</p>
            </div>
        </section>

        <section class="content-section" id="timing-vs-permanent">
            <h2>Timing Differences vs Permanent Differences</h2>
            <p>The first analytical step in deferred tax accounting is separating timing differences from permanent differences. Only timing or temporary differences give rise to DTA or DTL — permanent differences are ignored because they never reverse.</p>

            <h3>Timing Differences (Reverse Over Time)</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Item</th><th>Conventional Type</th><th>Reason</th></tr>
                </thead>
                <tbody>
                    <tr><td>Depreciation (Tax WDV vs Book SLM)</td><td><strong>DTL</strong></td><td>Tax allows accelerated dep, reverses in later asset years</td></tr>
                    <tr><td>Sec 43B disallowance (PF, ESI, GST, bonus)</td><td><strong>DTA</strong></td><td>Allowed on actual payment in subsequent year</td></tr>
                    <tr><td>Provision for doubtful debts</td><td><strong>DTA</strong></td><td>Tax allows on actual write-off only</td></tr>
                    <tr><td>Provision for gratuity / leave encashment</td><td><strong>DTA</strong></td><td>Allowed on actual payment to employee</td></tr>
                    <tr><td>Provision for warranty</td><td><strong>DTA</strong></td><td>Allowed on actual claim payment</td></tr>
                    <tr><td>Brought-forward business losses</td><td><strong>DTA</strong></td><td>Set off against future taxable profits (8 years)</td></tr>
                    <tr><td>Unabsorbed depreciation</td><td><strong>DTA</strong></td><td>Carry forward indefinitely under Sec 32(2)</td></tr>
                    <tr><td>VRS expense (Sec 35DDA)</td><td><strong>DTL</strong></td><td>Tax allows over 5 years vs full charge in books</td></tr>
                </tbody>
            </table>

            <h3>Permanent Differences (Never Reverse)</h3>
            <ul>
                <li><strong>Donations not eligible for Section 80G deduction</strong> — never deductible for tax</li>
                <li><strong>Fines, penalties and interest on tax</strong> — never deductible under Sec 37(1)</li>
                <li><strong>Disallowed CSR expenditure</strong> — disallowed under Explanation 2 to Sec 37(1)</li>
                <li><strong>Income exempt under Sec 10</strong> (agricultural income, dividend up to AY 2020-21)</li>
                <li><strong>Expenses on exempt income</strong> — disallowed under Sec 14A read with Rule 8D</li>
            </ul>
            <p>Permanent differences affect only current tax — they do not give rise to DTA or DTL.</p>

            <div class="callout">
                <p><strong>Virtual certainty test for DTA:</strong> Under AS 22 and Ind AS 12, DTA on unabsorbed depreciation and brought-forward business losses can be recognised only when there is virtual certainty (AS 22) or probable taxable profits (Ind AS 12) supported by convincing evidence. Mere optimism does not suffice — binding contracts, signed export orders or robust forecasts are required. Disclosure follows <a href="https://www.mca.gov.in/MinistryV2/scheduleIIicompaniesact2013.html" target="_blank" rel="noopener">Schedule III Division II</a> of the Companies Act notified by MCA, with separate non-current presentation.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Deferred Tax Computation Locked Up Your Audit?</h3>
            <p>Patron Accounting LLP supports CFO offices and audit teams across Pune, Mumbai, Delhi and Gurugram with deferred tax workings, AS 22 / Ind AS 12 disclosures and statutory audit sign-off — fixed-fee engagements, ICAI Guidance Note compliant.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Deferred%20Tax%20Calculator.%20I%20need%20help%20with%20DTA%2FDTL%20computation%20and%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="examples">
            <h2>Worked Examples</h2>
            <p>Below are three worked examples illustrating common scenarios encountered in Indian audit practice.</p>

            <h3>Example 1: Domestic Co at 25% — Mixed Differences</h3>
            <p>A Pvt Ltd with turnover ₹250 crore and total income ₹3 crore opts for the standard regime. Surcharge applies at 7%, cess at 4%. Effective rate = 25% × 1.07 × 1.04 = <strong>27.82%</strong>. Timing differences: depreciation difference ₹50 lakh (DTL), Sec 43B disallowance ₹8 lakh (DTA), gratuity provision ₹4 lakh (DTA), provision for doubtful debts ₹3 lakh (DTA).</p>
            <p>Computation: DTL = ₹50,00,000 × 27.82% = ₹13,91,000. DTA = (₹8,00,000 + ₹4,00,000 + ₹3,00,000) × 27.82% = ₹4,17,300. <strong>Net DTL = ₹9,73,700.</strong></p>

            <h3>Example 2: Section 115BAA Company</h3>
            <p>A domestic company has opted for Section 115BAA. Effective rate = 22% × 1.10 × 1.04 = <strong>25.168%</strong>. Timing difference: depreciation difference ₹1.2 crore (DTL), brought-forward losses (with virtual certainty) ₹40 lakh (DTA).</p>
            <p>Computation: DTL = ₹1,20,00,000 × 25.168% = ₹30,20,160. DTA = ₹40,00,000 × 25.168% = ₹10,06,720. <strong>Net DTL = ₹20,13,440.</strong></p>

            <h3>Example 3: Loss-Making Company — DTA Recognition</h3>
            <p>A startup has accumulated business losses of ₹2 crore and unabsorbed depreciation of ₹50 lakh after three years. Management can demonstrate virtual certainty through signed contracts of ₹6 crore over the next two years. Effective rate at standard 25% with no surcharge = 26%.</p>
            <p>DTA = (₹2,00,00,000 + ₹50,00,000) × 26% = <strong>₹65,00,000</strong>. The DTA is recognised, but management must reassess virtual certainty at every balance sheet date and write down the DTA if convincing evidence ceases to exist. Failure to reassess is one of the most common audit issues in <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> peer review findings.</p>

            <div class="callout danger">
                <p><strong>Common audit issue:</strong> Companies often forget to remeasure deferred tax balances when the tax rate changes. The Finance (No. 2) Act, 2024 reduced foreign company rate from 40% to 35% — any DTA/DTL on foreign company books at 40% must be revalued at 35% in the year of substantive enactment, with the difference routed through P&L. The MCA Schedule III disclosure also mandates a tax rate reconciliation note explaining the change. <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> inspection reports regularly flag missing rate reconciliations.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is deferred tax — DTA and DTL?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Deferred tax is the tax effect of timing or temporary differences between book profit (per Companies Act and accounting standards) and taxable profit (per Income Tax Act, 1961). A Deferred Tax Asset arises when book profit is lower than taxable profit currently and tax savings will accrue in future years. A Deferred Tax Liability arises when book profit is higher than taxable profit currently and tax will be payable in future years when the difference reverses.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between AS 22 and Ind AS 12?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">AS 22 issued by ICAI follows the income statement approach and recognises deferred tax on timing differences between book profit and taxable profit. Ind AS 12, which is converged with IAS 12, follows the balance sheet approach and recognises deferred tax on temporary differences between the carrying amount of an asset or liability and its tax base. Both methods produce similar net deferred tax balances but presentation and recognition triggers differ.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are the most common DTA-creating items in India?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The most common DTA items are Section 43B disallowances (PF, ESI, GST, bonus and leave encashment paid after the due date), provision for doubtful debts (allowed only on actual write-off), provision for gratuity and leave encashment (allowed on actual payment basis), provision for warranty, brought-forward business losses and unabsorbed depreciation, voluntary retirement scheme expenses under Section 35DDA, and certain preliminary expenses spread over five years under Section 35D.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are the most common DTL-creating items in India?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The single largest source of DTL in India is the depreciation difference: Income Tax Act allows accelerated depreciation on the written-down value method while companies typically charge straight-line method depreciation in books, creating a DTL in early years of asset life that reverses later. Other DTL items include capitalisation differences for borrowing costs, deferred revenue expenditure written off over a longer period in books, and revaluation gains taxed only on disposal.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is virtual certainty for DTA recognition?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under AS 22, DTA on unabsorbed depreciation and brought-forward business losses can be recognised only when there is virtual certainty supported by convincing evidence that sufficient future taxable income will be available against which the loss can be set off. Convincing evidence means binding export orders, signed sales contracts or robust forecasts based on confirmed business pipeline. General optimism or projections without supporting documents do not meet the virtual certainty test.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Which tax rate should be used to compute DTA and DTL?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under AS 22 and Ind AS 12, deferred tax assets and liabilities are measured using tax rates and laws that have been enacted or substantively enacted by the balance sheet date and that are expected to apply in the period when the asset is realised or liability is settled. The applicable rate must include base rate plus surcharge plus 4% Health and Education Cess to reflect the actual cash tax outflow on reversal.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Are surcharge and cess included in the deferred tax rate?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The effective tax rate for deferred tax computation must include surcharge and Health and Education Cess because these are integral components of the income tax payable on reversal of the timing difference. For a Section 115BAA company, the rate is 22% plus 10% surcharge plus 4% cess equalling 25.168%. For a domestic company at 30% with income above ₹10 crore, the rate is 30% plus 12% surcharge plus 4% cess equalling 34.944%.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Is MAT credit treated as a Deferred Tax Asset?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">MAT credit entitlement under Section 115JAA is recognised as a separate asset on the balance sheet, not as Deferred Tax Asset. Under AS 22, MAT credit does not arise from timing differences and is therefore outside the deferred tax framework. Under Ind AS 12, MAT credit is presented separately under Other Non-current Assets when there is convincing evidence of utilisation within the 15-year carry-forward window allowed under Section 115JAA.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between permanent and timing differences?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Permanent differences are items that affect either book profit or taxable profit but never both — examples include disallowed donations, fines and penalties, expenses on exempt income, and dividends from domestic companies pre-Finance Act 2020. They never reverse, so no deferred tax is created on them. Timing or temporary differences are items recognised in different periods between books and tax — they reverse over time and therefore give rise to DTA or DTL under AS 22 and Ind AS 12.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Where are DTA and DTL disclosed on the balance sheet?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under AS 22, the net Deferred Tax Asset is shown after the head Investments on the asset side, and net Deferred Tax Liability is shown after the head Unsecured Loans on the liability side. Under Ind AS 12 and Schedule III Division II of the Companies Act, DTA and DTL are always classified as non-current and presented separately under Non-Current Assets and Non-Current Liabilities respectively, with set-off allowed only when there is a legally enforceable right.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the journal entry for creating DTA and DTL?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">To create a Deferred Tax Asset: Debit Deferred Tax Asset (balance sheet) and Credit Deferred Tax Expense or Profit and Loss Account, with the amount equal to the deductible timing difference multiplied by the effective tax rate. To create a Deferred Tax Liability: Debit Deferred Tax Expense or Profit and Loss Account and Credit Deferred Tax Liability (balance sheet). Reversals follow the opposite pattern when the underlying timing difference reverses in subsequent periods.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">When are DTA and DTL reversed?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Deferred tax balances reverse when the underlying timing difference reverses. For example, a DTL on depreciation reverses in later years of asset life when book depreciation exceeds tax depreciation. A DTA on Section 43B unpaid statutory dues reverses in the year the dues are actually paid and become tax-deductible. DTA on brought-forward losses reverses when those losses are absorbed against future taxable profits. The carrying amount must be reviewed each balance sheet date.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the foreign company tax rate for AY 2026-27?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For Assessment Year 2026-27 corresponding to Financial Year 2025-26, foreign companies are taxed at a base rate of 35% on income earned in India, reduced from 40% by the Finance (No. 2) Act, 2024. Surcharge applies at 0% for income up to ₹1 crore, 2% for ₹1 to ₹10 crore, and 5% above ₹10 crore. Health and Education Cess is 4% on tax plus surcharge. Effective rates range from 36.4% to 38.22% depending on income bracket.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Stuck on Deferred Tax Workings?</h3>
            <p>Get a CA-reviewed DTA/DTL schedule, ICAI Guidance Note compliant, audit-ready — for FY 2025-26 financials.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Deferred%20Tax%20Calculator.%20I%20need%20help%20with%20DTA%2FDTL%20computation%20and%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation (Gratuity)<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist Generator<span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator (IT Act)<span class="arrow">→</span></a>
            <a href="/tools/tds-rate-finder-calculator" class="sidebar-link">TDS Rate Finder & Calculator<span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Income Tax Scrutiny & Assessment<span class="arrow">→</span></a>
            <a href="/blog/section-154-rectification-how-to-correct-mistakes-in-your-income-tax-return" class="sidebar-link">Section 154 Rectification Guide<span class="arrow">→</span></a>
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

    // ===== TOGGLE GROUP HELPER =====
    function setupToggleGroup(id, onChange) {
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
            if (onChange) onChange();
        });
    }

    function getActiveValue(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }

    function getActiveButton(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        return group.querySelector('.toggle-btn.active');
    }

    // ===== EFFECTIVE RATE COMPUTATION =====
    function computeEffectiveRate() {
        const regime = getActiveValue('regimeGroup');
        const regimeBtn = getActiveButton('regimeGroup');
        const baseRate = regimeBtn ? parseFloat(regimeBtn.dataset.base) : 25;

        let surcharge = 0;
        let surchargeLabel = '';

        if (regime === '115baa' || regime === '115bab') {
            surcharge = 10;
            surchargeLabel = '10% (flat)';
        } else if (regime === 'foreign') {
            surcharge = parseFloat(getActiveValue('surchargeForeignGroup')) || 0;
            surchargeLabel = surcharge + '%';
        } else if (regime === 'custom') {
            const customRate = parseFloat(document.getElementById('customRate').value) || 0;
            return {
                effective: customRate,
                base: customRate,
                surcharge: 0,
                cess: 0,
                formula: 'Custom rate as entered'
            };
        } else {
            surcharge = parseFloat(getActiveValue('surchargeGroup')) || 0;
            surchargeLabel = surcharge + '%';
        }

        const cess = 4;
        const effective = baseRate * (1 + surcharge / 100) * (1 + cess / 100);
        const surchargeText = surcharge === 0 ? '1.00 (no surcharge)' : '1.' + (surcharge < 10 ? '0' + surcharge : surcharge);
        const formula = baseRate + '% × ' + surchargeText + ' × 1.04 (cess)';

        return {effective: effective, base: baseRate, surcharge: surcharge, cess: cess, formula: formula};
    }

    function updateEffectiveRateDisplay() {
        const r = computeEffectiveRate();
        document.getElementById('erValue').textContent = r.effective.toFixed(3) + '%';
        document.getElementById('erFormula').textContent = r.formula;
    }

    // ===== REGIME CHANGE HANDLER =====
    function onRegimeChange() {
        const regime = getActiveValue('regimeGroup');
        const domesticRow = document.getElementById('domesticSurchargeRow');
        const foreignRow = document.getElementById('foreignSurchargeRow');
        const customRow = document.getElementById('customRateRow');

        domesticRow.style.display = (regime === 'std25' || regime === 'std30') ? '' : 'none';
        foreignRow.classList.toggle('show', regime === 'foreign');
        customRow.classList.toggle('show', regime === 'custom');

        const erDisplay = document.getElementById('effectiveRateDisplay');
        erDisplay.style.display = '';

        // Hide surcharge for 115BAA/BAB since flat 10%
        if (regime === '115baa' || regime === '115bab') {
            domesticRow.style.display = 'none';
        }

        updateEffectiveRateDisplay();
    }

    setupToggleGroup('regimeGroup', onRegimeChange);
    setupToggleGroup('surchargeGroup', updateEffectiveRateDisplay);
    setupToggleGroup('surchargeForeignGroup', updateEffectiveRateDisplay);

    document.getElementById('customRate').addEventListener('input', updateEffectiveRateDisplay);

    onRegimeChange();

    // ===== TIMING ROW TYPE TOGGLES =====
    document.querySelectorAll('.timing-type-toggle').forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            const btn = e.target.closest('.timing-type-btn');
            if (!btn || !toggle.contains(btn)) return;
            toggle.querySelectorAll('.timing-type-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    // ===== TIMING DIFFERENCES MASTER LIST =====
    const TIMING_LABELS = {
        dep: 'Depreciation Difference',
        s43b: 'Section 43B Disallowance',
        prdd: 'Provision for Doubtful Debts',
        grat: 'Provision for Gratuity',
        leave: 'Provision for Leave Encashment',
        warr: 'Provision for Warranty',
        bfloss: 'B/F Losses & Unabsorbed Depreciation'
    };

    // ===== READ TIMING ROWS =====
    function readTimingRows() {
        const rows = [];
        document.querySelectorAll('.timing-row').forEach(function(row) {
            const id = row.dataset.id;
            const amountEl = row.querySelector('.timing-amount');
            const amount = parseFloat(amountEl.value) || 0;
            const typeBtn = row.querySelector('.timing-type-btn.active');
            const type = typeBtn ? typeBtn.dataset.type : 'dta';
            let label = TIMING_LABELS[id];
            if (!label) {
                const labelInput = row.querySelector('.timing-label-input');
                label = labelInput && labelInput.value.trim() ? labelInput.value.trim() : ('Other ' + id.replace('custom', ''));
            }
            if (amount > 0) {
                rows.push({id: id, label: label, amount: amount, type: type});
            }
        });
        return rows;
    }

    // ===== INDIAN CURRENCY FORMAT =====
    function fmtINR(num) {
        if (num === 0) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 2, minimumFractionDigits: 2});
    }

    function fmtINRPlain(num) {
        return Math.round(num).toLocaleString('en-IN');
    }

    // ===== CALCULATE =====
    function calculate() {
        const rate = computeEffectiveRate();
        const rows = readTimingRows();

        if (rows.length === 0) {
            alert('Please enter at least one timing difference amount to calculate deferred tax.');
            return;
        }

        let totalDTA = 0;
        let totalDTL = 0;
        const breakdown = [];

        rows.forEach(function(r) {
            const taxEffect = r.amount * (rate.effective / 100);
            if (r.type === 'dta') totalDTA += taxEffect;
            else totalDTL += taxEffect;
            breakdown.push({label: r.label, type: r.type, amount: r.amount, taxEffect: taxEffect});
        });

        const netAmount = totalDTA - totalDTL;
        let netType = 'zero';
        if (netAmount > 0.01) netType = 'dta';
        else if (netAmount < -0.01) netType = 'dtl';

        renderResult({
            rate: rate,
            breakdown: breakdown,
            totalDTA: totalDTA,
            totalDTL: totalDTL,
            netAmount: netAmount,
            netType: netType
        });
    }

    // ===== RENDER =====
    function renderResult(r) {
        // Verdict card
        const card = document.getElementById('verdictCard');
        const headline = document.getElementById('verdictHeadline');
        const amount = document.getElementById('verdictAmount');
        const sub = document.getElementById('verdictSub');

        card.className = 'verdict-card ' + r.netType;
        amount.className = 'verdict-amount ' + r.netType;

        if (r.netType === 'dta') {
            headline.textContent = 'Net Deferred Tax Asset';
            amount.textContent = fmtINR(Math.abs(r.netAmount));
            sub.textContent = 'Recognise as Non-Current Asset on the balance sheet (subject to virtual certainty for losses).';
        } else if (r.netType === 'dtl') {
            headline.textContent = 'Net Deferred Tax Liability';
            amount.textContent = fmtINR(Math.abs(r.netAmount));
            sub.textContent = 'Recognise as Non-Current Liability on the balance sheet — no recognition test required.';
        } else {
            headline.textContent = 'Net Position: Nil';
            amount.textContent = fmtINR(0);
            sub.textContent = 'DTA and DTL fully offset — disclosure of gross movement still required.';
        }

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const summary = [
            {label: 'Effective Tax Rate', value: r.rate.effective.toFixed(3) + '%', highlight: true},
            {label: 'Total DTA', value: fmtINR(r.totalDTA)},
            {label: 'Total DTL', value: fmtINR(r.totalDTL)}
        ];
        summary.forEach(function(s, idx) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        if (r.netType === 'dta') {
            advisory.className = 'info-banner success';
            advisory.innerHTML = '<strong>Recognition guidance:</strong> A net DTA position is recognised when there is reasonable certainty of future taxable income to absorb the deductible differences. For DTA arising from unabsorbed depreciation or carry-forward losses, AS 22 requires <em>virtual certainty supported by convincing evidence</em> — binding contracts, signed export orders or robust forecasts. Reassess at each balance sheet date.';
        } else if (r.netType === 'dtl') {
            advisory.className = 'info-banner warn';
            advisory.innerHTML = '<strong>Recognition guidance:</strong> DTL is always recognised in full — no recognition test applies. Disclose under Non-Current Liabilities. Remember to remeasure on tax rate change (e.g., regime switch to 115BAA, foreign rate cut to 35%) with the difference routed through Profit and Loss Account.';
        } else {
            advisory.className = 'info-banner info';
            advisory.innerHTML = '<strong>Set-off note:</strong> Even when net position is nil, AS 22 / Ind AS 12 requires disclosure of gross DTA and DTL movements separately. Set-off in financial statements is permitted only when there is a legally enforceable right and the taxes are levied by the same tax authority.';
        }

        // Breakdown table
        const tbody = document.getElementById('breakdownBody');
        const tfoot = document.getElementById('breakdownFoot');
        tbody.innerHTML = '';
        r.breakdown.forEach(function(b) {
            const tr = document.createElement('tr');
            tr.innerHTML =
                '<td>' + b.label + '</td>' +
                '<td><span class="badge-type ' + b.type + '">' + b.type.toUpperCase() + '</span></td>' +
                '<td class="right">' + fmtINRPlain(b.amount) + '</td>' +
                '<td class="right">' + fmtINRPlain(b.taxEffect) + '</td>';
            tbody.appendChild(tr);
        });

        tfoot.innerHTML =
            '<tr><td colspan="3" class="right">Total DTA</td><td class="right">' + fmtINRPlain(r.totalDTA) + '</td></tr>' +
            '<tr><td colspan="3" class="right">Total DTL</td><td class="right">' + fmtINRPlain(r.totalDTL) + '</td></tr>' +
            '<tr><td colspan="3" class="right">Net ' + (r.netType === 'dta' ? 'DTA' : (r.netType === 'dtl' ? 'DTL' : 'Position')) + '</td><td class="right">' + fmtINRPlain(Math.abs(r.netAmount)) + '</td></tr>';

        // Journal entry
        const je = document.getElementById('journalEntry');
        let jeHtml = '<span class="je-label">Journal Entry (in books of account)</span>';
        if (r.netType === 'dta') {
            jeHtml += '<div class="je-row"><span>Deferred Tax Asset A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRPlain(Math.abs(r.netAmount)) + '</span><span></span></div>';
            jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Deferred Tax Income / P&L A/c</span><span></span><span class="je-amt">' + fmtINRPlain(Math.abs(r.netAmount)) + '</span></div>';
            jeHtml += '<div class="je-row" style="opacity:0.7;"><span>(Being net DTA recognised on timing differences)</span><span></span><span></span></div>';
        } else if (r.netType === 'dtl') {
            jeHtml += '<div class="je-row"><span>Deferred Tax Expense / P&L A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRPlain(Math.abs(r.netAmount)) + '</span><span></span></div>';
            jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Deferred Tax Liability A/c</span><span></span><span class="je-amt">' + fmtINRPlain(Math.abs(r.netAmount)) + '</span></div>';
            jeHtml += '<div class="je-row" style="opacity:0.7;"><span>(Being net DTL recognised on timing differences)</span><span></span><span></span></div>';
        } else {
            jeHtml += '<div class="je-row" style="opacity:0.85;"><span>No net entry required — gross movements offset.</span><span></span><span></span></div>';
            jeHtml += '<div class="je-row" style="opacity:0.7;"><span>Disclose gross DTA & DTL separately in Notes to Accounts.</span><span></span><span></span></div>';
        }
        je.innerHTML = jeHtml;

        // Show result section
        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        setTimeout(function() {
            section.scrollIntoView({behavior: 'smooth', block: 'start'});
        }, 100);
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('btnCalculate').addEventListener('click', calculate);

    document.getElementById('btnReset').addEventListener('click', function() {
        // Reset amount inputs
        document.querySelectorAll('.timing-amount').forEach(el => el.value = '');
        // Reset custom labels
        document.querySelectorAll('.timing-label-input').forEach(el => el.value = '');
        // Reset custom rate
        document.getElementById('customRate').value = '';

        // Reset toggle groups to defaults
        const defaults = {
            regimeGroup: 'std25',
            surchargeGroup: '0',
            surchargeForeignGroup: '0'
        };
        Object.keys(defaults).forEach(function(gid) {
            const g = document.getElementById(gid);
            if (!g) return;
            g.querySelectorAll('.toggle-btn').forEach(function(b) {
                const isDefault = b.dataset.value === defaults[gid];
                b.classList.toggle('active', isDefault);
                b.setAttribute('aria-selected', isDefault ? 'true' : 'false');
            });
        });

        // Reset timing type toggles to convention defaults
        const conventionDefaults = {
            dep: 'dtl', s43b: 'dta', prdd: 'dta', grat: 'dta',
            leave: 'dta', warr: 'dta', bfloss: 'dta',
            custom1: 'dta', custom2: 'dta', custom3: 'dta'
        };
        document.querySelectorAll('.timing-type-toggle').forEach(function(t) {
            const rowId = t.dataset.row;
            const def = conventionDefaults[rowId] || 'dta';
            t.querySelectorAll('.timing-type-btn').forEach(function(b) {
                b.classList.toggle('active', b.dataset.type === def);
            });
        });

        document.getElementById('resultSection').classList.remove('visible');
        onRegimeChange();
    });

    // Enter key support on number inputs
    document.querySelectorAll('input[type="number"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                calculate();
            }
        });
    });

    // ===== FAQ ACCORDION =====
    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    // ===== TOC ACTIVE LINK =====
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

/* Embed mode (?embed=1): show ONLY the calculator widget, recoloured to the
   service page's palette, when iframed into a cluster page. */
body.is-embed .toc-nav,
body.is-embed .breadcrumb,
body.is-embed .hero,
body.is-embed .tldr,
body.is-embed .content-section,
body.is-embed .sidebar-col,
body.is-embed .wa-sticky-bar,
body.is-embed .body-cta,
body.is-embed .cta-card { display: none !important; }
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
