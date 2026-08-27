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
    <title>ESOP Scheme Design India: Pool, Vesting, Leaver Clauses</title>
    <meta name="description" content="ESOP scheme design for Indian startups - pool sizing, vesting, cliff, leaver clauses and sample term sheet. 4-8 weeks. Starting at Rs 75,000.">
    <link rel="canonical" href="/esop-scheme-design">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Scheme Design India: Pool, Vesting, Leaver Clauses | Patron Accounting">
    <meta property="og:description" content="ESOP scheme design for Indian startups - pool sizing, vesting, cliff, leaver clauses and sample term sheet. 4-8 weeks. Starting at Rs 75,000.">
    <meta property="og:url" content="/esop-scheme-design/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Scheme Design India: Pool, Vesting, Leaver Clauses | Patron Accounting">
    <meta name="twitter:description" content="ESOP scheme design for Indian startups - pool sizing, vesting, cliff, leaver clauses and sample term sheet. 4-8 weeks. Starting at Rs 75,000.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-scheme-design/#service",
        "name": "ESOP Scheme Design",
        "url": "https://www.patronaccounting.com/esop-scheme-design/",
        "description": "First-time ESOP scheme drafting, approval and filing engagement for Indian startups and unlisted companies under Section 62(1)(b) of Companies Act 2013 read with Rule 12 of Companies (Share Capital and Debentures) Rules 2014. End-to-end delivery covering pool sizing modelled against 18-24 month hiring roadmap (10 to 15 percent of post-money equity typical Indian startup norm; 5 to 10 percent at seed, up to 18 percent by Series B); vesting schedule and cliff drafting with Rule 12(6)(a) minimum 1-year statutory cliff; exercise price method at or below FMV but not below face value; tiered exercise window (90 days for IC roles, 6 months for managers, 12 to 24 months for senior leadership); explicit leaver matrix covering good leaver (death, permanent disability, retirement, termination without cause, redundancy) and bad leaver (termination for cause, fraud, breach of restrictive covenants, conviction); single-trigger, double-trigger and partial-acceleration provisions with Board discretion; clawback for fraud or restrictive covenant breach; founder ESOPs under Rule 12 DPIIT 10-year founder exemption for promoters and 10 percent-plus directors in DPIIT-recognised startups under DPIIT Notification GSR 127(E) 2019; sample term sheet covering 20 parameters reusable across future grants. Includes Board Resolution drafting, 21-day EGM notice with Explanatory Statement under Section 102, Special Resolution at 75 percent majority, MGT-14 filing within 30 days under Section 117(2) of Companies Act 2013, Form SH-6 Register of Employee Stock Options maintained at registered office authenticated by Company Secretary under Rule 12(10), PAS-3 filing on first allotment under Section 39(5) within 30 days, and Articles of Association amendment if existing AoA does not authorise ESOPs. IBBI Registered Valuer FMV report under Rule 11UA of Income Tax Rules 1962 (DCF, NAV or CCA methodology). Section 17(2)(vi) perquisite tax architecture pre-mapped into the scheme with Section 80-IAC plus Section 192(2C) 48-month perquisite tax deferral pathway for DPIIT plus IMB certified startups (60 months under Income Tax Act 2025 Section 392(3) read with Section 289(3) effective 1 April 2026). Ind AS 102 share-based payment expense modelling using Black-Scholes from grant date over vesting period; ICAI Guidance Note on Accounting for Share-Based Payments (September 2020) compliance. SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 application for listed entity ESOP, RSU, SAR, ESPS schemes.",
        "serviceType": "Employee Stock Option Plan Scheme Design and Drafting",
        "areaServed": {
            "@type": "Country",
            "name": "India",
            "sameAs": "https://en.wikipedia.org/wiki/India"
        },
        "provider": {
            "@id": "https://www.patronaccounting.com/#organization"
        },
        "about": [
            {
                "@type": "Thing",
                "name": "Employee stock ownership",
                "sameAs": "https://en.wikipedia.org/wiki/Employee_stock_ownership"
            },
            {
                "@type": "Thing",
                "name": "Stock option",
                "sameAs": "https://en.wikipedia.org/wiki/Stock_option"
            },
            {
                "@type": "Thing",
                "name": "Companies Act 2013",
                "sameAs": "https://en.wikipedia.org/wiki/Companies_Act,_2013"
            },
            {
                "@type": "Thing",
                "name": "Vesting",
                "sameAs": "https://en.wikipedia.org/wiki/Vesting"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP Scheme Design Engagement Tiers",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "AoA Amendment (Add-On)",
                    "priceCurrency": "INR",
                    "price": "15000",
                    "description": "EGM special resolution, MGT-14 within 30 days, MoA/AoA print for companies whose existing AoA does not authorise ESOPs"
                },
                {
                    "@type": "Offer",
                    "name": "IBBI Valuation (Pass-Through)",
                    "priceCurrency": "INR",
                    "price": "25000",
                    "description": "FMV report under Rule 11UA of Income Tax Rules 1962 - DCF, NAV or CCA methodology; valid for 180 days from issue"
                },
                {
                    "@type": "Offer",
                    "name": "Seed Stage Scheme",
                    "priceCurrency": "INR",
                    "price": "75000",
                    "description": "Pool sizing, basic scheme drafting (10 to 12 pages), Board and EGM kit, MGT-14 filing within 30 days, SH-6 register setup"
                },
                {
                    "@type": "Offer",
                    "name": "Pre-Series A Scheme",
                    "priceCurrency": "INR",
                    "price": "100000",
                    "description": "Seed scope plus cap table modelling with 3 dilution scenarios, leaver clause matrix, sample term sheet reusable across grants, AoA amendment if needed"
                },
                {
                    "@type": "Offer",
                    "name": "Pre-Series A Scheme (Enhanced)",
                    "priceCurrency": "INR",
                    "price": "125000",
                    "description": "Pre-Series A scope with additional founder ESOP under DPIIT exemption, exercise window tiering and refresh grant authority pre-drafted"
                },
                {
                    "@type": "Offer",
                    "name": "Series A to B Scheme",
                    "priceCurrency": "INR",
                    "price": "150000",
                    "description": "Pre-Series A scope plus performance vesting design, single/double/hybrid acceleration triggers, SHA coordination, founder ESOP under DPIIT 10-year exemption"
                },
                {
                    "@type": "Offer",
                    "name": "Series A to B Scheme (Premium)",
                    "priceCurrency": "INR",
                    "price": "175000",
                    "description": "Series A to B scope with CXO performance vesting hooks under Rule 12 measurable conditions, refresh grant authority and clawback provisions"
                },
                {
                    "@type": "Offer",
                    "name": "Series A to B Comprehensive",
                    "priceCurrency": "INR",
                    "price": "200000",
                    "description": "Full Series A to B scope with multi-class capital structure, complex grantee analysis, audit working paper documentation and Ind AS 102 expense modelling"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-scheme-design/#breadcrumb",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.patronaccounting.com/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "ESOP Services",
                "item": "https://www.patronaccounting.com/esop-services/"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "ESOP Scheme Design",
                "item": "https://www.patronaccounting.com/esop-scheme-design/"
            }
        ]
    }
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/esop-scheme-design/#faq",
  "datePublished": "2026-05-11T08:00:00+05:30",
  "dateModified": "2026-05-11T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does ESOP scheme design cost in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ESOP scheme design at Seed stage costs Rs 75,000 to Rs 1,00,000. Pre-Series A schemes with cap table modelling, leaver matrix and sample term sheet cost Rs 1,00,000 to Rs 1,50,000. Series A to B schemes with performance vesting, accelerated vesting and SHA coordination cost Rs 1,50,000 to Rs 2,00,000. IBBI valuation is a pass-through of Rs 25,000 to Rs 75,000. Fees are exclusive of GST."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to design an ESOP scheme?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "End-to-end design takes 4 to 8 weeks. The bottleneck is the 21-day EGM notice period plus the 30-day MGT-14 filing window. Drafting itself takes 7 to 15 working days and IBBI valuation 7 to 14 days. Faster turnarounds are possible if AoA already authorises ESOPs and shareholders consent to a shortened notice in writing."
      }
    },
    {
      "@type": "Question",
      "name": "What is the minimum cliff period for ESOPs under Indian law?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The statutory minimum is one year from the grant date under Rule 12(6)(a) of the Companies (Share Capital and Debentures) Rules 2014. Companies cannot vest any portion of an option grant earlier than 12 months even if the employee resigns or is terminated. Most Indian startups follow a 4-year vesting schedule with this 1-year cliff."
      }
    },
    {
      "@type": "Question",
      "name": "What should be included in an ESOP scheme document?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A complete ESOP scheme must cover total options authorised, eligibility classes, grant authority (Board or Committee), vesting schedule and cliff, exercise price method, exercise window for active and exited employees, leaver matrix (good leaver and bad leaver), accelerated vesting triggers, lock-in, expiry, clawback, change of control treatment and amendment procedure. Rule 12(2) of the Share Capital Rules 2014 specifies the mandatory EGM disclosures."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between single-trigger and double-trigger acceleration?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Single-trigger acceleration vests all unvested options on a change of control event (acquisition, merger, IPO). Double-trigger acceleration requires both a change of control event AND a termination without cause of the employee within a defined window (typically 12 months). Double-trigger is investor-friendly and now the Series B-plus market norm in India."
      }
    },
    {
      "@type": "Question",
      "name": "How should good leaver and bad leaver be defined?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Good leaver categories typically cover death, permanent disability, retirement on or after a defined age, termination without cause and redundancy - the leaver retains vested options with a 90 to 180 day exercise window. Bad leaver categories cover termination for cause, fraud, breach of restrictive covenants and conviction of a serious offence - the leaver forfeits all options, vested and unvested. Voluntary resignation is often treated as good leaver after a minimum service period (e.g. 24 months)."
      }
    },
    {
      "@type": "Question",
      "name": "Can a startup grant ESOPs to founders during scheme design?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, but only if the company holds DPIIT recognition. Rule 12 of the Share Capital Rules 2014 excludes promoters and 10 percent-plus directors from receiving ESOPs, with an exception for DPIIT-recognised startups for 10 years from incorporation. Patron secures DPIIT recognition and drafts founder grants into the scheme using this exemption."
      }
    },
    {
      "@type": "Question",
      "name": "ESOP banane ka tarika kya hai? (How to design an ESOP scheme)",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ESOP banane ke liye yeh process follow karna padta hai - sabse pehle AoA check karna padta hai ki ESOP ke liye authorisation hai ki nahi, agar nahi to amendment karna padega. Phir cap table modelling aur pool sizing - typically 10 to 15 percent post-money equity Indian startups ke liye. Scheme draft karna padta hai under Section 62(1)(b) Companies Act 2013 - pool, 4-year vesting with Rule 12(6)(a) ka 1-year statutory cliff, exercise price (face value ya FMV se neeche nahi), leaver matrix (good leaver vs bad leaver), single ya double-trigger acceleration, clawback. Phir Board Resolution pass karke 21-din ka EGM notice issue karna padta hai Section 101 ke under. EGM mein Special Resolution at 75 percent majority pass hoga. MGT-14 30 din mein file karna padta hai Section 117(2) ke under (default Rs 100 per day). IBBI valuation Rule 11UA ke under (180 din valid). Form SH-6 register registered office mein maintain karna padta hai Rule 12(10) ke under, Company Secretary authenticate karega. DPIIT recognition Notification GSR 127(E) 2019 ke under hai to founders aur 10 percent-plus directors ko bhi ESOP de sakte hain Rule 12 ke 10-year exemption ke through. Section 17(2)(vi) ka perquisite tax exercise par lagega; Section 80-IAC plus Section 192(2C) ka 48 mahine deferral milta hai DPIIT plus IMB startups ko (60 mahine ITA 2025 mein 1 April 2026 se). Ind AS 102 ke under Black-Scholes se share-based payment expense vesting period par recognise hoga. Patron 4 to 8 hafton mein puri process complete karta hai - sample term sheet, scheme document, Board kit, EGM kit, MGT-14, IBBI valuation, SH-6 setup aur first Grant Letter sab include. Call +91 945 945 6700."
      }
    }
  ]
}
    </script>
@endsection

@section('content')
@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
/* ============================================
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Conclusion + CTA Block (Dark) - force light text against dark navy
           background. Overrides .content-text/strong/p default dark colours. */
        .content-section[style*="var(--blue)"] .section-title,
        .content-section[style*="var(--blue)"] h2 {
            color: #FFFFFF !important;
        }
.content-section[style*="var(--blue)"] .content-text,
        .content-section[style*="var(--blue)"] .content-text p {
            color: rgba(255,255,255,0.92) !important;
        }
.content-section[style*="var(--blue)"] .content-text strong,
        .content-section[style*="var(--blue)"] p strong {
            color: #FFFFFF !important;
            font-weight: 700;
        }
.content-section[style*="var(--blue)"] .content-text a:not([style*="background"]) {
            color: rgba(255,255,255,0.92) !important;
            text-decoration: underline;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
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
                        ESOP Scheme Design
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 11 May 2026</span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> ESOP Policy, Board Resolution, EGM Notice, Special Resolution, MGT-14, SH-6 register, sample term sheet covering 20 parameters</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 75,000 to Rs 2,00,000 depending on stage (Seed to Series B) and scheme complexity; IBBI valuation pass-through from Rs 25,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Private Limited and Public Unlisted companies; DPIIT-recognised startups for founder grants under Rule 12 10-year exemption</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 4 to 8 weeks end-to-end including 21-day EGM notice under Section 101, IBBI valuation under Rule 11UA and MGT-14 within 30 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">First-Time ESOP Schemes for Startups Seed to Series B | 10,000+ Businesses Served | 4.9 Google Rating | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20ESOP%20scheme%20design%20scoping%20call." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - ESOP Design',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'Seed Stage ESOP Scheme', 'label' => 'Seed Stage ESOP Scheme', 'selected' => true, 'disabled' => false],
                            ['value' => 'Pre-Series A ESOP Scheme', 'label' => 'Pre-Series A ESOP Scheme', 'selected' => false, 'disabled' => false],
                            ['value' => 'Series A to B ESOP Scheme', 'label' => 'Series A to B ESOP Scheme', 'selected' => false, 'disabled' => false],
                            ['value' => 'IBBI Valuation under Rule 11UA', 'label' => 'IBBI Valuation under Rule 11UA', 'selected' => false, 'disabled' => false],
                            ['value' => 'AoA Amendment for ESOP', 'label' => 'AoA Amendment for ESOP', 'selected' => false, 'disabled' => false],
                            ['value' => 'Founder ESOP under DPIIT Exemption', 'label' => 'Founder ESOP under DPIIT Exemption', 'selected' => false, 'disabled' => false],
                            ['value' => 'Performance Vesting Drafting', 'label' => 'Performance Vesting Drafting', 'selected' => false, 'disabled' => false],
                            ['value' => 'Sample Term Sheet Library', 'label' => 'Sample Term Sheet Library', 'selected' => false, 'disabled' => false],
                            ['value' => 'Accelerated Vesting Clauses', 'label' => 'Accelerated Vesting Clauses', 'selected' => false, 'disabled' => false],
                            ['value' => 'Leaver Matrix Drafting', 'label' => 'Leaver Matrix Drafting', 'selected' => false, 'disabled' => false],
                            ['value' => 'Other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Outstanding experience with Patron. Professionalism and timely communication made the process seamless.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Business Owner</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Glad I connected with Patron. Really helpful and took minimum time.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Entrepreneur</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Fantastic experience. Knowledgeable and smooth handling of all documentation.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Client</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Best service for account handling. Extremely happy with dedicated point of contact.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil Nimbhorkar</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Smooth process for ITR filing. They understand basics well and respond promptly.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SH</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Sameer Mehta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Client</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
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
                    <p>Indian startups across SaaS, fintech, AI/ML, marketplaces, deeptech, edtech, healthtech, consumer-tech and B2B verticals. Seed through Series B. Private Limited, Public Unlisted and DPIIT-recognised structures. Pool sizing, vesting and cliff drafting, leaver matrix, acceleration triggers, founder ESOPs under DPIIT exemption. 10,000+ businesses served. 4.9 Google Rating. 15+ years.</p>
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
            
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#process-section" class="toc-btn">8-Step Process</a>
            <a href="#documents-section" class="toc-btn">Deliverables</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">4-8 Week Timeline</a>
            <a href="#comparison-section" class="toc-btn">Template vs Custom</a>
            <a href="#legal-section" class="toc-btn">Legal Framework</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">First-Time ESOP Scheme - Pool, Cliff, Vesting, Leaver</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP Design Services at a Glance</strong></p>
                    <p>ESOP scheme design is the first-time engagement that creates a startup's Employee Stock Option Plan from scratch under Section 62(1)(b) of the Companies Act 2013 and Rule 12 of the Companies (Share Capital and Debentures) Rules 2014. The output is a Board-approved, EGM-ratified scheme document covering pool size (10 to 15 percent of post-money equity Indian startup norm), 4-year vesting with Rule 12(6)(a) statutory 1-year cliff, exercise price method, explicit leaver matrix (good vs bad leaver), single-trigger/double-trigger/hybrid acceleration triggers, exercise window tiers (90 days IC, 6 months managers, 12-24 months senior leadership) and a sample term sheet covering 20 parameters - typically delivered in 4 to 8 weeks.</p>
                </div>
                <p>ESOP scheme design is the highest-leverage compliance project a startup undertakes in its first three years. A poorly drafted scheme dilutes the wrong people, fails Series A due diligence, and triggers tax surprises at exercise. A well-drafted scheme balances pool, cliff, vesting, leaver and acceleration in a single Board-approved document that survives every downstream funding round and senior hire negotiation. Patron Accounting LLP has been drafting and filing ESOP schemes for Indian companies since 2009 across Private Limited, Public Unlisted and DPIIT-recognised startup structures.</p>
                <p>The CA and CS team delivers policy drafting under Section 62(1)(b) read with Rule 12, IBBI valuation coordination under Rule 11UA of Income Tax Rules 1962, EGM filings (21-day notice under Section 101, Explanatory Statement under Section 102, Special Resolution at 75 percent majority, MGT-14 within 30 days under Section 117(2)) and Form SH-6 register setup at registered office authenticated by Company Secretary under Rule 12(10) - in a single sprint of 4 to 8 weeks. Section 17(2)(vi) perquisite tax architecture and Section 80-IAC plus Section 192(2C) 48-month deferral (60 months under Income Tax Act 2025 Section 392(3) read with 289(3) from 1 April 2026) are pre-mapped into the scheme. Ind AS 102 share-based payment expense modelled into the cap table from grant date using Black-Scholes. With offices in Pune, Mumbai, Delhi and Gurugram, every scheme design comes with reusable sample term sheet, audit-ready Ind AS 102 documentation and clean MCA filings.</p>
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
                <h2 class="section-title">What Is ESOP Scheme Design</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP scheme design is the engagement that drafts, approves and files a company's master Employee Stock Option Plan policy under Section 62(1)(b) of the Companies Act 2013 and Rule 12 of the Companies (Share Capital and Debentures) Rules 2014. The deliverable is a Board-and-shareholder-approved scheme document containing pool size, eligibility, vesting schedule, cliff, exercise price method, leaver clauses, accelerated vesting triggers and administrative authority. The scheme is filed with the Registrar of Companies via Form MGT-14 within 30 days of the special resolution under Section 117(2).</p>
                    <p>A well-designed ESOP scheme is the foundational governance document for every subsequent grant, exercise and exit your company will undertake for the next decade. Series A investors require it. Senior CXO hires negotiate against it. Statutory auditors test it. Tax officers reference it. The five most consequential scheme parameters are (1) pool size as a percentage of post-money equity (10 to 15 percent for Indian startups; 5 to 10 percent at seed; up to 18 percent by Series B), (2) vesting schedule (4-year time-based default with Rule 12(6)(a) statutory 1-year cliff), (3) exercise price method (at or below FMV but not below face value), (4) leaver matrix (explicit good leaver vs bad leaver categorisation), and (5) acceleration triggers (single, double or hybrid 50/100 on change of control).</p>
                    <p>For DPIIT-recognised startups, Rule 12 provides a 10-year founder ESOP exemption permitting promoters and 10 percent-plus directors to receive grants - otherwise excluded under the Companies Act default. For listed entities, SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 govern listed-company ESOP, RSU, SAR and ESPS schemes. For cross-border structures (foreign parent / Indian subsidiary), FEMA Overseas Investment Rules 2022 govern mirror grants.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Design:</strong></p>
                    <p><strong>ESOP Pool:</strong> The block of equity shares reserved for employees, expressed as a percentage of fully diluted capital - typically 10 to 15 percent for Indian startups. Sized against the 18-24 month hiring plan.</p>
                    <p><strong>Grant:</strong> The date a company issues an option to a named employee under the approved scheme. Recorded in Form SH-6 register at registered office under Rule 12(10).</p>
                    <p><strong>Vesting:</strong> The schedule on which options become exercisable - most commonly four years with a one-year cliff under Rule 12(6)(a). Can be time-based, performance-based or hybrid.</p>
                    <p><strong>Cliff:</strong> The minimum continuous service window before any portion of the grant vests; statutory minimum is one year under Rule 12(6)(a) of the Companies (Share Capital and Debentures) Rules 2014.</p>
                    <p><strong>Exercise Price:</strong> The pre-fixed price an employee pays per share on exercise - set by the Board at or below FMV but not below face value of the share.</p>
                    <p><strong>Good Leaver:</strong> An employee whose exit is for reasons such as death, permanent disability, retirement on or after a defined age, termination without cause or redundancy - typically retains vested options with 90 to 180 day exercise window.</p>
                    <p><strong>Bad Leaver:</strong> An employee whose exit is for cause, fraud, breach of restrictive covenants or conviction - typically forfeits all options including vested.</p>
                    <p><strong>Single-Trigger Acceleration:</strong> All unvested options vest immediately on a change of control event (acquisition, merger, IPO). Founder/employee-friendly; common at Seed.</p>
                    <p><strong>Double-Trigger Acceleration:</strong> Options vest only if a change of control event is followed by termination without cause within a defined period (typically 12 months). Series B-plus market norm in India.</p>
                    <p><strong>Hybrid Acceleration (50/100):</strong> 50 percent vests on single-trigger plus 100 percent on double-trigger. Growth-stage market default.</p>
                    <p><strong>Clawback:</strong> Provision permitting forfeiture of vested options if the grantee is later found to have breached restrictive covenants or committed fraud during employment.</p>
                    <p><strong>Section 62(1)(b), Companies Act 2013:</strong> Statutory authority for issue of shares to employees under an Employee Stock Option Scheme via special resolution at 75 percent majority.</p>
                    <p><strong>Rule 12(2), Companies (Share Capital and Debentures) Rules 2014:</strong> Mandatory EGM explanatory statement disclosures - total options, eligibility class, vesting period, exercise price, lock-in, expiry, valuation methods, accounting policies and impact on company costs.</p>
                    <p><strong>Rule 12(6)(a):</strong> Minimum 1-year statutory cliff between grant date and first vesting date.</p>
                    <p><strong>Rule 12(10):</strong> Form SH-6 Register of Employee Stock Options maintained at registered office, authenticated by Company Secretary.</p>
                    <p><strong>Section 117(2), Companies Act 2013:</strong> MGT-14 filing within 30 days of special resolution; default attracts Rs 100 per day penalty under Section 117(2) read with Section 450.</p>
                    <p><strong>Section 39(5), Companies Act 2013:</strong> PAS-3 share allotment return; default attracts Rs 1,000 per day penalty for private companies up to Rs 25 lakh on first allotment on ESOP exercise.</p>
                    <p><strong>Section 17(2)(vi), Income Tax Act 1961:</strong> Perquisite tax on (FMV minus exercise price) at exercise. Continues to apply to shares allotted before 1 April 2026.</p>
                    <p><strong>Income Tax Act 2025 (effective 1 April 2026):</strong> Renumbers ESOP provisions; deferral window extended to 60 months under Section 392(3) read with Section 289(3).</p>
                    <p><strong>Section 80-IAC plus Section 192(2C), Income Tax Act 1961:</strong> DPIIT plus IMB certified startups - perquisite tax deferral until 48 months from exercise / sale / cessation (60 months under Income Tax Act 2025 from 1 April 2026).</p>
                    <p><strong>Rule 11UA, Income Tax Rules 1962:</strong> FMV of unlisted equity shares for tax purposes; valuation by IBBI-registered valuer; not older than 180 days from exercise date.</p>
                    <p><strong>SEBI SBEB Regulations 2021:</strong> Listed company ESOP regime including SAR, RSU, ESPS and sweat equity.</p>
                    <p><strong>Ind AS 102 / ICAI Guidance Note 2020:</strong> Share-based payment expense recognition over vesting period; Black-Scholes is the standard pricing model.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Design</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Statutory Anchor</span>
                        <strong>Section 62(1)(b)</strong>
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
            <h2 class="section-title">Who Needs ESOP Scheme Design</h2>
            <div class="content-text">
                
                <p>ESOP scheme design is the first-time engagement for any Indian Private Limited or Public Unlisted company creating its first employee stock option plan. The engagement is universally applicable across stages from bootstrapped pre-revenue through Series A and Series B, with engagement scope scaling to match complexity. For listed entities, SEBI SBEB Regulations 2021 add additional layers handled as a premium engagement.</p>
                <ul>
                    <li><strong>First-time founders preparing for first senior hire</strong> - Seed-stage scheme establishing 5-12 percent pool with 4-year vesting and 1-year cliff before issuing first 5-25 grants.</li>
                    <li><strong>Founders pre-Series A who need scheme established before term sheet</strong> - Series A investors typically demand 12-15 percent post-money pool established pre-funding; missing this triggers founder dilution at term sheet stage.</li>
                    <li><strong>CFOs and HR leaders regularising informal equity promises</strong> - 2-4 years of informal equity offers to early employees need to be regularised into a clean Board-approved scheme; backdated effective grant dates allowed if Board ratifies.</li>
                    <li><strong>Startups with senior CXO hires under negotiation</strong> - VP Engineering, VP Product, CFO, CTO joining at Seed/Series A with equity-weighted offers requiring performance vesting hooks and accelerated vesting drafted into the scheme.</li>
                    <li><strong>DPIIT-recognised startups granting founder ESOPs</strong> - Rule 12 10-year founder exemption permits ESOPs for promoters and 10 percent-plus directors in DPIIT-recognised startups (Private Limited or LLP, 10 years from incorporation, turnover under Rs 100 crore).</li>
                    <li><strong>Startups planning Series A or M&amp;A diligence</strong> - clean scheme architecture survives Series A through C diligence and acquirer counsel review with one minor comment typical.</li>
                    <li><strong>Companies amending AoA to authorise ESOPs</strong> - existing AoA without ESOP authorisation requires fresh EGM Special Resolution with MGT-14 filing before the scheme can be adopted.</li>
                    <li><strong>Listed entities under SEBI SBEB Regulations 2021</strong> - listed-company ESOP, RSU, SAR and ESPS schemes governed by SEBI SBEB Regulations 2021 with grantee class disclosure, Stock Exchange notification and shareholder communication.</li>
                </ul>
                <p><strong>Statutory framework recap:</strong> Section 62(1)(b) of Companies Act 2013 is the statutory authority for issue of shares to employees under an Employee Stock Option Scheme via Special Resolution at 75 percent majority. Rule 12 of Companies (Share Capital and Debentures) Rules 2014 specifies the operational provisions. Rule 12(2) lists mandatory EGM Explanatory Statement disclosures. Rule 12(6)(a) imposes the minimum 1-year statutory cliff. Rule 12(10) requires Form SH-6 register at registered office authenticated by Company Secretary. Section 117(2) requires MGT-14 filing within 30 days of Special Resolution (default Rs 100 per day under Section 450). Section 39(5) requires PAS-3 on first allotment (default Rs 1,000 per day for private companies up to Rs 25 lakh). Section 17(2)(vi) of Income Tax Act 1961 imposes perquisite tax at exercise. Section 80-IAC plus Section 192(2C) provide 48-month deferral for DPIIT plus IMB certified startups (60 months under Income Tax Act 2025 Section 392(3) read with 289(3) from 1 April 2026). Rule 11UA prescribes FMV methodology via IBBI-registered valuer. SEBI SBEB Regulations 2021 govern listed entities. Ind AS 102 plus ICAI Guidance Note 2020 govern share-based payment accounting using Black-Scholes.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron ESOP Scheme Design Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Seed Stage Scheme</strong></td><td>Pool sizing modelled against current hiring plan, basic scheme drafting (10 to 12 pages) under Section 62(1)(b), Board and EGM kit with 21-day notice under Section 101 and Explanatory Statement under Section 102, MGT-14 filing within 30 days under Section 117(2), Form SH-6 register setup at registered office under Rule 12(10).</td><td>Rs 75,000 - 1,00,000</td></tr>
                        <tr><td><strong>Pre-Series A Scheme</strong></td><td>Seed scope plus cap table modelling with 3 dilution scenarios (no top-up, post-money top-up, pre-money top-up), explicit leaver clause matrix covering 7 categories, sample term sheet reusable across future grants, AoA amendment if needed via fresh EGM.</td><td>Rs 1,00,000 - 1,50,000</td></tr>
                        <tr><td><strong>Series A to B Scheme</strong></td><td>Pre-Series A scope plus performance vesting design under Rule 12 measurable conditions, single-trigger/double-trigger/hybrid 50/100 acceleration provisions with Board discretion, SHA coordination, founder ESOP under Rule 12 DPIIT 10-year exemption for promoters and 10 percent-plus directors.</td><td>Rs 1,50,000 - 2,00,000</td></tr>
                        <tr><td><strong>IBBI Valuation (Pass-Through)</strong></td><td>FMV report under Rule 11UA of Income Tax Rules 1962 - DCF (Discounted Cash Flow via SEBI Cat I Merchant Banker), NAV (Net Asset Value via CA) or CCA (Comparable Companies Approach) methodology selection. Valid for 180 days from issue.</td><td>Rs 25,000 - 75,000</td></tr>
                        <tr><td><strong>AoA Amendment (Add-On)</strong></td><td>EGM Special Resolution at 75 percent majority for AoA amendment to authorise ESOPs where existing AoA does not, MGT-14 filing within 30 days, MoA/AoA printed copy. Required where AoA pre-dates ESOP authorisation.</td><td>Rs 15,000 - 25,000</td></tr>
                        <tr><td><strong>Founder ESOP under DPIIT Exemption</strong></td><td>DPIIT recognition coordination under Notification GSR 127(E) 2019 - Private Limited or LLP, 10 years from incorporation, turnover under Rs 100 crore. Rule 12 10-year founder exemption activation for promoters and 10 percent-plus directors. Section 80-IAC plus Section 192(2C) tax deferral pathway documented.</td><td>Rs 25,000 - 50,000</td></tr>
                        <tr><td><strong>Cross-Border Mirror Grant Coordination</strong></td><td>Foreign parent (US/Singapore/UK) plus Indian subsidiary structure under FEMA Overseas Investment Rules 2022 - OPI classification at 10 percent or less of parent equity; LRS USD 250,000 per FY tracking; India sub as TDS deductor under Section 192(1). Quoted separately for complex multi-jurisdiction structures.</td><td>From Rs 1,50,000</td></tr>
                        <tr><td><strong>Listed Entity SEBI SBEB Premium</strong></td><td>SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 alignment for listed-company ESOP, RSU, SAR, ESPS, sweat equity schemes. Grantee class disclosure, Stock Exchange notification, shareholder communication, Regulation 18 variation procedure. Quoted separately based on scheme complexity.</td><td>From Rs 2,00,000</td></tr>


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
            <h2 class="section-title">8-Step ESOP Scheme Design Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow runs 4 to 8 weeks end-to-end covering discovery and AoA review, cap table modelling with 3 dilution scenarios, scheme drafting, Board Resolution and 21-day EGM notice, Special Resolution at 75 percent majority, MGT-14 filing within 30 days, IBBI valuation engagement under Rule 11UA, Form SH-6 register setup and first grant batch issuance.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Discovery and AoA Review</h3>
                    <p class="step-description">60-minute discovery call covering stage, headcount, hiring roadmap, funding plans, investor SHA constraints (if any). Document collection and AoA review to confirm whether existing AoA authorises ESOPs. If AoA does not authorise, AoA amendment via fresh EGM is added to the engagement scope. Engagement letter signed.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AoA reviewed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope locked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Discovery</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Cap Table Modelling and Pool Sizing</h3>
                    <p class="step-description">Cap table mapped across founder, advisor, investor and existing employee equity. Pool size modelled against 18-24 month hiring plan with senior CXO bench reserved explicitly. Three dilution scenarios built (no top-up, post-money top-up, pre-money top-up). Pool recommendation aligned to stage benchmarks - 5-10 percent at Seed, 10-15 percent Pre-Series A, 12-18 percent Series A to B.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pool sized</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 3 scenarios</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Pool</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Scheme Drafting and Review Iteration</h3>
                    <p class="step-description">ESOP scheme drafted under Section 62(1)(b) covering pool, 4-year vesting with Rule 12(6)(a) 1-year cliff, exercise price method, tiered exercise window (90 days IC, 6 months managers, 12-24 months senior), explicit leaver matrix (good vs bad leaver across 7 categories), single/double/hybrid acceleration triggers with Board discretion, clawback, expiry, amendment procedure. Sample term sheet covering 20 parameters built in parallel.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scheme drafted</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Term sheet ready</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Scheme</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Board Meeting and Resolution</h3>
                    <p class="step-description">Convene Board Meeting (7-day notice) approving the ESOP scheme and calling EGM. Board Resolution drafted recording scheme architecture, pool size and rationale. Board calls EGM with 21-day notice under Section 101 of Companies Act 2013 with Explanatory Statement under Section 102 covering mandatory Rule 12(2) disclosures.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> BR passed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EGM called</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Board</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">EGM and Special Resolution</h3>
                    <p class="step-description">EGM held after 21-day notice period. Explanatory Statement covers total options, eligibility class, vesting period, exercise price method, lock-in, expiry, valuation methods and Ind AS 102 accounting impact (mandatory disclosures under Rule 12(2)). Special Resolution passed at 75 percent majority of members voting under Section 62(1)(b). For DPIIT founder grants, separate Special Resolution for promoter eligibility.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SR passed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 75% majority</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">EGM</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">MGT-14 Filing and IBBI Valuation</h3>
                    <p class="step-description">MGT-14 filed within 30 days under Section 117(2) of Companies Act 2013 - default attracts Rs 100 per day penalty. In parallel, IBBI Registered Valuer engaged for grant-date FMV under Rule 11UA of Income Tax Rules 1962 - DCF, NAV or CCA methodology selection. Valuation refreshed at every fresh grant batch and every 180 days for exercise events.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FMV report</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">MGT-14</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">SH-6 Register Setup and Ind AS 102 Modelling</h3>
                    <p class="step-description">Form SH-6 Register of Employee Stock Options set up at registered office under Rule 12(10), authenticated by Company Secretary. Ind AS 102 share-based payment expense modelled using Black-Scholes inputs (volatility, risk-free rate, expected term, dividend yield) for grant-date fair value; recognition schedule built over vesting period; Schedule III disclosure prepared. Rule 12(9) Directors Report disclosure pack drafted.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SH-6 authenticated</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Black-Scholes modelled</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">SH-6 + Ind AS</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">First Grant Letters and Employee Communication</h3>
                    <p class="step-description">First Grant Letters issued using the role-band sample term sheet template covering all 20 parameters - vesting schedule, exercise window tiers, leaver categorisation, acceleration treatment, clawback, tax treatment under Section 17(2)(vi) with Section 80-IAC deferral pathway. Signed grants recorded in SH-6. HR communication pack including FAQ and town-hall talking points for employee education on exercise mechanics and perquisite tax.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Grants issued</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SH-6 recorded</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">First Grant</span>
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
            <h2 class="section-title">Patron ESOP Scheme Design Deliverables</h2>
            <div class="content-text">
                
                <p>Every Patron ESOP scheme design engagement produces a complete kit of governance documents, statutory filings, valuation reports, accounting documentation and reusable templates.</p>
                <p><strong>1. Master ESOP Scheme Document:</strong></p>
                <ul>
                    <li>10 to 12 page Board-and-shareholder-approved scheme document under Section 62(1)(b) of Companies Act 2013 read with Rule 12.</li>
                    <li>Pool size in absolute options and percent of fully diluted equity.</li>
                    <li>Eligibility class definition (employees, directors, consultants, founder grants for DPIIT startups).</li>
                    <li>Vesting schedule (default 4-year time-based with Rule 12(6)(a) 1-year cliff).</li>
                    <li>Exercise price method (at or below FMV; not below face value).</li>
                    <li>Tiered exercise window (90 days IC, 6 months managers, 12-24 months senior leadership).</li>
                    <li>Explicit leaver matrix covering 7 categories (death, permanent disability, retirement, termination without cause, redundancy, termination for cause, voluntary resignation).</li>
                    <li>Acceleration triggers (single-trigger, double-trigger, hybrid 50/100) with Board discretion.</li>
                    <li>Clawback for fraud or restrictive covenant breach.</li>
                    <li>Lock-in, expiry and amendment procedure.</li>
                </ul>
                <p><strong>2. Cap Table Model with Dilution Scenarios:</strong></p>
                <ul>
                    <li>Excel model showing pool size at current stage and at next 2 funding rounds.</li>
                    <li>Founder dilution under three scenarios - no top-up, post-money top-up, pre-money top-up.</li>
                    <li>Grant capacity by role band aligned to 18-24 month hiring plan.</li>
                </ul>
                <p><strong>3. Sample Term Sheet Library (20 Parameters):</strong></p>
                <ul>
                    <li>Reusable template covering grantee, grant date, number of options, exercise price, vesting schedule, cliff, performance condition, exercise window (active and post-exit), good/bad leaver categories, voluntary resignation treatment, single/double-trigger acceleration, clawback, expiry, lock-in, tax treatment, governing law.</li>
                    <li>Reusable across every future grant - no fresh legal fees per grant.</li>
                </ul>
                <p><strong>4. Board Resolution and EGM Kit:</strong></p>
                <ul>
                    <li>Board Resolution drafting approving scheme adoption and calling EGM.</li>
                    <li>EGM Notice with 21-day notice period under Section 101 of Companies Act 2013.</li>
                    <li>Explanatory Statement under Section 102 covering mandatory Rule 12(2) disclosures.</li>
                    <li>Special Resolution at 75 percent majority of members voting.</li>
                </ul>
                <p><strong>5. MCA Filings:</strong></p>
                <ul>
                    <li>MGT-14 filing within 30 days of Special Resolution under Section 117(2). Coordinated with <a href="/esop-corporate-filings/">ESOP Corporate Filings</a> workflow.</li>
                    <li>PAS-3 within 30 days of share allotment on first ESOP exercise under Section 39(5).</li>
                    <li>AoA amendment via fresh EGM Special Resolution if existing AoA does not authorise ESOPs.</li>
                </ul>
                <p><strong>6. Form SH-6 Register of Employee Stock Options:</strong></p>
                <ul>
                    <li>Set up at registered office under Rule 12(10) of Companies (Share Capital and Debentures) Rules 2014.</li>
                    <li>Authenticated by Company Secretary.</li>
                    <li>Maintained continuously with all grant, vesting, exercise and forfeiture events.</li>
                </ul>
                <p><strong>7. IBBI Valuation Coordination:</strong></p>
                <ul>
                    <li>IBBI Registered Valuer engagement for grant-date FMV under Rule 11UA.</li>
                    <li>DCF (via SEBI Cat I Merchant Banker), NAV (via CA) or CCA methodology selection.</li>
                    <li>FMV certificate valid for 180 days from issue.</li>
                    <li>Coordinated through <a href="/esop-valuation-services/">ESOP Valuation Services</a>.</li>
                </ul>
                <p><strong>8. Ind AS 102 Modelling and Tax Memos:</strong></p>
                <ul>
                    <li>Black-Scholes fair value computation at grant date (volatility, risk-free rate, expected term, dividend yield inputs).</li>
                    <li>Share-based payment expense recognition schedule over vesting period.</li>
                    <li>Schedule III disclosure plus Rule 12(9) Directors Report disclosure pack.</li>
                    <li>Section 17(2)(vi) perquisite tax memo with Section 80-IAC plus Section 192(2C) deferral pathway documented.</li>
                    <li>Coordinated through <a href="/esop-accounting-ind-as-102/">ESOP Accounting under Ind AS 102</a>.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Scheme Design Mistakes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Under-sizing the pool</strong></td><td>Founders create a 5 percent pool optimised for current headcount, exhaust it after 3 senior hires, then have to expand mid-fundraise with founders absorbing the dilution pre-money. Series A investor typically demands 12-15 percent post-money pool, triggering Rs 50 lakh to Rs 5 crore founder cost depending on round valuation.</td><td>Patron models pool against 18-24 month hiring plan with senior CXO bench accounted for explicitly. Pre-Series A pool typically 12-13 percent to absorb Series A 12-15 percent demand without re-top-up. Pool sized at the upper end of the stage range when an early CXO bench is planned.</td></tr>
                        <tr><td><strong>Vague leaver clauses</strong></td><td>Schemes that say 'options lapse on termination' without defining good leaver vs bad leaver categories invite disputes. Departing employees claim good leaver status; company denies it; arbitration follows. Series A diligence flags ambiguous leaver language as restatement risk.</td><td>Patron drafts explicit leaver matrix in scheme and term sheet covering 7 categories - death, permanent disability, retirement, termination without cause, redundancy, termination for cause and voluntary resignation. Each category mapped to specific exercise window and vested option treatment.</td></tr>
                        <tr><td><strong>Missing accelerated vesting clauses</strong></td><td>Investors at Series B-plus often demand double-trigger acceleration. Schemes without acceleration language need a fresh Special Resolution and another MGT-14 filing to amend - 21-day EGM notice plus 30-day filing window adds 6-8 weeks to a fundraise.</td><td>Patron drafts acceleration provisions into the original scheme - single-trigger, double-trigger and hybrid 50/100 options with Board discretion to apply. Future-proofs the scheme for Series B and beyond without scheme amendment friction.</td></tr>
                        <tr><td><strong>Exercise window too short</strong></td><td>Default schemes give 30 to 60 days post-termination, forcing employees to either find cash for the exercise price plus perquisite TDS or forfeit. Senior employees in particular lose substantial vested value because they cannot fund Section 17(2)(vi) tax obligation on short timelines.</td><td>Patron drafts tiered exercise window in the scheme - 90 days for IC roles, 6 months for managers, 12 to 24 months for senior leadership. Aligned to standard Indian market practice; protects vested option value while preserving forfeit-on-bad-leaver mechanics.</td></tr>
                        <tr><td><strong>Founder grants without DPIIT recognition</strong></td><td>Founders holding more than 10 percent equity are excluded from standard ESOPs under Companies Act default. Granting to founders without DPIIT recognition under Rule 12 10-year exemption renders those grants legally invalid - cannot be ratified later.</td><td>Patron coordinates DPIIT recognition under Notification GSR 127(E) 2019 BEFORE founder grants are issued. 10-year window from incorporation unlocked for promoters and 10 percent-plus directors. Section 80-IAC plus Section 192(2C) tax deferral pathway documented.</td></tr>
                        <tr><td><strong>Grants made before EGM Special Resolution</strong></td><td>Companies sometimes issue grant letters in advance of the EGM to lock in offer terms. Grants made before EGM Special Resolution are legally invalid under Section 62(1)(b) and may be set aside by RoC. Series A diligence flags as material restatement.</td><td>Patron sequences the engagement strictly - Board Resolution then 21-day EGM notice then Special Resolution then MGT-14 filing then IBBI valuation then SH-6 setup then first grant batch. No grants issued until EGM Special Resolution is on record.</td></tr>
                        <tr><td><strong>IBBI valuation older than 180 days</strong></td><td>Rule 11UA requires IBBI valuation not older than 180 days from exercise date. Stale valuations trigger tax officer reassessment at Section 17(2)(vi) perquisite computation and potential adjustment under transfer pricing principles.</td><td>Patron coordinates Rule 11UA valuation refresh at every fresh grant batch and at 180-day intervals for exercise events. DCF, NAV or CCA methodology selected for defensibility under tax scrutiny.</td></tr>
                        <tr><td><strong>MGT-14 default under Section 117(2)</strong></td><td>Rs 100 per day after the 30-day filing window under Section 117(2) of Companies Act 2013. Compounding can exceed Rs 25,000 for a 6-month delay plus regulatory friction during subsequent funding diligence.</td><td>Patron filing calendar tracks every Special Resolution against the 30-day MGT-14 deadline. PAS-3 30-day window also tracked under Section 39(5) - Rs 1,000 per day default for private companies up to Rs 25 lakh. End-to-end through <a href="/esop-corporate-filings/">ESOP Corporate Filings</a> retainer.</td></tr>


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
            <h2 class="section-title">ESOP Scheme Design Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>AoA amendment (add-on)</td><td>EGM Special Resolution, MGT-14, MoA/AoA print for companies whose existing AoA does not authorise ESOPs</td><td class="table-amount">Rs 15,000 - 25,000</td></tr>
                        <tr><td>IBBI valuation (pass-through)</td><td>FMV report under Rule 11UA - DCF/NAV/CCA methodology; valid for 180 days from issue</td><td class="table-amount">Rs 25,000 - 75,000</td></tr>
                        <tr><td>Founder ESOP under DPIIT exemption</td><td>DPIIT recognition coordination plus Rule 12 10-year founder exemption activation plus Section 80-IAC tax deferral pathway</td><td class="table-amount">Rs 25,000 - 50,000</td></tr>
                        <tr><td>Seed stage scheme</td><td>Pool sizing, basic scheme drafting, Board and EGM kit, MGT-14 within 30 days, SH-6 register setup</td><td class="table-amount">Rs 75,000 - 1,00,000</td></tr>
                        <tr><td>Pre-Series A scheme</td><td>Seed scope plus cap table modelling, leaver clause matrix, sample term sheet, AoA amendment if needed</td><td class="table-amount">Rs 1,00,000 - 1,50,000</td></tr>
                        <tr><td>Series A to B scheme</td><td>Above plus performance vesting design, single/double/hybrid acceleration triggers, SHA coordination, founder ESOP under DPIIT exemption</td><td class="table-amount">Rs 1,50,000 - 2,00,000</td></tr>
                        <tr><td>Cross-border mirror grant coordination</td><td>Foreign parent plus Indian subsidiary structure under FEMA OI Rules 2022; OPI classification; LRS design; quoted separately for complex structures</td><td class="table-amount">From Rs 1,50,000</td></tr>
                        <tr><td>Listed entity SEBI SBEB premium</td><td>SEBI SBEB Regulations 2021 alignment - grantee class disclosure, Stock Exchange notification, Regulation 18 variation procedure; quoted separately</td><td class="table-amount">From Rs 2,00,000</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for Seed Stage ESOP Scheme Design; listed-company SEBI SBEB schemes quoted separately; cross-border structures quoted separately; ESOP filings retainer (MGT-14, PAS-3, MGT-7) available as separate annual engagement under ESOP Corporate Filings</td><td class="table-amount"><strong>Starting from INR 75,000 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Design consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20ESOP%20scheme%20design." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Scheme Design Timeline (4 to 8 Weeks)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Patron 4-8 Week Workflow</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Week 1 - Discovery call, document collection, AoA review for ESOP authorisation</td><td class="table-amount">Engagement letter signed; checklist submitted</td></tr>
                        <tr><td>Week 2 - Cap table modelling, pool sizing with 3 dilution scenarios</td><td class="table-amount">Cap table model + dilution scenarios</td></tr>
                        <tr><td>Week 2-3 - Scheme drafting and review iteration; sample term sheet build</td><td class="table-amount">Draft ESOP Policy + sample term sheet</td></tr>
                        <tr><td>Week 3 - Board Meeting (7-day notice); Board Resolution approving scheme and calling EGM</td><td class="table-amount">Board Resolution; MGT-14 trigger</td></tr>
                        <tr><td>Week 3-6 - EGM Notice (21-day notice under Section 101); EGM date</td><td class="table-amount">Special Resolution passed at 75 percent majority</td></tr>
                        <tr><td>Week 6-7 - IBBI valuation engagement under Rule 11UA</td><td class="table-amount">FMV certificate at grant date</td></tr>
                        <tr><td>Week 6-7 - MGT-14 filing within 30 days under Section 117(2)</td><td class="table-amount">MCA21 receipt; SH-6 register set up</td></tr>
                        <tr><td>Week 7-8 - First Grant Letters issued using sample term sheet template</td><td class="table-amount">Signed grants recorded in SH-6</td></tr>
                        <tr><td><strong>Statutory Deadlines</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>EGM notice prior to Special Resolution under Section 101</td><td class="table-amount">Minimum 21 days</td></tr>
                        <tr><td>MGT-14 filing post Special Resolution under Section 117(2)</td><td class="table-amount">Within 30 days</td></tr>
                        <tr><td>PAS-3 filing post share allotment on first exercise under Section 39(5)</td><td class="table-amount">Within 30 days</td></tr>
                        <tr><td>Rule 12(6)(a) minimum statutory cliff between grant and first vesting</td><td class="table-amount">1 year</td></tr>
                        <tr><td>Rule 11UA IBBI valuation validity</td><td class="table-amount">180 days from issue</td></tr>
                        <tr><td>Rule 12(9) Directors Report ESOP disclosure (11 mandatory items)</td><td class="table-amount">Annual</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Section 117(2) of Companies Act 2013 imposes MGT-14 filing within 30 days of Special Resolution; default attracts Rs 100 per day penalty under Section 450. Section 39(5) imposes PAS-3 within 30 days of share allotment on first ESOP exercise; default attracts Rs 1,000 per day penalty for private companies up to Rs 25 lakh - a meaningfully more punitive default than MGT-14. Section 101 requires 21-day EGM notice with Explanatory Statement under Section 102 covering mandatory Rule 12(2) disclosures (total options, eligibility class, vesting period, exercise price method, lock-in, expiry, valuation methods, accounting policies). Grants made before EGM Special Resolution are legally invalid and may be set aside by RoC. IBBI valuation older than 180 days at exercise date is not acceptable under Rule 11UA and may trigger tax officer reassessment. DPIIT recognition under Notification GSR 127(E) 2019 must be obtained before exercise to claim Section 80-IAC plus Section 192(2C) tax deferral (48 months current; 60 months under Income Tax Act 2025 Section 392(3) read with 289(3) from 1 April 2026). For founder ESOPs, DPIIT recognition must be on record BEFORE the grant date under Rule 12 10-year founder exemption.

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
            <h2 class="section-title">Why Engage Patron for ESOP Scheme Design</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Single-Firm CA + CS + Valuation + Tax</h3><p>CA, CS, valuation and tax specialists with named partner accountability under one engagement. No coordination tax across separate firms. End-to-end delivery from AoA review through first Grant Letter in 4 to 8 weeks.</p></article>
    <article class="feature-card"><h3>Investor-Ready Scheme Documentation</h3><p>Scheme withstands Series A, B and C investor due diligence including diligence-level Q&amp;A. Series A investor counsel typically returns one to two minor comments on Patron schemes - clean diligence pass standard.</p></article>
    <article class="feature-card"><h3>Section 17(2)(vi) and Section 80-IAC Tax Architecture</h3><p>Perquisite tax computation under Section 17(2)(vi) pre-mapped into scheme. Section 80-IAC plus Section 192(2C) 48-month deferral pathway (60 months under Income Tax Act 2025 from 1 April 2026) for DPIIT plus IMB certified startups documented.</p></article>
    <article class="feature-card"><h3>Ind AS 102 Black-Scholes Modelling</h3><p>Share-based payment expense modelled into the cap table from grant date using Black-Scholes (volatility, risk-free rate, expected term, dividend yield inputs). Recognition schedule over vesting period documented in audit working paper file. Schedule III plus Rule 12(9) disclosure pack ready.</p></article>
    <article class="feature-card"><h3>Statutory Filings Within Windows</h3><p>MGT-14 within 30 days under Section 117(2). PAS-3 within 30 days under Section 39(5). Form SH-6 register at registered office under Rule 12(10). Zero default penalties - filing calendar tracks every deadline.</p></article>
    <article class="feature-card"><h3>Reusable Sample Term Sheet Across Future Grants</h3><p>20-parameter sample term sheet built once, reusable across every future grant. No fresh legal fees per grant. Role-band templates for engineering, product, design and CXO roles available on request.</p></article>
    <article class="feature-card"><h3>DPIIT Founder ESOP Exemption Pathway</h3><p>Rule 12 DPIIT 10-year founder exemption coordination under Notification GSR 127(E) 2019. Founders and 10 percent-plus directors eligible for ESOPs in DPIIT-recognised startups (Private Limited or LLP, 10 years from incorporation, turnover under Rs 100 crore).</p></article>
    <article class="feature-card"><h3>15+ Years Across MCA, CBDT, ICAI, SEBI, IBBI</h3><p>Patron has been drafting ESOP schemes since 2009 across Private Limited, Public Unlisted and DPIIT-recognised startup structures. 10,000+ businesses served, 4.9 Google rating, 50,000+ documents filed.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted for First-Time ESOP Schemes Across SaaS, Fintech, Edtech</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years in Practice</strong></p>
                <p>Patron designed our 12 percent ESOP pool, drafted the full scheme with leaver clauses and accelerated vesting, and ran the EGM in six weeks. The Series A investor's legal team had only minor comments on the scheme. - Co-founder, vertical SaaS startup (Bengaluru).</p>
                <p>We had three years of informal equity promises that needed regularising. Patron rebuilt the cap table, drafted a clean scheme, and got the EGM done while we were in fundraise mode. Term sheet template now reused on every new senior hire. - CFO, growth-stage logistics startup (Mumbai).</p>
                <p><strong>Selected Clients (Illustrative):</strong> Enterprise compliance work for Hyundai, Asian Paints and Bridgestone illustrates pan-India operational footprint. ESOP scheme design engagements completed across SaaS, fintech, edtech, healthtech, consumer-tech and B2B startups from Seed through Series B.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves Indian startups establishing first-time ESOP schemes across India - both in-person and remotely. Pan-India remote engagement standard.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Template Scheme vs Patron Custom-Designed Scheme</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Dimension</th>
                            <th>Free Online Template</th>
                            <th>Patron Custom-Designed Scheme</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Pool Sizing</strong></td><td>Generic 10 percent of post-money equity regardless of stage or hiring plan</td><td>Modelled against your 18-24 month hiring plan with senior CXO bench reserved; aligned to investor SHA pool size expectation</td></tr>
                        <tr><td><strong>Vesting</strong></td><td>Boilerplate 4-year time-based with 1-year cliff for all grantees</td><td>Custom - time-based, performance-based or hybrid; differentiated by CXO and IC tiers; refresh grant authority pre-drafted</td></tr>
                        <tr><td><strong>Leaver Clauses</strong></td><td>Single sentence on termination without category-specific treatment</td><td>Explicit matrix covering 7 categories - good leaver (death, permanent disability, retirement, termination without cause, redundancy), bad leaver (termination for cause, fraud, breach), voluntary resignation</td></tr>
                        <tr><td><strong>Acceleration Triggers</strong></td><td>Absent or vague language with no Board discretion mechanism</td><td>Single-trigger, double-trigger and hybrid 50/100 partial acceleration drafted with Board discretion to apply per situation</td></tr>
                        <tr><td><strong>Sample Term Sheet</strong></td><td>Not included; founder drafts grant letters per hire</td><td>Reusable 20-parameter template covering every future grant - no fresh legal fees per grant</td></tr>
                        <tr><td><strong>IBBI Valuation</strong></td><td>Not coordinated; founder must engage valuer separately</td><td>Patron engages IBBI Registered Valuer; FMV certificate at grant date under Rule 11UA; DCF/NAV/CCA methodology selection</td></tr>
                        <tr><td><strong>EGM and MCA Filings</strong></td><td>Founder driven; often late beyond Section 117(2) 30-day window; default Rs 100 per day</td><td>CS-filed within Section 117(2) 30-day MGT-14 window and Section 39(5) 30-day PAS-3 window - zero default penalties</td></tr>
                        <tr><td><strong>Ind AS 102 Modelling</strong></td><td>Not covered; statutory auditor flags emphasis-of-matter or qualified opinion</td><td>Black-Scholes expense built into cap table at grant; Schedule III plus Rule 12(9) Directors Report disclosure pack ready</td></tr>
                        <tr><td><strong>Founder ESOP Pathway</strong></td><td>No DPIIT coordination; founders excluded under Companies Act default; grants legally invalid if issued</td><td>DPIIT recognition coordinated under Notification GSR 127(E) 2019 BEFORE founder grants; Rule 12 10-year exemption activated</td></tr>
                        <tr><td><strong>Investor Diligence Outcome</strong></td><td>Restatement risk at Series A - scheme reopened by investor counsel</td><td>Clean diligence pass with one to two minor counsel comments typical</td></tr>
                        <tr><td><strong>Total Cost (3 Years)</strong></td><td>Free upfront + Rs 2 to 5 lakh restatement cost at Series A + founder dilution from pool top-up</td><td>Rs 75,000 to Rs 2,00,000 one-time + Rs 36,000+ annual compliance retainer through ESOP Corporate Filings</td></tr>


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
            <h2 class="section-title">Adjacent Patron ESOP Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong><a href="/esop-services/">ESOP Services Master Hub</a></strong> - end-to-end ESOP lifecycle services covering all verticals and engagement types; ongoing operational compliance after scheme design including vesting tracking and annual ESOP disclosures.</li>
                    <li><strong><a href="/esop-for-tech-startups/">ESOP for Tech Startups</a></strong> - tech-vertical scheme design with engineer/CTO pool benchmarks, refresh grants at 24-36 month tenure, performance vesting hooks and hybrid 50/100 acceleration drafted into the scheme at the outset.</li>
                    <li><strong><a href="/esop-for-saas-companies/">ESOP for SaaS Companies</a></strong> - B2B SaaS-specific design with ARR-linked vesting, sales quota acceleration, CSM NRR linkage and Delaware flip mirror grant structures.</li>
                    <li><strong><a href="/esop-restructuring-underwater-options/">ESOP Restructuring and Underwater Options</a></strong> - down-round remediation through Repricing, Exchange Program, Top-Up Grants, Vesting Acceleration or Cashout/Buyback for schemes that have gone underwater post-down-round.</li>
                    <li><strong><a href="/esop-valuation-services/">ESOP Valuation Services</a></strong> - Rule 11UA FMV reports including DCF, NAV and CCA methodologies for grant date, exercise events and modification events; IBBI Registered Valuer engagement.</li>
                    <li><strong><a href="/esop-accounting-ind-as-102/">ESOP Accounting under Ind AS 102</a></strong> - share-based payment expense recognition over vesting period using Black-Scholes; Schedule III disclosure plus Rule 12(9) Directors Report disclosure pack; group SBP rules for cross-border mirror grants.</li>
                    <li><strong><a href="/esop-corporate-filings/">ESOP Corporate Filings</a></strong> - ongoing MCA filings retainer covering MGT-14, PAS-3 and MGT-7 for active grant cycles plus annual Directors Report ESOP disclosure under Rule 12(9).</li>
                    <li><strong><a href="/startup-registration/">DPIIT Startup Registration</a></strong> - DPIIT recognition under Notification GSR 127(E) 2019; prerequisite for Rule 12 10-year founder exemption and Section 80-IAC plus Section 192(2C) tax deferral pathway.</li>
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
                
                <ul>
                    <li><strong>Section 62(1)(b), Companies Act 2013</strong> - statutory authority for issue of shares to employees under an Employee Stock Option Scheme via Special Resolution at 75 percent majority. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs portal</a>.</li>
                    <li><strong>Rule 12, Companies (Share Capital and Debentures) Rules 2014</strong> - operational provisions for ESOP including scheme adoption, modification and disclosure framework.</li>
                    <li><strong>Rule 12(2)</strong> - mandatory EGM Explanatory Statement disclosures - total options, eligibility class, vesting period, exercise price method, lock-in, expiry, valuation methods, accounting policies and impact on company costs.</li>
                    <li><strong>Rule 12(6)(a)</strong> - minimum 1-year statutory cliff between grant date and first vesting date; mandatory across all schemes.</li>
                    <li><strong>Rule 12(9)</strong> - 11 mandatory ESOP disclosures in Directors Report including scheme particulars, options granted, options vested, options exercised, options forfeited, money realised on exercise and variation in terms of grants.</li>
                    <li><strong>Rule 12(10)</strong> - Form SH-6 Register of Employee Stock Options maintained at registered office, authenticated by Company Secretary.</li>
                    <li><strong>Rule 12 Explanation - DPIIT 10-Year Founder Exemption</strong> - DPIIT-recognised startups (Private Limited or LLP, 10 years from incorporation, turnover under Rs 100 crore) can grant ESOPs to founders and 10 percent-plus directors for 10 years from incorporation.</li>
                    <li><strong>Section 117(2), Companies Act 2013</strong> - MGT-14 filing within 30 days of Special Resolution; default attracts Rs 100 per day penalty under Section 117(2) read with Section 450.</li>
                    <li><strong>Section 39(5), Companies Act 2013</strong> - PAS-3 share allotment return on first ESOP exercise; default attracts Rs 1,000 per day penalty for private companies up to Rs 25 lakh.</li>
                    <li><strong>Section 101, Companies Act 2013</strong> - EGM notice minimum 21 days before meeting date.</li>
                    <li><strong>Section 102, Companies Act 2013</strong> - Explanatory Statement to be annexed to notice of general meeting covering Rule 12(2) mandatory disclosures.</li>
                    <li><strong>Section 17(2)(vi), Income Tax Act 1961</strong> - perquisite tax on (FMV minus exercise price) at exercise; continues to apply to shares allotted before 1 April 2026. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department portal</a>.</li>
                    <li><strong>Income Tax Act 2025, effective 1 April 2026</strong> - renumbers ESOP provisions; perquisite tax deferral window extended to 60 months under Section 392(3) read with Section 289(3) (up from 48 months under ITA 1961).</li>
                    <li><strong>Section 80-IAC plus Section 192(2C), Income Tax Act 1961</strong> - DPIIT plus IMB certified startups - perquisite tax deferral until 48 months from exercise / sale / cessation of employment (60 months under Income Tax Act 2025 from 1 April 2026).</li>
                    <li><strong>Section 192(1), Income Tax Act 1961</strong> - employer acts as TDS deductor on perquisite at exercise.</li>
                    <li><strong>Section 49(2AA), Income Tax Act 1961</strong> - cost of acquisition for capital gains at subsequent sale equals FMV taxed as perquisite at exercise.</li>
                    <li><strong>Rule 11UA, Income Tax Rules 1962</strong> - FMV of unlisted equity shares for tax purposes; valuation by IBBI-registered valuer using DCF, NAV or CCA methodology; not older than 180 days from exercise date.</li>
                    <li><strong>DPIIT Notification GSR 127(E) 2019</strong> - startup recognition criteria (Private Limited or LLP, incorporated within 10 years, turnover under Rs 100 crore, working towards innovation, development or improvement). <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India portal</a>.</li>
                    <li><strong>SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021</strong> - listed company ESOP, SAR, RSU, ESPS and sweat equity regime including grantee class disclosure and Stock Exchange notification.</li>
                    <li><strong>Ind AS 102 / ICAI Guidance Note on Accounting for Share-Based Payments (September 2020)</strong> - share-based payment expense recognition over vesting period using Black-Scholes pricing model; volatility, risk-free rate, expected term and dividend yield as standard inputs.</li>
                    <li><strong>FEMA Overseas Investment Rules 2022</strong> - cross-border ESOPs from foreign tech parents to Indian subsidiary employees; OPI classification if individual beneficial ownership at or below 10 percent of parent equity, ODI otherwise; relevant where scheme design includes mirror grant component.</li>
                    <li><strong>LRS (Liberalised Remittance Scheme), Section 5 FEMA 1999</strong> - USD 250,000 per FY per individual remittance limit for exercise consideration to foreign parent.</li>
                    <li><strong>Section 450, Companies Act 2013</strong> - general penalty provision applied to Section 117(2) and other default categories not specifying their own penalty.</li>
                    <li><strong>Section 68, Companies Act 2013</strong> - buyback authority used for ESOP cashout in wind-down scenarios.</li>
                    <li><strong>Central Board of Direct Taxes (CBDT)</strong> - administrative authority for Income Tax Act matters. <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">CBDT notifications</a>.</li>
                    <li><strong>Institute of Chartered Accountants of India (ICAI)</strong> - Ind AS 102 Application Guidance and Guidance Note publications. <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI portal</a>.</li>
                </ul>

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
                    <p class="faq-expanded__lead">Long-tail answers on first-time ESOP scheme design for Indian startups - fees by stage, end-to-end timeline, minimum cliff, scheme document contents, single vs double-trigger acceleration, good vs bad leaver definitions and founder ESOPs under DPIIT 10-year exemption.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does ESOP scheme design cost in India?</h3>
                        <div class="faq-expanded__a"><p>ESOP scheme design at Seed stage costs Rs 75,000 to Rs 1,00,000. Pre-Series A schemes with cap table modelling, leaver matrix and sample term sheet cost Rs 1,00,000 to Rs 1,50,000. Series A to B schemes with performance vesting, accelerated vesting and SHA coordination cost Rs 1,50,000 to Rs 2,00,000. IBBI valuation is a pass-through of Rs 25,000 to Rs 75,000. Fees are exclusive of GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does it take to design an ESOP scheme?</h3>
                        <div class="faq-expanded__a"><p>End-to-end design takes 4 to 8 weeks. The bottleneck is the 21-day EGM notice period plus the 30-day MGT-14 filing window. Drafting itself takes 7 to 15 working days and IBBI valuation 7 to 14 days. Faster turnarounds are possible if AoA already authorises ESOPs and shareholders consent to a shortened notice in writing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the minimum cliff period for ESOPs under Indian law?</h3>
                        <div class="faq-expanded__a"><p>The statutory minimum is one year from the grant date under Rule 12(6)(a) of the Companies (Share Capital and Debentures) Rules 2014. Companies cannot vest any portion of an option grant earlier than 12 months even if the employee resigns or is terminated. Most Indian startups follow a 4-year vesting schedule with this 1-year cliff.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What should be included in an ESOP scheme document?</h3>
                        <div class="faq-expanded__a"><p>A complete ESOP scheme must cover total options authorised, eligibility classes, grant authority (Board or Committee), vesting schedule and cliff, exercise price method, exercise window for active and exited employees, leaver matrix (good leaver and bad leaver), accelerated vesting triggers, lock-in, expiry, clawback, change of control treatment and amendment procedure. Rule 12(2) of the Share Capital Rules 2014 specifies the mandatory EGM disclosures.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between single-trigger and double-trigger acceleration?</h3>
                        <div class="faq-expanded__a"><p>Single-trigger acceleration vests all unvested options on a change of control event (acquisition, merger, IPO). Double-trigger acceleration requires both a change of control event AND a termination without cause of the employee within a defined window (typically 12 months). Double-trigger is investor-friendly and now the Series B-plus market norm in India.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How should good leaver and bad leaver be defined?</h3>
                        <div class="faq-expanded__a"><p>Good leaver categories typically cover death, permanent disability, retirement on or after a defined age, termination without cause and redundancy - the leaver retains vested options with a 90 to 180 day exercise window. Bad leaver categories cover termination for cause, fraud, breach of restrictive covenants and conviction of a serious offence - the leaver forfeits all options, vested and unvested. Voluntary resignation is often treated as good leaver after a minimum service period (e.g. 24 months).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a startup grant ESOPs to founders during scheme design?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only if the company holds DPIIT recognition. Rule 12 of the Share Capital Rules 2014 excludes promoters and 10 percent-plus directors from receiving ESOPs, with an exception for DPIIT-recognised startups for 10 years from incorporation. Patron secures DPIIT recognition and drafts founder grants into the scheme using this exemption.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">ESOP banane ka tarika kya hai? (How to design an ESOP scheme)</h3>
                        <div class="faq-expanded__a"><p>ESOP banane ke liye yeh process follow karna padta hai - sabse pehle AoA check karna padta hai ki ESOP ke liye authorisation hai ki nahi, agar nahi to amendment karna padega. Phir cap table modelling aur pool sizing - typically 10 to 15 percent post-money equity Indian startups ke liye. Scheme draft karna padta hai under Section 62(1)(b) Companies Act 2013 - pool, 4-year vesting with Rule 12(6)(a) ka 1-year statutory cliff, exercise price (face value ya FMV se neeche nahi), leaver matrix (good leaver vs bad leaver), single ya double-trigger acceleration, clawback. Phir Board Resolution pass karke 21-din ka EGM notice issue karna padta hai Section 101 ke under. EGM mein Special Resolution at 75 percent majority pass hoga. MGT-14 30 din mein file karna padta hai Section 117(2) ke under (default Rs 100 per day). IBBI valuation Rule 11UA ke under (180 din valid). Form SH-6 register registered office mein maintain karna padta hai Rule 12(10) ke under, Company Secretary authenticate karega. DPIIT recognition Notification GSR 127(E) 2019 ke under hai to founders aur 10 percent-plus directors ko bhi ESOP de sakte hain Rule 12 ke 10-year exemption ke through. Section 17(2)(vi) ka perquisite tax exercise par lagega; Section 80-IAC plus Section 192(2C) ka 48 mahine deferral milta hai DPIIT plus IMB startups ko (60 mahine ITA 2025 mein 1 April 2026 se). Ind AS 102 ke under Black-Scholes se share-based payment expense vesting period par recognise hoga. Patron 4 to 8 hafton mein puri process complete karta hai - sample term sheet, scheme document, Board kit, EGM kit, MGT-14, IBBI valuation, SH-6 setup aur first Grant Letter sab include. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Typical ESOP pool size?</strong> 10 to 15 percent of post-money equity for Indian startups; 5 to 10 percent at seed; up to 18 percent by Series B.</li>
                    <li><strong>Can the exercise price be face value?</strong> Yes - the Board may set exercise price at or below FMV but not below face value of the share.</li>
                    <li><strong>What MCA forms are filed during scheme design?</strong> MGT-14 within 30 days of board and special resolutions under Section 117(2); PAS-3 within 30 days of allotment on first exercise under Section 39(5); SH-6 register maintained at registered office under Rule 12(10).</li>
                    <li><strong>Is shareholder approval mandatory?</strong> Yes - Special Resolution at 75 percent majority under Section 62(1)(b). Private companies cannot use ordinary resolution for fresh share issue under ESOP.</li>
                    <li><strong>Can the scheme be amended later?</strong> Yes by Special Resolution under Rule 12, provided the amendment is not prejudicial to existing option holders. Fresh MGT-14 filing within 30 days required.</li>
                    <li><strong>MGT-14 default penalty?</strong> Rs 100 per day under Section 117(2) read with Section 450 after the 30-day filing window.</li>
                    <li><strong>PAS-3 default penalty?</strong> Rs 1,000 per day under Section 39(5) for private companies up to Rs 25 lakh - more punitive than MGT-14.</li>
                    <li><strong>Grant before EGM Special Resolution?</strong> Legally invalid under Section 62(1)(b); RoC may set aside; Series A diligence flags as material restatement.</li>
                    <li><strong>IBBI valuation validity?</strong> 180 days from issue under Rule 11UA; stale valuations trigger tax officer reassessment at exercise.</li>
                    <li><strong>DPIIT recognition for founder ESOPs?</strong> Required BEFORE founder grants under Rule 12 10-year exemption; coordinated via Notification GSR 127(E) 2019.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Scheme Design - Engage Before Series A Term Sheet</h2>
            <div class="content-text">
                
                Pre-Series A investor term sheets typically demand 12 to 15 percent ESOP pool established pre-funding. Missing this triggers founder dilution borne pre-money - a Rs 50 lakh to Rs 5 crore founder cost depending on round valuation. The 4 to 8 week design timeline must start before the term sheet to avoid compressed EGM notice periods and stale IBBI valuations. MGT-14 default attracts Rs 100 per day under Section 117(2) after the 30-day window. PAS-3 default attracts Rs 1,000 per day under Section 39(5) for private companies up to Rs 25 lakh - significantly more punitive. Grants made before EGM Special Resolution are legally invalid under Section 62(1)(b) and may be set aside by RoC. IBBI valuation older than 180 days at exercise date is not acceptable under Rule 11UA. For DPIIT founder grants under Rule 12 10-year exemption, DPIIT recognition under Notification GSR 127(E) 2019 must be on record BEFORE the grant date. Section 80-IAC plus Section 192(2C) 48-month perquisite tax deferral (60 months under Income Tax Act 2025 Section 392(3) from 1 April 2026) requires DPIIT plus IMB certification before exercise. Ind AS 102 modelling must be ready for the first statutory audit cycle to prevent qualified opinion or emphasis-of-matter. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free ESOP scheme design scoping call - response within 2 hours.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for First-Time ESOP Scheme Design</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP scheme design is a one-time exercise that governs every grant, exercise and exit your company will see for the next decade. A scheme that fails on pool sizing, leaver clauses or accelerated vesting will be reopened by Series A diligence, by senior hires negotiating offers, and by Ind AS 102 auditors at year-end. A well-drafted scheme - filed correctly under Section 62(1)(b) of the Companies Act 2013 and Rule 12 of the Share Capital Rules 2014 - eliminates these reopens.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP delivers first-time ESOP scheme design in 4 to 8 weeks with CA, CS, valuation and tax under one engagement. Across Pune, Mumbai, Delhi and Gurugram offices, the firm has been advising Indian businesses since 2009. 10,000+ businesses served. 4.9 Google rating. 50,000+ documents filed. 15+ years in practice. Investor-ready scheme documentation that withstands Series A through C diligence with one to two minor counsel comments typical.</p>
                <p style="color:rgba(255,255,255,0.92);">Ready to design your first ESOP scheme? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free scheme design scoping call. Response within 2 hours. 4 to 8 week end-to-end timeline from discovery to first Grant Letter.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20ESOP%20scheme%20design." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Patron ESOP Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">ESOP scheme design is the foundational engagement that all vertical-specific and lifecycle ESOP services build on. Patron operates from Pune, Mumbai, Delhi and Gurugram offices with pan-India remote engagement standard. Explore the master ESOP hub and adjacent services below.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related Patron ESOP Services</h3>
                <div class="pa-cross-grid">
                    <a href="/esop-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Services Master Hub</strong><span>End-to-end ESOP lifecycle</span></div>
                    </a>
                    <a href="/esop-for-tech-startups/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP for Tech Startups</strong><span>SaaS / fintech / AI / B2B vertical design</span></div>
                    </a>
                    <a href="/esop-for-saas-companies/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP for SaaS Companies</strong><span>B2B SaaS with ARR-linked vesting</span></div>
                    </a>
                    <a href="/esop-restructuring-underwater-options/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Restructuring</strong><span>Down-round remediation + underwater</span></div>
                    </a>
                    <a href="/esop-valuation-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Valuation Services</strong><span>Rule 11UA DCF / NAV / CCA FMV</span></div>
                    </a>
                    <a href="/esop-accounting-ind-as-102/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Accounting Ind AS 102</strong><span>Black-Scholes share-based payment expense</span></div>
                    </a>
                    <a href="/esop-corporate-filings/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Corporate Filings</strong><span>MGT-14, PAS-3, MGT-7 retainer</span></div>
                    </a>
                    <a href="/startup-registration/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>DPIIT Startup Registration</strong><span>10-year founder ESOP exemption</span></div>
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
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 11 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 2 quarterly review (regulatory references stable; Income Tax Act 2025 transition tracked). Triggers for review: Rule 12 amendments to ESOP framework, Section 17(2)(vi) and Section 80-IAC tax timing clarifications, Section 80-IAC plus Section 192(2C) perquisite tax deferral period changes (currently 48 months; 60 months under Income Tax Act 2025 Section 392(3) read with Section 289(3) from 1 April 2026), Rule 11UA FMV methodology updates, DPIIT Notification GSR 127(E) 2019 startup recognition criteria changes, SEBI SBEB Regulations 2021 amendments for listed entities, Ind AS 102 guidance updates and ICAI Guidance Note on Accounting for Share-Based Payments revisions. Sources: Ministry of Corporate Affairs (mca.gov.in), Income Tax Department (incometax.gov.in), Startup India portal (startupindia.gov.in), ICAI publications (icai.org), SEBI (sebi.gov.in), CBDT notifications (incometaxindia.gov.in) and IBBI Registered Valuer practice notes.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>
<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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