@extends('layouts.app')
@section('meta')
<title>ESOP Cost to Company Calculator | Ind AS 102 Expense</title>
<meta name="description" content="ESOP cost-to-company calculator under Ind AS 102: get the P&amp;L expense, forfeiture-adjusted total and separate-grant vs straight-line year-wise working. Try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-cost-to-company-calculator">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-cost-to-company-calculator">
<meta property="og:title" content="ESOP Cost to Company Calculator — Ind AS 102 Tool 2026">
<meta property="og:description" content="Calculate ESOP cost-to-company under Ind AS 102: P&amp;L expense, forfeiture-adjusted total, separate-grant vs straight-line, year-by-year working.">
<meta property="og:image" content="/og/esop-cost-to-company-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP Cost to Company Calculator — Ind AS 102 Tool 2026">
<meta name="twitter:description" content="Calculate ESOP cost-to-company under Ind AS 102: P&amp;L expense, forfeiture-adjusted total, year-by-year working.">
<meta name="twitter:image" content="/og/esop-cost-to-company-calculator.jpg">

<!-- Favicons -->
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
<!-- Schema: SoftwareApplication -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP Cost to Company Calculator",
  "description": "ESOP Cost to Company Calculator computes the annual P&L expense and total cost-to-company of employee stock options under Ind AS 102. Takes number of options granted, fair value per option, exercise price, vesting schedule, and expected forfeiture rate. Outputs forfeiture-adjusted total cost, separate-grant vs straight-line year-by-year expense breakdown, and cash versus accounting cost differentiation for Indian listed and unlisted companies.",
  "url": "/tools/esop-cost-to-company-calculator",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Any",
  "inLanguage": "en-IN",
  "isAccessibleForFree": true,
  "datePublished": "2026-05-14T08:00:00+05:30",
  "dateModified": "2026-05-14T08:00:00+05:30",
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
      "name": "Fellow Chartered Accountant (FCA)",
      "recognizedBy": {
        "@type": "Organization",
        "name": "Institute of Chartered Accountants of India",
        "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
      }
    }]
  },
  "publisher": {
    "@id": "/#organization"
  },
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
    {"@type": "ListItem", "position": 3, "name": "ESOP Cost to Company Calculator", "item": "/tools/esop-cost-to-company-calculator"}
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
      "name": "What is the cost-to-company of an ESOP under Ind AS 102?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under Ind AS 102 Share-Based Payment, the cost-to-company of an ESOP is the total fair value of the options granted, measured at the grant date using an option pricing model such as Black-Scholes or Binomial. This total fair value is recognised as an employee compensation expense in the Profit and Loss Account over the vesting period, with an equal credit to a Share Options Outstanding equity reserve."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ESOP P&L expense a cash cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The Ind AS 102 ESOP expense is a non-cash employee benefit cost. The corresponding credit goes to a Share Options Outstanding equity reserve, not to cash. Cash impact arises only at exercise when employees pay the exercise price to the company, which increases the share capital and securities premium. EBITDA is unaffected if ESOP expense is shown above the EBITDA line."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between fair value and intrinsic value of an ESOP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Intrinsic value is simply the Fair Market Value of the share minus the exercise price on the grant date. Fair value under Ind AS 102 is the full economic value of the option determined using Black-Scholes or Binomial models, factoring volatility, expected life, risk-free rate, and dividends. Fair value is always equal to or higher than intrinsic value and is mandatory under Ind AS 102."
      }
    },
    {
      "@type": "Question",
      "name": "Should I use the separate-grant or straight-line method for graded vesting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ind AS 102 and the ICAI Guidance Note on Accounting for Share-Based Payments (2020) require the separate-grant approach for graded vesting. Each tranche is treated as a separate award and expensed over its own vesting period. This front-loads the cost — about 52% of the total expense for a 4-year 25/25/25/25 vest is recognised in Year 1 versus 25% under straight-line."
      }
    },
    {
      "@type": "Question",
      "name": "How does forfeiture affect the ESOP P&L expense?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "At each reporting date, the company revises its estimate of options expected to vest based on actual and expected forfeitures. The cumulative expense is adjusted to reflect only options likely to vest. Service-condition forfeitures (employee leaving) reduce expense. Market-condition forfeitures (share price not reaching a target) do not reverse expense already recognised, because market conditions are baked into grant-date fair value."
      }
    },
    {
      "@type": "Question",
      "name": "Who needs to apply Ind AS 102 in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ind AS 102 applies to companies covered by the Ind AS roadmap notified by MCA — listed companies and unlisted companies with net worth above ₹250 crore. Other companies follow the ICAI Guidance Note on Accounting for Share-Based Payments (2020) under Indian GAAP. The principles are broadly similar but disclosure and measurement details vary. Both require fair-value expense recognition."
      }
    },
    {
      "@type": "Question",
      "name": "Is fair value re-measured every year for ESOPs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. For equity-settled share-based payments such as ESOPs, fair value is measured once at the grant date and not re-measured subsequently. Only the number of options expected to vest is revised. For cash-settled share-based payments such as Stock Appreciation Rights, the fair value of the liability is re-measured at each reporting date and at settlement, with changes recognised in profit or loss."
      }
    },
    {
      "@type": "Question",
      "name": "What inputs are needed for Black-Scholes ESOP valuation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Six inputs are mandatory under Ind AS 102: current share price (Fair Market Value at grant), exercise price, expected term of the option, expected volatility of the share price, risk-free interest rate (typically Indian government bond yield for matching maturity), and expected dividend yield. Unlisted companies estimate volatility using comparable listed peers' historical volatility, usually over 3 to 5 years."
      }
    },
    {
      "@type": "Question",
      "name": "Does ESOP expense reduce taxable profit in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ESOP expense recognised under Ind AS 102 is generally allowed as a tax-deductible employee compensation expense under Section 37(1) of the Income-tax Act, 1961, but only when actually incurred — typically at the time of exercise when the perquisite tax is triggered for the employee. Book expense recognised during the vesting period may need to be added back and deduction claimed at exercise. CA review is essential."
      }
    },
    {
      "@type": "Question",
      "name": "What disclosures does Ind AS 102 require for ESOPs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Companies must disclose: a description of each share-based payment arrangement, the number and weighted average exercise prices of options outstanding/granted/vested/exercised/forfeited during the year, the weighted average remaining contractual life of options outstanding, the valuation model and inputs used (volatility, risk-free rate, expected term, dividend yield), and the total ESOP expense recognised in profit or loss for the period."
      }
    },
    {
      "@type": "Question",
      "name": "How are SAR (Stock Appreciation Rights) accounted for differently?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Stock Appreciation Rights are cash-settled share-based payments under Ind AS 102. Unlike ESOPs, the liability is re-measured at fair value at each reporting date and at settlement, with all changes routed through the Profit and Loss Account. SARs do not dilute equity but create a real cash outflow at settlement, making P&L volatility higher than for equity-settled ESOPs. The same Black-Scholes model is used with appropriate inputs."
      }
    },
    {
      "@type": "Question",
      "name": "How does this calculator handle the fair-value input?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The calculator lets you enter fair value per option directly from your Black-Scholes or Binomial valuation report — the recommended Ind AS 102 path. If you do not have a valuer's report, you can use intrinsic value (FMV minus exercise price) as a rough approximation, but this understates the true cost. Always obtain a SEBI-registered Merchant Banker or IBBI-registered Valuer report for audit-ready financials."
      }
    },
    {
      "@type": "Question",
      "name": "Is this ESOP Cost Calculator audit-ready?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This calculator gives directional working in line with Ind AS 102 principles, useful for budgeting, board discussions, and preliminary cost estimation. It is not a substitute for a Black-Scholes valuation report by a registered valuer or merchant banker, which is mandatory for audit. Patron Accounting provides full ESOP valuation, accounting policy, and disclosure support to make financials audit-ready under Ind AS 102."
      }
    }
  ]
}
</script>
@endsection
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

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

/* TOC NAV */
.toc-nav { background: var(--primary-dark); position: sticky; top: 0; z-index: 100; overflow-x: auto; white-space: nowrap; -webkit-overflow-scrolling: touch; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
.toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
.toc-nav a { color: rgba(255,255,255,0.75); text-decoration: none; font-size: 13px; font-weight: 500; padding: 12px 16px; transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block; }
.toc-nav a:hover, .toc-nav a.active { color: #fff; border-bottom-color: var(--accent); }

/* BREADCRUMB */
.breadcrumb { max-width: 1200px; margin: 0 auto; padding: 16px 20px 0; font-size: 13px; color: var(--text-muted); }
.breadcrumb a { color: var(--primary-light); text-decoration: none; }
.breadcrumb a:hover { text-decoration: underline; }
.breadcrumb span { margin: 0 6px; }

/* HERO */
.hero { max-width: 1200px; margin: 0 auto; padding: 32px 20px 24px; }
.hero-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 16px; }
.badge-updated { background: var(--primary); color: #fff; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px; letter-spacing: 0.3px; }
.author-byline { font-size: 13px; color: var(--text-secondary); }
.author-byline strong { color: var(--primary); font-weight: 600; }
.hero h1 { font-size: clamp(28px, 5vw, 42px); font-weight: 700; color: var(--primary-dark); line-height: 1.2; margin-bottom: 16px; }
.hero h1 span { color: var(--accent); display: inline; }

/* PEACH CTA BAR */
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

/* POST-RESULT */
.post-result-cta { background: #FFF7ED; border: 1px solid #FED7AA; border-left: 4px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin: 20px 0 4px; }
.post-result-cta-head { font-size: 15px; font-weight: 700; color: var(--text); margin-bottom: 4px; line-height: 1.4; }
.post-result-cta-sub { font-size: 13px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.55; }
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

/* MID-BODY */
.body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 32px; margin: 24px 0 32px; text-align: center; }
.body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 8px; font-weight: 700; }
.body-cta p { color: rgba(255,255,255,0.85); margin-bottom: 18px; line-height: 1.6; font-size: 14px; }

/* TL;DR */
.tldr { background: var(--card); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 20px 24px; margin: 0 auto 32px; max-width: 1200px; box-shadow: var(--shadow-sm); }
.tldr-label { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
.tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }

/* LAYOUT */
.main-layout { max-width: 1200px; margin: 0 auto; padding: 0 20px 40px; display: grid; grid-template-columns: 1fr; gap: 32px; }
@media (min-width: 768px) { .main-layout { grid-template-columns: 1fr 320px; gap: 40px; } }
.content-col { min-width: 0; }
.sidebar-col { min-width: 0; }

/* CALC CARD */
.calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
.calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
.calc-card .sub { font-size: 13px; color: var(--text-muted); margin-bottom: 22px; }
.calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
@media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; } }
.form-group label { display: block; font-size: 12px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
.form-group label .hint { display: block; font-size: 11px; color: var(--text-muted); font-weight: 500; text-transform: none; letter-spacing: 0; margin-top: 2px; }
.form-group input, .form-group select {
    width: 100%; padding: 12px 16px;
    border: 2px solid var(--border); border-radius: var(--radius);
    font-family: var(--font-body); font-size: 16px; color: var(--text);
    background: var(--surface);
    outline: 2px solid transparent; outline-offset: 1px;
    transition: border-color 0.2s;
}
.form-group input:focus-visible, .form-group select:focus-visible { border-color: var(--primary); outline-color: var(--primary); }
.form-group input[type="number"], .form-group input[type="text"] { font-family: var(--font-mono); font-size: 17px; font-weight: 700; }
.section-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1.5px; margin: 24px 0 12px; padding-bottom: 6px; border-bottom: 1px dashed var(--border); }

.toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; }
.toggle-btn { flex: 1 1 30%; padding: 10px 14px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-height: 44px; }
.toggle-btn * { pointer-events: none; }
.toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
.toggle-btn:focus-visible { outline: 2px solid var(--primary); outline-offset: 2px; }

.btn-calculate { width: 100%; padding: 16px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 12px; min-height: 52px; }
.btn-calculate:hover { background: var(--primary-light); }
.btn-calculate:active { transform: scale(0.98); }
.btn-calculate:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }

/* RESULTS */
.result-section { margin-top: 28px; display: none; }
.result-section.visible { display: block; }
.result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
.result-headline { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; padding: 24px 28px; border-radius: var(--radius); margin-bottom: 16px; }
.result-headline .label { font-family: var(--font-mono); font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; opacity: 0.85; margin-bottom: 6px; }
.result-headline .value { font-family: var(--font-mono); font-size: 32px; font-weight: 700; line-height: 1.1; margin-bottom: 6px; word-break: break-word; }
.result-headline .accent { color: var(--accent-light); }
.result-headline .meta { font-size: 13px; opacity: 0.9; margin-top: 6px; }

.summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 16px; }
@media (min-width: 600px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
.summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px 18px; border: 1px solid var(--border); }
.summary-card .v-label { font-family: var(--font-mono); font-size: 10px; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; font-weight: 700; margin-bottom: 4px; }
.summary-card .v-val { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); word-break: break-word; }
.summary-card .v-desc { font-size: 12px; color: var(--text-secondary); margin-top: 4px; line-height: 1.5; }

.year-table { background: var(--surface-alt); border-radius: var(--radius); padding: 18px 22px; margin-top: 16px; overflow-x: auto; }
.year-table h4 { font-family: var(--font-mono); font-size: 11px; color: var(--accent); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 12px; font-weight: 700; }
.year-table table { width: 100%; border-collapse: collapse; font-size: 13px; }
.year-table th { text-align: left; padding: 8px 8px; color: var(--primary-dark); font-weight: 700; border-bottom: 2px solid var(--border); font-family: var(--font-mono); font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
.year-table td { padding: 8px 8px; border-bottom: 1px dashed var(--border); font-family: var(--font-mono); color: var(--text-secondary); }
.year-table td.numeric { text-align: right; font-weight: 700; color: var(--primary-dark); }
.year-table tfoot td { font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--border); border-bottom: none; background: var(--card); }

.cash-vs-accounting { background: #F0F5FB; border-left: 4px solid var(--primary-light); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin-top: 16px; }
.cash-vs-accounting strong { color: var(--primary-dark); }
.cash-vs-accounting p { color: var(--primary-dark); font-size: 13px; margin-bottom: 6px; line-height: 1.6; }
.cash-vs-accounting p:last-child { margin-bottom: 0; }

.btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 14px; padding: 10px 18px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; min-height: 44px; }
.btn-reset:hover { border-color: var(--danger); color: var(--danger); }
.btn-reset:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }
.btn-print { display: inline-flex; align-items: center; gap: 6px; margin-top: 14px; margin-left: 8px; padding: 10px 18px; border: 1px solid var(--primary); border-radius: 8px; background: var(--card); color: var(--primary); font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.2s; min-height: 44px; }
.btn-print:hover { background: var(--primary); color: #fff; }
.btn-print:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }

.error-banner { display: none; background: #FEE2E2; border-left: 4px solid var(--danger); border-radius: 0 var(--radius) var(--radius) 0; padding: 12px 16px; margin-bottom: 16px; color: #991B1B; font-size: 13px; font-weight: 600; }
.error-banner.visible { display: block; }

/* CONTENT */
.content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
.content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
.content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
.content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
.content-section ul, .content-section ol { margin: 0 0 14px 20px; }
.content-section li { font-size: 15px; color: var(--text-secondary); margin-bottom: 8px; line-height: 1.7; }
.content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
.content-section a:hover { color: var(--primary); }

.rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
.rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
.rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
.rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
.rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
.rate-table tbody tr:nth-child(even) { background: var(--surface); }
.rate-table tbody tr:hover { background: var(--surface-alt); }

.formula-box { background: var(--primary-dark); color: #E8EEF5; border-radius: var(--radius); padding: 20px 24px; margin: 16px 0; font-family: var(--font-mono); font-size: 14px; line-height: 1.8; overflow-x: auto; }
.formula-box .label { color: var(--accent-light); font-weight: 700; }

.callout { background: #F0F5FB; border-left: 4px solid var(--primary-light); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
.callout p { color: var(--primary-dark); margin-bottom: 0; font-size: 14px; }
.callout strong { color: var(--primary-dark); }
.callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
.callout.warn p { color: #78350F; }
.callout.warn strong { color: #78350F; }

/* FAQ */
.faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
.faq-item:hover { box-shadow: var(--shadow-sm); }
.faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; min-height: 52px; }
.faq-question * { pointer-events: none; }
.faq-question:focus-visible { outline: 2px solid var(--primary); outline-offset: -2px; }
.faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
.faq-item.open .faq-icon { transform: rotate(45deg); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease; }
.faq-item.open .faq-answer { max-height: 800px; }
.faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }

/* SIDEBAR */
.sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
.sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
.sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation; min-height: 44px; }
.sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
.sidebar-link:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }
.sidebar-link .arrow { float: right; color: var(--text-muted); }

.cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 24px; margin-bottom: 24px; }
.cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 8px; font-weight: 700; }
.cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.55; }

/* OFFICE STRIP + FOOTER */
.office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
.office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
.office-strip .trust { color: var(--accent); font-weight: 600; }
.footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }

.noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; }

a:focus-visible, button:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; border-radius: 4px; }

/* RESPONSIVE */
@media (max-width: 767px) {
    .hero h1 { font-size: 26px; }
    .calc-card { padding: 22px; }
    .content-section { padding: 22px; }
    .toc-nav a { padding: 10px 12px; font-size: 12px; }
    .brand-cta-bar { padding: 12px 14px; }
    .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
    .brand-cta-bar-actions { width: 100%; gap: 8px; }
    .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; }
    .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }
    .body-cta { padding: 22px 18px; }
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta { padding: 16px; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
    .result-headline .value { font-size: 24px; }
    .year-table { padding: 14px; }
    .year-table th, .year-table td { padding: 6px 4px; font-size: 12px; }
}
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important; }
}

@media print {
    .toc-nav, .brand-cta-bar, .post-result-cta, .body-cta, .cta-card, .sidebar-col, .btn-reset, .btn-print, .btn-calculate, .office-strip, .footer, .breadcrumb { display: none !important; }
    body { background: #fff; color: #000; font-size: 11pt; }
    .main-layout { grid-template-columns: 1fr; padding: 0; max-width: 100%; }
    .calc-card, .content-section { box-shadow: none; border: 1px solid #ccc; page-break-inside: avoid; padding: 16px; margin-bottom: 16px; }
    .result-headline { background: #15365f !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
    .hero h1 { font-size: 18pt; }
    a { color: #15365f; }
    .faq-answer { max-height: none !important; }
    .faq-item { break-inside: avoid; }
}
</style>
@section('content')

<!-- TOC NAV -->
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#ind-as-102">Ind AS 102 Basics</a>
        <a href="#methods">Recognition Methods</a>
        <a href="#cash-vs-accounting">Cash vs Accounting</a>
        <a href="#valuation">Fair Value Inputs</a>
        <a href="#disclosures">Disclosures</a>
        <a href="#tax">Tax Treatment</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP Cost to Company Calculator
</nav>

<!-- HERO -->
<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 14 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP Cost to Company Calculator — <span>Ind AS 102 P&amp;L Expense</span> &amp; Year-by-Year Working</h1>
</header>

<!-- PEACH CTA -->
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Accounting for ESOPs under Ind AS 102? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Cost%20to%20Company%20Calculator%20and%20need%20help%20with%20Ind%20AS%20102%20accounting%20policy%20and%20valuation." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Ind%20AS%20102%20Accounting%20Help&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Cost%20to%20Company%20Calculator%20and%20need%20help%20with%3A%0A%0A-%20Black-Scholes%20valuation%20%2F%20Merchant%20Banker%20report%0A-%20Ind%20AS%20102%20accounting%20policy%0A-%20Note%20disclosures%20%26%20auditor%20queries%0A%0AOur%20vesting%20schedule%3A%20%0AOptions%20outstanding%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<!-- TL;DR -->
<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Under <a href="https://www.icai.org/" target="_blank" rel="noopener" style="color:var(--accent);text-decoration:underline">Ind AS 102 Share-Based Payment</a>, ESOP cost-to-company is the total fair value of options granted, recognised as a non-cash employee compensation expense in P&amp;L over the vesting period. The standard mandates the separate-grant approach for graded vesting, which front-loads about 52% of total cost into Year 1 for a 4-year 25/25/25/25 vest. This calculator outputs the total cost, forfeiture-adjusted cost, year-by-year P&amp;L expense under both separate-grant and straight-line methods, and the cash versus accounting cost split for your board pack or audit working.</p>
</div>

<!-- MAIN LAYOUT -->
<div class="main-layout">

<div class="content-col">

<!-- CALCULATOR -->
<div class="calc-card">
    <h2>ESOP Cost to Company Calculator (Ind AS 102)</h2>
    <p class="sub">Computes the total fair value cost, forfeiture-adjusted cost, and year-by-year P&amp;L expense for an ESOP grant under Ind AS 102 / ICAI Guidance Note 2020.</p>
    <noscript><div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div></noscript>

    <div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

    <div class="section-title">Grant Details</div>
    <div class="calc-row">
        <div class="form-group">
            <label for="options">Number of Options Granted</label>
            <input type="text" id="options" inputmode="decimal" placeholder="e.g. 10,000" autocomplete="off" value="10000">
        </div>
        <div class="form-group">
            <label for="fmv">FMV at Grant (₹ per share) <span class="hint">Fair Market Value certified by valuer</span></label>
            <input type="text" id="fmv" inputmode="decimal" placeholder="e.g. 150" autocomplete="off" value="150">
        </div>
    </div>
    <div class="calc-row">
        <div class="form-group">
            <label for="exercisePrice">Exercise Price (₹ per share) <span class="hint">Strike price employee pays</span></label>
            <input type="text" id="exercisePrice" inputmode="decimal" placeholder="e.g. 10" autocomplete="off" value="10">
        </div>
        <div class="form-group">
            <label for="fvOverride">Fair Value per Option (₹) — Optional <span class="hint">From Black-Scholes report. Leave blank to use intrinsic value (FMV − Exercise)</span></label>
            <input type="text" id="fvOverride" inputmode="decimal" placeholder="e.g. 165 (from valuer report)" autocomplete="off">
        </div>
    </div>

    <div class="section-title">Vesting Schedule</div>
    <div class="calc-row">
        <div class="form-group">
            <label for="vestYears">Total Vesting Period (Years)</label>
            <select id="vestYears" autocomplete="off">
                <option value="1">1 year (cliff vest)</option>
                <option value="2">2 years</option>
                <option value="3">3 years</option>
                <option value="4" selected>4 years</option>
                <option value="5">5 years</option>
            </select>
        </div>
        <div class="form-group">
            <label>Recognition Method</label>
            <div class="toggle-group" role="group" aria-label="Recognition method">
                <button type="button" class="toggle-btn active" data-method="separate" onclick="setMethod(this)">Separate-Grant<br><small style="font-weight:400;font-size:11px;opacity:0.7">Ind AS 102 default</small></button>
                <button type="button" class="toggle-btn" data-method="straight" onclick="setMethod(this)">Straight-Line<br><small style="font-weight:400;font-size:11px;opacity:0.7">Single-grant method</small></button>
            </div>
        </div>
    </div>

    <div class="section-title">Forfeiture Assumption</div>
    <div class="calc-row">
        <div class="form-group">
            <label for="forfeitureRate">Expected Forfeiture Rate (% per year) <span class="hint">Pre-vesting attrition. 0–25% typical</span></label>
            <input type="text" id="forfeitureRate" inputmode="decimal" placeholder="e.g. 10" autocomplete="off" value="10">
        </div>
        <div class="form-group">
            <label>&nbsp;</label>
            <div style="font-size:12px;color:var(--text-muted);line-height:1.55;padding:8px 0;">Service-condition forfeitures reduce the expected number of vesting options. The cumulative survival rate is applied to total cost.</div>
        </div>
    </div>

    <button class="btn-calculate" onclick="calculate()" type="button">Calculate ESOP Cost</button>

    <div class="result-section" id="resultSection" aria-live="polite">
        <div class="result-divider"></div>

        <div class="result-headline">
            <div class="label">Total Cost to Company (Forfeiture-Adjusted)</div>
            <div class="value"><span class="accent" id="resHeadline">—</span></div>
            <div class="meta" id="resHeadlineMeta">—</div>
        </div>

        <div class="summary-grid">
            <div class="summary-card">
                <div class="v-label">Fair Value per Option Used</div>
                <div class="v-val" id="resFV">—</div>
                <div class="v-desc" id="resFVDesc">—</div>
            </div>
            <div class="summary-card">
                <div class="v-label">Gross Cost (Before Forfeiture)</div>
                <div class="v-val" id="resGross">—</div>
                <div class="v-desc">Options × Fair Value per Option</div>
            </div>
            <div class="summary-card">
                <div class="v-label">Forfeiture-Adjusted Cost</div>
                <div class="v-val" id="resNet">—</div>
                <div class="v-desc" id="resNetDesc">Net of cumulative pre-vesting attrition</div>
            </div>
            <div class="summary-card">
                <div class="v-label">Year-1 P&amp;L Expense</div>
                <div class="v-val" id="resY1">—</div>
                <div class="v-desc" id="resY1Desc">—</div>
            </div>
        </div>

        <div class="year-table">
            <h4>Year-by-Year P&amp;L Expense Schedule</h4>
            <table>
                <thead>
                    <tr>
                        <th>Year</th>
                        <th class="numeric">Separate-Grant (₹)</th>
                        <th class="numeric">Straight-Line (₹)</th>
                        <th class="numeric">% of Total (Selected)</th>
                    </tr>
                </thead>
                <tbody id="yearRows"></tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td class="numeric" id="totalSep">—</td>
                        <td class="numeric" id="totalStr">—</td>
                        <td class="numeric">100.00%</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="cash-vs-accounting">
            <p><strong>Cash vs Accounting Cost:</strong></p>
            <p>📒 <strong>Accounting (P&amp;L):</strong> <span id="resAcctCost">—</span> spread over the vesting period — a non-cash employee compensation expense under Ind AS 102, with the credit going to a "Share Options Outstanding" equity reserve.</p>
            <p>💰 <strong>Cash impact at exercise:</strong> Employees pay <span id="resCashIn">—</span> in aggregate (exercise price × options expected to vest) <em>into</em> the company at exercise. Net company cash outflow over the life of the scheme = <strong>nil</strong> for equity-settled ESOPs (unlike cash-settled SARs).</p>
        </div>

        <div class="post-result-cta">
            <div class="post-result-cta-head">Want a CA to validate this Ind AS 102 working for your board pack or audit file?</div>
            <div class="post-result-cta-sub">Free 15-min review — Black-Scholes valuation, Ind AS 102 accounting policy, note disclosures, deferred-tax interplay. No obligation.</div>
            <div class="brand-cta-bar-actions">
                <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20used%20the%20ESOP%20Cost%20to%20Company%20Calculator%20and%20need%20a%20CA%20to%20review%20our%20Ind%20AS%20102%20working." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
                <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Ind%20AS%20102%20Working%20Review&body=Hi%2C%0A%0AI%20just%20ran%20the%20ESOP%20Cost%20to%20Company%20Calculator.%20Please%20review%20our%20Ind%20AS%20102%20working%20for%20board%20pack%20%2F%20audit%20file.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
            </div>
        </div>

        <button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
        <button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Working</button>
    </div>
</div>

<!-- HOW TO USE -->
<section class="content-section" id="how-to-use">
    <h2>How to Use the ESOP Cost Calculator</h2>
    <ol>
        <li><strong>Enter number of options granted.</strong> The total options issued under the relevant grant resolution.</li>
        <li><strong>Enter FMV at grant.</strong> Fair Market Value per share on the grant date, certified by a SEBI-registered Merchant Banker for unlisted companies or based on closing share price for listed companies.</li>
        <li><strong>Enter exercise price.</strong> The strike price employees pay to convert each option into a share. Often kept low (face value or near-face value) to make grants meaningful.</li>
        <li><strong>Enter fair value per option (recommended).</strong> Take this from your Black-Scholes valuation report. If unavailable, the calculator falls back to intrinsic value (FMV − exercise), which understates the true cost under Ind AS 102 — only use this for early-stage estimation.</li>
        <li><strong>Pick vesting period.</strong> The total time over which options vest (typically 4 years for Indian startups, with monthly/annual vesting after a 1-year cliff).</li>
        <li><strong>Pick recognition method.</strong> Separate-grant is the Ind AS 102 default for graded vesting and front-loads expense. Straight-line is the single-grant method.</li>
        <li><strong>Enter expected forfeiture rate.</strong> Annual pre-vesting attrition. Use 3–5 year historical attrition or industry benchmark. Higher attrition reduces expected vesting and total expense.</li>
        <li><strong>Click Calculate.</strong> You'll get total cost, forfeiture-adjusted cost, year-by-year P&amp;L expense under both methods, and a printable working sheet for your audit file.</li>
    </ol>
</section>

<!-- IND AS 102 -->
<section class="content-section" id="ind-as-102">
    <h2>What is ESOP Cost-to-Company Under Ind AS 102?</h2>
    <p>Ind AS 102 Share-Based Payment is the Indian Accounting Standard governing how companies account for equity-settled and cash-settled share-based payments. For employee stock option plans, the standard requires recognising the fair value of options granted as a compensation expense in the Profit and Loss Account over the vesting period, with an equal credit to a "Share Options Outstanding" equity reserve.</p>

    <p>The standard is notified by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> under Companies (Indian Accounting Standards) Rules, 2015 and applies to all companies covered by the Ind AS roadmap — listed companies, unlisted companies with net worth above ₹250 crore, and their holding/subsidiary/joint-venture/associate companies. Companies outside this roadmap follow the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> Guidance Note on Accounting for Share-Based Payments (2020) under Indian GAAP, which uses substantially similar principles.</p>

    <h3>The Core Formula</h3>
    <div class="formula-box">
<span class="label">Total ESOP Cost</span> = Options Expected to Vest × Fair Value per Option at Grant<br>
<span class="label">Options Expected to Vest</span> = Options Granted × (1 − Cumulative Forfeiture Rate)<br>
<span class="label">Annual P&amp;L Expense</span> = Total ESOP Cost ÷ Vesting Period (or front-loaded under separate-grant)
    </div>

    <p>Under Ind AS 102 paragraphs 10 and 11, equity-settled share-based payments are valued on a fair-value basis as on the grant date. Crucially, fair value is <em>not</em> re-measured subsequently — only the number of options expected to vest is revised at each reporting date based on actual and expected forfeitures.</p>

    <div class="callout">
        <p><strong>CA Tip:</strong> The Share Options Outstanding reserve sits on the equity side of the balance sheet. When options are exercised, this reserve transfers to share capital (at face value) and securities premium (excess of fair value over face). When options lapse unexercised, the reserve transfers to general reserve. This routing is non-cash on the way in and on the way out.</p>
    </div>
</section>

<!-- METHODS -->
<section class="content-section" id="methods">
    <h2>Separate-Grant vs Straight-Line Recognition</h2>
    <p>Ind AS 102 requires graded vesting (e.g. 25% per year over 4 years) to be accounted for using the <strong>separate-grant approach</strong>. Each annual tranche is treated as a separate award and its fair value is amortised over <em>its own vesting period</em>. The result is heavy front-loading of expense.</p>

    <h3>Worked Example: 100 Options, 4-Year 25/25/25/25 Vesting</h3>
    <p>Assume total fair value = ₹100 (i.e. ₹1 per option for simplicity). The separate-grant approach treats this as four tranches of 25 options each:</p>
    <ul>
        <li><strong>Tranche 1</strong> (25 options vesting end of Year 1): Full ₹25 expensed in Year 1</li>
        <li><strong>Tranche 2</strong> (25 options vesting end of Year 2): ₹25 split equally — ₹12.50 in Y1, ₹12.50 in Y2</li>
        <li><strong>Tranche 3</strong> (25 options vesting end of Year 3): ₹25 split into thirds — ₹8.33 each in Y1, Y2, Y3</li>
        <li><strong>Tranche 4</strong> (25 options vesting end of Year 4): ₹25 split into quarters — ₹6.25 each in Y1, Y2, Y3, Y4</li>
    </ul>

    <table class="rate-table">
        <thead>
            <tr><th>Year</th><th>Separate-Grant</th><th>Straight-Line</th><th>Difference</th></tr>
        </thead>
        <tbody>
            <tr><td>Year 1</td><td>₹52.08 (52.08%)</td><td>₹25.00 (25%)</td><td>+₹27.08</td></tr>
            <tr><td>Year 2</td><td>₹27.08 (27.08%)</td><td>₹25.00 (25%)</td><td>+₹2.08</td></tr>
            <tr><td>Year 3</td><td>₹14.58 (14.58%)</td><td>₹25.00 (25%)</td><td>−₹10.42</td></tr>
            <tr><td>Year 4</td><td>₹6.25 (6.25%)</td><td>₹25.00 (25%)</td><td>−₹18.75</td></tr>
            <tr><td><strong>Total</strong></td><td><strong>₹100.00</strong></td><td><strong>₹100.00</strong></td><td><strong>₹0.00</strong></td></tr>
        </tbody>
    </table>

    <p>The total expense is identical under both methods — only the period-wise distribution differs. For a 3-year graded vest, separate-grant pushes ~61% of total expense into Year 1. For cliff vesting (100% vests at end of Year N), separate-grant and straight-line give identical straight-line treatment because there is only one tranche.</p>

    <div class="callout warn">
        <p><strong>Note:</strong> Many startups inadvertently use straight-line for graded vesting in their first year of Ind AS reporting, then face a restatement at audit. The ICAI Guidance Note on Accounting for Share-Based Payments (2020) and Ind AS 102 paragraph IG11 both require separate-grant for graded vesting of employee awards. Get this right at the first reporting date.</p>
    </div>
</section>

<!-- MID-BODY CTA -->
<div class="body-cta">
    <h3>Need a Black-Scholes Valuation Report?</h3>
    <p>Patron Accounting supports Indian startups and growth-stage companies with end-to-end ESOP work — Black-Scholes / Binomial valuation, Ind AS 102 accounting policy, note disclosures, deferred tax, and audit support. Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20a%20Black-Scholes%20ESOP%20valuation%20and%20Ind%20AS%20102%20accounting%20support." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Valuation%20%26%20Ind%20AS%20102%20Support&body=Hi%20Patron%20Accounting%2C%0A%0AWe%27d%20like%20a%20fixed-fee%20quote%20for%20ESOP%20Black-Scholes%20valuation%20and%20Ind%20AS%20102%20accounting%20support.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
</div>

<!-- CASH VS ACCOUNTING -->
<section class="content-section" id="cash-vs-accounting">
    <h2>Cash Cost vs Accounting Cost — A Critical Distinction</h2>
    <p>One of the most common mistakes in board pack discussions is treating ESOP expense as a cash cost. It is not. Equity-settled ESOPs create a non-cash P&amp;L expense matched against a credit to an equity reserve — never against cash.</p>

    <h3>Where the Cash Actually Moves</h3>
    <ul>
        <li><strong>At grant:</strong> Zero cash impact. Only a memorandum entry begins to accrue.</li>
        <li><strong>During vesting:</strong> P&amp;L expense recognised year by year, credit to Share Options Outstanding reserve. No cash movement.</li>
        <li><strong>At exercise:</strong> Employee pays the exercise price <em>into</em> the company. This is a cash <em>inflow</em>. Share capital and securities premium are credited; the Share Options Outstanding reserve is reversed.</li>
        <li><strong>Perquisite tax (TDS):</strong> Company withholds tax on (FMV at exercise − exercise price) under Section 192 of the Income-tax Act, 1961. This is a routine payroll-TDS cash outflow paid to the government on behalf of the employee, not a cost borne by the company.</li>
        <li><strong>At lapse/forfeit:</strong> Share Options Outstanding reserve is transferred to General Reserve. Zero cash impact.</li>
    </ul>

    <h3>What This Means for EBITDA</h3>
    <p>The ESOP expense reduces reported PAT but not EBITDA — provided the expense sits above the EBITDA line in the income statement classification. Most Indian listed companies present ESOP expense as part of Employee Benefits Expense, which reduces EBITDA. Many startup investor decks add back this non-cash ESOP expense to arrive at "adjusted EBITDA", which is a non-GAAP metric that should always be reconciled to the GAAP figure in disclosures.</p>

    <div class="callout">
        <p><strong>CA Tip:</strong> When valuing your company for fundraising, investors will look at adjusted EBITDA (with ESOP add-back) for run-rate margin analysis but at GAAP PAT for dilution and tax analysis. Both numbers must be in your data room. Get the accounting policy disclosure right so reviewers can reconcile in seconds, not hours.</p>
    </div>
</section>

<!-- VALUATION -->
<section class="content-section" id="valuation">
    <h2>Fair Value Inputs — Black-Scholes &amp; Binomial</h2>
    <p>Ind AS 102 paragraph 17 lists six minimum inputs every option pricing model must consider. The Black-Scholes-Merton model is the most widely used in India for its simplicity and audit acceptance. The Binomial (or Lattice) model is preferred when ESOPs include complex features like early exercise, performance conditions, or reload provisions.</p>

    <h3>Six Mandatory Inputs Under Ind AS 102</h3>
    <table class="rate-table">
        <thead>
            <tr><th>Input</th><th>What It Is</th><th>Source (Indian context)</th></tr>
        </thead>
        <tbody>
            <tr><td>Share Price (FMV at grant)</td><td>Current value of the underlying share</td><td>Listed: closing price; Unlisted: <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a>-registered Merchant Banker or IBBI-registered Valuer (SFA) report</td></tr>
            <tr><td>Exercise Price</td><td>Strike price employee pays to convert option to share</td><td>From the ESOP scheme document</td></tr>
            <tr><td>Expected Term</td><td>Best estimate of the period from grant to exercise</td><td>Historical exercise behaviour; for unlisted, typically vesting + 1–2 years</td></tr>
            <tr><td>Expected Volatility</td><td>Annualised standard deviation of share returns</td><td>Listed: 3–5 year historical; Unlisted: comparable peer median</td></tr>
            <tr><td>Risk-Free Rate</td><td>Return on a risk-free asset matching the option term</td><td><a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> / Indian Government bond yield matching option life</td></tr>
            <tr><td>Expected Dividend Yield</td><td>Forecast annual dividend as % of share price</td><td>Historical dividend payout; usually zero for startups</td></tr>
        </tbody>
    </table>

    <h3>Fair Value vs Intrinsic Value</h3>
    <p>Intrinsic value is simply FMV minus exercise price on the grant date — what the option would be worth if exercised immediately. Fair value adds time value, capturing the upside potential of the share over the option's life. Fair value is almost always higher than intrinsic value, sometimes by 50–100% for early-stage startups with high volatility. Ind AS 102 requires fair value; intrinsic value was permitted only under the old SEBI ESOP Guidelines, 1999 (now withdrawn) and the pre-2020 ICAI Guidance Note.</p>

    <p>For unlisted Indian startups, the practical path is: engage an IBBI-registered Valuer (Securities or Financial Assets class) or a SEBI-registered Merchant Banker to produce a Black-Scholes report. The report should include all six inputs, peer-set rationale for volatility, the model used, sensitivity analysis, and a signed valuation conclusion. Auditors will challenge each input — be ready with documentation.</p>
</section>

<!-- DISCLOSURES -->
<section class="content-section" id="disclosures">
    <h2>Mandatory Disclosures Under Ind AS 102</h2>
    <p>Ind AS 102 paragraphs 44 to 52 prescribe extensive disclosures. The financial statements (and director's report under Rule 12 of Companies (Share Capital and Debentures) Rules, 2014) must include:</p>

    <h3>Movement Disclosures</h3>
    <ul>
        <li>Number and weighted average exercise prices of options outstanding at start of year, granted, forfeited, exercised, expired, outstanding at end of year, and exercisable at end of year</li>
        <li>Weighted average share price at the date of exercise for options exercised during the year</li>
        <li>Range of exercise prices and weighted average remaining contractual life for options outstanding at year-end</li>
    </ul>

    <h3>Valuation Disclosures</h3>
    <ul>
        <li>Description of each share-based payment arrangement: vesting terms, maximum life, settlement method</li>
        <li>Option pricing model used (Black-Scholes / Binomial)</li>
        <li>Key inputs: weighted average share price at grant, exercise price, expected volatility, expected life, risk-free rate, expected dividend yield</li>
        <li>How expected volatility was determined (peer set, historical period, justification)</li>
        <li>How any other features (early exercise, market conditions) were incorporated</li>
    </ul>

    <h3>P&amp;L Disclosures</h3>
    <ul>
        <li>Total ESOP expense recognised in profit or loss for the period, classified by equity-settled vs cash-settled</li>
        <li>Carrying amount of liabilities for cash-settled arrangements at year-end</li>
        <li>Intrinsic value of vested options for cash-settled liabilities</li>
    </ul>
</section>

<!-- TAX -->
<section class="content-section" id="tax">
    <h2>Tax Treatment of ESOP Expense (Company Side)</h2>
    <p>The accounting expense recognised under Ind AS 102 over the vesting period does not always equal the tax deduction. Under the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income-tax Act, 1961</a>, ESOP cost is generally allowed as a deductible employee compensation expense under Section 37(1), but only when actually incurred — typically at the time of exercise.</p>

    <h3>The Book-Tax Difference</h3>
    <ul>
        <li><strong>Book expense (Ind AS 102):</strong> Spread over vesting period (years 1 to N)</li>
        <li><strong>Tax deduction:</strong> Allowed in the year of exercise (when perquisite tax is triggered for the employee under Section 17(2)(vi)) — the deduction equals the perquisite charged to the employee, i.e. (FMV at exercise − exercise price)</li>
        <li><strong>Result:</strong> A temporary timing difference giving rise to a deferred tax asset under Ind AS 12 Income Taxes</li>
    </ul>

    <p>Several High Court and ITAT rulings (including the Karnataka High Court ruling in Biocon Ltd) have upheld this treatment, but companies should consult their tax advisor on the exact timing because departmental positions have varied. Make sure the deferred tax computation in your Ind AS 12 working ties back to the Ind AS 102 cumulative expense at each reporting date.</p>

    <h3>Employee Side — Brief Recap</h3>
    <p>Separately, the employee is taxed at exercise on the perquisite (FMV − exercise price) under Section 17(2)(vi) at slab rates, with TDS under Section 192 by the employer. <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">DPIIT</a>-recognised startups can defer this perquisite tax for up to 48 months under Section 192(1C). At sale, capital gains apply.</p>

    <div class="callout warn">
        <p><strong>Note:</strong> The interplay between book ESOP cost (Ind AS 102), tax deduction timing (Section 37(1)), employee perquisite (Section 17(2)(vi)), and deferred tax (Ind AS 12) is one of the most-audited areas for startups moving to Ind AS. A documented accounting policy and a board-approved deferred-tax reconciliation are essential.</p>
    </div>
</section>

<!-- FAQ -->
<section class="content-section" id="faqs">
    <h2>Frequently Asked Questions About ESOP Cost-to-Company</h2>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the cost-to-company of an ESOP under Ind AS 102?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS 102 Share-Based Payment, the cost-to-company of an ESOP is the total fair value of the options granted, measured at the grant date using an option pricing model such as Black-Scholes or Binomial. This total fair value is recognised as an employee compensation expense in the Profit and Loss Account over the vesting period, with an equal credit to a Share Options Outstanding equity reserve.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is the ESOP P&amp;L expense a cash cost?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">No. The Ind AS 102 ESOP expense is a non-cash employee benefit cost. The corresponding credit goes to a Share Options Outstanding equity reserve, not to cash. Cash impact arises only at exercise when employees pay the exercise price to the company, which increases the share capital and securities premium. EBITDA is unaffected if ESOP expense is shown above the EBITDA line.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What is the difference between fair value and intrinsic value of an ESOP?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Intrinsic value is simply the Fair Market Value of the share minus the exercise price on the grant date. Fair value under Ind AS 102 is the full economic value of the option determined using Black-Scholes or Binomial models, factoring volatility, expected life, risk-free rate, and dividends. Fair value is always equal to or higher than intrinsic value and is mandatory under Ind AS 102.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Should I use the separate-grant or straight-line method for graded vesting?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Ind AS 102 and the ICAI Guidance Note on Accounting for Share-Based Payments (2020) require the separate-grant approach for graded vesting. Each tranche is treated as a separate award and expensed over its own vesting period. This front-loads the cost — about 52% of the total expense for a 4-year 25/25/25/25 vest is recognised in Year 1 versus 25% under straight-line.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does forfeiture affect the ESOP P&amp;L expense?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">At each reporting date, the company revises its estimate of options expected to vest based on actual and expected forfeitures. The cumulative expense is adjusted to reflect only options likely to vest. Service-condition forfeitures (employee leaving) reduce expense. Market-condition forfeitures (share price not reaching a target) do not reverse expense already recognised, because market conditions are baked into grant-date fair value.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Who needs to apply Ind AS 102 in India?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Ind AS 102 applies to companies covered by the Ind AS roadmap notified by MCA — listed companies and unlisted companies with net worth above ₹250 crore. Other companies follow the ICAI Guidance Note on Accounting for Share-Based Payments (2020) under Indian GAAP. The principles are broadly similar but disclosure and measurement details vary. Both require fair-value expense recognition.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is fair value re-measured every year for ESOPs?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">No. For equity-settled share-based payments such as ESOPs, fair value is measured once at the grant date and not re-measured subsequently. Only the number of options expected to vest is revised. For cash-settled share-based payments such as Stock Appreciation Rights, the fair value of the liability is re-measured at each reporting date and at settlement, with changes recognised in profit or loss.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What inputs are needed for Black-Scholes ESOP valuation?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Six inputs are mandatory under Ind AS 102: current share price (Fair Market Value at grant), exercise price, expected term of the option, expected volatility of the share price, risk-free interest rate (typically Indian government bond yield for matching maturity), and expected dividend yield. Unlisted companies estimate volatility using comparable listed peers' historical volatility, usually over 3 to 5 years.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Does ESOP expense reduce taxable profit in India?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">ESOP expense recognised under Ind AS 102 is generally allowed as a tax-deductible employee compensation expense under Section 37(1) of the Income-tax Act, 1961, but only when actually incurred — typically at the time of exercise when the perquisite tax is triggered for the employee. Book expense recognised during the vesting period may need to be added back and deduction claimed at exercise. CA review is essential.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>What disclosures does Ind AS 102 require for ESOPs?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Companies must disclose: a description of each share-based payment arrangement, the number and weighted average exercise prices of options outstanding/granted/vested/exercised/forfeited during the year, the weighted average remaining contractual life of options outstanding, the valuation model and inputs used (volatility, risk-free rate, expected term, dividend yield), and the total ESOP expense recognised in profit or loss for the period.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How are SAR (Stock Appreciation Rights) accounted for differently?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Stock Appreciation Rights are cash-settled share-based payments under Ind AS 102. Unlike ESOPs, the liability is re-measured at fair value at each reporting date and at settlement, with all changes routed through the Profit and Loss Account. SARs do not dilute equity but create a real cash outflow at settlement, making P&amp;L volatility higher than for equity-settled ESOPs. The same Black-Scholes model is used with appropriate inputs.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>How does this calculator handle the fair-value input?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The calculator lets you enter fair value per option directly from your Black-Scholes or Binomial valuation report — the recommended Ind AS 102 path. If you do not have a valuer's report, you can use intrinsic value (FMV minus exercise price) as a rough approximation, but this understates the true cost. Always obtain a SEBI-registered Merchant Banker or IBBI-registered Valuer report for audit-ready financials.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false"><span>Is this ESOP Cost Calculator audit-ready?</span><span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">This calculator gives directional working in line with Ind AS 102 principles, useful for budgeting, board discussions, and preliminary cost estimation. It is not a substitute for a Black-Scholes valuation report by a registered valuer or merchant banker, which is mandatory for audit. Patron Accounting provides full ESOP valuation, accounting policy, and disclosure support to make financials audit-ready under Ind AS 102.</div></div>
    </div>
</section>

</div><!-- /content-col -->

<aside class="sidebar-col">
    <div class="cta-card">
        <h3>Need ESOP Valuation Support?</h3>
        <p>Black-Scholes / Binomial valuation report, Ind AS 102 accounting policy, note disclosures, deferred-tax — handled end-to-end.</p>
        <div class="brand-cta-stack">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Black-Scholes%20ESOP%20valuation%20and%20Ind%20AS%20102%20accounting." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Valuation%20%26%20Ind%20AS%20102%20Help&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20ESOP%20valuation%20and%20Ind%20AS%20102%20support.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
        </div>
    </div>

    <div class="sidebar-card">
        <h3>Related Services</h3>
        <a href="/esop-services" class="sidebar-link">ESOP Services Hub <span class="arrow">→</span></a>
        <a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
        <a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Management &amp; Compliance <span class="arrow">→</span></a>
        <a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation Services <span class="arrow">→</span></a>
        <a href="/statutory-audit" class="sidebar-link">Statutory Audit Services <span class="arrow">→</span></a>
        <a href="/accounting-services" class="sidebar-link">Online Accountant Service <span class="arrow">→</span></a>
    </div>

    <div class="sidebar-card">
        <h3>Related Tools</h3>
        <a href="/tools/esop-pool-size-calculator" class="sidebar-link">ESOP Pool Size Calculator <span class="arrow">→</span></a>
        <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator (IT Act) <span class="arrow">→</span></a>
        <a href="/tools/payroll-cost-calculator" class="sidebar-link">Payroll Cost Calculator <span class="arrow">→</span></a>
        <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Salary <span class="arrow">→</span></a>
        <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator <span class="arrow">→</span></a>
        <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
    </div>

    <div class="sidebar-card">
        <h3>From the Blog</h3>
        <a href="/blog/share-transfer-procedure-in-private-limited-company-a-complete-guide" class="sidebar-link">ESOP in Private Limited Company <span class="arrow">→</span></a>
        <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">→</span></a>
        <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
    </div>
</aside>

</div><!-- /main-layout -->

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
function parseINR(raw) {
    if (raw === undefined || raw === null) return NaN;
    const cleaned = String(raw).replace(/[,\s₹%]/g, '');
    if (cleaned === '') return NaN;
    const n = parseFloat(cleaned);
    return isFinite(n) ? n : NaN;
}
function pickPositive(parsed, fallback) {
    return (isFinite(parsed) && parsed > 0) ? parsed : fallback;
}

let currentMethod = 'separate';
function setMethod(btn) {
    const el = btn.closest ? (btn.closest('.toggle-btn') || btn) : btn;
    currentMethod = el.dataset.method;
    el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
    const section = document.getElementById('resultSection');
    if (section && section.classList.contains('visible')) {
        calculate(true);
    }
}

function showError(msg) {
    const banner = document.getElementById('errorBanner');
    banner.textContent = msg;
    banner.classList.add('visible');
    setTimeout(() => banner.classList.remove('visible'), 6000);
}

// Format Indian currency
function fmtINR(n) {
    if (!isFinite(n)) return '—';
    if (Math.abs(n) >= 1e7) return '₹' + (n/1e7).toLocaleString('en-IN', {maximumFractionDigits: 2}) + ' Cr';
    if (Math.abs(n) >= 1e5) return '₹' + (n/1e5).toLocaleString('en-IN', {maximumFractionDigits: 2}) + ' L';
    return '₹' + n.toLocaleString('en-IN', {maximumFractionDigits: 0});
}
function fmtINRFull(n) {
    if (!isFinite(n)) return '—';
    return '₹' + n.toLocaleString('en-IN', {maximumFractionDigits: 0});
}
function fmtNum(n, dec) {
    if (!isFinite(n)) return '—';
    return n.toLocaleString('en-IN', {minimumFractionDigits: dec||0, maximumFractionDigits: dec||0});
}

// Compute year-by-year expense schedule
function computeSchedule(totalCost, vestYears, method) {
    const expense = new Array(vestYears).fill(0);
    if (method === 'straight' || vestYears === 1) {
        for (let i = 0; i < vestYears; i++) expense[i] = totalCost / vestYears;
        return expense;
    }
    // Separate-grant for graded vesting
    const perTranche = totalCost / vestYears;
    for (let i = 1; i <= vestYears; i++) {
        for (let y = 1; y <= i; y++) {
            expense[y-1] += perTranche / i;
        }
    }
    return expense;
}

function calculate(silent) {
    const options = parseINR(document.getElementById('options').value);
    const fmv = parseINR(document.getElementById('fmv').value);
    const exercise = parseINR(document.getElementById('exercisePrice').value);
    const fvOverride = parseINR(document.getElementById('fvOverride').value);
    const vestYears = parseInt(document.getElementById('vestYears').value);
    const forfRate = parseINR(document.getElementById('forfeitureRate').value);

    // Validation
    if (!isFinite(options) || options <= 0 || options > 1e9) { showError('Enter a valid number of options (1 to 1,000,000,000).'); return; }
    if (!isFinite(fmv) || fmv <= 0) { showError('Enter a valid FMV at grant (greater than 0).'); return; }
    if (!isFinite(exercise) || exercise < 0) { showError('Enter a valid exercise price (0 or higher).'); return; }
    if (exercise > fmv * 5) { showError('Exercise price unusually high vs FMV. Please double-check.'); return; }
    if (!isFinite(vestYears) || vestYears < 1 || vestYears > 10) { showError('Vesting period must be between 1 and 10 years.'); return; }
    const fr = isFinite(forfRate) && forfRate >= 0 ? forfRate : 0;
    if (fr > 50) { showError('Forfeiture rate above 50% per year is implausible. Please double-check.'); return; }

    // Determine fair value per option
    let fvPerOption, fvSource;
    if (isFinite(fvOverride) && fvOverride > 0) {
        fvPerOption = fvOverride;
        fvSource = 'From Black-Scholes / Binomial valuer report';
    } else {
        fvPerOption = Math.max(0, fmv - exercise);
        fvSource = 'Intrinsic value (FMV − Exercise). Approximation only — replace with Black-Scholes for audit.';
        if (fvPerOption === 0) {
            showError('Intrinsic value is zero (Exercise ≥ FMV). Enter the Black-Scholes fair value per option to proceed.');
            return;
        }
    }

    // Gross cost
    const grossCost = options * fvPerOption;

    // Cumulative survival = (1 - forf)^vestYears
    const annualSurv = 1 - (fr / 100);
    const cumSurv = Math.pow(annualSurv, vestYears);
    const forfeitureLoss = (1 - cumSurv) * 100;
    const netCost = grossCost * cumSurv;

    // Compute both schedules for comparison
    const sepSchedule = computeSchedule(netCost, vestYears, 'separate');
    const strSchedule = computeSchedule(netCost, vestYears, 'straight');
    const selected = currentMethod === 'straight' ? strSchedule : sepSchedule;

    // ===== Render =====
    document.getElementById('resHeadline').textContent = fmtINR(netCost);
    document.getElementById('resHeadlineMeta').textContent = options.toLocaleString('en-IN') + ' options × ₹' + fmtNum(fvPerOption, 2) + ' fair value × ' + (cumSurv*100).toFixed(1) + '% expected to vest over ' + vestYears + ' years';

    document.getElementById('resFV').textContent = '₹' + fmtNum(fvPerOption, 2);
    document.getElementById('resFVDesc').textContent = fvSource;
    document.getElementById('resGross').textContent = fmtINR(grossCost);
    document.getElementById('resNet').textContent = fmtINR(netCost);
    document.getElementById('resNetDesc').textContent = 'Net of cumulative ' + forfeitureLoss.toFixed(1) + '% forfeiture loss';
    document.getElementById('resY1').textContent = fmtINR(selected[0]);
    document.getElementById('resY1Desc').textContent = (currentMethod === 'separate' ? 'Separate-grant' : 'Straight-line') + ' — ' + ((selected[0]/netCost)*100).toFixed(1) + '% of total in Year 1';

    // Year-by-year table
    const yearRows = document.getElementById('yearRows');
    yearRows.innerHTML = '';
    for (let i = 0; i < vestYears; i++) {
        const row = document.createElement('tr');
        const pctOfTotal = (selected[i] / netCost * 100).toFixed(1);
        row.innerHTML = '<td>Year ' + (i+1) + '</td>' +
            '<td class="numeric">' + fmtINRFull(sepSchedule[i]) + '</td>' +
            '<td class="numeric">' + fmtINRFull(strSchedule[i]) + '</td>' +
            '<td class="numeric">' + pctOfTotal + '%</td>';
        yearRows.appendChild(row);
    }
    const sepTotal = sepSchedule.reduce((a,b)=>a+b,0);
    const strTotal = strSchedule.reduce((a,b)=>a+b,0);
    document.getElementById('totalSep').textContent = fmtINRFull(sepTotal);
    document.getElementById('totalStr').textContent = fmtINRFull(strTotal);

    document.getElementById('resAcctCost').textContent = fmtINR(netCost);
    document.getElementById('resCashIn').textContent = fmtINR(options * cumSurv * exercise);

    const section = document.getElementById('resultSection');
    section.classList.add('visible');
    if (!silent) {
        requestAnimationFrame(function() {
            requestAnimationFrame(function() {
                section.scrollIntoView({behavior: 'smooth', block: 'start'});
            });
        });
    }
}

function resetCalc() {
    document.getElementById('options').value = '10000';
    document.getElementById('fmv').value = '150';
    document.getElementById('exercisePrice').value = '10';
    document.getElementById('fvOverride').value = '';
    document.getElementById('vestYears').value = '4';
    document.getElementById('forfeitureRate').value = '10';
    document.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
    document.querySelector('.toggle-btn[data-method="separate"]').classList.add('active');
    currentMethod = 'separate';
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
}

function toggleFaq(e) {
    const btn = e.closest ? (e.closest('.faq-question') || e) : e;
    const item = btn.closest('.faq-item');
    if (!item) return;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => {
        i.classList.remove('open');
        const q = i.querySelector('.faq-question');
        if (q) q.setAttribute('aria-expanded', 'false');
    });
    if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
    }
}

document.querySelectorAll('input[type="number"], input[type="text"]').forEach(input => {
    input.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') { e.preventDefault(); calculate(); }
    });
});

const navLinks = document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id], header[id]');
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
