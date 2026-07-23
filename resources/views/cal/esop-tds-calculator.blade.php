@extends('layouts.app')
@section('meta')
<title>ESOP TDS Calculator | Section 192 Perquisite FY 2025-26</title>
<meta name="description" content="ESOP TDS calculator: compute the employer's Section 192 TDS on the ESOP perquisite at exercise for FY 2025-26, plus the 192(1C) startup deferral date. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-tds-calculator">

<meta property="og:title" content="ESOP TDS Calculator — Section 192 on Perquisite 2026">
<meta property="og:description" content="Compute the employer's Section 192 TDS on the ESOP perquisite at exercise using the average rate of tax, and the Section 192(1C) startup deferral trigger date.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-tds-calculator">
<meta property="og:image" content="/tools/esop-tds-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP TDS Calculator — Section 192 on Perquisite 2026">
<meta name="twitter:description" content="Employer's Section 192 TDS on the ESOP perquisite at exercise, plus the 192(1C) startup deferral trigger date. Free & instant.">
<meta name="twitter:image" content="/tools/esop-tds-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP TDS Calculator",
  "description": "ESOP TDS Calculator computes the employer's tax deducted at source under Section 192 on an ESOP perquisite at exercise. It works out the perquisite as fair market value less exercise price times the number of shares, adds it to the employee's salary, and applies the average rate of tax to find the incremental TDS attributable to the perquisite. It also handles the Section 192(1C) deferral for eligible DPIIT and Section 80-IAC startups, showing the trigger date at the earliest of forty-eight months from the end of the assessment year of allotment, sale of shares, or cessation of employment.",
  "url": "/tools/esop-tds-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP TDS Calculator", "item": "/tools/esop-tds-calculator"}
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
      "name": "Is TDS deducted on ESOPs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. When an employee exercises stock options, the gain — fair market value on the exercise date minus the exercise price — is a perquisite taxed as salary under Section 17(2)(vi). The employer must deduct TDS on it under Section 192. Because the perquisite is a non-cash benefit, the TDS is usually recovered from the employee's regular cash salary in the same or next payroll cycle, then deposited with the government."
      }
    },
    {
      "@type": "Question",
      "name": "How is ESOP TDS calculated under Section 192?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Section 192 requires TDS on salary at the average rate of tax for the year. The employer estimates total salary including the ESOP perquisite, computes the tax on it, and the average rate is that tax divided by total income. The TDS attributable to the perquisite is effectively the extra tax the perquisite adds — the tax on salary with the perquisite, less the tax on salary without it. This calculator computes that incremental TDS."
      }
    },
    {
      "@type": "Question",
      "name": "What is the ESOP perquisite on which TDS is deducted?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The perquisite is the fair market value of the share on the exercise date, less the exercise price paid, multiplied by the number of shares exercised. For listed shares the FMV is the average of the opening and closing price on the exercise date; for unlisted shares it is a SEBI Category I merchant banker valuation. This perquisite is added to salary income, and the employer deducts TDS on it under Section 192."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Section 192(1C) deferral for startups?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Section 192(1C), introduced by the Finance Act 2020, lets eligible startups defer the TDS on the ESOP perquisite. The employer does not deduct TDS at exercise; instead tax is deducted or paid within 14 days of the earliest of three events: forty-eight months from the end of the assessment year in which the shares were allotted, the sale of the shares, or the employee ceasing employment. Only DPIIT-recognised startups holding a Section 80-IAC certificate qualify."
      }
    },
    {
      "@type": "Question",
      "name": "Which startups qualify for the ESOP TDS deferral?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Only an eligible startup under Section 80-IAC qualifies — that means DPIIT recognition plus an Inter-Ministerial Board certificate. Many startups are DPIIT-recognised, but far fewer hold the 80-IAC certificate, so the deferral is narrower than it first appears. If the company does not have the 80-IAC certificate, TDS on the ESOP perquisite must be deducted at exercise in the normal way under Section 192."
      }
    },
    {
      "@type": "Question",
      "name": "When does the deferred ESOP tax become payable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The deferred tax falls due on the earliest of: the expiry of forty-eight months from the end of the assessment year in which the shares were allotted, the date the employee sells the shares, or the date employment ceases. Tax must then be deducted or paid within 14 days of that trigger. Importantly, the tax is computed at the rates applicable in the year of allotment, not the rates of the year in which the trigger occurs."
      }
    },
    {
      "@type": "Question",
      "name": "Who deposits the ESOP TDS and how is it reported?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The employer deducts and deposits the TDS with the government and reports it in the quarterly salary TDS return, Form 24Q. The perquisite and tax appear in the employee's Form 16 and Form 12BA, and the employee should cross-check that the TDS reflects in Form 26AS and the Annual Information Statement. Where the perquisite is deferred under Section 192(1C), it appears only when the trigger event occurs."
      }
    },
    {
      "@type": "Question",
      "name": "What if the employee has no cash salary to recover the TDS from?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Because the ESOP perquisite is non-cash, the TDS is normally recovered from the employee's regular cash salary. If the salary is insufficient to cover it, the employer and employee usually arrange for the employee to pay the shortfall to the employer so it can be deposited, or the employee discharges it as advance tax or self-assessment tax. Planning for this cash outflow before exercising is important, since the tax arises even though no shares are sold."
      }
    },
    {
      "@type": "Question",
      "name": "Does the employee still pay tax if TDS was deducted?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The TDS is a credit against the employee's final tax liability, not an extra tax. The perquisite is included in salary in the income tax return, the total tax is computed, and the ESOP TDS already deducted is adjusted against it. If too much was deducted the balance is refunded; if too little, the employee pays the shortfall. A later sale of the shares is separately taxed as capital gains, with the exercise-date FMV as the cost."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ESOP TDS Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting ESOP TDS Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It estimates the employer's Section 192 TDS on the ESOP perquisite using the average rate of tax and shows the Section 192(1C) deferral trigger date for eligible startups. It is an indicative tool; the employer's payroll computation and Form 24Q filing should be confirmed by a professional."
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
        .defer-block { display: none; }
        .defer-block.show { display: block; }
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
        .defer-banner { border-radius: var(--radius); padding: 18px 22px; border: 1px solid var(--border); border-left: 4px solid var(--info); background: #EFF6FF; margin-bottom: 16px; }
        .defer-banner .db-tag { font-family: var(--font-mono); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--info); margin-bottom: 6px; }
        .defer-banner .db-title { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin-bottom: 6px; }
        .defer-banner .db-detail { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
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
        <a href="#section192">Section 192</a>
        <a href="#defer">192(1C) Deferral</a>
        <a href="#reporting">Reporting</a>
        <a href="#timeline">Timeline</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP TDS Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP TDS Calculator — <span>Section 192 on Perquisite 2026</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">ESOP TDS or 24Q questions? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20TDS%20Calculator%20and%20need%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20TDS%20/%20Section%20192%20/%2024Q%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20TDS%20Calculator%20and%20would%20like%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28eligible%2080-IAC%20startup%3F%20yes/no%29%3A%0A-%20Number%20of%20employees%20exercising%3A%0A-%20Total%20ESOP%20perquisite%3A%0A-%20Deduct%20now%20or%20defer%20u/s%20192%281C%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Work out the <strong>employer's TDS under Section 192</strong> on an ESOP perquisite at exercise. Enter the <strong>perquisite</strong> (FMV − exercise price × shares) and the employee's <strong>other salary income</strong>; the tool adds the perquisite to salary and applies the <strong>average rate of tax</strong> to find the <strong>incremental TDS</strong> on the perquisite. Switch to <strong>defer mode</strong> for eligible DPIIT + 80-IAC startups under <strong>Section 192(1C)</strong> — it shows the trigger date (earliest of 48 months from end of the AY of allotment, sale, or cessation) and the 14-day deposit rule.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate ESOP TDS</h2>
            <p class="calc-sub">New-regime slabs (Section 115BAC) for FY 2025-26 / 2026-27, plus 4% cess. Indicative — confirm against payroll.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or compute TDS = (tax on salary with perquisite − tax on salary without) manually using the slabs below.
                </div>
            </noscript>

            <label class="q-label">Mode</label>
            <div class="toggle-group" id="modeToggle">
                <button type="button" class="toggle-btn active" data-mode="now" onclick="pickMode(this)">Deduct now (at exercise)</button>
                <button type="button" class="toggle-btn" data-mode="defer" onclick="pickMode(this)">Defer u/s 192(1C)</button>
            </div>

            <div class="field-group-title">Perquisite</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="perq">ESOP Perquisite Value (₹)</label>
                    <input type="text" id="perq" placeholder="e.g. 700000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">(FMV − exercise price) × shares.</div>
                </div>
                <div class="form-group">
                    <label for="otherSalary">Other Salary Income (₹)</label>
                    <input type="text" id="otherSalary" placeholder="e.g. 1500000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Salary for the year excluding the perquisite.</div>
                </div>
            </div>

            <div class="field-group-title">Tax basis</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="regime">Tax Regime</label>
                    <select id="regime">
                        <option value="new">New regime (115BAC, default)</option>
                        <option value="oldflag">Old regime (use my marginal rate)</option>
                    </select>
                    <div class="field-hint">New-regime slabs are built in.</div>
                </div>
                <div class="form-group" id="marginalWrap" style="display:none;">
                    <label for="marginalRate">Your Marginal Rate (%)</label>
                    <input type="text" id="marginalRate" placeholder="e.g. 31.2" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Incl. cess; old-regime approximation.</div>
                </div>
            </div>

            <div class="defer-block" id="deferBlock">
                <div class="field-group-title">Deferral inputs (Section 192(1C))</div>
                <div class="calc-row">
                    <div class="form-group">
                        <label for="allotFY">Financial Year of Allotment</label>
                        <select id="allotFY">
                            <option value="2025">FY 2025-26</option>
                            <option value="2026">FY 2026-27</option>
                            <option value="2024">FY 2024-25</option>
                            <option value="2023">FY 2023-24</option>
                        </select>
                        <div class="field-hint">Year shares were allotted on exercise.</div>
                    </div>
                    <div class="form-group"></div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate TDS</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="defer-banner" id="deferBanner" style="display:none;"></div>
                <div class="result-grid">
                    <div class="result-card highlight">
                        <div class="result-label">TDS on ESOP Perquisite</div>
                        <div class="result-value" id="resTds">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Effective Rate on Perquisite</div>
                        <div class="result-value" id="resRate">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need this deducted, recovered and filed correctly?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant computes the ESOP perquisite TDS, recovers it from payroll, files Form 24Q, and tracks the 192(1C) deferral triggers for startups.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20TDS%20Calculator%20and%20need%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20TDS%20/%20Section%20192%20/%2024Q%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20TDS%20Calculator%20and%20would%20like%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28eligible%2080-IAC%20startup%3F%20yes/no%29%3A%0A-%20Number%20of%20employees%20exercising%3A%0A-%20Total%20ESOP%20perquisite%3A%0A-%20Deduct%20now%20or%20defer%20u/s%20192%281C%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the ESOP TDS Calculator</h2>
            <ol>
                <li><strong>Choose the mode.</strong> "Deduct now" computes TDS at exercise; "Defer u/s 192(1C)" is for eligible DPIIT + 80-IAC startups and shows the deferred trigger date.</li>
                <li><strong>Enter the perquisite</strong> — (FMV on exercise date − exercise price) × shares. Use the <a href="/tools/esop-fmv-calculator">ESOP FMV calculator</a> if you need the FMV first.</li>
                <li><strong>Enter other salary income</strong> for the year, so the average-rate computation is realistic.</li>
                <li><strong>Pick the tax basis</strong> — new-regime slabs are built in; choose old regime to enter your own marginal rate.</li>
                <li><strong>Click Calculate</strong> for the TDS on the perquisite, the effective rate, and the full working.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Because the perquisite is non-cash, the employer recovers this TDS from the employee's cash salary. Plan the cash flow before exercising — the tax is due even though no shares have been sold.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What This Calculator Is For</h2>
            <p>When an employee exercises ESOPs, the gain — <strong>FMV on the exercise date less the exercise price</strong>, times the number of shares — is a <strong>perquisite</strong> taxed as salary under Section 17(2)(vi). The <strong>employer must deduct TDS</strong> on it under <strong>Section 192</strong>. This tool estimates that employer TDS.</p>
            <p>It is distinct from the <a href="/tools/esop-perquisite-tax-calculator">perquisite tax calculator</a> (the employee's slab tax on the perquisite) and the general <a href="/tools/esop-tax-calculator">ESOP tax calculator</a> — this one focuses on the <strong>employer's Section 192 withholding</strong> and the startup <strong>deferral</strong>. For the full framework see Patron's <a href="/blog/esop-taxation-rules-2026-when-how-stock-options-taxed-rules">ESOP taxation rules 2026</a>.</p>
        </section>

        <section class="content-section" id="section192">
            <h2>How Section 192 TDS Works on ESOPs</h2>
            <p>Section 192 requires the employer to deduct TDS on salary at the <strong>average rate of tax</strong> for the year — total tax on estimated income divided by total income. Since the ESOP perquisite is part of salary, the TDS attributable to it is the <strong>extra tax it creates</strong>:</p>
            <div class="formula-box">
                <span class="label">Perquisite</span> = (FMV − Exercise price) × Shares<br>
                <span class="label">TDS on perquisite</span> = Tax(salary + perquisite) − Tax(salary)<br>
                <span class="label">Effective rate</span> = TDS on perquisite ÷ Perquisite
            </div>
            <p>Worked example: an employee with ₹15,00,000 other salary exercises options giving a ₹7,00,000 perquisite. The tool computes the tax on ₹22,00,000 and on ₹15,00,000; the difference is the TDS the employer withholds on the perquisite. As a non-cash benefit, it is recovered from the employee's cash salary and deposited with the government via the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax portal</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with ESOP TDS & Section 192 Compliance?</h3>
            <p>Patron Accounting LLP supports employers and startups deducting TDS on ESOP perquisites and filing Form 24Q — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20TDS%20Calculator%20and%20need%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20TDS%20/%20Section%20192%20/%2024Q%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20TDS%20Calculator%20and%20would%20like%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28eligible%2080-IAC%20startup%3F%20yes/no%29%3A%0A-%20Number%20of%20employees%20exercising%3A%0A-%20Total%20ESOP%20perquisite%3A%0A-%20Deduct%20now%20or%20defer%20u/s%20192%281C%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="defer">
            <h2>Section 192(1C) Startup Deferral</h2>
            <p>The Finance Act 2020 added <strong>Section 192(1C)</strong>, letting <strong>eligible startups</strong> defer the ESOP TDS. The employer does <em>not</em> deduct at exercise; instead, tax is deducted or paid <strong>within 14 days</strong> of the earliest of three triggers:</p>
            <ul>
                <li><strong>48 months</strong> from the end of the <strong>assessment year</strong> in which the shares were allotted;</li>
                <li><strong>sale</strong> of the shares; or</li>
                <li><strong>cessation</strong> of employment.</li>
            </ul>
            <p>Only an <strong>eligible startup under Section 80-IAC</strong> qualifies — <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> recognition <em>plus</em> an Inter-Ministerial Board (IMB) certificate obtained via <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a>. Many startups are DPIIT-recognised but far fewer hold the 80-IAC certificate. A crucial detail: the deferred tax is computed at the <strong>rates of the year of allotment</strong>, not the year the trigger occurs. See Patron's deep-dives on the <a href="/blog/esop-tax-deferral-startup-employees-dpiit-section-80-iac">80-IAC ESOP deferral</a> and <a href="/blog/section-80-iac-esop-deferment-startup">Section 80-IAC deferment</a>.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> Deferral postpones <em>when</em> tax is paid, not whether. Without the 80-IAC certificate, normal Section 192 TDS applies at exercise.</p>
            </div>
        </section>

        <section class="content-section" id="reporting">
            <h2>Reporting & Compliance</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Item</th><th>Where it appears</th></tr>
                </thead>
                <tbody>
                    <tr><td>Quarterly salary TDS return</td><td>Form 24Q — employer files the ESOP perquisite TDS.</td></tr>
                    <tr><td>Employee tax certificate</td><td>Form 16 and Form 12BA (perquisite detail).</td></tr>
                    <tr><td>Employee cross-check</td><td>Form 26AS and the Annual Information Statement (AIS) under Section 192.</td></tr>
                    <tr><td>Deferred perquisite</td><td>Appears only when the 192(1C) trigger occurs.</td></tr>
                </tbody>
            </table>
            <p>The TDS is a credit against the employee's final liability, claimed in the ITR (<a href="/itr-for-esop-employees">ITR for ESOP employees</a>). For the employer-side filing, see Patron's <a href="/tds-return-filing">TDS return filing</a> service and the broader <a href="/esop-management-and-compliance-services">ESOP management & compliance</a> support.</p>
        </section>

        <section class="content-section" id="timeline">
            <h2>Deferral Timeline — A Worked Example</h2>
            <p>Suppose an employee of an eligible 80-IAC startup exercises options and is allotted shares in <strong>FY 2025-26</strong>. The assessment year of allotment is <strong>AY 2026-27</strong>, which ends on <strong>31 March 2027</strong>. The 48-month clock runs from that date, so the time-based trigger is <strong>31 March 2031</strong>.</p>
            <ul>
                <li>If the employee <strong>sells the shares</strong> in, say, 2028 — that earlier date becomes the trigger, and TDS is due within 14 days of the sale.</li>
                <li>If the employee <strong>resigns</strong> in 2029 — cessation becomes the trigger instead.</li>
                <li>If neither happens, the <strong>48-month</strong> date (31 March 2031) is the trigger.</li>
            </ul>
            <p>Whichever comes first, the tax is computed at <strong>FY 2025-26 rates</strong> (the year of allotment) even if paid in 2031. The framework sits in Section 192(1C) administered by the Income Tax Department (<a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">incometaxindia.gov.in</a>), with the salary-TDS and Form 24Q rules guided by professional standards from the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. This calculator's defer mode shows the 48-month date automatically from the allotment year you select.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is TDS deducted on ESOPs?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. When an employee exercises stock options, the gain — fair market value on the exercise date minus the exercise price — is a perquisite taxed as salary under Section 17(2)(vi). The employer must deduct TDS on it under Section 192. Because the perquisite is a non-cash benefit, the TDS is usually recovered from the employee's regular cash salary in the same or next payroll cycle, then deposited with the government.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is ESOP TDS calculated under Section 192?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 192 requires TDS on salary at the average rate of tax for the year. The employer estimates total salary including the ESOP perquisite, computes the tax on it, and the average rate is that tax divided by total income. The TDS attributable to the perquisite is effectively the extra tax the perquisite adds — the tax on salary with the perquisite, less the tax on salary without it. This calculator computes that incremental TDS.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the ESOP perquisite on which TDS is deducted?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The perquisite is the fair market value of the share on the exercise date, less the exercise price paid, multiplied by the number of shares exercised. For listed shares the FMV is the average of the opening and closing price on the exercise date; for unlisted shares it is a SEBI Category I merchant banker valuation. This perquisite is added to salary income, and the employer deducts TDS on it under Section 192.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Section 192(1C) deferral for startups?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 192(1C), introduced by the Finance Act 2020, lets eligible startups defer the TDS on the ESOP perquisite. The employer does not deduct TDS at exercise; instead tax is deducted or paid within 14 days of the earliest of three events: forty-eight months from the end of the assessment year in which the shares were allotted, the sale of the shares, or the employee ceasing employment. Only DPIIT-recognised startups holding a Section 80-IAC certificate qualify.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which startups qualify for the ESOP TDS deferral?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Only an eligible startup under Section 80-IAC qualifies — that means DPIIT recognition plus an Inter-Ministerial Board certificate. Many startups are DPIIT-recognised, but far fewer hold the 80-IAC certificate, so the deferral is narrower than it first appears. If the company does not have the 80-IAC certificate, TDS on the ESOP perquisite must be deducted at exercise in the normal way under Section 192.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When does the deferred ESOP tax become payable?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The deferred tax falls due on the earliest of: the expiry of forty-eight months from the end of the assessment year in which the shares were allotted, the date the employee sells the shares, or the date employment ceases. Tax must then be deducted or paid within 14 days of that trigger. Importantly, the tax is computed at the rates applicable in the year of allotment, not the rates of the year in which the trigger occurs.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Who deposits the ESOP TDS and how is it reported?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The employer deducts and deposits the TDS with the government and reports it in the quarterly salary TDS return, Form 24Q. The perquisite and tax appear in the employee's Form 16 and Form 12BA, and the employee should cross-check that the TDS reflects in Form 26AS and the Annual Information Statement. Where the perquisite is deferred under Section 192(1C), it appears only when the trigger event occurs.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What if the employee has no cash salary to recover the TDS from?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Because the ESOP perquisite is non-cash, the TDS is normally recovered from the employee's regular cash salary. If the salary is insufficient to cover it, the employer and employee usually arrange for the employee to pay the shortfall to the employer so it can be deposited, or the employee discharges it as advance tax or self-assessment tax. Planning for this cash outflow before exercising is important, since the tax arises even though no shares are sold.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does the employee still pay tax if TDS was deducted?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The TDS is a credit against the employee's final tax liability, not an extra tax. The perquisite is included in salary in the income tax return, the total tax is computed, and the ESOP TDS already deducted is adjusted against it. If too much was deducted the balance is refunded; if too little, the employee pays the shortfall. A later sale of the shares is separately taxed as capital gains, with the exercise-date FMV as the cost.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the ESOP TDS Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting ESOP TDS Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It estimates the employer's Section 192 TDS on the ESOP perquisite using the average rate of tax and shows the Section 192(1C) deferral trigger date for eligible startups. It is an indicative tool; the employer's payroll computation and Form 24Q filing should be confirmed by a professional.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>ESOP TDS & 24Q Filing</h3>
            <p>Perquisite TDS computation, recovery, Form 24Q filing and 192(1C) deferral tracking — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20TDS%20Calculator%20and%20need%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20TDS%20/%20Section%20192%20/%2024Q%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20TDS%20Calculator%20and%20would%20like%20help%20with%20ESOP%20TDS%20and%20Form%2024Q%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28eligible%2080-IAC%20startup%3F%20yes/no%29%3A%0A-%20Number%20of%20employees%20exercising%3A%0A-%20Total%20ESOP%20perquisite%3A%0A-%20Deduct%20now%20or%20defer%20u/s%20192%281C%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">Perquisite Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-fmv-calculator" class="sidebar-link">ESOP FMV Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-tax-calculator" class="sidebar-link">ESOP Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
            <a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Compliance <span class="arrow">→</span></a>
            <a href="/itr-for-esop-employees" class="sidebar-link">ITR for ESOP Employees <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-tax-deferral-startup-employees-dpiit-section-80-iac" class="sidebar-link">80-IAC ESOP Deferral <span class="arrow">→</span></a>
            <a href="/blog/esop-perquisite-tax-section-17" class="sidebar-link">ESOP Perquisite Tax <span class="arrow">→</span></a>
            <a href="/blog/esop-taxation-rules-2026-when-how-stock-options-taxed-rules" class="sidebar-link">ESOP Taxation Rules 2026 <span class="arrow">→</span></a>
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

    var mode = 'now';
    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }

    // New-regime slabs FY 2025-26 / 2026-27 (Section 115BAC): nil to 4L; 4-8L 5%; 8-12L 10%; 12-16L 15%; 16-20L 20%; 20-24L 25%; >24L 30%
    function taxNewRegime(income){
        if (income <= 0) return 0;
        var slabs = [[400000,0],[800000,0.05],[1200000,0.10],[1600000,0.15],[2000000,0.20],[2400000,0.25],[Infinity,0.30]];
        var tax = 0, prev = 0;
        for (var i=0;i<slabs.length;i++){
            var cap = slabs[i][0], rate = slabs[i][1];
            if (income > prev){
                var amt = Math.min(income, cap) - prev;
                tax += amt * rate; prev = cap;
            } else break;
        }
        return tax;
    }
    function withCess(t){ return t * 1.04; } // 4% health & education cess

    function pickMode(btn){
        mode = btn.dataset.mode;
        document.querySelectorAll('#modeToggle .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        document.getElementById('deferBlock').classList.toggle('show', mode === 'defer');
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('regime').addEventListener('change', function(){
        document.getElementById('marginalWrap').style.display = this.value === 'oldflag' ? 'block' : 'none';
    });

    function calculate(){
        var perq = val('perq');
        if (perq <= 0){ alert('Please enter the ESOP perquisite value.'); return; }
        var other = val('otherSalary');
        var regime = document.getElementById('regime').value;

        var tds, basisRows = '';
        if (regime === 'oldflag'){
            var mr = val('marginalRate');
            if (mr <= 0){ alert('Please enter your marginal rate, or switch to the new regime.'); return; }
            tds = perq * mr/100;
            basisRows += '<div class="breakdown-row"><span class="breakdown-label">Marginal rate (incl. cess)</span><span class="breakdown-value">' + mr.toFixed(2) + '%</span></div>';
            basisRows += '<div class="breakdown-row"><span class="breakdown-label">Perquisite × marginal rate</span><span class="breakdown-value">' + fmtINR(perq) + ' × ' + mr.toFixed(2) + '%</span></div>';
        } else {
            var taxWithout = withCess(taxNewRegime(other));
            var taxWith = withCess(taxNewRegime(other + perq));
            tds = taxWith - taxWithout;
            basisRows += '<div class="breakdown-row"><span class="breakdown-label">Tax on salary without perquisite</span><span class="breakdown-value">' + fmtINR(taxWithout) + '</span></div>';
            basisRows += '<div class="breakdown-row"><span class="breakdown-label">Tax on salary + perquisite</span><span class="breakdown-value">' + fmtINR(taxWith) + '</span></div>';
        }

        var effRate = perq > 0 ? (tds / perq * 100) : 0;
        document.getElementById('resTds').textContent = fmtINR(tds);
        document.getElementById('resRate').textContent = effRate.toFixed(1) + '%';

        var rows = '';
        rows += '<div class="breakdown-row"><span class="breakdown-label">ESOP perquisite</span><span class="breakdown-value">' + fmtINR(perq) + '</span></div>';
        if (other > 0) rows += '<div class="breakdown-row"><span class="breakdown-label">Other salary income</span><span class="breakdown-value">' + fmtINR(other) + '</span></div>';
        rows += basisRows;
        rows += '<div class="breakdown-row total"><span class="breakdown-label">TDS on ESOP perquisite (u/s 192)</span><span class="breakdown-value">' + fmtINR(tds) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Effective rate on perquisite</span><span class="breakdown-value">' + effRate.toFixed(1) + '%</span></div>';
        document.getElementById('breakdownSection').innerHTML = rows;

        // Deferral banner
        var banner = document.getElementById('deferBanner');
        if (mode === 'defer'){
            var fy = parseInt(document.getElementById('allotFY').value, 10); // start year of FY of allotment
            // AY of allotment = FY+1 .. its end = 31 Mar (FY+2). 48 months after that end = 31 Mar (FY+6).
            var triggerYear = fy + 6;
            banner.style.display = 'block';
            banner.innerHTML = '<div class="db-tag">Section 192(1C) — deferred</div>' +
                '<div class="db-title">TDS deferred; trigger = earliest of three events</div>' +
                '<div class="db-detail">For an eligible DPIIT + 80-IAC startup, TDS is not deducted now. It falls due within <strong>14 days</strong> of the <strong>earliest</strong> of: (a) <strong>31 March ' + triggerYear + '</strong> — 48 months from the end of the assessment year of allotment (FY ' + fy + '-' + ((fy+1)%100) + '); (b) <strong>sale</strong> of the shares; or (c) <strong>cessation</strong> of employment. The amount above (' + fmtINR(tds) + ') is computed at the <strong>rates of the year of allotment</strong>, not the trigger year.</div>';
        } else {
            banner.style.display = 'none';
        }

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        ['perq','otherSalary','marginalRate'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('regime').value = 'new';
        document.getElementById('marginalWrap').style.display = 'none';
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['perq','otherSalary','marginalRate'].forEach(function(id){
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
