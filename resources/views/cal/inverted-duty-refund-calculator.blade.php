@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Inverted Duty Refund Calculator | GST Rule 89(5)</title>
    <meta name="description" content="Inverted duty GST refund calculator applies the Rule 89(5) formula (Notification 14/2022) for unutilised ITC refund. Net ITC + restricted HSN check. Free tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/inverted-duty-refund-calculator/">
    <meta property="og:title" content="Inverted Duty Refund Calculator (Rule 89(5)) — GST IDS Refund 2026">
    <meta property="og:description" content="Compute GST inverted duty refund using the amended Rule 89(5) formula with Net ITC, Adjusted Total Turnover and the input-services proportion deduction. Restricted goods check and Statement-1A preview. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/inverted-duty-refund-calculator">
    <meta property="og:image" content="/tools/og/inverted-duty-refund-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Inverted Duty Refund Calculator (Rule 89(5)) — GST IDS Refund 2026">
    <meta name="twitter:description" content="Rule 89(5) IDS formula, Net ITC, input-service deduction term, restricted HSN check, 2-year limitation, Section 56 interest. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/inverted-duty-refund-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Inverted Duty Refund Calculator (Rule 89(5))",
      "description": "Inverted Duty Refund Calculator computes the maximum admissible refund of unutilised Input Tax Credit accumulated on account of an Inverted Duty Structure under Section 54(3) read with clause (ii) of the proviso thereto of the Central Goods and Services Tax Act, 2017. The tool applies the formula prescribed under sub-rule (5) of Rule 89 of the Central Goods and Services Tax Rules, 2017 as amended by Notification No. 14/2022-Central Tax dated 5 July 2022 following the recommendation of the 47th Goods and Services Tax Council. The amended formula computes Maximum Refund Amount as the Turnover of inverted rated supply of goods and services multiplied by Net Input Tax Credit divided by Adjusted Total Turnover, less the Tax payable on such inverted rated supply of goods and services multiplied by the ratio of Net Input Tax Credit to Input Tax Credit availed on inputs and input services. Net Input Tax Credit means Input Tax Credit availed on inputs which are goods only and excludes Input Tax Credit on input services and capital goods following the Supreme Court decision in Union of India versus VKC Footsteps India Private Limited. The tool computes both the post-Notification 14 of 2022 formula and the pre-amendment formula and presents the comparison. The tool flags restricted goods under Notification No. 9/2022-Central Tax (Rate) dated 13 July 2022 effective 18 July 2022 covering specified goods of Chapter 15 edible oils and Chapter 27 mineral fuels coal coke and lignite, as well as restrictions under Notification No. 5/2017-Central Tax (Rate) dated 28 June 2017 as amended by Notification No. 20/2018-Central Tax (Rate) dated 26 July 2018 covering specified textile items. The tool computes the two-year limitation under Section 54(1) of the Central Goods and Services Tax Act from the relevant date which for refund of Input Tax Credit accumulated due to Inverted Duty Structure is the due date of the return for the period to which the claim relates as clarified by Notification No. 13/2022-Central Tax dated 5 July 2022. The tool also computes the sixty-day final order window under Section 54(7) and the six per cent interest entitlement under Section 56 for delayed sanction. The tool reflects recent jurisprudence including the Gujarat High Court decision in Ascent Meditech Limited and the Supreme Court order in Tirth Agro Technology Private Limited holding the amendment to Rule 89(5) to be curative and retrospective.",
      "url": "/tools/inverted-duty-refund-calculator",
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
      "provider": {"@id": "/#organization"}
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "Inverted Duty Refund Calculator", "item": "/tools/inverted-duty-refund-calculator"}
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
          "name": "What is Inverted Duty Structure under GST and when does refund arise?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Inverted Duty Structure arises where the rate of GST on inputs is higher than the rate on output supplies, leading to accumulation of unutilised Input Tax Credit. Under Section 54(3) clause (ii) of the proviso, the registered person is entitled to refund of such accumulated ITC, subject to the formula in Rule 89(5) and exclusion of nil-rated, fully exempt and notified restricted supplies. Common sectors are textiles, footwear, fertilisers, EV batteries and pharmaceuticals."
          }
        },
        {
          "@type": "Question",
          "name": "What is the current Rule 89(5) formula post Notification 14/2022?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maximum Refund Amount equals Turnover of inverted rated supply multiplied by Net ITC divided by Adjusted Total Turnover, minus Tax payable on inverted rated supply multiplied by Net ITC divided by total ITC availed on inputs and input services. The proportionate deduction term, introduced from 5 July 2022 by Notification 14/2022-Central Tax, replaces the earlier flat deduction of full output tax payable and provides a fairer outcome where input service ITC is significant."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim refund of ITC on input services under the inverted duty structure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Direct refund of ITC on input services is not admissible under Rule 89(5). The Supreme Court in Union of India versus VKC Footsteps India confirmed that Net ITC for IDS refund means ITC on input goods only. However, the amended formula introduced by Notification 14/2022 indirectly accounts for input-service ITC by reducing the deduction proportionally to the share of input goods in total ITC, partially mitigating the working capital impact for service-intensive manufacturers."
          }
        },
        {
          "@type": "Question",
          "name": "Which goods are restricted from inverted duty refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 5/2017-Central Tax (Rate) (as amended by 20/2018) restricts IDS refund for specified woven fabrics, knitted fabrics and certain textile items. Notification 9/2022-Central Tax (Rate) effective 18 July 2022 inserted Chapter 15 edible oils (palm, soyabean, sunflower etc.) and Chapter 27 mineral fuels (coal, coke, lignite, briquettes) into the restricted list. Restriction applies prospectively to tax periods from 18 July 2022 only, per Gujarat HC ruling."
          }
        },
        {
          "@type": "Question",
          "name": "Is the amended Rule 89(5) formula prospective or retrospective?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CBIC Circular 181/2022 stated the amendment is prospective from 5 July 2022. However, the Gujarat High Court in Ascent Meditech Limited and Filatex India held that the amendment is curative and clarificatory in nature and applies retrospectively. The Supreme Court dismissed the Department's Special Leave Petition in Tirth Agro Technology in July 2025, allowing the favourable Gujarat view to stand. Taxpayers may rely on these rulings for past periods."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time limit for filing inverted duty refund application?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(1) prescribes a two-year limitation from the relevant date. For refund of unutilised ITC under inverted duty structure, the relevant date is the due date for furnishing of the return for the tax period to which the claim relates, as clarified by Notification 13/2022-Central Tax. The period from 1 March 2020 to 28 February 2022 was excluded from limitation computation by the same notification, granting additional time for COVID-affected periods."
          }
        },
        {
          "@type": "Question",
          "name": "How is Net ITC defined for the purpose of Rule 89(5)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Net ITC means ITC availed on inputs (goods) during the relevant period. It excludes ITC on input services, ITC on capital goods, ITC reversed under Section 17(5) blocked credits and ITC reversed under Rule 42 or 43. Net ITC includes inputs whether or not directly consumed in manufacture per Circular 79/2018. For computation, Net ITC is taken from Table 4(A)(5) of GSTR-3B filed for the period less reversals in Table 4(B)."
          }
        },
        {
          "@type": "Question",
          "name": "What is Adjusted Total Turnover under Rule 89(5)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Adjusted Total Turnover means the sum of value of all taxable supplies excluding zero-rated supplies and zero-rated supplies turnover, less exempt supplies turnover other than zero-rated, during the relevant period. The definition was rationalised by Notification 14/2022 in line with the LUT formula amendment post the Supreme Court VKC Footsteps decision and Circular 197/2023, ensuring consistency between the IDS and LUT refund formulas."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are required for filing RFD-01 for IDS refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form GST RFD-01 must be filed with Statement-1A computing the maximum refund amount, an undertaking under Rule 89(2)(l), a declaration of non-prosecution, copies of GSTR-1 and GSTR-3B for the period, an Annexure-B with invoice-wise input details, the electronic credit ledger statement, a CA or CMA certification for refund claims exceeding two lakh rupees and evidence of inverted rate structure such as a HSN summary."
          }
        },
        {
          "@type": "Question",
          "name": "Will I get interest if my IDS refund is delayed beyond 60 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 56 of the CGST Act provides simple interest at six per cent per annum on any refund not paid within sixty days from the date of receipt of the application complete in all respects. The 60-day clock starts from the date of acknowledgement in Form GST RFD-02. If the refund is sanctioned by an appellate authority on appeal, the rate of interest increases to nine per cent per annum from the date immediately after expiry of sixty days."
          }
        },
        {
          "@type": "Question",
          "name": "Can the rate inversion be due to a rate cut on the same goods?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Circular 173/05/2022-GST clarified that where the same goods attract different rates of tax at different points in time due to a rate reduction, the resulting accumulated ITC is not refundable as inverted duty structure refund. However, where the rate inversion arises from a concessional rate notification that prescribes a lower output rate compared to inputs at the same point, the refund is admissible. The Telangana High Court in Micro Systems upheld this position."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim provisional refund of 90 per cent for inverted duty refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The provisional refund of ninety per cent under Section 54(6) read with Rule 91 is available only in respect of refund claims arising from zero-rated supplies under Section 54(6) made by registered persons whose returns and compliance are in order. Refund of accumulated ITC due to inverted duty structure does not qualify for provisional refund and the entire amount is sanctioned only after detailed scrutiny by the proper officer typically within sixty days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between the old and new Rule 89(5) formulas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The old formula deducted the full tax payable on inverted rated supply from the formula amount, often resulting in nil or low refund where input service ITC was significant. The new formula introduced by Notification 14/2022 deducts only the proportion of tax payable that corresponds to Net ITC over total ITC including input services. This proportionate approach yields a higher refund where input services contribute substantially to ITC, restoring fairness for service-intensive manufacturers."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file an inverted duty refund claim period by period or as an aggregate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The refund application is filed period-wise — month-wise for monthly filers and quarter-wise for QRMP filers. Multiple consecutive periods may be clubbed in one RFD-01 if all periods relate to the same financial year and the inverted rate structure remains consistent. Each period is separately validated against the formula. The two-year limitation runs separately for each period from the GSTR-3B due date for that period."
          }
        },
        {
          "@type": "Question",
          "name": "What if my refund is rejected by the proper officer — what is the appeal process?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If the proper officer rejects the refund through Form GST RFD-08 followed by Form GST RFD-06, the registered person may file an appeal under Section 107 before the Appellate Authority within three months of the order, extendable by one month. After 1 October 2025 the Goods and Services Tax Appellate Tribunal hears second appeals under Section 112 within three months of the appellate order with mandatory pre-deposit of ten per cent of disputed tax."
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
        .content-col, .sidebar-col { min-width: 0; }

        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }
        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-section-title.itc { color: var(--info); }
        .calc-section-title.tax { color: var(--danger); }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group input[type="date"] { font-family: var(--font-body); font-size: 15px; font-weight: 500; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }

        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; margin-bottom: 20px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }

        .checklist { display: grid; grid-template-columns: 1fr; gap: 8px; margin-bottom: 12px; }
        @media (min-width: 600px) { .checklist { grid-template-columns: 1fr 1fr; } }
        .checklist-item { display: flex; align-items: flex-start; gap: 10px; padding: 12px 14px; background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); cursor: pointer; transition: all 0.2s; }
        .checklist-item:hover { border-color: var(--primary-light); }
        .checklist-item input[type="checkbox"] { width: 18px; height: 18px; margin-top: 2px; accent-color: var(--primary); cursor: pointer; flex-shrink: 0; }
        .checklist-item label { font-size: 13px; color: var(--text); cursor: pointer; line-height: 1.4; flex: 1; text-transform: none; letter-spacing: 0; margin: 0; font-weight: 500; }
        .checklist-item label .sub { display: block; font-size: 11px; color: var(--text-muted); margin-top: 2px; font-weight: 400; }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); }
        .verdict-card.amber { border-left-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); }
        .verdict-card.red { border-left-color: var(--danger); background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); }
        .verdict-card.blue { border-left-color: var(--info); background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 8px; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-top: 14px; }
        @media (max-width: 600px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.65); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .info-banner strong { font-weight: 700; }

        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        .basis-text strong { color: var(--primary-dark); }

        .compare-card { background: linear-gradient(135deg, #EFF6FF, #DBEAFE); border: 2px solid var(--info); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .compare-card h4 { font-size: 14px; color: #1E3A8A; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .compare-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 10px; }
        @media (max-width: 500px) { .compare-grid { grid-template-columns: 1fr; } }
        .compare-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 14px; }
        .compare-item .lbl { font-size: 11px; font-weight: 700; color: #1E40AF; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .compare-item .val { font-family: var(--font-mono); font-weight: 700; color: #1E3A8A; font-size: 18px; }
        .compare-item .sub { font-size: 11px; color: #1E40AF; margin-top: 2px; }

        .timeline-card { background: linear-gradient(135deg, #FEF3C7, #FDE68A); border: 2px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .timeline-card h4 { font-size: 14px; color: #78350F; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .timeline-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 10px; }
        @media (max-width: 500px) { .timeline-grid { grid-template-columns: 1fr; } }
        .timeline-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 14px; }
        .timeline-item .lbl { font-size: 11px; font-weight: 700; color: #92400E; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .timeline-item .val { font-family: var(--font-mono); font-weight: 700; color: #78350F; font-size: 16px; }
        .timeline-item .sub { font-size: 11px; color: #92400E; margin-top: 2px; }

        .disclosure-block { background: var(--primary-dark); color: #E8EEF5; padding: 20px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.7; margin: 14px 0; overflow-x: auto; }
        .disclosure-block .dl-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 8px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .disclosure-block table { width: 100%; border-collapse: collapse; font-size: 12px; margin-top: 8px; }
        .disclosure-block th, .disclosure-block td { padding: 8px 6px; text-align: left; border-bottom: 1px solid rgba(224,242,241,0.2); }
        .disclosure-block th { color: var(--accent-light); font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px; }
        .disclosure-block td.num { text-align: right; }
        @media (max-width: 600px) { .disclosure-block { font-size: 11px; padding: 14px 16px; } .disclosure-block table { font-size: 10px; } }

        .body-cta { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 28px 32px; margin: 32px 0; }
        .body-cta h3 { color: #fff; font-size: 20px; margin-bottom: 8px; }
        .body-cta p { color: rgba(255,255,255,0.88); margin-bottom: 16px; font-size: 15px; }
        .body-cta .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .body-cta .cta-btn:hover { background: var(--accent-light); }

        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 14px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); margin-bottom: 8px; line-height: 1.7; }
        .content-section li strong { color: var(--primary-dark); }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }

        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        @media (max-width: 600px) { .rate-table { font-size: 12px; } .rate-table thead th, .rate-table tbody td { padding: 8px 10px; } }

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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.45s ease; }
        .faq-item.open .faq-answer { max-height: 800px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }

        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .cta-btn:hover { background: var(--accent-light); }

        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .body-cta { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
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
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#section-54">Section 54(3)(ii)</a>
        <a href="#formula">Rule 89(5) Formula</a>
        <a href="#vkc">VKC Footsteps</a>
        <a href="#restricted">Restricted Goods</a>
        <a href="#concessional">Rate Cuts</a>
        <a href="#rulings">Recent Rulings</a>
        <a href="#filing">RFD-01 Filing</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Inverted Duty Refund Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Inverted Duty Refund Calculator — <span>Rule 89(5) GST Refund of Unutilised ITC</span> for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Inverted%20Duty%20Refund%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Inverted%20Duty%20Refund%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Inverted%20Duty%20Refund%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This Inverted Duty Refund Calculator implements the formula prescribed under <strong>Rule 89(5) of the CGST Rules, 2017</strong> (as amended by Notification 14/2022-Central Tax dated 5 July 2022) for refund of unutilised Input Tax Credit accumulated where the rate of GST on inputs is higher than the rate on output supplies. The amended formula is <strong>Refund = (Inverted Turnover × Net ITC ÷ Adjusted Total Turnover) − (Output Tax Payable × Net ITC ÷ Total ITC on inputs &amp; input services)</strong>. The tool computes <strong>both old and new formulas</strong> for comparison, applies the <strong>VKC Footsteps</strong> exclusion of input-service ITC from Net ITC, flags <strong>restricted goods</strong> under Notification 5/2017 (textiles) and 9/2022 (Chapter 15 edible oils &amp; Chapter 27 mineral fuels), tracks the <strong>2-year limitation</strong> under Section 54(1) from the GSTR-3B due date, and computes 6% interest under Section 56 if delayed beyond 60 days. For zero-rated supply refunds use our <a href="/tools/export-refund-lut-calculator">LUT</a> or <a href="/tools/igst-export-refund-calculator">IGST</a> calculators.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Inverted Duty Refund Calculator</h2>
            <p class="calc-intro">Enter the turnover, ITC and output tax figures from your GSTR-1 and GSTR-3B for the relevant tax period. The calculator applies the amended Rule 89(5) formula, compares it with the pre-July 2022 formula, validates the restricted-goods position and computes the maximum admissible refund with full breakdown and Statement-1A preview.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this calculator.</div></noscript>

            <div class="calc-section-title">Period &amp; Turnover (₹)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="period">Tax Period</label>
                    <input type="month" id="period" value="2026-04">
                    <span class="helper">The GSTR-1 / GSTR-3B period for which IDS refund is computed.</span>
                </div>
                <div class="form-group">
                    <label for="filer-type">Filer Type</label>
                    <select id="filer-type">
                        <option value="monthly" selected>Monthly (GSTR-3B due 20th of next month)</option>
                        <option value="qrmp">QRMP (Quarterly, due 22nd or 24th)</option>
                    </select>
                    <span class="helper">Determines GSTR-3B due date for relevant-date computation.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="inv-turnover">Turnover of Inverted Rated Supply</label>
                    <input type="text" id="inv-turnover" value="10000000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Value of outward supplies where input rate exceeds output rate, for the period.</span>
                </div>
                <div class="form-group">
                    <label for="adj-turnover">Adjusted Total Turnover</label>
                    <input type="text" id="adj-turnover" value="12000000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total turnover (taxable + zero-rated, excluding exempt other than zero-rated).</span>
                </div>
            </div>

            <div class="calc-section-title itc">Input Tax Credit (₹)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="itc-inputs">Net ITC — Input Goods Only</label>
                    <input type="text" id="itc-inputs" value="1500000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">ITC on inputs (goods) only — excludes input services, capital goods, blocked credits.</span>
                </div>
                <div class="form-group">
                    <label for="itc-services">ITC on Input Services</label>
                    <input type="text" id="itc-services" value="300000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">ITC on input services for the period — used in new formula's deduction term.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="itc-cg">ITC on Capital Goods</label>
                    <input type="text" id="itc-cg" value="0" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Excluded from Net ITC per VKC Footsteps. Captured for record only.</span>
                </div>
                <div class="form-group">
                    <label for="ledger-bal">Electronic Credit Ledger Balance</label>
                    <input type="text" id="ledger-bal" value="2000000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Closing balance at end of period — caps the refundable amount.</span>
                </div>
            </div>

            <div class="calc-section-title tax">Output Tax &amp; Restrictions</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="tax-payable">Tax Payable on Inverted Rated Supply</label>
                    <input type="text" id="tax-payable" value="500000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Output GST liability on inverted rated supplies for the period.</span>
                </div>
                <div class="form-group">
                    <label>Restricted-Goods Status</label>
                    <div class="toggle-group" id="restricted-toggle">
                        <button type="button" class="toggle-btn active" data-value="none">Not Restricted</button>
                        <button type="button" class="toggle-btn" data-value="ch15-27">Chapter 15 / 27</button>
                        <button type="button" class="toggle-btn" data-value="textile">Textile (5/2017)</button>
                    </div>
                    <span class="helper" style="font-size: 11px; color: var(--text-muted); display: block; margin-top: -10px;">Chapter 15/27 restriction applies prospectively from 18 July 2022 only.</span>
                </div>
            </div>

            <div class="calc-section-title">Application Date &amp; Limitation</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ack-date">Refund Application Date</label>
                    <input type="date" id="ack-date" value="2026-05-25">
                    <span class="helper">Date of filing RFD-01 / acknowledgement in RFD-02.</span>
                </div>
                <div class="form-group">
                    <label>Formula Variant to Apply</label>
                    <div class="toggle-group" id="formula-toggle">
                        <button type="button" class="toggle-btn active" data-value="new">Post 5 Jul 2022 (New)</button>
                        <button type="button" class="toggle-btn" data-value="old">Pre 5 Jul 2022 (Old)</button>
                    </div>
                    <span class="helper" style="font-size: 11px; color: var(--text-muted); display: block; margin-top: -10px;">New formula applies prospectively per Circular 181/2022; retrospective per Gujarat HC.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btn-calculate">Compute IDS Refund</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset to Default</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdict">
                    <div class="verdict-label">Verdict</div>
                    <div class="verdict-headline" id="verdict-headline">—</div>
                    <div class="verdict-sub" id="verdict-sub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Maximum Refund</div>
                            <div class="verdict-grid-value" id="v-max">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Capped Refund</div>
                            <div class="verdict-grid-value" id="v-capped">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Net ITC Used</div>
                            <div class="verdict-grid-value" id="v-net">—</div>
                        </div>
                    </div>
                </div>

                <div id="alerts"></div>

                <div class="basis-block">
                    <div class="basis-label">Computation Basis</div>
                    <div class="basis-text" id="basis-text">—</div>
                </div>

                <div class="formula-box" id="formula-display">
                    <span class="label">FORMULA APPLIED:</span><br>
                    <span id="formula-text">—</span>
                </div>

                <div class="compare-card">
                    <h4>Old vs New Formula Comparison</h4>
                    <div class="compare-grid">
                        <div class="compare-item">
                            <div class="lbl">Pre-5 Jul 2022 (Old Formula)</div>
                            <div class="val" id="c-old">—</div>
                            <div class="sub">Full output tax payable deducted.</div>
                        </div>
                        <div class="compare-item">
                            <div class="lbl">Post-5 Jul 2022 (New Formula)</div>
                            <div class="val" id="c-new">—</div>
                            <div class="sub">Proportionate deduction (Net ITC / Total ITC).</div>
                        </div>
                    </div>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Inverted Turnover</div>
                        <div class="summary-value" id="s-inv">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Adjusted Total Turnover</div>
                        <div class="summary-value" id="s-adj">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Net ITC (Inputs)</div>
                        <div class="summary-value" id="s-net">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Total ITC (Inputs + Services)</div>
                        <div class="summary-value" id="s-tot">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Tax Payable on Inverted Supply</div>
                        <div class="summary-value" id="s-tax">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Refund Admissible</div>
                        <div class="summary-value" id="s-refund">—</div>
                    </div>
                </div>

                <div class="timeline-card">
                    <h4>Section 54 &amp; 56 Timeline</h4>
                    <div class="timeline-grid">
                        <div class="timeline-item">
                            <div class="lbl">Relevant Date (GSTR-3B Due)</div>
                            <div class="val" id="t-rel">—</div>
                            <div class="sub">Start of 2-year limitation per Notif 13/2022.</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">Limitation Expiry</div>
                            <div class="val" id="t-limit">—</div>
                            <div class="sub">Last date to file RFD-01 under Section 54(1).</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">60-Day Final Order Due</div>
                            <div class="val" id="t-60">—</div>
                            <div class="sub">From application date per Section 54(7).</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">Days Until Limitation Bar</div>
                            <div class="val" id="t-days">—</div>
                            <div class="sub">From today till limitation expiry.</div>
                        </div>
                    </div>
                </div>

                <div class="disclosure-block">
                    <span class="dl-label">RFD-01 Statement-1A Preview</span>
                    <table id="stmt-table">
                        <thead>
                            <tr><th>Particulars</th><th class="num">Amount (₹)</th></tr>
                        </thead>
                        <tbody id="stmt-body">
                        </tbody>
                    </table>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Inverted Duty Refund Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Inverted%20Duty%20Refund%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Inverted%20Duty%20Refund%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Inverted%20Duty%20Refund%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Inverted Duty Refund Calculator</h2>
            <p>The calculator mirrors the computational logic that the proper officer applies when scrutinising your Form RFD-01 with Statement-1A. Each field maps to a specific row of the GSTR-1 / GSTR-3B return for the period or to the electronic credit ledger. Following the step-by-step workflow below ensures inputs match the official Statement-1A preparation methodology.</p>
            <ol>
                <li><strong>Tax period and filer type</strong> — Select the month for which IDS refund is being computed and whether you file monthly GSTR-3B or under the QRMP scheme. Filer type drives the GSTR-3B due date which is the relevant date for the two-year limitation under Section 54(1).</li>
                <li><strong>Turnover of inverted rated supply</strong> — Pull from Table 4(B) of GSTR-1 (taxable outward) for the period, restricted to invoices where output rate is lower than input rate. Exclude nil-rated, fully exempt and notified-restricted supplies.</li>
                <li><strong>Adjusted Total Turnover</strong> — Sum of all taxable outward supplies including zero-rated, less exempt supplies other than zero-rated. Pull from Table 3.1 of GSTR-3B with required adjustments.</li>
                <li><strong>Net ITC (Input Goods Only)</strong> — From Table 4(A)(5) of GSTR-3B, subtract Table 4(B)(1) and 4(B)(2) reversals; further exclude ITC on capital goods and input services. This is the denominator for the formula.</li>
                <li><strong>ITC on Input Services</strong> — Required for the new formula's deduction term. Input services include manufacturing services, job work, freight, insurance, professional services etc. attracting ITC.</li>
                <li><strong>Tax Payable on Inverted Rated Supply</strong> — Output IGST/CGST/SGST liability on inverted rated supplies only, before adjusting any ITC. Computed as inverted turnover × output rate.</li>
                <li><strong>Restricted-goods status</strong> — Toggle whether your output goods fall under the restricted list. Chapter 15 and 27 restriction applies only to tax periods from 18 July 2022 onwards.</li>
                <li><strong>Application date</strong> — Date of filing RFD-01 — used to compute the 60-day final order window and Section 56 interest entitlement.</li>
            </ol>
            <div class="callout">
                <p><strong>Tip:</strong> Compare both old and new formula outputs in the Compare Card. Where input service ITC is significant (over 30% of total ITC), the new formula yields materially higher refund. Recent Gujarat HC and Supreme Court rulings allow taxpayers to claim the new formula benefit retrospectively for past periods within the limitation window.</p>
            </div>
        </section>

        <section class="content-section" id="section-54">
            <h2>Section 54(3)(ii) — When IDS Refund Arises</h2>
            <p>The statutory foundation for inverted duty refund is the second proviso to <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/cgst-act/active/chapter11/section54.html" rel="noopener" target="_blank">Section 54(3) of the CGST Act, 2017</a>. Sub-section (3) generally restricts refund of unutilised ITC, with two exceptions: zero-rated supplies under proviso (i), and inverted duty structure under proviso (ii). The latter reads: "where the credit has accumulated on account of rate of tax on inputs being higher than the rate of tax on output supplies (other than nil rated or fully exempt supplies)". The mechanism prevents working capital blockage in genuinely inverted supply chains while excluding cases where the rate inversion arises from taxpayer-chosen output exemption.</p>
            <h3>Industries Where IDS Commonly Arises</h3>
            <ul>
                <li><strong>Textiles and apparel</strong> — Manmade yarn at 12% inputs vs woven fabric / garments at 5% output. Largest historic IDS sector by refund volume.</li>
                <li><strong>Footwear</strong> — Soles, leather and synthetic inputs at 12-18% vs finished footwear at 5% (below ₹1,000) or 18% (above).</li>
                <li><strong>Fertilisers</strong> — Phosphoric acid, ammonia and other inputs at 18% vs urea/DAP/MOP at 5% output.</li>
                <li><strong>EV batteries and EV parts</strong> — Battery inputs at 18% vs supply to EV manufacturer at 5% (in some segments).</li>
                <li><strong>Pharmaceuticals</strong> — Active Pharmaceutical Ingredients at 18% vs life-saving drugs and select formulations at 5%.</li>
                <li><strong>Tractors and farm equipment</strong> — Steel, components at 18% vs tractor at 12% output.</li>
                <li><strong>Renewable energy equipment</strong> — Solar cells, panels and BoS components.</li>
                <li><strong>Job work in inverted-rate sectors</strong> — Where output service rate is lower than the rate on input goods consumed in job work.</li>
            </ul>
            <h3>Categories Excluded from IDS Refund</h3>
            <p>Section 54(3) and Rule 89(5) read together exclude certain supplies from IDS refund eligibility:</p>
            <ul>
                <li><strong>Nil-rated supplies and fully exempt supplies</strong> — Statutory exclusion in clause (ii) itself.</li>
                <li><strong>Specified goods notified under Notification 5/2017-CT(R)</strong> as amended — certain fabrics and textile items (textile fabrics now eligible from 1 August 2018 per Notification 20/2018).</li>
                <li><strong>Goods under Chapter 15 (edible oils) and Chapter 27 (mineral fuels, coal, lignite)</strong> per Notification 9/2022-CT(R) effective 18 July 2022.</li>
                <li><strong>Rate-cut accumulation</strong> on the same goods (Circular 173/05/2022) — only same-point rate inversions qualify.</li>
                <li><strong>Goods exported on payment of IGST</strong> — already covered under Rule 96; no double benefit.</li>
            </ul>
        </section>

        <section class="content-section" id="formula">
            <h2>Rule 89(5) Formula — Old, New and Worked Examples</h2>
            <p>Sub-rule (5) of <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/rules/cgst_rules/active/chapter10/rule89_v1.00.html" rel="noopener" target="_blank">Rule 89 of the CGST Rules</a> prescribes a specific formula for computing the maximum refund of unutilised ITC under inverted duty structure. The formula has evolved through three iterations over the GST regime — the original 2017 version, the retrospective amendment by Notification 21/2018 / 26/2018 applying from 1 July 2017 to restrict Net ITC to input goods only, and the proportionate-deduction amendment by Notification 14/2022 effective 5 July 2022. The current formula is the third iteration.</p>
            <h3>Current Formula (post 5 July 2022)</h3>
            <div class="formula-box">
                <span class="label">MAXIMUM REFUND AMOUNT =</span><br>
                {(Turnover of Inverted Rated Supply × Net ITC) ÷ Adjusted Total Turnover}<br>
                <span class="label">−</span><br>
                {Tax Payable on Inverted Rated Supply × (Net ITC ÷ ITC availed on inputs <strong>and input services</strong>)}
            </div>
            <h3>Pre-Amendment Formula (before 5 July 2022)</h3>
            <div class="formula-box">
                <span class="label">MAXIMUM REFUND AMOUNT =</span><br>
                {(Turnover of Inverted Rated Supply × Net ITC) ÷ Adjusted Total Turnover}<br>
                <span class="label">−</span><br>
                Tax Payable on Inverted Rated Supply
            </div>
            <h3>Key Definitions</h3>
            <p><strong>Net ITC</strong> means Input Tax Credit availed on inputs (goods) during the relevant period. Per Notification 26/2018-CT (retrospective from 1 July 2017) and the Supreme Court in <em>Union of India v VKC Footsteps India Pvt Ltd</em> (2021), Net ITC excludes ITC on input services, ITC on capital goods, blocked credits under Section 17(5) and ITC reversed under Rules 42/43.</p>
            <p><strong>Turnover of Inverted Rated Supply</strong> means the value of taxable outward supplies on which the rate of tax on inputs (goods) is higher than the rate on the output supply, during the relevant period. Excludes nil-rated, exempt and notified-restricted supplies.</p>
            <p><strong>Adjusted Total Turnover</strong> means the sum of value of all taxable supplies (excluding zero-rated supplies turnover under Rule 89(4)(D)) plus value of zero-rated supplies, less value of exempt supplies other than zero-rated, during the relevant period.</p>
            <p><strong>Tax Payable on Inverted Rated Supply</strong> means the output GST liability on the inverted rated supplies for the period — IGST plus CGST plus SGST on the inverted-supply turnover, before adjusting any ITC.</p>
            <h3>Why the New Formula Matters</h3>
            <p>The pre-2022 formula deducted the full output tax payable on inverted rated supply from the formula amount. Where input service ITC was a significant portion of total ITC, the deduction often wiped out the entire formula amount, leaving zero refundable balance even where genuine accumulated credit existed. The <a href="https://gstcouncil.gov.in/47th-gst-council-meeting" rel="noopener" target="_blank">47th GST Council</a> recommended a proportionate deduction calibrated to the share of input goods in total ITC. The new deduction term reads: tax payable × (Net ITC / Total ITC including input services). Where input services contribute say 30% of total ITC, the deduction is reduced by 30% — restoring fairness.</p>
            <div class="callout">
                <p><strong>Worked example:</strong> Inverted turnover ₹1 cr, Adjusted Turnover ₹1.2 cr, Net ITC ₹15 lakh, Input Service ITC ₹3 lakh, Tax Payable ₹5 lakh. Old formula: (1 × 15 ÷ 1.2) − 5 = ₹7.5 lakh. New formula: (1 × 15 ÷ 1.2) − (5 × 15 ÷ 18) = 12.5 − 4.17 = ₹8.33 lakh. Net benefit from new formula: ₹83,000 (~11%). The benefit scales with input-service share.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help with IDS Refund Filing?</h3>
            <p>Patron Accounting's GST refund team has filed 150+ inverted duty refund applications across textiles, fertilisers, EV components and pharma. We prepare Statement-1A, HSN-wise rate analysis, Annexure-B and complete RFD-01 with CA certification.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Inverted%20Duty%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Inverted%20Duty%20Refund%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Inverted%20Duty%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>


        <section class="content-section" id="vkc">
            <h2>VKC Footsteps Decision &amp; Input-Service ITC Exclusion</h2>
            <p>The most consequential judicial pronouncement on inverted duty refund is the Supreme Court decision in <em>Union of India v VKC Footsteps India Pvt Ltd</em> delivered on 13 September 2021 by a bench of Justice D Y Chandrachud and Justice M R Shah. The case reconciled conflicting High Court views on whether ITC on input services qualifies for IDS refund. The Court upheld Rule 89(5) and the restrictive definition of Net ITC.</p>
            <h3>Background of the Conflicting Views</h3>
            <p>The Gujarat High Court in <em>VKC Footsteps</em> at the writ stage held that Explanation (a) to Rule 89(5) — which defined Net ITC to mean ITC on inputs only and excluded input services — was ultra vires Section 54(3) of the CGST Act. The reasoning: Section 54(3) speaks of refund of unutilised ITC without restricting it to input goods, so Rule 89(5) cannot narrow the statutory entitlement. The Madras High Court in <em>Tvl. Transtonnelstroy Afcons Joint Venture v UOI</em> reached the opposite conclusion, holding that the Rule was intra vires and the statutory framework permits Parliament to differentiate between input goods and input services.</p>
            <h3>The Supreme Court's Reasoning</h3>
            <p>The Supreme Court resolved the conflict in favour of the Madras view. Three key holdings:</p>
            <ol>
                <li><strong>Refund is a creature of statute</strong> — There is no inherent fundamental right to refund of unutilised ITC. The legislature has the discretion to circumscribe the refund mechanism within Section 54.</li>
                <li><strong>Input goods and input services are not equally placed</strong> — The CGST Act recognises a structural distinction between the two; differential refund treatment does not violate Article 14.</li>
                <li><strong>The formula in Rule 89(5) read with Explanation (a) is intra vires</strong> — The exclusion of input service ITC from Net ITC is consistent with Section 54(3)(ii) which does not mandate that all unutilised ITC must be refunded.</li>
            </ol>
            <p>However, the Supreme Court flagged that the formula did create anomalies in practice and urged the GST Council to revisit the computation. This urging was acted upon by the 47th GST Council meeting which led to the Notification 14/2022 amendment described above. The new formula partially mitigates the input-service exclusion through the proportionate deduction term but does not fully restore input-service ITC refundability.</p>
            <h3>Practical Implications Today</h3>
            <ul>
                <li>Input services ITC is <strong>not directly refundable</strong> as IDS refund.</li>
                <li>Capital goods ITC is <strong>not refundable</strong> at all under Rule 89(5).</li>
                <li>Net ITC for the formula numerator is <strong>strictly input goods only</strong>.</li>
                <li>Total ITC including input services <strong>is used in the denominator</strong> of the new formula's deduction term.</li>
                <li>Service-intensive manufacturers with significant marketplace commission, freight, professional fees etc. should still expect material accumulated ITC even after IDS refund.</li>
            </ul>
        </section>

        <section class="content-section" id="restricted">
            <h2>Restricted Goods — Notification 5/2017 &amp; Notification 9/2022</h2>
            <p>Section 54(3) read with the second proviso empowers the Government to notify supplies on which IDS refund will not be allowed. Two key restriction notifications operate today, with overlapping coverage.</p>
            <h3>Notification 5/2017-Central Tax (Rate) — Textile Sector</h3>
            <p>Issued on 28 June 2017 alongside the original GST notifications, Notification 5/2017-CT(R) listed certain woven and knitted fabrics, made-ups and certain textile items as goods on which IDS refund would not be allowed. The restriction was widely criticised by the textile industry which faced significant working capital strain. Following industry representation, Notification 20/2018-CT(R) dated 26 July 2018 amended the list — IDS refund was allowed for fabrics with effect from 1 August 2018, subject to the condition that ITC accumulated up to 31 July 2018 on such fabrics shall lapse.</p>
            <h3>Notification 9/2022-Central Tax (Rate) — Edible Oils &amp; Mineral Fuels</h3>
            <p>Issued on 13 July 2022 and effective from 18 July 2022, Notification 9/2022-CT(R) inserted Entry No. 12B into the restricted list, covering specified goods of:</p>
            <ul>
                <li><strong>Chapter 15</strong> — Animal/vegetable fats and oils including palm oil, soyabean oil, sunflower oil, coconut oil, groundnut oil and their refined variants. The 5% output rate vs 18% input chemicals creates inversion.</li>
                <li><strong>Chapter 27</strong> — Mineral fuels, mineral oils and products of their distillation including coal, lignite, coke, briquettes and bituminous substances. Output at 5% vs 18% inputs.</li>
            </ul>
            <p>Edible oil and coal manufacturers had been availing substantial IDS refunds; the notification stopped fresh refund for periods from 18 July 2022 onwards. Refund applications for tax periods prior to 18 July 2022 remained eligible, irrespective of when the application was filed.</p>
            <h3>Prospective Application Confirmed by Gujarat HC (2025)</h3>
            <p>CBIC <a href="https://cbic-gst.gov.in/pdf/Circular-181-13-2022-GST-Clarification-refund-related-issues-10112022.pdf" rel="noopener" target="_blank">Circular 181/13/2022-GST</a> had attempted to apply the restriction to all applications filed after 18 July 2022, even for prior tax periods. The Gujarat High Court in July 2025 struck down para 2(2) of Circular 181 as ultra vires the parent notification and Section 54. The Court held that the restriction operates on the tax period — not the date of filing — and a refund claim for a period prior to 18 July 2022 cannot be denied merely because the application was filed thereafter, provided the two-year limitation under Section 54(1) is met.</p>
            <div class="callout warn">
                <p><strong>HSN classification matters:</strong> The restriction operates HSN-wise. A Chapter 15 manufacturer producing edible oil at 5% can still claim IDS refund on by-products falling outside Chapter 15 (e.g., cake, meal, glycerine) if those by-products are themselves inverted-rate supplies. Always run a HSN-wise rate analysis before filing.</p>
            </div>
        </section>

        <section class="content-section" id="concessional">
            <h2>Rate Cuts vs Concessional Rates — Circular 173/05/2022</h2>
            <p>One of the most litigated questions in IDS refund is whether rate inversion arising from a tax-rate reduction on the same goods qualifies for refund. CBIC's evolving stance and ultimate clarification in Circular 173/05/2022-GST dated 6 July 2022 settles the position.</p>
            <h3>The Two Scenarios</h3>
            <p><strong>Scenario A — Concessional notification at the same point in time</strong>: Inputs of fertiliser at 18% supplied to a fertiliser manufacturer whose output urea attracts 5% by virtue of a concessional rate notification. Both rates exist concurrently. <strong>IDS refund is admissible.</strong></p>
            <p><strong>Scenario B — Rate cut on the same goods over time</strong>: Inputs of garments procured at 12% prior to a rate reduction; subsequent garment supply at 5% post the rate-cut notification. The same goods now attract a lower output rate due to a temporal rate change. <strong>IDS refund is not admissible</strong> — the accumulation arose from a rate cut, not from a structurally inverted supply chain.</p>
            <h3>Judicial Endorsement</h3>
            <p>The Telangana High Court in <em>Micro Systems &amp; Services Sole Proprietorship v UOI</em> (2022) considered Circular 173/05/2022 to be clarificatory and applied it retrospectively to rate-cut inversions. Earlier High Court decisions including the Calcutta HC in <em>Shivaco Associates v Joint Commissioner of State Tax</em> (2022) and the Rajasthan HC in <em>Baker Hughes Asia Pacific Ltd</em> (2022) had distinguished concessional-rate inversion from rate-cut inversion and allowed refund only in the concessional-rate scenario. The position is now settled.</p>
            <h3>How to Test Your Case</h3>
            <ol>
                <li>Identify the input HSN and the output HSN.</li>
                <li>Pull the rate notification applicable to inputs and the rate notification applicable to outputs <strong>on the same date</strong>.</li>
                <li>If both rates are concurrent and the input rate is higher, IDS refund is admissible.</li>
                <li>If the inversion arose because the output rate was reduced via a subsequent notification while inputs continued at a higher rate, refund is not admissible to the extent of pre-rate-cut accumulated credit.</li>
                <li>For mixed scenarios (some inversion structural, some from rate cut), apportion the accumulated ITC and claim only the structurally inverted portion.</li>
            </ol>
            <div class="callout warn">
                <p><strong>2025 GST Rate Rationalisation:</strong> The Government's announced rate rationalisation may trigger one-off rate cuts on specific HSNs. Manufacturers holding significant inventory at the time of any future rate cut should expect their post-cut accumulated credit to fall into the rate-cut bucket and not qualify for IDS refund. Accelerate refund filings for current-period accumulated credit before any rate change.</p>
            </div>
        </section>

        <section class="content-section" id="rulings">
            <h2>Recent Rulings — Ascent Meditech, Filatex &amp; Tirth Agro</h2>
            <p>The legal landscape on Rule 89(5) has shifted significantly in favour of taxpayers through 2024 and 2025. Three rulings stand out.</p>
            <h3>Ascent Meditech Ltd v Union of India (Gujarat HC 2024)</h3>
            <p>The petitioner challenged CBIC Circular 181/2022 paragraph 2(1) which made the new Rule 89(5) formula prospective from 5 July 2022, thereby denying the proportionate-deduction benefit to taxpayers with refund claims for earlier periods filed before 5 July 2022. The Gujarat High Court held that the amendment to Rule 89(5) was <strong>curative and clarificatory in nature</strong> and therefore applies retrospectively. The Court reasoned that the amendment merely corrected an anomaly in the original formula identified by the Supreme Court in VKC Footsteps and gave effect to the legislative intent of refunding unutilised ITC. The contrary portion of Circular 181 was quashed.</p>
            <h3>Filatex India Ltd v Union of India (Gujarat HC 2025)</h3>
            <p>Building on Ascent Meditech, the Gujarat High Court reaffirmed in Filatex India that the new formula applies retrospectively. The Court emphasised that procedural amendments to refund computations do not create new rights or impose new restrictions — they merely give better effect to the existing entitlement under Section 54(3)(ii). The Department was directed to recompute past refund applications using the new formula.</p>
            <h3>Union of India v Tirth Agro Technology Pvt Ltd (Supreme Court 2025)</h3>
            <p>The Department filed a Special Leave Petition before the Supreme Court challenging the Gujarat HC view in a related Tirth Agro Technology matter. In July 2025 the Supreme Court dismissed the SLP through a non-speaking order. While a non-speaking dismissal is not a binding precedent under Article 141 (per the Constitution Bench in <em>Kunhayammed v State of Kerala</em>), the dismissal effectively allowed the Gujarat HC view to stand and emboldened other taxpayers to claim retrospective benefit. Several High Courts including the Bombay, Delhi and Kerala HCs are expected to follow the Gujarat reasoning in pending matters.</p>
            <h3>Implications for Past Periods</h3>
            <ul>
                <li><strong>Refund claims filed before 5 July 2022 and pending</strong> — Apply for recomputation under the new formula citing Ascent Meditech and Filatex.</li>
                <li><strong>Refund claims rejected on the old formula and under appeal</strong> — Move appellate authority for restoration based on the curative-and-retrospective doctrine.</li>
                <li><strong>Periods prior to 5 July 2022 not yet claimed but within limitation</strong> — File RFD-01 using the new formula directly.</li>
                <li><strong>Past closed claims with finality</strong> — Generally no relief available; consider rectification under Section 161 only in narrow scenarios.</li>
            </ul>
        </section>

        <section class="content-section" id="filing">
            <h2>RFD-01 Filing Process &amp; Statement-1A Preparation</h2>
            <p>Inverted duty refund is filed through Form GST RFD-01 on the GST common portal under category "Refund on account of ITC accumulated due to inverted tax structure". The filing journey, from data preparation to refund credit, typically spans 60 to 90 days for clean cases.</p>
            <h3>Pre-Filing Documentation</h3>
            <ul>
                <li><strong>HSN-wise rate analysis</strong> proving structural inversion at same point in time.</li>
                <li><strong>GSTR-1 and GSTR-3B</strong> for the period(s) covered, filed on or before the RFD-01 application.</li>
                <li><strong>Annexure-B</strong> with invoice-wise ITC details for inputs (excluding services and capital goods).</li>
                <li><strong>Statement-1A</strong> computing the maximum refund amount per Rule 89(5) with formula breakdown.</li>
                <li><strong>Electronic credit ledger statement</strong> for the period showing accumulated ITC balance.</li>
                <li><strong>Undertaking under Rule 89(2)(l)</strong> that the refund will not be passed on to others.</li>
                <li><strong>Declaration of non-prosecution</strong> under Rule 89(2)(k).</li>
                <li><strong>CA / CMA Certification</strong> in Annexure 2 of Circular 125/2019 if refund exceeds two lakh rupees.</li>
                <li><strong>Bank account details</strong> validated and registered on the GST portal.</li>
            </ul>
            <h3>Filing Steps on GST Portal</h3>
            <ol>
                <li>Login to <a href="https://www.gst.gov.in" rel="noopener" target="_blank">gst.gov.in</a> and navigate to Services → Refunds → Application for Refund.</li>
                <li>Select "Refund on account of ITC accumulated due to inverted tax structure".</li>
                <li>Choose the financial year and the period(s) (consecutive periods within same FY may be clubbed).</li>
                <li>Auto-populate the eligible Net ITC from Table 4(A)(5) of GSTR-3B less reversals.</li>
                <li>Enter Statement-1A figures: Inverted Turnover, Adjusted Total Turnover, Tax Payable on Inverted Supply.</li>
                <li>System computes Maximum Refund Amount using the prescribed formula.</li>
                <li>Adjust head-wise (IGST/CGST/SGST) within the credit ledger balance constraint.</li>
                <li>Upload Annexure-B, CA Certificate (if applicable) and supporting documents.</li>
                <li>Submit using DSC or EVC. ARN is generated.</li>
            </ol>
            <h3>Post-Filing Process</h3>
            <p>The proper officer issues Form GST RFD-02 acknowledging receipt within 15 days. Scrutiny may include additional documents requested via Form GST RFD-08 deficiency memo. The final order in Form GST RFD-06 is required within 60 days of complete application per Section 54(7). Refund credit is processed through PFMS to the registered bank account. Section 56 interest at 6% per annum accrues from day 61 till credit date if delayed beyond 60 days.</p>
            <h3>Common Mistakes to Avoid</h3>
            <ul>
                <li>Including input services or capital goods ITC in Net ITC computation.</li>
                <li>Including exempt or nil-rated turnover in Adjusted Total Turnover.</li>
                <li>Computing tax payable as net of ITC (should be gross output tax on inverted supply).</li>
                <li>Filing past-period claims using the old formula post-Ascent Meditech ruling.</li>
                <li>Missing the two-year limitation from GSTR-3B due date for the period.</li>
                <li>Not reversing ITC under Rule 42/43 before computing Net ITC for refund.</li>
                <li>Filing for restricted Chapter 15/27 goods for periods after 18 July 2022.</li>
                <li>Mixing zero-rated and inverted-rate periods in a single RFD-01.</li>
            </ul>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Inverted Duty Structure under GST and when does refund arise?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Inverted Duty Structure arises where the rate of GST on inputs is higher than the rate on output supplies, leading to accumulation of unutilised Input Tax Credit. Under Section 54(3) clause (ii) of the proviso, the registered person is entitled to refund of such accumulated ITC, subject to the formula in Rule 89(5) and exclusion of nil-rated, fully exempt and notified restricted supplies. Common sectors are textiles, footwear, fertilisers, EV batteries and pharmaceuticals.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the current Rule 89(5) formula post Notification 14/2022?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Maximum Refund Amount equals Turnover of inverted rated supply multiplied by Net ITC divided by Adjusted Total Turnover, minus Tax payable on inverted rated supply multiplied by Net ITC divided by total ITC availed on inputs and input services. The proportionate deduction term, introduced from 5 July 2022 by Notification 14/2022-Central Tax, replaces the earlier flat deduction of full output tax payable and provides a fairer outcome where input service ITC is significant.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I claim refund of ITC on input services under the inverted duty structure?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Direct refund of ITC on input services is not admissible under Rule 89(5). The Supreme Court in Union of India versus VKC Footsteps India confirmed that Net ITC for IDS refund means ITC on input goods only. However, the amended formula introduced by Notification 14/2022 indirectly accounts for input-service ITC by reducing the deduction proportionally to the share of input goods in total ITC, partially mitigating the working capital impact for service-intensive manufacturers.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Which goods are restricted from inverted duty refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Notification 5/2017-Central Tax (Rate) (as amended by 20/2018) restricts IDS refund for specified woven fabrics, knitted fabrics and certain textile items. Notification 9/2022-Central Tax (Rate) effective 18 July 2022 inserted Chapter 15 edible oils (palm, soyabean, sunflower etc.) and Chapter 27 mineral fuels (coal, coke, lignite, briquettes) into the restricted list. Restriction applies prospectively to tax periods from 18 July 2022 only, per Gujarat HC ruling.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is the amended Rule 89(5) formula prospective or retrospective?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CBIC Circular 181/2022 stated the amendment is prospective from 5 July 2022. However, the Gujarat High Court in Ascent Meditech Limited and Filatex India held that the amendment is curative and clarificatory in nature and applies retrospectively. The Supreme Court dismissed the Department's Special Leave Petition in Tirth Agro Technology in July 2025, allowing the favourable Gujarat view to stand. Taxpayers may rely on these rulings for past periods.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the time limit for filing inverted duty refund application?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54(1) prescribes a two-year limitation from the relevant date. For refund of unutilised ITC under inverted duty structure, the relevant date is the due date for furnishing of the return for the tax period to which the claim relates, as clarified by Notification 13/2022-Central Tax. The period from 1 March 2020 to 28 February 2022 was excluded from limitation computation by the same notification, granting additional time for COVID-affected periods.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is Net ITC defined for the purpose of Rule 89(5)?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Net ITC means ITC availed on inputs (goods) during the relevant period. It excludes ITC on input services, ITC on capital goods, ITC reversed under Section 17(5) blocked credits and ITC reversed under Rule 42 or 43. Net ITC includes inputs whether or not directly consumed in manufacture per Circular 79/2018. For computation, Net ITC is taken from Table 4(A)(5) of GSTR-3B filed for the period less reversals in Table 4(B).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Adjusted Total Turnover under Rule 89(5)?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Adjusted Total Turnover means the sum of value of all taxable supplies excluding zero-rated supplies and zero-rated supplies turnover, less exempt supplies turnover other than zero-rated, during the relevant period. The definition was rationalised by Notification 14/2022 in line with the LUT formula amendment post the Supreme Court VKC Footsteps decision and Circular 197/2023, ensuring consistency between the IDS and LUT refund formulas.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What documents are required for filing RFD-01 for IDS refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Form GST RFD-01 must be filed with Statement-1A computing the maximum refund amount, an undertaking under Rule 89(2)(l), a declaration of non-prosecution, copies of GSTR-1 and GSTR-3B for the period, an Annexure-B with invoice-wise input details, the electronic credit ledger statement, a CA or CMA certification for refund claims exceeding two lakh rupees and evidence of inverted rate structure such as a HSN summary.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Will I get interest if my IDS refund is delayed beyond 60 days?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Section 56 of the CGST Act provides simple interest at six per cent per annum on any refund not paid within sixty days from the date of receipt of the application complete in all respects. The 60-day clock starts from the date of acknowledgement in Form GST RFD-02. If the refund is sanctioned by an appellate authority on appeal, the rate of interest increases to nine per cent per annum from the date immediately after expiry of sixty days.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can the rate inversion be due to a rate cut on the same goods?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Circular 173/05/2022-GST clarified that where the same goods attract different rates of tax at different points in time due to a rate reduction, the resulting accumulated ITC is not refundable as inverted duty structure refund. However, where the rate inversion arises from a concessional rate notification that prescribes a lower output rate compared to inputs at the same point, the refund is admissible. The Telangana High Court in Micro Systems upheld this position.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I claim provisional refund of 90 per cent for inverted duty refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The provisional refund of ninety per cent under Section 54(6) read with Rule 91 is available only in respect of refund claims arising from zero-rated supplies under Section 54(6) made by registered persons whose returns and compliance are in order. Refund of accumulated ITC due to inverted duty structure does not qualify for provisional refund and the entire amount is sanctioned only after detailed scrutiny by the proper officer typically within sixty days.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between the old and new Rule 89(5) formulas?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The old formula deducted the full tax payable on inverted rated supply from the formula amount, often resulting in nil or low refund where input service ITC was significant. The new formula introduced by Notification 14/2022 deducts only the proportion of tax payable that corresponds to Net ITC over total ITC including input services. This proportionate approach yields a higher refund where input services contribute substantially to ITC, restoring fairness for service-intensive manufacturers.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I file an inverted duty refund claim period by period or as an aggregate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The refund application is filed period-wise — month-wise for monthly filers and quarter-wise for QRMP filers. Multiple consecutive periods may be clubbed in one RFD-01 if all periods relate to the same financial year and the inverted rate structure remains consistent. Each period is separately validated against the formula. The two-year limitation runs separately for each period from the GSTR-3B due date for that period.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What if my refund is rejected by the proper officer — what is the appeal process?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If the proper officer rejects the refund through Form GST RFD-08 followed by Form GST RFD-06, the registered person may file an appeal under Section 107 before the Appellate Authority within three months of the order, extendable by one month. After 1 October 2025 the Goods and Services Tax Appellate Tribunal hears second appeals under Section 112 within three months of the appellate order with mandatory pre-deposit of ten per cent of disputed tax.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need IDS Refund Filing?</h3>
            <p>End-to-end Statement-1A preparation, HSN rate analysis, RFD-01 filing and CA certification for inverted duty refunds across textiles, fertilisers, EV and pharma.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Inverted%20Duty%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Inverted%20Duty%20Refund%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Inverted%20Duty%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/gst-returns-for-sez" class="sidebar-link">GST Returns for SEZ<span class="arrow">→</span></a>
            <a href="/iec-registration" class="sidebar-link">IEC Registration<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/export-refund-lut-calculator" class="sidebar-link">Export Refund Calculator (LUT)<span class="arrow">→</span></a>
            <a href="/tools/igst-export-refund-calculator" class="sidebar-link">IGST Export Refund Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee &amp; Interest<span class="arrow">→</span></a>
            <a href="/tools/gstr-2a-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation<span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/import-export-code-iec-registration-complete-guide-for-indian-businesses" class="sidebar-link">IEC Registration Complete Guide<span class="arrow">→</span></a>
            <a href="/blog/income-tax-refund-issue-understanding-refund-withheld-and-adjustment-cases" class="sidebar-link">Refund Withheld &amp; Adjustment Cases<span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-private-limited-companies-in-india-2025-2026" class="sidebar-link">Annual Compliance Calendar 2025-26<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune · Mumbai · Delhi · Gurugram</div>
    <div class="trust">Trusted by 500+ manufacturers across India</div>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function(){
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}
    var $ = function(id){ return document.getElementById(id); };

    function fmtINR(n){
        if (n === null || n === undefined || isNaN(n)) return '—';
        var v = Math.round(Number(n));
        var sign = v < 0 ? '−' : '';
        v = Math.abs(v);
        if (v >= 10000000) return sign + '₹' + (v/10000000).toFixed(2) + ' Cr';
        if (v >= 100000)   return sign + '₹' + (v/100000).toFixed(2) + ' L';
        return sign + '₹' + v.toLocaleString('en-IN');
    }

    function fmtINRfull(n){
        if (n === null || n === undefined || isNaN(n)) return '—';
        var v = Math.round(Number(n));
        var sign = v < 0 ? '−' : '';
        v = Math.abs(v);
        return sign + '₹' + v.toLocaleString('en-IN');
    }

    function fmtDate(d){
        if (!d || isNaN(d.getTime())) return '—';
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
    }

    function addDays(d, n){
        var r = new Date(d.getTime());
        r.setDate(r.getDate() + n);
        return r;
    }

    function addMonths(d, n){
        var r = new Date(d.getTime());
        var orig = r.getDate();
        r.setMonth(r.getMonth() + n);
        if (r.getDate() < orig) r.setDate(0);
        return r;
    }

    function addYears(d, n){
        var r = new Date(d.getTime());
        r.setFullYear(r.getFullYear() + n);
        return r;
    }

    function daysBetween(d1, d2){
        var ms = d2.getTime() - d1.getTime();
        return Math.round(ms / (1000 * 60 * 60 * 24));
    }

    function getGstr3bDueDate(periodStr, filerType){
        // periodStr: "YYYY-MM"
        var parts = periodStr.split('-');
        var y = parseInt(parts[0], 10);
        var m = parseInt(parts[1], 10) - 1; // 0-indexed
        // Period end → next month → due date
        var due;
        if (filerType === 'qrmp') {
            // QRMP: quarter-end month + 22nd of next month (Class A states) or 24th (Class B)
            // Default to 24 to be safe; user adjusts
            // Quarter ends: Mar, Jun, Sep, Dec → due Apr/Jul/Oct/Jan 24
            var qEndMonth;
            if (m <= 2) qEndMonth = 2;       // Q4: Jan-Mar → end Mar → due 24 Apr
            else if (m <= 5) qEndMonth = 5;  // Q1: Apr-Jun → end Jun → due 24 Jul
            else if (m <= 8) qEndMonth = 8;  // Q2: Jul-Sep → end Sep → due 24 Oct
            else qEndMonth = 11;             // Q3: Oct-Dec → end Dec → due 24 Jan (next year)
            var dueY = y;
            var dueM = qEndMonth + 1;
            if (dueM > 11) { dueM -= 12; dueY += 1; }
            due = new Date(dueY, dueM, 24);
        } else {
            // Monthly: 20th of next month
            var nm = m + 1;
            var ny = y;
            if (nm > 11) { nm = 0; ny += 1; }
            due = new Date(ny, nm, 20);
        }
        return due;
    }

    // Toggle group handler — generic for any toggle-group
    function bindToggle(containerId, callback){
        var container = $(containerId);
        if (!container) return;
        container.addEventListener('click', function(e){
            var btn = e.target.closest('.toggle-btn');
            if (!btn || !container.contains(btn)) return;
            var btns = container.querySelectorAll('.toggle-btn');
            for (var i = 0; i < btns.length; i++) btns[i].classList.remove('active');
            btn.classList.add('active');
            if (callback) callback(btn.dataset.value);
        });
    }

    function getActiveToggleValue(containerId){
        var container = $(containerId);
        if (!container) return null;
        var active = container.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }

    bindToggle('formula-toggle');
    bindToggle('restricted-toggle');

    // FAQ accordion
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function(item){
        var btn = item.querySelector('.faq-question');
        if (!btn) return;
        btn.addEventListener('click', function(){
            item.classList.toggle('open');
            btn.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
        });
    });

    // TOC active state on scroll
    var tocLinks = document.querySelectorAll('.toc-nav a');
    var tocSections = [];
    tocLinks.forEach(function(a){
        var id = a.getAttribute('href').replace('#','');
        var s = document.getElementById(id);
        if (s) tocSections.push({id: id, el: s, link: a});
    });
    function updateTocActive(){
        var scrollY = window.scrollY + 100;
        var current = tocSections[0];
        for (var i = 0; i < tocSections.length; i++){
            if (tocSections[i].el.offsetTop <= scrollY) current = tocSections[i];
        }
        tocLinks.forEach(function(l){ l.classList.remove('active'); });
        if (current && current.link) current.link.classList.add('active');
    }
    window.addEventListener('scroll', updateTocActive, {passive: true});
    updateTocActive();

    // Compute function
    function compute(){
        var period = $('period').value || '2026-04';
        var filerType = $('filer-type').value;
        var invTurnover = parseINR($('inv-turnover').value) || 0;
        var adjTurnover = parseINR($('adj-turnover').value) || 0;
        var itcInputs = parseINR($('itc-inputs').value) || 0;
        var itcServices = parseINR($('itc-services').value) || 0;
        var itcCG = parseINR($('itc-cg').value) || 0;
        var ledgerBal = parseINR($('ledger-bal').value) || 0;
        var taxPayable = parseINR($('tax-payable').value) || 0;
        var restrictedStatus = getActiveToggleValue('restricted-toggle') || 'none';
        var formulaVariant = getActiveToggleValue('formula-toggle') || 'new';
        var ackDateStr = $('ack-date').value;
        var ackDate = ackDateStr ? new Date(ackDateStr) : new Date();

        // Validations
        if (invTurnover <= 0 || adjTurnover <= 0 || itcInputs <= 0) {
            alert('Please enter Turnover of Inverted Rated Supply, Adjusted Total Turnover and Net ITC (input goods).');
            return;
        }
        if (invTurnover > adjTurnover) {
            alert('Turnover of Inverted Rated Supply cannot exceed Adjusted Total Turnover.');
            return;
        }

        // Net ITC = input goods only (VKC Footsteps)
        var netITC = itcInputs;
        var totalITC = itcInputs + itcServices;

        // Numerator (same for both formulas)
        var numerator = (invTurnover * netITC) / adjTurnover;

        // Old formula deduction: full tax payable
        var oldDeduction = taxPayable;
        var oldRefund = Math.max(0, numerator - oldDeduction);

        // New formula deduction: tax payable × (Net ITC / Total ITC)
        var ratioFactor = totalITC > 0 ? (netITC / totalITC) : 1;
        var newDeduction = taxPayable * ratioFactor;
        var newRefund = Math.max(0, numerator - newDeduction);

        var maxRefund = formulaVariant === 'new' ? newRefund : oldRefund;

        // Cap at ledger balance
        var cappedRefund = Math.min(maxRefund, ledgerBal);

        // Timeline: GSTR-3B due date = relevant date for IDS
        var relevantDate = getGstr3bDueDate(period, filerType);
        var limitationExpiry = addYears(relevantDate, 2);
        var sixtyDayDue = addDays(ackDate, 60);
        var today = new Date();
        var daysToLimit = daysBetween(today, limitationExpiry);

        // Restricted-goods check — Ch15/27 only blocks if period >= 2022-07-18
        var periodDate = new Date(period + '-01');
        var ch15_27_effective = new Date(2022, 6, 18); // 18 Jul 2022
        var isRestrictedCh15 = (restrictedStatus === 'ch15-27' && periodDate >= ch15_27_effective);
        var isRestrictedTextile = (restrictedStatus === 'textile');

        // Time-bar check
        var isTimeBarred = today > limitationExpiry;

        // Verdict
        var verdictClass = '';
        var verdictHeadline = '';
        var verdictSub = '';
        var alerts = [];

        if (isTimeBarred) {
            verdictClass = 'red';
            verdictHeadline = 'TIME-BARRED — Limitation Expired';
            verdictSub = 'The 2-year limitation under Section 54(1) from the GSTR-3B due date has expired for this period. Refund cannot be filed.';
            alerts.push({type: 'danger', html: '<strong>Section 54(1) limitation expired.</strong> Relevant date for IDS refund is the GSTR-3B due date for the period (' + fmtDate(relevantDate) + '). Two-year limitation expired on ' + fmtDate(limitationExpiry) + '. Refund application cannot be filed under Section 54(1).'});
            cappedRefund = 0;
        } else if (isRestrictedCh15) {
            verdictClass = 'red';
            verdictHeadline = 'BLOCKED — Restricted Goods (Chapter 15/27)';
            verdictSub = 'Notification 9/2022-CT(R) restricts IDS refund for specified Chapter 15 (edible oils) and Chapter 27 (mineral fuels) goods from 18 July 2022.';
            alerts.push({type: 'danger', html: '<strong>Restricted under Notification 9/2022-Central Tax (Rate).</strong> Goods of Chapter 15 (palm oil, soyabean oil, sunflower oil etc.) and Chapter 27 (coal, coke, lignite, briquettes) are excluded from IDS refund for tax periods on or after 18 July 2022. The Gujarat HC ruling of July 2025 confirmed the restriction operates on tax period (not filing date) — so prior periods remain eligible.'});
            cappedRefund = 0;
        } else if (isRestrictedTextile) {
            verdictClass = 'amber';
            verdictHeadline = 'VERIFY HSN — Textile Restriction Possible';
            verdictSub = 'Notification 5/2017-CT(R) historically restricted certain textile fabrics. From 1 August 2018 (per Notification 20/2018), fabrics became eligible. Verify HSN before filing.';
            alerts.push({type: 'warn', html: '<strong>Textile sector restriction (Notification 5/2017 as amended by 20/2018).</strong> Woven and knitted fabrics became eligible for IDS refund from 1 August 2018, with the condition that ITC accumulated up to 31 July 2018 lapsed. Made-ups and certain textile items remain restricted. Confirm exact HSN — Chapter 50-63 — and effective date before filing.'});
        } else if (maxRefund <= 0) {
            verdictClass = 'amber';
            verdictHeadline = 'NIL REFUND — Tax Payable Exceeds Formula Amount';
            verdictSub = 'The tax payable on inverted rated supply equals or exceeds the formula numerator. No refundable amount under Rule 89(5).';
            alerts.push({type: 'warn', html: '<strong>Formula yields nil refund.</strong> The deduction term (tax payable on inverted supply) is greater than or equal to the formula amount (Inverted Turnover × Net ITC ÷ Adjusted Total Turnover). This typically occurs where output tax payable is high relative to accumulated ITC. Verify the inverted-rate classification and Net ITC computation; consider the new formula if you used the old one.'});
        } else if (cappedRefund < maxRefund) {
            verdictClass = 'amber';
            verdictHeadline = 'CAPPED BY LEDGER — Refund Limited to Credit Balance';
            verdictSub = 'Formula amount of ' + fmtINR(maxRefund) + ' exceeds your electronic credit ledger balance. Refund capped at ledger balance.';
            alerts.push({type: 'warn', html: '<strong>Refund capped at electronic credit ledger balance.</strong> Formula computes ' + fmtINR(maxRefund) + ' but ledger balance is ' + fmtINR(ledgerBal) + '. Refund admissible cannot exceed accumulated balance. Consider clubbing prior periods if balance was utilised against output liability.'});
        } else {
            verdictClass = '';
            verdictHeadline = 'ELIGIBLE — Refund of ' + fmtINR(cappedRefund);
            verdictSub = 'Inverted duty refund computed per Rule 89(5) ' + (formulaVariant === 'new' ? 'amended formula' : 'pre-amendment formula') + '. File RFD-01 with Statement-1A.';
        }

        // Add formula benefit alert
        if (!isRestrictedCh15 && !isTimeBarred && newRefund > oldRefund + 100) {
            alerts.push({type: 'info', html: '<strong>New formula benefit:</strong> The amended Rule 89(5) formula yields ' + fmtINR(newRefund - oldRefund) + ' more than the pre-2022 formula, owing to your input services ITC of ' + fmtINR(itcServices) + '. Per Ascent Meditech (Gujarat HC 2024) and the SC dismissal in Tirth Agro (July 2025), the amendment is curative and applies retrospectively even for past periods within limitation.'});
        }

        // Days-to-limit alert
        if (!isTimeBarred && !isRestrictedCh15) {
            if (daysToLimit < 90) {
                alerts.push({type: 'warn', html: '<strong>Limitation closing soon:</strong> Only ' + daysToLimit + ' days remain until the 2-year Section 54(1) limitation expires on ' + fmtDate(limitationExpiry) + '. File RFD-01 immediately.'});
            }
        }

        // Capital goods note
        if (itcCG > 0) {
            alerts.push({type: 'info', html: '<strong>Capital goods ITC excluded:</strong> ITC of ' + fmtINR(itcCG) + ' on capital goods is not refundable under Rule 89(5) per VKC Footsteps SC ruling. Excluded from Net ITC computation. Continues to be available against future output liability.'});
        }

        // Render verdict
        $('verdict').className = 'verdict-card' + (verdictClass ? ' ' + verdictClass : '');
        $('verdict-headline').textContent = verdictHeadline;
        $('verdict-sub').textContent = verdictSub;
        $('v-max').textContent = fmtINR(maxRefund);
        $('v-capped').textContent = fmtINR(cappedRefund);
        $('v-net').textContent = fmtINR(netITC);

        // Render alerts
        var alertsHtml = '';
        for (var i = 0; i < alerts.length; i++) {
            alertsHtml += '<div class="info-banner ' + alerts[i].type + '">' + alerts[i].html + '</div>';
        }
        $('alerts').innerHTML = alertsHtml;

        // Basis text
        var basisText = '';
        basisText += '<strong>Period:</strong> ' + period + ' (' + (filerType === 'qrmp' ? 'QRMP filer' : 'Monthly filer') + '). ';
        basisText += '<strong>Formula variant:</strong> ' + (formulaVariant === 'new' ? 'Post-5 Jul 2022 (Notification 14/2022-CT)' : 'Pre-5 Jul 2022') + '. ';
        basisText += '<strong>Net ITC:</strong> ' + fmtINR(netITC) + ' (input goods only; input services and capital goods excluded per VKC Footsteps SC). ';
        if (formulaVariant === 'new') {
            basisText += '<strong>Total ITC for deduction:</strong> ' + fmtINR(totalITC) + ' (inputs ' + fmtINR(itcInputs) + ' + services ' + fmtINR(itcServices) + '). ';
            basisText += '<strong>Ratio factor:</strong> ' + (ratioFactor * 100).toFixed(2) + '%. ';
        }
        basisText += '<strong>Tax payable on inverted supply:</strong> ' + fmtINR(taxPayable) + '. ';
        basisText += '<strong>Statutory cap:</strong> Lower of formula amount and electronic credit ledger balance ' + fmtINR(ledgerBal) + '.';
        $('basis-text').innerHTML = basisText;

        // Formula display
        var formulaHtml = '';
        if (formulaVariant === 'new') {
            formulaHtml = 'Refund = (Inverted Turnover × Net ITC ÷ Adjusted Total Turnover) − [Tax Payable × (Net ITC ÷ Total ITC)]<br>';
            formulaHtml += '       = (' + fmtINR(invTurnover) + ' × ' + fmtINR(netITC) + ' ÷ ' + fmtINR(adjTurnover) + ') − [' + fmtINR(taxPayable) + ' × (' + fmtINR(netITC) + ' ÷ ' + fmtINR(totalITC) + ')]<br>';
            formulaHtml += '       = ' + fmtINR(numerator) + ' − ' + fmtINR(newDeduction) + '<br>';
            formulaHtml += '       = <strong>' + fmtINR(maxRefund) + '</strong>';
        } else {
            formulaHtml = 'Refund = (Inverted Turnover × Net ITC ÷ Adjusted Total Turnover) − Tax Payable<br>';
            formulaHtml += '       = (' + fmtINR(invTurnover) + ' × ' + fmtINR(netITC) + ' ÷ ' + fmtINR(adjTurnover) + ') − ' + fmtINR(taxPayable) + '<br>';
            formulaHtml += '       = ' + fmtINR(numerator) + ' − ' + fmtINR(oldDeduction) + '<br>';
            formulaHtml += '       = <strong>' + fmtINR(maxRefund) + '</strong>';
        }
        $('formula-text').innerHTML = formulaHtml;

        // Compare card
        $('c-old').textContent = fmtINR(oldRefund);
        $('c-new').textContent = fmtINR(newRefund);

        // Summary grid
        $('s-inv').textContent = fmtINR(invTurnover);
        $('s-adj').textContent = fmtINR(adjTurnover);
        $('s-net').textContent = fmtINR(netITC);
        $('s-tot').textContent = fmtINR(totalITC);
        $('s-tax').textContent = fmtINR(taxPayable);
        $('s-refund').textContent = fmtINR(cappedRefund);

        // Timeline
        $('t-rel').textContent = fmtDate(relevantDate);
        $('t-limit').textContent = fmtDate(limitationExpiry);
        $('t-60').textContent = fmtDate(sixtyDayDue);
        if (isTimeBarred) {
            $('t-days').textContent = 'Expired';
        } else {
            $('t-days').textContent = daysToLimit + ' days';
        }

        // Statement-1A preview
        var stmtRows = [
            ['1', 'Turnover of inverted rated supply of goods/services', invTurnover],
            ['2', 'Net ITC (Inputs only — VKC Footsteps)', netITC],
            ['3', 'Adjusted Total Turnover', adjTurnover],
            ['4', 'Numerator: (1) × (2) ÷ (3)', numerator],
            ['5', 'Tax Payable on inverted rated supply', taxPayable]
        ];
        if (formulaVariant === 'new') {
            stmtRows.push(['6', 'Total ITC on inputs + input services', totalITC]);
            stmtRows.push(['7', 'Deduction term: (5) × (2) ÷ (6)', newDeduction]);
            stmtRows.push(['8', 'Maximum Refund Amount: (4) − (7)', maxRefund]);
        } else {
            stmtRows.push(['6', 'Deduction: full Tax Payable as per (5)', oldDeduction]);
            stmtRows.push(['7', 'Maximum Refund Amount: (4) − (6)', maxRefund]);
        }
        stmtRows.push(['', 'Cap: Electronic Credit Ledger Balance', ledgerBal]);
        stmtRows.push(['', 'Refund Admissible (lower of formula and ledger)', cappedRefund]);
        var stmtHtml = '';
        for (var j = 0; j < stmtRows.length; j++) {
            var sr = stmtRows[j];
            var prefix = sr[0] ? '(' + sr[0] + ') ' : '';
            stmtHtml += '<tr><td>' + prefix + sr[1] + '</td><td class="num">' + fmtINRfull(sr[2]) + '</td></tr>';
        }
        $('stmt-body').innerHTML = stmtHtml;

        // Show results
        $('results').classList.add('visible');
        $('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    function reset(){
        $('period').value = '2026-04';
        $('filer-type').value = 'monthly';
        $('inv-turnover').value = '10000000';
        $('adj-turnover').value = '12000000';
        $('itc-inputs').value = '1500000';
        $('itc-services').value = '300000';
        $('itc-cg').value = '0';
        $('ledger-bal').value = '2000000';
        $('tax-payable').value = '500000';
        $('ack-date').value = '2026-05-25';

        // Reset toggles to defaults
        var rt = $('restricted-toggle');
        rt.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        rt.querySelector('[data-value="none"]').classList.add('active');

        var ft = $('formula-toggle');
        ft.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        ft.querySelector('[data-value="new"]').classList.add('active');

        $('results').classList.remove('visible');
    }

    $('btn-calculate').addEventListener('click', compute);
    $('btn-reset').addEventListener('click', reset);
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
