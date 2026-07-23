@extends('layouts.app')

@section('meta')
<title>Visa NWC Currency Converter | INR to USD/CAD/GBP/EUR</title>
<meta name="description" content="Free visa NWC currency converter: convert INR net worth into USD, CAD, GBP, EUR or AUD at the reference rate for a dual-currency net worth certificate. Try now!">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/visa-nwc-currency-converter">

<meta property="og:title" content="Visa NWC Currency Converter — INR to USD/CAD/GBP">
<meta property="og:description" content="Convert your INR net worth to USD, CAD, GBP, EUR or AUD at the reference rate for a dual-currency visa net worth certificate. Free, instant, no signup.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/visa-nwc-currency-converter">
<meta property="og:image" content="/tools/visa-nwc-currency-converter-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Visa NWC Currency Converter — INR to USD/CAD/GBP">
<meta name="twitter:description" content="Convert INR net worth to USD/CAD/GBP/EUR/AUD at the reference rate for a dual-currency visa net worth certificate. Free & instant.">
<meta name="twitter:image" content="/tools/visa-nwc-currency-converter-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Visa NWC Currency Converter",
  "description": "Visa NWC Currency Converter converts an Indian-rupee net worth figure into USD, CAD, GBP, EUR or AUD at a user-entered reference exchange rate for dual-currency net worth certificates used in visa and immigration applications, and checks the result against the Canada IRCC proof-of-funds threshold.",
  "url": "/tools/visa-nwc-currency-converter",
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
    {"@type": "ListItem", "position": 3, "name": "Visa NWC Currency Converter", "item": "/tools/visa-nwc-currency-converter"}
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
      "name": "What is a dual-currency net worth certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A dual-currency net worth certificate states your assets, liabilities and total net worth in both Indian rupees and the destination country's currency, such as USD, CAD, GBP, EUR or AUD. The conversion uses the reference exchange rate on the certificate date. Consular officers prefer this format because they do not have to convert figures themselves when assessing your financial capacity."
      }
    },
    {
      "@type": "Question",
      "name": "Which exchange rate is used in a visa net worth certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Chartered Accountants typically use the RBI reference rate or the FBIL rate prevailing on the date the certificate is issued. The certificate states the rate and date used so the embassy can verify the conversion. This calculator lets you enter that reference rate and instantly see your net worth in the destination currency for a dual-currency certificate."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert my INR net worth to USD or CAD for a visa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Divide your total net worth in rupees by the exchange rate for one unit of the foreign currency. For example, ₹50,00,000 at ₹83 per USD equals about USD 60,241. Enter your net worth and the reference rate into this converter and it does the maths instantly, formatting the result for inclusion in a dual-currency net worth certificate."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Canada proof-of-funds requirement in 2026?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For study permit applicants outside Quebec, IRCC requires a single applicant to show living-cost funds of CAD 22,895, effective from 1 September 2025, in addition to first-year tuition and travel. The amount rises with each accompanying family member. This converter flags whether your converted net worth clears the single-applicant threshold as a quick reference."
      }
    },
    {
      "@type": "Question",
      "name": "Is proof of funds the same as a net worth certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Proof of funds usually means liquid money shown in bank statements, while a net worth certificate states total wealth including property and investments minus liabilities. Most visa applications benefit from both: one shows immediate liquidity, the other shows overall financial stability. A CA prepares the net worth certificate with a UDIN for authenticity."
      }
    },
    {
      "@type": "Question",
      "name": "Which currencies can I convert for a visa certificate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This converter supports the five currencies most commonly required on Indian visa net worth certificates: US dollar (USD), Canadian dollar (CAD), British pound (GBP), euro (EUR) for Schengen countries, and Australian dollar (AUD). You enter the reference rate for the currency your destination country uses, and the tool shows your net worth in that currency."
      }
    },
    {
      "@type": "Question",
      "name": "How recent should the exchange rate on the certificate be?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The rate should be the reference rate on or close to the certificate's issue date, and the certificate is generally expected to be prepared within three months of your visa application. Using a current rate keeps the converted figure defensible. A certificate dated close to your application reflects your most current financial position and is viewed more favourably."
      }
    },
    {
      "@type": "Question",
      "name": "Does the converted figure need a CA's signature?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. For visa purposes the net worth certificate, including the dual-currency conversion, must be issued by a practising Chartered Accountant and carry a UDIN (Unique Document Identification Number). The UDIN lets the embassy verify the certificate online. This tool gives you the converted figure, but the final certificate must be CA-certified to be accepted."
      }
    },
    {
      "@type": "Question",
      "name": "Why do embassies want a dual-currency format?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A single-currency certificate showing only rupees is incomplete for visa purposes because consular officers should not have to convert it themselves. Stating the value in the destination currency at a clear reference rate removes ambiguity and speeds up assessment. It also signals that the certificate was prepared with the specific visa application in mind."
      }
    },
    {
      "@type": "Question",
      "name": "Can I use this tool for a student visa sponsor's net worth?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. For student visas the net worth of parents or sponsors is usually required, not just the student's own assets. Enter the sponsor's total net worth in rupees and the destination-currency rate to get the converted figure. A CA can then prepare a family or sponsor net worth certificate covering parents and student together, which is the format most embassies expect."
      }
    },
    {
      "@type": "Question",
      "name": "Is this visa NWC currency converter free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Visa NWC Currency Converter is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It converts INR net worth into five destination currencies, formats the figures for a dual-currency certificate, and flags the Canada IRCC single-applicant proof-of-funds threshold for reference."
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
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 24px; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; text-transform: none; letter-spacing: 0; font-weight: 400; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; }
        .toggle-btn { flex: 1; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 60px; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
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
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); word-break: break-word; overflow-wrap: anywhere; text-align: right; }
        .pof-pill { display:inline-block; padding:4px 14px; border-radius:20px; font-size:13px; font-weight:700; font-family:var(--font-body); }
        .pof-good { background:#D1FAE5; color:#059669; }
        .pof-bad { background:#FEE2E2; color:#DC2626; }
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
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
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
        <a href="#calculator">Converter</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">Dual-Currency NWC</a>
        <a href="#rate">Which Rate</a>
        <a href="#thresholds">Country Thresholds</a>
        <a href="#mistakes">Common Mistakes</a>
        <a href="#checklist">Certificate Checklist</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Visa NWC Currency Converter
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Visa NWC Currency Converter — INR to <span>USD/CAD/GBP</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need a CA-certified certificate? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20need%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Dual-currency%20visa%20net%20worth%20certificate%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20would%20like%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa%20application.%0A%0AMy%20details%3A%0A-%20Destination%20country%3A%0A-%20Visa%20type%3A%0A-%20Net%20worth%20%28approx%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free converter turns your <strong>net worth in Indian rupees</strong> into the destination country's currency at the <strong>reference exchange rate</strong> you enter — exactly what a <strong>dual-currency net worth certificate</strong> needs for a visa or immigration application. Pick USD, CAD, GBP, EUR or AUD, enter your net worth and the rate, and get the converted figure formatted for the certificate, plus a quick check against Canada's IRCC single-applicant proof-of-funds threshold. The final certificate must still be issued and UDIN-signed by a practising CA.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Convert Net Worth for a Visa Certificate</h2>
            <noscript>
                <div class="noscript-box">
                    This converter requires JavaScript. Please enable JavaScript, or divide your INR net worth by the reference rate manually (see the formula below).
                </div>
            </noscript>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Destination Currency</label>
                <div class="toggle-group" id="currencyToggle">
                    <button type="button" class="toggle-btn active" data-value="USD" onclick="setCurrency(this)">USD 🇺🇸</button>
                    <button type="button" class="toggle-btn" data-value="CAD" onclick="setCurrency(this)">CAD 🇨🇦</button>
                    <button type="button" class="toggle-btn" data-value="GBP" onclick="setCurrency(this)">GBP 🇬🇧</button>
                    <button type="button" class="toggle-btn" data-value="EUR" onclick="setCurrency(this)">EUR 🇪🇺</button>
                    <button type="button" class="toggle-btn" data-value="AUD" onclick="setCurrency(this)">AUD 🇦🇺</button>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="netWorth">Net Worth (₹ INR)</label>
                    <input type="text" id="netWorth" placeholder="e.g. 5000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Total assets minus liabilities, in rupees.</div>
                </div>
                <div class="form-group">
                    <label for="rate">Reference Rate (₹ per 1 <span id="rateCur">USD</span>)</label>
                    <input type="text" id="rate" placeholder="e.g. 83.50" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">RBI / FBIL reference rate on the certificate date.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Convert</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Net Worth (INR)</div>
                        <div class="result-value" id="resInr">—</div>
                    </div>
                    <div class="result-card highlight" style="grid-column: 1 / -1;">
                        <div class="result-label">Net Worth (<span id="resCurLabel">USD</span>)</div>
                        <div class="result-value" id="resForeign">—</div>
                    </div>
                </div>
                <div class="result-breakdown" id="breakdownSection"></div>
                <div style="margin-top:16px;" id="pofWrap">
                    <span class="result-label" style="display:block;margin-bottom:6px;">Canada IRCC Proof-of-Funds (single applicant, living costs)</span>
                    <span class="pof-pill" id="pofPill">—</span>
                    <p style="font-size:13px;color:var(--text-secondary);margin-top:10px;line-height:1.6;" id="pofNote"></p>
                </div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need this on a CA-certified dual-currency certificate?</div>
                    <div class="post-result-cta-sub">UDIN-authenticated net worth certificate in INR + your destination currency, usually within 24 hours.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20need%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Dual-currency%20visa%20net%20worth%20certificate%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20would%20like%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa%20application.%0A%0AMy%20details%3A%0A-%20Destination%20country%3A%0A-%20Visa%20type%3A%0A-%20Net%20worth%20%28approx%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Converter</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use This Visa NWC Currency Converter</h2>
            <ol>
                <li><strong>Select the destination currency</strong> — USD for the USA, CAD for Canada, GBP for the UK, EUR for Schengen countries, or AUD for Australia.</li>
                <li><strong>Enter your net worth in rupees</strong> — your total assets (property, bank balances, FDs, mutual funds, etc.) minus your liabilities.</li>
                <li><strong>Enter the reference rate</strong> — how many rupees equal one unit of the foreign currency, using the RBI or FBIL reference rate on your certificate's date.</li>
                <li><strong>Click Convert</strong> — you instantly see your net worth in the destination currency, the rate used, and (for Canada) whether the figure clears the IRCC single-applicant living-cost threshold.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Use the rate as close to the certificate's issue date as possible, and state both the rate and date on the certificate. Pair this with our <a href="/tools/net-worth-calculator">net worth calculator</a> to arrive at the INR figure first, then convert it here.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Is a Dual-Currency Net Worth Certificate?</h2>
            <p>A net worth certificate is a CA-certified statement of your total assets, liabilities and resulting net worth on a given date. For visa and immigration purposes, embassies expect it in <strong>dual-currency format</strong> — your net worth stated in both Indian rupees and the destination country's currency, converted at the reference exchange rate on the certificate date.</p>
            <p>Consular officers assessing financial capacity prefer this because they should not have to convert rupee figures themselves. A single-currency certificate showing only INR is considered incomplete for most visa applications. Stating the value in USD, CAD, GBP, EUR or AUD at a clear, dated reference rate removes ambiguity and signals the certificate was prepared specifically for your application.</p>
            <h3>Net worth certificate vs proof of funds</h3>
            <p>These are different documents. <a href="/net-worth-certificate-for-visa">Proof of funds</a> usually means liquid money shown through bank statements, while a net worth certificate states overall wealth including property and investments, net of liabilities. Most visa applications benefit from both — one demonstrates immediate liquidity, the other overall financial stability.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool gives the converted figure for planning. The certificate itself must be issued by a practising Chartered Accountant and carry a UDIN — verifiable on the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> UDIN portal — to be accepted by an embassy.</p>
            </div>
        </section>

        <section class="content-section" id="rate">
            <h2>Which Exchange Rate Should You Use?</h2>
            <p>For a defensible certificate, use the reference rate published by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a> or the FBIL rate prevailing on the date the certificate is issued. The certificate should state the exact rate and date so the embassy can verify the conversion independently. Avoid card or money-changer rates, which include margins and are not appropriate for a statutory certificate.</p>
            <div class="formula-box">
                <span class="label">Net Worth (foreign)</span> = Net Worth (₹) ÷ Rate (₹ per 1 unit)<br><br>
                <span class="label">Example:</span> ₹50,00,000 ÷ ₹83 per USD<br>
                = <span class="label">USD 60,241</span>
            </div>
            <p>The certificate is generally expected to be prepared within three months of your visa application, so use a current rate. A certificate dated close to your application reflects your most recent financial position and is viewed more favourably than an older one. The conversion methodology should align with the UDIN framework prescribed by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>, under which every CA certificate carries a verifiable unique number.</p>
        </section>

        <section class="content-section" id="mistakes">
            <h2>Common Mistakes to Avoid</h2>
            <p>A converted figure is only as useful as the certificate it sits in. The most frequent reasons visa net worth certificates are questioned or rejected are avoidable:</p>
            <h3>1. Single-currency format</h3>
            <p>Submitting a certificate in rupees only forces the consular officer to convert it themselves and is treated as incomplete. Always present the dual-currency format with the rate and date stated.</p>
            <h3>2. Inflated asset values</h3>
            <p>Showing a ₹40 lakh flat as ₹1.5 crore raises immediate red flags — embassies have access to general property-market data. Conservative, defensible valuations are trusted far more than inflated numbers, and an inflated INR base produces an equally inflated foreign-currency figure.</p>
            <h3>3. Using a card or money-changer rate</h3>
            <p>Retail forex rates carry margins and are not appropriate for a statutory certificate. Use the RBI/FBIL reference rate, which the embassy can independently verify against published data from the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>.</p>
            <h3>4. A stale certificate</h3>
            <p>A certificate dated two months before the application, using an old rate, is weaker than one prepared close to submission. Refresh both the valuation and the conversion rate near your application date.</p>
            <h3>5. Confusing net worth with proof of funds</h3>
            <p>Net worth (total wealth net of liabilities) and liquid proof of funds (bank balances) answer different questions. For destinations such as Canada, confirm the liquid <a href="https://www.canada.ca/en/immigration-refugees-citizenship.html" target="_blank" rel="noopener">IRCC proof-of-funds</a> requirement separately from your overall net worth.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Dual-Currency Net Worth Certificates?</h3>
            <p>Patron Accounting LLP supports students, sponsors and applicants needing visa net worth certificates — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20need%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Dual-currency%20visa%20net%20worth%20certificate%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20would%20like%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa%20application.%0A%0AMy%20details%3A%0A-%20Destination%20country%3A%0A-%20Visa%20type%3A%0A-%20Net%20worth%20%28approx%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="thresholds">
            <h2>Country Currencies &amp; Financial Thresholds</h2>
            <p>Each destination uses its own currency on the certificate, and several countries publish minimum financial requirements. Use the converter to see whether your net worth comfortably clears the relevant benchmark.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Destination</th><th>Currency</th><th>Notes on financial requirement</th></tr>
                </thead>
                <tbody>
                    <tr><td>Canada</td><td>CAD</td><td>IRCC study-permit living costs: CAD 22,895 for a single applicant (from 1 Sep 2025), rising per family member, excluding tuition and travel</td></tr>
                    <tr><td>USA</td><td>USD</td><td>No fixed figure; consular officers evaluate overall financial capacity</td></tr>
                    <tr><td>UK</td><td>GBP</td><td>Maintenance requirement varies by visa route</td></tr>
                    <tr><td>Schengen</td><td>EUR</td><td>Varies by consulate and visa type</td></tr>
                    <tr><td>Australia</td><td>AUD</td><td>Genuine-funds expectation varies by visa subclass</td></tr>
                </tbody>
            </table>
            <p>For country-specific certificates, see Patron's pages for the <a href="/net-worth-certificate-for-canada-visa">Canada visa</a>, <a href="/net-worth-certificate-for-us-visa">US visa</a>, <a href="/net-worth-certificate-for-uk-visa">UK visa</a>, <a href="/net-worth-certificate-for-schengen-visa">Schengen visa</a> and <a href="/net-worth-certificate-for-australia-visa">Australia visa</a>. Thresholds change, so always confirm the current figure with the official immigration authority — for example <a href="https://www.canada.ca/en/immigration-refugees-citizenship.html" target="_blank" rel="noopener">IRCC (Canada)</a>, <a href="https://www.gov.uk/browse/visas-immigration" target="_blank" rel="noopener">UK Visas &amp; Immigration</a> or <a href="https://immi.homeaffairs.gov.au/" target="_blank" rel="noopener">Australia Home Affairs</a> — before finalising.</p>
        </section>

        <section class="content-section" id="checklist">
            <h2>Dual-Currency NWC Checklist</h2>
            <p>A visa-ready net worth certificate should:</p>
            <ul>
                <li>State net worth in <strong>both INR and the destination currency</strong> at the reference rate, with the rate and date shown.</li>
                <li>Be issued by a <strong>practising Chartered Accountant</strong> and carry a <strong>UDIN</strong> for online verification.</li>
                <li>Be prepared <strong>within three months</strong> of the visa application, ideally close to the application date.</li>
                <li>Use <strong>conservative, defensible valuations</strong> for property and assets — inflated figures invite embassy scrutiny.</li>
                <li>For <strong>student visas</strong>, cover the parents'/sponsor's net worth, often in a single family certificate.</li>
                <li>For <strong>jointly held assets</strong>, clearly apportion ownership — see <a href="/net-worth-certificate-for-joint-owners-in-india">joint-owner certificates</a>.</li>
            </ul>
            <p>Use our <a href="/tools/nwc-document-checklist">NWC document checklist</a> to gather supporting documents (bank statements, FD receipts, mutual fund CAS, property papers, loan statements) before your CA prepares the certificate in the <a href="/net-worth-certificate-dual-currency-format">dual-currency format</a>.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Visa NWC Conversion</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is a dual-currency net worth certificate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A dual-currency net worth certificate states your assets, liabilities and total net worth in both Indian rupees and the destination country's currency, such as USD, CAD, GBP, EUR or AUD. The conversion uses the reference exchange rate on the certificate date. Consular officers prefer this format because they do not have to convert figures themselves when assessing your financial capacity.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which exchange rate is used in a visa net worth certificate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Chartered Accountants typically use the RBI reference rate or the FBIL rate prevailing on the date the certificate is issued. The certificate states the rate and date used so the embassy can verify the conversion. This calculator lets you enter that reference rate and instantly see your net worth in the destination currency for a dual-currency certificate.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I convert my INR net worth to USD or CAD for a visa?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Divide your total net worth in rupees by the exchange rate for one unit of the foreign currency. For example, ₹50,00,000 at ₹83 per USD equals about USD 60,241. Enter your net worth and the reference rate into this converter and it does the maths instantly, formatting the result for inclusion in a dual-currency net worth certificate.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Canada proof-of-funds requirement in 2026?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For study permit applicants outside Quebec, IRCC requires a single applicant to show living-cost funds of CAD 22,895, effective from 1 September 2025, in addition to first-year tuition and travel. The amount rises with each accompanying family member. This converter flags whether your converted net worth clears the single-applicant threshold as a quick reference.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is proof of funds the same as a net worth certificate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Proof of funds usually means liquid money shown in bank statements, while a net worth certificate states total wealth including property and investments minus liabilities. Most visa applications benefit from both: one shows immediate liquidity, the other shows overall financial stability. A CA prepares the net worth certificate with a UDIN for authenticity.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which currencies can I convert for a visa certificate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">This converter supports the five currencies most commonly required on Indian visa net worth certificates: US dollar (USD), Canadian dollar (CAD), British pound (GBP), euro (EUR) for Schengen countries, and Australian dollar (AUD). You enter the reference rate for the currency your destination country uses, and the tool shows your net worth in that currency.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How recent should the exchange rate on the certificate be?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The rate should be the reference rate on or close to the certificate's issue date, and the certificate is generally expected to be prepared within three months of your visa application. Using a current rate keeps the converted figure defensible. A certificate dated close to your application reflects your most current financial position and is viewed more favourably.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does the converted figure need a CA's signature?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. For visa purposes the net worth certificate, including the dual-currency conversion, must be issued by a practising Chartered Accountant and carry a UDIN (Unique Document Identification Number). The UDIN lets the embassy verify the certificate online. This tool gives you the converted figure, but the final certificate must be CA-certified to be accepted.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Why do embassies want a dual-currency format?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A single-currency certificate showing only rupees is incomplete for visa purposes because consular officers should not have to convert it themselves. Stating the value in the destination currency at a clear reference rate removes ambiguity and speeds up assessment. It also signals that the certificate was prepared with the specific visa application in mind.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I use this tool for a student visa sponsor's net worth?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. For student visas the net worth of parents or sponsors is usually required, not just the student's own assets. Enter the sponsor's total net worth in rupees and the destination-currency rate to get the converted figure. A CA can then prepare a family or sponsor net worth certificate covering parents and student together, which is the format most embassies expect.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is this visa NWC currency converter free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Visa NWC Currency Converter is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It converts INR net worth into five destination currencies, formats the figures for a dual-currency certificate, and flags the Canada IRCC single-applicant proof-of-funds threshold for reference.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Dual-Currency NWC in 24 Hours</h3>
            <p>UDIN-authenticated net worth certificates in INR + your destination currency — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20need%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Dual-currency%20visa%20net%20worth%20certificate%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Visa%20NWC%20Currency%20Converter%20and%20would%20like%20a%20CA-certified%20dual-currency%20net%20worth%20certificate%20for%20my%20visa%20application.%0A%0AMy%20details%3A%0A-%20Destination%20country%3A%0A-%20Visa%20type%3A%0A-%20Net%20worth%20%28approx%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/net-worth-certificate-for-visa" class="sidebar-link">Net Worth Certificate for Visa <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-dual-currency-format" class="sidebar-link">Dual-Currency NWC Format <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-for-students" class="sidebar-link">NWC for Student Visa <span class="arrow">→</span></a>
            <a href="/net-worth-certificate" class="sidebar-link">Net Worth Certificate (India) <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-for-joint-owners-in-india" class="sidebar-link">NWC for Joint Owners <span class="arrow">→</span></a>
            <a href="/dsc-registration" class="sidebar-link">Digital Signature (DSC) <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Country-Specific NWC</h3>
            <a href="/net-worth-certificate-for-canada-visa" class="sidebar-link">Canada Visa NWC <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-for-us-visa" class="sidebar-link">US Visa NWC <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-for-uk-visa" class="sidebar-link">UK Visa NWC <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-for-schengen-visa" class="sidebar-link">Schengen Visa NWC <span class="arrow">→</span></a>
            <a href="/net-worth-certificate-for-australia-visa" class="sidebar-link">Australia Visa NWC <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/net-worth-calculator" class="sidebar-link">Net Worth Calculator <span class="arrow">→</span></a>
            <a href="/tools/nwc-document-checklist" class="sidebar-link">NWC Document Checklist <span class="arrow">→</span></a>
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

    var currency = 'USD';
    var symbols = { USD:'$', CAD:'C$', GBP:'£', EUR:'€', AUD:'A$' };
    var names = { USD:'US Dollar', CAD:'Canadian Dollar', GBP:'British Pound', EUR:'Euro', AUD:'Australian Dollar' };
    var CANADA_POF = 22895; // IRCC single applicant living costs (from 1 Sep 2025)

    function setCurrency(btn) {
        currency = btn.dataset.value;
        btn.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        document.getElementById('rateCur').textContent = currency;
    }

    function fmtINR(n) { return '₹' + Math.round(n).toLocaleString('en-IN'); }
    function fmtForeign(n) {
        return symbols[currency] + n.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' ' + currency;
    }

    function calculate() {
        var nw = parseINR(document.getElementById('netWorth').value);
        var rate = parseINR(document.getElementById('rate').value);

        if (!isFinite(nw) || nw < 0 || !isFinite(rate) || rate <= 0) {
            alert('Please enter a valid net worth (in ₹) and a positive reference rate.');
            return;
        }

        var foreign = nw / rate;

        document.getElementById('resInr').textContent = fmtINR(nw);
        document.getElementById('resCurLabel').textContent = currency;
        document.getElementById('resForeign').textContent = fmtForeign(foreign);

        var rows = '';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Net worth (INR)</span><span class="breakdown-value">' + fmtINR(nw) + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Reference rate</span><span class="breakdown-value">₹' + rate.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:4}) + ' / ' + currency + '</span></div>';
        rows += '<div class="breakdown-row"><span class="breakdown-label">Net worth (' + names[currency] + ')</span><span class="breakdown-value">' + fmtForeign(foreign) + '</span></div>';
        document.getElementById('breakdownSection').innerHTML = rows;

        // Canada IRCC proof-of-funds reference (only meaningful for CAD)
        var wrap = document.getElementById('pofWrap');
        var pill = document.getElementById('pofPill');
        var note = document.getElementById('pofNote');
        if (currency === 'CAD') {
            wrap.style.display = 'block';
            if (foreign >= CANADA_POF) {
                pill.textContent = 'Clears CAD 22,895';
                pill.className = 'pof-pill pof-good';
                note.textContent = 'Your converted net worth meets or exceeds the IRCC single-applicant living-cost threshold of CAD 22,895 (from 1 Sep 2025). Note this is living costs only — tuition and travel are additional, and the figure rises with each accompanying family member.';
            } else {
                pill.textContent = 'Below CAD 22,895';
                pill.className = 'pof-pill pof-bad';
                note.textContent = 'Your converted net worth is below the IRCC single-applicant living-cost threshold of CAD 22,895 (from 1 Sep 2025). Remember net worth and liquid proof of funds differ — confirm liquid funds separately, and the threshold rises with family members.';
            }
        } else {
            wrap.style.display = 'none';
        }

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc() {
        document.getElementById('netWorth').value = '';
        document.getElementById('rate').value = '';
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['netWorth','rate'].forEach(function(id){
        document.getElementById(id).addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });
    });

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
        sections.forEach(function(s){
            var top = s.offsetTop - 80;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(function(link){
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });
</script>
@endsection
