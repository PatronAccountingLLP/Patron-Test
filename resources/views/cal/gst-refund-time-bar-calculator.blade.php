@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>GST Refund Time-Bar Calculator | Section 54(1) Limit</title>
    <meta name="description" content="GST refund time-bar calculator under Section 54(1): check the 2-year limitation, relevant date by refund type and COVID extension before you file. Free CA tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-refund-time-bar-calculator/">
    <meta property="og:title" content="GST Refund Time-Bar Calculator — Section 54(1) CGST 2026">
    <meta property="og:description" content="Compute the 2-year time-bar for GST refund applications under Section 54(1). 8 refund types, relevant date logic, COVID extension. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/gst-refund-time-bar-calculator">
    <meta property="og:image" content="/tools/og/gst-refund-time-bar-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund Time-Bar Calculator — Section 54(1) CGST 2026">
    <meta name="twitter:description" content="Compute the 2-year time-bar for GST refund applications. 8 refund types, COVID extension. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/gst-refund-time-bar-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "GST Refund Time-Bar Calculator (Section 54)",
      "description": "GST Refund Time-Bar Calculator computes the two-year limitation period for filing a refund application under Section 54(1) of the Central Goods and Services Tax Act 2017, mapping each refund type to the appropriate limb of Explanation 2. The tool supports all eight categories: goods exported by sea or air with relevant date being the date the ship or aircraft leaves India, goods exported by land with relevant date being the date goods cross the frontier, goods exported by post with relevant date being the date of despatch by Post Office, deemed exports with relevant date being the date of furnishing return relating to such deemed exports, services exported with relevant date being date of foreign exchange receipt or date of invoice depending on whether supply or payment came first, refunds arising from appellate or judicial orders with relevant date being date of communication of order, refund of unutilized input tax credit under sub-section three with relevant date amended by Finance Act 2022 to be the due date for furnishing return under Section 39 for the period claim arises, provisional assessment finalisation with relevant date being date of adjustment, and any other case under residual limb (h) where relevant date is date of payment of tax. Output includes determined relevant date with statutory citation, exact time-bar date, days remaining, urgency status across four bands (Safe, Attention, Urgent, Time-Barred), and applicable note for the COVID-19 limitation extension under Notification 13/2022-Central Tax that excluded the period from 1 March 2020 to 28 February 2022 from limitation computation. Suitable for exporters claiming IGST refunds on zero-rated supplies, businesses with inverted duty structure refunds under Section 54(3), taxpayers seeking refund of excess cash ledger balance, deemed-export claimants, pre-deposit refund claimants under Sections 107(6) and 112(8), DRC-03 voluntary payment refund cases, and CA practitioners advising on refund eligibility under Mafatlal Industries doctrine.",
      "url": "/tools/gst-refund-time-bar-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "GST Refund Time-Bar Calculator", "item": "/tools/gst-refund-time-bar-calculator"}
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
          "name": "What is the time limit for filing a GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(1) of the CGST Act 2017 requires any person claiming refund to file the application before expiry of two years from the relevant date. The application is filed in Form GST RFD-01 through the GST Portal. Failure to file within this period results in time-bar; the right to refund is extinguished. Courts have held the Limitation Act 1963 does not extend this period through Section 5 condonation, making strict tracking of the relevant date critical."
          }
        },
        {
          "@type": "Question",
          "name": "What is the relevant date under Section 54?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The relevant date is defined in Explanation 2 to Section 54 and varies by refund type. For goods exported by sea or air, it is the date the ship or aircraft leaves India. For services exported, the date of foreign exchange receipt or invoice issue. For deemed exports, the date the supplier files the return. For inverted duty refunds, the GSTR-3B due date. For appellate-pursuant refunds, the date of communication of the order."
          }
        },
        {
          "@type": "Question",
          "name": "How is the relevant date for exports of goods determined?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Explanation 2(a) distinguishes three modes. For goods exported by sea or air, the relevant date is the date the ship or aircraft loaded with goods leaves India — typically the shipping bill or airway bill date where the export manifest is filed. For goods exported by land, it is the date goods pass the frontier. For goods exported by post, it is the despatch date at the Post Office. Shipping bill date is widely used as evidence."
          }
        },
        {
          "@type": "Question",
          "name": "What is the relevant date for export of services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Explanation 2(c) provides two scenarios for services. Where supply was completed before payment, the relevant date is the date of receipt of payment in convertible foreign exchange or RBI-permitted Indian rupees. Where payment was received in advance before invoice issue, the relevant date is the date of invoice. The Bank Realisation Certificate or Foreign Inward Remittance Certificate evidences the FE receipt date. Tracking which trigger applies to each transaction is essential."
          }
        },
        {
          "@type": "Question",
          "name": "What is the relevant date for inverted duty structure refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For refund of unutilised ITC under Section 54(3) on inverted duty structure, Explanation 2(e) was amended by the Finance Act 2022. The relevant date is now the due date for furnishing the return under Section 39 (GSTR-3B) for the period in which the claim for refund arises. Earlier interpretation pegged it to end of financial year. The amendment standardised the trigger to the GSTR-3B due date, providing certainty. Refund applications are filed monthly or quarterly depending on the registration profile."
          }
        },
        {
          "@type": "Question",
          "name": "How does the COVID-19 limitation extension work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 13/2022-Central Tax dated 5 July 2022 issued under Section 168A of the CGST Act excluded the period from 1 March 2020 to 28 February 2022 (730 days) from computation of limitation under Section 54(1). Where the relevant date falls within this window or the two-year period overlaps it, the time-bar extends by the overlap. The extension is automatic and requires no application."
          }
        },
        {
          "@type": "Question",
          "name": "Can the time-bar be extended through condonation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54 does not provide a condonation mechanism. The Mafatlal Industries doctrine and subsequent Supreme Court rulings establish that Section 5 of the Limitation Act 1963 does not apply to fiscal statutes like the CGST Act unless expressly extended. Once the two-year period expires, the right to refund is extinguished as a matter of law. The COVID extension under Notification 13/2022 is the only operative extension. Practitioners should treat the time-bar as absolute and file proactively well before expiry."
          }
        },
        {
          "@type": "Question",
          "name": "What is the relevant date for refund pursuant to an appeal order?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Where tax becomes refundable as a consequence of a judgment, decree, order, or direction of the Appellate Authority, Appellate Tribunal, or any court, Explanation 2(d) provides that the relevant date is the date of communication of such judgment or order to the taxpayer. The two-year clock starts on the communication date, not the order date. This is particularly relevant where orders are pronounced on one date but communicated weeks later. Always preserve the communication envelope or portal acknowledgment as evidence."
          }
        },
        {
          "@type": "Question",
          "name": "What if the deficiency memo causes refiling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Where the proper officer issues Form GST RFD-03 deficiency memo within fifteen days, the original application is treated as not filed. The taxpayer must refile after curing deficiencies. Importantly, Rule 90(3) read with the second proviso to Section 54(1) protects the original filing date — the period from filing to deficiency communication is excluded from the two-year limitation. This prevents late deficiency memos from time-barring claims filed in time."
          }
        },
        {
          "@type": "Question",
          "name": "What is the residual limb (h)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Explanation 2(h) is the catch-all for any refund scenario not falling within limbs (a) to (g). The relevant date is the date of payment of tax. Common applications include refund of excess tax paid voluntarily through DRC-03, refund of tax paid in error, and refunds not matching other limbs. Recent forum guidance confirms that for DRC-03 corrective payments post-audit, the DRC-03 payment date — not the original GSTR-3B date — is the relevant date."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim refund of excess cash ledger balance after 2 years?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54 first proviso permits refund of cash ledger balance under Section 49(6) without the two-year time-bar in some interpretations, since the balance does not represent tax paid. Conservative practitioners apply the two-year limit anyway. The relevant date is treated as the date of deposit. Some High Courts hold the cash ledger balance is the taxpayer's asset not subject to limitation, but this remains a writ-friendly position rather than settled law."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I miss the time-bar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Once the two-year window expires, the substantive right to refund is extinguished. The portal accepts the application but the proper officer rejects it as time-barred under Form GST RFD-08. Writ petitions citing equity, hardship, or administrative confusion have largely failed except where tied to the COVID extension. The only practical remedy is prevention — track the relevant date, file early, and respond to deficiency memos within 15 days."
          }
        },
        {
          "@type": "Question",
          "name": "Is the Mafatlal Industries doctrine still good law?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The Supreme Court's nine-judge bench decision in Mafatlal Industries vs Union of India (1997) remains foundational on tax refund limitation. The doctrine establishes that statutory limitation in fiscal statutes is mandatory and not procedural, that Section 5 of the Limitation Act 1963 does not apply unless expressly incorporated, and that the right to refund is purely statutory. Practitioners must treat Section 54(1) limitation as a substantive bar."
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
        .form-group input[type="date"] { font-family: var(--font-body); font-size: 15px; font-weight: 500; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .sub-mode { display: none; margin-top: 12px; }
        .sub-mode.active { display: block; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px 28px; margin-bottom: 20px; border-left: 6px solid; text-align: center; }
        .verdict-card.safe { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.attention { background: linear-gradient(135deg, #DBEAFE 0%, #BFDBFE 100%); border-left-color: var(--info); }
        .verdict-card.urgent { background: linear-gradient(135deg, #FEF3C7 0%, #ff8347 100%); border-left-color: var(--accent); }
        .verdict-card.barred { background: linear-gradient(135deg, #FEE2E2 0%, #FECACA 100%); border-left-color: var(--danger); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .days-mega { font-family: var(--font-mono); font-size: 64px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -2px; }
        .days-mega-suffix { font-size: 20px; color: var(--text-muted); margin-left: 4px; font-family: var(--font-body); font-weight: 500; vertical-align: middle; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 8px; color: #fff; }
        .verdict-pill.safe { background: var(--success); }
        .verdict-pill.attention { background: var(--info); }
        .verdict-pill.urgent { background: var(--accent); color: var(--primary-dark); }
        .verdict-pill.barred { background: var(--danger); }

        .breakdown-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 500px) { .breakdown-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .breakdown-grid { grid-template-columns: repeat(3, 1fr); } }
        .breakdown-card { background: var(--surface); border-radius: var(--radius); padding: 14px; border: 1px solid var(--border); }
        .breakdown-card.highlight { background: var(--primary); border-color: var(--primary); }
        .breakdown-card.highlight .breakdown-label, .breakdown-card.highlight .breakdown-value, .breakdown-card.highlight .breakdown-sub { color: #fff; }
        .breakdown-card.highlight .breakdown-sub { color: rgba(255,255,255,0.8); }
        .breakdown-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .breakdown-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.3; }
        .breakdown-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .progress-bar { background: var(--surface-alt); border-radius: 8px; height: 16px; margin: 16px 0 8px; overflow: hidden; position: relative; }
        .progress-fill { height: 100%; transition: width 0.6s ease; border-radius: 8px; }
        .progress-fill.safe { background: linear-gradient(90deg, var(--success) 0%, #34D399 100%); }
        .progress-fill.attention { background: linear-gradient(90deg, var(--info) 0%, #60A5FA 100%); }
        .progress-fill.urgent { background: linear-gradient(90deg, var(--accent) 0%, var(--accent-light) 100%); }
        .progress-fill.barred { background: linear-gradient(90deg, var(--danger) 0%, #F87171 100%); width: 100% !important; }
        .progress-meta { display: flex; justify-content: space-between; font-size: 11px; color: var(--text-muted); font-family: var(--font-mono); }

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
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
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
            .verdict-headline { font-size: 18px; }
            .days-mega { font-size: 44px; }
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
        <a href="#framework">Framework</a>
        <a href="#relevant-date">Relevant Date</a>
        <a href="#covid">COVID Extension</a>
        <a href="#case-law">Case Law</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    GST Refund Time-Bar Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>GST Refund Time-Bar <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Section 54(1) of the CGST Act 2017 imposes a strict <strong>two-year limitation</strong> from the "relevant date" for filing a refund application in Form GST RFD-01. The relevant date varies by refund type per <strong>Explanation 2</strong>: ship/aircraft departure for export of goods by sea/air; foreign exchange receipt or invoice date for export of services; GSTR-3B due date for inverted duty refund (post Finance Act 2022); communication date for appellate-pursuant refunds; date of payment for residual cases. The <strong>COVID extension</strong> via Notification 13/2022 excluded 1 March 2020 to 28 February 2022 from limitation. Once expired, the right to refund is extinguished — Mafatlal Industries doctrine bars condonation under Section 5 of the Limitation Act.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Compute Section 54(1) Time-Bar</h2>
            <p class="calc-intro">Select the refund type. The tool determines the applicable limb of Explanation 2 to Section 54, computes the relevant date, the two-year time-bar, days remaining, and applies the COVID extension under Notification 13/2022 if relevant.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Refund Type</div>

            <div class="calc-row" style="grid-template-columns: 1fr;">
                <div class="form-group">
                    <label for="refundType">Type of Refund</label>
                    <select id="refundType">
                        <option value="goods_sea_air">Goods exported by Sea or Air [Expl 2(a)(i)]</option>
                        <option value="goods_land">Goods exported by Land [Expl 2(a)(ii)]</option>
                        <option value="goods_post">Goods exported by Post [Expl 2(a)(iii)]</option>
                        <option value="deemed_exports">Deemed Exports [Expl 2(b)]</option>
                        <option value="services_fe_after">Services exported — supply before payment [Expl 2(c)(i)]</option>
                        <option value="services_invoice_after">Services exported — payment before invoice [Expl 2(c)(ii)]</option>
                        <option value="appellate">Pursuant to Appellate / Court order [Expl 2(d)]</option>
                        <option value="inverted_duty">Inverted Duty Structure / unutilised ITC [Expl 2(e)]</option>
                        <option value="provisional">Provisional assessment finalised [Expl 2(f)]</option>
                        <option value="cash_ledger">Excess Cash Ledger Balance [S.49(6) / Expl 2(h)]</option>
                        <option value="excess_payment">Excess Tax Paid / DRC-03 voluntary [Expl 2(h)]</option>
                        <option value="other">Other refund [Expl 2(h) — date of payment]</option>
                    </select>
                    <span class="helper">Selecting the type determines the relevant date trigger.</span>
                </div>
            </div>

            <div class="calc-section-title" id="dateLabel">Trigger Date</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="triggerDate" id="triggerDateLabel">Date Ship/Aircraft Left India</label>
                    <input type="date" id="triggerDate">
                    <span class="helper" id="triggerDateHelper">Date on shipping bill / airway bill where export manifest is filed.</span>
                </div>
                <div class="form-group">
                    <label for="filingDate">Proposed Filing Date (optional)</label>
                    <input type="date" id="filingDate">
                    <span class="helper">Leave blank to use today. Used to compute days remaining.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Time-Bar</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card safe" id="verdictCard">
                    <div class="verdict-label">Section 54(1) Time-Bar Status</div>
                    <div class="verdict-headline" id="verdictHeadline">In-Time</div>
                    <div class="days-mega" id="daysVal">—<span class="days-mega-suffix">days</span></div>
                    <span class="verdict-pill safe" id="verdictPill">✓ Safe</span>
                </div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="progress-bar">
                    <div class="progress-fill safe" id="progressFill" style="width: 0%;"></div>
                </div>
                <div class="progress-meta">
                    <span id="progressLeft">Relevant Date</span>
                    <span id="progressRight">Time-Bar</span>
                </div>

                <div class="breakdown-grid" id="breakdownGrid" style="margin-top: 22px;"></div>

                <div class="basis-block">
                    <div class="basis-label">Statutory Basis</div>
                    <div class="basis-text" id="basisText">—</div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — GST Refund Time-Bar Calculator (Section 54) validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="framework">
            <h2>Section 54(1) — The Two-Year Limitation Framework</h2>

            <p>Section 54(1) of the Central Goods and Services Tax Act 2017 establishes the foundational rule for all GST refund claims: an application must be filed before the expiry of two years from the relevant date. The provision is brief in text but consequential in operation — once the two-year window closes, the substantive right to refund is extinguished as a matter of law. There is no general condonation mechanism. The only operative extension is the COVID-19 limitation pause under Notification 13/2022-Central Tax issued under Section 168A, which excluded 1 March 2020 to 28 February 2022 from limitation computation.</p>

            <p>The statutory text reads: "Any person claiming refund of any tax and interest, if any, paid on such tax or any other amount paid by him, may make an application before the expiry of two years from the relevant date in such form and manner as may be prescribed." Refund applications are filed electronically in <a href="https://www.gst.gov.in" target="_blank" rel="noopener">Form GST RFD-01 on the GST Portal</a>. <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> notified Section 54 effective from 1 July 2017 alongside the rest of the CGST Act.</p>

            <h3>Why the Time-Bar Is Strict</h3>
            <p>The Supreme Court's nine-judge bench decision in <em>Mafatlal Industries vs Union of India</em> (1997) is the foundational ruling on tax refund limitation. The Court held that statutory limitation in fiscal statutes is mandatory, not procedural, and Section 5 of the Limitation Act 1963 cannot extend it absent express incorporation. Subsequent rulings under GST have consistently applied this principle. For practical purposes, Section 54(1) limitation is a substantive bar — missing it by even one day extinguishes the refund claim.</p>

            <div class="callout danger">
                <p><strong>No Section 5 condonation.</strong> Unlike civil suits where delay can be condoned under the Limitation Act 1963, fiscal limitation is mandatory. Writ petitions citing equity, hardship, illness, or administrative confusion have largely failed. The only practical safeguard is proactive tracking — file 60 to 90 days before the time-bar to absorb deficiency-memo refilings.</p>
            </div>

            <h3>The Computational Method</h3>
            <div class="formula-box"><span class="label">Time-Bar Date =</span> Relevant Date + 2 years

<span class="label">If COVID Extension Applies:</span>
  Add overlap of [Relevant Date → Time-Bar Date] with [1 Mar 2020 → 28 Feb 2022]

<span class="label">Days Remaining =</span> Time-Bar Date - Today (or Filing Date)</div>

            <p>The two-year period runs as a calendar period, not a working-day count. All days are included. Where the time-bar falls on a Saturday, Sunday, or public holiday, conservative practice is to file on the preceding working day. Section 10 of the General Clauses Act 1897 may extend filings due on holidays to the next working day, but this is litigated terrain — file early to avoid the question.</p>
        </section>

        <section class="content-section" id="relevant-date">
            <h2>Relevant Date by Refund Type — Explanation 2</h2>

            <p>Explanation 2 to Section 54 is the operating provision that anchors the two-year clock. It contains eight limbs (a) through (h), each tied to a specific refund category. Misreading the limb means misreading the relevant date — which means filing too late.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Limb</th><th>Refund Type</th><th>Relevant Date</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>(a)(i)</strong></td><td>Goods exported by sea or air</td><td>Date the ship or aircraft in which goods are loaded leaves India</td></tr>
                    <tr><td><strong>(a)(ii)</strong></td><td>Goods exported by land</td><td>Date the goods pass the frontier of India</td></tr>
                    <tr><td><strong>(a)(iii)</strong></td><td>Goods exported by post</td><td>Date of despatch of goods by Post Office</td></tr>
                    <tr><td><strong>(b)</strong></td><td>Deemed exports</td><td>Date of furnishing of return relating to such deemed exports</td></tr>
                    <tr><td><strong>(c)(i)</strong></td><td>Services exported — supply completed before payment receipt</td><td>Date of receipt of payment in convertible foreign exchange</td></tr>
                    <tr><td><strong>(c)(ii)</strong></td><td>Services exported — payment received in advance</td><td>Date of issue of invoice</td></tr>
                    <tr><td><strong>(d)</strong></td><td>Refundable as consequence of appellate / court order</td><td>Date of communication of judgment, decree, order, or direction</td></tr>
                    <tr><td><strong>(e)</strong></td><td>Refund of unutilised ITC under sub-section (3) — incl. inverted duty</td><td>Due date for furnishing return under Section 39 (GSTR-3B) for the period claim arises (post Finance Act 2022)</td></tr>
                    <tr><td><strong>(f)</strong></td><td>Tax paid provisionally</td><td>Date of adjustment of tax after final assessment</td></tr>
                    <tr><td><strong>(g)</strong></td><td>Person other than the supplier (consumer)</td><td>Date of receipt of goods or services by such person</td></tr>
                    <tr><td><strong>(h)</strong></td><td>Any other case (catch-all)</td><td>Date of payment of tax</td></tr>
                </tbody>
            </table>

            <h3>Export of Goods — Three Modes</h3>
            <p>For exporters of goods, Explanation 2(a) provides three sub-limbs based on mode of export. Sea or air uses the date the carrying vessel or aircraft physically leaves India — typically captured in the shipping bill or airway bill where the export manifest (EGM) is filed and the bill is "let export" by Customs. Land exports use the date the goods physically cross the international frontier. Post exports use the date the Post Office despatches the consignment outside India. The shipping bill date is widely accepted as evidentiary anchor.</p>

            <h3>Export of Services — The Two-Trigger Rule</h3>
            <p>Services exports under Explanation 2(c) trigger from whichever event is later: foreign exchange receipt or invoice issue. In practice, where the service was rendered first and payment received later, the FE receipt date governs. Where payment was received in advance and invoice issued later, the invoice date governs. The Bank Realisation Certificate (BRC) or Foreign Inward Remittance Certificate (FIRC) is the standard evidence. The <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> through its Master Direction on Export of Goods and Services governs which Indian rupee receipts qualify as FE-equivalent.</p>

            <h3>Inverted Duty Structure — Post Finance Act 2022 Amendment</h3>
            <p>For refund of unutilised input tax credit under Section 54(3), Explanation 2(e) was amended by the Finance Act 2022 to peg the relevant date to the due date for furnishing the return under Section 39 (i.e., GSTR-3B) for the period in which the refund claim arises. The earlier interpretation tied to "end of financial year" was replaced for greater certainty. For monthly filers, each month has its own relevant date based on the GSTR-3B due date for that month. This means inverted duty refund claims must be filed monthly to optimise the limitation window.</p>

            <h3>Appellate-Pursuant Refunds — The Communication Date</h3>
            <p>Where refund flows from an order of the Appellate Authority, GST Appellate Tribunal, or any court, Explanation 2(d) ties the relevant date to the date of communication, not the date of pronouncement. Orders are often pronounced and uploaded weeks before they reach the taxpayer. The communication date — typically the portal acknowledgment date or registered post receipt date — is what starts the clock. Always preserve communication evidence, including envelope postmarks and email timestamps.</p>

            <h3>The Residual Limb (h) — DRC-03 and Excess Payments</h3>
            <p>Explanation 2(h) is the catch-all for refund scenarios not falling within (a) to (g). It pegs the relevant date to "the date of payment of tax". Common applications include refund of excess tax paid voluntarily through Form GST DRC-03 post-audit, refund of tax paid in error on transactions later found non-taxable, and refunds where the underlying scenario does not fit other limbs. Recent forum guidance confirms that for DRC-03 corrective payments made after the original GSTR-3B, the DRC-03 payment date — not the original return date — is the relevant date, since the excess tax was first paid only on the DRC-03 deposit.</p>
        </section>

        <div class="body-cta">
            <h3>Time-bar approaching? Need urgent refund filing?</h3>
            <p>Patron's GST team handles refund applications, deficiency-memo response, post-appellate refund filings, and writ petitions for time-bar disputes. Rapid turnaround for urgent cases.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="covid">
            <h2>COVID-19 Limitation Extension</h2>

            <p><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> issued Notification 13/2022-Central Tax dated 5 July 2022 under Section 168A of the CGST Act, excluding the period from 1 March 2020 to 28 February 2022 (a total of 730 days) from the computation of limitation under Section 54(1). This extension was retrospective and remains operative. Where the relevant date for a refund falls within this two-year COVID window, or where the standard two-year limitation period overlaps with the window, the time-bar effectively extends by the overlap.</p>

            <h3>Worked Examples</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>Scenario</th><th>Relevant Date</th><th>Original Time-Bar</th><th>COVID-Adjusted Time-Bar</th></tr>
                </thead>
                <tbody>
                    <tr><td>Export July 2019</td><td>15 Jul 2019</td><td>15 Jul 2021</td><td>15 Jul 2023 (730 days COVID overlap added)</td></tr>
                    <tr><td>Export Sep 2020</td><td>20 Sep 2020</td><td>20 Sep 2022</td><td>20 Sep 2023 (~365 days COVID overlap added)</td></tr>
                    <tr><td>Export Apr 2022</td><td>10 Apr 2022</td><td>10 Apr 2024</td><td>10 Apr 2024 (post-COVID — no extension)</td></tr>
                </tbody>
            </table>

            <h3>How the Calculator Applies the Extension</h3>
            <p>The tool automatically computes the overlap between the two-year period (relevant date → standard time-bar) and the COVID window (1 Mar 2020 → 28 Feb 2022), and adds the overlap days to the standard time-bar. This is the conservative judicial reading of the exclusion principle. For refund claims where the relevant date falls entirely after 28 February 2022, no extension applies. The tool flags COVID-extended cases distinctly so the practitioner can reconcile against department's view.</p>

            <div class="callout">
                <p><strong>Section 168A is a power, not a right.</strong> The exclusion under Notification 13/2022 is a one-time operation tied to COVID-19 disruption. Future invocations of Section 168A would require fresh notifications. Practitioners cannot assume similar extensions for other crises absent an express CBIC notification.</p>
            </div>
        </section>

        <section class="content-section" id="case-law">
            <h2>Key Case Law on Section 54(1) Time-Bar</h2>

            <h3>Mafatlal Industries vs Union of India (Supreme Court, 1997)</h3>
            <p>The foundational nine-judge bench ruling on tax refund limitation by the <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a>-cited authority — the Supreme Court held that statutory limitation in fiscal statutes is mandatory and not procedural. Section 5 of the Limitation Act 1963 does not apply unless expressly incorporated. The right to refund is purely statutory, not a common-law remedy. While Mafatlal predates GST, its principles have been consistently applied by High Courts to Section 54(1). Practitioners must treat the two-year limitation as substantive — missing it by one day extinguishes the right, with no general condonation available.</p>

            <h3>VKC Footsteps India Pvt. Ltd. vs Union of India (Supreme Court, 2021)</h3>
            <p>The <a href="https://main.sci.gov.in" target="_blank" rel="noopener">Supreme Court of India</a> upheld the constitutional validity of Rule 89(5) restricting inverted duty refund to inputs only (excluding input services). While the case primarily addressed the refund formula, it reaffirmed that refund is a statutory entitlement bounded by Section 54 conditions. Practitioners use VKC Footsteps to anchor the proposition that all conditions of Section 54 — including the two-year limitation — are integral to the refund right.</p>

            <h3>Saurashtra Cement Ltd. vs CCE (Supreme Court)</h3>
            <p>The Supreme Court held that limitation in fiscal statutes operates as a complete bar to substantive recovery once expired. The judgment reinforced that taxpayers cannot invoke equitable doctrines to escape statutory limitation, even where the delay was caused by departmental confusion or unsettled legal position. For GST refund practice, Saurashtra Cement provides the principle that uncertain tax positions do not pause the Section 54(1) clock.</p>

            <h3>Bharat Sanchar Nigam Ltd. vs Union of India</h3>
            <p>The Court considered limitation in the indirect tax context and reaffirmed that statutory schemes contain their own limitation regimes that cannot be displaced by general law. The judgment supports the proposition that GST refund limitation under Section 54(1) is self-contained — practitioners cannot import principles from civil procedure to extend the period. The COVID extension under Notification 13/2022 is not a derogation from this principle but a legislative response.</p>

            <h3>Practical Implications for Practitioners</h3>
            <ul>
                <li><strong>Track per-transaction relevant dates.</strong> For exporters making multiple shipments, each shipping bill date is a separate relevant date. Maintain a refund register keyed to relevant dates, not financial years.</li>
                <li><strong>File before the last 90 days.</strong> Reserve a 60-90 day buffer for deficiency-memo refilings. The second proviso to Section 54(1) read with Rule 90(3) preserves the original filing date for the time-bar test, but only where RFD-03 is issued within fifteen days.</li>
                <li><strong>Don't rely on Section 5 condonation.</strong> Mafatlal forecloses general equitable extension. The only operative extension is the COVID Section 168A one.</li>
                <li><strong>For DRC-03 voluntary payments, anchor to DRC-03 date.</strong> Recent forum guidance and tribunal positions support DRC-03 payment date as relevant date under limb (h), not the original GSTR-3B date.</li>
                <li><strong>For appellate orders, anchor to communication date.</strong> Always preserve email or postal acknowledgment of the order to evidence the communication date.</li>
            </ul>
        </section>

        <section class="content-section">
            <h2>Common Practitioner Mistakes</h2>

            <h3>Treating End of FY as Relevant Date for Inverted Duty</h3>
            <p>The Finance Act 2022 amendment changed Explanation 2(e) to peg the relevant date for ITC refund under Section 54(3) to the GSTR-3B due date for the period claim arises — not the end of the financial year. Practitioners still applying the old rule risk losing refund eligibility for early months of an FY. For monthly filers, each month has its own clock.</p>

            <h3>Conflating Order Date with Communication Date</h3>
            <p>For appellate-pursuant refunds under Explanation 2(d), the relevant date is the date of communication, not pronouncement. Tribunal orders are often uploaded to the portal weeks after pronouncement. A refund claim filed two years from pronouncement may be in time if measured from communication. Always preserve the portal acknowledgment or postal envelope.</p>

            <h3>Filing Single Application for Multiple Tax Periods</h3>
            <p>For inverted duty refunds, Rule 89(4) permits a single application covering multiple tax periods within a financial year. However, each period has its own relevant date. If one of the periods has a relevant date older than two years, that month's refund is time-barred even if the application clubs all months. The proper approach is monthly filing or careful period-wise reconciliation.</p>

            <h3>Ignoring the Deficiency-Memo Protection</h3>
            <p>Where the proper officer issues Form GST RFD-03 within fifteen days, the original application is treated as not filed under Rule 90(3). However, the second proviso to Section 54(1) preserves the original filing date for the limitation test. This means a deficiency memo received in time does not destroy the limitation protection — the fresh application after curing deficiencies is still tested against the original two-year period. Practitioners commonly miss this protection and refile incorrectly.</p>

            <h3>Forgetting the COVID Extension</h3>
            <p>Many older claims still have COVID extension benefit, particularly export claims where the relevant date was 2019 or 2020. The 730-day exclusion under Notification 13/2022 can convert a seemingly time-barred claim into a live one. Always run the COVID overlap test before concluding a claim is barred.</p>

            <h3>Section 49(6) Cash Ledger Refund Confusion</h3>
            <p>The first proviso to Section 54(1) permits refund of any balance in the electronic cash ledger under Section 49(6). Whether this is subject to the two-year limitation has been contested. Some High Courts have held cash ledger balance is the taxpayer's asset, not subject to limitation. Conservative practice applies the two-year limit from date of deposit. The position is writ-friendly but unsettled.</p>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>GST Refund Filing</h3>
            <p>Refund applications, deficiency response, post-appeal refund, time-bar writs — fixed-fee, CA-signed, rapid turnaround.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Time-Bar%20Calculator%20%28Section%2054%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-return-filing" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/gstat-appeal-filing" class="sidebar-link">GSTAT Appeal Filing<span class="arrow">→</span></a>
            <a href="/gst-litigation" class="sidebar-link">GST Litigation<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-refund-interest-calculator" class="sidebar-link">GST Refund Interest (S.56)<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-interest-calculator" class="sidebar-link">GST Interest Calculator<span class="arrow">→</span></a>
            <a href="/tools/itc-eligibility-calculator" class="sidebar-link">ITC Eligibility Calculator<span class="arrow">→</span></a>
            <a href="/tools/financial-ratios-dashboard" class="sidebar-link">Financial Ratios Dashboard<span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/gst-refund-process-and-procedure" class="sidebar-link">GST Refund Process<span class="arrow">→</span></a>
            <a href="/blog/zero-rated-supplies-under-gst" class="sidebar-link">Zero-Rated Supplies<span class="arrow">→</span></a>
            <a href="/blog/inverted-duty-structure-gst" class="sidebar-link">Inverted Duty Structure<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the time limit for filing a GST refund?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 54(1) of the CGST Act 2017 requires any person claiming refund to file the application before expiry of two years from the relevant date. The application is filed in Form GST RFD-01 through the GST Portal. Failure to file within this period results in time-bar; the right to refund is extinguished. Courts have held the Limitation Act 1963 does not extend this period through Section 5 condonation, making strict tracking of the relevant date critical.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the relevant date under Section 54?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The relevant date is defined in Explanation 2 to Section 54 and varies by refund type. For goods exported by sea or air, it is the date the ship or aircraft leaves India. For services exported, the date of foreign exchange receipt or invoice issue. For deemed exports, the date the supplier files the return. For inverted duty refunds, the GSTR-3B due date. For appellate-pursuant refunds, the date of communication of the order.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How is the relevant date for exports of goods determined?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Explanation 2(a) distinguishes three modes. For goods exported by sea or air, the relevant date is the date the ship or aircraft loaded with goods leaves India — typically the shipping bill or airway bill date where the export manifest is filed. For goods exported by land, it is the date goods pass the frontier. For goods exported by post, it is the despatch date at the Post Office. Shipping bill date is widely used as evidence.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the relevant date for export of services?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Explanation 2(c) provides two scenarios for services. Where supply was completed before payment, the relevant date is the date of receipt of payment in convertible foreign exchange or RBI-permitted Indian rupees. Where payment was received in advance before invoice issue, the relevant date is the date of invoice. The Bank Realisation Certificate or Foreign Inward Remittance Certificate evidences the FE receipt date. Tracking which trigger applies to each transaction is essential.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the relevant date for inverted duty structure refund?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">For refund of unutilised ITC under Section 54(3) on inverted duty structure, Explanation 2(e) was amended by the Finance Act 2022. The relevant date is now the due date for furnishing the return under Section 39 (GSTR-3B) for the period in which the claim for refund arises. Earlier interpretation pegged it to end of financial year. The amendment standardised the trigger to the GSTR-3B due date, providing certainty. Refund applications are filed monthly or quarterly depending on the registration profile.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does the COVID-19 limitation extension work?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Notification 13/2022-Central Tax dated 5 July 2022 issued under Section 168A of the CGST Act excluded the period from 1 March 2020 to 28 February 2022 (730 days) from computation of limitation under Section 54(1). Where the relevant date falls within this window or the two-year period overlaps it, the time-bar extends by the overlap. The extension is automatic and requires no application.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can the time-bar be extended through condonation?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 54 does not provide a condonation mechanism. The Mafatlal Industries doctrine and subsequent Supreme Court rulings establish that Section 5 of the Limitation Act 1963 does not apply to fiscal statutes like the CGST Act unless expressly extended. Once the two-year period expires, the right to refund is extinguished as a matter of law. The COVID extension under Notification 13/2022 is the only operative extension. Practitioners should treat the time-bar as absolute and file proactively well before expiry.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the relevant date for refund pursuant to an appeal order?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Where tax becomes refundable as a consequence of a judgment, decree, order, or direction of the Appellate Authority, Appellate Tribunal, or any court, Explanation 2(d) provides that the relevant date is the date of communication of such judgment or order to the taxpayer. The two-year clock starts on the communication date, not the order date. This is particularly relevant where orders are pronounced on one date but communicated weeks later. Always preserve the communication envelope or portal acknowledgment as evidence.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What if the deficiency memo causes refiling?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Where the proper officer issues Form GST RFD-03 deficiency memo within fifteen days, the original application is treated as not filed. The taxpayer must refile after curing deficiencies. Importantly, Rule 90(3) read with the second proviso to Section 54(1) protects the original filing date — the period from filing to deficiency communication is excluded from the two-year limitation. This prevents late deficiency memos from time-barring claims filed in time.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the residual limb (h)?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Explanation 2(h) is the catch-all for any refund scenario not falling within limbs (a) to (g). The relevant date is the date of payment of tax. Common applications include refund of excess tax paid voluntarily through DRC-03, refund of tax paid in error, and refunds not matching other limbs. Recent forum guidance confirms that for DRC-03 corrective payments post-audit, the DRC-03 payment date — not the original GSTR-3B date — is the relevant date.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I claim refund of excess cash ledger balance after 2 years?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 54 first proviso permits refund of cash ledger balance under Section 49(6) without the two-year time-bar in some interpretations, since the balance does not represent tax paid. Conservative practitioners apply the two-year limit anyway. The relevant date is treated as the date of deposit. Some High Courts hold the cash ledger balance is the taxpayer's asset not subject to limitation, but this remains a writ-friendly position rather than settled law.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What happens if I miss the time-bar?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Once the two-year window expires, the substantive right to refund is extinguished. The portal accepts the application but the proper officer rejects it as time-barred under Form GST RFD-08. Writ petitions citing equity, hardship, or administrative confusion have largely failed except where tied to the COVID extension. The only practical remedy is prevention — track the relevant date, file early, and respond to deficiency memos within 15 days.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is the Mafatlal Industries doctrine still good law?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. The Supreme Court's nine-judge bench decision in Mafatlal Industries vs Union of India (1997) remains foundational on tax refund limitation. The doctrine establishes that statutory limitation in fiscal statutes is mandatory and not procedural, that Section 5 of the Limitation Act 1963 does not apply unless expressly incorporated, and that the right to refund is purely statutory. Practitioners must treat Section 54(1) limitation as a substantive bar.</div></div>
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

    const TYPE_CONFIG = {
        goods_sea_air:        {label: 'Date Ship/Aircraft Left India',          helper: 'Date on shipping bill / airway bill where export manifest filed.', limb: '(a)(i)',  short: 'Goods exported by sea/air'},
        goods_land:           {label: 'Date Goods Crossed Frontier',             helper: 'Date goods physically crossed Indian border into the next country.',  limb: '(a)(ii)', short: 'Goods exported by land'},
        goods_post:           {label: 'Date of Despatch by Post Office',         helper: 'Date Post Office despatched the consignment to a place outside India.', limb: '(a)(iii)', short: 'Goods exported by post'},
        deemed_exports:       {label: 'Date of Filing of Return',                helper: 'Date supplier furnished GSTR-1/GSTR-3B for the deemed-export period.', limb: '(b)',     short: 'Deemed exports'},
        services_fe_after:    {label: 'Date of Foreign Exchange Receipt',        helper: 'Date FE was received per BRC/FIRC. Use when supply was completed before payment.', limb: '(c)(i)', short: 'Services exports — FE receipt'},
        services_invoice_after: {label: 'Date of Issue of Invoice',              helper: 'Date export invoice was issued. Use when payment was received in advance.', limb: '(c)(ii)', short: 'Services exports — invoice'},
        appellate:            {label: 'Date of Communication of Order',          helper: 'Date order/judgment was communicated (portal upload, postal receipt, email).', limb: '(d)', short: 'Appellate-pursuant'},
        inverted_duty:        {label: 'GSTR-3B Due Date for the Period',         helper: 'Due date of GSTR-3B for the period in which refund claim arises (post FA 2022).', limb: '(e)', short: 'Inverted duty / unutilised ITC'},
        provisional:          {label: 'Date of Adjustment after Final Assessment', helper: 'Date provisional assessment was finalised and adjustment crystallised.', limb: '(f)', short: 'Provisional assessment'},
        cash_ledger:          {label: 'Date of Deposit into Cash Ledger',        helper: 'Date excess amount was credited to electronic cash ledger.', limb: '(h)', short: 'Excess cash ledger balance'},
        excess_payment:       {label: 'Date of DRC-03 / Tax Payment',            helper: 'Date of payment giving rise to the excess. For DRC-03, the DRC-03 deposit date.', limb: '(h)', short: 'Excess tax / DRC-03'},
        other:                {label: 'Date of Payment of Tax',                  helper: 'Date the tax sought to be refunded was originally paid.', limb: '(h)', short: 'Other refund'}
    };

    const COVID_START = new Date('2020-03-01T00:00:00');
    const COVID_END = new Date('2022-02-28T00:00:00');

    function dateVal(id) {
        const el = document.getElementById(id);
        if (!el || !el.value) return null;
        return new Date(el.value + 'T00:00:00');
    }
    function fmtDate(d) {
        if (!d) return '—';
        return d.toLocaleDateString('en-IN', {day: '2-digit', month: 'short', year: 'numeric'});
    }
    function daysBetween(d1, d2) {
        const ms = d2.getTime() - d1.getTime();
        return Math.round(ms / (1000 * 60 * 60 * 24));
    }
    function addDays(d, n) {
        const result = new Date(d);
        result.setDate(result.getDate() + n);
        return result;
    }
    function addYears(d, years) {
        const result = new Date(d);
        result.setFullYear(result.getFullYear() + years);
        return result;
    }
    function today() {
        const d = new Date();
        d.setHours(0, 0, 0, 0);
        return d;
    }
    function fmtNum(n) {
        return n.toLocaleString('en-IN');
    }

    function computeOverlap(start1, end1, start2, end2) {
        const overlapStart = start1 > start2 ? start1 : start2;
        const overlapEnd = end1 < end2 ? end1 : end2;
        if (overlapStart > overlapEnd) return 0;
        return daysBetween(overlapStart, overlapEnd) + 1; // inclusive
    }

    function updateLabels() {
        const t = document.getElementById('refundType').value;
        const cfg = TYPE_CONFIG[t];
        if (cfg) {
            document.getElementById('triggerDateLabel').textContent = cfg.label;
            document.getElementById('triggerDateHelper').textContent = cfg.helper;
        }
    }

    function compute() {
        const type = document.getElementById('refundType').value;
        const cfg = TYPE_CONFIG[type];
        const trigger = dateVal('triggerDate');
        let filing = dateVal('filingDate');
        if (!filing) filing = today();

        if (!trigger) { alert('Please enter the trigger date for the relevant date determination.'); return; }
        if (trigger > today()) { alert('Trigger date cannot be in the future.'); return; }

        // Time-bar = relevant date + 2 years (calendar)
        const standardTimeBar = addYears(trigger, 2);

        // COVID extension: overlap between (trigger, standardTimeBar) and (COVID_START, COVID_END)
        const covidOverlapDays = computeOverlap(trigger, standardTimeBar, COVID_START, COVID_END);
        const adjustedTimeBar = covidOverlapDays > 0 ? addDays(standardTimeBar, covidOverlapDays) : standardTimeBar;

        const daysRemaining = daysBetween(filing, adjustedTimeBar);
        const totalWindowDays = daysBetween(trigger, adjustedTimeBar);
        const daysElapsed = daysBetween(trigger, filing);

        let status, headline;
        if (daysRemaining < 0) {
            status = 'barred';
            headline = 'TIME-BARRED — Refund Right Extinguished';
        } else if (daysRemaining <= 60) {
            status = 'urgent';
            headline = 'URGENT — File Immediately';
        } else if (daysRemaining <= 180) {
            status = 'attention';
            headline = 'ATTENTION — Approaching Time-Bar';
        } else {
            status = 'safe';
            headline = 'IN-TIME — Safe to File';
        }

        renderResult({
            type: type, cfg: cfg, trigger: trigger, filing: filing,
            standardTimeBar: standardTimeBar, adjustedTimeBar: adjustedTimeBar,
            covidOverlapDays: covidOverlapDays,
            daysRemaining: daysRemaining, totalWindowDays: totalWindowDays, daysElapsed: daysElapsed,
            status: status, headline: headline
        });
    }

    function renderResult(r) {
        // Verdict card
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + r.status;
        document.getElementById('verdictHeadline').textContent = r.headline;

        const daysVal = document.getElementById('daysVal');
        if (r.daysRemaining < 0) {
            daysVal.innerHTML = Math.abs(r.daysRemaining) + '<span class="days-mega-suffix">days late</span>';
        } else {
            daysVal.innerHTML = fmtNum(r.daysRemaining) + '<span class="days-mega-suffix">days left</span>';
        }

        const pill = document.getElementById('verdictPill');
        pill.className = 'verdict-pill ' + r.status;
        if (r.status === 'safe') pill.textContent = '✓ Safe';
        else if (r.status === 'attention') pill.textContent = '⚠ Plan filing';
        else if (r.status === 'urgent') pill.textContent = '⏰ Urgent';
        else pill.textContent = '✗ Barred';

        // Progress bar
        const fill = document.getElementById('progressFill');
        fill.className = 'progress-fill ' + r.status;
        let pctElapsed;
        if (r.status === 'barred') pctElapsed = 100;
        else pctElapsed = Math.min(100, Math.max(0, (r.daysElapsed / r.totalWindowDays) * 100));
        fill.style.width = pctElapsed + '%';
        document.getElementById('progressLeft').textContent = 'Relevant: ' + fmtDate(r.trigger);
        document.getElementById('progressRight').textContent = 'Time-Bar: ' + fmtDate(r.adjustedTimeBar);

        // Advisory
        const adv = document.getElementById('advisoryBanner');
        if (r.status === 'barred') {
            adv.className = 'info-banner danger';
            adv.innerHTML = '<strong>Refund right extinguished.</strong> The two-year limitation under Section 54(1) expired ' + Math.abs(r.daysRemaining) + ' days ago. Per Mafatlal Industries doctrine, Section 5 of the Limitation Act does not apply. Writ remedies for time-barred GST refunds have largely failed except where COVID extension applies.';
        } else if (r.status === 'urgent') {
            adv.className = 'info-banner warn';
            adv.innerHTML = '<strong>File without delay.</strong> Only ' + r.daysRemaining + ' days remain. File RFD-01 immediately to preserve the right. Reserve a buffer for any deficiency memo (RFD-03) refilings — Rule 90(3) protects the original filing date if RFD-03 is issued within fifteen days.';
        } else if (r.status === 'attention') {
            adv.className = 'info-banner info';
            adv.innerHTML = '<strong>Plan filing within next quarter.</strong> ' + r.daysRemaining + ' days remain. Begin documentation gathering and reconciliation. Industry best practice is to file 60 to 90 days before time-bar to absorb any deficiency-memo refilings.';
        } else {
            adv.className = 'info-banner success';
            adv.innerHTML = '<strong>Comfortable window.</strong> ' + r.daysRemaining + ' days remain until time-bar. File at the optimal point — for most refund types this is after all supporting documents (BRC/FIRC, shipping bills, GSTR-2B reconciliation) are confirmed.';
        }

        // Breakdown grid
        const grid = document.getElementById('breakdownGrid');
        grid.innerHTML = '';
        const items = [
            {label: 'Relevant Date', value: fmtDate(r.trigger), sub: 'Per Expl 2' + r.cfg.limb, highlight: false},
            {label: 'Time-Bar Date', value: fmtDate(r.adjustedTimeBar), sub: r.covidOverlapDays > 0 ? 'COVID-extended ' + r.covidOverlapDays + ' days' : 'Standard 2 years', highlight: true},
            {label: r.daysRemaining >= 0 ? 'Days Remaining' : 'Days Past', value: fmtNum(Math.abs(r.daysRemaining)) + ' days', sub: 'From ' + fmtDate(r.filing), highlight: false}
        ];
        items.forEach(function(it) {
            const c = document.createElement('div');
            c.className = 'breakdown-card' + (it.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="breakdown-label">' + it.label + '</div><div class="breakdown-value">' + it.value + '</div><div class="breakdown-sub">' + it.sub + '</div>';
            grid.appendChild(c);
        });

        // Basis
        let basis = '<strong>Refund type:</strong> ' + r.cfg.short + ' — Explanation 2' + r.cfg.limb + ' to Section 54.';
        basis += '<br><br><strong>Relevant date:</strong> ' + fmtDate(r.trigger) + ' (' + r.cfg.label + ').';
        basis += '<br><strong>Standard time-bar:</strong> ' + fmtDate(r.standardTimeBar) + ' (Relevant Date + 2 calendar years).';
        if (r.covidOverlapDays > 0) {
            basis += '<br><strong>COVID extension:</strong> ' + r.covidOverlapDays + ' days added per Notification 13/2022-Central Tax (excludes 1 Mar 2020 to 28 Feb 2022 from limitation under Section 168A).';
            basis += '<br><strong>Adjusted time-bar:</strong> ' + fmtDate(r.adjustedTimeBar) + '.';
        }
        basis += '<br><br><strong>Filing date assumed:</strong> ' + fmtDate(r.filing) + '.';
        if (r.daysRemaining >= 0) {
            basis += ' Days remaining: <strong>' + fmtNum(r.daysRemaining) + '</strong>.';
        } else {
            basis += ' Days past time-bar: <strong>' + fmtNum(Math.abs(r.daysRemaining)) + '</strong>. Right is extinguished per Mafatlal doctrine.';
        }
        basis += '<br><br><strong>Form:</strong> File via <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> using Form GST RFD-01. Track ARN. Respond within 15 days to any RFD-03 deficiency memo.';
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('refundType').addEventListener('change', updateLabels);
    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        document.getElementById('refundType').value = 'goods_sea_air';
        document.getElementById('triggerDate').value = '';
        document.getElementById('filingDate').value = '';
        document.getElementById('resultSection').classList.remove('visible');
        updateLabels();
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
    updateLabels();
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
