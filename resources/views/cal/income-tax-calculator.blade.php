@extends('layouts.app')
@section('meta')

    <title>Income Tax Calculator FY 2025-26 | Old vs New Regime</title>
    <meta name="description" content="Income tax calculator FY 2025-26 (AY 2026-27): compute tax on salary, capital gains, rental income with deductions, surcharge, cess & TDS. Free, CA-reviewed!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/income-tax-calculator">

    <meta property="og:title" content="Income Tax Calculator FY 2025-26 — Free CA-Reviewed Tool">
    <meta property="og:description" content="Compute total income tax for FY 2025-26 across salary, capital gains, rental, with deductions, surcharge, cess, and net payable / refund after TDS.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/income-tax-calculator">
    <meta property="og:image" content="/tools/og/income-tax-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Calculator FY 2025-26 — Free CA-Reviewed Tool">
    <meta name="twitter:description" content="Compute total income tax for FY 2025-26 across all income types with TDS adjustment for net payable / refund.">
    <meta name="twitter:image" content="/tools/og/income-tax-calculator.png">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">


@endsection
@section('schema')

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Income Tax Calculator",
      "description": "Income Tax Calculator computes total income tax liability for FY 2025-26 (AY 2026-27) across salary, other income (interest/dividends), house property (rental income with home loan interest deduction), and capital gains (Section 112A LTCG equity 12.5% above ₹1.25L, Section 111A STCG equity 20%, Section 112 LTCG other 12.5%, slab-rate STCG other). Supports both old and new tax regimes via toggle, age-based exemptions, Section 87A rebate with marginal relief, surcharge tiers (10%/15%/25%/37%, capped at 25% under new regime), 4% cess, and TDS adjustment for net payable or refund. Routes business income, foreign income, NRI/RNOR, and crypto cases to specialized tools and CA consultation.",
      "url": "/tools/income-tax-calculator",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Any",
      "inLanguage": "en-IN",
      "isAccessibleForFree": true,
      "datePublished": "2026-05-06T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
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
        {"@type": "ListItem", "position": 3, "name": "Income Tax Calculator", "item": "/tools/income-tax-calculator"}
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
          "name": "How is income tax calculated for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Income tax for FY 2025-26 is computed in stages: total all income heads (salary, house property, capital gains, other), apply standard deduction and (if old regime) Chapter VI-A deductions, compute slab tax on the remaining taxable income, apply Section 87A rebate if eligible, add tax on special-rate income (LTCG/STCG), apply surcharge if income exceeds ₹50 lakh, and finally add 4% health and education cess. Net tax payable equals total tax minus TDS already deducted."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between slab-rate and special-rate income?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Slab-rate income includes salary, house property, business income, and other sources — taxed using regime-specific slabs (5%/10%/15%/20%/25%/30%). Special-rate income is taxed at fixed rates regardless of slab — LTCG on listed equity at 12.5% above ₹1.25L (Section 112A), STCG on listed equity at 20% (Section 111A), LTCG on other assets at 12.5% (Section 112). Section 87A rebate applies only to slab-rate income, not to special-rate income."
          }
        },
        {
          "@type": "Question",
          "name": "How does Section 87A rebate work in FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 87A provides tax rebate to resident individuals. Under the new regime for FY 2025-26: rebate up to ₹60,000 if total taxable income (excluding special-rate income) does not exceed ₹12,00,000. Marginal relief applies between ₹12L and ~₹12.7L. Under the old regime: rebate up to ₹12,500 if income does not exceed ₹5,00,000. Capital gains taxed under Sections 111A and 112A do not qualify for the rebate even if total income is within the threshold."
          }
        },
        {
          "@type": "Question",
          "name": "When does surcharge apply on income tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Surcharge applies when total taxable income exceeds ₹50 lakh. Rates: 10% above ₹50L, 15% above ₹1cr, 25% above ₹2cr. Old regime adds a 37% bracket above ₹5cr; new regime caps at 25%. Surcharge is computed on tax (before cess) and is subject to marginal relief at each boundary to ensure additional tax does not exceed additional income. Surcharge rates differ for income types — special-rate capital gains have separate surcharge tables."
          }
        },
        {
          "@type": "Question",
          "name": "What is the standard deduction for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard deduction is available to salaried employees and pensioners. Under the new regime for FY 2025-26: ₹75,000 (raised by Budget 2024 from ₹50,000). Under the old regime: ₹50,000 (unchanged since FY 2019-20). The deduction is automatic — no documentation required. Family pension recipients can claim ₹25,000 or one-third of pension whichever is lower under both regimes. Non-salaried taxpayers do not get the standard deduction."
          }
        },
        {
          "@type": "Question",
          "name": "How are capital gains taxed in FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Capital gains rates from 23 July 2024 onwards: Listed equity LTCG (held over 12 months) under Section 112A — 12.5% above ₹1.25 lakh annual exemption. Listed equity STCG (held under 12 months) under Section 111A — 20% flat. Property/gold/debt mutual fund LTCG (held over 24 months) under Section 112 — 12.5% with no indexation. Other STCG — taxed at slab rates. Capital gains tax is not subject to Section 87A rebate."
          }
        },
        {
          "@type": "Question",
          "name": "How is house property income calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For let-out property, gross rental income minus 30% standard deduction (Section 24(a)) minus home loan interest (Section 24(b)) gives net house property income. For self-occupied property, only home loan interest deduction up to ₹2 lakh is allowed (old regime only — new regime does not allow this for self-occupied). House property loss can be set off against other income up to ₹2 lakh; balance carries forward for 8 years."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between TDS and self-assessment tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TDS (Tax Deducted at Source) is tax deducted by the payer (employer for salary, bank for FD interest) and deposited with the government on your behalf — appears in Form 26AS and AIS. Self-assessment tax is the balance you pay yourself before filing ITR if total tax exceeds TDS plus advance tax. If TDS exceeds your total tax liability, you get a refund. The calculator subtracts TDS to show net payable or refundable amount."
          }
        },
        {
          "@type": "Question",
          "name": "Can I use this calculator if I have business income?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. This calculator is designed for individuals with salary, house property, capital gains, and other income (interest/dividend). Business or professional income — including freelance, consulting, F&O trading, intraday, partnership share, and crypto — requires different treatment. Use Patron's Section 44ADA Calculator for presumptive professional income, or the ITR Form Selector to determine whether ITR-3 or ITR-4 applies. Consult a CA for complex cases."
          }
        },
        {
          "@type": "Question",
          "name": "Are slab rates changing for FY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Budget 2026 (presented February 2026) made no changes to slab rates, Section 87A rebate amounts, surcharge tiers, or cess. Both old and new regime slabs continue unchanged for FY 2026-27. The Income Tax Act 2025 effective 1 April 2026 retains the substantive tax structure with renumbered references. Section 115BAC moves to Section 202, but rates and thresholds remain the same. The FY toggle in the calculator reflects this — math is identical for both years."
          }
        },
        {
          "@type": "Question",
          "name": "Does this calculator handle foreign income or NRI cases?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. NRI, RNOR, and foreign income cases involve residential status determination under Section 6, DTAA benefits, foreign tax credit via Form 67, Schedule FA disclosure, and Black Money Act compliance — none of which this calculator handles. The calculator routes such cases to the ITR Form Selector tool and CA consultation. Resident Indians with foreign company ESOPs/RSUs also need Schedule FA disclosure regardless of residency status."
          }
        },
        {
          "@type": "Question",
          "name": "How is the new regime different from the old regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "New regime has lower slab rates (0/5/10/15/20/25/30% with ₹4L exemption) but disallows most deductions like 80C, 80D, HRA, and self-occupied home loan interest. Standard deduction is ₹75,000. Section 87A rebate up to ₹60K makes income up to ₹12L tax-free. Old regime has higher slabs (5/20/30%) but allows all Chapter VI-A deductions, HRA, home loan interest. To compare both, use Patron's Old vs New Regime Calculator."
          }
        }
      ]
    }
    </script>
@endsection
   
    <style>
        :root {
            --primary: #15365f; --primary-light: #1f4a7a; --primary-dark: #0a2240;
            --accent: #f26522; --accent-light: #ff8347;
            --surface: #FAFAF8; --surface-alt: #F0EFEB; --card: #FFFFFF;
            --text: #414042; --text-secondary: #555555; --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669; --info: #0EA5E9; --danger: #DC2626;
            --radius: 12px; --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06); --shadow-md: 0 4px 16px rgba(0,0,0,0.08); --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif; --font-mono: 'Space Mono', monospace;
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
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .checkbox-group { display: flex; align-items: flex-start; gap: 10px; padding: 10px 12px; background: var(--surface); border: 1.5px solid var(--border); border-radius: var(--radius); cursor: pointer; transition: border-color 0.2s; margin-bottom: 8px; }
        .checkbox-group:hover { border-color: var(--primary-light); }
        .checkbox-group input[type="checkbox"] { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; cursor: pointer; }
        .checkbox-group label { font-size: 13px; font-weight: 500; color: var(--text); margin: 0; cursor: pointer; line-height: 1.5; text-transform: none; letter-spacing: 0; flex: 1; }
        .checkbox-group label small { display: block; font-size: 11px; color: var(--text-muted); margin-top: 2px; font-weight: 400; }
        .deductions-section { background: var(--surface); border-radius: var(--radius); padding: 18px; margin-top: 12px; transition: opacity 0.3s; }
        .deductions-section.disabled { opacity: 0.5; pointer-events: none; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .result-cards { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 16px; }
        @media (min-width: 600px) { .result-cards { grid-template-columns: 1fr 1fr; } }
        .result-card { background: var(--card); border-radius: var(--radius); padding: 16px 18px; border: 1.5px solid var(--border); }
        .result-card .rc-label { font-family: var(--font-mono); font-size: 11px; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
        .result-card .rc-value { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.2; }
        .result-card .rc-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; }
        .net-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 24px 28px; margin-bottom: 20px; }
        .net-card .nc-label { font-family: var(--font-mono); font-size: 11px; color: var(--accent-light); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .net-card .nc-amount { font-family: var(--font-mono); font-size: 32px; font-weight: 700; color: var(--accent-light); line-height: 1.1; margin-bottom: 6px; }
        .net-card .nc-status { font-size: 14px; color: rgba(255,255,255,0.9); }
        .net-card.refund .nc-amount { color: #6EE7B7; }
        .net-card.refund .nc-label { color: #6EE7B7; }
        .show-details-btn { background: transparent; border: 1.5px solid var(--border); color: var(--text-secondary); padding: 8px 16px; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-bottom: 16px; }
        .show-details-btn:hover { border-color: var(--primary); color: var(--primary); }
        .waterfall { background: var(--surface); border-radius: var(--radius-lg); padding: 24px; margin-bottom: 16px; display: none; }
        .waterfall.visible { display: block; }
        .waterfall-section { margin-bottom: 18px; padding-bottom: 14px; border-bottom: 1px solid var(--border); }
        .waterfall-section:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
        .waterfall-section .ws-head { font-family: var(--font-mono); font-size: 11px; color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px; }
        .wf-row { display: flex; justify-content: space-between; padding: 5px 0; font-size: 13px; color: var(--text-secondary); gap: 12px; }
        .wf-row.indent { padding-left: 16px; font-size: 12px; }
        .wf-row .lbl { flex: 1; }
        .wf-row .val { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); white-space: nowrap; }
        .wf-row.subtotal { border-top: 1px solid var(--border); padding-top: 8px; margin-top: 6px; font-weight: 700; }
        .wf-row.subtotal .lbl, .wf-row.subtotal .val { color: var(--primary-dark); font-size: 14px; }
        .wf-row.minus .val { color: var(--success); }
        .wf-row.plus .val { color: var(--danger); }
        .routing-card { background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%); border-left: 4px solid var(--accent); border-radius: 0 var(--radius-lg) var(--radius-lg) 0; padding: 24px 28px; margin-bottom: 20px; }
        .routing-card h3 { color: #78350F; font-size: 18px; margin-bottom: 12px; }
        .routing-card p { color: #92400E; font-size: 14px; margin-bottom: 16px; line-height: 1.65; }
        .routing-card .rt-options { display: flex; flex-direction: column; gap: 10px; }
        .routing-card .rt-option { background: rgba(255,255,255,0.7); border-radius: var(--radius); padding: 14px 16px; }
        .routing-card .rt-option strong { color: #78350F; display: block; margin-bottom: 4px; font-size: 14px; }
        .routing-card .rt-option p { color: #92400E; font-size: 13px; margin: 0 0 10px; }
        .routing-card .rt-option a { display: inline-block; padding: 8px 14px; background: #92400E; color: #fff; font-weight: 600; font-size: 12px; border-radius: 6px; text-decoration: none; transition: background 0.2s; }
        .routing-card .rt-option a:hover { background: #78350F; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }
        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 8px 0 16px 24px; color: var(--text-secondary); font-size: 15px; line-height: 1.75; }
        .content-section li { margin-bottom: 6px; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
        .faq-item.open .faq-answer { max-height: 600px; }
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
            .net-card .nc-amount { font-size: 24px; }
            .result-card .rc-value { font-size: 18px; }
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

<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#slabs">Slab Rates</a>
        <a href="#cap-gains">Capital Gains</a>
        <a href="#examples">Examples</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Income Tax Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Income Tax Calculator — <span>Full Tax Computation</span> FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Need to compute your income tax? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Income%20Tax%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=Income%20Tax%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Income%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20income%20tax%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Comprehensive income tax computation for FY 2025-26 (AY 2026-27) covering <strong>salary, house property (rental + home loan), capital gains (LTCG/STCG), and other income</strong>. Choose your regime, enter income components, and get the full waterfall: gross income → deductions → slab tax → 87A rebate → special-rate tax → surcharge → cess → <strong>net payable or refund after TDS</strong>. For regime comparison, use the <a href="/tools/old-vs-new-regime-calculator">Old vs New Regime Calculator</a>. For business or freelance income, see the <a href="/tools/section-44ada-calculator">Section 44ADA Calculator</a>.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Income Tax Calculator</h2>
            <p class="calc-intro">Enter your income, deductions, and TDS. The calculator computes total tax under your chosen regime and shows net payable or refund. Includes capital gains at correct special rates.</p>

            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or refer to the formulas in the content below.</div>
            </noscript>

            <div class="calc-section-title">Step 1 — Setup</div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label>Financial Year</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="2025-26" onclick="setFY(this)">2025-26</button>
                        <button type="button" class="toggle-btn" data-value="2026-27" onclick="setFY(this)">2026-27</button>
                    </div>
                    <span class="helper">Slabs identical for both years</span>
                </div>
                <div class="form-group">
                    <label>Tax Regime</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="new" onclick="setRegime(this)">New<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Default</small></button>
                        <button type="button" class="toggle-btn" data-value="old" onclick="setRegime(this)">Old<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">With deductions</small></button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Age Group</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="below60" onclick="setAge(this)">&lt;60</button>
                        <button type="button" class="toggle-btn" data-value="senior" onclick="setAge(this)">60-80</button>
                        <button type="button" class="toggle-btn" data-value="supersenior" onclick="setAge(this)">80+</button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Income Type</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="salaried" onclick="setIncomeType(this)">Salaried<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Std ded ₹75K/₹50K</small></button>
                        <button type="button" class="toggle-btn" data-value="non_salaried" onclick="setIncomeType(this)">Non-Salaried<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">No std deduction</small></button>
                    </div>
                </div>
            </div>

            <div class="calc-section-title">Step 2 — Income Sources</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="salaryIncome">Gross Salary (₹) — annual</label>
                    <input type="text" id="salaryIncome" placeholder="e.g. 1500000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Gross annual salary including basic, HRA, allowances, perks</span>
                </div>
                <div class="form-group">
                    <label for="otherIncome">Other Income (₹)</label>
                    <input type="text" id="otherIncome" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Interest, dividends, family pension, etc.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="rentalIncome">Rental Income (₹) — annual gross</label>
                    <input type="text" id="rentalIncome" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Annual rent received from let-out property (before 30% std deduction)</span>
                </div>
                <div class="form-group">
                    <label for="homeLoanInterest">Home Loan Interest (₹)</label>
                    <input type="text" id="homeLoanInterest" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Section 24(b). Self-occupied: max ₹2L (old regime only). Let-out: full interest.</span>
                </div>
            </div>

            <div class="calc-section-title">Capital Gains (Already Classified)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="cgEquityLTCG">Equity LTCG — Sec 112A (₹)</label>
                    <input type="text" id="cgEquityLTCG" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Listed equity held &gt; 12 months. Taxed 12.5% above ₹1.25L exemption.</span>
                </div>
                <div class="form-group">
                    <label for="cgEquitySTCG">Equity STCG — Sec 111A (₹)</label>
                    <input type="text" id="cgEquitySTCG" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Listed equity held ≤ 12 months. Taxed at flat 20%.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="cgOtherLTCG">Other LTCG — Sec 112 (₹)</label>
                    <input type="text" id="cgOtherLTCG" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Property/gold/debt MF held &gt; 24 months. Taxed at 12.5% no indexation.</span>
                </div>
                <div class="form-group">
                    <label for="cgOtherSTCG">Other STCG (₹)</label>
                    <input type="text" id="cgOtherSTCG" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Property/gold/debt MF held shorter than threshold. Added to income, taxed at slab.</span>
                </div>
            </div>

            <div class="callout" style="margin-top:0">
                <p>Need help classifying capital gains? Use the <a href="/tools/capital-gains-calculator">Capital Gains Calculator</a> to determine LTCG vs STCG and asset type.</p>
            </div>

            <div class="calc-section-title">Step 3 — Old Regime Deductions</div>
            <p class="calc-intro" style="margin-top:-8px;margin-bottom:14px;">Only applies if Old Regime is selected above. Ignored under New Regime.</p>

            <div class="deductions-section" id="deductionsSection">
                <div class="calc-row three-col">
                    <div class="form-group">
                        <label for="ded80c">Section 80C (₹)</label>
                        <input type="text" id="ded80c" placeholder="0" value="0" max="150000" autocomplete="off" inputmode="decimal">
                        <span class="helper">Max ₹1.5L</span>
                    </div>
                    <div class="form-group">
                        <label for="ded80d">Section 80D (₹)</label>
                        <input type="text" id="ded80d" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                        <span class="helper">Health insurance</span>
                    </div>
                    <div class="form-group">
                        <label for="ded80ccd">80CCD(1B) NPS (₹)</label>
                        <input type="text" id="ded80ccd" placeholder="0" value="0" max="50000" autocomplete="off" inputmode="decimal">
                        <span class="helper">Max ₹50K</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="hraExemption">HRA Exemption (₹)</label>
                        <input type="text" id="hraExemption" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                        <span class="helper">Computed Section 10(13A) exempt amount</span>
                    </div>
                    <div class="form-group">
                        <label for="otherDeductions">Other (80E/80G/80TTA etc.) (₹)</label>
                        <input type="text" id="otherDeductions" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                        <span class="helper">Education loan, donations, savings interest</span>
                    </div>
                </div>
            </div>

            <div class="calc-section-title">Step 4 — TDS &amp; Routing Flags</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="tdsDeducted">TDS Already Deducted (₹)</label>
                    <input type="text" id="tdsDeducted" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Total TDS from Form 26AS / AIS — used to compute net payable or refund</span>
                </div>
            </div>

            <p class="calc-intro" style="margin-top:8px;margin-bottom:8px;font-weight:600;color:var(--primary-dark);">Out-of-scope cases — check if any apply:</p>

            <div class="checkbox-group">
                <input type="checkbox" id="flagBusiness">
                <label for="flagBusiness">I have business or professional income<small>Including freelance, consulting, F&amp;O, intraday, partnership share. Calculator will route to the right tool.</small></label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="flagForeign">
                <label for="flagForeign">I have foreign income or foreign assets<small>Including ESOPs/RSUs from foreign companies. Schedule FA disclosure required.</small></label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="flagNRI">
                <label for="flagNRI">I am NRI or RNOR<small>Residential status determination, DTAA, foreign tax credit needed.</small></label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="flagCrypto">
                <label for="flagCrypto">I have crypto / VDA income<small>Section 115BBH flat 30% taxation. Schedule VDA disclosure required.</small></label>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Income Tax</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div id="resultArea"></div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Income Tax Calculator validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Income%20Tax%20Calculator.%20Please%20review%20my%20tax%20computation%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Income%20Tax%20Calculator%20%E2%80%94%20Review%20Request&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Income%20Tax%20Calculator%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20income%20tax%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How Income Tax Computation Works</h2>
            <p>Income tax for FY 2025-26 is governed by the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Income Tax Act 1961</a>, administered by the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> per <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> standards. The <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> notifies slab rates and rebates each year through the Union Budget; <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB</a> issues confirming press releases. Computation follows a standard 7-step waterfall.</p>

            <div class="formula-box">
                <span class="label">Step 1.</span> Total Gross Income = Salary + House Property + Other + Slab-rate STCG<br>
                <span class="label">Step 2.</span> Less: Standard Deduction + (if Old) Chapter VI-A deductions<br>
                <span class="label">Step 3.</span> Taxable Income (slab portion) = Step 1 − Step 2<br>
                <span class="label">Step 4.</span> Slab Tax = Apply regime slabs to Step 3<br>
                <span class="label">Step 5.</span> Less: Section 87A Rebate (if eligible)<br>
                <span class="label">Step 6.</span> Add: Tax on Special-Rate Capital Gains (LTCG/STCG)<br>
                <span class="label">Step 7.</span> Add: Surcharge (if income &gt; ₹50L) + 4% Cess<br>
                <span class="label">Final.</span> Net Payable / Refund = Total Tax − TDS Already Deducted
            </div>

            <h3>Income Heads Covered</h3>
            <ul>
                <li><strong>Salary</strong>: Gross salary including basic, HRA, perks, allowances. Standard deduction of ₹75K (new regime) or ₹50K (old) auto-applied for salaried.</li>
                <li><strong>House Property</strong>: Net rental income after 30% standard deduction (Section 24(a)) and home loan interest (Section 24(b)). Self-occupied gets only ₹2L home loan interest deduction (old regime only).</li>
                <li><strong>Capital Gains</strong>: 4 categories with different rates — Equity LTCG (12.5% above ₹1.25L), Equity STCG (20%), Other LTCG (12.5%), Other STCG (slab).</li>
                <li><strong>Other Sources</strong>: Interest, dividends, family pension, lottery (taxed separately), gifts above ₹50K.</li>
            </ul>

            <h3>What's Not Covered (Use Other Tools)</h3>
            <ul>
                <li><strong>Business / Professional Income</strong> → <a href="/tools/section-44ada-calculator">Section 44ADA Calculator</a> (presumptive) or <a href="/tools/itr-form-selector">ITR Form Selector</a> (regular books)</li>
                <li><strong>Foreign Income / NRI / RNOR</strong> → ITR Form Selector + CA consultation</li>
                <li><strong>Crypto / VDA</strong> → Section 115BBH treatment requires CA assistance</li>
                <li><strong>Lottery / Online Gaming</strong> → Section 115BB / 115BBJ flat 30% — CA consultation</li>
            </ul>
        </section>

        <section class="content-section" id="slabs">
            <h2>Slab Rates &amp; Surcharge for FY 2025-26</h2>

            <h3>New Regime Slabs (Default)</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Income Slab</th><th>Tax Rate</th></tr></thead>
                <tbody>
                    <tr><td>Up to ₹4,00,000</td><td>Nil</td></tr>
                    <tr><td>₹4,00,001 - ₹8,00,000</td><td>5%</td></tr>
                    <tr><td>₹8,00,001 - ₹12,00,000</td><td>10%</td></tr>
                    <tr><td>₹12,00,001 - ₹16,00,000</td><td>15%</td></tr>
                    <tr><td>₹16,00,001 - ₹20,00,000</td><td>20%</td></tr>
                    <tr><td>₹20,00,001 - ₹24,00,000</td><td>25%</td></tr>
                    <tr><td>Above ₹24,00,000</td><td>30%</td></tr>
                </tbody>
            </table></div>

            <h3>Old Regime Slabs</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Slab</th><th>Below 60</th><th>Senior (60-80)</th><th>Super Senior (80+)</th></tr></thead>
                <tbody>
                    <tr><td>Basic Exemption</td><td>₹2.5L</td><td>₹3L</td><td>₹5L</td></tr>
                    <tr><td>5% Slab</td><td>₹2.5L - ₹5L</td><td>₹3L - ₹5L</td><td>—</td></tr>
                    <tr><td>20% Slab</td><td>₹5L - ₹10L</td><td>₹5L - ₹10L</td><td>₹5L - ₹10L</td></tr>
                    <tr><td>30% Slab</td><td>Above ₹10L</td><td>Above ₹10L</td><td>Above ₹10L</td></tr>
                </tbody>
            </table></div>

            <h3>Section 87A Rebate</h3>
            <ul>
                <li><strong>New Regime</strong>: Up to ₹60,000 if total taxable income (excluding special-rate income) ≤ ₹12L. Marginal relief from ₹12L to ~₹12.7L.</li>
                <li><strong>Old Regime</strong>: Up to ₹12,500 if total taxable income ≤ ₹5L.</li>
                <li>Rebate <strong>does NOT apply</strong> to Section 111A (STCG equity) or 112A (LTCG equity) tax even if total income is within threshold.</li>
            </ul>

            <h3>Surcharge Tiers</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Income</th><th>New Regime</th><th>Old Regime</th></tr></thead>
                <tbody>
                    <tr><td>Above ₹50L - ₹1cr</td><td>10%</td><td>10%</td></tr>
                    <tr><td>Above ₹1cr - ₹2cr</td><td>15%</td><td>15%</td></tr>
                    <tr><td>Above ₹2cr - ₹5cr</td><td>25%</td><td>25%</td></tr>
                    <tr><td>Above ₹5cr</td><td>25% (capped)</td><td>37%</td></tr>
                </tbody>
            </table></div>

            <p>Plus 4% Health and Education Cess on the total of (tax + surcharge). Marginal relief applies at each surcharge boundary.</p>
        </section>

        <div class="body-cta">
    <h3>Need Help Filing Your ITR?</h3>
    <p>Patron's CAs compute your tax under both regimes, apply every available deduction, and file the right ITR form for FY 2025-26. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Income%20Tax%20Calculator.%20I%20need%20help%20with%20income%20tax%20for%20FY%202025-26.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Income%20Tax%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Income%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20income%20tax%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="cap-gains">
            <h2>Capital Gains Treatment (Post 23 July 2024)</h2>
            <p>The Finance Act 2024 changed capital gains rates effective 23 July 2024. The calculator uses the post-pivot rates for all capital gains inputs, which apply to all sales on or after that date.</p>

            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Asset Type</th><th>Holding Period</th><th>Classification</th><th>Section</th><th>Tax Rate</th></tr></thead>
                <tbody>
                    <tr><td>Listed Equity / Equity MF</td><td>&gt; 12 months</td><td>LTCG</td><td>112A</td><td>12.5% above ₹1.25L exemption</td></tr>
                    <tr><td>Listed Equity / Equity MF</td><td>≤ 12 months</td><td>STCG</td><td>111A</td><td>20% flat</td></tr>
                    <tr><td>Property / Gold / Unlisted</td><td>&gt; 24 months</td><td>LTCG</td><td>112</td><td>12.5% no indexation</td></tr>
                    <tr><td>Debt MF / Property short</td><td>≤ 24 months</td><td>STCG</td><td>—</td><td>Slab rate (added to income)</td></tr>
                </tbody>
            </table></div>

            <h3>How the Calculator Treats Capital Gains</h3>
            <ul>
                <li><strong>Equity LTCG</strong>: Subtracts ₹1.25L annual exemption, applies 12.5% on remainder, adds 4% cess</li>
                <li><strong>Equity STCG</strong>: Applies 20% flat on full amount, adds 4% cess</li>
                <li><strong>Other LTCG</strong>: Applies 12.5% flat (no indexation), adds 4% cess</li>
                <li><strong>Other STCG</strong>: Added to slab-rate income, taxed per regime slabs (this is why it's a separate field)</li>
            </ul>

            <div class="callout">
                <p><strong>Why 4 separate capital gains fields?</strong> Each category has a different tax treatment under different sections of the Income Tax Act. Combining them would result in incorrect tax calculation. If you're unsure how to classify your gains, use the dedicated <a href="/tools/capital-gains-calculator">Capital Gains Calculator</a> with date-based holding period detection.</p>
            </div>

            <div class="callout warn">
                <p><strong>Pre-23-July-2024 sales:</strong> If you sold before this date, the old regime applied (10% LTCG above ₹1L for listed equity, 15% STCG, 20% with indexation for property/unlisted). This calculator uses post-pivot rates only. For pre-pivot sales, consult a CA.</p>
            </div>
        </section>

        <section class="content-section" id="examples">
            <h2>Worked Examples</h2>

            <h3>Example 1 — Salaried with Equity LTCG</h3>
            <p>Salaried, age 32, salary ₹15L, FD interest ₹50K, Equity LTCG ₹2L from mutual funds (held 18 months). New regime. TDS deducted ₹1L.</p>
            <ul>
                <li>Slab income = ₹15L + ₹50K = ₹15.5L. Less ₹75K std ded = ₹14.75L taxable.</li>
                <li>Slab tax: 0 + 20K + 40K + 41,250 (12-14.75 = 2.75L × 15%) = ₹1,01,250.</li>
                <li>87A rebate: income &gt; ₹12L → no rebate.</li>
                <li>Equity LTCG: (₹2L − ₹1.25L) × 12.5% = ₹9,375.</li>
                <li>Total before cess: ₹1,01,250 + ₹9,375 = ₹1,10,625. Cess 4% = ₹4,425.</li>
                <li><strong>Total tax = ₹1,15,050. Less TDS ₹1L = Net payable ₹15,050.</strong></li>
            </ul>

            <h3>Example 2 — Senior with Rental + Other</h3>
            <p>Pensioner, age 65, pension ₹6L, FD interest ₹2L, rental income ₹3L (let-out, home loan interest ₹1L). Old regime. TDS ₹40K.</p>
            <ul>
                <li>House property: ₹3L − 30% std ded = ₹2.1L − ₹1L home loan interest = ₹1.1L</li>
                <li>Total slab income: ₹6L + ₹2L + ₹1.1L = ₹9.1L. Less ₹50K std ded = ₹8.6L taxable.</li>
                <li>Old regime senior slabs: 0(0-3L) + 10K(3L-5L × 5%) + 72K(5L-8.6L × 20%) = ₹82,000.</li>
                <li>87A: income &gt; ₹5L → no rebate.</li>
                <li>Cess 4% = ₹3,280. <strong>Total tax = ₹85,280. Less TDS ₹40K = Net payable ₹45,280.</strong></li>
            </ul>

            <h3>Example 3 — High Earner with All Income Types</h3>
            <p>Salaried, age 45, salary ₹40L, FD interest ₹2L, Equity LTCG ₹5L, Property STCG ₹3L (held 18 months → STCG since &lt; 24 months). New regime. TDS ₹8L.</p>
            <ul>
                <li>Slab income: ₹40L + ₹2L + ₹3L (other STCG added to slab) = ₹45L. Less ₹75K std ded = ₹44.25L taxable.</li>
                <li>Slab tax (new regime): 0+20K+40K+60K+80K+100K + 20.25L × 30% = ₹9,07,500.</li>
                <li>Equity LTCG: (₹5L − ₹1.25L) × 12.5% = ₹46,875.</li>
                <li>Total before cess: ₹9,07,500 + ₹46,875 = ₹9,54,375. Cess 4% = ₹38,175.</li>
                <li><strong>Total tax = ₹9,92,550. Less TDS ₹8L = Net payable ₹1,92,550.</strong></li>
            </ul>

            <div class="callout">
                <p><strong>Why total tax differs from naive estimates:</strong> With salary ₹40L the user might expect tax ~₹6L, but combining with FD interest and other STCG pushes ₹3L of income into the 30% bracket. Plus equity LTCG attracts its own 12.5% tax. The waterfall view in the calculator above shows exactly where each rupee of tax comes from.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is income tax calculated for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Income tax for FY 2025-26 is computed in stages: total all income heads (salary, house property, capital gains, other), apply standard deduction and (if old regime) Chapter VI-A deductions, compute slab tax on the remaining taxable income, apply Section 87A rebate if eligible, add tax on special-rate income (LTCG/STCG), apply surcharge if income exceeds ₹50 lakh, and finally add 4% health and education cess. Net tax payable equals total tax minus TDS already deducted.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between slab-rate and special-rate income?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Slab-rate income includes salary, house property, business income, and other sources — taxed using regime-specific slabs (5%/10%/15%/20%/25%/30%). Special-rate income is taxed at fixed rates regardless of slab — LTCG on listed equity at 12.5% above ₹1.25L (Section 112A), STCG on listed equity at 20% (Section 111A), LTCG on other assets at 12.5% (Section 112). Section 87A rebate applies only to slab-rate income, not to special-rate income.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does Section 87A rebate work in FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 87A provides tax rebate to resident individuals. Under the new regime for FY 2025-26: rebate up to ₹60,000 if total taxable income (excluding special-rate income) does not exceed ₹12,00,000. Marginal relief applies between ₹12L and ~₹12.7L. Under the old regime: rebate up to ₹12,500 if income does not exceed ₹5,00,000. Capital gains taxed under Sections 111A and 112A do not qualify for the rebate even if total income is within the threshold.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>When does surcharge apply on income tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Surcharge applies when total taxable income exceeds ₹50 lakh. Rates: 10% above ₹50L, 15% above ₹1cr, 25% above ₹2cr. Old regime adds a 37% bracket above ₹5cr; new regime caps at 25%. Surcharge is computed on tax (before cess) and is subject to marginal relief at each boundary to ensure additional tax does not exceed additional income. Surcharge rates differ for income types — special-rate capital gains have separate surcharge tables.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the standard deduction for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Standard deduction is available to salaried employees and pensioners. Under the new regime for FY 2025-26: ₹75,000 (raised by Budget 2024 from ₹50,000). Under the old regime: ₹50,000 (unchanged since FY 2019-20). The deduction is automatic — no documentation required. Family pension recipients can claim ₹25,000 or one-third of pension whichever is lower under both regimes. Non-salaried taxpayers do not get the standard deduction.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How are capital gains taxed in FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Capital gains rates from 23 July 2024 onwards: Listed equity LTCG (held over 12 months) under Section 112A — 12.5% above ₹1.25 lakh annual exemption. Listed equity STCG (held under 12 months) under Section 111A — 20% flat. Property/gold/debt mutual fund LTCG (held over 24 months) under Section 112 — 12.5% with no indexation. Other STCG — taxed at slab rates. Capital gains tax is not subject to Section 87A rebate.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is house property income calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For let-out property, gross rental income minus 30% standard deduction (Section 24(a)) minus home loan interest (Section 24(b)) gives net house property income. For self-occupied property, only home loan interest deduction up to ₹2 lakh is allowed (old regime only — new regime does not allow this for self-occupied). House property loss can be set off against other income up to ₹2 lakh; balance carries forward for 8 years.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between TDS and self-assessment tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">TDS (Tax Deducted at Source) is tax deducted by the payer (employer for salary, bank for FD interest) and deposited with the government on your behalf — appears in Form 26AS and AIS. Self-assessment tax is the balance you pay yourself before filing ITR if total tax exceeds TDS plus advance tax. If TDS exceeds your total tax liability, you get a refund. The calculator subtracts TDS to show net payable or refundable amount.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I use this calculator if I have business income?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. This calculator is designed for individuals with salary, house property, capital gains, and other income (interest/dividend). Business or professional income — including freelance, consulting, F&O trading, intraday, partnership share, and crypto — requires different treatment. Use Patron's Section 44ADA Calculator for presumptive professional income, or the ITR Form Selector to determine whether ITR-3 or ITR-4 applies. Consult a CA for complex cases.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are slab rates changing for FY 2026-27?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. Budget 2026 (presented February 2026) made no changes to slab rates, Section 87A rebate amounts, surcharge tiers, or cess. Both old and new regime slabs continue unchanged for FY 2026-27. The Income Tax Act 2025 effective 1 April 2026 retains the substantive tax structure with renumbered references. Section 115BAC moves to Section 202, but rates and thresholds remain the same. The FY toggle in the calculator reflects this — math is identical for both years.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Does this calculator handle foreign income or NRI cases?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. NRI, RNOR, and foreign income cases involve residential status determination under Section 6, DTAA benefits, foreign tax credit via Form 67, Schedule FA disclosure, and Black Money Act compliance — none of which this calculator handles. The calculator routes such cases to the ITR Form Selector tool and CA consultation. Resident Indians with foreign company ESOPs/RSUs also need Schedule FA disclosure regardless of residency status.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is the new regime different from the old regime?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">New regime has lower slab rates (0/5/10/15/20/25/30% with ₹4L exemption) but disallows most deductions like 80C, 80D, HRA, and self-occupied home loan interest. Standard deduction is ₹75,000. Section 87A rebate up to ₹60K makes income up to ₹12L tax-free. Old regime has higher slabs (5/20/30%) but allows all Chapter VI-A deductions, HRA, home loan interest. To compare both, use Patron's Old vs New Regime Calculator.</div></div></div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Filed ITR for FY 2025-26</h3>
    <p>Get your tax computed and ITR filed by a Chartered Accountant — old vs new regime planning included — fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Income%20Tax%20Calculator.%20I%20need%20help%20with%20income%20tax%20for%20FY%202025-26.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Income%20Tax%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Income%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20income%20tax%20for%20FY%202025-26.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/itr-filing-for-salary" class="sidebar-link">ITR for Salary <span class="arrow">→</span></a>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/itr-filing-for-freelancers-professionals" class="sidebar-link">ITR for Freelancers / Professionals <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Help <span class="arrow">→</span></a>
            <a href="/zoho-books-accounting" class="sidebar-link">Zoho Books Accounting <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/old-vs-new-regime-calculator" class="sidebar-link">Old vs New Regime Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-87a-rebate-calculator" class="sidebar-link">Section 87A Rebate Calculator <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
            <a href="/tools/itr-form-selector" class="sidebar-link">ITR Form Selector <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/old-regime-vs-regime-ay-2026-27" class="sidebar-link">Old vs New Regime AY 2026-27 <span class="arrow">→</span></a>
            <a href="/blog/income-tax-old-regime-2026-it-rules-changed-math" class="sidebar-link">Income Tax Old Regime 2026 Math <span class="arrow">→</span></a>
            <a href="/blog/tax-efficient-salary-structure-india-employers-guide" class="sidebar-link">Tax-Efficient Salary Structure <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

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

    let fy = '2025-26';
    let regime = 'new';
    let ageGroup = 'below60';
    let incomeType = 'salaried';

    function fmtINR(num) {
        if (!isFinite(num)) return '—';
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }

    function setFY(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        fy = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function setRegime(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        regime = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
        // Toggle deductions section visibility
        const ds = document.getElementById('deductionsSection');
        if (regime === 'new') ds.classList.add('disabled');
        else ds.classList.remove('disabled');
    }

    function setAge(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        ageGroup = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function setIncomeType(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        incomeType = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function computeNewRegimeTax(taxable) {
        if (taxable <= 0) return 0;
        const slabs = [[400000, 0], [800000, 0.05], [1200000, 0.10], [1600000, 0.15], [2000000, 0.20], [2400000, 0.25], [Infinity, 0.30]];
        let tax = 0, prev = 0;
        for (const [limit, rate] of slabs) {
            if (taxable <= limit) { tax += (taxable - prev) * rate; break; }
            tax += (limit - prev) * rate;
            prev = limit;
        }
        return tax;
    }

    function computeOldRegimeTax(taxable, ageIn) {
        if (taxable <= 0) return 0;
        let exempt;
        if (ageIn === 'supersenior') exempt = 500000;
        else if (ageIn === 'senior') exempt = 300000;
        else exempt = 250000;
        const slabs = [[exempt, 0], [500000, 0.05], [1000000, 0.20], [Infinity, 0.30]];
        let tax = 0, prev = 0;
        for (const [limit, rate] of slabs) {
            if (limit < prev) continue;
            if (taxable <= limit) {
                tax += Math.max(0, taxable - Math.max(prev, 0)) * rate;
                break;
            }
            tax += Math.max(0, limit - Math.max(prev, 0)) * rate;
            prev = limit;
        }
        return tax;
    }

    function applyRebate87A(income, taxBeforeRebate, regimeIn) {
        if (regimeIn === 'new' && income <= 1200000) {
            return Math.max(0, taxBeforeRebate - Math.min(60000, taxBeforeRebate));
        }
        if (regimeIn === 'old' && income <= 500000) {
            return Math.max(0, taxBeforeRebate - Math.min(12500, taxBeforeRebate));
        }
        if (regimeIn === 'new' && income > 1200000 && income <= 1300000) {
            const excess = income - 1200000;
            if (taxBeforeRebate > excess) return excess;
        }
        return taxBeforeRebate;
    }

    function applySurcharge(tax, income, regimeIn) {
        let rate = 0;
        if (income > 50000000) rate = (regimeIn === 'new') ? 0.25 : 0.37;
        else if (income > 20000000) rate = 0.25;
        else if (income > 10000000) rate = 0.15;
        else if (income > 5000000) rate = 0.10;
        return tax * (1 + rate);
    }

    function calculate() {
        // Check routing flags first
        const flagBusiness = document.getElementById('flagBusiness').checked;
        const flagForeign = document.getElementById('flagForeign').checked;
        const flagNRI = document.getElementById('flagNRI').checked;
        const flagCrypto = document.getElementById('flagCrypto').checked;

        const resultArea = document.getElementById('resultArea');

        if (flagBusiness || flagForeign || flagNRI || flagCrypto) {
            renderRoutingCard(flagBusiness, flagForeign, flagNRI, flagCrypto);
        } else {
            renderTaxResult();
        }

        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => { rs.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 100);
    }

    function renderRoutingCard(business, foreign, nri, crypto) {
        let html = '<div class="routing-card">';
        html += '<h3>⚠ Your case needs different tools</h3>';
        html += '<p>You ticked one or more out-of-scope flags. This calculator handles standard salaried/rental/capital gains cases. Here are the right tools for your situation:</p>';
        html += '<div class="rt-options">';

        if (business) {
            html += '<div class="rt-option"><strong>Business / Professional Income</strong>';
            html += '<p>Use Section 44ADA Calculator (presumptive professional income) or ITR Form Selector to determine ITR-3 vs ITR-4 eligibility.</p>';
            html += '<a href="/tools/section-44ada-calculator">Section 44ADA Calculator →</a> &nbsp; ';
            html += '<a href="/tools/itr-form-selector">ITR Form Selector →</a></div>';
        }
        if (foreign) {
            html += '<div class="rt-option"><strong>Foreign Income / Foreign Assets</strong>';
            html += '<p>Schedule FA disclosure mandatory. Foreign tax credit via Form 67. Black Money Act applies. CA consultation strongly recommended.</p>';
            html += '<a href="/tools/itr-form-selector">ITR Form Selector →</a> &nbsp; ';
            html += '<a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20help%20with%20foreign%20income%20ITR%20filing%20for%20FY%202025-26.">Talk to a CA →</a></div>';
        }
        if (nri) {
            html += '<div class="rt-option"><strong>NRI / RNOR Status</strong>';
            html += '<p>Residential status determination, DTAA benefits, Schedule TR for tax relief, and Schedule FA all needed. Specialized handling required.</p>';
            html += '<a href="/tools/itr-form-selector">ITR Form Selector →</a> &nbsp; ';
            html += '<a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20NRI%2FRNOR%20ITR%20help%20for%20FY%202025-26.">Talk to a CA →</a></div>';
        }
        if (crypto) {
            html += '<div class="rt-option"><strong>Crypto / VDA Income</strong>';
            html += '<p>Section 115BBH flat 30% taxation. No loss set-off. Schedule VDA mandatory. Classification (investment vs business) affects ITR form choice.</p>';
            html += '<a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20help%20with%20crypto%2FVDA%20tax%20filing%20for%20FY%202025-26.">Talk to a CA →</a></div>';
        }

        html += '</div></div>';
        document.getElementById('resultArea').innerHTML = html;
    }

    function renderTaxResult() {
        const salary = parseINR(document.getElementById('salaryIncome').value) || 0;
        const otherIncome = parseINR(document.getElementById('otherIncome').value) || 0;
        const rental = parseINR(document.getElementById('rentalIncome').value) || 0;
        const homeLoan = parseINR(document.getElementById('homeLoanInterest').value) || 0;
        const cgEquityLTCG = parseINR(document.getElementById('cgEquityLTCG').value) || 0;
        const cgEquitySTCG = parseINR(document.getElementById('cgEquitySTCG').value) || 0;
        const cgOtherLTCG = parseINR(document.getElementById('cgOtherLTCG').value) || 0;
        const cgOtherSTCG = parseINR(document.getElementById('cgOtherSTCG').value) || 0;
        const ded80c = Math.min(150000, parseINR(document.getElementById('ded80c').value) || 0);
        const ded80d = parseINR(document.getElementById('ded80d').value) || 0;
        const ded80ccd = Math.min(50000, parseINR(document.getElementById('ded80ccd').value) || 0);
        const hra = parseINR(document.getElementById('hraExemption').value) || 0;
        const otherDed = parseINR(document.getElementById('otherDeductions').value) || 0;
        const tdsDeducted = parseINR(document.getElementById('tdsDeducted').value) || 0;

        if (salary <= 0 && otherIncome <= 0 && rental <= 0 && cgEquityLTCG <= 0 && cgEquitySTCG <= 0 && cgOtherLTCG <= 0 && cgOtherSTCG <= 0) {
            document.getElementById('resultArea').innerHTML = '<div class="info-banner info">Please enter at least one income source above.</div>';
            return;
        }

        // === HOUSE PROPERTY ===
        // Rental income: 30% std deduction, less home loan interest
        // For self-occupied (no rental), home loan up to ₹2L deduction (old regime only)
        let housePropertyIncome = 0;
        let housePropertyDetail = '';
        if (rental > 0) {
            const rentalAfterStd = rental * 0.7;
            const homeLoanForRental = (regime === 'old') ? homeLoan : homeLoan; // Let-out home loan allowed in both
            housePropertyIncome = rentalAfterStd - homeLoanForRental;
            housePropertyDetail = 'Let-out: ' + fmtINR(rental) + ' − 30% std ded − ' + fmtINR(homeLoanForRental) + ' interest = ' + fmtINR(housePropertyIncome);
        } else if (homeLoan > 0 && regime === 'old') {
            // Self-occupied with home loan — old regime allows up to ₹2L deduction (negative income)
            housePropertyIncome = -Math.min(200000, homeLoan);
            housePropertyDetail = 'Self-occupied: home loan interest capped at ₹2L = -' + fmtINR(Math.abs(housePropertyIncome));
        }

        // === SLAB INCOME ===
        const grossSlabIncome = salary + otherIncome + housePropertyIncome + cgOtherSTCG;

        // Standard deduction
        const stdDed = (incomeType === 'salaried') ? (regime === 'new' ? 75000 : 50000) : 0;

        // Old regime additional deductions
        const totalOldDeductions = (regime === 'old') ? (ded80c + ded80d + ded80ccd + hra + otherDed) : 0;

        const taxableSlabIncome = Math.max(0, grossSlabIncome - stdDed - totalOldDeductions);

        // Slab tax
        const baseTax = (regime === 'new') ? computeNewRegimeTax(taxableSlabIncome) : computeOldRegimeTax(taxableSlabIncome, ageGroup);
        const afterRebate = applyRebate87A(taxableSlabIncome, baseTax, regime);
        const rebateAmount = baseTax - afterRebate;

        // === SPECIAL RATE TAX ===
        const ltcgEquityExemption = Math.min(cgEquityLTCG, 125000);
        const ltcgEquityTaxable = Math.max(0, cgEquityLTCG - 125000);
        const taxLTCGEquity = ltcgEquityTaxable * 0.125;
        const taxSTCGEquity = cgEquitySTCG * 0.20;
        const taxOtherLTCG = cgOtherLTCG * 0.125;
        const totalSpecialRateTax = taxLTCGEquity + taxSTCGEquity + taxOtherLTCG;

        // === SURCHARGE & CESS ===
        const taxBeforeSurcharge = afterRebate + totalSpecialRateTax;
        const totalIncomeForSurcharge = grossSlabIncome + cgEquityLTCG + cgEquitySTCG + cgOtherLTCG;
        const afterSurcharge = applySurcharge(taxBeforeSurcharge, totalIncomeForSurcharge, regime);
        const surchargeAmount = afterSurcharge - taxBeforeSurcharge;
        const cess = afterSurcharge * 0.04;
        const totalTax = Math.round(afterSurcharge + cess);

        // === NET PAYABLE / REFUND ===
        const netPayable = totalTax - tdsDeducted;
        const isRefund = netPayable < 0;

        // === RENDER ===
        let html = '';

        // Net card (most prominent)
        html += '<div class="net-card' + (isRefund ? ' refund' : '') + '">';
        html += '<div class="nc-label">' + (isRefund ? 'Expected Refund' : 'Net Tax Payable') + '</div>';
        html += '<div class="nc-amount">' + fmtINR(Math.abs(netPayable)) + '</div>';
        html += '<div class="nc-status">';
        if (tdsDeducted === 0) {
            html += 'No TDS entered — full amount due as self-assessment tax before filing ITR';
        } else if (isRefund) {
            html += 'Total tax ' + fmtINR(totalTax) + ' is less than TDS deducted ' + fmtINR(tdsDeducted) + ' — claim refund in ITR';
        } else if (netPayable === 0) {
            html += 'TDS exactly covers tax liability — no further payment or refund';
        } else {
            html += 'Total tax ' + fmtINR(totalTax) + ' minus TDS ' + fmtINR(tdsDeducted) + ' = balance to pay before filing';
        }
        html += '</div></div>';

        // Cards row
        html += '<div class="result-cards">';
        html += '<div class="result-card"><div class="rc-label">Total Tax Liability</div><div class="rc-value">' + fmtINR(totalTax) + '</div><div class="rc-sub">Slab + Special-Rate + Surcharge + Cess</div></div>';
        html += '<div class="result-card"><div class="rc-label">Taxable Slab Income</div><div class="rc-value">' + fmtINR(taxableSlabIncome) + '</div><div class="rc-sub">After deductions, before special-rate income</div></div>';
        html += '<div class="result-card"><div class="rc-label">Tax on Slab Income</div><div class="rc-value">' + fmtINR(afterRebate) + '</div><div class="rc-sub">After 87A rebate of ' + fmtINR(rebateAmount) + '</div></div>';
        html += '<div class="result-card"><div class="rc-label">Tax on Capital Gains</div><div class="rc-value">' + fmtINR(totalSpecialRateTax) + '</div><div class="rc-sub">Special rates: 12.5% / 20% / slab</div></div>';
        html += '</div>';

        // Show details button
        html += '<button class="show-details-btn" onclick="toggleWaterfall()">Show full breakdown ▾</button>';

        // Waterfall (hidden by default)
        html += '<div class="waterfall" id="waterfall">';

        // Income section
        html += '<div class="waterfall-section"><div class="ws-head">Step 1 — Gross Income</div>';
        if (salary > 0) html += '<div class="wf-row"><span class="lbl">Gross Salary</span><span class="val">' + fmtINR(salary) + '</span></div>';
        if (otherIncome > 0) html += '<div class="wf-row"><span class="lbl">Other Income (interest/dividend)</span><span class="val">' + fmtINR(otherIncome) + '</span></div>';
        if (housePropertyIncome !== 0) {
            html += '<div class="wf-row"><span class="lbl">House Property (net)</span><span class="val">' + fmtINR(housePropertyIncome) + '</span></div>';
            html += '<div class="wf-row indent"><span class="lbl">' + housePropertyDetail + '</span><span class="val"></span></div>';
        }
        if (cgOtherSTCG > 0) html += '<div class="wf-row"><span class="lbl">Other STCG (taxed at slab)</span><span class="val">' + fmtINR(cgOtherSTCG) + '</span></div>';
        html += '<div class="wf-row subtotal"><span class="lbl">Gross Slab Income</span><span class="val">' + fmtINR(grossSlabIncome) + '</span></div>';
        html += '</div>';

        // Deductions section
        html += '<div class="waterfall-section"><div class="ws-head">Step 2 — Deductions</div>';
        if (stdDed > 0) html += '<div class="wf-row minus"><span class="lbl">Standard Deduction</span><span class="val">−' + fmtINR(stdDed) + '</span></div>';
        if (regime === 'old') {
            if (ded80c > 0) html += '<div class="wf-row minus"><span class="lbl">Section 80C</span><span class="val">−' + fmtINR(ded80c) + '</span></div>';
            if (ded80d > 0) html += '<div class="wf-row minus"><span class="lbl">Section 80D</span><span class="val">−' + fmtINR(ded80d) + '</span></div>';
            if (ded80ccd > 0) html += '<div class="wf-row minus"><span class="lbl">Section 80CCD(1B) NPS</span><span class="val">−' + fmtINR(ded80ccd) + '</span></div>';
            if (hra > 0) html += '<div class="wf-row minus"><span class="lbl">HRA Exemption</span><span class="val">−' + fmtINR(hra) + '</span></div>';
            if (otherDed > 0) html += '<div class="wf-row minus"><span class="lbl">Other Deductions</span><span class="val">−' + fmtINR(otherDed) + '</span></div>';
        }
        html += '<div class="wf-row subtotal"><span class="lbl">Taxable Slab Income</span><span class="val">' + fmtINR(taxableSlabIncome) + '</span></div>';
        html += '</div>';

        // Slab tax section
        html += '<div class="waterfall-section"><div class="ws-head">Step 3 — Slab Tax (' + (regime === 'new' ? 'New' : 'Old') + ' Regime)</div>';
        html += '<div class="wf-row"><span class="lbl">Tax per slab rates</span><span class="val">' + fmtINR(baseTax) + '</span></div>';
        if (rebateAmount > 0) html += '<div class="wf-row minus"><span class="lbl">Less: Section 87A Rebate</span><span class="val">−' + fmtINR(rebateAmount) + '</span></div>';
        html += '<div class="wf-row subtotal"><span class="lbl">Slab Tax After Rebate</span><span class="val">' + fmtINR(afterRebate) + '</span></div>';
        html += '</div>';

        // Special rate tax
        if (totalSpecialRateTax > 0) {
            html += '<div class="waterfall-section"><div class="ws-head">Step 4 — Capital Gains Tax (Special Rates)</div>';
            if (cgEquityLTCG > 0) {
                html += '<div class="wf-row"><span class="lbl">Equity LTCG ' + fmtINR(cgEquityLTCG) + ' less ₹1.25L exemption</span><span class="val">' + fmtINR(ltcgEquityTaxable) + '</span></div>';
                html += '<div class="wf-row indent"><span class="lbl">Tax @ 12.5% (Sec 112A)</span><span class="val">' + fmtINR(taxLTCGEquity) + '</span></div>';
            }
            if (cgEquitySTCG > 0) {
                html += '<div class="wf-row"><span class="lbl">Equity STCG ' + fmtINR(cgEquitySTCG) + ' @ 20% (Sec 111A)</span><span class="val">' + fmtINR(taxSTCGEquity) + '</span></div>';
            }
            if (cgOtherLTCG > 0) {
                html += '<div class="wf-row"><span class="lbl">Other LTCG ' + fmtINR(cgOtherLTCG) + ' @ 12.5% (Sec 112)</span><span class="val">' + fmtINR(taxOtherLTCG) + '</span></div>';
            }
            html += '<div class="wf-row subtotal"><span class="lbl">Total Capital Gains Tax</span><span class="val">' + fmtINR(totalSpecialRateTax) + '</span></div>';
            html += '</div>';
        }

        // Surcharge + cess
        html += '<div class="waterfall-section"><div class="ws-head">Step 5 — Surcharge &amp; Cess</div>';
        html += '<div class="wf-row"><span class="lbl">Tax before surcharge</span><span class="val">' + fmtINR(taxBeforeSurcharge) + '</span></div>';
        if (surchargeAmount > 0) html += '<div class="wf-row plus"><span class="lbl">Add: Surcharge</span><span class="val">+' + fmtINR(surchargeAmount) + '</span></div>';
        html += '<div class="wf-row plus"><span class="lbl">Add: Health &amp; Education Cess (4%)</span><span class="val">+' + fmtINR(cess) + '</span></div>';
        html += '<div class="wf-row subtotal"><span class="lbl">Total Tax Liability</span><span class="val">' + fmtINR(totalTax) + '</span></div>';
        html += '</div>';

        // Net payable
        html += '<div class="waterfall-section"><div class="ws-head">Step 6 — Net Payable / Refund</div>';
        html += '<div class="wf-row"><span class="lbl">Total Tax Liability</span><span class="val">' + fmtINR(totalTax) + '</span></div>';
        html += '<div class="wf-row minus"><span class="lbl">Less: TDS Already Deducted</span><span class="val">−' + fmtINR(tdsDeducted) + '</span></div>';
        html += '<div class="wf-row subtotal"><span class="lbl">' + (isRefund ? 'Expected Refund' : 'Net Tax Payable') + '</span><span class="val">' + fmtINR(Math.abs(netPayable)) + '</span></div>';
        html += '</div>';

        html += '</div>';

        document.getElementById('resultArea').innerHTML = html;
    }

    function toggleWaterfall() {
        const wf = document.getElementById('waterfall');
        const btn = document.querySelector('.show-details-btn');
        if (wf.classList.contains('visible')) {
            wf.classList.remove('visible');
            btn.textContent = 'Show full breakdown ▾';
        } else {
            wf.classList.add('visible');
            btn.textContent = 'Hide full breakdown ▴';
        }
    }

    function resetCalc() {
        ['salaryIncome', 'otherIncome', 'rentalIncome', 'homeLoanInterest', 'cgEquityLTCG', 'cgEquitySTCG', 'cgOtherLTCG', 'cgOtherSTCG', 'ded80c', 'ded80d', 'ded80ccd', 'hraExemption', 'otherDeductions', 'tdsDeducted'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.value = (id === 'salaryIncome') ? '' : '0';
        });
        ['flagBusiness', 'flagForeign', 'flagNRI', 'flagCrypto'].forEach(id => {
            document.getElementById(id).checked = false;
        });
        fy = '2025-26'; regime = 'new'; ageGroup = 'below60'; incomeType = 'salaried';
        document.querySelectorAll('.toggle-group').forEach(g => {
            const btns = g.querySelectorAll('.toggle-btn');
            btns.forEach(b => b.classList.remove('active'));
            btns[0].classList.add('active');
        });
        document.getElementById('deductionsSection').classList.add('disabled');
        document.getElementById('resultSection').classList.remove('visible');
        document.querySelector('.calc-card').scrollIntoView({behavior:'smooth',block:'start'});
    }

    function toggleFaq(e) {
        const btn = e.closest ? (e.closest('.faq-question') || e) : e;
        const item = btn.closest('.faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }

    // Initial state — new regime so deductions disabled
    document.getElementById('deductionsSection').classList.add('disabled');

    ['salaryIncome', 'otherIncome', 'rentalIncome', 'homeLoanInterest', 'cgEquityLTCG', 'cgEquitySTCG', 'cgOtherLTCG', 'cgOtherSTCG', 'ded80c', 'ded80d', 'ded80ccd', 'hraExemption', 'otherDeductions', 'tdsDeducted'].forEach(id => {
        const el = document.getElementById(id);
        if (el) el.addEventListener('keydown', e => { if (e.key === 'Enter') calculate(); });
    });

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
