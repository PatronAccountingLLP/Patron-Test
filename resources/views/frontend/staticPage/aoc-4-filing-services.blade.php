
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>AOC-4 Filing Services</title>
    <meta name="description" content="AOC-4 filing service for FY 2025-26. Section 137 financial statements within 30 days of AGM. CA-reviewed. From Rs 8,000 standalone or Rs 35,000 bundled.">
    <link rel="canonical" href="/aoc-4-filing-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="AOC-4 Filing Services 2026 | Patron Accounting">
    <meta property="og:description" content="AOC-4 filing service for FY 2025-26. Section 137 financial statements within 30 days of AGM. CA-reviewed. From Rs 8,000 standalone or Rs 35,000 bundled.">
    <meta property="og:url" content="/aoc-4-filing-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AOC-4 Filing Services 2026 | Patron Accounting">
    <meta name="twitter:description" content="AOC-4 filing service for FY 2025-26. Section 137 financial statements within 30 days of AGM. CA-reviewed. From Rs 8,000 standalone or Rs 35,000 bundled.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/aoc-4-filing-services#breadcrumb",
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
                        "name": "AOC-4 Filing Services",
                        "item": "https://www.patronaccounting.com/aoc-4-filing-services"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/aoc-4-filing-services#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is Form AOC-4 and who must file it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form AOC-4 is the MCA e-form used to file a company's audited financial statements with the Registrar of Companies under Section 137 of the Companies Act, 2013 read with Rule 12 of Companies (Accounts) Rules, 2014. Every company registered under the Companies Act - Private Limited, Public Limited, One Person Company, Section 8 Company - must file AOC-4 every financial year, regardless of turnover, profit, or business activity. Dormant companies file nil financial statements."
                }
            },
            {
                "@type": "Question",
                "name": "What is the due date for AOC-4?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "AOC-4 must be filed within 30 days of the Annual General Meeting under Rule 12 of Companies (Accounts) Rules, 2014. For regular companies with AGM by 30 September, the typical AOC-4 deadline falls at end of October. For One Person Companies (OPCs) which do not hold AGM, AOC-4 is due within 180 days from FY end under Section 137(1) - typically 27 September for FY ending 31 March."
                }
            },
            {
                "@type": "Question",
                "name": "What documents are needed to file AOC-4?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Required attachments include the audited balance sheet (Schedule III format), profit and loss account, cash flow statement (if applicable), statement of changes in equity (if applicable), notes to accounts, auditor report under Section 143 with CARO 2020 annexure where applicable, board report under Section 134(3), AGM notice and minutes, board resolution approving financials, AOC-1 (subsidiaries), AOC-2 (related-party transactions under Section 188), and active DSC of the authorised signatory."
                }
            },
            {
                "@type": "Question",
                "name": "What is the late fee for AOC-4?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Late filing of AOC-4 attracts an additional fee of Rs 100 per day with no upper cap from the day after the due date until actual filing, effective 1 July 2018. Beyond the daily fee, Section 137(3) (post Companies (Amendment) Act, 2020) imposes a company penalty of Rs 10,000 plus Rs 100 per day continuing capped at Rs 2,00,000, and an officer-in-default penalty of Rs 10,000 plus Rs 100 per day capped at Rs 50,000 (the 2020 Amendment decriminalized this section - imprisonment was removed). Three consecutive years of non-filing triggers director disqualification under Section 164(2) for 5 years."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between AOC-4 and AOC-4 XBRL?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "AOC-4 is the standard form filed by most companies. AOC-4 XBRL is the variant for listed companies and their Indian subsidiaries, companies with paid-up capital of Rs 5 crore or above, companies with turnover of Rs 100 crore or above, and companies preparing financials under Indian Accounting Standards (Ind AS). XBRL requires the financials to be tagged in a standardised machine-readable taxonomy under Companies (Filing of Documents in XBRL) Rules, 2015."
                }
            },
            {
                "@type": "Question",
                "name": "Who certifies Form AOC-4?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form AOC-4 is digitally signed by the Director, CEO, CFO, or Manager of the company - a person authorised by the board. The form must also be certified by a practising Chartered Accountant, Company Secretary, or Cost Accountant who verifies the correctness of the information. Small companies and One Person Companies are exempt from practising-professional certification, but every other company must have CA / CS / CMA certification on the form."
                }
            },
            {
                "@type": "Question",
                "name": "Does an OPC also need to file AOC-4?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Every One Person Company must file AOC-4 every financial year under Section 137 of the Companies Act, 2013. Because an OPC does not hold an AGM (Section 96 does not apply), the AOC-4 deadline is 180 days from the close of the financial year under Section 137(1) - 27 September for FY ending 31 March. OPCs are exempt from practising-professional certification on AOC-4."
                }
            },
            {
                "@type": "Question",
                "name": "Can AOC-4 be revised after filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, but only by filing a revised AOC-4 with applicable fees and following the procedure under Section 130 or Section 131 of the Companies Act, 2013 where a re-opening of accounts or voluntary revision is involved. For minor data errors, MCA may permit a corrected filing via the same form. Material revisions involving the financial statements typically require board approval and an Order from the Tribunal under Section 131."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "https://www.patronaccounting.com/aoc-4-filing-services#service",
                "name": "AOC-4 Filing Services",
                "description": "CA-reviewed Form AOC-4 financial statement filing under Section 137 of the Companies Act, 2013 read with Rule 12 of Companies (Accounts) Rules, 2014. Includes variant selection (Standard, XBRL, CFS, NBFC, CSR-2 addendum), Section 134 attachment authentication, DSC application, and direct MCA V3 portal submission. Standalone from Rs 8,000 or FREE with Patron annual compliance bundle.",
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
                        "name": "Financial statement",
                        "sameAs": "https://en.wikipedia.org/wiki/Financial_statement"
                    },
                    {
                        "@type": "Thing",
                        "name": "Companies Act, 2013",
                        "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
                    },
                    {
                        "@type": "Thing",
                        "name": "XBRL",
                        "sameAs": "https://en.wikipedia.org/wiki/XBRL"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "AOC-4 Filing Service Options",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "AOC-4 Standard",
                            "price": "8000",
                            "priceCurrency": "INR",
                            "description": "AOC-4 Standard variant drafted, certified, and filed via MCA V3 portal. For companies not crossing XBRL thresholds. Includes AOC-1 and AOC-2 attachments if applicable."
                        },
                        {
                            "@type": "Offer",
                            "name": "AOC-4 XBRL",
                            "price": "12000",
                            "priceCurrency": "INR",
                            "description": "AOC-4 XBRL variant for listed companies, companies at Rs 5 crore plus capital, Rs 100 crore plus turnover, or Ind AS companies. Includes taxonomy mapping and validation."
                        },
                        {
                            "@type": "Offer",
                            "name": "AOC-4 CFS (Consolidated)",
                            "price": "15000",
                            "priceCurrency": "INR",
                            "description": "AOC-4 CFS for companies with subsidiaries. Includes consolidated balance sheet review, minority interest tagging, segment reporting, AOC-1 and AOC-2 mapping."
                        },
                        {
                            "@type": "Offer",
                            "name": "AOC-4 Bundled in Full Annual Compliance",
                            "price": "35000",
                            "priceCurrency": "INR",
                            "description": "AOC-4 included in the full annual compliance bundle along with MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, DPT-3, MSME-1, statutory audit, and ITR-6. Fixed-fee annual engagement."
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
                        AOC-4 Filing Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Audited financials, board report, auditor report, AGM minutes, AOC-1 / AOC-2 if applicable.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 8,000 to 15,000 standalone OR Rs 35,000 in the full annual compliance bundle.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every company under Companies Act, 2013 - Pvt Ltd, Public Ltd, OPC, Section 8.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30 days from AGM (180 days from FY end for OPC under Section 137(1)).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 1,400+ AOC-4 Returns Filed FY 2024-25 | 100% On-Time Rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AOC%204%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'AOC-4 Filing Services',
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
    'ctaText'    => 'Free 15-minute consultation. Variant selection check at intake. Section 134 hand-signed enforcement. Late-fee elimination via automated 30 / 15 / 7 / 1 day reminders.',
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
                <a href="#what-section" class="toc-btn">What Is AOC-4</a>
                <a href="#who-section" class="toc-btn">Who Must File</a>
                <a href="#services-section" class="toc-btn">What We Deliver</a>
                <a href="#procedure-section" class="toc-btn">7-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pain Points</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Hire a CA</a>
                <a href="#comparison-section" class="toc-btn">AOC-4 vs MGT-7</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: AOC-4 Filing at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - AOC-4 Filing Services Services at a Glance</strong></p>
                    <p>Form AOC-4 is the financial statement filing under Section 137 of the Companies Act, 2013 read with Rule 12 of Companies (Accounts) Rules, 2014. Filed within 30 days of AGM (180 days from FY end for OPC). Late filing attracts Rs 100 per day with no upper cap plus company / officer penalties up to Rs 5 lakh under Section 137(3). Patron files from Rs 8,000 standalone or Rs 35,000 in the full annual bundle.</p>
                </div>
                <p>AOC-4 is the MCA e-form used to file a company's audited financial statements with the Registrar of Companies under Section 137 of the Companies Act, 2013 read with Rule 12 of Companies (Accounts) Rules, 2014. It carries the audited balance sheet, P and L, cash flow, notes, board report, auditor report, and any AOC-1 (subsidiary statement) or AOC-2 (related-party transactions) attachments. Filed once per financial year and independent of MGT-7 / MGT-7A - the two forms cannot be substituted for one another.</p>
                <p>Below is a quick-reference summary covering governing Act, applicability, timeline, fees, penalties, and AOC-4 variants. Use this as a fast scan before diving into the variant-selection check and detailed filing process below.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 134, 137, 137(3), 164 read with Rule 12 of Companies (Accounts) Rules, 2014</td></tr>
                        <tr><td>Applicable To</td><td>Every company registered under Companies Act, 2013: Private Limited, Public Limited, One Person Company, Section 8 Company</td></tr>
                        <tr><td>Timeline</td><td>30 days from AGM (regular companies) | 180 days from FY end (OPC, since no AGM) | typical FY 2025-26 deadline: end October 2026</td></tr>
                        <tr><td>Cost (Patron)</td><td>Standalone: Rs 8,000 to 15,000 per filing | Bundled in full annual compliance: Rs 35,000 (covers 6+ forms)</td></tr>
                        <tr><td>Penalty</td><td>Additional fee: Rs 100 per day, no upper cap | Section 137(3) penalty: Rs 10,000 base + Rs 100 per day, capped at Rs 2,00,000 (company) and Rs 50,000 (officer in default) per Companies (Amendment) Act, 2020</td></tr>
                        <tr><td>Forms / Portal</td><td>AOC-4 (Standard), AOC-4 XBRL, AOC-4 CFS (Consolidated), AOC-4 NBFC (Ind AS), AOC-4 CSR-2 addendum via MCA V3 portal (mca.gov.in)</td></tr>
                        <tr><td>Authority</td><td>Registrar of Companies (ROC), Ministry of Corporate Affairs</td></tr>
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
                <h2 class="section-title">What Is Form AOC-4?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>Form AOC-4 is the MCA e-form used to file a company's audited financial statements with the Registrar of Companies (ROC) under Section 137 of the Companies Act, 2013 read with Rule 12 of Companies (Accounts) Rules, 2014. It is the formal mechanism by which a company communicates its annual financial position to the government and, by extension, to stakeholders.</p>

                    <p style="margin-top:16px;">AOC-4 carries the audited balance sheet, profit and loss account, cash flow statement (where applicable), statement of changes in equity (where applicable), notes to accounts, board report, auditor report, and any AOC-1 (subsidiary statement) or AOC-2 (related-party transactions) attachments. It is filed once per financial year. Filing is independent of MGT-7 / MGT-7A (annual return), and the two cannot be substituted for one another.</p>

                    <h3 style="margin-top:32px;">AOC-4 Variants You Should Know</h3>
                    <p>AOC-4 has multiple variants depending on company type, size, and accounting framework. Filing the wrong variant triggers rejection and re-filing with late fees accrued.</p>
                    <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Variant</th>
                                <th>When to Use</th>
                                <th>Governing Rule</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>AOC-4 (Standard)</strong></td><td>Default for most private and public companies not crossing XBRL thresholds</td><td>Rule 12, Companies (Accounts) Rules 2014</td></tr>
                            <tr><td><strong>AOC-4 XBRL</strong></td><td>Listed companies and their Indian subsidiaries; companies with paid-up capital >= Rs 5 crore; companies with turnover >= Rs 100 crore; Ind AS companies</td><td>Companies (Filing of Documents in XBRL) Rules, 2015</td></tr>
                            <tr><td><strong>AOC-4 CFS</strong></td><td>Companies with one or more subsidiaries - consolidated financial statements</td><td>Section 129(3) + Rule 12</td></tr>
                            <tr><td><strong>AOC-4 NBFC (Ind AS)</strong></td><td>NBFCs required to comply with Indian Accounting Standards (Ind AS)</td><td>Companies (Indian Accounting Standards) Rules 2015</td></tr>
                            <tr><td><strong>AOC-4 + CSR-2 addendum</strong></td><td>Every company covered under Section 135(1) (CSR applicability)</td><td>Section 135 + Rule 12 + CSR-2 procedure</td></tr>
                        </tbody>
                    </table>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for AOC-4 Filing Services:</strong></p>
                    
                    <p><strong>Form AOC-4:</strong> MCA e-form for filing audited financial statements with ROC under Section 137 of the Companies Act, 2013. Filed within 30 days of AGM.</p>
                    <p><strong>AOC-4 XBRL:</strong> XBRL-tagged variant for listed companies, Rs 5 cr capital, Rs 100 cr turnover, or Ind AS companies under Companies (Filing of Documents in XBRL) Rules, 2015.</p>
                    <p><strong>AOC-4 CFS:</strong> Consolidated financial statement variant for companies with subsidiaries under Section 129(3).</p>
                    <p><strong>AOC-1:</strong> Subsidiary / joint venture / associate statement attached to AOC-4 where group structure exists.</p>
                    <p><strong>AOC-2:</strong> Particulars of contracts or arrangements with related parties under Section 188.</p>
                    <p><strong>CSR-2:</strong> Addendum to AOC-4 filed by companies covered under Section 135(1) - CSR applicability based on net worth Rs 500 cr, turnover Rs 1,000 cr, or net profit Rs 5 cr.</p>
                    <p><strong>Section 137(3):</strong> Penalty for non-filing (post Companies (Amendment) Act, 2020) - company Rs 10,000 + Rs 100/day continuing capped at Rs 2,00,000; officer in default Rs 10,000 + Rs 100/day capped at Rs 50,000. Decriminalized - imprisonment removed.</p>
                    <p><strong>Section 164(2):</strong> Director disqualification for 5 years on three consecutive years of non-filing of financial statements or annual return.</p>
                    <p><strong>SRN:</strong> Service Request Number - the unique MCA reference generated on AOC-4 filing. Required for downstream MGT-7 / MGT-7A filing.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AOC-4 Filing Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Financial Statements</span>
                        <strong>Section 137 + Rule 12</strong>
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
            <h2 class="section-title">Who Must File AOC-4?</h2>
            <div class="content-text">
                
                
                <p>Every company registered under the Companies Act, 2013 must file Form AOC-4 every financial year, regardless of:</p>
                <ul>
                    <li><strong>Turnover</strong> - zero-turnover companies still file</li>
                    <li><strong>Profit or loss</strong> - loss-making companies file the same form</li>
                    <li><strong>Business activity</strong> - dormant companies must file nil financial statements</li>
                    <li><strong>Number of shareholders or directors</strong></li>
                    <li><strong>Date of incorporation</strong> - first-year companies file by the next AGM cycle</li>
                </ul>

                <h3 style="margin-top:24px;">Variant Selection Drivers</h3>
                <ul>
                    <li><strong>Listed status</strong> - listed companies and their Indian subsidiaries must file AOC-4 XBRL</li>
                    <li><strong>Paid-up share capital</strong> - companies at Rs 5 crore or above must file XBRL</li>
                    <li><strong>Turnover</strong> - companies at Rs 100 crore or above must file XBRL</li>
                    <li><strong>Ind AS applicability</strong> - companies preparing financials under Ind AS must file XBRL</li>
                    <li><strong>Subsidiary structure</strong> - companies with subsidiaries also file AOC-4 CFS for consolidated financials</li>
                    <li><strong>CSR applicability</strong> - companies under Section 135(1) file CSR-2 as an addendum</li>
                </ul>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>Statutory deadline anchor.</strong> AOC-4 must be filed within 30 days of the AGM under Rule 12 of Companies (Accounts) Rules, 2014. For OPCs (which do not hold AGM), the deadline is 180 days from FY end under Section 137(1) - typically 27 September 2026 for FY 2025-26. For regular companies with AGM by 30 September 2026, AOC-4 is due by end October 2026.</p>
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
            <h2 class="section-title">What Patron Delivers in AOC-4 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. AOC-4 Variant Selection and Pre-Submission Check</strong></td><td>Four-criteria XBRL applicability check on intake (listed status, Rs 5 cr capital, Rs 100 cr turnover, Ind AS). Correct variant (Standard, XBRL, CFS, NBFC, or CSR-2 addendum) locked before drafting. Prevents the most common rejection - filing AOC-4 standard when XBRL is mandatory.</td></tr>
                        <tr><td><strong>2. Attachment Preparation and Section 134 Signing</strong></td><td>Audited balance sheet, P and L, cash flow, notes, board report, and auditor report compiled. Each attachment hand-signed (no scanned signature copies - MCA rejects SD copies). AOC-1 prepared if subsidiaries exist; AOC-2 prepared if related-party transactions under Section 188 exist.</td></tr>
                        <tr><td><strong>3. Form Drafting and DSC Application</strong></td><td>Form AOC-4 drafted with verified CIN, AGM date, financial year data, board report and auditor report details. Form digitally signed by the Director / CEO / CFO / Manager whose details are entered, plus our practising CA (membership number and FRN cited).</td></tr>
                        <tr><td><strong>4. Direct MCA V3 Portal Submission</strong></td><td>Filing submitted directly via Patron's MCA V3 portal access. SRN captured and saved. Government filing fee paid (Rs 200 to Rs 600 based on company capital slab). Acknowledgement downloaded and circulated to the founder team.</td></tr>
                        <tr><td><strong>5. CSR-2 Addendum (Section 135 Companies)</strong></td><td>For companies covered under Section 135(1), CSR-2 prepared and filed as an addendum to AOC-4. Captures CSR policy, board oversight, expenditure, and ongoing project details.</td></tr>
                        <tr><td><strong>6. Bundle Upgrade to Full Annual Compliance</strong></td><td>Where AOC-4 is the entry, we map the rest of the annual cycle (MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, DPT-3, MSME-1, ITR-6) and quote the full Rs 35,000 annual bundle which is materially cheaper than buying each form separately.</td></tr>


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
            <h2 class="section-title">AOC-4 Filing Process: 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From variant-selection check through SRN capture - a structured 7-step workflow that finishes inside the 30-day statutory deadline. Patron internal SLA: 5 to 7 working days from data finalisation to filing.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Variant Selection Check (Day 1)</h3>
                        <p class="step-description">XBRL applicability tested against four criteria - listed status, Rs 5 crore capital, Rs 100 crore turnover, Ind AS applicability. Variant locked (Standard, XBRL, CFS, NBFC, or CSR-2 addendum) before drafting begins.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                4-criteria XBRL test
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Variant locked Day 1
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 135 CSR check
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="25" width="20" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="35" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STD</text>
                                    <rect x="50" y="25" width="20" height="20" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="60" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">XBRL</text>
                                    <rect x="75" y="25" width="20" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="85" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CFS</text>
                                    <rect x="35" y="55" width="22" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="46" y="65" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NBFC</text>
                                    <rect x="62" y="55" width="22" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="73" y="65" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CSR-2</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Variant Locked</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Document Collection (Day 1-3)</h3>
                        <p class="step-description">Audited balance sheet, P and L, cash flow (if applicable), notes, board report, auditor report, AGM notice and minutes, AOC-1 (subsidiaries) and AOC-2 (related parties) if applicable. Active DSC of authorised signatory collected.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                All audited financials
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AOC-1 / AOC-2 if applicable
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Active DSC verified
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="32" height="42" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="28" y1="32" x2="48" y2="32" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="28" y1="40" x2="48" y2="40" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="28" y1="48" x2="44" y2="48" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="28" y1="56" x2="48" y2="56" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <rect x="58" y="32" width="32" height="42" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="64" y1="42" x2="84" y2="42" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="64" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="64" y1="58" x2="84" y2="58" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="64" y1="66" x2="78" y2="66" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Docs Collected</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Section 134 Attachment Signing (Day 3-4)</h3>
                        <p class="step-description">All financial statements hand-signed in ink (not scanned). Board report signed by chairperson or two directors under Section 134(3). Auditor report signed by practising CA. MCA does not accept scanned signature copies on AOC-4 attachments.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Hand-signed only
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                No scanned copies
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 134(3) compliant
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="55" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="32" y1="30" x2="73" y2="30" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="32" y1="40" x2="68" y2="40" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="32" y1="50" x2="73" y2="50" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                                    <path d="M35 65c4 -3 8 -1 12 1c4 2 8 -2 12 0c3 1 6 -1 9 -2" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round"/>
                                    <circle cx="92" cy="55" r="10" fill="#10B981"/>
                                    <path d="M87 55l3 3 6 -6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Inked Signatures</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Form Drafting (Day 4-5)</h3>
                        <p class="step-description">AOC-4 (or selected variant) drafted with CIN, AGM date, financial data, governance fields. Cross-checked against signed attachments. Section 188 related-party disclosures captured. CARO 2020 annexure data validated.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Variant-specific drafting
                            </span>
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
                                Section 188 captured
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="80" height="75" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="20" y="15" width="80" height="14" fill="#14365F"/>
                                    <text x="60" y="25" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text>
                                    <line x1="28" y1="40" x2="50" y2="40" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="53" y="36" width="40" height="7" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.5"/>
                                    <line x1="28" y1="55" x2="50" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="53" y="51" width="40" height="7" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.5"/>
                                    <line x1="28" y1="70" x2="50" y2="70" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                    <rect x="53" y="66" width="40" height="7" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.5"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Form Drafted</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">DSC Application (Day 5)</h3>
                        <p class="step-description">Form digitally signed by Director / CEO / CFO / Manager whose details are entered. Practising CA certification embedded - membership number, FRN, fellow / associate status. Cross-check that signatory DSC is active and not expired.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Director / KMP DSC
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Practising CA certification
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                ICAI / FRN embedded
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="60" y="46" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text>
                                    <path d="M55 33 c2 -3 8 -3 10 0" stroke="#10B981" stroke-width="2" fill="none" stroke-linecap="round"/>
                                    <rect x="48" y="65" width="24" height="8" rx="1" fill="#14365F"/>
                                    <text x="60" y="71" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">SIGNED</text>
                                </svg>
                            </div>
                            <span class="illustration-label">DSC Applied</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">MCA V3 Portal Upload (Day 6)</h3>
                        <p class="step-description">Form uploaded via Patron's MCA portal access. Government filing fee paid as per authorised capital slab (Rs 200 to Rs 600 per document). Pre-scrutiny errors fixed inline. Submission confirmation captured before close-of-day.</p>
                        <div class="step-highlights">
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
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Pre-scrutiny clean
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
                        <h3 class="step-title">SRN Capture and Acknowledgement (Day 6-7)</h3>
                        <p class="step-description">SRN captured. Acknowledgement PDF downloaded. Filing status tracked for ROC approval. Patron retains complete filing pack for audit trail. SRN flagged for downstream MGT-7 / MGT-7A which references the AOC-4 SRN.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN saved + locked
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Linked to MGT-7 / 7A
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
                                    <text x="40" y="57" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text>
                                    <rect x="65" y="50" width="30" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="80" y="57" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7A</text>
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
            <h2 class="section-title">Document Checklist for AOC-4 Filing</h2>
            <div class="content-text">
                
                
                <p>The documents listed below cover both the audited-financials set and the governance / attachments set required by AOC-4. Patron prepares missing items in-house at no extra charge inside the standalone fee.</p>

                <h3 style="margin-top:24px;">Financial Statements (Schedule III Format)</h3>
                <ul>
                    <li>Audited balance sheet (Schedule III format)</li>
                    <li>Profit and loss account</li>
                    <li>Cash flow statement (where applicable - small companies and OPCs exempt)</li>
                    <li>Statement of changes in equity (Ind AS companies)</li>
                    <li>Notes to accounts</li>
                </ul>

                <h3 style="margin-top:24px;">Audit and Governance Reports</h3>
                <ul>
                    <li>Auditor report under Section 143, with CARO 2020 annexure where applicable</li>
                    <li>Board report (Directors' Report) under Section 134(3)</li>
                    <li>AGM notice (21 clear days), AGM minutes, board resolution approving financials</li>
                </ul>

                <h3 style="margin-top:24px;">Variant-Specific Attachments</h3>
                <ul>
                    <li><strong>AOC-1</strong> - statement on performance of subsidiaries / joint ventures / associates (if group exists)</li>
                    <li><strong>AOC-2</strong> - particulars of contracts and arrangements with related parties under Section 188(1) (if applicable)</li>
                    <li><strong>CSR-2 inputs</strong> - CSR policy, board oversight, expenditure tracker - for Section 135 companies</li>
                    <li><strong>XBRL taxonomy mapping</strong> - for companies in the XBRL applicability bracket</li>
                </ul>

                <h3 style="margin-top:24px;">Signatory and Continuity Documents</h3>
                <ul>
                    <li>Active DIN, DSC, and PAN of the Director / CEO / CFO / Manager signing the form</li>
                    <li>Membership number, FRN, and active DSC of practising CA / CS / CMA certifying the form</li>
                    <li>CIN, financial year details, and prior year AOC-4 acknowledgement for continuity</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common AOC-4 Pain Points - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Wrong variant filed (Standard vs XBRL)</strong></td>
                            <td>Companies crossing Rs 5 crore capital or Rs 100 crore turnover MUST file XBRL. Filing standard AOC-4 instead triggers MCA rejection - and the Rs 100 per day penalty clock keeps running while you correct the form.</td>
                            <td>Patron tests four XBRL criteria on intake (listed status, capital, turnover, Ind AS) and locks the variant before any drafting. Zero variant-mismatch rejections across 1,400+ FY 2024-25 filings.</td>
                        </tr>
                        <tr>
                            <td><strong>2. Scanned signature copies rejected</strong></td>
                            <td>MCA does not accept SD (scanned) signature copies on AOC-4 attachments under Section 134. Every signed page must be hand-signed in ink and re-scanned. Many platforms send back scanned copies for re-signing two days before the deadline.</td>
                            <td>Patron enforces hand-signed-only on the document collection checklist. Scanned copies sent back for fresh in-ink signing at intake, not at the deadline.</td>
                        </tr>
                        <tr>
                            <td><strong>3. AOC-4 filed before MGT-7 / MGT-7A sequencing error</strong></td>
                            <td>The MCA V3 portal expects AOC-4 to be filed BEFORE MGT-7 / MGT-7A since the annual return references the AOC-4 SRN. Filing in reverse sequence causes MGT-7 / MGT-7A rejection and re-filing.</td>
                            <td>Patron always files AOC-4 first within the 30-day window and uses its validated SRN for the annual return. Sequencing is locked in the engagement workflow, not left to manual coordination.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Missing CSR-2 addendum for Section 135 companies</strong></td>
                            <td>Companies covered under Section 135(1) must file CSR-2 as an addendum to AOC-4. Many platforms file AOC-4 alone and discover the CSR-2 requirement weeks later, with penalty accrued.</td>
                            <td>Patron runs the Section 135 applicability check at variant selection (net worth Rs 500 cr, turnover Rs 1,000 cr, or net profit Rs 5 cr triggers) and prepares CSR-2 in parallel with AOC-4 - filed concurrently.</td>
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
            <h2 class="section-title">AOC-4 Filing Pricing: Standalone vs Bundle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>AOC-4 Standard (Default variant, no XBRL / CFS / NBFC trigger)</td><td class="text-end">Rs 8,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>AOC-4 XBRL (Listed / Rs 5 cr capital / Rs 100 cr turnover / Ind AS)</td><td class="text-end">Rs 12,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>AOC-4 CFS (Consolidated - companies with subsidiaries)</td><td class="text-end">Rs 15,000 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Bundled in Full Annual Compliance Package (covers 6+ forms - AOC-4 + MGT-7/7A + ADT-1 + DIR-3 KYC + DPT-3 + MSME-1 + audit + ITR-6)</td><td class="text-end"><span class="badge-included">Included</span> in Rs 35,000 annual bundle</td></tr>
                        <tr><td>Government Filing Fee - Nominal share capital less than Rs 1 lakh</td><td class="text-end">Rs 200 per document</td></tr>
                        <tr><td>Government Filing Fee - Nominal share capital Rs 1 lakh to Rs 4,99,999</td><td class="text-end">Rs 300 per document</td></tr>
                        <tr><td>Government Filing Fee - Nominal share capital Rs 5 lakh to Rs 24,99,999</td><td class="text-end">Rs 400 per document</td></tr>
                        <tr><td>Government Filing Fee - Nominal share capital Rs 25 lakh to Rs 99,99,999</td><td class="text-end">Rs 500 per document</td></tr>
                        <tr><td>Government Filing Fee - Nominal share capital Rs 1 crore or more</td><td class="text-end">Rs 600 per document</td></tr>
                        <tr><td>Late Filing Additional Fee (effective 1 July 2018, no upper cap)</td><td class="text-end">Rs 100 per day</td></tr>
                        <tr><td>Section 137(3) Penalty - Company (post Companies (Amendment) Act, 2020)</td><td class="text-end">Rs 10,000 + Rs 100/day continuing, capped at Rs 2,00,000</td></tr>
                        <tr><td>Section 137(3) Penalty - Officer in Default (post 2020 Amendment, decriminalized)</td><td class="text-end">Rs 10,000 + Rs 100/day continuing, capped at Rs 50,000</td></tr>
                        <tr><td>Late Fee Worked Example - 30 days delay</td><td class="text-end">Rs 3,000</td></tr>
                        <tr><td>Late Fee Worked Example - 90 days delay</td><td class="text-end">Rs 9,000</td></tr>
                        <tr><td>Late Fee Worked Example - 365 days delay</td><td class="text-end">Rs 36,500</td></tr>
                        <tr><td>Director Disqualification under Section 164(2) - 3 consecutive years of non-filing</td><td class="text-end">5-year ban on any company directorship</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free AOC-4 Filing Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AOC%204%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AOC-4 Filing Timeline (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Financial year ends</td><td class="text-end">31 March 2026</td></tr>
                        <tr><td>Statutory audit completion (recommended)</td><td class="text-end">By August 2026</td></tr>
                        <tr><td>Board meeting to approve audited financials</td><td class="text-end">Before AGM (Section 134)</td></tr>
                        <tr><td>Annual General Meeting (regular companies, Section 96)</td><td class="text-end">By 30 September 2026</td></tr>
                        <tr><td><strong>AOC-4 filing deadline - regular companies (Section 137 + Rule 12)</strong></td><td class="text-end"><strong>Within 30 days of AGM (end October 2026)</strong></td></tr>
                        <tr><td><strong>AOC-4 filing deadline - One Person Company (Section 137(1))</strong></td><td class="text-end"><strong>Within 180 days of FY end (27 September 2026)</strong></td></tr>
                        <tr><td>AOC-4 XBRL filing (if applicable)</td><td class="text-end">Same as AOC-4 - 30 days from AGM</td></tr>
                        <tr><td>AOC-4 CFS filing (if subsidiaries)</td><td class="text-end">Same as AOC-4 - 30 days from AGM</td></tr>
                        <tr><td>CSR-2 addendum (if Section 135 applies)</td><td class="text-end">Concurrent with AOC-4</td></tr>
                        <tr><td>MGT-7 / MGT-7A annual return (downstream, Section 92)</td><td class="text-end">Within 60 days of AGM (by 29 November 2026)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Patron Turnaround (data finalised to filing)</strong></td><td class="text-end"><strong>5 to 7 working days</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; Start in August.</strong> Last-week filings carry rejection risk - any pre-scrutiny error pushes you past the 30-day window and the Rs 100 per day clock starts. With 8 weeks of buffer (August to end October), variant selection, attachment authentication, and DSC issues can be fixed without penalty exposure.</p>
                    <p style="margin-top:12px;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the AOC-4 variant required, volume of attachments, and the company's authorised capital slab for government filing fee.</p>


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
            <h2 class="section-title">Why Use a CA Firm for AOC-4 Filing</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Variant Selection Risk</h3>
                <p>Filing standard AOC-4 when XBRL is mandatory triggers rejection and the penalty clock runs while you correct. A CA firm tests XBRL applicability against four criteria before any drafting starts.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>Section 134 Signing Compliance</h3>
                <p>MCA does not accept scanned signatures on AOC-4 attachments under Section 134. Many platforms send back hand-signed copies for re-signing two days before deadline, missing the window. Patron enforces hand-signed-only at intake.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Director Liability</h3>
                <p>Directors face personal liability under Section 137(3) post-2020 Amendment - Rs 10,000 + Rs 100/day continuing penalty capped at Rs 50,000 per officer in default; Rs 2,00,000 cap on the company. Three consecutive years of non-filing triggers Section 164(2) disqualification for 5 years.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Sequencing with MGT-7 / MGT-7A</h3>
                <p>MCA V3 portal expects AOC-4 first, then MGT-7 / MGT-7A which references the AOC-4 SRN. Patron always files AOC-4 inside the 30-day window and uses its SRN for the annual return.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>No-Cap Daily Penalty Math</h3>
                <p>Late filing attracts Rs 100 per day with no upper cap from 1 July 2018. A 90-day delay wipes out the standalone professional saving. Automated 30 / 15 / 7 / 1 day reminders eliminate this risk entirely.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Bundle Economics</h3>
                <p>If you need AOC-4, you also need MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, ITR-6. Standalone totals Rs 35,000 to 50,000 - same as the Patron bundle but with no central calendar and no continuity.</p>
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
                    <li>Patron filed <strong>1,400+ AOC-4 returns</strong> (Standard, XBRL, CFS combined) in FY 2024-25</li>
                    <li><strong>100 percent on-time filing rate</strong> across all engagements</li>
                    <li><strong>Sub-1 percent MCA query rate</strong> on the AOC-4 client base</li>
                    <li>Zero variant-mismatch rejections across the 1,400+ filing volume</li>
                    <li>Average turnaround from data-finalisation to filing: <strong>5 to 7 working days</strong></li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves AOC-4 standalone and full annual compliance engagements across India - both in-person and remotely. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AOC-4 vs MGT-7 / MGT-7A: Side-by-Side</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>AOC-4</th><th>MGT-7 / MGT-7A</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Purpose</td><td>Financial statements filing</td><td>Annual return - structural / governance filing</td></tr>
                        <tr><td>Governing Section</td><td>Section 137 of Companies Act 2013</td><td>Section 92 of Companies Act 2013</td></tr>
                        <tr><td>Governing Rule</td><td>Rule 12, Companies (Accounts) Rules 2014</td><td>Rule 11, Companies (Management and Administration) Rules 2014</td></tr>
                        <tr><td>What it contains</td><td>Balance sheet, P and L, auditor report, board report, AOC-1, AOC-2</td><td>Shareholding pattern, director details, key managerial personnel, charges, governance disclosures</td></tr>
                        <tr><td>Due date</td><td>30 days from AGM (180 days from FY end for OPC)</td><td>60 days from AGM</td></tr>
                        <tr><td>Filing sequence</td><td>Filed FIRST (provides SRN referenced in MGT-7)</td><td>Filed SECOND, after AOC-4</td></tr>
                        <tr><td>Who certifies</td><td>CA / CS / CMA in practice (for non-OPC, non-small companies)</td><td>CS in practice for listed companies and companies at Rs 10 cr capital or Rs 50 cr turnover (Form MGT-8 certification)</td></tr>
                        <tr><td>Variant forms</td><td>AOC-4, AOC-4 XBRL, AOC-4 CFS, AOC-4 NBFC, AOC-4 CSR-2 addendum</td><td>MGT-7 (regular), MGT-7A (small company / OPC)</td></tr>
                        <tr><td>Late fee</td><td>Rs 100 per day, no cap</td><td>Rs 100 per day, no cap</td></tr>
                        <tr><td>Patron standalone fee</td><td>Rs 8,000 to Rs 15,000</td><td>Rs 8,000 to Rs 12,000 typically</td></tr>


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
                
                
                <p>AOC-4 is one of seven annual filings for a private limited company. If you are filing AOC-4, you almost certainly need the others too. The most relevant partner services:</p>
                <ul>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Private Limited Company Annual Compliance</strong></a> - the full bundle covering AOC-4, MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, DPT-3, MSME-1, audit, and ITR-6 at Rs 35,000 fixed fee.</li>
                    <li><a href="/small-company-annual-compliance"><strong>Small Company Annual Compliance</strong></a> - the specialised package for Section 2(85) small companies at Rs 35,000 with MGT-7A instead of MGT-7.</li>
                    <li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance</strong></a> - the broader Pvt Ltd hub including event-based filings.</li>
                    <li><a href="/llp-annual-compliance"><strong>LLP Annual Compliance</strong></a> - the parallel annual cycle for LLPs (Form 11 + Form 8).</li>
                    <li><a href="/mgt-7-filing-services"><strong>MGT-7 Filing Services</strong></a> - downstream annual return form filed after AOC-4.</li>
                    <li><a href="/roc-notice"><strong>ROC Notice Response</strong></a> - handling MCA notices, resubmission of rejected AOC-4.</li>
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
                    <li><strong>Companies Act, 2013</strong> - master statute (Sections 134, 137, 137(3), 164)</li>
                    <li><strong>Companies (Accounts) Rules, 2014</strong> - Rule 12 governs AOC-4 procedure and timeline</li>
                    <li><strong>Companies (Filing of Documents and Forms in XBRL) Rules, 2015</strong> - XBRL applicability and procedure</li>
                    <li><strong>Companies (Indian Accounting Standards) Rules, 2015</strong> - Ind AS framework triggering XBRL</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - government filing fees and additional fee slabs (Rs 100 per day with no upper cap effective 1 July 2018)</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections</h3>
                <ul>
                    <li><strong>Section 134</strong> - financial statement signing requirements (chairperson or two directors)</li>
                    <li><strong>Section 137(1)</strong> - obligation to file AOC-4 within 30 days of AGM; 180 days for OPC</li>
                    <li><strong>Section 137(3)</strong> - penalty for non-filing (post Companies (Amendment) Act, 2020): company Rs 10,000 + Rs 100/day continuing capped at Rs 2,00,000; officer in default Rs 10,000 + Rs 100/day capped at Rs 50,000 (decriminalized - imprisonment removed)</li>
                    <li><strong>Section 164(2)</strong> - director disqualification for 5 years on 3 consecutive years of non-filing</li>
                    <li><strong>Section 135</strong> - CSR applicability triggering CSR-2 addendum</li>
                    <li><strong>Section 248</strong> - strike-off of company for prolonged non-filing (2+ years pending)</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule</h3>
                <ul>
                    <li><strong>Additional fee for late filing:</strong> Rs 100 per day with no upper cap from 1 July 2018 onwards (Rule 12 + Registration Offices and Fees Rules)</li>
                    <li><strong>Company penalty under Section 137(3) (post 2020 Amendment):</strong> Rs 10,000 base + Rs 100 per day continuing, capped at Rs 2,00,000</li>
                    <li><strong>Officer in default penalty under Section 137(3) (post 2020 Amendment, decriminalized):</strong> Rs 10,000 base + Rs 100 per day continuing, capped at Rs 50,000</li>
                    <li><strong>Director disqualification under Section 164(2):</strong> 5 years on 3 consecutive years of non-filing</li>
                    <li><strong>Strike-off under Section 248:</strong> where annual filings pending for 2 or more years</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for AOC-4 form access and filing, and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for the full statutory text.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on AOC-4 filing, due dates, late fees, XBRL applicability, OPC variants, and how the form differs from MGT-7 / MGT-7A.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'AOC-4 Filing Services',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Form AOC-4 and who must file it?</h3>
                        <div class="faq-expanded__a"><p>Form AOC-4 is the MCA e-form used to file a company's audited financial statements with the Registrar of Companies under Section 137 of the Companies Act, 2013 read with Rule 12 of Companies (Accounts) Rules, 2014. Every company registered under the Companies Act - Private Limited, Public Limited, One Person Company, Section 8 Company - must file AOC-4 every financial year, regardless of turnover, profit, or business activity. Dormant companies file nil financial statements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for AOC-4?</h3>
                        <div class="faq-expanded__a"><p>AOC-4 must be filed within 30 days of the Annual General Meeting under Rule 12 of Companies (Accounts) Rules, 2014. For regular companies with AGM by 30 September, the typical AOC-4 deadline falls at end of October. For One Person Companies (OPCs) which do not hold AGM, AOC-4 is due within 180 days from FY end under Section 137(1) - typically 27 September for FY ending 31 March.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents are needed to file AOC-4?</h3>
                        <div class="faq-expanded__a"><p>Required attachments include the audited balance sheet (Schedule III format), profit and loss account, cash flow statement (if applicable), statement of changes in equity (if applicable), notes to accounts, auditor report under Section 143 with CARO 2020 annexure where applicable, board report under Section 134(3), AGM notice and minutes, board resolution approving financials, AOC-1 (subsidiaries), AOC-2 (related-party transactions under Section 188), and active DSC of the authorised signatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the late fee for AOC-4?</h3>
                        <div class="faq-expanded__a"><p>Late filing of AOC-4 attracts an additional fee of Rs 100 per day with no upper cap from the day after the due date until actual filing, effective 1 July 2018. Beyond the daily fee, Section 137(3) (post Companies (Amendment) Act, 2020) imposes a company penalty of Rs 10,000 plus Rs 100 per day continuing capped at Rs 2,00,000, and an officer-in-default penalty of Rs 10,000 plus Rs 100 per day capped at Rs 50,000 (the 2020 Amendment decriminalized this section - imprisonment was removed). Three consecutive years of non-filing triggers director disqualification under Section 164(2) for 5 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between AOC-4 and AOC-4 XBRL?</h3>
                        <div class="faq-expanded__a"><p>AOC-4 is the standard form filed by most companies. AOC-4 XBRL is the variant for listed companies and their Indian subsidiaries, companies with paid-up capital of Rs 5 crore or above, companies with turnover of Rs 100 crore or above, and companies preparing financials under Indian Accounting Standards (Ind AS). XBRL requires the financials to be tagged in a standardised machine-readable taxonomy under Companies (Filing of Documents in XBRL) Rules, 2015.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Who certifies Form AOC-4?</h3>
                        <div class="faq-expanded__a"><p>Form AOC-4 is digitally signed by the Director, CEO, CFO, or Manager of the company - a person authorised by the board. The form must also be certified by a practising Chartered Accountant, Company Secretary, or Cost Accountant who verifies the correctness of the information. Small companies and One Person Companies are exempt from practising-professional certification, but every other company must have CA / CS / CMA certification on the form.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does an OPC also need to file AOC-4?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every One Person Company must file AOC-4 every financial year under Section 137 of the Companies Act, 2013. Because an OPC does not hold an AGM (Section 96 does not apply), the AOC-4 deadline is 180 days from the close of the financial year under Section 137(1) - 27 September for FY ending 31 March. OPCs are exempt from practising-professional certification on AOC-4.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can AOC-4 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only by filing a revised AOC-4 with applicable fees and following the procedure under Section 130 or Section 131 of the Companies Act, 2013 where a re-opening of accounts or voluntary revision is involved. For minor data errors, MCA may permit a corrected filing via the same form. Material revisions involving the financial statements typically require board approval and an Order from the Tribunal under Section 131.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is AOC-4?</strong> Form to file audited financial statements with ROC under Section 137 of the Companies Act, 2013.</p>
                <p><strong>When is AOC-4 due?</strong> Within 30 days of AGM (180 days from FY end for OPC) - typically end October for regular companies.</p>
                <p><strong>Who must file?</strong> Every company registered under Companies Act 2013 - Pvt Ltd, Public Ltd, OPC, Section 8.</p>
                <p><strong>What does Patron charge?</strong> Standalone Rs 8,000 (Standard) to Rs 15,000 (CFS Consolidated); Rs 35,000 in the full annual compliance bundle.</p>
                <p><strong>Penalty for late filing?</strong> Rs 100 per day per form, no upper cap. Section 137(3) penalty (post 2020 Amendment): Rs 10,000 + Rs 100/day capped at Rs 2,00,000 company / Rs 50,000 officer in default. Imprisonment removed by the 2020 decriminalization.</p>
                <p><strong>Bundle or standalone?</strong> If you only need AOC-4 - standalone. If you need any other annual filing (MGT-7 / MGT-7A, ADT-1, DIR-3 KYC, ITR-6) - the bundle is cheaper and safer.</p>
                <p><strong>XBRL applicability?</strong> Listed companies and their Indian subsidiaries, Rs 5 crore capital, Rs 100 crore turnover, or Ind AS companies. Filing standard when XBRL is mandatory triggers rejection.</p>
                <p><strong>AOC-4 form kaise file kare?</strong> <em>AOC-4 hai company ke audited financials ka MCA filing form - Section 137 ke under. AGM ke 30 din ke andar file karna padta hai (OPC ke liye 180 din FY end se). Documents chahiye: audited balance sheet, P and L, auditor report, board report, AGM minutes, aur CA certification. Late hone par Rs 100 per day penalty - bina koi upper cap ke. Patron Rs 8,000 mein standalone karta hai ya Rs 35,000 ke full annual bundle mein.</em></p>
                <p><strong>AOC-4 ka late fee kitna hai?</strong> <em>AOC-4 late filing par Rs 100 per day additional fee lagta hai - 1 July 2018 se koi upper cap nahi hai. Iske upar Section 137(3) ke under (Companies Amendment Act 2020 ke baad) Rs 10,000 base penalty plus Rs 100 per day continuing - max Rs 2,00,000 company par aur Rs 50,000 officer par. 2020 ke amendment ne is section ko decriminalize kiya - imprisonment hata diya. 3 saal continuously file nahi karne par director disqualify ho jaate hain Section 164(2) ke under 5 saal ke liye.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Urgency: FY 2025-26</h2>
            <div class="content-text">
                
                
                <p>For the financial year ending 31 March 2026, AOC-4 deadlines are:</p>
                <ul>
                    <li>Regular companies: <strong>within 30 days of AGM</strong>. With AGM deadline of 30 September 2026, AOC-4 typically falls due by <strong>end October 2026</strong></li>
                    <li>One Person Company: <strong>27 September 2026</strong> (180 days from FY end under Section 137(1))</li>
                    <li>AOC-4 XBRL and AOC-4 CFS: same as standard AOC-4 - 30 days from AGM</li>
                    <li>CSR-2 addendum: concurrent with AOC-4 for Section 135 companies</li>
                </ul>

                <p style="margin-top:16px;"><strong>Start in August.</strong> Missing the deadline triggers Rs 100 per day additional fee with no upper cap, plus Section 137(3) penalty (Rs 10,000 base + Rs 100/day capped at Rs 2,00,000 company / Rs 50,000 officer in default per the post-2020 Amendment text), plus director disqualification under Section 164(2) on three consecutive years of default. Last-week filings carry rejection risk that compounds the penalty.</p>

                <p style="margin-top:16px;"><strong>Talk to Us Before the Deadline - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AOC%204%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free 15-minute consultation. We respond within 2 hours.</strong></p>


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
                
                
                <p style="color:rgba(255,255,255,0.9);">Form AOC-4 is the financial statement filing under Section 137 of the Companies Act, 2013 - mandatory for every company every year, with a 30-day-from-AGM deadline (180 days from FY end for OPC) and a no-cap Rs 100 per day late fee under MCA notification effective 1 July 2018.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Beyond the daily fee, Section 137(3) (post Companies (Amendment) Act, 2020 decriminalization) imposes a company penalty of Rs 10,000 + Rs 100/day capped at Rs 2,00,000, and an officer-in-default penalty capped at Rs 50,000. Section 164(2) disqualifies directors after three consecutive years of non-filing.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Patron files AOC-4 standalone from Rs 8,000, or bundles it into the full annual compliance package at Rs 35,000 covering six MCA forms plus audit and ITR-6. The bundle is materially better value once you account for the other annual filings every company also needs.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20AOC%204%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">AOC-4 Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. AOC-4 filing, full annual compliance bundle, and ROC representation delivered pan-India.</p>
        
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise AOC-4 Filing Service Pages</div>
                <div class="pa-block-sub">Local presence - same service, local CA team for in-person coordination</div>
                <div class="pa-city-grid">
                    <a href="/aoc-4-filing-services" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/aoc-4-filing-services" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/aoc-4-filing-services" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/aoc-4-filing-services" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">The 6 other annual filings AOC-4 connects to</div>
                <div class="pa-cross-grid">
                    <a href="/mgt-7-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing</div><div class="pa-card-sub">India</div></div>
                    </a>
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">Full Bundle Rs 35k</div></div>
                    </a>
                    <a href="/small-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Small Company Compliance</div><div class="pa-card-sub">Section 2(85)</div></div>
                    </a>
                    <a href="/llp-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">LLP Annual Compliance</div><div class="pa-card-sub">Form 11 + Form 8</div></div>
                    </a>
                    <a href="/private-limited-company-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Compliance Hub</div><div class="pa-card-sub">Event + Annual</div></div>
                    </a>
                    <a href="/roc-notice" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">Rejection Recovery</div></div>
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
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026. Review triggers include changes to AOC-4 form structure or variants on MCA V3 portal, amendment to Rule 12 of Companies (Accounts) Rules, change in Section 137(3) penalty caps, amendment to XBRL applicability thresholds, change in Section 135 CSR triggers, and revisions to Patron standalone or annual bundle pricing.</p>
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
