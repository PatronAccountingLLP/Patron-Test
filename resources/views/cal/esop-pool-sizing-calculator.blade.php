@extends('layouts.app')
@section('meta')

<title>ESOP Pool Sizing Calculator | Option Pool Planner</title>
<meta name="description" content="ESOP pool sizing calculator for startups: plan your option pool from headcount and role-based grants, then see cap-table percentage and founder dilution. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-pool-sizing-calculator">

<meta property="og:title" content="ESOP Pool Sizing Calculator — Hiring Plan &amp; Dilution">
<meta property="og:description" content="Size your ESOP pool bottom-up from planned hires and role-based grants, add a buffer, and see the pool as a percentage of the cap table and the founder dilution.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-pool-sizing-calculator">
<meta property="og:image" content="/tools/esop-pool-sizing-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP Pool Sizing Calculator — Hiring Plan &amp; Dilution">
<meta name="twitter:description" content="Size your ESOP pool bottom-up from planned hires and role-based grants, with buffer, cap-table % and founder dilution. Free &amp; instant.">
<meta name="twitter:image" content="/tools/esop-pool-sizing-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP Pool Sizing Calculator",
  "description": "ESOP Pool Sizing Calculator builds an employee stock option pool from the bottom up using a startup's planned hires and role-based equity grant benchmarks. It sums the grant percentages across all planned roles, adds a planning buffer, and recommends a pool size as a percentage of fully diluted equity. It also converts that percentage into a number of option shares against the current cap table and shows the resulting founder dilution, helping founders size the pool to cover an eighteen-month hiring plan without excessive dilution.",
  "url": "/tools/esop-pool-sizing-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP Pool Sizing Calculator", "item": "/tools/esop-pool-sizing-calculator"}
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
      "name": "How big should a startup ESOP pool be?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most Indian startups run an ESOP pool of about 10 to 20 percent of fully diluted equity across their lifecycle. A common pattern is 5 to 8 percent at pre-seed or bootstrap stage, 10 to 12 percent at seed, 12 to 15 percent that investors expect on a post-money basis before Series A, and 15 to 20 percent by Series B and beyond. The right figure is whatever your actual hiring plan needs plus a buffer, not a fixed number."
      }
    },
    {
      "@type": "Question",
      "name": "What is bottom-up ESOP pool sizing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bottom-up sizing builds the pool from your real hiring plan rather than picking a round number. You list the roles you intend to hire over roughly the next eighteen months, assign each a market equity grant, multiply by the number of such hires, and sum the result. Adding a buffer of around 20 to 30 percent for refresh grants and unplanned hires gives the recommended pool. This ties the pool to need and avoids both under and over-allocation."
      }
    },
    {
      "@type": "Question",
      "name": "What are typical role-based ESOP grants?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As a rough market guide in India, early engineers among the first hires receive around 0.5 to 2 percent each, VP and C-level leaders around 0.3 to 1.5 percent, and mid-level individual contributors around 0.05 to 0.3 percent. Junior hires are often 0.05 to 0.1 percent. The exact figure depends on seniority, timing and how much cash compensation is being traded for equity, so treat these as starting benchmarks."
      }
    },
    {
      "@type": "Question",
      "name": "Why add a buffer to the ESOP pool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A buffer of about 20 to 30 percent on top of your planned grants covers refresh grants for top performers, counter-offers, unplanned hires and grants that turn out larger than benchmarked. Without a buffer the pool tends to run out before the next round, forcing a top-up that dilutes founders again at an inconvenient time. The buffer is planning headroom, not waste, and unused options simply stay unallocated."
      }
    },
    {
      "@type": "Question",
      "name": "How does the ESOP pool dilute founders?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Creating or expanding an option pool increases the fully diluted share count, so every existing shareholder's percentage falls proportionately, including the founders. If founders hold 100 percent and a 12 percent pool is created, their combined stake falls to about 88 percent. Investors usually require the pool to be created or topped up before their money goes in, so the dilution lands on founders rather than the new investor; this is the pool shuffle."
      }
    },
    {
      "@type": "Question",
      "name": "When should I create the ESOP pool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is usually best to create a modest pool early, soon after an angel or pre-seed round, even before hiring fully starts, so you can offer meaningful equity from day one. Creating it late, especially at a term sheet, weakens your negotiating position because investors typically insist the pool comes out of the pre-money valuation, increasing founder dilution. A small early pool topped up at each round is generally the cleaner approach."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if I over-grant to early hires?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Giving early hires very large grants, such as 2 to 3 percent each, feels generous but quickly exhausts the pool before product-market fit. You are then forced to refresh the pool, diluting yourself again, and you may have set an unsustainable internal precedent. Following role-based benchmarks keeps the pool able to cover the whole plan, which is why bottom-up sizing against market grants is more reliable than ad-hoc generosity."
      }
    },
    {
      "@type": "Question",
      "name": "Is the pool measured on a fully diluted basis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Pool size and grants are expressed as a percentage of fully diluted shares, which include all common and preferred shares on an as-converted basis, outstanding options and warrants, and the whole option pool including unallocated shares. This is the standard investors use in equity negotiations because it gives the most accurate picture of ownership. This calculator works in fully diluted percentages and converts them to a share count against your cap table."
      }
    },
    {
      "@type": "Question",
      "name": "Does ESOP pool sizing affect the share count in MCA filings?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The pool is approved as part of the ESOP scheme by the Board and shareholders, and creating or increasing it involves corporate actions and filings under the Companies Act, including the relevant resolutions. The number of options the pool represents is set against the company's share capital, so the percentage you choose here should be converted to a defined number of options in the scheme documents. A professional should finalise the scheme and filings."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ESOP Pool Sizing Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting ESOP Pool Sizing Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It sizes your pool bottom-up from planned hires and role grants, adds a buffer, and shows the pool as a percentage of fully diluted equity, the number of option shares against your cap table, and the founder dilution. It is a planning tool; the final scheme and filings should be set up with a professional."
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
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 4px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .hire-table { width: 100%; border-collapse: collapse; margin-bottom: 8px; }
        .hire-table th { font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: var(--text-muted); font-weight: 700; text-align: left; padding: 6px 8px; }
        .hire-table td { padding: 4px; }
        .hire-table input, .hire-table select { width: 100%; padding: 10px 10px; border: 2px solid var(--border); border-radius: 8px; font-family: var(--font-mono); font-size: 14px; font-weight: 700; color: var(--text); background: var(--surface); outline: none; }
        .hire-table input:focus, .hire-table select:focus { border-color: var(--primary); }
        .hire-table .del-row { background: none; border: none; color: var(--text-muted); cursor: pointer; font-size: 18px; padding: 4px 8px; line-height: 1; }
        .hire-table .del-row:hover { color: var(--danger); }
        .add-row-btn { display: inline-flex; align-items: center; gap: 6px; margin-top: 6px; padding: 8px 16px; border: 1px dashed var(--primary-light); border-radius: 8px; background: var(--surface); color: var(--primary); font-family: var(--font-body); font-size: 13px; font-weight: 700; cursor: pointer; transition: all 0.2s; }
        .add-row-btn:hover { background: var(--surface-alt); }
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
        .stage-hint { display: inline-block; font-size: 12px; font-weight: 700; padding: 3px 12px; border-radius: 12px; margin-top: 8px; background: #D1FAE5; color: #059669; }
        .stage-hint.high { background: #FEF3C7; color: #92400E; }
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
            .hire-table th:nth-child(1) { width: 40%; }
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
        <a href="#what-is">Bottom-Up Sizing</a>
        <a href="#benchmarks">Benchmarks</a>
        <a href="#dilution">Dilution</a>
        <a href="#example">Example</a>
        <a href="#topup">Top-Ups</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP Pool Sizing Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP Pool Sizing Calculator — <span>Hiring Plan &amp; Dilution</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Designing your ESOP pool? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20need%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20pool%20sizing%20/%20scheme%20design%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20would%20like%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%0A%0AMy%20details%3A%0A-%20Stage%20%28pre-seed%20/%20seed%20/%20pre-Series%20A%29%3A%0A-%20Planned%2018-month%20hiring%3A%0A-%20Current%20cap%20table%20/%20founder%20holding%3A%0A-%20Target%20pool%20%25%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Size your option pool <strong>bottom-up</strong> from the roles you plan to hire. Add each role's headcount and per-hire equity grant; the tool sums the grants, adds a <strong>buffer</strong> for refreshes and unplanned hires, and gives the <strong>recommended pool %</strong> of fully diluted equity — then converts it to a <strong>number of option shares</strong> against your cap table and shows the <strong>founder dilution</strong>. Benchmarks: early engineers 0.5–2%, VP/C-level 0.3–1.5%, mid-IC 0.05–0.3%; overall pools run ~10–20% across stages.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Size Your ESOP Pool from the Hiring Plan</h2>
            <p class="calc-sub">Add the roles you expect to hire over ~18 months and the equity grant for each. Percentages are of fully diluted equity.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or sum (hires × grant %) across roles, add a 20–30% buffer, and compare to your cap table manually.
                </div>
            </noscript>

            <div class="field-group-title">Planned hires</div>
            <table class="hire-table" id="hireTable">
                <thead>
                    <tr><th>Role</th><th style="width:22%;">Hires</th><th style="width:26%;">Grant % each</th><th style="width:36px;"></th></tr>
                </thead>
                <tbody id="hireRows"></tbody>
            </table>
            <button type="button" class="add-row-btn" onclick="addRow()">+ Add role</button>

            <div class="field-group-title">Buffer &amp; cap table</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="buffer">Planning Buffer %</label>
                    <input type="text" id="buffer" placeholder="25" inputmode="decimal" autocomplete="off" value="25">
                    <div class="field-hint">For refresh grants &amp; unplanned hires (typ. 20–30%).</div>
                </div>
                <div class="form-group">
                    <label for="preShares">Pre-Pool Fully Diluted Shares</label>
                    <input type="text" id="preShares" placeholder="e.g. 1000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Current cap table excl. new pool (optional).</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="founderPct">Current Founder Holding %</label>
                    <input type="text" id="founderPct" placeholder="e.g. 100" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">To show post-pool founder dilution (optional).</div>
                </div>
                <div class="form-group"></div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Pool Size</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card highlight">
                        <div class="result-label">Recommended Pool</div>
                        <div class="result-value" id="resPool">—</div>
                        <span class="stage-hint" id="stageHint"></span>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Option Shares</div>
                        <div class="result-value" id="resShares">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want this turned into a Series-A-ready scheme?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant designs the Board-approved ESOP scheme — pool, role grants, vesting, refresh authority and MCA filings — that survives investor diligence.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20need%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20pool%20sizing%20/%20scheme%20design%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20would%20like%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%0A%0AMy%20details%3A%0A-%20Stage%20%28pre-seed%20/%20seed%20/%20pre-Series%20A%29%3A%0A-%20Planned%2018-month%20hiring%3A%0A-%20Current%20cap%20table%20/%20founder%20holding%3A%0A-%20Target%20pool%20%25%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Pool Sizing Calculator</h2>
            <ol>
                <li><strong>List planned roles</strong> for the next ~18 months — add a row per role type (founding engineer, VP, mid-IC, etc.).</li>
                <li><strong>Enter headcount and the per-hire grant %</strong> for each role; use the benchmark table below if unsure.</li>
                <li><strong>Set a buffer</strong> (default 25%) for refresh grants, counter-offers and unplanned hires.</li>
                <li><strong>Optionally add your cap table</strong> — pre-pool fully diluted shares and current founder holding — to see the pool in shares and the founder dilution.</li>
                <li><strong>Click Calculate</strong> for the recommended pool %, a stage sanity-check, the option-share count and the dilution.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Once you have a target %, model how each future round tops it up with the <a href="/tools/esop-dilution-calculator">dilution impact calculator</a>, and pressure-test the headline number against the <a href="/tools/esop-pool-size-calculator">pool size calculator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>Why Size Bottom-Up?</h2>
            <p>Most founders pick a round number — "let's do 10%" — and hope it covers hiring. <strong>Bottom-up sizing</strong> reverses that: you start from the actual roles you intend to hire, attach a market grant to each, and let the pool fall out of the plan. It ties the pool to need, so you neither starve the plan nor over-dilute.</p>
            <p>The recipe: project ~18 months of hiring, multiply headcount by per-role grants, sum, then add a <strong>20–30% buffer</strong> for refreshes and surprises. See Patron's <a href="/blog/esop-pool-size-startups-india">ESOP pool size guide</a> and the <a href="/esop-scheme-design">ESOP scheme design</a> service for how this becomes a Board-approved scheme.</p>
            <div class="formula-box">
                <span class="label">Planned grants</span> = Σ (hires × grant % each)<br>
                <span class="label">Recommended pool</span> = Planned grants × (1 + buffer)<br>
                <span class="label">Founder dilution</span> = Founder % × pool ÷ (100 + pool)
            </div>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Grant &amp; Pool Benchmarks (India)</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Role / Stage</th><th>Typical range</th></tr>
                </thead>
                <tbody>
                    <tr><td>Early engineers (first hires)</td><td>0.5% – 2% each</td></tr>
                    <tr><td>VP / C-level</td><td>0.3% – 1.5% each</td></tr>
                    <tr><td>Mid-level IC</td><td>0.05% – 0.3% each</td></tr>
                    <tr><td>Junior</td><td>0.05% – 0.1% each</td></tr>
                    <tr><td>Pre-seed / bootstrap pool</td><td>5% – 8%</td></tr>
                    <tr><td>Seed pool</td><td>10% – 12%</td></tr>
                    <tr><td>Pre-Series A pool (post-money)</td><td>12% – 15%</td></tr>
                    <tr><td>Series B+ pool</td><td>15% – 20%</td></tr>
                </tbody>
            </table>
            <p>These are market starting points, not rules — adjust for seniority, timing and the cash-vs-equity trade. Avoid over-granting early: five hires at 2–3% each can exhaust the pool before product-market fit. Vesting is typically 4 years with a 1-year cliff under Rule 12(6)(a). Once sized, the pool becomes part of a Board- and shareholder-approved scheme filed with the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>, and startups recognised by <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> can plan the perquisite-tax deferral around it.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with ESOP Pool Design &amp; Scheme Setup?</h3>
            <p>Patron Accounting LLP supports founders sizing an option pool and drafting a Board-approved ESOP scheme — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20need%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20pool%20sizing%20/%20scheme%20design%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20would%20like%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%0A%0AMy%20details%3A%0A-%20Stage%20%28pre-seed%20/%20seed%20/%20pre-Series%20A%29%3A%0A-%20Planned%2018-month%20hiring%3A%0A-%20Current%20cap%20table%20/%20founder%20holding%3A%0A-%20Target%20pool%20%25%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="dilution">
            <h2>How the Pool Dilutes Founders</h2>
            <p>Creating or topping up the pool increases the fully diluted share count, so every existing holder's percentage falls — founders included. If founders hold 100% and a 12% pool is created, their combined stake falls to about 88%.</p>
            <p>The catch at fundraising: investors usually require the pool to be created or expanded <strong>before</strong> their money goes in, so it comes out of the <strong>pre-money</strong> valuation and the dilution lands on founders, not the new investor — the "pool shuffle." Sizing accurately, with just enough buffer, is the defence. Patron's <a href="/blog/esop-dilution-math-startup-founders">ESOP dilution math</a> explains the mechanics.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> Creating the pool late — at a term sheet — weakens your position, since investors push it into the pre-money. A modest early pool, topped up each round, is usually cleaner.</p>
            </div>
        </section>

        <section class="content-section" id="example">
            <h2>A Worked Example</h2>
            <p>A seed-stage startup plans the next 18 months: 4 engineers at 0.75% each, 1 VP Engineering at 1.2%, and 6 mid-IC at 0.2% each.</p>
            <ul>
                <li><strong>Engineers:</strong> 4 × 0.75% = 3.0%</li>
                <li><strong>VP:</strong> 1 × 1.2% = 1.2%</li>
                <li><strong>Mid-IC:</strong> 6 × 0.2% = 1.2%</li>
                <li><strong>Planned grants</strong> = 5.4%</li>
                <li><strong>+ 25% buffer</strong> → recommended pool ≈ <strong>6.75%</strong></li>
            </ul>
            <p>That sits comfortably below the 10–12% seed benchmark, leaving room to top up at Series A. On a 1,000,000-share cap table, a 6.75% pool ≈ 72,400 option shares, and founders holding 100% would dilute to about <strong>93.7%</strong> after the pool is created.</p>
        </section>

        <section class="content-section" id="topup">
            <h2>Planning Top-Ups Across Rounds</h2>
            <p>A pool is not a one-time decision. Investors at each round typically push for the pool to be refreshed to a target percentage on the new, larger cap table — so a 12% pool that has mostly been granted out may need topping back up to 12–15% post-money at Series A. Sizing too generously early wastes founder equity; sizing too tight forces an expensive last-minute top-up at the term sheet.</p>
            <p>The bottom-up discipline helps here too: re-run the plan at each stage for the next 18 months of hiring, and you get a defensible top-up number to negotiate from rather than accepting an investor's round figure. Recognition with <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> and a clean cap table strengthen that position, and the fully-diluted convention used throughout — counting all shares, options and the unallocated pool, consistent with the <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a>-aligned market practice for equity negotiations — keeps everyone measuring the same way. Professional scheme drafting, in line with <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> guidance on share-based payments, ensures the chosen percentage is converted to a defined number of options in the documents.</p>
            <div class="callout">
                <p><strong>Tip:</strong> Model each round's top-up and the cumulative founder dilution with the <a href="/tools/esop-dilution-calculator">dilution impact calculator</a> before you sign a term sheet.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How big should a startup ESOP pool be?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Most Indian startups run an ESOP pool of about 10 to 20 percent of fully diluted equity across their lifecycle. A common pattern is 5 to 8 percent at pre-seed or bootstrap stage, 10 to 12 percent at seed, 12 to 15 percent that investors expect on a post-money basis before Series A, and 15 to 20 percent by Series B and beyond. The right figure is whatever your actual hiring plan needs plus a buffer, not a fixed number.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is bottom-up ESOP pool sizing?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Bottom-up sizing builds the pool from your real hiring plan rather than picking a round number. You list the roles you intend to hire over roughly the next eighteen months, assign each a market equity grant, multiply by the number of such hires, and sum the result. Adding a buffer of around 20 to 30 percent for refresh grants and unplanned hires gives the recommended pool. This ties the pool to need and avoids both under and over-allocation.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are typical role-based ESOP grants?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">As a rough market guide in India, early engineers among the first hires receive around 0.5 to 2 percent each, VP and C-level leaders around 0.3 to 1.5 percent, and mid-level individual contributors around 0.05 to 0.3 percent. Junior hires are often 0.05 to 0.1 percent. The exact figure depends on seniority, timing and how much cash compensation is being traded for equity, so treat these as starting benchmarks.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Why add a buffer to the ESOP pool?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A buffer of about 20 to 30 percent on top of your planned grants covers refresh grants for top performers, counter-offers, unplanned hires and grants that turn out larger than benchmarked. Without a buffer the pool tends to run out before the next round, forcing a top-up that dilutes founders again at an inconvenient time. The buffer is planning headroom, not waste, and unused options simply stay unallocated.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How does the ESOP pool dilute founders?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Creating or expanding an option pool increases the fully diluted share count, so every existing shareholder's percentage falls proportionately, including the founders. If founders hold 100 percent and a 12 percent pool is created, their combined stake falls to about 88 percent. Investors usually require the pool to be created or topped up before their money goes in, so the dilution lands on founders rather than the new investor; this is the pool shuffle.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When should I create the ESOP pool?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">It is usually best to create a modest pool early, soon after an angel or pre-seed round, even before hiring fully starts, so you can offer meaningful equity from day one. Creating it late, especially at a term sheet, weakens your negotiating position because investors typically insist the pool comes out of the pre-money valuation, increasing founder dilution. A small early pool topped up at each round is generally the cleaner approach.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What happens if I over-grant to early hires?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Giving early hires very large grants, such as 2 to 3 percent each, feels generous but quickly exhausts the pool before product-market fit. You are then forced to refresh the pool, diluting yourself again, and you may have set an unsustainable internal precedent. Following role-based benchmarks keeps the pool able to cover the whole plan, which is why bottom-up sizing against market grants is more reliable than ad-hoc generosity.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the pool measured on a fully diluted basis?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Pool size and grants are expressed as a percentage of fully diluted shares, which include all common and preferred shares on an as-converted basis, outstanding options and warrants, and the whole option pool including unallocated shares. This is the standard investors use in equity negotiations because it gives the most accurate picture of ownership. This calculator works in fully diluted percentages and converts them to a share count against your cap table.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does ESOP pool sizing affect the share count in MCA filings?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The pool is approved as part of the ESOP scheme by the Board and shareholders, and creating or increasing it involves corporate actions and filings under the Companies Act, including the relevant resolutions. The number of options the pool represents is set against the company's share capital, so the percentage you choose here should be converted to a defined number of options in the scheme documents. A professional should finalise the scheme and filings.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the ESOP Pool Sizing Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting ESOP Pool Sizing Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It sizes your pool bottom-up from planned hires and role grants, adds a buffer, and shows the pool as a percentage of fully diluted equity, the number of option shares against your cap table, and the founder dilution. It is a planning tool; the final scheme and filings should be set up with a professional.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>ESOP Scheme Design</h3>
            <p>Board-approved pool sizing, role grants, vesting and MCA filings — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20need%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20pool%20sizing%20/%20scheme%20design%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Pool%20Sizing%20Calculator%20and%20would%20like%20help%20designing%20an%20ESOP%20scheme%20and%20pool.%0A%0AMy%20details%3A%0A-%20Stage%20%28pre-seed%20/%20seed%20/%20pre-Series%20A%29%3A%0A-%20Planned%2018-month%20hiring%3A%0A-%20Current%20cap%20table%20/%20founder%20holding%3A%0A-%20Target%20pool%20%25%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/esop-pool-size-calculator" class="sidebar-link">ESOP Pool Size Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-dilution-calculator" class="sidebar-link">Dilution Impact Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-valuation-calculator" class="sidebar-link">ESOP Valuation Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-cost-to-company-calculator" class="sidebar-link">ESOP Cost-to-Company <span class="arrow">→</span></a>
            <a href="/tools/esop-fmv-calculator" class="sidebar-link">ESOP FMV Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/esop-scheme-design" class="sidebar-link">ESOP Scheme Design <span class="arrow">→</span></a>
            <a href="/esop-services" class="sidebar-link">ESOP Services <span class="arrow">→</span></a>
            <a href="/esop-for-tech-startups" class="sidebar-link">ESOP for Tech Startups <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-pool-size-startups-india" class="sidebar-link">ESOP Pool Size Guide <span class="arrow">→</span></a>
            <a href="/blog/esop-dilution-math-startup-founders" class="sidebar-link">ESOP Dilution Math <span class="arrow">→</span></a>
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

    function fmtPct(n){ return n.toFixed(2) + '%'; }
    function fmtNum(n){ return Math.round(n).toLocaleString('en-IN'); }

    var DEFAULT_ROLES = [
        { role: 'Early engineer', hires: 4, grant: 0.75 },
        { role: 'VP / C-level', hires: 1, grant: 1.2 },
        { role: 'Mid-level IC', hires: 6, grant: 0.2 }
    ];

    function rowHtml(r){
        return '<tr>' +
            '<td><input type="text" class="r-role" value="' + (r.role||'') + '" placeholder="Role"></td>' +
            '<td><input type="text" class="r-hires" value="' + (r.hires!=null?r.hires:'') + '" placeholder="0"></td>' +
            '<td><input type="text" class="r-grant" value="' + (r.grant!=null?r.grant:'') + '" placeholder="0.00"></td>' +
            '<td><button type="button" class="del-row" onclick="delRow(this)" aria-label="Remove role">&times;</button></td>' +
        '</tr>';
    }
    function renderRows(rows){ document.getElementById('hireRows').innerHTML = rows.map(rowHtml).join(''); }
    function addRow(){ document.getElementById('hireRows').insertAdjacentHTML('beforeend', rowHtml({})); }
    function delRow(btn){
        var tb = document.getElementById('hireRows');
        if (tb.querySelectorAll('tr').length > 1) btn.closest('tr').remove();
    }

    function calculate(){
        var rows = document.querySelectorAll('#hireRows tr');
        var planned = 0, lines = [];
        rows.forEach(function(tr){
            var role = tr.querySelector('.r-role').value || 'Role';
            var hires = parseINR(tr.querySelector('.r-hires').value) || 0;
            var grant = parseINR(tr.querySelector('.r-grant').value) || 0;
            var sub = hires * grant;
            if (sub > 0){ planned += sub; lines.push({role:role, hires:hires, grant:grant, sub:sub}); }
        });
        if (planned <= 0){ alert('Please add at least one role with hires and a grant %.'); return; }

        var buffer = parseINR(document.getElementById('buffer').value);
        if (!isFinite(buffer) || buffer < 0) buffer = 0;
        var pool = planned * (1 + buffer/100);

        var preShares = parseINR(document.getElementById('preShares').value) || 0;
        var founderPct = parseINR(document.getElementById('founderPct').value) || 0;

        document.getElementById('resPool').textContent = fmtPct(pool);

        // stage sanity hint
        var hint = document.getElementById('stageHint');
        if (pool <= 12){ hint.className = 'stage-hint'; hint.textContent = 'Within seed-stage norm'; }
        else if (pool <= 20){ hint.className = 'stage-hint'; hint.textContent = 'Within growth-stage norm'; }
        else { hint.className = 'stage-hint high'; hint.textContent = 'Above 20% — review plan'; }

        // shares: pool is % of post-pool fully diluted, so pool shares = pre × pool/(100-pool)
        var sharesTxt = '—';
        if (preShares > 0 && pool < 100){
            var poolShares = preShares * (pool/(100 - pool));
            document.getElementById('resShares').textContent = fmtNum(poolShares);
        } else {
            document.getElementById('resShares').textContent = '—';
        }

        var rowsHtml = '';
        lines.forEach(function(l){
            rowsHtml += '<div class="breakdown-row"><span class="breakdown-label">' + l.role + ' (' + l.hires + ' × ' + l.grant + '%)</span><span class="breakdown-value">' + fmtPct(l.sub) + '</span></div>';
        });
        rowsHtml += '<div class="breakdown-row"><span class="breakdown-label">Planned grants (sum)</span><span class="breakdown-value">' + fmtPct(planned) + '</span></div>';
        rowsHtml += '<div class="breakdown-row"><span class="breakdown-label">+ Buffer ' + buffer + '%</span><span class="breakdown-value">' + fmtPct(pool - planned) + '</span></div>';
        rowsHtml += '<div class="breakdown-row total"><span class="breakdown-label">Recommended pool</span><span class="breakdown-value">' + fmtPct(pool) + '</span></div>';
        if (preShares > 0 && pool < 100){
            rowsHtml += '<div class="breakdown-row"><span class="breakdown-label">Option shares (vs ' + fmtNum(preShares) + ' pre-pool)</span><span class="breakdown-value">' + fmtNum(preShares*(pool/(100-pool))) + '</span></div>';
        }
        if (founderPct > 0){
            var founderAfter = founderPct * 100 / (100 + pool);
            var dilution = founderPct - founderAfter;
            rowsHtml += '<div class="breakdown-row"><span class="breakdown-label">Founder holding after pool</span><span class="breakdown-value">' + fmtPct(founderAfter) + '</span></div>';
            rowsHtml += '<div class="breakdown-row"><span class="breakdown-label">Founder dilution from pool</span><span class="breakdown-value">−' + fmtPct(dilution) + '</span></div>';
        }
        document.getElementById('breakdownSection').innerHTML = rowsHtml;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        renderRows(DEFAULT_ROLES);
        document.getElementById('buffer').value = '25';
        document.getElementById('preShares').value = '';
        document.getElementById('founderPct').value = '';
        document.getElementById('resultSection').classList.remove('visible');
    }

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

    renderRows(DEFAULT_ROLES);
</script>
@endsection
