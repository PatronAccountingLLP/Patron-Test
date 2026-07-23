@extends('layouts.app')

@section('meta')
<title>Form 15CA & 15CB Applicability Checker | Rule 37BB</title>
<meta name="description" content="Free Form 15CA & 15CB applicability checker for foreign remittances: see if 15CA Part A/B/C/D or a 15CB CA certificate applies under Rule 37BB. Check now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/15ca-15cb-applicability-checker">

<meta property="og:title" content="Form 15CA & 15CB Applicability Checker — Rule 37BB">
<meta property="og:description" content="Answer 3 questions about your foreign remittance and instantly see whether Form 15CA (Part A/B/C/D) and a 15CB CA certificate are required under Rule 37BB.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/15ca-15cb-applicability-checker">
<meta property="og:image" content="/tools/15ca-15cb-applicability-checker-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Form 15CA & 15CB Applicability Checker — Rule 37BB">
<meta name="twitter:description" content="Answer 3 questions on your foreign remittance to see if Form 15CA (Part A/B/C/D) and a 15CB CA certificate apply under Rule 37BB.">
<meta name="twitter:image" content="/tools/15ca-15cb-applicability-checker-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Form 15CA & 15CB Applicability Checker",
  "description": "Form 15CA and 15CB Applicability Checker is a decision tool that takes the taxability of a foreign remittance, whether it appears on the Rule 37BB specified list, the aggregate amount during the financial year, and whether an Assessing Officer certificate has been obtained, and shows which compliance is required: no forms, Form 15CA Part A, Part B, Part C with a 15CB CA certificate, or Part D.",
  "url": "/tools/15ca-15cb-applicability-checker",
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
    {"@type": "ListItem", "position": 3, "name": "Form 15CA & 15CB Applicability Checker", "item": "/tools/15ca-15cb-applicability-checker"}
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
      "name": "When is Form 15CA required for a foreign remittance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Form 15CA is the declaration a remitter files electronically before paying a non-resident. It is needed whenever the payment is chargeable to tax in India. The specific part depends on the facts: Part A for taxable remittances up to 5 lakh in the year, Part B when an Assessing Officer certificate has been obtained, Part C when a 15CB certificate is used, and Part D when the sum is not chargeable to tax but is not on the Rule 37BB exempt list."
      }
    },
    {
      "@type": "Question",
      "name": "When is Form 15CB required?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Form 15CB is a certificate from a Chartered Accountant that is required only when the remittance is chargeable to tax in India and the aggregate of remittances exceeds 5 lakh in the financial year, and no Assessing Officer certificate under Section 195(2), 195(3) or 197 has been obtained. In that case the remitter files Form 15CA Part C supported by the CA's 15CB. Below 5 lakh, or where an AO certificate exists, 15CB is not needed."
      }
    },
    {
      "@type": "Question",
      "name": "What is the ₹5 lakh threshold for 15CA and 15CB?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The 5 lakh figure is tested on the aggregate of remittances to non-residents during the financial year, not on a single transfer. If your total taxable remittances stay at or below 5 lakh, you file only Form 15CA Part A and no 15CB. Once the aggregate crosses 5 lakh and the sum is taxable, a 15CB certificate (with Part C) is required unless you hold an AO certificate, in which case Part B applies."
      }
    },
    {
      "@type": "Question",
      "name": "What are the four parts of Form 15CA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Part A is for taxable remittances where the yearly aggregate does not exceed 5 lakh. Part B is for taxable remittances above 5 lakh where an Assessing Officer certificate under Section 195(2), 195(3) or 197 has been obtained. Part C is for taxable remittances above 5 lakh supported by a 15CB certificate from an accountant. Part D is for remittances that are not chargeable to tax and are not covered by the Rule 37BB specified list."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Rule 37BB specified list?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rule 37BB contains a specified list of 33 payment categories for which neither Form 15CA nor 15CB needs to be furnished. These include certain imports, personal remittances for travel, education and medical treatment, and other purposes that do not require RBI approval. Banks map these to RBI purpose codes. If your remittance matches a listed purpose, you can avoid both forms, though you should keep proof of the purpose code."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need any form if the remittance is not taxable in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If the remittance is not chargeable to tax in India, no 15CB is required. If it is also covered by the Rule 37BB specified list, no forms are required at all. If it is not on that list, you still file Form 15CA Part D to declare that the sum is not chargeable to tax. Determining taxability under Sections 5 and 9 and the relevant DTAA is the part where a CA's view matters most."
      }
    },
    {
      "@type": "Question",
      "name": "What is Form 15CA Part B and when does it apply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Part B applies when a taxable remittance exceeds 5 lakh in the year and the remitter has obtained an order or certificate from the Assessing Officer under Section 195(2), 195(3) or 197 specifying a nil or lower rate of tax. Because the AO has already determined the rate, a separate 15CB certificate is not needed; the remitter simply files Part B quoting the AO order, and tax is deducted at the rate specified."
      }
    },
    {
      "@type": "Question",
      "name": "Does a DTAA change whether 15CB is needed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Double Taxation Avoidance Agreement can reduce or eliminate Indian tax on a remittance, but the remittance can still be chargeable to tax in principle. Where the sum is taxable and exceeds 5 lakh, a 15CB certificate is generally still required, and the CA examines the DTAA to certify the correct rate. The treaty position, tax residency certificate and Form 10F all feed into that determination."
      }
    },
    {
      "@type": "Question",
      "name": "Are Form 15CA and 15CB being replaced in 2026?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under the new income-tax framework, remittance reporting transitions to Forms 145 and 146 for remittances initiated on or after 1 April 2026, while the substance of the rules, the 5 lakh threshold, the four-part structure and the Rule 37BB exempt list remain the same. Forms 15CA and 15CB stay valid for remittances initiated before that date. This checker follows the established 15CA/15CB logic, which continues unchanged in substance."
      }
    },
    {
      "@type": "Question",
      "name": "Is this 15CA/15CB applicability checker free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Form 15CA and 15CB Applicability Checker is completely free with no signup required. All logic runs in your browser and nothing is stored on our servers. It applies the Rule 37BB and Section 195 decision tree to tell you whether you need no forms, Form 15CA Part A, Part B, Part C with 15CB, or Part D. The final filing and any CA certificate should still be handled by a Chartered Accountant."
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
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-card .calc-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; }
        .q-block { margin-bottom: 22px; }
        .q-label { display: block; font-size: 15px; font-weight: 600; color: var(--primary-dark); margin-bottom: 10px; }
        .q-hint { font-size: 12px; color: var(--text-muted); margin-top: 8px; line-height: 1.5; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; }
        .toggle-btn { flex: 1; padding: 11px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 90px; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .q-block.disabled { opacity: 0.45; pointer-events: none; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict { border-radius: var(--radius); padding: 22px 24px; border: 1px solid var(--border); border-left: 4px solid var(--primary); background: var(--surface); margin-bottom: 16px; }
        .verdict.none { border-left-color: var(--success); background: #F0FDF4; }
        .verdict.ca { border-left-color: var(--danger); background: #FEF2F2; }
        .verdict.form { border-left-color: var(--info); background: #EFF6FF; }
        .verdict-tag { font-family: var(--font-mono); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); margin-bottom: 8px; }
        .verdict-title { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 10px; line-height: 1.25; }
        .verdict-detail { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }
        .verdict-detail strong { color: var(--text); }
        .path-steps { margin-top: 16px; background: var(--surface-alt); border-radius: var(--radius); padding: 16px 20px; }
        .path-row { display: flex; gap: 10px; align-items: flex-start; padding: 6px 0; font-size: 14px; color: var(--text-secondary); }
        .path-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .path-row .step-q { font-weight: 600; color: var(--text); min-width: 0; }
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
        <a href="#calculator">Checker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-are">15CA vs 15CB</a>
        <a href="#parts">The 4 Parts</a>
        <a href="#rule37bb">Rule 37BB List</a>
        <a href="#process">Filing Process</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Form 15CA & 15CB Applicability Checker
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Form 15CA & 15CB Applicability Checker — <span>Rule 37BB </span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need a 15CB certificate fast? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20need%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Form%2015CA%20/%2015CB%20foreign%20remittance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20would%20like%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%0A%0AMy%20details%3A%0A-%20Nature%20of%20remittance%3A%0A-%20Beneficiary%20country%3A%0A-%20Amount%20%28approx%29%3A%0A-%20Taxable%20/%20DTAA%20position%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Answer up to four quick questions about your <strong>foreign remittance to a non-resident</strong> and this checker applies the <strong>Rule 37BB / Section 195</strong> logic to tell you exactly what is required — <strong>no forms</strong>, <strong>Form 15CA Part A</strong>, <strong>Part B</strong>, <strong>Part C with a 15CB CA certificate</strong>, or <strong>Part D</strong>. The key triggers: is the sum <strong>taxable in India</strong>, is it on the <strong>specified list</strong>, does the yearly aggregate cross <strong>₹5 lakh</strong>, and do you hold an <strong>Assessing Officer certificate</strong>. It is an indicative tool — a CA must determine taxability and issue any 15CB.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check 15CA / 15CB Applicability</h2>
            <p class="calc-sub">Answer the questions below — later questions unlock based on your answers.</p>
            <noscript>
                <div class="noscript-box">
                    This checker requires JavaScript. Please enable JavaScript, or follow the decision table further down this page.
                </div>
            </noscript>

            <div class="q-block" id="qb1">
                <label class="q-label">1. Is the remittance chargeable to tax in India?</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-q="tax" data-value="yes" onclick="pick(this)">Yes — taxable</button>
                    <button type="button" class="toggle-btn" data-q="tax" data-value="no" onclick="pick(this)">No / not sure</button>
                </div>
                <div class="q-hint">Taxability is judged under Sections 5 and 9 and any applicable DTAA. If unsure, treat as "No / not sure" — a CA confirms this.</div>
            </div>

            <div class="q-block disabled" id="qb2">
                <label class="q-label">2. Is the payment on the Rule 37BB specified list (e.g. certain imports, personal travel/education/medical)?</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-q="list" data-value="yes" onclick="pick(this)">Yes — on the list</button>
                    <button type="button" class="toggle-btn" data-q="list" data-value="no" onclick="pick(this)">No</button>
                </div>
                <div class="q-hint">The specified list has 33 purpose categories that need no forms. Banks map these to RBI purpose codes.</div>
            </div>

            <div class="q-block disabled" id="qb3">
                <label class="q-label">3. Does the aggregate of remittances exceed ₹5 lakh this financial year?</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-q="agg" data-value="yes" onclick="pick(this)">Yes — over ₹5L</button>
                    <button type="button" class="toggle-btn" data-q="agg" data-value="no" onclick="pick(this)">No — ₹5L or less</button>
                </div>
                <div class="q-hint">Tested on the total to non-residents for the year, not a single transfer.</div>
            </div>

            <div class="q-block disabled" id="qb4">
                <label class="q-label">4. Have you obtained an AO certificate u/s 195(2) / 195(3) / 197?</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-q="ao" data-value="yes" onclick="pick(this)">Yes — have AO order</button>
                    <button type="button" class="toggle-btn" data-q="ao" data-value="no" onclick="pick(this)">No</button>
                </div>
                <div class="q-hint">A nil/lower-deduction order from the Assessing Officer replaces the need for a 15CB.</div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Show My Requirement</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div id="verdictContainer"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need the form filed (and a 15CB if required)?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant determines taxability under the DTAA, issues a UDIN-backed Form 15CB and files Form 15CA for you.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20need%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Form%2015CA%20/%2015CB%20foreign%20remittance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20would%20like%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%0A%0AMy%20details%3A%0A-%20Nature%20of%20remittance%3A%0A-%20Beneficiary%20country%3A%0A-%20Amount%20%28approx%29%3A%0A-%20Taxable%20/%20DTAA%20position%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Checker</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the 15CA / 15CB Checker</h2>
            <ol>
                <li><strong>Taxability first.</strong> Tell the checker whether the remittance is chargeable to tax in India. This single answer decides whether a 15CB can ever be required.</li>
                <li><strong>Specified list.</strong> If it is not taxable, confirm whether the payment purpose is on the Rule 37BB specified list — if so, no forms are needed at all.</li>
                <li><strong>₹5 lakh aggregate.</strong> For taxable remittances, state whether your total to non-residents this year crosses ₹5 lakh.</li>
                <li><strong>AO certificate.</strong> If you are over ₹5 lakh, say whether you hold an Assessing Officer certificate — that routes you to Part B instead of a 15CB.</li>
            </ol>
            <p>The checker then shows your exact requirement and the reasoning path. Use it alongside the <a href="/tools/income-tax-calculator">income tax calculator</a> and our <a href="/itr-for-nris">NRI ITR filing</a> guidance when the remittance relates to non-resident income.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> The hardest question is the first one — taxability under Sections 5 and 9 read with the DTAA. The chargeability framework sits in the <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income-tax Act</a>, and banks increasingly ask for 15CA/15CB before releasing funds, so resolve taxability early with a CA rather than at the remittance counter.</p>
            </div>
        </section>

        <section class="content-section" id="what-are">
            <h2>Form 15CA vs Form 15CB — What They Are</h2>
            <p><strong>Form 15CA</strong> is a declaration filed electronically on the income-tax portal by the person making a payment to a non-resident or foreign company. It captures the remittance details and the tax position before the money leaves India.</p>
            <p><strong>Form 15CB</strong> is a certificate from a <a href="/tds-return-filing">Chartered Accountant</a> that examines chargeability under Sections 5 and 9 of the Income-tax Act and the relevant DTAA, and certifies the nature of the payment, the applicable rate and the tax deducted under Section 195. It carries a UDIN issued through the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> portal, and is an event-based form, required only when the remittance is taxable and the yearly aggregate exceeds ₹5 lakh without an AO certificate.</p>
            <p>In short: 15CA is the remitter's declaration; 15CB is the CA's tax-determination certificate that backs the higher-value taxable cases.</p>
        </section>

        <section class="content-section" id="parts">
            <h2>The Four Parts of Form 15CA</h2>
            <p>Which part you file depends on taxability, the ₹5 lakh aggregate and whether you hold an AO certificate:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Part</th><th>When it applies</th><th>15CB needed?</th></tr>
                </thead>
                <tbody>
                    <tr><td>Part A</td><td>Taxable; yearly aggregate up to ₹5 lakh</td><td>No</td></tr>
                    <tr><td>Part B</td><td>Taxable; over ₹5 lakh; AO certificate u/s 195(2)/195(3)/197 obtained</td><td>No</td></tr>
                    <tr><td>Part C</td><td>Taxable; over ₹5 lakh; no AO certificate</td><td>Yes — 15CB</td></tr>
                    <tr><td>Part D</td><td>Not chargeable to tax and not on the Rule 37BB list</td><td>No</td></tr>
                </tbody>
            </table>
            <p>Where the remittance is not taxable and the purpose is on the Rule 37BB specified list, neither 15CA nor 15CB is required.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Form 15CA & 15CB Filing?</h3>
            <p>Patron Accounting LLP supports businesses and individuals making taxable foreign remittances — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20need%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Form%2015CA%20/%2015CB%20foreign%20remittance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20would%20like%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%0A%0AMy%20details%3A%0A-%20Nature%20of%20remittance%3A%0A-%20Beneficiary%20country%3A%0A-%20Amount%20%28approx%29%3A%0A-%20Taxable%20/%20DTAA%20position%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="rule37bb">
            <h2>The Rule 37BB Specified List</h2>
            <p>Rule 37BB of the Income-tax Rules lists <strong>33 categories of payments</strong> for which neither Form 15CA nor 15CB has to be furnished, as set out in the Income Tax Department's <a href="https://www.incometax.gov.in/iec/foportal/help/statutory-forms/popular-forms/form-15ca-faq" target="_blank" rel="noopener">Form 15CA FAQ</a>. These broadly cover purposes that do not require RBI approval, including:</p>
            <ul>
                <li>Certain <strong>imports</strong> of goods;</li>
                <li>Personal remittances for <strong>foreign travel, education and medical treatment</strong>;</li>
                <li><strong>Gifts, donations and maintenance</strong> of relatives abroad;</li>
                <li>Remittances under the <strong>Liberalised Remittance Scheme (LRS)</strong> that do not require <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> approval;</li>
                <li>Various other specified business and personal purposes mapped to <strong>RBI purpose codes</strong>.</li>
            </ul>
            <p>Banks use these purpose codes to decide whether forms are needed. If your remittance matches a listed purpose, keep evidence of the purpose code and supporting documents — you can avoid both forms, but the bank's internal controls may still ask for a declaration.</p>
            <div class="callout warn">
                <p><strong>Caution:</strong> "Not requiring forms" is not the same as "not taxable". The specified-list exemption is about the reporting forms; if tax is actually deductible under Section 195, that obligation stands separately.</p>
            </div>
        </section>

        <section class="content-section" id="process">
            <h2>How 15CA / 15CB Filing Works</h2>
            <ol>
                <li><strong>Determine taxability</strong> of the remittance under the Income-tax Act and DTAA — usually with a CA.</li>
                <li>If taxable and over ₹5 lakh without an AO certificate, the <strong>CA prepares Form 15CB</strong> with a UDIN, certifying nature, rate and TDS.</li>
                <li>The remitter <strong>files Form 15CA</strong> (the correct part) on the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax e-filing portal</a>, quoting the 15CB acknowledgement or AO order where relevant.</li>
                <li>The <strong>bank releases the remittance</strong> against the A2 form and the 15CA/15CB, deducting TDS at the certified rate.</li>
                <li>The TDS is reported in the regular <a href="/tds-return">TDS return</a> cycle.</li>
            </ol>
            <p>Form 15CA can be withdrawn within seven days of submission if an error is found. From 1 April 2026 the reporting migrates to Forms 145 and 146, but the underlying triggers and thresholds remain the same.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions on 15CA & 15CB</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When is Form 15CA required for a foreign remittance?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Form 15CA is the declaration a remitter files electronically before paying a non-resident. It is needed whenever the payment is chargeable to tax in India. The specific part depends on the facts: Part A for taxable remittances up to ₹5 lakh in the year, Part B when an Assessing Officer certificate has been obtained, Part C when a 15CB certificate is used, and Part D when the sum is not chargeable to tax but is not on the Rule 37BB exempt list.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When is Form 15CB required?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Form 15CB is a certificate from a Chartered Accountant that is required only when the remittance is chargeable to tax in India and the aggregate of remittances exceeds ₹5 lakh in the financial year, and no Assessing Officer certificate under Section 195(2), 195(3) or 197 has been obtained. In that case the remitter files Form 15CA Part C supported by the CA's 15CB. Below ₹5 lakh, or where an AO certificate exists, 15CB is not needed.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the ₹5 lakh threshold for 15CA and 15CB?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The ₹5 lakh figure is tested on the aggregate of remittances to non-residents during the financial year, not on a single transfer. If your total taxable remittances stay at or below ₹5 lakh, you file only Form 15CA Part A and no 15CB. Once the aggregate crosses ₹5 lakh and the sum is taxable, a 15CB certificate (with Part C) is required unless you hold an AO certificate, in which case Part B applies.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are the four parts of Form 15CA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Part A is for taxable remittances where the yearly aggregate does not exceed ₹5 lakh. Part B is for taxable remittances above ₹5 lakh where an Assessing Officer certificate under Section 195(2), 195(3) or 197 has been obtained. Part C is for taxable remittances above ₹5 lakh supported by a 15CB certificate from an accountant. Part D is for remittances that are not chargeable to tax and are not covered by the Rule 37BB specified list.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Rule 37BB specified list?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Rule 37BB contains a specified list of 33 payment categories for which neither Form 15CA nor 15CB needs to be furnished. These include certain imports, personal remittances for travel, education and medical treatment, and other purposes that do not require RBI approval. Banks map these to RBI purpose codes. If your remittance matches a listed purpose, you can avoid both forms, though you should keep proof of the purpose code.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Do I need any form if the remittance is not taxable in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If the remittance is not chargeable to tax in India, no 15CB is required. If it is also covered by the Rule 37BB specified list, no forms are required at all. If it is not on that list, you still file Form 15CA Part D to declare that the sum is not chargeable to tax. Determining taxability under Sections 5 and 9 and the relevant DTAA is the part where a CA's view matters most.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is Form 15CA Part B and when does it apply?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Part B applies when a taxable remittance exceeds ₹5 lakh in the year and the remitter has obtained an order or certificate from the Assessing Officer under Section 195(2), 195(3) or 197 specifying a nil or lower rate of tax. Because the AO has already determined the rate, a separate 15CB certificate is not needed; the remitter simply files Part B quoting the AO order, and tax is deducted at the rate specified.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does a DTAA change whether 15CB is needed?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A Double Taxation Avoidance Agreement can reduce or eliminate Indian tax on a remittance, but the remittance can still be chargeable to tax in principle. Where the sum is taxable and exceeds ₹5 lakh, a 15CB certificate is generally still required, and the CA examines the DTAA to certify the correct rate. The treaty position, tax residency certificate and Form 10F all feed into that determination.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Are Form 15CA and 15CB being replaced in 2026?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under the new income-tax framework, remittance reporting transitions to Forms 145 and 146 for remittances initiated on or after 1 April 2026, while the substance of the rules, the ₹5 lakh threshold, the four-part structure and the Rule 37BB exempt list remain the same. Forms 15CA and 15CB stay valid for remittances initiated before that date. This checker follows the established 15CA/15CB logic, which continues unchanged in substance.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is this 15CA/15CB applicability checker free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Form 15CA and 15CB Applicability Checker is completely free with no signup required. All logic runs in your browser and nothing is stored on our servers. It applies the Rule 37BB and Section 195 decision tree to tell you whether you need no forms, Form 15CA Part A, Part B, Part C with 15CB, or Part D. The final filing and any CA certificate should still be handled by a Chartered Accountant.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>15CB Certificate + 15CA Filing</h3>
            <p>UDIN-backed Form 15CB and Form 15CA filing, with DTAA analysis — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20need%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Form%2015CA%20/%2015CB%20foreign%20remittance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%2015CA/15CB%20Applicability%20Checker%20and%20would%20like%20help%20with%20Form%2015CA/15CB%20for%20a%20foreign%20remittance.%0A%0AMy%20details%3A%0A-%20Nature%20of%20remittance%3A%0A-%20Beneficiary%20country%3A%0A-%20Amount%20%28approx%29%3A%0A-%20Taxable%20/%20DTAA%20position%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
            <a href="/tds-return" class="sidebar-link">TDS Returns <span class="arrow">→</span></a>
            <a href="/itr-for-nris" class="sidebar-link">NRI ITR Filing <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/dtaa-form-67-foreign-tax-credit" class="sidebar-link">DTAA & Form 67 FTC <span class="arrow">→</span></a>
            <a href="/blog/residential-status-determination-flowchart" class="sidebar-link">NRI Residential Status <span class="arrow">→</span></a>
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

    var ans = { tax:null, list:null, agg:null, ao:null };

    function refreshEnabled() {
        // Q2 (list) only if not taxable; Q3 (agg) only if taxable; Q4 (ao) only if taxable & agg>5L
        setBlock('qb2', ans.tax === 'no');
        setBlock('qb3', ans.tax === 'yes');
        setBlock('qb4', ans.tax === 'yes' && ans.agg === 'yes');
    }
    function setBlock(id, enabled) {
        var el = document.getElementById(id);
        if (enabled) { el.classList.remove('disabled'); }
        else { el.classList.add('disabled'); }
    }

    function pick(btn) {
        var q = btn.dataset.q, v = btn.dataset.value;
        ans[q] = v;
        // visually select within this group
        btn.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        // reset dependent answers when a parent changes
        if (q === 'tax') { ans.list = null; ans.agg = null; ans.ao = null; clearGroup('qb2'); clearGroup('qb3'); clearGroup('qb4'); }
        if (q === 'agg') { ans.ao = null; clearGroup('qb4'); }
        refreshEnabled();
    }
    function clearGroup(id){ document.getElementById(id).querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); }); }

    function verdict(cls, tag, title, detail, steps) {
        var html = '<div class="verdict '+cls+'">';
        html += '<div class="verdict-tag">'+tag+'</div>';
        html += '<div class="verdict-title">'+title+'</div>';
        html += '<div class="verdict-detail">'+detail+'</div>';
        html += '</div>';
        if (steps && steps.length) {
            html += '<div class="path-steps">';
            steps.forEach(function(s){ html += '<div class="path-row"><span class="step-q">'+s[0]+'</span><span>'+s[1]+'</span></div>'; });
            html += '</div>';
        }
        return html;
    }

    function calculate() {
        if (ans.tax === null) { alert('Please answer question 1 (is the remittance taxable?).'); return; }

        var out = '';
        if (ans.tax === 'no') {
            if (ans.list === null) { alert('Please answer question 2 (is it on the Rule 37BB specified list?).'); return; }
            if (ans.list === 'yes') {
                out = verdict('none','No forms required','No Form 15CA or 15CB needed',
                    'The remittance is <strong>not chargeable to tax</strong> and is on the <strong>Rule 37BB specified list</strong>, so neither form is required. Keep evidence of the RBI purpose code and supporting documents for your bank.',
                    [['Taxable?','No'],['On specified list?','Yes']]);
            } else {
                out = verdict('form','Form 15CA — Part D','File Form 15CA Part D only',
                    'The remittance is <strong>not chargeable to tax</strong> but is <strong>not</strong> on the Rule 37BB specified list, so you file <strong>Part D</strong> of Form 15CA to declare non-taxability. No 15CB is required.',
                    [['Taxable?','No'],['On specified list?','No']]);
            }
        } else {
            // taxable
            if (ans.agg === null) { alert('Please answer question 3 (does the aggregate exceed ₹5 lakh?).'); return; }
            if (ans.agg === 'no') {
                out = verdict('form','Form 15CA — Part A','File Form 15CA Part A only',
                    'The remittance is <strong>taxable</strong> but the yearly aggregate is <strong>₹5 lakh or less</strong>, so only <strong>Part A</strong> of Form 15CA is required. No 15CB certificate is needed.',
                    [['Taxable?','Yes'],['Aggregate > ₹5L?','No']]);
            } else {
                if (ans.ao === null) { alert('Please answer question 4 (do you hold an AO certificate?).'); return; }
                if (ans.ao === 'yes') {
                    out = verdict('form','Form 15CA — Part B','File Form 15CA Part B (no 15CB)',
                        'The remittance is <strong>taxable</strong> and <strong>over ₹5 lakh</strong>, but you hold an <strong>AO certificate u/s 195(2)/195(3)/197</strong>. File <strong>Part B</strong> quoting the AO order; a separate 15CB is not required.',
                        [['Taxable?','Yes'],['Aggregate > ₹5L?','Yes'],['AO certificate?','Yes']]);
                } else {
                    out = verdict('ca','Form 15CB + Form 15CA Part C','15CB CA certificate required',
                        'The remittance is <strong>taxable</strong>, <strong>over ₹5 lakh</strong>, and you have <strong>no AO certificate</strong> — so a Chartered Accountant must issue <strong>Form 15CB</strong> and you file <strong>Form 15CA Part C</strong> referencing it. This is the case where a CA is mandatory.',
                        [['Taxable?','Yes'],['Aggregate > ₹5L?','Yes'],['AO certificate?','No']]);
                }
            }
        }

        document.getElementById('verdictContainer').innerHTML = out;
        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc() {
        ans = { tax:null, list:null, agg:null, ao:null };
        document.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        ['qb2','qb3','qb4'].forEach(function(id){ document.getElementById(id).classList.add('disabled'); });
        document.getElementById('resultSection').classList.remove('visible');
    }

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
        sections.forEach(function(s){ var top = s.offsetTop - 80; if (window.pageYOffset >= top) current = s.getAttribute('id'); });
        navLinks.forEach(function(link){ link.classList.toggle('active', link.getAttribute('href') === '#' + current); });
    });
</script>
@endsection
