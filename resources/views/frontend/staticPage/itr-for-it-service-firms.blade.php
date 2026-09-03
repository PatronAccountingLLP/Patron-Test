@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>IT Services ITR: Sec 10AA SEZ, LUT</title>
    <meta name="description" content="ITR for IT services and software firms. Section 10AA SEZ deduction, LUT for export of services, FIRC, Schedule FSI, transfer pricing. Starts at Rs 7,999.">
    <link rel="canonical" href="/itr-for-it-service-firms">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IT Services ITR 2026: Sec 10AA SEZ, LUT | Patron Accounting">
    <meta property="og:description" content="ITR for IT services and software firms. Section 10AA SEZ deduction, LUT for export of services, FIRC, Schedule FSI, transfer pricing. Starts at Rs 7,999.">
    <meta property="og:url" content="/itr-for-it-service-firms/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT Services ITR 2026: Sec 10AA SEZ, LUT | Patron Accounting">
    <meta name="twitter:description" content="ITR for IT services and software firms. Section 10AA SEZ deduction, LUT for export of services, FIRC, Schedule FSI, transfer pricing. Starts at Rs 7,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/itr-for-it-service-firms#breadcrumb",
                "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for IT Service Firms", "item": "https://www.patronaccounting.com/itr-for-it-service-firms" }
          ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/itr-for-it-service-firms#faq",
                "datePublished": "2026-05-08T08:00:00+05:30",
                "dateModified": "2026-05-08T08:00:00+05:30",
                "mainEntity": [
                    {"@type": "Question", "name": "Which ITR form should an IT services firm file?", "acceptedAnswer": {"@type": "Answer", "text": "Depends on entity type. Sole proprietor IT freelancer or consultant: ITR-3 (regular books) or ITR-4 SUGAM (Section 44ADA presumptive only if technical consultancy classification holds). Partnership Firm or LLP IT services: ITR-5. Private Limited Company, OPC or Public Limited Company IT services: ITR-6 (with corporate rates 22 percent, 25 percent or 30 percent depending on regime). HUF with IT business: ITR-3 or ITR-4. Never ITR-1 (no business income head)."}},
                    {"@type": "Question", "name": "Is LUT mandatory for export of IT services?", "acceptedAnswer": {"@type": "Answer", "text": "No, LUT is optional but strongly recommended. Two routes: (a) LUT in Form GST RFD-11 under Rule 96A CGST Rules 2017 - zero-rated supply without IGST payment; (b) Without LUT - pay 18 percent IGST on each export invoice and claim refund subsequently (60-180 day cycle). LUT requires annual filing each FY before first export invoice. We recommend LUT as primary route for all regular IT exporters."}},
                    {"@type": "Question", "name": "Can a new SEZ unit claim Section 10AA deduction in 2026?", "acceptedAnswer": {"@type": "Answer", "text": "No. Section 10AA sunset clause (inserted by Finance Act 2016) bars new SEZ units commencing operations on or after 1 April 2021 from claiming Section 10AA deduction. Existing SEZ units that commenced operations on or before 31 March 2021 continue to claim deduction for full 15-year period (100 percent first 5 years, 50 percent next 5 years, 50 percent reinvested via SEZ Reinvestment Reserve next 5 years). Mandatory Form 56F audit. Cannot opt new tax regime Section 115BAC."}},
                    {"@type": "Question", "name": "What is the depreciation rate on computers and software?", "acceptedAnswer": {"@type": "Answer", "text": "Section 32 of Income Tax Act 1961 with Income Tax Rules 1962 Schedule II. Computers and computer software 40 percent WDV. General plant and machinery 15 percent WDV. Buildings 10 percent (factory) or 5 percent (other). Furniture 10 percent. Section 32(1)(iia) additional 20 percent on new plant and machinery is not available to IT services since IT services are classified as services not manufacturing per judicial precedents."}},
                    {"@type": "Question", "name": "How are ESOPs taxed when exercised by IT employees?", "acceptedAnswer": {"@type": "Answer", "text": "Section 17(2)(vi) of Income Tax Act 1961. At exercise of ESOP - difference between Fair Market Value of share at exercise date and exercise price (price paid by employee) added to salary income as perquisite. Employer deducts TDS under Section 192. Subsequent sale of acquired shares triggers capital gains - cost basis equals FMV at exercise. For DPIIT-recognized startups under Section 80-IAC, perquisite tax can be deferred under Section 156 (Finance Act 2020) to earlier of sale, 5 years, or employment cessation."}},
                    {"@type": "Question", "name": "Is transfer pricing applicable to IT services exporting to a parent company abroad?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. IT services exporting to foreign parent, subsidiary, associate or sister concern triggers transfer pricing under Section 92E. No threshold for international transactions - any amount triggers Form 3CEB by 31 October 2026 and ITR by 30 November 2026. TP study with FAR analysis, method selection (TNMM most common for IT services), benchmarking against comparable Indian IT services firms. Section 271AA penalty 2 percent of transaction value for documentation failure."}},
                    {"@type": "Question", "name": "Are software development services eligible for Section 44ADA presumptive?", "acceptedAnswer": {"@type": "Answer", "text": "Generally no. Section 44ADA presumptive at 50 percent of receipts is restricted to specified professions - legal, medical, engineering, architectural, accountancy, technical consultancy, interior decoration, or notified profession. Software development is typically classified as business not profession, so Section 44ADA does not apply. IT consultancy may qualify as technical consultancy. Eligibility limited to Resident Individual or Firm only (not LLP, not Company). Threshold Rs 75 lakh digital or Rs 50 lakh."}},
                    {"@type": "Question", "name": "What is the Schedule FSI in ITR for IT services exporters?", "acceptedAnswer": {"@type": "Answer", "text": "Schedule FSI is a section in ITR-3, ITR-5 or ITR-6 disclosing income earned outside India taxable in India. Country-wise breakdown of foreign income, tax paid in source country, DTAA application. Mandatory disclosure for all assessees with foreign source income regardless of taxability. Companion schedules: Schedule FA (Foreign Assets - mandatory for ROR; Section 43 Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year, with threshold relief w.e.f. 1 October 2024 for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh) and Schedule TR (Tax Relief - DTAA Section 90 or 90A or unilateral relief Section 91 with Form 67)."}}
                ]
            },
            {
                "@type": "Service",
                "@id": "https://www.patronaccounting.com/itr-for-it-service-firms#service",
                "name": "ITR Filing for IT Services and Software Development Firms",
                "alternateName": ["IT Business ITR", "Software Firm Tax Filing", "Export of Services ITR", "SEZ IT Firm ITR Section 10AA", "LUT for IT Services", "Transfer Pricing IT Services", "ESOP Tax IT Firm"],
                "url": "https://www.patronaccounting.com/itr-for-it-service-firms",
                "description": "End-to-end ITR filing for IT services and software development firms across SaaS, custom software development, IT consultancies, mobile and web development, AI/ML services, cybersecurity, cloud services, fintech, edtech, and DevOps. Includes Section 10AA SEZ deduction, LUT for export of services under Rule 96A CGST Rules, FIRC and Schedule FSI / FA / TR foreign income reporting, transfer pricing Section 92E with Form 3CEB, ESOP taxation under Section 17(2)(vi) with Section 80-IAC startup deferral, Section 32 computer and software depreciation 40 percent WDV, and Section 80JJAA additional employee cost deduction for AY 2026-27.",
                "serviceType": "Tax Return Filing",
                "category": "Direct Tax Compliance Industry-Specific",
                "provider": {"@id": "https://www.patronaccounting.com/#organization"},
                "areaServed": [
                    {"@type": "Country", "name": "India"},
                    {"@type": "City", "name": "Bengaluru"},
                    {"@type": "City", "name": "Hyderabad"},
                    {"@type": "City", "name": "Pune"},
                    {"@type": "City", "name": "Gurugram"},
                    {"@type": "City", "name": "Noida"},
                    {"@type": "City", "name": "Chennai"},
                    {"@type": "City", "name": "Mumbai"},
                    {"@type": "City", "name": "Delhi"}
                ],
                "audience": {"@type": "Audience", "audienceType": "IT services and software development firms across SaaS, custom software development, ERP/CRM consulting, IT staff augmentation, mobile application development, web development, AI/ML services, data analytics, cybersecurity services, cloud services, DevOps, blockchain, fintech development, edtech development; sole proprietor freelance developers and consultants; partnership firms and LLPs; private limited companies (Pvt Ltd, OPC); DPIIT-recognized startups under Section 80-IAC; existing SEZ unit IT firms within Section 10AA 15-year window; foreign-funded IT firms with related party transactions; ESOP-issuing IT companies"},
                "about": [
                    {"@type": "Thing", "name": "Information technology in India", "sameAs": "https://en.wikipedia.org/wiki/Information_technology_in_India"},
                    {"@type": "Thing", "name": "Income Tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
                    {"@type": "Thing", "name": "Special Economic Zone (India)", "sameAs": "https://en.wikipedia.org/wiki/Special_Economic_Zone_(India)"}
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "IT Services and Software Firm ITR Filing Plans",
                    "itemListElement": [
                        {"@type": "Offer", "name": "Sole Prop IT freelancer ITR", "price": "7999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Partnership / LLP IT services ITR-5", "price": "12999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "IT Pvt Ltd ITR-6", "price": "18999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Section 10AA SEZ + Form 56F audit", "price": "14999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-it-service-firms", "availability": "https://schema.org/InStock"},
                        {"@type": "Offer", "name": "Transfer Pricing Section 92E + Form 3CEB", "price": "24999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-it-service-firms", "availability": "https://schema.org/InStock"}
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
    ['name' => 'ITR for IT Service Firms', 'url' => '/itr-for-it-service-firms'],
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
                        ITR Filing for IT Services and Software Development Firms
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Master Services Agreement and SoW; FIRCs; LUT acknowledgement; SEZ Letter of Approval and Form 56F; ESOP scheme; Form 26AS, AIS, TIS; partnership deed / LLP Agreement / Certificate of Incorporation; DSC.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 7,999 sole prop ITR-3 / ITR-4; Rs 12,999 partnership / LLP ITR-5; Rs 18,999 IT Pvt Ltd ITR-6; Rs 14,999 add-on for SEZ Section 10AA Form 56F; Rs 24,999 add-on for transfer pricing Form 3CEB.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Sole proprietor freelance developers; partnership / LLP IT consultancies; private limited / OPC IT firms; DPIIT-recognized startups; existing SEZ unit IT firms within Section 10AA 15-year window; ESOP-issuing companies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 14 days for sole prop non-audit; 14 to 21 days for firm / LLP / company; 21 to 30 days for tax audit cases. Statutory due 31 July 2026 (non-audit); 31 October 2026 (audit ITR + Form 3CEB); 30 November 2026 (Section 92E TP cases).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20It%20Service%20Firms%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for IT Service Firms',
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
    'ctaText'    => 'Trusted by IT services firms across Bengaluru, Hyderabad, Pune, Gurugram, Noida, Chennai, and Mumbai for SEZ Section 10AA, LUT, transfer pricing, and ESOP compliance.',
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
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">LUT vs IGST</a>
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
            <h2 class="section-title">ITR for IT Services Firms - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for IT Service Firms Services at a Glance</strong></p>
                    <p>IT services and software firms face SEVEN industry-specific tax considerations - LUT for export of services without IGST under Rule 96A CGST Rules, Section 10AA SEZ deduction (sunset for new units 1 April 2021), FIRC and Schedule FSI / FA foreign income reporting, transfer pricing Section 92E + Form 3CEB for international related party transactions, ESOP taxation Section 17(2)(vi) at exercise with Section 80-IAC startup deferral, Section 32 computer depreciation at 40 percent WDV, and Section 80JJAA additional employee cost deduction.</p>
                </div>
                <p>IT services and software firm ITR is the area where DIY platforms and generalist accountants miss SEVEN industry-specific levers worth 10 to 40 percent of annual profit. A Bengaluru SaaS firm exporting to US clients without LUT in Form GST RFD-11 pays IGST on each invoice and waits 60 to 180 days for refund - blocking Rs 50 lakh to Rs 4 crore working capital annually. A Pune-based existing SEZ IT unit forgetting to file Form 56F audit report alongside ITR-6 forfeits Section 10AA deduction in that AY entirely - a Rs 30 lakh to Rs 5 crore tax exposure depending on profit size.</p>
                <p>An IT Pvt Ltd subsidiary of a US parent receiving 30 percent margin on cost-plus contracts must file Form 3CEB by 31 October 2026 with arms length pricing study; failure attracts Section 271AA penalty 2 percent of transaction value (potentially Rs 6 lakh on a Rs 3 crore transaction). A DPIIT-recognized startup IT firm issuing ESOPs without invoking Section 80-IAC deferral attracts Section 17(2)(vi) perquisite tax at exercise creating employee cash outflow without liquidity. Patron Accounting has filed IT and software sector ITRs for 320+ firms across Bengaluru, Hyderabad, Pune, Gurugram, Noida, Chennai, and Mumbai since 2019.</p>
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
                <h2 class="section-title">What Is IT Services / Software Firm ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    
            <p><em>IT Services / Software Firm ITR filing means computing PGBP income across IT-specific complexities - LUT enabled zero-rated export of services under Rule 96A CGST Rules, Section 10AA SEZ deduction for existing pre-sunset units (Form 56F audit), FIRC reconciliation with Schedule FSI / FA foreign income disclosure, transfer pricing Section 92E + Form 3CEB for international related party transactions, ESOP perquisite taxation Section 17(2)(vi) with Section 80-IAC startup deferral, Section 32 computer/software depreciation at 40 percent WDV, and Section 80JJAA additional employee cost deduction - all reported in entity-appropriate ITR form (ITR-3 / ITR-5 / ITR-6) with Section 44AB tax audit coordination where applicable.</em></p>
            <p>India IT services sector spans pure-domestic firms (banking software, government IT, captive IT departments), export-only firms (offshore development centres for US/UK/EU/AU clients), hybrid firms (mix of domestic and export), SEZ-located IT firms (commenced operations on or before 31 March 2021 within Section 10AA 15-year window), and captive subsidiaries of foreign parents (international related party transactions). Each profile has distinct compliance perimeters.</p>
            <p>Pure-domestic firms face standard ITR + GST 18 percent + tax audit Section 44AB at Rs 1 crore. Export firms face additionally LUT for zero-rated supply (or with-IGST refund cycle), FIRC tracking, Schedule FSI foreign income reporting (even though exempt under Section 10AA where applicable, disclosure required). SEZ firms face Section 10AA 100/50/50 deduction across 15 years with mandatory Form 56F. Captive subsidiaries face transfer pricing Section 92E + Form 3CEB by 31 October. ESOP-issuing firms face employee perquisite TDS at exercise. This service handles all profiles with a CA who understands global delivery models, dollar-denominated invoicing, and the working capital cycle of export receivables.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for IT Service Firms:</strong></p>
                    
            <p><strong>Section 10AA - SEZ Deduction:</strong> Income Tax Act 1961 Section 10AA. 100 percent of profits from export of articles or services for first 5 consecutive AYs; 50 percent for next 5 AYs (years 6-10); 50 percent of profit credited to SEZ Reinvestment Reserve for next 5 AYs (years 11-15). Total 15-year tax holiday. Mandatory Form 56F audit by CA. Cannot opt new tax regime Section 115BAC.</p>
            <p><strong>Section 10AA Sunset:</strong> Finance Act 2016 inserted proviso. NO deduction for SEZ units commencing manufacture or production of articles or services on or after 1 April 2021. Existing units that commenced operations on or before 31 March 2021 continue to claim deduction for full 15-year period.</p>
            <p><strong>LUT - Letter of Undertaking:</strong> Filed in Form GST RFD-11 on GST portal under Rule 96A of CGST Rules 2017. Permits zero-rated supply (export of services / goods / supply to SEZ) WITHOUT payment of IGST. Annual filing each FY. Validity 1 FY; renewal mandatory each year.</p>
            <p><strong>Form 56F - SEZ Audit Report:</strong> Audit report by Chartered Accountant for SEZ units claiming Section 10AA. Filed alongside ITR. Verifies eligibility conditions, separate books, computation of export turnover and total turnover, formula application. CA UDIN required. Without Form 56F, deduction disallowed.</p>
            <p><strong>Schedule FSI - Foreign Source Income:</strong> ITR schedule disclosing income earned outside India taxable in India. Country-wise breakdown. Tax payable / paid in source country. DTAA application. Mandatory for assessees with foreign income regardless of taxability.</p>
            <p><strong>Schedule FA - Foreign Assets:</strong> ITR schedule disclosing foreign assets held by assessee. Mandatory for Resident and Ordinarily Resident (ROR). Bank accounts, financial interests, immovable property, beneficial interest, ESOPs abroad. Section 43 of Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year for non-disclosure or inaccurate particulars. Threshold relief w.e.f. 1 October 2024 (Budget 2024): no penalty where aggregate value of foreign assets other than immovable property does not exceed Rs 20 lakh; foreign bank accounts with aggregate balance up to Rs 5 lakh during PY also outside the penalty net. Per Special Bench ITAT (2025), the word "may" in Section 43 is directory not mandatory, allowing discretionary non-imposition for technical or venial breaches.</p>
            <p><strong>FIRC - Foreign Inward Remittance Certificate:</strong> Document issued by AD bank to recipient of foreign remittance. Confirms USD / EUR / GBP receipt date, amount, originating bank, purpose code (P0802 for software services, P0803 for IT enabled services). Reconciles to GSTR-1 export invoice and Schedule FSI.</p>
            <p><strong>Section 92E - Transfer Pricing:</strong> Income Tax Act Section 92E. Report by Accountant in Form 3CEB for international transactions and Specified Domestic Transactions. Filed by 31 October 2026 (one month before ITR due date for TP cases). 22 clauses covering nature, value, arms length pricing.</p>
            <p><strong>Section 17(2)(vi) - ESOP Perquisite:</strong> At exercise of ESOP - difference between Fair Market Value of share at exercise date AND exercise price (price paid by employee) added to salary income. TDS by employer Section 192. Two events: exercise (perquisite) and sale (capital gains).</p>
            <p><strong>Section 80-IAC - Startup ESOP Deferral:</strong> Finance Act 2020 inserted Section 156 deferral mechanism for ESOPs of DPIIT-recognized startups eligible under Section 80-IAC. ESOP perquisite tax DEFERRED to earlier of (a) date of sale of shares; (b) 5 years from end of AY of exercise; (c) date of cessation of employment.</p>
            <p><strong>Section 32 - Depreciation:</strong> Income Tax Rules 1962 Schedule II. Computers and computer software 40 percent WDV. General plant and machinery 15 percent WDV. Buildings 10 percent (factory) / 5 percent (other). Section 32(1)(iia) additional 20 percent on new manufacturing machinery NOT available to IT services.</p>
            <p><strong>Equalisation Levy:</strong> Originally 6 percent on online advertisement payments to non-resident service providers (introduced Finance Act 2016) and 2 percent on e-commerce supply (introduced Finance Act 2020). The 2 percent EL was ABOLISHED w.e.f. 1 August 2024 by Finance Act 2024. The 6 percent EL on online advertisement was subsequently ABOLISHED w.e.f. 1 April 2025 by Finance Act 2025. For FY 2025-26 (AY 2026-27) onwards, no fresh Equalisation Levy applies. Last Form 1 statement filed for FY 2024-25 (covering 6 percent payments up to 31 March 2025) was due 30 June 2025. Section 195 TDS on payments to non-residents continues to apply as before.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for IT Service Firms</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Verified by</span>
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
            <h2 class="section-title">IT Sub-Sector Matrix - Who Needs This Service</h2>
            <div class="content-text">
                
                
            <p>IT services sector spans the entire value chain. Each profile has distinct compliance perimeters. The table below maps the 12 most common IT firm profiles to their entity type, Section 10AA eligibility, LUT requirement, transfer pricing applicability, and tax audit threshold.</p>
            <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Entity Type</th>
                            <th>Section 10AA?</th>
                            <th>LUT Required?</th>
                            <th>Transfer Pricing?</th>
                            <th>Tax Audit Threshold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Pure-domestic IT services</td><td>Pvt Ltd / LLP</td><td>NO (no exports)</td><td>NO</td><td>Only if SDT &gt; Rs 20 cr</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Export-only services (US/EU/UK clients)</td><td>Pvt Ltd / OPC / LLP</td><td>YES if SEZ pre-Apr 2021</td><td>YES (or with-IGST refund)</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Hybrid domestic + export</td><td>Pvt Ltd / LLP</td><td>PARTIAL (exports only)</td><td>YES for export portion</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Sole proprietor freelance dev</td><td>Sole prop</td><td>Generally NO</td><td>YES for foreign clients</td><td>NA (single person)</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>SEZ Unit IT firm (existing pre-2021)</td><td>Pvt Ltd / LLP</td><td>YES (within 15-yr window)</td><td>YES (zero-rated to SEZ)</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>SEZ Unit IT firm (post-Apr 2021)</td><td>Pvt Ltd / LLP</td><td>NO (sunset triggered)</td><td>YES</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>Captive subsidiary of foreign parent</td><td>Pvt Ltd</td><td>Generally NO</td><td>YES (export to parent)</td><td>YES (mandatory Form 3CEB)</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>DPIIT-recognized startup</td><td>Pvt Ltd</td><td>Per SEZ status</td><td>YES if exporting</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>IT Consultancy Sole prop (technical)</td><td>Sole prop</td><td>Generally NO</td><td>YES for foreign clients</td><td>NA</td><td>Profession Rs 50 lakh</td></tr>
                        <tr><td>Software Pvt Ltd (PaaS / SaaS / IaaS)</td><td>Pvt Ltd</td><td>Per SEZ status</td><td>YES if exporting</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                        <tr><td>ESOP-issuing IT firm</td><td>Pvt Ltd</td><td>NA</td><td>NA</td><td>NA</td><td>Per business size</td></tr>
                        <tr><td>Multi-state IT firm</td><td>Pvt Ltd</td><td>Multi-state SEZ check</td><td>YES per state GSTIN</td><td>YES if related party abroad</td><td>Rs 1 cr / Rs 10 cr digital</td></tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-top:18px;font-size:14px;color:var(--text-muted);"><em>If your IT firm has a foreign parent, an SEZ Letter of Approval, ESOP grants outstanding, or DPIIT recognition, your ITR is no longer a 1-week filing job. Schedule a free 15-minute call with Patron to map your profile.</em></p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR and Adjacent Compliance for IT Services Sector</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td>IT Sole Prop / Firm / LLP / Pvt Ltd ITR Filing</td>
                            <td>Entity-appropriate ITR form selection - sole prop ITR-3 (regular books) / ITR-4 (Section 44ADA presumptive only if technical consultancy); firm / LLP ITR-5 with Section 40(b); Pvt Ltd ITR-6 with corporate rate optimization (22 percent Section 115BAA / 25 percent / 30 percent regular). Schedule BP, OS, CG, FSI, FA, TR.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>LUT Renewal and Export of Services GST Coordination</td>
                            <td>Annual LUT in Form GST RFD-11 under Rule 96A CGST Rules 2017. Reconciliation of zero-rated supply to FIRC realization. Annexure-1 export details. Coordination with /gst-refund for any with-IGST-refund claims.</td>
                            <td><span class="badge-included">Included</span></td>
                        </tr>
                        <tr>
                            <td>Section 10AA SEZ Deduction with Form 56F</td>
                            <td>For pre-1 April 2021 SEZ unit IT firms within 15-year window. Section 10AA 100/50/50 schedule check. Form 56F audit by CA. SEZ Reinvestment Reserve Account compliance for years 11-15. Letter of Approval renewal coordination.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>Transfer Pricing Section 92E + Form 3CEB</td>
                            <td>For IT firms with international related party transactions. TP study with FAR analysis. Method selection (TNMM most common for IT - cost plus 10-15 percent). Benchmarking. Form 3CEB 22 clauses. Section 92D and Rule 10D documentation.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>ESOP Taxation - Section 17(2)(vi) and Section 80-IAC Deferral</td>
                            <td>Identify perquisite at exercise (FMV minus exercise price); TDS Section 192. For DPIIT-recognized startups - Section 156 Finance Act 2020 deferral to earlier of sale / 5 years from AY of exercise / employment cessation.</td>
                            <td><span class="badge-addon">Add-on</span></td>
                        </tr>
                        <tr>
                            <td>Foreign Income Reporting and Section 195 TDS</td>
                            <td>Schedule FSI Foreign Source Income; Schedule FA Foreign Assets (ROR mandatory; Section 43 Black Money Act Rs 10 lakh per defaulting year; threshold relief w.e.f. 1 October 2024 for non-immovable foreign assets up to Rs 20 lakh aggregate, foreign bank balances up to Rs 5 lakh); Schedule TR DTAA tax relief with Form 67. Section 195 TDS on foreign vendors. Form 15CA / 15CB compliance.</td>
                            <td><span class="badge-included">Included</span></td>
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
            <h2 class="section-title">How Patron Files Your IT / Software Firm ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 7-step process covering entity mapping, books reconciliation, Section 10AA SEZ, LUT renewal, transfer pricing, ESOP, and final ITR filing.</p>
        </header>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Entity Type and Profile Mapping</h3>
                    <p class="step-description">Identify entity type (sole prop / partnership / LLP / Pvt Ltd / OPC / HUF) for ITR form selection. Identify revenue profile (pure domestic / pure export / hybrid). Identify special status (SEZ unit pre-Apr 2021 / DPIIT startup / captive subsidiary). Identify related party transactions. Set up compliance calendar.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity classification</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance calendar setup</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="25" y="20" width="35" height="20" rx="3" fill="#E8712C" opacity="0.3"/>
                                <rect x="65" y="20" width="35" height="20" rx="3" fill="#14365F" opacity="0.2"/>
                                <rect x="25" y="50" width="35" height="20" rx="3" fill="#14365F" opacity="0.2"/>
                                <rect x="65" y="50" width="35" height="20" rx="3" fill="#E8712C" opacity="0.3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Profile Mapped</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Books and Reconciliation</h3>
                    <p class="step-description">Profit and Loss Account, Balance Sheet, Section 32 depreciation chart (computers and software 40 percent WDV, general plant 15 percent WDV). Reconcile GSTR-1 turnover (export at zero-rate plus domestic at 18 percent) to ITR turnover. AIS / TIS reconciliation. FIRC tracking by invoice with realization date for Section 10AA(4A) 6-month export proceeds compliance.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>P&amp;L and Balance Sheet</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR to ITR reconciliation</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="60" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="25" y1="30" x2="95" y2="30" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="25" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                <line x1="25" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                <line x1="25" y1="62" x2="70" y2="62" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Books Tied</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Section 10AA SEZ Computation</h3>
                    <p class="step-description">For pre-Apr 2021 SEZ unit IT firms within 15-year window: identify deduction year (1-5 100 percent / 6-10 50 percent / 11-15 50 percent ploughback). Compute formula = (Profit of unit x Export turnover of unit) / Total turnover of business. Form 56F audit by CA. SEZ Reinvestment Reserve Account if year 11+. CANNOT opt new tax regime Section 115BAC.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15-year window check</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 56F audit</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="32" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                <path d="M48 50l8 8 18-18" stroke="#E8712C" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                <text x="60" y="92" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SEZ 10AA</text>
                            </svg>
                        </div>
                        <span class="illustration-label">SEZ Verified</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">LUT Renewal and Export Documentation</h3>
                    <p class="step-description">LUT in Form GST RFD-11 for FY 2026-27 if not yet filed (must be filed before first export of FY). Annexure-1 reconciliation of FY 2025-26 exports to FIRC realization. Tracking purpose codes (P0802 software services, P0803 IT enabled services, P0805 software products) for FEMA compliance. Annual export turnover certificate.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT Form GST RFD-11</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIRC purpose codes</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="65" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="25" width="40" height="6" rx="2" fill="#E8712C"/>
                                <line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="30" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <circle cx="80" cy="65" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                <path d="M76 65l3 3 6-6" stroke="#E8712C" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">LUT Filed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Transfer Pricing Section 92E Compliance</h3>
                    <p class="step-description">For IT firms with international related party transactions: FAR analysis (Functions performed, Assets used, Risks assumed). Method selection - TNMM (cost plus markup) most common for IT services; benchmarking against comparable Indian IT services firms. Margin range typically 10-15 percent net profit on cost. TP study documentation per Section 92D and Rule 10D. Form 3CEB by 31 October 2026; ITR by 30 November 2026.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FAR analysis</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TNMM benchmarking</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="55" width="14" height="30" fill="#14365F" opacity="0.5"/>
                                <rect x="40" y="40" width="14" height="45" fill="#E8712C"/>
                                <rect x="60" y="30" width="14" height="55" fill="#14365F" opacity="0.5"/>
                                <rect x="80" y="50" width="14" height="35" fill="#14365F" opacity="0.3"/>
                                <line x1="15" y1="85" x2="100" y2="85" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="20" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TNMM</text>
                            </svg>
                        </div>
                        <span class="illustration-label">TP Benchmarked</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">ESOP and Salary Optimization</h3>
                    <p class="step-description">For ESOP-issuing companies: identify exercise events during FY; compute Section 17(2)(vi) perquisite (FMV at exercise minus exercise price); employer TDS Section 192 reflected in Form 24Q quarterly returns. For DPIIT Section 80-IAC eligible startups - invoke Section 156 deferral - perquisite tax deferred to earlier of sale / 5 years from AY of exercise / employment cessation. Coordinate with Pvt Ltd ITR-6 and partner-level individual ITRs.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 17(2)(vi) perquisite</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 80-IAC deferral</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="40" cy="50" r="8" fill="#E8712C" opacity="0.7"/>
                                <circle cx="60" cy="50" r="8" fill="#E8712C" opacity="0.7"/>
                                <circle cx="80" cy="50" r="8" fill="#E8712C" opacity="0.7"/>
                                <text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP</text>
                                <text x="60" y="73" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">FMV - Exercise</text>
                            </svg>
                        </div>
                        <span class="illustration-label">ESOP Tax Mapped</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">ITR Filing and Multi-Schedule Coordination</h3>
                    <p class="step-description">File entity-appropriate ITR on incometax.gov.in. Schedule FSI foreign income; Schedule FA foreign assets (ROR mandatory); Schedule TR tax relief with Form 67; Schedule BP firm-level for partnership / LLP. E-verify within 30 days. Coordinate Form 3CEB filing for TP cases. Track Form 56F filing for SEZ cases. Respond to Section 143(1) intimation.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR e-filed and verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All schedules covered</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="10" width="70" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="14" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                <path d="M53 35l5 5 9-10" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                <line x1="35" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="1.5" stroke-linecap="round"/>
                                <line x1="35" y1="68" x2="80" y2="68" stroke="#14365F" stroke-width="1" opacity="0.5"/>
                                <line x1="35" y1="76" x2="75" y2="76" stroke="#14365F" stroke-width="1" opacity="0.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">ITR Filed</span>
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
            <h2 class="section-title">Document Checklist for IT Services / Software Firm ITR</h2>
            <div class="content-text">
                
                
            <p>Every IT services and software firm ITR engagement starts with this document checklist. Send these along with your Master Services Agreement to begin.</p>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">A. Entity and Identity</h3>
            <ul>
                <li>PAN of entity; GSTIN; LLPIN / CIN / Firm registration; IEC certificate (where applicable)</li>
                <li>Partnership Deed / LLP Agreement / Memorandum and Articles of Association</li>
                <li>Bank account details for refund (separate accounts for INR and EEFC where applicable)</li>
                <li>DSC of authorized signatory (Class 3, valid)</li>
                <li>For SEZ units: Letter of Approval (LOA) and Bond-cum-Legal Undertaking (BLU)</li>
                <li>For DPIIT startups: DPIIT recognition certificate; Section 80-IAC eligibility certificate</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">B. Books of Accounts and Financial Statements</h3>
            <ul>
                <li>Profit and Loss Account FY 2025-26 with revenue split - domestic services (with 18 percent GST) / export services (zero-rated) / SEZ supplies</li>
                <li>Balance Sheet as on 31 March 2026</li>
                <li>Trial balance and ledger extracts</li>
                <li>Section 32 depreciation chart - computers and software (40 percent WDV) and general plant (15 percent WDV)</li>
                <li>Fixed asset register with addition / disposal log</li>
                <li>Receivables aging by client (domestic INR vs foreign USD/EUR/GBP)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">C. Export of Services Documentation</h3>
            <ul>
                <li>LUT acknowledgement Form GST RFD-11 for FY 2025-26</li>
                <li>Master Services Agreement (MSA) and Statement of Work (SoW) with each foreign client</li>
                <li>GSTR-1 export details (Table 6A)</li>
                <li>GSTR-3B with zero-rated supply reported in Table 3.1(b)</li>
                <li>FIRC for each foreign remittance with purpose code and realization date</li>
                <li>Bank statements (USD / EUR / GBP) showing forex realization</li>
                <li>EEFC (Exchange Earners Foreign Currency) account statements where applicable</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">D. SEZ Documentation (where applicable)</h3>
            <ul>
                <li>SEZ Letter of Approval (LOA) - dated before 31 March 2021 for Section 10AA eligibility</li>
                <li>Annual Performance Report (APR) submitted to Development Commissioner</li>
                <li>SEZ Online quarterly performance report</li>
                <li>NFE (Net Foreign Exchange) computation cumulative for 5-year block</li>
                <li>Form 56F audit report by CA (separate per SEZ unit)</li>
                <li>SEZ Reinvestment Reserve Account ledger (years 11-15)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">E. Transfer Pricing Documentation (where applicable)</h3>
            <ul>
                <li>List of all international related party transactions (intra-group services, royalty, interest, transfer pricing adjustments)</li>
                <li>Group structure chart and shareholding pattern</li>
                <li>TP study with FAR analysis (Functions, Assets, Risks)</li>
                <li>Method selection rationale (CUP / RPM / CPM / PSM / TNMM / Other)</li>
                <li>Benchmarking analysis with comparable companies (Prowess / Capitaline / TP Catalyst search)</li>
                <li>Inter-company agreements and invoices</li>
                <li>Master File and Country-by-Country Report (where group consolidated revenue above Rs 500 crore)</li>
                <li>Form 3CEB acknowledgement (filed by 31 October 2026)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">F. ESOP Documentation (where applicable)</h3>
            <ul>
                <li>ESOP scheme document approved by Board / Members</li>
                <li>ESOP grant letters per employee</li>
                <li>ESOP exercise notices during FY</li>
                <li>FMV computation by Merchant Banker / CA for unlisted shares (Rule 11UA)</li>
                <li>Section 17(2)(vi) perquisite computation per employee</li>
                <li>Form 24Q quarterly TDS returns reflecting ESOP perquisite</li>
                <li>For Section 80-IAC startups: deferral claim in Form 12BA per employee</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">G. Foreign Vendor Payment Documentation (where applicable)</h3>
            <ul>
                <li>Invoices from foreign vendors (SaaS subscriptions, foreign consultants, advertising platforms)</li>
                <li>DTAA tax residency certificate of foreign vendor</li>
                <li>Form 15CA / 15CB for outward remittance</li>
                <li>Section 195 TDS challans</li>
                <li>Equalisation Levy challans / Form 1 statement for FY 2024-25 if applicable (note: 6 percent EL on online advertisement abolished w.e.f. 1 April 2025; no new EL for FY 2025-26 onwards)</li>
                <li>No-PE declaration from foreign vendor (where applicable)</li>
            </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IT Services / Software Firm ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td>"Our Bengaluru SaaS company has FY 2025-26 export revenue Rs 4.5 crore from US clients (cost-plus 12 percent margin from US parent). We forgot to file LUT for FY 2025-26. We have been paying 18 percent IGST on each invoice and waiting for refund. Refund cycles are 90-180 days. Working capital is squeezed."</td>
                            <td>This is a recoverable situation but losing time-value of money. LUT in Form GST RFD-11 should be filed FIRST every FY before any export invoice. For FY 2025-26 you must continue with-IGST-refund route through 31 March 2026 - file refund applications RFD-01A regularly. For FY 2026-27 starting 1 April 2026, file LUT before first invoice. Patron will: (a) file LUT for FY 2026-27 immediately; (b) accelerate FY 2025-26 refund cycles via RFD-01A with proper Annexure documentation; (c) coordinate with <a href="/gst-refund">/gst-refund</a> team. ALSO CRITICAL - your US parent relationship makes you a captive subsidiary. Transfer pricing Section 92E + Form 3CEB by 31 October 2026 is MANDATORY. We will conduct TP study with TNMM method, benchmark against Indian IT services comparables, document arms length pricing for the 12 percent margin (likely defensible if comparable range supports). Section 271AA penalty 2 percent of transaction value (potentially Rs 9 lakh on Rs 4.5 crore) avoidable with proper documentation.</td>
                        </tr>
                        <tr>
                            <td>"We are a Pune SEZ Unit IT firm operating since 2018 - within Section 10AA 15-year window. Our previous CA filed FY 2024-25 ITR-6 without Form 56F audit report. Did we lose Section 10AA deduction for that AY?"</td>
                            <td>AT RISK but RECOVERABLE through Section 139(8A) updated return. Form 56F is the SEZ-specific audit report by Chartered Accountant verifying eligibility, separate books, export turnover formula, and FX realization. Without Form 56F, AO can disallow Section 10AA deduction in scrutiny. For FY 2024-25 (AY 2025-26): (a) compute revised ITR-6 with Form 56F audit; (b) file updated return Section 139(8A) with 25 percent additional tax and interest by 31 March 2027; (c) carry forward unutilized deduction within 15-year window. For FY 2025-26 (AY 2026-27) ONGOING: ensure Form 56F filed by 30 September 2026 alongside Form 3CD tax audit. Verify that you opted OUT of new tax regime Section 115BAC - because Section 10AA cannot be claimed under new regime. If you are in years 11-15, ensure SEZ Reinvestment Reserve Account is properly maintained and used only for plant and machinery. Patron will also audit your NFE cumulative compliance and Annual Performance Report submissions.</td>
                        </tr>
                        <tr>
                            <td>"Our IT Pvt Ltd in Gurugram has FY 2025-26 export revenue Rs 8 crore from 3 foreign clients (UK enterprise, US startup, Australian agency). All are unrelated parties. ITC accumulation due to LUT export = approximately Rs 14.4 lakh. Can we get this refunded?"</td>
                            <td>YES - this is zero-rated supply refund under Section 54 of CGST Act 2017 (different from inverted duty refund). Two refund options: (a) zero-rated supply WITH IGST payment + claim refund of IGST; (b) zero-rated supply WITHOUT IGST payment (using LUT) + claim refund of accumulated unutilized ITC. You appear to be on Option (b) with LUT in place. Refund formula: Refund Amount = (Turnover of zero-rated supply of services x Net ITC) / Adjusted Total Turnover. Form RFD-01 monthly or quarterly cycles. Time limit 2 years from end of relevant period. Documentation: GSTR-1 with Table 6A export details, GSTR-3B Table 3.1(b) zero-rated supply, FIRC for forex realization, LUT acknowledgement, statement of invoices with shipping bill / FIRC linkage. Patron coordinates with <a href="/gst-refund">/gst-refund</a> service for end-to-end refund handling - first refund typically credited within 90 days.</td>
                        </tr>
                        <tr>
                            <td>"Our IT Pvt Ltd is DPIIT-recognized startup eligible under Section 80-IAC. We issued ESOPs to 8 employees in FY 2024-25 with exercise price Rs 100 each; FMV at exercise was Rs 850. Total perquisite = Rs 60 lakh. Our employees do not have liquidity to pay perquisite tax. What can we do?"</td>
                            <td>Use Section 156 deferral introduced by Finance Act 2020 specifically for this situation. For DPIIT-recognized Section 80-IAC eligible startups, ESOP perquisite tax under Section 17(2)(vi) is DEFERRED from exercise to earlier of: (a) date of sale of shares; (b) 5 years from end of AY of exercise; (c) date of cessation of employment. So for FY 2024-25 exercise in AY 2025-26, deferral runs to 31 March 2030 OR earlier sale / cessation. Implementation steps: (1) verify Section 80-IAC eligibility certificate from DPIIT; (2) verify entity is incorporated less than 10 years, turnover less than Rs 100 crore, eligible business; (3) employees individually opt for deferral; (4) employer Form 12BA reflects deferred perquisite per employee; (5) employer tracks shares per employee with disposal flag; (6) on triggering event, perquisite tax and interest paid by employee within 14 days. Critical caution: deferral is on the perquisite TAX, not the perquisite VALUE - the FMV at original exercise date is locked. Patron will issue ESOP scheme document amendment if required and individual employee deferral letters. Also coordinate FMV computation by Merchant Banker per Rule 11UA for unlisted share valuation defensibility.</td>
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
            <h2 class="section-title">Fees for ITR Filing - IT Services and Software Firms</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Sole Prop IT freelancer ITR-3 / ITR-4</td><td>Starting Rs 7,999 (Exl GST and Govt. Charges)</td><td>ITR filing, Schedule FSI / FA where applicable, Section 32 depreciation</td></tr>
                        <tr><td>Partnership / LLP IT services ITR-5</td><td>Starting Rs 12,999 (Exl GST and Govt. Charges)</td><td>ITR-5 with Section 40(b) FA 2025 slabs, partner allocation, Schedule FSI / FA / TR</td></tr>
                        <tr><td>IT Pvt Ltd / OPC ITR-6</td><td>Starting Rs 18,999 (Exl GST and Govt. Charges)</td><td>ITR-6, MAT computation, Section 115BAA / 115BAB regime check, full schedules</td></tr>
                        <tr><td>LUT Renewal (Form GST RFD-11)</td><td>Rs 2,999 (Exl GST and Govt. Charges)</td><td>Annual LUT filing, Annexure-1 reconciliation, export turnover certificate</td></tr>
                        <tr><td>Section 10AA SEZ + Form 56F audit (add-on)</td><td>Rs 14,999 (Exl GST and Govt. Charges)</td><td>Form 56F audit, Section 10AA computation, SEZ Reinvestment Reserve memo</td></tr>
                        <tr><td>Transfer Pricing Section 92E + Form 3CEB (add-on)</td><td>Rs 24,999 (Exl GST and Govt. Charges)</td><td>TP study, FAR analysis, benchmarking, Form 3CEB 22 clauses, CA UDIN</td></tr>
                        <tr><td>Section 44AB Tax Audit (Form 3CD) (add-on)</td><td>Rs 9,999 (Exl GST and Govt. Charges)</td><td>Form 3CA / 3CB and Form 3CD 44 clauses, CA UDIN</td></tr>
                        <tr><td>Master File and CbCR (Transfer Pricing)</td><td>Rs 49,999 (Exl GST and Govt. Charges)</td><td>Master File and Country-by-Country Report (group revenue above Rs 500 crore)</td></tr>
                        <tr><td>ESOP Section 80-IAC deferral coordination</td><td>Rs 9,999 (Exl GST and Govt. Charges)</td><td>Per-employee deferral memo, Form 12BA, FMV defence</td></tr>
                        <tr><td>FMV computation Rule 11UA (Merchant Banker)</td><td>Rs 24,999 (Exl GST and Govt. Charges)</td><td>Unlisted share FMV per Rule 11UA Method 1 / 2</td></tr>
                        <tr><td>Form 15CA / 15CB foreign vendor TDS</td><td>Rs 1,999 per remittance (Exl GST and Govt. Charges)</td><td>CA certification, DTAA application, Section 195 compliance</td></tr>
                        <tr><td>Equalisation Levy historical clean-up (FY 2024-25 final filings)</td><td>Rs 4,999 (Exl GST and Govt. Charges)</td><td>Last Form 1 due 30 June 2025; 6 percent EL abolished 1 April 2025; no fresh EL for FY 2025-26</td></tr>
                        <tr><td>Multi-state IT firm (multi-GSTIN)</td><td>Starting Rs 24,999 (Exl GST and Govt. Charges)</td><td>Multi-state GST reconciliation and ITR consolidation</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td><strong>Starting Rs 7,999 (Exl GST and Govt. Charges)</strong></td><td>Sole prop ITR floor; tiered upward by entity type and add-ons above</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for IT Service Firms consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20It%20Service%20Firms%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        
                        <tr><td>Sole Proprietor IT freelancer ITR</td><td>5-7 working days</td><td>31 July 2026</td></tr>
                        <tr><td>Partnership / LLP IT services ITR-5</td><td>10-14 working days</td><td>31 July 2026</td></tr>
                        <tr><td>IT Pvt Ltd / OPC ITR-6 (non-audit)</td><td>14-21 working days</td><td>31 October 2026 (default audit applicable for companies)</td></tr>
                        <tr><td>Tax Audit Form 3CD + audit-case ITR</td><td>21-30 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR)</td></tr>
                        <tr><td>Section 10AA SEZ + Form 56F audit</td><td>14-21 working days</td><td>30 September 2026 (alongside Form 3CD)</td></tr>
                        <tr><td>Transfer Pricing Form 3CEB</td><td>30-45 working days</td><td>31 October 2026; ITR by 30 November 2026</td></tr>
                        <tr><td>Master File + CbCR (large groups)</td><td>60-90 working days</td><td>31 October / 30 November 2026</td></tr>
                        <tr><td>LUT Renewal</td><td>2-3 working days</td><td>Before first export of FY (31 March each year)</td></tr>
                        <tr><td>ESOP Section 80-IAC deferral</td><td>7-14 working days</td><td>Before exercise event (employee opt-in)</td></tr>
                        <tr><td>Form 15CA / 15CB foreign remittance</td><td>1-2 working days per remittance</td><td>Before remittance to foreign vendor</td></tr>
                        <tr><td>Equalisation Levy historical clean-up (FY 2024-25)</td><td>1-2 working days per filing</td><td>Last Form 1 due 30 June 2025; 6 percent EL abolished w.e.f. 1 April 2025</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Urgency note:</strong> LUT must be filed BEFORE first export invoice of FY - missing it means default with-IGST-refund route for entire FY (working capital impact). Section 10AA cannot be claimed under new tax regime Section 115BAC - regime opt-out must happen before due date Section 139(1). Transfer pricing Form 3CEB by 31 October 2026 is INDEPENDENT of ITR due date - missing Form 3CEB triggers Section 271AA penalty 2 percent of transaction value even if ITR filed on time. ESOP Section 80-IAC deferral requires employee opt-in BEFORE exercise event - retroactive deferral generally NOT allowed.

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
            <h2 class="section-title">Why IT Firms Hire a CA Instead of DIY Filing</h2>
        </div>
        
            <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v4H3z"/><path d="M21 7v14H3V7"/><path d="M16 11l-4 4-4-4"/></svg></div>
                    <h3>LUT vs With-IGST-Refund Decision</h3>
                    <p>LUT in Form GST RFD-11 must be filed annually BEFORE first export invoice of FY. Missing LUT = default with-IGST route at 18 percent IGST per invoice with 60-180 day refund cycle - Rs 50 lakh to Rs 4 crore working capital block at IT firm scale. DIY platforms do not handle GST; we file LUT first then ITR.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <h3>Section 10AA SEZ Sunset Awareness</h3>
                    <p>Section 10AA deduction is ONLY for SEZ units commencing operations on or before 31 March 2021. New units post-1 April 2021 ineligible. Existing units within 15-year window must file Form 56F audit alongside ITR every year. CANNOT opt new tax regime Section 115BAC. DIY platforms do not flag SEZ specifics; we audit eligibility year-by-year.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                    <h3>Form 56F Audit Discipline</h3>
                    <p>Section 10AA deduction without Form 56F is at scrutiny risk - AO can disallow entire deduction. Mandatory CA UDIN. Verifies separate books, export turnover formula, FX realization within 6 months Section 10AA(4A). DIY platforms produce ITR without supplementary audit forms; we coordinate CA audit alongside ITR.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3z"/><path d="M9 9h6v6H9z"/></svg></div>
                    <h3>Transfer Pricing TNMM Benchmark</h3>
                    <p>Captive IT subsidiaries of foreign parents must justify cost-plus margin (typically 10-15 percent) via TP study and Form 3CEB by 31 October 2026. Section 271AA penalty 2 percent of transaction value for documentation failure. CBDT scrutiny rate high for cost-plus IT companies. DIY platforms do not handle TP; we conduct FAR analysis, benchmarking, and Form 3CEB filing.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                    <h3>ESOP Section 80-IAC Deferral</h3>
                    <p>DPIIT-recognized startups under Section 80-IAC can defer ESOP perquisite tax to earlier of sale / 5 years / employment cessation - critical for employee liquidity. Default exercise-time taxation creates cash crunch for employees. DIY platforms apply default rule; we structure deferral with employee opt-in.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                    <h3>Schedule FSI / FA / TR Coordination</h3>
                    <p>ROR holding foreign assets must disclose in Schedule FA. Section 43 of Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year. Threshold relief w.e.f. 1 October 2024: foreign assets other than immovable property aggregating up to Rs 20 lakh, and foreign bank balances up to Rs 5 lakh, are outside the penalty net. Foreign source income reported in Schedule FSI even if exempt under Section 10AA. Schedule TR DTAA tax relief with Form 67. DIY platforms commonly miss these; we coordinate full disclosure across FA, FSI, and TR.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 8h20"/><circle cx="6" cy="14" r="1"/></svg></div>
                    <h3>Section 32 Computer Depreciation</h3>
                    <p>40 percent WDV on computers and software vs 15 percent general plant - critical given IT firms have heavy server / laptop / SaaS asset base. Depreciation claim on cloud subscriptions may not qualify (operating cost vs capital expenditure judicial position). DIY platforms apply default 15 percent; we ensure correct 40 percent claim with documentation.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                    <h3>Section 80JJAA Additional Employee Cost</h3>
                    <p>30 percent deduction of additional employee cost for 3 consecutive AYs. Conditions: monthly emoluments up to Rs 25,000 per eligible employee, employed at least 240 days during the previous year, employee participates in recognized Provident Fund, business has at least 10 employees, and the hiring increases the total employee count over the prior year-end. Form 10DA CA certificate required, filed one month before ITR due date. IT firms hiring junior developers, QA / support staff, and entry-level operations staff under the Rs 25,000 cap typically meet criteria; senior-band hires do not. Often missed by DIY platforms; we evaluate eligibility year-by-year and prepare Form 10DA.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
                    <h3>Section 195 TDS and Form 15CA / 15CB on Foreign Remittances</h3>
                    <p>For FY 2025-26 (AY 2026-27), Equalisation Levy is essentially closed: 2 percent EL abolished 1 August 2024 (Finance Act 2024) and 6 percent EL on online advertisement abolished 1 April 2025 (Finance Act 2025). However, Section 195 TDS on payments to non-residents continues. Form 15CB CA certification required for payments above Rs 5 lakh per FY. DTAA application for reduced rate. Form 15CA mandatory online declaration. DIY platforms do not handle this; we issue per-remittance forms.</p>
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
                
                
            <p>Real outcomes from IT services and software firm engagements. Names anonymized; sector and geography preserved.</p>

            <div style="display:grid;grid-template-columns:1fr;gap:20px;margin-top:24px;">
                <div style="background:#FEF4EE;border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;">
                    <p style="font-weight:700;color:var(--blue);margin-bottom:8px;">CloudVault SaaS Pvt Ltd - Bengaluru SaaS firm (FY 2025-26 export Rs 4.5 crore from US clients, captive subsidiary of US parent)</p>
                    <p style="font-style:italic;color:var(--text-secondary);margin-bottom:0;">"We are a Bengaluru-based SaaS firm operating as captive subsidiary of US parent. Our previous accountant filed ITR-6 without LUT for FY 2025-26 - we paid Rs 81 lakh IGST on export invoices and were waiting for refund. Patron immediately took over: (a) filed LUT for FY 2026-27 for all future exports zero-rated without IGST; (b) accelerated FY 2025-26 IGST refund via RFD-01A monthly cycles - Rs 60 lakh credited within 4 months, balance pending; (c) crucial - identified that Form 3CEB transfer pricing report was missed for FY 2024-25 putting us at Section 271AA penalty 2 percent risk (potentially Rs 9 lakh). Patron conducted TNMM-based TP study with Indian IT services comparables; 12 percent margin defensible within arms length range. Filed Form 3CEB with proper documentation. Total benefit: Rs 81 lakh refund accelerated + Rs 9 lakh TP penalty prevented + ongoing LUT enabled zero-rated exports."</p>
                </div>

                <div style="background:#F4F7FB;border-left:4px solid var(--blue);padding:20px 24px;border-radius:8px;">
                    <p style="font-weight:700;color:var(--blue);margin-bottom:8px;">TechBridge IT Services - Pune SEZ unit IT firm (operating since 2018, FY 2025-26 turnover Rs 22 crore)</p>
                    <p style="font-style:italic;color:var(--text-secondary);margin-bottom:0;">"We are a Pune SEZ Unit IT firm operating since 2018 - within Section 10AA 15-year window. Our previous CA filed FY 2024-25 ITR-6 WITHOUT Form 56F audit report and we wrongly opted new tax regime Section 115BAC. Patron flagged BOTH errors at intake: (a) Section 10AA cannot be claimed under new regime - we forfeited the deduction in FY 2024-25 (approximately Rs 1.8 crore tax exposure); (b) Form 56F audit was missing creating additional scrutiny risk. Patron filed updated return Section 139(8A) for FY 2024-25 (AY 2025-26) with regime opt-out, Form 56F audit retroactively conducted, Section 10AA deduction claimed - 25 percent additional tax + interest paid but Rs 1.8 crore deduction restored = net benefit Rs 1.4 crore. For FY 2025-26 ongoing - ensured regime opt-out, Form 56F audit alongside Form 3CD, Section 10AA computation with SEZ Reinvestment Reserve preparation (we are entering year 8). Patron now manages entire SEZ compliance including NFE tracking and APR submission to Development Commissioner."</p>
                </div>
            </div>

            <p style="margin-top:24px;font-size:14px;color:var(--text-muted);">With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves IT services and software firms across major IT cluster geographies. Coverage: Pune (IT services in Hinjewadi / Magarpatta / Kharadi, SEZ-located firms in Rajiv Gandhi Infotech Park, captive units of multinationals); Mumbai (BFSI tech, fintech, mobile applications, IT consultancy); Delhi NCR (Gurugram software firms in Cyber City and Cyber Hub, Noida IT firms in Sector 62/63/132/137, e-commerce technology, edtech); Gurugram (premium consulting firms, AI/ML startups, SaaS unicorns). For Bengaluru, Hyderabad, and Chennai IT firms, we coordinate via virtual office and on-site visits at SEZ campuses.</p>

            <p style="margin-top:16px;font-weight:700;color:var(--blue);"><strong>Outcome Proof:</strong> Rs 1.5 crore preserved across three IT services engagements in FY 2024-25 - Bengaluru SaaS captive (Rs 81 lakh IGST refund + Rs 9 lakh TP penalty prevention); Pune SEZ IT firm (Rs 1.4 crore Section 10AA deduction restoration); Gurugram IT consulting LLP (Rs 12 lakh annual savings on Section 80JJAA + Section 40(b)).</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LUT Route vs With-IGST-Refund Route</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>LUT Route (without IGST)</th><th>With-IGST-Refund Route</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Governing Provision</td><td>Rule 96A of CGST Rules 2017 + Section 16(3)(a) of IGST Act 2017</td><td>Section 16(3)(b) of IGST Act 2017 + Section 54 of CGST Act 2017</td></tr>
                        <tr><td>Filing Required</td><td>Form GST RFD-11 (LUT)</td><td>Form GST RFD-01 (refund) per cycle</td></tr>
                        <tr><td>Filing Frequency</td><td>Annual - once per FY</td><td>Monthly or quarterly - rolling claims</td></tr>
                        <tr><td>IGST Charged on Invoice</td><td>NO</td><td>YES - 18 percent on each export invoice</td></tr>
                        <tr><td>Working Capital Impact</td><td>NIL - no IGST blocked</td><td>HIGH - 18 percent of export value blocked until refund</td></tr>
                        <tr><td>Refund Processing Time</td><td>NA - no refund needed</td><td>60-180 days typical</td></tr>
                        <tr><td>Refund Type</td><td>NA</td><td>Cash refund of IGST paid</td></tr>
                        <tr><td>Documentation Complexity</td><td>Simple - LUT form annual</td><td>Complex - per cycle Annexure-1, GSTR-1 reconciliation, FIRC linkage</td></tr>
                        <tr><td>Cancellation Risk</td><td>LOW - LUT continues unless rejected</td><td>HIGH - refund can be rejected or delayed</td></tr>
                        <tr><td>Post-Failure Consequence</td><td>If LUT cancelled, 15-day window to pay IGST + interest</td><td>If refund rejected, IGST already paid; appeal process</td></tr>
                        <tr><td>Best For</td><td>Steady regular exporters with LUT eligibility intact</td><td>New exporters, irregular exporters, exporters with LUT issues</td></tr>
                        <tr><td>Patron Recommendation</td><td><strong>PRIMARY route for all IT exporters</strong></td><td>Fallback only if LUT not feasible</td></tr>
                        <tr><td>Patron Fee</td><td>LUT renewal Rs 2,999 (Exl GST)</td><td>GST refund Rs 4,999 onwards per cycle - see <a href="/gst-refund">/gst-refund</a></td></tr>
                        <tr><td>Time Limit Consideration</td><td>LUT renewable annually</td><td>Refund 2 years from end of relevant period</td></tr>


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
                
                
            <p>IT services and software firms frequently need adjacent compliance work. We bundle these:</p>
            <ul>
                <li><a href="/itr-for-business">ITR for Business (HUB - non-corporate entity types)</a> - Sole prop, partnership, LLP, HUF ITR coverage with Section 44AB tax audit</li>
                <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / Public Ltd / OPC corporate ITR-6 with Section 115BAA / 115BAB regime check</li>
                <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - Cross-entity ITR coverage and form selection guide</li>
                <li><a href="/gst-registration">GST Registration</a> - First-time GST registration for new IT firms with multi-state coverage</li>
                <li><a href="/gst-refund">GST Refund (zero-rated export refunds)</a> - With-IGST-refund cycle handling for IT exporters without LUT</li>
                <li><a href="/tax-planning-services">Tax Planning Services</a> - Year-round tax structuring including regime opt-out and ESOP timing</li>
                <li><a href="/tax-audit">Tax Audit (Section 44AB)</a> - Form 3CD 44 clauses with CA UDIN for IT firms above turnover threshold</li>
                <li><a href="/income-tax-notice">Income Tax Notice Handling</a> - Section 142(1) / 143(3) / 147 / 148 scrutiny response for IT firms</li>
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
                
                
            <p>Every claim, threshold, percentage, and deadline cited on this page is anchored to the governing statute. Patron Accounting tracks these provisions through ICAI publications, CBDT/CBIC notifications, and Finance Act amendments. Below is the consolidated regulatory framework for IT services and software firm ITR.</p>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">Income Tax Act 1961 - Sections Cited</h3>
            <ul>
                <li>Section 10AA - SEZ unit deduction with 100/50/50 schedule across 15 years; sunset 1 April 2021 for new units (Finance Act 2016)</li>
                <li>Section 17(2)(vi) - ESOP perquisite at exercise (FMV minus exercise price) with TDS Section 192</li>
                <li>Section 32 - Depreciation (computers and software 40 percent WDV, general plant 15 percent WDV)</li>
                <li>Section 35(2AB) - Weighted deduction 100 percent on R&amp;D expenditure</li>
                <li>Section 44AB - Tax audit threshold (Rs 1 crore / Rs 10 crore digital business; Rs 50 lakh profession)</li>
                <li>Section 44ADA - Presumptive 50 percent for specified professions (technical consultancy where applicable)</li>
                <li>Section 80-IAC - Eligible startup deduction with Section 156 ESOP deferral (Finance Act 2020)</li>
                <li>Section 80JJAA - 30 percent additional employee cost deduction for 3 consecutive AYs</li>
                <li>Section 92E - Transfer pricing report by accountant (Form 3CEB)</li>
                <li>Section 92BA - Specified Domestic Transactions threshold Rs 20 crore</li>
                <li>Section 115BAA / 115BAB / 115BAC - Concessional and new tax regimes</li>
                <li>Section 195 - Withholding tax on payments to non-residents</li>
                <li>Section 271AA - Transfer pricing penalty 2 percent of transaction value</li>
                <li>Section 234A / 234B / 234C / 234F - Interest and late filing fee</li>
                <li>Section 139(1) / 139(4) / 139(5) / 139(8A) - Return filing windows including updated return</li>
                <li>Section 142(1) / 143(1) / 143(3) / 147 / 148 - Assessment and reassessment provisions</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">GST and Indirect Tax Framework</h3>
            <ul>
                <li>Section 16(3) of IGST Act 2017 - Zero-rated supply with two routes (LUT or with-IGST-refund)</li>
                <li>Rule 96A of CGST Rules 2017 - LUT mechanics in Form GST RFD-11</li>
                <li>Section 54 of CGST Act 2017 - Refund framework for zero-rated supply and inverted duty</li>
                <li>Section 122 / 125 - Penalty for LUT condition violation</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">Other Statutory Anchors</h3>
            <ul>
                <li>SEZ Act 2005 + SEZ Rules 2006 - SEZ unit definition, Letter of Approval, NFE compliance</li>
                <li>FEMA 1999 + RBI Master Direction on Export of Services - Convertible foreign exchange compliance</li>
                <li>Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act 2015 - Section 43 Schedule FA non-disclosure penalty Rs 10 lakh per defaulting year (w.e.f. 1 October 2024 threshold relief for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh)</li>
                <li>Income Tax Rules 1962 - Schedule II depreciation, Rule 10D TP documentation, Rule 11UA FMV</li>
                <li>CBDT Transfer Pricing Safe Harbour Rules (Rule 10TA, 10TB, 10TC)</li>
                <li>Finance Act 2016 (Section 10AA sunset; Equalisation Levy 6 percent on online advertisement introduced), Finance Act 2020 (Section 156 ESOP deferral; Equalisation Levy 2 percent on e-commerce introduced), Finance Act 2024 (Equalisation Levy 2 percent on e-commerce abolished w.e.f. 1 August 2024), Finance Act 2025 (Equalisation Levy 6 percent on online advertisement abolished w.e.f. 1 April 2025)</li>
            </ul>

            <h3 style="font-size:18px;margin-top:24px;margin-bottom:12px;color:var(--blue);">Key Government References</h3>
            <ul>
                <li><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department (incometax.gov.in)</a> - ITR utilities, Section 10AA / 92E / 17(2)(vi) FAQ, Form 3CD, Form 3CEB, Form 56F</li>
                <li><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">Central Board of Indirect Taxes and Customs (cbic.gov.in)</a> - LUT Manual, Section 16(3) IGST circular</li>
                <li><a href="https://www.sezindia.gov.in" target="_blank" rel="noopener">Special Economic Zones in India (sezindia.gov.in)</a> - LOA, NFE, APR, SEZ Online portal</li>
                <li><a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code (indiacode.nic.in)</a> - Statutory text of Income Tax Act 1961, IGST Act 2017, SEZ Act 2005</li>
            </ul>

            <p style="margin-top:18px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>


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
                    <p class="faq-expanded__lead">Answers to the most common questions IT services and software firm founders ask before filing ITR.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for IT Service Firms',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should an IT services firm file?</h3>
                        <div class="faq-expanded__a"><p>Depends on entity type. Sole proprietor IT freelancer / consultant: ITR-3 (regular books) or ITR-4 SUGAM (Section 44ADA presumptive only if technical consultancy classification holds; software development typically does NOT qualify). Partnership Firm or LLP IT services: ITR-5. Private Limited Company / OPC / Public Limited Company IT services: ITR-6 (with corporate rates 22 percent / 25 percent / 30 percent depending on regime). HUF with IT business: ITR-3 / ITR-4. Never ITR-1 (no business income head).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is LUT mandatory for export of IT services?</h3>
                        <div class="faq-expanded__a"><p>NO - LUT is OPTIONAL but strongly recommended. Two routes: (a) LUT in Form GST RFD-11 under Rule 96A CGST Rules 2017 - zero-rated supply WITHOUT IGST payment; (b) Without LUT - pay 18 percent IGST on each export invoice and claim refund subsequently (60-180 day cycle). LUT requires annual filing each FY before first export invoice. Working capital implication of without-LUT route is significant for IT firms - we recommend LUT as primary route for all regular IT exporters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can a new SEZ unit claim Section 10AA deduction in 2026?</h3>
                        <div class="faq-expanded__a"><p>NO. Section 10AA sunset clause (inserted by Finance Act 2016) bars new SEZ units commencing operations on or after 1 April 2021 from claiming Section 10AA deduction. Existing SEZ units that commenced operations on or before 31 March 2021 continue to claim deduction for full 15-year period (100 percent first 5 years, 50 percent next 5 years, 50 percent reinvested via SEZ Reinvestment Reserve next 5 years). Mandatory Form 56F audit and CANNOT opt new tax regime Section 115BAC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the depreciation rate on computers and software?</h3>
                        <div class="faq-expanded__a"><p>Section 32 of Income Tax Act 1961 with Income Tax Rules 1962 Schedule II. Computers and computer software 40 percent WDV (Written Down Value method). General plant and machinery 15 percent WDV. Buildings 10 percent (factory) / 5 percent (other). Furniture 10 percent. Section 32(1)(iia) additional 20 percent on new plant and machinery NOT available to IT services since IT services classified as services not manufacturing per judicial precedents.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are ESOPs taxed when exercised by IT employees?</h3>
                        <div class="faq-expanded__a"><p>Section 17(2)(vi) of Income Tax Act 1961. At exercise of ESOP - difference between Fair Market Value of share at exercise date AND exercise price (price paid by employee) added to salary income as perquisite. Employer deducts TDS under Section 192. Subsequent sale of acquired shares triggers capital gains - cost basis equals FMV at exercise (already taxed). For DPIIT-recognized startups under Section 80-IAC, perquisite tax can be DEFERRED under Section 156 (Finance Act 2020) to earlier of sale / 5 years / employment cessation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is transfer pricing applicable to IT services exporting to a parent company abroad?</h3>
                        <div class="faq-expanded__a"><p>YES. IT services exporting to foreign parent / subsidiary / associate / sister concern triggers transfer pricing under Section 92E. NO threshold for international transactions - any amount triggers Form 3CEB by 31 October 2026; ITR by 30 November 2026. TP study with FAR analysis, method selection (TNMM most common for IT services - cost-plus markup typically 10-15 percent), benchmarking against comparable Indian IT services firms. Section 271AA penalty 2 percent of transaction value for documentation failure. Specified Domestic Transactions threshold Rs 20 crore aggregate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are software development services eligible for Section 44ADA presumptive?</h3>
                        <div class="faq-expanded__a"><p>GENERALLY NO. Section 44ADA presumptive at 50 percent of receipts is restricted to specified professions - legal, medical, engineering, architectural, accountancy, technical consultancy, interior decoration, OR notified profession. Software development is typically classified as BUSINESS not profession, so Section 44ADA does NOT apply. IT consultancy (advisory services) may qualify as technical consultancy under Section 44AA(1) notified professions and qualify for Section 44ADA. Fact-specific evaluation required. Eligibility limited to Resident Individual / Firm only (NOT LLP, NOT Company, NOT HUF). Threshold Rs 75 lakh (95 percent digital) / Rs 50 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the Schedule FSI in ITR for IT services exporters?</h3>
                        <div class="faq-expanded__a"><p>Schedule FSI (Foreign Source Income) is a section in ITR-3 / ITR-5 / ITR-6 disclosing income earned outside India taxable in India. Country-wise breakdown of foreign income, tax paid in source country, DTAA application. Mandatory disclosure for all assessees with foreign source income regardless of taxability. Companion schedules: Schedule FA (Foreign Assets - mandatory for ROR; Section 43 Black Money Act 2015 prescribes Rs 10 lakh penalty per defaulting year; w.e.f. 1 October 2024 threshold relief for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh) and Schedule TR (Tax Relief - DTAA Section 90/90A or unilateral relief Section 91 with Form 67 foreign tax credit).</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
            <p><strong>Q: Section 10AA SEZ sunset?</strong><br>A: 1 April 2021 for new units. Existing units that commenced on or before 31 March 2021 continue 15-year window.</p>
            <p><strong>Q: LUT for export of services?</strong><br>A: Form GST RFD-11; annual; zero-rated without IGST. Rule 96A CGST Rules.</p>
            <p><strong>Q: ITR form for IT firm?</strong><br>A: ITR-3 / ITR-4 sole prop; ITR-5 firm / LLP; ITR-6 company. Section 44ADA generally NOT for software dev.</p>
            <p><strong>Q: Computer depreciation?</strong><br>A: 40 percent WDV under Section 32. General plant 15 percent. Section 32(1)(iia) NOT for services.</p>
            <p><strong>Q: ESOP startup deferral?</strong><br>A: Section 156 (FA 2020) for Section 80-IAC startups - sale / 5 years / employment cessation, whichever earliest.</p>
            <p><strong>Q: Transfer pricing applicable?</strong><br>A: Section 92E for ANY international related party. SDT Rs 20 crore threshold. Form 3CEB by 31 October.</p>
            <p><strong>Q: Schedule FA non-disclosure?</strong><br>A: Section 43 Black Money Act 2015 - Rs 10 lakh per defaulting year. Threshold relief from 1 October 2024 for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh.</p>
            <p><strong>Q: Equalisation Levy?</strong><br>A: Both abolished. 2 percent EL on e-commerce abolished 1 August 2024 (Finance Act 2024); 6 percent EL on online advertisement abolished 1 April 2025 (Finance Act 2025). Last Form 1 was for FY 2024-25 due 30 June 2025.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Recap - 7 Firm Dates for IT Firms (AY 2026-27)</h2>
            <div class="content-text">
                
                
            <p>IT services and software firms face SEVEN firm dates plus rolling compliance for AY 2026-27 (FY 2025-26):</p>
            <ul>
                <li><strong>31 March 2026</strong> - LUT renewal Form GST RFD-11 for FY 2026-27 (BEFORE first export)</li>
                <li><strong>31 July 2026</strong> - non-audit ITR-3 / ITR-5 / ITR-6 under Section 139(1)</li>
                <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB; Form 56F SEZ audit alongside</li>
                <li><strong>31 October 2026</strong> - Transfer Pricing Form 3CEB under Section 92E; audit-case ITR for non-TP cases</li>
                <li><strong>30 November 2026</strong> - ITR-3 / ITR-5 / ITR-6 for transfer pricing cases</li>
                <li><strong>31 December 2026</strong> - belated / revised return Section 139(4) / (5) with Section 234F fee</li>
                <li><strong>Quarterly advance tax</strong> - 15 June, 15 September, 15 December, 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative)</li>
            </ul>
            <p style="margin-top:16px;">Rolling deadlines: Form 15CA / 15CB before each foreign vendor remittance with Section 195 TDS application; LUT Annexure-1 monthly export reconciliation; SEZ APR submission per Development Commissioner schedule. (Note: Equalisation Levy is closed for FY 2025-26 onwards - 2 percent EL abolished 1 August 2024; 6 percent EL on online ad abolished 1 April 2025.)</p>
            <p style="margin-top:16px;font-weight:700;color:var(--orange);">Section 10AA cannot be claimed under new tax regime - regime opt-out before due date Section 139(1) mandatory. Section 271AA TP penalty 2 percent of transaction value for documentation failure. ESOP Section 80-IAC deferral requires employee opt-in BEFORE exercise event.</p>
            <p style="margin-top:18px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your IT Firm ITR Filed by a CA Who Reads Your MSA</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p>IT services and software firm ITR is the area where DIY platforms and generalist accountants miss SEVEN industry-specific levers worth 10 to 40 percent of annual profit. LUT in Form GST RFD-11 must be filed annually BEFORE first export invoice of FY. Section 10AA SEZ deduction (sunset 1 April 2021 for new units) for existing pre-2021 SEZ IT firms requires mandatory Form 56F audit. Transfer pricing Section 92E + Form 3CEB by 31 October 2026 is mandatory for IT firms with international related party transactions.</p>
                <p>ESOP perquisite under Section 17(2)(vi) at exercise creates employee cash crunch - DPIIT-recognized Section 80-IAC startups can defer under Section 156. Schedule FSI / FA / TR foreign income disclosure with Section 43 of Black Money Act 2015 prescribing Rs 10 lakh penalty per defaulting year for FA non-disclosure (with w.e.f. 1 October 2024 threshold relief for aggregate non-immovable foreign assets up to Rs 20 lakh and foreign bank balances up to Rs 5 lakh). Section 32 computer and software depreciation 40 percent WDV (vs 15 percent general plant).</p>
                <p>Patron Accounting has filed IT and software sector ITRs for 320+ firms across Bengaluru, Hyderabad, Pune, Gurugram, Noida, Chennai, and Mumbai since 2019 - whether your structure is a sole proprietor freelance developer, a 4-partner consulting LLP, a Pvt Ltd captive subsidiary of US parent, a Pune SEZ IT unit, or a DPIIT-recognized startup issuing ESOPs, the correct answer always begins with entity-type confirmation, LUT eligibility audit, Section 10AA year position check, transfer pricing screening, and ESOP deferral structuring. Free 15-minute consultation - send your MSA, GSTR-3B summary, FIRC log, and SEZ LOA (if applicable) before you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20It%20Service%20Firms%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">We file IT services and software firm ITRs across India with offices in Pune, Mumbai, Delhi, and Gurugram, and remote-delivery for Bengaluru, Hyderabad, Chennai, and Noida IT clusters.</p>
            
            
                <!-- Block 2: Cross-Sell - Adjacent IT and Tax Services (national-level) -->
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
                    <a href="/gst-registration" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">GST Registration</div>
                            <div class="pa-card-sub">India</div>
                        </div>
                    </a>
                    <a href="/gst-refund" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2v20"/><path d="M5 12l7 7 7-7"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">GST Refund</div>
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
                    <a href="/tax-planning-services" class="pa-cross-card">
                        <div class="pa-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:18px;height:18px;"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        </div>
                        <div>
                            <div class="pa-card-title">Tax Planning Services</div>
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
            <p><strong>Content Created:</strong> 08 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">8 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed by CA &amp; CS Team, Patron Accounting LLP. Content reviewed quarterly during ITR season; immediately after Finance Act amendments to Section 10AA / Section 17(2)(vi) / transfer pricing safe harbour rules; review after CBDT and CBIC clarifications on IT-specific issues.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>






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