@extends('layouts.app')
<title>Business Structure Selector India | Pvt Ltd, LLP or OPC</title>
<meta name="description" content="Free entity type selector for India. Answer 5 questions to get the best business structure ranked for you: Pvt Ltd, LLP, OPC, Partnership or Proprietorship.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/entity-type-selector">

@section('meta')

<meta property="og:title" content="Entity Type Selector — Best Business Structure India 2026">
<meta property="og:description" content="Answer five quick questions and get a ranked recommendation of the best Indian business structure — Private Limited, LLP, OPC, Partnership or Proprietorship.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/entity-type-selector">
<meta property="og:image" content="/tools/entity-type-selector-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Entity Type Selector — Best Business Structure India 2026">
<meta name="twitter:description" content="Answer 5 questions and get a ranked recommendation of the best Indian business structure for you. Free &amp; instant.">
<meta name="twitter:image" content="/tools/entity-type-selector-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Entity Type Selector",
  "description": "Entity Type Selector recommends the most suitable Indian business structure from a founder's answers to five questions about the number of owners, fundraising plans, the need for limited liability, the appetite for compliance, and the priority on credibility and scale. It scores Private Limited Company, Limited Liability Partnership, One Person Company, Partnership Firm and Sole Proprietorship against the answers and returns a ranked recommendation with the best fit highlighted, along with a comparison of tax, compliance, ownership and funding suitability.",
  "url": "/tools/entity-type-selector",
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
    {"@type": "ListItem", "position": 3, "name": "Entity Type Selector", "item": "/tools/entity-type-selector"}
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
      "name": "Which business structure is best in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There is no single best structure; it depends on your situation. A Private Limited Company suits startups planning to raise funding and issue ESOPs. An LLP suits multi-founder professional or service firms wanting limited liability with lighter compliance. A One Person Company suits a solo founder wanting a corporate structure. A Partnership or Sole Proprietorship suits small, self-funded businesses prioritising simplicity over liability protection. This selector ranks them against your answers."
      }
    },
    {
      "@type": "Question",
      "name": "How does the entity type selector decide?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It scores each structure against five factors: how many owners you have, whether you plan to raise external funding, how important limited liability is, your appetite for compliance, and how much you value credibility and scale. Each answer adds or removes points for the structures it favours, and the tool ranks them, highlighting the best fit. It is a guide to narrow the choice, not a substitute for tailored professional advice."
      }
    },
    {
      "@type": "Question",
      "name": "When should I choose a Private Limited Company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Choose a Private Limited Company if you plan to raise venture capital or angel funding, issue ESOPs, or build a scalable, high-credibility business. It is registered under the Companies Act 2013 with two to two hundred shareholders, offers limited liability and 100 percent FDI under the automatic route, and is the structure investors expect. The trade-off is the highest compliance: board meetings, an AGM, annual ROC filings and a mandatory statutory audit regardless of turnover."
      }
    },
    {
      "@type": "Question",
      "name": "When is an LLP the better choice?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An LLP suits multi-founder professional and service firms — consultants, chartered accountants, architects, agencies — that want limited liability without the heavy compliance of a company. Under the LLP Act 2008 the key annual filings are Form 8 and Form 11, audit is required only if turnover exceeds 40 lakh rupees or contribution exceeds 25 lakh rupees, and there are no mandatory board or general meetings. Profit withdrawal is more tax-efficient, but LLPs are less suited to equity fundraising."
      }
    },
    {
      "@type": "Question",
      "name": "Is an OPC good for a solo founder?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A One Person Company lets a single founder run a corporate entity with limited liability and better credibility than a proprietorship, under the Companies Act 2013. Since 2021 any Indian citizen, resident or not, can form one. The trade-offs are compliance similar to a Private Limited Company, only one shareholder so fundraising is limited, and mandatory conversion to a Private Limited Company if turnover crosses 2 crore rupees or paid-up capital crosses 50 lakh rupees."
      }
    },
    {
      "@type": "Question",
      "name": "What about a Partnership Firm or Sole Proprietorship?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Partnership Firm and a Sole Proprietorship are the simplest and cheapest to start and run, with minimal regulatory compliance largely outside the MCA framework. The major drawback is unlimited liability, meaning the owners' personal assets are at risk, and lower credibility with banks, investors and large clients. They suit small, self-funded, low-risk businesses; as risk or scale grows, converting to an LLP or company is common."
      }
    },
    {
      "@type": "Question",
      "name": "How are the different structures taxed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Private Limited Company and an OPC are taxed as domestic companies, commonly at the concessional 22 percent rate plus surcharge and cess where conditions are met. An LLP and a Partnership Firm are taxed at 30 percent plus surcharge and cess, though partner remuneration and interest are deductible and profit withdrawal is tax-free in the partners' hands. A Sole Proprietorship is taxed at the individual's slab rate as part of personal income."
      }
    },
    {
      "@type": "Question",
      "name": "Can I change my structure later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Businesses routinely convert as they grow — a Partnership to an LLP, an LLP to a Private Limited Company, or an OPC to a Private Limited Company, for example. Conversion involves MCA filings and some cost, and continuity of contracts, registrations and tax history needs care. It is often cleaner to pick a structure that fits the next two to three years rather than converting too soon, which is why matching the structure to your funding and scale plans matters."
      }
    },
    {
      "@type": "Question",
      "name": "Does the selector account for fundraising plans?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Fundraising intent is one of the strongest factors. If you plan to raise venture capital or angel investment or to issue ESOPs, the selector weights heavily toward a Private Limited Company, because investors expect transferable shares and a clean equity structure. If you are self-funded or bootstrapped, the selector gives more weight to lighter structures like an LLP, OPC or proprietorship that reduce compliance cost."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Entity Type Selector free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting Entity Type Selector is completely free with no signup required. All logic runs in your browser and nothing is stored on our servers. It scores Private Limited, LLP, OPC, Partnership and Proprietorship against your answers and returns a ranked recommendation with a comparison. It is an indicative guide to narrow your options; the final choice should be confirmed with a professional who can weigh your specific facts."
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
        .q-block { margin-bottom: 20px; padding-bottom: 18px; border-bottom: 1px dashed var(--border); }
        .q-block:last-of-type { border-bottom: none; }
        .q-label { display: block; font-size: 15px; font-weight: 600; color: var(--primary-dark); margin-bottom: 12px; }
        .q-label .q-num { font-family: var(--font-mono); color: var(--accent); margin-right: 8px; }
        .opt-group { display: flex; flex-direction: column; gap: 8px; }
        @media (min-width: 560px) { .opt-group.row { flex-direction: row; flex-wrap: wrap; } .opt-group.row .opt-btn { flex: 1; min-width: 120px; } }
        .opt-btn { padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); background: var(--surface); color: var(--text-secondary); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; text-align: left; -webkit-tap-highlight-color: transparent; }
        .opt-btn * { pointer-events: none; }
        .opt-btn:hover { border-color: var(--primary-light); }
        .opt-btn.active { border-color: var(--primary); background: var(--primary); color: #fff; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 12px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .winner-card { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 24px; text-align: center; margin-bottom: 16px; }
        .winner-card .wc-label { font-family: var(--font-mono); font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: var(--accent-light); margin-bottom: 6px; }
        .winner-card .wc-name { font-size: 26px; font-weight: 700; margin-bottom: 8px; }
        .winner-card .wc-why { font-size: 14px; color: rgba(255,255,255,0.85); line-height: 1.6; }
        .winner-card .wc-cta { display: inline-block; margin-top: 14px; padding: 10px 22px; background: var(--accent); color: var(--primary-dark); font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; }
        .rank-list { display: flex; flex-direction: column; gap: 8px; }
        .rank-row { display: flex; align-items: center; gap: 12px; padding: 12px 16px; background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); }
        .rank-pos { flex-shrink: 0; width: 28px; height: 28px; border-radius: 50%; background: var(--surface-alt); color: var(--text-muted); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; font-family: var(--font-mono); }
        .rank-row.top .rank-pos { background: var(--primary); color: #fff; }
        .rank-name { flex: 1; font-weight: 600; font-size: 14px; color: var(--text); }
        .rank-bar-wrap { flex: 1.4; height: 8px; background: var(--surface-alt); border-radius: 4px; overflow: hidden; }
        .rank-bar { height: 100%; background: var(--primary-light); border-radius: 4px; transition: width 0.6s ease; }
        .rank-row.top .rank-bar { background: var(--accent); }
        .rank-score { flex-shrink: 0; font-family: var(--font-mono); font-weight: 700; font-size: 13px; color: var(--text-muted); width: 38px; text-align: right; }
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
        <a href="#calculator">Selector</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#how-it-works">How It Scores</a>
        <a href="#compare">Compare</a>
        <a href="#choose">Quick Guide</a>
        <a href="#startup-benefits">Startup Perks</a>
        <a href="#convert">Converting Later</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Entity Type Selector
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Entity Type Selector — <span>Best Business Structure</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Not sure which structure? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Entity%20Type%20Selector%20and%20need%20help%20choosing%20and%20registering%20a%20business%20structure.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Entity%20type%20selection%20/%20registration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Entity%20Type%20Selector%20and%20would%20like%20help%20choosing%20and%20registering%20a%20business%20structure.%0A%0AMy%20details%3A%0A-%20Number%20of%20owners%3A%0A-%20Funding%20plans%20%28yes%20/%20maybe%20/%20no%29%3A%0A-%20Recommended%20structure%20from%20the%20tool%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Answer <strong>five quick questions</strong> — number of owners, funding plans, liability concern, compliance appetite, and priority on credibility/scale — and the tool <strong>ranks</strong> the five Indian structures: <strong>Private Limited, LLP, OPC, Partnership, Sole Proprietorship</strong>. It highlights the best fit and links to its registration page. Rule of thumb: <strong>Pvt Ltd</strong> for funding/ESOPs, <strong>LLP</strong> for professional multi-founder firms, <strong>OPC</strong> for solo founders wanting a company, <strong>Partnership/Proprietorship</strong> for simple, self-funded ventures.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Find Your Best Entity Type</h2>
            <p class="calc-sub">Pick the option that fits best for each question. The ranking updates from your answers.</p>
            <noscript>
                <div class="noscript-box">
                    This selector requires JavaScript. Please enable JavaScript, or use the comparison table below to choose manually.
                </div>
            </noscript>

            <div class="q-block">
                <label class="q-label"><span class="q-num">1</span>How many owners will the business have?</label>
                <div class="opt-group" data-q="owners">
                    <button type="button" class="opt-btn active" data-v="one" onclick="pick(this)">Just me (1)</button>
                    <button type="button" class="opt-btn" data-v="few" onclick="pick(this)">2–7 co-founders</button>
                    <button type="button" class="opt-btn" data-v="many" onclick="pick(this)">Many / will grow large</button>
                </div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">2</span>Do you plan to raise external funding or issue ESOPs?</label>
                <div class="opt-group" data-q="funding">
                    <button type="button" class="opt-btn active" data-v="yes" onclick="pick(this)">Yes — VC / angel / ESOPs</button>
                    <button type="button" class="opt-btn" data-v="maybe" onclick="pick(this)">Maybe, later</button>
                    <button type="button" class="opt-btn" data-v="no" onclick="pick(this)">No — self-funded</button>
                </div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">3</span>How important is limited liability (protecting personal assets)?</label>
                <div class="opt-group row" data-q="liability">
                    <button type="button" class="opt-btn active" data-v="high" onclick="pick(this)">Essential</button>
                    <button type="button" class="opt-btn" data-v="med" onclick="pick(this)">Nice to have</button>
                    <button type="button" class="opt-btn" data-v="low" onclick="pick(this)">Not a concern</button>
                </div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">4</span>What's your appetite for compliance &amp; paperwork?</label>
                <div class="opt-group row" data-q="compliance">
                    <button type="button" class="opt-btn active" data-v="high" onclick="pick(this)">Fine with full compliance</button>
                    <button type="button" class="opt-btn" data-v="med" onclick="pick(this)">Moderate</button>
                    <button type="button" class="opt-btn" data-v="low" onclick="pick(this)">Keep it minimal</button>
                </div>
            </div>

            <div class="q-block">
                <label class="q-label"><span class="q-num">5</span>How much do you value credibility &amp; scale (banks, big clients, growth)?</label>
                <div class="opt-group row" data-q="credibility">
                    <button type="button" class="opt-btn active" data-v="high" onclick="pick(this)">Very important</button>
                    <button type="button" class="opt-btn" data-v="med" onclick="pick(this)">Somewhat</button>
                    <button type="button" class="opt-btn" data-v="low" onclick="pick(this)">Not really</button>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Get My Recommendation</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div class="winner-card" id="winnerCard"></div>
                <div class="rank-list" id="rankList"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want help registering the recommended entity?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant handles the full incorporation — DSC, DIN, name approval, MCA filings and first-year compliance — for whichever structure fits.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Entity%20Type%20Selector%20and%20need%20help%20choosing%20and%20registering%20a%20business%20structure.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Entity%20type%20selection%20/%20registration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Entity%20Type%20Selector%20and%20would%20like%20help%20choosing%20and%20registering%20a%20business%20structure.%0A%0AMy%20details%3A%0A-%20Number%20of%20owners%3A%0A-%20Funding%20plans%20%28yes%20/%20maybe%20/%20no%29%3A%0A-%20Recommended%20structure%20from%20the%20tool%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Start Over</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Selector</h2>
            <ol>
                <li><strong>Answer the five questions</strong> as honestly as you can about the next 2–3 years, not just today.</li>
                <li><strong>Funding intent (Q2)</strong> is the strongest driver — be realistic about whether you'll raise equity or issue ESOPs.</li>
                <li><strong>Click Get My Recommendation</strong> for a ranked list with the best-fit structure highlighted and a one-line "why".</li>
                <li><strong>Follow the link</strong> on the winning card to that structure's registration page to start.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> If your top two scores are close, the tie usually comes down to funding plans (lean Pvt Ltd) vs compliance cost (lean LLP). When in doubt, pick the structure that fits where you'll be in two years.</p>
            </div>
        </section>

        <section class="content-section" id="how-it-works">
            <h2>How the Scoring Works</h2>
            <p>The selector gives each of the five structures a score, starting from a neutral base, and adjusts it for each answer:</p>
            <ul>
                <li><strong>Owners</strong> — "just me" favours OPC and Proprietorship; "2–7" favours LLP and Pvt Ltd; "many/large" strongly favours Pvt Ltd.</li>
                <li><strong>Funding/ESOPs</strong> — "yes" heavily favours Pvt Ltd (and rules out single-owner and unregistered forms); "no" favours lighter structures.</li>
                <li><strong>Liability</strong> — "essential" favours the limited-liability forms (Pvt Ltd, LLP, OPC) and penalises Partnership and Proprietorship.</li>
                <li><strong>Compliance appetite</strong> — "minimal" favours Proprietorship/Partnership/LLP; "full" removes the penalty on Pvt Ltd and OPC.</li>
                <li><strong>Credibility/scale</strong> — "very important" favours Pvt Ltd, then LLP and OPC.</li>
            </ul>
            <div class="formula-box">
                <span class="label">Score(entity)</span> = base + Σ weighted points from each answer<br>
                <span class="label">Ranking</span> = entities sorted high → low, top one highlighted
            </div>
            <p>It's a transparent heuristic to <em>narrow</em> the field, not a legal opinion — your facts (NRI status, sector, FDI, specific tax planning) can shift the answer.</p>
        </section>

        <section class="content-section" id="compare">
            <h2>The Five Structures Compared</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Structure</th><th>Owners</th><th>Liability</th><th>Tax</th><th>Compliance</th><th>Funding</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Private Limited</strong></td><td>2–200</td><td>Limited</td><td>~22% (company)</td><td>Highest (audit, ROC, AGM)</td><td>Best — VC/ESOP</td></tr>
                    <tr><td><strong>LLP</strong></td><td>2+</td><td>Limited</td><td>30% (remuneration deductible)</td><td>Low (Form 8 &amp; 11)</td><td>Limited</td></tr>
                    <tr><td><strong>OPC</strong></td><td>1</td><td>Limited</td><td>~22% (company)</td><td>Company-like</td><td>Very limited</td></tr>
                    <tr><td><strong>Partnership</strong></td><td>2+</td><td>Unlimited</td><td>30% / slab</td><td>Minimal</td><td>None (equity)</td></tr>
                    <tr><td><strong>Proprietorship</strong></td><td>1</td><td>Unlimited</td><td>Individual slab</td><td>Minimal</td><td>None (equity)</td></tr>
                </tbody>
            </table>
            <p>Pvt Ltd and OPC are taxed as domestic companies, commonly at the concessional 22% rate (plus surcharge and cess) where conditions are met; LLPs and partnerships at 30%; proprietorship at the individual's slab. Compliance burden rises with the level of legal protection. Companies and LLPs are registered and regulated by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>, while all of them file income tax through the <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">income-tax portal</a>. See Patron's <a href="/private-limited-company-compliance">Pvt Ltd compliance</a> and <a href="/pvt-llp-compliance">LLP compliance</a> pages.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Choosing &amp; Registering a Business Structure?</h3>
            <p>Patron Accounting LLP supports founders choosing between Pvt Ltd, LLP, OPC, Partnership and Proprietorship and registering one — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Entity%20Type%20Selector%20and%20need%20help%20choosing%20and%20registering%20a%20business%20structure.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Entity%20type%20selection%20/%20registration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Entity%20Type%20Selector%20and%20would%20like%20help%20choosing%20and%20registering%20a%20business%20structure.%0A%0AMy%20details%3A%0A-%20Number%20of%20owners%3A%0A-%20Funding%20plans%20%28yes%20/%20maybe%20/%20no%29%3A%0A-%20Recommended%20structure%20from%20the%20tool%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="choose">
            <h2>Quick Guide — Who Picks What</h2>
            <ul>
                <li><strong>Private Limited</strong> — startups raising VC/angel money, issuing ESOPs, or chasing scale and credibility. The investor default. <a href="/private-limited-company-registration-in-india">Register a Pvt Ltd</a>.</li>
                <li><strong>LLP</strong> — multi-founder professional/service firms (consultants, CAs, architects, agencies) wanting limited liability with light compliance. <a href="/llp-incorporation">Register an LLP</a>.</li>
                <li><strong>OPC</strong> — solo founders wanting a real company with limited liability and credibility, no co-founder needed. <a href="/one-person-company-registration">Register an OPC</a>.</li>
                <li><strong>Partnership</strong> — two or more partners running a simple, self-funded business who accept unlimited liability. <a href="/partnership-firm-registration">Register a Partnership</a>.</li>
                <li><strong>Sole Proprietorship</strong> — a single owner testing an idea or running a small, low-risk venture cheaply. <a href="/proprietorship-registration">Register a Proprietorship</a>.</li>
            </ul>
            <p>Non-profit or charitable objects point to a <a href="/section8-company-registration">Section 8 Company</a> instead — a specialised structure outside this selector's five.</p>
        </section>

        <section class="content-section" id="startup-benefits">
            <h2>How Structure Affects Startup Benefits</h2>
            <p>The structure you choose doesn't just set your tax rate and compliance — it gates access to several startup incentives. <strong>DPIIT recognition</strong> under the Startup India scheme is open to a Private Limited Company, an LLP or a registered Partnership, but <em>not</em> a sole proprietorship. The deeper tax benefits go further: the <strong>Section 80-IAC three-year tax holiday</strong> and the <strong>ESOP perquisite-tax deferral</strong> under Section 192(1C) are available only to a Private Limited Company or LLP — never an OPC, partnership or proprietorship.</p>
            <p>So a founder who expects to chase these benefits should weight toward a Pvt Ltd or LLP from the start. Recognition is granted by <a href="https://www.dpiit.gov.in/" target="_blank" rel="noopener">DPIIT</a> through the <a href="https://www.startupindia.gov.in/" target="_blank" rel="noopener">Startup India</a> portal, and the choice of structure also shapes your audit and accounting obligations, which follow standards issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. If equity funding or these incentives are on your roadmap, the selector's funding question already pushes you toward the structures that qualify — but it's worth being deliberate about it.</p>
            <div class="callout">
                <p><strong>Tip:</strong> Planning ESOPs? Only a Pvt Ltd or LLP can offer the 80-IAC deferral — check it with the <a href="/tools/esop-section-192-1c-eligibility-checker">Section 192(1C) eligibility checker</a> once you've picked a structure.</p>
            </div>
        </section>

        <section class="content-section" id="convert">
            <h2>You Can Convert Later</h2>
            <p>Picking a structure isn't permanent. As a business grows, conversions are routine: <a href="/convert-partnership-to-llp">Partnership to LLP</a>, <a href="/convert-llp-to-private-limited-company">LLP to Private Limited</a>, or <a href="/blog/how-to-convert-opc-to-private-limited-company-in-india">OPC to Private Limited</a> when funding or scale demands it.</p>
            <p>That said, converting carries MCA filings, cost and care over continuity of contracts, registrations and tax history — so it's usually cleaner to choose for the next two to three years rather than convert too soon. If fundraising is likely within 12 months, most founders start as a Private Limited Company directly.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> This selector is an indicative guide. NRI status, sector-specific FDI rules, GST, and detailed tax planning can change the right answer — confirm with a professional before incorporating.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Which business structure is best in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">There is no single best structure; it depends on your situation. A Private Limited Company suits startups planning to raise funding and issue ESOPs. An LLP suits multi-founder professional or service firms wanting limited liability with lighter compliance. A One Person Company suits a solo founder wanting a corporate structure. A Partnership or Sole Proprietorship suits small, self-funded businesses prioritising simplicity over liability protection. This selector ranks them against your answers.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How does the entity type selector decide?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">It scores each structure against five factors: how many owners you have, whether you plan to raise external funding, how important limited liability is, your appetite for compliance, and how much you value credibility and scale. Each answer adds or removes points for the structures it favours, and the tool ranks them, highlighting the best fit. It is a guide to narrow the choice, not a substitute for tailored professional advice.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When should I choose a Private Limited Company?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Choose a Private Limited Company if you plan to raise venture capital or angel funding, issue ESOPs, or build a scalable, high-credibility business. It is registered under the Companies Act 2013 with two to two hundred shareholders, offers limited liability and 100 percent FDI under the automatic route, and is the structure investors expect. The trade-off is the highest compliance: board meetings, an AGM, annual ROC filings and a mandatory statutory audit regardless of turnover.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>When is an LLP the better choice?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">An LLP suits multi-founder professional and service firms — consultants, chartered accountants, architects, agencies — that want limited liability without the heavy compliance of a company. Under the LLP Act 2008 the key annual filings are Form 8 and Form 11, audit is required only if turnover exceeds 40 lakh rupees or contribution exceeds 25 lakh rupees, and there are no mandatory board or general meetings. Profit withdrawal is more tax-efficient, but LLPs are less suited to equity fundraising.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is an OPC good for a solo founder?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A One Person Company lets a single founder run a corporate entity with limited liability and better credibility than a proprietorship, under the Companies Act 2013. Since 2021 any Indian citizen, resident or not, can form one. The trade-offs are compliance similar to a Private Limited Company, only one shareholder so fundraising is limited, and mandatory conversion to a Private Limited Company if turnover crosses 2 crore rupees or paid-up capital crosses 50 lakh rupees.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What about a Partnership Firm or Sole Proprietorship?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A Partnership Firm and a Sole Proprietorship are the simplest and cheapest to start and run, with minimal regulatory compliance largely outside the MCA framework. The major drawback is unlimited liability, meaning the owners' personal assets are at risk, and lower credibility with banks, investors and large clients. They suit small, self-funded, low-risk businesses; as risk or scale grows, converting to an LLP or company is common.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How are the different structures taxed?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A Private Limited Company and an OPC are taxed as domestic companies, commonly at the concessional 22 percent rate plus surcharge and cess where conditions are met. An LLP and a Partnership Firm are taxed at 30 percent plus surcharge and cess, though partner remuneration and interest are deductible and profit withdrawal is tax-free in the partners' hands. A Sole Proprietorship is taxed at the individual's slab rate as part of personal income.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I change my structure later?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Businesses routinely convert as they grow — a Partnership to an LLP, an LLP to a Private Limited Company, or an OPC to a Private Limited Company, for example. Conversion involves MCA filings and some cost, and continuity of contracts, registrations and tax history needs care. It is often cleaner to pick a structure that fits the next two to three years rather than converting too soon, which is why matching the structure to your funding and scale plans matters.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does the selector account for fundraising plans?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Fundraising intent is one of the strongest factors. If you plan to raise venture capital or angel investment or to issue ESOPs, the selector weights heavily toward a Private Limited Company, because investors expect transferable shares and a clean equity structure. If you are self-funded or bootstrapped, the selector gives more weight to lighter structures like an LLP, OPC or proprietorship that reduce compliance cost.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Entity Type Selector free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting Entity Type Selector is completely free with no signup required. All logic runs in your browser and nothing is stored on our servers. It scores Private Limited, LLP, OPC, Partnership and Proprietorship against your answers and returns a ranked recommendation with a comparison. It is an indicative guide to narrow your options; the final choice should be confirmed with a professional who can weigh your specific facts.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>Entity Registration</h3>
            <p>End-to-end incorporation for any structure — DSC, DIN, name approval, MCA filings and compliance — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20Entity%20Type%20Selector%20and%20need%20help%20choosing%20and%20registering%20a%20business%20structure.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=Entity%20type%20selection%20/%20registration%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20Entity%20Type%20Selector%20and%20would%20like%20help%20choosing%20and%20registering%20a%20business%20structure.%0A%0AMy%20details%3A%0A-%20Number%20of%20owners%3A%0A-%20Funding%20plans%20%28yes%20/%20maybe%20/%20no%29%3A%0A-%20Recommended%20structure%20from%20the%20tool%3A%0A-%20City%20/%20state%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Registration Pages</h3>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Private Limited <span class="arrow">→</span></a>
            <a href="/llp-incorporation" class="sidebar-link">LLP <span class="arrow">→</span></a>
            <a href="/one-person-company-registration" class="sidebar-link">One Person Company <span class="arrow">→</span></a>
            <a href="/partnership-firm-registration" class="sidebar-link">Partnership Firm <span class="arrow">→</span></a>
            <a href="/proprietorship-registration" class="sidebar-link">Proprietorship <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Compliance &amp; Conversions</h3>
            <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Compliance <span class="arrow">→</span></a>
            <a href="/pvt-llp-compliance" class="sidebar-link">LLP Compliance <span class="arrow">→</span></a>
            <a href="/convert-llp-to-private-limited-company" class="sidebar-link">LLP → Pvt Ltd <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/how-to-register-llp-in-india-and-its-benefits" class="sidebar-link">How to Register an LLP <span class="arrow">→</span></a>
            <a href="/blog/how-to-convert-opc-to-private-limited-company-in-india" class="sidebar-link">Convert OPC to Pvt Ltd <span class="arrow">→</span></a>
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

    var answers = { owners:'one', funding:'yes', liability:'high', compliance:'high', credibility:'high' };

    var ENTITIES = {
        pvtltd: { name:'Private Limited Company', url:'/private-limited-company-registration-in-india' },
        llp:    { name:'LLP', url:'/llp-incorporation' },
        opc:    { name:'One Person Company (OPC)', url:'/one-person-company-registration' },
        partnership: { name:'Partnership Firm', url:'/partnership-firm-registration' },
        proprietor: { name:'Sole Proprietorship', url:'/proprietorship-registration' }
    };

    var WHY = {
        pvtltd: 'Best for raising funding, issuing ESOPs and building a scalable, high-credibility business.',
        llp: 'Limited liability with light compliance — ideal for multi-founder professional and service firms.',
        opc: 'A corporate structure with limited liability for a solo founder — no co-founder needed.',
        partnership: 'Simple and cheap for two or more partners in a self-funded, low-risk business (unlimited liability).',
        proprietor: 'The simplest, cheapest way for a single owner to run a small, low-risk venture (unlimited liability).'
    };

    function pick(btn){
        var group = btn.closest('.opt-group');
        var q = group.dataset.q;
        group.querySelectorAll('.opt-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        answers[q] = btn.dataset.v;
    }

    function calculate(){
        var s = { pvtltd:10, llp:10, opc:10, partnership:10, proprietor:10 };

        // Q1 owners
        if (answers.owners === 'one'){ s.opc += 6; s.proprietor += 6; s.pvtltd -= 2; s.llp -= 6; s.partnership -= 8; }
        else if (answers.owners === 'few'){ s.llp += 6; s.pvtltd += 5; s.partnership += 4; s.opc -= 8; s.proprietor -= 8; }
        else { s.pvtltd += 8; s.llp += 2; s.opc -= 10; s.proprietor -= 10; s.partnership -= 4; }

        // Q2 funding
        if (answers.funding === 'yes'){ s.pvtltd += 12; s.opc -= 6; s.llp -= 2; s.partnership -= 8; s.proprietor -= 10; }
        else if (answers.funding === 'maybe'){ s.pvtltd += 5; s.llp += 2; }
        else { s.llp += 4; s.proprietor += 4; s.partnership += 3; s.opc += 2; s.pvtltd -= 3; }

        // Q3 liability
        if (answers.liability === 'high'){ s.pvtltd += 5; s.llp += 5; s.opc += 5; s.partnership -= 8; s.proprietor -= 8; }
        else if (answers.liability === 'med'){ s.pvtltd += 2; s.llp += 2; s.opc += 2; }
        else { s.partnership += 3; s.proprietor += 3; }

        // Q4 compliance appetite
        if (answers.compliance === 'high'){ s.pvtltd += 4; s.opc += 2; }
        else if (answers.compliance === 'med'){ s.llp += 3; }
        else { s.proprietor += 7; s.partnership += 6; s.llp += 3; s.pvtltd -= 5; s.opc -= 5; }

        // Q5 credibility / scale
        if (answers.credibility === 'high'){ s.pvtltd += 6; s.llp += 3; s.opc += 2; s.proprietor -= 4; }
        else if (answers.credibility === 'med'){ s.llp += 2; s.opc += 1; }
        else { s.proprietor += 3; s.partnership += 2; }

        var arr = Object.keys(s).map(function(k){ return { key:k, score:Math.max(0, s[k]) }; });
        arr.sort(function(a,b){ return b.score - a.score; });
        var maxScore = arr[0].score || 1;

        var winner = arr[0];
        var wc = document.getElementById('winnerCard');
        wc.innerHTML = '<div class="wc-label">Recommended for you</div>' +
            '<div class="wc-name">' + ENTITIES[winner.key].name + '</div>' +
            '<div class="wc-why">' + WHY[winner.key] + '</div>' +
            '<a class="wc-cta" href="' + ENTITIES[winner.key].url + '">Register this entity →</a>';

        var rows = '';
        arr.forEach(function(e, i){
            var pct = Math.round(e.score / maxScore * 100);
            rows += '<div class="rank-row ' + (i===0 ? 'top' : '') + '">' +
                '<span class="rank-pos">' + (i+1) + '</span>' +
                '<span class="rank-name">' + ENTITIES[e.key].name + '</span>' +
                '<span class="rank-bar-wrap"><span class="rank-bar" style="width:' + pct + '%;"></span></span>' +
                '<span class="rank-score">' + e.score + '</span>' +
            '</div>';
        });
        document.getElementById('rankList').innerHTML = rows;

        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc(){
        answers = { owners:'one', funding:'yes', liability:'high', compliance:'high', credibility:'high' };
        document.querySelectorAll('.opt-group').forEach(function(g){
            g.querySelectorAll('.opt-btn').forEach(function(b,i){ b.classList.toggle('active', i===0); });
        });
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
