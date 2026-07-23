
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
    <title>Condonation of Delay ROC Filings</title>
    <meta name="description" content="Section 460 condonation of delay + Section 441 compounding for ROC backlog. 1-5+ year defaults rectified. Fixed-fee Rs 50,000 to Rs 2,00,000. CA + CS handled.">
    <link rel="canonical" href="/condonation-of-delay-roc-filings">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Condonation of Delay ROC Filings 2026 | Patron Accounting">
    <meta property="og:description" content="Section 460 condonation of delay + Section 441 compounding for ROC backlog. 1-5+ year defaults rectified. Fixed-fee Rs 50,000 to Rs 2,00,000. CA + CS handled.">
    <meta property="og:url" content="/condonation-of-delay-roc-filings">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/condonation-of-delay-roc-filings-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Condonation of Delay ROC Filings 2026 | Patron Accounting">
    <meta name="twitter:description" content="Section 460 condonation of delay + Section 441 compounding for ROC backlog. 1-5+ year defaults rectified. Fixed-fee Rs 50,000 to Rs 2,00,000. CA + CS handled.">
    <meta name="twitter:image" content="/images/condonation-of-delay-roc-filings-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/condonation-of-delay-roc-filings#breadcrumb",
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
                        "name": "Compliance Services",
                        "item": "/private-limited-company-compliance"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Condonation of Delay and Compounding for ROC Backlog",
                        "item": "/condonation-of-delay-roc-filings"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/condonation-of-delay-roc-filings#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is condonation of delay under Section 460 of the Companies Act, 2013?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 460 empowers the Central Government to condone (forgive) delays in filing applications or documents required under the Companies Act. It applies where a filing has not been made within the statutory time limit but no prosecution has been initiated yet. The company files Form CG-1 with reasons for delay; the Central Government - typically through the Regional Director by delegation - examines the application, records reasons in writing, and passes a condonation order. The order is then filed with ROC in Form INC-28 and the originally delayed document is filed with applicable late fees."
                }
            },
            {
                "@type": "Question",
                "name": "What is compounding of offences under Section 441?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 441 allows a company or its officer to settle an offence punishable with fine (or fine and imprisonment, but not imprisonment alone under Section 441(6)(b)) by paying a compounding fee specified by the Regional Director or NCLT - in lieu of facing criminal prosecution. The application is filed in Form GNL-1 to the ROC, which forwards it with a report to the RD (where maximum fine is up to Rs 25 lakh) or NCLT (where maximum fine is above Rs 25 lakh, or by election under the Pahuja Takii Seeds NCLAT 2018 ruling). The compounding order is filed in Form INC-28 within 7 days, and the compounded offence cannot be prosecuted under Section 441(4)."
                }
            },
            {
                "@type": "Question",
                "name": "When do you use Section 460 condonation vs Section 441 compounding?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Use Section 460 condonation when the backlog has been recognised internally and the company wants to file the delayed document with Central Government permission - BEFORE any MCA action. Use Section 441 compounding when an MCA notice has been received, prosecution has been initiated, or an offence has been adjudicated - i.e., the matter has progressed beyond simple delay. Often both paths run in parallel: Section 460 to get permission to file the delayed annual returns, and Section 441 to compound any specific offence that the ROC adjudicates as part of the cleanup. Patron sequences the paths for the lowest total cost outcome."
                }
            },
            {
                "@type": "Question",
                "name": "Who decides compounding - Regional Director or NCLT?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 441(1)(b), the Regional Director or any officer authorised by the Central Government compounds offences where the maximum fine that may be imposed does not exceed Rs 25 lakh (raised from Rs 5 lakh by Companies (Amendment) Act, 2020). NCLT compounds offences where the maximum fine exceeds Rs 25 lakh. The NCLAT in Pahuja Takii Seeds Ltd vs ROC (2018) further clarified that NCLT has UNLIMITED compounding jurisdiction irrespective of the fine amount - meaning the company can elect NCLT for any offence even where RD would have had jurisdiction. RD compounding is generally faster (4-6 months) while NCLT compounding takes longer (6-9 months) but offers more bench experience for complex matters."
                }
            },
            {
                "@type": "Question",
                "name": "What documents are needed for Form CG-1 condonation application?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Mandatory documents for Form CG-1 under Section 460 include: board resolution authorising the application and designated signatory; detailed written reasons for the delay (this is non-negotiable - Central Government records reasons in writing); supporting documents evidencing the cause of delay (medical certificates, technical errors, key person departures, business disruption); audited financial statements for the years of backlog; schedule of all pending ROC forms by year; and the active DSC of the authorised signatory. The application is filed via the MCA V3 portal addressed to the Central Government and routed to the Regional Director by delegation."
                }
            },
            {
                "@type": "Question",
                "name": "Can the same offence be compounded twice?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. Section 441(2) Explanation contains a 3-year bar - the same offence cannot be compounded by the same company or officer within 3 years from the date of compounding of the previous similar offence. For example, a company that compounded an MGT-7 late filing offence in 2024 cannot use Section 441 to compound a second MGT-7 default in 2026; it would need to use a different remedy or wait until 2027. Patron checks compounding history at intake; where the 3-year bar applies, alternative remedies such as board adjudication under Section 454 or proceeding to prosecution with probation are explored."
                }
            },
            {
                "@type": "Question",
                "name": "What is CCFS-2026 and when does it help?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "CCFS-2026 is the Companies Compliance Facilitation Scheme, 2026 issued by MCA via General Circular No. 01/2026 dated 24 February 2026. The scheme window is 15 April to 15 July 2026. Companies filing pending AOC-4, MGT-7, MGT-7A, ADT-1, FC-3, or FC-4 forms during the window pay only 10% of accumulated additional fees - a 90% waiver. Inactive companies can opt for dormant status (MSC-1 at 50% fee) or strike-off (STK-2 at 25% fee). LLPs are NOT covered. Patron checks scheme eligibility on Day 1 and times underlying form filings to coincide where the engagement deadline allows."
                }
            },
            {
                "@type": "Question",
                "name": "What is the total cost of cleaning up 3+ years of ROC backlog?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For 3-4 years of backlog (typically AOC-4 + MGT-7 + multiple MGT-14 + DIR-12 + possibly DPT-3), Patron's fixed engagement fee is Rs 1,00,000 and indicative government penalty is Rs 1,00,000 to Rs 3,00,000 - total client outlay approximately Rs 2 to 4 lakh. For 5+ years of backlog with potential director disqualification under Section 164(2) and possible suo-moto strike-off action by ROC, Patron's fee is Rs 2,00,000+ and government penalty can reach Rs 3 to 5 lakh+ - total client outlay Rs 5 to 7 lakh. CCFS-2026 amnesty, where applicable, reduces these numbers by 90% on the additional-fee component (pay 10%)."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/condonation-of-delay-roc-filings#service",
                "name": "Condonation of Delay and Compounding for ROC Backlog",
                "url": "/condonation-of-delay-roc-filings",
                "description": "End-to-end ROC backlog cleanup via Section 460 condonation (Form CG-1) and Section 441 compounding (Form GNL-1) under the Companies Act, 2013. Includes board resolutions, Central Government / RD / NCLT representation, Form INC-28 closure, originally delayed document filing, and CCFS-2026 amnesty optimisation. Fixed-fee Rs 50,000 to Rs 2,00,000 by backlog years.",
                "serviceType": "Corporate Compliance and Litigation Service",
                "provider": { "@id": "/#organization" },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "Companies Act, 2013",
                        "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    },
                    {
                        "@type": "Thing",
                        "name": "National Company Law Tribunal",
                        "sameAs": "https://en.wikipedia.org/wiki/National_Company_Law_Tribunal"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Backlog Cleanup Engagement Tiers",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "1-2 Year Backlog Cleanup",
                            "price": "50000",
                            "priceCurrency": "INR",
                            "description": "Section 460 condonation for typically AOC-4 + MGT-7 pending 1-2 years. Form CG-1 drafting, Regional Director hearing, INC-28 closure, original document filing. Government penalty separate at actuals."
                        },
                        {
                            "@type": "Offer",
                            "name": "3-4 Year Backlog Cleanup",
                            "price": "100000",
                            "priceCurrency": "INR",
                            "description": "Section 460 path with detailed reasons; possible parallel Section 441 if ROC notice exists. Covers AOC-4 + MGT-7 + multiple MGT-14 + DIR-12 + possibly DPT-3 pending."
                        },
                        {
                            "@type": "Offer",
                            "name": "4-5 Year Backlog Cleanup",
                            "price": "150000",
                            "priceCurrency": "INR",
                            "description": "Full annual cycle backlog plus event-based filings. Director disqualification under Section 164(2) likely - separate remediation handled. Multi-form Section 441 compounding likely."
                        },
                        {
                            "@type": "Offer",
                            "name": "5+ Year Backlog Cleanup",
                            "price": "200000",
                            "priceCurrency": "INR",
                            "description": "Severe backlog with director disqualification, possible suo-moto strike-off by ROC, NCLT-level compounding for high-fine offences. End-to-end multi-track engagement."
                        }
                    ]
                }
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

/* Fix: dark CTA block body text -> white (low-contrast on navy #1B365D) */
section[style*="background: var(--blue)"] .content-text,
section[style*="background: var(--blue)"] .content-text p,
section[style*="background: var(--blue)"] .content-text li,
section[style*="background: var(--blue)"] .content-text strong{color:#FFFFFF !important;}

/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
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
                        Condonation of Delay and Compounding for ROC Backlog
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two Paths:</span> Section 460 condonation (Form CG-1) OR Section 441 compounding (Form GNL-1) chosen strategically.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Fixed Rs 50,000 (1-2 yr backlog) to Rs 2,00,000 (5+ yr backlog). Government penalty separate.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any company in default; not under prosecution; not compounded for same offence in last 3 years.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3 to 6 months (Section 460 path) or 4 to 9 months (Section 441 path with RD or NCLT).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 180+ FY24-25 Cleanups | 95% Favourable Order Rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ROC%20backlog%20cleanup%20under%20Section%20460%20condonation%20or%20Section%20441%20compounding." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Condonation of Delay ROC Filings'/>
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
                                <option value="condonation-of-delay-roc-filings" selected>Condonation and Compounding (this page)</option>
                                <option value="roc-notice">ROC Notice Response</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance</option>
                                <option value="private-limited-company-compliance">Private Limited Company Compliance</option>
                                <option value="aoc-4-filing-services">AOC-4 Filing Services</option>
                                <option value="mgt-7-filing-services">MGT-7 Filing Services</option>
                                <option value="strike-off-private-limited-company">Strike Off Pvt Ltd</option>
                                <option value="company-closure">Company Closure</option>
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
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">3 years of pending AOC-4 and MGT-7 surfaced in our Series A diligence. Patron filed Section 460 condonation, got the order in 90 days, and filed all backlog under CCFS-2026 amnesty. Series A closed on schedule.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AT</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Aditya Tiwari</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SaaS Founder, Bangalore</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Got an ROC show-cause for late AOC-4. Patron filed Section 441 compounding via Form GNL-1 - RD hearing in 4 months, compounding fee Rs 80,000. Prevented prosecution under Section 137(3).</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MJ</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Manish Joshi</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Manufacturing</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">5 years of backlog plus director disqualification under Section 164(2). Patron ran both Section 460 and Section 441 in parallel, then DIR-10 reactivation. Total engagement 7 months - cleaner exit for the M and A buyer.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohan Mehra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Pharma Group</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Compounding fee exceeded Rs 25 lakh so case went to NCLT. Patron's panel counsel handled the hearing - took 8 months but order favourable. Used Pahuja Takii precedent for joint application covering 4 years.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Nair</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Group CFO, Listed Co</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">New director onboarding flagged 4 years of MGT-14 not filed on board resolutions. Patron drafted CG-1 with detailed reasons, RD condoned in 75 days. Director joined the board with clean slate.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anita Kapoor</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Independent Director</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
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
                    <p>Free 15-minute consultation. Backlog diagnostic in 24 hours. CCFS-2026 amnesty eligibility checked on Day 1. Path selection (Section 460 vs Section 441) locked before billing begins.</p>
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
            
                <a href="#overview-section" class="toc-btn">TL;DR</a>
                <a href="#what-section" class="toc-btn">Section 460 vs 441</a>
                <a href="#who-section" class="toc-btn">5 Buyer Triggers</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">9-Step Procedure</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA + CS</a>
                <a href="#comparison-section" class="toc-btn">vs Strike Off</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: ROC Backlog Cleanup at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Condonation of Delay ROC Filings Services at a Glance</strong></p>
                    <p>Two regulatory paths to clean up ROC backlog. <strong>Section 460</strong> of the Companies Act, 2013 allows the Central Government to CONDONE the delay - filed in Form CG-1, order received, then file the originally delayed document with applicable fees and Form INC-28. <strong>Section 441</strong> allows COMPOUNDING of the offence (where prosecution has been initiated or fine adjudicated) - filed in Form GNL-1 to Regional Director (max fine up to Rs 25 lakh) or NCLT (above Rs 25 lakh, with unlimited jurisdiction per Pahuja Takii Seeds NCLAT 2018). Patron handles both paths end-to-end at fixed fee Rs 50,000 (1-2 year backlog) to Rs 2,00,000 (5+ year backlog). Government penalty separate.</p>
                </div>
                <p>Backlog cleanup is rarely a leisurely decision. Five buyer triggers force action: funding round diligence, merger / sale diligence, director change exposing defaults, MCA notice, or bank financing requirement. Each carries a hard third-party deadline (21-90 days typical) that is shorter than normal MCA processing. Patron expedites by sequencing the right path (Section 460 versus Section 441), drafting in parallel, and maintaining direct C-PACE / RD / NCLT coordination.</p>
                <p>Below is the quick-reference summary covering governing sections, applicability, both regulatory paths, deciding authorities (Central Government / RD / NCLT), Patron's fixed-fee tiers by backlog years, indicative government penalty ranges, and end-to-end timeline. CCFS-2026 amnesty (Companies Compliance Facilitation Scheme via General Circular No. 01/2026 dated 24 February 2026, window 15 April to 15 July 2026) where applicable cuts additional fees by 90%.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 460, 441, 117, 137(3), 92(5), 164(2), 403 read with Companies (Registration Offices and Fees) Rules, 2014 and NCLT Rules, 2016</td></tr>
                        <tr><td>Applicable To</td><td>Any private or public company in default of ROC filings; not currently under prosecution or investigation; not compounded for same offence in preceding 3 years (Section 441(2) explanation)</td></tr>
                        <tr><td>Two Paths</td><td>Section 460 condonation (Form CG-1 to Central Government) OR Section 441 compounding (Form GNL-1 to ROC, forwarded to RD or NCLT based on fine threshold)</td></tr>
                        <tr><td>Authority</td><td>Section 460 - Central Government (typically Regional Director by delegation). Section 441 - Regional Director (max fine up to Rs 25 lakh) OR NCLT (max fine above Rs 25 lakh, also unlimited jurisdiction per Pahuja Takii Seeds 2018)</td></tr>
                        <tr><td>Cost (Patron Fixed Fee)</td><td>Rs 50,000 (1-2 yr) | Rs 1,00,000 (3-4 yr) | Rs 1,50,000 (4-5 yr) | Rs 2,00,000+ (5+ yr)</td></tr>
                        <tr><td>Government Penalty (Separate)</td><td>Late fees (Rs 100/day no cap under Section 403) + Section 441 compounding fee where applicable. Typical range Rs 50,000 to Rs 5 lakh+ depending on years and forms. CCFS-2026 amnesty (90% waiver) where active reduces this materially.</td></tr>
                        <tr><td>Timeline</td><td>3 to 6 months end-to-end (Section 460 path) | 4 to 9 months end-to-end (Section 441 path including NCLT cases)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;
</p>
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
                <h2 class="section-title">Section 460 Condonation vs Section 441 Compounding</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>Two distinct regulatory mechanisms exist for cleaning up ROC defaults under the Companies Act, 2013. Choosing the right path - or running them in parallel - is the core strategic decision in any backlog cleanup engagement.</p>

                    <h3 style="margin-top:24px;">Section 460 - Condonation of Delay (Pre-Prosecution)</h3>
                    <p>Section 460 is the Central Government's power to FORGIVE a delay in filing a document or making an application under the Companies Act. It applies BEFORE prosecution starts - the company has not been adjudicated guilty of an offence; it simply missed a filing deadline and now seeks Central Government permission to file beyond the statutory window. Filed in Form CG-1 with reasons in writing. The Central Government, on satisfaction of reasonable cause, passes a condonation order. The order is then filed with the Registrar in Form INC-28 along with payment of normal fees plus additional / late fees, and the originally delayed document is filed.</p>

                    <h3 style="margin-top:24px;">Section 441 - Compounding of Offences (Post-Notice)</h3>
                    <p>Section 441 applies where an OFFENCE has been committed - typically after the ROC has noticed the default and either issued a show-cause notice, initiated prosecution, or where adjudication is pending. The defaulting company pays a compounding fee (lower than the maximum statutory fine) in lieu of facing prosecution. The Regional Director compounds offences with maximum fine up to Rs 25 lakh under Section 441(1)(b); the National Company Law Tribunal compounds offences with maximum fine above Rs 25 lakh, with <strong>unlimited jurisdiction per the NCLAT ruling in Pahuja Takii Seeds Ltd vs ROC (2018)</strong>. Filed in Form GNL-1 to the ROC who forwards it with a report to RD or NCLT.</p>

                    <h3 style="margin-top:32px;">Side-by-Side Decision Matrix</h3>
                    <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Parameter</th>
                                <th>Section 460 Condonation</th>
                                <th>Section 441 Compounding</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>When applicable</strong></td><td>BEFORE prosecution / adjudication. Company is simply late filing.</td><td>AFTER offence has been recognised - notice served, prosecution initiated, or adjudicated.</td></tr>
                            <tr><td><strong>Trigger</strong></td><td>Internal recognition of default + need to file beyond statutory window</td><td>ROC notice received | Show-cause served | Inspector report | NCLT proceeding</td></tr>
                            <tr><td><strong>Authority</strong></td><td>Central Government (delegated to Regional Director in most cases)</td><td>RD (max fine up to Rs 25 lakh) OR NCLT (max fine above Rs 25 lakh OR by election)</td></tr>
                            <tr><td><strong>Form filed</strong></td><td>Form CG-1 to Central Government</td><td>Form GNL-1 to ROC; forwarded to RD or NCLT</td></tr>
                            <tr><td><strong>Outcome</strong></td><td>Condonation order; original document then filed with applicable fees</td><td>Compounding order specifying sum payable; payment discharges the offence</td></tr>
                            <tr><td><strong>Pre-conditions</strong></td><td>Reasonable cause for delay must be demonstrable; board resolution required</td><td>Offence punishable with fine only (not imprisonment-only); NOT compounded for same offence in preceding 3 years; NO investigation pending</td></tr>
                            <tr><td><strong>Typical timeline</strong></td><td>3 to 4 months (RD level)</td><td>4-6 months (RD level) | 6-9 months (NCLT level)</td></tr>
                            <tr><td><strong>Prosecution avoided?</strong></td><td>Yes - condonation cures the delay so no offence arises</td><td>Yes - compounded offence cannot be prosecuted under Section 441(4)</td></tr>
                            <tr><td><strong>Best for</strong></td><td>Voluntary catch-up - founder-recognised backlog before MCA action</td><td>Reactive cleanup - after MCA has acted, or where penalty adjudicated</td></tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="highlight-box" style="margin-top:24px;background:#E8F5E9;border-left:4px solid #10B981;">
                        <p><strong>&#10003; Both paths can run in parallel.</strong> A backlog cleanup engagement often uses BOTH paths sequentially: Section 460 condonation to get permission to file the delayed annual returns (AOC-4, MGT-7), and Section 441 compounding to settle any specific offence that the ROC adjudicates as part of the cleanup. Patron sequences these for the lowest total cost outcome.</p>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Condonation of Delay ROC Filings:</strong></p>
                    
                    <p><strong>Section 460 (Condonation of Delay):</strong> Central Government's power to forgive a delay in filing a document or making an application under the Companies Act, 2013 - applicable BEFORE prosecution starts. Form CG-1 filed; condonation order received; original document then filed citing INC-28 SRN.</p>
                    <p><strong>Section 441 (Compounding of Offences):</strong> Settlement of an offence punishable with fine by paying a compounding fee in lieu of prosecution - applicable AFTER offence has been recognised. Form GNL-1 filed to ROC; forwarded to RD or NCLT.</p>
                    <p><strong>Section 441(1)(b):</strong> Regional Director compounds offences where maximum fine does not exceed Rs 25 lakh (raised from Rs 5 lakh by Companies (Amendment) Act, 2020).</p>
                    <p><strong>Section 441(2) Explanation:</strong> 3-year bar - the same offence cannot be compounded by the same company or officer within 3 years from the date of compounding of the previous similar offence.</p>
                    <p><strong>Section 441(4):</strong> Compounded offences cannot be prosecuted; the compounding order discharges the offence.</p>
                    <p><strong>Section 441(6)(b):</strong> Offences punishable with imprisonment only, or imprisonment and fine, cannot be compounded.</p>
                    <p><strong>Form CG-1:</strong> Application to the Central Government for condonation of delay under Section 460. Includes reasons in writing, board resolution, supporting documents.</p>
                    <p><strong>Form GNL-1:</strong> Application to ROC for compounding of offence under Section 441. ROC forwards to RD or NCLT with its own report.</p>
                    <p><strong>Form INC-28:</strong> Notice of order of the Tribunal / Court / Central Government / RD filed with ROC within 7 days of the order.</p>
                    <p><strong>Pahuja Takii Seeds Ltd vs ROC (2018):</strong> NCLAT Company Appeal (AT) No. 80 of 2018 - confirmed NCLT has unlimited compounding jurisdiction irrespective of fine amount; also confirmed joint applications by company plus officers in default are permitted for the same offence across multiple years.</p>
                    <p><strong>CCFS-2026 (Companies Compliance Facilitation Scheme, 2026):</strong> MCA amnesty via General Circular No. 01/2026 dated 24 February 2026. Window 15 April to 15 July 2026. 90% waiver on accumulated additional fees - companies pay only 10%. Applicable to AOC-4, MGT-7, MGT-7A, ADT-1, FC-3, FC-4 and old Act forms.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Condonation of Delay ROC Filings</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Two Paths</span>
                        <strong>Sec 460 + Sec 441</strong>
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
            <h2 class="section-title">When Buyers Need This Service: Five Common Triggers</h2>
            <div class="content-text">
                
                
                <p>Backlog cleanup is rarely a leisurely decision. The five triggers that bring buyers to this service almost always carry a hard deadline imposed by a third party - investor, acquirer, bank, or regulator.</p>

                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead>
                        <tr>
                            <th>Trigger</th>
                            <th>Why It Forces Action</th>
                            <th>Typical Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><strong>1. Funding Round Diligence</strong></td><td>Investor diligence will not close until compliance gap is rectified. Term sheet requires "clean cap table and clean compliance" representations.</td><td>30 to 60 days from term sheet to close - aggressive</td></tr>
                        <tr><td><strong>2. Merger / Sale Diligence</strong></td><td>Acquirer will not pay agreed valuation against unrectified ROC defaults. Reps and warranties require defaults disclosed and cured before signing.</td><td>30 to 90 days from LOI to close</td></tr>
                        <tr><td><strong>3. Director Change Exposing Defaults</strong></td><td>New independent / nominee director performs onboarding diligence and discovers backlog. Insists on cleanup before joining or as condition of joining.</td><td>30 to 60 days from nomination</td></tr>
                        <tr><td><strong>4. MCA Notice Triggering Action</strong></td><td>ROC issues show-cause under Section 137(3) or Section 92(5) for late AOC-4 or MGT-7. Response window typically 21 days; non-response escalates to prosecution.</td><td>21 to 30 days from notice date</td></tr>
                        <tr><td><strong>5. Bank Financing Requirement</strong></td><td>Term loan or working capital facility requires "no compliance defaults" certificate. Bank cancels or downsizes facility if unrectified.</td><td>Variable - typically 30 to 90 days</td></tr>
                    </tbody>
                </table>
                </div>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>Time-to-clean is shorter than time-to-rectify under normal MCA processing.</strong> Patron expedites by sequencing the right path (Section 460 vs Section 441), drafting all documents in parallel, and maintaining direct C-PACE / RD / NCLT bench coordination across all 4 offices.</p>
                </div>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Delivers in the Backlog Cleanup Engagement</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Backlog Diagnostic and Path Selection</strong></td><td>Full MCA portal diagnostic - every form that should have been filed for every FY, every event-based filing missed (MGT-14 on resolutions, DIR-12 on director changes, PAS-3 on allotments). Each default categorised as Section 460-path (pre-prosecution) or Section 441-path. Total backlog quantified.</td></tr>
                        <tr><td><strong>2. Board Resolution and Authorisation</strong></td><td>Board meeting convened; resolution drafted authorising the cleanup engagement and the signatory (Director / CS / CFO). Specific resolutions tailored to Section 460 path, Section 441 path, or both in parallel. Recorded in minute book.</td></tr>
                        <tr><td><strong>3. Form CG-1 / Form GNL-1 Application Drafting</strong></td><td>For Section 460 path - Form CG-1 drafted with written reasons for delay, board resolution, supporting documents. For Section 441 path - Form GNL-1 drafted with offence details, fine calculation, mitigating circumstances, prior compliance record.</td></tr>
                        <tr><td><strong>4. Hearing Representation Before RD or NCLT</strong></td><td>For Section 460 cases - representation before Regional Director (Central Government delegate). For Section 441 cases - representation before RD (max fine up to Rs 25 lakh) or NCLT (above Rs 25 lakh, or by election under Pahuja Takii principle). Patron CAs and CS appear in person where required.</td></tr>
                        <tr><td><strong>5. Underlying Backlog Filing Post-Order</strong></td><td>After Central Government / RD / NCLT order, original delayed documents filed: pending AOC-4 for each year, pending MGT-7 / MGT-7A, pending MGT-14, pending DIR-12, etc. Order itself filed in Form INC-28 within 7 days. All forms paid with statutory fees plus additional / late fees per the order.</td></tr>
                        <tr><td><strong>6. CCFS-2026 Amnesty Window Optimisation</strong></td><td>Where the cleanup falls within the active CCFS-2026 window (15 April to 15 July 2026), Patron leverages the 90% waiver on accumulated additional fees to materially reduce penalty exposure. Where the engagement deadline allows, we time underlying form filings to coincide with the amnesty window.</td></tr>


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
            <h2 class="section-title">Procedure: 9 Steps Across Both Paths</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs the cleanup as a project - end-to-end, fixed-fee, dedicated CS plus partner-CA review. Steps 1 to 5 cover the Section 460 condonation path; Steps 6 to 9 cover the Section 441 compounding path. Both run sequentially or in parallel as the case demands.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Backlog Diagnostic and Path Confirmation (Section 460 Path)</h3>
                        <p class="step-description">Full MCA21 diagnostic; each default categorised. Section 460 path confirmed where no prosecution or notice has been served. Total backlog quantified across all years and forms.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MCA21 diagnostic
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Path confirmed Day 1
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Backlog quantified
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <line x1="65" y1="52" x2="78" y2="65" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                    <text x="55" y="46" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MCA21</text>
                                    <rect x="25" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="36" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 460</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Diagnostic Done</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Board Resolution and Signatory Authorisation</h3>
                        <p class="step-description">Board meeting convened; resolution authorising Form CG-1 application; signatory designated (Director / CS / CFO). Recorded in minute book and circulated for DSC application.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Board meeting held
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Signatory designated
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Resolution recorded
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="12" fill="#14365F"/>
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">BOARD RESOLUTION</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="30" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="68" x2="85" y2="68" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Authorised</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Form CG-1 Drafting and Central Government Submission</h3>
                        <p class="step-description">Reasons for delay drafted with documentary evidence (medical certificates, key person departure, business disruption). Form CG-1 filed with Central Government - typically through Regional Director by delegation. Supporting board resolution and documents attached.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Written reasons drafted
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Evidence attached
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CG-1 filed via RD
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="10" fill="#14365F"/>
                                    <text x="44" y="27" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">CG-1</text>
                                    <line x1="31" y1="38" x2="57" y2="38" stroke="#E8712C" stroke-width="1.5" stroke-linecap="round"/>
                                    <line x1="31" y1="46" x2="55" y2="46" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="54" x2="57" y2="54" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="62" x2="53" y2="62" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <path d="M67 47l10 0M77 47l-3 -3M77 47l-3 3" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="82" y="32" width="20" height="30" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="92" y="47" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CENTRAL</text>
                                    <text x="92" y="55" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GOVT</text>
                                </svg>
                            </div>
                            <span class="illustration-label">CG-1 Submitted</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Hearing and Central Government Condonation Order</h3>
                        <p class="step-description">Hearing scheduled before Regional Director or designated officer. Patron CS represents the company; reasons for delay presented; order condoning delay passed (or, in rare cases, rejected). Typical timeline 60-90 days from filing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Hearing attended
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Patron CS represents
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Order received
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="20" width="35" height="50" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">HEARING</text>
                                    <circle cx="40" cy="46" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="40" y="49" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RD</text>
                                    <path d="M62 45l8 0M70 45l-3 -3M70 45l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="20" width="28" height="50" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ORDER</text>
                                    <circle cx="88" cy="50" r="5" fill="#10B981"/>
                                    <path d="M85 50l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Condonation Order</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Form INC-28 Filing + Originally Delayed Documents</h3>
                        <p class="step-description">Central Government order filed with ROC in Form INC-28 within 7 days. Originally delayed documents (AOC-4, MGT-7, MGT-14, DIR-12, etc.) then filed with statutory fees plus applicable late fees, citing the INC-28 SRN. CCFS-2026 amnesty applied where active.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                INC-28 within 7 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                All backlog filed
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CCFS-2026 leveraged
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="20" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="40" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-28</text>
                                    <line x1="40" y1="45" x2="40" y2="52" stroke="#14365F" stroke-width="1.5" stroke-dasharray="2,2"/>
                                    <rect x="22" y="55" width="16" height="14" rx="1" fill="#fff" stroke="#14365F" stroke-width="1"/>
                                    <text x="30" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text>
                                    <rect x="42" y="55" width="16" height="14" rx="1" fill="#fff" stroke="#14365F" stroke-width="1"/>
                                    <text x="50" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text>
                                    <rect x="64" y="32" width="34" height="35" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="81" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CCFS-2026</text>
                                    <text x="81" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">90% WAIVER</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Backlog Cleared</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Compounding Application Drafting (Section 441 Path)</h3>
                        <p class="step-description">Where prosecution has commenced or fine adjudicated, board resolution and Form GNL-1 drafted with offence details, fine calculation, mitigating circumstances, and prior compliance record. Section 441(2) 3-year bar check completed.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                GNL-1 drafted
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Mitigating factors cited
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                3-year bar checked
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="10" fill="#14365F"/>
                                    <text x="44" y="27" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">GNL-1</text>
                                    <line x1="31" y1="38" x2="57" y2="38" stroke="#E8712C" stroke-width="1.5" stroke-linecap="round"/>
                                    <line x1="31" y1="46" x2="55" y2="46" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="54" x2="57" y2="54" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="31" y1="62" x2="53" y2="62" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 441</text>
                                </svg>
                            </div>
                            <span class="illustration-label">GNL-1 Ready</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">ROC Filing and Forwarding to RD or NCLT</h3>
                        <p class="step-description">Form GNL-1 filed to ROC. ROC reviews and forwards to Regional Director (max fine up to Rs 25 lakh under Section 441(1)(b)) or NCLT (above Rs 25 lakh, unlimited jurisdiction per Pahuja Takii) with its own report on the offence.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                GNL-1 to ROC
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                RD: <= Rs 25 lakh
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                NCLT: > Rs 25 lakh
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="20" y="35" width="18" height="22" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="29" y="49" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ROC</text>
                                    <path d="M40 42l6 0M46 42l-2 -2M46 42l-2 2" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="50" y="22" width="22" height="18" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="61" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RD</text>
                                    <rect x="50" y="52" width="22" height="18" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="61" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NCLT</text>
                                    <text x="86" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&lt;= 25L</text>
                                    <text x="86" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&gt; 25L</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Forwarded</span>
                            <span class="step-number-large">07</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 8</span>
                        <h3 class="step-title">Hearing Before RD or NCLT</h3>
                        <p class="step-description">Patron represents the company at the compounding hearing. Compounding fee specified by RD or NCLT in the order, not exceeding the maximum statutory fine for the offence. RD hearings 4-6 months; NCLT hearings 6-9 months typically.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Patron representation
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Compounding fee fixed
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Order issued
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="20" width="35" height="50" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">HEARING</text>
                                    <circle cx="40" cy="46" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="40" y="49" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RD/NCLT</text>
                                    <path d="M62 45l8 0M70 45l-3 -3M70 45l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="20" width="28" height="50" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ORDER</text>
                                    <text x="88" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FEE FIXED</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Hearing Done</span>
                            <span class="step-number-large">08</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 9</span>
                        <h3 class="step-title">Compounding Fee Payment + Form INC-28 + Closure</h3>
                        <p class="step-description">Compounding fee paid to Central Government within timeframe specified in the order. Order filed in Form INC-28 within 7 days. Compounded offence cannot be prosecuted under Section 441(4). Patron retains complete engagement pack for audit trail.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Fee paid + INC-28
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 441(4) bars prosecution
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Closure pack delivered
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="20" y="22" width="32" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="36" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FEE</text>
                                    <text x="36" y="47" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PAID</text>
                                    <path d="M30 55l4 4 8 -8" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <path d="M56 42l8 0M64 42l-3 -3M64 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="68" y="22" width="32" height="42" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="84" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-28</text>
                                    <text x="84" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+ CLOSED</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Compounding Done</span>
                            <span class="step-number-large">09</span>
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
            <h2 class="section-title">Documents Required for Cleanup Engagement</h2>
            <div class="content-text">
                
                
                <p>The documents below cover both the Section 460 condonation path (Form CG-1) and the Section 441 compounding path (Form GNL-1). Patron prepares missing items in-house wherever feasible.</p>

                <h3 style="margin-top:24px;">Company Setup and Statutory Documents</h3>
                <ul>
                    <li>Certificate of Incorporation, MOA, AOA, current MCA master data print</li>
                    <li>Schedule of all pending ROC forms by year (AOC-4, MGT-7, MGT-7A, MGT-14, DIR-12, DPT-3, PAS-3, others)</li>
                    <li>Last filed AOC-4 and MGT-7 (baseline reference)</li>
                    <li>Statement of holding-subsidiary relationships if part of a group</li>
                </ul>

                <h3 style="margin-top:24px;">For Form CG-1 (Section 460 Condonation)</h3>
                <ul>
                    <li>Board resolution authorising the application and designating signatory</li>
                    <li><strong>Detailed written reasons for the delay</strong> - non-negotiable; Central Government records reasons in writing</li>
                    <li>Supporting documents evidencing cause (medical certificates, technical errors, key person departures, business disruption)</li>
                    <li>Audited financial statements for the years of backlog</li>
                </ul>

                <h3 style="margin-top:24px;">For Form GNL-1 (Section 441 Compounding)</h3>
                <ul>
                    <li>Board resolution authorising the compounding application and designating signatory</li>
                    <li>Detailed offence narrative with fine calculation and mitigating circumstances</li>
                    <li>Prior compliance record (3-year compounding history check for Section 441(2) bar)</li>
                    <li>Show-cause notice / ROC enquiry letter / inspector report if any</li>
                    <li>SRN of any rectification filings already completed (rectifying default is a prerequisite to filing GNL-1)</li>
                </ul>

                <h3 style="margin-top:24px;">Signatory Documents</h3>
                <ul>
                    <li>Active DIN, DSC, and PAN of the authorised signatory (Director / CS / CFO)</li>
                    <li>Membership number, FRN, and active DSC of practising CA / CS certifying the filing</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Pitfalls in Backlog Cleanup - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Mixing up Section 460 and Section 441 paths</strong></td>
                            <td>A founder facing an MCA show-cause notice cannot use Section 460 condonation - the matter has progressed beyond simple delay. Conversely, voluntary cleanup before any MCA action should use Section 460, not Section 441. Mis-selection wastes 2-3 months and compounds penalty exposure.</td>
                            <td>Patron categorises each default on Day 1 - pre-prosecution defaults go to Section 460, post-notice / adjudicated defaults go to Section 441. Path locked before engagement billing begins.</td>
                        </tr>
                        <tr>
                            <td><strong>2. Section 441(2) 3-year prior-compounding bar</strong></td>
                            <td>Section 441 does not allow compounding of the same offence twice within 3 years (Section 441(2) Explanation). A company that compounded an MGT-7 late filing in 2024 cannot compound a second MGT-7 default in 2026.</td>
                            <td>Patron checks prior compounding history at intake. Where the bar applies, alternative remedies (board adjudication under Section 454, or proceeding to prosecution and seeking probation) are mapped.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Section 164(2) director disqualification from continuing default</strong></td>
                            <td>Three consecutive years of MGT-7 non-filing triggers Section 164(2) disqualification of every director for 5 years. The disqualification continues even after the underlying default is cured - requires separate remediation through writ practice.</td>
                            <td>Patron flags disqualification risk on intake. Where it has already triggered, the broader remediation (DIN reactivation, restoration of struck-off company, etc.) is mapped before cleanup billing.</td>
                        </tr>
                        <tr>
                            <td><strong>4. CCFS-2026 amnesty window timing</strong></td>
                            <td>CCFS-2026 (Companies Compliance Facilitation Scheme, 2026) is active 15 April to 15 July 2026 with 90% waiver on additional fees. Engagements that miss this window pay full Rs 100/day per form with no cap.</td>
                            <td>Patron checks CCFS-2026 eligibility on Day 1. Where the deadline allows, we time underlying form filings to coincide with the window. Where the deadline does not allow waiting, the regular Section 460 / 441 path is used.</td>
                        </tr>


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
            <h2 class="section-title">Backlog Cleanup Pricing: Fixed-Fee by Years of Default</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1-2 Years of Default</strong> - Typically AOC-4 + MGT-7 (and possibly DIR-3 KYC) pending. Single Section 460 condonation path. Hearing before Regional Director.</td><td class="text-end">Rs 50,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>3-4 Years of Default</strong> - AOC-4 + MGT-7 + multiple MGT-14 + DIR-12 + possibly DPT-3 pending. Section 460 path with detailed reasons; possible parallel Section 441 if ROC notice exists.</td><td class="text-end">Rs 1,00,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>4-5 Years of Default</strong> - Full annual cycle backlog plus event-based filings. Director disqualification under Section 164(2) likely - separate remediation also handled. Multi-form Section 441 compounding likely.</td><td class="text-end">Rs 1,50,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>5+ Years of Default</strong> - Severe backlog with director disqualification, possible suo-moto strike-off by ROC, NCLT-level compounding for high-fine offences. End-to-end multi-track engagement.</td><td class="text-end">Rs 2,00,000+ (Exl GST and Govt fees)</td></tr>
                        <tr><td>Patron Fee Coverage</td><td class="text-end">Inclusive of CS retainer, CA retainer, drafting, filings, hearing representation, INC-28 closure</td></tr>
                        <tr><td>Patron Fee Excludes</td><td class="text-end">Government penalty / compounding fees (separate per the order), travel for outstation hearings (at actuals)</td></tr>
                        <tr><td><strong>Government Late Fee under Section 403</strong></td><td class="text-end">Rs 100 per day per form, no upper cap</td></tr>
                        <tr><td>Section 137(3) AOC-4 Penalty - Company (post Companies (Amendment) Act, 2020)</td><td class="text-end">Rs 10,000 + Rs 100/day continuing, capped at Rs 2,00,000</td></tr>
                        <tr><td>Section 137(3) AOC-4 Penalty - Officer in Default (post 2020 Amendment, decriminalized)</td><td class="text-end">Rs 10,000 + Rs 100/day continuing, capped at Rs 50,000</td></tr>
                        <tr><td>Section 92(5) MGT-7 Penalty - Company (post 2020 Amendment)</td><td class="text-end">Rs 10,000 + Rs 100/day continuing, capped at Rs 2,00,000</td></tr>
                        <tr><td>Section 92(5) MGT-7 Penalty - Officer in Default (post 2020 Amendment)</td><td class="text-end">Rs 10,000 + Rs 100/day continuing, capped at Rs 50,000</td></tr>
                        <tr><td>Form CG-1 Government Filing Fee</td><td class="text-end">Rs 1,000 to Rs 5,000 (by company capital)</td></tr>
                        <tr><td>Section 441 Compounding Fee (per RD/NCLT order)</td><td class="text-end">Not exceeding maximum statutory fine for the offence</td></tr>
                        <tr><td>CCFS-2026 Amnesty Waiver (window 15 April to 15 July 2026)</td><td class="text-end"><strong>90% on accumulated additional fees - pay 10%</strong></td></tr>
                        <tr><td>Worked Example - 3-Year Backlog (Section 460 path, Series A trigger)</td><td class="text-end">Patron Rs 1,00,000 + Govt Rs 1,80,000 = Approx Rs 2,80,000 total</td></tr>
                        <tr><td>Section 164(2) Director Disqualification - 3 consecutive years of default</td><td class="text-end">5-year DIN deactivation across all companies (separate remediation)</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Condonation of Delay ROC Filings consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20quote%20for%20ROC%20backlog%20cleanup%20engagement." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Cleanup Engagement Timeline End-to-End</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Intake and diagnostic</td><td class="text-end">Week 1 (both paths)</td></tr>
                        <tr><td>Board resolution drafting and approval</td><td class="text-end">Week 2 (both paths)</td></tr>
                        <tr><td>Application drafting - Form CG-1 (Section 460) or Form GNL-1 (Section 441)</td><td class="text-end">Week 2 to 4</td></tr>
                        <tr><td>Filing to authority - Central Government (CG-1) or ROC (GNL-1)</td><td class="text-end">Week 4 to 5</td></tr>
                        <tr><td>Hearing scheduling - RD level</td><td class="text-end">Week 8 to 12</td></tr>
                        <tr><td>Hearing scheduling - NCLT level (Section 441 only)</td><td class="text-end">Week 12 to 20</td></tr>
                        <tr><td>Order issued by Central Government / RD / NCLT</td><td class="text-end">Week 12 to 24</td></tr>
                        <tr><td>Form INC-28 filing with ROC</td><td class="text-end">Within 7 days of order</td></tr>
                        <tr><td>Original document filing (Section 460 path only)</td><td class="text-end">Week 16 to 20</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Total End-to-End - Section 460 Path</strong></td><td class="text-end"><strong>3 to 6 months</strong></td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Total End-to-End - Section 441 Path (RD level)</strong></td><td class="text-end"><strong>4 to 6 months</strong></td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Total End-to-End - Section 441 Path (NCLT level)</strong></td><td class="text-end"><strong>6 to 9 months</strong></td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 Window - if applicable</strong></td><td class="text-end"><strong>15 April to 15 July 2026 (90% additional fee waiver)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; Buyer-trigger deadlines are tighter than MCA processing.</strong> Funding round / M and A diligence typically allows 30-60 days; MCA notice response window is 21 days. Both timelines are shorter than the 3-9 month Section 460 / 441 cycle. Patron handles this by sequencing the right path on Day 1, drafting in parallel, and maintaining direct RD / NCLT bench coordination across all 4 offices.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on backlog years, number of forms involved, whether NCLT-level compounding applies, and parallel director-disqualification remediation. Statutory fees, compounding fees, and travel for outstation hearings are billed separately at actuals.</p>


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
            <h2 class="section-title">Why Use a CA + CS Firm for Backlog Cleanup</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Path Selection Discipline</h3>
                <p>Mis-selecting Section 460 vs Section 441 wastes 2-3 months and compounds penalty exposure. Patron categorises each default on Day 1 against the test - pre-prosecution defaults go Section 460, post-notice defaults go Section 441. Path locked before billing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>RD and NCLT Hearing Representation</h3>
                <p>Both Section 460 and Section 441 require representation before Regional Director or NCLT. Founders without RD / NCLT experience routinely struggle with procedural matters and lose ground on penalty negotiation. Patron CS appears in person; panel counsel handles NCLT.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>3-Year Prior-Compounding Bar Check</h3>
                <p>Section 441(2) Explanation bars same-offence compounding within 3 years. Specialist firms maintain compounding history records that catch this disqualification at intake - avoiding wasted application filings and helping map alternative remedies.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Section 164(2) Disqualification Mapping</h3>
                <p>3 consecutive years of MGT-7 non-filing disqualifies every director for 5 years under Section 164(2). The disqualification is separate from the backlog cleanup and requires its own remediation path. Patron maps this exposure on Day 1.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>CCFS-2026 Amnesty Timing</h3>
                <p>CCFS-2026 runs 15 April to 15 July 2026 with 90% waiver on additional fees (General Circular No. 01/2026). A specialist firm tracks the window precisely and times underlying form filings to coincide - saving materially on penalty exposure.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Pahuja Takii Joint-Application Strategy</h3>
                <p>NCLAT 2018 ruling in Pahuja Takii Seeds Ltd vs ROC confirms NCLT unlimited compounding jurisdiction and allows joint applications by company + officers in default for the same offence across multiple years. Patron leverages this to reduce application count and timeline.</p>
            </article>
        </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders and CFOs Across India</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>

                <h3 style="margin-top:24px;">Outcome Proof - FY 2024-25 Internal Metrics</h3>
                <ul>
                    <li>Patron completed <strong>180+ backlog cleanup engagements</strong> across Section 460 and Section 441 paths in FY 2024-25</li>
                    <li><strong>95 percent favourable order rate</strong> from RD or NCLT across all engagements</li>
                    <li>Two Series A and Series B funding rounds closed on schedule that would otherwise have been blocked by compliance default</li>
                    <li>RD hearings attended in person; NCLT representation through panel counsel</li>
                    <li>Average end-to-end timeline: 4 months (Section 460 path), 6 months (Section 441 RD path), 8 months (Section 441 NCLT path)</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron handles cleanup engagements across all ROC jurisdictions. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies. Multi-engagement parallel handling - typically 30+ active cleanup engagements at any time across all 4 offices.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Condonation vs Compounding vs Strike Off: Choosing the Exit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Section 460 Condonation</th><th>Section 441 Compounding</th><th>Strike Off (Section 248)</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Outcome</td><td>Backlog cleared; company continues</td><td>Offence settled; company continues</td><td>Company dissolved; ceases to exist</td></tr>
                        <tr><td>Applicable when</td><td>Backlog recognised internally; no MCA action yet</td><td>MCA notice received OR adjudication done</td><td>Company is genuinely defunct; no future operations</td></tr>
                        <tr><td>Restores compliance status?</td><td>Yes</td><td>Yes (for the specific offence compounded)</td><td>No - bypasses compliance by dissolving</td></tr>
                        <tr><td>Preserves company entity?</td><td>Yes</td><td>Yes</td><td>No - company struck off</td></tr>
                        <tr><td>Director liability cured?</td><td>Yes - prevents disqualification trigger</td><td>Yes for the compounded offence</td><td>No - Section 164(2) disqualification can still apply</td></tr>
                        <tr><td>Cost band (Patron fee)</td><td>Rs 50,000 to Rs 2,00,000</td><td>Rs 50,000 to Rs 2,00,000</td><td>Rs 15,000 to Rs 25,000</td></tr>
                        <tr><td>Government cost</td><td>Late fees + CG-1 fee</td><td>Compounding fee per RD/NCLT order</td><td>Rs 10,000 STK-2 fee + backlog filing fees</td></tr>
                        <tr><td>Timeline</td><td>3 to 6 months</td><td>4 to 9 months</td><td>3 to 6 months via C-PACE</td></tr>
                        <tr><td>Best for</td><td>Funding rounds, M and A, director changes - company must continue</td><td>MCA notice already received - company must continue</td><td>Genuine wind-down only</td></tr>


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
                
                
                <p>Backlog cleanup connects to broader compliance, exit, and director-lifecycle services. The most relevant are:</p>
                <ul>
                    <li><a href="/roc-notice"><strong>ROC Notice Response</strong></a> - handling of MCA notices (Section 137(3) / 92(5) / others) that often trigger backlog cleanup engagements.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Private Limited Company Annual Compliance</strong></a> - the ongoing annual filing bundle that prevents future backlog accumulation.</li>
                    <li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance</strong></a> - the broader Pvt Ltd compliance hub.</li>
                    <li><a href="/strike-off-private-limited-company"><strong>Strike Off Private Limited Company</strong></a> - downstream alternative where backlog is too severe and the company is genuinely defunct.</li>
                    <li><a href="/company-closure"><strong>Company Closure</strong></a> - broader closure hub covering strike off, voluntary liquidation, and fast-track exit.</li>
                    <li><a href="/aoc-4-filing-services"><strong>AOC-4 Filing Services</strong></a> - financial statement filing for catch-up years.</li>
                    <li><a href="/mgt-7-filing-services"><strong>MGT-7 Filing Services</strong></a> - annual return filing for catch-up years.</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Acts, Sections, Notifications, and Case Law</h2>
            <div class="content-text">
                
                
                <h3>Governing Legislation</h3>
                <ul>
                    <li><strong>Companies Act, 2013</strong> - master statute for all corporate compliance</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - additional fee structure for late filings (Rs 100/day per form, no upper cap under Section 403)</li>
                    <li><strong>NCLT Rules, 2016</strong> - procedure for compounding applications above Rs 25 lakh fine threshold (Rule 88)</li>
                    <li><strong>CCFS-2026 - General Circular No. 01/2026 dated 24 February 2026</strong> - Companies Compliance Facilitation Scheme, 2026. Window 15 April to 15 July 2026. 90% waiver on accumulated additional fees for AOC-4, MGT-7, MGT-7A, ADT-1, FC-3, FC-4 and old Act forms.</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections</h3>
                <ul>
                    <li><strong>Section 460</strong> - Condonation of delay by Central Government (Form CG-1)</li>
                    <li><strong>Section 441</strong> - Compounding of offences (Form GNL-1)</li>
                    <li><strong>Section 441(1)(b)</strong> - Regional Director compounds offences with max fine up to Rs 25 lakh (raised from Rs 5 lakh by Companies (Amendment) Act, 2020)</li>
                    <li><strong>Section 441(2) Explanation</strong> - 3-year bar on compounding same offence twice</li>
                    <li><strong>Section 441(4)</strong> - Compounded offences cannot be prosecuted</li>
                    <li><strong>Section 441(6)(b)</strong> - Offences punishable by imprisonment only, or imprisonment and fine, cannot be compounded</li>
                    <li><strong>Section 117</strong> - Filing of resolutions in MGT-14 within 30 days</li>
                    <li><strong>Section 137(3)</strong> - AOC-4 non-filing penalty post Companies (Amendment) Act, 2020: company Rs 10,000 + Rs 100/day capped at Rs 2,00,000; officer Rs 10,000 + Rs 100/day capped at Rs 50,000 (decriminalized)</li>
                    <li><strong>Section 92(5)</strong> - MGT-7 non-filing penalty post 2020 Amendment: same structure as 137(3)</li>
                    <li><strong>Section 164(2)</strong> - Director disqualification for 5 years on 3 consecutive years of non-filing</li>
                    <li><strong>Section 403</strong> - Additional fee structure for late filings (Rs 100/day per form, no upper cap, effective 1 July 2018)</li>
                </ul>

                <h3 style="margin-top:24px;">Key Case Law</h3>
                <ul>
                    <li><strong>Pahuja Takii Seeds Ltd vs ROC (2018) - NCLAT Company Appeal (AT) No. 80 of 2018</strong> - Confirmed NCLT has unlimited compounding jurisdiction irrespective of fine amount; joint applications by company plus officers in default permitted; same offence across multiple consecutive years can be filed in a single application.</li>
                    <li><strong>Viavi Solutions India Pvt Ltd vs ROC (2017) - NCLT Mumbai</strong> - Guidance on compounding fee calculation factors including nature and gravity of offence, period of default, intent, financial condition, and rectification status.</li>
                    <li><strong>Cinepolis India Pvt Ltd vs ROC (2017) - NCLAT</strong> - Confirmed compounding remains permissible where offence is punishable by fine or by imprisonment-or-fine (not imprisonment-only).</li>
                </ul>

                <h3 style="margin-top:24px;">Past Amnesty Schemes Pattern (For Context)</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Scheme</th><th>Window</th><th>Key Relief</th></tr></thead>
                    <tbody>
                        <tr><td>CLSS 2014 (Company Law Settlement Scheme)</td><td>2014</td><td>75% additional fee waived for pending filings</td></tr>
                        <tr><td>CODS 2018 (Condonation of Delay Scheme)</td><td>Jan-Mar 2018</td><td>One-time amnesty for disqualified directors and pending filings</td></tr>
                        <tr><td>CFSS 2020 (Companies Fresh Start Scheme)</td><td>Apr-Sep 2020 (extended to Dec 2020)</td><td>Full waiver of additional fees + immunity from prosecution</td></tr>
                        <tr><td>LLP Settlement Scheme 2020</td><td>2020</td><td>Equivalent relief for LLP filings</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 (Companies Compliance Facilitation Scheme) - CURRENT</strong></td><td><strong>15 April to 15 July 2026</strong></td><td><strong>90% waiver on accumulated additional fees - pay only 10%</strong></td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for Form CG-1, Form GNL-1, and Form INC-28 filing, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for General Circular No. 01/2026, and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on Section 460 condonation, Section 441 compounding, RD vs NCLT jurisdiction, Form CG-1 documents, 3-year prior-compounding bar, CCFS-2026 amnesty, and total cleanup cost for 3+ year backlogs.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is condonation of delay under Section 460 of the Companies Act, 2013?</h3>
                        <div class="faq-expanded__a"><p>Section 460 empowers the Central Government to condone (forgive) delays in filing applications or documents required under the Companies Act. It applies where a filing has not been made within the statutory time limit but no prosecution has been initiated yet. The company files Form CG-1 with reasons for delay; the Central Government - typically through the Regional Director by delegation - examines the application, records reasons in writing, and passes a condonation order. The order is then filed with ROC in Form INC-28 and the originally delayed document is filed with applicable late fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is compounding of offences under Section 441?</h3>
                        <div class="faq-expanded__a"><p>Section 441 allows a company or its officer to settle an offence punishable with fine (or fine and imprisonment, but not imprisonment alone under Section 441(6)(b)) by paying a compounding fee specified by the Regional Director or NCLT - in lieu of facing criminal prosecution. The application is filed in Form GNL-1 to the ROC, which forwards it with a report to the RD (where maximum fine is up to Rs 25 lakh) or NCLT (where maximum fine is above Rs 25 lakh, or by election under the Pahuja Takii Seeds NCLAT 2018 ruling). The compounding order is filed in Form INC-28 within 7 days, and the compounded offence cannot be prosecuted under Section 441(4).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When do you use Section 460 condonation vs Section 441 compounding?</h3>
                        <div class="faq-expanded__a"><p>Use Section 460 condonation when the backlog has been recognised internally and the company wants to file the delayed document with Central Government permission - BEFORE any MCA action. Use Section 441 compounding when an MCA notice has been received, prosecution has been initiated, or an offence has been adjudicated - i.e., the matter has progressed beyond simple delay. Often both paths run in parallel: Section 460 to get permission to file the delayed annual returns, and Section 441 to compound any specific offence that the ROC adjudicates as part of the cleanup. Patron sequences the paths for the lowest total cost outcome.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Who decides compounding - Regional Director or NCLT?</h3>
                        <div class="faq-expanded__a"><p>Under Section 441(1)(b), the Regional Director or any officer authorised by the Central Government compounds offences where the maximum fine that may be imposed does not exceed Rs 25 lakh (raised from Rs 5 lakh by Companies (Amendment) Act, 2020). NCLT compounds offences where the maximum fine exceeds Rs 25 lakh. The NCLAT in Pahuja Takii Seeds Ltd vs ROC (2018) further clarified that NCLT has UNLIMITED compounding jurisdiction irrespective of the fine amount - meaning the company can elect NCLT for any offence even where RD would have had jurisdiction. RD compounding is generally faster (4-6 months) while NCLT compounding takes longer (6-9 months) but offers more bench experience for complex matters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What documents are needed for Form CG-1 condonation application?</h3>
                        <div class="faq-expanded__a"><p>Mandatory documents for Form CG-1 under Section 460 include: board resolution authorising the application and designated signatory; detailed written reasons for the delay (this is non-negotiable - Central Government records reasons in writing); supporting documents evidencing the cause of delay (medical certificates, technical errors, key person departures, business disruption); audited financial statements for the years of backlog; schedule of all pending ROC forms by year; and the active DSC of the authorised signatory. The application is filed via the MCA V3 portal addressed to the Central Government and routed to the Regional Director by delegation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can the same offence be compounded twice?</h3>
                        <div class="faq-expanded__a"><p>No. Section 441(2) Explanation contains a 3-year bar - the same offence cannot be compounded by the same company or officer within 3 years from the date of compounding of the previous similar offence. For example, a company that compounded an MGT-7 late filing offence in 2024 cannot use Section 441 to compound a second MGT-7 default in 2026; it would need to use a different remedy or wait until 2027. Patron checks compounding history at intake; where the 3-year bar applies, alternative remedies such as board adjudication under Section 454 or proceeding to prosecution with probation are explored.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is CCFS-2026 and when does it help?</h3>
                        <div class="faq-expanded__a"><p>CCFS-2026 is the Companies Compliance Facilitation Scheme, 2026 issued by MCA via General Circular No. 01/2026 dated 24 February 2026. The scheme window is 15 April to 15 July 2026. Companies filing pending AOC-4, MGT-7, MGT-7A, ADT-1, FC-3, or FC-4 forms during the window pay only 10% of accumulated additional fees - a 90% waiver. Inactive companies can opt for dormant status (MSC-1 at 50% fee) or strike-off (STK-2 at 25% fee). LLPs are NOT covered. Patron checks scheme eligibility on Day 1 and times underlying form filings to coincide where the engagement deadline allows.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the total cost of cleaning up 3+ years of ROC backlog?</h3>
                        <div class="faq-expanded__a"><p>For 3-4 years of backlog (typically AOC-4 + MGT-7 + multiple MGT-14 + DIR-12 + possibly DPT-3), Patron's fixed engagement fee is Rs 1,00,000 and indicative government penalty is Rs 1,00,000 to Rs 3,00,000 - total client outlay approximately Rs 2 to 4 lakh. For 5+ years of backlog with potential director disqualification under Section 164(2) and possible suo-moto strike-off action by ROC, Patron's fee is Rs 2,00,000+ and government penalty can reach Rs 3 to 5 lakh+ - total client outlay Rs 5 to 7 lakh. CCFS-2026 amnesty, where applicable, reduces these numbers by 90% on the additional-fee component (pay 10%).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is the service?</strong> End-to-end ROC backlog cleanup via Section 460 condonation (Form CG-1) and / or Section 441 compounding (Form GNL-1).</p>
                <p><strong>When do buyers need this?</strong> Funding round / M and A due diligence; director change exposing defaults; MCA notice received; bank financing requirement.</p>
                <p><strong>Section 460 vs Section 441?</strong> Section 460 - BEFORE MCA action (proactive cleanup). Section 441 - AFTER MCA notice / prosecution (reactive cleanup).</p>
                <p><strong>Authority?</strong> Section 460 - Central Government (typically Regional Director). Section 441 - RD (max fine up to Rs 25 lakh) or NCLT (above, plus unlimited per Pahuja Takii 2018).</p>
                <p><strong>What does Patron charge?</strong> Rs 50,000 (1-2 year backlog) | Rs 1,00,000 (3-4 year) | Rs 1,50,000 (4-5 year) | Rs 2,00,000+ (5+ year). Government penalty separate.</p>
                <p><strong>Total client outlay?</strong> Rs 1 lakh (1-2 year backlog) to Rs 7 lakh (5+ year backlog) including Patron fee plus government penalty. CCFS-2026 amnesty (15 April to 15 July 2026) reduces additional-fee component by 90%.</p>
                <p><strong>Timeline?</strong> 3-6 months (Section 460 path) | 4-9 months (Section 441 path including NCLT).</p>
                <p><strong>Section 441 3-year bar?</strong> Same offence cannot be compounded twice within 3 years (Section 441(2) Explanation).</p>
                <p><strong>Section 137(3) / 92(5) penalty (post 2020 Amendment):</strong> Rs 10,000 + Rs 100/day capped at Rs 2,00,000 (company) / Rs 50,000 (officer in default). Decriminalized - imprisonment removed.</p>
                <p><strong>CCFS-2026 source:</strong> General Circular No. 01/2026 dated 24 February 2026 - Companies Compliance Facilitation Scheme.</p>
                <p><strong>ROC backlog kaise clean kare?</strong> <em>Do paths hain - Section 460 condonation (Form CG-1) jab MCA ne abhi koi action nahi liya, ya Section 441 compounding (Form GNL-1) jab notice mil chuka ho. Patron Rs 50,000 se start hota hai 1-2 saal ke backlog ke liye, Rs 2 lakh tak 5+ saal ke backlog tak. Government penalty alag se client direct pay karta hai. CCFS-2026 window (15 April - 15 July 2026) me 90% waiver milta hai additional fees par.</em></p>
                <p><strong>Compounding aur condonation mein farak kya hai?</strong> <em>Condonation tab hota hai jab company khud se accept kar le ki filing late hui - MCA ne notice nahi bheja abhi. Section 460 ka path. Compounding tab use karte hain jab MCA ne show-cause bhej diya ho ya prosecution start ho gayi ho - Section 441 ka path. Regional Director compound karta hai agar max fine Rs 25 lakh tak ho, NCLT karta hai agar Rs 25 lakh se zyada ho. Patron dono tracks parallel mein handle karta hai jab zaruri ho.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Backlog Cleanup Cannot Wait</h2>
            <div class="content-text">
                
                
                <p>Backlog accumulates fast and the cost of inaction compounds with each passing month:</p>
                <ul>
                    <li><strong>Section 403 late fees:</strong> Rs 100 per day per form with no upper cap - a 3-year AOC-4 + MGT-7 backlog accumulates Rs 2.19 lakh in additional fees alone</li>
                    <li><strong>Section 164(2) trigger:</strong> 3 consecutive years of MGT-7 non-filing automatically disqualifies every director for 5 years across ALL companies</li>
                    <li><strong>Section 248 strike-off:</strong> ROC may initiate suo-moto strike-off action after 2+ years of non-filing</li>
                    <li><strong>Buyer-trigger deadlines:</strong> Funding round / M and A diligence (30-90 days), MCA notice response (21 days), director change diligence (30-60 days) - all shorter than the 3-9 month Section 460 / 441 cycle</li>
                </ul>

                <p style="margin-top:16px;"><strong>CCFS-2026 amnesty window (15 April to 15 July 2026) offers a 90% waiver on accumulated additional fees - a once-in-several-years opportunity.</strong> After the window closes, full Rs 100/day per form regime returns and Section 164(2) enforcement resumes.</p>

                <p style="margin-top:16px;"><strong>Get a Free Backlog Diagnostic in 24 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20ROC%20backlog%20diagnostic%20before%20the%20CCFS-2026%20deadline." target="_blank">WhatsApp us</a>. Free 15-minute consultation. We respond within 2 hours during business hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: The Strategic Path Through Backlog</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">ROC backlog cleanup is a multi-disciplinary engagement combining CS expertise (resolutions, ROC procedure, hearing representation), CA expertise (financial reconciliation, audit catch-up), and litigation experience (RD and NCLT hearings). The strategic decision is path selection: Section 460 condonation BEFORE MCA action, or Section 441 compounding AFTER notice. Mis-selection wastes 2-3 months and compounds penalty exposure.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Patron Accounting brings 15+ years of multi-regime Companies Act experience including 180+ FY 2024-25 cleanup engagements with a 95% favourable order rate at RD and NCLT level. Every engagement is partner-CA reviewed, fixed-fee priced by backlog years (Rs 50,000 for 1-2 year backlogs to Rs 2,00,000+ for 5+ year backlogs), and tied to a delivery calendar that respects buyer-trigger deadlines.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">The CCFS-2026 window (15 April to 15 July 2026) is open RIGHT NOW with a 90% waiver on accumulated additional fees. After 15 July 2026, the full Rs 100 per day per form regime resumes and Section 164(2) director-disqualification enforcement restarts. Start the diagnostic this week.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20quote%20for%20ROC%20backlog%20cleanup%20engagement." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="/cdn-cgi/l/email-protection#4c25222a230c3c2d383e23222d2f2f2339223825222b622f2321" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Condonation and Compounding Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. Section 460 condonation, Section 441 compounding, and CCFS-2026 amnesty-leveraged cleanup delivered pan-India - RD hearings attended in person; NCLT representation through panel counsel.</p>
          
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise Cleanup Engagement Pages</div>
                <div class="pa-block-sub">Local CS and CA team for in-person RD hearing coordination across ROC jurisdictions</div>
                <div class="pa-city-grid">
                    <a href="/condonation-of-delay-roc-filings/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Condonation in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Condonation in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Condonation in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Condonation in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Adjacent services that pair with backlog cleanup</div>
                <div class="pa-cross-grid">
                    <a href="/roc-notice" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">Show-Cause Handling</div></div>
                    </a>
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">Recurrence Prevention</div></div>
                    </a>
                    <a href="/aoc-4-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing</div><div class="pa-card-sub">Catch-Up Years</div></div>
                    </a>
                    <a href="/mgt-7-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing</div><div class="pa-card-sub">Catch-Up Years</div></div>
                    </a>
                    <a href="/strike-off-private-limited-company" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Strike Off Pvt Ltd</div><div class="pa-card-sub">Defunct Companies</div></div>
                    </a>
                    <a href="/company-closure" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Company Closure</div><div class="pa-card-sub">Voluntary Exit</div></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 12 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed semi-annually while the CCFS-2026 amnesty window is open. Next scheduled review: 12 November 2026 (post CCFS-2026 closure on 15 July 2026). Review triggers include MCA amendment to Section 460 or 441 procedure, new amnesty schemes, change in Section 441 RD pecuniary threshold, change in Section 137(3) / 92(5) penalty structure, new NCLAT or Supreme Court rulings on compounding jurisdiction, and any procedural change on Forms CG-1, GNL-1, or INC-28.</p>
        </div>
    </div>
</section>



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
      var phoneVal = phoneInput.value.trim();
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
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');
    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection