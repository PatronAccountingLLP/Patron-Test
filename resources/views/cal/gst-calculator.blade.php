@extends('layouts.app')
@section('meta')
    <title>GST Calculator India | CGST, SGST &amp; IGST Tool</title>
    <meta name="description" content="GST calculator for India: split CGST, SGST and IGST across all slabs in inclusive and exclusive modes. Free, instant tool for Indian businesses. Calculate now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-calculator">
    <meta property="og:title" content="GST Calculator India &mdash; Free CGST SGST IGST Calculator 2026">
    <meta property="og:description" content="GST Calculator computes CGST, SGST, and IGST for any amount under all GST slabs. Supports inclusive and exclusive calculations for Indian businesses.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-calculator">
    <meta property="og:image" content="/tools/gst-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Calculator India &mdash; Free CGST SGST IGST Calculator 2026">
    <meta name="twitter:description" content="GST Calculator computes CGST, SGST, and IGST for any amount under all GST slabs. Try now!">
    <meta name="twitter:image" content="/tools/gst-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "GST Calculator India",
      "description": "GST Calculator computes CGST, SGST, and IGST breakdowns for any amount under all Indian GST slabs including 5%, 12%, 18%, and 28%. Supports both GST-inclusive and GST-exclusive calculations for intra-state and inter-state transactions.",
      "url": "/tools/gst-calculator",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-03-03",
      "dateModified": "2026-03-03",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "INR"
      },
      "author": {
        "@type": "Person",
        "@id": "/#team",
        "name": "CA & CS Patron Accounting Team",
        "jobTitle": "Chartered Accountants & Company Secretaries",
        "url": "/contact-page",
        "sameAs": ["https://www.linkedin.com/company/patron-accounting"],
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
      "publisher": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "/",
        "logo": {
          "@type": "ImageObject",
          "url": "/logo.png"
        }
      },
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
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Free Tools",
          "item": "/tools/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Calculator",
          "item": "/tools/gst-calculator"
        }
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
          "name": "How do I calculate GST on a product in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To calculate GST, multiply the base price by the applicable GST rate (5%, 12%, 18%, or 28%) and divide by 100. For example, if a product costs \u20B91,000 and the GST rate is 18%, the GST amount is \u20B9180 and the total price is \u20B91,180. For intra-state sales, this splits equally into CGST and SGST."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between GST inclusive and GST exclusive?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST exclusive means the price does not include tax \u2014 GST is added on top. This is standard in B2B invoices. GST inclusive means the displayed price already contains the tax component. To extract the base price from a GST-inclusive amount, divide the total by (1 + GST rate/100). Retail MRP prices in India are typically GST inclusive."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between CGST, SGST, and IGST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CGST (Central GST) and SGST (State GST) apply to intra-state transactions \u2014 sales within the same state. Each equals half the total GST rate. IGST (Integrated GST) applies to inter-state transactions \u2014 sales between different states \u2014 and equals the full GST rate. IGST is collected by the Central Government and distributed to the destination state."
          }
        },
        {
          "@type": "Question",
          "name": "What are the current GST slab rates in India for 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "India has four main GST slabs: 5% for essential items like packaged food and economy footwear, 12% for processed foods and business-class air travel, 18% for most goods and services including IT services and restaurant dining, and 28% for luxury items like automobiles and cement. Some goods attract 0%, 0.25%, or 3% rates as special categories."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate GST from a total amount (reverse calculation)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To reverse-calculate GST from a total inclusive amount, use this formula: Base Price = Total Amount \u00F7 (1 + GST Rate/100). For example, if the total is \u20B91,180 at 18% GST, the base price equals \u20B91,180 \u00F7 1.18 = \u20B91,000 and the GST component is \u20B9180. Our calculator handles this instantly when you select the inclusive option."
          }
        },
        {
          "@type": "Question",
          "name": "Who needs to register for GST in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST registration is mandatory for businesses with annual turnover exceeding \u20B940 lakhs for goods (\u20B920 lakhs in special category states) and \u20B920 lakhs for services (\u20B910 lakhs in special category states). Inter-state suppliers, e-commerce operators, casual taxable persons, and non-resident taxable persons must register regardless of turnover as per the CGST Act, 2017."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GST Composition Scheme and who can opt for it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The GST Composition Scheme is a simplified tax option for small businesses with turnover up to \u20B91.5 crore (\u20B975 lakhs for special category states). Manufacturers and traders pay GST at 1% of turnover, restaurants pay 5%, and other service providers pay 6%. Composition dealers cannot collect GST from customers, claim input tax credit, or make inter-state supplies."
          }
        },
        {
          "@type": "Question",
          "name": "What is Input Tax Credit (ITC) under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Input Tax Credit allows registered businesses to reduce GST paid on purchases from the GST payable on sales. For example, if you pay \u20B91,800 GST on raw materials and collect \u20B93,600 GST on finished goods, you remit only \u20B91,800 to the government. ITC claims require valid tax invoices, actual receipt of goods or services, and filing of GSTR-3B returns."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for late GST return filing in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late filing of GSTR-3B attracts a late fee of \u20B950 per day (\u20B925 CGST + \u20B925 SGST) for regular returns and \u20B920 per day for nil returns, capped at \u20B95,000 per return period. Additionally, interest at 18% per annum is charged on the outstanding tax liability from the due date. Persistent non-filing can lead to suspension or cancellation of GST registration."
          }
        },
        {
          "@type": "Question",
          "name": "Which goods and services are exempt from GST in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Essential goods exempt from GST include fresh fruits, vegetables, milk, eggs, bread, salt, natural honey, and unprocessed cereals. Exempt services include healthcare, education up to higher secondary level, public transport, agricultural services, and bank interest. Petroleum products, alcoholic liquor for human consumption, and electricity are outside the GST framework and taxed separately by states."
          }
        },
        {
          "@type": "Question",
          "name": "How is GST calculated on services like consulting or freelancing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most professional services such as consulting, freelancing, IT services, and accounting attract 18% GST. If the service provider and client are in the same state, 9% CGST plus 9% SGST applies. For inter-state services, 18% IGST applies. Freelancers with annual turnover below \u20B920 lakhs are exempt from GST registration and do not need to charge GST on their invoices."
          }
        },
        {
          "@type": "Question",
          "name": "What is Reverse Charge Mechanism (RCM) under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Reverse Charge Mechanism, the recipient of goods or services pays GST directly to the government instead of the supplier. RCM applies to notified goods and services, imports, purchases from unregistered dealers above specified limits, and services from goods transport agencies. The recipient must self-invoice and can claim ITC on RCM payments after remittance."
          }
        },
        {
          "@type": "Question",
          "name": "What is the GST rate on gold and jewellery in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gold, silver, and platinum jewellery attract 3 percent GST on the value of metal plus making charges. Making charges are taxed at 5 percent GST. For example on a gold necklace worth 1 lakh with 10000 making charges the total GST is 3000 on gold value plus 500 on making charges totalling 3500. Diamonds and precious stones attract 0.25 percent GST."
          }
        }
      ]
    }
    </script>
@endsection

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        :root {
            --primary: #1B4D3E;
            --primary-light: #2A7A5F;
            --primary-dark: #0F2E25;
            --accent: #F59E0B;
            --accent-light: #FCD34D;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #1A1A1A;
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

        body {
            font-family: var(--font-body);
            background: var(--surface);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        /* ====== STICKY TOC NAV ====== */
        .toc-nav {
            background: var(--primary-dark);
            position: sticky;
            top: 0;
            z-index: 100;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .toc-nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 0;
        }
        .toc-nav a {
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 12px 16px;
            transition: all 0.2s;
            border-bottom: 2px solid transparent;
            display: inline-block;
        }
        .toc-nav a:hover, .toc-nav a.active {
            color: #fff;
            border-bottom-color: var(--accent);
        }

        /* ====== BREADCRUMB ====== */
        .breadcrumb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0;
            font-size: 13px;
            color: var(--text-muted);
        }
        .breadcrumb a {
            color: var(--primary-light);
            text-decoration: none;
        }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

        /* ====== HERO ====== */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px 24px;
        }
        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .badge-updated {
            background: var(--primary);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: 0.3px;
        }
        .author-byline {
            font-size: 13px;
            color: var(--text-secondary);
        }
        .author-byline strong { color: var(--primary); font-weight: 600; }

        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero h1 span {
            color: var(--accent);
            display: inline;
        }

        /* ====== TL;DR SUMMARY ====== */
        .tldr {
            background: var(--card);
            border-left: 4px solid var(--accent);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 20px 24px;
            margin: 0 auto 32px;
            max-width: 1200px;
            box-shadow: var(--shadow-sm);
        }
        .tldr-label {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .tldr p {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* ====== LAYOUT ====== */
        .main-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }

        @media(min-width:900px) {
            .main-layout {
                grid-template-columns: 1fr 320px;
                gap: 40px;
            }
        }

        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }

        /* ====== CALCULATOR CARD ====== */
        .calc-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            margin-bottom: 40px;
            border: 1px solid var(--border);
        }
        .calc-card h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 24px;
        }

        .calc-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            color: var(--text);
            background: var(--surface);
            transition: border-color 0.2s;
            outline: none;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--primary);
        }
        .form-group input[type="number"] {
            font-family: var(--font-mono);
            font-size: 18px;
            font-weight: 700;
        }

        /* Toggle switch for inclusive/exclusive */
        .toggle-group {
            display: flex;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
            gap: 4px;
        }
        .toggle-btn {
            flex: 1;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            -webkit-tap-highlight-color: transparent;
        }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active {
            background: var(--card);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        /* Transaction type toggle */
        .txn-toggle {
            display: flex;
            gap: 4px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
        }
        .txn-btn {
            flex: 1;
            padding: 10px 12px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }
        .txn-btn * { pointer-events: none; }
        .txn-btn.active {
            background: var(--card);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .btn-calculate {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            margin-top: 8px;
        }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }

        /* Results */
        .result-section {
            margin-top: 28px;
            display: none;
        }
        .result-section.visible { display: block; }

        .result-divider {
            height: 1px;
            background: var(--border);
            margin-bottom: 24px;
        }

        .result-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
        }
        @media (min-width: 500px) {
            .result-grid { grid-template-columns: 1fr 1fr; }
        }

        .result-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 16px 20px;
            border: 1px solid var(--border);
        }
        .result-card.highlight {
            background: var(--primary);
            border-color: var(--primary);
        }
        .result-card.highlight .result-label,
        .result-card.highlight .result-value { color: #fff; }

        .result-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .result-value {
            font-family: var(--font-mono);
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .result-breakdown {
            margin-top: 16px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 16px 20px;
        }
        .breakdown-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            font-size: 14px;
        }
        .breakdown-row:not(:last-child) {
            border-bottom: 1px dashed var(--border);
        }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value {
            font-family: var(--font-mono);
            font-weight: 700;
            color: var(--text);
        }

        .btn-reset {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 16px;
            padding: 8px 16px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--card);
            color: var(--text-muted);
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }

        /* ====== CONTENT SECTIONS ====== */
        .content-section {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 32px;
            margin-bottom: 32px;
            border: 1px solid var(--border);
        }
        .content-section h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 16px;
            line-height: 1.3;
        }
        .content-section h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-dark);
            margin: 20px 0 10px;
        }
        .content-section p {
            font-size: 15px;
            color: var(--text-secondary);
            margin-bottom: 14px;
            line-height: 1.75;
        }
        .content-section a {
            color: var(--primary-light);
            text-decoration: underline;
            text-underline-offset: 2px;
        }
        .content-section a:hover { color: var(--primary); }

        /* GST Rate Table */
        .rate-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0;
            font-size: 14px;
        }
        .rate-table thead th {
            background: var(--primary);
            color: #fff;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text-secondary);
        }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        .rate-badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 20px;
            font-family: var(--font-mono);
            font-weight: 700;
            font-size: 13px;
        }
        .rate-badge.r5 { background: #DBEAFE; color: #1D4ED8; }
        .rate-badge.r12 { background: #D1FAE5; color: #059669; }
        .rate-badge.r18 { background: #FEF3C7; color: #B45309; }
        .rate-badge.r28 { background: #FEE2E2; color: #DC2626; }
        .rate-badge.r0 { background: #F3F4F6; color: #6B7280; }
        .rate-badge.r3 { background: #EDE9FE; color: #7C3AED; }

        /* Formula Box */
        .formula-box {
            background: var(--primary-dark);
            color: #fff;
            border-radius: var(--radius);
            padding: 20px 24px;
            margin: 16px 0;
            font-family: var(--font-mono);
            font-size: 14px;
            line-height: 1.8;
            overflow-x: auto;
        }
        .formula-box .label {
            color: var(--accent-light);
            font-weight: 700;
        }

        /* Info callout */
        .callout {
            background: #EFF6FF;
            border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }

        .callout.warn {
            background: #FFFBEB;
            border-left-color: var(--accent);
        }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

        /* ====== FAQ ACCORDION ====== */
        .faq-item {
            background: var(--surface);
            border-radius: var(--radius);
            margin-bottom: 10px;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: box-shadow 0.2s;
        }
        .faq-item:hover { box-shadow: var(--shadow-sm); }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 16px 20px;
            border: none;
            background: none;
            font-family: var(--font-body);
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            text-align: left;
            line-height: 1.4;
            gap: 12px;
            -webkit-tap-highlight-color: transparent;
        }
        .faq-question * { pointer-events: none; }
        .faq-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: transform 0.3s;
        }
        .faq-item.open .faq-icon { transform: rotate(45deg); }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.35s ease;
        }
        .faq-item.open .faq-answer {
            max-height: 500px;
        }
        .faq-answer-inner {
            padding: 0 20px 16px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

        /* ====== SIDEBAR ====== */
        .sidebar-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
        }
        .sidebar-card h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 14px;
        }
        .sidebar-link {
            display: block;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s;
            margin-bottom: 4px;
            -webkit-tap-highlight-color: rgba(0,0,0,0.05);
            touch-action: manipulation;
        }
        .sidebar-link:hover {
            background: var(--surface-alt);
            color: var(--primary);
        }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .cta-card p {
            font-size: 14px;
            color: rgba(255,255,255,0.85);
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--accent);
            color: var(--primary-dark);
            font-weight: 700;
            font-size: 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s;
            -webkit-tap-highlight-color: rgba(0,0,0,0.1);
            touch-action: manipulation;
        }
        .cta-btn:hover { background: var(--accent-light); }

        /* ====== FOOTER ====== */
        .office-strip {
            background: var(--primary-dark);
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 14px;
        }
        .office-strip .offices {
            font-weight: 600;
            color: #fff;
            margin-bottom: 4px;
        }
        .office-strip .trust {
            color: var(--accent);
            font-weight: 600;
        }

        .footer {
            background: var(--primary-dark);
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            padding: 16px 20px;
            font-size: 13px;
            color: rgba(255,255,255,0.5);
        }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        /* ====== NOSCRIPT ====== */
        .noscript-box {
            background: #FEE2E2;
            border: 2px solid #DC2626;
            border-radius: var(--radius);
            padding: 20px;
            text-align: center;
            color: #991B1B;
            font-weight: 600;
        }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 899px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }
    
/* ====== RESPONSIVE - SIDEBAR STACK (max 899px) ====== */
@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}

/* ====== RESPONSIVE - TABLET (max 1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE - SMALL TABLET (max 899px) ====== */
@media(max-width:899px){
.hero h1{font-size:26px}
.calc-card{padding:20px}
.content-section{padding:20px}
.toc-nav a{padding:10px 12px;font-size:12px}
.toggle-group{flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:0;padding:10px 12px;font-size:13px}
.toggle-btn small{display:none}
.rate-table thead th{padding:10px 12px;font-size:11px}
.rate-table tbody td{padding:10px 12px;font-size:13px}
.result-value{font-size:18px}
.sidebar-col{order:2}
.formula-box{padding:16px 18px;font-size:13px}
}

/* ====== RESPONSIVE - MOBILE (max 480px) ====== */
@media(max-width:480px){
.hero{padding:20px 14px 16px}
.hero h1{font-size:22px}
.hero-meta{gap:8px}
.badge-updated{font-size:11px;padding:3px 10px}
.author-byline{font-size:12px}
.tldr{padding:16px 18px;margin-left:14px;margin-right:14px}
.tldr p{font-size:14px}
.main-layout{padding:0 14px 24px;gap:24px}
.calc-card{padding:16px;margin-bottom:24px}
.calc-card h2{font-size:19px;margin-bottom:16px}
.content-section{padding:16px;margin-bottom:24px}
.content-section h2{font-size:20px}
.content-section h3{font-size:16px}
.content-section p{font-size:14px}
.toggle-group{flex-direction:column}
.toggle-btn{padding:12px 14px;font-size:14px;text-align:center}
.toggle-btn small{display:inline}
.calc-row{gap:14px;margin-bottom:14px}
.form-group label{font-size:12px}
.form-group input,.form-group select{padding:10px 14px;font-size:15px}
.form-group input[type="number"]{font-size:16px}
.btn-calculate{padding:12px;font-size:15px}
.rate-table{font-size:12px}
.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}
.rate-table tbody td{padding:8px 10px;font-size:12px}
.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}
.callout{padding:14px 16px}
.callout p{font-size:13px}
.faq-question{padding:14px 16px;font-size:14px}
.faq-answer-inner{padding:0 16px 14px;font-size:13px}
.faq-icon{width:22px;height:22px;font-size:14px}
.sidebar-card{padding:20px}
.sidebar-card h3{font-size:15px}
.sidebar-link{padding:8px 12px;font-size:13px}
.cta-card{padding:22px 20px}
.cta-card h3{font-size:16px}
.cta-card p{font-size:13px}
.cta-btn{padding:10px 24px;font-size:13px}
.breadcrumb{font-size:12px;padding:12px 14px 0}
.toc-nav a{padding:8px 10px;font-size:11px}
.result-value{font-size:18px}
}

/* ====== RESPONSIVE - VERY SMALL (max 360px) ====== */
@media(max-width:360px){
.hero h1{font-size:20px}
.calc-card{padding:14px}
.content-section{padding:14px}
.content-section h2{font-size:18px}
.rate-table thead th{font-size:9px;padding:6px 8px}
.rate-table tbody td{font-size:11px;padding:6px 8px}
.toggle-btn{font-size:13px;padding:10px 12px}
}
</style>
@section('content')
<!-- Sticky TOC Nav -->
    <nav class="toc-nav" aria-label="Page Navigation">
        <div class="toc-nav-inner">
            <a href="#calculator">Calculator</a>
            <a href="#how-to-calculate">How to Calculate</a>
            <a href="#gst-rates">GST Rates</a>
            <a href="#cgst-sgst-igst">CGST vs SGST vs IGST</a>
            <a href="#formulas">Formulas</a>
            <a href="#compliance">GST Compliance</a>
            <a href="#faqs">FAQs</a>
        </div>
    </nav>

    <!-- Breadcrumb -->
    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a>
        <span>&rsaquo;</span>
        GST Calculator
    </nav> --}}

    <!-- Hero -->
    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>GST Calculator India &mdash; <span>Free CGST, SGST & IGST</span> Calculator for FY 2025&ndash;26</h1>
    </header>

    <!-- TL;DR -->
    <div class="tldr">
        <div class="tldr-label">TL;DR</div>
        <p>This GST calculator computes the exact CGST, SGST, and IGST breakdown for any amount under all Indian GST slabs &mdash; 5%, 12%, 18%, and 28%. It supports both GST-inclusive (reverse calculation) and GST-exclusive modes, with automatic split between intra-state and inter-state transactions. Built by a practicing Chartered Accountant; useful for invoice preparation, pricing decisions, and compliance verification.</p>
    </div>

    <!-- Main Layout -->
    <div class="main-layout">
        <div class="content-col">

            <!-- ====== CALCULATOR ====== -->
            <div class="calc-card">
                <h2>Calculate GST Amount</h2>

                <noscript>
                    <div class="noscript-box">
                        This GST calculator requires JavaScript to function. Please enable JavaScript in your browser settings, or use the manual formulas provided below.
                    </div>
                </noscript>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="amount">Amount (&#8377;)</label>
                        <input type="number" id="amount" placeholder="Enter amount" min="0" step="0.01" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="gstRate">GST Rate</label>
                        <select id="gstRate">
                            <option value="5">5%</option>
                            <option value="12">12%</option>
                            <option value="18" selected>18%</option>
                            <option value="28">28%</option>
                            <option value="0.25">0.25% (Rough Precious Stones)</option>
                            <option value="3">3% (Gold, Silver)</option>
                            <option value="0">0% (Exempt)</option>
                            <option value="custom">Custom Rate</option>
                        </select>
                    </div>
                </div>

                <!-- Custom Rate (hidden by default) -->
                <div class="calc-row" id="customRateRow" style="display:none;">
                    <div class="form-group">
                        <label for="customRate">Custom GST Rate (%)</label>
                        <input type="number" id="customRate" placeholder="e.g. 6" min="0" max="100" step="0.01">
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label>Amount Type</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="exclusive" onclick="setAmountType(this)">GST Exclusive<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Add GST to price</small></button>
                            <button type="button" class="toggle-btn" data-value="inclusive" onclick="setAmountType(this)">GST Inclusive<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Extract GST from price</small></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Transaction Type</label>
                        <div class="txn-toggle">
                            <button type="button" class="txn-btn active" data-value="intra" onclick="setTxnType(this)">Intra-State<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">CGST + SGST</small></button>
                            <button type="button" class="txn-btn" data-value="inter" onclick="setTxnType(this)">Inter-State<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">IGST</small></button>
                        </div>
                    </div>
                </div>

                <button class="btn-calculate" onclick="calculateGST()">Calculate GST</button>

                <!-- Results -->
                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div class="result-grid">
                        <div class="result-card">
                            <div class="result-label">Taxable Amount (Base Price)</div>
                            <div class="result-value" id="resBase">&mdash;</div>
                        </div>
                        <div class="result-card">
                            <div class="result-label">Total GST</div>
                            <div class="result-value" id="resGST">&mdash;</div>
                        </div>
                        <div class="result-card highlight" style="grid-column: 1 / -1;">
                            <div class="result-label">Total Amount (Inclusive of GST)</div>
                            <div class="result-value" id="resTotal">&mdash;</div>
                        </div>
                    </div>

                    <div class="result-breakdown" id="breakdownSection">
                        <!-- Populated by JS -->
                    </div>

                    <button class="btn-reset" onclick="resetCalc()">&#8634; Reset Calculator</button>
                </div>
            </div>

            <!-- ====== HOW TO CALCULATE ====== -->
            <section class="content-section" id="how-to-calculate">
                <h2>How to Calculate GST Using This Tool</h2>
                <p>This free GST calculator is designed for Indian businesses, freelancers, manufacturers, and consumers. Follow these steps to get an instant GST breakdown:</p>

                <h3>Step 1: Enter the Amount</h3>
                <p>Type the value of your goods or services in the amount field. This can be the base price (before GST) or the total price (after GST) depending on your selection in the next step.</p>

                <h3>Step 2: Select the GST Rate</h3>
                <p>Choose from the standard GST slabs &mdash; 5%, 12%, 18%, or 28% &mdash; or use special rates like 0.25% for rough precious stones, 3% for gold and silver, or enter a custom rate. The GST rate depends on the <a href="https://cbic-gst.gov.in/gst-goods-services-rates.html" target="_blank" rel="noopener">HSN/SAC classification</a> of your goods or services as notified by the <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a>.</p>

                <h3>Step 3: Choose Amount Type</h3>
                <p><strong>GST Exclusive</strong> means you know the base price and want to add GST on top &mdash; common in B2B transactions and invoice preparation. <strong>GST Inclusive</strong> means you have the final MRP or total price and want to extract the base price and GST component &mdash; useful for analyzing retail invoices and receipts.</p>

                <h3>Step 4: Select Transaction Type</h3>
                <p>For transactions within the same state (e.g., seller and buyer both in Maharashtra), select <strong>Intra-State</strong> to get the CGST and SGST split. For transactions between different states, select <strong>Inter-State</strong> to get the IGST amount. This classification is governed by the <a href="https://www.indiacode.nic.in/handle/123456789/2246" target="_blank" rel="noopener">IGST Act, 2017</a>.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Always verify the GST rate applicable to your specific goods or services using the official <a href="https://cbic-gst.gov.in/gst-goods-services-rates.html" target="_blank" rel="noopener">CBIC rate schedule</a>. HSN codes for goods and SAC codes for services determine the exact rate. Mis-classification can result in short payment, interest, and penalties under Section 73/74 of the CGST Act.</p>
                </div>
            </section>

            <!-- ====== GST RATES TABLE ====== -->
            <section class="content-section" id="gst-rates">
                <h2>Current GST Slab Rates in India (2026)</h2>
                <p>The <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a> determines tax rates for all goods and services in India. Below are the main GST slabs with representative examples:</p>

                <table class="rate-table">
                    <thead>
                        <tr>
                            <th>GST Rate</th>
                            <th>Goods Examples</th>
                            <th>Services Examples</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="rate-badge r0">0%</span></td>
                            <td>Fresh fruits, vegetables, milk, eggs, bread, salt, natural honey, unprocessed cereals</td>
                            <td>Healthcare, education (up to higher secondary), public transport, agricultural services</td>
                        </tr>
                        <tr>
                            <td><span class="rate-badge r5">5%</span></td>
                            <td>Packaged food, sugar, tea, edible oil, footwear below &#8377;500, apparel below &#8377;1,000</td>
                            <td>Transport of goods by rail, economy-class air travel, small restaurants (turnover &lt; &#8377;1.5 Cr without ITC)</td>
                        </tr>
                        <tr>
                            <td><span class="rate-badge r12">12%</span></td>
                            <td>Butter, cheese, ghee, processed foods, mobile phones, sewing machines, fertilizers</td>
                            <td>Business-class air travel, construction services (affordable housing), work contracts for government</td>
                        </tr>
                        <tr>
                            <td><span class="rate-badge r18">18%</span></td>
                            <td>Pasta, soap, toothpaste, hair oil, capital goods, industrial machinery, computers, printers</td>
                            <td>IT services, consulting, accounting, restaurant dining (with ITC), telecom, banking, insurance</td>
                        </tr>
                        <tr>
                            <td><span class="rate-badge r28">28%</span></td>
                            <td>Cement, automobiles, paint, ACs, washing machines, aerated drinks, cigarettes, pan masala</td>
                            <td>5-star hotel accommodation (tariff &gt; &#8377;7,500), gambling, horse racing, amusement parks</td>
                        </tr>
                        <tr>
                            <td><span class="rate-badge r3">3%</span></td>
                            <td>Gold, silver, platinum, gold jewellery, silver jewellery</td>
                            <td>Job work services for gold jewellery manufacturing</td>
                        </tr>
                    </tbody>
                </table>

                <div class="callout warn">
                    <p><strong>Note:</strong> GST rates are subject to revision by the GST Council. Certain items like petroleum products, alcoholic liquor for human consumption, and electricity are currently outside the GST framework and taxed separately by state governments. Always verify the latest rates at <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">cbic-gst.gov.in</a>.</p>
                </div>
            </section>

            <!-- ====== CGST SGST IGST ====== -->
            <section class="content-section" id="cgst-sgst-igst">
                <h2>Understanding CGST, SGST, and IGST</h2>
                <p>India's GST operates on a dual model where both the Central and State governments levy tax simultaneously on the same base. The type of GST component depends entirely on whether the transaction is within the same state or across state borders:</p>

                <h3>CGST (Central Goods and Services Tax)</h3>
                <p>CGST is collected by the Central Government on intra-state supplies of goods and services. The rate equals half of the applicable GST rate. Revenue from CGST goes entirely to the Central Government. It is governed by the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>.</p>

                <h3>SGST (State Goods and Services Tax)</h3>
                <p>SGST is collected by the State Government on the same intra-state supplies. The rate equals half of the GST rate &mdash; matching CGST exactly. Revenue goes entirely to the state where consumption occurs. For Union Territories, UTGST (Union Territory GST) replaces SGST.</p>

                <h3>IGST (Integrated Goods and Services Tax)</h3>
                <p>IGST applies to inter-state supplies &mdash; when the supplier's state and the place of supply are different. The full GST rate is charged as IGST, collected by the Central Government, and then distributed to the destination state. IGST also applies to imports into India.</p>

                <div class="formula-box">
                    <span class="label">Example: 18% GST on &#8377;10,000</span><br><br>
                    <strong>Intra-State (Same State):</strong><br>
                    &nbsp;&nbsp;CGST = 9% &times; &#8377;10,000 = &#8377;900<br>
                    &nbsp;&nbsp;SGST = 9% &times; &#8377;10,000 = &#8377;900<br>
                    &nbsp;&nbsp;Total = &#8377;10,000 + &#8377;1,800 = <span class="label">&#8377;11,800</span><br><br>
                    <strong>Inter-State (Different State):</strong><br>
                    &nbsp;&nbsp;IGST = 18% &times; &#8377;10,000 = &#8377;1,800<br>
                    &nbsp;&nbsp;Total = &#8377;10,000 + &#8377;1,800 = <span class="label">&#8377;11,800</span>
                </div>

                <p>The total tax amount remains the same regardless of whether it is an intra-state or inter-state transaction. The only difference is how the tax is distributed between the Central and State governments.</p>
            </section>

            <!-- ====== FORMULAS ====== -->
            <section class="content-section" id="formulas">
                <h2>GST Calculation Formulas</h2>
                <p>Understanding the formulas behind GST calculation helps verify invoices and ensures compliance. Here are both the standard and reverse calculation methods:</p>

                <h3>Adding GST (Exclusive Calculation)</h3>
                <p>When you know the base price and need to find the total amount including GST:</p>
                <div class="formula-box">
                    <span class="label">GST Amount</span> = Base Price &times; (GST Rate &divide; 100)<br>
                    <span class="label">Total Price</span> = Base Price + GST Amount<br><br>
                    <span class="label">Example:</span> Base = &#8377;5,000, Rate = 18%<br>
                    GST = &#8377;5,000 &times; 0.18 = &#8377;900<br>
                    Total = &#8377;5,000 + &#8377;900 = <span class="label">&#8377;5,900</span>
                </div>

                <h3>Removing GST (Inclusive / Reverse Calculation)</h3>
                <p>When you have the total price (MRP) that already includes GST and need to extract the base price:</p>
                <div class="formula-box">
                    <span class="label">Base Price</span> = Total Amount &divide; (1 + GST Rate &divide; 100)<br>
                    <span class="label">GST Amount</span> = Total Amount &minus; Base Price<br><br>
                    <span class="label">Example:</span> Total = &#8377;5,900, Rate = 18%<br>
                    Base = &#8377;5,900 &divide; 1.18 = &#8377;5,000<br>
                    GST = &#8377;5,900 &minus; &#8377;5,000 = <span class="label">&#8377;900</span>
                </div>

                <h3>CGST and SGST Split (Intra-State)</h3>
                <div class="formula-box">
                    <span class="label">CGST</span> = GST Amount &divide; 2<br>
                    <span class="label">SGST</span> = GST Amount &divide; 2<br><br>
                    <span class="label">Example:</span> GST = &#8377;900 at 18%<br>
                    CGST (9%) = &#8377;450<br>
                    SGST (9%) = <span class="label">&#8377;450</span>
                </div>
            </section>

            <!-- ====== GST COMPLIANCE ====== -->
            <section class="content-section" id="compliance">
                <h2>GST Registration and Compliance in India</h2>

                <h3>Who Must Register for GST?</h3>
                <p>Under the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>, GST registration is mandatory when annual aggregate turnover exceeds &#8377;40 lakhs for suppliers of goods (&#8377;20 lakhs for special category states) and &#8377;20 lakhs for service providers (&#8377;10 lakhs for special category states). Certain categories must register regardless of turnover: inter-state suppliers, e-commerce operators, casual taxable persons, and non-resident taxable persons. Registration is done through the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Portal</a>.</p>

                <h3>Input Tax Credit (ITC)</h3>
                <p>Input Tax Credit is the mechanism that eliminates the cascading effect of taxes. A registered business can claim credit for GST paid on purchases and set it off against GST collected on sales. ITC is available only when the supplier has filed their return, the recipient has received the goods/services, and the recipient has filed GSTR-3B. ITC claims are reconciled through GSTR-2B, the auto-generated statement from the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GSTN portal</a>.</p>

                <h3>GST Return Filing</h3>
                <p>Regular taxpayers must file GSTR-1 (outward supplies) by the 11th of the following month and GSTR-3B (summary return with tax payment) by the 20th. Composition dealers file GSTR-4 annually and CMP-08 quarterly. The <a href="https://www.icai.org/post/gst-and-indirect-taxes-committee" target="_blank" rel="noopener">ICAI's GST and Indirect Taxes Committee</a> publishes regular guidance notes to help practitioners navigate filing requirements.</p>

                <div class="callout">
                    <p><strong>Need Expert GST Assistance?</strong> Patron Accounting offers comprehensive GST registration, filing, and advisory services across India. Our team of Chartered Accountants ensures your GST compliance is always up to date. <a href="https://wa.me/919459456700?text=Hi%2C%20I%20found%20you%20through%20the%20GST%20Calculator%20tool.%20I%20need%20help%20with%20GST%20registration%20and%20filing." target="_blank" rel="noopener">Get expert GST assistance &rarr;</a></p>
                </div>
            </section>

            <!-- ====== FAQ ====== -->
            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About GST Calculation</h2>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How do I calculate GST on a product in India?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">To calculate GST, multiply the base price by the applicable GST rate (5%, 12%, 18%, or 28%) and divide by 100. For example, if a product costs &#8377;1,000 and the GST rate is 18%, the GST amount is &#8377;180 and the total price is &#8377;1,180. For intra-state sales, this splits equally into CGST and SGST &mdash; &#8377;90 each in this case.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the difference between GST inclusive and GST exclusive?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">GST exclusive means the price does not include tax &mdash; GST is added on top. This is standard in B2B invoices. GST inclusive means the displayed price already contains the tax component. To extract the base price from a GST-inclusive amount, divide the total by (1 + GST rate/100). Retail MRP prices in India are typically GST inclusive.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the difference between CGST, SGST, and IGST?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">CGST (Central GST) and SGST (State GST) apply to intra-state transactions &mdash; sales within the same state. Each equals half the total GST rate. IGST (Integrated GST) applies to inter-state transactions &mdash; sales between different states &mdash; and equals the full GST rate. IGST is collected by the Central Government and distributed to the destination state.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What are the current GST slab rates in India for 2026?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">India has four main GST slabs: 5% for essential items like packaged food and economy footwear, 12% for processed foods and business-class air travel, 18% for most goods and services including IT services and restaurant dining, and 28% for luxury items like automobiles and cement. Some goods attract 0%, 0.25%, or 3% rates as special categories.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How do I calculate GST from a total amount (reverse calculation)?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">To reverse-calculate GST from a total inclusive amount, use this formula: Base Price = Total Amount &divide; (1 + GST Rate/100). For example, if the total is &#8377;1,180 at 18% GST, the base price equals &#8377;1,180 &divide; 1.18 = &#8377;1,000 and the GST component is &#8377;180. Our calculator handles this instantly when you select the GST Inclusive option.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Who needs to register for GST in India?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">GST registration is mandatory for businesses with annual turnover exceeding &#8377;40 lakhs for goods (&#8377;20 lakhs in special category states) and &#8377;20 lakhs for services (&#8377;10 lakhs in special category states). Inter-state suppliers, e-commerce operators, casual taxable persons, and non-resident taxable persons must register regardless of turnover as per the CGST Act, 2017.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the GST Composition Scheme and who can opt for it?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">The GST Composition Scheme is a simplified tax option for small businesses with turnover up to &#8377;1.5 crore (&#8377;75 lakhs for special category states). Manufacturers and traders pay GST at 1% of turnover, restaurants pay 5%, and other service providers pay 6%. Composition dealers cannot collect GST from customers, claim input tax credit, or make inter-state supplies.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is Input Tax Credit (ITC) under GST?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Input Tax Credit allows registered businesses to reduce GST paid on purchases from the GST payable on sales. For example, if you pay &#8377;1,800 GST on raw materials and collect &#8377;3,600 GST on finished goods, you remit only &#8377;1,800 to the government. ITC claims require valid tax invoices, actual receipt of goods or services, and filing of GSTR-3B returns.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What are the penalties for late GST return filing in India?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Late filing of GSTR-3B attracts a late fee of &#8377;50 per day (&#8377;25 CGST + &#8377;25 SGST) for regular returns and &#8377;20 per day for nil returns, capped at &#8377;5,000 per return period. Additionally, interest at 18% per annum is charged on the outstanding tax liability from the due date. Persistent non-filing can lead to suspension or cancellation of GST registration.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Which goods and services are exempt from GST in India?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Essential goods exempt from GST include fresh fruits, vegetables, milk, eggs, bread, salt, natural honey, and unprocessed cereals. Exempt services include healthcare, education up to higher secondary level, public transport, agricultural services, and bank interest. Petroleum products, alcoholic liquor for human consumption, and electricity are outside the GST framework and taxed separately by states.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How is GST calculated on services like consulting or freelancing?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Most professional services such as consulting, freelancing, IT services, and accounting attract 18% GST. If the service provider and client are in the same state, 9% CGST plus 9% SGST applies. For inter-state services, 18% IGST applies. Freelancers with annual turnover below &#8377;20 lakhs are exempt from GST registration and do not need to charge GST on their invoices.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is Reverse Charge Mechanism (RCM) under GST?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Under Reverse Charge Mechanism, the recipient of goods or services pays GST directly to the government instead of the supplier. RCM applies to notified goods and services, imports, purchases from unregistered dealers above specified limits, and services from goods transport agencies. The recipient must self-invoke and can claim ITC on RCM payments after remittance.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the GST rate on gold and jewellery in India?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Gold, silver, and platinum jewellery attract 3% GST on the value of metal plus making charges. Making charges are taxed at 5% GST separately. For example, on a gold necklace worth &#8377;1 lakh with &#8377;10,000 making charges, total GST is &#8377;3,000 on gold value plus &#8377;500 on making charges, totalling &#8377;3,500. Diamonds and precious stones attract 0.25% GST.</div>
                    </div>
                </div>
            </section>

        </div>

        <!-- ====== SIDEBAR ====== -->
        <aside class="sidebar-col">
            <!-- CTA Card -->
            <div class="cta-card">
                <h3>Need GST Help?</h3>
                <p>Our Chartered Accountants handle GST registration, monthly return filing, and compliance audits for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20GST%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>

            <!-- Related Tools -->
            <div class="sidebar-card">
                <h3>Related Services</h3>
                <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">&rarr;</span></a>
                <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a>
                <a href="/itr-filing-for-salary" class="sidebar-link">ITR Filing for Salary <span class="arrow">&rarr;</span></a>
                <a href="/gst-returns-for-e-commerce-operator" class="sidebar-link">GST for E-commerce <span class="arrow">&rarr;</span></a>
                <a href="/gst-return-filing-for-freelancers" class="sidebar-link">GST for Freelancers <span class="arrow">&rarr;</span></a>
                <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
            </div>

            <!-- Related Services -->
            <div class="sidebar-card">
                <h3>GST Services</h3>
                <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
                <a href="/gst-returns" class="sidebar-link">GST Returns Filing <span class="arrow">&rarr;</span></a>
                <a href="/gst-audit" class="sidebar-link">GST Audit Services <span class="arrow">&rarr;</span></a>
                <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a>
            </div>

            <!-- Related Blog -->
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance for Companies <span class="arrow">&rarr;</span></a>
                <a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Income Tax Scrutiny Guide <span class="arrow">&rarr;</span></a>
                <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div><span class="trust">25,000+ Businesses Trust Us</span>
    </div><!-- ====== JAVASCRIPT ====== -->

<script>
        // State
        let amountType = 'exclusive';
        let txnType = 'intra';

        // Custom rate toggle
        document.getElementById('gstRate').addEventListener('change', function() {
            document.getElementById('customRateRow').style.display = this.value === 'custom' ? '' : 'none';
        });

        function setAmountType(btn) {
            const el = btn.closest('.toggle-btn') || btn;
            amountType = el.dataset.value;
            el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
        }

        function setTxnType(btn) {
            const el = btn.closest('.txn-btn') || btn;
            txnType = el.dataset.value;
            el.parentElement.querySelectorAll('.txn-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
        }

        function formatCurrency(num) {
            return '\u20B9' + num.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }

        function calculateGST() {
            const amountInput = parseFloat(document.getElementById('amount').value);
            const rateSelect = document.getElementById('gstRate').value;
            let rate;

            if (rateSelect === 'custom') {
                rate = parseFloat(document.getElementById('customRate').value);
            } else {
                rate = parseFloat(rateSelect);
            }

            if (isNaN(amountInput) || amountInput <= 0) {
                alert('Please enter a valid amount greater than zero.');
                return;
            }
            if (isNaN(rate) || rate < 0) {
                alert('Please enter a valid GST rate.');
                return;
            }

            let basePrice, gstAmount, totalPrice;

            if (amountType === 'exclusive') {
                basePrice = amountInput;
                gstAmount = basePrice * (rate / 100);
                totalPrice = basePrice + gstAmount;
            } else {
                totalPrice = amountInput;
                basePrice = totalPrice / (1 + rate / 100);
                gstAmount = totalPrice - basePrice;
            }

            // Round to 2 decimals
            basePrice = Math.round(basePrice * 100) / 100;
            gstAmount = Math.round(gstAmount * 100) / 100;
            totalPrice = Math.round(totalPrice * 100) / 100;

            document.getElementById('resBase').textContent = formatCurrency(basePrice);
            document.getElementById('resGST').textContent = formatCurrency(gstAmount);
            document.getElementById('resTotal').textContent = formatCurrency(totalPrice);

            // Breakdown
            const breakdown = document.getElementById('breakdownSection');
            let html = '';

            if (txnType === 'intra') {
                const halfRate = rate / 2;
                const cgst = Math.round((gstAmount / 2) * 100) / 100;
                const sgst = Math.round((gstAmount - cgst) * 100) / 100;
                html = `
                    <div class="breakdown-row">
                        <span class="breakdown-label">Taxable Value</span>
                        <span class="breakdown-value">${formatCurrency(basePrice)}</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">CGST @ ${halfRate}%</span>
                        <span class="breakdown-value">${formatCurrency(cgst)}</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">SGST @ ${halfRate}%</span>
                        <span class="breakdown-value">${formatCurrency(sgst)}</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label"><strong>Total (incl. GST)</strong></span>
                        <span class="breakdown-value"><strong>${formatCurrency(totalPrice)}</strong></span>
                    </div>
                `;
            } else {
                html = `
                    <div class="breakdown-row">
                        <span class="breakdown-label">Taxable Value</span>
                        <span class="breakdown-value">${formatCurrency(basePrice)}</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">IGST @ ${rate}%</span>
                        <span class="breakdown-value">${formatCurrency(gstAmount)}</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label"><strong>Total (incl. GST)</strong></span>
                        <span class="breakdown-value"><strong>${formatCurrency(totalPrice)}</strong></span>
                    </div>
                `;
            }
            breakdown.innerHTML = html;

            document.getElementById('resultSection').classList.add('visible');

            // Scroll to results
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() {
            document.getElementById('amount').value = '';
            document.getElementById('gstRate').value = '18';
            document.getElementById('customRateRow').style.display = 'none';
            document.getElementById('resultSection').classList.remove('visible');
            amountType = 'exclusive';
            txnType = 'intra';
            document.querySelectorAll('.toggle-btn').forEach((b, i) => b.classList.toggle('active', i === 0));
            document.querySelectorAll('.txn-btn').forEach((b, i) => b.classList.toggle('active', i === 0));
        }

        // FAQ accordion
        function toggleFaq(e) {
            const btn = e.closest ? e.closest('.faq-question') || e : e;
            const item = btn.closest('.faq-item');
            if (!item) return;
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        }

        // Calculate on Enter key
        document.getElementById('amount').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') calculateGST();
        });

        // Sticky nav active state
        const sections = document.querySelectorAll('[id]');
        const navLinks = document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(s => {
                const top = s.offsetTop - 80;
                if (pageYOffset >= top) current = s.getAttribute('id');
            });
            navLinks.forEach(link => {
                link.classList.toggle('active', link.getAttribute('href') === '#' + current);
            });
        });
    </script>

@endsection
