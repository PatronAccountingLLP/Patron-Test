
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ADT-1 Filing Services</title>
    <meta name="description" content="ADT-1 auditor appointment filing under Section 139 within 15 days of board meeting or AGM. CA reviewed. From Rs 3,000 standalone or bundled with audit.">
    <link rel="canonical" href="/adt-1-filing-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ADT-1 Filing Services 2026 | Patron Accounting">
    <meta property="og:description" content="ADT-1 auditor appointment filing under Section 139 within 15 days of board meeting or AGM. CA reviewed. From Rs 3,000 standalone or bundled with audit.">
    <meta property="og:url" content="/adt-1-filing-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ADT-1 Filing Services 2026 | Patron Accounting">
    <meta name="twitter:description" content="ADT-1 auditor appointment filing under Section 139 within 15 days of board meeting or AGM. CA reviewed. From Rs 3,000 standalone or bundled with audit.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/adt-1-filing-services#breadcrumb",
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
                        "name": "ADT-1 Filing Services",
                        "item": "https://www.patronaccounting.com/adt-1-filing-services"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/adt-1-filing-services#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is Form ADT-1 and when must it be filed?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form ADT-1 is the auditor appointment intimation filed with the Registrar of Companies under Section 139 of the Companies Act, 2013 read with Rule 4 of Companies (Audit and Auditors) Rules, 2014. It must be filed within 15 days of the appointment - whether by Board for the first auditor under Section 139(6) or by Members at the AGM for subsequent 5-year appointment under Section 139(1). For removal of auditor, the deadline extends to 30 days from the decision."
                }
            },
            {
                "@type": "Question",
                "name": "Is ADT-1 required for the first auditor appointment by Board?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Per the Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025, ADT-1 is mandatory for all first auditor appointments, including those made by the Board of Directors within 30 days of incorporation under Section 139(6). The previous Rule 4(2) exemption for first-auditor Board appointments has been removed. Most older content still says first-auditor ADT-1 is exempt - this is no longer accurate."
                }
            },
            {
                "@type": "Question",
                "name": "What is the 5-year auditor appointment term?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 139(1) of the Companies Act, 2013, an auditor appointed at the first AGM holds office from the conclusion of that AGM until the conclusion of the 6th AGM - effectively a 5-year term. Reappointment is then required for another 5 years. Under Section 139(2), audit firm rotation applies every 5 years (individual) or 10 years (firm) for listed companies and prescribed classes. Small companies and OPCs are exempt from rotation."
                }
            },
            {
                "@type": "Question",
                "name": "What documents are needed for ADT-1 filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Required documents include the written consent of the auditor under Section 139, certificate of compliance with Section 141 conditions, board resolution (for first auditor under Section 139(6)) or AGM ordinary resolution (for subsequent appointment under Section 139(1)), auditor PAN and ICAI membership details, firm registration number, term of appointment, and active DSC of both the company signatory and the auditor."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for late filing of ADT-1?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Late ADT-1 filing attracts a multiplier-based additional fee under the Companies (Registration Offices and Fees) Rules, 2014 - 2x normal fee for up to 30 days delay, escalating to 12x for delays beyond 180 days. Section 147(1) imposes a company fine of Rs 25,000 to Rs 5 lakh and an officer-in-default fine of Rs 10,000 to Rs 1 lakh. The auditor faces a Section 147(2) fine of Rs 25,000 to Rs 5 lakh or 4x remuneration whichever is less."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between ADT-1, ADT-2, and ADT-3?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ADT-1 is the auditor appointment intimation filed by the company under Section 139. ADT-2 is an application to the Central Government for removal of an auditor before expiry of term under Section 140(1) read with Rule 7. ADT-3 is the auditor's notice of resignation filed by the auditor (not the company) under Section 140(2) read with Rule 8, within 30 days of resignation. ADT-4 is the fraud reporting form filed by the auditor under Section 143(12)."
                }
            },
            {
                "@type": "Question",
                "name": "Is ADT-1 required for OPCs and small companies?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. ADT-1 is mandatory for every company registered under the Companies Act, 2013 - including One Person Companies and small companies under Section 2(85). Both must appoint an auditor and file ADT-1. The relief for small companies and OPCs lies elsewhere - they are exempt from mandatory auditor rotation under Section 139(2), and small companies are exempt from CARO 2020 reporting. The ADT-1 intimation itself remains mandatory."
                }
            },
            {
                "@type": "Question",
                "name": "Does auditor rotation under Section 139(2) apply to all companies?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. Audit firm rotation under Section 139(2) applies to listed companies, unlisted public companies with paid-up share capital of Rs 10 crore or more, private companies with paid-up share capital of Rs 50 crore or more, and companies with public borrowings of Rs 50 crore or more. Small companies under Section 2(85), OPCs, and other private companies below these thresholds are exempt. Where rotation applies, individual auditor rotates every 5 years and audit firm every 10 years."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "https://www.patronaccounting.com/adt-1-filing-services#service",
                "name": "ADT-1 Filing Services",
                "description": "CA-reviewed Form ADT-1 auditor appointment intimation filing under Section 139 of the Companies Act, 2013. Includes Section 141 eligibility verification, consent and resolution drafting, DSC application, and direct MCA V3 portal submission. Updated for the Companies (Audit and Auditors) Amendment Rules, 2025. Standalone from Rs 3,000 or FREE with Patron statutory audit engagement.",
                "serviceType": "Statutory Compliance Services",
                "provider": { "@id": "https://www.patronaccounting.com/#organization" },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "Auditor",
                        "sameAs": "https://en.wikipedia.org/wiki/Auditor"
                    },
                    {
                        "@type": "Thing",
                        "name": "Companies Act, 2013",
                        "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
                    },
                    {
                        "@type": "Thing",
                        "name": "Institute of Chartered Accountants of India",
                        "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "ADT-1 Filing Service Options",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "ADT-1 Regular",
                            "price": "3000",
                            "priceCurrency": "INR",
                            "description": "ADT-1 form drafted from auditor consent and signed resolution already on file. Filed via MCA V3 portal. Includes DSC application and SRN tracking."
                        },
                        {
                            "@type": "Offer",
                            "name": "ADT-1 with Consent and Resolution Drafting",
                            "price": "4000",
                            "priceCurrency": "INR",
                            "description": "Everything in Regular plus auditor consent under Section 139, Section 141 eligibility certificate, and board / AGM resolution drafting."
                        },
                        {
                            "@type": "Offer",
                            "name": "ADT-1 with Auditor Rotation (Section 139(2))",
                            "price": "5000",
                            "priceCurrency": "INR",
                            "description": "Includes audit firm rotation special resolution drafting for listed and prescribed companies under Section 139(2). UDIN / membership cross-check."
                        },
                        {
                            "@type": "Offer",
                            "name": "Free with Patron Statutory Audit Engagement",
                            "price": "0",
                            "priceCurrency": "INR",
                            "description": "ADT-1 included free where Patron is engaged as the company's statutory auditor under Section 139. Audit engagement fees apply separately based on turnover and complexity."
                        }
                    ]
                }
            }
        ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-6.css') }}?v=1">
@endpush
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
                        ADT-1 Filing Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Auditor consent under Section 139, eligibility certificate under Section 141, and board / AGM resolution.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 3,000 to 5,000 standalone OR included FREE in Patron statutory audit engagement.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every company under Companies Act 2013 - private, public, listed, unlisted, OPC, Section 8.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Within 15 days of board meeting / AGM where auditor is appointed (30 days for removal).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 1,400+ ADT-1 Returns Filed FY 2024-25 | 100% On-Time Rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ADT-1%20filing%20for%20my%20auditor%20appointment%20intimation%20to%20ROC." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ADT-1 Filing Services',
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
            
                <a href="#overview-section" class="toc-btn">TL;DR</a>
                <a href="#what-section" class="toc-btn">What Is ADT-1</a>
                <a href="#who-section" class="toc-btn">Who Must File</a>
                <a href="#services-section" class="toc-btn">What We Deliver</a>
                <a href="#procedure-section" class="toc-btn">7-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pain Points</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Hire a CA</a>
                <a href="#comparison-section" class="toc-btn">First vs Subsequent</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: ADT-1 Filing at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ADT-1 Filing Services Services at a Glance</strong></p>
                    <p>Form ADT-1 is the auditor appointment intimation under Section 139 of the Companies Act, 2013. Filed within 15 days of the appointment (board meeting for first auditor; AGM for subsequent 5-year term). Per the Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025, ADT-1 is now mandatory even for first auditor appointments by Board - previously exempt. Patron files from Rs 3,000 standalone or FREE with the statutory audit engagement.</p>
                </div>
                <p>ADT-1 is the MCA e-form used to intimate the Registrar of Companies of an auditor's appointment under Section 139 of the Companies Act, 2013 read with Rule 4 of the Companies (Audit and Auditors) Rules, 2014. Every company registered under the Act must file ADT-1 every time an auditor is appointed, reappointed, or removed. The form is simple, but the surrounding compliance work - Section 141 eligibility verification, Section 139 consent, board or AGM resolution drafting - is where most defaults originate.</p>
                <p>Below is a quick-reference summary covering governing Act, applicability, timeline, fees, penalties, and forms in the ADT family. Use this as a fast scan before diving into the detail below.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 139, 139(1), 139(2), 139(6), 139(8), 140, 141, 147 read with Rule 4 of Companies (Audit and Auditors) Rules, 2014</td></tr>
                        <tr><td>Applicable To</td><td>Every company under Companies Act, 2013: Private Limited, Public Limited (listed and unlisted), OPC, Section 8</td></tr>
                        <tr><td>Timeline</td><td>Within 15 days of appointment (board meeting for first auditor; AGM for subsequent appointment); 30 days for removal under Section 140</td></tr>
                        <tr><td>Cost (Patron)</td><td>Standalone: Rs 3,000 (regular) to Rs 5,000 (with consent / eligibility drafting). FREE if bundled with statutory audit engagement.</td></tr>
                        <tr><td>Penalty</td><td>Multiplier-based additional fee (2x to 12x normal fee) + Section 147 fine on company Rs 25,000 to Rs 5 lakh; auditor fine Rs 25,000 to Rs 5 lakh or 4x remuneration whichever is less</td></tr>
                        <tr><td>Forms / Portal</td><td>ADT-1 (appointment), ADT-2 (removal application), ADT-3 (resignation), ADT-4 (fraud reporting) via MCA V3 portal</td></tr>
                        <tr><td>Authority</td><td>Registrar of Companies (ROC), Ministry of Corporate Affairs</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;">
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
                <h2 class="section-title">What Is Form ADT-1?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>Form ADT-1 is the MCA e-form used to intimate the Registrar of Companies of an auditor's appointment under Section 139 of the Companies Act, 2013 read with Rule 4 of Companies (Audit and Auditors) Rules, 2014. The form notifies the ROC of the auditor's name, address, PAN, ICAI membership number, firm registration number, term of appointment, and the resolution under which the appointment was made.</p>

                    <div class="highlight-box" style="margin-top:24px;">
                        <p><strong>2025 Amendment - Major Regulatory Change.</strong> Per the Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025, ADT-1 is now mandatory even for first auditor appointments made by the Board of Directors within 30 days of incorporation under Section 139(6). Previously, Rule 4(2) had exempted first-auditor Board appointments from the ADT-1 requirement. This is the single biggest ADT-1 regulatory change in recent years and most competitor content has not been updated to reflect it.</p>
                    </div>

                    <h3 style="margin-top:32px;">ADT-1 vs ADT-2 vs ADT-3 vs ADT-4: The Auditor-Form Family</h3>
                    <p>The Companies Act, 2013 prescribes a family of ADT forms for different stages of the auditor lifecycle. Filing the wrong form for the wrong event causes rejection and re-filing.</p>
                    <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>When to Use</th>
                                <th>Filed By</th>
                                <th>Statutory Reference</th>
                                <th>Deadline</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>ADT-1</td><td>Auditor appointment intimation to ROC (first, subsequent, reappointment, or removal by board)</td><td>Company</td><td>Section 139 + Rule 4</td><td>15 days from appointment (30 days for removal)</td></tr>
                            <tr><td>ADT-2</td><td>Application to Central Government for removal of auditor before expiry of term</td><td>Company</td><td>Section 140(1) + Rule 7</td><td>Within 30 days of board resolution</td></tr>
                            <tr><td>ADT-3</td><td>Auditor's notice of resignation</td><td>Auditor (not company)</td><td>Section 140(2) + Rule 8</td><td>Within 30 days from resignation</td></tr>
                            <tr><td>ADT-4</td><td>Reporting of fraud by auditor to Central Government</td><td>Auditor</td><td>Section 143(12) + Rule 13</td><td>Within prescribed period under Rule 13</td></tr>
                        </tbody>
                    </table>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ADT-1 Filing Services:</strong></p>
                    
                    <p><strong>Form ADT-1:</strong> MCA e-form intimating auditor appointment to ROC under Section 139 of the Companies Act, 2013. Must be filed within 15 days of appointment.</p>
                    <p><strong>Section 139(1):</strong> Subsequent auditor appointment at AGM for a 5-year term - from conclusion of AGM until conclusion of the 6th AGM.</p>
                    <p><strong>Section 139(2):</strong> Audit firm rotation - individual auditor every 5 years, audit firm every 10 years. Applies to listed companies and prescribed classes; small companies and OPCs exempt.</p>
                    <p><strong>Section 139(6):</strong> First auditor appointment by Board within 30 days of incorporation. ADT-1 now mandatory effective 14 July 2025.</p>
                    <p><strong>Section 139(8):</strong> Casual vacancy filling - by Board within 30 days for any vacancy; by EGM within 3 months for vacancy due to resignation.</p>
                    <p><strong>Section 141:</strong> Qualifications and disqualifications of auditor. Body corporate (other than LLP), officers / employees of the company, partners of officers, and indebtedness exceeding Rs 5 lakh are disqualified.</p>
                    <p><strong>Section 147:</strong> Punishment for contravention - company fine Rs 25,000 to Rs 5 lakh; officer fine Rs 10,000 to Rs 1 lakh; auditor fine Rs 25,000 to Rs 5 lakh or 4x remuneration whichever is less.</p>
                    <p><strong>SRN:</strong> Service Request Number - the unique MCA reference generated when ADT-1 is filed. Required for downstream AOC-4 and MGT-7 filings.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ADT-1 Filing Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Auditor Appointment</span>
                        <strong>Section 139 + Rule 4</strong>
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
            <h2 class="section-title">Who Must File ADT-1 - and When?</h2>
            <div class="content-text">
                
                
                <p>Every company registered under the Companies Act, 2013 must file ADT-1 every time an auditor is appointed, reappointed, or removed. This includes:</p>
                <ul>
                    <li>Private limited companies (including small companies under Section 2(85))</li>
                    <li>Public limited companies (listed and unlisted)</li>
                    <li>One Person Companies (OPCs)</li>
                    <li>Section 8 Companies (non-profit)</li>
                    <li>Foreign companies registered under Section 380</li>
                </ul>

                <h3 style="margin-top:24px;">Filing Triggers and Deadlines</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Trigger</th>
                            <th>Section</th>
                            <th>Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>First auditor appointment by Board within 30 days of incorporation</td><td>Section 139(6)</td><td>Within 15 days of board meeting (effective 14 July 2025 per 2025 Amendment Rules)</td></tr>
                        <tr><td>First auditor appointment by members within 90 days of incorporation (if Board fails)</td><td>Section 139(6) proviso</td><td>Within 15 days of EGM</td></tr>
                        <tr><td>Subsequent auditor appointment at first AGM for 5-year term</td><td>Section 139(1)</td><td>Within 15 days of AGM</td></tr>
                        <tr><td>Reappointment at the end of 5-year term</td><td>Section 139(1)</td><td>Within 15 days of AGM</td></tr>
                        <tr><td>Casual vacancy due to auditor resignation</td><td>Section 139(8)(i)</td><td>Within 30 days of EGM (filled within 3 months of board recommendation)</td></tr>
                        <tr><td>Casual vacancy for any other reason</td><td>Section 139(8)(ii)</td><td>Within 30 days of casual vacancy being filled by Board</td></tr>
                        <tr><td>Removal of auditor before term expiry</td><td>Section 140(1) + Section 139</td><td>Within 30 days of decision</td></tr>
                    </tbody>
                </table>
                </div>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>The 5-year term anchor.</strong> Under Section 139(1), an auditor appointed at the first AGM holds office from the conclusion of that AGM until the conclusion of the 6th AGM. Reappointment is then required for another 5 years. Under Section 139(2), audit firm rotation applies every 5 / 10 years for listed companies and certain prescribed companies - small companies and OPCs are exempt.</p>
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
            <h2 class="section-title">What Patron Delivers in ADT-1 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Eligibility Verification under Section 141</strong></td><td>Auditor must be a CA in practice. Section 141(3) disqualifications checked - body corporate, officer / employee, partner / director of officer or employee, indebtedness exceeding Rs 5 lakh. ICAI membership active. FRN valid.</td></tr>
                        <tr><td><strong>2. Section 139 Consent and Section 141 Certificate Drafting</strong></td><td>Written consent of auditor under Section 139 obtained. Certificate of compliance with Section 141 conditions issued by the auditor. Both documents drafted with correct ICAI membership and firm registration references.</td></tr>
                        <tr><td><strong>3. Resolution Drafting (Board or AGM)</strong></td><td>Board resolution under Section 139(6) drafted for first auditor appointment. AGM resolution under Section 139(1) drafted for subsequent / reappointment. Special resolution drafted where audit firm rotation applies under Section 139(2). Resolutions filed in minute book.</td></tr>
                        <tr><td><strong>4. ADT-1 Form Drafting and DSC Application</strong></td><td>Form ADT-1 drafted with auditor details, CIN, period of appointment, financial years covered, and resolution reference. Form digitally signed by Director / CEO / CFO / Manager authorised by the board.</td></tr>
                        <tr><td><strong>5. Direct MCA V3 Portal Submission and SRN Capture</strong></td><td>Filing submitted directly via Patron's MCA V3 portal access. Government filing fee paid as per capital slab. SRN captured and saved - critical because AOC-4 and MGT-7 filings later in the year reference the ADT-1 SRN.</td></tr>
                        <tr><td><strong>6. Auditor Lifecycle Coordination (Bundled with Audit Engagement)</strong></td><td>Where Patron is also engaged as statutory auditor, ADT-1 is included free in the audit engagement. We coordinate the appointment letter, consent, eligibility, ADT-1 filing, and audit kickoff in a single workflow.</td></tr>


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
            <h2 class="section-title">ADT-1 Filing Process: 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From trigger identification through SRN capture - a structured 7-step workflow that finishes inside the 15-day statutory deadline. Patron internal SLA: 3 to 5 working days from data finalisation to filing.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Trigger Identification (Day 1)</h3>
                        <p class="step-description">First auditor, subsequent appointment, reappointment, casual vacancy, or removal? Section under which appointment is made (139(1) / 139(6) / 139(8) / 140) locked. Correct deadline set on calendar - 15 days for appointment, 30 days for removal or casual vacancy.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section identified
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Deadline calendared
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Day 1 - 1 day
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="60" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <path d="M52 42l5 5 11-11" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <line x1="35" y1="65" x2="85" y2="65" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                    <line x1="35" y1="72" x2="70" y2="72" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Trigger Locked</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Auditor Eligibility Verification (Day 1-2)</h3>
                        <p class="step-description">Section 141(3) disqualifications checked - body corporate, officer / employee of company, partner of officer, indebtedness exceeding Rs 5 lakh. ICAI membership active. Firm Registration Number (FRN) valid. Class 3 DSC of auditor verified.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 141(3) cleared
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ICAI membership active
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Class 3 DSC verified
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="40" cy="50" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <path d="M34 50l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <line x1="58" y1="40" x2="92" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="58" y1="50" x2="88" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="58" y1="60" x2="92" y2="60" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Eligibility OK</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Consent and Eligibility Certificate (Day 2-3)</h3>
                        <p class="step-description">Written consent under Section 139 drafted and signed by auditor. Certificate of compliance with Section 141 conditions issued. Both documents filed with the board secretariat. Patron uses standardised templates customised for client's CIN, auditor FRN, and term.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 139 consent signed
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 141 certificate
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Filed with secretariat
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="65" height="75" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="28" y1="28" x2="75" y2="28" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/>
                                    <line x1="28" y1="40" x2="68" y2="40" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="28" y1="50" x2="72" y2="50" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="28" y1="60" x2="65" y2="60" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <path d="M30 72c5 -5 15 -3 20 0c5 3 12 -2 18 -3" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round"/>
                                    <circle cx="92" cy="32" r="10" fill="#10B981"/>
                                    <path d="M87 32l3 3 6 -6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Docs Signed</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Resolution Drafting and Meeting (Day 3-5)</h3>
                        <p class="step-description">Board meeting convened (first auditor) or AGM held (subsequent appointment). Resolution passed under the correct section (139(1) / 139(6) / 139(8) / 140). Special resolution drafted where Section 139(2) rotation applies. Minutes recorded.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Correct section invoked
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Special resolution if rotation
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Minutes recorded
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="35" cy="40" r="6" fill="#E8712C"/>
                                    <circle cx="60" cy="40" r="6" fill="#E8712C"/>
                                    <circle cx="85" cy="40" r="6" fill="#E8712C"/>
                                    <rect x="25" y="55" width="20" height="6" rx="1" fill="#14365F" opacity="0.5"/>
                                    <rect x="50" y="55" width="20" height="6" rx="1" fill="#14365F" opacity="0.5"/>
                                    <rect x="75" y="55" width="20" height="6" rx="1" fill="#14365F" opacity="0.5"/>
                                    <line x1="25" y1="70" x2="95" y2="70" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Resolution Passed</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">ADT-1 Form Drafting (Day 5-6)</h3>
                        <p class="step-description">Form ADT-1 drafted with CIN, auditor name and address, PAN, ICAI membership number, FRN, term of appointment, financial years covered, and resolution date / reference. Each field cross-checked against source documents before form is locked.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                All fields cross-checked
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Auditor PAN / ICAI / FRN
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Resolution date locked
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="80" height="75" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="20" y="15" width="80" height="14" fill="#14365F"/>
                                    <text x="60" y="25" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ADT-1</text>
                                    <line x1="28" y1="40" x2="55" y2="40" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="58" y="36" width="35" height="7" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.5"/>
                                    <line x1="28" y1="55" x2="55" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="58" y="51" width="35" height="7" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.5"/>
                                    <line x1="28" y1="70" x2="55" y2="70" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="58" y="66" width="35" height="7" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.5"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Form Drafted</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">DSC and MCA V3 Portal Submission (Day 6-7)</h3>
                        <p class="step-description">Form digitally signed by authorised Director / KMP using Class 3 DSC. Filed via Patron's MCA V3 portal access. Government filing fee paid (Rs 200 to Rs 600 based on authorised capital slab). Submission confirmation captured.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DSC applied
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Direct V3 portal access
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Capital slab fee paid
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="25" width="50" height="35" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="50" y="46" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MCA V3</text>
                                    <path d="M75 42l10 0M85 42l-4 -4M85 42l-4 4" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <circle cx="95" cy="42" r="6" fill="#10B981"/>
                                    <line x1="25" y1="68" x2="85" y2="68" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Filed on V3</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">SRN Capture and Downstream Tracking (Day 7)</h3>
                        <p class="step-description">SRN saved in compliance calendar. SRN flagged for use in AOC-4 (referenced in form) and MGT-7 (auditor details cross-checked). Acknowledgement PDF circulated to founder team and auditor. Filing closed in the compliance calendar.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN saved
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Linked to AOC-4 / MGT-7
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Acknowledgement issued
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="25" width="70" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                                    <text x="60" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SRN: T54321</text>
                                    <line x1="60" y1="40" x2="60" y2="48" stroke="#14365F" stroke-width="1.5" stroke-dasharray="2,2"/>
                                    <rect x="25" y="50" width="30" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="40" y="57" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text>
                                    <rect x="65" y="50" width="30" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="80" y="57" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text>
                                    <line x1="55" y1="68" x2="65" y2="68" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                                </svg>
                            </div>
                            <span class="illustration-label">SRN Locked</span>
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
            <h2 class="section-title">Document Checklist for ADT-1 Filing</h2>
            <div class="content-text">
                
                
                <p>The documents listed below cover both the consent / eligibility set (auditor side) and the resolution / company set (filer side). Patron prepares missing items in-house.</p>

                <h3 style="margin-top:24px;">Auditor Documents</h3>
                <ul>
                    <li>Written consent of auditor under Section 139 of the Companies Act, 2013</li>
                    <li>Certificate of compliance under Section 141 - auditor eligibility, no disqualifications listed in Section 141(3)</li>
                    <li>Auditor PAN, ICAI membership number, Firm Registration Number (FRN), correspondence address</li>
                    <li>Class 3 DSC of the appointed auditor</li>
                </ul>

                <h3 style="margin-top:24px;">Company Documents</h3>
                <ul>
                    <li>Board resolution (for first auditor under Section 139(6) or casual vacancy filling under Section 139(8)) OR AGM ordinary resolution (for subsequent appointment under Section 139(1))</li>
                    <li>Special resolution for audit firm rotation under Section 139(2) - applicable only to listed and prescribed companies</li>
                    <li>Notice of AGM / EGM where appointment was passed (with 21 clear day notice for AGM)</li>
                    <li>Term of appointment - 1 year for first auditor (till first AGM) or 5 years for subsequent appointment under Section 139(1)</li>
                    <li>Active DIN, DSC, and PAN of the Director / KMP signing the form</li>
                    <li>CIN and active company status on MCA portal</li>
                </ul>

                <p style="margin-top:16px;font-style:italic;">Where any document is missing or out-of-date, Patron drafts, secures, or renews it inside the engagement at the standalone fee. We do not delay filings on procedural document gaps.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ADT-1 Pain Points - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. First-auditor ADT-1 omitted (legacy assumption from pre-2025 rule)</strong></td>
                            <td>Under old Rule 4(2), first auditor appointment by Board within 30 days of incorporation was exempt from ADT-1. Many companies and platforms still operate on this exemption.</td>
                            <td>The Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025 removed this exemption. ADT-1 is now mandatory for first-auditor Board appointments. Patron updates every intake against the 2025 Amendment Rules and files ADT-1 inside the 15-day window.</td>
                        </tr>
                        <tr>
                            <td><strong>2. AOC-4 / MGT-7 portal blocks because ADT-1 SRN is missing</strong></td>
                            <td>AOC-4 and MGT-7 forms expect the ADT-1 SRN for the appointed auditor. If ADT-1 was not filed (or was rejected), AOC-4 and MGT-7 either fail validation or use a placeholder SRN that triggers MCA scrutiny.</td>
                            <td>Patron files ADT-1 first and uses the validated SRN downstream. SRN locked in compliance calendar at the moment of filing and referenced in AOC-4 and MGT-7 packs as standard practice.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Auditor disqualification under Section 141 discovered late</strong></td>
                            <td>Section 141(3) disqualifications - body corporate, partner of officer, indebtedness exceeding Rs 5 lakh - are checked too late, after ADT-1 is filed. ADT-1 then has to be revised, resolution re-passed, new ADT-1 filed.</td>
                            <td>Patron verifies Section 141 eligibility BEFORE the consent letter is signed. Pre-filing eligibility check is a fixed step in our intake checklist, not an after-the-fact correction.</td>
                        </tr>
                        <tr>
                            <td><strong>4. ADT-1 confused with ADT-2 / ADT-3 / ADT-4</strong></td>
                            <td>Founders use ADT-1 for events that actually require ADT-2 (removal application to Central Government), ADT-3 (auditor resignation - filed by auditor not company), or ADT-4 (fraud reporting). Filing the wrong form causes rejection.</td>
                            <td>Patron maps the event to the correct form on intake using a 4-form decision tree. We turn around the right form inside the statutory deadline rather than re-filing after a rejection.</td>
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
            <h2 class="section-title">ADT-1 Filing Pricing: Standalone or Bundled with Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>ADT-1 Regular (Existing Consent and Resolution)</td><td class="text-end">Rs 3,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ADT-1 with Consent and Resolution Drafting</td><td class="text-end">Rs 4,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ADT-1 with Auditor Rotation (Section 139(2)) Special Resolution</td><td class="text-end">Rs 5,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Free with Patron Statutory Audit Engagement (Up to Rs 1 crore turnover)</td><td class="text-end"><span class="badge-included">Included</span> in Rs 15,000-30,000 audit fee</td></tr>
                        <tr><td>Free with Patron Statutory Audit Engagement (Rs 1 to 10 crore turnover)</td><td class="text-end"><span class="badge-included">Included</span> in Rs 30,000-75,000 audit fee</td></tr>
                        <tr><td>Free with Patron Statutory Audit Engagement (Rs 10 to 100 crore turnover)</td><td class="text-end"><span class="badge-included">Included</span> in Rs 75,000-2,00,000 audit fee</td></tr>
                        <tr><td>Bundled in Full Annual Compliance Package (Pvt Ltd)</td><td class="text-end"><span class="badge-included">Included</span> in Rs 35,000 annual bundle</td></tr>
                        <tr><td>Government Filing Fee (paid directly to MCA)</td><td class="text-end">Rs 200 to Rs 600 by authorised capital slab</td></tr>
                        <tr><td>DSC Application (if required)</td><td class="text-end">Rs 1,000 to Rs 2,500 per DSC</td></tr>
                        <tr><td>Late Filing - Additional Fee (Up to 30 days delay)</td><td class="text-end">2x normal fee</td></tr>
                        <tr><td>Late Filing - Additional Fee (31 to 60 days delay)</td><td class="text-end">4x normal fee</td></tr>
                        <tr><td>Late Filing - Additional Fee (61 to 90 days delay)</td><td class="text-end">6x normal fee</td></tr>
                        <tr><td>Late Filing - Additional Fee (91 to 180 days delay)</td><td class="text-end">10x normal fee</td></tr>
                        <tr><td>Late Filing - Additional Fee (180+ days delay)</td><td class="text-end">12x normal fee</td></tr>
                        <tr><td>Section 147 Penalty - Company</td><td class="text-end">Rs 25,000 to Rs 5,00,000</td></tr>
                        <tr><td>Section 147 Penalty - Officer in Default</td><td class="text-end">Rs 10,000 to Rs 1,00,000</td></tr>
                        <tr><td>Section 147(2) Penalty - Auditor</td><td class="text-end">Rs 25,000 to Rs 5,00,000 or 4x remuneration whichever is less</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ADT-1 Filing Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20quote%20for%20ADT-1%20filing%20-%20standalone%20or%20with%20audit%20bundle." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ADT-1 Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Company incorporated</td><td class="text-end">Day 0</td></tr>
                        <tr><td>First auditor appointed by Board (Section 139(6))</td><td class="text-end">Within 30 days of incorporation</td></tr>
                        <tr><td>First auditor ADT-1 deadline (Section 139(6) + Rule 4 post 2025 Amendment)</td><td class="text-end">Within 15 days of Board meeting (so within 45 days of incorporation)</td></tr>
                        <tr><td>First auditor appointed by Members if Board fails (Section 139(6) proviso)</td><td class="text-end">Within 90 days of incorporation</td></tr>
                        <tr><td>First auditor (Member appointment) ADT-1 deadline</td><td class="text-end">Within 15 days of EGM</td></tr>
                        <tr><td>First AGM held (Section 96(1) proviso)</td><td class="text-end">Within 9 months of FY end</td></tr>
                        <tr><td>Subsequent auditor ADT-1 deadline (Section 139(1))</td><td class="text-end">Within 15 days of AGM</td></tr>
                        <tr><td>Annual AGM (typical due date)</td><td class="text-end">By 30 September each year</td></tr>
                        <tr><td>Annual AGM ADT-1 deadline</td><td class="text-end">Within 15 days of AGM (typically by 15 October)</td></tr>
                        <tr><td>5-year term reappointment (Section 139(1))</td><td class="text-end">Within 15 days of 6th AGM</td></tr>
                        <tr><td>Casual vacancy filled by Board (Section 139(8))</td><td class="text-end">Within 30 days of vacancy filled</td></tr>
                        <tr><td>Auditor removed before term (Section 140(1))</td><td class="text-end">Within 30 days of CG approval + EGM</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Patron Turnaround (data finalised to filing)</strong></td><td class="text-end"><strong>3 to 5 working days</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; The 14 July 2025 cutover.</strong> Any first auditor appointment by Board on or after 14 July 2025 triggers a mandatory ADT-1 within 15 days. Pre-cutover appointments under the old Rule 4(2) exemption are not retrospectively affected, but every new incorporation since must file ADT-1 - no exemption.</p>
                    <p style="margin-top:12px;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work, the complexity involved, and the company's authorised capital slab for government filing fee.</p>


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
            <h2 class="section-title">Why Hire a CA Firm for ADT-1 (Even Though the Form Is Simple)</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <h3>2025 Amendment Rules Update</h3>
                <p>The Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025 changed the first-auditor exemption. Patron tracks regulatory changes and updates intake checklists - most competitor platforms have not.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>Section 141 Eligibility Risk</h3>
                <p>Filing ADT-1 for an ineligible auditor under Section 141(3) triggers ROC scrutiny and a revised filing cycle. Verification BEFORE consent is signed avoids the rejection-and-refile loop entirely.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div>
                <h3>Auditor Lifecycle Continuity</h3>
                <p>ADT-1 is filed once per appointment cycle. The auditor signs financials every year. A firm that handles both keeps continuity, including rotation rules under Section 139(2).</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Section 147 Liability</h3>
                <p>Directors face Rs 10,000 to Rs 1 lakh personal fine on default. Even at low standalone fees (Rs 3,000), the risk-adjusted cost of DIY is materially higher than the engagement fee.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>SRN Locked for AOC-4 / MGT-7</h3>
                <p>The ADT-1 SRN is referenced in AOC-4 and MGT-7 later in the year. Patron locks the SRN in the compliance calendar at the moment of filing so downstream forms never block on a missing reference.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Free Bundle with Audit</h3>
                <p>Where Patron is engaged as your statutory auditor, ADT-1 is included free. One workflow, one team, no separate billing - the cleanest operating model.</p>
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

                <h3 style="margin-top:24px;">Outcome Proof - Internal Metrics FY 2024-25</h3>
                <ul>
                    <li>Patron filed <strong>1,400+ ADT-1 returns</strong> (first auditor and subsequent appointments combined) in FY 2024-25</li>
                    <li><strong>100 percent on-time filing rate</strong> across all engagements</li>
                    <li><strong>Zero Section 141 disqualification incidents</strong> post-filing - all pre-filing eligibility checks held</li>
                    <li>Average turnaround from data-finalisation to filing: <strong>3 to 5 working days</strong></li>
                    <li>Standardised intake checklist updated for the 14 July 2025 Amendment Rules within 7 days of notification</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves auditor appointment, ADT-1 filing, and statutory audit engagements for businesses across India - both in-person and remotely. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">First Auditor (Section 139(6)) vs Subsequent Auditor (Section 139(1))</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>First Auditor</th><th>Subsequent Auditor</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Governing section</td><td>Section 139(6)</td><td>Section 139(1)</td></tr>
                        <tr><td>Appointing authority</td><td>Board within 30 days of incorporation; failing that, Members within 90 days</td><td>Members at the AGM</td></tr>
                        <tr><td>Term of appointment</td><td>From appointment until conclusion of first AGM</td><td>5 years - conclusion of AGM to conclusion of 6th AGM</td></tr>
                        <tr><td>Ratification at each AGM</td><td>Not applicable (single-year term)</td><td>Not required since Companies (Amendment) Act 2017</td></tr>
                        <tr><td>ADT-1 filing requirement</td><td>Mandatory (effective 14 July 2025 - previously exempt under Rule 4(2))</td><td>Mandatory under Rule 4</td></tr>
                        <tr><td>ADT-1 deadline</td><td>15 days from board meeting (within 45 days of incorporation)</td><td>15 days from AGM date</td></tr>
                        <tr><td>Resolution type</td><td>Board resolution (or ordinary resolution at EGM if Board fails)</td><td>Ordinary AGM resolution (special resolution if Section 139(2) rotation applies)</td></tr>
                        <tr><td>Auditor consent under Section 139</td><td>Required</td><td>Required</td></tr>
                        <tr><td>Section 141 eligibility certificate</td><td>Required</td><td>Required</td></tr>
                        <tr><td>Patron standalone fee</td><td>Rs 4,000 to 5,000 (includes consent and resolution drafting)</td><td>Rs 3,000 to 4,000</td></tr>


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
                
                
                <p>ADT-1 connects to the broader auditor lifecycle and to other annual ROC filings. The most relevant partner services:</p>
                <ul>
                    <li><a href="/statutory-audit"><strong>Statutory Audit</strong></a> - Patron-led statutory audit under Section 143. <strong>ADT-1 is FREE</strong> if Patron is also the auditor.</li>
                    <li><a href="/appointment-of-auditor"><strong>Appointment of Auditor</strong></a> - broader auditor appointment hub covering resolution drafting, eligibility, and ROC intimation.</li>
                    <li><a href="/change-of-auditor"><strong>Change of Auditor</strong></a> - removal, resignation, and replacement (ADT-2 / ADT-3 events) under Section 140.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Private Limited Company Annual Compliance</strong></a> - full Rs 35,000 bundle where ADT-1 is one of 6+ forms covered.</li>
                    <li><a href="/aoc-4-filing-services"><strong>AOC-4 Filing Services</strong></a> - filed within 30 days of AGM; references ADT-1 SRN.</li>
                    <li><a href="/mgt-7-filing-services"><strong>MGT-7 Filing Services</strong></a> - filed within 60 days of AGM; auditor details from ADT-1 carry through.</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Acts, Sections, and Penalties</h2>
            <div class="content-text">
                
                
                <h3>Governing Legislation</h3>
                <ul>
                    <li><strong>Companies Act, 2013</strong> - master statute</li>
                    <li><strong>Companies (Audit and Auditors) Rules, 2014</strong> - Rule 4 (ADT-1 procedure), Rule 5 (rotation), Rule 6 (manner of selection), Rule 7 (removal under ADT-2), Rule 8 (resignation under ADT-3), Rule 13 (fraud reporting under ADT-4)</li>
                    <li><strong>Companies (Audit and Auditors) Amendment Rules, 2025</strong> - effective 14 July 2025 - removed first-auditor ADT-1 exemption under old Rule 4(2)</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - multiplier-based additional fee structure for ADT-1 (Annexure A)</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections</h3>
                <ul>
                    <li><strong>Section 139(1)</strong> - subsequent auditor appointment for 5-year term at AGM</li>
                    <li><strong>Section 139(2)</strong> - audit firm rotation every 5 / 10 years (listed and prescribed companies)</li>
                    <li><strong>Section 139(6)</strong> - first auditor appointment by Board within 30 days of incorporation</li>
                    <li><strong>Section 139(8)</strong> - casual vacancy filling</li>
                    <li><strong>Section 140</strong> - removal, resignation, and special notice for change of auditor</li>
                    <li><strong>Section 141</strong> - qualifications and disqualifications of auditor</li>
                    <li><strong>Section 143</strong> - powers and duties of auditors</li>
                    <li><strong>Section 147</strong> - punishment for contravention</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule</h3>
                <ul>
                    <li><strong>Additional fee for late filing:</strong> multiplier-based slabs under Companies (Registration Offices and Fees) Rules - 2x (up to 30 days) escalating to 12x (180+ days)</li>
                    <li><strong>Section 147(1) fine on company:</strong> Rs 25,000 to Rs 5,00,000</li>
                    <li><strong>Section 147(1) fine on every officer in default:</strong> Rs 10,000 to Rs 1,00,000</li>
                    <li><strong>Section 147(2) fine on auditor</strong> for contravening Section 139 / 144 / 145: Rs 25,000 to Rs 5,00,000 or 4x remuneration whichever is less</li>
                    <li><strong>Section 147(2) proviso</strong> - wilful contravention with intent to deceive: imprisonment up to 1 year plus fine Rs 50,000 to Rs 25 lakh</li>
                    <li><strong>Downstream block:</strong> continuous default may trigger ROC scrutiny notices and block AOC-4 / MGT-7 filings</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for ADT-1 form access, the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text, and the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a> for auditor membership verification.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on ADT-1 filing, the 2025 Amendment Rules, the 5-year auditor term, and the ADT-1 / ADT-2 / ADT-3 distinction.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ADT-1 Filing Services',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Form ADT-1 and when must it be filed?</h3>
                        <div class="faq-expanded__a"><p>Form ADT-1 is the auditor appointment intimation filed with the Registrar of Companies under Section 139 of the Companies Act, 2013 read with Rule 4 of Companies (Audit and Auditors) Rules, 2014. It must be filed within 15 days of the appointment - whether by Board for the first auditor under Section 139(6) or by Members at the AGM for subsequent 5-year appointment under Section 139(1). For removal of auditor, the deadline extends to 30 days from the decision.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is ADT-1 required for the first auditor appointment by Board?</h3>
                        <div class="faq-expanded__a"><p>Yes. Per the Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025, ADT-1 is mandatory for all first auditor appointments, including those made by the Board of Directors within 30 days of incorporation under Section 139(6). The previous Rule 4(2) exemption for first-auditor Board appointments has been removed. Most older content still says first-auditor ADT-1 is exempt - this is no longer accurate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the 5-year auditor appointment term?</h3>
                        <div class="faq-expanded__a"><p>Under Section 139(1) of the Companies Act, 2013, an auditor appointed at the first AGM holds office from the conclusion of that AGM until the conclusion of the 6th AGM - effectively a 5-year term. Reappointment is then required for another 5 years. Under Section 139(2), audit firm rotation applies every 5 years (individual) or 10 years (firm) for listed companies and prescribed classes. Small companies and OPCs are exempt from rotation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What documents are needed for ADT-1 filing?</h3>
                        <div class="faq-expanded__a"><p>Required documents include the written consent of the auditor under Section 139, certificate of compliance with Section 141 conditions, board resolution (for first auditor under Section 139(6)) or AGM ordinary resolution (for subsequent appointment under Section 139(1)), auditor PAN and ICAI membership details, firm registration number, term of appointment, and active DSC of both the company signatory and the auditor.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of ADT-1?</h3>
                        <div class="faq-expanded__a"><p>Late ADT-1 filing attracts a multiplier-based additional fee under the Companies (Registration Offices and Fees) Rules, 2014 - 2x normal fee for up to 30 days delay, escalating to 12x for delays beyond 180 days. Section 147(1) imposes a company fine of Rs 25,000 to Rs 5 lakh and an officer-in-default fine of Rs 10,000 to Rs 1 lakh. The auditor faces a Section 147(2) fine of Rs 25,000 to Rs 5 lakh or 4x remuneration whichever is less.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between ADT-1, ADT-2, and ADT-3?</h3>
                        <div class="faq-expanded__a"><p>ADT-1 is the auditor appointment intimation filed by the company under Section 139. ADT-2 is an application to the Central Government for removal of an auditor before expiry of term under Section 140(1) read with Rule 7. ADT-3 is the auditor's notice of resignation filed by the auditor (not the company) under Section 140(2) read with Rule 8, within 30 days of resignation. ADT-4 is the fraud reporting form filed by the auditor under Section 143(12).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is ADT-1 required for OPCs and small companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. ADT-1 is mandatory for every company registered under the Companies Act, 2013 - including One Person Companies and small companies under Section 2(85). Both must appoint an auditor and file ADT-1. The relief for small companies and OPCs lies elsewhere - they are exempt from mandatory auditor rotation under Section 139(2), and small companies are exempt from CARO 2020 reporting. The ADT-1 intimation itself remains mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does auditor rotation under Section 139(2) apply to all companies?</h3>
                        <div class="faq-expanded__a"><p>No. Audit firm rotation under Section 139(2) applies to listed companies, unlisted public companies with paid-up share capital of Rs 10 crore or more, private companies with paid-up share capital of Rs 50 crore or more, and companies with public borrowings of Rs 50 crore or more. Small companies under Section 2(85), OPCs, and other private companies below these thresholds are exempt. Where rotation applies, individual auditor rotates every 5 years and audit firm every 10 years.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is ADT-1?</strong> Auditor appointment intimation to ROC under Section 139 of the Companies Act, 2013.</p>
                <p><strong>When is ADT-1 due?</strong> Within 15 days of appointment (board meeting for first auditor; AGM for subsequent appointment); 30 days for casual vacancy filling or auditor removal.</p>
                <p><strong>First auditor - is ADT-1 mandatory?</strong> Yes. Per Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025, ADT-1 is now mandatory even for first auditor appointment by Board. The old Rule 4(2) exemption is gone.</p>
                <p><strong>What is the auditor term?</strong> 5 years under Section 139(1) - from conclusion of AGM until conclusion of 6th AGM. Reappointment then required.</p>
                <p><strong>Who is exempt from rotation?</strong> Small companies under Section 2(85), OPCs, and private companies below Section 139(2) thresholds (Rs 50 crore paid-up capital or Rs 50 crore public borrowings).</p>
                <p><strong>What does Patron charge?</strong> Standalone Rs 3,000 to 5,000. FREE if Patron is engaged as your statutory auditor.</p>
                <p><strong>Penalty for late filing?</strong> Multiplier-based additional fee (2x to 12x normal fee) PLUS Section 147 fines on company, officer, and auditor up to Rs 5 lakh.</p>
                <p><strong>ADT-1 form kya hai aur kab file karna hai?</strong> <em>ADT-1 hai auditor appointment ki ROC ko intimation - Section 139 ke under. Appointment ke 15 din ke andar file karni hoti hai (board meeting ya AGM jisme bhi auditor appoint hua ho). 14 July 2025 se naya rule aaya hai - ab first auditor (jo Board appoint karta hai 30 days mein) ka bhi ADT-1 mandatory hai - pehle exempt tha. Patron Rs 3,000 se Rs 5,000 mein standalone file karta hai, ya audit engagement ke saath free bundle karta hai.</em></p>
                <p><strong>Auditor 5 saal ke liye kaise appoint hota hai?</strong> <em>Section 139(1) ke under, first AGM mein appoint hua auditor 6th AGM tak office mein rahta hai - matlab 5 saal ka term. Iske baad reappoint karna padta hai - dobara 5 saal ke liye. Listed companies aur badi companies (Rs 10 crore+ capital) mein Section 139(2) ke under rotation lagti hai - individual 5 saal mein rotate, firm 10 saal mein. Chhoti companies aur OPC rotation se exempt hain.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Urgency: When to File ADT-1</h2>
            <div class="content-text">
                
                
                <p>ADT-1 deadlines run on event-triggered clocks, not annual calendars. The key triggers for FY 2025-26:</p>
                <ul>
                    <li>Every company's <strong>first AGM</strong> (typically by 30 September 2026) requires ADT-1 within 15 days - so by <strong>15 October 2026</strong> for a 30 September AGM</li>
                    <li>Newly incorporated companies must appoint <strong>first auditor within 30 days</strong> of incorporation under Section 139(6) and file ADT-1 within 15 days of that board meeting</li>
                    <li>Any <strong>casual vacancy</strong> must be filled within 3 months of board recommendation under Section 139(8), with ADT-1 filed within 30 days</li>
                    <li>Auditor <strong>removal before term expiry</strong> requires Central Government approval under Section 140, plus EGM, plus ADT-1 within 30 days of decision</li>
                </ul>

                <p style="margin-top:16px;"><strong>The single most overlooked rule:</strong> post 14 July 2025, first-auditor ADT-1 is no longer exempt - file it. Missing any deadline triggers multiplier-based additional fees plus Section 147 fines on company, officer, and auditor.</p>

                <p style="margin-top:16px;"><strong>Talk to Us Before the Deadline - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20ADT-1." target="_blank">WhatsApp us</a>. Free 15-minute consultation. We respond within 2 hours.</strong></p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Form ADT-1 is the auditor appointment intimation under Section 139 of the Companies Act, 2013 - a simple form with surrounding compliance complexity that catches most defaults. The 15-day filing deadline runs from the board meeting (first auditor) or AGM (subsequent appointment), with 30 days for casual vacancy and removal events.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">The Companies (Audit and Auditors) Amendment Rules, 2025 effective 14 July 2025 removed the first-auditor exemption - ADT-1 is now mandatory for every appointment, no exceptions. Penalties layer multiplier-based additional fees with Section 147 fines on company, officer, and auditor up to Rs 5 lakh each.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Patron files ADT-1 standalone from Rs 3,000, includes it FREE in the statutory audit engagement, or bundles it into the full Rs 35,000 annual compliance package alongside AOC-4, MGT-7, DIR-3 KYC, ITR-6, and the statutory audit itself.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20quote%20for%20ADT-1%20filing%20-%20standalone%20or%20with%20audit%20bundle." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ADT-1 Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. ADT-1 filing, statutory audit engagement, and full annual compliance bundle delivered pan-India.</p>
        
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise ADT-1 Filing Service Pages</div>
                <div class="pa-block-sub">Local presence - same service, local CA team for in-person coordination</div>
                <div class="pa-city-grid">
                    <a href="/adt-1-filing-services/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">ADT-1 Filing in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/adt-1-filing-services/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">ADT-1 Filing in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/adt-1-filing-services/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">ADT-1 Filing in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/adt-1-filing-services/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">ADT-1 Filing in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Cross-sell into the auditor lifecycle and broader annual compliance</div>
                <div class="pa-cross-grid">
                    <a href="/statutory-audit" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India (Free ADT-1)</div></div>
                    </a>
                    <a href="/appointment-of-auditor" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div>
                    </a>
                    <a href="/change-of-auditor" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India (ADT-2 / ADT-3)</div></div>
                    </a>
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">India (Full Bundle)</div></div>
                    </a>
                    <a href="/aoc-4-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing</div><div class="pa-card-sub">India</div></div>
                    </a>
                    <a href="/mgt-7-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing</div><div class="pa-card-sub">India</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026. Review triggers include further amendments to Companies (Audit and Auditors) Rules affecting ADT-1 procedure or deadlines, changes in Section 147 penalty caps, amendments to Section 139(2) auditor rotation thresholds, changes in additional fee multiplier structure under Companies (Registration Offices and Fees) Rules, introduction of new ADT-series forms by MCA, and revisions to Patron standalone or audit bundle pricing.</p>
        </div>
    </div>
</section>


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
