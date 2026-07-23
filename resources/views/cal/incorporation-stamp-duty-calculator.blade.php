@extends('layouts.app')
<title>Incorporation Stamp Duty Calculator | State-Wise India</title>
<meta name="description" content="Free stamp duty calculator for incorporation: estimate state-wise MoA &amp; AoA stamp duty on company &amp; LLP registration by authorised capital, across India.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/incorporation-stamp-duty-calculator">
@section('meta')
<meta property="og:title" content="Incorporation Stamp Duty Calculator — State-wise 2026">
<meta property="og:description" content="Estimate state-wise stamp duty on MoA and AoA for company or LLP incorporation by authorised capital, with an itemised breakdown across Indian states.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/incorporation-stamp-duty-calculator">
<meta property="og:image" content="/tools/incorporation-stamp-duty-calculator-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Incorporation Stamp Duty Calculator — State-wise 2026">
<meta name="twitter:description" content="Estimate state-wise MoA &amp; AoA stamp duty on company / LLP incorporation by authorised capital. Free &amp; instant.">
<meta name="twitter:image" content="/tools/incorporation-stamp-duty-calculator-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Incorporation Stamp Duty Calculator",
  "description": "Incorporation Stamp Duty Calculator estimates the state stamp duty payable on the Memorandum of Association and Articles of Association when incorporating a company, or on the agreement when incorporating an LLP, based on the state of the registered office and the authorised share capital or contribution. It models the differing state structures, including flat fees, percentage rates and per-block slab systems, and returns an itemised Memorandum and Articles breakdown with a total. The figure is indicative because stamp duty is fixed by each state Stamp Act and is auto-calculated by the MCA SPICe Plus system at the time of filing.",
  "url": "/tools/incorporation-stamp-duty-calculator",
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
    {"@type": "ListItem", "position": 3, "name": "Incorporation Stamp Duty Calculator", "item": "/tools/incorporation-stamp-duty-calculator"}
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
      "name": "What is stamp duty on incorporation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "When you incorporate a company, the state levies stamp duty on two foundational documents, the Memorandum of Association and the Articles of Association, and for an LLP on the LLP agreement. It is a state tax that makes the incorporation documents legally enforceable. The amount depends on the state of the registered office and, in most states, on the authorised share capital or the LLP contribution. It is paid through the MCA portal as part of the SPICe Plus or FiLLiP filing."
      }
    },
    {
      "@type": "Question",
      "name": "Why does incorporation stamp duty vary by state?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Stamp duty is a state subject, so each state sets its own rate under its Stamp Act. Some states charge a flat fee, some charge a percentage of authorised capital, and others use a per-block slab such as a fixed amount for every five or ten lakh rupees of capital, sometimes with a minimum or a maximum cap. As a result the duty for the same authorised capital can differ by several thousand rupees between, say, Maharashtra and Karnataka or Gujarat."
      }
    },
    {
      "@type": "Question",
      "name": "How is stamp duty calculated on the MoA and AoA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Typically the Memorandum of Association attracts a small flat fee, often between 100 and 500 rupees, while the Articles of Association is where most of the variation lies and is usually linked to authorised capital. The state applies its flat, percentage or slab rule to the capital to arrive at the AoA duty, adds the MoA fee and a small form stamp, and the total is the incorporation stamp duty. This calculator itemises the Memorandum and Articles components and shows the total."
      }
    },
    {
      "@type": "Question",
      "name": "Which states have the lowest incorporation stamp duty?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The north-eastern states such as Assam, Meghalaya, Manipur, Mizoram, Nagaland, Sikkim, Tripura and Arunachal Pradesh generally have the lowest stamp duty, often a flat 100 to 500 rupees regardless of capital. Maharashtra, Delhi and Uttar Pradesh are relatively low for small capital. Karnataka, Punjab, Gujarat and Kerala tend to be among the higher states. If your registered office location is flexible, choosing a low-duty state can save a meaningful amount at incorporation."
      }
    },
    {
      "@type": "Question",
      "name": "Does higher authorised capital increase stamp duty?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, in most states. Because the Articles of Association duty is usually a percentage or per-block charge on authorised capital, a higher capital means higher stamp duty, although several states apply a maximum cap beyond which it stops rising. A common cost-saving approach is to incorporate with a low authorised capital, such as one lakh rupees, and increase it later through Form SH-7, paying the incremental stamp duty only on the increase at that time."
      }
    },
    {
      "@type": "Question",
      "name": "Is LLP stamp duty different from company stamp duty?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. An LLP does not have an MoA and AoA; instead stamp duty is charged on the LLP agreement, again under the state Stamp Act and usually linked to the capital contribution. The rates and slabs differ from those for a company and from state to state. This calculator gives an indicative figure for the LLP agreement when you select the LLP option, but the exact duty should be confirmed for your state and contribution before filing Form 3."
      }
    },
    {
      "@type": "Question",
      "name": "Do I pay stamp duty again when I increase capital?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. When you increase authorised capital you file Form SH-7 with the Registrar of Companies and pay additional stamp duty, calculated on the increased amount under the same state rules, along with the MCA filing fee for the new capital slab. There is no penalty for starting low and increasing later, so many founders begin with a small authorised capital to minimise the upfront stamp duty and pay more only when the business genuinely needs higher capital."
      }
    },
    {
      "@type": "Question",
      "name": "Is this calculator's figure the exact amount I will pay?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. It is an indicative estimate. The binding stamp duty is auto-calculated by the MCA SPICe Plus system from each state's stamp schedule at the time of filing, and state governments revise rates by notification. This tool models the common state structures using representative rates, so treat its output as a planning figure. Always confirm the current rate with your state's revenue department or a CA or CS before relying on it for budgeting."
      }
    },
    {
      "@type": "Question",
      "name": "Can I reduce stamp duty by choosing a different state?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If your business does not need a physical presence in a particular state, registering the office in a low stamp duty state can reduce incorporation cost, sometimes by several thousand rupees at higher capital. However, the registered office determines your jurisdiction for compliance, GST and assessments, so the decision should weigh the duty saving against operational and tax considerations rather than chasing the lowest duty alone. A professional can help you balance these."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Incorporation Stamp Duty Calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Incorporation Stamp Duty Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It estimates state-wise stamp duty on the MoA and AoA, or the LLP agreement, by authorised capital and itemises the components. It is an indicative planning tool; the exact, binding duty is computed by the MCA system at filing, so confirm the current figure with a professional before relying on it."
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
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 13.5px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 11px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
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
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 8px; }
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
        <a href="#what-is">What It Is</a>
        <a href="#structures">State Structures</a>
        <a href="#save">Save on Duty</a>
        <a href="#sh7">Capital Increase</a>
        <a href="#legal-basis">Legal Basis</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Incorporation Stamp Duty Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Incorporation Stamp Duty Calculator — <span>State-wise</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Need the exact stamp duty &amp; filing? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20need%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20stamp%20duty%20/%20filing%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20would%20like%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Company%20/%20LLP%29%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Estimate the <strong>state stamp duty</strong> on incorporation documents — <strong>MoA &amp; AoA</strong> for a company, the <strong>LLP agreement</strong> for an LLP — by state and authorised capital. Stamp duty is a <strong>state subject</strong>, so structures differ: flat fees, percentages, and per-₹5L/₹10L slabs. Maharashtra, Delhi and the North-East tend low; Karnataka, Punjab and Gujarat higher. This gives an <strong>itemised, indicative</strong> figure — the binding amount is auto-computed by MCA's SPICe+ system at filing.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Estimate Incorporation Stamp Duty</h2>
            <p class="calc-sub">Representative 2026 state structures. Indicative — MCA auto-calculates the binding duty at filing.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript, or see the state-structures table below and confirm your state's current rate.
                </div>
            </noscript>

            <div class="field-group-title">Entity type</div>
            <div class="toggle-group" id="entityToggle">
                <button type="button" class="toggle-btn active" data-e="company" onclick="pickEntity(this)">Company (MoA + AoA)</button>
                <button type="button" class="toggle-btn" data-e="llp" onclick="pickEntity(this)">LLP (Agreement)</button>
            </div>

            <div class="field-group-title">Details</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="state">State / UT of Registered Office</label>
                    <select id="state">
                        <option value="maharashtra">Maharashtra</option>
                        <option value="delhi">Delhi</option>
                        <option value="karnataka">Karnataka</option>
                        <option value="tamilnadu">Tamil Nadu</option>
                        <option value="telangana">Telangana / Andhra</option>
                        <option value="gujarat">Gujarat</option>
                        <option value="uttarpradesh">Uttar Pradesh</option>
                        <option value="westbengal">West Bengal</option>
                        <option value="rajasthan">Rajasthan</option>
                        <option value="madhyapradesh">Madhya Pradesh</option>
                        <option value="punjab">Punjab</option>
                        <option value="kerala">Kerala</option>
                        <option value="northeast">North-East / Sikkim</option>
                        <option value="other">Other state (typical)</option>
                    </select>
                    <div class="field-hint">Stamp duty follows the state of the registered office.</div>
                </div>
                <div class="form-group">
                    <label for="capital" id="capitalLabel">Authorised Capital (₹)</label>
                    <input type="text" id="capital" placeholder="e.g. 100000" value="100000" inputmode="decimal" autocomplete="off">
                    <div class="field-hint" id="capitalHint">Company share capital. Start with ₹1 lakh to minimise duty.</div>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Stamp Duty</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="total-card">
                    <div class="tc-label">Estimated Stamp Duty</div>
                    <div class="tc-amount" id="totalAmount">₹0</div>
                    <div class="tc-sub" id="totalSub"></div>
                </div>
                <div class="breakdown" id="breakdown"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want the exact duty computed and filed?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant computes the precise state stamp duty, drafts the MoA/AoA or LLP agreement, and files SPICe+/FiLLiP end to end.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20need%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20stamp%20duty%20/%20filing%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20would%20like%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Company%20/%20LLP%29%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Calculator</h2>
            <ol>
                <li><strong>Pick the entity type</strong> — a company is charged on MoA + AoA; an LLP on its agreement.</li>
                <li><strong>Select the state</strong> of your registered office — this sets which rate structure applies.</li>
                <li><strong>Enter authorised capital</strong> (or LLP contribution) — most states scale the AoA / agreement duty with it.</li>
                <li><strong>Calculate</strong> for an itemised estimate. Treat it as a planning figure; MCA computes the exact duty at filing.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Stamp duty is just one line of the total. For the full picture — SPICe+ fee, DSC, professional fee — use the <a href="/tools/incorporation-cost-estimator">incorporation cost estimator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Incorporation Stamp Duty Is</h2>
            <p>When you incorporate, the state levies <strong>stamp duty</strong> on the documents that constitute the entity — the <strong>Memorandum of Association (MoA)</strong> and <strong>Articles of Association (AoA)</strong> for a company, or the <strong>LLP agreement</strong> for an LLP. It's what makes those documents legally enforceable, and it's collected through the MCA portal as part of the <strong>SPICe+</strong> (or <strong>FiLLiP</strong>) filing.</p>
            <p>Because stamp duty is a <strong>state subject</strong> under each state's Stamp Act, the rate and method vary widely. The MoA is usually a small flat fee (₹100–₹500); the <strong>AoA is where the real variation sits</strong>, typically linked to authorised capital. See the <a href="/blog/documents-required-for-company-registration-in-india">documents required</a> and the <a href="/blog/private-limited-company-registration-cost-breakdown-government-fees">Pvt Ltd cost breakdown</a> for context.</p>
        </section>

        <section class="content-section" id="structures">
            <h2>How States Structure the Duty</h2>
            <p>There's no single national rate. The common structures are:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Structure</th><th>Example states</th><th>How it works</th></tr>
                </thead>
                <tbody>
                    <tr><td>Flat fee</td><td>North-East, Sikkim, Goa</td><td>A fixed ₹100–₹500 regardless of capital — the lowest.</td></tr>
                    <tr><td>Percentage</td><td>Maharashtra (~0.2%), Gujarat (0.5%)</td><td>A % of authorised capital, often with a cap.</td></tr>
                    <tr><td>Per-block slab</td><td>Maharashtra, Karnataka</td><td>A fixed amount per ₹5 lakh or ₹10 lakh of capital.</td></tr>
                    <tr><td>Slab with cap</td><td>Delhi</td><td>Bands of capital with an upper limit.</td></tr>
                    <tr><td>Fixed high</td><td>Karnataka, Punjab</td><td>Higher fixed MoA + AoA (≈₹5,000 each at ₹1L).</td></tr>
                </tbody>
            </table>
            <p>This calculator models each listed state's structure with representative rates so you get a realistic itemised figure. The authoritative source is each state's Stamp Act, integrated into the MCA SPICe+ system — see the MCA's <a href="https://www.mca.gov.in/">portal</a> for the live computation at filing.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Incorporation Stamp Duty &amp; Filing?</h3>
            <p>Patron Accounting LLP supports founders computing state stamp duty and incorporating a company or LLP — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20need%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20stamp%20duty%20/%20filing%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20would%20like%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Company%20/%20LLP%29%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="save">
            <h2>How to Reduce Stamp Duty</h2>
            <ul>
                <li><strong>Start with low authorised capital</strong> (₹1 lakh) — the AoA duty scales with capital, so a low start keeps it minimal; raise later via SH-7.</li>
                <li><strong>Consider a low-duty state</strong> if your office location is flexible — the North-East, Maharashtra, Delhi and UP are typically lower than Karnataka, Punjab or Gujarat.</li>
                <li><strong>Weigh duty against jurisdiction</strong> — the registered office sets your compliance, GST and assessment jurisdiction, so don't chase the lowest duty blindly.</li>
                <li><strong>Bundle with incorporation</strong> — a CA firm computes the exact duty and pays it within the SPICe+ flow, avoiding rejection for under-stamping.</li>
            </ul>
            <div class="formula-box">
                <span class="label">Company duty</span> = MoA flat fee + AoA duty(state, capital) + form stamp<br>
                <span class="label">LLP duty</span> = agreement duty(state, contribution)<br>
                <span class="label">Most states</span>: AoA scales with authorised capital (cap may apply)
            </div>
        </section>

        <section class="content-section" id="sh7">
            <h2>Stamp Duty on Capital Increase (SH-7)</h2>
            <p>Stamp duty isn't only an incorporation event. If you later <strong>increase authorised capital</strong>, you file <strong>Form SH-7</strong> with the ROC and pay additional stamp duty on the <em>increased</em> amount under the same state rules, plus the MCA filing fee for the new slab. There's no penalty for starting low and topping up later — which is exactly why a low initial capital is the standard cost-saving move.</p>
            <p>For ongoing costs after incorporation, the <a href="/tools/annual-compliance-cost-estimator">annual compliance cost estimator</a> and <a href="/tools/mca-late-fee-calculator">MCA late-fee calculator</a> help you plan.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This is an indicative estimate. Stamp duty is fixed by each state's Stamp Act, revised by notification, and auto-calculated by MCA at filing — confirm the current rate for your state before budgeting.</p>
            </div>
        </section>

        <section class="content-section" id="legal-basis">
            <h2>The Legal Basis — and Why It Keeps Changing</h2>
            <p>Stamp duty on incorporation documents flows from the <strong>Indian Stamp Act 1899</strong> as adapted by each state, plus state-specific Stamp Acts such as the <strong>Maharashtra Stamp Act 1958</strong> (amended by ordinance in 2024). Because Entry 63 of the State List puts stamp duty rates in the states' hands, there is no uniform national figure — and states revise their schedules periodically, which is why even a careful estimate can drift between budgeting and filing.</p>
            <p>The practical consequence is that the duty is computed live by the MCA's SPICe+ system at the moment of filing, drawing on each state's current schedule. The company itself is registered under the Companies Act 2013 administered by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>, while the resulting entity will hold a PAN and file returns through the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax department</a>. Where the incorporation documents and accounts are prepared by professionals, those follow standards issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>.</p>
            <p>One useful planning point: if you intend to seek <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> startup recognition through the <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> portal, the entity must be incorporated first, so factoring the stamp duty into your day-one budget — rather than discovering it at filing — keeps the whole registration timeline on track.</p>
            <div class="callout">
                <p><strong>Tip:</strong> Deciding which structure to register is the step before this one — the <a href="/tools/entity-type-selector">entity type selector</a> helps you choose between Pvt Ltd, LLP, OPC and more.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is stamp duty on incorporation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">When you incorporate a company, the state levies stamp duty on two foundational documents, the Memorandum of Association and the Articles of Association, and for an LLP on the LLP agreement. It is a state tax that makes the incorporation documents legally enforceable. The amount depends on the state of the registered office and, in most states, on the authorised share capital or the LLP contribution. It is paid through the MCA portal as part of the SPICe Plus or FiLLiP filing.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Why does incorporation stamp duty vary by state?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Stamp duty is a state subject, so each state sets its own rate under its Stamp Act. Some states charge a flat fee, some charge a percentage of authorised capital, and others use a per-block slab such as a fixed amount for every five or ten lakh rupees of capital, sometimes with a minimum or a maximum cap. As a result the duty for the same authorised capital can differ by several thousand rupees between, say, Maharashtra and Karnataka or Gujarat.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How is stamp duty calculated on the MoA and AoA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Typically the Memorandum of Association attracts a small flat fee, often between 100 and 500 rupees, while the Articles of Association is where most of the variation lies and is usually linked to authorised capital. The state applies its flat, percentage or slab rule to the capital to arrive at the AoA duty, adds the MoA fee and a small form stamp, and the total is the incorporation stamp duty. This calculator itemises the Memorandum and Articles components and shows the total.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which states have the lowest incorporation stamp duty?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The north-eastern states such as Assam, Meghalaya, Manipur, Mizoram, Nagaland, Sikkim, Tripura and Arunachal Pradesh generally have the lowest stamp duty, often a flat 100 to 500 rupees regardless of capital. Maharashtra, Delhi and Uttar Pradesh are relatively low for small capital. Karnataka, Punjab, Gujarat and Kerala tend to be among the higher states. If your registered office location is flexible, choosing a low-duty state can save a meaningful amount at incorporation.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does higher authorised capital increase stamp duty?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, in most states. Because the Articles of Association duty is usually a percentage or per-block charge on authorised capital, a higher capital means higher stamp duty, although several states apply a maximum cap beyond which it stops rising. A common cost-saving approach is to incorporate with a low authorised capital, such as one lakh rupees, and increase it later through Form SH-7, paying the incremental stamp duty only on the increase at that time.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is LLP stamp duty different from company stamp duty?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. An LLP does not have an MoA and AoA; instead stamp duty is charged on the LLP agreement, again under the state Stamp Act and usually linked to the capital contribution. The rates and slabs differ from those for a company and from state to state. This calculator gives an indicative figure for the LLP agreement when you select the LLP option, but the exact duty should be confirmed for your state and contribution before filing Form 3.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Do I pay stamp duty again when I increase capital?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. When you increase authorised capital you file Form SH-7 with the Registrar of Companies and pay additional stamp duty, calculated on the increased amount under the same state rules, along with the MCA filing fee for the new capital slab. There is no penalty for starting low and increasing later, so many founders begin with a small authorised capital to minimise the upfront stamp duty and pay more only when the business genuinely needs higher capital.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is this calculator's figure the exact amount I will pay?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. It is an indicative estimate. The binding stamp duty is auto-calculated by the MCA SPICe Plus system from each state's stamp schedule at the time of filing, and state governments revise rates by notification. This tool models the common state structures using representative rates, so treat its output as a planning figure. Always confirm the current rate with your state's revenue department or a CA or CS before relying on it for budgeting.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I reduce stamp duty by choosing a different state?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If your business does not need a physical presence in a particular state, registering the office in a low stamp duty state can reduce incorporation cost, sometimes by several thousand rupees at higher capital. However, the registered office determines your jurisdiction for compliance, GST and assessments, so the decision should weigh the duty saving against operational and tax considerations rather than chasing the lowest duty alone. A professional can help you balance these.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Incorporation Stamp Duty Calculator free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Incorporation Stamp Duty Calculator is completely free with no signup required. All calculations run in your browser and nothing is stored on our servers. It estimates state-wise stamp duty on the MoA and AoA, or the LLP agreement, by authorised capital and itemises the components. It is an indicative planning tool; the exact, binding duty is computed by the MCA system at filing, so confirm the current figure with a professional before relying on it.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Exact Duty + Filing</h3>
            <p>Precise state stamp duty computation, MoA/AoA or LLP agreement drafting, and SPICe+/FiLLiP filing — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20need%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Incorporation%20stamp%20duty%20/%20filing%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Incorporation%20Stamp%20Duty%20Calculator%20and%20would%20like%20help%20with%20the%20exact%20stamp%20duty%20and%20incorporation%20filing.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Company%20/%20LLP%29%3A%0A-%20State%20of%20registered%20office%3A%0A-%20Authorised%20capital%20/%20contribution%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/incorporation-cost-estimator" class="sidebar-link">Incorporation Cost Estimator <span class="arrow">→</span></a>
            <a href="/tools/entity-type-selector" class="sidebar-link">Entity Type Selector <span class="arrow">→</span></a>
            <a href="/tools/annual-compliance-cost-estimator" class="sidebar-link">Annual Compliance Cost <span class="arrow">→</span></a>
            <a href="/tools/mca-late-fee-calculator" class="sidebar-link">MCA Late Fee Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Registration Pages</h3>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Private Limited <span class="arrow">→</span></a>
            <a href="/llp-incorporation" class="sidebar-link">LLP <span class="arrow">→</span></a>
            <a href="/one-person-company-registration" class="sidebar-link">One Person Company <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/private-limited-company-registration-cost-breakdown-government-fees" class="sidebar-link">Pvt Ltd Cost Breakdown <span class="arrow">→</span></a>
            <a href="/blog/documents-required-for-company-registration-in-india" class="sidebar-link">Documents Required <span class="arrow">→</span></a>
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

    var entity = 'company';

    // Representative state structures (indicative). moaFlat = MoA flat fee.
    // aoa: function of capital. type drives the model. Values are approximations of published rates.
    var STATES = {
        maharashtra: { name:'Maharashtra', moaFlat:200, aoa:function(c){ return Math.min(Math.max(1000, Math.ceil(c/500000)*1000), 50000); } },
        delhi:       { name:'Delhi', moaFlat:200, aoa:function(c){ return Math.min(Math.round(c*0.0015), 25000); } },
        karnataka:   { name:'Karnataka', moaFlat:500, aoa:function(c){ return Math.ceil(c/1000000)*5000; } },
        tamilnadu:   { name:'Tamil Nadu', moaFlat:200, aoa:function(c){ return Math.min(Math.round(c*0.0010), 20000); } },
        telangana:   { name:'Telangana / Andhra', moaFlat:500, aoa:function(c){ return Math.min(Math.round(c*0.0015), 25000); } },
        gujarat:     { name:'Gujarat', moaFlat:100, aoa:function(c){ return Math.min(Math.round(c*0.0050), 500000); } },
        uttarpradesh:{ name:'Uttar Pradesh', moaFlat:200, aoa:function(c){ return 500; } },
        westbengal:  { name:'West Bengal', moaFlat:60, aoa:function(c){ return Math.min(Math.round(c*0.0015), 20000); } },
        rajasthan:   { name:'Rajasthan', moaFlat:500, aoa:function(c){ return Math.min(Math.max(5000, Math.round(c*0.0050)), 100000); } },
        madhyapradesh:{ name:'Madhya Pradesh', moaFlat:50, aoa:function(c){ return Math.min(Math.round(c*0.0015), 25000); } },
        punjab:      { name:'Punjab', moaFlat:5000, aoa:function(c){ return 5000; } },
        kerala:      { name:'Kerala', moaFlat:1000, aoa:function(c){ return Math.min(Math.round(c*0.0050), 200000); } },
        northeast:   { name:'North-East / Sikkim', moaFlat:100, aoa:function(c){ return 100; } },
        other:       { name:'Other state (typical)', moaFlat:200, aoa:function(c){ return Math.min(Math.round(c*0.0015), 25000); } }
    };
    // LLP agreement stamp (indicative, by contribution & state band relative factor)
    function llpAgreementDuty(stateKey, c){
        var band;
        if (['punjab','karnataka','gujarat','kerala','rajasthan'].indexOf(stateKey) !== -1) band = 'high';
        else if (['northeast','uttarpradesh'].indexOf(stateKey) !== -1) band = 'low';
        else band = 'mid';
        var base;
        if (c <= 100000) base = 500;
        else if (c <= 500000) base = 1000;
        else if (c <= 1000000) base = 2000;
        else if (c <= 5000000) base = 5000;
        else base = 10000;
        var mult = band === 'high' ? 2 : (band === 'low' ? 0.5 : 1);
        return Math.round(base * mult);
    }

    function val(id){ var v = parseINR(document.getElementById(id).value); return isFinite(v) ? v : 0; }
    function fmtINR(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }

    function pickEntity(btn){
        entity = btn.dataset.e;
        document.querySelectorAll('#entityToggle .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        var capLabel = document.getElementById('capitalLabel');
        var capHint = document.getElementById('capitalHint');
        if (entity === 'llp'){ capLabel.textContent = 'Capital Contribution (₹)'; capHint.textContent = 'Total partner contribution.'; }
        else { capLabel.textContent = 'Authorised Capital (₹)'; capHint.textContent = 'Company share capital. Start with ₹1 lakh to minimise duty.'; }
        document.getElementById('resultSection').classList.remove('visible');
    }

    function calculate(){
        var cap = val('capital');
        if (cap <= 0){ alert('Please enter the authorised capital / contribution.'); return; }
        var stateKey = document.getElementById('state').value;
        var st = STATES[stateKey];
        var items = [], total = 0;

        if (entity === 'llp'){
            var llp = llpAgreementDuty(stateKey, cap);
            items.push({ l:'LLP agreement stamp duty', s: st.name + ' · on contribution', v: llp });
            items.push({ l:'Form stamp', s:'Nominal', v: 50 });
            total = llp + 50;
        } else {
            var moa = st.moaFlat;
            var aoa = st.aoa(cap);
            var formStamp = 50;
            items.push({ l:'MoA stamp duty', s: st.name + ' · flat', v: moa });
            items.push({ l:'AoA stamp duty', s: st.name + ' · on authorised capital', v: aoa });
            items.push({ l:'Form stamp (INC-32 etc.)', s:'Nominal', v: formStamp });
            total = moa + aoa + formStamp;
        }

        document.getElementById('totalAmount').textContent = fmtINR(total);
        document.getElementById('totalSub').textContent = st.name + ' · ' + (entity === 'llp' ? 'LLP agreement' : 'MoA + AoA') + ' · indicative';

        var rows = '';
        items.forEach(function(it){
            rows += '<div class="bd-row"><span class="bd-label">' + it.l + '<small>' + it.s + '</small></span><span class="bd-val">' + fmtINR(it.v) + '</span></div>';
        });
        rows += '<div class="bd-row total"><span class="bd-label">Estimated stamp duty</span><span class="bd-val">' + fmtINR(total) + '</span></div>';
        document.getElementById('breakdown').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        document.getElementById('capital').value = '100000';
        document.getElementById('state').value = 'maharashtra';
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('capital').addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });

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
