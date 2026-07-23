@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>GST Refund Eligibility Checker | Section 54 CGST Act</title>
    <meta name="description" content="GST refund eligibility checker under Section 54: a 12-step decision tree covering exports, inverted duty, deemed exports, drawback &amp; export-duty rules. Free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-refund-eligibility-checker/">
    <meta property="og:title" content="GST Refund Eligibility Checker — Section 54 CGST 2026">
    <meta property="og:description" content="Decision-tree tool to determine GST refund eligibility under Section 54. Zero-rated, IDS, deemed exports, Section 77, drawback rules. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/gst-refund-eligibility-checker">
    <meta property="og:image" content="/tools/og/gst-refund-eligibility-checker.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund Eligibility Checker — Section 54 CGST 2026">
    <meta name="twitter:description" content="Decision-tree tool for GST refund eligibility under Section 54. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/gst-refund-eligibility-checker.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "GST Refund Eligibility Checker (Section 54)",
      "description": "GST Refund Eligibility Checker is a decision-tree tool that determines whether a refund claim is eligible under Section 54 of the Central Goods and Services Tax Act 2017. The tool walks the practitioner through a structured sequence of branching questions covering all major refund categories: export of goods with payment of IGST or under LUT, export of services with foreign exchange receipt, supplies to Special Economic Zones, accumulated unutilised ITC due to inverted duty structure under Section 54(3)(ii), excess balance in electronic cash ledger under Section 49(6), excess tax paid in error including DRC-03 corrective payments, refund pursuant to appellate or court order under Explanation 2(d), pre-deposit refund under Sections 107(6) and 112(8), deemed exports under Section 147, supplies to UN agencies and embassies under Section 55, and wrong-head tax under Section 77. The tool applies all major statutory exclusions: drawback of central tax under Rule 89 second proviso, refund of IGST paid where benefit of Notifications 40/2017 41/2017 and 48/2017 was availed, exported goods subject to export duty under Section 54(15) including the Finance Act No 2 of 2024 amendment effective 16 August 2024 extending the restriction to IGST refunds, output supplies that are nil-rated or fully exempt, same goods at different rates due to GST Council rate change per Circular 135/2020 as amended by Circular 173/2022, input services and capital goods excluded from inverted duty refund per VKC Footsteps Supreme Court 2021 ruling, notified goods or services excluded from refund under Notification 5/2017, and minimum threshold of one thousand rupees under Rule 89(1). Each verdict cites the applicable statutory provision, lists specific conditions, and recommends the next action. Suitable for exporters, manufacturers, services providers, CA practitioners, GST consultants, tax-compliance teams, and businesses navigating refund claims under the CGST Act framework.",
      "url": "/tools/gst-refund-eligibility-checker",
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
        {"@type": "ListItem", "position": 3, "name": "GST Refund Eligibility Checker", "item": "/tools/gst-refund-eligibility-checker"}
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
          "name": "Who can claim a GST refund under Section 54?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54 of the CGST Act 2017 permits any registered person to claim refund of tax, interest, or any other amount paid. Common claimants include exporters of goods or services, SEZ suppliers, businesses with inverted duty structure, deemed-export suppliers, taxpayers with excess cash ledger balance, those who paid tax in error, and parties succeeding in appellate proceedings. UN agencies claim under Section 55. The application is filed in Form GST RFD-01 through the GST Portal."
          }
        },
        {
          "@type": "Question",
          "name": "What disqualifies a GST refund claim?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Several statutory exclusions apply. Export refunds are blocked where the supplier availed duty drawback of central tax or claimed IGST refund. Refunds are denied where exported goods are subject to export duty under Section 54(15), extended to IGST by Finance Act No 2 of 2024. Inverted duty refunds are blocked where outputs are nil-rated or exempt, where inputs and outputs are same goods at different rates per Circular 135/2020, and where goods are notified under Notification 5/2017."
          }
        },
        {
          "@type": "Question",
          "name": "Are zero-rated exports always refundable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Zero-rated supplies are eligible under Section 16 of the IGST Act, but multiple conditions apply. The supplier must not have availed duty drawback. Goods must not be subject to export duty. Notifications 40/2017, 41/2017, and 48/2017 benefits availed at procurement may block IGST refund. BRC or FIRC is required for service exports. Failure to file GSTR-1 with valid shipping bill details prevents IGST refund through ICEGATE."
          }
        },
        {
          "@type": "Question",
          "name": "Can input services be refunded under inverted duty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The Supreme Court in Union of India vs VKC Footsteps India (2021) upheld Rule 89(5) which restricts inverted duty refund to inputs only — input services and capital goods are excluded. The amended Rule 89(5) under Notification 14/2022 refined the formula to proportionately account for input-services ITC in output tax. The Supreme Court in Ascent Meditech (2025) held this amendment is curative and applies retrospectively, benefiting older claims."
          }
        },
        {
          "@type": "Question",
          "name": "What is the same-goods rule under Circular 135/2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Circular 135/05/2020-GST clarified that where inputs and outputs are the same goods but attract different rates due to a GST Council rate change, refund under Section 54(3)(ii) is not available. For example, if Goods X bought at 18% had its rate reduced to 12%, accumulated ITC cannot be refunded. Circular 173/05/2022-GST refined this — where the lower rate flows from a concessional notification (such as merchant exporter supplies at 0.1%), refund is available."
          }
        },
        {
          "@type": "Question",
          "name": "What about excess cash ledger balance refunds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54 first proviso permits refund of any balance in the electronic cash ledger under Section 49(6). Some High Courts hold this refund is not subject to the two-year time-bar since the balance is the taxpayer's asset and not tax paid. Conservative practice applies the two-year limit from deposit date. The refund is processed through Form RFD-01 under category Excess balance in electronic cash ledger and does not require unjust-enrichment certification."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Section 77 refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 77 provides for refund of tax paid under the wrong head — typically CGST/SGST paid where IGST was applicable, or vice versa. The taxpayer first pays the correct tax under the right head, then claims refund of the originally paid wrong-head tax. There is no interest on the corrective payment. The refund is filed via Form RFD-01 selecting the Section 77 category. The relevant date for limitation is the correct-head payment date."
          }
        },
        {
          "@type": "Question",
          "name": "Are deemed exports always eligible for refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Deemed-export refunds under Section 54 read with Section 147 are available only for supplies notified by the Government. Currently notified categories include supplies to EOUs, against Advance Authorisation, capital goods against EPCG Authorisation, and gold by specified banks/PSUs. Either supplier or recipient may claim — not both. The relevant date is the date of furnishing return relating to deemed exports under Explanation 2(b). Recipients must obtain a no-claim declaration."
          }
        },
        {
          "@type": "Question",
          "name": "What happens after I confirm eligibility?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "After confirming eligibility, the steps are: gather supporting documents (invoices, shipping bills, BRC/FIRC, GSTR-1, GSTR-3B), reconcile ITC against GSTR-2B, prepare Statement annexures, file Form RFD-01 on the GST Portal, track ARN and acknowledgment in RFD-02 within 15 days, respond to any RFD-03 deficiency memo, and follow up for final RFD-06 with RFD-05 payment advice. Reserve buffer time before the two-year time-bar."
          }
        },
        {
          "@type": "Question",
          "name": "Is there a minimum refund amount?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Rule 89(1) provides that no refund shall be claimed if the amount is less than one thousand rupees. This threshold applies per refund application and per tax head. For amounts below threshold, credit remains in the electronic ledger but cannot be claimed. For accumulated small refunds across periods, taxpayers may club them in a single application if relevant date and category align. The threshold does not apply to UN-agency refunds under Section 55."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim refund if I missed the 2-year time-bar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Generally no. Section 54(1) imposes a strict two-year limitation from the relevant date in Explanation 2. Once expired, the right to refund is extinguished per Mafatlal Industries doctrine. The only operative extension is the COVID-19 pause under Notification 13/2022-Central Tax, excluding 1 March 2020 to 28 February 2022. Writ petitions citing equity have largely failed. Use the Patron GST Refund Time-Bar Calculator for precise computation."
          }
        },
        {
          "@type": "Question",
          "name": "How does this tool's verdict relate to the GST Portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The tool determines theoretical eligibility based on the statutory framework. The GST Portal accepts any technically valid application, but the proper officer applies the same statutory tests during scrutiny. A negative verdict indicates likely rejection through RFD-08 SCN. A positive verdict means the claim has sound statutory basis but does not guarantee approval — documentation, reconciliation, and procedural compliance still drive outcome. Use as preliminary diligence, not final determination."
          }
        },
        {
          "@type": "Question",
          "name": "Does this cover refunds under the IGST Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 16 of the IGST Act read with Section 54 of the CGST Act governs refund of IGST paid on zero-rated supplies. The zero-rated branch covers both modes: refund of IGST paid through ICEGATE and refund of unutilised ITC for LUT exports. The tool also covers SEZ supplies, deemed exports, and inverted duty refunds where IGST applies. Section 56 interest applies uniformly across CGST, SGST, IGST, and UTGST refunds delayed beyond sixty days."
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

        /* Decision tree styles */
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

        /* Verdict styles */
        .verdict-card { border-radius: var(--radius-lg); padding: 28px; border-left: 6px solid; margin-bottom: 22px; }
        .verdict-card.eligible { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.ineligible { background: linear-gradient(135deg, #FEE2E2 0%, #FECACA 100%); border-left-color: var(--danger); }
        .verdict-card.conditional { background: linear-gradient(135deg, #FEF3C7 0%, #ff8347 100%); border-left-color: var(--accent); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 8px; }
        .verdict-headline { font-size: 24px; font-weight: 700; color: var(--primary-dark); line-height: 1.3; margin-bottom: 6px; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: #fff; margin-bottom: 16px; }
        .verdict-pill.eligible { background: var(--success); }
        .verdict-pill.ineligible { background: var(--danger); }
        .verdict-pill.conditional { background: var(--accent); color: var(--primary-dark); }
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
        <a href="#calculator">Eligibility Checker</a>
        <a href="#framework">Framework</a>
        <a href="#categories">Refund Categories</a>
        <a href="#exclusions">Exclusions</a>
        <a href="#case-law">Case Law</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    GST Refund Eligibility Checker
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>GST Refund Eligibility <span>Checker</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20GST%20Refund%20Eligibility%20Checker.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Eligibility%20Checker%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20GST%20Refund%20Eligibility%20Checker.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Section 54 of the CGST Act 2017 permits refunds across <strong>10+ categories</strong> — exports, inverted duty structure, excess cash ledger, deemed exports, appellate-pursuant, Section 77 wrong-head, pre-deposit, and more. Each category carries its own statutory exclusions: drawback bars exports, export duty blocks IGST and ITC refunds (extended by Finance Act No 2 of 2024), nil-rated outputs disqualify IDS, same-goods-rate-change is not IDS per Circular 135/2020, input services excluded post <em>VKC Footsteps</em> (SC 2021). This decision-tree tool walks you through the right branch, applies the exclusions, and delivers a verdict with statutory citation and next-action guidance.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Determine Refund Eligibility</h2>
            <p class="calc-intro">Answer a few targeted questions about your refund scenario. The tool branches through the statutory framework — Section 54, Section 16 IGST, Section 77, Section 147, Rule 89 — and applies all major exclusions to deliver a verdict with citation.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this tool. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="step-meta" id="stepMeta">
                <div class="step-counter" id="stepCounter">Step 1</div>
                <div class="step-path" id="stepPath">Start</div>
            </div>

            <div id="treeContainer"></div>
        
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — GST Refund Eligibility Checker validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20GST%20Refund%20Eligibility%20Checker.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Eligibility%20Checker%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20GST%20Refund%20Eligibility%20Checker%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>

        <section class="content-section" id="framework">
            <h2>Section 54 — The Refund Framework</h2>

            <p>Section 54 of the Central Goods and Services Tax Act 2017 is the master refund provision. It governs every category of refund — tax, interest, penalty, fee, or any other amount paid — claimable by a registered person. The application is filed in <a href="https://www.gst.gov.in" target="_blank" rel="noopener">Form GST RFD-01 on the GST Portal</a> within two years from the relevant date. The two-year limitation is strict and substantive per the Mafatlal Industries doctrine. Once expired, the right is extinguished.</p>

            <p>While Section 54 establishes the overall framework, eligibility depends on satisfying multiple conditions across the CGST Act, CGST Rules, IGST Act for zero-rated supplies, and over a dozen <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> circulars and <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a> guidance notes. Each refund category — exports, inverted duty, excess balance, appellate-pursuant, deemed export, wrong head, UN agency — has its own statutory anchor and its own exclusions per the <a href="https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" target="_blank" rel="noopener">GST India</a> framework under the Constitution (101st Amendment) Act 2016. Misreading the category means filing the wrong claim form, which is rejected as not maintainable.</p>

            <h3>Where Eligibility Tests Apply</h3>
            <ul>
                <li><strong>Section 54(1)</strong> — Two-year time-bar from relevant date. Strict and statutory.</li>
                <li><strong>Section 54(3)</strong> — Refund of unutilised ITC limited to (i) zero-rated supplies under LUT and (ii) inverted duty structure. All other ITC refunds blocked.</li>
                <li><strong>Section 54(8)</strong> — Direct payment to applicant (vs Consumer Welfare Fund) only for specified categories: zero-rated, ITC under 54(3), tax paid on undelivered supply, tax under Section 77, and amounts not passed on.</li>
                <li><strong>Section 54(15)</strong> — No refund of ITC or IGST where exported goods are subject to export duty. Extended to IGST refunds by Finance Act (No 2) 2024 effective 16 August 2024.</li>
                <li><strong>Rule 89(1)</strong> — Refund applications below ₹1,000 not entertained.</li>
                <li><strong>Rule 89(5)</strong> — Inverted duty refund formula limited to inputs only (not input services or capital goods) per VKC Footsteps SC 2021. Amended by Notification 14/2022; held curative in Ascent Meditech (SC 2025).</li>
                <li><strong>Provisos to Section 54(3)</strong> — Drawback availed or IGST refund claimed bars ITC refund. Output supplies nil-rated or fully exempt bar IDS refund.</li>
            </ul>

            <div class="callout warn">
                <p><strong>Eligibility ≠ Approval.</strong> The tool tests theoretical statutory eligibility. Documentation quality, GSTR reconciliation, response to deficiency memos, and procedural compliance still drive whether the refund is sanctioned. Use the tool as preliminary diligence, not final outcome.</p>
            </div>
        </section>

        <section class="content-section" id="categories">
            <h2>Refund Categories — At a Glance</h2>

            <table class="rate-table">
                <thead>
                    <tr><th>Category</th><th>Statutory Anchor</th><th>Common Use Case</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Export of goods (with IGST)</strong></td><td>Section 54 + Section 16 IGST + Rule 96</td><td>Goods exporter pays IGST on shipment; refund processed automatically through ICEGATE on shipping bill match</td></tr>
                    <tr><td><strong>Export of goods (LUT)</strong></td><td>Section 54(3)(i) + Rule 89</td><td>Goods exporter under Letter of Undertaking; claims unutilised ITC refund</td></tr>
                    <tr><td><strong>Export of services</strong></td><td>Section 54 + Section 16 IGST + Rule 89</td><td>Services exported with FE receipt evidenced by BRC/FIRC</td></tr>
                    <tr><td><strong>SEZ supplies</strong></td><td>Section 54 + Section 16 IGST</td><td>Supplies to SEZ unit/developer treated as zero-rated</td></tr>
                    <tr><td><strong>Inverted Duty Structure</strong></td><td>Section 54(3)(ii) + Rule 89(5)</td><td>Input tax > output tax; refund of accumulated ITC on inputs only</td></tr>
                    <tr><td><strong>Excess cash ledger</strong></td><td>Section 49(6) + first proviso to S.54(1)</td><td>Cash deposited in error or excess; refund through RFD-01</td></tr>
                    <tr><td><strong>Excess tax / DRC-03</strong></td><td>Section 54(1) + Explanation 2(h)</td><td>Tax paid in error; corrective DRC-03 deposit refund</td></tr>
                    <tr><td><strong>Appellate-pursuant</strong></td><td>Section 54 + Explanation 2(d)</td><td>Refund flowing from FAA / Tribunal / HC / SC order</td></tr>
                    <tr><td><strong>Pre-deposit refund</strong></td><td>Sections 107(6), 112(8), 115</td><td>10% / 20% pre-deposit on appeal; refunded on favourable disposal</td></tr>
                    <tr><td><strong>Deemed exports</strong></td><td>Section 54 + Section 147 + Notification 48/2017</td><td>Supplies to EOU, against Advance Auth, EPCG, gold by banks</td></tr>
                    <tr><td><strong>UN agency / embassy</strong></td><td>Section 55</td><td>Specialised agency, multilateral institution, foreign consulate</td></tr>
                    <tr><td><strong>Wrong head (Section 77)</strong></td><td>Section 77</td><td>CGST/SGST paid where IGST applicable, or vice versa</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="exclusions">
            <h2>Statutory Exclusions — When Refund Is Blocked</h2>

            <p>Even where a refund falls within an eligible category, multiple exclusions can defeat the claim. Practitioners must test each exclusion before filing. The most common rejection grounds are listed below.</p>

            <h3>Drawback / IGST Refund Already Availed</h3>
            <p>The third proviso to Section 54(3) bars refund of ITC where the supplier availed of drawback in respect of central tax or claimed refund of IGST paid on the supply. This addresses double-benefit scenarios. The bar applies even if drawback was claimed for the same supply. Practitioners must verify drawback claims through Customs records before filing GST refund.</p>

            <h3>Export Duty on Goods</h3>
            <p>Section 54(15) bars refund of ITC and IGST where exported goods are subject to export duty. Originally limited to ITC refund, the restriction was extended to IGST refunds by Finance Act (No. 2) 2024, effective 16 August 2024. The amendment closed a perceived loophole where IGST-paid exports of export-duty goods were claiming refund. Practitioners exporting iron ore, certain agricultural products, and other duty-leviable goods must verify the applicable Customs Tariff Notifications.</p>

            <h3>Output Nil-Rated or Fully Exempt</h3>
            <p>The first proviso to Section 54(3)(ii) bars inverted duty refund where output supplies are nil-rated or fully exempt. This prevents refund of ITC on inputs that contributed to non-taxable outputs — the legal logic being that exempt supplies break the value-chain credit flow. Practitioners with mixed taxable and exempt output portfolios must apportion ITC carefully under Rule 42/43 before claiming inverted duty refund only on the taxable inverted portion.</p>

            <h3>Same Goods at Different Rates (Circular 135/2020)</h3>
            <p>Circular 135/05/2020-GST clarified that where inputs and outputs are the same goods but attract different tax rates due to a GST Council rate change, refund of accumulated ITC is not available. Example: Goods X purchased at 18% GST, later rate reduced to 12% — accumulated ITC cannot be refunded as IDS. The position was refined by Circular 173/05/2022-GST: where the lower output rate flows from a concessional notification (such as supplies to merchant exporters at 0.1%), refund is available. Read both circulars together.</p>

            <h3>Input Services and Capital Goods Excluded (VKC Footsteps SC 2021)</h3>
            <p>The Supreme Court in Union of India vs VKC Footsteps India Pvt Ltd upheld Rule 89(5) restricting inverted duty refund to inputs only. Input services and capital goods are excluded from the refund formula. Notification 14/2022 amended the formula proportionately — held curative in Ascent Meditech (SC 2025) and applies retrospectively. Service-heavy businesses (consulting, software, design) generally cannot claim significant inverted duty refund.</p>

            <h3>Notified Goods/Services (Notification 5/2017)</h3>
            <p>Notification 5/2017-Central Tax (Rate) lists specific goods and services where refund of unutilised ITC under Section 54(3)(ii) is not allowed even if inverted duty exists. Items have been added and removed over time — current list includes certain railway goods, edible vegetable fats, and woven fabrics in some categories. Practitioners must check the notification as amended for the relevant tax period. Recent reforms have rationalised the excluded list.</p>

            <h3>Below ₹1,000 Threshold</h3>
            <p>Rule 89(1) provides that no refund shall be claimed if the amount is less than ₹1,000. The threshold applies per refund application. Small accumulated refunds across periods may be clubbed in a single application provided the relevant date and category align. The threshold does not apply to UN-agency refunds under Section 55. For amounts below ₹1,000, the credit remains in the electronic ledger but cannot be refunded.</p>

            <h3>Time-Bar Expiry</h3>
            <p>Section 54(1) imposes the two-year limitation from the relevant date. Once expired, the right is extinguished. The COVID extension under Notification 13/2022 (excluding 1 March 2020 to 28 February 2022) is the only operative extension. Use the <a href="/tools/gst-refund-time-bar-calculator">Patron GST Refund Time-Bar Calculator</a> for precise computation by refund type.</p>
        </section>

        <div class="body-cta">
            <h3>Confirmed eligible? Need help filing the refund?</h3>
            <p>Patron's GST team handles end-to-end refund filing — RFD-01 preparation, ITC reconciliation, deficiency-memo response, post-appeal refund, Section 56 interest claim, and writ petitions where needed.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Eligibility%20Checker.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Eligibility%20Checker%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Eligibility%20Checker.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="case-law">
            <h2>Key Case Law on Refund Eligibility</h2>

            <h3>Union of India vs VKC Footsteps India Pvt. Ltd. (Supreme Court, 2021)</h3>
            <p>The <a href="https://main.sci.gov.in" target="_blank" rel="noopener">Supreme Court of India</a> upheld the constitutional validity of Rule 89(5) restricting inverted duty refund to inputs only. The Court held that input services and capital goods are excluded from the refund formula by legislative design, not arbitrariness. The judgment settled prolonged litigation across High Courts and is the foundational ruling on inverted duty refund scope. Service-heavy businesses lost a major refund stream after this ruling.</p>

            <h3>Ascent Meditech Ltd. (Supreme Court, 2025)</h3>
            <p>The Supreme Court held that the amendment to Rule 89(5) under Notification 14/2022 — which proportionately accounts for input-services ITC in payment of output tax — is curative in nature. The amendment applies retrospectively, benefiting taxpayers even for refund claims relating to periods before the notification date. Gujarat High Court in Filatex India Ltd. (2025) reached the same conclusion. Practitioners with older inverted duty claims should review whether the curative amendment improves the refund quantum.</p>

            <h3>Mafatlal Industries vs Union of India (Supreme Court, 1997)</h3>
            <p>The foundational nine-judge bench ruling on tax refund — pre-dates GST but applies to it. Held that statutory limitation in fiscal statutes is mandatory and not procedural. Section 5 of the Limitation Act 1963 does not apply unless expressly incorporated. The right to refund is purely statutory, not a common-law remedy. Practitioners must treat Section 54(1) two-year limitation as substantive — missing it extinguishes the right.</p>

            <h3>Raghav Ventures vs Commissioner of Delhi (Delhi HC, 2024)</h3>
            <p>The Delhi High Court held that interest under Section 56 on delayed refunds is statutory and automatic — no separate claim required. The judgment addressed an exporter whose IGST refund was delayed due to risky-exporter red-flagging. The court directed payment of 6% interest from day 61 and confirmed administrative investigation periods are not excludable. Critical for exporters whose refunds are routinely delayed by departmental verification processes.</p>

            <h3>VSM Weavess India Pvt. Ltd. (Madras HC, 2024)</h3>
            <p>The Madras High Court took a favourable view permitting inclusion of export turnover in the numerator of the inverted duty refund formula under Rule 89(5). The position is contrary to the conservative reading that segregates export turnover from inverted-duty turnover. The judgment is jurisdiction-specific and remains subject to litigation. Practitioners should evaluate whether to follow the favourable position based on the High Court within whose jurisdiction the GSTIN is registered.</p>

            <h3>RBI Master Direction Considerations</h3>
            <p>For service exporters, the <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> Master Direction on Export of Goods and Services governs which payment receipts qualify as foreign-exchange equivalent. INR receipt through Special Vostro Accounts of partner-country correspondent banks qualifies; pure domestic INR receipt does not. Practitioners should verify the routing mechanism through bank certificates before claiming refund.</p>

            <h3>Practitioner Implications</h3>
            <ul>
                <li>Use the decision tree to identify the correct branch — wrong-branch filings get rejected as not maintainable</li>
                <li>Verify drawback and IGST refund history before filing ITC refund</li>
                <li>For inverted duty, run Rule 89(5) formula carefully with the post-2022 amendment</li>
                <li>For service exports, ensure BRC/FIRC is in place before filing</li>
                <li>For SEZ supplies, obtain SEZ unit/developer endorsement</li>
                <li>For appellate-pursuant refunds, file fresh RFD-01 within 2 years of communication date</li>
                <li>Track the refund status using ARN; respond to deficiency memos within 15 days</li>
            </ul>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>GST Refund Filing</h3>
            <p>End-to-end refund filing — RFD-01, deficiency response, post-appeal refund, Section 56 interest claim. Fixed-fee, CA-signed.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20GST%20Refund%20Eligibility%20Checker.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Eligibility%20Checker%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20GST%20Refund%20Eligibility%20Checker.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-return-filing" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/gstat-appeal-filing" class="sidebar-link">GSTAT Appeal Filing<span class="arrow">→</span></a>
            <a href="/gst-litigation" class="sidebar-link">GST Litigation<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-refund-interest-calculator" class="sidebar-link">GST Refund Interest (S.56)<span class="arrow">→</span></a>
            <a href="/tools/gst-refund-time-bar-calculator" class="sidebar-link">GST Refund Time-Bar (S.54)<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-interest-calculator" class="sidebar-link">GST Interest Calculator<span class="arrow">→</span></a>
            <a href="/tools/itc-eligibility-calculator" class="sidebar-link">ITC Eligibility Calculator<span class="arrow">→</span></a>
            <a href="/tools/financial-ratios-dashboard" class="sidebar-link">Financial Ratios Dashboard<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/gst-refund-process-and-procedure" class="sidebar-link">GST Refund Process<span class="arrow">→</span></a>
            <a href="/blog/zero-rated-supplies-under-gst" class="sidebar-link">Zero-Rated Supplies<span class="arrow">→</span></a>
            <a href="/blog/inverted-duty-structure-gst" class="sidebar-link">Inverted Duty Structure<span class="arrow">→</span></a>
            <a href="/blog/deemed-exports-gst" class="sidebar-link">Deemed Exports under GST<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Who can claim a GST refund under Section 54?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 54 of the CGST Act 2017 permits any registered person to claim refund of tax, interest, or any other amount paid. Common claimants include exporters of goods or services, SEZ suppliers, businesses with inverted duty structure, deemed-export suppliers, taxpayers with excess cash ledger balance, those who paid tax in error, and parties succeeding in appellate proceedings. UN agencies claim under Section 55. The application is filed in Form GST RFD-01 through the GST Portal.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What disqualifies a GST refund claim?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Several statutory exclusions apply. Export refunds are blocked where the supplier availed duty drawback of central tax or claimed IGST refund. Refunds are denied where exported goods are subject to export duty under Section 54(15), extended to IGST by Finance Act No 2 of 2024. Inverted duty refunds are blocked where outputs are nil-rated or exempt, where inputs and outputs are same goods at different rates per Circular 135/2020, and where goods are notified under Notification 5/2017.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Are zero-rated exports always refundable?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">No. Zero-rated supplies are eligible under Section 16 of the IGST Act, but multiple conditions apply. The supplier must not have availed duty drawback. Goods must not be subject to export duty. Notifications 40/2017, 41/2017, and 48/2017 benefits availed at procurement may block IGST refund. BRC or FIRC is required for service exports. Failure to file GSTR-1 with valid shipping bill details prevents IGST refund through ICEGATE.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can input services be refunded under inverted duty?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">No. The Supreme Court in Union of India vs VKC Footsteps India (2021) upheld Rule 89(5) which restricts inverted duty refund to inputs only — input services and capital goods are excluded. The amended Rule 89(5) under Notification 14/2022 refined the formula to proportionately account for input-services ITC in output tax. The Supreme Court in Ascent Meditech (2025) held this amendment is curative and applies retrospectively, benefiting older claims.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the same-goods rule under Circular 135/2020?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Circular 135/05/2020-GST clarified that where inputs and outputs are the same goods but attract different rates due to a GST Council rate change, refund under Section 54(3)(ii) is not available. For example, if Goods X bought at 18% had its rate reduced to 12%, accumulated ITC cannot be refunded. Circular 173/05/2022-GST refined this — where the lower rate flows from a concessional notification (such as merchant exporter supplies at 0.1%), refund is available.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What about excess cash ledger balance refunds?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 54 first proviso permits refund of any balance in the electronic cash ledger under Section 49(6). Some High Courts hold this refund is not subject to the two-year time-bar since the balance is the taxpayer's asset and not tax paid. Conservative practice applies the two-year limit from deposit date. The refund is processed through Form RFD-01 under category Excess balance in electronic cash ledger and does not require unjust-enrichment certification.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is a Section 77 refund?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 77 provides for refund of tax paid under the wrong head — typically CGST/SGST paid where IGST was applicable, or vice versa. The taxpayer first pays the correct tax under the right head, then claims refund of the originally paid wrong-head tax. There is no interest on the corrective payment. The refund is filed via Form RFD-01 selecting the Section 77 category. The relevant date for limitation is the correct-head payment date.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Are deemed exports always eligible for refund?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Deemed-export refunds under Section 54 read with Section 147 are available only for supplies notified by the Government. Currently notified categories include supplies to EOUs, against Advance Authorisation, capital goods against EPCG Authorisation, and gold by specified banks/PSUs. Either supplier or recipient may claim — not both. The relevant date is the date of furnishing return relating to deemed exports under Explanation 2(b). Recipients must obtain a no-claim declaration.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What happens after I confirm eligibility?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">After confirming eligibility, the steps are: gather supporting documents (invoices, shipping bills, BRC/FIRC, GSTR-1, GSTR-3B), reconcile ITC against GSTR-2B, prepare Statement annexures, file Form RFD-01 on the GST Portal, track ARN and acknowledgment in RFD-02 within 15 days, respond to any RFD-03 deficiency memo, and follow up for final RFD-06 with RFD-05 payment advice. Reserve buffer time before the two-year time-bar.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is there a minimum refund amount?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. Rule 89(1) provides that no refund shall be claimed if the amount is less than one thousand rupees. This threshold applies per refund application and per tax head. For amounts below threshold, credit remains in the electronic ledger but cannot be claimed. For accumulated small refunds across periods, taxpayers may club them in a single application if relevant date and category align. The threshold does not apply to UN-agency refunds under Section 55.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I claim refund if I missed the 2-year time-bar?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Generally no. Section 54(1) imposes a strict two-year limitation from the relevant date in Explanation 2. Once expired, the right to refund is extinguished per Mafatlal Industries doctrine. The only operative extension is the COVID-19 pause under Notification 13/2022-Central Tax, excluding 1 March 2020 to 28 February 2022. Writ petitions citing equity have largely failed. Use the Patron GST Refund Time-Bar Calculator for precise computation.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does this tool's verdict relate to the GST Portal?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The tool determines theoretical eligibility based on the statutory framework. The GST Portal accepts any technically valid application, but the proper officer applies the same statutory tests during scrutiny. A negative verdict indicates likely rejection through RFD-08 SCN. A positive verdict means the claim has sound statutory basis but does not guarantee approval — documentation, reconciliation, and procedural compliance still drive outcome. Use as preliminary diligence, not final determination.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Does this cover refunds under the IGST Act?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. Section 16 of the IGST Act read with Section 54 of the CGST Act governs refund of IGST paid on zero-rated supplies. The zero-rated branch covers both modes: refund of IGST paid through ICEGATE and refund of unutilised ITC for LUT exports. The tool also covers SEZ supplies, deemed exports, and inverted duty refunds where IGST applies. Section 56 interest applies uniformly across CGST, SGST, IGST, and UTGST refunds delayed beyond sixty days.</div></div>
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
            question: 'What is the source of your refund claim?',
            context: 'Select the category that best describes why you are claiming a refund. Each category has its own statutory basis and exclusions.',
            options: [
                {label: 'Export of goods (zero-rated supply)', sub: 'Goods physically shipped out of India by sea, air, land, or post', next: 'q2_goods'},
                {label: 'Export of services', sub: 'Services rendered to overseas client with FE receipt', next: 'q2_services'},
                {label: 'Supply to SEZ unit / developer', sub: 'Zero-rated supply to Special Economic Zone', next: 'v_eligible_sez'},
                {label: 'Inverted Duty Structure (accumulated ITC)', sub: 'Input tax rate exceeds output tax rate', next: 'q2_ids'},
                {label: 'Excess balance in electronic cash ledger', sub: 'Cash deposited in error or excess', next: 'v_eligible_cashledger'},
                {label: 'Excess tax paid by error / DRC-03', sub: 'Wrongly computed tax or voluntary corrective payment', next: 'q2_excess'},
                {label: 'Pursuant to appellate / court order', sub: 'Refund flowing from FAA, Tribunal, HC, or SC ruling', next: 'v_eligible_appellate'},
                {label: 'Pre-deposit refund (post-appeal disposal)', sub: '10% / 20% pre-deposit on appeal under S.107(6) / S.112(8)', next: 'v_eligible_predeposit'},
                {label: 'Deemed exports', sub: 'Supplies to EOU, Advance Auth, EPCG holders', next: 'q2_deemed'},
                {label: 'UN agency / embassy / specified body', sub: 'Refund under Section 55 framework', next: 'v_eligible_un'},
                {label: 'Wrong head paid (CGST/SGST vs IGST)', sub: 'Tax paid under wrong head — Section 77', next: 'v_eligible_s77'}
            ]
        },

        q2_goods: {
            type: 'question',
            question: 'Did you export with payment of IGST or under LUT?',
            context: 'The two zero-rated export modes have different refund routes.',
            options: [
                {label: 'With payment of IGST', sub: 'IGST paid on shipment; refund processed via ICEGATE on shipping bill match', next: 'q3_igst_drawback'},
                {label: 'Under LUT (without payment of IGST)', sub: 'Letter of Undertaking; claim refund of unutilised ITC', next: 'q3_lut_exportduty'}
            ]
        },

        q3_igst_drawback: {
            type: 'question',
            question: 'Did you avail duty drawback or notification benefits at procurement?',
            context: 'The third proviso to Section 54(3) and Rule 96(10) bar IGST refund where drawback or specified notification benefits were availed.',
            options: [
                {label: 'Yes — claimed drawback of central tax', sub: 'Higher all-industry rate or brand-rate drawback', next: 'v_inelig_drawback'},
                {label: 'Yes — availed Notification 40/2017, 41/2017, or 48/2017', sub: 'Concessional 0.1% procurement; deemed export benefit', next: 'v_inelig_notification'},
                {label: 'No — no drawback or notification benefit', sub: 'Pure IGST-paid export with no parallel concession', next: 'q4_igst_exportduty'}
            ]
        },

        q4_igst_exportduty: {
            type: 'question',
            question: 'Are the exported goods subject to export duty under the Customs Tariff Act?',
            context: 'Section 54(15) bars refund where exported goods attract export duty. Finance Act (No. 2) 2024 effective 16 August 2024 extended this to IGST refunds.',
            options: [
                {label: 'Yes — goods attract export duty', sub: 'E.g., iron ore, certain agricultural items', next: 'v_inelig_exportduty_igst'},
                {label: 'No — no export duty applicable', sub: 'Most manufactured goods and services', next: 'v_eligible_goods_igst'}
            ]
        },

        q3_lut_exportduty: {
            type: 'question',
            question: 'Are the exported goods subject to export duty?',
            context: 'Section 54(15) bars refund of unutilised ITC on exports of goods subject to export duty. This restriction has been operative since 2017.',
            options: [
                {label: 'Yes — goods attract export duty', sub: 'E.g., iron ore, specified agricultural goods', next: 'v_inelig_exportduty_lut'},
                {label: 'No — no export duty applicable', sub: 'Most manufactured/processed goods', next: 'q4_lut_drawback'}
            ]
        },

        q4_lut_drawback: {
            type: 'question',
            question: 'Did you avail drawback of central tax on this export?',
            context: 'The third proviso to Section 54(3) bars ITC refund where drawback of central tax was claimed.',
            options: [
                {label: 'Yes — drawback availed', sub: 'Higher all-industry rate or brand rate of drawback', next: 'v_inelig_drawback_lut'},
                {label: 'No — no drawback claimed', sub: 'Only declared customs drawback (not central tax component)', next: 'v_eligible_goods_lut'}
            ]
        },

        q2_services: {
            type: 'question',
            question: 'Have you received foreign exchange evidence (BRC / FIRC)?',
            context: 'Service exports require Bank Realisation Certificate or Foreign Inward Remittance Certificate to establish FE receipt.',
            options: [
                {label: 'Yes — BRC/FIRC available', sub: 'Foreign exchange received and documented', next: 'v_eligible_services'},
                {label: 'No — payment received in INR (Vostro / RBI-permitted)', sub: 'Payment in INR through specified vostro account', next: 'v_eligible_services_inr'},
                {label: 'No — no FE / RBI-permitted INR receipt', sub: 'Payment in domestic INR or pending receipt', next: 'v_inelig_no_fe'}
            ]
        },

        q2_ids: {
            type: 'question',
            question: 'What is the status of your output supplies?',
            context: 'Inverted Duty Structure requires output supply to be taxable but at a lower rate than inputs.',
            options: [
                {label: 'Output is taxable but at lower rate than inputs', sub: 'E.g., footwear, textiles in some categories', next: 'q3_ids_samegoods'},
                {label: 'Output is nil-rated or fully exempt', sub: 'Outputs are not chargeable to GST', next: 'v_inelig_nilexempt'},
                {label: 'Output is zero-rated (export)', sub: 'Treat as zero-rated supply, not IDS', next: 'q2_goods'}
            ]
        },

        q3_ids_samegoods: {
            type: 'question',
            question: 'Are your inputs and outputs the SAME goods at different rates?',
            context: 'Circular 135/2020 (as amended by Circular 173/2022) bars refund where same goods attract different rates due to GST Council rate change.',
            options: [
                {label: 'Yes — same goods, rate changed by GST Council', sub: 'E.g., bought X at 18%, rate reduced to 12% later', next: 'v_inelig_samegoods'},
                {label: 'Yes — same goods at concessional rate (notification)', sub: 'E.g., merchant exporter supply at 0.1% concessional rate', next: 'q4_ids_notified'},
                {label: 'No — inputs and outputs are different goods', sub: 'Genuine inverted duty structure', next: 'q4_ids_notified'}
            ]
        },

        q4_ids_notified: {
            type: 'question',
            question: 'Are output goods/services in the notified excluded list?',
            context: 'Notification 5/2017-Central Tax (Rate) lists specific goods where IDS refund is blocked. Examples have included certain railway goods and woven fabrics. Check the notification as amended.',
            options: [
                {label: 'Yes — output is in Notification 5/2017 list', sub: 'IDS refund explicitly blocked for these items', next: 'v_inelig_notified'},
                {label: 'No — output not in excluded list', sub: 'Most output supplies are eligible', next: 'v_eligible_ids'},
                {label: 'Not sure — please assume not in list', sub: 'Will require manual verification of HSN against current notification', next: 'v_eligible_ids_check'}
            ]
        },

        q2_excess: {
            type: 'question',
            question: 'What is the source of the excess payment?',
            context: 'The applicable provision and relevant date depend on the cause.',
            options: [
                {label: 'Excess GSTR-3B payment / clerical error', sub: 'Computation error in routine return filing', next: 'v_eligible_excess'},
                {label: 'Voluntary DRC-03 corrective payment', sub: 'Paid voluntarily after audit / SCN to close issue', next: 'v_eligible_drc03'},
                {label: 'Wrong head — paid CGST/SGST instead of IGST or vice versa', sub: 'Inter-state/intra-state mix-up', next: 'v_eligible_s77'}
            ]
        },

        q2_deemed: {
            type: 'question',
            question: 'Is your supply notified as deemed export under Section 147?',
            context: 'Notification 48/2017-Central Tax lists qualifying deemed-export supplies. Currently includes supplies to EOU, against Advance Authorisation, capital goods against EPCG, and gold by specified banks/PSUs.',
            options: [
                {label: 'Yes — supply is in notified deemed-export list', sub: 'Notification 48/2017 or its amendments cover the supply', next: 'v_eligible_deemed'},
                {label: 'No — supply is not notified as deemed export', sub: 'Cannot claim deemed-export refund route', next: 'v_inelig_notdeemed'}
            ]
        },

        // ============ VERDICTS ============

        v_eligible_goods_igst: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund of IGST on Zero-Rated Goods Export',
            section: 'Section 54 + Section 16 IGST Act + Rule 96',
            summary: 'You are eligible to claim refund of IGST paid on the export of goods. The refund is processed automatically through the ICEGATE system on matching the shipping bill with GSTR-1 and GSTR-3B data. No separate RFD-01 application is required for this category in most cases.',
            conditions: [
                'GSTR-1 must be filed with valid shipping bill / port code / invoice details',
                'GSTR-3B must be filed for the same period showing IGST payment',
                'Shipping bill must show "let export" status with EGM filed',
                'Bank account validated and linked at GST Portal',
                'No drawback availed and goods not subject to export duty'
            ],
            actions: [
                'Verify GSTR-1 export-tab shipping bill details against ICEGATE',
                'Confirm GSTR-3B IGST payment matches shipping bill IGST amount',
                'Track refund status on ICEGATE under Refund Status enquiry',
                'For unmatched cases, follow Circular 125/44/2019 reconciliation process',
                'If delayed beyond 60 days, claim Section 56 interest at 6% per annum'
            ]
        },

        v_eligible_goods_lut: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund of Unutilised ITC on LUT Export',
            section: 'Section 54(3)(i) + Rule 89',
            summary: 'You are eligible to claim refund of unutilised input tax credit accumulated due to zero-rated supplies (export under LUT) without payment of tax. The refund formula under Rule 89(4) is: Net ITC × (Turnover of zero-rated supplies ÷ Adjusted Total Turnover).',
            conditions: [
                'Valid LUT in place at the time of export',
                'Goods physically exported with shipping bill / EGM evidence',
                'GSTR-1 and GSTR-3B filed for the relevant period',
                'No drawback of central tax availed on the export',
                'Goods not subject to export duty (Section 54(15))'
            ],
            actions: [
                'File RFD-01 selecting "Refund of unutilized ITC on account of exports without payment of tax"',
                'Attach Statement 3 with shipping bill / BRC details',
                'Reconcile Net ITC against GSTR-2B; exclude blocked credits under Section 17(5)',
                'Compute refund using Rule 89(4) formula with adjusted total turnover',
                'Maintain LUT validity record and file for renewal annually'
            ]
        },

        v_eligible_services: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund on Export of Services',
            section: 'Section 54 + Section 16 IGST + Rule 89',
            summary: 'You are eligible to claim refund of either IGST paid on services exported (with payment) or unutilised ITC (under LUT). Service exports require strict satisfaction of the Section 2(6) IGST Act conditions including foreign-exchange receipt.',
            conditions: [
                'Supplier in India, recipient outside India, place of supply outside India',
                'Payment received in convertible foreign exchange or RBI-permitted INR',
                'BRC / FIRC documenting FE receipt obtained from authorised dealer bank',
                'Supplier and recipient not establishments of distinct persons',
                'Valid LUT in place if claiming refund of unutilised ITC route'
            ],
            actions: [
                'File RFD-01 with Statement 2 (with payment) or Statement 3A (under LUT)',
                'Attach BRC/FIRC for each invoice claimed',
                'Provide service agreement and place-of-supply analysis',
                'For LUT route, compute refund using Rule 89(4) formula',
                'Track ARN; respond to RFD-03 deficiency memo within 15 days'
            ]
        },

        v_eligible_services_inr: {
            type: 'verdict', status: 'conditional', headline: 'Conditional Eligibility — INR Receipt under RBI Master Direction',
            section: 'Section 2(6) IGST Act + RBI Master Direction on Export of Goods and Services',
            summary: 'INR receipt qualifies as foreign exchange equivalent only where it complies with RBI Master Direction. Specifically, payment through Special Vostro Accounts of correspondent banks of partner countries is accepted. Other INR receipts may not qualify.',
            conditions: [
                'Payment routed through Special Vostro Account or RBI-permitted mechanism',
                'Authorised dealer bank issues BRC/FIRC equivalent for INR receipt',
                'Compliance with RBI A.P. (DIR Series) Circulars on rupee invoicing',
                'Documentation of mechanism through which INR was credited',
                'Place of supply, recipient location conditions of Section 2(6) IGST Act satisfied'
            ],
            actions: [
                'Obtain advance ruling on whether your INR mechanism qualifies as FE-equivalent',
                'Maintain bank certificate confirming Special Vostro routing',
                'File RFD-01 with full RBI compliance documentation',
                'Be prepared for departmental scrutiny — write-friendly position',
                'Consider parallel applications under different categories if uncertain'
            ]
        },

        v_eligible_sez: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund on SEZ Supplies (Zero-Rated)',
            section: 'Section 54 + Section 16 IGST Act + Rule 89',
            summary: 'Supplies to SEZ units or developers are zero-rated under Section 16 IGST Act. You can claim refund of either IGST paid (with payment route) or unutilised ITC (under LUT route).',
            conditions: [
                'Recipient must be a registered SEZ unit or SEZ developer',
                'SEZ unit/developer endorsement on the invoice required',
                'Supplies must be for authorised operations of the SEZ unit',
                'Declaration that tax has not been collected from SEZ unit/developer',
                'No restriction notifications availed at procurement that block refund'
            ],
            actions: [
                'File RFD-01 selecting "Refund on supplies to SEZ unit/developer"',
                'Attach Statement 4 (with payment) or Statement 5 (under LUT)',
                'Obtain SEZ unit/developer endorsement on each invoice',
                'Provide evidence of authorised-operations nexus',
                'Submit declaration on non-collection of tax from SEZ recipient'
            ]
        },

        v_eligible_ids: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Inverted Duty Refund (Inputs Only)',
            section: 'Section 54(3)(ii) + Rule 89(5)',
            summary: 'You are eligible to claim refund of accumulated unutilised ITC due to inverted duty structure. The refund is limited to ITC on inputs only — input services and capital goods are excluded per VKC Footsteps SC 2021. Apply Rule 89(5) formula.',
            conditions: [
                'Output supply is taxable but at lower rate than inputs',
                'Output is not nil-rated, fully exempt, or in Notification 5/2017 excluded list',
                'Inputs and outputs are different goods (not same goods at rate-changed positions)',
                'No drawback of central tax availed; no IGST refund claimed',
                'GSTR-1 and GSTR-3B filed for the refund period'
            ],
            actions: [
                'File RFD-01 selecting "Refund on account of ITC accumulated due to inverted tax structure"',
                'Apply Rule 89(5) formula: (Turnover of inverted rated supply × Net ITC ÷ Adjusted Total Turnover) − Tax payable on inverted rated supply',
                'Use Notification 14/2022 amended formula (held curative in Ascent Meditech SC 2025)',
                'Reconcile Net ITC excluding input services, capital goods, blocked credits',
                'Submit declarations under Rule 89(2)(l) and 89(2)(m)'
            ]
        },

        v_eligible_ids_check: {
            type: 'verdict', status: 'conditional', headline: 'Conditional — Verify Notification 5/2017 Status',
            section: 'Section 54(3)(ii) + Rule 89(5) + Notification 5/2017-CT (Rate)',
            summary: 'Eligibility depends on whether your output goods/services are listed in Notification 5/2017-Central Tax (Rate) as amended. The notification has been periodically updated. Verify HSN against the current list before filing.',
            conditions: [
                'Verify HSN of output supply against Notification 5/2017 as amended',
                'Recent reforms have rationalised the excluded list — many earlier exclusions removed',
                'Conditional rules apply — some entries restrict refund to specified date ranges',
                'All other IDS conditions must independently be satisfied',
                'Consider seeking advance ruling if HSN classification is contested'
            ],
            actions: [
                'Pull current Notification 5/2017 from CBIC tax-information portal',
                'Match output HSN against the excluded list',
                'If matched, refund is blocked for that output category',
                'If not matched, proceed with Rule 89(5) refund computation',
                'Document HSN classification with supporting reasoning'
            ]
        },

        v_eligible_cashledger: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund of Excess Cash Ledger Balance',
            section: 'Section 49(6) + first proviso to Section 54(1)',
            summary: 'You are eligible to claim refund of any unutilised balance in the electronic cash ledger. The first proviso to Section 54(1) provides a simplified route. Some High Courts hold this refund is not subject to the two-year time-bar.',
            conditions: [
                'Balance must be in the electronic cash ledger (not credit ledger)',
                'No outstanding tax / interest / penalty due against the GSTIN',
                'GST returns must be filed up to date',
                'Refund amount must exceed ₹1,000 threshold under Rule 89(1)',
                'No unjust enrichment certification required (does not represent tax paid)'
            ],
            actions: [
                'File RFD-01 selecting "Refund of excess balance in electronic cash ledger"',
                'No supporting documents typically required beyond balance evidence',
                'Track ARN; refund typically processed faster than other categories',
                'For older balances, write-friendly position on no time-bar applicability',
                'Consider regular cash ledger refunds to avoid working capital blockage'
            ]
        },

        v_eligible_excess: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund of Excess Tax Paid',
            section: 'Section 54(1) + Explanation 2(h)',
            summary: 'You are eligible to claim refund of tax paid in excess due to clerical error or computational mistake in routine GSTR-3B filing. Filed under residual limb (h) of Explanation 2 with relevant date being the date of payment of tax.',
            conditions: [
                'Excess payment must be evidenced through GSTR reconciliation',
                'No corresponding supply for which the tax was payable',
                'Two-year time-bar from date of payment under Explanation 2(h)',
                'Unjust enrichment principle applies — tax burden must not have been passed on',
                'Below ₹1,000 threshold not entertained'
            ],
            actions: [
                'File RFD-01 selecting "Excess payment of tax"',
                'Attach Statement 7 detailing computation of excess payment',
                'Submit unjust enrichment declaration or CA certificate (if claim > ₹2 lakh)',
                'Reconcile excess against GSTR-1, GSTR-3B, books of account',
                'Track ARN; respond to RFD-03 deficiency memo within 15 days'
            ]
        },

        v_eligible_drc03: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund of Voluntary DRC-03 Payment',
            section: 'Section 54(1) + Explanation 2(h) — Date of DRC-03 Payment',
            summary: 'For voluntary DRC-03 payments made post-audit/SCN where the underlying liability is later determined non-existent, you are eligible to claim refund. Crucially, the relevant date is the DRC-03 payment date — not the original GSTR-3B date, per recent forum guidance.',
            conditions: [
                'DRC-03 payment must be voluntary (Section 73(5) or 74(5)) or pursuant to SCN',
                'Underlying liability subsequently determined non-existent or excessive',
                'Two-year time-bar from DRC-03 payment date under Explanation 2(h)',
                'Documentation of audit/SCN reference and reasoning for DRC-03 payment',
                'Unjust enrichment burden test applies'
            ],
            actions: [
                'File RFD-01 selecting "Excess payment of tax" with DRC-03 reference',
                'Attach DRC-03 challan, audit/SCN reference, and basis for refund claim',
                'Argue Explanation 2(h) DRC-03 date as relevant date (case law supports)',
                'Submit unjust enrichment declaration / CA certificate as applicable',
                'Be prepared for departmental challenge on relevant-date interpretation'
            ]
        },

        v_eligible_appellate: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Refund Pursuant to Appellate / Court Order',
            section: 'Section 54 + Explanation 2(d) + Section 115',
            summary: 'You are eligible to claim refund flowing from an order of the First Appellate Authority, GST Appellate Tribunal, High Court, or Supreme Court that has attained finality. The relevant date is the date of communication of the order, not pronouncement.',
            conditions: [
                'Order must have attained finality (no further appeal pending or limitation expired)',
                'Order must direct refund explicitly or implicitly through tax determination',
                'Two-year time-bar from communication date under Explanation 2(d)',
                'Pre-deposit refund follows automatically per Section 115',
                'Section 56 interest at 9% per annum applies if delayed beyond 60 days'
            ],
            actions: [
                'File fresh RFD-01 with certified copy of the appellate/court order',
                'Reference the order in the RFD-01 narrative and supporting documents',
                'Track communication date carefully — preserve postal receipt or portal acknowledgment',
                'Claim Section 56 interest at 9% if delayed (per Bansal International two-tier doctrine)',
                'For pre-deposit refund, also reference Section 115 in covering letter'
            ]
        },

        v_eligible_predeposit: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Pre-Deposit Refund Post Appellate Disposal',
            section: 'Sections 107(6), 112(8), 115',
            summary: 'You are eligible to refund the 10% (first appeal) or 20% (tribunal appeal) pre-deposit on favourable disposal. Section 115 provides interest from the date of payment until refund — more generous than Section 56 because the funds were never owed.',
            conditions: [
                'Appeal must have been disposed of in your favour (or substantially so)',
                'Pre-deposit was made under Section 107(6) or Section 112(8)',
                'Order must have attained finality at the relevant appellate level',
                'Refund includes interest at 6% from date of payment per Section 115',
                'No outstanding dues against the GSTIN that could be set off'
            ],
            actions: [
                'File RFD-01 selecting "Refund of any other amount (Pre-deposit)"',
                'Attach appellate order, pre-deposit challan, and order reference',
                'Compute Section 115 interest from payment date to expected refund date',
                'Track ARN; if delayed beyond 60 days, claim additional interest under Section 56',
                'File writ petition if department resists payment despite favourable order'
            ]
        },

        v_eligible_deemed: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Deemed Export Refund',
            section: 'Section 54 + Section 147 + Notification 48/2017-Central Tax',
            summary: 'You are eligible to claim refund on supplies notified as deemed exports. Either the supplier or the recipient may claim — not both. The relevant date under Explanation 2(b) is the date of furnishing the return relating to such deemed exports.',
            conditions: [
                'Supply must be in notified deemed-export list (Notification 48/2017 as amended)',
                'Either supplier or recipient claims (one only — coordinate to avoid duplicate)',
                'For supplier claim: tax must have been paid by the supplier',
                'For recipient claim: declaration from supplier confirming no claim filed',
                'Two-year time-bar from return-filing date under Explanation 2(b)'
            ],
            actions: [
                'File RFD-01 selecting "Refund on account of deemed exports"',
                'Attach Statement 5B with supply documents and tax payment evidence',
                'For recipient claim, obtain Annexure A undertaking from supplier',
                'For EOU/Advance Auth supplies, attach authorisation copy',
                'Reconcile supplier-recipient claims to avoid double benefit'
            ]
        },

        v_eligible_un: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — UN / Embassy Refund under Section 55',
            section: 'Section 55 + Notification 16/2017-Central Tax (as amended)',
            summary: 'Specified UN agencies, multilateral financial institutions, foreign consulates, and notified persons are eligible for refund of GST paid on inward supplies. The framework operates on a quarterly cycle — application within 6 months from end of the quarter in which supply was received (extended from 2 years for these special bodies).',
            conditions: [
                'Body must be notified under Section 55 / Notification 16/2017',
                'Refund relates to GST paid on inward supplies (not on supplies made by them)',
                'Refund application within 6 months from end of quarter in which supply received',
                'Special UN-format application typically processed faster',
                'Minimum threshold under Rule 89(1) does not apply to these refunds'
            ],
            actions: [
                'File RFD-10 (specific to UN/specified persons) instead of RFD-01',
                'Attach Statement 6 with quarterly inward supply details',
                'Coordinate with the diplomatic mission liaison or finance officer',
                'Track ARN through dedicated UN refund processing channel',
                'Maintain quarterly filing discipline to optimise the limitation window'
            ]
        },

        v_eligible_s77: {
            type: 'verdict', status: 'eligible', headline: 'Eligible — Section 77 Wrong Head Refund',
            section: 'Section 77 of CGST Act + Section 19 of IGST Act',
            summary: 'You are eligible to claim refund of tax paid under the wrong head. Pay the correct tax under the correct head first, then claim refund of the originally paid wrong-head tax. There is no interest implication on the corrective payment per Section 77.',
            conditions: [
                'Original tax paid as CGST/SGST when IGST was applicable, or vice versa',
                'Place-of-supply analysis confirms correct head was different',
                'Correct tax must be paid under correct head before claiming refund',
                'Two-year time-bar from date of payment of correct tax (operative position)',
                'No interest on the corrective payment per Section 77 first proviso'
            ],
            actions: [
                'Determine correct place of supply per Sections 10-13 IGST Act',
                'Pay correct tax under correct head with applicable interest if material',
                'File RFD-01 selecting "Refund of tax paid on a supply not provided / wrong head"',
                'Attach reconciliation showing wrong-head payment and correct-head payment',
                'Submit Statement 7 with complete chronology and documentation'
            ]
        },

        // INELIGIBLE VERDICTS

        v_inelig_drawback: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Drawback of Central Tax Availed',
            section: 'Third proviso to Section 54(3) + Rule 96(10)',
            summary: 'IGST refund on exports is barred where the supplier availed drawback of central tax. The bar prevents double-benefit. This applies even where the drawback was claimed at higher all-industry rate or brand rate that includes the central-tax component.',
            conditions: [
                'Section 54(3) third proviso: no refund where drawback of central tax availed',
                'Rule 96(10) similarly bars IGST refund where benefit availed',
                'Higher-rate drawback typically includes central tax component → bars refund',
                'Lower-rate (customs-only) drawback does not include central tax → does not bar refund',
                'Verify drawback nature before concluding ineligibility'
            ],
            actions: [
                'Check drawback rate claimed — was it lower (customs only) or higher (with central tax)?',
                'If only customs drawback was claimed, refund may still be available — re-test',
                'Consider reversing drawback claim and refiling for IGST refund where commercially better',
                'For pure customs drawback (no central tax), proceed with refund — flag this in filing',
                'Document drawback chronology for departmental scrutiny'
            ]
        },

        v_inelig_drawback_lut: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Drawback Availed on LUT Export',
            section: 'Third proviso to Section 54(3)',
            summary: 'Refund of unutilised ITC on exports under LUT is barred where drawback of central tax was availed on the same supply. Same logic as IGST-paid exports — no double benefit.',
            conditions: [
                'Section 54(3) third proviso applies to both IGST-paid and LUT routes',
                'If higher-rate drawback (with central tax) availed → ITC refund blocked',
                'Customs-only drawback does not bar ITC refund — distinguish carefully',
                'Drawback claim must be cross-checked through Customs / DGFT records',
                'Even partial drawback availment may bar the proportionate ITC refund'
            ],
            actions: [
                'Verify the exact drawback rate and components claimed',
                'For customs-only drawback, ITC refund may still be available — re-test eligibility',
                'Consider commercial trade-off: drawback amount vs ITC refund quantum',
                'Maintain documentation of drawback chronology',
                'Consult CA before refiling to avoid further complications'
            ]
        },

        v_inelig_notification: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Notification 40/2017, 41/2017, or 48/2017 Benefit Availed',
            section: 'Rule 96(10) of CGST Rules',
            summary: 'IGST refund on exports is barred where the supplier (or merchant exporter) availed concessional procurement benefit under Notifications 40/2017-Central Tax (Rate), 41/2017-Integrated Tax (Rate), or 48/2017-Central Tax. The bar prevents stacking concessional procurement with refund.',
            conditions: [
                'Rule 96(10) explicitly bars IGST refund where these notification benefits availed',
                'Notif. 40/2017 and 41/2017 — concessional 0.1% supply to merchant exporters',
                'Notif. 48/2017 — deemed export benefits',
                'Capital goods imported under EPCG Scheme are an exception',
                'The bar applies to the specific supply, not the entire export portfolio'
            ],
            actions: [
                'Switch to LUT-route refund (unutilised ITC) — Rule 96(10) does not apply to ITC route',
                'Compute alternative refund under Rule 89 LUT formula',
                'Verify procurement chronology to identify which exports have notification taint',
                'For untainted exports, IGST refund still available — segregate carefully',
                'Document notification claims at procurement to support refund analysis'
            ]
        },

        v_inelig_exportduty_igst: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Goods Subject to Export Duty (FA No 2 of 2024)',
            section: 'Section 54(15) as amended by Finance Act (No 2) 2024',
            summary: 'IGST refund is barred where exported goods are subject to export duty under the Customs Tariff Act. Originally only ITC refund was barred — Finance Act (No 2) 2024 effective 16 August 2024 extended the restriction to IGST refunds. Both refund routes are now blocked.',
            conditions: [
                'Section 54(15) post-FA 2024: bars both ITC and IGST refund on export-duty goods',
                'Iron ore, certain agricultural products, specified minerals attract export duty',
                'Verify Customs Tariff Act Schedule II for export-duty status of HSN',
                'Notifications periodically amend export-duty rates — check current rate',
                'Pre-FA 2024 IGST refunds for these goods may still be valid for past periods'
            ],
            actions: [
                'Verify HSN of exported goods against Customs Tariff Act Schedule II export-duty list',
                'Cross-check current notifications for export-duty rate (may be NIL for some)',
                'For NIL-rate export duty (notified), refund may still be available — re-test',
                'For pre-16 Aug 2024 exports, IGST refund may still be available — file urgently',
                'Document export-duty position with Customs Tariff supporting evidence'
            ]
        },

        v_inelig_exportduty_lut: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Export Duty Goods (LUT Route)',
            section: 'Section 54(15)',
            summary: 'Refund of unutilised ITC is barred where exported goods are subject to export duty. The restriction has been operative since the original CGST Act enactment in 2017.',
            conditions: [
                'Section 54(15) bars ITC refund on goods subject to export duty',
                'Verify HSN against Customs Tariff Act Schedule II',
                'NIL-rate export duty (per notification) does not trigger the bar',
                'The restriction applies even if no actual export duty was paid (because goods are subject to it)',
                'No alternative refund route available for the same goods'
            ],
            actions: [
                'Verify HSN and current export-duty status',
                'For NIL-rate export-duty goods, refund may still be available',
                'For positive-rate export-duty goods, refund is blocked at source',
                'Consider commercial implications — adjust pricing or supply chain to avoid trap',
                'Document export-duty status before filing future refund applications'
            ]
        },

        v_inelig_no_fe: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Service Export Without FE Receipt',
            section: 'Section 2(6) IGST Act + Section 16 IGST Act',
            summary: 'A supply of services qualifies as export only if payment is received in convertible foreign exchange or RBI-permitted INR through specified channels. Without satisfying this condition, the supply is not zero-rated and refund is not available.',
            conditions: [
                'Section 2(6)(iv) IGST Act mandates FE receipt or RBI-permitted INR',
                'Pure domestic INR receipt does not qualify as FE-equivalent',
                'BRC/FIRC is the standard documentary evidence',
                'Special Vostro Account routing for INR receipt is RBI-permitted (subject to RBI Master Direction)',
                'Establishment-of-distinct-persons proviso (Explanation 1 to Sec 8 IGST) further restricts'
            ],
            actions: [
                'Pursue FE / Special Vostro INR receipt for past supplies if commercially possible',
                'Ensure future contracts mandate FE / RBI-permitted INR routing',
                'Document the place-of-supply analysis for every export claim',
                'Consider whether the supply qualifies under any other refund route',
                'Restructure supply chain to ensure compliance for future cycles'
            ]
        },

        v_inelig_nilexempt: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Output Nil-Rated or Fully Exempt',
            section: 'First proviso to Section 54(3)',
            summary: 'Refund of accumulated ITC under Section 54(3)(ii) is barred where output supplies are nil-rated or fully exempt. The legal logic is that exempt supplies break the value-chain credit flow — ITC contributing to non-taxable output cannot be refunded.',
            conditions: [
                'First proviso to Section 54(3)(ii) explicitly bars nil-rated / exempt outputs',
                'Apportion ITC under Rule 42/43 between taxable and exempt supplies',
                'For mixed portfolios, refund may be claimed on the taxable inverted portion only',
                'Zero-rated supplies (exports) are different — they qualify under 54(3)(i)',
                'Exempt supplies under Section 11 / Section 6 IGST attract this bar'
            ],
            actions: [
                'Re-classify output supplies — is the output zero-rated or genuinely exempt?',
                'For zero-rated exports, switch to Section 54(3)(i) refund route',
                'For mixed portfolios, apportion ITC under Rule 42 before claiming on taxable inverted portion',
                'For pure nil-rated/exempt outputs, no refund is available — accept ITC blockage',
                'Consider supply-chain restructuring to avoid pure exempt-output positioning'
            ]
        },

        v_inelig_samegoods: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Same Goods at Different Rates (Circular 135/2020)',
            section: 'Circular 135/05/2020-GST + Circular 173/05/2022-GST',
            summary: 'Refund of accumulated ITC under Section 54(3)(ii) is not available where inputs and outputs are the same goods but attract different tax rates due to a GST Council rate change. CBIC clarified this through Circular 135/2020 and refined through Circular 173/2022.',
            conditions: [
                'Bought goods X at 18% GST; rate later reduced to 12% — IDS refund blocked',
                'Inputs and outputs must genuinely be different to qualify as IDS',
                'Concessional notification scenarios are exempted from this bar (Circular 173/2022)',
                'BMG Informatics (Gauhati HC) had questioned circular validity but operative position holds',
                'Current departmental practice rejects refund applications hitting this bar'
            ],
            actions: [
                'Re-examine inputs and outputs — are they truly the same goods?',
                'For genuinely different goods, the bar does not apply — refile carefully',
                'For concessional-notification scenarios (e.g., merchant exporter 0.1%), refund available',
                'Consider writ petition citing BMG Informatics if commercial stakes warrant',
                'Document HSN classification rigorously to support different-goods position'
            ]
        },

        v_inelig_notified: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Output in Notification 5/2017 List',
            section: 'Notification 5/2017-Central Tax (Rate) as amended',
            summary: 'Refund of accumulated ITC under Section 54(3)(ii) is barred for goods/services specifically notified by the Government. Notification 5/2017-Central Tax (Rate) lists these excluded categories as amended from time to time.',
            conditions: [
                'Section 54(3)(ii) first proviso permits exclusions through notification',
                'Current excluded list per Notification 5/2017 must be checked at HSN level',
                'List has been amended periodically — recent reforms removed many entries',
                'Bar applies to the specific output category, not the entire portfolio',
                'No refund alternative for pure-notified output supplies'
            ],
            actions: [
                'Verify HSN against current Notification 5/2017 amendments',
                'For mixed portfolios, segregate notified vs non-notified outputs',
                'Claim refund only on non-notified inverted output supplies',
                'Document HSN classification with supporting evidence',
                'Track future amendments — reforms may remove your entry from the list'
            ]
        },

        v_inelig_notdeemed: {
            type: 'verdict', status: 'ineligible', headline: 'Not Eligible — Supply Not Notified as Deemed Export',
            section: 'Section 147 + Notification 48/2017-Central Tax',
            summary: 'Deemed-export refund is available only for supplies notified by the Government under Section 147. If your supply is not in the notified list, the deemed-export refund route is unavailable. Consider whether the supply qualifies under another refund category.',
            conditions: [
                'Section 147 empowers the Government to notify deemed-export categories',
                'Notification 48/2017 is the master notification — currently includes EOU, Advance Auth, EPCG, gold supplies',
                'Recipient-side credit-flow privileges differ from refund eligibility',
                'No general deemed-export concept exists outside the notified list',
                'Re-examine whether the supply may qualify as direct export, SEZ supply, or otherwise'
            ],
            actions: [
                'Re-examine supply nature — is it direct export, SEZ supply, or other zero-rated?',
                'For genuine direct exports, restart eligibility check on export branch',
                'For SEZ supplies, restart on SEZ branch',
                'For domestic supplies misclassified as deemed export, no refund route available',
                'Restructure future supplies through notified deemed-export categories where possible'
            ]
        }
    };

    let path = ['q1'];

    function getCurrentNode() {
        return TREE[path[path.length - 1]];
    }

    function buildPath() {
        if (path.length <= 1) return 'Start';
        return path.slice(0, -1).map(function(id) {
            const n = TREE[id];
            return n && n.lastSelectedLabel ? n.lastSelectedLabel : 'Step';
        }).join(' › ') + ' › ' + (path.length === 1 ? 'Start' : 'Now');
    }

    function render() {
        const node = getCurrentNode();
        const container = document.getElementById('treeContainer');
        document.getElementById('stepCounter').textContent = node.type === 'verdict' ? 'Verdict' : 'Step ' + path.length;
        document.getElementById('stepPath').innerHTML = buildPath();

        if (node.type === 'question') {
            renderQuestion(node, container);
        } else {
            renderVerdict(node, container);
        }
    }

    function renderQuestion(node, container) {
        let html = '<div class="question-text">' + node.question + '</div>';
        if (node.context) html += '<div class="question-context">' + node.context + '</div>';
        html += '<div class="options">';
        node.options.forEach(function(opt, i) {
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
                const next = btn.dataset.next;
                const label = btn.dataset.label;
                const currentNode = getCurrentNode();
                currentNode.lastSelectedLabel = label;
                path.push(next);
                render();
                window.scrollTo({top: document.getElementById('tool').offsetTop - 80, behavior: 'smooth'});
            });
        });

        document.getElementById('btnBack').addEventListener('click', goBack);
        document.getElementById('btnRestart').addEventListener('click', restart);
    }

    function renderVerdict(node, container) {
        const statusLabel = node.status === 'eligible' ? '✓ Eligible' : node.status === 'ineligible' ? '✗ Not Eligible' : '⚠ Conditional';
        let html = '<div class="verdict-card ' + node.status + '">';
        html += '<div class="verdict-label">Eligibility Verdict</div>';
        html += '<span class="verdict-pill ' + node.status + '">' + statusLabel + '</span>';
        html += '<div class="verdict-headline">' + node.headline + '</div>';
        html += '<div class="verdict-summary">' + node.summary + '</div>';
        html += '<div class="verdict-meta">';
        html += '<div class="verdict-meta-label">Statutory Basis</div>';
        html += '<div class="verdict-meta-value">' + node.section + '</div>';
        html += '</div>';

        if (node.conditions && node.conditions.length) {
            html += '<div class="verdict-conditions">';
            html += '<h4>Conditions to Satisfy</h4><ul>';
            node.conditions.forEach(function(c) { html += '<li>' + c + '</li>'; });
            html += '</ul></div>';
        }

        if (node.actions && node.actions.length) {
            html += '<div class="verdict-actions">';
            html += '<h4>Recommended Next Actions</h4><ol>';
            node.actions.forEach(function(a) { html += '<li>' + a + '</li>'; });
            html += '</ol></div>';
        }

        html += '</div>';
        html += '<div class="nav-row">';
        html += '<button type="button" class="nav-btn" id="btnBack">← Back</button>';
        html += '<button type="button" class="restart-btn" id="btnRestart">Check Another Refund</button>';
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

    function escapeAttr(s) {
        return s.replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    }

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
