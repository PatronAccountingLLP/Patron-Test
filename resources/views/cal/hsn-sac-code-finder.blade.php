@extends('layouts.app')
@section('meta')
    <title>HSN Code Finder | Search HSN &amp; SAC Codes with GST</title>
    <meta name="description" content="HSN code finder searches 5,000+ HSN and SAC codes with their GST rates for goods and services under India's GST regime. Find 4, 6 or 8-digit codes free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/hsn-sac-code-finder">
    <meta property="og:title" content="HSN Code Finder India &mdash; Free HSN & SAC Code Search 2026">
    <meta property="og:description" content="HSN Code Finder searches 5,000+ HSN and SAC codes with GST rates for goods and services under India's GST regime. Find 4, 6, or 8-digit codes free!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/hsn-sac-code-finder">
    <meta property="og:image" content="/tools/hsn-sac-code-finder/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HSN Code Finder India &mdash; Free HSN & SAC Code Search 2026">
    <meta name="twitter:description" content="HSN Code Finder searches 5,000+ HSN and SAC codes with GST rates for goods and services. Find 4, 6, or 8-digit codes free!">
    <meta name="twitter:image" content="/tools/hsn-sac-code-finder/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "HSN SAC Code Finder India",
      "description": "HSN Code Finder searches over 5,000 HSN codes for goods and SAC codes for services along with applicable GST rates under India's Goods and Services Tax regime. Supports 2-digit, 4-digit, 6-digit, and 8-digit code lookups by code number or product description.",
      "url": "/tools/hsn-sac-code-finder",
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
          "name": "HSN SAC Code Finder",
          "item": "/tools/hsn-sac-code-finder"
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
          "name": "What is an HSN code and why is it mandatory under GST in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HSN stands for Harmonized System of Nomenclature, an internationally standardized system developed by the World Customs Organization to classify goods. Under India's GST regime, HSN codes are mandatory on tax invoices and GST returns per CGST Notification 78/2020. The number of digits required depends on your annual turnover \u2014 4-digit codes for turnover up to \u20B95 crore and 6-digit codes above \u20B95 crore."
          }
        },
        {
          "@type": "Question",
          "name": "What is a SAC code and how is it different from an HSN code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SAC stands for Service Accounting Code, used to classify services under GST. While HSN codes apply to goods, SAC codes apply exclusively to services. SAC codes always start with '99' and are 6 digits long. For example, 998311 represents management consulting services. Both codes determine the applicable GST rate and must be mentioned on invoices and in GSTR-1 returns."
          }
        },
        {
          "@type": "Question",
          "name": "How many digits of HSN code do I need to mention on my GST invoice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The number of HSN digits required depends on your annual aggregate turnover from the previous financial year. Businesses with turnover up to \u20B95 crore must mention 4-digit HSN codes on B2B invoices (optional for B2C). Businesses above \u20B95 crore must use 6-digit HSN codes on all invoices. For imports and exports, 8-digit codes are always compulsory as per international trade standards."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I use the wrong HSN or SAC code on my invoice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Using an incorrect HSN or SAC code can result in wrong GST rate application, rejection of Input Tax Credit claims by the recipient, penalties under Section 122 of the CGST Act, and issues during GST audits or assessments. Misclassification may also trigger demand notices from tax authorities. Always verify codes against the official CBIC rate schedules before use."
          }
        },
        {
          "@type": "Question",
          "name": "Where can I find the official HSN code for my product?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can find official HSN codes through multiple sources: the GST Portal's Search HSN tool at services.gst.gov.in, CBIC's official rate schedule notifications, the Customs Tariff Act schedules, and the World Customs Organization's HS nomenclature database. Our free HSN Code Finder tool above searches by product name or code number to help you quickly identify the correct classification."
          }
        },
        {
          "@type": "Question",
          "name": "Is HSN code mandatory for composition scheme dealers under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, composition scheme dealers must also mention HSN codes on their invoices as per the mandatory requirements introduced from April 2021 via CGST Notification 78/2020. However, composition dealers issue a Bill of Supply instead of a tax invoice since they cannot charge GST separately. They must still declare HSN-wise summary in their quarterly CMP-08 return."
          }
        },
        {
          "@type": "Question",
          "name": "How is the HSN code structured and what do the digits mean?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HSN codes follow a hierarchical structure. The first 2 digits represent the Chapter number covering broad product categories. The next 2 digits form the Heading for more specific groups. Digits 5-6 are the Subheading for detailed classification. In India, digits 7-8 form the national tariff item for the most granular classification. For example, code 61091000 breaks down as Chapter 61 (knitted apparel), Heading 09 (T-shirts), Subheading 10 (cotton), Tariff 00."
          }
        },
        {
          "@type": "Question",
          "name": "What is the structure of a SAC code for services under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SAC codes are 6-digit numeric codes where the first two digits are always '99', indicating a service. The next two digits represent the major service category or nature of service. The last two digits provide the detailed service classification. For instance, SAC 995411 means Chapter 99 (services), Group 54 (construction services), Service 11 (residential building construction). The CBIC notification annexures list all valid SAC codes."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need an 8-digit HSN code for export invoices from India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 8-digit HSN codes are compulsory for all import and export transactions regardless of business turnover. This requirement ensures compatibility with the international Harmonized System used by over 200 countries. The 8-digit code corresponds to the Indian Customs Tariff classification and must match the codes declared in the Shipping Bill or Bill of Entry filed with customs authorities."
          }
        },
        {
          "@type": "Question",
          "name": "Can the same product have different GST rates under different HSN codes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, similar products can attract different GST rates depending on their specific HSN classification. For example, footwear below \u20B91,000 per pair falls under 5% GST, while footwear above \u20B91,000 attracts 18% GST under a different sub-heading. Similarly, processed foods may have different rates based on branding, packaging, or ingredient composition. Accurate classification at the sub-heading level is therefore essential."
          }
        },
        {
          "@type": "Question",
          "name": "How do I report HSN-wise summary in GSTR-1 return?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-1 requires an HSN-wise summary of outward supplies in Table 12. You must consolidate all invoices by HSN code and report the total taxable value, total IGST, CGST, SGST, and cess for each code. Businesses with turnover up to \u20B95 crore report at 4-digit level and those above \u20B95 crore at 6-digit level. The GST portal auto-populates some data from e-invoices if applicable."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between HSN code and ITC-HS code used in customs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITC-HS stands for Indian Trade Classification based on the Harmonized System. It is the 8-digit code used by Indian Customs for import-export classification under the Customs Tariff Act, 1975. The first 6 digits of ITC-HS match the international HS code, while the last 2 digits are India-specific. For GST purposes, HSN codes align with ITC-HS codes, so the same classification applies for both domestic taxation and customs."
          }
        },
        {
          "@type": "Question",
          "name": "Are there any goods or services exempt from HSN/SAC code requirements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No goods or services supplied by registered taxpayers are exempt from HSN/SAC code requirements since April 2021. Even nil-rated and exempt supplies must be classified with the correct HSN or SAC code. However, taxpayers with turnover below \u20B91.5 crore are not required to mention HSN codes on B2C invoices, though it is recommended for accuracy. B2B invoices require HSN codes regardless of turnover."
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
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
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
        .hero h1 em {
            color: var(--accent);
            font-style: normal;
        }

        /* ====== TL;DR ====== */
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
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }

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
            .main-layout { grid-template-columns: 1fr 320px; gap: 40px; }
        }
        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }

        /* ====== FINDER CARD ====== */
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

        .search-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
            margin-bottom: 20px;
        }
        @media (min-width: 600px) {
            .search-row { grid-template-columns: 1fr auto; }
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
        .form-group select:focus { border-color: var(--primary); }

        /* Toggle */
        .toggle-group {
            display: flex;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
            gap: 4px;
            margin-bottom: 20px;
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

        .btn-search {
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
        }
        .btn-search:hover { background: var(--primary-light); }
        .btn-search:active { transform: scale(0.98); }

        /* Search hint */
        .search-hint {
            font-size: 13px;
            color: var(--text-muted);
            margin-top: -12px;
            margin-bottom: 16px;
        }

        /* Results */
        .results-section { margin-top: 24px; display: none; }
        .results-section.visible { display: block; }

        .results-count {
            font-size: 14px;
            color: var(--text-secondary);
            margin-bottom: 16px;
            font-weight: 500;
        }
        .results-count strong { color: var(--primary); }

        .result-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        .result-table thead th {
            background: var(--primary);
            color: #fff;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            position: sticky;
            top: 46px;
            z-index: 10;
        }
        .result-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .result-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .result-table tbody td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text-secondary);
            vertical-align: top;
        }
        .result-table tbody tr:nth-child(even) { background: var(--surface); }
        .result-table tbody tr:hover { background: var(--surface-alt); }

        .code-badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 20px;
            font-family: var(--font-mono);
            font-weight: 700;
            font-size: 13px;
            background: #DBEAFE;
            color: #1D4ED8;
            white-space: nowrap;
        }
        .rate-badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 20px;
            font-family: var(--font-mono);
            font-weight: 700;
            font-size: 13px;
            white-space: nowrap;
        }
        .rate-badge.r0 { background: #F3F4F6; color: #6B7280; }
        .rate-badge.r5 { background: #DBEAFE; color: #1D4ED8; }
        .rate-badge.r12 { background: #D1FAE5; color: #059669; }
        .rate-badge.r18 { background: #FEF3C7; color: #B45309; }
        .rate-badge.r28 { background: #FEE2E2; color: #DC2626; }
        .rate-badge.r3 { background: #EDE9FE; color: #7C3AED; }
        .rate-badge.rmulti { background: #FCE7F3; color: #DB2777; }

        .result-table-wrap {
            max-height: 480px;
            overflow-y: auto;
            border-radius: var(--radius);
            border: 1px solid var(--border);
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

        .no-results {
            text-align: center;
            padding: 40px 20px;
            color: var(--text-muted);
        }
        .no-results svg {
            width: 48px;
            height: 48px;
            margin-bottom: 12px;
            opacity: 0.4;
        }

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

        /* Tables */
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

        /* Structure box */
        .structure-box {
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
        .structure-box .label {
            color: var(--accent-light);
            font-weight: 700;
        }

        /* Callout */
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
        .faq-item.open .faq-answer { max-height: 500px; }
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
        }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
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
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
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
            .result-table { font-size: 13px; }
            .result-table thead th, .result-table tbody td { padding: 10px 12px; }
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
            <a href="#finder">Code Finder</a>
            <a href="#how-to-use">How to Use</a>
            <a href="#hsn-structure">HSN Structure</a>
            <a href="#sac-structure">SAC Structure</a>
            <a href="#turnover-rules">Turnover Rules</a>
            <a href="#hsn-chapters">HSN Chapters</a>
            <a href="#compliance">Compliance</a>
            <a href="#faqs">FAQs</a>
        </div>
    </nav>

    <!-- Breadcrumb -->
    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a>
        <span>&rsaquo;</span>
        HSN SAC Code Finder
    </nav> --}}

    <!-- Hero -->
    <header class="hero" id="finder">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>HSN Code Finder India &mdash; <em>Free HSN & SAC Code</em> Search with GST Rates</h1>
    </header>

    <!-- TL;DR -->
    <div class="tldr">
        <div class="tldr-label">TL;DR</div>
        <p>This HSN/SAC Code Finder searches over 5,000 Harmonized System of Nomenclature codes for goods and Service Accounting Codes for services, along with applicable GST rates under India's tax regime. Search by product name, service description, or code number to find the correct 4-digit, 6-digit, or 8-digit classification for your GST invoices and GSTR-1 returns. Built and reviewed by a practising Chartered Accountant for compliance accuracy.</p>
    </div>

    <!-- Main Layout -->
    <div class="main-layout">
        <div class="content-col">

            <!-- ====== FINDER TOOL ====== -->
            <div class="calc-card">
                <h2>Search HSN Code or SAC Code</h2>

                <noscript>
                    <div class="noscript-box">
                        This HSN/SAC Code Finder requires JavaScript. Please enable JavaScript in your browser, or use the <a href="https://services.gst.gov.in/services/searchhsnsac" target="_blank" rel="noopener">official GST Portal HSN search</a>.
                    </div>
                </noscript>

                <!-- Toggle: Goods vs Services -->
                <div class="form-group">
                    <label>Search Type</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="goods" onclick="setSearchType(this)">
                            Goods (HSN)<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Products &amp; commodities</small>
                        </button>
                        <button type="button" class="toggle-btn" data-value="services" onclick="setSearchType(this)">
                            Services (SAC)<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Service categories</small>
                        </button>
                        <button type="button" class="toggle-btn" data-value="all" onclick="setSearchType(this)">
                            Both<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">HSN + SAC</small>
                        </button>
                    </div>
                </div>

                <!-- Search Input -->
                <div class="form-group" style="margin-bottom:8px;">
                    <label for="searchInput">Enter HSN/SAC Code or Product/Service Name</label>
                    <input type="text" id="searchInput" placeholder="e.g. 8471, cotton, restaurant, IT services, 998311..." autocomplete="off">
                </div>
                <p class="search-hint">Search by code number (e.g. 0803, 9954) or keyword (e.g. rice, cement, consulting). Minimum 2 characters.</p>

                <button class="btn-search" onclick="performSearch()">&#128269; Search HSN / SAC Code</button>

                <!-- Results -->
                <div class="results-section" id="resultsSection">
                    <div style="height:1px;background:var(--border);margin-bottom:20px;"></div>
                    <div class="results-count" id="resultsCount"></div>
                    <div class="result-table-wrap" id="resultTableWrap">
                        <table class="result-table" id="resultTable">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>GST Rate</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody id="resultBody"></tbody>
                        </table>
                    </div>
                    <div class="no-results" id="noResults" style="display:none;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                        <p>No matching codes found. Try a different keyword or code.</p>
                        <p style="font-size:13px;margin-top:8px;">You can also search on the <a href="https://services.gst.gov.in/services/searchhsnsac" target="_blank" rel="noopener">official GST Portal</a>.</p>
                    </div>
                    <button class="btn-reset" onclick="resetSearch()">&#8634; Reset Search</button>
                </div>
            </div>

            <!-- ====== HOW TO USE ====== -->
            <section class="content-section" id="how-to-use">
                <h2>How to Use This HSN/SAC Code Finder</h2>
                <p>This free tool helps Indian businesses, chartered accountants, tax practitioners, and importers/exporters quickly find the correct HSN or SAC classification for their goods and services. Here is how to use it:</p>

                <h3>Step 1: Select Your Search Type</h3>
                <p>Choose <strong>Goods (HSN)</strong> if you are looking for a product classification code, <strong>Services (SAC)</strong> for service codes, or <strong>Both</strong> to search across the entire database. This filter narrows results and makes your search faster.</p>

                <h3>Step 2: Enter a Code or Description</h3>
                <p>Type the HSN or SAC code if you already know it (e.g., "8471" for computers), or enter a product/service keyword like "cotton", "restaurant", or "IT services". The tool searches both code numbers and descriptions. You need at least 2 characters to start a search.</p>

                <h3>Step 3: Review Results</h3>
                <p>The results table shows the code, full description, applicable GST rate, and whether it is an HSN (goods) or SAC (services) code. Use this information to accurately classify your products or services on invoices and GST returns. Always verify the code against the official <a href="https://cbic-gst.gov.in/gst-goods-services-rates.html" target="_blank" rel="noopener">CBIC rate schedules</a> before filing.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> If your product falls between two HSN codes, refer to the General Rules for Interpretation (GRI) in the <a href="https://www.cbic.gov.in/entities/laws-and-rules" target="_blank" rel="noopener">Customs Tariff Act, 1975</a>. Rule 1 states that classification is determined by the terms of the headings and relevant section/chapter notes. When in doubt, consult a Chartered Accountant to avoid misclassification penalties under Section 122 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>.</p>
                </div>
            </section>

            <!-- ====== HSN STRUCTURE ====== -->
            <section class="content-section" id="hsn-structure">
                <h2>Understanding HSN Code Structure</h2>
                <p>The Harmonized System of Nomenclature (HSN) was developed by the <a href="https://www.wcoomd.org/en/topics/nomenclature/overview.aspx" target="_blank" rel="noopener">World Customs Organization (WCO)</a> and is used by over 200 countries to classify traded goods. India has been a WCO member since 1971 and adopted the HSN system for GST classification.</p>

                <h3>How the 8-Digit HSN Code Works</h3>
                <p>India uses an 8-digit HSN code system. The first 6 digits follow the international standard, while the last 2 digits are India-specific national tariff items. Here is the breakdown:</p>

                <div class="structure-box">
                    <span class="label">HSN Code: 6 1 0 9 1 0 0 0</span><br><br>
                    <span class="label">Chapter (Digits 1-2):</span> 61 &rarr; Knitted or crocheted apparel<br>
                    <span class="label">Heading (Digits 3-4):</span> 09 &rarr; T-shirts, singlets, vests<br>
                    <span class="label">Subheading (Digits 5-6):</span> 10 &rarr; Of cotton<br>
                    <span class="label">Tariff Item (Digits 7-8):</span> 00 &rarr; India-specific detail<br><br>
                    <span class="label">Structure:</span> [Chapter][Heading][Subheading][Tariff]<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ XX ][ XX ][ &nbsp;XX&nbsp; ][ XX ]
                </div>

                <p>The HSN contains 21 Sections, 99 Chapters, approximately 1,244 Headings, and 5,224 Subheadings. Sections and Chapters describe broad product categories, while Headings and Subheadings provide increasingly specific classification. The system enables uniform classification globally, which is critical for international trade and customs duty determination.</p>

                <div class="callout warn">
                    <p><strong>Important:</strong> The first 6 digits of any HSN code are identical worldwide. Only the last 2 digits (tariff item) vary by country. This means if you know the international HS code for your product, you can find the Indian HSN code by adding the appropriate tariff digits from the <a href="https://www.cbic.gov.in/entities/laws-and-rules" target="_blank" rel="noopener">Indian Customs Tariff</a>.</p>
                </div>
            </section>

            <!-- ====== SAC STRUCTURE ====== -->
            <section class="content-section" id="sac-structure">
                <h2>Understanding SAC Code Structure for Services</h2>
                <p>Service Accounting Codes (SAC) classify services under India's GST framework. SAC codes are defined by the <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">Central Board of Indirect Taxes and Customs (CBIC)</a> and must be mentioned on all service invoices and in GSTR-1 returns.</p>

                <h3>How the 6-Digit SAC Code Works</h3>
                <div class="structure-box">
                    <span class="label">SAC Code: 9 9 8 3 1 1</span><br><br>
                    <span class="label">Prefix (Digits 1-2):</span> 99 &rarr; Denotes "Service" (always 99)<br>
                    <span class="label">Major Group (Digits 3-4):</span> 83 &rarr; Management consulting<br>
                    <span class="label">Service Detail (Digits 5-6):</span> 11 &rarr; Management consulting services<br><br>
                    <span class="label">Structure:</span> [Service][Group][Detail]<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ 99 ][ XX ][ XX ]
                </div>

                <p>All SAC codes begin with "99", distinguishing them from HSN codes for goods. The next two digits identify the major service category (e.g., 54 for construction, 83 for consulting), and the final two digits specify the exact service type. India's SAC system covers all services from professional consulting to transportation, construction, hospitality, education, and financial services.</p>

                <h3>Key SAC Categories</h3>
                <table class="rate-table">
                    <thead>
                        <tr><th>SAC Group</th><th>Service Category</th><th>Common GST Rate</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><span class="code-badge">9954</span></td><td>Construction services</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">9961-9962</span></td><td>Transport of goods</td><td><span class="rate-badge r5">5% / 12%</span></td></tr>
                        <tr><td><span class="code-badge">9963</span></td><td>Accommodation &amp; food services</td><td><span class="rate-badge r5">5% / 18%</span></td></tr>
                        <tr><td><span class="code-badge">9964</span></td><td>Passenger transport services</td><td><span class="rate-badge r5">5% / 12%</span></td></tr>
                        <tr><td><span class="code-badge">9971-9972</span></td><td>Financial &amp; insurance services</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">9973</span></td><td>Real estate &amp; leasing services</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">9983</span></td><td>Professional &amp; consulting services</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">9988</span></td><td>Manufacturing services</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">9991</span></td><td>Public administration services</td><td><span class="rate-badge r0">Exempt</span></td></tr>
                        <tr><td><span class="code-badge">9992</span></td><td>Education services</td><td><span class="rate-badge r0">Exempt</span></td></tr>
                        <tr><td><span class="code-badge">9993</span></td><td>Healthcare services</td><td><span class="rate-badge r0">Exempt</span></td></tr>
                    </tbody>
                </table>
            </section>

            <!-- ====== TURNOVER RULES ====== -->
            <section class="content-section" id="turnover-rules">
                <h2>HSN/SAC Code Requirements by Turnover</h2>
                <p>As per <a href="https://www.cbic.gov.in/entities/laws-and-rules" target="_blank" rel="noopener">CGST Notification 78/2020</a> dated 15th October 2020 (effective from 1st April 2021), the number of HSN digits required on invoices depends on your annual aggregate turnover from the previous financial year:</p>

                <table class="rate-table">
                    <thead>
                        <tr><th>Annual Turnover</th><th>HSN Digits Required</th><th>Invoice Type</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Up to &#8377;5 Crore</td>
                            <td><strong>4-digit</strong> HSN code</td>
                            <td>Mandatory on B2B invoices; optional for B2C</td>
                        </tr>
                        <tr>
                            <td>Above &#8377;5 Crore</td>
                            <td><strong>6-digit</strong> HSN code</td>
                            <td>Mandatory on all invoices (B2B and B2C)</td>
                        </tr>
                        <tr>
                            <td>Imports / Exports</td>
                            <td><strong>8-digit</strong> HSN code</td>
                            <td>Mandatory regardless of turnover</td>
                        </tr>
                        <tr>
                            <td>Composition Scheme</td>
                            <td><strong>4-digit</strong> HSN code</td>
                            <td>Required on Bill of Supply</td>
                        </tr>
                    </tbody>
                </table>

                <div class="callout">
                    <p><strong>GSTR-1 Reporting:</strong> Table 12 of GSTR-1 requires HSN-wise summary of outward supplies. Businesses with turnover up to &#8377;5 crore report at the 4-digit level, while those above &#8377;5 crore must report at the 6-digit level. Incorrect HSN reporting in GSTR-1 can lead to notices from the GST authorities. Refer to the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Portal</a> for the latest filing instructions.</p>
                </div>

                <h3>Penalties for Wrong HSN/SAC Classification</h3>
                <p>Misclassification of goods or services under incorrect HSN/SAC codes can result in serious consequences under the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>. These include demand of differential tax with interest at 18% per annum under Section 73 (non-fraud cases) or 24% under Section 74 (fraud/suppression cases), penalties equal to the tax short-paid, rejection of the recipient's Input Tax Credit claims, and potential prosecution in severe cases. The <a href="https://www.icai.org/post/gst-and-indirect-taxes-committee" target="_blank" rel="noopener">ICAI's GST and Indirect Taxes Committee</a> regularly publishes guidance on proper classification practices.</p>
            </section>

            <!-- ====== HSN CHAPTERS ====== -->
            <section class="content-section" id="hsn-chapters">
                <h2>Complete HSN Chapter List (21 Sections)</h2>
                <p>The HSN system organises all goods into 21 Sections and 99 Chapters. Below is the full chapter list with representative GST rates to help you identify the correct starting point for your product classification:</p>

                <table class="rate-table">
                    <thead>
                        <tr><th>Chapter</th><th>Description</th><th>Common GST Rates</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><span class="code-badge">01-05</span></td><td>Live animals; animal products (meat, fish, dairy, eggs, honey)</td><td><span class="rate-badge r0">0%</span> <span class="rate-badge r5">5%</span></td></tr>
                        <tr><td><span class="code-badge">06-14</span></td><td>Vegetable products (fruits, vegetables, cereals, oil seeds, gums)</td><td><span class="rate-badge r0">0%</span> <span class="rate-badge r5">5%</span></td></tr>
                        <tr><td><span class="code-badge">15</span></td><td>Animal or vegetable fats and oils; edible oils</td><td><span class="rate-badge r5">5%</span></td></tr>
                        <tr><td><span class="code-badge">16-24</span></td><td>Prepared foodstuffs; beverages, spirits, tobacco</td><td><span class="rate-badge r5">5%</span> <span class="rate-badge r12">12%</span> <span class="rate-badge r28">28%</span></td></tr>
                        <tr><td><span class="code-badge">25-27</span></td><td>Mineral products (salt, stone, cement, petroleum)</td><td><span class="rate-badge r5">5%</span> <span class="rate-badge r18">18%</span> <span class="rate-badge r28">28%</span></td></tr>
                        <tr><td><span class="code-badge">28-38</span></td><td>Chemical products; pharmaceutical products; fertilizers</td><td><span class="rate-badge r5">5%</span> <span class="rate-badge r12">12%</span> <span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">39-40</span></td><td>Plastics and rubber articles</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">41-43</span></td><td>Leather, skins, handbags, travel goods, fur</td><td><span class="rate-badge r12">12%</span> <span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">44-46</span></td><td>Wood, cork, straw, basketware articles</td><td><span class="rate-badge r12">12%</span> <span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">47-49</span></td><td>Paper, paperboard; printed books, newspapers</td><td><span class="rate-badge r0">0%</span> <span class="rate-badge r12">12%</span> <span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">50-63</span></td><td>Textiles (cotton, silk, wool, synthetic fibres, garments)</td><td><span class="rate-badge r5">5%</span> <span class="rate-badge r12">12%</span></td></tr>
                        <tr><td><span class="code-badge">64-67</span></td><td>Footwear, headgear, umbrellas, artificial flowers</td><td><span class="rate-badge r5">5%</span> <span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">68-70</span></td><td>Stone, ceramic, glass articles</td><td><span class="rate-badge r18">18%</span> <span class="rate-badge r28">28%</span></td></tr>
                        <tr><td><span class="code-badge">71</span></td><td>Precious metals, gems, jewellery (gold, silver, diamonds)</td><td><span class="rate-badge r3">3%</span></td></tr>
                        <tr><td><span class="code-badge">72-83</span></td><td>Base metals (iron, steel, copper, aluminium, tools)</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">84-85</span></td><td>Machinery, electrical equipment, computers, phones</td><td><span class="rate-badge r18">18%</span> <span class="rate-badge r28">28%</span></td></tr>
                        <tr><td><span class="code-badge">86-89</span></td><td>Vehicles, aircraft, vessels, transport equipment</td><td><span class="rate-badge r18">18%</span> <span class="rate-badge r28">28%</span></td></tr>
                        <tr><td><span class="code-badge">90-92</span></td><td>Optical, medical, measuring instruments; clocks; musical instruments</td><td><span class="rate-badge r12">12%</span> <span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">93</span></td><td>Arms and ammunition</td><td><span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">94-96</span></td><td>Furniture, bedding, lamps; toys, games; miscellaneous manufactured articles</td><td><span class="rate-badge r12">12%</span> <span class="rate-badge r18">18%</span></td></tr>
                        <tr><td><span class="code-badge">97-98</span></td><td>Works of art, antiques; special classification for specific goods</td><td><span class="rate-badge r12">12%</span></td></tr>
                    </tbody>
                </table>
            </section>

            <!-- ====== GST COMPLIANCE ====== -->
            <section class="content-section" id="compliance">
                <h2>HSN/SAC Codes and GST Compliance in India</h2>

                <h3>Why Correct Classification Matters</h3>
                <p>The entire GST ecosystem &mdash; from invoice generation to return filing to Input Tax Credit matching &mdash; depends on accurate HSN and SAC classification. Under the GST framework governed by the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a>, every supply of goods or services must be classified with the correct code. This classification determines the applicable GST rate, the eligibility for Input Tax Credit (ITC), the Reverse Charge Mechanism (RCM) applicability, and the export incentives under schemes like the <a href="https://www.dgft.gov.in/" target="_blank" rel="noopener">DGFT's merchandise export incentive schemes</a>.</p>

                <h3>E-Invoicing and HSN Codes</h3>
                <p>For businesses with turnover exceeding &#8377;5 crore, e-invoicing is mandatory through the <a href="https://einvoice1.gst.gov.in/" target="_blank" rel="noopener">GST e-Invoice portal</a>. The e-invoice schema requires HSN codes at the line-item level. The Invoice Reference Number (IRN) generation will fail if HSN codes are missing or invalid. The GST Portal's AI-powered HSN search tool now cross-references codes against the e-invoice database to suggest the most commonly used classifications.</p>

                <h3>HSN Codes in GST Returns</h3>
                <p>GSTR-1 (Table 12) requires HSN-wise summary of all outward supplies. GSTR-9 (Annual Return) also requires HSN-wise breakup of supplies. Incorrect HSN codes in returns can lead to ITC mismatches when the recipient's GSTR-2B auto-populates data. The <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a> recommends maintaining an HSN master list mapped to your product inventory for consistent classification.</p>

                <div class="callout">
                    <p><strong>Need Expert Classification Help?</strong> Patron Accounting's team of Chartered Accountants assists businesses with HSN/SAC classification, GST registration, return filing, and compliance audits across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20HSN%20SAC%20classification%20for%20my%20business.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get expert HSN classification help &rarr;</a></p>
                </div>
            </section>

            <!-- ====== FAQ ====== -->
            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About HSN &amp; SAC Codes</h2>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is an HSN code and why is it mandatory under GST in India?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">HSN stands for Harmonized System of Nomenclature, an internationally standardized system developed by the World Customs Organization to classify goods. Under India's GST regime, HSN codes are mandatory on tax invoices and GST returns per CGST Notification 78/2020. The number of digits required depends on annual turnover &mdash; 4-digit codes for turnover up to &#8377;5 crore and 6-digit codes for businesses above &#8377;5 crore. For imports and exports, 8-digit codes are always compulsory.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is a SAC code and how is it different from an HSN code?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">SAC stands for Service Accounting Code, used to classify services under GST. While HSN codes apply to goods, SAC codes apply exclusively to services. SAC codes always start with '99' and are 6 digits long. For example, 998311 represents management consulting services. Both types of codes determine the applicable GST rate and must be mentioned on invoices and in GSTR-1 returns filed on the GST Portal.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How many digits of HSN code do I need on my GST invoice?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">The required HSN digits depend on your previous year's annual aggregate turnover. Businesses with turnover up to &#8377;5 crore must use 4-digit HSN codes on B2B invoices (optional for B2C). Businesses above &#8377;5 crore must use 6-digit codes on all invoices. For all import and export transactions, 8-digit HSN codes are compulsory regardless of turnover to align with international trade standards.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What happens if I use the wrong HSN or SAC code?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Using an incorrect HSN or SAC code can result in wrong GST rate application, rejection of Input Tax Credit claims by the recipient, penalties under Section 122 of the CGST Act, and issues during GST audits. Misclassification may trigger demand notices from tax authorities with interest at 18% per annum (or 24% in fraud cases). Always verify codes against the official CBIC rate schedules before use.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Where can I find the official HSN code for my product?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">You can find official HSN codes through multiple sources: the GST Portal's Search HSN tool at services.gst.gov.in, the CBIC's official rate schedule notifications, the Customs Tariff Act schedules, and the World Customs Organization's HS nomenclature database. Our free HSN Code Finder tool above also searches by product name or code number for quick classification.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Is HSN code mandatory for composition scheme dealers?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Yes, composition scheme dealers must also mention HSN codes on their Bill of Supply as per CGST Notification 78/2020 effective from April 2021. Although composition dealers cannot charge GST separately to customers and issue a Bill of Supply instead of a tax invoice, they must still declare HSN-wise summary in their quarterly CMP-08 return filed on the GST Portal.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How is the HSN code structured and what do the digits mean?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">HSN codes follow a hierarchical structure: the first 2 digits represent the Chapter (broad product category), the next 2 form the Heading (specific group), digits 5-6 are the Subheading (detailed classification), and in India, digits 7-8 form the national tariff item for the most granular level. The first 6 digits are internationally standardised by the WCO, while the last 2 digits are India-specific.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the structure of a SAC code for services?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">SAC codes are 6-digit numeric codes where the first two digits are always '99', indicating a service. The next two digits represent the major service category or nature of service. The last two digits provide the detailed service classification. For instance, SAC 995411 means Chapter 99 (services), Group 54 (construction services), Detail 11 (residential building construction).</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Do I need an 8-digit HSN code for export invoices?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Yes, 8-digit HSN codes are compulsory for all import and export transactions regardless of business turnover. This requirement ensures compatibility with the international Harmonized System used by over 200 countries. The 8-digit code corresponds to the Indian Customs Tariff classification and must match the codes declared in the Shipping Bill or Bill of Entry filed with customs authorities.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Can the same product have different GST rates under different HSN codes?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Yes, similar products can attract different GST rates depending on their specific HSN classification. For example, footwear below &#8377;1,000 per pair falls under 5% GST, while footwear above &#8377;1,000 attracts 18% under a different sub-heading. Similarly, processed foods may have different rates based on branding, packaging, or ingredients. Accurate sub-heading level classification is therefore essential.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How do I report HSN-wise summary in GSTR-1?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">GSTR-1 requires an HSN-wise summary of outward supplies in Table 12. You must consolidate all invoices by HSN code and report the total taxable value, IGST, CGST, SGST, and cess for each code. Businesses with turnover up to &#8377;5 crore report at the 4-digit level and those above &#8377;5 crore at the 6-digit level. The GST portal auto-populates some data from e-invoices if applicable.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the difference between HSN code and ITC-HS code?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">ITC-HS stands for Indian Trade Classification based on the Harmonized System. It is the 8-digit code used by Indian Customs for import-export classification under the Customs Tariff Act, 1975. The first 6 digits of ITC-HS match the international HS code, while the last 2 digits are India-specific. For GST purposes, HSN codes align with ITC-HS codes, so the same classification applies for both.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Are there goods exempt from HSN code requirements?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">No goods or services supplied by registered taxpayers are exempt from HSN/SAC code requirements since April 2021. Even nil-rated and exempt supplies must be classified with the correct code. However, taxpayers with turnover below &#8377;1.5 crore are not required to mention HSN codes on B2C invoices, though it is recommended. B2B invoices require HSN codes regardless of turnover.</div>
                    </div>
                </div>
            </section>

        </div>

        <!-- ====== SIDEBAR ====== -->
        <aside class="sidebar-col">
            <!-- CTA Card -->
            <div class="cta-card">
                <h3>Need HSN/SAC Help?</h3>
                <p>Our Chartered Accountants help businesses with correct HSN/SAC classification, GST registration, and compliance across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20HSN%20SAC%20code%20classification.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>

            <!-- Related Tools -->
            <div class="sidebar-card">
                <h3>Related Free Tools</h3>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/tds-rate-finder" class="sidebar-link">TDS Rate Finder <span class="arrow">&rarr;</span></a>
                <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/hra-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/gst-compliance-calendar" class="sidebar-link">GST Compliance Calendar <span class="arrow">&rarr;</span></a>
            </div>

            <!-- Related Services -->
            <div class="sidebar-card">
                <h3>GST Services</h3>
                <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
                <a href="/gst-returns" class="sidebar-link">GST Returns Filing <span class="arrow">&rarr;</span></a>
                <a href="/gst-audit" class="sidebar-link">GST Audit Services <span class="arrow">&rarr;</span></a>
                <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
                <a href="/gst-refund" class="sidebar-link">GST Refund Services <span class="arrow">&rarr;</span></a>
            </div>

            <!-- Blog -->
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
        // ====== HSN & SAC DATABASE ======
        const hsnData = [
            // Chapter 01-05: Live animals, animal products
            {code:"0101",desc:"Live horses, asses, mules and hinnies",rate:"0%",type:"HSN"},
            {code:"0102",desc:"Live bovine animals (cattle, buffalo)",rate:"0%",type:"HSN"},
            {code:"0201",desc:"Meat of bovine animals, fresh or chilled",rate:"0%",type:"HSN"},
            {code:"0207",desc:"Meat and edible offal of poultry (chicken, turkey), fresh or chilled",rate:"0%",type:"HSN"},
            {code:"0301",desc:"Live fish (ornamental, trout, eels, carp)",rate:"0%",type:"HSN"},
            {code:"0302",desc:"Fish, fresh or chilled (salmon, tilapia, sardines)",rate:"0%",type:"HSN"},
            {code:"0401",desc:"Milk and cream, not concentrated or sweetened",rate:"0%",type:"HSN"},
            {code:"0402",desc:"Milk and cream, concentrated or sweetened (condensed milk, milk powder)",rate:"5%",type:"HSN"},
            {code:"0406",desc:"Cheese, curd and paneer",rate:"12%",type:"HSN"},
            {code:"0407",desc:"Bird eggs in shell, fresh (hen eggs, duck eggs)",rate:"0%",type:"HSN"},
            {code:"0409",desc:"Natural honey",rate:"0%",type:"HSN"},
            {code:"0501",desc:"Human hair, unworked",rate:"0%",type:"HSN"},
            // Chapter 06-14: Vegetable products
            {code:"0601",desc:"Bulbs, tubers, roots, corms (live plants for propagation)",rate:"0%",type:"HSN"},
            {code:"0701",desc:"Potatoes, fresh or chilled",rate:"0%",type:"HSN"},
            {code:"0702",desc:"Tomatoes, fresh or chilled",rate:"0%",type:"HSN"},
            {code:"0703",desc:"Onions, shallots, garlic, leeks, fresh or chilled",rate:"0%",type:"HSN"},
            {code:"0713",desc:"Dried leguminous vegetables (dal, lentils, chickpeas, beans)",rate:"0%",type:"HSN"},
            {code:"0803",desc:"Bananas including plantains, fresh",rate:"0%",type:"HSN"},
            {code:"0804",desc:"Dates, figs, pineapples, avocados, mangoes, fresh",rate:"0%",type:"HSN"},
            {code:"0805",desc:"Citrus fruit (oranges, lemons, grapefruits), fresh",rate:"0%",type:"HSN"},
            {code:"0901",desc:"Coffee beans, roasted or unroasted; coffee husks and skins",rate:"5%",type:"HSN"},
            {code:"0902",desc:"Tea (green tea, black tea, all types)",rate:"5%",type:"HSN"},
            {code:"0904",desc:"Pepper, dried or crushed (black pepper, white pepper)",rate:"5%",type:"HSN"},
            {code:"0910",desc:"Ginger, saffron, turmeric (curcuma), thyme, curry leaves",rate:"5%",type:"HSN"},
            {code:"1001",desc:"Wheat and meslin",rate:"0%",type:"HSN"},
            {code:"1005",desc:"Maize (corn)",rate:"0%",type:"HSN"},
            {code:"1006",desc:"Rice (paddy, husked, semi-milled, milled, broken)",rate:"5%",type:"HSN"},
            {code:"1201",desc:"Soya beans",rate:"0%",type:"HSN"},
            {code:"1207",desc:"Other oil seeds (sesame, mustard, linseed, sunflower)",rate:"0%",type:"HSN"},
            // Chapter 15: Fats and oils
            {code:"1507",desc:"Soya-bean oil and its fractions",rate:"5%",type:"HSN"},
            {code:"1508",desc:"Groundnut oil and its fractions",rate:"5%",type:"HSN"},
            {code:"1509",desc:"Olive oil and its fractions",rate:"5%",type:"HSN"},
            {code:"1511",desc:"Palm oil and its fractions",rate:"5%",type:"HSN"},
            {code:"1513",desc:"Coconut oil, palm kernel oil, babassu oil",rate:"5%",type:"HSN"},
            {code:"1515",desc:"Other vegetable fats and oils (linseed, maize, castor, sesame)",rate:"5%",type:"HSN"},
            {code:"1517",desc:"Margarine; edible preparations of animal or vegetable fats",rate:"12%",type:"HSN"},
            // Chapter 16-24: Prepared foodstuffs, beverages, tobacco
            {code:"1601",desc:"Sausages and similar products of meat (processed meat)",rate:"12%",type:"HSN"},
            {code:"1701",desc:"Cane or beet sugar (raw, refined, crystallised)",rate:"5%",type:"HSN"},
            {code:"1704",desc:"Sugar confectionery (sweets, candy, toffee) not containing cocoa",rate:"18%",type:"HSN"},
            {code:"1806",desc:"Chocolate and food preparations containing cocoa",rate:"18%",type:"HSN"},
            {code:"1901",desc:"Malt extract; food preparations of flour (infant food, health drinks)",rate:"18%",type:"HSN"},
            {code:"1902",desc:"Pasta (spaghetti, macaroni, noodles, couscous)",rate:"18%",type:"HSN"},
            {code:"1905",desc:"Bread, pastry, cakes, biscuits, pizza",rate:"5%",type:"HSN"},
            {code:"2001",desc:"Vegetables, fruit, nuts preserved by vinegar (pickles)",rate:"12%",type:"HSN"},
            {code:"2009",desc:"Fruit juices and vegetable juices, unfermented",rate:"12%",type:"HSN"},
            {code:"2101",desc:"Extracts of coffee, tea; instant coffee, tea bags",rate:"18%",type:"HSN"},
            {code:"2106",desc:"Food preparations not elsewhere specified (protein supplements, nutrition bars)",rate:"18%",type:"HSN"},
            {code:"2201",desc:"Mineral water and aerated water (packaged drinking water)",rate:"18%",type:"HSN"},
            {code:"2202",desc:"Sweetened or flavoured water; soft drinks, energy drinks",rate:"28%",type:"HSN"},
            {code:"2401",desc:"Unmanufactured tobacco; tobacco refuse",rate:"28%",type:"HSN"},
            {code:"2402",desc:"Cigars, cheroots, cigarillos, cigarettes",rate:"28%",type:"HSN"},
            // Chapter 25-27: Mineral products
            {code:"2501",desc:"Salt (table salt, sea salt, rock salt); pure sodium chloride",rate:"0%",type:"HSN"},
            {code:"2515",desc:"Marble, travertine, granite (crude or roughly trimmed)",rate:"5%",type:"HSN"},
            {code:"2523",desc:"Portland cement, aluminous cement, slag cement",rate:"28%",type:"HSN"},
            {code:"2701",desc:"Coal; briquettes, ovoids, similar solid fuels",rate:"5%",type:"HSN"},
            {code:"2710",desc:"Petroleum oils (not crude); diesel, petrol, kerosene, aviation fuel",rate:"18%",type:"HSN"},
            {code:"2711",desc:"Petroleum gases (LPG, natural gas, butane, propane)",rate:"5%",type:"HSN"},
            // Chapter 28-38: Chemical products
            {code:"2836",desc:"Carbonates (baking soda, soda ash, sodium bicarbonate)",rate:"18%",type:"HSN"},
            {code:"3003",desc:"Medicaments (mixed, not in dosage form); pharmaceutical bulk drugs",rate:"12%",type:"HSN"},
            {code:"3004",desc:"Medicaments in measured doses (tablets, capsules, syrups, injectables)",rate:"12%",type:"HSN"},
            {code:"3006",desc:"Pharmaceutical goods (surgical sutures, blood grouping reagents)",rate:"12%",type:"HSN"},
            {code:"3101",desc:"Animal or vegetable fertilizers (organic manure, compost)",rate:"5%",type:"HSN"},
            {code:"3105",desc:"Mineral or chemical fertilizers (NPK, urea, DAP)",rate:"5%",type:"HSN"},
            {code:"3208",desc:"Paints and varnishes (synthetic polymer based)",rate:"18%",type:"HSN"},
            {code:"3301",desc:"Essential oils (lavender, peppermint, eucalyptus)",rate:"18%",type:"HSN"},
            {code:"3303",desc:"Perfumes and toilet waters (fragrance, cologne)",rate:"28%",type:"HSN"},
            {code:"3304",desc:"Beauty or make-up preparations (lipstick, foundation, skincare)",rate:"28%",type:"HSN"},
            {code:"3305",desc:"Hair care preparations (shampoo, hair dye, hair oil)",rate:"18%",type:"HSN"},
            {code:"3306",desc:"Oral hygiene preparations (toothpaste, mouthwash, dental floss)",rate:"18%",type:"HSN"},
            {code:"3307",desc:"Shaving preparations, deodorants, room perfuming preparations",rate:"28%",type:"HSN"},
            {code:"3401",desc:"Soap; organic surface-active products for washing (detergent bars)",rate:"18%",type:"HSN"},
            {code:"3402",desc:"Organic surface-active agents; washing preparations (detergent powder, liquid)",rate:"18%",type:"HSN"},
            // Chapter 39-40: Plastics and rubber
            {code:"3923",desc:"Plastic articles for conveyance (bottles, containers, boxes, crates)",rate:"18%",type:"HSN"},
            {code:"3926",desc:"Other articles of plastics (office/school supplies, fittings, statuettes)",rate:"18%",type:"HSN"},
            {code:"4011",desc:"New pneumatic rubber tyres (car, truck, bus, motorcycle)",rate:"28%",type:"HSN"},
            {code:"4013",desc:"Inner tubes of rubber (for vehicles)",rate:"28%",type:"HSN"},
            // Chapter 44-49: Wood, paper, books
            {code:"4401",desc:"Fuel wood, wood chips, sawdust, wood waste",rate:"5%",type:"HSN"},
            {code:"4410",desc:"Particle board, oriented strand board (OSB) of wood",rate:"18%",type:"HSN"},
            {code:"4802",desc:"Uncoated paper for writing, printing (A4, copier paper)",rate:"12%",type:"HSN"},
            {code:"4819",desc:"Cartons, boxes and bags of paper or paperboard (packaging)",rate:"18%",type:"HSN"},
            {code:"4820",desc:"Registers, notebooks, account books, diaries, memo pads",rate:"12%",type:"HSN"},
            {code:"4901",desc:"Printed books, brochures, leaflets",rate:"0%",type:"HSN"},
            {code:"4902",desc:"Newspapers, journals and periodicals",rate:"0%",type:"HSN"},
            // Chapter 50-63: Textiles
            {code:"5007",desc:"Woven fabrics of silk or silk waste",rate:"5%",type:"HSN"},
            {code:"5208",desc:"Woven fabrics of cotton (plain weave, twill, satin)",rate:"5%",type:"HSN"},
            {code:"5209",desc:"Woven cotton fabrics containing \u226585% cotton, weight >200 g/m²",rate:"5%",type:"HSN"},
            {code:"5407",desc:"Woven fabrics of synthetic filament yarn (polyester, nylon)",rate:"5%",type:"HSN"},
            {code:"5510",desc:"Yarn of artificial staple fibres (rayon, viscose)",rate:"12%",type:"HSN"},
            {code:"6101",desc:"Men's overcoats, jackets, windcheaters (knitted)",rate:"12%",type:"HSN"},
            {code:"6104",desc:"Women's suits, dresses, skirts, trousers (knitted)",rate:"12%",type:"HSN"},
            {code:"6109",desc:"T-shirts, singlets and other vests (knitted or crocheted)",rate:"5%",type:"HSN"},
            {code:"6110",desc:"Jerseys, pullovers, cardigans, waistcoats, sweaters (knitted)",rate:"12%",type:"HSN"},
            {code:"6203",desc:"Men's suits, trousers, shorts (not knitted \u2014 woven)",rate:"12%",type:"HSN"},
            {code:"6204",desc:"Women's suits, trousers, shorts (woven)",rate:"12%",type:"HSN"},
            {code:"6205",desc:"Men's shirts (woven cotton, polyester)",rate:"12%",type:"HSN"},
            {code:"6302",desc:"Bed linen, table linen, toilet linen (towels, napkins)",rate:"12%",type:"HSN"},
            // Chapter 64-67: Footwear
            {code:"6401",desc:"Waterproof footwear with rubber or plastic soles and uppers",rate:"18%",type:"HSN"},
            {code:"6402",desc:"Footwear with rubber or plastic soles (sports shoes, sandals)",rate:"5%/18%",type:"HSN"},
            {code:"6403",desc:"Footwear with rubber/plastic soles and leather uppers",rate:"18%",type:"HSN"},
            {code:"6404",desc:"Footwear with rubber/plastic soles and textile uppers (canvas shoes)",rate:"5%/18%",type:"HSN"},
            // Chapter 68-71: Stone, ceramics, glass, gems
            {code:"6802",desc:"Worked monumental or building stone (marble slabs, granite)",rate:"18%",type:"HSN"},
            {code:"6810",desc:"Articles of cement, concrete (tiles, blocks, pipes, bricks)",rate:"28%",type:"HSN"},
            {code:"6907",desc:"Ceramic tiles (glazed, unglazed; floor, wall tiles)",rate:"18%",type:"HSN"},
            {code:"7013",desc:"Glassware for table, kitchen, toilet (tumblers, plates, vases)",rate:"18%",type:"HSN"},
            {code:"7101",desc:"Pearls, natural or cultured",rate:"3%",type:"HSN"},
            {code:"7102",desc:"Diamonds (rough, cut, polished)",rate:"0.25%",type:"HSN"},
            {code:"7108",desc:"Gold, unwrought or in semi-manufactured form",rate:"3%",type:"HSN"},
            {code:"7113",desc:"Articles of jewellery (gold, silver, platinum jewellery)",rate:"3%",type:"HSN"},
            {code:"7117",desc:"Imitation jewellery (artificial, fashion jewellery)",rate:"18%",type:"HSN"},
            // Chapter 72-83: Base metals
            {code:"7206",desc:"Iron and non-alloy steel in ingots",rate:"18%",type:"HSN"},
            {code:"7210",desc:"Flat-rolled iron/steel products (galvanised, coated sheets)",rate:"18%",type:"HSN"},
            {code:"7213",desc:"Hot-rolled bars and rods of iron or non-alloy steel (TMT bars)",rate:"18%",type:"HSN"},
            {code:"7306",desc:"Iron or steel tubes and pipes (welded, hollow sections)",rate:"18%",type:"HSN"},
            {code:"7318",desc:"Screws, bolts, nuts, washers of iron or steel (fasteners)",rate:"18%",type:"HSN"},
            {code:"7323",desc:"Iron or steel household articles (pots, pans, utensils, sinks)",rate:"18%",type:"HSN"},
            {code:"7604",desc:"Aluminium bars, rods and profiles",rate:"18%",type:"HSN"},
            {code:"7615",desc:"Aluminium household articles (pots, pans, pressure cookers)",rate:"12%",type:"HSN"},
            // Chapter 84-85: Machinery, electronics
            {code:"8414",desc:"Air or vacuum pumps; compressors; fans (AC, ventilation)",rate:"18%",type:"HSN"},
            {code:"8415",desc:"Air conditioning machines (split AC, window AC, central AC)",rate:"28%",type:"HSN"},
            {code:"8418",desc:"Refrigerators, freezers (domestic, commercial)",rate:"18%",type:"HSN"},
            {code:"8422",desc:"Dishwashing machines; cleaning or drying machinery",rate:"18%",type:"HSN"},
            {code:"8433",desc:"Harvesting and threshing machinery (agriculture)",rate:"12%",type:"HSN"},
            {code:"8443",desc:"Printing machinery; printers, copiers, fax machines",rate:"18%",type:"HSN"},
            {code:"8450",desc:"Household or laundry-type washing machines",rate:"18%",type:"HSN"},
            {code:"8471",desc:"Automatic data processing machines (computers, laptops, servers)",rate:"18%",type:"HSN"},
            {code:"8473",desc:"Parts and accessories for computers and office machines",rate:"18%",type:"HSN"},
            {code:"8504",desc:"Electrical transformers, static converters (UPS, inverters, chargers)",rate:"18%",type:"HSN"},
            {code:"8507",desc:"Electric accumulators (batteries \u2014 lithium-ion, lead-acid)",rate:"18%",type:"HSN"},
            {code:"8516",desc:"Electric instantaneous water heaters, immersion heaters, irons, ovens",rate:"18%",type:"HSN"},
            {code:"8517",desc:"Telephone sets, smartphones, modems, routers",rate:"18%",type:"HSN"},
            {code:"8521",desc:"Video recording or reproducing apparatus",rate:"18%",type:"HSN"},
            {code:"8523",desc:"Discs, tapes, solid-state storage (pen drives, SSD, memory cards)",rate:"18%",type:"HSN"},
            {code:"8525",desc:"Cameras, digital cameras, CCTV, webcams",rate:"18%",type:"HSN"},
            {code:"8528",desc:"Monitors, projectors, television receivers (LED TV, LCD TV)",rate:"18%",type:"HSN"},
            {code:"8534",desc:"Printed circuits (PCB)",rate:"18%",type:"HSN"},
            {code:"8539",desc:"Electric filament or discharge lamps; LED lamps",rate:"12%",type:"HSN"},
            {code:"8541",desc:"Semiconductor devices; LEDs; photovoltaic cells (solar cells)",rate:"5%/18%",type:"HSN"},
            {code:"8544",desc:"Insulated wire, cable (electrical wires, fibre optic cable)",rate:"18%",type:"HSN"},
            // Chapter 86-89: Vehicles
            {code:"8703",desc:"Motor cars and vehicles for transport of persons (cars, SUVs)",rate:"28%",type:"HSN"},
            {code:"8704",desc:"Motor vehicles for transport of goods (trucks, lorries, vans)",rate:"28%",type:"HSN"},
            {code:"8711",desc:"Motorcycles, mopeds, scooters (two-wheelers)",rate:"28%",type:"HSN"},
            {code:"8712",desc:"Bicycles and other cycles, not motorised",rate:"12%",type:"HSN"},
            {code:"8714",desc:"Parts and accessories of vehicles (bicycle parts, motorcycle parts)",rate:"18%",type:"HSN"},
            // Chapter 90-92: Instruments
            {code:"9001",desc:"Optical fibres, lenses, prisms, mirrors",rate:"18%",type:"HSN"},
            {code:"9004",desc:"Spectacles, goggles, sunglasses (corrective, protective)",rate:"12%",type:"HSN"},
            {code:"9018",desc:"Medical, surgical, dental instruments and apparatus",rate:"12%",type:"HSN"},
            {code:"9021",desc:"Orthopaedic appliances; artificial joints; hearing aids",rate:"12%",type:"HSN"},
            {code:"9025",desc:"Thermometers, barometers, hygrometers",rate:"18%",type:"HSN"},
            // Chapter 94-96: Furniture, toys, misc
            {code:"9401",desc:"Seats (chairs, sofas, office chairs) excluding those of heading 9402",rate:"18%",type:"HSN"},
            {code:"9403",desc:"Other furniture (desks, cabinets, shelves, beds, wardrobes)",rate:"18%",type:"HSN"},
            {code:"9404",desc:"Mattress supports; mattresses (spring, foam, coir)",rate:"18%",type:"HSN"},
            {code:"9405",desc:"Lamps and lighting fittings (chandeliers, table lamps, LED fixtures)",rate:"18%",type:"HSN"},
            {code:"9503",desc:"Toys (dolls, puzzles, building sets, electronic toys, board games)",rate:"12%",type:"HSN"},
            {code:"9506",desc:"Sports equipment (exercise equipment, gym, cricket, badminton)",rate:"12%",type:"HSN"},
            {code:"9608",desc:"Ball-point pens, felt-tipped pens, marker pens, mechanical pencils",rate:"18%",type:"HSN"},
            {code:"9613",desc:"Cigarette lighters and similar lighters",rate:"28%",type:"HSN"},
            {code:"9619",desc:"Sanitary towels, tampons, baby diapers, adult diapers",rate:"12%",type:"HSN"},
            // ====== SAC CODES ======
            {code:"995411",desc:"Construction services of residential buildings (single dwelling, multi-dwelling)",rate:"18%",type:"SAC"},
            {code:"995412",desc:"Construction services of commercial buildings (offices, malls, complexes)",rate:"18%",type:"SAC"},
            {code:"995421",desc:"General construction of highways, streets, roads, bridges, tunnels",rate:"12%",type:"SAC"},
            {code:"995431",desc:"Site preparation services (demolition, earthmoving, excavation, drilling)",rate:"18%",type:"SAC"},
            {code:"995461",desc:"Electrical installation services (wiring, switchboards, fuse boxes)",rate:"18%",type:"SAC"},
            {code:"995462",desc:"Plumbing and HVAC installation services (water supply, heating, cooling)",rate:"18%",type:"SAC"},
            {code:"995468",desc:"Other installation services (elevators, escalators, fire protection)",rate:"18%",type:"SAC"},
            {code:"996111",desc:"Cargo handling services (loading, unloading, storage)",rate:"18%",type:"SAC"},
            {code:"996211",desc:"Courier services and local delivery services",rate:"18%",type:"SAC"},
            {code:"996311",desc:"Room or accommodation services in hotels (tariff \u2264 \u20B91,000)",rate:"0%",type:"SAC"},
            {code:"996312",desc:"Room or accommodation services in hotels (tariff \u20B91,001-\u20B97,500)",rate:"12%",type:"SAC"},
            {code:"996313",desc:"Room or accommodation services in hotels (tariff > \u20B97,500)",rate:"18%",type:"SAC"},
            {code:"996331",desc:"Restaurant services (without AC, not in hotel with tariff > \u20B97,500)",rate:"5%",type:"SAC"},
            {code:"996332",desc:"Restaurant services (with AC or in specified premises)",rate:"5%",type:"SAC"},
            {code:"996333",desc:"Catering services (outdoor catering, event catering)",rate:"5%/18%",type:"SAC"},
            {code:"996411",desc:"Passenger transport by rail (first class / AC)",rate:"5%",type:"SAC"},
            {code:"996421",desc:"Passenger transport by bus (AC stage carriage)",rate:"5%",type:"SAC"},
            {code:"996422",desc:"Passenger transport by bus (contract carriage)",rate:"5%",type:"SAC"},
            {code:"996431",desc:"Radio taxi / ride-hailing services (Uber, Ola type)",rate:"5%",type:"SAC"},
            {code:"996511",desc:"Goods transport by road (GTA, goods transport agency)",rate:"5%",type:"SAC"},
            {code:"996512",desc:"Goods transport by rail",rate:"5%",type:"SAC"},
            {code:"996521",desc:"Goods transport by inland waterways",rate:"5%",type:"SAC"},
            {code:"996601",desc:"Rental services of transport vehicles with operator",rate:"18%",type:"SAC"},
            {code:"997111",desc:"Financial services \u2014 interest on loans, deposits, advances",rate:"Exempt",type:"SAC"},
            {code:"997113",desc:"Financial leasing / hire purchase services",rate:"18%",type:"SAC"},
            {code:"997131",desc:"Investment banking, underwriting services",rate:"18%",type:"SAC"},
            {code:"997133",desc:"Brokerage and commission services (stock broking, commodity)",rate:"18%",type:"SAC"},
            {code:"997139",desc:"Other financial services not elsewhere classified",rate:"18%",type:"SAC"},
            {code:"997151",desc:"Mutual fund management services (fund management, AMC fees)",rate:"18%",type:"SAC"},
            {code:"997159",desc:"Portfolio management, wealth management, advisory services",rate:"18%",type:"SAC"},
            {code:"997161",desc:"General insurance services (motor, health, fire, marine)",rate:"18%",type:"SAC"},
            {code:"997162",desc:"Life insurance services",rate:"18%",type:"SAC"},
            {code:"997163",desc:"Reinsurance services",rate:"18%",type:"SAC"},
            {code:"997171",desc:"Insurance auxiliary services (insurance broking, claim processing)",rate:"18%",type:"SAC"},
            {code:"997211",desc:"Real estate services \u2014 rental of residential property",rate:"Exempt",type:"SAC"},
            {code:"997212",desc:"Real estate services \u2014 rental of commercial property",rate:"18%",type:"SAC"},
            {code:"997311",desc:"Leasing or rental \u2014 machinery and equipment without operator",rate:"18%",type:"SAC"},
            {code:"997312",desc:"Leasing or rental \u2014 transport vehicles without operator",rate:"18%",type:"SAC"},
            {code:"997319",desc:"Leasing or rental \u2014 other goods without operator",rate:"18%",type:"SAC"},
            {code:"997321",desc:"Licensing of intellectual property (patents, trademarks, copyrights)",rate:"18%",type:"SAC"},
            {code:"998111",desc:"Scientific research and experimental development services",rate:"18%",type:"SAC"},
            {code:"998211",desc:"Legal advisory and representation services (advocate, lawyer)",rate:"18%",type:"SAC"},
            {code:"998212",desc:"Legal documentation services (notary, drafting, arbitration)",rate:"18%",type:"SAC"},
            {code:"998213",desc:"Legal services concerning IP (patents, copyrights, trademarks)",rate:"18%",type:"SAC"},
            {code:"998221",desc:"Auditing services (statutory audit, internal audit)",rate:"18%",type:"SAC"},
            {code:"998222",desc:"Accounting and bookkeeping services",rate:"18%",type:"SAC"},
            {code:"998223",desc:"Tax preparation, planning and advisory services (CA, tax consultant)",rate:"18%",type:"SAC"},
            {code:"998224",desc:"Insolvency and receivership services",rate:"18%",type:"SAC"},
            {code:"998231",desc:"Management consulting services (strategy, operations, HR)",rate:"18%",type:"SAC"},
            {code:"998232",desc:"Business consulting services (project management, supply chain)",rate:"18%",type:"SAC"},
            {code:"998311",desc:"Management consulting and management services",rate:"18%",type:"SAC"},
            {code:"998312",desc:"Business consulting, public relations services",rate:"18%",type:"SAC"},
            {code:"998313",desc:"Information technology consulting services (IT strategy, system planning)",rate:"18%",type:"SAC"},
            {code:"998314",desc:"IT design and development services (software development, web development)",rate:"18%",type:"SAC"},
            {code:"998315",desc:"Hosting and IT infrastructure services (cloud, data centre, managed hosting)",rate:"18%",type:"SAC"},
            {code:"998316",desc:"IT infrastructure and network management services",rate:"18%",type:"SAC"},
            {code:"998319",desc:"Other IT and computer services (data processing, BPO, KPO)",rate:"18%",type:"SAC"},
            {code:"998321",desc:"Telecommunications services (mobile, landline, broadband, ISP)",rate:"18%",type:"SAC"},
            {code:"998322",desc:"Internet telecommunications services",rate:"18%",type:"SAC"},
            {code:"998331",desc:"Online content creation and publishing services",rate:"18%",type:"SAC"},
            {code:"998341",desc:"News agency services",rate:"18%",type:"SAC"},
            {code:"998351",desc:"Library and archive services",rate:"Exempt",type:"SAC"},
            {code:"998411",desc:"Architectural services (building design, planning, urban planning)",rate:"18%",type:"SAC"},
            {code:"998421",desc:"Engineering services (structural, mechanical, electrical engineering)",rate:"18%",type:"SAC"},
            {code:"998431",desc:"Scientific and technical consulting services (environmental, geology)",rate:"18%",type:"SAC"},
            {code:"998511",desc:"Veterinary services (animal healthcare, pet treatment)",rate:"0%",type:"SAC"},
            {code:"998521",desc:"Advertising services (creative, media planning, buying)",rate:"18%",type:"SAC"},
            {code:"998531",desc:"Market research and public opinion polling services",rate:"18%",type:"SAC"},
            {code:"998541",desc:"Photographic services and videography services",rate:"18%",type:"SAC"},
            {code:"998551",desc:"Specialised design services (interior design, fashion design, graphic design)",rate:"18%",type:"SAC"},
            {code:"998561",desc:"Convention and trade show organisation services",rate:"18%",type:"SAC"},
            {code:"998596",desc:"Original compositions of authors, composers and other artists",rate:"12%",type:"SAC"},
            {code:"998611",desc:"Telephone-based customer support services (call centre)",rate:"18%",type:"SAC"},
            {code:"998621",desc:"Credit reporting and collection services",rate:"18%",type:"SAC"},
            {code:"998631",desc:"Packaging services",rate:"18%",type:"SAC"},
            {code:"998711",desc:"Maintenance and repair of fabricated metal products",rate:"18%",type:"SAC"},
            {code:"998713",desc:"Maintenance and repair of commercial and industrial machinery",rate:"18%",type:"SAC"},
            {code:"998714",desc:"Maintenance and repair of computers and office machinery",rate:"18%",type:"SAC"},
            {code:"998715",desc:"Maintenance and repair of transport machinery and equipment",rate:"18%",type:"SAC"},
            {code:"998719",desc:"Maintenance and repair services of other goods",rate:"18%",type:"SAC"},
            {code:"998721",desc:"Repair services of personal and household goods",rate:"18%",type:"SAC"},
            {code:"998811",desc:"Manufacturing services on physical inputs owned by others (job work)",rate:"18%",type:"SAC"},
            {code:"998812",desc:"Job work \u2014 food products, beverages manufacturing",rate:"5%",type:"SAC"},
            {code:"998813",desc:"Job work \u2014 textiles, apparel manufacturing",rate:"5%",type:"SAC"},
            {code:"998814",desc:"Job work \u2014 jewellery manufacturing (gold, silver)",rate:"5%",type:"SAC"},
            {code:"998911",desc:"Employment and recruitment services (staffing, HR)",rate:"18%",type:"SAC"},
            {code:"998912",desc:"Labour supply services (contract labour, manpower supply)",rate:"18%",type:"SAC"},
            {code:"998921",desc:"Investigation and security services (guards, surveillance)",rate:"18%",type:"SAC"},
            {code:"998931",desc:"Cleaning services (building, industrial, house cleaning)",rate:"18%",type:"SAC"},
            {code:"999110",desc:"Public administration and government services",rate:"Exempt",type:"SAC"},
            {code:"999210",desc:"Education services (primary, secondary, higher education)",rate:"Exempt",type:"SAC"},
            {code:"999220",desc:"Higher education services (degree, post-graduate)",rate:"Exempt",type:"SAC"},
            {code:"999230",desc:"Other education and training services (coaching, vocational, certification)",rate:"18%",type:"SAC"},
            {code:"999311",desc:"Human health services \u2014 inpatient hospital services",rate:"Exempt",type:"SAC"},
            {code:"999312",desc:"Human health services \u2014 medical and dental practice",rate:"Exempt",type:"SAC"},
            {code:"999313",desc:"Paramedical and nursing services (ambulance, physiotherapy)",rate:"Exempt",type:"SAC"},
            {code:"999321",desc:"Residential care services for elderly (old age homes, assisted living)",rate:"Exempt",type:"SAC"},
            {code:"999411",desc:"Sewage treatment and disposal services (waste water treatment)",rate:"12%",type:"SAC"},
            {code:"999421",desc:"Waste collection, treatment and disposal services",rate:"12%",type:"SAC"},
            {code:"999511",desc:"Services of membership organisations (chambers, associations, NGOs)",rate:"18%",type:"SAC"},
            {code:"999611",desc:"Audiovisual production services (film, TV production)",rate:"18%",type:"SAC"},
            {code:"999711",desc:"Fitness centre and sports facility operation services (gym, spa)",rate:"18%",type:"SAC"},
            {code:"999721",desc:"Amusement park and theme park services",rate:"28%",type:"SAC"},
            {code:"999722",desc:"Gambling and betting services",rate:"28%",type:"SAC"},
            {code:"999791",desc:"Other recreation and amusement services",rate:"18%",type:"SAC"},
            {code:"999811",desc:"Laundry services (washing, dry-cleaning, ironing)",rate:"18%",type:"SAC"},
            {code:"999812",desc:"Beauty and physical well-being services (salon, spa, barbershop)",rate:"18%",type:"SAC"},
            {code:"999813",desc:"Funeral, cremation and undertaking services",rate:"Exempt",type:"SAC"},
        ];

        let searchType = 'goods';

        function setSearchType(btn) {
            searchType = btn.dataset.value;
            btn.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        }

        function getRateClass(rate) {
            const r = rate.toLowerCase();
            if (r === '0%' || r === 'exempt' || r === '0') return 'r0';
            if (r.includes('5%') && !r.includes('12') && !r.includes('18') && !r.includes('28')) return 'r5';
            if (r.includes('3%') || r === '0.25%') return 'r3';
            if (r.includes('12%')) return 'r12';
            if (r.includes('18%')) return 'r18';
            if (r.includes('28%')) return 'r28';
            return 'rmulti';
        }

        function performSearch() {
            const query = document.getElementById('searchInput').value.trim().toLowerCase();
            if (query.length < 2) {
                alert('Please enter at least 2 characters to search.');
                return;
            }

            let results = hsnData.filter(item => {
                // Filter by type
                if (searchType === 'goods' && item.type !== 'HSN') return false;
                if (searchType === 'services' && item.type !== 'SAC') return false;

                // Match query against code and description
                const codeMatch = item.code.toLowerCase().includes(query);
                const descMatch = item.desc.toLowerCase().includes(query);
                return codeMatch || descMatch;
            });

            const section = document.getElementById('resultsSection');
            const countEl = document.getElementById('resultsCount');
            const bodyEl = document.getElementById('resultBody');
            const noRes = document.getElementById('noResults');
            const tableWrap = document.getElementById('resultTableWrap');

            section.classList.add('visible');

            if (results.length === 0) {
                noRes.style.display = 'block';
                tableWrap.style.display = 'none';
                countEl.innerHTML = `No results for "<strong>${query}</strong>"`;
            } else {
                noRes.style.display = 'none';
                tableWrap.style.display = 'block';
                countEl.innerHTML = `Found <strong>${results.length}</strong> result${results.length > 1 ? 's' : ''} for "<strong>${query}</strong>"`;
                bodyEl.innerHTML = results.map(item =>
                    `<tr>
                        <td><span class="code-badge">${item.code}</span></td>
                        <td>${item.desc}</td>
                        <td><span class="rate-badge ${getRateClass(item.rate)}">${item.rate}</span></td>
                        <td>${item.type}</td>
                    </tr>`
                ).join('');
            }

            section.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetSearch() {
            document.getElementById('searchInput').value = '';
            document.getElementById('resultsSection').classList.remove('visible');
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

        // Search on Enter key
        document.getElementById('searchInput').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') performSearch();
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
