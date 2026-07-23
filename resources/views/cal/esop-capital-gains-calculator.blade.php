@extends('layouts.app')
@section('meta')
<title>ESOP Capital Gains Calculator | LTCG &amp; STCG on Sale</title>
<meta name="description" content="ESOP capital gains calculator: gain on sale = sale price minus FMV at exercise, with post-July-2024 LTCG and STCG rates for listed &amp; unlisted shares. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-capital-gains-calculator">

<meta property="og:title" content="ESOP Capital Gains Calculator — LTCG & STCG 2026">
<meta property="og:description" content="Compute capital gains tax when you sell ESOP shares: gain = sale price minus FMV at exercise, with post-July-2024 LTCG and STCG rates for listed and unlisted shares.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-capital-gains-calculator">
<meta property="og:image" content="/tools/esop-capital-gains-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP Capital Gains Calculator — LTCG & STCG 2026">
<meta name="twitter:description" content="Capital gains tax on selling ESOP shares: gain = sale price minus FMV at exercise, post-July-2024 LTCG/STCG rates. Free & instant.">
<meta name="twitter:image" content="/tools/esop-capital-gains-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP Capital Gains Calculator",
  "description": "ESOP Capital Gains Calculator computes the capital gains tax payable when an employee sells shares acquired through ESOPs. The capital gain is the sale price less the fair market value on the exercise date, which is the cost of acquisition because that FMV was already taxed as a perquisite. It classifies the gain as short term or long term from the holding period, applies the post 23 July 2024 rates — for listed equity 20 percent short term and 12.5 percent long term above the 1.25 lakh exemption, and for unlisted equity slab rate short term and 12.5 percent long term without indexation — and adds health and education cess.",
  "url": "/tools/esop-capital-gains-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP Capital Gains Calculator", "item": "/tools/esop-capital-gains-calculator"}
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
      "name": "How are capital gains on ESOP shares taxed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "When you sell shares acquired through ESOPs, the capital gain is the sale price less the fair market value on the exercise date, multiplied by the number of shares. That FMV is the cost of acquisition because it was already taxed as a salary perquisite at exercise. The gain is then taxed as short term or long term depending on the holding period and whether the shares are listed or unlisted, at the rates applicable on the date of sale."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of acquisition for ESOP shares?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The cost of acquisition is the fair market value of the share on the exercise date, not the exercise price you paid. This is because the difference between the exercise FMV and the exercise price was already taxed as a perquisite under salary at exercise. Using the exercise FMV as the cost ensures the same gain is not taxed twice — only the appreciation after exercise is taxed as capital gains on sale."
      }
    },
    {
      "@type": "Question",
      "name": "What is the holding period for ESOP shares?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The holding period runs from the date of exercise, when the shares are allotted, to the date of sale. For listed shares the gain is long term if held for more than 12 months, otherwise short term. For unlisted shares the threshold is 24 months. The vesting and grant periods do not count; only the period the shares are actually held after exercise determines the short or long term classification."
      }
    },
    {
      "@type": "Question",
      "name": "What are the capital gains rates on listed ESOP shares?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For listed equity shares sold on or after 23 July 2024 with STT paid, short term capital gains (held 12 months or less) are taxed at 20 percent, and long term capital gains (held more than 12 months) at 12.5 percent on the amount exceeding the 1.25 lakh annual exemption. Health and education cess of 4 percent applies on the tax. These rates were revised upward from 15 percent and 10 percent by the Finance Act 2024."
      }
    },
    {
      "@type": "Question",
      "name": "What are the capital gains rates on unlisted ESOP shares?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For unlisted shares, short term capital gains (held 24 months or less) are added to total income and taxed at the applicable slab rate. Long term capital gains (held more than 24 months) are taxed at 12.5 percent without indexation for transfers on or after 23 July 2024, the indexation benefit having been removed by the Finance Act 2024. The 1.25 lakh exemption applies to listed equity, not to unlisted shares."
      }
    },
    {
      "@type": "Question",
      "name": "What is the 1.25 lakh LTCG exemption?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For long term capital gains on listed equity shares, the first 1.25 lakh of such gains in a financial year is exempt from tax, and only the excess is taxed at 12.5 percent. This exemption was raised from 1 lakh by the Finance Act 2024. It applies per financial year across all listed equity LTCG, so spreading sales across years can help use more than one year's exemption. It does not apply to unlisted shares."
      }
    },
    {
      "@type": "Question",
      "name": "Is there double taxation on ESOPs at exercise and sale?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. ESOP taxation is in two stages but the same gain is not taxed twice. At exercise, the gap between the exercise price and the FMV is taxed as a salary perquisite. At sale, only the further appreciation above that exercise FMV is taxed as capital gains, because the FMV becomes the cost of acquisition. So the perquisite covers the gain up to exercise, and capital gains cover the gain after exercise — two different slices."
      }
    },
    {
      "@type": "Question",
      "name": "How are foreign ESOP shares taxed on sale?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Shares of a foreign parent are generally treated like unlisted shares for holding period, so long term needs more than 24 months, with long term gains at 12.5 percent and short term at slab rate. The gain is computed in rupees using the appropriate exchange rates. Foreign shareholdings must be disclosed in Schedule FA of the income tax return, and any foreign tax paid may be claimed as a credit by filing Form 67. Residency status at sale should also be checked."
      }
    },
    {
      "@type": "Question",
      "name": "Can I reduce ESOP capital gains tax?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Planning options include holding listed shares beyond 12 months (or unlisted beyond 24 months) to access the lower long term rate, spreading sales across financial years to use the 1.25 lakh exemption more than once, and harvesting capital losses to set off against gains. Long term gains may also be reinvested under Sections 54F or 54EC subject to conditions. These depend on your situation, so confirm with a tax professional before acting."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ESOP Capital Gains Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting ESOP Capital Gains Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the capital gain as sale price less FMV at exercise, classifies it as short or long term from your holding period, and applies the current post July 2024 rates for listed and unlisted shares with the 1.25 lakh exemption and cess. It is indicative; confirm the final position with a professional."
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
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
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
        .term-tag { display: inline-block; font-size: 12px; font-weight: 700; padding: 3px 12px; border-radius: 12px; margin-top: 8px; }
        .term-tag.lt { background: #D1FAE5; color: #059669; }
        .term-tag.st { background: #FEF3C7; color: #92400E; }
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
        <a href="#what-is">Two-Stage Tax</a>
        <a href="#rates">Rates & Periods</a>
        <a href="#example">Example</a>
        <a href="#planning">Planning</a>
        <a href="#law">Sections</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP Capital Gains Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP Capital Gains Calculator — <span>LTCG & STCG 2026</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Selling ESOP shares? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20need%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20capital%20gains%20/%20ITR%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20would%20like%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%0A%0AMy%20details%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Sale%20price%20%26%20FMV%20at%20exercise%3A%0A-%20Holding%20period%3A%0A-%20Number%20of%20shares%20sold%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>When you sell ESOP shares, the <strong>capital gain = sale price − FMV at exercise</strong> (the FMV is your cost, since it was already taxed as the perquisite — no double tax). Enter sale price, exercise-date FMV, shares, listed/unlisted and holding period; the tool classifies <strong>short vs long term</strong> and applies the <strong>post-23-July-2024 rates</strong>: listed <strong>20% STCG / 12.5% LTCG</strong> (above ₹1.25L), unlisted <strong>slab STCG / 12.5% LTCG</strong> (no indexation), plus 4% cess.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate ESOP Capital Gains Tax</h2>
            <p class="calc-sub">Rates for transfers on or after 23 July 2024 (FY 2025-26). Indicative — confirm before filing.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or compute gain = (sale price − exercise FMV) × shares and apply the rates in the table below.
                </div>
            </noscript>

            <label class="q-label">Share type</label>
            <div class="toggle-group" id="typeToggle">
                <button type="button" class="toggle-btn active" data-type="listed" onclick="pickType(this)">Listed (STT paid)</button>
                <button type="button" class="toggle-btn" data-type="unlisted" onclick="pickType(this)">Unlisted / Foreign</button>
            </div>

            <div class="field-group-title">Sale details</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="salePrice">Sale Price per Share (₹)</label>
                    <input type="text" id="salePrice" placeholder="e.g. 1200" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Price you sold at.</div>
                </div>
                <div class="form-group">
                    <label for="exerciseFmv">FMV at Exercise per Share (₹)</label>
                    <input type="text" id="exerciseFmv" placeholder="e.g. 500" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Cost of acquisition (taxed as perquisite).</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="shares">Number of Shares Sold</label>
                    <input type="text" id="shares" placeholder="e.g. 10000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Quantity sold in this transaction.</div>
                </div>
                <div class="form-group">
                    <label for="holding">Holding Period (months)</label>
                    <input type="text" id="holding" placeholder="e.g. 18" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">From exercise date to sale date.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="slabRate">Your Slab Rate % <span style="font-weight:400;">(unlisted STCG)</span></label>
                    <input type="text" id="slabRate" placeholder="e.g. 31.2" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Incl. cess; used only for unlisted short-term.</div>
                </div>
                <div class="form-group">
                    <label for="otherLtcg">Other Listed LTCG This FY (₹)</label>
                    <input type="text" id="otherLtcg" placeholder="0" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">To apply the ₹1.25L exemption correctly.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Capital Gains Tax</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Capital Gain</div>
                        <div class="result-value" id="resGain">—</div>
                        <span class="term-tag" id="termTag"></span>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">Capital Gains Tax</div>
                        <div class="result-value" id="resTax">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want this computed and filed correctly?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant computes your ESOP capital gains, applies exemptions and set-offs, and files the capital-gains ITR — including foreign shares and Schedule FA.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20need%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20capital%20gains%20/%20ITR%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20would%20like%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%0A%0AMy%20details%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Sale%20price%20%26%20FMV%20at%20exercise%3A%0A-%20Holding%20period%3A%0A-%20Number%20of%20shares%20sold%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the ESOP Capital Gains Calculator</h2>
            <ol>
                <li><strong>Pick share type</strong> — listed (STT paid) or unlisted/foreign; this sets the holding-period threshold and rates.</li>
                <li><strong>Enter sale price and the FMV at exercise.</strong> The exercise FMV is your cost of acquisition — use the <a href="/tools/esop-fmv-calculator">ESOP FMV calculator</a> if you need it.</li>
                <li><strong>Enter shares sold and the holding period</strong> in months from exercise to sale.</li>
                <li><strong>For unlisted short-term,</strong> add your slab rate; <strong>for listed long-term,</strong> add any other listed LTCG this year so the ₹1.25L exemption is applied once.</li>
                <li><strong>Click Calculate</strong> for the gain, the short/long-term classification, and the tax with cess.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Remember stage 1 — the perquisite tax at exercise is separate. This tool is only the <strong>sale-stage</strong> capital gain. For the perquisite/TDS side, see the <a href="/tools/esop-perquisite-tax-calculator">perquisite tax calculator</a> and <a href="/tools/esop-tds-calculator">ESOP TDS calculator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>The Two-Stage ESOP Tax — and No Double Tax</h2>
            <p>ESOPs are taxed at two points. <strong>Stage 1, at exercise:</strong> the gap between the exercise price and the FMV is a salary <strong>perquisite</strong>. <strong>Stage 2, at sale:</strong> any appreciation above that exercise FMV is a <strong>capital gain</strong>.</p>
            <p>The key link is that the <strong>FMV at exercise becomes your cost of acquisition</strong> for stage 2. So the perquisite covers the gain up to exercise, and capital gains cover only the gain after exercise — the same rupee is never taxed twice. Patron's <a href="/blog/esop-perquisite-tax-exercise-vs-sale">exercise-vs-sale guide</a> and <a href="/blog/esop-capital-gains-tax-india">ESOP capital gains guide</a> walk through this.</p>
            <div class="formula-box">
                <span class="label">Capital gain</span> = (Sale price − FMV at exercise) × Shares<br>
                <span class="label">Holding period</span> = Exercise date → Sale date
            </div>
        </section>

        <section class="content-section" id="rates">
            <h2>Rates & Holding Periods (Post-23-July-2024)</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Share type</th><th>Long-term if held</th><th>STCG</th><th>LTCG</th></tr>
                </thead>
                <tbody>
                    <tr><td>Listed equity (STT paid)</td><td>&gt; 12 months</td><td>20%</td><td>12.5% above ₹1.25L/yr</td></tr>
                    <tr><td>Unlisted / foreign</td><td>&gt; 24 months</td><td>Slab rate</td><td>12.5% (no indexation)</td></tr>
                </tbody>
            </table>
            <p>These reflect the Finance (No. 2) Act 2024, effective for transfers on or after <strong>23 July 2024</strong> — STCG on listed rose from 15% to 20%, LTCG from 10% to 12.5%, the LTCG exemption rose from ₹1 lakh to ₹1.25 lakh, and indexation was removed for unlisted shares. Earlier sales used the old rates; see Patron's <a href="/blog/capital-gains-tax-changes-budget-2024-impact">Budget 2024 capital-gains changes</a>. A 4% health & education cess applies on the tax. The concessional listed-equity rates require Securities Transaction Tax to have been paid, per the <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a>-regulated exchange framework, and the charge is administered through the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax portal</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with ESOP Capital Gains & ITR Filing?</h3>
            <p>Patron Accounting LLP supports ESOP holders selling shares and reporting capital gains in their ITR — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20need%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20capital%20gains%20/%20ITR%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20would%20like%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%0A%0AMy%20details%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Sale%20price%20%26%20FMV%20at%20exercise%3A%0A-%20Holding%20period%3A%0A-%20Number%20of%20shares%20sold%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="example">
            <h2>A Worked Example</h2>
            <p>An employee exercised options at a FMV of ₹500 (already taxed as perquisite) and later sells 10,000 listed shares at ₹1,200, having held them for 18 months.</p>
            <ul>
                <li><strong>Capital gain</strong> = (1,200 − 500) × 10,000 = <strong>₹70,00,000</strong>.</li>
                <li><strong>Holding 18 months &gt; 12</strong> → long-term for listed shares.</li>
                <li><strong>Taxable LTCG</strong> = 70,00,000 − 1,25,000 exemption = ₹68,75,000.</li>
                <li><strong>Tax</strong> = 12.5% × 68,75,000 = ₹8,59,375, plus 4% cess = <strong>₹8,93,750</strong>.</li>
            </ul>
            <p>Had the same shares been <strong>unlisted</strong>, 18 months would be <strong>short-term</strong> (threshold 24 months), and the ₹70,00,000 gain would be taxed at the employee's slab rate instead — a large difference that shows why the listed/unlisted distinction and timing matter.</p>
        </section>

        <section class="content-section" id="planning">
            <h2>Planning the Sale</h2>
            <ul>
                <li><strong>Cross the long-term line</strong> — 12 months (listed) or 24 months (unlisted) shifts you to the 12.5% rate.</li>
                <li><strong>Spread sales across financial years</strong> to use the ₹1.25 lakh listed-LTCG exemption more than once.</li>
                <li><strong>Harvest losses</strong> — set off capital losses against gains within the rules.</li>
                <li><strong>Reinvestment</strong> — long-term gains may qualify under Sections 54F or 54EC; see Patron's <a href="/blog/section-54-vs-54f-vs-54ec-property-reinvestment">54/54F/54EC guide</a>.</li>
                <li><strong>Foreign shares</strong> — disclose in Schedule FA and claim foreign tax credit via Form 67.</li>
            </ul>
            <p>For the sale process on private-company shares, see <a href="/esop-secondary-sale-advisory">ESOP secondary sale advisory</a>; for filing, <a href="/itr-for-capital-gains">ITR for capital gains</a>.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This is indicative. Surcharge on high incomes, loss set-off rules, residency and foreign-exchange conversion can change the result — confirm with a professional before filing.</p>
            </div>
        </section>

        <section class="content-section" id="law">
            <h2>The Sections Behind the Rates</h2>
            <p>The ESOP capital-gains rates sit in well-known charging provisions of the Income-tax Act, renumbered under the Income-tax Act 2025 but substantively unchanged:</p>
            <ul>
                <li><strong>Listed equity STCG</strong> — erstwhile Section 111A (20% post-Budget-2024).</li>
                <li><strong>Listed equity LTCG</strong> — erstwhile Section 112A (12.5% above ₹1.25 lakh).</li>
                <li><strong>Unlisted LTCG</strong> — Section 112 (12.5% without indexation for transfers on or after 23 July 2024).</li>
                <li><strong>Cost of acquisition</strong> — the exercise-date FMV, by virtue of the perquisite already taxed under Section 17(2)(vi).</li>
            </ul>
            <p>The Income Tax Department (<a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">incometaxindia.gov.in</a>) sets the reporting schedules, and professional computation standards are guided by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. For <strong>foreign ESOP shares</strong>, the sale proceeds and cost are converted to rupees using reference rates published by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>, and the holdings are disclosed in Schedule FA. Always match the rate window to the exact <strong>date of transfer</strong>, since pre-23-July-2024 sales used the older 15%/10% regime.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How are capital gains on ESOP shares taxed?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">When you sell shares acquired through ESOPs, the capital gain is the sale price less the fair market value on the exercise date, multiplied by the number of shares. That FMV is the cost of acquisition because it was already taxed as a salary perquisite at exercise. The gain is then taxed as short term or long term depending on the holding period and whether the shares are listed or unlisted, at the rates applicable on the date of sale.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the cost of acquisition for ESOP shares?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The cost of acquisition is the fair market value of the share on the exercise date, not the exercise price you paid. This is because the difference between the exercise FMV and the exercise price was already taxed as a perquisite under salary at exercise. Using the exercise FMV as the cost ensures the same gain is not taxed twice — only the appreciation after exercise is taxed as capital gains on sale.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the holding period for ESOP shares?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The holding period runs from the date of exercise, when the shares are allotted, to the date of sale. For listed shares the gain is long term if held for more than 12 months, otherwise short term. For unlisted shares the threshold is 24 months. The vesting and grant periods do not count; only the period the shares are actually held after exercise determines the short or long term classification.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are the capital gains rates on listed ESOP shares?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For listed equity shares sold on or after 23 July 2024 with STT paid, short term capital gains (held 12 months or less) are taxed at 20 percent, and long term capital gains (held more than 12 months) at 12.5 percent on the amount exceeding the 1.25 lakh annual exemption. Health and education cess of 4 percent applies on the tax. These rates were revised upward from 15 percent and 10 percent by the Finance Act 2024.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are the capital gains rates on unlisted ESOP shares?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For unlisted shares, short term capital gains (held 24 months or less) are added to total income and taxed at the applicable slab rate. Long term capital gains (held more than 24 months) are taxed at 12.5 percent without indexation for transfers on or after 23 July 2024, the indexation benefit having been removed by the Finance Act 2024. The 1.25 lakh exemption applies to listed equity, not to unlisted shares.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the 1.25 lakh LTCG exemption?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For long term capital gains on listed equity shares, the first 1.25 lakh of such gains in a financial year is exempt from tax, and only the excess is taxed at 12.5 percent. This exemption was raised from 1 lakh by the Finance Act 2024. It applies per financial year across all listed equity LTCG, so spreading sales across years can help use more than one year's exemption. It does not apply to unlisted shares.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is there double taxation on ESOPs at exercise and sale?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. ESOP taxation is in two stages but the same gain is not taxed twice. At exercise, the gap between the exercise price and the FMV is taxed as a salary perquisite. At sale, only the further appreciation above that exercise FMV is taxed as capital gains, because the FMV becomes the cost of acquisition. So the perquisite covers the gain up to exercise, and capital gains cover the gain after exercise — two different slices.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How are foreign ESOP shares taxed on sale?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Shares of a foreign parent are generally treated like unlisted shares for holding period, so long term needs more than 24 months, with long term gains at 12.5 percent and short term at slab rate. The gain is computed in rupees using the appropriate exchange rates. Foreign shareholdings must be disclosed in Schedule FA of the income tax return, and any foreign tax paid may be claimed as a credit by filing Form 67. Residency status at sale should also be checked.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I reduce ESOP capital gains tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Planning options include holding listed shares beyond 12 months (or unlisted beyond 24 months) to access the lower long term rate, spreading sales across financial years to use the 1.25 lakh exemption more than once, and harvesting capital losses to set off against gains. Long term gains may also be reinvested under Sections 54F or 54EC subject to conditions. These depend on your situation, so confirm with a tax professional before acting.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the ESOP Capital Gains Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting ESOP Capital Gains Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the capital gain as sale price less FMV at exercise, classifies it as short or long term from your holding period, and applies the current post July 2024 rates for listed and unlisted shares with the 1.25 lakh exemption and cess. It is indicative; confirm the final position with a professional.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>ESOP Capital Gains & ITR</h3>
            <p>Gain computation, exemptions, set-offs and capital-gains ITR filing including foreign shares — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20need%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20capital%20gains%20/%20ITR%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Capital%20Gains%20Calculator%20and%20would%20like%20help%20with%20ESOP%20capital%20gains%20and%20ITR%20filing.%0A%0AMy%20details%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Sale%20price%20%26%20FMV%20at%20exercise%3A%0A-%20Holding%20period%3A%0A-%20Number%20of%20shares%20sold%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-fmv-calculator" class="sidebar-link">ESOP FMV Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">Perquisite Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-tds-calculator" class="sidebar-link">ESOP TDS Calculator <span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/esop-secondary-sale-advisory" class="sidebar-link">ESOP Secondary Sale <span class="arrow">→</span></a>
            <a href="/itr-for-esop-employees" class="sidebar-link">ITR for ESOP Employees <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-capital-gains-tax-india" class="sidebar-link">ESOP Capital Gains <span class="arrow">→</span></a>
            <a href="/blog/capital-gains-tax-changes-budget-2024-impact" class="sidebar-link">Budget 2024 CG Changes <span class="arrow">→</span></a>
            <a href="/blog/esop-perquisite-tax-exercise-vs-sale" class="sidebar-link">Exercise vs Sale Tax <span class="arrow">→</span></a>
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

    var shareType = 'listed';
    var LTCG_EXEMPTION = 125000;
    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }

    function pickType(btn){
        shareType = btn.dataset.type;
        document.querySelectorAll('#typeToggle .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        document.getElementById('resultSection').classList.remove('visible');
    }

    function calculate(){
        var sale = val('salePrice'), fmv = val('exerciseFmv'), sh = val('shares'), hold = val('holding');
        if (sh <= 0){ alert('Please enter the number of shares sold.'); return; }
        if (sale <= 0){ alert('Please enter the sale price per share.'); return; }

        var gain = (sale - fmv) * sh;
        var threshold = (shareType === 'listed') ? 12 : 24;
        var isLong = hold > threshold;

        var tax = 0, taxableGain = gain, rateLabel = '', exemptionUsed = 0;
        var rows = '';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Sale price per share</span><span class="breakdown-value">' + fmtINR(sale) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Less: FMV at exercise (cost)</span><span class="breakdown-value">− ' + fmtINR(fmv) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Gain per share × ' + sh.toLocaleString('en-IN') + ' shares</span><span class="breakdown-value">' + fmtINR(gain) + '</span></div>';

        if (gain <= 0){
            document.getElementById('resGain').textContent = fmtINR(gain);
            document.getElementById('termTag').className = 'term-tag st';
            document.getElementById('termTag').textContent = (gain < 0 ? 'Capital loss' : 'No gain');
            document.getElementById('resTax').textContent = fmtINR(0);
            rows += '<div class="breakdown-row total"><span class="breakdown-label">Capital gains tax</span><span class="breakdown-value">₹0</span></div>';
            if (gain < 0) rows += '<div class="breakdown-row"><span class="breakdown-label" style="color:var(--accent);">Note</span><span class="breakdown-value" style="color:var(--accent);">Loss may be set off / carried forward</span></div>';
            document.getElementById('breakdownSection').innerHTML = rows;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior:'smooth', block:'nearest' });
            return;
        }

        if (shareType === 'listed'){
            if (isLong){
                rateLabel = 'LTCG 12.5% (listed, above ₹1.25L)';
                var otherL = val('otherLtcg');
                var remainingExemption = Math.max(0, LTCG_EXEMPTION - otherL);
                exemptionUsed = Math.min(gain, remainingExemption);
                taxableGain = Math.max(0, gain - exemptionUsed);
                tax = taxableGain * 0.125;
            } else {
                rateLabel = 'STCG 20% (listed)';
                tax = gain * 0.20;
            }
        } else {
            if (isLong){
                rateLabel = 'LTCG 12.5% (unlisted, no indexation)';
                tax = gain * 0.125;
            } else {
                rateLabel = 'STCG at slab rate (unlisted)';
                var slab = val('slabRate');
                if (slab <= 0){ alert('For unlisted short-term gains, please enter your slab rate (incl. cess).'); return; }
                tax = gain * slab/100;
            }
        }

        // 4% cess for the statutory-rate cases (not the slab path, where user enters incl-cess rate)
        var cessApplied = false;
        if (!(shareType === 'unlisted' && !isLong)){
            tax = tax * 1.04; cessApplied = true;
        }

        document.getElementById('resGain').textContent = fmtINR(gain);
        var tag = document.getElementById('termTag');
        tag.className = 'term-tag ' + (isLong ? 'lt' : 'st');
        tag.textContent = (isLong ? 'Long-term' : 'Short-term') + ' · held ' + hold + ' mo';
        document.getElementById('resTax').textContent = fmtINR(tax);

        if (exemptionUsed > 0) rows += '<div class="breakdown-row"><span class="breakdown-label">Less: ₹1.25L LTCG exemption</span><span class="breakdown-value">− ' + fmtINR(exemptionUsed) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Taxable gain</span><span class="breakdown-value">' + fmtINR(taxableGain) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Rate</span><span class="breakdown-value" style="font-size:12px;">' + rateLabel + '</span></div>';
        if (cessApplied) rows += '<div class="breakdown-row"><span class="breakdown-label">Incl. 4% health & education cess</span><span class="breakdown-value">yes</span></div>';
        rows += '<div class="breakdown-row total"><span class="breakdown-label">Capital gains tax</span><span class="breakdown-value">' + fmtINR(tax) + '</span></div>';
        document.getElementById('breakdownSection').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        ['salePrice','exerciseFmv','shares','holding','slabRate','otherLtcg'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['salePrice','exerciseFmv','shares','holding','slabRate','otherLtcg'].forEach(function(id){
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
@endsection
