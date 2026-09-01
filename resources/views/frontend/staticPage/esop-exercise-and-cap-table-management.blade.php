@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Exercise and Cap Table Management 2026: PAS-3 | Patron Accounting</title>
    <meta name="description" content="End-to-end ESOP exercise: eligibility checks, FMV report, share allotment and PAS-3 filing within 30 days, plus cap table updates. Expert help from Rs 14,999.">
    <link rel="canonical" href="/esop-exercise-and-cap-table-management">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Exercise and Cap Table Management 2026: PAS-3 | Patron Accounting">
    <meta property="og:description" content="End-to-end ESOP exercise: eligibility checks, FMV report, share allotment and PAS-3 filing within 30 days, plus cap table updates. Expert help from Rs 14,999.">
    <meta property="og:url" content="/esop-exercise-and-cap-table-management">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Exercise and Cap Table Management 2026: PAS-3 | Patron Accounting">
    <meta name="twitter:description" content="End-to-end ESOP exercise: eligibility checks, FMV report, share allotment and PAS-3 filing within 30 days, plus cap table updates. Expert help from Rs 14,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management/#service",
        "name": "ESOP Exercise and Cap Table Management in India",
        "description": "Patron Accounting runs ESOP exercise events end to end: verifying eligibility, collecting the exercise price, obtaining the Category I Merchant Banker FMV report, processing the board allotment, filing Form PAS-3 within 30 days, arranging demat credit, and updating the SH-6 register and cap table across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Capitalization table", "sameAs": "https://en.wikipedia.org/wiki/Capitalization_table" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP Exercise and Cap Table Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "ESOP Exercise Event and Cap Table Management" },
                    "price": "14999",
                    "priceCurrency": "INR",
                    "description": "Eligibility checks, allotment, PAS-3 filing and cap-table updates across exercise windows in the year. Starting price per year, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP Exercise and Cap Table", "item": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What happens when an employee exercises ESOPs?",
                "acceptedAnswer": { "@type": "Answer", "text": "On exercise, the employee pays the exercise price to convert vested options into shares. The company verifies eligibility, fixes the FMV, passes a board allotment resolution, files Form PAS-3 within 30 days, credits the shares to the employee demat account, and updates the SH-6 register and cap table. The difference between FMV and exercise price is also taxed as a perquisite." }
            },
            {
                "@type": "Question",
                "name": "When must PAS-3 be filed after an ESOP exercise?",
                "acceptedAnswer": { "@type": "Answer", "text": "Form PAS-3, the Return of Allotment, must be filed with the Registrar of Companies within 30 days of allotment. The 30-day clock runs from the date the board passes the allotment resolution, not from the date the employee submits the exercise form. Conflating these dates is the most common reason companies miss the window and face Section 454 adjudication." }
            },
            {
                "@type": "Question",
                "name": "ESOP exercise ke baad kya filing karni padti hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Exercise ke baad board allotment resolution paas hota hai, phir 30 din ke andar Form PAS-3 ROC ke paas file karna hota hai. Shares demat mein credit hote hain aur SH-6 register aur cap table update karte hain. FMV report 180 din ke andar ka hona chahiye." }
            },
            {
                "@type": "Question",
                "name": "How long is the FMV report valid for an exercise?",
                "acceptedAnswer": { "@type": "Answer", "text": "For unlisted shares, the Category I Merchant Banker FMV report must not be older than 180 days before the exercise date, under Rule 3(8)(iii) of the Income Tax Rules. If the report lapses mid-window, a fresh valuation is needed. For listed shares, the FMV is the average of the opening and closing price on the exercise date." }
            },
            {
                "@type": "Question",
                "name": "Why does the cap table need updating after each exercise?",
                "acceptedAnswer": { "@type": "Answer", "text": "Each exercise issues new shares, changing the shareholding and dilution. An outdated cap table no longer matches the SH-6 register or the PAS-3 filings, which surfaces as a discrepancy during audit or due diligence. Updating the cap table immediately after allotment keeps the record accurate and the company funding-ready." }
            },
            {
                "@type": "Question",
                "name": "What is the difference between exercise management and scheme design?",
                "acceptedAnswer": { "@type": "Answer", "text": "Scheme design is the one-time work of drafting the ESOP plan, setting the pool and passing the special resolution. Exercise management is the recurring operational work each time employees exercise: eligibility checks, FMV, allotment, PAS-3 and cap-table updates. This service covers the recurring execution, not the initial scheme design." }
            },
            {
                "@type": "Question",
                "name": "Cap table update kab karna chahiye?",
                "acceptedAnswer": { "@type": "Answer", "text": "Har allotment ke turant baad cap table update karna chahiye, taaki SH-6 register aur PAS-3 filing se match ho. Due diligence ya audit ke time mismatch na ho, isliye hum har exercise event ke baad reconcile karte hain." }
            },
            {
                "@type": "Question",
                "name": "Can shares be allotted before filing PAS-3?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. The board first passes the allotment resolution to allot the shares, and PAS-3 is then filed within 30 days of that allotment. Allotment is the event; PAS-3 is the return reporting it. Shares can credit to demat accounts after allotment, but the PAS-3 filing must still be completed within the 30-day window to stay compliant." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management",
        "name": "ESOP Exercise and Cap Table Management in India",
        "description": "End-to-end ESOP exercise: eligibility checks, FMV report, share allotment and PAS-3 filing within 30 days, plus cap table updates. Expert help from Rs 14,999.",
        "url": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-exercise-and-cap-table-management/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How an ESOP exercise event is processed in India",
        "description": "Step-by-step process to verify eligibility, collect the exercise price, fix the FMV, pass the board allotment, file PAS-3 within 30 days and credit demat, then update the SH-6 register and cap table.",
        "totalTime": "P7D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Verify eligibility",
                "text": "Confirm vested quantity, exercise window and grantee eligibility against the scheme."
            },
            {
                "@type": "HowToStep",
                "name": "Collect the exercise price",
                "text": "Receive the price through banking channels and record the consideration."
            },
            {
                "@type": "HowToStep",
                "name": "Fix the FMV",
                "text": "Obtain the merchant-banker FMV report within 180 days, or use the exchange price for listed shares."
            },
            {
                "@type": "HowToStep",
                "name": "Allot the shares",
                "text": "Pass the board allotment resolution; this date starts the 30-day PAS-3 clock."
            },
            {
                "@type": "HowToStep",
                "name": "File PAS-3 and credit demat",
                "text": "File the Return of Allotment within 30 days and instruct the depository for demat credit."
            },
            {
                "@type": "HowToStep",
                "name": "Update register and cap table",
                "text": "Record the exercise in SH-6 and refresh the cap table to reflect the new shares."
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
        "name": "ESOP Exercise and Cap Table Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Exercise",
                "description": "The employee paying the exercise price to convert vested options into shares."
            },
            {
                "@type": "DefinedTerm",
                "name": "Allotment",
                "description": "The board resolution issuing the shares, which starts the 30-day PAS-3 clock."
            },
            {
                "@type": "DefinedTerm",
                "name": "FMV report",
                "description": "The merchant-banker valuation fixing the share value, valid 180 days before exercise."
            },
            {
                "@type": "DefinedTerm",
                "name": "Cap table",
                "description": "The live record of who owns how many shares and options after each event."
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
                        ESOP Exercise and Cap Table Management
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Covers:</span> eligibility, exercise-price collection, FMV report, allotment, PAS-3, cap table.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> exercise-event and cap-table management from Rs 14,999 per year (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key deadline:</span> PAS-3 within 30 days of allotment.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FMV rule:</span> merchant-banker report valid for 180 days before exercise.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on share allotments and ROC filings</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Exercise and Cap Table%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP Exercise and Cap Table%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20we%20have%20an%20ESOP%20exercise%20window%20coming%20up%20and%20need%20help%20with%20eligibility%2C%20allotment%2C%20PAS-3%20and%20cap%20table%20updates.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ESOP Exercise and Cap Table',
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
    'ctaText'    => 'Startups and growth companies across India trust Patron Accounting to run their ESOP exercise events and keep the cap table reconciled.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What It Is</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Needs It</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Exercise Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Deadlines</button>
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
                    <p><strong>&#128204; TL;DR - ESOP Exercise and Cap Table Services at a Glance</strong></p>
                    <p>When employees exercise vested options, we verify eligibility, collect the price, obtain the FMV, allot shares, file PAS-3 within 30 days, and update the register and cap table. End to end.</p>
                </div>
                <p>Run every ESOP exercise window cleanly, from eligibility to cap table. Patron Accounting verifies eligibility, collects the exercise price, obtains the FMV report, processes the allotment, files PAS-3 in time, and updates your register and cap table so each exercise is fully compliant.</p>
                <p>The exercise event is where an option becomes a share, and where compliance most often slips. Eligibility must be checked, the price collected, the FMV pinned down, the allotment passed, PAS-3 filed within 30 days, and the cap table corrected. Miss any step and the share issue is exposed in the next audit or funding round. Patron Accounting runs the full sequence as a managed service.</p>
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
                <h2 class="section-title">What Is ESOP Exercise and Cap Table Management</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP exercise management is the operational handling of an exercise window: turning vested options into allotted shares with all filings done. Cap table management keeps the resulting shareholding record accurate.</p>
                    <p>It spans eligibility verification, exercise-price collection through banking channels, the FMV report, the board allotment resolution, demat credit, PAS-3 filing, and the update of the SH-6 register and cap table.</p>
                    <p>It is distinct from designing the scheme: this is the execution that happens each time employees exercise.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Exercise and Cap Table:</strong></p>
                    <ul>
                        <li><strong>Exercise:</strong> the employee paying the exercise price to convert vested options into shares.</li>
                        <li><strong>Allotment:</strong> the board resolution issuing the shares, which starts the 30-day PAS-3 clock.</li>
                        <li><strong>FMV report:</strong> the merchant-banker valuation fixing the share value, valid 180 days before exercise.</li>
                        <li><strong>Cap table:</strong> the live record of who owns how many shares and options after each event.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Exercise and Cap Table</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Filed under</span>
                        <strong>Form PAS-3 (30 Days)</strong>
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
            <h2 class="section-title">Who Needs This Service</h2>
            <div class="content-text">
                
                <p>Any company running an exercise window needs the sequence handled correctly and on time.</p>
                <ul>
                    <li>Startups opening periodic or liquidity-event exercise windows.</li>
                    <li>Companies allotting shares as employees exercise vested options.</li>
                    <li>HR and CS teams managing high grant volumes across many employees.</li>
                    <li>Companies preparing a clean cap table ahead of a funding round.</li>
                </ul>
                <p><strong>Statutory anchor:</strong> shares allotted on exercise of options under Section 62(1)(b) require a Return of Allotment in Form PAS-3 within 30 days of allotment, and the FMV for unlisted shares must rest on a merchant-banker report not older than 180 days under Rule 3(8)(iii).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Exercise and Cap Table Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Verification</td><td>We confirm vesting, exercise window and grantee eligibility against the scheme and grant letters.</td></tr>
                        <tr><td>Exercise-Price Collection</td><td>We coordinate collection of the exercise price through proper banking channels and evidence it.</td></tr>
                        <tr><td>FMV Report Coordination</td><td>We obtain the Category I Merchant Banker FMV report, valid within the 180-day window.</td></tr>
                        <tr><td>Allotment and PAS-3</td><td>We prepare the board allotment resolution and file Form PAS-3 within 30 days of allotment.</td></tr>
                        <tr><td>Demat Credit</td><td>We instruct the depository so shares credit to employee demat accounts after allotment.</td></tr>
                        <tr><td>Register and Cap Table Update</td><td>We update the SH-6 register and cap table so the shareholding record stays accurate.</td></tr>

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
            <h2 class="section-title">How an Exercise Event Works in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From verifying eligibility to refreshing the cap table, we run the full exercise sequence so every window closes compliant and on time.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Verify eligibility</h3>
        <p class="step-description">We confirm vested quantity, exercise window and grantee eligibility against the scheme.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vested quantity</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Window check</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="44" cy="32" r="3" fill="#25D366"/><line x1="54" y1="32" x2="80" y2="32" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="44" cy="48" r="3" fill="#25D366"/><line x1="54" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="44" cy="64" r="3" fill="#F5A623"/><line x1="54" y1="64" x2="72" y2="64" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
            <span class="illustration-label">Eligibility Verified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Collect the exercise price</h3>
        <p class="step-description">We receive the price through banking channels and record the consideration.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Banking channel</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Evidenced</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="24" y="30" width="72" height="44" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="52" r="12" fill="none" stroke="#E8712C" stroke-width="2"/><text x="60" y="57" font-size="13" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rs</text></svg></div>
            <span class="illustration-label">Price Collected</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Fix the FMV</h3>
        <p class="step-description">We obtain the merchant-banker FMV report within 180 days, or use the exchange price for listed shares.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>180-day validity</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cat I banker</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="12" width="60" height="76" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M40 60 l10 -12 8 8 14 -18" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/><circle cx="78" cy="38" r="3" fill="#F5A623"/></svg></div>
            <span class="illustration-label">FMV Fixed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Allot the shares</h3>
        <p class="step-description">We pass the board allotment resolution; this date starts the 30-day PAS-3 clock.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board resolution</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Clock starts</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="50" cy="44" r="7" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="70" cy="44" r="7" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="60" cy="62" r="7" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/></svg></div>
            <span class="illustration-label">Shares Allotted</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File PAS-3 and credit demat</h3>
        <p class="step-description">We file the Return of Allotment within 30 days and instruct the depository for demat credit.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Within 30 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Demat credit</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="12" width="60" height="76" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="30" x2="78" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><text x="60" y="60" font-size="14" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAS-3</text><circle cx="78" cy="76" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M74 76l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">PAS-3 Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Update register and cap table</h3>
        <p class="step-description">We record the exercise in SH-6 and refresh the cap table to reflect the new shares.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-6 register</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cap table</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="24" y="20" width="72" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="24" y1="36" x2="96" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><line x1="48" y1="36" x2="48" y2="80" stroke="#14365F" stroke-width="1.5" opacity="0.4"/><rect x="30" y="42" width="12" height="6" rx="1" fill="#E8712C"/><rect x="54" y="42" width="12" height="6" rx="1" fill="#F5A623"/></svg></div>
            <span class="illustration-label">Records Updated</span>
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
                    <li>ESOP scheme and grant letters to verify eligibility and vesting.</li>
                    <li>Employee exercise notices and exercise-price remittance proof.</li>
                    <li>Category I Merchant Banker FMV report within the 180-day window.</li>
                    <li>Board resolution for allotment and the allotment list.</li>
                    <li>Demat account details for share credit.</li>
                    <li>Existing SH-6 register and cap table for reconciliation.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>The deadline that trips companies</strong></p>
                    <p>The 30-day PAS-3 clock runs from the board allotment date, not the exercise-form date. Conflating the two is the most common reason companies miss the window and face Section 454 adjudication.</p>
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
                        <tr><td>PAS-3 missed because the 30-day clock was misread</td><td>Section 454 adjudication and late fees</td><td>We track the clock from the board allotment date and file well within 30 days.</td></tr>
                        <tr><td>FMV report older than 180 days at exercise</td><td>Invalid valuation, tax exposure</td><td>We schedule a fresh merchant-banker valuation inside the 180-day window.</td></tr>
                        <tr><td>Cap table out of sync after allotment</td><td>Discrepancy in audit or due diligence</td><td>We reconcile the cap table and SH-6 register immediately after each event.</td></tr>
                        <tr><td>Valuation mismatch between MCA and tax filings</td><td>Scrutiny risk</td><td>We align the registered-valuer and merchant-banker figures to avoid scrutiny.</td></tr>

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
            <h2 class="section-title">Exercise and Cap Table Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 14,999 per year (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the annual fee</td><td>Eligibility checks, allotment, PAS-3 filing and cap-table updates across exercise windows in the year</td></tr>
                        <tr><td>Merchant-banker valuation fees</td><td>Billed at actuals</td></tr>
                        <tr><td>ROC charges</td><td>Billed at actuals</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Exercise and Cap Table consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20run%20our%20ESOP%20exercise%20events%20end%20to%20end%2C%20including%20PAS-3%20filing%20and%20cap%20table%20management.%20Please%20share%20how%20it%20works%20and%20your%20fees." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Exercise event with documents in order, through allotment</td><td>5 to 7 working days</td></tr>
                        <tr><td>PAS-3 filing</td><td>Within the 30-day statutory window</td></tr>
                        <tr><td>Demat credit</td><td>Around T+2 after allotment</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>We schedule the FMV report ahead so the 180-day validity never lapses mid-window.</strong> Lining up the valuation and allotment sequence in advance keeps every filing on time and the cap table accurate.</p>

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
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3 class="feature-title">PAS-3 on time</h3>
            <p class="feature-text">PAS-3 filed on time, so no Section 454 adjudication or late fees.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Fresh FMV</h3>
            <p class="feature-text">FMV always fresh, kept inside the 180-day validity window.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
            <h3 class="feature-title">Reconciled records</h3>
            <p class="feature-text">Cap table and SH-6 register reconciled after every event.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
            <h3 class="feature-title">Aligned valuations</h3>
            <p class="feature-text">MCA and income-tax valuations aligned, avoiding due-diligence red flags.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Startups and Growth Companies</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years processing share allotments, ROC filings and cap-table updates for Indian companies.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Exercise-Event Deadlines at a Glance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Step</th><th>Trigger / Basis</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>FMV report</td><td>Before exercise</td><td>Valid within 180 days</td></tr>
                        <tr><td>Board allotment</td><td>After price collected</td><td>Per exercise window</td></tr>
                        <tr><td>PAS-3 filing</td><td>From allotment date</td><td>Within 30 days</td></tr>
                        <tr><td>Demat credit</td><td>After allotment</td><td>Around T+2</td></tr>
                        <tr><td>Register / cap table</td><td>After allotment</td><td>Immediately</td></tr>

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
                
                <p>Exercise execution pairs with the statutory register and filings. See our <a href="/esop-corporate-filings">ESOP corporate filings</a> for the SH-6 register and ROC forms, and <a href="/issue-of-shares">issue of shares</a> for allotment mechanics. For scheme design, see <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>.</p>
                <p>Each exercise also triggers tax: see our <a href="/itr-for-esop-employees">ITR for ESOP employees</a> for the perquisite and capital-gains position. For the wider calendar, see <a href="/private-limited-company-compliance">private limited company compliance</a>, and the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>Allotment filing:</strong> shares allotted on exercise of options under Section 62(1)(b) of the Companies Act require a Return of Allotment in Form PAS-3 filed with the ROC within 30 days of allotment.</p>
                <p><strong>Valuation:</strong> for unlisted shares, the FMV must rest on a Category I Merchant Banker report not older than 180 days before exercise under Rule 3(8)(iii) of the Income Tax Rules; the Companies Act allotment uses a registered valuer, so companies usually align both.</p>
                <p><strong>Register:</strong> each exercise is recorded in the Form SH-6 Register of Employee Stock Options, and the cap table is updated to reflect the new shares.</p>
                <p><strong>Non-compliance:</strong> failure to file PAS-3 attracts ROC late fees and adjudication under Section 454, and can call the validity of the share issue into question during audit or due diligence.</p>
                <p>Authoritative sources: the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (PAS-3, allotment), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>, the <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (Rule 3(8) FMV), and <a href="https://www.icsi.edu" target="_blank" rel="noopener">ICSI</a> (secretarial standards).</p>

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
                    <p class="faq-expanded__lead">Common questions on the ESOP exercise process, PAS-3 timelines, FMV validity and cap-table updates.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP Exercise and Cap Table',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What happens when an employee exercises ESOPs?</h3>
                        <div class="faq-expanded__a"><p>On exercise, the employee pays the exercise price to convert vested options into shares. The company verifies eligibility, fixes the FMV, passes a board allotment resolution, files Form PAS-3 within 30 days, credits the shares to the employee demat account, and updates the SH-6 register and cap table. The difference between FMV and exercise price is also taxed as a perquisite.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">When must PAS-3 be filed after an ESOP exercise?</h3>
                        <div class="faq-expanded__a"><p>Form PAS-3, the Return of Allotment, must be filed with the Registrar of Companies within 30 days of allotment. The 30-day clock runs from the date the board passes the allotment resolution, not from the date the employee submits the exercise form. Conflating these dates is the most common reason companies miss the window and face Section 454 adjudication.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESOP exercise ke baad kya filing karni padti hai?</h3>
                        <div class="faq-expanded__a"><p>Exercise ke baad board allotment resolution paas hota hai, phir 30 din ke andar Form PAS-3 ROC ke paas file karna hota hai. Shares demat mein credit hote hain aur SH-6 register aur cap table update karte hain. FMV report 180 din ke andar ka hona chahiye.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long is the FMV report valid for an exercise?</h3>
                        <div class="faq-expanded__a"><p>For unlisted shares, the Category I Merchant Banker FMV report must not be older than 180 days before the exercise date, under Rule 3(8)(iii) of the Income Tax Rules. If the report lapses mid-window, a fresh valuation is needed. For listed shares, the FMV is the average of the opening and closing price on the exercise date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Why does the cap table need updating after each exercise?</h3>
                        <div class="faq-expanded__a"><p>Each exercise issues new shares, changing the shareholding and dilution. An outdated cap table no longer matches the SH-6 register or the PAS-3 filings, which surfaces as a discrepancy during audit or due diligence. Updating the cap table immediately after allotment keeps the record accurate and the company funding-ready.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between exercise management and scheme design?</h3>
                        <div class="faq-expanded__a"><p>Scheme design is the one-time work of drafting the ESOP plan, setting the pool and passing the special resolution. Exercise management is the recurring operational work each time employees exercise: eligibility checks, FMV, allotment, PAS-3 and cap-table updates. This service covers the recurring execution, not the initial scheme design.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Cap table update kab karna chahiye?</h3>
                        <div class="faq-expanded__a"><p>Har allotment ke turant baad cap table update karna chahiye, taaki SH-6 register aur PAS-3 filing se match ho. Due diligence ya audit ke time mismatch na ho, isliye hum har exercise event ke baad reconcile karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can shares be allotted before filing PAS-3?</h3>
                        <div class="faq-expanded__a"><p>Yes. The board first passes the allotment resolution to allot the shares, and PAS-3 is then filed within 30 days of that allotment. Allotment is the event; PAS-3 is the return reporting it. Shares can credit to demat accounts after allotment, but the PAS-3 filing must still be completed within the 30-day window to stay compliant.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Key filing?</strong> Form PAS-3, Return of Allotment.</li>
                    <li><strong>PAS-3 deadline?</strong> 30 days from the allotment date.</li>
                    <li><strong>FMV validity?</strong> 180 days before exercise (unlisted).</li>
                    <li><strong>Demat credit?</strong> Around T+2 after allotment.</li>
                    <li><strong>Records updated?</strong> SH-6 register and cap table.</li>
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
                
                <p>The PAS-3 window is just 30 days from allotment, and the FMV report expires at 180 days. An exercise window can open at short notice around a liquidity event. Line up the FMV and the allotment sequence in advance, so filings land on time and the cap table never drifts.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Run Your Exercise Windows Cleanly</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">An ESOP exercise looks simple but carries a tight chain of deadlines: FMV validity, allotment, PAS-3 within 30 days, and an accurate cap table.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of allotment and ROC-filing experience, runs the full exercise sequence and keeps your register and cap table reconciled, so every exercise window closes clean.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20run%20our%20ESOP%20exercise%20events%20end%20to%20end%2C%20including%20PAS-3%20filing%20and%20cap%20table%20management.%20Please%20share%20how%20it%20works%20and%20your%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Exercise and Cap Table%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP Exercise and Cap Table%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESOP Exercise Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote handling of exercise events, PAS-3 filing and cap-table management.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We serve startups and growth companies nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The eligibility checks, allotment, PAS-3 filing and cap-table updates are handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for ESOP exercise events</div>
                <div class="pa-cross-grid"><a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-corporate-filings" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Corporate Filings</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-esop-employees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for ESOP Employees</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-valuation-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Valuation Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 2 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 2 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every six months for changes to the PAS-3 form or timelines, Rule 3(8) FMV validity, registered-valuer or merchant-banker rules, demat or PAS-6 procedure, and MCA e-form revisions (Tier 2 freshness).</p>
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
