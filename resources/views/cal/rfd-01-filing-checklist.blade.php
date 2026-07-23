@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>RFD-01 Checklist | GST Refund Pre-Filing under Sec 54</title>
    <meta name="description" content="RFD-01 pre-filing checklist: verify documents, statements, eligibility and limitation across 10 GST refund categories under Section 54. Free CA-grade tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/rfd-01-filing-checklist/">
    <meta property="og:title" content="RFD-01 Pre-Filing Checklist — GST Refund Readiness Tool 2026">
    <meta property="og:description" content="Verify your RFD-01 application is complete before filing. Category-specific checklist, statement requirements, limitation tracker, deficiency-memo prevention. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/rfd-01-filing-checklist">
    <meta property="og:image" content="/tools/og/rfd-01-filing-checklist.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RFD-01 Pre-Filing Checklist — GST Refund Readiness Tool 2026">
    <meta name="twitter:description" content="10 categories. Statements 1A-7. Limitation tracker. Provisional refund eligibility under Instruction 06/2025. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/rfd-01-filing-checklist.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "RFD-01 Pre-Filing Checklist (GST Refund Readiness)",
      "description": "RFD-01 Pre-Filing Checklist verifies that a GST refund application is complete and ready for submission on the GST portal under Section 54 of the Central Goods and Services Tax Act, 2017 read with Rule 89 of the Central Goods and Services Tax Rules, 2017. The tool covers all ten categories of GST refund supported through Form GST RFD-01: refund of unutilised Input Tax Credit on account of zero-rated supplies under the Letter of Undertaking route as per Section 54(3)(i) and Rule 89(4); refund of tax paid on zero-rated supplies under the Integrated Goods and Services Tax route as per Rule 96; refund of unutilised Input Tax Credit on account of supplies to Special Economic Zone unit or developer without payment of tax; refund of tax paid on supplies to Special Economic Zone unit or developer with payment of tax; refund of unutilised Input Tax Credit accumulated due to Inverted Duty Structure under Section 54(3)(ii) and Rule 89(5); refund on account of deemed exports as per Notification No. 48/2017-Central Tax; refund of excess balance in the electronic cash ledger; refund of excess tax paid by mistake; refund on account of any assessment, provisional assessment, appeal or any other order; and refund under any other category not specified above. The tool generates a readiness score, identifies missing documents and statements, computes the two-year limitation under Section 54(1) from the relevant date applicable to the selected category, computes the sixty-day final order window under Section 54(7), flags Section 56 interest entitlement at six per cent per annum for delayed sanction, checks eligibility for the ninety per cent provisional refund under Rule 91(2) as amended by Notification No. 13/2025-Central Tax effective 1 October 2025 and CBIC Instruction No. 06/2025-GST extending provisional refund to Inverted Duty Structure claims, and validates Aadhaar authentication and risk-flagging exclusions under Notification No. 14/2025-Central Tax. The tool incorporates the prerequisite filing of Form GSTR-1 and Form GSTR-3B for the relevant period, the requirement of a registered Letter of Undertaking in Form RFD-11 for zero-rated supplies without payment, the documentary requirements of Statement-1A, Statement-2, Statement-3, Statement-3A, Statement-4, Statement-5, Statement-5A, Statement-5B, Statement-6 and Statement-7 prescribed under Rule 89, the Annexure-A self-declaration, the Annexure-B for invoice-wise input details, and the Chartered Accountant or Cost Accountant certification under Annexure-2 of Circular No. 125/44/2019-GST mandatory where the refund claim exceeds two lakh rupees.",
      "url": "/tools/rfd-01-filing-checklist",
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
        {"@type": "ListItem", "position": 3, "name": "RFD-01 Pre-Filing Checklist", "item": "/tools/rfd-01-filing-checklist"}
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
          "name": "What is Form GST RFD-01 and who must file it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form GST RFD-01 is the standard online refund application filed under Section 54 of the CGST Act read with Rule 89. It is filed by any registered person seeking refund of unutilised Input Tax Credit, excess balance in the electronic cash ledger, excess tax paid, or refund under specific categories such as exports, supplies to SEZ, deemed exports and inverted duty structure. The application must be filed electronically on the GST common portal with prescribed statements and supporting documents."
          }
        },
        {
          "@type": "Question",
          "name": "How many categories of refund are supported through RFD-01?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form RFD-01 supports ten primary refund categories: exports of goods or services without payment of tax (LUT route), exports with payment of IGST, supplies to SEZ unit or developer without payment of tax, supplies to SEZ with payment of tax, accumulated ITC due to inverted duty structure, deemed exports, excess balance in electronic cash ledger, excess tax paid by mistake, refund on assessment or appellate order, and any other category. Each category has prescribed statements per Rule 89."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time limit for filing RFD-01 application?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(1) prescribes a two-year limitation from the relevant date for filing any refund claim. The relevant date varies by category — date of shipping bill for export of goods, date of receipt of payment for export of services, date of return for inverted duty structure, date of payment for excess tax, date of order for assessment-based refunds. Notification 13/2022-Central Tax excluded the period from 1 March 2020 to 28 February 2022 from limitation computation."
          }
        },
        {
          "@type": "Question",
          "name": "Is GSTR-1 and GSTR-3B filing mandatory before RFD-01?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Per Circular No. 125/44/2019-GST, both GSTR-1 and GSTR-3B for the tax period to which the refund claim relates must be filed before submitting Form RFD-01. The portal also requires that all returns up to the date of refund application be filed without any pending GSTR-3B. The Refund Pre-Application Form must also be filed to validate bank account details linked to the GSTIN before the actual RFD-01 submission."
          }
        },
        {
          "@type": "Question",
          "name": "When is CA or CMA certification mandatory for RFD-01?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Per Annexure-2 of Circular 125/44/2019-GST, a certificate from a Chartered Accountant or a Cost and Management Accountant is mandatory for refund claims exceeding rupees two lakhs in respect of refund categories of inverted duty structure, deemed exports, excess balance in cash ledger above the threshold, and any other refund where the proper officer requires it. The certificate confirms tax incidence has not been passed on. CA or CMA certification is not required for export refunds under LUT route."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 90 per cent provisional refund under Rule 91?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 91 read with Section 54(6) provides for sanction of ninety per cent of the refund amount on a provisional basis within seven days of acknowledgement, with the balance ten per cent released after detailed scrutiny. From 1 October 2025, Notification 13/2025-Central Tax introduced system-driven risk evaluation for provisional sanction, and CBIC Instruction No. 06/2025-GST extended the provisional refund mechanism from zero-rated supplies to inverted duty structure claims as a trade-facilitation measure."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are common across all RFD-01 categories?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common documents required for all RFD-01 categories include the Refund Pre-Application Form for bank validation, Annexure-A self-declaration confirming no incidence of tax has been passed on, copies of GSTR-1 and GSTR-3B for the period, electronic credit ledger or cash ledger statement, declaration of non-prosecution, undertaking under Rule 89(2)(l) of CGST Rules, and validated bank account details linked to the GSTIN. DSC or EVC is required for digital signing of the application."
          }
        },
        {
          "@type": "Question",
          "name": "What is Statement-3 versus Statement-3A for export refunds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statement-3 contains invoice-wise details of zero-rated supplies for which refund is claimed under the LUT route — including export invoices, shipping bill numbers, port codes, FOB values, and BRC or FIRC details for service exports. Statement-3A is the working sheet for computing Net ITC and the Maximum Refund Amount as per Rule 89(4) formula. Both statements must be uploaded with Form RFD-01 for export of goods or services without payment of IGST."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim refund without an LUT for export supplies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. For export of goods or services or supplies to SEZ without payment of IGST, a registered Letter of Undertaking in Form GST RFD-11 valid for the financial year is mandatory under Rule 96A of CGST Rules. The LUT must be filed before the export takes place. Without a registered LUT, the supply is treated as taxable and IGST must be paid; the refund route then shifts to Rule 96 (auto via shipping bill) or RFD-01 with payment of IGST."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my RFD-01 has deficiencies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If the proper officer finds the application deficient, a deficiency memo is issued in Form GST RFD-03 within fifteen days of filing, with reasons specified. The applicant must rectify the deficiencies and file a fresh application; the original application is treated as non-existent. The two-year limitation under Section 54(1) does not stop running while deficiency is being rectified — taxpayers must respond promptly. Common deficiencies include missing statements, ITC reconciliation gaps and bank validation failures."
          }
        },
        {
          "@type": "Question",
          "name": "What is Annexure-B and when is it required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Annexure-B is an invoice-wise statement of inputs and input services on which Input Tax Credit was availed during the relevant period, required for refund claims based on accumulated ITC including export under LUT, SEZ supplies without tax and inverted duty structure. The annexure must be self-certified by the applicant and contains GSTIN of supplier, invoice number and date, taxable value, IGST or CGST and SGST amount, and HSN classification. Annexure-B is uploaded with Form RFD-01 in PDF format."
          }
        },
        {
          "@type": "Question",
          "name": "How is refund of excess balance in electronic cash ledger different?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Refund of excess balance in the electronic cash ledger is the simplest category of RFD-01 — it requires only Statement-7 with cash ledger balance details, declaration of non-prosecution, and bank account validation. No CA certificate is required regardless of the amount. The relevant date for limitation is the date of payment of tax or deposit. The balance must be unutilised against any output liability and not part of any pending demand. Provisional refund mechanism does not apply."
          }
        },
        {
          "@type": "Question",
          "name": "What are common reasons for RFD-01 rejection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common rejection grounds include mismatched figures between GSTR-1 Table 6A and GSTR-3B Table 3.1(b) for exports, missing or incorrectly filled statements, ITC claimed on capital goods or input services for inverted duty refund, expired LUT for export supplies, refund claimed for restricted goods under Notification 5/2017 or 9/2022, application beyond two-year limitation, bank account not validated through PFMS, and inadequate evidence of inverted rate structure or export receipt. Most rejections can be avoided by thorough pre-filing checks."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim refund after filing a NIL refund claim earlier?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, subject to two conditions per Circular 110/29/2019-GST. First, a NIL refund claim must have been filed in Form RFD-01 for the period under the same category. Second, no refund claim under the same category should have been filed for any subsequent period. If both conditions are met, the registered person may file a fresh refund claim for the original period, treating the NIL claim as withdrawn. This relaxation covers exports without tax, SEZ without tax, and IDS."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 60-day window under Section 54(7) and Section 56 interest?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54(7) requires the proper officer to issue the final refund order in Form GST RFD-06 within sixty days of receipt of the complete application. If the refund is delayed beyond sixty days, Section 56 mandates simple interest at six per cent per annum from day 61 till refund credit date. If the refund arises from an appellate order, the rate of interest increases to nine per cent per annum. Interest is auto-computed and credited with the refund."
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

        .step-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1.5px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .step-label:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .step-label .num { background: var(--accent); color: #fff; padding: 2px 8px; border-radius: 12px; margin-right: 6px; }

        .category-grid { display: grid; grid-template-columns: 1fr; gap: 10px; margin-bottom: 16px; }
        @media (min-width: 600px) { .category-grid { grid-template-columns: 1fr 1fr; } }
        .cat-tile { background: var(--surface); border: 2px solid var(--border); border-radius: var(--radius); padding: 14px 16px; cursor: pointer; transition: all 0.2s; -webkit-tap-highlight-color: transparent; }
        .cat-tile * { pointer-events: none; }
        .cat-tile:hover { border-color: var(--primary-light); }
        .cat-tile.selected { border-color: var(--primary); background: #F0F5FB; }
        .cat-title { font-size: 14px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .cat-sub { font-size: 12px; color: var(--text-muted); line-height: 1.45; }

        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 16px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group input[type="date"] { font-family: var(--font-body); font-size: 15px; font-weight: 500; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }

        .checklist-section { background: var(--surface); border-radius: var(--radius); padding: 16px 18px; margin-bottom: 14px; border: 1px solid var(--border); }
        .checklist-section h4 { font-size: 13px; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px; padding-bottom: 8px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; gap: 10px; }
        .checklist-section h4 .count { font-family: var(--font-mono); font-size: 11px; color: var(--text-muted); font-weight: 600; }
        .checklist-section h4.cat-specific { color: var(--info); }
        .checklist-section h4.docs { color: var(--accent); color: #b45309; }

        .check-item { display: flex; align-items: flex-start; gap: 10px; padding: 10px 12px; background: var(--card); border: 1px solid var(--border); border-radius: 8px; margin-bottom: 6px; transition: all 0.2s; cursor: pointer; }
        .check-item:hover { border-color: var(--primary-light); }
        .check-item.checked { background: #F0F5FB; border-color: var(--success); }
        .check-item input[type="checkbox"] { width: 18px; height: 18px; margin-top: 2px; accent-color: var(--primary); cursor: pointer; flex-shrink: 0; }
        .check-item label { font-size: 13px; color: var(--text); cursor: pointer; line-height: 1.45; flex: 1; text-transform: none; letter-spacing: 0; margin: 0; font-weight: 500; }
        .check-item label .sub { display: block; font-size: 11px; color: var(--text-muted); margin-top: 2px; font-weight: 400; }
        .check-item label .ref { display: inline-block; background: var(--primary); color: #fff; font-size: 9px; font-weight: 700; padding: 1px 6px; border-radius: 4px; margin-right: 4px; vertical-align: middle; }
        .check-item label .ref.warn { background: var(--accent); color: var(--primary-dark); }
        .check-item label .ref.info { background: var(--info); }
        .check-item label .ref.danger { background: var(--danger); }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }

        .progress-bar { background: var(--surface-alt); border-radius: 20px; height: 12px; overflow: hidden; margin-bottom: 8px; }
        .progress-fill { height: 100%; background: linear-gradient(90deg, var(--primary), var(--primary-light)); border-radius: 20px; transition: width 0.4s ease; width: 0%; }
        .progress-fill.amber { background: linear-gradient(90deg, var(--accent), var(--accent-light)); }
        .progress-fill.danger { background: linear-gradient(90deg, var(--danger), #F87171); }
        .progress-meta { display: flex; justify-content: space-between; font-family: var(--font-mono); font-size: 12px; color: var(--text-muted); margin-bottom: 16px; }
        .progress-meta strong { color: var(--primary-dark); }

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

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 14px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .info-banner strong { font-weight: 700; }

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
        .disclosure-block ul { margin: 8px 0 0 16px; padding: 0; }
        .disclosure-block li { font-size: 12px; line-height: 1.7; margin-bottom: 4px; color: #E8EEF5; list-style: square; }
        .disclosure-block li.missing { color: #FCA5A5; }
        .disclosure-block li.done { color: #6EE7B7; text-decoration: line-through; opacity: 0.7; }
        @media (max-width: 600px) { .disclosure-block { font-size: 11px; padding: 14px 16px; } }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }

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
        <a href="#checklist">Checklist</a>
        <a href="#categories">10 Categories</a>
        <a href="#statements">Statements 1A-7</a>
        <a href="#common-docs">Common Documents</a>
        <a href="#provisional">90% Provisional</a>
        <a href="#limitation">Limitation Tracker</a>
        <a href="#rejection">Common Rejections</a>
        <a href="#deficiency">Deficiency Memo</a>
        <a href="#filing-steps">Filing Steps</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    RFD-01 Pre-Filing Checklist
</nav>

<header class="hero" id="checklist">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>RFD-01 Pre-Filing Checklist — <span>GST Refund Readiness</span> Across 10 Categories (FY 2025-26)</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20RFD-01%20Pre-Filing%20Checklist.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=RFD-01%20Pre-Filing%20Checklist%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20RFD-01%20Pre-Filing%20Checklist.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This RFD-01 Pre-Filing Checklist verifies that your GST refund application is complete and ready for submission on the GST common portal under <strong><a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/acts/cgst-act/active/chapter11/section54.html" rel="noopener" target="_blank">Section 54 of the CGST Act</a></strong> read with <strong>Rule 89</strong>. The tool covers all <strong>10 refund categories</strong> — exports under LUT, exports with IGST, SEZ supplies (with and without tax), inverted duty structure, deemed exports, excess cash ledger, excess tax paid, assessment-based refunds and any other category. It generates a <strong>readiness score</strong>, lists missing documents and statements, computes the <strong>2-year limitation</strong> from category-specific relevant dates per Section 54(1), checks eligibility for the <strong>90% provisional refund</strong> under Rule 91(2) extended to IDS by CBIC Instruction 06/2025-GST from 1 October 2025, and flags Aadhaar authentication and risk-based exclusions under Notification 14/2025-CT. Pair this with our <a href="/tools/export-refund-lut-calculator">LUT</a>, <a href="/tools/igst-export-refund-calculator">IGST</a> or <a href="/tools/inverted-duty-refund-calculator">IDS</a> calculators to compute the actual refund amount.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>RFD-01 Pre-Filing Checklist</h2>
            <p class="calc-intro">Select your refund category, enter the period and application date, then tick each item as you confirm readiness. The tool dynamically renders the category-specific checklist on top of the common pre-filing checks, computes the limitation window, and generates a readiness scorecard showing what is still pending.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this checklist tool.</div></noscript>

            <div class="step-label"><span class="num">1</span>Refund Category</div>
            <div class="category-grid" id="cat-grid">
                <div class="cat-tile selected" data-cat="export-lut">
                    <div class="cat-title">Exports under LUT (without payment)</div>
                    <div class="cat-sub">Section 54(3)(i) · Rule 89(4) · Statement-3 / 3A</div>
                </div>
                <div class="cat-tile" data-cat="export-igst">
                    <div class="cat-title">Exports with payment of IGST</div>
                    <div class="cat-sub">Rule 96 (auto via SB) · RFD-01 only for stuck cases</div>
                </div>
                <div class="cat-tile" data-cat="sez-lut">
                    <div class="cat-title">SEZ supplies without payment of tax</div>
                    <div class="cat-sub">Rule 89(4) · Statement-5 / 5A · LUT required</div>
                </div>
                <div class="cat-tile" data-cat="sez-igst">
                    <div class="cat-title">SEZ supplies with payment of IGST</div>
                    <div class="cat-sub">Statement-4 · Endorsement from Specified Officer</div>
                </div>
                <div class="cat-tile" data-cat="ids">
                    <div class="cat-title">Inverted Duty Structure (accumulated ITC)</div>
                    <div class="cat-sub">Section 54(3)(ii) · Rule 89(5) · Statement-1A · 90% provisional from 1 Oct 2025</div>
                </div>
                <div class="cat-tile" data-cat="deemed">
                    <div class="cat-title">Deemed Exports (Notification 48/2017-CT)</div>
                    <div class="cat-sub">Statement-5B · Recipient declarations · Annexure-A</div>
                </div>
                <div class="cat-tile" data-cat="excess-cash">
                    <div class="cat-title">Excess balance in Electronic Cash Ledger</div>
                    <div class="cat-sub">Statement-7 · Simplest category · No CA cert needed</div>
                </div>
                <div class="cat-tile" data-cat="excess-tax">
                    <div class="cat-title">Excess tax paid by mistake</div>
                    <div class="cat-sub">Statement-6 · Reason for excess · Self-certified</div>
                </div>
                <div class="cat-tile" data-cat="order">
                    <div class="cat-title">Refund on assessment / appeal / order</div>
                    <div class="cat-sub">Order copy · Pre-deposit verification · Section 56(9%)</div>
                </div>
                <div class="cat-tile" data-cat="other">
                    <div class="cat-title">Any other category</div>
                    <div class="cat-sub">Custom statement · Specify reason · Supporting docs</div>
                </div>
            </div>

            <div class="step-label"><span class="num">2</span>Period &amp; Application Date</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="period">Tax Period (Refund Relates To)</label>
                    <input type="month" id="period" value="2026-04">
                    <span class="helper">The GSTR-3B period to which the refund claim relates.</span>
                </div>
                <div class="form-group">
                    <label for="ack-date">Intended Application Date</label>
                    <input type="date" id="ack-date" value="2026-05-25">
                    <span class="helper">Date of filing RFD-01 / acknowledgement in RFD-02.</span>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="refund-amt">Estimated Refund Amount (₹)</label>
                    <input type="text" id="refund-amt" value="500000" min="0" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Approximate amount — used to flag CA certification (above ₹2 lakh) and provisional refund.</span>
                </div>
                <div class="form-group">
                    <label for="aadhaar">Aadhaar Authentication (Rule 10B)</label>
                    <select id="aadhaar">
                        <option value="yes" selected>Yes — Authenticated</option>
                        <option value="no">No — Not Authenticated</option>
                    </select>
                    <span class="helper">Required for provisional refund eligibility from 1 Oct 2025 per Notif 14/2025-CT.</span>
                </div>
            </div>

            <div class="step-label"><span class="num">3</span>Common Pre-Filing Checklist</div>
            <div class="checklist-section">
                <h4>Universal Items <span class="count" id="common-count">0/10</span></h4>
                <div id="common-checks"></div>
            </div>

            <div class="step-label"><span class="num">4</span>Category-Specific Checklist</div>
            <div class="checklist-section">
                <h4 class="cat-specific" id="cat-specific-title">Exports under LUT — Specific Items <span class="count" id="cat-count">0/0</span></h4>
                <div id="cat-checks"></div>
            </div>

            <div class="step-label"><span class="num">5</span>Documents &amp; Statements</div>
            <div class="checklist-section">
                <h4 class="docs" id="docs-title">Required Documents <span class="count" id="docs-count">0/0</span></h4>
                <div id="docs-checks"></div>
            </div>

            <button type="button" class="btn-calculate" id="btn-calculate">Generate Readiness Report</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset Checklist</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdict">
                    <div class="verdict-label">Readiness Verdict</div>
                    <div class="verdict-headline" id="verdict-headline">—</div>
                    <div class="verdict-sub" id="verdict-sub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Readiness Score</div>
                            <div class="verdict-grid-value" id="v-score">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Items Pending</div>
                            <div class="verdict-grid-value" id="v-pending">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Provisional Refund</div>
                            <div class="verdict-grid-value" id="v-prov">—</div>
                        </div>
                    </div>
                </div>

                <div class="progress-bar"><div class="progress-fill" id="progress-fill"></div></div>
                <div class="progress-meta">
                    <span>Overall Readiness</span>
                    <span><strong id="progress-text">0%</strong> · <span id="progress-detail">0 of 0 items complete</span></span>
                </div>

                <div id="alerts"></div>

                <div class="timeline-card">
                    <h4>Section 54 &amp; 56 Timeline</h4>
                    <div class="timeline-grid">
                        <div class="timeline-item">
                            <div class="lbl">Relevant Date</div>
                            <div class="val" id="t-rel">—</div>
                            <div class="sub">Per category — start of 2-year window.</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">Limitation Expiry</div>
                            <div class="val" id="t-limit">—</div>
                            <div class="sub">Last date to file under Section 54(1).</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">60-Day Final Order Due</div>
                            <div class="val" id="t-60">—</div>
                            <div class="sub">From application date per Section 54(7).</div>
                        </div>
                        <div class="timeline-item">
                            <div class="lbl">Days to Limitation</div>
                            <div class="val" id="t-days">—</div>
                            <div class="sub">From today till expiry.</div>
                        </div>
                    </div>
                </div>

                <div class="disclosure-block">
                    <span class="dl-label">Pending Items — Action List</span>
                    <ul id="pending-list">
                        <li>Run readiness check to populate this list.</li>
                    </ul>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Refund Category</div>
                        <div class="summary-value" id="s-cat">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Tax Period</div>
                        <div class="summary-value" id="s-period">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Refund Amount</div>
                        <div class="summary-value" id="s-amt">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">CA Certification</div>
                        <div class="summary-value" id="s-ca">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Items Verified</div>
                        <div class="summary-value" id="s-done">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Filing Readiness</div>
                        <div class="summary-value" id="s-ready">—</div>
                    </div>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — RFD-01 Pre-Filing Checklist validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20RFD-01%20Pre-Filing%20Checklist.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=RFD-01%20Pre-Filing%20Checklist%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20RFD-01%20Pre-Filing%20Checklist%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="categories">
            <h2>RFD-01 — The 10 Refund Categories Explained</h2>
            <p>Form GST RFD-01 is the unified electronic refund application introduced under <a href="https://taxinformation.cbic.gov.in/content/html/tax_repository/gst/rules/cgst_rules/active/chapter10/rule89_v1.00.html" rel="noopener" target="_blank">Rule 89 of the CGST Rules</a>. The portal currently supports ten distinct refund categories, each with its own statement template, documentary requirements, statutory basis and limitation rules. Selecting the correct category at filing is critical — once selected, the system locks the statement template and downstream validations.</p>
            <h3>Category-wise Quick Reference</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Category</th><th>Statement</th><th>Statutory Basis</th><th>Relevant Date</th></tr>
                </thead>
                <tbody>
                    <tr><td>Exports under LUT (no IGST)</td><td>3 + 3A</td><td>S.54(3)(i) + R.89(4)</td><td>Date of shipping bill / payment receipt</td></tr>
                    <tr><td>Exports with IGST paid</td><td>2 (if RFD-01)</td><td>R.96 (auto via SB)</td><td>Date of shipping bill</td></tr>
                    <tr><td>SEZ supplies without IGST</td><td>5 + 5A</td><td>S.54(3)(i) + R.89(4)</td><td>Date of payment / receipt by SEZ</td></tr>
                    <tr><td>SEZ supplies with IGST</td><td>4</td><td>S.16 IGST Act</td><td>Date of payment / endorsement</td></tr>
                    <tr><td>Inverted Duty Structure</td><td>1A</td><td>S.54(3)(ii) + R.89(5)</td><td>GSTR-3B due date for period</td></tr>
                    <tr><td>Deemed Exports</td><td>5B</td><td>Notif 48/2017-CT</td><td>Date of return for the period</td></tr>
                    <tr><td>Excess Cash Ledger</td><td>7</td><td>S.54(1)</td><td>Date of payment</td></tr>
                    <tr><td>Excess Tax Paid</td><td>6</td><td>S.54(1)</td><td>Date of payment</td></tr>
                    <tr><td>Assessment / Order based</td><td>—</td><td>S.54 + S.107/112</td><td>Date of order communicated</td></tr>
                    <tr><td>Any Other Category</td><td>Custom</td><td>S.54</td><td>Per facts of case</td></tr>
                </tbody>
            </table>
            <p>The two-year limitation under Section 54(1) runs from the relevant date specific to the category. Notification 13/2022-Central Tax excluded the period from 1 March 2020 to 28 February 2022 from the limitation clock for COVID-affected periods. The relevant date for inverted duty structure was clarified to be the due date of the GSTR-3B for the period (not the end of the financial year as earlier interpreted) — a significant relaxation for taxpayers.</p>
        </section>

        <section class="content-section" id="statements">
            <h2>Statements 1A through 7 — What Goes in Each</h2>
            <p>Statements are pre-formatted templates downloaded from the GST portal, filled offline in Excel/CSV and uploaded with Form RFD-01. Each statement has a defined column structure mapped to the refund category. Filing the wrong statement or with formatting errors triggers a deficiency memo (Form RFD-03). The portal also runs server-side validation on uploaded statements before allowing submission.</p>
            <h3>Statement-by-Statement Reference</h3>
            <ul>
                <li><strong>Statement-1A (Inverted Duty Structure)</strong> — Working sheet for computing the maximum refund per Rule 89(5) formula. Columns include Inverted Turnover, Net ITC on inputs only, Adjusted Total Turnover, Tax Payable on inverted supply, ITC on input services, ratio factor, and final refund.</li>
                <li><strong>Statement-2 (Export of Services with IGST)</strong> — Invoice-wise details of export services on which IGST was paid. Columns: invoice number/date, GSTIN of recipient (where applicable), taxable value, IGST amount, FIRC/BRC reference and date, place of supply, EOTC reference for advance receipts.</li>
                <li><strong>Statement-3 (Exports without IGST — LUT route)</strong> — Invoice-wise zero-rated supply details. Columns: export invoice number/date, port code, shipping bill number/date, FOB value, BRC/FIRC for service exports, taxable value, currency, conversion rate.</li>
                <li><strong>Statement-3A (LUT Refund Computation)</strong> — Working sheet computing Net ITC, Turnover of Zero-Rated Supplies, Adjusted Total Turnover and Maximum Refund Amount per Rule 89(4) formula. Capped at 1.5× turnover of preceding-year similar supplies (Notification 16/2020).</li>
                <li><strong>Statement-4 (SEZ Supplies with IGST)</strong> — Invoice-wise details of supplies to SEZ unit/developer with IGST paid. Columns: SEZ unit/developer name, GSTIN, invoice number/date, IGST amount, endorsement reference from Specified Officer of SEZ.</li>
                <li><strong>Statement-5 (SEZ Supplies without IGST)</strong> — Same structure as Statement-3 but tagged for SEZ. Endorsement from Specified Officer of SEZ confirming receipt for authorised operations is mandatory. LUT in Form RFD-11 must be active.</li>
                <li><strong>Statement-5A (SEZ Refund Computation)</strong> — Working sheet computing Net ITC and Maximum Refund Amount on the same basis as Statement-3A but for SEZ supplies.</li>
                <li><strong>Statement-5B (Deemed Exports)</strong> — Invoice-wise details of deemed export supplies under Notification 48/2017-CT. Columns: recipient GSTIN, invoice number/date, IGST amount, undertaking from recipient that no ITC has been availed.</li>
                <li><strong>Statement-6 (Excess Tax Paid)</strong> — Details of tax paid in excess. Columns: original return reference, head-wise tax paid, refund claimed, reasons for excess (wrong head, wrong period, wrong GSTIN etc.), self-certified evidence.</li>
                <li><strong>Statement-7 (Excess Cash Ledger)</strong> — Cash ledger balance details with head-wise breakdown. Simplest statement — only requires balance figures and bank account confirmation.</li>
            </ul>
        </section>

        <section class="content-section" id="common-docs">
            <h2>Common Documents Required Across All Categories</h2>
            <p>Irrespective of the refund category selected, certain documents and pre-filing actions are universal. Per <a href="https://cbic-gst.gov.in/pdf/Circular-No-125-44-2019-GST.pdf" rel="noopener" target="_blank">Circular 125/44/2019-GST</a> as amended by Circular 197/2023-GST and CBIC Instruction 06/2025-GST, the common documentary base includes:</p>
            <ul>
                <li><strong>Refund Pre-Application Form</strong> filed under Services → Refunds → Refund Pre-Application — validates bank account against PFMS database and confirms it is linked to the GSTIN.</li>
                <li><strong>Annexure-A (Self-Declaration)</strong> in the format prescribed by Circular 125, confirming that the incidence of tax has not been passed on to any other person and that the refund amount, if sanctioned, will not be passed on.</li>
                <li><strong>Declaration of non-prosecution</strong> under Rule 89(2)(k) — applicant has not been prosecuted for any offence under the CGST Act involving tax evasion exceeding ₹2.5 crore in the preceding five years.</li>
                <li><strong>Undertaking under Rule 89(2)(l)</strong> — refund will be returned to the Government if found to be inadmissible at any later stage with applicable interest and penalty.</li>
                <li><strong>GSTR-1 and GSTR-3B</strong> for the tax period to which the refund relates, filed before the RFD-01 application. All returns up to the application date must also be filed.</li>
                <li><strong>Electronic Credit Ledger / Cash Ledger statement</strong> downloaded from the GST portal showing the balance for the period.</li>
                <li><strong>CA / CMA Certification</strong> in Annexure-2 of Circular 125 — mandatory where refund amount exceeds ₹2 lakh, except for refund of unutilised ITC under exports with payment of IGST and excess balance in cash ledger. The certificate confirms incidence of tax has not been passed on.</li>
                <li><strong>Annexure-B</strong> with invoice-wise input details for accumulated-ITC categories (export under LUT, SEZ without tax, IDS).</li>
                <li><strong>Validated bank account</strong> linked to the GSTIN and matched on PFMS — failure to validate triggers RFD-03 deficiency memo.</li>
                <li><strong>DSC or EVC</strong> for digital signing — proprietorship and HUF can use EVC (Aadhaar OTP); companies and LLPs must use DSC.</li>
            </ul>
            <div class="callout warn">
                <p><strong>Aadhaar authentication mandatory for provisional refund:</strong> From 1 October 2025 per Notification 14/2025-Central Tax, taxpayers not authenticated under Rule 10B are excluded from the 90% provisional refund mechanism. Complete Aadhaar authentication on the GST portal before filing RFD-01 to claim the seven-day provisional sanction benefit.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help with RFD-01 Filing?</h3>
            <p>Patron Accounting's GST refund team has filed 250+ RFD-01 applications across all 10 categories. We prepare statements, Annexure-B, CA certification and complete RFD-01 submission with deficiency memo defence.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20RFD-01%20Pre-Filing%20Checklist.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=RFD-01%20Pre-Filing%20Checklist%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20RFD-01%20Pre-Filing%20Checklist.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="provisional">
            <h2>90% Provisional Refund — CBIC Instruction 06/2025-GST</h2>
            <p>The most significant procedural reform of 2025 was the introduction of system-driven 90% provisional refund through Notification 13/2025-Central Tax dated 17 September 2025 (effective 1 October 2025) read with CBIC Instruction No. 06/2025-GST. The reform — recommended by the <a href="https://gstcouncil.gov.in/56th-gst-council-meeting" rel="noopener" target="_blank">56th GST Council</a> at its meeting on 3 September 2025 — addresses the chronic working-capital pain felt by exporters and inverted-duty manufacturers under the previous officer-discretion-led provisional refund mechanism.</p>
            <h3>What Changed on 1 October 2025</h3>
            <ul>
                <li><strong>System-based risk evaluation replaces manual scrutiny</strong> — Refund applications are auto-classified as low-risk or high-risk based on a system-generated risk score derived from filing history, GSTR-2B/3B reconciliation, ITC patterns and HSN-level analytics.</li>
                <li><strong>Low-risk claims get 90% sanctioned within 7 days</strong> of the acknowledgement in Form RFD-02, without manual officer scrutiny. The remaining 10% is released after detailed examination culminating in the final order under Rule 92.</li>
                <li><strong>Provisional refund extended to Inverted Duty Structure</strong> — Previously available only for zero-rated supplies (exports + SEZ); now extended to IDS as a trade-facilitation measure pending formal amendment of Section 54(6).</li>
                <li><strong>Officer override permitted</strong> — The proper officer may, for reasons recorded in writing, decline provisional sanction in a particular case and proceed to detailed examination. Used sparingly and reasons subject to appellate scrutiny.</li>
            </ul>
            <h3>Who is Excluded from Provisional Refund</h3>
            <p>Notification 14/2025-Central Tax dated 17 September 2025 specifies two excluded categories per the proviso to Section 54(6):</p>
            <ul>
                <li><strong>Aadhaar non-authenticated taxpayers</strong> under Rule 10B — must complete Aadhaar authentication on the GST portal before filing for provisional refund eligibility.</li>
                <li><strong>Suppliers of high-risk specified goods</strong> — areca nuts, pan masala, tobacco, gutkha, hookah molasses and similar products with high evasion risk profile.</li>
            </ul>
            <p>For excluded taxpayers and high-risk-flagged claims, the refund continues under the regular Rule 92 detailed examination route with the 60-day window applying to the full sanctioned amount.</p>
            <div class="callout">
                <p><strong>Working capital impact:</strong> A ₹10 lakh refund claim earlier took 60-90 days for full sanction. Under the new regime, ₹9 lakh is credited within 7 days of acknowledgement. The remaining ₹1 lakh is released within 60 days. Combined with Section 56 6% interest beyond 60 days, taxpayers see ~85% liquidity improvement on average refund cycles.</p>
            </div>
        </section>

        <section class="content-section" id="limitation">
            <h2>Limitation Tracker — Section 54(1) and Section 56</h2>
            <p>Section 54(1) of the CGST Act prescribes a strict two-year limitation from the "relevant date" for filing any refund application. Missing the limitation results in permanent loss of the refund right — there is no mechanism for condonation under the GST law. The relevant date is category-specific and requires careful determination.</p>
            <h3>Relevant Date by Category</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Refund Category</th><th>Relevant Date</th><th>Statutory Reference</th></tr>
                </thead>
                <tbody>
                    <tr><td>Export of goods under LUT or with IGST</td><td>Date of shipping bill</td><td>Explanation 2(a) to S.54</td></tr>
                    <tr><td>Export of services under LUT</td><td>Date of receipt of payment in convertible foreign exchange or date of issue of invoice (whichever earlier)</td><td>Explanation 2(c) to S.54</td></tr>
                    <tr><td>SEZ supplies (with or without tax)</td><td>Date of receipt of payment / date of LUT-backed supply</td><td>Explanation 2(a) to S.54</td></tr>
                    <tr><td>Inverted Duty Structure</td><td>Due date for furnishing return for the period</td><td>Notif 13/2022-CT</td></tr>
                    <tr><td>Deemed exports</td><td>Date of return for the period in which claim arises</td><td>Notif 47/2017-CT</td></tr>
                    <tr><td>Excess cash ledger / excess tax paid</td><td>Date of payment of tax</td><td>Explanation 2(h) to S.54</td></tr>
                    <tr><td>Refund pursuant to assessment / order</td><td>Date of communication of order</td><td>Explanation 2(e) to S.54</td></tr>
                </tbody>
            </table>
            <h3>COVID Exclusion Window</h3>
            <p>Notification 13/2022-Central Tax excluded the period from <strong>1 March 2020 to 28 February 2022</strong> from the computation of the two-year limitation under Section 54(1). For refund claims where the relevant date or part of the limitation window falls within this period, the excluded duration is added back to extend the effective filing window. This benefit applies even to claims filed in 2026 if the underlying period was COVID-affected.</p>
            <h3>Section 54(7) and Section 56 — The 60-Day Clock</h3>
            <p>Section 54(7) requires the proper officer to issue the final refund order in Form GST RFD-06 within sixty days of receipt of the complete refund application. If the order is not issued within this window, Section 56 of the CGST Act mandates payment of simple interest at <strong>six per cent per annum</strong> from the date immediately after expiry of sixty days till the date of refund credit. Where the refund arises from an appellate order, the rate increases to <strong>nine per cent per annum</strong> under Section 56 proviso. Interest is auto-computed by the system and credited along with the refund amount.</p>
        </section>


        <section class="content-section" id="rejection">
            <h2>Common Rejection Grounds — and How to Avoid Them</h2>
            <p>RFD-01 rejection typically falls into one of three buckets: documentary deficiencies (most common), eligibility failures (substantive), and procedural lapses (timing / sequence). Across 250+ RFD-01 filings, our team observes the following recurring rejection patterns.</p>
            <h3>Documentary Deficiencies (60%+ of Rejections)</h3>
            <ul>
                <li><strong>Statement upload errors</strong> — wrong template, missing columns, format mismatch with GSTR-1/3B figures, currency conversion errors in BRC/FIRC.</li>
                <li><strong>Bank account not validated</strong> — PFMS validation pending, IFSC mismatch, account holder name not matching GSTIN registration name.</li>
                <li><strong>Annexure-B missing or incomplete</strong> — invoice details not invoice-wise, supplier GSTIN missing, HSN classification absent.</li>
                <li><strong>CA certification absent</strong> — refund exceeds ₹2 lakh in IDS / SEZ-without-tax / deemed exports / cash ledger and CA cert not uploaded.</li>
                <li><strong>Endorsement from SEZ Specified Officer missing</strong> — for SEZ category, the original endorsement copy must be uploaded; system-generated copies are rejected.</li>
            </ul>
            <h3>Eligibility Failures (Substantive Issues)</h3>
            <ul>
                <li><strong>Restricted goods under Notification 5/2017 / 9/2022</strong> — IDS refund claimed for textile fabrics (pre-Aug 2018) or Chapter 15 / Chapter 27 goods (post 18 Jul 2022).</li>
                <li><strong>Capital goods or input services in Net ITC</strong> — only input goods qualify per VKC Footsteps SC; including services or capital goods triggers automatic reduction.</li>
                <li><strong>Rate-cut accumulation, not concessional rate</strong> — IDS denied where rate inversion arose from a rate cut on the same goods, per Circular 173/05/2022.</li>
                <li><strong>LUT not registered / expired</strong> — exports without IGST claimed but LUT (Form RFD-11) was not active for the period.</li>
                <li><strong>BRC / FIRC not received within 1 year</strong> — for service exports, payment must be received within 1 year of invoice (extendable per RBI). Non-receipt converts the supply to taxable and refund to recovery.</li>
            </ul>
            <h3>Procedural Lapses</h3>
            <ul>
                <li><strong>Two-year limitation expired</strong> — application filed beyond Section 54(1) window from the relevant date.</li>
                <li><strong>GSTR-1 / 3B not filed for the period</strong> — common error where applicant files RFD-01 ahead of period-end returns.</li>
                <li><strong>Subsequent-period claim filed before NIL claim issue addressed</strong> — once a NIL refund is filed for a period, only that period can be reclaimed (per Circular 110/2019), provided no subsequent-period claim under same category exists.</li>
                <li><strong>Incorrect category selection</strong> — IGST export refund filed via RFD-01 instead of via shipping bill (Rule 96 auto), or LUT route filed with payment of IGST.</li>
            </ul>
        </section>

        <section class="content-section" id="deficiency">
            <h2>Deficiency Memo (RFD-03) — How to Respond</h2>
            <p>The proper officer issues a deficiency memo in Form GST RFD-03 within fifteen days of filing if the application is found incomplete or contains errors. The memo specifies the deficiencies and gives the applicant an opportunity to file a fresh application after rectification. Critically, the original application is treated as non-existent — the two-year limitation continues to run while the rectification is pending.</p>
            <h3>RFD-03 Response Workflow</h3>
            <ol>
                <li><strong>Acknowledge promptly</strong> — Login to the GST portal, navigate to Services → Refunds → Track Application Status, and acknowledge the RFD-03 memo within 15 days of issue.</li>
                <li><strong>Identify each deficiency</strong> — RFD-03 enumerates specific items: missing statements, calculation errors, document defects, ledger reconciliation gaps, validation failures.</li>
                <li><strong>Rectify and re-prepare</strong> — Correct the underlying data in GSTR-1/3B if needed (via amendment in subsequent return), regenerate statements, re-upload Annexure-B with complete invoice details, fix bank validation through the Refund Pre-Application Form.</li>
                <li><strong>File a fresh RFD-01</strong> — The original ARN is closed; a new application with a new ARN must be filed. Reference the earlier ARN in the application narrative.</li>
                <li><strong>Track limitation</strong> — Section 54(1) two-year clock does not stop. If the original application was close to limitation, the rectified fresh filing may itself become time-barred. File rectified application well within the window.</li>
            </ol>
            <h3>RFD-08 vs RFD-03 — Different Triggers</h3>
            <p>RFD-03 is for procedural / documentary deficiencies issued before the substantive scrutiny. RFD-08 is the show-cause notice issued after substantive scrutiny when the proper officer proposes to reject the refund in part or in full. RFD-08 must be replied to within 15 days through Form GST RFD-09 with detailed submissions and supporting documents. Failure to reply or unsatisfactory reply leads to rejection through Form GST RFD-06.</p>
        </section>

        <section class="content-section" id="filing-steps">
            <h2>RFD-01 Filing Steps on the GST Portal</h2>
            <p>The actual filing of RFD-01 on <a href="https://www.gst.gov.in" rel="noopener" target="_blank">gst.gov.in</a> is a sequential process. Each step has its own validation gate; an error at any step prevents progression. The end-to-end portal walkthrough takes 30-60 minutes for clean cases.</p>
            <h3>Step-by-Step Portal Workflow</h3>
            <ol>
                <li><strong>Pre-requisite: File GSTR-1 and GSTR-3B</strong> for the period. Verify all returns up to the application date are filed with no pending GSTR-3B.</li>
                <li><strong>Refund Pre-Application Form</strong> — Services → Refunds → Refund Pre-Application Form. Validate bank account against PFMS. Wait for PFMS confirmation (1-2 days).</li>
                <li><strong>Access RFD-01</strong> — Services → Refunds → Application for Refund. Choose financial year and quarter/month.</li>
                <li><strong>Select Refund Type</strong> from the dropdown — picks the right statement template and downstream validations.</li>
                <li><strong>Enter refund amount head-wise</strong> — IGST, CGST, SGST/UTGST, Cess. Constrained by electronic credit ledger (for ITC refunds) or cash ledger (for cash refund).</li>
                <li><strong>Upload Statement</strong> in the prescribed template — system validates structure and computes maximum refund.</li>
                <li><strong>Upload supporting documents</strong> — Annexure-A self-declaration, Annexure-B (where applicable), CA certificate (where applicable), category-specific evidence.</li>
                <li><strong>Confirm bank account</strong> from the Pre-Application validated list.</li>
                <li><strong>Save and preview</strong> — system generates a draft RFD-01 PDF for review. Save and revisit if needed.</li>
                <li><strong>Submit with DSC or EVC</strong> — proprietorship/HUF can use EVC; companies/LLPs must use DSC. ARN is generated immediately.</li>
                <li><strong>Track ARN</strong> — Services → Refunds → Track Application Status. Acknowledgement (RFD-02) issued within 15 days. Provisional sanction (RFD-04) for low-risk claims within 7 days from October 2025.</li>
            </ol>
            <div class="callout">
                <p><strong>Two-stage flow under new regime:</strong> Post-1 October 2025, the system first issues RFD-02 (acknowledgement), then automatically RFD-04 (provisional 90% sanction) for low-risk claims, then RFD-06 (final order with remaining 10%). Applicants should track both the provisional sanction milestone (7 days) and the final order milestone (60 days) for cash flow planning.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Form GST RFD-01 and who must file it?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Form GST RFD-01 is the standard online refund application filed under Section 54 of the CGST Act read with Rule 89. It is filed by any registered person seeking refund of unutilised Input Tax Credit, excess balance in the electronic cash ledger, excess tax paid, or refund under specific categories such as exports, supplies to SEZ, deemed exports and inverted duty structure. The application must be filed electronically on the GST common portal with prescribed statements and supporting documents.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How many categories of refund are supported through RFD-01?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Form RFD-01 supports ten primary refund categories: exports of goods or services without payment of tax (LUT route), exports with payment of IGST, supplies to SEZ unit or developer without payment of tax, supplies to SEZ with payment of tax, accumulated ITC due to inverted duty structure, deemed exports, excess balance in electronic cash ledger, excess tax paid by mistake, refund on assessment or appellate order, and any other category. Each category has prescribed statements per Rule 89.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the time limit for filing RFD-01 application?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54(1) prescribes a two-year limitation from the relevant date for filing any refund claim. The relevant date varies by category — date of shipping bill for export of goods, date of receipt of payment for export of services, date of return for inverted duty structure, date of payment for excess tax, date of order for assessment-based refunds. Notification 13/2022-Central Tax excluded the period from 1 March 2020 to 28 February 2022 from limitation computation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is GSTR-1 and GSTR-3B filing mandatory before RFD-01?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Per Circular No. 125/44/2019-GST, both GSTR-1 and GSTR-3B for the tax period to which the refund claim relates must be filed before submitting Form RFD-01. The portal also requires that all returns up to the date of refund application be filed without any pending GSTR-3B. The Refund Pre-Application Form must also be filed to validate bank account details linked to the GSTIN before the actual RFD-01 submission.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When is CA or CMA certification mandatory for RFD-01?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Per Annexure-2 of Circular 125/44/2019-GST, a certificate from a Chartered Accountant or a Cost and Management Accountant is mandatory for refund claims exceeding rupees two lakhs in respect of refund categories of inverted duty structure, deemed exports, excess balance in cash ledger above the threshold, and any other refund where the proper officer requires it. The certificate confirms tax incidence has not been passed on. CA or CMA certification is not required for export refunds under LUT route.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the 90 per cent provisional refund under Rule 91?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Rule 91 read with Section 54(6) provides for sanction of ninety per cent of the refund amount on a provisional basis within seven days of acknowledgement, with the balance ten per cent released after detailed scrutiny. From 1 October 2025, Notification 13/2025-Central Tax introduced system-driven risk evaluation for provisional sanction, and CBIC Instruction No. 06/2025-GST extended the provisional refund mechanism from zero-rated supplies to inverted duty structure claims as a trade-facilitation measure.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What documents are common across all RFD-01 categories?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Common documents required for all RFD-01 categories include the Refund Pre-Application Form for bank validation, Annexure-A self-declaration confirming no incidence of tax has been passed on, copies of GSTR-1 and GSTR-3B for the period, electronic credit ledger or cash ledger statement, declaration of non-prosecution, undertaking under Rule 89(2)(l) of CGST Rules, and validated bank account details linked to the GSTIN. DSC or EVC is required for digital signing of the application.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Statement-3 versus Statement-3A for export refunds?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Statement-3 contains invoice-wise details of zero-rated supplies for which refund is claimed under the LUT route — including export invoices, shipping bill numbers, port codes, FOB values, and BRC or FIRC details for service exports. Statement-3A is the working sheet for computing Net ITC and the Maximum Refund Amount as per Rule 89(4) formula. Both statements must be uploaded with Form RFD-01 for export of goods or services without payment of IGST.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I claim refund without an LUT for export supplies?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. For export of goods or services or supplies to SEZ without payment of IGST, a registered Letter of Undertaking in Form GST RFD-11 valid for the financial year is mandatory under Rule 96A of CGST Rules. The LUT must be filed before the export takes place. Without a registered LUT, the supply is treated as taxable and IGST must be paid; the refund route then shifts to Rule 96 (auto via shipping bill) or RFD-01 with payment of IGST.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What happens if my RFD-01 has deficiencies?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If the proper officer finds the application deficient, a deficiency memo is issued in Form GST RFD-03 within fifteen days of filing, with reasons specified. The applicant must rectify the deficiencies and file a fresh application; the original application is treated as non-existent. The two-year limitation under Section 54(1) does not stop running while deficiency is being rectified — taxpayers must respond promptly. Common deficiencies include missing statements, ITC reconciliation gaps and bank validation failures.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Annexure-B and when is it required?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Annexure-B is an invoice-wise statement of inputs and input services on which Input Tax Credit was availed during the relevant period, required for refund claims based on accumulated ITC including export under LUT, SEZ supplies without tax and inverted duty structure. The annexure must be self-certified by the applicant and contains GSTIN of supplier, invoice number and date, taxable value, IGST or CGST and SGST amount, and HSN classification. Annexure-B is uploaded with Form RFD-01 in PDF format.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is refund of excess balance in electronic cash ledger different?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Refund of excess balance in the electronic cash ledger is the simplest category of RFD-01 — it requires only Statement-7 with cash ledger balance details, declaration of non-prosecution, and bank account validation. No CA certificate is required regardless of the amount. The relevant date for limitation is the date of payment of tax or deposit. The balance must be unutilised against any output liability and not part of any pending demand. Provisional refund mechanism does not apply.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What are common reasons for RFD-01 rejection?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Common rejection grounds include mismatched figures between GSTR-1 Table 6A and GSTR-3B Table 3.1(b) for exports, missing or incorrectly filled statements, ITC claimed on capital goods or input services for inverted duty refund, expired LUT for export supplies, refund claimed for restricted goods under Notification 5/2017 or 9/2022, application beyond two-year limitation, bank account not validated through PFMS, and inadequate evidence of inverted rate structure or export receipt. Most rejections can be avoided by thorough pre-filing checks.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I claim refund after filing a NIL refund claim earlier?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, subject to two conditions per Circular 110/29/2019-GST. First, a NIL refund claim must have been filed in Form RFD-01 for the period under the same category. Second, no refund claim under the same category should have been filed for any subsequent period. If both conditions are met, the registered person may file a fresh refund claim for the original period, treating the NIL claim as withdrawn. This relaxation covers exports without tax, SEZ without tax, and IDS.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the 60-day window under Section 54(7) and Section 56 interest?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 54(7) requires the proper officer to issue the final refund order in Form GST RFD-06 within sixty days of receipt of the complete application. If the refund is delayed beyond sixty days, Section 56 mandates simple interest at six per cent per annum from day 61 till refund credit date. If the refund arises from an appellate order, the rate of interest increases to nine per cent per annum. Interest is auto-computed and credited with the refund.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need RFD-01 Filing?</h3>
            <p>End-to-end RFD-01 preparation across all 10 categories — statements, Annexure-B, CA certification and deficiency-memo defence.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20RFD-01%20Pre-Filing%20Checklist.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=RFD-01%20Pre-Filing%20Checklist%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20RFD-01%20Pre-Filing%20Checklist.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-returns-for-sez" class="sidebar-link">GST Returns for SEZ<span class="arrow">→</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-returns" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/iec-registration" class="sidebar-link">IEC Registration<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/export-refund-lut-calculator" class="sidebar-link">Export Refund Calculator (LUT)<span class="arrow">→</span></a>
            <a href="/tools/igst-export-refund-calculator" class="sidebar-link">IGST Export Refund Calculator<span class="arrow">→</span></a>
            <a href="/tools/inverted-duty-refund-calculator" class="sidebar-link">Inverted Duty Refund Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee &amp; Interest<span class="arrow">→</span></a>
            <a href="/tools/gstr-2a-3b-reconciliation" class="sidebar-link">GSTR-2A vs 3B Reconciliation<span class="arrow">→</span></a>
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
    <div class="trust">250+ RFD-01 applications filed across all categories</div>
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
        if (v >= 10000000) return '₹' + (v/10000000).toFixed(2) + ' Cr';
        if (v >= 100000)   return '₹' + (v/100000).toFixed(2) + ' L';
        return '₹' + v.toLocaleString('en-IN');
    }
    function fmtDate(d){
        if (!d || isNaN(d.getTime())) return '—';
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
    }
    function addDays(d, n){ var r = new Date(d.getTime()); r.setDate(r.getDate() + n); return r; }
    function addYears(d, n){ var r = new Date(d.getTime()); r.setFullYear(r.getFullYear() + n); return r; }
    function daysBetween(d1, d2){ return Math.round((d2.getTime() - d1.getTime()) / 86400000); }

    var COMMON_ITEMS = [
        {id:'c1', label:'Refund Pre-Application Form filed (bank account validated against PFMS)', ref:'Mandatory', refClass:'danger'},
        {id:'c2', label:'GSTR-1 for the relevant period filed on portal', sub:'Pre-requisite per Circular 125/44/2019', ref:'Mandatory', refClass:'danger'},
        {id:'c3', label:'GSTR-3B for the relevant period filed on portal', sub:'Pre-requisite per Circular 125/44/2019', ref:'Mandatory', refClass:'danger'},
        {id:'c4', label:'No pending GSTR-3B for any prior period', sub:'All returns up to application date filed', ref:'Mandatory', refClass:'danger'},
        {id:'c5', label:'Bank account validated through PFMS', sub:'IFSC, account name match GSTIN registration', ref:'Mandatory', refClass:'danger'},
        {id:'c6', label:'Annexure-A self-declaration prepared', sub:'Tax incidence not passed on to others', ref:'Common', refClass:'info'},
        {id:'c7', label:'Declaration of non-prosecution under Rule 89(2)(k)', sub:'No prosecution for tax evasion >₹2.5 Cr in last 5 years', ref:'Common', refClass:'info'},
        {id:'c8', label:'Undertaking under Rule 89(2)(l)', sub:'Refund returnable with interest if found inadmissible', ref:'Common', refClass:'info'},
        {id:'c9', label:'DSC or EVC ready for digital signing', sub:'DSC for Co/LLP; EVC permitted for Prop/HUF', ref:'Mandatory', refClass:'danger'},
        {id:'c10', label:'Electronic credit ledger / cash ledger statement downloaded', sub:'For the period — supports balance computation', ref:'Common', refClass:'info'}
    ];

    var CATEGORIES = {
        'export-lut': {
            title: 'Exports under LUT (without payment of tax)',
            relevantDate: 'shipping-bill', // proxy: end-of-period + 30
            provisional: true,
            catItems: [
                {id:'k1', label:'Letter of Undertaking (Form GST RFD-11) registered for the FY', ref:'Mandatory', refClass:'danger'},
                {id:'k2', label:'LUT was active on the date of export invoice', sub:'Verify on portal — RFD-11 status', ref:'Critical', refClass:'danger'},
                {id:'k3', label:'BRC / FIRC received within 1 year of invoice for service exports', sub:'RBI may extend; non-receipt converts supply to taxable', ref:'Critical', refClass:'danger'},
                {id:'k4', label:'Net ITC excludes capital goods and input services', sub:'Per Rule 89(4)(B) — only input goods qualify', ref:'Rule 89(4)', refClass:'info'},
                {id:'k5', label:'Section 17(5) blocked credits excluded from Net ITC', ref:'Rule 89(4)', refClass:'info'},
                {id:'k6', label:'Refund capped at 1.5× preceding-year similar turnover', sub:'Per Notification 16/2020-CT (post Pitambra Books)', ref:'Cap', refClass:'warn'},
                {id:'k7', label:'Adjusted Total Turnover excludes exempt other than zero-rated', sub:'Per Notification 14/2022 + Circular 197/2023', ref:'Definition', refClass:'info'},
                {id:'k8', label:'Shipping bill numbers and port codes verified against GSTR-1 Table 6A', sub:'Mismatch is leading rejection cause', ref:'Reconcile', refClass:'warn'}
            ],
            docs: [
                {id:'d1', label:'Statement-3 (invoice-wise zero-rated supply)', sub:'Export invoice + SB# + port code + FOB + BRC/FIRC', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Statement-3A (Net ITC and Refund computation)', sub:'Rule 89(4) formula working sheet', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Annexure-B (invoice-wise input ITC)', sub:'Self-certified, PDF', ref:'Mandatory', refClass:'danger'},
                {id:'d4', label:'Copies of Shipping Bills / Bills of Export', sub:'Or Export General Manifest (EGM)', ref:'Goods', refClass:'info'},
                {id:'d5', label:'BRC / FIRC for service exports', sub:'In foreign currency, with RBI conversion', ref:'Services', refClass:'info'},
                {id:'d6', label:'Invoice copies for sample verification', sub:'Officer may request 5-10% sample', ref:'On demand', refClass:'warn'},
                {id:'d7', label:'CA Certification (Annexure-2 of Circular 125)', sub:'Required if refund > ₹2 lakh', ref:'Conditional', refClass:'warn'}
            ]
        },
        'export-igst': {
            title: 'Exports with payment of IGST',
            relevantDate: 'shipping-bill',
            provisional: true,
            catItems: [
                {id:'k1', label:'IGST paid on export invoice and declared in Table 6A of GSTR-1', ref:'Critical', refClass:'danger'},
                {id:'k2', label:'IGST paid through Table 3.1(b) of GSTR-3B for the period', ref:'Critical', refClass:'danger'},
                {id:'k3', label:'Shipping bill filed and Export General Manifest (EGM) closed', sub:'EGM filed by shipping line through ICEGATE', ref:'Customs', refClass:'info'},
                {id:'k4', label:'Note: This category is auto-refunded via Rule 96 — RFD-01 only for stuck cases', sub:'Use shipping bill mechanism unless SB000 not generated', ref:'Caution', refClass:'warn'},
                {id:'k5', label:'No drawback claimed at higher rate on same exports', sub:'Higher-rate drawback excludes IGST refund', ref:'Cross-check', refClass:'warn'},
                {id:'k6', label:'No Rule 96(10) restriction applicable', sub:'Rule 96(10) omitted from 8 Oct 2024 by Notification 20/2024', ref:'Compliance', refClass:'info'}
            ],
            docs: [
                {id:'d1', label:'Statement-2 (invoice-wise IGST-paid exports)', sub:'For RFD-01 stuck-case route only', ref:'Conditional', refClass:'warn'},
                {id:'d2', label:'Copies of Shipping Bills with Port Code', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'EGM filing confirmation', sub:'Or proof of follow-up with shipping line', ref:'Mandatory', refClass:'danger'},
                {id:'d4', label:'GSTR-1 Table 6A and GSTR-3B Table 3.1(b) reconciliation', ref:'Mandatory', refClass:'danger'},
                {id:'d5', label:'Drawback declaration (lower-rate or RoDTEP/RoSCTL only)', ref:'If applicable', refClass:'info'},
                {id:'d6', label:'BRC / FIRC for service exports', ref:'Services', refClass:'info'}
            ]
        },
        'sez-lut': {
            title: 'SEZ supplies without payment of tax',
            relevantDate: 'payment-receipt',
            provisional: true,
            catItems: [
                {id:'k1', label:'Endorsement from Specified Officer of SEZ confirming receipt for authorised operations', ref:'Mandatory', refClass:'danger'},
                {id:'k2', label:'LUT in Form RFD-11 active on date of supply', ref:'Mandatory', refClass:'danger'},
                {id:'k3', label:'Recipient SEZ unit/developer GSTIN active and authorised', ref:'Critical', refClass:'danger'},
                {id:'k4', label:'Net ITC computation excludes capital goods and input services', ref:'Rule 89(4)(B)', refClass:'info'},
                {id:'k5', label:'Declaration that recipient SEZ unit has not availed ITC on the supply', ref:'Mandatory', refClass:'danger'}
            ],
            docs: [
                {id:'d1', label:'Statement-5 (invoice-wise SEZ supply without tax)', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Statement-5A (Net ITC and Refund computation)', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Annexure-B (invoice-wise input ITC)', ref:'Mandatory', refClass:'danger'},
                {id:'d4', label:'Endorsement from Specified Officer of SEZ', sub:'Original copy — system-generated copies rejected', ref:'Mandatory', refClass:'danger'},
                {id:'d5', label:'Declaration from SEZ unit that no ITC availed', ref:'Mandatory', refClass:'danger'},
                {id:'d6', label:'CA Certification (if refund > ₹2 lakh)', ref:'Conditional', refClass:'warn'}
            ]
        },
        'sez-igst': {
            title: 'SEZ supplies with payment of IGST',
            relevantDate: 'payment-receipt',
            provisional: true,
            catItems: [
                {id:'k1', label:'IGST paid on SEZ supply invoice', ref:'Mandatory', refClass:'danger'},
                {id:'k2', label:'Endorsement from Specified Officer of SEZ confirming receipt', ref:'Mandatory', refClass:'danger'},
                {id:'k3', label:'Declaration that recipient SEZ unit has not availed ITC', ref:'Mandatory', refClass:'danger'},
                {id:'k4', label:'Recipient SEZ unit/developer GSTIN active and authorised', ref:'Critical', refClass:'danger'}
            ],
            docs: [
                {id:'d1', label:'Statement-4 (invoice-wise SEZ supply with IGST)', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Endorsement from Specified Officer of SEZ', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Declaration from SEZ unit (no ITC)', ref:'Mandatory', refClass:'danger'},
                {id:'d4', label:'Tax invoice copies', ref:'Mandatory', refClass:'danger'},
                {id:'d5', label:'CA Certification (if refund > ₹2 lakh)', ref:'Conditional', refClass:'warn'}
            ]
        },
        'ids': {
            title: 'Inverted Duty Structure (accumulated ITC)',
            relevantDate: 'gstr3b-due',
            provisional: true,
            catItems: [
                {id:'k1', label:'HSN-wise rate analysis proving structural inversion at same point', sub:'Per Circular 173/05/2022 — rate-cut accumulation excluded', ref:'Critical', refClass:'danger'},
                {id:'k2', label:'Goods not under Notification 5/2017 textile restriction (where applicable)', sub:'Fabrics eligible from 1 Aug 2018 per Notif 20/2018', ref:'Restricted', refClass:'warn'},
                {id:'k3', label:'Goods not under Notification 9/2022 Chapter 15/27 restriction', sub:'Applies to tax periods from 18 July 2022', ref:'Restricted', refClass:'warn'},
                {id:'k4', label:'Net ITC = ITC on input goods only (exclude services + capital goods)', sub:'Per VKC Footsteps SC ruling', ref:'Rule 89(5)', refClass:'info'},
                {id:'k5', label:'New formula post-Notif 14/2022 applied (proportionate deduction)', sub:'Curative + retrospective per Ascent Meditech HC', ref:'Formula', refClass:'info'},
                {id:'k6', label:'Adjusted Total Turnover correctly computed', ref:'Definition', refClass:'info'},
                {id:'k7', label:'Tax payable on inverted supply computed gross of ITC adjustment', ref:'Computation', refClass:'info'}
            ],
            docs: [
                {id:'d1', label:'Statement-1A (Rule 89(5) formula working)', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Annexure-B (invoice-wise input ITC, goods only)', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'HSN-wise rate analysis (input vs output)', sub:'Evidence of structural inversion', ref:'Mandatory', refClass:'danger'},
                {id:'d4', label:'Electronic credit ledger statement', ref:'Mandatory', refClass:'danger'},
                {id:'d5', label:'CA Certification (Annexure-2)', sub:'Mandatory if refund > ₹2 lakh', ref:'Conditional', refClass:'warn'},
                {id:'d6', label:'Self-declaration — no IGST refund claimed on same supplies', ref:'Common', refClass:'info'}
            ]
        },
        'deemed': {
            title: 'Deemed Exports (Notification 48/2017-CT)',
            relevantDate: 'period-return',
            provisional: false,
            catItems: [
                {id:'k1', label:'Supply qualifies as deemed export under Notification 48/2017-CT', sub:'EOU/AA/EPCG/Mega Power Project recipient', ref:'Mandatory', refClass:'danger'},
                {id:'k2', label:'Recipient declaration that no ITC has been availed on the supply', ref:'Mandatory', refClass:'danger'},
                {id:'k3', label:'Authorisation letter from recipient (if supplier files)', sub:'Either supplier or recipient files — not both', ref:'Critical', refClass:'danger'},
                {id:'k4', label:'Recipient acknowledgement that refund is not claimed by recipient', ref:'Mandatory', refClass:'danger'},
                {id:'k5', label:'Tax invoice issued with appropriate annotation', sub:'"Supply meant for export against deemed export"', ref:'Invoice', refClass:'info'}
            ],
            docs: [
                {id:'d1', label:'Statement-5B (invoice-wise deemed exports)', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Recipient declaration (no ITC availed)', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Authorisation letter (if supplier files refund)', ref:'Conditional', refClass:'warn'},
                {id:'d4', label:'Annexure-A from Jurisdictional Tax Officer of recipient', ref:'Mandatory', refClass:'danger'},
                {id:'d5', label:'Tax invoice copies', ref:'Mandatory', refClass:'danger'},
                {id:'d6', label:'Payment evidence from recipient', ref:'Mandatory', refClass:'danger'},
                {id:'d7', label:'CA Certification (if refund > ₹2 lakh)', ref:'Conditional', refClass:'warn'}
            ]
        },
        'excess-cash': {
            title: 'Excess balance in Electronic Cash Ledger',
            relevantDate: 'payment',
            provisional: false,
            catItems: [
                {id:'k1', label:'Cash ledger balance unutilised against any output liability', ref:'Critical', refClass:'danger'},
                {id:'k2', label:'No pending tax demand or recoverable amount on portal', ref:'Critical', refClass:'danger'},
                {id:'k3', label:'No refund pending under any other category for the same balance', ref:'Critical', refClass:'danger'}
            ],
            docs: [
                {id:'d1', label:'Statement-7 (cash ledger balance head-wise)', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Cash ledger statement from portal', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Note: CA Certificate NOT required regardless of amount', sub:'Per Circular 125/44/2019 — exempt category', ref:'Exempt', refClass:'info'}
            ]
        },
        'excess-tax': {
            title: 'Excess tax paid by mistake',
            relevantDate: 'payment',
            provisional: false,
            catItems: [
                {id:'k1', label:'Reason for excess payment clearly documented', sub:'Wrong head, wrong period, wrong GSTIN, double payment etc.', ref:'Mandatory', refClass:'danger'},
                {id:'k2', label:'Original payment evidence preserved (challan + return reference)', ref:'Critical', refClass:'danger'},
                {id:'k3', label:'No corresponding ITC availed by recipient on the excess amount', ref:'Critical', refClass:'danger'},
                {id:'k4', label:'Self-certified evidence for excess', ref:'Mandatory', refClass:'danger'}
            ],
            docs: [
                {id:'d1', label:'Statement-6 (excess tax details with reasons)', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Original payment challan(s) and return reference', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Self-certified evidence (correspondence, working notes)', ref:'Mandatory', refClass:'danger'},
                {id:'d4', label:'CA Certification (if refund > ₹2 lakh)', ref:'Conditional', refClass:'warn'}
            ]
        },
        'order': {
            title: 'Refund pursuant to assessment / appellate / order',
            relevantDate: 'order-date',
            provisional: false,
            catItems: [
                {id:'k1', label:'Original order copy (assessment / appellate / court)', ref:'Mandatory', refClass:'danger'},
                {id:'k2', label:'Order is final and not under further appeal challenge by Department', sub:'Or Department appeal disposed', ref:'Critical', refClass:'danger'},
                {id:'k3', label:'Pre-deposit (if any) reconciled with refund claim', sub:'Section 107(6) and 112(8) pre-deposits', ref:'Critical', refClass:'danger'},
                {id:'k4', label:'Refund computation matches order direction', ref:'Critical', refClass:'danger'},
                {id:'k5', label:'9% interest under Section 56 proviso applicable for appellate refunds', sub:'Higher rate vs default 6%', ref:'Interest', refClass:'info'}
            ],
            docs: [
                {id:'d1', label:'Certified copy of the order', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Refund computation aligned to order', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Pre-deposit challan copies (if applicable)', ref:'Conditional', refClass:'warn'},
                {id:'d4', label:'Acknowledgement of order communication date', sub:'Triggers limitation under Section 54(1)', ref:'Mandatory', refClass:'danger'},
                {id:'d5', label:'CA Certification (if refund > ₹2 lakh)', ref:'Conditional', refClass:'warn'}
            ]
        },
        'other': {
            title: 'Any other refund category',
            relevantDate: 'period-return',
            provisional: false,
            catItems: [
                {id:'k1', label:'Specific reason for refund clearly articulated', ref:'Mandatory', refClass:'danger'},
                {id:'k2', label:'Statutory basis for refund identified (Section / Rule / Circular)', ref:'Mandatory', refClass:'danger'},
                {id:'k3', label:'Supporting evidence documented', ref:'Mandatory', refClass:'danger'},
                {id:'k4', label:'No double refund — no claim under any other category for same amount', ref:'Critical', refClass:'danger'}
            ],
            docs: [
                {id:'d1', label:'Custom statement with refund details', ref:'Mandatory', refClass:'danger'},
                {id:'d2', label:'Supporting documents specific to claim', ref:'Mandatory', refClass:'danger'},
                {id:'d3', label:'Self-declaration of facts', ref:'Mandatory', refClass:'danger'},
                {id:'d4', label:'CA Certification (if refund > ₹2 lakh)', ref:'Conditional', refClass:'warn'}
            ]
        }
    };

    var state = {
        category: 'export-lut',
        checked: {} // { itemId: true }
    };

    function renderCheckList(containerId, items, prefix){
        var container = $(containerId);
        var html = '';
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            var fullId = prefix + '-' + item.id;
            var refHtml = item.ref ? '<span class="ref ' + (item.refClass || '') + '">' + item.ref + '</span>' : '';
            var subHtml = item.sub ? '<span class="sub">' + item.sub + '</span>' : '';
            var isChecked = state.checked[fullId] ? 'checked' : '';
            html += '<div class="check-item' + (isChecked ? ' checked' : '') + '" data-id="' + fullId + '">';
            html += '<input type="checkbox" id="' + fullId + '" ' + isChecked + '>';
            html += '<label for="' + fullId + '">' + refHtml + item.label + subHtml + '</label>';
            html += '</div>';
        }
        container.innerHTML = html;
    }

    function renderCategoryUI(){
        var cat = CATEGORIES[state.category];
        if (!cat) return;
        renderCheckList('common-checks', COMMON_ITEMS, 'common');
        renderCheckList('cat-checks', cat.catItems, 'cat');
        renderCheckList('docs-checks', cat.docs, 'doc');
        $('cat-specific-title').firstChild.textContent = cat.title + ' — Specific Items ';
        updateCounts();
    }

    function updateCounts(){
        var commonDone = COMMON_ITEMS.filter(function(it){ return state.checked['common-' + it.id]; }).length;
        var cat = CATEGORIES[state.category];
        var catDone = cat.catItems.filter(function(it){ return state.checked['cat-' + it.id]; }).length;
        var docDone = cat.docs.filter(function(it){ return state.checked['doc-' + it.id]; }).length;
        $('common-count').textContent = commonDone + '/' + COMMON_ITEMS.length;
        $('cat-count').textContent = catDone + '/' + cat.catItems.length;
        $('docs-count').textContent = docDone + '/' + cat.docs.length;
    }

    // Category tile click
    $('cat-grid').addEventListener('click', function(e){
        var tile = e.target.closest('.cat-tile');
        if (!tile) return;
        var tiles = $('cat-grid').querySelectorAll('.cat-tile');
        for (var i = 0; i < tiles.length; i++) tiles[i].classList.remove('selected');
        tile.classList.add('selected');
        state.category = tile.dataset.cat;
        renderCategoryUI();
    });

    // Checkbox click delegation (covers all 3 lists)
    function bindChecks(containerId){
        $(containerId).addEventListener('click', function(e){
            var item = e.target.closest('.check-item');
            if (!item) return;
            var id = item.dataset.id;
            var cb = item.querySelector('input[type="checkbox"]');
            // If the actual checkbox was clicked, let it toggle naturally; otherwise toggle via click
            if (e.target !== cb) {
                cb.checked = !cb.checked;
            }
            state.checked[id] = cb.checked;
            if (cb.checked) item.classList.add('checked');
            else item.classList.remove('checked');
            updateCounts();
        });
    }
    bindChecks('common-checks');
    bindChecks('cat-checks');
    bindChecks('docs-checks');

    // FAQ accordion
    document.querySelectorAll('.faq-item').forEach(function(item){
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
        if (s) tocSections.push({el: s, link: a});
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

    function getRelevantDate(category, periodStr){
        // periodStr: "YYYY-MM"
        var parts = periodStr.split('-');
        var y = parseInt(parts[0], 10);
        var m = parseInt(parts[1], 10) - 1;
        if (category === 'ids') {
            // GSTR-3B due date — 20th of next month (monthly default)
            var nm = m + 1, ny = y;
            if (nm > 11) { nm = 0; ny += 1; }
            return new Date(ny, nm, 20);
        } else if (category === 'export-lut' || category === 'export-igst' || category === 'sez-lut' || category === 'sez-igst') {
            // Approximate as end-of-period + 30 (proxy for SB / payment receipt)
            return new Date(y, m + 1, 0); // Last day of period month
        } else if (category === 'deemed') {
            // Date of return for the period — GSTR-3B due
            var nm2 = m + 1, ny2 = y;
            if (nm2 > 11) { nm2 = 0; ny2 += 1; }
            return new Date(ny2, nm2, 20);
        } else if (category === 'excess-cash' || category === 'excess-tax') {
            // Date of payment — proxy as end-of-period
            return new Date(y, m + 1, 0);
        } else if (category === 'order') {
            // Date of order communication — use period-end + 60 days as rough proxy
            var endP = new Date(y, m + 1, 0);
            return addDays(endP, 30);
        } else {
            return new Date(y, m + 1, 0);
        }
    }

    function getRelevantDateLabel(category){
        var labels = {
            'export-lut': 'Date of Shipping Bill (proxy: end of period)',
            'export-igst': 'Date of Shipping Bill (proxy: end of period)',
            'sez-lut': 'Date of payment receipt (proxy: end of period)',
            'sez-igst': 'Date of payment receipt (proxy: end of period)',
            'ids': 'GSTR-3B Due Date for the Period',
            'deemed': 'Date of return for the period',
            'excess-cash': 'Date of payment (proxy: end of period)',
            'excess-tax': 'Date of payment (proxy: end of period)',
            'order': 'Date of order (proxy: period + 30 days)',
            'other': 'Per facts of case (proxy: end of period)'
        };
        return labels[category] || 'End of period';
    }

    function compute(){
        var cat = CATEGORIES[state.category];
        if (!cat) return;
        var periodStr = $('period').value || '2026-04';
        var ackDateStr = $('ack-date').value;
        var ackDate = ackDateStr ? new Date(ackDateStr) : new Date();
        var refundAmt = parseINR($('refund-amt').value) || 0;
        var aadhaar = $('aadhaar').value;

        // Counts
        var commonTotal = COMMON_ITEMS.length;
        var catTotal = cat.catItems.length;
        var docTotal = cat.docs.length;
        var total = commonTotal + catTotal + docTotal;

        var commonDone = 0, catDone = 0, docDone = 0;
        var pending = [];
        for (var i = 0; i < COMMON_ITEMS.length; i++) {
            var key = 'common-' + COMMON_ITEMS[i].id;
            if (state.checked[key]) commonDone++;
            else pending.push({type: 'common', label: COMMON_ITEMS[i].label});
        }
        for (var j = 0; j < cat.catItems.length; j++) {
            var key2 = 'cat-' + cat.catItems[j].id;
            if (state.checked[key2]) catDone++;
            else pending.push({type: 'category', label: cat.catItems[j].label});
        }
        for (var k = 0; k < cat.docs.length; k++) {
            var key3 = 'doc-' + cat.docs[k].id;
            if (state.checked[key3]) docDone++;
            else pending.push({type: 'document', label: cat.docs[k].label});
        }
        var done = commonDone + catDone + docDone;
        var pct = total > 0 ? Math.round((done / total) * 100) : 0;

        // Timeline
        var relevantDate = getRelevantDate(state.category, periodStr);
        var limitationExpiry = addYears(relevantDate, 2);
        var sixtyDayDue = addDays(ackDate, 60);
        var today = new Date();
        var daysToLimit = daysBetween(today, limitationExpiry);
        var isTimeBarred = today > limitationExpiry;

        // Provisional refund eligibility
        var provisionalEligible = cat.provisional && aadhaar === 'yes';
        var provisionalText = '';
        if (cat.provisional && aadhaar === 'yes') provisionalText = 'Eligible (~7 days)';
        else if (cat.provisional && aadhaar === 'no') provisionalText = 'Aadhaar Not Done';
        else provisionalText = 'Not Applicable';

        // CA certification
        var caRequired = false;
        if (state.category === 'excess-cash') {
            caRequired = false; // exempt
        } else if (state.category === 'export-igst') {
            caRequired = false; // exempt for IGST route
        } else {
            caRequired = refundAmt > 200000;
        }

        // Verdict
        var verdictClass = '';
        var verdictHeadline = '';
        var verdictSub = '';
        var alerts = [];

        if (isTimeBarred) {
            verdictClass = 'red';
            verdictHeadline = 'TIME-BARRED — Cannot File RFD-01';
            verdictSub = 'The 2-year limitation under Section 54(1) from the relevant date has expired for this period.';
            alerts.push({type: 'danger', html: '<strong>Section 54(1) limitation expired.</strong> Relevant date for ' + cat.title + ': ' + getRelevantDateLabel(state.category) + ' = ' + fmtDate(relevantDate) + '. Two-year window expired on ' + fmtDate(limitationExpiry) + '. Refund cannot be filed under Section 54(1).'});
        } else if (pct === 100) {
            verdictClass = '';
            verdictHeadline = 'READY TO FILE — All ' + total + ' Items Complete';
            verdictSub = 'Your RFD-01 application appears complete across common, category-specific and document checks. File on the GST portal.';
        } else if (pct >= 80) {
            verdictClass = 'amber';
            verdictHeadline = 'NEARLY READY — ' + (total - done) + ' Items Pending';
            verdictSub = 'Most items verified. Address the remaining items before filing to avoid deficiency memo.';
        } else if (pct >= 50) {
            verdictClass = 'amber';
            verdictHeadline = 'IN PROGRESS — ' + done + ' of ' + total + ' Items Done';
            verdictSub = 'Significant items still pending. Filing now will likely trigger RFD-03 deficiency memo.';
        } else {
            verdictClass = 'red';
            verdictHeadline = 'NOT READY — Only ' + done + ' of ' + total + ' Items Done';
            verdictSub = 'Major preparation gaps. Do not file until critical items below are resolved.';
        }

        // Add alerts
        if (cat.provisional && aadhaar === 'no' && !isTimeBarred) {
            alerts.push({type: 'warn', html: '<strong>Aadhaar authentication missing:</strong> Per Notification 14/2025-Central Tax (effective 1 Oct 2025), taxpayers not authenticated under Rule 10B are excluded from the 90% provisional refund mechanism. Complete Aadhaar authentication on the GST portal to claim the 7-day provisional sanction benefit. Refund will still be processed under regular Rule 92 detailed examination route within 60 days.'});
        }
        if (cat.provisional && aadhaar === 'yes' && !isTimeBarred) {
            alerts.push({type: 'success', html: '<strong>90% Provisional Refund Eligible:</strong> Per CBIC Instruction 06/2025-GST and amended Rule 91(2), low-risk applications in this category receive 90% sanction within 7 days of acknowledgement. Remaining 10% is sanctioned within 60 days after detailed examination.'});
        }
        if (caRequired) {
            var caKey = state.category === 'export-lut' || state.category === 'sez-lut' ? 'd7' : (state.category === 'sez-igst' || state.category === 'excess-tax' || state.category === 'order' || state.category === 'other' ? 'd5' : 'd5');
            // Just check if CA certificate item is among docs and marked
            var caItem = cat.docs.filter(function(d){ return d.label.toLowerCase().indexOf('ca certif') >= 0; })[0];
            if (caItem && !state.checked['doc-' + caItem.id]) {
                alerts.push({type: 'warn', html: '<strong>CA / CMA Certification mandatory:</strong> Refund amount of ' + fmtINR(refundAmt) + ' exceeds ₹2 lakh threshold. Annexure-2 of Circular 125/44/2019-GST requires a Chartered Accountant or Cost Accountant certificate confirming tax incidence has not been passed on. Patron Accounting can issue the certificate.'});
            }
        }
        if (state.category === 'export-lut' || state.category === 'sez-lut') {
            var lutItem = cat.catItems[0]; // first item is LUT registered
            if (!state.checked['cat-' + lutItem.id]) {
                alerts.push({type: 'danger', html: '<strong>LUT in Form RFD-11 mandatory:</strong> Without an active LUT for the financial year, supplies without payment of IGST are treated as taxable. Either pay IGST and file under the with-payment route, or register LUT before filing this refund.'});
            }
        }
        if (daysToLimit > 0 && daysToLimit < 90 && !isTimeBarred) {
            alerts.push({type: 'warn', html: '<strong>Limitation closing soon:</strong> Only ' + daysToLimit + ' days remain until the 2-year Section 54(1) limitation expires on ' + fmtDate(limitationExpiry) + '. File RFD-01 immediately. Note: deficiency memo (RFD-03) does not stop the limitation clock.'});
        }
        if (state.category === 'export-igst' && !isTimeBarred) {
            alerts.push({type: 'info', html: '<strong>Note:</strong> IGST-paid export refund is normally automatic under Rule 96 — the shipping bill itself is the deemed application. RFD-01 is used only for stuck cases (SB000 not generated, EGM filing issues). Use the <a href="/tools/igst-export-refund-calculator">IGST Export Refund Calculator</a> for diagnostic verification first.'});
        }

        // Render verdict card
        $('verdict').className = 'verdict-card' + (verdictClass ? ' ' + verdictClass : '');
        $('verdict-headline').textContent = verdictHeadline;
        $('verdict-sub').textContent = verdictSub;
        $('v-score').textContent = pct + '%';
        $('v-pending').textContent = (total - done);
        $('v-prov').textContent = provisionalText;

        // Progress bar
        var pf = $('progress-fill');
        pf.style.width = pct + '%';
        pf.className = 'progress-fill' + (pct >= 80 ? '' : (pct >= 50 ? ' amber' : ' danger'));
        $('progress-text').textContent = pct + '%';
        $('progress-detail').textContent = done + ' of ' + total + ' items complete';

        // Alerts
        var ah = '';
        for (var ai = 0; ai < alerts.length; ai++) ah += '<div class="info-banner ' + alerts[ai].type + '">' + alerts[ai].html + '</div>';
        $('alerts').innerHTML = ah;

        // Timeline
        $('t-rel').textContent = fmtDate(relevantDate);
        $('t-limit').textContent = fmtDate(limitationExpiry);
        $('t-60').textContent = fmtDate(sixtyDayDue);
        $('t-days').textContent = isTimeBarred ? 'Expired' : (daysToLimit + ' days');

        // Pending list
        var lh = '';
        if (pending.length === 0) {
            lh = '<li class="done">All items complete — ready to file RFD-01.</li>';
        } else {
            for (var pi = 0; pi < pending.length; pi++) {
                lh += '<li class="missing">[' + pending[pi].type.toUpperCase() + '] ' + pending[pi].label + '</li>';
            }
        }
        $('pending-list').innerHTML = lh;

        // Summary
        $('s-cat').textContent = cat.title.length > 28 ? cat.title.substr(0, 28) + '…' : cat.title;
        $('s-period').textContent = periodStr;
        $('s-amt').textContent = fmtINR(refundAmt);
        $('s-ca').textContent = caRequired ? 'Required' : 'Not required';
        $('s-done').textContent = done + ' of ' + total;
        $('s-ready').textContent = pct === 100 ? 'YES — File now' : (pct >= 80 ? 'Nearly' : (pct >= 50 ? 'In progress' : 'Not ready'));

        // Show
        $('results').classList.add('visible');
        $('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    function reset(){
        state.category = 'export-lut';
        state.checked = {};
        var tiles = $('cat-grid').querySelectorAll('.cat-tile');
        for (var i = 0; i < tiles.length; i++) tiles[i].classList.remove('selected');
        $('cat-grid').querySelector('[data-cat="export-lut"]').classList.add('selected');
        $('period').value = '2026-04';
        $('ack-date').value = '2026-05-25';
        $('refund-amt').value = '500000';
        $('aadhaar').value = 'yes';
        renderCategoryUI();
        $('results').classList.remove('visible');
    }

    $('btn-calculate').addEventListener('click', compute);
    $('btn-reset').addEventListener('click', reset);

    // Initial render
    renderCategoryUI();
    updateTocActive();
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
