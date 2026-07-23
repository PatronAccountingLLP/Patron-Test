
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
    <title>Pre-Revenue Startup Compliance</title>
    <meta name="description" content="Pre-revenue startup compliance under Companies Act 2013. INC-20A 180 days. Section 139 audit despite nil revenue. Patron from Rs 30,000. CCFS 2026 active.">
    <link rel="canonical" href="/small-company-compliance-startups-pre-revenue">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Pre-Revenue Startup Compliance 2026 | Patron Accounting">
    <meta property="og:description" content="Pre-revenue startup compliance under Companies Act 2013. INC-20A 180 days. Section 139 audit despite nil revenue. Patron from Rs 30,000. CCFS 2026 active.">
    <meta property="og:url" content="/small-company-compliance-startups-pre-revenue">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/small-company-compliance-startups-pre-revenue-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pre-Revenue Startup Compliance 2026 | Patron Accounting">
    <meta name="twitter:description" content="Pre-revenue startup compliance under Companies Act 2013. INC-20A 180 days. Section 139 audit despite nil revenue. Patron from Rs 30,000. CCFS 2026 active.">
    <meta name="twitter:image" content="/images/small-company-compliance-startups-pre-revenue-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/small-company-compliance-startups-pre-revenue#breadcrumb",
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
                        "name": "Private Limited Company Compliance",
                        "item": "/private-limited-company-compliance"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Pre-Revenue Startup Compliance",
                        "item": "/small-company-compliance-startups-pre-revenue"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/small-company-compliance-startups-pre-revenue#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "Do startups with no revenue still need to file ROC compliance?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes - compliance under the Companies Act, 2013 applies from the date of incorporation, not from the date of first revenue. Section 2(20) defines a 'company' by registration, not activity. From CIN issuance, your private limited company is a separate legal person with annual reporting duties under Sections 92, 96, 129, 137, 139, and 10A - none of which contain a revenue threshold. Pre-revenue startups file the same forms as active companies; only the CONTENT (nil revenue, unchanged cap table) differs from the OBLIGATION (mandatory)."
                }
            },
            {
                "@type": "Question",
                "name": "What is INC-20A and when must a pre-revenue startup file it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "INC-20A is the Declaration of Commencement of Business under Section 10A of the Companies Act, 2013 read with Rule 23A of Companies (Incorporation) Rules, 2014. Inserted by Companies (Amendment) Ordinance 2018 dated 2 November 2018. Every company with share capital incorporated on or after 2 November 2018 must file INC-20A within 180 days of incorporation. Penalty under Section 10A(2): Rs 50,000 on company + Rs 1,000 per day on each officer in default, capped at Rs 1,00,000 per officer. INC-20A is the FIRST major Year 1 deadline and the one most first-time founders miss. ROC may also initiate strike-off under Section 248(1)(c) if business not commenced within 1 year of incorporation."
                }
            },
            {
                "@type": "Question",
                "name": "Do pre-revenue startups need a statutory audit even at zero revenue?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes - Section 139 of the Companies Act, 2013 mandates appointment of a statutory auditor for EVERY company. There is no revenue threshold exemption. First auditor must be appointed by the Board within 30 days of incorporation under Section 139(6), with ADT-1 filed within 15 days of the first board meeting. The auditor conducts a nil-revenue audit; the UDIN-tagged audit report supports the first AOC-4 filing. Section 446B small company concession reduces PENALTIES by 50 percent for Section 2(85) small companies - but it does NOT exempt the underlying audit obligation. Common founder confusion eliminated on Day 1 by Patron."
                }
            },
            {
                "@type": "Question",
                "name": "What happens if a pre-revenue startup just ignores Year 1 compliance?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Cumulative penalty exposure compounds rapidly. Year 1 alone: INC-20A miss costs Rs 1.5 to Rs 2 lakh under Section 10A(2) (company + 2 directors); AOC-4 miss adds penalty exposure under post-2020 Section 137(3) (cap Rs 2,00,000 company / Rs 50,000 officer at Rs 100/day); MGT-7 miss adds parallel exposure under Section 92(5); DIR-3 KYC adds Rs 5-10k. By Year 2 the ROC may issue Section 248(1)(c) notice for non-commencement; recovery via Section 460 condonation costs Rs 50k to Rs 1.5 lakh more. By Year 3, three consecutive MGT-7 misses trigger Section 164(2) director disqualification for 5 years - all directors disqualified from holding directorship in ANY company in their portfolio. Total cumulative exposure by Year 3 reaches Rs 3.5 to Rs 5 lakh plus director disqualification. The Rs 30-40k Patron annual fee is materially cheaper than this exposure."
                }
            },
            {
                "@type": "Question",
                "name": "Should we just convert to dormant status if we have no business?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Convert to dormant under Section 455 when the pivot trajectory is UNCERTAIN over 1-5 years. Dormant status reduces annual compliance to a single MSC-3 return (no AOC-4 / MGT-7) and reduces director board meeting obligations under Section 173(5) (one per half calendar year). Annual cost drops from Rs 30-40k to Rs 25k. Useful when: holding IP / patents for future commercialisation; venture pause for 1-5 years; 'ready company' structure for future project. NOT useful when: pivot launch is imminent within 12 months (just maintain active); pivot has clearly failed (strike off is cheaper). CCFS-2026 amnesty window 15 April-15 July 2026 may provide concessions for dormant conversion - confirm specific scheme coverage at the time of application."
                }
            },
            {
                "@type": "Question",
                "name": "Can we strike off if the startup idea did not work?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes - strike off under Section 248(2) is the formal path to dissolve a pre-revenue startup that has decisively failed. Voluntary application via Form STK-2 routed to the Centre for Processing Accelerated Corporate Exit (C-PACE) since 17 March 2023. 3-6 month processing timeline. Patron handles end-to-end at Rs 15,000 to Rs 25,000 fixed fee. CCFS-2026 amnesty active through 15 July 2026 may provide additional concessions. Strike-off makes sense when: no future use for the entity; no IP or assets to preserve; clean slate desired. Re-incorporation later is possible with a new venture; the original brand name returns to public pool after 20 years for potential reuse."
                }
            },
            {
                "@type": "Question",
                "name": "What is Section 446B small company penalty reduction?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 446B of the Companies Act, 2013 provides 50 percent reduction in penalties for small companies (defined under Section 2(85) - paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore post G.S.R. 880(E) dated 1 December 2025). The reduction applies to penalty calculations under Sections 92, 117, 137, 165, and several others - effectively halving the penalty for late annual filings if the company qualifies as a small company. CRITICAL CAVEAT: Section 446B reduces PENALTIES on default, but does NOT exempt small companies from the underlying compliance obligation. AOC-4 still must be filed; MGT-7 still must be filed; audit still required under Section 139. Section 446B is a relief mechanism for those who miss compliance - not a waiver of compliance itself."
                }
            },
            {
                "@type": "Question",
                "name": "When does a startup graduate from pre-revenue pricing to standard compliance?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Graduation happens when revenue starts and operations become active. Trigger events include: first paying customer / first sales invoice; first formal employee hired on payroll; bank inflows beyond paid-up capital and director loans; investor funding round closed. At that point the engagement moves to the standard active Pvt Ltd compliance tier - typically Rs 35,000 to Rs 50,000 per year per Patron's main Pvt Ltd annual compliance bundle, OR Rs 35,000 to Rs 45,000 per year for small companies under Section 2(85). Patron handles the transition seamlessly within the same engagement - same CA + CS team, same client file, expanded scope. We discuss the graduation at the 12-month path reassessment meeting and adjust the next-year fee accordingly. 38 percent of pre-revenue clients graduate to standard active within 24 months at Patron."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/small-company-compliance-startups-pre-revenue#service",
                "name": "Pre-Revenue Startup Compliance Services",
                "url": "/small-company-compliance-startups-pre-revenue",
                "description": "Pre-revenue startup compliance engagement for newly incorporated Private Limited Companies with no revenue. Compliance applies from date of incorporation (Section 2(20)) regardless of revenue activity. Year 1 obligations include INC-20A within 180 days under Section 10A (penalty Rs 50k company + Rs 1k/day per officer up to Rs 1 lakh per officer under Section 10A(2)), first auditor appointment via ADT-1 within 15 days of first board meeting (Section 139), mandatory statutory audit despite nil revenue (no Section 139 exemption), AOC-4 under Section 137 (post-Companies Amendment Act 2020 Section 137(3): company cap Rs 2,00,000 / officer cap Rs 50,000 at Rs 100/day - substituted via S.O. 4646(E) dated 21 December 2020), MGT-7 / MGT-7A under Section 92 (parallel post-2020 Section 92(5)), DIR-3 KYC by 30 September (triennial per G.S.R. 943(E)), DPT-3 by 30 June, ITR-6. Three optionality paths: maintain active (Rs 30-40k/year) | dormant Section 455 (Rs 25k/year up to 5 years) | strike off Section 248 (Rs 15-25k one-time). CCFS-2026 amnesty window 15 April-15 July 2026 provides 90% additional-fee waiver on Pvt Ltd backlog. Section 446B small company 50% penalty reduction does NOT waive audit requirement under Section 139.",
                "serviceType": "Pre-Revenue Startup Compliance / Annual Compliance Service",
                "provider": { "@id": "/#organization" },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "Startup company",
                        "sameAs": "https://en.wikipedia.org/wiki/Startup_company"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    },
                    {
                        "@type": "Thing",
                        "name": "Companies Act 2013",
                        "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Pre-Revenue Startup Compliance Tiers",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "Year 2+ Pre-Revenue Maintenance",
                            "price": "30000",
                            "priceCurrency": "INR",
                            "description": "Annual compliance for pre-revenue startup still in active status: AOC-4 + MGT-7 / MGT-7A + ITR-6 + DIR-3 KYC + DPT-3 + audit coordination + board meetings + statutory registers + 12-month path reassessment conversation. Excludes government fees and audit fee charged separately by practising CA."
                        },
                        {
                            "@type": "Offer",
                            "name": "Year 1 Startup Setup with INC-20A",
                            "price": "35000",
                            "priceCurrency": "INR",
                            "description": "Full first-year engagement: INC-20A within 180 days under Section 10A + first auditor appointment via ADT-1 + first nil-revenue audit + AOC-4 + MGT-7 / MGT-7A + ITR-6 + DIR-3 KYC + DPT-3 + statutory registers + board calendar. Onboarding within 90 days post-incorporation. INC-20A 100 percent on-time across 120+ engagements FY 2024-25."
                        },
                        {
                            "@type": "Offer",
                            "name": "Pre-Revenue with Crossed Audit Threshold",
                            "price": "40000",
                            "priceCurrency": "INR",
                            "description": "For startups where authorised capital crosses Rs 10 lakh OR turnover above Rs 1 crore (rare for pre-revenue but possible with large funding rounds). Adds expanded audit scope and additional documentation. Year 1 with INC-20A version also at this tier."
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
                        Pre-Revenue Startup Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Year 1 First Deadline:</span> INC-20A within 180 days of incorporation under Section 10A + Rule 23A. The most-missed deadline among first-time founders.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Year 1 with INC-20A: Rs 35,000-40,000 | Year 2+ pre-revenue maintenance: Rs 30,000 | Three-path optionality on Day 1.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audit Required Despite Nil Revenue:</span> Section 139 mandates statutory audit for every company - no revenue threshold exemption. Section 446B 50% reduction is on penalties only.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Three Paths Forward:</span> Maintain active (Rs 30-40k/year) | Convert dormant Section 455 (Rs 25k/year) | Strike off Section 248 (Rs 15-25k once).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 120+ Startup Year 1 Engagements FY24-25 | 100% INC-20A On-Time</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20have%20a%20pre-revenue%20startup%20and%20need%20compliance%20setup%20support." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Pre-Revenue Startup Compliance'/>
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
                                <option value="small-company-compliance-startups-pre-revenue" selected>Pre-Revenue Startup Compliance (this page)</option>
                                <option value="startup-registration">Startup Registration (Predecessor)</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance (Graduation)</option>
                                <option value="small-company-compliance-dormant">Dormant Company Section 455</option>
                                <option value="strike-off-private-limited-company">Strike Off Pvt Ltd (STK-2)</option>
                                <option value="condonation-of-delay-roc-filings">Condonation of Delay (Recovery)</option>
                                <option value="small-company-annual-compliance">Small Company Compliance</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Got required documents within 4 hours of request. Patron tracked our INC-20A deadline from Day 1 - filed at Day 165 with comfortable buffer. Zero stress, zero penalty risk. Continuing into Year 2 maintenance at Rs 30k.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">SaaS Startup Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune | Year 1 INC-20A engagement</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professionalism, attention to detail, and timely communication made the process smooth. We were confused about the audit at zero revenue - Patron clarified Section 139 on Day 1 and arranged a CA experienced in nil-revenue audits. Painless first AOC-4 filing.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Deeptech Startup | Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. We had to decide between active maintenance and dormant conversion at our 18-month checkpoint - Patron honestly recommended dormant (Section 455) for our 2-year IP hold. Saved Rs 5-10k per year. And it's not expensive at all.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IP Holdco | Delhi | Dormant pivot</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our pivot failed at Month 24 - Patron honestly recommended strike off (Section 248) rather than burning Rs 30k more on dormant. STK-2 via C-PACE done in 4 months. Clean closure, no surprises. Will use Patron again when we incorporate the next venture.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FF</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Failed Startup Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Gurugram | Strike-off pivot</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Started revenue in Month 16 - graduated seamlessly to Patron's standard active compliance at Rs 38k. Same CA + CS team, no rework, just expanded scope. The 12-month path reassessment call made the transition transparent and frictionless.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Graduated Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bangalore | Pre-revenue to active</div>
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
                    <p>Free 15-minute diagnostic call. INC-20A 180-day deadline tracked from Day 1 (Patron auto-schedules in Months 4-5). Three-path decision support (active vs dormant vs strike off) on Day 1. Section 139 audit despite nil revenue arranged via ADT-1 within 15 days of first board meeting. Section 92(5) / 137(3) post-Companies (Amendment) Act 2020 penalty framework applied (substituted via S.O. 4646(E) dated 21 December 2020). CCFS-2026 amnesty window leveraged for Year 1 default cleanup where applicable.</p>
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
                <a href="#what-section" class="toc-btn">Why It Applies</a>
                <a href="#who-section" class="toc-btn">Three Paths</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">7-Step Year 1</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA Tier</a>
                <a href="#comparison-section" class="toc-btn">Status Compared</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: The 'No Revenue' Question Answered Honestly</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Pre-Revenue Startup Compliance Services at a Glance</strong></p>
                    <p><strong>Yes - pre-revenue startups still owe full ROC compliance from the date of incorporation.</strong> The Companies Act, 2013 attaches compliance obligations to the corporate entity itself, not to revenue activity. Year 1 obligations: <strong>INC-20A within 180 days</strong> (Section 10A); statutory audit under Section 139 (no revenue exemption); first AOC-4 within 30 days of AGM (Section 137); first MGT-7 within 60 days of AGM (Section 92); DIR-3 KYC by 30 September; DPT-3 by 30 June; ITR-6. Three paths: <strong>Maintain active</strong> (Rs 30-40k/year if pivot imminent) | <strong>Convert dormant Section 455</strong> (Rs 25k/year for 1-5 years) | <strong>Strike off Section 248</strong> (Rs 15-25k one-time if pivot failed). Patron handles all three.</p>
                </div>
                <p>Section 2(20) of the Companies Act, 2013 defines a 'company' by registration - not by activity. From the moment your CIN is generated at the Registrar of Companies, your private limited company is a separate legal person with annual reporting duties. What changes for pre-revenue startups is the CONTENT of the filings (nil-revenue financials, unchanged cap table, nil ITR), not the OBLIGATION to file.</p>
                <p>Below is the quick-reference summary covering compliance trigger (incorporation date, not revenue), the first hard deadline (INC-20A within 180 days under Section 10A), Year 1 annual cycle, audit requirement under Section 139 despite nil revenue, Patron's startup-friendly three-tier pricing, the three optionality paths, and the risks of ignoring (Section 164(2) director disqualification, Section 248(1)(c) strike-off, cumulative penalty Rs 3.5-5 lakh by Year 3).
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Compliance Trigger</td><td>Date of incorporation (NOT date of first revenue). Section 2(20) of Companies Act, 2013 defines "company" by registration, not activity. CIN issued = compliance starts.</td></tr>
                        <tr><td>First Hard Deadline</td><td><strong>INC-20A within 180 days of incorporation</strong> under Section 10A + Rule 23A (for companies incorporated on or after 2 November 2018 with share capital). Penalty Section 10A(2): Rs 50,000 company + Rs 1,000/day per officer up to Rs 1 lakh.</td></tr>
                        <tr><td>Annual Cycle (Year 1+)</td><td>AOC-4 (Section 137) + MGT-7/MGT-7A (Section 92) + ITR-6 + DIR-3 KYC + DPT-3 (if applicable) + statutory audit under Section 139. AGM within 9 months of FY-end (Section 96).</td></tr>
                        <tr><td>Audit Required?</td><td><strong>YES - even at zero revenue.</strong> Section 139 mandates statutory audit for every company. Section 446B reduces PENALTIES by 50% for small companies but does NOT waive audit requirement.</td></tr>
                        <tr><td>Penalty Framework (Post-2020)</td><td><strong>Section 137(3) (AOC-4) and Section 92(5) (MGT-7) post-Companies (Amendment) Act 2020:</strong> Rs 10,000 + Rs 100/day, capped at <strong>Rs 2,00,000 company / Rs 50,000 officer in default</strong> (substituted via S.O. 4646(E) dated 21 December 2020). Replaces pre-2020 Rs 50k-Rs 5 lakh fine structure.</td></tr>
                        <tr><td>Cost (Patron Startup Tier)</td><td><strong>Year 1</strong> (with INC-20A + first audit + first annual cycle): Rs 35,000 to Rs 40,000. <strong>Year 2+</strong> pre-revenue maintenance: Rs 30,000. With audit threshold crossed: Rs 40,000.</td></tr>
                        <tr><td>Three Optionality Paths</td><td>1) <strong>Maintain active</strong> (Rs 30-40k/year) - if pivot imminent within 12 months; 2) <strong>Dormant status under Section 455</strong> (Rs 25k/year) - if uncertain timing, up to 5 years; 3) <strong>Strike off under Section 248</strong> (Rs 15-25k one-time) - if pivot failed.</td></tr>
                        <tr><td>Risk of Ignoring</td><td>Director disqualification under Section 164(2) for 5 years on 3-year MGT-7 non-filing. ROC suo-moto strike-off under Section 248(1)(c) if business not commenced within 1 year of incorporation. Cumulative penalty exposure Rs 3.5-5 lakh by Year 3.</td></tr>
                        <tr><td>CCFS-2026 Coverage</td><td><strong>AVAILABLE</strong> for Pvt Ltd backlog. 90% additional-fee waiver. Window 15 April-15 July 2026 (General Circular 01/2026 dated 24 February 2026). Optimal window to clean up Year 1 defaults before they trigger Section 164(2).</td></tr>
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
                <h2 class="section-title">Why Compliance Applies from Incorporation, Not from Revenue</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>The core mental shift for first-time founders: <strong>the Companies Act, 2013 attaches compliance obligations to the corporate ENTITY, not to its activity level</strong>. From the moment your CIN is generated at the Registrar of Companies, your private limited company is a separate legal person with annual reporting duties - regardless of whether you have raised money, launched a product, signed customers, or earned a single rupee.</p>

                    <p style="margin-top:16px;">The mechanism is straightforward. <strong>Section 2(20) of the Companies Act, 2013</strong> defines a "company" as one registered under the Act. From that registration onwards, the statutory duties under:</p>
                    <ul>
                        <li><strong>Section 92</strong> (annual return - MGT-7 / MGT-7A)</li>
                        <li><strong>Section 96</strong> (annual general meeting)</li>
                        <li><strong>Section 129</strong> (financial statements)</li>
                        <li><strong>Section 137</strong> (filing of financial statements - AOC-4)</li>
                        <li><strong>Section 139</strong> (statutory audit)</li>
                        <li><strong>Section 10A</strong> (declaration of commencement of business - INC-20A)</li>
                    </ul>
                    <p>all attach. <strong>None of these sections contain a revenue threshold.</strong> The duty is to the registration, not to operations.</p>

                    <p style="margin-top:16px;">What changes for pre-revenue startups is the CONTENT of the filings, not the OBLIGATION to file. A pre-revenue startup files: an AOC-4 with audited financials showing nil revenue and capital deployed; an MGT-7 with director details and capital structure (unchanged from incorporation typically); an ITR-6 declaring nil income; a DPT-3 declaring nil deposits or director loans. All of these are mandatory; all are at risk of penalty if missed.</p>

                    <div class="highlight-box" style="margin-top:24px;background:#FEF4EE;border-left:4px solid #E8712C;">
                        <p><strong>&#9888; The "we have no business so we have no compliance" mental model</strong> is the single most expensive mistake first-time founders make. By Year 3, cumulative penalty exposure reaches Rs 3.5-Rs 5 lakh PLUS Section 164(2) director disqualification (5 years across ALL companies the director sits on). The Rs 30-40k Patron annual fee is materially cheaper than this exposure.</p>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Pre-Revenue Startup Compliance:</strong></p>
                    
                    <p><strong>Section 10A - INC-20A (Declaration of Commencement of Business):</strong> Inserted by Companies (Amendment) Ordinance 2018 dated 2 November 2018. Every company with share capital incorporated on or after 2 November 2018 must file INC-20A within 180 days of incorporation. Filed under Rule 23A of Companies (Incorporation) Rules 2014. The FIRST major Year 1 deadline.</p>
                    <p><strong>Section 10A(2) INC-20A Penalty:</strong> Company liable to penalty <strong>Rs 50,000</strong>. Every officer in default liable to penalty <strong>Rs 1,000 per day, continuing until compliance, capped at Rs 1,00,000 per officer</strong>. Recent MCA adjudication orders confirm strict enforcement - Rs 2.5 lakh penalties seen on small Pvt Ltds with 4 defaulting directors.</p>
                    <p><strong>Section 137(3) Post-Companies (Amendment) Act 2020 AOC-4 Penalty:</strong> Company and every officer in default liable to penalty Rs 10,000 + Rs 100/day continuing, capped at <strong>Rs 2,00,000 for company</strong> and <strong>Rs 50,000 for each officer</strong>. Substituted via S.O. 4646(E) dated 21 December 2020. Replaces pre-2020 fine Rs 50k-Rs 5 lakh.</p>
                    <p><strong>Section 92(5) Post-2020 MGT-7 Penalty:</strong> Parallel structure to Section 137(3). Company cap Rs 2,00,000 / Officer cap Rs 50,000 at Rs 100/day. Substituted via S.O. 4646(E) dated 21 December 2020. Decriminalized framework.</p>
                    <p><strong>Section 139 Statutory Audit:</strong> Mandatory appointment of statutory auditor for every company - <strong>no revenue threshold exemption</strong>. First auditor appointed within 30 days of incorporation by Board (Section 139(6)) via Form ADT-1 within 15 days. Pre-revenue startups must complete nil-revenue audit before AOC-4 filing.</p>
                    <p><strong>Section 248(1)(c) ROC Strike-Off:</strong> Registrar may strike off a company that has failed to commence business within 1 year of incorporation. INC-20A miss past Day 365 triggers this risk independently of penalty exposure.</p>
                    <p><strong>Section 446B Small Company 50% Penalty Reduction:</strong> Provides 50 percent reduction in PENALTIES for small companies under Section 2(85) (paid-up capital up to Rs 10 crore + turnover up to Rs 100 crore per G.S.R. 880(E) dated 1 December 2025). <strong>Critical: applies to penalty calculations only - does NOT exempt the underlying compliance obligation, does NOT waive audit requirement under Section 139.</strong></p>
                    <p><strong>Section 455 Dormant Company Status:</strong> Alternative path for inactive companies. Pause via Form MSC-1 conversion; revive via Form MSC-4 anytime within 5 years. Annual compliance reduced to single MSC-3 return. Section 173(5) reduces board meeting requirement.</p>
                    <p><strong>Section 164(2) Director Disqualification:</strong> 3 consecutive years of MGT-7 non-filing triggers 5-year disqualification of every director + DIN deactivation. Cross-portfolio impact - disqualified directors lose Board seats across ALL companies in their portfolio.</p>
                    <p><strong>CCFS-2026:</strong> Companies Compliance Facilitation Scheme 2026 via General Circular 01/2026 dated 24 February 2026. 90% additional fee waiver on Pvt Ltd backlog. Window 15 April to 15 July 2026. Optimal window to clean up Year 1 defaults. (LLP Form 11 NOT covered.)</p>
                    <p><strong>Three Paths Decision Framework:</strong> Patron's Day 1 diagnostic call maps founder trajectory to one of three paths - (1) Maintain active if pivot imminent, (2) Convert dormant under Section 455 if uncertain, (3) Strike off under Section 248 if pivot failed. We do not push founders into the highest-cost path.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Pre-Revenue Startup Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Year 1 Startup</span>
                        <strong>INC-20A 180 Days + Section 139 Audit</strong>
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
            <h2 class="section-title">Three Paths for a Pre-Revenue Startup: Decision Framework</h2>
            <div class="content-text">
                
                
                <p>Pre-revenue startups have three legitimate paths. Selecting the right path depends on the founder's view of the future - imminent operations, uncertain trajectory, or already-failed pivot. The matrix below maps scenario to path:</p>

                <h3 style="margin-top:32px;">Scenario-to-Path Matrix</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr><th>Scenario</th><th>Recommended Path</th><th>Patron Annual Cost</th><th>Why</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Pre-product, planning to launch within 6-12 months</td><td><strong>Maintain active compliance</strong></td><td>Rs 30,000-40,000 per year</td><td>Pivot is imminent; converting to dormant adds friction; strike-off forfeits entity; active compliance preserves all optionality</td></tr>
                        <tr><td>Pre-product, uncertain timing (12-36 months)</td><td><strong>Convert to dormant status under Section 455</strong></td><td>Rs 25,000 per year (up to 5 years)</td><td>Material annual saving; reduces compliance burden to MSC-3 only; brand / CIN preserved; reversible via Form MSC-4 anytime</td></tr>
                        <tr><td>Pivot has failed; no future use for the company</td><td><strong>Strike off under Section 248</strong></td><td>Rs 15,000-25,000 one-time</td><td>Final closure; CCFS 2026 amnesty active through 15 July 2026 may reduce statutory fees; brand returns to pool in 20 years if you want to reuse</td></tr>
                        <tr><td>Holding IP / patents for future commercialisation</td><td>Convert to dormant status under Section 455</td><td>Rs 25,000 per year</td><td>Explicitly contemplated in Section 455(1); preserves entity at minimal cost; 5-year horizon usually sufficient</td></tr>
                        <tr><td>Co-founder split; one wants out, one wants to continue</td><td>Maintain active + handle restructuring</td><td>Rs 30,000-40,000 + restructuring fees</td><td>Use existing compliance cycle to clean up cap table and director changes via DIR-12, MGT-14</td></tr>
                        <tr><td>Failed once, want to try again with same entity</td><td>Maintain active OR convert dormant briefly</td><td>Rs 25,000-40,000 per year</td><td>Active maintenance keeps you ready; dormant for 1-2 years saves cost if next attempt 12+ months out</td></tr>
                        <tr><td>Failed once, want to try again with new entity</td><td>Strike off + new incorporation later</td><td>Rs 15-25k strike-off + Rs 12-15k new incorporation</td><td>Clean slate; old CIN history not material; brand may need rework but cost lower</td></tr>
                    </tbody>
                </table>
                </div>

                <div class="highlight-box" style="margin-top:24px;background:#E8F5E9;border-left:4px solid #10B981;">
                    <p><strong>&#9888; Patron handles all three paths.</strong> We will tell you honestly which fits your situation on the Day 1 diagnostic call. We do not push pre-revenue startups into the highest-cost path; we map your trajectory and recommend the lowest-cost option that preserves your optionality.</p>
                </div>

                <h3 style="margin-top:32px;">Year 1 Compliance Timeline at a Glance</h3>
                <p>What the first 24 months from incorporation actually look like, form by form:</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr><th>Days from Incorporation</th><th>Form / Obligation</th><th>Section / Rule</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Day 1</td><td>CIN issued; statutory registers opened</td><td>Section 88</td></tr>
                        <tr><td>Day 1-30</td><td>Open company bank account; subscribers transfer subscription money</td><td>Internal banking - foundation for INC-20A</td></tr>
                        <tr><td>Day 30</td><td>First board meeting; first auditor appointment (Section 139(6)) within 30 days via ADT-1 within 15 days</td><td>Section 173 + 139</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>By Day 180</strong></td><td><strong>INC-20A - Declaration of Commencement of Business</strong></td><td><strong>Section 10A + Rule 23A</strong></td></tr>
                        <tr><td>By 30 June each year</td><td>DPT-3 - Return of Deposits / Director Loan Declaration</td><td>Rule 16, 16A of Companies (Acceptance of Deposits) Rules, 2014</td></tr>
                        <tr><td>Within 9 months of FY end</td><td>First Annual General Meeting</td><td>Section 96</td></tr>
                        <tr><td>By 30 September each year</td><td>DIR-3 KYC for every director with DIN (triennial cycle per G.S.R. 943(E))</td><td>Rule 12A of Companies (Appointment and Qualification of Directors) Rules</td></tr>
                        <tr><td>Within 30 days of AGM</td><td>AOC-4 - Filing of Financial Statements</td><td>Section 137 + Rule 12</td></tr>
                        <tr><td>By 31 October (audit) or 31 July (non-audit)</td><td>ITR-6 - Income Tax Return</td><td>Income-tax Act, 1961</td></tr>
                        <tr><td>Within 60 days of AGM</td><td>MGT-7 / MGT-7A - Annual Return</td><td>Section 92 + Rule 11</td></tr>
                    </tbody>
                </table>
                </div>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>&#9888; INC-20A is the cascade trigger.</strong> A pre-revenue startup that misses INC-20A by Day 180 enters a cascade: cannot file ANY other ROC form until INC-20A is filed (including AOC-4, MGT-7, SH-7, MGT-14, charge forms); penalty accumulates at Rs 1,000 per day per director (capped at Rs 1 lakh per director); after 1 year of no commencement, ROC can strike off the company under Section 248(1)(c). Recovery requires filing INC-20A late with penalty plus a Section 454 adjudication response.</p>
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
            <h2 class="section-title">What Patron Delivers in the Pre-Revenue Startup Package</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. INC-20A Filing in Year 1 (Within 180 Days)</strong></td><td>INC-20A is the FIRST major Year 1 deadline and the one most first-time founders miss. We onboard new clients within their first 90 days post-incorporation, coordinate the bank account opening, ensure subscribers deposit subscription money correctly, prepare INC-20A with required attachments (bank certificate, MOA copy, board resolution), and file before Day 180. Government fee Rs 200 included; professional fee bundled in Year 1 package.</td></tr>
                        <tr><td><strong>2. First-Year Statutory Audit Coordination Despite Nil Revenue</strong></td><td>Section 139 mandates statutory audit for every company - no revenue threshold exemption. We coordinate appointment of the first auditor via Form ADT-1 (must be filed within 15 days of first board meeting); facilitate the nil-revenue audit; ensure UDIN-tagged audit report supports AOC-4 filing. Many pre-revenue founders assume audit is not required at zero revenue - that confusion is what we eliminate on Day 1.</td></tr>
                        <tr><td><strong>3. Year 1 Annual Cycle (AOC-4 + MGT-7 + ITR-6 + DIR-3 KYC + DPT-3)</strong></td><td>After the first AGM (within 9 months of FY-end), we file AOC-4 within 30 days, MGT-7 / MGT-7A within 60 days, ITR-6 by 31 October (audit case) or 31 July, DIR-3 KYC for each director by 30 September, and DPT-3 by 30 June (covering director loans declaration even at nil). All forms reflect the nil-activity reality but are statutorily complete.</td></tr>
                        <tr><td><strong>4. Statutory Registers and Board Meeting Compliance</strong></td><td>Pre-revenue startups still need to maintain statutory registers under Section 88 (register of members, register of directors and KMP, register of charges) and hold minimum 4 board meetings per year for non-small-company Pvt Ltds (or 2 meetings per year if classified as small company under Section 2(85)). Patron drafts minutes, maintains the registers, and ensures the board calendar runs cleanly.</td></tr>
                        <tr><td><strong>5. Path Reassessment Every 12 Months</strong></td><td>Every year-end we ask the founder explicitly: is the pivot still on track? Has revenue started? Should we discuss dormant status? Should we discuss strike off? This 12-month checkpoint prevents the most expensive scenario - founders silently letting compliance lapse for 2-3 years, triggering Section 164(2) disqualification and Section 248 ROC strike-off action.</td></tr>
                        <tr><td><strong>6. Graduation Path to Standard Compliance When Revenue Starts</strong></td><td>When revenue starts (typically post product-launch or first paying customer), the engagement automatically graduates to standard active Pvt Ltd compliance at Rs 35,000 to Rs 50,000 per year. The transition is seamless - same CA + CS team, same client file, just expanded scope to reflect real operations.</td></tr>


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
            <h2 class="section-title">Year 1 Compliance Procedure: 7 Steps Across 365 Days</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs every Year 1 startup engagement through a 7-step protocol structured around the INC-20A 180-day deadline and the first AGM cycle. The protocol is calendar-driven - we trigger actions in Months 4-5 (INC-20A prep), Months 10-11 (FY-end audit kickoff), Months 15-18 (first AGM and AOC-4), Months 18-21 (MGT-7), and Months 22-24 (Year 2 path reassessment).</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Engagement Intake (Days 1-30 Post-Incorporation)</h3>
                        <p class="step-description">Patron onboards the new Pvt Ltd; reviews MOA / AOA / incorporation documents (COI, PAN, TAN); sets up internal compliance calendar with INC-20A trigger (Day 180), DIR-3 KYC trigger (30 September), DPT-3 trigger (30 June), and AGM trigger (within 9 months of FY-end); collects subscriber bank deposit coordination details.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MOA / AOA review
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Calendar set up
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Subscriber tracking
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="55" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="55" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DAY 1-30</text>
                                    <rect x="22" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="33" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CIN</text>
                                    <rect x="48" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="59" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MOA/AOA</text>
                                    <rect x="74" y="68" width="24" height="8" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="86" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CALENDAR</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Onboarded</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">First Board Meeting + First Auditor Appointment (Day 30)</h3>
                        <p class="step-description">Resolution to open bank account; appointment of first auditor under Section 139(6) within 30 days of incorporation via Form ADT-1 within 15 days of first board meeting; statutory registers opened under Section 88. The first board meeting is the trigger event - missing it cascades into ADT-1 and audit setup delays.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 139(6)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ADT-1 in 15 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Statutory registers
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FIRST BOARD MEETING</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <text x="60" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FIRST AUDITOR</text>
                                    <text x="60" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ADT-1 in 15 days</text>
                                    <text x="60" y="72" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SECTION 139(6)</text>
                                </svg>
                            </div>
                            <span class="illustration-label">First BM Done</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Bank Account + Subscription Money (Days 30-90)</h3>
                        <p class="step-description">Each subscriber transfers their subscribed capital to the company bank account from their personal account - separate transfers per subscriber, traceable in bank statement. Bank certificate obtained confirming subscription money received. This is the FOUNDATION for INC-20A - without subscriber-by-subscriber bank traceability, INC-20A cannot be filed.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Per-subscriber transfer
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Bank certificate
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Day 90 buffer
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BANK ACCOUNT</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                    <text x="60" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUBSCRIPTION RECEIVED</text>
                                    <text x="60" y="66" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BANK CERT</text>
                                    <text x="60" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PER-SUBSCRIBER</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Subscription Locked</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">INC-20A Filing (By Day 180)</h3>
                        <p class="step-description">Bank certificate verified per subscriber; INC-20A prepared with all attachments (MOA copy showing authorised and subscribed share capital, board resolution authorising filing, NOC for registered office, photographs of registered office inside and outside); filed via MCA V3 portal with Rs 200 government fee. Certificate of commencement of business issued by ROC. Penalty if missed: Rs 50,000 company + Rs 1,000/day per officer up to Rs 1 lakh under Section 10A(2).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Day 180 deadline
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 10A + Rule 23A
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rs 200 govt fee
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="12" fill="#14365F"/>
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">INC-20A</text>
                                    <text x="44" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">COMMENCE</text>
                                    <text x="44" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BUSINESS</text>
                                    <text x="44" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DAY 180</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 10A</text>
                                </svg>
                            </div>
                            <span class="illustration-label">INC-20A Filed</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Books Maintenance + First Audit (Months 7-12)</h3>
                        <p class="step-description">Books of accounts maintained per Section 128 throughout the year (cash book, bank book, journal, ledger - even for nil-revenue startups with only setup expenses). Books closed for FY end (31 March). First statutory auditor conducts nil-revenue audit; UDIN-tagged audit report finalised by mid-July typically. The first-year audit relationship sets the audit pattern for subsequent years.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 128 books
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Nil-revenue audit
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                UDIN-tagged report
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BOOKS</text>
                                    <text x="40" y="48" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SEC 128</text>
                                    <text x="40" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NIL REV</text>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AUDIT</text>
                                    <text x="88" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDIN</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Books Closed</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Event-Based Filings + First AGM (Months 12-15)</h3>
                        <p class="step-description">DIR-3 KYC by 30 September (triennial cycle per G.S.R. 943(E)); DPT-3 by 30 June (declaring nil deposits or director loans); first AGM held within 9 months of FY-end under Section 96. All director-level and event-based filings completed on schedule. First AGM resolutions cleared - approval of audited financials, ratification of auditor appointment, director continuance.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DIR-3 KYC 30 Sept
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DPT-3 30 June
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AGM in 9 months
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="12" fill="#14365F"/>
                                    <text x="44" y="29" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FIRST AGM</text>
                                    <text x="44" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">9 MONTHS</text>
                                    <text x="44" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FROM FY END</text>
                                    <text x="44" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SEC 96</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-3 KYC</text>
                                </svg>
                            </div>
                            <span class="illustration-label">AGM Done</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">First AOC-4 + MGT-7 + ITR-6 (Months 15-21)</h3>
                        <p class="step-description">First AOC-4 filed within 30 days of AGM (Section 137 + Rule 12) - typically by end October. First MGT-7 / MGT-7A filed within 60 days of AGM (Section 92 + Rule 11) - typically by 29 November. ITR-6 filed by 31 October (audit case) or 31 July (non-audit). Year 1 closes with all statutory deadlines met. Year 2 calendar set up. 12-month path reassessment conversation scheduled - active vs dormant vs strike-off.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AOC-4 in 30 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MGT-7 in 60 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ITR-6 by 31 Oct
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="60" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">YEAR 1 CLOSED</text>
                                    <line x1="30" y1="46" x2="90" y2="46" stroke="#10B981" stroke-width="1"/>
                                    <text x="60" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4 + MGT-7 + ITR-6</text>
                                    <text x="60" y="66" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PATH REASSESS</text>
                                    <circle cx="60" cy="74" r="3" fill="#10B981"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Year 1 Closed</span>
                            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Document Checklist for Year 1 Pre-Revenue Startup Compliance</h2>
            <div class="content-text">
                
                
                <p>Document requirements span engagement intake (Days 1-30), INC-20A preparation (by Day 180), and first-year annual filings (Months 15-21). Patron prepares a consolidated checklist on Day 1.</p>

                <h3 style="margin-top:24px;">At Engagement Intake (Days 1-30)</h3>
                <ul>
                    <li>Certificate of Incorporation (COI) and CIN</li>
                    <li>Memorandum of Association (MOA) and Articles of Association (AOA)</li>
                    <li>PAN and TAN of the company</li>
                    <li>PAN, Aadhaar, and address proof of each director and subscriber</li>
                    <li>Active DSC (Class 3) of at least one director</li>
                    <li>DIN of each director (current DIR-3 KYC status verified)</li>
                    <li>NOC and address proof for registered office</li>
                </ul>

                <h3 style="margin-top:24px;">For INC-20A Filing (Before Day 180)</h3>
                <ul>
                    <li><strong>Bank account statement or bank certificate</strong> confirming subscription money received from each subscriber separately (per-subscriber traceability is mandatory)</li>
                    <li>Copy of MOA showing authorised and subscribed share capital</li>
                    <li>Board resolution authorising INC-20A filing and signatory director</li>
                    <li>Active Class 3 DSC of authorised director</li>
                    <li>Photographs of registered office (inside view + outside view with name signage)</li>
                    <li>Sectoral approval letter if company is regulated by RBI, SEBI, IRDAI, etc.</li>
                </ul>

                <h3 style="margin-top:24px;">For First-Year Audit and Annual Filings</h3>
                <ul>
                    <li>Books of accounts maintained as per Section 128 (cash book, bank book, journal, ledger)</li>
                    <li>Bank statements for the full financial year (from incorporation to 31 March)</li>
                    <li>Voucher records for all expenses (even nil-revenue startups typically have setup expenses)</li>
                    <li>First auditor appointment Form ADT-1 within 15 days of first board meeting</li>
                    <li>Audit working papers and UDIN-tagged audit report</li>
                    <li>Balance sheet, Profit and Loss, cash flow as at 31 March</li>
                    <li>Director KYC records for DIR-3 KYC web filing</li>
                </ul>

                <p style="margin-top:16px;"><em>Note: Recent MCA adjudication orders show Rs 2.5 lakh penalties on small Pvt Ltds with 4 defaulting directors for INC-20A miss. Documentation discipline matters from Day 1.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Pre-Revenue Startup Pitfalls - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Missing the INC-20A 180-day window</strong></td>
                            <td>The single most common failure mode for first-time founders. Founders assume compliance starts after revenue or after some "launch event" - and Day 180 passes without INC-20A filed. Cascade follows: no other ROC form can be filed; penalty accumulates at Rs 1,000 per day per officer (up to Rs 1 lakh per officer); Section 248(1)(c) strike-off risk after 1 year.</td>
                            <td>Patron auto-schedules INC-20A preparation in months 4-5 post-incorporation, filing by month 6 with comfortable buffer. We onboard new incorporations specifically with this deadline as the trigger event.</td>
                        </tr>
                        <tr>
                            <td><strong>2. Confusion about audit at zero revenue</strong></td>
                            <td>Founders frequently ask: "Do we really need a CA audit when we have no revenue?" The answer is YES - Section 139 mandates audit for every company; Section 446B small-company concession reduces PENALTIES by 50% but does NOT exempt audit.</td>
                            <td>We clarify this on Day 1 and arrange the first-year audit with a CA experienced in nil-revenue audits, keeping cost reasonable. ADT-1 first auditor appointment filed within 15 days of first board meeting.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Assuming "no business" means "no compliance"</strong></td>
                            <td>The mental model that "we have no business so we have no compliance" leads to silent default - founders simply ignore ROC obligations. By Year 2 they have missed AOC-4, MGT-7, DIR-3 KYC, possibly INC-20A. By Year 3, Section 164(2) director disqualification triggers across all directorships.</td>
                            <td>Patron's annual calendar prevents this silent default. Recovery via Section 460 condonation or Section 441 compounding costs Rs 50,000 to Rs 2 lakh - well above the Rs 30,000 maintenance cost. The Total Cost of Ownership consistently favours staying compliant.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Director DSC not renewed in Year 2+</strong></td>
                            <td>Class 3 DSCs expire every 1-2 years. Pre-revenue startups with limited ROC activity often let DSCs lapse - then realise at compliance time that the signing director's DSC is expired. New DSC issuance takes 3-5 days; INC-20A or AOC-4 deadlines may be at risk.</td>
                            <td>Patron tracks DSC expiry dates as part of the compliance calendar; renewal triggered 30 days before expiry. Continuous coverage during the long pre-revenue period prevents last-minute scrambles.</td>
                        </tr>
                        <tr>
                            <td><strong>5. Stale pre-2020 penalty figures cited elsewhere</strong></td>
                            <td>Many online articles cite pre-2020 figures for Section 92(5)/137(3) ("Rs 50,000 to Rs 5 lakh on company + officers"). This is SUPERSEDED. Post-Companies (Amendment) Act 2020 the framework is decriminalized: Rs 10,000 + Rs 100/day, capped at Rs 2,00,000 company / Rs 50,000 officer.</td>
                            <td>Patron applies the current post-2020 substituted framework (S.O. 4646(E) dated 21 December 2020). Accurate risk calibration for founders making the active vs dormant vs strike-off decision.</td>
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
            <h2 class="section-title">Pre-Revenue Startup Pricing: Three Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td colspan="2" style="background:#F0F4F8 !important;"><strong>Three Engagement Tiers</strong></td></tr>
                        <tr><td><strong>Year 1 Startup Setup (with INC-20A)</strong> - Full first-year engagement: INC-20A within 180 days + first auditor appointment via ADT-1 + first nil-revenue audit + AOC-4 + MGT-7 / MGT-7A + ITR-6 + DIR-3 KYC + DPT-3 + statutory registers + board calendar. Onboarding within 90 days post-incorporation.</td><td class="text-end">Rs 35,000 to Rs 40,000 (Exl GST, Govt fees, audit fee)</td></tr>
                        <tr><td><strong>Year 2+ Pre-Revenue Maintenance</strong> - Annual compliance for pre-revenue startup still in active status: AOC-4 + MGT-7 / MGT-7A + ITR-6 + DIR-3 KYC + DPT-3 + audit coordination + board meetings + statutory registers + 12-month path reassessment conversation.</td><td class="text-end">Rs 30,000 per year (Exl GST, Govt fees, audit fee)</td></tr>
                        <tr><td><strong>Pre-Revenue with Crossed Audit Threshold</strong> - For startups where authorised capital crosses Rs 10 lakh OR turnover above Rs 1 crore (rare for pre-revenue but possible with large funding rounds). Adds expanded audit scope and additional documentation.</td><td class="text-end">Rs 40,000 per year</td></tr>
                        <tr><td colspan="2" style="background:#E8F5E9 !important;"><strong>Three Optionality Paths (3-Year Cost Comparison)</strong></td></tr>
                        <tr><td><strong>Path 1: Maintain Active Pre-Revenue</strong> - Year 1 Rs 35k (incl. INC-20A) + Year 2 Rs 30k + Year 3 Rs 30k</td><td class="text-end">Rs 95,000 over 3 years</td></tr>
                        <tr><td><strong>Path 2: Year 1 Active + Convert Dormant Year 2</strong> - Year 1 Rs 35k + Year 2 Rs 35k (dormant conversion via MSC-1) + Year 3 Rs 25k (MSC-3 only)</td><td class="text-end">Rs 95,000 over 3 years</td></tr>
                        <tr><td><strong>Path 3: Year 1 Active + Strike Off Year 2</strong> - Year 1 Rs 35k + Year 2 Rs 20k (strike off via STK-2)</td><td class="text-end">Rs 55,000 (one-time total)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Path 4 (Risk): Ignore Compliance</strong> - Year 1-2 nominal Rs 0; Year 3 Rs 75,000-Rs 2 lakh recovery via Section 460 condonation + accumulated late fees + Section 441 compounding + Section 164(2) director disqualification risk</td><td class="text-end"><strong>Rs 75,000 to Rs 2,00,000 + DIN deactivation</strong></td></tr>
                        <tr><td colspan="2" style="background:#FEF4EE !important;"><strong>Government Fees (Paid Directly to MCA)</strong></td></tr>
                        <tr><td>INC-20A government fee</td><td class="text-end">Rs 200 (one-time)</td></tr>
                        <tr><td>AOC-4 government fee</td><td class="text-end">Rs 400-600 (capital slab dependent)</td></tr>
                        <tr><td>MGT-7 / MGT-7A government fee</td><td class="text-end">Rs 400-600 (capital slab dependent)</td></tr>
                        <tr><td>DIR-3 KYC government fee (web filing)</td><td class="text-end">Rs 0 (free)</td></tr>
                        <tr><td>First-year audit fee (charged separately by practising CA)</td><td class="text-end">Rs 15,000 to Rs 25,000 (nil-revenue audit)</td></tr>
                        <tr><td colspan="2" style="background:#FEF4EE !important;"><strong>Penalty Exposure for Defaults (Post-Companies (Amendment) Act 2020)</strong></td></tr>
                        <tr><td><strong>Section 10A(2) INC-20A miss</strong> (verified current figures)</td><td class="text-end">Company Rs 50,000 + Officer Rs 1,000/day capped at Rs 1,00,000 per officer</td></tr>
                        <tr><td><strong>Section 137(3) Post-2020 AOC-4 Penalty</strong> (substituted via S.O. 4646(E) dated 21 December 2020)</td><td class="text-end">Company cap Rs 2,00,000 / Officer cap Rs 50,000 at Rs 100/day</td></tr>
                        <tr><td><strong>Section 92(5) Post-2020 MGT-7 Penalty</strong> (parallel substituted structure)</td><td class="text-end">Company cap Rs 2,00,000 / Officer cap Rs 50,000 at Rs 100/day</td></tr>
                        <tr><td>DIR-3 KYC miss</td><td class="text-end">Rs 5,000 per director + DIN deactivation</td></tr>
                        <tr><td>Section 164(2) Director Disqualification</td><td class="text-end">5-year disqualification + DIN deactivation after 3 consecutive years of MGT-7 non-filing</td></tr>
                        <tr><td>Section 248(1)(c) Strike-Off Risk</td><td class="text-end">ROC may strike off if business not commenced within 1 year of incorporation</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 Amnesty (15 April-15 July 2026)</strong></td><td class="text-end"><strong>90% additional-fee waiver on Pvt Ltd backlog</strong> | General Circular 01/2026 dated 24 February 2026</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Pre-Revenue Startup Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20pre-revenue%20startup%20package%20from%20Rs%2030%2C000." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Year 1 Compliance Timeline by Month</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Month 1 (Days 1-30)</td><td class="text-end">Engagement intake; first board meeting facilitation; statutory registers opened; bank account opening coordinated; first auditor appointed via ADT-1</td></tr>
                        <tr><td>Month 2</td><td class="text-end">Subscriber subscription money tracking; bank certificate obtained; INC-20A documents prepared</td></tr>
                        <tr><td>Month 3-5</td><td class="text-end">INC-20A drafted and reviewed; pre-filing buffer for any subscription money lag</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Month 6 (Day 180)</strong></td><td class="text-end"><strong>INC-20A filed; certificate of commencement of business received (Section 10A)</strong></td></tr>
                        <tr><td>Month 7-9</td><td class="text-end">Quiet period; books maintained per Section 128; quarterly board meeting facilitation</td></tr>
                        <tr><td>Month 10-11 (March)</td><td class="text-end">Books closed for FY end (31 March); audit coordination begins</td></tr>
                        <tr><td>Month 12-15 (April-June)</td><td class="text-end">Statutory audit conducted; UDIN-tagged audit report issued; DPT-3 filed by 30 June</td></tr>
                        <tr><td>Month 15-18 (July-September)</td><td class="text-end">First AGM (within 9 months of FY-end); ITR-6 filed by 31 July (non-audit) or 31 October (audit); DIR-3 KYC by 30 September</td></tr>
                        <tr><td>Month 15-18 (post-AGM)</td><td class="text-end">First AOC-4 filed within 30 days of AGM (Section 137 + Rule 12)</td></tr>
                        <tr><td>Month 18-21 (October-November)</td><td class="text-end">First MGT-7 / MGT-7A filed within 60 days of AGM (typically by 29 November)</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Month 22-24</strong></td><td class="text-end"><strong>Year 1 close; path reassessment conversation; Year 2 calendar set up</strong></td></tr>
                        <tr><td>Total founder time over Year 1-2</td><td class="text-end">15-20 hours typically (much less than commodity-tier vendors)</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; INC-20A is the cascade trigger.</strong> Miss Day 180 and ALL subsequent ROC filings are blocked until INC-20A is filed late with penalty. Section 10A(2) penalty: Rs 50,000 company + Rs 1,000/day per officer up to Rs 1 lakh per officer. With 2 directors a 200-day INC-20A delay costs Rs 50,000 + Rs 1 lakh + Rs 1 lakh = Rs 2.5 lakh - against a Rs 35-40k Year 1 Patron fee that would have prevented this entirely. Recent MCA adjudication orders confirm strict enforcement on small Pvt Ltds.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on tier (Year 1 with INC-20A vs Year 2+ maintenance vs audit-threshold-crossed), audit fee charged separately by practising CA (Rs 15-25k typical for nil-revenue audit), and any event-based filings during the year (DIR-12, MGT-14, PAS-3, SH-7). Government fees billed at actuals via MCA portal.</p>


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
            <h2 class="section-title">Why CA-Reviewed Compliance Pays for Itself at Pre-Revenue Stage</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>INC-20A Day 180 Discipline</h3>
                <p>INC-20A is high-stakes Year 1 - the 180-day window is unforgiving; Section 10A(2) penalty (Rs 50k company + Rs 1k/day per officer up to Rs 1 lakh) plus Section 248(1)(c) strike-off risk after 1 year justifies experienced handling. Patron auto-schedules INC-20A prep in Months 4-5, filing by Month 6 with buffer. 100 percent on-time rate across 120+ Year 1 startup engagements FY 2024-25.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>First-Year Audit Relationship Discipline</h3>
                <p>Your statutory auditor in Year 1 sets the audit pattern for subsequent years; a CA-coordinated audit is materially smoother than founder-handled. Section 139 mandates audit for every company (no revenue threshold exemption); Section 446B 50% concession is on PENALTIES only - NOT audit waiver. Patron arranges first auditor via ADT-1 within 15 days of first board meeting.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Three-Path Decision Support</h3>
                <p>Founders genuinely need 12-month checkpoints to decide between maintain / dormant / strike off; commodity-tier compliance rarely provides this strategic conversation. Patron's path reassessment at every year-end prevents the most expensive scenario (silent default) and steers founders to the lowest-cost path that preserves their optionality.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Section 164(2) Disqualification Protection</h3>
                <p>3 consecutive years of MGT-7 non-filing disqualifies every director for 5 years across ALL companies in their portfolio. Cross-portfolio impact - one defaulting Pvt Ltd disqualifies the director from other directorships too. CA firm tracking prevents this silently happening. Zero Section 164(2) triggers across 800+ Pvt Ltd engagements at Patron.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>Section 446B Awareness - Not a Waiver</h3>
                <p>Many platforms incorrectly tell founders that Section 446B "waives" small company audit and compliance. Section 446B reduces PENALTIES by 50% for Section 2(85) small companies - it does NOT exempt the underlying audit obligation under Section 139 or the filing obligation under Sections 92/137. Patron applies the accurate framework.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Graduation Continuity to Active Compliance</h3>
                <p>When revenue starts, same CA + CS team transitions you to standard active compliance at Rs 35-50k per year per /private-limited-company-annual-compliance; no rework, no new vendor relationship to build. Same client file, same calendar, expanded scope. 38 percent of pre-revenue clients graduate to standard active within 24 months at Patron.</p>
            </article>
        </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders Across India</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>

                <h3 style="margin-top:24px;">Pre-Revenue Startup Outcome Proof - FY 2024-25 Internal Metrics</h3>
                <ul>
                    <li>INC-20A on-time filing rate across <strong>120+ Year 1 startup engagements</strong>: 100 percent</li>
                    <li>First-year nil-revenue audit completion within 90 days of FY-end: 96 percent</li>
                    <li>Section 164(2) director disqualification triggers across 800+ Pvt Ltd engagements: <strong>zero</strong></li>
                    <li>Average founder time on pre-revenue Year 1 engagement: 15-20 hours total across 12 months</li>
                    <li>Graduation rate from pre-revenue to standard active compliance (revenue started): 38 percent within 24 months</li>
                    <li>Path selection split: 60 percent maintain active, 25 percent convert dormant, 15 percent strike off</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves pre-revenue startup compliance engagements across all ROC jurisdictions in India. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies. Specialized practice for SaaS/tech startups, deeptech ventures, biotech R&amp;D Pvt Ltd entities, and consumer-product startups in pre-launch phase.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pre-Revenue Startup Status Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Patron Pre-Revenue</th><th>Standard Active Pvt Ltd</th><th>Dormant (Section 455)</th><th>Strike Off (Section 248)</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Annual cost</td><td>Rs 30-40k per year</td><td>Rs 35-50k per year</td><td>Rs 25k per year</td><td>Rs 15-25k one-time</td></tr>
                        <tr><td>Buyer profile</td><td>Pre-product startup, may pivot or launch within 12 months</td><td>Active operations, real revenue, audit-required</td><td>Long-term pause, IP holdco, ready-company structure</td><td>Failed pivot, no future use</td></tr>
                        <tr><td>Entity preserved?</td><td>YES</td><td>YES</td><td>YES (up to 5 years)</td><td>NO (dissolved)</td></tr>
                        <tr><td>Compliance scope</td><td>AOC-4 + MGT-7 + ITR-6 + DIR-3 KYC + DPT-3 + audit + INC-20A Year 1</td><td>Same + multiple event-based + group consolidation if applicable</td><td>MSC-3 only + 2 board meetings</td><td>None (after closure)</td></tr>
                        <tr><td>Audit required</td><td>YES (Section 139 - even at nil revenue)</td><td>YES</td><td>NO (replaced by MSC-3 CA-certified financial position)</td><td>No (post-dissolution)</td></tr>
                        <tr><td>Pivot optionality</td><td><strong>High</strong> - can shift to active or dormant or strike off anytime</td><td>Same</td><td>Medium - revival requires MSC-4</td><td>Lost (re-incorporation needed)</td></tr>
                        <tr><td>Section 164(2) disqualification risk</td><td>Eliminated (Patron tracks MGT-7 every year)</td><td>Eliminated</td><td>Eliminated (no MGT-7 obligation)</td><td>Eliminated (no entity)</td></tr>
                        <tr><td>Recommended for</td><td>Pre-product startup expecting product launch within 12-18 months</td><td>Active operations, ongoing revenue</td><td>Asset holdco, IP holding, venture pause 1-5 years</td><td>Failed venture, permanent wind-down</td></tr>


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
                
                
                <p>The pre-revenue startup engagement connects to several adjacent service lines covering predecessor (incorporation), graduation (active compliance), and exit / pause alternatives:</p>
                <ul>
                    <li><a href="/startup-registration"><strong>Startup Registration</strong></a> - the predecessor service that creates the Pvt Ltd company in the first place. SPICe+ incorporation under Companies Act 2013.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Pvt Ltd Annual Compliance (Active Bundle)</strong></a> - the graduation destination once revenue starts. Rs 35-50k per year, covers MGT-7 + AOC-4 + ADT-1 + DIR-3 KYC + DPT-3 + MSME-1 + ITR-6 + audit.</li>
                    <li><a href="/small-company-annual-compliance"><strong>Small Company Annual Compliance</strong></a> - alternative graduation if startup qualifies as Section 2(85) small company at scale (paid-up Rs 10 cr + turnover Rs 100 cr per G.S.R. 880(E)).</li>
                    <li><a href="/small-company-compliance-dormant"><strong>Dormant Company Compliance (Section 455)</strong></a> - the pause alternative if pivot timing is uncertain. MSC-1 conversion + MSC-3 annual + MSC-4 revival path.</li>
                    <li><a href="/strike-off-private-limited-company"><strong>Strike Off Private Limited Company (STK-2)</strong></a> - the exit alternative if pivot has failed. Under Section 248. C-PACE processing.</li>
                    <li><a href="/condonation-of-delay-roc-filings"><strong>Condonation of Delay ROC Filings</strong></a> - recovery engagement if Year 1 compliance was missed and backlog accumulated. Section 460 condonation.</li>
                    <li><a href="/annual-compliance-cost-comparison-cheap-vs-quality"><strong>Annual Compliance Cost: Cheap vs Quality</strong></a> - decision guide on commodity tier vs Patron tier for compliance buyers.</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Acts, Sections, Rules, and Notifications</h2>
            <div class="content-text">
                
                
                <h3>Governing Legislation</h3>
                <ul>
                    <li><strong>Companies Act, 2013</strong> - master statute. Section 2(20) (definition of company), Section 10A (INC-20A commencement of business), Section 10A(2) (penalty for INC-20A miss), Section 88 (statutory registers), Section 92 (annual return MGT-7/7A), Section 92(5) post-2020 substituted penalty, Section 96 (AGM), Section 99 (AGM default penalty), Section 128 (books of accounts), Section 129 (financial statements), Section 137 (AOC-4), Section 137(3) post-2020 substituted penalty, Section 139 (statutory audit mandatory for every company), Section 139(6) (first auditor appointment), Section 164(2) (director disqualification), Section 173 (board meetings), Section 248 (strike-off), Section 248(1)(c) (ROC suo-moto strike-off for non-commencement), Section 446B (small company 50% penalty reduction), Section 455 (dormant company).</li>
                    <li><strong>Companies (Amendment) Ordinance, 2018</strong> - dated 2 November 2018. Inserted Section 10A introducing INC-20A declaration of commencement of business requirement for new incorporations.</li>
                    <li><strong>Companies (Amendment) Act, 2020</strong> - Notification S.O. 4646(E) dated 21 December 2020. Section 20 substituted Section 92(5) and Section 92(6) penalty structures. Parallel sections substituted Section 137(3) for AOC-4. Decriminalized framework with caps on company and officer in default penalties.</li>
                    <li><strong>Companies (Incorporation) Rules, 2014</strong> - Rule 23A covers INC-20A procedural framework, attachments, and bank certificate requirements.</li>
                    <li><strong>Companies (Accounts) Rules, 2014</strong> - Rule 12 covers AOC-4 filing procedure.</li>
                    <li><strong>Companies (Management and Administration) Rules, 2014</strong> - Rule 11 covers MGT-7 / MGT-7A annual return.</li>
                    <li><strong>Companies (Appointment and Qualification of Directors) Rules</strong> - Rule 12A covers DIR-3 KYC. Substituted via G.S.R. 943(E) dated 31 December 2025 introducing TRIENNIAL filing cycle (effective 31 March 2026).</li>
                    <li><strong>Companies (Acceptance of Deposits) Rules, 2014</strong> - Rules 16 and 16A cover DPT-3 return of deposits and director loan declaration.</li>
                    <li><strong>G.S.R. 880(E) dated 1 December 2025</strong> - Small Company threshold revision under Section 2(85). Paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore. Governs Section 446B applicability and MGT-7 vs MGT-7A variant.</li>
                    <li><strong>General Circular 01/2026 dated 24 February 2026 (CCFS-2026)</strong> - Companies Compliance Facilitation Scheme 2026. Window 15 April to 15 July 2026. 90% additional-fee waiver on Pvt Ltd backlog. Optimal window for pre-revenue startup backlog cleanup.</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections for Pre-Revenue Startups</h3>
                <ul>
                    <li><strong>Section 10A</strong> - INC-20A within 180 days of incorporation</li>
                    <li><strong>Section 10A(2)</strong> - penalty: Rs 50,000 company + Rs 1,000/day per officer up to Rs 1 lakh (verified current)</li>
                    <li><strong>Section 92</strong> - MGT-7 / MGT-7A within 60 days of AGM</li>
                    <li><strong>Section 92(5) Post-2020</strong> - substituted penalty: company cap Rs 2,00,000 / officer cap Rs 50,000 at Rs 100/day</li>
                    <li><strong>Section 137</strong> - AOC-4 within 30 days of AGM</li>
                    <li><strong>Section 137(3) Post-2020</strong> - substituted penalty: parallel to Section 92(5)</li>
                    <li><strong>Section 139</strong> - mandatory statutory audit for every company (no revenue threshold)</li>
                    <li><strong>Section 164(2)</strong> - 5-year director disqualification after 3 consecutive years of MGT-7 non-filing</li>
                    <li><strong>Section 248(1)(c)</strong> - ROC may strike off if business not commenced within 1 year of incorporation</li>
                    <li><strong>Section 446B</strong> - 50% penalty reduction for Section 2(85) small companies (applies to penalty calculations only - does NOT waive audit or filing obligations)</li>
                    <li><strong>Section 455</strong> - dormant company alternative status (annual MSC-3 + 2 board meetings)</li>
                </ul>

                <h3 style="margin-top:24px;">Cumulative Penalty Math for Pre-Revenue Startup Ignoring Compliance</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Year</th><th>Defaults</th><th>Cumulative Penalty Exposure</th></tr></thead>
                    <tbody>
                        <tr><td>Year 1 - INC-20A missed by 180 days</td><td>INC-20A miss: Rs 50k company + Rs 1k/day per officer up to Rs 1 lakh per officer (Section 10A(2))</td><td>Rs 1,50,000 to Rs 2,00,000 (2 directors)</td></tr>
                        <tr><td>Year 1 - DIR-3 KYC missed</td><td>Rs 5,000 per director + DIN deactivation</td><td>Rs 5,000 to Rs 10,000</td></tr>
                        <tr><td>Year 1 - AOC-4 missed</td><td>Section 137(3) post-2020 cap Rs 2L + Rs 100/day additional fee</td><td>Rs 75,000+</td></tr>
                        <tr><td>Year 1 - MGT-7 missed</td><td>Section 92(5) post-2020 cap Rs 2L + Rs 100/day additional fee</td><td>Rs 75,000+</td></tr>
                        <tr><td>Year 2 - Additional defaults</td><td>Compounding penalties + Section 460 condonation needed</td><td>Rs 1,00,000+</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Year 3 - Section 164(2) trigger</strong></td><td><strong>5-year director disqualification + DIN deactivation across all companies</strong></td><td><strong>Rs 3,50,000 to Rs 5,00,000 + DIN deactivation</strong></td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for INC-20A and all Year 1 filings, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for S.O. 4646(E) dated 21 December 2020 (Companies Amendment Act 2020), General Circular 01/2026 dated 24 February 2026 (CCFS-2026), G.S.R. 880(E) dated 1 December 2025 (Small Company threshold), and G.S.R. 943(E) dated 31 December 2025 (DIR-3 KYC triennial), and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text of Sections 10A, 92, 137, 139, 164(2), 248, 446B, 455.</p>


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
                    <p class="faq-expanded__lead">Real founder objections on pre-revenue startup compliance: the 'no revenue means no compliance' misconception, INC-20A 180-day deadline under Section 10A, mandatory audit at zero revenue under Section 139, Section 446B 50% penalty reduction (not audit waiver), three optionality paths (active / dormant / strike off), the cumulative cost of ignoring compliance, CCFS-2026 amnesty window leverage, and graduation to standard active compliance when revenue starts.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Do startups with no revenue still need to file ROC compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes - compliance under the Companies Act, 2013 applies from the date of incorporation, not from the date of first revenue. Section 2(20) defines a 'company' by registration, not activity. From CIN issuance, your private limited company is a separate legal person with annual reporting duties under Sections 92, 96, 129, 137, 139, and 10A - none of which contain a revenue threshold. Pre-revenue startups file the same forms as active companies; only the CONTENT (nil revenue, unchanged cap table) differs from the OBLIGATION (mandatory).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is INC-20A and when must a pre-revenue startup file it?</h3>
                        <div class="faq-expanded__a"><p>INC-20A is the Declaration of Commencement of Business under Section 10A of the Companies Act, 2013 read with Rule 23A of Companies (Incorporation) Rules, 2014. Inserted by Companies (Amendment) Ordinance 2018 dated 2 November 2018. Every company with share capital incorporated on or after 2 November 2018 must file INC-20A within 180 days of incorporation. Penalty under Section 10A(2): Rs 50,000 on company + Rs 1,000 per day on each officer in default, capped at Rs 1,00,000 per officer. INC-20A is the FIRST major Year 1 deadline and the one most first-time founders miss. ROC may also initiate strike-off under Section 248(1)(c) if business not commenced within 1 year of incorporation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do pre-revenue startups need a statutory audit even at zero revenue?</h3>
                        <div class="faq-expanded__a"><p>Yes - Section 139 of the Companies Act, 2013 mandates appointment of a statutory auditor for EVERY company. There is no revenue threshold exemption. First auditor must be appointed by the Board within 30 days of incorporation under Section 139(6), with ADT-1 filed within 15 days of the first board meeting. The auditor conducts a nil-revenue audit; the UDIN-tagged audit report supports the first AOC-4 filing. Section 446B small company concession reduces PENALTIES by 50 percent for Section 2(85) small companies - but it does NOT exempt the underlying audit obligation. Common founder confusion eliminated on Day 1 by Patron.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if a pre-revenue startup just ignores Year 1 compliance?</h3>
                        <div class="faq-expanded__a"><p>Cumulative penalty exposure compounds rapidly. Year 1 alone: INC-20A miss costs Rs 1.5 to Rs 2 lakh under Section 10A(2) (company + 2 directors); AOC-4 miss adds penalty exposure under post-2020 Section 137(3) (cap Rs 2,00,000 company / Rs 50,000 officer at Rs 100/day); MGT-7 miss adds parallel exposure under Section 92(5); DIR-3 KYC adds Rs 5-10k. By Year 2 the ROC may issue Section 248(1)(c) notice for non-commencement; recovery via Section 460 condonation costs Rs 50k to Rs 1.5 lakh more. By Year 3, three consecutive MGT-7 misses trigger Section 164(2) director disqualification for 5 years - all directors disqualified from holding directorship in ANY company in their portfolio. Total cumulative exposure by Year 3 reaches Rs 3.5 to Rs 5 lakh plus director disqualification. The Rs 30-40k Patron annual fee is materially cheaper than this exposure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Should we just convert to dormant status if we have no business?</h3>
                        <div class="faq-expanded__a"><p>Convert to dormant under Section 455 when the pivot trajectory is UNCERTAIN over 1-5 years. Dormant status reduces annual compliance to a single MSC-3 return (no AOC-4 / MGT-7) and reduces director board meeting obligations under Section 173(5) (one per half calendar year). Annual cost drops from Rs 30-40k to Rs 25k. Useful when: holding IP / patents for future commercialisation; venture pause for 1-5 years; 'ready company' structure for future project. NOT useful when: pivot launch is imminent within 12 months (just maintain active); pivot has clearly failed (strike off is cheaper). CCFS-2026 amnesty window 15 April-15 July 2026 may provide concessions for dormant conversion - confirm specific scheme coverage at the time of application.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can we strike off if the startup idea did not work?</h3>
                        <div class="faq-expanded__a"><p>Yes - strike off under Section 248(2) is the formal path to dissolve a pre-revenue startup that has decisively failed. Voluntary application via Form STK-2 routed to the Centre for Processing Accelerated Corporate Exit (C-PACE) since 17 March 2023. 3-6 month processing timeline. Patron handles end-to-end at Rs 15,000 to Rs 25,000 fixed fee. CCFS-2026 amnesty active through 15 July 2026 may provide additional concessions. Strike-off makes sense when: no future use for the entity; no IP or assets to preserve; clean slate desired. Re-incorporation later is possible with a new venture; the original brand name returns to public pool after 20 years for potential reuse.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Section 446B small company penalty reduction?</h3>
                        <div class="faq-expanded__a"><p>Section 446B of the Companies Act, 2013 provides 50 percent reduction in penalties for small companies (defined under Section 2(85) - paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore post G.S.R. 880(E) dated 1 December 2025). The reduction applies to penalty calculations under Sections 92, 117, 137, 165, and several others - effectively halving the penalty for late annual filings if the company qualifies as a small company. CRITICAL CAVEAT: Section 446B reduces PENALTIES on default, but does NOT exempt small companies from the underlying compliance obligation. AOC-4 still must be filed; MGT-7 still must be filed; audit still required under Section 139. Section 446B is a relief mechanism for those who miss compliance - not a waiver of compliance itself.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">When does a startup graduate from pre-revenue pricing to standard compliance?</h3>
                        <div class="faq-expanded__a"><p>Graduation happens when revenue starts and operations become active. Trigger events include: first paying customer / first sales invoice; first formal employee hired on payroll; bank inflows beyond paid-up capital and director loans; investor funding round closed. At that point the engagement moves to the standard active Pvt Ltd compliance tier - typically Rs 35,000 to Rs 50,000 per year per Patron's main Pvt Ltd annual compliance bundle, OR Rs 35,000 to Rs 45,000 per year for small companies under Section 2(85). Patron handles the transition seamlessly within the same engagement - same CA + CS team, same client file, expanded scope. We discuss the graduation at the 12-month path reassessment meeting and adjust the next-year fee accordingly. 38 percent of pre-revenue clients graduate to standard active within 24 months at Patron.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>Does pre-revenue mean no compliance?</strong> No. Compliance starts from incorporation date, not from first revenue. Section 2(20) defines company by registration, not activity.</p>
                <p><strong>First Year 1 deadline?</strong> INC-20A within 180 days of incorporation under Section 10A. Miss costs Rs 50k company + Rs 1k/day per officer up to Rs 1 lakh per officer (Section 10A(2)).</p>
                <p><strong>Audit required at zero revenue?</strong> Yes. Section 139 mandates audit for every company. First auditor appointed via ADT-1 within 15 days of first board meeting. Section 446B small-company concession reduces penalties 50% but does NOT waive audit.</p>
                <p><strong>Three paths for pre-revenue startups?</strong> Maintain active (Rs 30-40k/year, pivot in 12 months) | Convert dormant Section 455 (Rs 25k/year, 1-5 years) | Strike off Section 248 (Rs 15-25k once, pivot failed).</p>
                <p><strong>What does Patron charge?</strong> Year 1 with INC-20A: Rs 35-40k | Year 2+ pre-revenue maintenance: Rs 30k | With audit threshold crossed: Rs 40k.</p>
                <p><strong>Cost of ignoring compliance for 3 years?</strong> Rs 3.5 to Rs 5 lakh cumulative penalty exposure + director disqualification under Section 164(2). Rs 30k annual fee is materially cheaper.</p>
                <p><strong>Section 92(5)/137(3) post-2020 penalty caps?</strong> Company cap Rs 2,00,000 / Officer cap Rs 50,000 at Rs 100/day. Substituted via S.O. 4646(E) dated 21 December 2020 - replacing pre-2020 Rs 50k-Rs 5 lakh fine.</p>
                <p><strong>CCFS-2026 amnesty?</strong> Active 15 April-15 July 2026. 90% additional-fee waiver on Pvt Ltd backlog. Optimal window for Year 1 default cleanup.</p>
                <p><strong>When do you graduate to standard compliance?</strong> When revenue starts (first paying customer / first invoice / funded round closed). Transitions to Rs 35-50k standard active tier seamlessly.</p>
                <p><strong>Revenue nahi hai to compliance file karna padega kya?</strong> <em>Haan - bilkul. Companies Act ke under compliance company ke incorporation se shuru hota hai, revenue se nahi. Section 10A ke under INC-20A 180 din mein file karna mandatory hai. Phir AOC-4 + MGT-7 + ITR-6 + DIR-3 KYC + DPT-3 har saal - chahe nil amounts hi ho. Section 139 ke under audit bhi zaruri hai - zero revenue pe bhi. Patron ka Year 1 startup package Rs 35-40k hai (INC-20A + audit + saare annual forms ke saath); Year 2+ pre-revenue maintenance Rs 30k. Agar 3 saal ignore kiya to total exposure Rs 3.5-5 lakh ho jaata hai director disqualification ke saath. Math clear hai.</em></p>
                <p><strong>Startup chal nahi raha to dormant lein ya strike off?</strong> <em>Decision pivot timeline pe depend karta hai. Agar 12 mahine mein launch hone wala hai - active compliance maintain karein, Rs 30-40k. Agar 1-5 saal unclear hai - dormant lein Section 455 ke under, Rs 25k per year save hota hai. Agar pivot fail ho gaya, dobara try nahi karna - strike off karein Section 248 ke under, Rs 15-25k one-time. Patron Day 1 diagnostic call mein honestly batayega kaun sa path fit hai - hum sabse mehnga path push nahi karte.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Pre-Revenue Compliance Cannot Wait for Revenue</h2>
            <div class="content-text">
                
                
                <p>The single most common founder mistake is waiting for revenue before setting up compliance. The math does not support this delay.</p>

                <p style="margin-top:16px;"><strong>INC-20A is due within 180 days of incorporation</strong> - approximately 6 months. Most first-time founders pass this deadline silently, paying Rs 50,000 company penalty plus Rs 1,000 per day per officer (up to Rs 1 lakh per officer) when discovered. With 2 directors a 200-day INC-20A delay costs <strong>Rs 50,000 + Rs 1 lakh + Rs 1 lakh = Rs 2.5 lakh</strong> - against a Rs 30,000 annual Patron fee that would have prevented this entirely.</p>

                <p style="margin-top:16px;"><strong>Year 2 compounds further:</strong> missed AOC-4 adds penalty exposure under post-2020 Section 137(3) (cap Rs 2L company / Rs 50k officer), missed MGT-7 adds parallel exposure under Section 92(5). By Year 3 the Section 164(2) director disqualification trigger fires - 5 years personal disqualification for all directors across ALL companies in their portfolio.</p>

                <p style="margin-top:16px;"><strong>CCFS 2026 amnesty is currently active through 15 July 2026</strong> offering 90 percent waiver on additional late fees for pre-2026 backlog - this is the most cost-effective window to either clean up Year 1 defaults or formally pause. After 15 July 2026 the full fee structure resumes.</p>

                <p style="margin-top:16px;"><strong>If you are a founder reading this within your first 6 months post-incorporation, the right action is to engage compliance support TODAY</strong> - not after the first sale, not after the seed round, not when you have time to think about it.</p>

                <p style="margin-top:16px;"><strong>Get a Free 15-Minute Diagnostic Call -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20have%20a%20pre-revenue%20startup%20and%20need%20Year%201%20compliance%20setup%20-%20please%20quote%20from%20Rs%2030%2C000." target="_blank">WhatsApp us</a>. We will tell you honestly which of the three paths (active / dormant / strike off) fits your case. CCFS 2026 window closes 15 July 2026.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: Pre-Revenue Compliance is Mandatory, Not Optional</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Pre-revenue startup compliance under the Companies Act, 2013 is mandatory from the date of incorporation regardless of revenue activity. The corporate ENTITY triggers compliance obligations - not the operational activity. Year 1 obligations include INC-20A within 180 days under Section 10A (the FIRST and most-missed deadline, penalty Rs 50k + Rs 1k/day per officer up to Rs 1 lakh per officer), statutory audit under Section 139 (no revenue threshold exemption), AOC-4 + MGT-7 + ITR-6 + DIR-3 KYC + DPT-3 in the standard annual cycle, and event-based filings as triggers occur.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Post-Companies (Amendment) Act 2020 framework (substituted via Notification S.O. 4646(E) dated 21 December 2020) applies to AOC-4 and MGT-7 penalty caps: Rs 2,00,000 company / Rs 50,000 each officer at Rs 100/day - replacing the pre-2020 Rs 50k-Rs 5 lakh fine structure. Section 446B 50% small company penalty reduction applies but does NOT waive the underlying audit and filing obligations. Section 164(2) triggers 5-year director disqualification on 3 consecutive years of MGT-7 non-filing - cross-portfolio impact across ALL directorships.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Pre-revenue startups face three legitimate paths: maintain active compliance at Rs 30-40k per year if pivot is imminent within 12 months; convert to dormant status under Section 455 at Rs 25k per year if pivot timing is uncertain (up to 5 years); or strike off under Section 248 at Rs 15-25k one-time if the pivot has decisively failed. Patron offers all three paths and helps founders select the lowest-cost option that preserves their specific optionality. Year 1 setup (Rs 35-40k including INC-20A and first audit), ongoing pre-revenue maintenance (Rs 30k per year), and seamless graduation to standard active compliance when revenue starts. CCFS 2026 amnesty active through 15 July 2026 offers 90 percent waiver on additional fees for backlog cleanup. The cumulative penalty exposure for ignoring pre-revenue compliance reaches Rs 3.5-5 lakh by Year 3 plus director disqualification; the Rs 30-40k annual fee is materially cheaper. Engage compliance support within your first 6 months post-incorporation - not after revenue starts, not when you have time, not after the first MCA notice.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20pre-revenue%20startup%20package%20from%20Rs%2030%2C000." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pre-Revenue Startup Compliance Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. Pre-revenue startup compliance delivered pan-India for SaaS / tech / deeptech / biotech / consumer product startups in Year 1 setup, Year 2+ maintenance, dormant conversion (Section 455), and strike-off (Section 248) scenarios. 120+ Year 1 startup engagements FY 2024-25 with 100 percent INC-20A on-time rate.</p>
        
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise Pre-Revenue Startup Compliance</div>
                <div class="pa-block-sub">Local CA + CS team for Year 1 startup engagement</div>
                <div class="pa-city-grid">
                    <a href="/small-company-compliance-startups-pre-revenue/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Pre-Revenue Startup Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/small-company-compliance-startups-pre-revenue/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Pre-Revenue Startup Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/small-company-compliance-startups-pre-revenue/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Pre-Revenue Startup Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/small-company-compliance-startups-pre-revenue/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Pre-Revenue Startup Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Predecessor, graduation, and exit alternatives</div>
                <div class="pa-cross-grid">
                    <a href="/startup-registration" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Predecessor Service</div></div>
                    </a>
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">Graduation Destination</div></div>
                    </a>
                    <a href="/small-company-compliance-dormant" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Dormant Status (Section 455)</div><div class="pa-card-sub">Pause Alternative</div></div>
                    </a>
                    <a href="/strike-off-private-limited-company" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Strike Off (STK-2)</div><div class="pa-card-sub">Exit Alternative</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Condonation of Delay</div><div class="pa-card-sub">Backlog Recovery</div></div>
                    </a>
                    <a href="/small-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Small Company Compliance</div><div class="pa-card-sub">Section 2(85) Variant</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026 (after CCFS-2026 amnesty window closure on 15 July 2026 and Year 1 FY 2026-27 startup engagement cycle). Review triggers include MCA amendment to Section 10A / Section 10A(2) INC-20A penalty framework, further amendment to Section 92(5) / Section 137(3) beyond Companies (Amendment) Act 2020 (S.O. 4646(E) dated 21 December 2020), revisions to Section 446B small company penalty reduction framework, changes to Section 2(85) Small Company thresholds beyond G.S.R. 880(E) dated 1 December 2025, introduction of CCFS-2026 successor amnesty schemes beyond General Circular 01/2026 dated 24 February 2026 (window closes 15 July 2026), and any amendment to Section 164(2) director disqualification or Section 248(1)(c) strike-off framework.</p>
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
