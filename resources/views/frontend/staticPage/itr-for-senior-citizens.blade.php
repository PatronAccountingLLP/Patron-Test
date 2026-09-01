@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Senior Citizens 2026: Pension + 80TTB | Patron Accounting</title>
    <meta name="description" content="ITR for senior citizens - ITR-1 pension + interest, Section 80TTB INR 50,000 deduction, Section 207 advance tax exemption. Starting from INR 999.">
    <link rel="canonical" href="/itr-for-senior-citizens">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Senior Citizens 2026: Pension + 80TTB | Patron Accounting">
    <meta property="og:description" content="ITR for senior citizens - ITR-1 pension + interest, Section 80TTB INR 50,000 deduction, Section 207 advance tax exemption. Starting from INR 999.">
    <meta property="og:url" content="/itr-for-senior-citizens">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Senior Citizens 2026: Pension + 80TTB | Patron Accounting">
    <meta name="twitter:description" content="ITR for senior citizens - ITR-1 pension + interest, Section 80TTB INR 50,000 deduction, Section 207 advance tax exemption. Starting from INR 999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/itr-for-senior-citizens/#service",
        "name": "ITR Filing for Senior Citizens in India",
        "description": "Annual income tax return filing for senior citizens (60-79 years) and super senior citizens (80+ years). Covers ITR-1 Sahaj for pension plus interest plus one house property, Section 80TTB INR 50,000 interest deduction, Section 80D INR 50,000 health insurance, Section 80DDB INR 1 lakh specified diseases, Section 207 advance tax exemption, Section 194P super senior no-filing relief, Form 15H bank declaration, new vs old regime modelling, and e-filing on the Income Tax Department portal.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/itr-for-senior-citizens" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ITR for Senior Citizens Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "ITR-1 Sahaj Senior (Pension + Interest + 1 House)",
                    "priceCurrency": "INR",
                    "price": "999",
                    "priceSpecification": { "@type": "PriceSpecification", "price": "999", "priceCurrency": "INR", "valueAddedTaxIncluded": false }
                },
                {
                    "@type": "Offer",
                    "name": "ITR-1 with Multiple Banks + 80DDB Coordination",
                    "priceCurrency": "INR",
                    "price": "1499",
                    "priceSpecification": { "@type": "PriceSpecification", "price": "1499", "priceCurrency": "INR", "valueAddedTaxIncluded": false }
                },
                {
                    "@type": "Offer",
                    "name": "ITR-2 Senior (Capital Gains / Multiple Property)",
                    "priceCurrency": "INR",
                    "price": "2999",
                    "priceSpecification": { "@type": "PriceSpecification", "price": "2999", "priceCurrency": "INR", "valueAddedTaxIncluded": false }
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/itr-for-senior-citizens/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Senior Citizens", "item": "https://www.patronaccounting.com/itr-for-senior-citizens" }
          ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/itr-for-senior-citizens/#faq",
        "datePublished": "2026-05-27T08:00:00+05:30",
        "dateModified": "2026-06-01T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What ITR form should a senior citizen file?",
                "acceptedAnswer": { "@type": "Answer", "text": "Most senior citizens file ITR-1 Sahaj which covers pension (treated as salary), interest from banks, post office, and cooperatives, one house property income, and other sources, with total income up to INR 50 lakh. Long-term capital gains under Section 112A up to INR 1.25 lakh and agricultural income up to INR 5,000 are also accommodated. Where capital gains exceed limits, multiple house properties exist, or foreign income is involved, the senior files ITR-2 instead." }
            },
            {
                "@type": "Question",
                "name": "What is Section 80TTB and how much can a senior claim?",
                "acceptedAnswer": { "@type": "Answer", "text": "Section 80TTB of the Income-tax Act provides a deduction of up to INR 50,000 on interest income from deposits with banks (including cooperative banks), cooperative societies engaged in banking business, and post offices for individuals aged 60 years and above. This includes interest from savings accounts, fixed deposits, recurring deposits, post office monthly income scheme, and Senior Citizen Savings Scheme. It replaces Section 80TTA (INR 10,000) for non-seniors." }
            },
            {
                "@type": "Question",
                "name": "What is Section 207 advance tax exemption for seniors?",
                "acceptedAnswer": { "@type": "Answer", "text": "The proviso to Section 207 of the Income-tax Act exempts a resident senior citizen (60 years and above) who does not have any income chargeable under the head Profits and Gains of Business or Profession from the obligation to pay advance tax under Section 208. The entire annual tax liability can be paid as self-assessment tax under Section 140A before filing the return - no quarterly advance tax instalments are required." }
            },
            {
                "@type": "Question",
                "name": "What is Section 194P no-ITR-filing relief for super seniors?",
                "acceptedAnswer": { "@type": "Answer", "text": "Section 194P provides that a super senior citizen (75 years and above) who has only pension income and interest income from the same specified bank that pays the pension is exempt from filing ITR under Section 139(1). The bank performs the tax computation via Form 12BBA assessment (including standard deduction and Section 87A rebate), deducts final TDS, and remits the tax. If the super senior has any other income, they must file ITR normally." }
            },
            {
                "@type": "Question",
                "name": "Should a senior citizen choose new tax regime or old?",
                "acceptedAnswer": { "@type": "Answer", "text": "From AY 2024-25, Section 115BAC new regime is default for all individuals including seniors. The decision depends on the deduction base. Old regime allows full Chapter VI-A deductions including Section 80TTB (INR 50,000 interest), 80D (INR 50,000 health insurance), 80DDB (INR 1 lakh specified diseases), 80C, and 80G. New regime has lower slabs but only INR 75,000 standard deduction. Pensioners without business income can switch annually." }
            },
            {
                "@type": "Question",
                "name": "Can a senior citizen claim Section 80D and 80DDB together?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. Section 80D covers health insurance premium for self or spouse (up to INR 50,000 for senior; includes uninsured medical expense if no policy) plus INR 50,000 for senior parents - total up to INR 1 lakh. Section 80DDB covers actual medical expense on treatment of specified diseases (cancer, neurological, chronic renal failure, AIDS) up to INR 1 lakh for seniors, certified by a prescribed specialist. Both are independent and can be claimed in the same FY." }
            },
            {
                "@type": "Question",
                "name": "How does Form 15H help a senior avoid TDS on bank interest?",
                "acceptedAnswer": { "@type": "Answer", "text": "Form 15H is a declaration filed by a resident senior citizen with a bank, cooperative, or post office at the start of each FY stating that the estimated total income for the year will be below the basic exemption limit. On receipt of Form 15H, the bank does not deduct TDS on interest under Section 194A (which applies once interest crosses INR 50,000 for seniors). Form 15H must be re-filed each FY with each institution." }
            },
            {
                "@type": "Question",
                "name": "What is the cost of senior citizen ITR filing at Patron Accounting?",
                "acceptedAnswer": { "@type": "Answer", "text": "Starting from INR 999 one-time (exclusive of GST and government charges) for ITR-1 Sahaj filing covering pension, interest from up to two banks, one house property, and standard deductions. ITR-1 with multiple banks plus Section 80DDB coordination starts from INR 1,499. ITR-2 for seniors (capital gains, multiple property, foreign income) starts from INR 2,999. Section 194P super senior assessment and notice replies are quoted separately." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/itr-for-senior-citizens",
        "name": "ITR Filing for Senior Citizens in India",
        "description": "ITR for senior citizens - ITR-1 pension + interest, Section 80TTB INR 50,000 deduction, Section 207 advance tax exemption. Starting from INR 999.",
        "url": "https://www.patronaccounting.com/itr-for-senior-citizens",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/itr-for-senior-citizens/#service" },
        "datePublished": "2026-05-27T08:00:00+05:30",
        "dateModified": "2026-06-01T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/itr-for-senior-citizens/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to File ITR for Senior Citizens",
        "description": "Step-by-step process to file the annual income tax return for senior and super senior citizens - from document onboarding and pension classification to deduction optimisation, regime modelling, e-filing, and post-filing review.",
        "totalTime": "P7D",
        "step": [
            { "@type": "HowToStep", "position": 1, "name": "Onboarding", "text": "Collect PAN, Aadhaar, pension certificate or Form 16, bank interest certificate or Form 16A, FD/SCSS/post office deposit details, health insurance and medical bills, 80DDB certificate, and prior-year ITR." },
            { "@type": "HowToStep", "position": 2, "name": "Pension and interest mapping", "text": "Classify pension head (employer salary vs family pension) and aggregate interest across banks, post offices, and cooperatives within the Section 80TTB INR 50,000 cap." },
            { "@type": "HowToStep", "position": 3, "name": "Tax regime modelling", "text": "Run side-by-side new regime vs old regime computation and document the lower-tax choice; pension earners can switch annually." },
            { "@type": "HowToStep", "position": 4, "name": "Form 26AS / AIS / TIS reconciliation", "text": "Download from the Income Tax portal and match against pension TDS, bank interest TDS, and post office TDS; rectify mismatches before filing." },
            { "@type": "HowToStep", "position": 5, "name": "E-filing", "text": "Pay self-assessment tax under Section 140A, e-file ITR-1 (or ITR-2), and e-verify within 30 days via Aadhaar OTP, net banking, or EVC." },
            { "@type": "HowToStep", "position": 6, "name": "Post-filing and Form 15H", "text": "Track CPC processing and the Section 143(1) intimation, monitor refunds, and prepare Form 15H for the next FY where total income is below the basic exemption." }
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
        "name": "ITR for Senior Citizens Key Terms",
        "definedTerm": [
            { "@type": "DefinedTerm", "name": "Senior Citizen", "description": "Resident individual aged 60 to 79 years at any time during the previous year - eligible for higher Section 80D, 80TTB, and 80DDB limits and Section 207 advance tax exemption." },
            { "@type": "DefinedTerm", "name": "Super Senior Citizen", "description": "Resident individual aged 80 years and above - higher old-regime basic exemption (INR 5 lakh) and eligible for Section 194P no-ITR-filing relief from age 75." },
            { "@type": "DefinedTerm", "name": "Section 80TTB", "description": "Deduction up to INR 50,000 on interest income from deposits with banks, post offices, and cooperative societies for seniors aged 60+; replaces Section 80TTA." },
            { "@type": "DefinedTerm", "name": "Section 207 Proviso", "description": "Senior citizens 60+ without business or professional income are exempt from advance tax; tax is paid as self-assessment under Section 140A before filing." },
            { "@type": "DefinedTerm", "name": "Section 194P", "description": "Super seniors (75+) with only pension and same-bank interest are relieved from filing ITR; the bank assesses tax via Form 12BBA." },
            { "@type": "DefinedTerm", "name": "Form 15H", "description": "Declaration by a resident senior to a bank or post office for nil TDS on interest where estimated total income is below the basic exemption limit." }
        ]
    }
    </script>
@endsection

@section('content')

<div class="breadcrumb-wrap" style="max-width:1200px;margin:0 auto;padding:6px 20px 0;">
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
    ['name' => 'ITR for Senior Citizens', 'url' => '/itr-for-senior-citizens'],
]])
</div>

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
                        ITR for Senior Citizens
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, pension certificate, Form 16 / 16A, bank interest certificate, Form 26AS, AIS</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 999 (Exl GST and Govt. Charges) one-time for the FY return</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Retired individuals 60+ years; super seniors 80+ years; pensioners and FD / post office depositors</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Due date 31 July 2026 for AY 2026-27 (FY 2025-26)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by retired professionals, pensioners, family pension receivers, and super senior citizens across Pune, Mumbai, Delhi, and Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ITR for Senior Citizens%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR for Senior Citizens%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20am%20a%20senior%20citizen%20and%20would%20like%20help%20filing%20my%20ITR%20for%20AY%202026-27%20(pension%20%2B%20interest).%20Please%20share%20the%20process%2C%20documents%2C%20and%20fees." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for Senior Citizens',
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
    'ctaText'    => 'Retired professionals, pensioners, and super senior citizens trust Patron for accurate, deduction-optimised ITR filing.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Needs It</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">DIY vs Patron</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Senior Citizen ITR Filing - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Senior Citizens Services at a Glance</strong></p>
                    <p>Senior citizens (60+) typically file ITR-1 Sahaj covering pension, interest, one house property, and other sources. Section 80TTB allows an INR 50,000 interest deduction (replacing 80TTA INR 10,000). Section 80D allows INR 50,000 for health insurance / medical (vs INR 25,000 for under-60) and Section 80DDB allows INR 1 lakh for specified diseases. Section 207 proviso exempts non-business seniors from advance tax, and Section 194P exempts super seniors (75+) with only pension plus same-bank interest from ITR filing (bank assessment via Form 12BBA). The Section 194A TDS threshold on bank interest for seniors is INR 1,00,000 (raised from INR 50,000 with effect from 1 April 2025); Form 15H is filed for nil-TDS. Old-regime basic exemption is INR 3 lakh (60-79) / INR 5 lakh (80+); the new regime is INR 3 lakh for all and is the default, but pensioners can switch annually. Patron Accounting starts from INR 999 one-time.</p>
                </div>
                <p>Senior citizen ITR is the simplest return in the personal tax landscape - typically ITR-1 Sahaj covering pension (treated as salary under Section 17(1)(ii) of the Income-tax Act if from a former employer, or income from other sources under Section 56(2)(x) if family pension), bank and post office interest, one self-occupied or let-out house property, and other small sources. The Income-tax Act provides several senior-friendly provisions - Section 80TTB allows a deduction of up to INR 50,000 on interest from deposits with banks, cooperatives, and post offices for individuals aged 60 and above (replacing the INR 10,000 Section 80TTA deduction available to non-seniors); Section 80D allows up to INR 50,000 for health insurance premium plus medical expenditure for self or senior parents (vs INR 25,000 for non-seniors); and Section 80DDB allows up to INR 1 lakh for treatment of specified diseases (vs INR 40,000 for non-seniors).</p>
                <p>Two relief provisions are especially relevant. First, the Section 207 proviso exempts senior citizens (60+) without business or professional income from the obligation to pay advance tax, removing the quarterly 15/45/75/100 percent burden - self-assessment tax can be paid in a single payment before filing. Second, Section 194P provides a no-ITR-filing relief for super senior citizens (75+) who have only pension and bank interest from the same specified bank; the bank computes the tax via Form 12BBA assessment, deducts TDS, and the super senior is exempt from filing under Section 139(1). Section 194A sets the TDS threshold on bank interest for seniors at INR 1,00,000 (raised from INR 40,000/50,000 with effect from 1 April 2025); Form 15H allows a senior to declare to the bank for nil TDS where total income is below the basic exemption limit. From AY 2024-25 the Section 115BAC new regime is the default; salary and pension earners (without business income) can switch annually unlike business income earners. Patron Accounting LLP runs end-to-end senior citizen ITR filing starting from INR 999 one-time per FY return.</p>
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
                <h2 class="section-title">What Is ITR for Senior Citizens?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR for senior citizens is the annual income tax return filing engagement for individuals aged 60 years and above (and 80 years and above as super senior citizens) reporting income from pension (employer / government / family), interest from bank / post office / cooperative deposits, one or more house properties, capital gains where any, and other sources. The engagement covers form selection (ITR-1 Sahaj for most cases; ITR-2 where capital gains exceed limits, multiple property, or foreign income; ITR-3 in rare cases with business income), pension head classification (Section 17(1)(ii) employer pension as salary; Section 56(2)(x) family pension as other sources), and senior-specific deduction optimisation under Section 80TTB (INR 50,000 interest), Section 80D (INR 50,000 health insurance), Section 80DDB (INR 1 lakh specified diseases), Section 80U for self disability if applicable, and Section 80G donations.</p><p>It also includes new vs old regime modelling, Form 26AS / AIS / TIS reconciliation, and Section 194P assessment of no-ITR-filing eligibility for super seniors 75+. A complete senior return engagement further addresses Form 15H submission to banks for nil-TDS on interest where total income is below the basic exemption, Section 207 proviso advance tax exemption documentation, Section 87A rebate computation (INR 25,000 in the new regime up to INR 7 lakh; INR 12,500 in the old regime up to INR 5 lakh), standard deduction (INR 75,000 in the new regime / INR 50,000 in the old regime for pension as salary), family pension standard deduction (INR 25,000 in the new regime from Finance Act 2024 / one-third or INR 15,000 lower in the old regime), e-verification within 30 days, and post-filing Section 143(1) intimation review.</p><p>The objective is form-correct filing, full senior deduction capture, and zero scrutiny exposure on this typically simple but error-prone return type.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Senior Citizens:</strong></p>
                    <p><strong>Senior Citizen:</strong> Resident individual aged 60 years or above but below 80 at any time during the previous year - eligible for higher Section 80D, 80TTB, and 80DDB limits and Section 207 advance tax exemption.</p><p><strong>Super Senior Citizen:</strong> Resident individual aged 80 years or above at any time during the previous year - higher old-regime basic exemption (INR 5 lakh) and eligible for Section 194P no-ITR-filing relief from age 75.</p><p><strong>Section 80TTB:</strong> Deduction up to INR 50,000 on interest income from deposits with banks (including cooperative banks), post offices, and cooperative societies engaged in banking - for seniors aged 60+. Replaces Section 80TTA (INR 10,000), which does not apply to seniors.</p><p><strong>Section 207 Proviso:</strong> Senior citizens 60+ without income chargeable under Profits and Gains of Business or Profession are exempt from the advance tax obligation under Section 208. Tax can be paid as self-assessment tax under Section 140A before filing.</p><p><strong>Section 194P:</strong> Where a super senior (75+) has only pension and interest income from the same specified bank that pays the pension, the bank computes tax (including standard deduction and Section 87A rebate) via Form 12BBA assessment, deducts TDS, and the super senior is relieved from filing ITR under Section 139(1).</p><p><strong>Form 15H:</strong> Declaration filed by a resident senior citizen with a bank / cooperative / post office stating that estimated total income for the FY will be below the basic exemption limit, requesting nil TDS on interest income. Filed at the start of each FY.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Senior Citizens</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Typical form</span>
                        <strong>ITR-1 Sahaj</strong>
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
            <h2 class="section-title">Who Needs Senior Citizen ITR Filing</h2>
            <div class="content-text">
                
                <p>Any senior citizen or super senior with the following profile must file an annual ITR (subject to the Section 194P exemption for qualifying super seniors):</p><ul><li>Retired employees receiving pension from a former employer (private / PSU / government)</li><li>Family pension receivers (spouse / dependent of a deceased employee)</li><li>Retired armed forces personnel and defence pensioners</li><li>Retired professors, teachers, and civil servants</li><li>FD / post office / cooperative deposit holders with material interest income</li><li>Senior citizen self-occupants of one house property (or with one let-out property)</li><li>Seniors with rental income from a second house property (file ITR-2)</li><li>Seniors with capital gains from sale of equity / mutual funds / property</li><li>NRI-children-supported senior parents in India with overseas remittances (other sources)</li><li>Seniors with significant medical expenditure claiming Section 80D / 80DDB</li><li>Senior individuals with TDS deducted on FD / pension wanting a refund</li><li>Seniors crossing the basic exemption (INR 3 lakh new regime; INR 3 / 5 lakh old regime) requiring filing</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Statutory Deadlines:</strong> Due date for AY 2026-27 (FY 2025-26): 31 July 2026 for non-audit cases (covers nearly all senior citizen returns). Belated / revised return under Sections 139(4) / 139(5) up to 31 December 2026 with Section 234F late fee (INR 1,000 if total income up to INR 5 lakh; INR 5,000 if above). Updated return ITR-U under Section 139(8A) up to 31 March 2030. Form 15H to be filed at the start of each FY with each bank / institution. Self-assessment tax under Section 140A payable before filing.</p></div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Senior Citizen ITR Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Pension Head Classification (Employer vs Family)</strong></td><td>Pension from a former employer is taxed as salary under Section 17(1)(ii) - eligible for standard deduction (INR 75,000 new regime; INR 50,000 old). Family pension to a surviving spouse / dependent is taxed as other sources under Section 56(2)(x) - eligible for a separate standard deduction of INR 25,000 (new regime, Finance Act 2024) or 1/3 of pension subject to a maximum of INR 15,000 (old regime). We classify each pension stream correctly to optimise the head-specific deduction.</td></tr><tr><td><strong>Section 80TTB Interest Deduction Optimisation</strong></td><td>Aggregate interest from savings accounts, FDs, RDs, post office monthly income scheme, Senior Citizen Savings Scheme (SCSS), and cooperative bank deposits - deduction up to INR 50,000 under Section 80TTB. Aggregation across institutions, cross-checked against bank Form 16A / interest certificates and AIS. Surplus interest beyond INR 50,000 is fully taxable in the relevant slab.</td></tr><tr><td><strong>Section 80D + 80DDB Senior Limits</strong></td><td>Section 80D - health insurance premium plus medical expense (for uninsured seniors) up to INR 50,000 for self / spouse plus INR 50,000 for senior parents = up to INR 1 lakh combined. Section 80DDB - actual medical expense on treatment of specified diseases (cancer, neurological, chronic renal failure, AIDS, etc.) certified by a prescribed specialist up to INR 1 lakh for seniors. We compile bills, prescriptions, insurance receipts, and the 80DDB certificate.</td></tr><tr><td><strong>Section 207 Advance Tax Exemption Documentation</strong></td><td>For non-business seniors (60+) the entire annual tax can be paid as self-assessment under Section 140A before filing - no quarterly advance tax under Section 208. We document Section 207 proviso reliance (no Section 234C interest exposure), compute the single self-assessment payment, generate the challan, and reconcile against TDS already deducted on pension / interest.</td></tr><tr><td><strong>Section 194P Super Senior No-Filing Assessment</strong></td><td>For super seniors (75+) with only pension and bank interest from the same specified bank, Section 194P enables the bank to perform a Form 12BBA assessment (including standard deduction and Section 87A rebate) and deduct final TDS, relieving the super senior from ITR filing. We confirm eligibility, coordinate with the bank, and where ineligible (multiple banks / other income / capital gains) file the ITR normally.</td></tr><tr><td><strong>Form 15H + TDS Optimisation + E-Filing</strong></td><td>Form 15H filed with each bank / post office at the start of the FY where total income is expected below the basic exemption - avoiding unnecessary TDS deduction. Where TDS was already deducted, it is included in the ITR for refund. New vs old regime modelling and e-filing on the Income Tax Department portal with e-verification within 30 days.</td></tr>

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
            <h2 class="section-title">Our Senior Citizen ITR Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A six-step, CA-reviewed workflow from document onboarding to post-filing review - designed to capture every senior-specific deduction and avoid scrutiny on this simple but error-prone return type.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Onboarding</h3>
        <p class="step-description">We collect PAN, Aadhaar, pension certificate / Form 16 from the pension payer, bank interest certificate / Form 16A, FD / SCSS / post office deposit details, health insurance premium and medical expense bills, the 80DDB doctor certificate (if any), and the prior-year ITR. Output: senior deduction summary in 3 to 5 working days.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN + Aadhaar linked</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deduction summary</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:96px;height:96px;">
                <circle cx="60" cy="60" r="52" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                <path d="M40 50h40M40 62h40M40 74h24" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><rect x="34" y="36" width="52" height="52" rx="6" stroke="#14365F" stroke-width="2.5" fill="none"/>
            </svg>
            <span class="step-illustration-label">Onboarding</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Pension and Interest Mapping</h3>
        <p class="step-description">Pension head classification (employer vs family); interest aggregation across banks / post offices / cooperatives within the Section 80TTB INR 50,000 cap; rental income compilation if any; and other-sources reconciliation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Head classification</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>80TTB aggregation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:96px;height:96px;">
                <circle cx="60" cy="60" r="52" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                <path d="M44 60l10 10 22-22" stroke="#25D366" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><circle cx="60" cy="60" r="26" stroke="#14365F" stroke-width="2.5" fill="none"/>
            </svg>
            <span class="step-illustration-label">Pension and Interest Mapping</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Tax Regime Modelling</h3>
        <p class="step-description">Side-by-side new regime (INR 75,000 standard deduction for pension; INR 25,000 for family pension; no Chapter VI-A except 80CCD(2)) and old regime (INR 50,000 standard deduction plus full Chapter VI-A including 80TTB, 80D, 80DDB, 80C, 80G). Documented decision; pension earners can switch annually unlike business income earners.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New vs old regime</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 10-IEA where needed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:96px;height:96px;">
                <circle cx="60" cy="60" r="52" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                <rect x="38" y="44" width="44" height="32" rx="4" stroke="#14365F" stroke-width="2.5" fill="none"/><path d="M48 60h24M48 68h16" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
            </svg>
            <span class="step-illustration-label">Tax Regime Modelling</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Form 26AS / AIS / TIS Reconciliation</h3>
        <p class="step-description">Download from the Income Tax portal; match against pension TDS, bank interest TDS (Form 16A), and post office TDS; identify mismatches; and rectify with deductors before filing where TDS is not reflecting.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS / AIS / TIS match</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mismatch rectification</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:96px;height:96px;">
                <circle cx="60" cy="60" r="52" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                <path d="M60 36v48M44 52l16-16 16 16" stroke="#14365F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><circle cx="60" cy="60" r="40" stroke="#F5A623" stroke-width="2" fill="none" opacity="0.5"/>
            </svg>
            <span class="step-illustration-label">Form 26AS / AIS / TIS Reconciliation</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">E-Filing</h3>
        <p class="step-description">Self-assessment tax payment under Section 140A; e-filing on ITR-1 (or ITR-2 for capital gains / multiple property / foreign income) on the Income Tax Department portal; e-verification within 30 days via Aadhaar OTP / net banking / EVC.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 140A challan</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verify in 30 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:96px;height:96px;">
                <circle cx="60" cy="60" r="52" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                <path d="M40 60l12 12 28-28" stroke="#25D366" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><rect x="34" y="38" width="52" height="44" rx="6" stroke="#14365F" stroke-width="2.5" fill="none"/>
            </svg>
            <span class="step-illustration-label">E-Filing</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Post-Filing + Form 15H for Next FY</h3>
        <p class="step-description">CPC processing and the Section 143(1) intimation within 9 months; refund tracking via the portal; rectification under Section 154 for arithmetical errors; and the Form 15H template for the next FY where total income is expected below the basic exemption.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund tracking</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 15H for next FY</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:96px;height:96px;">
                <circle cx="60" cy="60" r="52" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                <circle cx="60" cy="60" r="26" stroke="#14365F" stroke-width="2.5" fill="none"/><path d="M60 46v14l10 6" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="step-illustration-label">Post-Filing + Form 15H for Next FY</span>
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
                
                <ul><li>PAN card and Aadhaar (linked status confirmed)</li><li>Pension certificate / Form 16 from the pension-paying employer / government</li><li>Bank statement(s) for the entire FY (savings, current)</li><li>Interest certificate / Form 16A from each bank / post office / cooperative</li><li>FD / SCSS / SCSS-MIS / Senior Citizen Savings Scheme statements</li><li>Rent receipts (if let-out property) and property details</li><li>Health insurance premium payment receipt (own / parents)</li><li>Medical expense bills (Section 80D for uninsured seniors / 80DDB)</li><li>80DDB certificate from a prescribed specialist (for specified diseases)</li><li>Donation receipts for Section 80G (old regime)</li><li>Form 15H filed earlier in the FY (if any)</li><li>Capital gains statements (broker / mutual fund / property sale)</li><li>Prior-year ITR-V and computation</li><li>Any prior intimation under Section 143(1) or notice</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Resolve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>TDS deducted by bank despite Form 15H eligibility</strong></td><td>Many seniors do not submit Form 15H at the start of the FY, so the bank deducts 10% TDS on FD interest once it crosses the threshold (or 20% if PAN is not provided). Where total income is below the basic exemption, this TDS is refundable.</td><td>We compute the refund precisely, file the ITR within deadline, and submit a Form 15H template for the next FY to each institution. Refunds are typically processed in 30 to 90 days via CPC Bengaluru.</td></tr><tr><td><strong>Section 80TTB confused with Section 80TTA - excess deduction claim</strong></td><td>Section 80TTA (up to INR 10,000) applies only to individuals below 60 and HUFs; Section 80TTB (up to INR 50,000) applies only to seniors and replaces 80TTA. A senior claiming both is incorrect and the department systems flag and reject the excess.</td><td>We use 80TTB exclusively for seniors, aggregate all qualifying interest (savings + FD + RD + post office), and cap at INR 50,000 with no double-counting.</td></tr><tr><td><strong>Super senior 75+ filed ITR despite Section 194P eligibility</strong></td><td>A super senior (75+) with only pension and interest from the same specified bank is exempt from filing, yet many continue to file unnecessarily.</td><td>We assess eligibility, confirm the bank has performed the Form 12BBA assessment, and advise discontinuation of filing where the super senior qualifies. Where there is any additional income source, we file ITR-1 / ITR-2 as appropriate.</td></tr><tr><td><strong>Family pension and employer pension confused in head allocation</strong></td><td>Employer pension is salary under Section 17(1)(ii) (INR 75,000 / INR 50,000 standard deduction); family pension is other sources under Section 56(2)(x) (INR 25,000 new regime / 1/3 or INR 15,000 lower old regime). Mis-classification impacts both the head-specific deduction and total income.</td><td>We classify each pension stream correctly per the source document, applying the right standard deduction to each head.</td></tr>

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
            <h2 class="section-title">Senior Citizen ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 Sahaj Senior (Pension + Interest + 1 House) - <strong>Patron Accounting Professional Fees</strong></td><td class="table-amount">Starting from INR 999 (Exl GST and Govt. Charges)</td></tr><tr><td>ITR-1 with Multiple Banks + 80DDB Coordination</td><td class="table-amount">Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr><tr><td>ITR-2 Senior (Capital Gains / Multiple Property)</td><td class="table-amount">Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Section 194P Super Senior Assessment + Bank Coordination</td><td class="table-amount">Quote on call - per super senior</td></tr><tr><td>Form 15H Preparation for Next FY</td><td class="table-amount">Included in main engagement</td></tr><tr><td>Belated / Revised / Updated Return ITR-U</td><td class="table-amount">Quote on call - based on complexity</td></tr><tr><td>143(1) / 154 Notice Reply</td><td class="table-amount">Quote on call - per notice</td></tr><tr><td>Government Filing Fee (e-filing on Income Tax portal)</td><td class="table-amount">Nil (no statutory fee for ITR e-filing)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Senior Citizens consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20am%20a%20senior%20citizen%20and%20want%20to%20file%20my%20ITR%20for%20AY%202026-27%20before%2031%20July.%20Please%20share%20the%20process%2C%20documents%2C%20and%20fees." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Onboarding (PAN, pension, interest certificates)</td><td>2 to 3 days</td></tr><tr><td>Pension head classification + interest aggregation</td><td>1 to 2 days</td></tr><tr><td>Senior deduction matrix (80TTB / 80D / 80DDB)</td><td>1 to 2 days</td></tr><tr><td>Tax regime modelling (new vs old)</td><td>1 day</td></tr><tr><td>Form 26AS / AIS / TIS reconciliation</td><td>1 to 2 days</td></tr><tr><td>Self-assessment tax payment + e-filing</td><td>1 day</td></tr><tr><td>E-verification within 30 days</td><td>Within 30 days of filing</td></tr><tr><td>CPC processing + 143(1) intimation</td><td>Within 9 months of filing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>End-to-end:</strong> Most senior citizen ITR-1 engagements complete in 5 to 7 working days from receipt of complete documents. E-verification must be done within 30 days of filing, and the CPC Section 143(1) intimation typically arrives within 9 months. File well before the 31 July 2026 due date to avoid the Section 234F late fee and refund delays.</p>

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
            <h2 class="section-title">Why Engage a Professional for Senior Citizen ITR</h2>
        </div>
        <div class="features-grid"><article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
    <h3 class="feature-title">Full Senior Deduction Capture</h3>
    <p class="feature-text">Section 80TTB / 80D / 80DDB senior limits fully captured - an INR 2 lakh+ deduction window optimised across institutions.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
    <h3 class="feature-title">No Advance Tax Burden</h3>
    <p class="feature-text">Section 207 advance tax exemption documented - the entire liability paid as a single self-assessment payment, no quarterly instalments.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
    <h3 class="feature-title">Super Senior Relief Assessed</h3>
    <p class="feature-text">Section 194P relief assessed for super seniors (75+) - filing fees and effort saved where the bank performs the Form 12BBA assessment.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
    <h3 class="feature-title">Proactive Form 15H Filing</h3>
    <p class="feature-text">Form 15H filed at the start of the FY - no unnecessary TDS deduction on FD interest, and refunds claimed where TDS was already deducted.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 4-6"/></svg></div>
    <h3 class="feature-title">Annual Regime Modelling</h3>
    <p class="feature-text">New vs old regime modelled every year - the lowest-tax option chosen, since pensioners without business income can switch annually.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
    <h3 class="feature-title">Lower Long-Term Cost</h3>
    <p class="feature-text">One INR 999 engagement avoids missed Section 80TTB / 80D deductions, the Section 234F late fee, and refund delays - far below the typical DIY leakage.</p>
</article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Senior Citizens and Families Across India</h2>
            <div class="content-text">
                
                <div class="highlight-box"><p><strong>10,000+ Businesses Served &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 50,000+ Documents Filed &nbsp;|&nbsp; 15+ Years of CA / CS Practice</strong></p></div><p><strong>Outcome proof:</strong> A Pune-based senior couple (aged 68 and 65) with a combined pension of INR 14 lakh and FD interest of INR 3.8 lakh saved INR 47,000 in tax by claiming full Section 80TTB (INR 50,000 each), Section 80D INR 1 lakh combined (health insurance plus uninsured medical), and choosing the old regime via Form 10-IEA after side-by-side modelling - the marginal benefit of full Chapter VI-A deductions outweighed the new regime slab rates.</p><p><strong>4-Office Coverage:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves senior citizens across India - both in person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Patron Accounting Senior ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY / Internal Team</th><th>Patron Accounting Compliance</th></tr></thead>
                    <tbody>
                        <tr><td>Section 80TTB capture</td><td>Often confused with 80TTA - lower deduction claimed</td><td>Full INR 50,000 across all institutions</td></tr><tr><td>Section 80D senior limit</td><td>INR 25,000 claimed instead of INR 50,000</td><td>Full INR 50,000 self + INR 50,000 parents</td></tr><tr><td>Section 80DDB specified diseases</td><td>Frequently missed</td><td>Captured with prescribed specialist certificate</td></tr><tr><td>Section 207 advance tax exemption</td><td>Quarterly tax paid unnecessarily</td><td>Single self-assessment payment</td></tr><tr><td>Section 194P super senior relief</td><td>Filed ITR unnecessarily</td><td>Eligibility assessed and applied</td></tr><tr><td>Pension head classification</td><td>Family pension treated as salary or vice versa</td><td>Correct head per source document</td></tr><tr><td>Form 15H</td><td>Not filed - TDS deducted unnecessarily</td><td>Filed at start of FY to each institution</td></tr><tr><td>Regime switching</td><td>Stuck in default new regime</td><td>Annual modelling - can switch (no business income lock-in)</td></tr><tr><td>Cost (typical)</td><td>Hidden - missed deductions, unnecessary TDS, late fee</td><td>Starting from INR 999</td></tr><tr><td>Audit / scrutiny comfort</td><td>Low</td><td>High - documented filing memo</td></tr>

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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                <ul><li><strong><a href="/itr-services">ITR Services Directory</a></strong> - browse all ITR forms and filing services and find the right form for your profile.</li><li><strong><a href="/income-tax-return">Income Tax Return (ITR) Filing</a></strong> - end-to-end ITR filing across all individual profiles and forms.</li><li><strong><a href="/itr-for-salary">ITR for Salary</a></strong> - for seniors still drawing salary alongside pension.</li><li><strong><a href="/itr-for-capital-gains">ITR for Capital Gains</a></strong> - where a senior sells equity, mutual funds, or property.</li><li><strong><a href="/itr-for-property-sale">ITR for Property Sale</a></strong> - capital gains and exemptions on sale of house property.</li><li><strong><a href="/income-tax-notice">Income Tax Notice</a></strong> - reply and resolution for 143(1) / 142(1) / 148 notices.</li><li><strong><a href="/tax-planning-services">Tax Planning</a></strong> - annual deduction and regime planning for retirees.</li><li><strong><a href="/tds-return">TDS Return Filing</a></strong> - if a senior is a landlord deducting TDS under 194-IB.</li></ul>

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
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Element</th><th>Reference</th></tr></thead><tbody><tr><td>Governing Act</td><td>Income-tax Act, 1961 (up to 31 March 2026); Income-tax Act, 2025 (from 1 April 2026)</td></tr><tr><td>Senior citizen definition</td><td>Resident individual aged 60 to 79 years</td></tr><tr><td>Super senior citizen definition</td><td>Resident individual aged 80 years and above</td></tr><tr><td>Employer pension as salary</td><td>Section 17(1)(ii)</td></tr><tr><td>Family pension as other sources</td><td>Section 56(2)(x) - separate standard deduction</td></tr><tr><td>Family pension standard deduction</td><td>INR 25,000 (new regime, Finance Act 2024); 1/3 or INR 15,000 lower (old regime)</td></tr><tr><td>Standard deduction salary / pension</td><td>INR 75,000 (new regime from FY 2024-25); INR 50,000 (old regime)</td></tr><tr><td>Senior interest deduction</td><td>Section 80TTB - up to INR 50,000</td></tr><tr><td>Senior health insurance</td><td>Section 80D - up to INR 50,000 (self) + INR 50,000 (parents above 60)</td></tr><tr><td>Senior specified diseases</td><td>Section 80DDB - up to INR 1 lakh</td></tr><tr><td>Self disability</td><td>Section 80U - INR 75,000 / INR 1.25 lakh based on severity</td></tr><tr><td>Donations</td><td>Section 80G - old regime only</td></tr><tr><td>New tax regime</td><td>Section 115BAC - default from AY 2024-25</td></tr><tr><td>Section 87A rebate</td><td>INR 25,000 (new regime up to INR 7 lakh) / INR 12,500 (old regime up to INR 5 lakh)</td></tr><tr><td>Old regime basic exemption</td><td>INR 3 lakh (60-79); INR 5 lakh (80+ super senior)</td></tr><tr><td>New regime basic exemption</td><td>INR 3 lakh same for all ages</td></tr><tr><td>Advance tax exemption</td><td>Section 207 proviso - seniors 60+ without PGBP income</td></tr><tr><td>Super senior no-filing relief</td><td>Section 194P - pension + same-bank interest; Form 12BBA bank assessment</td></tr><tr><td>TDS threshold on bank interest (senior)</td><td>Section 194A - INR 1,00,000 (raised from INR 50,000 w.e.f. 1 April 2025)</td></tr><tr><td>Form 15H</td><td>Declaration for nil TDS on interest where income below basic exemption</td></tr><tr><td>Self-assessment tax</td><td>Section 140A</td></tr><tr><td>Return filing / belated / updated</td><td>Section 139(1) (31 July typical) / 139(4) / 139(8A)</td></tr><tr><td>Intimation / rectification</td><td>Section 143(1) / Section 154</td></tr><tr><td>Late fee</td><td>Section 234F - INR 1,000 (income up to INR 5 lakh) / INR 5,000 (above)</td></tr></tbody></table></div><p style="margin-top:16px;">Authoritative references: the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department e-Filing Portal</a>, <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">CBDT</a>, and <a href="https://www.indiapost.gov.in" target="_blank" rel="noopener">India Post</a> for Senior Citizen Savings Scheme deposits.</p>

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
                    <h2 class="faq-expanded__title">Senior Citizen ITR - Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Clear answers on ITR forms, Section 80TTB / 80D / 80DDB limits, advance tax exemption, Section 194P relief, Form 15H, and regime choice for seniors and super seniors.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Senior Citizens',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What ITR form should a senior citizen file?</h3>
                        <div class="faq-expanded__a"><p>Most senior citizens file ITR-1 Sahaj - which covers pension (treated as salary), interest from banks / post office / cooperatives, one house property income (self-occupied or let-out), and other sources, with total income up to INR 50 lakh. Long-term capital gains under Section 112A up to INR 1.25 lakh and agricultural income up to INR 5,000 are also accommodated. Where capital gains exceed limits, multiple house properties exist, foreign income or assets are involved, or unlisted equity is held, the senior files ITR-2 instead. Business income (rare for seniors) requires ITR-3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Section 80TTB and how much can a senior claim?</h3>
                        <div class="faq-expanded__a"><p>Section 80TTB of the Income-tax Act provides a deduction of up to INR 50,000 on interest income from deposits with banks (including cooperative banks), cooperative societies engaged in banking business, and post offices for individuals aged 60 years and above. This includes interest from savings accounts, fixed deposits, recurring deposits, post office monthly income scheme, and the Senior Citizen Savings Scheme. It replaces Section 80TTA (INR 10,000), which applies only to individuals below 60. Both sections cannot be claimed together by a senior, and the deduction is available only under the old regime.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Section 207 advance tax exemption for seniors?</h3>
                        <div class="faq-expanded__a"><p>The proviso to Section 207 of the Income-tax Act exempts a resident senior citizen (60 years and above) who does not have any income chargeable under Profits and Gains of Business or Profession from the obligation to pay advance tax under Section 208. The entire annual tax liability can be paid as self-assessment tax under Section 140A before filing the return - no quarterly advance tax instalments (15 June, 15 September, 15 December, 15 March) are required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Section 194P no-ITR-filing relief for super seniors?</h3>
                        <div class="faq-expanded__a"><p>Section 194P provides that a super senior citizen (75 years and above) who has only pension income and interest income from the same specified bank that pays the pension is exempt from the obligation to file ITR under Section 139(1). The bank performs the tax computation via Form 12BBA assessment (including standard deduction and Section 87A rebate), deducts final TDS, and remits the tax. If the super senior has any other income (multiple banks, capital gains, rent, dividend), they must file ITR normally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Should a senior citizen choose the new tax regime or old?</h3>
                        <div class="faq-expanded__a"><p>From AY 2024-25, the Section 115BAC new regime is default for all individuals including seniors. The decision depends on the deduction base. The old regime allows full Chapter VI-A deductions - Section 80TTB (INR 50,000 interest), 80D (INR 50,000 health insurance), 80DDB (INR 1 lakh specified diseases), 80C (INR 1.5 lakh), and 80G (donations). The new regime has lower slabs but only an INR 75,000 standard deduction for pension. Pensioners without business income can switch annually - we model both and choose the lower-tax option each year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a senior citizen claim Section 80D and 80DDB together?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 80D covers health insurance premium for self / spouse (up to INR 50,000 for a senior; includes uninsured medical expense up to INR 50,000 if no policy) and additionally INR 50,000 for senior parents - total up to INR 1 lakh. Section 80DDB covers actual medical expense on treatment of specified diseases (cancer, neurological disorders, chronic renal failure, AIDS, etc.) up to INR 1 lakh for seniors, certified by a prescribed specialist. Both are independent and can be claimed in the same FY.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does Form 15H help a senior avoid TDS on bank interest?</h3>
                        <div class="faq-expanded__a"><p>Form 15H is a declaration filed by a resident senior citizen with a bank, cooperative, or post office at the start of each FY stating that the estimated total income for the year will be below the basic exemption limit. On receipt of Form 15H, the bank does not deduct TDS on interest under Section 194A (which otherwise applies once interest crosses INR 1,00,000 in the FY for seniors). Form 15H must be re-filed each FY with each institution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Are super senior citizens subject to a different basic exemption limit?</h3>
                        <div class="faq-expanded__a"><p>In the old tax regime, yes. Super senior citizens (80+) have a basic exemption limit of INR 5 lakh; senior citizens (60-79) have INR 3 lakh; others have INR 2.5 lakh. In the new tax regime under Section 115BAC, the basic exemption is INR 3 lakh uniformly for all ages from FY 2024-25. The new regime rebate under Section 87A (INR 25,000 up to total income of INR 7 lakh) effectively brings tax to zero for many seniors when income is moderate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is the cost of senior citizen ITR filing at Patron Accounting?</h3>
                        <div class="faq-expanded__a"><p>Starting from INR 999 one-time (exclusive of GST and government charges) for ITR-1 Sahaj filing covering pension, interest from up to two banks, one house property, and standard deductions. ITR-1 with multiple banks plus Section 80DDB coordination starts from INR 1,499. ITR-2 for seniors (capital gains, multiple property, foreign income) starts from INR 2,999. Section 194P super senior assessment, belated / revised / updated returns, and notice replies are quoted separately based on complexity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Senior citizen ko 80TTB me kya milta hai?</h3>
                        <div class="faq-expanded__a"><p>Section 80TTB ke under 60+ senior citizens ko savings, FD, RD, post office, aur cooperative banking institutions se total interest par INR 50,000 tak deduction milta hai. Ye 80TTA (INR 10,000) - jo non-seniors ke liye hai - uska place leta hai, aur senior citizen 80TTA aur 80TTB dono nahi, sirf 80TTB claim kar sakte hain. Sabhi banks aur post offices ka interest aggregate hota hai. Old regime me ye deduction valid hai; new regime me Chapter VI-A me available nahi hai - is liye jab interest base zyada ho to senior ke liye old regime usually behtar hota hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Senior citizen ITR form?</strong> ITR-1 Sahaj typical (pension + interest + 1 house property).</p><p><strong>Section 80TTB deduction?</strong> Up to INR 50,000 on deposit interest for 60+.</p><p><strong>Section 80D senior limit?</strong> Up to INR 50,000 self + INR 50,000 parents.</p><p><strong>Section 80DDB limit?</strong> Up to INR 1 lakh specified diseases for seniors.</p><p><strong>Advance tax for seniors?</strong> Exempt under Section 207 proviso if no business income.</p><p><strong>Super senior no-filing relief?</strong> Section 194P - 75+ with only pension + same-bank interest.</p><p><strong>Form 15H purpose?</strong> Declaration to bank for nil TDS on interest where income below basic exemption.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Move Now</h2>
            <div class="content-text">
                
                <p>The 31 July 2026 deadline for senior citizen ITR-1 is approaching - missing it triggers the Section 234F late fee (INR 1,000 if income up to INR 5 lakh; INR 5,000 above) and delays any refund. Section 80TTB / 80D / 80DDB deductions cumulatively worth over INR 2 lakh are frequently missed in DIY filings. TDS deducted on FD interest without Form 15H is refunded only after filing - the longer the delay, the longer the wait. Super seniors 75+ may not even need to file under Section 194P, yet many file unnecessarily. Patron Accounting starts from INR 999 - a small investment against the typical INR 5,000 to INR 20,000 missed-deduction cost of DIY filing.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Senior Citizen ITR with CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">Senior citizen ITR is the lowest-complexity but highest-deduction-leakage personal return in India. Form ITR-1 Sahaj covers most cases - pension under Section 17(1)(ii) or Section 56(2)(x) (family pension), interest income from deposits (with the Section 80TTB INR 50,000 cap), one house property, and standard deductions. Senior-specific provisions cluster around Section 80TTB, Section 80D, Section 80DDB, Section 207 advance tax exemption, Section 194P super senior no-filing relief, and the Section 194A higher TDS threshold (INR 1,00,000) on bank interest with the Form 15H option.</p><p style="color:#FFFFFF;">Pensioners without business income can switch between the new and old tax regime annually - unlike proprietors and founders who face a one-time election. The Income-tax Act 2025 (effective 1 April 2026) preserves these provisions. Patron Accounting LLP, with CA and CS professionals practising for 15+ years across Pune, Mumbai, Delhi, and Gurugram, runs end-to-end senior citizen ITR filing starting from INR 999 one-time per FY return.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20am%20a%20senior%20citizen%20and%20want%20to%20file%20my%20ITR%20for%20AY%202026-27%20before%2031%20July.%20Please%20share%20the%20process%2C%20documents%2C%20and%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ITR for Senior Citizens%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR for Senior Citizens%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Senior Citizen ITR Filing Near You</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote senior citizen ITR support from our offices in Pune, Mumbai, Delhi, and Gurugram.</p>
            
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end income tax support for retirees and families</div><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return (ITR) Filing</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-property-sale" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Property Sale</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">India</div></div></a><a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 27 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 27 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 1, 3-month cycle) for annual Finance Act amendments to Section 80TTB / 80D / 80DDB senior limits, Section 87A rebate changes, CBDT notifications on ITR form updates, Form 12BBA / 15H format changes, Section 194P specified-bank list updates, and Income-tax Act 2025 sub-provisions affecting senior taxation.</p>
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


<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection
