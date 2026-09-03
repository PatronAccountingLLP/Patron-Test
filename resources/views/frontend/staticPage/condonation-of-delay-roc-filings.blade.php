
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Condonation of Delay ROC Filings 2026 | Patron Accounting">
    <meta name="twitter:description" content="Section 460 condonation of delay + Section 441 compounding for ROC backlog. 1-5+ year defaults rectified. Fixed-fee Rs 50,000 to Rs 2,00,000. CA + CS handled.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/condonation-of-delay-roc-filings#breadcrumb",
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
                        "name": "Condonation of Delay and Compounding for ROC Backlog",
                        "item": "https://www.patronaccounting.com/condonation-of-delay-roc-filings"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/condonation-of-delay-roc-filings#faq",
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
                "@id": "https://www.patronaccounting.com/condonation-of-delay-roc-filings#service",
                "name": "Condonation of Delay and Compounding for ROC Backlog",
                "url": "https://www.patronaccounting.com/condonation-of-delay-roc-filings",
                "description": "End-to-end ROC backlog cleanup via Section 460 condonation (Form CG-1) and Section 441 compounding (Form GNL-1) under the Companies Act, 2013. Includes board resolutions, Central Government / RD / NCLT representation, Form INC-28 closure, originally delayed document filing, and CCFS-2026 amnesty optimisation. Fixed-fee Rs 50,000 to Rs 2,00,000 by backlog years.",
                "serviceType": "Corporate Compliance and Litigation Service",
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
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Condonation%20of%20Delay%20ROC%20Filings%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Condonation of Delay ROC Filings',
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
    'ctaText'    => 'Free 15-minute consultation. Backlog diagnostic in 24 hours. CCFS-2026 amnesty eligibility checked on Day 1. Path selection (Section 460 vs Section 441) locked before billing begins.',
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
                <p style="margin-top:16px;"><strong>Get a free Condonation of Delay ROC Filings consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Condonation%20of%20Delay%20ROC%20Filings%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Condonation of Delay ROC Filings',
                    ])
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

                <p style="margin-top:16px;"><strong>Get a Free Backlog Diagnostic in 24 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Condonation%20of%20Delay%20ROC%20Filings%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free 15-minute consultation. We respond within 2 hours during business hours.</p>


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
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Condonation%20of%20Delay%20ROC%20Filings%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Condonation and Compounding Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. Section 460 condonation, Section 441 compounding, and CCFS-2026 amnesty-leveraged cleanup delivered pan-India - RD hearings attended in person; NCLT representation through panel counsel.</p>
          
            
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise Cleanup Engagement Pages</div>
                <div class="pa-block-sub">Local CS and CA team for in-person RD hearing coordination across ROC jurisdictions</div>
                <div class="pa-city-grid">
                    <a href="/condonation-of-delay-roc-filings" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Condonation in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Condonation in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">Condonation in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings" class="pa-city-card">
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
