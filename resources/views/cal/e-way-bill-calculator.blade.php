@extends('layouts.app')
@section('meta')
    <title>E-Way Bill Calculator India | Validity &amp; Distance</title>
    <meta name="description" content="Free e-way bill calculator: compute validity by distance and cargo type under GST Rule 138, with the &#8377;50,000 threshold check for Indian businesses. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/e-way-bill-calculator">
    <meta property="og:title" content="E-Way Bill Calculator India &mdash; Free Validity Tool 2026">
    <meta property="og:description" content="E-Way Bill Calculator computes validity period based on distance and cargo type under GST Rule 138 for Indian businesses.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/e-way-bill-calculator">
    <meta property="og:image" content="/tools/e-way-bill-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="E-Way Bill Calculator India &mdash; Free Validity Tool 2026">
    <meta name="twitter:description" content="E-Way Bill Calculator computes validity and checks threshold under GST. Try now!">
    <meta name="twitter:image" content="/tools/e-way-bill-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "E-Way Bill Calculator India",
      "description": "E-Way Bill Calculator computes the validity period for e-way bills based on distance and cargo type under GST Rule 138. Checks whether consignment value exceeds the \u20B950,000 threshold, calculates days of validity for regular and over-dimensional cargo, and provides state-wise intra-state threshold information for Indian businesses.",
      "url": "/tools/e-way-bill-calculator",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-03-05",
      "dateModified": "2026-03-05",
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
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "E-Way Bill Calculator", "item": "/tools/e-way-bill-calculator"}
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
          "name": "What is an E-Way Bill under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An E-Way Bill is a mandatory electronic document required under GST for transporting goods worth more than \u20B950,000 within or across states in India. It is generated on the E-Way Bill portal before goods begin moving and must be carried by the transporter. The bill contains details of goods, consignor, consignee, and transporter, ensuring transparency and compliance in goods movement under Rule 138 of CGST Rules."
          }
        },
        {
          "@type": "Question",
          "name": "When is an E-Way Bill required in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An E-Way Bill is required when goods worth more than \u20B950,000 are transported inter-state. For intra-state movement, thresholds vary by state \u2014 Maharashtra and Delhi require it above \u20B91,00,000, while Tamil Nadu sets it at \u20B91,00,000. It is also mandatory regardless of value for inter-state movement of handicraft goods and goods sent for job work by a principal to a registered job worker."
          }
        },
        {
          "@type": "Question",
          "name": "How is E-Way Bill validity calculated based on distance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "E-Way Bill validity is calculated as one day for every 200 km or part thereof for regular cargo. For Over Dimensional Cargo, validity is one day for every 20 km or part thereof. Validity starts when Part B (vehicle details) is first updated. For example, a distance of 450 km gives 3 days validity for regular cargo (200 + 200 + 50 = 3 parts). Maximum distance allowed is 4,000 km per single bill."
          }
        },
        {
          "@type": "Question",
          "name": "What is Over Dimensional Cargo (ODC) for E-Way Bill purposes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Over Dimensional Cargo refers to goods that exceed the standard dimensions prescribed under Rule 93 of the Central Motor Vehicle Rules, 1989. This includes heavy industrial machinery, large structural components, wind turbine blades, and similar indivisible units. ODC moves slower and requires special handling, so E-Way Bill validity for ODC is one day per 20 km instead of the standard 200 km for regular cargo."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for not generating an E-Way Bill?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 129 of the CGST Act, transporting goods without a valid E-Way Bill attracts detention of goods and vehicle, plus a penalty of \u20B910,000 or the tax sought to be evaded, whichever is higher. The goods owner must pay the applicable tax and penalty to secure release. Repeat violations can lead to seizure and confiscation of goods under Section 130 of the CGST Act."
          }
        },
        {
          "@type": "Question",
          "name": "Can an E-Way Bill be extended after it expires?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, the validity of an E-Way Bill can be extended if goods do not reach the destination within the validity period due to valid reasons like vehicle breakdown, natural calamity, or law-and-order issues. Only the transporter or the generator can extend validity through the E-Way Bill portal. Extension must be done before expiry or within 8 hours after expiry. The system now caps extensions at 360 days from original generation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the maximum distance limit for an E-Way Bill?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The maximum distance that can be entered while generating an E-Way Bill on the portal is 4,000 km. The portal auto-calculates distance based on PIN codes of source and destination locations. Users can enter up to 10% more than the auto-calculated distance to account for actual route variations. For example, if the portal suggests 500 km, you can enter up to 550 km."
          }
        },
        {
          "@type": "Question",
          "name": "Which goods are exempt from E-Way Bill requirements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Key exemptions include goods transported by non-motorised conveyance, LPG for household supply, kerosene under PDS, postal baggage, natural or cultured pearls, precious metals and jewellery, currency, used personal and household effects, and goods specified under Annexure to Rule 138(14). Petroleum crude, high-speed diesel, petrol, natural gas, and aviation turbine fuel are also exempt as they fall outside the GST framework."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate distance for an E-Way Bill?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The E-Way Bill portal at ewaybillgst.gov.in provides a PIN-to-PIN distance calculator. Enter the source and destination PIN codes, and the system auto-calculates the approximate motorable distance using integrated map data. You can also use Google Maps or MapmyIndia to verify the route distance. The portal allows up to 10% additional distance over the auto-calculated figure to account for actual road conditions."
          }
        },
        {
          "@type": "Question",
          "name": "Is E-Way Bill required for movement within the same city?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, an E-Way Bill is required for movement within the same city if the consignment value exceeds the applicable threshold. However, Part B of the E-Way Bill (vehicle details) is not mandatory when the distance between the consignor or consignee and the transporter is less than 50 km within the same state. Part A containing invoice details must still be generated in all cases."
          }
        },
        {
          "@type": "Question",
          "name": "What are the 2026 updates to E-Way Bill rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Key 2026 updates include mandatory Multi-Factor Authentication (MFA) for portal access, a 180-day restriction preventing E-Way Bill generation for invoices older than 180 days, extension cap of 360 days from original generation, strict 6-digit HSN code enforcement for businesses with turnover above \u20B95 crore, and enhanced real-time tracking through integration with FASTag and RFID systems at toll plazas."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Consolidated E-Way Bill?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Consolidated E-Way Bill (Form EWB-02) is generated by a transporter who is carrying multiple consignments in a single vehicle. Instead of managing separate E-Way Bills for each consignment, the transporter clubs individual E-Way Bill numbers into one consolidated bill. This simplifies compliance during transit and at checkpoints. Each underlying consignment must still have its own individual E-Way Bill generated."
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
    

        /* ====== E-WAY BILL SPECIFIC ====== */
        .state-select { max-width: 100%; }
        .result-alert {
            padding: 16px 20px;
            border-radius: var(--radius);
            margin-bottom: 16px;
            font-size: 14px;
            font-weight: 600;
        }
        .result-alert.success { background: #D1FAE5; color: #065F46; border: 1px solid #6EE7B7; }
        .result-alert.warning { background: #FEF3C7; color: #92400E; border: 1px solid #FCD34D; }
        .result-alert.danger { background: #FEE2E2; color: #991B1B; border: 1px solid #FCA5A5; }
        .validity-badge {
            display: inline-block;
            background: var(--primary);
            color: #fff;
            font-family: var(--font-mono);
            font-size: 28px;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: var(--radius);
            margin: 8px 0;
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
            <a href="#how-to-use">How to Use</a>
            <a href="#validity-rules">Validity Rules</a>
            <a href="#state-thresholds">State Thresholds</a>
            <a href="#exemptions">Exemptions</a>
            <a href="#penalties">Penalties</a>
            <a href="#faqs">FAQs</a>
        </div>
    </nav>

    <!-- Breadcrumb -->
    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a>
        <span>&rsaquo;</span>
        E-Way Bill Calculator
    </nav> --}}

    <!-- Hero -->
    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>E-Way Bill Calculator India &mdash; <span>Free Validity Tool 2026</span></h1>
    </header>

    <!-- TL;DR -->
    <div class="tldr">
        <div class="tldr-label">TL;DR</div>
        <p>This E-Way Bill Calculator computes the validity period for your e-way bill based on distance and cargo type under GST Rule 138. It checks whether your consignment exceeds the &#8377;50,000 threshold (or state-specific intra-state limits), calculates the number of valid days for both regular cargo (1 day per 200 km) and Over Dimensional Cargo (1 day per 20 km), and flags when an E-Way Bill is not required. Built by a practising Chartered Accountant for Indian transporters, suppliers, and businesses.</p>
    </div>

    <!-- Main Layout -->
    <div class="main-layout">
        <div class="content-col">

            <!-- ====== CALCULATOR ====== -->
            <div class="calc-card">
                <h2>Calculate E-Way Bill Validity</h2>

                <noscript>
                    <div class="noscript-box">
                        This E-Way Bill Calculator requires JavaScript to function. Please enable JavaScript or refer to the validity rules table below.
                    </div>
                </noscript>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="consignmentValue">Consignment Value (&#8377;)</label>
                        <input type="number" id="consignmentValue" placeholder="e.g. 75000" min="0" step="1" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="distance">Distance (km)</label>
                        <input type="number" id="distance" placeholder="e.g. 450" min="0" max="4000" step="1" autocomplete="off">
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label>Cargo Type</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="regular" onclick="setCargoType(this)">Regular Cargo<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">1 day / 200 km</small></button>
                            <button type="button" class="toggle-btn" data-value="odc" onclick="setCargoType(this)">Over Dimensional<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">1 day / 20 km</small></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Movement Type</label>
                        <div class="txn-toggle">
                            <button type="button" class="txn-btn active" data-value="inter" onclick="setMovement(this)">Inter-State<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">&#8377;50,000 limit</small></button>
                            <button type="button" class="txn-btn" data-value="intra" onclick="setMovement(this)">Intra-State<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">State-specific</small></button>
                        </div>
                    </div>
                </div>

                <!-- State selector (visible only for intra-state) -->
                <div class="calc-row" id="stateRow" style="display:none;">
                    <div class="form-group">
                        <label for="stateSelect">Select State</label>
                        <select id="stateSelect" class="state-select">
                            <option value="50000">Default (&#8377;50,000)</option>
                            <option value="100000">Maharashtra (&#8377;1,00,000)</option>
                            <option value="100000">Delhi (&#8377;1,00,000)</option>
                            <option value="100000">Tamil Nadu (&#8377;1,00,000)</option>
                            <option value="100000">Karnataka (&#8377;1,00,000)</option>
                            <option value="100000">Kerala (&#8377;1,00,000)</option>
                            <option value="100000">Telangana (&#8377;1,00,000)</option>
                            <option value="200000">Rajasthan &mdash; Within City (&#8377;2,00,000)</option>
                            <option value="100000">Rajasthan &mdash; Between Cities (&#8377;1,00,000)</option>
                            <option value="100000">West Bengal (&#8377;1,00,000)</option>
                            <option value="50000">Gujarat (&#8377;50,000)</option>
                            <option value="50000">Uttar Pradesh (&#8377;50,000)</option>
                            <option value="50000">Madhya Pradesh (&#8377;50,000)</option>
                            <option value="50000">Punjab (&#8377;50,000)</option>
                            <option value="50000">Haryana (&#8377;50,000)</option>
                            <option value="50000">Bihar (&#8377;50,000)</option>
                            <option value="50000">Odisha (&#8377;50,000)</option>
                            <option value="50000">Jharkhand (&#8377;50,000)</option>
                            <option value="50000">Chhattisgarh (&#8377;50,000)</option>
                            <option value="50000">Assam (&#8377;50,000)</option>
                            <option value="50000">Other States/UTs (&#8377;50,000)</option>
                        </select>
                    </div>
                </div>

                <button class="btn-calculate" onclick="calculateEWB()">Check E-Way Bill Requirement</button>

                <!-- Results -->
                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="ewbOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()">&#8634; Reset Calculator</button>
                </div>
            </div>

            <!-- ====== HOW TO USE ====== -->
            <section class="content-section" id="how-to-use">
                <h2>How to Use This E-Way Bill Calculator</h2>
                <p>This free tool helps Indian businesses, transporters, and suppliers check whether an E-Way Bill is required and calculate its validity period. Follow these steps:</p>

                <h3>Step 1: Enter Consignment Value</h3>
                <p>Enter the total value of goods being transported, including GST (CGST + SGST or IGST) and cess. The value should match your invoice, bill of supply, or delivery challan. This determines whether the consignment crosses the E-Way Bill threshold.</p>

                <h3>Step 2: Enter Distance</h3>
                <p>Enter the approximate distance (in km) between the source and destination. You can use the <a href="https://ewaybillgst.gov.in/Others/P2PDistance.aspx" target="_blank" rel="noopener">official E-Way Bill PIN-to-PIN distance calculator</a> or Google Maps to determine this. The maximum distance allowed is 4,000 km per single E-Way Bill.</p>

                <h3>Step 3: Select Cargo Type</h3>
                <p><strong>Regular Cargo</strong> covers standard goods transported in normal vehicles. Validity is 1 day per 200 km. <strong>Over Dimensional Cargo (ODC)</strong> refers to goods exceeding dimensions under Rule 93 of the Central Motor Vehicle Rules, 1989 &mdash; like heavy machinery and structural components. ODC validity is 1 day per 20 km due to slower movement.</p>

                <h3>Step 4: Select Movement Type</h3>
                <p>For <strong>inter-state</strong> movement (between two states), the threshold is &#8377;50,000 across India. For <strong>intra-state</strong> movement (within the same state), select your state &mdash; thresholds vary from &#8377;50,000 to &#8377;2,00,000 depending on the state's GST notification.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Always verify the auto-calculated distance on the <a href="https://ewaybillgst.gov.in/" target="_blank" rel="noopener">E-Way Bill portal</a> before generating the bill. You can enter up to 10% more than the portal's auto-calculated distance to account for actual route variations. Underdeclaring distance can lead to validity expiry in transit, resulting in detention and penalties under <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">Section 129 of the CGST Act</a>.</p>
                </div>
            </section>

            <!-- ====== VALIDITY RULES ====== -->
            <section class="content-section" id="validity-rules">
                <h2>E-Way Bill Validity Rules (Distance-Based)</h2>
                <p>The validity of an E-Way Bill depends on the distance between the supplier and recipient locations and the type of cargo being transported. These rules are prescribed under <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">Rule 138(10) of the CGST Rules, 2017</a>.</p>

                <h3>Regular Cargo</h3>
                <table class="rate-table">
                    <thead>
                        <tr><th>Distance</th><th>Validity Period</th><th>Example Route</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Up to 200 km</td><td>1 Day</td><td>Pune to Mumbai (150 km)</td></tr>
                        <tr><td>201&ndash;400 km</td><td>2 Days</td><td>Delhi to Jaipur (280 km)</td></tr>
                        <tr><td>401&ndash;600 km</td><td>3 Days</td><td>Mumbai to Ahmedabad (530 km)</td></tr>
                        <tr><td>601&ndash;800 km</td><td>4 Days</td><td>Delhi to Kolkata (780 km)</td></tr>
                        <tr><td>801&ndash;1,000 km</td><td>5 Days</td><td>Mumbai to Bengaluru (980 km)</td></tr>
                        <tr><td>Every additional 200 km</td><td>+1 Day</td><td>&mdash;</td></tr>
                    </tbody>
                </table>

                <h3>Over Dimensional Cargo (ODC)</h3>
                <table class="rate-table">
                    <thead>
                        <tr><th>Distance</th><th>Validity Period</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Up to 20 km</td><td>1 Day</td></tr>
                        <tr><td>21&ndash;40 km</td><td>2 Days</td></tr>
                        <tr><td>41&ndash;60 km</td><td>3 Days</td></tr>
                        <tr><td>Every additional 20 km</td><td>+1 Day</td></tr>
                    </tbody>
                </table>

                <div class="formula-box">
                    <span class="label">Validity Formula (Regular Cargo)</span><br>
                    Days = &#8968; Distance &divide; 200 &#8969; (round up to nearest whole number)<br><br>
                    <span class="label">Example:</span> Distance = 450 km<br>
                    Days = &#8968; 450 &divide; 200 &#8969; = &#8968; 2.25 &#8969; = <span class="label">3 Days</span><br><br>
                    <span class="label">Validity Formula (ODC)</span><br>
                    Days = &#8968; Distance &divide; 20 &#8969;<br><br>
                    <span class="label">Example:</span> Distance = 55 km (ODC)<br>
                    Days = &#8968; 55 &divide; 20 &#8969; = &#8968; 2.75 &#8969; = <span class="label">3 Days</span>
                </div>

                <div class="callout warn">
                    <p><strong>Important:</strong> Validity starts when Part B (vehicle details) is first updated &mdash; not when Part A is created. If the supplier generates Part A on 1st March but the transporter updates the vehicle number on 3rd March, validity begins from 3rd March. Validity is not recalculated for subsequent Part B updates (e.g., vehicle changes during transit).</p>
                </div>
            </section>

            <!-- ====== STATE THRESHOLDS ====== -->
            <section class="content-section" id="state-thresholds">
                <h2>State-Wise E-Way Bill Thresholds (Intra-State)</h2>
                <p>While the inter-state threshold is uniformly &#8377;50,000 across India, individual states can set their own thresholds for intra-state (within state) movement. The <a href="https://gstcouncil.gov.in/" target="_blank" rel="noopener">GST Council</a> allows states to issue notifications modifying the limit. Below are the current thresholds:</p>

                <table class="rate-table">
                    <thead>
                        <tr><th>State</th><th>Intra-State Threshold</th><th>Inter-State Threshold</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Maharashtra</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Delhi</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Tamil Nadu</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Karnataka</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Kerala</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Telangana</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>West Bengal</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Rajasthan (within city)</td><td><span class="rate-badge r18">&#8377;2,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Rajasthan (between cities)</td><td><span class="rate-badge r12">&#8377;1,00,000</span></td><td>&#8377;50,000</td></tr>
                        <tr><td>Gujarat, UP, MP, Punjab, Haryana, Bihar, Odisha, Others</td><td><span class="rate-badge r5">&#8377;50,000</span></td><td>&#8377;50,000</td></tr>
                    </tbody>
                </table>

                <div class="callout warn">
                    <p><strong>Note:</strong> State thresholds are subject to change via GST notifications. Some states mandate E-Way Bills for specific goods (tobacco, timber, iron, steel) even below the threshold. Always check the latest notification from your state's commercial tax department or the <a href="https://ewaybillgst.gov.in/" target="_blank" rel="noopener">E-Way Bill portal</a>.</p>
                </div>
            </section>

            <!-- ====== EXEMPTIONS ====== -->
            <section class="content-section" id="exemptions">
                <h2>E-Way Bill Exemptions</h2>
                <p>Under Rule 138(14) of the CGST Rules, certain goods and situations are exempt from E-Way Bill requirements. Understanding these exemptions is critical to avoid unnecessary compliance burden:</p>

                <h3>Goods Exempt from E-Way Bill</h3>
                <p>Key exempt goods include: LPG for household supply, kerosene under PDS, postal baggage, natural and cultured pearls, precious metals and jewellery, currency notes, used personal and household effects, unprocessed tea leaves, raw silk, and goods notified under Annexure to Rule 138(14). Petroleum crude, high-speed diesel, petrol, natural gas, and aviation turbine fuel are also exempt as they remain outside the GST framework.</p>

                <h3>Situations Exempt from E-Way Bill</h3>
                <p>E-Way Bill is not required when goods are transported by non-motorised conveyance (hand carts, bullock carts), goods covered under customs bond from port/airport to ICD/CFS, goods exempt under <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">Notification 7/2017 and 26/2017</a>, transit cargo moving to Nepal or Bhutan, empty cargo containers, and defence or military equipment moved under Ministry of Defence supervision.</p>

                <h3>Part B Exemption</h3>
                <p>Part B (vehicle details) is not mandatory when the distance between the consignor/consignee and the transporter is less than 50 km within the same state. However, Part A (invoice and goods details) must still be generated. This is a common point of confusion &mdash; the exemption is only for vehicle details, not for E-Way Bill generation itself.</p>
            </section>

            <!-- ====== PENALTIES ====== -->
            <section class="content-section" id="penalties">
                <h2>Penalties for E-Way Bill Non-Compliance</h2>
                <p>The GST framework imposes significant penalties for E-Way Bill violations to ensure compliance. Business owners and transporters should be aware of the consequences under the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>:</p>

                <h3>Section 129 &mdash; Detention, Seizure and Release of Goods</h3>
                <p>If goods are transported without a valid E-Way Bill, the officer can detain the goods and vehicle. For release, the person must pay the applicable tax and a penalty equal to 200% of the tax payable on such goods (for taxable goods where owner comes forward), or the applicable tax and penalty equal to 50% of value of goods (where owner does not come forward). This applies for goods in transit without proper documentation.</p>

                <h3>Section 130 &mdash; Confiscation of Goods</h3>
                <p>In cases of intent to evade tax, goods can be confiscated along with the vehicle used for transport. The person may pay a fine in lieu of confiscation &mdash; up to the market value of goods plus the tax payable. Repeat violations significantly increase the risk of confiscation proceedings.</p>

                <div class="callout">
                    <p><strong>Need Help with GST Compliance?</strong> Patron Accounting provides comprehensive E-Way Bill management, GST registration, return filing, and audit services for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20E-Way%20Bill%20Calculator.%20I%20need%20help%20with%20GST%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get expert GST assistance &rarr;</a></p>
                </div>
            </section>

            <!-- ====== FAQ ====== -->
            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About E-Way Bills</h2>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What is an E-Way Bill under GST?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">An E-Way Bill is a mandatory electronic document required under GST for transporting goods worth more than &#8377;50,000 within or across states in India. Generated on the E-Way Bill portal before goods begin moving, it contains details of goods, consignor, consignee, and transporter, ensuring transparency and compliance in goods movement under Rule 138 of the CGST Rules, 2017.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>When is an E-Way Bill required in India?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">An E-Way Bill is required when goods worth more than &#8377;50,000 are transported inter-state. For intra-state movement, thresholds vary &mdash; Maharashtra and Delhi require it above &#8377;1,00,000, while most other states follow &#8377;50,000. It is also mandatory regardless of value for inter-state handicraft goods and goods sent for job work by a principal to a registered job worker.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>How is E-Way Bill validity calculated based on distance?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Validity is one day for every 200 km (or part thereof) for regular cargo. For Over Dimensional Cargo, it's one day per 20 km. Validity starts when Part B (vehicle details) is first entered. For example, 450 km gives 3 days validity for regular cargo (ceil(450/200) = 3). Maximum distance per single E-Way Bill is 4,000 km.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What is Over Dimensional Cargo (ODC)?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Over Dimensional Cargo refers to cargo exceeding standard dimensions under Rule 93 of the Central Motor Vehicle Rules, 1989 &mdash; such as heavy industrial machinery, large steel structures, wind turbine blades, and similar indivisible units. ODC requires special handling and moves slower, so E-Way Bill validity is calculated at 1 day per 20 km instead of 200 km for regular cargo.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What is the penalty for not generating an E-Way Bill?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Under Section 129 of the CGST Act, transporting goods without a valid E-Way Bill results in detention of goods and vehicle. The penalty is 200% of tax payable (if owner comes forward) or 50% of goods value (if owner doesn't). Repeat violations can lead to confiscation under Section 130. The minimum penalty is &#8377;10,000 or the tax sought to be evaded, whichever is higher.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>Can an E-Way Bill be extended after it expires?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; the transporter or generator can extend validity through the portal if goods don't reach the destination due to valid reasons (vehicle breakdown, natural calamity, law-and-order issues). Extension must be done before expiry or within 8 hours after. The system caps total extensions at 360 days from original generation. You must provide valid reasons and an updated vehicle number.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What is the maximum distance limit for an E-Way Bill?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">The maximum distance allowed on the E-Way Bill portal is 4,000 km. The system auto-calculates distance based on source and destination PIN codes. Users can enter up to 10% additional distance over the auto-calculated figure. For example, if the portal computes 500 km, you can enter a maximum of 550 km to account for actual route variations and detours.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>Which goods are exempt from E-Way Bill requirements?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Exempt goods include LPG for household supply, kerosene under PDS, postal baggage, precious metals and jewellery, currency, used personal effects, and goods in the Annexure to Rule 138(14). Petroleum crude, diesel, petrol, natural gas, and ATF are also exempt since they fall outside GST. Goods transported by non-motorised conveyance are exempt regardless of value.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>How do I calculate distance for an E-Way Bill?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Use the PIN-to-PIN distance calculator on the official E-Way Bill portal at ewaybillgst.gov.in. Enter source and destination PIN codes &mdash; the system calculates approximate motorable distance using integrated map data. You can also use Google Maps or MapmyIndia for verification. The portal allows up to 10% more than the auto-calculated distance for actual route conditions.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>Is E-Way Bill required for movement within the same city?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Yes, if the consignment value exceeds the applicable threshold. However, Part B (vehicle details) is not required when the distance between consignor/consignee and transporter is less than 50 km within the same state. Part A with invoice details must still be generated. Some states like Delhi exempt intra-city movement below &#8377;1,00,000.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What are the 2026 updates to E-Way Bill rules?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">Key 2026 updates include mandatory Multi-Factor Authentication for portal access, a 180-day restriction preventing E-Way Bill generation for invoices older than 6 months, extension cap of 360 days from original generation, strict 6-digit HSN enforcement for turnover above &#8377;5 crore, and enhanced real-time tracking through FASTag and RFID integration at toll plazas.</div></div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What is a Consolidated E-Way Bill?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><div class="faq-answer-inner">A Consolidated E-Way Bill (Form EWB-02) is generated by a transporter carrying multiple consignments in a single vehicle. It clubs individual E-Way Bill numbers into one consolidated bill, simplifying compliance during transit and at checkpoints. Each underlying consignment must still have its own individual E-Way Bill (EWB-01). Only the transporter can generate consolidated bills.</div></div>
                </div>
            </section>

        </div>

        <!-- ====== SIDEBAR ====== -->
        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need E-Way Bill Help?</h3>
                <p>Our Chartered Accountants handle GST registration, E-Way Bill management, return filing, and compliance audits for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20E-Way%20Bill%20Calculator.%20I%20need%20help%20with%20GST%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>

            <div class="sidebar-card">
                <h3>GST Services</h3>
                <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
                <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
                <a href="/gst-audit" class="sidebar-link">GST Audit Services <span class="arrow">&rarr;</span></a>
                <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
                <a href="/gst-returns-for-e-commerce-operator" class="sidebar-link">GST for E-commerce <span class="arrow">&rarr;</span></a>
            </div>

            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
                <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
                <a href="/gst-returns" class="sidebar-link">GST Return Filing <span class="arrow">&rarr;</span></a>
                <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
                <a href="/gst-return-filing-for-freelancers" class="sidebar-link">GST for Freelancers <span class="arrow">&rarr;</span></a>
            </div>

            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance for Companies <span class="arrow">&rarr;</span></a>
                <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
                <a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Income Tax Scrutiny Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div><span class="trust">25,000+ Businesses Trust Us</span>
    </div><!-- ====== JAVASCRIPT ====== -->

<script>
        let cargoType = 'regular';
        let movementType = 'inter';

        function setCargoType(btn) {
            const el = btn.closest('.toggle-btn') || btn;
            cargoType = el.dataset.value;
            el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
        }

        function setMovement(btn) {
            const el = btn.closest('.txn-btn') || btn;
            movementType = el.dataset.value;
            el.parentElement.querySelectorAll('.txn-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
            document.getElementById('stateRow').style.display = movementType === 'intra' ? '' : 'none';
        }

        function formatCurrency(num) {
            return '\u20B9' + num.toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        }

        function calculateEWB() {
            const value = parseFloat(document.getElementById('consignmentValue').value);
            const distance = parseFloat(document.getElementById('distance').value);

            if (isNaN(value) || value <= 0) { alert('Please enter a valid consignment value.'); return; }
            if (isNaN(distance) || distance <= 0) { alert('Please enter a valid distance in km.'); return; }
            if (distance > 4000) { alert('Maximum distance allowed is 4,000 km per E-Way Bill.'); return; }

            // Determine threshold
            let threshold = 50000;
            if (movementType === 'intra') {
                threshold = parseInt(document.getElementById('stateSelect').value);
            }

            let html = '';

            // Check if EWB is required
            if (value <= threshold) {
                html += '<div class="result-alert success">';
                html += '\u2705 <strong>E-Way Bill NOT required.</strong> Consignment value ' + formatCurrency(value) + ' is below the ' + formatCurrency(threshold) + ' threshold for ' + (movementType === 'inter' ? 'inter-state' : 'intra-state') + ' movement.';
                html += '</div>';
                html += '<div class="callout warn"><p><strong>Exception:</strong> An E-Way Bill is still mandatory regardless of value for inter-state movement of handicraft goods and goods sent for job work. Also, some states mandate E-Way Bills for specific goods (tobacco, timber, iron) even below the threshold. Verify with your state\\\'s GST notification.</p></div>';
            } else {
                // EWB required \u2014 calculate validity
                const kmPerDay = cargoType === 'regular' ? 200 : 20;
                const validityDays = Math.ceil(distance / kmPerDay);
                const cargoLabel = cargoType === 'regular' ? 'Regular Cargo (200 km/day)' : 'Over Dimensional Cargo (20 km/day)';

                html += '<div class="result-alert danger">';
                html += '\u26A0 <strong>E-Way Bill IS required.</strong> Consignment value ' + formatCurrency(value) + ' exceeds the ' + formatCurrency(threshold) + ' threshold.';
                html += '</div>';

                html += '<div class="result-grid">';
                html += '<div class="result-card"><div class="result-label">Distance</div><div class="result-value">' + distance.toLocaleString('en-IN') + ' km</div></div>';
                html += '<div class="result-card"><div class="result-label">Cargo Type</div><div class="result-value" style="font-size:16px;">' + cargoLabel + '</div></div>';
                html += '<div class="result-card highlight" style="grid-column:1/-1;text-align:center;">';
                html += '<div class="result-label">E-Way Bill Validity</div>';
                html += '<div class="validity-badge">' + validityDays + ' Day' + (validityDays > 1 ? 's' : '') + '</div>';
                html += '</div>';
                html += '</div>';

                // Breakdown
                html += '<div class="result-breakdown">';
                html += '<div class="breakdown-row"><span class="breakdown-label">Consignment Value</span><span class="breakdown-value">' + formatCurrency(value) + '</span></div>';
                html += '<div class="breakdown-row"><span class="breakdown-label">Applicable Threshold</span><span class="breakdown-value">' + formatCurrency(threshold) + '</span></div>';
                html += '<div class="breakdown-row"><span class="breakdown-label">Distance</span><span class="breakdown-value">' + distance + ' km</span></div>';
                html += '<div class="breakdown-row"><span class="breakdown-label">Rate</span><span class="breakdown-value">1 day per ' + kmPerDay + ' km</span></div>';
                html += '<div class="breakdown-row"><span class="breakdown-label">Calculation</span><span class="breakdown-value">\u2308' + distance + ' \u00F7 ' + kmPerDay + '\u2309 = ' + validityDays + '</span></div>';
                html += '<div class="breakdown-row"><span class="breakdown-label"><strong>Validity Period</strong></span><span class="breakdown-value"><strong>' + validityDays + ' day' + (validityDays > 1 ? 's' : '') + '</strong></span></div>';
                html += '</div>';

                // Max distance tip
                const maxEditable = Math.floor(distance * 1.1);
                html += '<div class="callout" style="margin-top:16px;"><p><strong>Tip:</strong> You can enter up to <strong>' + maxEditable + ' km</strong> on the portal (10% above ' + distance + ' km) to account for route variations. Generate the bill at <a href="https://ewaybillgst.gov.in/" target="_blank" rel="noopener">ewaybillgst.gov.in</a>.</p></div>';
            }

            document.getElementById('ewbOutput').innerHTML = html;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() {
            document.getElementById('consignmentValue').value = '';
            document.getElementById('distance').value = '';
            document.getElementById('stateSelect').value = '50000';
            document.getElementById('stateRow').style.display = 'none';
            document.getElementById('resultSection').classList.remove('visible');
            cargoType = 'regular';
            movementType = 'inter';
            document.querySelectorAll('.toggle-btn').forEach((b, i) => b.classList.toggle('active', i === 0));
            document.querySelectorAll('.txn-btn').forEach((b, i) => b.classList.toggle('active', i === 0));
        }

        function toggleFaq(e) {
            const btn = e.closest ? e.closest('.faq-question') || e : e;
            const item = btn.closest('.faq-item');
            if (!item) return;
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        }

        document.getElementById('distance').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') calculateEWB();
        });
        document.getElementById('consignmentValue').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') calculateEWB();
        });

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
