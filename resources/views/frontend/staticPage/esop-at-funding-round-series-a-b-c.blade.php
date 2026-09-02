@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP at Funding Round 2026: Series A, B, C Pools | Patron Accounting</title>
    <meta name="description" content="ESOP pool top-ups at Series A, B and C: pre-money vs post-money sizing, the option pool shuffle and term-sheet negotiation, structured in India. From Rs 49,999.">
    <link rel="canonical" href="/esop-at-funding-round-series-a-b-c">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP at Funding Round 2026: Series A, B, C Pools | Patron Accounting">
    <meta property="og:description" content="ESOP pool top-ups at Series A, B and C: pre-money vs post-money sizing, the option pool shuffle and term-sheet negotiation, structured in India. From Rs 49,999.">
    <meta property="og:url" content="/esop-at-funding-round-series-a-b-c">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP at Funding Round 2026: Series A, B, C Pools | Patron Accounting">
    <meta name="twitter:description" content="ESOP pool top-ups at Series A, B and C: pre-money vs post-money sizing, the option pool shuffle and term-sheet negotiation, structured in India. From Rs 49,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c/#service",
        "name": "ESOP at a Funding Round (Series A, B and C) in India",
        "description": "Patron Accounting structures ESOP pools at each funding round for Indian startups, with cap-table and dilution modelling, pre-money versus post-money analysis, pool sizing to the hiring plan, term-sheet support and the Section 62 scheme top-up, valuation refresh and statutory filings, so founders fund their team while protecting their equity.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Venture capital", "sameAs": "https://en.wikipedia.org/wiki/Venture_capital" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP at a Funding Round Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Funding-Round ESOP Pool Structuring and Modelling" },
                    "price": "49999",
                    "priceCurrency": "INR",
                    "description": "Cap-table modelling, pool sizing and term-sheet support per round. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP at a Funding Round", "item": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How much should the ESOP pool be at Series A?",
                "acceptedAnswer": { "@type": "Answer", "text": "Most companies set or refresh the pool to around 10 to 15 percent of fully diluted equity at Series A, with 10 percent the most common, and a larger pool only if the hiring plan justifies it. The right size is driven by the roles you plan to hire over the next 18 to 24 months plus a buffer, not by a round number. Over-allocating dilutes founders unnecessarily, so we model it against your actual roadmap." }
            },
            {
                "@type": "Question",
                "name": "What is the option pool shuffle?",
                "acceptedAnswer": { "@type": "Answer", "text": "The option pool shuffle is what happens when an investor requires the ESOP pool to be created or topped up in the pre-money valuation. Because the pool is added before the new money comes in, the dilution falls entirely on existing shareholders, and the effective pre-money valuation drops. Founders are diluted twice, by the pool and then by the new shares, which is why the pool's timing is a key term-sheet negotiation." }
            },
            {
                "@type": "Question",
                "name": "Pre-money ya post-money pool, founder ke liye kya better hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Founder ke liye post-money pool better hai. Pre-money pool mein poori dilution sirf existing shareholders, yaani founders, pe aati hai. Post-money pool mein dilution naye investor ke saath share hoti hai. Isiliye investors pre-money maangte hain aur founders ko post-money ke liye negotiate karna chahiye, term sheet sign karne se pehle." }
            },
            {
                "@type": "Question",
                "name": "How much does the pool grow at each round?",
                "acceptedAnswer": { "@type": "Answer", "text": "Typically the pool is set up or substantially refreshed at Series A, around 10 percent, then topped up by smaller amounts at later rounds, often around 5 percent at Series B and 2 to 3 percent at Series C. The percentages fall as the company grows, but a smaller percentage on a larger share base can still be a meaningful number of shares. The right top-up always traces back to the hiring plan for that stage." }
            },
            {
                "@type": "Question",
                "name": "Can the ESOP pool be sized too large?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes, and over-sizing is a common and costly mistake. If you create a 20 percent pool but only need 12 percent over the next two years, the extra 8 percent dilutes founders for no reason, and at an exit that unused equity is real money left on the table. The discipline is to size to the hiring roadmap plus a sensible buffer, and to refresh at the next round rather than over-provision now." }
            },
            {
                "@type": "Question",
                "name": "What approvals are needed in India to top up the pool?",
                "acceptedAnswer": { "@type": "Answer", "text": "A pool top-up is a variation of the ESOP scheme, so it needs a board resolution and a shareholder special resolution under Section 62(1)(b) of the Companies Act read with Rule 12. The exercise price for fresh grants is set with a registered-valuer or Rule 11UA valuation, the grants are recorded in the SH-6 register, and the relevant ROC forms are filed. We run all of this alongside the cap-table work." }
            },
            {
                "@type": "Question",
                "name": "Term sheet mein investor ESOP pool kyun maangta hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Investor chahta hai ki company ke paas aage hiring ke liye enough equity reserved ho, taaki team build ho sake bina baar-baar dilution ke. Isiliye term sheet mein pool create ya top-up karne ki demand hoti hai, aksar pre-money, jisse unki apni holding protect rehti hai. Hum is demand ko model karke aapke liye negotiate karte hain." }
            },
            {
                "@type": "Question",
                "name": "Do DPIIT startups get any advantage on funding-round ESOPs?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yes. A DPIIT-recognised startup has wider ESOP eligibility, including the ability to grant to promoter-directors, which a normal private company cannot, and its employees can access the Section 80-IAC-linked deferral of ESOP perquisite tax. This makes the pool more flexible at a funding round. We factor your DPIIT status into the pool design and the tax planning for grantees." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c",
        "name": "ESOP at a Funding Round (Series A, B and C) in India",
        "description": "ESOP pool top-ups at Series A, B and C: pre-money vs post-money sizing, the option pool shuffle and term-sheet negotiation, structured in India. From Rs 49,999.",
        "url": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-at-funding-round-series-a-b-c/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to size and top up an ESOP pool at a funding round in India",
        "description": "Step-by-step process to review the term sheet, model the cap table, size and negotiate the pool, pass the Section 62 resolution and refresh the valuation and filings at a Series A, B or C round.",
        "totalTime": "P28D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Review the term sheet",
                "text": "Understand the round, the pool ask and the pre-money or post-money framing."
            },
            {
                "@type": "HowToStep",
                "name": "Model the cap table",
                "text": "Run the dilution scenarios and quantify the founder impact of each pool option."
            },
            {
                "@type": "HowToStep",
                "name": "Size and negotiate",
                "text": "Set the pool to the 18 to 24 month hiring plan and support the term-sheet negotiation."
            },
            {
                "@type": "HowToStep",
                "name": "Approve the top-up",
                "text": "Amend the scheme and pass the board and shareholder special resolution under Section 62(1)(b)."
            },
            {
                "@type": "HowToStep",
                "name": "Value and file",
                "text": "Refresh the Rule 11UA valuation for new grants and complete the SH-6 register and ROC filings."
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
        "name": "ESOP at a Funding Round Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Option pool shuffle",
                "description": "The double dilution founders suffer when an ESOP pool is created or topped up in the pre-money valuation, lowering the effective pre-money."
            },
            {
                "@type": "DefinedTerm",
                "name": "Pre-money pool",
                "description": "An ESOP pool created before the investment, so the dilution falls on existing shareholders only."
            },
            {
                "@type": "DefinedTerm",
                "name": "Post-money pool",
                "description": "An ESOP pool created after the investment, so the dilution is shared with the new investor."
            },
            {
                "@type": "DefinedTerm",
                "name": "Fully diluted equity",
                "description": "Total shares outstanding assuming all options and convertible securities are exercised, the base for sizing the pool."
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
                        ESOP at a Funding Round: Series A, B and C
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pool top-ups:</span> sized to your hiring plan at Series A, B and C.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>The big call:</span> pre-money versus post-money pool, and the option pool shuffle.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What we do:</span> cap-table modelling, scheme top-up and the statutory filings.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> funding-round ESOP work from Rs 49,999 (Exl GST and Govt. Charges), per round.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on startup equity and cap tables</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP at a Funding Round%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP at a Funding Round%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20we%20are%20raising%20a%20round%20and%20need%20help%20sizing%20and%20structuring%20our%20ESOP%20pool%20and%20modelling%20the%20dilution.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP at a Funding Round',
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
    'ctaText'    => 'Venture-backed founders across India trust Patron Accounting to model the cap table, size the pool and run the statutory top-up at every round.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">Pre vs Post-Money</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">What We Need</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Pool by Round</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">India Filing</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Pre vs Post Table</button>
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
                    <p><strong>&#128204; TL;DR - ESOP at a Funding Round Services at a Glance</strong></p>
                    <p>Each funding round tops up your ESOP pool, and whether it is sized pre-money or post-money decides who absorbs the dilution. We model it, negotiate it and file it, round after round.</p>
                </div>
                <p>Every funding round forces an ESOP decision, and getting the pool wrong can cost founders real ownership. Patron Accounting sizes and structures your ESOP pool at each round, models the dilution before you sign, and helps you win the pre-money versus post-money debate, so your team is funded and your equity is protected.</p>
                <p>An ESOP pool is not set once and forgotten. At each round, investors expect a pool sized to your next 18 to 24 months of hiring, and the term sheet decides whether that pool dilutes only you or everyone. The numbers are large, the decision is final once signed, and most founders only see the impact afterwards. We make sure you see it first.</p>
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
                <h2 class="section-title">Pre-Money vs Post-Money: The Decision That Matters Most</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Whether the pool is created in the pre-money or the post-money valuation decides who bears the dilution. This single choice can be worth several percentage points of founder ownership.</p>
                    <p><strong>Pre-money pool:</strong> created before the investment, so the dilution falls on existing shareholders only, the founders, and it lowers the effective pre-money valuation. Investors prefer it.</p>
                    <p><strong>Post-money pool:</strong> created after the investment, so the dilution is shared with the new investor and the headline pre-money is preserved. Founders prefer it.</p>
                    <p><strong>The option pool shuffle:</strong> when the pool is put in pre-money, founders are diluted twice, once when the pool is created and again when the investor's new shares are issued. A large pre-money pool can cost a founder several points of ownership, which is why the pool is one of the most important terms to negotiate, not an afterthought.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP at a Funding Round:</strong></p>
                    <ul>
                        <li><strong>Option pool shuffle:</strong> double dilution from a pre-money pool.</li>
                        <li><strong>Pre-money:</strong> valuation before the new investment goes in.</li>
                        <li><strong>Post-money:</strong> valuation after the new investment goes in.</li>
                        <li><strong>Fully diluted equity:</strong> the base on which the pool percentage is measured.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP at a Funding Round</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Approval under</span>
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
            <h2 class="section-title">What We Need From You</h2>
            <div class="content-text">
                
                <ul>
                    <li>The term sheet and the proposed round size and valuation.</li>
                    <li>Your current cap table and existing ESOP pool and grants.</li>
                    <li>Your hiring plan for the next 18 to 24 months.</li>
                    <li>The existing ESOP scheme document and prior resolutions.</li>
                    <li>Any investor demands on pool size or timing.</li>
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
            <h2 class="section-title">How the Pool Changes at Each Round</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Series A (~10 percent)</td><td>Set up or refresh the pool for the first big hiring wave.</td></tr>
                        <tr><td>Series B (~5 percent)</td><td>Top up for scaling, on a larger share base.</td></tr>
                        <tr><td>Series C (~2 to 3 percent)</td><td>Smaller refresh as the company matures.</td></tr>
                        <tr><td>Absolute effect</td><td>A smaller percentage at a later round can still be a large number of shares, because more shares are outstanding. Size to the hiring roadmap plus a buffer, not a round-number habit.</td></tr>

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
            <h2 class="section-title">How the Round Engagement Runs</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From the term sheet through to filing, we prioritise the modelling so you are never negotiating blind.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Review the term sheet</h3>
        <p class="step-description">We understand the round, the pool ask and the pre-money or post-money framing before anything is modelled.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Round terms</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pool ask</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="10" width="60" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="26" x2="78" y2="26" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="42" y1="40" x2="72" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="42" y1="52" x2="72" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="42" y1="64" x2="64" y2="64" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div>
            <span class="illustration-label">Term Sheet Read</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Model the cap table</h3>
        <p class="step-description">We run the dilution scenarios, no pool change, post-money top-up and pre-money top-up, and quantify the founder impact of each.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dilution scenarios</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Founder impact</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="34" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 50 L60 16 A34 34 0 0 1 90 50 Z" fill="#E8712C" opacity="0.6"/><path d="M60 50 L90 50 A34 34 0 0 1 78 78 Z" fill="#F5A623" opacity="0.5"/></svg></div>
            <span class="illustration-label">Cap Table Modelled</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Size and negotiate</h3>
        <p class="step-description">We size the pool to the 18 to 24 month hiring plan plus a buffer and support the term-sheet negotiation with the numbers.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sized to hiring</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Term-sheet support</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="80" cy="60" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M52 46 L70 56" stroke="#E8712C" stroke-width="2"/></svg></div>
            <span class="illustration-label">Pool Sized</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Approve the top-up</h3>
        <p class="step-description">We amend the scheme and pool size and pass the board and shareholder special resolution under Section 62(1)(b).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 62</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board + SR</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="30" x2="78" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="60" cy="64" r="13" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 64l5 5 9-9" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Approved</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Value and file</h3>
        <p class="step-description">We refresh the Rule 11UA valuation for new grants and complete the SH-6 register and ROC filings.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 11UA</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-6 register</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="26" y="14" width="68" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="38" y1="32" x2="82" y2="32" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="38" y="50" width="20" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="62" y="50" width="20" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="74" r="3" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Filed</span>
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
            <h2 class="section-title">The India Filing for a Pool Top-Up</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Board approval:</strong> the board approves the scheme amendment and the new pool size.</li>
                    <li><strong>Special resolution:</strong> shareholders approve the top-up under Section 62(1)(b) of the Companies Act.</li>
                    <li><strong>Valuation:</strong> a registered-valuer or Rule 11UA valuation sets the exercise price for fresh grants.</li>
                    <li><strong>Register and filings:</strong> the SH-6 ESOP register is updated and the ROC forms are filed.</li>
                    <li><strong>DPIIT startups:</strong> recognised startups can use the wider eligibility and tax-deferral benefits.</li>
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
                        <tr><td>Investor demands a large pre-money pool</td><td>Founders diluted twice, lower effective pre-money</td><td>Model the shuffle and negotiate size and post-money treatment.</td></tr>
                        <tr><td>Pool sized by habit, not hiring need</td><td>Founder equity given away unnecessarily</td><td>Size to the 18 to 24 month roadmap plus a buffer.</td></tr>
                        <tr><td>Founders surprised by dilution after signing</td><td>The decision is locked once the term sheet is signed</td><td>Show the scenarios before the term sheet is signed.</td></tr>
                        <tr><td>Top-up not properly approved or filed</td><td>Compliance exposure on grants</td><td>Run the Section 62 resolution and complete the SH-6 register.</td></tr>

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
            <h2 class="section-title">Funding-Round ESOP Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 49,999 (Exl GST and Govt. Charges), per round</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Cap-table modelling, pool sizing and term-sheet support</td></tr>
                        <tr><td>Scheme top-up, resolutions and filings</td><td>Scoped to the round</td></tr>
                        <tr><td>Valuation charges</td><td>Billed at actuals</td></tr>
                        <tr><td>Recurring engagement</td><td>Many founders re-engage round after round</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP at a Funding Round consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20model%20my%20ESOP%20pool%20and%20dilution%20before%20signing%20the%20term%20sheet.%20Please%20share%20how%20pre-money%20vs%20post-money%20works%20and%20your%20fees." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Cap-table modelling and pre-money vs post-money analysis</td><td>3 to 5 working days, fast enough to inform a live negotiation</td></tr>
                        <tr><td>Scheme top-up with resolutions and valuation refresh</td><td>2 to 4 weeks, driven by the general-meeting notice</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>We prioritise the modelling so you are never negotiating blind.</strong> The scenarios come first, in days, so you can shape the pool and the pre-money versus post-money treatment while the term sheet is still on the table; the formal top-up then follows on the general-meeting timetable.</p>

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
            <h2 class="section-title">Why Model It With a Specialist</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg></div>
            <h3 class="feature-title">See the dilution first</h3>
            <p class="feature-text">See the founder dilution of every pool option before you sign the term sheet.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
            <h3 class="feature-title">Negotiate from evidence</h3>
            <p class="feature-text">Negotiate the pre-money versus post-money treatment from a position of evidence, not guesswork.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
            <h3 class="feature-title">Size to real needs</h3>
            <p class="feature-text">Size the pool to real hiring needs, not a round-number default that gives away equity.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <h3 class="feature-title">Properly filed</h3>
            <p class="feature-text">Have the top-up properly approved, valued and filed under Indian law.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders Through Every Round</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years on startup equity, cap tables and ESOP compliance through funding rounds.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pre-Money vs Post-Money Pool</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Pre-money pool</th><th>Post-money pool</th></tr></thead>
                    <tbody>
                        <tr><td>Created</td><td>Before the investment</td><td>After the investment</td></tr>
                        <tr><td>Who dilutes</td><td>Existing shareholders only (founders)</td><td>Shared with the new investor</td></tr>
                        <tr><td>Effect on valuation</td><td>Lowers the effective pre-money</td><td>Preserves the headline pre-money</td></tr>
                        <tr><td>Who prefers it</td><td>Investors</td><td>Founders</td></tr>

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
                
                <p>This scenario builds on our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, and the pool top-up runs through <a href="/issue-of-shares">issue of shares</a>. Designing the instrument? See our <a href="/esop-scheme-design">ESOP scheme design</a> and <a href="/esop-valuation-services">ESOP valuation services</a>.</p>
                <p>Venture-backed companies also need <a href="/startup-registration">startup registration</a> for DPIIT benefits, <a href="/private-limited-company-compliance">private limited company compliance</a>, and <a href="/transfer-of-shares">transfer of shares</a> support around the round. See the full <a href="/esop-services">ESOP services hub</a>.</p>

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
                
                <p><strong>ESOP issue:</strong> an ESOP pool and its top-ups are issued under Section 62(1)(b) of the Companies Act read with Rule 12, requiring a board resolution and a shareholder special resolution to approve the scheme and the pool size.</p>
                <p><strong>Valuation:</strong> the exercise price and the perquisite value on exercise are set with a merchant-banker or registered-valuer valuation, with Rule 11UA of the Income-tax Rules governing fair market value for unlisted shares.</p>
                <p><strong>Register:</strong> options granted are recorded in the SH-6 ESOP register, and the relevant ROC forms are filed for the resolution and any allotment on exercise.</p>
                <p><strong>DPIIT startups:</strong> DPIIT-recognised startups have wider ESOP eligibility, including for promoter-directors, and employees may access the Section 80-IAC-linked tax deferral on ESOP perquisite.</p>
                <p>Authoritative sources: the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Section 62, Rule 12), the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (Rule 11UA, ESOP perquisite), <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India</a> (DPIIT recognition), and the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Companies Act and Rules</a>.</p>

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
                    <p class="faq-expanded__lead">Common questions on ESOP pool sizing, the option pool shuffle, and the India approvals at a funding round.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP at a Funding Round',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much should the ESOP pool be at Series A?</h3>
                        <div class="faq-expanded__a"><p>Most companies set or refresh the pool to around 10 to 15 percent of fully diluted equity at Series A, with 10 percent the most common, and a larger pool only if the hiring plan justifies it. The right size is driven by the roles you plan to hire over the next 18 to 24 months plus a buffer, not by a round number. Over-allocating dilutes founders unnecessarily, so we model it against your actual roadmap.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the option pool shuffle?</h3>
                        <div class="faq-expanded__a"><p>The option pool shuffle is what happens when an investor requires the ESOP pool to be created or topped up in the pre-money valuation. Because the pool is added before the new money comes in, the dilution falls entirely on existing shareholders, and the effective pre-money valuation drops. Founders are diluted twice, by the pool and then by the new shares, which is why the pool's timing is a key term-sheet negotiation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Pre-money ya post-money pool, founder ke liye kya better hai?</h3>
                        <div class="faq-expanded__a"><p>Founder ke liye post-money pool better hai. Pre-money pool mein poori dilution sirf existing shareholders, yaani founders, pe aati hai. Post-money pool mein dilution naye investor ke saath share hoti hai. Isiliye investors pre-money maangte hain aur founders ko post-money ke liye negotiate karna chahiye, term sheet sign karne se pehle.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How much does the pool grow at each round?</h3>
                        <div class="faq-expanded__a"><p>Typically the pool is set up or substantially refreshed at Series A, around 10 percent, then topped up by smaller amounts at later rounds, often around 5 percent at Series B and 2 to 3 percent at Series C. The percentages fall as the company grows, but a smaller percentage on a larger share base can still be a meaningful number of shares. The right top-up always traces back to the hiring plan for that stage.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can the ESOP pool be sized too large?</h3>
                        <div class="faq-expanded__a"><p>Yes, and over-sizing is a common and costly mistake. If you create a 20 percent pool but only need 12 percent over the next two years, the extra 8 percent dilutes founders for no reason, and at an exit that unused equity is real money left on the table. The discipline is to size to the hiring roadmap plus a sensible buffer, and to refresh at the next round rather than over-provision now.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What approvals are needed in India to top up the pool?</h3>
                        <div class="faq-expanded__a"><p>A pool top-up is a variation of the ESOP scheme, so it needs a board resolution and a shareholder special resolution under Section 62(1)(b) of the Companies Act read with Rule 12. The exercise price for fresh grants is set with a registered-valuer or Rule 11UA valuation, the grants are recorded in the SH-6 register, and the relevant ROC forms are filed. We run all of this alongside the cap-table work.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Term sheet mein investor ESOP pool kyun maangta hai?</h3>
                        <div class="faq-expanded__a"><p>Investor chahta hai ki company ke paas aage hiring ke liye enough equity reserved ho, taaki team build ho sake bina baar-baar dilution ke. Isiliye term sheet mein pool create ya top-up karne ki demand hoti hai, aksar pre-money, jisse unki apni holding protect rehti hai. Hum is demand ko model karke aapke liye negotiate karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do DPIIT startups get any advantage on funding-round ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Yes. A DPIIT-recognised startup has wider ESOP eligibility, including the ability to grant to promoter-directors, which a normal private company cannot, and its employees can access the Section 80-IAC-linked deferral of ESOP perquisite tax. This makes the pool more flexible at a funding round. We factor your DPIIT status into the pool design and the tax planning for grantees.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Series A pool?</strong> Usually 10 to 15 percent.</li>
                    <li><strong>Best for founders?</strong> Post-money pool.</li>
                    <li><strong>The shuffle?</strong> Pre-money pool, double dilution.</li>
                    <li><strong>Size to?</strong> 18 to 24 month hiring plan.</li>
                    <li><strong>India approval?</strong> Section 62(1)(b) special resolution.</li>
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
                
                <p>The pool decision is made in the term sheet, and once it is signed the dilution is locked. The time to model the scenarios and negotiate the pre-money versus post-money treatment is before you sign, not after. Bring us in while the term sheet is still on the table, when a few days of modelling can protect several points of founder ownership for good.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Protect Your Equity at the Next Round</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">At every funding round, the ESOP pool is both a hiring tool and a dilution event, and the pre-money versus post-money choice can quietly cost founders real ownership.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of startup-equity experience, models your cap table, sizes the pool to your hiring plan, supports the term-sheet negotiation and runs the statutory top-up, round after round, so you fund your team without giving away more than you need to.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20model%20my%20ESOP%20pool%20and%20dilution%20before%20signing%20the%20term%20sheet.%20Please%20share%20how%20pre-money%20vs%20post-money%20works%20and%20your%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP at a Funding Round%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP at a Funding Round%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Funding-Round ESOP Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote support on pool sizing, dilution modelling and the statutory top-up for your round.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise venture-backed founders and CFOs nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The cap-table modelling, pool sizing and Section 62 top-up is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for funding-round ESOPs</div>
                <div class="pa-cross-grid"><a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-scheme-design" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-valuation-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Valuation Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Compliance</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every six months for changes to Section 62 or Rule 12 ESOP rules, Rule 11UA valuation, DPIIT startup ESOP eligibility or Section 80-IAC deferral, and shifts in market term-sheet pool norms (Tier 2 freshness).</p>
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
