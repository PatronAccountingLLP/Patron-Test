@extends('layouts.app')

@section('meta')
<title>Rule 11UA FMV Calculator | Unquoted Share NAV Method</title>
<meta name="description" content="Rule 11UA FMV calculator: fair market value of unquoted equity shares by the NAV method, (A+B+C+D−L) × PV/PE, for Section 56(2)(x) and 50CA. Free CA tool!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/fmv-rule-11ua-calculator">

<meta property="og:title" content="FMV Calculator Rule 11UA — Unquoted Share NAV Method">
<meta property="og:description" content="Compute the fair market value of unquoted equity shares by the Rule 11UA NAV method — (A+B+C+D−L) × PV/PE — for Section 56(2)(x) and Section 50CA. Free &amp; instant.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/fmv-rule-11ua-calculator">
<meta property="og:image" content="/tools/fmv-rule-11ua-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="FMV Calculator Rule 11UA — Unquoted Share NAV Method">
<meta name="twitter:description" content="Compute FMV of unquoted equity shares by the Rule 11UA NAV method — (A+B+C+D−L) × PV/PE — for Section 56(2)(x) &amp; 50CA. Free.">
<meta name="twitter:image" content="/tools/fmv-rule-11ua-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "FMV Calculator (Rule 11UA)",
  "description": "FMV Calculator under Rule 11UA computes the fair market value of unquoted equity shares using the Net Asset Value method prescribed in Rule 11UA(1)(c)(b) of the Income-tax Rules — FMV = (A + B + C + D − L) × PV/PE — taking the adjusted book value of assets, the fair value of jewellery and artistic work, shares and securities, and immovable property, less liabilities, and apportioning to per-share value for Section 56(2)(x) and Section 50CA purposes.",
  "url": "/tools/fmv-rule-11ua-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "FMV Calculator (Rule 11UA)", "item": "/tools/fmv-rule-11ua-calculator"}
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
      "name": "What is Rule 11UA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rule 11UA of the Income-tax Rules, 1962 prescribes how to compute the fair market value of unquoted equity shares for income-tax purposes. The Net Asset Value method in Rule 11UA(1)(c)(b) uses the formula FMV = (A + B + C + D − L) × PV/PE, where the asset components are adjusted to fair values and liabilities deducted, then apportioned per share. The rule underpins valuation for Section 56(2)(x) and Section 50CA."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Rule 11UA FMV formula?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The NAV-method formula is FMV = (A + B + C + D − L) × PV/PE. A is the book value of assets other than jewellery, art, shares/securities and immovable property, reduced by income tax paid and deferred items. B is the fair value of jewellery and artistic work. C is the fair value of shares and securities. D is the stamp-duty value of immovable property. L is liabilities. PV is the paid-up value of the shares valued and PE the total paid-up equity capital."
      }
    },
    {
      "@type": "Question",
      "name": "What do A, B, C, D, L, PV and PE mean in Rule 11UA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A is the adjusted book value of general assets (excluding the specified assets), reduced by advance income tax and deferred tax assets. B is the fair value of jewellery and artistic work per a valuation report. C is the fair value of shares and securities held. D is the stamp-duty value of immovable property. L is the liabilities, excluding paid-up capital, dividend reserves, provision for tax and contingent liabilities. PV is the paid-up value of the block of shares being valued, and PE is the total paid-up equity share capital."
      }
    },
    {
      "@type": "Question",
      "name": "When does Rule 11UA apply after angel tax abolition?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Angel tax under Section 56(2)(viib) was abolished from FY 2025-26 by the Finance Act 2024, so share issues at a premium no longer attract that charge regardless of DPIIT status. Rule 11UA still applies to Section 50CA, which deems the FMV as sale consideration on transfer of unquoted shares below FMV, and to Section 56(2)(x), which taxes a recipient who receives shares for inadequate consideration. The NAV formula remains the common basis."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between the NAV and DCF methods?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The NAV method under Rule 11UA(1)(c)(b) values shares from the balance sheet using the (A+B+C+D−L) × PV/PE formula and needs no merchant-banker report. The DCF method under Rule 11UA(2) values shares on projected cash flows and requires a merchant-banker report. DCF was mainly used for share issuances under the now-abolished angel tax; for share transfers under Section 50CA and 56(2)(x), the NAV method is the typical route."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a merchant banker for the NAV method?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The NAV method under Rule 11UA(1)(c)(b) is a formula-driven computation from the company's balance sheet and does not require a merchant-banker report. A merchant-banker report is mandatory only for the DCF method under Rule 11UA(2). That said, a Chartered Accountant should verify the asset adjustments — especially the fair values of property, securities and jewellery — before the figure is relied on for a transaction or filing."
      }
    },
    {
      "@type": "Question",
      "name": "What is the valuation date under Rule 11UA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The fair market value is determined as on the valuation date, which is the date of the transaction — for example the date of transfer for Section 50CA or the date of receipt for Section 56(2)(x). The asset values used should reflect that date rather than the balance-sheet date, which can require adjusting the latest audited figures to the valuation date. Using the correct date is a common point of dispute, so it should be documented carefully."
      }
    },
    {
      "@type": "Question",
      "name": "How is the per-share FMV calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "First compute the net asset base (A + B + C + D − L). Then multiply by PV/PE, where PV is the paid-up value of the shares being valued and PE is the total paid-up equity capital. For a per-share value, divide the net asset base by the total number of paid-up equity shares. This calculator shows both the net asset base and the resulting value per share so you can see how the apportionment works."
      }
    },
    {
      "@type": "Question",
      "name": "What is Section 50CA and how does it use Rule 11UA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Section 50CA provides that when unquoted shares are transferred for less than their fair market value, the FMV is deemed to be the full value of consideration for computing capital gains. Rule 11UAA specifies that this FMV is determined under the same Rule 11UA formula, taking the date of transfer as the valuation date. So a seller transferring unquoted shares below FMV is taxed as if they received the FMV, making the Rule 11UA figure important."
      }
    },
    {
      "@type": "Question",
      "name": "Does this calculator replace a professional valuation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. This tool applies the NAV formula to the figures you enter, which is useful for a quick estimate and for sense-checking a transaction. A reliable Rule 11UA valuation needs correct asset adjustments — fair values of property and securities, exclusion of the right liabilities, and the correct valuation date. A Chartered Accountant or registered valuer should prepare or review the valuation before it is relied on for tax or a deal."
      }
    },
    {
      "@type": "Question",
      "name": "Is the FMV Rule 11UA Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting FMV Rule 11UA Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the net asset base, total FMV and per-share fair market value of unquoted equity shares using the Rule 11UA NAV formula, so you can sense-check Section 56(2)(x) and Section 50CA positions before consulting a professional."
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
        .form-group label .tag { display: inline-block; background: var(--surface-alt); color: var(--primary); font-family: var(--font-mono); font-size: 11px; font-weight: 700; padding: 1px 7px; border-radius: 5px; margin-right: 6px; }
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
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); word-break: break-word; overflow-wrap: anywhere; text-align: right; }
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
        <a href="#formula">The Formula</a>
        <a href="#components">A B C D L</a>
        <a href="#when">When It Applies</a>
        <a href="#nav-dcf">NAV vs DCF</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    FMV Calculator (Rule 11UA)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>FMV Calculator Rule 11UA — <span>Unquoted Share Method</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Valuing unquoted shares? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20need%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Rule%2011UA%20unquoted%20share%20valuation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20would%20like%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%0A%0AMy%20details%3A%0A-%20Company%3A%0A-%20Purpose%20%28transfer%20/%20receipt%20/%20deal%29%3A%0A-%20Section%20%2850CA%20/%2056%282%29%28x%29%29%3A%0A-%20Number%20of%20shares%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Enter your company's <strong>balance-sheet figures</strong> and this free calculator returns the <strong>fair market value of unquoted equity shares</strong> under the <strong>Rule 11UA Net Asset Value method</strong> — <strong>FMV = (A + B + C + D − L) × PV/PE</strong> — giving the net asset base, total FMV and value per share. It is the basis for <strong>Section 56(2)(x)</strong> (inadequate consideration) and <strong>Section 50CA</strong> (transfer below FMV). Angel tax under 56(2)(viib) was abolished from FY 2025-26. This is an indicative tool — a CA should confirm the asset adjustments and valuation date.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate FMV under Rule 11UA (NAV Method)</h2>
            <p class="calc-sub">Enter amounts in ₹ on the valuation date. Use fair values for B, C and D (not book values).</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or apply the formula FMV = (A+B+C+D−L) × PV/PE manually using the guidance below.
                </div>
            </noscript>

            <div class="field-group-title">Assets</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="aVal"><span class="tag">A</span> Adjusted Book Value of Other Assets</label>
                    <input type="text" id="aVal" placeholder="e.g. 8000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Book value of assets excluding B/C/D items, less advance tax &amp; deferred tax asset.</div>
                </div>
                <div class="form-group">
                    <label for="bVal"><span class="tag">B</span> FMV of Jewellery &amp; Artistic Work</label>
                    <input type="text" id="bVal" placeholder="e.g. 0" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Per valuation report. Enter 0 if none.</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="cVal"><span class="tag">C</span> FMV of Shares &amp; Securities</label>
                    <input type="text" id="cVal" placeholder="e.g. 2000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Fair value of investments held. Enter 0 if none.</div>
                </div>
                <div class="form-group">
                    <label for="dVal"><span class="tag">D</span> Stamp-Duty Value of Immovable Property</label>
                    <input type="text" id="dVal" placeholder="e.g. 5000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Stamp-duty / circle rate value. Enter 0 if none.</div>
                </div>
            </div>

            <div class="field-group-title">Liabilities &amp; Capital</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="lVal"><span class="tag">L</span> Liabilities</label>
                    <input type="text" id="lVal" placeholder="e.g. 6000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Excludes paid-up capital, dividend reserves, provision for tax &amp; contingent liabilities.</div>
                </div>
                <div class="form-group">
                    <label for="peVal"><span class="tag">PE</span> Total Paid-up Equity Capital</label>
                    <input type="text" id="peVal" placeholder="e.g. 1000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Total paid-up equity share capital (₹).</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="faceVal">Face Value per Share</label>
                    <input type="text" id="faceVal" placeholder="e.g. 10" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Used to derive the number of shares (PE ÷ face value).</div>
                </div>
                <div class="form-group">
                    <label for="pvVal"><span class="tag">PV</span> Paid-up Value of Shares Valued <span style="font-weight:400;text-transform:none;">(optional)</span></label>
                    <input type="text" id="pvVal" placeholder="blank = whole company" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Leave blank to value the entire equity (PV = PE).</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate FMV</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Net Asset Base (A+B+C+D−L)</div>
                        <div class="result-value" id="resBase">—</div>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">FMV per Share</div>
                        <div class="result-value" id="resPerShare">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need a documented Rule 11UA valuation?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant prepares a defensible NAV or DCF valuation for Section 50CA, 56(2)(x) or your transaction — with asset adjustments documented.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20need%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Rule%2011UA%20unquoted%20share%20valuation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20would%20like%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%0A%0AMy%20details%3A%0A-%20Company%3A%0A-%20Purpose%20%28transfer%20/%20receipt%20/%20deal%29%3A%0A-%20Section%20%2850CA%20/%2056%282%29%28x%29%29%3A%0A-%20Number%20of%20shares%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the FMV Rule 11UA Calculator</h2>
            <ol>
                <li><strong>Enter asset values (A–D)</strong> as on the valuation date. A is the adjusted book value of general assets; B, C and D are the fair values of jewellery/art, shares/securities and immovable property respectively.</li>
                <li><strong>Enter liabilities (L)</strong>, excluding paid-up capital, reserves set apart for dividends, provision for tax and contingent liabilities.</li>
                <li><strong>Enter total paid-up equity capital (PE) and face value</strong> so the tool can work out the number of shares.</li>
                <li><strong>Click Calculate.</strong> You get the net asset base, the FMV per share and a full breakdown. Leave PV blank to value the whole company, or enter it to value a specific block.</li>
            </ol>
            <p>For a market or DCF-based view of value (used for ESOPs and fundraising rather than the statutory NAV), see the <a href="/tools/esop-valuation-calculator">ESOP valuation calculator</a>. For the resulting tax on a transfer, use the <a href="/tools/capital-gains-calculator">capital gains calculator</a>.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> The most common errors are using book values instead of fair values for property and securities, and using the balance-sheet date instead of the valuation date. Both can materially change the FMV — have a CA confirm the adjustments.</p>
            </div>
        </section>

        <section class="content-section" id="formula">
            <h2>The Rule 11UA NAV Formula</h2>
            <p>Rule 11UA(1)(c)(b) of the <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income-tax Rules</a> prescribes the Net Asset Value method for unquoted equity shares:</p>
            <div class="formula-box">
                <span class="label">FMV</span> = (A + B + C + D − L) × <span class="label">PV / PE</span><br><br>
                <span class="label">Per share</span> = (A + B + C + D − L) ÷ Total paid-up equity shares
            </div>
            <p>The bracket is the company's net asset base on the valuation date. Multiplying by PV/PE apportions it to the block of shares being valued; dividing by the number of shares gives the value per share. The method is purely balance-sheet driven, which makes it predictable but sensitive to how the asset and liability figures are adjusted.</p>
        </section>

        <section class="content-section" id="components">
            <h2>What A, B, C, D and L Mean</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Term</th><th>Meaning</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>A</strong></td><td>Book value of all assets other than jewellery, artistic work, shares/securities and immovable property — reduced by advance income tax paid (net of refund) and any deferred tax asset / unamortised expenses.</td></tr>
                    <tr><td><strong>B</strong></td><td>Fair market value of jewellery and artistic work per a registered valuer's report.</td></tr>
                    <tr><td><strong>C</strong></td><td>Fair market value of shares and securities held (as determined under Rule 11UA).</td></tr>
                    <tr><td><strong>D</strong></td><td>Stamp-duty value (circle rate) of immovable property.</td></tr>
                    <tr><td><strong>L</strong></td><td>Book value of liabilities, but excluding paid-up capital, amounts set apart for dividends, reserves (other than depreciation), provision for tax (net), provisions for unascertained liabilities and contingent liabilities.</td></tr>
                    <tr><td><strong>PV</strong></td><td>Paid-up value of the equity shares being valued.</td></tr>
                    <tr><td><strong>PE</strong></td><td>Total paid-up value of the equity share capital as shown in the balance sheet.</td></tr>
                </tbody>
            </table>
            <p>Because B, C and D require fair values rather than book values, an accurate Rule 11UA computation often needs supporting valuation inputs for property and investments, typically from a registered valuer recognised by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. The <a href="/tools/net-worth-calculator">net worth calculator</a> can help you assemble the asset and liability base first.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Rule 11UA Share Valuation?</h3>
            <p>Patron Accounting LLP supports founders, investors and companies valuing unquoted shares for tax — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20need%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Rule%2011UA%20unquoted%20share%20valuation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20would%20like%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%0A%0AMy%20details%3A%0A-%20Company%3A%0A-%20Purpose%20%28transfer%20/%20receipt%20/%20deal%29%3A%0A-%20Section%20%2850CA%20/%2056%282%29%28x%29%29%3A%0A-%20Number%20of%20shares%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="when">
            <h2>When Rule 11UA Applies (After Angel Tax Abolition)</h2>
            <p>Angel tax under <strong>Section 56(2)(viib)</strong> — which taxed share premium received by a closely held company above FMV — was <strong>abolished from FY 2025-26</strong> by the Finance Act 2024. Share issues at a premium from 1 April 2025 no longer attract that charge, regardless of DPIIT-recognition status. Rule 11UA still matters for two live provisions:</p>
            <ul>
                <li><strong>Section 50CA</strong> — on transfer of unquoted shares for less than FMV, the FMV (per Rule 11UAA, using the same Rule 11UA formula with the transfer date as valuation date) is deemed to be the sale consideration for capital gains.</li>
                <li><strong>Section 56(2)(x)</strong> — a recipient who receives shares for no or inadequate consideration is taxed on the shortfall against FMV under "income from other sources".</li>
            </ul>
            <p>So even after angel tax, both the buyer and seller of unquoted shares need the Rule 11UA figure to price a transfer correctly and avoid a deemed-income adjustment. The capital-gains and other-source effects are reported through your return on the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax portal</a>, and where a registered-valuer report is used it follows the framework administered by the <a href="https://ibbi.gov.in/" target="_blank" rel="noopener">IBBI</a> under the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>. See Patron's <a href="/blog/rule-11ua-unlisted-share-valuation">Rule 11UA valuation guide</a> for the detailed position.</p>
        </section>

        <section class="content-section" id="nav-dcf">
            <h2>NAV Method vs DCF Method</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Aspect</th><th>NAV — Rule 11UA(1)(c)(b)</th><th>DCF — Rule 11UA(2)</th></tr>
                </thead>
                <tbody>
                    <tr><td>Basis</td><td>Balance-sheet net assets</td><td>Projected future cash flows</td></tr>
                    <tr><td>Report needed</td><td>No merchant-banker report</td><td>Merchant-banker report mandatory</td></tr>
                    <tr><td>Typical use</td><td>Share transfers (50CA, 56(2)(x))</td><td>Was used for share issues (angel tax)</td></tr>
                    <tr><td>Predictability</td><td>High — formula-driven</td><td>Lower — assumption-sensitive</td></tr>
                </tbody>
            </table>
            <p>This calculator implements the <strong>NAV method</strong>. With angel tax gone, the NAV method is the common route for the remaining Rule 11UA use cases. For a DCF-based valuation — relevant to fundraising, ESOPs or where a forward-looking value is needed — a merchant banker's report is required; Patron also offers <a href="/esop-valuation-services">ESOP valuation services</a>.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> The NAV figure can differ significantly from a negotiated commercial price. It is a statutory floor/reference for tax, not necessarily the deal value — but pricing below it can trigger Section 50CA or 56(2)(x).</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions on Rule 11UA FMV</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is Rule 11UA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Rule 11UA of the Income-tax Rules, 1962 prescribes how to compute the fair market value of unquoted equity shares for income-tax purposes. The Net Asset Value method in Rule 11UA(1)(c)(b) uses the formula FMV = (A + B + C + D − L) × PV/PE, where the asset components are adjusted to fair values and liabilities deducted, then apportioned per share. The rule underpins valuation for Section 56(2)(x) and Section 50CA.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Rule 11UA FMV formula?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The NAV-method formula is FMV = (A + B + C + D − L) × PV/PE. A is the book value of assets other than jewellery, art, shares/securities and immovable property, reduced by income tax paid and deferred items. B is the fair value of jewellery and artistic work. C is the fair value of shares and securities. D is the stamp-duty value of immovable property. L is liabilities. PV is the paid-up value of the shares valued and PE the total paid-up equity capital.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What do A, B, C, D, L, PV and PE mean in Rule 11UA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A is the adjusted book value of general assets (excluding the specified assets), reduced by advance income tax and deferred tax assets. B is the fair value of jewellery and artistic work per a valuation report. C is the fair value of shares and securities held. D is the stamp-duty value of immovable property. L is the liabilities, excluding paid-up capital, dividend reserves, provision for tax and contingent liabilities. PV is the paid-up value of the block of shares being valued, and PE is the total paid-up equity share capital.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When does Rule 11UA apply after angel tax abolition?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Angel tax under Section 56(2)(viib) was abolished from FY 2025-26 by the Finance Act 2024, so share issues at a premium no longer attract that charge regardless of DPIIT status. Rule 11UA still applies to Section 50CA, which deems the FMV as sale consideration on transfer of unquoted shares below FMV, and to Section 56(2)(x), which taxes a recipient who receives shares for inadequate consideration. The NAV formula remains the common basis.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between the NAV and DCF methods?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The NAV method under Rule 11UA(1)(c)(b) values shares from the balance sheet using the (A+B+C+D−L) × PV/PE formula and needs no merchant-banker report. The DCF method under Rule 11UA(2) values shares on projected cash flows and requires a merchant-banker report. DCF was mainly used for share issuances under the now-abolished angel tax; for share transfers under Section 50CA and 56(2)(x), the NAV method is the typical route.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Do I need a merchant banker for the NAV method?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The NAV method under Rule 11UA(1)(c)(b) is a formula-driven computation from the company's balance sheet and does not require a merchant-banker report. A merchant-banker report is mandatory only for the DCF method under Rule 11UA(2). That said, a Chartered Accountant should verify the asset adjustments — especially the fair values of property, securities and jewellery — before the figure is relied on for a transaction or filing.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the valuation date under Rule 11UA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The fair market value is determined as on the valuation date, which is the date of the transaction — for example the date of transfer for Section 50CA or the date of receipt for Section 56(2)(x). The asset values used should reflect that date rather than the balance-sheet date, which can require adjusting the latest audited figures to the valuation date. Using the correct date is a common point of dispute, so it should be documented carefully.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is the per-share FMV calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">First compute the net asset base (A + B + C + D − L). Then multiply by PV/PE, where PV is the paid-up value of the shares being valued and PE is the total paid-up equity capital. For a per-share value, divide the net asset base by the total number of paid-up equity shares. This calculator shows both the net asset base and the resulting value per share so you can see how the apportionment works.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is Section 50CA and how does it use Rule 11UA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 50CA provides that when unquoted shares are transferred for less than their fair market value, the FMV is deemed to be the full value of consideration for computing capital gains. Rule 11UAA specifies that this FMV is determined under the same Rule 11UA formula, taking the date of transfer as the valuation date. So a seller transferring unquoted shares below FMV is taxed as if they received the FMV, making the Rule 11UA figure important.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does this calculator replace a professional valuation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. This tool applies the NAV formula to the figures you enter, which is useful for a quick estimate and for sense-checking a transaction. A reliable Rule 11UA valuation needs correct asset adjustments — fair values of property and securities, exclusion of the right liabilities, and the correct valuation date. A Chartered Accountant or registered valuer should prepare or review the valuation before it is relied on for tax or a deal.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the FMV Rule 11UA Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting FMV Rule 11UA Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It computes the net asset base, total FMV and per-share fair market value of unquoted equity shares using the Rule 11UA NAV formula, so you can sense-check Section 56(2)(x) and Section 50CA positions before consulting a professional.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Rule 11UA Valuation Report</h3>
            <p>NAV and DCF valuations of unquoted shares for 50CA, 56(2)(x) and deals — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20need%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Rule%2011UA%20unquoted%20share%20valuation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20FMV%20Rule%2011UA%20Calculator%20and%20would%20like%20help%20with%20unquoted%20share%20valuation%20under%20Rule%2011UA.%0A%0AMy%20details%3A%0A-%20Company%3A%0A-%20Purpose%20%28transfer%20/%20receipt%20/%20deal%29%3A%0A-%20Section%20%2850CA%20/%2056%282%29%28x%29%29%3A%0A-%20Number%20of%20shares%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/esop-valuation-services" class="sidebar-link">ESOP / Share Valuation <span class="arrow">→</span></a>
            <a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation <span class="arrow">→</span></a>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Pvt Ltd Registration <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/esop-valuation-calculator" class="sidebar-link">ESOP Valuation Calculator <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/net-worth-calculator" class="sidebar-link">Net Worth Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-tax-calculator" class="sidebar-link">ESOP Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/rule-11ua-unlisted-share-valuation" class="sidebar-link">Rule 11UA Valuation Guide <span class="arrow">→</span></a>
            <a href="/blog/market-valuation-ratios-complete-guide" class="sidebar-link">Market &amp; Valuation Ratios <span class="arrow">→</span></a>
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
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }
    function fmtINR2(n){ return '₹' + n.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }); }

    function calculate(){
        var A = val('aVal'), B = val('bVal'), C = val('cVal'), D = val('dVal'), L = val('lVal');
        var PE = val('peVal'), face = val('faceVal');
        var pvRaw = document.getElementById('pvVal').value;
        var PV = parseFloat(pvRaw);
        if (!isFinite(PV) || PV <= 0) PV = PE; // default: whole company

        if (PE <= 0 || face <= 0){ alert('Please enter Total Paid-up Equity Capital (PE) and Face Value per share (both greater than zero).'); return; }
        if (PV > PE){ alert('Paid-up value of shares valued (PV) cannot exceed total paid-up equity capital (PE).'); return; }

        var base = A + B + C + D - L;                 // net asset base
        var numShares = PE / face;                    // total paid-up equity shares
        var perShare = base / numShares;              // per-share FMV
        var blockFMV = base * (PV / PE);              // FMV of the block valued

        document.getElementById('resBase').textContent = fmtINR(base);
        document.getElementById('resPerShare').textContent = (isFinite(perShare) ? fmtINR2(perShare) : '—');

        var rows = '';
        rows += '<div class="breakdown-row"><span class="breakdown-label">A — Adjusted book value of other assets</span><span class="breakdown-value">' + fmtINR(A) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">B — FMV of jewellery &amp; artistic work</span><span class="breakdown-value">' + fmtINR(B) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">C — FMV of shares &amp; securities</span><span class="breakdown-value">' + fmtINR(C) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">D — Stamp-duty value of immovable property</span><span class="breakdown-value">' + fmtINR(D) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Less: L — Liabilities</span><span class="breakdown-value">− ' + fmtINR(L) + '</span></div>';
        rows += '<div class="breakdown-row total"><span class="breakdown-label">Net Asset Base (A+B+C+D−L)</span><span class="breakdown-value">' + fmtINR(base) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Total paid-up equity shares (PE ÷ face)</span><span class="breakdown-value">' + numShares.toLocaleString('en-IN', {maximumFractionDigits:2}) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">FMV per share</span><span class="breakdown-value">' + (isFinite(perShare) ? fmtINR2(perShare) : '—') + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">FMV of block valued (× PV/PE)</span><span class="breakdown-value">' + fmtINR(blockFMV) + '</span></div>';
        if (base < 0){
            rows += '<div class="breakdown-row"><span class="breakdown-label" style="color:var(--danger);">Note</span><span class="breakdown-value" style="color:var(--danger);">Negative net assets → FMV nil/negative</span></div>';
        }
        document.getElementById('breakdownSection').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        ['aVal','bVal','cVal','dVal','lVal','peVal','faceVal','pvVal'].forEach(function(id){ document.getElementById(id).value=''; });
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['aVal','bVal','cVal','dVal','lVal','peVal','faceVal','pvVal'].forEach(function(id){
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
