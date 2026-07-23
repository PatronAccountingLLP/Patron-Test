@extends('layouts.app')
@section('meta')

<title>Black-Scholes Calculator | ESOP Fair Value Ind AS 102</title>
<meta name="description" content="Free Black-Scholes calculator: get grant-date fair value per option and the Ind AS 102 ESOP expense from spot, strike, term, volatility, rate & dividend yield.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/black-scholes-option-pricing-calculator">

<meta property="og:title" content="Black-Scholes Calculator — ESOP Fair Value Ind AS 102">
<meta property="og:description" content="Compute the grant-date fair value per option (call or put) and the Ind AS 102 ESOP expense from spot, strike, expected term, volatility, risk-free rate and dividend yield.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/black-scholes-option-pricing-calculator">
<meta property="og:image" content="/tools/black-scholes-option-pricing-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Black-Scholes Calculator — ESOP Fair Value Ind AS 102">
<meta name="twitter:description" content="Grant-date fair value per option and the Ind AS 102 ESOP expense from spot, strike, term, volatility, rate & dividend. Free & instant.">
<meta name="twitter:image" content="/tools/black-scholes-option-pricing-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Black-Scholes Option Pricing Calculator",
  "description": "Black-Scholes Option Pricing Calculator computes the fair value of a call or put option using the dividend-adjusted Black-Scholes-Merton model from the spot price, strike price, expected term, volatility, risk-free rate and dividend yield. It is built for ESOP grant-date fair value under Ind AS 102 share-based payment accounting, returning the per-option fair value, the d1 and d2 terms, and the total and annual ESOP expense based on the number of options granted and the vesting period.",
  "url": "/tools/black-scholes-option-pricing-calculator",
  "applicationCategory": "BusinessApplication",
  "inLanguage": "en-IN",
  "isAccessibleForFree": true,
  "operatingSystem": "Any",
  "datePublished": "2026-06-05T08:00:00+05:30",
  "dateModified": "2026-06-05T08:00:00+05:30",
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
    {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
    {"@type": "ListItem", "position": 3, "name": "Black-Scholes Option Pricing Calculator", "item": "/tools/black-scholes-option-pricing-calculator"}
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
      "name": "What is the Black-Scholes model used for in ESOPs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Black-Scholes-Merton model estimates the fair value of a stock option. For ESOPs in India it is the standard way to compute the grant-date fair value of the option under Ind AS 102, Share-Based Payment. That per-option fair value, multiplied by the number of options granted, gives the total employee compensation expense the company recognises over the vesting period. Note this is the accounting charge, distinct from the perquisite-tax FMV at exercise."
      }
    },
    {
      "@type": "Question",
      "name": "What inputs does the Black-Scholes calculator need?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Six inputs drive the model: the spot price of the share at grant, the exercise or strike price, the expected term in years, the expected volatility, the risk-free interest rate and the expected dividend yield. For the ESOP expense you also enter the number of options granted and the vesting period. Volatility is usually taken from the company's own share history or a comparable peer set, and the risk-free rate from government bonds of matching maturity."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Black-Scholes formula?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For a call option with a dividend yield, the value is S times e to the minus qT times N(d1), minus K times e to the minus rT times N(d2). Here d1 equals the natural log of S over K, plus r minus q plus half sigma squared, all times T, divided by sigma times the square root of T; and d2 equals d1 minus sigma times the square root of T. S is spot, K is strike, T is term, sigma is volatility, r is the risk-free rate, q is dividend yield and N is the cumulative normal distribution."
      }
    },
    {
      "@type": "Question",
      "name": "How is the ESOP accounting expense calculated from the fair value?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The total ESOP expense equals the per-option fair value from Black-Scholes multiplied by the number of options granted. Under Ind AS 102 this expense is recognised over the vesting period, so the annual charge is the total divided by the number of vesting years for a straight-line approach. For example, 1,000 options at a fair value of 50 give a total of 50,000, expensed at 12,500 a year over four years."
      }
    },
    {
      "@type": "Question",
      "name": "Is Black-Scholes used for ESOP perquisite tax?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Black-Scholes is used for the accounting fair value under Ind AS 102, not for the perquisite tax. The taxable perquisite at exercise is the fair market value of the share on the exercise date, less the exercise price, where FMV is the average of open and close for listed shares or a Category I merchant banker valuation for unlisted shares. Black-Scholes and binomial models are specifically not used for that tax FMV."
      }
    },
    {
      "@type": "Question",
      "name": "What volatility should I use for an unlisted company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A listed company generally uses its own historical share-price volatility over a period matching the expected term. An unlisted or newly listed company has no traded price, so it uses the volatility of comparable listed peers or the sector, with judgement on the peer set and the period. Ind AS 102 requires the volatility assumption to be set using market-consistent data available at the grant date, and the basis should be documented for the auditor."
      }
    },
    {
      "@type": "Question",
      "name": "What is expected term and how does it differ from contractual life?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Expected term is the period from grant to the date the option is expected to actually be exercised, which is usually shorter than the full contractual life because employees tend to exercise early. It is the time input to Black-Scholes for ESOP valuation. A longer expected term, for a given volatility, raises the option's time value and so its fair value. Estimating expected term is one of the main judgement areas under Ind AS 102."
      }
    },
    {
      "@type": "Question",
      "name": "How do dividends and the risk-free rate affect the value?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A higher expected dividend yield lowers a call option's value, because dividends reduce the expected growth of the share price that the option benefits from. A higher risk-free rate raises a call's value, since the present value of the exercise price paid in future is lower. Both are usually second-order compared with volatility and term, but Ind AS 102 still requires reasonable, documented estimates, with the risk-free rate taken from government bonds of matching maturity."
      }
    },
    {
      "@type": "Question",
      "name": "Can Black-Scholes value options with vesting or performance conditions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Plain Black-Scholes values a European-style option and does not directly handle complex vesting or market and performance conditions. Under Ind AS 102, service and non-market vesting conditions are reflected by adjusting the number of options expected to vest rather than the fair value, while market conditions are built into the fair value, often using a binomial or Monte Carlo model instead. For such cases a specialist valuation is needed beyond this calculator."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Black-Scholes Option Pricing Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Black-Scholes Option Pricing Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It returns the per-option fair value for a call or put, the d1 and d2 terms, and the total and annual ESOP expense for Ind AS 102. For a defensible valuation report and audit support, a professional valuation should still be obtained."
      }
    }
  ]
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
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
        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }
        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 6px; }
        .calc-card .calc-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 22px; }
        .field-group-title { font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 22px 0 12px; font-family: var(--font-mono); }
        .q-label { display: block; font-size: 15px; font-weight: 600; color: var(--primary-dark); margin-bottom: 10px; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; margin-bottom: 4px; }
        .toggle-btn { flex: 1; padding: 11px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 90px; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 4px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; }
        .form-group input { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 22px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .result-grid { display: grid; grid-template-columns: 1fr; gap: 12px; }
        @media (min-width: 500px) { .result-grid { grid-template-columns: 1fr 1fr; } }
        .result-card { background: var(--surface); border-radius: var(--radius); padding: 16px 20px; border: 1px solid var(--border); }
        .result-card.highlight { background: var(--primary); border-color: var(--primary); }
        .result-card.highlight .result-label, .result-card.highlight .result-value { color: #fff; }
        .result-label { font-size: 12px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .result-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); word-break: break-word; overflow-wrap: anywhere; }
        .result-breakdown { margin-top: 16px; background: var(--surface-alt); border-radius: var(--radius); padding: 16px 20px; }
        .breakdown-row { display: flex; justify-content: space-between; align-items: center; padding: 6px 0; font-size: 14px; gap: 12px; }
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-row.total { border-top: 2px solid var(--border); margin-top: 4px; padding-top: 10px; font-weight: 700; }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); text-align: right; word-break: break-word; }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }
        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 0 0 14px 20px; color: var(--text-secondary); font-size: 15px; line-height: 1.75; }
        .content-section li { margin-bottom: 6px; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.35s ease, padding 0.35s ease; }
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
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        .inline-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color:#fff; border-radius: var(--radius-lg); padding: 28px; text-align:center; margin: 0 0 32px; }
        .inline-cta h3 { color:#fff; font-size:20px; margin-bottom:10px; }
        .inline-cta p { color:rgba(255,255,255,0.85); font-size:15px; margin-bottom:18px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }

/* ===== UPDATE-TOOLS v1 appended blocks ===== */
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
        <a href="#what-is">What It Is</a>
        <a href="#formula">The Formula</a>
        <a href="#inputs">The Inputs</a>
        <a href="#expense">ESOP Expense</a>
        <a href="#example">Example</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Black-Scholes Option Pricing Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Black-Scholes Calculator — <span>ESOP Fair Value Ind AS 102</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need a defensible ESOP valuation? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20need%20an%20Ind%20AS%20102%20ESOP%20valuation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Ind%20AS%20102%20ESOP%20valuation%20%28Black-Scholes%29%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20would%20like%20an%20Ind%20AS%20102%20ESOP%20valuation.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%29%3A%0A-%20Options%20granted%3A%0A-%20Strike%20%26%20grant-date%20share%20value%3A%0A-%20Expected%20term%20/%20vesting%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Enter the six Black-Scholes inputs — <strong>spot price, strike, expected term, volatility, risk-free rate</strong> and <strong>dividend yield</strong> — and this calculator returns the <strong>per-option fair value</strong> (call or put) using the dividend-adjusted <strong>Black-Scholes-Merton</strong> model, with d1/d2 shown. Add the number of options and vesting years to get the <strong>total and annual ESOP expense under Ind AS 102</strong>. This is the <strong>accounting</strong> fair value of the option — distinct from the perquisite-tax FMV at exercise (which never uses Black-Scholes).</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Black-Scholes Option Value & ESOP Expense</h2>
            <p class="calc-sub">Enter prices in any currency (be consistent). Volatility and rates in % per annum; term in years.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or apply the Black-Scholes-Merton formula given below manually.
                </div>
            </noscript>

            <label class="q-label">Option type</label>
            <div class="toggle-group" id="typeToggle">
                <button type="button" class="toggle-btn active" data-type="call" onclick="pickType(this)">Call (ESOP)</button>
                <button type="button" class="toggle-btn" data-type="put" onclick="pickType(this)">Put</button>
            </div>

            <div class="field-group-title">Model inputs</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="spot">Spot Price (S)</label>
                    <input type="text" id="spot" placeholder="e.g. 120" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Share price at grant date.</div>
                </div>
                <div class="form-group">
                    <label for="strike">Strike / Exercise Price (K)</label>
                    <input type="text" id="strike" placeholder="e.g. 100" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Price the employee pays on exercise.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="term">Expected Term (years, T)</label>
                    <input type="text" id="term" placeholder="e.g. 5" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Grant to expected exercise (not full contractual life).</div>
                </div>
                <div class="form-group">
                    <label for="vol">Volatility (σ, % p.a.)</label>
                    <input type="text" id="vol" placeholder="e.g. 25" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Own or peer-group historical volatility.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="rate">Risk-free Rate (r, % p.a.)</label>
                    <input type="text" id="rate" placeholder="e.g. 6.5" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Govt bond yield of matching maturity.</div>
                </div>
                <div class="form-group">
                    <label for="divy">Dividend Yield (q, % p.a.)</label>
                    <input type="text" id="divy" placeholder="e.g. 0" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Expected dividend yield; 0 if none.</div>
                </div>
            </div>

            <div class="field-group-title">ESOP expense (optional)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="numOpts">Number of Options Granted</label>
                    <input type="text" id="numOpts" placeholder="e.g. 1000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">For total & annual Ind AS 102 expense.</div>
                </div>
                <div class="form-group">
                    <label for="vestYears">Vesting Period (years)</label>
                    <input type="text" id="vestYears" placeholder="e.g. 4" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">For straight-line annual expense.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Fair Value</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card highlight">
                        <div class="result-label">Fair Value per Option</div>
                        <div class="result-value" id="resFv">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Total ESOP Expense</div>
                        <div class="result-value" id="resTotal">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need this as a defensible Ind AS 102 report?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant prepares the Black-Scholes / binomial valuation with documented assumptions and audit support for your financial statements.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20need%20an%20Ind%20AS%20102%20ESOP%20valuation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Ind%20AS%20102%20ESOP%20valuation%20%28Black-Scholes%29%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20would%20like%20an%20Ind%20AS%20102%20ESOP%20valuation.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%29%3A%0A-%20Options%20granted%3A%0A-%20Strike%20%26%20grant-date%20share%20value%3A%0A-%20Expected%20term%20/%20vesting%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Black-Scholes Calculator</h2>
            <ol>
                <li><strong>Pick option type</strong> — Call is the normal ESOP case; Put is included for completeness.</li>
                <li><strong>Enter the six model inputs</strong> — spot price at grant, strike/exercise price, expected term in years, volatility, risk-free rate and dividend yield (rates in % per year).</li>
                <li><strong>Optionally add the ESOP expense inputs</strong> — number of options granted and the vesting period.</li>
                <li><strong>Click Calculate</strong> for the per-option fair value, the d1/d2 working, and the total and annual ESOP expense for Ind AS 102.</li>
            </ol>
            <p>For the share-level FMV used in perquisite tax (a different figure), use the <a href="/tools/esop-fmv-calculator">ESOP FMV calculator</a>; for enterprise value, the <a href="/tools/esop-valuation-calculator">ESOP valuation calculator</a>; and for the P&L cost picture, the <a href="/tools/esop-cost-to-company-calculator">ESOP cost-to-company calculator</a>.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Use the <strong>expected term</strong> (to likely exercise), not the full contractual life — employees typically exercise early, and using the contract term overstates the fair value and the expense.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What This Calculator Is For</h2>
            <p>The <strong>Black-Scholes-Merton model</strong> estimates the fair value of an option. For Indian ESOPs its main use is computing the <strong>grant-date fair value of the option</strong> under <strong>Ind AS 102, Share-Based Payment</strong> — the value the company expenses as employee compensation over the vesting period.</p>
            <p>Crucially, this values the <strong>option</strong>, not the underlying share, and it is an <strong>accounting</strong> number. It is separate from — and must not be confused with — the <strong>perquisite-tax FMV</strong> at exercise, which is the average of open and close (listed) or a merchant banker valuation (unlisted) and explicitly does <em>not</em> use Black-Scholes. Patron's <a href="/blog/perquisite-valuation-rules-2026">perquisite valuation rules 2026</a> note covers that tax side.</p>
        </section>

        <section class="content-section" id="formula">
            <h2>The Black-Scholes-Merton Formula</h2>
            <div class="formula-box">
                <span class="label">d1</span> = [ ln(S/K) + (r − q + σ²/2)·T ] / (σ·√T)<br>
                <span class="label">d2</span> = d1 − σ·√T<br><br>
                <span class="label">Call</span> = S·e<sup>−qT</sup>·N(d1) − K·e<sup>−rT</sup>·N(d2)<br>
                <span class="label">Put</span> = K·e<sup>−rT</sup>·N(−d2) − S·e<sup>−qT</sup>·N(−d1)
            </div>
            <p>Where <strong>S</strong> = spot price, <strong>K</strong> = strike, <strong>T</strong> = term in years, <strong>σ</strong> = volatility, <strong>r</strong> = risk-free rate, <strong>q</strong> = dividend yield, and <strong>N(·)</strong> is the cumulative standard normal distribution. The model assumes a European-style option and constant volatility, which is why complex vesting or market conditions need a binomial or Monte-Carlo approach instead.</p>
        </section>

        <section class="content-section" id="inputs">
            <h2>The Six Inputs Explained</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Input</th><th>What it is & how to estimate it</th></tr>
                </thead>
                <tbody>
                    <tr><td>Spot price (S)</td><td>Share value at grant — quoted price for listed, latest valuation for unlisted.</td></tr>
                    <tr><td>Strike (K)</td><td>The exercise price set in the option grant.</td></tr>
                    <tr><td>Expected term (T)</td><td>Grant to expected exercise (usually shorter than contractual life).</td></tr>
                    <tr><td>Volatility (σ)</td><td>Own share history for listed; comparable peers/sector for unlisted, at the grant date.</td></tr>
                    <tr><td>Risk-free rate (r)</td><td>Government bond yield of maturity matching the expected term.</td></tr>
                    <tr><td>Dividend yield (q)</td><td>Expected annual dividend yield; higher q lowers a call's value.</td></tr>
                </tbody>
            </table>
            <p>Volatility and term have the largest impact; the risk-free rate and dividend yield are usually second-order. For unlisted companies, the volatility judgement (peer set, period) is the main area auditors probe — the basis should be documented at grant. The Ind AS 102 standard itself is issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> and notified under the Companies Act by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>, while the risk-free rate is read off government securities published by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Ind AS 102 ESOP Valuation?</h3>
            <p>Patron Accounting LLP supports startups and finance teams valuing ESOPs for share-based-payment accounting — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20need%20an%20Ind%20AS%20102%20ESOP%20valuation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Ind%20AS%20102%20ESOP%20valuation%20%28Black-Scholes%29%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20would%20like%20an%20Ind%20AS%20102%20ESOP%20valuation.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%29%3A%0A-%20Options%20granted%3A%0A-%20Strike%20%26%20grant-date%20share%20value%3A%0A-%20Expected%20term%20/%20vesting%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="expense">
            <h2>From Fair Value to ESOP Expense</h2>
            <div class="formula-box">
                <span class="label">Total ESOP expense</span> = Fair value per option × Options granted<br>
                <span class="label">Annual expense</span> = Total expense ÷ Vesting years (straight-line)
            </div>
            <p>Under Ind AS 102 the total is recognised over the vesting period. Worked example: 1,000 options with a Black-Scholes fair value of ₹50 give a total expense of ₹50,000, charged at ₹12,500 per year over a four-year vest. Service and non-market vesting conditions are reflected by adjusting the <em>number</em> of options expected to vest, not the per-option fair value.</p>
            <p>For the broader cost view across grant, vesting and exercise, see the <a href="/tools/esop-cost-to-company-calculator">cost-to-company calculator</a>; the deferred-tax impact of the timing difference can be modelled with the <a href="/tools/deferred-tax-calculator">deferred tax calculator</a>.</p>
        </section>

        <section class="content-section" id="example">
            <h2>Worked Example & Sensitivity</h2>
            <p>A company grants 1,000 options at a strike of ₹100 when the share is worth ₹120, with a 5-year expected term, 25% volatility, a 6.5% risk-free rate and no dividend. Black-Scholes returns a fair value of about <strong>₹52.8 per option</strong>, so the total ESOP expense is roughly <strong>₹52,800</strong>, charged at around <strong>₹13,200 a year</strong> over a four-year vest. Change one input and watch the value move:</p>
            <ul>
                <li><strong>Higher volatility</strong> raises the fair value — more share-price dispersion means more upside the option can capture.</li>
                <li><strong>Longer expected term</strong> raises it too, by adding time value (so using the contractual life instead of expected term overstates the charge).</li>
                <li><strong>Higher dividend yield</strong> lowers a call's value, since dividends reduce the share's expected growth.</li>
                <li><strong>Higher risk-free rate</strong> nudges a call's value up, by reducing the present value of the future strike payment.</li>
            </ul>
            <p>Because volatility and term dominate, those two assumptions deserve the most documentation. Note the contrast with tax: the perquisite charge at exercise is governed by the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax</a> FMV rules, and for unlisted shares the relevant valuer is a <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Category-I merchant banker — Black-Scholes does not feature there at all.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Black-Scholes model used for in ESOPs?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Black-Scholes-Merton model estimates the fair value of a stock option. For ESOPs in India it is the standard way to compute the grant-date fair value of the option under Ind AS 102, Share-Based Payment. That per-option fair value, multiplied by the number of options granted, gives the total employee compensation expense the company recognises over the vesting period. Note this is the accounting charge, distinct from the perquisite-tax FMV at exercise.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What inputs does the Black-Scholes calculator need?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Six inputs drive the model: the spot price of the share at grant, the exercise or strike price, the expected term in years, the expected volatility, the risk-free interest rate and the expected dividend yield. For the ESOP expense you also enter the number of options granted and the vesting period. Volatility is usually taken from the company's own share history or a comparable peer set, and the risk-free rate from government bonds of matching maturity.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Black-Scholes formula?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For a call option with a dividend yield, the value is S times e to the minus qT times N(d1), minus K times e to the minus rT times N(d2). Here d1 equals the natural log of S over K, plus r minus q plus half sigma squared, all times T, divided by sigma times the square root of T; and d2 equals d1 minus sigma times the square root of T. S is spot, K is strike, T is term, sigma is volatility, r is the risk-free rate, q is dividend yield and N is the cumulative normal distribution.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is the ESOP accounting expense calculated from the fair value?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The total ESOP expense equals the per-option fair value from Black-Scholes multiplied by the number of options granted. Under Ind AS 102 this expense is recognised over the vesting period, so the annual charge is the total divided by the number of vesting years for a straight-line approach. For example, 1,000 options at a fair value of 50 give a total of 50,000, expensed at 12,500 a year over four years.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is Black-Scholes used for ESOP perquisite tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Black-Scholes is used for the accounting fair value under Ind AS 102, not for the perquisite tax. The taxable perquisite at exercise is the fair market value of the share on the exercise date, less the exercise price, where FMV is the average of open and close for listed shares or a Category I merchant banker valuation for unlisted shares. Black-Scholes and binomial models are specifically not used for that tax FMV.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What volatility should I use for an unlisted company?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A listed company generally uses its own historical share-price volatility over a period matching the expected term. An unlisted or newly listed company has no traded price, so it uses the volatility of comparable listed peers or the sector, with judgement on the peer set and the period. Ind AS 102 requires the volatility assumption to be set using market-consistent data available at the grant date, and the basis should be documented for the auditor.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is expected term and how does it differ from contractual life?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Expected term is the period from grant to the date the option is expected to actually be exercised, which is usually shorter than the full contractual life because employees tend to exercise early. It is the time input to Black-Scholes for ESOP valuation. A longer expected term, for a given volatility, raises the option's time value and so its fair value. Estimating expected term is one of the main judgement areas under Ind AS 102.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do dividends and the risk-free rate affect the value?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A higher expected dividend yield lowers a call option's value, because dividends reduce the expected growth of the share price that the option benefits from. A higher risk-free rate raises a call's value, since the present value of the exercise price paid in future is lower. Both are usually second-order compared with volatility and term, but Ind AS 102 still requires reasonable, documented estimates, with the risk-free rate taken from government bonds of matching maturity.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can Black-Scholes value options with vesting or performance conditions?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Plain Black-Scholes values a European-style option and does not directly handle complex vesting or market and performance conditions. Under Ind AS 102, service and non-market vesting conditions are reflected by adjusting the number of options expected to vest rather than the fair value, while market conditions are built into the fair value, often using a binomial or Monte Carlo model instead. For such cases a specialist valuation is needed beyond this calculator.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Black-Scholes Option Pricing Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Black-Scholes Option Pricing Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It returns the per-option fair value for a call or put, the d1 and d2 terms, and the total and annual ESOP expense for Ind AS 102. For a defensible valuation report and audit support, a professional valuation should still be obtained.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Ind AS 102 ESOP Valuation</h3>
            <p>Black-Scholes / binomial valuations with assumption disclosures and audit support — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20need%20an%20Ind%20AS%20102%20ESOP%20valuation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Ind%20AS%20102%20ESOP%20valuation%20%28Black-Scholes%29%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Black-Scholes%20Option%20Pricing%20Calculator%20and%20would%20like%20an%20Ind%20AS%20102%20ESOP%20valuation.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%29%3A%0A-%20Options%20granted%3A%0A-%20Strike%20%26%20grant-date%20share%20value%3A%0A-%20Expected%20term%20/%20vesting%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/esop-fmv-calculator" class="sidebar-link">ESOP FMV Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-valuation-calculator" class="sidebar-link">ESOP Valuation Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-cost-to-company-calculator" class="sidebar-link">ESOP Cost-to-Company <span class="arrow">→</span></a>
            <a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">Perquisite Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
            <a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation <span class="arrow">→</span></a>
            <a href="/esop-services" class="sidebar-link">ESOP Services <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-perquisite-tax-section-17" class="sidebar-link">ESOP Perquisite Tax <span class="arrow">→</span></a>
            <a href="/blog/what-is-esop-india-startup-guide" class="sidebar-link">What is ESOP <span class="arrow">→</span></a>
        </div>
    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
    // ===== parseINR (UPDATE-TOOLS v1) =====
    function parseINR(raw){ if(raw===undefined||raw===null) return NaN; const c=String(raw).replace(/[,\s\u20B9]/g,''); if(c==='')return NaN; const n=parseFloat(c); return isFinite(n)?n:NaN; }
    function pickPositive(p,fb){ return (isFinite(p)&&p>0)?p:fb; }

    var optType = 'call';
    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtNum(n){ return n.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }); }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }

    // Cumulative standard normal via Abramowitz & Stegun 7.1.26 (erf)
    function erf(x){
        var sign = x < 0 ? -1 : 1; x = Math.abs(x);
        var a1=0.254829592, a2=-0.284496736, a3=1.421413741, a4=-1.453152027, a5=1.061405429, p=0.3275911;
        var t = 1/(1 + p*x);
        var y = 1 - (((((a5*t + a4)*t) + a3)*t + a2)*t + a1)*t*Math.exp(-x*x);
        return sign*y;
    }
    function normCdf(x){ return 0.5 * (1 + erf(x / Math.sqrt(2))); }

    function pickType(btn){
        optType = btn.dataset.type;
        document.querySelectorAll('#typeToggle .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        document.getElementById('resultSection').classList.remove('visible');
    }

    function calculate(){
        var S = val('spot'), K = val('strike'), T = val('term');
        var sigma = val('vol')/100, r = val('rate')/100, q = val('divy')/100;
        var n = val('numOpts'), vest = val('vestYears');

        if (S <= 0 || K <= 0 || T <= 0 || sigma <= 0){
            alert('Please enter positive Spot, Strike, Term and Volatility.'); return;
        }

        var sqrtT = Math.sqrt(T);
        var d1 = (Math.log(S/K) + (r - q + 0.5*sigma*sigma)*T) / (sigma*sqrtT);
        var d2 = d1 - sigma*sqrtT;
        var discS = S*Math.exp(-q*T);
        var discK = K*Math.exp(-r*T);

        var fv;
        if (optType === 'call'){
            fv = discS*normCdf(d1) - discK*normCdf(d2);
        } else {
            fv = discK*normCdf(-d2) - discS*normCdf(-d1);
        }
        fv = Math.max(0, fv);

        document.getElementById('resFv').textContent = fmtNum(fv);

        var rows = '';
        rows += '<div class="breakdown-row"><span class="breakdown-label">d1</span><span class="breakdown-value">' + d1.toFixed(4) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">d2</span><span class="breakdown-value">' + d2.toFixed(4) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">N(' + (optType==='call'?'d1':'−d1') + ')</span><span class="breakdown-value">' + (optType==='call'?normCdf(d1):normCdf(-d1)).toFixed(4) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">N(' + (optType==='call'?'d2':'−d2') + ')</span><span class="breakdown-value">' + (optType==='call'?normCdf(d2):normCdf(-d2)).toFixed(4) + '</span></div>';
        rows += '<div class="breakdown-row total"><span class="breakdown-label">Fair value per option (' + optType + ')</span><span class="breakdown-value">' + fmtNum(fv) + '</span></div>';

        var totalTxt = '—';
        if (n > 0){
            var total = fv * n;
            totalTxt = fmtINR(total);
            rows += '<div class="breakdown-row"><span class="breakdown-label">× Options granted</span><span class="breakdown-value">' + n.toLocaleString('en-IN') + '</span></div>';
            rows += '<div class="breakdown-row total"><span class="breakdown-label">Total ESOP expense</span><span class="breakdown-value">' + fmtINR(total) + '</span></div>';
            if (vest > 0){
                rows += '<div class="breakdown-row"><span class="breakdown-label">Annual expense (÷ ' + vest + ' yrs, straight-line)</span><span class="breakdown-value">' + fmtINR(total/vest) + '</span></div>';
            }
        }
        document.getElementById('resTotal').textContent = totalTxt;
        document.getElementById('breakdownSection').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        ['spot','strike','term','vol','rate','divy','numOpts','vestYears'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['spot','strike','term','vol','rate','divy','numOpts','vestYears'].forEach(function(id){
        document.getElementById(id).addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });
    });

    function toggleFaq(e){
        var btn = e.closest ? e.closest('.faq-question') || e : e;
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(i){ i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }

    var sections = document.querySelectorAll('section[id], header[id]');
    var navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', function(){
        var current = '';
        sections.forEach(function(s){ var top = s.offsetTop - 80; if (window.pageYOffset >= top) current = s.getAttribute('id'); });
        navLinks.forEach(function(link){ link.classList.toggle('active', link.getAttribute('href') === '#' + current); });
    });
</script>
</body>
</html>
@endsection