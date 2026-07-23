@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Export Refund Calculator LUT | Rule 89(4) Unutilised ITC</title>
    <meta name="description" content="Export refund calculator for the LUT route: Rule 89(4) refund of unutilised ITC, with Adjusted Total Turnover and the 1.5x cap on goods. Free CA-reviewed tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/export-refund-lut-calculator/">
    <meta property="og:title" content="Export Refund Calculator (LUT Route) — Rule 89(4) GST Refund 2026">
    <meta property="og:description" content="Compute GST export refund under Letter of Undertaking using Rule 89(4) formula. Net ITC, Adjusted Total Turnover, 1.5x cap, RFD-01 Statement-3A preview. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/export-refund-lut-calculator">
    <meta property="og:image" content="/tools/og/export-refund-lut-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Export Refund Calculator (LUT Route) — Rule 89(4) GST Refund 2026">
    <meta name="twitter:description" content="Rule 89(4) refund formula, Net ITC, Adjusted Total Turnover, 1.5x cap, RFD-01 Statement-3A preview, time-bar check. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/export-refund-lut-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Export Refund Calculator (LUT Route)",
      "description": "Export Refund Calculator (LUT Route) computes the maximum admissible refund of unutilised Input Tax Credit for an Indian exporter making zero-rated supplies of goods or services without payment of Integrated Tax under a Letter of Undertaking, applying the formula prescribed under Rule 89(4) of the Central Goods and Services Tax Rules, 2017. The tool computes Refund Amount equal to the sum of zero-rated supply turnover of goods and services multiplied by Net ITC and divided by Adjusted Total Turnover, with the 1.5 times domestic-value cap on zero-rated supply of goods inserted by Notification No. 16/2020-Central Tax dated 23 March 2020. Net ITC is restricted to Input Tax Credit availed on inputs and input services during the relevant period and excludes capital goods Input Tax Credit and blocked credits under Section 17(5) of the CGST Act. Adjusted Total Turnover is computed in line with the amendment by Notification No. 14/2022-Central Tax read with Circular No. 197 of 2023 issued post the Supreme Court decision in Union of India versus VKC Footsteps India Private Limited. The calculator also shows the provisional refund of ninety per cent under Section 54(6), the sixty-day final-order window under Section 54(7), the six per cent interest entitlement under Section 56 for delayed sanction, the two-year limitation under Section 54(1) computed from the relevant date defined in Explanation (2) to Section 54, and a Statement-3A preview of the values to be entered in Form GST RFD-01 on the GST common portal.",
      "url": "/tools/export-refund-lut-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "Export Refund Calculator (LUT)", "item": "/tools/export-refund-lut-calculator"}
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
          "name": "What is the formula to calculate GST export refund under LUT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Refund Amount equals the sum of Turnover of Zero-Rated Supply of Goods and Turnover of Zero-Rated Supply of Services, multiplied by Net ITC and divided by Adjusted Total Turnover. This formula is prescribed by Rule 89(4) of the CGST Rules, 2017. It applies when an exporter makes zero-rated supplies under a Letter of Undertaking without paying Integrated Tax and seeks refund of accumulated Input Tax Credit. The admissible refund cannot exceed the Electronic Credit Ledger balance."
          }
        },
        {
          "@type": "Question",
          "name": "What is Net ITC under Rule 89(4) of the CGST Rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Net ITC means Input Tax Credit availed on inputs and input services during the relevant period for which refund is being claimed. Critically, ITC on capital goods is excluded from Net ITC for refund purposes under the LUT route. Blocked credits under Section 17(5) such as motor vehicles, food and beverages, and works contract for immovable property must also be excluded. Including capital goods or blocked credits is the most common cause of a deficiency memo in Form RFD-03."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 1.5 times cap on zero-rated supply of goods?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 16/2020-Central Tax dated 23 March 2020 amended Rule 89(4)(C) to cap the value of zero-rated supply of goods at 1.5 times the value of like goods supplied domestically by the same or a similarly placed supplier, whichever is less. The cap was inserted to prevent over-invoicing in fictitious refund claims. If your export invoice value exceeds 1.5 times the domestic value of comparable goods, the refund is computed on the capped figure rather than the declared export value."
          }
        },
        {
          "@type": "Question",
          "name": "What is Adjusted Total Turnover and how is it computed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Adjusted Total Turnover is the aggregate turnover in a State or Union Territory under Section 2(112), excluding the value of exempt supplies other than zero-rated supplies during the relevant period. The definition was amended by Notification 14/2022 dated 5 July 2022, aligned with the Supreme Court ruling in Union of India versus VKC Footsteps. CBIC Circular 197/2023 dated 17 July 2023 clarified the methodology. The figure is the denominator in the Rule 89(4) formula and must reconcile with GSTR-3B."
          }
        },
        {
          "@type": "Question",
          "name": "How long do I have to file the LUT export refund claim?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(1) of the CGST Act prescribes a two-year limitation from the relevant date for filing the refund application in Form GST RFD-01. For export of goods, the relevant date is the date the goods leave India by ship, aircraft, post or land per Explanation 2 to Section 54. For export of services, it is the date of receipt of payment in convertible foreign exchange evidenced by FIRC or BRC. Beyond two years, the claim is permanently time-barred."
          }
        },
        {
          "@type": "Question",
          "name": "How long does the GST department take to sanction my refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(7) of the CGST Act requires the proper officer to issue the refund sanction order in Form RFD-06 within sixty days from the date of acknowledgement in Form RFD-02. Section 54(6) provides for a provisional refund of 90 per cent within seven days of acknowledgement for zero-rated supplies. If the refund is not sanctioned within sixty days, Section 56 entitles the applicant to interest at six per cent per annum from day 61 until actual payment."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Letter of Undertaking and how is it filed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Letter of Undertaking is a declaration filed in Form GST RFD-11 under Rule 96A of the CGST Rules, allowing a registered exporter to make zero-rated supplies without paying Integrated Tax upfront. It is filed online on the GST portal under Services, User Services. The LUT is valid only from 1 April to 31 March of the financial year and must be renewed annually. Exporters prosecuted for tax evasion exceeding 2.5 crore must furnish a bond with bank guarantee instead."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file an LUT refund without an LUT in force?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Strictly no. If you export without an LUT in force, the supply is technically an Integrated Tax payable supply, not a zero-rated supply under bond or LUT. CBIC Circular 125/2019 dated 18 November 2019 permits ex-post-facto admission of LUT in cases of substantive compliance, at the proper officer's discretion. The safer practice is to file the LUT in Form RFD-11 on or before 1 April every financial year, since LUT validity runs only from 1 April to 31 March."
          }
        },
        {
          "@type": "Question",
          "name": "What changed in October 2024 regarding LUT export refunds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 20/2024-Central Tax effective 8 October 2024, issued post the 54th GST Council meeting, omitted Rule 96(10) along with Rule 89(4A) and Rule 89(4B) of the CGST Rules. The omission removed the bar on refund of unutilised ITC where the supplier had availed concessional benefits such as advance authorisation or EPCG. The change provides uniform treatment of exports made with payment of Integrated Tax and exports under LUT, removing significant compliance burden and litigation around the deemed export benefits chain."
          }
        },
        {
          "@type": "Question",
          "name": "How is the export turnover of services computed under Rule 89(4)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 89(4)(D) computes Turnover of Zero-Rated Supply of Services as payments received during the relevant period for zero-rated services, plus payments received in advance in any prior period for which supply was completed in the relevant period, minus advances received during the relevant period for services not yet completed. Service exporters must reconcile this with FIRC or BRC realisation dates and cannot use mere invoice value. This is markedly different from goods exporters where shipping bill value is used."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are required for an LUT refund claim?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For the LUT refund under Form GST RFD-01 with Statement-3, you need a copy of the LUT in Form RFD-11, Statement-3 listing export invoices with shipping bill numbers and dates, GSTR-1 Table 6A and GSTR-3B for the period, copies of shipping bills with EGM for goods, FIRC or BRC for services, declaration that incidence of tax has not been passed on, validated bank account on the GST portal, and a CA certificate where refund exceeds two lakh rupees."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between LUT route and IGST-paid route refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the LUT route per Rule 89, the exporter does not pay Integrated Tax on exports and claims refund of accumulated unutilised Input Tax Credit through Form RFD-01 with Statement-3, processed manually by the proper officer. Under the IGST-paid route per Rule 96, the exporter charges IGST and the refund is automatic through ICEGATE matching of shipping bill and GSTR-1 data. The LUT route preserves working capital but takes longer; the IGST route is faster but blocks cash."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim ITC on capital goods through the LUT export refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The definition of Net ITC in Rule 89(4)(B) explicitly restricts the credit to inputs and input services availed during the relevant period. Capital goods Input Tax Credit is not refundable under the LUT route and remains in the Electronic Credit Ledger for utilisation against domestic outward tax. This is a key disadvantage compared to the IGST-paid route under Rule 96, where the refund of IGST paid effectively liquidates capital goods ITC indirectly through the credit utilisation chain."
          }
        },
        {
          "@type": "Question",
          "name": "What is provisional refund and how is the 90 per cent computed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(6) read with Rule 91 mandates that 90 per cent of the refund claimed for zero-rated supplies be sanctioned provisionally in Form RFD-04 within seven days of acknowledgement in Form RFD-02. The provisional refund is granted without detailed scrutiny and is the working capital relief mechanism for exporters. The balance 10 per cent is sanctioned after detailed verification within the sixty-day final order window. Provisional sanction does not preclude later adjustment if scrutiny finds issues."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my refund exceeds my Electronic Credit Ledger balance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The refund admissible cannot exceed the closing balance in the Electronic Credit Ledger at the end of the tax period for which refund is claimed, after GSTR-3B is filed. Even if the Rule 89(4) formula produces a higher number, the system caps the refund at the ledger balance. The applicant must therefore file GSTR-3B before initiating RFD-01, and reconcile any inter-period transfer between IGST, CGST and SGST balances before submission to avoid mismatches."
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
        .calc-section-title.assets { color: var(--info); }
        .calc-section-title.liab { color: var(--danger); }
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

        .mpbf-card { background: linear-gradient(135deg, #EFF6FF, #DBEAFE); border: 2px solid var(--info); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .mpbf-card h4 { font-size: 14px; color: #1E3A8A; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .mpbf-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 10px; }
        @media (max-width: 500px) { .mpbf-grid { grid-template-columns: 1fr; } }
        .mpbf-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 14px; }
        .mpbf-item .lbl { font-size: 11px; font-weight: 700; color: #1E40AF; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .mpbf-item .val { font-family: var(--font-mono); font-weight: 700; color: #1E3A8A; font-size: 18px; }
        .mpbf-item .sub { font-size: 11px; color: #1E40AF; margin-top: 2px; }

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

        .toggle-pair-row { display: none; }
        .toggle-pair-row.visible { display: grid; }

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
        <a href="#formula">Rule 89(4)</a>
        <a href="#lut">LUT Filing</a>
        <a href="#process">RFD-01 Process</a>
        <a href="#errors">Common Errors</a>
        <a href="#timeline">Timeline &amp; Interest</a>
        <a href="#oct2024">Oct 2024 Update</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Export Refund Calculator (LUT)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Export Refund Calculator (LUT Route) — <span>Rule 89(4) GST Refund of Unutilised ITC</span> for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Export%20Refund%20Calculator%20%28LUT%29.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Export%20Refund%20Calculator%20%28LUT%29%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Export%20Refund%20Calculator%20%28LUT%29.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This Export Refund Calculator computes the maximum admissible refund under <strong>Rule 89(4) of the CGST Rules, 2017</strong> for exporters making zero-rated supplies under a Letter of Undertaking without payment of Integrated Tax. The formula is <strong>Refund = (Zero-Rated Turnover × Net ITC) ÷ Adjusted Total Turnover</strong>. The tool applies the <strong>1.5× domestic-value cap</strong> on goods turnover (Notification 16/2020), excludes capital goods ITC and Section 17(5) blocked credits from Net ITC, computes Adjusted Total Turnover post Notification 14/2022 and Circular 197/2023, validates the two-year limitation under Section 54(1), and previews <strong>Statement-3A</strong> values for Form GST RFD-01. Provisional 90% refund (Section 54(6)), 60-day final order window (Section 54(7)) and 6% Section 56 interest entitlement included.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your LUT Export Refund</h2>
            <p class="calc-intro">Enter the values exactly as they appear in your GSTR-1 Table 6A, GSTR-3B and Electronic Credit Ledger for the relevant tax period. The calculator applies the Rule 89(4) formula, the 1.5× cap on goods, and the Net ITC restriction. All amounts in ₹ rupees.</p>
            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or refer to the formula in the section below.</div>
            </noscript>

            <div class="calc-section-title">Type of Zero-Rated Export</div>
            <div class="toggle-group" id="exportTypeGroup" role="tablist">
                <button type="button" class="toggle-btn active" data-value="goods" aria-selected="true">Goods Only</button>
                <button type="button" class="toggle-btn" data-value="services" aria-selected="false">Services Only</button>
                <button type="button" class="toggle-btn" data-value="both" aria-selected="false">Goods &amp; Services</button>
            </div>

            <div class="calc-section-title assets">Zero-Rated Supply Turnover</div>
            <div class="calc-row" id="goodsRow">
                <div class="form-group">
                    <label for="zrsg">Zero-Rated Goods Turnover (₹)</label>
                    <input type="text" id="zrsg" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">FOB value of goods exported under LUT in the relevant period (shipping bill value).</span>
                </div>
                <div class="form-group">
                    <label for="likeGoods">Domestic Value of Like Goods (₹) — Optional</label>
                    <input type="text" id="likeGoods" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">For 1.5× cap test under Rule 89(4)(C). Leave blank if no domestic comparable.</span>
                </div>
            </div>
            <div class="calc-row toggle-pair-row" id="servicesRow">
                <div class="form-group">
                    <label for="zrss">Zero-Rated Services Turnover (₹)</label>
                    <input type="text" id="zrss" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Payments received for services exported under LUT. Reconcile with FIRC/BRC.</span>
                </div>
                <div class="form-group">
                    <label for="advUnsettled">Advances for Incomplete Services (₹)</label>
                    <input type="text" id="advUnsettled" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Subtract: advances received but services not completed in the period.</span>
                </div>
            </div>

            <div class="calc-section-title liab">Total Turnover &amp; Exempt Supplies</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="totalTurnover">Total Turnover (₹)</label>
                    <input type="text" id="totalTurnover" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Aggregate turnover in State/UT per Section 2(112), incl. zero-rated &amp; domestic.</span>
                </div>
                <div class="form-group">
                    <label for="exemptSupply">Exempt Supplies (₹)</label>
                    <input type="text" id="exemptSupply" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Wholly-exempt supplies (other than zero-rated). Deducted from total to arrive at Adjusted Total Turnover.</span>
                </div>
            </div>

            <div class="calc-section-title">Net ITC (Inputs &amp; Input Services Only)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="itcInputs">ITC on Inputs (₹)</label>
                    <input type="text" id="itcInputs" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">CGST + SGST + IGST + Cess availed on goods used for export, during relevant period.</span>
                </div>
                <div class="form-group">
                    <label for="itcServices">ITC on Input Services (₹)</label>
                    <input type="text" id="itcServices" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">CGST + SGST + IGST availed on input services during relevant period.</span>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="itcCapital">ITC on Capital Goods (₹) — Excluded</label>
                    <input type="text" id="itcCapital" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Per Rule 89(4)(B) — capital goods ITC is NOT refundable under LUT route. Auto-flagged.</span>
                </div>
                <div class="form-group">
                    <label for="ledgerBalance">Electronic Credit Ledger Balance (₹)</label>
                    <input type="text" id="ledgerBalance" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Closing balance after GSTR-3B for the period (CGST + SGST + IGST aggregate). Refund cannot exceed this.</span>
                </div>
            </div>

            <div class="calc-section-title">Limitation Check (Section 54(1))</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="relevantDate">Relevant Date</label>
                    <input type="date" id="relevantDate">
                    <span class="helper">Goods: shipping bill EGM date. Services: FIRC/BRC realisation date.</span>
                </div>
                <div class="form-group">
                    <label for="filingDate">Proposed RFD-01 Filing Date</label>
                    <input type="date" id="filingDate">
                    <span class="helper">Must be within 2 years of Relevant Date. Beyond — permanently time-barred.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="calcBtn">Calculate Refund</button>
            <button type="button" class="btn-reset" id="resetBtn">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label">Refund Verdict</div>
                    <div class="verdict-headline" id="verdictHeadline">—</div>
                    <div class="verdict-sub" id="verdictSub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Refund Amount</div>
                            <div class="verdict-grid-value" id="vRefund">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Provisional (90%)</div>
                            <div class="verdict-grid-value" id="vProvisional">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Net ITC</div>
                            <div class="verdict-grid-value" id="vNetITC">—</div>
                        </div>
                    </div>
                </div>

                <div id="alertContainer"></div>

                <h3 style="font-size:16px;color:var(--primary-dark);margin:18px 0 12px;font-family:var(--font-mono);text-transform:uppercase;letter-spacing:1px;">Computation Breakdown</h3>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Zero-Rated Goods (Declared)</div>
                        <div class="summary-value" id="sZRSG">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">1.5× Cap on Goods</div>
                        <div class="summary-value" id="sCap">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">ZR Goods (After Cap)</div>
                        <div class="summary-value" id="sZRSGEffective">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Zero-Rated Services</div>
                        <div class="summary-value" id="sZRSS">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Total Zero-Rated Turnover</div>
                        <div class="summary-value" id="sZRTotal">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Adjusted Total Turnover</div>
                        <div class="summary-value" id="sAdjTT">—</div>
                    </div>
                </div>

                <div class="basis-block">
                    <div class="basis-label">Rule 89(4) Calculation — Step by Step</div>
                    <div class="basis-text" id="formulaSteps">—</div>
                </div>

                <div class="mpbf-card">
                    <h4>Refund Timeline (Section 54 &amp; 56)</h4>
                    <div class="mpbf-grid">
                        <div class="mpbf-item">
                            <div class="lbl">Provisional Refund</div>
                            <div class="val" id="vProvisional2">—</div>
                            <div class="sub">Within 7 days of RFD-02 acknowledgement [Sec 54(6)]</div>
                        </div>
                        <div class="mpbf-item">
                            <div class="lbl">Final Order (RFD-06)</div>
                            <div class="val">60 Days</div>
                            <div class="sub">From acknowledgement [Sec 54(7)]</div>
                        </div>
                        <div class="mpbf-item">
                            <div class="lbl">Interest if Delayed</div>
                            <div class="val">6% p.a.</div>
                            <div class="sub">From day 61 till payment [Sec 56]</div>
                        </div>
                        <div class="mpbf-item">
                            <div class="lbl">Time-Limit to File</div>
                            <div class="val" id="vTimeLeft">—</div>
                            <div class="sub">From Relevant Date [Sec 54(1)]</div>
                        </div>
                    </div>
                </div>

                <div class="disclosure-block">
                    <span class="dl-label">Form GST RFD-01 — Statement-3A Preview</span>
                    <table>
                        <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>(1) Turnover of Zero-Rated Goods + Services</td>
                                <td class="num" id="dZR">—</td>
                            </tr>
                            <tr>
                                <td>(2) Adjusted Total Turnover</td>
                                <td class="num" id="dATT">—</td>
                            </tr>
                            <tr>
                                <td>(3) Net ITC (Inputs + Input Services)</td>
                                <td class="num" id="dNetITC">—</td>
                            </tr>
                            <tr>
                                <td>(4) Maximum Refund Amount Claimable</td>
                                <td class="num" id="dRefund">—</td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="margin-top:10px;font-size:11px;color:rgba(224,242,241,0.65);">Enter these values in Statement-3A on Form GST RFD-01. Values auto-populate on the GST portal once you upload the Statement-3 CSV with invoice-level data.</div>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Export Refund Calculator (LUT) validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Export%20Refund%20Calculator%20%28LUT%29.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Export%20Refund%20Calculator%20%28LUT%29%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Export%20Refund%20Calculator%20%28LUT%29%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the Export Refund Calculator (LUT)</h2>
            <p>This calculator implements the precise refund computation prescribed by <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/rules/cgst_rules/active/chapter10/rule89_v1.00.html" target="_blank" rel="noopener">Rule 89(4) of the CGST Rules, 2017</a>, applicable to exporters operating under the LUT route. The tool computes maximum admissible refund of unutilised Input Tax Credit, applies the 1.5× cap on zero-rated supply of goods, validates Section 54(1) limitation, and previews the Statement-3A field values you must enter on the GST common portal in Form RFD-01.</p>

            <ol>
                <li><strong>Pick the export type.</strong> Goods only, services only, or both. The visible input rows change based on selection.</li>
                <li><strong>Enter zero-rated turnover.</strong> For goods, use the FOB value declared on the shipping bill. For services, enter payments received during the relevant period reconciled with FIRC or BRC.</li>
                <li><strong>(Optional) Domestic value of like goods.</strong> For the 1.5× cap test under Rule 89(4)(C). If your export price exceeds 1.5× the domestic value of comparable goods, the cap kicks in.</li>
                <li><strong>Enter Total Turnover and Exempt Supplies.</strong> Total turnover follows Section 2(112). Exempt supplies (other than zero-rated) are deducted to arrive at Adjusted Total Turnover.</li>
                <li><strong>Split your ITC into inputs, input services and capital goods.</strong> Only inputs and input services count for Net ITC. Capital goods ITC is excluded by the Rule 89(4)(B) definition.</li>
                <li><strong>Enter Electronic Credit Ledger balance.</strong> The closing balance after filing GSTR-3B for the period. The refund cannot exceed this balance even if the formula yields a higher number.</li>
                <li><strong>Set Relevant Date and proposed Filing Date.</strong> The calculator validates the two-year limitation under Section 54(1).</li>
                <li><strong>Click Calculate Refund.</strong> Output includes refund amount, provisional 90%, Statement-3A preview, and time-bar checks.</li>
            </ol>

            <div class="callout">
                <p><strong>CA Tip:</strong> Always run this calculator before filing RFD-01. The most frequent rejection reason in deficiency memos issued in Form RFD-03 is incorrect Net ITC — typically because exporters include capital goods ITC or Section 17(5) blocked credits. Pre-clearing the Statement-3A values reduces deficiency-memo risk to near zero.</p>
            </div>
        </section>

        <section class="content-section" id="formula">
            <h2>Rule 89(4) Refund Formula — Decoded</h2>
            <p>The maximum admissible refund of unutilised Input Tax Credit on zero-rated supplies made without payment of Integrated Tax under LUT is governed exclusively by <strong>Rule 89(4) of the CGST Rules, 2017</strong>. Section 54(3) of the CGST Act provides the parent right; Rule 89(4) prescribes the mechanical formula.</p>

            <div class="formula-box">
<span class="label">REFUND AMOUNT =</span>
&nbsp;&nbsp;(Turnover of Zero-Rated Goods + Turnover of Zero-Rated Services)
&nbsp;&nbsp;× Net ITC
&nbsp;&nbsp;÷ Adjusted Total Turnover
            </div>

            <h3>Component A — Turnover of Zero-Rated Supply of Goods</h3>
            <p>Per <strong>Rule 89(4)(C)</strong> as amended by <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/notifications/active/cgst/notfctn-16-central-tax-english-2020.pdf" target="_blank" rel="noopener">Notification No. 16/2020-Central Tax dated 23 March 2020</a>, this is the value of zero-rated supply of goods made during the relevant period without payment of tax under LUT — capped at <strong>1.5 times the value of like goods supplied domestically</strong> by the same or a similarly placed supplier, whichever is less. This cap was inserted to curb over-invoicing in fictitious refund claims and remains the most actively litigated provision in export refund disputes.</p>

            <h3>Component B — Turnover of Zero-Rated Supply of Services</h3>
            <p>Per <strong>Rule 89(4)(D)</strong>, this is computed as: payments received during the relevant period for zero-rated services, plus payments received in advance in any prior period for which the supply was completed during the relevant period, minus advances received during the relevant period for services where supply has not yet been completed. Service exporters must reconcile this with FIRC or BRC realisation, not with invoice value.</p>

            <h3>Component C — Net ITC</h3>
            <p>Per <strong>Rule 89(4)(B)</strong>, Net ITC means Input Tax Credit availed on <strong>inputs and input services only</strong> during the relevant period. Capital goods ITC is excluded by definition. Blocked credits under <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/cgst-act/chap-V.html" target="_blank" rel="noopener">Section 17(5) of the CGST Act</a> — motor vehicles, food and beverages, works contract for immovable property, club memberships and similar — are also not part of availed credit and must not be included.</p>

            <h3>Component D — Adjusted Total Turnover</h3>
            <p>Per <strong>Rule 89(4)(E)</strong> as amended by <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/notifications/active/cgst/notfctn-14-central-tax-english-2022.pdf" target="_blank" rel="noopener">Notification No. 14/2022-Central Tax dated 5 July 2022</a>, Adjusted Total Turnover is the aggregate turnover in a State or Union Territory under Section 2(112), excluding the value of exempt supplies other than zero-rated supplies, during the relevant period. The amendment was driven by the Supreme Court decision in <em>Union of India v. VKC Footsteps India Pvt Ltd</em> (2021) and was further clarified by <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/circulars/active/197-09-2023-gst.html" target="_blank" rel="noopener">CBIC Circular No. 197/09/2023-GST dated 17 July 2023</a>.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Component</th><th>Source</th><th>Definition</th></tr>
                </thead>
                <tbody>
                    <tr><td>Zero-Rated Goods Turnover</td><td>Rule 89(4)(C)</td><td>Min of declared FOB value and 1.5× domestic value of like goods</td></tr>
                    <tr><td>Zero-Rated Services Turnover</td><td>Rule 89(4)(D)</td><td>Payments received in period + completed advance receipts − advances for incomplete services</td></tr>
                    <tr><td>Net ITC</td><td>Rule 89(4)(B)</td><td>ITC availed on inputs and input services in relevant period</td></tr>
                    <tr><td>Adjusted Total Turnover</td><td>Rule 89(4)(E)</td><td>Total turnover − exempt supplies (other than zero-rated)</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="lut">
            <h2>Letter of Undertaking (LUT) — Form RFD-11</h2>
            <p>An LUT is a declaration filed in <strong>Form GST RFD-11</strong> under Rule 96A of the CGST Rules, allowing a registered exporter to make zero-rated supplies without paying Integrated Tax upfront. It is the gateway to the LUT refund route under Rule 89. Without an LUT in force, every export invoice technically becomes an IGST-payable supply, not a zero-rated supply under bond/LUT — and the refund mechanism switches to Rule 96 (the IGST-paid route).</p>

            <h3>LUT Eligibility</h3>
            <p>Any GST-registered exporter is eligible to file an LUT, except those who have been prosecuted for tax evasion of an amount exceeding ₹2.5 crore under the CGST Act, IGST Act or any earlier tax law. Such exporters must furnish a bond accompanied by a bank guarantee.</p>

            <h3>LUT Filing Process — Step by Step</h3>
            <ol>
                <li>Log in to the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST common portal</a> with valid credentials.</li>
                <li>Navigate to <strong>Services › User Services › Furnish Letter of Undertaking (LUT)</strong>.</li>
                <li>Select the financial year for which the LUT is being filed.</li>
                <li>Upload the previous financial year's LUT (optional — only if it was approved manually).</li>
                <li>Provide names, addresses and occupations of two independent witnesses.</li>
                <li>Preview, then sign with DSC (mandatory for companies and LLPs) or EVC (for proprietors and HUFs).</li>
                <li>The LUT is treated as <strong>deemed approved</strong> if the proper officer takes no action within 3 working days.</li>
                <li>Note the ARN — quote it on every export invoice.</li>
            </ol>

            <h3>LUT Validity &amp; Renewal Discipline</h3>
            <p>An LUT is valid only from <strong>1 April to 31 March</strong> of the financial year for which it is filed. Crucially, this is a calendar-bound validity — not a 12-month rolling window from the filing date. If you exported on 1 April without renewing, the export is technically without LUT cover. <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/circulars/active/125-44-2019-gst.html" target="_blank" rel="noopener">CBIC Circular 125/44/2019-GST dated 18 November 2019</a> permits ex-post-facto admission of LUT in cases of substantive compliance, but this is at the proper officer's discretion. Best practice: file the LUT for the new financial year on or before 31 March of the preceding year.</p>

            <h3>Mandatory Declaration on Export Invoice</h3>
            <p>Every export invoice must carry the declaration: <em>"Supply meant for export under LUT without payment of IGST"</em>. The LUT ARN should be referenced on the invoice and on the shipping bill. Mismatch between the export invoice declaration and the shipping bill type (LUT vs IGST-paid) is a leading cause of ICEGATE error code SB005 and refund hold-up.</p>
        </section>

        <section class="content-section" id="process">
            <h2>RFD-01 Refund Process — End to End</h2>
            <p>The LUT refund flows through Form GST RFD-01, processed manually by the proper officer. Unlike the IGST-paid route under Rule 96 (which is automatic via ICEGATE), the LUT route requires invoice-level documentation, Statement-3 reconciliation and CA certification above thresholds. The end-to-end timeline from filing to credit is typically 60 to 90 days for clean claims, longer where deficiency memos are issued.</p>

            <h3>Pre-filing Checklist</h3>
            <ul>
                <li><strong>Active LUT in force</strong> for the relevant financial year (Form RFD-11 ARN).</li>
                <li><strong>GSTR-1 and GSTR-3B filed</strong> for all months in the relevant period — the GST portal will not allow RFD-01 submission otherwise.</li>
                <li><strong>Validated bank account</strong> linked to the GSTIN — refunds are credited only to PFMS-validated accounts.</li>
                <li><strong>IEC from DGFT</strong> active and reflected on the GST portal (mandatory for goods exports).</li>
                <li><strong>Shipping bills with EGM (Export General Manifest) closure</strong> for goods, or FIRC/BRC for services.</li>
                <li><strong>Adequate balance in Electronic Credit Ledger</strong> after the period's GSTR-3B is filed.</li>
            </ul>

            <h3>Form Flow — RFD-01 to RFD-06</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Form</th><th>Purpose</th><th>Trigger</th></tr>
                </thead>
                <tbody>
                    <tr><td>RFD-01</td><td>Refund application by taxpayer</td><td>Filed within 2 years of relevant date</td></tr>
                    <tr><td>RFD-02</td><td>Acknowledgement by proper officer</td><td>Within 15 days of complete RFD-01</td></tr>
                    <tr><td>RFD-03</td><td>Deficiency memo</td><td>If documents/computation deficient</td></tr>
                    <tr><td>RFD-04</td><td>Provisional refund order — 90%</td><td>Within 7 days of RFD-02 [Section 54(6)]</td></tr>
                    <tr><td>RFD-05</td><td>Payment advice to bank</td><td>Post RFD-04/RFD-06 sanction</td></tr>
                    <tr><td>RFD-06</td><td>Final refund sanction order</td><td>Within 60 days of RFD-02 [Section 54(7)]</td></tr>
                    <tr><td>RFD-07/08</td><td>Withholding/Show cause</td><td>If recovery pending or rejection proposed</td></tr>
                </tbody>
            </table>

            <h3>Statement-3 — Invoice-Level Upload</h3>
            <p>The Statement-3 CSV uploaded with RFD-01 contains invoice-level details: GSTR-1 invoice number and date, port code, shipping bill number and date, EGM date, FOB value, taxable value, IGST/CGST/SGST/Cess paid (zero for LUT exports). The values must reconcile to the rupee with GSTR-1 Table 6A and the corresponding ICEGATE shipping bill records. Any value mismatch — even rounding — triggers system-generated errors. The portal then auto-populates Statement-3A based on Statement-3 line totals plus the user-entered Net ITC.</p>
        </section>

        <div class="body-cta">
            <h3>Need Hand-Holding on Your LUT Refund?</h3>
            <p>Our CA team handles the entire RFD-01 cycle — LUT filing, Statement-3 reconciliation, deficiency memo response, and provisional refund follow-through. Fixed fees from ₹15,000 per claim.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Export%20Refund%20Calculator%20%28LUT%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Export%20Refund%20Calculator%20%28LUT%29%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Export%20Refund%20Calculator%20%28LUT%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="errors">
            <h2>Common Computation Errors That Cause Refund Reduction</h2>
            <p>Based on practice experience, the following are the most frequent computation errors that lead to deficiency memos in Form RFD-03 or part-rejection of LUT refund claims. Avoid all five and the claim typically clears within the 60-day Section 54(7) window.</p>

            <h3>Error 1 — Including Capital Goods ITC in Net ITC</h3>
            <p>Rule 89(4)(B) is unambiguous: Net ITC is restricted to inputs and input services. Capital goods ITC must be segregated and excluded. Many exporters take the entire Electronic Credit Ledger balance as Net ITC and end up over-claiming. The proper officer reduces the refund by the capital goods component, typically with a deficiency memo. Maintain a separate ITC register tagging each invoice as Input, Input Service, or Capital Goods.</p>

            <h3>Error 2 — Including Section 17(5) Blocked Credits</h3>
            <p>ITC on motor vehicles (other than for transport of goods or specified passenger transport), food and beverages, outdoor catering, beauty treatment, health services, club memberships, life and health insurance (except statutory), works contract services for construction of immovable property, and goods/services for personal consumption — these are blocked under Section 17(5) and were never legally availed. Including them in Net ITC inflates the claim and triggers reduction.</p>

            <h3>Error 3 — Ignoring the 1.5× Cap on Goods</h3>
            <p>If your export price is materially higher than the domestic price for comparable goods, the cap kicks in. Common scenario: pharmaceutical exporters quoting USD-denominated prices that translate to INR values exceeding 1.5× the Indian retail price. Per <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/notifications/active/cgst/notfctn-16-central-tax-english-2020.pdf" target="_blank" rel="noopener">Notification 16/2020</a>, the lower of the two is used in the formula. Maintain documentary evidence of the domestic comparable price.</p>

            <h3>Error 4 — Wrong Adjusted Total Turnover Computation</h3>
            <p>Pre-Notification 14/2022, the denominator definition led to disputes — settled by VKC Footsteps and harmonised by Notification 14/2022 read with Circular 197/2023. Some exporters still use the older interpretation, leading to under-claim or over-claim. Always reconcile Adjusted Total Turnover with GSTR-3B Table 3.1 totals.</p>

            <h3>Error 5 — Refund Exceeding Electronic Credit Ledger Balance</h3>
            <p>Even if the Rule 89(4) formula produces a refund of ₹15 lakh, the system caps it at the closing Credit Ledger balance after the period's GSTR-3B is filed. If the ledger balance is ₹12 lakh, the refund is restricted to ₹12 lakh. Always verify the post-3B credit ledger before submitting RFD-01.</p>

            <div class="callout warn">
                <p><strong>Practitioner Note:</strong> The CA certificate under clause (m) of Rule 89(2) is mandatory only where the refund claim exceeds ₹2 lakh. For smaller claims, a self-declaration under clause (l) suffices. The CA certificate must specifically confirm that the incidence of tax has not been passed on to any other person.</p>
            </div>
        </section>

        <section class="content-section" id="timeline">
            <h2>Refund Timeline &amp; Interest Entitlement (Sections 54 &amp; 56)</h2>
            <p>The CGST Act prescribes a layered timeline that protects exporters from working-capital lock-up. Each stage has a statutory cap, and breach of the 60-day final order window triggers automatic interest under Section 56 — a right that does not require separate application.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Stage</th><th>Period</th><th>Statutory Basis</th></tr>
                </thead>
                <tbody>
                    <tr><td>RFD-01 filing window</td><td>2 years from relevant date</td><td>Section 54(1)</td></tr>
                    <tr><td>Acknowledgement (RFD-02)</td><td>15 days from complete application</td><td>Rule 90(2)</td></tr>
                    <tr><td>Deficiency memo (RFD-03)</td><td>15 days if defective</td><td>Rule 90(3)</td></tr>
                    <tr><td>Provisional refund — 90% (RFD-04)</td><td>7 days from RFD-02</td><td>Section 54(6) &amp; Rule 91</td></tr>
                    <tr><td>Final order (RFD-06)</td><td>60 days from RFD-02</td><td>Section 54(7)</td></tr>
                    <tr><td>Interest on delay</td><td>6% p.a. from day 61 to payment</td><td>Section 56</td></tr>
                    <tr><td>Interest on appeal-stage refund</td><td>9% p.a.</td><td>Proviso to Section 56</td></tr>
                </tbody>
            </table>

            <h3>The Section 56 Interest Right</h3>
            <p>Section 56 of the CGST Act creates an automatic 6% per annum interest entitlement on any refund not paid within 60 days of the application acknowledgement. The exporter does not need to file a separate claim — the interest accrues by operation of law and is paid along with the principal refund. If the matter goes to appeal and the refund is sanctioned by an appellate authority, the interest rate increases to 9% per annum. Maintain the ARN, RFD-02 date and bank credit date — these are the only three data points needed to compute the interest entitlement.</p>

            <h3>Relevant Date — Goods vs Services</h3>
            <p>Per <strong>Explanation 2 to Section 54</strong>, the relevant date for the two-year limitation is:</p>
            <ul>
                <li><strong>Goods exported by sea or air:</strong> the date on which the ship or aircraft leaves India.</li>
                <li><strong>Goods exported by post:</strong> the date of dispatch by the post office.</li>
                <li><strong>Goods exported by land:</strong> the date on which the goods pass the frontier.</li>
                <li><strong>Services where supply was completed before payment:</strong> the date of receipt of payment in convertible foreign exchange (FIRC/BRC date).</li>
                <li><strong>Services where payment was received before supply:</strong> the date of issue of invoice.</li>
            </ul>
        </section>

        <section class="content-section" id="oct2024">
            <h2>October 2024 Update — Notification 20/2024</h2>
            <p>The 54th GST Council meeting in September 2024 approved a substantial simplification of export refund rules. <strong>Notification No. 20/2024-Central Tax</strong> effective <strong>8 October 2024</strong> implemented the changes by omitting three problematic provisions:</p>

            <ul>
                <li><strong>Rule 96(10)</strong> — Bar on refund of IGST paid on exports if the exporter or supplier had availed certain concessional benefits (advance authorisation, EPCG, deemed export benefits). The omission removes a bar that had triggered substantial litigation since 2018.</li>
                <li><strong>Rule 89(4A)</strong> — Special formula for refund where supplies were received under deemed export benefits. Now subsumed within the standard Rule 89(4) formula.</li>
                <li><strong>Rule 89(4B)</strong> — Special formula for refund where supplier had availed advance authorisation or EPCG benefits. Also subsumed within Rule 89(4).</li>
            </ul>

            <h3>What This Means for Exporters</h3>
            <p>Pre-October 2024, an exporter receiving inputs from a domestic supplier who had used advance authorisation could not claim the standard ITC refund — the law required a special carve-out computation. Post-omission, all exports under LUT follow the uniform Rule 89(4) formula irrespective of the upstream benefit chain. The change is genuinely procedure-simplifying and reduces compliance load for the exporter community materially.</p>

            <div class="callout">
                <p><strong>Transitional Note:</strong> For periods before 8 October 2024, the omitted rules continue to apply. Exporters with pending refund claims for FY 2023-24 and earlier must still apply the 89(4A)/89(4B) carve-outs where relevant. The omission is prospective and does not alter the law applicable to past tax periods.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions on Export Refund (LUT Route)</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the formula to calculate GST export refund under LUT?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Refund Amount equals the sum of Turnover of Zero-Rated Supply of Goods and Turnover of Zero-Rated Supply of Services, multiplied by Net ITC and divided by Adjusted Total Turnover. This formula is prescribed by Rule 89(4) of the CGST Rules, 2017. It applies when an exporter makes zero-rated supplies under a Letter of Undertaking without paying Integrated Tax and seeks refund of accumulated Input Tax Credit. The admissible refund cannot exceed the Electronic Credit Ledger balance.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Net ITC under Rule 89(4) of the CGST Rules?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Net ITC means Input Tax Credit availed on inputs and input services during the relevant period for which refund is being claimed. Critically, ITC on capital goods is excluded from Net ITC for refund purposes under the LUT route. Blocked credits under Section 17(5) such as motor vehicles, food and beverages, and works contract for immovable property must also be excluded. Including capital goods or blocked credits is the most common cause of a deficiency memo in Form RFD-03.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the 1.5 times cap on zero-rated supply of goods?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Notification 16/2020-Central Tax dated 23 March 2020 amended Rule 89(4)(C) to cap the value of zero-rated supply of goods at 1.5 times the value of like goods supplied domestically by the same or a similarly placed supplier, whichever is less. The cap was inserted to prevent over-invoicing in fictitious refund claims. If your export invoice value exceeds 1.5 times the domestic value of comparable goods, the refund is computed on the capped figure rather than the declared export value.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Adjusted Total Turnover and how is it computed?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Adjusted Total Turnover is the aggregate turnover in a State or Union Territory under Section 2(112), excluding the value of exempt supplies other than zero-rated supplies during the relevant period. The definition was amended by Notification 14/2022 dated 5 July 2022, aligned with the Supreme Court ruling in Union of India versus VKC Footsteps. CBIC Circular 197/2023 dated 17 July 2023 clarified the methodology. The figure is the denominator in the Rule 89(4) formula and must reconcile with GSTR-3B.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How long do I have to file the LUT export refund claim?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54(1) of the CGST Act prescribes a two-year limitation from the relevant date for filing the refund application in Form GST RFD-01. For export of goods, the relevant date is the date the goods leave India by ship, aircraft, post or land per Explanation 2 to Section 54. For export of services, it is the date of receipt of payment in convertible foreign exchange evidenced by FIRC or BRC. Beyond two years, the claim is permanently time-barred.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How long does the GST department take to sanction my refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54(7) of the CGST Act requires the proper officer to issue the refund sanction order in Form RFD-06 within sixty days from the date of acknowledgement in Form RFD-02. Section 54(6) provides for a provisional refund of 90 per cent within seven days of acknowledgement for zero-rated supplies. If the refund is not sanctioned within sixty days, Section 56 entitles the applicant to interest at six per cent per annum from day 61 until actual payment.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is a Letter of Undertaking and how is it filed?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A Letter of Undertaking is a declaration filed in Form GST RFD-11 under Rule 96A of the CGST Rules, allowing a registered exporter to make zero-rated supplies without paying Integrated Tax upfront. It is filed online on the GST portal under Services, User Services. The LUT is valid only from 1 April to 31 March of the financial year and must be renewed annually. Exporters prosecuted for tax evasion exceeding 2.5 crore must furnish a bond with bank guarantee instead.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I file an LUT refund without an LUT in force?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Strictly no. If you export without an LUT in force, the supply is technically an Integrated Tax payable supply, not a zero-rated supply under bond or LUT. CBIC Circular 125/2019 dated 18 November 2019 permits ex-post-facto admission of LUT in cases of substantive compliance, at the proper officer's discretion. The safer practice is to file the LUT in Form RFD-11 on or before 1 April every financial year, since LUT validity runs only from 1 April to 31 March.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What changed in October 2024 regarding LUT export refunds?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Notification 20/2024-Central Tax effective 8 October 2024, issued post the 54th GST Council meeting, omitted Rule 96(10) along with Rule 89(4A) and Rule 89(4B) of the CGST Rules. The omission removed the bar on refund of unutilised ITC where the supplier had availed concessional benefits such as advance authorisation or EPCG. The change provides uniform treatment of exports made with payment of Integrated Tax and exports under LUT, removing significant compliance burden and litigation around the deemed export benefits chain.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is the export turnover of services computed under Rule 89(4)?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Rule 89(4)(D) computes Turnover of Zero-Rated Supply of Services as payments received during the relevant period for zero-rated services, plus payments received in advance in any prior period for which supply was completed in the relevant period, minus advances received during the relevant period for services not yet completed. Service exporters must reconcile this with FIRC or BRC realisation dates and cannot use mere invoice value. This is markedly different from goods exporters where shipping bill value is used.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What documents are required for an LUT refund claim?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For the LUT refund under Form GST RFD-01 with Statement-3, you need a copy of the LUT in Form RFD-11, Statement-3 listing export invoices with shipping bill numbers and dates, GSTR-1 Table 6A and GSTR-3B for the period, copies of shipping bills with EGM for goods, FIRC or BRC for services, declaration that incidence of tax has not been passed on, validated bank account on the GST portal, and a CA certificate where refund exceeds two lakh rupees.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between LUT route and IGST-paid route refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under the LUT route per Rule 89, the exporter does not pay Integrated Tax on exports and claims refund of accumulated unutilised Input Tax Credit through Form RFD-01 with Statement-3, processed manually by the proper officer. Under the IGST-paid route per Rule 96, the exporter charges IGST and the refund is automatic through ICEGATE matching of shipping bill and GSTR-1 data. The LUT route preserves working capital but takes longer; the IGST route is faster but blocks cash.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I claim ITC on capital goods through the LUT export refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The definition of Net ITC in Rule 89(4)(B) explicitly restricts the credit to inputs and input services availed during the relevant period. Capital goods Input Tax Credit is not refundable under the LUT route and remains in the Electronic Credit Ledger for utilisation against domestic outward tax. This is a key disadvantage compared to the IGST-paid route under Rule 96, where the refund of IGST paid effectively liquidates capital goods ITC indirectly through the credit utilisation chain.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is provisional refund and how is the 90 per cent computed?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54(6) read with Rule 91 mandates that 90 per cent of the refund claimed for zero-rated supplies be sanctioned provisionally in Form RFD-04 within seven days of acknowledgement in Form RFD-02. The provisional refund is granted without detailed scrutiny and is the working capital relief mechanism for exporters. The balance 10 per cent is sanctioned after detailed verification within the sixty-day final order window. Provisional sanction does not preclude later adjustment if scrutiny finds issues.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What happens if my refund exceeds my Electronic Credit Ledger balance?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The refund admissible cannot exceed the closing balance in the Electronic Credit Ledger at the end of the tax period for which refund is claimed, after GSTR-3B is filed. Even if the Rule 89(4) formula produces a higher number, the system caps the refund at the ledger balance. The applicant must therefore file GSTR-3B before initiating RFD-01, and reconcile any inter-period transfer between IGST, CGST and SGST balances before submission to avoid mismatches.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>LUT Refund Stuck or Unsure?</h3>
            <p>Get CA-led RFD-01 preparation, Statement-3 reconciliation, deficiency memo response and provisional refund follow-through — fixed-fee from ₹15,000 per claim.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Export%20Refund%20Calculator%20%28LUT%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Export%20Refund%20Calculator%20%28LUT%29%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Export%20Refund%20Calculator%20%28LUT%29.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/gst-returns-for-sez" class="sidebar-link">GST Returns for SEZ<span class="arrow">→</span></a>
            <a href="/iec-registration" class="sidebar-link">IEC Registration<span class="arrow">→</span></a>
            <a href="/iec-renewal" class="sidebar-link">IEC Renewal<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee &amp; Interest<span class="arrow">→</span></a>
            <a href="/tools/gstr-2a-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation<span class="arrow">→</span></a>
            <a href="/tools/rcm-calculator" class="sidebar-link">RCM Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-rate-finder" class="sidebar-link">GST Rate Finder (HSN/SAC)<span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/import-export-code-iec-registration-complete-guide-for-indian-businesses" class="sidebar-link">IEC Registration Complete Guide<span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements<span class="arrow">→</span></a>
            <a href="/blog/income-tax-refund-issue-understanding-refund-withheld-and-adjustment-cases" class="sidebar-link">Refund Withheld &amp; Adjustments<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function() {
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    // ---------- Helpers ----------
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
            if (typeof onChange === 'function') onChange(btn.dataset.value);
        });
    }
    function getActive(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }

    function fmtINR(n) {
        if (n === undefined || n === null || isNaN(n) || !isFinite(n)) return '₹0';
        const sign = n < 0 ? '-' : '';
        const abs = Math.abs(Math.round(n));
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function num(id) {
        const el = document.getElementById(id);
        if (!el) return 0;
        const v = parseINR(el.value);
        return isNaN(v) ? 0 : v;
    }
    function getDate(id) {
        const el = document.getElementById(id);
        if (!el || !el.value) return null;
        const d = new Date(el.value);
        return isNaN(d.getTime()) ? null : d;
    }
    function daysBetween(a, b) {
        const ms = b.getTime() - a.getTime();
        return Math.round(ms / (1000 * 60 * 60 * 24));
    }

    // ---------- Toggle behaviour: show/hide goods/services rows ----------
    function applyExportTypeUI(type) {
        const goodsRow = document.getElementById('goodsRow');
        const servicesRow = document.getElementById('servicesRow');
        if (type === 'goods') {
            goodsRow.style.display = '';
            servicesRow.classList.remove('visible');
            servicesRow.style.display = 'none';
        } else if (type === 'services') {
            goodsRow.style.display = 'none';
            servicesRow.classList.add('visible');
            servicesRow.style.display = 'grid';
        } else { // both
            goodsRow.style.display = '';
            servicesRow.classList.add('visible');
            servicesRow.style.display = 'grid';
        }
    }
    setupToggleGroup('exportTypeGroup', applyExportTypeUI);
    applyExportTypeUI('goods');

    // ---------- Validation ----------
    function validate(inp, type) {
        if (type === 'goods' && inp.zrsg <= 0) {
            return 'Please enter Zero-Rated Goods Turnover greater than zero.';
        }
        if (type === 'services' && inp.zrss <= 0) {
            return 'Please enter Zero-Rated Services Turnover greater than zero.';
        }
        if (type === 'both' && inp.zrsg <= 0 && inp.zrss <= 0) {
            return 'Please enter at least one of Goods or Services turnover.';
        }
        if (inp.totalTurnover <= 0) {
            return 'Please enter Total Turnover greater than zero.';
        }
        if (inp.totalTurnover < (inp.zrsg + inp.zrss)) {
            return 'Total Turnover cannot be less than the sum of Zero-Rated Goods and Services turnover.';
        }
        if ((inp.itcInputs + inp.itcServices) <= 0) {
            return 'Please enter ITC on Inputs or Input Services greater than zero.';
        }
        return null;
    }

    // ---------- Compute ----------
    function compute(inp, type) {
        // Zero-rated turnover: services = received - advances unsettled
        const zrssNet = type === 'goods' ? 0 : Math.max(0, inp.zrss - inp.advUnsettled);

        // 1.5x cap on goods (Rule 89(4)(C) post Notif 16/2020)
        let zrsgEffective = type === 'services' ? 0 : inp.zrsg;
        let capApplied = false;
        let capValue = null;
        if (type !== 'services' && inp.likeGoods > 0) {
            capValue = 1.5 * inp.likeGoods;
            if (zrsgEffective > capValue) {
                zrsgEffective = capValue;
                capApplied = true;
            }
        }

        const zrTotal = zrsgEffective + zrssNet;

        // Adjusted Total Turnover = Total Turnover − Exempt (other than zero-rated)
        const adjTT = Math.max(0, inp.totalTurnover - inp.exemptSupply);

        // Net ITC = inputs + input services (capital goods explicitly excluded)
        const netITC = inp.itcInputs + inp.itcServices;

        // Rule 89(4) refund formula
        let refund = 0;
        if (adjTT > 0) {
            refund = (zrTotal * netITC) / adjTT;
        }

        // Cap at Net ITC (formula already mathematically bounded since ZR ≤ AdjTT, but defensively)
        if (refund > netITC) refund = netITC;

        // Cap at Electronic Credit Ledger balance
        let ledgerCapped = false;
        if (inp.ledgerBalance > 0 && refund > inp.ledgerBalance) {
            refund = inp.ledgerBalance;
            ledgerCapped = true;
        }

        const provisional = 0.9 * refund;

        // Time-bar check
        let daysToFile = null, withinLimit = null, daysOverdue = null;
        if (inp.relevantDate && inp.filingDate) {
            const limitDate = new Date(inp.relevantDate.getTime());
            limitDate.setFullYear(limitDate.getFullYear() + 2);
            const totalDays = daysBetween(inp.relevantDate, limitDate);
            const elapsed = daysBetween(inp.relevantDate, inp.filingDate);
            daysToFile = totalDays - elapsed;
            withinLimit = inp.filingDate <= limitDate;
            if (!withinLimit) daysOverdue = -daysToFile;
        }

        return {
            type, zrsgEffective, zrssNet, zrTotal, adjTT, netITC, refund, provisional,
            capApplied, capValue, ledgerCapped, daysToFile, withinLimit, daysOverdue
        };
    }

    // ---------- Verdict ----------
    function getVerdict(r, inp) {
        if (r.withinLimit === false) {
            return { headline: 'Time-Barred Under Section 54(1)', sub: 'Filing date is beyond 2 years from relevant date. Refund cannot be claimed.', cls: 'red' };
        }
        if (r.refund <= 0) {
            return { headline: 'No Refund Admissible', sub: 'Either Net ITC is zero or Adjusted Total Turnover is zero. Verify GSTR-3B and ITC ledger.', cls: 'red' };
        }
        if (r.ledgerCapped) {
            return { headline: 'Refund Capped at Credit Ledger Balance', sub: 'Formula yielded a higher amount but the refund is capped at the Electronic Credit Ledger balance.', cls: 'amber' };
        }
        if (r.capApplied) {
            return { headline: 'Refund Computed with 1.5× Cap Applied', sub: 'The 1.5× domestic-value cap under Rule 89(4)(C) applied to your goods turnover. Verify domestic comparable price documentation.', cls: 'amber' };
        }
        return { headline: 'Refund Eligible — Ready to File RFD-01', sub: 'No formula-level red flags. Proceed with Statement-3 preparation and RFD-01 submission on the GST portal.', cls: 'verdict' };
    }

    // ---------- Alerts ----------
    function buildAlerts(r, inp) {
        const alerts = [];

        if (r.withinLimit === false && r.daysOverdue !== null) {
            alerts.push({
                cls: 'danger',
                html: '<strong>✗ Time-barred under Section 54(1).</strong> Your proposed filing date is ' + r.daysOverdue + ' days past the 2-year limitation from the relevant date. The claim is permanently lost. No procedural remedy can revive a Section 54(1) time-bar.'
            });
        } else if (r.daysToFile !== null && r.daysToFile <= 90) {
            alerts.push({
                cls: 'warn',
                html: '<strong>⚠ Limitation expiring soon.</strong> Only ' + r.daysToFile + ' days remain to file under Section 54(1). File RFD-01 immediately to preserve the claim.'
            });
        } else if (r.daysToFile !== null && r.daysToFile <= 180) {
            alerts.push({
                cls: 'info',
                html: '<strong>ℹ Limitation status.</strong> ' + r.daysToFile + ' days remain to file under Section 54(1). Plan the RFD-01 filing well before expiry.'
            });
        }

        if (r.capApplied && r.capValue !== null) {
            alerts.push({
                cls: 'warn',
                html: '<strong>⚠ 1.5× cap applied to goods.</strong> Declared goods turnover exceeded 1.5× the domestic value of like goods (₹' + Math.round(r.capValue).toLocaleString('en-IN') + '). Refund is computed on the capped figure under Rule 89(4)(C). Maintain documentary evidence of the domestic comparable price.'
            });
        }

        if (inp.itcCapital > 0) {
            alerts.push({
                cls: 'danger',
                html: '<strong>✗ Capital goods ITC excluded.</strong> ITC of ' + fmtINR(inp.itcCapital) + ' on capital goods is NOT refundable under LUT route per Rule 89(4)(B). Excluded from Net ITC. This credit remains in your Electronic Credit Ledger for utilisation against domestic outward tax.'
            });
        }

        if (r.ledgerCapped) {
            alerts.push({
                cls: 'warn',
                html: '<strong>⚠ Refund capped at Credit Ledger.</strong> Rule 89(4) formula yielded a higher figure but the refund cannot exceed your Electronic Credit Ledger balance of ' + fmtINR(inp.ledgerBalance) + ' after GSTR-3B filing for the period.'
            });
        }

        if (inp.exemptSupply > 0) {
            const exemptShare = (inp.exemptSupply / inp.totalTurnover) * 100;
            if (exemptShare > 5) {
                alerts.push({
                    cls: 'info',
                    html: '<strong>ℹ Exempt supplies present.</strong> Exempt supplies form ' + exemptShare.toFixed(1) + '% of Total Turnover. Excluded from Adjusted Total Turnover per Rule 89(4)(E) (post Notification 14/2022). Verify Section 17(2) ITC reversal has been done in GSTR-3B Table 4(B)(1) before claiming refund.'
                });
            }
        }

        if (r.netITC > 0 && r.refund > 0) {
            const utilization = (r.refund / r.netITC) * 100;
            if (utilization < 50 && r.adjTT > 0) {
                const exportShare = (r.zrTotal / r.adjTT) * 100;
                alerts.push({
                    cls: 'info',
                    html: '<strong>ℹ Export share: ' + exportShare.toFixed(1) + '% of Adjusted Total Turnover.</strong> Only ' + utilization.toFixed(1) + '% of Net ITC is being refunded — domestic outward tax is consuming the rest. Verify if domestic supplies are correctly tagged.'
                });
            }
        }

        return alerts;
    }

    // ---------- Render ----------
    function render(r, inp) {
        const verdict = getVerdict(r, inp);
        const card = document.getElementById('verdictCard');
        card.classList.remove('amber', 'red', 'blue');
        if (verdict.cls === 'amber') card.classList.add('amber');
        else if (verdict.cls === 'red') card.classList.add('red');
        else if (verdict.cls === 'blue') card.classList.add('blue');

        document.getElementById('verdictHeadline').textContent = verdict.headline;
        document.getElementById('verdictSub').textContent = verdict.sub;
        document.getElementById('vRefund').textContent = fmtINR(r.refund);
        document.getElementById('vProvisional').textContent = fmtINR(r.provisional);
        document.getElementById('vNetITC').textContent = fmtINR(r.netITC);
        document.getElementById('vProvisional2').textContent = fmtINR(r.provisional);
        document.getElementById('vTimeLeft').textContent = (r.daysToFile !== null) ? (r.daysToFile >= 0 ? r.daysToFile + ' days' : 'EXPIRED') : '—';

        // Summary cards
        document.getElementById('sZRSG').textContent = fmtINR(inp.zrsg);
        document.getElementById('sCap').textContent = (r.capValue !== null) ? fmtINR(r.capValue) : 'N/A';
        document.getElementById('sZRSGEffective').textContent = fmtINR(r.zrsgEffective);
        document.getElementById('sZRSS').textContent = fmtINR(r.zrssNet);
        document.getElementById('sZRTotal').textContent = fmtINR(r.zrTotal);
        document.getElementById('sAdjTT').textContent = fmtINR(r.adjTT);

        // Formula steps narrative
        const stepHtml = [
            '<strong>Step 1.</strong> Zero-Rated Goods Turnover (effective) = ' + fmtINR(r.zrsgEffective) + (r.capApplied ? ' <em>(after 1.5× cap)</em>' : '') + '<br>',
            '<strong>Step 2.</strong> Zero-Rated Services Turnover (net) = ' + fmtINR(r.zrssNet) + '<br>',
            '<strong>Step 3.</strong> Total Zero-Rated Turnover = ' + fmtINR(r.zrTotal) + '<br>',
            '<strong>Step 4.</strong> Adjusted Total Turnover = Total Turnover − Exempt Supplies = ' + fmtINR(inp.totalTurnover) + ' − ' + fmtINR(inp.exemptSupply) + ' = ' + fmtINR(r.adjTT) + '<br>',
            '<strong>Step 5.</strong> Net ITC = Inputs + Input Services = ' + fmtINR(inp.itcInputs) + ' + ' + fmtINR(inp.itcServices) + ' = ' + fmtINR(r.netITC) + '<br>',
            '<strong>Step 6.</strong> Refund = (' + fmtINR(r.zrTotal) + ' × ' + fmtINR(r.netITC) + ') ÷ ' + fmtINR(r.adjTT) + ' = <strong>' + fmtINR(r.refund) + '</strong>'
        ].join('');
        document.getElementById('formulaSteps').innerHTML = stepHtml;

        // Alerts
        const alerts = buildAlerts(r, inp);
        const ac = document.getElementById('alertContainer');
        ac.innerHTML = '';
        alerts.forEach(a => {
            const div = document.createElement('div');
            div.className = 'info-banner ' + a.cls;
            div.innerHTML = a.html;
            ac.appendChild(div);
        });

        // Statement-3A preview
        document.getElementById('dZR').textContent = fmtINR(r.zrTotal);
        document.getElementById('dATT').textContent = fmtINR(r.adjTT);
        document.getElementById('dNetITC').textContent = fmtINR(r.netITC);
        document.getElementById('dRefund').textContent = fmtINR(r.refund);

        document.getElementById('resultSection').classList.add('visible');
        setTimeout(() => {
            document.getElementById('resultSection').scrollIntoView({behavior: 'smooth', block: 'start'});
        }, 100);
    }

    // ---------- Calculate handler ----------
    function handleCalculate() {
        const type = getActive('exportTypeGroup') || 'goods';
        const inp = {
            zrsg: num('zrsg'),
            likeGoods: num('likeGoods'),
            zrss: num('zrss'),
            advUnsettled: num('advUnsettled'),
            totalTurnover: num('totalTurnover'),
            exemptSupply: num('exemptSupply'),
            itcInputs: num('itcInputs'),
            itcServices: num('itcServices'),
            itcCapital: num('itcCapital'),
            ledgerBalance: num('ledgerBalance'),
            relevantDate: getDate('relevantDate'),
            filingDate: getDate('filingDate')
        };

        const error = validate(inp, type);
        if (error) {
            alert(error);
            return;
        }

        const r = compute(inp, type);
        render(r, inp);
    }

    document.getElementById('calcBtn').addEventListener('click', handleCalculate);

    // Calculate on Enter key in inputs
    document.querySelectorAll('.calc-card input').forEach(el => {
        el.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                handleCalculate();
            }
        });
    });

    // ---------- Reset ----------
    document.getElementById('resetBtn').addEventListener('click', function() {
        document.querySelectorAll('.calc-card input').forEach(el => { el.value = ''; });
        document.getElementById('resultSection').classList.remove('visible');
        // Reset toggle to goods only
        const tg = document.getElementById('exportTypeGroup');
        tg.querySelectorAll('.toggle-btn').forEach(b => {
            b.classList.remove('active');
            b.setAttribute('aria-selected', 'false');
        });
        const first = tg.querySelector('.toggle-btn[data-value="goods"]');
        first.classList.add('active');
        first.setAttribute('aria-selected', 'true');
        applyExportTypeUI('goods');
        window.scrollTo({top: 0, behavior: 'smooth'});
    });

    // ---------- FAQ accordion ----------
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', function() {
            const item = this.closest('.faq-item');
            item.classList.toggle('open');
            const expanded = item.classList.contains('open');
            this.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        });
    });

    // ---------- TOC active link ----------
    const tocLinks = document.querySelectorAll('.toc-nav a');
    const sections = Array.from(tocLinks).map(a => {
        const id = a.getAttribute('href').replace('#', '');
        return { id, link: a, el: document.getElementById(id) };
    }).filter(s => s.el);

    function updateActiveTOC() {
        const scrollY = window.scrollY + 120;
        let active = sections[0];
        for (const s of sections) {
            if (s.el.offsetTop <= scrollY) active = s;
        }
        tocLinks.forEach(l => l.classList.remove('active'));
        if (active && active.link) active.link.classList.add('active');
    }
    window.addEventListener('scroll', updateActiveTOC, {passive: true});
    updateActiveTOC();

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
