@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP at Acquisition 2026: Change of Control | Patron Accounting</title>
    <meta name="description" content="What happens to ESOPs in an acquisition: single vs double-trigger acceleration, unvested options, rollover and cash-out, structured in India. From Rs 49,999.">
    <link rel="canonical" href="/esop-at-acquisition-and-change-of-control">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP at Acquisition 2026: Change of Control | Patron Accounting">
    <meta property="og:description" content="What happens to ESOPs in an acquisition: single vs double-trigger acceleration, unvested options, rollover and cash-out, structured in India. From Rs 49,999.">
    <meta property="og:url" content="/esop-at-acquisition-and-change-of-control">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP at Acquisition 2026: Change of Control | Patron Accounting">
    <meta name="twitter:description" content="What happens to ESOPs in an acquisition: single vs double-trigger acceleration, unvested options, rollover and cash-out, structured in India. From Rs 49,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control/#service",
        "name": "ESOP at Acquisition and Change of Control Structuring in India",
        "description": "Patron Accounting structures and negotiates ESOP treatment at an acquisition or change of control for Indian companies: single and double-trigger acceleration, unvested-option treatment, rollover or conversion into acquirer equity, vested-option cash-out, and the perquisite and capital-gains tax, with deal review, modelling, documentation and employee communication.",
        "provider": { "@id": "https://www.patronaccounting.com/#organization" },
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control" },
        "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
        "about": [{ "@type": "Thing", "name": "Mergers and acquisitions", "sameAs": "https://en.wikipedia.org/wiki/Mergers_and_acquisitions" }],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP at Acquisition Service Plans",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": { "@type": "Service", "name": "Change-of-Control ESOP Structuring and Modelling" },
                    "price": "49999",
                    "priceCurrency": "INR",
                    "description": "Deal review, acceleration structuring and per-employee outcome modelling. Starting price, exclusive of GST and government charges."
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control/#breadcrumb",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "ESOP Services", "item": "https://www.patronaccounting.com/esop-services" },
            { "@type": "ListItem", "position": 3, "name": "ESOP at Acquisition", "item": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "@id": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control/#faq",
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What happens to ESOPs when a company is acquired?",
                "acceptedAnswer": { "@type": "Answer", "text": "It depends on the ESOP rules and the deal. Vested options are usually cashed out at the deal price less the exercise price, or exchanged for acquirer shares. Unvested options may accelerate under a trigger clause, be rolled over or converted into acquirer options, be assumed on the original schedule, or lapse if not assumed. The acquirer often puts in a new retention plan. We map the exact treatment for each grant before the deal closes." }
            },
            {
                "@type": "Question",
                "name": "What is the difference between single-trigger and double-trigger acceleration?",
                "acceptedAnswer": { "@type": "Answer", "text": "Single-trigger acceleration vests unvested options on one event, a change of control, so options vest the moment the deal closes. Double-trigger acceleration requires two events: a change of control and a qualifying termination, where the employee is let go without cause or resigns for good reason within a set window after closing. Double-trigger is the market standard because it protects employees while keeping those who stay on their vesting schedule." }
            },
            {
                "@type": "Question",
                "name": "Acquisition mein unvested ESOP ka kya hota hai?",
                "acceptedAnswer": { "@type": "Answer", "text": "Unvested ESOP ka treatment deal aur scheme pe depend karta hai. Wo accelerate ho sakte hain trigger clause ke tahat, acquirer ke options mein roll over ya convert ho sakte hain, original schedule pe assume ho sakte hain, ya lapse ho sakte hain agar assume na ho. Aksar acquirer naya retention plan deta hai. Hum har grant ka exact treatment deal se pehle map karte hain." }
            },
            {
                "@type": "Question",
                "name": "Why do acquirers prefer double-trigger acceleration?",
                "acceptedAnswer": { "@type": "Answer", "text": "Acquirers prefer double-trigger because single-trigger vests everyone the day the deal closes, which removes the incentive for key people to stay and contribute under new ownership. With double-trigger, unvested options accelerate only if the employee is also terminated without cause, so those who remain keep vesting normally. This protects the acquirer's retention goals while still safeguarding employees who are let go after the deal." }
            },
            {
                "@type": "Question",
                "name": "How is an ESOP cash-out taxed in India?",
                "acceptedAnswer": { "@type": "Answer", "text": "There are two tax points. When the option is exercised, the spread between the fair market value and the exercise price is taxed as a salary perquisite. When the resulting shares are later sold or cashed out in the deal, the gain over the value already taxed at exercise is taxed as capital gains, short-term or long-term depending on the holding period. A direct cash settlement of options is taxed according to its character, which we assess for each case." }
            },
            {
                "@type": "Question",
                "name": "What is an ESOP rollover in an acquisition?",
                "acceptedAnswer": { "@type": "Answer", "text": "A rollover is where, instead of cashing out, option holders receive equity in the acquiring company, with their existing options converted into acquirer options on an agreed exchange ratio, or their cash proceeds reinvested into a new incentive scheme. Financial buyers such as private equity funds often offer key employees a rollover to keep them invested in the future business. We model the exchange ratio and the resulting position so employees understand what they are taking." }
            },
            {
                "@type": "Question",
                "name": "Founder ke ESOP exit pe accelerate karne chahiye kya?",
                "acceptedAnswer": { "@type": "Answer", "text": "Yeh deal aur retention goals pe depend karta hai. Single-trigger founder aur team ko turant vest kar deta hai, lekin acquirer ko retention ki chinta hoti hai. Double-trigger zyada balanced hai. Key executives ke liye kabhi-kabhi fuller acceleration negotiate hota hai kyunki wo exit ke liye critical hote hain. Hum aapke deal ke hisaab se structure karte hain." }
            },
            {
                "@type": "Question",
                "name": "What if our ESOP has no acceleration clause at all?",
                "acceptedAnswer": { "@type": "Answer", "text": "Then unvested options follow whatever the deal and the acquirer decide, and employees who have not yet vested can lose that value, which has caused real disputes in past Indian exits. If there is no clause, the treatment becomes a negotiation: we work to secure acceleration, rollover or a retention plan in the deal terms so the team is not left empty-handed. The lesson for others is to build a clear change-of-control clause into the scheme from the start." }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control",
        "name": "ESOP at Acquisition and Change of Control Structuring in India",
        "description": "What happens to ESOPs in an acquisition: single vs double-trigger acceleration, unvested options, rollover and cash-out, structured in India. From Rs 49,999.",
        "url": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control",
        "inLanguage": "en-IN",
        "isPartOf": { "@id": "https://www.patronaccounting.com/" },
        "about": { "@id": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control/#service" },
        "datePublished": "2026-06-02T08:00:00+05:30",
        "dateModified": "2026-06-02T08:00:00+05:30",
        "author": { "@id": "https://www.patronaccounting.com/#team" },
        "breadcrumb": { "@id": "https://www.patronaccounting.com/esop-at-acquisition-and-change-of-control/#breadcrumb" }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How ESOP treatment is structured at an acquisition or change of control",
        "description": "Step-by-step process to map the grants, apply the deal terms, structure the acceleration, model the cash-out and tax, and document the option treatment in a change-of-control event.",
        "totalTime": "P21D",
        "step": [
            {
                "@type": "HowToStep",
                "name": "Map the grants",
                "text": "Inventory vested and unvested options, vesting schedules and any acceleration clauses across the cap table."
            },
            {
                "@type": "HowToStep",
                "name": "Read the deal",
                "text": "Apply the term sheet and ESOP rules to determine how each grant is treated under the transaction."
            },
            {
                "@type": "HowToStep",
                "name": "Structure acceleration",
                "text": "Set or negotiate single-trigger or double-trigger acceleration and the key-executive terms."
            },
            {
                "@type": "HowToStep",
                "name": "Model outcomes and tax",
                "text": "Quantify the cash-out, the rollover exchange ratio and the perquisite and capital-gains tax per employee."
            },
            {
                "@type": "HowToStep",
                "name": "Document and communicate",
                "text": "Prepare board approvals, option-treatment documents and clear employee communication for the transition."
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
        "name": "ESOP at Acquisition Key Terms",
        "definedTerm": [
            {
                "@type": "DefinedTerm",
                "name": "Single-trigger acceleration",
                "description": "A clause that vests unvested options on one event, a change of control, so options vest when the deal closes."
            },
            {
                "@type": "DefinedTerm",
                "name": "Double-trigger acceleration",
                "description": "A clause that accelerates unvested options only on two events: a change of control and a qualifying termination within a defined window."
            },
            {
                "@type": "DefinedTerm",
                "name": "Rollover",
                "description": "Conversion of existing options into acquirer options on an agreed exchange ratio, or reinvestment of proceeds into a new incentive scheme."
            },
            {
                "@type": "DefinedTerm",
                "name": "Cash-out",
                "description": "Settlement of a vested option for cash equal to the deal price per share less the exercise price."
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
                        ESOP at Acquisition and Change of Control
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Acceleration:</span> single-trigger versus double-trigger, structured for the deal.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Unvested options:</span> accelerate, roll over, assume or lapse.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Vested options:</span> cash-out, acquirer shares or a rollover.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> M&A ESOP work from Rs 49,999 (Exl GST and Govt. Charges).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  15+ Years on startup equity and M&A</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP at Acquisition%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP at Acquisition%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20my%20company%20is%20in%20a%20deal%20and%20I%20need%20help%20with%20ESOP%20treatment%20at%20the%20change%20of%20control.%20Please%20share%20the%20process%20and%20fees." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP at Acquisition',
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
    'ctaText'    => 'Founders and teams across India trust Patron Accounting to get ESOP treatment right through exits, acquisitions and change-of-control events.',
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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth'})">Acceleration Triggers</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth'})">Vested Options</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth'})">Unvested Options</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth'})">Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth'})">Deal Payout Tax</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth'})">Challenges</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth'})">Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth'})">Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth'})">Benefits</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth'})">Single vs Double</button>
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
                    <p><strong>&#128204; TL;DR - ESOP at Acquisition Services at a Glance</strong></p>
                    <p>At an acquisition, unvested ESOPs may accelerate, roll over, be assumed or lapse, and vested ones are usually cashed out; acceleration is single-trigger or double-trigger. We structure, negotiate and document all of it.</p>
                </div>
                <p>When your company is acquired, your ESOPs are suddenly worth real money, or nothing at all, depending on how the deal treats them. Patron Accounting structures and negotiates ESOP treatment at a change of control: acceleration triggers, unvested-option treatment, rollover into acquirer equity and the cash-out, so founders and teams get what they earned and the deal stays clean.</p>
                <p>A change of control is the moment ESOPs are tested. What happens to vested and unvested options depends on the ESOP rules, the offer letters and the deal the company strikes with the buyer. Get the acceleration and treatment right and the team is rewarded and retained; get it wrong and people who built the company can walk away with nothing. We make sure the treatment is deliberate, not accidental.</p>
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
                <h2 class="section-title">Acceleration: Single-Trigger vs Double-Trigger</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Acceleration speeds up vesting when a major event occurs, so unvested options vest early. There are two structures, and the choice shapes both employee outcomes and the deal.</p>
                    <p><strong>Single-trigger:</strong> unvested options vest automatically on a single event, a change of control. It is employee-friendly but generally avoided, as it removes the retention incentive the acquirer wants.</p>
                    <p><strong>Double-trigger:</strong> the market standard. Unvested options accelerate only if there is both a change of control and a qualifying termination, without cause or for good reason, within a defined window after closing, usually around twelve months.</p>
                    <p><strong>Why double-trigger is the standard:</strong> it protects employees against being fired right after the deal, while keeping those who stay on their vesting schedule, so the acquirer keeps its retention incentive intact.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP at Acquisition:</strong></p>
                    <ul>
                        <li><strong>Change of control:</strong> an acquisition, merger or other event that transfers control of the company.</li>
                        <li><strong>Qualifying termination:</strong> being let go without cause, or resigning for good reason, within a set window after closing.</li>
                        <li><strong>Exchange ratio:</strong> the rate at which existing options convert into acquirer options on a rollover.</li>
                        <li><strong>Cash-out:</strong> settling a vested option for the deal price per share less the exercise price.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP at Acquisition</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Structured for</span>
                        <strong>Acceleration and Cash-Out</strong>
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
            <h2 class="section-title">What Happens to Vested Options</h2>
            <div class="content-text">
                
                <p>Vested options are the ones the employee has already earned, and at a change of control they usually convert to value. The common routes are:</p>
                <ul>
                    <li><strong>Cash-out:</strong> the option is settled for cash equal to the deal price per share less the exercise price.</li>
                    <li><strong>Acquirer shares:</strong> the vested options or resulting shares are exchanged for shares in the acquirer.</li>
                    <li><strong>Rollover:</strong> a financial buyer may invite key people to roll proceeds into a new incentive scheme.</li>
                </ul>
                <p><strong>Same terms as shareholders:</strong> the consideration for vested options usually tracks what other shareholders receive in the deal, whether cash, shares or a mix.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Happens to Unvested Options</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Accelerate</td><td>Unvested options vest early under a single or double-trigger clause.</td></tr>
                        <tr><td>Roll over / convert</td><td>Options are exchanged for acquirer options on an agreed exchange ratio.</td></tr>
                        <tr><td>Assume</td><td>The acquirer assumes the options on the original vesting schedule.</td></tr>
                        <tr><td>Cancel / lapse</td><td>Options not assumed lapse, often with a new acquirer retention plan.</td></tr>

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
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From mapping the grants through to documenting the treatment, we run the change-of-control ESOP analysis so the position is clear before the deal is signed.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Map the grants</h3>
        <p class="step-description">We inventory vested and unvested options, vesting schedules and any acceleration clauses, so the full equity picture is on the table.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vested vs unvested</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acceleration clauses</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="14" width="80" height="72" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="32" y1="32" x2="88" y2="32" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="32" y1="46" x2="78" y2="46" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="32" y1="58" x2="78" y2="58" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="36" cy="70" r="3" fill="#E8712C"/><circle cx="50" cy="70" r="3" fill="#D4DCE8"/></svg></div>
            <span class="illustration-label">Grants Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Read the deal</h3>
        <p class="step-description">We apply the term sheet and ESOP rules to determine each grant's treatment under the transaction.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Term sheet</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-grant treatment</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30 40l14-14 14 14-14 14z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M62 60l14-14 14 14-14 14z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M44 40h32" stroke="#E8712C" stroke-width="2" stroke-dasharray="3 3"/></svg></div>
            <span class="illustration-label">Deal Read</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Structure acceleration</h3>
        <p class="step-description">We set or negotiate the single-trigger or double-trigger acceleration and the key-executive terms, to fit the deal and protect the team.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Single vs double</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Key-exec terms</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12l8 30h-16z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><rect x="44" y="42" width="32" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M52 62l6 6 12-14" stroke="#25D366" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Acceleration Set</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Model outcomes and tax</h3>
        <p class="step-description">We quantify the cash-out, the rollover exchange ratio and the net outcome per employee, plus the perquisite and capital-gains tax.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-employee model</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax mapped</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="34" y="12" width="52" height="76" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="42" y="20" width="36" height="16" rx="3" fill="#fff" stroke="#14365F" stroke-width="1"/><rect x="42" y="44" width="10" height="10" rx="2" fill="#E8712C"/><rect x="55" y="44" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="68" y="44" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="42" y="58" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="55" y="58" width="10" height="10" rx="2" fill="#D4DCE8"/><rect x="68" y="58" width="10" height="10" rx="2" fill="#F5A623"/></svg></div>
            <span class="illustration-label">Outcomes Modelled</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Document and communicate</h3>
        <p class="step-description">We prepare board approvals, the option-treatment documents and clear employee communication for the transition.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approvals</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Clear comms</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="8" width="60" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="42" y1="26" x2="78" y2="26" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="42" y1="40" x2="72" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="42" y1="52" x2="72" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="80" cy="74" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M73 74l5 5 9-9" stroke="#25D366" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Documented</span>
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
            <h2 class="section-title">How a Deal Payout Is Taxed in India</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>On exercise:</strong> the spread between fair market value and the exercise price is taxed as a salary perquisite.</li>
                    <li><strong>On cash-out or sale:</strong> the gain over the value already taxed at exercise is taxed as capital gains.</li>
                    <li><strong>Holding period:</strong> how long the shares are held drives whether the gain is short-term or long-term.</li>
                    <li><strong>Rollover:</strong> rolling proceeds into acquirer equity has its own timing and valuation, which we map.</li>
                </ul>
                <p>For the detail, see our <a href="/itr-for-capital-gains">ITR for capital gains</a> service for the sale-side tax.</p>

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
                        <tr><td>No acceleration clause, team loses unvested value</td><td>Employees who have not vested can walk away with nothing</td><td>Negotiate acceleration or rollover into the deal terms.</td></tr>
                        <tr><td>Single-trigger scares off the acquirer</td><td>Buyer fears the team will leave, may resist or reprice</td><td>Restructure to double-trigger to keep retention intact.</td></tr>
                        <tr><td>Employees unclear what they will receive</td><td>Loss of trust during a sensitive transition</td><td>Model and communicate the per-employee outcome clearly.</td></tr>
                        <tr><td>Unexpected tax on cash-out</td><td>Net proceeds far below expectations</td><td>Plan the exercise and cash-out timing for the tax impact.</td></tr>

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
            <h2 class="section-title">M&A ESOP Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 49,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Scope of the starting fee</td><td>Deal review, acceleration structuring and per-employee outcome modelling</td></tr>
                        <tr><td>Documentation, board approvals, employee communication</td><td>Scoped to the deal</td></tr>
                        <tr><td>Valuation</td><td>Billed at actuals where required</td></tr>
                        <tr><td>Larger transactions</td><td>Usually sits within a wider M&A advisory and due-diligence engagement</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP at Acquisition consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20get%20my%20ESOP%20treatment%20right%20for%20an%20acquisition.%20Please%20share%20how%20acceleration%2C%20rollover%20and%20cash-out%20work%20and%20your%20fees." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>ESOP deal review and outcome model</td><td>1 to 2 weeks, fast enough to feed a live negotiation</td></tr>
                        <tr><td>Structuring or renegotiating acceleration</td><td>A further 2 to 3 weeks</td></tr>
                        <tr><td>Papering the option treatment with board approvals</td><td>Within the same 2 to 3 week window, per the deal timetable</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>We prioritise the analysis so the ESOP position is clear before the deal is signed.</strong> ESOP treatment is fixed once the deal documents are executed, so the review, structuring and modelling must happen during the negotiation, not after closing.</p>

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
            <h2 class="section-title">Why Handle It With a Specialist</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div>
            <h3 class="feature-title">Know every grant's treatment</h3>
            <p class="feature-text">Know exactly how every grant is treated before the deal closes, vested and unvested.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Acceleration that fits the deal</h3>
            <p class="feature-text">Acceleration structured to reward the team without derailing the deal or scaring the acquirer.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg></div>
            <h3 class="feature-title">Modelled per employee</h3>
            <p class="feature-text">Cash-out, rollover and tax modelled per employee, with no surprises on net proceeds.</p>
        </article>
<article class="feature-card">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div>
            <h3 class="feature-title">Trust protected</h3>
            <p class="feature-text">Clean documentation and communication that protects trust through the change of control.</p>
        </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders Through Exits and Deals</h2>
            <div class="content-text">
                
                <p>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Processed  |  15+ Years</p>
                <p>Patron Accounting LLP is a CA and CS firm with 15+ years on startup equity, M&A and ESOP treatment through change-of-control events.</p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India, both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Single-Trigger vs Double-Trigger</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Single-trigger</th><th>Double-trigger</th></tr></thead>
                    <tbody>
                        <tr><td>Triggers</td><td>One: a change of control</td><td>Two: change of control plus qualifying termination</td></tr>
                        <tr><td>Who it favours</td><td>Employees</td><td>Balances employees and acquirer</td></tr>
                        <tr><td>On the deal</td><td>Acquirers often resist it</td><td>Market standard, retention-friendly</td></tr>
                        <tr><td>Common use</td><td>Rare, sometimes for key execs</td><td>The default for most teams</td></tr>

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
                
                <p>This scenario builds on our <a href="/esop-management-and-compliance-services">ESOP management and compliance services</a>, and the deal value flows through <a href="/transfer-of-shares">transfer of shares</a> and <a href="/itr-for-capital-gains">ITR for capital gains</a>.</p>
                <p>For the wider equity picture, see our <a href="/esop-valuation-services">ESOP valuation services</a> and <a href="/esop-secondary-sale-advisory">ESOP secondary sale advisory</a>, and the full <a href="/esop-services">ESOP services hub</a>. For ESOP employees on the return, see <a href="/itr-for-esop-employees">ITR for ESOP employees</a>.</p>

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
                
                <p><strong>Acceleration clauses:</strong> acceleration is a contractual provision in the ESOP scheme or offer letter; single-trigger vests on a change of control alone, while double-trigger requires a change of control plus a qualifying termination within a defined window.</p>
                <p><strong>Option treatment:</strong> the deal documents set whether unvested options accelerate, roll over or convert on an exchange ratio, are assumed, or lapse, and how vested options are cashed out or exchanged.</p>
                <p><strong>Perquisite tax:</strong> on exercise, the spread between fair market value and the exercise price is a salary perquisite under Section 17(2)(vi) of the Income-tax Act, with fair market value set under Rule 3 and the related valuation rules.</p>
                <p><strong>Capital gains:</strong> on a later sale or cash-out, the gain over the perquisite-taxed value is taxed as capital gains, with the rate driven by the holding period.</p>
                <p>Authoritative sources: <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> (Section 17(2)(vi), Rule 3, capital gains), the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> (Section 62, Companies Act), the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Income-tax Act and Rules</a>, and <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> (listed-company acquisitions and the takeover code).</p>

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
                    <p class="faq-expanded__lead">Common questions on ESOP treatment, acceleration triggers, rollover and cash-out tax in an acquisition.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP at Acquisition',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What happens to ESOPs when a company is acquired?</h3>
                        <div class="faq-expanded__a"><p>It depends on the ESOP rules and the deal. Vested options are usually cashed out at the deal price less the exercise price, or exchanged for acquirer shares. Unvested options may accelerate under a trigger clause, be rolled over or converted into acquirer options, be assumed on the original schedule, or lapse if not assumed. The acquirer often puts in a new retention plan. We map the exact treatment for each grant before the deal closes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between single-trigger and double-trigger acceleration?</h3>
                        <div class="faq-expanded__a"><p>Single-trigger acceleration vests unvested options on one event, a change of control, so options vest the moment the deal closes. Double-trigger acceleration requires two events: a change of control and a qualifying termination, where the employee is let go without cause or resigns for good reason within a set window after closing. Double-trigger is the market standard because it protects employees while keeping those who stay on their vesting schedule.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Acquisition mein unvested ESOP ka kya hota hai?</h3>
                        <div class="faq-expanded__a"><p>Unvested ESOP ka treatment deal aur scheme pe depend karta hai. Wo accelerate ho sakte hain trigger clause ke tahat, acquirer ke options mein roll over ya convert ho sakte hain, original schedule pe assume ho sakte hain, ya lapse ho sakte hain agar assume na ho. Aksar acquirer naya retention plan deta hai. Hum har grant ka exact treatment deal se pehle map karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Why do acquirers prefer double-trigger acceleration?</h3>
                        <div class="faq-expanded__a"><p>Acquirers prefer double-trigger because single-trigger vests everyone the day the deal closes, which removes the incentive for key people to stay and contribute under new ownership. With double-trigger, unvested options accelerate only if the employee is also terminated without cause, so those who remain keep vesting normally. This protects the acquirer's retention goals while still safeguarding employees who are let go after the deal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is an ESOP cash-out taxed in India?</h3>
                        <div class="faq-expanded__a"><p>There are two tax points. When the option is exercised, the spread between the fair market value and the exercise price is taxed as a salary perquisite. When the resulting shares are later sold or cashed out in the deal, the gain over the value already taxed at exercise is taxed as capital gains, short-term or long-term depending on the holding period. A direct cash settlement of options is taxed according to its character, which we assess for each case.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is an ESOP rollover in an acquisition?</h3>
                        <div class="faq-expanded__a"><p>A rollover is where, instead of cashing out, option holders receive equity in the acquiring company, with their existing options converted into acquirer options on an agreed exchange ratio, or their cash proceeds reinvested into a new incentive scheme. Financial buyers such as private equity funds often offer key employees a rollover to keep them invested in the future business. We model the exchange ratio and the resulting position so employees understand what they are taking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Founder ke ESOP exit pe accelerate karne chahiye kya?</h3>
                        <div class="faq-expanded__a"><p>Yeh deal aur retention goals pe depend karta hai. Single-trigger founder aur team ko turant vest kar deta hai, lekin acquirer ko retention ki chinta hoti hai. Double-trigger zyada balanced hai. Key executives ke liye kabhi-kabhi fuller acceleration negotiate hota hai kyunki wo exit ke liye critical hote hain. Hum aapke deal ke hisaab se structure karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What if our ESOP has no acceleration clause at all?</h3>
                        <div class="faq-expanded__a"><p>Then unvested options follow whatever the deal and the acquirer decide, and employees who have not yet vested can lose that value, which has caused real disputes in past Indian exits. If there is no clause, the treatment becomes a negotiation: we work to secure acceleration, rollover or a retention plan in the deal terms so the team is not left empty-handed. The lesson for others is to build a clear change-of-control clause into the scheme from the start.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Vested options?</strong> Usually cashed out.</li>
                    <li><strong>Unvested options?</strong> Accelerate, roll over, assume or lapse.</li>
                    <li><strong>Single-trigger?</strong> Vests on change of control alone.</li>
                    <li><strong>Double-trigger?</strong> Change of control plus termination.</li>
                    <li><strong>Tax?</strong> Perquisite on exercise, capital gains on sale.</li>
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
                
                <p>ESOP treatment is decided in the deal documents, and once they are signed the outcome for every employee is fixed. The time to review the scheme, structure the acceleration and model the cash-out is while the deal is being negotiated, not after closing. Bring us in early in the transaction, so the ESOP position strengthens the deal and rewards the people who built the company, rather than becoming a last-minute problem.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your ESOP Treatment Right at the Deal</h2>
            <div class="content-text" style="text-align:left;color:#FFFFFF !important;">
                
                <p style="color:rgba(255,255,255,0.92);">A change of control turns ESOPs from a promise into cash or acquirer equity, but only if the acceleration, treatment and tax are handled deliberately.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP, a CA and CS firm with 15+ years of startup-equity and transaction experience, reviews the scheme, structures the acceleration, models the cash-out and rollover, and documents the treatment, so your deal rewards the team and closes cleanly.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20want%20to%20get%20my%20ESOP%20treatment%20right%20for%20an%20acquisition.%20Please%20share%20how%20acceleration%2C%20rollover%20and%20cash-out%20work%20and%20your%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP at Acquisition%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ESOP at Acquisition%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Change-of-Control ESOP Support Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">In-person and remote support on acceleration, rollover and cash-out for your acquisition.</p>
            
            <div class="pa-city-block" style="margin-bottom:24px;">
                <p style="text-align:center;color:var(--text-secondary);font-size:14px;max-width:760px;margin:0 auto;">We advise founders, CFOs and executives nationwide, with offices in Pune, Mumbai, Delhi and Gurugram and remote support across India. The ESOP deal review, acceleration structuring and cash-out modelling is handled the same way wherever you are based.</p>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for change-of-control ESOPs</div>
                <div class="pa-cross-grid"><a href="/esop-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-valuation-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Valuation Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esop-secondary-sale-advisory" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Secondary Sale Advisory</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/transfer-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Transfer of Shares</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every six months for changes to ESOP perquisite or capital-gains taxation, Section 17(2)(vi) or Rule 3 valuation, takeover or M&A regulation affecting option treatment, and shifts in market acceleration norms (Tier 2 freshness).</p>
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
