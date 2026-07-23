@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>GST Refund Rejection Analyzer | RFD-06 Remedy Tool</title>
    <meta name="description" content="GST Refund Rejection Analyzer: a decision tree on your RFD-06 grounds covering appeal vs writ vs refile and the Section 107 pre-deposit. Free CA tool, instant.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/refund-rejection-analyzer/">
    <meta property="og:title" content="GST Refund Rejection Analyzer — RFD-06 Remedy Tool">
    <meta property="og:description" content="Decision-tree tool to analyze GST refund rejection grounds and identify the right remedy — refile, appeal under Section 107, or writ. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/refund-rejection-analyzer">
    <meta property="og:image" content="/tools/og/refund-rejection-analyzer.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund Rejection Analyzer — RFD-06 Remedy Tool">
    <meta name="twitter:description" content="Decision-tree on GST refund rejection grounds. Refile, appeal, or writ. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/refund-rejection-analyzer.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "GST Refund Rejection Analyzer (RFD-06 Remedy Tool)",
      "description": "GST Refund Rejection Analyzer is a decision-tree tool that analyzes the grounds on which a GST refund application has been rejected through Form GST RFD-06 and identifies the most appropriate remedy among four options: refile fresh application within remaining limitation, file first appeal in Form GST APL-01 under Section 107 of the CGST Act 2017 with 10 percent pre-deposit, escalate to the GST Appellate Tribunal under Section 112 with additional 20 percent pre-deposit, or pursue writ jurisdiction under Article 226 of the Constitution before the relevant High Court. The tool branches through 14 common rejection grounds: time-bar under Section 54(1), drawback or notification benefit availed under Rule 96(10), exported goods subject to export duty under Section 54(15) including the Finance Act No 2 of 2024 amendment, output supplies that are nil-rated or fully exempt blocking inverted duty refund, same goods at different rates per Circular 135/05/2020-GST as amended by Circular 173/05/2022-GST, output goods or services in Notification 5/2017-Central Tax (Rate) excluded list, ITC mismatch and GSTR reconciliation discrepancies, documentation deficiency where Form GST RFD-03 was not cured, computational errors in Rule 89(4) or Rule 89(5) refund formula, wrong-category classification by the proper officer, unjust enrichment burden challenges, place of supply disputes, refunds below the one thousand rupee threshold under Rule 89(1), and LUT not being in place during the relevant export period. Each verdict provides sustainability assessment across four bands (sustained, curable, appealable, writ-friendly), specific remedy recommendation with limitation period and pre-deposit computation, applicable statutory sections, key case law including Jharkhand High Court 2025 ruling on pre-deposit vested right Reva Giant Implex Delhi High Court on portal glitches Ascent Meditech Supreme Court 2025 on curative amendment retrospectivity and VKC Footsteps Supreme Court 2021 on input services exclusion. Suitable for GST practitioners exporters with rejected refund claims service providers managing post-rejection strategy and CA firms advising clients on appeal versus refile decisions.",
      "url": "/tools/refund-rejection-analyzer",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
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
        {"@type": "ListItem", "position": 3, "name": "GST Refund Rejection Analyzer", "item": "/tools/refund-rejection-analyzer"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Form GST RFD-06?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form GST RFD-06 is the final Refund Sanction or Rejection Order issued by the proper officer after scrutinizing a refund application filed in Form GST RFD-01. The order specifies the amount sanctioned, the amount rejected, and reasons for rejection. RFD-06 is the operative document for any appeal or writ proceedings. It is preceded by an RFD-08 show-cause notice, to which the taxpayer must reply via RFD-09 within fifteen days before final order."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time limit to appeal a refund rejection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The first appeal under Section 107 of the CGST Act 2017 must be filed within three months from the date of communication of the rejection order in Form GST RFD-06. The Appellate Authority may condone delay up to one additional month if sufficient cause is shown. Beyond four months, appeals are usually not accepted. The appeal is filed in Form GST APL-01 on the GST Portal along with the grounds in Form GST APL-01A and required pre-deposit."
          }
        },
        {
          "@type": "Question",
          "name": "What is the pre-deposit for a refund appeal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 107(6) requires a pre-deposit of 10 percent of the disputed tax, capped at twenty-five crore rupees per Finance Act 2024 (reduced from fifty crore). It is paid through the electronic cash or credit ledger before filing APL-01. For penalty-only disputes, 10 percent applies on the disputed penalty. For GSTAT escalation under Section 112, an additional 20 percent applies, capped at fifty crore rupees."
          }
        },
        {
          "@type": "Question",
          "name": "When should I refile instead of appealing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Refile when the rejection is due to a curable defect such as missing documents, wrong category selection, computation error, or GSTR reconciliation gaps. Refile is allowed if you are within the two-year limitation under Section 54(1) and the deficiency memo Rule 90(3) protection preserves your original filing date. Refile is faster, cheaper, and avoids litigation. Appeal when rejection is on substantive grounds disputing eligibility — drawback bar, export duty, IDS exclusions, time-bar interpretation, or the officer applies wrong law."
          }
        },
        {
          "@type": "Question",
          "name": "When is a writ petition appropriate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Writ jurisdiction under Article 226 is appropriate where the alternative appeal remedy is inadequate, ineffective, or where there is a violation of natural justice or fundamental rights. Common writ-friendly grounds include GST Portal technical glitches per Reva Giant Implex Delhi HC, jurisdictional errors, departmental reliance on outside material not mentioned in the SCN per Patna HC, deficiency-memo rejection applying wrong limitation per Jharkhand HC 2025, and Article 14 violations."
          }
        },
        {
          "@type": "Question",
          "name": "Can I refile if the deficiency memo (RFD-03) was issued?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. When Form GST RFD-03 deficiency memo is issued within fifteen days of the original filing, the original RFD-01 application is treated as not filed under Rule 90(3). The taxpayer must refile a fresh RFD-01 after curing deficiencies. Importantly, the second proviso to Section 54(1) preserves the original filing date for limitation purposes — the period from filing to deficiency communication is excluded from the two-year limitation. This protects taxpayers from time-bar where deficiency memo is delayed."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Reva Giant Implex ruling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Reva Giant Implex LLP vs Union of India was decided by the Delhi High Court setting aside a refund appeal rejection that arose from GST Portal technical glitches. The court held that where the petitioner submitted required digital data online but the system did not process it correctly, the rejection cannot stand. The judgment is widely cited to challenge rejections caused by GSTN technical issues that are demonstrably system-side rather than taxpayer-side."
          }
        },
        {
          "@type": "Question",
          "name": "How do I appeal if my refund was rejected partially?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When RFD-06 sanctions part of the refund and rejects part, you can appeal only the rejected portion. The pre-deposit is computed on the disputed amount only — not the full original claim. File APL-01 specifying the rejected amount as disputed tax and pay 10 percent pre-deposit on that. The sanctioned portion is processed through RFD-05 payment advice separately. Notification 11/2025 also allows partial appeal withdrawal."
          }
        },
        {
          "@type": "Question",
          "name": "Is pre-deposit refundable on success?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The pre-deposit paid under Section 107(6) is refundable on favourable disposal of the appeal. Section 115 provides for automatic refund with interest at 6 percent per annum from the date of payment. Recent Jharkhand High Court ruling in 2025 held the pre-deposit refund is a vested right that cannot be subjected to Section 54 two-year limitation since pre-deposit is not tax but a statutory deposit. Practitioners should preserve pre-deposit challan and file refund as a routine step post-appellate success."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file appeal without paying pre-deposit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 107(6) mandates pre-deposit and the GST Portal will not accept APL-01 without it. Some High Courts have permitted appeal filing without pre-deposit in extreme financial-hardship cases or where the underlying demand is patently illegal — but these are exceptional. The standard rule is no pre-deposit equals no appeal. For very large disputed amounts where the 10 percent is unaffordable, practitioners sometimes pursue parallel writ petition challenging the rejection directly under Article 226 to avoid the pre-deposit requirement."
          }
        },
        {
          "@type": "Question",
          "name": "What if rejection is due to ITC mismatch with GSTR-2B?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITC mismatch rejections are typically curable rather than appealable. The recommended approach is to identify the specific invoices causing mismatch, coordinate with suppliers to file correctly in their GSTR-1, wait for the correction to flow to GSTR-2B, and refile RFD-01 once reconciled. CBIC Circular 183/15/2022-GST and subsequent clarifications protect bona fide taxpayers from supplier defaults — these may be cited in appeal where supplier cannot be brought into compliance. Maintain reconciliation working as primary evidence."
          }
        },
        {
          "@type": "Question",
          "name": "Does the Ascent Meditech ruling help old refund claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The Supreme Court in Ascent Meditech Ltd (2025) held that the amendment to Rule 89(5) under Notification 14/2022 — which proportionately accounts for input-services ITC in payment of output tax — is curative and applies retrospectively. This benefits older inverted duty refund claims rejected using the pre-amendment formula. Practitioners with rejected IDS claims for periods before July 2022 should examine refile or appeal options."
          }
        },
        {
          "@type": "Question",
          "name": "What if I missed the 3-month appeal deadline?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The First Appellate Authority has limited power under Section 107(4) to condone delay up to one additional month if sufficient cause is shown — illness, unavoidable absence, or portal access issues. Beyond four months total, the appellate route is closed. The remaining option is writ jurisdiction under Article 226 alleging natural-justice breach, jurisdictional error, or Article 14 violation. High Courts are reluctant to entertain writs as substitute for time-barred appeals."
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

        /* Decision tree */
        .step-meta { display: flex; align-items: center; gap: 16px; padding: 14px 18px; background: var(--surface-alt); border-radius: var(--radius); margin-bottom: 20px; flex-wrap: wrap; }
        .step-counter { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; }
        .step-path { font-size: 12px; color: var(--text-muted); flex: 1 1 100%; line-height: 1.5; }
        .step-path strong { color: var(--primary); font-weight: 600; }
        @media (min-width: 700px) { .step-path { flex: 1 1 auto; } }

        .question-text { font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; margin-bottom: 8px; }
        .question-context { font-size: 14px; color: var(--text-secondary); margin-bottom: 20px; line-height: 1.6; }
        .options { display: grid; grid-template-columns: 1fr; gap: 10px; }
        .option-btn { background: var(--surface); border: 2px solid var(--border); border-radius: var(--radius); padding: 16px 20px; font-family: var(--font-body); font-size: 15px; font-weight: 500; color: var(--text); text-align: left; cursor: pointer; transition: all 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.05); }
        .option-btn * { pointer-events: none; }
        .option-btn:hover { border-color: var(--primary-light); background: #F0FDFA; }
        .option-btn .opt-label { font-weight: 600; color: var(--primary-dark); margin-bottom: 4px; display: block; }
        .option-btn .opt-sub { font-size: 13px; color: var(--text-muted); display: block; line-height: 1.5; }
        .option-btn:hover .opt-label { color: var(--primary); }

        .nav-row { display: flex; gap: 12px; margin-top: 22px; }
        .nav-btn { padding: 10px 18px; border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; border: 1px solid var(--border); background: transparent; color: var(--text-secondary); -webkit-tap-highlight-color: transparent; }
        .nav-btn:hover { background: var(--surface); color: var(--primary); }
        .nav-btn:disabled { opacity: 0.4; cursor: not-allowed; }

        /* Verdict — 4 categories: sustained, curable, appealable, writ */
        .verdict-card { border-radius: var(--radius-lg); padding: 28px; border-left: 6px solid; margin-bottom: 22px; }
        .verdict-card.sustained { background: linear-gradient(135deg, #FEE2E2 0%, #FECACA 100%); border-left-color: var(--danger); }
        .verdict-card.curable { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.appealable { background: linear-gradient(135deg, #FEF3C7 0%, #ff8347 100%); border-left-color: var(--accent); }
        .verdict-card.writ { background: linear-gradient(135deg, #DBEAFE 0%, #BFDBFE 100%); border-left-color: var(--info); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 8px; }
        .verdict-headline { font-size: 24px; font-weight: 700; color: var(--primary-dark); line-height: 1.3; margin-bottom: 6px; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: #fff; margin-bottom: 16px; }
        .verdict-pill.sustained { background: var(--danger); }
        .verdict-pill.curable { background: var(--success); }
        .verdict-pill.appealable { background: var(--accent); color: var(--primary-dark); }
        .verdict-pill.writ { background: var(--info); }
        .verdict-summary { font-size: 15px; color: var(--text-secondary); line-height: 1.7; margin-bottom: 16px; }

        .verdict-meta { background: var(--card); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 16px; }
        .verdict-meta-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px; }
        .verdict-meta-value { font-size: 14px; color: var(--text); font-weight: 600; }

        .verdict-conditions, .verdict-actions { background: var(--card); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 16px; }
        .verdict-conditions h4, .verdict-actions h4 { font-size: 13px; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px; }
        .verdict-conditions ul, .verdict-actions ol { margin-left: 18px; }
        .verdict-conditions li, .verdict-actions li { font-size: 14px; color: var(--text-secondary); padding: 4px 0; line-height: 1.6; }
        .verdict-actions ol { counter-reset: action-counter; list-style: none; margin-left: 0; }
        .verdict-actions li { counter-increment: action-counter; padding-left: 32px; position: relative; padding-bottom: 8px; }
        .verdict-actions li::before { content: counter(action-counter); position: absolute; left: 0; top: 4px; width: 22px; height: 22px; border-radius: 50%; background: var(--primary); color: #fff; font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center; }

        .pre-deposit-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); margin: 12px 0; }
        .pre-deposit-box h5 { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .pre-deposit-box p { font-size: 13px; color: rgba(255,255,255,0.9); margin: 4px 0; line-height: 1.6; }
        .pre-deposit-box strong { color: var(--accent-light); font-weight: 700; }

        .restart-btn { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 15px; font-weight: 700; cursor: pointer; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); }
        .restart-btn:hover { background: var(--primary-light); }

        /* Content sections */
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
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .callout.danger { background: #FEF2F2; border-left-color: var(--danger); }
        .callout.danger p { color: #991B1B; }
        .callout.danger strong { color: #7F1D1D; }

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
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .question-text { font-size: 17px; }
            .verdict-headline { font-size: 20px; }
            .option-btn { padding: 14px 16px; font-size: 14px; }
            .verdict-card { padding: 22px; }
        }
    
/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
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
        <a href="#calculator">Analyzer</a>
        <a href="#framework">Framework</a>
        <a href="#grounds">Rejection Grounds</a>
        <a href="#appeal">Appeal Process</a>
        <a href="#case-law">Case Law</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    GST Refund Rejection Analyzer
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>GST Refund Rejection <span>Analyzer</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20GST%20Refund%20Rejection%20Analyzer.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Rejection%20Analyzer%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20GST%20Refund%20Rejection%20Analyzer.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Got a Form GST <strong>RFD-06 rejection order</strong>? This decision-tree tool walks through the 14 most common rejection grounds — time-bar, drawback bar, export duty, IDS exclusions, GSTR mismatch, deficiency memo, computation errors, place-of-supply disputes, LUT issues, and more — and identifies the right remedy: <strong>refile</strong> within remaining limitation, file <strong>first appeal</strong> in APL-01 under Section 107 with 10% pre-deposit, escalate to <strong>GSTAT</strong> under Section 112, or pursue <strong>writ jurisdiction</strong> under Article 226. Each verdict cites statutory section, limitation period, pre-deposit calculation, and key case law including the recent <em>Jharkhand HC 2025</em> ruling on pre-deposit refund and <em>Reva Giant Implex</em> portal-glitch jurisprudence.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Analyze Your Rejection &amp; Find the Right Remedy</h2>
            <p class="calc-intro">Answer a few questions about the rejection grounds in your Form GST RFD-06. The tool branches through statutory framework, applies recent case law, and recommends the optimal remedy: refile, appeal, or writ.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this tool. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="step-meta" id="stepMeta">
                <div class="step-counter" id="stepCounter">Step 1</div>
                <div class="step-path" id="stepPath">Start</div>
            </div>

            <div id="treeContainer"></div>
        
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — GST Refund Rejection Analyzer validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20GST%20Refund%20Rejection%20Analyzer.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Rejection%20Analyzer%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20GST%20Refund%20Rejection%20Analyzer%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>

        <section class="content-section" id="framework">
            <h2>Refund Rejection Framework — Forms, Timeline, Remedies</h2>

            <p>When a refund application filed in <a href="https://www.gst.gov.in" target="_blank" rel="noopener">Form GST RFD-01 on the GST Portal</a> is rejected, the proper officer issues the rejection through Form GST RFD-06. The process is governed by Rule 92 of the CGST Rules read with Section 54 of the CGST Act 2017, with detailed procedural guidance issued by <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a>. Every rejection must follow due process — <strong>show-cause notice in RFD-08, opportunity of hearing, and reasoned order in RFD-06</strong>. Departures from this framework are themselves grounds for appeal or writ.</p>

            <h3>The Rejection Lifecycle</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>Form</th><th>Stage</th><th>Timeline</th><th>Action Required</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>RFD-01</strong></td><td>Initial refund application</td><td>Within 2 years from relevant date</td><td>Filed by taxpayer on GST Portal</td></tr>
                    <tr><td><strong>RFD-02</strong></td><td>Acknowledgment</td><td>15 days from RFD-01</td><td>Auto-generated by system</td></tr>
                    <tr><td><strong>RFD-03</strong></td><td>Deficiency memo</td><td>15 days from RFD-01</td><td>Cure deficiencies, refile RFD-01</td></tr>
                    <tr><td><strong>RFD-04</strong></td><td>Provisional refund order</td><td>7 days from RFD-02</td><td>90% of refund credited (zero-rated cases)</td></tr>
                    <tr><td><strong>RFD-08</strong></td><td>Show-cause notice</td><td>Before RFD-06 rejection</td><td>Reply via RFD-09 within 15 days</td></tr>
                    <tr><td><strong>RFD-09</strong></td><td>Reply to SCN</td><td>15 days from RFD-08</td><td>Submit reasoning + supporting documents</td></tr>
                    <tr><td><strong>RFD-06</strong></td><td>Final sanction/rejection order</td><td>60 days from complete RFD-01</td><td>Operative document for appeal</td></tr>
                    <tr><td><strong>RFD-05</strong></td><td>Payment advice</td><td>After RFD-06 sanction</td><td>Bank credit by Centre</td></tr>
                    <tr><td><strong>RFD-07</strong></td><td>Withhold order</td><td>Anytime per Section 54(10)/(11)</td><td>File reply; possible appeal</td></tr>
                </tbody>
            </table>

            <h3>Four Routes to Remedy</h3>
            <ul>
                <li><strong>Refile</strong> — For curable defects (missing docs, computation, GSTR mismatch). Under Rule 90(3), original filing date is preserved if RFD-03 was issued within 15 days. Available only if within remaining 2-year limitation.</li>
                <li><strong>First Appeal under Section 107</strong> — File Form GST APL-01 within 3 months of order communication. Pre-deposit 10% of disputed tax (capped at ₹25 Cr per Finance Act 2024). Heard by First Appellate Authority. Order in Form GST APL-04.</li>
                <li><strong>GSTAT under Section 112</strong> — Escalate APL-04 within 3 months. Additional 20% pre-deposit (capped at ₹50 Cr). GST Appellate Tribunal benches now operational.</li>
                <li><strong>Writ Petition under Article 226</strong> — High Court jurisdiction for jurisdictional errors, portal failures, natural-justice breaches, Article 14 violations. No pre-deposit but discretionary.</li>
            </ul>

            <div class="callout warn">
                <p><strong>Don't miss the 3-month appeal clock.</strong> Section 107(4) condones delay only up to 1 additional month with sufficient cause. Beyond 4 months total, the appeal route closes. Diary the appeal deadline immediately on receiving RFD-06.</p>
            </div>
        </section>

        <section class="content-section" id="grounds">
            <h2>14 Common Rejection Grounds</h2>

            <p>Departments routinely reject refund claims on a finite set of statutory grounds — many overlapping with <a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI</a> Master Direction requirements on export remittance. Knowing the ground determines the right remedy. Below is the practitioner taxonomy used in the analyzer above.</p>

            <h3>Substantive Eligibility Grounds (Hard to Cure)</h3>
            <ol>
                <li><strong>Time-bar (Section 54(1))</strong> — Filed beyond 2 years from relevant date. Test COVID extension under Notification 13/2022.</li>
                <li><strong>Drawback or Notification benefit availed (Rule 96(10))</strong> — IGST refund blocked for double-benefit. Test whether drawback was higher-rate (with central tax) or customs-only.</li>
                <li><strong>Export duty on goods (Section 54(15))</strong> — Both ITC and (post FA No 2 of 2024) IGST refund blocked.</li>
                <li><strong>Output nil-rated or fully exempt (first proviso to S.54(3))</strong> — IDS refund blocked. Test whether output is genuinely exempt or zero-rated.</li>
                <li><strong>Same goods at different rates (Circular 135/2020)</strong> — IDS refund blocked where same HSN. Concessional notification exception per Circular 173/2022.</li>
                <li><strong>Output in Notification 5/2017 list</strong> — Specific HSNs excluded from IDS refund. Verify current notification status.</li>
                <li><strong>Below ₹1,000 threshold (Rule 89(1))</strong> — Refund applications below threshold not entertained. Accumulate within FY.</li>
            </ol>

            <h3>Procedural / Curable Grounds</h3>
            <ol start="8">
                <li><strong>ITC mismatch / GSTR reconciliation</strong> — GSTR-1 vs GSTR-3B vs GSTR-2B inconsistency. Often curable.</li>
                <li><strong>Documentation deficiency (RFD-03 not cured)</strong> — Missing BRC/FIRC, shipping bill, statements, CA certificate. Refile after curing.</li>
                <li><strong>Computation error in formula</strong> — Wrong Rule 89(4) or Rule 89(5) application. May be appealable if department applied wrong formula.</li>
                <li><strong>Wrong category / classification</strong> — Department reclassifies refund category. Refile under correct category or appeal.</li>
            </ol>

            <h3>Disputed Grounds (Often Appealable / Writ-Friendly)</h3>
            <ol start="12">
                <li><strong>Unjust enrichment burden</strong> — Tax burden allegedly passed on. Strengthen with CA certificate per Rule 89(2)(m).</li>
                <li><strong>Place of supply / export status disputed</strong> — Department challenges Section 13 IGST analysis. Strong appeal ground with documentation.</li>
                <li><strong>LUT not in place</strong> — Exports without valid LUT. Appeal if LUT was filed but system rejected; refile + pay IGST + claim S.54 refund if filing was missed.</li>
            </ol>

            <h3>Mapping Ground to Remedy</h3>
            <p>Rejection grounds 1, 3, 4, 5, 6, 7 are typically <strong>sustained on facts</strong> — no remedy unless underlying premise is wrong. Grounds 8-11 are typically <strong>curable through refile</strong>. Grounds 2, 12, 13 are typically <strong>appealable on merits</strong>. Ground 14 depends on facts. <strong>Writ jurisdiction</strong> is layered on top — available where alternative remedy is inadequate, jurisdictional error exists, or natural-justice breaches occurred.</p>
        </section>

        <div class="body-cta">
            <h3>Refund rejected? Time-sensitive — appeal clock ticking.</h3>
            <p>Patron's GST team handles APL-01 first appeals, RFD-01 refilings, GSTAT appeals, and writ petitions for portal/jurisdictional rejections. Rapid turnaround for time-sensitive cases.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Rejection%20Analyzer.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Rejection%20Analyzer%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Rejection%20Analyzer.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="appeal">
            <h2>The Appeal Process — Section 107 in Detail</h2>

            <p>The first appeal is the standard remedy for an RFD-06 rejection on substantive grounds. Filed in Form GST APL-01 on the GST Portal under Services → User Services → Appeals, the appeal is heard by the First Appellate Authority (typically a Joint or Additional Commissioner depending on the originating officer's rank).</p>

            <h3>Filing Requirements</h3>
            <ol>
                <li>Copy of RFD-06 rejection order with date of communication</li>
                <li>Form GST APL-01 (online form on GST Portal)</li>
                <li>Form GST APL-01A — detailed grounds of appeal with legal arguments</li>
                <li>Pre-deposit challan — 10% of disputed tax via electronic cash or credit ledger</li>
                <li>Authorisation letter if filed by an authorised representative</li>
                <li>Supporting documents — invoices, GSTR returns, BRC/FIRC, CA certificates, case-law citations</li>
            </ol>

            <h3>Timeline Within Appeal</h3>
            <p>Once APL-01 is filed and pre-deposit paid, the First Appellate Authority schedules hearings (in-person or online). The taxpayer or representative presents grounds. The Authority may call additional documents. Final order is issued in <strong>Form GST APL-04</strong>. Where the appeal is allowed, refund is processed with <strong>Section 56 interest</strong> on delayed disposal. Where rejected, escalation lies to GSTAT.</p>

            <h3>Pre-Deposit Computation</h3>
            <p>The 10% pre-deposit is computed on the <strong>disputed tax amount only</strong>. For partial rejection cases, only the rejected portion is the disputed amount. Pre-deposit may be paid through electronic cash ledger or electronic credit ledger (per CBIC guidance and Bombay HC ruling). Maximum cap of ₹25 crore per Finance Act 2024 applies (reduced from earlier ₹50 crore).</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Disputed Amount</th><th>10% Pre-Deposit</th><th>Notes</th></tr>
                </thead>
                <tbody>
                    <tr><td>₹10 lakh</td><td>₹1 lakh</td><td>Standard 10%</td></tr>
                    <tr><td>₹1 crore</td><td>₹10 lakh</td><td>Standard 10%</td></tr>
                    <tr><td>₹50 crore</td><td>₹5 crore</td><td>Standard 10%</td></tr>
                    <tr><td>₹500 crore</td><td>₹25 crore</td><td>Capped at ₹25 Cr per FA 2024</td></tr>
                </tbody>
            </table>

            <h3>Pre-Deposit Refund on Success</h3>
            <p>Per the recent <a href="https://main.sci.gov.in" target="_blank" rel="noopener">Supreme Court of India</a> jurisprudence applied by High Courts, pre-deposit refund is a <strong>vested right</strong> not subject to Section 54 limitation. The Jharkhand High Court ruling in August 2025 (BLA Infrastructure series) struck down a refund rejection that had applied Section 54 limitation to pre-deposit refund. The court held the deposit is statutory security, not tax, and Section 115 governs its return with 6% interest from date of payment.</p>

            <h3>GSTAT Escalation under Section 112</h3>
            <p>Where APL-04 is unfavourable, the taxpayer may appeal to the GST Appellate Tribunal under Section 112. The appeal must be filed within 3 months of APL-04 (extendable by 3 months for sufficient cause). Additional pre-deposit of 20% of remaining disputed amount applies (capped at ₹50 crore per FA 2024). The Principal Bench is at New Delhi; State Benches are operational across major centres of the <a href="https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" target="_blank" rel="noopener">GST India</a> framework.</p>
        </section>

        <section class="content-section" id="case-law">
            <h2>Recent Case Law on Refund Rejections</h2>

            <h3>Jharkhand HC (August 2025) — Pre-Deposit Refund as Vested Right</h3>
            <p>The Jharkhand High Court Division Bench held that rejection of a refund application for statutory pre-deposit on grounds of Section 54 two-year limitation is <strong>not legally sustainable</strong>. The court reasoned that pre-deposit under Section 107(6)(b) is a statutory security for maintaining appeal, not a tax payment. Once the appeal is decided in favour of the assessee, the pre-deposit refund is a vested right governed by Section 115 with 6% interest, not by Section 54 limitation. The deficiency memos in RFD-03 applying limitation were quashed. Practitioners should cite this ruling for any pre-deposit refund rejected on time-bar grounds.</p>

            <h3>Reva Giant Implex LLP vs Union of India (Delhi HC)</h3>
            <p>The Delhi High Court set aside an order rejecting a refund appeal that arose from <strong>GST Portal technical glitches</strong>. The petitioner had submitted required digital data online, but the portal failed to process it correctly. The court held that taxpayers cannot be penalised for system failures. The judgment is foundational for portal-glitch writ petitions. Practitioners with rejections caused by upload errors, ARN generation failures, or document attachment issues that are demonstrably system-side should preserve screenshots, error logs, and helpdesk tickets to invoke this ruling.</p>

            <h3>Patna HC — Outside-Material Doctrine</h3>
            <p>The Patna High Court struck down a refund rejection that <strong>relied on material not mentioned in the show-cause notice (RFD-08)</strong>. The court applied the principle that the proper officer must confine the rejection to grounds and material disclosed in the SCN, giving the taxpayer fair opportunity to rebut. Reliance on outside material in the final RFD-06 violates natural justice. Practitioners should compare RFD-08 grounds with RFD-06 reasoning during appeal preparation — any new ground introduced in RFD-06 is itself an appealable defect.</p>

            <h3>Sikkim HC — Ownership Change Does Not Extinguish Refund</h3>
            <p>The Sikkim High Court allowed a refund despite a change in company ownership during the refund processing period. The court held that the substantive right to refund attaches to the GSTIN entity, and corporate ownership changes do not extinguish the claim absent specific statutory bar. Useful for businesses involved in M&amp;A transactions where refunds were filed by the predecessor entity.</p>

            <h3>Bombay HC — Portal-Customs Misalignment</h3>
            <p>The Bombay High Court granted IGST refunds even where the GST portal data and ICEGATE customs portal data were not aligned. The court held that mechanical insistence on perfect system-to-system match cannot defeat substantive refund entitlement where the taxpayer has otherwise complied. Useful precedent for IGST exporters whose refunds are stuck on shipping-bill matching grounds despite valid exports.</p>

            <h3>Ascent Meditech Ltd. (Supreme Court 2025)</h3>
            <p>The Supreme Court held that the amendment to Rule 89(5) under Notification 14/2022 — proportionately accounting for input-services ITC in payment of output tax — is <strong>curative in nature and applies retrospectively</strong>. This benefits older inverted duty refund claims that were rejected or partially sanctioned using the pre-amendment formula. Filatex India Ltd. (Gujarat HC 2025) reached the same conclusion. Practitioners with rejected IDS claims for periods before July 2022 should examine refile or appeal options.</p>

            <h3>Practitioner Implications</h3>
            <ul>
                <li><strong>Always preserve RFD-08 vs RFD-06 comparison.</strong> New grounds in RFD-06 are appealable defects per Patna HC.</li>
                <li><strong>Save portal screenshots and error logs.</strong> Critical evidence for Reva Giant Implex-type writ petitions.</li>
                <li><strong>For pre-deposit refund rejections, cite Jharkhand HC 2025</strong> directly in writ pleadings.</li>
                <li><strong>For older IDS rejections, evaluate Ascent Meditech curative amendment.</strong> May convert rejected claims to live refundable.</li>
                <li><strong>Track CBIC Notification 11/2025 (March 2025)</strong> on Rule 164 — partial appeal withdrawal now permitted.</li>
                <li><strong>Maintain reconciliation working as primary evidence.</strong> ITC mismatch rejections require granular invoice-level reconciliation.</li>
            </ul>
        </section>

        <section class="content-section">
            <h2>Common Mistakes Post-Rejection</h2>

            <h3>Filing a Fresh RFD-01 Instead of Appeal</h3>
            <p>Where rejection is on substantive grounds (drawback, export duty, IDS exclusion), a fresh RFD-01 will be rejected on the same grounds. The correct remedy is appeal. Conversely, where rejection is for curable defects (deficiency memo, computation), filing a fresh RFD-01 with corrections is faster and cheaper than appeal. Misjudging this wastes time and costs.</p>

            <h3>Missing the 3-Month Appeal Window</h3>
            <p>Section 107(1) prescribes 3 months from communication of order. Section 107(4) condones up to 1 additional month with sufficient cause. Beyond 4 months, the route is foreclosed. Many practitioners diary the order date but miss the communication date — the latter starts the clock. Preserve postal envelope or portal acknowledgment as communication evidence.</p>

            <h3>Underpaying Pre-Deposit</h3>
            <p>The 10% pre-deposit is computed on disputed tax. Some practitioners compute on disputed total amount including interest and penalty, leading to underpayment that makes the appeal not maintainable. Others miscompute on the full original claim instead of just the rejected portion. Verify computation against the RFD-06 line-item breakdown.</p>

            <h3>Filing Writ Without Exhausting Appeal</h3>
            <p>Writ jurisdiction under Article 226 is generally not entertained where alternative remedy of appeal is available. Exceptions: jurisdictional error, natural-justice breach, portal failure. For routine rejections where appeal is open, file APL-01 first. Writ as substitute for appeal is dismissed at threshold by most High Courts.</p>

            <h3>Not Citing Recent Case Law</h3>
            <p>Appeal grounds drafted in APL-01A should cite recent jurisprudence. Pre-deposit cases should reference Jharkhand HC 2025 and Section 115. IDS cases should reference VKC Footsteps SC 2021 and Ascent Meditech SC 2025. Portal-glitch cases should reference Reva Giant Implex Delhi HC. Generic appeals without specific case law are weaker.</p>

            <h3>Ignoring the COVID Extension</h3>
            <p>For older claims with relevant date in 2019-2021, the COVID extension under Notification 13/2022 (excluding 1 March 2020 to 28 February 2022 from limitation) may convert a time-barred rejection to a live claim. Always run the COVID overlap test before accepting time-bar rejection. Use the Patron <a href="/tools/gst-refund-time-bar-calculator">GST Refund Time-Bar Calculator</a> for precise computation.</p>

            <h3>Not Tracking ARN Status</h3>
            <p>The GST Portal updates ARN status through the lifecycle — RFD-02 → RFD-03 → RFD-04 → RFD-08 → RFD-06. Some practitioners only check status occasionally, missing the RFD-08 SCN window (which has a strict 15-day reply timeline under RFD-09). Set up automated email alerts on ARN status changes to avoid missing SCN replies that lead to ex-parte rejection.</p>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Refund Appeal &amp; Refile</h3>
            <p>Patron handles APL-01 first appeals, RFD-01 refilings, GSTAT appeals, and writ petitions. CA-signed grounds with case-law support.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Rejection%20Analyzer.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Rejection%20Analyzer%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Rejection%20Analyzer.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-litigation" class="sidebar-link">GST Litigation<span class="arrow">→</span></a>
            <a href="/gstat-appeal-filing" class="sidebar-link">GSTAT Appeal Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/lut-filing" class="sidebar-link">LUT Filing Service<span class="arrow">→</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-refund-eligibility-checker" class="sidebar-link">GST Refund Eligibility<span class="arrow">→</span></a>
            <a href="/tools/gst-refund-time-bar-calculator" class="sidebar-link">GST Refund Time-Bar (S.54)<span class="arrow">→</span></a>
            <a href="/tools/gst-refund-interest-calculator" class="sidebar-link">GST Refund Interest (S.56)<span class="arrow">→</span></a>
            <a href="/tools/lut-expiry-reminder" class="sidebar-link">LUT Expiry Reminder<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator<span class="arrow">→</span></a>
            <a href="/tools/itc-eligibility-calculator" class="sidebar-link">ITC Eligibility Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/gst-refund-rejection-appeal" class="sidebar-link">GST Refund Rejection Appeal<span class="arrow">→</span></a>
            <a href="/blog/gst-refund-process-and-procedure" class="sidebar-link">GST Refund Process<span class="arrow">→</span></a>
            <a href="/blog/section-107-gst-appeal" class="sidebar-link">Section 107 First Appeal<span class="arrow">→</span></a>
            <a href="/blog/gstat-appeal-procedure" class="sidebar-link">GSTAT Appeal Procedure<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is Form GST RFD-06?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Form GST RFD-06 is the final Refund Sanction or Rejection Order issued by the proper officer after scrutinizing a refund application filed in Form GST RFD-01. The order specifies the amount sanctioned, the amount rejected, and reasons for rejection. RFD-06 is the operative document for any appeal or writ proceedings. It is preceded by an RFD-08 show-cause notice, to which the taxpayer must reply via RFD-09 within fifteen days before final order.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the time limit to appeal a refund rejection?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The first appeal under Section 107 of the CGST Act 2017 must be filed within three months from the date of communication of the rejection order in Form GST RFD-06. The Appellate Authority may condone delay up to one additional month if sufficient cause is shown. Beyond four months, appeals are usually not accepted. The appeal is filed in Form GST APL-01 on the GST Portal along with the grounds in Form GST APL-01A and required pre-deposit.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the pre-deposit for a refund appeal?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 107(6) requires a pre-deposit of 10 percent of the disputed tax, capped at twenty-five crore rupees per Finance Act 2024 (reduced from fifty crore). It is paid through the electronic cash or credit ledger before filing APL-01. For penalty-only disputes, 10 percent applies on the disputed penalty. For GSTAT escalation under Section 112, an additional 20 percent applies, capped at fifty crore rupees.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">When should I refile instead of appealing?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Refile when the rejection is due to a curable defect such as missing documents, wrong category selection, computation error, or GSTR reconciliation gaps. Refile is allowed if you are within the two-year limitation under Section 54(1) and the deficiency memo Rule 90(3) protection preserves your original filing date. Refile is faster, cheaper, and avoids litigation. Appeal when rejection is on substantive grounds disputing eligibility — drawback bar, export duty, IDS exclusions, time-bar interpretation, or the officer applies wrong law.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">When is a writ petition appropriate?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Writ jurisdiction under Article 226 is appropriate where the alternative appeal remedy is inadequate, ineffective, or where there is a violation of natural justice or fundamental rights. Common writ-friendly grounds include GST Portal technical glitches per Reva Giant Implex Delhi HC, jurisdictional errors, departmental reliance on outside material not mentioned in the SCN per Patna HC, deficiency-memo rejection applying wrong limitation per Jharkhand HC 2025, and Article 14 violations.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I refile if the deficiency memo (RFD-03) was issued?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. When Form GST RFD-03 deficiency memo is issued within fifteen days of the original filing, the original RFD-01 application is treated as not filed under Rule 90(3). The taxpayer must refile a fresh RFD-01 after curing deficiencies. Importantly, the second proviso to Section 54(1) preserves the original filing date for limitation purposes — the period from filing to deficiency communication is excluded from the two-year limitation. This protects taxpayers from time-bar where deficiency memo is delayed.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the Reva Giant Implex ruling?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Reva Giant Implex LLP vs Union of India was decided by the Delhi High Court setting aside a refund appeal rejection that arose from GST Portal technical glitches. The court held that where the petitioner submitted required digital data online but the system did not process it correctly, the rejection cannot stand. The judgment is widely cited to challenge rejections caused by GSTN technical issues that are demonstrably system-side rather than taxpayer-side.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How do I appeal if my refund was rejected partially?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">When RFD-06 sanctions part of the refund and rejects part, you can appeal only the rejected portion. The pre-deposit is computed on the disputed amount only — not the full original claim. File APL-01 specifying the rejected amount as disputed tax and pay 10 percent pre-deposit on that. The sanctioned portion is processed through RFD-05 payment advice separately. Notification 11/2025 also allows partial appeal withdrawal.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is pre-deposit refundable on success?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. The pre-deposit paid under Section 107(6) is refundable on favourable disposal of the appeal. Section 115 provides for automatic refund with interest at 6 percent per annum from the date of payment. Recent Jharkhand High Court ruling in 2025 held the pre-deposit refund is a vested right that cannot be subjected to Section 54 two-year limitation since pre-deposit is not tax but a statutory deposit. Practitioners should preserve pre-deposit challan and file refund as a routine step post-appellate success.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I file appeal without paying pre-deposit?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 107(6) mandates pre-deposit and the GST Portal will not accept APL-01 without it. Some High Courts have permitted appeal filing without pre-deposit in extreme financial-hardship cases or where the underlying demand is patently illegal — but these are exceptional. The standard rule is no pre-deposit equals no appeal. For very large disputed amounts where the 10 percent is unaffordable, practitioners sometimes pursue parallel writ petition challenging the rejection directly under Article 226 to avoid the pre-deposit requirement.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What if rejection is due to ITC mismatch with GSTR-2B?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">ITC mismatch rejections are typically curable rather than appealable. The recommended approach is to identify the specific invoices causing mismatch, coordinate with suppliers to file correctly in their GSTR-1, wait for the correction to flow to GSTR-2B, and refile RFD-01 once reconciled. CBIC Circular 183/15/2022-GST and subsequent clarifications protect bona fide taxpayers from supplier defaults — these may be cited in appeal where supplier cannot be brought into compliance. Maintain reconciliation working as primary evidence.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Does the Ascent Meditech ruling help old refund claims?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. The Supreme Court in Ascent Meditech Ltd (2025) held that the amendment to Rule 89(5) under Notification 14/2022 — which proportionately accounts for input-services ITC in payment of output tax — is curative and applies retrospectively. This benefits older inverted duty refund claims rejected using the pre-amendment formula. Practitioners with rejected IDS claims for periods before July 2022 should examine refile or appeal options.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What if I missed the 3-month appeal deadline?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The First Appellate Authority has limited power under Section 107(4) to condone delay up to one additional month if sufficient cause is shown — illness, unavoidable absence, or portal access issues. Beyond four months total, the appellate route is closed. The remaining option is writ jurisdiction under Article 226 alleging natural-justice breach, jurisdictional error, or Article 14 violation. High Courts are reluctant to entertain writs as substitute for time-barred appeals.</div></div>
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

    const TREE = {
        q1: {
            type: 'question',
            question: 'What is the primary rejection ground in your RFD-06 / RFD-08?',
            context: 'Select the most specific ground cited in the order. If multiple grounds, pick the most substantive one.',
            options: [
                {label: 'Time-bar (Section 54(1))', sub: 'Filed beyond 2 years from relevant date', next: 'q2_timebar'},
                {label: 'Drawback / Notification 40-41-48 of 2017 benefit availed', sub: 'Rule 96(10) double-benefit bar', next: 'q2_drawback'},
                {label: 'Export goods subject to export duty (Section 54(15))', sub: 'Iron ore, certain agricultural items', next: 'q2_exportduty'},
                {label: 'Output nil-rated or fully exempt', sub: 'First proviso to Section 54(3) blocks IDS refund', next: 'q2_nilexempt'},
                {label: 'Same goods at different rates (Circular 135/2020)', sub: 'GST Council rate change on same HSN', next: 'q2_samegoods'},
                {label: 'Output in Notification 5/2017 excluded list', sub: 'Specific HSNs blocked from IDS refund', next: 'q2_notif5'},
                {label: 'ITC mismatch / GSTR reconciliation', sub: 'GSTR-1 vs GSTR-3B vs GSTR-2B inconsistency', next: 'q2_itcmismatch'},
                {label: 'Documentation deficiency / RFD-03 not cured', sub: 'Missing BRC, FIRC, shipping bill, statements, CA cert', next: 'q2_docs'},
                {label: 'Computation error in refund formula', sub: 'Wrong Rule 89(4) or Rule 89(5) application', next: 'q2_compute'},
                {label: 'Wrong category / classification', sub: 'Department reclassifies refund category', next: 'q2_category'},
                {label: 'Unjust enrichment burden not satisfied', sub: 'Tax burden allegedly passed on', next: 'q2_unjust'},
                {label: 'Place of supply / export status disputed', sub: 'Department challenges Section 13 IGST analysis', next: 'q2_pos'},
                {label: 'Below ₹1,000 threshold (Rule 89(1))', sub: 'Refund applications below threshold', next: 'v_below_threshold'},
                {label: 'LUT not in place during export period', sub: 'No valid LUT covering the supply', next: 'q2_lut'},
                {label: 'Other / multiple grounds / portal glitch', sub: 'System failure, jurisdictional error, NJ breach', next: 'q2_other'}
            ]
        },

        q2_timebar: {
            type: 'question',
            question: 'Has the COVID-19 limitation extension been applied?',
            context: 'Notification 13/2022-Central Tax excluded 1 March 2020 to 28 February 2022 from limitation. This adds up to 730 days for refunds whose 2-year window overlaps this period.',
            options: [
                {label: 'COVID extension considered, still time-barred', sub: 'Even after 730-day extension, claim is past limitation', next: 'v_timebar_sustained'},
                {label: 'COVID extension NOT yet considered', sub: 'Department applied straight 2-year rule without 168A exclusion', next: 'v_timebar_writ'},
                {label: 'Pre-deposit refund rejected on Section 54 limitation', sub: 'Statutory deposit, not tax — different rule per Jharkhand HC 2025', next: 'v_predeposit_writ'},
                {label: 'Not sure / mixed', sub: 'Re-test with the Patron Time-Bar Calculator first', next: 'v_timebar_recheck'}
            ]
        },

        q2_drawback: {
            type: 'question',
            question: 'What kind of drawback / notification benefit was actually availed?',
            context: 'The bar applies only where benefit availed includes the central tax component.',
            options: [
                {label: 'Higher all-industry rate drawback (with central tax component)', sub: 'Rate inclusive of central tax — bar applies', next: 'v_drawback_sustained'},
                {label: 'Lower customs-only drawback (no central tax)', sub: 'Customs component only — bar does NOT apply', next: 'v_drawback_appeal'},
                {label: 'Notification 40/2017, 41/2017, or 48/2017 benefit availed', sub: 'Concessional 0.1% procurement or deemed export', next: 'v_notif_block_appeal'},
                {label: 'Not sure of drawback rate composition', sub: 'Need to verify via Customs/DGFT records', next: 'v_drawback_verify'}
            ]
        },

        q2_exportduty: {
            type: 'question',
            question: 'What was the actual export-duty status during the export period?',
            context: 'Section 54(15) post Finance Act (No 2) 2024 (effective 16 Aug 2024) blocks both ITC and IGST refunds for export-duty goods.',
            options: [
                {label: 'Yes — goods attract positive-rate export duty', sub: 'E.g., iron ore at 30%', next: 'v_exportduty_sustained'},
                {label: 'NIL-rate notification applies during export period', sub: 'Goods subject in tariff but NIL by notification', next: 'v_exportduty_appeal'},
                {label: 'Pre-16 August 2024 IGST export', sub: 'Pre-amendment period — IGST refund may still be available', next: 'v_exportduty_pre2024'}
            ]
        },

        q2_nilexempt: {
            type: 'question',
            question: 'What is the actual nature of your output supply?',
            context: 'The bar is on nil-rated and fully exempt outputs. Zero-rated supplies (exports) are different and refundable.',
            options: [
                {label: 'Output is genuinely nil-rated / fully exempt', sub: 'No refund route under IDS — accept rejection', next: 'v_nilexempt_sustained'},
                {label: 'Mixed portfolio — some taxable inverted', sub: 'Apportion ITC under Rule 42 — partial refund possible', next: 'v_nilexempt_partial'},
                {label: 'Output is actually zero-rated (export), misclassified', sub: 'File under Section 54(3)(i) zero-rated route instead', next: 'v_misclassified_zero'}
            ]
        },

        q2_samegoods: {
            type: 'question',
            question: 'Are inputs and outputs really the same HSN?',
            context: 'Circular 135/2020 bars IDS refund only for genuinely same goods at rate-changed positions. Concessional notification scenarios are exempted per Circular 173/2022.',
            options: [
                {label: 'Yes — same HSN, GST Council rate change', sub: 'Bought at 18%, rate reduced to 12% — bar applies', next: 'v_samegoods_sustained'},
                {label: 'Same HSN but concessional notification (e.g., 0.1% merchant exporter)', sub: 'Circular 173/2022 carve-out — refund available', next: 'v_concessional_appeal'},
                {label: 'Different HSN at input vs output stage', sub: 'Genuine inverted duty — bar does NOT apply', next: 'v_differentgoods_appeal'}
            ]
        },

        q2_notif5: {
            type: 'question',
            question: 'Is the output HSN currently in Notification 5/2017 list?',
            context: 'Notification 5/2017-Central Tax (Rate) has been amended periodically. Recent reforms removed many entries. Verify against current notification.',
            options: [
                {label: 'Yes — output HSN is currently listed', sub: 'IDS refund explicitly blocked', next: 'v_notif5_sustained'},
                {label: 'No / removed by amendment for current period', sub: 'May be appealable if department applied stale list', next: 'v_notif5_appeal'},
                {label: 'Need to verify against current notification', sub: 'Pull current Notification 5/2017 and re-test', next: 'v_notif5_verify'}
            ]
        },

        q2_itcmismatch: {
            type: 'question',
            question: 'Can the GSTR mismatch be reconciled?',
            context: 'ITC mismatch rejections are typically curable through supplier coordination and refile.',
            options: [
                {label: 'Yes — supplier can correct in their GSTR-1', sub: 'Supplier cooperative, correction will flow to GSTR-2B', next: 'v_itc_curable'},
                {label: 'Partial mismatch only', sub: 'Refile for matched portion; appeal for disputed portion', next: 'v_itc_partial'},
                {label: 'Supplier cannot / will not correct', sub: 'Cite Circular 183/15/2022 for bona fide protection', next: 'v_itc_appeal'}
            ]
        },

        q2_docs: {
            type: 'question',
            question: 'Is the documentation deficiency curable?',
            context: 'Most documentation gaps are curable through refile. The second proviso to Section 54(1) preserves filing date.',
            options: [
                {label: 'Yes — missing docs can be obtained / generated', sub: 'BRC/FIRC pending, statements correctable', next: 'v_docs_refile'},
                {label: 'Disputing the deficiency itself', sub: 'Department asking for irrelevant or non-statutory docs', next: 'v_docs_appeal'},
                {label: 'Outside the 2-year window now', sub: 'Time-bar issue layered on top of deficiency', next: 'v_docs_timebar'}
            ]
        },

        q2_compute: {
            type: 'question',
            question: 'Whose computation is correct?',
            context: 'Computation disputes turn on Rule 89(4) and Rule 89(5) interpretation.',
            options: [
                {label: 'Department\'s computation is correct, mine had error', sub: 'Accept rejection, refile with corrected formula', next: 'v_compute_refile'},
                {label: 'Department applied wrong formula / interpretation', sub: 'Strong appeal ground with case law', next: 'v_compute_appeal'},
                {label: 'Pre-2022 inverted duty claim — Notification 14/2022 not applied', sub: 'Cite Ascent Meditech SC 2025 curative amendment', next: 'v_compute_ascent'}
            ]
        },

        q2_category: {
            type: 'question',
            question: 'Is the department\'s reclassification correct?',
            context: 'Refund category determines applicable formula and exclusions.',
            options: [
                {label: 'Department is right — I selected wrong category', sub: 'Refile under correct category within 2-year window', next: 'v_category_refile'},
                {label: 'Department\'s reclassification is wrong', sub: 'Strong appeal ground if my category was correct', next: 'v_category_appeal'}
            ]
        },

        q2_unjust: {
            type: 'question',
            question: 'Has the tax burden been passed on to recipients?',
            context: 'Unjust enrichment is presumed under Section 54(8); taxpayer must rebut with evidence.',
            options: [
                {label: 'No — I retained the tax burden, not passed on', sub: 'Strong appeal with CA certificate + accounting evidence', next: 'v_unjust_appeal'},
                {label: 'Tax was passed on but department\'s presumption is contested', sub: 'Refund goes to Consumer Welfare Fund per Section 57', next: 'v_unjust_cwf'},
                {label: 'Mixed — retained partial, passed on partial', sub: 'Refile for retained portion with proportionate evidence', next: 'v_unjust_partial'}
            ]
        },

        q2_pos: {
            type: 'question',
            question: 'Is your place-of-supply analysis defensible?',
            context: 'POS disputes turn on Section 13 IGST Act for services, Section 11 for goods.',
            options: [
                {label: 'Yes — supply is genuinely export per Sections 13 IGST', sub: 'Documentation supports recipient location, payment, contract', next: 'v_pos_appeal'},
                {label: 'Department disputes substance — recipient connection contested', sub: 'Consider Advance Ruling for future certainty', next: 'v_pos_aar'},
                {label: 'Ambiguous — borderline case', sub: 'Strengthen with contemporaneous evidence + appeal', next: 'v_pos_appeal'}
            ]
        },

        q2_lut: {
            type: 'question',
            question: 'What is the actual LUT status?',
            context: 'LUT validity determines whether refund route is RFD-01 (with payment) or RFD-01 (LUT route).',
            options: [
                {label: 'LUT was filed but system rejected / glitch', sub: 'Portal failure — Reva Giant Implex writ remedy', next: 'v_lut_writ'},
                {label: 'LUT filing was missed for that period', sub: 'Pay IGST + claim refund through RFD-01 with payment', next: 'v_lut_payigst'},
                {label: 'LUT filed late — exports made before filing', sub: 'No cover for pre-filing exports — pay IGST + claim refund', next: 'v_lut_late'}
            ]
        },

        q2_other: {
            type: 'question',
            question: 'What is the underlying nature of the issue?',
            context: 'Various non-standard rejections require specific remedies.',
            options: [
                {label: 'Portal technical glitch / ARN failure', sub: 'Reva Giant Implex Delhi HC writ-friendly', next: 'v_portal_writ'},
                {label: 'Outside material relied on (not in RFD-08)', sub: 'Patna HC — natural justice violation', next: 'v_natural_justice'},
                {label: 'Multiple substantive grounds combined', sub: 'Mixed — needs case-by-case analysis', next: 'v_complex_appeal'},
                {label: 'Something else entirely', sub: 'General appeal route with case-specific grounds', next: 'v_generic_appeal'}
            ]
        },

        // ===== VERDICTS =====

        v_timebar_sustained: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Time-Bar Final',
            section: 'Section 54(1) read with Mafatlal Industries doctrine',
            summary: 'Even after applying COVID extension, the claim is beyond the two-year window. Mafatlal Industries doctrine forecloses Section 5 Limitation Act condonation. The right to refund is extinguished as a matter of law.',
            conditions: [
                'Two-year limitation strictly applied',
                'COVID extension already factored in',
                'No general condonation mechanism in Section 54',
                'Mafatlal Industries (SC 1997) bars equitable extension',
                'Writ petitions citing equity have largely failed'
            ],
            actions: [
                'Accept the rejection — no further remedy is realistic',
                'Document the loss for accounting purposes (write-off)',
                'For future claims, build calendar reminders 90 days before time-bar',
                'Use the Patron GST Refund Time-Bar Calculator to track all live claims',
                'Consult on whether DRC-03 voluntary payment scenario opens new relevant date under Explanation 2(h)'
            ]
        },

        v_timebar_writ: {
            type: 'verdict', status: 'writ', headline: 'Writ-Friendly — COVID Extension Not Applied',
            section: 'Section 54(1) + Notification 13/2022-Central Tax + Section 168A',
            summary: 'Department appears to have applied straight 2-year limitation without considering COVID-19 limitation pause. Strong writ ground under Article 226 — automatic extension is statutory, not discretionary.',
            conditions: [
                'Notification 13/2022 excludes 1 March 2020 to 28 February 2022 (730 days)',
                'Extension is automatic — no application required',
                'Department obligated to factor it into limitation computation',
                'Failure to apply is a jurisdictional error',
                'Writ jurisdiction available under Article 226'
            ],
            actions: [
                'Compute COVID-adjusted limitation using Patron Time-Bar Calculator',
                'File writ petition before relevant High Court under Article 226',
                'Cite Notification 13/2022 + Section 168A as automatic exclusion',
                'Pray for setting aside RFD-06 + direction to process on merits',
                'In alternative, file APL-01 within 3 months as parallel remedy'
            ]
        },

        v_predeposit_writ: {
            type: 'verdict', status: 'writ', headline: 'Strong Writ — Pre-Deposit Refund as Vested Right',
            section: 'Section 107(6)(b) + Section 115 + Jharkhand HC 2025',
            summary: 'Pre-deposit refund cannot be subjected to Section 54 limitation. The Jharkhand High Court (August 2025, BLA Infrastructure series) held this is a vested right — pre-deposit is statutory security, not tax. Recovery under Article 265 of Constitution.',
            conditions: [
                'Pre-deposit under Section 107(6)(b) is not tax',
                'Section 54 limitation applies to tax refunds, not statutory deposits',
                'Section 115 governs refund with 6% interest from payment date',
                'Article 265 of Constitution prohibits retention without authority',
                'Multiple HCs have struck down similar Section 54 rejections'
            ],
            actions: [
                'File writ petition before relevant High Court under Article 226',
                'Cite Jharkhand HC 2025 ruling (BLA Infrastructure series) prominently',
                'Pray for quashing of RFD-06 + direction to process under Section 115',
                'Claim 6% interest from date of pre-deposit payment',
                'Preserve appeal order (APL-04) showing favourable disposal'
            ]
        },

        v_timebar_recheck: {
            type: 'verdict', status: 'curable', headline: 'Recheck — Run Time-Bar Calculator First',
            section: 'Section 54(1) + Explanation 2 + Notification 13/2022',
            summary: 'Before deciding remedy, compute actual time-bar with COVID extension applied. The Patron Time-Bar Calculator handles all 8 limbs of Explanation 2 plus automatic 730-day COVID overlap.',
            conditions: [
                'Time-bar computation depends on refund type and relevant date',
                'COVID extension auto-adds overlap days',
                'Different limbs of Explanation 2 give different relevant dates',
                'Pre-deposit refund has separate framework',
                'Once recomputed, choose remedy accordingly'
            ],
            actions: [
                'Use Patron Time-Bar Calculator with correct refund type and trigger date',
                'If recomputed claim is still in time, file appeal or refile as appropriate',
                'If genuinely time-barred even with COVID, accept and document',
                'For pre-deposit refund cases, pursue writ route per Jharkhand HC',
                'Document the recomputation working for any subsequent appeal'
            ]
        },

        v_drawback_sustained: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Higher-Rate Drawback Bar Applies',
            section: 'Rule 96(10) + third proviso to Section 54(3)',
            summary: 'Higher all-industry rate drawback typically includes central-tax component. Refund of IGST or unutilised ITC is barred under double-benefit principle.',
            conditions: [
                'Higher rate drawback inclusive of central tax → IGST refund blocked',
                'Same bar applies to ITC refund under Section 54(3) third proviso',
                'No carve-out for partial central tax separation',
                'Customs-only lower rate would not trigger bar',
                'Verification required through Customs records'
            ],
            actions: [
                'Accept rejection if higher rate was indeed availed',
                'Consider switching future exports to LUT route + customs-only drawback',
                'Reverse drawback claim if commercially viable, refile for IGST refund',
                'Document drawback chronology for audit defence',
                'No appeal merits unless drawback nature is misclassified by department'
            ]
        },

        v_drawback_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Customs-Only Drawback Does Not Bar',
            section: 'Rule 96(10) + Circular 37/2018-Customs',
            summary: 'Lower-rate drawback (customs duty component only, no central tax) does not trigger Rule 96(10) bar. Department appears to have applied bar incorrectly. File first appeal with documentation.',
            conditions: [
                'Drawback rate composition must be examined',
                'Customs-only rate does not include central tax',
                'Rule 96(10) bar requires central tax double-benefit',
                'Burden on taxpayer to establish customs-only nature',
                'CBIC Circular 37/2018-Customs clarifies the distinction'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06 communication',
                'Pre-deposit 10% of disputed IGST refund amount (capped at ₹25 Cr)',
                'Attach drawback rate breakdown showing customs-only composition',
                'Cite Customs Tariff drawback schedule and CBIC clarifications',
                'Request restoration of refund + Section 56 interest at 6% from day 61'
            ]
        },

        v_notif_block_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Notification 40/41/48 Bar Limited',
            section: 'Rule 96(10) read with notifications',
            summary: 'Notification 40/2017, 41/2017, or 48/2017 benefit at procurement bars IGST refund only for the specific tainted supply, not the full export portfolio. Segregate untainted exports.',
            conditions: [
                'Bar applies to specific procurements where benefit availed',
                'Untainted procurements are not affected',
                'Capital goods under EPCG Scheme are an exception',
                'LUT route refund (unutilised ITC) is unaffected by Rule 96(10)',
                'Procurement chronology must be documented invoice-by-invoice'
            ],
            actions: [
                'File APL-01 with detailed procurement-export reconciliation',
                'Segregate exports into tainted (drop) vs untainted (claim)',
                'For untainted IGST exports, claim refund with documentation',
                'Pre-deposit 10% only on the disputed (untainted) portion',
                'Consider switching future exports to LUT route to avoid Rule 96(10)'
            ]
        },

        v_drawback_verify: {
            type: 'verdict', status: 'curable', headline: 'Verify First — Drawback Rate Composition',
            section: 'Customs Tariff Schedule + DGFT records',
            summary: 'Drawback rate composition determines whether Rule 96(10) bar applies. Pull Customs/DGFT records before deciding remedy.',
            conditions: [
                'Higher rate (with central tax) → bar applies',
                'Lower customs-only rate → no bar',
                'Rate at the time of export is determinative',
                'Notifications periodically amend drawback rates',
                'Documentation from Customs is primary evidence'
            ],
            actions: [
                'Pull EGM and shipping bill drawback details from ICEGATE',
                'Verify against Customs Tariff drawback schedule for the period',
                'Confirm rate composition (customs vs central tax components)',
                'If higher rate availed → accept; if customs-only → file appeal',
                'For mixed scenarios, prepare line-item-wise analysis'
            ]
        },

        v_exportduty_sustained: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Export-Duty Goods Bar Applies',
            section: 'Section 54(15) as amended by Finance Act (No 2) 2024',
            summary: 'Goods subject to positive-rate export duty are barred from both ITC and IGST refunds. The FA No 2 of 2024 amendment (effective 16 August 2024) closed the IGST loophole. No appeal merits if export duty status is correctly applied.',
            conditions: [
                'Section 54(15) post-2024 covers both ITC and IGST refunds',
                'Verify HSN against Customs Tariff Schedule II',
                'Specific notifications may set export duty rate',
                'NIL-rate notification status is the only relief route',
                'Pre-16 August 2024 IGST refunds may still be available for past periods'
            ],
            actions: [
                'Accept rejection for post-FA 2024 period exports',
                'For pre-16 August 2024 IGST refunds, consider separate appeal',
                'Document export-duty status with Customs Tariff supporting',
                'Restructure future exports to avoid export-duty HSNs if possible',
                'No realistic appeal merits on this ground for current periods'
            ]
        },

        v_exportduty_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — NIL-Rate Notification Active',
            section: 'Section 54(15) read with notification',
            summary: 'Where export duty is NIL by notification during the relevant period, the Section 54(15) bar may not apply (subject to current view). The bar references "subject to" export duty — strong appellate argument that NIL-rate goods are not subject to a positive duty.',
            conditions: [
                'NIL-rate notification must cover the exact HSN and period',
                'Some HCs read "subject to" as positive-rate only',
                'Department position is that listing in Schedule II suffices',
                'Recent rulings have differed by jurisdiction',
                'Strong evidence of NIL-rate status required'
            ],
            actions: [
                'File APL-01 within 3 months with Customs Tariff Schedule II + notification',
                'Pre-deposit 10% of disputed amount',
                'Cite high-court rulings supporting NIL-rate exception',
                'Document NIL-rate effective dates against export dates',
                'Prepare for potential GSTAT escalation if FAA unfavourable'
            ]
        },

        v_exportduty_pre2024: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Pre-FA 2024 IGST Refund Available',
            section: 'Section 54(15) pre-Finance Act (No 2) 2024 framework',
            summary: 'Before 16 August 2024, Section 54(15) blocked only ITC refund — IGST refund on export-duty goods was available. Department applying post-amendment bar to pre-amendment exports is incorrect.',
            conditions: [
                'Cut-off date 16 August 2024 for FA No 2 of 2024 amendment',
                'Pre-amendment law allowed IGST refund on export-duty goods',
                'Amendment is not retrospective absent express provision',
                'Strong precedent against retrospective application',
                'Filing date or export date determines applicable law'
            ],
            actions: [
                'File APL-01 with chronology showing pre-16 August 2024 exports',
                'Cite pre-amendment Section 54(15) text',
                'Argue prospective amendment doctrine — Mafatlal-style fiscal limitation',
                'Pre-deposit 10% on disputed IGST refund amount',
                'Document export dates with shipping bill / EGM records'
            ]
        },

        v_nilexempt_sustained: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Nil/Exempt Output Bar',
            section: 'First proviso to Section 54(3)',
            summary: 'Pure nil-rated or fully exempt output supplies cannot generate IDS refund. The legal logic — exempt supplies break the value-chain credit flow.',
            conditions: [
                'Output must be taxable (even at lower rate) for IDS refund',
                'Nil-rated supplies have rate but no charge',
                'Exempt supplies are outside GST liability',
                'No carve-out under current notifications',
                'Apportioned ITC may be claimable for taxable inverted portion only'
            ],
            actions: [
                'Accept rejection for pure nil/exempt output portfolios',
                'Apportion ITC between taxable and exempt under Rule 42/43',
                'Refile for taxable inverted portion only with proportionate ITC',
                'Consider supply-chain restructuring to position outputs as zero-rated where possible',
                'No appeal merits unless output classification is contested'
            ]
        },

        v_nilexempt_partial: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile for Taxable Inverted Portion',
            section: 'Section 54(3)(ii) + Rule 42 + Rule 43',
            summary: 'For mixed taxable-exempt output portfolios, IDS refund is available on the taxable inverted portion only. Apportion ITC under Rule 42 and refile with the proportionate claim.',
            conditions: [
                'Output portfolio analysis required',
                'Rule 42/43 ITC apportionment must be applied',
                'Only taxable inverted output qualifies',
                'Period-wise reconciliation needed',
                'Refile within 2-year window per limb (e)'
            ],
            actions: [
                'Apportion ITC between taxable and exempt outputs under Rule 42',
                'Compute IDS refund on taxable inverted portion using Rule 89(5) formula',
                'Prepare detailed working with output classification',
                'File fresh RFD-01 selecting IDS category with restricted claim',
                'Maintain reconciliation evidence for audit defence'
            ]
        },

        v_misclassified_zero: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile Under Zero-Rated Route',
            section: 'Section 54(3)(i) + Section 16 IGST Act',
            summary: 'If output is genuinely zero-rated (export or SEZ), the IDS rejection is misplaced. Refile under Section 54(3)(i) zero-rated route which has different (more favourable) framework.',
            conditions: [
                'Confirm output is export or SEZ supply per Section 16 IGST',
                'Zero-rated supplies bypass IDS exclusions on nil/exempt',
                'Different refund formula under Rule 89(4) for zero-rated',
                'BRC/FIRC required for service exports',
                'Original filing date may be preserved if refile within deficiency-memo window'
            ],
            actions: [
                'Re-classify output supplies — verify export or SEZ status',
                'File fresh RFD-01 under "Refund of unutilized ITC on account of export/SEZ"',
                'Apply Rule 89(4) formula with zero-rated turnover in numerator',
                'Submit Statement 3 (LUT exports) or Statement 4 (SEZ supplies)',
                'Maintain shipping bill / SEZ endorsement evidence'
            ]
        },

        v_samegoods_sustained: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Same Goods, Rate-Change Bar',
            section: 'Section 54(3)(ii) + Circular 135/2020-GST',
            summary: 'Where inputs and outputs are same HSN at different rates due to GST Council rate change, IDS refund is barred per CBIC clarification. No realistic appeal merits.',
            conditions: [
                'Same HSN at input and output stage',
                'Rate difference due to Council rate change, not concessional notification',
                'Bar applies notwithstanding genuine accumulation',
                'BMG Informatics (Gauhati HC) had questioned circular but operative position holds',
                'Refund denial sustained in most jurisdictions'
            ],
            actions: [
                'Accept rejection for genuine same-goods rate-change scenarios',
                'Consider writ petition only if commercial stakes very large + BMG-style ground available',
                'Restructure procurement to introduce HSN difference where possible',
                'Document the chronology for any future BMG-style litigation strategy',
                'No realistic appeal merits in current jurisprudence'
            ]
        },

        v_concessional_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Concessional Notification Carve-Out',
            section: 'Section 54(3)(ii) + Circular 173/2022-GST',
            summary: 'Where lower output rate flows from a concessional notification (such as 0.1% merchant exporter supply) rather than GST Council rate change, the same-goods bar does not apply. Strong appeal ground.',
            conditions: [
                'Circular 173/2022-GST refined Circular 135/2020',
                'Concessional rate via notification → refund available',
                'Examples: Notification 40/2017 (CGST) and 41/2017 (IGST) merchant exporter supplies at 0.1%',
                'Department appears to have conflated rate change with concessional notification',
                'Strong appellate argument'
            ],
            actions: [
                'File APL-01 within 3 months citing Circular 173/2022',
                'Pre-deposit 10% of disputed amount',
                'Document notification reference and concessional rate basis',
                'Cite Circular 173/2022 prominently in APL-01A grounds',
                'Prepare for FAA hearing with notification text + circular extracts'
            ]
        },

        v_differentgoods_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Genuinely Different Goods',
            section: 'Section 54(3)(ii)',
            summary: 'If inputs and outputs are genuinely different HSNs, Circular 135/2020 does not apply. Department appears to have misclassified the scenario as same-goods.',
            conditions: [
                'HSN classification at input vs output must differ',
                'Same chapter / heading does not equal same HSN',
                'Manufactured product distinct from raw material',
                'Departmental misclassification is appealable',
                'HSN documentation is primary evidence'
            ],
            actions: [
                'File APL-01 with detailed HSN classification analysis',
                'Pre-deposit 10% of disputed amount',
                'Submit BOM (bill of materials) showing input-output transformation',
                'Cite GST Tariff classifications + advance rulings if available',
                'Prepare for HSN-level technical defence'
            ]
        },

        v_notif5_sustained: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Notification 5/2017 Excluded',
            section: 'Notification 5/2017-Central Tax (Rate)',
            summary: 'Output HSN is currently in the excluded list. IDS refund is statutorily barred for these specific items.',
            conditions: [
                'Notification 5/2017 specifically excludes certain HSNs from IDS refund',
                'List has been amended periodically — current listing matters',
                'No general carve-out for these excluded items',
                'Refund alternative under zero-rated supply route may be available',
                'No appeal merits if listing is correctly applied'
            ],
            actions: [
                'Accept rejection for items on the current excluded list',
                'For mixed portfolios, segregate notified vs non-notified outputs',
                'Refile for non-notified inverted portion only',
                'Track future amendments — reforms may remove your HSN',
                'Consider alternative refund routes where commercially viable'
            ]
        },

        v_notif5_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Stale Notification Application',
            section: 'Notification 5/2017-Central Tax (Rate) as amended',
            summary: 'Department appears to have applied a stale or wrong version of Notification 5/2017. Recent amendments have removed many entries. Verify current applicability.',
            conditions: [
                'Amendments via Notification 9/2022 and subsequent removed several HSNs',
                'Department must apply notification as in force at the relevant period',
                'Stale-notification application is jurisdictional error',
                'HSN match must be exact, not similar',
                'Strong appellate ground'
            ],
            actions: [
                'File APL-01 with current Notification 5/2017 text + amendment chronology',
                'Pre-deposit 10% of disputed amount',
                'Document HSN against the current excluded list',
                'Cite amendment notification numbers prominently',
                'Prepare for technical FAA hearing on notification interpretation'
            ]
        },

        v_notif5_verify: {
            type: 'verdict', status: 'curable', headline: 'Verify First — Pull Current Notification',
            section: 'Notification 5/2017-Central Tax (Rate) as amended',
            summary: 'Need to verify current notification status of your output HSN before deciding remedy. CBIC tax-information portal has the latest consolidated text.',
            conditions: [
                'Current notification text needed',
                'Amendment chronology relevant',
                'HSN match must be exact',
                'Period-of-export determines applicable version',
                'Once verified, choose remedy accordingly'
            ],
            actions: [
                'Pull current Notification 5/2017 from CBIC tax-information portal',
                'Match output HSN against current excluded list',
                'Document HSN with supporting classification reasoning',
                'If matched → accept; if not matched → file appeal',
                'For partial match scenarios, segregate and refile'
            ]
        },

        v_itc_curable: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile After GSTR Reconciliation',
            section: 'Rule 36(4) + Section 16 + Circular 183/15/2022-GST',
            summary: 'ITC mismatch is typically curable through supplier coordination. File fresh RFD-01 once mismatch resolves in GSTR-2B. Original filing date may be preserved under deficiency-memo protection.',
            conditions: [
                'Supplier must correct GSTR-1 for the relevant period',
                'Correction flows to GSTR-2B in subsequent month',
                'Refile RFD-01 after reconciliation confirmed',
                'Two-year limitation continues to run — don\'t delay',
                'Maintain reconciliation working as evidence'
            ],
            actions: [
                'Identify specific invoices causing mismatch',
                'Coordinate with supplier for GSTR-1 correction',
                'Wait for GSTR-2B reflection (typically next monthly cycle)',
                'Refile RFD-01 with reconciliation working attached',
                'If supplier does not cooperate, switch to appeal route citing Circular 183/2022'
            ]
        },

        v_itc_partial: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile for Matched Portion + Appeal Disputed',
            section: 'Rule 36(4) + Section 16',
            summary: 'For partial mismatch, refile for the matched portion (faster, no pre-deposit) and consider appeal for the disputed portion if commercially material.',
            conditions: [
                'Segregation of matched vs unmatched ITC required',
                'Matched portion: refile RFD-01 with proportionate claim',
                'Unmatched portion: appeal if supplier cannot correct',
                'Two parallel tracks possible',
                'Document reconciliation working invoice-by-invoice'
            ],
            actions: [
                'Reconcile invoice-by-invoice and segregate matched/unmatched',
                'File fresh RFD-01 for matched portion with reconciliation',
                'For unmatched portion, evaluate appeal economics (10% pre-deposit)',
                'For small unmatched amounts, accept the loss to avoid appeal cost',
                'For large unmatched, file APL-01 citing Circular 183/2022 protection'
            ]
        },

        v_itc_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Cite Circular 183/2022 Protection',
            section: 'Rule 36(4) + Section 16 + Circular 183/15/2022-GST',
            summary: 'Where supplier cannot or will not correct GSTR-1 filing, taxpayer is not without remedy. CBIC Circular 183/2022 protects bona fide taxpayers from supplier defaults. Strong appeal ground.',
            conditions: [
                'Supplier non-cooperation must be documented',
                'Bona fide taxpayer protection under Circular 183/2022',
                'Reasonable steps taken by claimant evidenced',
                'Tax was actually paid by taxpayer to supplier',
                'No collusive arrangement'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of disputed ITC amount',
                'Cite Circular 183/15/2022-GST prominently as primary defence',
                'Document supplier follow-up correspondence',
                'Submit invoice-payment evidence and tax payment proof'
            ]
        },

        v_docs_refile: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile with Documentation',
            section: 'Rule 90(3) + Second proviso to Section 54(1)',
            summary: 'Documentation deficiencies are curable through refile. The second proviso to Section 54(1) preserves the original filing date if the deficiency memo (RFD-03) was issued within 15 days.',
            conditions: [
                'Original filing date preserved per Rule 90(3)',
                'Refile within 2-year limitation (excluding delay period)',
                'Cure all deficiencies cited in RFD-03 / RFD-08',
                'Maintain version history of submitted documents',
                'No pre-deposit required for refile (vs appeal)'
            ],
            actions: [
                'Identify each deficiency cited in RFD-03 / RFD-08',
                'Obtain all missing documents (BRC/FIRC, shipping bill, statements)',
                'For CA certificate (engage an <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a>-empanelled CA promptly if claim > ₹2 lakh)',
                'File fresh RFD-01 with complete documentation',
                'Reference original ARN to invoke Rule 90(3) protection'
            ]
        },

        v_docs_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Department Asking for Non-Statutory Docs',
            section: 'Rule 89(2) + Section 107',
            summary: 'Where department demands documents not prescribed by statute or asks for irrelevant material, refile is not appropriate. File appeal challenging the deficiency itself.',
            conditions: [
                'Statutory document list under Rule 89(2) is exhaustive',
                'Officer cannot demand documents beyond Rule 89(2) framework',
                'Outside-material doctrine — Patna HC',
                'Reasonable additional doc requests must be honoured but unreasonable ones challengeable',
                'Strong NJ argument if RFD-08 didn\'t cite the document demand'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of disputed amount',
                'Argue Rule 89(2) is exhaustive and document demand is ultra vires',
                'Cite Patna HC outside-material doctrine if applicable',
                'Prepare detailed grounds in APL-01A on document scope'
            ]
        },

        v_docs_timebar: {
            type: 'verdict', status: 'writ', headline: 'Writ — Time-Bar Layered on Documentation Issue',
            section: 'Section 54(1) + Rule 90(3) + Article 226',
            summary: 'When time-bar has lapsed during the documentation cure period, the deficiency-memo protection becomes critical. Where Rule 90(3) was not invoked correctly by department, writ petition may be the right remedy.',
            conditions: [
                'Original filing date preservation under Rule 90(3) is operative',
                'Excluded period from filing to deficiency communication',
                'Department\'s failure to apply this protection is jurisdictional error',
                'Writ jurisdiction available under Article 226',
                'High Courts have struck down similar limitation rejections'
            ],
            actions: [
                'File writ petition under Article 226 challenging time-bar application',
                'Document the chronology — original filing, deficiency memo, attempted refile',
                'Cite Rule 90(3) and second proviso to Section 54(1)',
                'Pray for direction to consider refund on merits',
                'Parallel APL-01 may be filed if within 3-month window'
            ]
        },

        v_compute_refile: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile with Corrected Computation',
            section: 'Rule 89(4) or Rule 89(5)',
            summary: 'Where the department is correct on formula application, the practical remedy is to refile with corrected working. Faster and cheaper than appeal.',
            conditions: [
                'Verify department\'s formula application against Rule 89',
                'Identify specific computation error',
                'Confirm refile is within 2-year limitation',
                'Original filing date may be preserved if refile within deficiency window',
                'No pre-deposit needed for refile'
            ],
            actions: [
                'Re-run Rule 89(4) or Rule 89(5) formula correctly',
                'Validate Net ITC, Adjusted Total Turnover, and other inputs',
                'File fresh RFD-01 with corrected computation working',
                'Attach reconciliation showing the correction',
                'Confirm relevant date and remaining limitation before filing'
            ]
        },

        v_compute_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Department\'s Formula Wrong',
            section: 'Rule 89(4) / Rule 89(5) + relevant case law',
            summary: 'Department\'s computation is incorrect on formula or interpretation. Strong appellate case with case-law support — VKC Footsteps, VSM Weavess, Filatex India contexts.',
            conditions: [
                'Department applied incorrect formula version or interpretation',
                'Multiple HCs have ruled on Rule 89 formula applications',
                'VKC Footsteps SC 2021 settled inputs-only restriction',
                'VSM Weavess Madras HC 2024 favourable view on export turnover inclusion',
                'Strong appellate arguments available'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of disputed refund amount',
                'Cite specific HC/SC rulings supporting your computation',
                'Prepare detailed working showing both versions for comparison',
                'Be prepared for technical FAA hearing on formula interpretation'
            ]
        },

        v_compute_ascent: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Cite Ascent Meditech SC 2025',
            section: 'Rule 89(5) + Notification 14/2022 + Ascent Meditech SC 2025',
            summary: 'For pre-July 2022 inverted duty claims rejected using pre-amendment formula, the Ascent Meditech ruling makes the curative amendment retrospective. Strong basis for appeal or even fresh refile.',
            conditions: [
                'Ascent Meditech SC 2025 held Notification 14/2022 amendment curative',
                'Curative amendments apply retrospectively',
                'Filatex India (Gujarat HC 2025) reached same conclusion',
                'Pre-amendment formula computed lower refund — amendment improves it',
                'Strong appellate ground for old IDS claims'
            ],
            actions: [
                'File APL-01 citing Ascent Meditech SC 2025 + Filatex India HC 2025',
                'Pre-deposit 10% of disputed amount',
                'Compute refund under amended Rule 89(5) (more favourable)',
                'Submit comparative working (pre vs post-amendment formulas)',
                'For very old claims, also evaluate fresh refile within remaining limitation'
            ]
        },

        v_category_refile: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile Under Correct Category',
            section: 'Rule 89(2) refund categories',
            summary: 'Wrong category selection is a common error. Refile under the correct category — formula and exclusions differ. Original filing date may be preserved.',
            conditions: [
                'Identify correct refund category from Rule 89(2)',
                'Different categories have different formulas (Rule 89(4) vs 89(5))',
                'Different exclusions apply by category',
                'Refile within 2-year limitation',
                'Original filing date preserved if refile within deficiency window'
            ],
            actions: [
                'Identify correct refund category — zero-rated, IDS, deemed export, S.77, etc.',
                'Re-run computation under correct category formula',
                'File fresh RFD-01 selecting correct category',
                'Cross-reference with Patron GST Refund Eligibility Checker',
                'Maintain category determination working for audit defence'
            ]
        },

        v_category_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Department\'s Reclassification Wrong',
            section: 'Rule 89(2) + relevant case law',
            summary: 'Where department reclassifies your refund into a less favourable (or barred) category, this is appealable. Original category selection must be defended with documentation.',
            conditions: [
                'Original category selection must be defensible',
                'Documentation supports the original category',
                'Department\'s reclassification must be challenged on facts and law',
                'Section 16 IGST + Rule 89(2) frameworks',
                'Strong appellate ground for substantive reclassification disputes'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of disputed amount',
                'Document why your category selection was correct',
                'Cite relevant case law supporting your classification',
                'Prepare for FAA hearing on substantive category dispute'
            ]
        },

        v_unjust_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Tax Burden Retained',
            section: 'Section 54(8) + Rule 89(2)(m)',
            summary: 'Where the tax burden has not been passed on, the unjust enrichment presumption can be rebutted. CA certificate + accounting evidence are key. Strong appeal ground if documentation is clean.',
            conditions: [
                'Section 54(8) presumption is rebuttable',
                'CA certificate under Rule 89(2)(m) for refund > ₹2 lakh',
                'Accounting evidence — recoverable in books, not charged to customers',
                'Pricing analysis showing tax was not loaded into invoice price',
                'Strong evidentiary record needed'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of disputed amount',
                'Submit detailed CA certificate with supporting working papers',
                'Provide pricing analysis demonstrating non-pass-through',
                'Cite case law on rebuttable presumption of unjust enrichment'
            ]
        },

        v_unjust_cwf: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Refund Goes to Consumer Welfare Fund',
            section: 'Section 57 + Section 54(8)',
            summary: 'Where unjust enrichment is established (tax passed on), refund is credited to Consumer Welfare Fund under Section 57, not to the applicant. Limited remedy available.',
            conditions: [
                'Section 57 establishes Consumer Welfare Fund',
                'Where tax burden passed on, refund flows to CWF',
                'Applicant gets neither the refund nor the credit',
                'Section 54(8) carves out specific exceptions (zero-rated, etc.)',
                'Limited grounds for challenge'
            ],
            actions: [
                'Verify whether your refund category falls in Section 54(8) exceptions',
                'For zero-rated and Section 54(3) ITC refunds, Section 54(8) protects direct payment',
                'For other categories where pass-through occurred, accept CWF outcome',
                'For future, build pricing/documentation to evidence non-pass-through',
                'Limited appeal merits where pass-through is admitted'
            ]
        },

        v_unjust_partial: {
            type: 'verdict', status: 'curable', headline: 'Curable — Refile for Retained Portion',
            section: 'Section 54(8) + Rule 89(2)(m)',
            summary: 'For mixed scenarios where part of tax burden was retained and part passed on, refile RFD-01 for the retained portion only with proportionate evidence and CA certificate.',
            conditions: [
                'Segregation of retained vs passed-on portion required',
                'CA certificate must support the retained portion',
                'Pricing analysis at invoice level',
                'Refile within 2-year limitation',
                'Proportionate refund computation'
            ],
            actions: [
                'Conduct detailed pricing analysis at invoice level',
                'Compute retained-burden portion with CA support',
                'Refile RFD-01 with proportionate claim and detailed working',
                'For passed-on portion, accept CWF outcome',
                'Maintain pricing evidence and CA working papers for future audits'
            ]
        },

        v_pos_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Place of Supply Dispute',
            section: 'Section 13 IGST Act + Section 2(6) IGST Act',
            summary: 'Place-of-supply disputes for service exports turn on Section 13 IGST analysis. Strong appellate case if your documentation supports recipient location, payment in FE, and arm\'s-length contractual relationship.',
            conditions: [
                'Section 13(2) general rule — POS is recipient location for B2B',
                'Specific rules for intermediary services (S.13(8)), online services, etc.',
                'Section 2(6) export of services definition must be satisfied',
                'BRC/FIRC + contract + recipient certification needed',
                'Establishment-of-distinct-persons proviso (Explanation 1 to S.8 IGST)'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of disputed amount',
                'Submit comprehensive POS analysis under Section 13',
                'Document recipient overseas location with KYC, contract, communications',
                'Cite favourable HC rulings on POS disputes'
            ]
        },

        v_pos_aar: {
            type: 'verdict', status: 'curable', headline: 'Curable Through AAR — Future Certainty',
            section: 'Section 97 (Advance Ruling)',
            summary: 'For substantively contested POS scenarios, an Advance Ruling under Section 97 provides binding certainty for future transactions. For the current rejection, parallel appeal route required.',
            conditions: [
                'Advance Ruling binding only on applicant + jurisdictional officer',
                'Useful for future transactions, not retrospective',
                'Application under Form GST ARA-01',
                'Fee ₹5,000 + ₹5,000 (CGST + SGST)',
                'Decision within 90 days typically'
            ],
            actions: [
                'For current rejection, file APL-01 within 3 months',
                'In parallel, file Form GST ARA-01 for future certainty on POS',
                'Pre-deposit 10% of disputed amount for the appeal',
                'Submit detailed POS analysis in both proceedings',
                'AAR ruling, if favourable, supports future refund applications'
            ]
        },

        v_below_threshold: {
            type: 'verdict', status: 'sustained', headline: 'Sustained — Below ₹1,000 Threshold',
            section: 'Rule 89(1) of CGST Rules',
            summary: 'Refund applications below ₹1,000 are not entertained per Rule 89(1). The credit remains in the electronic ledger but cannot be refunded as a separate application. Accumulate with future periods.',
            conditions: [
                'Rule 89(1) threshold per refund application per tax head',
                'Credit remains in electronic credit/cash ledger',
                'Multiple periods may be clubbed if relevant date and category align',
                'Threshold does not apply to UN-agency refunds under Section 55',
                'No realistic appeal merits for below-threshold rejection'
            ],
            actions: [
                'Accept the rejection',
                'Accumulate with future refunds in same category and FY',
                'File a single combined RFD-01 once threshold is crossed',
                'For UN-agency refunds, no threshold applies — pursue separately',
                'Build process to club small refunds across periods'
            ]
        },

        v_lut_writ: {
            type: 'verdict', status: 'writ', headline: 'Writ-Friendly — LUT System Glitch (Reva Giant Implex)',
            section: 'Article 226 + Rule 96A + Reva Giant Implex (Delhi HC)',
            summary: 'Where LUT was filed but the system rejected it due to portal glitches, Reva Giant Implex jurisprudence supports writ remedy. Department cannot penalise taxpayers for system failures.',
            conditions: [
                'Documented attempt to file LUT must be evidenced',
                'Portal screenshots, error logs, helpdesk tickets needed',
                'GSTN system failure rather than taxpayer error',
                'Reva Giant Implex Delhi HC sets the precedent',
                'Strong writ ground under Article 14 (arbitrariness)'
            ],
            actions: [
                'File writ petition before relevant High Court under Article 226',
                'Cite Reva Giant Implex LLP vs Union of India (Delhi HC)',
                'Submit portal screenshots and error logs as primary evidence',
                'Pray for direction to GSTN to accept LUT + process refund',
                'Maintain real-time documentation for future system-failure cases'
            ]
        },

        v_lut_payigst: {
            type: 'verdict', status: 'curable', headline: 'Curable — Pay IGST + Claim Refund Through Different Route',
            section: 'Section 16 IGST Act + Section 54',
            summary: 'Where LUT filing was missed for the relevant period, exports made without LUT cover require IGST payment. The IGST can be claimed back through fresh RFD-01 — different route, but recoverable.',
            conditions: [
                'Pay IGST on the un-LUT-covered exports',
                'File fresh RFD-01 under IGST refund category (not ITC refund)',
                'Two-year limitation from export-related relevant date',
                'Retroactive LUT filing not permitted',
                'Different refund formula and lifecycle apply'
            ],
            actions: [
                'Compute IGST liability on the un-covered exports',
                'Pay IGST + interest if material (typically 18% under Section 50)',
                'File fresh RFD-01 selecting IGST refund on zero-rated exports',
                'Submit shipping bill / EGM evidence',
                'Going forward, file LUT before each FY starts to avoid recurrence'
            ]
        },

        v_lut_late: {
            type: 'verdict', status: 'sustained', headline: 'Sustained for Pre-Filing Exports — Future LUT Cover OK',
            section: 'Rule 96A + Section 16 IGST Act',
            summary: 'LUT filed mid-year covers exports from filing date forward, not retrospectively. Pre-filing exports are without LUT cover and require IGST payment with subsequent refund.',
            conditions: [
                'LUT operates prospectively from filing date',
                'No retroactive cover for pre-filing exports',
                'Pre-filing exports require IGST payment',
                'Refund recoverable through RFD-01 (with-payment route)',
                'For future FYs, file LUT before 1 April'
            ],
            actions: [
                'For pre-LUT exports: pay IGST + claim refund through RFD-01',
                'For post-LUT exports: continue under LUT route',
                'Use Patron LUT Expiry Reminder tool for FY-end alerts',
                'No realistic appeal merits on this ground',
                'Establish March-end recurring task for annual LUT renewal'
            ]
        },

        v_portal_writ: {
            type: 'verdict', status: 'writ', headline: 'Writ-Friendly — Portal Glitch / System Failure',
            section: 'Article 226 + Reva Giant Implex (Delhi HC)',
            summary: 'GST Portal technical glitches preventing valid filing or causing erroneous rejections are a recognised writ-friendly ground. Reva Giant Implex Delhi HC is the foundational ruling.',
            conditions: [
                'Documentary evidence of system failure required',
                'Screenshots, error logs, helpdesk tickets',
                'Demonstrate that the failure is system-side, not user-side',
                'Reva Giant Implex (Delhi HC) and similar rulings support relief',
                'Article 14 + Article 19(1)(g) violations argued'
            ],
            actions: [
                'File writ petition under Article 226 before relevant High Court',
                'Submit portal screenshots, error logs, helpdesk ticket numbers',
                'Cite Reva Giant Implex LLP vs Union of India + Bombay HC ICEGATE rulings',
                'Pray for direction to GSTN + processing of refund on merits',
                'Document each portal interaction in real time for future cases'
            ]
        },

        v_natural_justice: {
            type: 'verdict', status: 'writ', headline: 'Writ-Friendly — Natural Justice Violation',
            section: 'Article 226 + Article 14 + Patna HC outside-material doctrine',
            summary: 'Where the proper officer relied on material not disclosed in RFD-08, this violates natural justice. Patna High Court has struck down such rejections. Strong writ ground.',
            conditions: [
                'Compare RFD-08 grounds with RFD-06 reasoning',
                'Any new ground or material in RFD-06 not in RFD-08 = NJ violation',
                'Article 14 (arbitrariness) + Article 21 (procedural fairness) grounds',
                'Patna HC outside-material doctrine binding',
                'Writ jurisdiction available without exhausting appeal'
            ],
            actions: [
                'File writ petition before relevant High Court under Article 226',
                'Cite Patna HC outside-material ruling',
                'Submit RFD-08 vs RFD-06 comparison highlighting new grounds',
                'Pray for quashing of RFD-06 + fresh consideration after proper SCN',
                'Parallel APL-01 may be filed if within 3-month window'
            ]
        },

        v_complex_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Appealable — Multiple Substantive Grounds',
            section: 'Section 107 + relevant grounds',
            summary: 'Multiple substantive grounds combined often warrants comprehensive appeal. Address each ground in APL-01A with separate legal arguments and case law.',
            conditions: [
                'Each rejection ground must be independently addressed',
                'Cumulative effect may strengthen or weaken appeal',
                'Pre-deposit on aggregate disputed amount',
                'Comprehensive grounds in APL-01A required',
                'FAA hearing may be lengthy on multi-ground cases'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of total disputed amount',
                'Address each ground separately in APL-01A',
                'Cite specific case law for each ground',
                'Prepare detailed working papers and documents per ground'
            ]
        },

        v_generic_appeal: {
            type: 'verdict', status: 'appealable', headline: 'Generic Appeal — Section 107 Route',
            section: 'Section 107 of CGST Act',
            summary: 'For non-standard rejections, Section 107 first appeal is the default remedy. Document specific grounds and legal arguments in APL-01A.',
            conditions: [
                'Three-month appeal window from communication of RFD-06',
                'One additional month condonable with sufficient cause',
                'Pre-deposit 10% of disputed amount (capped at ₹25 Cr)',
                'Form APL-01 + APL-01A grounds',
                'Hearing before First Appellate Authority'
            ],
            actions: [
                'File APL-01 within 3 months of RFD-06',
                'Pre-deposit 10% of disputed amount',
                'Draft detailed grounds in APL-01A with case-law support',
                'Submit complete documentation as per case requirements',
                'Track ARN through hearing to APL-04 final order'
            ]
        }
    };

    let path = ['q1'];

    function getCurrentNode() { return TREE[path[path.length - 1]]; }

    function buildPath() {
        if (path.length <= 1) return 'Start';
        return path.slice(0, -1).map(function(id) {
            const n = TREE[id];
            return n && n.lastSelectedLabel ? n.lastSelectedLabel : 'Step';
        }).join(' › ') + ' › Now';
    }

    function render() {
        const node = getCurrentNode();
        const container = document.getElementById('treeContainer');
        document.getElementById('stepCounter').textContent = node.type === 'verdict' ? 'Verdict' : 'Step ' + path.length;
        document.getElementById('stepPath').innerHTML = buildPath();
        if (node.type === 'question') renderQuestion(node, container);
        else renderVerdict(node, container);
    }

    function renderQuestion(node, container) {
        let html = '<div class="question-text">' + node.question + '</div>';
        if (node.context) html += '<div class="question-context">' + node.context + '</div>';
        html += '<div class="options">';
        node.options.forEach(function(opt) {
            html += '<button type="button" class="option-btn" data-next="' + opt.next + '" data-label="' + escapeAttr(opt.label) + '">';
            html += '<span class="opt-label">' + opt.label + '</span>';
            if (opt.sub) html += '<span class="opt-sub">' + opt.sub + '</span>';
            html += '</button>';
        });
        html += '</div>';
        html += '<div class="nav-row">';
        html += '<button type="button" class="nav-btn" id="btnBack"' + (path.length <= 1 ? ' disabled' : '') + '>← Back</button>';
        html += '<button type="button" class="nav-btn" id="btnRestart">Start Over</button>';
        html += '</div>';
        container.innerHTML = html;

        container.querySelectorAll('.option-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                getCurrentNode().lastSelectedLabel = btn.dataset.label;
                path.push(btn.dataset.next);
                render();
                window.scrollTo({top: document.getElementById('tool').offsetTop - 80, behavior: 'smooth'});
            });
        });
        document.getElementById('btnBack').addEventListener('click', goBack);
        document.getElementById('btnRestart').addEventListener('click', restart);
    }

    function renderVerdict(node, container) {
        const labels = {sustained: '✗ Rejection Sustained', curable: '✓ Curable — Refile', appealable: '⚠ Appealable', writ: '⚖ Writ-Friendly'};
        let html = '<div class="verdict-card ' + node.status + '">';
        html += '<div class="verdict-label">Remedy Verdict</div>';
        html += '<span class="verdict-pill ' + node.status + '">' + labels[node.status] + '</span>';
        html += '<div class="verdict-headline">' + node.headline + '</div>';
        html += '<div class="verdict-summary">' + node.summary + '</div>';
        html += '<div class="verdict-meta"><div class="verdict-meta-label">Statutory Basis</div><div class="verdict-meta-value">' + node.section + '</div></div>';

        if (node.status === 'appealable') {
            html += '<div class="pre-deposit-box"><h5>Section 107 Appeal — Pre-Deposit</h5>';
            html += '<p>File <strong>Form APL-01</strong> within <strong>3 months</strong> of RFD-06 communication.</p>';
            html += '<p>Pre-deposit: <strong>10%</strong> of disputed tax (max <strong>₹25 Cr</strong> per FA 2024).</p>';
            html += '<p>Heard by First Appellate Authority. Order in <strong>APL-04</strong>. Section 56 interest @ 6% on delayed disposal.</p></div>';
        } else if (node.status === 'writ') {
            html += '<div class="pre-deposit-box"><h5>Article 226 Writ Petition</h5>';
            html += '<p>File before <strong>relevant High Court</strong>. <strong>No pre-deposit</strong> required (vs appeal).</p>';
            html += '<p>Court may grant interim stay + final relief by quashing RFD-06 + remitting for fresh consideration.</p>';
            html += '<p>Limitation under Article 226 is reasonable time — typically 60-90 days from cause of action.</p></div>';
        }

        if (node.conditions && node.conditions.length) {
            html += '<div class="verdict-conditions"><h4>Key Conditions / Considerations</h4><ul>';
            node.conditions.forEach(function(c) { html += '<li>' + c + '</li>'; });
            html += '</ul></div>';
        }
        if (node.actions && node.actions.length) {
            html += '<div class="verdict-actions"><h4>Recommended Actions</h4><ol>';
            node.actions.forEach(function(a) { html += '<li>' + a + '</li>'; });
            html += '</ol></div>';
        }

        html += '</div>';
        html += '<div class="nav-row">';
        html += '<button type="button" class="nav-btn" id="btnBack">← Back</button>';
        html += '<button type="button" class="restart-btn" id="btnRestart">Analyze Another Rejection</button>';
        html += '</div>';
        container.innerHTML = html;

        document.getElementById('btnBack').addEventListener('click', goBack);
        document.getElementById('btnRestart').addEventListener('click', restart);
    }

    function goBack() {
        if (path.length <= 1) return;
        path.pop();
        render();
        window.scrollTo({top: document.getElementById('tool').offsetTop - 80, behavior: 'smooth'});
    }

    function restart() {
        path = ['q1'];
        Object.values(TREE).forEach(function(n) { delete n.lastSelectedLabel; });
        render();
        window.scrollTo({top: document.getElementById('tool').offsetTop - 80, behavior: 'smooth'});
    }

    function escapeAttr(s) { return s.replace(/"/g, '&quot;').replace(/'/g, '&#39;'); }

    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
        });
    });

    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) { if (s.offsetTop <= scrollPos) active = s.id; });
        tocLinks.forEach(function(l) { l.classList.toggle('active', l.getAttribute('href') === '#' + active); });
    }
    window.addEventListener('scroll', updateActive, {passive: true});
    updateActive();

    render();
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
