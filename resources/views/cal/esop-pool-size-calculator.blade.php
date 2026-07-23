@extends('layouts.app')
@section('meta')
<title>ESOP Pool Size Calculator | How Big Should Your Pool Be</title>
<meta name="description" content="ESOP pool size calculator: work out how big your option pool should be, built bottom-up from your hiring plan and role-based grants, with buffer and dilution %.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-pool-size-calculator">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-pool-size-calculator">
<meta property="og:title" content="ESOP Pool Sizing Calculator — Hiring Plan & Dilution %">
<meta property="og:description" content="Recommends optimal ESOP pool size by funding stage, team and 18-month hiring plan. Shows dilution scenarios and founder vs employee-friendly variants.">
<meta property="og:image" content="/og/esop-pool-size-calculator.jpg">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP Pool Sizing Calculator — Hiring Plan & Dilution %">
<meta name="twitter:description" content="Recommends optimal ESOP pool size by funding stage, team and 18-month hiring plan. Shows dilution scenarios.">
<meta name="twitter:image" content="/og/esop-pool-size-calculator.jpg">

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
  "name": "ESOP Pool Size Calculator",
  "description": "ESOP Pool Size Calculator recommends an optimal employee stock option pool percentage for Indian startups based on funding stage (Seed, Series A, B, C), current team size, planned 18-month hiring, role distribution (engineering, product, sales, exec), and industry benchmark mode. Generates founder-friendly and employee-friendly variants with full dilution scenarios and a downloadable working sheet.",
  "url": "/tools/esop-pool-size-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP Pool Size Calculator", "item": "/tools/esop-pool-size-calculator"}
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
      "name": "What is an ESOP pool and why do Indian startups create one?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An ESOP pool is a block of company equity that founders reserve specifically for employee stock options. Indian private companies create it under Section 62(1)(b) of the Companies Act, 2013 and Rule 12 of Companies (Share Capital and Debentures) Rules, 2014. It lets startups attract senior talent when cash salaries are limited and aligns employees with long-term company growth."
      }
    },
    {
      "@type": "Question",
      "name": "What is the ideal ESOP pool size for Indian startups by funding stage?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard Indian benchmarks are 8–12% at Seed, 10–15% at Series A, 12–18% at Series B, and 14–20% at Series C and beyond. Most Indian startups operate at the lower end of these ranges compared to US peers. The correct size depends on your 18–24 month hiring plan, role mix, and how much founder dilution is acceptable."
      }
    },
    {
      "@type": "Question",
      "name": "Should the ESOP pool be created pre-money or post-money?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most Indian VCs insist on a pre-money pool expansion, which means the dilution is borne almost entirely by founders and existing shareholders before the new investor comes in. Post-money pool expansion shares the dilution across all shareholders including the new investor. Pre-money is investor-friendly; post-money is founder-friendly but harder to negotiate."
      }
    },
    {
      "@type": "Question",
      "name": "How much equity should each employee role receive at Seed stage?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Typical Seed-stage grants are: first 3–5 engineers 0.5–1% each, mid-level engineering or product hires 0.1–0.3%, VP-level functional heads 0.5–1.5%, and C-suite executives 1–3%. Grants shrink at each later stage as the company valuation rises. Always benchmark by role, seniority, and how critical the hire is to the next milestone."
      }
    },
    {
      "@type": "Question",
      "name": "How does ESOP pool creation dilute founders?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If founders hold 100% and a 10% pool is carved out pre-money, founder ownership drops to 90% even before any options are granted. If the pool is created at Series A pre-money along with a 20% investor stake, founders end up at about 72%. Without modelling these scenarios, founders often over-dilute themselves early and regret it at Series B or exit."
      }
    },
    {
      "@type": "Question",
      "name": "What is the legal process to create an ESOP pool in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under the Companies Act, 2013 the company must: pass a Board resolution approving the scheme, pass a Special Resolution of shareholders with explanatory statement, draft the ESOP scheme document with vesting and exercise terms, obtain a registered valuer's Fair Market Value report, file Form MGT-14 with the Registrar of Companies, and maintain Form SH-6 register of options granted."
      }
    },
    {
      "@type": "Question",
      "name": "What vesting schedule is standard for Indian ESOPs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The market standard is a four-year vest with a one-year cliff. No options vest in the first year. After 12 months, 25% vests in a single tranche, and the remaining 75% vests monthly or quarterly over the next 36 months. Some companies use 25–25–25–25 annual vesting or back-loaded 10–20–30–40 schedules for retention. Cliff and acceleration clauses must be drafted carefully."
      }
    },
    {
      "@type": "Question",
      "name": "How are ESOPs taxed for Indian employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ESOPs are taxed at two points. At exercise, the difference between Fair Market Value and exercise price is taxed as a salary perquisite under Section 17(2)(vi) of the Income-tax Act, 1961. At sale, any further gain is taxed as capital gains (short-term or long-term based on holding period). DPIIT-recognised eligible startups can defer the perquisite tax under Section 192(1C) for up to 48 months."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between authorised pool size and granted options?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Authorised pool is the total equity percentage reserved on the cap table for employee options — for example, 12% set aside for ESOPs. Granted options are the portion actually allotted to named employees through grant letters. Unallocated options sit in the pool waiting for future hires. Investors look at both numbers because a large pool with low utilisation signals weak hiring or unrealistic planning."
      }
    },
    {
      "@type": "Question",
      "name": "When should a startup expand its ESOP pool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Expand the pool when granted options have utilised 75–80% of the authorised pool, or when a new funding round triggers the next 18–24 month hiring plan. Most startups expand at Series A and again at Series B as headcount and seniority both increase. Pool expansion always requires fresh shareholder approval and a Board resolution under the Companies Act."
      }
    },
    {
      "@type": "Question",
      "name": "What mistakes do first-time founders make on ESOP pool sizing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The five most common mistakes are: creating no pool until investors demand it, over-granting 2–3% to early engineers without market benchmarks, building a pool with no hiring plan attached, ignoring refresh grants for early employees post-vesting, and not modelling dilution across multiple rounds. Each of these costs founders meaningful equity by the time of Series B or exit."
      }
    },
    {
      "@type": "Question",
      "name": "Do listed companies follow different ESOP rules in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Unlisted private companies follow the Companies Act, 2013 and Rule 12 of Companies (Share Capital and Debentures) Rules, 2014. Listed companies additionally follow the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations, 2021. Listed companies face stricter disclosure rules, mandatory trust route or direct route choice, and tighter pricing and vesting constraints than private companies."
      }
    },
    {
      "@type": "Question",
      "name": "Is this ESOP Pool Size Calculator a legal opinion?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. This calculator gives directional benchmarks based on Indian startup market data and standard role-grant practices. The actual pool size and grant policy for your company must consider your specific cap table, term sheet, investor preferences, FEMA rules for foreign employees, DPIIT recognition status, and Companies Act compliance. Always have a Chartered Accountant and Company Secretary review your final ESOP scheme."
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
body {
    font-family: var(--font-body);
    background: var(--surface);
    color: var(--text);
    line-height: 1.65;
    -webkit-font-smoothing: antialiased;
}

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

/* POST-RESULT CTA */
.post-result-cta { background: #FFF7ED; border: 1px solid #FED7AA; border-left: 4px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin: 20px 0 4px; }
.post-result-cta-head { font-size: 15px; font-weight: 700; color: var(--text); margin-bottom: 4px; line-height: 1.4; }
.post-result-cta-sub { font-size: 13px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.55; }
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

/* MID-BODY CTA */
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
@media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; } .calc-row.four-col { grid-template-columns: 1fr 1fr 1fr 1fr; } }
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

.toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
.toggle-btn { flex: 1; padding: 10px 14px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-height: 44px; }
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
.result-headline .value { font-family: var(--font-mono); font-size: 36px; font-weight: 700; line-height: 1; margin-bottom: 6px; word-break: break-word; }
.result-headline .accent { color: var(--accent-light); }
.result-headline .meta { font-size: 13px; opacity: 0.9; }

.variant-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 16px; }
@media (min-width: 600px) { .variant-grid { grid-template-columns: 1fr 1fr 1fr; } }
.variant-card { background: var(--surface); border-radius: var(--radius); padding: 16px 18px; border: 1px solid var(--border); }
.variant-card.balanced { border-color: var(--accent); background: #FFF7ED; }
.variant-card .v-label { font-family: var(--font-mono); font-size: 10px; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; font-weight: 700; margin-bottom: 4px; }
.variant-card .v-pct { font-family: var(--font-mono); font-size: 24px; font-weight: 700; color: var(--primary-dark); }
.variant-card .v-desc { font-size: 12px; color: var(--text-secondary); margin-top: 4px; line-height: 1.5; }

.dilution-section { background: var(--surface-alt); border-radius: var(--radius); padding: 18px 22px; margin-top: 16px; }
.dilution-section h4 { font-family: var(--font-mono); font-size: 11px; color: var(--accent); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px; font-weight: 700; }
.breakdown-row { display: flex; justify-content: space-between; align-items: center; padding: 8px 0; font-size: 14px; gap: 12px; }
.breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
.breakdown-label { color: var(--text-secondary); }
.breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); white-space: nowrap; }

.role-breakdown { background: #F6F8FC; border: 1px solid #DDE5EE; border-radius: var(--radius); padding: 16px 20px; margin-top: 14px; }
.role-breakdown h4 { font-family: var(--font-mono); font-size: 11px; color: var(--primary); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px; font-weight: 700; }

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
    .result-headline .value { font-size: 28px; }
}
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* REDUCED MOTION (WCAG 2.3.3) */
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* PRINT STYLESHEET */
@media print {
    .toc-nav, .brand-cta-bar, .post-result-cta, .body-cta, .cta-card, .sidebar-col, .btn-reset, .btn-print, .btn-calculate, .office-strip, .footer, .breadcrumb { display: none !important; }
    body { background: #fff; color: #000; font-size: 11pt; }
    .main-layout { grid-template-columns: 1fr; padding: 0; max-width: 100%; }
    .calc-card, .content-section { box-shadow: none; border: 1px solid #ccc; page-break-inside: avoid; padding: 16px; margin-bottom: 16px; }
    .result-headline { background: #15365f !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
    .variant-card.balanced { background: #FFF7ED !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
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
        <a href="#benchmarks">Stage Benchmarks</a>
        <a href="#role-grants">Role Grants</a>
        <a href="#dilution">Dilution Math</a>
        <a href="#legal">Legal Process</a>
        <a href="#taxation">Taxation</a>
        <a href="#mistakes">Common Mistakes</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<!-- BREADCRUMB -->
<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP Pool Size Calculator
</nav>

<!-- HERO -->
<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 14 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP Pool Sizing Calculator — <span>Hiring Plan & Dilution %</span></h1>
</header>

<!-- PEACH CTA TOP BAR -->
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Sizing your first ESOP pool? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20ESOP%20Pool%20Size%20Calculator%20and%20need%20help%20designing%20our%20ESOP%20scheme%20and%20Companies%20Act%20filings." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Pool%20Design%20%26%20Implementation%20Help&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20ESOP%20Pool%20Size%20Calculator%20on%20your%20website.%20I%27d%20like%20help%20with%3A%0A%0A-%20Pool%20sizing%20and%20cap-table%20modelling%0A-%20Companies%20Act%20%2F%20SH-6%20documentation%0A-%20Registered%20valuer%20FMV%20report%0A-%20ESOP%20scheme%20drafting%0A%0AOur%20stage%3A%20%0AOur%20team%20size%3A%20%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<!-- TL;DR -->
<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The right ESOP pool size depends on your funding stage and 18-month hiring plan, not a fixed percentage. Indian startups typically run 8–12% at Seed, 10–15% at Series A, 12–18% at Series B, and 14–20% at Series C+. This calculator models your pool size against role-by-role grant benchmarks, produces founder-friendly and employee-friendly variants, and shows founder dilution before and after the next funding round.</p>
</div>

<!-- MAIN LAYOUT -->
<div class="main-layout">

<div class="content-col">

<!-- CALCULATOR -->
<div class="calc-card">
    <h2>ESOP Pool Size Calculator</h2>
    <p class="sub">Enter your stage, team, and planned hires. The calculator returns a recommended pool size, three variants, and a founder dilution scenario.</p>
    <noscript>
        <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript to use the tool.</div>
    </noscript>

    <div class="error-banner" id="errorBanner" role="alert" aria-live="polite"></div>

    <div class="section-title">Stage & Existing Cap Table</div>
    <div class="calc-row">
        <div class="form-group">
            <label for="stage">Funding Stage</label>
            <select id="stage" autocomplete="off">
                <option value="seed">Seed / Pre-Series A</option>
                <option value="seriesA" selected>Series A</option>
                <option value="seriesB">Series B</option>
                <option value="seriesC">Series C / Growth</option>
            </select>
        </div>
        <div class="form-group">
            <label for="teamSize">Current Team Size <span class="hint">Total employees today</span></label>
            <input type="number" id="teamSize" placeholder="e.g. 12" min="1" max="5000" step="1" value="12" autocomplete="off">
        </div>
    </div>
    <div class="calc-row">
        <div class="form-group">
            <label for="foundersPct">Founders' Combined Stake (%) <span class="hint">Before this round, after existing pool</span></label>
            <input type="text" id="foundersPct" inputmode="decimal" placeholder="e.g. 80" autocomplete="off" value="80">
        </div>
        <div class="form-group">
            <label for="existingPool">Existing ESOP Pool (%) <span class="hint">0 if not yet created</span></label>
            <input type="text" id="existingPool" inputmode="decimal" placeholder="e.g. 5" autocomplete="off" value="5">
        </div>
    </div>

    <div class="section-title">Planned Hires — Next 18 Months</div>
    <div class="calc-row four-col">
        <div class="form-group">
            <label for="hireEng">Engineering</label>
            <input type="number" id="hireEng" placeholder="0" min="0" max="500" step="1" value="8" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="hireProd">Product / Design</label>
            <input type="number" id="hireProd" placeholder="0" min="0" max="500" step="1" value="3" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="hireSales">Sales / GTM</label>
            <input type="number" id="hireSales" placeholder="0" min="0" max="500" step="1" value="4" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="hireExec">Exec / Leadership</label>
            <input type="number" id="hireExec" placeholder="0" min="0" max="50" step="1" value="2" autocomplete="off">
        </div>
    </div>

    <div class="section-title">Pool Philosophy</div>
    <div class="form-group" style="margin-bottom: 20px;">
        <label>Headline Recommendation Mode</label>
        <div class="toggle-group" role="group" aria-label="Pool philosophy mode">
            <button type="button" class="toggle-btn" data-mode="founder" onclick="setMode(this)">Founder-friendly<br><small style="font-weight:400;font-size:11px;opacity:0.7">Lower end</small></button>
            <button type="button" class="toggle-btn active" data-mode="balanced" onclick="setMode(this)">Balanced<br><small style="font-weight:400;font-size:11px;opacity:0.7">Recommended</small></button>
            <button type="button" class="toggle-btn" data-mode="employee" onclick="setMode(this)">Employee-friendly<br><small style="font-weight:400;font-size:11px;opacity:0.7">Higher end</small></button>
        </div>
    </div>

    <div class="section-title">Round Modelling (Optional)</div>
    <div class="calc-row">
        <div class="form-group">
            <label for="preMoney">Pre-Money Valuation (₹ Cr) <span class="hint">Optional — for dilution math</span></label>
            <input type="text" id="preMoney" inputmode="decimal" placeholder="e.g. 40" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="raiseAmt">Round Size to Raise (₹ Cr) <span class="hint">Optional — fresh primary</span></label>
            <input type="text" id="raiseAmt" inputmode="decimal" placeholder="e.g. 12" autocomplete="off">
        </div>
    </div>

    <button class="btn-calculate" onclick="calculate()" type="button">Recommend Pool Size</button>

    <!-- RESULTS -->
    <div class="result-section" id="resultSection" aria-live="polite">
        <div class="result-divider"></div>

        <div class="result-headline">
            <div class="label">Recommended ESOP Pool</div>
            <div class="value" id="resHeadline">—</div>
            <div class="meta" id="resHeadlineMeta">—</div>
        </div>

        <div class="variant-grid">
            <div class="variant-card">
                <div class="v-label">Founder-Friendly</div>
                <div class="v-pct" id="resFounder">—</div>
                <div class="v-desc">Lower end of stage benchmark — minimises founder dilution but may strain senior hiring.</div>
            </div>
            <div class="variant-card balanced">
                <div class="v-label">Balanced (Mid)</div>
                <div class="v-pct" id="resBalanced">—</div>
                <div class="v-desc">Market median for your stage and hiring plan — what most Indian VCs expect to see.</div>
            </div>
            <div class="variant-card">
                <div class="v-label">Employee-Friendly</div>
                <div class="v-pct" id="resEmployee">—</div>
                <div class="v-desc">Higher end — better for aggressive senior hiring and retention through refresh grants.</div>
            </div>
        </div>

        <div class="dilution-section">
            <h4>Pool Sizing Logic</h4>
            <div class="breakdown-row"><span class="breakdown-label">Stage benchmark range</span><span class="breakdown-value" id="resBenchmark">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label">Hiring-plan modelled pool</span><span class="breakdown-value" id="resModelled">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label">Already granted / existing pool</span><span class="breakdown-value" id="resExisting">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label">Top-up needed (recommended)</span><span class="breakdown-value" id="resTopUp">—</span></div>
        </div>

        <div class="role-breakdown" id="roleBreakdownSection">
            <h4>Role-by-Role Equity Required</h4>
            <div class="breakdown-row"><span class="breakdown-label" id="rbEngLabel">Engineering — × hires @ avg</span><span class="breakdown-value" id="rbEng">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label" id="rbProdLabel">Product / Design — × hires @ avg</span><span class="breakdown-value" id="rbProd">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label" id="rbSalesLabel">Sales / GTM — × hires @ avg</span><span class="breakdown-value" id="rbSales">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label" id="rbExecLabel">Exec / Leadership — × hires @ avg</span><span class="breakdown-value" id="rbExec">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label">Buffer for refresh / unplanned (25%)</span><span class="breakdown-value" id="rbBuffer">—</span></div>
        </div>

        <div class="dilution-section" id="dilutionSection" style="display:none;">
            <h4>Founder Dilution Scenario</h4>
            <div class="breakdown-row"><span class="breakdown-label">Founders today (pre-round, pre top-up)</span><span class="breakdown-value" id="dilNow">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label">After pool top-up (pre-money)</span><span class="breakdown-value" id="dilAfterPool">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label">After new investor round</span><span class="breakdown-value" id="dilAfterRound">—</span></div>
            <div class="breakdown-row"><span class="breakdown-label">Total founder dilution this round</span><span class="breakdown-value" id="dilTotal">—</span></div>
        </div>

        <!-- POST-RESULT CTA -->
        <div class="post-result-cta">
            <div class="post-result-cta-head">Want a CA to review this pool size before your term sheet is signed?</div>
            <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — pool sizing, Companies Act compliance, Form MGT-14 + SH-6 documentation, FMV valuation. No obligation.</div>
            <div class="brand-cta-bar-actions">
                <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
                    <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    +91 945 945 6700
                </a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20just%20ran%20the%20ESOP%20Pool%20Size%20Calculator%20and%20need%20a%20CA%20to%20review%20our%20pool%20design%20before%20signing%20the%20term%20sheet." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener">
                    <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                    WhatsApp
                </a>
                <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Pool%20Review%20Request&body=Hi%2C%0A%0AI%20just%20ran%20the%20ESOP%20Pool%20Size%20Calculator.%20Please%20review%20our%20proposed%20pool%20design.%0A%0AStage%3A%20%0ATeam%20size%3A%20%0ARecommended%20pool%3A%20%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
                    <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    Email
                </a>
            </div>
        </div>

        <button class="btn-reset" onclick="resetCalc()" type="button">↺ Reset</button>
        <button class="btn-print" onclick="window.print()" type="button">🖨 Download / Print Working</button>
    </div>
</div>

<!-- HOW TO USE -->
<section class="content-section" id="how-to-use">
    <h2>How to Use the ESOP Pool Size Calculator</h2>
    <ol>
        <li><strong>Pick your funding stage.</strong> Seed, Series A, Series B, or Series C+. The stage anchors the benchmark range and the per-role grant percentages.</li>
        <li><strong>Enter your current team size.</strong> Total full-time headcount today, including founders.</li>
        <li><strong>Enter founders' combined stake and existing ESOP pool.</strong> If you haven't created a pool yet, enter zero. The calculator uses these to model dilution.</li>
        <li><strong>List planned hires for the next 18 months.</strong> Split by Engineering, Product/Design, Sales/GTM, and Exec/Leadership. These four categories cover ~95% of typical startup hiring plans.</li>
        <li><strong>Pick a pool philosophy.</strong> Founder-friendly anchors at the lower end of the benchmark; balanced is the market median; employee-friendly is for aggressive senior hiring.</li>
        <li><strong>Optionally enter pre-money valuation and round size</strong> to see founder dilution before and after the round.</li>
        <li><strong>Click Recommend Pool Size.</strong> You'll get three pool variants, role-by-role equity needed, and a printable working sheet you can take to your board or term-sheet negotiation.</li>
    </ol>
</section>

<!-- BENCHMARKS -->
<section class="content-section" id="benchmarks">
    <h2>ESOP Pool Size Benchmarks for Indian Startups</h2>
    <p>The right ESOP pool size depends on three factors: your funding stage, your 18–24 month hiring plan, and the dilution founders are willing to take. There is no single "ideal" percentage. The benchmarks below come from <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">DPIIT-recognised startup</a> norms, Indian VC term-sheet practice, and surveys by Indian equity-management platforms.</p>

    <h3>Stage-Wise Benchmark Pool Sizes (India, 2026)</h3>
    <table class="rate-table">
        <thead>
            <tr><th>Funding Stage</th><th>Low</th><th>Median</th><th>High</th><th>Typical Use</th></tr>
        </thead>
        <tbody>
            <tr><td>Seed / Pre-Series A</td><td>8%</td><td>11%</td><td>14%</td><td>First 10–20 senior hires, founding engineers</td></tr>
            <tr><td>Series A</td><td>10%</td><td>13%</td><td>16%</td><td>Functional heads, expansion hiring</td></tr>
            <tr><td>Series B</td><td>12%</td><td>16%</td><td>20%</td><td>Senior leadership, refresh grants, executive packages</td></tr>
            <tr><td>Series C / Growth</td><td>14%</td><td>18%</td><td>22%</td><td>C-suite, pre-IPO retention, broad-based grants</td></tr>
        </tbody>
    </table>

    <p>Indian startups historically run lower than US peers — Series A and B Indian companies often operate at 6–10% pool sizes vs 15% in the US, which can hurt senior hiring competitiveness. The trade-off between founder dilution and talent attraction is real. Investors and term-sheet negotiations almost always push the pool toward the median or higher end before the round closes.</p>

    <div class="callout">
        <p><strong>CA Tip:</strong> The pool size and the equity granted are inversely proportional to company valuation. A 15% pool at Seed represents a much smaller cash-equivalent than a 6% pool at Series C. Always benchmark against absolute rupee value to the employee, not just headline percentage.</p>
    </div>

    <h3>Patron Accounting Recommended Bands</h3>
    <p>Based on advising Indian founders across Pune, Mumbai, Delhi, and Gurugram, our practical bands for the typical SaaS / B2C / D2C startup are:</p>
    <ul>
        <li><strong>Bootstrap / Pre-Seed:</strong> 5–8% (modest pool for founding team only)</li>
        <li><strong>Seed:</strong> 10–12% (covers next 15–20 key hires over 18 months)</li>
        <li><strong>Series A:</strong> 12–15% (VP-level functional heads + mid-level expansion)</li>
        <li><strong>Series B+:</strong> 15–20% (executive packages + refresh grants)</li>
    </ul>
</section>

<!-- ROLE GRANTS -->
<section class="content-section" id="role-grants">
    <h2>Role-by-Role ESOP Grant Benchmarks</h2>
    <p>Pool size matters only because of what you grant from it. Below are average per-employee grant percentages by role and stage — what Indian startup operators actually offer in offer letters in 2026. Senior hires command larger grants because they take more risk and contribute more value at early stages.</p>

    <table class="rate-table">
        <thead>
            <tr><th>Role</th><th>Seed</th><th>Series A</th><th>Series B</th><th>Series C</th></tr>
        </thead>
        <tbody>
            <tr><td>Engineer (Senior)</td><td>0.40–0.80%</td><td>0.20–0.40%</td><td>0.10–0.20%</td><td>0.05–0.10%</td></tr>
            <tr><td>Engineer (Mid)</td><td>0.10–0.25%</td><td>0.07–0.18%</td><td>0.04–0.10%</td><td>0.02–0.05%</td></tr>
            <tr><td>Engineer (Junior)</td><td>0.03–0.08%</td><td>0.02–0.05%</td><td>0.01–0.03%</td><td>0.005–0.02%</td></tr>
            <tr><td>Product Manager (Mid–Senior)</td><td>0.20–0.40%</td><td>0.15–0.30%</td><td>0.08–0.15%</td><td>0.04–0.08%</td></tr>
            <tr><td>Sales Account Executive</td><td>0.15–0.30%</td><td>0.10–0.20%</td><td>0.05–0.10%</td><td>0.02–0.05%</td></tr>
            <tr><td>VP Sales / VP Eng / VP Product</td><td>0.80–1.50%</td><td>0.50–1.00%</td><td>0.25–0.50%</td><td>0.12–0.25%</td></tr>
            <tr><td>C-Suite Hire (CTO, CPO, CRO)</td><td>1.50–3.00%</td><td>1.00–2.00%</td><td>0.50–1.00%</td><td>0.25–0.50%</td></tr>
        </tbody>
    </table>

    <p>This calculator uses the midpoint of each band by default. Adjust upward for star hires, mission-critical roles, or hires you're poaching from a competitor — and downward for hires where the brand or product itself is the draw.</p>

    <h3>Pool Sizing Formula</h3>
    <div class="formula-box">
<span class="label">Modelled Pool</span> = Σ (hires_by_role × avg_grant_per_role) + 25% buffer<br>
<span class="label">Recommended Pool</span> = max( Modelled Pool, Stage Benchmark Median )<br>
<span class="label">Top-Up Needed</span> = Recommended Pool − Existing Pool
    </div>

    <p>The 25% buffer covers unplanned hires, refresh grants for early employees crossing their four-year vest, and headroom for off-cycle promotions. Without a buffer, most pools run out 9–12 months before the next funding round, forcing a mid-cycle top-up that costs more founder equity than planning ahead.</p>
</section>

<!-- MID-BODY CTA -->
<div class="body-cta">
    <h3>Need Help Designing & Filing Your ESOP Scheme?</h3>
    <p>Patron Accounting LLP supports Indian startups with end-to-end ESOP work — pool sizing, scheme drafting, Form MGT-14 + SH-6 filings, registered valuer FMV report, and DPIIT deferral planning. Pune, Mumbai, Delhi, Gurugram and pan-India.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20we%20need%20help%20designing%20our%20ESOP%20scheme%20and%20handling%20Companies%20Act%20filings%20%28MGT-14%2C%20SH-6%29." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Scheme%20Design%20%26%20MCA%20Filings&body=Hi%20Patron%20Accounting%2C%0A%0AWe%27d%20like%20help%20with%20ESOP%20scheme%20design%20and%20Companies%20Act%20filings.%0A%0AStage%3A%20%0ATeam%20size%3A%20%0AProposed%20pool%3A%20%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

<!-- DILUTION -->
<section class="content-section" id="dilution">
    <h2>How ESOP Pool Creation Dilutes Founders</h2>
    <p>Most founders underestimate how much equity ESOP pool creation costs them — especially when investors insist the pool be carved out <em>pre-money</em>. Understanding this math is critical before signing a term sheet.</p>

    <h3>Pre-Money vs Post-Money Pool: The Crucial Distinction</h3>
    <p><strong>Pre-money pool expansion:</strong> The pool is created (or expanded) <em>before</em> the new investor's money goes in. This means the dilution falls entirely on founders and existing shareholders. Investors get their target percentage after the pool is already in place, so they're not diluted by the pool. <strong>This is what most Indian VCs insist on.</strong></p>

    <p><strong>Post-money pool expansion:</strong> The pool is created <em>after</em> the round closes. Dilution is shared across all shareholders, including the new investor. This is founder-friendly but rarely accepted unless founders have strong negotiating leverage.</p>

    <h3>Worked Example: Series A Pool Expansion</h3>
    <div class="formula-box">
<span class="label">Before round:</span> Founders 80%, Existing Pool 5%, Existing Investors 15%<br>
<span class="label">Series A ask:</span> ₹15 Cr at ₹60 Cr pre-money (post-money ₹75 Cr → investor gets 20%)<br>
<span class="label">Pool top-up:</span> Pool expanded to 12% pre-money (add 7%)<br>
<br>
<span class="label">Step 1 — Pool top-up (pre-money):</span><br>
   Founders × (1 − 7%) = 80% × 0.93 = <strong>74.4%</strong><br>
<br>
<span class="label">Step 2 — Series A investor 20% post-money:</span><br>
   Founders × (1 − 20%) = 74.4% × 0.80 = <strong>59.5%</strong><br>
<br>
<span class="label">Total founder dilution this round:</span> 80% → 59.5% = <strong>20.5 percentage points</strong>
    </div>

    <div class="callout warn">
        <p><strong>Note:</strong> If the same Series A used a <em>post-money</em> pool, founders would have dropped to roughly 64% instead of 59.5%. That 4.5 percentage point gap on a ₹500 Cr exit is ₹22.5 Cr of founder value — which is why negotiating pool structure matters.</p>
    </div>

    <h3>Investor Logic for Pre-Money Pools</h3>
    <p>VCs want a "fully diluted" cap table at the point they invest. Including a fresh pool pre-money means their 20% stake is calculated against a denominator that already accounts for the next 18 months of ESOP grants. This way, the pool fund-raise dilutes the founders, not the VC. From the investor's view, this is rational risk management. From the founder's view, it's a real cost — but one that can be mitigated by sizing the pool against an honest hiring plan, not an inflated one.</p>
</section>

<!-- LEGAL -->
<section class="content-section" id="legal">
    <h2>Legal Process to Create an ESOP Pool in India</h2>
    <p>Indian private companies create ESOP pools under <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Section 62(1)(b) of the Companies Act, 2013</a> and Rule 12 of Companies (Share Capital and Debentures) Rules, 2014. Listed companies follow additional <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> (Share Based Employee Benefits and Sweat Equity) Regulations, 2021.</p>

    <h3>Step-by-Step Compliance Checklist</h3>
    <ol>
        <li><strong>Board resolution.</strong> The board approves the ESOP scheme, pool size, vesting schedule, and exercise terms. Record minutes per <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> Secretarial Standard SS-1.</li>
        <li><strong>Draft the ESOP scheme document.</strong> Covers eligibility, vesting (typical: 4-year vest with 1-year cliff), exercise price, exercise period, cessation provisions, accelerated vesting on change of control, and clawback clauses.</li>
        <li><strong>Special Resolution by shareholders.</strong> Pass with explanatory statement disclosing pool size, methodology, classes of employees covered, exercise pricing, valuation method, and lock-in.</li>
        <li><strong>Obtain Registered Valuer FMV report.</strong> Mandatory for tax purposes under Section 17(2)(vi) of the Income-tax Act, 1961. Fresh valuation needed at each grant date.</li>
        <li><strong>File Form MGT-14 with ROC.</strong> Within 30 days of the special resolution, file with the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Registrar of Companies</a> via the MCA portal.</li>
        <li><strong>Maintain Form SH-6 register.</strong> Statutory register of employee stock options — track every grant, vesting milestone, exercise, and forfeiture.</li>
        <li><strong>File PAS-3 on exercise.</strong> Return of allotment within 30 days of every share allotment from option exercise.</li>
        <li><strong>Annual disclosures.</strong> Director's report must disclose ESOP details under Rule 12(9) — options granted, vested, exercised, lapsed, money realised, and variation in terms.</li>
    </ol>

    <h3>Eligibility & Exclusions Under Rule 12</h3>
    <p>ESOPs can be issued to permanent employees in India or abroad, directors (excluding independent directors), and employees of subsidiaries or holding companies. They <strong>cannot</strong> be issued to promoters or any director who directly or indirectly holds more than 10% of equity (with relaxation for startups recognised by DPIIT for the first 10 years from incorporation under <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> notification).</p>

    <div class="callout">
        <p><strong>CA Tip:</strong> Get your ESOP scheme drafted by a Company Secretary in coordination with a Chartered Accountant who handles the valuation and tax structuring. The scheme document is filed with MCA and binds future grants — drafting errors are expensive to fix later. Patron Accounting offers <a href="/esop-services">end-to-end ESOP services</a> including scheme drafting, FMV valuation, and ROC filings.</p>
    </div>
</section>

<!-- TAXATION -->
<section class="content-section" id="taxation">
    <h2>ESOP Taxation for Indian Employees</h2>
    <p>ESOPs are taxed at <strong>two distinct points</strong> in India under the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income-tax Act, 1961</a>. Understanding this two-stage taxation is essential before granting options — and before employees exercise them.</p>

    <h3>Stage 1: Tax at Exercise (Perquisite)</h3>
    <p>When an employee exercises vested options, the difference between the Fair Market Value (FMV) on the date of exercise and the exercise price paid is treated as a <strong>perquisite</strong> taxed as salary income under Section 17(2)(vi). The employer withholds TDS under Section 192. This applies regardless of whether the employee sells the shares.</p>

    <div class="formula-box">
<span class="label">Perquisite Value</span> = (FMV per share on exercise date − Exercise Price) × No. of shares exercised<br>
<span class="label">Tax</span> = Perquisite × Employee's applicable income tax slab rate
    </div>

    <h3>Stage 2: Tax at Sale (Capital Gains)</h3>
    <p>When the employee subsequently sells the shares, any further gain (sale price minus FMV at exercise) is taxed as capital gains:</p>
    <ul>
        <li><strong>Unlisted shares:</strong> Long-term if held &gt;24 months (taxed at 12.5% under Finance Act, 2024), otherwise short-term at slab rate</li>
        <li><strong>Listed shares (post-IPO):</strong> Long-term if held &gt;12 months (10% above ₹1.25 lakh under Section 112A), otherwise short-term at 20%</li>
    </ul>

    <h3>DPIIT Startup Deferral Benefit (Section 192(1C))</h3>
    <p>Employees of <strong>eligible startups recognised by DPIIT</strong> can defer the perquisite tax under Section 192(1C). The deferral applies until the earliest of: 48 months from end of relevant assessment year, sale of shares, or cessation of employment. This is a major liquidity advantage for early-stage startup employees who often can't fund the perquisite tax in cash before any liquidity event.</p>

    <div class="callout warn">
        <p><strong>Note:</strong> The DPIIT deferral applies <em>only</em> to eligible startups (turnover under ₹100 Cr, less than 10 years from incorporation, DPIIT-certified). Verify your DPIIT status before promising this benefit in offer letters.</p>
    </div>
</section>

<!-- MISTAKES -->
<section class="content-section" id="mistakes">
    <h2>Five Common ESOP Pool Mistakes Indian Founders Make</h2>

    <h3>Mistake 1: Creating the pool only when investors demand it</h3>
    <p>Many first-time founders skip ESOP setup until a VC's term sheet forces a pool expansion at Series A. By then, the pool top-up dilutes founders far more than if it had been created earlier. Set up a modest 5–8% pool at incorporation or first angel round, even before you need it.</p>

    <h3>Mistake 2: Over-granting to the first few engineers</h3>
    <p>Giving the first engineer 2% "because they're employee #1" sets a precedent you can't sustain. If five early hires each get 2%, that's 10% gone before product-market fit. Follow the role-grant benchmark table — first engineering hires at Seed should get 0.5–1%, not 2–3%.</p>

    <h3>Mistake 3: No hiring plan attached to the pool</h3>
    <p>Pool size without a hiring plan is guessing. Build a role-by-role 18-month hiring plan, multiply by average grants, add a 25% buffer — that's your modelled pool. Compare to stage benchmark and pick the higher of the two.</p>

    <h3>Mistake 4: Ignoring refresh grants</h3>
    <p>Early employees finishing their 4-year vest in years 4–5 lose their incentive to stay. Without refresh grants, your best people leave for competitors. Reserve 20–30% of pool capacity for refresh grants, not just new-hire grants.</p>

    <h3>Mistake 5: Not modelling multi-round dilution</h3>
    <p>A 12% pool at Series A doesn't stay 12% by Series C. Each subsequent round dilutes everyone proportionally, including the pool. Plan to top up at every funding round and model the impact on founder ownership across at least three rounds before signing the first term sheet.</p>
</section>

<!-- FAQ -->
<section class="content-section" id="faqs">
    <h2>Frequently Asked Questions About ESOP Pool Sizing</h2>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>What is an ESOP pool and why do Indian startups create one?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">An ESOP pool is a block of company equity that founders reserve specifically for employee stock options. Indian private companies create it under Section 62(1)(b) of the Companies Act, 2013 and Rule 12 of Companies (Share Capital and Debentures) Rules, 2014. It lets startups attract senior talent when cash salaries are limited and aligns employees with long-term company growth.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>What is the ideal ESOP pool size for Indian startups by funding stage?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">Standard Indian benchmarks are 8–12% at Seed, 10–15% at Series A, 12–18% at Series B, and 14–20% at Series C and beyond. Most Indian startups operate at the lower end of these ranges compared to US peers. The correct size depends on your 18–24 month hiring plan, role mix, and how much founder dilution is acceptable.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>Should the ESOP pool be created pre-money or post-money?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">Most Indian VCs insist on a pre-money pool expansion, which means the dilution is borne almost entirely by founders and existing shareholders before the new investor comes in. Post-money pool expansion shares the dilution across all shareholders including the new investor. Pre-money is investor-friendly; post-money is founder-friendly but harder to negotiate.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>How much equity should each employee role receive at Seed stage?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">Typical Seed-stage grants are: first 3–5 engineers 0.5–1% each, mid-level engineering or product hires 0.1–0.3%, VP-level functional heads 0.5–1.5%, and C-suite executives 1–3%. Grants shrink at each later stage as the company valuation rises. Always benchmark by role, seniority, and how critical the hire is to the next milestone.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>How does ESOP pool creation dilute founders?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">If founders hold 100% and a 10% pool is carved out pre-money, founder ownership drops to 90% even before any options are granted. If the pool is created at Series A pre-money along with a 20% investor stake, founders end up at about 72%. Without modelling these scenarios, founders often over-dilute themselves early and regret it at Series B or exit.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>What is the legal process to create an ESOP pool in India?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">Under the Companies Act, 2013 the company must: pass a Board resolution approving the scheme, pass a Special Resolution of shareholders with explanatory statement, draft the ESOP scheme document with vesting and exercise terms, obtain a registered valuer's Fair Market Value report, file Form MGT-14 with the Registrar of Companies, and maintain Form SH-6 register of options granted.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>What vesting schedule is standard for Indian ESOPs?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">The market standard is a four-year vest with a one-year cliff. No options vest in the first year. After 12 months, 25% vests in a single tranche, and the remaining 75% vests monthly or quarterly over the next 36 months. Some companies use 25–25–25–25 annual vesting or back-loaded 10–20–30–40 schedules for retention. Cliff and acceleration clauses must be drafted carefully.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>How are ESOPs taxed for Indian employees?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">ESOPs are taxed at two points. At exercise, the difference between Fair Market Value and exercise price is taxed as a salary perquisite under Section 17(2)(vi) of the Income-tax Act, 1961. At sale, any further gain is taxed as capital gains (short-term or long-term based on holding period). DPIIT-recognised eligible startups can defer the perquisite tax under Section 192(1C) for up to 48 months.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>What is the difference between authorised pool size and granted options?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">Authorised pool is the total equity percentage reserved on the cap table for employee options — for example, 12% set aside for ESOPs. Granted options are the portion actually allotted to named employees through grant letters. Unallocated options sit in the pool waiting for future hires. Investors look at both numbers because a large pool with low utilisation signals weak hiring or unrealistic planning.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>When should a startup expand its ESOP pool?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">Expand the pool when granted options have utilised 75–80% of the authorised pool, or when a new funding round triggers the next 18–24 month hiring plan. Most startups expand at Series A and again at Series B as headcount and seniority both increase. Pool expansion always requires fresh shareholder approval and a Board resolution under the Companies Act.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>What mistakes do first-time founders make on ESOP pool sizing?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">The five most common mistakes are: creating no pool until investors demand it, over-granting 2–3% to early engineers without market benchmarks, building a pool with no hiring plan attached, ignoring refresh grants for early employees post-vesting, and not modelling dilution across multiple rounds. Each of these costs founders meaningful equity by the time of Series B or exit.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>Do listed companies follow different ESOP rules in India?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. Unlisted private companies follow the Companies Act, 2013 and Rule 12 of Companies (Share Capital and Debentures) Rules, 2014. Listed companies additionally follow the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations, 2021. Listed companies face stricter disclosure rules, mandatory trust route or direct route choice, and tighter pricing and vesting constraints than private companies.</div></div>
    </div>

    <div class="faq-item">
        <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
            <span>Is this ESOP Pool Size Calculator a legal opinion?</span>
            <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer"><div class="faq-answer-inner">No. This calculator gives directional benchmarks based on Indian startup market data and standard role-grant practices. The actual pool size and grant policy for your company must consider your specific cap table, term sheet, investor preferences, FEMA rules for foreign employees, DPIIT recognition status, and Companies Act compliance. Always have a Chartered Accountant and Company Secretary review your final ESOP scheme.</div></div>
    </div>
</section>

</div><!-- /content-col -->

<!-- SIDEBAR -->
<aside class="sidebar-col">
    <div class="cta-card">
        <h3>Need ESOP Help, Fixed-Fee?</h3>
        <p>Pool sizing, scheme drafting, MGT-14 + SH-6 filings, registered valuer FMV report, DPIIT deferral planning — handled end-to-end.</p>
        <div class="brand-cta-stack">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20our%20ESOP%20scheme%20design%20and%20Companies%20Act%20filings." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Scheme%20Help&body=Hi%2C%20we%27d%20like%20a%20fixed-fee%20quote%20for%20ESOP%20scheme%20design%20and%20MCA%20filings.%0A%0AStage%3A%20%0ATeam%3A%20%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>

    <div class="sidebar-card">
        <h3>Related Services</h3>
        <a href="/esop-services" class="sidebar-link">ESOP Services Hub <span class="arrow">→</span></a>
        <a href="/esop-valuation-services" class="sidebar-link">ESOP Valuation Services <span class="arrow">→</span></a>
        <a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Management & Compliance <span class="arrow">→</span></a>
        <a href="/issue-of-shares" class="sidebar-link">Issue of Shares <span class="arrow">→</span></a>
        <a href="/private-limited-company-registration-in-india" class="sidebar-link">Private Limited Registration <span class="arrow">→</span></a>
        <a href="/startup-registration" class="sidebar-link">Startup India Registration <span class="arrow">→</span></a>
    </div>

    <div class="sidebar-card">
        <h3>Related Tools</h3>
        <a href="/tools/company-registration-cost-calculator" class="sidebar-link">Company Registration Cost <span class="arrow">→</span></a>
        <a href="/tools/business-structure-comparison" class="sidebar-link">Pvt Ltd vs LLP vs OPC <span class="arrow">→</span></a>
        <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Salary <span class="arrow">→</span></a>
        <a href="/tools/payroll-cost-calculator" class="sidebar-link">Payroll Cost Calculator <span class="arrow">→</span></a>
        <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator <span class="arrow">→</span></a>
        <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
    </div>

    <div class="sidebar-card">
        <h3>From the Blog</h3>
        <a href="/blog/share-transfer-procedure-in-private-limited-company-a-complete-guide" class="sidebar-link">ESOP in Private Limited Company <span class="arrow">→</span></a>
        <a href="/blog/authorized-capital-vs-paid-up-capital-meaning-differences-and-share-capital-structure-explained" class="sidebar-link">Authorized vs Paid-Up Capital <span class="arrow">→</span></a>
        <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
    </div>
</aside>

</div><!-- /main-layout -->

<!-- OFFICE STRIP -->
<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<!-- FOOTER (rights-only per Patron tool-page rule) -->
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
// ========== parseINR utility ==========
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

// ========== Mode toggle ==========
let currentMode = 'balanced';
function setMode(btn) {
    const el = btn.closest ? (btn.closest('.toggle-btn') || btn) : btn;
    currentMode = el.dataset.mode;
    el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
    // If results already rendered, recompute headline
    const section = document.getElementById('resultSection');
    if (section && section.classList.contains('visible')) {
        calculate(true);
    }
}

// ========== Stage benchmarks (India 2026) ==========
const STAGE = {
    seed:    { name: 'Seed / Pre-Series A', low: 8,  mid: 11, high: 14 },
    seriesA: { name: 'Series A',            low: 10, mid: 13, high: 16 },
    seriesB: { name: 'Series B',            low: 12, mid: 16, high: 20 },
    seriesC: { name: 'Series C / Growth',   low: 14, mid: 18, high: 22 }
};

// Average % grant per hire by role, by stage
const ROLE_GRANTS = {
    seed:    { eng: 0.25, prod: 0.30, sales: 0.40, exec: 1.20 },
    seriesA: { eng: 0.18, prod: 0.22, sales: 0.30, exec: 0.80 },
    seriesB: { eng: 0.10, prod: 0.12, sales: 0.18, exec: 0.40 },
    seriesC: { eng: 0.05, prod: 0.06, sales: 0.09, exec: 0.20 }
};

// ========== Validation ==========
function showError(msg) {
    const banner = document.getElementById('errorBanner');
    banner.textContent = msg;
    banner.classList.add('visible');
    setTimeout(() => banner.classList.remove('visible'), 6000);
}

// ========== Main calculation ==========
function calculate(silent) {
    const stageKey = document.getElementById('stage').value;
    const stage = STAGE[stageKey];
    const grants = ROLE_GRANTS[stageKey];

    const teamSize  = parseINR(document.getElementById('teamSize').value);
    const founders  = parseINR(document.getElementById('foundersPct').value);
    const existing  = parseINR(document.getElementById('existingPool').value);
    const hireEng   = parseINR(document.getElementById('hireEng').value);
    const hireProd  = parseINR(document.getElementById('hireProd').value);
    const hireSales = parseINR(document.getElementById('hireSales').value);
    const hireExec  = parseINR(document.getElementById('hireExec').value);
    const preMoney  = parseINR(document.getElementById('preMoney').value);
    const raiseAmt  = parseINR(document.getElementById('raiseAmt').value);

    // Validation
    if (!isFinite(teamSize) || teamSize < 1) { showError('Enter a valid current team size (≥1).'); return; }
    if (!isFinite(founders) || founders <= 0 || founders > 100) { showError('Founders\' stake must be between 0 and 100 percent.'); return; }
    const existingVal = isFinite(existing) && existing >= 0 ? existing : 0;
    if (existingVal > 50) { showError('Existing pool above 50% is unusual — please double-check.'); return; }
    if (founders + existingVal > 100) { showError('Founders + existing pool cannot exceed 100%.'); return; }
    const eEng  = isFinite(hireEng)  && hireEng  >= 0 ? hireEng  : 0;
    const eProd = isFinite(hireProd) && hireProd >= 0 ? hireProd : 0;
    const eSal  = isFinite(hireSales)&& hireSales>= 0 ? hireSales: 0;
    const eExe  = isFinite(hireExec) && hireExec >= 0 ? hireExec : 0;
    if (eEng + eProd + eSal + eExe === 0) { showError('Enter at least one planned hire across the four role categories.'); return; }

    // Modelled pool from role × avg grant
    const engPct   = eEng  * grants.eng;
    const prodPct  = eProd * grants.prod;
    const salesPct = eSal  * grants.sales;
    const execPct  = eExe  * grants.exec;
    const subtotal = engPct + prodPct + salesPct + execPct;
    const buffer   = subtotal * 0.25;
    const modelledRaw = subtotal + buffer;

    // Cap modelled at 30% (sanity)
    const modelled = Math.min(modelledRaw, 30);

    // Recommended bands — combine modelled and stage benchmark
    const founderFriendly  = Math.min(Math.max(stage.low,  modelled * 0.85), stage.mid);
    const balanced         = Math.max(stage.mid, modelled);
    const employeeFriendly = Math.max(stage.high, modelled * 1.15);

    // Cap variants at sensible ceiling
    const cap = (v) => Math.min(v, 30);
    const fFinal = cap(founderFriendly);
    const bFinal = cap(balanced);
    const eFinal = cap(employeeFriendly);

    let headline, mode;
    if (currentMode === 'founder') { headline = fFinal; mode = 'Founder-friendly'; }
    else if (currentMode === 'employee') { headline = eFinal; mode = 'Employee-friendly'; }
    else { headline = bFinal; mode = 'Balanced'; }

    const topUp = Math.max(0, headline - existingVal);

    // ========== Render ==========
    const fmt = (n) => n.toFixed(1) + '%';
    document.getElementById('resHeadline').innerHTML = '<span class="accent">' + fmt(headline) + '</span> of fully-diluted equity';
    document.getElementById('resHeadlineMeta').textContent = mode + ' recommendation for ' + stage.name + ' • ' + (eEng+eProd+eSal+eExe) + ' planned hires over next 18 months';

    document.getElementById('resFounder').textContent  = fmt(fFinal);
    document.getElementById('resBalanced').textContent = fmt(bFinal);
    document.getElementById('resEmployee').textContent = fmt(eFinal);

    document.getElementById('resBenchmark').textContent = fmt(stage.low) + ' – ' + fmt(stage.high) + ' (mid ' + fmt(stage.mid) + ')';
    document.getElementById('resModelled').textContent  = fmt(modelled);
    document.getElementById('resExisting').textContent  = fmt(existingVal);
    document.getElementById('resTopUp').textContent     = fmt(topUp);

    document.getElementById('rbEngLabel').textContent   = 'Engineering — ' + eEng  + ' hires @ avg ' + grants.eng.toFixed(2)  + '%';
    document.getElementById('rbProdLabel').textContent  = 'Product / Design — ' + eProd + ' hires @ avg ' + grants.prod.toFixed(2) + '%';
    document.getElementById('rbSalesLabel').textContent = 'Sales / GTM — ' + eSal  + ' hires @ avg ' + grants.sales.toFixed(2) + '%';
    document.getElementById('rbExecLabel').textContent  = 'Exec / Leadership — ' + eExe  + ' hires @ avg ' + grants.exec.toFixed(2)  + '%';

    document.getElementById('rbEng').textContent   = fmt(engPct);
    document.getElementById('rbProd').textContent  = fmt(prodPct);
    document.getElementById('rbSales').textContent = fmt(salesPct);
    document.getElementById('rbExec').textContent  = fmt(execPct);
    document.getElementById('rbBuffer').textContent= fmt(buffer);

    // ========== Dilution scenario ==========
    const dilutionEl = document.getElementById('dilutionSection');
    if (isFinite(preMoney) && preMoney > 0 && isFinite(raiseAmt) && raiseAmt > 0) {
        const postMoney = preMoney + raiseAmt;
        const investorPct = (raiseAmt / postMoney) * 100;
        // Step 1: pool top-up (pre-money) — dilutes existing shareholders by topUp%
        const foundersAfterPool = founders * (1 - (topUp / 100));
        // Step 2: investor takes investorPct of post-money
        const foundersAfterRound = foundersAfterPool * (1 - (investorPct / 100));
        const totalDilution = founders - foundersAfterRound;

        document.getElementById('dilNow').textContent = fmt(founders);
        document.getElementById('dilAfterPool').textContent = fmt(foundersAfterPool);
        document.getElementById('dilAfterRound').textContent = fmt(foundersAfterRound) + ' (investor takes ' + investorPct.toFixed(1) + '%)';
        document.getElementById('dilTotal').textContent = totalDilution.toFixed(1) + ' pp';
        dilutionEl.style.display = '';
    } else {
        dilutionEl.style.display = 'none';
    }

    // Show + scroll
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

// ========== Reset ==========
function resetCalc() {
    document.getElementById('stage').value = 'seriesA';
    document.getElementById('teamSize').value = '12';
    document.getElementById('foundersPct').value = '80';
    document.getElementById('existingPool').value = '5';
    document.getElementById('hireEng').value = '8';
    document.getElementById('hireProd').value = '3';
    document.getElementById('hireSales').value = '4';
    document.getElementById('hireExec').value = '2';
    document.getElementById('preMoney').value = '';
    document.getElementById('raiseAmt').value = '';
    document.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
    document.querySelector('.toggle-btn[data-mode="balanced"]').classList.add('active');
    currentMode = 'balanced';
    document.getElementById('resultSection').classList.remove('visible');
    document.getElementById('errorBanner').classList.remove('visible');
}

// ========== FAQ accordion ==========
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

// ========== Calculate on Enter ==========
document.querySelectorAll('input[type="number"], input[type="text"]').forEach(input => {
    input.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') { e.preventDefault(); calculate(); }
    });
});

// ========== Sticky nav active state ==========
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
