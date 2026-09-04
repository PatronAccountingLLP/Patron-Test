
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ROC Backlog Filing: CCFS Cleanup</title>
    <meta name="description" content="Clear 2 to 5 year ROC backlog under CCFS-2026: 90% fee waiver until 15 July 2026. AOC-4, MGT-7, ADT-1. Patron cleanup from Rs 50,000.">
    <link rel="canonical" href="https://www.patronaccounting.com/backlog-filings-3-year-cleanup">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ROC Backlog Filing 2026: CCFS Cleanup | Patron Accounting">
    <meta property="og:description" content="Clear 2 to 5 year ROC backlog under CCFS-2026: 90% fee waiver until 15 July 2026. AOC-4, MGT-7, ADT-1. Patron cleanup from Rs 50,000.">
    <meta property="og:url" content="https://www.patronaccounting.com/backlog-filings-3-year-cleanup">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ROC Backlog Filing 2026: CCFS Cleanup | Patron Accounting">
    <meta name="twitter:description" content="Clear 2 to 5 year ROC backlog under CCFS-2026: 90% fee waiver until 15 July 2026. AOC-4, MGT-7, ADT-1. Patron cleanup from Rs 50,000.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/backlog-filings-3-year-cleanup#breadcrumb",
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
                        "name": "Compliance Services",
                        "item": "https://www.patronaccounting.com/private-limited-company-compliance"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "ROC Backlog Filings - 2 to 5 Year Cleanup",
                        "item": "https://www.patronaccounting.com/backlog-filings-3-year-cleanup"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/backlog-filings-3-year-cleanup#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is CCFS-2026 and how does the 90% penalty waiver work?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "CCFS-2026 (Companies Compliance Facilitation Scheme, 2026) is the MCA amnesty scheme issued via General Circular No. 01/2026 dated 24 February 2026. Companies that file pending AOC-4, MGT-7, MGT-7A, ADT-1, FC-3, or FC-4 forms on MCA21 V3 between 15 April and 15 July 2026 pay only 10% of accumulated additional fees - a 90% saving."
                }
            },
            {
                "@type": "Question",
                "name": "How many years of ROC backlog can be filed under CCFS-2026?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "There is no stated cap on the number of years. Companies can file all overdue annual filings from previous years within the scheme window. The 90 percent waiver applies to total accumulated additional fees across every defaulted year."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for 3 years of non-filing AOC-4 and MGT-7?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rs 100 per day per form for two forms (AOC-4 plus MGT-7) equals Rs 200 per day. Over 3 years (1,095 days) that is Rs 2,19,000 in additional fees alone. Adjudication penalties under Sections 92(5) and 137(3) post the Companies (Amendment) Act, 2020 are separate - Rs 10,000 base plus Rs 100 per day continuing penalty, capped at Rs 2,00,000 on the company and Rs 50,000 on each officer in default. CCFS-2026 cuts the additional-fee component by 90%, but adjudication penalty applies only if a notice has been issued."
                }
            },
            {
                "@type": "Question",
                "name": "How do I restore a disqualified director under Section 164(2)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "First, complete all pending AOC-4 and MGT-7 filings for the company that triggered the disqualification - ideally under CCFS-2026. Then the disqualified director files Form DIR-10 under Rule 14 of the Companies (Appointment and Qualification of Directors) Rules, 2014 for DIN reactivation. MCA portal status updates after the application is processed."
                }
            },
            {
                "@type": "Question",
                "name": "Can a struck-off company be revived?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, through a petition to the NCLT under Section 252 of the Companies Act, 2013, filed within 3 years of strike-off. Once the revival order is granted, backlog AOC-4 and MGT-7 filings can proceed under CCFS-2026 if the scheme window is still open. NCLT revival typically takes 60 to 120 working days from petition filing to restoration order."
                }
            },
            {
                "@type": "Question",
                "name": "What is the deadline for CCFS-2026 filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "15 July 2026. The scheme window opened on 15 April 2026 and remains active for exactly three months. After 15 July 2026, the full Rs 100 per day per form additional fee resumes and Section 164(2) director disqualification enforcement restarts. MCA has explicitly stated that ROC action will follow against non-compliant companies post the scheme close."
                }
            },
            {
                "@type": "Question",
                "name": "Are LLPs covered under CCFS-2026?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. CCFS-2026 applies only to companies registered under the Companies Act, 2013 (and the Companies Act, 1956). LLPs have separate compliance requirements under the LLP Act, 2008 and follow a different remediation path. If your group has both private companies and LLPs, the company-side filings can use CCFS-2026 while LLP backlog follows the LLP Act track."
                }
            },
            {
                "@type": "Question",
                "name": "How much does ROC backlog cleanup cost?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Patron professional fees: Rs 50,000 to Rs 80,000 for 2 to 3 year backlog, Rs 80,000 to Rs 1,50,000 for 3 to 5 year backlog, and Rs 1,50,000 to Rs 3,00,000 for 5+ year backlog including NCLT revival where required. Statutory fees and the 10% CCFS additional fee are billed at actuals against MCA receipts."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "https://www.patronaccounting.com/backlog-filings-3-year-cleanup#service",
                "name": "ROC Backlog Filings - 2 to 5 Year Default Cleanup",
                "url": "https://www.patronaccounting.com/backlog-filings-3-year-cleanup",
                "description": "End-to-end ROC backlog cleanup for private limited companies and OPCs with 2 to 5 years of pending AOC-4, MGT-7, and ADT-1 filings under the Companies Act, 2013. Uses MCA CCFS-2026 amnesty scheme General Circular 01/2026 dated 24 February 2026 with 90% additional-fee waiver, plus DIR-10 DIN reactivation and Section 252 NCLT revival where applicable.",
                "serviceType": "Corporate Compliance Service",
                "provider": { "@id": "https://www.patronaccounting.com/#organization" },
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
                    "name": "Backlog Cleanup Packages",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "2 to 3 Year Backlog Cleanup",
                            "price": "50000",
                            "priceCurrency": "INR",
                            "description": "Full AOC-4 plus MGT-7 or MGT-7A plus ADT-1 for each defaulted year. CCFS-2026 filing at 10% additional fee. Books-reconstruction support included."
                        },
                        {
                            "@type": "Offer",
                            "name": "3 to 5 Year Backlog Cleanup",
                            "price": "80000",
                            "priceCurrency": "INR",
                            "description": "All of the above plus DIR-10 DIN reactivation under Rule 14 if Section 164(2) applies. Multi-year back-dated audit coordination."
                        },
                        {
                            "@type": "Offer",
                            "name": "5+ Year Backlog Cleanup",
                            "price": "150000",
                            "priceCurrency": "INR",
                            "description": "All of the above plus NCLT revival petition under Section 252 if struck off. Complete books reconstruction and ROC notice response."
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
                        ROC Backlog Filings - 2 to 5 Year Default Cleanup
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Back-dated audit packs, AOC-4 and MGT-7 for every defaulted year, ADT-1 catch-up, DIR-10 for DIN reactivation.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> 2-3 year backlog from Rs 50,000; 3-5 year from Rs 80,000; 5+ year from Rs 1,50,000 (plus 10% CCFS-2026 fee).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any private company or OPC with pending AOC-4 / MGT-7 - CCFS-2026 covers all overdue years.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 2-3 year cleanup in 20-30 working days; 5+ year in 45-60 days. CCFS-2026 deadline: 15 July 2026.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 15+ Years | CCFS-2026 Window OPEN - Closes 15 July 2026</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Backlog%20Filings%203%20Year%20Cleanup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ROC Backlog Cleanup',
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
    'ctaText'    => 'Free 20-minute backlog scoping call. CCFS-2026 saving estimate in 24 hours. Latest 2 years filed first to prevent Section 164(2). NCLT revival representation if struck off.',
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
            
                <a href="#overview-section" class="toc-btn">TL;DR</a>
                <a href="#what-section" class="toc-btn">What Is Backlog Cleanup</a>
                <a href="#who-section" class="toc-btn">Who Needs This</a>
                <a href="#services-section" class="toc-btn">Cleanup Path Matrix</a>
                <a href="#procedure-section" class="toc-btn">6-Step Procedure</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Challenges</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Hire Patron</a>
                <a href="#comparison-section" class="toc-btn">CCFS vs Standard</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: CCFS-2026 Backlog Cleanup at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ROC Backlog Cleanup Services at a Glance</strong></p>
                    <p>Companies carrying 2 to 5 years of ROC backlog face Rs 100 per day per form additional fees, Section 164(2) director disqualification at 3 consecutive defaults, and Section 248 strike-off risk. <strong>CCFS-2026 (General Circular 01/2026 dated 24 February 2026) gives a 90% waiver on accumulated additional fees if filed by 15 July 2026.</strong> Patron cleanup pack from Rs 50,000.</p>
                </div>
                <p>Most backlog cleanup engagements arrive in one of four moments - the buyer's compliance diligence in a funding round, the share-purchase agreement clearance for an M and A exit, the routine MCA portal check before a director change, or a hand-delivered show-cause notice from the ROC. Once any of these triggers, the company has weeks not months. CCFS-2026 gives a one-time discount window that closes 15 July 2026.</p>
                <p>Below is the quick-reference summary covering governing sections, the active amnesty scheme, forms covered, common triggers, disqualification and strike-off risks, and Patron's starting cleanup fees by backlog age. Use this as a fast scan before reading the detailed cleanup path matrix below.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Provisions</td><td>Companies Act, 2013 - Sections 92, 137, 139, 164(2), 248, 252, 403, 441, 460; CCFS-2026 General Circular No. 01/2026 dated 24 February 2026</td></tr>
                        <tr><td>Active Amnesty Scheme</td><td><strong>CCFS-2026</strong> - 90% waiver on accumulated additional fees; window 15 April to 15 July 2026</td></tr>
                        <tr><td>Forms Covered</td><td>AOC-4, AOC-4 CFS, AOC-4 NBFC, MGT-7, MGT-7A, ADT-1, FC-3, FC-4, plus old Act forms (20B, 21A, 23AC, 23ACA, 66) - LLPs NOT covered</td></tr>
                        <tr><td>Common Triggers</td><td>Funding round diligence, M and A or share-sale completion, director change, MCA show-cause notice</td></tr>
                        <tr><td>Director Disqualification Trigger</td><td>3 consecutive years of non-filing - Section 164(2) - DIN deactivated for 5 years</td></tr>
                        <tr><td>Strike-Off Trigger</td><td>2+ years of non-filing - Section 248 - ROC may strike off; NCLT revival under Section 252 within 3 years</td></tr>
                        <tr><td>Starting Cleanup Fee (Patron)</td><td>Rs 50,000 (2-3 yr), Rs 80,000 (3-5 yr), Rs 1,50,000 (5+ yr) + statutory fees and 10% CCFS additional fee</td></tr>
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
                <h2 class="section-title">What Is ROC Backlog Cleanup?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>Backlog cleanup is the structured rectification of overdue annual filings (AOC-4, MGT-7 or MGT-7A, ADT-1) for private companies that missed statutory deadlines under Sections 92 and 137 of the Companies Act, 2013. Cleanup is a CA-and-CS-led project that reconstructs audited financials for every defaulted year, drafts back-dated board and AGM documents, and files every form on the MCA21 portal before the active amnesty window closes.</p>

                    <div class="highlight-box" style="margin-top:24px;background:#FFF3E0;border-left:4px solid #E8712C;">
                        <p><strong>&#9888; CCFS-2026 Window OPEN - Closes 15 July 2026.</strong> From 15 April to 15 July 2026, the MCA's CCFS-2026 scheme (General Circular No. 01/2026 dated 24 February 2026) cuts accumulated additional fees by 90% - companies pay only 10%, plus the normal filing fee. After 15 July 2026, the full Rs 100 per day per form regime resumes and Section 164(2) director-disqualification enforcement restarts.</p>
                    </div>

                    <h3 style="margin-top:32px;">Three Routes Under CCFS-2026</h3>
                    <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Route</th>
                                <th>For Whom</th>
                                <th>Fee Treatment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>Pending Annual Filings</strong></td><td>Active companies with overdue AOC-4 / MGT-7 / MGT-7A / ADT-1 / FC-3 / FC-4 / old Act forms</td><td>Normal filing fee + <strong>only 10%</strong> of accumulated additional late fee (90% waiver)</td></tr>
                            <tr><td><strong>Dormant Status (MSC-1)</strong></td><td>Inactive companies wishing to continue legal existence under Section 455</td><td><strong>50%</strong> of normal MSC-1 filing fee</td></tr>
                            <tr><td><strong>Strike-Off (STK-2)</strong></td><td>Permanently closed entities seeking voluntary removal from MCA register</td><td><strong>25%</strong> of strike-off filing fee</td></tr>
                        </tbody>
                    </table>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ROC Backlog Cleanup:</strong></p>
                    
                    <p><strong>Additional fee vs penalty:</strong> Additional fee is the Rs 100 per day per form charged automatically on the MCA portal under Sections 92 and 137. Penalty under Section 92(5) or 137(3) is a separate adjudication amount imposed via ROC order (post Companies (Amendment) Act, 2020: Rs 10,000 base + Rs 100 per day, capped at Rs 2,00,000 on company / Rs 50,000 on each officer in default).</p>
                    <p><strong>CCFS-2026:</strong> Companies Compliance Facilitation Scheme, 2026 - MCA General Circular No. 01/2026 dated 24 February 2026. Window 15 April to 15 July 2026. 90% waiver on accumulated additional fees for AOC-4, MGT-7, MGT-7A, ADT-1, FC-3, FC-4 and old Act forms.</p>
                    <p><strong>Section 164(2) disqualification:</strong> Automatic 5-year disqualification of every director of a company that has failed to file AOC-4 or MGT-7 for 3 consecutive financial years. DIN is deactivated by MCA across all companies the director holds.</p>
                    <p><strong>Section 248 strike-off:</strong> ROC power to remove a company from the register where it has not filed for 2+ years, or has not commenced business within one year of incorporation. Notice issued via STK-1 / STK-5.</p>
                    <p><strong>Section 252 NCLT revival:</strong> Restoration of a struck-off company by application to the National Company Law Tribunal within 3 years of strike-off. Requires petition, fees, and Tribunal order before backlog filings can resume.</p>
                    <p><strong>DIR-10:</strong> Form prescribed under Rule 14 of the Companies (Appointment and Qualification of Directors) Rules, 2014 - used to apply for DIN reactivation by a disqualified director once all pending filings of the defaulting company are completed.</p>
                    <p><strong>Section 460:</strong> Power of Central Government to condone delay in any filing where there is good cause shown - the foundational basis on which CCFS-style amnesty schemes are issued.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ROC Backlog Cleanup</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Amnesty Window Open</span>
                        <strong>Closes 15 July 2026</strong>
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
            <h2 class="section-title">Who Needs ROC Backlog Cleanup?</h2>
            <div class="content-text">
                
                
                <p>Backlog cleanup applies to every Indian private limited company and OPC with one or more unfiled AOC-4 or MGT-7 returns. <strong>LLPs are NOT covered by CCFS-2026</strong> and follow a separate LLP Act remediation track. The five recurring buyer profiles are:</p>
                <ul>
                    <li><strong>Companies with 2+ years of unfiled AOC-4 or MGT-7</strong> - especially before director changes, funding diligence, or M and A signing</li>
                    <li><strong>Companies served with an MCA show-cause notice, ROC enquiry, or Section 248 strike-off intimation</strong></li>
                    <li><strong>Promoter founders whose DINs have been deactivated under Section 164(2)</strong> for cross-company default</li>
                    <li><strong>Dormant or inactive companies considering CCFS-2026 strike-off (25% fee) or dormant status (50% fee)</strong> as alternatives to full cleanup</li>
                    <li><strong>Group CFOs auditing subsidiaries pre-acquisition</strong> - SPA conditions precedent typically require clean MCA21 status</li>
                </ul>

                <div class="highlight-box" style="margin-top:24px;background:#FFF3E0;border-left:4px solid #E8712C;">
                    <p><strong>Time-bound rule:</strong> CCFS-2026 filings must be on the MCA21 portal by 15 July 2026. Backlog cleanup work typically needs 20 to 60 working days depending on years involved. Count backwards from the deadline - a 5-year cleanup that starts in mid-May 2026 will only just close inside the window.</p>
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
            <h2 class="section-title">Cleanup Path Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1 year overdue, active company</strong> - MCA Status: Active</td><td>Standard late filing - file at full Rs 100 per day per form; OR file under CCFS-2026 for 90% waiver. The waiver is the cheaper path.</td></tr>
                        <tr><td><strong>2 to 3 years overdue, active, directors not disqualified</strong> - MCA Status: Active</td><td>CCFS-2026 cleanup - file all overdue AOC-4, MGT-7, and ADT-1 before 15 July 2026; pay 10% accumulated additional fee.</td></tr>
                        <tr><td><strong>3 to 5 years overdue, active, directors disqualified</strong> - DIN status: Deactivated under Section 164(2)</td><td>CCFS-2026 cleanup for all years; then DIR-10 application for DIN reactivation under Rule 14; reappoint where required.</td></tr>
                        <tr><td><strong>5+ years overdue, company still on register</strong> - Status: Active OR Under Process of Strike-Off</td><td>CCFS-2026 priority track - coordinate with ROC to halt any strike-off notice; file all years on accelerated audit cycle within the 60-day budget.</td></tr>
                        <tr><td><strong>Strike-off completed, company removed from register</strong> - Status: Struck Off</td><td>NCLT revival petition under Section 252 within 3 years of strike-off; once restored, file all backlog under CCFS-2026 if the window is still open.</td></tr>
                        <tr><td><strong>Inactive shell with no operations, no revival intent</strong> - Status: Active but no business activity</td><td>CCFS-2026 dormant status (MSC-1 at 50% fee) OR strike-off (STK-2 at 25% fee) - cheaper than full backlog cleanup for shell entities.</td></tr>


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
            <h2 class="section-title">Patron Cleanup Procedure: 6-Step Protocol</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs every backlog engagement through a 6-step protocol matched to the CCFS-2026 calendar. Total runway 30 to 60 working days end-to-end depending on backlog age and records availability.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">MCA21 Diagnostic and CCFS Saving Estimate (Day 1-3)</h3>
                        <p class="step-description">Pull MCA21 master data, identify every unfiled AOC-4, MGT-7, MGT-7A, ADT-1, FC-3 across all CIN years. Calculate accumulated additional fee (Rs 100 per day per form). Prepare 90% CCFS-2026 saving estimate. Decide priority sequencing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Master data pulled
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Form-by-form gap list
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Saving estimate ready
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
                                    <line x1="25" y1="72" x2="85" y2="72" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
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
                        <h3 class="step-title">Books Reconstruction and Back-Dated Audit (Day 4-14)</h3>
                        <p class="step-description">Assemble bank statements and primary records for each defaulted FY. Coordinate audit firms for back-dated audit reports under Section 143. Restore books from bank statements, GST returns, and TDS challans where primary records are incomplete.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Bank statements gathered
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Audit firm coordinated
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Working papers built
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="20" y="22" width="35" height="50" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="26" y1="30" x2="49" y2="30" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="26" y1="38" x2="46" y2="38" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="26" y1="46" x2="49" y2="46" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="26" y1="54" x2="44" y2="54" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="26" y1="62" x2="49" y2="62" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <path d="M62 47l8 0M70 47l-3 -3M70 47l-3 3" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="78" y="22" width="22" height="50" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="89" y="50" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AUDIT</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Books Rebuilt</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Back-Dated Governance Pack (Day 15-30)</h3>
                        <p class="step-description">Draft board meeting minutes, AGM notices, AGM minutes for every defaulted year. Reconcile statutory register and share-certificate trail. Prepare ADT-1 catch-up for every defaulted auditor appointment cycle.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Minutes + notices drafted
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ADT-1 catch-up ready
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Registers reconciled
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="40" height="54" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="28" y1="32" x2="56" y2="32" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="28" y1="42" x2="56" y2="42" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="28" y1="50" x2="50" y2="50" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="28" y1="58" x2="56" y2="58" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="28" y1="66" x2="48" y2="66" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <rect x="68" y="32" width="32" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="84" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AGM</text>
                                    <rect x="68" y="50" width="32" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="84" y="60" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Minutes</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Governance Set</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">MCA21 V3 Filings Under CCFS-2026 (Day 30-45)</h3>
                        <p class="step-description">Upload AOC-4 and MGT-7 / MGT-7A for every year in chronological order. Pay 10% accumulated additional fee plus normal filing fee under CCFS-2026. Capture SRN for each filing. ADT-1 catch-up filed alongside.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Chronological order
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                10% CCFS additional fee
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRNs captured
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="20" y="25" width="35" height="40" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="37" y="49" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MCA21</text>
                                    <text x="37" y="57" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">V3</text>
                                    <path d="M60 45l10 0M70 45l-4 -4M70 45l-4 4" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="78" y="25" width="22" height="40" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="89" y="42" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CCFS</text>
                                    <text x="89" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">2026</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Filings Done</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">DIN Reactivation Under DIR-10 (Day 45-55)</h3>
                        <p class="step-description">Where Section 164(2) had triggered, file DIR-10 for each disqualified director under Rule 14 of Companies (Appointment and Qualification of Directors) Rules, 2014. Coordinate with MCA portal update post-filing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DIR-10 application
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Rule 14 compliant
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Portal update tracked
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-10</text>
                                    <text x="60" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIN</text>
                                    <rect x="48" y="65" width="24" height="8" rx="1" fill="#10B981"/>
                                    <text x="60" y="71" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ACTIVE</text>
                                </svg>
                            </div>
                            <span class="illustration-label">DIN Restored</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Compliance Calendar Setup (Day 55-60)</h3>
                        <p class="step-description">Calendar future deadlines (AOC-4, MGT-7, ADT-1, DIR-3 KYC, DPT-3) on a month-by-month tracker. Contract Patron annual retainer to prevent recurrence. Hand-over pack with all filing SRNs and acknowledgements.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                12-month calendar
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Annual retainer optional
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Full hand-over pack
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">COMPLIANCE CAL</text>
                                    <line x1="34" y1="42" x2="98" y2="42" stroke="#14365F" stroke-width="0.5" opacity="0.3"/>
                                    <line x1="34" y1="52" x2="98" y2="52" stroke="#14365F" stroke-width="0.5" opacity="0.3"/>
                                    <line x1="34" y1="62" x2="98" y2="62" stroke="#14365F" stroke-width="0.5" opacity="0.3"/>
                                    <line x1="34" y1="72" x2="98" y2="72" stroke="#14365F" stroke-width="0.5" opacity="0.3"/>
                                    <circle cx="40" cy="47" r="3" fill="#E8712C"/>
                                    <circle cx="60" cy="47" r="3" fill="#10B981"/>
                                    <circle cx="80" cy="47" r="3" fill="#E8712C"/>
                                    <circle cx="40" cy="57" r="3" fill="#10B981"/>
                                    <circle cx="60" cy="57" r="3" fill="#E8712C"/>
                                    <circle cx="80" cy="57" r="3" fill="#10B981"/>
                                    <circle cx="40" cy="67" r="3" fill="#E8712C"/>
                                    <circle cx="60" cy="67" r="3" fill="#10B981"/>
                                    <circle cx="80" cy="67" r="3" fill="#E8712C"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Recurrence Locked</span>
                            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Required for Backlog Cleanup</h2>
            <div class="content-text">
                
                
                <p>The documents listed below cover both the company governance set and the financial reconstruction inputs needed to rebuild books for older years. Patron prepares missing items in-house wherever feasible.</p>

                <h3 style="margin-top:24px;">Company Setup Documents</h3>
                <ul>
                    <li>Certificate of Incorporation, MOA, AOA, current MCA master data print</li>
                    <li>CIN and active company status on MCA portal; any MCA show-cause notice, ROC enquiry letter, or Section 248 strike-off intimation received</li>
                    <li>Statement of holding-subsidiary relationships if part of a group</li>
                </ul>

                <h3 style="margin-top:24px;">Financial Reconstruction Inputs</h3>
                <ul>
                    <li>Bank statements for every defaulted financial year - all operating accounts (critical input for books reconstruction)</li>
                    <li>Whatever GST returns, TDS challans, and ITRs were filed in defaulted years (helps reconstruct revenue and expense)</li>
                    <li>Previously filed AOC-4 or MGT-7 for the last compliant year (baseline reference)</li>
                </ul>

                <h3 style="margin-top:24px;">Signatory Documents</h3>
                <ul>
                    <li>Active DSC and current DIN status print of every director</li>
                    <li>Membership number, FRN, and active DSC of practising CA / CS / CMA who will certify catch-up filings</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Backlog Challenges - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Books and primary records are incomplete for older years - no auditor can sign</strong></td>
                            <td>Statutory auditors will not sign without working papers. Reconstructing 3-5 years of books from scratch is the single biggest cleanup bottleneck.</td>
                            <td>Patron rebuilds books from bank statements, GST returns, and TDS challans. Partner audit firms file working-paper-backed audit reports for older years. Full reconstruction is coordinated end-to-end so AOC-4 attachments are defensible.</td>
                        </tr>
                        <tr>
                            <td><strong>2. Directors already disqualified under Section 164(2) - DIN deactivated</strong></td>
                            <td>DIN appears as Deactivated on MCA portal. Director cannot sign filings for any of their other companies until the cause-company is regularised.</td>
                            <td>Patron files all pending AOC-4, MGT-7, and ADT-1 under CCFS-2026 first. DIN reactivation via DIR-10 under Rule 14 follows once filings are accepted. Alternate signing routes mapped for the intervening period.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Company has already been struck off under Section 248</strong></td>
                            <td>Once struck off, no MCA21 filing is possible. The 3-year NCLT revival window under Section 252 is the only path back.</td>
                            <td>Patron prepares the NCLT revival petition under Section 252 within the 3-year window. Once revival order is granted, the backlog filings proceed under CCFS-2026 if the window is still open.</td>
                        </tr>
                        <tr>
                            <td><strong>4. CCFS-2026 deadline approaching and audit time is short</strong></td>
                            <td>5-year cleanup needs 45-60 working days. Starting late means partial coverage - which is still better than full enforcement after 15 July 2026.</td>
                            <td>Patron triages by impact - latest 2 years filed first to prevent further Section 164(2) trigger, then older years. Partial CCFS coverage is better than no coverage. We have run 5-year cleanups in 35-40 working days when records are reasonably available.</td>
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
            <h2 class="section-title">Backlog Cleanup Pricing: 3-Tier by Backlog Age</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>2 to 3 Year Backlog</strong> - Full AOC-4 + MGT-7 / MGT-7A + ADT-1 for each year; CCFS-2026 filings; books reconstruction support</td><td class="text-end">Rs 50,000 to Rs 80,000 (Exl GST and statutory fees)</td></tr>
                        <tr><td><strong>3 to 5 Year Backlog</strong> - All of the above plus DIR-10 DIN reactivation if applicable; back-dated audit coordination across more years</td><td class="text-end">Rs 80,000 to Rs 1,50,000 (Exl GST and statutory fees)</td></tr>
                        <tr><td><strong>5+ Year Backlog</strong> - All of the above plus NCLT revival under Section 252 if struck off; complete books reconstruction; ROC notice response</td><td class="text-end">Rs 1,50,000 to Rs 3,00,000 (Exl GST and statutory fees)</td></tr>
                        <tr><td>Statutory and Government Fees</td><td class="text-end">At actuals - 10% accumulated additional fee under CCFS-2026 + normal filing fees + NCLT fee + audit-firm fee</td></tr>
                        <tr><td>CCFS-2026 Additional Fee (during window 15 April to 15 July 2026)</td><td class="text-end"><strong>10% of accumulated additional fees</strong> (90% waiver under General Circular 01/2026)</td></tr>
                        <tr><td>Standard Late Filing Additional Fee (post 15 July 2026)</td><td class="text-end">Rs 100 per day per form, no upper cap</td></tr>
                        <tr><td>Worked Example - 3 years AOC-4 + MGT-7 backlog (Rs 200/day x 1,095 days)</td><td class="text-end">Standard: Rs 2,19,000 | <strong>CCFS-2026: Rs 21,900</strong></td></tr>
                        <tr><td>Worked Example - 5 years AOC-4 + MGT-7 backlog (Rs 200/day x 1,825 days)</td><td class="text-end">Standard: Rs 3,65,000 | <strong>CCFS-2026: Rs 36,500</strong></td></tr>
                        <tr><td>Worked Example - 7 years AOC-4 + MGT-7 backlog (Rs 200/day x 2,555 days)</td><td class="text-end">Standard: Rs 5,11,000 | <strong>CCFS-2026: Rs 51,100</strong></td></tr>
                        <tr><td>Inactive Company - Dormant Status under MSC-1 (Section 455)</td><td class="text-end">50% of normal MSC-1 filing fee (CCFS-2026 discount)</td></tr>
                        <tr><td>Inactive Company - Voluntary Strike-Off under STK-2</td><td class="text-end">25% of strike-off filing fee (CCFS-2026 discount)</td></tr>
                        <tr><td>Section 92(5) / 137(3) Adjudication Penalty - Company (post 2020 Amendment)</td><td class="text-end">Rs 10,000 + Rs 100/day, capped at Rs 2,00,000</td></tr>
                        <tr><td>Section 92(5) / 137(3) Adjudication Penalty - Officer in Default (post 2020 Amendment)</td><td class="text-end">Rs 10,000 + Rs 100/day, capped at Rs 50,000</td></tr>
                        <tr><td>Section 164(2) Director Disqualification - 3 consecutive years of default</td><td class="text-end">5-year DIN deactivation across all companies</td></tr>
                        <tr><td>Section 248 Strike-Off Trigger - 2+ years of non-filing</td><td class="text-end">ROC may strike off; NCLT revival window 3 years</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ROC Backlog Cleanup consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Backlog%20Filings%203%20Year%20Cleanup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Required - End-to-End Working Days</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>MCA21 diagnostic and CCFS-2026 saving estimate (free, no obligation)</td><td class="text-end">24 to 48 hours from CIN handover</td></tr>
                        <tr><td>2 to 3 year backlog cleanup - end to end</td><td class="text-end">20 to 30 working days</td></tr>
                        <tr><td>3 to 5 year backlog cleanup - end to end</td><td class="text-end">30 to 45 working days</td></tr>
                        <tr><td>5+ year backlog cleanup - end to end</td><td class="text-end">45 to 60 working days (longer if NCLT revival involved)</td></tr>
                        <tr><td>DIN reactivation under DIR-10 (after backlog clearance)</td><td class="text-end">7 to 15 working days</td></tr>
                        <tr><td>NCLT revival under Section 252 - petition filing to restoration order</td><td class="text-end">60 to 120 working days</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>CCFS-2026 Window CLOSES</strong></td><td class="text-end"><strong>15 July 2026</strong></td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Practical drop-dead start date for 5-year cleanup</strong></td><td class="text-end"><strong>Around 30 April 2026</strong></td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Practical drop-dead start date for 3-year cleanup</strong></td><td class="text-end"><strong>Around 30 May 2026</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; Counting backwards from 15 July 2026.</strong> A 5-year backlog needs 45-60 working days. Starting after 30 April 2026 risks missing the CCFS-2026 deadline. For 3-year backlogs, the practical drop-dead start date is around 30 May 2026. Partial CCFS coverage (latest 2 years filed inside the window) is still meaningfully better than no coverage - filing the latest 2 years first prevents Section 164(2) disqualification from triggering on the cause-company.</p>
                    <p style="margin-top:12px;">All Patron professional fees listed are indicative ranges and do not constitute a binding offer. Final amounts vary by number of backlog years, audit-firm complexity, and whether NCLT revival is required. Statutory and government fees (including the 10% CCFS-2026 additional fee, NCLT fee, and audit-firm fee) are billed separately at actuals.</p>


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
            <h2 class="section-title">Why Hire Patron for Backlog Cleanup</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>CCFS-2026 Calendar Discipline</h3>
                <p>Every engagement is sequenced backwards from 15 July 2026. Latest 2 years filed first to prevent Section 164(2) trigger, then older years. We have run 5-year cleanups in 35-40 working days when records are reasonably available.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Pre-Disqualification Filing</h3>
                <p>Section 164(2) auto-deactivates DIN at 3 consecutive defaults. Filing before the trigger preserves the director's signing capacity across all their companies. Patron prioritises this in the engagement plan.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Books Reconstruction Capability</h3>
                <p>Books rebuilt from bank statements, GST returns, and TDS challans where primary records are incomplete. Partner audit firms file working-paper-backed audit reports for older years. End-to-end coordination, not document chasing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                <h3>NCLT Revival Representation</h3>
                <p>Section 252 NCLT revival within 3 years of strike-off. Patron prepares the petition, fee structure, hearing representation, and post-restoration backlog filings under CCFS-2026 if the window is still open.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>DIR-10 DIN Reactivation</h3>
                <p>Form DIR-10 under Rule 14 of Companies (Appointment and Qualification of Directors) Rules, 2014. Filed once all pending filings of the cause-company are accepted by MCA. Portal status update tracked to closure.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Recurrence Prevention</h3>
                <p>Compliance calendar setup at hand-over with month-by-month deadlines for AOC-4, MGT-7, ADT-1, DIR-3 KYC, DPT-3. Optional annual retainer keeps the company current. No second backlog cycle.</p>
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

                <h3 style="margin-top:24px;">Cleanup Track Record</h3>
                <ul>
                    <li>Patron CA-and-CS partners have <strong>15+ years of remediation experience</strong> across pre-funding diligence cleanups, M and A SPA-driven backlog projects, and NCLT revival representation</li>
                    <li>Every engagement is <strong>partner-CA reviewed</strong> and tied to a delivery calendar that respects the CCFS-2026 cliff</li>
                    <li>5-year cleanups completed in <strong>35-40 working days</strong> when records are reasonably available; 3-year cleanups in 20-30 working days</li>
                    <li>DIN reactivations under DIR-10 typically completed within <strong>7-15 working days</strong> after all underlying filings are accepted</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting handles ROC backlog cleanup, DIN reactivation, and NCLT revival representation for businesses across India. Indicative client logos: Hyundai, Asian Paints, Bridgestone (group-affiliate work).</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">CCFS-2026 vs Standard Late Filing: The 90% Saving</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Backlog Scenario</th><th>Standard Late Filing</th><th>Under CCFS-2026 (until 15 July 2026)</th></tr></thead>
                    <tbody>
                        
                        <tr><td>2 years (AOC-4 + MGT-7)</td><td>Additional fee Rs 1,46,000 + normal fee</td><td><strong>10% additional fee Rs 14,600 + normal fee = 90% saving</strong></td></tr>
                        <tr><td>3 years (AOC-4 + MGT-7)</td><td>Additional fee Rs 2,19,000 + normal fee</td><td><strong>10% additional fee Rs 21,900 + normal fee = 90% saving</strong></td></tr>
                        <tr><td>5 years (AOC-4 + MGT-7)</td><td>Additional fee Rs 3,65,000 + normal fee</td><td><strong>10% additional fee Rs 36,500 + normal fee = 90% saving</strong></td></tr>
                        <tr><td>7 years (AOC-4 + MGT-7)</td><td>Additional fee Rs 5,11,000 + normal fee</td><td><strong>10% additional fee Rs 51,100 + normal fee = 90% saving</strong></td></tr>
                        <tr><td>Director disqualification protection (Section 164(2))</td><td>3-year-default trigger still applies; DIN deactivated</td><td><strong>Filing before disqualification trigger prevents Section 164(2) activation</strong></td></tr>
                        <tr><td>Strike-off prevention (Section 248)</td><td>No automatic protection - ROC may proceed</td><td><strong>Filing closes the Section 248 trigger window</strong></td></tr>
                        <tr><td>Inactive company - dormant status (MSC-1)</td><td>Full MSC-1 filing fee</td><td>50% of normal MSC-1 filing fee</td></tr>
                        <tr><td>Inactive company - strike-off (STK-2)</td><td>Full STK-2 filing fee</td><td>25% of strike-off filing fee</td></tr>
                        <tr><td>Immunity from Section 92 / 137 penalty</td><td>Adjudication can be initiated post-filing</td><td><strong>Conditional immunity if filed before notice or within 30 days after notice; not available if adjudication order already passed</strong></td></tr>


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
                
                
                <p>Backlog cleanup connects to several Patron service lines. The most relevant are:</p>
                <ul>
                    <li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance</strong></a> - annual retainer once cleanup is complete to prevent recurrence.</li>
                    <li><a href="/pvt-llp-compliance"><strong>Pvt LLP Compliance</strong></a> - combined track if your group has both private companies and LLPs (LLPs follow separate remediation under LLP Act, 2008).</li>
                    <li><a href="/appointment-of-auditor"><strong>Appointment of Auditor</strong></a> - fresh ADT-1 once back-dated audit appointments are caught up.</li>
                    <li><a href="/roc-notice"><strong>ROC Notice Response</strong></a> - handling of show-cause notices, adjudication appearances, and Section 454 hearings.</li>
                    <li><a href="/director-kyc"><strong>Director KYC (DIR-3)</strong></a> - DIR-3 KYC for every DIN holder once reactivation under DIR-10 completes.</li>
                    <li><a href="/company-closure"><strong>Company Closure</strong></a> - alternative path when revival is uneconomical; CCFS-2026 strike-off route at 25% fee for inactive shells.</li>
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
                    <li><strong>Companies Act, 2013</strong> - Sections 92 (annual return), 137 (financial statement filing), 139 (auditor appointment), 92(5) / 137(3) (adjudication penalty post-2020 Amendment), 164(2) (director disqualification), 248 (strike-off), 252 (NCLT revival), 403 (additional fee), 441 (compounding), 460 (condonation of delay - foundational basis for CCFS-2026)</li>
                    <li><strong>CCFS-2026 - MCA General Circular No. 01/2026 dated 24 February 2026</strong> - Window 15 April to 15 July 2026. 90% waiver on accumulated additional fees for AOC-4, AOC-4 CFS, AOC-4 NBFC, MGT-7, MGT-7A, ADT-1, FC-3, FC-4 and old Act forms (20B, 21A, 23AC, 23ACA, 66). Inactive companies: dormant status MSC-1 at 50% fee, strike-off STK-2 at 25% fee. LLPs not covered. No separate application form - file directly on MCA21 V3.</li>
                    <li><strong>Companies (Appointment and Qualification of Directors) Rules, 2014</strong> - Rule 14: Form DIR-10 application by disqualified director for DIN reactivation after all pending filings completed.</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - Rs 100 per day per form additional fee, no upper cap (effective 1 July 2018); CCFS-2026 reduces this to 10% during the window.</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule (Current Law)</h3>
                <ul>
                    <li><strong>Additional fee for late filing (Section 403):</strong> Rs 100 per day per form, no upper cap; CCFS-2026 reduces to 10% during the window</li>
                    <li><strong>Section 92(5) / 137(3) adjudication penalty - Company (post Companies (Amendment) Act, 2020):</strong> Rs 10,000 base + Rs 100 per day continuing, capped at Rs 2,00,000</li>
                    <li><strong>Section 92(5) / 137(3) adjudication penalty - Officer in Default (post 2020 Amendment, decriminalized):</strong> Rs 10,000 base + Rs 100 per day continuing, capped at Rs 50,000</li>
                    <li><strong>Section 164(2) director disqualification:</strong> 5 years on 3 consecutive years of non-filing - DIN deactivated across all companies</li>
                    <li><strong>Section 248 strike-off:</strong> ROC may strike off where filings pending 2+ years; NCLT revival under Section 252 within 3 years of strike-off</li>
                    <li><strong>CCFS-2026 immunity:</strong> No penalty under Section 92 / 137 if filed before notice OR within 30 days after notice; not available if adjudication order already passed</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> to file under CCFS-2026, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for the General Circular No. 01/2026, and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on CCFS-2026 scope, the 90% fee waiver mechanics, Section 164(2) director disqualification, NCLT revival under Section 252, DIR-10 DIN reactivation, and 3-tier cleanup pricing.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ROC Backlog Cleanup',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is CCFS-2026 and how does the 90% penalty waiver work?</h3>
                        <div class="faq-expanded__a"><p>CCFS-2026 (Companies Compliance Facilitation Scheme, 2026) is the MCA amnesty scheme issued via General Circular No. 01/2026 dated 24 February 2026. Companies that file pending AOC-4, MGT-7, MGT-7A, ADT-1, FC-3, or FC-4 forms on MCA21 V3 between 15 April and 15 July 2026 pay only 10% of accumulated additional fees - a 90% saving.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How many years of ROC backlog can be filed under CCFS-2026?</h3>
                        <div class="faq-expanded__a"><p>There is no stated cap on the number of years. Companies can file all overdue annual filings from previous years within the scheme window. The 90 percent waiver applies to total accumulated additional fees across every defaulted year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for 3 years of non-filing AOC-4 and MGT-7?</h3>
                        <div class="faq-expanded__a"><p>Rs 100 per day per form for two forms (AOC-4 plus MGT-7) equals Rs 200 per day. Over 3 years (1,095 days) that is Rs 2,19,000 in additional fees alone. Adjudication penalties under Sections 92(5) and 137(3) post the Companies (Amendment) Act, 2020 are separate - Rs 10,000 base plus Rs 100 per day continuing penalty, capped at Rs 2,00,000 on the company and Rs 50,000 on each officer in default. CCFS-2026 cuts the additional-fee component by 90%, but adjudication penalty applies only if a notice has been issued.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How do I restore a disqualified director under Section 164(2)?</h3>
                        <div class="faq-expanded__a"><p>First, complete all pending AOC-4 and MGT-7 filings for the company that triggered the disqualification - ideally under CCFS-2026. Then the disqualified director files Form DIR-10 under Rule 14 of the Companies (Appointment and Qualification of Directors) Rules, 2014 for DIN reactivation. MCA portal status updates after the application is processed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a struck-off company be revived?</h3>
                        <div class="faq-expanded__a"><p>Yes, through a petition to the NCLT under Section 252 of the Companies Act, 2013, filed within 3 years of strike-off. Once the revival order is granted, backlog AOC-4 and MGT-7 filings can proceed under CCFS-2026 if the scheme window is still open. NCLT revival typically takes 60 to 120 working days from petition filing to restoration order.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the deadline for CCFS-2026 filing?</h3>
                        <div class="faq-expanded__a"><p>15 July 2026. The scheme window opened on 15 April 2026 and remains active for exactly three months. After 15 July 2026, the full Rs 100 per day per form additional fee resumes and Section 164(2) director disqualification enforcement restarts. MCA has explicitly stated that ROC action will follow against non-compliant companies post the scheme close.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are LLPs covered under CCFS-2026?</h3>
                        <div class="faq-expanded__a"><p>No. CCFS-2026 applies only to companies registered under the Companies Act, 2013 (and the Companies Act, 1956). LLPs have separate compliance requirements under the LLP Act, 2008 and follow a different remediation path. If your group has both private companies and LLPs, the company-side filings can use CCFS-2026 while LLP backlog follows the LLP Act track.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does ROC backlog cleanup cost?</h3>
                        <div class="faq-expanded__a"><p>Patron professional fees: Rs 50,000 to Rs 80,000 for 2 to 3 year backlog, Rs 80,000 to Rs 1,50,000 for 3 to 5 year backlog, and Rs 1,50,000 to Rs 3,00,000 for 5+ year backlog including NCLT revival where required. Statutory fees and the 10% CCFS additional fee are billed at actuals against MCA receipts.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>CCFS-2026 source:</strong> General Circular No. 01/2026 dated 24 February 2026 by MCA.</p>
                <p><strong>CCFS-2026 window:</strong> 15 April 2026 to 15 July 2026.</p>
                <p><strong>CCFS-2026 saving:</strong> 90% waiver on accumulated additional fees - pay only 10%.</p>
                <p><strong>Director disqualification trigger:</strong> 3 consecutive financial years of AOC-4 or MGT-7 default under Section 164(2) - 5-year DIN deactivation.</p>
                <p><strong>Strike-off trigger:</strong> 2+ years of non-filing under Section 248; NCLT revival under Section 252 within 3 years.</p>
                <p><strong>DIN reactivation form:</strong> DIR-10 under Rule 14 of the Companies (Appointment and Qualification of Directors) Rules, 2014 - filed after all pending filings of the cause-company are completed.</p>
                <p><strong>LLP coverage:</strong> LLPs are NOT covered by CCFS-2026 - separate remediation track under LLP Act, 2008.</p>
                <p><strong>Inactive company options:</strong> Dormant status under MSC-1 at 50% fee or voluntary strike-off under STK-2 at 25% fee.</p>
                <p><strong>Section 92(5) / 137(3) penalty (post 2020 Amendment):</strong> Rs 10,000 + Rs 100/day capped at Rs 2,00,000 company / Rs 50,000 officer in default - the 2020 Amendment decriminalized the section.</p>
                <p><strong>ROC backlog kaise clear kare?</strong> <em>15 July 2026 tak CCFS-2026 ke under file karo - 90% waiver milta hai additional fee par. AOC-4, MGT-7, ADT-1 sab covered hain. Patron Rs 50,000 se start hota hai 2-3 saal ke backlog ke liye.</em></p>
                <p><strong>Company ki pending filing kaise file kare?</strong> <em>MCA21 V3 portal pe seedha file karna hota hai - alag se application form nahi chahiye CCFS-2026 ke liye. 10% additional fee + normal filing fee bharo. Director disqualified ho gaya ho to pehle filings complete karo, phir DIR-10 file karo DIN reactivate karne ke liye.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency Recap: Counting Backwards from 15 July 2026</h2>
            <div class="content-text">
                
                
                <p>CCFS-2026 closes 15 July 2026. After that date the 90% additional-fee waiver disappears. Full Rs 100 per day per form resumes; Section 164(2) director disqualification enforcement restarts.</p>
                <ul>
                    <li>5-year backlog cleanup needs <strong>45-60 working days</strong> - practical drop-dead start date around <strong>30 April 2026</strong></li>
                    <li>3-year backlog cleanup needs <strong>20-30 working days</strong> - practical drop-dead start date around <strong>30 May 2026</strong></li>
                    <li>NCLT revival cases need an additional <strong>60-120 working days</strong> before backlog filings can even begin</li>
                    <li>Partial CCFS coverage (latest 2 years first) is still better than no coverage - prioritise the years that prevent Section 164(2) trigger</li>
                </ul>

                <p style="margin-top:16px;"><strong>Get a Free CCFS-2026 Saving Estimate in 24 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Backlog%20Filings%203%20Year%20Cleanup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free 20-minute backlog scoping call. We respond within 2 hours during business hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: A Once-in-a-Decade Window</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Backlog cleanup is a one-time corporate hygiene project, but the 2026 window is unique. CCFS-2026 lets companies clear 2 to 5 years of unfiled returns at a 90% discount on additional fees and prevents Section 164(2) director disqualification before it triggers.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Patron Accounting brings 15+ years of remediation experience including funding-diligence cleanups, M and A SPA-driven backlog projects, and NCLT revival representation under Section 252. Every engagement is partner-CA reviewed and tied to a delivery calendar built backwards from the 15 July 2026 deadline.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Once the scheme closes, the full additional-fee regime (Rs 100 per day per form, no upper cap) returns and the MCA has signalled that the Registrars of Companies will pursue enforcement against non-compliant companies. The cleanup project that costs Rs 21,900 in additional fees inside the window will cost Rs 2,19,000 outside it for a 3-year backlog. Start the diagnostic this week.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Backlog%20Filings%203%20Year%20Cleanup%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Backlog Cleanup Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. ROC backlog cleanup, DIR-10 DIN reactivation, and Section 252 NCLT revival delivered pan-India under CCFS-2026.</p>
         
            
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Adjacent services that pair with backlog cleanup</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Compliance Hub</div><div class="pa-card-sub">Annual Retainer</div></div>
                    </a>
                    <a href="/pvt-llp-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt + LLP Compliance</div><div class="pa-card-sub">Group Track</div></div>
                    </a>
                    <a href="/appointment-of-auditor" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">ADT-1 Catch-up</div></div>
                    </a>
                    <a href="/roc-notice" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">Show-Cause</div></div>
                    </a>
                    <a href="/director-kyc" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Director KYC (DIR-3)</div><div class="pa-card-sub">Post-Reactivation</div></div>
                    </a>
                    <a href="/company-closure" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Company Closure</div><div class="pa-card-sub">STK-2 / MSC-1</div></div>
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
            <p><strong>Content Created:</strong> 12 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed bi-monthly while the CCFS-2026 window is open. Next scheduled review: 15 July 2026 (end of CCFS-2026 window). Review triggers include MCA extension or modification of CCFS-2026, new General Circulars affecting AOC-4 / MGT-7 / ADT-1 filing, change in Section 92(5) or 137(3) penalty caps, amendment to Section 164(2) disqualification thresholds, change in Section 248 strike-off triggers, and any new amnesty schemes.</p>
        </div>
    </div>
</section>


</main>






<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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
