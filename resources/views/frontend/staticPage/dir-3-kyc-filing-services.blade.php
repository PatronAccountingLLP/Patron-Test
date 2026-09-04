
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>DIR-3 KYC Filing Services</title>
    <meta name="description" content="DIR-3 KYC under new triennial regime (G.S.R. 943(E)). Unified DIR-3 KYC Web form. DIN reactivation Rs 5,000. From Rs 2,000 per director.">
    <link rel="canonical" href="/dir-3-kyc-filing-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="DIR-3 KYC Filing Services 2026 | Patron Accounting">
    <meta property="og:description" content="DIR-3 KYC under new triennial regime (G.S.R. 943(E)). Unified DIR-3 KYC Web form. DIN reactivation Rs 5,000. From Rs 2,000 per director.">
    <meta property="og:url" content="/dir-3-kyc-filing-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DIR-3 KYC Filing Services 2026 | Patron Accounting">
    <meta name="twitter:description" content="DIR-3 KYC under new triennial regime (G.S.R. 943(E)). Unified DIR-3 KYC Web form. DIN reactivation Rs 5,000. From Rs 2,000 per director.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "https://www.patronaccounting.com/dir-3-kyc-filing-services#breadcrumb",
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
                        "name": "Director KYC",
                        "item": "https://www.patronaccounting.com/director-kyc"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "DIR-3 KYC Filing Services",
                        "item": "https://www.patronaccounting.com/dir-3-kyc-filing-services"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "https://www.patronaccounting.com/dir-3-kyc-filing-services#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is DIR-3 KYC and who must file it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DIR-3 KYC is the director Know-Your-Customer filing under Rule 12A of Companies (Appointment and Qualification of Directors) Rules, 2014. As amended by G.S.R. 943(E) dated 31 December 2025 (effective 31 March 2026), it is now a TRIENNIAL filing rather than annual. Every individual holding an active Director Identification Number (DIN) or Designated Partner Identification Number (DPIN) as on 31 March of the relevant financial year must file DIR-3 KYC Web by 30 June of every third consecutive financial year. This includes Indian and foreign nationals, LLP designated partners, disqualified directors, resigned directors, and individuals who hold DIN but never accepted a board appointment."
                }
            },
            {
                "@type": "Question",
                "name": "What is the due date for DIR-3 KYC filing under the new regime?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The annual 30 September deadline that applied until FY 2024-25 has been REPLACED with a triennial 30 June deadline effective 31 March 2026. Under the new Rule 12A, every individual holding DIN as on 31 March of a financial year files DIR-3 KYC Web by 30 June of every third consecutive financial year. Per the MCA press note issued with G.S.R. 943(E), directors who completed their FY 2024-25 KYC (by 30 September 2025) have their next routine filing due 30 June 2028. Separately, any change in mobile, email, or residential address requires DIR-3 KYC Web filing within 30 days - independent of the triennial cycle."
                }
            },
            {
                "@type": "Question",
                "name": "What happened to the DIR-3 KYC Web versus e-Form split?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under G.S.R. 943(E), the two prior forms (DIR-3 KYC e-Form and DIR-3 KYC-WEB) have been CONSOLIDATED into a single Form DIR-3 KYC Web. The unified form handles all use cases - routine triennial filing, event-based update for detail changes, DIN reactivation, and first-time filing for newly issued DIN. Form selection is no longer a decision point; the same DIR-3 KYC Web form is used for every filing type. Professional certification (CA / CS / CMA) is required for filings involving detail changes or DIN reactivation."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for not filing DIR-3 KYC?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Missing the deadline triggers two consequences. First, a late filing fee of Rs 5,000 per DIN (non-refundable) becomes payable when you eventually file. Second, MCA automatically deactivates the DIN. Deactivated DIN blocks every MCA form filing across every company and LLP where the individual holds a role - AOC-4, MGT-7, DPT-3, MSME-1, DIR-12, MGT-14, PAS-3, and others. Those blocked filings continue accruing their own per-day late fees (Rs 100/day for AOC-4 / MGT-7 under Section 403) while DIN remains deactivated. The compounding cost of a missed DIR-3 KYC almost always exceeds Rs 10,000 within a fortnight."
                }
            },
            {
                "@type": "Question",
                "name": "How do I reactivate a deactivated DIN?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "File the unified Form DIR-3 KYC Web with complete documentation - PAN, Aadhaar (Indian) or passport (foreign), recent address proof, photograph, current mobile and email, and Class 3 DSC. Pay the Rs 5,000 reactivation fee at the time of submission. The form must be certified by a practising CA, CS, or CMA via DSC. MCA typically approves within 1 to 5 working days. Once status flips to 'Approved' on the MCA portal, immediately release any queued downstream filings (AOC-4, MGT-7, DPT-3, MSME-1, etc.) to stop their separate penalty clocks running."
                }
            },
            {
                "@type": "Question",
                "name": "Do foreign-national directors also need to file DIR-3 KYC?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Every individual holding active DIN must file DIR-3 KYC regardless of nationality. Foreign nationals use the unified DIR-3 KYC Web form with passport in place of Aadhaar. Documentation includes notarised and apostilled / consularised copies of passport and foreign address proof (utility bill or bank statement). PAN is required where the foreign national has one; where not, the underlying DIN was issued under Rule 9 with alternative documentation, and KYC follows the same alternative-document path."
                }
            },
            {
                "@type": "Question",
                "name": "Do LLP designated partners need to file DIR-3 KYC?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. LLP designated partners hold a DPIN (Designated Partner Identification Number) which is treated as equivalent to DIN for DIR-3 KYC purposes. The same Rule 12A applies - triennial filing of DIR-3 KYC Web by 30 June of every third consecutive financial year, plus event-based updates within 30 days for any change in mobile / email / address. Missing the filing deactivates DPIN, which then blocks LLP Form 8, Form 11, and every event-based LLP filing. The Rs 5,000 reactivation fee and process are identical to DIN reactivation."
                }
            },
            {
                "@type": "Question",
                "name": "Does a resigned director or someone who never served on a board still need to file?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. The trigger is DIN status on 31 March, not active board membership. A director who resigned during the financial year still has an active DIN on 31 March (unless DIN was separately surrendered via Form DIR-5). An individual who obtained DIN years ago but never accepted any board appointment still has an active DIN. Both must file DIR-3 KYC Web in the next applicable triennial cycle. To stop the recurring obligation permanently, the only path is DIR-5 surrender of DIN - which is a separate procedure under Rule 11."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "https://www.patronaccounting.com/dir-3-kyc-filing-services#service",
                "name": "DIR-3 KYC Filing Services in India",
                "url": "https://www.patronaccounting.com/dir-3-kyc-filing-services",
                "description": "DIR-3 KYC Web filing under amended Rule 12A of Companies (Appointment and Qualification of Directors) Rules, 2014 - triennial regime effective 31 March 2026 via G.S.R. 943(E) dated 31 December 2025. Covers routine triennial filing, event-based updates for mobile / email / address changes, DIN reactivation, first-time KYC, foreign-national director documentation, and LLP designated partner (DPIN) compliance. Fixed-fee from Rs 2,000 per director.",
                "serviceType": "Director Compliance Filing Service",
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
                        "name": "Director Identification Number",
                        "sameAs": "https://en.wikipedia.org/wiki/Director_Identification_Number"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "DIR-3 KYC Filing Packages",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "Routine Triennial DIR-3 KYC Web",
                            "price": "2000",
                            "priceCurrency": "INR",
                            "description": "Routine triennial DIR-3 KYC Web filing for DIN holders with no detail changes since last KYC. Unified Form DIR-3 KYC Web filed via MCA V3 portal. Same-day to 1 working day turnaround."
                        },
                        {
                            "@type": "Offer",
                            "name": "DIR-3 KYC Web - First Time or Detail Change",
                            "price": "3000",
                            "priceCurrency": "INR",
                            "description": "First-time KYC for newly issued DIN, or event-based update (mobile / email / address change within 30-day window). Includes documentation review and CA / CS / CMA professional certification."
                        },
                        {
                            "@type": "Offer",
                            "name": "DIR-3 KYC Web with DIN Reactivation",
                            "price": "4000",
                            "priceCurrency": "INR",
                            "description": "DIN deactivated due to prior non-filing. Includes Rs 5,000 MCA reactivation fee payment, professional certification, status confirmation, and release of queued downstream filings (AOC-4 / MGT-7)."
                        },
                        {
                            "@type": "Offer",
                            "name": "Annual Compliance Bundle (DIR-3 KYC Included Free)",
                            "price": "35000",
                            "priceCurrency": "INR",
                            "description": "Private Limited Annual Compliance bundle - DIR-3 KYC for all directors INCLUDED free. Plus AOC-4, MGT-7 / MGT-7A, ADT-1, DPT-3, MSME-1, statutory audit, ITR-6."
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
                        DIR-3 KYC Filing Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>New Regime:</span> Triennial DIR-3 KYC Web filing (every 3rd FY by 30 June) under amended Rule 12A effective 31 March 2026.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 2,000 per director (routine triennial) to Rs 4,000 (with DIN reactivation + Rs 5,000 MCA fee).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every individual holding active DIN or DPIN as on 31 March - Indian, foreign, LLP designated partner.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Patron turnaround 1-2 working days. Next routine due 30 June 2028 for FY 2024-25 KYC-current directors.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 2,800+ FY24-25 DIR-3 KYCs Filed | 100% On-Time Rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Dir%203%20KYC%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'DIR-3 KYC Filing Services',
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
    'ctaText'    => 'Free 15-minute consultation. Triennial cycle tracking for retainer clients. DIN reactivation with downstream backlog release in 3-5 working days.',
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
                <a href="#what-section" class="toc-btn">New Triennial Regime</a>
                <a href="#who-section" class="toc-btn">Who Must File</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">7-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why CA Firm</a>
                <a href="#comparison-section" class="toc-btn">DIN Scenarios</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: DIR-3 KYC Filing at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - DIR-3 KYC Filing Services Services at a Glance</strong></p>
                    <p><strong>DIR-3 KYC is now a TRIENNIAL filing</strong> under amended Rule 12A of Companies (Appointment and Qualification of Directors) Rules, 2014. The Companies (Appointment and Qualification of Directors) Amendment Rules, 2025 - notified via <strong>G.S.R. 943(E) dated 31 December 2025</strong> and <strong>effective 31 March 2026</strong> - replaced the annual 30 September regime with a triennial 30 June cycle. The two old forms (DIR-3 KYC e-Form and DIR-3 KYC-Web) are now consolidated into a single Form DIR-3 KYC Web. Per MCA press note, directors current on FY 2024-25 KYC have their next routine filing due <strong>30 June 2028</strong>. Patron files DIR-3 KYC Web from Rs 2,000 per director (Rs 4,000 + Rs 5,000 MCA fee for DIN reactivation).</p>
                </div>
                <p>Two parallel obligations apply under the new Rule 12A. The TRIENNIAL obligation: file DIR-3 KYC Web on or before 30 June of every third consecutive financial year following the FY in which DIN is held on 31 March. The EVENT-BASED obligation (operates independently): file DIR-3 KYC Web within 30 days of any change in personal mobile number, email address, or residential address - with applicable fee under Companies (Registration Offices and Fees) Rules, 2014.</p>
                <p>Below is the quick-reference summary covering governing law, applicability, the new triennial and event-based obligations, Patron's pricing for routine filing and DIN reactivation, penalty consequences (DIN deactivation plus cascade impact on AOC-4 / MGT-7 / other MCA filings), the unified Form DIR-3 KYC Web, and the MCA V3 portal route.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 153, 154, 164 read with Rule 12A of Companies (Appointment and Qualification of Directors) Rules, 2014 as amended by G.S.R. 943(E) dated 31 December 2025 (effective 31 March 2026)</td></tr>
                        <tr><td>Applicable To</td><td>Every individual holding active DIN or DPIN as on 31 March - Indian and foreign nationals, LLP designated partners, disqualified directors, resigned directors, individuals who hold DIN but never served on a board</td></tr>
                        <tr><td>Routine Filing</td><td>DIR-3 KYC Web by 30 June of immediately following every third consecutive financial year. Per MCA press note: directors current on FY 2024-25 KYC have next filing due 30 June 2028.</td></tr>
                        <tr><td>Event-Based Filing</td><td>DIR-3 KYC Web within 30 days of any change in mobile number, email address, or residential address. Operates independently of triennial cycle.</td></tr>
                        <tr><td>Cost (Patron)</td><td>Rs 2,000 per director (routine triennial Web filing). Rs 3,000 (event-based update with detail changes). Rs 4,000 + Rs 5,000 MCA fee (DIN reactivation). Free in full annual compliance bundle.</td></tr>
                        <tr><td>Penalty</td><td>Late filing fee: Rs 5,000 per DIN (non-refundable). Automatic DIN deactivation on missed filing. Deactivated DIN blocks ALL MCA form filings (AOC-4, MGT-7, etc.) across every company and LLP.</td></tr>
                        <tr><td>Form / Portal</td><td>Unified Form DIR-3 KYC Web (replaces old DIR-3 KYC e-Form + DIR-3 KYC-Web split) | MCA V3 portal</td></tr>
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
                <h2 class="section-title">DIR-3 KYC Under the New Triennial Regime</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p>DIR-3 KYC is the Know-Your-Customer filing required for every individual holding a Director Identification Number (DIN) or Designated Partner Identification Number (DPIN). The filing serves a simple regulatory purpose - to keep the MCA register of directors current with verified identity, mobile, email, and residential address details.</p>

                    <h3 style="margin-top:24px;">The 31 March 2026 Regime Change</h3>
                    <p>The Companies (Appointment and Qualification of Directors) Amendment Rules, 2025 were notified via <strong>G.S.R. 943(E) dated 31 December 2025</strong> and came into force on <strong>31 March 2026</strong>. The amendment substituted Rule 12A with a fundamentally new compliance architecture:</p>

                    <ul style="margin-top:16px;">
                        <li><strong>From annual to triennial:</strong> The 30 September annual deadline that applied from 2018 to FY 2024-25 has been replaced with a 30 June deadline that recurs every third consecutive financial year.</li>
                        <li><strong>Form unification:</strong> The two prior forms (DIR-3 KYC e-Form and DIR-3 KYC-Web) have been consolidated into a single Form DIR-3 KYC Web.</li>
                        <li><strong>Event-based update preserved:</strong> Any change in mobile number, email address, or residential address must still be reported on DIR-3 KYC Web within 30 days - this runs independently of the triennial cycle.</li>
                    </ul>

                    <div class="highlight-box" style="margin-top:24px;background:#E8F5E9;border-left:4px solid #10B981;">
                        <p><strong>&#10003; Per MCA press note (31 December 2025).</strong> Directors who completed their KYC for FY 2024-25 (by 30 September 2025) are covered under the new provisions - their next KYC filing is due <strong>30 June 2028</strong>. Directors who had missed prior KYCs and saw their DINs deactivated could reactivate under the old provisions until 31 March 2026. From 1 April 2026 onwards, reactivation continues under the new regime via DIR-3 KYC Web with the Rs 5,000 reactivation fee.</p>
                    </div>

                    <h3 style="margin-top:32px;">Event-Agnostic Obligation</h3>
                    <p>The filing trigger is DIN status, not active board membership. Whether you actively serve on a board, have resigned, were disqualified, or hold a DIN but never accepted an appointment - if your DIN was active on 31 March of any financial year that completes a triennial cycle, you must file DIR-3 KYC Web by 30 June of the immediately following financial year. The MCA does not distinguish among these scenarios.</p>

                    <h3 style="margin-top:24px;">What Did NOT Change</h3>
                    <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Element</th>
                                <th>Status Post 31 March 2026</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Trigger - DIN holding status on 31 March</td><td>Unchanged</td></tr>
                            <tr><td>Rs 5,000 late filing fee per DIN (non-refundable)</td><td>Unchanged</td></tr>
                            <tr><td>DIN deactivation on missed filing</td><td>Unchanged - now applied under new Rule 12A</td></tr>
                            <tr><td>Cascade impact on AOC-4, MGT-7, other MCA filings</td><td>Unchanged - DIN deactivation still blocks all forms</td></tr>
                            <tr><td>DPIN equivalence for LLP designated partners</td><td>Unchanged - same Rule 12A applies</td></tr>
                            <tr><td>Foreign-national director e-Form documentation</td><td>Now handled in unified DIR-3 KYC Web form with passport + apostille / consularisation</td></tr>
                            <tr><td>Mobile and email uniqueness per DIN holder</td><td>Unchanged</td></tr>
                        </tbody>
                    </table>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for DIR-3 KYC Filing Services:</strong></p>
                    
                    <p><strong>DIN (Director Identification Number):</strong> Unique identification number allotted to every individual who is or intends to be a director under Sections 153 and 154 of the Companies Act, 2013. The DIN is portable across companies and remains active until separately surrendered (via Form DIR-5) or deactivated by MCA.</p>
                    <p><strong>DPIN (Designated Partner Identification Number):</strong> Equivalent identification for LLP designated partners under the LLP Act, 2008 read with LLP Rules, 2009. For DIR-3 KYC purposes, DPIN is treated identical to DIN under Rule 12A.</p>
                    <p><strong>Rule 12A (substituted by G.S.R. 943(E)):</strong> "Every individual who holds a Director Identification Number as on the 31st March of a financial year, shall file KYC intimation in Form No. DIR-3 KYC Web to the Central Government on or before the 30th June of the immediately following every third consecutive financial year."</p>
                    <p><strong>Rule 12A(2):</strong> "Every individual holding a Director Identification Number shall, in the event of change in his personal mobile number, email address or residential address, submit Form No. DIR-3 KYC Web within a period of thirty days of such change along with fee as provided under the Companies (Registration Offices and Fees) Rules, 2014."</p>
                    <p><strong>Form DIR-3 KYC Web (unified):</strong> Single web-based form replacing the prior DIR-3 KYC e-Form + DIR-3 KYC-Web split. Used for all DIR-3 KYC purposes - routine triennial KYC, event-based updates, DIN reactivation, and first-time filing.</p>
                    <p><strong>DIN deactivation:</strong> MCA automatically deactivates DIN on missed DIR-3 KYC filing. Deactivated DIN blocks every MCA form filing across every company and LLP where the individual holds a role.</p>
                    <p><strong>DIN reactivation:</strong> File DIR-3 KYC Web with Rs 5,000 reactivation fee + applicable supporting documents + CA / CS / CMA certification where required.</p>
                    <p><strong>G.S.R. 943(E):</strong> Notification dated 31 December 2025 from Ministry of Corporate Affairs - notifying the Companies (Appointment and Qualification of Directors) Amendment Rules, 2025 with effect from 31 March 2026.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DIR-3 KYC Filing Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Unified Form</span>
                        <strong>DIR-3 KYC Web</strong>
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
            <h2 class="section-title">Who Must File DIR-3 KYC?</h2>
            <div class="content-text">
                
                
                <p>Rule 12A casts a wide net. The test is simple - did you hold an active DIN or DPIN as on 31 March of the relevant financial year? If yes, you are within the filing universe. The MCA does not exempt:</p>

                <ul>
                    <li><strong>Active directors</strong> of private and public companies in India</li>
                    <li><strong>Foreign-national DIN holders</strong> - file DIR-3 KYC Web with passport in place of Aadhaar plus apostille / consularisation chain</li>
                    <li><strong>LLP designated partners holding DPIN</strong> - treated equivalent to DIN for DIR-3 KYC purposes</li>
                    <li><strong>Directors who resigned during the financial year</strong> - if DIN was active on 31 March, filing is required</li>
                    <li><strong>Directors disqualified under Section 164</strong> - disqualification does not deactivate DIN; KYC still required</li>
                    <li><strong>Individuals who obtained DIN but never accepted any board appointment</strong> - the DIN itself triggers the obligation</li>
                    <li><strong>Independent directors and non-executive directors</strong></li>
                    <li><strong>Directors of Section 8 companies and foreign companies</strong></li>
                </ul>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>The exemption test is binary.</strong> Only individuals whose DIN was already deactivated (or surrendered via Form DIR-5) before 31 March of the relevant FY are exempt for that filing cycle. Every other DIN / DPIN holder must file. To permanently stop the recurring obligation, the only path is DIR-5 surrender of DIN - which is a separate procedure under Rule 11.</p>
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
            <h2 class="section-title">What Patron Delivers in DIR-3 KYC Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. DIN Status Check and Filing-Type Determination</strong></td><td>On intake we verify DIN / DPIN status on MCA portal. Determine whether the engagement is routine triennial filing, event-based update (mobile / email / address change), DIN reactivation post-deactivation, or first-time KYC for a newly issued DIN.</td></tr>
                        <tr><td><strong>2. Unified Form DIR-3 KYC Web Filing</strong></td><td>End-to-end filing on the unified DIR-3 KYC Web form via MCA V3 portal. Single form covers routine, event-based, and reactivation use cases. Document verification, OTP coordination, and Class 3 DSC application.</td></tr>
                        <tr><td><strong>3. Foreign-National Director Path</strong></td><td>Foreign nationals cannot use Aadhaar. Patron handles the passport-based path with notarised passport copy, foreign address proof, and apostille / consularisation where required. PAN coordination under Rule 9 (DIN application for foreign nationals).</td></tr>
                        <tr><td><strong>4. LLP Designated Partner KYC (DPIN)</strong></td><td>LLP designated partners hold DPIN which functions as DIN for DIR-3 KYC purposes. Same Rule 12A applies. Patron files DIR-3 KYC Web for DPIN holders alongside the LLP annual cycle (Form 8 + Form 11).</td></tr>
                        <tr><td><strong>5. DIN Reactivation Workflow</strong></td><td>Where DIN has been deactivated due to missed prior filings, Patron runs the reactivation sequence - file DIR-3 KYC Web with the Rs 5,000 MCA fee, await approval (1 to 5 working days), confirm DIN status flips back to "Approved", and immediately release queued downstream filings (AOC-4 / MGT-7 / others) before their independent penalty clocks compound further.</td></tr>
                        <tr><td><strong>6. Bundle Upgrade to Annual Compliance</strong></td><td>Where DIR-3 KYC is one part of a wider compliance need, Patron bundles it free into the full annual compliance package at Rs 35,000 (private limited companies) or Rs 25,000 (LLPs) or Rs 35,000 (small companies). One vendor, one calendar, one accountable owner.</td></tr>


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
            <h2 class="section-title">DIR-3 KYC Filing Process: 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs every DIR-3 KYC engagement through a 7-step process across the unified Form DIR-3 KYC Web. Routine triennial filings complete in 1 working day; event-based updates and DIN reactivations in 1 to 5 working days.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">DIN Status Check and Filing Type Determination</h3>
                        <p class="step-description">Verify DIN / DPIN is active on MCA portal. Confirm engagement type - routine triennial, event-based update (mobile / email / address change), DIN reactivation, or first-time KYC. Triennial cycle position confirmed for routine cases.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MCA portal check
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Engagement type locked
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Cycle position confirmed
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
                                    <text x="55" y="46" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIN</text>
                                    <rect x="25" y="68" width="22" height="8" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="36" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CHECK</text>
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
                        <h3 class="step-title">Document Collection</h3>
                        <p class="step-description">PAN, Aadhaar (Indian) or passport (foreign), current mobile and email (must be unique to the DIN holder), recent address proof (utility bill or bank statement under 2 months old), passport-size photo, Class 3 DSC of director - and CA / CS / CMA professional DSC where required for changes or reactivation.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                PAN + Aadhaar / passport
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Address proof <60 days
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Class 3 DSC active
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="22" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text>
                                    <line x1="28" y1="40" x2="52" y2="40" stroke="#14365F" stroke-width="0.5" opacity="0.5"/>
                                    <rect x="62" y="22" width="36" height="22" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="80" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AADHAAR</text>
                                    <rect x="22" y="50" width="36" height="22" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ADDR</text>
                                    <rect x="62" y="50" width="36" height="22" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="80" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Documents Ready</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Mobile and Email OTP Verification</h3>
                        <p class="step-description">OTPs generated to both registered mobile and email. Director enters OTPs into DIR-3 KYC Web form. Mobile and email become locked to the DIN for the filing cycle. Critical - mobile and email must be unique per DIN holder (Rule 12A requirement).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Mobile OTP verified
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Email OTP verified
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Uniqueness confirmed
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="22" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MOBILE</text>
                                    <text x="40" y="40" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">OTP</text>
                                    <rect x="62" y="22" width="36" height="22" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="80" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EMAIL</text>
                                    <text x="80" y="40" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">OTP</text>
                                    <rect x="35" y="52" width="50" height="18" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <path d="M48 61l4 4 8 -8" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <text x="68" y="64" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">VERIFIED</text>
                                </svg>
                            </div>
                            <span class="illustration-label">OTPs Validated</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Form DIR-3 KYC Web Drafting</h3>
                        <p class="step-description">Unified Form DIR-3 KYC Web auto-populated from MCA records. Personal details verified - full name (first/middle/last), nationality, date of birth, PAN (auto-verified against IT database), passport number for foreign nationals. Updated mobile / email / address entered where applicable.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Form auto-populated
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                PAN auto-verified
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Updates entered
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
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">DIR-3 KYC WEB</text>
                                    <line x1="30" y1="42" x2="90" y2="42" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="58" x2="80" y2="58" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="30" y1="66" x2="85" y2="66" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
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
                        <h3 class="step-title">Professional Certification (Where Required)</h3>
                        <p class="step-description">For DIN reactivation cases and for filings involving change in mobile / email / residential address: CA / CS / CMA reviews the form against documents and certifies via DSC. Membership number, FRN, and UDIN (where applicable) embedded. Routine triennial filings without changes do not require professional certification.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CA / CS / CMA review
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Professional DSC affixed
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                UDIN where applicable
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <circle cx="40" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="40" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CA/CS</text>
                                    <text x="40" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CMA</text>
                                    <path d="M60 42l8 0M68 42l-3 -3M68 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="40" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text>
                                    <path d="M82 48l3 3 6 -6" stroke="#10B981" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Certified</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">MCA V3 Portal Submission</h3>
                        <p class="step-description">Form submitted via MCA V3 portal. Government fee paid where applicable - Rs 5,000 reactivation fee for DIN reactivation cases; applicable update fee under Companies (Registration Offices and Fees) Rules, 2014 for event-based change filings; nil for routine triennial filings inside the deadline. SRN captured.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                V3 portal submission
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Fee paid (if applicable)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN captured
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="35" height="50" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM</text>
                                    <line x1="28" y1="40" x2="52" y2="40" stroke="#E8712C" stroke-width="1.5" stroke-linecap="round"/>
                                    <line x1="28" y1="48" x2="50" y2="48" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="28" y1="56" x2="52" y2="56" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="28" y1="64" x2="48" y2="64" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.5"/>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="50" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                    <text x="88" y="38" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MCA V3</text>
                                    <text x="88" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PORTAL</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Submitted</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">Status Confirmation + Downstream Release</h3>
                        <p class="step-description">DIN status confirmed as 'Approved' on MCA portal. Acknowledgement PDF saved. Director confirmation circulated. For reactivation cases, downstream filings (AOC-4 / MGT-7 / DPT-3 / MSME-1 if held up by deactivated DIN) released immediately to stop their independent penalty clocks.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Status: Approved
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                PDF acknowledgement
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Downstream released
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <circle cx="40" cy="48" r="10" fill="#10B981"/>
                                    <path d="M35 48l4 4 7 -8" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <text x="68" y="42" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIN STATUS</text>
                                    <text x="68" y="52" font-size="7" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">APPROVED</text>
                                    <text x="68" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PDF SAVED</text>
                                </svg>
                            </div>
                            <span class="illustration-label">KYC Complete</span>
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
            <h2 class="section-title">Documents Required for DIR-3 KYC Web</h2>
            <div class="content-text">
                
                
                <p>Under the unified Form DIR-3 KYC Web (post G.S.R. 943(E)), the documentation requirement depends on the filing type. Routine triennial filings with no detail changes need minimal documentation; first-time KYC and reactivation cases require the full set.</p>

                <h3 style="margin-top:24px;">For Routine Triennial Filing (No Detail Changes)</h3>
                <ul>
                    <li>Active DIN / DPIN of the director</li>
                    <li>Registered mobile number (for OTP)</li>
                    <li>Registered email ID (for OTP)</li>
                    <li>Confirmation that mobile, email, and address have NOT changed since last filing</li>
                </ul>

                <h3 style="margin-top:24px;">For First-Time KYC, DIN Reactivation, or Detail Changes</h3>
                <ul>
                    <li>PAN card of the director (auto-verified against IT database in the form)</li>
                    <li>Aadhaar card (Indian nationals) OR passport (foreign nationals)</li>
                    <li>Recent passport-size photograph</li>
                    <li>Recent address proof - utility bill (electricity / telephone / mobile postpaid) or bank statement, under 2 months old</li>
                    <li>Current mobile number (must be unique to the DIN holder)</li>
                    <li>Current email ID (must be unique to the DIN holder)</li>
                    <li>Class 3 Digital Signature Certificate (DSC) of the director</li>
                    <li>Class 3 DSC of certifying practising professional (CA / CS / CMA) for first-time, reactivation, or detail-change cases</li>
                </ul>

                <h3 style="margin-top:24px;">For Foreign Nationals (Additional)</h3>
                <ul>
                    <li>Notarised passport copy in lieu of Aadhaar</li>
                    <li>Foreign address proof - utility bill or bank statement</li>
                    <li>Apostille / consularisation of passport and address proof where required (depends on issuing country)</li>
                    <li>PAN is required where the foreign national has one; where not, the underlying DIN was issued under Rule 9 with alternative documentation</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common DIR-3 KYC Pain Points - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Confusion between annual (old) and triennial (new) regime</strong></td>
                            <td>Many directors and even some compliance teams still operate under the assumption of an annual 30 September deadline. The 30 September deadline ended with FY 2024-25; from FY 2025-26 onwards the regime is triennial under amended Rule 12A.</td>
                            <td>Patron tracks each director's KYC history and computes the correct next-due date under the new triennial cycle. Per MCA press note, directors current on FY 2024-25 KYC have next filing due 30 June 2028.</td>
                        </tr>
                        <tr>
                            <td><strong>2. DIN deactivated and downstream MCA filings blocked</strong></td>
                            <td>Deactivated DIN blocks every MCA form across every company and LLP where the individual is named. AOC-4, MGT-7, DPT-3, MSME-1, even unrelated event-based filings (DIR-12, MGT-14) all fail validation. The penalty clock on those filings continues running.</td>
                            <td>Patron prioritises reactivation - file DIR-3 KYC Web with the Rs 5,000 fee, monitor MCA approval, then immediately release the queued filings. End-to-end usually 3 to 5 working days.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Foreign-national director without Aadhaar</strong></td>
                            <td>Foreign nationals cannot use the Aadhaar OTP path. Many DIY platforms refuse or get the apostille / consularisation chain wrong, adding weeks to the cycle.</td>
                            <td>Patron handles the unified DIR-3 KYC Web filing with notarised passport, foreign address proof, and consularisation - including coordination with the director's local Indian Embassy if remote.</td>
                        </tr>
                        <tr>
                            <td><strong>4. LLP designated partner unaware of DIR-3 KYC for DPIN</strong></td>
                            <td>DPIN holders often assume DIR-3 KYC is for companies only. It is not - DPIN is treated equivalent to DIN for DIR-3 KYC purposes. Missing the filing deactivates DPIN, blocking Form 8, Form 11, and every LLP event filing.</td>
                            <td>Patron files DIR-3 KYC Web for LLP designated partners alongside the LLP annual cycle (Form 8 + Form 11). DPIN reactivation handled identical to DIN reactivation.</td>
                        </tr>
                        <tr>
                            <td><strong>5. Mobile or email change missed - 30-day window violated</strong></td>
                            <td>Under Rule 12A(2), any change in mobile, email, or residential address requires filing DIR-3 KYC Web within 30 days - INDEPENDENT of the triennial cycle. Founders changing phones or moving cities routinely forget this 30-day window.</td>
                            <td>Patron sets up event-based reminders for retainer clients. Where the 30-day window has lapsed, we file with applicable late fee under Companies (Registration Offices and Fees) Rules, 2014 immediately to prevent DIN deactivation cascade.</td>
                        </tr>
                        <tr>
                            <td><strong>6. Mobile / email already used on another DIN</strong></td>
                            <td>Rule 12A requires mobile and email to be unique to the DIN holder. When a founder uses the same number across two companies for two directors (e.g. spouse, family member), one will fail OTP.</td>
                            <td>Patron pre-validates uniqueness on intake and arranges fresh mobile / email where needed BEFORE the filing window starts.</td>
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
            <h2 class="section-title">DIR-3 KYC Filing Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Standalone - Routine Triennial DIR-3 KYC Web</strong></td><td class="text-end">&nbsp;</td></tr>
                        <tr><td>Routine triennial filing - DIN details unchanged from last KYC</td><td class="text-end">Rs 2,000 per director (Exl GST)</td></tr>
                        <tr><td>Event-based update - change in mobile / email / residential address (filed within 30 days)</td><td class="text-end">Rs 3,000 per director (Exl GST + applicable MCA fee)</td></tr>
                        <tr><td>First-time KYC for newly issued DIN</td><td class="text-end">Rs 3,000 per director (Exl GST)</td></tr>
                        <tr><td>DIR-3 KYC Web with DIN Reactivation - DIN deactivated due to prior non-filing</td><td class="text-end">Rs 4,000 + Rs 5,000 MCA fee (Exl GST)</td></tr>
                        <tr><td>Foreign-National Director (passport path with apostille chain)</td><td class="text-end">Rs 3,000 to Rs 4,000 per director (apostille charges separate at actuals)</td></tr>
                        <tr><td><strong>Bundled in Annual Compliance Package (Free DIR-3 KYC)</strong></td><td class="text-end">&nbsp;</td></tr>
                        <tr><td>Private Limited Annual Compliance - all directors' DIR-3 KYC INCLUDED plus AOC-4, MGT-7 / MGT-7A, ADT-1, DPT-3, MSME-1, statutory audit, ITR-6</td><td class="text-end">Rs 35,000 (Essential, Exl GST)</td></tr>
                        <tr><td>LLP Annual Compliance - all designated partners' DIR-3 KYC INCLUDED plus Form 11, Form 8, audit if applicable, ITR-5</td><td class="text-end">Rs 25,000 (Exl GST)</td></tr>
                        <tr><td>Small Company Annual Compliance - all directors' DIR-3 KYC INCLUDED plus AOC-4, MGT-7A, ADT-1, audit, ITR-6</td><td class="text-end">Rs 35,000 (Exl GST)</td></tr>
                        <tr><td>Multi-Director Batch Discount (4+ directors)</td><td class="text-end">Discount available - contact for quote</td></tr>
                        <tr><td><strong>Government MCA Fees</strong></td><td class="text-end">&nbsp;</td></tr>
                        <tr><td>DIN Reactivation MCA Fee</td><td class="text-end">Rs 5,000 per DIN (non-refundable)</td></tr>
                        <tr><td>Event-Based Update Fee (mobile / email / address change beyond 30-day window)</td><td class="text-end">Per Companies (Registration Offices and Fees) Rules, 2014</td></tr>
                        <tr><td>Routine triennial filing within deadline</td><td class="text-end">Nil MCA fee</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free DIR-3 KYC Filing Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Dir%203%20KYC%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-3 KYC Timeline Under the New Triennial Regime</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>DIN holding status reference date</td><td class="text-end">31 March of relevant financial year</td></tr>
                        <tr><td>Routine triennial filing window</td><td class="text-end">1 April to 30 June (every third consecutive financial year)</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>Next routine due date - directors current on FY 2024-25 KYC</strong></td><td class="text-end"><strong>30 June 2028 (per MCA press note)</strong></td></tr>
                        <tr><td>Event-based update window - mobile / email / address change</td><td class="text-end">Within 30 days of the change</td></tr>
                        <tr><td>DIN deactivation on missed filing</td><td class="text-end">Automatic - applied by MCA system</td></tr>
                        <tr><td>DIN reactivation window after deactivation</td><td class="text-end">Open indefinitely - file DIR-3 KYC Web with Rs 5,000 fee any time</td></tr>
                        <tr><td>Patron routine triennial filing turnaround</td><td class="text-end">Same day to 1 working day</td></tr>
                        <tr><td>Patron event-based update turnaround</td><td class="text-end">1 to 2 working days</td></tr>
                        <tr><td>Patron DIN reactivation turnaround</td><td class="text-end">3 to 5 working days (including MCA approval)</td></tr>
                        <tr><td>Patron foreign-national filing turnaround</td><td class="text-end">5 to 10 working days (depending on apostille chain)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>Historical context - last annual deadline under old regime</strong></td><td class="text-end"><strong>30 September 2025 (regime ended 31 March 2026)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; Cascade impact warning - DIN deactivation blocks every MCA form.</strong> A deactivated DIN halts AOC-4, MGT-7, DPT-3, MSME-1, DIR-12, MGT-14, PAS-3, and every other MCA filing across every company and LLP where the individual is named. Each blocked filing continues accruing its own per-day late fee (Rs 100/day for AOC-4 / MGT-7 under Section 403). The compounding cost of a missed DIR-3 KYC almost always exceeds Rs 10,000 within a fortnight.</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on filing type (routine, event-based, reactivation, foreign-national), director count, and apostille chain complexity for foreign nationals. Government MCA fees, DSC purchase, and apostille charges are billed separately at actuals.</p>


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
            <h2 class="section-title">Why Use a CA Firm for DIR-3 KYC</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>New Regime Currency</h3>
                <p>The Companies (Appointment and Qualification of Directors) Amendment Rules, 2025 via G.S.R. 943(E) shifted DIR-3 KYC from annual to triennial effective 31 March 2026. Most DIY platforms and stale online content still reference the 30 September annual regime. Patron tracks the new cycle precisely.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>Cascade Impact Awareness</h3>
                <p>DIN deactivation halts every MCA filing across every company and LLP. Patron tracks the entire MCA portfolio of every director - not just one company. We can map the downstream filings that will be blocked before reactivation, so the release sequence is ready when DIN status flips to Approved.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Foreign-National Documentation Chain</h3>
                <p>Notarisation, apostille, consularisation - mistakes here add weeks to the cycle and often miss the triennial window. Patron handles 180+ foreign-national director filings per cycle and coordinates with local Indian Embassies where directors are remote.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Event-Based 30-Day Trigger Tracking</h3>
                <p>Rule 12A(2) requires mobile / email / address changes to be filed on DIR-3 KYC Web within 30 days - INDEPENDENT of the triennial cycle. Founders changing phones or moving cities routinely forget. Patron sets up event-based reminders for retainer clients.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>Reactivation End-to-End</h3>
                <p>End-to-end reactivation including release of queued downstream filings. DIY reactivation often forgets to flush the AOC-4 / MGT-7 backlog, compounding the penalty. Patron's reactivation engagement explicitly includes the downstream release sequence.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Multi-Director Batch Coordination</h3>
                <p>Founding teams of 4 to 7 directors require batched intake, OTP scheduling, and unified billing. Patron handles 50+ multi-director clients each cycle with single intake form, sequenced OTPs over 2 to 3 days, and consolidated billing.</p>
            </article>
        </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders and Directors Across India</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>

                <h3 style="margin-top:24px;">Outcome Proof - FY 2024-25 Internal Metrics</h3>
                <ul>
                    <li>Patron filed <strong>2,800+ DIR-3 KYC returns</strong> across single-director and multi-director clients in FY 2024-25 (the last annual cycle before the regime change)</li>
                    <li>Coverage included <strong>180+ foreign-national directors</strong> and <strong>320+ LLP designated partners (DPIN)</strong></li>
                    <li><strong>100% on-time rate</strong> on routine cycles; reactivation cycle averaged 4 working days end-to-end</li>
                    <li>Now operating under the new triennial regime - tracking each director's next-due date precisely (per MCA press note, 30 June 2028 for FY 2024-25-current directors)</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron serves directors and LLP designated partners across India - in-person and remotely. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIN Status Scenarios: What Triggers What</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Scenario</th><th>Filing Required</th><th>Patron Fee</th><th>Cascade Impact</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Active DIN, prior KYC filed, no detail changes, triennial cycle due</td><td>DIR-3 KYC Web (routine triennial)</td><td>Rs 2,000</td><td>None - routine compliance</td></tr>
                        <tr><td>Active DIN, first-time KYC (new DIN holder)</td><td>DIR-3 KYC Web (first-time)</td><td>Rs 3,000</td><td>None - first cycle compliance</td></tr>
                        <tr><td>Active DIN, mobile / email / address changed during cycle</td><td>DIR-3 KYC Web (event-based update within 30 days)</td><td>Rs 3,000 + MCA update fee</td><td>Update reflected on MCA register; triennial cycle continues separately</td></tr>
                        <tr><td>DIN deactivated, no prior open filings blocked</td><td>DIR-3 KYC Web (reactivation)</td><td>Rs 4,000 + Rs 5,000 MCA fee</td><td>DIN reactivated 3-5 days; status returns to Approved</td></tr>
                        <tr><td>DIN deactivated, AOC-4 / MGT-7 of associated company also pending</td><td>DIR-3 KYC Web (reactivation) + downstream backlog filing</td><td>Rs 4,000 + Rs 5,000 + AOC-4 / MGT-7 fees</td><td>Full backlog release - reactivate DIN first, then flush queued filings</td></tr>
                        <tr><td>Disqualified director under Section 164</td><td>DIR-3 KYC Web (routine triennial)</td><td>Rs 2,000 to Rs 3,000</td><td>Disqualification continues; KYC compliance still mandatory</td></tr>
                        <tr><td>Resigned director, DIN still active on 31 March</td><td>DIR-3 KYC Web (routine triennial)</td><td>Rs 2,000 to Rs 3,000</td><td>Resignation does not deactivate DIN; KYC remains mandatory</td></tr>
                        <tr><td>Foreign-national director</td><td>DIR-3 KYC Web (passport + apostille chain)</td><td>Rs 3,000 to Rs 4,000 (apostille separate)</td><td>Apostille / consularisation managed end-to-end</td></tr>
                        <tr><td>LLP designated partner (DPIN)</td><td>DIR-3 KYC Web (DPIN treated identical to DIN)</td><td>Rs 2,000 to Rs 3,000</td><td>DPIN equivalent to DIN under Rule 12A; same triennial obligation</td></tr>
                        <tr><td>Individual with DIN but never accepted appointment</td><td>DIR-3 KYC Web (routine triennial)</td><td>Rs 2,000 to Rs 3,000</td><td>DIN itself triggers obligation regardless of board status</td></tr>


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
                
                
                <p>DIR-3 KYC connects to the broader director lifecycle and to the annual MCA filing cycle. The most relevant partner services:</p>
                <ul>
                    <li><a href="/director-kyc"><strong>Director KYC (broader hub)</strong></a> - the parent page covering all aspects of director KYC compliance including DIR-3 KYC and related events.</li>
                    <li><a href="/appointment-of-director"><strong>Appointment of Director</strong></a> - director onboarding including DIR-2 consent, DIR-12 ROC filing, DSC application, and DIN allotment if new.</li>
                    <li><a href="/resignation-of-director"><strong>Resignation of Director</strong></a> - DIR-11 (auditor notice) and DIR-12 (ROC filing) on director resignation, plus first DIR-3 KYC cycle planning for the resigned director.</li>
                    <li><a href="/removal-of-director"><strong>Removal of Director</strong></a> - Section 169 removal procedure and ROC filings.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Private Limited Company Annual Compliance</strong></a> - the full bundle where DIR-3 KYC is one of 6+ filings covered.</li>
                    <li><a href="/llp-annual-compliance"><strong>LLP Annual Compliance</strong></a> - the LLP parallel; covers DIR-3 KYC for designated partners alongside Form 11 and Form 8.</li>
                    <li><a href="/condonation-of-delay-roc-filings"><strong>Condonation of Delay / Backlog Cleanup</strong></a> - where DIN deactivation has cascaded into multi-year MCA filing backlogs requiring Section 460 / 441 path.</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Acts, Rules, Notifications</h2>
            <div class="content-text">
                
                
                <h3>Governing Legislation</h3>
                <ul>
                    <li><strong>Companies Act, 2013</strong> - master statute for DIN allotment and director KYC</li>
                    <li><strong>Companies (Appointment and Qualification of Directors) Rules, 2014</strong> - Rule 12A governs DIR-3 KYC filing (as amended)</li>
                    <li><strong>Companies (Appointment and Qualification of Directors) Amendment Rules, 2025</strong> - notified via <strong>G.S.R. 943(E) dated 31 December 2025, effective 31 March 2026</strong> - introduced triennial regime and consolidated forms into unified DIR-3 KYC Web</li>
                    <li><strong>LLP Act, 2008</strong> read with LLP Rules, 2009 - DPIN equivalence with DIN for designated partners</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - fee structure for event-based update filings beyond 30-day window</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections and Rules</h3>
                <ul>
                    <li><strong>Section 153</strong> - allotment of DIN by Central Government</li>
                    <li><strong>Section 154</strong> - DIN to be allotted to every individual who is a director or intends to be a director</li>
                    <li><strong>Section 164</strong> - disqualification of directors (DIN remains active; KYC still required)</li>
                    <li><strong>Section 167</strong> - vacation of office of director</li>
                    <li><strong>Rule 12A (substituted)</strong> - DIR-3 KYC Web triennial filing procedure (post G.S.R. 943(E))</li>
                    <li><strong>Rule 12A(2)</strong> - 30-day event-based update for change in mobile / email / residential address</li>
                    <li><strong>Rule 11 (amended)</strong> - DIN deactivation procedure on non-filing; updated reference to "Regional Director, Northern Region Directorate I"</li>
                    <li><strong>Rule 9</strong> - DIN application for foreign nationals (alternative documentation)</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule</h3>
                <ul>
                    <li><strong>Late filing fee:</strong> Rs 5,000 per DIN (non-refundable, payable at the time of filing)</li>
                    <li><strong>DIN deactivation:</strong> Applied by MCA system on missed filing under amended Rule 12A</li>
                    <li><strong>Cascade impact on downstream filings:</strong> AOC-4 Rs 100/day, MGT-7 Rs 100/day under Section 403 of Companies Act, 2013; other forms multiplier-based per Companies (Registration Offices and Fees) Rules, 2014</li>
                    <li><strong>Continuous non-filing:</strong> DIN remains deactivated indefinitely until DIR-3 KYC Web with Rs 5,000 fee is filed and approved</li>
                    <li><strong>Section 164(2) trigger:</strong> Three consecutive years of MGT-7 non-filing (caused by blocked DIN) can trigger director disqualification for 5 years across all companies</li>
                </ul>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for Form DIR-3 KYC Web filing, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for G.S.R. 943(E) text, and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on the new triennial DIR-3 KYC regime (G.S.R. 943(E)), unified Form DIR-3 KYC Web, DIN deactivation cascade, Rs 5,000 reactivation fee, foreign-national documentation, DPIN equivalence, and the 30-day event-based update window.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'DIR-3 KYC Filing Services',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is DIR-3 KYC and who must file it?</h3>
                        <div class="faq-expanded__a"><p>DIR-3 KYC is the director Know-Your-Customer filing under Rule 12A of Companies (Appointment and Qualification of Directors) Rules, 2014. As amended by G.S.R. 943(E) dated 31 December 2025 (effective 31 March 2026), it is now a TRIENNIAL filing rather than annual. Every individual holding an active Director Identification Number (DIN) or Designated Partner Identification Number (DPIN) as on 31 March of the relevant financial year must file DIR-3 KYC Web by 30 June of every third consecutive financial year. This includes Indian and foreign nationals, LLP designated partners, disqualified directors, resigned directors, and individuals who hold DIN but never accepted a board appointment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for DIR-3 KYC filing under the new regime?</h3>
                        <div class="faq-expanded__a"><p>The annual 30 September deadline that applied until FY 2024-25 has been REPLACED with a triennial 30 June deadline effective 31 March 2026. Under the new Rule 12A, every individual holding DIN as on 31 March of a financial year files DIR-3 KYC Web by 30 June of every third consecutive financial year. Per the MCA press note issued with G.S.R. 943(E), directors who completed their FY 2024-25 KYC (by 30 September 2025) have their next routine filing due 30 June 2028. Separately, any change in mobile, email, or residential address requires DIR-3 KYC Web filing within 30 days - independent of the triennial cycle.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happened to the DIR-3 KYC Web versus e-Form split?</h3>
                        <div class="faq-expanded__a"><p>Under G.S.R. 943(E), the two prior forms (DIR-3 KYC e-Form and DIR-3 KYC-WEB) have been CONSOLIDATED into a single Form DIR-3 KYC Web. The unified form handles all use cases - routine triennial filing, event-based update for detail changes, DIN reactivation, and first-time filing for newly issued DIN. Form selection is no longer a decision point; the same DIR-3 KYC Web form is used for every filing type. Professional certification (CA / CS / CMA) is required for filings involving detail changes or DIN reactivation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for not filing DIR-3 KYC?</h3>
                        <div class="faq-expanded__a"><p>Missing the deadline triggers two consequences. First, a late filing fee of Rs 5,000 per DIN (non-refundable) becomes payable when you eventually file. Second, MCA automatically deactivates the DIN. Deactivated DIN blocks every MCA form filing across every company and LLP where the individual holds a role - AOC-4, MGT-7, DPT-3, MSME-1, DIR-12, MGT-14, PAS-3, and others. Those blocked filings continue accruing their own per-day late fees (Rs 100/day for AOC-4 / MGT-7 under Section 403) while DIN remains deactivated. The compounding cost of a missed DIR-3 KYC almost always exceeds Rs 10,000 within a fortnight.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How do I reactivate a deactivated DIN?</h3>
                        <div class="faq-expanded__a"><p>File the unified Form DIR-3 KYC Web with complete documentation - PAN, Aadhaar (Indian) or passport (foreign), recent address proof, photograph, current mobile and email, and Class 3 DSC. Pay the Rs 5,000 reactivation fee at the time of submission. The form must be certified by a practising CA, CS, or CMA via DSC. MCA typically approves within 1 to 5 working days. Once status flips to 'Approved' on the MCA portal, immediately release any queued downstream filings (AOC-4, MGT-7, DPT-3, MSME-1, etc.) to stop their separate penalty clocks running.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do foreign-national directors also need to file DIR-3 KYC?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every individual holding active DIN must file DIR-3 KYC regardless of nationality. Foreign nationals use the unified DIR-3 KYC Web form with passport in place of Aadhaar. Documentation includes notarised and apostilled / consularised copies of passport and foreign address proof (utility bill or bank statement). PAN is required where the foreign national has one; where not, the underlying DIN was issued under Rule 9 with alternative documentation, and KYC follows the same alternative-document path.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do LLP designated partners need to file DIR-3 KYC?</h3>
                        <div class="faq-expanded__a"><p>Yes. LLP designated partners hold a DPIN (Designated Partner Identification Number) which is treated as equivalent to DIN for DIR-3 KYC purposes. The same Rule 12A applies - triennial filing of DIR-3 KYC Web by 30 June of every third consecutive financial year, plus event-based updates within 30 days for any change in mobile / email / address. Missing the filing deactivates DPIN, which then blocks LLP Form 8, Form 11, and every event-based LLP filing. The Rs 5,000 reactivation fee and process are identical to DIN reactivation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does a resigned director or someone who never served on a board still need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. The trigger is DIN status on 31 March, not active board membership. A director who resigned during the financial year still has an active DIN on 31 March (unless DIN was separately surrendered via Form DIR-5). An individual who obtained DIN years ago but never accepted any board appointment still has an active DIN. Both must file DIR-3 KYC Web in the next applicable triennial cycle. To stop the recurring obligation permanently, the only path is DIR-5 surrender of DIN - which is a separate procedure under Rule 11.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is DIR-3 KYC?</strong> The director KYC filing under Rule 12A of Companies (Appointment and Qualification of Directors) Rules, 2014 as amended by G.S.R. 943(E) dated 31 December 2025.</p>
                <p><strong>Annual or triennial?</strong> TRIENNIAL effective 31 March 2026. Annual 30 September regime ended with FY 2024-25.</p>
                <p><strong>Who must file?</strong> Every individual with active DIN or DPIN as on 31 March - Indian, foreign, LLP designated partner, resigned, disqualified, or never-served-on-board.</p>
                <p><strong>When is it due?</strong> 30 June of every third consecutive financial year following the FY in which DIN is held on 31 March. Per MCA press note, FY 2024-25 KYC-current directors have next filing due 30 June 2028.</p>
                <p><strong>Which form?</strong> Unified Form DIR-3 KYC Web. The old DIR-3 KYC e-Form and DIR-3 KYC-Web have been consolidated into one form.</p>
                <p><strong>Event-based filing trigger?</strong> Change in mobile, email, or residential address requires DIR-3 KYC Web filing within 30 days (independent of triennial cycle).</p>
                <p><strong>Penalty for missing the deadline?</strong> Rs 5,000 per DIN PLUS automatic DIN deactivation PLUS cascade penalties on every blocked downstream MCA filing.</p>
                <p><strong>What does Patron charge?</strong> Rs 2,000 (routine triennial Web) to Rs 4,000 (DIN reactivation, plus Rs 5,000 MCA fee) per director. Free in annual compliance bundle.</p>
                <p><strong>Reactivation procedure?</strong> File DIR-3 KYC Web with Rs 5,000 fee, CA / CS / CMA certification, DSC. MCA approval 1-5 working days. Then flush queued downstream filings.</p>
                <p><strong>DIR-3 KYC kaise file kare?</strong> <em>DIR-3 KYC Web file karna padta hai unified form ke through - har 3 saal mein ek baar (30 June deadline). G.S.R. 943(E) dated 31 December 2025 ke baad annual regime khatam ho gaya. Mobile / email / address change ho to 30 din mein file karna padta hai - alag se. Patron Rs 2,000 (routine triennial) se Rs 4,000 (DIN reactivation with Rs 5,000 MCA fee) mein file karta hai.</em></p>
                <p><strong>DIN reactivation kaise hota hai?</strong> <em>DIN deactivate hone par DIR-3 KYC Web file karna padta hai - Rs 5,000 MCA fee ke saath. CA / CS / CMA certification chahiye, plus DSC. MCA approve karne mein 1 se 5 working days lagte hain. Status "Approved" hone ke baad turant rest ke pending MCA filings (AOC-4, MGT-7, DPT-3) release kar dene chahiye - unka apna penalty clock chal raha hota hai.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Avoid DIN Deactivation and Cascade Penalties</h2>
            <div class="content-text">
                
                
                <p>Under the new triennial regime, missing the DIR-3 KYC deadline triggers a chain reaction worth understanding before it happens:</p>
                <ul>
                    <li><strong>Immediate Rs 5,000 fee per DIN</strong> - non-refundable, payable at the time of eventual filing</li>
                    <li><strong>Automatic DIN deactivation</strong> - applied by MCA system; every MCA form filing across every company and LLP where you are named gets blocked</li>
                    <li><strong>Cascade penalties on blocked filings</strong> - AOC-4 Rs 100/day, MGT-7 Rs 100/day, other forms multiplier-based - the clock keeps running while DIN is deactivated</li>
                    <li><strong>Section 164(2) risk</strong> - three consecutive years of MGT-7 non-filing (caused by blocked DIN) triggers director disqualification for 5 years across ALL companies</li>
                </ul>

                <p style="margin-top:16px;"><strong>Event-based 30-day window often forgotten.</strong> A director who changes mobile number, email, or residential address must file DIR-3 KYC Web within 30 days of the change - independent of the triennial cycle. Missing this 30-day window can trigger the same DIN deactivation cascade.</p>

                <p style="margin-top:16px;"><strong>Get DIR-3 KYC Filed in 1 Working Day -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Dir%203%20KYC%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free 15-minute consultation. We respond within 2 hours during business hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: DIR-3 KYC in the New Triennial Era</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">DIR-3 KYC has fundamentally changed. The annual 30 September regime that ran from 2018 to FY 2024-25 has been replaced with a triennial 30 June cycle under amended Rule 12A of Companies (Appointment and Qualification of Directors) Rules, 2014. The Companies (Appointment and Qualification of Directors) Amendment Rules, 2025 were notified via G.S.R. 943(E) dated 31 December 2025 and came into force on 31 March 2026.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Three operational consequences flow from this. First, the form has been unified - there is now a single DIR-3 KYC Web form rather than the prior e-Form / Web split. Second, the recurring obligation has eased from annual to triennial - per MCA press note, directors current on FY 2024-25 KYC have their next routine filing due 30 June 2028. Third, the event-based 30-day update obligation (for mobile / email / address changes) operates independently and continues unchanged.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">What did NOT change: the Rs 5,000 late fee per DIN, the automatic DIN deactivation on missed filing, and the cascade impact on AOC-4 / MGT-7 / every other MCA filing across every company and LLP where the director is named. Patron Accounting tracks each director's triennial position, event-based update windows, and DIN status precisely - Rs 2,000 per director for routine triennial filing, Rs 4,000 plus Rs 5,000 MCA fee for reactivation, or free as part of the full annual compliance bundle.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Dir%203%20KYC%20Filing%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">DIR-3 KYC Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. Routine triennial DIR-3 KYC Web filing, DIN reactivation, foreign-national director documentation, and DPIN compliance for LLP designated partners delivered pan-India.</p>
     
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise DIR-3 KYC Filing Service</div>
                <div class="pa-block-sub">Local CA-CS team for in-person documentation handover plus DIN reactivation support</div>
                <div class="pa-city-grid">
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Director lifecycle and annual compliance services that pair with DIR-3 KYC</div>
                <div class="pa-cross-grid">
                    <a href="/director-kyc" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Director KYC Hub</div><div class="pa-card-sub">Parent Service</div></div>
                    </a>
                    <a href="/appointment-of-director" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">DIR-2 + DIR-12</div></div>
                    </a>
                    <a href="/resignation-of-director" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Resignation of Director</div><div class="pa-card-sub">DIR-11 + DIR-12</div></div>
                    </a>
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Compliance</div><div class="pa-card-sub">DIR-3 KYC Bundle</div></div>
                    </a>
                    <a href="/llp-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">LLP Annual Compliance</div><div class="pa-card-sub">DPIN KYC Bundle</div></div>
                    </a>
                    <a href="/condonation-of-delay-roc-filings" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Backlog Cleanup</div><div class="pa-card-sub">Section 460 / 441</div></div>
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
            <p><strong>Content Created:</strong> 12 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed semi-annually under the new triennial regime. Next scheduled review: 12 November 2026. Review triggers include MCA notification of first triennial cycle clarifications, change in Form DIR-3 KYC Web specification, change in Rs 5,000 reactivation fee, amendment to Rule 12A or Rule 12A(2), and any new MCA circular on transition handling for FY 2025-26 first-cycle directors.</p>
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
