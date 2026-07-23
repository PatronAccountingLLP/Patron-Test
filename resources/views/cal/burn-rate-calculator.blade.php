
@extends('layouts.app')
@section('meta')
<title>Burn Rate Calculator | Startup Cash Runway in Months</title>
<meta name="description" content="Free burn rate calculator for startups: enter starting cash, ending cash & months to get gross burn, net burn and cash runway. India benchmarks. Try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/burn-rate-calculator">

<meta property="og:title" content="Burn Rate Calculator — Cash Runway in Months">
<meta property="og:description" content="Calculate gross burn, net burn, cash runway and breakeven month in rupees with India-specific startup benchmarks. Free, instant, no signup.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/burn-rate-calculator">
<meta property="og:image" content="/tools/burn-rate-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Burn Rate Calculator — Cash Runway in Months">
<meta name="twitter:description" content="Calculate gross burn, net burn, cash runway and breakeven month in rupees with India startup benchmarks. Free & instant.">
<meta name="twitter:image" content="/tools/burn-rate-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Burn Rate Calculator",
  "description": "Burn Rate Calculator computes a startup's monthly gross burn rate, net burn rate, cash runway in months and projected breakeven month from cash balance, expenses, revenue and growth, with figures shown in Indian rupees.",
  "url": "/tools/burn-rate-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "Burn Rate Calculator", "item": "/tools/burn-rate-calculator"}
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
      "name": "What is burn rate for a startup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Burn rate is the speed at which a startup spends its cash reserves each month. Gross burn is total monthly operating expenses, while net burn is expenses minus revenue, which is the actual cash leaving your bank account. Investors track net burn closely because it directly determines how many months of runway a company has left before it needs to raise again."
      }
    },
    {
      "@type": "Question",
      "name": "How do you calculate burn rate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Gross burn rate equals total monthly cash expenses such as salaries, rent and software. Net burn rate equals monthly expenses minus monthly revenue. Alternatively, subtract your ending cash balance from your opening balance over a period and divide by the number of months. Our calculator does both methods instantly and shows the result in rupees with your runway in months."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between gross burn and net burn?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Gross burn is the total cash you spend each month regardless of income, covering every operating cost. Net burn subtracts your revenue from those expenses, showing the true monthly cash depletion. A pre-revenue startup has identical gross and net burn. Once you earn revenue, net burn falls below gross burn and is the figure that drives your real cash runway."
      }
    },
    {
      "@type": "Question",
      "name": "How is startup runway calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Runway equals your current cash balance divided by your monthly net burn rate. For example, ₹50 lakh in the bank with ₹5 lakh net monthly burn gives 10 months of runway. If your revenue exceeds expenses you have negative net burn, meaning you are cash-flow positive and your runway is effectively unlimited at current performance."
      }
    },
    {
      "@type": "Question",
      "name": "What is a healthy runway for Indian startups in 2026?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "With fundraising rounds in India now taking 3 to 9 months or longer to close, founders are advised to maintain 18 to 24 months of runway after a raise. Start your next fundraise with at least 9 to 12 months of cash remaining and never let runway fall below 6 months during an active raise, as low runway weakens negotiating leverage."
      }
    },
    {
      "@type": "Question",
      "name": "What is the burn multiple?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Burn multiple equals net burn divided by net new annual recurring revenue (ARR) added in the same period. It measures how efficiently you convert spending into revenue. In 2026 a burn multiple below 1.5x is considered excellent for Series A readiness, while a multiple above 2x to 3x signals capital inefficiency and makes raising the next round significantly harder."
      }
    },
    {
      "@type": "Question",
      "name": "How can a startup reduce its burn rate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Common levers include trimming non-essential headcount, renegotiating SaaS and vendor contracts, moving to variable or outsourced functions, pausing low-ROI marketing and deferring capital expenditure. Increasing revenue or collecting receivables faster also cuts net burn. Indian startups often extend runway with venture debt from lenders like Trifecta or InnoVen instead of diluting equity in a down market."
      }
    },
    {
      "@type": "Question",
      "name": "Why do investors ask about burn rate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Burn rate tells investors how disciplined a founder is with capital and how long the company can survive without new funding. A high burn with short runway is a red flag suggesting the startup may run out of cash before hitting milestones. Founders who can explain their burn, runway and the milestones each rupee buys are viewed as responsible stewards of capital."
      }
    },
    {
      "@type": "Question",
      "name": "Is burn rate measured before or after tax?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Burn rate is a cash metric, so it is based on actual cash leaving your bank account, including any GST, TDS and advance tax payments you make. It is not an accrual or post-tax accounting figure. For accuracy, base burn on your bank statements and cash flow statement rather than the profit and loss account, which contains non-cash items like depreciation."
      }
    },
    {
      "@type": "Question",
      "name": "Does revenue growth extend my runway?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. If revenue grows month on month while expenses stay flat, net burn shrinks each month and runway stretches beyond a simple cash-divided-by-burn estimate. Eventually revenue may overtake expenses, giving you a breakeven month after which you stop burning cash. Our calculator models a monthly growth rate to project this breakeven point and a more realistic runway."
      }
    },
    {
      "@type": "Question",
      "name": "What costs should be included in burn rate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Include all recurring cash outflows: salaries and contractor fees, office rent, cloud and software subscriptions, marketing spend, professional fees, statutory dues and loan repayments. Payroll typically accounts for 60 to 75 percent of a startup's burn. Exclude one-off non-recurring items when measuring the steady monthly rate, but track them separately as they still consume cash."
      }
    },
    {
      "@type": "Question",
      "name": "Is this burn rate calculator free to use?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Burn Rate Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It is built for Indian founders, displays results in rupees with lakh and crore formatting, and includes 2026 stage-wise benchmarks to help you interpret your runway."
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
        body {
            font-family: var(--font-body);
            background: var(--surface);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }
        .toc-nav {
            background: var(--primary-dark);
            position: sticky; top: 0; z-index: 100;
            overflow-x: auto; white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
        .toc-nav a {
            color: rgba(255,255,255,0.75); text-decoration: none;
            font-size: 13px; font-weight: 500; padding: 12px 16px;
            transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block;
        }
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
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 24px; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; text-transform: none; letter-spacing: 0; font-weight: 400; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1; padding: 10px 16px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
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
        .result-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }
        .result-breakdown { margin-top: 16px; background: var(--surface-alt); border-radius: var(--radius); padding: 16px 20px; }
        .breakdown-row { display: flex; justify-content: space-between; align-items: center; padding: 6px 0; font-size: 14px; }
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); }
        .health-pill { display:inline-block; padding:4px 14px; border-radius:20px; font-size:13px; font-weight:700; font-family:var(--font-body); }
        .health-good { background:#D1FAE5; color:#059669; }
        .health-ok { background:#FEF3C7; color:#B45309; }
        .health-bad { background:#FEE2E2; color:#DC2626; }
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
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
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
        <a href="#what-is">What is Burn Rate</a>
        <a href="#formula">Formula</a>
        <a href="#benchmarks">2026 Benchmarks</a>
        <a href="#reduce">Reduce Burn</a>
        <a href="#india">India Notes</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Burn Rate Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Burn Rate Calculator — <span>Cash Runway</span> in Months</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need help reading your numbers? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Burn%20Rate%20Calculator%20and%20need%20help%20with%20startup%20cash-flow%20and%20runway%20planning.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Burn%20Rate%20/%20Runway%20planning%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Burn%20Rate%20Calculator%20and%20would%20like%20help%20with%20cash-flow%20and%20runway%20planning%20for%20my%20startup.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free Burn Rate Calculator works out your startup's <strong>gross burn</strong> (total monthly spend), <strong>net burn</strong> (spend minus revenue) and <strong>cash runway</strong> in months — all in rupees. Add a monthly revenue growth rate and it also projects your <strong>breakeven month</strong>. Built for Indian founders, it shows lakh/crore formatting and 2026 stage-wise benchmarks so you know exactly how long your cash lasts and when to start your next raise. All maths runs in your browser; nothing is stored.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Burn Rate & Runway</h2>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or use the formula in the "Formula" section below to calculate burn rate and runway manually.
                </div>
            </noscript>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Amounts entered in</label>
                <div class="toggle-group" id="unitToggle">
                    <button type="button" class="toggle-btn active" data-value="rupees" onclick="setUnit(this)">₹ Rupees</button>
                    <button type="button" class="toggle-btn" data-value="lakh" onclick="setUnit(this)">₹ Lakh</button>
                    <button type="button" class="toggle-btn" data-value="crore" onclick="setUnit(this)">₹ Crore</button>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="cash">Current Cash Balance</label>
                    <input type="text" id="cash" placeholder="e.g. 50" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Money in the bank right now.</div>
                </div>
                <div class="form-group">
                    <label for="expenses">Monthly Expenses</label>
                    <input type="text" id="expenses" placeholder="e.g. 8" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">All cash going out per month (salaries, rent, software, marketing).</div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="revenue">Monthly Revenue</label>
                    <input type="text" id="revenue" placeholder="e.g. 3" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Cash income per month. Enter 0 if pre-revenue.</div>
                </div>
                <div class="form-group">
                    <label for="growth">Monthly Revenue Growth %</label>
                    <input type="text" id="growth" placeholder="e.g. 10" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Optional. Compounds monthly to project breakeven.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Runway</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Gross Burn / Month</div>
                        <div class="result-value" id="resGross">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Net Burn / Month</div>
                        <div class="result-value" id="resNet">—</div>
                    </div>
                    <div class="result-card highlight" style="grid-column: 1 / -1;">
                        <div class="result-label">Cash Runway</div>
                        <div class="result-value" id="resRunway">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div style="margin-top:16px;">
                    <span class="result-label" style="display:block;margin-bottom:6px;">Health Assessment</span>
                    <span class="health-pill" id="healthPill">—</span>
                    <p style="font-size:13px;color:var(--text-secondary);margin-top:10px;line-height:1.6;" id="healthNote"></p>
                </div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want a CA to review this before you act on it?</div>
                    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Burn Rate Calculator output validation, no obligation.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Burn%20Rate%20Calculator%20and%20need%20help%20with%20startup%20cash-flow%20and%20runway%20planning.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Burn%20Rate%20/%20Runway%20planning%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Burn%20Rate%20Calculator%20and%20would%20like%20help%20with%20cash-flow%20and%20runway%20planning%20for%20my%20startup.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use This Burn Rate Calculator</h2>
            <ol>
                <li><strong>Pick your unit</strong> — enter figures in rupees, lakh or crore. The toggle scales everything automatically, so seed founders can work in lakh and growth-stage teams in crore.</li>
                <li><strong>Enter your current cash balance</strong> — the actual money in your bank accounts today, not committed-but-undrawn funding.</li>
                <li><strong>Enter monthly expenses</strong> — total cash outflow each month: payroll, rent, cloud and SaaS, marketing, professional fees and statutory dues.</li>
                <li><strong>Enter monthly revenue</strong> — recognised cash income. Leave it at 0 if you are pre-revenue; gross and net burn will then be identical.</li>
                <li><strong>Add a growth rate (optional)</strong> — if revenue is growing, enter the monthly percentage. The tool compounds it to project when you hit breakeven and extends your runway accordingly.</li>
                <li><strong>Click Calculate Runway</strong> — you instantly see gross burn, net burn, runway in months, a projected cash-out date and a health rating against 2026 benchmarks.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Base your inputs on your bank statement and <a href="/tools/cash-flow-calculator">cash flow statement</a>, not the profit & loss account. The P&L includes non-cash items like depreciation that distort a true cash burn figure.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Is Burn Rate?</h2>
            <p>Burn rate is the speed at which a startup consumes its cash reserves, almost always measured per month. Because venture-backed companies typically operate at a loss in their early years and rely on raised capital to fund operations, burn rate is one of the first metrics any investor asks about. It is a countdown to the month you can no longer make payroll — and the founders who survive are the ones who know exactly how much time they have.</p>
            <h3>Gross Burn vs Net Burn</h3>
            <p><strong>Gross burn</strong> is your total monthly cash expenditure regardless of income — every rupee leaving the company. <strong>Net burn</strong> subtracts your monthly revenue from those expenses, showing the actual cash being depleted. If you are pre-revenue, the two are identical. Once you earn money, net burn falls below gross burn and becomes the number that truly drives your runway.</p>
            <h3>Cash Runway</h3>
            <p>Runway is how many months your current cash will last at today's net burn. A startup holding ₹50 lakh and burning ₹5 lakh of net cash per month has 10 months of runway — simple arithmetic with existential consequences. When revenue exceeds expenses your net burn turns negative, meaning you are cash-flow positive and, at current performance, your runway is effectively unlimited.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> Runway assumes expenses and revenue stay constant. In reality both move, so recalculate at least monthly and after any major hire, price change or funding event.</p>
            </div>
        </section>

        <section class="content-section" id="formula">
            <h2>Burn Rate & Runway Formula</h2>
            <p>There are two equivalent ways to measure burn. The expense method uses your current cost structure; the cash-depletion method back-calculates from your bank balance over a period.</p>
            <div class="formula-box">
                <span class="label">Gross Burn</span> = Total Monthly Expenses<br>
                <span class="label">Net Burn</span> = Monthly Expenses − Monthly Revenue<br>
                <span class="label">Runway (months)</span> = Current Cash ÷ Net Burn<br><br>
                <span class="label">Alt. method:</span><br>
                Burn = (Opening Cash − Closing Cash) ÷ Number of Months
            </div>
            <h3>Worked Example</h3>
            <p>Suppose a seed-stage SaaS startup has ₹60 lakh in the bank. It spends ₹10 lakh a month and earns ₹4 lakh in revenue.</p>
            <div class="formula-box">
                Gross Burn = <span class="label">₹10,00,000</span><br>
                Net Burn = ₹10,00,000 − ₹4,00,000 = <span class="label">₹6,00,000</span><br>
                Runway = ₹60,00,000 ÷ ₹6,00,000 = <span class="label">10 months</span>
            </div>
            <p>With 10 months of runway, this founder should already be preparing the next raise — Indian rounds now commonly take <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">several months</a> to close.</p>
            <h3>The Burn Multiple</h3>
            <p>Investors increasingly look beyond raw burn at the <strong>burn multiple</strong> — net burn divided by net new annual recurring revenue (ARR) added in the same period. It measures capital efficiency: how many rupees you burn to add one rupee of recurring revenue. In 2026, below 1.5x is considered excellent for Series A readiness, while above 2x to 3x makes the next round materially harder to raise.</p>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>2026 Burn & Runway Benchmarks by Stage</h2>
            <p>"Healthy" burn depends far more on your stage and runway than on your industry. The table below summarises commonly cited 2026 expectations. Note that Indian startups historically operate with materially lower cash burn than US peers at the same stage — frugality that becomes a genuine advantage during funding winters.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Stage</th><th>Primary Goal</th><th>Target Runway</th></tr>
                </thead>
                <tbody>
                    <tr><td>Pre-seed / Idea</td><td>Validation, first build</td><td>18–24 months</td></tr>
                    <tr><td>Seed</td><td>Product-market fit</td><td>18–24 months</td></tr>
                    <tr><td>Series A</td><td>Repeatable revenue growth</td><td>18–24 months</td></tr>
                    <tr><td>Series B+</td><td>Scale & expansion</td><td>12–24 months</td></tr>
                </tbody>
            </table>
            <p>The consistent theme across stages in 2026 is to raise with <strong>9–12 months of runway remaining</strong> and never let it fall below 6 months during an active raise. Payroll typically accounts for 60–75% of a startup's burn, so headcount is the single biggest lever on your runway. For deeper ratio analysis, pair this tool with our <a href="/tools/financial-ratios-dashboard">financial ratios dashboard</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Startup Cash Flow & Runway?</h3>
            <p>Patron Accounting LLP supports startups and founders managing burn and runway — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Burn%20Rate%20Calculator%20and%20need%20help%20with%20startup%20cash-flow%20and%20runway%20planning.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Burn%20Rate%20/%20Runway%20planning%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Burn%20Rate%20Calculator%20and%20would%20like%20help%20with%20cash-flow%20and%20runway%20planning%20for%20my%20startup.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="reduce">
            <h2>How to Reduce Burn Rate & Extend Runway</h2>
            <p>If your runway is uncomfortably short, you have two routes: spend less or earn more. Practical levers Indian founders use include:</p>
            <ul>
                <li><strong>Right-size headcount</strong> — payroll dominates burn, so freezing non-critical hires or restructuring teams has the largest impact.</li>
                <li><strong>Renegotiate SaaS & vendor contracts</strong> — annual prepayments, startup credits and consolidating tools can cut recurring spend significantly.</li>
                <li><strong>Move fixed costs to variable</strong> — outsource finance, payroll and compliance instead of carrying full-time overhead.</li>
                <li><strong>Pause low-ROI marketing</strong> — protect spend that has a measurable payback and cut the rest.</li>
                <li><strong>Accelerate collections</strong> — faster receivables directly reduce net burn without touching the cost base.</li>
                <li><strong>Use venture debt</strong> — lenders such as Trifecta, InnoVen and Stride let DPIIT-recognised startups extend runway between rounds without diluting equity.</li>
            </ul>
            <div class="callout">
                <p><strong>CA Tip:</strong> Before cutting costs blindly, model each scenario. A small revenue-growth assumption can extend runway as effectively as a large cost cut — run both in the calculator above and compare the breakeven months.</p>
            </div>
        </section>

        <section class="content-section" id="india">
            <h2>Burn Rate & Compliance Notes for Indian Startups</h2>
            <p>Burn rate is a cash metric, so it captures the real money leaving your accounts — including statutory payments. For Indian founders, a few India-specific points matter:</p>
            <h3>Statutory cash outflows count</h3>
            <p>GST payments, TDS deposits and advance tax all consume cash and therefore form part of your burn. Track them as part of monthly expenses rather than treating them as below-the-line items. You can plan your <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST</a> dues alongside our <a href="/tools/advance-tax-calculator">advance tax calculator</a>, which helps you map these lumpy outflows.</p>
            <h3>DPIIT recognition & Section 80-IAC</h3>
            <p>Registering with <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> for DPIIT recognition unlocks a three-year income tax holiday under Section 80-IAC, self-certification on labour and environment laws, and access to government schemes and collateral-free credit — all of which can ease cash pressure and effectively lengthen runway.</p>
            <h3>Keep audit-ready books</h3>
            <p>Investors conducting due diligence will reconcile your stated burn against your actual books, bank statements and <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> filings. Clean, current accounting is what lets you quote burn and runway with confidence. The accounting framework and disclosures are governed by standards issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>, and audited financials draw on data filed with the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>. Maintaining proper records is also a statutory requirement under the Companies Act administered by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool gives an estimate for planning only. It is not financial, tax or investment advice. Speak to a qualified Chartered Accountant before making fundraising or spending decisions.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Burn Rate</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is burn rate for a startup?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Burn rate is the speed at which a startup spends its cash reserves each month. Gross burn is total monthly operating expenses, while net burn is expenses minus revenue — the actual cash leaving your bank account. Investors track net burn closely because it directly determines how many months of runway a company has left before it needs to raise again.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do you calculate burn rate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Gross burn rate equals total monthly cash expenses such as salaries, rent and software. Net burn rate equals monthly expenses minus monthly revenue. Alternatively, subtract your ending cash balance from your opening balance over a period and divide by the number of months. This calculator does both methods instantly and shows the result in rupees with your runway in months.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between gross burn and net burn?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Gross burn is the total cash you spend each month regardless of income, covering every operating cost. Net burn subtracts your revenue from those expenses, showing the true monthly cash depletion. A pre-revenue startup has identical gross and net burn. Once you earn revenue, net burn falls below gross burn and is the figure that drives your real cash runway.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is startup runway calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Runway equals your current cash balance divided by your monthly net burn rate. For example, ₹50 lakh in the bank with ₹5 lakh net monthly burn gives 10 months of runway. If your revenue exceeds expenses you have negative net burn, meaning you are cash-flow positive and your runway is effectively unlimited at current performance.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is a healthy runway for Indian startups in 2026?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">With fundraising rounds in India now taking several months to close, founders are advised to maintain 18 to 24 months of runway after a raise. Start your next fundraise with at least 9 to 12 months of cash remaining and never let runway fall below 6 months during an active raise, as low runway weakens your negotiating leverage.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the burn multiple?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Burn multiple equals net burn divided by net new annual recurring revenue (ARR) added in the same period. It measures how efficiently you convert spending into revenue. In 2026 a burn multiple below 1.5x is considered excellent for Series A readiness, while a multiple above 2x to 3x signals capital inefficiency and makes raising the next round significantly harder.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How can a startup reduce its burn rate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Common levers include trimming non-essential headcount, renegotiating SaaS and vendor contracts, moving to variable or outsourced functions, pausing low-ROI marketing and deferring capital expenditure. Increasing revenue or collecting receivables faster also cuts net burn. Indian startups often extend runway with venture debt from lenders like Trifecta or InnoVen instead of diluting equity in a down market.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Why do investors ask about burn rate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Burn rate tells investors how disciplined a founder is with capital and how long the company can survive without new funding. A high burn with short runway is a red flag suggesting the startup may run out of cash before hitting milestones. Founders who can explain their burn, runway and the milestones each rupee buys are viewed as responsible stewards of capital.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is burn rate measured before or after tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Burn rate is a cash metric, so it is based on actual cash leaving your bank account, including any GST, TDS and advance tax payments you make. It is not an accrual or post-tax accounting figure. For accuracy, base burn on your bank statements and cash flow statement rather than the profit and loss account, which contains non-cash items like depreciation.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does revenue growth extend my runway?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. If revenue grows month on month while expenses stay flat, net burn shrinks each month and runway stretches beyond a simple cash-divided-by-burn estimate. Eventually revenue may overtake expenses, giving you a breakeven month after which you stop burning cash. This calculator models a monthly growth rate to project that breakeven point and a more realistic runway.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What costs should be included in burn rate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Include all recurring cash outflows: salaries and contractor fees, office rent, cloud and software subscriptions, marketing spend, professional fees, statutory dues and loan repayments. Payroll typically accounts for 60 to 75 percent of a startup's burn. Exclude one-off non-recurring items when measuring the steady monthly rate, but track them separately as they still consume cash.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is this burn rate calculator free to use?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Burn Rate Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It is built for Indian founders, displays results in rupees with lakh and crore formatting, and includes 2026 stage-wise benchmarks to help you interpret your runway.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Runway Planning Help</h3>
            <p>CA-led cash-flow modelling, MIS and investor-ready financials — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Burn%20Rate%20Calculator%20and%20need%20help%20with%20startup%20cash-flow%20and%20runway%20planning.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Burn%20Rate%20/%20Runway%20planning%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Burn%20Rate%20Calculator%20and%20would%20like%20help%20with%20cash-flow%20and%20runway%20planning%20for%20my%20startup.%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Online Accounting Service <span class="arrow">→</span></a>
            <a href="/startup-registration" class="sidebar-link">Startup Registration <span class="arrow">→</span></a>
            <a href="/small-company-compliance-startups-pre-revenue" class="sidebar-link">Pre-Revenue Startup Compliance <span class="arrow">→</span></a>
            <a href="/statutory-audit-for-saas-companies" class="sidebar-link">SaaS Statutory Audit <span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/cash-flow-calculator" class="sidebar-link">Cash Flow Calculator <span class="arrow">→</span></a>
            <a href="/tools/break-even-calculator" class="sidebar-link">Break-Even Calculator <span class="arrow">→</span></a>
            <a href="/tools/financial-ratios-dashboard" class="sidebar-link">Financial Ratios Dashboard <span class="arrow">→</span></a>
            <a href="/tools/financial-health-score" class="sidebar-link">Financial Health Score <span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator <span class="arrow">→</span></a>
            <a href="/tools/cash-conversion-cycle-calculator" class="sidebar-link">Cash Conversion Cycle <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/cash-flow-ratios-complete-guide" class="sidebar-link">Cash Flow Ratios: Complete Guide <span class="arrow">→</span></a>
            <a href="/blog/cash-flow-margin" class="sidebar-link">Understanding Cash Flow Margin <span class="arrow">→</span></a>
            <a href="/blog/startup-registrations-trends-in-india" class="sidebar-link">Startup Registration Trends in India <span class="arrow">→</span></a>
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

    var unit = 'rupees';
    function multiplier() { return unit === 'crore' ? 1e7 : unit === 'lakh' ? 1e5 : 1; }

    function setUnit(btn) {
        unit = btn.dataset.value;
        btn.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
    }

    function formatCurrency(num) {
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }
    function formatMonths(m) {
        if (!isFinite(m)) return '∞';
        var whole = Math.floor(m);
        var days = Math.round((m - whole) * 30);
        if (whole >= 1) return whole + ' mo' + (days > 0 ? ' ' + days + ' d' : '');
        return days + ' days';
    }
    function addMonthsLabel(m) {
        if (!isFinite(m)) return 'Cash-flow positive';
        var d = new Date();
        d.setMonth(d.getMonth() + Math.floor(m));
        return d.toLocaleDateString('en-IN', { month: 'short', year: 'numeric' });
    }

    function calculate() {
        var mult = multiplier();
        var cash = (parseINR(document.getElementById('cash').value) || 0) * mult;
        var exp = (parseINR(document.getElementById('expenses').value) || 0) * mult;
        var rev = (parseINR(document.getElementById('revenue').value) || 0) * mult;
        var growth = (parseINR(document.getElementById('growth').value) || 0) / 100;

        var grossBurn = exp;
        var netBurn = exp - rev;

        document.getElementById('resGross').textContent = formatCurrency(grossBurn) + ' /mo';
        document.getElementById('resNet').textContent = (netBurn <= 0 ? '+' : '') + formatCurrency(Math.abs(netBurn)) + ' /mo';

        var runwayText, breakdownRows = '';
        var pill = document.getElementById('healthPill');
        var note = document.getElementById('healthNote');

        if (netBurn <= 0) {
            runwayText = 'Cash-flow positive 🎉';
            pill.textContent = 'Excellent';
            pill.className = 'health-pill health-good';
            note.textContent = 'Your revenue meets or exceeds expenses, so you are not burning cash at current performance. Keep monitoring as you scale costs.';
        } else {
            var simpleRunway = cash / netBurn;
            // Model growth: simulate month by month
            var modeledRunway = simpleRunway, breakeven = null;
            if (growth > 0 && rev > 0) {
                var bal = cash, r = rev, month = 0;
                while (bal > 0 && month < 600) {
                    var monthlyNet = exp - r;
                    if (monthlyNet <= 0) { breakeven = month; modeledRunway = Infinity; break; }
                    bal -= monthlyNet;
                    r = r * (1 + growth);
                    month++;
                }
                if (breakeven === null && bal <= 0) modeledRunway = month;
            }
            runwayText = formatMonths(modeledRunway);

            breakdownRows += row('Cash balance', formatCurrency(cash));
            breakdownRows += row('Monthly gross burn', formatCurrency(grossBurn));
            breakdownRows += row('Monthly net burn (start)', formatCurrency(netBurn));
            breakdownRows += row('Runway (no growth)', formatMonths(simpleRunway));
            if (growth > 0 && rev > 0) {
                breakdownRows += row('Runway (with ' + (growth*100).toFixed(1) + '% growth)', formatMonths(modeledRunway));
                breakdownRows += row('Projected breakeven', breakeven !== null ? ('Month ' + breakeven + ' (' + addMonthsLabel(breakeven) + ')') : 'Beyond 50 yrs');
            }
            breakdownRows += row('Est. cash-out date', addMonthsLabel(modeledRunway));

            var effRunway = isFinite(modeledRunway) ? modeledRunway : 999;
            if (effRunway >= 18) {
                pill.textContent = 'Healthy';
                pill.className = 'health-pill health-good';
                note.textContent = 'You have 18+ months of runway — comfortably above the 2026 benchmark. You can plan your next raise on your own terms.';
            } else if (effRunway >= 9) {
                pill.textContent = 'Caution';
                pill.className = 'health-pill health-ok';
                note.textContent = 'With 9–18 months left, this is the window to start preparing your next fundraise or push toward breakeven before runway tightens.';
            } else if (effRunway >= 6) {
                pill.textContent = 'Warning';
                pill.className = 'health-pill health-ok';
                note.textContent = 'Under 9 months of runway. Begin raising now and avoid letting cash drop below 6 months during the process, as it weakens your leverage.';
            } else {
                pill.textContent = 'Critical';
                pill.className = 'health-pill health-bad';
                note.textContent = 'Less than 6 months of runway. Act immediately — cut burn, accelerate collections, or secure bridge funding / venture debt to extend runway.';
            }
        }

        document.getElementById('resRunway').textContent = runwayText;
        document.getElementById('breakdownSection').innerHTML = breakdownRows;
        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function row(label, value) {
        return '<div class="breakdown-row"><span class="breakdown-label">' + label + '</span><span class="breakdown-value">' + value + '</span></div>';
    }

    function resetCalc() {
        ['cash','expenses','revenue','growth'].forEach(function(id){ document.getElementById(id).value = ''; });
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['cash','expenses','revenue','growth'].forEach(function(id){
        document.getElementById(id).addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });
    });

    function toggleFaq(e) {
        var btn = e.closest ? e.closest('.faq-question') || e : e;
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(i){ i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }

    var sections = document.querySelectorAll('section[id], header[id]');
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
@endsection
