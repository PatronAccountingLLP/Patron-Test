@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Cross-Border ESOP DTAA Implications 2026 Guide | Patron Accounting</title>
    <meta name="description" content="DTAA on cross-border ESOPs: source vs residence tax, foreign tax credit under Section 90 and Form 67, relief at exercise and sale, for India. From Rs 19,999.">
    <link rel="canonical" href="/cross-border-esop-dtaa-implications">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Cross-Border ESOP DTAA Implications 2026 Guide | Patron Accounting">
    <meta property="og:description" content="DTAA on cross-border ESOPs: source vs residence tax, foreign tax credit under Section 90 and Form 67, relief at exercise and sale, for India. From Rs 19,999.">
    <meta property="og:url" content="/cross-border-esop-dtaa-implications">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cross-Border ESOP DTAA Implications 2026 Guide | Patron Accounting">
    <meta name="twitter:description" content="DTAA on cross-border ESOPs: source vs residence tax, foreign tax credit under Section 90 and Form 67, relief at exercise and sale, for India. From Rs 19,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications/#service",
        "name": "Cross-Border ESOP DTAA Implications and Foreign Tax Credit Advisory in India",
        "description": "Application of the relevant Double Taxation Avoidance Agreement to cross-border ESOPs: source versus residence taxation, apportionment of the perquisite, the foreign tax credit under Section 90 and Rule 128, and Form 67 filing, with relief at both exercise and sale.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Double Taxation Avoidance Agreement", "sameAs": "https://en.wikipedia.org/wiki/Tax_treaty" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Cross-Border ESOP DTAA Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Cross-Border ESOP DTAA and Foreign Tax Credit Advisory" },
                    "price": "19999",
                    "priceCurrency": "INR",
                    "description": "Residency and treaty position, apportionment, foreign tax credit computation and Form 67 filing for one year. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "Cross-Border ESOP DTAA", "item": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How does the DTAA prevent double tax on a cross-border ESOP?",
                "acceptedAnswer": { "@type": "Answer", "text": "If your ESOP gain is taxed in the source country and also in India because you are an Indian resident, the relevant DTAA prevents you being taxed twice. India taxes your global income but, under Section 90, gives a foreign tax credit for the tax already paid in the source country on the same gain. The credit is the lower of the Indian tax on that income and the foreign tax paid, so in effect you bear the higher of the two countries' rates, not both." }
            },
            {
                "@type": "Question",
                "name": "What is the difference between Section 90 and Section 91?",
                "acceptedAnswer": { "@type": "Answer", "text": "Section 90 applies when India has a Double Taxation Avoidance Agreement with the country where the income arises, such as the US, the UK or Singapore, and lets you claim relief under that treaty. Section 91 provides unilateral relief where there is no treaty with that country. In both cases an Indian resident can credit the foreign tax against Indian tax on the same income, but the route and terms differ, and Section 90(2) lets you use whichever of the treaty or the Act is more beneficial." }
            },
            {
                "@type": "Question",
                "name": "ESOP pe do desh mein tax lage to credit kaise milega?",
                "acceptedAnswer": { "@type": "Answer", "text": "Agar aapke ESOP gain pe source country aur India dono tax lagate hain, to DTAA ke tahat aap India mein foreign tax credit le sakte hain Section 90 ke zariye. Credit utna milta hai jo kam ho, India ka tax us income pe ya foreign tax jo aapne diya. Iske liye Form 67 return se pehle file karna zaroori hai, warna credit deny ho sakta hai. Hum yeh poora process karte hain." }
            },
            {
                "@type": "Question",
                "name": "When do I need to file Form 67 for an ESOP foreign tax credit?",
                "acceptedAnswer": { "@type": "Answer", "text": "Form 67 must be filed before you file your income tax return for the year in which you claim the credit. It reports the foreign income and the foreign tax paid, supported by a foreign tax certificate or statement and proof of payment. Under Rule 128, a late or missing Form 67 can cause the credit to be denied, leaving you to pay full Indian tax with no relief, so the timing is critical and we file it ahead of the return." }
            },
            {
                "@type": "Question",
                "name": "How is the ESOP gain split between two countries?",
                "acceptedAnswer": { "@type": "Answer", "text": "The employment income in an ESOP, the perquisite, is apportioned between the countries by the period of service in each during the vesting window, under the Dependent Personal Services article of the treaty. If you worked in the source country for part of the grant-to-vest period and in India for the rest, each country taxes its share, and the foreign tax credit relieves the overlap. The exact split depends on your work location over the vesting period, which we map from your records." }
            },
            {
                "@type": "Question",
                "name": "Does the foreign tax credit apply when I sell the shares too?",
                "acceptedAnswer": { "@type": "Answer", "text": "It can. A cross-border ESOP has two taxable events, the perquisite at exercise or vesting and the capital gain on sale, and double tax, with a corresponding credit, can arise at either. If the source country also taxes the capital gain, you claim a credit for that against the Indian capital-gains tax. Some countries, such as Singapore, do not tax capital gains, so at the sale stage there may be nothing to credit; we tailor the claim to the country and treaty." }
            },
            {
                "@type": "Question",
                "name": "Can I just not report the foreign income if tax was already paid abroad?",
                "acceptedAnswer": { "@type": "Answer", "text": "No. As an Indian resident you must report your global income, including the foreign ESOP gain, in your Indian return, and also disclose the foreign shares under Schedule FA. You then claim the foreign tax credit for the tax paid abroad rather than omitting the income. Not reporting it is non-compliance, and with international data-sharing such income is increasingly visible, carrying penalty and Black Money Act exposure. The correct route is full disclosure plus the treaty credit." }
            },
            {
                "@type": "Question",
                "name": "Which countries' ESOPs does this cover?",
                "acceptedAnswer": { "@type": "Answer", "text": "Any country with which India has a DTAA, which includes all the major ESOP source countries such as the United States, the United Kingdom and Singapore. The principles, source versus residence, apportionment, and the foreign tax credit under Section 90 and Form 67, are common across treaties, while the specific rates and the treatment of the sale differ by country. We apply the particular treaty that governs your grant." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications",
        "name": "Cross-Border ESOP DTAA Implications and Foreign Tax Credit Advisory in India",
        "description": "DTAA on cross-border ESOPs: source vs residence tax, foreign tax credit under Section 90 and Form 67, relief at exercise and sale, for India. From Rs 19,999.",
        "url": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/cross-border-esop-dtaa-implications/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to claim DTAA relief and the foreign tax credit on a cross-border ESOP",
        "description": "Step-by-step process to establish the treaty position, apportion the ESOP perquisite, compute the foreign tax credit under Rule 128, and file Form 67 before the income tax return.",
        "totalTime": "P14D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Establish residency and treaty",
                "text": "Fix your residential status for the year and identify the applicable Double Taxation Avoidance Agreement that governs the grant."
            },
            {
                "@type": "HowToStep",
                "name": "Map the taxable events",
                "text": "Identify where the grant, vesting, exercise and sale were taxed across the source and residence countries."
            },
            {
                "@type": "HowToStep",
                "name": "Apportion and compute",
                "text": "Apportion the perquisite by the period of service in each country over the vesting window and compute the foreign tax credit country by country under Rule 128."
            },
            {
                "@type": "HowToStep",
                "name": "File Form 67",
                "text": "Submit Form 67 with the foreign tax certificate and proof of payment before filing the income tax return."
            },
            {
                "@type": "HowToStep",
                "name": "File the return",
                "text": "Complete Schedule FSI and Schedule TR and claim the relief in the income tax return."
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
        "name": "Cross-Border ESOP DTAA Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "DTAA",
                "description": "Double Taxation Avoidance Agreement, a treaty between two countries that allocates taxing rights and relieves double tax on the same income."
            },
            {
                "@type": "DefinedTerm",
                "name": "Foreign Tax Credit",
                "description": "Relief that lets an Indian resident credit tax paid in the source country against Indian tax on the same income, capped at the Indian tax on that income."
            },
            {
                "@type": "DefinedTerm",
                "name": "Form 67",
                "description": "The statement of foreign income and foreign tax that must be filed before the income tax return to claim the foreign tax credit under Rule 128."
            },
            {
                "@type": "DefinedTerm",
                "name": "Section 90",
                "description": "The provision of the Income-tax Act under which India gives treaty relief where a DTAA exists with the source country."
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
                        Cross-Border ESOP DTAA Implications
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Source vs residence:</span> work out which country taxes what, and the apportionment.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Foreign tax credit:</span> claim relief under Section 90 with Form 67, filed on time.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Both stages:</span> relief at exercise or vesting and again on sale.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> ESOP DTAA advisory from Rs 19,999 (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on cross-border equity tax</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Cross-Border ESOP DTAA%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Cross-Border ESOP DTAA%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20have%20a%20cross-border%20ESOP%20and%20want%20help%20with%20the%20DTAA%2C%20foreign%20tax%20credit%20and%20Form%2067.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Cross-Border ESOP DTAA',
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
    'ctaText'    => 'Cross-border professionals and businesses across India trust Patron Accounting for treaty relief, foreign tax credit and ESOP compliance.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">Source vs Residence</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Who Needs It</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">What We Do</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Form 67</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Relief at Both Stages</button>
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
                    <p><strong>&#128204; TL;DR - Cross-Border ESOP DTAA Services at a Glance</strong></p>
                    <p>A cross-border ESOP can be taxed in both the source and residence country. The DTAA prevents double tax by giving a foreign tax credit, claimed under Section 90 via Form 67. We apply it at both exercise and sale.</p>
                </div>
                <p>When your ESOP is granted in one country and taxed while you live in another, two tax systems can claim the same gain, and without the treaty you pay twice. Patron Accounting applies the relevant Double Taxation Avoidance Agreement to your cross-border ESOPs: the source-versus-residence position, the foreign tax credit under Section 90 and Form 67, and relief at both exercise and sale, so the same income is taxed once, not twice.</p>
                <p>This is the treaty layer that sits across every cross-border ESOP, whatever the parent country. Where our country corridor pages cover each country's tax, this page is about the mechanism that ties them together, making sure you do not pay full tax twice on the same gain.</p>
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
                <h2 class="section-title">The Core Problem: Source vs Residence</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Double taxation on an ESOP happens because two countries tax on different bases, and a mobile employee can fall under both.</p>
                    <p><strong>Residence basis:</strong> an Indian tax resident is taxed in India on global income, so the full ESOP gain is taxable here, wherever the company is.</p>
                    <p><strong>Source basis:</strong> the country where the employment was exercised during the vesting period also taxes the part of the gain earned there.</p>
                    <p><strong>The overlap:</strong> if you were granted options while working abroad and they vest or are exercised after you become an Indian resident, both countries can tax the same gain. The DTAA resolves the overlap and the apportionment.</p>
                    <p><strong>Apportionment:</strong> under the Dependent Personal Services article of the treaty, the perquisite is apportioned by the period of service in each country between grant and vesting, so each country taxes only its share, and the credit covers the rest.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Cross-Border ESOP DTAA:</strong></p>
                    <ul>
                        <li><strong>DTAA:</strong> the treaty between India and the source country that allocates taxing rights and relieves double tax.</li>
                        <li><strong>Foreign tax credit:</strong> credit for source-country tax against Indian tax on the same income, capped at the Indian tax.</li>
                        <li><strong>Form 67:</strong> the statement of foreign income and tax, filed before the return, that unlocks the credit.</li>
                        <li><strong>Apportionment:</strong> splitting the perquisite by service period in each country over the grant-to-vest window.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Cross-Border ESOP DTAA</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Relief under</span>
                        <strong>Section 90 & Form 67</strong>
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
            <h2 class="section-title">Who Needs This</h2>
            <div class="content-text">
                
                <ul>
                    <li>Indian-resident employees holding equity in a foreign parent company, such as a US, UK or Singapore parent.</li>
                    <li>Cross-border professionals who were granted options while working abroad and vested or exercised after returning to India.</li>
                    <li>Anyone whose ESOP gain has been taxed in the source country and again in India on the same income.</li>
                    <li>Employees who sold shares where the source country also taxed the capital gain.</li>
                    <li>Advisors and finance teams handling globally mobile employees with foreign-parent equity.</li>
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
            <h2 class="section-title">How the DTAA Gives Relief: Section 90</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 90</td><td>Applies where India has a DTAA with the source country, including the US, the UK and Singapore. You claim relief under that treaty.</td></tr>
                        <tr><td>Section 91</td><td>Applies where no DTAA exists with the source country. India gives unilateral relief.</td></tr>
                        <tr><td>Section 90(2)</td><td>You may apply the DTAA or the Income-tax Act, whichever is more beneficial.</td></tr>
                        <tr><td>Tax-credit method</td><td>Most Indian treaties use the credit method: India taxes global income but credits the source-country tax, so you bear the higher of the two effective rates, not the sum.</td></tr>

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
            <h2 class="section-title">How the Engagement Runs</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From establishing your residency and treaty position through to filing Form 67 and the return, we run the cross-border ESOP analysis end to end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Establish residency</h3>
        <p class="step-description">We fix your residential status for the year and the applicable treaty, and identify which country taxes the grant, the vesting or exercise, and the sale.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Residential status</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Applicable treaty</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M34 40h52M60 14v52" stroke="#14365F" stroke-width="1.2" opacity="0.4"/><path d="M60 14c10 8 10 44 0 52c-10-8-10-44 0-52z" stroke="#F5A623" stroke-width="2" fill="none"/><circle cx="60" cy="40" r="4" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Treaty Position</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Map the events</h3>
        <p class="step-description">We identify where the grant, vesting, exercise and sale were taxed, so the source and residence positions are clear before any computation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grant to sale</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Source vs residence</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="14" y="20" width="40" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="66" y="50" width="40" height="30" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M54 35h12v15" stroke="#E8712C" stroke-width="2" stroke-dasharray="3 3"/><circle cx="34" cy="35" r="4" fill="#14365F"/><circle cx="86" cy="65" r="4" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Events Mapped</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Apportion and compute</h3>
        <p class="step-description">We apportion the perquisite by the period of service in each country over the vesting window and compute the foreign tax credit country by country, capped at the Indian tax on that income.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-country cap</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 128</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="12" width="52" height="76" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="42" y="20" width="36" height="16" rx="3" fill="#fff" stroke="#14365F" stroke-width="1"/><rect x="42" y="44" width="10" height="10" rx="2" fill="#E8712C"/><rect x="55" y="44" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="68" y="44" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="42" y="58" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="55" y="58" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="68" y="58" width="10" height="10" rx="2" fill="#F5A623"/></svg></div>
            <span class="illustration-label">FTC Computed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File Form 67</h3>
        <p class="step-description">We prepare and file Form 67 with the foreign tax certificate and proof of payment before the return, so the credit is not denied on timing.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Before the return</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Evidence attached</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="8" width="60" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="26" x2="78" y2="26" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="42" y1="40" x2="72" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="42" y1="52" x2="72" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="80" cy="74" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M73 74l5 5 9-9" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Form 67 Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File the return</h3>
        <p class="step-description">We complete Schedule FSI and Schedule TR so everything reconciles with Form 67, and claim the relief in the income tax return.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule FSI/TR</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Relief claimed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="26" y="14" width="68" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="38" y1="32" x2="82" y2="32" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="38" y1="46" x2="82" y2="46" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="38" y="58" width="20" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="62" y="58" width="20" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="78" r="3" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Return Filed</span>
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
            <h2 class="section-title">Form 67 and the Filing Process</h2>
            <div class="content-text">
                
                <p>The credit is a right, but only if claimed correctly and on time. The process has a hard deadline that catches many people out.</p>
                <div class="highlight-box" style="margin:16px 0;">
                    <p><strong>The Form 67 timing trap</strong></p>
                    <p>Form 67 must be filed before you file your income tax return. It carries the foreign income and the foreign tax, supported by a tax certificate or statement and proof of payment. A late or missing Form 67 can mean the foreign tax credit is denied entirely, so you pay full Indian tax with no relief. The foreign income also goes in Schedule FSI and the relief in Schedule TR, with the figures matching Form 67.</p>
                </div>
                <p>To support the claim if it is examined, we assemble:</p>
                <ul>
                    <li>The grant letter and vesting schedule for the ESOP.</li>
                    <li>The foreign tax certificate or statement, and proof of the foreign tax paid.</li>
                    <li>Broker statements and exercise or sale confirmations.</li>
                    <li>A record of your work location over the vesting period, for the apportionment.</li>
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
                        <tr><td>Same gain taxed in two countries</td><td>Full tax paid twice on one ESOP gain</td><td>Apply the treaty and claim the foreign tax credit, so the income is taxed once.</td></tr>
                        <tr><td>Form 67 missed, credit at risk</td><td>Credit denied, no relief</td><td>File Form 67 correctly before the return, with the evidence attached.</td></tr>
                        <tr><td>Unclear split between countries</td><td>Wrong amount taxed in each country</td><td>Apportion the perquisite by service period in each country over the vesting window.</td></tr>
                        <tr><td>Relief missed on the sale as well as exercise</td><td>Credit claimed at one stage only</td><td>Claim the credit at both the exercise and sale stages where each is taxed.</td></tr>

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
            <h2 class="section-title">ESOP DTAA Advisory Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 19,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government / statutory fee for Form 67</td><td>Nil - Form 67 is filed online on the income tax portal at no government fee</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Residency and treaty analysis, apportionment, foreign tax credit computation and Form 67 filing for one year, single country</td></tr>
                        <tr><td>Multi-year / multi-country positions</td><td>Scoped on top, quoted to the number of grants, countries and years</td></tr>
                        <tr><td>Return filing</td><td>Quoted separately, see ITR for capital gains and ITR for salary</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Cross-Border ESOP DTAA consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20claim%20treaty%20relief%20on%20my%20cross-border%20ESOP.%20Please%20share%20how%20the%20DTAA%2C%20foreign%20tax%20credit%20and%20Form%2067%20work%20and%20your%20fees." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Single-country, single-year analysis with Form 67</td><td>1 to 2 weeks once documents are in</td></tr>
                        <tr><td>Multi-country or multi-year positions</td><td>2 to 4 weeks</td></tr>
                        <tr><td>Cases needing apportionment across a relocation</td><td>2 to 4 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>We work to the Form 67 and return deadlines</strong>, because filing Form 67 late can cost you the entire credit. Starting the analysis early in the filing season keeps the claim clean and the return right the first time.</p>

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
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <h3 class="feature-title">Taxed once, not twice</h3>
            <p class="feature-text">The same ESOP gain is taxed once, not twice, through the right treaty relief under Section 90 or Section 91.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Credit capped correctly</h3>
            <p class="feature-text">The foreign tax credit is computed and capped correctly, country by country, under Rule 128.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
            <h3 class="feature-title">Form 67 on time</h3>
            <p class="feature-text">Form 67 is filed on time, so the credit is not denied on a technicality.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
            <h3 class="feature-title">Relief at both stages</h3>
            <p class="feature-text">Relief is captured at both exercise and sale, not just one stage, where each is taxed.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Cross-Border Professionals</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years of experience on DTAA, foreign tax credit and cross-border equity for India-US, UK and Singapore cases.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Relief at Both Stages</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>India tax</th><th>Treaty relief</th></tr></thead>
                    <tbody>
                        <tr><td>Exercise / vesting</td><td>Perquisite, taxed as salary under Section 17(2)(vi)</td><td>Foreign tax credit for source-country tax on the perquisite</td></tr>
                        <tr><td>Sale</td><td>Capital gains</td><td>Foreign tax credit for any source-country tax on the gain</td></tr>

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
                
                <p>For the ESOPs themselves, see our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, and for the broader picture our <a href="/esop-services">ESOP services hub</a>. Where a foreign parent grants to an Indian team, see <a href="/esop-for-foreign-parent-indian-subsidiary">ESOP for a foreign parent and Indian subsidiary</a>.</p>
                <p>The tax is filed via <a href="/itr-for-capital-gains">ITR for capital gains</a> and <a href="/itr-for-salary">ITR for salary</a>. For ESOP employees specifically, see <a href="/itr-for-esop-employees">ITR for ESOP employees</a>, and for foreign income on the return, <a href="/itr-for-foreign-income">ITR for foreign income</a>.</p>

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
                
                <p><strong>Treaty relief:</strong> relief for foreign tax on the same income is given under Section 90 of the Income-tax Act where India has a DTAA with the source country, and Section 91 where it does not; Section 90(2) lets the taxpayer apply the more beneficial of the treaty and the Act.</p>
                <p><strong>Allocation of taxing rights:</strong> the Dependent Personal Services article of the relevant treaty, read with the OECD commentary, allocates the right to tax employment income, including ESOP perquisites, between the source and residence states, by reference to where the service was performed.</p>
                <p><strong>Foreign tax credit:</strong> the credit is governed by Rule 128, computed as the lower of the Indian tax on the income and the foreign tax paid, claimed by filing Form 67 before the return, with no carry-forward of excess credit.</p>
                <p><strong>Perquisite and capital gains:</strong> the ESOP is taxed in India as a perquisite under Section 17(2)(vi) at exercise or vesting and as capital gains on sale, and the credit may apply at either or both stages.</p>
                <p>Authoritative sources: <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a>, <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">Income-tax Act, Rules and DTAA texts</a>, <a href="https://incometaxindia.gov.in/pages/about-us/central-board-of-direct-taxes.aspx" target="_blank" rel="noopener">Central Board of Direct Taxes</a> and the <a href="https://dor.gov.in" target="_blank" rel="noopener">Ministry of Finance, Department of Revenue</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on the DTAA, the foreign tax credit and Form 67 for cross-border ESOPs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Cross-Border ESOP DTAA',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How does the DTAA prevent double tax on a cross-border ESOP?</h3>
                        <div class="faq-expanded__a"><p>If your ESOP gain is taxed in the source country and also in India because you are an Indian resident, the relevant DTAA prevents you being taxed twice. India taxes your global income but, under Section 90, gives a foreign tax credit for the tax already paid in the source country on the same gain. The credit is the lower of the Indian tax on that income and the foreign tax paid, so in effect you bear the higher of the two countries' rates, not both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Section 90 and Section 91?</h3>
                        <div class="faq-expanded__a"><p>Section 90 applies when India has a Double Taxation Avoidance Agreement with the country where the income arises, such as the US, the UK or Singapore, and lets you claim relief under that treaty. Section 91 provides unilateral relief where there is no treaty with that country. In both cases an Indian resident can credit the foreign tax against Indian tax on the same income, but the route and terms differ, and Section 90(2) lets you use whichever of the treaty or the Act is more beneficial.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESOP pe do desh mein tax lage to credit kaise milega?</h3>
                        <div class="faq-expanded__a"><p>Agar aapke ESOP gain pe source country aur India dono tax lagate hain, to DTAA ke tahat aap India mein foreign tax credit le sakte hain Section 90 ke zariye. Credit utna milta hai jo kam ho, India ka tax us income pe ya foreign tax jo aapne diya. Iske liye Form 67 return se pehle file karna zaroori hai, warna credit deny ho sakta hai. Hum yeh poora process karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When do I need to file Form 67 for an ESOP foreign tax credit?</h3>
                        <div class="faq-expanded__a"><p>Form 67 must be filed before you file your income tax return for the year in which you claim the credit. It reports the foreign income and the foreign tax paid, supported by a foreign tax certificate or statement and proof of payment. Under Rule 128, a late or missing Form 67 can cause the credit to be denied, leaving you to pay full Indian tax with no relief, so the timing is critical and we file it ahead of the return.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is the ESOP gain split between two countries?</h3>
                        <div class="faq-expanded__a"><p>The employment income in an ESOP, the perquisite, is apportioned between the countries by the period of service in each during the vesting window, under the Dependent Personal Services article of the treaty. If you worked in the source country for part of the grant-to-vest period and in India for the rest, each country taxes its share, and the foreign tax credit relieves the overlap. The exact split depends on your work location over the vesting period, which we map from your records.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does the foreign tax credit apply when I sell the shares too?</h3>
                        <div class="faq-expanded__a"><p>It can. A cross-border ESOP has two taxable events, the perquisite at exercise or vesting and the capital gain on sale, and double tax, with a corresponding credit, can arise at either. If the source country also taxes the capital gain, you claim a credit for that against the Indian capital-gains tax. Some countries, such as Singapore, do not tax capital gains, so at the sale stage there may be nothing to credit; we tailor the claim to the country and treaty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I just not report the foreign income if tax was already paid abroad?</h3>
                        <div class="faq-expanded__a"><p>No. As an Indian resident you must report your global income, including the foreign ESOP gain, in your Indian return, and also disclose the foreign shares under Schedule FA. You then claim the foreign tax credit for the tax paid abroad rather than omitting the income. Not reporting it is non-compliance, and with international data-sharing such income is increasingly visible, carrying penalty and Black Money Act exposure. The correct route is full disclosure plus the treaty credit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Which countries' ESOPs does this cover?</h3>
                        <div class="faq-expanded__a"><p>Any country with which India has a DTAA, which includes all the major ESOP source countries such as the United States, the United Kingdom and Singapore. The principles, source versus residence, apportionment, and the foreign tax credit under Section 90 and Form 67, are common across treaties, while the specific rates and the treatment of the sale differ by country. We apply the particular treaty that governs your grant.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>DTAA exists?</strong> Relief under Section 90.</li>
                    <li><strong>No DTAA?</strong> Unilateral relief under Section 91.</li>
                    <li><strong>Credit amount?</strong> Lower of Indian tax or foreign tax.</li>
                    <li><strong>Form?</strong> Form 67, before the return.</li>
                    <li><strong>Stages?</strong> Exercise and sale.</li>
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
                
                <p>The foreign tax credit turns on Form 67, and Form 67 has to be filed before your return; miss it and you can lose the entire credit and pay full tax twice on the same gain. The apportionment and documentation also need to be assembled while the records are fresh, especially around a relocation. Start the analysis early in the filing season, so the credit is claimed cleanly and the return is right the first time.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Stop Paying Tax Twice on Your ESOPs</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">A cross-border ESOP sits between two tax systems, and the DTAA is what stops the same gain being taxed twice, through the source-versus-residence allocation and the foreign tax credit under Section 90 and Form 67, at both exercise and sale.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of cross-border tax experience, establishes the treaty position, apportions the income, computes and claims the credit, and files Form 67 on time, across the US, UK, Singapore and other corridors, so you pay the right tax once.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20claim%20treaty%20relief%20on%20my%20cross-border%20ESOP.%20Please%20share%20how%20the%20DTAA%2C%20foreign%20tax%20credit%20and%20Form%2067%20work%20and%20your%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Cross-Border ESOP DTAA%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Cross-Border ESOP DTAA%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Cross-Border ESOP and Foreign Tax Credit Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote advisory on the DTAA, foreign tax credit and Form 67 for your ESOPs.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise Indian-resident employees and cross-border professionals nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The DTAA, foreign tax credit and Form 67 process is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for cross-border ESOPs</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-for-foreign-parent-indian-subsidiary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP for Foreign Parent, Indian Subsidiary</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-esop-employees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for ESOP Employees</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every six months for changes in treaty practice, the foreign tax credit rules under Rule 128, and Form 67 procedure (Tier 2 freshness).</p>
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
