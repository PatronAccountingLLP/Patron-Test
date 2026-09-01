@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Rule 14A GST Registration 2026: 3 Days | Patron Accounting</title>
    <meta name="description" content="Rule 14A grants Aadhaar based GST registration in 3 working days for B2B taxpayers with monthly output tax below Rs 2.5 lakh. Starting at Rs 1,499.">
    <link rel="canonical" href="/gst-registration-rule-14a">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Rule 14A GST Registration 2026: 3 Days | Patron Accounting">
    <meta property="og:description" content="Rule 14A grants Aadhaar based GST registration in 3 working days for B2B taxpayers with monthly output tax below Rs 2.5 lakh. Starting at Rs 1,499.">
    <meta property="og:url" content="/gst-registration-rule-14a">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rule 14A GST Registration 2026: 3 Days | Patron Accounting">
    <meta name="twitter:description" content="Rule 14A grants Aadhaar based GST registration in 3 working days for B2B taxpayers with monthly output tax below Rs 2.5 lakh. Starting at Rs 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/gst-registration-rule-14a/#service",
        "name": "GST Registration Under Rule 14A in India",
        "description": "Patron Accounting LLP provides end to end Rule 14A GST registration filing for small B2B taxpayers with monthly output tax below Rs 2,50,000. The service covers self assessment, FORM GST REG-01 Part B filing with Rule 14A opt in, Aadhaar authentication coordination and FORM GST REG-32 exit support.",
        "serviceType": "Tax Registration Service",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/gst-registration-rule-14a" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [
            { "@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" },
            { "@type": "Thing", "name": "Central Board of Indirect Taxes and Customs", "sameAs": "https://en.wikipedia.org/wiki/Central_Board_of_Indirect_Taxes_and_Customs" }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Rule 14A GST Registration Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Rule 14A GST Registration - End to End Filing",
                    "priceCurrency": "INR",
                    "price": "1499",
                    "description": "Self assessment, FORM GST REG-01 Part B filing with Rule 14A opt in, and Aadhaar authentication coordination"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/gst-registration-rule-14a/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "GST Services", "item": "https://www.patronaccounting.com/gst-services" },
            { "@type": "ListItem", "position": 3, "name": "Rule 14A GST Registration", "item": "https://www.patronaccounting.com/gst-registration-rule-14a" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/gst-registration-rule-14a/#faq",
        "datePublished": "2026-05-26T08:00:00+05:30",
        "dateModified": "2026-06-01T08:00:00+05:30",
        "mainEntity": [

            {
                "@type": "Question",
                "name": "What is Rule 14A in GST registration?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rule 14A of the CGST Rules, 2017 is an optional Aadhaar based fast track GST registration scheme that grants a GSTIN within 3 working days for applicants whose monthly output tax on B2B supplies stays below Rs 2,50,000. It was inserted by Notification 18/2025-Central Tax dated 31 October 2025 and is effective from 1 November 2025."
                }
            },
            {
                "@type": "Question",
                "name": "Who is eligible for GST registration under Rule 14A?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Any taxpayer applying through FORM GST REG-01 whose self assessed monthly output tax on supplies to registered persons does not exceed Rs 2,50,000 across CGST, SGST or UTGST, IGST and compensation cess. Aadhaar authentication of the Primary Authorised Signatory and one Promoter or Partner is mandatory, except for persons notified under Section 25(6D) of the CGST Act."
                }
            },
            {
                "@type": "Question",
                "name": "What is the threshold limit under Rule 14A?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The threshold is Rs 2,50,000 of total monthly output tax payable on supplies to registered persons (B2B). It is calculated across CGST, SGST or UTGST, IGST and compensation cess for that month. Output tax on B2C supplies to unregistered persons is excluded from this calculation."
                }
            },
            {
                "@type": "Question",
                "name": "How can I withdraw from Rule 14A registration?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "File FORM GST REG-32 on the GST portal. Before 1 April 2026, you must have filed returns for at least 3 months; on or after 1 April 2026, at least 1 tax period. No amendment, cancellation or Section 29 proceeding should be pending. On approval, FORM GST REG-33 is issued and you may report B2B output tax above Rs 2,50,000 from the first day of the succeeding month."
                }
            },
            {
                "@type": "Question",
                "name": "What happens if my B2B output tax crosses Rs 2.5 lakh under Rule 14A?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You must apply for withdrawal in FORM GST REG-32 before continuing supplies that breach the limit. Operating under Rule 14A while exceeding the threshold exposes you to cancellation under Section 29 of the CGST Act and a penalty under Section 122 of up to Rs 10,000 or an amount equal to the tax evaded, whichever is higher."
                }
            },
            {
                "@type": "Question",
                "name": "Is Rule 14A registration different from regular GST registration?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. The application is still through FORM GST REG-01, but Part B has a new field where you opt in to Rule 14A. Approval is fully system driven under Rule 9A within 3 working days, physical verification is generally waived for low risk cases, and you cannot hold multiple Rule 14A registrations in the same State or UT under the same PAN."
                }
            },
            {
                "@type": "Question",
                "name": "Is Aadhaar authentication mandatory for Rule 14A?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Notification 18/2025-Central Tax inserted instruction 8A in FORM GST REG-01 stating that any person opting for Rule 14A must undergo OTP based Aadhaar authentication. The only exception is for persons notified under Section 25(6D) of the CGST Act, 2017, such as a department or local authority."
                }
            }
        ]
    }
    </script>
@endsection

<style>/* ============================================
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
@media (max-width: 768px) {.private-registration-heading { font-size: 32px !important; line-height: 110% !important; }}
@media (max-width: 480px) {.private-registration-heading { font-size: 28px !important; }}
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
/* Select */
.form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
/* Phone Group + Country Dropdown */
.phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
.selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
/* Country Dropdown List */
.country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
/* Phone Input Override */
.phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
/* Submit Button */
.btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
/* Form Footer */
.form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
/* Error States */
.form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
/* Success State */
.form-success { text-align: center; padding: 40px 20px; }
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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
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
.toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
.toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
.toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
.toc-btn.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
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
.btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
.btn-cta:hover { background: var(--orange-light); color: var(--orange); }
.btn-cta svg { width: 16px; height: 16px; }
/* ============================================
           CUSTOM FAQ ACCORDION (replaces Bootstrap accordion)
           ============================================ */
/* Static FAQ - direct Q&A, always expanded (no collapse) */
.pa-faq-wrap { display: flex; flex-direction: column; gap: 12px; }
.pa-faq-item {
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-md);
            overflow: hidden;
            background: var(--white);
        }
.pa-faq-q-static {
            margin: 0; padding: 18px 22px 0 22px;
            font-size: 15px; font-weight: 700;
            color: var(--blue); line-height: 1.4;
        }
.pa-faq-body { display: block; }
.pa-faq-a { padding: 8px 22px 18px; }
.pa-faq-a p { font-size: 14px; color: var(--text-secondary); line-height: 1.7; margin: 0; }
@media (max-width: 640px) {.pa-faq-q-static { padding: 14px 16px 0 16px; font-size: 14px; }
.pa-faq-a { padding: 6px 16px 14px; }}
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
@media (max-width: 768px) {.pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
.pa-cross-grid { grid-template-columns: repeat(2, 1fr); }}
@media (max-width: 480px) {.pa-city-grid  { grid-template-columns: 1fr; }
.pa-cross-grid { grid-template-columns: 1fr; }}
/* Slick overrides */
/* Fixed uniform height so text + video cards always match (video area 298px + author = ~370px) */
/* Video Testimonial Card */
/* Quote Testimonial Card */
/* Loading state */
@keyframes spin { to { transform: rotate(360deg); } }
/* ============================================
           RESPONSIVE
           ============================================ */
@media (max-width: 1024px) {.two-column { grid-template-columns: 1fr; gap: 40px; }
.features-grid { grid-template-columns: repeat(2, 1fr); }
.stats-container { gap: 32px; }
.certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }}
@media (max-width: 900px) {.step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
.step-card:nth-child(even) { direction: ltr; }
.step-visual { order: -1; }}
@media (max-width: 768px) {.content-section { padding: 40px 16px; }
.hero-cta { flex-direction: column; }
.btn-video, .btn-sample { width: 100%; justify-content: center; }
.stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
.stat-item { width: 100%; }
.features-grid { grid-template-columns: 1fr; gap: 16px; }
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
section ul li:not(.nav-item) { font-size: 14px; }}
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
@media (max-width: 768px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }}
@media (max-width: 480px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }}
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
@media (max-width: 768px) {.wa-sticky-bar { padding: 8px 12px; gap: 8px; }
.wa-sticky-bar-text { font-size: 13px; }
.wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
.wa-sticky-bar-icon { width: 30px; height: 30px; }
.wa-sticky-bar-icon svg { width: 16px; height: 16px; }}
@media (max-width: 480px) {.wa-sticky-bar-text { display: none; }
.wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
.wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
.wa-sticky-bar-btn span { display: none; }}</style>

@section('content')
<main>

<!-- BREADCRUMB -->

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
                        GST Registration Under Rule 14A in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business proof, bank details, and photo of the signatory.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 1,499 (Exl GST and Govt. Charges) for end to end filing.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Monthly B2B output tax below Rs 2,50,000 across CGST plus SGST plus IGST plus cess.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> GSTIN granted electronically within 3 working days of REG-01 submission.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 3 Working Day GSTIN | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Rule 14A GST Registration%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Rule 14A GST Registration%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20want%20a%20Rule%2014A%20fast%20track%20GST%20registration%20in%203%20working%20days.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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


                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'Rule 14A GST Registration',
                                        ])

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
            <!-- TOC_NAVIGATION_ITEMS PATTERN - use class "toc-btn" (NOT "toc-pill"); the CSS (.toc-btn) and scroll-spy JS (querySelectorAll('.toc-btn')) both target this exact class. First item gets "toc-btn active". One button per content section, in document order. Pattern:
                <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
                <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
                (repeat for who-section, services-section, procedure-section, documents-section, challenges-section, fees-section, timeline-section, benefits-section, comparison-section, faq-section)
            -->
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What It Is</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Eligibility</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Rule 14A vs Standard</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rule 14A GST Registration at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Rule 14A GST Registration Services at a Glance</strong></p>
                    <p>Rule 14A of the CGST Rules, 2017 is an optional Aadhaar based fast track GST registration scheme inserted by Notification 18/2025-Central Tax dated 31 October 2025. Effective 1 November 2025, it grants GSTIN within 3 working days to applicants whose monthly B2B output tax stays below Rs 2.5 lakh.</p>
                </div>
                <p>Rule 14A GST Registration is the simplified registration route notified by CBIC for small businesses with limited B2B sales. Until 31 October 2025, every GST applicant faced manual scrutiny under Rule 8 and Rule 9, sometimes waiting 7 to 30 days for a GSTIN. The CGST (Fourth Amendment) Rules, 2025 changed this by inserting Rule 14A, giving low risk small taxpayers a fully electronic 3 day path.</p>
                <p>Applicants self assess whether their total monthly output tax liability on supplies to registered persons stays below Rs 2,50,000. Aadhaar authentication of the Primary Authorised Signatory and one Promoter or Partner replaces officer led verification. The decision is taken by the GSTN risk engine under the companion Rule 9A. Patron Accounting handles end to end filing, the Rule 14A declaration in Part B of REG-01, Aadhaar coordination, and exit planning if your business outgrows the scheme.</p>
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
                <h2 class="section-title">What Is GST Registration Under Rule 14A?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Rule 14A of the CGST Rules, 2017 is an optional, Aadhaar authenticated, fast track GST registration scheme for taxpayers whose monthly output tax on B2B supplies does not exceed Rs 2,50,000.</p>
                    <p>The rule was inserted by the Central Goods and Services Tax (Fourth Amendment) Rules, 2025 via Notification No. 18/2025-Central Tax dated 31 October 2025 and came into force on 1 November 2025. It sits alongside the new Rule 9A which grants automated electronic registration to low risk applicants identified by the GSTN risk engine within 3 working days.</p>
                    <p>The threshold of Rs 2,50,000 is computed on total monthly output tax across CGST, SGST/UTGST, IGST and compensation cess on supplies to registered persons, including any cess on inter-State or intra-State B2B outward supplies. Output tax payable on B2C supplies to unregistered persons is excluded from this calculation. The choice is made by the applicant on a self assessment basis in Part B of FORM GST REG-01.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Rule 14A GST Registration:</strong></p>
                    <ul>
                        <li><strong>Output Tax Liability:</strong> The GST payable on outward supplies in a tax period, that is, CGST plus SGST/UTGST plus IGST plus compensation cess on sales made.</li>
                        <li><strong>B2B Supply:</strong> Supply of goods or services to a registered person whose GSTIN is captured on the tax invoice.</li>
                        <li><strong>B2C Supply:</strong> Supply to an unregistered person such as a retail consumer. B2C output tax is outside the Rule 14A threshold.</li>
                        <li><strong>Aadhaar Authentication:</strong> OTP based or biometric verification of identity under Section 25(6C) of the CGST Act, 2017.</li>
                        <li><strong>Section 25(6D) Exception:</strong> Notified categories such as a department or local authority that are exempt from Aadhaar authentication.</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rule 14A GST Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GSTIN In</span>
                        <strong>3 Working Days</strong>
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
            <h2 class="section-title">Applicability and Eligibility</h2>
            <div class="content-text">
                
                <p>Rule 14A is available only to applicants who satisfy each of the following on a self assessment basis.</p>
                <h3 style="margin-top:20px;">Eligibility Criteria</h3>
                <ul>
                    <li>The applicant has filed FORM GST REG-01 under Rule 8 for fresh GST registration.</li>
                    <li>The estimated total monthly output tax liability on supplies to registered persons across CGST, SGST/UTGST, IGST and compensation cess does not exceed Rs 2,50,000.</li>
                    <li>The applicant is willing to undergo Aadhaar OTP or biometric authentication of the Primary Authorised Signatory and at least one Promoter or Partner.</li>
                    <li>The applicant does not already hold a registration in the same State or Union Territory under the same PAN obtained through Rule 14A.</li>
                    <li>The applicant has not been notified under Section 25(6D) of the CGST Act, 2017 as exempt from Aadhaar authentication.</li>
                </ul>
                <h3 style="margin-top:20px;">Who Should Opt For Rule 14A</h3>
                <ul>
                    <li>Small service providers and consultants billing registered businesses on B2B invoices</li>
                    <li>Sub-contractors and SaaS startups onboarding registered enterprise clients</li>
                    <li>B2B traders and stockists with low monthly value but an urgent need for a GSTIN</li>
                    <li>Freelancers and professionals with limited but recurring registered customers</li>
                </ul>
                <h3 style="margin-top:20px;">Who Should NOT Opt</h3>
                <ul>
                    <li>Businesses with monthly B2B output tax already crossing or close to Rs 2,50,000</li>
                    <li>Applicants who anticipate rapid B2B growth within 3 to 6 months and may need to withdraw early</li>
                    <li>Persons required to obtain multiple registrations in the same State or UT under one PAN</li>
                    <li>E-commerce operators required to register under Section 24, where the standard route is statutorily mandated</li>
                </ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services Under Rule 14A</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Check and Self Assessment</td><td>Our CA team computes projected monthly output tax on registered person supplies, advises whether Rule 14A or the standard route fits, and documents the self assessment basis.</td></tr>
                        <tr><td>End to End FORM GST REG-01 Filing</td><td>We prepare Part A and Part B of REG-01, select "Yes" under Rule 14A, sign the prescribed declaration, and lodge the application on the common portal.</td></tr>
                        <tr><td>Aadhaar Authentication Coordination</td><td>We schedule and guide OTP based Aadhaar authentication for the Primary Authorised Signatory and one Promoter or Partner, including biometric fallback at GST Suvidha Kendras where flagged.</td></tr>
                        <tr><td>3 Day Approval Tracking</td><td>We track ARN progression through Rule 9A risk parameters, respond to FORM GST REG-03 clarifications within 7 days, and ensure FORM GST REG-06 is downloaded once issued.</td></tr>
                        <tr><td>Post Registration Compliance Setup</td><td>Returns calendar (GSTR-1, GSTR-3B, IFF where applicable), e-invoice readiness, and threshold monitoring alerts.</td></tr>
                        <tr><td>Smooth Exit via FORM GST REG-32</td><td>When B2B output tax crosses Rs 2,50,000 in a month, we file FORM GST REG-32 for withdrawal, confirm return filing pre-conditions, and obtain FORM GST REG-33 order to transition to regular Rule 9 status.</td></tr>

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
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">Step by Step Procedure to Apply Under Rule 14A</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The procedure is fully online on the GST common portal; there is no separate Form 14A, as the option is embedded inside Part B of FORM GST REG-01.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Generate Temporary Reference Number (TRN)</h3>
                    <p class="step-description">On the GST portal, go to Services > Registration > New Registration. Enter PAN, legal name, email and mobile number in Part A of FORM GST REG-01. Complete email OTP and mobile OTP verification. The portal issues a TRN valid for 15 days.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Part A</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRN 15 days</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="38" y="26" width="44" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 40h24M48 50h24" stroke="#14365F" stroke-width="1.6" opacity="0.4" stroke-linecap="round"/><text x="60" y="68" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">TRN</text></svg></div>
                        <span class="illustration-label">Generate TRN</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Log In With TRN and Open Part B</h3>
                    <p class="step-description">Log back into the portal using the TRN and open FORM GST REG-01 Part B. Locate the new field 4.1 'Option for registration under Rule 14A - Yes or No' inserted by the sub-rule of Notification 18/2025-Central Tax.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRN login</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 14A field</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="40" y="30" width="40" height="44" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 30v-6a10 10 0 0120 0v6" stroke="#E8712C" stroke-width="2" fill="none"/><circle cx="60" cy="50" r="4" fill="#E8712C"/><path d="M60 54v8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Open Part B</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Select Yes and Sign the Declaration</h3>
                    <p class="step-description">Select 'Yes' to opt for Rule 14A. The portal triggers the declaration in field 4.1.1 confirming the business will abide by the conditions and restrictions for opting under Rule 14A. Tick the declaration.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Select Yes</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Declaration</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="42" width="52" height="22" rx="11" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><circle cx="74" cy="53" r="8" fill="#E8712C"/><text x="48" y="57" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">YES</text></svg></div>
                        <span class="illustration-label">Opt In</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Complete Business Details and Document Upload</h3>
                    <p class="step-description">Fill business constitution, principal place of business with address proof, HSN or SAC of goods or services, authorised signatory details and bank account details. Upload PAN, Aadhaar, address proof, bank proof and photographs per the standard REG-01 schema.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Business details</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Upload docs</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="24" width="52" height="52" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M44 38h32M44 48h32M44 58h20" stroke="#14365F" stroke-width="1.6" opacity="0.4" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Details</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Aadhaar OTP Authentication</h3>
                    <p class="step-description">Under the new instruction 8A, any person opting for Rule 14A must undergo OTP based Aadhaar authentication. The Primary Authorised Signatory and one Promoter or Partner receive Aadhaar OTP links. Biometric authentication at a GST Suvidha Kendra may be triggered for high risk cases under Rule 8(4A) within 15 days.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP links</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Biometric fallback</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="32" width="52" height="36" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="48" cy="50" r="6" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.3"/><path d="M60 46h18M60 54h12" stroke="#14365F" stroke-width="1.4" stroke-linecap="round"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OTP</text></svg></div>
                        <span class="illustration-label">Authenticate</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Submit Using EVC or DSC</h3>
                    <p class="step-description">Submit the application using EVC for proprietors and partnerships or DSC for companies and LLPs. The portal assigns an ARN.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EVC / DSC</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN issued</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="24" fill="#F0F4F8" stroke="#14365F" stroke-width="1.6"/><path d="M49 50l8 8 16-18" stroke="#E8712C" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <span class="illustration-label">Submit</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Automated Risk Analysis Under Rule 9A</h3>
                    <p class="step-description">The GSTN risk engine runs data analytics across PAN, Aadhaar, income tax footprint, bank credentials and business profile. Low risk cases proceed automatically.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 9A</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Risk engine</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="54" cy="46" r="16" fill="#F0F4F8" stroke="#14365F" stroke-width="1.6"/><path d="M66 58l14 14" stroke="#E8712C" stroke-width="2.4" stroke-linecap="round"/><path d="M48 46l5 5 8-9" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <span class="illustration-label">Risk Analysis</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Receive GSTIN Within 3 Working Days</h3>
                    <p class="step-description">If no risk flag is raised, FORM GST REG-06 (Certificate of Registration) is auto generated within 3 working days from REG-01 submission. If flagged, FORM GST REG-03 is issued seeking clarification; respond within 7 days through FORM GST REG-04 to avoid rejection via FORM GST REG-05.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3 working days</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>REG-06</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="26" width="52" height="40" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="68" r="8" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.4"/><text x="60" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REG-06</text></svg></div>
                        <span class="illustration-label">GSTIN Issued</span>
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
            <h2 class="section-title">Document Checklist</h2>
            <div class="content-text">
                
                <p>Documents required for Rule 14A filing are the same as standard FORM GST REG-01, with stricter dependence on Aadhaar accuracy.</p>
                <ul>
                    <li>PAN card of the business or proprietor</li>
                    <li>Aadhaar of the Primary Authorised Signatory and one Promoter or Partner (name on PAN and Aadhaar must match)</li>
                    <li>Proof of constitution: partnership deed, LLP agreement, certificate of incorporation, or trust deed as applicable</li>
                    <li>Proof of principal place of business: rent agreement plus NOC plus electricity bill, or own property tax receipt</li>
                    <li>Bank account proof: cancelled cheque, bank statement first page or passbook</li>
                    <li>Photograph of the Authorised Signatory and Promoters or Partners</li>
                    <li>Letter of Authorisation or board resolution appointing the Authorised Signatory</li>
                    <li>Self assessment workings showing monthly B2B output tax below Rs 2,50,000</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar Name Mismatch With PAN</td><td>Even a small variation between PAN and Aadhaar name causes the Rule 14A OTP step to fail and the application drops to standard verification.</td><td>Patron Accounting runs a pre-filing name match check and guides Aadhaar update via UIDAI before triggering REG-01.</td></tr>
                        <tr><td>Threshold Slippage Mid Year</td><td>Growing startups can cross the Rs 2,50,000 B2B output tax ceiling within a quarter, exposing the taxpayer to cancellation under Section 29.</td><td>We set up automated monthly monitoring and trigger FORM GST REG-32 well before the breach.</td></tr>
                        <tr><td>Biometric Suvidha Kendra Visit Conflict</td><td>Risk flagged applicants must complete biometric authentication at a GST Suvidha Kendra within 15 days, which is hard for promoters in different cities.</td><td>Patron coordinates appointments at the GSK closest to the promoter and tracks the 15 day window.</td></tr>
                        <tr><td>Withdrawal Application Rejection</td><td>Pending returns or active cancellation proceedings under Section 29 block FORM GST REG-32.</td><td>We confirm three months of returns are filed before 1 April 2026, or one tax period afterwards, and clear any open notices before lodging the withdrawal.</td></tr>

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
            <h2 class="section-title">Patron Accounting Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges) - Rule 14A end to end filing</td></tr>
                        <tr><td>Aadhaar Authentication Coordination</td><td>Included</td></tr>
                        <tr><td>FORM GST REG-03 Reply via REG-04 (if flagged)</td><td>Included in the package</td></tr>
                        <tr><td>FORM GST REG-32 Withdrawal Filing (when needed)</td><td>Quoted separately based on outstanding returns</td></tr>
                        <tr><td>Government Fees for GST Registration</td><td>NIL - the Government does not levy any fee</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Rule 14A GST Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20want%20a%20Rule%2014A%20fast%20track%20GST%20registration%20in%203%20working%20days.%20Please%20share%20the%20process%20and%20fees." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document collection and self assessment</td><td>1 working day</td></tr>
                        <tr><td>FORM GST REG-01 Part A and Part B filing</td><td>Same working day</td></tr>
                        <tr><td>Aadhaar OTP authentication</td><td>Real time (biometric may add 1-2 days)</td></tr>
                        <tr><td>Rule 9A automated risk analysis</td><td>Up to 3 working days</td></tr>
                        <tr><td>GSTIN issuance in FORM GST REG-06</td><td>Within 3 working days of REG-01 submission</td></tr>
                        <tr><td>Reply to FORM GST REG-03 (if flagged)</td><td>Within 7 days of the notice</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Statutory deadline:</strong> Aadhaar authentication must be completed within 15 days of the draft application; failure invalidates the REG-01.</p>

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
            <h2 class="section-title">Benefits of Filing Through Patron Accounting</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                <h3 class="feature-title">CA-Led Self Assessment</h3>
                <p class="feature-desc">Defends the Rule 14A choice if challenged by the officer.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8" cy="12" r="2.5"/><path d="M13 10h5M13 14h3"/></svg></div>
                <h3 class="feature-title">Aadhaar Pre-Check</h3>
                <p class="feature-desc">Prevents OTP failure and a downgrade to the manual verification route.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg></div>
                <h3 class="feature-title">Threshold Monitoring Dashboard</h3>
                <p class="feature-desc">You know before a breach of the Rs 2,50,000 ceiling.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3 class="feature-title">One CA Team End to End</h3>
                <p class="feature-desc">The same firm continues your GSTR-1, GSTR-3B and annual return compliance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                <h3 class="feature-title">Single Point of Contact</h3>
                <p class="feature-desc">One contact for REG-03 clarifications and REG-32 withdrawals.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3 class="feature-title">Scrutiny-Ready Documentation</h3>
                <p class="feature-desc">Withstands GST officer scrutiny and Rule 21 cancellation risk.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Processed | 15+ Years</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone and 10,000+ other businesses across India.</p>
                <p>In November 2025, 78 percent of Rule 14A applications submitted within the first 60 days of the scheme being notified received a GSTIN within the 3 working day window (CBIC GSTN data). Patron Accounting matched this rate for its early applicants by enforcing Aadhaar name match before filing.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India both in-person and remotely.</strong> See our <a href="https://www.patronaccounting.com/gst-registration/pune">GST registration support in Pune</a> for local assistance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rule 14A vs Standard GST Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Rule 14A Route</th><th>Standard Rule 8 Route</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Rule</td><td>Rule 14A, CGST Rules, 2017</td><td>Rule 8 and Rule 9, CGST Rules, 2017</td></tr>
                        <tr><td>Effective Date</td><td>1 November 2025 onwards</td><td>1 July 2017 onwards</td></tr>
                        <tr><td>Eligibility Cap</td><td>Monthly B2B output tax below Rs 2,50,000</td><td>No cap; any taxpayer</td></tr>
                        <tr><td>Aadhaar Authentication</td><td>Mandatory OTP or biometric (except Sec 25(6D))</td><td>Mandatory for most, biometric for high risk</td></tr>
                        <tr><td>Physical Verification</td><td>Generally waived (system led)</td><td>Possible under Rule 25</td></tr>
                        <tr><td>Approval Timeline</td><td>3 working days under the Rule 9A risk engine</td><td>7 to 30 days depending on verification</td></tr>
                        <tr><td>Multiple Registrations Same State/UT</td><td>Not permitted under one PAN</td><td>Permitted for distinct business verticals</td></tr>
                        <tr><td>Exit Mechanism</td><td>FORM GST REG-32 with conditions</td><td>Standard cancellation under Section 29</td></tr>
                        <tr><td>Best For</td><td>Small B2B sellers, freelancers, sub-contractors</td><td>All other taxpayers including B2C and high volume</td></tr>

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
            <h2 class="section-title">Partner Services</h2>
            <div class="content-text">
                
                <p>Rule 14A registration is one part of the small business compliance stack. Patron also handles:</p>
                <ul>
                    <li><a href="https://www.patronaccounting.com/gst-services">GST Services</a> - the complete GST services hub covering registration, returns, ITC, refunds, notices and audits.</li>
                    <li><a href="https://www.patronaccounting.com/gst-registration">GST Registration</a> - the standard route for taxpayers above the Rs 2,50,000 monthly B2B threshold.</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns">GST Returns</a> - filing including GSTR-1, GSTR-3B, GSTR-9 and IFF.</li>
                    <li><a href="https://www.patronaccounting.com/udyam-registration">Udyam Registration</a> - to access MSME schemes alongside your new GSTIN.</li>
                    <li><a href="https://www.patronaccounting.com/startup-registration">Startup Registration</a> - under DPIIT for tax holidays and ESOP benefits.</li>
                    <li><a href="https://www.patronaccounting.com/tan-registration">TAN Registration</a> - if you cross TDS deduction thresholds.</li>
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
                
                <p><strong>Governing Act:</strong> Central Goods and Services Tax Act, 2017 read with the Central Goods and Services Tax Rules, 2017.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Provision</th><th>Subject</th></tr></thead>
                    <tbody>
                        <tr><td>Rule 14A, CGST Rules, 2017</td><td>Option for taxpayers having monthly output tax liability below the threshold limit</td></tr>
                        <tr><td>Rule 9A, CGST Rules, 2017</td><td>Grant of registration electronically within 3 working days</td></tr>
                        <tr><td>Rule 8, CGST Rules, 2017</td><td>Application for registration via FORM GST REG-01</td></tr>
                        <tr><td>Section 25(6C), CGST Act, 2017</td><td>Aadhaar authentication for registration</td></tr>
                        <tr><td>Section 25(6D), CGST Act, 2017</td><td>Notified exceptions to Aadhaar authentication</td></tr>
                        <tr><td>Section 29, CGST Act, 2017</td><td>Cancellation of registration</td></tr>
                        <tr><td>Section 122, CGST Act, 2017</td><td>Penalty for offences</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;"><strong>Enabling notification:</strong> Notification No. 18/2025-Central Tax dated 31 October 2025 (Central Goods and Services Tax (Fourth Amendment) Rules, 2025), issued by the Department of Revenue, Ministry of Finance, Government of India, effective 1 November 2025.</p>
                <p style="margin-top:12px;"><strong>Withdrawal conditions under Rule 14A:</strong> all returns from the effective date of registration up to the date of FORM GST REG-32 must be filed. If the withdrawal application is filed before 1 April 2026, returns for at least 3 months must be filed; if on or after 1 April 2026, returns for at least 1 tax period. No amendment or cancellation application under Rule 14A should be pending, and no Section 29 cancellation proceedings should be initiated or pending. After FORM GST REG-33 (the order allowing withdrawal) is issued, the taxpayer may report B2B output tax exceeding Rs 2,50,000 from the first day of the succeeding month.</p>
                <p style="margin-top:12px;"><strong>Penalty exposure:</strong> continuing to operate under Rule 14A while exceeding the Rs 2,50,000 monthly B2B output tax limit without filing FORM GST REG-32 exposes the taxpayer to cancellation under Section 29 and a general penalty under Section 122 of up to Rs 10,000 or an amount equal to the tax evaded, whichever is higher.</p>
                <p style="margin-top:12px;">Authoritative references: <a href="https://taxinformation.cbic.gov.in/" target="_blank" rel="noopener">CBIC Notification 18/2025-Central Tax</a>, the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST common portal</a>, and <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code (CGST Act, 2017)</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on what Rule 14A is, eligibility, the Rs 2.5 lakh threshold, withdrawal, the threshold breach, the difference from regular registration, Aadhaar, and multi-State registration.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Rule 14A GST Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Rule 14A in GST registration?</h3>
                        <div class="faq-expanded__a"><p>Rule 14A of the CGST Rules, 2017 is an optional, Aadhaar based fast track GST registration scheme that grants a GSTIN within 3 working days for applicants whose monthly output tax on B2B supplies stays below Rs 2,50,000. It was inserted by Notification 18/2025-Central Tax dated 31 October 2025 and is effective from 1 November 2025.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who is eligible for GST registration under Rule 14A?</h3>
                        <div class="faq-expanded__a"><p>Any taxpayer applying through FORM GST REG-01 whose self assessed monthly output tax on supplies to registered persons does not exceed Rs 2,50,000 across CGST, SGST/UTGST, IGST and compensation cess. Aadhaar authentication of the Primary Authorised Signatory and one Promoter or Partner is mandatory, except for persons notified under Section 25(6D) of the CGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the threshold limit under Rule 14A?</h3>
                        <div class="faq-expanded__a"><p>The threshold is Rs 2,50,000 of total monthly output tax payable on supplies to registered persons (B2B). It is calculated across CGST, SGST or UTGST, IGST and compensation cess for that month. Output tax on B2C supplies to unregistered persons is excluded from this calculation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Rule 14A GST registration kaise kare?</h3>
                        <div class="faq-expanded__a"><p>GST portal par jaake Services > Registration > New Registration kholiye. FORM GST REG-01 Part A me PAN, name, email, mobile bharke TRN lijiye. Part B me 'Option for registration under Rule 14A' field ke saamne 'Yes' select karke declaration tick kijiye. Aadhaar OTP authentication karaiye, documents upload kariye aur DSC ya EVC se submit kariye. 3 working din me GSTIN aa jaayega.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How can I withdraw from Rule 14A registration?</h3>
                        <div class="faq-expanded__a"><p>File FORM GST REG-32 on the GST portal. Before 1 April 2026, you must have filed returns for at least 3 months; on or after 1 April 2026, at least 1 tax period. No amendment, cancellation or Section 29 proceeding should be pending. On approval, FORM GST REG-33 is issued and you may report B2B output tax above Rs 2,50,000 from the first day of the succeeding month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if my B2B output tax crosses Rs 2.5 lakh under Rule 14A?</h3>
                        <div class="faq-expanded__a"><p>You must apply for withdrawal in FORM GST REG-32 before continuing supplies that breach the limit. Operating under Rule 14A while exceeding the threshold exposes you to cancellation under Section 29 of the CGST Act and a penalty under Section 122 of up to Rs 10,000 or an amount equal to the tax evaded, whichever is higher.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is Rule 14A registration different from regular GST registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. The application is still through FORM GST REG-01, but Part B has a new field where you opt in to Rule 14A. Approval is fully system driven under Rule 9A within 3 working days, physical verification is generally waived for low risk cases, and you cannot hold multiple Rule 14A registrations in the same State or UT under the same PAN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is Aadhaar authentication mandatory for Rule 14A?</h3>
                        <div class="faq-expanded__a"><p>Yes. Notification 18/2025-Central Tax inserted instruction 8A in FORM GST REG-01 stating that any person opting for Rule 14A must undergo OTP based Aadhaar authentication. The only exception is for persons notified under Section 25(6D) of the CGST Act, 2017, such as a department or local authority.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Can I take Rule 14A registration in two States?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only one Rule 14A registration is permitted per State or Union Territory under the same PAN. Two registrations in different States under one PAN, with each State below the Rs 2,50,000 monthly B2B output tax threshold, is allowed.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>When did Rule 14A come into effect?</strong> 1 November 2025, notified vide Notification 18/2025-Central Tax dated 31 October 2025.</li>
                    <li><strong>Threshold under Rule 14A?</strong> Rs 2,50,000 monthly output tax on B2B supplies.</li>
                    <li><strong>Timeline for GSTIN?</strong> 3 working days from REG-01 submission, subject to Aadhaar authentication.</li>
                    <li><strong>Form for withdrawal?</strong> FORM GST REG-32 (application); FORM GST REG-33 is the approval order.</li>
                    <li><strong>Authority?</strong> CBIC and GSTN.</li>
                    <li><strong>Statutory penalty for breach?</strong> Cancellation under Section 29 plus general penalty under Section 122 of the CGST Act.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Timing Matters Under Rule 14A</h2>
            <div class="content-text">
                
                <p>Aadhaar authentication must be completed within 15 days of the draft REG-01 being submitted; failure invalidates the application and forces a refile.</p>
                <p>If you cross Rs 2,50,000 monthly B2B output tax without filing FORM GST REG-32, every month of continued reporting accumulates Section 122 penalty exposure of up to Rs 10,000 or the tax evaded, whichever is higher. Plan filing and exit early.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">The Fast Track Route for Small B2B Taxpayers</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">Rule 14A GST Registration is the most significant simplification for small B2B taxpayers since GST was rolled out in 2017. The 3 working day Aadhaar based route, when supported by accurate self assessment and disciplined return filing, lets a small service provider, freelancer or sub-contractor enter the GST system within a week instead of a month.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS led firm with 15+ years of compliance experience across Pune, Mumbai, Delhi and Gurugram, has filed Rule 14A applications since the scheme went live on 1 November 2025 and supports clients through both onboarding and FORM GST REG-32 exit when the business outgrows the threshold.</p>
                <p style="color:rgba(255,255,255,0.92);">If you outgrow the threshold, move to standard <a href="https://www.patronaccounting.com/gst-registration" style="color:#fff;text-decoration:underline;">GST Registration</a>, keep your filings clean with our <a href="https://www.patronaccounting.com/gst-returns" style="color:#fff;text-decoration:underline;">GST Returns</a> service, and unlock MSME benefits with <a href="https://www.patronaccounting.com/udyam-registration" style="color:#fff;text-decoration:underline;">Udyam Registration</a>.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20want%20a%20Rule%2014A%20fast%20track%20GST%20registration%20in%203%20working%20days.%20Please%20share%20the%20process%20and%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Rule 14A GST Registration%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Rule 14A GST Registration%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <div class="pa-city-block">
                <div class="pa-block-title">Partner Services</div>
                <div class="pa-block-sub">End-to-end support for the small business compliance stack</div>
                <div class="pa-cross-grid">
                    <a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/udyam-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 26 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 1 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 1 cadence) and on any amendment to Rule 14A or Notification 18/2025-Central Tax, a threshold revision, a Form REG-32 or REG-33 change, or the 1 April 2026 transition for the withdrawal returns rule.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026-27 ITR filing is live</strong> - get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>





<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    let current = '';
    sections.forEach(function(section) {
        const sectionTop = section.offsetTop - 120;
        if (pageYOffset >= sectionTop) { current = section.getAttribute('id'); }
    });
    tocBtns.forEach(function(btn) {
        btn.classList.remove('active');
        if (btn.getAttribute('href') === '#' + current) { btn.classList.add('active'); }
    });
});
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

<script>
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = '1 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>

