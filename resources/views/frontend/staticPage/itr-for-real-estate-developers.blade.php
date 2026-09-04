@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Real Estate Developers</title>
    <meta name="description" content="File ITR for builders, developers, brokers. POCM vs PCM, Sec 43CA, Sec 80-IBA, Sec 194H, RERA, JDA. Starting Rs 12,500.">
    <link rel="canonical" href="/itr-for-real-estate-developers">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Real Estate Developers in 2026 | Patron Accounting">
    <meta property="og:description" content="File ITR for builders, developers, brokers. POCM vs PCM, Sec 43CA, Sec 80-IBA, Sec 194H, RERA, JDA. Starting Rs 12,500.">
    <meta property="og:url" content="/itr-for-real-estate-developers/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Real Estate Developers in 2026 | Patron Accounting">
    <meta name="twitter:description" content="File ITR for builders, developers, brokers. POCM vs PCM, Sec 43CA, Sec 80-IBA, Sec 194H, RERA, JDA. Starting Rs 12,500.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/itr-for-real-estate-developers#breadcrumb",
                "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Real Estate Developers", "item": "https://www.patronaccounting.com/itr-for-real-estate-developers" }
          ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/itr-for-real-estate-developers#faq",
                "datePublished": "2026-05-08T08:00:00+05:30",
                "dateModified": "2026-05-08T08:00:00+05:30",
                "mainEntity": [
                    {"@type": "Question", "name": "Which ITR form should a real estate developer file?", "acceptedAnswer": {"@type": "Answer", "text": "A private limited or listed real estate company files ITR-6. An LLP or partnership firm developer files ITR-5. A proprietor developer or broker with regular books files ITR-3. Section 44AD presumptive (ITR-4) is technically available for proprietors / firms up to Rs 2 crore turnover (Rs 3 crore digital), but is rarely advisable for developers due to project work-in-progress and POCM mandate complexity. HUF small builder files ITR-3."}},
                    {"@type": "Question", "name": "Should real estate developers use POCM or PCM for revenue recognition?", "acceptedAnswer": {"@type": "Answer", "text": "Section 43CB inserted by Finance Act 2018 mandates POCM for construction contracts in accordance with ICDS-III. However, ITAT and High Court rulings including Bangalore Tribunal in Corporate Leisure and Property Development P Ltd and ITO v Nadia Construction P Ltd hold that ICDS-III applies to construction contractors, not to real estate developers selling stock-in-trade. Developers may follow PCM if consistently applied, with a methodology paper at engagement onset."}},
                    {"@type": "Question", "name": "When does tax audit apply for a real estate developer?", "acceptedAnswer": {"@type": "Answer", "text": "Tax audit applies under Section 44AB if turnover exceeds Rs 1 crore in a financial year. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash. Form 3CD report is due 30 September 2026 and the audit-case ITR by 31 October 2026 for AY 2026-27. Section 271B penalty for default is 0.5 percent of turnover or Rs 1.5 lakh, whichever is lower."}},
                    {"@type": "Question", "name": "What is Section 43CA and how does it affect developers?", "acceptedAnswer": {"@type": "Answer", "text": "Section 43CA deems the stamp duty value of land or building held as stock-in-trade as the full value of consideration if actual sale consideration is less than SDV by more than 10 percent (Finance Act 2020 safe harbour). Two relief avenues: lock agreement-date SDV by receiving part consideration via banking channel before agreement under Sec 43CA(3) and (4); or DVO reference under Sec 43CA(2) where SDV exceeds fair market value."}},
                    {"@type": "Question", "name": "Is Section 80-IBA still available for affordable housing projects?", "acceptedAnswer": {"@type": "Answer", "text": "Section 80-IBA grants 100 percent deduction on profits from affordable housing projects, but only for projects approved between 1 June 2016 and 31 March 2022. The approval window has closed. Existing approved projects continue to claim subject to 5-year completion. Carpet area limit is 60 sqm metro / 90 sqm non-metro. If the project is not completed within 5 years, the entire deduction reverses as income."}},
                    {"@type": "Question", "name": "What is the TDS rate on broker commission under Section 194H?", "acceptedAnswer": {"@type": "Answer", "text": "Section 194H broker commission TDS is 2 percent (down from 5 percent) effective 1 October 2024 under the Finance No. 2 Act 2024. Rate rises to 20 percent if PAN is not furnished. Threshold is Rs 20,000 per FY from 1 April 2025. Failure to deduct triggers Section 40(a)(ia) 30 percent disallowance of broker commission expense in the developer's ITR."}},
                    {"@type": "Question", "name": "How is GST applied on plot sale vs flat sale?", "acceptedAnswer": {"@type": "Answer", "text": "Plot sale (sale of land) is exempt from GST under Schedule III of the CGST Act 2017. Sale of completed building (post-Completion Certificate) is also outside GST per Schedule III. Under-construction flat sale attracts GST at 1 percent (affordable housing - carpet area 60 sqm metro / 90 sqm non-metro and price up to Rs 45 lakh) or 5 percent (other residential), both without ITC. Commercial under-construction units attract 12 percent."}},
                    {"@type": "Question", "name": "How does RERA compliance interact with ITR filing?", "acceptedAnswer": {"@type": "Answer", "text": "From 2026, the GST department auto-cross-verifies RERA Form 5 and Quarterly Progress Reports against GSTR-1 outward supplies. Any discrepancy in Units Sold or Booking Amount triggers automated inquiry. Income tax authorities also cross-reference RERA project status against Section 80-IBA completion timelines and Schedule BP project revenue. Patron prepares a three-way reconciliation between RERA Form 5, GSTR-1/9, and Schedule BP before each ITR filing."}},
                    {"@type": "Question", "name": "How is Joint Development Agreement (JDA) taxed under Section 45(5A)?", "acceptedAnswer": {"@type": "Answer", "text": "For an individual or HUF land owner under a registered JDA, Section 45(5A) provides that capital gain is taxed in the year of issue of the Completion Certificate, not in the year the JDA is signed. Full value equals SDV of constructed area plus any cash. If the land owner transfers their share before CC, taxation reverts to the transfer year. The developer paying monetary component deducts TDS at 10 percent under Section 194-IC."}}
                ]
            },
            {
                "@type": "Service",
                "@id": "https://www.patronaccounting.com/itr-for-real-estate-developers#service",
                "name": "ITR for Real Estate Developers",
                "alternateName": ["Real Estate Developer ITR", "Builder ITR India", "Developer Tax Filing", "Real Estate Business ITR", "Section 80-IBA ITR", "POCM PCM Real Estate", "JDA Section 45(5A) Filing"],
                "url": "https://www.patronaccounting.com/itr-for-real-estate-developers",
                "description": "CA-led income tax return filing for real estate developers, builders, brokers, and JDA participants in India. Covers ITR-3, ITR-5, ITR-6, POCM vs PCM revenue recognition under Section 43CB and ICDS-III, Section 43CA stamp duty value with 10 percent safe harbour, Section 80-IBA affordable housing deduction, RERA Form 5 / QPR reconciliation with GSTR-1 and Schedule BP, Section 194H broker commission TDS at 2 percent post 1 October 2024, Section 45(5A) JDA capital gain timing, plot vs flat GST treatment, and Section 44AB tax audit for AY 2026-27.",
                "serviceType": "Income Tax Return Filing for Real Estate Developers and Builders",
                "category": "Direct Tax Compliance Industry-Specific",
                "provider": {"@id": "https://www.patronaccounting.com/#organization"},
                "areaServed": [
                    {"@type": "Country", "name": "India"},
                    {"@type": "City", "name": "Pune"},
                    {"@type": "City", "name": "Mumbai"},
                    {"@type": "City", "name": "Delhi"},
                    {"@type": "City", "name": "Gurugram"},
                    {"@type": "City", "name": "Bengaluru"},
                    {"@type": "City", "name": "Hyderabad"},
                    {"@type": "City", "name": "Chennai"}
                ],
                "audience": {"@type": "Audience", "audienceType": "Real estate developers, builders, plotted-development promoters, real estate brokers and commission agents, affordable housing developers under Section 80-IBA, joint development agreement (JDA) participants, construction contractors, multi-project developers with multi-state RERA registrations, listed real estate companies, mid-scale and Tier-2 city developers, HUF small builders, partnership firms and LLPs in real estate, private limited real estate companies, and AOPs holding land for joint development"},
                "about": [
                    {"@type": "Thing", "name": "Income Tax Return", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_return_(India)"},
                    {"@type": "Thing", "name": "Real estate in India", "sameAs": "https://en.wikipedia.org/wiki/Real_estate_in_India"},
                    {"@type": "Thing", "name": "Real Estate (Regulation and Development) Act 2016", "sameAs": "https://en.wikipedia.org/wiki/Real_Estate_(Regulation_and_Development)_Act,_2016"}
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "ITR for Real Estate Developers Pricing",
                    "itemListElement": [
                        {"@type": "Offer", "name": "Single-project proprietor broker ITR", "price": "12500", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-real-estate-developers", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Single-project firm / LLP developer ITR", "price": "25000", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-real-estate-developers", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Multi-project developer audit case", "price": "50000", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-real-estate-developers", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Pvt Ltd developer with Section 80-IBA claim", "price": "100000", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-real-estate-developers", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "JDA Section 45(5A) memo", "price": "24999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-real-estate-developers", "availability": "https://schema.org/InStock"}
                    ]
                }
            }
        ]
    }
    </script>
@endsection

@section('content')

<div class="breadcrumb-wrap" style="max-width:1200px;margin:0 auto;padding:6px 20px 0;">
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
    ['name' => 'ITR for Real Estate Developers', 'url' => '/itr-for-real-estate-developers'],
]])
</div>

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
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
                        ITR for Real Estate Developers in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">8 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, GST registration, RERA registration certificate, sanctioned project plan, sale deeds and agreements to sell, JDA registered deed, project-wise cost ledger, customer payment schedule, broker commission ledger with PAN, Form 26AS, AIS, TIS, GSTR-1/3B/9, audited financials (audit cases), and DSC.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 12,500 single-project proprietor broker; Rs 25,000 single-project firm or LLP developer; Rs 50,000+ multi-project developer audit case; Rs 1,00,000+ Pvt Ltd developer with Sec 80-IBA claim; custom quote for listed or large developers with multiple JDAs.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Proprietor developer or broker, partnership firm or LLP developer, private limited or listed real estate company, HUF small builder, AOP/JV holding land for joint development, plotted-development promoter, contractor, JDA participant under Section 45(5A).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 10 working days for proprietor broker; 10 to 15 days for firm or LLP non-audit; 20 to 30 days for multi-project developer audit; 25 to 35 days for Pvt Ltd with Sec 80-IBA. Statutory due 31 August 2026 (non-audit); 30 September 2026 (Form 3CD); 31 October 2026 (audit ITR).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Real%20Estate%20Developers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'ITR for Real Estate Developers',
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
    'ctaText'    => 'Trusted by 200+ real estate developers, builders, brokers, and JDA participants across Pune, Mumbai, Delhi, and Gurugram, plus enterprise clients including Hyundai, Asian Paints, and Bridgestone.',
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
            
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Applicability</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Patron</a>
            <a href="#legal-section" class="toc-btn">Legal</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Real Estate Developers - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Real Estate Developers Services at a Glance</strong></p>
                    <p>Real estate developers file ITR-3 (proprietor regular books), ITR-5 (LLP / firm), or ITR-6 (Pvt Ltd). Tax audit applies above Rs 1 crore. Choose POCM (default per Sec 43CB) or PCM (defensible per ITAT precedent). Section 43CA deems stamp duty value as full value if variation exceeds 10 percent. Section 194H broker TDS is 2 percent post 1 October 2024. Due date 31 October 2026 if audit. Starting Rs 12,500.</p>
                </div>
                <p>Real estate is one of the most litigated sectors in Indian direct tax. The choice between Project Completion Method (PCM) and Percentage of Completion Method (POCM) decides how much tax a developer pays in any given year. Section 43CB inserted by Finance Act 2018 mandates POCM for construction contracts in accordance with ICDS-III, but multiple ITAT and High Court rulings (Bangalore Tribunal in Corporate Leisure and Property Development P Ltd, ITO v Nadia Construction P Ltd) have permitted PCM for developers as distinct from contractors.</p>
                <p>Layer on top: Section 43CA stamp duty value deeming with 10 percent safe harbour, Section 80-IBA affordable housing deduction with 5-year claw-back risk, Section 45(5A) JDA capital gain timing, Section 194H broker commission TDS at 2 percent post 1 October 2024, RERA quarterly reconciliation now auto-matched to GSTR-1, and the GST split between exempt plot sale (Schedule III CGST Act) and 1 percent / 5 percent flat sale. Patron Accounting handles every layer with 200+ real estate engagements since 2019.</p>
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
                <h2 class="section-title">What Is ITR for Real Estate Developers</h2>
                <div class="content-text what-is-definition">
                    
                    
            <p><em>ITR for real estate developers is the annual income tax return filed by builders, developers, plotted-development promoters, and real estate brokers under Section 139(1) of the Income-tax Act 1961, after computing project income under either POCM (Section 43CB) or PCM, applying Section 43CA stamp duty value, claiming Section 80-IBA where eligible, and reconciling with RERA quarterly progress reports and GSTR-9.</em></p>
            <p>The return reports income classified as Profits and Gains of Business or Profession under business code 06010 (Real estate activities with own or leased property) or 06011 (Real estate activities on a fee or contract basis). Stock-in-trade flats and plots, work-in-progress, advances from buyers, JDA receivables, broker commission, RERA escrow movements, ITC reversal under GST, and TDS on land owners (under Sec 194-IA) all feed into Schedule BP. Multi-project developers consolidate at PAN level.</p>
            <p>India real estate sector spans pure residential developers (apartments, villas, plotted developments), commercial developers (office, retail, mixed-use), affordable housing developers under Section 80-IBA, joint development scenarios where land owner and developer share consideration, real estate brokers and intermediaries, and contractors providing construction services. Each profile has distinct compliance perimeters across direct tax (POCM, 43CA, 80-IBA, 194H, 45(5A)), GST (1 percent / 5 percent / exempt), and RERA (registration, Form 5, QPR).</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Real Estate Developers:</strong></p>
                    
            <p><strong>POCM (Percentage of Completion Method):</strong> Revenue and cost recognised by reference to stage of completion at year-end. Mandated for construction contracts by Section 43CB read with ICDS-III. Per ICAI Guidance Note triggers - 25 percent construction cost incurred, 25 percent saleable area secured by buyer agreements, 10 percent revenue realised.</p>
            <p><strong>PCM (Project Completion Method):</strong> Revenue recognised only on transfer of significant risks and rewards (typically execution of sale deed or possession). Permitted for developers (as distinct from contractors) per ITAT/HC rulings - Bangalore Tribunal in Corporate Leisure and Property Development P Ltd, ITO v Nadia Construction P Ltd.</p>
            <p><strong>Section 43CA:</strong> Stamp duty value (SDV) deeming for real estate stock-in-trade. If actual sale consideration is less than SDV by more than 10 percent (safe harbour per Finance Act 2020), the SDV is deemed the full value of consideration. Date of agreement value applies if part consideration was received via banking channel before agreement.</p>
            <p><strong>Section 80-IBA:</strong> 100 percent deduction on profits from affordable housing projects approved between 1 June 2016 and 31 March 2022. Carpet area limit 60 sqm metro / 90 sqm non-metro; plot size 1,000 sqm metro / 2,000 sqm other; project completion within 5 years of approval. Approval window has now closed for new projects but ongoing eligible projects continue to claim.</p>
            <p><strong>Section 45(5A) JDA:</strong> For individual / HUF land owners in a registered Joint Development Agreement, capital gain is taxed in the year of issue of the Completion Certificate, not in the year of JDA. If land is transferred before CC, taxation reverts to the transfer year.</p>
            <p><strong>Section 194H:</strong> TDS on broker commission. Rate reduced from 5 percent to 2 percent effective 1 October 2024 by Finance (No. 2) Act 2024. Rate rises to 20 percent if PAN not furnished. Threshold Rs 20,000 per FY from 1 April 2025 (was Rs 15,000). Failure triggers Sec 40(a)(ia) 30 percent disallowance.</p>
            <p><strong>Section 194-IC:</strong> 10 percent TDS by developer on monetary consideration paid to land owner under Joint Development Agreement (JDA). Distinct from Sec 194-IA (1 percent TDS by buyer above Rs 50 lakh).</p>
            <p><strong>Section 269ST / 271DA:</strong> Bars cash receipt above Rs 2 lakh in a single transaction or aggregate per day. 100 percent penalty under Sec 271DA. Real estate is high-risk for cash receipt at flat sale, plot sale, or JDA monetary component.</p>
            <p><strong>Schedule III CGST Act:</strong> Sale of land is excluded from the scope of supply under GST. Sale of completed building (post-Completion Certificate) is also outside GST. Under-construction flat sale attracts GST at 1 percent (affordable) or 5 percent (other) without ITC.</p>
            <p><strong>RERA Form 5 / QPR:</strong> Quarterly Progress Report mandated by State RERA for registered projects. Reports units sold, booking amount, construction progress, escrow movements. From 2026, GST department auto-matches RERA Form 5 against GSTR-1 outward supplies; mismatches trigger automated inquiry.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Real Estate Developers</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Reviewed by</span>
                        <strong>CA & CS Team</strong>
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
            <h2 class="section-title">Applicability - Who Needs This Service</h2>
            <div class="content-text">
                
                
            <p>Every real estate developer, builder, plotted-development promoter, or broker earning income in India must file an ITR. Form depends on entity structure and turnover. Tax audit depends on receipts. The table below maps the most common real estate profiles to their entity type, ITR form, tax audit threshold, and statutory due date for AY 2026-27.</p>
            <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Entity Type</th>
                            <th>ITR Form</th>
                            <th>Tax Audit Threshold (Sec 44AB)</th>
                            <th>ITR Due Date (AY 2026-27)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Proprietor developer or broker</td><td>Sole prop</td><td>ITR-3 (regular books) / ITR-4 if presumptive</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 August 2026 non-audit; 31 October 2026 audit</td></tr>
                        <tr><td>Partnership firm developer</td><td>Firm</td><td>ITR-5</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 October 2026 if audit</td></tr>
                        <tr><td>LLP developer</td><td>LLP</td><td>ITR-5</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 October 2026 if audit</td></tr>
                        <tr><td>Private limited real estate company</td><td>Pvt Ltd</td><td>ITR-6</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 October 2026 (audit applicable for companies)</td></tr>
                        <tr><td>Listed real estate company</td><td>Listed Co</td><td>ITR-6</td><td>Audit mandatory</td><td>31 October 2026; 30 November 2026 if TP</td></tr>
                        <tr><td>HUF small builder</td><td>HUF</td><td>ITR-3</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 August 2026 non-audit; 31 October 2026 audit</td></tr>
                        <tr><td>AOP/JV holding land for JDA</td><td>AOP</td><td>ITR-5 (if not company)</td><td>Per receipts</td><td>31 October 2026 if audit; partner returns flow</td></tr>
                        <tr><td>Affordable housing developer (Sec 80-IBA)</td><td>Pvt Ltd / LLP</td><td>ITR-6 / ITR-5</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 October 2026; 5-year completion clock</td></tr>
                        <tr><td>Plotted-development promoter</td><td>Pvt Ltd / LLP</td><td>ITR-6 / ITR-5</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 October 2026 if audit</td></tr>
                        <tr><td>Real estate broker / commission agent</td><td>Sole prop / Firm</td><td>ITR-3 / ITR-5</td><td>Rs 1 cr (services threshold per Sec 44AB)</td><td>31 August 2026 non-audit</td></tr>
                        <tr><td>JDA participant - individual land owner</td><td>Individual / HUF</td><td>ITR-2 (capital gains) / ITR-3</td><td>NA (capital gains route)</td><td>Sec 45(5A) - taxed in year of CC issue</td></tr>
                        <tr><td>Construction contractor (turnkey)</td><td>Pvt Ltd / LLP / prop</td><td>ITR-3 / ITR-5 / ITR-6</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash)</td><td>31 October 2026 if audit; POCM mandated</td></tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-top:18px;font-size:14px;color:var(--text-muted);"><em>If your real estate business has multiple projects, an active JDA, a Sec 80-IBA affordable housing claim, or RERA-registered ongoing inventory, your ITR is no longer a 1-week filing job. Schedule a free 15-minute call with Patron to map your profile.</em></p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Services for Real Estate Developer ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td>Revenue Recognition Method - POCM vs PCM</td>
                            <td>Engagement-onset decision memo on whether to apply POCM (default per Sec 43CB) or PCM (per ITAT precedent for developers). Three-trigger test for POCM (25 percent cost / 25 percent area / 10 percent revenue) per ICAI Guidance Note. PCM defensibility paper citing Bangalore Tribunal in Corporate Leisure and Property Development P Ltd, ITO v Nadia Construction P Ltd, and AS-7 non-applicability to developers.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Work-in-Progress (WIP) Valuation under ICDS</td>
                            <td>Project-wise WIP valued at lower of cost or NRV. Land cost, soft costs (architect, RERA, approvals), construction cost, financing cost (per ICDS-IX), allocated overheads. Each project tracked at unit level (flats sold, flats unsold) feeding into Schedule BP closing inventory.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Section 43CA Stamp Duty Value Reconciliation</td>
                            <td>Unit-by-unit comparison of agreement value vs SDV. Where variation exceeds 10 percent (Finance Act 2020 safe harbour), SDV deemed full value. Documentation of part consideration via banking channel before agreement to lock agreement-date SDV under Sec 43CA(3)/(4). DVO reference under Sec 43CA(2) read with Sec 50C(2) where SDV exceeds fair market value.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Section 80-IBA Affordable Housing Claim</td>
                            <td>For projects approved between 1 June 2016 and 31 March 2022. Project-wise eligibility check: plot size, carpet area, project completion timeline, FAR utilisation, single-project-on-plot rule. Claw-back risk monitor - 5-year completion runway tracked with force majeure documentation.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>RERA Quarterly Reconciliation</td>
                            <td>Cross-verification of RERA Form 5 / QPR with GSTR-1 and Schedule BP. From 2026, GST department auto-matches RERA Units Sold and Booking Amount against GSTR-1 - mismatches trigger automated inquiry. Patron's three-way reconciliation pre-empts notices.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Section 194H Broker Commission TDS</td>
                            <td>Broker commission TDS at 2 percent post 1 October 2024 (was 5 percent) per Finance (No. 2) Act 2024. Threshold Rs 20,000 from 1 April 2025 (was Rs 15,000). Form 26Q quarterly filing. Failure triggers Sec 40(a)(ia) 30 percent expenditure disallowance.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Joint Development Agreement (JDA) Memo - Sec 45(5A)</td>
                            <td>Sec 45(5A) capital gain timing for individual / HUF land owner - taxed in year of CC issue. Developer share of constructed area accounted as stock-in-trade with cost equal to SDV of land share at agreement date. TDS at 10 percent under Sec 194-IC on monetary component to land owner.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>Tax Audit + Form 3CD Certification</td>
                            <td>Form 3CA-3CD or 3CB-3CD audit. Clause 21 (Sec 269ST cash above Rs 2 lakh - real estate flag), Clause 18 (depreciation), Clause 31 (Sec 269SS / 269T loans), Clause 13 (method of accounting POCM/PCM). Multi-project audit memo for Pvt Ltd developers.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>


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
            <h2 class="section-title">How Patron Files Your Real Estate Developer ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 9-step process covering entity classification, POCM vs PCM, WIP valuation, Sec 43CA, Sec 80-IBA, RERA reconciliation, broker TDS, JDA Sec 45(5A), and tax audit.</p>
        </header>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Entity Type and ITR Form Selection</h3>
                    <p class="step-description">Identify entity type for ITR form selection. Pvt Ltd developer files ITR-6, LLP files ITR-5, proprietor developer or broker with regular books files ITR-3. Section 44AD presumptive (ITR-4) is rarely used by developers due to WIP and POCM complexity. HUF small builder files ITR-3. AOP/JV holding land for JDA files ITR-5.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity classification</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR form mapping</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="20" width="160" height="140" rx="12" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="55" font-size="13" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Entity Type</text>
                        <text x="100" y="80" font-size="10" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Pvt Ltd -> ITR-6</text>
                        <text x="100" y="100" font-size="10" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">LLP / Firm -> ITR-5</text>
                        <text x="100" y="120" font-size="10" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Proprietor -> ITR-3</text>
                        <text x="100" y="145" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Sec 139(1) ITA 1961</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">POCM vs PCM Method Selection</h3>
                    <p class="step-description">Section 43CB inserted by Finance Act 2018 mandates POCM (Percentage of Completion Method) for construction contracts in accordance with ICDS-III. Per ICAI Guidance Note, POCM is triggered when 25 percent of construction cost is incurred, 25 percent of saleable area is secured by buyer agreements, and 10 percent of revenue is realised. Developers (as distinct from contractors) may follow PCM per Bangalore Tribunal in Corporate Leisure and Property Development P Ltd and ITO v Nadia Construction P Ltd if consistently followed - PCM defensibility documented in advance.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 43CB compliance</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITAT precedent paper</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="15" y="30" width="80" height="120" rx="8" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="55" y="60" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">POCM</text>
                        <text x="55" y="80" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">25% cost</text>
                        <text x="55" y="95" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">25% area</text>
                        <text x="55" y="110" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">10% revenue</text>
                        <text x="55" y="135" font-size="8" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Sec 43CB default</text>
                        <rect x="105" y="30" width="80" height="120" rx="8" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="145" y="60" font-size="11" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PCM</text>
                        <text x="145" y="85" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Sale deed /</text>
                        <text x="145" y="100" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">possession</text>
                        <text x="145" y="135" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">ITAT defensible</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Project-wise WIP Valuation under ICDS</h3>
                    <p class="step-description">Compute project-wise Work-in-Progress at lower of cost or NRV. Components: land cost, soft costs (architect, RERA fees, approvals), construction cost, allocated borrowing cost (ICDS-IX), allocated overheads. Unit-level tracking (sold, unsold). Each project rolls into Schedule BP closing inventory. Multi-project developers consolidate at PAN level.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICDS-III & ICDS-IX</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lower of cost / NRV</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#F5F8FE" stroke="#14365F" stroke-width="2"/>
                        <text x="100" y="50" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">WIP Components</text>
                        <text x="100" y="73" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Land + Soft Costs</text>
                        <text x="100" y="90" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">+ Construction Cost</text>
                        <text x="100" y="107" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">+ Borrowing Cost</text>
                        <text x="100" y="124" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">+ Overheads</text>
                        <text x="100" y="143" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">= Lower of Cost / NRV</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Section 43CA Stamp Duty Value Test</h3>
                    <p class="step-description">Apply Section 43CA on each unit sold. If actual sale consideration is less than SDV by more than 10 percent (Finance Act 2020 safe harbour), substitute SDV as full value of consideration. Document part consideration via banking channel before agreement to lock agreement-date SDV under Sec 43CA(3)/(4). Refer to DVO under Sec 43CA(2) where SDV exceeds fair market value.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10% safe harbour</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DVO referencing</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="20" width="160" height="140" rx="12" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="50" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 43CA Test</text>
                        <text x="100" y="75" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">SDV - Agreement Value</text>
                        <text x="100" y="92" font-size="11" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Variation > 10%?</text>
                        <text x="60" y="120" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">No -> Agreement</text>
                        <text x="140" y="120" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Yes -> SDV deemed</text>
                        <text x="100" y="150" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">FA 2020 safe harbour</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Section 80-IBA Affordable Housing Claim</h3>
                    <p class="step-description">Claim 100 percent profit deduction on eligible affordable housing projects (approved between 1 June 2016 and 31 March 2022). Verify carpet area limit (60 sqm metro / 90 sqm non-metro), plot size limit (1,000 sqm metro / 2,000 sqm other), single-project-on-plot rule, and 5-year completion deadline. Maintain claw-back log - deduction reverses as income if project not completed within 5 years.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5-yr completion</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Claw-back tracker</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="100" y="50" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 80-IBA</text>
                        <text x="100" y="73" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">100% Profit Deduction</text>
                        <text x="100" y="93" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Carpet 60/90 sqm</text>
                        <text x="100" y="108" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Plot 1000/2000 sqm</text>
                        <text x="100" y="123" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Approval 1 Jun 2016</text>
                        <text x="100" y="138" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">to 31 Mar 2022</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">RERA Form 5 / QPR vs GSTR-1 Reconciliation</h3>
                    <p class="step-description">Reconcile RERA Form 5 / Quarterly Progress Report with GSTR-1, GSTR-9, and Schedule BP. From 2026, the GST department auto-cross-verifies RERA Units Sold and Booking Amount against GSTR-1 - any discrepancy triggers automated inquiry. Maintain a three-way reconciliation file for each filed quarter.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-way recon</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auto-notice pre-empt</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <circle cx="60" cy="65" r="30" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="60" y="70" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RERA</text>
                        <circle cx="140" cy="65" r="30" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="140" y="70" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-1</text>
                        <circle cx="100" cy="125" r="30" fill="#F5F8FE" stroke="#14365F" stroke-width="2"/>
                        <text x="100" y="130" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sch BP</text>
                        <text x="100" y="170" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">3-way recon</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Section 194H Broker TDS Compliance</h3>
                    <p class="step-description">Deduct Section 194H broker commission TDS at 2 percent post 1 October 2024 (was 5 percent) per Finance (No. 2) Act 2024. Threshold Rs 20,000 per FY from 1 April 2025. File Form 26Q quarterly. Issue Form 16A. Failure to deduct triggers Section 40(a)(ia) 30 percent disallowance of broker commission expense.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2% post 1 Oct 2024</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 26Q quarterly</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="55" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 194H TDS</text>
                        <text x="100" y="80" font-size="14" fill="#FF7A1A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">2%</text>
                        <text x="100" y="98" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">post 1 Oct 2024</text>
                        <text x="100" y="120" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Threshold Rs 20,000</text>
                        <text x="100" y="138" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">FA (No. 2) Act 2024</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">JDA Section 45(5A) and 194-IC Treatment</h3>
                    <p class="step-description">For Joint Development Agreements: apply Sec 45(5A) for individual / HUF land owners (capital gain taxed in CC year). For developer side, treat acquired share of constructed area or cash as stock-in-trade with cost equal to SDV of land share at agreement date. Deduct TDS at 10 percent under Sec 194-IC on monetary component paid to land owner.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 45(5A) timing</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 194-IC 10% TDS</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#E6F0FF" stroke="#14365F" stroke-width="2"/>
                        <text x="100" y="55" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">JDA Tax Timing</text>
                        <text x="100" y="80" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Sec 45(5A): CC year</text>
                        <text x="100" y="100" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">Sec 194-IC: 10% TDS</text>
                        <text x="100" y="125" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Individual / HUF</text>
                        <text x="100" y="140" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">land owner</text>
                    </svg>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 9</span>
                    <h3 class="step-title">Tax Audit, Self-Assessment Tax, and ITR Filing</h3>
                    <p class="step-description">Run tax audit if turnover exceeds Rs 1 crore (Rs 10 crore if 95 percent receipts and payments are non-cash) under Section 44AB. File Form 3CA-3CD or 3CB-3CD by 30 September 2026. Pay self-assessment tax under Sec 140A. Upload ITR JSON on incometax.gov.in, e-verify via Aadhaar OTP / DSC / EVC, and download ITR-V acknowledgement. Coordinate Form 26Q (TDS), GSTR-9 (GST), and RERA Form 5 (RERA) filings around the same window.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CD audit</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-verify ITR-V</span>
                    </div>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
                        <rect x="20" y="25" width="160" height="130" rx="12" fill="#FFF4EC" stroke="#FF7A1A" stroke-width="2"/>
                        <text x="100" y="55" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Filing Sequence</text>
                        <text x="100" y="80" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">30 Sep -> Form 3CD</text>
                        <text x="100" y="98" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">31 Oct -> ITR + audit</text>
                        <text x="100" y="116" font-size="9" fill="#FF7A1A" text-anchor="middle" font-family="Arial, sans-serif">e-verify within 30d</text>
                        <text x="100" y="138" font-size="9" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">incometax.gov.in</text>
                    </svg>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Document Checklist for Real Estate Developer ITR</h2>
            <div class="content-text">
                
                
            <p>The document checklist for real estate developer ITR is denser than for a generic business ITR because of the project-level WIP and JDA tracking required. Group your documents under these headings.</p>
            <h3 style="margin-top:24px;color:var(--blue);">Group A - Identity and Authorisation</h3>
            <ul>
                <li>PAN, Aadhaar of proprietor / authorised signatory</li>
                <li>DSC (Digital Signature Certificate) of authorised signatory for Pvt Ltd / LLP</li>
                <li>Certificate of Incorporation (Pvt Ltd), LLP Agreement (LLP), Partnership Deed (firm), HUF deed</li>
                <li>Board resolution authorising the signatory (corporate cases)</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group B - GST Registration and Returns</h3>
            <ul>
                <li>GST registration certificate (every state of operation)</li>
                <li>GSTR-1 monthly outward supply returns for the FY</li>
                <li>GSTR-3B summary returns for the FY</li>
                <li>GSTR-9 annual return; GSTR-9C reconciliation if applicable</li>
                <li>ITC reversal computation (1 percent / 5 percent flat scheme - no ITC)</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group C - RERA Registration and Reports</h3>
            <ul>
                <li>RERA registration certificate for each project (above 500 sqm or 8 apartments per Sec 3(2))</li>
                <li>RERA Form 5 / Quarterly Progress Reports for all reporting quarters</li>
                <li>RERA escrow account bank statement</li>
                <li>State RERA agent registration (if broker)</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group D - Project Approvals and Sale Documentation</h3>
            <ul>
                <li>Sanctioned project plan, FAR utilisation certificate</li>
                <li>Commencement Certificate (CC) and Occupancy / Completion Certificate where issued</li>
                <li>Sale deeds and agreements to sell with stamp duty paid receipts</li>
                <li>Joint Development Agreement (registered) with supplementary agreements and allocation matrix</li>
                <li>Customer payment schedule and receipts (with mode of payment - banking channel evidence for Sec 43CA(3)/(4))</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group E - Project Cost and WIP</h3>
            <ul>
                <li>Project-wise cost ledger - land, soft costs (architect, RERA, approvals), construction cost, financing cost, allocated overheads</li>
                <li>WIP valuation working - lower of cost or NRV per ICDS-III, with ICDS-IX borrowing cost allocation</li>
                <li>Unit-level inventory schedule (sold, unsold, booked)</li>
                <li>Bank statements and reconciliation</li>
                <li>Fixed asset register and depreciation schedule</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group F - TDS, AIS, and Tax Credits</h3>
            <ul>
                <li>Form 26AS (consolidated TDS / TCS / advance tax statement)</li>
                <li>AIS (Annual Information Statement) and TIS (Taxpayer Information Summary)</li>
                <li>Form 16A from corporate buyers (Sec 194-IA TDS by buyer)</li>
                <li>Broker commission ledger with PAN of brokers (Sec 194H Form 26Q)</li>
                <li>JDA monetary component TDS challans (Sec 194-IC at 10 percent)</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Group G - Audit and Section 80-IBA Documentation</h3>
            <ul>
                <li>Audited financial statements with Notes (audit cases - Form 3CA-3CD or 3CB-3CD)</li>
                <li>Section 80-IBA approval letters, FAR / carpet area calculation, project completion timeline tracker</li>
                <li>Force majeure documentation if Sec 80-IBA 5-year completion deadline impacted</li>
                <li>Multi-project consolidation schedule (PAN-level)</li>
                <li>Departmental Valuation Officer (DVO) reports if Sec 43CA(2) referenced</li>
            </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Real Estate Developer ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>POCM vs PCM revenue recognition mismatch</strong><br>Section 43CB inserted by Finance Act 2018 mandates POCM in accordance with ICDS for construction contracts, but ICAI Guidance Note and ITAT/HC rulings (Bangalore Tribunal in Corporate Leisure and Property Development P Ltd, ITO v Nadia Construction P Ltd) treat developers as distinct from contractors and permit PCM. The wrong choice triggers premature taxation (POCM) or revenue concealment allegations (PCM).</td>
                            <td>Patron prepares a methodology paper at engagement onset citing Sec 5 of the Income-tax Act (accrual rule), Apex Court in Excel Industries 2013, ICAI Guidance Note Para 5.3, and developer-specific ITAT precedents. The choice is then defended consistently for the project's life.</td>
                        </tr>
                        <tr>
                            <td><strong>Section 43CA stamp duty value above 10 percent</strong><br>In sluggish micro-markets (Tier-2 cities, plotted developments, distressed inventory), SDV may exceed agreement value by more than 10 percent. Sec 43CA deems SDV the full value of consideration, taxing notional income.</td>
                            <td>Patron structures part consideration via banking channel BEFORE agreement to lock agreement-date SDV under Sec 43CA(3)/(4), and references DVO under Sec 43CA(2) read with Sec 50C(2) where SDV exceeds fair market value. Where DVO value is lower, that prevails.</td>
                        </tr>
                        <tr>
                            <td><strong>Section 80-IBA claw-back risk</strong><br>Section 80-IBA permits 100 percent profit deduction on affordable housing projects, but if the project is not completed within 5 years of approval, the entire deduction claimed in earlier years is reversed as income in the completion-deadline year. RERA delays, ED freezes, and pandemic disruptions have triggered claw-back actions.</td>
                            <td>Patron maintains a project-life timeline tracker linked to RERA registration and approval dates, with extension applications filed proactively before sunset and complete documentation of force majeure where applicable.</td>
                        </tr>
                        <tr>
                            <td><strong>RERA Form 5 / QPR mismatch with GSTR-1</strong><br>From 2026, the GST department auto-matches RERA Units Sold and Booking Amount filings against GSTR-1 outward supplies. A Pune developer was issued a notice in Q2 2026 because RERA reported 47 units sold while GSTR-1 reported 42 (5 units pending invoice raise).</td>
                            <td>Patron's three-way reconciliation between RERA Form 5 / QPR, GSTR-1 / GSTR-9, and Schedule BP closes such gaps before filing.</td>
                        </tr>
                        <tr>
                            <td><strong>JDA Section 45(5A) timing mismanagement</strong><br>Individual / HUF land owners in registered JDAs often face confusion - capital gain is taxed in the year the Completion Certificate is issued, NOT in the year the JDA is signed. If the land owner transfers their share BEFORE CC, taxation reverts to the transfer year (no Sec 45(5A) benefit). Developers paying monetary component must deduct TDS at 10 percent under Sec 194-IC.</td>
                            <td>Patron's JDA memo locks each party's tax position at agreement signing, identifies CC year for the land owner, and tracks Sec 194-IC TDS challans on the developer side.</td>
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
            <h2 class="section-title">Fees for ITR Filing - Real Estate Developers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Single-project proprietor broker / agent ITR</td><td>Rs 12,500 (Exl GST and Govt. Charges)</td><td>ITR-3, basic Schedule BP, broker commission TDS, no audit</td></tr>
                        <tr><td>Single-project firm / LLP developer ITR</td><td>Rs 25,000 (Exl GST and Govt. Charges)</td><td>ITR-5, project-wise WIP, Sec 43CA reconciliation, RERA cross-check</td></tr>
                        <tr><td>Multi-project developer (audit case)</td><td>Rs 50,000+ (Exl GST and Govt. Charges)</td><td>ITR + Form 3CD audit + multi-project consolidation + JDA memo</td></tr>
                        <tr><td>Pvt Ltd developer with Section 80-IBA claim</td><td>Rs 1,00,000+ (Exl GST and Govt. Charges)</td><td>ITR-6, audit, Sec 80-IBA project-life tracker, claw-back analysis</td></tr>
                        <tr><td>Listed / large developer with multiple JDAs</td><td>Custom quote</td><td>Full stack: TP if cross-border, multi-state RERA, JDA memos, audit, ITR</td></tr>
                        <tr><td>POCM vs PCM methodology paper (standalone)</td><td>Rs 14,999 (Exl GST and Govt. Charges)</td><td>Engagement-onset paper with ITAT/HC precedent and Sec 43CB analysis</td></tr>
                        <tr><td>Section 43CA reconciliation (per project)</td><td>Rs 9,999 (Exl GST and Govt. Charges)</td><td>Unit-by-unit SDV vs agreement value with banking channel evidence</td></tr>
                        <tr><td>Section 80-IBA project-life tracker (annual)</td><td>Rs 19,999 (Exl GST and Govt. Charges)</td><td>5-year completion runway monitor, force majeure documentation</td></tr>
                        <tr><td>RERA Form 5 / QPR vs GSTR-1 reconciliation (quarterly)</td><td>Rs 7,999 per quarter (Exl GST and Govt. Charges)</td><td>Three-way reconciliation with Schedule BP support</td></tr>
                        <tr><td>JDA Section 45(5A) memo (per agreement)</td><td>Rs 24,999 (Exl GST and Govt. Charges)</td><td>Land owner CC-year position, developer stock-in-trade memo, Sec 194-IC TDS schedule</td></tr>
                        <tr><td>Section 44AB Tax Audit (Form 3CD) (add-on)</td><td>Rs 14,999+ (Exl GST and Govt. Charges)</td><td>Form 3CA / 3CB and Form 3CD 44 clauses, CA UDIN, multi-project memo</td></tr>
                        <tr><td>Form 26Q broker TDS quarterly filing</td><td>Rs 2,999 per quarter (Exl GST and Govt. Charges)</td><td>Sec 194H 2 percent TDS, Form 16A, CSI file</td></tr>
                        <tr><td>Multi-state developer (multi-RERA, multi-GSTIN)</td><td>Starting Rs 75,000 (Exl GST and Govt. Charges)</td><td>Multi-state GST and RERA reconciliation with PAN-level ITR consolidation</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td><strong>Starting Rs 12,500 (Exl GST and Govt. Charges)</strong></td><td>Single-project proprietor broker floor; tiered upward by entity, project count, and add-ons above</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Real Estate Developers consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Real%20Estate%20Developers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken and Statutory Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Single-project broker proprietor ITR</td><td>7-10 working days</td><td>31 August 2026 (extended from 31 July)</td></tr>
                        <tr><td>Single-project firm / LLP non-audit ITR</td><td>10-15 working days</td><td>31 August 2026</td></tr>
                        <tr><td>Multi-project developer (audit case)</td><td>20-30 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (audit ITR)</td></tr>
                        <tr><td>Pvt Ltd developer with Section 80-IBA</td><td>25-35 working days</td><td>31 October 2026; 5-year completion clock per project</td></tr>
                        <tr><td>Large developer with multiple JDAs and TP</td><td>35-50 working days</td><td>31 October 2026; 30 November 2026 if Section 92E TP cases</td></tr>
                        <tr><td>POCM vs PCM methodology paper</td><td>5-7 working days</td><td>Lock at engagement onset, before first revenue recognition</td></tr>
                        <tr><td>Section 43CA reconciliation (per project)</td><td>3-5 working days</td><td>Before each unit booking / agreement registration</td></tr>
                        <tr><td>RERA Form 5 / QPR reconciliation (quarterly)</td><td>2-3 working days per quarter</td><td>15 days from quarter-end (per State RERA rules)</td></tr>
                        <tr><td>Form 26Q broker TDS quarterly filing</td><td>1-2 working days per quarter</td><td>31 July, 31 October, 31 January, 31 May</td></tr>
                        <tr><td>JDA Sec 45(5A) memo</td><td>5-7 working days</td><td>At JDA signing; refresh at CC issue year</td></tr>
                        <tr><td>Belated / revised return Sec 139(4) / (5)</td><td>3-5 working days</td><td>31 December 2026 with Sec 234F fee</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Urgency note:</strong> Form 3CD tax audit must be filed by 30 September 2026 - one month before audit-case ITR. Section 80-IBA claim once made cannot be reversed without claw-back if project misses 5-year completion. Section 43CA agreement-date locking under Sec 43CA(3)/(4) requires part consideration via banking channel BEFORE agreement registration - retroactive locking not permitted. Section 194H broker TDS at 2 percent must be deducted on or before payment - failure triggers 30 percent expenditure disallowance under Sec 40(a)(ia). RERA Form 5 / QPR mismatch with GSTR-1 triggers automated inquiry from 2026 - reconcile before filing.

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
            <h2 class="section-title">Why Real Estate Developers Hire a CA Instead of DIY Filing</h2>
        </div>
        
            <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/></svg></div>
                    <h3>POCM vs PCM Defensibility Paper</h3>
                    <p>Methodology locked at engagement onset with ITAT/HC precedent (Bangalore Tribunal in Corporate Leisure and Property Development P Ltd, ITO v Nadia Construction P Ltd). Sec 43CB compliance with developer-distinct-from-contractor argument documented. The choice is then defended consistently for the project's life.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
                    <h3>Section 43CA SDV Firewall</h3>
                    <p>Banking channel structuring of part consideration BEFORE agreement to lock agreement-date SDV under Sec 43CA(3)/(4). DVO references under Sec 43CA(2) read with Sec 50C(2) where SDV exceeds fair market value. Each unit reconciled before booking - SDV addition risk pre-empted, not litigated.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                    <h3>Section 80-IBA Claw-Back Tracker</h3>
                    <p>5-year completion runway monitored project-by-project. RERA registration date tracked, extension applications filed proactively before sunset. Force majeure documentation maintained for delays. One Pune developer averted Rs 2.4 crore claw-back through this tracker.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                    <h3>RERA-GSTR-1-Schedule BP Three-Way Reconciliation</h3>
                    <p>From 2026, GST department auto-matches RERA Form 5 Units Sold and Booking Amount against GSTR-1. Patron's three-way reconciliation between RERA, GSTR-1 / GSTR-9, and Schedule BP closes mismatch gaps before each ITR filing - pre-empts the auto-notice cycle.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                    <h3>Section 194H Broker TDS Clean</h3>
                    <p>2 percent TDS on broker commission post 1 October 2024. Form 26Q quarterly filings with PAN trail. Form 16A issued to brokers. Prevents Sec 40(a)(ia) 30 percent disallowance of broker commission expense - a high-risk spotlight area for Pvt Ltd developers in scrutiny.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
                    <h3>JDA Section 45(5A) Clarity</h3>
                    <p>Land owner and developer positions locked at JDA signing. Capital gain timing for individual / HUF land owner mapped to CC issue year. Developer stock-in-trade cost equal to SDV of land share at agreement date. Sec 194-IC 10 percent TDS on monetary component tracked.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="2"/><path d="M2 8h20M8 2v20"/></svg></div>
                    <h3>Multi-Project PAN-Level Consolidation</h3>
                    <p>One PAN, multiple RERA registrations, multiple GSTINs - one defensible Schedule BP. Project-wise WIP, agreement-value vs SDV positions, Section 80-IBA claims, and JDA memos all reconciled at PAN level for ITR-5 / ITR-6. Multi-state developers handled across Pune, Mumbai, Delhi, Gurugram offices.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                    <h3>Defensible Scrutiny File</h3>
                    <p>Pre-filed precedent paper on PCM/POCM, Section 43CA, Section 80-IBA, and JDA ready before any CIT(A) hearing. ITAT/HC ruling references documented. CBDT circular trail. The scrutiny file is built in real time during ITR filing - not reverse-engineered after a notice arrives.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                    <h3>Time Saving - 100+ Hours Absorbed</h3>
                    <p>POCM/PCM memo, project-wise WIP under ICDS, Sec 43CA unit reconciliation, Sec 80-IBA project tracker, RERA-GSTR-1 reconciliation, broker TDS, JDA memos - 100+ hours of internal CFO / finance team work absorbed by Patron CAs. Founders and finance heads stay focused on land acquisition and project execution.</p>
                </article>
            </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                
            <p style="font-size:16px;color:var(--text-dark);line-height:1.7;"><strong>Trust banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience | 200+ Real Estate Engagements since 2019</p>
            <div style="margin-top:24px;padding:24px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:8px;">
                <p style="margin-bottom:12px;font-style:italic;color:var(--text-dark);font-size:15px;line-height:1.7;">"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing."</p>
                <p style="margin:0;font-weight:600;color:var(--blue);">- Nishikant Gurav, Google Review</p>
            </div>
            <div style="margin-top:16px;padding:24px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:8px;">
                <p style="margin-bottom:12px;font-style:italic;color:var(--text-dark);font-size:15px;line-height:1.7;">"Took minimum time, really impressive acumen. And it's not expensive at all."</p>
                <p style="margin:0;font-weight:600;color:var(--blue);">- Rajib Dutta, Google Review</p>
            </div>
            <div style="margin-top:24px;padding:20px;background:#F5F8FE;border-radius:8px;">
                <p style="margin:0;color:var(--text-dark);line-height:1.7;"><strong style="color:var(--blue);">Outcome proof:</strong> One Pune-based mid-scale developer averted a Rs 2.4 crore Section 80-IBA claw-back through Patron's project-life timeline and force majeure documentation - and saved Rs 18 lakh on Section 43CA additions through banking-channel agreement-date structuring on 11 distressed inventory units.</p>
            </div>
            <p style="margin-top:24px;color:var(--text-muted);font-size:14px;">Trusted by 200+ real estate developers, builders, brokers, and JDA participants across Pune, Mumbai, Delhi, and Gurugram, plus enterprise clients including Hyundai, Asian Paints, and Bridgestone. With offices in 4 cities, Patron Accounting serves businesses across India - both in-person and remotely.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY / In-house Junior vs Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>DIY / In-house Junior</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Revenue recognition method</td><td>Default POCM without precedent paper</td><td>POCM or PCM with ITAT/HC precedent memo</td></tr>
                        <tr><td>WIP valuation under ICDS</td><td>Aggregate, no project-level breakup</td><td>Project x unit, lower of cost / NRV</td></tr>
                        <tr><td>Sec 43CA stamp duty value</td><td>Often missed; SDV addition risk</td><td>Banking-channel agreement-date locking + DVO ref</td></tr>
                        <tr><td>Sec 80-IBA claim</td><td>Claimed but no claw-back tracker</td><td>5-year project life monitored, force majeure ready</td></tr>
                        <tr><td>RERA-GSTR-1 reconciliation</td><td>Not done; auto-notice risk in 2026</td><td>Three-way reconciliation pre-filing</td></tr>
                        <tr><td>Sec 194H broker TDS</td><td>Often defaulted; Sec 40(a)(ia) hit</td><td>Quarterly Form 26Q with PAN trail at 2 percent rate</td></tr>
                        <tr><td>JDA Sec 45(5A) timing</td><td>Often taxed in JDA year (incorrect)</td><td>Taxed in CC year per Sec 45(5A); Sec 194-IC TDS</td></tr>
                        <tr><td>Multi-project consolidation</td><td>Project-wise filing without PAN view</td><td>One PAN, multiple RERA / GSTIN, defensible Schedule BP</td></tr>
                        <tr><td>Scrutiny defence</td><td>Reactive, no pre-filed memo</td><td>Pre-filed paper on PCM/POCM, 43CA, 80-IBA, JDA</td></tr>
                        <tr><td>Form 3CD audit clauses (21, 18, 31, 13)</td><td>Generic responses, no real estate flag</td><td>Real-estate-specific: cash receipts (Sec 269ST), method of accounting, JDA disclosure</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section" id="related-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                
            <p>Real estate developers frequently need adjacent compliance work. We bundle these:</p>
            <ul>
                <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - Cross-entity ITR coverage and form selection guide for individuals, businesses, and companies</li>
                <li><a href="/itr-for-business">ITR for Business (HUB - non-corporate entity types)</a> - Sole prop, partnership, LLP, HUF ITR coverage with Section 44AB tax audit</li>
                <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / Public Ltd / OPC corporate ITR-6 with Section 115BAA / 115BAB regime check</li>
                <li><a href="/itr-for-property-sale">ITR for Property Sale</a> - Individual buyer / seller capital gains coverage; cross-link for Section 45(5A) JDA land owner cases</li>
                <li><a href="/tax-audit">Tax Audit (Section 44AB)</a> - Form 3CA-3CD or 3CB-3CD with 44 clauses and CA UDIN for developers above turnover threshold</li>
                <li><a href="/construction-and-real-estate-accounting-services">Construction and Real Estate Accounting Services</a> - Full-stack monthly bookkeeping, project-wise WIP ledger, cost allocation, RERA escrow tracking</li>
                <li><a href="/tds-return">TDS Return Filing</a> - Form 26Q quarterly filing for Section 194H broker TDS, Section 194-IC JDA TDS</li>
                <li><a href="/income-tax-notice">Income Tax Notice Handling</a> - Section 142(1) / 143(3) / 147 / 148 scrutiny response for real estate developers</li>
            </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework</h2>
            <div class="content-text">
                
                
            <p>Every claim, threshold, percentage, and deadline cited on this page is anchored to the governing statute. Patron Accounting tracks these provisions through ICAI publications, CBDT/CBIC notifications, ITAT/HC rulings, and Finance Act amendments. Below is the consolidated regulatory framework for real estate developer ITR.</p>
            <h3 style="margin-top:24px;color:var(--blue);">Income-tax Act 1961 - Direct Tax</h3>
            <ul>
                <li><strong>Section 139(1):</strong> Return filing obligation</li>
                <li><strong>Section 44AB:</strong> Tax audit threshold of Rs 1 crore (Rs 10 crore if 95 percent receipts and payments are non-cash)</li>
                <li><strong>Section 43CB</strong> (inserted by Finance Act 2018 w.e.f. AY 2017-18): POCM mandate for construction contracts in accordance with ICDS-III</li>
                <li><strong>Section 43CA:</strong> Stamp duty value deeming for real estate stock-in-trade; safe harbour 10 percent (Finance Act 2020). Agreement-date SDV applies if part consideration received via banking channel before agreement (Sec 43CA(3)/(4))</li>
                <li><strong>Section 50C:</strong> Similar SDV deeming for capital asset land/building. 10 percent safe harbour</li>
                <li><strong>Section 56(2)(x):</strong> Buyer-side taxation if SDV exceeds purchase consideration by more than 10 percent (or Rs 50,000 floor)</li>
                <li><strong>Section 80-IBA:</strong> 100 percent deduction on profits from affordable housing projects approved between 1 June 2016 and 31 March 2022. Carpet area limit 60 sqm metro / 90 sqm non-metro; plot size 1,000 sqm metro / 2,000 sqm other; project completion within 5 years; FAR utilisation thresholds; commercial area not exceeding 3 percent of aggregate carpet area</li>
                <li><strong>Section 45(5A)</strong> (inserted by Finance Act 2017): Capital gain on JDA for individual / HUF land owner taxed in year of CC issue. Reverts to transfer year if share transferred before CC</li>
                <li><strong>Section 194-IA:</strong> 1 percent TDS by buyer on property sale consideration above Rs 50 lakh</li>
                <li><strong>Section 194-IC:</strong> 10 percent TDS by developer on monetary consideration to land owner under JDA</li>
                <li><strong>Section 194H:</strong> Broker commission TDS at 2 percent post 1 October 2024 (Finance No. 2 Act 2024, was 5 percent); 20 percent if no PAN; threshold Rs 20,000 from 1 April 2025</li>
                <li><strong>Section 269ST / 271DA:</strong> Bars cash receipt above Rs 2 lakh; 100 percent penalty (real estate is high-risk)</li>
                <li><strong>Section 234F / 234A / 234B / 234C:</strong> Late filing fee and interest</li>
                <li><strong>Section 271B:</strong> Tax audit default penalty 0.5 percent of turnover or Rs 1.5 lakh whichever is lower</li>
                <li><strong>Section 270A:</strong> Under-reporting / mis-reporting penalty at 50 percent / 200 percent of tax sought to be evaded</li>
                <li><strong>Section 40(a)(ia):</strong> 30 percent expenditure disallowance for TDS default (Sec 194H, 194-IC, 194-IA)</li>
                <li><strong>Income Computation and Disclosure Standards (ICDS) - III, IX:</strong> Construction contracts revenue recognition; borrowing costs allocation</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">CGST Act 2017 - Indirect Tax</h3>
            <ul>
                <li><strong>Schedule III:</strong> Sale of land excluded from scope of supply; sale of completed building (post-CC) also outside GST</li>
                <li><strong>Notification 11/2017-CT(R) as amended by Notification 3/2019:</strong> 1 percent affordable / 5 percent other on under-construction flats; 12 percent on commercial; 80 percent procurement from registered suppliers else 18 percent RCM; cement always 28 percent RCM if unregistered</li>
                <li><strong>Affordable housing GST condition:</strong> Carpet area 60 sqm metro / 90 sqm non-metro AND price up to Rs 45 lakh</li>
                <li><strong>HSN/SAC 9954:</strong> Construction services classification</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">RERA Act 2016</h3>
            <ul>
                <li><strong>Section 3(2):</strong> Mandatory registration for projects above 500 sqm or 8 apartments</li>
                <li><strong>Form 5 / Quarterly Progress Reports:</strong> Mandatory quarterly disclosure of units sold, booking amount, construction progress, escrow movements</li>
                <li><strong>Section 59:</strong> Penalty up to 10 percent of estimated cost for non-registration</li>
                <li><strong>Section 60:</strong> False information penalty up to 5 percent</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Finance Act Amendments and Judicial Precedents</h3>
            <ul>
                <li>Finance Act 2017 (Section 45(5A) JDA insertion), Finance Act 2018 (Section 43CB POCM mandate), Finance Act 2020 (Section 43CA / 50C / 56(2)(x) safe harbour 10 percent), Finance (No. 2) Act 2024 (Section 194H broker TDS reduced to 2 percent)</li>
                <li>Bangalore Tribunal in Corporate Leisure and Property Development P Ltd, ITO v Nadia Construction P Ltd (PCM permitted for developers)</li>
                <li>Apex Court in Excel Industries Ltd 2013 (accrual rule under Sec 5)</li>
                <li>EY India tax alert 2023 on ICDS-III applicability to developers</li>
            </ul>
            <h3 style="margin-top:24px;color:var(--blue);">Government Source Links</h3>
            <ul>
                <li><a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax e-Filing Portal (CBDT)</a></li>
                <li><a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department - Sec 43CB / 80-IBA / 45(5A) reference</a></li>
                <li><a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Portal (CBIC)</a></li>
                <li><a href="https://mohua.gov.in/" target="_blank" rel="noopener">Ministry of Housing and Urban Affairs (RERA)</a></li>
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
                    <p class="faq-expanded__lead">Answers to the most common questions real estate developers and builders ask before filing ITR.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Real Estate Developers',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a real estate developer file?</h3>
                        <div class="faq-expanded__a"><p>A private limited or listed real estate company files ITR-6. An LLP or partnership firm developer files ITR-5. A proprietor developer or broker with regular books files ITR-3. Section 44AD presumptive (ITR-4) is technically available for proprietors / firms up to Rs 2 crore turnover (Rs 3 crore digital), but is rarely advisable for developers due to project work-in-progress and POCM mandate complexity. HUF small builder files ITR-3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Should real estate developers use POCM or PCM for revenue recognition?</h3>
                        <div class="faq-expanded__a"><p>Section 43CB inserted by Finance Act 2018 mandates POCM (Percentage of Completion Method) for construction contracts in accordance with ICDS-III. However, ITAT and High Court rulings - including Bangalore Tribunal in Corporate Leisure and Property Development P Ltd, ITO v Nadia Construction P Ltd, and Apex Court in Excel Industries (2013) - hold that ICDS-III applies to construction contractors, not to real estate developers selling stock-in-trade. Developers may follow PCM if consistently applied. Patron prepares a methodology paper at engagement onset.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When does tax audit apply for a real estate developer?</h3>
                        <div class="faq-expanded__a"><p>Tax audit applies under Section 44AB if turnover exceeds Rs 1 crore in a financial year. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash - achievable with banking-channel customer payments and digital vendor settlements. Form 3CD report is due 30 September 2026 and the audit-case ITR by 31 October 2026 for AY 2026-27. Section 271B penalty for default is 0.5 percent of turnover or Rs 1.5 lakh, whichever is lower.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Section 43CA and how does it affect developers?</h3>
                        <div class="faq-expanded__a"><p>Section 43CA deems the stamp duty value (SDV) of land or building held as stock-in-trade as the full value of consideration if actual sale consideration is less than SDV by more than 10 percent (Finance Act 2020 safe harbour). For developers in sluggish micro-markets where SDV exceeds agreement value, this triggers notional income tax. Two relief avenues: (a) lock agreement-date SDV by receiving part consideration via banking channel before agreement under Sec 43CA(3)/(4); (b) DVO reference under Sec 43CA(2) read with Sec 50C(2) where SDV exceeds fair market value.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Section 80-IBA still available for affordable housing projects?</h3>
                        <div class="faq-expanded__a"><p>Section 80-IBA grants 100 percent deduction on profits from affordable housing projects but only for projects approved between 1 June 2016 and 31 March 2022. The approval window has now closed - new projects cannot be added to the scheme. Existing approved projects continue to claim deduction subject to 5-year completion deadline. Carpet area must not exceed 60 sqm metro / 90 sqm non-metro; plot size 1,000 sqm metro / 2,000 sqm other; commercial area not exceeding 3 percent of aggregate carpet area; FAR utilisation thresholds. If the project is not completed within 5 years, the entire deduction reverses as income (claw-back).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the TDS rate on broker commission under Section 194H?</h3>
                        <div class="faq-expanded__a"><p>Section 194H broker commission TDS is now 2 percent (down from 5 percent), effective 1 October 2024 under the Finance No. 2 Act 2024. Rate rises to 20 percent if PAN is not furnished. Threshold is Rs 20,000 per FY from 1 April 2025 (was Rs 15,000). Failure to deduct triggers Section 40(a)(ia) 30 percent disallowance of broker commission expense in the developer's ITR. Form 26Q is filed quarterly. Form 16A is issued to brokers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is GST applied on plot sale vs flat sale?</h3>
                        <div class="faq-expanded__a"><p>Plot sale (sale of land) is exempt from GST under Schedule III of the CGST Act 2017 - sale of land is excluded from the scope of supply. Sale of completed building (post-Completion Certificate) is also outside GST per Schedule III. Under-construction flat sale attracts GST at 1 percent (affordable housing - carpet area 60 sqm metro / 90 sqm non-metro and price up to Rs 45 lakh) or 5 percent (other residential), both without ITC. Commercial under-construction units attract 12 percent. Developers must procure 80 percent of inputs from GST-registered suppliers else pay 18 percent RCM on shortfall (cement always 28 percent RCM if unregistered).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does RERA compliance interact with ITR filing?</h3>
                        <div class="faq-expanded__a"><p>From 2026, the GST department auto-cross-verifies RERA Form 5 and Quarterly Progress Reports against GSTR-1 outward supplies. Any discrepancy in Units Sold or Booking Amount triggers automated inquiry. Income tax authorities also cross-reference RERA project status against Section 80-IBA completion timelines and Schedule BP project revenue. Patron prepares a three-way reconciliation between RERA (Form 5 / QPR), GSTR-1/9, and Schedule BP before each ITR filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">How is Joint Development Agreement (JDA) taxed under Section 45(5A)?</h3>
                        <div class="faq-expanded__a"><p>For an individual or HUF land owner under a registered JDA, Section 45(5A) (inserted by Finance Act 2017) provides that capital gain is taxed in the year of issue of the Completion Certificate, not in the year the JDA is signed. Full value of consideration equals SDV of the constructed area received plus any cash. If the land owner transfers their share before CC, taxation reverts to the transfer year (no Section 45(5A) deferral). The developer paying monetary component must deduct TDS at 10 percent under Section 194-IC. The developer's share is treated as stock-in-trade with cost equal to SDV of the corresponding land share at agreement date.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
            <p><strong>Q: Which ITR for a Pvt Ltd developer?</strong><br>A: ITR-6, due 31 October 2026 if audited.</p>
            <p><strong>Q: Tax audit threshold?</strong><br>A: Rs 1 crore; Rs 10 crore if 95 percent receipts and payments are non-cash.</p>
            <p><strong>Q: POCM vs PCM?</strong><br>A: Sec 43CB mandates POCM; PCM defensible per ITAT for developers.</p>
            <p><strong>Q: Sec 43CA safe harbour?</strong><br>A: 10 percent (Finance Act 2020). SDV deemed full value if variation exceeds 10 percent.</p>
            <p><strong>Q: Sec 80-IBA window?</strong><br>A: Approval between 1 June 2016 and 31 March 2022; 5-year completion deadline.</p>
            <p><strong>Q: Sec 194H broker TDS rate?</strong><br>A: 2 percent post 1 October 2024 (Finance No. 2 Act 2024); 20 percent without PAN; threshold Rs 20,000 from 1 April 2025.</p>
            <p><strong>Q: GST on plot sale?</strong><br>A: Exempt under Schedule III CGST Act. Sale of land outside scope of supply.</p>
            <p><strong>Q: Sec 45(5A) JDA taxed when?</strong><br>A: In year of Completion Certificate issue (individual / HUF land owner).</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Recap - 3 Firm Dates for Real Estate Developers (AY 2026-27)</h2>
            <div class="content-text">
                
                
            <p>Real estate developers face THREE firm dates plus rolling compliance for AY 2026-27 (FY 2025-26):</p>
            <ul>
                <li><strong>31 August 2026</strong> - non-audit ITR-3 / ITR-5 / ITR-6 under Section 139(1) (extended from 31 July)</li>
                <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB</li>
                <li><strong>31 October 2026</strong> - audit-case ITR-3 / ITR-5 / ITR-6 under Section 139(1)</li>
                <li><strong>30 November 2026</strong> - ITR for transfer pricing cases under Section 92E (cross-border developer)</li>
                <li><strong>31 December 2026</strong> - belated / revised return Section 139(4) / (5) with Section 234F fee</li>
                <li><strong>Quarterly advance tax</strong> - 15 June, 15 September, 15 December, 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative)</li>
                <li><strong>Quarterly TDS</strong> - 31 July, 31 October, 31 January, 31 May for Form 26Q (Sec 194H broker, Sec 194-IC JDA)</li>
            </ul>
            <p style="margin-top:16px;">Rolling deadlines: RERA Form 5 / Quarterly Progress Report (15 days from quarter-end per State RERA rules); GSTR-1 monthly (11th of next month); GSTR-3B monthly (20th of next month); GSTR-9 annual (31 December 2026 for FY 2025-26); RERA escrow account quarterly reconciliation.</p>
            <p style="margin-top:16px;font-weight:700;color:var(--orange);">Late filing triggers Section 234F fee, Section 234A interest, loss of carry-forward of business losses, Section 271B audit penalty up to Rs 1.5 lakh, plus Sec 40(a)(ia) 30 percent disallowance for Section 194H broker TDS or Section 194-IC JDA TDS default. Section 80-IBA claw-back triggers if project misses 5-year completion deadline. RERA Form 5 mismatch with GSTR-1 invites automated inquiry from 2026.</p>
            <p style="margin-top:18px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Real Estate Developer ITR Filed by a CA Who Knows POCM, JDA, and Sec 80-IBA</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p>ITR for real estate developers is one of the most contested direct-tax filings in India. The interplay of Section 43CB POCM mandate vs ITAT-permitted PCM, Section 43CA stamp duty value deeming with 10 percent safe harbour, Section 80-IBA affordable housing claim with 5-year claw-back risk, RERA quarterly reconciliation now auto-matched to GSTR-1, Section 194H broker commission TDS at 2 percent post 1 October 2024, Section 45(5A) JDA capital gain timing, and the GST split between exempt plot sale and 1 percent / 5 percent flat sale demands a CA team that has lived through ITAT precedents, RERA dashboards, and the Income-tax Act in equal measure.</p>
                <p>Patron Accounting brings 15+ years of tax practice and 200+ real estate engagements to file your return on time, defend it under scrutiny, and structure your tax position for the years ahead. Whether your structure is a single-project proprietor broker, a 2-partner builder LLP, a Pvt Ltd developer with multiple Sec 80-IBA affordable housing projects, or a listed real estate company with cross-border JDAs, the correct answer always begins with entity-type confirmation, POCM vs PCM methodology paper, Section 43CA unit-level reconciliation, Section 80-IBA project-life tracker, and JDA Sec 45(5A) memo.</p>
                <p>Free 15-minute consultation - send your RERA registration certificate, latest Form 5 / Quarterly Progress Report, GSTR-1 summary, JDA deed (if applicable), and Section 80-IBA approval letter (if applicable) before you pay anything. We respond within 2 hours.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Real%20Estate%20Developers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron Accounting Service Coverage</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">We file real estate developer ITRs across India with offices in Pune, Mumbai, Delhi, and Gurugram, plus remote delivery for Bengaluru, Hyderabad, Chennai, and Tier-2 city developer clients.</p>
            
            
                <!-- Block 2: Cross-Sell - Adjacent Real Estate and Tax Services (national-level) -->
                <div class="pa-cross-grid">
                    <a href="/itr-for-business" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M3 3h18v4H3z"/><path d="M21 7v14H3V7"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">ITR for Business</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/itr-for-companies" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">ITR for Companies</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/itr-for-property-sale" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">ITR for Property Sale</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/tax-audit" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M21 21l-4.35-4.35"/><circle cx="11" cy="11" r="8"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Tax Audit (Section 44AB)</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/construction-and-real-estate-accounting-services" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Real Estate Accounting</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/tds-return" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2v20"/><path d="M5 12l7 7 7-7"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">TDS Return Filing</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">8 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed by CA &amp; CS Team, Patron Accounting LLP. Content reviewed quarterly during ITR season; immediately after Finance Act amendments to Section 43CB / Section 43CA / Section 80-IBA / Section 194H / Section 45(5A); review after CBDT and CBIC clarifications on real estate sector; immediate review after new ITAT or High Court rulings on POCM/PCM, Sec 43CA DVO referencing, or Sec 80-IBA claw-back.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>






<!-- ============================================
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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
