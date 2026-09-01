@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Services for Family Business 2026: Succession | Patron Accounting</title>
    <meta name="description" content="ESOPs to retain non-family executives plus sweat equity for family: a hybrid that keeps family ownership while professionalising management. From Rs 24,999.">
    <link rel="canonical" href="/esop-services-for-family-business">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Services for Family Business 2026: Succession | Patron Accounting">
    <meta property="og:description" content="ESOPs to retain non-family executives plus sweat equity for family: a hybrid that keeps family ownership while professionalising management. From Rs 24,999.">
    <meta property="og:url" content="/esop-services-for-family-business">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Services for Family Business 2026: Succession | Patron Accounting">
    <meta name="twitter:description" content="ESOPs to retain non-family executives plus sweat equity for family: a hybrid that keeps family ownership while professionalising management. From Rs 24,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-services-for-family-business/#service",
        "name": "ESOP Services for Family Business",
        "description": "Patron Accounting structures equity for family businesses, using ESOPs under Section 62 to retain non-family executives and sweat equity under Section 54 for family members, with dilution and control modelling, valuation and full compliance, so ownership stays in the family while management is professionalised, across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-services-for-family-business" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Family business", "sameAs": "https://en.wikipedia.org/wiki/Family_business" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP for Family Business Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Family-Business ESOP and Sweat Equity Structuring" },
                    "price": "24999",
                    "priceCurrency": "INR",
                    "description": "Design and structuring of the hybrid ESOP and sweat-equity plan. Starting price, exclusive of GST and government charges; implementation and valuation scoped to the plan."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-services-for-family-business/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP for Family Business", "item": "https://www.patronaccounting.com/esop-services-for-family-business" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-services-for-family-business/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Can family members receive ESOPs?",
                "acceptedAnswer": { "@type": "Answer", "text": "Generally no. Family members who are promoters or part of the promoter group cannot be granted ESOPs under Section 62 read with Rule 12, except in DPIIT-recognised startups. To give equity to family members, the usual route is sweat equity under Section 54, which can be issued to directors and promoters. This is why family businesses typically use ESOPs for non-family executives and sweat equity for family members." }
            },
            {
                "@type": "Question",
                "name": "How do ESOPs help family-business succession?",
                "acceptedAnswer": { "@type": "Answer", "text": "When a founder steps back, the company often relies on senior non-family professionals while the next generation grows into leadership. ESOPs retain and motivate those professionals by giving them a stake in long-term value, bridging the leadership and credibility gap. They also conserve cash and align professional managers with the family's interest in the business thriving across the transition." }
            },
            {
                "@type": "Question",
                "name": "Family business mein equity dene ka best tareeka kya hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Family business mein aam taur par hybrid structure chalta hai. Non-family executives ko ESOP dete hain retention ke liye, aur family members ko sweat equity, kyunki promoters ko ESOP nahi mil sakta. Isse management professionalise hota hai aur ownership family ke paas rehti hai." }
            },
            {
                "@type": "Question",
                "name": "Will giving ESOPs dilute family control?",
                "acceptedAnswer": { "@type": "Answer", "text": "ESOPs do dilute ownership when options are exercised, but the impact is controllable. We model the dilution and size the ESOP pool so the family retains the level of control it wants, while still giving meaningful equity to key professionals. Sizing the pool deliberately, rather than granting ad hoc, is how a family business keeps both retention power and control." }
            },
            {
                "@type": "Question",
                "name": "Should we use ESOPs or sweat equity for the next generation?",
                "acceptedAnswer": { "@type": "Answer", "text": "If the next-generation family members are promoters or part of the promoter group, they generally cannot receive ESOPs, so sweat equity under Section 54 is the route, recognising their contribution with real shares subject to a three-year lock-in. If they are genuinely non-promoter employees, an ESOP may be possible. We assess each person's status and recommend the right instrument." }
            },
            {
                "@type": "Question",
                "name": "Can a listed family company do the same?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes, but a listed family business additionally follows the SEBI Share Based Employee Benefits and Sweat Equity Regulations 2021, with shareholder approval, disclosures and the insider-trading code, and the new Regulation 9A treatment of founder ESOPs at IPO. The hybrid logic still applies, ESOPs for non-family executives and sweat equity for family, but with the extra SEBI compliance layer." }
            },
            {
                "@type": "Question",
                "name": "Non-family CEO ko ESOP de sakte hain kya?",
                "acceptedAnswer": { "@type": "Answer", "text": "Haan, bilkul. Non-family CEO ya CXO promoter nahi hote, isliye unhe ESOP diya ja sakta hai Section 62(1)(b) ke tahat. Yeh succession ke time senior professional management ko retain karne ka sabse achha tareeka hai." }
            },
            {
                "@type": "Question",
                "name": "How much does a family-business equity plan cost?",
                "acceptedAnswer": { "@type": "Answer", "text": "Family-business ESOP structuring starts from Rs 24,999 plus GST for the design and structuring work. Implementing the ESOP scheme and issuing sweat equity to family members are scoped to the plan, and valuation and ROC charges are billed at actuals. We give a clear, fixed-scope quote once we understand your family and management structure." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-services-for-family-business",
        "name": "ESOP Services for Family Business",
        "description": "ESOPs to retain non-family executives plus sweat equity for family: a hybrid that keeps family ownership while professionalising management. From Rs 24,999.",
        "url": "https://www.patronaccounting.com/esop-services-for-family-business",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-services-for-family-business/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-services-for-family-business/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to structure equity for a family business",
        "description": "Step-by-step process to understand the family and business, map recipients to instruments, model dilution and control, draft schemes and resolutions, grant and allot, and maintain the plan.",
        "totalTime": "P21D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Understand the family and the business",
                "text": "Who is family, who is professional, and what succession looks like."
            },
            {
                "@type": "HowToStep",
                "name": "Map recipients to instruments",
                "text": "ESOPs for non-family executives, sweat equity for family members."
            },
            {
                "@type": "HowToStep",
                "name": "Model dilution and control",
                "text": "Size the pool and the issue so the family keeps the control it wants."
            },
            {
                "@type": "HowToStep",
                "name": "Draft schemes and resolutions",
                "text": "ESOP scheme and sweat-equity special resolution, with valuations."
            },
            {
                "@type": "HowToStep",
                "name": "Grant, allot and register",
                "text": "Make ESOP grants and the sweat-equity allotment, with PAS-3, SH-6 and SH-3."
            },
            {
                "@type": "HowToStep",
                "name": "Maintain and review",
                "text": "Run vesting, exercise and annual compliance as the plan matures."
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
        "name": "ESOP for Family Business Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "ESOP",
                "description": "Employee stock options under Section 62(1)(b), for non-family executives; promoters are barred."
            },
            {
                "@type": "DefinedTerm",
                "name": "Sweat equity",
                "description": "Shares issued under Section 54 to directors and promoters for know-how or value addition; the route for family members."
            },
            {
                "@type": "DefinedTerm",
                "name": "Promoter bar",
                "description": "The rule under Section 62 read with Rule 12 that excludes promoters from ESOPs, except in DPIIT-recognised startups."
            },
            {
                "@type": "DefinedTerm",
                "name": "Hybrid structure",
                "description": "ESOPs for non-family executives combined with sweat equity for family members."
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
                        ESOP Services for Family Business
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>For non-family executives:</span> ESOPs that retain senior talent through succession.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>For family members:</span> sweat equity, since promoters cannot normally hold ESOPs.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>The goal:</span> professionalise management without diluting family control unintentionally.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> family-business ESOP structuring from Rs 24,999 (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years advising family businesses</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for Family Business%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP for Family Business%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20we%20run%20a%20family%20business%20and%20want%20to%20structure%20equity%3A%20ESOPs%20for%20non-family%20executives%20and%20sweat%20equity%20for%20family%20members.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ESOP for Family Business',
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
    'ctaText'    => 'Family businesses across generations trust Patron Accounting to retain key professionals with ESOPs and reward family with sweat equity, while keeping control intact.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">The Challenge</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Gets What</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Our Services</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">6 Steps</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">What We Need</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Why for Succession</button>
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
                    <p><strong>&#128204; TL;DR - ESOP for Family Business Services at a Glance</strong></p>
                    <p>Family businesses use ESOPs to retain non-family executives and sweat equity for family members, because promoters cannot normally hold ESOPs. This keeps ownership in the family while professionalising management. We structure it all.</p>
                </div>
                <p>Keep the business in the family, and keep your best professionals too. Patron Accounting structures equity for family businesses the way it actually works: ESOPs to retain and motivate non-family executives, and sweat equity for family members, so ownership stays in the family while management is professionalised.</p>
                <p>A family business faces a particular equity puzzle: how to reward and retain the professionals who run the company, without giving away family control, and how to give equity to family members when the law treats them differently from employees. The answer is usually a hybrid, and we structure both sides.</p>
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
                <h2 class="section-title">The Family Business Equity Challenge</h2>
                <div class="content-text what-is-definition">
                    
                    <p>When a founder steps back, younger family successors often cannot immediately fill the leadership and credibility gap, so the company leans on senior non-family professionals to carry the business through. Retaining those professionals is the heart of the problem.</p>
                    <p>At the same time, the family wants to keep ownership and control, and may want to give equity to the next generation for the work they put in. The law treats these two groups differently: non-family executives can receive ESOPs, but family members who are promoters generally cannot. A good structure respects that difference instead of fighting it.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP for Family Business:</strong></p>
                    <ul>
                        <li><strong>ESOP:</strong> options under Section 62(1)(b), for non-family executives.</li>
                        <li><strong>Sweat equity:</strong> shares under Section 54 for directors and promoters, the route for family.</li>
                        <li><strong>Promoter bar:</strong> promoters are excluded from ESOPs, except in DPIIT-recognised startups.</li>
                        <li><strong>Hybrid:</strong> ESOPs for non-family executives plus sweat equity for family members.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP for Family Business</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Structured under</span>
                        <strong>Section 62 and Section 54</strong>
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
            <h2 class="section-title">Who Gets What: The Hybrid Structure</h2>
            <div class="content-text">
                
                <p>The practical structure for most family businesses pairs two instruments. Each goes to the group the law allows:</p>
                <ul>
                    <li><strong>Non-family CEO / CXO:</strong> ESOP, to retain and motivate; promoters are barred, they are not.</li>
                    <li><strong>Senior non-family staff:</strong> ESOP, for long-term retention through succession.</li>
                    <li><strong>Family member (promoter):</strong> sweat equity, since ESOP is barred for promoters.</li>
                    <li><strong>Family member for IP or know-how:</strong> sweat equity, real shares for the contribution made.</li>
                </ul>
                <p><strong>The key rule:</strong> ESOPs cannot be granted to promoters or the promoter group under Section 62 read with Rule 12, except in DPIIT-recognised startups. Sweat equity under Section 54 can be issued to directors and promoters. So non-family executives get ESOPs, and family members usually get sweat equity.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Family-Business ESOP Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Succession and Retention Design</td><td>We map who needs to be retained through the transition and design an ESOP that ties senior non-family professionals to the company's long-term value.</td></tr>
                        <tr><td>ESOP Scheme for Non-Family Executives</td><td>We draft and implement the ESOP scheme, board and shareholder resolutions, grant letters, vesting schedule and the SH-6 register.</td></tr>
                        <tr><td>Sweat Equity for Family Members</td><td>Where family members are to receive equity, we issue sweat equity under Section 54, with the registered-valuer price, 3-year lock-in and SH-3 register.</td></tr>
                        <tr><td>Ownership and Control Planning</td><td>We model the dilution so the family retains the control it wants, and align the equity plan with the family's succession intentions.</td></tr>
                        <tr><td>Valuation and Compliance</td><td>We coordinate the valuations, file the ROC forms and keep both the ESOP and sweat equity fully compliant.</td></tr>

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
            <h2 class="section-title">How We Structure It in 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From understanding the family to maintaining the plan, we build a hybrid that retains professionals and keeps family control.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Understand the family and the business</h3>
        <p class="step-description">We map who is family, who is professional, and what succession looks like.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Family vs professional</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Succession view</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="44" cy="36" r="9" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="76" cy="36" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 68 a14 11 0 0128 0z M62 68 a14 11 0 0128 0z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/></svg></div>
            <span class="illustration-label">Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Map recipients to instruments</h3>
        <p class="step-description">ESOPs for non-family executives, sweat equity for family members.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESOP non-family</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sweat equity family</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="38" cy="38" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="38" cy="66" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="74" y="30" width="20" height="16" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1.3"/><rect x="74" y="58" width="20" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><path d="M46 38 h24 M46 66 h24" stroke="#14365F" stroke-width="1.5" stroke-dasharray="3 3"/></svg></div>
            <span class="illustration-label">Instruments Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Model dilution and control</h3>
        <p class="step-description">We size the pool and the issue so the family keeps the control it wants.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pool sizing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Control protected</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 50 L60 20 A30 30 0 0 1 86 65 Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.3"/><path d="M60 50 L86 65 A30 30 0 0 1 38 73 Z" fill="#E8F5E9" stroke="#25D366" stroke-width="1.3"/></svg></div>
            <span class="illustration-label">Modelled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Draft schemes and resolutions</h3>
        <p class="step-description">ESOP scheme and sweat-equity special resolution, with valuations.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESOP scheme</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sweat-equity SR</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="38" height="58" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="52" y="28" width="38" height="58" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="60" y1="44" x2="82" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="60" y1="54" x2="82" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div>
            <span class="illustration-label">Drafted</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Grant, allot and register</h3>
        <p class="step-description">We make ESOP grants and the sweat-equity allotment, with PAS-3, SH-6 and SH-3.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grants + allotment</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registers filed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="20" width="52" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="42" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAS-3</text><text x="60" y="56" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SH-6 / SH-3</text></svg></div>
            <span class="illustration-label">Registered</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Maintain and review</h3>
        <p class="step-description">We run vesting, exercise and annual compliance as the plan matures.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vesting + exercise</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual compliance</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="26" fill="none" stroke="#14365F" stroke-width="1.5"/><path d="M60 30 A20 20 0 0 1 80 50" stroke="#F5A623" stroke-width="2.5" fill="none" stroke-linecap="round"/><path d="M80 44 l2 8 -8 -2" fill="#E8712C"/><circle cx="60" cy="50" r="4" fill="#14365F"/></svg></div>
            <span class="illustration-label">Maintained</span>
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
            <h2 class="section-title">What We Need From You</h2>
            <div class="content-text">
                
                <ul>
                    <li>The list of family and non-family people to be rewarded, and their roles.</li>
                    <li>Your succession intentions and how much control the family wants to keep.</li>
                    <li>The current cap table and shareholding.</li>
                    <li>Articles of Association and prior resolutions on share capital.</li>
                    <li>For sweat equity, the contribution or know-how being recognised.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>The hybrid in one line</strong></p>
                    <p>Non-family executives get ESOPs under Section 62(1)(b); family promoters get sweat equity under Section 54. The family owns, professionals run, and control is modelled and protected.</p>
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
                        <tr><td>Wanting to give family members an ESOP</td><td>Promoter bar blocks it</td><td>Use sweat equity for family promoters; ESOPs are barred for them.</td></tr>
                        <tr><td>Fear of losing family control</td><td>Uncontrolled dilution</td><td>Model the dilution and size the pool to protect control.</td></tr>
                        <tr><td>Losing a key non-family executive in transition</td><td>Leadership gap at handover</td><td>Design ESOP vesting that retains them through succession.</td></tr>
                        <tr><td>Mixing family and professional rewards in one plan</td><td>Legal and structural confusion</td><td>Separate ESOP and sweat-equity structures for each group.</td></tr>

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
            <h2 class="section-title">Family-Business ESOP Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 24,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>The design and structuring of the hybrid equity plan</td></tr>
                        <tr><td>ESOP scheme implementation and sweat-equity issuance</td><td>Scoped to the plan</td></tr>
                        <tr><td>Valuation and ROC charges</td><td>Billed at actuals</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP for Family Business consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20structure%20equity%20for%20our%20family%20business%20for%20succession%20and%20retention.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20share%20our%20family%20and%20management%20structure." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Designing the structure</td><td>1 to 2 weeks of advisory</td></tr>
                        <tr><td>Implementing an ESOP scheme</td><td>2 to 4 weeks</td></tr>
                        <tr><td>A sweat-equity issue</td><td>3 to 5 weeks (notice and valuation driven)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Where both are run together for a family business, we sequence them so the whole plan is in place in a single, coordinated programme.</strong></p>

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
            <h3 class="feature-title">Respects the law</h3>
            <p class="feature-text">A structure that respects the law: ESOPs for non-family, sweat equity for family.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21v-2a6 6 0 0112 0v2"/></svg></div>
            <h3 class="feature-title">Control protected</h3>
            <p class="feature-text">Family control protected through deliberate dilution modelling.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/></svg></div>
            <h3 class="feature-title">Talent retained</h3>
            <p class="feature-text">Senior professionals retained through the generational transition.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">One programme</h3>
            <p class="feature-text">Both ESOP and sweat-equity compliance handled in one programme.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Family Businesses Across Generations</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years advising family businesses on equity, succession and compliance across generations.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why ESOPs Help Family-Business Succession</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Benefit</th><th>What it does</th></tr></thead>
                    <tbody>
                        <tr><td>Bridge the leadership gap</td><td>Retain experienced non-family professionals while the next generation grows into the business.</td></tr>
                        <tr><td>Conserve cash</td><td>Reward key people with equity rather than large cash packages.</td></tr>
                        <tr><td>Align interests</td><td>Tie professional managers to the long-term value of the family business.</td></tr>
                        <tr><td>Separate ownership from management</td><td>The family owns, professionals run, a proven model for longevity.</td></tr>

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
                
                <p>This vertical draws on two core services: <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a> for the non-family executive ESOPs, and the same team for the sweat-equity issuance to family members. If you are still designing the plan, see our <a href="/esop-scheme-design">ESOP scheme design</a>, and grants are made via <a href="/issue-of-shares">issue of shares</a>.</p>
                <p>For the wider finance function and governance across a transition, see our <a href="/private-limited-company-compliance">private limited company compliance</a> and <a href="/secretarial-audit">secretarial audit</a> services. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework</h2>
            <div class="content-text">
                
                <p><strong>ESOP for non-family executives:</strong> granted under Section 62(1)(b) of the Companies Act read with Rule 12; promoters and the promoter group are excluded except in DPIIT-recognised startups, so non-family professionals are the natural recipients.</p>
                <p><strong>Sweat equity for family members:</strong> issued under Section 54 read with Rule 8 to directors and promoters for know-how, IPR or value additions; locked in for 3 years, capped at 15% a year or Rs 5 crore and 25% overall, with a registered-valuer price and the SH-3 register.</p>
                <p><strong>Taxation:</strong> ESOPs are taxed as a perquisite at exercise and as capital gains on sale; sweat equity is taxed as a perquisite in the year of issue and as capital gains on sale.</p>
                <p><strong>Listed family companies:</strong> a listed family business additionally follows the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 and its disclosure requirements.</p>
                <p>Authoritative sources: the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Section 62, Section 54, SCD Rules), the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (ESOP and sweat-equity perquisite), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>, and <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> (SBEB and Sweat Equity Regulations 2021).</p>

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
                    <p class="faq-expanded__lead">Common questions on ESOPs and sweat equity for family businesses, succession, family control and listed-company rules.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP for Family Business',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can family members receive ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Generally no. Family members who are promoters or part of the promoter group cannot be granted ESOPs under Section 62 read with Rule 12, except in DPIIT-recognised startups. To give equity to family members, the usual route is sweat equity under Section 54, which can be issued to directors and promoters. This is why family businesses typically use ESOPs for non-family executives and sweat equity for family members.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How do ESOPs help family-business succession?</h3>
                        <div class="faq-expanded__a"><p>When a founder steps back, the company often relies on senior non-family professionals while the next generation grows into leadership. ESOPs retain and motivate those professionals by giving them a stake in long-term value, bridging the leadership and credibility gap. They also conserve cash and align professional managers with the family's interest in the business thriving across the transition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Family business mein equity dene ka best tareeka kya hai?</h3>
                        <div class="faq-expanded__a"><p>Family business mein aam taur par hybrid structure chalta hai. Non-family executives ko ESOP dete hain retention ke liye, aur family members ko sweat equity, kyunki promoters ko ESOP nahi mil sakta. Isse management professionalise hota hai aur ownership family ke paas rehti hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Will giving ESOPs dilute family control?</h3>
                        <div class="faq-expanded__a"><p>ESOPs do dilute ownership when options are exercised, but the impact is controllable. We model the dilution and size the ESOP pool so the family retains the level of control it wants, while still giving meaningful equity to key professionals. Sizing the pool deliberately, rather than granting ad hoc, is how a family business keeps both retention power and control.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Should we use ESOPs or sweat equity for the next generation?</h3>
                        <div class="faq-expanded__a"><p>If the next-generation family members are promoters or part of the promoter group, they generally cannot receive ESOPs, so sweat equity under Section 54 is the route, recognising their contribution with real shares subject to a three-year lock-in. If they are genuinely non-promoter employees, an ESOP may be possible. We assess each person's status and recommend the right instrument.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a listed family company do the same?</h3>
                        <div class="faq-expanded__a"><p>Yes, but a listed family business additionally follows the SEBI Share Based Employee Benefits and Sweat Equity Regulations 2021, with shareholder approval, disclosures and the insider-trading code, and the new Regulation 9A treatment of founder ESOPs at IPO. The hybrid logic still applies, ESOPs for non-family executives and sweat equity for family, but with the extra SEBI compliance layer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Non-family CEO ko ESOP de sakte hain kya?</h3>
                        <div class="faq-expanded__a"><p>Haan, bilkul. Non-family CEO ya CXO promoter nahi hote, isliye unhe ESOP diya ja sakta hai Section 62(1)(b) ke tahat. Yeh succession ke time senior professional management ko retain karne ka sabse achha tareeka hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does a family-business equity plan cost?</h3>
                        <div class="faq-expanded__a"><p>Family-business ESOP structuring starts from Rs 24,999 plus GST for the design and structuring work. Implementing the ESOP scheme and issuing sweat equity to family members are scoped to the plan, and valuation and ROC charges are billed at actuals. We give a clear, fixed-scope quote once we understand your family and management structure.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Non-family execs?</strong> ESOP, Section 62(1)(b).</li>
                    <li><strong>Family members?</strong> Sweat equity, Section 54.</li>
                    <li><strong>Why hybrid?</strong> Promoters barred from ESOPs.</li>
                    <li><strong>Control?</strong> Modelled and protected.</li>
                    <li><strong>Fee?</strong> From Rs 24,999 plus GST.</li>
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
                
                <p>Succession is rarely sudden, but the retention risk is. The best non-family professionals have options, and a clear equity stake is what keeps them through a transition. Put the structure in place before the handover, not during the crisis, so the people who carry the business stay, and the family keeps control on its own terms.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Structure Your Family-Business Equity</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">For a family business, equity is about two things at once: retaining the professionals who run the company, and keeping ownership in the family. The hybrid of ESOPs for non-family executives and sweat equity for family members does both, within the law.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of family-business experience, designs and implements the whole structure so your succession is smooth and your control intact.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20structure%20equity%20for%20our%20family%20business%20for%20succession%20and%20retention.%20Please%20share%20how%20it%20works%20and%20your%20fees.%20I%20can%20share%20our%20family%20and%20management%20structure." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP for Family Business%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP for Family Business%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Family-Business ESOP Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote equity structuring, succession planning and compliance for family businesses.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise family businesses nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The equity structuring, succession planning and compliance is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for family-business equity</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-scheme-design" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
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
            <p><strong>Content Created:</strong> 2 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 2 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every six months for changes to promoter eligibility for ESOPs, the DPIIT exemption, sweat-equity rules, ESOP or sweat-equity taxation, and SEBI SBEB amendments affecting listed family companies (Tier 2 freshness).</p>
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
