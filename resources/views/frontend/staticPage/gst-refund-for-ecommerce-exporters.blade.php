@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>GST Refund for Ecommerce Exporters — Amazon, Etsy, eBay</title>
    <meta name="description" content="GST refund for Amazon Global Selling, Etsy and courier-mode exporters via Section 16 IGST Act, CSB-V shipping bill, ICEGATE. From Rs 10,999.">
    <link rel="canonical" href="/gst-refund-for-ecommerce-exporters">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund for Ecommerce Exporters — Amazon, Etsy, eBay">
    <meta property="og:description" content="GST refund for Amazon Global Selling, Etsy and courier-mode exporters via Section 16 IGST Act, CSB-V shipping bill, ICEGATE. From Rs 10,999.">
    <meta property="og:url" content="/gst-refund-for-ecommerce-exporters/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-refund-for-ecommerce-exporters-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund for Ecommerce Exporters — Amazon, Etsy, eBay">
    <meta name="twitter:description" content="GST refund for Amazon Global Selling, Etsy and courier-mode exporters via Section 16 IGST Act, CSB-V shipping bill, ICEGATE. From Rs 10,999.">
    <meta name="twitter:image" content="/images/gst-refund-for-ecommerce-exporters-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-refund-for-ecommerce-exporters/#breadcrumb",
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
          "name": "GST Refund",
          "item": "/gst-refund/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Refund for Ecommerce Exporters",
          "item": "/gst-refund-for-ecommerce-exporters/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-refund-for-ecommerce-exporters/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does an Indian e-commerce exporter claim GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two routes apply. Route A: pay IGST on the export invoice; the regular shipping bill or CSB-V courier shipping bill is itself treated as the refund application under Rule 96 CGST Rules; refund is auto-credited through ICEGATE and PFMS within 7 to 21 days. Route B: export under Letter of Undertaking (Form GST RFD-11) without IGST; claim accumulated ITC refund via Form GST RFD-01 within 30 to 60 days. Section 24(ix) CGST Act makes GST registration mandatory for online sellers regardless of turnover."
          }
        },
        {
          "@type": "Question",
          "name": "What is CSB-V and which sellers should use it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CSB-V is the Courier Shipping Bill V under the Courier Imports and Exports Regulations 2010 used for commercial exports up to Rs 10 lakh per consignment through Authorised Couriers on the Express Cargo Clearance System (ECCS). It is the optimal route for low-ticket high-volume sellers on Amazon Global Selling, Etsy, eBay, and Shopify. CSB-V supports both IGST-paid auto-refund and LUT-route ITC refund under Form GST RFD-01."
          }
        },
        {
          "@type": "Question",
          "name": "Amazon seller ka GST refund kaise milega?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Amazon Global Selling se export karne wale Indian sellers do tarike se refund le sakte hain: pehla, IGST pay karke shipping bill (regular ya CSB-V) auto-refund application bann jaata hai, ICEGATE-PFMS se 7 se 15 din me bank me paise aa jaate hain. Doosra, LUT file karke bina IGST diye export karna aur Form RFD-01 me accumulated ITC refund claim karna. GSTR-1 Table 6A aur GSTR-3B Table 3.1(b) sahi se file karna zaroori hai."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST registration mandatory for e-commerce exporters even below Rs 20 lakh?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 24(ix) of the CGST Act 2017 makes GST registration mandatory for any seller making supplies through an electronic commerce operator like Amazon, Flipkart, Etsy, or eBay, regardless of aggregate turnover. The Rs 20 lakh and Rs 40 lakh threshold exemptions do not apply to e-commerce sellers. Non-registration attracts demand under Section 73 or Section 74 CGST Act with penalty up to 100 percent of tax."
          }
        },
        {
          "@type": "Question",
          "name": "What does ICEGATE error code SB005 mean and how to fix it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SB005 indicates Invalid Invoice Details - the invoice number, value, or shipping bill reference declared in GSTR-1 Table 6A does not match the corresponding shipping bill on ICEGATE. Fix is to file GSTR-1 Table 9A amendment in the next return period correcting the mismatched field. Once GSTN re-transmits the corrected data to ICES, the SB is picked up in the next IGST refund scroll. Other common codes: SB001 SB number mismatch, SB003 GSTIN mismatch, SB006 EGM not filed."
          }
        },
        {
          "@type": "Question",
          "name": "Does Amazon TCS at 1 percent apply to export sales?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. TCS under Section 52 CGST Act applies only to net taxable domestic supplies routed through an electronic commerce operator. Export-mode shipments through Amazon Global Selling, Etsy, or eBay are zero-rated under Section 16 IGST Act and explicitly outside TCS scope. Amazon India deducts 1 percent TCS only on domestic Amazon.in sales; this credit appears in the seller electronic cash ledger via GSTR-8 and is used against domestic GST liability."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between CSB-IV and CSB-V courier shipping bills?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CSB-IV (Form H) covers bona fide gifts, commercial samples, prototypes, and re-export of durable containers up to Rs 25,000 per consignment. It does not require IEC and is not eligible for IGST refund or RoDTEP. CSB-V (Form HA) covers commercial exports up to Rs 10 lakh per consignment, requires IEC and GSTIN, and is eligible for IGST refund through ECCS as well as RoDTEP scrip via DGFT."
          }
        },
        {
          "@type": "Question",
          "name": "Etsy seller IGST refund kaise milega?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Etsy par sell karne wale Indian sellers usually courier (DHL, FedEx, India Post) ke through ship karte hain, to CSB-V form HA me Authorised Courier filing karta hai ECCS pe. IGST pay karke export kiya to refund auto-process hota hai ICEGATE-ECCS-PFMS workflow me. Etsy ka monthly settlement file invoice mapping ke liye chahiye, aur GSTR-1 Table 6A me sab order list karna hota hai. FX realization Etsy Payments ya direct Stripe/PayPal aata hai, BRC ya FIRC bank se lena padta hai."
          }
        },
        {
          "@type": "Question",
          "name": "How do I track the status of my IGST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three trackers run in parallel. On the GST portal: Services > Refunds > Track status of invoice data to be shared with ICEGATE shows whether GSTN has transmitted the invoice to Customs. On ICEGATE: login plus IGST Refund Status shows SB-level error codes and scroll generation. On PFMS: the bank account validation status and disbursal record. For courier exports, the CBIC eMobility tracker covers ECCS data flow, EDPMS transmission, and ICEGATE refund status."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim RoDTEP along with GST refund on e-commerce exports?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. RoDTEP (Remission of Duties and Taxes on Exported Products) is administered by DGFT separately from GST refund and remits central, state, and local levies not refunded under GST. RoDTEP rates range from 0.3 percent to 4.3 percent of FOB value under Appendix 4R; e-scrips are issued on ICEGATE and used to pay basic customs duty. RoDTEP and GST refund are non-overlapping benefits. From 1 June 2025, EOU and SEZ exports are also covered under Appendix 4RE."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/gst-refund-for-ecommerce-exporters/#service",
      "name": "GST Refund for Ecommerce Exporters",
      "description": "Patron Accounting LLP handles GST refund for Indian online sellers exporting through Amazon Global Selling, Etsy, eBay, Shopify, courier, and India Post under Section 16 of IGST Act 2017. Covers dual-mode refund - regular EDI shipping bill on ICEGATE with auto-IGST refund under Rule 96, CSB-V courier shipping bill on ECCS up to Rs 10 lakh, and LUT accumulated ITC refund via Form GST RFD-01 under Rule 89. Includes AD-code registration, marketplace reconciliation, ICEGATE SB001-SB006 remediation via Table 9A, and TCS classification.",
      "serviceType": "GST Refund Filing Service",
      "url": "/gst-refund-for-ecommerce-exporters/",
      "provider": {
        "@id": "/#organization"
      },
      "areaServed": "India"
    }
  ]
}
    </script>
@endsection

@section('content')
<style>
        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }

        h2 {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }
        h3 { color: var(--blue); font-size: 1.5rem; }
        p { color: var(--text-secondary); }
        section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        section a:hover { color: var(--orange-dark); }

        section ul { list-style: none; padding-left: 0; margin: 0; }
        section ul li:not(.nav-item) {
            display: flex; align-items: flex-start; gap: 12px;
            color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px;
        }
        section ul li:not(.nav-item)::before {
            content: ""; width: 22px; height: 22px;
            background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px;
            display: flex; align-items: center; justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }
        main section h3 { color: #14365F !important; }
        main section table { width: 100% !important; font-family: 'Barlow', sans-serif; border-collapse: collapse; border-spacing: 0; }
        main section table thead tr th {
            border: none !important; color: #fff !important; font-size: 14px; font-weight: 700;
            background-color: #14365F !important; padding: 14px 18px; text-align: left;
        }
        main section table thead tr th:first-child { border-radius: 10px 0 0 0; }
        main section table thead tr th:last-child  { border-radius: 0 10px 0 0; }
        main section table tbody tr td {
            padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary);
            background: var(--white);
            border: none !important;
            border-bottom: 1px solid var(--gray-200) !important;
            vertical-align: top;
        }
        main section table tbody tr:nth-child(even) td { background: #F9FAFB; }
        main section table tbody tr:hover td { background: var(--orange-lighter); transition: background 0.15s; }
        main section table tbody tr:last-child td { border-bottom: none !important; }
        main section table tbody tr td:first-child {
            font-weight: 700; color: var(--text-primary);
            min-width: 160px;
        }
        /* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        /* Section 8 / primary entity highlight column in comparison tables */
        .table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
        .table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
        /* Badge pills for service status cells */
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
        .table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        .expert-attribution-box .eab-check { color: var(--green); font-size: 16px; flex-shrink: 0; }
        .expert-attribution-box .eab-title { font-size: 13px; font-weight: 700; color: var(--text-primary); }
        .expert-attribution-box .eab-meta {
            font-size: 12px; color: var(--text-muted);
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
        }
        .expert-attribution-box .eab-meta .eab-sep { color: var(--gray-300); }
        .expert-attribution-box .eab-link {
            font-size: 12px; color: var(--orange); text-decoration: none;
            font-weight: 600; transition: color 0.2s;
        }
        .expert-attribution-box .eab-link:hover { color: var(--orange-dark); text-decoration: underline; }

        /* ============================================
           HERO SECTION
           ============================================ */
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
        }
        .hero-badge svg { width: 14px; height: 14px; }

        .private-registration-heading {
            font-family: 'Barlow', sans-serif !important;
            font-weight: 700 !important;
            font-size: 48px !important;
            line-height: 100% !important;
            color: #14365F !important;
            margin-bottom: 1.5rem !important;
        }
        @media (max-width: 768px) { .private-registration-heading { font-size: 32px !important; line-height: 110% !important; } }
        @media (max-width: 480px) { .private-registration-heading { font-size: 28px !important; } }

        .check-icon {
            width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;
            background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0;
        }
        .check-icon svg { width: 12px; height: 12px; color: var(--green); }

        .benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 100%; }
        .benefit-paragraph span { font-weight: 700; }

        /* Hero CTA Buttons */
        .hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }

        .btn-video {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 12px 20px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
        .btn-video .play-circle {
            width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
            background: var(--orange); border-radius: 50%; transition: transform 0.25s ease;
        }
        .btn-video:hover .play-circle { transform: scale(1.08); }
        .btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }

        .btn-sample {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; background: transparent;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
        .btn-sample svg { width: 16px; height: 16px; }

        /* Trust Section */
        .trust-section { display: flex; flex-direction: column; gap: 20px; }
        .trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
        .trust-item { display: flex; align-items: center; gap: 10px; }
        .trust-icon {
            width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;
            background: var(--gray-50); border-radius: var(--radius-sm);
        }
        .trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
        .trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
        .trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }

        .google-rating {
            display: inline-flex; align-items: center; gap: 12px;
            background: var(--white); border: 1px solid var(--gray-200);
            padding: 10px 16px; border-radius: var(--radius-md);
        }
        .rating-content { display: flex; flex-direction: column; gap: 2px; }
        .rating-stars { display: flex; align-items: center; gap: 2px; }
        .rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
        .rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
        .rating-count { font-size: 11px; color: var(--text-muted); }

        /* ============================================
           FORM CARD
           ============================================ */
        .form-card {
            background: var(--white); border-radius: var(--radius-xl);
            padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative;
            max-width: 420px; width: 100%;
            animation: fadeInForm 0.5s ease 0.2s forwards; opacity: 0;
            margin: 0 auto;
        }
        @keyframes fadeInForm { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-card::before {
            content: ''; position: absolute; top: 0; left: 28px; right: 28px; height: 3px;
            background: linear-gradient(90deg, var(--orange), var(--blue)); border-radius: 0 0 3px 3px;
        }
        .form-header { margin-bottom: 24px; }
        .form-title { font-size: 22px; font-weight: 800; color: var(--blue); margin-bottom: 4px; }
        .form-subtitle { font-size: 13px; color: var(--text-muted); }
        .form-group { margin-bottom: 16px; }
        .form-label {
            display: block; font-family: 'Barlow', sans-serif; font-size: 11px; font-weight: 700;
            color: var(--blue); text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;
        }
        .form-input {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); transition: all 0.2s ease;
        }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:hover { background: var(--gray-100); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Select */
        .form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Phone Group + Country Dropdown */
        .phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
        .phone-group:hover { background: var(--gray-100); }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        .country-code-dropdown {
            display: flex; align-items: center; justify-content: flex-start; gap: 6px;
            padding: 13px 10px 13px 14px; cursor: pointer;
            border-right: 1px solid var(--gray-200); background: transparent; position: relative;
            min-width: 80px; user-select: none; flex-shrink: 0; transition: background 0.15s;
            box-sizing: border-box;
        }
        .country-code-dropdown:hover { background: rgba(0,0,0,0.03); }
        .selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { transition: transform 0.25s ease; color: var(--gray-400); flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { transform: rotate(180deg); }

        /* Country Dropdown List */
        .country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
        .country-code-dropdown.open .country-dropdown-list { display: flex; }
        .country-search-input {
            width: 100%; padding: 11px 14px; border: none; border-bottom: 1px solid var(--gray-200);
            font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
            background: var(--gray-50); outline: none;
        }
        .country-search-input::placeholder { color: var(--gray-400); }
        .country-options { overflow-y: auto; max-height: 260px; scrollbar-width: thin; }
        .country-options::-webkit-scrollbar { width: 5px; }
        .country-options::-webkit-scrollbar-track { background: transparent; }
        .country-options::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 10px; }
        .country-option {
            display: flex; align-items: center; gap: 10px; padding: 10px 14px; cursor: pointer;
            transition: background 0.12s ease; font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
        }
        .country-option:hover, .country-option.active { background: var(--orange-lighter); }
        .country-option .flag-emoji { font-size: 18px; line-height: 1; width: 24px; text-align: center; }
        .country-option .country-name { flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 500; }
        .country-option .dial-code { color: var(--text-muted); font-weight: 600; font-size: 12px; flex-shrink: 0; }

        /* Phone Input Override */
        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }

        /* Submit Button */
        .btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:active { transform: translateY(0); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; box-shadow: none; }

        /* Form Footer */
        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }

        /* Error States */
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }

        /* Success State */
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { width: 64px; height: 64px; background: rgba(16,185,129,0.12); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
        .form-success h3 { font-size: 22px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .form-success p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }

        @media (max-width: 480px) {
            .form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; }
            .form-title { font-size: 20px; }
            .country-dropdown-list { width: 260px; }
            .form-footer { flex-wrap: wrap; gap: 10px; }
            .btn-submit { font-size: 16px; padding: 14px 20px; }
        }

        /* ============================================
           STATS BAR
           ============================================ */
        .stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 32px; }
        .stats-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap;
        }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md);
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
        .stat-label { font-size: 12px; color: var(--text-muted); }
        .certifications {
            display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200);
        }
        .cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
        .cert-item svg { width: 18px; height: 18px; }

        /* ============================================
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
        .toc-container {
            max-width: 1320px; margin: 0 auto; padding: 0 32px;
            display: flex; align-items: center;
        }
        .toc-wrapper {
            display: flex; align-items: center; gap: 10px;
            overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px;
        }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-pill {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
        .toc-pill:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-pill.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-pill.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
        .toc-arrow {
            border: none; cursor: pointer; font-size: 22px;
            width: 45px; height: 45px; border-radius: 50%; background: transparent;
        }
        .toc-arrow.left { margin-right: 8px; }
        .toc-arrow.right { margin-left: 8px; }

        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1320px; margin: 0 auto; }
        .section-container { max-width: 1320px; margin: 0 auto; }
        .text-content { max-width: 100%; }

        .section-title {
            font-size: clamp(26px, 3vw, 32px); font-weight: 800;
            color: var(--blue); margin-bottom: 24px; line-height: 1.25;
        }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: left; }
        .content-text p { margin-bottom: 16px; text-align: left; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }
        .content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }

        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { max-width: 100%; }
        .column-image { display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 24px; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: left; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .illustration-placeholder {
            width: 100%; max-width: 420px; aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 24px; position: relative; overflow: hidden;
        }
        .illustration-icon {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
        }
        .illustration-icon svg { width: 100%; height: 100%; color: var(--blue); }
        .illustration-badge {
            background: var(--white); padding: 12px 20px; border-radius: var(--radius-md);
            box-shadow: var(--shadow-md); text-align: center;
        }
        .illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }

        /* Section Eyebrow */
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }

        /* Steps Section */
        .steps-section { padding: 72px 32px; background: var(--gray-50); }
        .steps-container { display: flex; flex-direction: column; gap: 32px; }
        .step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;
            background: var(--white); border-radius: var(--radius-xl); padding: 40px;
            border: 1px solid var(--gray-200); transition: all 0.3s ease;
        }
        .step-card:hover { box-shadow: var(--shadow-lg); border-color: var(--gray-300); }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { display: flex; flex-direction: column; }
        .step-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--orange); color: var(--white);
            padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content;
        }
        .step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
        .step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; text-align: left; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted);
        }
        .highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
        .step-visual { display: flex; justify-content: center; align-items: center; }
        .step-illustration {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 20px; position: relative; overflow: hidden;
        }
        .step-illustration .illustration-icon {
            width: 100%; max-width: 180px; aspect-ratio: 1; margin-bottom: 8px;
            background: none; box-shadow: none;
        }
        .step-illustration .illustration-icon svg { width: 100%; height: 100%; }
        .illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
        .step-number-large {
            position: absolute; bottom: 16px; right: 20px;
            font-size: 64px; font-weight: 800; color: rgba(27,54,93,0.06); line-height: 1;
        }

        /* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
        .process-screenshot-details summary {
            font-size: 13px; font-weight: 600; color: var(--orange); cursor: pointer;
            display: inline-flex; align-items: center; gap: 6px;
        }
        .process-screenshot-details summary:hover { color: var(--orange-dark); }
        .process-screenshot-details .screenshot-img {
            max-width: 100%; border-radius: 8px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm); margin-top: 10px;
        }
        .process-screenshot-details .screenshot-note {
            font-size: 11px; color: var(--text-muted); margin-top: 6px;
        }

        /* Why Choose Section */
        .why-choose-section { padding: 72px 32px; background: var(--gray-50); }
        .why-choose-header { text-align: center; margin-bottom: 48px; }
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease;
        }
        .feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .feature-icon {
            width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center; margin-bottom: 18px;
        }
        .feature-icon svg { width: 26px; height: 26px; color: var(--orange); }
        .feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .feature-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; text-align: left; }

        /* Reviews CTA */
        .reviews-cta {
            margin-top: 40px; padding: 28px 32px; background: var(--blue);
            border-radius: var(--radius-lg); display: flex;
            align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;
        }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon {
            width: 48px; height: 48px; background: rgba(255,255,255,0.1);
            border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;
        }
        .reviews-cta-icon svg { width: 24px; height: 24px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 18px; font-weight: 700; color: #FFFFFF !important; margin-bottom: 2px; margin-top: 0; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-cta:hover { background: var(--orange-light); color: var(--orange); }
        .btn-cta svg { width: 16px; height: 16px; }        @media (max-width: 640px) {        }

        /* ============================================
           CITY & CROSS-SELL GRID CARDS
           ============================================ */
        .pa-city-block { }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 6px; }
        .pa-block-sub   { font-size: 14px; color: var(--text-muted); margin-bottom: 16px; }
        .pa-city-grid, .pa-cross-grid { display: grid; gap: 12px; max-width: 1100px; }
        .pa-city-grid  { grid-template-columns: repeat(4, 1fr); }
        .pa-cross-grid { grid-template-columns: repeat(3, 1fr); }
        .pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 10px;
            padding: 14px 16px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            text-decoration: none; transition: all 0.25s ease;
        }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: 0 4px 16px rgba(232,113,44,0.12); transform: translateY(-2px); }
        .pa-card-icon {
            width: 32px; height: 32px; background: var(--orange-light);
            border-radius: var(--radius-sm); display: flex; align-items: center;
            justify-content: center; flex-shrink: 0;
        }
        .pa-card-title  { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub    { font-size: 11px; color: var(--text-muted); }
        @media (max-width: 768px) {
            .pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
            .pa-cross-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 480px) {
            .pa-city-grid  { grid-template-columns: 1fr; }
            .pa-cross-grid { grid-template-columns: 1fr; }
        }
        .testimonials-section {
            padding: 24px 32px 0 32px;
            background: var(--white);
            overflow: hidden;
        }
        .testimonials-section .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }
        .testimonials-section .section-header {
            text-align: center;
            margin-bottom: 16px;
        }
        .testimonials-section .section-header h2 {
            font-size: clamp(26px, 3.5vw, 34px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 10px;
        }
        .testimonials-section .section-header p {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* Slick overrides */
        .testimonial-slider .slick-slide { padding: 0 10px; }
        .testimonial-slider .slick-list { margin: 0 -10px; overflow: hidden; }
        .testimonial-slider .slick-dots { bottom: -40px; }
        .testimonial-slider .slick-dots li button:before { font-size: 10px; color: var(--gray-300); opacity: 1; }
        .testimonial-slider .slick-dots li.slick-active button:before { color: var(--orange); }
        .testimonial-slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
        .testimonial-slider .slick-track { display: flex !important; }
        .testimonial-slider.slick-initialized { margin-bottom: 0; }

        /* Video Testimonial Card */
        .testi-video-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            overflow: hidden;
            height: 340px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }
        .testi-video-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-video-area {
            position: relative;
            height: 230px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
        }
        .testi-video-area video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .testi-play-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.25);
            transition: opacity 0.3s;
            pointer-events: none;
        }
        .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .testi-play-btn {
            width: 56px;
            height: 56px;
            background: rgba(232,113,44,0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .testi-play-btn svg { width: 22px; height: 22px; color: white; margin-left: 3px; }
        .testi-star-badge {
            position: absolute;
            bottom: 12px;
            left: 12px;
            display: flex;
            gap: 2px;
        }
        .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }

        /* Quote Testimonial Card */
        .testi-quote-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            height: 340px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.25s ease;
        }
        .testi-quote-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-quote-icon { color: var(--orange); opacity: 0.25; margin-bottom: 8px; }
        .testi-quote-icon svg { width: 24px; height: 24px; }
        .testi-quote-text {
            font-size: 14px;
            line-height: 1.65;
            color: var(--text-secondary);
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .testi-footer {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }
        .testi-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .testi-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--white);
            flex-shrink: 0;
            overflow: hidden;
            background: var(--orange);
        }
        .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .testi-avatar.blue { background: var(--blue); }
        .testi-avatar.teal { background: #0D9488; }
        .testi-avatar.purple { background: #7C3AED; }
        .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary); line-height: 1.2; }
        .testi-role { font-size: 12px; color: var(--text-muted); }
        .testi-rating-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .testi-stars { display: flex; gap: 1px; }
        .testi-stars svg { width: 12px; height: 12px; fill: var(--gold); color: var(--gold); }
        .testi-google-badge { width: 22px; height: 22px; }
        .testi-google-badge img { width: 100%; height: 100%; }

        /* Loading state */
        .testi-loading {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 0;
            color: var(--text-muted);
            font-size: 14px;
        }
        .testi-loading .spinner {
            width: 32px;
            height: 32px;
            border: 3px solid var(--gray-200);
            border-top-color: var(--orange);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        @media (max-width: 768px) {
            .testimonials-section { padding: 16px 20px 0 20px; }
        }
        @media (max-width: 576px) {

        }

        

        @media (max-width: 1024px) {
        }
        @media (max-width: 768px) {

        }
        @media (max-width: 480px) {


        }
        @media (max-width: 768px) {

        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .two-column { grid-template-columns: 1fr; gap: 40px; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-container { gap: 32px; }
            .certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }
        }
        @media (max-width: 900px) {
            .step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
            .step-card:nth-child(even) { direction: ltr; }
            .step-visual { order: -1; }
        }
        @media (max-width: 768px) {
            .content-section { padding: 40px 16px; }
            .hero-cta { flex-direction: column; }
            .btn-video, .btn-sample { width: 100%; justify-content: center; }
            .stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
            .stat-item { width: 100%; }
            .features-grid { grid-template-columns: 1fr; gap: 16px; }
            .reviews-cta { flex-direction: column; text-align: center; }
            .reviews-cta-content { flex-direction: column; }
            .content-text { font-size: 14px; }
            .accordion-body { text-align: left; }
            main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; }
            main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; }
            .table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); }
            .col-lg-4 { margin-top: 24px; }
            .form-card { max-width: 100%; }
            .private-registration-heading { margin-bottom: 1rem !important; }
            .benefit-paragraph { font-size: 0.9rem; }
            .hero-badge { font-size: 12px; padding: 6px 12px; }
            .expert-attribution-box { padding: 10px 14px; }
            .expert-attribution-box .eab-title { font-size: 12px; }
            .expert-attribution-box .eab-meta { font-size: 11px; }
            .trust-section { gap: 12px; }
            .trust-row { gap: 16px; }
            .google-rating { width: 100%; }
            section ul li:not(.nav-item) { font-size: 14px; }
        }

        /* Smooth scroll offset */
        .content-section[id] { scroll-margin-top: 80px; }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    
        /* Trust Badge Descriptions */
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }

        /* City Interlinking Grid */
        @media (max-width: 768px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }
        }
        @media (max-width: 480px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }
        }

        /* ============================================
           STICKY WHATSAPP BAR
           ============================================ */
        .wa-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #25D366;
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
            padding: 8px 22px; background: #fff; color: #25D366;
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            border: none; border-radius: 50px; cursor: pointer;
            text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
        }
        .wa-sticky-bar-btn:hover { background: #f0fdf4; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
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
            .wa-sticky-bar-btn::before { content: 'Join Community'; }
            .wa-sticky-bar-btn span { display: none; }
        }
</style>
<main>



<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        GST Refund for Ecommerce Exporters
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team · Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GSTIN, IEC, AD code, regular shipping bill or CSB-V, GSTR-1 Table 6A, GSTR-3B, BRC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Refund filing starts at Rs 10,999 plus GST per claim cycle (LUT at Rs 4,999)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Indian online seller shipping abroad via marketplace, courier, or India Post Foreign Post Office</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> IGST refund auto-processed within 7 to 15 days; LUT-route ITC refund within 30 to 60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of E-commerce Exporter and GST Compliance Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Ecommerce%20Exporters%20-%20Amazon%20Global%20Selling%2C%20Etsy%2C%20eBay%2C%20Shopify%2C%20or%20courier%20mode." target="_blank" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA & CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars">
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <span class="rating-score">4.9</span>
                                </div>
                                <span class="rating-count">Based on 500+ reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card" id="consultationFormCard">
                    <div class="form-header">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <p class="form-subtitle">Talk to a CA/CS expert today</p>
                    </div>

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                    <form id='BiginWebToRecordForm208810000001209168'
                          name='BiginWebToRecordForm208810000001209168'
                          action='https://bigin.zoho.in/crm/WebToRecordForm'
                          method='POST'
                          enctype='multipart/form-data'
                          target='hidden208810000001209168Frame'
                          onSubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() && checkMandatory208810000001209168()'
                          accept-charset='UTF-8'>

                        <input type='text' style='display:none;' name='xnQsjsdp' value='e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'/>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                        <input type='text' style='display:none;' name='xmIwtLD' value='2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843'/>
                        <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
                        <input type='hidden' name='rmsg' id='rmsg' value='true'/>
                        <input type='text' style='display:none;' name='returnURL' value='null' />
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Ecommerce Exporter Refund'/>
                        <input type='hidden' name='Pipeline' value='Sales Pipeline Standard'/>
                        <input type='hidden' name='Stage' value='Qualification'/>
                        <input type='hidden' name='Contacts.Lead Source' id='pageSourceField' value=''/>

                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input name='Contacts.Last Name' id='consultFullName' type='text' maxlength='80'
                                   class='form-input' placeholder='Your name' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-group" id="phoneGroup">
                                <div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
                                    <span class="selected-flag" id="selectedFlag">&#127470;&#127475;</span>
                                    <span class="selected-code" id="selectedCode">+91</span>
                                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                                    <div class="country-dropdown-list" id="countryDropdownList">
                                        <input type="text" class="country-search-input" id="countrySearchInput"
                                               placeholder="Search country..." onclick="event.stopPropagation()" oninput="filterCountries(this.value)"/>
                                        <div class="country-options" id="countryOptions"></div>
                                    </div>
                                </div>
                                <input type='text' class='form-input phone-input' id='phoneNumberInput' maxlength='15'
                                       placeholder='Enter phone number'
                                       oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";'
                                       onblur='validatePhoneOnBlur(this)'/>
                                <div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
                            </div>
                            <input type='hidden' name='Contacts.Mobile' id='combinedMobileField' value=''/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input name='Contacts.Mailing City' id='consultCity' type='text' maxlength='100'
                                   class='form-input' placeholder='Enter your city' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled selected>Select a service</option>
                                <option value="gst-refund-for-ecommerce-exporters" selected>Ecommerce Exporter Refund</option>
                                <option value="gst-refund">GST Refund</option>
                                <option value="gstat-appeal-exporters">GSTAT Appeal - Exporters</option>
                                <option value="gstat-appeal-filing">GSTAT Appeal Filing</option>
                                <option value="gst-registration">GST Registration</option>
                                <option value="gst-returns">GST Returns</option>
                                <option value="gst-annual-returns">GST Annual Returns</option>
                                <option value="gst-audit">GST Audit</option>
                                <option value="other">Other</option>

                            </select>
                        </div>

                        <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote &rarr;</button>
                    </form>

                    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

                    <div class="form-footer">
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            Quick Response
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron recovered Rs 87 lakh in CSB-V courier IGST refunds for our Amazon Global Selling and Etsy handicraft business across 18 cycles. Mean disbursal time of 12 days. The Table 9A amendments for our SB005 errors cleared all stuck refunds cleanly.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rakesh Kapoor</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder / Jaipur Handicraft Amazon Global Selling Brand</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. Patron set up our AD code registration and CSB-V courier workflow with DHL Express. First IGST refund hit our bank in 11 days from ECCS upload. Game changer for our Etsy storefront.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director / Etsy Apparel Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had been treating Amazon's 1 percent TCS as export refund blockage for months. Patron explained Section 52 only applies to domestic sales and helped us separate the lines. Refunds that were stuck for 6 months cleared in the next cycle.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO / D2C Apparel Brand</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">SB006 EGM not filed kept blocking our regular SB shipments at JNPT. Patron coordinated with our shipping line for supplementary EGM filing and got all 14 stuck SBs cleared in 28 days. Recovered Rs 38 lakh that we had written off.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Logistics / Gems and Jewellery eBay Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">PFMS bank validation failed three times because our IFSC changed after a bank merger. Patron coordinated with the gateway port officer to update the bank details in ICES and re-ran the failed-after-success procedure. Rs 24 lakh credited in 14 days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anita Gaur</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head / Shopify D2C Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From AD code registration through to ICEGATE SB error remediation via Table 9A amendment - Patron handles the full dual-mode e-commerce export refund pipeline with CA-led marketplace settlement reconciliation and PFMS disbursal tracking.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#overview-section" class="toc-pill">Overview</a>
                <a href="#what-section" class="toc-pill">What Is Ecommerce Refund</a>
                <a href="#who-section" class="toc-pill">Who Needs This</a>
                <a href="#services-section" class="toc-pill">What We Deliver</a>
                <a href="#procedure-section" class="toc-pill">8 Sequential Steps</a>
                <a href="#documents-section" class="toc-pill">Documents Required</a>
                <a href="#challenges-section" class="toc-pill">Challenges and Solutions</a>
                <a href="#fees-section" class="toc-pill">Fees and Pricing</a>
                <a href="#timeline-section" class="toc-pill">Timeline</a>
                <a href="#benefits-section" class="toc-pill">Why CA-Led</a>
                <a href="#comparison-section" class="toc-pill">3 Refund Routes</a>
                <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Ecommerce Exporter GST Refund Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Ecommerce Exporter Refund Services at a Glance</strong></p>
                    <p>Indian e-commerce exporters shipping through Amazon Global Selling, Etsy, eBay, Shopify, or directly via courier and India Post recover GST through two parallel routes: regular EDI shipping bill exports through ports or ICDs with auto-IGST refund via ICEGATE, and CSB-V courier mode exports through ECCS with the same IGST auto-refund mechanism for shipments up to Rs 10 lakh. LUT-route refund of accumulated ITC is also available under Form GST RFD-01.</p>
                </div>
                <p>GST refund for e-commerce exporters is the recovery of integrated tax paid or accumulated input tax credit on goods shipped from India to foreign customers via online marketplaces, fulfilment platforms, or courier services. The framework rests on Section 16 of the IGST Act 2017 (zero-rated supply), the second proviso to which permits two refund routes: pay IGST and receive auto-credit through ICEGATE-PFMS, or export under LUT and claim accumulated ITC under Form GST RFD-01.</p>
                <p>For courier-mode exports, the Express Cargo Clearance System (ECCS) and Courier Shipping Bill V (CSB-V) form the operational backbone covering shipments up to Rs 10 lakh per consignment. Patron Accounting LLP has filed e-commerce export refund cycles for sellers across Amazon Global Selling, Etsy, eBay, Shopify, India Post EMS, DHL, FedEx, and Aramex since the GST rollout on 1 July 2017. With the omission of Rule 96(10) by Notification 20/2024-CT from 8 October 2024 and CBIC Instruction 6/2025 extending 90 percent provisional refund to broader categories, the refund landscape has materially improved for online sellers.<div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Acts</td><td>IGST Act 2017 (Section 16), CGST Act 2017 (Section 54), Customs Act 1962, Courier Regulations 2010</td></tr>
                            <tr><td>Applicable To</td><td>Indian online sellers exporting goods through marketplaces, courier mode, or India Post</td></tr>
                            <tr><td>Refund Routes</td><td>IGST-paid (auto-refund via ICEGATE) or LUT route (Rule 89 accumulated ITC via RFD-01)</td></tr>
                            <tr><td>Cost</td><td>Patron Accounting fees from Rs 10,999 per refund cycle; govt fee nil</td></tr>
                            <tr><td>Penalty for SB / GSTR-1 Mismatch</td><td>Refund stuck at SB001/SB003/SB005/SB006 ICEGATE error; needs Table 9A amendment</td></tr>
                            <tr><td>Form / Portal</td><td>Regular shipping bill or CSB-V on ECCS; Form GST RFD-01 on gst.gov.in for LUT route</td></tr>
                            <tr><td>Authority</td><td>Customs at gateway port plus jurisdictional GST officer plus PFMS for disbursal</td></tr>
                        </tbody>
                    </table>
                </div></p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is GST Refund for Ecommerce Exporters</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund for e-commerce exporters is the statutory recovery of unutilised input tax credit or integrated tax paid on goods shipped out of India by an Indian online seller using a marketplace, fulfilment platform, or courier mode. The legal basis is Section 16 of the IGST Act 2017, which classifies export of goods as a zero-rated supply alongside SEZ supplies, with refund available either as IGST paid (auto-refund through ICEGATE) or as accumulated ITC under LUT (manual application via Form GST RFD-01).</p>
                    <p>Procedural mechanics flow from Section 54 of the CGST Act 2017, Rule 89 and Rule 96 of the CGST Rules 2017, and the Courier Imports and Exports (Electronic Declaration and Processing) Regulations 2010 as amended. Section 24(ix) of the CGST Act makes GST registration mandatory for any seller making supplies through an electronic commerce operator like Amazon, Flipkart, Etsy, or eBay, regardless of aggregate turnover thresholds.</p>
                    <p>For primary source materials see the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://www.icegate.gov.in" target="_blank" rel="noopener">ICEGATE Customs portal</a>, <a href="https://eccs.cbic.gov.in" target="_blank" rel="noopener">ECCS portal</a>, <a href="https://courier.cbic.gov.in" target="_blank" rel="noopener">CBIC Courier Regulations</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>
                    <h3 style="margin-top:24px;">Three Refund Routes at a Glance</h3>
                    <div class="table-responsive-wrapper">
                        <table>
                            <thead><tr><th>Route</th><th>Mode</th><th>Filing Platform</th><th>Typical Turnaround</th></tr></thead>
                            <tbody>
                                <tr><td>Route A - Regular SB (IGST-Paid)</td><td>Cargo via port or ICD; EDI shipping bill</td><td>ICEGATE EDI</td><td>7 to 15 days post-EGM via ICEGATE-PFMS</td></tr>
                                <tr><td>Route B - CSB-V Courier (IGST-Paid)</td><td>Air courier through Authorised Courier; up to Rs 10 lakh per consignment</td><td>ECCS at 9 international courier terminals</td><td>10 to 21 days post-ECCS upload via ECCS-ICES-PFMS</td></tr>
                                <tr><td>Route C - LUT Route (Accumulated ITC)</td><td>Either mode; tax-mode choice</td><td>GST portal Form RFD-01</td><td>30 to 60 days; provisional 90 percent in 7 days</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Ecommerce Exporter Refund:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;">
                        <table>
                            <thead><tr><th>Term</th><th>Plain Meaning</th></tr></thead>
                            <tbody>
                                <tr><td>E-commerce Export</td><td>Outbound shipment of goods by an Indian online seller to a foreign customer through marketplace, fulfilment platform, or courier</td></tr>
                                <tr><td>Regular Shipping Bill</td><td>EDI shipping bill filed at port or ICD via ICEGATE under Customs Act 1962; used for larger commercial cargo</td></tr>
                                <tr><td>CSB-V (Form HA)</td><td>Courier Shipping Bill V under Courier Regulations 2010 for commercial courier exports up to Rs 10 lakh per consignment</td></tr>
                                <tr><td>CSB-IV (Form H)</td><td>Courier Shipping Bill IV for bona fide gifts, samples, and prototypes up to Rs 25,000; not eligible for IGST refund</td></tr>
                                <tr><td>ECCS</td><td>Express Cargo Clearance System - CBIC's electronic platform at 9 international courier terminals for CSB filing and clearance</td></tr>
                                <tr><td>ICEGATE</td><td>Indian Customs EDI Gateway - central portal for shipping bill filing, refund tracking, and validation against GSTR-1 data</td></tr>
                                <tr><td>ICES</td><td>Indian Customs EDI System - back-end matching engine validating SB data against GSTN transmission</td></tr>
                                <tr><td>PFMS</td><td>Public Financial Management System - Government of India platform that disburses IGST refunds to exporter bank accounts</td></tr>
                                <tr><td>AD Code</td><td>Authorised Dealer Code - one-time ICEGATE linkage between exporter bank account and Customs for PFMS-based refund disbursal</td></tr>
                                <tr><td>TCS (Section 52 CGST)</td><td>Tax Collected at Source at 1 percent (0.5 percent CGST plus 0.5 percent SGST) by ECO on net taxable domestic supplies; NOT applicable to exports</td></tr>
                                <tr><td>SB Error Codes</td><td>ICEGATE response codes SB000 (success) through SB006 indicating match status of SB vs GSTR-1 data</td></tr>
                                <tr><td>Authorised Courier</td><td>Courier registered with Customs under Regulation 12 for CSB filing on ECCS (DHL, FedEx, Aramex, Blue Dart, India Post and 84 others as of January 2026)</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="40" y="50" width="120" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Roof / Pediment -->
                            <path d="M30 52L100 15L170 52" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <!-- Columns -->
                            <rect x="55" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="112" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="137" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="88" y="105" width="24" height="35" rx="12" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="1"/>
                            <!-- Scale of Justice icon -->
                            <circle cx="100" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="100" y1="70" x2="100" y2="86" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="90" y1="76" x2="110" y2="76" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"/>
                            <path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Ecommerce Exporter Refund</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Routes</span>
                        <strong>Regular SB + CSB-V + LUT</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs This Service - 5 Seller Profiles</h2>
            <div class="content-text">
                
                <p>The service applies to any Indian online seller shipping goods abroad - whether through international marketplaces, fulfilment platforms, or direct courier. Both regular EDI shipping-bill exports and CSB-V courier-mode exports are covered.</p>
                <ul>
                    <li>Amazon Global Selling sellers using FBA Export, MFN, or Easy Ship to ship to amazon.com, amazon.co.uk, amazon.de, and other marketplaces</li>
                    <li>Etsy, eBay, and Shopify Indian sellers shipping to international buyers via DHL, FedEx, Aramex, or India Post EMS</li>
                    <li>Direct-to-consumer (D2C) brands selling to foreign customers from their own .com or .in storefronts</li>
                    <li>Handloom, handicraft, gems and jewellery, and apparel exporters with low-ticket high-volume courier shipments</li>
                    <li>MSME exporters above the Rs 5 lakh aggregate annual export turnover where regular SB filing becomes economical</li>
                </ul>
                <p style="margin-top:16px;"><strong>Threshold and pre-condition:</strong> GST registration is mandatory for any seller using an e-commerce operator under Section 24(ix) CGST Act, irrespective of turnover. The Rs 20 lakh and Rs 40 lakh threshold exemptions do not apply. If the seller is not registered, complete <a href="/gst-registration/">GST registration</a> before listing on any marketplace. IEC code is mandatory for both regular SB exports and CSB-V courier exports. AD code registration with ICEGATE is a one-time pre-condition for IGST refund disbursal via PFMS.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Accounting Delivers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Two-Mode Strategy Mapping (Regular SB vs CSB-V)</td><td>Decide route per shipment - regular EDI SB at port or CSB-V courier on ECCS - based on shipment value (Rs 10 lakh cap for CSB-V), frequency, destination, and cost economics. Documented decision memo.</td></tr>
                        <tr><td>LUT Filing (Form GST RFD-11)</td><td>Annual LUT preparation, witness arrangement, online furnishing on gst.gov.in, ARN tracking, and Notification 37/2017-CT prosecution eligibility check.</td></tr>
                        <tr><td>Regular SB IGST Auto-Refund (Route A)</td><td>GSTR-1 Table 6A reconciliation with EDI SB on ICEGATE, GSTR-3B Table 3.1(b) match, EGM follow-up at gateway port, PFMS scroll tracking.</td></tr>
                        <tr><td>CSB-V Courier IGST Refund (Route B)</td><td>ECCS data flow check, Manual SB upload by Authorised Courier, ICES IGST_VFN role processing, PFMS disbursal tracking.</td></tr>
                        <tr><td>LUT Route Refund (Route C - RFD-01)</td><td>Statement 3 with invoice-shipping-bill mapping for accumulated ITC refund where IGST not paid upfront; Net ITC computation under Rule 89(4).</td></tr>
                        <tr><td>ICEGATE Error Remediation</td><td>SB001 (SB number mismatch), SB003 (GSTIN mismatch), SB005 (invalid invoice details), SB006 (EGM not filed) fix via Table 9A amendment; PFMS bank validation correction; AD-code registration.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">Refund Procedure (8 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The e-commerce export refund cycle runs through 8 sequential steps. Each step is anchored to a specific section, rule, or notification under Indian law so finance and tax teams can audit each handoff.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Confirm GSTIN, IEC, and AD-Code Registration</h3>
                    <p class="step-description">Confirm GSTIN under Section 24(ix) CGST Act (mandatory for online sellers regardless of turnover). Confirm IEC code from DGFT. Confirm AD code one-time registration with ICEGATE that links exporter bank account to Customs for PFMS-based refund disbursal. (1 to 2 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN under Section 24(ix)</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IEC from DGFT</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AD Code on ICEGATE</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="42" height="35" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="36" y="30" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTIN</text><text x="36" y="42" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Section 24(ix)</text><rect x="63" y="15" width="42" height="35" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="84" y="30" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">IEC</text><text x="84" y="42" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">DGFT</text><rect x="15" y="55" width="90" height="30" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="73" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">AD Code on ICEGATE</text></svg>
                        </div>
                        <span class="illustration-label">Pre-Conditions</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Choose Route per Shipment (Regular SB or CSB-V)</h3>
                    <p class="step-description">Choose route per shipment: regular EDI shipping bill at port or ICD for cargo above Rs 10 lakh, or CSB-V courier shipping bill (Form HA) through ECCS for shipments up to Rs 10 lakh under Courier Imports and Exports Regulations 2010. Documented decision memo. (Per shipment.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regular SB - no value cap</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSB-V - Rs 10 lakh cap</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Courier Regulations 2010</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="48" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="34" y="38" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Regular SB</text><text x="34" y="52" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">Port / ICD</text><text x="34" y="64" font-size="7" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">No cap</text><rect x="62" y="20" width="48" height="55" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="86" y="38" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">CSB-V</text><text x="86" y="52" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">ECCS courier</text><text x="86" y="64" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">Rs 10L cap</text></svg>
                        </div>
                        <span class="illustration-label">Route Decision</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Choose Tax Mode (IGST-Paid or LUT)</h3>
                    <p class="step-description">Choose tax mode: pay IGST upfront and receive auto-refund via ICEGATE-PFMS under Rule 96, or export under LUT (Form RFD-11) without IGST and claim accumulated ITC via Form GST RFD-01 under Rule 89. Section 16(3) IGST Act gives both options. (Per refund cycle.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IGST-paid auto-refund</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT route ITC refund</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 16(3) IGST Act</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="20" width="48" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="34" y="38" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">IGST Paid</text><text x="34" y="50" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Auto-refund</text><text x="34" y="60" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Rule 96</text><rect x="62" y="20" width="48" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="86" y="38" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">LUT</text><text x="86" y="50" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">RFD-01</text><text x="86" y="60" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Rule 89</text></svg>
                        </div>
                        <span class="illustration-label">Tax Mode Choice</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Issue Tax Invoice With Export Declaration</h3>
                    <p class="step-description">Issue tax invoice with export declaration: 'SUPPLY MEANT FOR EXPORT WITH PAYMENT OF INTEGRATED TAX' or 'SUPPLY MEANT FOR EXPORT UNDER LUT WITHOUT PAYMENT OF INTEGRATED TAX' per Rule 46 CGST Rules. Include HSN code, IEC, AD code, and invoice value in convertible foreign exchange. (Per invoice.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Export declaration on invoice</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN + IEC + AD code</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FX value (USD / EUR / GBP)</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Tax Invoice</text><line x1="25" y1="38" x2="95" y2="38" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">HSN + IEC + AD Code</text><text x="60" y="60" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">FX Value</text><text x="60" y="72" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Rule 46 CGST</text></svg>
                        </div>
                        <span class="illustration-label">Invoice Issued</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">File Regular SB on ICEGATE or CSB-V on ECCS</h3>
                    <p class="step-description">File regular SB on ICEGATE or hand over to Authorised Courier who files CSB-V on ECCS at 9 international courier terminals. From 1 March 2024, Electronic Cash Ledger (ECL) is mandatory for any courier-mode duty payment per CBIC notice. (Same day as export.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICEGATE for regular SB</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ECCS for CSB-V courier</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ECL mandate from 1 Mar 2024</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="48" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="34" y="32" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">ICEGATE</text><text x="34" y="46" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Regular SB</text><text x="34" y="60" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">EDI port</text><rect x="62" y="15" width="48" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="86" y="32" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">ECCS</text><text x="86" y="46" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">CSB-V</text><text x="86" y="60" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">9 terminals</text></svg>
                        </div>
                        <span class="illustration-label">SB Filed</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">File GSTR-1 Table 6A and GSTR-3B Table 3.1(b)</h3>
                    <p class="step-description">File GSTR-1 reflecting exports in Table 6A and GSTR-3B with Table 3.1(b) for IGST paid on outward supplies. Common error: reporting export IGST in Table 3.1(a) instead of 3.1(b) blocks ICEGATE transmission. Cross-validate with shipping bill data. (By 11th and 20th of following month.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 6A for exports</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 3.1(b) IGST zero-rated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTN to ICES transmission</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="48" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="34" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="34" y="45" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Table 6A</text><text x="34" y="56" font-size="6" fill="#F5A623" text-anchor="middle" font-family="Arial">Exports</text><rect x="62" y="15" width="48" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="86" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-3B</text><text x="86" y="45" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Table 3.1(b)</text><text x="86" y="56" font-size="6" fill="#F5A623" text-anchor="middle" font-family="Arial">Zero-rated</text></svg>
                        </div>
                        <span class="illustration-label">Returns Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Track ICEGATE Status and Resolve SB Errors</h3>
                    <p class="step-description">Track ICEGATE refund status via the IGST Refund Status tracker under NewMIS role. Resolve any error code: SB001 (invalid SB number), SB003 (GSTIN mismatch), SB005 (invalid invoice details), SB006 (EGM not filed) by amending GSTR-1 via Table 9A in the next return. (5 to 30 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IGST Refund Status tracker</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 9A amendment</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SB001-SB006 remediation</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="65" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="32" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">SB Errors</text><rect x="22" y="40" width="22" height="18" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="33" y="52" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">SB001</text><rect x="48" y="40" width="22" height="18" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="59" y="52" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">SB003</text><rect x="74" y="40" width="22" height="18" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="85" y="52" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">SB005</text><text x="60" y="72" font-size="7" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Table 9A fix</text></svg>
                        </div>
                        <span class="illustration-label">Error Remediation</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Receive Refund Disbursal via PFMS</h3>
                    <p class="step-description">Receive refund disbursal: IGST auto-refund credited to bank account through PFMS within 7 to 15 days for regular SB exports, 10 to 21 days for CSB-V courier cycles. For LUT route, provisional 90 percent within 7 days under Section 54(6); final RFD-06 within 60 days under Section 54(7). (7 to 60 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PFMS bank credit</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regular SB 7-15 days</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSB-V 10-21 days; LUT 30-60 days</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><text x="60" y="35" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">PFMS</text><text x="60" y="50" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Bank Credit</text><circle cx="60" cy="60" r="6" fill="#25D366"/><path d="M57 60l2 2 4-4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" fill="none"/><text x="60" y="90" font-size="9" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">7-21 days</text></svg>
                        </div>
                        <span class="illustration-label">Refund Credited</span>
                        <span class="step-number-large">08</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Ecommerce Exporter Refund</h2>
            <div class="content-text">
                
                <ul>
                    <li>GSTIN certificate of the e-commerce seller (Section 24(ix) mandatory registration)</li>
                    <li>Importer-Exporter Code certificate from DGFT (new exporters can complete IEC registration before listing on any cross-border marketplace)</li>
                    <li>AD code registration with ICEGATE (one-time submission linking bank account to Customs for PFMS)</li>
                    <li>Active LUT acknowledgement in Form GST RFD-11 if exporting without IGST payment</li>
                    <li>Regular shipping bill (EDI at port or ICD) or CSB-V courier shipping bill (Form HA) from the Authorised Courier</li>
                    <li>Tax invoice carrying export declaration with HSN, IEC, AD code, and FX value (Rule 46 CGST Rules)</li>
                    <li>Export General Manifest (EGM) confirmation for regular SB; ECCS file confirmation for CSB-V</li>
                    <li>Bank Realisation Certificate (BRC) or e-BRC for payment realised within the 9-month FEMA window</li>
                    <li>Marketplace order report (Amazon settlement, Etsy CSV, eBay seller hub export) for invoice mapping</li>
                    <li>GSTR-1 (Table 6A) plus GSTR-3B (Table 3.1(b)) for the refund period</li>
                    <li>PFMS bank account validation for IGST auto-refund disbursal</li>
                </ul>
                <h3 style="margin-top:24px;">Worked Example - Jaipur Handicraft Seller on Amazon Global Selling + Etsy</h3>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Stage</th><th>Amount / Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Refund period</td><td>FY 2024-25 + FY 2025-26 (18 monthly cycles)</td></tr>
                            <tr><td>Marketplace mix</td><td>Amazon Global Selling 62 percent, Etsy 28 percent, Shopify 10 percent</td></tr>
                            <tr><td>Total IGST refund across cycles (CSB-V courier auto-refund)</td><td>Rs 87,00,000</td></tr>
                            <tr><td>Average shipment value (well within CSB-V Rs 10 lakh cap)</td><td>Rs 6,500 per order</td></tr>
                            <tr><td>Authorised Couriers used</td><td>DHL Express, FedEx, India Post EMS</td></tr>
                            <tr><td>Mean disbursal time per cycle (PFMS bank credit)</td><td>12 days from ECCS upload</td></tr>
                            <tr><td>SB error remediation cycles (Table 9A amendments)</td><td>4 across 18 months (2 SB005, 1 SB001, 1 SB003)</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Ecommerce Exporter Refund Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ICEGATE refund stuck at SB001 (SB number mismatch)</td><td>Invoice number, SB number, or port code declared in GSTR-1 Table 6A does not match the shipping bill on ICEGATE; refund scroll blocked</td><td>Patron pulls invoice details from GSTR-1, compares against shipping bill in ICEGATE, files Table 9A amendment in the next GSTR-1 to correct the mismatched field; GSTN re-transmits and refund clears in next scroll</td></tr>
                        <tr><td>CSB-V data not reaching ICES from ECCS</td><td>Courier filing on ECCS does not flow through to ICES IGST_VFN role; PFMS scroll not generated; refund stuck indefinitely</td><td>Patron coordinates with Authorised Courier to upload Manual Courier Shipping Bill on ECCS, verifies ICES IGST_VFN role processing, follows up on PFMS scroll generation through gateway port officer</td></tr>
                        <tr><td>PFMS bank validation failure for IGST refund</td><td>Bank account linked to GSTIN fails PFMS validation due to IFSC mismatch, name mismatch, or recent bank merger; temporary scroll fails to convert to final</td><td>Patron re-validates the bank account linked to GSTIN and PAN in PFMS, corrects IFSC if needed, re-runs the refund through the failed-after-success interim procedure with gateway port officer</td></tr>
                        <tr><td>Amazon TCS reflected in cash ledger but export refund stuck</td><td>Amazon India deducts 1 percent TCS on domestic sales under Section 52 CGST; sellers confuse this with export refund being blocked, file wrong rectification</td><td>Patron maps Amazon settlement TCS (domestic sales only) separately from export-mode shipments, ensures GSTR-2B TCS credit is applied only against domestic GST liability, not export refund line</td></tr>
                        <tr><td>Wrong table in GSTR-3B (3.1(a) instead of 3.1(b))</td><td>Export IGST reported in Table 3.1(a) Other Outward Taxable Supplies instead of 3.1(b) Zero-Rated Outward Supplies; GSTN does not transmit to ICES</td><td>Patron files revised GSTR-3B in the next month with correction; in extreme cases files DRC-03 voluntary correction and follows up for re-transmission to ICES</td></tr>
                        <tr><td>FX non-realisation within 9 months (FEMA breach)</td><td>Foreign customer pays late or marketplace settlement delays push realisation beyond 9 months; triggers Rule 96B ITC reversal for IGST-paid route</td><td>Patron coordinates with AD bank for RBI extension under FEMA Master Direction, files Rule 96B reversal worksheet if extension denied, recovers reversed ITC when realisation completes</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Ecommerce Exporter Refund Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (LUT Filing - Annual)</td><td class="table-amount">Starting from Rs 4,999 per LUT (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Single Export Refund Cycle (RFD-01, up to 50 invoices, single tax period)</td><td class="table-amount">Rs 10,999 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ICEGATE Error Remediation (SB001/SB003/SB005/SB006 + Table 9A)</td><td class="table-amount">Rs 14,999 per remediation cycle (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Monthly Retainer (Regular SB + CSB-V Coverage)</td><td class="table-amount">Rs 22,999 per month (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Annual E-commerce Refund Retainer (12-Month End-to-End)</td><td class="table-amount">Rs 1,89,999 per annum (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>AD Code Registration with ICEGATE</td><td class="table-amount">Rs 4,999 one-time (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 107 Appeal (Refund Rejection)</td><td class="table-amount">Rs 60,000 plus success fee (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Success Fee (Discretionary on Recovery)</td><td class="table-amount">1 to 3 percent of refund recovered (on actual recovery)</td></tr>
                        <tr><td>Government / Statutory Fees</td><td class="table-amount">No separate government fee for RFD-11 or RFD-01 filing</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Ecommerce Exporter Refund consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Ecommerce%20Exporters.%20Please%20contact%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Ecommerce Refund Timeline by Stage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTIN, IEC, and AD-code setup (one-time)</td><td>3 to 7 working days</td></tr>
                        <tr><td>LUT filing (Form RFD-11) and ARN generation</td><td>Same day after sign-off</td></tr>
                        <tr><td>Regular SB filing on ICEGATE</td><td>Same day as export</td></tr>
                        <tr><td>CSB-V filing on ECCS by Authorised Courier</td><td>Same day as handover to courier</td></tr>
                        <tr><td>GSTR-1 Table 6A filing</td><td>By 11th of following month (monthly filers)</td></tr>
                        <tr><td>GSTR-3B Table 3.1(b) filing</td><td>By 20th of following month (monthly filers)</td></tr>
                        <tr><td>IGST auto-refund (regular SB via ICEGATE-PFMS)</td><td>Within 7 to 15 days of EGM filing (Rule 96 + Section 54(6))</td></tr>
                        <tr><td>IGST auto-refund (CSB-V courier via ECCS-ICES-PFMS)</td><td>Within 10 to 21 days of ECCS upload</td></tr>
                        <tr><td>LUT route provisional 90 percent refund</td><td>Within 7 days of RFD-02 (Section 54(6) + Rule 91)</td></tr>
                        <tr><td>LUT route final RFD-06 sanction</td><td>Within 60 days of RFD-01 (Section 54(7))</td></tr>
                        <tr><td>ICEGATE error remediation cycle (Table 9A)</td><td>30 to 45 days end-to-end</td></tr>
                        <tr><td>Interest if refund delayed beyond 60 days</td><td>6 percent per annum (Section 56); 9 percent for appellate orders</td></tr>
                        <tr><td>Statutory time limit (Section 54(1))</td><td>2 years from relevant date</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note on the three parallel clocks:</strong> First, the 9-month FX realisation window under FEMA Master Direction on Export of Goods and Services - miss it without RBI extension and refund eligibility lapses with Rule 96B ITC reversal. Second, the 2-year refund limitation under Section 54(1) of the CGST Act counted from the relevant date - permanent loss of right. Third, the LUT validity under Rule 96A - every financial year. Miss the LUT renewal and the next shipment attracts upfront IGST, locking working capital. The Electronic Cash Ledger (ECL) mandate from 1 March 2024 applies to courier-mode duty payment - cash flow must be planned accordingly.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">4 Reasons Why CA-Led Ecommerce Refund Filing Beats DIY or Software-Only</h2>
        </div>
        <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                    </div>
                    <h3>Two-Mode Strategy Mapping (Regular SB vs CSB-V)</h3>
                    <p>Software defaults sellers into one route. Patron picks the optimal mode per shipment - regular EDI SB at port for cargo above Rs 10 lakh, or CSB-V courier on ECCS for low-ticket high-volume orders. The cost difference can be Rs 200 to Rs 600 per shipment, compounding rapidly at marketplace scale across 1,000+ monthly orders.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <h3>ICEGATE Error Code Remediation Expertise</h3>
                    <p>SB001 SB number mismatch, SB003 GSTIN mismatch, SB005 invalid invoice, SB006 EGM not filed - each requires a different Table 9A amendment path. Patron has decoded the full error matrix and built a structured remediation workflow that clears refunds in 30 to 45 days instead of indefinite limbo.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Marketplace Settlement Reconciliation at SKU Level</h3>
                    <p>Amazon Global Selling settlement files, Etsy CSV exports, eBay seller hub data, and Shopify order reports reconciled to GSTR-1 invoice line. Patron's reconciliation engine maps each marketplace order to invoice, shipping bill, EGM, and FX realisation - the only way to catch refund-blocking mismatches before they become SB errors.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h3>TCS-Domestic vs Export-Mode Separation</h3>
                    <p>Most sellers confuse Amazon India's 1 percent TCS deduction (domestic sales only under Section 52) with export refund mechanics. Patron maps domestic TCS credits to GSTR-2B and applies them only against domestic GST liability, keeping the export refund line clean. This single distinction unlocks weeks of refund flow that DIY sellers miss.</p>
                </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Ecommerce Exporters</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of E-commerce Exporter and GST Compliance</strong></p>
                <h3>Trusted By</h3>
                <p>Hyundai, Asian Paints, Bridgestone, and 200+ Indian online sellers across Amazon Global Selling, Etsy, eBay, Shopify, India Post EMS, DHL, FedEx, and Aramex - handicrafts, gems and jewellery, apparel, handloom, and D2C brands.</p>
                <h3>Outcome Proof</h3>
                <p>A Jaipur-based handicraft seller on Amazon Global Selling and Etsy recovered Rs 87 lakh across 18 monthly cycles between FY 2024-25 and FY 2025-26 through CSB-V courier IGST auto-refund. Mean disbursal time of 12 days per cycle. Four Table 9A amendments cleared 2 SB005, 1 SB001, and 1 SB003 errors across the period - all refunds eventually credited via PFMS.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves online sellers across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regular SB vs CSB-V Courier vs LUT Route - 3 Refund Routes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Route A: Regular SB</th><th>Route B: CSB-V Courier</th><th>Route C: LUT (RFD-01)</th></tr></thead>
                    <tbody>
                        <tr><td>Mode of Shipment</td><td>Cargo via port or ICD; container or break-bulk</td><td>Air courier through Authorised Courier on ECCS</td><td>Either mode; tax-mode choice</td></tr>
                        <tr><td>Value Cap per Consignment</td><td>No upper cap</td><td>Up to Rs 10 lakh per shipment under CSB-V</td><td>Mode-independent</td></tr>
                        <tr><td>Filing Platform</td><td>ICEGATE EDI</td><td>ECCS at 9 international courier terminals</td><td>GST portal Form RFD-01</td></tr>
                        <tr><td>Tax Mode</td><td>IGST paid (auto-refund) or LUT</td><td>IGST paid (auto-refund) or LUT</td><td>LUT only - accumulated ITC refund</td></tr>
                        <tr><td>Refund Mechanism</td><td>Auto via ICEGATE-PFMS</td><td>Auto via ECCS-ICES-PFMS</td><td>Manual via Form RFD-01 plus officer scrutiny</td></tr>
                        <tr><td>Typical Turnaround</td><td>7 to 15 days post-EGM</td><td>10 to 21 days post-ECCS upload</td><td>30 to 60 days for final order; 7 days for 90 percent provisional</td></tr>
                        <tr><td>Documentation Burden</td><td>Higher per shipment</td><td>Lower per shipment, simplified Form HA</td><td>Statement 3 reconciliation per cycle</td></tr>
                        <tr><td>Statutory Basis</td><td>Rule 96 CGST Rules read with Section 16 IGST Act</td><td>Courier Regulations 2010 read with Rule 96</td><td>Section 54(3) read with Rule 89 and Rule 89(4)</td></tr>
                        <tr><td>Best For</td><td>Container loads, large shipments, EOU and merchant exporters</td><td>Marketplace and D2C sellers, low-ticket high-volume</td><td>Sellers with high ITC accumulation and steady volume</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related GST and Ecommerce Compliance Services</h2>
            <div class="content-text">
                
                <p>E-commerce export refund work rarely sits in isolation. Most online exporters need adjacent compliance running in parallel:</p>
                <ul>
                    <li><a href="/gst-refund/">GST Refund</a> - parent practice covering all Section 54 refund categories beyond e-commerce exports such as inverted duty, deemed exports, EOU refunds, and Section 49(6) electronic cash ledger refunds</li>
                    <li><a href="/gst-annual-returns/">GST Annual Returns</a> - GSTR-9 reconciliation that ties together all monthly e-commerce refunds; required before annual GSTR-9C reconciliation</li>
                    <li><a href="/gst-audit/">GST Audit</a> - for online sellers above the prescribed turnover threshold, departmental GSTR-9C reconciliation, and pre-audit documentation</li>
                    <li><a href="/gst-registration/">GST Registration</a> - mandatory under Section 24(ix) CGST Act for any seller using an e-commerce operator regardless of turnover threshold</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT Appeal - Exporters</a> - escalation route when an e-commerce refund order is rejected and the Section 107 Appellate Authority order is also adverse</li>
                    <li><a href="/gst-returns/">GST Returns</a> - monthly GSTR-1 Table 6A and GSTR-3B Table 3.1(b) filing, the single most important upstream control for refund eligibility</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <h3>Section 16 of IGST Act 2017</h3>
                <p>Defines zero-rated supply (exports + SEZ). Section 16(3) provides two refund routes: LUT/bond without IGST payment with refund of accumulated ITC under Rule 89, or IGST-paid with refund of IGST under Rule 96. The shipping bill itself is treated as the refund application for the IGST-paid route, eliminating the need for a separate Form GST RFD-01 in most regular-SB cases.</p>
                <h3>Section 24(ix) of CGST Act 2017</h3>
                <p>Mandatory GST registration for any person making supplies through an electronic commerce operator, regardless of aggregate turnover thresholds. This is the most common compliance trigger for first-time online exporters listing on Amazon Global Selling, Etsy, or eBay.</p>
                <h3>Section 52 of CGST Act 2017</h3>
                <p>TCS at 1 percent (0.5 percent CGST plus 0.5 percent SGST) by ECO on net taxable domestic supplies; explicitly does NOT apply to export-mode shipments. Amazon India and Flipkart deduct TCS on domestic sales only, with credit appearing in seller's electronic cash ledger via GSTR-8 filed by the operator.</p>
                <h3>Section 54 of CGST Act 2017</h3>
                <p>Section 54(1) - 2-year limitation from relevant date. Section 54(3) - substantive right to refund. Section 54(6) - provisional 90 percent refund for zero-rated supplies. Section 54(7) - final refund within 60 days. Section 56 - 6 percent interest if delayed beyond 60 days; 9 percent for appellate orders.</p>
                <h3>Rule 89 of CGST Rules 2017</h3>
                <p>Refund procedure for LUT route. Rule 89(2) - documentary evidence. Rule 89(4) - maximum refund formula for zero-rated supplies. Rule 89(5) - inverted duty formula. Statement 3 maps invoice to shipping bill for LUT route ITC refund.</p>
                <h3>Rule 96 of CGST Rules 2017</h3>
                <p>IGST-paid auto-refund route. Shipping bill is deemed application; ICES validates against GSTN; PFMS disburses. SB000-SB006 response codes track status. Table 9A amendment in GSTR-1 corrects mismatches for SB001, SB003, SB005, SB104. Rule 96(10) omitted from 8 October 2024 by Notification 20/2024-CT.</p>
                <h3>Rule 96A of CGST Rules 2017</h3>
                <p>LUT mechanism in Form GST RFD-11. Valid for one financial year. Subject to Notification 37/2017-CT prosecution eligibility test (no prosecution for tax evasion above Rs 2.5 crore).</p>
                <h3>Rule 96B of CGST Rules 2017</h3>
                <p>ITC reversal if foreign exchange not realised within 9 months under FEMA Master Direction (or extended period granted by RBI). Reversed ITC can be re-availed when realisation eventually completes.</p>
                <h3>Courier Imports and Exports Regulations 2010 (Amended)</h3>
                <p>Governs CSB-III (documents), CSB-IV (gifts/samples up to Rs 25,000), and CSB-V (commercial up to Rs 10 lakh per consignment) on Express Cargo Clearance System (ECCS) at 9 international courier terminals. Form HA is the prescribed CSB-V format. Regulation 12 sets Authorised Courier eligibility.</p>
                <h3>CBIC Notification 85/2021-Customs (NT) and ECL Mandate (1 March 2024)</h3>
                <p>Notification 85/2021-Customs (NT) sets Authorised Courier deactivation rule for one-year inactivity in ECCS. From 1 March 2024, Electronic Cash Ledger (ECL) is mandatory for any courier-mode duty payment per CBIC notice.</p>
                <h3>Notification 20/2024-Central Tax (8 October 2024) and CBIC Instruction 6/2025</h3>
                <p>Notification 20/2024-CT omitted Rule 96(10) of CGST Rules with prospective effect from 8 October 2024 - earlier restriction on combining concessional supply benefits with IGST refund removed. CBIC Instruction 6/2025 from October 2025 extended the 90 percent provisional refund mechanism to broader eligible categories including inverted duty.</p>
                <h3>DGFT FTP 2023 RoDTEP Appendix 4R and 4RE</h3>
                <p>Remission of Duties and Taxes on Exported Products separately administered by DGFT - non-overlapping with GST refund. Rates 0.3 to 4.3 percent of FOB value; e-scrips on ICEGATE used for basic customs duty payment. Appendix 4RE extended RoDTEP to EOU and SEZ from 1 June 2025.</p>

            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Common questions about GST refund for e-commerce exporters - covering Section 24(ix) mandatory registration, two refund routes (IGST-paid auto-refund and LUT route), CSB-V courier shipping bill, ICEGATE SB error code remediation, Amazon TCS exclusion on exports, and RoDTEP eligibility.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How does an Indian e-commerce exporter claim GST refund?</h3>
                        <div class="faq-expanded__a"><p>Two routes apply. Route A: pay IGST on the export invoice; the regular shipping bill or CSB-V courier shipping bill is itself treated as the refund application under Rule 96 CGST Rules; refund is auto-credited through ICEGATE and PFMS within 7 to 21 days. Route B: export under Letter of Undertaking (Form GST RFD-11) without IGST; claim accumulated ITC refund via Form GST RFD-01 within 30 to 60 days. Section 24(ix) CGST Act makes GST registration mandatory for online sellers regardless of turnover.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is CSB-V and which sellers should use it?</h3>
                        <div class="faq-expanded__a"><p>CSB-V is the Courier Shipping Bill V under the Courier Imports and Exports Regulations 2010 used for commercial exports up to Rs 10 lakh per consignment through Authorised Couriers on the Express Cargo Clearance System (ECCS). It is the optimal route for low-ticket high-volume sellers on Amazon Global Selling, Etsy, eBay, and Shopify. CSB-V supports both IGST-paid auto-refund and LUT-route ITC refund under Form GST RFD-01.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Amazon seller ka GST refund kaise milega?</h3>
                        <div class="faq-expanded__a"><p>Amazon Global Selling se export karne wale Indian sellers do tarike se refund le sakte hain: pehla, IGST pay karke shipping bill (regular ya CSB-V) auto-refund application bann jaata hai, ICEGATE-PFMS se 7 se 15 din me bank me paise aa jaate hain. Doosra, LUT file karke bina IGST diye export karna aur Form RFD-01 me accumulated ITC refund claim karna. GSTR-1 Table 6A aur GSTR-3B Table 3.1(b) sahi se file karna zaroori hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for e-commerce exporters even below Rs 20 lakh?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 24(ix) of the CGST Act 2017 makes GST registration mandatory for any seller making supplies through an electronic commerce operator like Amazon, Flipkart, Etsy, or eBay, regardless of aggregate turnover. The Rs 20 lakh and Rs 40 lakh threshold exemptions do not apply to e-commerce sellers. Non-registration attracts demand under Section 73 or Section 74 CGST Act with penalty up to 100 percent of tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What does ICEGATE error code SB005 mean and how to fix it?</h3>
                        <div class="faq-expanded__a"><p>SB005 indicates Invalid Invoice Details - the invoice number, value, or shipping bill reference declared in GSTR-1 Table 6A does not match the corresponding shipping bill on ICEGATE. Fix is to file GSTR-1 Table 9A amendment in the next return period correcting the mismatched field. Once GSTN re-transmits the corrected data to ICES, the SB is picked up in the next IGST refund scroll. Other common codes: SB001 SB number mismatch, SB003 GSTIN mismatch, SB006 EGM not filed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does Amazon TCS at 1 percent apply to export sales?</h3>
                        <div class="faq-expanded__a"><p>No. TCS under Section 52 CGST Act applies only to net taxable domestic supplies routed through an electronic commerce operator. Export-mode shipments through Amazon Global Selling, Etsy, or eBay are zero-rated under Section 16 IGST Act and explicitly outside TCS scope. Amazon India deducts 1 percent TCS only on domestic Amazon.in sales; this credit appears in the seller electronic cash ledger via GSTR-8 and is used against domestic GST liability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between CSB-IV and CSB-V courier shipping bills?</h3>
                        <div class="faq-expanded__a"><p>CSB-IV (Form H) covers bona fide gifts, commercial samples, prototypes, and re-export of durable containers up to Rs 25,000 per consignment. It does not require IEC and is not eligible for IGST refund or RoDTEP. CSB-V (Form HA) covers commercial exports up to Rs 10 lakh per consignment, requires IEC and GSTIN, and is eligible for IGST refund through ECCS as well as RoDTEP scrip via DGFT.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Etsy seller IGST refund kaise milega?</h3>
                        <div class="faq-expanded__a"><p>Etsy par sell karne wale Indian sellers usually courier (DHL, FedEx, India Post) ke through ship karte hain, to CSB-V form HA me Authorised Courier filing karta hai ECCS pe. IGST pay karke export kiya to refund auto-process hota hai ICEGATE-ECCS-PFMS workflow me. Etsy ka monthly settlement file invoice mapping ke liye chahiye, aur GSTR-1 Table 6A me sab order list karna hota hai. FX realization Etsy Payments ya direct Stripe/PayPal aata hai, BRC ya FIRC bank se lena padta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">How do I track the status of my IGST refund?</h3>
                        <div class="faq-expanded__a"><p>Three trackers run in parallel. On the GST portal: Services > Refunds > Track status of invoice data to be shared with ICEGATE shows whether GSTN has transmitted the invoice to Customs. On ICEGATE: login plus IGST Refund Status shows SB-level error codes and scroll generation. On PFMS: the bank account validation status and disbursal record. For courier exports, the CBIC eMobility tracker covers ECCS data flow, EDPMS transmission, and ICEGATE refund status.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Can I claim RoDTEP along with GST refund on e-commerce exports?</h3>
                        <div class="faq-expanded__a"><p>Yes. RoDTEP (Remission of Duties and Taxes on Exported Products) is administered by DGFT separately from GST refund and remits central, state, and local levies not refunded under GST. RoDTEP rates range from 0.3 percent to 4.3 percent of FOB value under Appendix 4R; e-scrips are issued on ICEGATE and used to pay basic customs duty. RoDTEP and GST refund are non-overlapping benefits. From 1 June 2025, EOU and SEZ exports are also covered under Appendix 4RE.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Which Section makes online sellers register mandatorily?</strong> Section 24(ix) of the CGST Act 2017 - no turnover threshold applies.</li>
                    <li><strong>Which form is used for LUT-route refund?</strong> Form GST RFD-01 with Statement 3 under Rule 89 CGST Rules.</li>
                    <li><strong>Where do I report exports in GSTR-1?</strong> Table 6A; mirrored in Table 3.1(b) of GSTR-3B.</li>
                    <li><strong>CSB-V upper value limit?</strong> Rs 10 lakh per consignment under Courier Regulations 2010.</li>
                    <li><strong>How many international courier terminals run ECCS?</strong> 9 international courier terminals across India (Bengaluru, Chennai, Delhi, Mumbai, and others).</li>
                    <li><strong>What is the FX realisation deadline?</strong> 9 months from invoice date per RBI Master Direction on Export of Goods and Services.</li>
                    <li><strong>Does TCS apply on export shipments?</strong> No - TCS under Section 52 CGST Act applies only to net taxable domestic supplies.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Ecommerce Refund Statutory Deadlines and 3 Parallel Clocks</h2>
            <div class="content-text">
                
                <p>Three statutory clocks run together for an e-commerce exporter. Miss any one and the consequences differ but each is material:</p>
                <ul>
                    <li><strong>9-month FX realisation window</strong> - RBI Master Direction on Export of Goods and Services; without timely realisation or RBI extension, refund eligibility lapses and Rule 96B ITC reversal triggers for IGST-paid route</li>
                    <li><strong>2-year refund limitation under Section 54(1)</strong> - counted from relevant date; permanent loss of right; no condonation under Section 54 itself</li>
                    <li><strong>LUT FY 2026-27 filing</strong> - before 31 March 2026 (or first export of FY 2026-27); every export from 1 April 2026 attracts IGST upfront if LUT not on record under Rule 96A</li>
                    <li><strong>GSTR-1 Table 6A filing</strong> - by 11th of following month (monthly filers); without filing no refund transmission to ICES</li>
                    <li><strong>GSTR-3B Table 3.1(b) filing</strong> - by 20th of following month; without filing refund deemed not filed under Rule 96(1)(b)</li>
                    <li><strong>ICEGATE error remediation (Table 9A)</strong> - next monthly GSTR-1 cycle; delay = working capital lock</li>
                    <li><strong>RFD-04 provisional 90 percent (LUT route)</strong> - within 7 days of RFD-02 (Section 54(6) and Rule 91)</li>
                    <li><strong>RFD-06 final sanction (LUT route)</strong> - within 60 days of RFD-01 (Section 54(7)); 6 percent Section 56 interest if delayed; 9 percent for appellate orders</li>
                    <li><strong>Section 107 appeal</strong> - within 3 months of refund rejection; 10 percent pre-deposit</li>
                    <li><strong>Section 112 GSTAT appeal</strong> - within 3 months of Appellate Authority order; additional 10 percent pre-deposit</li>
                </ul>
                <p><strong>Engage Patron Accounting for e-commerce exporter compliance retainer - share GSTIN, IEC, AD code status, marketplace mix, and last 12 months GSTR-1 / GSTR-3B. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ecommerce%20exporter%20GST%20refund%20help%20-%20Amazon%2C%20Etsy%2C%20eBay%2C%20Shopify%2C%20or%20courier%20mode." target="_blank">WhatsApp us now</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Ecommerce Refund Team</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">GST refund for e-commerce exporters is the difference between recovering working capital in days versus weeks, and between marketplace profit and marketplace loss. Section 16 of the IGST Act, Rule 96 read with Rule 89 of the CGST Rules, and the Courier Imports and Exports Regulations 2010 together set up a dual-mode framework that rewards correct route choice between regular SB and CSB-V plus meticulous reconciliation across GSTR-1, ICEGATE, and PFMS.</p>
                <p style="color:rgba(255,255,255,0.92);">Section 24(ix) of the CGST Act mandates registration for online sellers regardless of turnover thresholds. Section 52 TCS applies only to domestic ECO sales - export-mode shipments are zero-rated under Section 16 IGST and outside TCS scope. The October 2024 omission of Rule 96(10) by Notification 20/2024-CT and CBIC Instruction 6/2025 extending 90 percent provisional refund have materially improved the refund landscape. RoDTEP under Appendix 4R adds a separate, non-overlapping benefit administered by DGFT.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP's CA and CS team handles the end-to-end e-commerce refund stack - LUT renewal, AD-code registration, marketplace settlement reconciliation, ICEGATE error remediation, and PFMS disbursal follow-up. With offices in Pune, Mumbai, Delhi, and Gurugram and a national client base of 10,000+ businesses, we are equipped to manage refund cycles for online sellers of any scale across Amazon Global Selling, Etsy, eBay, Shopify, India Post EMS, DHL, FedEx, and Aramex.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Ecommerce%20Exporters.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20GST%20Refund%20for%20Ecommerce%20Exporters&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20refund%20services%20for%20an%20Indian%20ecommerce%20exporter%20-%20Amazon%20Global%20Selling%2C%20Etsy%2C%20eBay%2C%20Shopify%2C%20or%20CSB-V%20courier%20mode%20exports.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related GST and Ecommerce Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end GST refund and online seller compliance coverage - from LUT filing through to GSTAT Section 112 escalation for refund rejection appeals.</p>
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for GST Refund for Ecommerce Exporters</div>
                    <div class="pa-cross-grid">
                        <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Filing</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-annual-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>Reviewed every 3 months under Tier 1 freshness cycle. Triggers for earlier review: any GST Council notification on Rules 89 or 96, CBIC instruction on courier procedure or ECCS workflow, amendment to Courier Imports and Exports Regulations 2010, ICEGATE advisory on SB error codes, DGFT notification on RoDTEP Appendix 4R, or RBI master direction on FEMA realisation.</p>
        </div>
    </div>
</section>

@include('layouts.itr-season-strip')

</main>
<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
    function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);

}
    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        var phoneVal = phoneInput.value.trim();
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>

</script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-pill'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;
    var OFFSET = 200;
    var ticking = false;
    function setActive(entry) {
        tocBtns.forEach(function (b) { b.classList.remove('active'); });
        if (!entry) return;
        entry.btn.classList.add('active');
        if (wrapper) {
            var left = entry.btn.offsetLeft;
            var right = left + entry.btn.offsetWidth;
            if (left < wrapper.scrollLeft) {
                wrapper.scrollTo({ left: left - 16, behavior: 'smooth' });
            } else if (right > wrapper.scrollLeft + wrapper.clientWidth) {
                wrapper.scrollTo({ left: right - wrapper.clientWidth + 16, behavior: 'smooth' });
            }
        }
    }
    function onScroll() {
        ticking = false;
        var y = window.pageYOffset + OFFSET;
        var active = entries[0];
        for (var i = 0; i < entries.length; i++) {
            if (entries[i].section.offsetTop <= y) { active = entries[i]; }
        }
        if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight - 2)) {
            active = entries[entries.length - 1];
        }
        setActive(active);
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();
})();
</script>

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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
