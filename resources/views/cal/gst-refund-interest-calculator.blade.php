@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>GST Refund Interest Calculator | Section 56 at 6%/9%</title>
    <meta name="description" content="GST refund interest calculator under Section 56: compute 6% or 9% interest on delayed refunds with the 60-day rule and two-tier doctrine. Free CA tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-refund-interest-calculator/">
    <meta property="og:title" content="GST Refund Interest Calculator — Section 56 CGST 2026">
    <meta property="og:description" content="Compute interest on delayed GST refunds at 6% or 9% under Section 56 CGST. Two-tier doctrine, 60-day rule, RFD forms. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/gst-refund-interest-calculator">
    <meta property="og:image" content="/tools/og/gst-refund-interest-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund Interest Calculator — Section 56 CGST 2026">
    <meta name="twitter:description" content="Compute interest on delayed GST refunds at 6% or 9% under Section 56 CGST. Two-tier doctrine, 60-day rule. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/gst-refund-interest-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "GST Refund Interest Calculator (Section 56)",
      "description": "GST Refund Interest Calculator computes statutory interest on delayed GST refunds under Section 56 of the Central Goods and Services Tax Act 2017. The tool supports both interest rates: 6% per annum for general delayed refunds under Section 54(5), and 9% per annum for refunds arising from orders of Adjudicating Authority, Appellate Authority, GST Appellate Tribunal, or Court that have attained finality. The two-tier interest computation framework established by Delhi High Court in Bansal International and confirmed by Bombay High Court in Lupin Limited is supported — 6% for the initial administrative delay period and 9% for the appellate-pursuant period. Inputs include refund amount, date of receipt of refund application in Form GST RFD-01, date of refund credit through Form GST RFD-05, and optional appellate application date for two-tier computation. Output includes 60-day exemption period end date, interest start date (day 61), days of delay, interest amount, and total amount due. Aligned with Notification 13/2017-Central Tax that fixed the rates, Rule 94 governing sanction, Circular 125/44/2019-GST clarifying computation methodology, and Notification 13/2025-Central Tax under GST 2.0 reforms reinforcing the 60-day rule and 7-day provisional refund timeline under Rule 91. Suitable for exporters claiming IGST refunds on zero-rated supplies, businesses with inverted duty structure refunds, taxpayers with excess cash ledger balance, deemed-export claimants, pre-deposit refund under Sections 107(6) and 112(8), and CA practitioners computing interest entitlement post Raghav Ventures judgment that confirmed automatic statutory entitlement without separate claim.",
      "url": "/tools/gst-refund-interest-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-19T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
      "author": {
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
      "provider": { "@id": "/#organization" }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "GST Refund Interest Calculator", "item": "/tools/gst-refund-interest-calculator"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-19T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Section 56 of the CGST Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 56 of the Central Goods and Services Tax Act 2017 mandates payment of interest to taxpayers when GST refunds are delayed beyond sixty days from receipt of the refund application. The provision came into force on 1 July 2017 via Notification 9/2017-Central Tax. The standard rate is 6% per annum, increasing to 9% where the refund arises pursuant to an order of an Adjudicating Authority, Appellate Authority, GST Appellate Tribunal, or Court that has attained finality."
          }
        },
        {
          "@type": "Question",
          "name": "When does interest start accruing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Interest accrues from the day immediately after expiry of sixty days from receipt of the refund application until the date the refund is credited to the applicant's bank account. If application is filed on 1 January, the 60-day period ends 1 March, and interest begins on 2 March (day 61). The terminal date is when payment advice in Form GST RFD-05 is given effect through electronic credit. Circular 125/44/2019-GST confirms this computation methodology."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between 6% and 9% interest?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "6% per annum applies to general delayed refunds under Section 54(5) where administrative delay alone is the cause. 9% per annum applies to refunds arising pursuant to orders of an Adjudicating Authority, Appellate Authority, Tribunal, or Court that have attained finality, when the post-order refund application is itself delayed beyond 60 days. Supreme Court in Union of India vs Willowood Chemicals (2022) confirmed 6% is the standard rate; 9% is reserved for genuinely appellate-pursuant claims, not general administrative delays."
          }
        },
        {
          "@type": "Question",
          "name": "Is interest automatic or do I need to claim it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Interest under Section 56 is statutory and automatic. Delhi HC in Raghav Ventures vs Commissioner of Delhi (2024) held that 6% interest is payable without any separate claim — even a waiver in the refund application cannot extinguish the statutory entitlement. The right vests automatically on the 61st day post-application. The department must compute and credit interest with the principal refund through Form GST RFD-05. In practice, taxpayers often file writ petitions when departments overlook this."
          }
        },
        {
          "@type": "Question",
          "name": "What is the two-tier interest doctrine?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The two-tier doctrine emerges from Delhi HC in Bansal International and Bombay HC in Lupin Limited. Where a refund is initially rejected and later allowed by an appellate forum, two distinct delay periods exist. The first period attracts 6% interest from day 61 of original application until day 60 of post-appeal application. The second period attracts 9% interest from day 61 of post-appeal application until refund credit. The doctrine ensures full compensation across the entire timeline."
          }
        },
        {
          "@type": "Question",
          "name": "Are weekends and holidays included?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Interest is computed on a daily basis as simple interest using the formula: Refund Amount × Rate × Days ÷ 365. All calendar days are counted including Saturdays, Sundays, and gazetted holidays. The day of application receipt is excluded from the 60-day count, and the day of refund credit is included in the delay period. The Delhi High Court has consistently rejected attempts to exclude administrative delay periods from the count, including delays caused by departmental investigations or red-flagging."
          }
        },
        {
          "@type": "Question",
          "name": "What is provisional refund under Section 54(6)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(6) read with Rule 91 prescribes that ninety percent of refund claimed on zero-rated supplies (exports) shall be granted on a provisional basis within seven days of generating acknowledgment in Form GST RFD-02. The provisional order is issued in Form GST RFD-04. Notification 13/2025-Central Tax under GST 2.0 reaffirmed this seven-day timeline. The remaining ten percent is released after final scrutiny. Provisional timing does not affect the 60-day clock for Section 56 interest."
          }
        },
        {
          "@type": "Question",
          "name": "Which forms are involved in GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The refund process uses several forms. Form GST RFD-01 is the refund application filed by the taxpayer. RFD-02 is the acknowledgment generated by the system. RFD-03 is the deficiency memo issued for incomplete applications. RFD-04 is the provisional refund order under Section 54(6). RFD-05 is the payment advice through which refund and interest are credited. RFD-06 is the final refund sanction order. Rule 94 specifically governs sanction of interest on delayed refunds, which must accompany the principal refund through RFD-05."
          }
        },
        {
          "@type": "Question",
          "name": "Can refund interest be denied for departmental delays?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Courts have consistently held that administrative delay does not justify denial of statutory interest. In Raghav Ventures (2024), Delhi HC directed payment of 6% interest despite department citing delays from risky-exporter red-flagging. Section 56 contains no exclusion for departmental investigation periods. Circular 16/2019 mandates investigation completion within 30 days. Periods where the applicant fails to respond to deficiency memos or provides invalid bank details may be excluded under Rule 94, but pure departmental inaction is not a valid exclusion."
          }
        },
        {
          "@type": "Question",
          "name": "How does the 60-day clock interact with deficiency memos?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If the proper officer issues a deficiency memo in Form GST RFD-03 within fifteen days of receipt, the original application is treated as not filed. The taxpayer must file a fresh application. The 60-day clock restarts from the fresh application date. Mere allegation of deficiency without RFD-03 within fifteen days does not stop the original clock. Late deficiency memos issued to reset the timeline have been judicially scrutinised and limited to genuinely deficient applications."
          }
        },
        {
          "@type": "Question",
          "name": "What types of refunds attract Section 56 interest?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All refunds under Section 54 attract Section 56 interest if delayed. Common categories include zero-rated supply refunds (exports, SEZ supplies) under Section 16 IGST, inverted duty structure refunds (where input GST exceeds output GST), excess balance in electronic cash ledger, deemed-export refunds, refund of tax paid in error, and pre-deposit refunds under Sections 107(6) and 112(8) on appeal disposal. The 9% rate specifically applies when refund flows from appellate or judicial orders that have attained finality."
          }
        },
        {
          "@type": "Question",
          "name": "What did the Supreme Court hold in Willowood Chemicals?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In Union of India vs Willowood Chemicals (2022), the Supreme Court reversed Gujarat HC's grant of 9% interest on delayed IGST refunds. The apex court held that where delay is administrative and not pursuant to an appellate order, the statutory rate is 6% under Section 56's principal provision. The 9% rate cannot be invoked merely because delay was lengthy or caused commercial hardship. The judgment narrowed 9% scope to refunds genuinely from finality orders, settling earlier divergent High Court positions."
          }
        },
        {
          "@type": "Question",
          "name": "What changed under GST 2.0 reforms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 13/2025-Central Tax dated 17 September 2025, issued post the 56th GST Council meeting, reinforced refund timelines under GST 2.0 reforms. Rule 91(2) was amended to mandate that the provisional refund order in Form GST RFD-04 be issued within seven days of acknowledgment in Form RFD-02. Notification 14/2025 introduced restrictions on provisional refunds for non-Aadhaar-authenticated taxpayers and for suppliers of pan masala, tobacco, and essential oils. Section 56 interest framework remained unchanged; the 6% and 9% rates continue."
          }
        }
      ]
    }
    </script>
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
            --warning: #D97706;
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
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; }
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
        .content-col, .sidebar-col { min-width: 0; }
        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }
        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 14px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .form-group input[type="date"] { font-family: var(--font-body); font-size: 15px; font-weight: 500; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .approach-toggle { background: linear-gradient(135deg, #F0FDFA 0%, #F0F5FB 100%); border: 2px solid var(--primary-light); padding: 6px; gap: 6px; margin-bottom: 24px; }
        .approach-toggle .toggle-btn { padding: 14px 16px; font-size: 14px; }
        .approach-toggle .toggle-btn.active { background: var(--primary); color: #fff; }
        .mode-block { display: none; }
        .mode-block.active { display: block; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px 28px; margin-bottom: 20px; border-left: 6px solid; text-align: center; }
        .verdict-card.entitled { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.notentitled { background: linear-gradient(135deg, #F3F4F6 0%, #E5E7EB 100%); border-left-color: var(--text-muted); }
        .verdict-card.large { background: linear-gradient(135deg, #FEF3C7 0%, #ff8347 100%); border-left-color: var(--accent); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .interest-mega { font-family: var(--font-mono); font-size: 64px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -2px; }
        .interest-mega-prefix { font-size: 24px; color: var(--text-muted); margin-right: 4px; font-family: var(--font-body); font-weight: 500; vertical-align: middle; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 8px; background: var(--success); color: #fff; }

        .breakdown-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 500px) { .breakdown-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .breakdown-grid { grid-template-columns: repeat(4, 1fr); } }
        .breakdown-card { background: var(--surface); border-radius: var(--radius); padding: 14px; border: 1px solid var(--border); }
        .breakdown-card.highlight { background: var(--primary); border-color: var(--primary); }
        .breakdown-card.highlight .breakdown-label, .breakdown-card.highlight .breakdown-value, .breakdown-card.highlight .breakdown-sub { color: #fff; }
        .breakdown-card.highlight .breakdown-sub { color: rgba(255,255,255,0.8); }
        .breakdown-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .breakdown-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); line-height: 1.2; }
        .breakdown-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }

        .tier-table { width: 100%; border-collapse: collapse; margin-bottom: 22px; font-size: 14px; background: var(--card); border-radius: var(--radius); overflow: hidden; box-shadow: var(--shadow-sm); }
        .tier-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .tier-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .tier-table tbody tr:last-child td { border-bottom: none; }
        .tier-table tbody td.amt { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); }
        .tier-table tbody tr.total td { background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(31,74,122,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre; }
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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
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
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .cta-btn:hover { background: var(--accent-light); }
        .body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 32px; margin: 28px 0; text-align: center; }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .rate-table, .tier-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th, .tier-table tbody td, .tier-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .interest-mega { font-size: 44px; }
            .interest-mega-prefix { font-size: 18px; }
        }
    
/* ===== Patron CTA system v1 (4 placements x 3 channels) ===== */
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px;}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap;}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45;}
.brand-cta-bar-text strong{color:var(--text);font-weight:700;}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap;}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,background .2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px;}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,.12);}
.brand-cta-btn:active{transform:translateY(0);}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0;}
.brand-cta-btn-call{background:var(--accent);color:#fff;}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff;}
.brand-cta-btn-wa{background:#25D366;color:#fff;}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff;}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5;}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text);}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px;}
.brand-cta-stack .brand-cta-btn{width:100%;}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px;}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px;}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4;}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55;}
.post-result-cta .brand-cta-bar-actions{gap:8px;}
@media (max-width:767px){
 .brand-cta-bar{padding:12px 14px;}
 .brand-cta-bar-text{font-size:13px;flex-basis:100%;}
 .brand-cta-bar-actions{width:100%;gap:8px;}
 .brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0;min-height:44px;}
 .brand-cta-bar .brand-cta-btn-call{flex:1 1 100%;}
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta{padding:16px;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
@media (min-width:768px) and (max-width:950px){
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
/* ===== A11y: focus-visible (WCAG 2.4.7) ===== */
.form-group input,.form-group select{outline:2px solid transparent;outline-offset:2px;}
.form-group input:focus-visible,.form-group select:focus-visible{outline:2px solid var(--accent);outline-offset:2px;}
a:focus-visible,button:focus-visible,.toggle-btn:focus-visible,.brand-cta-btn:focus-visible,.faq-question:focus-visible,.cta-btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px;}
/* ===== Reduced motion (WCAG 2.3.3) ===== */
@media (prefers-reduced-motion:reduce){
 *,*::before,*::after{animation-duration:.001ms!important;animation-iteration-count:1!important;transition-duration:.001ms!important;scroll-behavior:auto!important;}
}
/* ===== Print stylesheet (working-paper output) ===== */
@media print{
 .toc-nav,.brand-cta-bar,.body-cta,.cta-card,.post-result-cta,.wa-sticky-bar,.sidebar-col,.faq-section{display:none!important;}
 body{background:#fff;color:#000;}
 a[href]::after{content:"";}
 .container,.main-col{max-width:100%!important;width:100%!important;}
}

</style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#two-tier">Two-Tier Doctrine</a>
        <a href="#case-law">Case Law</a>
        <a href="#forms">RFD Forms</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    GST Refund Interest Calculator (Section 56)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>GST Refund Interest <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Interest%20Calculator%20%28Section%2056%29%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Section 56 of the CGST Act 2017 mandates statutory interest on delayed GST refunds. <strong>6% per annum</strong> applies to general delayed refunds under Section 54(5); <strong>9% per annum</strong> applies where the refund arises pursuant to an order of an Adjudicating Authority, Appellate Authority, GST Appellate Tribunal, or Court that has attained finality. Interest accrues from the <strong>61st day</strong> after refund application receipt until the date of refund credit. The Delhi High Court in <em>Bansal International</em> and Bombay High Court in <em>Lupin Limited</em> established the two-tier doctrine for appellate-pursuant refunds. Per <em>Raghav Ventures</em> (Delhi HC, 2024), interest is statutory and automatic — no claim required.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Compute Section 56 Interest</h2>
            <p class="calc-intro">Choose mode based on whether the refund is administratively delayed (6% p.a.) or arises from an appellate / judicial order that has attained finality (two-tier 6% + 9%). All calendar days are counted; interest accrues from day 61.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group approach-toggle" id="modeGroup" role="tablist" aria-label="Refund mode">
                <button type="button" class="toggle-btn active" data-value="general" role="tab" aria-selected="true">General Delayed Refund (6%)</button>
                <button type="button" class="toggle-btn" data-value="appellate" role="tab" aria-selected="false">Pursuant to Appellate Order (Two-Tier)</button>
            </div>

            <!-- GENERAL MODE -->
            <div class="mode-block active" id="generalBlock">
                <div class="calc-section-title">General Delayed Refund — Section 54(5)</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="g_amount">Refund Amount (₹)</label>
                        <input type="text" id="g_amount" min="0" step="any" placeholder="e.g. 2500000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Tax amount sanctioned for refund (excluding interest).</span>
                    </div>
                    <div class="form-group">
                        <label for="g_appDate">Date of Application Receipt</label>
                        <input type="date" id="g_appDate">
                        <span class="helper">Date of acknowledgment in Form GST RFD-02.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="g_refundDate">Date of Refund Credit</label>
                        <input type="date" id="g_refundDate">
                        <span class="helper">Date amount credited to bank via RFD-05. Leave blank for "today".</span>
                    </div>
                    <div class="form-group">
                        <label for="g_refundType">Refund Category</label>
                        <select id="g_refundType">
                            <option value="zero_rated">Zero-Rated Supplies (Exports / SEZ)</option>
                            <option value="inverted">Inverted Duty Structure</option>
                            <option value="excess_cash">Excess Cash Ledger Balance</option>
                            <option value="deemed_export">Deemed Export</option>
                            <option value="error">Tax Paid in Error</option>
                            <option value="pre_deposit">Pre-Deposit Refund (S.107(6) / 112(8))</option>
                            <option value="other">Other under Section 54</option>
                        </select>
                        <span class="helper">For categorisation in result.</span>
                    </div>
                </div>
            </div>

            <!-- APPELLATE MODE -->
            <div class="mode-block" id="appellateBlock">
                <div class="calc-section-title">Pursuant to Appellate / Judicial Order — Two-Tier Computation</div>

                <div class="info-banner info" style="margin-bottom:20px;">
                    <strong>Two-tier doctrine (Bansal International / Lupin Limited):</strong> Tier 1 — 6% from day 61 of original application until day 60 of post-appeal application. Tier 2 — 9% from day 61 of post-appeal application until refund credit.
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="a_amount">Refund Amount (₹)</label>
                        <input type="text" id="a_amount" min="0" step="any" placeholder="e.g. 5000000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Tax amount allowed by appellate / judicial order.</span>
                    </div>
                    <div class="form-group">
                        <label for="a_origAppDate">Original Application Receipt Date</label>
                        <input type="date" id="a_origAppDate">
                        <span class="helper">First RFD-01 application that was rejected.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="a_postAppealDate">Post-Appeal Application Date</label>
                        <input type="date" id="a_postAppealDate">
                        <span class="helper">Fresh RFD-01 filed after appellate order.</span>
                    </div>
                    <div class="form-group">
                        <label for="a_refundDate">Date of Refund Credit</label>
                        <input type="date" id="a_refundDate">
                        <span class="helper">Date amount credited via RFD-05. Leave blank for "today".</span>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Interest</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card entitled" id="verdictCard">
                    <div class="verdict-label">Statutory Interest Entitlement under Section 56</div>
                    <div class="verdict-headline" id="verdictHeadline">Interest Payable</div>
                    <div class="interest-mega" id="interestVal"><span class="interest-mega-prefix">₹</span>—</div>
                    <span class="verdict-pill" id="verdictPill">✓ Entitled</span>
                </div>

                <div class="info-banner" id="advisoryBanner"></div>

                <table class="tier-table" id="tierTable" style="display:none;">
                    <thead>
                        <tr><th>Tier</th><th>Rate</th><th>Period</th><th>Days</th><th style="text-align:right;">Interest</th></tr>
                    </thead>
                    <tbody id="tierTableBody"></tbody>
                </table>

                <div class="breakdown-grid" id="breakdownGrid"></div>

                <div class="basis-block">
                    <div class="basis-label">Computation Basis</div>
                    <div class="basis-text" id="basisText">—</div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — GST Refund Interest Calculator (Section 56) validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Interest%20Calculator%20%28Section%2056%29%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>Section 56 — The Statutory Framework</h2>

            <p>Section 56 of the Central Goods and Services Tax Act 2017 came into force on 1 July 2017 via Notification 9/2017-Central Tax. It addresses a structural problem in any tax system — the asymmetry between a taxpayer's obligation to pay on time (with steep interest under Section 50) and the government's obligation to refund on time. The provision compensates taxpayers when refunds are delayed beyond sixty days from the date of receipt of the refund application, ensuring the time-value of money is paid for by the exchequer that retained the funds.</p>

            <p>The statutory text contains two parts. The principal provision fixes 6% per annum for general delays. The first proviso fixes 9% per annum where the refund flows from an order of an Adjudicating Authority, Appellate Authority, GST Appellate Tribunal, or Court that has attained finality, when the post-order refund application itself is delayed beyond 60 days. <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> notified the rates via Notification 13/2017-Central Tax dated 28 June 2017. The <a href="https://gstcouncil.gov.in" target="_blank" rel="noopener">GST Council</a> recommended the rates under Section 56(1).</p>

            <h3>Computation Methodology</h3>
            <div class="formula-box"><span class="label">Interest =</span> Refund Amount × Rate × Days ÷ 365

<span class="label">Where:</span>
  Days = Days from 61st day after application receipt until refund credit
  Rate = 6% (general) or 9% (appellate-pursuant)
  Day count = All calendar days (weekends, holidays included)</div>

            <p>Circular 125/44/2019-GST issued by CBIC clarifies that interest is calculated starting from the date immediately after the expiry of sixty days from the date of receipt of the refund application until the date on which the amount is credited to the bank account of the applicant. The day of application receipt is excluded; the day of refund credit is included in the delay period.</p>

            <h3>Two Rates, Two Use Cases</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Rate</th><th>Trigger</th><th>Common Scenarios</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>6% p.a.</strong></td><td>Section 54(5) — general administrative delay</td><td>Routine zero-rated supply refunds, inverted duty refunds, excess cash ledger refunds where department simply takes too long</td></tr>
                    <tr><td><strong>9% p.a.</strong></td><td>Proviso to S.56 — refund pursuant to appellate / judicial order that has attained finality</td><td>Refunds allowed by First Appellate Authority, GSTAT, High Court or Supreme Court where the post-order RFD-01 itself is delayed beyond 60 days</td></tr>
                </tbody>
            </table>

            <div class="callout">
                <p><strong>Statutory and automatic — no claim required.</strong> Delhi High Court in <em>Raghav Ventures vs. Commissioner of Delhi</em> (2024) held that 6% interest under Section 56 is automatically payable on the 61st day. Even an explicit waiver of interest in Form RFD-01 cannot extinguish the statutory entitlement, because the right vests only after delay occurs and cannot be waived prospectively.</p>
            </div>
        </section>

        <section class="content-section" id="two-tier">
            <h2>The Two-Tier Interest Doctrine</h2>

            <p>The most operationally important development in Section 56 jurisprudence is the two-tier interest doctrine, articulated by the Delhi High Court in <em>Bansal International</em> and reaffirmed by the Bombay High Court in <em>Lupin Limited</em>. The doctrine addresses a common scenario: a refund is initially rejected, the taxpayer succeeds in appeal, files a fresh RFD-01 pursuant to the appellate order, and the department further delays the refund. Two distinct delay periods exist, each attracting a different rate.</p>

            <h3>Tier 1 — Original Administrative Delay (6%)</h3>
            <p>From the 61st day after the original RFD-01 application until the 60th day after the post-appeal RFD-01 application, the delay is administrative in character. The principal provision of Section 56 applies, and 6% interest accrues on the refund amount.</p>

            <h3>Tier 2 — Post-Appellate Delay (9%)</h3>
            <p>From the 61st day after the post-appeal RFD-01 application until the actual refund credit, the delay is in defiance of an appellate order that has attained finality. The first proviso to Section 56 applies, and 9% interest accrues. The Bombay High Court (Goa Bench) in <em>Lupin Limited</em> confirmed that once an FAA order allowing refund attains finality, revenue authorities must release the amount within the statutory 60-day window, failing which the higher rate is mandatory and not discretionary.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Period</th><th>Rate</th><th>Authority</th></tr>
                </thead>
                <tbody>
                    <tr><td>Day 61 of original RFD-01 → Day 60 of post-appeal RFD-01</td><td>6%</td><td>S.56 principal provision</td></tr>
                    <tr><td>Day 61 of post-appeal RFD-01 → Refund credit date</td><td>9%</td><td>S.56 first proviso</td></tr>
                </tbody>
            </table>

            <p>The two-tier doctrine ensures the taxpayer is compensated for the entire delay timeline at the appropriate rate. Departments have at times argued that only one rate should apply across the entire period — courts have rejected this where genuine appellate-pursuant facts exist.</p>
        </section>

        <section class="content-section" id="case-law">
            <h2>Key Indian Case Law on Section 56</h2>

            <h3>Union of India vs. Willowood Chemicals Pvt. Ltd. (Supreme Court, 2022)</h3>
            <p>The <a href="https://main.sci.gov.in" target="_blank" rel="noopener">Supreme Court of India</a> reversed Gujarat High Court's grant of 9% interest on delayed IGST refunds where delay ranged 94-290 days. The Bench held that where delay is administrative and not pursuant to an appellate order, the statutory rate is 6% under the principal provision of Section 56. The 9% rate cannot be invoked merely because delay was lengthy or caused commercial hardship. This judgment narrowed the scope of 9% to refunds genuinely arising from finality orders, settling earlier divergent High Court positions.</p>

            <h3>Raghav Ventures vs. Commissioner of Delhi (Delhi HC, 2024)</h3>
            <p>An exporter of mobile phones to Dubai sought interest on delayed IGST refunds where the department had withheld payment due to risky-exporter red-flagging. The court held that 6% interest is statutory and payable automatically — administrative investigation periods are not excludable from the delay calculation. Even where the exporter had ticked a "no-claim" box in RFD-01, the court held that prospective waiver of an unborn right is legally meaningless. The judgment confirmed that the 60-day clock begins on application receipt and does not pause for departmental processes.</p>

            <h3>Bansal International vs. Commissioner (Delhi HC)</h3>
            <p>The Delhi High Court formally articulated the two-tier interest doctrine. Where a refund was initially rejected and later allowed by the appellate authority, the court held that 6% applies for the original administrative delay period and 9% applies for the post-appeal delay period. The doctrine has been adopted by other High Courts and is now the operational framework for computing interest on appellate-pursuant refunds.</p>

            <h3>Lupin Limited vs. Union of India (Bombay HC, Goa Bench)</h3>
            <p>The pharmaceutical company's refund was initially rejected and later allowed by the FAA. Despite the order, the refund was delayed. The Bench held that once an FAA order allowing refund attains finality, revenue authorities must release the amount within the statutory 60-day window from the post-order application, failing which 9% interest applies mandatorily. The court rejected the department's argument that "administrative processes" justified the delay.</p>

            <h3>SBI Cards &amp; Payment Services Limited</h3>
            <p>The High Court held that interest under Section 56 is a vested statutory right that flows automatically from the government's failure to adhere to the statutory timeline, not from any affirmative claim by the taxpayer. The court rejected procedural objections to interest entitlement, including allegations of late or incomplete claim wording, on the principle that statutory mandate cannot be overridden by procedural infirmities.</p>

            <h3>Practical Implications</h3>
            <ul>
                <li><strong>Document everything.</strong> Save Form RFD-02 acknowledgment dates carefully — these anchor the 60-day clock.</li>
                <li><strong>Don't waive prospectively.</strong> Avoid ticking "no-interest-claim" boxes in RFD-01 even though courts have held such waivers ineffective. Departments still rely on these in initial denials.</li>
                <li><strong>Two-tier requires two RFD-01s.</strong> Always file a fresh RFD-01 after favourable appellate order — the post-appeal application starts the 9% clock.</li>
                <li><strong>Writ remedy works.</strong> Where departments resist interest payment, writ petitions before the jurisdictional High Court have an excellent track record. <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a> indirect tax practitioners report 90%+ success rates on Section 56 writs.</li>
            </ul>
        </section>

        <div class="body-cta">
            <h3>Need help recovering delayed GST refund interest?</h3>
            <p>Patron's GST team handles refund applications, deficiency-memo responses, post-appeal refund filings, and writ petitions for Section 56 interest recovery. Fixed-fee, time-bound, CA-signed.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Interest%20Calculator%20%28Section%2056%29%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="forms">
            <h2>The RFD Forms Procedure</h2>

            <p>Refund applications follow a standardised procedure under Rules 89 to 97A of the CGST Rules 2017. Eight forms are involved across the application, scrutiny, and disbursement stages. Understanding the forms helps anchor the 60-day clock for Section 56 interest computation. All RFD forms are filed electronically through the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a>. The procedural framework derives from <a href="https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" target="_blank" rel="noopener">GST India</a> implementation under the Constitution (101st Amendment) Act 2016.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Form</th><th>Purpose</th><th>Timeline</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>RFD-01</strong></td><td>Refund application by taxpayer</td><td>Within 2 years from relevant date (S.54(1))</td></tr>
                    <tr><td><strong>RFD-02</strong></td><td>System-generated acknowledgment</td><td>Auto on filing — anchors 60-day clock</td></tr>
                    <tr><td><strong>RFD-03</strong></td><td>Deficiency memo (officer)</td><td>Within 15 days of RFD-01 receipt</td></tr>
                    <tr><td><strong>RFD-04</strong></td><td>Provisional refund order (90%)</td><td>Within 7 days of acknowledgment (zero-rated supplies — Rule 91 amended by Notif. 13/2025)</td></tr>
                    <tr><td><strong>RFD-05</strong></td><td>Payment advice — refund + interest credit</td><td>On final sanction — Rule 94 governs interest sanction</td></tr>
                    <tr><td><strong>RFD-06</strong></td><td>Final refund sanction order</td><td>Within 60 days of acknowledgment (S.54(7))</td></tr>
                    <tr><td><strong>RFD-07</strong></td><td>Order for withholding refund</td><td>If refund liable to recovery / pending dues</td></tr>
                    <tr><td><strong>RFD-08 / 09</strong></td><td>SCN for refund rejection / reply</td><td>If refund proposed to be rejected</td></tr>
                </tbody>
            </table>

            <h3>Provisional Refund — Section 54(6)</h3>
            <p>For zero-rated supplies (exports and SEZ supplies), Section 54(6) read with Rule 91 prescribes that ninety percent of the refund claimed shall be granted on a provisional basis. The provisional order is issued in Form RFD-04 within seven days of the system-generated acknowledgment in RFD-02. <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a>'s Notification 13/2025-Central Tax dated 17 September 2025 under GST 2.0 reforms reaffirmed and tightened this seven-day timeline. The remaining ten percent is released after final scrutiny within the overall 60-day window. Provisional refund timing does not affect the Section 56 60-day clock, which runs from original application receipt until final refund of the entire amount.</p>

            <h3>Deficiency Memos and the Clock</h3>
            <p>If the proper officer issues a deficiency memo in RFD-03 within fifteen days, the original application is treated as not having been filed under Rule 90(3). The taxpayer must file a fresh application after curing deficiencies, and the 60-day clock restarts from the fresh filing date. Where deficiency memos are issued late or pretextually to reset the clock, judicial review is available — Delhi High Court has consistently scrutinised such practice.</p>
        </section>

        <section class="content-section">
            <h2>GST 2.0 Reforms — September 2025 Updates</h2>

            <p>The 56th GST Council meeting on 3-4 September 2025 launched the "GST 2.0" reforms package, with notifications issued on 17 September 2025 and most provisions effective 22 September 2025. Three notifications materially affected the refund framework, though Section 56 interest rates themselves remained unchanged at 6% and 9%.</p>

            <h3>Notification 13/2025-Central Tax (Third Amendment Rules 2025)</h3>
            <ul>
                <li><strong>Rule 91(2) tightened:</strong> Provisional refund order in Form RFD-04 must now be issued within seven days of acknowledgment in RFD-02 — the timeline was previously a more flexible "as soon as possible" standard.</li>
                <li><strong>Rule 39(1A):</strong> Input Service Distributors can now distribute IGST credit on reverse-charge inputs, retrospective from 1 April 2025 — relevant for ITC claims feeding into refund applications.</li>
                <li><strong>Rule 113(2):</strong> Appeal orders must now include a summary in Form GST APL-04A showing final tax, interest, and penalty — relevant for two-tier interest computation under appellate-pursuant refunds.</li>
            </ul>

            <h3>Notification 14/2025-Central Tax — Provisional Refund Restrictions</h3>
            <p>Effective 1 October 2025, provisional refunds under Rule 91 are blocked for: (a) taxpayers who have not completed Aadhaar authentication under Rule 10B, and (b) suppliers of areca nuts (HSN 0802 80), pan masala (2106 90 20), tobacco and manufactured tobacco substitutes (Chapter 24), and essential oils (HSN 3301). For these categories, refunds are released only after full verification, eliminating the seven-day provisional release window. Section 56 interest still applies if the post-verification refund is delayed beyond 60 days from application receipt.</p>

            <h3>What Did Not Change</h3>
            <ul>
                <li>Section 56 interest rates remain 6% and 9% per Notification 13/2017-Central Tax</li>
                <li>The 60-day rule from application receipt is preserved — no carve-outs for verification delays</li>
                <li>Two-tier doctrine articulated in Bansal International and Lupin remains operative case law</li>
                <li>Automatic statutory entitlement principle from Raghav Ventures remains binding</li>
            </ul>

            <div class="callout warn">
                <p><strong>For exporters claiming IGST refunds.</strong> The Aadhaar authentication requirement under Rule 10B effective 1 October 2025 must be completed before filing RFD-01 to avoid loss of provisional refund benefit. The 60-day clock for final refund interest still runs from application receipt, but the seven-day 90% provisional release will be denied for non-authenticated taxpayers.</p>
            </div>
        </section>

        <section class="content-section">
            <h2>Common Misreadings and Practitioner Tips</h2>

            <h3>Provisional Refund Receipt Does Not Stop the Clock</h3>
            <p>If 90% of the refund is released within 7 days under Rule 91 but the remaining 10% is delayed, Section 56 interest accrues on the unpaid 10% from day 61 of the original application. Departments sometimes argue the clock stops on provisional release; courts have rejected this. The clock runs until the entire refund is credited.</p>

            <h3>Tax + Interest Refunded Together via RFD-05</h3>
            <p>Rule 94 of the CGST Rules requires the proper officer to issue a payment order in RFD-05 specifying the refund amount, the delay period, and the interest payable. The interest must be credited electronically along with the principal refund. Departments occasionally split the two into separate orders — this is procedural error, and the taxpayer can insist on simultaneous credit through a representation or writ.</p>

            <h3>9% Cannot Be Claimed for Pure Administrative Delay</h3>
            <p>Following <em>Willowood Chemicals</em> (SC, 2022), 9% is reserved for refunds genuinely arising from appellate or judicial orders that have attained finality. Lengthy administrative delay alone does not upgrade the rate. Where the refund flows directly from the original RFD-01 (no appellate intervention), 6% is the maximum statutory rate.</p>

            <h3>Pre-Deposit Refunds Have a Special Rule</h3>
            <p>Section 115 of the CGST Act prescribes that pre-deposit amounts paid under Section 107(6) for filing first appeal or Section 112(8) for filing tribunal appeal, when refunded on favourable disposal, attract interest from the date of payment until refund — not from day 61. The rate is 6% per annum. This is more generous than Section 56 because the funds were never owed in the first place. Practitioners should ensure pre-deposit refund claims are computed under Section 115, not Section 56.</p>

            <h3>The Two-Year Limitation</h3>
            <p>Section 54(1) imposes a two-year limitation from the relevant date for filing refund applications. The relevant date varies by refund type — for zero-rated supplies, it is the date of receipt of payment; for inverted duty, the end of the financial year. Refund applications filed beyond two years are time-barred, and Section 56 interest does not arise on time-barred claims even if the department processes them. Tracking the relevant date is therefore foundational.</p>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>GST Refund &amp; Litigation</h3>
            <p>Refund filing, deficiency-memo response, post-appeal refund, Section 56 interest writ — fixed-fee, CA-signed.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Interest%20Calculator%20%28Section%2056%29%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Interest%20Calculator%20%28Section%2056%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-return-filing" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/gstat-appeal-filing" class="sidebar-link">GSTAT Appeal Filing<span class="arrow">→</span></a>
            <a href="/gst-litigation" class="sidebar-link">GST Litigation<span class="arrow">→</span></a>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-interest-calculator" class="sidebar-link">GST Interest Calculator<span class="arrow">→</span></a>
            <a href="/tools/itc-eligibility-calculator" class="sidebar-link">ITC Eligibility Calculator<span class="arrow">→</span></a>
            <a href="/tools/financial-ratios-dashboard" class="sidebar-link">Financial Ratios Dashboard<span class="arrow">→</span></a>
            <a href="/tools/financial-health-score" class="sidebar-link">Financial Health Score<span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator<span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/gst-refund-process-and-procedure" class="sidebar-link">GST Refund Process<span class="arrow">→</span></a>
            <a href="/blog/zero-rated-supplies-under-gst" class="sidebar-link">Zero-Rated Supplies<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is Section 56 of the CGST Act?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 56 of the Central Goods and Services Tax Act 2017 mandates payment of interest to taxpayers when GST refunds are delayed beyond sixty days from receipt of the refund application. The provision came into force on 1 July 2017 via Notification 9/2017-Central Tax. The standard rate is 6% per annum, increasing to 9% where the refund arises pursuant to an order of an Adjudicating Authority, Appellate Authority, GST Appellate Tribunal, or Court that has attained finality.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">When does interest start accruing?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Interest accrues from the day immediately after expiry of sixty days from receipt of the refund application until the date the refund is credited to the applicant's bank account. If application is filed on 1 January, the 60-day period ends 1 March, and interest begins on 2 March (day 61). The terminal date is when payment advice in Form GST RFD-05 is given effect through electronic credit. Circular 125/44/2019-GST confirms this computation methodology.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the difference between 6% and 9% interest?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">6% per annum applies to general delayed refunds under Section 54(5) where administrative delay alone is the cause. 9% per annum applies to refunds arising pursuant to orders of an Adjudicating Authority, Appellate Authority, Tribunal, or Court that have attained finality, when the post-order refund application is itself delayed beyond 60 days. Supreme Court in Union of India vs Willowood Chemicals (2022) confirmed 6% is the standard rate; 9% is reserved for genuinely appellate-pursuant claims, not general administrative delays.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is interest automatic or do I need to claim it?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Interest under Section 56 is statutory and automatic. Delhi HC in Raghav Ventures vs Commissioner of Delhi (2024) held that 6% interest is payable without any separate claim — even a waiver in the refund application cannot extinguish the statutory entitlement. The right vests automatically on the 61st day post-application. The department must compute and credit interest with the principal refund through Form GST RFD-05. In practice, taxpayers often file writ petitions when departments overlook this.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the two-tier interest doctrine?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The two-tier doctrine emerges from Delhi HC in Bansal International and Bombay HC in Lupin Limited. Where a refund is initially rejected and later allowed by an appellate forum, two distinct delay periods exist. The first period attracts 6% interest from day 61 of original application until day 60 of post-appeal application. The second period attracts 9% interest from day 61 of post-appeal application until refund credit. The doctrine ensures full compensation across the entire timeline.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Are weekends and holidays included?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. Interest is computed on a daily basis as simple interest using the formula: Refund Amount × Rate × Days ÷ 365. All calendar days are counted including Saturdays, Sundays, and gazetted holidays. The day of application receipt is excluded from the 60-day count, and the day of refund credit is included in the delay period. The Delhi High Court has consistently rejected attempts to exclude administrative delay periods from the count, including delays caused by departmental investigations or red-flagging.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is provisional refund under Section 54(6)?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 54(6) read with Rule 91 prescribes that ninety percent of refund claimed on zero-rated supplies (exports) shall be granted on a provisional basis within seven days of generating acknowledgment in Form GST RFD-02. The provisional order is issued in Form GST RFD-04. Notification 13/2025-Central Tax under GST 2.0 reaffirmed this seven-day timeline. The remaining ten percent is released after final scrutiny. Provisional timing does not affect the 60-day clock for Section 56 interest.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Which forms are involved in GST refund?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The refund process uses several forms. Form GST RFD-01 is the refund application filed by the taxpayer. RFD-02 is the acknowledgment generated by the system. RFD-03 is the deficiency memo issued for incomplete applications. RFD-04 is the provisional refund order under Section 54(6). RFD-05 is the payment advice through which refund and interest are credited. RFD-06 is the final refund sanction order. Rule 94 specifically governs sanction of interest on delayed refunds, which must accompany the principal refund through RFD-05.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can refund interest be denied for departmental delays?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">No. Courts have consistently held that administrative delay does not justify denial of statutory interest. In Raghav Ventures (2024), Delhi HC directed payment of 6% interest despite department citing delays from risky-exporter red-flagging. Section 56 contains no exclusion for departmental investigation periods. Circular 16/2019 mandates investigation completion within 30 days. Periods where the applicant fails to respond to deficiency memos or provides invalid bank details may be excluded under Rule 94, but pure departmental inaction is not a valid exclusion.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does the 60-day clock interact with deficiency memos?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">If the proper officer issues a deficiency memo in Form GST RFD-03 within fifteen days of receipt, the original application is treated as not filed. The taxpayer must file a fresh application. The 60-day clock restarts from the fresh application date. Mere allegation of deficiency without RFD-03 within fifteen days does not stop the original clock. Late deficiency memos issued to reset the timeline have been judicially scrutinised and limited to genuinely deficient applications.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What types of refunds attract Section 56 interest?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">All refunds under Section 54 attract Section 56 interest if delayed. Common categories include zero-rated supply refunds (exports, SEZ supplies) under Section 16 IGST, inverted duty structure refunds (where input GST exceeds output GST), excess balance in electronic cash ledger, deemed-export refunds, refund of tax paid in error, and pre-deposit refunds under Sections 107(6) and 112(8) on appeal disposal. The 9% rate specifically applies when refund flows from appellate or judicial orders that have attained finality.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What did the Supreme Court hold in Willowood Chemicals?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">In Union of India vs Willowood Chemicals (2022), the Supreme Court reversed Gujarat HC's grant of 9% interest on delayed IGST refunds. The apex court held that where delay is administrative and not pursuant to an appellate order, the statutory rate is 6% under Section 56's principal provision. The 9% rate cannot be invoked merely because delay was lengthy or caused commercial hardship. The judgment narrowed 9% scope to refunds genuinely from finality orders, settling earlier divergent High Court positions.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What changed under GST 2.0 reforms?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Notification 13/2025-Central Tax dated 17 September 2025, issued post the 56th GST Council meeting, reinforced refund timelines under GST 2.0 reforms. Rule 91(2) was amended to mandate that the provisional refund order in Form GST RFD-04 be issued within seven days of acknowledgment in Form RFD-02. Notification 14/2025 introduced restrictions on provisional refunds for non-Aadhaar-authenticated taxpayers and for suppliers of pan masala, tobacco, and essential oils. Section 56 interest framework remained unchanged; the 6% and 9% rates continue.</div></div>
    </div>
</section>

<div class="office-strip">
    <div class="offices">Pune | Mumbai | Delhi | Gurugram</div>
    <div class="trust">25,000+ Businesses Trust Us</div>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
(function(){
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    function setupToggleGroup(id, onChange) {
        const group = document.getElementById(id);
        if (!group) return;
        group.addEventListener('click', function(e) {
            const btn = e.target.closest('.toggle-btn');
            if (!btn || !group.contains(btn)) return;
            group.querySelectorAll('.toggle-btn').forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
            if (onChange) onChange();
        });
    }
    function getActiveValue(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }
    function v(id) {
        const el = document.getElementById(id);
        if (!el || el.value === '') return null;
        const val = parseINR(el.value);
        return isNaN(val) ? null : val;
    }
    function dateVal(id) {
        const el = document.getElementById(id);
        if (!el || !el.value) return null;
        return new Date(el.value + 'T00:00:00');
    }
    function fmtDate(d) {
        if (!d) return '—';
        return d.toLocaleDateString('en-IN', {day: '2-digit', month: 'short', year: 'numeric'});
    }
    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 2, minimumFractionDigits: 2});
    }
    function fmtINRWhole(num) {
        if (num === undefined || num === null || isNaN(num)) return '0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function daysBetween(d1, d2) {
        // Returns d2 - d1 in calendar days (d2 included, d1 excluded approach for "from day after")
        const ms = d2.getTime() - d1.getTime();
        return Math.round(ms / (1000 * 60 * 60 * 24));
    }
    function addDays(d, n) {
        const result = new Date(d);
        result.setDate(result.getDate() + n);
        return result;
    }
    function today() {
        const d = new Date();
        d.setHours(0, 0, 0, 0);
        return d;
    }

    function compute() {
        const mode = getActiveValue('modeGroup');

        if (mode === 'general') {
            const amount = v('g_amount');
            const appDate = dateVal('g_appDate');
            let refundDate = dateVal('g_refundDate');
            const refundType = document.getElementById('g_refundType').value;

            if (amount === null || amount <= 0) { alert('Please enter a valid refund amount.'); return; }
            if (!appDate) { alert('Please enter the date of application receipt.'); return; }
            if (!refundDate) refundDate = today();
            if (refundDate < appDate) { alert('Refund date cannot be before application date.'); return; }

            const dayOf60Expiry = addDays(appDate, 60); // 60 days after application date
            const interestStartDate = addDays(appDate, 61); // Day 61 — first day interest accrues

            if (refundDate <= dayOf60Expiry) {
                // No interest — within 60 days
                renderNoInterest({
                    mode: 'general', amount: amount, appDate: appDate, refundDate: refundDate,
                    dayOf60Expiry: dayOf60Expiry, refundType: refundType
                });
                return;
            }

            // Compute days from day 61 until refund date (inclusive)
            const days = daysBetween(dayOf60Expiry, refundDate);
            const rate = 0.06;
            const interest = (amount * rate * days) / 365;

            renderResult({
                mode: 'general', amount: amount, appDate: appDate, refundDate: refundDate,
                dayOf60Expiry: dayOf60Expiry, interestStartDate: interestStartDate,
                days: days, rate: rate, interest: interest, refundType: refundType,
                tiers: [{label: 'General Delay (S.56 principal)', rate: 6, period: fmtDate(interestStartDate) + ' → ' + fmtDate(refundDate), days: days, interest: interest}]
            });
        } else {
            // Appellate two-tier
            const amount = v('a_amount');
            const origDate = dateVal('a_origAppDate');
            const postAppDate = dateVal('a_postAppealDate');
            let refundDate = dateVal('a_refundDate');

            if (amount === null || amount <= 0) { alert('Please enter a valid refund amount.'); return; }
            if (!origDate) { alert('Please enter the original application date.'); return; }
            if (!postAppDate) { alert('Please enter the post-appeal application date.'); return; }
            if (!refundDate) refundDate = today();
            if (postAppDate < origDate) { alert('Post-appeal application cannot be before original application.'); return; }
            if (refundDate < postAppDate) { alert('Refund date cannot be before post-appeal application date.'); return; }

            const orig60Expiry = addDays(origDate, 60);
            const orig61 = addDays(origDate, 61);
            const post60Expiry = addDays(postAppDate, 60);
            const post61 = addDays(postAppDate, 61);

            // Tier 1: 6% from orig61 to post60Expiry (or refund date if earlier)
            // Tier 2: 9% from post61 to refund date

            let tier1Days = 0, tier1Interest = 0, tier1Period = '';
            let tier2Days = 0, tier2Interest = 0, tier2Period = '';

            // Tier 1
            const tier1End = (refundDate < post60Expiry) ? refundDate : post60Expiry;
            if (orig61 <= tier1End) {
                tier1Days = daysBetween(orig60Expiry, tier1End);
                if (tier1Days > 0) {
                    tier1Interest = (amount * 0.06 * tier1Days) / 365;
                    tier1Period = fmtDate(orig61) + ' → ' + fmtDate(tier1End);
                }
            }

            // Tier 2
            if (refundDate > post60Expiry) {
                tier2Days = daysBetween(post60Expiry, refundDate);
                if (tier2Days > 0) {
                    tier2Interest = (amount * 0.09 * tier2Days) / 365;
                    tier2Period = fmtDate(post61) + ' → ' + fmtDate(refundDate);
                }
            }

            const totalInterest = tier1Interest + tier2Interest;
            const totalDays = tier1Days + tier2Days;

            if (totalInterest === 0) {
                renderNoInterest({
                    mode: 'appellate', amount: amount, origDate: origDate, postAppDate: postAppDate,
                    refundDate: refundDate, post60Expiry: post60Expiry
                });
                return;
            }

            const tiers = [];
            if (tier1Days > 0) tiers.push({label: 'Tier 1 — Original delay', rate: 6, period: tier1Period, days: tier1Days, interest: tier1Interest});
            if (tier2Days > 0) tiers.push({label: 'Tier 2 — Post-appeal delay', rate: 9, period: tier2Period, days: tier2Days, interest: tier2Interest});

            renderResult({
                mode: 'appellate', amount: amount, origDate: origDate, postAppDate: postAppDate,
                refundDate: refundDate, days: totalDays, interest: totalInterest,
                orig61: orig61, post61: post61, post60Expiry: post60Expiry,
                tiers: tiers
            });
        }
    }

    function renderNoInterest(r) {
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card notentitled';
        document.getElementById('verdictHeadline').textContent = 'No Interest Payable — Within 60-Day Window';
        document.getElementById('interestVal').innerHTML = '<span class="interest-mega-prefix">₹</span>0.00';
        const pill = document.getElementById('verdictPill');
        pill.style.background = 'var(--text-muted)';
        pill.textContent = '— Within statutory window';

        const adv = document.getElementById('advisoryBanner');
        adv.className = 'info-banner success';
        if (r.mode === 'general') {
            adv.innerHTML = '<strong>Refund credited within 60 days.</strong> No interest is payable under Section 56. The 60-day window expired on ' + fmtDate(r.dayOf60Expiry) + ' and refund credit on ' + fmtDate(r.refundDate) + ' falls within the statutory window.';
        } else {
            adv.innerHTML = '<strong>Post-appeal refund credited within 60 days.</strong> No interest is payable under Section 56 because the post-appeal application 60-day window (expiring ' + fmtDate(r.post60Expiry) + ') was not breached.';
        }

        document.getElementById('tierTable').style.display = 'none';
        document.getElementById('breakdownGrid').innerHTML = '';
        document.getElementById('basisText').innerHTML = '<strong>60-day rule:</strong> Section 56 interest accrues only when refund is delayed beyond 60 days from application receipt. In this case, the refund was credited within the statutory window — no statutory interest entitlement arises.';

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    function renderResult(r) {
        // Verdict card
        const card = document.getElementById('verdictCard');
        const pill = document.getElementById('verdictPill');
        if (r.interest > 100000) {
            card.className = 'verdict-card large';
            pill.style.background = 'var(--accent)';
            pill.style.color = 'var(--primary-dark)';
            pill.textContent = '₹1L+ Entitlement';
        } else {
            card.className = 'verdict-card entitled';
            pill.style.background = 'var(--success)';
            pill.style.color = '#fff';
            pill.textContent = '✓ Entitled';
        }
        document.getElementById('verdictHeadline').textContent = (r.mode === 'general' ? 'Section 56 Interest @ 6% p.a.' : 'Two-Tier Interest (6% + 9%) per Bansal Intl');
        document.getElementById('interestVal').innerHTML = '<span class="interest-mega-prefix">₹</span>' + fmtINRWhole(Math.round(r.interest));

        // Tier table
        const table = document.getElementById('tierTable');
        const tbody = document.getElementById('tierTableBody');
        tbody.innerHTML = '';
        r.tiers.forEach(function(t) {
            const tr = document.createElement('tr');
            tr.innerHTML = '<td><strong>' + t.label + '</strong></td><td>' + t.rate + '% p.a.</td><td>' + t.period + '</td><td>' + t.days + '</td><td class="amt" style="text-align:right;">' + fmtINR(t.interest) + '</td>';
            tbody.appendChild(tr);
        });
        // Total row
        const trTotal = document.createElement('tr');
        trTotal.className = 'total';
        trTotal.innerHTML = '<td colspan="3"><strong>TOTAL INTEREST</strong></td><td>' + r.days + '</td><td class="amt" style="text-align:right;">' + fmtINR(r.interest) + '</td>';
        tbody.appendChild(trTotal);
        table.style.display = '';

        // Breakdown grid
        const grid = document.getElementById('breakdownGrid');
        grid.innerHTML = '';
        const items = [
            {label: 'Refund Amount', value: '₹' + fmtINRWhole(r.amount), sub: 'Principal sanctioned', highlight: false},
            {label: 'Interest', value: '₹' + fmtINRWhole(Math.round(r.interest)), sub: 'Statutory under S.56', highlight: true},
            {label: 'Total Receivable', value: '₹' + fmtINRWhole(Math.round(r.amount + r.interest)), sub: 'Refund + Interest', highlight: false},
            {label: 'Total Delay', value: r.days + ' days', sub: 'Beyond 60-day window', highlight: false}
        ];
        items.forEach(function(it) {
            const c = document.createElement('div');
            c.className = 'breakdown-card' + (it.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="breakdown-label">' + it.label + '</div><div class="breakdown-value">' + it.value + '</div><div class="breakdown-sub">' + it.sub + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const adv = document.getElementById('advisoryBanner');
        if (r.mode === 'general') {
            if (r.days > 365) {
                adv.className = 'info-banner danger';
                adv.innerHTML = '<strong>Severe delay — over one year.</strong> Refund delayed by ' + r.days + ' days beyond the 60-day window. Per Raghav Ventures (Delhi HC, 2024), 6% interest is statutory and automatic. Strong case for writ petition before jurisdictional High Court if department resists payment. Document the RFD-02 acknowledgment date carefully.';
            } else if (r.days > 90) {
                adv.className = 'info-banner warn';
                adv.innerHTML = '<strong>Significant administrative delay.</strong> Refund delayed by ' + r.days + ' days beyond the 60-day window. Section 56 interest at 6% per annum is statutory. File a follow-up representation citing Circular 125/44/2019-GST, which clarifies that interest is to be credited along with the refund through Form RFD-05.';
            } else {
                adv.className = 'info-banner info';
                adv.innerHTML = '<strong>Statutory interest entitlement under Section 56(1).</strong> Delay of ' + r.days + ' days beyond the 60-day window. Interest at 6% per annum is automatic and payable along with the principal refund through Form GST RFD-05 under Rule 94 of the CGST Rules.';
            }
        } else {
            adv.className = 'info-banner warn';
            adv.innerHTML = '<strong>Two-tier interest computation per Bansal International.</strong> Tier 1 (6%) covers original administrative delay; Tier 2 (9%) covers post-appellate delay. Total interest of ₹' + fmtINRWhole(Math.round(r.interest)) + ' on refund of ₹' + fmtINRWhole(r.amount) + '. Departments often resist 9% computation — Lupin Limited (Bombay HC) and Bansal International (Delhi HC) provide direct precedent for writ petition if denied.';
        }

        // Basis
        let basis = '';
        if (r.mode === 'general') {
            basis = '<strong>Section 56(1):</strong> If tax ordered to be refunded under Section 54(5) is not refunded within 60 days from receipt of application under Section 54(1), interest at 6% p.a. is payable.';
            basis += '<br><br><strong>Computation:</strong> ₹' + fmtINRWhole(r.amount) + ' × 6% × ' + r.days + ' days ÷ 365 = <strong>₹' + fmtINRWhole(Math.round(r.interest)) + '</strong>';
            basis += '<br><br><strong>Timeline:</strong> Application receipt ' + fmtDate(r.appDate) + ' → 60-day window expires ' + fmtDate(r.dayOf60Expiry) + ' → Interest accrues from ' + fmtDate(r.interestStartDate) + ' → Refund credited ' + fmtDate(r.refundDate) + '.';
            basis += '<br><br><strong>Form &amp; Rule:</strong> Interest must be credited along with refund through Form GST RFD-05 under Rule 94 of the CGST Rules 2017. Per <em>Raghav Ventures</em> (Delhi HC, 2024), entitlement is automatic — no separate claim required.';
        } else {
            basis = '<strong>Two-tier framework — Bansal International / Lupin Limited:</strong>';
            basis += '<br><br><strong>Tier 1 (6%) — Original administrative delay:</strong> From ' + fmtDate(r.orig61) + ' (Day 61 of original application) to ' + fmtDate(r.post60Expiry) + ' (Day 60 of post-appeal application).';
            basis += '<br><strong>Tier 2 (9%) — Post-appellate delay:</strong> From ' + fmtDate(r.post61) + ' (Day 61 of post-appeal application) to ' + fmtDate(r.refundDate) + ' (refund credit date).';
            basis += '<br><br><strong>Authority:</strong> S.56 principal provision (6%) + S.56 first proviso (9%). Notification 13/2017-Central Tax fixes both rates. Bansal International (Delhi HC) and Lupin Limited (Bombay HC, Goa) confirm two-tier methodology.';
            basis += '<br><br><strong>Total entitlement:</strong> ₹' + fmtINRWhole(Math.round(r.interest)) + ' (statutory, automatic, payable through Form RFD-05).';
        }
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    setupToggleGroup('modeGroup', function() {
        const mode = getActiveValue('modeGroup');
        document.getElementById('generalBlock').classList.toggle('active', mode === 'general');
        document.getElementById('appellateBlock').classList.toggle('active', mode === 'appellate');
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        ['g_amount','g_appDate','g_refundDate','a_amount','a_origAppDate','a_postAppealDate','a_refundDate'].forEach(function(id) {
            const el = document.getElementById(id);
            if (el) el.value = '';
        });
        document.getElementById('g_refundType').value = 'zero_rated';
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('input').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnCalc').click();
            }
        });
    });

    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) {
            if (s.offsetTop <= scrollPos) active = s.id;
        });
        tocLinks.forEach(function(l) {
            l.classList.toggle('active', l.getAttribute('href') === '#' + active);
        });
    }
    window.addEventListener('scroll', updateActive, {passive: true});
    updateActive();
})();
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
