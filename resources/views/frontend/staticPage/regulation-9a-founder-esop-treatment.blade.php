@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Regulation 9A Founder ESOP Treatment 2026: Pre-IPO | Patron Accounting</title>
    <meta name="description" content="SEBI Regulation 9A (8 Sep 2025) lets promoter-classified founders keep ESOPs granted a year before the DRHP. We structure and defend it. From Rs 49,999.">
    <link rel="canonical" href="/regulation-9a-founder-esop-treatment">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Regulation 9A Founder ESOP Treatment 2026: Pre-IPO | Patron Accounting">
    <meta property="og:description" content="SEBI Regulation 9A (8 Sep 2025) lets promoter-classified founders keep ESOPs granted a year before the DRHP. We structure and defend it. From Rs 49,999.">
    <meta property="og:url" content="/regulation-9a-founder-esop-treatment">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Regulation 9A Founder ESOP Treatment 2026: Pre-IPO | Patron Accounting">
    <meta name="twitter:description" content="SEBI Regulation 9A (8 Sep 2025) lets promoter-classified founders keep ESOPs granted a year before the DRHP. We structure and defend it. From Rs 49,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment/#service",
        "name": "Regulation 9A Founder ESOP Treatment",
        "description": "Patron Accounting assesses, structures and defends founder ESOPs under SEBI Regulation 9A of the SBEB Regulations, so options and SARs granted at least one year before the DRHP filing survive a founder's reclassification as a promoter at IPO, with grant-history review, IPO-timeline planning, documentation and due-diligence support, across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Initial public offering", "sameAs": "https://en.wikipedia.org/wiki/Initial_public_offering" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Regulation 9A Founder ESOP Treatment Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Regulation 9A Founder ESOP Assessment and Structuring" },
                    "price": "49999",
                    "priceCurrency": "INR",
                    "description": "Grant-history assessment through to full structuring, documentation and DRHP support. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "Regulation 9A Founder ESOP Treatment", "item": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is Regulation 9A of the SBEB Regulations?",
                "acceptedAnswer": { "@type": "Answer", "text": "Regulation 9A, notified on 8 September 2025, lets an employee who is identified as a promoter or promoter-group member in the draft offer document continue to hold and exercise options, SARs or other benefits, provided they were granted at least one year before the DRHP filing. It is a carve-out from the general bar on promoters holding ESOPs, introduced to protect genuine pre-IPO founder grants when founders are reclassified as promoters." }
            },
            {
                "@type": "Question",
                "name": "Can a founder keep ESOPs after becoming a promoter at IPO?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes, if the grant qualifies under Regulation 9A. The founder must be classified as a promoter or promoter-group member in the draft offer document, and the ESOPs or SARs must have been granted at least one year before the DRHP filing. If those conditions are met, the founder can continue to hold and exercise the benefits, both vested and unvested, in line with the scheme terms and the regulations." }
            },
            {
                "@type": "Question",
                "name": "Reg 9A ka one-year rule kya hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Regulation 9A ke tahat founder ke ESOP ya SAR tabhi survive karte hain jab wo DRHP filing se kam se kam ek saal pehle grant kiye gaye hon. Yeh ek cooling-off safeguard hai jo IPO se theek pehle ke opportunistic grants ko rokta hai, aur genuine purane grants ko protect karta hai." }
            },
            {
                "@type": "Question",
                "name": "Does Regulation 9A cover unvested options too?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. Regulation 9A covers both vested and unvested options, SARs and similar benefits, as long as they were granted at least one year before the DRHP filing. So a qualifying founder does not lose still-unvested options simply because they are reclassified as a promoter at the time of the IPO; they continue to vest and can be exercised per the scheme terms." }
            },
            {
                "@type": "Question",
                "name": "When was Regulation 9A introduced and why?",
                "acceptedAnswer": { "@type": "Answer", "text": "Regulation 9A was notified on 8 September 2025, following the SEBI Board meeting of 18 June 2025 and a March 2025 consultation paper. It was introduced because founders granted ESOPs as employees were being reclassified as promoters at the DRHP, leaving their pre-existing grants in legal limbo. High-profile cases highlighted the gap, and Regulation 9A resolves it with a one-year safeguard against opportunistic grants." }
            },
            {
                "@type": "Question",
                "name": "What happens if a founder grant fails the one-year test?",
                "acceptedAnswer": { "@type": "Answer", "text": "If a founder's ESOPs were granted less than one year before the DRHP filing, they fall outside the Regulation 9A carve-out and are exposed to the promoter bar once the founder is classified as a promoter. This is why timing matters so much: the safest path is to ensure founder grants are made with a clear one-year cushion before the IPO decision, which we assess and plan for." }
            },
            {
                "@type": "Question",
                "name": "Promoter founder ko ESOP milta hai kya naye grant ke roop mein?",
                "acceptedAnswer": { "@type": "Answer", "text": "Nahi. Regulation 9A sirf purane grants ko protect karta hai jo DRHP se ek saal pehle diye gaye the. Promoter ko naye ESOP grant karna abhi bhi SBEB Regulations ke tahat barred hai. Yeh sirf existing founder grants ke holding aur exercise ke liye carve-out hai, naye grants ke liye nahi." }
            },
            {
                "@type": "Question",
                "name": "Does Regulation 9A apply to unlisted companies too?",
                "acceptedAnswer": { "@type": "Answer", "text": "Regulation 9A is part of the SEBI SBEB Regulations, which govern listed companies and companies heading for listing through a DRHP. Purely unlisted companies follow the Companies Act and Rule 12, where the parallel carve-out for promoters is the DPIIT-startup exemption. Regulation 9A specifically addresses the IPO transition, when a private company's founders are reclassified as promoters in the offer document." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment",
        "name": "Regulation 9A Founder ESOP Treatment",
        "description": "SEBI Regulation 9A (8 Sep 2025) lets promoter-classified founders keep ESOPs granted a year before the DRHP. We structure and defend it. From Rs 49,999.",
        "url": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/regulation-9a-founder-esop-treatment/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How the Regulation 9A founder-ESOP engagement runs",
        "description": "Step-by-step process to map the grants, test against Regulation 9A, flag and fix at-risk grants, document the position, and support the DRHP.",
        "totalTime": "P35D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Map the grants",
                "text": "Collect every founder grant, its date, vesting and the planned DRHP timeline."
            },
            {
                "@type": "HowToStep",
                "name": "Test against Regulation 9A",
                "text": "Apply the one-year-before-DRHP rule and the other conditions to each grant."
            },
            {
                "@type": "HowToStep",
                "name": "Flag and fix",
                "text": "Identify at-risk grants and, where time allows, structure to bring them within the rule."
            },
            {
                "@type": "HowToStep",
                "name": "Document the position",
                "text": "Align scheme terms, grant letters and registers, and prepare the Regulation 9A rationale."
            },
            {
                "@type": "HowToStep",
                "name": "Support the DRHP",
                "text": "Help with the offer-document disclosure and defend the position in due diligence."
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com/",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "DefinedTermSet",
        "name": "Regulation 9A Founder ESOP Treatment Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Regulation 9A",
                "description": "A 2025 carve-out letting a founder classified as a promoter in the DRHP keep ESOPs granted at least one year earlier."
            },
            {
                "@type": "DefinedTerm",
                "name": "DRHP",
                "description": "The draft red herring prospectus filed with SEBI ahead of an IPO; the reference point for the one-year rule."
            },
            {
                "@type": "DefinedTerm",
                "name": "Promoter group",
                "description": "Persons and entities classified with the promoter in the offer document, barred from fresh ESOPs."
            },
            {
                "@type": "DefinedTerm",
                "name": "One-year rule",
                "description": "The benefit must have been granted at least one year before the DRHP filing to qualify under Regulation 9A."
            }
        ]
    }
    </script>
@endsection

@section('content')
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
                        Regulation 9A Founder ESOP Treatment
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>The rule:</span> Regulation 9A, notified 8 September 2025, under the SBEB Regulations.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>The test:</span> benefits granted at least one year before the DRHP filing.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What we do:</span> assess, structure and document founder grants to qualify and survive.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Engagement:</span> from Rs 49,999 (Exl GST and Govt. Charges), often within IPO readiness.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on SEBI and IPO readiness</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Regulation 9A Founder ESOP Treatment%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Regulation 9A Founder ESOP Treatment%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20our%20founders%20hold%20ESOPs%20and%20we%20are%20heading%20for%20an%20IPO.%20Please%20help%20us%20assess%20and%20structure%20them%20under%20SEBI%20Regulation%209A%20so%20they%20survive%20the%20promoter%20reclassification." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Regulation 9A Founder ESOP Treatment',
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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Founders and IPO-bound companies trust Patron Accounting to assess, structure and defend their founder ESOPs under SEBI Regulation 9A before the DRHP.',
])

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
            
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Reg 9A Says</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">The Conditions</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">How We Structure</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">How It Runs</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">The Gap It Closes</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Why It Matters</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Why Introduced</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What This Service Covers</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Regulation 9A Founder ESOP Treatment Services at a Glance</strong></p>
                    <p>Regulation 9A lets a founder who is classified as a promoter in the DRHP keep and exercise ESOPs or SARs granted at least one year before the DRHP filing. We make sure your founder grants qualify and survive the IPO.</p>
                </div>
                <p>If your founders hold ESOPs and you are heading for an IPO, Regulation 9A is the rule that decides whether they keep them. Patron Accounting structures and defends founder ESOPs under SEBI Regulation 9A, so options and SARs granted before the IPO survive the founder's reclassification as a promoter in the draft offer document.</p>
                <p>Founders are usually granted ESOPs as employees, long before any IPO. But when the company files its draft offer document, those same founders are typically reclassified as promoters, and the SBEB Regulations bar promoters from ESOPs. Regulation 9A is the carve-out that lets pre-existing founder grants survive. Getting it right is one of the most valuable things you can do before a listing.</p>
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
                <h2 class="section-title">What Regulation 9A Says</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Regulation 9A was inserted into the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 by the 2025 amendment, after Regulation 9. It is headed "Employee identified as promoter or part of the promoter group in the draft offer document". In plain terms:</p>
                    <div class="highlight-box" style="margin:14px 0;">
                        <p><strong>The Regulation 9A rule</strong></p>
                        <p>An employee identified as a promoter or part of the promoter group in the draft offer document, who was granted options, a SAR or any other benefit under a scheme at least one year before the DRHP filing, may continue to hold and exercise those benefits, in accordance with the scheme terms and subject to the SBEB Regulations and other applicable laws.</p>
                    </div>
                    <p>This is a clarifying carve-out, not a free pass. The benefit must have been a genuine pre-existing grant, made well before the IPO, not an opportunistic grant on the eve of listing. That is exactly what the one-year condition tests.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Regulation 9A Founder ESOP Treatment:</strong></p>
                    <ul>
                        <li><strong>Regulation 9A:</strong> the 2025 carve-out for pre-IPO founder grants, notified 8 September 2025.</li>
                        <li><strong>DRHP:</strong> the draft offer document; the one-year clock runs to its filing.</li>
                        <li><strong>One-year rule:</strong> the benefit must have been granted at least a year before the DRHP.</li>
                        <li><strong>Vested and unvested:</strong> both are covered by the carve-out.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Regulation 9A Founder ESOP Treatment</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Notified</span>
                        <strong>8 September 2025</strong>
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
            <h2 class="section-title">The Regulation 9A Conditions</h2>
            <div class="content-text">
                
                <p>For founder ESOPs to survive under Regulation 9A, each condition must be met. We check them grant by grant:</p>
                <ul>
                    <li><strong>Promoter at DRHP:</strong> the founder is identified as a promoter or promoter-group member in the draft offer document.</li>
                    <li><strong>Granted as a benefit:</strong> the benefit is an option, SAR or similar benefit under a scheme.</li>
                    <li><strong>One-year rule:</strong> it was granted at least one year before the DRHP filing.</li>
                    <li><strong>Scheme terms:</strong> holding and exercise follow the scheme's own terms.</li>
                    <li><strong>Regulatory compliance:</strong> it complies with the SBEB Regulations and other applicable laws.</li>
                </ul>
                <p><strong>Vested and unvested:</strong> the carve-out covers both already-vested and still-unvested benefits, so a qualifying founder does not lose unvested options merely because of the promoter reclassification.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How We Structure and Defend Founder ESOPs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Grant-History Assessment</td><td>We review every founder grant against the one-year-before-DRHP test and flag which qualify under Regulation 9A and which are at risk.</td></tr>
                        <tr><td>IPO-Timeline Planning</td><td>We work back from your intended DRHP date so founder grants are made, or were made, with the one-year cushion the rule requires.</td></tr>
                        <tr><td>Scheme and Documentation Alignment</td><td>We make sure the scheme terms, grant letters and registers support the Regulation 9A position and will hold up in IPO due diligence.</td></tr>
                        <tr><td>DRHP and Disclosure Support</td><td>We help articulate the founder-ESOP position in the offer document and the related SBEB and LODR disclosures.</td></tr>
                        <tr><td>Defence in Due Diligence</td><td>We prepare the Regulation 9A rationale and evidence so the founder grants withstand scrutiny from merchant bankers, counsel and SEBI.</td></tr>

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
            <h2 class="section-title">How the Engagement Runs</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From mapping the grants to defending the position in due diligence, we run the Regulation 9A engagement end to end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Map the grants</h3>
        <p class="step-description">We collect every founder grant, its date, vesting and the planned DRHP timeline.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Every grant</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRHP timeline</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="32" y="20" width="56" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="46" cy="38" r="3" fill="#E8712C"/><circle cx="46" cy="52" r="3" fill="#E8712C"/><circle cx="46" cy="66" r="3" fill="#F5A623"/><line x1="54" y1="38" x2="76" y2="38" stroke="#14365F" stroke-width="1.4" opacity="0.4"/><line x1="54" y1="52" x2="76" y2="52" stroke="#14365F" stroke-width="1.4" opacity="0.4"/><line x1="54" y1="66" x2="70" y2="66" stroke="#14365F" stroke-width="1.4" opacity="0.4"/></svg></div>
            <span class="illustration-label">Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Test against Regulation 9A</h3>
        <p class="step-description">We apply the one-year-before-DRHP rule and the other conditions to each grant.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>One-year rule</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All conditions</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 32 v18 l12 7" stroke="#E8712C" stroke-width="2.4" stroke-linecap="round" fill="none"/><text x="60" y="90" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">1 year</text></svg></div>
            <span class="illustration-label">Tested</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Flag and fix</h3>
        <p class="step-description">We identify at-risk grants and, where time allows, structure to bring them within the rule.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>At-risk flagged</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Structured</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="46" y1="20" x2="46" y2="80" stroke="#14365F" stroke-width="2.2" stroke-linecap="round"/><path d="M46 24 h26 l-6 8 6 8 h-26 z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.4"/></svg></div>
            <span class="illustration-label">Fixed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Document the position</h3>
        <p class="step-description">We align scheme terms, grant letters and registers, and prepare the Regulation 9A rationale.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents aligned</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rationale ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="36" y="16" width="48" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="46" y1="34" x2="74" y2="34" stroke="#14365F" stroke-width="1.4" opacity="0.4"/><line x1="46" y1="46" x2="74" y2="46" stroke="#14365F" stroke-width="1.4" opacity="0.4"/><path d="M48 64l5 5 9 -10" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
            <span class="illustration-label">Documented</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Support the DRHP</h3>
        <p class="step-description">We help with the offer-document disclosure and defend the position in due diligence.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Disclosure</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Defended</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="16" width="52" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="44" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DRHP</text><line x1="44" y1="58" x2="76" y2="58" stroke="#14365F" stroke-width="1.4" opacity="0.3"/><line x1="44" y1="68" x2="68" y2="68" stroke="#14365F" stroke-width="1.4" opacity="0.3"/></svg></div>
            <span class="illustration-label">DRHP-Ready</span>
            <span class="step-number-large">05</span>
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
            <h2 class="section-title">The Gap Regulation 9A Closes</h2>
            <div class="content-text">
                
                <p>Under Regulation 2(1)(i) and Regulation 9(6) of the SBEB Regulations, promoters and promoter-group members cannot be granted ESOPs. The problem was timing.</p>
                <p>A founder is granted ESOPs as an employee while the company is private. When the company decides to go public and files its DRHP, the founder, by virtue of shareholding or control, is reclassified as a promoter. Before Regulation 9A, the regulations neither clearly allowed nor disallowed the exercise of those already-granted ESOPs once the holder became a promoter, leaving founders and companies in genuine uncertainty. Regulation 9A removes that uncertainty for grants made at least a year before the DRHP.</p>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Vested and unvested both covered</strong></p>
                    <p>A qualifying founder does not lose still-unvested options merely because of the promoter reclassification; they continue to vest and can be exercised per the scheme terms.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Founder grant made too close to the DRHP</td><td>Fails one-year rule</td><td>Assess against the one-year rule and adjust the IPO timeline where possible.</td></tr>
                        <tr><td>Uncertainty over vested vs unvested options</td><td>Position unclear</td><td>Confirm Regulation 9A covers both, and document accordingly.</td></tr>
                        <tr><td>Weak grant documentation</td><td>Due-diligence risk</td><td>Strengthen scheme terms, grant letters and registers before due diligence.</td></tr>
                        <tr><td>Promoter classification disputes at DRHP</td><td>Status contested</td><td>Map shareholding and control and align the founder-ESOP position with it.</td></tr>

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
            <h2 class="section-title">Engagement and Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 49,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Focused grant-history assessment</td><td>Lower end of the range</td></tr>
                        <tr><td>Full structuring, documentation and DRHP support</td><td>Scoped on top, often within IPO readiness</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Regulation 9A Founder ESOP Treatment consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20a%20Regulation%209A%20eligibility%20review%20of%20our%20founder%20ESOPs%20ahead%20of%20our%20IPO.%20Please%20share%20how%20it%20works.%20I%20can%20share%20our%20grant%20dates%20and%20IPO%20timeline." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Focused Regulation 9A grant-history assessment</td><td>1 to 2 weeks</td></tr>
                        <tr><td>Restructuring or documentation work before a DRHP</td><td>3 to 5 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>The one-year rule is measured from the DRHP filing</strong>, so the most valuable time to engage is well before the company decides to list, not in the final run-up.</p>

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
            <h2 class="section-title">Why This Matters So Much</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <h3 class="feature-title">Founder wealth at stake</h3>
            <p class="feature-text">Founder ESOPs can be worth a large share of a founder's net worth at IPO.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
            <h3 class="feature-title">Lost if it fails</h3>
            <p class="feature-text">A grant that fails the one-year test can be lost on promoter reclassification.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">New and lightly charted</h3>
            <p class="feature-text">Regulation 9A is new, and a clean, documented position avoids costly disputes.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
            <h3 class="feature-title">A due-diligence checkpoint</h3>
            <p class="feature-text">Getting it right is a standard, scrutinised IPO due-diligence checkpoint.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders and IPO-Bound Companies</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years on SEBI compliance, IPO readiness and founder equity for Indian companies.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Regulation 9A Was Introduced</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Context case</th><th>What it showed</th></tr></thead>
                    <tbody>
                        <tr><td>Founder-trust transfer case (settled May 2025)</td><td>A founder transferred shares to a family trust and was classified as non-promoter in the DRHP, securing otherwise-impermissible ESOPs; SEBI alleged a breach, and it settled with about 21 million ESOPs surrendered and a three-year ban on fresh listed-company ESOPs.</td></tr>
                        <tr><td>Healthcare promoter-reclassification case</td><td>A company that initially stated it had no identifiable promoters had to reclassify its founders as promoters before its IPO.</td></tr>
                        <tr><td>March 2025 consultation</td><td>These cases and the consultation led SEBI to introduce Regulation 9A so genuine pre-IPO founder grants are protected.</td></tr>
                        <tr><td>The one-year safeguard</td><td>The one-year rule prevents last-minute, opportunistic grants while protecting genuine older ones.</td></tr>

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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <p>This page sits within our listed-company ESOP work, alongside SEBI SBEB regulations compliance and the listed-company ESOP annual disclosure and reporting spoke, all delivered through our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>.</p>
                <p>For the underlying scheme, see <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>. IPO readiness also needs <a href="/secretarial-audit">secretarial audit</a> and <a href="/statutory-audit">statutory audit</a>. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework</h2>
            <div class="content-text">
                
                <p><strong>Regulation 9A:</strong> inserted into the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 by the SBEB (Amendment) Regulations 2025, notified 8 September 2025, following the SEBI Board meeting of 18 June 2025 and the 20 March 2025 consultation paper.</p>
                <p><strong>The promoter bar:</strong> Regulation 2(1)(i) read with Regulation 9(6) bars promoters and promoter-group members from being granted ESOPs; Regulation 9A is the carve-out for pre-existing founder grants.</p>
                <p><strong>The one-year test:</strong> the options, SAR or other benefits must have been granted at least one year before the filing of the draft offer document, and holding and exercise follow the scheme terms and applicable law.</p>
                <p><strong>Companies Act and DPIIT:</strong> the listed-company promoter bar mirrors the Companies Act position under Rule 12, where the parallel carve-out is the DPIIT-startup exemption for unlisted companies.</p>
                <p>Authoritative sources: the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">Securities and Exchange Board of India</a> (SBEB Amendment Regulations 2025, Regulation 9A), the <a href="https://www.sebi.gov.in/legal/regulations" target="_blank" rel="noopener">SEBI legal framework and notifications</a>, the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Companies Act, Rule 12), and the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on what Regulation 9A is, whether founders keep ESOPs after the promoter reclassification, the one-year rule, vested-and-unvested coverage and why it was introduced.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Regulation 9A Founder ESOP Treatment',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Regulation 9A of the SBEB Regulations?</h3>
                        <div class="faq-expanded__a"><p>Regulation 9A, notified on 8 September 2025, lets an employee who is identified as a promoter or promoter-group member in the draft offer document continue to hold and exercise options, SARs or other benefits, provided they were granted at least one year before the DRHP filing. It is a carve-out from the general bar on promoters holding ESOPs, introduced to protect genuine pre-IPO founder grants when founders are reclassified as promoters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can a founder keep ESOPs after becoming a promoter at IPO?</h3>
                        <div class="faq-expanded__a"><p>Yes, if the grant qualifies under Regulation 9A. The founder must be classified as a promoter or promoter-group member in the draft offer document, and the ESOPs or SARs must have been granted at least one year before the DRHP filing. If those conditions are met, the founder can continue to hold and exercise the benefits, both vested and unvested, in line with the scheme terms and the regulations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Reg 9A ka one-year rule kya hai?</h3>
                        <div class="faq-expanded__a"><p>Regulation 9A ke tahat founder ke ESOP ya SAR tabhi survive karte hain jab wo DRHP filing se kam se kam ek saal pehle grant kiye gaye hon. Yeh ek cooling-off safeguard hai jo IPO se theek pehle ke opportunistic grants ko rokta hai, aur genuine purane grants ko protect karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does Regulation 9A cover unvested options too?</h3>
                        <div class="faq-expanded__a"><p>Yes. Regulation 9A covers both vested and unvested options, SARs and similar benefits, as long as they were granted at least one year before the DRHP filing. So a qualifying founder does not lose still-unvested options simply because they are reclassified as a promoter at the time of the IPO; they continue to vest and can be exercised per the scheme terms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When was Regulation 9A introduced and why?</h3>
                        <div class="faq-expanded__a"><p>Regulation 9A was notified on 8 September 2025, following the SEBI Board meeting of 18 June 2025 and a March 2025 consultation paper. It was introduced because founders granted ESOPs as employees were being reclassified as promoters at the DRHP, leaving their pre-existing grants in legal limbo. High-profile cases highlighted the gap, and Regulation 9A resolves it with a one-year safeguard against opportunistic grants.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if a founder grant fails the one-year test?</h3>
                        <div class="faq-expanded__a"><p>If a founder's ESOPs were granted less than one year before the DRHP filing, they fall outside the Regulation 9A carve-out and are exposed to the promoter bar once the founder is classified as a promoter. This is why timing matters so much: the safest path is to ensure founder grants are made with a clear one-year cushion before the IPO decision, which we assess and plan for.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Promoter founder ko ESOP milta hai kya naye grant ke roop mein?</h3>
                        <div class="faq-expanded__a"><p>Nahi. Regulation 9A sirf purane grants ko protect karta hai jo DRHP se ek saal pehle diye gaye the. Promoter ko naye ESOP grant karna abhi bhi SBEB Regulations ke tahat barred hai. Yeh sirf existing founder grants ke holding aur exercise ke liye carve-out hai, naye grants ke liye nahi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does Regulation 9A apply to unlisted companies too?</h3>
                        <div class="faq-expanded__a"><p>Regulation 9A is part of the SEBI SBEB Regulations, which govern listed companies and companies heading for listing through a DRHP. Purely unlisted companies follow the Companies Act and Rule 12, where the parallel carve-out for promoters is the DPIIT-startup exemption. Regulation 9A specifically addresses the IPO transition, when a private company's founders are reclassified as promoters in the offer document.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>What is it?</strong> SBEB carve-out for founder ESOPs at IPO.</li>
                    <li><strong>Notified?</strong> 8 September 2025.</li>
                    <li><strong>The test?</strong> Granted 1 year before the DRHP.</li>
                    <li><strong>Covers?</strong> Vested and unvested options and SARs.</li>
                    <li><strong>New grants to promoters?</strong> Still barred.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Timing Matters</h2>
            <div class="content-text">
                
                <p>The one-year clock runs to the DRHP filing, so the window to protect a founder grant closes a full year before you file. A grant made too late simply cannot be cured. If an IPO is anywhere on the horizon, assess founder ESOPs against Regulation 9A now, while there is still time to plan, rather than discovering a problem in due diligence.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Protect Your Founder ESOPs</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">Regulation 9A is the single most important rule for founder ESOPs at IPO: it protects genuine pre-IPO grants made at least a year before the DRHP, while keeping the promoter bar intact for opportunistic ones. It is new, lightly charted, and decisive for founder wealth at listing.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of SEBI and IPO-readiness experience, assesses, structures and defends your founder ESOPs so they survive the move to a listed company.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20a%20Regulation%209A%20eligibility%20review%20of%20our%20founder%20ESOPs%20ahead%20of%20our%20IPO.%20Please%20share%20how%20it%20works.%20I%20can%20share%20our%20grant%20dates%20and%20IPO%20timeline." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Regulation 9A Founder ESOP Treatment%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Regulation 9A Founder ESOP Treatment%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Founder ESOP and IPO-Readiness Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote Regulation 9A assessment, founder-ESOP structuring and DRHP support for IPO-bound companies.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We assess and structure founder ESOPs under Regulation 9A for companies nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The grant-history review, structuring and DRHP support is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for founder ESOPs and IPO readiness</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 2 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 2 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every three months for any SEBI clarification or circular on Regulation 9A, FAQs or informal guidance, related ICDR amendments, new IPO cases interpreting the one-year rule, and further SBEB amendments (Tier 1 freshness).</p>
        </div>
    </div>
</section>



</main>






<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
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


<script>
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = "2 June 2026";
    var el1 = document.getElementById('lastUpdated');
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el1) el1.textContent = dateStr;
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection