@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>IGST Export Refund Calculator | Rule 96 GST Refund</title>
    <meta name="description" content="IGST export refund calculator under Rule 96: verify shipping bill eligibility, GSTR-1 vs 3B match, SB error codes, drawback conflict and 60-day timeline. Free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/igst-export-refund-calculator/">
    <meta property="og:title" content="IGST Export Refund Calculator — Rule 96 GST Refund 2026">
    <meta property="og:description" content="Verify Rule 96 IGST refund eligibility, reconcile GSTR-1 Table 6A vs GSTR-3B Table 3.1(b), decode SB error codes, check drawback conflict and Section 56 interest. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/igst-export-refund-calculator">
    <meta property="og:image" content="/tools/og/igst-export-refund-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IGST Export Refund Calculator — Rule 96 GST Refund 2026">
    <meta name="twitter:description" content="Rule 96 IGST refund eligibility check, GSTR-1 vs 3B reconciliation, SB error code decoder, drawback conflict diagnosis, 60-day timeline. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/igst-export-refund-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "IGST Export Refund Calculator (Rule 96)",
      "description": "IGST Export Refund Calculator under Rule 96 of the Central Goods and Services Tax Rules, 2017 verifies the admissibility of refund of Integrated Tax paid on goods exported out of India. The tool reconciles the Integrated Tax declared in Table 6A of Form GSTR-1 against the Integrated Tax paid in Table 3.1(b) of Form GSTR-3B and confirms that the shipping bill data filed on ICEGATE matches the GST returns at the invoice level. The calculator decodes the standard SB-series response codes including SB000 indicating successful validation, SB001 indicating a shipping bill number date or port code mismatch, SB002 indicating that the Export General Manifest has not been filed, SB003 indicating a Goods and Services Tax Identification Number mismatch, SB005 indicating an invoice number mismatch and SB006 indicating that the gateway Export General Manifest has not been filed for shipments through Inland Container Depots. The tool flags drawback conflict where the exporter has availed the higher composite rate of duty drawback that includes the Central Goods and Services Tax, State Goods and Services Tax or Integrated Goods and Services Tax component. The tool reflects the omission of Rule 96(10) of the CGST Rules with effect from 8 October 2024 vide Notification No. 20/2024-Central Tax following the recommendation of the 54th Goods and Services Tax Council, restoring the right of refund where the exporter or supplier had availed Advance Authorisation, Export Promotion Capital Goods Authorisation or supplies under the 0.1 per cent concessional rate. The calculator computes the two-year limitation under Section 54(1) of the CGST Act from the relevant date defined in Explanation (2)(a) which is the date of the shipping bill, and the entitlement to interest at six per cent per annum under Section 56 if the refund is not paid within sixty days of acknowledgement. The Letter of Undertaking route under Rule 89(4) of the CGST Rules is computed by a separate tool.",
      "url": "/tools/igst-export-refund-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "IGST Export Refund Calculator", "item": "/tools/igst-export-refund-calculator"}
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
          "name": "What is the IGST refund route under Rule 96 and how does it differ from the LUT route?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Rule 96, the exporter pays Integrated Tax on the export invoice and the shipping bill itself becomes the refund application once the EGM and a valid GSTR-3B are filed. ICEGATE processes the refund automatically without Form RFD-01 and PFMS credits the bank account. The LUT route under Rule 89(4) needs manual RFD-01 filing and refunds unutilised ITC. The IGST route is faster but blocks working capital."
          }
        },
        {
          "@type": "Question",
          "name": "What conditions must be met for ICEGATE to process my IGST refund automatically?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three conditions must be cumulatively satisfied for the GSTN to transmit data to ICEGATE. First, both Form GSTR-1 with Table 6A and Form GSTR-3B must be filed for the relevant tax period. Second, the Integrated Tax declared in Table 3.1(b) of GSTR-3B must be equal to or greater than the Integrated Tax declared in Table 6A of GSTR-1. Third, the invoice details in the shipping bill at ICEGATE must match the invoice details transmitted from GSTR-1, with no missing invoices."
          }
        },
        {
          "@type": "Question",
          "name": "What does SB000 response code mean and when will my refund be credited?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SB000 is the success code indicating that the shipping bill has been successfully validated against the GST returns and the refund is eligible for sanction. The customs officer in CLK role generates the temporary IGST refund scroll, approved by AC or DC. The Public Financial Management System credits the refund to the bank account validated on ICEGATE, typically within seven to fifteen days of scroll generation."
          }
        },
        {
          "@type": "Question",
          "name": "What does the SB005 error mean and how do I resolve it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SB005 indicates that the invoice number declared in the shipping bill does not match the invoice number declared in Table 6A of Form GSTR-1, the most common cause of refund rejection. The error typically arises from typographical mistakes or use of separate invoices for GST and Customs. Resolution is through the Officer Interface mechanism under Circular 5/2018-Customs read with Circular 5/2021-Customs, where the jurisdictional Customs officer manually validates and approves the refund based on documentary evidence."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim IGST refund if I have availed Duty Drawback on my exports?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but only where the lower or all-industry rate of drawback has been claimed, which represents only the Basic Customs Duty component. If the higher composite rate of drawback has been availed which subsumes the Central Goods and Services Tax, State Goods and Services Tax or Integrated Goods and Services Tax components, the IGST refund is not admissible since this would amount to double benefit. The shipping bill drawback declaration must reflect the lower rate."
          }
        },
        {
          "@type": "Question",
          "name": "What was Rule 96(10) of the CGST Rules and is it still applicable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 96(10) restricted IGST refund where the exporter or its supplier had availed concessional benefits like Advance Authorisation, EPCG, EOU exemption or the 0.1 per cent merchant export rate. The rule was omitted with effect from 8 October 2024 by Notification 20/2024-Central Tax following the 54th GST Council recommendation. The Gujarat and Calcutta High Courts have held the omission applies even to pending proceedings, providing relief from recovery notices."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time limit for claiming IGST refund under Rule 96?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(1) prescribes a two-year limitation from the relevant date for filing a refund claim. For exports of goods on payment of IGST, the relevant date defined in Explanation (2)(a) is the date of the shipping bill. Since the SB itself is the deemed application under Rule 96, limitation rarely binds, but GSTR-1 and GSTR-3B for the period must be filed within two years to enable ICEGATE transmission."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my IGST in GSTR-3B Table 3.1(b) is less than IGST in GSTR-1 Table 6A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTN will not transmit the data to ICEGATE if the Integrated Tax paid in Table 3.1(b) of GSTR-3B is less than the Integrated Tax declared in Table 6A of GSTR-1, because this signals incomplete payment of tax on zero-rated supplies. The exporter must rectify the shortfall by paying differential IGST through DRC-03 with applicable interest under Section 50 of the CGST Act. After payment, the data will be re-transmitted in the next cycle and the refund processed automatically."
          }
        },
        {
          "@type": "Question",
          "name": "What is SB006 error and how is it resolved for ICD shipments?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SB006 indicates the gateway Export General Manifest has not been filed electronically or has filing errors, common for shipments routed through Inland Container Depots. The gateway port custodian or shipping line must file the gateway EGM through ICEGATE referencing the ICD shipping bill. Until filed and matched, the refund stays stuck. Exporters should follow up with their CHA and shipping line and escalate to the gateway AC if delayed."
          }
        },
        {
          "@type": "Question",
          "name": "Is provisional refund of 90 per cent applicable under the IGST refund route?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The provisional refund framework under Section 54(6) read with Rule 91 is conceptually applicable to zero-rated supplies. However, in practice the IGST refund route under Rule 96 is fully automated through ICEGATE and the entire amount is sanctioned in one go through the IGST scroll, without a separate 90 per cent provisional plus 10 per cent final split. Provisional refund is more relevant for the LUT route under Rule 89(4)."
          }
        },
        {
          "@type": "Question",
          "name": "How is the IGST refund amount computed under Rule 96?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Rule 96 the IGST refund amount equals the IGST actually paid on the export invoice and declared in Table 6A of GSTR-1, capped at the IGST paid through Table 3.1(b) of GSTR-3B for that period. There is no Rule 89(4) formula or Adjusted Total Turnover computation. ICEGATE matches each invoice on number, IGST amount, taxable value and port code, then credits the matched amount to the validated bank account."
          }
        },
        {
          "@type": "Question",
          "name": "What is SB003 error and how is it different from SB005?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SB003 indicates a Goods and Services Tax Identification Number mismatch where the GSTIN declared in the shipping bill is different from the GSTIN under which the GSTR-1 returns have been filed. SB005 is a more granular invoice-level mismatch. SB003 arises typically when an exporter has multiple GSTINs across states and the wrong GSTIN is mentioned on the shipping bill or only the PAN is mentioned. Resolution is through the Officer Interface mechanism with documentary proof of the correct GSTIN."
          }
        },
        {
          "@type": "Question",
          "name": "Will I get interest if my IGST refund is delayed beyond 60 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 56 provides simple interest at six per cent per annum on any refund not paid within sixty days from the date of application. For Rule 96, the application date is when the shipping bill becomes a deemed application — that is, when EGM and GSTR-3B are both filed. Interest accrues from day 61 till credit date and is automatic, requiring no separate claim. Appellate sanctions attract 9 per cent."
          }
        },
        {
          "@type": "Question",
          "name": "Can I switch between IGST refund route and LUT route in different tax periods?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The choice between the IGST-paid route under Rule 96 and the LUT route under Rule 89(4) is exercised invoice by invoice, with no statutory bar on switching across tax periods. The exporter may evaluate working capital, drawback strategy and ITC accumulation each period. Both routes cannot be claimed for the same consignment as that constitutes double refund. A registered LUT in Form RFD-11 is mandatory for non-IGST exports."
          }
        },
        {
          "@type": "Question",
          "name": "What if my bank account is not validated in PFMS — can I still get the refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The Public Financial Management System validates the exporter's bank account against the NPCI database before crediting any refund. If validation fails due to IFSC mismatch, account closure or name discrepancy, the IGST scroll generates but disbursal fails. Update the correct bank account on ICEGATE and the GST portal, and approach the jurisdictional Customs Commissionerate for re-validation through Form A. Refunds resume after PFMS clears."
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
        .calc-section-title.compliance { color: var(--info); }
        .calc-section-title.restriction { color: var(--danger); }
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

        .timeline-card { background: linear-gradient(135deg, #EFF6FF, #DBEAFE); border: 2px solid var(--info); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .timeline-card h4 { font-size: 14px; color: #1E3A8A; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .timeline-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 10px; }
        @media (max-width: 500px) { .timeline-grid { grid-template-columns: 1fr; } }
        .timeline-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 14px; }
        .timeline-item .lbl { font-size: 11px; font-weight: 700; color: #1E40AF; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .timeline-item .val { font-family: var(--font-mono); font-weight: 700; color: #1E3A8A; font-size: 16px; }
        .timeline-item .sub { font-size: 11px; color: #1E40AF; margin-top: 2px; }

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

        .sb-code-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 13px; }
        .sb-code-table thead th { background: var(--primary); color: #fff; padding: 10px 12px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.3px; }
        .sb-code-table tbody td { padding: 10px 12px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .sb-code-table tbody tr:nth-child(even) { background: var(--surface); }
        .sb-code-table .code-cell { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); white-space: nowrap; }
        .sb-code-table .code-cell.success { color: var(--success); }
        .sb-code-table .code-cell.error { color: var(--danger); }
        @media (max-width: 600px) { .sb-code-table { font-size: 11px; } .sb-code-table thead th, .sb-code-table tbody td { padding: 6px 8px; } }

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
        <a href="#mechanism">Rule 96 Flow</a>
        <a href="#sb-codes">SB Error Codes</a>
        <a href="#reconciliation">3B vs 6A Match</a>
        <a href="#drawback">Drawback Conflict</a>
        <a href="#oct2024">Rule 96(10) Omitted</a>
        <a href="#timeline">Timeline &amp; Interest</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    IGST Export Refund Calculator (Rule 96)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>IGST Export Refund Calculator (Rule 96) — <span>Auto Refund of IGST Paid on Exports</span> for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20IGST%20Export%20Refund%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=IGST%20Export%20Refund%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20IGST%20Export%20Refund%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This IGST Export Refund Calculator implements <strong>Rule 96 of the CGST Rules, 2017</strong> for exporters who pay Integrated Tax on the export invoice and claim automatic refund through ICEGATE. The shipping bill itself is the deemed refund application — no Form RFD-01 is required for goods. The tool reconciles <strong>GSTR-1 Table 6A</strong> against <strong>GSTR-3B Table 3.1(b)</strong>, predicts the <strong>SB-series response code</strong> (SB000 success or SB001/SB003/SB005/SB006 errors), checks <strong>drawback conflict</strong> and <strong>PFMS bank validation</strong>, reflects the omission of <strong>Rule 96(10)</strong> by Notification 20/2024 effective 8 October 2024, and computes the two-year limitation under Section 54(1) and 6% interest under Section 56 if the refund is delayed beyond 60 days. For the Letter of Undertaking route under Rule 89(4) use our separate <a href="/tools/export-refund-lut-calculator">LUT Refund Calculator</a>.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>IGST Refund Eligibility &amp; Diagnostic Calculator</h2>
            <p class="calc-intro">Enter the export invoice values, IGST rate and reconciliation figures from your GSTR-1 Table 6A and GSTR-3B Table 3.1(b). Tick the compliance checklist and select the drawback status. The calculator determines whether your refund is eligible for automatic ICEGATE processing, predicts the response code, flags blocking issues and provides a step-by-step resolution path where errors are detected.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this calculator.</div></noscript>

            <div class="calc-section-title">Export Period &amp; Invoice Details</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="export-period">Tax Period (Month-Year)</label>
                    <input type="month" id="export-period" value="2026-04">
                    <span class="helper">The GSTR-1 / GSTR-3B period in which the exports are reported.</span>
                </div>
                <div class="form-group">
                    <label for="num-sb">Number of Shipping Bills</label>
                    <input type="text" id="num-sb" value="1" min="1" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total shipping bills filed in the period for which refund is being verified.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="export-value">Total Export Invoice Value (₹)</label>
                    <input type="text" id="export-value" value="5000000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Aggregate FOB value of all export invoices in the period (INR equivalent).</span>
                </div>
                <div class="form-group">
                    <label for="igst-rate">Applicable IGST Rate (%)</label>
                    <select id="igst-rate">
                        <option value="0.1">0.1% (Merchant export concessional)</option>
                        <option value="5">5%</option>
                        <option value="12">12%</option>
                        <option value="18" selected>18%</option>
                        <option value="28">28%</option>
                    </select>
                    <span class="helper">IGST rate applied on the export invoice. Most exports attract 18% unless specific rate notified.</span>
                </div>
            </div>

            <div class="calc-section-title compliance">GSTR Reconciliation (₹)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="igst-1">IGST in GSTR-1 Table 6A</label>
                    <input type="text" id="igst-1" value="900000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">IGST declared on export invoices in Table 6A of GSTR-1 for the period.</span>
                </div>
                <div class="form-group">
                    <label for="igst-3b">IGST Paid in GSTR-3B Table 3.1(b)</label>
                    <input type="text" id="igst-3b" value="900000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">IGST liability discharged in Table 3.1(b) of GSTR-3B (zero-rated outward supplies).</span>
                </div>
            </div>

            <div class="calc-section-title compliance">Compliance Checklist</div>

            <div class="checklist">
                <div class="checklist-item">
                    <input type="checkbox" id="chk-3b" checked>
                    <label for="chk-3b">GSTR-3B filed for the period<span class="sub">Mandatory for GSTN to transmit data to ICEGATE.</span></label>
                </div>
                <div class="checklist-item">
                    <input type="checkbox" id="chk-1" checked>
                    <label for="chk-1">GSTR-1 / Table 6A filed<span class="sub">Export invoices declared correctly in Table 6A.</span></label>
                </div>
                <div class="checklist-item">
                    <input type="checkbox" id="chk-egm" checked>
                    <label for="chk-egm">EGM filed by shipping line<span class="sub">Export General Manifest electronically filed at port of export.</span></label>
                </div>
                <div class="checklist-item">
                    <input type="checkbox" id="chk-pfms" checked>
                    <label for="chk-pfms">Bank account validated in PFMS<span class="sub">Validated on ICEGATE and GST portal for refund disbursal.</span></label>
                </div>
                <div class="checklist-item">
                    <input type="checkbox" id="chk-inv" checked>
                    <label for="chk-inv">Invoice numbers match SB &amp; GSTR-1<span class="sub">Same invoice number on shipping bill and Table 6A.</span></label>
                </div>
                <div class="checklist-item">
                    <input type="checkbox" id="chk-port" checked>
                    <label for="chk-port">Port code matches in GSTR-1 &amp; SB<span class="sub">Six-character port code identical across both systems.</span></label>
                </div>
                <div class="checklist-item">
                    <input type="checkbox" id="chk-gstin" checked>
                    <label for="chk-gstin">GSTIN consistent on SB &amp; returns<span class="sub">Same GSTIN on shipping bill and GSTR filings.</span></label>
                </div>
                <div class="checklist-item">
                    <input type="checkbox" id="chk-icd" checked>
                    <label for="chk-icd">Gateway EGM filed (if ICD shipment)<span class="sub">Required for shipments routed through Inland Container Depots.</span></label>
                </div>
            </div>

            <div class="calc-section-title restriction">Drawback &amp; Restrictions</div>

            <div class="form-group" style="margin-bottom: 16px;">
                <label>Duty Drawback Status</label>
                <div class="toggle-group" id="drawback-toggle">
                    <button type="button" class="toggle-btn active" data-value="none">No Drawback</button>
                    <button type="button" class="toggle-btn" data-value="lower">Lower Rate (BCD only)</button>
                    <button type="button" class="toggle-btn" data-value="higher">Higher Rate (incl. CGST/IGST)</button>
                </div>
                <span class="helper" style="font-size: 11px; color: var(--text-muted); display: block; margin-top: -10px;">Higher rate drawback subsumes GST component and bars IGST refund (double-benefit rule).</span>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="sb-date">Earliest Shipping Bill Date</label>
                    <input type="date" id="sb-date" value="2026-04-15">
                    <span class="helper">Date of the earliest shipping bill — for Section 54(1) limitation tracking.</span>
                </div>
                <div class="form-group">
                    <label for="ack-date">EGM &amp; GSTR-3B Filing Date (Application Date)</label>
                    <input type="date" id="ack-date" value="2026-05-20">
                    <span class="helper">Later of EGM date and GSTR-3B filing date — start of 60-day clock under Section 54(7).</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btn-calculate">Verify IGST Refund Eligibility</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset to Default</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdict">
                    <div class="verdict-label">Verdict</div>
                    <div class="verdict-headline" id="verdict-headline">—</div>
                    <div class="verdict-sub" id="verdict-sub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">IGST Refund Admissible</div>
                            <div class="verdict-grid-value" id="v-refund">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Predicted Response Code</div>
                            <div class="verdict-grid-value" id="v-code">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Estimated Credit ETA</div>
                            <div class="verdict-grid-value" id="v-eta">—</div>
                        </div>
                    </div>
                </div>

                <div id="alerts"></div>

                <div class="basis-block">
                    <div class="basis-label">Reconciliation Basis</div>
                    <div class="basis-text" id="basis-text">—</div>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">IGST in GSTR-1 (6A)</div>
                        <div class="summary-value" id="s-1">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">IGST in GSTR-3B (3.1b)</div>
                        <div class="summary-value" id="s-3b">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Computed IGST on Exports</div>
                        <div class="summary-value" id="s-comp">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Reconciliation Status</div>
                        <div class="summary-value" id="s-recon">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Drawback Compatibility</div>
                        <div class="summary-value" id="s-dbk">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Refund Amount</div>
                        <div class="summary-value" id="s-refund">—</div>
                    </div>
                </div>

                <div class="timeline-card">
                    <h4>Section 54 &amp; 56 Timeline</h4>
                    <div class="timeline-grid">
                        <div class="timeline-item">
                            <div class="lbl">2-Year Limitation Expires</div>
                            <div class="val" id="t-limit">—</div>
                            <div class="sub">From relevant date (SB date) per Section 54(1).</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">60-Day Final Order Due</div>
                            <div class="val" id="t-60">—</div>
                            <div class="sub">From application date per Section 54(7).</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">Section 56 Interest Accrual</div>
                            <div class="val" id="t-int">—</div>
                            <div class="sub">6% per annum if delayed beyond 60 days.</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">Days Until 2-Year Bar</div>
                            <div class="val" id="t-days">—</div>
                            <div class="sub">Days remaining before limitation kicks in.</div>
                        </div>
                    </div>
                </div>

                <div class="disclosure-block">
                    <span class="dl-label">ICEGATE Validation Trace</span>
                    <table id="trace-table">
                        <thead>
                            <tr><th>Check</th><th>Status</th><th>Detail</th></tr>
                        </thead>
                        <tbody id="trace-body">
                        </tbody>
                    </table>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — IGST Export Refund Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20IGST%20Export%20Refund%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=IGST%20Export%20Refund%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20IGST%20Export%20Refund%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the IGST Export Refund Calculator</h2>
            <p>The calculator works as a diagnostic tool that mirrors the validation logic ICEGATE applies before sanctioning the IGST refund. Each input maps to a specific data point that the Customs system or GSTN checks during automated processing. Follow the steps below to obtain an accurate eligibility verdict.</p>
            <ol>
                <li><strong>Enter the tax period</strong> — Select the month and year for which exports are being verified. Refund processing happens period-wise based on the GSTR-1 and GSTR-3B filed for that period.</li>
                <li><strong>Total export invoice value</strong> — Enter the aggregate FOB value of all export invoices in the period in INR. If invoiced in foreign currency, convert at the rate prescribed in <a href="https://www.gst.gov.in" rel="noopener" target="_blank">Section 14 of the Customs Act</a> read with the applicable customs notification.</li>
                <li><strong>Applicable IGST rate</strong> — Choose the rate applied on export invoices. Note that the 0.1% concessional rate under Notifications 40 and 41 of 2017 carries restrictions on subsequent IGST refund eligibility.</li>
                <li><strong>IGST in GSTR-1 Table 6A vs GSTR-3B Table 3.1(b)</strong> — These are the two reconciliation values GSTN checks before transmitting data. The 3B figure must equal or exceed the 6A figure for transmission.</li>
                <li><strong>Compliance checklist</strong> — Tick all boxes that are true. Each unticked item triggers a specific predicted error code in the output verdict.</li>
                <li><strong>Drawback status</strong> — Select between no drawback, lower-rate-only drawback (BCD component) or higher-rate composite drawback. Higher rate blocks IGST refund.</li>
                <li><strong>Shipping bill date and application date</strong> — Earliest SB date drives the two-year limitation; later of EGM and GSTR-3B date is the application date for Section 54(7) and Section 56 computation.</li>
            </ol>
            <div class="callout">
                <p><strong>Tip:</strong> Run the calculator separately for each shipping bill where invoice details vary. ICEGATE matches at the invoice level — a single invoice mismatch triggers SB005 only for that invoice while other invoices in the same SB may pass with SB000.</p>
            </div>
        </section>

        <section class="content-section" id="mechanism">
            <h2>Rule 96 Mechanism — How the Auto-Refund Flow Works</h2>
            <p>Rule 96 of the CGST Rules, 2017 prescribes a unique self-executing refund mechanism for exports made on payment of Integrated Tax. Unlike the LUT route under Rule 89(4), there is no manual Form RFD-01 filing for goods; the shipping bill filed at the port of export is treated as the deemed refund application once two preconditions are satisfied. The mechanism has been operational in Indian Customs Electronic Data Interchange Systems since 10 October 2017 and processes the bulk of zero-rated supply refunds in India.</p>
            <h3>The Statutory Framework</h3>
            <p>Section 16(3) of the IGST Act, 2017 grants exporters two routes — supply under bond or LUT without payment of integrated tax and claim refund of unutilised ITC, or supply on payment of integrated tax and claim refund of such tax paid. Rule 96 governs the second route. Sub-rule (1) deems the shipping bill to be an application for refund subject to filing of the EGM and a valid GSTR-3B. Sub-rule (3) provides that GSTN shall electronically transmit the GSTR-1 export invoice data to the customs system, which then matches it with shipping bill data and processes the refund through the IGST scroll mechanism.</p>
            <h3>The Three-Stage Auto-Refund Pipeline</h3>
            <ol>
                <li><strong>Filing stage</strong> — Exporter pays IGST on the export invoice, files the shipping bill on ICEGATE with the IGST amount, exports the goods, and the shipping line files the EGM. Exporter files GSTR-1 (with Table 6A populated) and GSTR-3B (with the IGST shown in Table 3.1(b)) for the period.</li>
                <li><strong>Transmission stage</strong> — GSTN runs an internal validation that the IGST in 3B Table 3.1(b) is at least equal to the IGST in 1/6A and that all invoices are accounted for. If validation passes, GSTN electronically transmits the data to ICEGATE.</li>
                <li><strong>Validation &amp; sanction stage</strong> — ICEGATE matches each invoice between the transmitted GSTR-1 data and the shipping bill data on parameters of invoice number, IGST amount, taxable value, GSTIN and port code. Where all match, the system flags the SB with response code SB000 and includes it in the IGST refund scroll generated by the customs officer in the CLK role.</li>
            </ol>
            <h3>Disbursal Through PFMS</h3>
            <p>Once the refund scroll is approved by the AC or DC role at the port, the disbursal happens automatically through the Public Financial Management System against the bank account validated by the exporter on ICEGATE. The credit typically reflects in the bank account within seven to fifteen working days of scroll generation, subject to PFMS bank validation success. The exporter receives an SMS and email confirmation once the credit is processed. Status can be tracked on <a href="https://www.icegate.gov.in" rel="noopener" target="_blank">ICEGATE Refund Status</a> using the shipping bill number and date.</p>
            <div class="callout">
                <p><strong>Key advantage:</strong> Zero touch processing means no scrutiny, no Form RFD-01, no Statement-3 preparation, and no waiting for Form RFD-02 acknowledgement. Where data is clean the refund flows automatically — typically in 4–6 weeks from EGM date end-to-end. This speed makes Rule 96 the preferred route for high-volume exporters with strong reconciliation discipline.</p>
            </div>
        </section>

        <section class="content-section" id="sb-codes">
            <h2>SB Response Code Decoder — What Each Error Means</h2>
            <p>ICEGATE assigns a response code to every shipping bill at the invoice level after the matching exercise. Understanding what each code signifies and the precise resolution path is essential for unblocking stuck refunds. The codes below are the official response codes used in the IGST Refund Module of ICES, as documented in the <a href="https://www.icegate.gov.in/sites/default/files/2026-04/IGST%20REFUND%20FAQ1%20updated.pdf" rel="noopener" target="_blank">CBIC IGST Refund FAQ</a>.</p>
            <table class="sb-code-table">
                <thead>
                    <tr><th>Code</th><th>Meaning</th><th>Cause</th><th>Resolution</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="code-cell success">SB000</td>
                        <td>Successfully Validated</td>
                        <td>All invoice details match between shipping bill, GSTR-1 Table 6A and GSTR-3B Table 3.1(b).</td>
                        <td>Refund eligible. IGST scroll will be generated by Customs and credited to bank via PFMS.</td>
                    </tr>
                    <tr>
                        <td class="code-cell error">SB001</td>
                        <td>Invalid SB Details</td>
                        <td>Shipping bill number, SB date or six-character port code in the GSTR-1 invoice does not match the actual SB filed at ICEGATE.</td>
                        <td>Amend the invoice in the GST portal using Table 9A of GSTR-1 with correct SB number, date and port code matching the shipping bill.</td>
                    </tr>
                    <tr>
                        <td class="code-cell error">SB002</td>
                        <td>EGM Not Filed</td>
                        <td>Export General Manifest has not been filed by the shipping line or carrier at the port of export.</td>
                        <td>Follow up with the shipping line or CHA to file EGM electronically. Until EGM filing the SB is not even sent for IGST validation.</td>
                    </tr>
                    <tr>
                        <td class="code-cell error">SB003</td>
                        <td>GSTIN Mismatch</td>
                        <td>GSTIN declared on the shipping bill is different from the GSTIN under which GSTR-1 returns are filed, or only PAN was declared on SB.</td>
                        <td>Apply through the Officer Interface to the jurisdictional Customs AC or DC with proof of correct GSTIN; manual sanction will be processed.</td>
                    </tr>
                    <tr>
                        <td class="code-cell error">SB004</td>
                        <td>Already Validated / Duplicate</td>
                        <td>Same SB invoice record has been transmitted twice; the earlier transmission was already validated and refund processed.</td>
                        <td>No action needed if the original refund was credited. Verify via ICEGATE refund scroll status using the SB number.</td>
                    </tr>
                    <tr>
                        <td class="code-cell error">SB005</td>
                        <td>Invoice Number Mismatch</td>
                        <td>Invoice number declared on shipping bill differs from invoice number declared in GSTR-1 Table 6A — typographic, format or duplicate-set causes.</td>
                        <td>Use the Officer Interface mechanism (Circulars 5/2018-Cus and 5/2021-Cus). Customs officer manually validates documentary evidence and sanctions refund.</td>
                    </tr>
                    <tr>
                        <td class="code-cell error">SB006</td>
                        <td>Gateway EGM Pending (ICD)</td>
                        <td>For shipments via Inland Container Depots, the gateway port custodian or shipping line has not filed the gateway EGM electronically.</td>
                        <td>Coordinate with CHA, ICD custodian and shipping line to file gateway EGM at the gateway port. Refund auto-resumes after EGM submission.</td>
                    </tr>
                    <tr>
                        <td class="code-cell error">SB104</td>
                        <td>Invalid Port Code</td>
                        <td>Six-character port code declared in GSTR-1 Table 6A is not a valid Customs port code recognised by ICEGATE.</td>
                        <td>Amend the port code in GSTR-1 Table 9A to the correct ICEGATE port code (e.g., INNSA1 for JNPT Nhava Sheva). Contact GSTN helpdesk if persistent.</td>
                    </tr>
                </tbody>
            </table>
            <h3>The Officer Interface for SB003 and SB005</h3>
            <p>Recognising that SB005 invoice mismatches and SB003 GSTIN errors cannot always be corrected via GSTR-1 amendment (especially after EGM filing), CBIC has issued circulars enabling a manual Officer Interface mechanism. Under <a href="https://taxinformation.cbic.gov.in/" rel="noopener" target="_blank">Circular 5/2018-Customs and Circular 5/2021-Customs</a>, a designated Customs officer can verify the shipping bill data and the corresponding GSTR-1 and GSTR-3B filings and sanction the IGST refund manually where the underlying documentary evidence supports the refund despite the system mismatch. The exporter should approach the jurisdictional Customs Commissionerate with the shipping bill, EGM, GSTR-1 and GSTR-3B copies along with the IGST payment evidence.</p>
        </section>

        <div class="body-cta">
            <h3>Stuck on SB005, SB003 or PFMS Errors?</h3>
            <p>Patron Accounting's GST refund team has cleared 200+ stuck IGST refunds via the Officer Interface route. We coordinate with the jurisdictional Customs Commissionerate, prepare the documentary package and follow through to scroll generation. Average resolution time: 4 to 8 weeks.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IGST%20Export%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=IGST%20Export%20Refund%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20IGST%20Export%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>


        <section class="content-section" id="reconciliation">
            <h2>GSTR-1 Table 6A vs GSTR-3B Table 3.1(b) Reconciliation</h2>
            <p>The single most common reason for non-transmission of refund data from GSTN to ICEGATE is a mismatch between the IGST declared in Table 6A of Form GSTR-1 and the IGST paid in Table 3.1(b) of Form GSTR-3B for the same tax period. This is not an SB-series error — it occurs at an earlier stage, before the shipping bill data even reaches ICEGATE. The exporter sees no SB code; the shipping bill simply does not appear in the ICEGATE refund report.</p>
            <h3>The GSTN Validation Logic</h3>
            <p>GSTN runs a periodic batch process that validates each registered exporter's filings before transmission. The logic is straightforward: the IGST liability paid through Table 3.1(b) must be at least equal to the IGST declared on zero-rated supplies in Table 6A of GSTR-1 for the same period. If the 3B figure is less, GSTN concludes that the exporter has not fully discharged the IGST liability and withholds transmission until the shortfall is paid through DRC-03 with applicable interest under Section 50 of the CGST Act.</p>
            <div class="formula-box">
                <span class="label">TRANSMISSION RULE:</span><br>
                IGST in GSTR-3B Table 3.1(b) <strong>≥</strong> IGST in GSTR-1 Table 6A<br><br>
                <span class="label">IF NOT MET:</span><br>
                Pay differential IGST + Section 50 interest via Form DRC-03<br>
                Re-transmission happens in next GSTN batch cycle (typically 7-14 days)
            </div>
            <h3>Common Reconciliation Failures</h3>
            <ul>
                <li><strong>Reported in 3.1(a) instead of 3.1(b)</strong> — Many exporters wrongly report zero-rated supplies under Table 3.1(a) (other outward taxable supplies). The correct row is Table 3.1(b) — Outward taxable supplies (zero-rated). Move the values via amendment.</li>
                <li><strong>Cash ledger short, ITC over-utilised</strong> — Where the IGST output is paid disproportionately from the credit ledger but the credit was inadequate, the system may flag it. Reconcile via Form GSTR-3B amendment if discovered within the same period.</li>
                <li><strong>Period mismatch</strong> — Invoice raised in one month but reported in 6A of a subsequent month creates timing differences. Avoid by ensuring 6A and 3B alignment within the same GSTR period.</li>
                <li><strong>Amendment not synchronised</strong> — Amending GSTR-1 Table 6A through Table 9A but not adjusting 3B Table 3.1(b) leads to mismatch. Amendments must be parallel.</li>
            </ul>
            <h3>How to Diagnose Mismatch</h3>
            <p>The exporter should download the <strong>IGST Validation Status Report</strong> from the ICEGATE login. If the shipping bill is not listed, the data has not reached ICEGATE — the issue is at GSTN. If the SB is listed with a code other than SB000, the issue is at ICEGATE matching. The exporter can also pull the IGST scroll-wise refund status from the same dashboard. For unresolved cases, a written representation to the GSTN helpdesk citing the GSTIN, period, ARN of GSTR-1 and 3B filings and SB details is the prescribed escalation path.</p>
        </section>

        <section class="content-section" id="drawback">
            <h2>Drawback &amp; IGST Refund — The Double-Benefit Restriction</h2>
            <p>Indian export incentives operate on a strict no-double-benefit principle. Where an exporter claims drawback of customs duty on the export, the question of simultaneous IGST refund depends on whether the drawback claimed is the lower (BCD-only) rate or the higher composite rate that subsumes the GST component. The CBIC has clarified the position through multiple instructions and the position remains unchanged post the omission of Rule 96(10).</p>
            <h3>Lower Rate Drawback — IGST Refund Allowed</h3>
            <p>The lower rate of drawback published in the Drawback Schedule represents only the rebate of Basic Customs Duty embedded in inputs used for manufacture of the export. There is no GST element in the lower rate. Where an exporter claims only the lower rate, the GST component remains unrebated and the IGST refund under Rule 96 is admissible without restriction. This is the most common combination for value-added manufacturing exports.</p>
            <h3>Higher Rate Drawback — IGST Refund Barred</h3>
            <p>The higher composite rate of drawback (often called the all-industry rate at the higher slab) was historically designed when state and central tax rebates were not available to exporters. It includes a notional GST component within the rate. If the exporter has claimed drawback at the higher rate, the IGST paid on exports cannot be refunded — it would constitute double benefit. The shipping bill drawback declaration column captures the rate elected at the time of export and binds the exporter for that consignment. Once filed, the rate cannot be retrospectively changed for IGST refund purposes.</p>
            <h3>Special Categories — RoDTEP, RoSCTL and SEIS</h3>
            <p><strong>Remission of Duties and Taxes on Exported Products (RoDTEP)</strong> — A duty-rebate scheme that does not bar IGST refund under Rule 96. RoDTEP rebates embedded duties and taxes that are not refundable through GST or drawback channels.</p>
            <p><strong>Rebate of State and Central Taxes and Levies (RoSCTL)</strong> — Specific to apparel and made-up exports. Compatible with IGST refund under Rule 96 since RoSCTL targets state-level levies outside GST.</p>
            <p><strong>Service Exports from India Scheme (SEIS) and Merchandise Exports from India Scheme (MEIS)</strong> — Foreign trade scrip-based incentives, fully compatible with IGST refund under Rule 96.</p>
            <div class="callout warn">
                <p><strong>Compliance check:</strong> Always pull the drawback declaration column from the EDI shipping bill before computing IGST refund admissibility. The drawback rate elected on each SB independently determines IGST refund eligibility. A single SB with higher rate elected blocks IGST refund only for that consignment, not for the entire period's exports.</p>
            </div>
        </section>

        <section class="content-section" id="oct2024">
            <h2>October 2024 Update — Rule 96(10) Omitted by Notification 20/2024</h2>
            <p>One of the most significant relief measures for exporters in recent years was the omission of Rule 96(10) of the CGST Rules with effect from 8 October 2024. This sub-rule had been a constant source of litigation since its insertion in 2018 and had blocked IGST refund for a wide category of exporters whose suppliers had availed certain duty exemptions. The 54th GST Council meeting on 9 September 2024 recommended its removal, and the CBIC notified the omission via <a href="https://taxinformation.cbic.gov.in/" rel="noopener" target="_blank">Notification No. 20/2024-Central Tax dated 8 October 2024</a>.</p>
            <h3>What Rule 96(10) Restricted Pre-Omission</h3>
            <p>Rule 96(10) barred IGST refund on exports where the exporter or its supplier had availed benefit of any of the following notifications:</p>
            <ul>
                <li><strong>Notification 78/2017-Customs (EOU Scheme)</strong> — IGST exemption on imports for Export Oriented Units.</li>
                <li><strong>Notification 79/2017-Customs (Advance Authorisation &amp; EPCG)</strong> — IGST exemption on duty-free imports under AA and EPCG schemes.</li>
                <li><strong>Notification 48/2017-Central Tax</strong> — Deemed export benefits.</li>
                <li><strong>Notification 40/2017-Central Tax (Rate) and 41/2017-Integrated Tax (Rate)</strong> — 0.1% concessional rate for merchant exports.</li>
            </ul>
            <p>The rule had created enormous compliance friction. Even where an exporter received inputs at concessional rate in good faith and paid IGST on exports, the refund was retrospectively recovered with interest and penalty. The DGGI had issued show-cause notices for crores of rupees against multiple exporters since 2018.</p>
            <h3>The Litigation Trail and Final Relief</h3>
            <p>The Kerala High Court in <em>Sance Laboratories Pvt. Ltd. v. Union of India</em> declared Rule 96(10) ultra vires Section 16 of the IGST Act, holding it manifestly arbitrary. Following the omission notification, the Gujarat High Court in <em>Addwrap Packaging Pvt. Ltd. v. Union of India</em> (June 2025) held that the omission applies even to all proceedings pending on 8 October 2024 — there is no saving clause, so the rule is legally extinct for all uncompleted cases. The Calcutta High Court in <em>Glenn Industries Pvt. Ltd.</em> and Uttarakhand HC in <em>Sri Sai Vishwas Polymers</em> followed the same approach.</p>
            <h3>Practical Impact for Exporters Today</h3>
            <ul>
                <li><strong>For exports made after 8 October 2024</strong> — IGST refund is admissible under Rule 96 even if AA, EPCG, EOU or 0.1% concession was used in the input chain. No restriction applies.</li>
                <li><strong>For exports made before 8 October 2024 with pending SCN</strong> — Cite the Gujarat HC ruling in Addwrap Packaging and seek dropping of proceedings. Recovery action is no longer maintainable.</li>
                <li><strong>For past refunds already recovered</strong> — Where the recovery order is under appeal, push for restoration based on the omission and judicial precedent. Where the order has attained finality, the relief may not be available.</li>
            </ul>
            <p>Companion rules — Rule 89(4A) and Rule 89(4B) of the CGST Rules — were also omitted by Notification 20/2024 in parallel. These had imposed similar restrictions on the LUT route under Rule 89(4) for AA/EPCG-using exporters. Both routes now operate on uniform refund principles without the deemed-export-chain bar.</p>
            <div class="callout">
                <p><strong>Going forward:</strong> Exporters can confidently use Rule 96 even when sourcing inputs from suppliers under deemed export schemes or availing themselves of AA/EPCG benefits. The omission has substantially de-risked supply chain decisions and removed a major compliance overhang.</p>
            </div>
        </section>

        <section class="content-section" id="timeline">
            <h2>Timeline, Limitation and Section 56 Interest Entitlement</h2>
            <p>While Rule 96 operates on an automated track, the underlying refund framework remains subject to the time limits and interest provisions of the CGST Act. Three key statutory clocks govern every IGST refund — the two-year limitation under Section 54(1), the 60-day final order window under Section 54(7) and the 6% interest entitlement under Section 56 for delayed refunds.</p>
            <h3>Two-Year Limitation — Section 54(1)</h3>
            <p>Section 54(1) of the CGST Act prescribes that any refund application must be filed within two years from the relevant date. For exports of goods on payment of Integrated Tax, Explanation (2)(a) to Section 54 defines the relevant date as the date of the shipping bill. Since the shipping bill itself is the deemed application under Rule 96, the limitation is rarely a constraint on the application stage. However, the GSTR-1 and GSTR-3B for the corresponding period must also be filed within the two-year window, otherwise transmission to ICEGATE is not possible.</p>
            <h3>60-Day Final Order Window — Section 54(7)</h3>
            <p>Section 54(7) requires the proper officer to issue the final order on a refund application within sixty days from the date of receipt of the application complete in all respects. For Rule 96, the application is deemed received on the later of the EGM filing date and the GSTR-3B filing date. The 60-day clock starts from this date.</p>
            <h3>Section 56 — 6% Interest for Delayed Refunds</h3>
            <p>Section 56 of the CGST Act creates an automatic statutory entitlement to simple interest at six per cent per annum on any refund not paid within sixty days from the date of the application. The interest accrues from the day immediately after expiry of the 60-day window until the date of actual credit. For Rule 96 the date of application is the deemed application date under Rule 96(2). The exporter does not need to file a separate claim; the interest is computed and disbursed by Customs along with the principal refund. If the refund is sanctioned by an appellate authority on appeal, the rate increases to 9% per annum.</p>
            <div class="formula-box">
                <span class="label">SECTION 56 INTEREST FORMULA:</span><br>
                Interest = Refund Amount × 6% × (Days Delayed ÷ 365)<br><br>
                <span class="label">DAYS DELAYED:</span><br>
                = (Date of Refund Credit) − (Application Date + 60 days)
            </div>
            <h3>Tracking the Timeline</h3>
            <p>The exporter should maintain a tracking sheet for every shipping bill capturing: SB number and date, EGM date, GSTR-1 ARN and date, GSTR-3B ARN and date, deemed application date, IGST scroll number, scroll date, PFMS credit date, response code, refund amount and any interest credited. This single source of truth supports interest claims and dispute resolution if the refund is delayed beyond 60 days. Patron Accounting's tracker template is shared with all clients on engagement.</p>
        </section>

        <section class="content-section" id="lut-vs-igst">
            <h2>LUT Route vs IGST Route — Which Should You Choose?</h2>
            <p>Section 16(3) of the IGST Act gives every exporter a binary choice on each invoice — supply under LUT without payment of IGST and claim refund of unutilised ITC under Rule 89(4), or supply on payment of IGST and claim refund under Rule 96. Both routes ultimately deliver the same underlying benefit (zero-rated treatment), but they differ materially in cash flow, processing speed, ITC consumption and compliance burden. Understanding when each route is optimal allows exporters to maximise working capital efficiency.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Parameter</th><th>LUT Route (Rule 89)</th><th>IGST Route (Rule 96)</th></tr>
                </thead>
                <tbody>
                    <tr><td>IGST payment on export invoice</td><td>Not paid</td><td>Paid upfront</td></tr>
                    <tr><td>Refund mechanism</td><td>Manual via Form RFD-01 + Statement-3</td><td>Automatic via ICEGATE — SB is the application</td></tr>
                    <tr><td>What is refunded</td><td>Unutilised ITC (Net ITC formula)</td><td>IGST paid on exports (full amount)</td></tr>
                    <tr><td>Capital goods ITC refundable?</td><td>No (excluded by Rule 89(4)(B))</td><td>Indirectly, through IGST paid from credit ledger</td></tr>
                    <tr><td>Working capital impact</td><td>Preserves cash (no upfront IGST)</td><td>Blocks cash (IGST paid from ledger or cash)</td></tr>
                    <tr><td>Processing time</td><td>30-60 days typically</td><td>2-6 weeks typically</td></tr>
                    <tr><td>Provisional refund (90%)</td><td>Yes, RFD-04 within 7 days</td><td>Not separately — full amount in scroll</td></tr>
                    <tr><td>Documentation burden</td><td>Higher — Statement-3, FIRC/BRC, CA cert</td><td>Lower — auto from SB and returns</td></tr>
                    <tr><td>1.5× domestic value cap</td><td>Yes, on goods turnover</td><td>Not applicable</td></tr>
                </tbody>
            </table>
            <h3>When the LUT Route Wins</h3>
            <ul>
                <li><strong>Working capital constrained exporters</strong> — Avoiding upfront IGST payment is critical when cash flow is tight.</li>
                <li><strong>High ITC accumulation businesses</strong> — Where input ITC builds up faster than domestic output liability, LUT route monetises the accumulating credit.</li>
                <li><strong>Low domestic turnover</strong> — Where domestic outward supplies are small, the unutilised credit pool grows and LUT refund liquidates it.</li>
                <li><strong>Service exporters with foreign currency receipt timing</strong> — LUT works well where service exports dominate.</li>
            </ul>
            <h3>When the IGST Route Wins</h3>
            <ul>
                <li><strong>Capital goods heavy operations</strong> — Capital goods ITC cannot be refunded under LUT; paying IGST and claiming refund effectively unlocks it.</li>
                <li><strong>High-volume goods exporters with strong reconciliation</strong> — Speed and zero-touch processing favour automation over manual filing.</li>
                <li><strong>Exporters using AA/EPCG inputs</strong> — Post Rule 96(10) omission, the IGST route is now safely available even with concessional input chains.</li>
                <li><strong>Domestic outward liability is high</strong> — IGST paid on exports comes from the credit ledger funded by domestic ITC inflow, no incremental cash strain.</li>
            </ul>
            <p>Compute the optimal route for your specific working capital and ITC profile using our <a href="/tools/export-refund-lut-calculator">LUT Refund Calculator</a> alongside this tool. Many exporters operate a mixed strategy — LUT for service exports and IGST route for goods exports — to optimise across the portfolio.</p>
        </section>

        <section class="content-section" id="errors">
            <h2>Common Reasons Why IGST Refund Gets Stuck</h2>
            <p>Notwithstanding the automated design, IGST refunds get stuck for a variety of reasons. Pattern recognition from 200+ refund consultations at Patron Accounting suggests that 80% of stuck refunds fall into one of seven recurring buckets. Diagnosing the bucket within the first week saves weeks of follow-up.</p>
            <ol>
                <li><strong>Table 6A vs 3.1(b) mismatch</strong> — IGST in 3B is less than IGST in 1/6A; data not transmitted by GSTN. Resolution: pay differential via DRC-03 with interest.</li>
                <li><strong>Wrong table in GSTR-3B</strong> — Zero-rated supply reported in 3.1(a) instead of 3.1(b). Resolution: amendment in subsequent period or representation if amendment window has lapsed.</li>
                <li><strong>EGM not filed by shipping line</strong> — SB002 error. Resolution: pursue via shipping line and CHA.</li>
                <li><strong>SB005 invoice mismatch</strong> — Most common error. Resolution: Officer Interface mechanism with documentary evidence.</li>
                <li><strong>SB003 GSTIN mismatch</strong> — Wrong or missing GSTIN on SB. Resolution: Officer Interface or amendment as applicable.</li>
                <li><strong>PFMS bank account validation failure</strong> — Refund scroll generated but disbursal fails. Resolution: update bank account on ICEGATE Form A and on GST portal; await PFMS re-validation cycle.</li>
                <li><strong>Higher rate drawback claimed</strong> — IGST refund permanently barred for that SB. Resolution: not available; learn for future SBs to elect lower rate.</li>
            </ol>
            <h3>The Officer Interface Workflow</h3>
            <p>For SB003 and SB005 cases, the Officer Interface is the prescribed escalation channel. The exporter writes to the jurisdictional Customs AC or DC at the port of export with the following package: covering letter explaining the mismatch, copy of the shipping bill, copy of the EGM, copies of GSTR-1 with Table 6A and GSTR-3B with Table 3.1(b), invoice copies, IGST payment evidence (challan and credit ledger entry) and bank account validation proof. The officer verifies the documents and processes the refund manually through the IGST officer interface module. Patron Accounting handles end-to-end Officer Interface representation for clients with stuck refunds.</p>
            <div class="callout warn">
                <p><strong>Avoid the most common pitfall:</strong> Many exporters do not check the IGST validation status on ICEGATE for weeks after EGM filing, assuming the refund will simply arrive. Build a 14-day post-EGM check into your standard operating procedure — if the SB is not in the validation report by then, intervene immediately rather than wait three months.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the IGST refund route under Rule 96 and how does it differ from the LUT route?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Rule 96, the exporter pays Integrated Tax on the export invoice and the shipping bill itself becomes the refund application once the EGM and a valid GSTR-3B are filed. ICEGATE processes the refund automatically without Form RFD-01 and PFMS credits the bank account. The LUT route under Rule 89(4) needs manual RFD-01 filing and refunds unutilised ITC. The IGST route is faster but blocks working capital.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What conditions must be met for ICEGATE to process my IGST refund automatically?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Three conditions must be cumulatively satisfied for the GSTN to transmit data to ICEGATE. First, both Form GSTR-1 with Table 6A and Form GSTR-3B must be filed for the relevant tax period. Second, the Integrated Tax declared in Table 3.1(b) of GSTR-3B must be equal to or greater than the Integrated Tax declared in Table 6A of GSTR-1. Third, the invoice details in the shipping bill at ICEGATE must match the invoice details transmitted from GSTR-1, with no missing invoices.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What does SB000 response code mean and when will my refund be credited?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SB000 is the success code indicating that the shipping bill has been successfully validated against the GST returns and the refund is eligible for sanction. The customs officer in CLK role generates the temporary IGST refund scroll, approved by AC or DC. The Public Financial Management System credits the refund to the bank account validated on ICEGATE, typically within seven to fifteen days of scroll generation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What does the SB005 error mean and how do I resolve it?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SB005 indicates that the invoice number declared in the shipping bill does not match the invoice number declared in Table 6A of Form GSTR-1, the most common cause of refund rejection. The error typically arises from typographical mistakes or use of separate invoices for GST and Customs. Resolution is through the Officer Interface mechanism under Circular 5/2018-Customs read with Circular 5/2021-Customs, where the jurisdictional Customs officer manually validates and approves the refund based on documentary evidence.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I claim IGST refund if I have availed Duty Drawback on my exports?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, but only where the lower or all-industry rate of drawback has been claimed, which represents only the Basic Customs Duty component. If the higher composite rate of drawback has been availed which subsumes the Central Goods and Services Tax, State Goods and Services Tax or Integrated Goods and Services Tax components, the IGST refund is not admissible since this would amount to double benefit. The shipping bill drawback declaration must reflect the lower rate.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What was Rule 96(10) of the CGST Rules and is it still applicable?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Rule 96(10) restricted IGST refund where the exporter or its supplier had availed concessional benefits like Advance Authorisation, EPCG, EOU exemption or the 0.1 per cent merchant export rate. The rule was omitted with effect from 8 October 2024 by Notification 20/2024-Central Tax following the 54th GST Council recommendation. The Gujarat and Calcutta High Courts have held the omission applies even to pending proceedings, providing relief from recovery notices.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the time limit for claiming IGST refund under Rule 96?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54(1) prescribes a two-year limitation from the relevant date for filing a refund claim. For exports of goods on payment of IGST, the relevant date defined in Explanation (2)(a) is the date of the shipping bill. Since the SB itself is the deemed application under Rule 96, limitation rarely binds, but GSTR-1 and GSTR-3B for the period must be filed within two years to enable ICEGATE transmission.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What happens if my IGST in GSTR-3B Table 3.1(b) is less than IGST in GSTR-1 Table 6A?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">GSTN will not transmit the data to ICEGATE if the Integrated Tax paid in Table 3.1(b) of GSTR-3B is less than the Integrated Tax declared in Table 6A of GSTR-1, because this signals incomplete payment of tax on zero-rated supplies. The exporter must rectify the shortfall by paying differential IGST through DRC-03 with applicable interest under Section 50 of the CGST Act. After payment, the data will be re-transmitted in the next cycle and the refund processed automatically.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is SB006 error and how is it resolved for ICD shipments?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SB006 indicates the gateway Export General Manifest has not been filed electronically or has filing errors, common for shipments routed through Inland Container Depots. The gateway port custodian or shipping line must file the gateway EGM through ICEGATE referencing the ICD shipping bill. Until filed and matched, the refund stays stuck. Exporters should follow up with their CHA and shipping line and escalate to the gateway AC if delayed.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is provisional refund of 90 per cent applicable under the IGST refund route?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The provisional refund framework under Section 54(6) read with Rule 91 is conceptually applicable to zero-rated supplies. However, in practice the IGST refund route under Rule 96 is fully automated through ICEGATE and the entire amount is sanctioned in one go through the IGST scroll, without a separate 90 per cent provisional plus 10 per cent final split. Provisional refund is more relevant for the LUT route under Rule 89(4).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is the IGST refund amount computed under Rule 96?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Rule 96 the IGST refund amount equals the IGST actually paid on the export invoice and declared in Table 6A of GSTR-1, capped at the IGST paid through Table 3.1(b) of GSTR-3B for that period. There is no Rule 89(4) formula or Adjusted Total Turnover computation. ICEGATE matches each invoice on number, IGST amount, taxable value and port code, then credits the matched amount to the validated bank account.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is SB003 error and how is it different from SB005?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SB003 indicates a Goods and Services Tax Identification Number mismatch where the GSTIN declared in the shipping bill is different from the GSTIN under which the GSTR-1 returns have been filed. SB005 is a more granular invoice-level mismatch. SB003 arises typically when an exporter has multiple GSTINs across states and the wrong GSTIN is mentioned on the shipping bill or only the PAN is mentioned. Resolution is through the Officer Interface mechanism with documentary proof of the correct GSTIN.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Will I get interest if my IGST refund is delayed beyond 60 days?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Section 56 provides simple interest at six per cent per annum on any refund not paid within sixty days from the date of application. For Rule 96, the application date is when the shipping bill becomes a deemed application — that is, when EGM and GSTR-3B are both filed. Interest accrues from day 61 till credit date and is automatic, requiring no separate claim. Appellate sanctions attract 9 per cent.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I switch between IGST refund route and LUT route in different tax periods?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The choice between the IGST-paid route under Rule 96 and the LUT route under Rule 89(4) is exercised invoice by invoice, with no statutory bar on switching across tax periods. The exporter may evaluate working capital, drawback strategy and ITC accumulation each period. Both routes cannot be claimed for the same consignment as that constitutes double refund. A registered LUT in Form RFD-11 is mandatory for non-IGST exports.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What if my bank account is not validated in PFMS — can I still get the refund?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The Public Financial Management System validates the exporter's bank account against the NPCI database before crediting any refund. If validation fails due to IFSC mismatch, account closure or name discrepancy, the IGST scroll generates but disbursal fails. Update the correct bank account on ICEGATE and the GST portal, and approach the jurisdictional Customs Commissionerate for re-validation through Form A. Refunds resume after PFMS clears.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need IGST Refund Recovery?</h3>
            <p>Stuck on SB005, SB003 or PFMS errors? Our team handles end-to-end Officer Interface representation and refund recovery.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IGST%20Export%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=IGST%20Export%20Refund%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20IGST%20Export%20Refund%20Calculator.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/iec-registration" class="sidebar-link">IEC Registration<span class="arrow">→</span></a>
            <a href="/iec-renewal" class="sidebar-link">IEC Renewal<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/export-refund-lut-calculator" class="sidebar-link">Export Refund Calculator (LUT)<span class="arrow">→</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee &amp; Interest<span class="arrow">→</span></a>
            <a href="/tools/gstr-2a-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation<span class="arrow">→</span></a>
            <a href="/tools/rcm-calculator" class="sidebar-link">RCM Calculator<span class="arrow">→</span></a>
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
    <div class="trust">Trusted by 500+ exporters across India</div>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function() {
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    // ─── State ───────────────────────────────────────────────────
    var state = { drawback: 'none' };

    // ─── DOM helpers ─────────────────────────────────────────────
    function $(id) { return document.getElementById(id); }
    function fmtINR(n) {
        if (!isFinite(n) || n === null) return '—';
        if (n === 0) return '₹0';
        var sign = n < 0 ? '-' : '';
        n = Math.abs(Math.round(n));
        if (n >= 10000000) return sign + '₹' + (n / 10000000).toFixed(2) + ' Cr';
        if (n >= 100000)   return sign + '₹' + (n / 100000).toFixed(2) + ' L';
        var s = String(n);
        var lastThree = s.substring(s.length - 3);
        var rest = s.substring(0, s.length - 3);
        if (rest !== '') lastThree = ',' + lastThree;
        return sign + '₹' + rest.replace(/\B(?=(\d{2})+(?!\d))/g, ',') + lastThree;
    }
    function fmtDate(d) {
        if (!(d instanceof Date) || isNaN(d.getTime())) return '—';
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
    }
    function daysBetween(a, b) {
        return Math.round((b.getTime() - a.getTime()) / 86400000);
    }
    function addDays(d, n) {
        var r = new Date(d.getTime());
        r.setDate(r.getDate() + n);
        return r;
    }

    // ─── Drawback toggle ──────────────────────────────────────────
    var dbkToggle = $('drawback-toggle');
    if (dbkToggle) {
        dbkToggle.addEventListener('click', function(e) {
            var btn = e.target.closest('.toggle-btn');
            if (!btn) return;
            var btns = dbkToggle.querySelectorAll('.toggle-btn');
            for (var i = 0; i < btns.length; i++) btns[i].classList.remove('active');
            btn.classList.add('active');
            state.drawback = btn.getAttribute('data-value');
        });
    }

    // ─── FAQ accordion ────────────────────────────────────────────
    var faqQs = document.querySelectorAll('.faq-question');
    for (var i = 0; i < faqQs.length; i++) {
        faqQs[i].addEventListener('click', function() {
            var item = this.parentElement;
            var expanded = this.getAttribute('aria-expanded') === 'true';
            item.classList.toggle('open');
            this.setAttribute('aria-expanded', expanded ? 'false' : 'true');
        });
    }

    // ─── Calculator core ──────────────────────────────────────────
    function compute() {
        // Read inputs
        var period = $('export-period').value;
        var numSB = parseINR($('num-sb').value) || 0;
        var exportValue = parseINR($('export-value').value) || 0;
        var igstRate = parseINR($('igst-rate').value) || 0;
        var igst1 = parseINR($('igst-1').value) || 0;
        var igst3b = parseINR($('igst-3b').value) || 0;
        var sbDate = $('sb-date').value ? new Date($('sb-date').value) : null;
        var ackDate = $('ack-date').value ? new Date($('ack-date').value) : null;

        // Checklist
        var checks = {
            gstr3b: $('chk-3b').checked,
            gstr1:  $('chk-1').checked,
            egm:    $('chk-egm').checked,
            pfms:   $('chk-pfms').checked,
            invMatch: $('chk-inv').checked,
            portMatch: $('chk-port').checked,
            gstinMatch: $('chk-gstin').checked,
            icdEgm: $('chk-icd').checked
        };

        // Derived figures
        var computedIGST = Math.round(exportValue * igstRate / 100);
        var reconOK = igst3b >= igst1 && igst1 > 0;
        var reconShort = Math.max(0, igst1 - igst3b);

        // Drawback logic
        var dbkBlocked = state.drawback === 'higher';
        var dbkOK = state.drawback === 'none' || state.drawback === 'lower';

        // Determine verdict & predicted code
        var blockers = [];
        var predictedCode = 'SB000';
        var verdictType = 'green';   // green | amber | red
        var refundAdmissible = igst1;

        // Hard blockers (refund zero)
        if (!checks.gstr3b) {
            blockers.push('GSTR-3B not filed — GSTN cannot transmit data to ICEGATE.');
            predictedCode = '— (No transmission)';
            verdictType = 'red';
            refundAdmissible = 0;
        }
        if (!checks.gstr1) {
            blockers.push('GSTR-1 / Table 6A not filed — invoice data not available for matching.');
            predictedCode = '— (No transmission)';
            verdictType = 'red';
            refundAdmissible = 0;
        }
        if (!reconOK && (igst1 > 0 || igst3b > 0)) {
            blockers.push('IGST in 3B Table 3.1(b) (' + fmtINR(igst3b) + ') is less than IGST in 1/6A (' + fmtINR(igst1) + '). Pay differential ' + fmtINR(reconShort) + ' via DRC-03 with Section 50 interest.');
            predictedCode = '— (Not transmitted by GSTN)';
            verdictType = 'red';
            refundAdmissible = 0;
        }
        if (dbkBlocked) {
            blockers.push('Higher composite rate of drawback claimed — IGST refund barred (double-benefit rule). No refund admissible.');
            predictedCode = '— (Drawback bar)';
            verdictType = 'red';
            refundAdmissible = 0;
        }

        // SB-level errors (refund stuck, not zero)
        if (refundAdmissible > 0) {
            if (!checks.egm) {
                predictedCode = 'SB002';
                blockers.push('EGM not filed — refund cannot be processed until shipping line files Export General Manifest.');
                verdictType = 'red';
            } else if (!checks.gstinMatch) {
                predictedCode = 'SB003';
                blockers.push('GSTIN on shipping bill differs from GSTIN in returns. Apply through Officer Interface for manual sanction.');
                verdictType = 'amber';
            } else if (!checks.invMatch) {
                predictedCode = 'SB005';
                blockers.push('Invoice number mismatch between SB and GSTR-1 Table 6A. Use Officer Interface (Circular 5/2018-Cus + 5/2021-Cus).');
                verdictType = 'amber';
            } else if (!checks.icdEgm) {
                predictedCode = 'SB006';
                blockers.push('Gateway EGM pending for ICD shipment. Coordinate with shipping line and ICD custodian.');
                verdictType = 'amber';
            } else if (!checks.portMatch) {
                predictedCode = 'SB001 / SB104';
                blockers.push('Port code mismatch between SB and GSTR-1. Amend via GSTR-1 Table 9A.');
                verdictType = 'amber';
            }
            if (predictedCode === 'SB000' && !checks.pfms) {
                predictedCode = 'SB000 (PFMS pending)';
                blockers.push('Bank account not validated in PFMS — scroll will generate but disbursal will fail. Update via Form A and ICEGATE.');
                verdictType = 'amber';
            }
        }

        // Timeline computations
        var limitDate = sbDate ? new Date(sbDate.getFullYear() + 2, sbDate.getMonth(), sbDate.getDate()) : null;
        var sixtyDayDate = ackDate ? addDays(ackDate, 60) : null;
        var today = new Date();
        var daysToLimit = (limitDate) ? daysBetween(today, limitDate) : null;
        var timeBarred = limitDate && today > limitDate;

        if (timeBarred) {
            blockers.push('Two-year limitation under Section 54(1) has expired (relevant date = SB date). Refund time-barred.');
            verdictType = 'red';
            refundAdmissible = 0;
        } else if (daysToLimit !== null && daysToLimit < 60) {
            blockers.push('Less than 60 days remaining before two-year limitation expires — file pending GSTR returns urgently.');
            if (verdictType === 'green') verdictType = 'amber';
        }

        // ETA
        var etaText;
        if (refundAdmissible === 0) {
            etaText = 'Blocked';
        } else if (predictedCode === 'SB000') {
            etaText = '2-6 weeks';
        } else if (predictedCode.indexOf('PFMS') >= 0) {
            etaText = '4-8 weeks';
        } else if (predictedCode === 'SB002' || predictedCode === 'SB006') {
            etaText = '4-12 weeks';
        } else if (predictedCode === 'SB003' || predictedCode === 'SB005') {
            etaText = '6-12 weeks (Officer Interface)';
        } else {
            etaText = '8-16 weeks';
        }

        // Set verdict card colour and text
        var vCard = $('verdict');
        vCard.classList.remove('amber', 'red', 'blue');
        if (verdictType === 'red') vCard.classList.add('red');
        else if (verdictType === 'amber') vCard.classList.add('amber');

        // Verdict headlines
        var headlines = {
            green: 'Refund Eligible — Auto-Processing',
            amber: 'Refund Eligible But Stuck',
            red:   'Refund Blocked — Action Required'
        };
        var subs = {
            green: 'All checks pass. ICEGATE will issue SB000 and the refund will flow through the IGST scroll.',
            amber: 'Refund is admissible but processing is held due to a technical mismatch. Officer Interface or amendment required.',
            red:   'Refund is not admissible until the blocker(s) below are resolved. Check the action list and re-run.'
        };

        $('verdict-headline').textContent = headlines[verdictType];
        $('verdict-sub').textContent = subs[verdictType];
        $('v-refund').textContent = fmtINR(refundAdmissible);
        $('v-code').textContent = predictedCode;
        $('v-eta').textContent = etaText;

        // Reconciliation basis
        var basis = '<strong>Refund admissible</strong> = IGST declared in GSTR-1 Table 6A (' + fmtINR(igst1) + ') ';
        if (igst3b < igst1) basis += ', capped at IGST paid in GSTR-3B Table 3.1(b) (' + fmtINR(igst3b) + ').';
        else basis += ', supported by IGST paid in GSTR-3B Table 3.1(b) (' + fmtINR(igst3b) + ').';
        basis += '<br><br><strong>Computed IGST on exports</strong> = Export value (' + fmtINR(exportValue) + ') × IGST rate (' + igstRate + '%) = ' + fmtINR(computedIGST) + '. ';
        if (Math.abs(computedIGST - igst1) > 100) basis += 'Computed value differs from declared 6A figure — reconcile invoice rates.';
        else basis += 'Computed value aligns with declared 6A figure.';
        $('basis-text').innerHTML = basis;

        // Summary cards
        $('s-1').textContent = fmtINR(igst1);
        $('s-3b').textContent = fmtINR(igst3b);
        $('s-comp').textContent = fmtINR(computedIGST);
        $('s-recon').textContent = reconOK ? 'Pass (3B ≥ 6A)' : 'Fail (Short ' + fmtINR(reconShort) + ')';
        $('s-dbk').textContent = (state.drawback === 'none') ? 'No drawback'
                              : (state.drawback === 'lower') ? 'Lower rate (OK)'
                              : 'Higher rate (Blocked)';
        $('s-refund').textContent = fmtINR(refundAdmissible);

        // Timeline values
        $('t-limit').textContent = fmtDate(limitDate);
        $('t-60').textContent = fmtDate(sixtyDayDate);
        $('t-int').textContent = '6% p.a. (Sec 56)';
        $('t-days').textContent = (daysToLimit === null) ? '—' : daysToLimit + ' days';

        // Alerts
        var alertsDiv = $('alerts');
        alertsDiv.innerHTML = '';
        for (var i = 0; i < blockers.length; i++) {
            var cls = (verdictType === 'red') ? 'danger' : (verdictType === 'amber' ? 'warn' : 'info');
            var div = document.createElement('div');
            div.className = 'info-banner ' + cls;
            div.innerHTML = '<strong>Action Required:</strong> ' + blockers[i];
            alertsDiv.appendChild(div);
        }
        if (verdictType === 'green') {
            var ok = document.createElement('div');
            ok.className = 'info-banner success';
            ok.innerHTML = '<strong>All clear:</strong> Reconciliation passes, all compliance checks tick, no drawback conflict and no time-bar concern. Expect SB000 scroll and PFMS credit within 2–6 weeks.';
            alertsDiv.appendChild(ok);
        }

        // ICEGATE validation trace table
        var checkList = [
            { name: 'GSTR-3B filed for period', pass: checks.gstr3b },
            { name: 'GSTR-1 / Table 6A filed', pass: checks.gstr1 },
            { name: 'IGST 3B ≥ IGST 1/6A', pass: reconOK },
            { name: 'EGM filed by shipping line', pass: checks.egm },
            { name: 'GSTIN consistent on SB & returns', pass: checks.gstinMatch },
            { name: 'Invoice number match (SB ↔ 6A)', pass: checks.invMatch },
            { name: 'Port code match (SB ↔ 6A)', pass: checks.portMatch },
            { name: 'Gateway EGM (if ICD)', pass: checks.icdEgm },
            { name: 'PFMS bank account validated', pass: checks.pfms },
            { name: 'Drawback compatibility', pass: dbkOK },
            { name: 'Within 2-year limitation', pass: !timeBarred }
        ];
        var traceBody = $('trace-body');
        traceBody.innerHTML = '';
        for (var j = 0; j < checkList.length; j++) {
            var tr = document.createElement('tr');
            var c = checkList[j];
            tr.innerHTML = '<td>' + c.name + '</td>'
                         + '<td>' + (c.pass ? '<span style="color:#86EFAC">✓ Pass</span>' : '<span style="color:#FCA5A5">✗ Fail</span>') + '</td>'
                         + '<td>' + (c.pass ? 'OK' : 'Blocking — see action list above') + '</td>';
            traceBody.appendChild(tr);
        }

        // Show results
        $('results').classList.add('visible');
        $('results').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // ─── Reset ─────────────────────────────────────────────────────
    function reset() {
        $('export-period').value = '2026-04';
        $('num-sb').value = 1;
        $('export-value').value = 5000000;
        $('igst-rate').value = 18;
        $('igst-1').value = 900000;
        $('igst-3b').value = 900000;
        $('sb-date').value = '2026-04-15';
        $('ack-date').value = '2026-05-20';
        var checkboxes = ['chk-3b','chk-1','chk-egm','chk-pfms','chk-inv','chk-port','chk-gstin','chk-icd'];
        for (var i = 0; i < checkboxes.length; i++) $(checkboxes[i]).checked = true;
        var btns = dbkToggle.querySelectorAll('.toggle-btn');
        for (var j = 0; j < btns.length; j++) btns[j].classList.remove('active');
        btns[0].classList.add('active');
        state.drawback = 'none';
        $('results').classList.remove('visible');
    }

    $('btn-calculate').addEventListener('click', compute);
    $('btn-reset').addEventListener('click', reset);

    // ─── TOC active state on scroll ───────────────────────────────
    var tocLinks = document.querySelectorAll('.toc-nav a');
    var sections = [];
    for (var i = 0; i < tocLinks.length; i++) {
        var id = tocLinks[i].getAttribute('href').substring(1);
        var el = document.getElementById(id);
        if (el) sections.push({ id: id, el: el, link: tocLinks[i] });
    }
    function updateActive() {
        var scrollPos = window.scrollY + 120;
        var active = sections[0];
        for (var i = 0; i < sections.length; i++) {
            if (sections[i].el.offsetTop <= scrollPos) active = sections[i];
        }
        for (var j = 0; j < tocLinks.length; j++) tocLinks[j].classList.remove('active');
        if (active && active.link) active.link.classList.add('active');
    }
    window.addEventListener('scroll', updateActive, { passive: true });
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
