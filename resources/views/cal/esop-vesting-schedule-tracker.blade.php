@extends('layouts.app')
@section('meta')
<title>ESOP Vesting Schedule Tracker | Cliff & Next Vest Date</title>
<meta name="description" content="ESOP vesting schedule tracker: build a schedule from grant date, 1-year cliff and term to see options vested to date, next vesting date and % complete. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-vesting-schedule-tracker">

<meta property="og:title" content="ESOP Vesting Tracker — Cliff, Vested & Next Date">
<meta property="og:description" content="Build your ESOP vesting schedule from grant date, cliff and term, and track options vested to date, your next vesting date and percentage complete.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-vesting-schedule-tracker">
<meta property="og:image" content="/tools/esop-vesting-schedule-tracker-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP Vesting Tracker — Cliff, Vested & Next Date">
<meta name="twitter:description" content="Build your ESOP vesting schedule and track options vested to date, next vesting date and percentage complete. Free &amp; instant.">
<meta name="twitter:image" content="/tools/esop-vesting-schedule-tracker-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP Vesting Schedule Tracker",
  "description": "ESOP Vesting Schedule Tracker builds an employee stock option vesting schedule from the grant date, cliff period, total vesting term and vesting frequency, applying the mandatory minimum one-year cliff under Rule 12(6) of the Companies (Share Capital and Debentures) Rules. It generates the tranche-by-tranche schedule, and as of today's date shows the options vested to date, the unvested balance, the percentage vested and the next vesting date, helping employees and founders track where a grant stands at any point in the four-year vesting cycle.",
  "url": "/tools/esop-vesting-schedule-tracker",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP Vesting Schedule Tracker", "item": "/tools/esop-vesting-schedule-tracker"}
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
      "name": "What is an ESOP vesting schedule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An ESOP vesting schedule sets out when, and in what tranches, an employee's stock options become exercisable over time. Until options vest, the employee does not have the right to exercise them, and unvested options usually lapse on leaving. The most common Indian schedule is four years with a one-year cliff: nothing vests for the first year, then a block vests at the cliff and the rest vests in regular tranches over the remaining term."
      }
    },
    {
      "@type": "Question",
      "name": "What is a cliff in ESOP vesting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A cliff is the minimum period an employee must complete before any options vest. In the standard model the cliff is twelve months, at which point a block, usually twenty-five percent of the grant, vests in one go. If the employee leaves before the cliff, no options vest and the entire grant lapses. After the cliff, the remaining options vest gradually, monthly or quarterly, over the rest of the vesting term."
      }
    },
    {
      "@type": "Question",
      "name": "What is the minimum vesting period for ESOPs in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under Rule 12(6) of the Companies (Share Capital and Debentures) Rules, 2014, there must be a minimum vesting period of one year from the date of grant of options. Any provision allowing options to vest sooner than twelve months is not valid. This is why the one-year cliff is effectively mandatory for Indian companies, and schemes are drafted so that no tranche can vest within the first year of the grant."
      }
    },
    {
      "@type": "Question",
      "name": "How is the standard 4-year vesting with a 1-year cliff structured?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In the standard structure nothing vests in the first year. At the twelve-month cliff, twenty-five percent of the options vest at once. The remaining seventy-five percent then vest in equal tranches monthly or quarterly over the next thirty-six months. For example, on a grant of 1,200 options, 300 vest at the one-year cliff and the other 900 vest evenly across the following three years until the grant is fully vested at the end of year four."
      }
    },
    {
      "@type": "Question",
      "name": "How does this tracker calculate options vested to date?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The tracker builds the full tranche schedule from your grant date, cliff, total term and frequency, then compares each tranche's vesting date with today's date. Tranches whose date has passed are counted as vested, and the rest are unvested. Before the cliff date nothing is vested. The result is the number of options vested to date, the unvested balance, the percentage vested and the date of your next vesting tranche."
      }
    },
    {
      "@type": "Question",
      "name": "What happens to unvested options if I leave?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Unvested options generally lapse immediately when you resign or are terminated, so only the options that have already vested are retained. If you leave before completing the cliff, you usually walk away with nothing because no options have vested. Vested options typically remain exercisable only within a limited post-termination window, often thirty to ninety days, after which they too may lapse, so timing the exit and exercise matters."
      }
    },
    {
      "@type": "Question",
      "name": "Does vesting trigger any tax?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Vesting by itself does not create a tax liability; it only makes the options exercisable. Tax arises later at two stages: at exercise the difference between the fair market value and the exercise price is taxed as a salary perquisite, and on a subsequent sale the gain over that fair market value is taxed as capital gains. So a vesting tracker tells you what you can exercise, not what tax you will pay."
      }
    },
    {
      "@type": "Question",
      "name": "What other vesting structures are used?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Besides the four-year, one-year-cliff model, some companies use a three-year schedule at later stages, graded vesting with equal annual or quarterly tranches, and back-weighted vesting where more vests in the later years to strengthen retention. Performance or milestone-based vesting ties some or all of the options to targets such as revenue or funding, and hybrid models combine time and performance conditions. The minimum one-year vesting still applies in all cases."
      }
    },
    {
      "@type": "Question",
      "name": "Is vesting the same as owning the shares?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Vesting only gives you the right to exercise the options; you become a shareholder only after you exercise the vested options by paying the exercise price and the shares are allotted. So a tracker showing vested options is showing what you are entitled to buy, not shares you already own. Ownership, dividend and voting rights begin only after exercise and allotment, subject to any lock-in in the scheme."
      }
    },
    {
      "@type": "Question",
      "name": "Is the ESOP Vesting Schedule Tracker free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting ESOP Vesting Schedule Tracker is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It builds your tranche-by-tranche vesting schedule from the grant date, cliff and term, and shows the options vested to date, the unvested balance, percentage vested and your next vesting date. It is an indicative planning tool; your actual entitlement is governed by your grant letter and the ESOP scheme."
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
        .progress-wrap { margin: 16px 0; }
        .progress-bar { height: 14px; background: var(--surface-alt); border-radius: 8px; overflow: hidden; }
        .progress-fill { height: 100%; background: linear-gradient(90deg, var(--primary), var(--primary-light)); border-radius: 8px; transition: width 0.6s ease; }
        .progress-label { display: flex; justify-content: space-between; font-size: 12px; color: var(--text-muted); margin-top: 6px; }
        .vest-status { display: inline-block; font-size: 12px; font-weight: 700; padding: 3px 12px; border-radius: 12px; margin-top: 8px; }
        .vest-status.cliff { background: #FEF3C7; color: #92400E; }
        .vest-status.vesting { background: #D1FAE5; color: #059669; }
        .vest-status.done { background: #DBEAFE; color: #1E40AF; }
        .schedule-table { width: 100%; border-collapse: collapse; margin-top: 8px; font-size: 13px; }
        .schedule-table thead th { background: var(--primary); color: #fff; padding: 10px 12px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.3px; position: sticky; top: 0; }
        .schedule-table tbody td { padding: 9px 12px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .schedule-table tbody tr.passed td { color: var(--text); }
        .schedule-table tbody tr.passed { background: #F0FDF4; }
        .schedule-table tbody tr.next td { background: #FFFBEB; font-weight: 700; }
        .schedule-scroll { max-height: 360px; overflow-y: auto; border: 1px solid var(--border); border-radius: var(--radius); margin-top: 4px; }
        .tick { color: var(--success); font-weight: 700; }
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
        <a href="#calculator">Tracker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">What It Is</a>
        <a href="#cliff">Cliff &amp; Rule 12</a>
        <a href="#structures">Structures</a>
        <a href="#example">Example</a>
        <a href="#lifecycle">Lifecycle</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP Vesting Schedule Tracker
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP Vesting Tracker — <span>Cliff, Vested & Next Date</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Questions on ESOP vesting? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20need%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vesting%20/%20scheme%20administration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20would%20like%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%0A%0AMy%20details%3A%0A-%20Company%20stage%3A%0A-%20Number%20of%20grantees%3A%0A-%20Vesting%20structure%20%28cliff%20/%20term%20/%20frequency%29%3A%0A-%20Help%20needed%20%28scheme%20drafting%20/%20administration%20/%20cap%20table%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Enter your <strong>grant</strong> (total options, grant date), the <strong>cliff</strong> (min 1 year under Rule 12(6)), total <strong>vesting term</strong> and <strong>frequency</strong>; the tracker builds the tranche-by-tranche <strong>vesting schedule</strong> and shows, as of today: <strong>options vested to date</strong>, the unvested balance, <strong>% vested</strong>, and your <strong>next vesting date</strong>. Standard pattern is 4 years with a 1-year cliff — 25% at the cliff, the rest monthly/quarterly over 3 years. Vesting ≠ ownership and triggers no tax until you exercise.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Track Your ESOP Vesting</h2>
            <p class="calc-sub">As-of date is today. The cliff must be at least 12 months under Rule 12(6).</p>
            <noscript>
                <div class="noscript-box">
                    This tracker requires JavaScript. Please enable JavaScript, or map your grant date forward by the cliff and each vesting interval manually.
                </div>
            </noscript>

            <div class="field-group-title">Your grant</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="totalOptions">Total Options Granted</label>
                    <input type="text" id="totalOptions" placeholder="e.g. 4800" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Whole grant being tracked.</div>
                </div>
                <div class="form-group">
                    <label for="grantDate">Grant Date</label>
                    <input type="date" id="grantDate" autocomplete="off">
                    <div class="field-hint">Date options were granted.</div>
                </div>
            </div>

            <div class="field-group-title">Schedule</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="cliff">Cliff (months)</label>
                    <input type="text" id="cliff" placeholder="12" inputmode="decimal" autocomplete="off" value="12">
                    <div class="field-hint">Min 12 (Rule 12(6)).</div>
                </div>
                <div class="form-group">
                    <label for="totalMonths">Total Vesting (months)</label>
                    <input type="text" id="totalMonths" placeholder="48" inputmode="decimal" autocomplete="off" value="48">
                    <div class="field-hint">e.g. 48 = 4 years.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="frequency">Post-Cliff Frequency</label>
                    <select id="frequency">
                        <option value="1">Monthly</option>
                        <option value="3">Quarterly</option>
                        <option value="12">Annually</option>
                    </select>
                    <div class="field-hint">How often tranches vest after the cliff.</div>
                </div>
                <div class="form-group">
                    <label for="cliffPct">Cliff Vesting %</label>
                    <input type="text" id="cliffPct" placeholder="25" inputmode="decimal" autocomplete="off" value="25">
                    <div class="field-hint">% that vests at the cliff (typ. 25%).</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Build Schedule &amp; Track</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card highlight">
                        <div class="result-label">Vested to Date</div>
                        <div class="result-value" id="resVested">—</div>
                        <span class="vest-status" id="vestStatus"></span>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Unvested Balance</div>
                        <div class="result-value" id="resUnvested">—</div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <div class="progress-bar"><div class="progress-fill" id="progFill" style="width:0%;"></div></div>
                    <div class="progress-label"><span id="progPct">0% vested</span><span id="nextDate"></span></div>
                </div>
                <div class="schedule-scroll">
                    <table class="schedule-table" id="scheduleTable">
                        <thead><tr><th>#</th><th>Vesting Date</th><th>Tranche</th><th>Cumulative</th><th>Status</th></tr></thead>
                        <tbody id="scheduleBody"></tbody>
                    </table>
                </div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Designing or administering this scheme?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant drafts the Board-approved ESOP scheme — vesting, cliffs, exercise windows and MCA filings — and runs grant administration and cap-table tracking.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20need%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vesting%20/%20scheme%20administration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20would%20like%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%0A%0AMy%20details%3A%0A-%20Company%20stage%3A%0A-%20Number%20of%20grantees%3A%0A-%20Vesting%20structure%20%28cliff%20/%20term%20/%20frequency%29%3A%0A-%20Help%20needed%20%28scheme%20drafting%20/%20administration%20/%20cap%20table%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Tracker</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Vesting Tracker</h2>
            <ol>
                <li><strong>Enter your total options and grant date</strong> from your grant letter.</li>
                <li><strong>Set the cliff</strong> (at least 12 months) and the <strong>total vesting term</strong> in months (48 = a 4-year schedule).</li>
                <li><strong>Choose the post-cliff frequency</strong> — monthly, quarterly or annually — and the <strong>cliff %</strong> (usually 25%).</li>
                <li><strong>Click Build Schedule</strong> for the full tranche table, plus your options vested to date, unvested balance, % vested and next vesting date.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> This tracks <em>vesting</em> only. Once tranches vest and you plan to exercise, model the tax with the <a href="/tools/esop-perquisite-tax-calculator">perquisite tax calculator</a> and, on a later sale, the <a href="/tools/esop-capital-gains-calculator">capital gains calculator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What an ESOP Vesting Schedule Is</h2>
            <p>A <strong>vesting schedule</strong> defines when, and in what tranches, your stock options become exercisable. Until options vest you cannot exercise them, and unvested options usually <strong>lapse</strong> if you leave. Vesting is the bridge between the promise of equity and the right to acquire it.</p>
            <p>The dominant Indian pattern is <strong>four years with a one-year cliff</strong>: nothing vests in year one, 25% vests at the 12-month cliff, and the remaining 75% vests monthly or quarterly over the next three years. Patron's <a href="/blog/esop-vesting-schedule-cliff-explained">vesting &amp; cliff explainer</a> and <a href="/blog/companies-act-section-62-rule-12-esop">Section 62 / Rule 12 guide</a> cover the law and the common designs.</p>
            <div class="formula-box">
                <span class="label">Cliff date</span> = Grant date + cliff months → cliff % vests<br>
                <span class="label">Each later tranche</span> = (Total − cliff) ÷ number of remaining intervals<br>
                <span class="label">Vested to date</span> = Σ tranches whose date ≤ today
            </div>
        </section>

        <section class="content-section" id="cliff">
            <h2>The Cliff and Rule 12(6)</h2>
            <p>Under <strong>Rule 12(6) of the Companies (Share Capital and Debentures) Rules, 2014</strong>, there must be a <strong>minimum one-year vesting period</strong> from the date of grant — any provision letting options vest sooner is not valid. This is why the <strong>one-year cliff is effectively mandatory</strong> for Indian companies. The rule sits under Section 62 of the Companies Act and the scheme is filed with the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>; startups recognised by <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> design their vesting alongside the perquisite-tax deferral.</p>
            <p>At the cliff a block vests in one go (commonly 25%); before it, nothing has vested, so an employee who leaves during the first year typically walks away with <strong>zero</strong>. After the cliff, options vest gradually to reward continued tenure. Vested options remain exercisable only within a limited <strong>post-termination window</strong> — often 30 to 90 days — so timing an exit matters.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> The tracker enforces a 12-month minimum cliff in line with Rule 12(6). Your actual terms are whatever your grant letter and the Board-approved scheme specify.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help with ESOP Vesting &amp; Scheme Administration?</h3>
            <p>Patron Accounting LLP supports founders and employees designing or tracking ESOP vesting schedules — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20need%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vesting%20/%20scheme%20administration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20would%20like%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%0A%0AMy%20details%3A%0A-%20Company%20stage%3A%0A-%20Number%20of%20grantees%3A%0A-%20Vesting%20structure%20%28cliff%20/%20term%20/%20frequency%29%3A%0A-%20Help%20needed%20%28scheme%20drafting%20/%20administration%20/%20cap%20table%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="structures">
            <h2>Common Vesting Structures</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Structure</th><th>How it works</th></tr>
                </thead>
                <tbody>
                    <tr><td>4-year, 1-year cliff</td><td>25% at 12 months, then 75% monthly/quarterly over 36 months. The startup standard.</td></tr>
                    <tr><td>3-year vesting</td><td>Shorter cycle, common at later-stage companies; still a 1-year minimum cliff.</td></tr>
                    <tr><td>Graded vesting</td><td>Equal tranches at regular intervals (annual/quarterly) after the cliff.</td></tr>
                    <tr><td>Back-weighted</td><td>More options vest in later years to strengthen retention.</td></tr>
                    <tr><td>Performance / hybrid</td><td>Some or all options vest on milestones (revenue, funding) — often for CXOs; the 1-year minimum still applies.</td></tr>
                </tbody>
            </table>
            <p>This tracker models time-based schedules (cliff + equal post-cliff tranches). For milestone-based or accelerated vesting (single/double-trigger on acquisition), refer to your scheme and the <a href="/esop-scheme-design">ESOP scheme design</a> service. To see the generic shape of any schedule, the <a href="/tools/vesting-schedule-visualizer">vesting schedule visualiser</a> complements this tracker.</p>
        </section>

        <section class="content-section" id="example">
            <h2>A Worked Example</h2>
            <p>You're granted <strong>4,800 options</strong> on 1 January 2025, on a 4-year schedule (48 months) with a 1-year cliff and monthly vesting after the cliff.</p>
            <ul>
                <li><strong>Cliff (1 Jan 2026):</strong> 25% = 1,200 options vest in one go.</li>
                <li><strong>Months 13–48:</strong> the remaining 3,600 vest over 36 months = 100 options per month.</li>
                <li><strong>As of mid-2026</strong> (say month 18): 1,200 (cliff) + 6 monthly tranches × 100 = <strong>1,800 vested</strong>, 3,000 unvested, <strong>37.5% vested</strong>.</li>
                <li><strong>Fully vested</strong> on 1 January 2029 (month 48).</li>
            </ul>
            <p>If you had left before 1 January 2026 (the cliff), <strong>nothing</strong> would have vested. The tracker does this arithmetic for any grant date and term and shows exactly which tranches have passed as of today.</p>
        </section>

        <section class="content-section" id="lifecycle">
            <h2>Where Vesting Sits in the ESOP Lifecycle</h2>
            <p>Vesting is one stage in a longer journey, and it is easy to confuse it with the others. The lifecycle runs: <strong>grant</strong> (the Board awards options — no tax), <strong>vesting</strong> (options become exercisable over the schedule this tracker builds — still no tax), <strong>exercise</strong> (you pay the exercise price and the gap to fair market value is taxed as a salary perquisite), and finally <strong>sale</strong> (the gain over that fair market value is taxed as capital gains).</p>
            <p>So a vesting tracker answers "how much can I exercise, and when" — not "what will I owe". The valuation that drives the perquisite at exercise is a separate exercise, certified for unlisted companies by a SEBI-registered Category I merchant banker under the framework overseen by <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a>, and the share-based-payment accounting follows <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> standards. For founders running multiple grants, recognition through <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> and disciplined cap-table tracking keep the whole programme clean.</p>
            <div class="callout">
                <p><strong>Tip:</strong> Track vesting here, then sequence exercise timing against tax using the <a href="/tools/esop-tds-calculator">ESOP TDS calculator</a> and the <a href="/tools/esop-capital-gains-calculator">capital gains calculator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is an ESOP vesting schedule?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">An ESOP vesting schedule sets out when, and in what tranches, an employee's stock options become exercisable over time. Until options vest, the employee does not have the right to exercise them, and unvested options usually lapse on leaving. The most common Indian schedule is four years with a one-year cliff: nothing vests for the first year, then a block vests at the cliff and the rest vests in regular tranches over the remaining term.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is a cliff in ESOP vesting?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A cliff is the minimum period an employee must complete before any options vest. In the standard model the cliff is twelve months, at which point a block, usually twenty-five percent of the grant, vests in one go. If the employee leaves before the cliff, no options vest and the entire grant lapses. After the cliff, the remaining options vest gradually, monthly or quarterly, over the rest of the vesting term.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the minimum vesting period for ESOPs in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Rule 12(6) of the Companies (Share Capital and Debentures) Rules, 2014, there must be a minimum vesting period of one year from the date of grant of options. Any provision allowing options to vest sooner than twelve months is not valid. This is why the one-year cliff is effectively mandatory for Indian companies, and schemes are drafted so that no tranche can vest within the first year of the grant.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is the standard 4-year vesting with a 1-year cliff structured?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">In the standard structure nothing vests in the first year. At the twelve-month cliff, twenty-five percent of the options vest at once. The remaining seventy-five percent then vest in equal tranches monthly or quarterly over the next thirty-six months. For example, on a grant of 1,200 options, 300 vest at the one-year cliff and the other 900 vest evenly across the following three years until the grant is fully vested at the end of year four.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How does this tracker calculate options vested to date?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The tracker builds the full tranche schedule from your grant date, cliff, total term and frequency, then compares each tranche's vesting date with today's date. Tranches whose date has passed are counted as vested, and the rest are unvested. Before the cliff date nothing is vested. The result is the number of options vested to date, the unvested balance, the percentage vested and the date of your next vesting tranche.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What happens to unvested options if I leave?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Unvested options generally lapse immediately when you resign or are terminated, so only the options that have already vested are retained. If you leave before completing the cliff, you usually walk away with nothing because no options have vested. Vested options typically remain exercisable only within a limited post-termination window, often thirty to ninety days, after which they too may lapse, so timing the exit and exercise matters.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does vesting trigger any tax?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Vesting by itself does not create a tax liability; it only makes the options exercisable. Tax arises later at two stages: at exercise the difference between the fair market value and the exercise price is taxed as a salary perquisite, and on a subsequent sale the gain over that fair market value is taxed as capital gains. So a vesting tracker tells you what you can exercise, not what tax you will pay.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What other vesting structures are used?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Besides the four-year, one-year-cliff model, some companies use a three-year schedule at later stages, graded vesting with equal annual or quarterly tranches, and back-weighted vesting where more vests in the later years to strengthen retention. Performance or milestone-based vesting ties some or all of the options to targets such as revenue or funding, and hybrid models combine time and performance conditions. The minimum one-year vesting still applies in all cases.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is vesting the same as owning the shares?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Vesting only gives you the right to exercise the options; you become a shareholder only after you exercise the vested options by paying the exercise price and the shares are allotted. So a tracker showing vested options is showing what you are entitled to buy, not shares you already own. Ownership, dividend and voting rights begin only after exercise and allotment, subject to any lock-in in the scheme.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the ESOP Vesting Schedule Tracker free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting ESOP Vesting Schedule Tracker is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It builds your tranche-by-tranche vesting schedule from the grant date, cliff and term, and shows the options vested to date, the unvested balance, percentage vested and your next vesting date. It is an indicative planning tool; your actual entitlement is governed by your grant letter and the ESOP scheme.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>ESOP Scheme & Administration</h3>
            <p>Board-approved vesting design, grant letters, exercise windows and cap-table tracking — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20need%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20vesting%20/%20scheme%20administration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Vesting%20Schedule%20Tracker%20and%20would%20like%20help%20with%20ESOP%20scheme%20design%20and%20vesting%20administration.%0A%0AMy%20details%3A%0A-%20Company%20stage%3A%0A-%20Number%20of%20grantees%3A%0A-%20Vesting%20structure%20%28cliff%20/%20term%20/%20frequency%29%3A%0A-%20Help%20needed%20%28scheme%20drafting%20/%20administration%20/%20cap%20table%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/vesting-schedule-visualizer" class="sidebar-link">Vesting Schedule Visualiser <span class="arrow">→</span></a>
            <a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">Perquisite Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-capital-gains-calculator" class="sidebar-link">ESOP Capital Gains <span class="arrow">→</span></a>
            <a href="/tools/esop-pool-sizing-calculator" class="sidebar-link">ESOP Pool Sizing <span class="arrow">→</span></a>
            <a href="/tools/esop-fmv-calculator" class="sidebar-link">ESOP FMV Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/esop-scheme-design" class="sidebar-link">ESOP Scheme Design <span class="arrow">→</span></a>
            <a href="/esop-services" class="sidebar-link">ESOP Services <span class="arrow">→</span></a>
            <a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Compliance <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-vesting-schedule-cliff-explained" class="sidebar-link">Vesting &amp; Cliff Explained <span class="arrow">→</span></a>
            <a href="/blog/companies-act-section-62-rule-12-esop" class="sidebar-link">Section 62 / Rule 12 <span class="arrow">→</span></a>
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

    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtNum(n){ return Math.round(n).toLocaleString('en-IN'); }
    function fmtDate(d){ return d.toLocaleDateString('en-IN', { day:'2-digit', month:'short', year:'numeric' }); }
    function addMonths(date, m){ var d = new Date(date.getTime()); var day = d.getDate(); d.setMonth(d.getMonth() + m); if (d.getDate() < day) d.setDate(0); return d; }

    function buildSchedule(total, grant, cliffM, totalM, freq, cliffPct){
        var tranches = [];
        var cliffShares = Math.round(total * cliffPct/100);
        var cliffDate = addMonths(grant, cliffM);
        tranches.push({ date: cliffDate, qty: cliffShares, cliff: true });
        var remaining = total - cliffShares;
        var monthsAfter = totalM - cliffM;
        if (monthsAfter > 0 && remaining > 0){
            var nIntervals = Math.floor(monthsAfter / freq);
            if (nIntervals < 1) nIntervals = 1;
            var per = remaining / nIntervals;
            var allocated = 0;
            for (var i = 1; i <= nIntervals; i++){
                var dt = addMonths(grant, cliffM + i*freq);
                var qty = (i === nIntervals) ? (remaining - allocated) : Math.round(per);
                allocated += qty;
                tranches.push({ date: dt, qty: qty, cliff: false });
            }
        }
        return tranches;
    }

    function calculate(){
        var total = val('totalOptions');
        var gd = document.getElementById('grantDate').value;
        var cliffM = val('cliff'), totalM = val('totalMonths'), freq = parseInt(document.getElementById('frequency').value,10), cliffPct = val('cliffPct');

        if (total <= 0){ alert('Please enter the total options granted.'); return; }
        if (!gd){ alert('Please select your grant date.'); return; }
        if (cliffM < 12){ alert('The cliff must be at least 12 months under Rule 12(6).'); return; }
        if (totalM < cliffM){ alert('Total vesting months must be at least the cliff length.'); return; }
        if (cliffPct < 0 || cliffPct > 100){ alert('Cliff % must be between 0 and 100.'); return; }

        var grant = new Date(gd + 'T00:00:00');
        var today = new Date(); today.setHours(0,0,0,0);
        var tranches = buildSchedule(total, grant, cliffM, totalM, freq, cliffPct);

        var vested = 0, cum = 0, nextDate = null, rows = '';
        tranches.forEach(function(t, idx){
            cum += t.qty;
            var passed = t.date <= today;
            if (passed) vested += t.qty;
            else if (!nextDate) nextDate = t.date;
            var cls = passed ? 'passed' : '';
            var statusTxt = passed ? '<span class="tick">✓ vested</span>' : 'pending';
            rows += '<tr class="' + cls + '"><td>' + (idx+1) + (t.cliff ? ' (cliff)' : '') + '</td><td>' + fmtDate(t.date) + '</td><td>' + fmtNum(t.qty) + '</td><td>' + fmtNum(cum) + '</td><td>' + statusTxt + '</td></tr>';
        });
        // mark the next tranche row
        if (nextDate){
            var nd = fmtDate(nextDate);
            rows = rows.replace('<tr class=""><td>', '<tr class="next" data-next="1"><td>'); // first pending row
        }

        var unvested = total - vested;
        var pct = total > 0 ? (vested/total*100) : 0;

        document.getElementById('resVested').textContent = fmtNum(vested);
        document.getElementById('resUnvested').textContent = fmtNum(unvested);
        document.getElementById('progFill').style.width = pct.toFixed(1) + '%';
        document.getElementById('progPct').textContent = pct.toFixed(1) + '% vested';
        document.getElementById('nextDate').textContent = nextDate ? ('Next: ' + fmtDate(nextDate)) : 'Fully vested';
        document.getElementById('scheduleBody').innerHTML = rows;

        var st = document.getElementById('vestStatus');
        var cliffDate = addMonths(grant, cliffM);
        if (today < cliffDate){ st.className = 'vest-status cliff'; st.textContent = 'Pre-cliff — nothing vested yet'; }
        else if (unvested > 0){ st.className = 'vest-status vesting'; st.textContent = 'Vesting in progress'; }
        else { st.className = 'vest-status done'; st.textContent = 'Fully vested'; }

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        document.getElementById('totalOptions').value = '';
        document.getElementById('grantDate').value = '';
        document.getElementById('cliff').value = '12';
        document.getElementById('totalMonths').value = '48';
        document.getElementById('frequency').value = '1';
        document.getElementById('cliffPct').value = '25';
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
</script>
@endsection
