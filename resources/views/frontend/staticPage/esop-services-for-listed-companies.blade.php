@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Services for Listed Companies 2026: SEBI SBEB | Patron Accounting</title>
    <meta name="description" content="End-to-end ESOP compliance for listed companies under the SEBI SBEB Regulations and Regulation 9A: scheme, approvals, disclosures and reporting. Get a quote.">
    <link rel="canonical" href="/esop-services-for-listed-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Services for Listed Companies 2026: SEBI SBEB | Patron Accounting">
    <meta property="og:description" content="End-to-end ESOP compliance for listed companies under the SEBI SBEB Regulations and Regulation 9A: scheme, approvals, disclosures and reporting. Get a quote.">
    <meta property="og:url" content="/esop-services-for-listed-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Services for Listed Companies 2026: SEBI SBEB | Patron Accounting">
    <meta name="twitter:description" content="End-to-end ESOP compliance for listed companies under the SEBI SBEB Regulations and Regulation 9A: scheme, approvals, disclosures and reporting. Get a quote.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-services-for-listed-companies/#service",
        "name": "ESOP Services for Listed Companies",
        "description": "Patron Accounting provides end-to-end ESOP services for listed companies under the SEBI Share Based Employee Benefits and Sweat Equity Regulations 2021, including scheme design, shareholder approval, Regulation 9A founder-ESOP treatment, SEBI LODR disclosure, insider-trading alignment and annual reporting, on quoted deal-dependent engagements across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-services-for-listed-companies" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Securities and Exchange Board of India", "sameAs": "https://en.wikipedia.org/wiki/Securities_and_Exchange_Board_of_India" }]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-services-for-listed-companies/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "Listed-Company ESOP", "item": "https://www.patronaccounting.com/esop-services-for-listed-companies" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-services-for-listed-companies/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What regulations govern ESOPs for listed companies?",
                "acceptedAnswer": { "@type": "Answer", "text": "Listed-company ESOPs are governed primarily by the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021, which cover ESOPs, stock appreciation rights, sweat equity and employee benefit trusts. These sit alongside the Companies Act and require a shareholder special resolution, prescribed disclosures, and compliance with SEBI LODR and the insider-trading code. The SBEB Regulations are the master framework for any share-based benefit at a listed company." }
            },
            {
                "@type": "Question",
                "name": "What is Regulation 9A of the SBEB Regulations?",
                "acceptedAnswer": { "@type": "Answer", "text": "Regulation 9A, inserted by the SEBI SBEB Amendment Regulations 2025 and notified on 8 September 2025, allows an employee who is later identified as a promoter or promoter-group member in the draft offer document to retain and exercise ESOPs, SARs or similar benefits. The condition is that the benefits were granted at least one year before the draft red herring prospectus was filed, subject to the scheme terms and applicable law." }
            },
            {
                "@type": "Question",
                "name": "Listed company mein promoter ESOP rakh sakta hai kya?",
                "acceptedAnswer": { "@type": "Answer", "text": "Aam taur par nahi, SBEB Regulations promoters ko ESOP se bar karte hain. Lekin Regulation 9A ke baad, agar founder ko promoter classify kiya gaya DRHP mein, aur ESOP DRHP filing se kam se kam ek saal pehle grant hua tha, to wo retain aur exercise kar sakta hai. Yeh ek saal ka cooling-off safeguard hai." }
            },
            {
                "@type": "Question",
                "name": "Why was Regulation 9A introduced?",
                "acceptedAnswer": { "@type": "Answer", "text": "Founders are often granted ESOPs as employees and then reclassified as promoters when the company files for an IPO, at which point the promoter bar would strip those benefits. Regulation 9A, following a March 2025 consultation and the high-profile Paytm founder case, resolves this by letting pre-IPO founder ESOPs survive reclassification, with a one-year cooling-off period that protects investors while preserving legitimate long-term incentives." }
            },
            {
                "@type": "Question",
                "name": "What disclosures does a listed company make for ESOPs?",
                "acceptedAnswer": { "@type": "Answer", "text": "A listed company discloses its ESOP scheme and grant details when adopting the scheme by special resolution, makes event-based disclosures to the stock exchanges under SEBI LODR, and prepares annual ESOP disclosures and board-report statements each year. Administration must also respect the SEBI Prohibition of Insider Trading code, particularly around exercise windows. Our annual disclosure and reporting service handles these filings." }
            },
            {
                "@type": "Question",
                "name": "How is a listed-company ESOP different from an unlisted one?",
                "acceptedAnswer": { "@type": "Answer", "text": "A listed-company ESOP is governed by the SEBI SBEB Regulations 2021 with LODR disclosures and the insider-trading code, on top of the Companies Act. An unlisted company follows mainly the Companies Act and Section 62, with ROC filings and no SEBI layer. Promoters are barred in both, but the carve-outs differ: Regulation 9A for listed companies at IPO, and the DPIIT-startup exemption for unlisted companies." }
            },
            {
                "@type": "Question",
                "name": "ESOP scheme ke liye shareholder approval chahiye kya?",
                "acceptedAnswer": { "@type": "Answer", "text": "Haan. Listed company mein ESOP scheme adopt ya vary karne ke liye shareholders ka special resolution chahiye, prescribed disclosures ke saath. Yeh SBEB Regulations ki requirement hai. Iske baad LODR disclosures aur annual reporting bhi karni hoti hai." }
            },
            {
                "@type": "Question",
                "name": "Do the SBEB Regulations cover SARs and sweat equity too?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. The SEBI SBEB Regulations 2021 are a single framework covering ESOPs, stock appreciation rights, sweat equity and employee benefit trusts for listed companies. Regulation 9A itself refers to ESOPs, SARs and similar benefits. So a listed company structuring any share-based incentive, not only a classic ESOP, looks to the SBEB Regulations for the rules on approval, administration and disclosure." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-services-for-listed-companies",
        "name": "ESOP Services for Listed Companies",
        "description": "End-to-end ESOP compliance for listed companies under the SEBI SBEB Regulations and Regulation 9A: scheme, approvals, disclosures and reporting. Get a quote.",
        "url": "https://www.patronaccounting.com/esop-services-for-listed-companies",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-services-for-listed-companies/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-services-for-listed-companies/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How a listed-company ESOP programme runs",
        "description": "Step-by-step process to design the SBEB-compliant scheme, obtain shareholder approval, grant and administer with Regulation 9A applied, disclose under LODR, and report annually.",
        "totalTime": "P56D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Design the scheme",
                "text": "Frame the ESOP to SBEB requirements, with the committee or trust structure."
            },
            {
                "@type": "HowToStep",
                "name": "Shareholder approval",
                "text": "Pass the special resolution adopting the scheme, with the prescribed disclosures."
            },
            {
                "@type": "HowToStep",
                "name": "Grant and administer",
                "text": "Make grants, run vesting and exercise, and apply Regulation 9A to any promoter-classified founders."
            },
            {
                "@type": "HowToStep",
                "name": "Disclose under LODR",
                "text": "File the required disclosures and keep the market informed as events occur."
            },
            {
                "@type": "HowToStep",
                "name": "Report annually",
                "text": "Prepare the annual ESOP disclosures and board-report statements each year."
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
        "name": "Listed-Company ESOP Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "SEBI SBEB Regulations 2021",
                "description": "The master framework for listed-company share-based benefits: ESOPs, SARs, sweat equity and employee benefit trusts."
            },
            {
                "@type": "DefinedTerm",
                "name": "Regulation 9A",
                "description": "The 2025 amendment letting founder ESOPs granted at least one year before the DRHP survive promoter reclassification."
            },
            {
                "@type": "DefinedTerm",
                "name": "DRHP",
                "description": "The draft red herring prospectus filed for an IPO; the reference date for the Regulation 9A one-year rule."
            },
            {
                "@type": "DefinedTerm",
                "name": "PIT code",
                "description": "The SEBI Prohibition of Insider Trading code governing exercise windows for listed-company ESOPs."
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
                        ESOP Services for Listed Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Framework:</span> SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>New:</span> Regulation 9A (notified 8 September 2025) on founder ESOPs at IPO.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scope:</span> scheme, approvals, disclosures, PIT code, annual reporting.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Engagement:</span> quoted and deal-dependent for listed entities.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on SEBI compliance</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Listed-Company ESOP%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Listed-Company ESOP%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20we%20are%20a%20listed%20company%20and%20need%20end-to-end%20ESOP%20compliance%20under%20the%20SEBI%20SBEB%20Regulations%20and%20Regulation%209A.%20Please%20share%20how%20you%20scope%20and%20quote%20the%20engagement." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Listed-Company ESOP',
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
    'ctaText'    => 'Listed companies and boards trust Patron Accounting for SBEB-compliant scheme design, Regulation 9A founder treatment, LODR disclosure and annual reporting.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">SEBI SBEB 2021</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Regulation 9A</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">How It Runs</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Sub-Cluster</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Engagement</button>
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
                    <p><strong>&#128204; TL;DR - Listed-Company ESOP Services at a Glance</strong></p>
                    <p>Listed-company ESOPs are governed by the SEBI SBEB Regulations 2021, with the new Regulation 9A clarifying founder ESOPs at IPO. We handle scheme, approvals, disclosure and reporting; engagements are quoted.</p>
                </div>
                <p>Listed-company ESOPs live under the SEBI SBEB Regulations, not just the Companies Act, and the bar for compliance is high. Patron Accounting runs your listed-company ESOP end to end: scheme design, SEBI SBEB and Regulation 9A compliance, shareholder approvals, LODR disclosure and annual reporting.</p>
                <p>For a listed company, an ESOP is a SEBI matter as much as a Companies Act one. The SBEB Regulations govern how schemes are framed, approved, disclosed and administered, and the recent Regulation 9A resolves a long-standing question on founder ESOPs at IPO. We run the whole programme for your board and secretarial team.</p>
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
                <h2 class="section-title">The SEBI SBEB Regulations 2021</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 are the master framework for share-based benefits at listed companies, covering ESOPs, stock appreciation rights, sweat equity and employee benefit trusts. They sit alongside the Companies Act, not instead of it.</p>
                    <p>The Regulations require a shareholder special resolution to adopt or vary a scheme, set rules for administration through a compensation committee or a trust, prescribe disclosures, and bar promoters and promoter-group members from ESOPs, subject to the new Regulation 9A carve-out. Listed companies also disclose under SEBI LODR and operate within the SEBI Prohibition of Insider Trading code.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Listed-Company ESOP:</strong></p>
                    <ul>
                        <li><strong>SBEB Regulations 2021:</strong> the master framework for listed-company ESOPs, SARs, sweat equity and trusts.</li>
                        <li><strong>Regulation 9A:</strong> the 2025 carve-out for founder ESOPs granted before the DRHP.</li>
                        <li><strong>SEBI LODR:</strong> the listing disclosure regime that applies to ESOP events.</li>
                        <li><strong>PIT code:</strong> the insider-trading code governing exercise windows.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Listed-Company ESOP</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Governed by</span>
                        <strong>SEBI SBEB Regulations 2021</strong>
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
            <h2 class="section-title">Regulation 9A: Founder ESOPs at IPO</h2>
            <div class="content-text">
                
                <div class="highlight-box" style="margin-bottom:16px;">
                    <p><strong>Regulation 9A in brief (notified 8 September 2025)</strong></p>
                    <p>An employee later identified as a promoter or promoter-group member in the draft offer document may retain and exercise ESOPs, SARs or similar benefits, provided they were granted at least one year before the draft red herring prospectus was filed, and subject to the scheme terms and applicable law.</p>
                </div>
                <p><strong>Why it matters:</strong> founders are often granted ESOPs as employees, then reclassified as promoters when the company files for an IPO, at which point the promoter bar would otherwise strip those benefits. Regulation 9A closes that gap with a one-year cooling-off safeguard.</p>
                <p><strong>The background:</strong> the amendment followed a March 2025 consultation paper and the high-profile Paytm founder case, settled in May 2025 with a surrender of about 21 million ESOPs and a three-year ban, which made the need for clarity acute. We help IPO-bound and newly listed companies apply Regulation 9A correctly to founder grants.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Listed-Company ESOP Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Scheme Design and Adoption</td><td>We design the scheme, draft the special resolution and explanatory statement, and structure the compensation committee or trust route for a listed entity.</td></tr>
                        <tr><td>SEBI SBEB Compliance</td><td>We run end-to-end SBEB compliance: scheme rules, administration, grant and exercise mechanics, and the prescribed SEBI disclosures.</td></tr>
                        <tr><td>Regulation 9A Founder-ESOP Treatment</td><td>We assess and structure founder ESOPs against Regulation 9A and the one-year DRHP cooling-off rule, for IPO-bound and newly listed companies.</td></tr>
                        <tr><td>Annual Disclosure and Reporting</td><td>We prepare the annual ESOP disclosures, the board-report statements and the LODR filings required of a listed company.</td></tr>
                        <tr><td>PIT and Governance</td><td>We align ESOP administration with the SEBI Prohibition of Insider Trading code and the company's governance framework.</td></tr>

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
            <h2 class="section-title">How a Listed-Company ESOP Programme Runs</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From SBEB-compliant scheme design to annual reporting, we run the full programme for your board and secretarial team.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Design the scheme</h3>
        <p class="step-description">We frame the ESOP to SBEB requirements, with the committee or trust structure.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SBEB rules</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Committee / trust</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="16" width="52" height="68" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M58 30 l14 0 0 14 M72 30 l-20 20" stroke="#F5A623" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/><line x1="44" y1="62" x2="76" y2="62" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="44" y1="72" x2="64" y2="72" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
            <span class="illustration-label">Designed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Shareholder approval</h3>
        <p class="step-description">We pass the special resolution adopting the scheme, with the prescribed disclosures.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Special resolution</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Disclosures</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="40" y="40" width="40" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 30 v14 M52 44 h16" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><path d="M50 58l6 6 12-12" stroke="#E8712C" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
            <span class="illustration-label">Approved</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Grant and administer</h3>
        <p class="step-description">We make grants, run vesting and exercise, and apply Regulation 9A to any promoter-classified founders.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grants + vesting</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reg 9A applied</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="46" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GRANT</text><text x="60" y="60" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Reg 9A</text></svg></div>
            <span class="illustration-label">Administered</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Disclose under LODR</h3>
        <p class="step-description">We file the required disclosures and keep the market informed as events occur.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LODR filings</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Event-based</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="60" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="34" x2="90" y2="34" stroke="#14365F" stroke-width="1.5"/><text x="60" y="58" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LODR</text></svg></div>
            <span class="illustration-label">Disclosed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Report annually</h3>
        <p class="step-description">We prepare the annual ESOP disclosures and board-report statements each year.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual disclosures</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board report</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 72 L48 54 L62 62 L92 34" stroke="#E8712C" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/><circle cx="92" cy="34" r="4" fill="#F5A623"/><rect x="26" y="78" width="68" height="3" rx="1.5" fill="#14365F" opacity="0.3"/></svg></div>
            <span class="illustration-label">Reported</span>
            <span class="step-number-large">05</span>
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
            <h2 class="section-title">The Listed-Company ESOP Sub-Cluster</h2>
            <div class="content-text">
                
                <p>This page is the master for three focused listed-company services. Use the one that matches your need, or talk to us for the full programme.</p>
                <ul>
                    <li><strong>SEBI SBEB compliance:</strong> end-to-end compliance with the SBEB Regulations: scheme, administration, disclosures.</li>
                    <li><strong>Regulation 9A founder treatment:</strong> founder ESOPs at IPO under Regulation 9A and the one-year cooling-off rule.</li>
                    <li><strong>Annual disclosure and reporting:</strong> annual ESOP disclosures, board-report statements and LODR filings.</li>
                </ul>

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
                        <tr><td>Founder ESOPs at risk on promoter reclassification</td><td>Benefits stripped at IPO</td><td>Structure grants to meet the Regulation 9A one-year DRHP rule.</td></tr>
                        <tr><td>Scheme not SBEB-compliant</td><td>Regulatory exposure</td><td>Redraft the scheme and resolutions to the SBEB Regulations.</td></tr>
                        <tr><td>Missed or late LODR disclosures</td><td>Listing penalties</td><td>Run a disclosure calendar tied to scheme events.</td></tr>
                        <tr><td>PIT code conflicts on exercise windows</td><td>Insider-trading risk</td><td>Align ESOP exercise with the insider-trading code.</td></tr>

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
            <h2 class="section-title">Engagement and Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Engagement model</td><td>Quoted and deal-dependent for listed entities</td></tr>
                        <tr><td>Scope range</td><td>From a one-off Regulation 9A assessment to a full scheme design, approval and annual-compliance programme</td></tr>
                        <tr><td>Priced to</td><td>Scheme size, regulatory scope and the level of ongoing support</td></tr>
                        <tr><td>How to start</td><td>Tell us your plan and we will scope a fixed engagement</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Listed-Company ESOP consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20a%20scoped%20quote%20for%20a%20listed-company%20ESOP%20engagement%20under%20the%20SEBI%20SBEB%20Regulations.%20I%20can%20share%20our%20scheme%20and%20stage." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>New listed-company ESOP scheme, design to shareholder approval</td><td>4 to 8 weeks</td></tr>
                        <tr><td>Focused Regulation 9A assessment for founder grants</td><td>1 to 2 weeks</td></tr>
                        <tr><td>Annual disclosure and reporting</td><td>On the company's reporting cycle</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>The scheme timeline is driven by the general-meeting notice and the disclosure work.</strong> A focused Regulation 9A assessment is faster, and annual reporting runs on your reporting cycle.</p>

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
            <h2 class="section-title">Why Use a Specialist</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">Fully SBEB-compliant</h3>
            <p class="feature-text">A scheme that is fully SEBI SBEB-compliant, not just Companies Act-compliant.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-2a6 6 0 0112 0v2"/></svg></div>
            <h3 class="feature-title">Founder ESOPs survive</h3>
            <p class="feature-text">Founder ESOPs structured to survive promoter reclassification under Regulation 9A.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M8 2v4m8-4v4"/></svg></div>
            <h3 class="feature-title">Disclosures on time</h3>
            <p class="feature-text">LODR disclosures and annual reporting done correctly and on time.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">PIT-aligned</h3>
            <p class="feature-text">ESOP administration aligned with the SEBI insider-trading code.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Listed Companies and Boards</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years advising listed companies on SEBI compliance, secretarial work and share-based benefits.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Listed vs Unlisted ESOPs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Listed Company</th><th>Unlisted Company</th></tr></thead>
                    <tbody>
                        <tr><td>Framework</td><td>SEBI SBEB Regulations 2021</td><td>Companies Act, Section 62</td></tr>
                        <tr><td>Disclosure</td><td>LODR, market disclosures</td><td>ROC filings</td></tr>
                        <tr><td>Promoter ESOPs</td><td>Barred, except Regulation 9A</td><td>Barred, except DPIIT startups</td></tr>
                        <tr><td>Insider trading</td><td>PIT code applies</td><td>Not applicable</td></tr>

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
                
                <p>Explore the listed-company programme: end-to-end <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a> covering SEBI SBEB compliance, Regulation 9A founder-ESOP treatment, and annual disclosure and reporting for listed entities.</p>
                <p>Unlisted or startup ESOPs? See <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a> and <a href="/esop-scheme-design">ESOP scheme design</a>. Listed companies also need <a href="/secretarial-audit">secretarial audit</a>, and the deadlines sit in your <a href="/compliance-calendar">compliance calendar</a>. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework</h2>
            <div class="content-text">
                
                <p><strong>SEBI SBEB Regulations 2021:</strong> the master framework for listed-company ESOPs, SARs, sweat equity and employee benefit trusts, requiring a shareholder special resolution, prescribed disclosures, and barring promoters from ESOPs subject to Regulation 9A.</p>
                <p><strong>Regulation 9A:</strong> inserted by the SEBI SBEB (Amendment) Regulations 2025, notified 8 September 2025, permitting an employee identified as a promoter or promoter-group member in the draft offer document to retain and exercise benefits granted at least one year before the DRHP filing.</p>
                <p><strong>SEBI LODR and PIT:</strong> listed companies disclose ESOP scheme and grant information under the SEBI Listing Obligations and Disclosure Requirements, and administer exercise within the SEBI Prohibition of Insider Trading code.</p>
                <p><strong>Companies Act:</strong> the Section 62(1)(b) ESOP route and the related registers continue to apply alongside the SEBI framework for a listed company.</p>
                <p>Authoritative sources: the <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">Securities and Exchange Board of India</a> (SBEB Regulations, Regulation 9A), the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Companies Act, Section 62), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>, and the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (ESOP perquisite, capital gains).</p>

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
                    <p class="faq-expanded__lead">Common questions on the SEBI SBEB Regulations, Regulation 9A, promoter ESOPs, listed-company disclosure and shareholder approval.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Listed-Company ESOP',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What regulations govern ESOPs for listed companies?</h3>
                        <div class="faq-expanded__a"><p>Listed-company ESOPs are governed primarily by the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021, which cover ESOPs, stock appreciation rights, sweat equity and employee benefit trusts. These sit alongside the Companies Act and require a shareholder special resolution, prescribed disclosures, and compliance with SEBI LODR and the insider-trading code. The SBEB Regulations are the master framework for any share-based benefit at a listed company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Regulation 9A of the SBEB Regulations?</h3>
                        <div class="faq-expanded__a"><p>Regulation 9A, inserted by the SEBI SBEB Amendment Regulations 2025 and notified on 8 September 2025, allows an employee who is later identified as a promoter or promoter-group member in the draft offer document to retain and exercise ESOPs, SARs or similar benefits. The condition is that the benefits were granted at least one year before the draft red herring prospectus was filed, subject to the scheme terms and applicable law.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Listed company mein promoter ESOP rakh sakta hai kya?</h3>
                        <div class="faq-expanded__a"><p>Aam taur par nahi, SBEB Regulations promoters ko ESOP se bar karte hain. Lekin Regulation 9A ke baad, agar founder ko promoter classify kiya gaya DRHP mein, aur ESOP DRHP filing se kam se kam ek saal pehle grant hua tha, to wo retain aur exercise kar sakta hai. Yeh ek saal ka cooling-off safeguard hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Why was Regulation 9A introduced?</h3>
                        <div class="faq-expanded__a"><p>Founders are often granted ESOPs as employees and then reclassified as promoters when the company files for an IPO, at which point the promoter bar would strip those benefits. Regulation 9A, following a March 2025 consultation and the high-profile Paytm founder case, resolves this by letting pre-IPO founder ESOPs survive reclassification, with a one-year cooling-off period that protects investors while preserving legitimate long-term incentives.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What disclosures does a listed company make for ESOPs?</h3>
                        <div class="faq-expanded__a"><p>A listed company discloses its ESOP scheme and grant details when adopting the scheme by special resolution, makes event-based disclosures to the stock exchanges under SEBI LODR, and prepares annual ESOP disclosures and board-report statements each year. Administration must also respect the SEBI Prohibition of Insider Trading code, particularly around exercise windows. Our annual disclosure and reporting service handles these filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is a listed-company ESOP different from an unlisted one?</h3>
                        <div class="faq-expanded__a"><p>A listed-company ESOP is governed by the SEBI SBEB Regulations 2021 with LODR disclosures and the insider-trading code, on top of the Companies Act. An unlisted company follows mainly the Companies Act and Section 62, with ROC filings and no SEBI layer. Promoters are barred in both, but the carve-outs differ: Regulation 9A for listed companies at IPO, and the DPIIT-startup exemption for unlisted companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">ESOP scheme ke liye shareholder approval chahiye kya?</h3>
                        <div class="faq-expanded__a"><p>Haan. Listed company mein ESOP scheme adopt ya vary karne ke liye shareholders ka special resolution chahiye, prescribed disclosures ke saath. Yeh SBEB Regulations ki requirement hai. Iske baad LODR disclosures aur annual reporting bhi karni hoti hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do the SBEB Regulations cover SARs and sweat equity too?</h3>
                        <div class="faq-expanded__a"><p>Yes. The SEBI SBEB Regulations 2021 are a single framework covering ESOPs, stock appreciation rights, sweat equity and employee benefit trusts for listed companies. Regulation 9A itself refers to ESOPs, SARs and similar benefits. So a listed company structuring any share-based incentive, not only a classic ESOP, looks to the SBEB Regulations for the rules on approval, administration and disclosure.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Framework?</strong> SEBI SBEB Regulations 2021.</li>
                    <li><strong>New rule?</strong> Regulation 9A, 8 September 2025.</li>
                    <li><strong>Promoter ESOP?</strong> Barred, except Regulation 9A.</li>
                    <li><strong>Reg 9A condition?</strong> Granted 1 year before DRHP.</li>
                    <li><strong>Approval?</strong> Shareholder special resolution.</li>
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
                
                <p>For IPO-bound companies, the Regulation 9A one-year rule is measured from the DRHP filing, so founder grants must be in place well before the company decides to list. Structure founder ESOPs early, and keep the scheme and disclosures SBEB-compliant throughout, so the incentives survive the move to a listed, promoter-classified world.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Run Your Listed-Company ESOP with Confidence</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">Listed-company ESOPs demand a SEBI-grade compliance programme, from SBEB-compliant scheme design to LODR disclosure, the insider-trading code and the new Regulation 9A treatment of founder grants.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of listed-company compliance experience, runs the full programme and its focused spokes, scoped and quoted to your scheme.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20a%20scoped%20quote%20for%20a%20listed-company%20ESOP%20engagement%20under%20the%20SEBI%20SBEB%20Regulations.%20I%20can%20share%20our%20scheme%20and%20stage." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Listed-Company ESOP%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Listed-Company ESOP%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Listed-Company ESOP Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote SEBI SBEB compliance, Regulation 9A treatment and annual reporting for listed companies.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise listed companies nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The SEBI SBEB compliance, Regulation 9A treatment and annual reporting is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for listed-company ESOPs</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-scheme-design" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/compliance-calendar" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Compliance Calendar</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every three months for any further SEBI SBEB amendments, clarifications or circulars on Regulation 9A, LODR disclosure changes, PIT code updates, and SEBI consultation papers on share-based benefits (Tier 1 freshness).</p>
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
