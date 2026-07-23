@extends('layouts.app')
@section('meta')
<title>ESOP vs RSU | Tax, Capital Gains & Net In-Hand Compared</title>
<meta name="description" content="ESOP vs RSU comparison: perquisite tax, capital gains and net in-hand side by side, weighing ESOP exercise cost vs RSU free vesting at India rates today. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-vs-rsu-comparison">

<meta property="og:title" content="ESOP vs RSU Comparison — Tax & Net In-Hand 2026">
<meta property="og:description" content="Compare ESOPs and RSUs side by side: exercise cost, perquisite tax, capital gains and net in-hand, using India's post-July-2024 rates.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-vs-rsu-comparison">
<meta property="og:image" content="/tools/esop-vs-rsu-comparison-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP vs RSU Comparison — Tax & Net In-Hand 2026">
<meta name="twitter:description" content="Compare ESOPs and RSUs side by side: exercise cost, perquisite tax, capital gains and net in-hand. Free & instant.">
<meta name="twitter:image" content="/tools/esop-vs-rsu-comparison-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP vs RSU Comparison",
  "description": "ESOP vs RSU Comparison computes, side by side, the tax and net outcome of an employee stock option plan versus restricted stock units in India. For an ESOP it applies the exercise price and taxes the gap between the fair market value at exercise and the exercise price as a salary perquisite; for an RSU there is no exercise cost and the full fair market value at vesting is the perquisite. It then computes the capital gains on sale using the perquisite-date fair market value as cost, applies the post 23 July 2024 listed and unlisted rates, and shows the perquisite tax, capital gains tax, total tax and net in-hand for each instrument.",
  "url": "/tools/esop-vs-rsu-comparison",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP vs RSU Comparison", "item": "/tools/esop-vs-rsu-comparison"}
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
      "name": "What is the difference between an ESOP and an RSU?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An ESOP gives an employee the right to buy shares at a fixed exercise or strike price after vesting, so the employee benefits only if the share value is above that price and must pay the exercise cost. An RSU is a unit that converts into actual shares for free once vesting conditions are met, with no exercise price. So an ESOP carries leverage and an upfront cost at exercise, while an RSU behaves more like a deferred bonus paid in stock that always has some value."
      }
    },
    {
      "@type": "Question",
      "name": "How are ESOPs and RSUs taxed in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Both are taxed in two stages. At the first stage the perquisite is taxed as salary: for an ESOP it is the fair market value at exercise minus the exercise price, times the shares; for an RSU it is the full fair market value at vesting times the shares, since there is no exercise price. At the second stage, on sale, the gain over the perquisite-date fair market value is taxed as capital gains. The employer deducts TDS on the perquisite and reports it in Form 16."
      }
    },
    {
      "@type": "Question",
      "name": "Why is the RSU perquisite usually higher than the ESOP perquisite?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Because an RSU has no exercise price to offset. The entire fair market value of the shares on the vesting date is treated as salary income. With an ESOP, only the gap between the fair market value and the exercise price is the perquisite, so the exercise price reduces the taxable amount. For the same number of shares and the same market value, the RSU perquisite, and the tax on it, is therefore typically larger than the ESOP perquisite."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of acquisition for capital gains on ESOPs and RSUs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For both instruments the cost of acquisition for capital gains is the fair market value used to compute the perquisite — the fair market value at exercise for ESOPs and at vesting for RSUs. That value was already taxed as salary, so only the appreciation above it is taxed again as capital gains on sale. Using this cost ensures the same gain is not taxed twice across the two stages."
      }
    },
    {
      "@type": "Question",
      "name": "What capital gains rates apply when the shares are sold?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For transfers on or after 23 July 2024, listed equity with STT paid is taxed at 20 percent short term if held twelve months or less, and 12.5 percent long term above the 1.25 lakh annual exemption if held more than twelve months. Unlisted shares are taxed at slab rate short term if held twenty-four months or less, and 12.5 percent long term without indexation if held more than twenty-four months. Health and education cess of 4 percent applies. These rules are identical for ESOP and RSU shares."
      }
    },
    {
      "@type": "Question",
      "name": "Which is better, an ESOP or an RSU?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Neither is universally better; they suit different situations. ESOPs offer leverage — if the share price rises well above the exercise price the upside is amplified — but they cost cash to exercise and can become worthless if the price stays below the strike. RSUs always retain value as long as the share price is positive, behaving like a deferred stock bonus, but the full vesting value is taxed as salary upfront. Early-stage startups often use ESOPs; larger, stable companies often use RSUs."
      }
    },
    {
      "@type": "Question",
      "name": "Can ESOP perquisite tax be deferred but not RSU tax?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Section 192(1C) deferral applies to the ESOP perquisite for employees of eligible startups certified under Section 80-IAC, letting them postpone the TDS until the earliest of a set period, sale, or leaving. This deferral is framed around ESOP exercise. RSUs, which vest into shares automatically, are generally taxed at vesting in the normal way. Whether a specific RSU arrangement can access any deferral should be confirmed with a professional, as facts vary."
      }
    },
    {
      "@type": "Question",
      "name": "How are foreign RSUs from a US parent taxed for an Indian employee?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For an Indian resident, RSUs from a foreign parent are taxed in India at vesting as a salary perquisite on the fair market value, and again as capital gains on sale, using the vesting fair market value as cost. Foreign shares are treated like unlisted shares for the holding period. Any foreign tax paid may be relieved under the relevant Double Taxation Avoidance Agreement by filing Form 67, and the holdings must be disclosed in Schedule FA of the return."
      }
    },
    {
      "@type": "Question",
      "name": "Does this tool compute exact tax?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It gives an indicative comparison. It applies the slab rate you enter to the perquisite and the statutory capital gains rates to the sale gain, with cess, for both instruments. It does not model surcharge bands, other income, loss set-offs, the startup deferral timing or currency conversion for foreign awards. Use it to understand the relative difference between ESOPs and RSUs, and confirm the exact figures with a professional before acting."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ESOP vs RSU Comparison tool free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting ESOP vs RSU Comparison is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It shows the exercise cost, perquisite tax, capital gains tax, total tax and net in-hand for an ESOP and an RSU side by side, using India's current post July 2024 capital gains rates. It is an indicative planning tool; confirm the final numbers with a professional before relying on them."
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
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; }
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
        .compare-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
        @media (min-width: 560px) { .compare-grid { grid-template-columns: 1fr 1fr; } }
        .compare-col { border: 2px solid var(--border); border-radius: var(--radius-lg); overflow: hidden; }
        .compare-col.esop { border-color: var(--primary); }
        .compare-col.rsu { border-color: var(--accent); }
        .compare-head { padding: 14px 18px; font-weight: 700; font-size: 16px; color: #fff; text-align: center; }
        .compare-col.esop .compare-head { background: var(--primary); }
        .compare-col.rsu .compare-head { background: var(--accent); color: var(--primary-dark); }
        .compare-body { padding: 8px 18px 16px; }
        .cmp-row { display: flex; justify-content: space-between; align-items: baseline; padding: 8px 0; font-size: 14px; gap: 10px; border-bottom: 1px dashed var(--border); }
        .cmp-row:last-child { border-bottom: none; }
        .cmp-row.net { border-top: 2px solid var(--border); margin-top: 4px; padding-top: 10px; font-weight: 700; }
        .cmp-label { color: var(--text-secondary); }
        .cmp-val { font-family: var(--font-mono); font-weight: 700; color: var(--text); text-align: right; word-break: break-word; }
        .cmp-row.net .cmp-val { color: var(--primary-dark); font-size: 16px; }
        .verdict-line { text-align: center; margin-top: 18px; padding: 14px; background: var(--surface-alt); border-radius: var(--radius); font-size: 14px; color: var(--text-secondary); }
        .verdict-line strong { color: var(--primary); }
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
        <a href="#calculator">Comparison</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">ESOP vs RSU</a>
        <a href="#tax">Tax Treatment</a>
        <a href="#example">Example</a>
        <a href="#choose">Which to Pick</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP vs RSU Comparison
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP vs RSU Comparison — <span>Tax & Net In-Hand 2026</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">ESOP or RSU questions? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20need%20help%20with%20equity%20compensation%20planning%20and%20tax.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vs%20RSU%20/%20equity%20compensation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20would%20like%20help%20with%20equity%20compensation%20planning%20and%20tax.%0A%0AMy%20details%3A%0A-%20Instrument%20%28ESOP%20/%20RSU%20/%20both%29%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Number%20of%20shares%20%26%20prices%3A%0A-%20Help%20needed%20%28plan%20design%20/%20TDS%20/%20ITR%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Compare an <strong>ESOP</strong> (buy shares at an exercise price) with an <strong>RSU</strong> (free shares on vesting) side by side. Enter the grant, exercise price, FMV at the perquisite date, sale price, listed/unlisted and holding period; the tool shows <strong>exercise cost, perquisite tax, capital gains tax, total tax and net in-hand</strong> for each. Key difference: the RSU perquisite is the <strong>full FMV at vesting</strong> (no strike to offset), so it's usually higher; capital-gains rules are identical for both (post-23-July-2024 rates).</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Compare ESOP vs RSU</h2>
            <p class="calc-sub">Same grant modelled both ways. Capital gains use rates for transfers on/after 23 July 2024. Indicative.</p>
            <noscript>
                <div class="noscript-box">
                    This tool requires JavaScript. Please enable it, or compute each manually: ESOP perquisite = (FMV − exercise price) × shares; RSU perquisite = FMV × shares; capital gain = (sale − FMV) × shares.
                </div>
            </noscript>

            <div class="field-group-title">Grant & prices (per share)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="shares">Number of Shares</label>
                    <input type="text" id="shares" placeholder="e.g. 1000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Shares granted / vesting.</div>
                </div>
                <div class="form-group">
                    <label for="exercise">ESOP Exercise Price (₹)</label>
                    <input type="text" id="exercise" placeholder="e.g. 100" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Strike price (ESOP only; RSU = 0).</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="fmv">FMV at Perquisite Date (₹)</label>
                    <input type="text" id="fmv" placeholder="e.g. 400" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">FMV at exercise (ESOP) / vesting (RSU).</div>
                </div>
                <div class="form-group">
                    <label for="sale">Sale Price (₹)</label>
                    <input type="text" id="sale" placeholder="e.g. 700" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Expected sale price per share.</div>
                </div>
            </div>

            <div class="field-group-title">Tax basis</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="slab">Your Slab Rate % <span style="font-weight:400;">(incl. cess)</span></label>
                    <input type="text" id="slab" placeholder="e.g. 31.2" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Applied to the perquisite (salary).</div>
                </div>
                <div class="form-group">
                    <label for="holding">Holding Period (months)</label>
                    <input type="text" id="holding" placeholder="e.g. 18" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">From perquisite date to sale.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="shareType">Share Type</label>
                    <select id="shareType">
                        <option value="listed">Listed (STT paid)</option>
                        <option value="unlisted">Unlisted / Foreign</option>
                    </select>
                    <div class="field-hint">Sets capital gains rate & holding threshold.</div>
                </div>
                <div class="form-group"></div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Compare Side by Side</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="compare-grid">
                    <div class="compare-col esop">
                        <div class="compare-head">ESOP</div>
                        <div class="compare-body" id="esopBody"></div>
                    </div>
                    <div class="compare-col rsu">
                        <div class="compare-head">RSU</div>
                        <div class="compare-body" id="rsuBody"></div>
                    </div>
                </div>
                <div class="verdict-line" id="verdictLine"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want this planned and filed correctly?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant designs the equity-compensation plan, runs the perquisite TDS and capital gains, and files ITRs for ESOP and RSU holders — including foreign awards.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20need%20help%20with%20equity%20compensation%20planning%20and%20tax.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vs%20RSU%20/%20equity%20compensation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20would%20like%20help%20with%20equity%20compensation%20planning%20and%20tax.%0A%0AMy%20details%3A%0A-%20Instrument%20%28ESOP%20/%20RSU%20/%20both%29%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Number%20of%20shares%20%26%20prices%3A%0A-%20Help%20needed%20%28plan%20design%20/%20TDS%20/%20ITR%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Comparison</h2>
            <ol>
                <li><strong>Enter the shares</strong> and the <strong>ESOP exercise price</strong> (for the RSU side the exercise price is treated as zero).</li>
                <li><strong>Enter the FMV at the perquisite date</strong> — that's FMV at exercise for the ESOP and FMV at vesting for the RSU — and the expected sale price.</li>
                <li><strong>Add your slab rate</strong> (incl. cess) for the perquisite, the <strong>holding period</strong>, and listed/unlisted.</li>
                <li><strong>Click Compare</strong> for exercise cost, perquisite tax, capital gains tax, total tax and net in-hand for each, with a verdict line.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> For the detailed single-instrument maths, use the <a href="/tools/esop-perquisite-tax-calculator">perquisite tax calculator</a> and the <a href="/tools/esop-capital-gains-calculator">capital gains calculator</a>; this tool puts the two instruments next to each other.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>ESOP vs RSU — The Core Difference</h2>
            <p>An <strong>ESOP</strong> gives you the right to <em>buy</em> shares at a fixed <strong>exercise (strike) price</strong> after vesting. You profit only if the share value rises above that price, and you must pay cash to exercise — so it carries <strong>leverage and risk</strong>. An <strong>RSU</strong> converts into actual shares <strong>for free</strong> once vesting conditions are met — no exercise price, so it always has value as long as the share price is positive, behaving like a <strong>deferred stock bonus</strong>.</p>
            <p>Patron's deep-dives compare these from both sides: <a href="/blog/us-rsu-vs-indian-esop-employee-perspective">US RSU vs Indian ESOP</a>, <a href="/blog/esop-vs-sar-vs-phantom-stock">ESOP vs SAR vs phantom stock</a>, and <a href="/blog/india-equity-compensation-foreign-employees">India equity comp for foreign employers</a>.</p>
            <div class="formula-box">
                <span class="label">ESOP perquisite</span> = (FMV − exercise price) × shares<br>
                <span class="label">RSU perquisite</span> = FMV × shares &nbsp;(no exercise price)<br>
                <span class="label">Capital gain (both)</span> = (Sale − FMV) × shares
            </div>
        </section>

        <section class="content-section" id="tax">
            <h2>Two-Stage Tax — Same Frame, Different Stage 1</h2>
            <p>Both are taxed twice, but the <strong>perquisite</strong> differs. For an ESOP the perquisite is only the gap between FMV and the exercise price; for an RSU it's the <strong>full FMV at vesting</strong>, since there's nothing to pay. So for the same shares at the same market value, the <strong>RSU perquisite — and the tax on it — is usually larger</strong>.</p>
            <p>Stage 2 is <strong>identical</strong>: on sale, the gain over the perquisite-date FMV (your cost of acquisition) is capital gains, at the post-23-July-2024 rates. Both stages are administered through the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax e-filing portal</a>, and the concessional listed-equity rates require Securities Transaction Tax to have been paid on a <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a>-regulated exchange.</p>
            <table class="rate-table">
                <thead>
                    <tr><th></th><th>ESOP</th><th>RSU</th></tr>
                </thead>
                <tbody>
                    <tr><td>Cost to acquire</td><td>Exercise price</td><td>Nil (free)</td></tr>
                    <tr><td>Perquisite (salary)</td><td>(FMV − exercise) × shares</td><td>FMV × shares</td></tr>
                    <tr><td>Cost for capital gains</td><td>FMV at exercise</td><td>FMV at vesting</td></tr>
                    <tr><td>Capital gains rules</td><td colspan="2">Identical — listed 20% STCG / 12.5% LTCG (&gt;₹1.25L); unlisted slab / 12.5% no-indexation; + 4% cess</td></tr>
                </tbody>
            </table>
        </section>

        <div class="body-cta">
            <h3>Need Help with Equity Compensation Planning (ESOP / RSU)?</h3>
            <p>Patron Accounting LLP supports founders and employees comparing ESOP and RSU plans and their tax — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20need%20help%20with%20equity%20compensation%20planning%20and%20tax.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vs%20RSU%20/%20equity%20compensation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20would%20like%20help%20with%20equity%20compensation%20planning%20and%20tax.%0A%0AMy%20details%3A%0A-%20Instrument%20%28ESOP%20/%20RSU%20/%20both%29%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Number%20of%20shares%20%26%20prices%3A%0A-%20Help%20needed%20%28plan%20design%20/%20TDS%20/%20ITR%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="example">
            <h2>A Worked Example</h2>
            <p>1,000 shares; ESOP exercise price ₹100; FMV at the perquisite date ₹400; sold later at ₹700; listed shares held 18 months; slab rate 31.2%.</p>
            <ul>
                <li><strong>ESOP perquisite</strong> = (400 − 100) × 1,000 = ₹3,00,000 → tax at 31.2% = ₹93,600. Exercise cost = ₹1,00,000.</li>
                <li><strong>RSU perquisite</strong> = 400 × 1,000 = ₹4,00,000 → tax at 31.2% = ₹1,24,800. Exercise cost = ₹0.</li>
                <li><strong>Capital gain (both)</strong> = (700 − 400) × 1,000 = ₹3,00,000; listed, 18 mo &gt; 12 → LTCG 12.5% above ₹1.25L on ₹1,75,000 = ₹21,875 + 4% cess = ₹22,750.</li>
                <li><strong>Net in-hand</strong> = sale proceeds − exercise cost − perquisite tax − CG tax. ESOP nets more per-rupee-of-tax but needed ₹1,00,000 cash to exercise; the RSU needed no cash but taxed a larger perquisite.</li>
            </ul>
            <p>The tool computes both columns and flags which leaves more net in-hand for your inputs.</p>
        </section>

        <section class="content-section" id="choose">
            <h2>Which Should You Prefer?</h2>
            <ul>
                <li><strong>ESOPs</strong> suit early-stage startups and those who believe the share price will rise well above the strike — leverage amplifies upside, but the cash to exercise is at risk and options can expire worthless below the strike.</li>
                <li><strong>RSUs</strong> suit larger, stable companies and the risk-averse — they always retain value, need no cash, but the full vesting value is taxed as salary upfront.</li>
                <li><strong>Deferral:</strong> the Section 192(1C) startup deferral is framed around ESOP exercise; check eligibility with the <a href="/tools/esop-section-192-1c-eligibility-checker">192(1C) eligibility checker</a>.</li>
                <li><strong>Foreign awards:</strong> US-parent RSUs are taxed in India at vesting and sale, treated like unlisted shares, with Schedule FA disclosure and Form 67 for foreign tax credit. Sale proceeds and cost are converted to rupees using <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> reference rates, with the statutory provisions published at <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">incometaxindia.gov.in</a> and share-based-payment accounting following <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> standards.</li>
            </ul>
            <div class="callout warn">
                <p><strong>Note:</strong> This is indicative — it doesn't model surcharge, other income, loss set-off, deferral timing or currency conversion. Confirm with a professional before deciding.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between an ESOP and an RSU?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">An ESOP gives an employee the right to buy shares at a fixed exercise or strike price after vesting, so the employee benefits only if the share value is above that price and must pay the exercise cost. An RSU is a unit that converts into actual shares for free once vesting conditions are met, with no exercise price. So an ESOP carries leverage and an upfront cost at exercise, while an RSU behaves more like a deferred bonus paid in stock that always has some value.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How are ESOPs and RSUs taxed in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Both are taxed in two stages. At the first stage the perquisite is taxed as salary: for an ESOP it is the fair market value at exercise minus the exercise price, times the shares; for an RSU it is the full fair market value at vesting times the shares, since there is no exercise price. At the second stage, on sale, the gain over the perquisite-date fair market value is taxed as capital gains. The employer deducts TDS on the perquisite and reports it in Form 16.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Why is the RSU perquisite usually higher than the ESOP perquisite?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Because an RSU has no exercise price to offset. The entire fair market value of the shares on the vesting date is treated as salary income. With an ESOP, only the gap between the fair market value and the exercise price is the perquisite, so the exercise price reduces the taxable amount. For the same number of shares and the same market value, the RSU perquisite, and the tax on it, is therefore typically larger than the ESOP perquisite.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the cost of acquisition for capital gains on ESOPs and RSUs?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For both instruments the cost of acquisition for capital gains is the fair market value used to compute the perquisite — the fair market value at exercise for ESOPs and at vesting for RSUs. That value was already taxed as salary, so only the appreciation above it is taxed again as capital gains on sale. Using this cost ensures the same gain is not taxed twice across the two stages.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What capital gains rates apply when the shares are sold?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For transfers on or after 23 July 2024, listed equity with STT paid is taxed at 20 percent short term if held twelve months or less, and 12.5 percent long term above the 1.25 lakh annual exemption if held more than twelve months. Unlisted shares are taxed at slab rate short term if held twenty-four months or less, and 12.5 percent long term without indexation if held more than twenty-four months. Health and education cess of 4 percent applies. These rules are identical for ESOP and RSU shares.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which is better, an ESOP or an RSU?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Neither is universally better; they suit different situations. ESOPs offer leverage — if the share price rises well above the exercise price the upside is amplified — but they cost cash to exercise and can become worthless if the price stays below the strike. RSUs always retain value as long as the share price is positive, behaving like a deferred stock bonus, but the full vesting value is taxed as salary upfront. Early-stage startups often use ESOPs; larger, stable companies often use RSUs.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can ESOP perquisite tax be deferred but not RSU tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Section 192(1C) deferral applies to the ESOP perquisite for employees of eligible startups certified under Section 80-IAC, letting them postpone the TDS until the earliest of a set period, sale, or leaving. This deferral is framed around ESOP exercise. RSUs, which vest into shares automatically, are generally taxed at vesting in the normal way. Whether a specific RSU arrangement can access any deferral should be confirmed with a professional, as facts vary.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How are foreign RSUs from a US parent taxed for an Indian employee?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For an Indian resident, RSUs from a foreign parent are taxed in India at vesting as a salary perquisite on the fair market value, and again as capital gains on sale, using the vesting fair market value as cost. Foreign shares are treated like unlisted shares for the holding period. Any foreign tax paid may be relieved under the relevant Double Taxation Avoidance Agreement by filing Form 67, and the holdings must be disclosed in Schedule FA of the return.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does this tool compute exact tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">It gives an indicative comparison. It applies the slab rate you enter to the perquisite and the statutory capital gains rates to the sale gain, with cess, for both instruments. It does not model surcharge bands, other income, loss set-offs, the startup deferral timing or currency conversion for foreign awards. Use it to understand the relative difference between ESOPs and RSUs, and confirm the exact figures with a professional before acting.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the ESOP vs RSU Comparison tool free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting ESOP vs RSU Comparison is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It shows the exercise cost, perquisite tax, capital gains tax, total tax and net in-hand for an ESOP and an RSU side by side, using India's current post July 2024 capital gains rates. It is an indicative planning tool; confirm the final numbers with a professional before relying on them.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Equity Comp Planning</h3>
            <p>ESOP / RSU plan design, perquisite TDS, capital-gains and ITR filing including foreign awards — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20need%20help%20with%20equity%20compensation%20planning%20and%20tax.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vs%20RSU%20/%20equity%20compensation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20vs%20RSU%20Comparison%20and%20would%20like%20help%20with%20equity%20compensation%20planning%20and%20tax.%0A%0AMy%20details%3A%0A-%20Instrument%20%28ESOP%20/%20RSU%20/%20both%29%3A%0A-%20Listed%20/%20unlisted%20/%20foreign%20shares%3A%0A-%20Number%20of%20shares%20%26%20prices%3A%0A-%20Help%20needed%20%28plan%20design%20/%20TDS%20/%20ITR%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">Perquisite Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-capital-gains-calculator" class="sidebar-link">ESOP Capital Gains <span class="arrow">→</span></a>
            <a href="/tools/esop-tax-calculator" class="sidebar-link">ESOP Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-section-192-1c-eligibility-checker" class="sidebar-link">192(1C) Eligibility Checker <span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/esop-scheme-design" class="sidebar-link">ESOP Scheme Design <span class="arrow">→</span></a>
            <a href="/esop-services" class="sidebar-link">ESOP Services <span class="arrow">→</span></a>
            <a href="/itr-for-esop-employees" class="sidebar-link">ITR for ESOP Employees <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/us-rsu-vs-indian-esop-employee-perspective" class="sidebar-link">US RSU vs Indian ESOP <span class="arrow">→</span></a>
            <a href="/blog/esop-vs-sar-vs-phantom-stock" class="sidebar-link">ESOP vs SAR vs Phantom <span class="arrow">→</span></a>
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

    var LTCG_EXEMPTION = 125000;
    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }

    function capGainsTax(gain, shareType, holding, otherLtcgUsed){
        if (gain <= 0) return { tax: 0, label: 'No gain' };
        var threshold = (shareType === 'listed') ? 12 : 24;
        var isLong = holding > threshold;
        var tax = 0, label = '';
        if (shareType === 'listed'){
            if (isLong){
                var taxable = Math.max(0, gain - LTCG_EXEMPTION);
                tax = taxable * 0.125 * 1.04;
                label = 'LTCG 12.5% (>₹1.25L)';
            } else { tax = gain * 0.20 * 1.04; label = 'STCG 20%'; }
        } else {
            if (isLong){ tax = gain * 0.125 * 1.04; label = 'LTCG 12.5%'; }
            else { tax = gain * (val('slab')/100); label = 'STCG slab'; }
        }
        return { tax: tax, label: label, isLong: isLong };
    }

    function computeLeg(isRSU){
        var sh = val('shares'), ex = isRSU ? 0 : val('exercise'), fmv = val('fmv'), sale = val('sale');
        var slab = val('slab'), holding = val('holding'), shareType = document.getElementById('shareType').value;
        var exerciseCost = ex * sh;
        var perq = Math.max(0, (fmv - ex)) * sh;
        var perqTax = perq * slab/100;
        var gain = (sale - fmv) * sh;
        var cg = capGainsTax(gain, shareType, holding);
        var totalTax = perqTax + cg.tax;
        var proceeds = sale * sh;
        var net = proceeds - exerciseCost - totalTax;
        return { exerciseCost:exerciseCost, perq:perq, perqTax:perqTax, gain:gain, cgTax:cg.tax, cgLabel:cg.label, totalTax:totalTax, proceeds:proceeds, net:net };
    }

    function legHtml(r){
        var rows = '';
        rows += '<div class="cmp-row"><span class="cmp-label">Exercise cost</span><span class="cmp-val">' + fmtINR(r.exerciseCost) + '</span></div>';
        rows += '<div class="cmp-row"><span class="cmp-label">Perquisite (salary)</span><span class="cmp-val">' + fmtINR(r.perq) + '</span></div>';
        rows += '<div class="cmp-row"><span class="cmp-label">Perquisite tax</span><span class="cmp-val">' + fmtINR(r.perqTax) + '</span></div>';
        rows += '<div class="cmp-row"><span class="cmp-label">Capital gain</span><span class="cmp-val">' + fmtINR(r.gain) + '</span></div>';
        rows += '<div class="cmp-row"><span class="cmp-label">CG tax (' + r.cgLabel + ')</span><span class="cmp-val">' + fmtINR(r.cgTax) + '</span></div>';
        rows += '<div class="cmp-row"><span class="cmp-label">Total tax</span><span class="cmp-val">' + fmtINR(r.totalTax) + '</span></div>';
        rows += '<div class="cmp-row net"><span class="cmp-label">Net in-hand</span><span class="cmp-val">' + fmtINR(r.net) + '</span></div>';
        return rows;
    }

    function calculate(){
        if (val('shares') <= 0){ alert('Please enter the number of shares.'); return; }
        if (val('fmv') <= 0){ alert('Please enter the FMV at the perquisite date.'); return; }
        if (val('slab') <= 0){ alert('Please enter your slab rate (incl. cess).'); return; }

        var esop = computeLeg(false);
        var rsu = computeLeg(true);
        document.getElementById('esopBody').innerHTML = legHtml(esop);
        document.getElementById('rsuBody').innerHTML = legHtml(rsu);

        var v = document.getElementById('verdictLine');
        var diff = Math.abs(esop.net - rsu.net);
        if (Math.round(esop.net) === Math.round(rsu.net)){
            v.innerHTML = 'Both leave roughly the same net in-hand for these inputs.';
        } else if (esop.net > rsu.net){
            v.innerHTML = 'For these inputs, the <strong>ESOP</strong> leaves about ' + fmtINR(diff) + ' more net in-hand — but it needed ' + fmtINR(esop.exerciseCost) + ' cash to exercise.';
        } else {
            v.innerHTML = 'For these inputs, the <strong>RSU</strong> leaves about ' + fmtINR(diff) + ' more net in-hand, with no exercise cost.';
        }

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        ['shares','exercise','fmv','sale','slab','holding'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('shareType').value = 'listed';
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['shares','exercise','fmv','sale','slab','holding'].forEach(function(id){
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
