@extends('layouts.app')
@section('meta')
<title>ESOP FMV Calculator | Fair Market Value at Exercise</title>
<meta name="description" content="ESOP FMV calculator: find fair market value per share at exercise for listed, foreign or unlisted shares, plus the taxable perquisite under Section 17(2)(vi).">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-fmv-calculator">

<meta property="og:title" content="ESOP FMV Calculator — Perquisite Value at Exercise">
<meta property="og:description" content="Compute the fair market value per share at ESOP exercise — listed, foreign-listed or unlisted (merchant banker) — and the taxable perquisite under Section 17(2)(vi).">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-fmv-calculator">
<meta property="og:image" content="/tools/esop-fmv-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP FMV Calculator — Perquisite Value at Exercise">
<meta name="twitter:description" content="Find the FMV per share at ESOP exercise (listed / foreign / unlisted) and the taxable perquisite under Section 17(2)(vi). Free & instant.">
<meta name="twitter:image" content="/tools/esop-fmv-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP FMV Calculator",
  "description": "ESOP FMV Calculator determines the fair market value per share used for the ESOP perquisite at the date of exercise under Section 17(2)(vi) of the Income-tax Act and Rule 3(8) of the Income-tax Rules. For listed shares it uses the average of the opening and closing price on the exercise date, for foreign-listed shares the closing price converted at the SBI TT buying rate, and for unlisted shares the Category I merchant banker valuation, then computes the taxable perquisite as fair market value less exercise price multiplied by the number of shares exercised.",
  "url": "/tools/esop-fmv-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP FMV Calculator", "item": "/tools/esop-fmv-calculator"}
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
      "name": "What is FMV for ESOP purposes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For ESOPs, fair market value (FMV) is the value of one share on the date the employee exercises the option, determined under Rule 3(8) of the Income-tax Rules. It is the reference value used to compute the taxable perquisite under Section 17(2)(vi): perquisite per share equals FMV minus the exercise price. The FMV also becomes the cost of acquisition for the later capital gains calculation when the shares are eventually sold."
      }
    },
    {
      "@type": "Question",
      "name": "How is ESOP FMV determined for listed shares?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For shares listed on a recognised Indian stock exchange, the FMV is the average of the opening price and the closing price of the share on that exchange on the date of exercise. If the share is not traded on the exercise date, the average of the opening and closing prices on the immediately preceding trading day is used. Where the share is listed on more than one exchange, the exchange with the highest trading volume on that date is taken."
      }
    },
    {
      "@type": "Question",
      "name": "How is ESOP FMV determined for unlisted shares?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For unlisted shares, including startups and private companies, the FMV must be determined by a Category I Merchant Banker registered with SEBI, as specified in Rule 3(8). The valuation must be as on a specified date, which is the date of exercise or any date not more than 180 days before the exercise date. If no valuation exists within that 180-day window, a fresh merchant banker valuation must be obtained before the exercise is processed."
      }
    },
    {
      "@type": "Question",
      "name": "How is the taxable ESOP perquisite calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The taxable perquisite at exercise equals the fair market value on the exercise date minus the exercise price actually paid, multiplied by the number of shares exercised. For example, with an FMV of 400 and an exercise price of 50 on 2,000 shares, the perquisite is (400 minus 50) times 2,000, which is 7,00,000. This amount is added to salary income and taxed at the employee's slab rate, with the employer deducting TDS under Section 192."
      }
    },
    {
      "@type": "Question",
      "name": "What is the 180-day rule for unlisted ESOP valuation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For unlisted shares, the merchant banker valuation used for the perquisite must be on a specified date that is the exercise date or a date not more than 180 days before it. A valuation older than 180 days at the time of exercise cannot be relied upon, so a fresh certificate is required. This keeps the FMV reasonably current and is a common point the Income Tax Department checks when scrutinising ESOP perquisite computations."
      }
    },
    {
      "@type": "Question",
      "name": "How is FMV computed for foreign-listed shares like a NASDAQ parent?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Where the ESOP is over shares of a foreign parent listed abroad, the FMV is generally the closing price on the foreign stock exchange on the exercise date, converted into Indian Rupees at the State Bank of India telegraphic transfer buying rate as on that date. This is common for Indian employees of multinationals whose options are over the overseas parent's listed stock, and the converted figure then drives the perquisite computation."
      }
    },
    {
      "@type": "Question",
      "name": "When is ESOP FMV measured — grant, vesting or exercise?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For the perquisite tax, FMV is measured on the date of exercise, not grant or vesting. The perquisite arises when the option is exercised and shares are allotted, and it is the FMV on that date, less the exercise price, that is taxed as salary. A separate grant-date fair value is used for accounting under Ind AS 102, but that is for the company's expense, not the employee's perquisite tax."
      }
    },
    {
      "@type": "Question",
      "name": "Can startup employees defer the ESOP perquisite tax?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Employees of eligible startups recognised by the DPIIT and holding an Inter-Ministerial Board certificate under Section 80-IAC can defer the perquisite TDS. The tax is deferred until the earliest of sale of the shares, cessation of employment, or 48 months from the end of the assessment year in which the shares were allotted. The FMV and perquisite are still computed at exercise, but the tax payment is postponed."
      }
    },
    {
      "@type": "Question",
      "name": "Is FMV the same as the price for capital gains later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The FMV on the exercise date, on which perquisite tax was paid, becomes the cost of acquisition for capital gains when the shares are later sold. Capital gain equals sale price minus that FMV. This two-stage design ensures the same value is not taxed twice: the gain up to FMV is taxed as a salary perquisite at exercise, and only the further appreciation above FMV is taxed as capital gains at sale."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ESOP FMV Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting ESOP FMV Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the fair market value per share at exercise for listed, foreign-listed and unlisted shares and the resulting taxable perquisite under Section 17(2)(vi). For unlisted shares the actual FMV must come from a SEBI Category I merchant banker valuation, which this tool helps you apply."
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
        .form-group { display: none; }
        .form-group.show { display: block; }
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
        <a href="#what-is">What Is ESOP FMV</a>
        <a href="#rules">FMV Rules</a>
        <a href="#perquisite">Perquisite</a>
        <a href="#example">Examples</a>
        <a href="#defer">Startup Deferral</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP FMV Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP FMV Calculator —<span>Perquisite Value at Exercise</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need a merchant banker FMV? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20FMV%20Calculator%20and%20need%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20FMV%20valuation%20/%20perquisite%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20FMV%20Calculator%20and%20would%20like%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%20/%20foreign%20parent%29%3A%0A-%20Number%20of%20options%20exercised%3A%0A-%20Exercise%20price%3A%0A-%20DPIIT%20/%2080-IAC%20startup%20%28yes/no%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Work out the <strong>fair market value (FMV) per share</strong> used for your ESOP perquisite at <strong>exercise</strong>, then the <strong>taxable perquisite</strong> under <strong>Section 17(2)(vi)</strong>. Pick your share type — <strong>listed</strong> (average of open & close on the exercise date), <strong>foreign-listed</strong> (closing price × SBI TT rate), or <strong>unlisted</strong> (SEBI Category-I merchant banker FMV, valuation ≤ 180 days old). Perquisite = <strong>(FMV − exercise price) × shares</strong>. This sets the value; for the tax on it use the perquisite-tax calculator.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate ESOP FMV & Perquisite</h2>
            <p class="calc-sub">Choose how the shares are listed — the right inputs appear below.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or apply FMV − exercise price × shares manually using the rules below.
                </div>
            </noscript>

            <label class="q-label">Share type</label>
            <div class="toggle-group" id="typeToggle">
                <button type="button" class="toggle-btn active" data-type="listed" onclick="pickType(this)">Listed (India)</button>
                <button type="button" class="toggle-btn" data-type="foreign" onclick="pickType(this)">Foreign-listed</button>
                <button type="button" class="toggle-btn" data-type="unlisted" onclick="pickType(this)">Unlisted</button>
            </div>

            <div class="field-group-title">FMV inputs</div>
            <div class="calc-row">
                <div class="form-group show" data-for="listed" id="g_open">
                    <label for="openPrice">Opening Price on Exercise Date (₹)</label>
                    <input type="text" id="openPrice" placeholder="e.g. 380" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">On the recognised Indian exchange.</div>
                </div>
                <div class="form-group show" data-for="listed" id="g_close">
                    <label for="closePrice">Closing Price on Exercise Date (₹)</label>
                    <input type="text" id="closePrice" placeholder="e.g. 420" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">FMV = average of open & close.</div>
                </div>
                <div class="form-group" data-for="foreign" id="g_fclose">
                    <label for="foreignClose">Foreign Closing Price (per share)</label>
                    <input type="text" id="foreignClose" placeholder="e.g. 25" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">On the foreign exchange, in foreign currency.</div>
                </div>
                <div class="form-group" data-for="foreign" id="g_ttr">
                    <label for="ttRate">SBI TT Buying Rate (₹ per unit)</label>
                    <input type="text" id="ttRate" placeholder="e.g. 86.50" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">On the exercise date.</div>
                </div>
                <div class="form-group" data-for="unlisted" id="g_mb">
                    <label for="mbFmv">Merchant Banker FMV per Share (₹)</label>
                    <input type="text" id="mbFmv" placeholder="e.g. 400" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">SEBI Cat-I valuation, ≤ 180 days old.</div>
                </div>
                <div class="form-group" data-for="unlisted" id="g_spacer"></div>
            </div>

            <div class="field-group-title">Your option</div>
            <div class="calc-row">
                <div class="form-group show" data-for="all" id="g_ex">
                    <label for="exercisePrice">Exercise Price per Share (₹)</label>
                    <input type="text" id="exercisePrice" placeholder="e.g. 50" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">The amount you actually pay per share.</div>
                </div>
                <div class="form-group show" data-for="all" id="g_sh">
                    <label for="shares">Number of Shares Exercised</label>
                    <input type="text" id="shares" placeholder="e.g. 2000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Vested options being exercised now.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate FMV & Perquisite</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">FMV per Share</div>
                        <div class="result-value" id="resFmv">—</div>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">Taxable Perquisite</div>
                        <div class="result-value" id="resPerq">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need this FMV certified and the perquisite filed?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant arranges the SEBI Cat-I merchant banker valuation, computes the perquisite, and handles TDS and ESOP compliance end to end.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20FMV%20Calculator%20and%20need%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20FMV%20valuation%20/%20perquisite%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20FMV%20Calculator%20and%20would%20like%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%20/%20foreign%20parent%29%3A%0A-%20Number%20of%20options%20exercised%3A%0A-%20Exercise%20price%3A%0A-%20DPIIT%20/%2080-IAC%20startup%20%28yes/no%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the ESOP FMV Calculator</h2>
            <ol>
                <li><strong>Pick the share type.</strong> Listed on an Indian exchange, foreign-listed (e.g. a NASDAQ parent), or unlisted (startup / private company).</li>
                <li><strong>Enter the FMV inputs.</strong> Listed needs the opening and closing price on the exercise date; foreign needs the foreign closing price and the SBI TT buying rate; unlisted needs the merchant banker FMV per share.</li>
                <li><strong>Enter your exercise price and number of shares.</strong></li>
                <li><strong>Click Calculate.</strong> You get the FMV per share and the taxable perquisite (FMV − exercise price × shares). For the actual tax, pass this to the perquisite-tax calculator.</li>
            </ol>
            <p>For the tax on the perquisite, use the <a href="/tools/esop-perquisite-tax-calculator">Section 17(2)(vi) perquisite tax calculator</a>; for the gain when you later sell, use the <a href="/tools/capital-gains-calculator">capital gains calculator</a>. For enterprise value rather than per-share FMV, see the <a href="/tools/esop-valuation-calculator">ESOP valuation calculator</a>.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> The FMV here also becomes your <strong>cost of acquisition</strong> for capital gains at sale — so the same value does double duty. Keep the merchant banker certificate or exchange data on record to support it.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Is FMV for ESOPs?</h2>
            <p>When you exercise a stock option, the gap between what the share is worth and what you paid is a benefit from employment — a <strong>perquisite</strong> taxed as salary under <strong>Section 17(2)(vi)</strong>. The "what the share is worth" figure is the <strong>fair market value (FMV)</strong> on the <strong>exercise date</strong>, determined under Rule 3(8) of the Income-tax Rules (carried into the 2026 Rules).</p>
            <p>FMV is measured at <strong>exercise</strong>, not grant or vesting. It drives two things: the perquisite taxed now, and the <strong>cost of acquisition</strong> for capital gains when you eventually sell. This is the two-stage ESOP tax — perquisite at exercise, capital gains at sale — explained in Patron's <a href="/blog/esop-perquisite-tax-exercise-vs-sale">exercise-vs-sale guide</a>.</p>
        </section>

        <section class="content-section" id="rules">
            <h2>How FMV Is Determined</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Share type</th><th>FMV rule (on exercise date)</th></tr>
                </thead>
                <tbody>
                    <tr><td>Listed (one Indian exchange)</td><td>Average of opening and closing price on the exercise date; if not traded, the immediately preceding trading day.</td></tr>
                    <tr><td>Listed (multiple exchanges)</td><td>Average of open & close on the exchange with the highest trading volume that day.</td></tr>
                    <tr><td>Foreign-listed (e.g. NASDAQ parent)</td><td>Closing price on the foreign exchange, converted at the SBI TT buying rate on the exercise date.</td></tr>
                    <tr><td>Unlisted (startup / private)</td><td>FMV by a SEBI Category-I Merchant Banker, on a date not more than 180 days before exercise.</td></tr>
                </tbody>
            </table>
            <p>The unlisted route is governed by Rule 3(8) read with the <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> merchant-banker framework; valuations are usually done on DCF or market-multiple methods (Black-Scholes/binomial are not used for this tax FMV). The charge itself sits in Section 17(2)(vi) of the Act administered via the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax portal</a>. See Patron's <a href="/blog/perquisite-valuation-rules-2026">perquisite valuation rules 2026</a> for the updated position.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with ESOP FMV & Perquisite Compliance?</h3>
            <p>Patron Accounting LLP supports startups and employees valuing ESOPs for perquisite tax at exercise — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20FMV%20Calculator%20and%20need%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20FMV%20valuation%20/%20perquisite%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20FMV%20Calculator%20and%20would%20like%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%20/%20foreign%20parent%29%3A%0A-%20Number%20of%20options%20exercised%3A%0A-%20Exercise%20price%3A%0A-%20DPIIT%20/%2080-IAC%20startup%20%28yes/no%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="perquisite">
            <h2>From FMV to Taxable Perquisite</h2>
            <div class="formula-box">
                <span class="label">Perquisite per share</span> = FMV on exercise date − Exercise price<br>
                <span class="label">Total perquisite</span> = (FMV − Exercise price) × Number of shares
            </div>
            <p>The total perquisite is added to your salary income for the year of exercise and taxed at your slab rate, with the employer deducting <strong>TDS under Section 192</strong>. Worked example: FMV ₹400, exercise price ₹50, 2,000 shares → perquisite = (400 − 50) × 2,000 = <strong>₹7,00,000</strong>, added to salary. No cash is received at this point — the tax arises purely on exercise.</p>
            <p>For the slab-rate tax computation itself, use the <a href="/tools/esop-perquisite-tax-calculator">perquisite tax calculator</a>; the underlying law is summarised in Patron's <a href="/blog/esop-perquisite-tax-section-17">Section 17 perquisite guide</a>.</p>
        </section>

        <section class="content-section" id="defer">
            <h2>Startup Deferral (Section 80-IAC)</h2>
            <p>Employees of <strong>DPIIT-recognised eligible startups</strong> holding an Inter-Ministerial Board certificate under <strong>Section 80-IAC</strong> can defer the perquisite TDS. The tax is deferred to the earliest of: sale of the shares, cessation of employment, or 48 months from the end of the assessment year in which the shares were allotted.</p>
            <p>The FMV and perquisite are still computed at exercise as above — only the <strong>payment</strong> of tax is postponed. See Patron's note on <a href="/blog/section-80-iac-esop-deferment-startup">Section 80-IAC ESOP deferment</a>, and for filing the resulting income see <a href="/itr-for-esop-employees">ITR filing for ESOP employees</a>.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> Deferral applies only to eligible 80-IAC startups. For everyone else, TDS is due at exercise even though no shares have been sold — plan liquidity for the tax accordingly.</p>
            </div>
        </section>

        <section class="content-section" id="example">
            <h2>Worked Examples by Share Type</h2>
            <p>The same option — exercise price ₹50, 2,000 shares — produces different FMVs depending on how the shares are held:</p>
            <ul>
                <li><strong>Listed (India):</strong> if the share opens at ₹380 and closes at ₹420 on the exercise date, FMV = (380 + 420) ÷ 2 = <strong>₹400</strong>. Perquisite = (400 − 50) × 2,000 = <strong>₹7,00,000</strong>.</li>
                <li><strong>Foreign-listed:</strong> if a NASDAQ parent's share closes at $25 and the <a href="https://sbi.co.in/" target="_blank" rel="noopener">SBI</a> TT buying rate is ₹86.50, FMV = 25 × 86.50 = <strong>₹2,162.50</strong> per share.</li>
                <li><strong>Unlisted:</strong> if a SEBI Category-I merchant banker certifies ₹400 per share (valuation ≤ 180 days old), FMV = <strong>₹400</strong> and the perquisite mirrors the listed example.</li>
            </ul>
            <p>In each case the FMV less the exercise price, times the shares, is added to salary and taxed at slab rates, with the framework set out by the <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> and the underlying valuation standards guided by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. The FMV also becomes your cost base for the eventual capital-gains computation at sale.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is FMV for ESOP purposes?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For ESOPs, fair market value (FMV) is the value of one share on the date the employee exercises the option, determined under Rule 3(8) of the Income-tax Rules. It is the reference value used to compute the taxable perquisite under Section 17(2)(vi): perquisite per share equals FMV minus the exercise price. The FMV also becomes the cost of acquisition for the later capital gains calculation when the shares are eventually sold.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is ESOP FMV determined for listed shares?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For shares listed on a recognised Indian stock exchange, the FMV is the average of the opening price and the closing price of the share on that exchange on the date of exercise. If the share is not traded on the exercise date, the average of the opening and closing prices on the immediately preceding trading day is used. Where the share is listed on more than one exchange, the exchange with the highest trading volume on that date is taken.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is ESOP FMV determined for unlisted shares?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For unlisted shares, including startups and private companies, the FMV must be determined by a Category I Merchant Banker registered with SEBI, as specified in Rule 3(8). The valuation must be as on a specified date, which is the date of exercise or any date not more than 180 days before the exercise date. If no valuation exists within that 180-day window, a fresh merchant banker valuation must be obtained before the exercise is processed.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is the taxable ESOP perquisite calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The taxable perquisite at exercise equals the fair market value on the exercise date minus the exercise price actually paid, multiplied by the number of shares exercised. For example, with an FMV of 400 and an exercise price of 50 on 2,000 shares, the perquisite is (400 minus 50) times 2,000, which is 7,00,000. This amount is added to salary income and taxed at the employee's slab rate, with the employer deducting TDS under Section 192.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the 180-day rule for unlisted ESOP valuation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For unlisted shares, the merchant banker valuation used for the perquisite must be on a specified date that is the exercise date or a date not more than 180 days before it. A valuation older than 180 days at the time of exercise cannot be relied upon, so a fresh certificate is required. This keeps the FMV reasonably current and is a common point the Income Tax Department checks when scrutinising ESOP perquisite computations.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is FMV computed for foreign-listed shares like a NASDAQ parent?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Where the ESOP is over shares of a foreign parent listed abroad, the FMV is generally the closing price on the foreign stock exchange on the exercise date, converted into Indian Rupees at the State Bank of India telegraphic transfer buying rate as on that date. This is common for Indian employees of multinationals whose options are over the overseas parent's listed stock, and the converted figure then drives the perquisite computation.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When is ESOP FMV measured — grant, vesting or exercise?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For the perquisite tax, FMV is measured on the date of exercise, not grant or vesting. The perquisite arises when the option is exercised and shares are allotted, and it is the FMV on that date, less the exercise price, that is taxed as salary. A separate grant-date fair value is used for accounting under Ind AS 102, but that is for the company's expense, not the employee's perquisite tax.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can startup employees defer the ESOP perquisite tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Employees of eligible startups recognised by the DPIIT and holding an Inter-Ministerial Board certificate under Section 80-IAC can defer the perquisite TDS. The tax is deferred until the earliest of sale of the shares, cessation of employment, or 48 months from the end of the assessment year in which the shares were allotted. The FMV and perquisite are still computed at exercise, but the tax payment is postponed.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is FMV the same as the price for capital gains later?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The FMV on the exercise date, on which perquisite tax was paid, becomes the cost of acquisition for capital gains when the shares are later sold. Capital gain equals sale price minus that FMV. This two-stage design ensures the same value is not taxed twice: the gain up to FMV is taxed as a salary perquisite at exercise, and only the further appreciation above FMV is taxed as capital gains at sale.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the ESOP FMV Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting ESOP FMV Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the fair market value per share at exercise for listed, foreign-listed and unlisted shares and the resulting taxable perquisite under Section 17(2)(vi). For unlisted shares the actual FMV must come from a SEBI Category I merchant banker valuation, which this tool helps you apply.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>ESOP FMV & Compliance</h3>
            <p>SEBI Cat-I merchant banker valuations, perquisite computation, TDS and ESOP compliance — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20FMV%20Calculator%20and%20need%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20FMV%20valuation%20/%20perquisite%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20FMV%20Calculator%20and%20would%20like%20help%20with%20ESOP%20FMV%20valuation%20and%20perquisite%20compliance.%0A%0AMy%20details%3A%0A-%20Company%20%28listed%20/%20unlisted%20/%20foreign%20parent%29%3A%0A-%20Number%20of%20options%20exercised%3A%0A-%20Exercise%20price%3A%0A-%20DPIIT%20/%2080-IAC%20startup%20%28yes/no%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">Perquisite Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-valuation-calculator" class="sidebar-link">ESOP Valuation Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-tax-calculator" class="sidebar-link">ESOP Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-cost-to-company-calculator" class="sidebar-link">ESOP Cost-to-Company <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
            <a href="/esop-services" class="sidebar-link">ESOP Services <span class="arrow">→</span></a>
            <a href="/itr-for-esop-employees" class="sidebar-link">ITR for ESOP Employees <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-perquisite-tax-section-17" class="sidebar-link">ESOP Perquisite Tax (S.17) <span class="arrow">→</span></a>
            <a href="/blog/esop-perquisite-tax-exercise-vs-sale" class="sidebar-link">Exercise vs Sale Tax <span class="arrow">→</span></a>
            <a href="/blog/esop-capital-gains-tax-india" class="sidebar-link">ESOP Capital Gains <span class="arrow">→</span></a>
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
    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }
    function fmtINR2(n){ return '₹' + n.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }); }

    function showFields(){
        document.querySelectorAll('.form-group[data-for]').forEach(function(g){
            var f = g.dataset.for;
            if (f === 'all' || f === shareType) g.classList.add('show'); else g.classList.remove('show');
        });
    }
    function pickType(btn){
        shareType = btn.dataset.type;
        document.querySelectorAll('#typeToggle .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        showFields();
        document.getElementById('resultSection').classList.remove('visible');
    }

    function calculate(){
        var fmv = 0, basis = '';
        if (shareType === 'listed'){
            var o = val('openPrice'), c = val('closePrice');
            if (o <= 0 || c <= 0){ alert('Please enter the opening and closing price on the exercise date.'); return; }
            fmv = (o + c) / 2;
            basis = 'Average of open (' + fmtINR2(o) + ') and close (' + fmtINR2(c) + ')';
        } else if (shareType === 'foreign'){
            var fc = val('foreignClose'), tt = val('ttRate');
            if (fc <= 0 || tt <= 0){ alert('Please enter the foreign closing price and the SBI TT buying rate.'); return; }
            fmv = fc * tt;
            basis = 'Foreign close (' + fc.toLocaleString('en-IN', {maximumFractionDigits:2}) + ') × SBI TT rate (' + fmtINR2(tt) + ')';
        } else {
            var mb = val('mbFmv');
            if (mb <= 0){ alert('Please enter the merchant banker FMV per share.'); return; }
            fmv = mb;
            basis = 'SEBI Category-I merchant banker valuation';
        }

        var ex = val('exercisePrice'), sh = val('shares');
        if (sh <= 0){ alert('Please enter the number of shares exercised.'); return; }

        var perqPerShare = Math.max(0, fmv - ex);
        var totalPerq = perqPerShare * sh;

        document.getElementById('resFmv').textContent = fmtINR2(fmv);
        document.getElementById('resPerq').textContent = fmtINR(totalPerq);

        var rows = '';
        rows += '<div class="breakdown-row"><span class="breakdown-label">FMV per share</span><span class="breakdown-value">' + fmtINR2(fmv) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Basis</span><span class="breakdown-value" style="font-size:12px;">' + basis + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Less: exercise price per share</span><span class="breakdown-value">− ' + fmtINR2(ex) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Perquisite per share</span><span class="breakdown-value">' + fmtINR2(perqPerShare) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">× Shares exercised</span><span class="breakdown-value">' + sh.toLocaleString('en-IN') + '</span></div>';
        rows += '<div class="breakdown-row total"><span class="breakdown-label">Taxable perquisite (added to salary)</span><span class="breakdown-value">' + fmtINR(totalPerq) + '</span></div>';
        if (fmv <= ex){
            rows += '<div class="breakdown-row"><span class="breakdown-label" style="color:var(--accent);">Note</span><span class="breakdown-value" style="color:var(--accent);">FMV ≤ exercise price → no perquisite</span></div>';
        }
        document.getElementById('breakdownSection').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        ['openPrice','closePrice','foreignClose','ttRate','mbFmv','exercisePrice','shares'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['openPrice','closePrice','foreignClose','ttRate','mbFmv','exercisePrice','shares'].forEach(function(id){
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

    showFields();
</script>
@endsection
