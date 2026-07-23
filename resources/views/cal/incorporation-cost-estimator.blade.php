@extends('layouts.app')

<title>Company Incorporation Cost Calculator | Pvt Ltd & LLP</title>
<meta name="description" content="Estimate company incorporation cost in India: itemise SPICe+ fees, state stamp duty, DSC, DIN & professional fees for Pvt Ltd, LLP, OPC or Section 8. Free!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/incorporation-cost-estimator">
@section('meta')
<meta property="og:title" content="Incorporation Cost Estimator — Company & LLP Fees 2026">
<meta property="og:description" content="Estimate the full cost to incorporate in India — SPICe+/FiLLiP fees, stamp duty by state, DSC, DIN and professional fees — itemised by entity type and capital.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/incorporation-cost-estimator">
<meta property="og:image" content="/tools/incorporation-cost-estimator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Incorporation Cost Estimator — Company & LLP Fees 2026">
<meta name="twitter:description" content="Estimate the full cost to incorporate in India — government fees, stamp duty, DSC and professional fees — itemised. Free & instant.">
<meta name="twitter:image" content="/tools/incorporation-cost-estimator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Incorporation Cost Estimator",
  "description": "Incorporation Cost Estimator calculates the approximate cost to incorporate a business in India, itemised into government and professional components. It models the SPICe Plus or Form FiLLiP filing fee by authorised capital slab, the RUN name reservation fee, Digital Signature Certificate cost per director or partner, any extra DIN fee beyond three directors, state stamp duty on the incorporation documents using a per-state band, and an optional professional fee, then returns a line-by-line breakdown and a total range for a Private Limited Company, LLP, One Person Company, Section 8 company, Partnership Firm or Sole Proprietorship.",
  "url": "/tools/incorporation-cost-estimator",
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
    {"@type": "ListItem", "position": 3, "name": "Incorporation Cost Estimator", "item": "/tools/incorporation-cost-estimator"}
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
      "name": "How much does it cost to register a company in India in 2026?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A standard two-director Private Limited Company with authorised capital of 1 to 10 lakh rupees typically costs between 7,000 and 25,000 rupees all in, covering government fees, stamp duty, Digital Signature Certificates and professional charges. An LLP is usually cheaper, around 7,000 to 15,000 rupees. The biggest variable is state stamp duty, which can range from a few hundred rupees to over 12,000 rupees depending on the state and the authorised capital."
      }
    },
    {
      "@type": "Question",
      "name": "Is the SPICe+ government filing fee really zero?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For a company, the SPICe Plus filing fee charged by the MCA is zero for authorised capital up to 15 lakh rupees, and a slab fee applies above that. DIN is allotted free through SPICe Plus for up to three directors, and PAN and TAN are issued at no cost. So the filing fee itself is often nil for a small startup; the real costs are stamp duty, Digital Signature Certificates and any professional fee. The RUN name reservation, if used separately, is 1,000 rupees."
      }
    },
    {
      "@type": "Question",
      "name": "Why does stamp duty vary so much between states?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Stamp duty on the Memorandum and Articles of Association is a state subject, so each state sets its own rate, usually a small percentage of the authorised capital. Maharashtra and Delhi are relatively low, while Gujarat, Kerala and Punjab tend to be higher. For the same authorised capital, the stamp duty can differ by several thousand rupees between states. If your location is flexible, choosing a lower stamp duty state can reduce the upfront cost noticeably."
      }
    },
    {
      "@type": "Question",
      "name": "What is a Digital Signature Certificate and how many do I need?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Class 3 Digital Signature Certificate lets a director or partner digitally sign the incorporation forms on the MCA portal. Every proposed director and subscriber needs one, so the more signatories you have, the higher the total DSC cost. Each certificate costs roughly 800 to 1,500 rupees for two-year validity. You will keep using the DSC for future MCA filings, so it is a recurring tool rather than a one-time incorporation cost."
      }
    },
    {
      "@type": "Question",
      "name": "Does authorised capital change the cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, in two ways. First, the SPICe Plus filing fee is nil up to 15 lakh rupees of authorised capital and then steps up in slabs. Second, and more significantly, stamp duty is charged as a percentage of the authorised capital, so higher capital means higher stamp duty. A common cost-saving strategy is to start with a low authorised capital such as 1 lakh rupees and increase it later through a board resolution and ROC filing once the business needs it."
      }
    },
    {
      "@type": "Question",
      "name": "Is an LLP cheaper to incorporate than a company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Usually yes. An LLP uses Form FiLLiP with a filing fee of around 500 to 5,000 rupees depending on the capital contribution slab, RUN-LLP name reservation at 200 rupees, DSCs for the designated partners, and stamp duty on the LLP agreement that varies by state. There is no separate DIN fee for up to two designated partners through FiLLiP. With lower government fees and lighter ongoing compliance, an LLP is one of the most cost-effective registered structures."
      }
    },
    {
      "@type": "Question",
      "name": "What costs come after incorporation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Incorporation is only the first cost. Immediately after, budget for auditor appointment via ADT-1, the commencement of business filing INC-20A, a company bank account, and registrations such as GST, and often professional fees for these. Then there is recurring annual compliance — statutory audit, ROC annual filings, income tax return and GST returns — which can run from around 15,000 to 50,000 rupees or more a year. The annual compliance cost estimator can help you plan this."
      }
    },
    {
      "@type": "Question",
      "name": "Are PAN, TAN and DIN charged separately?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, not for a normal incorporation. PAN and TAN are allotted automatically as part of the SPICe Plus process at no extra government cost. DIN is also generated through SPICe Plus for up to three directors with no separate fee. A separate DIR-3 DIN application costs 500 rupees per director, which only applies if you need DINs beyond those allotted during incorporation, for example when adding more directors later."
      }
    },
    {
      "@type": "Question",
      "name": "How accurate is this estimate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is an indicative estimate, not a quotation. Government filing fees and DIN are fairly standard, but stamp duty rates change by state notification and professional fees vary by provider and complexity, so the tool uses representative bands. Treat the total as a planning range rather than an exact figure, and confirm the current stamp duty for your state and a firm quote for professional work before you commit. The actual cost can differ from the estimate."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Incorporation Cost Estimator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Incorporation Cost Estimator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It itemises the SPICe Plus or FiLLiP fee, name reservation, DSC, any extra DIN, state stamp duty and an optional professional fee, and shows a total range for your chosen entity type, state and capital. It is an indicative planning tool; confirm the exact figures with a professional before relying on them."
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
        .toggle-btn { flex: 1; padding: 10px 10px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 72px; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 4px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
        .check-line { display: flex; align-items: center; gap: 10px; margin: 4px 0 2px; }
        .check-line input { width: 18px; height: 18px; accent-color: var(--primary); }
        .check-line label { font-size: 14px; color: var(--text-secondary); font-weight: 500; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 18px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .total-card { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 24px; text-align: center; margin-bottom: 16px; }
        .total-card .tc-label { font-family: var(--font-mono); font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--accent-light); margin-bottom: 6px; }
        .total-card .tc-amount { font-size: 32px; font-weight: 700; font-family: var(--font-mono); line-height: 1.1; }
        .total-card .tc-sub { font-size: 13px; color: rgba(255,255,255,0.8); margin-top: 8px; }
        .breakdown { background: var(--surface-alt); border-radius: var(--radius); padding: 8px 20px; margin-bottom: 16px; }
        .bd-row { display: flex; justify-content: space-between; align-items: baseline; padding: 11px 0; font-size: 14px; gap: 12px; border-bottom: 1px dashed var(--border); }
        .bd-row:last-child { border-bottom: none; }
        .bd-row.total { border-top: 2px solid var(--border); border-bottom: none; margin-top: 2px; padding-top: 12px; font-weight: 700; }
        .bd-label { color: var(--text-secondary); }
        .bd-label small { display: block; color: var(--text-muted); font-size: 11px; font-weight: 400; }
        .bd-val { font-family: var(--font-mono); font-weight: 700; color: var(--text); text-align: right; white-space: nowrap; }
        .bd-row.total .bd-val { color: var(--primary-dark); font-size: 16px; }
        .bd-row.zero .bd-val { color: var(--success); }
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
        <a href="#calculator">Estimator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#components">Cost Components</a>
        <a href="#stamp">Stamp Duty</a>
        <a href="#save">Save Money</a>
        <a href="#after">After Incorporation</a>
        <a href="#timeline">Timeline</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Incorporation Cost Estimator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Incorporation Cost Estimator — <span>Company & LLP Fees</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Want a firm incorporation quote? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20cost%20/%20fixed-fee%20quote%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A-%20State%20of%20registration%3A%0A-%20Number%20of%20directors%20/%20partners%3A%0A%0APlease%20share%20a%20quote." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Estimate the full cost to incorporate in India, <strong>itemised</strong> into government and professional parts. Pick entity type, state, authorised capital and number of signatories — the tool computes the <strong>SPICe+ / FiLLiP fee</strong>, <strong>name reservation</strong>, <strong>DSC</strong>, any extra <strong>DIN</strong>, <strong>state stamp duty</strong> and an optional <strong>professional fee</strong>. Reality check: SPICe+ filing is <strong>₹0 up to ₹15 lakh capital</strong>, DIN/PAN/TAN are free — so <strong>stamp duty and DSC</strong> are the real variables. Typical Pvt Ltd ≈ ₹7,000–₹25,000; LLP ≈ ₹7,000–₹15,000.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Estimate Your Incorporation Cost</h2>
            <p class="calc-sub">Representative 2026 government fees + indicative stamp-duty bands. Estimate, not a quote.</p>
            <noscript>
                <div class="noscript-box">
                    This estimator requires JavaScript. Please enable JavaScript, or use the cost-components table below to budget manually.
                </div>
            </noscript>

            <div class="field-group-title">Entity type</div>
            <div class="toggle-group" id="entityToggle">
                <button type="button" class="toggle-btn active" data-e="private" onclick="pickEntity(this)">Pvt Ltd</button>
                <button type="button" class="toggle-btn" data-e="opc" onclick="pickEntity(this)">OPC</button>
                <button type="button" class="toggle-btn" data-e="llp" onclick="pickEntity(this)">LLP</button>
                <button type="button" class="toggle-btn" data-e="section8" onclick="pickEntity(this)">Section 8</button>
                <button type="button" class="toggle-btn" data-e="partnership" onclick="pickEntity(this)">Partnership</button>
                <button type="button" class="toggle-btn" data-e="proprietor" onclick="pickEntity(this)">Proprietor</button>
            </div>

            <div class="field-group-title">Details</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="capital" id="capitalLabel">Authorised Capital (₹)</label>
                    <input type="text" id="capital" placeholder="e.g. 100000" value="100000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint" id="capitalHint">Company share capital / LLP contribution.</div>
                </div>
                <div class="form-group">
                    <label for="signatories" id="sigLabel">Directors / Partners</label>
                    <input type="text" id="signatories" placeholder="e.g. 2" value="2" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Each needs a DSC; DIN free for up to 3 (2 for LLP).</div>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="state">State (stamp duty band)</label>
                    <select id="state">
                        <option value="low">Low (Maharashtra, Delhi, UP, MP)</option>
                        <option value="mid" selected>Medium (Karnataka, Tamil Nadu, Telangana)</option>
                        <option value="high">High (Gujarat, Kerala, Punjab, Rajasthan)</option>
                    </select>
                    <div class="field-hint">Stamp duty is a % of capital; varies by state.</div>
                </div>
                <div class="form-group">
                    <label for="dscCost">DSC Cost per Person (₹)</label>
                    <input type="text" id="dscCost" placeholder="e.g. 1200" value="1200" inputmode="decimal" autocomplete="off">
                    <div class="field-hint">Class 3, ~₹800–₹1,500 (2-yr).</div>
                </div>
            </div>
            <div class="check-line">
                <input type="checkbox" id="inclProf" checked>
                <label for="inclProf">Include professional / filing fee</label>
            </div>

            <button class="btn-calculate" onclick="calculate()">Estimate Cost</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="total-card">
                    <div class="tc-label">Estimated Total</div>
                    <div class="tc-amount" id="totalAmount">₹0</div>
                    <div class="tc-sub" id="totalRange"></div>
                </div>
                <div class="breakdown" id="breakdown"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want this incorporation done at a fixed fee?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant handles the full registration — DSC, name approval, SPICe+/FiLLiP filing and post-incorporation setup — with no surprises on cost.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20cost%20/%20fixed-fee%20quote%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A-%20State%20of%20registration%3A%0A-%20Number%20of%20directors%20/%20partners%3A%0A%0APlease%20share%20a%20quote." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Estimator</h2>
            <ol>
                <li><strong>Pick the entity type</strong> — fee structure differs (company SPICe+, LLP FiLLiP, or minimal for partnership/proprietorship).</li>
                <li><strong>Enter authorised capital</strong> — drives the SPICe+ slab and the stamp duty; start low (₹1 lakh) to minimise upfront cost.</li>
                <li><strong>Set signatories and DSC cost</strong> — each director/partner needs a DSC.</li>
                <li><strong>Choose your state band and professional-fee toggle</strong>, then <strong>Estimate</strong> for an itemised breakdown and a total range.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> The biggest lever is authorised capital — keep it at ₹1 lakh to start; you can raise it later via a board resolution and ROC filing when you actually need it.</p>
            </div>
        </section>

        <section class="content-section" id="components">
            <h2>What Goes Into the Cost</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Component</th><th>Typical 2026 amount</th></tr>
                </thead>
                <tbody>
                    <tr><td>SPICe+ filing (company)</td><td>₹0 up to ₹15 lakh capital; slab fee above</td></tr>
                    <tr><td>FiLLiP filing (LLP)</td><td>₹500–₹5,000 by contribution slab</td></tr>
                    <tr><td>Name reservation (RUN)</td><td>₹1,000 company / ₹200 LLP (free via SPICe+ Part A)</td></tr>
                    <tr><td>DIN</td><td>Free for up to 3 directors via SPICe+ (2 for LLP); ₹500 each extra</td></tr>
                    <tr><td>DSC (per signatory)</td><td>₹800–₹1,500, 2-yr validity</td></tr>
                    <tr><td>PAN & TAN</td><td>Free (auto-allotted)</td></tr>
                    <tr><td>Stamp duty (MoA/AoA)</td><td>₹200–₹12,600 — varies by state & capital</td></tr>
                    <tr><td>Professional fee</td><td>₹4,000–₹15,000 by complexity</td></tr>
                </tbody>
            </table>
            <p>Government fees are largely standard nationwide; the two variables that move the total are <strong>stamp duty</strong> (state) and <strong>professional fee</strong> (provider). All company and LLP filings go through the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> portal, and PAN/TAN are issued via the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax department</a>. See Patron's <a href="/blog/private-limited-company-registration-cost-breakdown-government-fees">Pvt Ltd cost breakdown</a> and the <a href="/dsc-registration">DSC registration</a> page.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Company / LLP Incorporation?</h3>
            <p>Patron Accounting LLP supports founders incorporating a Pvt Ltd, LLP, OPC or Section 8 and budgeting the cost — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20cost%20/%20fixed-fee%20quote%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A-%20State%20of%20registration%3A%0A-%20Number%20of%20directors%20/%20partners%3A%0A%0APlease%20share%20a%20quote." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="stamp">
            <h2>Stamp Duty — the Biggest Variable</h2>
            <p>Stamp duty on the MoA and AoA is a <strong>state subject</strong>, charged as a small percentage of authorised capital. The spread is wide: for the same capital, the duty can differ by several thousand rupees between states.</p>
            <ul>
                <li><strong>Lower:</strong> Maharashtra, Delhi, Uttar Pradesh, Madhya Pradesh.</li>
                <li><strong>Higher:</strong> Gujarat, Kerala, Punjab, Rajasthan.</li>
            </ul>
            <p>Because it scales with capital, a company incorporating at ₹1 lakh pays far less stamp duty than one at ₹25 lakh. If your registered-office location is flexible, the state choice alone can save a meaningful amount.</p>
            <div class="formula-box">
                <span class="label">Stamp duty</span> ≈ rate(state) × authorised capital &nbsp;(with a state floor)<br>
                <span class="label">SPICe+ fee</span> = ₹0 up to ₹15L → slab above<br>
                <span class="label">Total</span> = SPICe+/FiLLiP + name + DSC×n + extra DIN + stamp + professional
            </div>
        </section>

        <section class="content-section" id="save">
            <h2>How to Keep the Cost Down</h2>
            <ul>
                <li><strong>Start with ₹1 lakh authorised capital</strong> — zero SPICe+ fee and minimal stamp duty; raise it later when needed.</li>
                <li><strong>Choose a low-stamp-duty state</strong> if your office location is flexible.</li>
                <li><strong>Begin with the minimum signatories</strong> (2 for Pvt Ltd/LLP, 1 for OPC) — fewer DSCs.</li>
                <li><strong>Buy a 2-year DSC</strong> — you'll reuse it for all future MCA filings.</li>
                <li><strong>Bundle incorporation with annual compliance</strong> from one firm for a better overall rate. Compare structures first with the <a href="/tools/entity-type-selector">entity type selector</a>.</li>
            </ul>
        </section>

        <section class="content-section" id="after">
            <h2>Costs After Incorporation</h2>
            <p>Incorporation is just the start. Budget immediately for <strong>auditor appointment (ADT-1)</strong>, <strong>commencement of business (INC-20A)</strong>, a bank account, and registrations like <a href="/gst-registration">GST</a>. Then there's recurring <strong>annual compliance</strong> — statutory audit, ROC annual filings, ITR and GST returns — typically ₹15,000–₹50,000+ a year.</p>
            <p>Plan the ongoing cost with the <a href="/tools/annual-compliance-cost-estimator">annual compliance cost estimator</a>, and see Patron's <a href="/blog/post-incorporation-compliance-for-private-limited-company">post-incorporation compliance</a> guide.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This is an indicative estimate, not a quotation. Stamp duty changes by state notification and professional fees vary — confirm current figures before budgeting.</p>
            </div>
        </section>

        <section class="content-section" id="timeline">
            <h2>Cost in Context — Timeline and Hidden Extras</h2>
            <p>A realistic incorporation runs about <strong>10 to 20 working days</strong> from procuring the DSC to receiving the Certificate of Incorporation: a day or two for the DSC, a few days for name approval, then documentation, filing and ROC verification. The cost itself is front-loaded — most of it is spent before the certificate arrives — so it helps to budget the full figure up front rather than in instalments.</p>
            <p>Two extras are easy to miss. First, a newly incorporated company that has issued share capital must file <strong>INC-20A</strong> (commencement of business) and appoint an auditor via <strong>ADT-1</strong> within set deadlines, each with its own small fee. Second, if you intend to claim startup benefits, <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> recognition through the <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> portal is free but takes its own paperwork, and the statutory audit that follows is governed by standards from the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. Factoring these in avoids a nasty surprise a month after incorporation.</p>
            <p>For an LLP the picture is lighter — no INC-20A, no mandatory audit below the turnover and contribution thresholds — which is part of why its all-in cost, both at setup and annually, tends to be lower than a company's.</p>
            <div class="callout">
                <p><strong>Tip:</strong> Pair this estimate with the <a href="/tools/annual-compliance-cost-estimator">annual compliance cost estimator</a> to see the first-year total, not just the day-one cost.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How much does it cost to register a company in India in 2026?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A standard two-director Private Limited Company with authorised capital of 1 to 10 lakh rupees typically costs between 7,000 and 25,000 rupees all in, covering government fees, stamp duty, Digital Signature Certificates and professional charges. An LLP is usually cheaper, around 7,000 to 15,000 rupees. The biggest variable is state stamp duty, which can range from a few hundred rupees to over 12,000 rupees depending on the state and the authorised capital.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the SPICe+ government filing fee really zero?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For a company, the SPICe Plus filing fee charged by the MCA is zero for authorised capital up to 15 lakh rupees, and a slab fee applies above that. DIN is allotted free through SPICe Plus for up to three directors, and PAN and TAN are issued at no cost. So the filing fee itself is often nil for a small startup; the real costs are stamp duty, Digital Signature Certificates and any professional fee. The RUN name reservation, if used separately, is 1,000 rupees.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Why does stamp duty vary so much between states?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Stamp duty on the Memorandum and Articles of Association is a state subject, so each state sets its own rate, usually a small percentage of the authorised capital. Maharashtra and Delhi are relatively low, while Gujarat, Kerala and Punjab tend to be higher. For the same authorised capital, the stamp duty can differ by several thousand rupees between states. If your location is flexible, choosing a lower stamp duty state can reduce the upfront cost noticeably.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is a Digital Signature Certificate and how many do I need?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A Class 3 Digital Signature Certificate lets a director or partner digitally sign the incorporation forms on the MCA portal. Every proposed director and subscriber needs one, so the more signatories you have, the higher the total DSC cost. Each certificate costs roughly 800 to 1,500 rupees for two-year validity. You will keep using the DSC for future MCA filings, so it is a recurring tool rather than a one-time incorporation cost.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does authorised capital change the cost?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, in two ways. First, the SPICe Plus filing fee is nil up to 15 lakh rupees of authorised capital and then steps up in slabs. Second, and more significantly, stamp duty is charged as a percentage of the authorised capital, so higher capital means higher stamp duty. A common cost-saving strategy is to start with a low authorised capital such as 1 lakh rupees and increase it later through a board resolution and ROC filing once the business needs it.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is an LLP cheaper to incorporate than a company?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Usually yes. An LLP uses Form FiLLiP with a filing fee of around 500 to 5,000 rupees depending on the capital contribution slab, RUN-LLP name reservation at 200 rupees, DSCs for the designated partners, and stamp duty on the LLP agreement that varies by state. There is no separate DIN fee for up to two designated partners through FiLLiP. With lower government fees and lighter ongoing compliance, an LLP is one of the most cost-effective registered structures.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What costs come after incorporation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Incorporation is only the first cost. Immediately after, budget for auditor appointment via ADT-1, the commencement of business filing INC-20A, a company bank account, and registrations such as GST, and often professional fees for these. Then there is recurring annual compliance — statutory audit, ROC annual filings, income tax return and GST returns — which can run from around 15,000 to 50,000 rupees or more a year. The annual compliance cost estimator can help you plan this.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Are PAN, TAN and DIN charged separately?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No, not for a normal incorporation. PAN and TAN are allotted automatically as part of the SPICe Plus process at no extra government cost. DIN is also generated through SPICe Plus for up to three directors with no separate fee. A separate DIR-3 DIN application costs 500 rupees per director, which only applies if you need DINs beyond those allotted during incorporation, for example when adding more directors later.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How accurate is this estimate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">It is an indicative estimate, not a quotation. Government filing fees and DIN are fairly standard, but stamp duty rates change by state notification and professional fees vary by provider and complexity, so the tool uses representative bands. Treat the total as a planning range rather than an exact figure, and confirm the current stamp duty for your state and a firm quote for professional work before you commit. The actual cost can differ from the estimate.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Incorporation Cost Estimator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Incorporation Cost Estimator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It itemises the SPICe Plus or FiLLiP fee, name reservation, DSC, any extra DIN, state stamp duty and an optional professional fee, and shows a total range for your chosen entity type, state and capital. It is an indicative planning tool; confirm the exact figures with a professional before relying on them.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Fixed-Fee Incorporation</h3>
            <p>End-to-end registration for any structure — DSC, name approval, SPICe+/FiLLiP filing and post-incorporation setup — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20cost%20/%20fixed-fee%20quote%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Cost%20Estimator%20and%20would%20like%20a%20fixed-fee%20incorporation%20quote.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A-%20State%20of%20registration%3A%0A-%20Number%20of%20directors%20/%20partners%3A%0A%0APlease%20share%20a%20quote." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Registration Pages</h3>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Private Limited <span class="arrow">→</span></a>
            <a href="/llp-incorporation" class="sidebar-link">LLP <span class="arrow">→</span></a>
            <a href="/one-person-company-registration" class="sidebar-link">One Person Company <span class="arrow">→</span></a>
            <a href="/section8-company-registration" class="sidebar-link">Section 8 Company <span class="arrow">→</span></a>
            <a href="/dsc-registration" class="sidebar-link">DSC Registration <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/entity-type-selector" class="sidebar-link">Entity Type Selector <span class="arrow">→</span></a>
            <a href="/tools/annual-compliance-cost-estimator" class="sidebar-link">Annual Compliance Cost <span class="arrow">→</span></a>
            <a href="/tools/company-name-search" class="sidebar-link">Company Name Search <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/private-limited-company-registration-cost-breakdown-government-fees" class="sidebar-link">Pvt Ltd Cost Breakdown <span class="arrow">→</span></a>
            <a href="/blog/form-spice-complete-guide-to-company-incorporation-in-india" class="sidebar-link">SPICe+ Guide <span class="arrow">→</span></a>
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

    var entity = 'private';
    var STAMP_RATE = { low: 0.0015, mid: 0.0030, high: 0.0050 };
    var STAMP_FLOOR = { low: 200, mid: 500, high: 1000 };

    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }

    function pickEntity(btn){
        entity = btn.dataset.e;
        document.querySelectorAll('#entityToggle .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        // relabel capital/signatories for context
        var capLabel = document.getElementById('capitalLabel');
        var capHint = document.getElementById('capitalHint');
        var sigLabel = document.getElementById('sigLabel');
        if (entity === 'llp'){ capLabel.textContent = 'Capital Contribution (₹)'; capHint.textContent = 'Total partner contribution.'; sigLabel.textContent = 'Designated Partners'; }
        else if (entity === 'partnership' || entity === 'proprietor'){ capLabel.textContent = 'Capital (₹)'; capHint.textContent = 'Indicative — minimal MCA fees apply.'; sigLabel.textContent = (entity==='proprietor'?'Owner':'Partners'); }
        else { capLabel.textContent = 'Authorised Capital (₹)'; capHint.textContent = 'Company share capital.'; sigLabel.textContent = 'Directors'; }
        document.getElementById('resultSection').classList.remove('visible');
    }

    // SPICe+ company filing fee by authorised capital
    function spiceFee(cap){
        if (cap <= 1500000) return 0;
        if (cap <= 5000000) return 2000;
        if (cap <= 10000000) return 4000;
        return 6000;
    }
    // LLP FiLLiP fee by contribution
    function fillipFee(c){
        if (c <= 100000) return 500;
        if (c <= 500000) return 2000;
        if (c <= 1000000) return 4000;
        return 5000;
    }

    function calculate(){
        var cap = val('capital');
        var n = Math.max(1, Math.round(val('signatories')) || 1);
        var dsc = val('dscCost') > 0 ? val('dscCost') : 1200;
        var stateBand = document.getElementById('state').value;
        var inclProf = document.getElementById('inclProf').checked;

        var items = [];
        var filingFee = 0, nameFee = 0, dinExtra = 0, stamp = 0, prof = 0, dscTotal = 0;

        if (entity === 'partnership' || entity === 'proprietor'){
            // Minimal — no MCA. Deed stamp / nominal + optional professional
            stamp = (entity === 'partnership') ? Math.max(500, STAMP_FLOOR[stateBand]) : 0;
            dscTotal = 0; // not mandatory for these
            prof = inclProf ? (entity === 'partnership' ? 4000 : 2500) : 0;
            items.push({ l: (entity==='partnership'?'Partnership deed stamp':'Registration (Udyam/GST etc.)'), s: (entity==='partnership'?'State stamp on deed':'Largely free; nominal'), v: stamp });
            items.push({ l: 'Professional fee', s: inclProf ? 'Drafting / filing' : 'Excluded', v: prof });
        } else {
            // DSC for all signatories
            dscTotal = dsc * n;
            // Filing fee + name + DIN + stamp
            var dinFreeUpto = (entity === 'llp') ? 2 : 3;
            dinExtra = Math.max(0, n - dinFreeUpto) * 500;
            stamp = Math.max(STAMP_FLOOR[stateBand], Math.round(cap * STAMP_RATE[stateBand]));
            if (entity === 'llp'){
                filingFee = fillipFee(cap);
                nameFee = 200;
            } else if (entity === 'section8'){
                filingFee = 0; // concessional
                nameFee = 1000;
            } else { // private, opc, public-like
                filingFee = spiceFee(cap);
                nameFee = 1000;
            }
            prof = inclProf ? (entity === 'llp' ? 6000 : (entity === 'section8' ? 9000 : 7000)) : 0;

            items.push({ l: (entity==='llp'?'FiLLiP filing fee':'SPICe+ filing fee'), s: (filingFee===0?'₹0 — within free slab':'Capital slab fee'), v: filingFee, zero: filingFee===0 });
            items.push({ l: 'Name reservation', s: (entity==='llp'?'RUN-LLP':'RUN'), v: nameFee });
            items.push({ l: 'DSC ×' + n, s: fmtINR(dsc) + ' each (Class 3, 2-yr)', v: dscTotal });
            items.push({ l: 'DIN', s: dinExtra===0 ? 'Free via form' : 'Extra beyond free slab', v: dinExtra, zero: dinExtra===0 });
            items.push({ l: 'Stamp duty (MoA/AoA)', s: (stateBand[0].toUpperCase()+stateBand.slice(1)) + ' band · on capital', v: stamp });
            items.push({ l: 'PAN & TAN', s: 'Auto-allotted', v: 0, zero: true });
            items.push({ l: 'Professional fee', s: inclProf ? 'Incorporation service' : 'Excluded', v: prof });
        }

        var total = items.reduce(function(s, it){ return s + it.v; }, 0);
        var low = Math.round(total * 0.85), high = Math.round(total * 1.2);

        document.getElementById('totalAmount').textContent = fmtINR(total);
        document.getElementById('totalRange').textContent = 'Likely range ' + fmtINR(low) + ' – ' + fmtINR(high) + ' (indicative)';

        var rows = '';
        items.forEach(function(it){
            rows += '<div class="bd-row' + (it.zero ? ' zero' : '') + '"><span class="bd-label">' + it.l + '<small>' + it.s + '</small></span><span class="bd-val">' + fmtINR(it.v) + '</span></div>';
        });
        rows += '<div class="bd-row total"><span class="bd-label">Estimated total</span><span class="bd-val">' + fmtINR(total) + '</span></div>';
        document.getElementById('breakdown').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        document.getElementById('capital').value = '100000';
        document.getElementById('signatories').value = '2';
        document.getElementById('dscCost').value = '1200';
        document.getElementById('state').value = 'mid';
        document.getElementById('inclProf').checked = true;
        document.getElementById('resultSection').classList.remove('visible');
    }

    ['capital','signatories','dscCost'].forEach(function(id){
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
