@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Capital Gains Tax 2026: Section 112A on Sale | Patron Accounting</title>
    <meta name="description" content="Selling ESOP shares triggers capital gains: 12.5% LTCG above Rs 1.25 lakh, 20% STCG on listed shares. Cost base is FMV at exercise. Advisory from Rs 4,999.">
    <link rel="canonical" href="/esop-capital-gains-tax-on-sale">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Capital Gains Tax 2026: Section 112A on Sale | Patron Accounting">
    <meta property="og:description" content="Selling ESOP shares triggers capital gains: 12.5% LTCG above Rs 1.25 lakh, 20% STCG on listed shares. Cost base is FMV at exercise. Advisory from Rs 4,999.">
    <meta property="og:url" content="/esop-capital-gains-tax-on-sale">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Capital Gains Tax 2026: Section 112A on Sale | Patron Accounting">
    <meta name="twitter:description" content="Selling ESOP shares triggers capital gains: 12.5% LTCG above Rs 1.25 lakh, 20% STCG on listed shares. Cost base is FMV at exercise. Advisory from Rs 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale/#service",
        "name": "ESOP Capital Gains Tax Computation on Sale in India",
        "description": "Patron Accounting computes capital gains on the sale of ESOP shares under Section 111A and 112A of the Income-tax Act, using fair market value on exercise as the cost base, classifies long-term and short-term gains by holding period, applies the correct listed or unlisted rate, and files the return across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Capital gains tax", "sameAs": "https://en.wikipedia.org/wiki/Capital_gains_tax" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP Capital Gains Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "ESOP Capital Gains Computation and Advisory" },
                    "price": "4999",
                    "priceCurrency": "INR",
                    "description": "Gain computation, cost-base verification and rate classification. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP Capital Gains", "item": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How are ESOP shares taxed when sold?",
                "acceptedAnswer": { "@type": "Answer", "text": "When you sell ESOP shares, capital gains tax applies on the sale price minus the fair market value on the exercise date. For listed shares held over 12 months, the rate is 12.5% on gains above Rs 1.25 lakh under Section 112A. If held 12 months or less, the rate is 20% under Section 111A. The perquisite taxed at exercise is not taxed again." }
            },
            {
                "@type": "Question",
                "name": "What is the cost of acquisition for ESOP shares?",
                "acceptedAnswer": { "@type": "Answer", "text": "The cost of acquisition is the fair market value on the exercise date, the same value on which perquisite tax was already paid as salary. Using this cost base ensures the exercise gain is not taxed twice. Only the further gain, from FMV-on-exercise to sale price, is taxed as capital gains when you sell the shares." }
            },
            {
                "@type": "Question",
                "name": "ESOP bechne par kitna tax lagta hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "ESOP shares bechne par capital gains tax lagta hai, sale price minus exercise ki FMV par. Listed shares 12 mahine se zyada rakhe to 12.5% LTCG Rs 1.25 lakh se upar, warna 20% STCG. Hum gain compute karke return file karte hain." }
            },
            {
                "@type": "Question",
                "name": "What is the holding period for ESOP shares?",
                "acceptedAnswer": { "@type": "Answer", "text": "The holding period runs from the date of allotment to the date of sale. Listed shares become long-term after 12 months and unlisted shares after 24 months. Long-term listed gains are taxed at 12.5% above Rs 1.25 lakh, while unlisted long-term gains are taxed at 12.5% without indexation." }
            },
            {
                "@type": "Question",
                "name": "Are ESOPs taxed twice in India?",
                "acceptedAnswer": { "@type": "Answer", "text": "ESOPs are taxed at two stages, but not on the same value. At exercise, the gap between FMV and exercise price is taxed as a salary perquisite. At sale, only the further gain from FMV-on-exercise to sale price is taxed as capital gains. Using FMV-on-exercise as the cost base prevents genuine double taxation." }
            },
            {
                "@type": "Question",
                "name": "How are foreign company ESOP shares taxed on sale?",
                "acceptedAnswer": { "@type": "Answer", "text": "For Indian residents, gains on selling foreign-parent ESOP or RSU shares are taxable in India as capital gains. The cost base is FMV-on-exercise, and relief under a Double Taxation Avoidance Agreement may apply where the foreign country also taxes the gain. Foreign shares must be disclosed in Schedule FA, with Form 67 for foreign tax credit." }
            },
            {
                "@type": "Question",
                "name": "ESOP sale par advance tax dena padta hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Haan, agar capital gain bada hai to advance tax dena padta hai, warna Section 234B aur 234C ke tahat interest lagta hai. Hum gain par advance tax schedule karke interest se bachate hain." }
            },
            {
                "@type": "Question",
                "name": "How do I report an ESOP share sale in my ITR?",
                "acceptedAnswer": { "@type": "Answer", "text": "Report the gain in Schedule 112A of the ITR for listed long-term gains, and split sale transactions executed before and after 23 July 2024 because the rate changed on that date. Short-term listed gains go under Section 111A. Use ITR-2 or ITR-3 depending on your other income, and reconcile with your AIS and broker statement." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale",
        "name": "ESOP Capital Gains Tax Computation on Sale in India",
        "description": "Selling ESOP shares triggers capital gains: 12.5% LTCG above Rs 1.25 lakh, 20% STCG on listed shares. Cost base is FMV at exercise. Advisory from Rs 4,999.",
        "url": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-capital-gains-tax-on-sale/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to compute capital gains tax on the sale of ESOP shares in India",
        "description": "Step-by-step process to identify the sale, set the FMV-on-exercise cost base, measure the holding period from allotment, compute the gain, apply the Section 111A or 112A rate, and report it in the ITR.",
        "totalTime": "P4D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Identify the sale",
                "text": "Record the sale date, sale price and whether the shares are listed or unlisted."
            },
            {
                "@type": "HowToStep",
                "name": "Set the cost base",
                "text": "Use the fair market value on the exercise date, the value on which perquisite tax was already paid."
            },
            {
                "@type": "HowToStep",
                "name": "Measure the holding period",
                "text": "Count from the date of allotment: over 12 months listed, over 24 months unlisted, is long-term."
            },
            {
                "@type": "HowToStep",
                "name": "Compute the gain",
                "text": "Sale price minus cost base, classified as long-term or short-term capital gain."
            },
            {
                "@type": "HowToStep",
                "name": "Apply the rate",
                "text": "Listed: 12.5% LTCG above Rs 1.25 lakh, or 20% STCG. Unlisted: 12.5% LTCG or slab STCG."
            },
            {
                "@type": "HowToStep",
                "name": "Report and pay",
                "text": "Disclose in Schedule 112A, pay advance tax, and file the return splitting pre and post 23 July 2024 sales."
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
        "name": "ESOP Capital Gains Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Cost of acquisition",
                "description": "For ESOP shares, the fair market value on the exercise date, already taxed as a perquisite, used to avoid double taxation."
            },
            {
                "@type": "DefinedTerm",
                "name": "Holding period",
                "description": "Time from allotment to sale; 12 months for listed shares, 24 months for unlisted shares."
            },
            {
                "@type": "DefinedTerm",
                "name": "Section 112A",
                "description": "Provision taxing long-term capital gains on STT-paid listed shares at 12.5% above Rs 1.25 lakh."
            },
            {
                "@type": "DefinedTerm",
                "name": "Section 111A",
                "description": "Provision taxing short-term capital gains on STT-paid listed shares at 20% from 23 July 2024."
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
                        ESOP Capital Gains Tax on Sale
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> exercise FMV, sale contract note, holding dates, broker statement.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> capital gains computation and advisory from Rs 4,999 (Exl GST and Govt. Charges).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rates:</span> LTCG 12.5% above Rs 1.25 lakh; STCG 20% on listed shares.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Holding:</span> 12 months listed, 24 months unlisted, from allotment.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on equity and ESOP-share capital gains</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Capital Gains%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20Capital%20Gains%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Capital%20Gains%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP Capital Gains',
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
    'ctaText'    => 'Employees and companies across India trust Patron Accounting to compute ESOP share-sale capital gains correctly and file the return on time.',
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
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who It Applies To</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Computation</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Listed vs Unlisted</button>
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
                    <p><strong>&#128204; TL;DR - ESOP Capital Gains Services at a Glance</strong></p>
                    <p>When you sell ESOP shares, capital gains tax applies on sale price minus FMV at exercise. Listed shares: 12.5% LTCG above Rs 1.25 lakh, 20% STCG. We compute and file it.</p>
                </div>
                <p>Sold your ESOP shares? Get the capital gains right, not double-taxed. Patron Accounting computes the gain using FMV-on-exercise as your cost base, applies the correct Section 111A or 112A rate, and files the return so you pay tax only on the real post-exercise gain.</p>
                <p>ESOP capital gains tax is the second and final stage of ESOP taxation, charged when you sell the shares. The perquisite was already taxed at exercise, so the law lets you use the FMV-on-exercise as your cost base. Get this wrong and you pay tax twice on the same value. Patron Accounting has computed equity and ESOP-share capital gains for over 15 years.</p>
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
                <h2 class="section-title">What Is ESOP Capital Gains Tax</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP capital gains tax is the tax on the profit from selling shares acquired through ESOPs, charged under Section 111A or 112A of the Income-tax Act. The gain is the sale price minus the fair market value on the exercise date.</p>
                    <p>This is distinct from the perquisite tax at exercise. At exercise, the gap between FMV and exercise price was taxed as salary. At sale, only the further gain from FMV-on-exercise to sale price is taxed as capital gains.</p>
                    <p>The holding period is measured from the date of allotment, and decides whether the gain is short-term or long-term.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Capital Gains:</strong></p>
                    <ul>
                        <li><strong>Cost of acquisition:</strong> the FMV on the exercise date, already taxed as a perquisite, used to avoid double taxation.</li>
                        <li><strong>Holding period:</strong> time from allotment to sale; 12 months for listed, 24 months for unlisted shares.</li>
                        <li><strong>LTCG / STCG:</strong> long-term gain (beyond the holding period) or short-term gain (within it), taxed at different rates.</li>
                        <li><strong>STT:</strong> Securities Transaction Tax, required for the concessional Section 111A and 112A rates on listed shares.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Capital Gains</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Taxed under</span>
                        <strong>Section 111A / 112A</strong>
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
                
                <p>Anyone who sells shares acquired through ESOPs has a capital gains event, whether the shares are listed, unlisted or foreign.</p>
                <ul>
                    <li>Employees selling listed shares after an IPO or on the exchange.</li>
                    <li>Employees selling unlisted shares in a buyback or secondary sale.</li>
                    <li>Indian residents selling foreign-parent ESOP or RSU shares, also taxable in India.</li>
                    <li>Companies advising employees on the tax impact of a liquidity event.</li>
                </ul>
                <p><strong>Statutory anchor:</strong> gains on listed equity shares held over 12 months are taxed under Section 112A at 12.5% above Rs 1.25 lakh, and within 12 months under Section 111A at 20%, in each case where STT is paid.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our ESOP Capital Gains Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Gain Computation</td><td>We compute the gain as sale price minus FMV-on-exercise, classified as short-term or long-term by holding period.</td></tr>
                        <tr><td>Cost-Base Verification</td><td>We confirm the FMV-on-exercise cost base against the perquisite already taxed, so you are not taxed twice.</td></tr>
                        <tr><td>Listed and Unlisted Treatment</td><td>We apply Section 111A or 112A for listed shares and the slab or 12.5% rule for unlisted shares.</td></tr>
                        <tr><td>Foreign ESOP and DTAA Relief</td><td>We compute gains on foreign-parent shares and apply treaty relief and Schedule FA disclosure.</td></tr>
                        <tr><td>Advance Tax Planning</td><td>We schedule advance tax on the gain so you avoid Section 234B and 234C interest.</td></tr>
                        <tr><td>ITR Filing</td><td>We report the gain in Schedule 112A and file the return, splitting pre and post 23 July 2024 sales.</td></tr>

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
            <h2 class="section-title">How the Computation Works in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From identifying the sale to reporting it in the ITR, we compute the ESOP capital gain correctly so you pay tax only on the real post-exercise gain.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Identify the sale</h3>
        <p class="step-description">We record the sale date, sale price and whether the shares are listed or unlisted.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sale date and price</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Listed or unlisted</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="26" y="20" width="68" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="38" y1="36" x2="82" y2="36" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="38" y1="50" x2="72" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="80" cy="64" r="3" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Sale Identified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Set the cost base</h3>
        <p class="step-description">We use the FMV on the exercise date, the value on which perquisite tax was already paid.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FMV on exercise</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No double tax</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="58" font-size="26" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rs</text></svg></div>
            <span class="illustration-label">Cost Base Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Measure the holding period</h3>
        <p class="step-description">We count from the date of allotment: over 12 months listed, over 24 months unlisted, is long-term.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>From allotment</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12 / 24 months</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 32 v18 l12 8" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" fill="none"/></svg></div>
            <span class="illustration-label">Holding Measured</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Compute the gain</h3>
        <p class="step-description">Sale price minus cost base, classified as long-term or short-term capital gain.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sale minus cost</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LTCG or STCG</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="38" y="14" width="44" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="46" y="22" width="28" height="14" rx="3" fill="#fff" stroke="#14365F" stroke-width="1"/><rect x="46" y="44" width="9" height="9" rx="2" fill="#E8712C"/><rect x="57" y="44" width="9" height="9" rx="2" fill="#D4DCE8"/><rect x="68" y="44" width="9" height="9" rx="2" fill="#F5A623"/></svg></div>
            <span class="illustration-label">Gain Computed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Apply the rate</h3>
        <p class="step-description">Listed: 12.5% LTCG above Rs 1.25 lakh, or 20% STCG. Unlisted: 12.5% LTCG or slab STCG.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 111A/112A</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Right rate</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="44" cy="38" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="78" cy="64" r="10" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="40" y1="68" x2="82" y2="34" stroke="#E8712C" stroke-width="2.5"/></svg></div>
            <span class="illustration-label">Rate Applied</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Report and pay</h3>
        <p class="step-description">We disclose in Schedule 112A, pay advance tax, and file the return splitting pre and post 23 July 2024 sales.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule 112A</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Advance tax</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="12" width="60" height="76" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="30" x2="78" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="60" cy="64" r="13" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 64l5 5 9-9" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Filed</span>
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
                    <li>FMV-on-exercise certificate or perquisite working (your cost base).</li>
                    <li>Sale contract note or buyback letter with sale date and price.</li>
                    <li>Allotment record to fix the holding-period start date.</li>
                    <li>Broker statement and AIS for reconciliation.</li>
                    <li>Form 16 or Form 12BA showing the perquisite already taxed.</li>
                    <li>Foreign share and forex data, plus Form 67 for foreign tax credit, where applicable.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Worked example</strong></p>
                    <p>FMV at exercise Rs 400, sold listed at Rs 700 after 15 months, 2,000 shares. LTCG = (700 minus 400) x 2,000 = Rs 6,00,000. Tax at 12.5% on (6,00,000 minus 1,25,000) = Rs 59,375, plus cess.</p>
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
                        <tr><td>Double taxation: paying tax again on the exercise value</td><td>Tax charged twice on the same value</td><td>We set the cost base at FMV-on-exercise so only the post-exercise gain is taxed.</td></tr>
                        <tr><td>Wrong holding-period start (using exercise, not allotment)</td><td>Gain misclassified as STCG or LTCG</td><td>We count from allotment to classify LTCG vs STCG correctly.</td></tr>
                        <tr><td>Pre and post 23 July 2024 sales mixed in the ITR</td><td>Wrong rate applied to part of the gain</td><td>We split transactions by date and apply the correct rate to each.</td></tr>
                        <tr><td>Advance tax missed on a large gain</td><td>Section 234B and 234C interest</td><td>We schedule advance tax to avoid the interest.</td></tr>

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
            <h2 class="section-title">ESOP Capital Gains Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Gain computation, cost-base verification and rate classification</td></tr>
                        <tr><td>Foreign-share gains and DTAA relief</td><td>Quoted on scope</td></tr>
                        <tr><td>Full ITR filing</td><td>Quoted on scope</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Capital Gains consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Capital%20Gains%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Capital gains computation with clean cost-base and sale data</td><td>2 to 4 working days</td></tr>
                        <tr><td>Where foreign shares and DTAA relief are involved</td><td>1 to 2 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Plan before the advance-tax instalment date to avoid interest.</strong> A large ESOP sale gain can create an advance-tax liability in the same quarter, so compute the gain as soon as you sell.</p>

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
            <h3 class="feature-title">No double taxation</h3>
            <p class="feature-text">FMV-on-exercise correctly set as the cost base, so the exercise value is not taxed twice.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3 class="feature-title">Correct classification</h3>
            <p class="feature-text">Correct LTCG vs STCG classification from the allotment date, not the exercise date.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
            <h3 class="feature-title">Right rate on each sale</h3>
            <p class="feature-text">The right rate on the right transaction across the 23 July 2024 split.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
            <h3 class="feature-title">Advance tax on time</h3>
            <p class="feature-text">Advance tax timed to avoid Section 234B and 234C interest.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employees and Companies</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years computing capital gains on equity and ESOP-share sales for employees and companies.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Listed vs Unlisted ESOP Share Sale</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Listed Shares</th><th>Unlisted Shares</th></tr></thead>
                    <tbody>
                        <tr><td>Long-term holding</td><td>Over 12 months</td><td>Over 24 months</td></tr>
                        <tr><td>LTCG rate</td><td>12.5% above Rs 1.25 lakh</td><td>12.5% (no indexation)</td></tr>
                        <tr><td>STCG rate</td><td>20% (Section 111A)</td><td>Slab rate</td></tr>
                        <tr><td>STT</td><td>Required for 111A/112A</td><td>Not applicable</td></tr>
                        <tr><td>Cost base</td><td>FMV on exercise</td><td>FMV on exercise</td></tr>

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
                
                <p>This page covers the sale event. For the ESOP tax employees face on their return, see our <a href="/itr-for-esop-employees">ITR for ESOP employees</a>, and for employer withholding our <a href="/tds-return-filing-24q">TDS return filing (24Q / Form 16)</a>.</p>
                <p>To file the return, use our <a href="/itr-for-capital-gains">ITR for capital gains</a>. Salaried employees can file through <a href="/itr-for-salary">ITR for salary</a>, and for scheme administration see our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a> or the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>Governing provisions:</strong> Section 111A taxes short-term capital gains on listed equity shares at 20%, and Section 112A taxes long-term gains at 12.5% above Rs 1.25 lakh, both for STT-paid shares. These rates are effective for sales on or after 23 July 2024.</p>
                <p><strong>Cost base:</strong> under the ESOP regime, the cost of acquisition is the FMV on the exercise date already taxed as a perquisite under Section 17(2)(vi).</p>
                <p><strong>Restrictions:</strong> no Chapter VI-A deduction, no Section 87A rebate, and no basic-exemption adjustment are allowed against Section 112A long-term gains.</p>
                <p><strong>Continuity:</strong> the Income-tax Act 2025 carries this capital gains framework forward substantially unchanged for sales from 1 April 2026.</p>
                <p>Authoritative sources: the <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax Department</a>, the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Income-tax Act and Rules</a>, the <a href="https://www.pib.gov.in" target="_blank" rel="noopener">CBDT capital gains FAQ (Budget 2024-25)</a>, and the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">e-filing portal</a> (Schedule 112A).</p>

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
                    <p class="faq-expanded__lead">Common questions on ESOP share sales, the cost base, holding period and capital gains rates.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP Capital Gains',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How are ESOP shares taxed when sold?</h3>
                        <div class="faq-expanded__a"><p>When you sell ESOP shares, capital gains tax applies on the sale price minus the fair market value on the exercise date. For listed shares held over 12 months, the rate is 12.5% on gains above Rs 1.25 lakh under Section 112A. If held 12 months or less, the rate is 20% under Section 111A. The perquisite taxed at exercise is not taxed again.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the cost of acquisition for ESOP shares?</h3>
                        <div class="faq-expanded__a"><p>The cost of acquisition is the fair market value on the exercise date, the same value on which perquisite tax was already paid as salary. Using this cost base ensures the exercise gain is not taxed twice. Only the further gain, from FMV-on-exercise to sale price, is taxed as capital gains when you sell the shares.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESOP bechne par kitna tax lagta hai?</h3>
                        <div class="faq-expanded__a"><p>ESOP shares bechne par capital gains tax lagta hai, sale price minus exercise ki FMV par. Listed shares 12 mahine se zyada rakhe to 12.5% LTCG Rs 1.25 lakh se upar, warna 20% STCG. Hum gain compute karke return file karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the holding period for ESOP shares?</h3>
                        <div class="faq-expanded__a"><p>The holding period runs from the date of allotment to the date of sale. Listed shares become long-term after 12 months and unlisted shares after 24 months. Long-term listed gains are taxed at 12.5% above Rs 1.25 lakh, while unlisted long-term gains are taxed at 12.5% without indexation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are ESOPs taxed twice in India?</h3>
                        <div class="faq-expanded__a"><p>ESOPs are taxed at two stages, but not on the same value. At exercise, the gap between FMV and exercise price is taxed as a salary perquisite. At sale, only the further gain from FMV-on-exercise to sale price is taxed as capital gains. Using FMV-on-exercise as the cost base prevents genuine double taxation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How are foreign company ESOP shares taxed on sale?</h3>
                        <div class="faq-expanded__a"><p>For Indian residents, gains on selling foreign-parent ESOP or RSU shares are taxable in India as capital gains. The cost base is FMV-on-exercise, and relief under a Double Taxation Avoidance Agreement may apply where the foreign country also taxes the gain. Foreign shares must be disclosed in Schedule FA, with Form 67 for foreign tax credit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">ESOP sale par advance tax dena padta hai?</h3>
                        <div class="faq-expanded__a"><p>Haan, agar capital gain bada hai to advance tax dena padta hai, warna Section 234B aur 234C ke tahat interest lagta hai. Hum gain par advance tax schedule karke interest se bachate hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How do I report an ESOP share sale in my ITR?</h3>
                        <div class="faq-expanded__a"><p>Report the gain in Schedule 112A of the ITR for listed long-term gains, and split sale transactions executed before and after 23 July 2024 because the rate changed on that date. Short-term listed gains go under Section 111A. Use ITR-2 or ITR-3 depending on your other income, and reconcile with your AIS and broker statement.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Taxable event?</strong> Date of sale of the shares.</li>
                    <li><strong>Cost base?</strong> FMV on the exercise date.</li>
                    <li><strong>Listed LTCG?</strong> 12.5% above Rs 1.25 lakh, over 12 months.</li>
                    <li><strong>Listed STCG?</strong> 20% under Section 111A, 12 months or less.</li>
                    <li><strong>Report in?</strong> Schedule 112A, split by 23 July 2024.</li>
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
                
                <p>A large ESOP sale gain can create an advance-tax liability in the same quarter. Missing the instalment triggers interest under Section 234B and 234C. Compute the gain as soon as you sell, so advance tax is paid on time and the ITR reconciles with your AIS.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your ESOP Sale Taxed Right</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP capital gains tax on sale is straightforward once the cost base, holding period and rate split are handled correctly, and expensive when they are not.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of capital gains experience, computes the gain on FMV-on-exercise, applies the right Section 111A or 112A rate, and files the return so you are taxed only on the genuine post-exercise gain.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Capital%20Gains%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP Capital Gains%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20Capital%20Gains%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESOP Capital Gains Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote computation and filing of capital gains on your ESOP share sale.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We serve employees and companies nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The cost-base verification, gain computation and Schedule 112A filing is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for ESOP taxation</div>
                <div class="pa-cross-grid">
                    <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-esop-employees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for ESOP Employees</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing (24Q)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every three months for Budget capital-gains rate or threshold changes, holding-period amendments, Income-tax Act 2025 section mapping, ITR Schedule 112A changes, and CBDT capital-gains notifications (Tier 1 freshness).</p>
        </div>
    </div>
</section>



</main>





<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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
