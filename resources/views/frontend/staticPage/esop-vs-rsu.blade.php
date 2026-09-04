@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>ESOP vs RSU in India 2026: Key Differences | Patron</title>
    <meta name="description" content="ESOP gives an option to buy shares at exercise; RSU grants free shares at vesting. RSU is not a separate instrument in India. A clear, free comparison guide.">
    <link rel="canonical" href="/esop-vs-rsu">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP vs RSU in India 2026: Key Differences Explained | Patron Accounting">
    <meta property="og:description" content="ESOP gives an option to buy shares at exercise; RSU grants free shares at vesting. RSU is not a separate instrument in India. A clear, free comparison guide.">
    <meta property="og:url" content="/esop-vs-rsu">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP vs RSU in India 2026: Key Differences Explained | Patron Accounting">
    <meta name="twitter:description" content="ESOP gives an option to buy shares at exercise; RSU grants free shares at vesting. RSU is not a separate instrument in India. A clear, free comparison guide.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-vs-rsu/#service",
        "name": "ESOP vs RSU",
        "description": "Patron Accounting advises companies and employees on the difference between ESOPs and RSUs, helps choose the right equity instrument for the company stage, and structures RSUs under Indian law as an equity-settled ESOP or a cash-settled stock appreciation right, with the tax and compliance implications, across India.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-vs-rsu" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Restricted stock unit", "sameAs": "https://en.wikipedia.org/wiki/Restricted_stock" }]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-vs-rsu/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP vs RSU", "item": "https://www.patronaccounting.com/esop-vs-rsu" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-vs-rsu/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the difference between ESOP and RSU?",
                "acceptedAnswer": { "@type": "Answer", "text": "An ESOP gives the right to buy company shares at a pre-set exercise price after vesting, so the employee pays to acquire them. An RSU grants shares free of cost once vesting conditions are met, with no purchase. ESOPs can go underwater if the price falls below the exercise price, while RSUs almost always retain value, making them steadier but with their own phantom-tax risk." }
            },
            {
                "@type": "Question",
                "name": "Is RSU legal in India?",
                "acceptedAnswer": { "@type": "Answer", "text": "RSUs are used in India, but RSU is not a separately recognised instrument under the Companies Act. Companies deliver RSUs either as an ESOP with a token exercise price, as a Section 62(1)(c) preferential allotment, or as a cash-settled stock appreciation right or phantom stock. So an RSU is legal, but it is structured through one of these recognised routes rather than as a standalone RSU." }
            },
            {
                "@type": "Question",
                "name": "ESOP aur RSU mein kya difference hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "ESOP ek option hai jisme aap exercise price dekar shares khareedte ho. RSU mein shares free milte hain vesting par. India mein RSU alag instrument nahi hai, isliye use ESOP ya cash-settled SAR ke roop mein structure karte hain. ESOP exercise par tax hota hai, RSU vesting par." }
            },
            {
                "@type": "Question",
                "name": "How are RSUs taxed in India?",
                "acceptedAnswer": { "@type": "Answer", "text": "RSUs are taxed as a salary perquisite at vesting, on the full fair market value of the shares, since they are granted free. The employer deducts TDS on that value. When the shares are later sold, the gain over the vesting-date FMV is taxed as capital gains. Foreign-parent RSUs are also taxable in India at vesting, with DTAA relief for any tax withheld abroad." }
            },
            {
                "@type": "Question",
                "name": "Which is better, ESOP or RSU?",
                "acceptedAnswer": { "@type": "Answer", "text": "Neither is universally better; it depends on stage and risk. ESOPs suit early-stage startups, costing the company no cash on grant and rewarding future upside, but they can go underwater. RSUs suit listed or late-stage companies and foreign parents, giving steadier value, but they create an immediate tax at vesting. In practice companies usually offer one based on their stage." }
            },
            {
                "@type": "Question",
                "name": "Why do foreign companies grant RSUs to Indian employees?",
                "acceptedAnswer": { "@type": "Answer", "text": "US and other foreign parents typically grant RSUs as their global standard, so Indian-subsidiary employees receive the same instrument. The shares are foreign-listed and granted free on vesting. For the Indian employee, the vesting value is taxable in India as a perquisite, the foreign country may withhold tax, and DTAA relief plus Schedule FA disclosure then apply on the Indian return." }
            },
            {
                "@type": "Question",
                "name": "RSU par phantom tax kya hota hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Phantom tax tab hota hai jab aap RSU ki vesting-date value par perquisite tax de dete ho, lekin baad mein share price gir jaata hai. Aapne unchi value par tax diya, par asset ab kam ka hai, yaani real economic loss. Capital loss se yeh sirf partially recover hota hai." }
            },
            {
                "@type": "Question",
                "name": "Can a company offer both ESOPs and RSUs?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. A company can run both, for example ESOPs for early employees and founders and RSUs for senior or later hires, or align with a foreign parent's RSU plan while using ESOPs locally. Each is structured and taxed on its own basis, and the governance, valuation and registers must be maintained for both. The right mix depends on stage, cash and dilution goals." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-vs-rsu",
        "name": "ESOP vs RSU",
        "description": "ESOP gives an option to buy shares at exercise; RSU grants free shares at vesting. RSU is not a separate instrument in India. A clear, free comparison guide.",
        "url": "https://www.patronaccounting.com/esop-vs-rsu",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-vs-rsu/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-vs-rsu/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How RSUs are structured in India",
        "description": "Because RSU is not a defined instrument under the Companies Act, a company delivers it as an equity-settled ESOP or a cash-settled SAR or phantom stock, with foreign-parent cross-border considerations.",
        "totalTime": "P21D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Equity-settled (ESOP-style)",
                "text": "The RSU is delivered as an ESOP with a near-zero or token exercise price, or via a Section 62(1)(c) preferential allotment with Section 42 private-placement compliance. The employee ends up with real shares, taxed at vesting as a perquisite."
            },
            {
                "@type": "HowToStep",
                "name": "Cash-settled (SAR or phantom)",
                "text": "The company grants a stock appreciation right or phantom stock that pays cash equal to the share value or its appreciation, with no shares issued, and the payout is taxed as salary."
            },
            {
                "@type": "HowToStep",
                "name": "Foreign-parent route",
                "text": "Where a US or other foreign parent grants RSUs to Indian-subsidiary employees, the shares are foreign, taxed in India at vesting, and may also face withholding abroad, so cross-border structuring matters."
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
        "name": "ESOP vs RSU Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "ESOP",
                "description": "An option to buy shares at a pre-set exercise price after vesting, under Section 62(1)(b)."
            },
            {
                "@type": "DefinedTerm",
                "name": "RSU",
                "description": "A commitment to give shares free of cost once vesting conditions are met; no exercise price is paid."
            },
            {
                "@type": "DefinedTerm",
                "name": "Phantom tax",
                "description": "Perquisite tax paid on the RSU vesting-date value that is not recovered if the share price later falls."
            },
            {
                "@type": "DefinedTerm",
                "name": "Underwater option",
                "description": "An ESOP whose exercise price is above the current share price, so the option has no value."
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
                        ESOP vs RSU
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>ESOP:</span> option to buy at an exercise price after vesting (Section 62(1)(b)).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>RSU:</span> free shares on vesting, common at foreign-parent companies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>India note:</span> RSU is structured as an ESOP or as cash-settled SAR or phantom stock.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax:</span> ESOP taxed at exercise; RSU taxed at vesting; both at sale as capital gains.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on equity compensation</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP vs RSU%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20vs%20RSU%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20vs%20RSU%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP vs RSU',
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
    'ctaText'    => 'Founders and foreign-parent subsidiaries trust Patron Accounting to choose between ESOPs and RSUs and to structure RSUs correctly under Indian law.',
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
            
            <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth'})">At a Glance</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">What Is an ESOP</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">What Is an RSU</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Full Comparison</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">RSU in India</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">How Taxed</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Pitfalls</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Get Help</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Why Advice</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">By Stage</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth'})">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP vs RSU at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP vs RSU Services at a Glance</strong></p>
                    <p>An ESOP gives the right to buy shares at an exercise price after vesting; an RSU gives shares free on vesting. In India, RSUs are structured as ESOPs or as cash-settled rights, not as a separate instrument.</p>
                </div>
                <p>ESOP or RSU? The short answer: an ESOP is an option to buy shares, an RSU is a grant of free shares, and in India an RSU is not a separate instrument. This free guide explains the difference in structure, cost, vesting, taxation and risk, and how RSUs are actually structured under Indian law.</p>
                <p>ESOP and RSU are the two most common forms of equity compensation, and the most confused. The difference is simple at the core: an ESOP is an option you choose to exercise by paying a price, while an RSU is a promise of free shares once you vest. The Indian twist is that RSU is not a defined instrument under the Companies Act, so it is delivered through an ESOP or a cash-settled structure.</p>
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
                <h2 class="section-title">What Is an ESOP</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An ESOP, or Employee Stock Option Plan, grants the right but not the obligation to buy company shares at a pre-set exercise price after a vesting period, under Section 62(1)(b) of the Companies Act. The employee pays to acquire the shares.</p>
                    <p>Because the employee pays the exercise price, an ESOP only has value if the share price rises above that price. If it does not, the option is underwater and the employee simply lets it lapse. ESOPs are the default for Indian startups because they cost the company no cash on grant and reward future growth.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP vs RSU:</strong></p>
                    <ul>
                        <li><strong>ESOP:</strong> an option to buy shares at an exercise price under Section 62(1)(b).</li>
                        <li><strong>RSU:</strong> free shares on vesting; no exercise price paid.</li>
                        <li><strong>Phantom tax:</strong> RSU tax paid on vesting value not recovered if the price later falls.</li>
                        <li><strong>Underwater:</strong> an ESOP whose exercise price is above the current share price.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP vs RSU</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESOP issued under</span>
                        <strong>Section 62(1)(b)</strong>
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
            <h2 class="section-title">What Is an RSU</h2>
            <div class="content-text">
                
                <p>An RSU, or Restricted Stock Unit, is a company's commitment to deliver shares free of cost once vesting conditions of time or performance are met. There is no exercise price to pay.</p>
                <p>Because the shares are free, an RSU almost always has value at vesting, which makes it steadier than an ESOP. RSUs are predominantly granted by listed multinationals and foreign parents. In India, since RSU is not a defined instrument, it is delivered either as an ESOP with a token exercise price or as a cash-settled right such as a stock appreciation right.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP vs RSU: The Full Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Nature</td><td>Option to buy shares (ESOP) vs free grant of shares (RSU)</td></tr>
                        <tr><td>Cost to employee</td><td>Exercise price payable (ESOP) vs no purchase cost (RSU)</td></tr>
                        <tr><td>Indian law</td><td>Section 62(1)(b), recognised (ESOP) vs not separate; via ESOP or cash-settled (RSU)</td></tr>
                        <tr><td>Perquisite tax</td><td>At exercise (ESOP) vs at vesting (RSU)</td></tr>
                        <tr><td>Capital gains</td><td>At sale, cost = FMV at exercise (ESOP) vs at sale, cost = FMV at vesting (RSU)</td></tr>
                        <tr><td>Downside</td><td>Can go underwater (ESOP) vs phantom-tax if price falls (RSU)</td></tr>
                        <tr><td>Best for</td><td>Startups, high-growth (ESOP) vs listed, foreign-parent firms (RSU)</td></tr>

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
            <h2 class="section-title">How RSUs Are Structured in India</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">RSU is not a defined instrument under the Companies Act, so a company cannot simply issue an RSU as such. It chooses one of these routes.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Route A</span>
        <h3 class="step-title">Equity-settled (ESOP-style)</h3>
        <p class="step-description">The RSU is delivered as an ESOP with a near-zero or token exercise price, or via a Section 62(1)(c) preferential allotment with Section 42 private-placement compliance. The employee ends up with real shares, taxed at vesting as a perquisite.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Token exercise price</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>62(1)(c) / 42</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="20" width="52" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="44" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Real</text><text x="60" y="58" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">shares</text></svg></div>
            <span class="illustration-label">Real Shares</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Route B</span>
        <h3 class="step-title">Cash-settled (SAR or phantom)</h3>
        <p class="step-description">The company grants a stock appreciation right or phantom stock that pays cash equal to the share value or its appreciation, with no shares issued. This avoids dilution and share-issue compliance, and the payout is taxed as salary.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No dilution</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Salary tax</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="38" width="60" height="36" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="56" r="9" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.4"/><text x="60" y="60" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rs</text></svg></div>
            <span class="illustration-label">Cash Settled</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Cross-border</span>
        <h3 class="step-title">Foreign-parent route</h3>
        <p class="step-description">Where a US or other foreign parent grants RSUs to Indian-subsidiary employees, the shares are foreign, taxed in India at vesting, and may also face withholding abroad, so cross-border structuring matters.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Foreign shares</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DTAA relief</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M34 50 h52 M60 24 a36 36 0 010 52 M60 24 a36 36 0 000 52" stroke="#F5A623" stroke-width="1.2" fill="none"/><circle cx="78" cy="38" r="3" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Cross-Border</span>
            <span class="step-number-large">03</span>
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
            <h2 class="section-title">How ESOPs and RSUs Are Taxed</h2>
            <div class="content-text">
                
                <p>Both are taxed twice: as a salary perquisite first, then as capital gains on sale. The timing of the first stage is the key difference.</p>
                <ul>
                    <li><strong>ESOP perquisite at exercise:</strong> the gap between FMV on exercise and the exercise price is taxed as salary.</li>
                    <li><strong>RSU perquisite at vesting:</strong> the full FMV on vesting is taxed as salary, since the shares are free.</li>
                    <li><strong>Capital gains at sale:</strong> for both, sale price minus the FMV already taxed is the capital gain, classified by holding period.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>The phantom-tax trap on RSUs</strong></p>
                    <p>RSU perquisite tax is paid on the vesting-date value. If the share price then falls sharply, the employee has paid tax on a value they may never realise, a genuine economic loss that a later capital loss only partly offsets.</p>
                </div>
                <p style="margin-top:16px;"><strong>Which one should a company choose:</strong> early-stage startups use ESOPs (no cash cost, future upside); listed or late-stage companies use ESOP-structured RSUs (steadier value, easy to explain); foreign parents align with the global RSU plan, structured for Indian compliance and tax; and dilution-averse companies use cash-settled SAR or phantom stock that mimics equity without issuing shares.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Pitfalls and How to Avoid Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Treating RSU as a standalone Indian instrument</td><td>Compliance gap</td><td>Structure it as an ESOP or a cash-settled right with the correct compliance.</td></tr>
                        <tr><td>Ignoring the RSU phantom-tax risk</td><td>Tax on unrealised value</td><td>Plan liquidity or sell-to-cover for the vesting-date tax outflow.</td></tr>
                        <tr><td>Mismatched valuation between grant and tax</td><td>Wrong perquisite</td><td>Align the FMV used for the perquisite with a proper valuation.</td></tr>
                        <tr><td>Foreign RSU double taxation</td><td>Taxed twice</td><td>Use DTAA relief and Form 67 for tax withheld abroad.</td></tr>

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
            <h2 class="section-title">Get Help Choosing and Structuring</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>This comparison</td><td>A free explainer, no service price</td></tr>
                        <tr><td>Initial consultation</td><td>Free, on instrument choice and India structuring</td></tr>
                        <tr><td>Structuring and compliance work</td><td>Fixed-scope quote after the consultation</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP vs RSU consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20vs%20RSU%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Structuring Take</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Choosing the instrument</td><td>A single advisory conversation</td></tr>
                        <tr><td>Putting it in place (scheme, approvals, valuation, documentation)</td><td>2 to 4 weeks depending on the route</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Cash-settled structures are usually faster than a fresh equity issue</strong>, since there is no share-issue compliance to complete.</p>

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
            <h2 class="section-title">Why Get Expert Advice</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Right instrument</h3>
            <p class="feature-text">The right instrument for your stage, cash position and dilution tolerance.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></div>
            <h3 class="feature-title">Structured for India</h3>
            <p class="feature-text">RSUs structured correctly under Indian law, not treated as a foreign concept.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
            <h3 class="feature-title">Tax timing planned</h3>
            <p class="feature-text">Tax timing planned, so the perquisite and any phantom-tax risk are managed.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20M12 2a15 15 0 000 20"/></svg></div>
            <h3 class="feature-title">Cross-border aligned</h3>
            <p class="feature-text">Foreign-parent plans aligned with Indian compliance and DTAA relief.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders and Foreign-Parent Subsidiaries</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years structuring equity compensation for startups, founders and foreign-parent subsidiaries.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP vs RSU by Company Stage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Typical Choice</th><th>Why</th></tr></thead>
                    <tbody>
                        <tr><td>Seed / early startup</td><td>ESOP</td><td>No cash cost, upside reward</td></tr>
                        <tr><td>Growth / pre-IPO</td><td>ESOP or RSU</td><td>Mix of upside and certainty</td></tr>
                        <tr><td>Listed company</td><td>RSU</td><td>Steady value, easy to explain</td></tr>
                        <tr><td>Foreign parent</td><td>RSU (structured)</td><td>Global plan alignment</td></tr>

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
                
                <p>Chosen ESOPs? See our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, which cover the perquisite tax computation at exercise and the wider scheme work. Considering an equity grant for contribution? The same team advises on sweat equity alongside ESOPs.</p>
                <p>Holding foreign-parent RSUs? The cross-border tax for NRI and non-resident employees and the ESOP perquisite reporting on your return are handled within our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a> and <a href="/income-tax-return">income tax return</a> filing. See also the full <a href="/esop-services">ESOP services hub</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Tax Framework</h2>
            <div class="content-text">
                
                <p><strong>ESOP:</strong> granted under Section 62(1)(b) of the Companies Act as an option to buy shares; the perquisite at exercise is taxed under Section 17(2)(vi) of the Income-tax Act.</p>
                <p><strong>RSU in India:</strong> not a separate statutory instrument; delivered as an equity-settled ESOP, a Section 62(1)(c) preferential allotment with Section 42 compliance, or a cash-settled SAR or phantom stock taxed as salary.</p>
                <p><strong>Taxation:</strong> RSU perquisite is taxed at vesting on full FMV; ESOP perquisite at exercise on FMV minus exercise price; both are taxed as capital gains on sale, with the cost base equal to the FMV already taxed.</p>
                <p><strong>Listed and foreign:</strong> listed-company plans follow the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021; foreign-parent RSUs may attract overseas withholding with DTAA relief in India.</p>
                <p>Authoritative sources: the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Companies Act, Section 62), the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (perquisite, capital gains), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>, and <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> (SBEB and Sweat Equity Regulations 2021).</p>

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
                    <p class="faq-expanded__lead">Common questions on how ESOPs and RSUs differ, RSU legality and taxation in India, which suits which stage, and foreign-parent RSUs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP vs RSU',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the difference between ESOP and RSU?</h3>
                        <div class="faq-expanded__a"><p>An ESOP gives the right to buy company shares at a pre-set exercise price after vesting, so the employee pays to acquire them. An RSU grants shares free of cost once vesting conditions are met, with no purchase. ESOPs can go underwater if the price falls below the exercise price, while RSUs almost always retain value, making them steadier but with their own phantom-tax risk.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is RSU legal in India?</h3>
                        <div class="faq-expanded__a"><p>RSUs are used in India, but RSU is not a separately recognised instrument under the Companies Act. Companies deliver RSUs either as an ESOP with a token exercise price, as a Section 62(1)(c) preferential allotment, or as a cash-settled stock appreciation right or phantom stock. So an RSU is legal, but it is structured through one of these recognised routes rather than as a standalone RSU.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESOP aur RSU mein kya difference hai?</h3>
                        <div class="faq-expanded__a"><p>ESOP ek option hai jisme aap exercise price dekar shares khareedte ho. RSU mein shares free milte hain vesting par. India mein RSU alag instrument nahi hai, isliye use ESOP ya cash-settled SAR ke roop mein structure karte hain. ESOP exercise par tax hota hai, RSU vesting par.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are RSUs taxed in India?</h3>
                        <div class="faq-expanded__a"><p>RSUs are taxed as a salary perquisite at vesting, on the full fair market value of the shares, since they are granted free. The employer deducts TDS on that value. When the shares are later sold, the gain over the vesting-date FMV is taxed as capital gains. Foreign-parent RSUs are also taxable in India at vesting, with DTAA relief for any tax withheld abroad.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Which is better, ESOP or RSU?</h3>
                        <div class="faq-expanded__a"><p>Neither is universally better; it depends on stage and risk. ESOPs suit early-stage startups, costing the company no cash on grant and rewarding future upside, but they can go underwater. RSUs suit listed or late-stage companies and foreign parents, giving steadier value, but they create an immediate tax at vesting. In practice companies usually offer one based on their stage.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Why do foreign companies grant RSUs to Indian employees?</h3>
                        <div class="faq-expanded__a"><p>US and other foreign parents typically grant RSUs as their global standard, so Indian-subsidiary employees receive the same instrument. The shares are foreign-listed and granted free on vesting. For the Indian employee, the vesting value is taxable in India as a perquisite, the foreign country may withhold tax, and DTAA relief plus Schedule FA disclosure then apply on the Indian return.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">RSU par phantom tax kya hota hai?</h3>
                        <div class="faq-expanded__a"><p>Phantom tax tab hota hai jab aap RSU ki vesting-date value par perquisite tax de dete ho, lekin baad mein share price gir jaata hai. Aapne unchi value par tax diya, par asset ab kam ka hai, yaani real economic loss. Capital loss se yeh sirf partially recover hota hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a company offer both ESOPs and RSUs?</h3>
                        <div class="faq-expanded__a"><p>Yes. A company can run both, for example ESOPs for early employees and founders and RSUs for senior or later hires, or align with a foreign parent's RSU plan while using ESOPs locally. Each is structured and taxed on its own basis, and the governance, valuation and registers must be maintained for both. The right mix depends on stage, cash and dilution goals.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>ESOP?</strong> Option to buy at an exercise price.</li>
                    <li><strong>RSU?</strong> Free shares on vesting.</li>
                    <li><strong>RSU in India?</strong> Structured as ESOP or cash-settled.</li>
                    <li><strong>ESOP tax?</strong> At exercise.</li>
                    <li><strong>RSU tax?</strong> At vesting, on full FMV.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Getting This Right Matters</h2>
            <div class="content-text">
                
                <p>Choosing the wrong instrument, or structuring an RSU as if it were a recognised Indian security, creates compliance and tax problems that surface in audit or due diligence. Decide the instrument and structure it correctly at the start, so the equity plan holds up when investors look closely.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Choose the Right Equity Instrument</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP and RSU answer the same question, how to reward people with equity, in two different ways: an option you pay to exercise, or free shares on vesting. The Indian reality is that RSU is delivered through an ESOP or a cash-settled structure, with tax at vesting rather than exercise.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of equity-compensation experience, helps you choose and structure the right instrument for your stage and your tax position.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20vs%20RSU%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP vs RSU%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20vs%20RSU%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Equity Compensation Advisory Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote advice on ESOPs, RSUs and the right equity instrument for founders and foreign-parent subsidiaries.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise founders and foreign-parent subsidiaries nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The instrument choice and India structuring is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for equity compensation</div>
                <div class="pa-cross-grid">
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every six months for changes to ESOP or RSU taxation, capital-gains rate changes, SEBI SBEB amendments, new structuring guidance, Income-tax Act 2025 mapping, and any recognition of RSUs as a distinct instrument (Tier 2 freshness).</p>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
