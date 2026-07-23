@extends('layouts.app')

@section('meta')
<title>Turnover Threshold Checker | GST, Audit &amp; MSME FY 25-26</title>
<meta name="description" content="Turnover threshold checker FY 2025-26: enter turnover to see if GST registration, tax audit u/s 44AB, presumptive 44AD/44ADA or MSME limits apply. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/turnover-threshold-checker">

<meta property="og:title" content="Turnover Threshold Checker — GST, Audit & MSME FY 25-26">
<meta property="og:description" content="Enter your annual turnover and instantly see which compliance thresholds apply: GST registration, tax audit u/s 44AB, presumptive taxation and MSME classification.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/turnover-threshold-checker">
<meta property="og:image" content="/tools/turnover-threshold-checker-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Turnover Threshold Checker — GST, Audit & MSME FY 25-26">
<meta name="twitter:description" content="Enter turnover to see if GST registration, tax audit, presumptive scheme or MSME limits apply. Free & instant for FY 2025-26.">
<meta name="twitter:image" content="/tools/turnover-threshold-checker-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Turnover Threshold Checker",
  "description": "Turnover Threshold Checker takes a business or professional's annual turnover, entity type, digital-transaction share and state category and instantly shows which Indian compliance thresholds are triggered for FY 2025-26: GST registration, tax audit under Section 44AB, presumptive taxation under Section 44AD/44ADA, and MSME (Udyam) classification.",
  "url": "/tools/turnover-threshold-checker",
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
    {"@type": "ListItem", "position": 3, "name": "Turnover Threshold Checker", "item": "/tools/turnover-threshold-checker"}
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
      "name": "What is the GST registration turnover limit in 2026?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For most states, GST registration becomes mandatory once aggregate turnover crosses 40 lakh for a supplier of goods or 20 lakh for a supplier of services in a financial year. In special category states the limits are lower, at 20 lakh for goods and 10 lakh for services. These limits are based on PAN-India aggregate turnover, not state-wise, and certain suppliers such as inter-state and e-commerce sellers must register regardless of turnover."
      }
    },
    {
      "@type": "Question",
      "name": "What is the tax audit limit under Section 44AB for FY 2025-26?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For businesses the tax audit threshold is turnover above 1 crore, extended to 10 crore when at least 95% of receipts and 95% of payments are non-cash. For specified professionals the threshold is gross receipts above 50 lakh, with no enhanced digital limit. A tax audit can also be triggered when a taxpayer opts out of the presumptive scheme and declares income below the deemed rate while having taxable income."
      }
    },
    {
      "@type": "Question",
      "name": "When does the 10 crore tax audit limit apply instead of 1 crore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The enhanced 10 crore turnover limit for business tax audit applies only when both cash receipts and cash payments are 5% or less of the respective totals, that is at least 95% of transactions are digital. If cash transactions exceed 5% on either side, the threshold drops back to 1 crore. The 95% test is assessed on the full year's transactions, so businesses must maintain digital discipline throughout the year."
      }
    },
    {
      "@type": "Question",
      "name": "What is the presumptive taxation turnover limit under 44AD?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A resident business can opt for presumptive taxation under Section 44AD if turnover is up to 2 crore, raised to 3 crore when cash receipts are 5% or less of total receipts. Income is declared at 8% of turnover, or 6% for digital receipts. The checker flags whether your turnover keeps you within the 44AD ceiling so you can plan whether to use the presumptive scheme."
      }
    },
    {
      "@type": "Question",
      "name": "What is the 44ADA limit for professionals?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Specified professionals such as doctors, lawyers, architects, engineers and accountants can use the presumptive scheme under Section 44ADA if gross receipts are up to 50 lakh, raised to 75 lakh when cash receipts are 5% or less of total receipts. At least 50% of receipts must be declared as income. If you declare less than 50% and have taxable income, a tax audit applies."
      }
    },
    {
      "@type": "Question",
      "name": "What are the revised MSME turnover limits for 2025?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Effective from 1 April 2025, MSME classification uses both investment and turnover. A micro enterprise has investment up to 2.5 crore and turnover up to 10 crore, a small enterprise up to 25 crore investment and 100 crore turnover, and a medium enterprise up to 125 crore investment and 500 crore turnover. Both conditions must be met; exports are excluded from turnover. This checker classifies you by turnover as an indicator."
      }
    },
    {
      "@type": "Question",
      "name": "Is aggregate turnover the same as taxable turnover for GST?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Aggregate turnover for GST includes taxable supplies, exempt supplies, exports and inter-state supplies under the same PAN across India, but excludes GST itself and inward supplies taxed under reverse charge. The registration thresholds are tested against aggregate turnover, so even exempt and export sales count towards the limit. This is wider than just your taxable sales figure."
      }
    },
    {
      "@type": "Question",
      "name": "Do I have to register for GST if I am below the threshold?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not compulsorily, but you can register voluntarily. Many B2B businesses register below the threshold to claim input tax credit and because large clients prefer GST-registered vendors. Some suppliers must register regardless of turnover, including those making inter-state taxable supplies, e-commerce operators and persons liable under reverse charge. The checker shows the turnover trigger; compulsory-registration categories apply separately."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if I cross a threshold mid-year?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Thresholds are tested on turnover for the financial year, so crossing a limit during the year brings the obligation into effect. For GST you must apply for registration within 30 days of becoming liable. For tax audit the position is judged on the full-year turnover, and the audit report is generally due by 30 September of the assessment year. Acting early avoids late-registration and audit penalties."
      }
    },
    {
      "@type": "Question",
      "name": "Does this checker replace advice from a CA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The Turnover Threshold Checker is an indicative planning tool based on FY 2025-26 limits. Real cases involve nuances such as compulsory GST categories, opt-out rules under the presumptive scheme, the composite MSME investment test, and entity-specific rules. A Chartered Accountant should confirm your exact obligations before you register, file or rely on a presumptive declaration."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Turnover Threshold Checker free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Turnover Threshold Checker is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It checks your turnover against GST registration, Section 44AB tax audit, Section 44AD/44ADA presumptive and MSME classification thresholds for FY 2025-26 and gives an instant, colour-coded summary."
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
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
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
        .check-card { border-radius: var(--radius); padding: 18px 20px; border: 1px solid var(--border); margin-bottom: 14px; background: var(--surface); border-left: 4px solid var(--text-muted); }
        .check-card.req { border-left-color: var(--danger); background: #FEF2F2; }
        .check-card.ok { border-left-color: var(--success); background: #F0FDF4; }
        .check-card.info { border-left-color: var(--info); background: #EFF6FF; }
        .check-head { display: flex; align-items: center; justify-content: space-between; gap: 12px; margin-bottom: 6px; flex-wrap: wrap; }
        .check-title { font-size: 16px; font-weight: 700; color: var(--primary-dark); }
        .check-pill { font-size: 12px; font-weight: 700; padding: 3px 12px; border-radius: 20px; white-space: nowrap; }
        .check-pill.req { background: #FEE2E2; color: #DC2626; }
        .check-pill.ok { background: #D1FAE5; color: #059669; }
        .check-pill.info { background: #DBEAFE; color: #1E40AF; }
        .check-detail { font-size: 14px; color: var(--text-secondary); line-height: 1.65; }
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
        <a href="#gst">GST Limit</a>
        <a href="#audit">Tax Audit</a>
        <a href="#presumptive">Presumptive</a>
        <a href="#msme">MSME</a>
        <a href="#penalties">Penalties</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Turnover Threshold Checker
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Turnover Threshold Checker — <span>GST, Audit, & MSME FY 25-26</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Not sure which thresholds apply? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Turnover%20Threshold%20Checker%20and%20need%20help%20with%20GST%2C%20tax%20audit%20or%20MSME%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Turnover%20threshold%20/%20compliance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Turnover%20Threshold%20Checker%20and%20would%20like%20help%20with%20my%20compliance%20obligations.%0A%0AMy%20details%3A%0A-%20Business%20/%20profession%3A%0A-%20Annual%20turnover%20%28approx%29%3A%0A-%20Concern%20%28GST%20/%20tax%20audit%20/%20presumptive%20/%20MSME%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Enter your <strong>annual turnover</strong> and a few details, and this free checker instantly shows which FY 2025-26 compliance thresholds you cross — <strong>GST registration</strong> (₹40L goods / ₹20L services, lower in special states), <strong>tax audit u/s 44AB</strong> (₹1 crore, or ₹10 crore if 95% digital; ₹50L for professionals), <strong>presumptive taxation</strong> under <strong>44AD</strong> (₹2–3 crore) / <strong>44ADA</strong> (₹50–75 lakh), and your <strong>MSME (Udyam) class</strong>. It is an indicative planning tool — a CA should confirm your exact position.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check Your Turnover Thresholds</h2>
            <noscript>
                <div class="noscript-box">
                    This checker requires JavaScript. Please enable JavaScript, or compare your turnover with the threshold tables further down this page.
                </div>
            </noscript>

            <div class="form-group" style="margin-bottom:20px;">
                <label>You are a…</label>
                <div class="toggle-group" id="entityToggle">
                    <button type="button" class="toggle-btn active" data-value="goods" onclick="setEntity(this)">Business — Goods</button>
                    <button type="button" class="toggle-btn" data-value="services" onclick="setEntity(this)">Business — Services</button>
                    <button type="button" class="toggle-btn" data-value="profession" onclick="setEntity(this)">Professional</button>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="turnover">Annual Turnover / Gross Receipts (₹)</label>
                    <input type="text" id="turnover" placeholder="e.g. 15000000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Aggregate turnover for the financial year, in rupees.</div>
                </div>
                <div class="form-group">
                    <label for="digital">Digital Transactions</label>
                    <select id="digital">
                        <option value="yes">95% or more are non-cash</option>
                        <option value="no" selected>Less than 95% non-cash</option>
                    </select>
                    <div class="field-hint">Affects the tax-audit and presumptive ceilings.</div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:8px;">
                <label>State Category (for GST)</label>
                <div class="toggle-group" id="stateToggle">
                    <button type="button" class="toggle-btn active" data-value="normal" onclick="setState(this)">Normal State</button>
                    <button type="button" class="toggle-btn" data-value="special" onclick="setState(this)">Special Category State</button>
                </div>
                <div class="field-hint" style="margin-top:8px;">Special category: most North-Eastern & hilly states (e.g. Manipur, Mizoram, Nagaland, Tripura).</div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Check Thresholds</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div id="checksContainer"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Crossed a threshold? Get it handled.</div>
                    <div class="post-result-cta-sub">GST registration, tax audit, presumptive returns or Udyam — fixed-fee, filed on time by a Chartered Accountant.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Turnover%20Threshold%20Checker%20and%20need%20help%20with%20GST%2C%20tax%20audit%20or%20MSME%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Turnover%20threshold%20/%20compliance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Turnover%20Threshold%20Checker%20and%20would%20like%20help%20with%20my%20compliance%20obligations.%0A%0AMy%20details%3A%0A-%20Business%20/%20profession%3A%0A-%20Annual%20turnover%20%28approx%29%3A%0A-%20Concern%20%28GST%20/%20tax%20audit%20/%20presumptive%20/%20MSME%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Checker</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Turnover Threshold Checker</h2>
            <ol>
                <li><strong>Pick what you are</strong> — a goods business, a services business, or a specified professional. This sets the correct GST and audit logic.</li>
                <li><strong>Enter your annual turnover</strong> or gross receipts for the financial year, in rupees.</li>
                <li><strong>Choose your digital-transaction level</strong> — whether 95% or more of receipts and payments are non-cash. This unlocks the higher ₹10 crore audit limit and ₹3 crore / ₹75 lakh presumptive ceilings.</li>
                <li><strong>Select your state category</strong> for GST — normal or special category — then click <strong>Check Thresholds</strong>.</li>
            </ol>
            <p>You get a colour-coded card for each regime — GST registration, tax audit u/s 44AB, presumptive 44AD/44ADA and MSME classification — telling you whether the threshold is crossed, and by how much. Pair it with the <a href="/tools/income-tax-calculator">income tax calculator</a> and <a href="/tools/advance-tax-calculator">advance tax calculator</a> to plan the resulting liability.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> GST uses aggregate PAN-level turnover (including exempt and export sales), while tax-audit and presumptive limits look at business turnover or professional gross receipts. Use the same financial-year figure consistently and confirm edge cases with a CA.</p>
            </div>
        </section>

        <section class="content-section" id="gst">
            <h2>GST Registration Threshold</h2>
            <p>Registration under GST becomes mandatory once your aggregate turnover crosses the limit for your supply type and state. The limits have stood since April 2019:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Supply type</th><th>Normal states</th><th>Special category states</th></tr>
                </thead>
                <tbody>
                    <tr><td>Goods</td><td>₹40 lakh</td><td>₹20 lakh</td></tr>
                    <tr><td>Services</td><td>₹20 lakh</td><td>₹10 lakh</td></tr>
                </tbody>
            </table>
            <p>Aggregate turnover is computed PAN-India and includes taxable, exempt, export and inter-state supplies, but excludes GST itself. Some suppliers must register regardless of turnover — inter-state taxable suppliers, e-commerce operators and persons liable under reverse charge. Below the limit you can still register voluntarily to claim input tax credit. You can verify the live position on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST portal</a>, and get help with <a href="/gst-registration">GST registration</a> if you are close to or over the threshold.</p>
        </section>

        <section class="content-section" id="audit">
            <h2>Tax Audit Threshold (Section 44AB)</h2>
            <p>A tax audit under <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Section 44AB</a> of the Income-tax Act applies when your turnover or receipts cross these FY 2025-26 limits:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Assessee</th><th>Base limit</th><th>If 95% digital</th></tr>
                </thead>
                <tbody>
                    <tr><td>Business</td><td>₹1 crore</td><td>₹10 crore</td></tr>
                    <tr><td>Profession</td><td>₹50 lakh</td><td>₹75 lakh*</td></tr>
                </tbody>
            </table>
            <p>*For professionals the ₹75 lakh figure relates to the 44ADA presumptive ceiling when cash receipts are within 5%; there is no separate ₹10 crore audit relief for professionals. The enhanced ₹10 crore business limit applies only when <strong>both</strong> cash receipts and cash payments are 5% or less of their totals. A tax audit is also triggered if you opt out of the presumptive scheme and declare income below the deemed rate while having taxable income. See Patron's <a href="/tax-audit">tax audit service</a> for Form 3CD preparation and filing.</p>
            <div class="callout warn">
                <p><strong>Deadline:</strong> The tax audit report is generally due by 30 September of the assessment year. Late filing attracts a penalty under Section 271B — act early once you see the threshold is crossed.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help with GST, Tax Audit & MSME Compliance?</h3>
            <p>Patron Accounting LLP supports businesses and professionals tracking GST, audit and MSME turnover limits — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Turnover%20Threshold%20Checker%20and%20need%20help%20with%20GST%2C%20tax%20audit%20or%20MSME%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Turnover%20threshold%20/%20compliance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Turnover%20Threshold%20Checker%20and%20would%20like%20help%20with%20my%20compliance%20obligations.%0A%0AMy%20details%3A%0A-%20Business%20/%20profession%3A%0A-%20Annual%20turnover%20%28approx%29%3A%0A-%20Concern%20%28GST%20/%20tax%20audit%20/%20presumptive%20/%20MSME%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="presumptive">
            <h2>Presumptive Taxation Limits (44AD & 44ADA)</h2>
            <p>The presumptive schemes let eligible taxpayers declare income at a fixed rate without maintaining detailed books, provided turnover stays within the ceiling:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Section</th><th>Who</th><th>Limit</th><th>Deemed income</th></tr>
                </thead>
                <tbody>
                    <tr><td>44AD</td><td>Resident business</td><td>₹2 crore (₹3 crore if cash ≤ 5%)</td><td>8% (6% digital)</td></tr>
                    <tr><td>44ADA</td><td>Specified professionals</td><td>₹50 lakh (₹75 lakh if cash ≤ 5%)</td><td>50% of receipts</td></tr>
                </tbody>
            </table>
            <p>Declaring below the deemed rate while having taxable income triggers a tax audit and book-keeping obligations. If you opt out of 44AD, you cannot rejoin for five years, and an audit applies in the interim if income exceeds the basic exemption limit. The checker tells you whether your turnover keeps you within the presumptive ceiling.</p>
        </section>

        <section class="content-section" id="msme">
            <h2>MSME (Udyam) Classification</h2>
            <p>From 1 April 2025 the MSME classification limits were revised upward, as notified by the <a href="https://msme.gov.in/" target="_blank" rel="noopener">Ministry of MSME</a>. Classification uses a composite test of both investment in plant/machinery and annual turnover — both conditions must be satisfied, and exports are excluded from turnover:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Category</th><th>Investment up to</th><th>Turnover up to</th></tr>
                </thead>
                <tbody>
                    <tr><td>Micro</td><td>₹2.5 crore</td><td>₹10 crore</td></tr>
                    <tr><td>Small</td><td>₹25 crore</td><td>₹100 crore</td></tr>
                    <tr><td>Medium</td><td>₹125 crore</td><td>₹500 crore</td></tr>
                </tbody>
            </table>
            <p>This checker indicates your category by turnover alone; confirm the investment side too, since the higher of the two tests decides your class. Registering on the <a href="https://udyamregistration.gov.in/" target="_blank" rel="noopener">Udyam portal</a> unlocks collateral-free credit, priority-sector lending and procurement preferences — see <a href="/udyam-registration">Udyam registration</a>. Note that for AY 2025-26 income-tax purposes the pre-revision limits may still apply to classification, so check the relevant context.</p>
        </section>

        <section class="content-section" id="penalties">
            <h2>Why Crossing a Threshold Matters</h2>
            <p>Each threshold carries a real compliance cost if missed, so it pays to track turnover through the year rather than discovering a breach at year-end.</p>
            <h3>Late GST registration</h3>
            <p>Operating above the GST limit without registering exposes you to tax on past supplies, interest and penalties, and a loss of input tax credit for the unregistered period. You must apply within 30 days of becoming liable.</p>
            <h3>Missed tax audit</h3>
            <p>Failure to get accounts audited and the report filed under Section 44AB attracts a penalty under Section 271B — broadly 0.5% of turnover up to a ceiling — unless reasonable cause is shown. Standards followed by your auditor are issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>, and the report is filed electronically before 30 September of the assessment year.</p>
            <h3>Wrong presumptive declaration</h3>
            <p>Declaring below the deemed 8%/6% (44AD) or 50% (44ADA) rate while having taxable income removes the presumptive shelter and pulls you into audit and book-keeping obligations. The five-year opt-out lock-in under 44AD(4) can also force audits in later years.</p>
            <h3>Stale MSME status</h3>
            <p>Udyam registrations must be updated annually with current turnover and investment; non-updation can mark the registration inactive and risk the loss of MSME benefits such as priority-sector lending and procurement preference.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions on Turnover Thresholds</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the GST registration turnover limit in 2026?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For most states, GST registration becomes mandatory once aggregate turnover crosses ₹40 lakh for a supplier of goods or ₹20 lakh for a supplier of services in a financial year. In special category states the limits are lower, at ₹20 lakh for goods and ₹10 lakh for services. These limits are based on PAN-India aggregate turnover, not state-wise, and certain suppliers such as inter-state and e-commerce sellers must register regardless of turnover.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the tax audit limit under Section 44AB for FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For businesses the tax audit threshold is turnover above ₹1 crore, extended to ₹10 crore when at least 95% of receipts and 95% of payments are non-cash. For specified professionals the threshold is gross receipts above ₹50 lakh, with no enhanced digital limit. A tax audit can also be triggered when a taxpayer opts out of the presumptive scheme and declares income below the deemed rate while having taxable income.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When does the 10 crore tax audit limit apply instead of 1 crore?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The enhanced ₹10 crore turnover limit for business tax audit applies only when both cash receipts and cash payments are 5% or less of the respective totals, that is at least 95% of transactions are digital. If cash transactions exceed 5% on either side, the threshold drops back to ₹1 crore. The 95% test is assessed on the full year's transactions, so businesses must maintain digital discipline throughout the year.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the presumptive taxation turnover limit under 44AD?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A resident business can opt for presumptive taxation under Section 44AD if turnover is up to ₹2 crore, raised to ₹3 crore when cash receipts are 5% or less of total receipts. Income is declared at 8% of turnover, or 6% for digital receipts. The checker flags whether your turnover keeps you within the 44AD ceiling so you can plan whether to use the presumptive scheme.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the 44ADA limit for professionals?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Specified professionals such as doctors, lawyers, architects, engineers and accountants can use the presumptive scheme under Section 44ADA if gross receipts are up to ₹50 lakh, raised to ₹75 lakh when cash receipts are 5% or less of total receipts. At least 50% of receipts must be declared as income. If you declare less than 50% and have taxable income, a tax audit applies.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What are the revised MSME turnover limits for 2025?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Effective from 1 April 2025, MSME classification uses both investment and turnover. A micro enterprise has investment up to ₹2.5 crore and turnover up to ₹10 crore, a small enterprise up to ₹25 crore investment and ₹100 crore turnover, and a medium enterprise up to ₹125 crore investment and ₹500 crore turnover. Both conditions must be met; exports are excluded from turnover. This checker classifies you by turnover as an indicator.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is aggregate turnover the same as taxable turnover for GST?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Aggregate turnover for GST includes taxable supplies, exempt supplies, exports and inter-state supplies under the same PAN across India, but excludes GST itself and inward supplies taxed under reverse charge. The registration thresholds are tested against aggregate turnover, so even exempt and export sales count towards the limit. This is wider than just your taxable sales figure.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Do I have to register for GST if I am below the threshold?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Not compulsorily, but you can register voluntarily. Many B2B businesses register below the threshold to claim input tax credit and because large clients prefer GST-registered vendors. Some suppliers must register regardless of turnover, including those making inter-state taxable supplies, e-commerce operators and persons liable under reverse charge. The checker shows the turnover trigger; compulsory-registration categories apply separately.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What happens if I cross a threshold mid-year?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Thresholds are tested on turnover for the financial year, so crossing a limit during the year brings the obligation into effect. For GST you must apply for registration within 30 days of becoming liable. For tax audit the position is judged on the full-year turnover, and the audit report is generally due by 30 September of the assessment year. Acting early avoids late-registration and audit penalties.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does this checker replace advice from a CA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The Turnover Threshold Checker is an indicative planning tool based on FY 2025-26 limits. Real cases involve nuances such as compulsory GST categories, opt-out rules under the presumptive scheme, the composite MSME investment test, and entity-specific rules. A Chartered Accountant should confirm your exact obligations before you register, file or rely on a presumptive declaration.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Turnover Threshold Checker free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Turnover Threshold Checker is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It checks your turnover against GST registration, Section 44AB tax audit, Section 44AD/44ADA presumptive and MSME classification thresholds for FY 2025-26 and gives an instant, colour-coded summary.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Threshold Crossed? We'll Handle It</h3>
            <p>GST registration, tax audit, presumptive returns and Udyam — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Turnover%20Threshold%20Checker%20and%20need%20help%20with%20GST%2C%20tax%20audit%20or%20MSME%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Turnover%20threshold%20/%20compliance%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Turnover%20Threshold%20Checker%20and%20would%20like%20help%20with%20my%20compliance%20obligations.%0A%0AMy%20details%3A%0A-%20Business%20/%20profession%3A%0A-%20Annual%20turnover%20%28approx%29%3A%0A-%20Concern%20%28GST%20/%20tax%20audit%20/%20presumptive%20/%20MSME%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit (44AB) <span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">→</span></a>
            <a href="/udyam-registration" class="sidebar-link">Udyam (MSME) Registration <span class="arrow">→</span></a>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
            <a href="/turnover-certificate" class="sidebar-link">Turnover Certificate <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/statutory-audit-fee-estimator" class="sidebar-link">Statutory Audit Fee Estimator <span class="arrow">→</span></a>
            <a href="/tools/gst-refund-eligibility-checker" class="sidebar-link">GST Refund Eligibility Checker <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">→</span></a>
            <a href="/small-company-audit-exemption" class="sidebar-link">Small Company Audit Exemption <span class="arrow">→</span></a>
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

    var entity = 'goods';
    var stateCat = 'normal';

    // FY 2025-26 thresholds (in rupees)
    var GST = { goods:{normal:4000000, special:2000000}, services:{normal:2000000, special:1000000}, profession:{normal:2000000, special:1000000} };
    var AUDIT_BIZ = { base:10000000, digital:100000000 };       // 1cr / 10cr
    var AUDIT_PROF = 5000000;                                    // 50L
    var P44AD = { base:20000000, digital:30000000 };             // 2cr / 3cr
    var P44ADA = { base:5000000, digital:7500000 };              // 50L / 75L
    var MSME = { micro:100000000, small:1000000000, medium:5000000000 }; // 10cr / 100cr / 500cr

    function setEntity(btn){ entity=btn.dataset.value; btn.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');}); btn.classList.add('active'); }
    function setState(btn){ stateCat=btn.dataset.value; btn.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){b.classList.remove('active');}); btn.classList.add('active'); }

    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }
    function inCrLakh(n){
        if (n >= 10000000) return '₹' + (n/10000000).toLocaleString('en-IN',{maximumFractionDigits:2}) + ' crore';
        return '₹' + (n/100000).toLocaleString('en-IN',{maximumFractionDigits:2}) + ' lakh';
    }

    function card(cls, title, pillText, pillCls, detail){
        return '<div class="check-card '+cls+'"><div class="check-head"><span class="check-title">'+title+'</span><span class="check-pill '+pillCls+'">'+pillText+'</span></div><div class="check-detail">'+detail+'</div></div>';
    }

    function calculate(){
        var t = parseINR(document.getElementById('turnover').value);
        var digital = document.getElementById('digital').value === 'yes';
        if (!isFinite(t) || t < 0){ alert('Please enter a valid annual turnover in ₹.'); return; }

        var html = '';

        // ---- GST ----
        var gstLimit = (entity==='goods'?GST.goods:(entity==='services'?GST.services:GST.profession))[stateCat];
        if (t > gstLimit){
            html += card('req','GST Registration','Required','req',
                'Your turnover of '+fmtINR(t)+' exceeds the GST registration limit of '+inCrLakh(gstLimit)+' for '+(entity==='goods'?'goods':'services')+' in a '+(stateCat==='special'?'special category':'normal')+' state. Register within 30 days of crossing the limit. Compulsory-registration categories (inter-state, e-commerce, reverse charge) may apply regardless.');
        } else {
            html += card('ok','GST Registration','Not mandatory','ok',
                'Your turnover of '+fmtINR(t)+' is within the GST limit of '+inCrLakh(gstLimit)+'. Registration is optional — you may still register voluntarily to claim input tax credit. Remaining headroom: '+fmtINR(gstLimit - t)+'.');
        }

        // ---- Tax audit 44AB ----
        if (entity==='profession'){
            if (t > AUDIT_PROF){
                html += card('req','Tax Audit (Sec 44AB)','Required','req',
                    'Professional gross receipts of '+fmtINR(t)+' exceed ₹50 lakh, so a tax audit under Section 44AB applies. There is no enhanced digital limit for professionals. Report due by 30 September of the assessment year.');
            } else {
                html += card('ok','Tax Audit (Sec 44AB)','Not required','ok',
                    'Gross receipts of '+fmtINR(t)+' are within ₹50 lakh, so no tax audit on the turnover test. An audit can still apply if you declare below 50% under 44ADA with taxable income.');
            }
        } else {
            var auditLimit = digital ? AUDIT_BIZ.digital : AUDIT_BIZ.base;
            if (t > auditLimit){
                html += card('req','Tax Audit (Sec 44AB)','Required','req',
                    'Business turnover of '+fmtINR(t)+' exceeds the audit limit of '+inCrLakh(auditLimit)+' ('+(digital?'95% digital':'cash > 5%')+'). A tax audit under Section 44AB is mandatory; report due by 30 September of the assessment year.');
            } else {
                var note = (!digital && t > AUDIT_BIZ.base && t <= AUDIT_BIZ.digital) ? ' Tip: keeping cash receipts and payments within 5% would raise your limit to ₹10 crore.' : '';
                html += card('ok','Tax Audit (Sec 44AB)','Not required','ok',
                    'Business turnover of '+fmtINR(t)+' is within the audit limit of '+inCrLakh(auditLimit)+'.'+note);
            }
        }

        // ---- Presumptive ----
        if (entity==='profession'){
            var adaLimit = digital ? P44ADA.digital : P44ADA.base;
            if (t <= adaLimit){
                html += card('info','Presumptive 44ADA','Eligible','info',
                    'Gross receipts of '+fmtINR(t)+' are within the 44ADA ceiling of '+inCrLakh(adaLimit)+'. You may declare 50% of receipts as income under the presumptive scheme.');
            } else {
                html += card('info','Presumptive 44ADA','Not eligible','info',
                    'Gross receipts of '+fmtINR(t)+' exceed the 44ADA ceiling of '+inCrLakh(adaLimit)+', so the professional presumptive scheme is not available.');
            }
        } else {
            var adLimit = digital ? P44AD.digital : P44AD.base;
            if (t <= adLimit){
                html += card('info','Presumptive 44AD','Eligible','info',
                    'Turnover of '+fmtINR(t)+' is within the 44AD ceiling of '+inCrLakh(adLimit)+'. You may declare '+(digital?'6%':'8%')+' of turnover as income under the presumptive scheme.');
            } else {
                html += card('info','Presumptive 44AD','Not eligible','info',
                    'Turnover of '+fmtINR(t)+' exceeds the 44AD ceiling of '+inCrLakh(adLimit)+', so the business presumptive scheme is not available.');
            }
        }

        // ---- MSME ----
        var cls, clsNote;
        if (t <= MSME.micro){ cls='Micro'; clsNote='turnover up to ₹10 crore'; }
        else if (t <= MSME.small){ cls='Small'; clsNote='turnover up to ₹100 crore'; }
        else if (t <= MSME.medium){ cls='Medium'; clsNote='turnover up to ₹500 crore'; }
        else { cls=null; }
        if (cls){
            html += card('info','MSME (Udyam) Class','~ '+cls,'info',
                'On turnover alone, '+fmtINR(t)+' indicates a <strong>'+cls+'</strong> enterprise ('+clsNote+'). MSME class uses a composite investment + turnover test (effective 1 April 2025) — confirm the investment side too. Exports are excluded from turnover.');
        } else {
            html += card('info','MSME (Udyam) Class','Above Medium','info',
                'Turnover of '+fmtINR(t)+' is above the ₹500 crore medium-enterprise turnover ceiling, so the enterprise falls outside MSME classification on the turnover test.');
        }

        document.getElementById('checksContainer').innerHTML = html;
        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        document.getElementById('turnover').value = '';
        document.getElementById('digital').value = 'no';
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('turnover').addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });

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
