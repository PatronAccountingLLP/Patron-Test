@extends('layouts.app')
<title>Authorised Capital Planner | How Much to Set & SH-7 Cost</title>
<meta name="description" content="Free authorised capital planner: decide how much authorised capital to set at incorporation and compare set-high-now vs increase-later (SH-7) costs by state.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/authorised-capital-planner">
@section('meta')
<meta property="og:title" content="Authorised Capital Planner — How Much to Set 2026">
<meta property="og:description" content="Decide how much authorised capital to set at incorporation: recommended level, paid-up headroom, and the cost of setting high now vs increasing later via SH-7.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/authorised-capital-planner">
<meta property="og:image" content="/tools/authorised-capital-planner-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Authorised Capital Planner — How Much to Set 2026">
<meta name="twitter:description" content="Decide how much authorised capital to set at incorporation and compare set-high-now vs increase-later (SH-7) costs. Free & instant.">
<meta name="twitter:image" content="/tools/authorised-capital-planner-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Authorised Capital Planner",
  "description": "Authorised Capital Planner helps a founder decide how much authorised capital to declare when incorporating a company in India. It takes the planned paid-up capital now and the expected near-term issuance, recommends an authorised capital that covers planned shares with headroom, enforces the rule that authorised capital must be at least the paid-up capital, and compares two strategies: setting a higher authorised capital now versus starting low and increasing later through Form SH-7. It estimates the SPICe Plus filing fee, state stamp duty at each level and the later SH-7 increase cost so the founder can weigh the upfront cost against future flexibility.",
  "url": "/tools/authorised-capital-planner",
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
    {"@type": "ListItem", "position": 3, "name": "Authorised Capital Planner", "item": "/tools/authorised-capital-planner"}
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
      "name": "What is authorised capital and how is it different from paid-up capital?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Authorised capital is the maximum share capital a company is allowed to issue, declared in the capital clause of the Memorandum of Association. Paid-up capital is the amount shareholders have actually paid for shares allotted to them. Authorised capital is a ceiling, paid-up is what has been issued within that ceiling, and paid-up capital can never exceed authorised capital. A company can issue more shares up to the authorised limit without changing the MoA, but must raise the authorised capital first to go beyond it."
      }
    },
    {
      "@type": "Question",
      "name": "How much authorised capital should a startup set?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many early-stage startups set authorised capital of one lakh rupees, which is enough for an initial paid-up capital of one lakh and keeps stamp duty and fees minimal. If you expect to issue more shares soon, perhaps for a co-founder or a small round, setting authorised capital a little above the expected paid-up gives headroom without a later filing. Founders with confirmed investor interest often set ten lakh to one crore. This planner recommends a level based on your planned paid-up and near-term issuance."
      }
    },
    {
      "@type": "Question",
      "name": "Is there a minimum authorised capital for a private company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The minimum paid-up capital requirement of one lakh rupees for a private company was removed by the Companies (Amendment) Act, 2015. A company can now be incorporated with any amount of capital, even ten thousand rupees, and there is no penalty for not maintaining a specified minimum. Founders set authorised and paid-up capital based on their commercial needs and the cost trade-off, not a statutory floor, which is what this planner helps you balance."
      }
    },
    {
      "@type": "Question",
      "name": "Does higher authorised capital cost more at incorporation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The SPICe Plus filing fee is nil up to fifteen lakh rupees of authorised capital and rises in slabs above that, and stamp duty is charged as a percentage of authorised capital, so a higher authorised capital means higher upfront stamp duty. Setting a very high authorised capital at incorporation when you do not yet need it ties up money in stamp duty you could have deferred. This planner shows the extra cost of setting high now against the cost of increasing later."
      }
    },
    {
      "@type": "Question",
      "name": "How do I increase authorised capital later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under Section 61 of the Companies Act, 2013, the board passes a resolution, shareholders approve the increase by ordinary resolution at a general meeting, the capital clause of the MoA is amended, and Form SH-7 is filed with the Registrar within thirty days. You pay an ROC fee based on the amount of the increase plus state stamp duty on the increase. If the Articles do not permit alteration of capital, the Articles must be amended first by special resolution with Form MGT-14."
      }
    },
    {
      "@type": "Question",
      "name": "Is it cheaper to set high now or increase later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It depends on timing and certainty. If you are confident you will need higher capital very soon, setting it at incorporation avoids a second filing and its professional fee. If the need is uncertain or distant, starting low keeps upfront stamp duty and fees down, and you only pay the SH-7 cost if and when you actually need the increase. Because money has time value and plans change, many founders start low. This planner quantifies both paths so you can choose."
      }
    },
    {
      "@type": "Question",
      "name": "Can paid-up capital be higher than authorised capital?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, never. Authorised capital is the legal ceiling, so paid-up capital must always be equal to or less than authorised capital. If you want to issue shares that would push paid-up beyond the authorised limit, you must first increase the authorised capital by amending the MoA and filing Form SH-7. Attempting to allot shares beyond the authorised limit is invalid, which is why the planner warns you whenever your planned paid-up exceeds the authorised capital you enter."
      }
    },
    {
      "@type": "Question",
      "name": "Does authorised capital affect credibility or funding?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Authorised capital itself is just a ceiling and signals little, since it is not money in the bank. Paid-up capital is more meaningful, because a higher paid-up shows promoters have actually invested, which banks, lenders and investors view as a sign of commitment. For fundraising, investors care about the share structure, valuation and cap table rather than the authorised figure, though enough authorised headroom is needed so new shares can be issued without a delay to increase it."
      }
    },
    {
      "@type": "Question",
      "name": "Does authorised capital change my annual compliance cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Authorised capital does not directly drive most annual compliance costs, which depend more on turnover, audit requirements and the number of transactions. It mainly affects one-time costs: incorporation stamp duty and fees, and the SH-7 cost if you increase it later. Some ROC event-based fees are tiered by capital, but the recurring annual filings such as AOC-4 and MGT-7 are not primarily a function of authorised capital. The annual compliance cost estimator can help you plan the recurring side."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Authorised Capital Planner free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Authorised Capital Planner is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It recommends an authorised capital for your planned paid-up and near-term issuance, checks the authorised is at least the paid-up, and compares the cost of setting high now versus increasing later through SH-7. It is an indicative planning tool; confirm the exact fees and the best structure with a professional before incorporating."
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
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 18px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .reco-card { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 24px; text-align: center; margin-bottom: 16px; }
        .reco-card .rc-label { font-family: var(--font-mono); font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--accent-light); margin-bottom: 6px; }
        .reco-card .rc-amount { font-size: 32px; font-weight: 700; font-family: var(--font-mono); line-height: 1.1; }
        .reco-card .rc-sub { font-size: 13px; color: rgba(255,255,255,0.85); margin-top: 8px; line-height: 1.5; }
        .warn-box { background: #FEF2F2; border: 2px solid var(--danger); border-radius: var(--radius); padding: 14px 18px; margin-bottom: 16px; font-size: 14px; color: #991B1B; font-weight: 600; }
        .compare-grid { display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 16px; }
        @media (min-width: 560px) { .compare-grid { grid-template-columns: 1fr 1fr; } }
        .compare-col { border: 2px solid var(--border); border-radius: var(--radius-lg); overflow: hidden; }
        .compare-col.low { border-color: var(--primary); }
        .compare-col.high { border-color: var(--accent); }
        .compare-head { padding: 12px 16px; font-weight: 700; font-size: 14px; color: #fff; text-align: center; line-height: 1.3; }
        .compare-col.low .compare-head { background: var(--primary); }
        .compare-col.high .compare-head { background: var(--accent); color: var(--primary-dark); }
        .compare-body { padding: 8px 16px 14px; }
        .cmp-row { display: flex; justify-content: space-between; align-items: baseline; padding: 8px 0; font-size: 13.5px; gap: 8px; border-bottom: 1px dashed var(--border); }
        .cmp-row:last-child { border-bottom: none; }
        .cmp-row.total { border-top: 2px solid var(--border); margin-top: 2px; padding-top: 10px; font-weight: 700; }
        .cmp-label { color: var(--text-secondary); }
        .cmp-val { font-family: var(--font-mono); font-weight: 700; color: var(--text); text-align: right; white-space: nowrap; }
        .cmp-row.total .cmp-val { color: var(--primary-dark); font-size: 15px; }
        .verdict-line { text-align: center; margin-bottom: 16px; padding: 14px; background: var(--surface-alt); border-radius: var(--radius); font-size: 14px; color: var(--text-secondary); }
        .verdict-line strong { color: var(--primary); }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 4px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
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
        <a href="#calculator">Planner</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">Authorised vs Paid-Up</a>
        <a href="#how-it-works">How It Decides</a>
        <a href="#sh7">Increasing Later</a>
        <a href="#bands">Typical Levels</a>
        <a href="#funding">Fundraising</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Authorised Capital Planner
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Authorised Capital Planner — <span>How Much to Set</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Unsure how much capital to set? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Authorised%20Capital%20Planner%20and%20need%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Authorised%20capital%20/%20capital%20structure%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Authorised%20Capital%20Planner%20and%20would%20like%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Planned%20paid-up%20capital%20now%3A%0A-%20Expected%20near-term%20issuance%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Considering%20authorised%20capital%20of%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Decide how much <strong>authorised capital</strong> to declare at incorporation. Enter your planned <strong>paid-up now</strong> and any <strong>near-term issuance</strong>; the planner recommends an authorised level with headroom, enforces the rule that <strong>authorised ≥ paid-up</strong>, and compares <strong>setting high now vs starting low and increasing later via SH-7</strong>. There's <strong>no minimum capital</strong> (abolished 2015); SPICe+ fee is ₹0 up to ₹15L and stamp duty scales with authorised capital — so low-now is usually cheaper unless you're certain you'll need more soon.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Plan Your Authorised Capital</h2>
            <p class="calc-sub">Recommends a level + compares set-high-now vs increase-later. Indicative figures.</p>
            <noscript>
                <div class="noscript-box">
                    This planner requires JavaScript. Please enable JavaScript, or use the typical-levels table below as a guide.
                </div>
            </noscript>

            <div class="field-group-title">Your plan</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="paidNow">Paid-up Capital Now (₹)</label>
                    <input type="text" id="paidNow" placeholder="e.g. 100000" value="100000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Money shareholders will actually put in at the start.</div>
                </div>
                <div class="form-group">
                    <label for="issueSoon">Additional Issuance Expected Soon (₹)</label>
                    <input type="text" id="issueSoon" placeholder="e.g. 400000" value="0" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Further shares in next ~12–24 months (co-founder, small round).</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="state">State (stamp duty band)</label>
                    <select id="state">
                        <option value="low">Low (Maharashtra, Delhi, UP, North-East)</option>
                        <option value="mid" selected>Medium (Karnataka, Tamil Nadu, Telangana)</option>
                        <option value="high">High (Gujarat, Kerala, Punjab, Rajasthan)</option>
                    </select>
                    <div class="field-hint">Stamp duty is a % of authorised capital.</div>
                </div>
                <div class="form-group">
                    <label for="setLevel">Authorised Capital You're Considering (₹)</label>
                    <input type="text" id="setLevel" placeholder="optional — else recommended" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Leave blank to use the recommended level for the "high" path.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Plan & Compare</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="warn-box" id="warnBox" style="display:none;"></div>
                <div class="reco-card">
                    <div class="rc-label">Recommended Authorised Capital</div>
                    <div class="rc-amount" id="recoAmount">₹0</div>
                    <div class="rc-sub" id="recoSub"></div>
                </div>
                <div class="compare-grid">
                    <div class="compare-col low">
                        <div class="compare-head" id="lowHead">Start Low Now</div>
                        <div class="compare-body" id="lowBody"></div>
                    </div>
                    <div class="compare-col high">
                        <div class="compare-head" id="highHead">Set Higher Now</div>
                        <div class="compare-body" id="highBody"></div>
                    </div>
                </div>
                <div class="verdict-line" id="verdictLine"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want this capital structure set up correctly?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant advises on the authorised/paid-up structure, drafts the MoA capital clause, and handles incorporation or an SH-7 increase.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Authorised%20Capital%20Planner%20and%20need%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Authorised%20capital%20/%20capital%20structure%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Authorised%20Capital%20Planner%20and%20would%20like%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Planned%20paid-up%20capital%20now%3A%0A-%20Expected%20near-term%20issuance%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Considering%20authorised%20capital%20of%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Planner</h2>
            <ol>
                <li><strong>Enter paid-up capital now</strong> — what shareholders will actually invest at the start.</li>
                <li><strong>Add expected near-term issuance</strong> — further shares you realistically expect in the next year or two.</li>
                <li><strong>Pick your state band</strong> (stamp duty scales with authorised capital).</li>
                <li><strong>Optionally enter an authorised level</strong> you're considering, then <strong>Plan & Compare</strong> for a recommendation and the set-high-now vs increase-later cost comparison.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Authorised capital is just a ceiling — it isn't money you must deposit. Keep it modest unless you're confident of issuing more soon. For the full incorporation budget, use the <a href="/tools/incorporation-cost-estimator">incorporation cost estimator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>Authorised vs Paid-Up Capital</h2>
            <p><strong>Authorised capital</strong> is the maximum share capital a company may issue, set in the <strong>capital clause of the MoA</strong>. <strong>Paid-up capital</strong> is what shareholders have actually paid for shares allotted. The hard rule: <strong>paid-up can never exceed authorised</strong> — authorised is the ceiling, paid-up sits within it.</p>
            <p>You can issue more shares up to the authorised limit with no MoA change; to go beyond it you must <strong>increase authorised capital first</strong> (Form SH-7). There's <strong>no minimum capital</strong> any more — the ₹1 lakh minimum was removed by the Companies (Amendment) Act 2015. The capital clause and every change to it are filed with the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>, and the company files its returns through the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax department</a>. See Patron's <a href="/blog/authorized-capital-vs-paid-up-capital">authorised vs paid-up guide</a>.</p>
            <div class="formula-box">
                <span class="label">Rule</span>: paid-up ≤ authorised &nbsp;(always)<br>
                <span class="label">Recommended authorised</span> ≈ (paid-up now + near-term issuance) × headroom<br>
                <span class="label">Issue freely</span> up to authorised; beyond it → SH-7
            </div>
        </section>

        <section class="content-section" id="how-it-works">
            <h2>How the Planner Decides</h2>
            <p>The recommendation covers your planned paid-up plus expected issuance, with a sensible <strong>headroom</strong> so you don't file SH-7 for a small top-up, rounded to a clean figure (₹1L, ₹5L, ₹10L, ₹15L, …). It keeps the recommendation at or below the <strong>₹15 lakh SPICe+ free-fee ceiling</strong> where your needs allow, since that's the cost-efficient sweet spot.</p>
            <p>The comparison then prices two paths for the same end-state:</p>
            <ul>
                <li><strong>Start low now</strong> — minimal authorised at incorporation (covering immediate paid-up), then a later <strong>SH-7 increase</strong> when you actually need more: lower upfront cost, a second filing later.</li>
                <li><strong>Set higher now</strong> — the full recommended/considered authorised at incorporation: higher upfront stamp duty (and SPICe+ fee above ₹15L), but no later filing.</li>
            </ul>
            <p>It flags which is cheaper overall and reminds you that the "start low" saving is only real if the later need is genuine — plans change, and money has time value.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Capital Structure & Incorporation?</h3>
            <p>Patron Accounting LLP supports founders deciding authorised / paid-up capital and incorporating or increasing capital — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Authorised%20Capital%20Planner%20and%20need%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Authorised%20capital%20/%20capital%20structure%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Authorised%20Capital%20Planner%20and%20would%20like%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Planned%20paid-up%20capital%20now%3A%0A-%20Expected%20near-term%20issuance%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Considering%20authorised%20capital%20of%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="sh7">
            <h2>Increasing Authorised Capital Later (SH-7)</h2>
            <p>If you start low and later need more, increasing authorised capital is a defined process under <strong>Section 61 of the Companies Act 2013</strong>: a board resolution, an <strong>ordinary resolution</strong> by shareholders at a general meeting, an amendment to the MoA capital clause, and <strong>Form SH-7 filed with the ROC within 30 days</strong>. You pay an ROC fee tiered on the <em>increase</em> amount, plus state stamp duty on the increase, plus a professional fee.</p>
            <p>If the Articles don't permit capital alteration, amend them first by special resolution with MGT-14. There's <strong>no penalty</strong> for starting low — see Patron's <a href="/blog/increase-authorized-capital-of-company-complete-guide">increase authorised capital guide</a> and the <a href="/change-in-authorised-capital">change in authorised capital</a> service.</p>
        </section>

        <section class="content-section" id="bands">
            <h2>Typical Authorised Capital Levels</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Stage</th><th>Typical authorised capital</th></tr>
                </thead>
                <tbody>
                    <tr><td>Early-stage / bootstrapped startup</td><td>₹1 lakh (paid-up ₹1 lakh)</td></tr>
                    <tr><td>Startup expecting a small round / co-founder</td><td>₹5–₹15 lakh (stays in free SPICe+ slab)</td></tr>
                    <tr><td>Startup with confirmed investor interest</td><td>₹25 lakh – ₹1 crore</td></tr>
                    <tr><td>Medium enterprise</td><td>₹50 lakh – ₹5 crore by need</td></tr>
                </tbody>
            </table>
            <p>These are common ranges, not rules — pick a structure first with the <a href="/tools/entity-type-selector">entity type selector</a>, and price the stamp duty with the <a href="/tools/incorporation-stamp-duty-calculator">incorporation stamp duty calculator</a>.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> Indicative planning tool. SPICe+ fees, ROC tiers and state stamp duty change by notification — confirm the exact figures and the best structure with a professional before incorporating.</p>
            </div>
        </section>

        <section class="content-section" id="funding">
            <h2>Capital Structure and Fundraising Readiness</h2>
            <p>Authorised capital and the share structure matter most the moment you raise money. When an investor comes in, you issue fresh shares — which pushes up paid-up capital — and if that issuance would breach the authorised ceiling, you must first run an SH-7 increase, adding days to a closing you'd rather complete quickly. So a little authorised <strong>headroom</strong> is genuinely useful for a company that expects a round, even though the authorised figure itself is not money in the bank and signals nothing to investors on its own.</p>
            <p>What investors actually examine is paid-up capital, the cap table and valuation, not the authorised number. A startup seeking benefits under the Startup India scheme should also keep its structure clean: <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> recognition via the <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> portal and downstream incentives attach to the entity, and the share-capital movements feed into accounts prepared under <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> standards. Setting authorised capital with one funding round of headroom — without over-paying stamp duty for capital you may never issue — is usually the right balance.</p>
            <p>If you do raise and need to issue beyond the ceiling, the increase is routine; the planner above shows what that SH-7 step would cost so you can decide whether to build the headroom in now or later.</p>
            <div class="callout">
                <p><strong>Tip:</strong> Planning ESOPs alongside the round? The authorised capital must also accommodate the option pool once exercised — size it with the <a href="/tools/esop-pool-sizing-calculator">ESOP pool sizing calculator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is authorised capital and how is it different from paid-up capital?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Authorised capital is the maximum share capital a company is allowed to issue, declared in the capital clause of the Memorandum of Association. Paid-up capital is the amount shareholders have actually paid for shares allotted to them. Authorised capital is a ceiling, paid-up is what has been issued within that ceiling, and paid-up capital can never exceed authorised capital. A company can issue more shares up to the authorised limit without changing the MoA, but must raise the authorised capital first to go beyond it.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How much authorised capital should a startup set?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Many early-stage startups set authorised capital of one lakh rupees, which is enough for an initial paid-up capital of one lakh and keeps stamp duty and fees minimal. If you expect to issue more shares soon, perhaps for a co-founder or a small round, setting authorised capital a little above the expected paid-up gives headroom without a later filing. Founders with confirmed investor interest often set ten lakh to one crore. This planner recommends a level based on your planned paid-up and near-term issuance.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is there a minimum authorised capital for a private company?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The minimum paid-up capital requirement of one lakh rupees for a private company was removed by the Companies (Amendment) Act, 2015. A company can now be incorporated with any amount of capital, even ten thousand rupees, and there is no penalty for not maintaining a specified minimum. Founders set authorised and paid-up capital based on their commercial needs and the cost trade-off, not a statutory floor, which is what this planner helps you balance.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does higher authorised capital cost more at incorporation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The SPICe Plus filing fee is nil up to fifteen lakh rupees of authorised capital and rises in slabs above that, and stamp duty is charged as a percentage of authorised capital, so a higher authorised capital means higher upfront stamp duty. Setting a very high authorised capital at incorporation when you do not yet need it ties up money in stamp duty you could have deferred. This planner shows the extra cost of setting high now against the cost of increasing later.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I increase authorised capital later?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Section 61 of the Companies Act, 2013, the board passes a resolution, shareholders approve the increase by ordinary resolution at a general meeting, the capital clause of the MoA is amended, and Form SH-7 is filed with the Registrar within thirty days. You pay an ROC fee based on the amount of the increase plus state stamp duty on the increase. If the Articles do not permit alteration of capital, the Articles must be amended first by special resolution with Form MGT-14.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is it cheaper to set high now or increase later?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">It depends on timing and certainty. If you are confident you will need higher capital very soon, setting it at incorporation avoids a second filing and its professional fee. If the need is uncertain or distant, starting low keeps upfront stamp duty and fees down, and you only pay the SH-7 cost if and when you actually need the increase. Because money has time value and plans change, many founders start low. This planner quantifies both paths so you can choose.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can paid-up capital be higher than authorised capital?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No, never. Authorised capital is the legal ceiling, so paid-up capital must always be equal to or less than authorised capital. If you want to issue shares that would push paid-up beyond the authorised limit, you must first increase the authorised capital by amending the MoA and filing Form SH-7. Attempting to allot shares beyond the authorised limit is invalid, which is why the planner warns you whenever your planned paid-up exceeds the authorised capital you enter.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does authorised capital affect credibility or funding?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Authorised capital itself is just a ceiling and signals little, since it is not money in the bank. Paid-up capital is more meaningful, because a higher paid-up shows promoters have actually invested, which banks, lenders and investors view as a sign of commitment. For fundraising, investors care about the share structure, valuation and cap table rather than the authorised figure, though enough authorised headroom is needed so new shares can be issued without a delay to increase it.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does authorised capital change my annual compliance cost?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Authorised capital does not directly drive most annual compliance costs, which depend more on turnover, audit requirements and the number of transactions. It mainly affects one-time costs: incorporation stamp duty and fees, and the SH-7 cost if you increase it later. Some ROC event-based fees are tiered by capital, but the recurring annual filings such as AOC-4 and MGT-7 are not primarily a function of authorised capital. The annual compliance cost estimator can help you plan the recurring side.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Authorised Capital Planner free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Authorised Capital Planner is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It recommends an authorised capital for your planned paid-up and near-term issuance, checks the authorised is at least the paid-up, and compares the cost of setting high now versus increasing later through SH-7. It is an indicative planning tool; confirm the exact fees and the best structure with a professional before incorporating.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Capital Structure Advice</h3>
            <p>Advice on authorised / paid-up structure, MoA capital clause drafting, and incorporation or SH-7 increases — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Authorised%20Capital%20Planner%20and%20need%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Authorised%20capital%20/%20capital%20structure%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Authorised%20Capital%20Planner%20and%20would%20like%20help%20deciding%20my%20capital%20structure%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Planned%20paid-up%20capital%20now%3A%0A-%20Expected%20near-term%20issuance%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Considering%20authorised%20capital%20of%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/incorporation-cost-estimator" class="sidebar-link">Incorporation Cost Estimator <span class="arrow">→</span></a>
            <a href="/tools/incorporation-stamp-duty-calculator" class="sidebar-link">Stamp Duty Calculator <span class="arrow">→</span></a>
            <a href="/tools/entity-type-selector" class="sidebar-link">Entity Type Selector <span class="arrow">→</span></a>
            <a href="/tools/annual-compliance-cost-estimator" class="sidebar-link">Annual Compliance Cost <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Capital Services</h3>
            <a href="/change-in-authorised-capital" class="sidebar-link">Change Authorised Capital <span class="arrow">→</span></a>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Pvt Ltd Registration <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/authorized-capital-vs-paid-up-capital" class="sidebar-link">Authorised vs Paid-Up <span class="arrow">→</span></a>
            <a href="/blog/increase-authorized-capital-of-company-complete-guide" class="sidebar-link">Increase Authorised Capital <span class="arrow">→</span></a>
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

    var STAMP_RATE = { low: 0.0015, mid: 0.0030, high: 0.0050 };
    var STAMP_FLOOR = { low: 200, mid: 500, high: 1000 };

    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }

    // round up to a clean authorised-capital figure
    function cleanRound(x){
        var steps = [100000,200000,300000,500000,1000000,1500000,2500000,5000000,10000000,25000000,50000000,100000000];
        for (var i=0;i<steps.length;i++){ if (x <= steps[i]) return steps[i]; }
        return Math.ceil(x/10000000)*10000000;
    }
    function spiceFee(cap){ if (cap <= 1500000) return 0; if (cap <= 5000000) return 2000; if (cap <= 10000000) return 4000; return 6000; }
    function stampOn(cap, band){ return Math.max(STAMP_FLOOR[band], Math.round(cap * STAMP_RATE[band])); }
    // SH-7 ROC fee tiered on the increase amount (indicative)
    function sh7RocFee(inc){
        if (inc <= 0) return 0;
        if (inc <= 500000) return 2000;
        if (inc <= 1000000) return 4000;
        if (inc <= 5000000) return 7500;
        if (inc <= 10000000) return 15000;
        return 20000;
    }

    function calculate(){
        var paidNow = val('paidNow');
        var issueSoon = val('issueSoon');
        var band = document.getElementById('state').value;
        var setLevel = val('setLevel');

        if (paidNow <= 0){ alert('Please enter the paid-up capital now.'); return; }

        var totalNeed = paidNow + issueSoon;
        var recommended = cleanRound(totalNeed * 1.25); // 25% headroom, rounded up to clean figure

        // warn if user-entered set level is below paid-up
        var warn = document.getElementById('warnBox');
        if (setLevel > 0 && setLevel < paidNow){
            warn.style.display = 'block';
            warn.textContent = '⚠ Authorised capital (' + fmtINR(setLevel) + ') cannot be less than paid-up capital (' + fmtINR(paidNow) + '). Paid-up must always be within the authorised ceiling.';
        } else { warn.style.display = 'none'; }

        document.getElementById('recoAmount').textContent = fmtINR(recommended);
        document.getElementById('recoSub').textContent = 'Covers planned paid-up ' + fmtINR(paidNow) + (issueSoon>0 ? ' + near-term ' + fmtINR(issueSoon) : '') + ' with headroom' + (recommended <= 1500000 ? ' — within the ₹15L free SPICe+ slab.' : '.');

        // PATH A: start low (authorised = clean cover of paidNow only), then SH-7 to the higher target later
        var lowAuth = cleanRound(paidNow);
        var highTarget = setLevel > 0 ? Math.max(setLevel, paidNow) : recommended;

        // Low-now upfront
        var lowSpice = spiceFee(lowAuth), lowStamp = stampOn(lowAuth, band);
        var lowUpfront = lowSpice + lowStamp;
        // Later SH-7 increase from lowAuth to highTarget
        var inc = Math.max(0, highTarget - lowAuth);
        var sh7Roc = sh7RocFee(inc), sh7Stamp = inc>0 ? stampOn(inc, band) : 0, sh7Prof = inc>0 ? 4000 : 0;
        var sh7Total = sh7Roc + sh7Stamp + sh7Prof;
        var lowAllIn = lowUpfront + sh7Total;

        // High-now upfront (set highTarget at incorporation, no later filing)
        var highSpice = spiceFee(highTarget), highStamp = stampOn(highTarget, band);
        var highUpfront = highSpice + highStamp;

        document.getElementById('lowHead').textContent = 'Start Low (' + fmtINR(lowAuth) + ') + SH-7 later';
        document.getElementById('highHead').textContent = 'Set ' + fmtINR(highTarget) + ' Now';

        document.getElementById('lowBody').innerHTML =
            row('SPICe+ fee (now)', lowSpice) +
            row('Stamp duty (now)', lowStamp) +
            row('SH-7 ROC fee (later)', sh7Roc) +
            row('SH-7 stamp (later)', sh7Stamp) +
            row('SH-7 professional (later)', sh7Prof) +
            rowTotal('All-in (now + later)', lowAllIn);

        document.getElementById('highBody').innerHTML =
            row('SPICe+ fee (now)', highSpice) +
            row('Stamp duty (now)', highStamp) +
            row('Later increase', 0) +
            rowTotal('All-in (one filing)', highUpfront);

        var v = document.getElementById('verdictLine');
        if (inc <= 0){
            v.innerHTML = 'Your recommended authorised capital already covers the plan — <strong>set ' + fmtINR(highTarget) + ' now</strong>; no later increase needed.';
        } else if (highUpfront <= lowAllIn){
            v.innerHTML = 'If you\u2019re confident of the higher need soon, <strong>setting ' + fmtINR(highTarget) + ' now</strong> is about ' + fmtINR(lowAllIn - highUpfront) + ' cheaper overall and avoids a second filing.';
        } else {
            v.innerHTML = '<strong>Starting low</strong> saves about ' + fmtINR(highUpfront - lowAllIn) + ' upfront — worth it if the higher need is uncertain or more than a year away (you only pay SH-7 if/when you actually need it).';
        }

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function row(label, v){ return '<div class="cmp-row"><span class="cmp-label">' + label + '</span><span class="cmp-val">' + fmtINR(v) + '</span></div>'; }
    function rowTotal(label, v){ return '<div class="cmp-row total"><span class="cmp-label">' + label + '</span><span class="cmp-val">' + fmtINR(v) + '</span></div>'; }

    function resetCalc(){
        document.getElementById('paidNow').value = '100000';
        document.getElementById('issueSoon').value = '0';
        document.getElementById('setLevel').value = '';
        document.getElementById('state').value = 'mid';
        document.getElementById('resultSection').classList.remove('visible');
        document.getElementById('warnBox').style.display = 'none';
    }

    ['paidNow','issueSoon','setLevel'].forEach(function(id){
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
