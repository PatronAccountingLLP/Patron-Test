@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP TDS 2026: Section 192 & Form 24Q | Patron</title>
    <meta name="description" content="Employers deduct TDS on the ESOP perquisite at slab rate under Section 192 and report it in Form 24Q. Expert filing from Rs 4,999 per quarter.">
    <link rel="canonical" href="/esop-tds-section-192-and-form-24q">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP TDS 2026: Section 192 and Form 24Q for Employers | Patron Accounting">
    <meta property="og:description" content="Employers deduct TDS on the ESOP perquisite at slab rate under Section 192 and report it in Form 24Q. Expert filing from Rs 4,999 per quarter.">
    <meta property="og:url" content="/esop-tds-section-192-and-form-24q">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP TDS 2026: Section 192 and Form 24Q for Employers | Patron Accounting">
    <meta name="twitter:description" content="Employers deduct TDS on the ESOP perquisite at slab rate under Section 192 and report it in Form 24Q. Expert filing from Rs 4,999 per quarter.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q/#service",
        "name": "ESOP TDS under Section 192 and Form 24Q",
        "description": "Patron Accounting computes employer TDS on the ESOP salary perquisite at slab rate under Section 192 of the Income-tax Act, files the quarterly Form 24Q return under Rule 31A, runs sell-to-cover where the benefit is non-cash, and issues a reconciled Form 16 to employees across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Tax deduction at source", "sameAs": "https://en.wikipedia.org/wiki/Tax_deduction_at_source" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP TDS and Form 24Q Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Quarterly Form 24Q Filing for ESOP TDS" },
                    "price": "4999",
                    "priceCurrency": "INR",
                    "description": "Section 192 computation, the quarterly return and challan reconciliation. Starting per-quarter price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP TDS and Form 24Q", "item": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How does an employer deduct TDS on an ESOP perquisite?",
                "acceptedAnswer": { "@type": "Answer", "text": "The employer adds the ESOP perquisite (FMV on exercise minus exercise price, times shares) to the employee salary and deducts TDS at the average slab rate under Section 192, including surcharge and cess. Because the benefit is non-cash, the employer either recovers the tax from the employee or runs a sell-to-cover, then deposits the TDS by the 7th of the next month." }
            },
            {
                "@type": "Question",
                "name": "What are the Form 24Q due dates?",
                "acceptedAnswer": { "@type": "Answer", "text": "Form 24Q is filed quarterly under Rule 31A: Q1 (Apr to Jun) by 31 July, Q2 (Jul to Sep) by 31 October, Q3 (Oct to Dec) by 31 January, and Q4 (Jan to Mar) by 31 May. From 1 April 2026 the return is Form 138, but these due dates remain unchanged. Late filing attracts Rs 200 per day under Section 234E." }
            },
            {
                "@type": "Question",
                "name": "ESOP par TDS kaun kaatta hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "ESOP perquisite par TDS employer kaatta hai, exercise ke samay, Section 192 ke tahat slab rate par. Kyunki yeh non-cash benefit hai, employer ya to employee se recover karta hai ya sell-to-cover karta hai." }
            },
            {
                "@type": "Question",
                "name": "Is the ESOP perquisite reported in Form 24Q?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. The ESOP perquisite is part of salary, so it is reported in Form 24Q along with regular salary TDS. The detailed annual breakup, including the perquisite, is filed in Annexure II in the Q4 return, which then drives the Form 16 issued to the employee." }
            },
            {
                "@type": "Question",
                "name": "When is Form 16 issued for ESOP TDS?",
                "acceptedAnswer": { "@type": "Answer", "text": "Form 16 is issued by 15 June following the financial year. Part A is auto-generated on TRACES once all four Form 24Q returns are accepted, and Part B carries the salary and perquisite breakup from Annexure II. From FY 2026-27, Form 16 is replaced by Form 130 under the Income-tax Act 2025." }
            },
            {
                "@type": "Question",
                "name": "Can a startup defer ESOP TDS?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. Under Section 192(1C), an employer that is an eligible startup with DPIIT recognition and an IMB certificate under Section 80-IAC can defer TDS to the earliest of 48 months from the end of the relevant assessment year, the date of sale, or cessation of employment. The slab rate of the allotment year applies." }
            },
            {
                "@type": "Question",
                "name": "ESOP TDS jama nahi kiya to kya hota hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Agar TDS samay par jama nahi kiya, to Section 201 ke tahat 1 percent ya 1.5 percent prati maah interest lagta hai, aur Form 24Q late filing par Section 234E ke tahat Rs 200 prati din ka fee lagta hai." }
            },
            {
                "@type": "Question",
                "name": "Do the new Income-tax Act 2025 form numbers change the process?",
                "acceptedAnswer": { "@type": "Answer", "text": "No. The process is unchanged. Only the references change: Section 192 becomes Section 392, Form 24Q becomes Form 138, and Form 16 becomes Form 130 for exercises from 1 April 2026. Due dates and computation stay the same. ESOP plan documents citing the old numbers should be updated." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q",
        "name": "ESOP TDS under Section 192 and Form 24Q",
        "description": "Employers deduct TDS on the ESOP perquisite at slab rate under Section 192 and report it in Form 24Q. Expert filing from Rs 4,999 per quarter.",
        "url": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-tds-section-192-and-form-24q/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How the quarterly ESOP TDS and Form 24Q cycle works",
        "description": "Step-by-step process to receive the perquisite working, compute Section 192 TDS, deposit the TDS, file Form 24Q, generate Form 16, and issue and reconcile.",
        "totalTime": "P4D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Receive the perquisite working",
                "text": "Capture (FMV on exercise minus exercise price) times shares for each employee."
            },
            {
                "@type": "HowToStep",
                "name": "Compute Section 192 TDS",
                "text": "Add the perquisite to salary and withhold at the average slab rate, including surcharge and cess."
            },
            {
                "@type": "HowToStep",
                "name": "Deposit the TDS",
                "text": "Pay via ITNS 281 by the 7th of the following month, and by 30 April for March."
            },
            {
                "@type": "HowToStep",
                "name": "File Form 24Q",
                "text": "Submit Annexure I each quarter; add Annexure II in Q4. From FY 2026-27 this is Form 138."
            },
            {
                "@type": "HowToStep",
                "name": "Generate Form 16",
                "text": "Download Part A and Part B from TRACES once all four quarters are accepted."
            },
            {
                "@type": "HowToStep",
                "name": "Issue and reconcile",
                "text": "Issue Form 16 by 15 June and confirm it matches Form 12BA and the employee Form 26AS."
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "https://www.patronaccounting.com/#organization-rating",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com/",
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "850", "bestRating": "5", "worstRating": "1" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "DefinedTermSet",
        "name": "ESOP TDS and Form 24Q Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Form 24Q",
                "description": "The quarterly salary-TDS return filed under Rule 31A, replaced by Form 138 from FY 2026-27."
            },
            {
                "@type": "DefinedTerm",
                "name": "Annexure II",
                "description": "The Q4-only annual salary breakup that drives Form 16 generation on TRACES."
            },
            {
                "@type": "DefinedTerm",
                "name": "Sell-to-cover",
                "description": "Selling part of the exercised shares to fund the TDS, used where the perquisite is non-cash."
            },
            {
                "@type": "DefinedTerm",
                "name": "Section 192(1C)",
                "description": "The deferral provision that postpones TDS for eligible startup employees."
            }
        ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages.css') }}?v=1">
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
                        ESOP TDS under Section 192 and Form 24Q
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> perquisite working, TAN, challan, employee PAN and salary data.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> quarterly 24Q filing starting from Rs 4,999 (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applies to:</span> every employer deducting TDS on an ESOP exercise event.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due dates:</span> Q1 31 Jul, Q2 31 Oct, Q3 31 Jan, Q4 31 May.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on payroll TDS</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP TDS and Form 24Q%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP TDS and Form 24Q%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20we%20need%20help%20with%20ESOP%20TDS%20under%20Section%20192%20and%20quarterly%20Form%2024Q%20filing.%20Please%20share%20the%20process%20and%20per-quarter%20fees." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ESOP TDS and Form 24Q',
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
    'ctaText'    => 'Employers and payroll teams trust Patron Accounting to compute ESOP perquisite TDS, file Form 24Q on time and issue a reconciled Form 16 every quarter.',
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
            
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is It</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who It Applies To</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">6 Steps</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">In-House vs Pro</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What This Service Covers</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP TDS and Form 24Q Services at a Glance</strong></p>
                    <p>On an ESOP exercise, the employer must deduct TDS on the perquisite at the employee slab rate under Section 192, report it in Form 24Q each quarter, and issue Form 16. We run that full cycle.</p>
                </div>
                <p>Deduct, deposit and report TDS on the ESOP perquisite correctly, every quarter. Patron Accounting handles Section 192 withholding on the non-cash ESOP benefit, files Form 24Q, and issues Form 16 so your payroll passes assessment cleanly.</p>
                <p>ESOP TDS is the employer obligation to withhold tax on the ESOP perquisite at exercise. Because the benefit is non-cash, payroll teams routinely under-deduct, miss the Form 24Q deadline, or issue a Form 16 that does not reconcile with the employee return. Patron Accounting has run salary-TDS compliance for Indian employers for over 15 years.</p>
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
                <h2 class="section-title">What Is ESOP TDS under Section 192</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP TDS is the tax an employer deducts on the ESOP perquisite as part of salary under Section 192 of the Income-tax Act 1961. The perquisite is the fair market value on the exercise date minus the exercise price, and TDS is withheld at the employee average slab rate in the month of exercise.</p>
                    <p>From 1 April 2026, the Income-tax Act 2025 governs the same withholding under Section 392, with the quarterly return as Form 138 and the certificate as Form 130. The mechanism is unchanged; only the section and form numbers move. Form 24Q consolidates all salary TDS, so the ESOP perquisite is reported alongside regular salary.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP TDS and Form 24Q:</strong></p>
                    <ul>
                        <li><strong>Form 24Q:</strong> the quarterly salary-TDS return under Rule 31A, replaced by Form 138 from FY 2026-27.</li>
                        <li><strong>Annexure II:</strong> the Q4-only annual salary breakup that drives Form 16 on TRACES.</li>
                        <li><strong>Sell-to-cover:</strong> selling part of the exercised shares to fund the TDS on a non-cash perquisite.</li>
                        <li><strong>Section 192(1C):</strong> the deferral provision that postpones TDS for eligible startup employees.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP TDS and Form 24Q</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Withheld under</span>
                        <strong>Section 192</strong>
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
            <h2 class="section-title">Who This Applies To</h2>
            <div class="content-text">
                
                <p>Every employer that deducts TDS on an ESOP exercise must report it in Form 24Q for that quarter, even if only one employee is affected.</p>
                <ul>
                    <li>Companies and LLPs whose employees exercise listed or unlisted ESOPs.</li>
                    <li>Indian subsidiaries withholding on foreign-parent ESOP and RSU benefits.</li>
                    <li>Startup employers applying Section 192(1C) deferral for eligible employees.</li>
                    <li>HR and payroll teams responsible for Form 16 issuance and reconciliation.</li>
                </ul>
                <p><strong>Statutory anchor:</strong> an employer that deducts TDS on salary must file Form 24Q for that quarter under Rule 31A, failing which a fee of Rs 200 per day applies under Section 234E and employees cannot obtain Form 16.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our ESOP TDS and Form 24Q Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 192 TDS Computation</td><td>We compute slab-rate TDS on the ESOP perquisite and integrate it with the employee monthly salary.</td></tr>
                        <tr><td>Sell-to-Cover Coordination</td><td>We size the share sale needed to fund the TDS so the non-cash perquisite does not create a shortfall.</td></tr>
                        <tr><td>Form 24Q Quarterly Filing</td><td>We prepare Annexure I every quarter and Annexure II in Q4, validate PANs, and upload the FVU.</td></tr>
                        <tr><td>Form 16 Issuance</td><td>We generate Form 16 Part A and Part B from TRACES and issue to employees by 15 June.</td></tr>
                        <tr><td>Section 192(1C) Deferral</td><td>We apply the deferral for eligible startup employees and track the trigger event.</td></tr>
                        <tr><td>Notice and Default Resolution</td><td>We resolve short-deduction and late-filing defaults raised by CPC-TDS.</td></tr>

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
            <h2 class="section-title">The Quarterly TDS Cycle in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From the perquisite working to a reconciled Form 16, we run the full Section 192 and Form 24Q cycle every quarter.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Receive the perquisite working</h3>
        <p class="step-description">We capture (FMV on exercise minus exercise price) x shares for each employee.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FMV minus price</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>x shares</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="16" width="52" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FMV-EP</text><line x1="44" y1="52" x2="76" y2="52" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="70" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">x shares</text></svg></div>
            <span class="illustration-label">Working In</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Compute Section 192 TDS</h3>
        <p class="step-description">We add the perquisite to salary and withhold at the average slab rate, including surcharge and cess.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Slab rate</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Surcharge + cess</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="38" y="16" width="44" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="46" y="24" width="28" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><circle cx="50" cy="48" r="2.6" fill="#14365F"/><circle cx="60" cy="48" r="2.6" fill="#14365F"/><circle cx="70" cy="48" r="2.6" fill="#E8712C"/><circle cx="50" cy="60" r="2.6" fill="#14365F"/><circle cx="60" cy="60" r="2.6" fill="#14365F"/><circle cx="70" cy="60" r="2.6" fill="#E8712C"/></svg></div>
            <span class="illustration-label">TDS Computed</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Deposit the TDS</h3>
        <p class="step-description">We pay via ITNS 281 by the 7th of the following month, and by 30 April for March.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITNS 281</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>By 7th</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="40" width="60" height="36" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 20 v20 M52 32 l8 8 8 -8" stroke="#E8712C" stroke-width="2.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="64" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITNS 281</text></svg></div>
            <span class="illustration-label">Deposited</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File Form 24Q</h3>
        <p class="step-description">We submit Annexure I each quarter; we add Annexure II in Q4. From FY 2026-27 this is Form 138.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annexure I</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annexure II (Q4)</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="14" width="52" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="12" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">24Q</text><line x1="44" y1="56" x2="76" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="44" y1="66" x2="68" y2="66" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div>
            <span class="illustration-label">Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Generate Form 16</h3>
        <p class="step-description">We download Part A and Part B from TRACES once all four quarters are accepted.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Part A + B</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>From TRACES</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="16" width="52" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="44" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">16</text><circle cx="60" cy="64" r="9" fill="#E8F5E9" stroke="#25D366" stroke-width="1.4"/><path d="M55 64l3.5 3.5L65 60" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Generated</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Issue and reconcile</h3>
        <p class="step-description">We issue Form 16 by 15 June and confirm it matches Form 12BA and the employee Form 26AS.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>By 15 June</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Matches 26AS</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="34" width="34" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="68" y="34" width="34" height="40" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 54 h16 M60 49 l6 5 -6 5" stroke="#E8712C" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><text x="35" y="86" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">26AS</text></svg></div>
            <span class="illustration-label">Reconciled</span>
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
            <h2 class="section-title">Documents Checklist</h2>
            <div class="content-text">
                
                <ul>
                    <li>Perquisite computation per employee with exercise date and FMV source.</li>
                    <li>Employer TAN and TRACES login.</li>
                    <li>Employee PAN and monthly salary data for the quarter.</li>
                    <li>Challan (ITNS 281) details for TDS deposited.</li>
                    <li>DPIIT recognition and IMB certificate, if applying Section 192(1C) deferral.</li>
                    <li>Prior-quarter 24Q acknowledgements for the financial year.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Why ESOP TDS trips up payroll</strong></p>
                    <p>The perquisite is non-cash. There is no salary outflow to deduct from, so the employer must either recover the TDS from the employee or run a sell-to-cover, then still report it in Form 24Q in the correct quarter.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Non-cash perquisite, no salary to deduct from</td><td>Funding shortfall</td><td>We design a sell-to-cover or employee recovery so TDS is funded and deposited on time.</td></tr>
                        <tr><td>Under-deduction triggers Section 201 interest</td><td>1% or 1.5% per month</td><td>We compute the correct slab TDS with surcharge and cess before the deposit date.</td></tr>
                        <tr><td>Form 16 mismatch with employee Form 26AS</td><td>Employee notices</td><td>We reconcile Annexure II, Form 12BA and Form 26AS before issuing Form 16.</td></tr>
                        <tr><td>Plan documents still cite old section and form numbers</td><td>Outdated references</td><td>We update references for the Income-tax Act 2025 (192 to 392, 24Q to 138, 16 to 130).</td></tr>

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
            <h2 class="section-title">ESOP TDS and Form 24Q Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 4,999 (Exl GST and Govt. Charges) per quarter</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Section 192 computation, the quarterly return, and challan reconciliation</td></tr>
                        <tr><td>Form 16 issuance and Section 192(1C) deferral</td><td>Quoted on scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP TDS and Form 24Q consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20help%20computing%20ESOP%20perquisite%20TDS%20and%20filing%20Form%2024Q%20each%20quarter.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20share%20our%20exercise%20data." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Quarterly Form 24Q prepared and filed (clean data)</td><td>2 to 4 working days before the due date</td></tr>
                        <tr><td>TDS deposit</td><td>By the 7th of the following month</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Share exercise data as soon as the exercise happens</strong>, since the TDS must be deposited by the 7th of the following month and reported in that quarter's Form 24Q.</p>

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
            <h2 class="section-title">Why Use a Professional</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Correct slab TDS</h3>
            <p class="feature-text">Correct slab TDS on the non-cash perquisite, avoiding Section 201 interest.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3 class="feature-title">On-time every quarter</h3>
            <p class="feature-text">On-time Form 24Q every quarter, avoiding the Rs 200 per day Section 234E fee.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18"/><path d="M7 15h4"/></svg></div>
            <h3 class="feature-title">Reconciled Form 16</h3>
            <p class="feature-text">Form 16 that reconciles with Form 12BA and Form 26AS, preventing employee notices.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
            <h3 class="feature-title">Updated for Act 2025</h3>
            <p class="feature-text">Plan documents and templates updated for the Income-tax Act 2025 renumbering.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers and Payroll Teams</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years running payroll TDS and equity-compensation withholding for Indian employers.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Professional Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>In-House Payroll</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Non-cash perquisite TDS</td><td>Often under-deducted</td><td>Slab TDS with sell-to-cover planned</td></tr>
                        <tr><td>24Q timeliness</td><td>Deadline pressure, late fees</td><td>Filed before due date, every quarter</td></tr>
                        <tr><td>Form 16 accuracy</td><td>Mismatch with 26AS</td><td>Reconciled before issue by 15 June</td></tr>
                        <tr><td>Act 2025 renumbering</td><td>Old form names linger</td><td>Templates updated to 392 / 138 / 130</td></tr>
                        <tr><td>Default resolution</td><td>Reactive</td><td>CPC-TDS defaults handled end to end</td></tr>

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
                
                <p>This page covers the employer withholding. For the employee-side computation of the benefit, see our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, which cover the perquisite under Section 17(2)(vi). For routine, non-ESOP salary withholding, use our <a href="/tds-return-filing-24q">TDS return filing for Form 24Q</a>.</p>
                <p>For end-to-end salary processing, see <a href="/payroll-processing-and-management-services">payroll processing and management services</a>. New deductors can start with <a href="/tan-registration">TAN registration</a>, and employees can file through our <a href="/itr-for-salary">ITR for salary service</a>. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>Governing provision:</strong> Section 192 of the Income-tax Act 1961 requires the employer to deduct TDS on salary, including the ESOP perquisite. From 1 April 2026, Section 392 of the Income-tax Act 2025 carries the same obligation.</p>
                <p><strong>Return:</strong> Rule 31A requires Form 24Q each quarter (Form 138 from FY 2026-27), with Annexure II in Q4 driving Form 16 (Form 130).</p>
                <p><strong>Deferral:</strong> Section 192(1C) (Section 392(3) from FY 2026-27) defers TDS for employees of eligible startups certified under Section 80-IAC, now Section 140 of the 2025 Act.</p>
                <p><strong>Penalty exposure:</strong> late filing attracts Rs 200 per day under Section 234E, capped at the TDS amount; short or late deduction attracts interest of 1 percent or 1.5 percent per month under Section 201.</p>
                <p>Authoritative sources: the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department / TRACES</a>, the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Income-tax Act and Rules</a>, <a href="https://www.protean-tinpan.com" target="_blank" rel="noopener">Protean (TIN) e-TDS</a>, and <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">DPIIT / Startup India</a> (80-IAC).</p>

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
                    <p class="faq-expanded__lead">Common questions on employer ESOP TDS, Form 24Q due dates, Form 16, the Section 192(1C) deferral and the Income-tax Act 2025 renumbering.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP TDS and Form 24Q',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How does an employer deduct TDS on an ESOP perquisite?</h3>
                        <div class="faq-expanded__a"><p>The employer adds the ESOP perquisite (FMV on exercise minus exercise price, times shares) to the employee salary and deducts TDS at the average slab rate under Section 192, including surcharge and cess. Because the benefit is non-cash, the employer either recovers the tax from the employee or runs a sell-to-cover, then deposits the TDS by the 7th of the next month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the Form 24Q due dates?</h3>
                        <div class="faq-expanded__a"><p>Form 24Q is filed quarterly under Rule 31A: Q1 (Apr to Jun) by 31 July, Q2 (Jul to Sep) by 31 October, Q3 (Oct to Dec) by 31 January, and Q4 (Jan to Mar) by 31 May. From 1 April 2026 the return is Form 138, but these due dates remain unchanged. Late filing attracts Rs 200 per day under Section 234E.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESOP par TDS kaun kaatta hai?</h3>
                        <div class="faq-expanded__a"><p>ESOP perquisite par TDS employer kaatta hai, exercise ke samay, Section 192 ke tahat slab rate par. Kyunki yeh non-cash benefit hai, employer ya to employee se recover karta hai ya sell-to-cover karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is the ESOP perquisite reported in Form 24Q?</h3>
                        <div class="faq-expanded__a"><p>Yes. The ESOP perquisite is part of salary, so it is reported in Form 24Q along with regular salary TDS. The detailed annual breakup, including the perquisite, is filed in Annexure II in the Q4 return, which then drives the Form 16 issued to the employee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When is Form 16 issued for ESOP TDS?</h3>
                        <div class="faq-expanded__a"><p>Form 16 is issued by 15 June following the financial year. Part A is auto-generated on TRACES once all four Form 24Q returns are accepted, and Part B carries the salary and perquisite breakup from Annexure II. From FY 2026-27, Form 16 is replaced by Form 130 under the Income-tax Act 2025.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a startup defer ESOP TDS?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 192(1C), an employer that is an eligible startup with DPIIT recognition and an IMB certificate under Section 80-IAC can defer TDS to the earliest of 48 months from the end of the relevant assessment year, the date of sale, or cessation of employment. The slab rate of the allotment year applies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">ESOP TDS jama nahi kiya to kya hota hai?</h3>
                        <div class="faq-expanded__a"><p>Agar TDS samay par jama nahi kiya, to Section 201 ke tahat 1 percent ya 1.5 percent prati maah interest lagta hai, aur Form 24Q late filing par Section 234E ke tahat Rs 200 prati din ka fee lagta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do the new Income-tax Act 2025 form numbers change the process?</h3>
                        <div class="faq-expanded__a"><p>No. The process is unchanged. Only the references change: Section 192 becomes Section 392, Form 24Q becomes Form 138, and Form 16 becomes Form 130 for exercises from 1 April 2026. Due dates and computation stay the same. ESOP plan documents citing the old numbers should be updated.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Who deducts?</strong> The employer, under Section 192.</li>
                    <li><strong>Which return?</strong> Form 24Q (Form 138 from FY 2026-27).</li>
                    <li><strong>Due dates?</strong> 31 Jul, 31 Oct, 31 Jan, 31 May.</li>
                    <li><strong>Deposit by?</strong> 7th of the following month.</li>
                    <li><strong>Certificate?</strong> Form 16 by 15 June (Form 130 from FY 2026-27).</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Timing Matters</h2>
            <div class="content-text">
                
                <p>TDS on an ESOP exercise must be deposited by the 7th of the next month and reported in that quarter's Form 24Q. A missed deposit triggers Section 201 interest, and a late return triggers a Rs 200 per day fee under Section 234E. File early, before the quarter closes.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your ESOP TDS Filed</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP TDS under Section 192 and Form 24Q is a recurring, per-exercise obligation that exposes employers to interest and late fees when the non-cash perquisite is mishandled.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of payroll-TDS experience, computes the withholding, files Form 24Q on time, and issues a reconciled Form 16, keeping both employer and employee compliant.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20help%20computing%20ESOP%20perquisite%20TDS%20and%20filing%20Form%2024Q%20each%20quarter.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20share%20our%20exercise%20data." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP TDS and Form 24Q%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP TDS and Form 24Q%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESOP TDS and Form 24Q Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote Section 192 computation, quarterly Form 24Q filing and Form 16 issuance for employers.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We run ESOP TDS and Form 24Q compliance for employers nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The computation, quarterly filing and Form 16 issuance is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for payroll and ESOP TDS</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing 24Q</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tan-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 2 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 2 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every three months for Income-tax Act 2025 form and section notifications, the Form 24Q to 138 transition guidance, due-date or TDS-rate changes, 80-IAC (Section 140) amendments, and Budget updates (Tier 1 freshness).</p>
        </div>
    </div>
</section>


</main>






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
// BF-1: Last Updated mirrors schema dateModified (frozen, NOT live new Date())
(function() {
    var dateStr = "2 June 2026";
    var el1 = document.getElementById('lastUpdated');
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el1) el1.textContent = dateStr;
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
