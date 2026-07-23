@extends('layouts.app')
<title>Company Name Search | MCA Rule 8 Name Availability</title>
<meta name="description" content="Free company name search: test a company or LLP name against MCA Rule 8 / 8A for suffix, prohibited words and similarity, then check live on MCA & IPIndia.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/company-name-search">
@section('meta')
<meta property="og:title" content="Company Name Search — MCA Rule 8 Name Checker 2026">
<meta property="og:description" content="Test a proposed company or LLP name against MCA Rule 8 / 8A naming guidelines, then run the live availability check on the official MCA and IPIndia portals.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/company-name-search">
<meta property="og:image" content="/tools/company-name-search-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Company Name Search — MCA Rule 8 Name Checker 2026">
<meta name="twitter:description" content="Test a proposed company name against MCA Rule 8 / 8A naming rules, then check live on MCA & IPIndia. Free & instant.">
<meta name="twitter:image" content="/tools/company-name-search-og.png">
@endsection
@section('schema')
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Company Name Search",
  "description": "Company Name Search is a name-compliance checker that tests a proposed company or LLP name against the MCA naming guidelines in Rule 8 and Rule 8A of the Companies (Incorporation) Rules, 2014, and Section 4(2) of the Companies Act, 2013. It checks for the mandatory entity suffix, restricted or prohibited words needing Central Government approval, names that are only a country or place, offensive content, and minor variations that do not create distinctiveness, then returns a rule-by-rule checklist. It cannot confirm live availability, so it links the user to the official MCA name-search, RUN and SPICe Plus services and the IPIndia trademark search for the binding check.",
  "url": "/tools/company-name-search",
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
    {"@type": "ListItem", "position": 3, "name": "Company Name Search", "item": "/tools/company-name-search"}
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
      "name": "Can this tool confirm if a company name is available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. This is a rules checker, not a live registry lookup. It tests your proposed name against the MCA naming guidelines — the mandatory suffix, prohibited words, place-only names and minor-variation traps — so you can fix obvious problems before applying. The binding availability check is done only by the Central Registration Centre when you file. Always confirm against the official MCA name-search and the IPIndia trademark database, which this tool links to, before relying on a name."
      }
    },
    {
      "@type": "Question",
      "name": "How do I actually check company name availability on the MCA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Use the MCA V3 portal. For a new company you reserve the name through SPICe Plus Part A as part of incorporation, or through the RUN service for a standalone reservation; for an LLP you use RUN-LLP. The portal also has a Search Company or LLP Name feature to look for existing entities. A no-match result there does not guarantee approval, because the Registrar additionally checks phonetic similarity and trademarks, but it is the official starting point."
      }
    },
    {
      "@type": "Question",
      "name": "What makes a company name undesirable under Rule 8?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under Rule 8 and Rule 8A of the Companies (Incorporation) Rules, 2014, a name is undesirable if it is identical or too similar to an existing company, LLP or registered trademark, including phonetic resemblance; uses restricted words without approval; suggests connection with the government or an embassy; is offensive; consists only of a country, state or city name; or matches a company dissolved within the last two years. Section 4(2) of the Companies Act also bars misleading names."
      }
    },
    {
      "@type": "Question",
      "name": "Do minor spelling or spacing changes make a name unique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The Registrar ignores differences that do not create real distinctiveness — changes in spelling, spacing, punctuation, letter case, plural forms, word order, articles like The, And or Of, and common add-on words such as India, Global or Enterprises. So Bright Solar and Brite Solar, or Apex India and Apex, are treated as the same. To be distinct, a name needs a genuinely different coined or distinctive element, not a cosmetic tweak."
      }
    },
    {
      "@type": "Question",
      "name": "Which words need special approval in a company name?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Certain words require prior Central Government approval or a regulator's no-objection — for example Bank, Insurance, Stock Exchange, Mutual Fund, National, Federal, Board, Republic, Municipal, and words implying state or government patronage. Words covered by the Emblems and Names (Prevention of Improper Use) Act, 1950 are restricted. This checker flags common restricted words so you know an approval or NOC may be needed, but the list the Registrar applies is broader."
      }
    },
    {
      "@type": "Question",
      "name": "What suffix must a company name end with?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A private company name must end with Private Limited, a public company with Limited, a one person company with OPC Private Limited, and a limited liability partnership with LLP. A Section 8 not-for-profit company is exempt from Limited or Private Limited and instead uses words like Foundation, Forum, Association, Federation or Council. This tool checks that your proposed name carries an appropriate suffix for the entity type you select."
      }
    },
    {
      "@type": "Question",
      "name": "Does the company name need a trademark search too?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. A name that clears the MCA can still infringe a registered trademark, and the Registrar now checks the trademark database during name approval. You should search the IPIndia public trademark database for your proposed brand before committing, and ideally register the trademark after incorporation for full protection. Company name approval and trademark protection are separate processes, and clearing one does not clear the other."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if my proposed name is rejected?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If the Central Registration Centre rejects a name, you typically get one resubmission opportunity to fix minor defects, and the Registrar will consider your second proposed name if the first is refused. If both are denied you must file a fresh application with new names and pay the fee again. Because each rejection costs time and sometimes money, screening the name against the rules first, as this tool helps you do, reduces the chance of rejection."
      }
    },
    {
      "@type": "Question",
      "name": "Are the company name rules changing in 2026?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The MCA issued a public notice in April 2026 proposing to redraft Rule 8, Rule 8A and add a Rule 9A, with a table of factors ignored during similarity checks and a codified list of undesirable names. The public comment window has closed, and the amended rules take effect only on publication in the Official Gazette. The core principles this tool checks — suffix, prohibited words, distinctiveness and trademarks — remain the same in substance, so it stays useful through the change."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Company Name Search tool free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Company Name Search tool is completely free with no signup required. All checks run in your browser and nothing is stored on our servers. It screens your proposed name against the MCA Rule 8 and Rule 8A naming guidelines and gives a rule-by-rule checklist, then links you to the official MCA and IPIndia portals for the live, binding check. It is an indicative screening aid; the final approval is decided by the Registrar."
      }
    }
  ]
}
</script>
@endsection
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

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
        .disclosure { background: #FFFBEB; border: 1px solid var(--accent); border-radius: var(--radius); padding: 12px 16px; margin-bottom: 20px; font-size: 13px; color: #92400E; line-height: 1.55; }
        .disclosure strong { color: #78350F; }
        .field-group-title { font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 22px 0 12px; font-family: var(--font-mono); }
        .q-label { display: block; font-size: 15px; font-weight: 600; color: var(--primary-dark); margin-bottom: 10px; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; }
        .toggle-btn { flex: 1; padding: 10px 10px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 70px; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .form-group { margin-bottom: 4px; }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; }
        .form-group input { width: 100%; padding: 14px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 17px; font-weight: 600; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus { border-color: var(--primary); }
        .field-hint { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 18px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict { border-radius: var(--radius-lg); padding: 20px 24px; margin-bottom: 16px; }
        .verdict.ok { background: #ECFDF5; border: 2px solid var(--success); }
        .verdict.warn { background: #FFFBEB; border: 2px solid var(--accent); }
        .verdict.bad { background: #FEF2F2; border: 2px solid var(--danger); }
        .verdict h3 { font-size: 18px; font-weight: 700; margin-bottom: 6px; }
        .verdict.ok h3 { color: var(--success); }
        .verdict.warn h3 { color: #92400E; }
        .verdict.bad h3 { color: var(--danger); }
        .verdict p { font-size: 14px; color: var(--text-secondary); line-height: 1.6; }
        .verdict .vname { font-family: var(--font-mono); font-weight: 700; color: var(--text); }
        .check-list { background: var(--surface-alt); border-radius: var(--radius); padding: 14px 18px; margin-bottom: 16px; }
        .check-row { display: flex; align-items: flex-start; gap: 10px; padding: 8px 0; font-size: 14px; }
        .check-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .check-mark { flex-shrink: 0; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 700; color: #fff; margin-top: 1px; }
        .check-mark.pass { background: var(--success); }
        .check-mark.warn { background: var(--accent); }
        .check-mark.fail { background: var(--danger); }
        .check-text { color: var(--text-secondary); }
        .check-text strong { color: var(--text); }
        .live-links { display: grid; grid-template-columns: 1fr; gap: 10px; margin-bottom: 8px; }
        @media (min-width: 480px) { .live-links { grid-template-columns: 1fr 1fr; } }
        .live-link { display: block; padding: 14px 16px; border: 2px solid var(--primary); border-radius: var(--radius); text-decoration: none; color: var(--primary); background: var(--card); transition: all 0.2s; }
        .live-link:hover { background: var(--primary); color: #fff; }
        .live-link .ll-title { font-weight: 700; font-size: 14px; margin-bottom: 2px; }
        .live-link .ll-sub { font-size: 12px; opacity: 0.8; }
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
        <a href="#calculator">Name Checker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">What It Checks</a>
        <a href="#rules">Rule 8 Rules</a>
        <a href="#live">Live Check</a>
        <a href="#process">Approval Process</a>
        <a href="#naming-strategy">Naming Tips</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Company Name Search
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Company Name Search — <span>MCA Rule 8 Name Checker</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Name approved or rejected? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Company%20Name%20Search%20tool%20and%20need%20help%20reserving%20a%20company%20name%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Company%20name%20reservation%20/%20incorporation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Company%20Name%20Search%20tool%20and%20would%20like%20help%20reserving%20a%20company%20name%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Proposed%20name%28s%29%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Business%20activity%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Screen a proposed company or LLP name against the <strong>MCA Rule 8 / 8A naming guidelines</strong> before you apply — it checks the <strong>mandatory suffix</strong>, <strong>prohibited/restricted words</strong>, <strong>place-only names</strong>, length and <strong>minor-variation traps</strong>, and returns a rule-by-rule checklist. It <strong>cannot confirm live availability</strong> (no tool can — only the Registrar decides), so it links you straight to the <strong>official MCA name-search/RUN</strong> and the <strong>IPIndia trademark search</strong> for the binding check.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check Your Proposed Name</h2>
            <p class="calc-sub">A rules screen against Rule 8 / 8A — fix obvious issues before filing SPICe+ or RUN.</p>
            <div class="disclosure">
                <strong>Important:</strong> This is a <strong>rules checker, not a live registry lookup</strong>. It cannot confirm whether a name is actually available — only the MCA's Central Registration Centre can, and it also checks phonetic similarity and trademarks. Always verify on the official MCA and IPIndia portals (linked in the result) before relying on a name.
            </div>
            <noscript>
                <div class="noscript-box">
                    This checker requires JavaScript. Please enable JavaScript, or review the Rule 8 / 8A guidelines below and check your name directly on the MCA and IPIndia portals.
                </div>
            </noscript>

            <div class="field-group-title">Entity type</div>
            <div class="toggle-group" id="entityToggle">
                <button type="button" class="toggle-btn active" data-e="private" onclick="pickEntity(this)">Pvt Ltd</button>
                <button type="button" class="toggle-btn" data-e="public" onclick="pickEntity(this)">Public Ltd</button>
                <button type="button" class="toggle-btn" data-e="opc" onclick="pickEntity(this)">OPC</button>
                <button type="button" class="toggle-btn" data-e="llp" onclick="pickEntity(this)">LLP</button>
                <button type="button" class="toggle-btn" data-e="section8" onclick="pickEntity(this)">Section 8</button>
            </div>

            <div class="field-group-title">Proposed name</div>
            <div class="form-group">
                <label for="nameInput">Full proposed name (incl. suffix)</label>
                <input type="text" id="nameInput" placeholder="e.g. Brightpath Technologies Private Limited" autocomplete="off">
                <div class="field-hint">Type the complete name as you'd file it.</div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Check Against Rule 8</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="verdict" id="verdict"></div>
                <div class="check-list" id="checkList"></div>
                <div class="field-group-title">Run the live, binding check</div>
                <div class="live-links">
                    <a class="live-link" href="https://www.mca.gov.in/content/mca/global/en/mca/master-data/MDS.html" target="_blank" rel="noopener"><div class="ll-title">MCA Name Search →</div><div class="ll-sub">Search existing companies / LLPs</div></a>
                    <a class="live-link" href="https://www.mca.gov.in/" target="_blank" rel="noopener"><div class="ll-title">MCA V3 — RUN / SPICe+ →</div><div class="ll-sub">Reserve the name officially</div></a>
                    <a class="live-link" href="https://tmrsearch.ipindia.gov.in/tmrpublicsearch/" target="_blank" rel="noopener"><div class="ll-title">IPIndia Trademark Search →</div><div class="ll-sub">Check trademark conflicts</div></a>
                    <a class="live-link" href="/trademark-search-report" target="_blank" rel="noopener"><div class="ll-title">Get a Trademark Search →</div><div class="ll-sub">Professional clearance report</div></a>
                </div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want this name reserved and the company incorporated?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant runs the MCA name search, files RUN / SPICe+ Part A, and handles the full incorporation plus trademark clearance.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Company%20Name%20Search%20tool%20and%20need%20help%20reserving%20a%20company%20name%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Company%20name%20reservation%20/%20incorporation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Company%20Name%20Search%20tool%20and%20would%20like%20help%20reserving%20a%20company%20name%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Proposed%20name%28s%29%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Business%20activity%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Check Another Name</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Name Checker</h2>
            <ol>
                <li><strong>Pick the entity type</strong> — the required suffix differs (Private Limited, Limited, OPC Private Limited, LLP, or a Section 8 word like Foundation).</li>
                <li><strong>Type the full proposed name</strong> exactly as you'd file it, including the suffix.</li>
                <li><strong>Click Check</strong> for a rule-by-rule screen: suffix, restricted words, place-only name, length and distinctiveness reminders.</li>
                <li><strong>Use the live links</strong> to run the binding check on the MCA name-search/RUN and the IPIndia trademark database before you commit.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> Search the distinctive part in pieces — for "Blue Ocean Logistics" search "Blue Ocean" and "Ocean Logistics" separately on MCA — it catches indirect conflicts a single full-string search hides.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What This Tool Checks — and What It Can't</h2>
            <p>This is an <strong>honest screening aid</strong>. A single-file web tool has no access to live MCA or trademark databases, so it <strong>cannot tell you a name is available</strong>. What it <em>can</em> do is catch the common reasons names get rejected, before you spend a fee and a few days finding out the hard way:</p>
            <ul>
                <li>Missing or wrong <strong>entity suffix</strong>;</li>
                <li><strong>Restricted/prohibited words</strong> that need Central Government approval or an NOC;</li>
                <li>Names that are <strong>only a place</strong> (country/state/city);</li>
                <li>Blank, too-short or obviously problematic input;</li>
                <li>Reminders about <strong>distinctiveness</strong> and <strong>trademark</strong> collisions.</li>
            </ul>
            <p>The binding decision rests with the MCA's Central Registration Centre. Patron's guide on <a href="/blog/company-name-rules">MCA company name rules</a> explains the full picture.</p>
        </section>

        <section class="content-section" id="rules">
            <h2>Rule 8 / 8A — When a Name Is "Undesirable"</h2>
            <p>Under <strong>Section 4(2) of the Companies Act 2013</strong> and <strong>Rule 8 / 8A of the Companies (Incorporation) Rules 2014</strong>, a name is rejected if it:</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Trap</th><th>Why it fails</th></tr>
                </thead>
                <tbody>
                    <tr><td>Identical / too similar</td><td>Matches an existing company, LLP or registered trademark — including phonetic resemblance.</td></tr>
                    <tr><td>Minor variation only</td><td>Spelling, spacing, plurals, punctuation, case, word order, "The/And/Of", "India/Global/Enterprises" are ignored — they don't create distinctiveness.</td></tr>
                    <tr><td>Restricted words</td><td>Bank, Insurance, Stock Exchange, National, Federal, Board, Republic, Municipal etc. need Central Govt approval / regulator NOC.</td></tr>
                    <tr><td>Government / embassy patronage</td><td>Implying state connection or an embassy breaches the Emblems & Names Act 1950.</td></tr>
                    <tr><td>Place-only name</td><td>A name that is only a country, continent, state or city.</td></tr>
                    <tr><td>Offensive / misleading</td><td>Obscene content, or a name giving a false impression of activities.</td></tr>
                    <tr><td>Recently dissolved</td><td>Matches a company dissolved/liquidated within the last two years.</td></tr>
                </tbody>
            </table>
            <p>The redrafted 2026 Rule 8 lists 12 factors that are <em>ignored</em> when comparing names — which is exactly why cosmetic tweaks don't help. See the <a href="/blog/company-name-rules-mca-guidelines-for-name-selection">MCA name-selection guidelines</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Company Name Reservation & Incorporation?</h3>
            <p>Patron Accounting LLP supports founders reserving a company or LLP name and incorporating — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Company%20Name%20Search%20tool%20and%20need%20help%20reserving%20a%20company%20name%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Company%20name%20reservation%20/%20incorporation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Company%20Name%20Search%20tool%20and%20would%20like%20help%20reserving%20a%20company%20name%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Proposed%20name%28s%29%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Business%20activity%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="live">
            <h2>How to Run the Real, Binding Check</h2>
            <p>Once your name passes the rules screen, confirm it on the official portals:</p>
            <ul>
                <li><strong>MCA V3 "Search Company / LLP Name"</strong> — look for existing entities; search the distinctive parts separately, not the full string.</li>
                <li><strong>RUN / SPICe+ Part A</strong> — reserve the name. SPICe+ Part A is built into incorporation (no separate fee, ~1–3 days); RUN is a standalone reservation (₹1,000 company / ₹200 LLP, ~2–5 days).</li>
                <li><strong>IPIndia public trademark search</strong> — a name can clear the MCA yet still infringe a trademark; the Registrar now checks this too.</li>
            </ul>
            <p>A "no match" on the basic MCA search <strong>does not guarantee approval</strong> — the ROC's deeper phonetic and trademark review can still reject it. For a professional clearance, see Patron's <a href="/trademark-search-report">trademark search report</a> and <a href="/trademark-registration">trademark registration</a>.</p>
        </section>

        <section class="content-section" id="process">
            <h2>The Name Approval Process</h2>
            <p>Name approval runs through the MCA's Central Registration Centre. You may propose names via <strong>SPICe+ Part A</strong> (within incorporation) or <strong>RUN</strong>. If the first name is refused the Registrar considers your second; minor defects usually get <strong>one resubmission</strong>, but if both names fail you re-file and pay again. An approved name is then carried into <strong>SPICe+ Part B</strong> for incorporation, and must be used within its validity window. See Patron's <a href="/blog/form-spice-complete-guide-to-company-incorporation-in-india">SPICe+ incorporation guide</a>.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool is an indicative screen. The restricted-word and similarity lists the Registrar applies are broader than any client-side check, and the 2026 rule amendments take effect on Gazette notification — confirm the current position with a professional.</p>
            </div>
        </section>

        <section class="content-section" id="naming-strategy">
            <h2>Choosing a Name That Actually Clears</h2>
            <p>The single biggest reason names fail is a lack of genuine distinctiveness. Because the Registrar ignores cosmetic differences, the safest names are built around a <strong>coined or arbitrary word</strong> — an invented term, or a real word used in an unrelated context — rather than a descriptive phrase every competitor also wants. "Zomato" or "Razorpay" clear easily; "India Online Food Delivery Services" does not, because each element is generic and likely already taken in some combination.</p>
            <p>A practical sequence works best. First, shortlist two or three distinctive candidates. Second, search each distinctive element separately on the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> name database and the <a href="https://www.ipindia.gov.in/" target="_blank" rel="noopener">IPIndia</a> trademark register. Third, if you plan to claim startup benefits, remember that <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> recognition through the <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> portal and downstream incentives attach to the registered entity, and the entity's PAN and tax registrations on the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax portal</a> will carry the approved name — so getting the name right the first time avoids re-paperwork later. Keep a second choice ready, since the Registrar evaluates your alternate if the first is refused.</p>
            <p>It also helps to align the name with your <strong>main objects</strong>. A name implying finance, education or healthcare activities invites closer scrutiny and sometimes a sectoral NOC, so the name and the proposed business activity should tell a consistent story to the Central Registration Centre.</p>
            <div class="callout">
                <p><strong>Tip:</strong> Picking a structure first makes the suffix obvious and the search cleaner — the <a href="/tools/entity-type-selector">entity type selector</a> can help you decide between Pvt Ltd, LLP, OPC and the rest.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can this tool confirm if a company name is available?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. This is a rules checker, not a live registry lookup. It tests your proposed name against the MCA naming guidelines — the mandatory suffix, prohibited words, place-only names and minor-variation traps — so you can fix obvious problems before applying. The binding availability check is done only by the Central Registration Centre when you file. Always confirm against the official MCA name-search and the IPIndia trademark database, which this tool links to, before relying on a name.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I actually check company name availability on the MCA?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Use the MCA V3 portal. For a new company you reserve the name through SPICe Plus Part A as part of incorporation, or through the RUN service for a standalone reservation; for an LLP you use RUN-LLP. The portal also has a Search Company or LLP Name feature to look for existing entities. A no-match result there does not guarantee approval, because the Registrar additionally checks phonetic similarity and trademarks, but it is the official starting point.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What makes a company name undesirable under Rule 8?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Rule 8 and Rule 8A of the Companies (Incorporation) Rules, 2014, a name is undesirable if it is identical or too similar to an existing company, LLP or registered trademark, including phonetic resemblance; uses restricted words without approval; suggests connection with the government or an embassy; is offensive; consists only of a country, state or city name; or matches a company dissolved within the last two years. Section 4(2) of the Companies Act also bars misleading names.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Do minor spelling or spacing changes make a name unique?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The Registrar ignores differences that do not create real distinctiveness — changes in spelling, spacing, punctuation, letter case, plural forms, word order, articles like The, And or Of, and common add-on words such as India, Global or Enterprises. So Bright Solar and Brite Solar, or Apex India and Apex, are treated as the same. To be distinct, a name needs a genuinely different coined or distinctive element, not a cosmetic tweak.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which words need special approval in a company name?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Certain words require prior Central Government approval or a regulator's no-objection — for example Bank, Insurance, Stock Exchange, Mutual Fund, National, Federal, Board, Republic, Municipal, and words implying state or government patronage. Words covered by the Emblems and Names (Prevention of Improper Use) Act, 1950 are restricted. This checker flags common restricted words so you know an approval or NOC may be needed, but the list the Registrar applies is broader.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What suffix must a company name end with?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A private company name must end with Private Limited, a public company with Limited, a one person company with OPC Private Limited, and a limited liability partnership with LLP. A Section 8 not-for-profit company is exempt from Limited or Private Limited and instead uses words like Foundation, Forum, Association, Federation or Council. This tool checks that your proposed name carries an appropriate suffix for the entity type you select.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does the company name need a trademark search too?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. A name that clears the MCA can still infringe a registered trademark, and the Registrar now checks the trademark database during name approval. You should search the IPIndia public trademark database for your proposed brand before committing, and ideally register the trademark after incorporation for full protection. Company name approval and trademark protection are separate processes, and clearing one does not clear the other.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What happens if my proposed name is rejected?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If the Central Registration Centre rejects a name, you typically get one resubmission opportunity to fix minor defects, and the Registrar will consider your second proposed name if the first is refused. If both are denied you must file a fresh application with new names and pay the fee again. Because each rejection costs time and sometimes money, screening the name against the rules first, as this tool helps you do, reduces the chance of rejection.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Are the company name rules changing in 2026?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The MCA issued a public notice in April 2026 proposing to redraft Rule 8, Rule 8A and add a Rule 9A, with a table of factors ignored during similarity checks and a codified list of undesirable names. The public comment window has closed, and the amended rules take effect only on publication in the Official Gazette. The core principles this tool checks — suffix, prohibited words, distinctiveness and trademarks — remain the same in substance, so it stays useful through the change.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Company Name Search tool free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Company Name Search tool is completely free with no signup required. All checks run in your browser and nothing is stored on our servers. It screens your proposed name against the MCA Rule 8 and Rule 8A naming guidelines and gives a rule-by-rule checklist, then links you to the official MCA and IPIndia portals for the live, binding check. It is an indicative screening aid; the final approval is decided by the Registrar.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Name Reservation & Incorporation</h3>
            <p>MCA name search, RUN / SPICe+ filing, full incorporation and trademark clearance — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Company%20Name%20Search%20tool%20and%20need%20help%20reserving%20a%20company%20name%20and%20incorporating.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Company%20name%20reservation%20/%20incorporation%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Company%20Name%20Search%20tool%20and%20would%20like%20help%20reserving%20a%20company%20name%20and%20incorporating.%0A%0AMy%20details%3A%0A-%20Proposed%20name%28s%29%3A%0A-%20Entity%20type%20%28Pvt%20Ltd%20/%20LLP%20/%20OPC%20/%20Section%208%29%3A%0A-%20Business%20activity%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/entity-type-selector" class="sidebar-link">Entity Type Selector <span class="arrow">→</span></a>
            <a href="/tools/india-entity-vs-eor-comparison" class="sidebar-link">Entity vs EOR Comparison <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Registration & Trademark</h3>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Pvt Ltd Registration <span class="arrow">→</span></a>
            <a href="/llp-incorporation" class="sidebar-link">LLP Registration <span class="arrow">→</span></a>
            <a href="/trademark-search-report" class="sidebar-link">Trademark Search <span class="arrow">→</span></a>
            <a href="/trademark-registration" class="sidebar-link">Trademark Registration <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/company-name-rules-mca-guidelines-for-name-selection" class="sidebar-link">MCA Name Selection Rules <span class="arrow">→</span></a>
            <a href="/blog/form-spice-complete-guide-to-company-incorporation-in-india" class="sidebar-link">SPICe+ Incorporation Guide <span class="arrow">→</span></a>
            <a href="/blog/company-name-change-procedure-complete-mca-process-documents-and-compliance" class="sidebar-link">Company Name Change <span class="arrow">→</span></a>
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

    var SUFFIXES = {
        private: { needles: ['private limited', 'pvt ltd', 'pvt. ltd', 'pvt limited'], label: 'Private Limited' },
        public: { needles: ['limited', 'ltd'], label: 'Limited' },
        opc: { needles: ['opc private limited', '(opc) private limited', 'opc pvt ltd'], label: 'OPC Private Limited' },
        llp: { needles: ['llp', 'limited liability partnership'], label: 'LLP' },
        section8: { needles: ['foundation', 'forum', 'association', 'federation', 'council', 'chamber', 'institute', 'society'], label: 'a Section 8 word (Foundation, Forum, Association, etc.)' }
    };

    var RESTRICTED = ['bank','banking','insurance','stock exchange','mutual fund','national','federal','board','republic','municipal','panchayat','president','prime minister','reserve bank','sebi','rbi','venture capital','asset management','nidhi','financial','udyog','development authority'];
    var PLACES = ['india','bharat','america','usa','china','japan','asia','europe','africa','delhi','mumbai','chennai','kolkata','bangalore','bengaluru','pune','hyderabad','gujarat','maharashtra','punjab','kerala','rajasthan'];

    function pickEntity(btn){
        entity = btn.dataset.e;
        document.querySelectorAll('#entityToggle .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        document.getElementById('resultSection').classList.remove('visible');
    }

    function calculate(){
        var raw = (document.getElementById('nameInput').value || '').trim();
        if (!raw){ alert('Please enter a proposed name.'); return; }
        var lower = raw.toLowerCase();
        var checks = [];

        // 1. Suffix check
        var suf = SUFFIXES[entity];
        var hasSuffix = suf.needles.some(function(n){ return lower.indexOf(n) !== -1; });
        checks.push({ ok: hasSuffix ? 'pass' : 'fail',
            pass: 'Ends with an appropriate suffix (' + suf.label + ')',
            msg: hasSuffix ? 'Carries a valid suffix for this entity type.' : 'Missing the required suffix — add ' + suf.label + '.' });

        // 2. Distinctive word count (strip suffix words + articles)
        var stripped = lower;
        suf.needles.forEach(function(n){ stripped = stripped.split(n).join(' '); });
        ['the','and','of','for','a','an','private','limited','ltd','llp','&'].forEach(function(w){ stripped = stripped.replace(new RegExp('\\b'+w+'\\b','g'),' '); });
        var coreWords = stripped.split(/[^a-z0-9]+/).filter(function(w){ return w.length > 1; });
        var distinct = coreWords.length;
        checks.push({ ok: distinct >= 1 ? 'pass' : 'fail',
            pass: 'Has a distinctive element beyond suffix/generic words',
            msg: distinct >= 1 ? 'Found a distinctive component to anchor the name.' : 'No distinctive word — a name cannot be only generic/suffix words.' });

        // 3. Restricted words
        var hitRestricted = RESTRICTED.filter(function(w){ return new RegExp('\\b'+w+'\\b').test(lower); });
        checks.push({ ok: hitRestricted.length ? 'warn' : 'pass',
            pass: 'No restricted words detected',
            msg: hitRestricted.length ? 'Contains restricted word(s): "' + hitRestricted.join('", "') + '". This needs Central Govt approval or a regulator NOC.' : 'No common restricted words found (the Registrar\u2019s list is broader).' });

        // 4. Place-only name
        var placeOnly = coreWords.length > 0 && coreWords.every(function(w){ return PLACES.indexOf(w) !== -1; });
        checks.push({ ok: placeOnly ? 'fail' : 'pass',
            pass: 'Not just a place name',
            msg: placeOnly ? 'The name appears to consist only of a place — not allowed under Rule 8A.' : 'Not solely a country/state/city name.' });

        // 5. Length / sanity
        var lenOk = raw.length >= 4 && raw.length <= 120;
        checks.push({ ok: lenOk ? 'pass' : 'warn',
            pass: 'Reasonable length',
            msg: lenOk ? 'Length looks reasonable.' : 'Very short or very long names are more likely to face queries.' });

        // 6. Distinctiveness reminder (always a warn-style advisory)
        checks.push({ ok: 'warn',
            pass: 'Distinctiveness & similarity',
            msg: 'Minor tweaks (spelling, spacing, plural, "India/Global") do NOT make a name distinct. The Registrar checks phonetic similarity to existing names \u2014 verify on MCA.' });

        // 7. Trademark reminder
        checks.push({ ok: 'warn',
            pass: 'Trademark check needed',
            msg: 'Even if the MCA clears it, the name may infringe a registered trademark. Search IPIndia before committing.' });

        // verdict
        var hasFail = checks.some(function(c){ return c.ok === 'fail'; });
        var hasWarn = checks.some(function(c){ return c.ok === 'warn'; });
        var v = document.getElementById('verdict');
        if (hasFail){
            v.className = 'verdict bad';
            v.innerHTML = '<h3>\u2715 Likely to be rejected as-is</h3><p>The name <span class="vname">' + escapeHtml(raw) + '</span> fails one or more hard rules below. Fix those before applying.</p>';
        } else if (hasWarn){
            v.className = 'verdict warn';
            v.innerHTML = '<h3>\u26A0 Passes basic rules \u2014 verify further</h3><p><span class="vname">' + escapeHtml(raw) + '</span> clears the hard checks, but note the advisories below and <strong>confirm live availability on MCA + IPIndia</strong>.</p>';
        } else {
            v.className = 'verdict ok';
            v.innerHTML = '<h3>\u2713 Clears the basic rules screen</h3><p><span class="vname">' + escapeHtml(raw) + '</span> passes these checks. This does <strong>not</strong> confirm availability \u2014 run the live MCA & IPIndia checks below.</p>';
        }

        var rows = '';
        checks.forEach(function(c){
            var cls = c.ok === 'pass' ? 'pass' : (c.ok === 'warn' ? 'warn' : 'fail');
            var icon = c.ok === 'pass' ? '\u2713' : (c.ok === 'warn' ? '!' : '\u2715');
            rows += '<div class="check-row"><span class="check-mark ' + cls + '">' + icon + '</span><span class="check-text"><strong>' + c.pass + '</strong><br>' + c.msg + '</span></div>';
        });
        document.getElementById('checkList').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function escapeHtml(s){ return s.replace(/[&<>"']/g, function(c){ return {'&':'&','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]; }); }

    function resetCalc(){
        document.getElementById('nameInput').value = '';
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('nameInput').addEventListener('keydown', function(e){ if (e.key === 'Enter') calculate(); });

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
