@extends('layouts.app')
@section('meta')

<title>ESOP TDS Deferral Checker | Section 192(1C) Startup</title>
<meta name="description" content="Section 192(1C) checker: see if your startup and employees can defer ESOP TDS. Tests DPIIT, 80-IAC IMB certificate, incorporation window and turnover. Free now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/esop-section-192-1c-eligibility-checker">

<meta property="og:title" content="ESOP TDS Deferral Checker — Section 192(1C) 2026">
<meta property="og:description" content="Check whether your startup qualifies to defer ESOP TDS under Section 192(1C): DPIIT recognition, 80-IAC IMB certificate, incorporation window and turnover test.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/esop-section-192-1c-eligibility-checker">
<meta property="og:image" content="/tools/esop-section-192-1c-eligibility-checker-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ESOP TDS Deferral Checker — Section 192(1C) 2026">
<meta name="twitter:description" content="Check if your startup can defer ESOP TDS under Section 192(1C): DPIIT, 80-IAC IMB certificate, incorporation window and turnover. Free & instant.">
<meta name="twitter:image" content="/tools/esop-section-192-1c-eligibility-checker-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ESOP Section 192(1C) Eligibility Checker",
  "description": "ESOP Section 192(1C) Eligibility Checker walks through the statutory conditions that decide whether a startup's employees can defer tax deducted at source on the ESOP perquisite under Section 192(1C). It tests entity type, the incorporation window of 1 April 2016 to before 1 April 2030, valid DPIIT recognition, the separate Section 80-IAC Inter-Ministerial Board certificate, the turnover ceiling of 100 crore rupees, and that the company was not formed by splitting or reconstruction. It returns a clear eligible or not eligible verdict, names the failing condition, and explains the deferral trigger.",
  "url": "/tools/esop-section-192-1c-eligibility-checker",
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
    {"@type": "ListItem", "position": 3, "name": "ESOP Section 192(1C) Eligibility Checker", "item": "/tools/esop-section-192-1c-eligibility-checker"}
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
      "name": "What is Section 192(1C) of the Income Tax Act?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Section 192(1C), introduced by the Finance Act 2020, lets eligible startups defer the deduction of TDS on the ESOP perquisite. Normally the employer must deduct TDS on the perquisite at exercise under Section 192. Under 192(1C) the deduction is postponed, and tax is instead deducted or paid within fourteen days of the earliest of three trigger events. The benefit is available only to employees of startups that are eligible startups under Section 80-IAC."
      }
    },
    {
      "@type": "Question",
      "name": "Which startups qualify for the Section 192(1C) deferral?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Only an eligible startup under Section 80-IAC qualifies. That requires the company to be a Private Limited Company or LLP, incorporated on or after 1 April 2016 and before 1 April 2030, holding both DPIIT recognition and a separate Inter-Ministerial Board certificate, with turnover not exceeding 100 crore rupees in any year since incorporation, and not formed by splitting up or reconstruction. Every condition must be met; failing one makes the deferral unavailable."
      }
    },
    {
      "@type": "Question",
      "name": "Is DPIIT recognition enough for the ESOP TDS deferral?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. DPIIT recognition is necessary but not sufficient. The startup must also obtain a separate Section 80-IAC certificate from the Inter-Ministerial Board. Of roughly 1.97 lakh DPIIT-recognised startups, only about 4,000 hold the IMB certificate, so the vast majority of DPIIT startups do not qualify for the deferral. The IMB certification is the decisive gate, and this checker treats it as a mandatory condition."
      }
    },
    {
      "@type": "Question",
      "name": "What entity types are eligible for Section 80-IAC?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Only a Private Limited Company or a Limited Liability Partnership qualifies as an eligible startup under Section 80-IAC. A One Person Company, a registered partnership firm, a cooperative society and a sole proprietorship are not eligible, even if they hold DPIIT recognition. So if the entity behind the ESOP is not a Private Limited Company or LLP, the Section 192(1C) deferral is not available regardless of the other conditions."
      }
    },
    {
      "@type": "Question",
      "name": "What is the incorporation window for eligibility?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The company must be incorporated on or after 1 April 2016 and before 1 April 2030. The end of the window was extended from 31 March 2025 to 31 March 2030 by the Finance Act 2025. A company incorporated before 1 April 2016, or one incorporated on or after 1 April 2030 once the window closes, would not meet this condition and so would not be an eligible startup for the deferral."
      }
    },
    {
      "@type": "Question",
      "name": "What is the turnover limit for an eligible startup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Total turnover must not exceed 100 crore rupees in any financial year since incorporation. If turnover crosses that ceiling in any year, the startup ceases to be an eligible startup under Section 80-IAC, which in turn removes access to the Section 192(1C) ESOP deferral. The turnover test should be monitored each year, because eligibility can be lost as the company grows even if it was eligible earlier."
      }
    },
    {
      "@type": "Question",
      "name": "When does the deferred ESOP tax become payable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If eligible, the TDS is deferred and falls due within fourteen days of the earliest of three events: the expiry of forty-eight months from the end of the relevant assessment year of allotment, the sale of the shares, or the employee ceasing employment. For shares allotted on or after 1 April 2026 under the Income-tax Act 2025, the forty-eight month period becomes sixty months. The tax is computed at the rates of the year of allotment, not the trigger year."
      }
    },
    {
      "@type": "Question",
      "name": "Is the deferral being extended to all DPIIT startups?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As of early 2026 the government is reported to be considering extending the ESOP tax deferral to all DPIIT-recognised startups, removing the separate 80-IAC IMB certificate requirement. If enacted, DPIIT recognition alone would suffice, expanding eligibility from about 4,000 to nearly 2 lakh startups. This is a proposal and is not yet law, so the current checker still requires the 80-IAC IMB certificate as a mandatory condition."
      }
    },
    {
      "@type": "Question",
      "name": "What does the checker do if a condition fails?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The checker evaluates each statutory condition in turn and returns a clear verdict. If all conditions are satisfied it shows that the startup's employees can defer ESOP TDS under Section 192(1C) and explains the trigger. If one or more conditions fail, it shows that the deferral is not available and names the specific condition that failed, so you know exactly what would need to change for the startup to qualify."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Section 192(1C) Eligibility Checker free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Section 192(1C) Eligibility Checker is completely free with no signup required. All logic runs in your browser and nothing is stored on our servers. It walks through entity type, incorporation date, DPIIT recognition, the 80-IAC IMB certificate, turnover and the reconstruction test, then tells you whether the ESOP TDS deferral is available. It is an indicative guide; the final position should be confirmed with a professional before relying on it."
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
        .q-block { margin-bottom: 18px; padding-bottom: 18px; border-bottom: 1px dashed var(--border); }
        .q-block:last-of-type { border-bottom: none; }
        .q-label { display: block; font-size: 15px; font-weight: 600; color: var(--primary-dark); margin-bottom: 10px; }
        .q-label .q-num { font-family: var(--font-mono); color: var(--accent); margin-right: 8px; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; }
        .toggle-btn { flex: 1; padding: 11px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 80px; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .toggle-btn.active.no { color: var(--danger); }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[inputmode="decimal"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 12px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .verdict { border-radius: var(--radius-lg); padding: 24px; text-align: center; margin-bottom: 16px; }
        .verdict.eligible { background: #ECFDF5; border: 2px solid var(--success); }
        .verdict.not-eligible { background: #FEF2F2; border: 2px solid var(--danger); }
        .verdict-icon { font-size: 40px; line-height: 1; margin-bottom: 8px; }
        .verdict h3 { font-size: 22px; font-weight: 700; margin-bottom: 6px; }
        .verdict.eligible h3 { color: var(--success); }
        .verdict.not-eligible h3 { color: var(--danger); }
        .verdict p { font-size: 14px; color: var(--text-secondary); line-height: 1.6; }
        .checklist { background: var(--surface-alt); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 16px; }
        .check-row { display: flex; align-items: flex-start; gap: 10px; padding: 8px 0; font-size: 14px; }
        .check-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .check-mark { flex-shrink: 0; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 13px; font-weight: 700; color: #fff; }
        .check-mark.pass { background: var(--success); }
        .check-mark.fail { background: var(--danger); }
        .check-text { color: var(--text-secondary); }
        .check-text strong { color: var(--text); }
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
        <a href="#calculator">Checker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">What It Is</a>
        <a href="#conditions">Conditions</a>
        <a href="#trigger">Deferral Trigger</a>
        <a href="#expansion">Proposed Change</a>
        <a href="#reporting">In Practice</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP Section 192(1C) Eligibility Checker
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP TDS Deferral Checker — <span>Section 192(1C) 2026 </span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">80-IAC or ESOP deferral questions? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20need%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Section%20192%281C%29%20/%2080-IAC%20eligibility%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20would%20like%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%29%3A%0A-%20Incorporation%20date%3A%0A-%20DPIIT%20recognised%20%28yes/no%29%3A%0A-%2080-IAC%20IMB%20certificate%20%28yes/no%29%3A%0A-%20Turnover%20band%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Check whether your startup's employees can <strong>defer ESOP TDS</strong> under <strong>Section 192(1C)</strong>. The deferral is available only to an <strong>eligible startup under Section 80-IAC</strong> — answer six questions (entity type, incorporation date, DPIIT recognition, the separate <strong>80-IAC IMB certificate</strong>, the ₹100 crore turnover test, and the no-reconstruction rule). The checker returns a clear <strong>eligible / not eligible</strong> verdict and names the failing condition. Note: DPIIT recognition alone is <strong>not</strong> enough — the IMB certificate is the decisive gate.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check Section 192(1C) Eligibility</h2>
            <p class="calc-sub">Answer about the company granting the ESOPs. All six conditions must hold for the deferral to apply.</p>
            <noscript>
                <div class="noscript-box">
                    This checker requires JavaScript. Please enable JavaScript, or verify each condition below manually: entity type, incorporation window, DPIIT, 80-IAC IMB certificate, turnover and no reconstruction.
                </div>
            </noscript>

            <div class="q-block">
                <label class="q-label"><span class="q-num">1</span>Is the entity a Private Limited Company or LLP?</label>
                <div class="toggle-group" data-q="entity">
                    <button type="button" class="toggle-btn active" data-v="yes" onclick="pick(this)">Pvt Ltd / LLP</button>
                    <button type="button" class="toggle-btn" data-v="no" onclick="pick(this)">OPC / firm / proprietor</button>
                </div>
                <div class="field-hint">OPC, partnership firms and proprietorships are not eligible for 80-IAC.</div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">2</span>Date of incorporation</label>
                <div class="form-group">
                    <input type="date" id="incDate" autocomplete="off">
                </div>
                <div class="field-hint">Must be on/after 1 Apr 2016 and before 1 Apr 2030.</div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">3</span>Does it hold valid DPIIT recognition?</label>
                <div class="toggle-group" data-q="dpiit">
                    <button type="button" class="toggle-btn active" data-v="yes" onclick="pick(this)">Yes</button>
                    <button type="button" class="toggle-btn" data-v="no" onclick="pick(this)">No</button>
                </div>
                <div class="field-hint">Certificate of Recognition under G.S.R. 108(E).</div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">4</span>Does it hold a Section 80-IAC IMB certificate?</label>
                <div class="toggle-group" data-q="imb">
                    <button type="button" class="toggle-btn active" data-v="yes" onclick="pick(this)">Yes</button>
                    <button type="button" class="toggle-btn" data-v="no" onclick="pick(this)">No</button>
                </div>
                <div class="field-hint">Separate Inter-Ministerial Board certificate — the decisive gate.</div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">5</span>Has turnover stayed ≤ ₹100 crore every year since incorporation?</label>
                <div class="toggle-group" data-q="turnover">
                    <button type="button" class="toggle-btn active" data-v="yes" onclick="pick(this)">Yes, always ≤ ₹100 cr</button>
                    <button type="button" class="toggle-btn" data-v="no" onclick="pick(this)">No, exceeded</button>
                </div>
                <div class="field-hint">Crossing ₹100 cr in any FY removes eligibility.</div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">6</span>Was it NOT formed by splitting up / reconstruction?</label>
                <div class="toggle-group" data-q="recon">
                    <button type="button" class="toggle-btn active" data-v="yes" onclick="pick(this)">Genuinely new</button>
                    <button type="button" class="toggle-btn" data-v="no" onclick="pick(this)">Split / reconstructed</button>
                </div>
                <div class="field-hint">Companies formed by reconstruction are excluded.</div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Check Eligibility</button>

            <div class="result-section" id="resultSection">
                <div class="verdict" id="verdict">
                    <div class="verdict-icon" id="verdictIcon">—</div>
                    <h3 id="verdictTitle">—</h3>
                    <p id="verdictText"></p>
                </div>
                <div class="checklist" id="checklist"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need 80-IAC certification or the deferral set up?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant handles DPIIT recognition, the 80-IAC IMB application, and ESOP perquisite-tax deferral compliance end to end.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20need%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Section%20192%281C%29%20/%2080-IAC%20eligibility%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20would%20like%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%29%3A%0A-%20Incorporation%20date%3A%0A-%20DPIIT%20recognised%20%28yes/no%29%3A%0A-%2080-IAC%20IMB%20certificate%20%28yes/no%29%3A%0A-%20Turnover%20band%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Checker</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Eligibility Checker</h2>
            <ol>
                <li><strong>Answer about the company</strong> granting the ESOPs — not the employee.</li>
                <li><strong>Entity type and incorporation date</strong> are objective facts from the incorporation certificate.</li>
                <li><strong>DPIIT and IMB</strong> — confirm both certificates exist; the 80-IAC IMB certificate is separate from DPIIT recognition.</li>
                <li><strong>Turnover and reconstruction</strong> — confirm the ₹100 crore ceiling has held every year and the company is genuinely new.</li>
                <li><strong>Click Check</strong> for an eligible / not-eligible verdict with the specific failing condition flagged.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> If you're eligible, size the deferred liability with the <a href="/tools/esop-tds-calculator">ESOP TDS calculator</a> (it has a 192(1C) defer mode) and the <a href="/tools/esop-perquisite-tax-calculator">perquisite tax calculator</a>.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Section 192(1C) Does</h2>
            <p>Normally, when an employee exercises ESOPs the perquisite — FMV at exercise minus the exercise price — is taxed as salary, and the employer must deduct TDS under Section 192 right away. For a cash-strapped employee holding illiquid startup shares, that's a real burden.</p>
            <p><strong>Section 192(1C)</strong>, added by the Finance Act 2020, lets <strong>eligible startups</strong> defer that TDS: the employer doesn't deduct at exercise, and tax is instead paid later, at the earliest of three trigger events. But the benefit is narrow — it's available only to employees of a startup that is an <strong>eligible startup under Section 80-IAC</strong>, which is a much smaller club than DPIIT-recognised startups. Patron's <a href="/blog/esop-tax-deferral-startup-employees-dpiit-section-80-iac">ESOP deferral guide</a> and <a href="/blog/section-80-iac-esop-deferment-startup">80-IAC deferment</a> blog explain the mechanics.</p>
        </section>

        <section class="content-section" id="conditions">
            <h2>The Six Conditions</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>#</th><th>Condition</th><th>Requirement</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>Entity type</td><td>Private Limited Company or LLP only (not OPC / firm / proprietorship).</td></tr>
                    <tr><td>2</td><td>Incorporation date</td><td>On/after 1 Apr 2016 and before 1 Apr 2030 (window extended by Finance Act 2025).</td></tr>
                    <tr><td>3</td><td>DPIIT recognition</td><td>Valid Certificate of Recognition — necessary but not sufficient.</td></tr>
                    <tr><td>4</td><td>80-IAC IMB certificate</td><td>Separate Inter-Ministerial Board certificate — the decisive gate.</td></tr>
                    <tr><td>5</td><td>Turnover</td><td>≤ ₹100 crore in every FY since incorporation.</td></tr>
                    <tr><td>6</td><td>Not by reconstruction</td><td>Not formed by splitting up or reconstructing an existing business.</td></tr>
                </tbody>
            </table>
            <p>Every condition must hold. The most common failure is condition 4: of roughly 1.97 lakh DPIIT-recognised startups, only about <strong>4,000 hold the IMB certificate</strong> — so the majority of DPIIT startups' employees cannot defer. Recognition is granted by <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> and the 80-IAC certificate is a separate application to the Inter-Ministerial Board via the <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> portal. Getting recognised starts with <a href="/startup-registration">startup registration</a>; the IMB certificate is a separate step.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with 80-IAC Certification & ESOP TDS Deferral?</h3>
            <p>Patron Accounting LLP supports startups seeking 80-IAC certification and ESOP perquisite-tax deferral under Section 192(1C) — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20need%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Section%20192%281C%29%20/%2080-IAC%20eligibility%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20would%20like%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%29%3A%0A-%20Incorporation%20date%3A%0A-%20DPIIT%20recognised%20%28yes/no%29%3A%0A-%2080-IAC%20IMB%20certificate%20%28yes/no%29%3A%0A-%20Turnover%20band%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="trigger">
            <h2>If Eligible — When Does the Deferred Tax Fall Due?</h2>
            <p>For an eligible startup, the TDS is deferred and becomes payable within <strong>14 days</strong> of the <strong>earliest</strong> of three triggers:</p>
            <ul>
                <li><strong>48 months</strong> from the end of the relevant assessment year of allotment;</li>
                <li><strong>sale</strong> of the shares; or</li>
                <li><strong>cessation</strong> of employment.</li>
            </ul>
            <p>The tax is computed at the <strong>rates of the year of allotment</strong>, not the trigger year. One forward-looking nuance: for shares allotted <strong>on or after 1 April 2026</strong> under the Income-tax Act 2025, the 48-month period becomes <strong>60 months</strong>. Model the deferred amount with the <a href="/tools/esop-tds-calculator">ESOP TDS calculator</a>.</p>
            <div class="formula-box">
                <span class="label">Trigger</span> = earliest of (48 months from end of AY | sale | cessation)<br>
                <span class="label">Deposit</span> = within 14 days of trigger<br>
                <span class="label">Rate</span> = year-of-allotment rates
            </div>
        </section>

        <section class="content-section" id="expansion">
            <h2>A Proposed Expansion to Watch</h2>
            <p>As of early 2026, the government is reported to be considering <strong>extending the ESOP deferral to all DPIIT-recognised startups</strong>, dropping the separate 80-IAC IMB requirement. If enacted, DPIIT recognition alone would suffice, expanding eligibility from roughly 4,000 to nearly 2 lakh startups.</p>
            <p>This is a <strong>proposal, not yet law</strong>, so this checker still treats the 80-IAC IMB certificate as mandatory. If your startup is DPIIT-recognised but lacks the IMB certificate, it's worth tracking this change — see Patron's <a href="/blog/esop-tax-deferral-startup-employees-dpiit-section-80-iac">deferral guide</a> for updates.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This checker reflects the law as it stands. Eligibility, certificates and turnover should be confirmed with a professional before relying on the deferral.</p>
            </div>
        </section>

        <section class="content-section" id="reporting">
            <h2>How the Deferral Plays Out in Practice</h2>
            <p>Eligibility is only the first step. Once a startup qualifies and chooses to defer, the mechanics flow through the company's payroll and the employee's return. The employer does not deduct TDS at exercise, but it must <strong>track the deferred liability</strong> for each grantee and deduct or deposit within 14 days when a trigger occurs, reporting it in the salary TDS return. The perquisite does not appear in the employee's Form 16 until the trigger event, though the employee should still track it and disclose the deferred perquisite in the relevant year's return.</p>
            <p>The framework sits in Section 192(1C) (renumbered under the Income-tax Act 2025), administered by the Income Tax Department through the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">e-filing portal</a>, with the statutory text and procedural rules published at <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">incometaxindia.gov.in</a>. Payroll and share-based-payment accounting follow professional standards issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. Because eligibility can be lost — for example if turnover later crosses ₹100 crore — the position should be re-checked each year, not assumed to be permanent once granted.</p>
            <div class="callout">
                <p><strong>Tip:</strong> If eligible, run the numbers in defer mode on the <a href="/tools/esop-tds-calculator">ESOP TDS calculator</a> so both employer and employee can plan the eventual cash outflow.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is Section 192(1C) of the Income Tax Act?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 192(1C), introduced by the Finance Act 2020, lets eligible startups defer the deduction of TDS on the ESOP perquisite. Normally the employer must deduct TDS on the perquisite at exercise under Section 192. Under 192(1C) the deduction is postponed, and tax is instead deducted or paid within fourteen days of the earliest of three trigger events. The benefit is available only to employees of startups that are eligible startups under Section 80-IAC.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which startups qualify for the Section 192(1C) deferral?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Only an eligible startup under Section 80-IAC qualifies. That requires the company to be a Private Limited Company or LLP, incorporated on or after 1 April 2016 and before 1 April 2030, holding both DPIIT recognition and a separate Inter-Ministerial Board certificate, with turnover not exceeding 100 crore rupees in any year since incorporation, and not formed by splitting up or reconstruction. Every condition must be met; failing one makes the deferral unavailable.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is DPIIT recognition enough for the ESOP TDS deferral?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. DPIIT recognition is necessary but not sufficient. The startup must also obtain a separate Section 80-IAC certificate from the Inter-Ministerial Board. Of roughly 1.97 lakh DPIIT-recognised startups, only about 4,000 hold the IMB certificate, so the vast majority of DPIIT startups do not qualify for the deferral. The IMB certification is the decisive gate, and this checker treats it as a mandatory condition.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What entity types are eligible for Section 80-IAC?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Only a Private Limited Company or a Limited Liability Partnership qualifies as an eligible startup under Section 80-IAC. A One Person Company, a registered partnership firm, a cooperative society and a sole proprietorship are not eligible, even if they hold DPIIT recognition. So if the entity behind the ESOP is not a Private Limited Company or LLP, the Section 192(1C) deferral is not available regardless of the other conditions.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the incorporation window for eligibility?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The company must be incorporated on or after 1 April 2016 and before 1 April 2030. The end of the window was extended from 31 March 2025 to 31 March 2030 by the Finance Act 2025. A company incorporated before 1 April 2016, or one incorporated on or after 1 April 2030 once the window closes, would not meet this condition and so would not be an eligible startup for the deferral.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the turnover limit for an eligible startup?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Total turnover must not exceed 100 crore rupees in any financial year since incorporation. If turnover crosses that ceiling in any year, the startup ceases to be an eligible startup under Section 80-IAC, which in turn removes access to the Section 192(1C) ESOP deferral. The turnover test should be monitored each year, because eligibility can be lost as the company grows even if it was eligible earlier.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When does the deferred ESOP tax become payable?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If eligible, the TDS is deferred and falls due within fourteen days of the earliest of three events: the expiry of forty-eight months from the end of the relevant assessment year of allotment, the sale of the shares, or the employee ceasing employment. For shares allotted on or after 1 April 2026 under the Income-tax Act 2025, the forty-eight month period becomes sixty months. The tax is computed at the rates of the year of allotment, not the trigger year.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the deferral being extended to all DPIIT startups?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">As of early 2026 the government is reported to be considering extending the ESOP tax deferral to all DPIIT-recognised startups, removing the separate 80-IAC IMB certificate requirement. If enacted, DPIIT recognition alone would suffice, expanding eligibility from about 4,000 to nearly 2 lakh startups. This is a proposal and is not yet law, so the current checker still requires the 80-IAC IMB certificate as a mandatory condition.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What does the checker do if a condition fails?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The checker evaluates each statutory condition in turn and returns a clear verdict. If all conditions are satisfied it shows that the startup's employees can defer ESOP TDS under Section 192(1C) and explains the trigger. If one or more conditions fail, it shows that the deferral is not available and names the specific condition that failed, so you know exactly what would need to change for the startup to qualify.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Section 192(1C) Eligibility Checker free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Section 192(1C) Eligibility Checker is completely free with no signup required. All logic runs in your browser and nothing is stored on our servers. It walks through entity type, incorporation date, DPIIT recognition, the 80-IAC IMB certificate, turnover and the reconstruction test, then tells you whether the ESOP TDS deferral is available. It is an indicative guide; the final position should be confirmed with a professional before relying on it.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>80-IAC & ESOP Deferral</h3>
            <p>DPIIT recognition, 80-IAC IMB certification and ESOP TDS deferral compliance — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20need%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Section%20192%281C%29%20/%2080-IAC%20eligibility%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Section%20192%281C%29%20Eligibility%20Checker%20and%20would%20like%20help%20with%2080-IAC%20certification%20and%20ESOP%20TDS%20deferral.%0A%0AMy%20details%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%29%3A%0A-%20Incorporation%20date%3A%0A-%20DPIIT%20recognised%20%28yes/no%29%3A%0A-%2080-IAC%20IMB%20certificate%20%28yes/no%29%3A%0A-%20Turnover%20band%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/esop-tds-calculator" class="sidebar-link">ESOP TDS Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-perquisite-tax-calculator" class="sidebar-link">Perquisite Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-tax-calculator" class="sidebar-link">ESOP Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/esop-capital-gains-calculator" class="sidebar-link">ESOP Capital Gains <span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/startup-registration" class="sidebar-link">Startup Registration <span class="arrow">→</span></a>
            <a href="/esop-management-and-compliance-services" class="sidebar-link">ESOP Compliance <span class="arrow">→</span></a>
            <a href="/itr-for-esop-employees" class="sidebar-link">ITR for ESOP Employees <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-tax-deferral-startup-employees-dpiit-section-80-iac" class="sidebar-link">80-IAC ESOP Deferral <span class="arrow">→</span></a>
            <a href="/blog/section-80-iac-esop-deferment-startup" class="sidebar-link">80-IAC Deferment <span class="arrow">→</span></a>
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

    var answers = { entity:'yes', dpiit:'yes', imb:'yes', turnover:'yes', recon:'yes' };

    function pick(btn){
        var group = btn.closest('.toggle-group');
        var q = group.dataset.q;
        group.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active','no'); });
        btn.classList.add('active');
        if (btn.dataset.v === 'no') btn.classList.add('no');
        answers[q] = btn.dataset.v;
    }

    function calculate(){
        var incVal = document.getElementById('incDate').value;
        if (!incVal){ alert('Please enter the date of incorporation.'); return; }
        var inc = new Date(incVal + 'T00:00:00');
        var winStart = new Date('2016-04-01T00:00:00');
        var winEnd = new Date('2030-04-01T00:00:00'); // before 1 Apr 2030
        var incOk = (inc >= winStart && inc < winEnd);

        var checks = [
            { ok: answers.entity === 'yes', pass: 'Entity is a Private Limited Company or LLP', fail: 'Entity is not a Pvt Ltd / LLP (OPC, firm or proprietorship) — not eligible for 80-IAC' },
            { ok: incOk, pass: 'Incorporated on/after 1 Apr 2016 and before 1 Apr 2030', fail: 'Incorporation date is outside the 1 Apr 2016 – before 1 Apr 2030 window' },
            { ok: answers.dpiit === 'yes', pass: 'Holds valid DPIIT recognition', fail: 'No valid DPIIT recognition' },
            { ok: answers.imb === 'yes', pass: 'Holds the Section 80-IAC IMB certificate', fail: 'No Section 80-IAC IMB certificate — DPIIT alone is not enough' },
            { ok: answers.turnover === 'yes', pass: 'Turnover ≤ ₹100 crore every year since incorporation', fail: 'Turnover exceeded ₹100 crore in some year — eligibility lost' },
            { ok: answers.recon === 'yes', pass: 'Not formed by splitting up / reconstruction', fail: 'Formed by splitting up or reconstruction — excluded' }
        ];

        var allOk = checks.every(function(c){ return c.ok; });
        var firstFail = checks.find(function(c){ return !c.ok; });

        var v = document.getElementById('verdict');
        var icon = document.getElementById('verdictIcon');
        var title = document.getElementById('verdictTitle');
        var text = document.getElementById('verdictText');

        if (allOk){
            v.className = 'verdict eligible';
            icon.textContent = '✓';
            title.textContent = 'Eligible for Section 192(1C) deferral';
            text.innerHTML = 'This startup appears to be an eligible startup under Section 80-IAC, so its employees can defer ESOP TDS. The deferred tax falls due within 14 days of the earliest of 48 months from the end of the assessment year of allotment, sale of shares, or cessation of employment (60 months for allotments on/after 1 Apr 2026).';
        } else {
            v.className = 'verdict not-eligible';
            icon.textContent = '✕';
            title.textContent = 'Not eligible for the deferral';
            text.innerHTML = 'Based on your answers, the Section 192(1C) deferral is not available. Failing condition: <strong>' + firstFail.fail + '</strong>. Normal Section 192 TDS applies at exercise.';
        }

        var rows = '';
        checks.forEach(function(c){
            rows += '<div class="check-row"><span class="check-mark ' + (c.ok ? 'pass">✓' : 'fail">✕') + '</span><span class="check-text">' + (c.ok ? c.pass : '<strong>' + c.fail + '</strong>') + '</span></div>';
        });
        document.getElementById('checklist').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        answers = { entity:'yes', dpiit:'yes', imb:'yes', turnover:'yes', recon:'yes' };
        document.querySelectorAll('.toggle-group').forEach(function(g){
            g.querySelectorAll('.toggle-btn').forEach(function(b,i){ b.classList.toggle('active', i===0); b.classList.remove('no'); });
        });
        document.getElementById('incDate').value = '';
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
