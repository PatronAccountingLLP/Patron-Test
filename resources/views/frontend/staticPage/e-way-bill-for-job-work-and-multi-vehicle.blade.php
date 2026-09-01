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
    <title>Job Work E-Way Bill 2026: Multi-Vehicle | Patron Accounting</title>
    <meta name="description" content="Job work delivery challan e-way bill under Section 143. Multi-vehicle transhipment, consolidated EWB-02, Bill-To/Ship-To. Patron from Rs 4,999.">
    <link rel="canonical" href="/e-way-bill-for-job-work-and-multi-vehicle">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Job Work E-Way Bill 2026: Multi-Vehicle | Patron Accounting">
    <meta property="og:description" content="Job work delivery challan e-way bill under Section 143. Multi-vehicle transhipment, consolidated EWB-02, Bill-To/Ship-To. Patron from Rs 4,999.">
    <meta property="og:url" content="/e-way-bill-for-job-work-and-multi-vehicle">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Job Work E-Way Bill 2026: Multi-Vehicle | Patron Accounting">
    <meta name="twitter:description" content="Job work delivery challan e-way bill under Section 143. Multi-vehicle transhipment, consolidated EWB-02, Bill-To/Ship-To. Patron from Rs 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/e-way-bill-for-job-work-and-multi-vehicle/#service",
        "name": "E-Way Bill for Job Work and Multi-Vehicle Scenarios in India",
        "description": "Niche premium e-way bill compliance service for complex GST scenarios under Section 143 of the CGST Act 2017 and Rule 138 of the CGST Rules 2017 covering job work movements with delivery challan under Rule 55, Section 143 time-limit tracking (1 year for inputs and 3 years for capital goods), ITC-04 quarterly return filing, multi-vehicle transhipment Part B updates under Rule 138(5), the 10-km same-state exception under Rule 138(3), consolidated e-way bill generation in Form GST EWB-02 under Rule 138(6), Bill-To/Ship-To configuration aligned with Section 10 of the IGST Act, and detention defence under Section 129, starting from INR 4,999 per engagement.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/e-way-bill-for-job-work-and-multi-vehicle" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Complex E-Way Bill Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Job Work Setup",
                    "priceCurrency": "INR",
                    "price": "4999",
                    "description": "Single principal, up to 3 job workers, delivery challan, ITC-04 cycle"
                },
                {
                    "@type": "Offer",
                    "name": "Job Work Ongoing",
                    "priceCurrency": "INR",
                    "price": "2999",
                    "description": "ITC-04 quarterly filing, Section 143 time tracking, job worker reconciliation (per month)"
                },
                {
                    "@type": "Offer",
                    "name": "Bill-To/Ship-To Setup",
                    "priceCurrency": "INR",
                    "price": "9999",
                    "description": "Per customer matrix - tax invoice and EWB alignment, place of supply"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/e-way-bill-for-job-work-and-multi-vehicle/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "GST Services", "item": "https://www.patronaccounting.com/gst-services" },
            { "@type": "ListItem", "position": 3, "name": "Complex E-Way Bill", "item": "https://www.patronaccounting.com/e-way-bill-for-job-work-and-multi-vehicle" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/e-way-bill-for-job-work-and-multi-vehicle/#faq",
        "datePublished": "2026-05-27T08:00:00+05:30",
        "dateModified": "2026-06-01T08:00:00+05:30",
        "mainEntity": [

            {
                "@type": "Question",
                "name": "Is e-way bill required for job work movement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. For inter-state job work under Section 143 of the CGST Act, an e-way bill is mandatory irrespective of the consignment value - even if the value is below Rs 50,000. For intra-state job work, the standard state-specific threshold applies (most states Rs 50,000). The e-way bill is generated based on a delivery challan under Rule 55 of the CGST Rules - not a tax invoice, since no supply is happening at the movement stage. Both the principal-to-job-worker dispatch and the job-worker-to-principal return require e-way bills under this framework."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between delivery challan and tax invoice for e-way bill?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A tax invoice is issued under Section 31 of the CGST Act when there is a supply attracting GST - the document carries tax liability. A delivery challan is issued under Rule 55 when there is movement of goods without a supply event - for job work, sale on approval, exhibition, transport of liquid gas, and similar scenarios. The delivery challan contains date, consignor and consignee details, HSN, quantity, value, and place of supply but does not include tax components. E-way bills can be generated against either document, with the underlying document type captured in Part A."
                }
            },
            {
                "@type": "Question",
                "name": "What are Section 143 time limits for job work?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 143(1) of the CGST Act, inputs sent to a job worker must be received back by the principal within 1 year from the date of dispatch. Under Section 143(2), capital goods sent to a job worker must be received back within 3 years. If not received back within these time limits, the original movement is deemed to be a supply by the principal on the date of dispatch under Section 143(3) - triggering full GST liability with interest under Section 50 from the date of dispatch. Time limits do not apply to moulds, dies, jigs, fixtures, or tools."
                }
            },
            {
                "@type": "Question",
                "name": "How does multi-vehicle transhipment work for e-way bill?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "When goods are transferred from one vehicle to another during transit, the transporter or the registered person must update Part B of the existing e-way bill with the new vehicle number before the goods resume movement. This is mandatory under Rule 138(5). Exception under Rule 138(3) - if the distance between the consigner or consignee and the transporter or between transhipment points is less than 10 km within the same state, the Part B update is not required. This exception is narrowly applied."
                }
            },
            {
                "@type": "Question",
                "name": "What is a consolidated e-way bill and when is it required?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A consolidated e-way bill in Form GST EWB-02 is generated by the transporter under Rule 138(6) when a single vehicle is carrying multiple consignments, each with its own individual e-way bill number. The EWB-02 links all the individual EBNs into a single document for inspection convenience at roadside checks. It does not replace the individual e-way bills - the underlying EBNs remain the primary compliance records. The transporter generates the EWB-02 before commencement of movement based on the individual EBNs collected from each shipper."
                }
            },
            {
                "@type": "Question",
                "name": "How is Bill-To/Ship-To structured in e-way bill?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In a Bill-To/Ship-To transaction, the buyer (Bill-To GSTIN) and the actual recipient (Ship-To GSTIN) are different. In Part A of the e-way bill, both GSTINs are captured. The tax invoice is issued to the Bill-To GSTIN with the Ship-To address noted, and the place of supply under Section 10 of the IGST Act is determined based on the Bill-To location not the Ship-To. The e-way bill is tagged to the actual physical movement path. Common use cases include head-office billing with branch delivery, trading drop-shipments, and group company transactions."
                }
            },
            {
                "@type": "Question",
                "name": "What is ITC-04 and when must it be filed?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ITC-04 is a quarterly return filed by the principal under Rule 45(3) of the CGST Rules to report all job work movements - inputs and capital goods sent to job workers, received back, directly supplied from job worker premises under Section 143, or written off. The return is due by the 25th of the month after the quarter-end. ITC-04 reconciles against the principal capital goods register, job worker register, and Section 143 time-limit tracker. Late filing attracts late fees and Section 61 scrutiny."
                }
            }
        ]
    }
    </script>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-8.css') }}?v=1">
@endpush

@section('content')
<main>

<!-- BREADCRUMB -->

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
                        E-Way Bill for Job Work and Multi-Vehicle Scenarios in 2026
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Delivery challan (Rule 55), tax invoice, principal-job worker agreement, ITC-04 history, transporter chain, vehicle list, and Bill-To and Ship-To GSTINs.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from INR 4,999 (Exl GST and Govt. Charges) per engagement for niche complex scenarios.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Manufacturers with job work outsourcing, multi-warehouse distributors, multi-mode logistics, transhipment hubs, and Bill-To/Ship-To trading.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5-10 working days for setup; ongoing monthly support for complex movements.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 25,000+ Complex EWBs Generated | Zero Job Work Section 143 Disputes in Last 36 Months</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Complex E-Way Bill%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Complex E-Way Bill%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20need%20help%20with%20complex%20e-way%20bill%20scenarios%20(job%20work%2C%20multi-vehicle%2C%20Bill-To%2FShip-To).%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Complex E-Way Bill',
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
            <p>Hear how teams across industries use Patron to save time, cut costs, &amp; stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ">S</div>
                        <div>
                            <div class="testi-name">Subhendu Mishra</div>
                            <div class="testi-role">2 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar blue">R</div>
                        <div>
                            <div class="testi-name">Rajib Dutta</div>
                            <div class="testi-role">3 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar teal">N</div>
                        <div>
                            <div class="testi-name">Nishikant Gurav</div>
                            <div class="testi-role">1 month ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar purple">N</div>
                        <div>
                            <div class="testi-name">Nikhil Nimbhorkar</div>
                            <div class="testi-role">4 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ">S</div>
                        <div>
                            <div class="testi-name">Sameer Mehta</div>
                            <div class="testi-role">2 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar blue">P</div>
                        <div>
                            <div class="testi-name">Preeti Singh Rathor</div>
                            <div class="testi-role">3 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar teal">A</div>
                        <div>
                            <div class="testi-name">Anita Gaur</div>
                            <div class="testi-role">5 months ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                <p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar purple">P</div>
                        <div>
                            <div class="testi-name">Pankaj Arvikar</div>
                            <div class="testi-role">1 month ago</div>
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg">
                        <source src="/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
                    </div>
                    <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar"><img src="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal"></div>
                    <div>
                        <div class="testi-name">Sunny Ashpal</div>
                        <div class="testi-role">Director - Demandify Media</div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg">
                        <source src="/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
                    </div>
                    <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar"><img src="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava"></div>
                    <div>
                        <div class="testi-name">Anjanay Srivastava</div>
                        <div class="testi-role">Founder - Hunarsource Consulting</div>
                    </div>
                </div>
            </div>
        </div>
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
            <!-- TOC_NAVIGATION_ITEMS PATTERN - use class "toc-btn" (NOT "toc-pill"); the CSS (.toc-btn) and scroll-spy JS (querySelectorAll('.toc-btn')) both target this exact class. First item gets "toc-btn active". One button per content section, in document order. Pattern:
                <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
                <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
                (repeat for who-section, services-section, procedure-section, documents-section, challenges-section, fees-section, timeline-section, benefits-section, comparison-section, faq-section)
            -->
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Scenarios Covered</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Comparison</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Complex E-Way Bill Scenarios at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Complex E-Way Bill Services at a Glance</strong></p>
                    <p>Job work and multi-vehicle e-way bill scenarios are the most error-prone area of GST logistics compliance. Inter-state job work requires an e-way bill irrespective of value (under Section 143 of the CGST Act read with Rule 138) and is generated on a delivery challan (Rule 55) rather than a tax invoice. ITC-04 quarterly return tracks the principal-job-worker movement cycle within statutory time limits (1 year for inputs, 3 years for capital goods). Multi-vehicle transhipment requires Part B updates on the portal at each vehicle change, except within 10 km in the same state. Consolidated e-way bill in Form GST EWB-02 under Rule 138(6) is generated by the transporter when one vehicle carries multiple consignments. Bill-To/Ship-To scenarios involve 4 parties and need careful EWB setup to avoid mismatch with the underlying tax invoice. Premium niche advisory at Rs 4,999 per engagement.</p>
                </div>
                <p>Job work and multi-vehicle e-way bill scenarios sit at the intersection of GST law and operational complexity - and they are where most Section 129 detention disputes actually arise. A pharmaceutical manufacturer sending API to a contract packager in another state, an automotive Tier-1 supplier shuttling parts between three job workers, a textile exporter using mixed road-rail-road transport, a trader running Bill-To/Ship-To with the buyer in Mumbai and the ship-to in Bangalore - each scenario has specific compliance requirements that the standard EWB workflow does not cover.</p>
                <p>With 10,000+ Indian businesses served, 25,000+ complex e-way bills generated for job work and multi-vehicle scenarios, and zero Section 143 job work disputes across our active client base in the last 36 months, Patron Accounting LLP runs this niche premium engagement - delivery challan setup, ITC-04 reconciliation, multi-vehicle Part B update discipline, consolidated EWB generation under Rule 138(6), Bill-To/Ship-To configuration, and detention defence when complex scenarios trigger Section 129 inspection.</p>
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
                <h2 class="section-title">What Are Complex E-Way Bill Scenarios?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Complex e-way bill scenarios are specific movement patterns that require non-standard e-way bill treatment under Rule 138 of the CGST Rules 2017 - distinct from the everyday B2B sale-to-customer flow.</p>
                    <p>The most common complex scenarios are job work (under Section 143 of the CGST Act read with Rule 45 - delivery challan-based EWB irrespective of consignment value for inter-state movement), multi-vehicle transhipment (Part B update at each conveyance change except within 10 km same state), consolidated e-way bill (Form GST EWB-02 under Rule 138(6) when one vehicle carries multiple consignments with individual EBNs), and Bill-To/Ship-To (4-party transactions where the buyer GSTIN and the ship-to GSTIN are different).</p>
                    <p>Each scenario has specific documentary requirements, generator obligations, and validity calculations that diverge from the standard tax-invoice-based workflow. The ITC-04 quarterly return reconciles the principal-job-worker movement within the 1-year inputs and 3-year capital-goods time limits under Section 143.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Complex E-Way Bill:</strong></p>
                    <ul>
                        <li><strong>Job Work (Section 2(68)):</strong> Any treatment or process undertaken on goods belonging to another registered person. The sender is the principal; the processor is the job worker.</li>
                        <li><strong>Section 143 CGST Act:</strong> Permits the principal to send inputs or capital goods to a job worker without payment of tax, subject to return within 1 year (inputs) or 3 years (capital goods). If not returned in time, the movement is deemed a supply.</li>
                        <li><strong>Rule 45 CGST Rules:</strong> Procedural framework for job work under Section 143 - delivery challan movement, intimation of details, and conditions for direct supply from job worker to customer.</li>
                        <li><strong>Delivery Challan (Rule 55):</strong> Document for transport where a tax invoice cannot be issued at dispatch (job work, sale on approval, exhibition, liquid gas). Three copies - original for consignee, duplicate for transporter, triplicate for consignor.</li>
                        <li><strong>ITC-04 Return:</strong> Quarterly return filed by the principal to report job work movements - sent, received back, or directly supplied from job worker premises. Due by the 25th of the month after quarter-end.</li>
                        <li><strong>Multi-Vehicle Movement:</strong> Single consignment moved using more than one vehicle in sequence (transhipment). Each vehicle change requires a Part B update, except within 10 km in the same state.</li>
                        <li><strong>Consolidated E-Way Bill (Form GST EWB-02):</strong> Single document combining multiple individual e-way bills when one vehicle carries multiple consignments. Generated by the transporter under Rule 138(6); does not replace individual EBNs.</li>
                        <li><strong>Bill-To/Ship-To Transaction:</strong> Four-party transaction where the buyer (Bill-To GSTIN) and the actual recipient (Ship-To GSTIN) are different. EWB Part A captures both GSTINs.</li>
                        <li><strong>Form GST EWB-03:</strong> Inspection and verification report prepared by the proper officer who intercepts goods in transit - issued within 3 days of inspection under Rule 138C.</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Complex E-Way Bill</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Job Work Document</span>
                        <strong>Delivery Challan (Rule 55)</strong>
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
            <h2 class="section-title">Complex Scenarios Covered</h2>
            <div class="content-text">
                
                <p>This engagement covers the complex e-way bill scenarios that fall outside the standard tax-invoice-based workflow - job work movements, multi-vehicle transhipment, consolidated EWB generation, and Bill-To/Ship-To transactions. Each has distinct compliance mechanics that require dedicated discipline.</p>
                <h3 style="margin-top:24px;">Job Work Movement Patterns</h3>
                <ul>
                    <li>Principal to Job Worker (initial dispatch of inputs or capital goods on delivery challan)</li>
                    <li>Job Worker to Principal (return of processed goods on delivery challan)</li>
                    <li>Job Worker to Another Job Worker (sequential processing across multiple JWs)</li>
                    <li>Job Worker to Customer (direct supply under Section 143 - requires JW premises as principal additional place of business)</li>
                    <li>Principal to Customer via Job Worker (drop-ship from JW premises with principal invoicing)</li>
                    <li>Sale of waste and scrap from job worker premises (job worker invoices)</li>
                </ul>
                <h3 style="margin-top:24px;">Multi-Vehicle and Transhipment Scenarios</h3>
                <ul>
                    <li>Truck-to-Train-to-Truck (road-rail-road combination for long-haul movement)</li>
                    <li>Hub-and-Spoke distribution (single trunk vehicle to multiple last-mile vehicles)</li>
                    <li>Port-to-Factory imports (vessel arrival, customs clearance, multi-mode inland transport)</li>
                    <li>Factory-to-Port exports (factory dispatch, ICD movement, port loading)</li>
                    <li>Vehicle breakdown mid-route requiring new vehicle assignment</li>
                    <li>Cross-docking at distribution centres</li>
                </ul>
                <h3 style="margin-top:24px;">Consolidated EWB Scenarios</h3>
                <ul>
                    <li>Logistics aggregator running daily mixed-shipper vehicles</li>
                    <li>FMCG distributor consolidating multiple retailer consignments on one vehicle</li>
                    <li>Courier and parcel network with multi-EBN consolidation per vehicle</li>
                    <li>Trade distribution where the shipper consolidates orders from multiple suppliers</li>
                </ul>
                <h3 style="margin-top:24px;">Bill-To/Ship-To Scenarios</h3>
                <ul>
                    <li>Head-office billing with branch-office or warehouse delivery</li>
                    <li>Trading transactions where the supplier delivers directly to the buyer customer (drop-ship)</li>
                    <li>Group company billing where the order is placed by the holding company but goods go to a subsidiary</li>
                    <li>Inter-company stock transfers with end-customer delivery via a different facility</li>
                </ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for Complex E-Way Bill Scenarios</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Job Work EWB Setup with Delivery Challan Discipline</td><td>End-to-end job work workflow - delivery challan generation under Rule 55, EWB issuance under Rule 138, ITC-04 quarterly return preparation, Section 143 time-limit tracking (1 year inputs, 3 years capital goods), and reconciliation of the principal-job-worker cycle.</td></tr>
                        <tr><td>ITC-04 Reconciliation and Section 143 Time Tracking</td><td>Asset-level register tracking every input and capital good sent to each job worker, expected return date based on Section 143, ITC-04 quarterly filing, deemed-supply trigger monitoring, and recovery of pending returns before liability arises.</td></tr>
                        <tr><td>Multi-Vehicle Transhipment Part B Update Workflow</td><td>Real-time tracking of multi-mode transport chains - Part B update on each vehicle change (except under 10 km same state), transporter-handover documentation, RFID and FASTag reconciliation, and detention defence if intercepted during transition.</td></tr>
                        <tr><td>Consolidated EWB Generation Under Rule 138(6)</td><td>For transporters and logistics operators - Form GST EWB-02 generation linking multiple individual EBNs to a single vehicle, RFID-VAHAN integration check, individual EWB validity tracking, and inspection convenience at roadside checks.</td></tr>
                        <tr><td>Bill-To/Ship-To EWB Configuration</td><td>For 4-party transactions - Part A configuration with separate Bill-To and Ship-To GSTINs, tax invoice alignment (place of supply, IGST vs CGST/SGST), e-invoice IRN coordination, and Section 10 IGST Act compliance for inter-state supplies.</td></tr>
                        <tr><td>Detention Defence for Complex Scenarios</td><td>When complex movements are intercepted - Section 129 detention response, MOV-02 inspection rebuttal with Section 143 documentation, Rule 138(6) defence for consolidated EWB, and appeal under Section 107 if a MOV-09 penalty is contested.</td></tr>

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
            <h2 class="section-title">How Complex E-Way Bill Compliance Works - Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From scenario mapping to detention defence, here is exactly how Patron Accounting runs complex e-way bill compliance for job work, multi-vehicle, consolidated, and Bill-To/Ship-To movements.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Scenario Mapping and Documentation Setup</h3>
                    <p class="step-description">Map every complex movement pattern - job work outsourcing relationships, multi-vehicle transport chains, consolidated dispatches, Bill-To/Ship-To trading. Set up delivery challan templates (Rule 55), job worker agreements, transporter contracts, and Bill-To/Ship-To matrices.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Patterns mapped</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Templates ready</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="16" width="84" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 30l20-6 20 6 20-6v44l-20 6-20-6-20 6z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><circle cx="50" cy="46" r="5" fill="#E8712C"/><path d="M50 46l16 14" stroke="#14365F" stroke-width="1.5" opacity="0.4"/></svg></div>
                        <span class="illustration-label">Scenario Map</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Job Work Pre-Dispatch Compliance</h3>
                    <p class="step-description">For each job work dispatch - issue a delivery challan under Rule 55 (NOT a tax invoice), enter Part A on the e-way bill portal using the challan number, capture the Section 143 expected return date, and update the job work register with asset details.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan issued</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Return date set</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="24" y="10" width="64" height="80" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="34" y1="26" x2="78" y2="26" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="34" y1="40" x2="74" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="34" y1="52" x2="74" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><text x="56" y="74" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DC</text></svg></div>
                        <span class="illustration-label">Pre-Dispatch</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Multi-Vehicle EWB Generation</h3>
                    <p class="step-description">For long-haul movements known to involve transhipment - generate a single EWB at origin, plan Part B updates at each transhipment point, identify transporters at each leg, and assign Part B update responsibility (transporter typically).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Single EWB</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Legs planned</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="14" y="36" width="50" height="30" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M64 44h20l14 12v10H64z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="34" cy="72" r="7" fill="#14365F"/><circle cx="84" cy="72" r="7" fill="#14365F"/></svg></div>
                        <span class="illustration-label">Multi-Vehicle</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Part B Update at Each Transhipment</h3>
                    <p class="step-description">When goods are transferred between vehicles - log into the portal, select the existing EWB, update Part B with the new vehicle number, and capture transporter handover documentation. Exception: within 10 km same state, the Part B update is not required.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New vehicle logged</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10-km checked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="14" y="40" width="36" height="26" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="70" y="40" width="36" height="26" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 48h16M68 44l-6 4 6 4M68 58H52M52 62l6-4-6-4" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Part B Update</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Consolidated EWB Generation (Transporter Step)</h3>
                    <p class="step-description">Before commencement of movement, the transporter generates Form GST EWB-02 by indicating the serial numbers of the individual EBNs being consolidated. A single EWB-02 document is created for inspection convenience; individual EBNs remain primary records.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EBNs linked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EWB-02 made</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="20" height="16" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="20" y="42" width="20" height="16" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="20" y="64" width="20" height="16" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M44 50h14" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><rect x="62" y="38" width="40" height="26" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="82" y="55" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EWB-02</text></svg></div>
                        <span class="illustration-label">Consolidated</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Bill-To/Ship-To EWB Configuration</h3>
                    <p class="step-description">In Part A - enter the supplier GSTIN, Bill-To GSTIN (buyer), and Ship-To GSTIN (recipient). Place of supply is determined per Section 10 IGST Act based on the Bill-To location. The tax invoice is issued to the Bill-To GSTIN with the Ship-To address; the EWB is tagged to the actual movement path.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Both GSTINs set</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PoS aligned</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="30" cy="30" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="90" cy="30" r="10" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="72" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M38 34l16 30M82 34L66 64" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><text x="30" y="33" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">BT</text><text x="60" y="75" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">ST</text></svg></div>
                        <span class="illustration-label">Bill-To/Ship-To</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">ITC-04 Quarterly Return Filing</h3>
                    <p class="step-description">Compile all job work movements for the quarter - inputs and capital goods sent, received back, directly supplied from JW premises, written off, or destroyed. File ITC-04 by the 25th of the month after the quarter (e.g., Q1 by 25 July).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarter compiled</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed by 25th</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="24" y="14" width="72" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="34" y="24" width="52" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITC-04</text><line x1="34" y1="48" x2="86" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="34" y1="60" x2="86" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="34" y1="72" x2="68" y2="72" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
                        <span class="illustration-label">ITC-04 Filing</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Section 143 Time-Limit Monitoring</h3>
                    <p class="step-description">Track each job work dispatch against the 1-year (inputs) or 3-year (capital goods) limit. Pre-expiry alerts at 11 months (inputs) and 35 months (capital goods). Coordinate with the job worker for timely return or extend the period via a principal request.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Alerts set</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns chased</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 32v18l12 8" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" fill="none"/></svg></div>
                        <span class="illustration-label">143 Monitor</span>
                        <span class="step-number-large">08</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 9</span>
                    <h3 class="step-title">Validity Tracking Across All Vehicles</h3>
                    <p class="step-description">For multi-vehicle EWBs - aggregate distance across all legs, total validity under the 1-day-per-200-km formula, pre-expiry alerts even when goods are mid-transhipment, and 8-hour extension window monitoring with valid reason capture.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Distance summed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Extensions tracked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M44 50l10 10 22-26" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <span class="illustration-label">Validity</span>
                        <span class="step-number-large">09</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 10</span>
                    <h3 class="step-title">Detention Defence with Scenario-Specific Documentation</h3>
                    <p class="step-description">If a complex scenario vehicle is intercepted under Section 68 - immediate response with scenario-specific documents (delivery challan for job work, EWB-02 for consolidated, Bill-To/Ship-To invoice for 4-party). MOV-02 rebuttal, MOV-09 payment route, or Section 107 appeal.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs ready</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MOV response</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 14l30 10v22c0 18-13 30-30 38-17-8-30-20-30-38V24z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l9 9 18-20" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <span class="illustration-label">Detention Defence</span>
                        <span class="step-number-large">10</span>
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
            <h2 class="section-title">Documents and Data Checklist</h2>
            <div class="content-text">
                
                <p>Have these inputs ready for complex e-way bill compliance:</p>
                <ul>
                    <li>Delivery challan template per Rule 55 (date, consignor, consignee, HSN, quantity, value, place of supply)</li>
                    <li>Job worker master with GSTIN, address, capacity, and time-limit history</li>
                    <li>Asset-level job work register (input batches and capital goods, send date, expected return)</li>
                    <li>ITC-04 historical filings (last 8 quarters)</li>
                    <li>Transporter master with all GSTIN-based transporter IDs (TRANSIN)</li>
                    <li>Multi-vehicle route map with planned transhipment points and distance per leg</li>
                    <li>Bill-To/Ship-To customer matrix with all GSTINs and addresses</li>
                    <li>Tax invoice samples for Bill-To/Ship-To transactions (place of supply, IGST/CGST/SGST treatment)</li>
                    <li>Section 10 IGST Act place-of-supply analysis for Bill-To/Ship-To</li>
                    <li>Historical detention notices (if any) - MOV-02, MOV-07, MOV-09 forms</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Section 143 Time-Limit Lapse Triggers Deemed Supply</td><td>Inputs not received back within 1 year (3 years for capital goods) is deemed a supply by the principal under Section 143(3), triggering full GST liability on the original transaction value. Manufacturers with multi-stage job work often lose track of the clock.</td><td>Asset-level job work register with auto-calculated expected return date, pre-expiry alerts at 11 months (inputs) and 35 months (capital goods), proactive coordination for timely return, or a principal-initiated extension request. Deemed-supply trigger neutralised across 1,500+ tracked dispatches.</td></tr>
                        <tr><td>Part B Update Missed During Transhipment</td><td>For multi-mode transport, the Part B update at each vehicle change is often missed - because the transporter is unaware or the 10-km same-state exception is misapplied to longer distances. Intercepted vehicles face Section 129 penalty.</td><td>Pre-dispatch route planning with transhipment checkpoints documented. Part B update responsibility assigned to each transporter in writing. Real-time portal monitoring at each handover point. The 10-km exception applied only where strictly valid.</td></tr>
                        <tr><td>Bill-To/Ship-To Place of Supply Mismatch</td><td>For 4-party transactions, the tax invoice determines place of supply under Section 10(1)(a) IGST Act based on the buyer (Bill-To), not the recipient (Ship-To). Mismatch between invoice IGST/CGST/SGST treatment and EWB delivery direction is a Section 61 scrutiny trigger.</td><td>Pre-invoice EWB analysis - Bill-To/Ship-To matrix flagged at order entry, tax invoice issued with correct place-of-supply per Section 10 IGST Act, EWB Part A configured with both GSTINs, and monthly reconciliation between invoice and EWB registers.</td></tr>
                        <tr><td>Consolidated EWB-02 Not Generated by Transporter</td><td>When a logistics operator runs one vehicle with multiple shipper consignments, the consolidated EWB under Rule 138(6) is the transporter responsibility - but many skip it, leaving each individual EBN as the only proof. Lack of EWB-02 causes confusion and detention at checkpoints.</td><td>For transporter and logistics clients - SOP and portal access setup for daily EWB-02 generation before vehicle departure. Operations checklist - individual EBNs collected, EWB-02 generated, single document handed to driver. Zero EWB-02 omission incidents across active engagements.</td></tr>

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
            <h2 class="section-title">Complex E-Way Bill Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges) - per engagement for niche complex scenarios</td></tr>
                        <tr><td>Job Work Setup</td><td>INR 4,999 setup - single principal, up to 3 job workers, delivery challan, ITC-04 cycle</td></tr>
                        <tr><td>Job Work Ongoing</td><td>INR 2,999/mo - ITC-04 quarterly filing, Section 143 time tracking, JW reconciliation</td></tr>
                        <tr><td>Multi-Vehicle and Transhipment</td><td>INR 4,999 per route - Part B update SOP, transporter coordination</td></tr>
                        <tr><td>Consolidated EWB-02 for Transporters</td><td>INR 4,999/mo - monthly EWB-02 generation workflow for logistics operators</td></tr>
                        <tr><td>Bill-To/Ship-To Setup</td><td>INR 9,999 one-time - per customer matrix, tax invoice and EWB alignment, place of supply</td></tr>
                        <tr><td>Detention Defence (Complex)</td><td>INR 19,999 per incident - per intercepted vehicle, scenario-specific documentation, MOV response</td></tr>
                        <tr><td>Section 129 Penalty and Section 143 Deemed-Supply Tax</td><td>Billed separately at actuals - ITC-04 government fees are nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Complex E-Way Bill consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20need%20help%20with%20complex%20e-way%20bill%20scenarios%20(job%20work%2C%20multi-vehicle%2C%20Bill-To%2FShip-To).%20Please%20share%20the%20process%20and%20fees." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for Complex EWB Activities</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Job work delivery challan and EWB generation</td><td>10-15 minutes per dispatch (same day, pre-dispatch)</td></tr>
                        <tr><td>ITC-04 quarterly return filing</td><td>4-6 hours (25 days post quarter-end)</td></tr>
                        <tr><td>Section 143 time-limit reconciliation</td><td>3-5 days (quarterly cycle)</td></tr>
                        <tr><td>Multi-vehicle route EWB generation</td><td>15-20 minutes (same day, before first leg)</td></tr>
                        <tr><td>Part B update at transhipment</td><td>2-3 minutes per change (before goods resume movement)</td></tr>
                        <tr><td>Consolidated EWB-02 generation</td><td>5-10 minutes (before vehicle departure)</td></tr>
                        <tr><td>Bill-To/Ship-To EWB configuration</td><td>10-15 minutes per order (same day)</td></tr>
                        <tr><td>MOV-02 detention response (complex)</td><td>6-8 hours (within 7 days of MOV-07)</td></tr>
                        <tr><td>Section 107 appeal (complex scenarios)</td><td>15-30 days (3 months from order)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Day-to-day activities close within hours.</strong> The ITC-04 quarterly return is the main recurring milestone. Section 107 appeals for complex disputes take longer due to documentation depth.</p>

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
            <h2 class="section-title">Benefits of Specialist Complex EWB Management</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <h3 class="feature-title">Deemed-Supply Trigger Prevented</h3>
                <p class="feature-desc">Proactive Section 143 time-limit tracking stops job work dispatches from becoming deemed supplies.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">ITC-04 Compliance Maintained</h3>
                <p class="feature-desc">Quarterly ITC-04 filed on time - no late fees and no Section 61 scrutiny on the job work chain.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><path d="M16 8h4l3 3v5h-7zM5.5 21a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM18.5 21a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/></svg></div>
                <h3 class="feature-title">Part B Update Discipline</h3>
                <p class="feature-desc">Multi-vehicle Part B updates at each transhipment prevent Section 129 detention.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3 class="feature-title">10-Km Exception Applied Accurately</h3>
                <p class="feature-desc">The same-state exception is applied only where strictly valid, never over-extended.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                <h3 class="feature-title">Consolidated EWB-02 Documented</h3>
                <p class="feature-desc">Transporter EWB-02 generation gives inspection convenience and avoids checkpoint confusion.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
                <h3 class="feature-title">Bill-To/Ship-To Aligned</h3>
                <p class="feature-desc">Place of supply aligned with Section 10 IGST Act across all 4-party transactions.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="19" r="3"/><circle cx="18" cy="5" r="3"/><path d="M6 16V9a4 4 0 014-4h4"/></svg></div>
                <h3 class="feature-title">Direct-Supply Configuration</h3>
                <p class="feature-desc">Job worker premises declared as the principal's additional place of business where direct supply is needed.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Detention Defence Ready</h3>
                <p class="feature-desc">Scenario-specific documentation prepared on day 1 - delivery challan, EWB-02, or Bill-To/Ship-To invoice.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="9"/><rect x="14" y="3" width="7" height="5"/><rect x="14" y="12" width="7" height="9"/><rect x="3" y="16" width="7" height="5"/></svg></div>
                <h3 class="feature-title">Compliance Dashboard</h3>
                <p class="feature-desc">A quarterly dashboard tracks all complex EWBs across GSTINs for full visibility.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div>
                <h3 class="feature-title">Niche Specialist Team</h3>
                <p class="feature-desc">15+ years of GST practice plus deep job work and logistics expertise in one team.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust Signals and Outcome Proof</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ Indian manufacturers, contract packagers, automotive Tier-1 and Tier-2 suppliers, pharmaceutical companies, textile exporters, FMCG distributors, and trading houses running complex multi-state operations.</p>
                <p>Patron has generated 25,000+ complex e-way bills covering job work, multi-vehicle transhipment, consolidated EWB-02, and Bill-To/Ship-To scenarios. Zero Section 143 job work disputes across the active client base in the last 36 months, zero Section 129 detention incidents during multi-vehicle transhipment in the last 24 months, and ITC-04 quarterly filings at 100 percent on-time compliance across all tracked principals.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong> See our <a href="https://www.patronaccounting.com/gst-audit/pune">GST audit support in Pune</a> for local assistance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Standard EWB vs Complex Scenario EWB</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Standard EWB</th><th>Complex Scenario EWB</th></tr></thead>
                    <tbody>
                        <tr><td>Documentary Basis</td><td>Tax invoice</td><td>Delivery challan (job work), tax invoice (Bill-To/Ship-To)</td></tr>
                        <tr><td>Threshold (Inter-State)</td><td>Rs 50,000 consignment value</td><td>No threshold for inter-state job work (Section 143)</td></tr>
                        <tr><td>Threshold (Intra-State)</td><td>State-specific</td><td>State-specific (intra-state job work)</td></tr>
                        <tr><td>Generator (Job Work)</td><td>Supplier or recipient</td><td>Principal or job worker</td></tr>
                        <tr><td>Generator (Consolidated)</td><td>Not applicable</td><td>Transporter under Rule 138(6)</td></tr>
                        <tr><td>Generator (Bill-To/Ship-To)</td><td>Supplier (most cases)</td><td>Supplier with both GSTINs in Part A</td></tr>
                        <tr><td>Recurring Return Filing</td><td>GSTR-1</td><td>ITC-04 (quarterly for job work)</td></tr>
                        <tr><td>Time Limits</td><td>Validity 1 day per 200 km</td><td>Plus Section 143 limits (1 year/3 years)</td></tr>
                        <tr><td>Multi-Vehicle</td><td>Single vehicle typical</td><td>Part B update at each transhipment</td></tr>
                        <tr><td>Place of Supply</td><td>Recipient GSTIN</td><td>Determined per Section 10 IGST Act (Bill-To/Ship-To)</td></tr>
                        <tr><td>Patron Fee Tier</td><td>INR 999/mo (operational)</td><td>INR 4,999+ per engagement (niche)</td></tr>

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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="https://www.patronaccounting.com/gst-services">GST Services</a> - the complete GST services hub covering registration, returns, ITC, refunds, notices and audits.</li>
                    <li><a href="https://www.patronaccounting.com/gst-returns">GST Returns</a> - GSTR-1 reconciliation with all EWB types.</li>
                    <li><a href="https://www.patronaccounting.com/gst-audit">GST Audit</a> - Section 129 detention defence and Section 107 appeals.</li>
                    <li><a href="https://www.patronaccounting.com/gst-registration">GST Registration</a> - additional place of business for job-worker direct supply.</li>
                    <li><a href="https://www.patronaccounting.com/gst-annual-returns">GST Annual Returns</a> - annual reconciliation of ITC-04 with GSTR-9.</li>
                    <li><a href="https://www.patronaccounting.com/tally-accounting">Tally Accounting</a> - Tally Prime job work and delivery challan workflow.</li>
                    <li><a href="https://www.patronaccounting.com/zoho-books-accounting">Zoho Books Accounting</a> - Zoho-native delivery challan and EWB.</li>
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
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Element</th><th>Provision</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Central Goods and Services Tax Act 2017 + CGST Rules 2017</td></tr>
                        <tr><td>Job Work Definition</td><td>Section 2(68) CGST Act</td></tr>
                        <tr><td>Job Work Provisions</td><td>Section 143 CGST Act - inputs and capital goods to job worker</td></tr>
                        <tr><td>Job Work Time Limits</td><td>1 year for inputs; 3 years for capital goods (Section 143(1) and (2))</td></tr>
                        <tr><td>Deemed Supply</td><td>Section 143(3) - if not returned within time, deemed supply by principal</td></tr>
                        <tr><td>Job Work Procedure</td><td>Rule 45 CGST Rules - intimation and conditions</td></tr>
                        <tr><td>Delivery Challan</td><td>Rule 55 CGST Rules - format, contents, copies</td></tr>
                        <tr><td>ITC-04 Return</td><td>Form GST ITC-04 - quarterly; due 25th of month after quarter-end</td></tr>
                        <tr><td>E-Way Bill Primary Rule</td><td>Rule 138 CGST Rules + Section 68</td></tr>
                        <tr><td>Inter-State Job Work EWB</td><td>Mandatory irrespective of value (Notification 12/2018-CT and Section 143)</td></tr>
                        <tr><td>Multi-Vehicle Part B Update</td><td>Rule 138(5) - update vehicle details before resuming movement</td></tr>
                        <tr><td>10-km Same-State Exception</td><td>Rule 138(3) - Part B not required if distance less than 10 km within same state</td></tr>
                        <tr><td>Consolidated EWB</td><td>Rule 138(6) - Form GST EWB-02 by transporter for multi-consignment vehicle</td></tr>
                        <tr><td>Bill-To/Ship-To</td><td>Section 10 IGST Act - place of supply determined by Bill-To GSTIN location</td></tr>
                        <tr><td>Detention / Confiscation</td><td>Section 129 (detention, seizure, release); Section 130 (confiscation on intent to evade)</td></tr>
                        <tr><td>Penalty</td><td>Section 129(1)(a) - 200% of tax payable</td></tr>
                        <tr><td>Inspection Report</td><td>Form GST EWB-03 - within 3 days of inspection (Rule 138C)</td></tr>
                        <tr><td>Appeal Route</td><td>Section 107 CGST Act - first appellate authority within 3 months</td></tr>
                        <tr><td>October 2025 SC Position</td><td>No penalty without intent to evade tax (Section 129 clarification)</td></tr>
                        <tr><td>Authority</td><td>CBIC and NIC</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;"><strong>Section 143 deemed-supply trigger:</strong> If inputs are not received back from the job worker within 1 year (3 years for capital goods), the original movement is treated as a deemed supply by the principal as on the date of dispatch - full GST liability with interest under Section 50.</p>
                <p style="margin-top:12px;"><strong>Bill-To/Ship-To place of supply:</strong> Under Section 10 of the IGST Act, where the supply involves movement of goods, the place of supply is the location where movement terminates for delivery. For Bill-To/Ship-To, the recipient as per Section 10(1)(a) is the buyer (Bill-To), not the actual physical recipient (Ship-To).</p>
                <p style="margin-top:12px;"><strong>October 2025 Supreme Court ruling</strong> clarifies that mens rea (intent to evade tax) is required for a Section 129 penalty - mere procedural lapses without intent are not penalisable. The ruling has improved the appeal success rate for genuine compliance errors.</p>
                <p style="margin-top:12px;">This page covers complex scenarios only. Standard daily e-way bill generation, validity tracking, and operational subscription is covered by our separate E-Way Bill Generation and Compliance engagement.</p>
                <p style="margin-top:12px;">Authoritative references: <a href="https://www.indiacode.nic.in/handle/123456789/2104" target="_blank" rel="noopener">India Code - Section 143 CGST Act and Section 10 IGST Act</a>, <a href="https://taxinformation.cbic.gov.in/" target="_blank" rel="noopener">CBIC Tax Information Portal (Rules 45, 55, 138)</a>, <a href="https://ewaybillgst.gov.in/" target="_blank" rel="noopener">E-Way Bill Portal</a>, <a href="https://ewaybill2.gst.gov.in/" target="_blank" rel="noopener">E-Way Bill 2.0 Backup Portal</a>, and <a href="https://cbic-gst.gov.in/notifications.html" target="_blank" rel="noopener">CBIC GST Notifications</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on job work e-way bills, delivery challans, Section 143 time limits, multi-vehicle transhipment, consolidated EWB-02, Bill-To/Ship-To, and ITC-04.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Complex E-Way Bill',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is e-way bill required for job work movement?</h3>
                        <div class="faq-expanded__a"><p>Yes. For inter-state job work under Section 143 of the CGST Act, an e-way bill is mandatory irrespective of the consignment value - even if the value is below Rs 50,000. For intra-state job work, the standard state-specific threshold applies (most states Rs 50,000). The e-way bill is generated based on a delivery challan under Rule 55 of the CGST Rules - not a tax invoice, since no supply is happening at the movement stage. Both the principal-to-job-worker dispatch and the job-worker-to-principal return require e-way bills under this framework.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between delivery challan and tax invoice for e-way bill?</h3>
                        <div class="faq-expanded__a"><p>A tax invoice is issued under Section 31 of the CGST Act when there is a supply attracting GST - the document carries tax liability. A delivery challan is issued under Rule 55 when there is movement of goods without a supply event - for job work, sale on approval, exhibition, transport of liquid gas, and similar scenarios. The delivery challan contains date, consignor and consignee details, HSN, quantity, value, and place of supply but does not include tax components. E-way bills can be generated against either document, with the underlying document type captured in Part A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are Section 143 time limits for job work?</h3>
                        <div class="faq-expanded__a"><p>Under Section 143(1) of the CGST Act, inputs sent to a job worker must be received back by the principal within 1 year from the date of dispatch. Under Section 143(2), capital goods sent to a job worker must be received back within 3 years. If not received back within these time limits, the original movement is deemed to be a supply by the principal on the date of dispatch under Section 143(3) - triggering full GST liability with interest under Section 50 from the date of dispatch. Time limits do not apply to moulds, dies, jigs, fixtures, or tools.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does multi-vehicle transhipment work for e-way bill?</h3>
                        <div class="faq-expanded__a"><p>When goods are transferred from one vehicle to another during transit, the transporter or the registered person must update Part B of the existing e-way bill with the new vehicle number before the goods resume movement. This is mandatory under Rule 138(5). Exception under Rule 138(3) - if the distance between the consigner or consignee and the transporter or between transhipment points is less than 10 km within the same state, the Part B update is not required. This exception is narrowly applied and should not be misused for longer distances.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is a consolidated e-way bill and when is it required?</h3>
                        <div class="faq-expanded__a"><p>A consolidated e-way bill in Form GST EWB-02 is generated by the transporter under Rule 138(6) when a single vehicle is carrying multiple consignments, each with its own individual e-way bill number. The EWB-02 links all the individual EBNs into a single document for inspection convenience at roadside checks. It does not replace the individual e-way bills - the underlying EBNs remain the primary compliance records. The transporter generates the EWB-02 before commencement of movement based on the individual EBNs collected from each shipper.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is Bill-To/Ship-To structured in e-way bill?</h3>
                        <div class="faq-expanded__a"><p>In a Bill-To/Ship-To transaction, the buyer (Bill-To GSTIN) and the actual recipient (Ship-To GSTIN) are different. In Part A of the e-way bill, both GSTINs are captured. The tax invoice is issued to the Bill-To GSTIN with the Ship-To address noted, and the place of supply under Section 10 of the IGST Act is determined based on the Bill-To location not the Ship-To. The e-way bill is tagged to the actual physical movement path. Common use cases include head-office billing with branch delivery, trading drop-shipments, and group company transactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is ITC-04 and when must it be filed?</h3>
                        <div class="faq-expanded__a"><p>ITC-04 is a quarterly return filed by the principal under Rule 45(3) of the CGST Rules to report all job work movements - inputs and capital goods sent to job workers, received back, directly supplied from job worker premises under Section 143, or written off. The return is due by the 25th of the month after the quarter-end (e.g., Q1 April-June return due by 25 July). ITC-04 reconciles against the principal capital goods register, job worker register, and Section 143 time-limit tracker. Late filing attracts late fees and Section 61 scrutiny.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Job work ka e-way bill aur ITC-04 kaise file kare?</h3>
                        <div class="faq-expanded__a"><p>Job work ke liye e-way bill delivery challan (Rule 55 ke under) par banta hai, tax invoice par nahi. Inter-state job work ke liye e-way bill mandatory hai value se irrespective (Rs 50,000 threshold lagu nahi hota - Section 143 ke under). Intra-state ke liye state threshold lagu hota hai. Time limits - inputs 1 saal mein wapas aane chahiye, capital goods 3 saal mein. Agar nahi aaye to Section 143(3) ke under deemed supply hota hai - principal par full GST plus interest. ITC-04 quarterly return file karna padta hai (har quarter ke baad 25 tareekh tak). Patron isko end-to-end manage karta hai - delivery challan, EWB, ITC-04, Section 143 time tracking, aur deemed-supply trigger prevention. Starting fee INR 4,999 per engagement.</p></div>
                    </div>
                </div>
            </div>

            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Job Work Section:</strong> Section 143 CGST Act + Rule 45 CGST Rules.</li>
                    <li><strong>Job Work Document:</strong> Delivery challan under Rule 55 (not tax invoice).</li>
                    <li><strong>Inter-State Job Work EWB:</strong> Mandatory irrespective of value.</li>
                    <li><strong>Time Limits:</strong> 1 year for inputs; 3 years for capital goods.</li>
                    <li><strong>ITC-04 Filing:</strong> Quarterly, by the 25th of the month after quarter-end.</li>
                    <li><strong>Multi-Vehicle Update:</strong> Part B update at each transhipment except less than 10 km same state.</li>
                    <li><strong>Consolidated EWB Form:</strong> Form GST EWB-02 under Rule 138(6).</li>
                    <li><strong>Bill-To/Ship-To Place of Supply:</strong> Section 10 IGST Act - based on Bill-To GSTIN location.</li>
                    <li><strong>Deemed Supply Trigger:</strong> Section 143(3) - if not returned within time, supply on date of dispatch.</li>
                    <li><strong>Detention Defence:</strong> Scenario-specific documentation - delivery challan, EWB-02, or Bill-To/Ship-To invoice.</li>
                    <li><strong>Patron Fee:</strong> INR 4,999 onwards per engagement; INR 2,999/mo ongoing.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Complex EWB Scenarios Carry Compounded Risk</h2>
            <div class="content-text">
                
                <p>Complex e-way bill scenarios carry compounded exposure - the Section 143 deemed-supply trigger can convert a routine job work dispatch into a full-value GST liability with interest from the original dispatch date, multi-vehicle transhipment missing a Part B update at a single leg invites Section 129 detention at 200 percent of tax, and Bill-To/Ship-To misalignment between place of supply and EWB delivery direction triggers Section 61 scrutiny with DRC-01A pre-notice intimation.</p>
                <p>Most enterprises run these scenarios with the same workflow as standard EWB - which is precisely where the gaps surface. The October 2025 Supreme Court clarification that mens rea is required for a Section 129 penalty has improved appeal outcomes for genuine errors, but pre-emptive compliance is far cheaper than post-detention defence.</p>
                <p>ITC-04 quarterly filing is the public-facing evidence of job work discipline - missed or delayed filings flag the entire job work chain for scrutiny. Niche specialist engagement at Rs 4,999 starting fee is the operational discipline this complexity demands.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Complex E-Way Bill Scenarios Audited and Set Up Right</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">Job work and multi-vehicle e-way bill scenarios are where GST compliance meets operational complexity - the scenarios where standard workflows fail and specialist discipline pays off in detention prevention and Section 143 time-limit management. Patron Accounting LLP runs this niche premium engagement with 15+ years of GST practice and 25,000+ complex e-way bills generated across job work, transhipment, consolidated, and Bill-To/Ship-To scenarios.</p>
                <p style="color:rgba(255,255,255,0.92);">Zero Section 143 job work disputes in the last 36 months and zero Section 129 transhipment detentions in the last 24 months speak to the depth of the methodology. The engagement is scenario-scoped and priced from Rs 4,999, with ongoing monthly support for principals with active job work chains.</p>
                <p style="color:rgba(255,255,255,0.92);">Pair this with <a href="https://www.patronaccounting.com/gst-returns" style="color:#fff;text-decoration:underline;">GST Returns</a> for GSTR-1 reconciliation and <a href="https://www.patronaccounting.com/gst-audit" style="color:#fff;text-decoration:underline;">GST Audit</a> for Section 129 detention defence and Section 107 appeals - together they build an integrated EWB compliance backbone across all movement patterns.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%20Patron%20Accounting%2C%20I%20need%20help%20with%20complex%20e-way%20bill%20scenarios%20(job%20work%2C%20multi-vehicle%2C%20Bill-To%2FShip-To).%20Please%20share%20the%20process%20and%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Complex E-Way Bill%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Complex E-Way Bill%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for Complex E-Way Bill scenarios</div>
                <div class="pa-cross-grid">
                    <a href="https://www.patronaccounting.com/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/gst-annual-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/tally-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">India</div></div></a><a href="https://www.patronaccounting.com/zoho-books-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Zoho Books Accounting</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 27 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 1 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 1 cadence) and on any CBIC notification on Section 143, Rule 45, Rule 55, or Rule 138 sub-rules, GST Council decision on job work or consolidated EWB, or Supreme Court ruling on Section 129 detention.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026-27 ITR filing is live</strong> - get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
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
                        <div class="testi-google-badge"><img src="https://www.patronaccounting.com/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
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
        // Static cards already in DOM - just init Slick if not already done
        if (slider.children.length > 0 && !$(slider).hasClass('slick-initialized')) {
            if (loading) loading.style.display = 'none';
            initSlick(slider);
            return;
        }
        let html = '';

        reviews.forEach(function(review, i) {
            if (review.hasVideo && review.videoUrl) {
                html += buildVideoCard(review);
            } else {
                html += buildQuoteCard(review, i);
            }
        });

        slider.innerHTML = html;
        slider.style.display = 'block';
        loading.style.display = 'none';

        // Init Slick
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
        // Static cards already rendered in the desired order - use them as-is and do NOT
        // fetch/regenerate from fallbackReviews or the Google API (that would overwrite the
        // curated order, e.g. video, text, video, then rest).
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
            return; // static cards are authoritative - stop here
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
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    let current = '';
    sections.forEach(function(section) {
        const sectionTop = section.offsetTop - 120;
        if (pageYOffset >= sectionTop) { current = section.getAttribute('id'); }
    });
    tocBtns.forEach(function(btn) {
        btn.classList.remove('active');
        if (btn.getAttribute('href') === '#' + current) { btn.classList.add('active'); }
    });
});
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

<script>
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = '1 June 2026';
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>

